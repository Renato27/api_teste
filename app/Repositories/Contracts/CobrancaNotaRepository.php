<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface CobrancaNotaRepository
{
    /**
     * Retorna CobrancaNota baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getCobrancaNota(int $id): ?Model;

    /**
     * Retorna uma coleção de CobrancaNota baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getCobrancaNotas(int $id, int $associacao): ?Collection;
    
    /**
     * Cria um novo CobrancaNota
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createCobrancaNota(array $detalhes): ?Model;

    /**
     * Atualiza um CobrancaNota
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateCobrancaNota(int $id, array $detalhes): ?Model;

    /**
     * Deleta um CobrancaNota
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteCobrancaNota(int $id): bool;
}