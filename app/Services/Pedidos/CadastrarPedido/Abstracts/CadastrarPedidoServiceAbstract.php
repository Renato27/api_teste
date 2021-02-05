<?php

namespace App\Services\Pedidos\CadastrarPedido\Abstracts;

use App\Models\Pedido\Pedido;
use App\Repositories\Contracts\PedidoRepository;
use App\Services\Pedidos\CadastrarPedido\Contracts\CadastrarPedidoService;
use Exception;

abstract class CadastrarPedidoServiceAbstract implements CadastrarPedidoService
{

    /**
     * Dados a serem cadastrados;
     *
     * @var array
     */
    protected array $dados;

    /**
     * Repositório de pedido.
     *
     * @var PedidoRepository
     */
    protected PedidoRepository $contatoRepository;

    /**
     * Seta os dados para cadastrar um pedido.
     *
     * @param array $dados
     * @return CadastrarPedidoService
     */
    public function setDados(array $dados) : CadastrarPedidoService
    {
        $dadosPedido = [
            'data_entrega'      => $dados['data_entrega'],
            'data_retirada'     => $dados['data_retirada'],
            'status_pedido_id'  => $dados['status_pedido_id'],
            'contato_id'        => $dados['contato_id'],
            'endereco_id'       => $dados['endereco_id']
        ];

        $this->dados = $dadosPedido;

        return $this;
    }

    /**
     * Seta o repositório de pedido.
     *
     * @param PedidoRepository $contatoRepository
     * @return CadastrarPedidoService
     */
    public function setPedidoRepository(PedidoRepository $contatoRepository) : CadastrarPedidoService
    {
        $this->contatoRepository = $contatoRepository;

        return $this;
    }

    /**
     * Processa os dados e cadastra o pedido.
     *
     * @return pedido
     */
    protected function cadastrarPedidos() : Pedido
    {
        $contatoCadastrado = $this->contatoRepository->createPedido($this->dados);

        if(!isset($contatoCadastrado->id))
            throw new Exception("Não foi possível cadastrar o pedido. Verifique os dados e tente novamente.");

        return $contatoCadastrado;
    }
}
