<?php

namespace App\Services\Clientes\CadastrarCliente\Contracts;

use App\Models\Clientes\Cliente;
use App\Repositories\Contracts\ClienteRepository;

interface CadastrarClienteService
{   
    /**
     * Seta os dados do cliente.
     *
     * @param array $dados
     * @return CadastrarClienteService
     */
    public function setDados(array $dados) : CadastrarClienteService;

    /**
     * Seta o repositório de cliente.
     *
     * @param ClienteRepository $clienteRepository
     * @return CadastrarClienteService
     */
    public function setClienteRepository(ClienteRepository $clienteRepository) : CadastrarClienteService;

    /**
     * Processa o cadastro do cliente.
     *
     * @return Cliente
     */
    public function handle() : ?Cliente;
}
