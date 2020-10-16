<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\ClienteEnderecoRepository;

class ClienteEnderecoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ClienteEnderecoRepository
     */
    protected ClienteEnderecoRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(ClienteEnderecoRepository::class);
    }

    /**
     * Retorna ClienteEndereco baseado no ID.
     *
     */
    public function testGetClienteEndereco()
    {

    }

    /**
     * Retorna uma coleção de ClienteEndereco baseado em uma associação.
     *
     */
    public function testGetClienteEnderecos()
    {

    }

    /**
     * Cria um novo ClienteEndereco
     *
     */    
    public function testCreateClienteEndereco()
    {

    }

    /**
     * Atualiza um ClienteEndereco
     *
     */ 
    public function testUpdateClienteEndereco()
    {

    }

    /**
     * Deleta um ClienteEndereco
     *
     */ 
    public function testDeleteClienteEndereco()
    {

    }
}
