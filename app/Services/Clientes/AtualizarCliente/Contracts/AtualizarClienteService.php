<?php

namespace App\Services\Clientes\AtualizarCliente\Contracts;

use App\Models\Clientes\Cliente;
use App\Repositories\Contracts\ClienteRepository;

interface AtualizarClienteService
{

    /**
     * Seta o cliente.
     *
     * @param integer $cliente
     * @return AtualizarClienteService
     */
    public function setCliente(int $cliente) : AtualizarClienteService;
    
    /**
     * Seta os dados a serem atualizados.
     *
     * @param array $dados
     * @return AtualizarClienteService
     */
    public function setDados(array $dados) : AtualizarClienteService;

    /**
     * Seta o repositório de cliente.
     *
     * @param ClienteRepository $clienteRepository
     * @return AtualizarClienteService
     */
    public function setClienteRepository(ClienteRepository $clienteRepository) : AtualizarClienteService;

    /**
     * Processa a atualização do cliente.
     *
     * @return Cliente|null
     */
    public function handle() : ?Cliente;
}
