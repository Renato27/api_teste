<?php

namespace App\Listeners;

use App\Events\PedidoItem;
use App\Models\ContratoPedido\ContratoPedido;
use App\Models\PedidoItem\PedidoItem as PedidoItemPedidoItem;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class RelationShipsPedidoItem
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
     * @param  PedidoItem  $event
     * @return void
     */
    public function handle(PedidoItem $event)
    {
        PedidoItemPedidoItem::create([
            "pedido_id" => $event->getPedido()->id,
            "item_pedido_id" => $event->getItemPedido()->id
        ]);

        ContratoPedido::create([
            "pedido_id" => $event->getPedido()->id,
            "contrato_id" => $event->getContratoId()
        ]);
    }
}
