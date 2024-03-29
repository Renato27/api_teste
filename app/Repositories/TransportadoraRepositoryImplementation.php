<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\TransportadoraRepository;

class TransportadoraRepositoryImplementation implements TransportadoraRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna Transportadora baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getTransportadora(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de Transportadora baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getTransportadoras(): ?Collection
    {
        return $this->getAll();
    }

    /**
     * Cria um novo Transportadora.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createTransportadora(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um Transportadora.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateTransportadora(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um Transportadora.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteTransportadora(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }
}
