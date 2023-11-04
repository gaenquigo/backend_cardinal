<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use Illuminate\Http\Request;
use App\Models\PAI;
use App\Models\EvidenceFinancial;
use App\Models\Payment;
use Illuminate\Support\Facades\DB as FacadesDB;
use stdClass;
use Tymon\JWTAuth\Facades\JWTAuth;
use Validator;

/**
 * Class LagsPaymentsController
 * @package App\Http\Controllers
 */
class LagsPaymentsController extends UtilsController
{
    /**
     * Valida y obtiene la data de los pagos asociados
     * a una rezago
     */
    public function index(Request $request)
    {
        try {
            $validator = $this->validateLagPaymentRequest($request);
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $responseValidation = UtilsController::checkStructure($request, "lag", true);
                $errors = $responseValidation["errors"];
                if (!$responseValidation["errors"]) {
                    $lag = $responseValidation["data"];
                    $payments = Payment::where('evidence_id', $lag["id"])->get();
                    $response_info = $evidence["payments"] = $payments;
                    $errors = false;
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
     * Valida y crea los pagos asociados a 
     * una rezago
     */
    public function store(Request $request)
    {
        try {
            $validator = $this->validateLagPaymentRequest($request);
            $errors = true;
            $response_info = [];
            $response_info["message"] = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info["errors"] = $validator->messages();
            } else {
                $responseValidation = UtilsController::checkStructure($request, "lag", true);
                if (!$responseValidation["errors"]) {
                    $evidence = $responseValidation["data"];
                    $evidence_financial = EvidenceFinancial::where('evidence_id', $evidence["id"])->sum('value');
                    $summatory_payment = Payment::where('evidence_id', $evidence["id"])->sum('value');
                    foreach ($request["payments"] as $payment) {
                        $summatory_payment = $summatory_payment + $payment["value"];
                    }
                    if ($summatory_payment > $evidence_financial) {
                        $response_info["errors"] = ["Los pagos no pueden superar el valor de los compromisos financieros del rezago"];
                    } else {
                        $lagsController = new LagsController;
                        $errorsPayments = false;
                        $group_id = JWTAuth::toUser($request->token)["group_id"];
                        $pai = PAI::where('pai_code', '=', $request->pai_code)
                            ->where('group_id', $group_id)->where('approved', true)->first();
                        FacadesDB::beginTransaction();
                        foreach ($request["payments"]  as $keyPayment =>  $payment) {
                            if ($lagsController->checkYearDate($request["year"], $pai, $payment["date"], $evidence->date_report)) {
                                $arrayPayment = [
                                    'value' => $payment["value"],
                                    'payment_date' => $payment["date"],
                                    'payment' => $payment["payment"],
                                    'evidence_id' => $evidence["id"]
                                ];
                                Payment::create($arrayPayment);
                            } else {
                                $response_info["payments"]["Pago" . $keyPayment]["message"] = Controller::$str_struct_err;
                                $response_info["payments"]["Pago" . $keyPayment]["errors"] = ["La fecha no es adecuada"];
                                $errorsPayments = true;
                            }
                        }
                        FacadesDB::commit();
                        if ($errorsPayments == false) {
                            $response_info["message"] = "Se crearon los pagos asociados al rezago";
                            $errors = false;
                        }
                    }
                } else {
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
     * Valida y elimina todos los pagos asociados a 
     * una rezago
     */
    public function destroy(Request $request)
    {
        FacadesDB::beginTransaction();
        try {
            $validator = $this->validateLagPaymentRequest($request);
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $responseValidation = UtilsController::checkStructure($request, "lag", true);
                if (!$responseValidation["errors"]) {
                    $lag = $responseValidation["data"];
                    FacadesDB::beginTransaction();
                    Payment::where('evidence_id', $lag["id"])->delete();
                    $response_info = "Se ha eliminado correctamente los pagos del rezafgo";
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
     * antes de pasar a la funcion principal para 
     * la creacion, actualizacion, obtencion y eliminacion de 
     * un pago de un rezago
     */
    private function validateLagPaymentRequest($request)
    {
        $rules = [];
        $messages = [];
        $attributes = [];
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
                    'payments' => 'required|array|min:1',
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
                    'payments.required' => ':attribute es un campo requerido.',
                    'payments.array' => ':attribute debe ser un array.',
                    'payments.min' => ':attribute debe ser mínimo uno.',

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
                    'payments' => 'Pagos'
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
                    'year' => 'Año'
                ];
                break;
        }
        return Validator::make($request->all(), $rules, $messages, $attributes);
    }
}
