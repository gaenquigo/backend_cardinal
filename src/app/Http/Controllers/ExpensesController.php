<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Models\Cost_Source;
use App\Models\Financial_cost;
use App\Models\Financial_Plan;
use App\Models\PAI;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\DB as FacadesDB;
use stdClass;
use Validator;

/**
 * Class ExpensesController
 * @package App\Http\Controllers
 */
class ExpensesController extends UtilsController
{
    /**
     * Obtiene la informacion de un gasto
     */
    public function show(Request $request)
    {
        try {
            $validator = $this->validateExpensesRequest($request);
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $group_id = JWTAuth::toUser($request->token)["group_id"];
                $pai = PAI::where('pai_code', $request->pai_code)
                    ->where('approved', true)->where('group_id', $group_id)->first();
                if ($pai) {
                    $nature_to_evaluate = $this->getNature($request->nature);
                    $heading_to_evaluate = $this->getHeading($request->heading);
                    $costs = Financial_cost::where("p_a_i_id", $pai->id)
                        ->where($nature_to_evaluate, true)
                        ->where($heading_to_evaluate, true)
                        ->where("year", $request->year)->first();
                    $response_info = $costs;
                    $errors = false;
                } else {
                    $response_info->errors = ["El PAI no esta aprobado o no existe"];
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
     * Valida y crea un gasto
     */
    public function store(Request $request)
    {
        try {
            $validator = $this->validateExpensesRequest($request);
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $group_id = JWTAuth::toUser($request->token)["group_id"];
                $pai = PAI::where('pai_code', $request->pai_code)
                    ->where('approved', true)->where('group_id', $group_id)->first();
                $internal_nature = $this->natureList($request->nature)["value"];
                $nature_to_evaluate = $this->getNature($request->nature);
                $heading_to_evaluate = $this->getHeading($request->heading);
                $cost_source = Cost_Source::where('code', $request->cost_source_code)
                    ->where('group_id', $group_id)->where('final_level', true)
                    ->where($heading_to_evaluate, true)->first();
                if ($pai && $cost_source) {
                    if ($this->checkYearDate($request->year, $pai)) {
                        $financial_plans = Financial_Plan::select('financial_plans.*')
                            ->join('financing_sources', 'financial_plans.source_id', 'financing_sources.id')
                            ->where('financial_plans.p_a_i_id', $pai->id)->where('financial_plans.year', $request->year)
                            ->where('financing_sources.type_id', $internal_nature)
                            ->get();
                        if ($financial_plans) {
                            if (($request->value_bugeted > $request->value_comitted) &&
                                ($request->value_comitted > $request->value_required) &&
                                ($request->value_required > $request->value_paid)
                            ) {
                                $financial_costs = Financial_cost::where("p_a_i_id", $pai->id)
                                    ->where($heading_to_evaluate, true)
                                    ->where("year", $request->year)
                                    ->where("group_id", $group_id)
                                    ->where("cost_sources_id", '<>', $cost_source->id)->get();
                                $summatoryFinancialCost = 0;
                                foreach ($financial_costs as $financial_cost) {
                                    $summatoryFinancialCost += $financial_cost["value_bugeted"];
                                }
                                $summatoryBugeted = -$summatoryFinancialCost;
                                foreach ($financial_plans as $financial_plan) {
                                    $summatoryBugeted += $financial_plan[$heading_to_evaluate != 'compensation' ? $heading_to_evaluate : 'fund'];
                                }
                                if ($request->value_bugeted <= $summatoryBugeted) {
                                    $financial_costs_exist = Financial_cost::where("p_a_i_id", $pai->id)
                                        ->where($heading_to_evaluate, true)
                                        ->where("year", $request->year)
                                        ->where("group_id", $group_id)
                                        ->where("cost_sources_id", $cost_source->id)->first();
                                    FacadesDB::beginTransaction();
                                    if ($financial_costs_exist) {
                                        $financial_costs_exist->year = $request->year;
                                        $financial_costs_exist->value_bugeted = $request->value_bugeted;
                                        $financial_costs_exist->value_comitted = $request->value_comitted;
                                        $financial_costs_exist->value_required = $request->value_required;
                                        $financial_costs_exist->value_paid = $request->value_paid;
                                        $financial_costs_exist->cost_sources_id = $cost_source->id;
                                        $financial_costs_exist->own = $nature_to_evaluate == "own";
                                        $financial_costs_exist->nation = $nature_to_evaluate == "nation";
                                        $financial_costs_exist->royalties = $nature_to_evaluate == "royalties";
                                        $financial_costs_exist->funds = $nature_to_evaluate == "funds";
                                        $financial_costs_exist->functioning = $heading_to_evaluate == "functioning";
                                        $financial_costs_exist->compensation = $heading_to_evaluate == "compensation";
                                        $financial_costs_exist->debt_service = $heading_to_evaluate == "debt_service";
                                        $financial_costs_exist->p_a_i_id = $pai->id;
                                        $financial_costs_exist->group_id = $group_id;
                                        $financial_costs_exist->save();
                                        $response_info->message = "Se actualizó el gasto correctamente";
                                        $response_info->data = $financial_costs_exist;
                                        $errors = false;
                                    } else {
                                        $arrayFinancialCost = [
                                            'year' => $request->year,
                                            'value_bugeted' => $request->value_bugeted,
                                            'value_comitted' => $request->value_comitted,
                                            'value_required' => $request->value_required,
                                            'value_paid' => $request->value_paid,
                                            'cost_sources_id' => $cost_source->id,
                                            'own' => $nature_to_evaluate == "own",
                                            'nation' => $nature_to_evaluate == "nation",
                                            'royalties' => $nature_to_evaluate == "royalties",
                                            'funds' => $nature_to_evaluate == "funds",
                                            'functioning' => $heading_to_evaluate == "functioning",
                                            'compensation' => $heading_to_evaluate == "compensation",
                                            'debt_service' => $heading_to_evaluate == "debt_service",
                                            'p_a_i_id' => $pai->id,
                                            'group_id' => $group_id,
                                        ];
                                        $data = Financial_cost::create($arrayFinancialCost);
                                        $response_info->message = "Se creó el gasto correctamente";
                                        $response_info->data = $data;
                                        $errors = false;
                                    }
                                    FacadesDB::commit();
                                } else {
                                    $response_info->errors = ["El valor del presupuesto no puede superar al asignado para el rubro y naturaleza en el plan financiero"];
                                }
                            } else {
                                $response_info->errors = ["Recuerde que el valor presupuestado debe ser mayor al comprometido, el valor comprometido al requerido, y el valor requerido al valor pagado "];
                            }
                        } else {
                            $response_info->errors = ["No hay planes financieros asociados "];
                        }
                    } else {
                        $response_info->errors = ["La fecha no es adecuada"];
                    }
                } else {
                    $response_info->errors = ["El PAI no esta aprobado o no existe | o el costo no existe "];
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
     * Obtiene la naturaleza a evaluar
     */
    private function getNature($nature)
    {
        $nature_to_evaluate = "";
        switch ($nature) {
            case 1:
                $nature_to_evaluate = 'own';
                break;
            case 2:
                $nature_to_evaluate = 'nation';
                break;
            case 3:
                $nature_to_evaluate = 'royalties';
                break;
            case 4:
                $nature_to_evaluate = 'funds';
                break;
        }
        return $nature_to_evaluate;
    }
    /**
     * Obtiene los heading a evaluar
     */
    private function getHeading($heading)
    {
        $heading_to_evaluate = "";
        switch ($heading) {
            case 1:
                $heading_to_evaluate = 'functioning';
                break;
            case 2:
                $heading_to_evaluate = 'compensation';
                break;
            case 3:
                $heading_to_evaluate = 'debt_service';
                break;
        }
        return $heading_to_evaluate;
    }


    /**
     * Función para validar que los datos del request sean correctos 
     * antes de pasar a la funcion principal
     * obtener y crear los gastos
     */
    private function validateExpensesRequest($request)
    {
        switch ($request->method()) {
            case "POST":
                $rules = [
                    'pai_code' => 'required',
                    'cost_source_code' => 'required',
                    'nature' => 'required|numeric',
                    'year' => 'required|numeric|min:1|max:4',
                    'heading' => 'required|numeric|min:1|max:3',
                    'value_paid' => 'required|numeric|min:0',
                    'value_required' => 'required|numeric|min:0',
                    'value_comitted' => 'required|numeric|min:0',
                    'value_bugeted' => 'required|numeric|min:0',
                ];
                $messages = [
                    'pai_code.required' => ':attribute es requerido.',
                    'cost_source_code.required' => ':attribute es requerido.',
                    'nature.required' => ':attribute es requerido.',
                    'nature.numeric' => ':attribute debe ser un numero.',
                    'year.required' => ':attribute es un campo requerido.',
                    'year.numeric' => ':attribute debe ser un numero.',
                    'year.min' => ':attribute debe ser mayor o igual a 1',
                    'year.max' => ':attribute debe ser menor o igual a 4',
                    'heading.required' => ':attribute es un campo requerido.',
                    'heading.numeric' => ':attribute debe ser un numero.',
                    'heading.min' => ':attribute debe ser mayor o igual a 1',
                    'heading.max' => ':attribute debe ser menor o igual a 3',
                    'value_paid.required' => ':attribute es un campo requerido.',
                    'value_paid.numeric' => ':attribute debe ser un numero.',
                    'value_paid.min' => ':attribute debe ser mayor o igual a 0',
                    'value_required.required' => ':attribute es un campo requerido.',
                    'value_required.numeric' => ':attribute debe ser un numero.',
                    'value_required.min' => ':attribute debe ser mayor o igual a 0',
                    'value_comitted.required' => ':attribute es un campo requerido.',
                    'value_comitted.numeric' => ':attribute debe ser un numero.',
                    'value_comitted.min' => ':attribute debe ser mayor o igual a 0',
                    'value_bugeted.required' => ':attribute es un campo requerido.',
                    'value_bugeted.numeric' => ':attribute debe ser un numero.',
                    'value_bugeted.min' => ':attribute debe ser mayor o igual a 0',
                ];
                $attributes = [
                    'pai_code' => 'Código interno del PAI',
                    'cost_source_code' => 'Código de la fuente de gastos',
                    'year' => 'Año',
                    'nature' => 'La Naturaleza',
                    'heading' => 'Rubro',
                    'value_paid' => 'Valor pagado',
                    'value_required' => 'Valor requerido',
                    'value_comitted' => 'Valor comprometido',
                    'value_bugeted' => 'Valor presupuestado',
                ];
                break;
            case "GET":
                $rules = [
                    'pai_code' => 'required',
                    'nature' => 'required|numeric|min:1|max:4',
                    'year' => 'required|numeric|min:1|max:4',
                    'heading' => 'required|numeric|min:1|max:3',
                ];
                $messages = [
                    'pai_code.required' => ':attribute es requerido.',
                    'nature.required' => ':attribute es requerido.',
                    'nature.numeric' => ':attribute debe ser un numero.',
                    'year.required' => ':attribute es un campo requerido.',
                    'year.numeric' => ':attribute debe ser un numero.',
                    'year.min' => ':attribute debe ser mayor o igual a 1',
                    'year.max' => ':attribute debe ser menor o igual a 4',
                    'heading.required' => ':attribute es un campo requerido.',
                    'heading.numeric' => ':attribute debe ser un numero.',
                    'heading.min' => ':attribute debe ser mayor o igual a 1',
                    'heading.max' => ':attribute debe ser menor o igual a 3',
                ];
                $attributes = [
                    'pai_code' => 'Código interno del PAI',
                    'year' => 'Año',
                    'nature' => 'La Naturaleza',
                    'heading' => 'Rubro'
                ];
                break;
        }
        return Validator::make($request->all(), $rules, $messages, $attributes);
    }
    /**
     * Lista de naturalezas de la tabla de dominios
     */
    public function natureList(string $nature_id)
    {
        $list = array(
            array("id" => 1, "value" => 22),
            array("id" => 2, "value" => 23),
            array("id" => 3, "value" => 24),
            array("id" => 4, "value" => 25),
        );
        $value = [];
        foreach ($list as $item) {
            if ($item["id"] == $nature_id) {
                $value = $item;
            }
        }
        return $value;
    }
    /**
     * Funcion que evalua que las fechas sean validas
     */
    public function checkYearDate($year, $pai, $date = null, $evidence_date = null)
    {
        $today = Carbon::now();
        $start_date = Carbon::createFromFormat('Y-m-d', $pai->start_date);
        $start_date_1 = Carbon::createFromFormat('Y-m-d', ($start_date->year + ($year - 1)) . "-01-01");
        $end_date_1 = Carbon::createFromFormat('Y-m-d', ($start_date->year + ($year - 1)) . "-07-31");
        $start_date_2 = Carbon::createFromFormat('Y-m-d', ($start_date->year + ($year - 1)) . "-07-01");
        $end_date_2 = Carbon::createFromFormat('Y-m-d', ($start_date->year + ($year - 1) + 1) . "-02-28");
        $inteval_start_1 = Carbon::createFromFormat('Y-m-d', ($start_date->year + ($year - 1)) . "-01-01");
        $inteval_end_1 = Carbon::createFromFormat('Y-m-d', ($start_date->year + ($year - 1)) . "-06-30");
        $inteval_start_2 = Carbon::createFromFormat('Y-m-d', ($start_date->year + ($year - 1)) . "-07-01");
        $inteval_end_2 = Carbon::createFromFormat('Y-m-d', ($start_date->year + ($year - 1)) . "-12-31");

        $year_difference = ($today->year - $start_date->year) + 1;
        $periods_to_validate = true;
        if ($date != null) {
            $date_seted = Carbon::createFromFormat('Y-m-d', $date);
            if ((
                ($today >= $start_date_1 && $today <= $end_date_1)
                && ($date_seted >= $inteval_start_1 && $date_seted <= $inteval_end_1)) || (
                ($today >= $start_date_2 && $today <= $end_date_2)
                && ($date_seted >= $inteval_start_2 && $date_seted <= $inteval_end_2))) {
                $periods_to_validate = true;
            } else {
                $periods_to_validate = false;
            }
        }
        if ($periods_to_validate == true) {
            if ($year_difference == ($year)) {
                if (
                    ($today >= $start_date_1 && $today <= $end_date_1)
                    || ($today >= $start_date_2 && $today <= $end_date_2)
                ) {
                    return true;
                } else {
                    return false;
                }
            } elseif ($year_difference == ($year + 1)) {
                if (($today >= $start_date_2 && $today <= $end_date_2)) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
        if ($evidence_date != null) {
            $evidence_date_seted = Carbon::createFromFormat('Y-m-d', $date);
            if ((
                ($evidence_date_seted >= $start_date_1 && $evidence_date_seted <= $end_date_1)
                && ($date_seted >= $inteval_start_1 && $date_seted <= $inteval_end_1)) || (
                ($evidence_date_seted >= $start_date_2 && $evidence_date_seted <= $end_date_2)
                && ($date_seted >= $inteval_start_2 && $date_seted <= $inteval_end_2))) {
                return true;
            } else {
                return false;
            }
        }
    }
}
