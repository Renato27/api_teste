<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\ModeloRepository;

class ModeloRepositoryImplementation implements ModeloRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna Modelo baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getModelo(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de Modelo baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getModelos(int $id, int $associacao): ?Collection
    {
        return collect();
    }

    /**
     * Cria um novo Modelo.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createModelo(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um Modelo.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateModelo(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um Modelo.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteModelo(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }
}
