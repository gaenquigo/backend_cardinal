<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /**
     * Declaracion de constantes usadas en los controladores
     */
    public static $str_struct_err = "La estructura tiene errores";
    public static $str_sumatory_err = "La sumatoria de las ponderaciones debe ser 100";
    public static $str_struct_correct = "La estructura es correcta";

    public static $responseObjectUtilsFalse = [
        "data" => [],
        "errors" => true,
        "message" => ""
    ];
    public static $responseObjectUtilsTrue = [
        "data" => [],
        "errors" => false,
        "message" => null
    ];
}
