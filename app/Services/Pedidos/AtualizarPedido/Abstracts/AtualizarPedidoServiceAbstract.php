<?php

namespace App\Services\Pedidos\AtualizarPedido\Abstracts;

use App\Models\Pedido\Pedido;
use App\Repositories\Contracts\PedidoRepository;
use App\Services\Pedidos\AtualizarPedido\Contracts\AtualizarPedidoService;
use Exception;

abstract class AtualizarPedidoServiceAbstract implements AtualizarPedidoService
{

    /**
     * Dados a serem atualizados.
     *
     * @var array
     */
    protected array $dados;

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
     * Seta um pedido a ser atualizado.
     *
     * @param integer $pedido
     * @return AtualizarPedidoService
     */
    public function setPedido(int $pedido): AtualizarPedidoService
    {
        $this->pedido = $pedido;

        return $this;
    }

    /**
     * Seta os dados a serem atualizados.
     *
     * @param array $dados
     * @return AtualizarPedidoService
     */
    public function setDados(array $dados) : AtualizarPedidoService
    {
        $this->dados = $dados;

        return $this;
    }

    /**
     * Seta o repositório de pedido.
     *
     * @param PedidoRepository $pedidoRepository
     * @return AtualizarPedidoService
     */
    public function setPedidoRepository(PedidoRepository $pedidoRepository): AtualizarPedidoService
    {
        $this->pedidoRepository = $pedidoRepository;

        return $this;
    }

    /**
     * Processa os dados para atualizar um pedido.
     *
     * @return Pedido
     */
    protected function atualizarPedido() : Pedido
    {
        $pedido = $this->pedidoRepository->getPedido($this->pedido);

        if(!isset($pedido->id))
            throw new Exception("O pedido solicitado para atualização não existe");

        $pedidoAtualizado = $this->pedidoRepository->updatePedido($pedido->id, $this->dados);

        if(!isset($pedidoAtualizado->id))
            throw new Exception("Não foi possivel atualizar o pedido solicitado. Revise os dados e tente novamente");

        return $pedidoAtualizado;
    }
}
