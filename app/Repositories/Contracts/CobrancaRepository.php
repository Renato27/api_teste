<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface CobrancaRepository
{
    /**
     * Retorna Cobranca baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getCobranca(int $id): ?Model;

    /**
     * Retorna uma coleção de Cobranca baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getCobrancasByCliente(int $cliente): ?Collection;

    /**
     * Retorna uma coleção de Cobranca baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getCobrancasByUsuario(int $usuario): ?Collection;

    /**
     * Cria um novo Cobranca
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createCobranca(array $detalhes): ?Model;

    /**
     * Atualiza um Cobranca
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateCobranca(int $id, array $detalhes): ?Model;

    /**
     * Deleta um Cobranca
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
