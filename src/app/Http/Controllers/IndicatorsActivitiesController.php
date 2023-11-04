<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Models\Indicator_activity;
use App\Models\Variable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;
use stdClass;
use Validator;

/**
 * Class IndicatorsActivitiesController
 * @package App\Http\Controllers
 */
class IndicatorsActivitiesController extends UtilsController
{
    /**
     * Valida y obtiene los indicadores 
     * asociados a una actividad
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
                    $indicator_activities = Indicator_activity::where('activities_id', $activity->id)->get();
                    if (sizeOf($indicator_activities) > 0) {
                        $response_info = $indicator_activities;
                        $errors = false;
                    } else {
                        $response_info->errors = ["No existe ningún registro de indicadores asociados a esa actividad"];
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
     * asociados a una actividad
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
                $responseValidation = UtilsController::checkStructure($request, "activity");
                if (!$responseValidation["errors"]) {
                    $activity = $responseValidation["data"];
                    $indicator = UtilsController::getIndicator($request);
                    if ($indicator && $indicator != null) {
                        FacadesDB::beginTransaction();
                        $variable = Variable::where('indicator_id', $indicator->id)->first();
                        $indicators_activity1 = Indicator_activity::where('year', 1)->where('activities_id', $activity->id)->first();
                        $indicators_activity2 = Indicator_activity::where('year', 2)->where('activities_id', $activity->id)->first();
                        $indicators_activity3 = Indicator_activity::where('year', 3)->where('activities_id', $activity->id)->first();
                        $indicators_activity4 = Indicator_activity::where('year', 4)->where('activities_id', $activity->id)->first();
                        if ($activity->goal_1 > 0) {
                            if ($indicators_activity1) {
                                $indicators_activity1->numerator = $variable->numerator_in == 27 ? $request->numerator_value_1 : null;
                                $indicators_activity1->denominator = $variable->denominator_in == 27 ? $request->denominator_value_1 : null;
                                $indicators_activity1->indicator_id = $indicator->id;
                                $indicators_activity1->save();
                            } else {
                                $array1 = [
                                    "numerator" =>  $variable->numerator_in == 27 ? $request->numerator_value_1 : null,
                                    "denominator" => $variable->denominator_in == 27 ? $request->denominator_value_1 : null,
                                    "year" => 1,
                                    "variable_id" => $variable->id,
                                    "variable_in" => 27,
                                    "indicator_id" => $indicator->id,
                                    "activities_id" => $activity->id,
                                ];
                                Indicator_activity::create($array1);
                            }
                        }
                        if ($activity->goal_2 > 0) {
                            if ($indicators_activity2) {
                                $indicators_activity2->numerator = $variable->numerator_in == 27 ? $request->numerator_value_2 : null;
                                $indicators_activity2->denominator = $variable->denominator_in == 27 ?  $request->denominator_value_2 : null;
                                $indicators_activity2->indicator_id = $indicator->id;
                                $indicators_activity2->save();
                            } else {
                                $array2 = [
                                    "numerator" =>  $variable->numerator_in == 27 ? $request->numerator_value_2 : null,
                                    "denominator" =>  $variable->denominator_in == 27 ? $request->denominator_value_2 : null,
                                    "year" => 2,
                                    "variable_id" => $variable->id,
                                    "variable_in" => 27,
                                    "indicator_id" => $indicator->id,
                                    "activities_id" => $activity->id,
                                ];
                                Indicator_activity::create($array2);
                            }
                        }
                        if ($activity->goal_3 > 0) {
                            if ($indicators_activity3) {
                                $indicators_activity3->numerator = $variable->numerator_in == 27 ? $request->numerator_value_3 : null;
                                $indicators_activity3->denominator = $variable->denominator_in == 27 ? $request->denominator_value_3 : null;
                                $indicators_activity3->indicator_id = $indicator->id;
                                $indicators_activity3->save();
                            } else {
                                $array3 = [
                                    "numerator" =>  $variable->numerator_in == 27 ? $request->numerator_value_3 : null,
                                    "denominator" =>  $variable->denominator_in == 27 ? $request->denominator_value_3 : null,
                                    "year" => 3,
                                    "variable_id" => $variable->id,
                                    "variable_in" => 27,
                                    "indicator_id" => $indicator->id,
                                    "activities_id" => $activity->id,
                                ];
                                Indicator_activity::create($array3);
                            }
                        }
                        if ($activity->goal_4 > 0) {
                            if ($indicators_activity4) {
                                $indicators_activity4->numerator = $variable->numerator_in == 27 ? $request->numerator_value_4 : null;
                                $indicators_activity4->denominator = $variable->denominator_in == 27 ? $request->denominator_value_4 : null;
                                $indicators_activity4->indicator_id = $indicator->id;
                                $indicators_activity4->save();
                            } else {
                                $array4 = [
                                    "numerator" =>  $variable->numerator_in == 27 ? $request->numerator_value_4 : null,
                                    "denominator" =>  $variable->denominator_in == 27 ? $request->denominator_value_4 : null,
                                    "year" => 4,
                                    "variable_id" => $variable->id,
                                    "variable_in" => 27,
                                    "indicator_id" => $indicator->id,
                                    "activities_id" => $activity->id,
                                ];
                                Indicator_activity::create($array4);
                            }
                        }
                        $activity->indicator_id = $indicator->id;
                        $activity->variable_id = $variable->id;
                        $activity->save();
                        $response_info->message = "Indicador actualizado correctamente";
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
     * Valida y desasocia los indicadores 
     * asociados a una actividad
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
                $responseValidation = UtilsController::checkStructure($request, "activity");
                if (!$responseValidation["errors"]) {
                    FacadesDB::beginTransaction();
                    $activity = $responseValidation["data"];
                    Indicator_activity::where('activities_id', $activity->id)->delete();
                    $activity->indicator_id = null;
                    $activity->variable_id = null;
                    $activity->save();
                    $response_info->message = "Indicador asociado a la actividad eliminado";
                    $errors = false;
                    FacadesDB::commit();
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
     * desasociar y obtener los indicadores a una actividad
     */
    private function validateIndicatorsActivitiesRequest($request)
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
                    'indicator_code' => 'nullable|numeric',
                    'numerator_value_1' => 'nullable|numeric',
                    'denominator_value_1' => 'nullable|numeric|min:1',
                    'numerator_value_2' => 'nullable|numeric',
                    'denominator_value_2' => 'nullable|numeric|min:1',
                    'numerator_value_3' => 'nullable|numeric',
                    'denominator_value_3' => 'nullable|numeric|min:1',
                    'numerator_value_4' => 'nullable|numeric',
                    'denominator_value_4' => 'nullable|numeric|min:1',
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
                    'indicator_code.required' => ':attribute es un campo requerido.',
                    'indicator_code.numeric' => ':attribute debe ser un numero.',
                    'numerator_value_1.required' => ':attribute es un campo requerido.',
                    'denominator_value_1.numeric' => ':attribute debe ser un numero.',
                    'denominator_value_1.min' => ':attribute debe ser mínimo 1.',
                    'numerator_value_2.required' => ':attribute es un campo requerido.',
                    'denominator_value_2.numeric' => ':attribute debe ser un numero.',
                    'denominator_value_2.min' => ':attribute debe ser mínimo 1.',
                    'numerator_value_3.required' => ':attribute es un campo requerido.',
                    'denominator_value_3.numeric' => ':attribute debe ser un numero.',
                    'denominator_value_3.min' => ':attribute debe ser mínimo 1.',
                    'numerator_value_4.required' => ':attribute es un campo requerido.',
                    'denominator_value_4.numeric' => ':attribute debe ser un numero.',
                    'denominator_value_4.min' => ':attribute debe ser mínimo 1.',
                    'default_indicator.numeric' => ':attribute debe ser un numero.',
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
                    'indicator_code' => 'Código Interno del indicador',
                    'numerator_value_1' => 'Valor del numerador de la meta 1',
                    'denominator_value_1' => 'Valor del denominador de la meta 1',
                    'numerator_value_2' => 'Valor del numerador de la meta 2',
                    'denominator_value_2' => 'Valor del denominador de la meta 2',
                    'numerator_value_3' => 'Valor del numerador de la meta 3',
                    'denominator_value_3' => 'Valor del denominador de la meta 3',
                    'numerator_value_4' => 'Valor del numerador de la meta 4',
                    'denominator_value_4' => 'Valor del denominador de la meta 4',
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
                    'activity_code' => 'required|numeric'
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
                    'activity_code.numeric' => ':attribute debe ser un numero.'
                ];
                $attributes = [
                    'pai_code' => 'Código interno del PAI',
                    'strategic_line_code' => 'Código Interno de la línea estratégica',
                    'program_code' => 'Código Interno del programa',
                    'project_code' => 'Código Interno del proyecto',
                    'objective_code' => 'Código Interno del objetivo',
                    'activity_code' => 'Código Interno de la actividad'
                ];
                break;
        }
        return Validator::make($request->all(), $rules, $messages, $attributes);
    }
}
