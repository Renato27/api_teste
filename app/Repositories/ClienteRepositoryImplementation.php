<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\ClienteRepository;

class ClienteRepositoryImplementation implements ClienteRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna cliente baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getcliente(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de cliente baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getclientes(): ?Collection
    {
        return $this->getAll();
    }

    /**
     * Cria um novo cliente.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createcliente(array $detalhes): ?Model
    {
        return $this->firstOrCreate($detalhes);
    }

    /**
     * Atualiza um cliente.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updatecliente(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um cliente.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deletecliente(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }
}
