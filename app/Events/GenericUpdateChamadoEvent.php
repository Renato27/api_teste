<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class GenericUpdateChamadoEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    protected $model;

    protected $patrimonio_adicionar;

    protected $patrimonio_retirar;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(?Model $model, ?int $patrimonio_adicionar, ?int $patrimonio_retirar)
    {
        $this->model = $model;
        $this->patrimonio_retirar = $patrimonio_retirar;
        $this->patrimonio_adicionar = $patrimonio_adicionar;
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

    public function getModel()
    {
        return $this->model;
    }

    public function getPatrimonioAdicionarId()
    {
        return $this->patrimonio_adicionar;
    }

    public function getPatrimonioRetirarId()
    {
        return $this->patrimonio_retirar;
    }
}
