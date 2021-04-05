<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface LancamentoFuturoRepository
{
    /**
     * Retorna LancamentoFuturo baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getLancamentoFuturo(int $id): ?Model;

    /**
     * Retorna uma coleção de LancamentoFuturo baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getLancamentoFuturosByContrato(int $contrato): ?Collection;

    /**
     * Retorna uma coleção de LancamentoFuturo baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getLancamentoFuturosByContratoAndMonth(int $contrato, int $mes): ?Collection;

    /**
     * Cria um novo LancamentoFuturo.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createLancamentoFuturo(array $detalhes): ?Model;

    /**
     * Atualiza um LancamentoFuturo.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateLancamentoFuturo(int $id, array $detalhes): ?Model;

    /**
     * Deleta um LancamentoFuturo.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteLancamentoFuturo(int $id): bool;
}
