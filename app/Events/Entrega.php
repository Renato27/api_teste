<?php

namespace App\Events;

use App\Models\Entrega\Entrega as EntregaEntrega;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class Entrega
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Model de entrega
     *
     * @var Entrega
     */
    private EntregaEntrega $entrega;

    /**
     * ID do Patrimônio
     *
     * @var integer
     */
    private int $patrimonio;

    /**
     * Undocumented variable
     *
     * @var int|null
     */
    private int $item;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(EntregaEntrega $entrega, int $patrimonio, int $item)
    {
        $this->entrega = $entrega;
        $this->patrimonio = $patrimonio;
        $this->item = $item;
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

    public function getEntrega()
    {
        return $this->entrega;
    }

    public function getPatrimonioId()
    {
        return $this->patrimonio;
    }

    public function getItemId()
    {
        return $this->item;
    }
}
