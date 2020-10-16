<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\ClienteContatoRepository;

class ClienteContatoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ClienteContatoRepository
     */
    protected ClienteContatoRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(ClienteContatoRepository::class);
    }

    /**
     * Retorna ClienteContato baseado no ID.
     *
     */
    public function testGetClienteContato()
    {

    }

    /**
     * Retorna uma coleção de ClienteContato baseado em uma associação.
     *
     */
    public function testGetClienteContatos()
    {

    }

    /**
     * Cria um novo ClienteContato
     *
     */    
    public function testCreateClienteContato()
    {

    }

    /**
     * Atualiza um ClienteContato
     *
     */ 
    public function testUpdateClienteContato()
    {

    }

    /**
     * Deleta um ClienteContato
     *
     */ 
    public function testDeleteClienteContato()
    {

    }
}
