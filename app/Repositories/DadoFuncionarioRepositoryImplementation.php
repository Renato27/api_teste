<?php

namespace App\Repositories;

use App\Repositories\Contracts\DadoFuncionarioRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class DadoFuncionarioRepositoryImplementation implements DadoFuncionarioRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna DadoFuncionario baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getDadoFuncionario(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de DadoFuncionario baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getDadoFuncionarios(int $id, int $associacao): ?Collection
    {
        return $this;
    }

    /**
     * Cria um novo DadoFuncionario
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createDadoFuncionario(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um DadoFuncionario
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateDadoFuncionario(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um DadoFuncionario
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteDadoFuncionario(int $id): bool
    {
        $retorno = $this->delete($id);

        if(!$retorno) return false;

        return true;
    }
}