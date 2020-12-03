<?php

namespace App\Services\Pedidos\ExcluirPedido\Abstracts;

use App\Repositories\Contracts\PedidoRepository;
use App\Services\Pedidos\ExcluirPedido\Contracts\ExcluirPedidoService;
use Exception;

abstract class ExcluirPedidoServiceAbstract implements ExcluirPedidoService
{
    /**
     * ID do pedido.
     *
     * @var integer
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
     * @param integer $pedido
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

        if(!isset($pedido->id))
            throw new Exception("O pedido a ser excluído não existe.");

        $pedidoExcluído = $this->pedidoRepository->deletePedido($pedido->id);

        if(!$pedidoExcluído)
            throw new Exception("Não foi possivel excluir o pedido solicitado.");

        return $pedidoExcluído;
    }
}
