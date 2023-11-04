<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use Illuminate\Http\Request;
use App\Models\PAI;
use App\Models\EvidenceAdvance;
use App\Models\EvidenceFinancial;
use App\Models\ActivitySource;
use App\Models\Financial_Plan;
use App\Models\Financing_Source;
use Illuminate\Support\Facades\DB as FacadesDB;
use Tymon\JWTAuth\Facades\JWTAuth;
use Validator;

/**
 * Class LagsSourcesController
 * @package App\Http\Controllers
 */
class LagsSourcesController extends UtilsController
{
    /**
     * Funcion para obtener los recursos que se le
     * asociaron a un rezago
     */
    public function index(Request $request)
    {
        try {
            $validator = $this->validateLagSourceRequest($request);
            $errors = true;
            $response_info = [];
            $response_info["message"] = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info["errors"] = $validator->messages();
            } else {
                $responseValidation = UtilsController::checkStructure($request, "activity", true);
                if (!$responseValidation["errors"]) {
                    $activity = $responseValidation["data"];
                    $evidence = EvidenceAdvance::where('activity_id',  $activity["id"])
                        ->where('external_code', "R-" . $request->lag_code . "-" . $activity->activity_code)
                        ->where('year', $request["year"])->first();
                    if ($evidence) {
                        $group_id = JWTAuth::toUser($request->token)["group_id"];
                        $pai = PAI::where('pai_code', $request->pai_code)
                            ->where('group_id', $group_id)->where('approved', true)->first();
                        $financing_source = Financing_Source::where('code', $request->financial_source_code)
                            ->where('final_level', true)->where('group_id', $group_id)->first();
                        if ($financing_source) {
                            $financial_plan = Financial_Plan::where('source_id', $financing_source->id)
                                ->where('year', $request->year)->where('p_a_i_id', $pai->id)->first();
                            if ($financial_plan) {
                                $activity_source = ActivitySource::where('activity_id', $activity->id)
                                    ->where('source_id', $financial_plan->id)->where('age', $request->year)->first();
                                if ($activity_source) {
                                    $evidence_financial = EvidenceFinancial::where('activity_source_id', $activity_source["id"])->where('evidence_id', $evidence["id"])
                                        ->first();
                                    if ($evidence_financial) {
                                        $response_info["message"] = $evidence_financial;
                                        $errors = false;
                                    } else {
                                        $response_info["message"] = "El recurso asociado a la evidencia no existe";
                                    }
                                } else {
                                    $response_info["errors"] = ["No existe la relación de actividades y la fuente de financiación ingresada"];
                                }
                            } else {
                                $response_info["errors"] = ["No existe ningún plan financiero asociado a esta la fuente de financiación"];
                            }
                        } else {
                            $response_info["errors"] = ["La fuente de financación con financial_source_code" . $request->financial_source_code . " no existe."];
                        }
                    } else {
                        $response_info["errors"] = ["El rezago con código lag_code " . $request->lag_code . " no existe para la actividad en el año ingresado."];
                    }
                } else {
                    $response_info["errors"] = $responseValidation["message"];
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
     * un rezago
     */
    public function store(Request $request)
    {
        try {
            $validator = $this->validateLagSourceRequest($request);
            $errors = true;
            $response_info = [];
            $response_info["message"] = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info["errors"] = $validator->messages();
            } else {
                $responseValidation = UtilsController::checkStructure($request, "activity", true);
                if (!$responseValidation["errors"]) {
                    $activity = $responseValidation["data"];
                    $evidence = EvidenceAdvance::where('activity_id',  $activity["id"])
                        ->where('external_code', "R-" . $request->lag_code . "-" . $activity->activity_code)
                        ->where('year', $request["year"])->first();
                    if ($evidence) {
                        $group_id = JWTAuth::toUser($request->token)["group_id"];
                        $pai = PAI::where('pai_code', $request->pai_code)
                            ->where('group_id', $group_id)->where('approved', true)->first();
                        $financing_source = Financing_Source::where('code', $request->financial_source_code)
                            ->where('final_level', true)->where('group_id', $group_id)->first();
                        if ($financing_source) {
                            $financial_plan = Financial_Plan::where('source_id', $financing_source->id)
                                ->where('year', $request->year)->where('p_a_i_id', $pai->id)->first();
                            if ($financial_plan) {
                                $activity_source = ActivitySource::where('activity_id', $activity->id)
                                    ->where('source_id', $financial_plan->id)->where('age', $request->year)->first();
                                if ($activity_source) {
                                    $evidence_financial = EvidenceFinancial::where('activity_source_id', $activity_source["id"])->where('evidence_id', $evidence["id"])
                                        ->first();
                                    FacadesDB::beginTransaction();
                                    if ($evidence_financial) {
                                        if ($request["value"] > ($activity_source->evidence_balance + $evidence_financial->value)) {
                                            $response_info["message"] = Controller::$str_struct_err;
                                            $response_info["errors"] = ["El valor no puede ser mayor al del presupuesto asignado en la actividad"];
                                        } else {
                                            $activity_source->evidence_balance = $activity_source->evidence_balance - $request["value"] + $evidence_financial->value;
                                            $evidence_financial->value = $request["value"];
                                            $evidence_financial->save();
                                            $response_info["message"] = "El recurso asociado al rezago se actualizó correctamente";
                                            $activity_source->save();
                                            $errors = false;
                                        }
                                    } else {
                                        if ($request["value"] > $activity_source->evidence_balance) {
                                            $response_info["message"] = Controller::$str_struct_err;
                                            $response_info["errors"] = ["El valor no puede ser mayor al del presupuesto asignado en la actividad"];
                                        } else {
                                            $arrayEvidenceFinancial = [
                                                'value' => $request["value"],
                                                'activity_source_id' => $activity_source["id"],
                                                'evidence_id' => $evidence["id"],
                                            ];
                                            EvidenceFinancial::create($arrayEvidenceFinancial);
                                            $activity_source->evidence_balance = $activity_source->evidence_balance - $request["value"];
                                            $response_info["message"] = "El recurso asociado al rezago se creó correctamente";
                                            $activity_source->save();
                                            $errors = false;
                                        }
                                    }
                                    FacadesDB::commit();
                                } else {
                                    $response_info["errors"] = ["No existe la relación de actividades y la fuente de financiación ingresada"];
                                }
                            } else {
                                $response_info["errors"] = ["No existe ningún plan financiero asociado a esta la fuente de financiación"];
                            }
                        } else {
                            $response_info["errors"] = ["La fuente de financación con financial_source_code" . $request->financial_source_code . " no existe."];
                        }
                    } else {
                        $response_info["errors"] = ["El rezago con código lag_code " . $request->lag_code . " no existe para la actividad en el año ingresado."];
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
     * Funcion para desacociar recursos a 
     * un rezago
     */
    public function destroy(Request $request)
    {
        try {
            $validator = $this->validateLagSourceRequest($request);
            $errors = true;
            $response_info = [];
            $response_info["message"] = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info["errors"] = $validator->messages();
            } else {
                $responseValidation = UtilsController::checkStructure($request, "activity", true);
                if (!$responseValidation["errors"]) {
                    $activity = $responseValidation["data"];
                    $evidence = EvidenceAdvance::where('activity_id',  $activity["id"])
                        ->where('external_code', "R-" . $request->lag_code . "-" . $activity->activity_code)
                        ->where('year', $request["year"])->first();
                    if ($evidence) {
                        $group_id = JWTAuth::toUser($request->token)["group_id"];
                        $pai = PAI::where('pai_code', $request->pai_code)
                            ->where('group_id', $group_id)->where('approved', true)->first();
                        $financing_source = Financing_Source::where('code', $request->financial_source_code)
                            ->where('final_level', true)->where('group_id', $group_id)->first();
                        if ($financing_source) {
                            $financial_plan = Financial_Plan::where('source_id', $financing_source->id)
                                ->where('year', $request->year)->where('p_a_i_id', $pai->id)->first();
                            if ($financial_plan) {
                                $activity_source = ActivitySource::where('activity_id', $activity->id)
                                    ->where('source_id', $financial_plan->id)->where('age', $request->year)->first();
                                if ($activity_source) {
                                    $evidence_financial = EvidenceFinancial::where('activity_source_id', $activity_source["id"])->where('evidence_id', $evidence["id"])
                                        ->first();
                                    if ($evidence_financial) {
                                        FacadesDB::beginTransaction();
                                        $activity_source->evidence_balance = $activity_source->evidence_balance + $evidence_financial->value;
                                        $activity_source->save();
                                        $response_info["message"] = "El recurso asociado al rezago se eliminó correctamente";
                                        $evidence_financial->delete();
                                        $errors = false;
                                        FacadesDB::commit();
                                    } else {
                                        $response_info["message"] = "El recurso asociado al rezago no existe";
                                    }
                                } else {
                                    $response_info["errors"] = ["No existe la relación de actividades y la fuente de financiación ingresada"];
                                }
                            } else {
                                $response_info["errors"] = ["No existe ningún plan financiero asociado a esta la fuente de financiación"];
                            }
                        } else {
                            $response_info["errors"] = ["La fuente de financación con financial_source_code" . $request->financial_source_code . " no existe."];
                        }
                    } else {
                        $response_info["errors"] = ["El rezago con código lag_code " . $request->lag_code . " no existe para la actividad en el año ingresado."];
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
     * Función para validar que los datos del request sean correctos 
     * antes de pasar a la funcion principal para 
     * obtener, asociar y deasociar recursos a un rezago
     */
    private function validateLagSourceRequest($request)
    {
        $rules = [];
        $messages = [];
        $attributes = [];
        switch ($request->method()) {
            case "POST":
                $rules = [
                    'pai_code' => 'required|numeric',
                    'strategic_line_code' => 'required|numeric',
                    'program_code' => 'required|numeric',
                    'project_code' => 'required|numeric',
                    'objective_code' => 'required|numeric',
                    'activity_code' => 'required|numeric',
                    'lag_code' => 'required|numeric',
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
                    'lag_code.required' => ':attribute es un campo requerido.',
                    'lag_code.numeric' => ':attribute debe ser un numero.',
                    'financial_source_code.required' => ':attribute es un campo requerido.',
                    'financial_source_code.numeric' => ':attribute debe ser un numero.',
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
                    'lag_code' => 'Código Interno de la evidencia',
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
                    'lag_code' => 'required|numeric',
                    'financial_source_code' => 'required',
                    'year' => 'required|numeric|min:1|max:4',
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
                    'lag_code.required' => ':attribute es un campo requerido.',
                    'lag_code.numeric' => ':attribute debe ser un numero.',
                    'financial_source_code.required' => ':attribute es un campo requerido.',
                    'financial_source_code.numeric' => ':attribute debe ser un numero.',
                    'year.required' => ':attribute es un campo requerido.',
                    'year.numeric' => ':attribute debe ser un numero.',
                    'year.min' => ':attribute debe ser mayor o igual a 1',
                    'year.max' => ':attribute debe ser menor o igual a 4',
                ];
                $attributes = [
                    'pai_code' => 'Código interno del PAI',
                    'strategic_line_code' => 'Código Interno de la línea estratégica',
                    'program_code' => 'Código Interno del programa',
                    'project_code' => 'Código Interno del proyecto',
                    'objective_code' => 'Código Interno del objetivo',
                    'activity_code' => 'Código Interno de la actividad',
                    'lag_code' => 'Código Interno de la evidencia',
                    'financial_source_code' => 'Código Interno del indicador',
                    'year' => 'Año',
                ];
                break;
        }
        return Validator::make($request->all(), $rules, $messages, $attributes);
    }
}
