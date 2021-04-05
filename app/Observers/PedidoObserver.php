<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Observers;

use App\Models\Pedido\Pedido;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\ExpedicaoTipo\ExpedicaoTipo;
use App\Models\ExpedicaoEstado\ExpedicaoEstado;
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
        // $expedicaoRepository = app(ExpedicaoRepository::class);

        // $token = JWTAuth::getToken();

        // if(!$token = JWTAuth::parseToken()){
        //     $usuario = JWTAuth::toUser($token);
        // }else{
        //     $usuario = JWTAuth::toUser($token);
        // }

        // $detalhesExpedicao = [
        //     'pedido_id' => $pedido->id,
        //     'expedicao_estado_id' => ExpedicaoEstado::AGUARDANDO_SELECAO,
        //     'expedicao_tipo_id' => ExpedicaoTipo::ENTREGA,
        //     'usuario_id' => $usuario->id,
        //     'chamado_id' => null,
        // ];

        // $expedicaoRepository->createExpedicao($detalhesExpedicao);
    }

    /**
     * Handle the pedido "updated" event.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return void
     */
    public function updated(Pedido $pedido)
    {
        // if($pedido->status_pedido_id == 4){

        //     $expedicaoRepository = app(ExpedicaoRepository::class);

        //     $expedicao = $expedicaoRepository->getExpedicaoByPedido($pedido->id);

        //     if(!$expedicao) return false;

        //     $expedicaoRepository->updateExpedicao($expedicao->id, ['expedicao_estado_id' => 7]);
        // }
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
