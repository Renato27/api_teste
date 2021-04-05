<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\ExpedicaoRepository;

class ExpedicaoRepositoryImplementation implements ExpedicaoRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna Expedicao baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getExpedicao(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de Expedicao baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getExpedicaos(): ?Collection
    {
        return $this->getAll();
    }

    /**
     * Undocumented function.
     *
     * @param int $pedido
     * @return Model|null
     */
    public function getExpedicaoByPedido(int $pedido) : ?Model
    {
        return $this->where(['pedido_id' => $pedido])->get();
    }

    /**
     * Cria um novo Expedicao.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createExpedicao(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um Expedicao.
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
     * Deleta um Expedicao.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteExpedicao(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }
}
