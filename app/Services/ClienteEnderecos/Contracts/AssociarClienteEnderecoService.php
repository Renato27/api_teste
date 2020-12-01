<?php

namespace App\Services\ClienteEnderecos\Contracts;

use App\Models\ClienteEndereco\ClienteEndereco;
use App\Repositories\Contracts\ClienteEnderecoRepository;

interface AssociarClienteEnderecoService
{

    /**
     * Seta o um endereço.
     *
     * @param integer $endereco
     * @return AssociarClienteEnderecoService
     */
    public function setEndereco(int $endereco) : AssociarClienteEnderecoService;

    /**
     * Set um cliente.
     *
     * @param integer $cliente
     * @return AssociarClienteEnderecoService
     */
    public function setCliente(int $client) : AssociarClienteEnderecoService;

    /**
     * Seta o repositório de cliente endereço.
     *
     * @param ClienteEnderecoRepository $clienteEnderecoRepository
     * @return AssociarClienteEnderecoService
     */
    public function setClienteEnderecoRepository(ClienteEnderecoRepository $clienteEnderecoRepository) : AssociarClienteEnderecoService;

    /**
     * Processa os dados para associar o cliente ao endereço.
     *
     * @return ClienteEndereco
     */
    public function handle() : ?ClienteEndereco;
}
