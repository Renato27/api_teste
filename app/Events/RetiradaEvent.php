<?php

namespace App\Events;

use App\Models\Chamado\Chamado;
use App\Models\Retirada\Retirada;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

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
    public function __construct(Retirada $retirada, int $patrimonio)
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
}
