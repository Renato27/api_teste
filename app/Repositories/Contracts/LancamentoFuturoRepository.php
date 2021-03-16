<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface LancamentoFuturoRepository
{
    /**
     * Retorna LancamentoFuturo baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getLancamentoFuturo(int $id): ?Model;

    /**
     * Retorna uma coleção de LancamentoFuturo baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getLancamentoFuturos(int $id, int $associacao): ?Collection;
    
    /**
     * Cria um novo LancamentoFuturo
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createLancamentoFuturo(array $detalhes): ?Model;

    /**
     * Atualiza um LancamentoFuturo
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateLancamentoFuturo(int $id, array $detalhes): ?Model;

    /**
     * Deleta um LancamentoFuturo
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteLancamentoFuturo(int $id): bool;
}