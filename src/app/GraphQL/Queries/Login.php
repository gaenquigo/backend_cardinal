<?php

namespace App\GraphQL\Queries;

use Carbon\Carbon;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\JWTAuth;

class Login
{
    private $jwt;

    public function __construct(JWTAuth $jwt)
    {
        $this->jwt = $jwt;
    }

    public function resolve($rootValue, array $args)
    {
        try {
            $credentials = [
                'email' => $args['email'],
                'password' => $args['password']
            ];

            if (!$token = $this->jwt->attempt($credentials)) {
                return [
                    'message' => 'Credenciales inválidas'
                ];
            }

            $user = $this->jwt->user();

            $today = Carbon::today();

            if ($today->lessThanOrEqualTo($user->end_date) && $user->active === '1') {
                return [
                    'message' => 'Sesión iniciada correctamente.',
                    'user' => $user,
                    'token' => [
                        'access_token' => $token,
                        'type' => 'bearer',
                        'expire_in' => "{$this->jwt->factory()->getTTL()} minutes"
                    ]
                ];
            } else {
                return [
                    'message' => 'El usuario no cuenta con permisos para acceder.'
                ];
            }


        } catch (JWTException $e) {
            Log::error($e);
            return [
                'message' => 'could_not_create_token'
            ];
        }
    }

}
