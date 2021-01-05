<?php

namespace App\Repositories;

use App\Repositories\Contracts\CompraRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class CompraRepositoryImplementation implements CompraRepository
{

    use BaseEloquentRepository;

    /**
     * Retorna Compra baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getCompra(int $id): ?Model
    {
        return $this->find($id)
    }

    /**
     * Retorna uma coleção de Compra baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getCompras(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo Compra
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createCompra(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um Compra
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateCompra(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um Compra
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteCompra(int $id): bool
    {
        $retorno = $this->delete($id);

        if(!$retorno) return false;

        return true;
    }
}
