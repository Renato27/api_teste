<?php

namespace App\Services\NotaEspelho\GerarNotaEspelho\Abstracts;

use App\Models\MedicaoTipo\MedicaoTipo;
use App\Models\NotaEspelhoEstado\NotaEspelhoEstado;
use App\Services\NotaEspelho\GerarNotaEspelho\Base\GerarNotaEspelhoServiceBase;
use Carbon\CarbonImmutable;
use Symfony\Component\HttpKernel\Exception\HttpException;

abstract class GerarNotaEspelhoServiceAbstract extends GerarNotaEspelhoServiceBase
{
    /**
     * Implementação do código.
     *
     * @return boolean
     */
    protected function GerarNotaEspelho() : bool
    {

        $this->NotaEspelhoRepository->createNotaEspelho($this->getDados());

        return true;

    }

    private function getDados() : array
    {
        $emissao = CarbonImmutable::parse($this->contratoPedido->pedido->data_entrega);

        if($this->contratoPedido->contrato->medicao_tipo_id == MedicaoTipo::A_VENCER && count($this->contratoPedido->contrato->notas) == 0){

            if(!is_null($this->contratoPedido->contrato->dia_vencimento_nota) && !is_null($this->contratoPedido->contrato->dia_periodo_fim_nota)){

               return $this->getDadosDataContrato($emissao);
            }

            return $this->getDadosData($emissao);
        }


    }

    private function getDadosDataContrato(CarbonImmutable $emissao) : array
    {
        $vencimentoNota = CarbonImmutable::parse(CarbonImmutable::today()->format('Y-m-') . $this->contratoPedido->contrato->dia_vencimento_nota);
        $periodoFimNota = CarbonImmutable::parse(CarbonImmutable::today()->format('Y-m-') . $this->contratoPedido->contrato->dia_periodo_fim_nota);

        return [
            'data_emissao'              => $emissao->format('Y-m-d'),
            'data_vencimento'           => $emissao->greaterThanOrEqualTo($vencimentoNota) ? $vencimentoNota->addMonthNoOverflow()->format('Y-m-d') : $vencimentoNota->format('Y-m-d'),
            'periodo_inicio'            => $emissao->format('Y-m-d'),
            'periodo_fim'               => $emissao->greaterThanOrEqualTo($periodoFimNota) ? $periodoFimNota->addMonthNoOverflow()->format('Y-m-d') : $periodoFimNota->format('Y-m-d'),
            'valor'                     => 0,
            'nota_espelho_estado_id'    => NotaEspelhoEstado::AGUARDANDO_CHAMADO,
            'cliente_id'                => $this->contratoPedido->contrato->cliente->id,
            'contrato_id'               => $this->contratoPedido->contrato_id,
            'pedido_id'                 => $this->contratoPedido->pedido_id,
            'espelho_recorrente_id'     => null,
        ];
    }

    private function getDadosData(CarbonImmutable $emissao) : array
    {
        return  [
            'data_emissao'              => $emissao->format('Y-m-d'),
            'data_vencimento'           => $emissao->addMonthNoOverflow()->subDay()->format('Y-m-d'),
            'periodo_inicio'            => $emissao->format('Y-m-d'),
            'periodo_fim'               => $emissao->addMonthNoOverflow()->subDay()->format('Y-m-d'),
            'valor'                     => 0,
            'nota_espelho_estado_id'    => NotaEspelhoEstado::AGUARDANDO_CHAMADO,
            'cliente_id'                => $this->contratoPedido->contrato->cliente->id,
            'contrato_id'               => $this->contratoPedido->contrato_id,
            'pedido_id'                 => $this->contratoPedido->pedido_id,
            'espelho_recorrente_id'     => null,
        ];
    }
}
