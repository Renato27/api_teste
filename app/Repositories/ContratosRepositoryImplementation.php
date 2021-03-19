<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Carbon\Carbon;
use Carbon\CarbonImmutable;
use App\Models\Contratos\Contrato;
use Illuminate\Support\Collection;
use App\Models\MedicaoTipo\MedicaoTipo;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\ContratosRepository;

class ContratosRepositoryImplementation implements ContratosRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna Contratos baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getContrato(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de Contratos baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getContratos(): ?Collection
    {
        return collect();
    }

    /**
     * Cria um novo Contratos.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createContrato(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um Contratos.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateContrato(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um Contratos.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteContrato(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }

    /**
     * Retorna os contrato de medição do dia.
     *
     * @return Collection
     */
    public function getContratosDoDia(?CarbonImmutable $dia = null, ?int $contrato = null) : Collection
    {
        if (! is_null($dia) && ! is_null($contrato)) {
            return $this->where(['dia_emissao_nota' => $dia->format('d'), 'contrato_id' => $contrato])->get();
        }

        if (! is_null($dia)) {
            return $this->getEspelhosFinalMes($dia);
        }

        $hoje = CarbonImmutable::today();

        return $this->getEspelhosFinalMes($hoje);
    }

    /**
     * Retorna os espelhos de acordo com o último dia do mês.
     *
     * @param int|null $dia
     * @return Collection
     */
    private function getEspelhosFinalMes(?CarbonImmutable $dia): Collection
    {
        $dia = CarbonImmutable::parse($dia);

        if ($dia->addDay()->format('d') == 1) {
            switch ($dia->format('d')) {
                case 31:

                    return $this->where(['dia_emissao_nota' => 31])->whereIn('medicao_tipo_id', [2, 3])->get();

                break;
                case 30:

                    return $this->whereIn('dia_emissao_nota', [30, 31])->whereIn('medicao_tipo_id', [2, 3])->get();

                break;
                case 29:

                    return $this->whereIn('dia_emissao_nota', [29, 30, 31])->whereIn('medicao_tipo_id', [2, 3])->get();

                break;
                case 28:

                    return $this->whereIn('dia_emissao_nota', [28, 29, 30, 31])->whereIn('medicao_tipo_id', [2, 3])->get();

                break;
            }
        }

        return $this->where(['dia_emissao_nota' => $dia->format('d')])->whereIn('medicao_tipo_id', [2, 3])->get();
    }

    /**
     * Verifica qual periodo início será utilizado na nota.
     *
     * @param Contrato $contrato
     * @return array
     */
    public function verificaPeriodoPorContrato(Contrato $contrato, string $emissao = null) : array
    {
        if ($contrato->medicao_tipo_id == MedicaoTipo::VENCIDA) {
            return $this->contratoVencida($contrato);
        }

        if ($contrato->medicao_tipo_id == MedicaoTipo::A_VENCER) {
            return $this->contratoAVencer($contrato);
        }
    }

    /**
     * Retorna os períodos dos contrato de medição a vencer.
     *
     * @param Contrato $contrato
     * @return array
     */
    private function contratoAVencer(Contrato $contrato) : array
    {
        if (! is_null($contrato->dia_periodo_inicio_nota) && ! is_null($contrato->dia_periodo_fim_nota)) {
            $periodoFim = Carbon::parse(Carbon::today()->format('Y-m-').$contrato->dia_periodo_fim_nota);

            $periodoInicio = Carbon::parse(Carbon::today()->format('Y-m-').$contrato->dia_periodo_inicio_nota);

            $diferença = $periodoInicio->diffInDays($periodoFim->addDay());

            if ($diferença < 30) {
                return [
                'periodoInicio' => Carbon::parse(Carbon::today()->format('Y-m-').$contrato->dia_periodo_inicio_nota)->format('Y-m-d'),
                'periodoFim' => Carbon::parse(Carbon::today()->addMonthNoOverflow()->format('Y-m-').$contrato->dia_periodo_fim_nota)->format('Y-m-d'),
            ];
            }

            return [
            'periodoInicio' => Carbon::parse(Carbon::today()->format('Y-m-').$contrato->dia_periodo_inicio_nota)->format('Y-m-d'),
            'periodoFim' => Carbon::parse(Carbon::today()->format('Y-m-').$contrato->dia_periodo_fim_nota)->format('Y-m-d'),
        ];
        }

        return [
        'periodoInicio' => Carbon::today()->format('Y-m-d'),
        'periodoFim' => Carbon::today()->addMonthNoOverflow()->subDay()->format('Y-m-d'),
    ];
    }

    /**
     * Retorna os períodos dos contrato de medição vencida.
     *
     * @param Contrato $contrato
     * @return array
     */
    private function contratoVencida(Contrato $contrato) : array
    {
        if (! is_null($contrato->dia_periodo_inicio_nota) && ! is_null($contrato->dia_periodo_fim_nota)) {
            $periodoFim = Carbon::parse(Carbon::today()->format('Y-m-').$contrato->dia_periodo_fim_nota);

            $periodoInicio = Carbon::parse(Carbon::today()->format('Y-m-').$contrato->dia_periodo_inicio_nota);

            $diferença = $periodoInicio->diffInDays($periodoFim->addDay());

            if ($diferença < 30) {
                return [
                'periodoInicio' => Carbon::parse(Carbon::today()->subMonthNoOverflow()->format('Y-m-').$contrato->dia_periodo_inicio_nota)->format('Y-m-d'),
                'periodoFim' => Carbon::parse(Carbon::today()->format('Y-m-').$contrato->dia_periodo_fim_nota)->format('Y-m-d'),
            ];
            }

            return [
            'periodoInicio' => Carbon::parse(Carbon::today()->subMonthNoOverflow()->format('Y-m-').$contrato->dia_periodo_inicio_nota)->format('Y-m-d'),
            'periodoFim' => Carbon::parse(Carbon::today()->subMonthNoOverflow()->format('Y-m-').$contrato->dia_periodo_fim_nota)->format('Y-m-d'),
        ];
        }

        return [
        'periodoInicio' => Carbon::today()->subMonthNoOverflow()->format('Y-m-d'),
        'periodoFim' => Carbon::today()->subDay()->format('Y-m-d'),
    ];
    }

     /**
     * Retorna todos os contratos á vencer.
     *
     * @return Collection|null
     */
    public function getContratosAVencer(): ?Collection
    {
        $contratos = Contrato::whereHas('patrimonios', function($query){
            return $query->select('patrimonio_id');
        })->with(['cliente:nome_fantasia'])->select('id', 'fim')->get();

        $contratosAVencer = collect();

        foreach($contratos as $contrato){

            $data = CarbonImmutable::parse($contrato->fim);
            $hoje = CarbonImmutable::today();
            $hoje4dias = CarbonImmutable::today()->addDays(4);

            if($data->greaterThanOrEqualTo($hoje) && $data->lessThanOrEqualTo($hoje4dias)){
                $contratosAVencer->add($contrato);
            }
        }
        return $contratosAVencer ;
    }
}
