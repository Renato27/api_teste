<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Clientes\ExcluirCliente\Contracts;

use App\Repositories\Contracts\ClienteRepository;

interface ExcluirClienteService
{
    /**
     * Seta o cliente a ser excluído.
     *
     * @param int $cliente
     * @return void
     */
    public function setCliente(int $cliente);

    /**
     * Seta o repositório de cliente.
     *
     * @param ClienteRepository $clienteRepository
     * @return ExcluirClienteService
     */
    public function setClienteRepository(ClienteRepository $clienteRepository) : self;

    /**
     * Processa a exclusão do cliente.
     *
     * @return bool
     */
    public function handle() : bool;
}
