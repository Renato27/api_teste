<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\PedidoItemRepository;

class PedidoItemRepositoryImplementation implements PedidoItemRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna PedidoItem baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getPedidoItem(int $item): ?Model
    {
        return $this->where(['item_pedido_id' => $item])->first();
    }

    /**
     * Retorna uma coleção de PedidoItem baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getPedidoItems(int $pedido): ?Collection
    {
        return $this->where(['pedido_id' => $pedido])->get();
    }

    /**
     * Cria um novo PedidoItem.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createPedidoItem(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um PedidoItem.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updatePedidoItem(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um PedidoItem.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deletePedidoItem(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }
}
