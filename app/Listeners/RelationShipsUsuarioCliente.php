<?php

namespace App\Listeners;

use App\Events\UsuarioClienteEvent;
use App\Models\UsuarioCliente\UsuarioCliente;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

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
            'usuario_id'    => $event->getUsuario()->id,
            'cliente_id'    => $event->getClienteId()
        ]);
    }
}
