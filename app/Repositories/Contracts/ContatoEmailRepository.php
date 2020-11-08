<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface ContatoEmailRepository
{
    /**
     * Retorna ContatoEmail baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getContatoEmail(int $id): ?Model;

    /**
     * Retorna uma coleção de ContatoEmail baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getContatoEmails(int $id, int $associacao): ?Collection;
    
    /**
     * Cria um novo ContatoEmail
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createContatoEmail(array $detalhes): ?Model;

    /**
     * Atualiza um ContatoEmail
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateContatoEmail(int $id, array $detalhes): ?Model;

    /**
     * Deleta um ContatoEmail
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteContatoEmail(int $id): bool;
}