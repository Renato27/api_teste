<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface CobrancaEstadoRepository
{
    /**
     * Retorna CobrancaEstado baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getCobrancaEstado(int $id): ?Model;

    /**
     * Retorna uma coleção de CobrancaEstado baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getCobrancaEstados(int $id, int $associacao): ?Collection;
    
    /**
     * Cria um novo CobrancaEstado
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createCobrancaEstado(array $detalhes): ?Model;

    /**
     * Atualiza um CobrancaEstado
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateCobrancaEstado(int $id, array $detalhes): ?Model;

    /**
     * Deleta um CobrancaEstado
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteCobrancaEstado(int $id): bool;
}