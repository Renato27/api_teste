<?php

namespace App\Repositories;

use App\Repositories\Contracts\RetiradaRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class RetiradaRepositoryImplementation implements RetiradaRepository
{

    use BaseEloquentRepository;

    /**
     * Retorna Retirada baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getRetirada(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de Retirada baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getRetiradas(int $id, int $associacao): ?Collection
    {
        return collect();
    }

    /**
     * Cria um novo Retirada
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createRetirada(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um Retirada
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateRetirada(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um Retirada
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteRetirada(int $id): bool
    {
        $retorno = $this->delete($id);

        if($retorno) return false;

        return true;
    }
}
