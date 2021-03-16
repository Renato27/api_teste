<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Listeners;

use App\Events\TrocaEvent;
use App\Models\TrocaPatrimonio\TrocaPatrimonio;
use App\Models\TrocaPatrimonioRetirada\TrocaPatrimonioRetirada;

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
        if (! is_null($event->getPatrimonioEntregaId())) {
            TrocaPatrimonio::create([
                'troca_id' => $event->getTroca()->id,
                'patrimonio_id' => $event->getPatrimonioEntregaId(),
            ]);
        }

        if (! is_null($event->getPatrimonioRetiradaId())) {
            TrocaPatrimonioRetirada::create([
                'troca_id' => $event->getTroca()->id,
                'patrimonio_id' => $event->getPatrimonioRetiradaId(),
            ]);
        }
    }
}
