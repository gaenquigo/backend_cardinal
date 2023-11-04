<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Models\Activity;
use App\Models\ActivitySource;
use App\Models\Financial_Plan;
use App\Models\Financing_Source;
use App\Models\PAI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;
use stdClass;
use Tymon\JWTAuth\Facades\JWTAuth;
use Validator;

/**
 * Class 
 * @package App\Http\Controllers
 */
class ActivitiesSourcesController extends UtilsController
{
    /**
     * Funcion para obtener los recursos que se le
     * asociaron a una actividad
     */
    public function index(Request $request)
    {
        try {
            $validator = $this->validateIndicatorsActivitiesRequest($request);
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $responseValidation = UtilsController::checkStructure(
                    $request,
                    "activity",
                    false,
                    true
                );
                if (!$responseValidation["errors"]) {
                    $activity = $responseValidation["data"];
                    $group_id = JWTAuth::toUser($request->token)["group_id"];
                    $pai = PAI::where('pai_code', '=', $request->pai_code)
                        ->where('group_id', $group_id)->first();
                    $financing_source = Financing_Source::where('code', $request->financial_source_code)
                        ->where('final_level', true)->where('group_id', '=', $group_id)->first();
                    if ($financing_source) {
                        $financial_plan = Financial_Plan::where('source_id', $financing_source->id)
                            ->where('year', $request->year)->where('p_a_i_id', $pai->id)->first();
                        if ($financial_plan) {
                            $activity_source = ActivitySource::where('activity_id', $activity->id)
                                ->where('source_id', $financial_plan->id)->where('age', $request->year)->first();
                            if ($activity_source) {
                                $response_info->message = $activity_source;
                                $errors = false;
                            } else {
                                $response_info->errors = ["No existe la relación de actividades y la fuente de financiación ingresada"];
                            }
                        } else {
                            $response_info->errors = ["No existe ningún plan financiero asociado a esta la fuente de financiación"];
                        }
                    } else {
                        $response_info->errors = ["La fuente de financación con financial_source_code " . $request->financial_source_code . " no existe."];
                    }
                } else {
                    $response_info->errors = $responseValidation["message"];
                }
            }
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
     * Funcion para asociar recursos a 
     * una actividad
     */
    public function store(Request $request)
    {
        try {
            $validator = $this->validateIndicatorsActivitiesRequest($request);
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $responseValidation = UtilsController::checkStructure($request, "objective");
                $errors = $responseValidation["errors"];
                if (!$responseValidation["errors"]) {
                    $objective = $responseValidation["data"];
                    $activity = Activity::where('activity_code', '=', $request->activity_code . "-" . $objective->objective_code)
                        ->where('objective_id', '=', $objective["id"])->where('goal', '>', 0)->where('goal_' . $request->year, '>', 0)->first();
                    if ($activity) {
                        $group_id = JWTAuth::toUser($request->token)["group_id"];
                        $pai = PAI::where('pai_code', '=', $request->pai_code)
                            ->where('group_id', $group_id)->where('approved', false)->first();
                        $financing_source = Financing_Source::where('code', $request->financial_source_code)
                            ->where('final_level', true)->where('group_id', '=', $group_id)->first();
                        if ($financing_source) {
                            $financial_plan = Financial_Plan::where('source_id', $financing_source->id)
                                ->where('year', $request->year)->where('p_a_i_id', $pai->id)->first();
                            if ($financial_plan) {
                                $activity_source = ActivitySource::where('activity_id', $activity->id)
                                    ->where('source_id', $financial_plan->id)->where('age', $request->year)->first();
                                FacadesDB::beginTransaction();
                                if ($activity_source) {
                                    if ($request->value > ($financial_plan->investment_balance + $activity_source->value)) {
                                        $response_info->errors = ["El valor ingresado no puede ser mayor al del plan financiero en su apartado de inversión"];
                                    } else {
                                        $financial_plan->investment_balance = ($financial_plan->investment_balance + $activity_source->value) - $request->value;
                                        $financial_plan->save();
                                        $activity_source->value = $request->value;
                                        $activity_source->evidence_balance = $request->value;
                                        $activity_source->save();
                                        $response_info->message = "Se actualizó la actividad con relación a plan financiero para el año " . $request->year;
                                        $errors = false;
                                    }
                                } else {
                                    if ($request->value > $financial_plan->investment_balance) {
                                        $response_info->errors = ["El valor ingresado no puede ser mayor al del plan financiero en su apartado de inversión"];
                                    } else {
                                        $arrayActivitySource = [
                                            "activity_id" => $activity->id,
                                            "goal" => 0,
                                            "source_id" => $financial_plan->id,
                                            "value" => $request->value,
                                            "evidence_balance" => $request->value,
                                            "age" => $request->year
                                        ];
                                        ActivitySource::create($arrayActivitySource);
                                        $financial_plan->investment_balance = $financial_plan->investment_balance - $request->value;
                                        $financial_plan->save();
                                        $response_info->message = "Se creó la actividad con relación a plan financiero para el año " . $request->year;
                                        $errors = false;
                                    }
                                }
                                FacadesDB::commit();
                            } else {
                                $response_info->errors = ["El plan finaciero no existe"];
                            }
                        } else {
                            $response_info->errors = ["La fuente de financación con financial_source_code" . $request->financial_source_code . " no existe."];
                        }
                    } else {
                        $response_info->errors = ["La actividad con activity_code " . $request->activity_code . " para el objetivo ingresado no existe o su meta es 0."];
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
     * Funcion para desacociar recursos a 
     * una actividad
     */
    public function destroy(Request $request)
    {
        try {
            $validator = $this->validateIndicatorsActivitiesRequest($request);
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $responseValidation = UtilsController::checkStructure($request, "objective");
                $errors = $responseValidation["errors"];
                if (!$responseValidation["errors"]) {
                    $objective = $responseValidation["data"];
                    $activity = Activity::where('activity_code',  $request->activity_code . "-" . $objective->objective_code)
                        ->where('objective_id', '=', $objective["id"])
                        ->where('goal', '>', 0)->first();
                    if ($activity) {
                        $group_id = JWTAuth::toUser($request->token)["group_id"];
                        $pai = PAI::where('pai_code', '=', $request->pai_code)
                            ->where('group_id', $group_id)->where('approved', false)->first();
                        $financing_source = Financing_Source::where('code', $request->financial_source_code)
                            ->where('final_level', true)->where('group_id', '=', $group_id)->first();
                        if ($financing_source) {
                            $financial_plan = Financial_Plan::where('source_id', $financing_source->id)
                                ->where('year', $request->year)->where('p_a_i_id', $pai->id)->first();
                            if ($financial_plan) {
                                $activity_source = ActivitySource::where('activity_id', $activity->id)
                                    ->where('source_id', $financial_plan->id)->where('age', $request->year)->first();
                                if ($activity_source) {
                                    FacadesDB::beginTransaction();
                                    $financial_plan->investment_balance = $financial_plan->investment_balance + $activity_source->value;
                                    $financial_plan->save();
                                    $activity_source->delete();
                                    $response_info->message = "Se eliminó el registro";
                                    $errors = false;
                                    FacadesDB::commit();
                                } else {
                                    $response_info->errors = ["No existe la relación de actividades y la fuente de financiación ingresada"];
                                }
                            } else {
                                $response_info->errors = ["No existe ningún plan financiero asociado a esta la fuente de financiación"];
                            }
                        } else {
                            $response_info->errors = ["La fuente de financación con financial_source_code" . $request->financial_source_code . " no existe."];
                        }
                    } else {
                        $response_info->errors = ["La actividad con activity_code " . $request->activity_code . " para el objetivo ingresado no existe o su meta es 0."];
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
     * antes de pasar a la funcion principal para 
     * obtener, asociar y deasociar recursos a la actividad
     */
    private function validateIndicatorsActivitiesRequest($request)
    {
        switch ($request->method()) {
            case "POST":
            case "PUT":
                $rules = [
                    'pai_code' => 'required|numeric',
                    'strategic_line_code' => 'required|numeric',
                    'program_code' => 'required|numeric',
                    'project_code' => 'required|numeric',
                    'objective_code' => 'required|numeric',
                    'activity_code' => 'required|numeric',
                    'financial_source_code' => 'required',
                    'year' => 'required|numeric|min:1|max:4',
                    'value' => 'required|numeric',
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
                    'financial_source_code.required' => ':attribute es un campo requerido.',
                    'year.required' => ':attribute es un campo requerido.',
                    'year.numeric' => ':attribute debe ser un numero.',
                    'year.min' => ':attribute debe ser mayor o igual a 1',
                    'year.max' => ':attribute debe ser menor o igual a 4',
                    'value.required' => ':attribute es un campo requerido.',
                    'value.numeric' => ':attribute debe ser un numero.',
                ];
                $attributes = [
                    'pai_code' => 'Código interno del PAI',
                    'strategic_line_code' => 'Código Interno de la línea estratégica',
                    'program_code' => 'Código Interno del programa',
                    'project_code' => 'Código Interno del proyecto',
                    'objective_code' => 'Código Interno del objetivo',
                    'activity_code' => 'Código Interno de la actividad',
                    'financial_source_code' => 'Código Interno del indicador',
                    'year' => 'Año',
                    'value' => 'Valor'
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
                    'financial_source_code' => 'required',
                    'year' => 'required|numeric|min:1|max:4'
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
                    'financial_source_code.required' => ':attribute es un campo requerido.',
                    'financial_source_code.numeric' => ':attribute debe ser un numero.',
                    'year.required' => ':attribute es un campo requerido.',
                    'year.numeric' => ':attribute debe ser un numero.',
                    'year.min' => ':attribute debe ser mayor o igual a 1',
                    'year.max' => ':attribute debe ser menor o igual a 4'
                ];
                $attributes = [
                    'pai_code' => 'Código interno del PAI',
                    'strategic_line_code' => 'Código Interno de la línea estratégica',
                    'program_code' => 'Código Interno del programa',
                    'project_code' => 'Código Interno del proyecto',
                    'objective_code' => 'Código Interno del objetivo',
                    'activity_code' => 'Código Interno de la actividad',
                    'financial_source_code' => 'Código Interno del indicador',
                    'year' => 'Año'
                ];
                break;
        }
        return Validator::make($request->all(), $rules, $messages, $attributes);
    }
}
