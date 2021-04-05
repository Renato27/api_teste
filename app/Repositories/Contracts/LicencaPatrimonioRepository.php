<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface LicencaPatrimonioRepository
{
    /**
     * Retorna LicencaPatrimonio baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getLicencaPatrimonio(int $id): ?Model;

    /**
     * Retorna uma coleção de LicencaPatrimonio baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getLicencaPatrimonios(int $id, int $associacao): ?Collection;

    /**
     * Cria um novo LicencaPatrimonio.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createLicencaPatrimonio(array $detalhes): ?Model;

    /**
     * Atualiza um LicencaPatrimonio.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateLicencaPatrimonio(int $id, array $detalhes): ?Model;

    /**
     * Deleta um LicencaPatrimonio.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteLicencaPatrimonio(int $id): bool;

    /**
     * Retorna as licenças para desvincular do patrimônio.
     *
     * @return Collection|null
     */
    public function getLicencasRetirar() : ?Collection;
}
