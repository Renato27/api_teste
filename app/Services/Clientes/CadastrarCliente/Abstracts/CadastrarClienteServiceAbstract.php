<?php

namespace App\Services\Clientes\CadastrarCliente\Abstracts;

use App\Models\Clientes\Cliente;
use App\Repositories\Contracts\ClienteRepository;
use App\Services\Clientes\CadastrarCliente\Contracts\CadastrarClienteService;
use Exception;

abstract class CadastrarClienteServiceAbstract implements CadastrarClienteService
{

    /**
     * Dados do cliente.
     *
     * @var array
     */
    protected array $dados;

    /**
     * Repositório do cliente.
     *
     * @var ClienteRepository
     */
    protected ClienteRepository $clienteRepository;

    /**
     * Seta os dados do cliente.
     *
     * @param array $dados
     * @return CadastrarClienteService
     */
    public function setDados(array $dados) : CadastrarClienteService
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
     * @return CadastrarClienteService
     */
    public function setClienteRepository(ClienteRepository $clienteRepository) : CadastrarClienteService
    {
        $this->clienteRepository = $clienteRepository;

        return $this;
    }

    protected function cadastrarCliente() : Cliente
    {
        $clienteCadastrado = $this->clienteRepository->createcliente($this->dados);

        if(!isset($clienteCadastrado->id))
            throw new Exception("Erro ao cadastrar o cliente. Verifique as informações e tente novamente");

        return $clienteCadastrado;    
    }
}
