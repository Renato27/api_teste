<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface ClienteProcessoEstadoRepository
{
    /**
     * Retorna ClienteProcessoEstado baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getClienteProcessoEstado(int $id): ?Model;

    /**
     * Retorna uma coleção de ClienteProcessoEstado baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getClienteProcessoEstados(int $id, int $associacao): ?Collection;
    
    /**
     * Cria um novo ClienteProcessoEstado
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createClienteProcessoEstado(array $detalhes): ?Model;

    /**
     * Atualiza um ClienteProcessoEstado
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateClienteProcessoEstado(int $id, array $detalhes): ?Model;

    /**
     * Deleta um ClienteProcessoEstado
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteClienteProcessoEstado(int $id): bool;
}