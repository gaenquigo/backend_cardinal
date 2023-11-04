<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Models\Group;
use Illuminate\Http\Request;

/**
 * Class GroupsController
 * @package App\Http\Controllers
 */
class GroupsController extends UtilsController
{
    /**
     * Funcion que obtiene el listados de CARs
     * del sistema
     */
    public function index(Request $request)
    {
        try {
            $data = Group::all();
            $response = new ApiResponse(200, "Success", $data);
        } catch (\Exception $e) {
            UtilsController::setTransactionalLog($request, $e);
            $response = new ApiResponse(500, "Error", ["messages" =>  'Internal Server Error ']);
        }
        return $response->response();
    }
}
