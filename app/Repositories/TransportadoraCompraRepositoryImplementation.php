<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\TransportadoraCompraRepository;

class TransportadoraCompraRepositoryImplementation implements TransportadoraCompraRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna TransportadoraCompra baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getTransportadoraCompra(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de TransportadoraCompra baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getTransportadoraCompras(int $id, int $associacao): ?Collection
    {
    }

    /**
     * Cria um novo TransportadoraCompra.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createTransportadoraCompra(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um TransportadoraCompra.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateTransportadoraCompra(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um TransportadoraCompra.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteTransportadoraCompra(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }
}
