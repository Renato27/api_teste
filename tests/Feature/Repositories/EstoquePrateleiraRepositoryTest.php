<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\EstoquePrateleiraRepository;

class EstoquePrateleiraRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var EstoquePrateleiraRepository
     */
    protected EstoquePrateleiraRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(EstoquePrateleiraRepository::class);
    }

    /**
     * Retorna EstoquePrateleira baseado no ID.
     *
     */
    public function testGetEstoquePrateleira()
    {

    }

    /**
     * Retorna uma coleção de EstoquePrateleira baseado em uma associação.
     *
     */
    public function testGetEstoquePrateleiras()
    {

    }

    /**
     * Cria um novo EstoquePrateleira
     *
     */    
    public function testCreateEstoquePrateleira()
    {

    }

    /**
     * Atualiza um EstoquePrateleira
     *
     */ 
    public function testUpdateEstoquePrateleira()
    {

    }

    /**
     * Deleta um EstoquePrateleira
     *
     */ 
    public function testDeleteEstoquePrateleira()
    {

    }
}
