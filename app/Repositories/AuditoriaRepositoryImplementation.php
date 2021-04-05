<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\AuditoriaRepository;

class AuditoriaRepositoryImplementation implements AuditoriaRepository
{
    /**
     * Retorna Auditoria baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getAuditoria(int $id): ?Model
    {
    }

    /**
     * Retorna uma coleção de Auditoria baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getAuditorias(int $id, int $associacao): ?Collection
    {
    }

    /**
     * Cria um novo Auditoria.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createAuditoria(array $detalhes): ?Model
    {
    }

    /**
     * Atualiza um Auditoria.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateAuditoria(int $id, array $detalhes): ?Model
    {
    }

    /**
     * Deleta um Auditoria.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteAuditoria(int $id): bool
    {
    }
}
