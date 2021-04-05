<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\SuporteRepository;

class SuporteRepositoryImplementation implements SuporteRepository
{
    /**
     * Retorna Suporte baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getSuporte(int $id): ?Model
    {
    }

    /**
     * Retorna uma coleção de Suporte baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getSuportes(int $id, int $associacao): ?Collection
    {
    }

    /**
     * Cria um novo Suporte.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createSuporte(array $detalhes): ?Model
    {
    }

    /**
     * Atualiza um Suporte.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateSuporte(int $id, array $detalhes): ?Model
    {
    }

    /**
     * Deleta um Suporte.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteSuporte(int $id): bool
    {
    }
}
