<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Models\Activity;
use App\Models\ActivitySource;
use App\Models\EvidenceAdvance;
use App\Models\Indicator_activity;
use App\Models\ObjectiveProduct;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;
use stdClass;
use Validator;

/**
 * Class 
 * @package App\Http\Controllers
 */
class ActivitiesController extends UtilsController
{
    /**
     * Funcion para obtener los detalles de 
     * una actividad de un objetivo enviado
     */
    public function index(Request $request)
    {
        try {
            $validator = $this->validateActivityRequest($request);
            $responseValidation = UtilsController::getIndexData(
                $request,
                $validator,
                "activity",
                true,
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
     * Funcion para validar y crear las actividades
     * enviadas en el objeto dentro del objetivo
     */
    public function store(Request $request)
    {
        try {
            $validator = $this->validateActivityRequest($request);
            $errors = false;
            $response_info = [];
            $response_info["message"] = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info["errors"] = $validator->messages();
                $errors = true;
            } else {
                $responseValidation = UtilsController::checkStructure($request, "objective");
                $errors = $responseValidation["errors"];
                if (!$responseValidation["errors"]) {
                    $objective = $responseValidation["data"];
                    $summaryActivities = Activity::where("objective_id", $objective->id)->sum('weighing');
                    $activities_size = sizeof($request->activities);
                    $program = UtilsController::checkStructure($request, "program")["data"];
                    FacadesDB::beginTransaction();
                    foreach ($request->activities as $keyActivities => $activity) {
                        $validateActivities = $this->validateInternalActivityRequest($activity);
                        if ($validateActivities->fails()) {
                            $response_info["Activity " . $keyActivities]["message"] = Controller::$str_struct_err;
                            $response_info["Activity " . $keyActivities]["errors"] = $validateActivities->messages();
                            $errors = true;
                        } else {
                            $exist = Activity::where('activity_code', $activity["activity_code"] . "-" . $objective->objective_code)
                                ->where('objective_id', $objective["id"])->first();
                            if ($exist) {
                                $response_info["activities"]["Activity " . $keyActivities]["message"] = Controller::$str_struct_err;
                                $response_info["activities"]["Activity " . $keyActivities]["errors"] = ["La actividad con activity_code " .
                                    $activity["activity_code"] . " para el objetivo ingresado ya existe."];
                                $errors = true;
                            } else {
                                if ($keyActivities == ($activities_size - 1) && $activity["weighing"] != (100 - $summaryActivities)) {
                                    $response_info["activities"]["Activity " . $keyActivities]["message"] = Controller::$str_struct_err;
                                    $response_info["activities"]["Activity " . $keyActivities]["errors"] = [Controller::$str_sumatory_err];
                                    $errors = true;
                                } else {
                                    $summaryActivities = $summaryActivities + $activity["weighing"];
                                    if ($summaryActivities > 100) {
                                        $response_info["activities"]["Activity " . $keyActivities]["message"] = Controller::$str_struct_err;
                                        $response_info["activities"]["Activity " . $keyActivities]["errors"] = [Controller::$str_sumatory_err];
                                        $errors = true;
                                    } else {
                                        $activity["product_id"] = isset($activity["product_id"]) ? $activity["product_id"] : null;
                                        $activity["objective_product_code"] = isset($activity["objective_product_code"]) ? $activity["objective_product_code"] : null;
                                        if (($activity["product_id"]  && $activity["objective_product_code"])
                                            || (!$activity["product_id"]  && !$activity["objective_product_code"])
                                        ) {
                                            $response_info["message"] = Controller::$str_struct_err;
                                            $response_info["errors"] = ["Debe enviar un producto de la lista o un producto propio."];
                                            $errors = true;
                                        } else {
                                            $objectiveController = new ObjectiveProductController;
                                            $internal_product_id = null;
                                            $selected_objective_product = null;
                                            if ($activity["objective_product_code"]) {
                                                $selected_objective_product = ObjectiveProduct::where('objective_product_code', $activity["objective_product_code"] . "-" . $objective->objective_code)
                                                    ->where('objective_id', $objective["id"])->where('product_id', null)->first();
                                                if ($selected_objective_product) {
                                                    $internal_product_id = ["value" => $selected_objective_product->id, "id" => $selected_objective_product->id];
                                                }
                                            } else {
                                                $internal_product_id = $activity["product_id"] ? $objectiveController->productsList($activity["product_id"], $program["national_program_id"]) : ["value" => null, "id" => null];
                                            }
                                            $internal_indicator_ocde_id = $this->ODCEIndicatorList($activity["ocde_indicator_id"]);
                                            if ($internal_indicator_ocde_id == null) {
                                                $response_info["activities"]["Activity " . $keyActivities]["message"] = Controller::$str_struct_err;
                                                $response_info["activities"]["Activity " . $keyActivities]["errors"] = "El indicador OCDE no existe";
                                                $errors = true;
                                            } else
                                                            if ($internal_product_id == null) {
                                                $response_info["activities"]["Activity " . $keyActivities]["message"] = Controller::$str_struct_err;
                                                $response_info["activities"]["Activity " . $keyActivities]["errors"] = "El código del producto no existe";
                                                $errors = true;
                                            } else {
                                                $objectiveProducts = ObjectiveProduct::where('objective_id', $objective->id)->get();
                                                $existProduct = false;
                                                if (!$selected_objective_product) {
                                                    if ($internal_product_id["value"] != null) {
                                                        $selected_objective_product = null;
                                                        foreach ($objectiveProducts as $objectiveProduct) {
                                                            if ($internal_product_id["value"] == $objectiveProduct["product_id"]) {
                                                                $existProduct = true;
                                                                $selected_objective_product =  $objectiveProduct;
                                                            }
                                                        }
                                                    }
                                                } else {
                                                    $existProduct = true;
                                                }
                                                if ($existProduct) {
                                                    if ($errors === false) {
                                                        $activityProducts = Activity::where('objective_id', $objective->id)
                                                            ->where('product_id', $internal_product_id["value"])->get();
                                                        $arrayGoals = [];
                                                        $arrayGoals['goal_1'] = $selected_objective_product["goal_1"] - $activity["goal_1"];
                                                        $arrayGoals['goal_2'] = $selected_objective_product["goal_2"] - $activity["goal_2"];
                                                        $arrayGoals['goal_3'] = $selected_objective_product["goal_3"] - $activity["goal_3"];
                                                        $arrayGoals['goal_4'] = $selected_objective_product["goal_4"] - $activity["goal_4"];
                                                        // echo "||.||".$keyActivities."||.||".$arrayGoals['goal_1'] . "|||"
                                                        //     . $arrayGoals['goal_2'] . "|||"
                                                        //     . $arrayGoals['goal_3'] . "|||"
                                                        //     . $arrayGoals['goal_4'] . "|||  \n";
                                                        // foreach ($activityProducts as $keyActivityProduct => $activityProduct) {
                                                        //     switch ($keyActivityProduct) {
                                                        //         case 1:
                                                        //             $arrayGoals['goal_1'] = $arrayGoals['goal_1'] - $activityProduct["goal_1"];
                                                        //             break;
                                                        //         case 2:
                                                        //             $arrayGoals['goal_2'] = $arrayGoals['goal_2'] - $activityProduct["goal_2"];
                                                        //             break;
                                                        //         case 2:
                                                        //             $arrayGoals['goal_3'] = $arrayGoals['goal_3'] - $activityProduct["goal_3"];
                                                        //             break;
                                                        //         case 3:
                                                        //             $arrayGoals['goal_4'] = $arrayGoals['goal_4'] - $activityProduct["goal_4"];
                                                        //             break;
                                                        //     }
                                                        // }
                                                        // echo "||.||".$keyActivities."||.||".$activity['goal_1'] . "|||"
                                                        // . $activity['goal_2'] . "|||"
                                                        // . $activity['goal_3'] . "|||"
                                                        // . $activity['goal_4'] . "|||  \n";
                                                        if (
                                                            $arrayGoals['goal_1'] < 0 ||
                                                            $arrayGoals['goal_2'] < 0 ||
                                                            $arrayGoals['goal_3'] < 0 ||
                                                            $arrayGoals['goal_4'] < 0
                                                        ) {

                                                            $response_info["activities"]["Activity " . $keyActivities]["message"] = Controller::$str_struct_err;
                                                            $response_info["activities"]["Activity " . $keyActivities]["errors"] = "El valor ingresado para uno de los años supera el valor máximo  que se permite asociar a su producto";
                                                            $errors = true;
                                                        } else {
                                                            $arrayActivityProduct = [
                                                                'objective_id' => $objective->id,
                                                                'name' => $activity["name"],
                                                                'answer_sentence' => $activity["answer_sentence"],
                                                                'weighing' => $activity["weighing"],
                                                                'product_id' => $internal_product_id == null ? null : $internal_product_id["value"],
                                                                'goal_1' => $activity["goal_1"],
                                                                'goal_2' => $activity["goal_2"],
                                                                'goal_3' => $activity["goal_3"],
                                                                'goal_4' => $activity["goal_4"],
                                                                'goal' => $activity["goal_1"] + $activity["goal_2"] + $activity["goal_3"] + $activity["goal_4"],
                                                                'geometry' => $activity["geometry"],
                                                                'ocde_category_id' => $internal_indicator_ocde_id == null ? null : $internal_indicator_ocde_id["father_id"],
                                                                'ocde_indicator_id' => $internal_indicator_ocde_id == null ? null : $internal_indicator_ocde_id["value"],
                                                                'activity_code' => $activity["activity_code"] . "-" . $objective->objective_code
                                                            ];
                                                            Activity::create($arrayActivityProduct);
                                                            $selected_objective_product["goal_1"] = $selected_objective_product["goal_1"] - $activity["goal_1"];
                                                            $selected_objective_product["goal_2"] = $selected_objective_product["goal_2"] - $activity["goal_2"];
                                                            $selected_objective_product["goal_3"] = $selected_objective_product["goal_3"] - $activity["goal_3"];
                                                            $selected_objective_product["goal_4"] = $selected_objective_product["goal_4"] - $activity["goal_4"];
                                                            $selected_objective_product->save();
                                                            $response_info["activities"]["Activity " . $keyActivities]["message"] = "La actividad tiene la estructura correcta";
                                                        }
                                                    }
                                                } else {
                                                    $response_info["activities"]["Activity " . $keyActivities]["message"] = Controller::$str_struct_err;
                                                    $response_info["activities"]["Activity " . $keyActivities]["errors"] = "El producto ingresado no esta creado en productos objetivos para esta actividad";
                                                    $errors = true;
                                                }
                                            }
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
            $response = new ApiResponse(500, "Error", ["messages" =>  'Internal Server Error ']);
        }
        return $response->response();
    }
    /**
     * Funcion para validar y actualizar la
     * actividad de un objetivo enviado
     */
    public function update(Request $request)
    {
        try {
            $validator = $this->validateActivityRequest($request);
            $errors = false;
            $response_info = [];
            $response_info["message"] = Controller::$str_struct_err;
            if ($validator->fails()) {
                $errors = true;
                $response_info["errors"] = $validator->messages();
            } else {
                $responseValidation = UtilsController::checkStructure($request, "objective");
                if (!$responseValidation["errors"]) {
                    $objective = $responseValidation["data"];
                    $activity = Activity::where('activity_code', $request->activity["activity_code"] . "-" . $objective->objective_code)
                        ->where('objective_id', $objective["id"])->first();
                    if ($activity) {
                        $summaryActivities = Activity::where("objective_id", $objective->id)->sum('weighing');
                        $summaryActivities = $summaryActivities + $request->activity["weighing"] - $activity["weighing"];
                        if ($summaryActivities > 100) {
                            $response_info["errors"] = [Controller::$str_sumatory_err];
                        } else {
                            $new_activity["product_id"] = isset($request->activity["product_id"]) ? $request->activity["product_id"] : null;
                            $new_activity["objective_product_code"] = isset($request->activity["objective_product_code"]) ? $request->activity["objective_product_code"] : null;
                            if (($new_activity["product_id"]  && $new_activity["objective_product_code"])
                                || (!$new_activity["product_id"]  && !$new_activity["objective_product_code"])
                            ) {
                                $response_info["errors"] = ["Debe enviar un producto de la lista o un producto propio."];
                                $errors = true;
                            } else {
                                $objectiveController = new ObjectiveProductController;
                                $internal_product_id = null;
                                $selected_objective_product = null;
                                if ($new_activity["objective_product_code"]) {
                                    $selected_objective_product = ObjectiveProduct::where('objective_product_code', $new_activity["objective_product_code"] . "-" . $objective->objective_code)
                                        ->where('objective_id', $objective["id"])->where('product_id', null)->first();
                                    if ($selected_objective_product) {
                                        $internal_product_id = ["value" => $selected_objective_product->id, "id" => $selected_objective_product->id];
                                    }
                                } else {
                                    $program = Program::where('program_code',  $request->program_code . "-" . $request->strategic_line_code
                                        . "-" . $request->pai_code)
                                        ->first();
                                    $internal_product_id = $new_activity["product_id"] ? $objectiveController->productsList($new_activity["product_id"], $program["national_program_id"]) : ["value" => null, "id" => null];
                                }
                                $internal_indicator_ocde_id = $this->ODCEIndicatorList($request->activity["ocde_indicator_id"]);
                                if ($internal_indicator_ocde_id == null) {
                                    $response_info["errors"] = "El indicador OCDE no existe";
                                    $errors = true;
                                } else if ($internal_product_id == null) {
                                    $response_info["errors"] = "El código del producto no existe";
                                    $errors = true;
                                } else {
                                    $objectiveProducts = ObjectiveProduct::where('objective_id', $objective->id)->get();
                                    $existProduct = false;
                                    if (!$selected_objective_product) {
                                        if ($internal_product_id["value"] != null) {
                                            $selected_objective_product = null;
                                            foreach ($objectiveProducts as $objectiveProduct) {
                                                if ($internal_product_id["value"] == $objectiveProduct["product_id"]) {
                                                    $existProduct = true;
                                                    $selected_objective_product =  $objectiveProduct;
                                                }
                                            }
                                        }
                                    } else {
                                        $existProduct = true;
                                    }
                                    if ($existProduct) {
                                        if ($errors === false) {
                                            $activityProducts = Activity::where('objective_id', $objective->id)
                                                ->where('product_id', $internal_product_id["value"])
                                                ->where('id', $activity["id"])->get();
                                            $arrayGoals = [];
                                            $arrayGoals['goal_1'] = $selected_objective_product["goal_1"] + $activity["goal_1"] - $request->activity["goal_1"];
                                            $arrayGoals['goal_2'] = $selected_objective_product["goal_2"] + $activity["goal_2"] - $request->activity["goal_2"];
                                            $arrayGoals['goal_3'] = $selected_objective_product["goal_3"] + $activity["goal_3"] - $request->activity["goal_3"];
                                            $arrayGoals['goal_4'] = $selected_objective_product["goal_4"] + $activity["goal_4"] - $request->activity["goal_4"];
                                            // foreach ($activityProducts as $keyActivityProduct => $activityProduct) {
                                            //     switch ($keyActivityProduct) {
                                            //         case 1:
                                            //             $arrayGoals['goal_1'] = $arrayGoals['goal_1'] - $activityProduct["goal_1"];
                                            //             break;
                                            //         case 2:
                                            //             $arrayGoals['goal_2'] = $arrayGoals['goal_2'] - $activityProduct["goal_2"];
                                            //             break;
                                            //         case 2:
                                            //             $arrayGoals['goal_3'] = $arrayGoals['goal_3'] - $activityProduct["goal_3"];
                                            //             break;
                                            //         case 3:
                                            //             $arrayGoals['goal_4'] = $arrayGoals['goal_4'] - $activityProduct["goal_4"];
                                            //             break;
                                            //     }
                                            // }
                                            if (
                                                $arrayGoals['goal_1'] < 0 ||
                                                $arrayGoals['goal_2'] < 0 ||
                                                $arrayGoals['goal_3'] < 0 ||
                                                $arrayGoals['goal_4'] < 0
                                            ) {
                                                $response_info["errors"] = "El valor ingresado para uno de los años supera el valor máximo  que se permite asociar a su producto";
                                                $errors = true;
                                            } else {
                                                FacadesDB::beginTransaction();
                                                $selected_objective_product["goal_1"] = ($selected_objective_product["goal_1"] + $activity["goal_1"] -  $request->activity["goal_1"]);
                                                $selected_objective_product["goal_2"] = ($selected_objective_product["goal_2"] + $activity["goal_2"] -  $request->activity["goal_2"]);
                                                $selected_objective_product["goal_3"] = ($selected_objective_product["goal_3"] + $activity["goal_3"] -  $request->activity["goal_3"]);
                                                $selected_objective_product["goal_4"] = ($selected_objective_product["goal_4"] + $activity["goal_4"] -  $request->activity["goal_4"]);
                                                $selected_objective_product->save();
                                                $activity->name =  $request->activity["name"] ?: $activity->name;
                                                $activity->answer_sentence =  $request->activity["answer_sentence"] ?: $activity->answer_sentence;
                                                $activity->weighing =  $request->activity["weighing"] ?: $activity->weighing;
                                                $activity->product_id = $internal_product_id == null ? null : $internal_product_id["value"];
                                                $activity->goal_1 = $request->activity["goal_1"];
                                                $activity->goal_2 = $request->activity["goal_2"];
                                                $activity->goal_3 = $request->activity["goal_3"];
                                                $activity->goal_4 = $request->activity["goal_4"];
                                                $activity->goal = $request->activity["goal_1"] + $request->activity["goal_2"] + $request->activity["goal_3"] + $request->activity["goal_4"];
                                                $activity->ocde_category_id = $internal_indicator_ocde_id == null ? null : $internal_indicator_ocde_id["father_id"];
                                                $activity->ocde_indicator_id = $internal_indicator_ocde_id == null ? null : $internal_indicator_ocde_id["value"];
                                                $activity->geometry =  $request->activity["geometry"] ?: $activity->geometry;
                                                $activity->save();
                                                $errors = false;
                                                $response_info["message"] = "Se actualizó la actividad con activity_code " . $request->activity["activity_code"] . " para el objetivo";
                                                FacadesDB::commit();
                                            }
                                        }
                                    } else {
                                        $response_info["errors"] = "El producto ingresado no esta creado en productos objetivos";
                                        $errors = true;
                                    }
                                }
                            }
                        }
                    } else {
                        $errors = true;
                        $response_info["errors"] = ["La actividad con activity_code " . $request->activity["activity_code"] . "-" . $objective->objective_code . " para el objetivo ingresado no existe."];
                    }
                } else {
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
     * Funcion para validar y eliminar la actividad
     * de un objetivo enviado
     */
    public function destroy(Request $request)
    {
        try {
            $validator = $this->validateActivityRequest($request);
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $responseValidation = UtilsController::checkStructure($request, "objective");
                if (!$responseValidation["errors"]) {
                    $objective = $responseValidation["data"];
                    $activity = Activity::where('activity_code',  $request->activity_code . "-" . $objective->objective_code)
                        ->where('objective_id', $objective["id"])->first();
                    if ($activity) {
                        $indicators_activities = Indicator_activity::where('activities_id', $activity->id)->get();
                        $activity_sources = ActivitySource::where('activity_id', $activity->id)->get();
                        $evidence_advances = EvidenceAdvance::where('activity_id', $activity->id)->get();
                        if (sizeof($indicators_activities) > 0 || sizeof($activity_sources) > 0  || sizeof($evidence_advances) > 0) {
                            $response_info->errors = ["No se puede eliminar la actividad con rezagos ni indicadores ni recursos asociados"];
                        } else {
                            $objectiveProducts = ObjectiveProduct::where('objective_id', $objective->id)->get();
                            $selected_objective_product = null;
                            foreach ($objectiveProducts as $keyObjectiveProduct => $objectiveProduct) {
                                if ($activity->product_id == $objectiveProduct["product_id"]) {
                                    $selected_objective_product = $objectiveProduct;
                                }
                            }
                            if (!$selected_objective_product) {
                                $selected_objective_product = ObjectiveProduct::where("id", $activity->product_id)->first();
                            }
                            if ($selected_objective_product) {
                                FacadesDB::beginTransaction();
                                $selected_objective_product["goal_1"] += $activity["goal_1"];
                                $selected_objective_product["goal_2"] += $activity["goal_2"];
                                $selected_objective_product["goal_3"] += $activity["goal_3"];
                                $selected_objective_product["goal_4"] += $activity["goal_4"];
                                $selected_objective_product->save();
                                $activity->delete();
                                $response_info->message = "Actividad eliminada";
                                $errors = false;
                                FacadesDB::commit();
                            } else {
                                $response_info->errors = "Debes revisar los productos";
                            }
                        }
                    } else {
                        $response_info->errors = ["La actividad con activity_code " . $request->activity_code . " para el objetivo ingresado no existe."];
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
     * Lista de Indicadores OCDE para la validar si el indicador 
     * OCDE enviado existe
     */
    public function ODCEIndicatorList(string $ocdeCategoryId)
    {
        $list = array(
            array("id" => 1, "father_id" => 1171, "value" => 1175),
            array("id" => 2, "father_id" => 1171, "value" => 1176),
            array("id" => 3, "father_id" => 1171, "value" => 1177),
            array("id" => 4, "father_id" => 1171, "value" => 1178),
            array("id" => 5, "father_id" => 1171, "value" => 1179),
            array("id" => 6, "father_id" => 1171, "value" => 1180),
            array("id" => 7, "father_id" => 1171, "value" => 1181),
            array("id" => 8, "father_id" => 1171, "value" => 1182),
            array("id" => 9, "father_id" => 1171, "value" => 1183),
            array("id" => 10, "father_id" => 1172, "value" => 1184),
            array("id" => 11, "father_id" => 1172, "value" => 1185),
            array("id" => 12, "father_id" => 1172, "value" => 1186),
            array("id" => 13, "father_id" => 1172, "value" => 1187),
            array("id" => 14, "father_id" => 1172, "value" => 1188),
            array("id" => 15, "father_id" => 1172, "value" => 1189),
            array("id" => 16, "father_id" => 1172, "value" => 1190),
            array("id" => 17, "father_id" => 1173, "value" => null),
        );
        $value = null;
        foreach ($list as $key => $item) {
            if ($item["id"] == $ocdeCategoryId) {
                $value = $item;
            }
        }
        return $value;
    }

    /**
     * Función para validar que los datos del request sean correctos 
     * antes de pasar a la funcion principal
     */
    private function validateActivityRequest($request)
    {
        switch ($request->method()) {
            case "POST":
                $rules = [
                    'pai_code' => 'required|numeric',
                    'strategic_line_code' => 'required|numeric',
                    'program_code' => 'required|numeric',
                    'project_code' => 'required|numeric',
                    'objective_code' => 'required|numeric',
                    'activities' => 'required|array|min:1',
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
                    'objective_code.required' => ':attribute es requerido.',
                    'objective_code.numeric' => ':attribute debe ser un numero.',
                    'activities.required' => ':attribute es un campo requerido.',
                    'activities.array' => ':attribute debe ser un array.',
                    'activities.min' => ':attribute debe tener un tamaño superior a 1',
                ];
                $attributes = [
                    'pai_code' => 'Código interno del PAI',
                    'strategic_line_code' => 'Código Interno de la línea estratégica',
                    'program_code' => 'Código Interno del programa',
                    'project_code' => 'Código Interno del proyecto',
                    'objective_code' => 'Código Interno del objetivo',
                    'activities' => 'Los Productos objetivos',
                ];
                break;
            case "PUT":
                $rules = [
                    'pai_code' => 'required|numeric',
                    'strategic_line_code' => 'required|numeric',
                    'program_code' => 'required|numeric',
                    'project_code' => 'required|numeric',
                    'objective_code' => 'required|numeric',
                    'activity.name' => 'required|min:3',
                    'activity.answer_sentence' => 'required',
                    'activity.weighing' => 'required|integer|min:1|max:100',
                    'activity.goal_1' => 'required|numeric|min:0',
                    'activity.goal_2' => 'required|numeric|min:0',
                    'activity.goal_3' => 'required|numeric|min:0',
                    'activity.goal_4' => 'required|numeric|min:0',
                    'activity.product_id' => 'nullable|numeric|min:1',
                    'activity.objective_product_code' => 'nullable|numeric|min:1',
                    'activity.ocde_indicator_id' => 'required|numeric|min:1|max:9999',
                    'activity.activity_code' => 'required|numeric',
                    'activity.geometry' => 'required|numeric|min:1|max:4'
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
                    'activity.name.required' => ':attribute es un campo requerido.',
                    'activity.name.min' => ':attribute debe tener mínimo 3 caracteres.',
                    'activity.answer_sentence.required' => ':attribute es un campo requerido.',
                    'activity.weighing.required' => ':attribute es un campo requerido.',
                    'activity.weighing.integer' => ':attribute debe ser un numero entero.',
                    'activity.weighing.min' => ':attribute debe ser mayor o igual a 1',
                    'activity.weighing.max' => ':attribute debe ser menor o igual a 100',
                    'activity.product_id.numeric' => ':attribute debe ser un numero.',
                    'activity.product_id.min' => ':attribute debe ser mayor o igual a 1',
                    'activity.goal_1.required' => ':attribute es un campo requerido.',
                    'activity.goal_1.numeric' => ':attribute debe ser un numero.',
                    'activity.goal_1.min' => ':attribute debe ser mayor o igual a 1',
                    'activity.goal_2.required' => ':attribute es un campo requerido.',
                    'activity.goal_2.numeric' => ':attribute debe ser un numero.',
                    'activity.goal_2.min' => ':attribute debe ser mayor o igual a 1',
                    'activity.goal_3.required' => ':attribute es un campo requerido.',
                    'activity.goal_3.numeric' => ':attribute debe ser un numero.',
                    'activity.goal_3.min' => ':attribute debe ser mayor o igual a 1',
                    'activity.goal_4.required' => ':attribute es un campo requerido.',
                    'activity.goal_4.numeric' => ':attribute debe ser un numero.',
                    'activity.goal_4.min' => ':attribute debe ser mayor o igual a 1',
                    'activity.ocde_indicator_id.required' => ':attribute es un campo requerido.',
                    'activity.ocde_indicator_id.numeric' => ':attribute debe ser un numero.',
                    'activity.ocde_indicator_id.min' => ':attribute debe ser mayor o igual a 1',
                    'activity.ocde_indicator_id.max' => ':attribute debe ser menor a 10000',
                    'activity.activity_code.required' => ':attribute es un campo requerido.',
                    'activity.activity_code.numeric' => ':attribute  debe ser un numero.',
                    'activity.geometry.required' => ':attribute es un campo requerido.',
                    'activity.geometry.numeric' => ':attribute debe ser un numero.',
                    'activity.geometry.min' => ':attribute debe ser mayor o igual a 1',
                    'activity.geometry.max' => ':attribute debe ser menor a 5',

                ];
                $attributes = [
                    'pai_code' => 'Código interno del PAI',
                    'strategic_line_code' => 'Código Interno de la línea estratégica',
                    'program_code' => 'Código interno del programa',
                    'project_code' => 'Código interno del proyecto',
                    'objective_code' => 'Código Interno del objetivo',
                    'activity.name' => 'Nombre',
                    'activity.product_other' => 'Otro producto',
                    'activity.product_id' => 'Código producto dominio',
                    'activity.weighing' => 'La ponderacion',
                    'activity.goal_1' => 'Meta año 1',
                    'activity.goal_2' => 'Meta año 2',
                    'activity.goal_3' => 'Meta año 3',
                    'activity.goal_4' => 'Meta año 4',
                    'activity.unit_goal' => 'Tipo unidad dominio',
                    'activity.indicator_national_id' => 'Código indicador nacional, dominio',
                    'activity.indicator_ods_id' => 'Código indicador ODS, dominio',
                    'activity.national_policy_id' => 'Código indicador Politica Nacional, dominio',
                    'activity.activity_code' => 'Código Interno de la actividad',
                    'activity.geometry' => 'Código interno de la geometria',
                    'activity.ocde_indicator_id' => 'Código interno del indicador OCDE',
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
                    'activity_code' => 'required|numeric',
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
                    'activity_code.required' => ':attribute es un campo requerido.',
                    'activity_code.numeric' => ':attribute debe ser un numero.',
                ];
                $attributes = [
                    'pai_code' => 'Código interno del PAI',
                    'strategic_line_code' => 'Código Interno de la línea estratégica',
                    'program_code' => 'Código Interno del programa',
                    'project_code' => 'Código Interno del proyecto',
                    'objective_code' => 'Código Interno del objetivo',
                    'activity_code' => 'Código Interno de la actividad',
                ];
                break;
        }
        return Validator::make($request->all(), $rules, $messages, $attributes);
    }
    /**
     * Función para validar que los datos del request sean correctos 
     * antes de pasar a la funcion principal
     */
    private function validateInternalActivityRequest(array $request)
    {
        $rules = [
            'name' => 'required|min:3',
            'answer_sentence' => 'required',
            'weighing' => 'required|integer|min:1|max:100',
            'goal_1' => 'required|numeric|min:0',
            'goal_2' => 'required|numeric|min:0',
            'goal_3' => 'required|numeric|min:0',
            'goal_4' => 'required|numeric|min:0',
            'product_id' => 'nullable|numeric|min:1',
            'objective_product_code' => 'nullable|numeric|min:1',
            'ocde_indicator_id' => 'required|numeric|min:1|max:9999',
            'activity_code' => 'required|numeric',
            'geometry' => 'required|numeric|min:1|max:4'
        ];
        $messages = [
            'name.required' => ':attribute es un campo requerido.',
            'name.min' => ':attribute debe tener mínimo 3 caracteres.',
            'answer_sentence.required' => ':attribute es un campo requerido.',
            'weighing.required' => ':attribute es un campo requerido.',
            'weighing.integer' => ':attribute debe ser un numero entero.',
            'weighing.min' => ':attribute debe ser mayor o igual a 1',
            'weighing.max' => ':attribute debe ser menor o igual a 100',
            'product_id.numeric' => ':attribute debe ser un numero.',
            'product_id.min' => ':attribute debe ser mayor o igual a 1',
            'goal_1.required' => ':attribute es un campo requerido.',
            'goal_1.numeric' => ':attribute debe ser un numero.',
            'goal_1.min' => ':attribute debe ser mayor o igual a 1',
            'goal_2.required' => ':attribute es un campo requerido.',
            'goal_2.numeric' => ':attribute debe ser un numero.',
            'goal_2.min' => ':attribute debe ser mayor o igual a 1',
            'goal_3.required' => ':attribute es un campo requerido.',
            'goal_3.numeric' => ':attribute debe ser un numero.',
            'goal_3.min' => ':attribute debe ser mayor o igual a 1',
            'goal_4.required' => ':attribute es un campo requerido.',
            'goal_4.numeric' => ':attribute debe ser un numero.',
            'goal_4.min' => ':attribute debe ser mayor o igual a 1',
            'ocde_indicator_id.required' => ':attribute es un campo requerido.',
            'ocde_indicator_id.numeric' => ':attribute debe ser un numero.',
            'ocde_indicator_id.min' => ':attribute debe ser mayor o igual a 1',
            'ocde_indicator_id.max' => ':attribute debe ser menor a 10000',
            'activity_code.required' => ':attribute es un campo requerido.',
            'activity_code.numeric' => ':attribute  debe ser un numero.',
            'geometry.required' => ':attribute es un campo requerido.',
            'geometry.numeric' => ':attribute debe ser un numero.',
            'geometry.min' => ':attribute debe ser mayor o igual a 1',
            'geometry.max' => ':attribute debe ser menor a 5',
        ];
        $attributes = [
            'name' => 'Nombre de la actividad',
            'answer_sentence' => 'Respuesta sentencia',
            'weighing' => 'La ponderación',
            'goal_1' => 'Meta año 1',
            'goal_2' => 'Meta año 2',
            'goal_3' => 'Meta año 3',
            'goal_4' => 'Meta año 4',
            'product_id' => 'Código producto-objetivo',
            'ocde_indicator_id' => 'Código del indicador',
            'activity_code' => 'Código interno de la actividad',
            'geometry' => 'Código interno de la geometria',
        ];
        return Validator::make($request, $rules, $messages, $attributes);
    }
}
