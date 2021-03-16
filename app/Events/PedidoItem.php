<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Events;

use App\Models\Pedido\Pedido;
use App\Models\ItemPedido\ItemPedido;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class PedidoItem
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private Pedido $pedido;

    private ?ItemPedido $itemPedido;

    private ?int $contratoId;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Pedido $pedido, ?ItemPedido $itemPedido = null, ?int $contratoId = null)
    {
        $this->pedido = $pedido;
        $this->itemPedido = $itemPedido;
        $this->contratoId = $contratoId;
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

    public function getPedido()
    {
        return $this->pedido;
    }

    public function getItemPedido()
    {
        return $this->itemPedido;
    }

    public function getContratoId()
    {
        return $this->contratoId;
    }
}
