<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\EntregaRepository;

class EntregaRepositoryImplementation implements EntregaRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna Entrega baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getEntrega(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de Entrega baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getEntregas(int $id, int $associacao): ?Collection
    {
        return collect();
    }

    /**
     * Cria um novo Entrega.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createEntrega(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um Entrega.
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
     * Deleta um Entrega.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteEntrega(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }
}
