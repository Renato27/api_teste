<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface ChamadoRepository
{
    /**
     * Retorna Chamado baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getChamado(int $id): ?Model;

    /**
     * Retorna uma coleção de Chamado baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getChamadosByUsuario(int $usuario): ?Collection;

    /**
     * Retorna uma coleção de Chamado baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getChamadosByTipo(int $tipo): ?Collection;

    /**
     * Retorna uma coleção de Chamado baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getChamadosByContato(int $contato): ?Collection;

    /**
     * Retorna uma coleção de Chamado baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getChamadosByEndereco(int $endereco): ?Collection;

    /**
     * Retorna uma coleção de Chamado baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getChamadosByPedido(int $pedido): ?Collection;

    /**
     * Cria um novo Chamado.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createChamado(array $detalhes): ?Model;

    /**
     * Atualiza um Chamado.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateChamado(int $id, array $detalhes): ?Model;

    /**
     * Deleta um Chamado.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteChamado(int $id): bool;
}
