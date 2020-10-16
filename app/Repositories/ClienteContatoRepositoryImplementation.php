<?php

namespace App\Repositories;

use App\Repositories\Contracts\ClienteContatoRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ClienteContatoRepositoryImplementation implements ClienteContatoRepository
{
    /**
     * Retorna ClienteContato baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getClienteContato(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de ClienteContato baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getClienteContatos(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo ClienteContato
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createClienteContato(array $detalhes): ?Model
    {

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

    }
}