<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\NotaRepository;

class NotaRepositoryImplementation implements NotaRepository
{
    /**
     * Retorna Nota baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getNota(int $id): ?Model
    {
    }

    /**
     * Retorna uma coleção de Nota baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getNotas(int $id, int $associacao): ?Collection
    {
    }

    /**
     * Cria um novo Nota.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createNota(array $detalhes): ?Model
    {
    }

    /**
     * Atualiza um Nota.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateNota(int $id, array $detalhes): ?Model
    {
    }

    /**
     * Deleta um Nota.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteNota(int $id): bool
    {
    }
}
