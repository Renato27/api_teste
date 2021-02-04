<?php

namespace App\Observers;

use App\Models\Entrega\Entrega;
use App\Models\Expedicao\Expedicao;

class EntregaObserver
{
    /**
     * Handle the Entrega "created" event.
     *
     * @param  \App\Models\Entrega  $entrega
     * @return void
     */
    public function created(Entrega $entrega)
    {
        $expedicao = Expedicao::find($entrega->expedicao_id);
        $expedicao->expedicao_estado_id = 2;
        $expedicao->save();
    }

    /**
     * Handle the Entrega "updated" event.
     *
     * @param  \App\Models\Entrega  $entrega
     * @return void
     */
    public function updated(Entrega $entrega)
    {
        //
    }

    /**
     * Handle the Entrega "deleted" event.
     *
     * @param  \App\Models\Entrega  $entrega
     * @return void
     */
    public function deleted(Entrega $entrega)
    {
        //
    }

    /**
     * Handle the Entrega "restored" event.
     *
     * @param  \App\Models\Entrega  $entrega
     * @return void
     */
    public function restored(Entrega $entrega)
    {
        //
    }

    /**
     * Handle the Entrega "force deleted" event.
     *
     * @param  \App\Models\Entrega  $entrega
     * @return void
     */
    public function forceDeleted(Entrega $entrega)
    {
        //
    }
}
