<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Events;

use App\Models\Retirada\Retirada;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class RetiradaEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private Retirada $retirada;

    private int $patrimonio;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Retirada $retirada, int $patrimonio, ?bool $checked = false)
    {
        $this->retirada = $retirada;
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

    public function getRetirada()
    {
        return $this->retirada;
    }

    public function getPatrimonioId()
    {
        return $this->patrimonio;
    }

    public function checked()
    {
        return $this->checked;
    }
}
