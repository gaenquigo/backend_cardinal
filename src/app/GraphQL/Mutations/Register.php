<?php

namespace App\GraphQL\Mutations;

use App\Models\User;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\JWTAuth;

/**
 * Class Register
 * @package App\GraphQL\Mutations
 */
class Register
{

    /**
     * @var JWTAuth
     */
    private $jwt;

    /**
     * Register constructor.
     * @param JWTAuth $jwt
     */
    public function __construct(JWTAuth $jwt)
    {
        $this->jwt = $jwt;
    }

    /**
     * @param $rootValue
     * @param array $args
     * @return array|\Exception[]
     */
    public function resolve($rootValue, array $args)
    {
        try {
            $args['input']['temp_password'] = $args['input']['password'];
            $args['input']['password'] = bcrypt($args['input']['password']);

            $user = User::create($args['input']);
            
            if ($user) {

                $token = $this->generateToken($args['input']);
                
                return [
                    'message' => 'Usuario registrado correctamente.',
                    'user' => $user,
                    'token' => $token
                ];
            }
        } catch (\Exception $e) {
            return [
                'message' => $e,
            ];
        }
    }

    /**
     * @param $args
     * @return array|string[]
     */
    public function generateToken($args)
    {
        try {
            $credentials = [
                'email' => $args['email'],
                'password' => $args['temp_password']
            ];

            if (!$token = $this->jwt->attempt($credentials)) {
                return [
                    'message' => 'Credenciales inválidas'
                ];
            }

            return [
                'access_token' => $token,
                'type' => 'bearer',
            ];
        } catch (JWTException $e) {
            return [
                'message' => 'could_not_create_token'
            ];
        }
    }
}
