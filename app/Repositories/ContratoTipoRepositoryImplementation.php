<?php

namespace App\Repositories;

use App\Repositories\Contracts\ContratoTipoRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ContratoTipoRepositoryImplementation implements ContratoTipoRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna ContratoTipo baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getContratoTipo(int $id): ?Model
    {
        return $this;
    }

    /**
     * Retorna uma coleção de ContratoTipo baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getContratoTipos(int $id, int $associacao): ?Collection
    {
        return $this;
    }

    /**
     * Cria um novo ContratoTipo
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createContratoTipo(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um ContratoTipo
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateContratoTipo(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um ContratoTipo
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteContratoTipo(int $id): bool
    {
        $returno = $this->delete($id);

        if(!$returno) return false;

        return true;
    }
}