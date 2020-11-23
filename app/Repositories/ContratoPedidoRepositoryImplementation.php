<?php

namespace App\Repositories;

use App\Repositories\Contracts\ContratoPedidoRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ContratoPedidoRepositoryImplementation implements ContratoPedidoRepository
{

    use BaseEloquentRepository;

    /**
     * Retorna ContratoPedido baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getContratoPedido(int $pedido): ?Model
    {
        return $this->where(['pedido_id' => $pedido])->first();
    }

    /**
     * Retorna uma coleção de ContratoPedido baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getContratoPedidos(int $contrato): ?Collection
    {
        return $this->where(['contrato_id' => $contrato])->get();
    }

    /**
     * Cria um novo ContratoPedido
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createContratoPedido(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um ContratoPedido
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateContratoPedido(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um ContratoPedido
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteContratoPedido(int $id): bool
    {
        $retorno = $this->delete($id);

        if(!$retorno) return false;

        return true;
    }
}