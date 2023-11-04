<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Models\Master_Geodata;

/**
 * Class MasterGeoDataController
 * @package App\Http\Controllers
 */
class MasterGeoDataController extends Controller
{
    /**
     * Obtiene la data maestra de los puntos geograficos
     */
    public function index()
    {
        try {
            $data = Master_Geodata::all();
            $response = new ApiResponse(200, "Success", $data);
        } catch (\Exception $e) {
            $response = new ApiResponse(500, "Error", ["messages" =>  'Internal Server Error ']);
        }
        return $response->response();
    }
}
