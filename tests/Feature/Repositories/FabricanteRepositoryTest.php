<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\FabricanteRepository;

class FabricanteRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var FabricanteRepository
     */
    protected FabricanteRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(FabricanteRepository::class);
    }

    /**
     * Retorna Fabricante baseado no ID.
     *
     */
    public function testGetFabricante()
    {

    }

    /**
     * Retorna uma coleção de Fabricante baseado em uma associação.
     *
     */
    public function testGetFabricantes()
    {

    }

    /**
     * Cria um novo Fabricante
     *
     */    
    public function testCreateFabricante()
    {

    }

    /**
     * Atualiza um Fabricante
     *
     */ 
    public function testUpdateFabricante()
    {

    }

    /**
     * Deleta um Fabricante
     *
     */ 
    public function testDeleteFabricante()
    {

    }
}
