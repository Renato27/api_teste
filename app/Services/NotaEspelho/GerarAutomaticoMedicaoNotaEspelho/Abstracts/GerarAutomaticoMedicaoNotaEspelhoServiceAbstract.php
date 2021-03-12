<?php

namespace App\Services\NotaEspelho\GerarAutomaticoMedicaoNotaEspelho\Abstracts;

use Carbon\CarbonImmutable;
use App\Models\Contratos\Contrato;
use App\Models\MedicaoTipo\MedicaoTipo;
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
     * @return boolean
     */
    protected function GerarAutomaticoMedicaoNotaEspelho() : bool
    {
        $this->createEspelho();

        return true;
    }

     /**
     * Retorna os espelhos para serem gerados no dia atual.
     *
     * @return Collection|null
     */
    private function getContratos() : ?Collection
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
        if(is_null($this->getContratos())) return null;

        foreach($this->getContratos() as $contrato_do_dia){

            $espelho_dentro_periodo = $this->NotaEspelhoRepository->ultimoEspelhoTemMaisDe30Dias($contrato_do_dia->id, false, true);

            if(!$espelho_dentro_periodo) continue;

            $dados = $this->getDadosEspelho($contrato_do_dia);
            $espelho = $this->NotaEspelhoRepository->createNotaEspelho($dados);
            $this->associarPatrimonioEspelho($contrato_do_dia, $espelho);
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

        foreach($patrimonios_contrato as $patrimonio_contrato){

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
    private function getDadosEspelho(Contrato $contrato) : array
    {

        $emissao = CarbonImmutable::parse(CarbonImmutable::today()->format('Y-m-'). $contrato->dia_emissao_nota);
        $vencimento = CarbonImmutable::parse(CarbonImmutable::today()->format('Y-m-'). $contrato->dia_vencimento_nota);
        $periodo_fim = $this->getUltimoDiaMes($emissao->format('Y-m-d'));

        return [
            'data_emissao'              => $emissao->format('Y-m-d'),
            'data_vencimento'           => $vencimento->greaterThanOrEqualTo($emissao) ? $vencimento->addMonthNoOverflow()->format('Y-m-d') : $vencimento->format('Y-m-d'),
            'periodo_inicio'            => $emissao->format('Y-m-d'),
            'periodo_fim'               => $periodo_fim,
            'valor'                     => 0,
            'nota_espelho_estado_id'    => NotaEspelhoEstado::PENDENTE,
            'cliente_id'                => $contrato->cliente->id,
            'contrato_id'               => $contrato->id,
            'pedido_id'                 => null,
            'espelho_recorrente_id'     => null
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
            'periodo_inicio'    => $periodoInicioPatrimonio,
            'periodo_fim'       => $notaEspelho->periodo_fim,
            'valor'             => $valor_periodo,
            'patrimonio_id'     => $aluguel->patrimonio_id,
            'nota_espelho_id'   => $notaEspelho->id,
            'contrato_id'       => $notaEspelho->contrato_id,
            'chamado_id'        => $aluguel->chamado_id
        ];
    }

     /**
     * Retorna o último dia do mês.
     *
     * @param string $data
     * @return String
     */
    private function getUltimoDiaMes(string $data) : String
    {
        $inicio = CarbonImmutable::parse($data);

        if($inicio->format('d') == 1){

            return $inicio->endOfMonth()->format('Y-m-d');

        }else if(($inicio->format('d') == 29 || $inicio->format('d') == 30 || $inicio->format('d') == 31) && $inicio->addMonthNoOverflow()->format('m') == 2){

            return $inicio->addMonthNoOverflow()->endOfMonth()->format('Y-m-d');

        }
        return $inicio->addMonth()->subDay()->format('Y-m-d');
    }

    private function verificaPeriodoPorContrato(Contrato $contrato)
    {
        if($contrato->medicao_tipo_id == MedicaoTipo::A_VENCER){


        }else{

        }
    }
}
