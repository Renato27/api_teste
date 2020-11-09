<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\EnderecoFuncionarioRepository;

class EnderecoFuncionarioRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var EnderecoFuncionarioRepository
     */
    protected EnderecoFuncionarioRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(EnderecoFuncionarioRepository::class);
    }

    /**
     * Retorna EnderecoFuncionario baseado no ID.
     *
     */
    public function testGetEnderecoFuncionario()
    {

    }

    /**
     * Retorna uma coleção de EnderecoFuncionario baseado em uma associação.
     *
     */
    public function testGetEnderecoFuncionarios()
    {

    }

    /**
     * Cria um novo EnderecoFuncionario
     *
     */    
    public function testCreateEnderecoFuncionario()
    {

    }

    /**
     * Atualiza um EnderecoFuncionario
     *
     */ 
    public function testUpdateEnderecoFuncionario()
    {

    }

    /**
     * Deleta um EnderecoFuncionario
     *
     */ 
    public function testDeleteEnderecoFuncionario()
    {

    }
}
