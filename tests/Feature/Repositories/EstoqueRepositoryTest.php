<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\EstoqueRepository;

class EstoqueRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var EstoqueRepository
     */
    protected EstoqueRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(EstoqueRepository::class);
    }

    /**
     * Retorna Estoque baseado no ID.
     *
     */
    public function testGetEstoque()
    {

    }

    /**
     * Retorna uma coleção de Estoque baseado em uma associação.
     *
     */
    public function testGetEstoques()
    {

    }

    /**
     * Cria um novo Estoque
     *
     */    
    public function testCreateEstoque()
    {

    }

    /**
     * Atualiza um Estoque
     *
     */ 
    public function testUpdateEstoque()
    {

    }

    /**
     * Deleta um Estoque
     *
     */ 
    public function testDeleteEstoque()
    {

    }
}
