<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Models\File;
use App\Models\Indicador_Geodata;
use App\Models\Indicator;
use App\Models\Indicator_activity;
use App\Models\Other_data;
use App\Models\Variable;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\DB as FacadesDB;
use stdClass;
use Validator;

/**
 * Class IndicatorController
 * @package App\Http\Controllers
 */
class IndicatorController extends UtilsController
{
    /**
     * Valida y obtiene todos los indicadores propios
     * de una CAR
     */
    public function index(Request $request)
    {
        try {
            $group_id = JWTAuth::toUser($request->token)["group_id"];
            $indicators = Indicator::where('group_id', $group_id)
                ->where('calcule_type', 3)->get();
            $response = new ApiResponse(200, "Success", $indicators);
        } catch (\Exception $e) {
            UtilsController::setTransactionalLog($request, $e);
            $response = new ApiResponse(500, "Error", ["messages" =>  'Internal Server Error ']);
        }
        return $response->response();
    }
    /**
     * Obtiene la informacion de un indicador propio de una CAR
     */
    public function show(Request $request)
    {
        try {
            $validator = $this->validateIndicatorRequest($request);
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $group_id = JWTAuth::toUser($request->token)["group_id"];
                $indicator = Indicator::where('group_id', $group_id)
                    ->where('calcule_type', 3)->where('calcule_type', 3)
                    ->where('indicator_code', $request->indicator_code)->first();
                if ($indicator) {
                    $response_info = $indicator;
                    $errors = false;
                } else {
                    $response_info->errors = ["El indicador con code " . $request->indicator_code . " no existe."];
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
     * Valida y crea uno o varios indicadores propios de una CAR
     */
    public function store(Request $request)
    {
        try {
            $validator = $this->validateIndicatorRequest($request);
            $errors = false;
            $response_info = [];
            $response_info["message"] = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info["errors"] = $validator->messages();
                $errors = true;
            } else {
                $group_id = JWTAuth::toUser($request->token)["group_id"];
                $indicator_searched = Indicator::where('group_id', $group_id)
                    ->where('indicator_code', $request->indicator_code)->first();
                if ($indicator_searched) {
                    $response_info["errors"] = ["Ya existe un indicador con este código  "];
                    $errors = true;
                } else {
                    $objectiveController = new ObjectiveProductController;
                    $internal_unit_id = $objectiveController->unitList($request["unit_id"]);
                    if (!$internal_unit_id) {
                        $response_info["errors"] = ["El código de la unidad no corresponde con ninguno"];
                        $errors = true;
                    } else {
                        FacadesDB::beginTransaction();
                        $arrayIndicator = [
                            "type" => 9,
                            "calcule_type" => 3,
                            "name" => $request->name,
                            "abbreviated_name" => $request->abbreviated_name,
                            "definition" => $request->definition,
                            "url" =>  $request->url ?: null,
                            "unit_id" => $internal_unit_id["value"],
                            "result_name" => $request->result_name,
                            "group_id" => $group_id,
                            "indicator_code" => $request->indicator_code
                        ];
                        $indicator = Indicator::create($arrayIndicator);
                        $arrayVariable = [
                            "numerator_name" => $request->numerator_name,
                            "abbreviated_numerator" => $request->abbreviated_numerator_name,
                            "numerator_in" => $request->numerator_type == 1 ? 27 : 28,
                            "denominator_name" => $request->denominator_name,
                            "abbreviated_denominator" => $request->abbreviated_denominator_name,
                            "denominator_in" => $request->denominator_type == 1 ? 27 : 28,
                            "indicator_id" => $indicator->id,
                        ];
                        $variable_created = Variable::create($arrayVariable);
                        if ($request->geographic_layer) {
                            $arrayIndicador_Geodata = [
                                'variable_id' => $variable_created->id,
                                'master_geodata_id' => $request->geographic_layer
                            ];
                            Indicador_Geodata::create($arrayIndicador_Geodata);
                        }
                        if ($request->complementary_information) {
                            $size_variables = sizeof($request->complementary_information);
                            foreach ($request->complementary_information as $variableKey => $variable) {
                                $validatorRequest = $this->validateInternalIndicatorRequest($variable);
                                if ($validatorRequest->fails()) {
                                    $response_info["variable" . $variableKey]["message"] = Controller::$str_struct_err;
                                    $response_info["variable" . $variableKey]["errors"] = $validatorRequest->messages();
                                    $errors = true;
                                } else {
                                    $arrayOtherData = [
                                        "variable_name" => $variable["variable_name"],
                                        "type" => $variable["type"] == 1 ? 19 : 20,
                                        "indicator_id" => $indicator->id
                                    ];
                                    Other_data::create($arrayOtherData);
                                }
                                if (($size_variables - 1) == ($variableKey)) {
                                    if ($errors != true) {
                                        $response_info["message"] = "Se creó el indicador " . $indicator->indicator_code . " correctamente";
                                    }
                                }
                            }
                        } else {
                            $errors = false;
                            $response_info["message"] = "Se creó el indicador " . $indicator->indicator_code . " correctamente";
                        }
                        FacadesDB::commit();
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
     * Valida y actualiza un indicador propio de una CAR
     */
    public function update(Request $request)
    {
        try {
            $validator = $this->validateIndicatorRequest($request);
            $errors = true;
            $response_info = [];
            $response_info["message"] = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info["errors"] = $validator->messages();
            } else {
                $group_id = JWTAuth::toUser($request->token)["group_id"];
                $indicator_searched = Indicator::where('group_id', $group_id)
                    ->where('indicator_code', $request->indicator_code)->first();
                if ($indicator_searched) {
                    $objectiveController = new ObjectiveProductController;
                    $internal_unit_id = $objectiveController->unitList($request["unit_id"]);
                    if (!$internal_unit_id) {
                        $response_info["errors"] = ["El código de la unidad no corresponde con ninguno"];
                    } else {
                        FacadesDB::beginTransaction();
                        $indicator_searched->name = $request->name ?: $indicator_searched->name;
                        $indicator_searched->abbreviated_name = $request->abbreviated_name ?: $indicator_searched->abbreviated_name;
                        $indicator_searched->definition = $request->definition ?: $indicator_searched->definition;
                        $indicator_searched->url = $request->url ?: $indicator_searched->url;
                        $indicator_searched->unit_id = $internal_unit_id["value"];
                        $indicator_searched->result_name = $request->result_name ?: $indicator_searched->result_name;
                        $variable_searched = Variable::where('indicator_id', $indicator_searched->id)->first();
                        $variable_searched->abbreviated_numerator =  $request->abbreviated_numerator_name ?: $variable_searched->abbreviated_numerator;
                        $variable_searched->numerator_in = $request->numerator_type ? ($request->numerator_type == 1 ? 27 : 28) : $variable_searched->numerator_in;
                        $variable_searched->denominator_name =  $request->denominator_name ?: $variable_searched->denominator_name;
                        $variable_searched->abbreviated_denominator =  $request->abbreviated_denominator_name ?: $variable_searched->abbreviated_denominator;
                        $variable_searched->denominator_in =  $request->denominator_type ? ($request->denominator_type == 1 ? 27 : 28) : $variable_searched->denominator_in;
                        $indicator_searched->save();
                        $variable_searched->save();
                        if ($request->geographic_layer) {
                            $indicator_geodata_created = Indicador_Geodata::where($indicator_searched->id)->first();
                            if (!$indicator_geodata_created) {
                                $arrayIndicador_Geodata = [
                                    'variable_id' => $variable_searched->id,
                                    'master_geodata_id' => $request->geographic_layer
                                ];
                                Indicador_Geodata::create($arrayIndicador_Geodata);
                            } else {
                                $indicator_geodata_created->master_geodata_id = $request->geographic_layer;
                            }
                        }
                        if ($request->complementary_information) {
                            Other_data::where('indicator_id', $indicator_searched->id)->delete();
                            $size_variables = sizeof($request->complementary_information);
                            foreach ($request->complementary_information as $variableKey => $variable) {
                                $validatorRequest = $this->validateInternalIndicatorRequest($variable);
                                if ($validatorRequest->fails()) {
                                    $response_info["variable" . $variableKey]["message"] = Controller::$str_struct_err;
                                    $response_info["variable" . $variableKey]["errors"] = $validatorRequest->messages();
                                    $errors = true;
                                } else {
                                    $arrayOtherData = [
                                        "variable_name" => $variable["variable_name"],
                                        "type" => $variable["type"] == 1 ? 19 : 20,
                                        "indicator_id" => $indicator_searched->id
                                    ];
                                    Other_data::create($arrayOtherData);
                                }
                                if (($size_variables - 1) == ($variableKey)) {
                                    if ($errors != true) {
                                        $response_info["message"] = "Se actualizó el indicador " . $indicator_searched->indicator_code . " correctamente";
                                    }
                                }
                            }
                        } else {
                            $errors = false;
                            $response_info["message"] = "Se actualizó el indicador " . $indicator_searched->indicator_code . " correctamente";
                        }
                        FacadesDB::commit();
                    }
                } else {
                    $response_info["errors"] = ["No existe un indicador con este código  "];
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
     * Valida y elimina un indicador propio de una CAR
     */
    public function destroy(Request $request)
    {
        try {
            $validator = $this->validateIndicatorRequest($request);
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $group_id = JWTAuth::toUser($request->token)["group_id"];
                $indicator = Indicator::where('indicator_code', $request->indicator_code)
                    ->where('group_id', $group_id)->first();
                if ($indicator) {
                    $indicator_activities = Indicator_activity::where('indicator_id', $indicator->id)->count();
                    $files = File::where('indicator_id', $indicator->id)->count();
                    if ($indicator_activities == 0 && $files == 0) {
                        FacadesDB::beginTransaction();
                        $variable = Variable::where('indicator_id', $indicator->id)->first();
                        Indicador_Geodata::where('variable_id', $variable->id)->delete();
                        Other_data::where('indicator_id', $indicator->id)->delete();
                        Variable::where('indicator_id', $indicator->id)->delete();
                        $indicator->delete();
                        $response_info->message = "Indicador eliminado";
                        $errors = false;
                        FacadesDB::commit();
                    } else {
                        $response_info->errors = ["El indicador con indicator_code " . $request->indicator_code . " no puede tener actividades ni archivos relacionadas"];
                    }
                } else {
                    $response_info->errors = ["El indicador con indicator_code " . $request->indicator_code . " no existe."];
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
     * antes de pasar a la funcion principal para obtener, crear
     * , actualizar y eliminar indicadores propios
     */
    private function validateIndicatorRequest($request)
    {
        switch ($request->method()) {
            case "POST":
                $rules = [
                    'indicator_code' => 'required',
                    'name' => 'required|min:3',
                    'abbreviated_name' => 'required',
                    'definition' => 'required',
                    'url' => 'nullable|url',
                    'unit_id' => 'required|numeric',
                    'result_name' => 'required',
                    'numerator_type' => 'required|numeric|min:1|max:2',
                    'numerator_name' => 'required',
                    'abbreviated_numerator_name' => 'required',
                    'denominator_type' => 'required|numeric|min:1|max:2',
                    'denominator_name' => 'required',
                    'abbreviated_denominator_name' => 'required',
                    'complementary_information' => 'nullable|array',
                    'geographic_layer' => 'nullable|numeric|min:1|max:42'
                ];
                $messages = [
                    'indicator_code.required' => ':attribute es requerido.',
                    'name.required' => ':attribute es requerido.',
                    'name.min' => ':attribute debe tener mínimo 3 caracteres.',
                    'definition.required' => ':attribute es requerido.',
                    'url.url' => ':attribute debe ser un url.',
                    'unit_id.required' => ':attribute es requerido.',
                    'unit_id.numeric' => ':attribute debe ser un numero.',
                    'result_name.required' => ':attribute es requerido.',
                    'numerator_type.required' => ':attribute es requerido.',
                    'numerator_type.numeric' => ':attribute debe ser un numero.',
                    'numerator_type.min' => ':attribute debe ser mínimo 1.',
                    'numerator_type.max' => ':attribute debe ser máximo  2.',
                    'numerator_name.required' => ':attribute es requerido.',
                    'abbreviated_numerator_name.required' => ':attribute es requerido.',
                    'denominator_type.required' => ':attribute es requerido.',
                    'denominator_type.numeric' => ':attribute debe ser un numero.',
                    'denominator_type.min' => ':attribute debe ser mínimo 1.',
                    'denominator_type.max' => ':attribute debe ser máximo  2.',
                    'denominator_name.required' => ':attribute es requerido.',
                    'abbreviated_denominator_name.required' => ':attribute es requerido.',
                    'geographic_layer.numeric' => ':attribute debe ser un numero.',
                    'geographic_layer.min' => ':attribute debe ser mínimo 1.',
                    'geographic_layer.max' => ':attribute debe ser máximo  2.',
                ];
                $attributes = [
                    'indicator_code' => 'El Código interno del indicador ',
                    'name' => 'Nombre ',
                    'definition' => 'Definición ',
                    'url' => 'URL',
                    'unit_id' => 'El id de la unidad',
                    'result_name' => 'Nombre resultado',
                    'numerator_type' => 'Tipo de numerador',
                    'numerator_name' => 'Nombre varible numerador',
                    'abbreviated_numerator_name' => 'Abreviatura numerador',
                    'denominator_type' => 'Tipo de denominador',
                    'denominator_name' => 'Nombre varible denominador',
                    'abbreviated_denominator_name' => 'Abreviatura denominador',
                    'geographic_layer' => 'Capa geografica'
                ];
                break;
            case "PUT":
                $rules = [
                    'indicator_code' => 'required',
                    'name' => 'nullable|min:3',
                    'abbreviated_name' => 'nullable',
                    'definition' => 'nullable',
                    'url' => 'nullable|url',
                    'unit_id' => 'required|numeric',
                    'result_name' => 'nullable',
                    'numerator_type' => 'nullable|numeric|min:1|max:2',
                    'numerator_name' => 'nullable',
                    'abbreviated_numerator_name' => 'nullable',
                    'denominator_type' => 'nullable|numeric|min:1|max:2',
                    'denominator_name' => 'nullable',
                    'abbreviated_denominator_name' => 'nullable',
                    'geographic_layer' => 'nullable|numeric'
                ];
                $messages = [
                    'name.min' => ':attribute debe tener mínimo 3 caracteres.',
                    'indicator_code.required' => ':attribute es requerido.',
                    'url.url' => ':attribute debe ser un url.',
                    'unit_id.required' => ':attribute es requerido.',
                    'unit_id.numeric' => ':attribute debe ser un numero.',
                    'numerator_type.numeric' => ':attribute debe ser un numero.',
                    'numerator_type.min' => ':attribute debe ser mínimo 1.',
                    'numerator_type.max' => ':attribute debe ser máximo  2.',
                    'denominator_type.numeric' => ':attribute debe ser un numero.',
                    'denominator_type.min' => ':attribute debe ser mínimo 1.',
                    'denominator_type.max' => ':attribute debe ser máximo  2.',
                    'geographic_layer.numeric' => ':attribute debe ser un numero.',
                ];
                $attributes = [
                    'indicator_code' => 'El Código interno del indicador ',
                    'name' => 'Nombre ',
                    'definition' => 'Definición ',
                    'url' => 'URL',
                    'unit_id' => 'El id de la unidad',
                    'result_name' => 'Nombre resultado',
                    'numerator_type' => 'Tipo de numerador',
                    'numerator_name' => 'Nombre varible numerador',
                    'abbreviated_numerator_name' => 'Abreviatura numerador',
                    'denominator_type' => 'Tipo de denominador',
                    'denominator_name' => 'Nombre varible denominador',
                    'abbreviated_denominator_name' => 'Abreviatura denominador',
                    'geographic_layer' => 'Capa geografica'
                ];
                break;
            case "GET":
            case "DELETE":
                $rules = [
                    'indicator_code' => 'required',
                ];
                $messages = [
                    'indicator_code.required' => ':attribute es requerido.',
                ];
                $attributes = [
                    'indicator_code' => 'Código ',
                ];
                break;
        }
        return Validator::make($request->all(), $rules, $messages, $attributes);
    }
    /**
     * Función para validar que los datos del request sean correctos 
     * antes de pasar a la funcion principal para validar la 
     * estructura interna de un indicador propio
     */
    private function validateInternalIndicatorRequest($request)
    {
        $rules = [
            'variable_name' => 'required',
            'type' => 'required|numeric|min:1|max:2'
        ];
        $messages = [
            'variable_name.required' => ':attribute es requerido.',
            'type.required' => ':attribute es un campo requerido.',
            'type.numeric' => ':attribute debe ser un numero.',
            'type.min' => ':attribute debe ser mayor o igual a 1',
            'type.max' => ':attribute debe ser menor o igual a 2'
        ];
        $attributes = [
            'name' => 'Nombre de la variable',
            'type' => 'El tipo de varibel'
        ];
        return Validator::make($request, $rules, $messages, $attributes);
    }
}
