<?php

namespace App\Repositories;

use App\Repositories\Contracts\ContatoEnderecosRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ContatoEnderecosRepositoryImplementation implements ContatoEnderecosRepository
{

    use BaseEloquentRepository;

    /**
     * Retorna ContatoEnderecos baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getContatoEndereco(int $endereco): ?Model
    {
        return $this->find($endereco);
    }

    /**
     * Retorna uma coleção de ContatoEnderecos baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getContatosEnderecos(int $contato): ?Collection
    {
        return $this->where(['contato_id' => $contato])->get();
    }

    /**
     * Cria um novo ContatoEnderecos
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createContatoEnderecos(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um ContatoEnderecos
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateContatoEnderecos(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um ContatoEnderecos
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteContatoEnderecos(int $id): bool
    {
        $retorno = $this->delete($id);

        if(!$retorno) return false;

        return true;
    }
}