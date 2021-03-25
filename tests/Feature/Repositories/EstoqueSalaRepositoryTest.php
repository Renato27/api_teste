<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\EstoqueSalaRepository;

class EstoqueSalaRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var EstoqueSalaRepository
     */
    protected EstoqueSalaRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(EstoqueSalaRepository::class);
    }

    /**
     * Retorna EstoqueSala baseado no ID.
     *
     */
    public function testGetEstoqueSala()
    {

    }

    /**
     * Retorna uma coleção de EstoqueSala baseado em uma associação.
     *
     */
    public function testGetEstoqueSalas()
    {

    }

    /**
     * Cria um novo EstoqueSala
     *
     */    
    public function testCreateEstoqueSala()
    {

    }

    /**
     * Atualiza um EstoqueSala
     *
     */ 
    public function testUpdateEstoqueSala()
    {

    }

    /**
     * Deleta um EstoqueSala
     *
     */ 
    public function testDeleteEstoqueSala()
    {

    }
}
