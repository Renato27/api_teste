<?php

namespace App\Services\Pedidos\ExcluirPedido\Contracts;

use App\Repositories\Contracts\PedidoRepository;

interface ExcluirPedidoService
{
    /**
     * Seta o pedido a ser excluído.
     *
     * @param integer $pedido
     * @return ExcluirPedidoService
     */
    public function setPedido(int $pedido) : ExcluirPedidoService;

    /**
     * Seta o repositório de pedido.
     *
     * @param PedidoRepository $pedidoRepository
     * @return ExcluirPedidoService
     */
    public function setPedidoRepository(PedidoRepository $pedidoRepository) : ExcluirPedidoService;

    /**
     * Processa a exclusão do pedido.
     *
     * @return boolean
     */
    public function handle() : bool;
}
