<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\PedidoRepository;

class PedidoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var PedidoRepository
     */
    protected PedidoRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(PedidoRepository::class);
    }

    /**
     * Retorna Pedido baseado no ID.
     *
     */
    public function testGetPedido()
    {

    }

    /**
     * Retorna uma coleção de Pedido baseado em uma associação.
     *
     */
    public function testGetPedidos()
    {

    }

    /**
     * Cria um novo Pedido
     *
     */    
    public function testCreatePedido()
    {

    }

    /**
     * Atualiza um Pedido
     *
     */ 
    public function testUpdatePedido()
    {

    }

    /**
     * Deleta um Pedido
     *
     */ 
    public function testDeletePedido()
    {

    }
}
