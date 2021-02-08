<?php

namespace App\Observers;

use App\Models\Chamado\Chamado;
use App\Models\Entrega\Entrega;
use App\Models\EntregaPatrimonio\EntregaPatrimonio;
use App\Models\EstadoPatrimonio\EstadoPatrimonio;
use App\Models\Expedicao\Expedicao;
use App\Models\ExpedicaoEstado\ExpedicaoEstado;
use App\Models\Pedido\Pedido;
use App\Models\StatusChamado\StatusChamado;
use App\Models\StatusPedido\StatusPedido;
use App\Models\TipoChamado\TipoChamado;

class ChamadoObserver
{
    /**
     * Handle the Chamado "created" event.
     *
     * @param  \App\Models\Chamado  $chamado
     * @return void
     */
    public function created(Chamado $chamado)
    {
        if(!is_null($chamado->pedido)){

            $expedicao = Expedicao::where('pedido_id', $chamado->pedido_id)->first();
            $expedicao->chamado_id = $chamado->id;
            $expedicao->expedicao_estado_id = ExpedicaoEstado::LIBERADO;
            $expedicao->save();

            $entrega = Entrega::where('expedicao_id', $expedicao->id)->first();
            $entrega->chamado_id = $chamado->id;
            $entrega->save();
        }
    }

    /**
     * Handle the Chamado "updated" event.
     *
     * @param  \App\Models\Chamado  $chamado
     * @return void
     */
    public function updated(Chamado $chamado)
    {
        if($chamado->status_chamado_id == StatusChamado::CANCELADO && $chamado->tipo_chamado_id == TipoChamado::ENTREGA){

            $expedicao = Expedicao::where('chamado_id', $chamado->id)->first();
            $expedicao->expedicao_estado_id = ExpedicaoEstado::CANCELADA;
            $expedicao->save();

            $entrega = Entrega::where('chamado_id', $chamado->id)->first();

            $patrimoniosEntrega = EntregaPatrimonio::where('entrega_id', $entrega->id)->get();

            foreach($patrimoniosEntrega as $patrimonioEntrega){
                $patrimonioEntrega->patrimonio->estado_patrimonio_id = EstadoPatrimonio::DISPONIVEL;
                $patrimonioEntrega->patrimonio->save();
                $patrimonioEntrega->delete();
            }

            $entrega->delete();

            $pedido = Pedido::find($chamado->pedido_id);
            $pedido->status_pedido_id = StatusPedido::CANCELADO;
            $pedido->save();

        }

        if($chamado->status_chamado_id == StatusChamado::ENCERRADO){

            $entrega = Entrega::where('chamado_id', $chamado->id)->first();
            $patrimoniosEntrega = EntregaPatrimonio::where('entrega_id', $entrega->id)->get();

            //Colocar em patrimonio alugado.
            //Colocar em nota espelho patrimonio.

        }
    }

    /**
     * Handle the Chamado "deleted" event.
     *
     * @param  \App\Models\Chamado  $chamado
     * @return void
     */
    public function deleted(Chamado $chamado)
    {
        //
    }

    /**
     * Handle the Chamado "restored" event.
     *
     * @param  \App\Models\Chamado  $chamado
     * @return void
     */
    public function restored(Chamado $chamado)
    {
        //
    }

    /**
     * Handle the Chamado "force deleted" event.
     *
     * @param  \App\Models\Chamado  $chamado
     * @return void
     */
    public function forceDeleted(Chamado $chamado)
    {
        //
    }
}
