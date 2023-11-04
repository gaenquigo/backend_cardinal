<?php

namespace App\GraphQL\Mutations;

use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Password;

/**
 * Class ForgotPassword
 * @package App\GraphQL\Mutations
 */
class ForgotPassword
{
    use SendsPasswordResetEmails;


    /**
     * @param $rootValue
     * @param array $args
     * @return array
     */
    public function resolve($rootValue, array $args)
    {
        $response = $this->broker()->sendResetLink(['email' => $args['email']]);


        if ($response == Password::RESET_LINK_SENT) {
            return [
                'status' => 'EMAIL_SENT',
                'message' => __($response),
            ];
        }

        return [
            'status' => 'EMAIL_NOT_SENT',
            'message' => __($response),
        ];
    }
}
