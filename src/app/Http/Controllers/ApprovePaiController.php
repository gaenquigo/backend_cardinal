<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Models\Activity;
use App\Models\ApprovePAI;
use App\Models\Financial_Plan;
use App\Models\Objective;
use App\Models\ObjectiveProduct;
use App\Models\PAI;
use App\Models\Program;
use App\Models\Project;
use App\Models\StrategicLine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB as FacadesDB;
use Tymon\JWTAuth\Facades\JWTAuth;
use Validator;

/**
 * Class 
 * @package App\Http\Controllers
 */
class ApprovePaiController extends UtilsController
{
    /**
     * Valida y pasa un PAI de estado no
     * aprobado a aprobado
     */
    public function index(Request $request)
    {
        try {
            $validator = $this->validateApprovedPaiRequest($request->all());
            $errors = true;
            $response_info = [];
            if ($validator->fails()) {
                $response_info["message"] = Controller::$str_struct_err;
                $response_info["errors"] = $validator->messages();
            } else {
                $file = $request->file('file');
                if (!$file->isValid()) {
                    $response_info["message"] = Controller::$str_struct_err;
                    $response_info["errors"] = ["El archivo no es valido."];
                } else {
                    $group_id = JWTAuth::toUser($request->token)["group_id"];
                    $pai = PAI::where('pai_code', '=', $request->pai_code)
                        ->where('group_id', '=', $group_id)
                        ->where('approved', '=', false)->first();
                    if ($pai) {
                        $financial_plans = Financial_Plan::where('p_a_i_id', $pai->id)->sum('investment_balance');
                        if ($financial_plans == 0) {
                            $strategic_lines = StrategicLine::where('p_a_i_id', '=', $pai["id"])->get();
                            $summatoryStrategicLines = 0;
                            $errors = false;
                            if (sizeof($strategic_lines) > 0) {
                                foreach ($strategic_lines as $keyStrategicLine => $strategic_line) {
                                    $summatoryStrategicLines += $strategic_line["weighing"];
                                    if (($keyStrategicLine == (sizeof($strategic_lines) - 1)) && $summatoryStrategicLines != 100) {
                                        $response_info["message"] = Controller::$str_struct_err;
                                        $response_info["errors"] = ["La sumatoria de las ponderaciones de las ponderaciones de las líneas estratégicas debe ser 100"];
                                        $errors = true;
                                    } else {
                                        $programs = Program::where('strategic_line_id', '=', $strategic_line["id"])->get();
                                        $summatoryPrograms = 0;
                                        if (sizeof($programs) > 0) {
                                            foreach ($programs as $keyProgram => $program) {
                                                $summatoryPrograms += $program["weighing"];
                                                if (($keyProgram == (sizeof($programs) - 1)) && $summatoryPrograms != 100) {
                                                    $response_info["strategic_line" . $keyStrategicLine]["message"] = Controller::$str_struct_err;
                                                    $response_info["strategic_line" . $keyStrategicLine]["errors"] = ["La sumatoria de las ponderaciones de los programas debe ser 100"];
                                                    $errors = true;
                                                } else {
                                                    $projects = Project::where('program_id', '=', $program["id"])->get();
                                                    $summatoryProjects = 0;
                                                    if (sizeof($projects) > 0) {
                                                        foreach ($projects as $keyProject =>  $project) {
                                                            $summatoryProjects += $project["weighing"];
                                                            if (($keyProject == (sizeof($projects) - 1)) && $summatoryProjects != 100) {
                                                                $response_info["strategic_line" . $keyStrategicLine]["program" . $keyProgram]["message"] = Controller::$str_struct_err;
                                                                $response_info["strategic_line" . $keyStrategicLine]["program" . $keyProgram]["errors"] = ["La sumatoria de las ponderaciones de los proyectos debe ser 100"];
                                                                $errors = true;
                                                            } else {
                                                                $objectives = Objective::where('project_id', '=', $project["id"])->get();
                                                                $summatoryObjectives = 0;
                                                                if (sizeof($objectives) > 0) {
                                                                    foreach ($objectives as $keyObjective =>  $objective) {
                                                                        $summatoryObjectives += $objective["weighing"];
                                                                        if (($keyObjective == (sizeof($objectives) - 1)) && $summatoryObjectives != 100) {
                                                                            $response_info["strategic_line" . $keyStrategicLine]["program" . $keyProgram]["project" . $keyProject]["message"] = Controller::$str_struct_err;
                                                                            $response_info["strategic_line" . $keyStrategicLine]["program" . $keyProgram]["project" . $keyProject]["errors"] = ["La sumatoria de las ponderaciones de los objetivos debe ser 100"];
                                                                            $errors = true;
                                                                        } else {
                                                                            $objective_products = ObjectiveProduct::where('objective_id', '=', $objective["id"])->get();
                                                                            if (sizeof($objective_products) > 0) {
                                                                                $summatoryObjectiveProducts = 0;
                                                                                foreach ($objective_products as $keyObjectiveProduct =>  $objective_product) {
                                                                                    $summatoryObjectiveProducts += $objective_product["weighing"];
                                                                                    if (
                                                                                        $objective_product["goal_1"] == $objective_product["goal_1_balance"] &&
                                                                                        $objective_product["goal_2"] == $objective_product["goal_2_balance"] &&
                                                                                        $objective_product["goal_3"] == $objective_product["goal_3_balance"] &&
                                                                                        $objective_product["goal_4"] == $objective_product["goal_4_balance"]
                                                                                    ) {
                                                                                        $response_info["strategic_line" . $keyStrategicLine]["program" . $keyProgram]["project" . $keyProject]["objective" . $keyObjective]["message"] = Controller::$str_struct_err;
                                                                                        $response_info["strategic_line" . $keyStrategicLine]["program" . $keyProgram]["project" . $keyProject]["objective" . $keyObjective]["errors"] = ["Este producto no tiene asociada ninguna actividad"];
                                                                                        $errors = true;
                                                                                    }
                                                                                    if (($keyObjectiveProduct == (sizeof($objective_products) - 1)) && $summatoryObjectiveProducts != 100) {
                                                                                        $response_info["strategic_line" . $keyStrategicLine]["program" . $keyProgram]["project" . $keyProject]["objective" . $keyObjective]["message"] = Controller::$str_struct_err;
                                                                                        $response_info["strategic_line" . $keyStrategicLine]["program" . $keyProgram]["project" . $keyProject]["objective" . $keyObjective]["errors"] = ["La sumatoria de las ponderaciones de los productos objetivos debe ser 100"];
                                                                                        $errors = true;
                                                                                    }
                                                                                }
                                                                            } else {
                                                                                $response_info["strategic_line" . $keyStrategicLine]["program" . $keyProgram]["project" . $keyProject]["message"] = Controller::$str_struct_err;
                                                                                $response_info["strategic_line" . $keyStrategicLine]["program" . $keyProgram]["project" . $keyProject]["errors"] = ["Este objetivo debe tener productos"];
                                                                                $errors = true;
                                                                            }
                                                                            $activities = Activity::where('objective_id', $objective["id"])->get();
                                                                            if (sizeof($activities) > 0) {
                                                                                $summatoryActivities = 0;
                                                                                foreach ($activities as $keyActivities =>  $activity) {
                                                                                    $summatoryActivities += $activity["weighing"];
                                                                                    if (($keyActivities == (sizeof($activities) - 1)) && $summatoryActivities != 100) {
                                                                                        $response_info["strategic_line" . $keyStrategicLine]["program" . $keyProgram]["project" . $keyProject]["activity" . $keyActivities]["message"] = Controller::$str_struct_err;
                                                                                        $response_info["strategic_line" . $keyStrategicLine]["program" . $keyProgram]["project" . $keyProject]["activity" . $keyActivities]["errors"] = ["La sumatoria de las ponderaciones de las actividades debe ser 100"];
                                                                                        $errors = true;
                                                                                    }
                                                                                }
                                                                            } else {
                                                                                $response_info["strategic_line" . $keyStrategicLine]["program" . $keyProgram]["project" . $keyProject]["message"] = Controller::$str_struct_err;
                                                                                $response_info["strategic_line" . $keyStrategicLine]["program" . $keyProgram]["project" . $keyProject]["errors"] = ["Este objetivo debe tener actividades" . $objective["id"]];
                                                                                $errors = true;
                                                                            }
                                                                        }
                                                                    }
                                                                } else {
                                                                    $response_info["strategic_line" . $keyStrategicLine]["program" . $keyProgram]["project" . $keyProject]["message"] = Controller::$str_struct_err;
                                                                    $response_info["strategic_line" . $keyStrategicLine]["program" . $keyProgram]["project" . $keyProject]["errors"] = ["Este proyecto debe tener objetivos"];
                                                                    $errors = true;
                                                                }
                                                            }
                                                        }
                                                    } else {
                                                        $response_info["strategic_line" . $keyStrategicLine]["program" . $keyProgram]["message"] = Controller::$str_struct_err;
                                                        $response_info["strategic_line" . $keyStrategicLine]["program" . $keyProgram]["errors"] = ["Este programa debe tener proyectos"];
                                                        $errors = true;
                                                    }
                                                }
                                            }
                                        } else {
                                            $response_info["strategic_line" . $keyStrategicLine]["message"] = Controller::$str_struct_err;
                                            $response_info["strategic_line" . $keyStrategicLine]["errors"] = ["Esta línea estratégica debe tener programas"];
                                            $errors = true;
                                        }
                                    }
                                }
                            } else {
                                $response_info["message"] = Controller::$str_struct_err;
                                $response_info["errors"] = ["Debe existir una línea estratégica para el PAI"];
                                $errors = true;
                            }
                            if ($errors != true) {
                                FacadesDB::beginTransaction();
                                $file_url = $this->uploadFile($file, 'approve_pai');
                                $arrayApprovedPai = [
                                    'date' => $request->approvation_date,
                                    'pai_id' => $pai->id,
                                    'resolution_number' => $request->resolution_number,
                                    'file' => $file_url,
                                ];
                                $pai->approved = true;
                                $pai->save();
                                ApprovePAI::create($arrayApprovedPai);
                                $response_info["message"] = "Se aprobó el PAI correctamente";
                                $errors = false;
                                FacadesDB::commit();
                            }
                        } else {
                            $response_info["message"] = Controller::$str_struct_err;
                            $response_info["errors"] = ["El PAI con pai_code " . $request->pai_code . " no tiene sus planes financieros cubiertos"];
                        }
                    } else {
                        $response_info["message"] = Controller::$str_struct_err;
                        $response_info["errors"] = ["El PAI con pai_code " . $request->pai_code . " no existe o ya esta aprobado."];
                    }
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
     * antes de pasar a la funcion principal para aprobar un PAI
     */
    private function validateApprovedPaiRequest(array $request)
    {
        $rules = [
            'file' => 'required|file|mimetypes:application/pdf',
            'resolution_number' => 'required',
            'pai_code' => 'required|numeric',
            'approvation_date' => 'required|date',
        ];
        $messages = [
            'file.required' => ':attribute es requerido.',
            'file.file' => ':attribute debe ser un archivo.',
            'file.mimetypes' => ':attribute debe ser un pdf.',
            'approvation_date.date' => ':attribute debe ser una fecha.',
            'approvation_date.required' => ':attribute es requerido.',
            'resolution_number.required' => ':attribute es requerido.',
            'pai_code.required' => ':attribute es requerido.',
            'pai_code.numeric' => ':attribute debe ser un numero.',
        ];
        $attributes = [
            'file' => 'Archivo',
            'resolution_number' => 'Código de resolución',
            'pai_code' => 'Código interno del PAI',
            'approvation_date' => 'Fecha de aprobación',
        ];
        return Validator::make($request, $rules, $messages, $attributes);
    }
    /**
     * Funcion que sube un archivo cuando se aprueba
     * un PAI
     */
    public function uploadFile($file, $module)
    {
        $name = $file->getClientOriginalName();
        $file_url = '/public';
        switch ($module) {
            case 'indicators':
                $file_url .= '/indicators_files/';
                break;
            case 'approve_pai':
                $file_url .= '/approve_pai_files/';
                break;
            case 'noveltyGastos':
                $file_url .= '/noveltyGastos_files/';
                break;
            case 'approve_reports':
                $file_url .= '/approve_reports_files/';
                break;
        }
        $date =  \Date('Y/m/d');
        $file_url .= $date . '_' . $name;
        Storage::disk('local')->put($file_url, file_get_contents($file->getRealPath()));
        str_replace('/public', '/public/storage', $file_url);
        return $file_url;
    }
}
