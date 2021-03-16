<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

use Carbon\Carbon;
use Carbon\CarbonImmutable;
use App\Models\Contratos\Contrato;
use App\Models\NotaEspelho\NotaEspelho;
use App\Models\NotaPatrimonio\NotaPatrimonio;
use App\Models\PatrimonioAlugado\PatrimonioAlugado;
use App\Services\Automatizacoes\Calculadora\Calculadora;

function periodo_inicio_patrimonio(
    string $inicio,
    ?NotaPatrimonio $notaPatrimonio = null,
    ?PatrimonioAlugado $patrimonio = null
) : string {
    $dataMedicao = null;

    if ($patrimonio->cobrado == 1) {
        $dataMedicao = $inicio;
    } else {
        $dataMedicao = $patrimonio->data_entrega;
    }

    if (! is_null($notaPatrimonio)) {
        $dataUltimaFatura = CarbonImmutable::parse($notaPatrimonio->periodo_fim);
        $periodoInicio = CarbonImmutable::parse($inicio);

        if ($dataUltimaFatura->addDay()->equalTo($periodoInicio)) {
            return $dataMedicao;
        }

        return $dataUltimaFatura->addDay()->format('Y-m-d');
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

function getVencimento(Contrato $contrato, ?string $inicio = null) : string
{
    if (! is_null($contrato->dia_vencimento_nota)) {
        $emissao = Carbon::parse(Carbon::today()->format('Y-m-').$contrato->dia_emissao_nota);

        $vencimento = Carbon::parse(Carbon::today()->format('Y-m-').$contrato->dia_vencimento_nota);

        $diferenca = $emissao->diffInDays($vencimento->addDay());

        if ($diferenca < 30) {
            if ($contrato->medicao_tipo_id == 3) {
                if ($contrato->dia_periodo_inicio_nota == 1 && $contrato->dia_periodo_fim_nota == 30 && $contrato->dia_vencimento_nota == 30) {
                    return Carbon::parse(Carbon::today()->format('Y-m-').$contrato->dia_vencimento_nota)->format('Y-m-d');
                }

                return Carbon::parse(Carbon::today()->addMonthNoOverflow()->format('Y-m-').$contrato->dia_vencimento_nota)->format('Y-m-d');
            }

            return Carbon::parse(Carbon::today()->format('Y-m-').$contrato->dia_vencimento_nota)->format('Y-m-d');
        }

        return Carbon::parse(Carbon::today()->format('Y-m-').$contrato->dia_vencimento_nota)->format('Y-m-d');
    }

    return Carbon::parse($inicio)->addMonthNoOverflow()->subDay()->format('Y-m-d');
}
