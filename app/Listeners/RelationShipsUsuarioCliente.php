<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Listeners;

use App\Events\UsuarioClienteEvent;
use App\Models\UsuarioCliente\UsuarioCliente;

class RelationShipsUsuarioCliente
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(UsuarioClienteEvent $event)
    {
        UsuarioCliente::create([
            'usuario_id' => $event->getUsuario()->id,
            'cliente_id' => $event->getClienteId(),
        ]);
    }
}
