<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface ContratoMedicoTipoRepository
{
    /**
     * Retorna ContratoMedicaoTipo baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getContratoMedicaoTipo(int $contrato): ?Model;

    /**
     * Retorna uma coleção de ContratoMedicaoTipo baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getMedicaoTipoContratos(int $medicao): ?Collection;
    
    /**
     * Cria um novo ContratoMedicaoTipo
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createContratoMedicaoTipo(array $detalhes): ?Model;

    /**
     * Atualiza um ContratoMedicaoTipo
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateContratoMedicaoTipo(int $id, array $detalhes): ?Model;

    /**
     * Deleta um ContratoMedicaoTipo
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteContratoMedicaoTipo(int $id): bool;
}