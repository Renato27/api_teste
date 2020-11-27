<?php

namespace App\Services\ClienteContatos\Contracts;

use App\Models\ClienteContato\ClienteContato;
use App\Repositories\Contracts\ClienteContatoRepository;

interface AssociarClienteContatoService
{   
    /**
     * Seta um contato.
     *
     * @param integer $contato
     * @return AssociarClienteContatoService
     */
    public function setContato(int $contato) : AssociarClienteContatoService;

    /**
     * Seta um cliente.
     *
     * @param integer $cliente
     * @return AssociarClienteContatoService
     */
    public function setCliente(int $cliente) : AssociarClienteContatoService;

    /**
     * Seta o repositório de cliente.
     *
     * @param ClienteContatoRepository $clienteContatoRepository
     * @return AssociarClienteContatoService
     */
    public function setClienteContatoRepository(ClienteContatoRepository $clienteContatoRepository) : AssociarClienteContatoService;
    
    /**
     * Processa a associação de cliente contato.
     *
     * @return ClienteContato
     */
    public function handle() : ?ClienteContato;
}
