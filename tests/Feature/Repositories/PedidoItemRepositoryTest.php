<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\PedidoItemRepository;

class PedidoItemRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var PedidoItemRepository
     */
    protected PedidoItemRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(PedidoItemRepository::class);
    }

    /**
     * Retorna PedidoItem baseado no ID.
     *
     */
    public function testGetPedidoItem()
    {

    }

    /**
     * Retorna uma coleção de PedidoItem baseado em uma associação.
     *
     */
    public function testGetPedidoItems()
    {

    }

    /**
     * Cria um novo PedidoItem
     *
     */    
    public function testCreatePedidoItem()
    {

    }

    /**
     * Atualiza um PedidoItem
     *
     */ 
    public function testUpdatePedidoItem()
    {

    }

    /**
     * Deleta um PedidoItem
     *
     */ 
    public function testDeletePedidoItem()
    {

    }
}
