<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\FuncionarioEnderecoRepository;

class FuncionarioEnderecoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var FuncionarioEnderecoRepository
     */
    protected FuncionarioEnderecoRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(FuncionarioEnderecoRepository::class);
    }

    /**
     * Retorna FuncionarioEndereco baseado no ID.
     *
     */
    public function testGetFuncionarioEndereco()
    {

    }

    /**
     * Retorna uma coleção de FuncionarioEndereco baseado em uma associação.
     *
     */
    public function testGetFuncionarioEnderecos()
    {

    }

    /**
     * Cria um novo FuncionarioEndereco
     *
     */    
    public function testCreateFuncionarioEndereco()
    {

    }

    /**
     * Atualiza um FuncionarioEndereco
     *
     */ 
    public function testUpdateFuncionarioEndereco()
    {

    }

    /**
     * Deleta um FuncionarioEndereco
     *
     */ 
    public function testDeleteFuncionarioEndereco()
    {

    }
}
