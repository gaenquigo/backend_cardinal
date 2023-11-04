<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Models\Rol_User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use JWTAuth;
use Tymon\JWTAuth\JWT;
use Validator;

/**
 * Class 
 * @package App\Http\Controllers
 */
class AuthController extends UtilsController
{
    /**
     * Funcion para autenticar a un usuario y retornar
     * el token, los datos del usuario y el tiempo de expiracion
     */
    public function login(Request $request, JWT $jwt)
    {
        $credentials = $request->only('email', 'password');
        $validator = $this->validateLoginRequest($credentials);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'error' => $validator->messages()
            ], 401);
        }

        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json([
                    'success' => false,
                    'error' => 'Credenciales inválidas'
                ], 404);
            }
            $jwt->setToken($token);
            $payload = $jwt->getPayload();
            JWTAuth::setToken($token);
            $user = JWTAuth::toUser();
            // $permissions = Rol_User::where(function ($q) {
            //     $q->where('rol_id', 1)
            //         ->orWhere('rol_id', 4);
            // })->where('user_id', $user->id)->first();
            // if ($permissions) {
            return response()->json([
                'success' => true,
                'message' => 'Sesión iniciada correctamente.',
                'data' => [
                    'token' => $token,
                    'usuario' => $user,
                    'expira' => $payload->get('exp'),
                ]
            ], 200);
            // } else {
            //     return response()->json([
            //         'success' => false,
            //         'error' => 'Permissions Denied, please try again.'
            //     ], 500);
            // }
        } catch (JWTException $e) {
            UtilsController::setTransactionalLog($request, $e);
            return response()->json([
                'success' => false,
                'error' => 'Failed to login, please try again.'
            ], 500);
        }
    }
    /**
     * Función para validar que los datos del request sean correctos 
     * antes de pasar a la funcion principal
     * de validacion de autenticacion
     */
    private function validateLoginRequest(array $credentials)
    {
        $rules = [
            'email' => 'required|email',
            'password' => 'required',
        ];
        $messages = [
            'email.required' => 'El :attribute es requerido!',
            'email.email' => 'El :attribute no tiene el formato adecuado!',
            'password.required' => 'La :attribute es requerido!'
        ];
        $attributes = [
            'email' => 'Correo',
            'password' => 'Contraseña',
        ];
        return Validator::make($credentials, $rules, $messages, $attributes);
    }
}
