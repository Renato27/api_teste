<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface CobrancaRepository
{
    /**
     * Retorna Cobranca baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getCobranca(int $id): ?Model;

    /**
     * Retorna uma coleção de Cobranca baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getCobrancasByCliente(int $cliente): ?Collection;

    /**
     * Retorna uma coleção de Cobranca baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getCobrancasByUsuario(int $usuario): ?Collection;

    /**
     * Cria um novo Cobranca.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createCobranca(array $detalhes): ?Model;

    /**
     * Atualiza um Cobranca.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateCobranca(int $id, array $detalhes): ?Model;

    /**
     * Deleta um Cobranca.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteCobranca(int $id): bool;

    /**
     * Retorna as cobrancas para a dashboard de gestão.
     *
     * @return Collection|null
     */
    public function getCobrancaMonitoramento() : ?Collection;
}
