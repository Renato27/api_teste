<?php

namespace App\Listeners;

use App\Events\TrocaEvent;
use App\Models\TrocaPatrimonio\TrocaPatrimonio;
use App\Models\TrocaPatrimonioRetirada\TrocaPatrimonioRetirada;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class RelationShipsTroca
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
     * @param  TrocaEvent  $event
     * @return void
     */
    public function handle(TrocaEvent $event)
    {
        if(!is_null($event->getPatrimonioEntregaId())){
            TrocaPatrimonio::create([
                'troca_id'  => $event->getTroca()->id,
                'patrimonio_id' => $event->getPatrimonioEntregaId()
            ]);
        }

        if(!is_null($event->getPatrimonioRetiradaId())){
            TrocaPatrimonioRetirada::create([
                'troca_id'      => $event->getTroca()->id,
                'patrimonio_id' => $event->getPatrimonioRetiradaId()
            ]);
        }
    }
}
