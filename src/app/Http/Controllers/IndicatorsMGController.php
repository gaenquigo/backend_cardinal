<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Models\Indicator;

/**
 * Class 
 * @package App\Http\Controllers
 */
class IndicatorsMGController extends Controller
{
    /**
     * Obtiene los IndicadoresMG
     */
    public function index()
    {
        try {
            $data = Indicator::where('type', 10)->get();
            $response = new ApiResponse(200, "Success", $data);
        } catch (\Exception $e) {
            $response = new ApiResponse(500, "Error", ["messages" =>  'Internal Server Error ']);
        }
        return $response->response();
    }
}
