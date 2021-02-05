<?php

namespace App\Listeners;

use App\Events\EntregaPatrimonio;
use App\Repositories\Contracts\EntregaPatrimonioRepository;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UpdateEntregaPatrimonio
{

    /**
     * Repositório de entrega patrimônio.
     *
     * @var EntregaPatrimonioRepository
     */
    private EntregaPatrimonioRepository $entregaPatrimonioRepository;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        $this->entregaPatrimonioRepository = app(EntregaPatrimonioRepository::class);
    }

    /**
     * Handle the event.
     *
     * @param  Entrega  $event
     * @return void
     */
    public function handle(EntregaPatrimonio $event)
    {

        $entregaPatrimonio = $this->entregaPatrimonioRepository->getEntregaPatrimonio($event->getEntrega()->id, $event->getPatrimonioId());

        if($event->checked()){
            $entregaPatrimonio->checked = 1;
            $entregaPatrimonio->save();
        }

        $verificacao = $this->entregaPatrimonioRepository->verififyIfAllPatrimoniosChecked($event->getEntrega()->id);

        if($verificacao){
            dd('chegou');
        }

    }
}
