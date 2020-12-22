<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface ChamadoRepository
{
    /**
     * Retorna Chamado baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getChamado(int $id): ?Model;

    /**
     * Retorna uma coleção de Chamado baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getChamados(int $id, int $associacao): ?Collection;
    
    /**
     * Cria um novo Chamado
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createChamado(array $detalhes): ?Model;

    /**
     * Atualiza um Chamado
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateChamado(int $id, array $detalhes): ?Model;

    /**
     * Deleta um Chamado
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteChamado(int $id): bool;
}