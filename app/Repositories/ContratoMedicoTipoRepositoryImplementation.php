<?php

namespace App\Repositories;

use App\Repositories\Contracts\ContratoMedicoTipoRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ContratoMedicoTipoRepositoryImplementation implements ContratoMedicoTipoRepository
{

    use BaseEloquentRepository;

    /**
     * Retorna ContratoMedicaoTipo baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getContratoMedicaoTipo(int $contrato): ?Model
    {
        return $this->where(['contrato_id' => $contrato])->first();
    }

    /**
     * Retorna uma coleção de ContratoMedicaoTipo baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getMedicaoTipoContratos(int $medicao): ?Collection
    {
        return $this->where(['medicao_tipo_id' => $medicao])->get();
    }

    /**
     * Cria um novo ContratoMedicaoTipo
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createContratoMedicaoTipo(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um ContratoMedicaoTipo
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateContratoMedicaoTipo(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um ContratoMedicaoTipo
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteContratoMedicaoTipo(int $id): bool
    {
        $retorno = $this->delete($id);

        if(!$retorno) return false;

        return true;
    }
}