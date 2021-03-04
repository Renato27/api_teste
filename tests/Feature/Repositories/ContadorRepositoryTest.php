<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\ContadorRepository;

class ContadorRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ContadorRepository
     */
    protected ContadorRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(ContadorRepository::class);
    }

    /**
     * Retorna Contador baseado no ID.
     *
     */
    public function testGetContador()
    {

    }

    /**
     * Retorna uma coleção de Contador baseado em uma associação.
     *
     */
    public function testGetContadors()
    {

    }

    /**
     * Cria um novo Contador
     *
     */    
    public function testCreateContador()
    {

    }

    /**
     * Atualiza um Contador
     *
     */ 
    public function testUpdateContador()
    {

    }

    /**
     * Deleta um Contador
     *
     */ 
    public function testDeleteContador()
    {

    }
}
