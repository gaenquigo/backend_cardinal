<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Models\Indicator_activity;

/**
 * Class IndicatorActivitiesController
 * @package App\Http\Controllers
 */
class IndicatorActivitiesController extends Controller
{
    /**
     * Funcion que obtiene las actividades
     * asociadas a un indicador seleccionado
     * para el sistema frontend
     */
    public function index($indicator_id)
    {
        try {
            $indicator_activities = Indicator_activity::where('indicator_id', $indicator_id)->get();
            $response = new ApiResponse(200, "Success", $indicator_activities);
        } catch (\Exception $e) {
            $response = new ApiResponse(500, "Error", ["messages" =>  'Internal Server Error ']);
        }
        return $response->response();
    }
}
