<?php

use App\Models\NotaPatrimonio\NotaPatrimonio;
use App\Models\PatrimonioAlugado\PatrimonioAlugado;
use App\Services\Automatizacoes\Calculadora\Calculadora;
use Carbon\Carbon;
use Carbon\CarbonImmutable;

function periodo_inicio_patrimonio(string $inicio,
?NotaPatrimonio $notaPatrimonio = null, ?PatrimonioAlugado $patrimonio = null) : string
{
    $dataMedicao = null;

    if($patrimonio->ja_foi_cobrado == 1){
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

function calculadora_de_periodo(string $inicio, string $fim, string $inicioPatrimonio, float $valor) : float
{
    $periodo_inicio = Carbon::parse($inicio);
    $periodo_fim = Carbon::parse($fim);
    $periodo_inicio_patrimonio = Carbon::parse($inicioPatrimonio);

    $calculado_de_periodo = new Calculadora();
    return $calculado_de_periodo->handle($periodo_inicio, $periodo_fim, $periodo_inicio_patrimonio, $valor);
}
