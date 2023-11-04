<?php

namespace App\GraphQL\Mutations;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\PasswordReset;

/**
 * Class ResetPassword
 * @package App\GraphQL\Mutations
 */
class ResetPassword
{

    /**
     * @param $rootValue
     * @param array $args
     * @return array
     */
    public function resolve($rootValue, array $args)
    {
        $args = collect($args)->except('directive')->toArray();
        $response = $this->broker()->reset($args, function ($user, $password) {
            $this->resetPassword($user, $password);
        });

        if ($response === Password::PASSWORD_RESET) {
            return [
                'status' => 'PASSWORD_UPDATED',
                'message' => __($response),
            ];
        }

        return [
            'status' => 'PASSWORD_NOT_UPDATED',
            'message' => __($response),
        ];
    }

    /**
     * @param $user
     * @param $password
     */
    protected function resetPassword($user, $password)
    {
        $user->password = Hash::make($password);

        $user->save();

        event(new PasswordReset($user));
    }

    /**
     * @return mixed
     */
    public function broker()
    {
        return Password::broker();
    }
}
