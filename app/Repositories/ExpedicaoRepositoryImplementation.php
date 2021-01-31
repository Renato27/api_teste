<?php

namespace App\Repositories;

use App\Repositories\Contracts\ExpedicaoRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ExpedicaoRepositoryImplementation implements ExpedicaoRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna Expedicao baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getExpedicao(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de Expedicao baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getExpedicaos(): ?Collection
    {
        return $this->getAll();
    }

    /**
     * Undocumented function
     *
     * @param integer $pedido
     * @return Model|null
     */
    public function getExpedicaoByPedido(int $pedido) : ?Model
    {
        return $this->where(['pedido_id' => $pedido])->get();
    }

    /**
     * Cria um novo Expedicao
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createExpedicao(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um Expedicao
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateExpedicao(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um Expedicao
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteExpedicao(int $id): bool
    {
        $retorno = $this->delete($id);

        if(!$retorno) return false;

        return true;
    }
}
