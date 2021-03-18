<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Observers;

use App\Events\UpdateDashboard;
use App\Models\Troca\Troca;
use App\Models\Chamado\Chamado;
use App\Models\Entrega\Entrega;
use App\Models\Expedicao\Expedicao;
use App\Models\TipoChamado\TipoChamado;
use App\Models\StatusChamado\StatusChamado;
use App\Models\ExpedicaoEstado\ExpedicaoEstado;

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

        // event(new UpdateDashboard());

        // if (!is_null($chamado->pedido_id)) {
        //     $expedicao = Expedicao::where('pedido_id', $chamado->pedido_id)->first();
        //     $expedicao->chamado_id = $chamado->id;
        //     $expedicao->expedicao_estado_id = ExpedicaoEstado::LIBERADO;
        //     $expedicao->save();

        //     $entrega = Entrega::where('expedicao_id', $expedicao->id)->first();
        //     $entrega->chamado_id = $chamado->id;
        //     $entrega->save();
        // }
    }

    /**
     * Handle the Chamado "updated" event.
     *
     * @param  \App\Models\Chamado  $chamado
     * @return void
     */
    public function updated(Chamado $chamado)
    {

        // event(new UpdateDashboard());

        // if ($chamado->status_chamado_id == StatusChamado::CANCELADO || $chamado->status_chamado_id == StatusChamado::ENCERRADO) {

        //     switch ($chamado->tipo_chamado_id) {
        //         case TipoChamado::ENTREGA:

        //             $entrega = Entrega::where('chamado_id', $chamado->id)->first();

        //             $entrega->delete();

        //             break;

        //         case TipoChamado::TROCA:

        //             $troca = Troca::where('chamado_id', $chamado->id)->first();

        //             $troca->delete();

        //             break;
        //     }
        // }
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
