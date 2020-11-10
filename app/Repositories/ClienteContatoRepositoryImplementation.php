<?php

namespace App\Repositories;

use App\Repositories\Contracts\ClienteContatoRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ClienteContatoRepositoryImplementation implements ClienteContatoRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna ClienteContato baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getAssociacaoByContato(int $contato): ?Model
    {
        return $this->where(['contato_id' => $contato])->first();
    }

    /**
     * Retorna uma coleção de ClienteContato baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getClientesByContato(int $contato): ?Collection
    {
        return $this->where(['contato_id' => $contato])->get();
    }

    /**
     * Cria um novo ClienteContato
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createClienteContato(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um ClienteContato
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateClienteContato(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um ClienteContato
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteClienteContato(int $id): bool
    {
        $retorno = $this->delete($id);

        if(!$retorno) return false;

        return true;
    }
}