<?php

namespace App\Observers;

use App\Events\NotaEspelhoPatrimonioEvent;
use App\Models\AberturaContador\AberturaContador;
use App\Models\Chamado\Chamado;
use App\Models\EntregaPatrimonio\EntregaPatrimonio;
use App\Models\Entrega\Entrega;
use App\Models\EstadoPatrimonio\EstadoPatrimonio;
use App\Models\ExpedicaoEstado\ExpedicaoEstado;
use App\Models\Expedicao\Expedicao;
use App\Models\NotaEspelhoEstado\NotaEspelhoEstado;
use App\Models\Pedido\Pedido;
use App\Models\Retirada\Retirada;
use App\Models\RetiradaPatrimonio\RetiradaPatrimonio;
use App\Models\StatusChamado\StatusChamado;
use App\Models\StatusPedido\StatusPedido;
use App\Models\TipoChamado\TipoChamado;
use App\Repositories\Contracts\EntregaPatrimonioRepository;
use App\Repositories\Contracts\ExpedicaoRepository;
use App\Repositories\Contracts\PedidoRepository;
use App\Repositories\Contracts\RetiradaPatrimonioRepository;
use App\Services\PatrimonioAlugado\GerarPatrimonioAlugado\Contracts\GerarPatrimonioAlugadoService;
use Carbon\Carbon;
use Carbon\CarbonImmutable;

class ChamadoObserver
{
    /**
     * Handle the Chamado "created" event.
     *
     * @param  \App\Models\Chamado  $chamado
     * @return void
     */
    public function created(Chamado $chamado)
    {
        if(!is_null($chamado->pedido_id)){
            $expedicao = Expedicao::where('pedido_id', $chamado->pedido_id)->first();
            $expedicao->chamado_id = $chamado->id;
            $expedicao->expedicao_estado_id = ExpedicaoEstado::LIBERADO;
            $expedicao->save();

            $entrega = Entrega::where('expedicao_id', $expedicao->id)->first();
            $entrega->chamado_id = $chamado->id;
            $entrega->save();
        }
    }

    /**
     * Handle the Chamado "updated" event.
     *
     * @param  \App\Models\Chamado  $chamado
     * @return void
     */
    public function updated(Chamado $chamado)
    {

        $entregaPatrimonioRepository = app(EntregaPatrimonioRepository::class);
        $retiradaPatrimonioRepository = app(RetiradaPatrimonioRepository::class);
        $pedidoRepository = app(PedidoRepository::class);
        $expedicaoRepository = app(ExpedicaoRepository::class);
        $alugarPatrimonioService = app(GerarPatrimonioAlugadoService::class);

        switch ($chamado->status_chamado_id) {
            case StatusChamado::CANCELADO:

                switch ($chamado->tipo_chamado_id) {
                    case TipoChamado::ENTREGA:

                        $expedicao = Expedicao::where('chamado_id', $chamado->id)->first();
                        $expedicaoRepository->updateExpedicao($expedicao->id, ['expedicao_estado_id' => ExpedicaoEstado::CANCELADA]);

                        $entrega = Entrega::where('chamado_id', $chamado->id)->first();

                        $entregaPatrimonioRepository->setPatrimonioEntregaDisponivel($entrega->id);

                        $entrega->delete();

                        $pedidoRepository->updatePedido($chamado->pedido_id, ['status_pedido_id' => StatusPedido::CANCELADO]);

                        break;

                    case TipoChamado::TROCA:

                        $entrega = Entrega::where('chamado_id', $chamado->id)->first();
                        $retirada = Retirada::where('chamado_id', $chamado->id)->first();

                        $entregaPatrimonioRepository->setPatrimonioEntregaDisponivel($entrega->id);

                        $retiradaPatrimonioRepository->setPatrimonioRetiradaAlugado($retirada->id);

                        break;

                    default:
                        # code...
                        break;
                }

                break;

            case StatusChamado::ENCERRADO:

                switch ($chamado->tipo_chamado_id) {
                    case TipoChamado::ENTREGA:

                        foreach($chamado->entrega->entrega_patrimonios as $entregaPatrimonio){

                            $alugarPatrimonioService->setChamado($chamado);
                            $aluguel = $alugarPatrimonioService->setEntregaPatrimonio($entregaPatrimonio)->handle();

                            if($entregaPatrimonio->patrimonio->tipo_patrimonio_id == 11 || $entregaPatrimonio->patrimonio->tipo_patrimonio_id == 16){
                                AberturaContador::create([
                                    'dia_abertura' => CarbonImmutable::parse($aluguel->data_entrega)->format('d'),
                                    'patrimonio_id' => $entregaPatrimonio->patrimonio_id,
                                    'contato_id' => $chamado->contato_id
                                ]);
                            }

                            event(new NotaEspelhoPatrimonioEvent($chamado->pedido->nota_espelho, $aluguel));
                        }

                        $chamado->pedido->nota_espelho->nota_espelho_estado_id = NotaEspelhoEstado::PENDENTE;
                        $chamado->pedido->nota_espelho->save();

                        break;

                    case TipoChamado::TROCA:

                        $entrega = Entrega::where('chamado_id', $chamado->id)->first();
                        $retirada = Retirada::where('chamado_id', $chamado->id)->first();

                        foreach($chamado->entrega->entrega_patrimonios as $entregaPatrimonio){

                            $alugarPatrimonioService->setChamado($chamado);
                            $aluguel = $alugarPatrimonioService->setEntregaPatrimonio($entregaPatrimonio)->handle();

                        }

                        $entregaPatrimonioRepository->setPatrimonioEntregaAlugado($entrega->id);

                        $retiradaPatrimonioRepository->setPatrimonioRetiradaDisponivel($retirada->id);

                        break;

                    default:
                            # code...
                            break;
                }

                break;

            case StatusChamado::FECHADO:

                break;

            default:
                # code...
                break;
        }

    }

    /**
     * Handle the Chamado "deleted" event.
     *
     * @param  \App\Models\Chamado  $chamado
     * @return void
     */
    public function deleted(Chamado $chamado)
    {
        //
    }

    /**
     * Handle the Chamado "restored" event.
     *
     * @param  \App\Models\Chamado  $chamado
     * @return void
     */
    public function restored(Chamado $chamado)
    {
        //
    }

    /**
     * Handle the Chamado "force deleted" event.
     *
     * @param  \App\Models\Chamado  $chamado
     * @return void
     */
    public function forceDeleted(Chamado $chamado)
    {
        //
    }
}
