<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\FornecedorRepository;

class FornecedorRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var FornecedorRepository
     */
    protected FornecedorRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(FornecedorRepository::class);
    }

    /**
     * Retorna Fornecedor baseado no ID.
     *
     */
    public function testGetFornecedor()
    {

    }

    /**
     * Retorna uma coleção de Fornecedor baseado em uma associação.
     *
     */
    public function testGetFornecedors()
    {

    }

    /**
     * Cria um novo Fornecedor
     *
     */    
    public function testCreateFornecedor()
    {

    }

    /**
     * Atualiza um Fornecedor
     *
     */ 
    public function testUpdateFornecedor()
    {

    }

    /**
     * Deleta um Fornecedor
     *
     */ 
    public function testDeleteFornecedor()
    {

    }
}
