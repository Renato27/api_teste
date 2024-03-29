<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\ClienteEnderecos\Abstracts;

use Exception;
use App\Models\ClienteEndereco\ClienteEndereco;
use App\Repositories\Contracts\ClienteEnderecoRepository;
use App\Services\ClienteEnderecos\Contracts\AssociarClienteEnderecoService;

abstract class AssociarClienteEnderecoServiceAbstract implements AssociarClienteEnderecoService
{
    /**
     * ID do endereço.
     *
     * @var int
     */
    protected int $endereco;

    /**
     * ID do cliente caso exista.
     *
     * @var int|null
     */
    protected ?int $cliente;

    /**
     * Repositório de cliente endereço.
     *
     * @var ClienteEnderecoRepository
     */
    protected ClienteEnderecoRepository $clienteEnderecoRepository;

    /**
     * Seta o um endereço.
     *
     * @param int $endereco
     * @return AssociarClienteEnderecoService
     */
    public function setEndereco(int $endereco) : AssociarClienteEnderecoService
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Set um cliente.
     *
     * @param int $cliente
     * @return AssociarClienteEnderecoService
     */
    public function setCliente(int $cliente) : AssociarClienteEnderecoService
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Seta o repositório de cliente endereço.
     *
     * @param ClienteEnderecoRepository $clienteEnderecoRepository
     * @return AssociarClienteEnderecoService
     */
    public function setClienteEnderecoRepository(ClienteEnderecoRepository $clienteEnderecoRepository) : AssociarClienteEnderecoService
    {
        $this->clienteEnderecoRepository = $clienteEnderecoRepository;

        return $this;
    }

    /**
     * Processao a associação do endereço com cliente.
     *
     * @return ClienteEndereco
     */
    protected function associarClienteEndereco() : ClienteEndereco
    {
        $clienteAssociado = $this->clienteEnderecoRepository->createClienteEndereco([
            'cliente_id' => $this->cliente,
            'endereco_id' => $this->endereco,
            'principal' => 1,
        ]);

        if (! isset($clienteAssociado->id)) {
            throw new Exception('Não foi possível associar o endereço ao cliente');
        }

        return $clienteAssociado;
    }
}
