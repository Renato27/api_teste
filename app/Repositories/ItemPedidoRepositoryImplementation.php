<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\ItemPedidoRepository;

class ItemPedidoRepositoryImplementation implements ItemPedidoRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna ItemPedido baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getItemPedido(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de ItemPedido baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getItemPedidos(int $id, int $associacao): ?Collection
    {
        return $this;
    }

    /**
     * Cria um novo ItemPedido.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createItemPedido(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um ItemPedido.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateItemPedido(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um ItemPedido.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteItemPedido(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }
}
