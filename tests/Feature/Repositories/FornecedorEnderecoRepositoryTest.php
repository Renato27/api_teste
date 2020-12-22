<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\FornecedorEnderecoRepository;

class FornecedorEnderecoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var FornecedorEnderecoRepository
     */
    protected FornecedorEnderecoRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(FornecedorEnderecoRepository::class);
    }

    /**
     * Retorna FornecedorEndereco baseado no ID.
     *
     */
    public function testGetFornecedorEndereco()
    {

    }

    /**
     * Retorna uma coleção de FornecedorEndereco baseado em uma associação.
     *
     */
    public function testGetFornecedorEnderecos()
    {

    }

    /**
     * Cria um novo FornecedorEndereco
     *
     */    
    public function testCreateFornecedorEndereco()
    {

    }

    /**
     * Atualiza um FornecedorEndereco
     *
     */ 
    public function testUpdateFornecedorEndereco()
    {

    }

    /**
     * Deleta um FornecedorEndereco
     *
     */ 
    public function testDeleteFornecedorEndereco()
    {

    }
}
