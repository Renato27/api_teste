<?php

namespace App\Repositories;

use App\Repositories\Contracts\EntregaRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class EntregaRepositoryImplementation implements EntregaRepository
{

    use BaseEloquentRepository;

    /**
     * Retorna Entrega baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getEntrega(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de Entrega baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getEntregas(int $id, int $associacao): ?Collection
    {
        return collect();
    }

    /**
     * Cria um novo Entrega
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createEntrega(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um Entrega
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateEntrega(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um Entrega
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteEntrega(int $id): bool
    {
        $retorno = $this->delete($id);

        if(!$retorno) return false;

        return true;
    }
}
