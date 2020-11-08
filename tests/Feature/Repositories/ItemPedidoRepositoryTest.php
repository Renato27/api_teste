<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\ItemPedidoRepository;

class ItemPedidoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ItemPedidoRepository
     */
    protected ItemPedidoRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(ItemPedidoRepository::class);
    }

    /**
     * Retorna ItemPedido baseado no ID.
     *
     */
    public function testGetItemPedido()
    {

    }

    /**
     * Retorna uma coleção de ItemPedido baseado em uma associação.
     *
     */
    public function testGetItemPedidos()
    {

    }

    /**
     * Cria um novo ItemPedido
     *
     */    
    public function testCreateItemPedido()
    {

    }

    /**
     * Atualiza um ItemPedido
     *
     */ 
    public function testUpdateItemPedido()
    {

    }

    /**
     * Deleta um ItemPedido
     *
     */ 
    public function testDeleteItemPedido()
    {

    }
}
