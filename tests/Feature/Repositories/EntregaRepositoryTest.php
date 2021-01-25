<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\EntregaRepository;

class EntregaRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var EntregaRepository
     */
    protected EntregaRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(EntregaRepository::class);
    }

    /**
     * Retorna Entrega baseado no ID.
     *
     */
    public function testGetEntrega()
    {

    }

    /**
     * Retorna uma coleção de Entrega baseado em uma associação.
     *
     */
    public function testGetEntregas()
    {

    }

    /**
     * Cria um novo Entrega
     *
     */    
    public function testCreateEntrega()
    {

    }

    /**
     * Atualiza um Entrega
     *
     */ 
    public function testUpdateEntrega()
    {

    }

    /**
     * Deleta um Entrega
     *
     */ 
    public function testDeleteEntrega()
    {

    }
}
