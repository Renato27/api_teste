<?php

namespace App\Observers;

use App\Models\ExpedicaoEstado\ExpedicaoEstado;
use App\Models\ExpedicaoTipo\ExpedicaoTipo;
use App\Models\Pedido\Pedido;
use App\Repositories\Contracts\ExpedicaoRepository;

class PedidoObserver
{
    /**
     * Handle the pedido "created" event.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return void
     */
    public function created(Pedido $pedido)
    {
        $expedicaoRepository = app(ExpedicaoRepository::class);

        $detalhesExpedicao = [
            'pedido_id' => $pedido->id,
            'expedicao_estado_id' => ExpedicaoEstado::AGUARDANDO_SELECAO,
            'expedicao_tipo_id' => ExpedicaoTipo::ENTREGA,
            'usuario_id' => 1
            //'chamado_id' => null,
        ];

        $expedicaoRepository->createExpedicao($detalhesExpedicao);
    }

    /**
     * Handle the pedido "updated" event.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return void
     */
    public function updated(Pedido $pedido)
    {
        if($pedido->status_pedido_id == 4){

            $expedicaoRepository = app(ExpedicaoRepository::class);

            $expedicao = $expedicaoRepository->getExpedicaoByPedido($pedido->id);

            if(!$expedicao) return false;

            $expedicaoRepository->updateExpedicao($expedicao->id, ['expedicao_estado_id' => 4]);
        }
    }

    /**
     * Handle the pedido "deleted" event.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return void
     */
    public function deleted(Pedido $pedido)
    {
        //
    }

    /**
     * Handle the pedido "restored" event.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return void
     */
    public function restored(Pedido $pedido)
    {
        //
    }

    /**
     * Handle the pedido "force deleted" event.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return void
     */
    public function forceDeleted(Pedido $pedido)
    {
        //
    }
}
