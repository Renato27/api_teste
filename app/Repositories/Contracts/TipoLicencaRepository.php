<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface TipoLicencaRepository
{
    /**
     * Retorna TipoLicenca baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getTipoLicenca(int $id): ?Model;

    /**
     * Retorna uma coleção de TipoLicenca baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getTipoLicencas(int $id, int $associacao): ?Collection;
    
    /**
     * Cria um novo TipoLicenca
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createTipoLicenca(array $detalhes): ?Model;

    /**
     * Atualiza um TipoLicenca
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateTipoLicenca(int $id, array $detalhes): ?Model;

    /**
     * Deleta um TipoLicenca
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteTipoLicenca(int $id): bool;
}