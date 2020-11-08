<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\PagamentoMetodoRepository;

class PagamentoMetodoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var PagamentoMetodoRepository
     */
    protected PagamentoMetodoRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(PagamentoMetodoRepository::class);
    }

    /**
     * Retorna PagamentoMetodo baseado no ID.
     *
     */
    public function testGetPagamentoMetodo()
    {

    }

    /**
     * Retorna uma coleção de PagamentoMetodo baseado em uma associação.
     *
     */
    public function testGetPagamentoMetodos()
    {

    }

    /**
     * Cria um novo PagamentoMetodo
     *
     */    
    public function testCreatePagamentoMetodo()
    {

    }

    /**
     * Atualiza um PagamentoMetodo
     *
     */ 
    public function testUpdatePagamentoMetodo()
    {

    }

    /**
     * Deleta um PagamentoMetodo
     *
     */ 
    public function testDeletePagamentoMetodo()
    {

    }
}
