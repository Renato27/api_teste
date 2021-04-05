<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\ClienteProcessoEstadoRepository;

class ClienteProcessoEstadoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ClienteProcessoEstadoRepository
     */
    protected ClienteProcessoEstadoRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(ClienteProcessoEstadoRepository::class);
    }

    /**
     * Retorna ClienteProcessoEstado baseado no ID.
     *
     */
    public function testGetClienteProcessoEstado()
    {

    }

    /**
     * Retorna uma coleção de ClienteProcessoEstado baseado em uma associação.
     *
     */
    public function testGetClienteProcessoEstados()
    {

    }

    /**
     * Cria um novo ClienteProcessoEstado
     *
     */    
    public function testCreateClienteProcessoEstado()
    {

    }

    /**
     * Atualiza um ClienteProcessoEstado
     *
     */ 
    public function testUpdateClienteProcessoEstado()
    {

    }

    /**
     * Deleta um ClienteProcessoEstado
     *
     */ 
    public function testDeleteClienteProcessoEstado()
    {

    }
}
