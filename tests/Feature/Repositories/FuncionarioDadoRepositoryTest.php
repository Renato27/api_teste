<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\FuncionarioDadoRepository;

class FuncionarioDadoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var FuncionarioDadoRepository
     */
    protected FuncionarioDadoRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(FuncionarioDadoRepository::class);
    }

    /**
     * Retorna FuncionarioDado baseado no ID.
     *
     */
    public function testGetFuncionarioDado()
    {

    }

    /**
     * Retorna uma coleção de FuncionarioDado baseado em uma associação.
     *
     */
    public function testGetFuncionarioDados()
    {

    }

    /**
     * Cria um novo FuncionarioDado
     *
     */    
    public function testCreateFuncionarioDado()
    {

    }

    /**
     * Atualiza um FuncionarioDado
     *
     */ 
    public function testUpdateFuncionarioDado()
    {

    }

    /**
     * Deleta um FuncionarioDado
     *
     */ 
    public function testDeleteFuncionarioDado()
    {

    }
}
