<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\ContratoPedidoRepository;

class ContratoPedidoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ContratoPedidoRepository
     */
    protected ContratoPedidoRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(ContratoPedidoRepository::class);
    }

    /**
     * Retorna ContratoPedido baseado no ID.
     *
     */
    public function testGetContratoPedido()
    {

    }

    /**
     * Retorna uma coleção de ContratoPedido baseado em uma associação.
     *
     */
    public function testGetContratoPedidos()
    {

    }

    /**
     * Cria um novo ContratoPedido
     *
     */    
    public function testCreateContratoPedido()
    {

    }

    /**
     * Atualiza um ContratoPedido
     *
     */ 
    public function testUpdateContratoPedido()
    {

    }

    /**
     * Deleta um ContratoPedido
     *
     */ 
    public function testDeleteContratoPedido()
    {

    }
}
