<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\EstoqueFichaRepository;

class EstoqueFichaRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var EstoqueFichaRepository
     */
    protected EstoqueFichaRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(EstoqueFichaRepository::class);
    }

    /**
     * Retorna EstoqueFicha baseado no ID.
     *
     */
    public function testGetEstoqueFicha()
    {

    }

    /**
     * Retorna uma coleção de EstoqueFicha baseado em uma associação.
     *
     */
    public function testGetEstoqueFichas()
    {

    }

    /**
     * Cria um novo EstoqueFicha
     *
     */    
    public function testCreateEstoqueFicha()
    {

    }

    /**
     * Atualiza um EstoqueFicha
     *
     */ 
    public function testUpdateEstoqueFicha()
    {

    }

    /**
     * Deleta um EstoqueFicha
     *
     */ 
    public function testDeleteEstoqueFicha()
    {

    }
}
