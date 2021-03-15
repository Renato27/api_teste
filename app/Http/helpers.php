<?php

use App\Models\Contratos\Contrato;
use App\Models\MedicaoTipo\MedicaoTipo;
use App\Models\NotaEspelho\NotaEspelho;
use App\Models\NotaPatrimonio\NotaPatrimonio;
use App\Models\PatrimonioAlugado\PatrimonioAlugado;
use App\Services\Automatizacoes\Calculadora\Calculadora;
use Carbon\Carbon;
use Carbon\CarbonImmutable;

function periodo_inicio_patrimonio(string $inicio,
?NotaPatrimonio $notaPatrimonio = null, ?PatrimonioAlugado $patrimonio = null) : string
{
    $dataMedicao = null;

    if($patrimonio->cobrado == 1){
        $dataMedicao = $inicio;
    }else{
        $dataMedicao = $patrimonio->data_entrega;
    }

    if(!is_null($notaPatrimonio)){
        $dataUltimaFatura = CarbonImmutable::parse($notaPatrimonio->periodo_fim);
        $periodoInicio = CarbonImmutable::parse($inicio);

        if($dataUltimaFatura->addDay()->equalTo($periodoInicio)){
            return $dataMedicao;
        }else{
            return $dataUltimaFatura->addDay()->format('Y-m-d');
        }
    }

    return $dataMedicao;
}

function calculadora_de_periodo(NotaEspelho $notaEspelho, string $inicioPatrimonio, float $valor) : float
{
    $periodo_inicio = Carbon::parse($notaEspelho->periodo_inicio);
    $periodo_fim = Carbon::parse($notaEspelho->periodo_fim);
    $periodo_inicio_patrimonio = Carbon::parse($inicioPatrimonio);

    $calculado_de_periodo = new Calculadora();
    return $calculado_de_periodo->handle($periodo_inicio, $periodo_fim, $periodo_inicio_patrimonio, $valor);
}

 /**
 * Verifica qual periodo início será utilizado na nota
 *
 * @param integer $contrato
 * @return string
 */
function verificaPeriodoPorContrato(Contrato $contrato, string $emissao = null) : array
{
    if($contrato->medicao_tipo_id == MedicaoTipo::VENCIDA){
       return contratoVencida($contrato);
    }

    if($contrato->medicao_tipo_id == MedicaoTipo::A_VENCER){

        return ContratoAVencer($contrato);
    }
}

/**
 * Verifica qual periodo início será utilizado na nota
 *
 * @param integer $contrato
 * @return string
 */
function ContratoAVencer(Contrato $contrato) : array
{
    if(!is_null($contrato->dia_periodo_inicio_nota) && !is_null($contrato->dia_periodo_fim_nota)){

        $periodoFim = Carbon::parse(Carbon::today()->format('Y-m-') . $contrato->dia_periodo_fim_nota);

        $periodoInicio = Carbon::parse(Carbon::today()->format('Y-m-') . $contrato->dia_periodo_inicio_nota);

        $diferença = $periodoInicio->diffInDays($periodoFim->addDay());

        if($diferença < 30){
            return [
                'periodoInicio' => Carbon::parse(Carbon::today()->format('Y-m-') . $contrato->dia_periodo_inicio_nota)->format('Y-m-d'),
                'periodoFim'    => Carbon::parse(Carbon::today()->addMonthNoOverflow()->format('Y-m-') . $contrato->dia_periodo_fim_nota)->format('Y-m-d')
            ];
        }

        return [
            'periodoInicio' => Carbon::parse(Carbon::today()->format('Y-m-') . $contrato->dia_periodo_inicio_nota)->format('Y-m-d'),
            'periodoFim'    => Carbon::parse(Carbon::today()->format('Y-m-') . $contrato->dia_periodo_fim_nota)->format('Y-m-d')
        ];

    }

    return [
        'periodoInicio' =>  Carbon::today()->format('Y-m-d'),
        'periodoFim'    => Carbon::today()->addMonthNoOverflow()->subDay()->format('Y-m-d')
    ];
}

function contratoVencida(Contrato $contrato) : array
{
    if(!is_null($contrato->dia_periodo_inicio_nota) && !is_null($contrato->dia_periodo_fim_nota)){
        $periodoFim = Carbon::parse(Carbon::today()->format('Y-m-') . $contrato->dia_periodo_fim_nota);

        $periodoInicio = Carbon::parse(Carbon::today()->format('Y-m-') . $contrato->dia_periodo_inicio_nota);

        $diferença = $periodoInicio->diffInDays($periodoFim->addDay());

        if($diferença < 30){
            return [
                'periodoInicio' => Carbon::parse(Carbon::today()->subMonthNoOverflow()->format('Y-m-') . $contrato->dia_periodo_inicio_nota)->format('Y-m-d'),
                'periodoFim'    => Carbon::parse(Carbon::today()->format('Y-m-') . $contrato->dia_periodo_fim_nota)->format('Y-m-d')
            ];
        }

        return [
            'periodoInicio' => Carbon::parse(Carbon::today()->subMonthNoOverflow()->format('Y-m-') . $contrato->dia_periodo_inicio_nota)->format('Y-m-d'),
            'periodoFim'    => Carbon::parse(Carbon::today()->subMonthNoOverflow()->format('Y-m-') . $contrato->dia_periodo_fim_nota)->format('Y-m-d')
        ];

    }

    return [
        'periodoInicio' =>  Carbon::today()->subMonthNoOverflow()->format('Y-m-d'),
        'periodoFim'    => Carbon::today()->subDay()->format('Y-m-d')
    ];
}

function getVencimento(Contrato $contrato, ?string $inicio = null) : string
{
    if(!is_null($contrato->dia_vencimento_nota)){

        $emissao = Carbon::parse(Carbon::today()->format('Y-m-') . $contrato->dia_emissao_nota);

        $vencimento = Carbon::parse(Carbon::today()->format('Y-m-') . $contrato->dia_vencimento_nota);

        $diferenca = $emissao->diffInDays($vencimento->addDay());

        if($diferenca < 30){

            if($contrato->medicao_tipo_id == 3){

                if($contrato->dia_periodo_inicio_nota == 1 && $contrato->dia_periodo_fim_nota == 30 && $contrato->dia_vencimento_nota == 30){

                    return Carbon::parse(Carbon::today()->format('Y-m-') . $contrato->dia_vencimento_nota)->format('Y-m-d');
                }

                return Carbon::parse(Carbon::today()->addMonthNoOverflow()->format('Y-m-') . $contrato->dia_vencimento_nota)->format('Y-m-d');
            }

            return Carbon::parse(Carbon::today()->format('Y-m-') . $contrato->dia_vencimento_nota)->format('Y-m-d');
        }

        return Carbon::parse(Carbon::today()->format('Y-m-') . $contrato->dia_vencimento_nota)->format('Y-m-d');
    }

    $vencimentoPeriodo = Carbon::parse($inicio)->addMonthNoOverflow()->subDay()->format('Y-m-d');

    return $vencimentoPeriodo;
}
