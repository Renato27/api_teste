<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\ContadorRepository;

class ContadorRepositoryImplementation implements ContadorRepository
{
    /**
     * Retorna Contador baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getContador(int $id): ?Model
    {
    }

    /**
     * Retorna uma coleção de Contador baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getContadors(int $id, int $associacao): ?Collection
    {
    }

    /**
     * Cria um novo Contador.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createContador(array $detalhes): ?Model
    {
    }

    /**
     * Atualiza um Contador.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateContador(int $id, array $detalhes): ?Model
    {
    }

    /**
     * Deleta um Contador.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteContador(int $id): bool
    {
    }
}
