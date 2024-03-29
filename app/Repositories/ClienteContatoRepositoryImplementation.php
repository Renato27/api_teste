<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\ClienteContatoRepository;

class ClienteContatoRepositoryImplementation implements ClienteContatoRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna ClienteContato baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getAssociacaoByCliente(int $cliente): ?Model
    {
        return $this->where(['cliente_id' => $cliente])->first();
    }

    /**
     * Retorna uma coleção de ClienteContato baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getContatosByCliente(int $cliente): ?Collection
    {
        return $this->where(['cliente_id' => $cliente])->get();
    }

    /**
     * Cria um novo ClienteContato.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createClienteContato(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um ClienteContato.
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
     * Deleta um ClienteContato.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteClienteContato(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }

    // /**
    //  * Verifica se existe algum contato principal.
    //  *
    //  * @param integer $cliente
    //  * @return boolean
    //  */
    // public function existeAlgumPrincipal(int $cliente) : bool
    // {
    //     $associacoes = $this->where(['cliente_id' => $cliente])->get();

    //     if(count($associacoes) > 0){

    //         foreach($associacoes as $associacao){

    //             if($associacao->principal == 1)
    //                 return true;
    //         }
    //     }

    //     return false;
    // }
}
