<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnviarCorreo extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $data;

    public function __construct($data)
    {
        //
        $this->data = $data;
        // $this->tecnica = $tecnica;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        echo nl2br("Entrando a build...\n");
        // return $this->view('view.name');
        return $this->view('emails.correo');
    }
}
