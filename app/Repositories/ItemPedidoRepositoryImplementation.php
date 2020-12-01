<?php

namespace App\Repositories;

use App\Repositories\Contracts\ItemPedidoRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ItemPedidoRepositoryImplementation implements ItemPedidoRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna ItemPedido baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getItemPedido(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de ItemPedido baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getItemPedidos(int $id, int $associacao): ?Collection
    {
        return $this;
    }

    /**
     * Cria um novo ItemPedido
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createItemPedido(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um ItemPedido
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
     * Deleta um ItemPedido
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteItemPedido(int $id): bool
    {
        $retorno = $this->delete($id);

        if(!$retorno) return false;

        return true;
    }
}
