<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\UsuarioClienteRepository;

class UsuarioClienteRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var UsuarioClienteRepository
     */
    protected UsuarioClienteRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(UsuarioClienteRepository::class);
    }

    /**
     * Retorna UsuarioCliente baseado no ID.
     *
     */
    public function testGetUsuarioCliente()
    {

    }

    /**
     * Retorna uma coleção de UsuarioCliente baseado em uma associação.
     *
     */
    public function testGetUsuarioClientes()
    {

    }

    /**
     * Cria um novo UsuarioCliente
     *
     */    
    public function testCreateUsuarioCliente()
    {

    }

    /**
     * Atualiza um UsuarioCliente
     *
     */ 
    public function testUpdateUsuarioCliente()
    {

    }

    /**
     * Deleta um UsuarioCliente
     *
     */ 
    public function testDeleteUsuarioCliente()
    {

    }
}
