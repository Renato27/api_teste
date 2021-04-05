<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Listeners;

use App\Events\Entrega;
use App\Models\Patrimonio\Patrimonio;
use App\Models\EstadoPatrimonio\EstadoPatrimonio;
use App\Models\EntregaPatrimonio\EntregaPatrimonio;

class RelationShipsEntrega
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
     * @param  object  $event
     * @return void
     */
    public function handle(Entrega $event)
    {
        EntregaPatrimonio::create([
            'entrega_id' => $event->getEntrega()->id,
            'patrimonio_id' => $event->getPatrimonioId(),
            'item_pedido_id' => $event->getItemId(),
        ]);

        $patrimonio = Patrimonio::find($event->getPatrimonioId());
        $patrimonio->estado_patrimonio_id = EstadoPatrimonio::MARCADO_ENTREGA;
        $patrimonio->save();
    }
}
