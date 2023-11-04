<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Models\Financial_Plan;
use App\Models\Financing_Source;
use App\Models\Fundraising;
use App\Models\Implementation;
use App\Models\PAI;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\DB as FacadesDB;
use stdClass;
use Validator;

/**
 * Class FundraisingsController
 * @package App\Http\Controllers
 */
class FundraisingsController extends UtilsController
{
    /**
     * Valida y obtiene un ingreso de un PAI
     */
    public function show(Request $request)
    {
        try {
            $validator = $this->validateFundraisingRequest($request);
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $group_id = JWTAuth::toUser($request->token)["group_id"];
                $pai = PAI::where('pai_code', $request->pai_code)
                    ->where('approved', true)->where('group_id', $group_id)->first();
                $financing_source = Financing_Source::where('code', $request->financial_source_code)
                    ->where('group_id', $group_id)->first();
                if ($financing_source && $pai) {
                    $financial_plan = Financial_Plan::where('financial_plan_code', $request->financial_plan_code . "-" . $request->year)
                        ->where('year', $request->year)
                        ->where('source_id', $financing_source->id)
                        ->where('p_a_i_id', $pai->id)
                        ->first();
                    if ($financial_plan) {
                        $fundraisings = Fundraising::where('financial_plans_id', $financial_plan->id)->get();
                        $response_info->message = "El ingreso se encontró correctamente";
                        $response_info->fundraising = $fundraisings;
                        $errors = false;
                    } else {
                        $response_info->errors = ["El plan financiero con code " . $request->financial_plan_code . " para el año ingresado no existe."];
                    }
                } else {
                    $response_info->errors = ["No existe el recurso financiero o el PAI no esta aprobado o no existe"];
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
     * Valida y crea un ingreso a un PAI
     */
    public function store(Request $request)
    {
        try {
            $validator = $this->validateFundraisingRequest($request);
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $group_id = JWTAuth::toUser($request->token)["group_id"];
                $pai = PAI::where('pai_code', $request->pai_code)
                    ->where('approved', true)->where('group_id', $group_id)->first();
                $financing_source = Financing_Source::where('code', $request->financial_source_code)
                    ->where('group_id', $group_id)->first();
                if ($financing_source && $pai) {
                    $financial_plan = Financial_Plan::where('financial_plan_code', $request->financial_plan_code . "-" . $request->year)
                        ->where('year', $request->year)
                        ->where('source_id', $financing_source->id)
                        ->where('p_a_i_id', $pai->id)
                        ->first();
                    if ($financial_plan) {
                        $implementations = Implementation::where('p_a_i_s_id', $pai->id)->get();
                        $fundraisings = [];
                        $fundraisingValue = 0;
                        foreach ($implementations as $implementation) {
                            $existingFundraisings = Fundraising::where('financial_plans_id', $financial_plan->id)
                                ->where('implementation_id', $implementation->id)->first();
                            if ($existingFundraisings) {
                                array_push($fundraisings, $existingFundraisings);
                            }
                        }
                        foreach ($fundraisings as $fundraising) {
                            $fundraisingValue += $fundraising["value"];
                        }
                        $expensesController = new ExpensesController;
                        if ($expensesController->checkYearDate($request["year"], $pai, $request["date"])) {
                            FacadesDB::beginTransaction();
                            $arrayImplementation = [
                                'p_a_i_s_id' => $pai->id,
                            ];
                            $implementation_created = Implementation::create($arrayImplementation);
                            $arrayFundraising = [
                                'value' => $request["value"],
                                'date' => $request["date"],
                                'implementation_id' => $implementation_created["id"],
                                'financial_plans_id' => $financial_plan->id,
                            ];
                            Fundraising::create($arrayFundraising);
                            $response_info->message = ["Ingreso creado"];
                            $errors = false;
                            FacadesDB::commit();
                        } else {
                            $response_info->errors = ["La fecha no es adecuada"];
                        }
                    } else {
                        $response_info->errors = ["El plan financiero con code " . $request->financial_plan_code . " para el año ingresado no existe."];
                    }
                } else {
                    $response_info->errors = ["No existe el recurso financiero o el PAI no esta aprobado o no existe"];
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
     * antes de pasar a la funcion principal de crear y obtener
     * los ingresos registrados de un PAI
     */
    private function validateFundraisingRequest($request)
    {
        switch ($request->method()) {
            case "POST":
                $rules = [
                    'pai_code' => 'required|numeric',
                    'financial_plan_code' => 'required|numeric',
                    'financial_source_code' => 'required',
                    'value' => 'required|numeric|min:1000',
                    'date' => 'required|date',
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
                    'value.min' => ':attribute debe ser mayor o igual a mil',
                    'date.required' => ':attribute es un campo requerido.',
                    'date.date' => ':attribute debe ser una fecha valida',
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
                    'date' => 'Fecha',
                    'year' => 'Año',
                ];
                break;
            case "GET":
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
                    'year.min' => ':attribute debe ser mayor o igual a 1',
                    'year.max' => ':attribute debe ser menor o igual a 4',
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
