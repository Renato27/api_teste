<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\EstoqueArmarioRepository;

class EstoqueArmarioRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var EstoqueArmarioRepository
     */
    protected EstoqueArmarioRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(EstoqueArmarioRepository::class);
    }

    /**
     * Retorna EstoqueArmario baseado no ID.
     *
     */
    public function testGetEstoqueArmario()
    {

    }

    /**
     * Retorna uma coleção de EstoqueArmario baseado em uma associação.
     *
     */
    public function testGetEstoqueArmarios()
    {

    }

    /**
     * Cria um novo EstoqueArmario
     *
     */    
    public function testCreateEstoqueArmario()
    {

    }

    /**
     * Atualiza um EstoqueArmario
     *
     */ 
    public function testUpdateEstoqueArmario()
    {

    }

    /**
     * Deleta um EstoqueArmario
     *
     */ 
    public function testDeleteEstoqueArmario()
    {

    }
}
