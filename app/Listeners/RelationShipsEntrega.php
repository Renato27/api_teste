<?php

namespace App\Listeners;

use App\Events\Entrega;
use App\Models\EntregaPatrimonio\EntregaPatrimonio;
use App\Models\EstadoPatrimonio\EstadoPatrimonio;
use App\Models\Patrimonio\Patrimonio;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

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
            "entrega_id" => $event->getEntrega()->id,
            "patrimonio_id" => $event->getPatrimonioId()
        ]);

        $patrimonio = Patrimonio::find($event->getPatrimonioId());
        $patrimonio->estado_patrimonio_id = EstadoPatrimonio::MARCADO_ENTREGA;
        $patrimonio->save();

    }
}
