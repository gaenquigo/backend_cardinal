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
 * Class 
 * @package App\Http\Controllers
 */
class AdvanceSourcesController extends UtilsController
{
    /**
     * Valida los datos y obtiene
     * los recursos de un avance
     */
    public function index(Request $request)
    {
        try {
            $validator = $this->validateAdvanceSourceRequest($request);
            $errors = true;
            $response_info = [];
            $response_info["message"] = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info["errors"] = $validator->messages();
            } else {
                $responseValidation = UtilsController::checkStructure(
                    $request,
                    "activity",
                    true,
                    true
                );
                if (!$responseValidation["errors"]) {
                    $activity = $responseValidation["data"];
                    $evidence = EvidenceAdvance::where('activity_id',  $activity["id"])
                        ->where('external_code', "E-" . $request->evidence_code . "-" . $activity->activity_code)
                        ->where('year', $request["year"])->first();
                    if ($evidence) {
                        $advance = EvidenceAdvance::where('activity_id',  $activity["id"])
                            ->where('external_code', "A-" . $request->advance_code . "-" . $evidence->external_code)
                            ->where('year', $evidence->year)->where('evidence_advance_id', $evidence->id)->first();
                        if ($advance) {
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
                                        $evidence_financial = EvidenceFinancial::where('activity_source_id', $activity_source["id"])->where('evidence_id', $advance["id"])
                                            ->first();
                                        if ($evidence_financial) {
                                            $response_info["message"] = $evidence_financial;
                                            $errors = false;
                                        } else {
                                            $response_info["message"] = "El recurso asociado a la evidencia no existe";
                                        }
                                    } else {
                                        $response_info["errors"] = ["No existe la relación de actividades y la fuente de financiacion ingresada"];
                                    }
                                } else {
                                    $response_info["errors"] = ["No existe ningún plan financiero asociado a esta la fuente de financiacion"];
                                }
                            } else {
                                $response_info["errors"] = ["La fuente de financación con financial_source_code" . $request->financial_source_code . " no existe."];
                            }
                        } else {
                            $response_info["errors"] = ["El avance con codigo advance_code " . $request->advance_code . " no existe para la evidencia."];
                        }
                    } else {
                        $response_info["errors"] = ["La evidencia con codigo evidence_code " . $request->evidence_code . " no existe para la actividad en el año ingresado."];
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
     * Valida los datos y crea
     * los recursos de un avance
     */
    public function store(Request $request)
    {
        try {
            $validator = $this->validateAdvanceSourceRequest($request);
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
                        ->where('external_code', "E-" . $request->evidence_code . "-" . $activity->activity_code)
                        ->where('year', $request["year"])->first();
                    if ($evidence) {
                        $advance = EvidenceAdvance::where('activity_id',  $activity["id"])
                            ->where('external_code', "A-" . $request->advance_code . "-" . $evidence->external_code)
                            ->where('year', $evidence->year)->where('evidence_advance_id', $evidence->id)->first();
                        if ($advance) {
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
                                            $advance_financial = EvidenceFinancial::where('activity_source_id', $activity_source["id"])->where('evidence_id', $advance["id"])
                                                ->first();
                                            FacadesDB::beginTransaction();
                                            if ($advance_financial) {
                                                if ($request["value"] > ($evidence_financial->value + $advance_financial->value)) {
                                                    $response_info["errors"] = ["El valor no puede ser mayor al del presupuesto desginado"];
                                                } else {
                                                    $advance_financial->value = $request["value"];
                                                    $advance_financial->save();
                                                    $response_info["message"] = "El recurso asociado a la evidencia se actualizó correctamente";
                                                    $activity_source->save();
                                                    $errors = false;
                                                }
                                            } else {
                                                if ($request["value"] > $evidence_financial->value) {
                                                    $response_info["errors"] = ["El valor no puede ser mayor al del presupuesto desginado"];
                                                } else {
                                                    $arrayEvidenceFinancial = [
                                                        'value' => $request["value"],
                                                        'activity_source_id' => $activity_source["id"],
                                                        'evidence_id' => $advance["id"],
                                                    ];
                                                    EvidenceFinancial::create($arrayEvidenceFinancial);
                                                    $response_info["message"] = "El recurso asociado a la evidencia se creo correctamente";
                                                    $activity_source->save();
                                                    $errors = false;
                                                }
                                            }
                                            FacadesDB::commit();
                                        } else {
                                            $response_info["errors"] = ["No existe ningún registro de valor financiero en la evidencia"];
                                        }
                                    } else {
                                        $response_info["errors"] = ["No existe la relación de actividades y la fuente de financiacion ingresada"];
                                    }
                                } else {
                                    $response_info["errors"] = ["No existe ningún plan financiero asociado a esta la fuente de financiacion"];
                                }
                            } else {
                                $response_info["errors"] = ["La fuente de financación con financial_source_code" . $request->financial_source_code . " no existe."];
                            }
                        } else {
                            $response_info["errors"] = ["El avance con codigo advance_code " . $request->advance_code . " no existe para la evidencia."];
                        }
                    } else {
                        $response_info["errors"] = ["La evidencia con codigo evidence_code " . $request->evidence_code . " no existe para la actividad en el año ingresado."];
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
     * Valida los datos y elimina
     * los recursos de un avance
     */
    public function destroy(Request $request)
    {
        try {
            $validator = $this->validateAdvanceSourceRequest($request);
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
                        ->where('external_code', "E-" . $request->evidence_code . "-" . $activity->activity_code)
                        ->where('year', $request["year"])->first();
                    if ($evidence) {
                        $advance = EvidenceAdvance::where('activity_id',  $activity["id"])
                            ->where('external_code', "A-" . $request->advance_code . "-" . $evidence->external_code)
                            ->where('year', $evidence->year)->where('evidence_advance_id', $evidence->id)->first();
                        if ($advance) {
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
                                        $evidence_financial = EvidenceFinancial::where('activity_source_id', $activity_source["id"])
                                            ->where('evidence_id', $advance["id"])->first();
                                        if ($evidence_financial) {
                                            FacadesDB::beginTransaction();
                                            $response_info["message"] = "El recurso asociado a avance se eliminó correctamente";
                                            $evidence_financial->delete();
                                            $errors = false;
                                            FacadesDB::commit();
                                        } else {
                                            $response_info["message"] = "El recurso asociado al avance no existe";
                                        }
                                    } else {
                                        $response_info["errors"] = ["No existe la relación de actividades y la fuente de financiacion ingresada"];
                                    }
                                } else {
                                    $response_info["errors"] = ["No existe ningún plan financiero asociado a esta la fuente de financiacion"];
                                }
                            } else {
                                $response_info["errors"] = ["La fuente de financación con financial_source_code" . $request->financial_source_code . " no existe."];
                            }
                        } else {
                            $response_info["errors"] = ["El avance con codigo advance_code " . $request->advance_code . " no existe para la evidencia."];
                        }
                    } else {
                        $response_info["errors"] = ["La evidencia con codigo evidence_code " . $request->evidence_code . " no existe para la actividad en el año ingresado."];
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
     * antes de pasar a la funcion principal de
     * creacion, obtencion y eliminacion de recursos 
     * asociados a un avance
     */
    private function validateAdvanceSourceRequest($request)
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
                    'evidence_code' => 'required|numeric',
                    'advance_code' => 'required|numeric',
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
                    'evidence_code.required' => ':attribute es un campo requerido.',
                    'evidence_code.numeric' => ':attribute debe ser un numero.',
                    'advance_code.required' => ':attribute es un campo requerido.',
                    'advance_code.numeric' => ':attribute debe ser un numero.',
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
                    'pai_code' => 'Codigo interno del pai',
                    'strategic_line_code' => 'Codigo Interno de la línea estratégica',
                    'program_code' => 'Codigo Interno del programa',
                    'project_code' => 'Codigo Interno del proyecto',
                    'objective_code' => 'Codigo Interno del objetivo',
                    'activity_code' => 'Codigo Interno de la actividad',
                    'evidence_code' => 'Codigo Interno de la evidencia',
                    'advance_code' => 'Codigo Interno del avance',
                    'financial_source_code' => 'Codigo Interno del indicador',
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
                    'evidence_code' => 'required|numeric',
                    'advance_code' => 'required|numeric',
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
                    'evidence_code.required' => ':attribute es un campo requerido.',
                    'evidence_code.numeric' => ':attribute debe ser un numero.',
                    'advance_code.required' => ':attribute es un campo requerido.',
                    'advance_code.numeric' => ':attribute debe ser un numero.',
                    'financial_source_code.required' => ':attribute es un campo requerido.',
                    'financial_source_code.numeric' => ':attribute debe ser un numero.',
                    'year.required' => ':attribute es un campo requerido.',
                    'year.numeric' => ':attribute debe ser un numero.',
                    'year.min' => ':attribute debe ser mayor o igual a 1',
                    'year.max' => ':attribute debe ser menor o igual a 4',
                ];
                $attributes = [
                    'pai_code' => 'Codigo interno del pai',
                    'strategic_line_code' => 'Codigo Interno de la línea estratégica',
                    'program_code' => 'Codigo Interno del programa',
                    'project_code' => 'Codigo Interno del proyecto',
                    'objective_code' => 'Codigo Interno del objetivo',
                    'activity_code' => 'Codigo Interno de la actividad',
                    'evidence_code' => 'Codigo Interno de la evidencia',
                    'advance_code' => 'Codigo Interno del avance',
                    'financial_source_code' => 'Codigo Interno del indicador',
                    'year' => 'Año',
                ];
                break;
        }
        return Validator::make($request->all(), $rules, $messages, $attributes);
    }
}
