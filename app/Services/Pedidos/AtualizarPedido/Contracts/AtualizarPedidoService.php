<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Pedidos\AtualizarPedido\Contracts;

use App\Models\Pedido\Pedido;
use App\Repositories\Contracts\PedidoRepository;

interface AtualizarPedidoService
{
    /**
     * Seta um pedido a ser atualizado.
     *
     * @param int $pedido
     * @return AtualizarPedidoService
     */
    public function setPedido(int $pedido) : self;

    /**
     * Seta os dados a serem atualizados.
     *
     * @param array $dados
     * @return AtualizarPedidoService
     */
    public function setDados(array $dados) : self;

    /**
     * Seta o repositório de pedido.
     *
     * @param PedidoRepository $pedidoRepository
     * @return AtualizarPedidoService
     */
    public function setPedidoRepository(PedidoRepository $pedidoRepository) : self;

    /**
     * Processa a atualização do pedido.
     *
     * @return Pedido|null
     */
    public function handle() : ?Pedido;
}
