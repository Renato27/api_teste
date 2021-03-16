<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\FabricanteRepository;

class FabricanteRepositoryImplementation implements FabricanteRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna Fabricante baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getFabricante(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de Fabricante baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getFabricantes(int $id, int $associacao): ?Collection
    {
        return collect();
    }

    /**
     * Cria um novo Fabricante.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createFabricante(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um Fabricante.
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
     * Deleta um Fabricante.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteFabricante(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }
}
