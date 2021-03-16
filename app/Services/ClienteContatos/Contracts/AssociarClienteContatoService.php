<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\ClienteContatos\Contracts;

use App\Models\ClienteContato\ClienteContato;
use App\Repositories\Contracts\ClienteContatoRepository;

interface AssociarClienteContatoService
{
    /**
     * Seta um contato.
     *
     * @param int $contato
     * @return AssociarClienteContatoService
     */
    public function setContato(int $contato) : self;

    /**
     * Seta um cliente.
     *
     * @param int $cliente
     * @return AssociarClienteContatoService
     */
    public function setCliente(int $cliente) : self;

    /**
     * Seta o repositório de cliente.
     *
     * @param ClienteContatoRepository $clienteContatoRepository
     * @return AssociarClienteContatoService
     */
    public function setClienteContatoRepository(ClienteContatoRepository $clienteContatoRepository) : self;

    /**
     * Processa a associação de cliente contato.
     *
     * @return ClienteContato
     */
    public function handle() : ?ClienteContato;
}
