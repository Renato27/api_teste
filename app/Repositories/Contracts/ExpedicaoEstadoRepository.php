<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface ExpedicaoEstadoRepository
{
    /**
     * Retorna ExpedicaoEstado baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getExpedicaoEstado(int $id): ?Model;

    /**
     * Retorna uma coleção de ExpedicaoEstado baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getExpedicaoEstados(int $id, int $associacao): ?Collection;
    
    /**
     * Cria um novo ExpedicaoEstado
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createExpedicaoEstado(array $detalhes): ?Model;

    /**
     * Atualiza um ExpedicaoEstado
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateExpedicaoEstado(int $id, array $detalhes): ?Model;

    /**
     * Deleta um ExpedicaoEstado
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteExpedicaoEstado(int $id): bool;
}