<?php

namespace App\Repositories;

use App\Repositories\Contracts\ContatoTipoRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ContatoTipoRepositoryImplementation implements ContatoTipoRepository
{
    use BaseEloquentRepository;
    /**
     * Retorna ContatoTipo baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getContatoTipo(int $contato): ?Model
    {
        return $this->where(['contato_id' => $contato])->first();
    }

    /**
     * Retorna uma coleção de ContatoTipo baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getTipoContatos(int $tipo): ?Collection
    {
        return $this->where(['tipo_contato_id' => $tipo])->get();
    }

    /**
     * Cria um novo ContatoTipo
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createContatoTipo(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um ContatoTipo
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateContatoTipo(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um ContatoTipo
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteContatoTipo(int $id): bool
    {
        $retorno = $this->delete($id);

        if(!$retorno) return false;
        
        return true;
    }
}