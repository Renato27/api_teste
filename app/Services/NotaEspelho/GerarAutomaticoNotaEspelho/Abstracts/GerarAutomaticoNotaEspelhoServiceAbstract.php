<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\NotaEspelho\GerarAutomaticoNotaEspelho\Abstracts;

use Carbon\CarbonImmutable;
use Illuminate\Support\Collection;
use App\Models\NotaEspelho\NotaEspelho;
use App\Models\EspelhoRecorrente\EspelhoRecorrente;
use App\Models\NotaEspelhoEstado\NotaEspelhoEstado;
use App\Models\PatrimonioAlugado\PatrimonioAlugado;
use App\Services\NotaEspelho\GerarAutomaticoNotaEspelho\Base\GerarAutomaticoNotaEspelhoServiceBase;

abstract class GerarAutomaticoNotaEspelhoServiceAbstract extends GerarAutomaticoNotaEspelhoServiceBase
{
    /**
     * Implementação do código.
     *
     * @return bool
     */
    protected function GerarAutomaticoNotaEspelho() : bool
    {
        $this->createEspelho();

        return true;
    }

    /**
     * Retorna os espelhos para serem gerados no dia atual.
     *
     * @return Collection|null
     */
    private function getEspelhos() : ?Collection
    {
        return $this->espelho_recorrente_repository->getEspelhoRecorrenteDia();
    }

    /**
     * Cria um espelho.
     *
     * @return void
     */
    private function createEspelho()
    {
        if (is_null($this->getEspelhos())) {
            return;
        }

        foreach ($this->getEspelhos() as $espelho_do_dia) {
            if ($espelho_do_dia->contrato->medicao_tipo_id >= 2) {
                continue;
            }

            $espelho_dentro_periodo = $this->NotaEspelhoRepository->ultimoEspelhoTemMaisDe30Dias($espelho_do_dia->id, false, true);

            if (! $espelho_dentro_periodo) {
                continue;
            }

            $dados = $this->getDadosEspelho($espelho_do_dia);
            $espelho = $this->NotaEspelhoRepository->createNotaEspelho($dados);
            $this->associarPatrimonioEspelho($espelho_do_dia, $espelho);
        }
    }

    /**
     * Associa os patrimõnios ao espelho criado na etapa anterior.
     *
     * @param EspelhoRecorrente $espelho_recorrente
     * @param NotaEspelho $nota_espelho
     * @return void
     */
    private function associarPatrimonioEspelho(EspelhoRecorrente $espelho_recorrente, NotaEspelho $nota_espelho)
    {
        $patrimonios_recorrentes = $this->espelho_recorrente_patrimonio_repository->getPatrimoniosByEspelhoRecorrente($espelho_recorrente->id);

        foreach ($patrimonios_recorrentes as $patrimonio_recorrente) {
            $aluguel = $this->patrimonio_alugado_repository->getPatrimonioAlugadoByPatrimonio($patrimonio_recorrente->patrimonio_id);

            $patrimonio_espelho = $this->nota_espelho_patrimonio_repository->createNotaEspelhoPatrimonio($this->getDadosPatrimonioEspelho($aluguel, $nota_espelho));

            $nota_espelho->valor += $patrimonio_espelho->valor;
            $nota_espelho->save();
        }
    }

    /**
     * Retorna os dados para criação do espelho.
     *
     * @param EspelhoRecorrente $espelho_recorrente
     * @return array
     */
    private function getDadosEspelho(EspelhoRecorrente $espelho_recorrente) : array
    {
        $emissao = CarbonImmutable::parse(CarbonImmutable::today()->format('Y-m-').$espelho_recorrente->dia_emissao);
        $vencimento = CarbonImmutable::parse(CarbonImmutable::today()->format('Y-m-').$espelho_recorrente->dia_vencimento);
        $periodo_fim = $this->getUltimoDiaMes($emissao->format('Y-m-d'));

        return [
            'data_emissao' => $emissao->format('Y-m-d'),
            'data_vencimento' => $vencimento->greaterThanOrEqualTo($emissao) ? $vencimento->addMonthNoOverflow()->format('Y-m-d') : $vencimento->format('Y-m-d'),
            'periodo_inicio' => $emissao->format('Y-m-d'),
            'periodo_fim' => $periodo_fim,
            'valor' => 0,
            'nota_espelho_estado_id' => NotaEspelhoEstado::PENDENTE,
            'cliente_id' => $espelho_recorrente->contrato->cliente->id,
            'contrato_id' => $espelho_recorrente->contrato_id,
            'pedido_id' => null,
            'espelho_recorrente_id' => $espelho_recorrente->id,
        ];
    }

    /**
     * Retorna os dados parar criação dos patrimõnios do espelho.
     *
     * @param PatrimonioAlugado $aluguel
     * @param NotaEspelho $notaEspelho
     * @return array
     */
    private function getDadosPatrimonioEspelho(PatrimonioAlugado $aluguel, NotaEspelho $notaEspelho) : array
    {
        $ultimo_faturamento = $this->nota_patrimonio_repository->getUltimoFaturamentoValido($aluguel->patrimonio_id, $aluguel->cliente_id);

        $periodoInicioPatrimonio = periodo_inicio_patrimonio($notaEspelho->periodo_inicio, $ultimo_faturamento, $aluguel);

        $valor_periodo = calculadora_de_periodo($notaEspelho, $periodoInicioPatrimonio, $aluguel->item_definido->valor);

        return [
            'periodo_inicio' => $periodoInicioPatrimonio,
            'periodo_fim' => $notaEspelho->periodo_fim,
            'valor' => $valor_periodo,
            'patrimonio_id' => $aluguel->patrimonio_id,
            'nota_espelho_id' => $notaEspelho->id,
            'contrato_id' => $notaEspelho->contrato_id,
            'chamado_id' => $aluguel->chamado_id,
        ];
    }

    /**
     * Retorna o último dia do mês.
     *
     * @param string $data
     * @return string
     */
    private function getUltimoDiaMes(string $data) : String
    {
        $inicio = CarbonImmutable::parse($data);

        if ($inicio->format('d') == 1) {
            return $inicio->endOfMonth()->format('Y-m-d');
        } elseif (($inicio->format('d') == 29 || $inicio->format('d') == 30 || $inicio->format('d') == 31) && $inicio->addMonthNoOverflow()->format('m') == 2) {
            return $inicio->addMonthNoOverflow()->endOfMonth()->format('Y-m-d');
        }

        return $inicio->addMonth()->subDay()->format('Y-m-d');
    }
}
