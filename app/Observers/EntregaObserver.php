<?php

namespace App\Observers;

use Carbon\CarbonImmutable;
use App\Models\Entrega\Entrega;
use App\Models\Expedicao\Expedicao;
use App\Models\StatusPedido\StatusPedido;
use App\Events\NotaEspelhoPatrimonioEvent;
use App\Models\StatusChamado\StatusChamado;
use App\Models\ExpedicaoEstado\ExpedicaoEstado;
use App\Models\AberturaContador\AberturaContador;
use App\Models\NotaEspelhoEstado\NotaEspelhoEstado;
use App\Models\AberturaContadorPatrimonio\AberturaContadorPatrimonio;
use App\Services\PatrimonioAlugado\GerarPatrimonioAlugado\Contracts\GerarPatrimonioAlugadoService;

class EntregaObserver
{
    /**
     * Handle the Entrega "created" event.
     *
     * @param  \App\Models\Entrega  $entrega
     * @return void
     */
    public function created(Entrega $entrega)
    {
        $expedicao = Expedicao::find($entrega->expedicao_id);
        $expedicao->expedicao_estado_id = 2;
        $expedicao->save();
    }

    /**
     * Handle the Entrega "updated" event.
     *
     * @param  \App\Models\Entrega  $entrega
     * @return void
     */
    public function updated(Entrega $entrega)
    {
        //
    }

    /**
     * Handle the Entrega "deleted" event.
     *
     * @param  \App\Models\Entrega  $entrega
     * @return void
     */
    public function deleting(Entrega $entrega)
    {
        $pedidoRepository = app(PedidoRepository::class);
        $expedicaoRepository = app(ExpedicaoRepository::class);
        $alugarPatrimonioService = app(GerarPatrimonioAlugadoService::class);
        $entregaPatrimonioRepository = app(EntregaPatrimonioRepository::class);

        switch ($entrega->chamado->status_chamado_id) {
            case StatusChamado::ENCERRADO:

                $patrimoniosParaContador = collect();

                foreach ($entrega->entrega_patrimonios as $entregaPatrimonio) {

                    $alugarPatrimonioService->setChamado($entrega->chamado);
                    $aluguel = $alugarPatrimonioService->setEntregaPatrimonio($entregaPatrimonio)->handle();

                    if ($entregaPatrimonio->patrimonio->tipo_patrimonio_id == 11 || $entregaPatrimonio->patrimonio->tipo_patrimonio_id == 16) {
                        $patrimoniosParaContador->add($entregaPatrimonio->patrimonio_id);
                    }

                    event(new NotaEspelhoPatrimonioEvent($entrega->chamado->pedido->nota_espelho, $aluguel));
                }

                $entrega->chamado->pedido->nota_espelho->nota_espelho_estado_id = NotaEspelhoEstado::PENDENTE;
                $entrega->chamado->pedido->nota_espelho->save();

                if (count($patrimoniosParaContador) > 0) {

                    $contador = AberturaContador::create([
                        'dia_abertura' => CarbonImmutable::parse($entrega->chamado->pedido->data_entrega)->format('d'),
                        'contato_id' => $entrega->chamado->contato_id,
                        'endereco_id' => $entrega->chamado->endereco_id,
                    ]);

                    foreach ($patrimoniosParaContador as $patrimonioContador) {
                        AberturaContadorPatrimonio::create([
                            'abertura_contador_id' => $contador->id,
                            'patrimonio_id' => $patrimonioContador,
                        ]);
                    }
                }

                break;

            case StatusChamado::CANCELADO:

                $expedicao = Expedicao::where('chamado_id', $entrega->chamado_id)->first();
                $expedicaoRepository->updateExpedicao($expedicao->id, ['expedicao_estado_id' => ExpedicaoEstado::CANCELADA]);

                $entregaPatrimonioRepository->setPatrimonioEntregaDisponivel($entrega->id);

                $pedidoRepository->updatePedido($entrega->chamado->pedido_id, ['status_pedido_id' => StatusPedido::CANCELADO]);

                break;

            default:
                # code...
                break;
        }

    }

    /**
     * Handle the Entrega "restored" event.
     *
     * @param  \App\Models\Entrega  $entrega
     * @return void
     */
    public function restored(Entrega $entrega)
    {
        //
    }

    /**
     * Handle the Entrega "force deleted" event.
     *
     * @param  \App\Models\Entrega  $entrega
     * @return void
     */
    public function forceDeleted(Entrega $entrega)
    {
        //
    }
}
