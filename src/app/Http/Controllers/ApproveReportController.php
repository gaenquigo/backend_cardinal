<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Models\ApprovalReport;
use App\Models\PAI;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;
use Tymon\JWTAuth\Facades\JWTAuth;
use stdClass;
use Validator;

/**
 * Class 
 * @package App\Http\Controllers
 */
class ApproveReportController extends UtilsController
{
    /**
     * Valida y crea un registro y sube un archivo
     * de aprobacion de reporte
     */
    public function index(Request $request)
    {
        try {
            $validator = $this->validateApprovedReportRequest($request->all());
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $file = $request->file('file');
                if (!$file->isValid()) {
                    $response_info->errors = ["El archivo no es valido."];
                } else {
                    $group_id = JWTAuth::toUser($request->token)["group_id"];
                    $pai = PAI::where('pai_code', '=', $request->pai_code)
                        ->where('group_id', '=', $group_id)
                        ->where('approved', '=', true)->first();
                    if ($pai) {
                        FacadesDB::beginTransaction();
                        $approvePaiController = new ApprovePaiController;
                        $file_url = $approvePaiController->uploadFile($file, 'approve_reports_files');
                        $arrayApprovedPai = [
                            'pai_id' => $pai->id,
                            'agreement' => $request->agreement,
                            'file' => $file_url,
                            'date' => Carbon::date(),
                            'group_id' => $group_id
                        ];
                        ApprovalReport::create($arrayApprovedPai);
                        $errors = false;
                        FacadesDB::commit();
                    } else {
                        $response_info->errors = ["El PAI con pai_code " . $request->pai_code . " no existe o no esta aprobado."];
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
     * Función para validar que los datos del request sean correctos 
     * antes de pasar a la funcion principal para aprobar un reporte
     */
    private function validateApprovedReportRequest(array $request)
    {
        $rules = [
            'file' => 'required|file',
            'agreement' => 'required',
            'pai_code' => 'required|numeric',
        ];
        $messages = [
            'file.required' => ':attribute es requerido.',
            'file.file' => ':attribute debe ser un archivo.',
            'agreement.required' => ':attribute es requerido.',
            'pai_code.required' => ':attribute es requerido.',
            'pai_code.numeric' => ':attribute debe ser un numero.',
        ];
        $attributes = [
            'file' => 'Archivo',
            'agreement' => 'Código de resolución',
            'pai_code' => 'Código interno del PAI',
        ];
        return Validator::make($request, $rules, $messages, $attributes);
    }
}
