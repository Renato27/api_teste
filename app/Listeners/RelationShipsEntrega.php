<?php

namespace App\Listeners;

use App\Events\Entrega;
use App\Models\EntregaPatrimonio\EntregaPatrimonio;
use App\Models\Expedicao\Expedicao;
use App\Repositories\Contracts\ExpedicaoRepository;
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

        $expedicaoRepository = app(ExpedicaoRepository::class);

        $expedicaoRepository->updateExpedicao($event->getEntrega()->expedicao_id, ['expedicao_estado_id' => 2]);
    }
}
