<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\PedidoStatusPedidoRepository;

class PedidoStatusPedidoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var PedidoStatusPedidoRepository
     */
    protected PedidoStatusPedidoRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(PedidoStatusPedidoRepository::class);
    }

    /**
     * Retorna PedidoStatusPedido baseado no ID.
     *
     */
    public function testGetPedidoStatusPedido()
    {

    }

    /**
     * Retorna uma coleção de PedidoStatusPedido baseado em uma associação.
     *
     */
    public function testGetPedidoStatusPedidos()
    {

    }

    /**
     * Cria um novo PedidoStatusPedido
     *
     */    
    public function testCreatePedidoStatusPedido()
    {

    }

    /**
     * Atualiza um PedidoStatusPedido
     *
     */ 
    public function testUpdatePedidoStatusPedido()
    {

    }

    /**
     * Deleta um PedidoStatusPedido
     *
     */ 
    public function testDeletePedidoStatusPedido()
    {

    }
}
