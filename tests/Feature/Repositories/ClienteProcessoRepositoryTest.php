<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\ClienteProcessoRepository;

class ClienteProcessoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ClienteProcessoRepository
     */
    protected ClienteProcessoRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(ClienteProcessoRepository::class);
    }

    /**
     * Retorna ClienteProcesso baseado no ID.
     *
     */
    public function testGetClienteProcesso()
    {

    }

    /**
     * Retorna uma coleção de ClienteProcesso baseado em uma associação.
     *
     */
    public function testGetClienteProcessos()
    {

    }

    /**
     * Cria um novo ClienteProcesso
     *
     */    
    public function testCreateClienteProcesso()
    {

    }

    /**
     * Atualiza um ClienteProcesso
     *
     */ 
    public function testUpdateClienteProcesso()
    {

    }

    /**
     * Deleta um ClienteProcesso
     *
     */ 
    public function testDeleteClienteProcesso()
    {

    }
}
