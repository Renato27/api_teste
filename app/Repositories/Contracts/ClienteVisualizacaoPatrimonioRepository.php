<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface ClienteVisualizacaoPatrimonioRepository
{
    /**
     * Retorna ClienteVisualizacaoPatrimonio baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getClienteVisualizacaoPatrimonio(int $id): ?Model;

    /**
     * Retorna uma coleção de ClienteVisualizacaoPatrimonio baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getClienteVisualizacaoPatrimonios(int $id, int $associacao): ?Collection;
    
    /**
     * Cria um novo ClienteVisualizacaoPatrimonio
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createClienteVisualizacaoPatrimonio(array $detalhes): ?Model;

    /**
     * Atualiza um ClienteVisualizacaoPatrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateClienteVisualizacaoPatrimonio(int $id, array $detalhes): ?Model;

    /**
     * Deleta um ClienteVisualizacaoPatrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteClienteVisualizacaoPatrimonio(int $id): bool;
}