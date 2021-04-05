<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Clientes\AtualizarCliente\Contracts;

use App\Models\Clientes\Cliente;
use App\Repositories\Contracts\ClienteRepository;

interface AtualizarClienteService
{
    /**
     * Seta o cliente.
     *
     * @param int $cliente
     * @return AtualizarClienteService
     */
    public function setCliente(int $cliente) : self;

    /**
     * Seta os dados a serem atualizados.
     *
     * @param array $dados
     * @return AtualizarClienteService
     */
    public function setDados(array $dados) : self;

    /**
     * Seta o repositório de cliente.
     *
     * @param ClienteRepository $clienteRepository
     * @return AtualizarClienteService
     */
    public function setClienteRepository(ClienteRepository $clienteRepository) : self;

    /**
     * Processa a atualização do cliente.
     *
     * @return Cliente|null
     */
    public function handle() : ?Cliente;
}
