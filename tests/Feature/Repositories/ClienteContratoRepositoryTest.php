<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\ClienteContratoRepository;

class ClienteContratoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ClienteContratoRepository
     */
    protected ClienteContratoRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(ClienteContratoRepository::class);
    }

    /**
     * Retorna ClienteContrato baseado no ID.
     *
     */
    public function testGetClienteContrato()
    {

    }

    /**
     * Retorna uma coleção de ClienteContrato baseado em uma associação.
     *
     */
    public function testGetClienteContratos()
    {

    }

    /**
     * Cria um novo ClienteContrato
     *
     */    
    public function testCreateClienteContrato()
    {

    }

    /**
     * Atualiza um ClienteContrato
     *
     */ 
    public function testUpdateClienteContrato()
    {

    }

    /**
     * Deleta um ClienteContrato
     *
     */ 
    public function testDeleteClienteContrato()
    {

    }
}
