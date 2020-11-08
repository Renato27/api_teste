<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\ContratoPagamentoMetodoRepository;

class ContratoPagamentoMetodoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ContratoPagamentoMetodoRepository
     */
    protected ContratoPagamentoMetodoRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(ContratoPagamentoMetodoRepository::class);
    }

    /**
     * Retorna ContratoPagamentoMetodo baseado no ID.
     *
     */
    public function testGetContratoPagamentoMetodo()
    {

    }

    /**
     * Retorna uma coleção de ContratoPagamentoMetodo baseado em uma associação.
     *
     */
    public function testGetContratoPagamentoMetodos()
    {

    }

    /**
     * Cria um novo ContratoPagamentoMetodo
     *
     */    
    public function testCreateContratoPagamentoMetodo()
    {

    }

    /**
     * Atualiza um ContratoPagamentoMetodo
     *
     */ 
    public function testUpdateContratoPagamentoMetodo()
    {

    }

    /**
     * Deleta um ContratoPagamentoMetodo
     *
     */ 
    public function testDeleteContratoPagamentoMetodo()
    {

    }
}
