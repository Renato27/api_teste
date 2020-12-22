<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface LicencaPatrimonioRepository
{
    /**
     * Retorna LicencaPatrimonio baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getLicencaPatrimonio(int $id): ?Model;

    /**
     * Retorna uma coleção de LicencaPatrimonio baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getLicencaPatrimonios(int $id, int $associacao): ?Collection;
    
    /**
     * Cria um novo LicencaPatrimonio
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createLicencaPatrimonio(array $detalhes): ?Model;

    /**
     * Atualiza um LicencaPatrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateLicencaPatrimonio(int $id, array $detalhes): ?Model;

    /**
     * Deleta um LicencaPatrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteLicencaPatrimonio(int $id): bool;
}