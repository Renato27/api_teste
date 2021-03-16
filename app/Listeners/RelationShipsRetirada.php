<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Listeners;

use App\Events\RetiradaEvent;
use App\Models\Patrimonio\Patrimonio;
use App\Models\EstadoPatrimonio\EstadoPatrimonio;
use App\Models\RetiradaPatrimonio\RetiradaPatrimonio;

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
            'retirada_id' => $event->getRetirada()->id,
            'patrimonio_id' => $event->getPatrimonioId(),
        ]);

        $patrimonio = Patrimonio::find($event->getPatrimonioId());
        $patrimonio->estado_patrimonio_id = EstadoPatrimonio::MARCADO_RETIRADA;
        $patrimonio->save();
    }
}
