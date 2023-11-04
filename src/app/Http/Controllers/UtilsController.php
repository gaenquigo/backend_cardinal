<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Objective;
use App\Models\PAI;
use App\Models\Program;
use App\Models\Project;
use App\Models\StrategicLine;
use App\Models\Activity;
use App\Models\EvidenceAdvance;
use App\Models\ObjectiveProduct;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\Indicator;
use App\TransactionalLogs;
use stdClass;

/**
 * Class UtilsController
 * @package App\Http\Controllers
 */
class UtilsController extends Controller
{
    /**
     * Funcion que valida un pai, linea estrategica,
     * programa, objetivo, producto objetivo, actividad, rezago, 
     * evidencia o avance exista en arbol para validar
     * la estructura completa
     */
    public function checkStructure(Request $request, String $type, $approved = false, $query = false)
    {
        $response = Controller::$responseObjectUtilsFalse;
        $group_id = JWTAuth::toUser($request->token)["group_id"];
        $pai = $query === false
            ? PAI::where('pai_code', $request->pai_code)
            ->where('group_id', $group_id)
            ->where('approved', $approved)->first()
            : PAI::where('pai_code', $request->pai_code)
            ->where('group_id', $group_id)->first();
        if ($pai) {
            if ($type == "pai") {
                $response = Controller::$responseObjectUtilsTrue;
                $response["data"] = $pai;
            } else {
                $strategic_line = StrategicLine::where('strategic_line_code', $request->strategic_line_code . "-" . $pai->pai_code)
                    ->where('p_a_i_id', $pai["id"])->first();
                if ($strategic_line) {
                    if ($type == "strategic_line") {
                        $response = Controller::$responseObjectUtilsTrue;
                        $response["data"] = $strategic_line;
                    } else {
                        $program = Program::where('program_code', $request->program_code . "-" . $strategic_line->strategic_line_code)
                            ->where('strategic_line_id', $strategic_line["id"])->first();
                        if ($program) {
                            if ($type == "program") {
                                $response = Controller::$responseObjectUtilsTrue;
                                $response["data"] = $program;
                            } else {
                                $project = Project::where('project_code', $request->project_code . "-" . $program->program_code)
                                    ->where('program_id', $program["id"])->first();
                                if ($project) {
                                    if ($type == "project") {
                                        $response = Controller::$responseObjectUtilsTrue;
                                        $response["data"] = $project;
                                    } else {
                                        $objective = Objective::where('objective_code', $request->objective_code . "-" . $project->project_code)
                                            ->where('project_id', $project["id"])->first();
                                        if ($objective) {
                                            if ($type == "objective") {
                                                $response = Controller::$responseObjectUtilsTrue;
                                                $response["data"] = $objective;
                                            } else {
                                                $activity = Activity::where('activity_code', $request->activity_code . "-" . $objective->objective_code)
                                                    ->where('objective_id', $objective["id"])->first();
                                                if ($activity) {
                                                    if ($type == "activity") {
                                                        $response = Controller::$responseObjectUtilsTrue;
                                                        $response["data"] = $activity;
                                                    } else {
                                                        $lag = EvidenceAdvance::where('activity_id', $activity["id"])
                                                            ->where('external_code', "R-" . $request->lag_code . "-" . $activity->activity_code)
                                                            ->where('year', $request["year"])->first();
                                                        if ($lag) {
                                                            if ($type == "lag") {
                                                                $response = Controller::$responseObjectUtilsTrue;
                                                                $response["data"] = $lag;
                                                            }
                                                        } else {
                                                            $response["message"] = ["El rezago con código lag_code " . $request->lag_code . " no existe para la actividad en el año ingresado."];
                                                        }
                                                        $evidence = EvidenceAdvance::where('activity_id',  $activity["id"])
                                                            ->where('external_code', "E-" . $request->evidence_code . "-" . $activity->activity_code)
                                                            ->where('year', $request["year"])->first();
                                                        if ($evidence) {
                                                            if ($type == "evidence") {
                                                                $response = Controller::$responseObjectUtilsTrue;
                                                                $response["data"] = $evidence;
                                                            } else {
                                                                $advance = EvidenceAdvance::where('activity_id',  $activity["id"])
                                                                    ->where('external_code', "A-" . $request->advance_code . "-" . $evidence->external_code)
                                                                    ->where('evidence_advance_id', $evidence->id)
                                                                    ->where('year', $request["year"])->first();
                                                                if ($advance) {
                                                                    if ($type == "advance") {
                                                                        $response = Controller::$responseObjectUtilsTrue;
                                                                        $response["data"] = $advance;
                                                                    }
                                                                } else {
                                                                    $response["message"]  = ["El avance con código advance_code " . $request->advance_code . " ya existe para la evidencia."];
                                                                }
                                                            }
                                                        } else {
                                                            if ($type == "evidence") {
                                                                $response["message"]  = ["La evidencia con código evidence_code " . $request->evidence_code . " no existe para la actividad en el año ingresado."];
                                                            }
                                                        }
                                                    }
                                                } else {
                                                    $response["message"] = ["La actividad con activity_code " . $request->activity_code . " para el objetivo ingresado no existe."];
                                                }
                                                $objective_product = ObjectiveProduct::where('objective_product_code', $request->objective_product_code . "-" . $objective->objective_code)
                                                    ->where('objective_id', $objective["id"])->first();
                                                if ($objective_product) {
                                                    if ($type == "objective_product") {
                                                        $response = Controller::$responseObjectUtilsTrue;
                                                        $response["data"] = $objective_product;
                                                    }
                                                } else {
                                                    if ($type == "objective_product") {
                                                        $response["message"] = ["El producto objetivo con objective_product_code " . $request->objective_product_code . "-" . $objective->objective_code . " para el objetivo ingresado no existe."];
                                                    }
                                                }
                                            }
                                        } else {
                                            $response["message"] = ["El objetivo con objective_code " . $request->objective_code . " para el proyecto ingresado no existe."];
                                        }
                                    }
                                } else {
                                    $response["message"] = ["El proyecto con project_code " . $request->project_code . " para el programa ingresado no existe."];
                                }
                            }
                        } else {
                            $response["message"] = "El programa con program_code " . $request->program_code . " para la línea estratégica ingresada no existe.";
                        }
                    }
                } else {
                    $response["message"] = "La línea estratégica con strategic_line_code " . $request->strategic_line_code . " para el PAI ingresado no existe.";
                }
            }
        } else {
            $response["message"] = $approved == true ? "El PAI con pai_code " . $request->pai_code . " no existe o no está aprobado"
                : "El PAI con pai_code " . $request->pai_code . " no existe o ya está aprobado";
        }
        return $response;
    }
    /**
     * Funcion que obtiene la data de un pai, linea estrategica,
     * programa, objetivo, producto objetivo, actividad, rezago, 
     * evidencia o avance
     */
    public function getIndexData(Request $request, $validator, String $type, $approved = false, $query = false)
    {
        $response_info = new stdClass();
        $errors = true;
        $response_info->message = Controller::$str_struct_err;
        if ($validator->fails()) {
            $response_info->errors = $validator->messages();
        } else {
            $responseValidation = $this->checkStructure($request, $type, $approved, $query);
            $errors = $responseValidation["errors"];
            $responseValidation["errors"]
                ? $response_info->errors = $responseValidation["message"]
                : $response_info = $responseValidation["data"];
        }
        return [
            "errors" => $errors,
            "response_info" => $response_info
        ];
    }
    /**
     * Funcion para obtener la informacion 
     * del indicador enviado
     */
    public function getIndicator(Request $request)
    {
        $indicator = null;
        $group_id = JWTAuth::toUser($request->token)["group_id"];
        if ($request->default_indicator == null) {
            $indicator = Indicator::where('group_id', $group_id)
                ->where('indicator_code', $request->indicator_code)->first();
        } else {
            $indicatorId = $request->default_indicator > 5
                ? ($request->default_indicator + 1)
                : ($request->default_indicator);
            $indicator = Indicator::where('group_id', '1')
                ->where('id', $indicatorId)->first();
        }
        return $indicator;
    }
    /**
     * Funcion para enviar un log transaccional cuando ocurre 
     * un error dentro de la aplicacion
     */
    public function setTransactionalLog(Request $request, \Exception $e)
    {
        $user_id = JWTAuth::toUser($request->token)["id"];
        $arrayLog = [
            'description' => $e->getMessage(),
            'user_id' => $user_id,
        ];
        TransactionalLogs::create($arrayLog);
    }
}
