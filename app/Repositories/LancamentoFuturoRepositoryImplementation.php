<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\LancamentoFuturoRepository;

class LancamentoFuturoRepositoryImplementation implements LancamentoFuturoRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna LancamentoFuturo baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getLancamentoFuturo(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de LancamentoFuturo baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getLancamentoFuturosByContrato(int $contrato): ?Collection
    {
        return $this->where(['contrato_id' => $contrato])->get();
    }

    /**
     * Retorna uma coleção de LancamentoFuturo baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getLancamentoFuturosByContratoAndMonth(int $contrato, int $mes): ?Collection
    {
        return $this->where(['contrato_id' => $contrato, 'mes_cobranca' => $mes])->whereNull(['nota_espelho_id', 'nota_id'])->get();
    }

    /**
     * Cria um novo LancamentoFuturo.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createLancamentoFuturo(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um LancamentoFuturo.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateLancamentoFuturo(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um LancamentoFuturo.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteLancamentoFuturo(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }
}
