<?php

namespace App\Events;

use App\Models\Usuario\Usuario;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UsuarioClienteEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private Usuario $usuario;

    private int $clienteId;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Usuario $usuario, int  $clienteId)
    {
        $this->usuario = $usuario;
        $this->clienteId = $clienteId;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }

    /**
     * Recebe o usuario
     *
     *
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Recebe o valor do cliente ID
     *
     *
     */
    public function getClienteId()
    {
        return $this->clienteId;
    }
}
