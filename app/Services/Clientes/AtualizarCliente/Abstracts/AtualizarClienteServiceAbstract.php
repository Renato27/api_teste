<?php

namespace App\Services\Clientes\AtualizarCliente\Abstracts;

use App\Models\Clientes\Cliente;
use App\Repositories\Contracts\ClienteRepository;
use App\Services\Clientes\AtualizarCliente\Contracts\AtualizarClienteService;
use Exception;

abstract class AtualizarClienteServiceAbstract implements AtualizarClienteService
{

    /**
     * ID do Cliente
     *
     * @var integer
     */
    protected int $cliente;
    /**
     * Dados para atualizar.
     *
     * @var array
     */
    protected array $dados;

    /**
     * Repositório de cliente.
     *
     * @var ClienteRepository
     */
    protected ClienteRepository $clienteRepository;

    /**
     * Seta o cliente.
     *
     * @param integer $cliente
     * @return AtualizarClienteService
     */
    public function setCliente(int $cliente) : AtualizarClienteService
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Seta os dados a serem atualizados.
     *
     * @param array $dados
     * @return AtualizarClienteService
     */
    public function setDados(array $dados) : AtualizarClienteService
    {
        $dadosCliente = [
            'razao_social'          => $dados['razao_social'],
            'nome_fantasia'         => $dados['nome_fantasia'],
            'cpf_cnpj'              => $dados['cpf_cnpj'],
            'inscricao_estadual'    => $dados['inscricao_estadual'],
            'inscricao_municipal'   => $dados['inscricao_municipal']
        ];

        $this->dados = $dadosCliente;

        return $this;
    }

    /**
     * Seta o repositório de cliente.
     *
     * @param ClienteRepository $clienteRepository
     * @return AtualizarClienteService
     */
    public function setClienteRepository(ClienteRepository $clienteRepository) : AtualizarClienteService
    {
        $this->clienteRepository = $clienteRepository;

        return $this;
    }

    /**
     * Atualiza os dados do cliente.
     *
     * @return Cliente
     */
    protected function atualizarCliente() : Cliente
    {
        $cliente = $this->clienteRepository->getcliente($this->cliente);

        if(!isset($cliente->id))
            throw new Exception("O cliente solicitado para atualização não existe");

        $clienteAtualizado = $this->clienteRepository->updatecliente($cliente->id, $this->dados);
        
        if(!isset($clienteAtualizado->id))
            throw new Exception("Não foi possivel atualizar o cliente solicitado. Revise os dados e tente novamente");

        return $clienteAtualizado;    
    }
}
