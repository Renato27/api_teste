<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Pedidos\ExcluirPedido\Abstracts;

use Exception;
use App\Repositories\Contracts\PedidoRepository;
use App\Services\Pedidos\ExcluirPedido\Contracts\ExcluirPedidoService;

abstract class ExcluirPedidoServiceAbstract implements ExcluirPedidoService
{
    /**
     * ID do pedido.
     *
     * @var int
     */
    protected int $pedido;

    /**
     * Repositório de pedido.
     *
     * @var PedidoRepository
     */
    protected PedidoRepository $pedidoRepository;

    /**
     * Seta o pedido a ser excluído.
     *
     * @param int $pedido
     * @return ExcluirPedidoService
     */
    public function setPedido(int $pedido) : ExcluirPedidoService
    {
        $this->pedido = $pedido;

        return $this;
    }

    /**
     * Seta o repositório de pedido.
     *
     * @param PedidoRepository $pedidoRepository
     * @return ExcluirPedidoService
     */
    public function setPedidoRepository(PedidoRepository $pedidoRepository) : ExcluirPedidoService
    {
        $this->pedidoRepository = $pedidoRepository;

        return $this;
    }

    protected function excluirpedido() : bool
    {
        $pedido = $this->pedidoRepository->getPedido($this->pedido);

        if (! isset($pedido->id)) {
            throw new Exception('O pedido a ser excluído não existe.');
        }

        $pedidoExcluído = $this->pedidoRepository->deletePedido($pedido->id);

        if (! $pedidoExcluído) {
            throw new Exception('Não foi possivel excluir o pedido solicitado.');
        }

        return $pedidoExcluído;
    }
}
