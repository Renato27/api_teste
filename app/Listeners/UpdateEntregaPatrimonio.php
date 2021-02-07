<?php

namespace App\Listeners;

use App\Events\EntregaPatrimonio;
use App\Http\Resources\ChamadoResource;
use App\Models\TipoChamado\TipoChamado;
use App\Repositories\Contracts\EntregaPatrimonioRepository;
use App\Services\Chamado\GerarChamado\Contracts\GerarChamadoService;
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
     * Serviço para gerar um chamado
     *
     * @var GerarChamadoService
     */
    private GerarChamadoService $gerarChamadoService;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        $this->entregaPatrimonioRepository  = app(EntregaPatrimonioRepository::class);
        $this->gerarChamadoService          = app(GerarChamadoService::class);
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
            $this->gerarChamadoService->setDados([
            'data_acao'             => $entregaPatrimonio->entrega->expedicao->pedido->data_entrega,
            'tipo_chamado_id'       => TipoChamado::ENTREGA,
            'pedido_id'             => $entregaPatrimonio->entrega->expedicao->pedido_id,
            'contato_id'            => $entregaPatrimonio->entrega->expedicao->pedido->contato_id,
            'endereco_id'           => $entregaPatrimonio->entrega->expedicao->pedido->endereco_id,
            ]);

            $chamado = $this->gerarChamadoService->handle();

            return new ChamadoResource($chamado);
        }

    }
}
