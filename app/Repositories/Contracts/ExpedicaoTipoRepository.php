<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface ExpedicaoTipoRepository
{
    /**
     * Retorna ExpedicaoTipo baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getExpedicaoTipo(int $id): ?Model;

    /**
     * Retorna uma coleção de ExpedicaoTipo baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getExpedicaoTipos(int $id, int $associacao): ?Collection;
    
    /**
     * Cria um novo ExpedicaoTipo
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createExpedicaoTipo(array $detalhes): ?Model;

    /**
     * Atualiza um ExpedicaoTipo
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateExpedicaoTipo(int $id, array $detalhes): ?Model;

    /**
     * Deleta um ExpedicaoTipo
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteExpedicaoTipo(int $id): bool;
}