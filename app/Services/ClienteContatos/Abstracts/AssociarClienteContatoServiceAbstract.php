<?php

namespace App\Services\ClienteContatos\Abstracts;

use Exception;
use App\Models\ClienteContato\ClienteContato;
use App\Repositories\Contracts\ClienteContatoRepository;
use App\Services\ClienteContatos\Contracts\AssociarClienteContatoService;

abstract class AssociarClienteContatoServiceAbstract implements AssociarClienteContatoService
{
    /**
     * ID do contato.
     *
     * @var integer
     */
    protected int $contato;

    /**
     * ID do cliente.
     *
     * @var integer
     */
    protected int $cliente;

    /**
     * Repositório de cliente contato.
     *
     * @var ClienteContatoRepository
     */
    protected ClienteContatoRepository $clienteContatoRepository;

     /**
     * Seta um contato.
     *
     * @param integer $contato
     * @return AssociarClienteContatoService
     */
    public function setContato(int $contato) : AssociarClienteContatoService
    {
        $this->contato = $contato;

        return $this;
    }

    /**
     * Seta um cliente.
     *
     * @param integer $cliente
     * @return AssociarClienteContatoService
     */
    public function setCliente(int $cliente) : AssociarClienteContatoService
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Seta o repositório de cliente.
     *
     * @param ClienteContatoRepository $clienteContatoRepository
     * @return AssociarClienteContatoService
     */
    public function setClienteContatoRepository(ClienteContatoRepository $clienteContatoRepository) : AssociarClienteContatoService
    {
        $this->clienteContatoRepository = $clienteContatoRepository;

        return $this;
    }

    /**
     * Processao a associação do contato com cliente.
     *
     * @return ClienteEndereco
     */
    protected function associarClienteContato() : ClienteContato
    {

        $associacao = $this->clienteContatoRepository->existeAlgumPrincipal($this->cliente);

        if($associacao)
            return $this->associarSemContatoPrincipal();

        return $this->associarComContatoPrincipal();    
    }

    /**
     * Associa o contato com o cliente e marca como principal.
     *
     * @return ClienteContato
     */
    private function associarComContatoPrincipal() : ClienteContato
    {
        $clienteAssociado = $this->clienteContatoRepository->createClienteContato([
            'cliente_id'    => $this->cliente,
            'contato_id'   => $this->contato,
            'principal'     => 1
        ]);

        if(!isset($clienteAssociado->id))
            throw new Exception("Não foi possível associar o endereço ao cliente");

        return $clienteAssociado;
    }

    /**
     * Associa o contato com o cliente e não marca como principal.
     *
     * @return ClienteContato
     */
    private function associarSemContatoPrincipal() : ClienteContato
    {
        $clienteAssociado = $this->clienteContatoRepository->createClienteContato([
            'cliente_id'    => $this->cliente,
            'contato_id'   => $this->contato,
        ]);

        if(!isset($clienteAssociado->id))
            throw new Exception("Não foi possível associar o endereço ao cliente");

        return $clienteAssociado;
    }
}
