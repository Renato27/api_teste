<?php

namespace App\Repositories;

use App\Repositories\Contracts\PedidoItemRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class PedidoItemRepositoryImplementation implements PedidoItemRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna PedidoItem baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getPedidoItem(int $item): ?Model
    {
        return $this->where(['item_pedido_id' => $item])->first();
    }

    /**
     * Retorna uma coleção de PedidoItem baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getPedidoItems(int $pedido): ?Collection
    {
        return $this->where(['pedido_id' => $pedido])->get();
    }

    /**
     * Cria um novo PedidoItem
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createPedidoItem(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um PedidoItem
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
     * Deleta um PedidoItem
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deletePedidoItem(int $id): bool
    {
        $retorno = $this->delete($id);

        if(!$retorno) return false;

        return true;
    }
}
