<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\ClienteEnderecos\Contracts;

use App\Models\ClienteEndereco\ClienteEndereco;
use App\Repositories\Contracts\ClienteEnderecoRepository;

interface AssociarClienteEnderecoService
{
    /**
     * Seta o um endereço.
     *
     * @param int $endereco
     * @return AssociarClienteEnderecoService
     */
    public function setEndereco(int $endereco) : self;

    /**
     * Set um cliente.
     *
     * @param int $cliente
     * @return AssociarClienteEnderecoService
     */
    public function setCliente(int $client) : self;

    /**
     * Seta o repositório de cliente endereço.
     *
     * @param ClienteEnderecoRepository $clienteEnderecoRepository
     * @return AssociarClienteEnderecoService
     */
    public function setClienteEnderecoRepository(ClienteEnderecoRepository $clienteEnderecoRepository) : self;

    /**
     * Processa os dados para associar o cliente ao endereço.
     *
     * @return ClienteEndereco
     */
    public function handle() : ?ClienteEndereco;
}
