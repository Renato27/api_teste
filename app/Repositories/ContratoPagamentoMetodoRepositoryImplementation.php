<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\ContratoPagamentoMetodoRepository;

class ContratoPagamentoMetodoRepositoryImplementation implements ContratoPagamentoMetodoRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna ContratoPagamentoMetodo baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getContratoPagamentoMetodo(int $contrato): ?Model
    {
        return $this->where(['contrato_id' => $contrato])->first();
    }

    /**
     * Retorna uma coleção de ContratoPagamentoMetodo baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getPagamentoMetodoContratos(int $metodo): ?Collection
    {
        return $this->where(['pagamento_metodo_id' => $metodo])->get();
    }

    /**
     * Cria um novo ContratoPagamentoMetodo.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createContratoPagamentoMetodo(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um ContratoPagamentoMetodo.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateContratoPagamentoMetodo(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um ContratoPagamentoMetodo.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteContratoPagamentoMetodo(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }
}
