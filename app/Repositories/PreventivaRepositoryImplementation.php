<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\PreventivaRepository;

class PreventivaRepositoryImplementation implements PreventivaRepository
{
    /**
     * Retorna Preventiva baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getPreventiva(int $id): ?Model
    {
    }

    /**
     * Retorna uma coleção de Preventiva baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getPreventivas(int $id, int $associacao): ?Collection
    {
    }

    /**
     * Cria um novo Preventiva.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createPreventiva(array $detalhes): ?Model
    {
    }

    /**
     * Atualiza um Preventiva.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updatePreventiva(int $id, array $detalhes): ?Model
    {
    }

    /**
     * Deleta um Preventiva.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deletePreventiva(int $id): bool
    {
    }
}
