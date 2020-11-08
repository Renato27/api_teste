<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\StatusPedidoRepository;

class StatusPedidoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var StatusPedidoRepository
     */
    protected StatusPedidoRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(StatusPedidoRepository::class);
    }

    /**
     * Retorna StatusPedido baseado no ID.
     *
     */
    public function testGetStatusPedido()
    {

    }

    /**
     * Retorna uma coleção de StatusPedido baseado em uma associação.
     *
     */
    public function testGetStatusPedidos()
    {

    }

    /**
     * Cria um novo StatusPedido
     *
     */    
    public function testCreateStatusPedido()
    {

    }

    /**
     * Atualiza um StatusPedido
     *
     */ 
    public function testUpdateStatusPedido()
    {

    }

    /**
     * Deleta um StatusPedido
     *
     */ 
    public function testDeleteStatusPedido()
    {

    }
}
