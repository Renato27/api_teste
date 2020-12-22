<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\TransportadoraCompraRepository;

class TransportadoraCompraRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var TransportadoraCompraRepository
     */
    protected TransportadoraCompraRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(TransportadoraCompraRepository::class);
    }

    /**
     * Retorna TransportadoraCompra baseado no ID.
     *
     */
    public function testGetTransportadoraCompra()
    {

    }

    /**
     * Retorna uma coleção de TransportadoraCompra baseado em uma associação.
     *
     */
    public function testGetTransportadoraCompras()
    {

    }

    /**
     * Cria um novo TransportadoraCompra
     *
     */    
    public function testCreateTransportadoraCompra()
    {

    }

    /**
     * Atualiza um TransportadoraCompra
     *
     */ 
    public function testUpdateTransportadoraCompra()
    {

    }

    /**
     * Deleta um TransportadoraCompra
     *
     */ 
    public function testDeleteTransportadoraCompra()
    {

    }
}
