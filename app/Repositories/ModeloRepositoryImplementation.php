<?php

namespace App\Repositories;

use App\Repositories\Contracts\ModeloRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ModeloRepositoryImplementation implements ModeloRepository
{

    use BaseEloquentRepository;

    /**
     * Retorna Modelo baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getModelo(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de Modelo baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getModelos(int $id, int $associacao): ?Collection
    {
        return collect();
    }

    /**
     * Cria um novo Modelo
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createModelo(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um Modelo
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
     * Deleta um Modelo
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteModelo(int $id): bool
    {
        $retorno = $this->delete($id);

        if(!$retorno) return false;

        return true;
    }
}
