<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\DadoFuncionarioRepository;

class DadoFuncionarioRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var DadoFuncionarioRepository
     */
    protected DadoFuncionarioRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(DadoFuncionarioRepository::class);
    }

    /**
     * Retorna DadoFuncionario baseado no ID.
     *
     */
    public function testGetDadoFuncionario()
    {

    }

    /**
     * Retorna uma coleção de DadoFuncionario baseado em uma associação.
     *
     */
    public function testGetDadoFuncionarios()
    {

    }

    /**
     * Cria um novo DadoFuncionario
     *
     */    
    public function testCreateDadoFuncionario()
    {

    }

    /**
     * Atualiza um DadoFuncionario
     *
     */ 
    public function testUpdateDadoFuncionario()
    {

    }

    /**
     * Deleta um DadoFuncionario
     *
     */ 
    public function testDeleteDadoFuncionario()
    {

    }
}
