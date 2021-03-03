<?php

namespace App\Repositories;

use App\Repositories\Contracts\AuditoriaRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class AuditoriaRepositoryImplementation implements AuditoriaRepository
{
    /**
     * Retorna Auditoria baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getAuditoria(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de Auditoria baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getAuditorias(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo Auditoria
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createAuditoria(array $detalhes): ?Model
    {

    }

    /**
     * Atualiza um Auditoria
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateAuditoria(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um Auditoria
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteAuditoria(int $id): bool
    {

    }
}