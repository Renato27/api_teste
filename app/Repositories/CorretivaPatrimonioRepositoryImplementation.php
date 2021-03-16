<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\CorretivaPatrimonioRepository;

class CorretivaPatrimonioRepositoryImplementation implements CorretivaPatrimonioRepository
{
    /**
     * Retorna CorretivaPatrimonio baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getCorretivaPatrimonio(int $id): ?Model
    {
    }

    /**
     * Retorna uma coleção de CorretivaPatrimonio baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getCorretivaPatrimonios(int $id, int $associacao): ?Collection
    {
    }

    /**
     * Cria um novo CorretivaPatrimonio.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createCorretivaPatrimonio(array $detalhes): ?Model
    {
    }

    /**
     * Atualiza um CorretivaPatrimonio.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateCorretivaPatrimonio(int $id, array $detalhes): ?Model
    {
    }

    /**
     * Deleta um CorretivaPatrimonio.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteCorretivaPatrimonio(int $id): bool
    {
    }
}
