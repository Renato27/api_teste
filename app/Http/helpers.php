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
function verificaPeriodoInicioPorContrato(Contrato $contrato, string $emissao = null) : string
{

    //Verificar se a data emissao é menor que a data inicio, se for adicionar um mês.
    if($contrato->medicao_tipo_id == MedicaoTipo::VENCIDA){
        if(!is_null($contrato->dia_periodo_inicio_nota)){
            return CarbonImmutable::parse(CarbonImmutable::parse($emissao)->format('Y-m-'). $contrato->dia_periodo_inicio_nota)->subMonthNoOverflow()->format('Y-m-d');
        }

        return CarbonImmutable::parse($emissao)->subMonthNoOverflow()->format('Y-m-d');
    }

    if($contrato->medicao_tipo_id == MedicaoTipo::VENCIDA){
        if(!is_null($contrato->dia_periodo_inicio_nota)){
            return CarbonImmutable::parse(CarbonImmutable::parse($emissao)->format('Y-m-'). $contrato->dia_periodo_inicio_nota)->format('Y-m-d');
        }

        return CarbonImmutable::parse($emissao)->format('Y-m-d');
    }
}

/**
 * Undocumented function
 *
 * @param integer $contrato
 * @return string
 */
function verificaPeriodoFimPorContrato(Contrato $contrato, string $fim = null) : string
{

    if($contrato->medicao_tipo_id == MedicaoTipo::VENCIDA){
        if(!is_null($contrato->dia_periodo_fim_nota)){
            return CarbonImmutable::parse(CarbonImmutable::parse($fim)->format('Y-m-'). $contrato->dia_periodo_fim_nota)->subMonthNoOverflow()->format('Y-m-d');
        }

        return CarbonImmutable::parse($fim)->subMonthNoOverflow()->format('Y-m-d');
    }

    if($contrato->medicao_tipo_id == MedicaoTipo::VENCIDA){
        if(!is_null($contrato->dia_periodo_fim_nota)){
            return CarbonImmutable::parse(CarbonImmutable::parse($fim)->format('Y-m-'). $contrato->dia_periodo_fim_nota)->format('Y-m-d');
        }

        return CarbonImmutable::parse($fim)->format('Y-m-d');
    }

}
