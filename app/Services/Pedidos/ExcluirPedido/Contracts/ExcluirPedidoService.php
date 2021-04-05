<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Pedidos\ExcluirPedido\Contracts;

use App\Repositories\Contracts\PedidoRepository;

interface ExcluirPedidoService
{
    /**
     * Seta o pedido a ser excluído.
     *
     * @param int $pedido
     * @return ExcluirPedidoService
     */
    public function setPedido(int $pedido) : self;

    /**
     * Seta o repositório de pedido.
     *
     * @param PedidoRepository $pedidoRepository
     * @return ExcluirPedidoService
     */
    public function setPedidoRepository(PedidoRepository $pedidoRepository) : self;

    /**
     * Processa a exclusão do pedido.
     *
     * @return bool
     */
    public function handle() : bool;
}
