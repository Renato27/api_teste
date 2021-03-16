<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use App\Models\Entrega\Entrega as EntregaEntrega;
use Illuminate\Broadcasting\InteractsWithSockets;

class Entrega
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Model de entrega.
     *
     * @var Entrega
     */
    private EntregaEntrega $entrega;

    /**
     * ID do Patrimônio.
     *
     * @var int
     */
    private int $patrimonio;

    /**
     * Undocumented variable.
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
