<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Pedidos\CadastrarPedido\Contracts;

use App\Models\Pedido\Pedido;
use App\Repositories\Contracts\PedidoRepository;

interface CadastrarPedidoService
{
    /**
     * Seta os dados para cadastrar um pedido.
     *
     * @param array $dados
     * @return CadastrarPedidoService
     */
    public function setDados(array $dados) : self;

    /**
     * Seta o repositório de pedido.
     *
     * @param PedidoRepository $pedidoRepository
     * @return CadastrarContatoService
     */
    public function setPedidoRepository(PedidoRepository $pedidoRepository) : self;

    /**
     * Processa os dados para cadastrar um pedido.
     *
     * @return Pedido
     */
    public function handle() : ?Pedido;
}
