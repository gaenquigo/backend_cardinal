<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\Project;
use Illuminate\Support\Facades\DB as FacadesDB;
use stdClass;
use Validator;

/**
 * Class ProgramController
 * @package App\Http\Controllers
 */
class ProgramController extends UtilsController
{
    /**
     * Obtiene la informacion de un programa y sus proyectos
     */
    public function getProgramInfo($program)
    {
        $projects = Project::where('program_id',  $program["id"])->get();
        $program["projects"] = $projects;
        return $program;
    }
    /**
     * Valida y obtiene la informacion de un programa
     */
    public function index(Request $request)
    {
        try {
            $validator = $this->validateProgram($request);
            $responseValidation = UtilsController::getIndexData(
                $request,
                $validator,
                "program",
                false,
                true
            );
            $errors = $responseValidation["errors"];
            $response_info = $responseValidation["response_info"];
            $response = $errors == true
                ? new ApiResponse(400, "Bad request", $response_info)
                : new ApiResponse(200, "Success", $this->getProgramInfo($response_info));
        } catch (\Exception $e) {
            UtilsController::setTransactionalLog($request, $e);
            $response = new ApiResponse(500, "Error", ["messages" =>  'Internal Server Error ']);
        }
        return $response->response();
    }
    /**
     * Valida y crea uno o varios programas en una linea 
     * estrategica 
     */
    public function store(Request $request)
    {
        try {
            $validator = $this->validateProgram($request);
            $errors = false;
            $response_info = [];
            $response_info["message"] = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info["errors"] = $validator->messages();
                $errors = true;
            } else {
                $responseValidation = UtilsController::checkStructure($request, "strategic_line");
                $errors = $responseValidation["errors"];
                if (!$responseValidation["errors"]) {
                    $strategic_line = $responseValidation["data"];
                    $summaryPrograms = Program::where("strategic_line_id", $strategic_line->id)->sum('weighing');
                    $program_size = sizeof($request->programs);
                    FacadesDB::beginTransaction();
                    foreach ($request->programs as $keyProgram => $program) {
                        $validatePrograms = $this->validateInternalProgramRequest($program);
                        if ($validatePrograms->fails()) {
                            $response_info["programs"]["Programa " . $keyProgram]["message"] = Controller::$str_struct_err;
                            $response_info["programs"]["Programa " . $keyProgram]["errors"] = $validatePrograms->messages();
                            $errors = true;
                        } else {
                            $exist = Program::where('program_code',  $program["program_code"] . "-" . $strategic_line->strategic_line_code)
                                ->where('strategic_line_id',  $strategic_line["id"])->first();
                            if ($exist) {
                                $response_info["programs"]["Programa " . $keyProgram]["message"] = Controller::$str_struct_err;
                                $response_info["programs"]["Programa " . $keyProgram]["errors"] = ["El programa con program_code " .
                                    $program["program_code"] . " para la línea estratégica ingresado ya existe."];
                                $errors = true;
                            } else {
                                if ($keyProgram == ($program_size - 1) && $program["weighing"] != (100 - $summaryPrograms)) {
                                    $response_info["programs"]["Programa " . $keyProgram]["message"] = Controller::$str_struct_err;
                                    $response_info["programs"]["Programa " . $keyProgram]["errors"] = [Controller::$str_sumatory_err];
                                    $errors = true;
                                } else {
                                    $summaryPrograms = $summaryPrograms + $program["weighing"];
                                    if ($summaryPrograms > 100) {
                                        $response_info["programs"]["Programa " . $keyProgram]["message"] = Controller::$str_struct_err;
                                        $response_info["programs"]["Programa " . $keyProgram]["errors"] = [Controller::$str_sumatory_err];
                                        $errors = true;
                                    } else {
                                        $objectiveController = new ObjectiveProductController;
                                        $internal_national_program_id = $objectiveController->nationalProgramList($program["national_program_id"]);
                                        if ($internal_national_program_id == null) {
                                            $response_info["programs"]["Programa " . $keyProgram]["message"] = Controller::$str_struct_err;
                                            $response_info["programs"]["Programa " . $keyProgram]["errors"] = ["El programa nacional no existe "];
                                            $errors = true;
                                        } else {
                                            $response_info["programs"]["Programa " . $keyProgram]["message"] = Controller::$str_struct_correct;
                                            $arrayProgram = [
                                                'strategic_line_id' => $strategic_line->id,
                                                'national_program_id' => $internal_national_program_id["value"],
                                                'car_program' => $program["car_program"],
                                                'weighing' => $program["weighing"],
                                                'internal_status' => $program["internal_status"],
                                                'program_code' => $program["program_code"] . "-" . $strategic_line->strategic_line_code,
                                            ];
                                            $response_info["message"] = "Se han creado los programas";
                                            Program::create($arrayProgram);
                                        }
                                    }
                                }
                            }
                        }
                    }
                    $errors == true ? FacadesDB::rollBack() : FacadesDB::commit();
                    $response_info["message"] = $errors == true ? Controller::$str_struct_err : "Se han creado los registros correctamente";
                } else {
                    $errors = true;
                    $response_info["errors"] = $responseValidation["message"];
                }
            }
            $response = $errors == true
                ? new ApiResponse(400, "Bad request", $response_info)
                : new ApiResponse(200, "Success", $response_info);
        } catch (\Exception $e) {
            FacadesDB::rollBack();
            UtilsController::setTransactionalLog($request, $e);
            if ($e && $e->errorInfo && $e->errorInfo[0] == "23505") {
                $response = new ApiResponse(500, "Error", ["messages" => "Este nombre de PAI ya existe"]);
            } else {
                $response = new ApiResponse(500, "Error", ["messages" =>  'Internal Server Error ']);
            }
        }
        return $response->response();
    }
    /**
     * Valida y actualiza un programa de una linea
     * estrategica seleccionada
     */
    public function update(Request $request)
    {
        try {
            $validator = $this->validateProgram($request);
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $responseValidation = UtilsController::checkStructure($request, "strategic_line");
                if (!$responseValidation["errors"]) {
                    $strategic_line = $responseValidation["data"];
                    $program = Program::where('program_code',  $request->program["program_code"] . "-" . $strategic_line->strategic_line_code)
                        ->where('strategic_line_id',  $strategic_line["id"])->first();
                    if ($program) {
                        $summaryPrograms = Program::where("strategic_line_id", $strategic_line->id)->sum('weighing') + $request->program["weighing"] - $program->weighing;
                        if ($summaryPrograms > 100) {
                            $response_info->errors = [Controller::$str_sumatory_err];
                        } else {
                            $objectiveController = new ObjectiveProductController;
                            $internal_national_program_id = $objectiveController->nationalProgramList($request->program["national_program_id"]);
                            if ($internal_national_program_id == null) {
                                $response_info->errors = ["El programa nacional no existe "];
                            } else {
                                FacadesDB::beginTransaction();
                                $program->car_program = $request->program["car_program"] ?: $program->car_program;
                                $program->weighing = $request->program["weighing"] ?: $program->weighing;
                                $program->internal_status = $request->program["internal_status"] ?: $program->internal_status;
                                $program->national_program_id = $internal_national_program_id["value"] ?: $program->national_program_id;
                                $program->save();
                                $errors = false;
                                $response_info->message = "Se actualizó el programa con program_code " . $request->program["program_code"] . " para la línea estratégica";
                                FacadesDB::commit();
                            }
                        }
                    } else {
                        $response_info->errors = ["El programa con program_code " . $request->program["program_code"] . " para la línea estratégica ingresada no existe."];
                    }
                } else {
                    $response_info->errors = $responseValidation["message"];
                }
            }
            $response = $errors == true
                ? new ApiResponse(400, "Bad request", $response_info)
                : new ApiResponse(200, "Success", $response_info);
        } catch (\Exception $e) {
            FacadesDB::rollBack();
            UtilsController::setTransactionalLog($request, $e);
            if ($e && $e->errorInfo && $e->errorInfo[0] == "23505") {
                $response = new ApiResponse(500, "Error", ["messages" => "Este nombre de PAI ya existe"]);
            } else {
                $response = new ApiResponse(500, "Error", ["messages" =>  'Internal Server Error ']);
            }
        }
        return $response->response();
    }
    /**
     * Valida y elimina un programa de una linea
     * estrategica seleccionada
     */
    public function destroy(Request $request)
    {
        try {
            $validator = $this->validateProgram($request);
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $responseValidation = UtilsController::checkStructure($request, "program");
                if (!$responseValidation["errors"]) {
                    $projects = Project::where('program_id',  $responseValidation["data"]["id"])->get();
                    $projects_size = sizeof($projects);
                    if ($projects_size == 0) {
                        FacadesDB::beginTransaction();
                        $responseValidation["data"]->delete();
                        $response_info->message = "Programa eliminado";
                        $errors = false;
                        FacadesDB::commit();
                    } else {
                        $response_info->errors = ["No puede eliminar un programa con proyectos asociados"];
                    }
                } else {
                    $response_info->errors = $responseValidation["message"];
                }
            }
            $response = $errors == true
                ? new ApiResponse(400, "Bad request", $response_info)
                : new ApiResponse(200, "Success", $response_info);
        } catch (\Exception $e) {
            FacadesDB::rollBack();
            UtilsController::setTransactionalLog($request, $e);
            $response = new ApiResponse(500, "Error", ["messages" =>  'Internal Server Error ']);
        }
        return $response->response();
    }
    /**
     * Función para validar que los datos del request sean correctos 
     * antes de pasar a la funcion principal para crear, actualizar,
     * obtener y eliminar un programa
     */
    private function validateProgram($request)
    {
        switch ($request->method()) {
            case "POST":
                $rules = [
                    'pai_code' => 'required|numeric',
                    'strategic_line_code' => 'required|numeric',
                    'programs' => 'required|array|min:1',
                ];
                $messages = [
                    'pai_code.required' => ':attribute es requerido.',
                    'pai_code.numeric' => ':attribute debe ser un numero.',
                    'strategic_line_code.required' => ':attribute es requerido.',
                    'strategic_line_code.numeric' => ':attribute debe ser un numero.',
                    'programs.required' => ':attribute es un campo requerido.',
                    'programs.array' => ':attribute debe ser un array.',
                    'programs.min' => ':attribute debe tener un tamaño superior a 1',
                ];
                $attributes = [
                    'pai_code' => 'Código interno del PAI',
                    'strategic_line_code' => 'Código Interno de la línea estratégica',
                    'programs' => 'Los programas',
                ];
                break;
            case "PUT":
                $rules = [
                    'pai_code' => 'required|numeric',
                    'strategic_line_code' => 'required|numeric',
                    'program.car_program' => 'nullable|min:3',
                    'program.national_program_id' => 'required|numeric|min:1|max:10',
                    'program.weighing' => 'nullable|integer|min:1|max:100',
                    'program.internal_status' => 'nullable|numeric|max:10',
                    'program.program_code' => 'required|numeric',
                ];
                $messages = [
                    'pai_code.required' => ':attribute es requerido.',
                    'pai_code.numeric' => ':attribute debe ser un numero.',
                    'strategic_line_code.required' => ':attribute es un campo requerido.',
                    'strategic_line_code.numeric' => ':attribute debe ser un numero.',
                    'program.car_program.min' => ':attribute debe de tener mas de 3 caracteres.',
                    'program.national_program_id.required' => ':attribute  es un campo requerido.',
                    'program.national_program_id.numeric' => ':attribute debe ser un numero.',
                    'program.national_program_id.min' => ':attribute debe ser mayor o igual a 1',
                    'program.national_program_id.max' => ':attribute debe ser menor o igual a 10',
                    'program.weighing.integer' => ':attribute debe ser un numero entero.',
                    'program.weighing.min' => ':attribute debe ser mayor o igual a 1',
                    'program.weighing.max' => ':attribute debe ser menor o igual a 100',
                    'program.internal_status.numeric' => ':attribute debe ser un numero.',
                    'program.internal_status.max' => ':attribute debe ser menor o igual a 10',
                    'program.program_code.required' => ':attribute es requerido.',
                    'program.program_code.numeric' => ':attribute debe ser un numero.',
                ];
                $attributes = [
                    'strategic_line_code' => 'Código Interno de la línea estratégica',
                    'pai_code' => 'Código interno del PAI',
                    'program.car_program' => 'Nombre del programa',
                    'program.national_program_id' => 'Código DNP Dominio',
                    'program.weighing' => 'La ponderacion',
                    'program.internal_status' => 'Estado Interno',
                    'program.program_code' => 'Código Interno del programa',
                ];
                break;
            case "GET":
            case "DELETE":
                $rules = [
                    'pai_code' => 'required|numeric',
                    'strategic_line_code' => 'required|numeric',
                    'program_code' => 'required|numeric',
                ];
                $messages = [
                    'pai_code.required' => ':attribute es requerido.',
                    'pai_code.numeric' => ':attribute debe ser un numero.',
                    'strategic_line_code.required' => ':attribute es un campo requerido.',
                    'strategic_line_code.numeric' => ':attribute debe ser un numero.',
                    'program_code.required' => ':attribute es un campo requerido.',
                    'program_code.numeric' => ':attribute debe ser un numero.',
                ];
                $attributes = [
                    'pai_code' => 'Código interno del PAI',
                    'strategic_line_code' => 'Código Interno de la línea estratégica',
                    'program_code' => 'Código Interno del programa',
                ];
                break;
        }
        return Validator::make($request->all(), $rules, $messages, $attributes);
    }
    /**
     * Función para validar que los datos del request sean correctos 
     * antes de pasar a la funcion principal para validar la 
     * estructura interna de un programa
     */
    private function validateInternalProgramRequest(array $request)
    {
        $rules = [
            'car_program' => 'required|min:3',
            'national_program_id' => 'required|numeric',
            'weighing' => 'required|integer|min:1|max:100',
            'internal_status' => 'required|numeric|max:10',
            'program_code' => 'required|numeric',
        ];
        $messages = [
            'car_program.required' => ':attribute es requerido.',
            'car_program.min' => ':attribute debe de tener mas de 3 caracteres.',
            'national_program_id.required' => ':attribute es un campo requerido.',
            'national_program_id.numeric' => ':attribute debe ser un numero.',
            'weighing.required' => ':attribute es un campo requerido.',
            'weighing.integer' => ':attribute debe ser un numero entero.',
            'weighing.min' => ':attribute debe ser mayor o igual a 1',
            'weighing.max' => ':attribute debe ser menor o igual a 100',
            'internal_status.required' => ':attribute es un campo requerido.',
            'internal_status.numeric' => ':attribute debe ser un numero.',
            'internal_status.max' => ':attribute debe ser menor o igual a 10',
            'program_code.required' => ':attribute es requerido.',
            'program_code.numeric' => ':attribute debe ser un numero.',
        ];
        $attributes = [
            'car_program' => 'Nombre del programa',
            'national_program_id' => 'Código DNP Dominio',
            'weighing' => 'La ponderacion',
            'internal_status' => 'Estado Interno',
            'program_code' => 'Código Interno del programa',
        ];
        return Validator::make($request, $rules, $messages, $attributes);
    }
}
