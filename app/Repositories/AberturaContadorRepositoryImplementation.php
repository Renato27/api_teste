<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Carbon\CarbonImmutable;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\AberturaContadorRepository;

class AberturaContadorRepositoryImplementation implements AberturaContadorRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna AberturaContador baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getAberturaContador(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de AberturaContador baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getAberturaContadors(int $id, int $associacao): ?Collection
    {
        return collect();
    }

    /**
     * Cria um novo AberturaContador.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createAberturaContador(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um AberturaContador.
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
     * Deleta um AberturaContador.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteAberturaContador(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

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
