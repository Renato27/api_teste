<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\ContatoContratoRepository;

class ContatoContratoRepositoryImplementation implements ContatoContratoRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna ContatoContrato baseado no contrato.
     *
     * @param int $id
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
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getContratosByContato(int $contato): ?Collection
    {
        $associacoes = $this->where(['contato_id' => $contato])->get();

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
     * Cria um novo ContatoContrato.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createContatoContrato(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um ContatoContrato.
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
     * Deleta um ContatoContrato.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteContatoContrato(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }
}
