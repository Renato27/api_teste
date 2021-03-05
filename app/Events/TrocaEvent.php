<?php

namespace App\Events;

use App\Models\Troca\Troca;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TrocaEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    protected $troca;

    protected $patrimonio_entrega;

    protected $patrimonio_retirada;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Troca $troca, int $patrimonio_entrega = null, int $patrimonio_retirada = null)
    {
        $this->troca = $troca;
        $this->patrimonio_entrega = $patrimonio_entrega;
        $this->patrimonio_retirada = $patrimonio_retirada;
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

    public function getTroca()
    {
        return $this->troca;
    }

    public function getPatrimonioEntregaId()
    {
        return $this->patrimonio_entrega;
    }

    public function getPatrimonioRetiradaId()
    {
        return $this->patrimonio_retirada;
    }
}
