<?php

namespace App\Http\Controllers;


use App\Helpers\ApiResponse;
use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\Project;
use App\Models\StrategicLine;
use Illuminate\Support\Facades\DB as FacadesDB;
use stdClass;
use Validator;

/**
 * Class StrategicLineController
 * @package App\Http\Controllers
 */
class StrategicLineController extends UtilsController
{
    /**
     * Obtiene linea estrategica de un PAI y sus proyectos
     */
    public function getStrategicLineInfo($strategic_line)
    {
        $programs = Program::where('strategic_line_id', $strategic_line["id"])->get();
        foreach ($programs as $program) {
            $projects = Project::where('program_id', $program["id"])->get();
            $program["projects"] = $projects;
        }
        $strategic_line["programs"] = $programs;
        return $strategic_line;
    }
    /**
     * Obtiene la data de la linea estrategica de un PAI
     */
    public function index(Request $request)
    {
        try {
            $validator = $this->validateStrategicLineRequest($request);
            $responseValidation = UtilsController::getIndexData(
                $request,
                $validator,
                "strategic_line",
                false,
                true
            );
            $errors = $responseValidation["errors"];
            $response_info = $responseValidation["response_info"];
            $response = $errors == true
                ? new ApiResponse(400, "Bad request", $response_info)
                : new ApiResponse(200, "Success", $this->getStrategicLineInfo($response_info));
        } catch (\Exception $e) {
            UtilsController::setTransactionalLog($request, $e);
            $response = new ApiResponse(500, "Error", ["messages" =>  'Internal Server Error ']);
        }
        return $response->response();
    }
    /**
     * Valida el request y crea una linea estrategica
     */
    public function store(Request $request)
    {
        try {
            $validator = $this->validateStrategicLineRequest($request);
            $errors = false;
            $response_info = [];
            $response_info["message"] = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info["errors"] = $validator->messages();
                $errors = true;
            } else {
                $responseValidation = UtilsController::checkStructure($request, "pai");
                $errors = $responseValidation["errors"];
                if (!$responseValidation["errors"]) {
                    $pai = $responseValidation["data"];
                    $summaryStrategicLine = StrategicLine::where("p_a_i_id", $pai->id)->sum('weighing');
                    $strategic_line_size = sizeof($request->strategic_lines);
                    FacadesDB::beginTransaction();
                    foreach ($request->strategic_lines as $strategicLineKey => $strategic_line) {
                        $validateStrategicLine = $this->validateInternalStrategicLineRequest($strategic_line);
                        if ($validateStrategicLine->fails()) {
                            $response_info["strategic_lines"]["Linea Strategica " . $strategicLineKey]["message"] = Controller::$str_struct_err;
                            $response_info["strategic_lines"]["Linea Strategica " . $strategicLineKey]["errors"] = $validateStrategicLine->messages();
                            $errors = true;
                        } else {
                            $exist = StrategicLine::where('strategic_line_code', $strategic_line["strategic_line_code"] . "-" . $pai->pai_code)
                                ->where('p_a_i_id', $pai["id"])->first();
                            if ($exist) {
                                $response_info["strategic_lines"]["Linea Strategica " . $strategicLineKey]["message"] = Controller::$str_struct_err;
                                $response_info["strategic_lines"]["Linea Strategica " . $strategicLineKey]["errors"] = ["La línea estratégica con strategic_line_code " .
                                    $strategic_line["strategic_line_code"] . " para el PAI ingresado ya existe."];
                                $errors = true;
                            } else {
                                if ($strategicLineKey == ($strategic_line_size - 1) && $strategic_line["weighing"] != (100 - $summaryStrategicLine)) {
                                    $response_info["strategic_lines"]["Linea Strategica " . $strategicLineKey]["message"] = Controller::$str_struct_err;
                                    $response_info["strategic_lines"]["Linea Strategica " . $strategicLineKey]["errors"] = [Controller::$str_sumatory_err];
                                    $errors = true;
                                } else {
                                    $summaryStrategicLine = $summaryStrategicLine + $strategic_line["weighing"];
                                    if ($summaryStrategicLine > 100) {
                                        $response_info["strategic_lines"]["Linea Strategica " . $strategicLineKey]["message"] = Controller::$str_struct_err;
                                        $response_info["strategic_lines"]["Linea Strategica " . $strategicLineKey]["errors"] = [Controller::$str_sumatory_err];
                                        $errors = true;
                                    } else {
                                        $response_info["strategic_lines"]["Linea Strategica " . $strategicLineKey]["message"] = Controller::$str_struct_correct;
                                        $arrayStrategicLine = [
                                            'name' => $strategic_line["name"],
                                            'weighing' => $strategic_line["weighing"],
                                            'p_a_i_id' => $pai->id,
                                            'internal_status' => $strategic_line["internal_status"],
                                            'strategic_line_code' => $strategic_line["strategic_line_code"] . "-" . $pai->pai_code,
                                        ];
                                        StrategicLine::create($arrayStrategicLine);
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
            $response = new ApiResponse(500, "Error", ["messages" =>  'Internal Server Error ']);
        }
        return $response->response();
    }
    /**
     * Actualiza los datos de una linea estrategica de un PAI
     */
    public function update(Request $request)
    {
        try {
            $validator = $this->validateStrategicLineRequest($request);
            $response_info = new stdClass();
            $errors = true;
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $pai = UtilsController::checkStructure($request, "pai")["data"];
                if ($pai) {
                    $strategic_line = StrategicLine::where('strategic_line_code', $request->strategic_line["strategic_line_code"] . "-" . $pai->pai_code)
                        ->where('p_a_i_id', $pai["id"])->first();
                    if ($strategic_line) {
                        $summaryStrategicLine = StrategicLine::where("p_a_i_id", "=", $pai->id)->sum('weighing') + $request->strategic_line["weighing"] - $strategic_line->weighing;
                        if ($summaryStrategicLine > 100) {
                            $response_info->errors = [Controller::$str_sumatory_err];
                        } else {
                            FacadesDB::beginTransaction();
                            $strategic_line->name = $request->strategic_line["name"] ?: $strategic_line->name;
                            $strategic_line->weighing = $request->strategic_line["weighing"] ?: $strategic_line->weighing;
                            $strategic_line->internal_status = $request->strategic_line["internal_status"] ?: $strategic_line->internal_status;
                            $strategic_line->save();
                            $errors = false;
                            $response_info->message = "Se actualizó la línea estratégica con strategic_line_code " . $request->strategic_line["strategic_line_code"] . " para el PAI";
                            FacadesDB::commit();
                        }
                    } else {
                        $response_info->errors = ["La línea estratégica con strategic_line_code " . $request->strategic_line["strategic_line_code"] . " para el PAI ingresado no existe."];
                    }
                } else {
                    $response_info->errors = ["El PAI con pai_code " . $request->pai_code . " no existe o ya esta aprobado."];
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
     * Valida y elimina una linea estrategica de un PAI
     */
    public function destroy(Request $request)
    {
        try {
            $validator = $this->validateStrategicLineRequest($request);
            $response_info = new stdClass();
            $errors = true;
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $responseValidation = UtilsController::checkStructure($request, "strategic_line");
                if (!$responseValidation["errors"]) {
                    $programs = Program::where('strategic_line_id', $responseValidation["data"]["id"])->get();
                    $programs_size = sizeof($programs);
                    if ($programs_size == 0) {
                        FacadesDB::beginTransaction();
                        $responseValidation["data"]->delete();
                        $response_info->message = "Línea estratégica eliminada";
                        $errors = false;
                        FacadesDB::commit();
                    } else {
                        $response_info->errors = ["No puede eliminar una línea estratégica con programas asociados"];
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
     * antes de crear, obtener y eliminar lineas estrategicas
     */
    private function validateStrategicLineRequest($request)
    {
        switch ($request->method()) {
            case "POST":
                $rules = [
                    'pai_code' => 'required|numeric',
                    'strategic_lines' => 'required|array|min:1',
                ];
                $messages = [
                    'pai_code.required' => ':attribute es requerido.',
                    'pai_code.numeric' => ':attribute debe ser un numero.',
                    'strategic_lines.required' => ':attribute es un campo requerido.',
                    'strategic_lines.array' => ':attribute debe ser un array.',
                    'strategic_lines.min' => ':attribute debe tener un tamaño superior a 1',
                ];
                $attributes = [
                    'pai_code' => 'Código interno del PAI',
                    'strategic_lines' => 'Las líneas estrategicas',
                ];
                break;
            case "PUT":
                $rules = [
                    'pai_code' => 'required|numeric',
                    'strategic_line.name' => 'nullable|min:3',
                    'strategic_line.weighing' => 'nullable|integer|min:1|max:100',
                    'strategic_line.internal_status' => 'nullable|numeric|max:10',
                    'strategic_line.strategic_line_code' => 'required|numeric',
                ];
                $messages = [
                    'pai_code.required' => ':attribute es requerido.',
                    'pai_code.numeric' => ':attribute debe ser un numero.',
                    'strategic_line.name.min' => ':attribute debe tener mínimo 3 caracteres.',
                    'strategic_line.weighing.integer' => ':attribute debe ser un numero entero.',
                    'strategic_line.weighing.min' => ':attribute debe ser mayor o igual a 1',
                    'strategic_line.weighing.max' => ':attribute debe ser menor o igual a 100',
                    'strategic_line.internal_status.numeric' => ':attribute debe ser un numero.',
                    'strategic_line.internal_status.max' => ':attribute debe ser menor o igual a 10',
                    'strategic_line.strategic_line_code.required' => ':attribute es requerido.',
                    'strategic_line.strategic_line_code.numeric' => ':attribute debe ser un numero.',
                ];
                $attributes = [
                    'strategic_line.name' => 'Nombre del la línea estratégica',
                    'strategic_line.weighing' => 'La ponderacion',
                    'strategic_line.internal_status' => 'Estado Interno',
                    'strategic_line.strategic_line_code' => 'Código Interno de la línea estratégica',
                    'pai_code' => 'Código interno del PAI',
                ];
                break;
            case "GET":
            case "DELETE":
                $rules = [
                    'pai_code' => 'required|numeric',
                    'strategic_line_code' => 'required|numeric',
                ];
                $messages = [
                    'pai_code.required' => ':attribute es requerido.',
                    'pai_code.numeric' => ':attribute debe ser un numero.',
                    'strategic_line_code.required' => ':attribute es un campo requerido.',
                    'strategic_line_code.numeric' => ':attribute debe ser un numero.',
                ];
                $attributes = [
                    'pai_code' => 'Código interno del PAI',
                    'strategic_line_code' => 'Código Interno de la línea estratégica',
                ];
                break;
        }
        return Validator::make($request->all(), $rules, $messages, $attributes);
    }
    /**
     * Función para validar que los datos del request sean correctos 
     * antes de crear una linea estrategica de un PAI
     */
    private function validateInternalStrategicLineRequest(array $request)
    {
        $rules = [
            'name' => 'required|min:3',
            'weighing' => 'required|integer|min:1|max:100',
            'internal_status' => 'required|numeric|max:10',
            'strategic_line_code' => 'required|numeric',
        ];
        $messages = [
            'name.required' => ':attribute es requerido.',
            'name.min' => ':attribute debe tener mínimo 3 caracteres.',
            'weighing.required' => ':attribute es un campo requerido.',
            'weighing.integer' => ':attribute debe ser un numero entero.',
            'weighing.min' => ':attribute debe ser mayor o igual a 1',
            'weighing.max' => ':attribute debe ser menor o igual a 100',
            'internal_status.required' => ':attribute es un campo requerido.',
            'internal_status.numeric' => ':attribute debe ser un numero.',
            'internal_status.max' => ':attribute debe ser menor o igual a 10',
            'strategic_line_code.required' => ':attribute es requerido.',
            'strategic_line_code.numeric' => ':attribute debe ser un numero.',
        ];
        $attributes = [
            'name' => 'Nombre del la línea estratégica',
            'weighing' => 'La ponderacion',
            'internal_status' => 'Estado Interno',
            'strategic_line_code' => 'Código Interno de la línea estratégica',
        ];
        return Validator::make($request, $rules, $messages, $attributes);
    }
}
