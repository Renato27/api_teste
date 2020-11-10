<?php

namespace App\Repositories;

use App\Repositories\Contracts\ContatoContratoRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ContatoContratoRepositoryImplementation implements ContatoContratoRepository
{

    use BaseEloquentRepository;

    /**
     * Retorna ContatoContrato baseado no contrato.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getContatoContrato(int $contrato): ?Model
    {
        $associacao = $this->where(['contrato_id' => $contrato])->first();

        return $associacao->contato;
    }

    /**
     * Retorna uma coleção de ContatoContrato baseado em um contato.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getContratosByContato(int $contato): ?Collection
    {
        $associacoes = $this->where(['contato_id' => $contato])->get();

        if(is_null($associacoes)) return null;

        $contratos = collect();

        foreach($associacoes as $associacao){

            if(!is_null($associacao->contrato)){
                $contratos->add($associacao->contrato);
            }
        }

        return $contratos;
    }

    /**
     * Cria um novo ContatoContrato
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createContatoContrato(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um ContatoContrato
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateContatoContrato(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um ContatoContrato
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteContatoContrato(int $id): bool
    {
        $retorno = $this->delete($id);

        if(!$retorno) return false;

        return true;
    }
}