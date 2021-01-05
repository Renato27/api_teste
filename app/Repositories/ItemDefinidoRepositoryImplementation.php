<?php

namespace App\Repositories;

use App\Repositories\Contracts\ItemDefinidoRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ItemDefinidoRepositoryImplementation implements ItemDefinidoRepository
{

    use BaseEloquentRepository;

    /**
     * Retorna ItemDefinido baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getItemDefinido(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de ItemDefinido baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getItemDefinidosByTipo(int $tipo): ?Collection
    {
        return $this->where(['tipo_patrimonio_id' => $tipo])->get();
    }

    /**
     * Cria um novo ItemDefinido
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createItemDefinido(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um ItemDefinido
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateItemDefinido(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um ItemDefinido
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteItemDefinido(int $id): bool
    {
        $retorno = $this->delete($id);

        if(!$retorno) return false;

        return true;
    }
}
