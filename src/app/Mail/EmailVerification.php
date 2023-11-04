<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailVerification extends Mailable
{
    use Queueable, SerializesModels;

    public $verification;

    public function __construct($verification)
    {
        $this->verification = $verification;
    }

    public function build()
    {
//        return $this->view('view.name');
        return $this->from('no-reply@sipgacar.com')
            ->view('mails.verification');

    }
}
