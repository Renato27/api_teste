<?php

namespace App\Services\Pedidos\AtualizarPedido\Contracts;

use App\Models\Pedido\Pedido;
use App\Repositories\Contracts\PedidoRepository;

interface AtualizarPedidoService
{
    /**
     * Seta um pedido a ser atualizado.
     *
     * @param integer $pedido
     * @return AtualizarPedidoService
     */
    public function setPedido(int $pedido) : AtualizarPedidoService;

    /**
     * Seta os dados a serem atualizados.
     *
     * @param array $dados
     * @return AtualizarPedidoService
     */
    public function setDados(array $dados) : AtualizarPedidoService;

    /**
     * Seta o repositório de pedido.
     *
     * @param PedidoRepository $pedidoRepository
     * @return AtualizarPedidoService
     */
    public function setPedidoRepository(PedidoRepository $pedidoRepository) : AtualizarPedidoService;

    /**
     * Processa a atualização do pedido.
     *
     * @return Pedido|null
     */
    public function handle() : ?Pedido;
}
