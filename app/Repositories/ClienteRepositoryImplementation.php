<?php

namespace App\Repositories;

use App\Repositories\Contracts\ClienteRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ClienteRepositoryImplementation implements ClienteRepository
{
    use BaseEloquentRepository;
    /**
     * Retorna cliente baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getcliente(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de cliente baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getclientes(): ?Collection
    {
        return $this->getAll();
    }

    /**
     * Cria um novo cliente
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createcliente(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um cliente
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updatecliente(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um cliente
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deletecliente(int $id): bool
    {
        $retorno = $this->delete($id);

        if(!$retorno) return false;

        return true;
    }
}