<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Clientes\CadastrarCliente\Abstracts;

use Exception;
use App\Models\Clientes\Cliente;
use App\Repositories\Contracts\ClienteRepository;
use App\Services\ClienteContatos\Contracts\AssociarClienteContatoService;
use App\Services\ClienteEnderecos\Contracts\AssociarClienteEnderecoService;
use App\Services\Clientes\CadastrarCliente\Contracts\CadastrarClienteService;
use App\Services\Contatos\CadastrarContato\Contracts\CadastrarContatoService;
use App\Services\Enderecos\CadastrarEndereco\Contracts\CadastrarEnderecoService;

abstract class CadastrarClienteServiceAbstract implements CadastrarClienteService
{
    /**
     * Dados.
     *
     * @var array
     */
    protected array $dados;

    /**
     * Dados do cliente;.
     */
    protected array $dadosCliente;

    /**
     * Repositório do cliente.
     *
     * @var ClienteRepository
     */
    protected ClienteRepository $clienteRepository;

    /**
     * Serviço de cadastro de endereço.
     *
     * @var CadastrarEnderecoService
     */
    protected CadastrarEnderecoService $cadastrarEnderecoService;

    /**
     * Serviço de cadastro de contato.
     *
     * @var CadastrarContatoService
     */
    protected CadastrarContatoService $cadastrarContatoService;

    /**
     * Serviço para associar cliente a um endereço.
     *
     * @var AssociarClienteContatoService
     */
    protected AssociarClienteContatoService $associarClienteContatoService;

    /**
     * Serviço para associar cliente a um contato.
     *
     * @var AssociarClienteEnderecoService
     */
    protected AssociarClienteEnderecoService $associarClienteEnderecoService;

    /**
     * Seta os dados recebidos.
     *
     * @param array $dados
     * @return CadastrarClienteService
     */
    public function setDados(array $dados) : CadastrarClienteService
    {
        $this->dados = $dados;

        $this->setDadosCliente($this->dados);

        return $this;
    }

    /**
     * Seta os dados do cliente.
     *
     * @param array $dados
     * @return CadastrarClienteService
     */
    private function setDadosCliente(array $dados) : CadastrarClienteService
    {
        $dadosCliente = [
            'razao_social' => $dados['razao_social'],
            'nome_fantasia' => $dados['nome_fantasia'],
            'cpf_cnpj' => $dados['cpf_cnpj'],
            'inscricao_estadual' => $dados['inscricao_estadual'],
            'inscricao_municipal' => $dados['inscricao_municipal'],
        ];

        $this->dadosCliente = $dadosCliente;

        return $this;
    }

    /**
     * Retorna os dados do cliente.
     *
     * @return array
     */
    private function getDadosCliente() : array
    {
        return $this->dadosCliente;
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

    /**
     * Seta serviço de cadastro de endereço.
     *
     * @param CadastrarEnderecoService $cadastrarEnderecoService
     * @return CadastrarClienteService
     */
    public function setCadastrarEnderecoService(CadastrarEnderecoService $cadastrarEnderecoService) : CadastrarClienteService
    {
        $this->cadastrarEnderecoService = $cadastrarEnderecoService;

        return $this;
    }

    /**
     * Seta serviço de cadastro de contato.
     *
     * @param CadastrarContatoService $cadastrarContatoService
     * @return CadastrarClienteService
     */
    public function setCadastrarContatoService(CadastrarContatoService $cadastrarContatoService) : CadastrarClienteService
    {
        $this->cadastrarContatoService = $cadastrarContatoService;

        return $this;
    }

    /**
     * Serviço que associa um cliente a um contato.
     *
     * @param AssociarClienteContatoService $associarClienteContatoService
     * @return CadastrarClienteService
     */
    public function setAssociarClienteContatoService(AssociarClienteContatoService $associarClienteContatoService) : CadastrarClienteService
    {
        $this->associarClienteContatoService = $associarClienteContatoService;

        return $this;
    }

    /**
     * Serviço que associa um cliente a um endereço.
     *
     * @param AssociarClienteEnderecoService $associarClienteEnderecoService
     * @return CadastrarClienteService
     */
    public function setAssociarClienteEnderecoService(AssociarClienteEnderecoService $associarClienteEnderecoService) : CadastrarClienteService
    {
        $this->associarClienteEnderecoService = $associarClienteEnderecoService;

        return $this;
    }

    /**
     * Processa o cadastro do cliente.
     *
     * @return Cliente
     */
    protected function cadastrarCliente() : Cliente
    {
        $clienteCadastrado = $this->clienteRepository->createcliente($this->getDadosCliente());

        if (! isset($clienteCadastrado->id)) {
            throw new Exception('Erro ao cadastrar o cliente. Verifique as informações e tente novamente');
        }

        return $clienteCadastrado;
    }
}
