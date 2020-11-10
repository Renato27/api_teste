<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface ContatoContratoRepository
{
    /**
     * Retorna ContatoContrato baseado no contrato.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getContatoContrato(int $contrato): ?Model;

    /**
     * Retorna uma coleção de ContatoContrato baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getContratosByContato(int $contato): ?Collection;
    
    /**
     * Cria um novo ContatoContrato
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createContatoContrato(array $detalhes): ?Model;

    /**
     * Atualiza um ContatoContrato
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateContatoContrato(int $id, array $detalhes): ?Model;

    /**
     * Deleta um ContatoContrato
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteContatoContrato(int $id): bool;
}