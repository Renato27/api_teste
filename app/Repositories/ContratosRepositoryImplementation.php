<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Carbon\CarbonImmutable;
use Illuminate\Support\Collection;
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
        return $this->getAll();
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
        } elseif (! is_null($dia)) {
            return $this->getEspelhosFinalMes($dia);
        } else {
            $hoje = CarbonImmutable::today();

            return $this->getEspelhosFinalMes($hoje);
        }

        return collect();
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
}
