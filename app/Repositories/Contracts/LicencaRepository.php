<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface LicencaRepository
{
    /**
     * Retorna Licenca baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getLicenca(int $id): ?Model;

    /**
     * Retorna uma coleção de Licenca baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getLicencasByTipo(int $tipo): ?Collection;

    /**
     * Cria um novo Licenca.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createLicenca(array $detalhes): ?Model;

    /**
     * Atualiza um Licenca.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateLicenca(int $id, array $detalhes): ?Model;

    /**
     * Deleta um Licenca.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteLicenca(int $id): bool;
}
