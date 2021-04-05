<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface TipoLicencaRepository
{
    /**
     * Retorna TipoLicenca baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getTipoLicenca(int $id): ?Model;

    /**
     * Retorna uma coleção de TipoLicenca baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getTipoLicencas(int $id, int $associacao): ?Collection;

    /**
     * Cria um novo TipoLicenca.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createTipoLicenca(array $detalhes): ?Model;

    /**
     * Atualiza um TipoLicenca.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateTipoLicenca(int $id, array $detalhes): ?Model;

    /**
     * Deleta um TipoLicenca.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteTipoLicenca(int $id): bool;
}
