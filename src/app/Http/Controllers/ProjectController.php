<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Models\Objective;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\DB as FacadesDB;
use stdClass;
use Validator;

/**
 * Class ProjectController
 * @package App\Http\Controllers
 */
class ProjectController extends UtilsController
{

    /**
     * Obtiene el programa de una linea estrategica y sus proyectos
     */
    public function getProjectInfo($project)
    {
        return $project;
    }
    /**
     * Obtiene la data  el programa de una linea estrategica
     */
    public function index(Request $request)
    {
        try {
            $validator = $this->validateProject($request);
            $responseValidation = UtilsController::getIndexData(
                $request,
                $validator,
                "project",
                false,
                true
            );
            $errors = $responseValidation["errors"];
            $response_info = $responseValidation["response_info"];
            $response = $errors == true
                ? new ApiResponse(400, "Bad request", $response_info)
                : new ApiResponse(200, "Success", $this->getProjectInfo($response_info));
        } catch (\Exception $e) {
            UtilsController::setTransactionalLog($request, $e);
            $response = new ApiResponse(500, "Error", ["messages" =>  'Internal Server Error ']);
        }
        return $response->response();
    }
    /**
     * Valida el request y crea el programa de una linea estrategica
     */
    public function store(Request $request)
    {
        try {
            $validator = $this->validateProject($request);
            $errors = false;
            $response_info = [];
            $response_info["message"] = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info["errors"] = $validator->messages();
                $errors = true;
            } else {
                $responseValidation = UtilsController::checkStructure($request, "program");
                $errors = $responseValidation["errors"];
                if (!$responseValidation["errors"]) {
                    $program = $responseValidation["data"];
                    $summaryProject = Project::where("program_id", $program->id)->sum('weighing');
                    $project_size = sizeof($request->projects);
                    FacadesDB::beginTransaction();
                    foreach ($request->projects as $keyProject => $project) {
                        $validateProject = $this->validateInternalProjectRequest($project);
                        if ($validateProject->fails()) {
                            $response_info["projects"]["Proyecto " . $keyProject]["message"] = Controller::$str_struct_err;
                            $response_info["projects"]["Proyecto " . $keyProject]["errors"] = $validateProject->messages();
                            $errors = true;
                        } else {
                            $exist = Project::where('project_code', $project["project_code"] . "-" . $program->program_code)
                                ->where('program_id', $program["id"])->first();
                            if ($exist) {
                                $response_info["projects"]["Proyecto " . $keyProject]["message"] = Controller::$str_struct_err;
                                $response_info["projects"]["Proyecto " . $keyProject]["errors"] = ["El proyecto con project_code " .
                                    $project["project_code"] . " para el programa ingresado ya existe."];
                                $errors = true;
                            } else {
                                if ($keyProject == ($project_size - 1) && $project["weighing"] != (100 - $summaryProject)) {
                                    $response_info["projects"]["Proyecto " . $keyProject]["message"] = Controller::$str_struct_err;
                                    $response_info["projects"]["Proyecto " . $keyProject]["errors"] = [Controller::$str_sumatory_err];
                                    $errors = true;
                                } else {
                                    $summaryProject = $summaryProject + $project["weighing"];
                                    if ($summaryProject > 100) {
                                        $response_info["projects"]["Proyecto " . $keyProject]["message"] = Controller::$str_struct_err;
                                        $response_info["projects"]["Proyecto " . $keyProject]["errors"] = [Controller::$str_sumatory_err];
                                        $errors = true;
                                    } else {
                                        $response_info["projects"]["Proyecto " . $keyProject]["message"] = Controller::$str_struct_correct;
                                        $arrayProject = [
                                            'program_id' => $program->id,
                                            'project' => $project["project"],
                                            'weighing' => $project["weighing"],
                                            'internal_status' => $project["internal_status"],
                                            'project_code' => $project["project_code"] . "-" . $program->program_code,
                                        ];
                                        $response_info["message"] = "Se han creado los proyectos";
                                        Project::create($arrayProject);
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
     * Actualiza los datos de el programa de una linea estrategica
     */
    public function update(Request $request)
    {
        try {
            $validator = $this->validateProject($request);
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $responseValidation = UtilsController::checkStructure($request, "program");
                if (!$responseValidation["errors"]) {
                    $program = $responseValidation["data"];
                    $project = Project::where('project_code', $request->project["project_code"] . "-" . $program->program_code)
                        ->where('program_id', $program["id"])->first();
                    if ($project) {
                        $summaryProjects = Project::where("program_id", $program->id)->sum('weighing') + $request->project["weighing"] - $project->weighing;
                        if ($summaryProjects > 100) {
                            $response_info->errors = [Controller::$str_sumatory_err];
                        } else {
                            FacadesDB::beginTransaction();
                            $project->project = $request->project["project"] ?: $project->project;
                            $project->weighing = $request->project["weighing"] ?: $project->weighing;
                            $project->internal_status = $request->project["internal_status"] ?: $project->internal_status;
                            $project->save();
                            $errors = false;
                            $response_info->message = "Se actualizó el proyecto con project_code " . $request->project["project_code"] . " para el programa";
                            FacadesDB::commit();
                        }
                    } else {
                        $response_info->errors = ["El proyecto con project_code " . $request->project["project_code"] . " para el programa ingresado no existe."];
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
     * Valida y elimina un programa de una linea estrategica
     */
    public function destroy(Request $request)
    {
        try {
            $validator = $this->validateProject($request);
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $responseValidation = UtilsController::checkStructure($request, "project");
                if (!$responseValidation["errors"]) {
                    $project = $responseValidation["data"];
                    $objectives = Objective::where('project_id', $project["id"])->get();
                    $objectives_size = sizeof($objectives);
                    if ($objectives_size == 0) {
                        FacadesDB::beginTransaction();
                        $project->delete();
                        $response_info->message = "Proyecto eliminado";
                        $errors = false;
                        FacadesDB::commit();
                    } else {
                        $response_info->errors = ["No puede eliminar un proyecto con objetivos asociados"];
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
     * antes de pasar a la funcion principal de obtener, crear, 
     * actualizar y eliminar un proyecto
     */
    private function validateProject($request)
    {
        switch ($request->method()) {
            case "POST":
                $rules = [
                    'pai_code' => 'required|numeric',
                    'strategic_line_code' => 'required|numeric',
                    'program_code' => 'required|numeric',
                    'projects' => 'required|array|min:1',
                ];
                $messages = [
                    'pai_code.required' => ':attribute es requerido.',
                    'pai_code.numeric' => ':attribute debe ser un numero.',
                    'strategic_line_code.required' => ':attribute es requerido.',
                    'strategic_line_code.numeric' => ':attribute debe ser un numero.',
                    'program_code.required' => ':attribute es requerido.',
                    'program_code.numeric' => ':attribute debe ser un numero.',
                    'projects.required' => ':attribute es un campo requerido.',
                    'projects.array' => ':attribute debe ser un array.',
                    'projects.min' => ':attribute debe tener un tamaño superior a 1',
                ];
                $attributes = [
                    'pai_code' => 'Código interno del PAI',
                    'strategic_line_code' => 'Código Interno de la línea estratégica',
                    'program_code' => 'Código Interno del programa',
                    'projects' => 'Los proyectos',
                ];
                break;
            case "PUT":
                $rules = [
                    'pai_code' => 'required|numeric',
                    'strategic_line_code' => 'required|numeric',
                    'program_code' => 'required|numeric',
                    'project.project' => 'nullable|min:3',
                    'project.weighing' => 'nullable|integer|min:1|max:100',
                    'project.internal_status' => 'nullable|numeric|max:10',
                    'project.project_code' => 'required|numeric',
                ];
                $messages = [
                    'pai_code.required' => ':attribute es requerido.',
                    'pai_code.numeric' => ':attribute debe ser un numero.',
                    'strategic_line_code.required' => ':attribute es un campo requerido.',
                    'strategic_line_code.numeric' => ':attribute debe ser un numero.',
                    'program_code.required' => ':attribute es un campo requerido.',
                    'program_code.numeric' => ':attribute debe ser un numero.',
                    'project.project.min' => ':attribute debe tener mínimo 3 caracteres.',
                    'project.weighing.integer' => ':attribute debe ser un numero entero.',
                    'project.weighing.min' => ':attribute debe ser mayor o igual a 1',
                    'project.weighing.max' => ':attribute debe ser menor o igual a 100',
                    'project.internal_status.numeric' => ':attribute debe ser un numero.',
                    'project.internal_status.max' => ':attribute debe ser menor o igual a 10',
                    'project.project_code.required' => ':attribute es requerido.',
                    'project.project_code.numeric' => ':attribute debe ser un numero.',
                ];
                $attributes = [
                    'strategic_line_code' => 'Código Interno de la línea estratégica',
                    'pai_code' => 'Código interno del PAI',
                    'program_code' => 'Código interno del programa',
                    'project.project' => 'Nombre del proyecto',
                    'project.weighing' => 'La ponderacion',
                    'project.internal_status' => 'Estado Interno',
                    'project.project_code' => 'Código Interno del proyecto',
                ];
                break;
            case "GET":
            case "DELETE":
                $rules = [
                    'pai_code' => 'required|numeric',
                    'strategic_line_code' => 'required|numeric',
                    'program_code' => 'required|numeric',
                    'project_code' => 'required|numeric',
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
                ];
                $attributes = [
                    'pai_code' => 'Código interno del PAI',
                    'strategic_line_code' => 'Código Interno de la línea estratégica',
                    'program_code' => 'Código Interno del programa',
                    'project_code' => 'Código Interno del proyecto',
                ];
                break;
        }
        return Validator::make($request->all(), $rules, $messages, $attributes);
    }
    /**
     * Función para validar que los datos del request sean correctos 
     * antes de pasar a la funcion principal para validar la
     * estructura interna de un proyecto
     */
    private function validateInternalProjectRequest(array $request)
    {
        $rules = [
            'project' => 'required|min:3',
            'weighing' => 'required|integer|min:1|max:100',
            'internal_status' => 'required|numeric|max:10',
            'project_code' => 'required|numeric',
        ];
        $messages = [
            'project.required' => ':attribute es requerido.',
            'project.min' => ':attribute debe tener mínimo 3 caracteres.',
            'weighing.required' => ':attribute es un campo requerido.',
            'weighing.integer' => ':attribute debe ser un numero entero.',
            'weighing.min' => ':attribute debe ser mayor o igual a 1',
            'weighing.max' => ':attribute debe ser menor o igual a 100',
            'internal_status.required' => ':attribute es un campo requerido.',
            'internal_status.numeric' => ':attribute debe ser un numero.',
            'internal_status.max' => ':attribute debe ser menor o igual a 10',
            'project_code.required' => ':attribute es requerido.',
            'project_code.numeric' => ':attribute debe ser un numero.',
        ];
        $attributes = [
            'weighing' => 'La ponderacion',
            'project' => 'Nombre del proyecto',
            'internal_status' => 'Estado Interno',
            'project_code' => 'Código Interno del proyecto',
        ];
        return Validator::make($request, $rules, $messages, $attributes);
    }
}
