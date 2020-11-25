<?php

namespace App\Services\Clientes\ExcluirCliente\Abstracts;

use App\Repositories\Contracts\ClienteRepository;
use App\Services\Clientes\ExcluirCliente\Contracts\ExcluirClienteService;
use Exception;

abstract class ExcluirClienteServiceAbstract implements ExcluirClienteService
{
    /**
     * ID do cliente.
     *
     * @var integer
     */
    protected int $cliente;

    /**
     * Repositório do cliente.
     *
     * @var ClienteRepository
     */
    protected ClienteRepository $clienteRepository;

    /**
     * Seta o cliente a ser excluído.
     *
     * @param integer $cliente
     * @return void
     */
    public function setCliente(int $cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Seta o repositório de cliente.
     *
     * @param ClienteRepository $clienteRepository
     * @return ExcluirClienteService
     */
    public function setClienteRepository(ClienteRepository $clienteRepository) : ExcluirClienteService
    {
        $this->clienteRepository = $clienteRepository;

        return $this;
    }

    /**
     * Processa a exclusão de um cliente.
     *
     * @return boolean
     */
    protected function excluirCliente() : bool
    {
        $cliente = $this->clienteRepository->getcliente($this->cliente);

        if(!isset($cliente->id))
            throw new Exception("O cliente solicitado para exclusão não existe.");

        $clienteExcluido = $this->clienteRepository->deletecliente($cliente->id);
        
        if(!$clienteExcluido)
            throw new Exception("Não foi possível excluir o cliente solicitado.");

        return $clienteExcluido;    
    }
}
