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
 * Class EvidencesAdvancesController
 * @package App\Http\Controllers
 */
class EvidencesAdvancesController extends UtilsController
{
    /**
     * Valida los datos y obtiene la informacion
     * de la evidencia de una actividad
     */
    public function index(Request $request)
    {
        try {
            $validator = $this->validateEvidenceRequest($request);
            $responseValidation = UtilsController::getIndexData(
                $request,
                $validator,
                "evidence",
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
     * Valida los datos y crea 
     * la evidencia de una actividad
     */
    public function store(Request $request)
    {
        try {
            $validator = $this->validateEvidenceRequest($request);
            $errors = true;
            $response_info = [];
            $response_info["message"] = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info["errors"] = $validator->messages();
            } else {
                $responseValidation = UtilsController::checkStructure($request, "activity", true);
                if (!$responseValidation["errors"]) {
                    $activity = $responseValidation["data"];
                    $evidence = EvidenceAdvance::where('activity_id',  $activity["id"])
                        ->where('external_code', "E-" . $request->evidence_code . "-" . $activity->activity_code)
                        ->where('year', $request["year"])->first();
                    if ($evidence) {
                        $response_info["errors"] = ["La evidencia con código  evidence_code " . $request->evidence_code . " ya existe para la actividad."];
                    } else {
                        $group_id = JWTAuth::toUser($request->token)["group_id"];
                        $pai = PAI::where('pai_code', $request->pai_code)
                            ->where('group_id', $group_id)->where('approved', true)->first();
                        $expensesController = new ExpensesController;
                        if ($expensesController->checkYearDate($request["year"], $pai, $request["date_report"])) {
                            FacadesDB::beginTransaction();
                            $arrayEvidence = [
                                'year' =>  $request["year"],
                                'date_report' =>  $request["date_report"],
                                'type' => $request["type"] == 1 ? 'contract' : 'functioning',
                                'value' => $request["value"],
                                'how_is_done' => $request["advanceDescription"] ?: null,
                                'contract_number' =>  $request["contract_number"],
                                'description' =>  $request["description"] ?: null,
                                'value_state' =>  0,
                                'state_id' =>  $request["contract_type"] == null ? null : $this->contractList($request["contract_type"])["value"],
                                'activity_id' => $activity["id"],
                                'rezago' => false,
                                'external_code' => "E-" . $request["evidence_code"]  . "-" . $activity->activity_code
                            ];
                            EvidenceAdvance::create($arrayEvidence);
                            $response_info["message"] = "La evidencia se creó correctamente";
                            $errors = false;
                            FacadesDB::commit();
                        } else {
                            $response_info["errors"] = ["La fecha no es adecuada"];
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
     * Valida los datos y actualiza la informacion
     * de la evidencia de una actividad
     */
    public function update(Request $request)
    {
        try {
            $validator = $this->validateEvidenceRequest($request);
            $errors = true;
            $response_info = [];
            $response_info["message"] = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info["errors"] = $validator->messages();
            } else {
                $responseValidation = UtilsController::checkStructure($request, "evidence", true);
                if (!$responseValidation["errors"]) {
                    $evidence = $responseValidation["data"];
                    $group_id = JWTAuth::toUser($request->token)["group_id"];
                    $pai = PAI::where('pai_code', $request->pai_code)
                        ->where('group_id', $group_id)->where('approved', true)->first();
                    $expensesController = new ExpensesController;
                    if ($expensesController->checkYearDate($request["year"], $pai, $request["date_report"])) {
                        FacadesDB::beginTransaction();
                        $evidence->date_report = $request["date_report"];
                        $evidence->how_is_done = $request["advanceDescription"] ?: null;
                        $evidence->description = $request["description"] ?: null;
                        $evidence->type = $request["type"] == 1 ? 'contract' : 'functioning';
                        $evidence->value = $request["value"];
                        $evidence->state_id =  $this->contractList($request["contract_type"])["value"];
                        $evidence->save();
                        $errors = false;
                        $response_info["message"] = "La evidencia se actualizó correctamente";
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
     * de la evidencia de una actividad
     */
    public function destroy(Request $request)
    {
        try {
            $validator = $this->validateEvidenceRequest($request);
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $responseValidation = UtilsController::checkStructure($request, "evidence", true);
                if (!$responseValidation["errors"]) {
                    $evidence = $responseValidation["data"];
                    FacadesDB::beginTransaction();
                    Payment::where('evidence_id', $evidence["id"])->delete();
                    Indicator_activity::where('evidence_id', $evidence["id"])->delete();
                    EvidenceFinancial::where('evidence_id', $evidence["id"])->delete();
                    $evidence->delete();
                    $response_info = "Se ha eliminado correctamente la evidencia";
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
     * eliminacion y obtencion de las evidencias de una actividad
     */
    private function validateEvidenceRequest($request)
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
                    'year' => 'required|numeric|min:1|max:4',
                    'type' => 'required|numeric|min:1|max:2',
                    'description' => 'nullable',
                    'contract_type' => 'nullable|numeric|min:1|max:3',
                    'advanceDescription' => 'nullable',
                    'contract_number' => 'nullable',
                    // 'payments' => 'nullable|array|min:1',
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
                    'year.required' => ':attribute es un campo requerido.',
                    'year.numeric' => ':attribute debe ser un numero.',
                    'year.min' => ':attribute debe ser mayor o igual a 1',
                    'year.max' => ':attribute debe ser menor o igual a 4',
                    'type.required' => ':attribute es un campo requerido.',
                    'type.numeric' => ':attribute debe ser un numero.',
                    'type.min' => ':attribute debe ser mayor o igual a 1',
                    'type.max' => ':attribute debe ser menor o igual a 2',
                    'contract_type.numeric' => ':attribute debe ser un numero.',
                    'contract_type.min' => ':attribute debe ser mayor o igual a 1',
                    'contract_type.max' => ':attribute debe ser menor o igual a 3',
                    'description.required' => ':attribute es un campo requerido.',
                    // 'payments.array' => ':attribute debe ser un array.',
                    // 'payments.min' => ':attribute debe ser mínimo 1.',
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
                    'year' => 'Año',
                    'type' => 'Debe enviar 1 para contrato y 2 de funcionamiento',
                    'description' => 'Descripcion',
                    'contract_type' => 'Tipo de contrato',
                    'advanceDescription' => 'Como se realizo evidencia',
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
                    'evidence_code.required' => ':attribute es un campo requerido.',
                    'evidence_code.numeric' => ':attribute debe ser un numero.',
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
                    'evidence_code' => 'Código Interno de la evidencia',
                    'year' => 'Año'
                ];
                break;
        }
        return Validator::make($request->all(), $rules, $messages, $attributes);
    }
    /**
     * Funcion que valida la existencia de un contrato
     * en una lista en la tabla de dominios
     */
    public function contractList(string $contract_id)
    {
        $list = array(
            array("id" => 1, "value" => 1153),
            array("id" => 2, "value" => 1154),
            array("id" => 3, "value" => 1155),
        );
        $value = [];
        foreach ($list as $item) {
            if ($item["id"] == $contract_id) {
                $value = $item;
            }
        }
        return $value;
    }
}
