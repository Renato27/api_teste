<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\ClienteContratoRepository;

class ClienteContratoRepositoryImplementation implements ClienteContratoRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna ClienteContrato baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getClienteByContrato(int $contrato): ?Model
    {
        $associacao = $this->where(['contrato_id' => $contrato])->first();

        return $associacao->cliente;
    }

    /**
     * Retorna uma coleção de ClienteContrato baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getContratosByCliente(int $cliente): ?Collection
    {
        $associacoes = $this->where(['cliente_id' => $cliente])->get();

        if (is_null($associacoes)) {
            return null;
        }

        $contratos = collect();

        foreach ($associacoes as $associacao) {
            if (! is_null($associacao->contrato)) {
                $contratos->add($associacao->contrato);
            }
        }

        return $contratos;
    }

    /**
     * Cria um novo ClienteContrato.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createClienteContrato(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um ClienteContrato.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateClienteContrato(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um ClienteContrato.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteClienteContrato(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }
}
