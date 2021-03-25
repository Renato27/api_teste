<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\EstoqueCorredorRepository;

class EstoqueCorredorRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var EstoqueCorredorRepository
     */
    protected EstoqueCorredorRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(EstoqueCorredorRepository::class);
    }

    /**
     * Retorna EstoqueCorredor baseado no ID.
     *
     */
    public function testGetEstoqueCorredor()
    {

    }

    /**
     * Retorna uma coleção de EstoqueCorredor baseado em uma associação.
     *
     */
    public function testGetEstoqueCorredors()
    {

    }

    /**
     * Cria um novo EstoqueCorredor
     *
     */    
    public function testCreateEstoqueCorredor()
    {

    }

    /**
     * Atualiza um EstoqueCorredor
     *
     */ 
    public function testUpdateEstoqueCorredor()
    {

    }

    /**
     * Deleta um EstoqueCorredor
     *
     */ 
    public function testDeleteEstoqueCorredor()
    {

    }
}
