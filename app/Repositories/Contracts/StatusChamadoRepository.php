<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface StatusChamadoRepository
{
    /**
     * Retorna StatusChamado baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getStatusChamado(int $id): ?Model;

    /**
     * Retorna uma coleção de StatusChamado baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getStatusChamados(int $id, int $associacao): ?Collection;
    
    /**
     * Cria um novo StatusChamado
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createStatusChamado(array $detalhes): ?Model;

    /**
     * Atualiza um StatusChamado
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateStatusChamado(int $id, array $detalhes): ?Model;

    /**
     * Deleta um StatusChamado
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteStatusChamado(int $id): bool;
}