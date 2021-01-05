<?php

namespace App\Repositories;

use App\Repositories\Contracts\FabricanteRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class FabricanteRepositoryImplementation implements FabricanteRepository
{

    use BaseEloquentRepository;

    /**
     * Retorna Fabricante baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getFabricante(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de Fabricante baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getFabricantes(int $id, int $associacao): ?Collection
    {
        return collect();
    }

    /**
     * Cria um novo Fabricante
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createFabricante(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um Fabricante
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateFabricante(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um Fabricante
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteFabricante(int $id): bool
    {
        $retorno = $this->delete($id);

        if(!$retorno) return false;

        return true;
    }
}
