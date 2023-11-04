<?php

namespace App\GraphQL\Queries;

use App\Mail\EmailVerification as MailVer;
use Illuminate\Support\Facades\Mail;

class EmailVerification
{
    public function resolve($rootValue, array $args)
    {
        try {

            $objEmail = new \stdClass();
            $objEmail->sender = 'no-reply@sipgacar.com';
            $objEmail->receiver = env('MAIL_VERIFICATION');

            Mail::to($objEmail->receiver)->send(new MailVer($objEmail));

            return [
                'status' => true,
                'message' => 'Sistema de correos funcionando correctamente.'
            ];
        } catch (\Exception $e) {
            return [
                'status' => false,
                'message' => 'No esta funcionando correctamente el  sistema de correos.'
            ];
        }
    }
}
