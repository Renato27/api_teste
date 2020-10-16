<?php

namespace App\Repositories;

use App\Repositories\Contracts\ClienteEnderecoRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ClienteEnderecoRepositoryImplementation implements ClienteEnderecoRepository
{

    use BaseEloquentRepository;

    /**
     * Retorna ClienteEndereco baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getClienteEndereco(int $cliente): ?Model
    {
        return $this->where(['cliente_id' => $cliente])->first();
    }

    /**
     * Retorna uma coleção de ClienteEndereco baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getClienteEnderecos(int $cliente): ?Collection
    {
        return $this->where(['cliente_id' => $cliente])->get();
    }

    /**
     * Cria um novo ClienteEndereco
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createClienteEndereco(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um ClienteEndereco
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateClienteEndereco(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um ClienteEndereco
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteClienteEndereco(int $id): bool
    {
        $retorno =  $this->delete($id);

        if(!$retorno) return false;

        return true;
    }
}