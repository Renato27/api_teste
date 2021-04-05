<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\RetiradaRepository;

class RetiradaRepositoryImplementation implements RetiradaRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna Retirada baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getRetirada(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de Retirada baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getRetiradas(int $id, int $associacao): ?Collection
    {
        return collect();
    }

    /**
     * Cria um novo Retirada.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createRetirada(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um Retirada.
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
     * Deleta um Retirada.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteRetirada(int $id): bool
    {
        $retorno = $this->delete($id);

        if ($retorno) {
            return false;
        }

        return true;
    }
}
