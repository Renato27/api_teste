<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface AuditoriaPatrimonioRepository
{
    /**
     * Retorna AuditoriaPatrimonio baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getAuditoriaPatrimonio(int $id): ?Model;

    /**
     * Retorna uma coleção de AuditoriaPatrimonio baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getAuditoriaPatrimonios(int $id, int $associacao): ?Collection;
    
    /**
     * Cria um novo AuditoriaPatrimonio
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createAuditoriaPatrimonio(array $detalhes): ?Model;

    /**
     * Atualiza um AuditoriaPatrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateAuditoriaPatrimonio(int $id, array $detalhes): ?Model;

    /**
     * Deleta um AuditoriaPatrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteAuditoriaPatrimonio(int $id): bool;
}