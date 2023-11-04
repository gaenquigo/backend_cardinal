<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Models\EvidenceAdvance;
use App\Models\Indicator_activity;
use App\Models\Variable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;
use stdClass;
use Validator;

/**
 * Class 
 * @package App\Http\Controllers
 */
class IndicatorsLagsController extends UtilsController
{
    /**
     * Valida y obtiene los indicadores 
     * asociados a un rezago
     */
    public function index(Request $request)
    {
        try {
            $validator = $this->validateIndicatorLagRequest($request);
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $responseValidation = UtilsController::checkStructure($request, "activity", true);
                if (!$responseValidation["errors"]) {
                    $activity = $responseValidation["data"];
                    $evidence = EvidenceAdvance::where('activity_id',  $activity["id"])
                        ->where('external_code', "R-" . $request->lag_code . "-" . $activity->activity_code)
                        ->where('year', $request["year"])->first();
                    if ($evidence) {
                        $indicator_activities = Indicator_activity::where('activities_id', $activity->id)
                            ->where('evidence_id', $evidence->id)
                            ->where('year', $request["year"])->get();
                        if (sizeOf($indicator_activities) > 0) {
                            $response_info = $indicator_activities;
                            $errors = false;
                        } else {
                            $response_info->errors = ["No existe ningún registro de indicadores asociados a este rezago"];
                        }
                    } else {
                        $response_info->errors = ["El rezago con código lag_code " . $request->lag_code . " ya existe para la actividad."];
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
     * Valida y asocie los indicadores 
     * asociados a un rezago
     */
    public function store(Request $request)
    {
        try {
            $validator = $this->validateIndicatorLagRequest($request);
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $responseValidation = UtilsController::checkStructure($request, "activity", true);
                if (!$responseValidation["errors"]) {
                    $activity = $responseValidation["data"];
                    $evidence = EvidenceAdvance::where('activity_id',  $activity["id"])
                        ->where('external_code', "R-" . $request->lag_code . "-" . $activity->activity_code)
                        ->where('rezago', true)
                        ->where('year', $request["year"])->first();
                    if ($evidence) {
                        $indicator = UtilsController::getIndicator($request);
                        $indicators_activityFather = Indicator_activity::where('year', $request["year"])->where('activities_id', $activity->id)->first();
                        if ($indicator && $indicator != null && ($indicators_activityFather && $indicators_activityFather->indicator_id == $indicator->id)) {
                            $variable = Variable::where('indicator_id', $indicator->id)->first();
                            $indicators_activity = Indicator_activity::where('year', $request["year"])
                                ->where('activities_id', $activity->id)
                                ->where('evidence_id', $evidence->id)->first();
                            FacadesDB::beginTransaction();
                            if ($indicators_activity) {
                                $indicators_activity->numerator = $variable->numerator_in == 28 ?  $request->numerator_value : $indicators_activity->numerator;
                                $indicators_activity->denominator = $variable->denominator_in == 28 ?  $request->denominator_value : $indicators_activity->denominator;
                                $indicators_activity->evidence_id = $evidence->id;
                                $indicators_activity->save();
                            } else {
                                $array1 = [
                                    "numerator" =>  $variable->numerator_in == 28 ? $request->numerator_value : null,
                                    "denominator" => $variable->denominator_in == 28 ? $request->denominator_value : null,
                                    "year" => $request["year"],
                                    "variable_id" => $variable->id,
                                    "variable_in" => 28,
                                    "indicator_id" => $indicator->id,
                                    "activities_id" => $activity->id,
                                    'evidence_id' => $evidence->id,
                                ];
                                Indicator_activity::create($array1);
                            }
                            FacadesDB::commit();
                            $response_info->message = "Indicador actualizado correctamente";
                            $errors = false;
                        } else {
                            $response_info->errors = ["No existe un indicador con este código  o no corresponde con el código  de la actividad "];
                        }
                    } else {
                        $response_info->errors = ["El rezago con código  lag_code " . $request->lag_code . " no existe para la actividad en el año ingresado."];
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
     * Valida y desasocia los indicadores 
     * asociados a un rezago
     */
    public function destroy(Request $request)
    {
        try {
            $validator = $this->validateIndicatorLagRequest($request);
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $responseValidation = UtilsController::checkStructure($request, "activity", true);
                if (!$responseValidation["errors"]) {
                    $activity = $responseValidation["data"];
                    $evidence = EvidenceAdvance::where('activity_id',  $activity["id"])
                        ->where('external_code', "R-" . $request->lag_code . "-" . $activity->activity_code)
                        ->where('year', $request["year"])->first();
                    if ($evidence) {
                        FacadesDB::beginTransaction();
                        Indicator_activity::where('activities_id', $activity->id)
                            ->where('evidence_id', $evidence->id)->delete();
                        $response_info->message = "Indicadores asociados al rezagos eliminados";
                        $errors = false;
                        FacadesDB::commit();
                    } else {
                        $response_info->errors = ["No existe un indicador con este código  "];
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
     * antes de pasar a la funcion principal para aspciar, 
     * desasociar y obtener los indicadores a un rezago
     */
    private function validateIndicatorLagRequest($request)
    {
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
                    'year' => 'required|numeric|min:1|max:4',
                    'indicator_code' => 'nullable|numeric',
                    'numerator_value' => 'nullable|numeric',
                    'denominator_value' => 'nullable|numeric|min:1',
                    'default_indicator' => 'nullable|numeric|min:1|max:8'
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
                    'year.required' => ':attribute es un campo requerido.',
                    'year.numeric' => ':attribute debe ser un numero.',
                    'year.min' => ':attribute debe ser mayor o igual a 1',
                    'year.max' => ':attribute debe ser menor o igual a 4',
                    'indicator_code.required' => ':attribute es un campo requerido.',
                    'indicator_code.numeric' => ':attribute debe ser un numero.',
                    'numerator_value.required' => ':attribute es un campo requerido.',
                    'denominator_value.numeric' => ':attribute debe ser un numero.',
                    'denominator_value.min' => ':attribute debe ser mínimo 1.',
                    'default_indicator.min' => ':attribute debe ser mínimo 1.',
                    'default_indicator.max' => ':attribute debe ser máximo 8.',
                ];
                $attributes = [
                    'pai_code' => 'Código interno del PAI',
                    'strategic_line_code' => 'Código Interno de la línea estratégica',
                    'program_code' => 'Código Interno del programa',
                    'project_code' => 'Código Interno del proyecto',
                    'objective_code' => 'Código Interno del objetivo',
                    'activity_code' => 'Código Interno de la actividad',
                    'lag_code' => 'Código Interno de la evidencia',
                    'year' => 'Año',
                    'indicator_code' => 'Código Interno del indicador',
                    'numerator_value' => 'Valor del numerador de la meta 1',
                    'denominator_value' => 'Valor del denominador de la meta 1',
                    'default_indicator' => 'Indicador predeterminado',
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
                    'lag_code.required' => ':attribute es un campo requerido.',
                    'lag_code.numeric' => ':attribute debe ser un numero.',
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
                    'lag_code' => 'Código Interno de la evidencia',
                    'year' => 'Año',
                    'lag_code' => 'Código Interno de la evidencia'
                ];
                break;
        }
        return Validator::make($request->all(), $rules, $messages, $attributes);
    }
}
