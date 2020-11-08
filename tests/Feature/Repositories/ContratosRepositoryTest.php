<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\ContratosRepository;

class ContratosRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ContratosRepository
     */
    protected ContratosRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(ContratosRepository::class);
    }

    /**
     * Retorna Contratos baseado no ID.
     *
     */
    public function testGetContratos()
    {

    }

    /**
     * Retorna uma coleção de Contratos baseado em uma associação.
     *
     */
    public function testGetContratoss()
    {

    }

    /**
     * Cria um novo Contratos
     *
     */    
    public function testCreateContratos()
    {

    }

    /**
     * Atualiza um Contratos
     *
     */ 
    public function testUpdateContratos()
    {

    }

    /**
     * Deleta um Contratos
     *
     */ 
    public function testDeleteContratos()
    {

    }
}
