<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\EstoqueEstanteRepository;

class EstoqueEstanteRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var EstoqueEstanteRepository
     */
    protected EstoqueEstanteRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(EstoqueEstanteRepository::class);
    }

    /**
     * Retorna EstoqueEstante baseado no ID.
     *
     */
    public function testGetEstoqueEstante()
    {

    }

    /**
     * Retorna uma coleção de EstoqueEstante baseado em uma associação.
     *
     */
    public function testGetEstoqueEstantes()
    {

    }

    /**
     * Cria um novo EstoqueEstante
     *
     */    
    public function testCreateEstoqueEstante()
    {

    }

    /**
     * Atualiza um EstoqueEstante
     *
     */ 
    public function testUpdateEstoqueEstante()
    {

    }

    /**
     * Deleta um EstoqueEstante
     *
     */ 
    public function testDeleteEstoqueEstante()
    {

    }
}
