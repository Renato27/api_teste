<?php

namespace App\Repositories;

use App\Repositories\Contracts\AberturaContadorRepository;
use Carbon\Carbon;
use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class AberturaContadorRepositoryImplementation implements AberturaContadorRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna AberturaContador baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getAberturaContador(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de AberturaContador baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getAberturaContadors(int $id, int $associacao): ?Collection
    {
        return collect();
    }

    /**
     * Cria um novo AberturaContador
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createAberturaContador(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um AberturaContador
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateAberturaContador(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um AberturaContador
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteAberturaContador(int $id): bool
    {
        $retorno = $this->delete($id);

        if(!$retorno) return false;

        return true;
    }

     /**
     * Retorna os chamados de contador que devem ser abertos hoje.
     *
     * @return array
     */
    public function getAberturasContadorDoDia() : array
    {
        $hoje = CarbonImmutable::today();

        return $this->where(['dia_abertura' => $hoje->format('d')])->get();
    }
}
