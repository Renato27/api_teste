<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface AuditoriaPatrimonioRepository
{
    /**
     * Retorna AuditoriaPatrimonio baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getAuditoriaPatrimonio(int $id): ?Model;

    /**
     * Retorna uma coleção de AuditoriaPatrimonio baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getAuditoriaPatrimonios(int $id, int $associacao): ?Collection;

    /**
     * Cria um novo AuditoriaPatrimonio.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createAuditoriaPatrimonio(array $detalhes): ?Model;

    /**
     * Atualiza um AuditoriaPatrimonio.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateAuditoriaPatrimonio(int $id, array $detalhes): ?Model;

    /**
     * Deleta um AuditoriaPatrimonio.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteAuditoriaPatrimonio(int $id): bool;
}
