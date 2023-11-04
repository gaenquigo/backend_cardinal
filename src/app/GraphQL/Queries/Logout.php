<?php

namespace App\GraphQL\Queries;

use Tymon\JWTAuth\JWTAuth;
use Illuminate\Support\Facades\Auth;

class Logout
{
    private $jwt;

    public function __construct(JWTAuth $jwt)
    {
        $this->jwt = $jwt;
    }

    public function resolve($rootValue, array $args)
    {
        auth()->logout();
        $this->jwt->unsetToken();

        return [
            'status' => 'TOKEN_REVOKED',
            'message' => 'Sesión finalizada correctamente.',
        ];
    }

}
