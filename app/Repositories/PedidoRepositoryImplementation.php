<?php

namespace App\Repositories;

use App\Repositories\Contracts\PedidoRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class PedidoRepositoryImplementation implements PedidoRepository
{

    use BaseEloquentRepository;

    /**
     * Retorna Pedido baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getPedido(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de Pedido baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getPedidos(): ?Collection
    {
        return $this->getAll();
    }

    /**
     * Cria um novo Pedido
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createPedido(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um Pedido
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
     * Deleta um Pedido
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deletePedido(int $id): bool
    {
        $retorno = $this->delete($id);

        if(!$retorno) return false;

        return true;
    }
}