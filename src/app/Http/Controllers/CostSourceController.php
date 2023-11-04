<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Models\Cost_Source;
use App\Models\Financial_cost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;
use stdClass;
use Tymon\JWTAuth\Facades\JWTAuth;
use Validator;

/**
 * Class CostSourceController
 * @package App\Http\Controllers
 */
class CostSourceController extends UtilsController
{
    /**
     * Retorna la informacion de una fuente de gastos
     *  
     */
    public function getCostSourceInfo($cost_source)
    {
        return $cost_source;
    }
    /**
     * Obtiene todos los costos de una CAR
     * o costos predeterminados
     */
    public function index(Request $request)
    {
        try {
            $group_id = JWTAuth::toUser($request->token)["group_id"];
            $cost_sources = Cost_Source::where(function ($q) use ($group_id) {
                $q->where('group_id', $group_id)
                    ->orWhere('group_id', null);
            })->get();
            $response = new ApiResponse(200, "Success", $cost_sources);
        } catch (\Exception $e) {
            UtilsController::setTransactionalLog($request, $e);
            $response = new ApiResponse(500, "Error", ["messages" =>  'Internal Server Error ']);
        }
        return $response->response();
    }
    /**
     * Valida los datos y obtiene la informacion
     * de una fuente de gastos para las CAR
     */
    public function show(Request $request)
    {
        try {
            $validator = $this->validateCostSourceRequest($request);
            $response_info = new stdClass();
            $errors = true;
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $group_id = JWTAuth::toUser($request->token)["group_id"];
                $cost_source = Cost_Source::where('code', $request->code)
                    ->where(function ($q) use ($group_id) {
                        $q->where('group_id', $group_id)
                            ->orWhere('group_id', null);
                    })->first();
                if ($cost_source) {
                    $response_info = $this->getCostSourceInfo($cost_source);
                    $errors = false;
                } else {
                    $response_info->errors = ["La fuente de gastos con code " . $request->code . " no existe para esta corporación."];
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
     * una fuente de gastos para las CAR
     */
    public function store(Request $request)
    {
        try {
            $validator = $this->validateCostSourceRequest($request);
            $response_info = new stdClass();
            $errors = true;
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $group_id = JWTAuth::toUser($request->token)["group_id"];
                $cost_source_searched = Cost_Source::where(function ($q) use ($group_id) {
                    $q->where('group_id', $group_id)
                        ->orWhere('group_id', null);
                })
                    ->where('code', $request->code)->first();
                if ($cost_source_searched) {
                    $response_info->errors = ["Ya existe una fuente de gastos con este código "];
                } else {
                    $father = Cost_Source::where('code', $request->fathers_code)
                        ->where(function ($q) use ($group_id) {
                            $q->where('group_id', $group_id)
                                ->orWhere('group_id', null);
                        })
                        ->where('final_level', false)->first();
                    if (!$father) {
                        $response_info->errors = ["El código de la naturaleza o el código  del padre ingresado o el padre es de último nivel no corresponde con ninguno"];
                    } else {
                        $exceptionfather = true;
                        if ($father->code == 2) {
                            if (($request->functioning == true  && $request->compensation  == true)
                                || ($request->functioning  == true && $request->debt_service  == true)
                                || ($request->compensation  == true && $request->debt_service  == true)
                                || ($request->compensation  == false && $request->debt_service  == false && $request->functioning  == false)
                            ) {
                                $response_info->errors = ["Debe existir un valor en true para el rubro"];
                                $exceptionfather = false;
                            }
                            $father->functioning = $request->functioning ?: $father->functioning;
                            $father->compensation = $request->compensation ?: $father->compensation;
                            $father->debt_service = $request->debt_service ?: $father->debt_service;
                        }
                        if ($exceptionfather == true) {
                            $child_number = Cost_Source::where('father_id', $father->id)->where(function ($q) use ($group_id) {
                                $q->where('group_id', $group_id)
                                    ->orWhere('group_id', null);
                            })->count();
                            FacadesDB::beginTransaction();
                            $code = $father->code . "." . ($child_number + 1);
                            $arrayFinancingSource = [
                                'father_id' => $father->id,
                                'code' => $code,
                                'name' => $request->name,
                                'description' => $request->description,
                                'functioning' => $father->functioning,
                                'compensation' => $father->compensation,
                                'debt_service' => $father->debt_service,
                                'final_level' => $request->final_level,
                                'parent_id' => null,
                                'group_id' => $group_id,
                            ];
                            $errors = false;
                            $financing_source = Cost_Source::create($arrayFinancingSource);
                            $response_info->message = "Se creó la fuente de gastos " . $financing_source->code . " correctamente";
                            FacadesDB::commit();
                        }
                    }
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
     * Valida los datos y actualiza la informacion
     * de una fuente de gastos para las CAR
     */
    public function update(Request $request)
    {
        try {
            $validator = $this->validateCostSourceRequest($request);
            $response_info = new stdClass();
            $errors = true;
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $group_id = JWTAuth::toUser($request->token)["group_id"];
                $cost_source = Cost_Source::where('code', $request->code)
                    ->where(function ($q) use ($group_id) {
                        $q->where('group_id', $group_id);
                    })->first();
                if ($cost_source) {
                    $child_number = Cost_Source::where('father_id', $cost_source->id)->where(function ($q) use ($group_id) {
                        $q->where('group_id', $group_id);
                    })->count();
                    $cost_source->name = $request->name ?: $cost_source->name;
                    $cost_source->description = $request->description ?: $cost_source->description;
                    if ($child_number == 0) {
                        $cost_source->final_level = $request->final_level;
                    }
                    $errors = false;
                    FacadesDB::beginTransaction();
                    $cost_source->save();
                    $response_info->message = "Se actualizó la fuente de gastos " . $cost_source->code . " correctamente";
                    FacadesDB::commit();
                } else {
                    $response_info->errors = ["La fuente de gastos con code " . $request->code . " no existe para esta corporación  o es una fuente general que no se puede editar."];
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
     * Valida los datos y elimina la informacion
     * de una fuente de gastos para las CAR
     */
    public function destroy(Request $request)
    {
        try {
            $validator = $this->validateCostSourceRequest($request);
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->message = Controller::$str_struct_err;
                $response_info->errors = $validator->messages();
            } else {
                $group_id = JWTAuth::toUser($request->token)["group_id"];
                $financing_cost = Cost_Source::where('code', $request->code)
                    ->where('group_id', $group_id)->first();
                if ($financing_cost) {
                    $financial_costs = Financial_cost::where('cost_sources_id', $financing_cost->id)->count();
                    $childs_financial_sources = Cost_Source::where('father_id', $financing_cost->id)->count();
                    if ($financial_costs == 0 && $childs_financial_sources == 0) {
                        FacadesDB::beginTransaction();
                        $financing_cost->delete();
                        $response_info->message = "Fuente de gastos eliminada";
                        $errors = false;
                        FacadesDB::commit();
                    } else {
                        $response_info->errors = ["La Fuente de gastos con code " . $request->code . " no puede tener hijos, ni costos financieros asociados"];
                    }
                } else {
                    $response_info->errors = ["La Fuente de gastos con code " . $request->code . " no existe para esta corporación  o es una fuente general que no se puede eliminar."];
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
     * antes de pasar a la funcion principal para la creacion, 
     * actualizacion, obtencion y eliminacion de fuente de gastos
     */
    private function validateCostSourceRequest($request)
    {
        switch ($request->method()) {
            case "POST":
                $rules = [
                    'name' => 'required|min:3',
                    'fathers_code' => 'required',
                    'description' => 'required',
                    'final_level' =>  'boolean'
                ];
                $messages = [
                    'name.required' => ':attribute es requerido.',
                    'name.min' => ':attribute debe tener mínimo 3 caracteres.',
                    'fathers_code.required' => ':attribute es requerido.',
                    'description.required' => ':attribute es requerido.',
                    'final_level.boolean' => ':attribute debe ser true o false.',
                ];
                $attributes = [
                    'code' => 'Código ',
                    'name' => 'Nombre ',
                    'fathers_code' => 'Código del padre ',
                    'description' => 'Descripción ',
                    'final_level' =>  'Ultimo nivel'
                ];
                break;
            case "PUT":
                $rules = [
                    'name' => 'nullable|min:3',
                    'description' => 'nullable',
                    'final_level' =>  'required|boolean'
                ];
                $messages = [
                    'code.numeric' => ':attribute debe ser un numero.',
                    'name.required' => ':attribute es requerido.',
                    'fathers_code.required' => ':attribute es requerido.',
                    'fathers_code.numeric' => ':attribute debe ser un numero.',
                    'name.min' => ':attribute debe tener mínimo 3 caracteres.',
                    'final_level.boolean' => ':attribute debe ser true o false.'
                ];
                $attributes = [
                    'name' => 'Nombre ',
                    'fathers_code' => 'Código del padre ',
                    'description' => 'Descripción ',
                    'functioning' => 'Funcionamiento',
                    'compensation' => 'Compensacion',
                    'debt_service' => 'Servicio a la deuda',
                    'final_level' =>  'Ultimo nivel'
                ];
                break;
            case "GET":
            case "DELETE":
                $rules = [
                    'code' => 'required',
                ];
                $messages = [
                    'code.required' => ':attribute es requerido.',
                ];
                $attributes = [
                    'code' => 'Código ',
                ];
                break;
        }
        return Validator::make($request->all(), $rules, $messages, $attributes);
    }
}
