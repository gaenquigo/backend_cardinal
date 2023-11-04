<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Models\PAI;
use App\Models\Program;
use App\Models\Project;
use App\Models\StrategicLine;
use App\PaisInteroperabilityLogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;
use stdClass;
use App\Http\Controllers\ObjectiveProductController;
use Carbon\Carbon;
use Tymon\JWTAuth\Facades\JWTAuth;
use Validator;

/**
 * Class PaisFullController
 * @package App\Http\Controllers
 */
class PaisFullController extends UtilsController
{
    /**
     * Obtiene todos los PAIs de una CAR
     */
    public function index(Request $request)
    {
        try {
            $group_id = JWTAuth::toUser($request->token)["group_id"];
            $pais = PAI::all()->where('group_id', $group_id);
            foreach ($pais as $pai) {
                $this->getStrategicLine($pai);
            }
            $response = new ApiResponse(200, "Success", $pais);
        } catch (\Exception $e) {
            $response = new ApiResponse(500, "Error", ["messages" =>  'Internal Server Error ']);
        }
        return $response->response();
    }
    /**
     * Obtiene los datos de una linea estrategica del pai
     */
    public function getStrategicLine($pai)
    {
        $strategic_lines = StrategicLine::where('p_a_i_id', $pai["id"])->get();
        foreach ($strategic_lines as $strategic_line) {
            $programs = Program::where('strategic_line_id', $strategic_line["id"])->get();
            foreach ($programs as $program) {
                $projects = Project::where('program_id', $program["id"])->get();
                $program["projects"] = $projects;
            }
            $strategic_line["programs"] = $programs;
        }
        $pai["strategic_lines"] = $strategic_lines;
    }
    /**
     * Crea un PAI y parte de su subarbol, con lineas estrategicas,
     * programas y proyectos
     */
    public function store(Request $request)
    {
        FacadesDB::beginTransaction();
        try {
            $validator = $this->validatePaiRequest($request->all());
            $errors = false;
            $response_info = new stdClass();
            if ($validator->fails()) {
                $errors = true;
                $response_info->pai["message"] = Controller::$str_struct_err;
                $response_info->pai["errors"] = $validator->messages();
            } else {
                $group_id = JWTAuth::toUser($request->token)["group_id"];
                $pais = PAI::where("group_id", $group_id)->get();
                $end_date = date("Y-m-d", strtotime($request->start_date . "+ 4 years"));
                $start_date = Carbon::createFromFormat('Y-m-d', $request->start_date);
                if ($start_date->month !== 1 || $start_date->day !== 1) {
                    $errors = true;
                    $response_info->message = Controller::$str_struct_err;
                    $response_info->errors = ["El PAI debe iniciar el primero de enero"];
                } else {
                    foreach ($pais as $pai) {
                        if (($request->start_date >= $pai->start_date && $request->start_date <= $pai->end_date) || ($end_date >= $pai->start_date && $end_date <= $pai->end_date)) {
                            $errors = true;
                            $response_info->pai["message"] = Controller::$str_struct_err;
                            $response_info->pai["errors"] = ["La fecha ingresada interfiere con otra de otro pai"];
                        }
                    }
                }
                if (!$errors) {
                    $response_info->pai["message"] = Controller::$str_struct_correct;
                    $response_info->pai["strategic_lines"] = [];
                    $arrayPai = [
                        'name' => $request->name,
                        'start_date' => $request->start_date,
                        'end_date' => $end_date,
                        'director_name' => $request->director_name,
                        'group_id' => $group_id,
                        'pai_code' => $request->pai_code,
                        'internal_status' => $request->internal_status
                    ];
                    $pai = PAI::create($arrayPai);
                    $response_strategic_lines = $this->createStrategicLines($request->strategic_lines, $pai, $response_info->pai, $errors);
                    $errors = $response_strategic_lines["errors"];
                    $response_info->pai = $response_strategic_lines["response_info"];
                    $user_id = JWTAuth::toUser($request->token)["id"];
                    $arrayLog = [
                        'pai_code' => $request->pai_code,
                        'pai_id' => $pai->id,
                        'user_id' => $user_id,
                    ];
                    PaisInteroperabilityLogs::create($arrayLog);
                    FacadesDB::commit();
                }
            }
            $response = $errors == true
                ? new ApiResponse(400, "Bad request", $response_info)
                : new ApiResponse(200, "Success", $response_info);
        } catch (\Exception $e) {
            FacadesDB::rollBack();
            if ($e && $e->errorInfo && $e->errorInfo[0] == "23505") {
                $response = new ApiResponse(500, "Error", ["messages" => "Este nombre de PAI ya existe"]);
            } else {
                $response = new ApiResponse(500, "Error", ["messages" =>  'Internal Server Error ']);
            }
            UtilsController::setTransactionalLog($request, $e);
        }
        return $response->response();
    }
    /**
     * Obtiene la informacion de un PAI
     */
    public function show($pai_code, Request $request)
    {
        try {
            $group_id = JWTAuth::toUser($request->token)["group_id"];
            $pai = PAI::where('pai_code', $pai_code)->where('group_id', $group_id)->first();
            if ($pai) {
                $this->getStrategicLine($pai);
                $response = new ApiResponse(200, "Success", $pai);
            } else {
                $response = new ApiResponse(404, "Not found", "El PAI con pai_code " . $pai_code . " no existe.");
            }
        } catch (\Exception $e) {
            $response = new ApiResponse(500, "Error", ["messages" =>  'Internal Server Error ']);
        }
        return $response->response();
    }
    /**
     * Elimina todo un PAI y su arbol en descenso
     */
    public function destroy($pai_code)
    {
        FacadesDB::beginTransaction();
        try {
            $pai = PAI::where('pai_code', $pai_code)->first();
            if ($pai) {
                $strategic_lines = StrategicLine::where('p_a_i_id', $pai["id"])->get();
                foreach ($strategic_lines as $strategic_line) {
                    $programs = Program::where('strategic_line_id', $strategic_line["id"])->get();
                    foreach ($programs as $program) {
                        $projects = Project::where('program_id', $program["id"])->get();
                        foreach ($projects as $project) {
                            $project->delete();
                        }
                        $program->delete();
                    }
                    $strategic_line->delete();
                }
                $paiInteroperabilityLogs = PaisInteroperabilityLogs::where('pai_id', $pai["id"]);
                $paiInteroperabilityLogs->delete();
                $pai->delete();
                FacadesDB::commit();
                $response = new ApiResponse(200, "Success", ["Pai eliminado"]);
            } else {
                $response = new ApiResponse(404, "Not found", "El PAI con pai_code " . $pai_code . " no existe.");
            }
        } catch (\Exception $e) {
            FacadesDB::rollBack();
            $response = new ApiResponse(500, "Error", ["messages" =>  'Internal Server Error ']);
        }
        return $response->response();
    }
    /**
     * Crea lineas estrategicas de un pai
     */
    private function createStrategicLines($strategic_lines, $pai, $response_info, $errors)
    {
        $summaryStrategicLine = 0;
        $strategic_line_size = sizeof($strategic_lines);
        foreach ($strategic_lines as $key => $strategic_line) {
            $validateStrategicLine = $this->validateStrategicLineRequest($strategic_line);
            if ($validateStrategicLine->fails()) {
                $response_info["strategic_lines"]["Linea Strategica " . $key]["message"] = Controller::$str_struct_err;
                $response_info["strategic_lines"]["Linea Strategica " . $key]["errors"] = $validateStrategicLine->messages();
                $errors = true;
            } else {
                $exist = StrategicLine::where('strategic_line_code', $strategic_line["strategic_line_code"] . "-" . $pai->pai_code)
                    ->where('p_a_i_id', $pai["id"])->first();
                if ($exist) {
                    $response_info["strategic_lines"]["Linea Strategica " . $key]["message"] = Controller::$str_struct_err;
                    $response_info["strategic_lines"]["Linea Strategica " . $key]["errors"] = ["La línea estratégica con strategic_line_code " .
                        $strategic_line["strategic_line_code"] . " para el PAI ingresado ya existe."];
                    $errors = true;
                } else {
                    if ($key == ($strategic_line_size - 1) && $strategic_lines[$key]["weighing"] != (100 - $summaryStrategicLine)) {
                        $response_info["strategic_lines"]["Linea Strategica " . $key]["message"] = Controller::$str_struct_err;
                        $response_info["strategic_lines"]["Linea Strategica " . $key]["errors"] = [Controller::$str_sumatory_err];
                        $errors = true;
                    } else {
                        $summaryStrategicLine = $summaryStrategicLine + $strategic_lines[$key]["weighing"];
                        if ($summaryStrategicLine > 100) {
                            $response_info["strategic_lines"]["Linea Strategica " . $key]["message"] = Controller::$str_struct_err;
                            $response_info["strategic_lines"]["Linea Strategica " . $key]["errors"] = [Controller::$str_sumatory_err . "2"];
                            $errors = true;
                        } else {
                            $response_info["strategic_lines"]["Linea Strategica " . $key]["message"] = Controller::$str_struct_correct;
                            $arrayStrategicLine = [
                                'name' => $strategic_line["name"],
                                'weighing' => $strategic_line["weighing"],
                                'p_a_i_id' => $pai->id,
                                'internal_status' => $strategic_line["internal_status"],
                                'strategic_line_code' => $strategic_line["strategic_line_code"] . "-" . $pai->pai_code,
                            ];
                            $strategic_line_created = StrategicLine::create($arrayStrategicLine);
                            $response_programs = $this->createPrograms($strategic_line["programs"], $strategic_line_created, $response_info["strategic_lines"]["Linea Strategica " . $key], $errors);
                            $errors = $response_programs["errors"];
                            $response_info["strategic_lines"]["Linea Strategica " . $key] =  $response_programs["response_info"];
                        }
                    }
                }
            }
        }
        return ["response_info" => $response_info, "errors" => $errors];
    }
    /**
     * Crea programas de una linea estrategica
     */
    private function createPrograms($programs, $strategic_line_created, $response_info, $errors)
    {
        $summaryPrograms = 0;
        $program_size = sizeof($programs);
        foreach ($programs as $keyProgram => $program) {
            $validatePrograms = $this->validateProgramsRequest($program);
            if ($validatePrograms->fails()) {
                $response_info["programs"]["Programa " . $keyProgram]["message"] = Controller::$str_struct_err;
                $response_info["programs"]["Programa " . $keyProgram]["errors"] = $validatePrograms->messages();
                $errors = true;
            } else {
                $exist = Program::where('program_code', $program["program_code"] . "-" . $strategic_line_created->strategic_line_code)
                    ->where('strategic_line_id', $strategic_line_created["id"])->first();
                if ($exist) {
                    $response_info["programs"]["Programa " . $keyProgram]["message"] = Controller::$str_struct_err;
                    $response_info["programs"]["Programa " . $keyProgram]["errors"] = ["El programa con program_code " .
                        $program["program_code"] . " para la línea estratégica ingresado ya existe."];
                    $errors = true;
                } else {
                    if ($keyProgram == ($program_size - 1) && $programs[$keyProgram]["weighing"] != (100 - $summaryPrograms)) {
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
                                    'strategic_line_id' => $strategic_line_created->id,
                                    'national_program_id' => $internal_national_program_id["value"],
                                    'car_program' => $program["car_program"],
                                    'weighing' => $program["weighing"],
                                    'internal_status' => $program["internal_status"],
                                    'program_code' => $program["program_code"] . "-" . $strategic_line_created->strategic_line_code,
                                ];
                                $program_created = Program::create($arrayProgram);
                                $response_projects = $this->createProjects($program["projects"], $program_created,  $response_info["programs"]["Programa " . $keyProgram], $errors);
                                $errors = $response_projects["errors"];
                                $response_info["programs"]["Programa " . $keyProgram] =  $response_projects["response_info"];
                            }
                        }
                    }
                }
            }
        }
        return ["response_info" => $response_info, "errors" => $errors];
    }
    /**
     * Crea proyectos de un programa
     */
    private function createProjects($projects, $program_created, $response_info, $errors)
    {
        $project_size = sizeof($projects);
        $summaryProjects = 0;
        foreach ($projects as $keyProject => $project) {
            $validateProject = $this->validateProjectsRequest($project);
            if ($validateProject->fails()) {
                $response_info["projects"]["Proyecto " . $keyProject]["message"] = Controller::$str_struct_err;
                $response_info["projects"]["Proyecto " . $keyProject]["errors"] = $validateProject->messages();
                $errors = true;
            } else {
                $exist = Project::where('project_code', $project["project_code"] . "-" . $program_created->program_code)
                    ->where('program_id', $program_created["id"])->first();
                if ($exist) {
                    $response_info["projects"]["Proyecto " . $keyProject]["message"] = Controller::$str_struct_err;
                    $response_info["projects"]["Proyecto " . $keyProject]["errors"] = ["El proyecto con project_code " .
                        $project["project_code"] . " para el programa ingresado ya existe."];
                    $errors = true;
                } else {
                    if ($keyProject == ($project_size - 1) && $projects[$keyProject]["weighing"] != (100 - $summaryProjects)) {
                        $response_info["projects"]["Proyecto " . $keyProject]["message"] = Controller::$str_struct_err;
                        $response_info["projects"]["Proyecto " . $keyProject]["errors"] = [Controller::$str_sumatory_err];
                        $errors = true;
                    } else {
                        $summaryProjects = $summaryProjects + $project["weighing"];
                        if ($summaryProjects > 100) {
                            $response_info["projects"]["Proyecto " . $keyProject]["message"] = Controller::$str_struct_err;
                            $response_info["projects"]["Proyecto " . $keyProject]["errors"] = [Controller::$str_sumatory_err];
                            $errors = true;
                        } else {
                            $arrayProject = [
                                'program_id' => $program_created->id,
                                'project' => $project["project"],
                                'weighing' => $project["weighing"],
                                'internal_status' => $project["internal_status"],
                                'project_code' => $project["project_code"] . "-" . $program_created["program_code"]
                            ];
                            Project::create($arrayProject);
                            $response_info["projects"]["Proyecto " . $keyProject]["message"] = Controller::$str_struct_correct;
                        }
                    }
                }
            }
        }
        return ["response_info" => $response_info, "errors" => $errors];
    }
    /**
     * Función para validar que los datos del request sean correctos 
     * antes de pasar a la creacion de un pai
     */
    private function validatePaiRequest(array $request)
    {
        $rules = [
            'name' => 'required',
            'start_date' => 'required|date',
            'director_name' => 'required|regex:/^[\pL\s\-]+$/u',
            'pai_code' => 'required|numeric',
            'strategic_lines' => 'required|array|min:1',
            'internal_status' => 'required|numeric|max:10'
        ];
        $messages = [
            'name.required' => ':attribute es requerido.',
            'start_date.date' => ':attribute debe ser una fecha.',
            'start_date.required' => ':attribute es requerido.',
            'director_name.required' => ':attribute es requerido.',
            'director_name.regex' => ':attribute no debe contener catacteres especiales.',
            'pai_code.required' => ':attribute es requerido.',
            'pai_code.numeric' => ':attribute debe ser un numero.',
            'strategic_lines.required' => ':attribute es un campo requerido.',
            'strategic_lines.array' => ':attribute debe ser un array.',
            'strategic_lines.min' => ':attribute debe tener un tamaño superior a 1',
            'internal_status.required' => ':attribute es un campo requerido.',
            'internal_status.numeric' => ':attribute debe ser un numero.',
            'internal_status.max' => ':attribute debe ser menor o igual a 10'
        ];
        $attributes = [
            'name' => 'Nombre del PAI',
            'start_date' => 'La fecha de inicio',
            'director_name' => 'Nombre del director',
            'pai_code' => 'Código interno del PAI',
            'strategic_lines' => 'Las líneas estrategicas',
            'internal_status' => 'Estado Interno'
        ];
        return Validator::make($request, $rules, $messages, $attributes);
    }
    /**
     * Función para validar que los datos del request sean correctos 
     * antes de pasar a la creacion de una linea estrategica
     */
    private function validateStrategicLineRequest(array $request)
    {
        $rules = [
            'name' => 'required',
            'weighing' => 'required|integer|min:1|max:100',
            'programs' => 'required|array|min:1',
            'internal_status' => 'required|numeric|max:10',
            'strategic_line_code' => 'required|numeric',
        ];
        $messages = [
            'name.required' => ':attribute es requerido.',
            'weighing.required' => ':attribute es un campo requerido.',
            'weighing.integer' => ':attribute debe ser un numero entero.',

            'weighing.min' => ':attribute debe ser mayor o igual a 1',
            'weighing.max' => ':attribute debe ser menor o igual a 100',
            'programs.required' => ':attribute es un campo requerido.',
            'programs.array' => ':attribute debe ser un array.',
            'programs.min' => ':attribute debe tener un tamaño superior a 1',
            'internal_status.required' => ':attribute es un campo requerido.',
            'internal_status.numeric' => ':attribute debe ser un numero.',
            'internal_status.max' => ':attribute debe ser menor o igual a 10',
            'strategic_line_code.required' => ':attribute es requerido.',
            'strategic_line_code.numeric' => ':attribute debe ser un numero.',
        ];
        $attributes = [
            'name' => 'Nombre del la línea estratégica',
            'weighing' => 'La ponderacion',
            'programs' => 'Los programas',
            'internal_status' => 'Estado Interno',
            'strategic_line_code' => 'Código Interno de la línea estratégica',
        ];
        return Validator::make($request, $rules, $messages, $attributes);
    }
    /**
     * Función para validar que los datos del request sean correctos 
     * antes de pasar a la creacion de un programa
     */
    private function validateProgramsRequest(array $request)
    {
        $rules = [
            'car_program' => 'required',
            'national_program_id' => 'required|numeric',
            'weighing' => 'required|integer|min:1|max:100',
            'projects' => 'required|array|min:1',
            'internal_status' => 'required|numeric|max:10',
            'program_code' => 'required|numeric',
        ];
        $messages = [
            'car_program.required' => ':attribute es requerido.',
            'national_program_id.required' => ':attribute es un campo requerido.',
            'national_program_id.numeric' => ':attribute debe ser un numero.',
            'weighing.required' => ':attribute es un campo requerido.',
            'weighing.integer' => ':attribute debe ser un numero entero.',

            'weighing.min' => ':attribute debe ser mayor o igual a 1',
            'weighing.max' => ':attribute debe ser menor o igual a 100',
            'projects.required' => ':attribute es un campo requerido.',
            'projects.array' => ':attribute debe ser un array.',
            'projects.min' => ':attribute debe tener un tamaño superior a 1',
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
            'projects' => 'Los proyectos',
            'internal_status' => 'Estado Interno',
            'program_code' => 'Código Interno del programa',
        ];
        return Validator::make($request, $rules, $messages, $attributes);
    }
    /**
     * Función para validar que los datos del request sean correctos 
     * antes de pasar a la creacion de un proyecto
     */
    private function validateProjectsRequest(array $request)
    {
        $rules = [
            'project' => 'required',
            'weighing' => 'required|integer|min:1|max:100',
            'internal_status' => 'required|numeric|max:10',
            'project_code' => 'required|numeric',
        ];
        $messages = [
            'project.required' => ':attribute es requerido.',
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
