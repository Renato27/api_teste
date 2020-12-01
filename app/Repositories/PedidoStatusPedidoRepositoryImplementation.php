<?php

namespace App\Repositories;

use App\Repositories\Contracts\PedidoStatusPedidoRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class PedidoStatusPedidoRepositoryImplementation implements PedidoStatusPedidoRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna PedidoStatusPedido baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getPedidoStatusPedido(int $pedido): ?Model
    {
        return $this->where(['pedido_id' => $pedido])->first();
    }

    /**
     * Retorna uma coleção de PedidoStatusPedido baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getPedidoStatusPedidos(int $status): ?Collection
    {
        return $this->where(['status_pedido_id' => $status])->get();
    }

    /**
     * Cria um novo PedidoStatusPedido
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createPedidoStatusPedido(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um PedidoStatusPedido
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updatePedidoStatusPedido(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um PedidoStatusPedido
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deletePedidoStatusPedido(int $id): bool
    {
        $retorno = $this->delete($id);

        if(!$retorno) return false;

        return true;
    }
}
