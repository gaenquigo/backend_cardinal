<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Models\Activity;
use Illuminate\Http\Request;
use App\Models\Objective;
use App\Models\ObjectiveProduct;
use Illuminate\Support\Facades\DB as FacadesDB;
use stdClass;
use Validator;

/**
 * Class ObjectiveController
 * @package App\Http\Controllers
 */
class ObjectiveController extends UtilsController
{
    /**
     * Obtiene productos objetivos
     */
    public function getObjectiveInfo($objective)
    {
        return $objective;
    }
    /**
     * Obtiene su producto objetivo
     */
    public function index(Request $request)
    {
        try {
            $validator = $this->validateObjective($request);
            $responseValidation = UtilsController::getIndexData(
                $request,
                $validator,
                "objective",
                false,
                true
            );
            $errors = $responseValidation["errors"];
            $response_info = $responseValidation["response_info"];
            $response = $errors == true
                ? new ApiResponse(400, "Bad request", $response_info)
                : new ApiResponse(200, "Success", $response_info);
        } catch (\Exception $e) {
            UtilsController::setTransactionalLog($request, $e);
            $response = new ApiResponse(500, "Error", ["messages" =>  'Internal Server Error ']);
        }
        return $response->response();
    }
    /**
     * Crea uno o varios productos objetivos
     */
    public function store(Request $request)
    {
        try {
            $validator = $this->validateObjective($request);
            $errors = false;
            $response_info = [];
            $response_info["message"] = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info["errors"] = $validator->messages();
                $errors = true;
            } else {
                $responseValidation = UtilsController::checkStructure($request, "project");
                $errors = $responseValidation["errors"];
                if (!$responseValidation["errors"]) {
                    $project = $responseValidation["data"];
                    $summaryObjective = Objective::where("project_id", "=", $project->id)->sum('weighing');
                    $objectives_size = sizeof($request->objectives);
                    FacadesDB::beginTransaction();
                    foreach ($request->objectives as $keyObjective => $objective) {
                        $validateObjective = $this->validateInternalObjectiveRequest($objective);
                        if ($validateObjective->fails()) {
                            $response_info["objectives"]["Objetivo " . $keyObjective]["message"] = Controller::$str_struct_err;
                            $response_info["objectives"]["Objetivo " . $keyObjective]["errors"] = $validateObjective->messages();
                            $errors = true;
                        } else {
                            $exist = Objective::where('objective_code', '=', $objective["objective_code"] . "-" . $project->project_code)
                                ->where('project_id', '=', $project["id"])->first();
                            if ($exist) {
                                $response_info["objectives"]["Objetivo " . $keyObjective]["message"] = Controller::$str_struct_err;
                                $response_info["objectives"]["Objetivo " . $keyObjective]["errors"] = ["El objetivo con objective_code " .
                                    $objective["objective_code"] . " para el proyecto ingresado ya existe."];
                                $errors = true;
                            } else {
                                if ($keyObjective == ($objectives_size - 1) && $objective["weighing"] != (100 - $summaryObjective)) {
                                    $response_info["objectives"]["Objetivo " . $keyObjective]["message"] = Controller::$str_struct_err;
                                    $response_info["objectives"]["Objetivo " . $keyObjective]["errors"] = [Controller::$str_sumatory_err];
                                    $errors = true;
                                } else {
                                    $summaryObjective = $summaryObjective + $objective["weighing"];
                                    if ($summaryObjective > 100) {
                                        $response_info["objectives"]["Objetivo " . $keyObjective]["message"] = Controller::$str_struct_err;
                                        $response_info["objectives"]["Objetivo " . $keyObjective]["errors"] = [Controller::$str_sumatory_err];
                                        $errors = true;
                                    } else {
                                        $response_info["objectives"]["Objetivo " . $keyObjective]["message"] = Controller::$str_struct_correct;
                                        $arrayObjective = [
                                            'project_id' => $project->id,
                                            'objective' => $objective["objective"],
                                            'weighing' => $objective["weighing"],
                                            'internal_status' => $objective["internal_status"],
                                            'objective_code' => $objective["objective_code"] . "-" . $project->project_code,
                                        ];
                                        $response_info["message"] = "Se han creado los objetivos";
                                        Objective::create($arrayObjective);
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
     * Actualiza un producto objetivo
     */
    public function update(Request $request)
    {
        try {
            $validator = $this->validateObjective($request);
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $responseValidation = UtilsController::checkStructure($request, "project");
                if (!$responseValidation["errors"]) {
                    $project = $responseValidation["data"];
                    $objective = Objective::where('objective_code', '=', $request->objective["objective_code"] . "-" . $project->project_code)
                        ->where('project_id', '=', $project["id"])->first();
                    if ($objective) {
                        $summaryObjective = Objective::where("project_id", "=", $project->id)->sum('weighing') + $request->objective["weighing"] - $objective->weighing;
                        if ($summaryObjective > 100) {
                            $response_info->errors = [Controller::$str_sumatory_err];
                        } else {
                            FacadesDB::beginTransaction();
                            $objective->objective = $request->objective["objective"] ?: $objective->objective;
                            $objective->weighing = $request->objective["weighing"] ?: $objective->weighing;
                            $objective->internal_status = $request->objective["internal_status"] ?: $objective->internal_status;
                            $objective->save();
                            $errors = false;
                            $response_info->message = "Se actualizó el objetivo con objective_code " . $request->objective["objective_code"] . " para el proyecto";
                            FacadesDB::commit();
                        }
                    } else {
                        $response_info->errors = ["El objetivo con objective_code " . $request->objective["objective_code"] . " para el proyecto ingresado no existe."];
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
     * Elimina un producto objetivo
     */
    public function destroy(Request $request)
    {
        try {
            $validator = $this->validateObjective($request);
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $responseValidation = UtilsController::checkStructure($request, "objective");
                if (!$responseValidation["errors"]) {
                    $objective = $responseValidation["data"];
                    $objectives_products = ObjectiveProduct::where('objective_id', '=', $objective["id"])->get();
                    $activities_size = sizeof(Activity::where('objective_id', '=', $objective["id"])->get());
                    $objectives_products_size = sizeof($objectives_products);
                    if ($objectives_products_size == 0 && $activities_size == 0) {
                        FacadesDB::beginTransaction();
                        $objective->delete();
                        $response_info->message = "Objetivo eliminado";
                        $errors = false;
                        FacadesDB::commit();
                    } else {
                        $response_info->errors = ["No puede eliminar un objetivo con productos objetivos asociados"];
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
     * eliminar y obtener un objetivo
     */
    private function validateObjective($request)
    {
        switch ($request->method()) {
            case "POST":
                $rules = [
                    'pai_code' => 'required|numeric',
                    'strategic_line_code' => 'required|numeric',
                    'program_code' => 'required|numeric',
                    'project_code' => 'required|numeric',
                    'objectives' => 'required|array|min:1',
                ];
                $messages = [
                    'pai_code.required' => ':attribute es requerido.',
                    'pai_code.numeric' => ':attribute debe ser un numero.',
                    'strategic_line_code.required' => ':attribute es requerido.',
                    'strategic_line_code.numeric' => ':attribute debe ser un numero.',
                    'program_code.required' => ':attribute es requerido.',
                    'program_code.numeric' => ':attribute debe ser un numero.',
                    'project_code.required' => ':attribute es requerido.',
                    'project_code.numeric' => ':attribute debe ser un numero.',
                    'objectives.required' => ':attribute es un campo requerido.',
                    'objectives.array' => ':attribute debe ser un array.',
                    'objectives.min' => ':attribute debe tener un tamaño superior a 1',
                ];
                $attributes = [
                    'pai_code' => 'Código interno del PAI',
                    'strategic_line_code' => 'Código Interno de la línea estratégica',
                    'program_code' => 'Código Interno del programa',
                    'project_code' => 'Código Interno del proyecto',
                    'objectives' => 'Los objetivos',
                ];
                break;
            case "PUT":
                $rules = [
                    'pai_code' => 'required|numeric',
                    'strategic_line_code' => 'required|numeric',
                    'program_code' => 'required|numeric',
                    'project_code' => 'required|numeric',
                    'objective.objective' => 'nullable|min:3',
                    'objective.weighing' => 'nullable|integer|min:1|max:100',
                    'objective.internal_status' => 'nullable|numeric|max:10',
                    'objective.objective_code' => 'required|numeric',
                ];
                $messages = [
                    'pai_code.required' => ':attribute es requerido.',
                    'pai_code.numeric' => ':attribute debe ser un numero.',
                    'strategic_line_code.required' => ':attribute es un campo requerido.',
                    'strategic_line_code.numeric' => ':attribute  debe ser un numero.',
                    'program_code.required' => ':attribute es un campo requerido.',
                    'program_code.numeric' => ':attribute  debe ser un numero.',
                    'project_code.required' => ':attribute es un campo requerido.',
                    'project_code.numeric' => ':attribute  debe ser un numero.',
                    'objective.objective.min' => ':attribute debe tener mínimo 3 caracteres.',
                    'objective.weighing.integer' => ':attribute debe ser un numero entero.',
                    'objective.weighing.min' => ':attribute debe ser mayor o igual a 1',
                    'objective.weighing.max' => ':attribute debe ser menor o igual a 100',
                    'objective.internal_status.numeric' => ':attribute debe ser un numero.',
                    'objective.internal_status.max' => ':attribute debe ser menor o igual a 10',
                    'objective.objective_code.required' => ':attribute es requerido.',
                    'objective.objective_code.numeric' => ':attribute debe ser un numero.',
                ];
                $attributes = [
                    'pai_code' => 'Código interno del PAI',
                    'strategic_line_code' => 'Código Interno de la línea estratégica',
                    'program_code' => 'Código interno del programa',
                    'project_code' => 'Código interno del proyecto',
                    'objective.objective' => 'Nombre del proyecto',
                    'objective.weighing' => 'La ponderacion',
                    'objective.internal_status' => 'Estado Interno',
                    'objective.objective_code' => 'Código Interno del objetivo',
                ];
                break;
            case "GET":
            case "DELETE":
                $rules = [
                    'pai_code' => 'required|numeric',
                    'strategic_line_code' => 'required|numeric',
                    'program_code' => 'required|numeric',
                    'project_code' => 'required|numeric',
                    'objective_code' => 'required|numeric',
                ];
                $messages = [
                    'pai_code.required' => ':attribute es requerido.',
                    'pai_code.numeric' => ':attribute debe ser un numero.',
                    'strategic_line_code.required' => ':attribute es un campo requerido.',
                    'strategic_line_code.numeric' => ':attribute debe ser un numero.',
                    'program_code.required' => ':attribute es un campo requerido.',
                    'program_code.numeric' => ':attribute debe ser un numero.',
                    'project_code.required' => ':attribute es un campo requerido.',
                    'project_code.numeric' => ':attribute debe ser un numero.',
                    'objective_code.required' => ':attribute es un campo requerido.',
                    'objective_code.numeric' => ':attribute debe ser un numero.',
                ];
                $attributes = [
                    'pai_code' => 'Código interno del PAI',
                    'strategic_line_code' => 'Código Interno de la línea estratégica',
                    'program_code' => 'Código Interno del programa',
                    'project_code' => 'Código Interno del proyecto',
                    'objective_code' => 'Código Interno del objetivo',
                ];
                break;
        }
        return Validator::make($request->all(), $rules, $messages, $attributes);
    }
    /**
     * Función para validar que los datos del request sean correctos 
     * antes de pasar a la funcion principal para crear, actualizar,
     * eliminar y obtener un objetivo interno
     */
    private function validateInternalObjectiveRequest(array $request)
    {
        $rules = [
            'objective' => 'required|min:3',
            'weighing' => 'required|integer|min:1|max:100',
            'internal_status' => 'required|numeric|max:10',
            'objective_code' => 'required|numeric',
        ];
        $messages = [
            'objective.required' => ':attribute es requerido.',
            'objective.min' => ':attribute debe tener mínimo 3 caracteres.',
            'weighing.required' => ':attribute es un campo requerido.',
            'weighing.integer' => ':attribute debe ser un numero entero.',
            'weighing.min' => ':attribute debe ser mayor o igual a 1',
            'weighing.max' => ':attribute debe ser menor o igual a 100',
            'internal_status.required' => ':attribute es un campo requerido.',
            'internal_status.numeric' => ':attribute debe ser un numero.',
            'internal_status.max' => ':attribute debe ser menor o igual a 10',
            'objective_code.required' => ':attribute es requerido.',
            'objective_code.numeric' => ':attribute debe ser un numero.',
        ];
        $attributes = [
            'weighing' => 'La ponderacion',
            'objective' => 'Nombre del objetivo',
            'internal_status' => 'Estado Interno',
            'objective_code' => 'Código Interno del objetivo',
        ];
        return Validator::make($request, $rules, $messages, $attributes);
    }
}
