<?php

namespace App\Http\Controllers;

use App\Models\ActivitySource;
use App\Helpers\ApiResponse;
use App\Models\Financial_Plan;
use App\Models\Financing_Source;
use App\Models\Fundraising;
use App\Models\PAI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;
use stdClass;
use Tymon\JWTAuth\Facades\JWTAuth;
use Validator;

/**
 * Class FinancialPlanController
 * @package App\Http\Controllers
 */
class FinancialPlanController extends UtilsController
{
    /**
     * Obtener los detalles de un plan financiero
     * por su codigo
     */
    public function show(Request $request)
    {
        try {
            $validator = $this->validateFinancialPlanRequest($request);
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $group_id = JWTAuth::toUser($request->token)["group_id"];
                $pai = PAI::where('pai_code', $request->pai_code)->where('group_id', $group_id)->first();
                $financing_source = Financing_Source::where('code', $request->financial_source_code)
                    ->where('group_id', $group_id)->first();
                if ($financing_source && $pai) {
                    $financial_plan = Financial_Plan::where('financial_plan_code', $request->financial_plan_code . "-" . $request->year)
                        ->where('year', $request->year)
                        ->where('source_id', $financing_source->id)
                        ->where('p_a_i_id', $pai->id)
                        ->first();
                    if ($financial_plan) {
                        $response_info =  $financial_plan;
                        $errors = false;
                    } else {
                        $response_info->errors = ["El plan financiero con code " . $request->financial_plan_code . " para el año ingresado no existe."];
                    }
                } else {
                    $response_info->errors = ["No existe ni el recurso financiero ni el PAI"];
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
     * Valida y crea un plan financiero
     */
    public function store(Request $request)
    {
        try {
            $validator = $this->validateFinancialPlanRequest($request);
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $group_id = JWTAuth::toUser($request->token)["group_id"];
                $pai = PAI::where('pai_code', $request->pai_code)
                    ->where('group_id', $group_id)->where('approved', false)->first();
                $financing_source = Financing_Source::where('code', $request->financial_source_code)
                    ->where('final_level', true)->where('group_id', $group_id)->first();
                if ($financing_source && $pai) {
                    $sum = $request->investment_percentage + $request->functioning_percentage
                        + $request->debt_service_percentage + $request->fund_percentage;
                    if ($sum != 100) {
                        $response_info->errors = ["La sumatoria de las ponderaciones de los porcentajes debe ser 100"];
                    } else {
                        $financial_plan = Financial_Plan::where('year', $request->year)
                            ->where('source_id', $financing_source->id)
                            ->where('p_a_i_id', $pai->id)
                            ->first();
                        FacadesDB::beginTransaction();
                        if ($financial_plan) {
                            $financial_plan->value = $request->value;
                            $financial_plan->investment_percentage = $request->investment_percentage;
                            $financial_plan->investment = ($request->value * $request->investment_percentage) / (100);
                            $financial_plan->investment_balance = ($request->value * $request->investment_percentage) / (100);
                            $financial_plan->functioning_percentage = $request->functioning_percentage;
                            $financial_plan->functioning = ($request->value * $request->functioning_percentage) / (100);
                            $financial_plan->functioning_balance = ($request->value * $request->functioning_percentage) / (100);
                            $financial_plan->debt_service_percentage = $request->debt_service_percentage;
                            $financial_plan->debt_service = ($request->value * $request->debt_service_percentage) / (100);
                            $financial_plan->debt_service_balance = ($request->value * $request->debt_service_percentage) / (100);
                            $financial_plan->fund_percentage = $request->fund_percentage;
                            $financial_plan->fund = ($request->value * $request->fund_percentage) / (100);
                            $financial_plan->fund_balance = ($request->value * $request->fund_percentage) / (100);
                            $financial_plan->save();
                            $errors = false;
                            $response_info->message = "Se actualizó el plan financiero " . $financial_plan->financial_plan_code . " correctamente";
                        } else {
                            $arrayFinancialPlan = [
                                'p_a_i_id' => $pai->id,
                                'source_id' => $financing_source->id,
                                'value' => $request->value,
                                'investment_percentage' => $request->investment_percentage,
                                'investment' => ($request->value * $request->investment_percentage) / (100),
                                'investment_balance' => ($request->value * $request->investment_percentage) / (100),
                                'functioning_percentage' => $request->functioning_percentage,
                                'functioning' => ($request->value * $request->functioning_percentage) / (100),
                                'functioning_balance' => ($request->value * $request->functioning_percentage) / (100),
                                'debt_service_percentage' => $request->debt_service_percentage,
                                'debt_service' => ($request->value * $request->debt_service_percentage) / (100),
                                'debt_service_balance' => ($request->value * $request->debt_service_percentage) / (100),
                                'fund_percentage' => $request->fund_percentage,
                                'fund' => ($request->value * $request->fund_percentage) / (100),
                                'fund_balance' => ($request->value * $request->fund_percentage) / (100),
                                'year' => $request->year,
                                'financial_plan_code' => $request->financial_plan_code . "-" . $request->year,
                            ];
                            $errors = false;
                            $financial_plan = Financial_Plan::create($arrayFinancialPlan);
                            $response_info->message = "Se creó el plan financiero " . $financial_plan->financial_plan_code . " correctamente";
                        }
                    }
                    FacadesDB::commit();
                } else {
                    $response_info->errors = ["El PAI con code " .
                        $request->pai_code . " no existe o esta aprobado o la fuente de financiación con code " .
                        $request->financial_source_code . " no existe o no es de último nivel."];
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
     * Valida y actualizar un plan financiero
     */
    public function update(Request $request)
    {
        try {
            $validator = $this->validateFinancialPlanRequest($request);
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $group_id = JWTAuth::toUser($request->token)["group_id"];
                $pai = PAI::where('pai_code', $request->pai_code)
                    ->where('group_id', $group_id)->where('approved', false)->first();
                $group_id = JWTAuth::toUser($request->token)["group_id"];
                $financing_source = Financing_Source::where('code', $request->financial_source_code)
                    ->where('group_id', $group_id)->first();
                if ($financing_source && $pai) {
                    $financial_plan = Financial_Plan::where('financial_plan_code', $request->financial_plan_code . "-" . $request->year)
                        ->where('year', $request->year)
                        ->where('source_id', $financing_source->id)
                        ->where('p_a_i_id', $pai->id)
                        ->first();
                    FacadesDB::beginTransaction();
                    if ($financial_plan) {
                        $sum = $request->investment_percentage + $request->functioning_percentage
                            + $request->debt_service_percentage + $request->fund_percentage;
                        if ($sum != 100) {
                            $response_info->message = Controller::$str_struct_err;
                            $response_info->errors = ["La sumatoria de las ponderaciones de los porcentajes debe ser 100"];
                        } else {
                            $financial_plan->value = $request->value;
                            $financial_plan->investment_percentage = $request->investment_percentage;
                            $financial_plan->investment = ($request->value * $request->investment_percentage) / (100);
                            $financial_plan->investment_balance = ($request->value * $request->investment_percentage) / (100);
                            $financial_plan->functioning_percentage = $request->functioning_percentage;
                            $financial_plan->functioning = ($request->value * $request->functioning_percentage) / (100);
                            $financial_plan->functioning_balance = ($request->value * $request->functioning_percentage) / (100);
                            $financial_plan->debt_service_percentage = $request->debt_service_percentage;
                            $financial_plan->debt_service = ($request->value * $request->debt_service_percentage) / (100);
                            $financial_plan->debt_service_balance = ($request->value * $request->debt_service_percentage) / (100);
                            $financial_plan->fund_percentage = $request->fund_percentage;
                            $financial_plan->fund = ($request->value * $request->fund_percentage) / (100);
                            $financial_plan->fund_balance = ($request->value * $request->fund_percentage) / (100);
                            $financial_plan->save();
                            $errors = false;
                            $response_info->message = "Se actualizó el plan financiero " . $financial_plan->financial_plan_code . " correctamente";
                        }
                    } else {
                        $response_info->errors = ["El plan financiero con code " . $request->financial_plan_code . " para el año ingresado no existe."];
                    }
                    FacadesDB::commit();
                } else {
                    $response_info->errors = ["El PAI con code " .
                        $request->pai_code . " no existe o no esta aprobado o la fuente de financiación con code " .
                        $request->financial_source_code . " no existe o no es de último nivel."];
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
     * Valida y elimina un plan financiero
     */
    public function destroy(Request $request)
    {
        try {
            $validator = $this->validateFinancialPlanRequest($request);
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $group_id = JWTAuth::toUser($request->token)["group_id"];
                $pai = PAI::where('pai_code', $request->pai_code)
                    ->where('group_id', $group_id)->where('approved', false)->first();
                $financing_source = Financing_Source::where('code', $request->financial_source_code)->where('group_id', $group_id)->first();

                if ($financing_source && $pai) {
                    $financial_plan = Financial_Plan::where('financial_plan_code', $request->financial_plan_code . "-" . $request->year)
                        ->where('year', $request->year)
                        ->where('source_id', $financing_source->id)
                        ->where('p_a_i_id', $pai->id)
                        ->first();
                    if ($financial_plan) {
                        $activity_sources = ActivitySource::where('source_id', $financial_plan->id)->count();
                        $fundraisings = Fundraising::where('financial_plans_id', $financial_plan->id)->count();
                        if ($activity_sources == 0 && $fundraisings == 0) {
                            FacadesDB::beginTransaction();
                            $financial_plan->delete();
                            $response_info->message = "Plan financiero eliminado";
                            $errors = false;
                            FacadesDB::commit();
                        } else {
                            $response_info->errors = ["No se puede eliminar un plan financiero con recursos de actividades ni recaudaciones de fondos activos"];
                        }
                    } else {
                        $response_info->errors = ["El plan financiero con code " . $request->financial_plan_code . " para el año ingresado no existe."];
                    }
                } else {
                    $response_info->errors = ["El PAI con code " .
                        $request->pai_code . " no existe o no esta aprobado o la fuente de financiación con code " .
                        $request->financial_source_code . " no existe o no es de último nivel."];
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
     * antes de pasar a la funcion principal para crear, actualizar, 
     * obtener y eliminar un plan financiero
     */
    private function validateFinancialPlanRequest($request)
    {
        switch ($request->method()) {
            case "PUT":
            case "POST":
                $rules = [
                    'pai_code' => 'required|numeric',
                    'financial_plan_code' => 'required|numeric',
                    'financial_source_code' => 'required',
                    'value' => 'required|numeric|min:1000',
                    'investment_percentage' => 'required|numeric|min:0||max:100',
                    'functioning_percentage' => 'required|numeric|min:0||max:100',
                    'debt_service_percentage' => 'required|numeric|min:0||max:100',
                    'fund_percentage' => 'required|numeric|min:0||max:100',
                    'year' => 'required|numeric|min:1|max:4',
                ];
                $messages = [
                    'pai_code.required' => ':attribute es requerido.',
                    'pai_code.numeric' => ':attribute debe ser un numero.',
                    'financial_plan_code.required' => ':attribute es un campo requerido.',
                    'financial_plan_code.numeric' => ':attribute debe ser un numero.',
                    'financial_source_code.required' => ':attribute es un campo requerido.',
                    'value.required' => ':attribute es un campo requerido.',
                    'value.numeric' => ':attribute debe ser un numero.',
                    'value.min' => ':attribute debe ser mayor o igual a un millon',
                    'investment_percentage.required' => ':attribute es un campo requerido.',
                    'investment_percentage.numeric' => ':attribute debe ser un numero.',
                    'investment_percentage.min' => ':attribute debe ser mayor o igual a 1',
                    'investment_percentage.max' => ':attribute debe ser menor o igual a 100',
                    'functioning_percentage.required' => ':attribute es un campo requerido.',
                    'functioning_percentage.numeric' => ':attribute debe ser un numero.',
                    'functioning_percentage.min' => ':attribute debe ser mayor o igual a 1',
                    'functioning_percentage.max' => ':attribute debe ser menor o igual a 100',
                    'debt_service_percentage.required' => ':attribute es un campo requerido.',
                    'debt_service_percentage.numeric' => ':attribute debe ser un numero.',
                    'debt_service_percentage.min' => ':attribute debe ser mayor o igual a 1',
                    'debt_service_percentage.max' => ':attribute debe ser menor o igual a 100',
                    'fund_percentage.required' => ':attribute es un campo requerido.',
                    'fund_percentage.numeric' => ':attribute debe ser un numero.',
                    'fund_percentage.min' => ':attribute debe ser mayor o igual a 1',
                    'fund_percentage.max' => ':attribute debe ser menor o igual a 100',
                    'year.required' => ':attribute es un campo requerido.',
                    'year.numeric' => ':attribute debe ser un numero.',
                    'year.min' => ':attribute debe ser mayor o igual a 1',
                    'year.max' => ':attribute debe ser menor o igual a 4',
                ];
                $attributes = [
                    'pai_code' => 'Código interno del PAI',
                    'financial_plan_code' => 'Código Interno del plan financiero',
                    'financial_source_code' => 'Código de la fuente de financiación',
                    'value' => 'Valor',
                    'investment_percentage' => 'Porcentaje de inversión',
                    'functioning_percentage' => 'Porcentaje de funcionamiento',
                    'debt_service_percentage' => 'Porcentaje de compensacion',
                    'fund_percentage' => 'Porcentaje de servicio a la deuda',
                    'year' => 'Año',
                ];
                break;
            case "GET":
            case "DELETE":
                $rules = [
                    'pai_code' => 'required|numeric',
                    'financial_plan_code' => 'required|numeric',
                    'financial_source_code' => 'required',
                    'year' => 'required|numeric|min:1|max:4',
                ];
                $messages = [
                    'pai_code.required' => ':attribute es requerido.',
                    'pai_code.numeric' => ':attribute debe ser un numero.',
                    'financial_plan_code.required' => ':attribute es un campo requerido.',
                    'financial_plan_code.numeric' => ':attribute debe ser un numero.',
                    'financial_source_code.required' => ':attribute es un campo requerido.',
                    'year.required' => ':attribute es un campo requerido.',
                    'year.numeric' => ':attribute debe ser un numero.',
                    'year.weighing.min' => ':attribute debe ser mayor o igual a 1',
                    'year.weighing.max' => ':attribute debe ser menor o igual a 4',
                ];
                $attributes = [
                    'pai_code' => 'Código interno del PAI',
                    'financial_plan_code' => 'Código Interno del plan financiero',
                    'financial_source_code' => 'Código de la fuente de financiación',
                    'year' => 'Año',
                ];
                break;
        }
        return Validator::make($request->all(), $rules, $messages, $attributes);
    }
}
