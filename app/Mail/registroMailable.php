<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class registroMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $nombreJ;
    public $solicitante;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nombreJ, $solicitante)
    {
        $this->nombreJ = $nombreJ;
        $this->solicitante = $solicitante;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Sistema de notificación espacio de Genero.')->markdown('email.registro')->from('notifintra@legislativoedomex.gob.mx');
    }
}
