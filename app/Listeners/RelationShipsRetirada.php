<?php

namespace App\Listeners;

use App\Events\RetiradaEvent;
use App\Models\EstadoPatrimonio\EstadoPatrimonio;
use App\Models\Patrimonio\Patrimonio;
use App\Models\Retirada\Retirada;
use App\Models\RetiradaPatrimonio\RetiradaPatrimonio;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class RelationShipsRetirada
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
     * @param  RetiradaEvent  $event
     * @return void
     */
    public function handle(RetiradaEvent $event)
    {

        RetiradaPatrimonio::create([
            "retirada_id" => $event->getRetirada()->id,
            "patrimonio_id" => $event->getPatrimonioId()
        ]);

        $patrimonio = Patrimonio::find($event->getPatrimonioId());
        $patrimonio->estado_patrimonio_id = EstadoPatrimonio::MARCADO_RETIRADA;
        $patrimonio->save();
    }
}
