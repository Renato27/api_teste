<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\Cliente;

class ClienteTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var Cliente
     */
    protected Cliente $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(Cliente::class);
    }

    /**
     * Retorna cliente baseado no ID.
     *
     */
    public function testGetcliente()
    {

    }

    /**
     * Retorna uma coleção de cliente baseado em uma associação.
     *
     */
    public function testGetclientes()
    {

    }

    /**
     * Cria um novo cliente
     *
     */    
    public function testCreatecliente()
    {

    }

    /**
     * Atualiza um cliente
     *
     */ 
    public function testUpdatecliente()
    {

    }

    /**
     * Deleta um cliente
     *
     */ 
    public function testDeletecliente()
    {

    }
}
