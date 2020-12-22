<?php

namespace App\Repositories;

use App\Repositories\Contracts\LicencaRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class LicencaRepositoryImplementation implements LicencaRepository
{
    /**
     * Retorna Licenca baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getLicenca(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de Licenca baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getLicencas(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo Licenca
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createLicenca(array $detalhes): ?Model
    {

    }

    /**
     * Atualiza um Licenca
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateLicenca(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um Licenca
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteLicenca(int $id): bool
    {

    }
}