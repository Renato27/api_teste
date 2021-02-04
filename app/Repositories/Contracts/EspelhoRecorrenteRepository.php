<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface EspelhoRecorrenteRepository
{
    /**
     * Retorna EspelhoRecorrente baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getEspelhoRecorrente(int $id): ?Model;

    /**
     * Retorna uma coleção de EspelhoRecorrente baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getEspelhoRecorrentes(int $id, int $associacao): ?Collection;
    
    /**
     * Cria um novo EspelhoRecorrente
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createEspelhoRecorrente(array $detalhes): ?Model;

    /**
     * Atualiza um EspelhoRecorrente
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateEspelhoRecorrente(int $id, array $detalhes): ?Model;

    /**
     * Deleta um EspelhoRecorrente
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteEspelhoRecorrente(int $id): bool;
}