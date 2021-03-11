<?php

namespace App\Services\NotaEspelho\GerarAutomaticoNotaEspelho\Abstracts;

use Carbon\CarbonImmutable;
use App\Models\NotaEspelho\NotaEspelho;
use App\Models\EspelhoRecorrente\EspelhoRecorrente;
use App\Models\NotaEspelhoEstado\NotaEspelhoEstado;
use App\Models\PatrimonioAlugado\PatrimonioAlugado;
use App\Services\Automatizacoes\Calculadora\Calculadora;
use App\Services\NotaEspelho\GerarAutomaticoNotaEspelho\Base\GerarAutomaticoNotaEspelhoServiceBase;
use Carbon\Carbon;
use Illuminate\Support\Collection;

abstract class GerarAutomaticoNotaEspelhoServiceAbstract extends GerarAutomaticoNotaEspelhoServiceBase
{
    /**
     * Implementação do código.
     *
     * @return boolean
     */
    protected function GerarAutomaticoNotaEspelho() : bool
    {
        $this->createEspelho();

        return true;
    }

    private function getEspelhos() : ?Collection
    {
        return $this->espelho_recorrente_repository->getEspelhoRecorrenteDia();
    }

    private function createEspelho()
    {
        if(is_null($this->getEspelhos())) return null;

        foreach($this->getEspelhos() as $espelho_do_dia){

            $dados = $this->getDadosEspelho($espelho_do_dia);
            $espelho = $this->nota_espelho_repository->createNotaEspelho($dados);
            $this->associarPatrimonioEspelho($espelho_do_dia, $espelho);
        }
    }

    private function associarPatrimonioEspelho(EspelhoRecorrente $espelho_recorrente, NotaEspelho $nota_espelho)
    {
        $patrimonios_recorrentes = $this->espelho_recorrente_patrimonio_repository->getPatrimoniosByEspelhoRecorrente($espelho_recorrente->id);

        foreach($patrimonios_recorrentes as $patrimonio_recorrente){
           $aluguel = $this->patrimonio_alugado_repository->getPatrimonioAlugadoByPatrimonio($patrimonio_recorrente->patrimonio_id);

            $patrimonio_espelho = $this->nota_espelho_patrimonio_repository->createNotaEspelhoPatrimonio($this->getDadosPatrimonioEspelho($aluguel, $nota_espelho));
            $nota_espelho->valor += $patrimonio_espelho->valor;
            $nota_espelho->save();
        }

    }

    private function getDadosEspelho(EspelhoRecorrente $espelho_recorrente) : array
    {

        $emissao = CarbonImmutable::parse(CarbonImmutable::today()->format('Y-m-'). $espelho_recorrente->dia_emissao)->format('Y-m-d');
        $vencimento = CarbonImmutable::parse(CarbonImmutable::today()->format('Y-m-'). $espelho_recorrente->dia_vencimento)->format('Y-m-d');
        $periodo_fim = $this->getUltimoDiaMes($emissao);

        return [
            'data_emissao'              => $emissao,
            'data_vencimento'           => $vencimento,
            'periodo_inicio'            => $emissao,
            'periodo_fim'               => $periodo_fim,
            'valor'                     => 0,
            'nota_espelho_estado_id'    => NotaEspelhoEstado::PENDENTE,
            'cliente_id'                => $espelho_recorrente->contrato->cliente->id,
            'contrato_id'               => $espelho_recorrente->contrato,
            'pedido_id'                 => null,
            'espelho_recorrente_id'     => $espelho_recorrente->id
        ];
    }

    private function getDadosPatrimonioEspelho(PatrimonioAlugado $aluguel, NotaEspelho $notaEspelho)
    {
        $ultimo_faturamento = $this->nota_patrimonio_repository->getUltimoFaturamentoValido($aluguel->patrimonio_id, $aluguel->cliente_id);

        $periodoInicioPatrimonio = periodo_inicio_patrimonio($notaEspelho->periodo_inicio, $ultimo_faturamento, $aluguel);

        $valor_periodo = calculadora_de_periodo($notaEspelho->periodo_inicio, $notaEspelho->periodo_fim, $periodoInicioPatrimonio, $aluguel->item_definido->valor);

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

        return $inicio->addMonth()->subDay();
    }
}
