<?php

namespace App\Http\Controllers;


use App\Helpers\ApiResponse;
use Illuminate\Http\Request;
use App\Models\PAI;
use App\Models\EvidenceAdvance;
use App\Models\EvidenceFinancial;
use App\Models\Indicator_activity;
use App\Models\Payment;
use Illuminate\Support\Facades\DB as FacadesDB;
use stdClass;
use Tymon\JWTAuth\Facades\JWTAuth;
use Validator;

/**
 * Class 
 * @package App\Http\Controllers
 */
class AdvancesController extends UtilsController
{
    /**
     * Valida los datos y obtiene la informacion
     * del avance de una evidencia
     */
    public function index(Request $request)
    {
        try {
            $validator = $this->validateAdvanceRequest($request);
            $responseValidation = UtilsController::getIndexData(
                $request,
                $validator,
                "advance",
                true,
                true
            );
            $errors = $responseValidation["errors"];
            $response_info = $responseValidation["response_info"];
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
     * Valida los datos y crea la informacion
     * del avance de una evidencia
     */
    public function store(Request $request)
    {
        try {
            $validator = $this->validateAdvanceRequest($request);
            $errors = true;
            $response_info = [];
            $response_info["message"] = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info["errors"] = $validator->messages();
            } else {
                $responseValidation = UtilsController::checkStructure($request, "activity", true);
                if (!$responseValidation["errors"]) {
                    $activity = $responseValidation["data"];
                    $evidence = EvidenceAdvance::where('activity_id', '=',  $activity["id"])
                        ->where('external_code', "E-" . $request->evidence_code . "-" . $activity->activity_code)
                        ->where('year', $request["year"])->first();
                    if ($evidence) {
                        $advance = EvidenceAdvance::where('activity_id', '=',  $activity["id"])
                            ->where('external_code', "A-" . $request->advance_code . "-" . $evidence->external_code)
                            ->where('evidence_advance_id', $evidence->id)
                            ->where('year', $request["year"])->first();
                        if ($advance) {
                            $response_info["errors"] = ["El avance con código  advance_code " . $request->advance_code . " ya existe para la evidencia."];
                        } else {
                            $group_id = JWTAuth::toUser($request->token)["group_id"];
                            $pai = PAI::where('pai_code', $request->pai_code)
                                ->where('group_id', $group_id)->where('approved', true)->first();
                            $expensesController = new ExpensesController;
                            if ($expensesController->checkYearDate($request["year"], $pai, $request["date_report"])) {
                                FacadesDB::beginTransaction();
                                $arrayAdvance = [
                                    'year' =>  $evidence["year"],
                                    'date_report' =>  $request["date_report"],
                                    'type' => $evidence["type"],
                                    'value' => $request["value"],
                                    'how_is_done' => $request["advanceDescription"],
                                    'contract_number' =>  $evidence["contract_number"],
                                    'description' =>  $request["description"] ?: null,
                                    'value_state' =>  0,
                                    'state_id' =>  $evidence["contract_type"],
                                    'activity_id' => $activity["id"],
                                    'rezago' => false,
                                    'evidence_advance_id' => $evidence["id"],
                                    'external_code' => "A-" . $request["advance_code"]  . "-" . $evidence->external_code
                                ];
                                EvidenceAdvance::create($arrayAdvance);
                                $response_info["message"] = "El avance se creó correctamente";
                                $errors = false;
                                FacadesDB::commit();
                            } else {
                                $response_info["errors"] = ["La fecha no es adecuada"];
                            }
                        }
                    } else {
                        $response_info["errors"] = ["La evidencia con código  evidence_code " . $request->evidence_code . " no existe para la actividad en el año ingresado."];
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
     * Valida los datos y actualiza la informacion
     * del avance de una evidencia
     */
    public function update(Request $request)
    {
        try {
            $validator = $this->validateAdvanceRequest($request);
            $errors = true;
            $response_info = [];
            $response_info["message"] = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info["errors"] = $validator->messages();
            } else {
                $responseValidation = UtilsController::checkStructure($request, "advance", true);
                if (!$responseValidation["errors"]) {
                    $advance = $responseValidation["data"];
                    $group_id = JWTAuth::toUser($request->token)["group_id"];
                    $pai = PAI::where('pai_code', $request->pai_code)
                        ->where('group_id', $group_id)->where('approved', true)->first();
                    $expensesController = new ExpensesController;
                    if ($expensesController->checkYearDate($request["year"], $pai, $request["date_report"])) {
                        FacadesDB::beginTransaction();
                        $advance->date_report = $request["date_report"];
                        $advance->how_is_done = $request["advanceDescription"];
                        $advance->description = $request["description"];
                        $advance->value = $request["value"];
                        $advance->save();
                        $response_info["message"] = "El avance se editó correctamente";
                        $errors = false;
                        FacadesDB::commit();
                    } else {
                        $response_info["errors"] = ["La fecha no es adecuada"];
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
     * Valida los datos y elimina la informacion
     * del avance de una evidencia
     */
    public function destroy(Request $request)
    {
        try {
            $validator = $this->validateAdvanceRequest($request);
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $responseValidation = UtilsController::checkStructure($request, "advance");
                if (!$responseValidation["errors"]) {
                    $advance = $responseValidation["data"];
                    FacadesDB::beginTransaction();
                    Payment::where('evidence_id', $advance["id"])->delete();
                    Indicator_activity::where('evidence_id', $advance["id"])->delete();
                    EvidenceFinancial::where('evidence_id', $advance["id"])->delete();
                    $advance->delete();
                    $response_info = "Se ha eliminado correctamente el avance";
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
     * antes de pasar a la funcion principal para la creacion
     * eliminacion y obtencion de los avances
     * de una evidencia
     */
    private function validateAdvanceRequest($request)
    {
        $rules = [];
        $messages = [];
        $attributes = [];
        switch ($request->method()) {
            case "POST":
            case "PUT":
                $rules = [
                    'pai_code' => 'required|numeric',
                    'strategic_line_code' => 'required|numeric',
                    'program_code' => 'required|numeric',
                    'project_code' => 'required|numeric',
                    'objective_code' => 'required|numeric',
                    'activity_code' => 'required|numeric',
                    'evidence_code' => 'required|numeric',
                    'advance_code' => 'required|numeric',
                    'description' => 'required',
                    'advanceDescription' => 'required',
                    'date_report' => ['required', 'date_format:Y-m-d'],
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
                    'evidence_code.required' => ':attribute es un campo requerido.',
                    'evidence_code.numeric' => ':attribute debe ser un numero.',
                    'advance_code.required' => ':attribute es un campo requerido.',
                    'advance_code.numeric' => ':attribute debe ser un numero.',
                    'description.required' => ':attribute es un campo requerido.',
                    'date_report.required' => ':attribute es un campo requerido.',
                    'date_report.date' => ':attribute debe ser una fecha',
                ];
                $attributes = [
                    'pai_code' => 'Código interno del PAI',
                    'strategic_line_code' => 'Código Interno de la línea estratégica',
                    'program_code' => 'Código Interno del programa',
                    'project_code' => 'Código Interno del proyecto',
                    'objective_code' => 'Código Interno del objetivo',
                    'activity_code' => 'Código Interno de la actividad',
                    'evidence_code' => 'Código Interno de la evidencia',
                    'advance_code' => 'Código Interno del avance',
                    'description' => 'Descripcion',
                    'advanceDescription' => 'Descripcion del avance',
                    'contract_number' => 'Numero del contrato',
                    'date_report' => 'Fecha de ejecucion'
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
                    'evidence_code' => 'required|numeric',
                    'advance_code' => 'required|numeric',
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
                    'evidence_code.required' => ':attribute es un campo requerido.',
                    'evidence_code.numeric' => ':attribute debe ser un numero.',
                    'advance_code.required' => ':attribute es un campo requerido.',
                    'advance_code.numeric' => ':attribute debe ser un numero.',
                ];
                $attributes = [
                    'pai_code' => 'Código interno del PAI',
                    'strategic_line_code' => 'Código Interno de la línea estratégica',
                    'program_code' => 'Código Interno del programa',
                    'project_code' => 'Código Interno del proyecto',
                    'objective_code' => 'Código Interno del objetivo',
                    'activity_code' => 'Código Interno de la actividad',
                    'evidence_code' => 'Código Interno de la evidencia',
                    'advance_code' => 'Código Interno del avance',
                ];
                break;
        }
        return Validator::make($request->all(), $rules, $messages, $attributes);
    }
}
