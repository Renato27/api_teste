<?php

namespace App\Repositories;

use App\Repositories\Contracts\EnderecoFuncionarioRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class EnderecoFuncionarioRepositoryImplementation implements EnderecoFuncionarioRepository
{

    use BaseEloquentRepository;

    /**
     * Retorna EnderecoFuncionario baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getEnderecoFuncionario(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de EnderecoFuncionario baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getEnderecoFuncionarios(int $id, int $associacao): ?Collection
    {
        return $this;
    }

    /**
     * Cria um novo EnderecoFuncionario
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createEnderecoFuncionario(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um EnderecoFuncionario
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateEnderecoFuncionario(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um EnderecoFuncionario
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteEnderecoFuncionario(int $id): bool
    {
        $retorno = $this->delete($id);

        if(!$retorno) return false;

        return true;
    }
}