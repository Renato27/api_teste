<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\PedidoRepository;

class PedidoRepositoryImplementation implements PedidoRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna Pedido baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getPedido(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de Pedido baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getPedidos(): ?Collection
    {
        return $this->getAll();
    }

    /**
     * Cria um novo Pedido.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createPedido(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um Pedido.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updatePedido(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um Pedido.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deletePedido(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }
}
