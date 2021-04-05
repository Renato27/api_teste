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

class GenericChamadoEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private Model $model;

    private int $patrimonio;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Model $model, int $patrimonio)
    {
        $this->model = $model;
        $this->patrimonio = $patrimonio;
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

    public function getPatrimonioId()
    {
        return $this->patrimonio;
    }
}
