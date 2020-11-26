<?php

namespace App\Services\Clientes\ExcluirCliente\Contracts;

use App\Repositories\Contracts\ClienteRepository;

interface ExcluirClienteService
{
    /**
     * Seta o cliente a ser excluído.
     *
     * @param integer $cliente
     * @return void
     */
    public function setCliente(int $cliente);

    /**
     * Seta o repositório de cliente.
     *
     * @param ClienteRepository $clienteRepository
     * @return ExcluirClienteService
     */
    public function setClienteRepository(ClienteRepository $clienteRepository) : ExcluirClienteService;

    /**
     * Processa a exclusão do cliente.
     *
     * @return boolean
     */
    public function handle() : bool;
}
