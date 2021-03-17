<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\NotaEspelho\GerarAutomaticoMedicaoNotaEspelho\Abstracts;

use Carbon\CarbonImmutable;
use App\Models\Contratos\Contrato;
use Illuminate\Support\Collection;
use App\Models\NotaEspelho\NotaEspelho;
use App\Models\NotaEspelhoEstado\NotaEspelhoEstado;
use App\Models\PatrimonioAlugado\PatrimonioAlugado;
use App\Services\NotaEspelho\GerarAutomaticoMedicaoNotaEspelho\Base\GerarAutomaticoMedicaoNotaEspelhoServiceBase;

abstract class GerarAutomaticoMedicaoNotaEspelhoServiceAbstract extends GerarAutomaticoMedicaoNotaEspelhoServiceBase
{
    /**
     * Implementação do código.
     *
     * @return bool
     */
    protected function GerarAutomaticoMedicaoNotaEspelho(): bool
    {
        $this->createEspelho();

        return true;
    }

    /**
     * Retorna os espelhos para serem gerados no dia atual.
     *
     * @return Collection|null
     */
    private function getContratos(): ?Collection
    {
        return $this->contrato_repository->getContratosDoDia();
    }

    /**
     * Cria um espelho.
     *
     * @return void
     */
    private function createEspelho()
    {
        if (is_null($this->getContratos())) {
            return;
        }

        foreach ($this->getContratos() as $contrato_do_dia) {
            $patrimonios = $this->patrimonio_alugado_repository->getPatrimonioAlugadosByContrato($contrato_do_dia->id);

            if (count($patrimonios) < 1) {
                continue;
            }

            $espelho_dentro_periodo = $this->NotaEspelhoRepository->ultimoEspelhoTemMaisDe30Dias($contrato_do_dia->id, true);

            if (! $espelho_dentro_periodo) {
                continue;
            }

            $dados = $this->getDadosEspelho($contrato_do_dia);
            $espelho = $this->NotaEspelhoRepository->createNotaEspelho($dados);
            $this->associarPatrimonioEspelho($contrato_do_dia, $espelho);
            $this->associarLancamentoFuturos($espelho);
        }
    }

    /**
     * Associa os patrimõnios ao espelho criado na etapa anterior.
     *
     * @param EspelhoRecorrente $espelho_recorrente
     * @param NotaEspelho $nota_espelho
     * @return void
     */
    private function associarPatrimonioEspelho(Contrato $contrato, NotaEspelho $nota_espelho)
    {
        $patrimonios_contrato = $this->patrimonio_alugado_repository->getPatrimonioAlugadosByContrato($contrato->id);

        foreach ($patrimonios_contrato as $patrimonio_contrato) {
            $patrimonio_espelho = $this->nota_espelho_patrimonio_repository->createNotaEspelhoPatrimonio($this->getDadosPatrimonioEspelho($patrimonio_contrato, $nota_espelho));

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
    private function getDadosEspelho(Contrato $contrato): array
    {
        $periodo = $this->contrato_repository->verificaPeriodoPorContrato($contrato);
        $vencimento = getVencimento($contrato, $periodo['periodoInicio']);
        $periodo_fim = $this->getUltimoDiaMes($periodo['periodoInicio']);

        return [
            'data_emissao' => CarbonImmutable::today()->format('Y-m-d'),
            'data_vencimento' => $vencimento,
            'periodo_inicio' => $periodo['periodoInicio'],
            'periodo_fim' => $periodo_fim,
            'valor' => 0,
            'nota_espelho_estado_id' => NotaEspelhoEstado::PENDENTE,
            'cliente_id' => $contrato->cliente->id,
            'contrato_id' => $contrato->id,
            'pedido_id' => null,
            'espelho_recorrente_id' => null,
        ];
    }

    /**
     * Retorna os dados parar criação dos patrimõnios do espelho.
     *
     * @param PatrimonioAlugado $aluguel
     * @param NotaEspelho $notaEspelho
     * @return array
     */
    private function getDadosPatrimonioEspelho(PatrimonioAlugado $aluguel, NotaEspelho $notaEspelho): array
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

    private function associarLancamentoFuturos(NotaEspelho $nota_espelho)
    {
        $mes_busca = CarbonImmutable::parse($nota_espelho->data_emissao)->format('m');

        $lancamentos = $this->lancamentoFuturoRepository
            ->getLancamentoFuturosByContratoAndMonth($nota_espelho->contrato_id, $mes_busca);

        $valor_total = 0;

        foreach($lancamentos as $lancamento){

            $valor_total += $lancamento->quantidade * $lancamento->valor_unitario;
            $lancamento->nota_espelho_id = $nota_espelho->id;
            $lancamento->save();
        }

        $nota_espelho->valor + ($valor_total);
        $nota_espelho->save();
    }

    /**
     * Retorna o último dia do mês.
     *
     * @param string $data
     * @return string
     */
    private function getUltimoDiaMes(string $data): String
    {
        $inicio = CarbonImmutable::parse($data);

        if ($inicio->format('d') == 1) {
            return $inicio->endOfMonth()->format('Y-m-d');
        }

        if (($inicio->format('d') == 29 || $inicio->format('d') == 30 || $inicio->format('d') == 31) && $inicio->addMonthNoOverflow()->format('m') == 2) {
            return $inicio->addMonthNoOverflow()->endOfMonth()->format('Y-m-d');
        }

        return $inicio->addMonth()->subDay()->format('Y-m-d');
    }
}
