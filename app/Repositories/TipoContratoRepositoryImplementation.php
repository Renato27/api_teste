<?php

namespace App\Repositories;

use App\Repositories\Contracts\TipoContratoRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class TipoContratoRepositoryImplementation implements TipoContratoRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna TipoContrato baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getTipoContrato(int $contrato): ?Model
    {
        return $this->where(['cotrato_id' => $contrato])->first();
    }

    /**
     * Retorna uma coleção de TipoContrato baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getTipoContratos(int $tipo): ?Collection
    {
        return $this->where(['contrato_tipo_id' => $tipo])->get();
    }

    /**
     * Cria um novo TipoContrato
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createTipoContrato(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um TipoContrato
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateTipoContrato(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um TipoContrato
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteTipoContrato(int $id): bool
    {
        $retorno = $this->delete($id);

        if(!$retorno) return false;

        return true;
    }
}