<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface ClienteProcessoRepository
{
    /**
     * Retorna ClienteProcesso baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getClienteProcesso(int $id): ?Model;

    /**
     * Retorna uma coleção de ClienteProcesso baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getClienteProcessos(int $id, int $associacao): ?Collection;
    
    /**
     * Cria um novo ClienteProcesso
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createClienteProcesso(array $detalhes): ?Model;

    /**
     * Atualiza um ClienteProcesso
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateClienteProcesso(int $id, array $detalhes): ?Model;

    /**
     * Deleta um ClienteProcesso
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteClienteProcesso(int $id): bool;
}