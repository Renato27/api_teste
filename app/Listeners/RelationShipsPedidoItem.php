<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Listeners;

use App\Events\PedidoItem;
use App\Models\ContratoPedido\ContratoPedido;
use App\Models\PedidoItem\PedidoItem as PedidoItemPedidoItem;
use App\Services\NotaEspelho\GerarNotaEspelho\Contracts\GerarNotaEspelhoService;

class RelationShipsPedidoItem
{
    /**
     * Serviço para gerar o espelho de faturamento.
     *
     * @var GerarNotaEspelhoService
     */
    private GerarNotaEspelhoService $gerarEspelhoService;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        $this->gerarEspelhoService = app(GerarNotaEspelhoService::class);
    }

    /**
     * Handle the event.
     *
     * @param  PedidoItem  $event
     * @return void
     */
    public function handle(PedidoItem $event)
    {
        if (is_null($event->getContratoId())) {
            PedidoItemPedidoItem::create([
                'pedido_id' => $event->getPedido()->id,
                'item_pedido_id' => $event->getItemPedido()->id,
            ]);
        }

        if (! is_null($event->getContratoId())) {
            $contratoPedido = ContratoPedido::create([
                'pedido_id' => $event->getPedido()->id,
                'contrato_id' => $event->getContratoId(),
            ]);

            $this->gerarEspelhoService->setContratoPedido($contratoPedido)->handle();
        }
    }
}
