<?php

namespace App\GraphQL\Queries;

use Exception;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailSuggestion as MailVer;

class SendEmail
{
    public function resolve($rootValue, array $args)
    {
        try {

            $objEmail = new \stdClass();
            $objEmail->sender = 'Sugerencias de Sipgacar';
            // Viene así: ['email' => ["a@a.com", "b@b.b", "etc@etc.etc"]]
            // Y se saca solo esto:
            $objEmail->receiver =  $args['email']; // ["a@a.com", "b@b.b", "etc@etc.etc"]
            // dump($args);
            /**
             * Formas en que Mail::to() recibe parámetros:
             * 
             * 1: ["a@a.com", "b@b.b", "etc@etc.etc"]
             * 
             * 2: [
             *   ['email' => "a@a.a"],
             *   ['email' => "b@a.a"],
             *   ['email' => "c@a.a"],
             * ]
             * 
             * 3: [
             *   UserA,
             *   UserB,
             *   UserC, // Todos deben tener el atributo email
             * ]
             */

            Mail::to($objEmail->receiver)->send(new MailVer($objEmail));

            return [
                'status' => true,
                'message' => 'Sistema de correos funcionando correctamente.'
            ];
        } catch (Exception $e) {
            dump($e);
            return [
                'status' => false,
                'message' => 'No esta funcionando correctamente el  sistema de correos.'
            ];
        }
    }
}
