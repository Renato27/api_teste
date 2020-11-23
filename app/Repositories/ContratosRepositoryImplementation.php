<?php

namespace App\Repositories;

use App\Repositories\Contracts\ContratosRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ContratosRepositoryImplementation implements ContratosRepository
{

    use BaseEloquentRepository;

    /**
     * Retorna Contratos baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getContrato(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de Contratos baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getContratos(): ?Collection
    {
        return $this->getAll();
    }

    /**
     * Cria um novo Contratos
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createContrato(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um Contratos
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateContrato(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um Contratos
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteContrato(int $id): bool
    {
        $retorno = $this->delete($id);

        if(!$retorno) return false;

        return true;
    }
}