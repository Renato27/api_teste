<?php

namespace App\Repositories;

use App\Repositories\Contracts\PatrimonioAlugadoRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class PatrimonioAlugadoRepositoryImplementation implements PatrimonioAlugadoRepository
{

    use BaseEloquentRepository;

    /**
     * Retorna PatrimonioAlugado baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getPatrimonioAlugado(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de PatrimonioAlugado baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getPatrimonioAlugadosByContrato(int $contrato): ?Collection
    {
        return $this->where(['contrato_id' => $contrato])->get();
    }

      /**
     * Retorna uma coleção de PatrimonioAlugado baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getPatrimonioAlugadosByPedido(int $pedido): ?Collection
    {
        return $this->where(['pedido_id' => $pedido])->get();
    }

    /**
     * Retorna uma coleção de PatrimonioAlugado baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getPatrimonioAlugadosByCliente(int $cliente): ?Collection
    {
        return $this->where(['cliente_id' => $cliente])->get();
    }

    /**
     * Retorna uma coleção de PatrimonioAlugado baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getPatrimonioAlugadosByItemPedido(int $item_pedido): ?Collection
    {
        return $this->where(['item_pedido_id' => $item_pedido])->get();
    }

    /**
     * Retorna uma coleção de PatrimonioAlugado baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getPatrimonioAlugadosByItemDefinido(int $item_definido): ?Collection
    {
        return $this->where(['item_definido_id' => $item_definido])->get();
    }

    /**
     * Retorna uma coleção de PatrimonioAlugado baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getPatrimonioAlugadosByChamado(int $chamado): ?Collection
    {
        return $this->where(['chamado_id' => $chamado])->get();
    }

    /**
     * Retorna uma coleção de PatrimonioAlugado baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getPatrimonioAlugadosByEndereco(int $endereco): ?Collection
    {
        return $this->where(['endereco_id' => $endereco])->get();
    }

    /**
     * Cria um novo PatrimonioAlugado
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createPatrimonioAlugado(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um PatrimonioAlugado
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updatePatrimonioAlugado(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um PatrimonioAlugado
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deletePatrimonioAlugado(int $id): bool
    {
        $retorno = $this->delete($id);

        if(!$retorno) return false;

        return true;
    }
}
