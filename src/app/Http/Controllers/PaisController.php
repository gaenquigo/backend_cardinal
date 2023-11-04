<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Models\Financial_Plan;
use Illuminate\Http\Request;
use App\Models\PAI;
use App\Models\StrategicLine;
use App\PaisInteroperabilityLogs;
use Illuminate\Support\Facades\DB as FacadesDB;
use stdClass;
use Tymon\JWTAuth\Facades\JWTAuth;
use Carbon\Carbon;
use Validator;

/**
 * Class PaisController
 * @package App\Http\Controllers
 */
class PaisController extends UtilsController
{
    /**
     * Obtiene todo el listado de pais creados
     * para una CAR especifico
     */
    public function index(Request $request)
    {
        try {
            $group_id = JWTAuth::toUser($request->token)["group_id"];
            $pais = PAI::where('group_id', $group_id)->get();
            $response = new ApiResponse(200, "Success", $pais);
        } catch (\Exception $e) {
            UtilsController::setTransactionalLog($request, $e);
            $response = new ApiResponse(500, "Error", ["messages" =>  'Internal Server Error ']);
        }
        return $response->response();
    }
    /**
     * Obtiene los datos de un pai creado 
     * del CAR autenticadp
     */
    public function show($pai_code, Request $request)
    {
        try {
            $group_id = JWTAuth::toUser($request->token)["group_id"];
            $pai = PAI::where('pai_code', $pai_code)->where('group_id', $group_id)->first();
            $response = $pai ? new ApiResponse(200, "Success", $pai)
                : new ApiResponse(404, "Not found", "El PAI con pai_code " . $pai_code . " no existe.");
        } catch (\Exception $e) {
            UtilsController::setTransactionalLog($request, $e);
            $response = new ApiResponse(500, "Error", ["messages" =>  'Internal Server Error ']);
        }
        return $response->response();
    }
    /**
     * Valida y crea un pai para empezar 
     * la estructura en arbol
     */
    public function store(Request $request)
    {
        try {
            $validator = $this->validatePaiRequest($request);
            $response_info = new stdClass();
            $errors = false;
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $errors = true;
                $response_info->errors = $validator->messages();
            } else {
                $group_id = JWTAuth::toUser($request->token)["group_id"];
                $pai = UtilsController::checkStructure($request, "pai")["data"];
                if (!$pai) {
                    $pais = PAI::where("group_id", $group_id)->get();
                    $end_date = date("Y-m-d", strtotime("-1 day", strtotime($request->start_date . "+ 4 years")));
                    $start_date = Carbon::createFromFormat('Y-m-d', $request->start_date);
                    if ($start_date->month != 1 || $start_date->day != 1) {
                        $errors = true;
                        $response_info->errors = ["El PAI debe iniciar el primero de enero"];
                    } else {
                        foreach ($pais as $pai) {
                            if (($request->start_date >= $pai->start_date && $request->start_date <= $pai->end_date) || ($end_date >= $pai->start_date && $end_date <= $pai->end_date)) {
                                $response_info->errors = ["La fecha ingresada interfiere con otra de otro pai"];
                                $errors = true;
                            }
                        }
                    }
                } else {
                    $errors = true;
                    $response_info->errors = ["El PAI con pai_code " . $request->pai_code . " ya existe."];
                }
                if (!$errors) {
                    FacadesDB::beginTransaction();
                    $response_info->message = Controller::$str_struct_correct;
                    $arrayPai = [
                        'name' => $request->name,
                        'start_date' => $request->start_date,
                        'end_date' => $end_date,
                        'director_name' => $request->director_name,
                        'group_id' => $group_id,
                        'pai_code' => $request->pai_code,
                        'internal_status' => $request->internal_status
                    ];
                    $pai = PAI::create($arrayPai);
                    $user_id = JWTAuth::toUser($request->token)["id"];
                    $arrayLog = [
                        'pai_code' => $request->pai_code,
                        'pai_id' => $pai->id,
                        'user_id' => $user_id,
                    ];
                    PaisInteroperabilityLogs::create($arrayLog);
                    $response_info->message = "Se creó el PAI " . $request->pai_code . " correctamente";
                    $errors = false;
                    FacadesDB::commit();
                }
            }
            $response = $errors == true ? new ApiResponse(400, "Bad request", $response_info)
                : new ApiResponse(200, "Success", $response_info);
        } catch (\Exception $e) {
            FacadesDB::rollBack();
            if ($e && $e->errorInfo && $e->errorInfo[0] == "23505") {
                $response = new ApiResponse(500, "Error", ["messages" => "Ya existe un PAI con pai_code " . $request->pai_code . " o con ese nombre" . $request->name]);
            } else {
                $response = new ApiResponse(500, "Error", ["messages" =>  'Internal Server Error ']);
            }
            UtilsController::setTransactionalLog($request, $e);
        }
        return $response->response();
    }
    /**
     * Valida y actualiza los datos de un pai
     */
    public function update(Request $request)
    {
        try {
            $validator = $this->validatePaiRequest($request);
            $response_info = new stdClass();
            $errors = false;
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $group_id = JWTAuth::toUser($request->token)["group_id"];
                $pais = PAI::all()->where('pai_code', '<>', $request->pai_code)->where('group_id', $group_id);
                if ($request->start_date) {
                    $end_date = date("Y-m-d", strtotime("-1 day", strtotime($request->start_date . "+ 4 years")));
                    foreach ($pais as $pai) {
                        if (($request->start_date >= $pai->start_date && $request->start_date <= $pai->end_date) || ($end_date >= $pai->start_date && $end_date <= $pai->end_date)) {
                            $response_info->errors = ["La fecha ingresada interfiere con otra de otro pai"];
                            $errors = true;
                        }
                    }
                }
                if (!$errors) {
                    $pai = PAI::where('pai_code', $request->pai_code)
                        ->where('group_id', $group_id)->where('approved', false)->first();
                    if ($pai) {
                        $pai->name = $request->name ?: $pai->name;
                        $pai->start_date = $request->start_date ?: $pai->start_date;
                        $start_date = Carbon::createFromFormat('Y-m-d', $request->start_date);
                        if ($start_date->month != 1 || $start_date->day != 1) {
                            $response_info->errors = ["El PAI debe iniciar el primero de enero"];
                            $errors = true;
                        } else {
                            FacadesDB::beginTransaction();
                            $end_date = date("Y-m-d", strtotime("-1 day", strtotime($start_date . "+ 4 years")));
                            $pai->end_date = $request->start_date ? $end_date : $pai->end_date;
                            $pai->director_name = $request->director_name ?: $pai->director_name;
                            $pai->internal_status = $request->internal_status ?: $pai->internal_status;
                            $pai->save();
                            $response_info->message = "Se actualizó el PAI " . $request->pai_code . " correctamente";
                            $errors = false;
                            FacadesDB::commit();
                        }
                    } else {
                        $errors = true;
                        $response_info->message = "El PAI con pai_code " . $request->pai_code . " no existe o ya esta aprobado.";
                    }
                }
            }
            $response = $errors == true ? new ApiResponse(400, "Bad request", $response_info)
                : new ApiResponse(200, "Success", $response_info);
        } catch (\Exception $e) {
            FacadesDB::rollBack();
            if ($e && $e->errorInfo && $e->errorInfo[0] == "23505") {
                $response = new ApiResponse(500, "Error", ["messages" => "Este nombre de PAI ya existe"]);
            } else {
                $response = new ApiResponse(500, "Error", ["messages" =>  'Internal Server Error ']);
            }
            UtilsController::setTransactionalLog($request, $e);
        }
        return $response->response();
    }
    /**
     * Valida y elimina un pai
     */
    public function destroy($pai_code, Request $request)
    {
        try {
            $group_id = JWTAuth::toUser($request->token)["group_id"];
            $pai = PAI::where('pai_code', $pai_code)->where('group_id', $group_id)->first();
            if ($pai) {
                $strategic_lines = StrategicLine::where('p_a_i_id', $pai["id"])->get();
                $strategic_line_size = sizeof($strategic_lines);
                $financial_plans = Financial_Plan::where('p_a_i_id', $pai["id"])->get();
                $financial_plan_size = sizeof($financial_plans);
                if ($strategic_line_size == 0 && $financial_plan_size == 0) {
                    FacadesDB::beginTransaction();
                    $paiInteroperabilityLogs = PaisInteroperabilityLogs::where('pai_id', $pai["id"]);
                    $paiInteroperabilityLogs->delete();
                    $pai->delete();
                    FacadesDB::commit();
                    $response = new ApiResponse(200, "Success", ["Pai eliminado"]);
                } else {
                    $response = new ApiResponse(400, "Bad Request", ["No puede eliminar un PAI con líneas estratégicas asociadas o planes financieros asociados"]);
                }
            } else {
                $response = new ApiResponse(404, "Not found", "El PAI con pai_code " . $pai_code . " no existe.");
            }
        } catch (\Exception $e) {
            FacadesDB::rollBack();
            $response = new ApiResponse(500, "Error", ["messages" =>  'Internal Server Error ']);
            UtilsController::setTransactionalLog($request, $e);
        }
        return $response->response();
    }
    /**
     * Función para validar que los datos del request sean correctos 
     * antes de pasar a la funcion principal de creacion,
     * actualizacion y eliminacion de un PAI
     */
    private function validatePaiRequest($request)
    {
        if ($request->method() == "POST") {
            $rules = [
                'name' => 'required|min:3',
                'start_date' => 'required|date',
                'director_name' => 'required|regex:/^[\pL\s\-]+$/u',
                'pai_code' => 'required|numeric',
                'internal_status' => 'required|numeric|max:10'
            ];
            $messages = [
                'name.required' => ':attribute es requerido.',
                'name.min' => ':attribute debe tener mínimo 3 caracteres.',
                'start_date.date' => ':attribute debe ser una fecha.',
                'start_date.required' => ':attribute es requerido.',
                'director_name.required' => ':attribute es requerido.',
                'director_name.regex' => ':attribute no debe contener catacteres especiales.',
                'pai_code.required' => ':attribute es requerido.',
                'pai_code.numeric' => ':attribute debe ser un numero.',
                'internal_status.required' => ':attribute es un campo requerido.',
                'internal_status.numeric' => ':attribute debe ser un numero.',
                'internal_status.max' => ':attribute debe ser menor o igual a 10'
            ];
        } else {
            $rules = [
                'name' => 'nullable',
                'start_date' => 'nullable|date',
                'director_name' => 'nullable|regex:/^[\pL\s\-]+$/u',
                'pai_code' => 'required|numeric',
                'internal_status' => 'nullable|numeric|max:10'
            ];
            $messages = [
                'start_date.date' => ':attribute debe ser una fecha.',
                'director_name.regex' => ':attribute no debe contener catacteres especiales.',
                'pai_code.required' => ':attribute es requerido.',
                'pai_code.numeric' => ':attribute debe ser un numero.',
                'internal_status.numeric' => ':attribute debe ser un numero.',
                'internal_status.max' => ':attribute debe ser menor o igual a 10'
            ];
        }
        $attributes = [
            'name' => 'Nombre del PAI',
            'start_date' => 'La fecha de inicio',
            'director_name' => 'Nombre del director',
            'pai_code' => 'Código interno del PAI',
            'internal_status' => 'Estado Interno'
        ];
        return Validator::make($request->all(), $rules, $messages, $attributes);
    }
}
