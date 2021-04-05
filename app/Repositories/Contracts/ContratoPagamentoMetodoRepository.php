<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface ContratoPagamentoMetodoRepository
{
    /**
     * Retorna ContratoPagamentoMetodo baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getContratoPagamentoMetodo(int $contrato): ?Model;

    /**
     * Retorna uma coleção de ContratoPagamentoMetodo baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getPagamentoMetodoContratos(int $metodo): ?Collection;

    /**
     * Cria um novo ContratoPagamentoMetodo.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createContratoPagamentoMetodo(array $detalhes): ?Model;

    /**
     * Atualiza um ContratoPagamentoMetodo.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateContratoPagamentoMetodo(int $id, array $detalhes): ?Model;

    /**
     * Deleta um ContratoPagamentoMetodo.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteContratoPagamentoMetodo(int $id): bool;
}
