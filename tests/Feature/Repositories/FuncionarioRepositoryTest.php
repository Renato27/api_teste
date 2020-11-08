<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\FuncionarioRepository;

class FuncionarioRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var FuncionarioRepository
     */
    protected FuncionarioRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(FuncionarioRepository::class);
    }

    /**
     * Retorna Funcionario baseado no ID.
     *
     */
    public function testGetFuncionario()
    {

    }

    /**
     * Retorna uma coleção de Funcionario baseado em uma associação.
     *
     */
    public function testGetFuncionarios()
    {

    }

    /**
     * Cria um novo Funcionario
     *
     */    
    public function testCreateFuncionario()
    {

    }

    /**
     * Atualiza um Funcionario
     *
     */ 
    public function testUpdateFuncionario()
    {

    }

    /**
     * Deleta um Funcionario
     *
     */ 
    public function testDeleteFuncionario()
    {

    }
}
