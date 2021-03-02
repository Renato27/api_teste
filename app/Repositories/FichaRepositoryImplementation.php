<?php

namespace App\Repositories;

use App\Repositories\Contracts\FichaRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class FichaRepositoryImplementation implements FichaRepository
{

    use BaseEloquentRepository;

    /**
     * Retorna Ficha baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getFicha(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de Ficha baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getFichas(int $id, int $associacao): ?Collection
    {
        return collect();
    }

    /**
     * Cria um novo Ficha
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createFicha(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um Ficha
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateFicha(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um Ficha
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteFicha(int $id): bool
    {
        $retorno = $this->delete($id);

        if(!$retorno) return false;

        return true;
    }
}
