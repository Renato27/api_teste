<?php

namespace App\Observers;

use App\Models\Entrega\Entrega;
use App\Models\PatrimonioAlugado\PatrimonioAlugado;
use App\Models\Retirada\Retirada;
use App\Models\StatusChamado\StatusChamado;
use App\Models\Troca\Troca;
use App\Repositories\Contracts\PatrimonioRepository;
use App\Services\PatrimonioAlugado\GerarPatrimonioAlugado\Contracts\GerarPatrimonioAlugadoService;

class TrocaObserver
{
    /**
     * Handle the Troca "created" event.
     *
     * @param  \App\Models\Troca  $troca
     * @return void
     */
    public function created(Troca $troca)
    {
        //
    }

    /**
     * Handle the Troca "updated" event.
     *
     * @param  \App\Models\Troca  $troca
     * @return void
     */
    public function updated(Troca $troca)
    {
        //
    }

    /**
     * Handle the Troca "deleted" event.
     *
     * @param  \App\Models\Troca  $troca
     * @return void
     */
    public function deleting(Troca $troca)
    {
        $alugarPatrimonioService = app(GerarPatrimonioAlugadoService::class);
        $patrimonioRepository = app(PatrimonioRepository::class);

        switch ($troca->chamado->status_chamado_id) {
            case StatusChamado::ENCERRADO:

                foreach ($troca->hasPatrimoniosEntrega as $entregaPatrimonio) {

                    foreach ($troca->hasPatrimoniosRetirada as $retiradaPatrimonio) {

                        $alugarPatrimonioService->setChamado($troca->chamado);
                        $alugarPatrimonioService->setEntregaPatrimonio($entregaPatrimonio);
                        $alugarPatrimonioService->setPatrimonioRetirada($retiradaPatrimonio)->handle();

                        $patrimonio_alugado = PatrimonioAlugado::where('patrimonio_id', $retiradaPatrimonio->patrimonio_id)->first();
                        $patrimonio_alugado->delete();

                        $patrimonioRepository->setDisponivel($retiradaPatrimonio->patrimonio);
                        $patrimonioRepository->setAlugado($entregaPatrimonio->patrimonio);
                    }

                }

                break;

            case StatusChamado::CANCELADO:

                foreach ($troca->hasPatrimoniosEntrega as $entregaPatrimonio) {

                    $patrimonioRepository->setDisponivel($entregaPatrimonio->patrimonio);
                    $entregaPatrimonio->delete();
                }

                foreach($troca->hasPatrimoniosRetirada as $retiradaPatrimonio){

                    $patrimonioRepository->setAlugado($retiradaPatrimonio->patrimonio);
                    $retiradaPatrimonio->delete();
                }

                break;
        }
    }

    /**
     * Handle the Troca "restored" event.
     *
     * @param  \App\Models\Troca  $troca
     * @return void
     */
    public function restored(Troca $troca)
    {
        //
    }

    /**
     * Handle the Troca "force deleted" event.
     *
     * @param  \App\Models\Troca  $troca
     * @return void
     */
    public function forceDeleted(Troca $troca)
    {
        //
    }
}
