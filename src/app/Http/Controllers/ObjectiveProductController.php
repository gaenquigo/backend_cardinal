<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Models\Activity;
use App\Models\ObjectiveProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;
use stdClass;
use Validator;

/**
 * Class ObjectiveProductController
 * @package App\Http\Controllers
 */
class ObjectiveProductController extends UtilsController
{
    /**
     * Obtiene productos objetivos
     */
    public function getObjectiveProductInfo($objective_product)
    {
        return $objective_product;
    }
    /**
     * Obtiene su producto objetivo
     */
    public function index(Request $request)
    {
        try {
            $validator = $this->validateObjectiveProduct($request);
            $responseValidation = UtilsController::getIndexData(
                $request,
                $validator,
                "objective_product",
                false,
                true
            );
            $errors = $responseValidation["errors"];
            $response_info = $responseValidation["response_info"];
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
     * Crea uno o varios productos objetivos
     */
    public function store(Request $request)
    {
        try {
            $validator = $this->validateObjectiveProduct($request);
            $errors = false;
            $response_info = [];
            $response_info["message"] = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info["errors"] = $validator->messages();
                $errors = true;
            } else {
                $responseValidation = UtilsController::checkStructure($request, "objective");
                $errors = $responseValidation["errors"];
                if (!$responseValidation["errors"]) {
                    $objective = $responseValidation["data"];
                    $summaryObjectiveProducts = ObjectiveProduct::where("objective_id", $objective->id)->sum('weighing');
                    $objective_products_size = sizeof($request->objective_products);
                    $program = UtilsController::checkStructure($request, "program")["data"];
                    FacadesDB::beginTransaction();
                    foreach ($request->objective_products as $keyObjectiveProducts => $objective_product) {
                        $validateObjectiveProducts = $this->validateInternalObjectiveProductRequest($objective_product);
                        if ($validateObjectiveProducts->fails()) {
                            $response_info["Producto Objetivo " . $keyObjectiveProducts]["message"] = Controller::$str_struct_err;
                            $response_info["Producto Objetivo " . $keyObjectiveProducts]["errors"] = $validateObjectiveProducts->messages();
                            $errors = true;
                        } else {
                            $exist =  ObjectiveProduct::where('objective_product_code', '=', $objective_product["objective_product_code"] . "-" . $objective->objective_code)
                                ->where('objective_id', '=', $objective["id"])->first();
                            if ($exist) {
                                $response_info["objective_products"]["Producto Objetivo " . $keyObjectiveProducts]["message"] = Controller::$str_struct_err;
                                $response_info["objective_products"]["Producto Objetivo " . $keyObjectiveProducts]["errors"] = ["El producto objetivo con objective_product_code " .
                                    $objective_product["objective_product_code"] . " para el objetivo ingresado ya existe."];
                                $errors = true;
                            } else {
                                if ($objective_product["product_id"] == null && $objective_product["indicator_national_id"]) {
                                    $response_info["Producto Objetivo " . $keyObjectiveProducts]["message"] = Controller::$str_struct_err;
                                    $response_info["Producto Objetivo " . $keyObjectiveProducts]["errors"] = "Si el product_id es null el indicator_national_id tambien debe ser null";
                                } else {
                                    if ($keyObjectiveProducts == ($objective_products_size - 1) && $objective_product["weighing"] != (100 - $summaryObjectiveProducts)) {
                                        $response_info["objective_products"]["Producto Objetivo " . $keyObjectiveProducts]["message"] = Controller::$str_struct_err;
                                        $response_info["objective_products"]["Producto Objetivo " . $keyObjectiveProducts]["errors"] = [Controller::$str_sumatory_err];
                                        $errors = true;
                                    } else {
                                        $summaryObjectiveProducts = $summaryObjectiveProducts + $objective_product["weighing"];
                                        if ($summaryObjectiveProducts > 100) {
                                            $response_info["objective_products"]["Producto Objetivo " . $keyObjectiveProducts]["message"] = Controller::$str_struct_err;
                                            $response_info["objective_products"]["Producto Objetivo " . $keyObjectiveProducts]["errors"] = [Controller::$str_sumatory_err];
                                            $errors = true;
                                        } else {
                                            $internal_product_id = null;
                                            $internal_indicator_national_id = null;
                                            if ($objective_product["product_id"] != null) {
                                                $internal_product_id = $this->productsList($objective_product["product_id"], $program["national_program_id"]);
                                                if ($internal_product_id == null) {
                                                    $response_info["objective_products"]["Producto Objetivo " . $keyObjectiveProducts]["message"] = Controller::$str_struct_err;
                                                    $response_info["objective_products"]["Producto Objetivo " . $keyObjectiveProducts]["errors"] = "El producto ingresado no tiene relación con el programa nacional";
                                                    $errors = true;
                                                } else {
                                                    if ($objective_product["indicator_national_id"]) {
                                                        $internal_indicator_national_id = $this->indicatorNationalList($objective_product["indicator_national_id"], $internal_product_id["value"]);
                                                        if ($internal_indicator_national_id == null) {
                                                            $response_info["objective_products"]["Producto Objetivo " . $keyObjectiveProducts]["message"] = Controller::$str_struct_err;
                                                            $response_info["objective_products"]["Producto Objetivo " . $keyObjectiveProducts]["errors"] = "El indicador nacional no existe en relacion con el producto ingresado";
                                                            $errors = true;
                                                        }
                                                        $objective_product["product_other"] = null;
                                                    } else {
                                                        $internal_indicator_national_id = ["value" => null, "id" => 1];
                                                    }
                                                }
                                            }
                                            $internal_unit_goal_id = $this->unitList($objective_product["unit_goal"]);
                                            $internal_indicator_ods_id = $this->odsList($objective_product["indicator_ods_id"]);
                                            $internal_national_policy_id = $this->nationalPolicyList($objective_product["national_policy_id"]);
                                            if ($internal_unit_goal_id == null) {
                                                $response_info["objective_products"]["Producto Objetivo " . $keyObjectiveProducts]["message"] = Controller::$str_struct_err;
                                                $response_info["objective_products"]["Producto Objetivo " . $keyObjectiveProducts]["errors"] = "La unidad no existe";
                                                $errors = true;
                                            } else if ($internal_indicator_ods_id == null) {
                                                $response_info["objective_products"]["Producto Objetivo " . $keyObjectiveProducts]["message"] = Controller::$str_struct_err;
                                                $response_info["objective_products"]["Producto Objetivo " . $keyObjectiveProducts]["errors"] = "El código del indicador ODS no existe";
                                                $errors = true;
                                            } else if ($internal_national_policy_id == null) {
                                                $response_info["objective_products"]["Producto Objetivo " . $keyObjectiveProducts]["message"] = Controller::$str_struct_err;
                                                $response_info["objective_products"]["Producto Objetivo " . $keyObjectiveProducts]["errors"] = "El código del indicador de politica nacional ambiental no existe";
                                                $errors = true;
                                            } else {
                                                if ($errors === false) {
                                                    $arrayObjectiveProduct = [
                                                        'objective_id' => $objective->id,
                                                        'product_other' => $internal_product_id == null ? $objective_product["product_other"] : null,
                                                        'weighing' => $objective_product["weighing"],
                                                        'product_id' => $internal_product_id == null ? null : $internal_product_id["value"],
                                                        'goal_1_balance' => $objective_product["goal_1"],
                                                        'goal_2_balance' => $objective_product["goal_2"],
                                                        'goal_3_balance' => $objective_product["goal_3"],
                                                        'goal_4_balance' => $objective_product["goal_4"],
                                                        'goal_1' => $objective_product["goal_1"],
                                                        'goal_2' => $objective_product["goal_2"],
                                                        'goal_3' => $objective_product["goal_3"],
                                                        'goal_4' => $objective_product["goal_4"],
                                                        'total_goal' => $objective_product["goal_1"] + $objective_product["goal_2"] + $objective_product["goal_3"] + $objective_product["goal_4"],
                                                        'unit_goal' => $internal_unit_goal_id["value"],
                                                        'indicator_national_id' => $internal_product_id == null ? null : $internal_indicator_national_id["value"],
                                                        'indicator_ods_id' => $internal_indicator_ods_id["value"],
                                                        'national_policy_id' => $internal_national_policy_id["value"],
                                                        'objective_product_code' => $objective_product["objective_product_code"] . "-" . $objective->objective_code
                                                    ];
                                                    ObjectiveProduct::create($arrayObjectiveProduct);
                                                    $response_info["objective_products"]["Producto Objetivo " . $keyObjectiveProducts]["message"] = "El producto tiene la estructura correcta";
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                    $errors == true ? FacadesDB::rollBack() : FacadesDB::commit();
                    $response_info["message"] = $errors == true ? Controller::$str_struct_err : "Se han creado los registros correctamente";
                } else {
                    $errors = true;
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
     * Actualiza un producto objetivo
     */
    public function update(Request $request)
    {
        try {
            $validator = $this->validateObjectiveProduct($request);
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $responseValidation = UtilsController::checkStructure($request, "objective");
                if (!$responseValidation["errors"]) {
                    $objective = $responseValidation["data"];
                    $objective_product = ObjectiveProduct::where('objective_product_code', '=', $request->objective_product["objective_product_code"] . "-" . $objective->objective_code)
                        ->where('objective_id', '=', $objective["id"])->first();
                    if ($objective_product) {
                        $summaryObjectiveProducts = ObjectiveProduct::where("objective_id", $objective->id)->sum('weighing');
                        $summaryObjectiveProducts = $summaryObjectiveProducts + $request->objective_product["weighing"] - $objective_product["weighing"];
                        if ($request->objective_product["product_id"] == null &&  $request->objective_product["indicator_national_id"] != null) {
                            $response_info->errors = ["Si el product_id es igual a null el indicator_national_id tambien debe ser null "];
                        } else {
                            if ($summaryObjectiveProducts > 100) {
                                $response_info->errors = [Controller::$str_sumatory_err];
                            } else {
                                $internal_product_id = null;
                                $internal_indicator_national_id = null;
                                $program = UtilsController::checkStructure($request, "program")["data"];
                                $temporalErrors = false;
                                if ($request->objective_product["product_id"] != null) {
                                    $internal_product_id = $this->productsList($request->objective_product["product_id"], $program["national_program_id"]);
                                    if ($internal_product_id == null) {
                                        $temporalErrors = true;
                                        $response_info->errors = "El producto ingresado no tiene relación con el programa nacional";
                                    } else {
                                        $internal_indicator_national_id = $this->indicatorNationalList($request->objective_product["indicator_national_id"], $internal_product_id["value"]);
                                        if ($internal_indicator_national_id == null) {
                                            $response_info->errors = "El indicador nacional no existe en relacion con el producto ingresado";
                                            $temporalErrors = true;
                                        }
                                    }
                                }
                                if ($temporalErrors == false) {
                                    $internal_unit_goal_id = $this->unitList($request->objective_product["unit_goal"]);
                                    $internal_indicator_ods_id = $this->odsList($request->objective_product["indicator_ods_id"]);
                                    $internal_national_policy_id = $this->nationalPolicyList($request->objective_product["national_policy_id"]);
                                    if ($internal_unit_goal_id == null) {
                                        $response_info->errors = "La unidad no existe";
                                    } else if ($internal_indicator_ods_id == null) {
                                        $response_info->errors = "El código del indicador ODS no existe";
                                    } else if ($internal_national_policy_id == null) {
                                        $response_info->errors = "El código del indicador de politica nacional ambiental no existe";
                                    } else {
                                        $finalValueproduct_other = null;
                                        if ($objective_product->product_id == null) {
                                            $finalValueproduct_other = $request->objective_product["product_other"] ?: $objective_product->product_other;
                                        }
                                        FacadesDB::beginTransaction();
                                        $objective_product->product_other = $internal_product_id == null ? $finalValueproduct_other : null;
                                        $objective_product->weighing = $request->objective_product["weighing"] ?: $objective_product->weighing;
                                        if ($request->objective_product["product_other"] != null && $internal_product_id == null) {
                                            $objective_product->product_id = null;
                                            $objective_product->product_other = $request->objective_product["product_other"];
                                        } else if ($internal_product_id != null) {
                                            $objective_product->product_id = $internal_product_id["value"];
                                        }
                                        $objective_product->goal_1 = $request->objective_product["goal_1"];
                                        $objective_product->goal_2 = $request->objective_product["goal_2"];
                                        $objective_product->goal_3 = $request->objective_product["goal_3"];
                                        $objective_product->goal_4 = $request->objective_product["goal_4"];
                                        $objective_product->goal_1_balance = $request->objective_product["goal_1"];
                                        $objective_product->goal_2_balance = $request->objective_product["goal_2"];
                                        $objective_product->goal_3_balance = $request->objective_product["goal_3"];
                                        $objective_product->goal_4_balance = $request->objective_product["goal_4"];
                                        $objective_product->total_goal = $request->objective_product["goal_1"] + $request->objective_product["goal_2"]
                                            + $request->objective_product["goal_3"] + $request->objective_product["goal_4"];
                                        $objective_product->unit_goal = $internal_unit_goal_id["value"];
                                        $objective_product->indicator_national_id = $internal_product_id == null ? null : $internal_indicator_national_id["value"];
                                        $objective_product->indicator_ods_id = $internal_indicator_ods_id["value"];
                                        $objective_product->national_policy_id = $internal_national_policy_id["value"];
                                        $objective_product->save();
                                        $errors = false;
                                        $response_info->message = "Se actualizó el producto objectivo con objective_product_code " . $request->objective_product["objective_product_code"] . " para el objetivo";
                                        FacadesDB::commit();
                                    }
                                }
                            }
                        }
                    } else {
                        $response_info->errors = ["El producto objetivo con objective_product_code " . $request->objective_product_code . "-" . $objective->objective_code . " para el objetivo ingresado no existe."];
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
     * Elimina un producto objetivo
     */
    public function destroy(Request $request)
    {
        try {
            $validator = $this->validateObjectiveProduct($request);
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $responseValidation = UtilsController::checkStructure($request, "objective");
                if (!$responseValidation["errors"]) {
                    $objective = $responseValidation["data"];
                    $objective_product = ObjectiveProduct::where('objective_product_code', '=', $request->objective_product_code . "-" . $objective->objective_code)
                        ->where('objective_id', '=', $objective["id"])->first();
                    if ($objective_product) {
                        $activitesProducts = null;
                        $activitesProducts = Activity::where(
                            'product_id',
                            $objective_product->product_other == null ? $objective_product->product_id : $objective_product->id
                        )->where('objective_id', '=', $objective["id"])->get();
                        if (sizeof($activitesProducts) > 0) {
                            $response_info->errors = ["No puede eliminar Productos Objetivos que tengan actividades relacionadas"];
                        } else {
                            $objective_product->delete();
                            $response_info->message = "Producto objetivo eliminado";
                            $errors = false;
                        }
                    } else {
                        $response_info->errors = ["El producto objetivo con objective_product_code " . $request->objective_product_code . " para el objetivo ingresado no existe."];
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
     * antes de pasar a la funcion principal para crear, obtener,
     * eliminar y actualizar un producto objetivo
     */
    private function validateObjectiveProduct($request)
    {
        switch ($request->method()) {
            case "POST":
                $rules = [
                    'pai_code' => 'required|numeric',
                    'strategic_line_code' => 'required|numeric',
                    'program_code' => 'required|numeric',
                    'project_code' => 'required|numeric',
                    'objective_code' => 'required|numeric',
                    'objective_products' => 'required|array|min:1',
                ];
                $messages = [
                    'pai_code.required' => ':attribute es requerido.',
                    'pai_code.numeric' => ':attribute debe ser un numero.',
                    'strategic_line_code.required' => ':attribute es requerido.',
                    'strategic_line_code.numeric' => ':attribute debe ser un numero.',
                    'program_code.required' => ':attribute es requerido.',
                    'program_code.numeric' => ':attribute debe ser un numero.',
                    'project_code.required' => ':attribute es requerido.',
                    'project_code.numeric' => ':attribute debe ser un numero.',
                    'objective_code.required' => ':attribute es requerido.',
                    'objective_code.numeric' => ':attribute debe ser un numero.',
                    'objective_products.required' => ':attribute es un campo requerido.',
                    'objective_products.array' => ':attribute debe ser un array.',
                    'objective_products.min' => ':attribute debe tener un tamaño superior a 1',
                ];
                $attributes = [
                    'pai_code' => 'Código interno del PAI',
                    'strategic_line_code' => 'Código Interno de la línea estratégica',
                    'program_code' => 'Código Interno del programa',
                    'project_code' => 'Código Interno del proyecto',
                    'objective_code' => 'Código Interno del objetivo',
                    'objective_products' => 'Los Productos objetivos',
                ];
                break;
            case "PUT":
                $rules = [
                    'pai_code' => 'required|numeric',
                    'strategic_line_code' => 'required|numeric',
                    'program_code' => 'required|numeric',
                    'project_code' => 'required|numeric',
                    'objective_code' => 'required|numeric',
                    'objective_product.product_other' => 'nullable|min:3',
                    'objective_product.weighing' => 'nullable|integer|min:1|max:100',
                    'objective_product.goal_1' => 'required|numeric|min:0',
                    'objective_product.goal_2' => 'required|numeric|min:0',
                    'objective_product.goal_3' => 'required|numeric|min:0',
                    'objective_product.goal_4' => 'required|numeric|min:0',
                    'objective_product.unit_goal' => 'required|numeric|min:1|max:9999',
                    'objective_product.indicator_national_id' => 'nullable|numeric|min:1|max:9999',
                    'objective_product.indicator_ods_id' => 'required|numeric|min:1|max:9999',
                    'objective_product.national_policy_id' => 'required|numeric|min:1|max:9999',
                    'objective_product.objective_product_code' => 'required|numeric'
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
                    'objective_product.name.min' => ':attribute debe ser un numero.',
                    'objective_product.weighing.integer' => ':attribute debe ser un numero entero.',
                    'objective_product.weighing.min' => ':attribute debe ser mayor o igual a 1',
                    'objective_product.weighing.max' => ':attribute debe ser menor o igual a 100',
                    'objective_product.goal_1.required' => ':attribute es un campo requerido.',
                    'objective_product.goal_1.numeric' => ':attribute debe ser un numero.',
                    'objective_product.goal_1.min' => ':attribute debe ser mayor o igual a 1',
                    'objective_product.goal_2.required' => ':attribute es un campo requerido.',
                    'objective_product.goal_2.numeric' => ':attribute debe ser un numero.',
                    'objective_product.goal_2.min' => ':attribute debe ser mayor o igual a 1',
                    'objective_product.goal_3.required' => ':attribute es un campo requerido.',
                    'objective_product.goal_3.numeric' => ':attribute debe ser un numero.',
                    'objective_product.goal_3.min' => ':attribute debe ser mayor o igual a 1',
                    'objective_product.goal_4.required' => ':attribute es un campo requerido.',
                    'objective_product.goal_4.numeric' => ':attribute debe ser un numero.',
                    'objective_product.goal_4.min' => ':attribute debe ser mayor o igual a 1',
                    'objective_product.unit_goal.required' => ':attribute es un campo requerido.',
                    'objective_product.unit_goal.numeric' => ':attribute debe ser un numero.',
                    'objective_product.unit_goal.min' => ':attribute debe ser mayor o igual a 1',
                    'objective_product.unit_goal.max' => ':attribute debe ser menor a 10000',
                    'objective_product.indicator_national_id.numeric' => ':attribute debe ser un numero.',
                    'objective_product.indicator_national_id.min' => ':attribute debe ser mayor o igual a 1',
                    'objective_product.indicator_national_id.max' => ':attribute debe ser menor a 10000',
                    'objective_product.indicator_ods_id.required' => ':attribute es un campo requerido.',
                    'objective_product.indicator_ods_id.numeric' => ':attribute debe ser un numero.',
                    'objective_product.indicator_ods_id.min' => ':attribute debe ser mayor o igual a 1',
                    'objective_product.indicator_ods_id.max' => ':attribute debe ser menor a 10000',
                    'objective_product.national_policy_id.required' => ':attribute es un campo requerido.',
                    'objective_product.national_policy_id.numeric' => ':attribute debe ser un numero.',
                    'objective_product.national_policy_id.min' => ':attribute debe ser mayor o igual a 1',
                    'objective_product.national_policy_id.max' => ':attribute debe ser menor a 10000',
                    'objective_product.objective_product_code.required' => ':attribute es un campo requerido.',
                    'objective_product.objective_product_code.numeric' => ':attribute debe ser un numero.',
                ];
                $attributes = [
                    'pai_code' => 'Código interno del PAI',
                    'strategic_line_code' => 'Código Interno de la línea estratégica',
                    'program_code' => 'Código interno del programa',
                    'project_code' => 'Código interno del proyecto',
                    'objective_code' => 'Código Interno del objetivo',
                    'objective_product.product_other' => 'Otro producto',
                    'objective_product.product_id' => 'Código producto dominio',
                    'objective_product.weighing' => 'La ponderacion',
                    'objective_product.goal_1' => 'Meta año 1',
                    'objective_product.goal_2' => 'Meta año 2',
                    'objective_product.goal_3' => 'Meta año 3',
                    'objective_product.goal_4' => 'Meta año 4',
                    'objective_product.unit_goal' => 'Tipo unidad dominio',
                    'objective_product.indicator_national_id' => 'Código indicador nacional, dominio',
                    'objective_product.indicator_ods_id' => 'Código indicador ODS, dominio',
                    'objective_product.national_policy_id' => 'Código indicador Politica Nacional, dominio',
                    'objective_product.objective_product_code' => 'Código Interno del producto objetivo',
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
                    'objective_product_code' => 'required|numeric',
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
                    'objective_product_code.required' => ':attribute es un campo requerido.',
                    'objective_product_code.numeric' => ':attribute debe ser un numero.',
                ];
                $attributes = [
                    'pai_code' => 'Código interno del PAI',
                    'strategic_line_code' => 'Código Interno de la línea estratégica',
                    'program_code' => 'Código Interno del programa',
                    'project_code' => 'Código Interno del proyecto',
                    'objective_code' => 'Código Interno del objetivo',
                    'objective_product_code' => 'Código Interno del producto objetivo',
                ];
                break;
        }
        return Validator::make($request->all(), $rules, $messages, $attributes);
    }
    /**
     * Función para validar que los datos del request sean correctos 
     * antes de pasar a la funcion principal para crear
     * un producto objetivo interno
     */
    private function validateInternalObjectiveProductRequest(array $request)
    {
        $rules = [
            'product_other' => 'nullable|min:3',
            'weighing' => 'required|integer|min:1|max:100',
            'product_id' => 'nullable|numeric|min:1',
            'goal_1' => 'required|numeric|min:0',
            'goal_2' => 'required|numeric|min:0',
            'goal_3' => 'required|numeric|min:0',
            'goal_4' => 'required|numeric|min:0',
            'unit_goal' => 'required|numeric|min:1|max:9999',
            'indicator_national_id' => 'nullable|numeric|min:1|max:9999',
            'indicator_ods_id' => 'required|numeric|min:1|max:9999',
            'national_policy_id' => 'required|numeric|min:1|max:9999',
            'objective_product_code' => 'required|numeric'
        ];
        $messages = [
            'product_other.min' => ':attribute debe tener mínimo 3 caracteres.',
            'weighing.required' => ':attribute es un campo requerido.',
            'weighing.integer' => ':attribute debe ser un numero entero.',
            'weighing.min' => ':attribute debe ser mayor o igual a 1',
            'weighing.max' => ':attribute debe ser menor o igual a 100',
            'product_id.numeric' => ':attribute debe ser un numero.',
            'product_id.min' => ':attribute debe ser mayor o igual a 1',
            'goal_1.required' => ':attribute es un campo requerido.',
            'goal_1.numeric' => ':attribute debe ser un numero.',
            'goal_1.min' => ':attribute debe ser mayor o igual a 1',
            'goal_2.required' => ':attribute es un campo requerido.',
            'goal_2.numeric' => ':attribute debe ser un numero.',
            'goal_2.min' => ':attribute debe ser mayor o igual a 1',
            'goal_3.required' => ':attribute es un campo requerido.',
            'goal_3.numeric' => ':attribute debe ser un numero.',
            'goal_3.min' => ':attribute debe ser mayor o igual a 1',
            'goal_4.required' => ':attribute es un campo requerido.',
            'goal_4.numeric' => ':attribute debe ser un numero.',
            'goal_4.min' => ':attribute debe ser mayor o igual a 1',
            'unit_goal.required' => ':attribute es un campo requerido.',
            'unit_goal.numeric' => ':attribute debe ser un numero.',
            'unit_goal.min' => ':attribute debe ser mayor o igual a 1',
            'unit_goal.max' => ':attribute debe ser menor a 10000',
            'indicator_national_id.required' => ':attribute es un campo requerido.',
            'indicator_national_id.numeric' => ':attribute debe ser un numero.',
            'indicator_national_id.min' => ':attribute debe ser mayor o igual a 1',
            'indicator_national_id.max' => ':attribute debe ser menor a 10000',
            'indicator_ods_id.required' => ':attribute es un campo requerido.',
            'indicator_ods_id.numeric' => ':attribute debe ser un numero.',
            'indicator_ods_id.min' => ':attribute debe ser mayor o igual a 1',
            'indicator_ods_id.max' => ':attribute debe ser menor a 10000',
            'national_policy_id.required' => ':attribute es un campo requerido.',
            'national_policy_id.numeric' => ':attribute debe ser un numero.',
            'national_policy_id.min' => ':attribute debe ser mayor o igual a 1',
            'national_policy_id.max' => ':attribute debe ser menor a 10000',
            'objective_product_code.required' => ':attribute es un campo requerido.',
            'objective_product_code.numeric' => ':attribute  debe ser un numero.',
        ];
        $attributes = [
            'product_other' => 'Otro producto',
            'product_id' => 'Código producto dominio',
            'weighing' => 'La ponderacion',
            'goal_1' => 'Meta año 1',
            'goal_2' => 'Meta año 2',
            'goal_3' => 'Meta año 3',
            'goal_4' => 'Meta año 4',
            'unit_goal' => 'Tipo unidad dominio',
            'indicator_national_id' => 'Código indicador nacional, dominio',
            'indicator_ods_id' => 'Código indicador ODS, dominio',
            'national_policy_id' => 'Código indicador Politica Nacional, dominio',
            'objective_product_code' => 'Código Interno del producto objetivo',
        ];
        return Validator::make($request, $rules, $messages, $attributes);
    }

    public function unitList(string $unit_goal)
    {
        $list = array(
            array("id" => 1, "value" => 30),
            array("id" => 2, "value" => 31),
            array("id" => 3, "value" => 32),
            array("id" => 4, "value" => 33),
            array("id" => 5, "value" => 34),
            array("id" => 6, "value" => 35),
            array("id" => 7, "value" => 36),
            array("id" => 8, "value" => 37),
            array("id" => 9, "value" => 38),
            array("id" => 10, "value" => 39),
            array("id" => 11, "value" => 40),
            array("id" => 12, "value" => 41),
            array("id" => 13, "value" => 42),
            array("id" => 14, "value" => 43),
            array("id" => 15, "value" => 44),
            array("id" => 16, "value" => 45),
            array("id" => 17, "value" => 46),
            array("id" => 18, "value" => 47),
            array("id" => 19, "value" => 48),
            array("id" => 20, "value" => 49),
            array("id" => 21, "value" => 50),
            array("id" => 22, "value" => 51),
            array("id" => 23, "value" => 52),
            array("id" => 24, "value" => 53),
            array("id" => 25, "value" => 54),
            array("id" => 26, "value" => 55),
            array("id" => 27, "value" => 56),
            array("id" => 28, "value" => 57),
            array("id" => 29, "value" => 58),
            array("id" => 30, "value" => 59),
            array("id" => 31, "value" => 60),
            array("id" => 32, "value" => 61),
            array("id" => 33, "value" => 62),
            array("id" => 34, "value" => 63),
            array("id" => 35, "value" => 64),
            array("id" => 36, "value" => 65),
            array("id" => 37, "value" => 66),
            array("id" => 38, "value" => 67),
            array("id" => 39, "value" => 68),
            array("id" => 40, "value" => 69),
            array("id" => 41, "value" => 70),
            array("id" => 42, "value" => 71),
            array("id" => 43, "value" => 72),
            array("id" => 44, "value" => 73),
            array("id" => 45, "value" => 74),
            array("id" => 46, "value" => 75),
            array("id" => 47, "value" => 76),
            array("id" => 48, "value" => 77),
            array("id" => 49, "value" => 78),
            array("id" => 50, "value" => 79),
            array("id" => 51, "value" => 80),
            array("id" => 52, "value" => 81),
            array("id" => 53, "value" => 82),
            array("id" => 54, "value" => 83),
            array("id" => 55, "value" => 84),
            array("id" => 56, "value" => 85),
            array("id" => 57, "value" => 86),
            array("id" => 58, "value" => 87),
            array("id" => 59, "value" => 88)
        );
        $value = null;
        foreach ($list as $key => $item) {
            if ($item["id"] == $unit_goal) {
                $value = $item;
            }
        }
        return $value;
    }
    public function odsList(string $indicator_ods_id)
    {
        $list = array(
            array("id" => 1, "value" => 890),
            array("id" => 2, "value" => 891),
            array("id" => 3, "value" => 892),
            array("id" => 4, "value" => 893),
            array("id" => 5, "value" => 894),
            array("id" => 6, "value" => 895),
            array("id" => 7, "value" => 896),
            array("id" => 8, "value" => 897),
            array("id" => 9, "value" => 898),
            array("id" => 10, "value" => 899),
            array("id" => 11, "value" => 900),
            array("id" => 12, "value" => 901),
            array("id" => 13, "value" => 902),
            array("id" => 14, "value" => 903),
            array("id" => 15, "value" => 904),
            array("id" => 16, "value" => 905),
            array("id" => 17, "value" => 906),
            array("id" => 18, "value" => 907),
            array("id" => 19, "value" => 908),
            array("id" => 20, "value" => 909),
            array("id" => 21, "value" => 910),
            array("id" => 22, "value" => 911),
            array("id" => 23, "value" => 912),
            array("id" => 24, "value" => 913),
            array("id" => 25, "value" => 914),
            array("id" => 26, "value" => 915),
            array("id" => 27, "value" => 916),
            array("id" => 28, "value" => 917),
            array("id" => 29, "value" => 918),
            array("id" => 30, "value" => 919),
            array("id" => 31, "value" => 920),
            array("id" => 32, "value" => 921),
            array("id" => 33, "value" => 922),
            array("id" => 34, "value" => 923),
            array("id" => 35, "value" => 924),
            array("id" => 36, "value" => 925),
            array("id" => 37, "value" => 926),
            array("id" => 38, "value" => 927),
            array("id" => 39, "value" => 928),
            array("id" => 40, "value" => 929),
            array("id" => 41, "value" => 930),
            array("id" => 42, "value" => 931),
            array("id" => 43, "value" => 932),
            array("id" => 44, "value" => 933),
            array("id" => 45, "value" => 934),
            array("id" => 46, "value" => 935),
            array("id" => 47, "value" => 936),
            array("id" => 48, "value" => 937),
            array("id" => 49, "value" => 938),
            array("id" => 50, "value" => 939),
            array("id" => 51, "value" => 940),
            array("id" => 52, "value" => 941),
            array("id" => 53, "value" => 942),
            array("id" => 54, "value" => 943),
            array("id" => 55, "value" => 944),
            array("id" => 56, "value" => 945),
            array("id" => 57, "value" => 946),
            array("id" => 58, "value" => 947),
            array("id" => 59, "value" => 948),
            array("id" => 60, "value" => 949),
            array("id" => 61, "value" => 950),
            array("id" => 62, "value" => 951),
            array("id" => 63, "value" => 952),
            array("id" => 64, "value" => 953),
            array("id" => 65, "value" => 954),
            array("id" => 66, "value" => 955),
            array("id" => 67, "value" => 956),
            array("id" => 68, "value" => 957),
            array("id" => 69, "value" => 958),
            array("id" => 70, "value" => 959),
            array("id" => 71, "value" => 960),
            array("id" => 72, "value" => 961),
            array("id" => 73, "value" => 962),
            array("id" => 74, "value" => 963),
            array("id" => 75, "value" => 964),
            array("id" => 76, "value" => 965),
            array("id" => 77, "value" => 966),
            array("id" => 78, "value" => 967),
            array("id" => 79, "value" => 968),
            array("id" => 80, "value" => 969),
            array("id" => 81, "value" => 970),
            array("id" => 82, "value" => 971),
            array("id" => 83, "value" => 972),
            array("id" => 84, "value" => 973),
            array("id" => 85, "value" => 974),
            array("id" => 86, "value" => 975),
            array("id" => 87, "value" => 976),
            array("id" => 88, "value" => 977),
            array("id" => 89, "value" => 978),
            array("id" => 90, "value" => 979),
            array("id" => 91, "value" => 980),
            array("id" => 92, "value" => 981),
            array("id" => 93, "value" => 982),
            array("id" => 94, "value" => 983),
            array("id" => 95, "value" => 984),
            array("id" => 96, "value" => 985),
            array("id" => 97, "value" => 986),
            array("id" => 98, "value" => 987),
            array("id" => 99, "value" => 988),
            array("id" => 100, "value" => 989),
            array("id" => 101, "value" => 990),
            array("id" => 102, "value" => 991),
            array("id" => 103, "value" => 992),
            array("id" => 104, "value" => 993),
            array("id" => 105, "value" => 994),
            array("id" => 106, "value" => 995),
            array("id" => 107, "value" => 996),
            array("id" => 108, "value" => 997),
            array("id" => 109, "value" => 998),
            array("id" => 110, "value" => 999),
            array("id" => 111, "value" => 1000),
            array("id" => 112, "value" => 1001),
            array("id" => 113, "value" => 1002),
            array("id" => 114, "value" => 1003),
            array("id" => 115, "value" => 1004),
            array("id" => 116, "value" => 1005),
            array("id" => 117, "value" => 1006),
            array("id" => 118, "value" => 1007),
            array("id" => 119, "value" => 1008),
            array("id" => 120, "value" => 1009),
            array("id" => 121, "value" => 1010),
            array("id" => 122, "value" => 1011),
            array("id" => 123, "value" => 1012),
            array("id" => 124, "value" => 1013),
            array("id" => 125, "value" => 1014),
            array("id" => 126, "value" => 1015),
            array("id" => 127, "value" => 1016),
            array("id" => 128, "value" => 1017),
            array("id" => 129, "value" => 1018),
            array("id" => 130, "value" => 1019),
            array("id" => 131, "value" => 1020),
            array("id" => 132, "value" => 1021),
            array("id" => 133, "value" => 1022),
            array("id" => 134, "value" => 1023),
            array("id" => 135, "value" => 1024),
            array("id" => 136, "value" => 1025),
            array("id" => 137, "value" => 1026),
            array("id" => 138, "value" => 1027),
            array("id" => 139, "value" => 1028),
            array("id" => 140, "value" => 1029),
            array("id" => 141, "value" => 1030),
            array("id" => 142, "value" => 1031),
            array("id" => 143, "value" => 1032),
            array("id" => 144, "value" => 1033),
            array("id" => 145, "value" => 1034),
            array("id" => 146, "value" => 1035),
            array("id" => 147, "value" => 1036),
            array("id" => 148, "value" => 1037),
            array("id" => 149, "value" => 1038),
            array("id" => 150, "value" => 1039),
            array("id" => 151, "value" => 1040),
            array("id" => 152, "value" => 1041),
            array("id" => 153, "value" => 1042),
            array("id" => 154, "value" => 1043),
            array("id" => 155, "value" => 1044),
            array("id" => 156, "value" => 1045),
            array("id" => 157, "value" => 1046),
            array("id" => 158, "value" => 1047),
            array("id" => 159, "value" => 1048),
            array("id" => 160, "value" => 1049),
            array("id" => 161, "value" => 1050),
            array("id" => 162, "value" => 1051),
            array("id" => 163, "value" => 1052),
            array("id" => 164, "value" => 1053),
            array("id" => 165, "value" => 1054),
            array("id" => 166, "value" => 1055),
            array("id" => 167, "value" => 1056),
            array("id" => 168, "value" => 1057),
            array("id" => 169, "value" => 1058),
            array("id" => 170, "value" => 1059),
            array("id" => 171, "value" => 1060),
            array("id" => 172, "value" => 1061),
            array("id" => 173, "value" => 1062),
            array("id" => 174, "value" => 1063),
            array("id" => 175, "value" => 1064),
            array("id" => 176, "value" => 1065),
            array("id" => 177, "value" => 1066),
            array("id" => 178, "value" => 1067),
            array("id" => 179, "value" => 1068),
            array("id" => 180, "value" => 1069),
            array("id" => 181, "value" => 1070),
            array("id" => 182, "value" => 1071),
            array("id" => 183, "value" => 1072),
            array("id" => 184, "value" => 1073),
            array("id" => 185, "value" => 1074),
            array("id" => 186, "value" => 1075),
            array("id" => 187, "value" => 1076),
            array("id" => 188, "value" => 1077),
            array("id" => 189, "value" => 1078),
            array("id" => 190, "value" => 1079),
            array("id" => 191, "value" => 1080),
            array("id" => 192, "value" => 1081),
            array("id" => 193, "value" => 1082),
            array("id" => 194, "value" => 1083),
            array("id" => 195, "value" => 1084),
            array("id" => 196, "value" => 1085),
            array("id" => 197, "value" => 1086),
            array("id" => 198, "value" => 1087),
            array("id" => 199, "value" => 1088),
            array("id" => 200, "value" => 1089),
            array("id" => 201, "value" => 1090),
            array("id" => 202, "value" => 1091),
            array("id" => 203, "value" => 1092),
            array("id" => 204, "value" => 1093),
            array("id" => 205, "value" => 1094),
            array("id" => 206, "value" => 1095),
            array("id" => 207, "value" => 1096),
            array("id" => 208, "value" => 1097),
            array("id" => 209, "value" => 1098),
            array("id" => 210, "value" => 1099),
            array("id" => 211, "value" => 1100),
            array("id" => 212, "value" => 1101),
            array("id" => 213, "value" => 1102),
            array("id" => 214, "value" => 1103),
            array("id" => 215, "value" => 1104),
            array("id" => 216, "value" => 1105),
            array("id" => 217, "value" => 1106),
            array("id" => 218, "value" => 1107),
            array("id" => 219, "value" => 1108),
            array("id" => 220, "value" => 1109),
            array("id" => 221, "value" => 1110),
            array("id" => 222, "value" => 1111),
            array("id" => 223, "value" => 1112),
            array("id" => 224, "value" => 1113),
            array("id" => 225, "value" => 1114),
            array("id" => 226, "value" => 1115),
            array("id" => 227, "value" => 1116),
            array("id" => 228, "value" => 1117),
            array("id" => 229, "value" => 1118),
            array("id" => 230, "value" => 1119),
            array("id" => 231, "value" => 1120),
            array("id" => 232, "value" => 1121),
            array("id" => 233, "value" => 1122),
            array("id" => 234, "value" => 1123),
            array("id" => 235, "value" => 1124),
            array("id" => 236, "value" => 1125),
        );
        $value = null;
        foreach ($list as $key => $item) {
            if ($item["id"] == $indicator_ods_id) {
                $value = $item;
            }
        }
        return $value;
    }
    public function nationalPolicyList(string $national_policy_id)
    {
        $list = array(
            array("id" => 1, "value" => 875),
            array("id" => 2, "value" => 876),
            array("id" => 3, "value" => 877),
            array("id" => 4, "value" => 878),
            array("id" => 5, "value" => 879),
            array("id" => 6, "value" => 880),
            array("id" => 7, "value" => 881),
            array("id" => 8, "value" => 882),
            array("id" => 9, "value" => 883),
            array("id" => 10, "value" => 884),
            array("id" => 11, "value" => 885),
            array("id" => 12, "value" => 886),
            array("id" => 13, "value" => 887),
            array("id" => 14, "value" => 888)
        );
        $value = null;
        foreach ($list as $key => $item) {
            if ($item["id"] == $national_policy_id) {
                $value = $item;
            }
        }
        return $value;
    }

    public function productsList(string $product_id, $program_id)
    {
        $list = array(
            array("id" => 1, "father_id" => 90, "value" => 91),
            array("id" => 2, "father_id" => 90, "value" => 108),
            array("id" => 3, "father_id" => 90, "value" => 113),
            array("id" => 4, "father_id" => 90, "value" => 115),
            array("id" => 5, "father_id" => 90, "value" => 117),
            array("id" => 6, "father_id" => 90, "value" => 119),
            array("id" => 7, "father_id" => 90, "value" => 121),
            array("id" => 8, "father_id" => 90, "value" => 123),
            array("id" => 9, "father_id" => 90, "value" => 130),
            array("id" => 10, "father_id" => 90, "value" => 133),
            array("id" => 11, "father_id" => 90, "value" => 139),
            array("id" => 12, "father_id" => 90, "value" => 141),
            array("id" => 13, "father_id" => 90, "value" => 143),
            array("id" => 14, "father_id" => 90, "value" => 145),
            array("id" => 15, "father_id" => 90, "value" => 147),
            array("id" => 16, "father_id" => 90, "value" => 150),
            array("id" => 17, "father_id" => 90, "value" => 153),
            array("id" => 18, "father_id" => 90, "value" => 155),
            array("id" => 19, "father_id" => 90, "value" => 157),
            array("id" => 20, "father_id" => 90, "value" => 159),
            array("id" => 21, "father_id" => 90, "value" => 162),
            array("id" => 22, "father_id" => 90, "value" => 164),
            array("id" => 23, "father_id" => 90, "value" => 166),
            array("id" => 24, "father_id" => 168, "value" => 169),
            array("id" => 25, "father_id" => 168, "value" => 183),
            array("id" => 26, "father_id" => 168, "value" => 190),
            array("id" => 27, "father_id" => 168, "value" => 195),
            array("id" => 28, "father_id" => 168, "value" => 199),
            array("id" => 29, "father_id" => 168, "value" => 204),
            array("id" => 30, "father_id" => 168, "value" => 209),
            array("id" => 31, "father_id" => 168, "value" => 212),
            array("id" => 32, "father_id" => 168, "value" => 215),
            array("id" => 33, "father_id" => 168, "value" => 217),
            array("id" => 34, "father_id" => 168, "value" => 219),
            array("id" => 35, "father_id" => 168, "value" => 221),
            array("id" => 36, "father_id" => 168, "value" => 223),
            array("id" => 37, "father_id" => 168, "value" => 225),
            array("id" => 38, "father_id" => 168, "value" => 229),
            array("id" => 39, "father_id" => 168, "value" => 231),
            array("id" => 40, "father_id" => 168, "value" => 233),
            array("id" => 41, "father_id" => 168, "value" => 236),
            array("id" => 42, "father_id" => 168, "value" => 238),
            array("id" => 43, "father_id" => 168, "value" => 240),
            array("id" => 44, "father_id" => 168, "value" => 242),
            array("id" => 45, "father_id" => 168, "value" => 244),
            array("id" => 46, "father_id" => 168, "value" => 246),
            array("id" => 47, "father_id" => 168, "value" => 248),
            array("id" => 48, "father_id" => 168, "value" => 250),
            array("id" => 49, "father_id" => 168, "value" => 252),
            array("id" => 50, "father_id" => 168, "value" => 254),
            array("id" => 51, "father_id" => 168, "value" => 256),
            array("id" => 52, "father_id" => 168, "value" => 258),
            array("id" => 53, "father_id" => 168, "value" => 261),
            array("id" => 54, "father_id" => 168, "value" => 263),
            array("id" => 55, "father_id" => 168, "value" => 266),
            array("id" => 56, "father_id" => 168, "value" => 270),
            array("id" => 57, "father_id" => 168, "value" => 274),
            array("id" => 58, "father_id" => 168, "value" => 282),
            array("id" => 59, "father_id" => 168, "value" => 284),
            array("id" => 60, "father_id" => 168, "value" => 286),
            array("id" => 61, "father_id" => 288, "value" => 289),
            array("id" => 62, "father_id" => 288, "value" => 296),
            array("id" => 63, "father_id" => 288, "value" => 314),
            array("id" => 64, "father_id" => 288, "value" => 318),
            array("id" => 65, "father_id" => 288, "value" => 320),
            array("id" => 66, "father_id" => 288, "value" => 327),
            array("id" => 67, "father_id" => 288, "value" => 329),
            array("id" => 68, "father_id" => 288, "value" => 333),
            array("id" => 69, "father_id" => 288, "value" => 338),
            array("id" => 70, "father_id" => 288, "value" => 340),
            array("id" => 71, "father_id" => 288, "value" => 342),
            array("id" => 72, "father_id" => 288, "value" => 344),
            array("id" => 73, "father_id" => 288, "value" => 347),
            array("id" => 74, "father_id" => 288, "value" => 350),
            array("id" => 75, "father_id" => 288, "value" => 353),
            array("id" => 76, "father_id" => 288, "value" => 356),
            array("id" => 77, "father_id" => 288, "value" => 358),
            array("id" => 78, "father_id" => 288, "value" => 364),
            array("id" => 79, "father_id" => 288, "value" => 366),
            array("id" => 80, "father_id" => 288, "value" => 369),
            array("id" => 81, "father_id" => 288, "value" => 371),
            array("id" => 82, "father_id" => 288, "value" => 373),
            array("id" => 83, "father_id" => 288, "value" => 375),
            array("id" => 84, "father_id" => 288, "value" => 377),
            array("id" => 85, "father_id" => 288, "value" => 379),
            array("id" => 86, "father_id" => 288, "value" => 381),
            array("id" => 87, "father_id" => 288, "value" => 383),
            array("id" => 88, "father_id" => 288, "value" => 385),
            array("id" => 89, "father_id" => 288, "value" => 387),
            array("id" => 90, "father_id" => 288, "value" => 389),
            array("id" => 91, "father_id" => 288, "value" => 391),
            array("id" => 92, "father_id" => 288, "value" => 393),
            array("id" => 93, "father_id" => 288, "value" => 395),
            array("id" => 94, "father_id" => 288, "value" => 397),
            array("id" => 95, "father_id" => 288, "value" => 399),
            array("id" => 96, "father_id" => 288, "value" => 401),
            array("id" => 97, "father_id" => 288, "value" => 405),
            array("id" => 98, "father_id" => 288, "value" => 407),
            array("id" => 99, "father_id" => 288, "value" => 411),
            array("id" => 100, "father_id" => 288, "value" => 415),
            array("id" => 101, "father_id" => 288, "value" => 418),
            array("id" => 102, "father_id" => 288, "value" => 421),
            array("id" => 103, "father_id" => 424, "value" => 425),
            array("id" => 104, "father_id" => 424, "value" => 437),
            array("id" => 105, "father_id" => 424, "value" => 444),
            array("id" => 106, "father_id" => 424, "value" => 447),
            array("id" => 107, "father_id" => 424, "value" => 449),
            array("id" => 108, "father_id" => 424, "value" => 453),
            array("id" => 109, "father_id" => 424, "value" => 458),
            array("id" => 110, "father_id" => 424, "value" => 462),
            array("id" => 111, "father_id" => 424, "value" => 466),
            array("id" => 112, "father_id" => 424, "value" => 468),
            array("id" => 113, "father_id" => 424, "value" => 474),
            array("id" => 114, "father_id" => 424, "value" => 478),
            array("id" => 115, "father_id" => 424, "value" => 485),
            array("id" => 116, "father_id" => 424, "value" => 488),
            array("id" => 117, "father_id" => 424, "value" => 493),
            array("id" => 118, "father_id" => 424, "value" => 496),
            array("id" => 119, "father_id" => 424, "value" => 499),
            array("id" => 120, "father_id" => 424, "value" => 503),
            array("id" => 121, "father_id" => 424, "value" => 506),
            array("id" => 122, "father_id" => 424, "value" => 509),
            array("id" => 123, "father_id" => 424, "value" => 512),
            array("id" => 124, "father_id" => 424, "value" => 515),
            array("id" => 125, "father_id" => 424, "value" => 517),
            array("id" => 126, "father_id" => 424, "value" => 520),
            array("id" => 127, "father_id" => 424, "value" => 523),
            array("id" => 128, "father_id" => 424, "value" => 525),
            array("id" => 129, "father_id" => 424, "value" => 527),
            array("id" => 130, "father_id" => 424, "value" => 529),
            array("id" => 131, "father_id" => 424, "value" => 531),
            array("id" => 132, "father_id" => 424, "value" => 533),
            array("id" => 133, "father_id" => 424, "value" => 535),
            array("id" => 134, "father_id" => 424, "value" => 537),
            array("id" => 135, "father_id" => 424, "value" => 539),
            array("id" => 136, "father_id" => 424, "value" => 541),
            array("id" => 137, "father_id" => 424, "value" => 543),
            array("id" => 138, "father_id" => 424, "value" => 545),
            array("id" => 139, "father_id" => 424, "value" => 547),
            array("id" => 140, "father_id" => 424, "value" => 549),
            array("id" => 141, "father_id" => 424, "value" => 551),
            array("id" => 142, "father_id" => 424, "value" => 553),
            array("id" => 143, "father_id" => 424, "value" => 555),
            array("id" => 144, "father_id" => 424, "value" => 558),
            array("id" => 145, "father_id" => 424, "value" => 560),
            array("id" => 146, "father_id" => 424, "value" => 563),
            array("id" => 147, "father_id" => 424, "value" => 566),
            array("id" => 148, "father_id" => 424, "value" => 569),
            array("id" => 149, "father_id" => 424, "value" => 572),
            array("id" => 150, "father_id" => 424, "value" => 581),
            array("id" => 151, "father_id" => 424, "value" => 583),
            array("id" => 152, "father_id" => 424, "value" => 585),
            array("id" => 153, "father_id" => 587, "value" => 588),
            array("id" => 154, "father_id" => 587, "value" => 592),
            array("id" => 155, "father_id" => 587, "value" => 594),
            array("id" => 156, "father_id" => 587, "value" => 596),
            array("id" => 157, "father_id" => 587, "value" => 600),
            array("id" => 158, "father_id" => 587, "value" => 602),
            array("id" => 159, "father_id" => 587, "value" => 604),
            array("id" => 160, "father_id" => 587, "value" => 606),
            array("id" => 161, "father_id" => 587, "value" => 609),
            array("id" => 162, "father_id" => 587, "value" => 614),
            array("id" => 163, "father_id" => 587, "value" => 616),
            array("id" => 164, "father_id" => 587, "value" => 618),
            array("id" => 165, "father_id" => 587, "value" => 620),
            array("id" => 166, "father_id" => 587, "value" => 627),
            array("id" => 167, "father_id" => 587, "value" => 633),
            array("id" => 168, "father_id" => 587, "value" => 639),
            array("id" => 169, "father_id" => 587, "value" => 648),
            array("id" => 170, "father_id" => 650, "value" => 651),
            array("id" => 171, "father_id" => 650, "value" => 653),
            array("id" => 172, "father_id" => 650, "value" => 661),
            array("id" => 173, "father_id" => 650, "value" => 665),
            array("id" => 174, "father_id" => 650, "value" => 669),
            array("id" => 175, "father_id" => 650, "value" => 672),
            array("id" => 176, "father_id" => 650, "value" => 677),
            array("id" => 177, "father_id" => 650, "value" => 686),
            array("id" => 178, "father_id" => 650, "value" => 689),
            array("id" => 179, "father_id" => 650, "value" => 691),
            array("id" => 180, "father_id" => 650, "value" => 693),
            array("id" => 181, "father_id" => 650, "value" => 695),
            array("id" => 182, "father_id" => 697, "value" => 698),
            array("id" => 183, "father_id" => 697, "value" => 710),
            array("id" => 184, "father_id" => 697, "value" => 716),
            array("id" => 185, "father_id" => 697, "value" => 728),
            array("id" => 186, "father_id" => 697, "value" => 736),
            array("id" => 187, "father_id" => 697, "value" => 738),
            array("id" => 188, "father_id" => 697, "value" => 744),
            array("id" => 189, "father_id" => 697, "value" => 746),
            array("id" => 190, "father_id" => 697, "value" => 752),
            array("id" => 191, "father_id" => 697, "value" => 756),
            array("id" => 192, "father_id" => 697, "value" => 758),
            array("id" => 193, "father_id" => 697, "value" => 760),
            array("id" => 194, "father_id" => 697, "value" => 762),
            array("id" => 195, "father_id" => 697, "value" => 764),
            array("id" => 196, "father_id" => 697, "value" => 766),
            array("id" => 197, "father_id" => 697, "value" => 768),
            array("id" => 198, "father_id" => 772, "value" => 773),
            array("id" => 199, "father_id" => 772, "value" => 776),
            array("id" => 200, "father_id" => 772, "value" => 778),
            array("id" => 201, "father_id" => 772, "value" => 781),
            array("id" => 202, "father_id" => 772, "value" => 784),
            array("id" => 203, "father_id" => 772, "value" => 791),
            array("id" => 204, "father_id" => 772, "value" => 794),
            array("id" => 205, "father_id" => 798, "value" => 800),
            array("id" => 206, "father_id" => 798, "value" => 803),
            array("id" => 207, "father_id" => 798, "value" => 806),
            array("id" => 208, "father_id" => 798, "value" => 808),
            array("id" => 209, "father_id" => 798, "value" => 810),
            array("id" => 210, "father_id" => 798, "value" => 812),
            array("id" => 211, "father_id" => 798, "value" => 814),
            array("id" => 212, "father_id" => 798, "value" => 816),
            array("id" => 213, "father_id" => 798, "value" => 818),
            array("id" => 214, "father_id" => 798, "value" => 822),
            array("id" => 215, "father_id" => 798, "value" => 839),
            array("id" => 216, "father_id" => 798, "value" => 843),
            array("id" => 217, "father_id" => 798, "value" => 847),
            array("id" => 218, "father_id" => 798, "value" => 850),
            array("id" => 219, "father_id" => 798, "value" => 853),
            array("id" => 220, "father_id" => 798, "value" => 859),
            array("id" => 221, "father_id" => 798, "value" => 863),
            array("id" => 222, "father_id" => 798, "value" => 865),
            array("id" => 223, "father_id" => 798, "value" => 870),
            array("id" => 224, "father_id" => 798, "value" => 872)
        );
        $value = null;
        foreach ($list as $item) {
            if (
                $item["id"] == $product_id
                && $program_id == $item["father_id"]
            ) {
                $value = $item;
            }
        }
        return $value;
    }
    public function indicatorNationalList($indicator_national_id, $product_id)
    {
        $list = array(
            array("id" => 1, "father_id" =>  91, "value" =>  92),
            array("id" => 2, "father_id" =>  91, "value" =>  93),
            array("id" => 3, "father_id" =>  91, "value" =>  94),
            array("id" => 4, "father_id" =>  91, "value" =>  95),
            array("id" => 5, "father_id" =>  91, "value" =>  96),
            array("id" => 6, "father_id" =>  91, "value" =>  97),
            array("id" => 7, "father_id" =>  91, "value" =>  98),
            array("id" => 8, "father_id" =>  91, "value" =>  99),
            array("id" => 9, "father_id" =>  91, "value" =>  100),
            array("id" => 10, "father_id" => 91, "value" =>  101),
            array("id" => 11, "father_id" => 91, "value" =>  102),
            array("id" => 12, "father_id" => 91, "value" =>  103),
            array("id" => 13, "father_id" => 91, "value" =>  104),
            array("id" => 14, "father_id" => 91, "value" =>  105),
            array("id" => 15, "father_id" => 91, "value" =>  106),
            array("id" => 16, "father_id" => 91, "value" =>  107),
            array("id" => 17, "father_id" => 108, "value" => 109),
            array("id" => 18, "father_id" => 108, "value" => 110),
            array("id" => 19, "father_id" => 108, "value" => 111),
            array("id" => 20, "father_id" => 108, "value" => 112),
            array("id" => 21, "father_id" => 113, "value" => 114),
            array("id" => 22, "father_id" => 115, "value" => 116),
            array("id" => 23, "father_id" => 117, "value" => 118),
            array("id" => 24, "father_id" => 119, "value" => 120),
            array("id" => 25, "father_id" => 121, "value" => 122),
            array("id" => 26, "father_id" => 123, "value" => 124),
            array("id" => 27, "father_id" => 123, "value" => 125),
            array("id" => 28, "father_id" => 123, "value" => 126),
            array("id" => 29, "father_id" => 123, "value" => 127),
            array("id" => 30, "father_id" => 123, "value" => 128),
            array("id" => 31, "father_id" => 123, "value" => 129),
            array("id" => 32, "father_id" => 130, "value" => 131),
            array("id" => 33, "father_id" => 130, "value" => 132),
            array("id" => 34, "father_id" => 133, "value" => 134),
            array("id" => 35, "father_id" => 133, "value" => 135),
            array("id" => 36, "father_id" => 133, "value" => 136),
            array("id" => 37, "father_id" => 133, "value" => 137),
            array("id" => 38, "father_id" => 133, "value" => 138),
            array("id" => 39, "father_id" => 139, "value" => 140),
            array("id" => 40, "father_id" => 141, "value" => 142),
            array("id" => 41, "father_id" => 143, "value" => 144),
            array("id" => 42, "father_id" => 145, "value" => 146),
            array("id" => 43, "father_id" => 147, "value" => 148),
            array("id" => 44, "father_id" => 147, "value" => 149),
            array("id" => 45, "father_id" => 150, "value" => 151),
            array("id" => 46, "father_id" => 150, "value" => 152),
            array("id" => 47, "father_id" => 153, "value" => 154),
            array("id" => 48, "father_id" => 155, "value" => 156),
            array("id" => 49, "father_id" => 157, "value" => 158),
            array("id" => 50, "father_id" => 159, "value" => 160),
            array("id" => 51, "father_id" => 159, "value" => 161),
            array("id" => 52, "father_id" => 162, "value" => 163),
            array("id" => 53, "father_id" => 164, "value" => 165),
            array("id" => 54, "father_id" => 166, "value" => 167),
            array("id" => 55, "father_id" => 169, "value" => 170),
            array("id" => 56, "father_id" => 169, "value" => 171),
            array("id" => 57, "father_id" => 169, "value" => 172),
            array("id" => 58, "father_id" => 169, "value" => 173),
            array("id" => 59, "father_id" => 169, "value" => 174),
            array("id" => 60, "father_id" => 169, "value" => 175),
            array("id" => 61, "father_id" => 169, "value" => 176),
            array("id" => 62, "father_id" => 169, "value" => 177),
            array("id" => 63, "father_id" => 169, "value" => 178),
            array("id" => 64, "father_id" => 169, "value" => 179),
            array("id" => 65, "father_id" => 169, "value" => 180),
            array("id" => 66, "father_id" => 169, "value" => 181),
            array("id" => 67, "father_id" => 169, "value" => 182),
            array("id" => 68, "father_id" => 183, "value" => 184),
            array("id" => 69, "father_id" => 183, "value" => 185),
            array("id" => 70, "father_id" => 183, "value" => 186),
            array("id" => 71, "father_id" => 183, "value" => 187),
            array("id" => 72, "father_id" => 183, "value" => 188),
            array("id" => 73, "father_id" => 183, "value" => 189),
            array("id" => 74, "father_id" => 190, "value" => 191),
            array("id" => 75, "father_id" => 190, "value" => 192),
            array("id" => 76, "father_id" => 190, "value" => 193),
            array("id" => 77, "father_id" => 190, "value" => 194),
            array("id" => 78, "father_id" => 195, "value" => 196),
            array("id" => 79, "father_id" => 195, "value" => 197),
            array("id" => 80, "father_id" => 195, "value" => 198),
            array("id" => 81, "father_id" => 199, "value" => 200),
            array("id" => 82, "father_id" => 199, "value" => 201),
            array("id" => 83, "father_id" => 199, "value" => 202),
            array("id" => 84, "father_id" => 199, "value" => 203),
            array("id" => 85, "father_id" => 204, "value" => 205),
            array("id" => 86, "father_id" => 204, "value" => 206),
            array("id" => 87, "father_id" => 204, "value" => 207),
            array("id" => 88, "father_id" => 204, "value" => 208),
            array("id" => 89, "father_id" => 209, "value" => 210),
            array("id" => 90, "father_id" => 209, "value" => 211),
            array("id" => 91, "father_id" => 212, "value" => 213),
            array("id" => 92, "father_id" => 212, "value" => 214),
            array("id" => 93, "father_id" => 215, "value" => 216),
            array("id" => 94, "father_id" => 217, "value" => 218),
            array("id" => 95, "father_id" => 219, "value" => 220),
            array("id" => 96, "father_id" => 221, "value" => 222),
            array("id" => 97, "father_id" => 223, "value" => 224),
            array("id" => 98, "father_id" => 225, "value" => 226),
            array("id" => 99, "father_id" => 225, "value" => 227),
            array("id" => 100, "father_id" => 225, "value" => 228),
            array("id" => 101, "father_id" => 229, "value" => 230),
            array("id" => 102, "father_id" => 231, "value" => 232),
            array("id" => 103, "father_id" => 233, "value" => 234),
            array("id" => 104, "father_id" => 233, "value" => 235),
            array("id" => 105, "father_id" => 236, "value" => 237),
            array("id" => 106, "father_id" => 238, "value" => 239),
            array("id" => 107, "father_id" => 240, "value" => 241),
            array("id" => 108, "father_id" => 242, "value" => 243),
            array("id" => 109, "father_id" => 244, "value" => 245),
            array("id" => 110, "father_id" => 246, "value" => 247),
            array("id" => 111, "father_id" => 248, "value" => 249),
            array("id" => 112, "father_id" => 250, "value" => 251),
            array("id" => 113, "father_id" => 252, "value" => 253),
            array("id" => 114, "father_id" => 254, "value" => 255),
            array("id" => 115, "father_id" => 256, "value" => 257),
            array("id" => 116, "father_id" => 258, "value" => 259),
            array("id" => 117, "father_id" => 258, "value" => 260),
            array("id" => 118, "father_id" => 261, "value" => 262),
            array("id" => 119, "father_id" => 263, "value" => 264),
            array("id" => 120, "father_id" => 263, "value" => 265),
            array("id" => 121, "father_id" => 266, "value" => 267),
            array("id" => 122, "father_id" => 266, "value" => 268),
            array("id" => 123, "father_id" => 266, "value" => 269),
            array("id" => 124, "father_id" => 270, "value" => 271),
            array("id" => 125, "father_id" => 270, "value" => 272),
            array("id" => 126, "father_id" => 270, "value" => 273),
            array("id" => 127, "father_id" => 274, "value" => 275),
            array("id" => 128, "father_id" => 274, "value" => 276),
            array("id" => 129, "father_id" => 274, "value" => 277),
            array("id" => 130, "father_id" => 274, "value" => 278),
            array("id" => 131, "father_id" => 274, "value" => 279),
            array("id" => 132, "father_id" => 274, "value" => 280),
            array("id" => 133, "father_id" => 274, "value" => 281),
            array("id" => 134, "father_id" => 282, "value" => 283),
            array("id" => 135, "father_id" => 284, "value" => 285),
            array("id" => 136, "father_id" => 286, "value" => 287),
            array("id" => 137, "father_id" => 342, "value" => 343),
            array("id" => 138, "father_id" => 289, "value" => 290),
            array("id" => 139, "father_id" => 289, "value" => 291),
            array("id" => 140, "father_id" => 289, "value" => 292),
            array("id" => 141, "father_id" => 289, "value" => 293),
            array("id" => 142, "father_id" => 289, "value" => 294),
            array("id" => 143, "father_id" => 289, "value" => 295),
            array("id" => 144, "father_id" => 296, "value" => 297),
            array("id" => 145, "father_id" => 296, "value" => 298),
            array("id" => 146, "father_id" => 296, "value" => 299),
            array("id" => 147, "father_id" => 296, "value" => 300),
            array("id" => 148, "father_id" => 296, "value" => 301),
            array("id" => 149, "father_id" => 296, "value" => 302),
            array("id" => 150, "father_id" => 296, "value" => 303),
            array("id" => 151, "father_id" => 296, "value" => 304),
            array("id" => 152, "father_id" => 296, "value" => 305),
            array("id" => 153, "father_id" => 296, "value" => 306),
            array("id" => 154, "father_id" => 296, "value" => 307),
            array("id" => 155, "father_id" => 296, "value" => 308),
            array("id" => 156, "father_id" => 296, "value" => 309),
            array("id" => 157, "father_id" => 296, "value" => 310),
            array("id" => 158, "father_id" => 296, "value" => 311),
            array("id" => 159, "father_id" => 296, "value" => 312),
            array("id" => 160, "father_id" => 296, "value" => 313),
            array("id" => 161, "father_id" => 314, "value" => 315),
            array("id" => 162, "father_id" => 314, "value" => 316),
            array("id" => 163, "father_id" => 314, "value" => 317),
            array("id" => 164, "father_id" => 318, "value" => 319),
            array("id" => 165, "father_id" => 320, "value" => 321),
            array("id" => 166, "father_id" => 320, "value" => 322),
            array("id" => 167, "father_id" => 320, "value" => 323),
            array("id" => 168, "father_id" => 320, "value" => 324),
            array("id" => 169, "father_id" => 320, "value" => 325),
            array("id" => 170, "father_id" => 320, "value" => 326),
            array("id" => 171, "father_id" => 327, "value" => 328),
            array("id" => 172, "father_id" => 329, "value" => 330),
            array("id" => 173, "father_id" => 329, "value" => 331),
            array("id" => 174, "father_id" => 329, "value" => 332),
            array("id" => 175, "father_id" => 333, "value" => 334),
            array("id" => 176, "father_id" => 333, "value" => 335),
            array("id" => 177, "father_id" => 333, "value" => 336),
            array("id" => 178, "father_id" => 333, "value" => 337),
            array("id" => 179, "father_id" => 338, "value" => 339),
            array("id" => 180, "father_id" => 340, "value" => 341),
            array("id" => 181, "father_id" => 344, "value" => 345),
            array("id" => 182, "father_id" => 344, "value" => 346),
            array("id" => 183, "father_id" => 347, "value" => 348),
            array("id" => 184, "father_id" => 347, "value" => 349),
            array("id" => 185, "father_id" => 350, "value" => 351),
            array("id" => 186, "father_id" => 350, "value" => 352),
            array("id" => 187, "father_id" => 353, "value" => 354),
            array("id" => 188, "father_id" => 353, "value" => 355),
            array("id" => 189, "father_id" => 356, "value" => 357),
            array("id" => 190, "father_id" => 358, "value" => 359),
            array("id" => 191, "father_id" => 358, "value" => 360),
            array("id" => 192, "father_id" => 358, "value" => 361),
            array("id" => 193, "father_id" => 358, "value" => 362),
            array("id" => 194, "father_id" => 358, "value" => 363),
            array("id" => 195, "father_id" => 364, "value" => 365),
            array("id" => 196, "father_id" => 366, "value" => 367),
            array("id" => 197, "father_id" => 366, "value" => 368),
            array("id" => 198, "father_id" => 369, "value" => 370),
            array("id" => 199, "father_id" => 371, "value" => 372),
            array("id" => 200, "father_id" => 373, "value" => 374),
            array("id" => 201, "father_id" => 375, "value" => 376),
            array("id" => 202, "father_id" => 377, "value" => 378),
            array("id" => 203, "father_id" => 379, "value" => 380),
            array("id" => 204, "father_id" => 381, "value" => 382),
            array("id" => 205, "father_id" => 383, "value" => 384),
            array("id" => 206, "father_id" => 385, "value" => 386),
            array("id" => 207, "father_id" => 387, "value" => 388),
            array("id" => 208, "father_id" => 389, "value" => 390),
            array("id" => 209, "father_id" => 391, "value" => 392),
            array("id" => 210, "father_id" => 393, "value" => 394),
            array("id" => 211, "father_id" => 395, "value" => 396),
            array("id" => 212, "father_id" => 397, "value" => 398),
            array("id" => 213, "father_id" => 399, "value" => 400),
            array("id" => 214, "father_id" => 401, "value" => 402),
            array("id" => 215, "father_id" => 401, "value" => 403),
            array("id" => 216, "father_id" => 401, "value" => 404),
            array("id" => 217, "father_id" => 405, "value" => 406),
            array("id" => 218, "father_id" => 407, "value" => 408),
            array("id" => 219, "father_id" => 407, "value" => 409),
            array("id" => 220, "father_id" => 407, "value" => 410),
            array("id" => 221, "father_id" => 411, "value" => 412),
            array("id" => 222, "father_id" => 411, "value" => 413),
            array("id" => 223, "father_id" => 411, "value" => 414),
            array("id" => 224, "father_id" => 415, "value" => 416),
            array("id" => 225, "father_id" => 415, "value" => 417),
            array("id" => 226, "father_id" => 418, "value" => 419),
            array("id" => 227, "father_id" => 418, "value" => 420),
            array("id" => 228, "father_id" => 421, "value" => 422),
            array("id" => 229, "father_id" => 421, "value" => 423),
            array("id" => 230, "father_id" => 425, "value" => 426),
            array("id" => 231, "father_id" => 425, "value" => 427),
            array("id" => 232, "father_id" => 425, "value" => 428),
            array("id" => 233, "father_id" => 425, "value" => 429),
            array("id" => 234, "father_id" => 425, "value" => 430),
            array("id" => 235, "father_id" => 425, "value" => 431),
            array("id" => 236, "father_id" => 425, "value" => 432),
            array("id" => 237, "father_id" => 425, "value" => 433),
            array("id" => 238, "father_id" => 425, "value" => 434),
            array("id" => 239, "father_id" => 425, "value" => 435),
            array("id" => 240, "father_id" => 425, "value" => 436),
            array("id" => 241, "father_id" => 437, "value" => 438),
            array("id" => 242, "father_id" => 437, "value" => 439),
            array("id" => 243, "father_id" => 437, "value" => 440),
            array("id" => 244, "father_id" => 437, "value" => 441),
            array("id" => 245, "father_id" => 437, "value" => 442),
            array("id" => 246, "father_id" => 437, "value" => 443),
            array("id" => 247, "father_id" => 444, "value" => 445),
            array("id" => 248, "father_id" => 444, "value" => 446),
            array("id" => 249, "father_id" => 447, "value" => 448),
            array("id" => 250, "father_id" => 449, "value" => 450),
            array("id" => 251, "father_id" => 449, "value" => 451),
            array("id" => 252, "father_id" => 449, "value" => 452),
            array("id" => 253, "father_id" => 453, "value" => 454),
            array("id" => 254, "father_id" => 453, "value" => 455),
            array("id" => 255, "father_id" => 453, "value" => 456),
            array("id" => 256, "father_id" => 453, "value" => 457),
            array("id" => 257, "father_id" => 458, "value" => 459),
            array("id" => 258, "father_id" => 458, "value" => 460),
            array("id" => 259, "father_id" => 458, "value" => 461),
            array("id" => 260, "father_id" => 462, "value" => 463),
            array("id" => 261, "father_id" => 462, "value" => 464),
            array("id" => 262, "father_id" => 462, "value" => 465),
            array("id" => 263, "father_id" => 466, "value" => 467),
            array("id" => 264, "father_id" => 468, "value" => 469),
            array("id" => 265, "father_id" => 468, "value" => 470),
            array("id" => 266, "father_id" => 468, "value" => 471),
            array("id" => 267, "father_id" => 468, "value" => 472),
            array("id" => 268, "father_id" => 468, "value" => 473),
            array("id" => 269, "father_id" => 474, "value" => 475),
            array("id" => 270, "father_id" => 474, "value" => 476),
            array("id" => 271, "father_id" => 474, "value" => 477),
            array("id" => 272, "father_id" => 478, "value" => 479),
            array("id" => 273, "father_id" => 478, "value" => 480),
            array("id" => 274, "father_id" => 478, "value" => 481),
            array("id" => 275, "father_id" => 478, "value" => 482),
            array("id" => 276, "father_id" => 478, "value" => 483),
            array("id" => 277, "father_id" => 478, "value" => 484),
            array("id" => 278, "father_id" => 485, "value" => 486),
            array("id" => 279, "father_id" => 485, "value" => 487),
            array("id" => 280, "father_id" => 488, "value" => 489),
            array("id" => 281, "father_id" => 488, "value" => 490),
            array("id" => 282, "father_id" => 488, "value" => 491),
            array("id" => 283, "father_id" => 488, "value" => 492),
            array("id" => 284, "father_id" => 493, "value" => 494),
            array("id" => 285, "father_id" => 493, "value" => 495),
            array("id" => 286, "father_id" => 496, "value" => 497),
            array("id" => 287, "father_id" => 496, "value" => 498),
            array("id" => 288, "father_id" => 499, "value" => 500),
            array("id" => 289, "father_id" => 499, "value" => 501),
            array("id" => 290, "father_id" => 499, "value" => 502),
            array("id" => 291, "father_id" => 503, "value" => 504),
            array("id" => 292, "father_id" => 503, "value" => 505),
            array("id" => 293, "father_id" => 506, "value" => 507),
            array("id" => 294, "father_id" => 506, "value" => 508),
            array("id" => 295, "father_id" => 509, "value" => 510),
            array("id" => 296, "father_id" => 509, "value" => 511),
            array("id" => 297, "father_id" => 512, "value" => 513),
            array("id" => 298, "father_id" => 512, "value" => 514),
            array("id" => 299, "father_id" => 515, "value" => 516),
            array("id" => 300, "father_id" => 517, "value" => 518),
            array("id" => 301, "father_id" => 517, "value" => 519),
            array("id" => 302, "father_id" => 520, "value" => 521),
            array("id" => 303, "father_id" => 520, "value" => 522),
            array("id" => 304, "father_id" => 523, "value" => 524),
            array("id" => 305, "father_id" => 525, "value" => 526),
            array("id" => 306, "father_id" => 527, "value" => 528),
            array("id" => 307, "father_id" => 529, "value" => 530),
            array("id" => 308, "father_id" => 531, "value" => 532),
            array("id" => 309, "father_id" => 533, "value" => 534),
            array("id" => 310, "father_id" => 535, "value" => 536),
            array("id" => 311, "father_id" => 537, "value" => 538),
            array("id" => 312, "father_id" => 539, "value" => 540),
            array("id" => 313, "father_id" => 541, "value" => 542),
            array("id" => 314, "father_id" => 543, "value" => 544),
            array("id" => 315, "father_id" => 545, "value" => 546),
            array("id" => 316, "father_id" => 547, "value" => 548),
            array("id" => 317, "father_id" => 549, "value" => 550),
            array("id" => 318, "father_id" => 551, "value" => 552),
            array("id" => 319, "father_id" => 553, "value" => 554),
            array("id" => 320, "father_id" => 555, "value" => 556),
            array("id" => 321, "father_id" => 555, "value" => 557),
            array("id" => 322, "father_id" => 558, "value" => 559),
            array("id" => 323, "father_id" => 560, "value" => 561),
            array("id" => 324, "father_id" => 560, "value" => 562),
            array("id" => 325, "father_id" => 563, "value" => 564),
            array("id" => 326, "father_id" => 563, "value" => 565),
            array("id" => 327, "father_id" => 566, "value" => 567),
            array("id" => 328, "father_id" => 566, "value" => 568),
            array("id" => 329, "father_id" => 569, "value" => 570),
            array("id" => 330, "father_id" => 569, "value" => 571),
            array("id" => 331, "father_id" => 572, "value" => 573),
            array("id" => 332, "father_id" => 572, "value" => 574),
            array("id" => 333, "father_id" => 572, "value" => 575),
            array("id" => 334, "father_id" => 572, "value" => 576),
            array("id" => 335, "father_id" => 572, "value" => 577),
            array("id" => 336, "father_id" => 572, "value" => 578),
            array("id" => 337, "father_id" => 572, "value" => 579),
            array("id" => 338, "father_id" => 572, "value" => 580),
            array("id" => 339, "father_id" => 581, "value" => 582),
            array("id" => 340, "father_id" => 583, "value" => 584),
            array("id" => 341, "father_id" => 585, "value" => 586),
            array("id" => 342, "father_id" => 588, "value" => 589),
            array("id" => 343, "father_id" => 588, "value" => 590),
            array("id" => 344, "father_id" => 588, "value" => 591),
            array("id" => 345, "father_id" => 592, "value" => 593),
            array("id" => 346, "father_id" => 594, "value" => 595),
            array("id" => 347, "father_id" => 596, "value" => 597),
            array("id" => 348, "father_id" => 596, "value" => 598),
            array("id" => 349, "father_id" => 596, "value" => 599),
            array("id" => 350, "father_id" => 600, "value" => 601),
            array("id" => 351, "father_id" => 602, "value" => 603),
            array("id" => 352, "father_id" => 604, "value" => 605),
            array("id" => 353, "father_id" => 606, "value" => 607),
            array("id" => 354, "father_id" => 606, "value" => 608),
            array("id" => 355, "father_id" => 609, "value" => 610),
            array("id" => 356, "father_id" => 609, "value" => 611),
            array("id" => 357, "father_id" => 609, "value" => 612),
            array("id" => 358, "father_id" => 609, "value" => 613),
            array("id" => 359, "father_id" => 614, "value" => 615),
            array("id" => 360, "father_id" => 616, "value" => 617),
            array("id" => 361, "father_id" => 618, "value" => 619),
            array("id" => 362, "father_id" => 620, "value" => 621),
            array("id" => 363, "father_id" => 620, "value" => 622),
            array("id" => 364, "father_id" => 620, "value" => 623),
            array("id" => 365, "father_id" => 620, "value" => 624),
            array("id" => 366, "father_id" => 620, "value" => 625),
            array("id" => 367, "father_id" => 620, "value" => 626),
            array("id" => 368, "father_id" => 627, "value" => 628),
            array("id" => 369, "father_id" => 627, "value" => 629),
            array("id" => 370, "father_id" => 627, "value" => 630),
            array("id" => 371, "father_id" => 627, "value" => 631),
            array("id" => 372, "father_id" => 627, "value" => 632),
            array("id" => 373, "father_id" => 633, "value" => 634),
            array("id" => 374, "father_id" => 633, "value" => 635),
            array("id" => 375, "father_id" => 633, "value" => 636),
            array("id" => 376, "father_id" => 633, "value" => 637),
            array("id" => 377, "father_id" => 633, "value" => 638),
            array("id" => 378, "father_id" => 639, "value" => 640),
            array("id" => 379, "father_id" => 639, "value" => 641),
            array("id" => 380, "father_id" => 639, "value" => 642),
            array("id" => 381, "father_id" => 639, "value" => 643),
            array("id" => 382, "father_id" => 639, "value" => 644),
            array("id" => 383, "father_id" => 639, "value" => 645),
            array("id" => 384, "father_id" => 639, "value" => 646),
            array("id" => 385, "father_id" => 639, "value" => 647),
            array("id" => 386, "father_id" => 648, "value" => 649),
            array("id" => 387, "father_id" => 651, "value" => 652),
            array("id" => 388, "father_id" => 653, "value" => 654),
            array("id" => 389, "father_id" => 653, "value" => 655),
            array("id" => 390, "father_id" => 653, "value" => 656),
            array("id" => 391, "father_id" => 653, "value" => 657),
            array("id" => 392, "father_id" => 653, "value" => 658),
            array("id" => 393, "father_id" => 653, "value" => 659),
            array("id" => 394, "father_id" => 653, "value" => 660),
            array("id" => 395, "father_id" => 661, "value" => 662),
            array("id" => 396, "father_id" => 661, "value" => 663),
            array("id" => 397, "father_id" => 661, "value" => 664),
            array("id" => 398, "father_id" => 665, "value" => 666),
            array("id" => 399, "father_id" => 665, "value" => 667),
            array("id" => 400, "father_id" => 665, "value" => 668),
            array("id" => 401, "father_id" => 669, "value" => 670),
            array("id" => 402, "father_id" => 669, "value" => 671),
            array("id" => 403, "father_id" => 672, "value" => 673),
            array("id" => 404, "father_id" => 672, "value" => 674),
            array("id" => 405, "father_id" => 672, "value" => 675),
            array("id" => 406, "father_id" => 672, "value" => 676),
            array("id" => 407, "father_id" => 677, "value" => 678),
            array("id" => 408, "father_id" => 677, "value" => 679),
            array("id" => 409, "father_id" => 677, "value" => 680),
            array("id" => 410, "father_id" => 677, "value" => 681),
            array("id" => 411, "father_id" => 677, "value" => 682),
            array("id" => 412, "father_id" => 677, "value" => 683),
            array("id" => 413, "father_id" => 677, "value" => 684),
            array("id" => 414, "father_id" => 677, "value" => 685),
            array("id" => 415, "father_id" => 686, "value" => 687),
            array("id" => 416, "father_id" => 686, "value" => 688),
            array("id" => 417, "father_id" => 689, "value" => 690),
            array("id" => 418, "father_id" => 691, "value" => 692),
            array("id" => 419, "father_id" => 693, "value" => 694),
            array("id" => 420, "father_id" => 695, "value" => 696),
            array("id" => 421, "father_id" => 698, "value" => 699),
            array("id" => 422, "father_id" => 698, "value" => 700),
            array("id" => 423, "father_id" => 698, "value" => 701),
            array("id" => 424, "father_id" => 698, "value" => 702),
            array("id" => 425, "father_id" => 698, "value" => 703),
            array("id" => 426, "father_id" => 698, "value" => 704),
            array("id" => 427, "father_id" => 698, "value" => 705),
            array("id" => 428, "father_id" => 698, "value" => 706),
            array("id" => 429, "father_id" => 698, "value" => 707),
            array("id" => 430, "father_id" => 698, "value" => 708),
            array("id" => 431, "father_id" => 698, "value" => 709),
            array("id" => 432, "father_id" => 710, "value" => 711),
            array("id" => 433, "father_id" => 710, "value" => 712),
            array("id" => 434, "father_id" => 710, "value" => 713),
            array("id" => 435, "father_id" => 710, "value" => 714),
            array("id" => 436, "father_id" => 710, "value" => 715),
            array("id" => 437, "father_id" => 716, "value" => 717),
            array("id" => 438, "father_id" => 716, "value" => 718),
            array("id" => 439, "father_id" => 716, "value" => 719),
            array("id" => 440, "father_id" => 716, "value" => 720),
            array("id" => 441, "father_id" => 716, "value" => 721),
            array("id" => 442, "father_id" => 853, "value" => 856),
            array("id" => 443, "father_id" => 716, "value" => 722),
            array("id" => 444, "father_id" => 716, "value" => 723),
            array("id" => 445, "father_id" => 716, "value" => 724),
            array("id" => 446, "father_id" => 716, "value" => 725),
            array("id" => 447, "father_id" => 716, "value" => 726),
            array("id" => 448, "father_id" => 716, "value" => 727),
            array("id" => 449, "father_id" => 728, "value" => 729),
            array("id" => 450, "father_id" => 728, "value" => 730),
            array("id" => 451, "father_id" => 728, "value" => 731),
            array("id" => 452, "father_id" => 728, "value" => 732),
            array("id" => 453, "father_id" => 728, "value" => 733),
            array("id" => 454, "father_id" => 728, "value" => 734),
            array("id" => 455, "father_id" => 728, "value" => 735),
            array("id" => 456, "father_id" => 736, "value" => 737),
            array("id" => 457, "father_id" => 738, "value" => 739),
            array("id" => 458, "father_id" => 738, "value" => 740),
            array("id" => 459, "father_id" => 738, "value" => 741),
            array("id" => 460, "father_id" => 738, "value" => 742),
            array("id" => 461, "father_id" => 738, "value" => 743),
            array("id" => 462, "father_id" => 744, "value" => 745),
            array("id" => 463, "father_id" => 746, "value" => 747),
            array("id" => 464, "father_id" => 746, "value" => 748),
            array("id" => 465, "father_id" => 746, "value" => 749),
            array("id" => 466, "father_id" => 746, "value" => 750),
            array("id" => 467, "father_id" => 746, "value" => 751),
            array("id" => 468, "father_id" => 752, "value" => 753),
            array("id" => 469, "father_id" => 752, "value" => 754),
            array("id" => 470, "father_id" => 752, "value" => 755),
            array("id" => 471, "father_id" => 756, "value" => 757),
            array("id" => 472, "father_id" => 758, "value" => 759),
            array("id" => 473, "father_id" => 760, "value" => 761),
            array("id" => 474, "father_id" => 762, "value" => 763),
            array("id" => 475, "father_id" => 764, "value" => 765),
            array("id" => 476, "father_id" => 766, "value" => 767),
            array("id" => 477, "father_id" => 768, "value" => 769),
            array("id" => 478, "father_id" => 768, "value" => 770),
            array("id" => 479, "father_id" => 768, "value" => 771),
            array("id" => 480, "father_id" => 773, "value" => 774),
            array("id" => 481, "father_id" => 773, "value" => 775),
            array("id" => 482, "father_id" => 776, "value" => 777),
            array("id" => 483, "father_id" => 778, "value" => 779),
            array("id" => 484, "father_id" => 778, "value" => 780),
            array("id" => 485, "father_id" => 853, "value" => 857),
            array("id" => 486, "father_id" => 781, "value" => 782),
            array("id" => 487, "father_id" => 781, "value" => 783),
            array("id" => 488, "father_id" => 784, "value" => 785),
            array("id" => 489, "father_id" => 784, "value" => 786),
            array("id" => 490, "father_id" => 784, "value" => 787),
            array("id" => 491, "father_id" => 784, "value" => 788),
            array("id" => 492, "father_id" => 784, "value" => 789),
            array("id" => 493, "father_id" => 784, "value" => 790),
            array("id" => 494, "father_id" => 791, "value" => 792),
            array("id" => 495, "father_id" => 791, "value" => 793),
            array("id" => 496, "father_id" => 794, "value" => 795),
            array("id" => 497, "father_id" => 794, "value" => 796),
            array("id" => 498, "father_id" => 794, "value" => 797),
            array("id" => 499, "father_id" => 800, "value" => 801),
            array("id" => 500, "father_id" => 800, "value" => 802),
            array("id" => 501, "father_id" => 803, "value" => 804),
            array("id" => 502, "father_id" => 803, "value" => 805),
            array("id" => 503, "father_id" => 806, "value" => 807),
            array("id" => 504, "father_id" => 808, "value" => 809),
            array("id" => 505, "father_id" => 810, "value" => 811),
            array("id" => 506, "father_id" => 812, "value" => 813),
            array("id" => 507, "father_id" => 814, "value" => 815),
            array("id" => 508, "father_id" => 816, "value" => 817),
            array("id" => 509, "father_id" => 818, "value" => 819),
            array("id" => 510, "father_id" => 818, "value" => 820),
            array("id" => 511, "father_id" => 818, "value" => 821),
            array("id" => 512, "father_id" => 822, "value" => 823),
            array("id" => 513, "father_id" => 822, "value" => 824),
            array("id" => 514, "father_id" => 822, "value" => 825),
            array("id" => 515, "father_id" => 822, "value" => 826),
            array("id" => 516, "father_id" => 822, "value" => 827),
            array("id" => 517, "father_id" => 822, "value" => 828),
            array("id" => 518, "father_id" => 822, "value" => 829),
            array("id" => 519, "father_id" => 822, "value" => 830),
            array("id" => 520, "father_id" => 822, "value" => 831),
            array("id" => 521, "father_id" => 822, "value" => 832),
            array("id" => 522, "father_id" => 822, "value" => 833),
            array("id" => 523, "father_id" => 822, "value" => 834),
            array("id" => 524, "father_id" => 822, "value" => 835),
            array("id" => 525, "father_id" => 822, "value" => 836),
            array("id" => 526, "father_id" => 822, "value" => 837),
            array("id" => 527, "father_id" => 822, "value" => 838),
            array("id" => 528, "father_id" => 839, "value" => 840),
            array("id" => 529, "father_id" => 839, "value" => 841),
            array("id" => 530, "father_id" => 839, "value" => 842),
            array("id" => 531, "father_id" => 843, "value" => 844),
            array("id" => 532, "father_id" => 843, "value" => 845),
            array("id" => 533, "father_id" => 843, "value" => 846),
            array("id" => 534, "father_id" => 847, "value" => 848),
            array("id" => 535, "father_id" => 847, "value" => 849),
            array("id" => 536, "father_id" => 850, "value" => 851),
            array("id" => 537, "father_id" => 850, "value" => 852),
            array("id" => 538, "father_id" => 853, "value" => 854),
            array("id" => 539, "father_id" => 853, "value" => 855),
            array("id" => 540, "father_id" => 853, "value" => 858),
            array("id" => 541, "father_id" => 859, "value" => 860),
            array("id" => 542, "father_id" => 859, "value" => 861),
            array("id" => 543, "father_id" => 859, "value" => 862),
            array("id" => 544, "father_id" => 863, "value" => 864),
            array("id" => 545, "father_id" => 865, "value" => 866),
            array("id" => 546, "father_id" => 865, "value" => 867),
            array("id" => 547, "father_id" => 865, "value" => 868),
            array("id" => 548, "father_id" => 865, "value" => 869),
            array("id" => 549, "father_id" => 870, "value" => 871),
            array("id" => 550, "father_id" => 872, "value" => 873),
        );
        $value = null;
        foreach ($list as $item) {
            if (
                $item["id"] == $indicator_national_id
                && $product_id == $item["father_id"]
            ) {
                $value = $item;
            }
        }
        return $value;
    }
    public function nationalProgramList(string $national_program_id)
    {
        $list = array(
            array("id" => 1, "value" => 90),
            array("id" => 2, "value" => 168),
            array("id" => 3, "value" => 288),
            array("id" => 4, "value" => 424),
            array("id" => 5, "value" => 587),
            array("id" => 6, "value" => 650),
            array("id" => 7, "value" => 697),
            array("id" => 8, "value" => 772),
            array("id" => 9, "value" => 798),
            array("id" => 10, "value" => 799)
        );
        $value = null;
        foreach ($list as $key => $item) {
            if ($item["id"] == $national_program_id) {
                $value = $item;
            }
        }
        return $value;
    }
}
