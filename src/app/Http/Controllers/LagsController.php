<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use Illuminate\Http\Request;
use App\Models\EvidenceAdvance;
use Carbon\Carbon;
use App\Models\PAI;
use Illuminate\Support\Facades\DB as FacadesDB;
use Tymon\JWTAuth\Facades\JWTAuth;
use Validator;

/**
 * Class LagsController
 * @package App\Http\Controllers
 */
class LagsController extends UtilsController
{
    /**
     * Obtiene los datos de un rezago de una actividad
     */
    public function index(Request $request)
    {
        try {
            $validator = $this->validateLagRequest($request);
            $responseValidation = UtilsController::getIndexData(
                $request,
                $validator,
                "lag",
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
     * Valida y crear nuevos rezagos de una actividad
     */
    public function store(Request $request)
    {
        try {
            $validator = $this->validateLagRequest($request);
            $errors = true;
            $response_info = [];
            $response_info["message"] = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info["errors"] = $validator->messages();
            } else {
                $responseValidation = UtilsController::checkStructure($request, "activity", true);
                $errors = $responseValidation["errors"];
                if (!$responseValidation["errors"]) {
                    $activity = $responseValidation["data"];
                    $evidence = EvidenceAdvance::where('activity_id', $activity["id"])
                        ->where('rezago', true)
                        ->where('year', $request["year"])->first();
                    if ($evidence) {
                        $response_info["errors"] = [" ya existe un rezago para la actividad."];
                    } else {
                        $summatoryEvidences = EvidenceAdvance::where('activity_id', $activity["id"])
                            ->where('rezago', false)
                            ->where('year', $request["year"])->sum('value');
                        $difference = $activity["goal_" . $request["year"]] - $summatoryEvidences;
                        if ($request["value"] >= $difference && $difference > 0) {
                            $group_id = JWTAuth::toUser($request->token)["group_id"];
                            $pai = PAI::where('pai_code', $request->pai_code)
                                ->where('group_id', $group_id)->where('approved', true)->first();
                            if ($this->checkYearDate($request["year"], $pai, $request["date_report"])) {
                                FacadesDB::beginTransaction();
                                $arrayLag = [
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
                                    'rezago' => true,
                                    'external_code' => "R-" . $request["lag_code"]  . "-" . $activity->activity_code
                                ];
                                EvidenceAdvance::create($arrayLag);
                                $response_info["message"] = "El rezago se creó correctamente";
                                $errors = false;
                                FacadesDB::commit();
                            } else {
                                $response_info["errors"] = ["La fecha no es adecuada"];
                            }
                        } else {
                            $response_info["errors"] = ["El valor de la diferencia de la meta fisica no es suficiente para crear el rezago"];
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
     * Función para validar que los datos del request sean correctos 
     * antes de crear, actualizar, obtener y eliminar 
     * rezagos de una actividad
     */
    private function validateLagRequest($request)
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
                    'lag_code' => 'required|numeric',
                    'year' => 'required|numeric|min:1|max:4',
                    'type' => 'required|numeric|min:1|max:2',
                    'description' => 'nullable',
                    'contract_type' => 'nullable|numeric|min:1|max:3',
                    'advanceDescription' => 'nullable',
                    'contract_number' => 'nullable',
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
                    'lag_code.required' => ':attribute es un campo requerido.',
                    'lag_code.numeric' => ':attribute debe ser un numero.',
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
                    'lag_code' => 'Código Interno de El rezago',
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
                    'lag_code' => 'Código Interno de El rezago',
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
    /**
     * Funcion que valida los rangos de fechas para
     * los años y retornar un dato booleano que
     * determinara si continuara con el proceso
     */
    public function checkYearDate($year, $pai, $date = null, $evidence_date = null)
    {
        $today = Carbon::now();
        $start_date = Carbon::createFromFormat('Y-m-d', $pai->start_date);
        $validationYear = false;
        if (($today->year - 1) == (($start_date->year - 1) + ($year))) {
            $validationYear = true;
            $year = $year + 1;
        } else if (($today->year - 2) == (($start_date->year - 1) + ($year))) {
            $start_date_2 = Carbon::createFromFormat('Y-m-d', ($start_date->year + ($year)) . "-01-01");
            $end_date_2 = Carbon::createFromFormat('Y-m-d', ($start_date->year + ($year)) . "-02-28");
            if ($today >= $start_date_2 && $today <= $end_date_2) {
                $validationYear = true;
                $year = $year + 1;
            }
        } else {
            return false;
        }
        if ($validationYear == true) {
            $start_date_1 = Carbon::createFromFormat('Y-m-d', ($start_date->year + ($year - 1)) . "-01-01");
            $end_date_1 = Carbon::createFromFormat('Y-m-d', ($start_date->year + ($year - 1)) . "-07-31");
            $start_date_2 = Carbon::createFromFormat('Y-m-d', ($start_date->year + ($year - 1)) . "-07-01");
            $end_date_2 = Carbon::createFromFormat('Y-m-d', ($start_date->year + ($year - 1) + 1) . "-02-28");
            $interval_start_1 = Carbon::createFromFormat('Y-m-d', ($start_date->year + ($year - 1)) . "-01-01");
            $interval_end_1 = Carbon::createFromFormat('Y-m-d', ($start_date->year + ($year - 1)) . "-06-30");
            $interval_start_2 = Carbon::createFromFormat('Y-m-d', ($start_date->year + ($year - 1)) . "-07-01");
            $interval_end_2 = Carbon::createFromFormat('Y-m-d', ($start_date->year + ($year - 1)) . "-12-31");
            $year_difference = ($today->year - $start_date->year) + 1;
            $periods_to_validate = true;
            if ($date != null) {
                $date_seted = Carbon::createFromFormat('Y-m-d', $date);
                if ((
                    ($today >= $start_date_1 && $today <= $end_date_1)
                    && ($date_seted >= $interval_start_1 && $date_seted <= $interval_end_1)) || (
                    ($today >= $start_date_2 && $today <= $end_date_2)
                    && ($date_seted >= $interval_start_2 && $date_seted <= $interval_end_2))) {
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
                    && ($date_seted >= $interval_start_1 && $date_seted <= $interval_end_1)) || (
                    ($evidence_date_seted >= $start_date_2 && $evidence_date_seted <= $end_date_2)
                    && ($date_seted >= $interval_start_2 && $date_seted <= $interval_end_2))) {
                    $periods_to_validate = true;
                } else {
                    $periods_to_validate = false;
                }
            }
        }
    }
}
