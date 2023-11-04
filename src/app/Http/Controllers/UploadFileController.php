<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Class UploadFileController
 * @package App\Http\Controllers
 */
class UploadFileController extends Controller
{
    /**
     * Funcion que obtiene archivos
     */
    public function get_file(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file_url' => 'required|string'
        ]);

        if ($validator->fails()) return response()->json($validator->errors(), 400);

        $file_url = $request->file_url;

        $exists = Storage::disk('local')->exists($file_url);

        if (!$exists) return response()->json($validator->errors(), 400);

        return Storage::download($file_url);
    }

    /**
     * Funcion para subir un archivo
     * @param Request $request
     */
    public function upload(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'file' => 'required|file',
            'module' => 'required|string'
        ]);

        if ($validator->fails()) return response()->json($validator->errors(), 400);

        $file = $request->file('file');

        if (!$file->isValid()) {
            return response()->json(['messsage' => 'Archivo no valido.'], 400);
        }

        $name = $file->getClientOriginalName();
        $type = $file->getMimeType();
        $size = $file->getSize();

        $file_url = '/public';

        switch ($request->module) {
            case 'indicators':
                $file_url .= '/indicators_files/';
                break;
            case 'approve_pai':
                $file_url .= '/approve_pai_files/';
                break;
            case 'noveltyGastos':
                $file_url .= '/noveltyGastos_files/';
                break;
            case 'approve_reports':
                $file_url .= '/approve_reports_files/';
                break;
            case 'historicalPais_reports':
                $file_url .= '/historicalPais_reports_files/';
                break;
            case 'reports_FCA':
                $file_url .= '/Fca_reports_files/';
                break;

            default:
                return response()->json(['message' => 'Incorrect Module.'], 400);
        }

        $date =  \Date('Y/m/d');

        $file_url .= $date . '_' . $name;

        Storage::disk('local')->put($file_url, file_get_contents($file->getRealPath()));

        return response()->json([
            'name' => $name,
            'type' => $type,
            'size' => $size,
            'file_url' => $file_url
        ], 201);
    }
    /**
     * Elimina un archivo guardado en el servidor
     * por su url
     */
    public function delete_file(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file_url' => 'required|string'
        ]);

        if ($validator->fails()) return response()->json($validator->errors(), 400);

        $file_url = $request->file_url;

        $exists = Storage::disk('local')->exists($file_url);

        if (!$exists) return response()->json($validator->errors(), 400);

        Storage::delete($file_url);

        return response()->json([
            'file_url' => $file_url
        ], 201);
    }
}
