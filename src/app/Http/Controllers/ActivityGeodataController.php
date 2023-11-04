<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Models\Activity;
use App\Models\ActivitySource;
use App\Models\Group;
use App\Models\Master_Geodata;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use stdClass;
use Validator;

/**
 * Class 
 * @package App\Http\Controllers
 */
class ActivityGeodataController extends UtilsController
{
    /**
     * Funcion para validar y crear puntos
     * de una actividad de un sistema geoespacial
     */
    public function point(Request $request)
    {
        try {
            $validator = $this->validatePointGeoData($request);
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $group_id = JWTAuth::toUser($request->token)["group_id"];
                $responseValidation = UtilsController::checkStructure($request, "objective");
                if (!$responseValidation["errors"]) {
                    $objective = $responseValidation["data"];
                    $activity = Activity::where('activity_code', '=', $request->activity_code . "-" . $objective->objective_code)
                        ->where('objective_id', '=', $objective["id"])
                        ->where('geometry', 1)->first();
                    if ($activity) {
                        $error_coords = false;
                        foreach ($request->coords as $coord) {
                            $validate_coord = $this->validateInternalCoords($coord);
                            if ($validate_coord->fails()) {
                                $error_coords = true;
                            }
                        }
                        if ($error_coords == true) {
                            $response_info->message = Controller::$str_struct_err;
                            $response_info->errors = ["Existen coordenadas iguales o no corresponde a los rangos establecidos para Colombia"];
                        } else {
                            $activities_source_value = ActivitySource::where('activity_id', $activity->id)->sum('value');
                            $geo_data = Master_Geodata::where('nombre_capa', 'Actividad Punto')->first();
                            $car = Group::where('id', $group_id)->first();
                            $client = new Client();
                            $url = $geo_data->url . "/applyEdits";
                            $feature = [
                                'geometry' => [
                                    'x' => $request->coords[0]["x"],
                                    'y' => $request->coords[0]["y"],
                                ],
                                'spatialReference' => [
                                    'wkid' => 4326
                                ],
                                'attributes' => [
                                    "Val_PresuTotal" => $activities_source_value,
                                    "id" => $activity->id,
                                    "ImpInd" => $activity->id,
                                    "Owner" => "IOP_User",
                                    "CreaDate" => Carbon::now(),
                                    "Modifier" => null,
                                    "ModifDate" => null,
                                    "IdObjetivo" => $objective->id,
                                    "CAR" => $car->acronym,
                                    "Nombre" => $activity->name
                                ]
                            ];
                            $options = [
                                'adds' => json_encode([$feature]),
                                'f' => 'json',
                            ];
                            $response = $client->post($url, [
                                "verify" => false,
                                'form_params' => $options
                            ]);
                            $result = json_decode($response->getBody());
                            $response_info = $result;
                            $errors = false;
                        }
                    } else {
                        $response_info->message = Controller::$str_struct_err;
                        $response_info->errors = ["La actividad con activity_code " . $request->activity_code . " para el objetivo ingresado no existe o no se le puede asignar geometria."];
                    }
                } else {
                    $response_info->errors = $responseValidation["message"];
                }
            }
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
     * Funcion para validar y crear lineas
     * de una actividad de un sistema geoespacial
     */
    public function line(Request $request)
    {
        try {
            $validator = $this->validateLineGeoData($request);
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $group_id = JWTAuth::toUser($request->token)["group_id"];
                $responseValidation = UtilsController::checkStructure($request, "objective");
                if (!$responseValidation["errors"]) {
                    $objective = $responseValidation["data"];
                    $activity = Activity::where('activity_code', '=', $request->activity_code . "-" . $objective->objective_code)
                        ->where('objective_id', '=', $objective["id"])
                        ->where('geometry', 2)->first();

                    if ($activity) {
                        $error_coords = false;
                        foreach ($request->coords as $coord) {
                            $validate_coord = $this->validateInternalCoords($coord);
                            if ($validate_coord->fails()) {
                                $error_coords = true;
                            }
                        }
                        foreach ($request->coords as $i => $coord) {
                            foreach ($request->coords as $j => $coord2) {
                                if (($i != $j) && ($coord == $coord2)) {
                                    $error_coords = true;
                                }
                            }
                        }
                        if ($error_coords == true) {
                            $response_info->message = Controller::$str_struct_err;
                            $response_info->errors = ["Existen coordenadas iguales o no corresponde a los rangos establecidos para Colombia"];
                        } else {
                            $activities_source_value = ActivitySource::where('activity_id', $activity->id)->sum('value');
                            $geo_data = Master_Geodata::where('nombre_capa', 'Actividad Linea')->first();
                            $car = Group::where('id', $group_id)->first();

                            $url = $geo_data->url . "/applyEdits";
                            $paths = [];
                            foreach ($request->coords as $coord) {
                                array_push($paths, [$coord['x'], $coord['y']]);
                            }
                            $feature = [
                                'geometry' => [
                                    'paths' => [$paths]
                                ],
                                'spatialReference' => [
                                    'wkid' => 4326
                                ],
                                'attributes' => [
                                    "Val_PresuTotal" => $activities_source_value,
                                    "id" => $activity->id,
                                    "ImpInd" => $activity->id,
                                    "Owner" => "Geotek",
                                    "CreaDate" => Carbon::now(),
                                    "Modifier" => null,
                                    "ModifDate" => null,
                                    "IdObjetivo" => $objective->id,
                                    "CAR" => $car->name,
                                    "Nombre" => $activity->name
                                ]
                            ];
                            $options = [
                                'adds' => json_encode([$feature]),
                                'f' => 'json',
                            ];
                            $client = new Client();
                            $response = $client->post($url, [
                                "verify" => false,
                                'form_params' => $options
                            ]);
                            $result = json_decode($response->getBody());
                            $response_info = $result;
                            $errors = false;
                        }
                    } else {
                        $response_info->message = Controller::$str_struct_err;
                        $response_info->errors = ["La actividad con activity_code " . $request->activity_code . " para el objetivo ingresado no existe o no se le puede asignar geometria."];
                    }
                } else {
                    $response_info->errors = $responseValidation["message"];
                }
            }
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
     * Funcion para validar y crear poligonos
     * de una actividad de un sistema geoespacial
     */
    public function polygon(Request $request)
    {
        try {
            $validator = $this->validatePolygonGeoData($request);
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $group_id = JWTAuth::toUser($request->token)["group_id"];
                $responseValidation = UtilsController::checkStructure($request, "objective");
                if (!$responseValidation["errors"]) {
                    $objective = $responseValidation["data"];
                    $activity = Activity::where('activity_code', '=', $request->activity_code . "-" . $objective->objective_code)
                        ->where('objective_id', '=', $objective["id"])
                        ->where('geometry', 3)->first();
                    if ($activity) {
                        $error_coords = false;
                        foreach ($request->coords as $coord) {
                            $validate_coord = $this->validateInternalCoords($coord);
                            if ($validate_coord->fails()) {
                                $error_coords = true;
                            }
                        }
                        foreach ($request->coords as $i => $coord) {
                            foreach ($request->coords as $j => $coord2) {
                                if (($i != $j) && ($coord == $coord2)) {
                                    $error_coords = true;
                                }
                            }
                        }
                        if ($error_coords == true) {
                            $response_info->message = Controller::$str_struct_err;
                            $response_info->errors = ["Existen coordenadas iguales o no corresponde a los rangos establecidos para Colombia"];
                        } else {
                            $activities_source_value = ActivitySource::where('activity_id', $activity->id)->sum('value');
                            $geo_data = Master_Geodata::where('nombre_capa', 'Actividad Poligono')->first();
                            $car = Group::where('id', $group_id)->first();

                            $url = $geo_data->url . "/applyEdits";
                            $rings = [];
                            foreach ($request->coords as $coord) {
                                array_push($rings, [$coord['x'], $coord['y']]);
                            }
                            $feature = [
                                'geometry' => [
                                    'rings' => [$rings]
                                ],
                                'spatialReference' => [
                                    'wkid' => 4326
                                ],
                                'attributes' => [
                                    "Val_PresuTotal" => $activities_source_value,
                                    "id" => $activity->id,
                                    "ImpInd" => $activity->id,
                                    "Owner" => "Geotek",
                                    "CreaDate" => Carbon::now(),
                                    "Modifier" => null,
                                    "ModifDate" => null,
                                    "IdObjetivo" => $objective->id,
                                    "CAR" => $car->name,
                                    "Nombre" => $activity->name
                                ]
                            ];
                            $options = [
                                'adds' => json_encode([$feature]),
                                'f' => 'json',
                            ];
                            $client = new Client();
                            $response = $client->post($url, [
                                "verify" => false,
                                'form_params' => $options
                            ]);
                            $result = json_decode($response->getBody());
                            $response_info = $result;
                            $errors = false;
                        }
                    } else {
                        $response_info->message = Controller::$str_struct_err;
                        $response_info->errors = ["La actividad con activity_code " . $request->activity_code . " para el objetivo ingresado no existe o no se le puede asignar geometria."];
                    }
                } else {
                    $response_info->errors = $responseValidation["message"];
                }
            }
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
     * Funcion para validar y obtener puntos
     * de una actividad de un sistema geoespacial
     */
    public function getPoints(Request $request)
    {
        try {
            $validator = $this->validateGeometricData($request);
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $responseValidation = UtilsController::checkStructure(
                    $request,
                    "activity",
                    false,
                    true
                );
                if (!$responseValidation["errors"]) {
                    $activity = $responseValidation["data"];
                    $geo_data = Master_Geodata::where('nombre_capa', 'Actividad Punto')->first();
                    $client = new Client();
                    $url = $geo_data->url . "/query";
                    $feature =  [
                        "verify" => false,
                        "query" => [
                            "where" => "id=" . $activity->id,
                            "f" => "geojson",
                            "outFields" => '"OBJECTID"'
                        ]
                    ];
                    $response = $client->get($url, $feature);
                    $result = json_decode($response->getBody());
                    $response_info = $result->features;
                    $errors = false;
                } else {
                    $response_info->errors = $responseValidation["message"];
                }
            }
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
     * Funcion para validar y obtener lineas
     * de una actividad de un sistema geoespacial
     */
    public function getLines(Request $request)
    {
        try {
            $validator = $this->validateGeometricData($request);
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $responseValidation = UtilsController::checkStructure(
                    $request,
                    "activity",
                    false,
                    true
                );
                if (!$responseValidation["errors"]) {
                    $activity = $responseValidation["data"];
                    $geo_data = Master_Geodata::where('nombre_capa', 'Actividad Linea')->first();
                    $client = new Client();
                    $url = $geo_data->url . "/query";
                    $feature =  [
                        "verify" => false,
                        "query" => [
                            "where" => "id=" . "$activity->id",
                            "f" => "geojson",
                            "outFields" => '"OBJECTID"'
                        ]
                    ];
                    $response = $client->get($url, $feature);
                    $result = json_decode($response->getBody());
                    $response_info = $result->features;
                    $errors = false;
                } else {
                    $response_info->errors = $responseValidation["message"];
                }
            }
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
     * Funcion para validar y obtener poligonos
     * de una actividad de un sistema geoespacial
     */
    public function getPolygons(Request $request)
    {
        try {
            $validator = $this->validateGeometricData($request);
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $responseValidation = UtilsController::checkStructure(
                    $request,
                    "activity",
                    false,
                    true
                );
                if (!$responseValidation["errors"]) {
                    $activity = $responseValidation["data"];
                    $geo_data = Master_Geodata::where('nombre_capa', 'Actividad Poligono')->first();
                    $client = new Client();
                    $url = $geo_data->url . "/query";
                    $feature =  [
                        "verify" => false,
                        "query" => [
                            "where" => "id=" . $activity->id,
                            "f" => "geojson",
                            "outFields" => '"OBJECTID"'
                        ]
                    ];
                    $response = $client->get($url, $feature);
                    $result = json_decode($response->getBody());
                    $response_info = $result->features;
                    $errors = false;
                } else {
                    $response_info->errors = $responseValidation["message"];
                }
            }
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
     * Funcion para validar y eliminar puntos
     * de una actividad de un sistema geoespacial
     */
    public function deletePoints(Request $request)
    {
        try {
            $validator = $this->validateGeometricData($request);
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $responseValidation = UtilsController::checkStructure($request, "activity");
                if (!$responseValidation["errors"]) {
                    $activity = $responseValidation["data"];
                    $geo_data = Master_Geodata::where('nombre_capa', 'Actividad Punto')->first();
                    $client = new Client();
                    $url = $geo_data->url . "/query";
                    $feature =  [
                        "verify" => false,
                        "query" => [
                            "where" => "id=" . $activity->id,
                            "f" => "geojson",
                            "outFields" => '"OBJECTID"'
                        ]
                    ];
                    $response = $client->get($url, $feature);
                    $result = json_decode($response->getBody());
                    $resultDeletes = null;
                    if (sizeof($result->features) == 0) {
                        $response_info = "No hay registros para eliminar";
                        $errors = false;
                    } else {
                        for ($i = 0; $i < sizeof($result->features); $i++) {
                            $feature = $result->features[$i];
                            $options = [
                                'deletes' => '' . $feature->id,
                                'f' => 'json',
                            ];
                            $url = $geo_data->url . "/applyEdits";
                            $response = $client->post($url, [
                                "verify" => false,
                                'form_params' => $options
                            ]);
                            $resultDeletes = json_decode($response->getBody());
                        }
                        if ($resultDeletes != null) {
                            $response_info = "Se eliminaron los registros geográficos";
                            $errors = false;
                        } else {
                            $response_info->message = "Error al eliminar";
                            $response_info = "No se eliminaron algunos registros geográficos";
                        }
                    }
                } else {
                    $response_info->errors = $responseValidation["message"];
                }
            }
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
     * Funcion para validar y eliminar lineas
     * de una actividad de un sistema geoespacial
     */
    public function deleteLines(Request $request)
    {
        try {
            $validator = $this->validateGeometricData($request);
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $responseValidation = UtilsController::checkStructure($request, "activity");
                if (!$responseValidation["errors"]) {
                    $activity = $responseValidation["data"];
                    $geo_data = Master_Geodata::where('nombre_capa', 'Actividad Linea')->first();
                    $client = new Client();
                    $url = $geo_data->url . "/query";
                    $feature =  [
                        "verify" => false,
                        "query" => [
                            "where" => "id=" . "$activity->id",
                            "f" => "geojson",
                            "outFields" => '"OBJECTID"'
                        ]
                    ];
                    $response = $client->get($url, $feature);
                    $result = json_decode($response->getBody());
                    $resultDeletes = null;
                    if (sizeof($result->features) == 0) {
                        $response_info = "No hay registros para eliminar";
                        $errors = false;
                    } else {
                        for ($i = 0; $i < sizeof($result->features); $i++) {
                            $feature = $result->features[$i];
                            $options = [
                                'deletes' => '' . $feature->id,
                                'f' => 'json',
                            ];
                            $url = $geo_data->url . "/applyEdits";
                            $response = $client->post($url, [
                                "verify" => false,
                                'form_params' => $options
                            ]);
                            $resultDeletes = json_decode($response->getBody());
                        }
                        if ($resultDeletes != null) {
                            $response_info = "Se eliminaron los registros geográficos";
                            $errors = false;
                        } else {
                            $response_info->message = "Error al eliminar";
                            $response_info = "No se eliminaron algunos registros geográficos";
                        }
                    }
                } else {
                    $response_info->errors = $responseValidation["message"];
                }
            }
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
     * Funcion para validar y eliminar poligonos
     * de una actividad de un sistema geoespacial
     */
    public function deletePolygons(Request $request)
    {
        try {
            $validator = $this->validateGeometricData($request);
            $errors = true;
            $response_info = new stdClass();
            $response_info->message = Controller::$str_struct_err;
            if ($validator->fails()) {
                $response_info->errors = $validator->messages();
            } else {
                $responseValidation = UtilsController::checkStructure($request, "activity");
                if (!$responseValidation["errors"]) {
                    $activity = $responseValidation["data"];
                    $geo_data = Master_Geodata::where('nombre_capa', 'Actividad Poligono')->first();
                    $client = new Client();
                    $url = $geo_data->url . "/query";
                    $feature =  [
                        "verify" => false,
                        "query" => [
                            "where" => "id=" . $activity->id,
                            "f" => "geojson",
                            "outFields" => '"OBJECTID"'
                        ]
                    ];
                    $response = $client->get($url, $feature);
                    $result = json_decode($response->getBody());
                    $resultDeletes = null;
                    if (sizeof($result->features) == 0) {
                        $response_info = "No hay registros para eliminar";
                        $errors = false;
                    } else {
                        for ($i = 0; $i < sizeof($result->features); $i++) {
                            $feature = $result->features[$i];
                            $options = [
                                'deletes' => '' . $feature->id,
                                'f' => 'json',
                            ];
                            $url = $geo_data->url . "/applyEdits";
                            $response = $client->post($url, [
                                "verify" => false,
                                'form_params' => $options
                            ]);
                            $resultDeletes = json_decode($response->getBody());
                        }
                        if ($resultDeletes != null) {
                            $response_info = "Se eliminaron los registros geográficos";
                            $errors = false;
                        } else {
                            $response_info->message = "Error al eliminar";
                            $response_info = "No se eliminaron algunos registros geográficos";
                        }
                    }
                } else {
                    $response_info->errors = $responseValidation["message"];
                }
            }
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
     * Función para validar que los datos para obtener
     * puntos geometricas de una actividad
     */
    private function validatePointGeoData($request)
    {
        switch ($request->method()) {
            case "POST":
                $rules = [
                    'pai_code' => 'required|numeric',
                    'strategic_line_code' => 'required|numeric',
                    'program_code' => 'required|numeric',
                    'project_code' => 'required|numeric',
                    'objective_code' => 'required|numeric',
                    'activity_code' => 'required|numeric',
                    'coords' => 'required|array|min:1|max:1',
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
                    'coords.required' => ':attribute es un campo requerido.',
                    'coords.array' => ':attribute debe ser un array.',
                    'coords.min' => ':attribute debe ser mínimo uno.',
                    'coords.min' => ':attribute debe ser máximo uno.',
                ];
                $attributes = [
                    'pai_code' => 'Código interno del PAI',
                    'strategic_line_code' => 'Código Interno de la línea estratégica',
                    'program_code' => 'Código Interno del programa',
                    'project_code' => 'Código Interno del proyecto',
                    'objective_code' => 'Código Interno del objetivo',
                    'activity_code' => 'Código Interno de la actividad',
                    'coords' => 'Coordenadas',
                ];
                break;
        }
        return Validator::make($request->all(), $rules, $messages, $attributes);
    }
    /**
     * Función para validar que los datos para obtener
     * lineas geometricas de una actividad
     */
    private function validateLineGeoData($request)
    {
        switch ($request->method()) {
            case "POST":
                $rules = [
                    'pai_code' => 'required|numeric',
                    'strategic_line_code' => 'required|numeric',
                    'program_code' => 'required|numeric',
                    'project_code' => 'required|numeric',
                    'objective_code' => 'required|numeric',
                    'activity_code' => 'required|numeric',
                    'coords' => 'required|array|min:2|max:1000'
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
                    'coords.required' => ':attribute es un campo requerido.',
                    'coords.array' => ':attribute debe ser un array.',
                    'coords.min' => ':attribute debe ser mínimo dos.',
                    'coords.min' => ':attribute debe ser máximo mil.',
                ];
                $attributes = [
                    'pai_code' => 'Código interno del PAI',
                    'strategic_line_code' => 'Código Interno de la línea estratégica',
                    'program_code' => 'Código Interno del programa',
                    'project_code' => 'Código Interno del proyecto',
                    'objective_code' => 'Código Interno del objetivo',
                    'activity_code' => 'Código Interno de la actividad',
                    'coords' => 'Coordenadas',
                ];
                break;
        }
        return Validator::make($request->all(), $rules, $messages, $attributes);
    }
    /**
     * Función para validar los datos para obtener 
     * poligonos geometricos de una actividad
     */
    private function validatePolygonGeoData($request)
    {
        switch ($request->method()) {
            case "POST":
                $rules = [
                    'pai_code' => 'required|numeric',
                    'strategic_line_code' => 'required|numeric',
                    'program_code' => 'required|numeric',
                    'project_code' => 'required|numeric',
                    'objective_code' => 'required|numeric',
                    'activity_code' => 'required|numeric',
                    'coords' => 'required|array|min:3|max:1000'
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
                    'coords.required' => ':attribute es un campo requerido.',
                    'coords.array' => ':attribute debe ser un array.',
                    'coords.min' => ':attribute debe ser mínimo tres.',
                    'coords.min' => ':attribute debe ser máximo mil.',
                ];
                $attributes = [
                    'pai_code' => 'Código interno del PAI',
                    'strategic_line_code' => 'Código Interno de la línea estratégica',
                    'program_code' => 'Código Interno del programa',
                    'project_code' => 'Código Interno del proyecto',
                    'objective_code' => 'Código Interno del objetivo',
                    'activity_code' => 'Código Interno de la actividad',
                    'coords' => 'Coordenadas',
                ];
                break;
        }
        return Validator::make($request->all(), $rules, $messages, $attributes);
    }

    /**
     * Función para validar que los datos del request 
     * de data geometrica para crear puntos geometricos
     * de una actividad
     */
    private function validateGeometricData($request)
    {
        switch ($request->method()) {
            case "GET":
            case "DELETE":
                $rules = [
                    'pai_code' => 'required|numeric',
                    'strategic_line_code' => 'required|numeric',
                    'program_code' => 'required|numeric',
                    'project_code' => 'required|numeric',
                    'objective_code' => 'required|numeric',
                    'activity_code' => 'required|numeric',
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
                ];
                $attributes = [
                    'pai_code' => 'Código interno del PAI',
                    'strategic_line_code' => 'Código Interno de la línea estratégica',
                    'program_code' => 'Código Interno del programa',
                    'project_code' => 'Código Interno del proyecto',
                    'objective_code' => 'Código Interno del objetivo',
                    'activity_code' => 'Código Interno de la actividad',
                ];
                break;
        }
        return Validator::make($request->all(), $rules, $messages, $attributes);
    }
    /**
     * Función para validar coordenadas XY de una actividad
     */
    private function validateInternalCoords(array $request)
    {
        $rules = [
            'x' => 'required|numeric|min:-82.25|max:-66.8',
            'y' => 'required|numeric|min:-3.8|max:13.5',
        ];
        $messages = [
            'x.required' => ':attribute es un campo requerido.',
            'x.numeric' => ':attribute debe ser un numero.',
            'x.min' => ':attribute debe ser mayor o igual a -82.25',
            'x.max' => ':attribute debe ser menor o igual a -66.8',
            'y.required' => ':attribute es un campo requerido.',
            'y.numeric' => ':attribute debe ser un numero.',
            'y.min' => ':attribute debe ser mayor o igual a 4.33',
            'y.max' => ':attribute debe ser menor o igual a 13.5',
        ];
        $attributes = [
            'x' => 'Coordenada x ',
            'y' => 'Coordenada y ',
        ];
        return Validator::make($request, $rules, $messages, $attributes);
    }
}
