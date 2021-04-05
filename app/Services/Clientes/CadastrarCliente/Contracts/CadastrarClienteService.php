<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Clientes\CadastrarCliente\Contracts;

use App\Models\Clientes\Cliente;
use App\Repositories\Contracts\ClienteRepository;
use App\Services\ClienteContatos\Contracts\AssociarClienteContatoService;
use App\Services\ClienteEnderecos\Contracts\AssociarClienteEnderecoService;
use App\Services\Contatos\CadastrarContato\Contracts\CadastrarContatoService;
use App\Services\Enderecos\CadastrarEndereco\Contracts\CadastrarEnderecoService;

interface CadastrarClienteService
{
    /**
     * Seta os dados do cliente.
     *
     * @param array $dados
     * @return CadastrarClienteService
     */
    public function setDados(array $dados) : self;

    /**
     * Seta o repositório de cliente.
     *
     * @param ClienteRepository $clienteRepository
     * @return CadastrarClienteService
     */
    public function setClienteRepository(ClienteRepository $clienteRepository) : self;

    /**
     * Serviço de cadastro de endereço.
     *
     * @param CadastrarEnderecoService $cadastrarEnderecoService
     * @return CadastrarClienteService
     */
    public function setCadastrarEnderecoService(CadastrarEnderecoService $cadastrarEnderecoService) : self;

    /**
     * Serviço de cadastro de contato.
     *
     * @param CadastrarContatoService $cadastrarContatoService
     * @return CadastrarClienteService
     */
    public function setCadastrarContatoService(CadastrarContatoService $cadastrarContatoService) : self;

    /**
     * Serviço que associa um cliente a um contato.
     *
     * @param AssociarClienteContatoService $associarClienteContatoService
     * @return CadastrarClienteService
     */
    public function setAssociarClienteContatoService(AssociarClienteContatoService $associarClienteContatoService) : self;

    /**
     * Serviço que associa um cliente a um endereço.
     *
     * @param AssociarClienteEnderecoService $associarClienteEnderecoService
     * @return CadastrarClienteService
     */
    public function setAssociarClienteEnderecoService(AssociarClienteEnderecoService $associarClienteEnderecoService) : self;

    /**
     * Processa o cadastro do cliente.
     *
     * @return Cliente
     */
    public function handle() : ?Cliente;
}
