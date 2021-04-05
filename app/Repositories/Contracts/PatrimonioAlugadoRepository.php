<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface PatrimonioAlugadoRepository
{
    /**
     * Retorna PatrimonioAlugado baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getPatrimonioAlugado(int $id): ?Model;

    /**
     * Retorna uma coleção de PatrimonioAlugado baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getPatrimonioAlugadosByContrato(int $contrato): ?Collection;

    /**
     * Retorna uma coleção de PatrimonioAlugado baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getPatrimonioAlugadosByPedido(int $pedido): ?Collection;

    /**
     * Retorna uma coleção de PatrimonioAlugado baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getPatrimonioAlugadosByCliente(int $cliente): ?Collection;

    /**
     * Retorna uma coleção de PatrimonioAlugado baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getPatrimonioAlugadosByItemPedido(int $item_pedido): ?Collection;

    /**
     * Retorna uma coleção de PatrimonioAlugado baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getPatrimonioAlugadosByItemDefinido(int $item_definido): ?Collection;

    /**
     * Retorna uma coleção de PatrimonioAlugado baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getPatrimonioAlugadosByChamado(int $chamado): ?Collection;

    /**
     * Retorna uma coleção de PatrimonioAlugado baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getPatrimonioAlugadosByEndereco(int $endereco): ?Collection;

    /**
     * Retorna uma model de PatrimonioAlugado baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getPatrimonioAlugadoByPatrimonio(int $patrimonio): ?Model;

    /**
     * Cria um novo PatrimonioAlugado.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createPatrimonioAlugado(array $detalhes): ?Model;

    /**
     * Atualiza um PatrimonioAlugado.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updatePatrimonioAlugado(int $id, array $detalhes): ?Model;

    /**
     * Deleta um PatrimonioAlugado.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deletePatrimonioAlugado(int $id): bool;
}
