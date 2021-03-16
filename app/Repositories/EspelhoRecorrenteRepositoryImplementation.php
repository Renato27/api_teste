<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Carbon\CarbonImmutable;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\EspelhoRecorrenteRepository;

class EspelhoRecorrenteRepositoryImplementation implements EspelhoRecorrenteRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna EspelhoRecorrente baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getEspelhoRecorrente(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de EspelhoRecorrente baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getEspelhoRecorrentes(int $id, int $associacao): ?Collection
    {
        return collect();
    }

    /**
     * Cria um novo EspelhoRecorrente.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createEspelhoRecorrente(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um EspelhoRecorrente.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateEspelhoRecorrente(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um EspelhoRecorrente.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteEspelhoRecorrente(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }

    /**
     * Retorna os espelhos recorrentes do dia.
     *
     * @return Collection
     */
    public function getEspelhoRecorrenteDia(?CarbonImmutable $dia = null, ?int $contrato = null) : Collection
    {
        if (! is_null($dia) && ! is_null($contrato)) {
            return $this->where(['dia_emissao' => $dia->format('d'), 'contrato_id' => $contrato, 'cancelado' => 0])->get();
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

                    return $this->where(['dia_emissao' => 31])->get();

                break;
                case 30:

                    return $this->whereIn('dia_emissao', [30, 31])->get();

                break;
                case 29:

                    return $this->whereIn('dia_emissao', [29, 30, 31])->get();

                break;
                case 28:

                    return $this->whereIn('dia_emissao', [28, 29, 30, 31])->get();

                break;
            }
        }

        return $this->where(['dia_emissao' => $dia->format('d')])->get();
    }
}
