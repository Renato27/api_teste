<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\EnderecoRepository;

class EnderecoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var EnderecoRepository
     */
    protected EnderecoRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(EnderecoRepository::class);
    }

    /**
     * Retorna Endereco baseado no ID.
     *
     */
    public function testGetEndereco()
    {

    }

    /**
     * Retorna uma coleção de Endereco baseado em uma associação.
     *
     */
    public function testGetEnderecos()
    {

    }

    /**
     * Cria um novo Endereco
     *
     */    
    public function testCreateEndereco()
    {

    }

    /**
     * Atualiza um Endereco
     *
     */ 
    public function testUpdateEndereco()
    {

    }

    /**
     * Deleta um Endereco
     *
     */ 
    public function testDeleteEndereco()
    {

    }
}
