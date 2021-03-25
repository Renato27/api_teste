<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\EstoqueFileirasRepository;

class EstoqueFileirasRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var EstoqueFileirasRepository
     */
    protected EstoqueFileirasRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(EstoqueFileirasRepository::class);
    }

    /**
     * Retorna EstoqueFileiras baseado no ID.
     *
     */
    public function testGetEstoqueFileiras()
    {

    }

    /**
     * Retorna uma coleção de EstoqueFileiras baseado em uma associação.
     *
     */
    public function testGetEstoqueFileirass()
    {

    }

    /**
     * Cria um novo EstoqueFileiras
     *
     */    
    public function testCreateEstoqueFileiras()
    {

    }

    /**
     * Atualiza um EstoqueFileiras
     *
     */ 
    public function testUpdateEstoqueFileiras()
    {

    }

    /**
     * Deleta um EstoqueFileiras
     *
     */ 
    public function testDeleteEstoqueFileiras()
    {

    }
}
