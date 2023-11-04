<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Models\Cost_Source;
use App\Models\Financial_Plan;
use App\Models\Financing_Source;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;
use stdClass;
use Tymon\JWTAuth\Facades\JWTAuth;
use Validator;

/**
 * Class FinancingSourceController
 * @package App\Http\Controllers
 */
class FinancingSourceController extends UtilsController
{
    /**
     * Obtiene la informacion de una fuente de finaciacion
     */
    public function getFinancianSourceInfo($financing_source)
    {
        return $financing_source;
    }
    /**
     * Obtiene todas las fuentes de financiacion
     */
    public function index(Request $request)
    {
        try {
            $group_id = JWTAuth::toUser($request->token)["group_id"];
            $financing_sources = Financing_Source::where(function ($q) use ($group_id) {
                $q->where('group_id', $group_id)
                    ->orWhere('group_id', null);
            })->get();
            $response = new ApiResponse(200, "Success", $financing_sources);
        } catch (\Exception $e) {
            UtilsController::setTransactionalLog($request, $e);
            $response = new ApiResponse(500, "Error", ["messages" =>  'Internal Server Error ']);
        }
        return $response->response();
    }
    /**
     * Obtiene los detalles de una fuente de 
     * financiacion por medio de su codigo
     */
    public function show(Request $request)
    {
        try {
            $validator = $this->validateFinancingSourceRequest($request);
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $group_id = JWTAuth::toUser($request->token)["group_id"];
                $financing_source = Financing_Source::where('code', $request->code)
                    ->where(function ($q) use ($group_id) {
                        $q->where('group_id', $group_id)
                            ->orWhere('group_id', null);
                    })->first();
                if ($financing_source) {
                    $response_info = $this->getFinancianSourceInfo($financing_source);
                    $errors = false;
                } else {
                    $response_info->errors = ["La fuente de financiación con code " . $request->code . " no existe para esta corporación."];
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
     * Crea una fuente de financiacion para 
     * una CAR logeada
     */
    public function store(Request $request)
    {
        try {
            $validator = $this->validateFinancingSourceRequest($request);
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $group_id = JWTAuth::toUser($request->token)["group_id"];
                $financing_source_searched = Financing_Source::where('group_id', $group_id)
                    ->where('code', $request->code)->first();
                if ($financing_source_searched) {
                    $response_info->errors = ["Ya existe una fuente de financiación con este código "];
                } else {
                    $internal_nature_id = $this->natureList($request->nature);
                    $father = Financing_Source::where('code', $request->fathers_code)
                        ->where('final_level', false)
                        ->where(function ($q) use ($group_id) {
                            $q->where('group_id', $group_id)
                                ->orWhere('group_id', null);
                        })->first();
                    if (!$internal_nature_id || !$father) {
                        $response_info->errors = ["El código de la naturaleza o el código  del padre ingresado no corresponde con ninguno o el padre es de último nivel"];
                    } else {
                        if ($request->cooperation == true && $request->final_level == false) {
                            $response_info->errors = ["La fuente de financiación solo puede ser de cooperación si es de último nivel"];
                        } else {
                            FacadesDB::beginTransaction();
                            $child_number = Financing_Source::where('father_id', $father->id)->where(function ($q) use ($group_id) {
                                $q->where('group_id', $group_id)
                                    ->orWhere('group_id', null);
                            })->count();
                            $code = $father->code . "." . ($child_number + 1);
                            $arrayFinancingSource = [
                                'father_id' => $father->id,
                                'code' => $code,
                                'name' => $request->name,
                                'description' => $request->description,
                                'type_id' => $internal_nature_id["value"],
                                'final_level' => $request->final_level,
                                'corporation' => $request->cooperation,
                                'parent_id' => null,
                                'group_id' => $group_id,
                            ];
                            $errors = false;
                            $financing_source = Financing_Source::create($arrayFinancingSource);
                            $response_info->message = "Se creó la fuente de financiación " . $financing_source->code . " correctamente";
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
     * Actualiza una fuente de financiacion para 
     * una CAR logeada por medio de su codigo
     */
    public function update(Request $request)
    {
        try {
            $validator = $this->validateFinancingSourceRequest($request);
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $group_id = JWTAuth::toUser($request->token)["group_id"];
                $financing_source = Financing_Source::where('code', $request->code)
                    ->where(function ($q) use ($group_id) {
                        $q->where('group_id', $group_id);
                    })->first();
                if ($financing_source) {
                    $internal_nature_id = $this->natureList($request->nature);
                    if (!$internal_nature_id) {
                        $response_info->errors = ["El código de la naturaleza o el código  del padre ingresado no corresponde con ninguno"];
                    } else {
                        $childs_financial_sources = Financing_Source::where('father_id', $financing_source->id)->count();
                        if ($childs_financial_sources > 0) {
                            $response_info->errors = ["La Fuente de financiación con code " . $request->code . " no puede tener fuentes de financiación hijas, ni planes financieros asociados"];
                        } else {
                            $financing_source->name = $request->name ?: $financing_source->name;
                            $financing_source->description = $request->description ?: $financing_source->description;
                            $financing_source->type_id = $internal_nature_id["value"] ?: $financing_source->type_id;
                            $financing_source->final_level = $request->final_level;
                            $financing_source->corporation = $request->cooperation;
                            if ($request->cooperation == true && $request->final_level == false) {
                                $response_info->errors = ["La fuente de financiación solo puede ser de cooperación si es de último nivel"];
                            } else {
                                FacadesDB::beginTransaction();
                                $errors = false;
                                $financing_source->save();
                                $response_info->message = "Se actualizó la fuente de financiación " . $financing_source->code . " correctamente";
                                FacadesDB::commit();
                            }
                        }
                    }
                } else {
                    $response_info->errors = ["La Fuente de financiación con code " . $request->code . " no existe para esta corporación o es una fuente general que no se puede editar"];
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
     * Elimina una fuente de financiacion para 
     * una CAR logeada por medio de su codigo
     */
    public function destroy(Request $request)
    {
        try {
            $validator = $this->validateFinancingSourceRequest($request);
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $group_id = JWTAuth::toUser($request->token)["group_id"];
                $financing_source = Financing_Source::where('code', $request->code)->where('group_id', $group_id)->first();
                if ($financing_source) {
                    $cost_sources = Cost_Source::where('parent_id', $financing_source->id)->count();
                    $financial_plans = Financial_Plan::where('source_id', $financing_source->id)->count();
                    $childs_financial_sources = Financing_Source::where('father_id', $financing_source->id)->count();
                    if ($financial_plans == 0 && $cost_sources == 0 && $childs_financial_sources == 0) {
                        FacadesDB::beginTransaction();
                        $financing_source->delete();
                        $response_info->message = "Fuente de financiación eliminada";
                        $errors = false;
                        FacadesDB::commit();
                    } else {
                        $response_info->errors = ["La Fuente de financiación con code " . $request->code . " no puede tener fuentes de financiación hijas, ni planes financieros asociados"];
                    }
                } else {
                    $response_info->errors = ["La Fuente de financiación con code " . $request->code . " no existe para esta corporación  o es una fuente general que no se puede eliminar."];
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
     * antes de pasar a la funcion principal para obtener, eliminar,
     * actualizar y crear una fuente de financiacion
     */
    private function validateFinancingSourceRequest($request)
    {
        switch ($request->method()) {
            case "POST":
                $rules = [
                    'name' => 'required|min:3',
                    'fathers_code' => 'required',
                    'description' => 'required',
                    'nature' => 'required|numeric',
                    'cooperation' => 'required|boolean',
                    'final_level' =>  'boolean'
                ];
                $messages = [
                    'name.required' => ':attribute es requerido.',
                    'name.min' => ':attribute debe tener mínimo 3 caracteres.',
                    'cooperation.required' => ':attribute es requerido.',
                    'fathers_code.required' => ':attribute es requerido.',
                    'description.required' => ':attribute es requerido.',
                    'nature.required' => ':attribute es requerido.',
                    'nature.numeric' => ':attribute debe ser un numero.',
                    'final_level.boolean' => ':attribute debe ser true o false.',
                ];
                $attributes = [
                    'name' => 'Nombre ',
                    'cooperation' => 'Cooperacion',
                    'fathers_code' => 'Código del padre ',
                    'description' => 'Descripción ',
                    'nature' => 'Naturaleza',
                    'final_level' =>  'Ultimo nivel'
                ];
                break;
            case "PUT":
                $rules = [
                    'code' => 'required',
                    'name' => 'nullable|min:3',
                    'description' => 'nullable',
                    'nature' => 'nullable|numeric',
                    'cooperation' => 'required|boolean',
                    'final_level' =>  'required|boolean'
                ];
                $messages = [
                    'code.required' => ':attribute es requerido.',
                    'code.numeric' => ':attribute debe ser un numero.',
                    'name.min' => ':attribute debe tener mínimo 3 caracteres.',
                    'fathers_code.required' => ':attribute es requerido.',
                    'fathers_code.numeric' => ':attribute debe ser un numero.',
                    'description.required' => ':attribute es requerido.',
                    'nature.required' => ':attribute es requerido.',
                    'nature.numeric' => ':attribute debe ser un numero.',
                    'final_level.boolean' => ':attribute debe ser true o false.',
                ];
                $attributes = [
                    'code' => 'El Código ',
                    'name' => 'El Nombre ',
                    'fathers_code' => 'El Código del padre ',
                    'description' => 'La Descripción ',
                    'cooperation' => 'Cooperacion',
                    'nature' => 'La Naturaleza',
                    'final_level' =>  'El campo Ultimo nivel'
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
    /**
     * Valida si una naturaleza existe en el listado
     * de la tabala dominios
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
}
