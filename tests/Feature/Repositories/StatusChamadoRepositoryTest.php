<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\StatusChamadoRepository;

class StatusChamadoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var StatusChamadoRepository
     */
    protected StatusChamadoRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(StatusChamadoRepository::class);
    }

    /**
     * Retorna StatusChamado baseado no ID.
     *
     */
    public function testGetStatusChamado()
    {

    }

    /**
     * Retorna uma coleção de StatusChamado baseado em uma associação.
     *
     */
    public function testGetStatusChamados()
    {

    }

    /**
     * Cria um novo StatusChamado
     *
     */    
    public function testCreateStatusChamado()
    {

    }

    /**
     * Atualiza um StatusChamado
     *
     */ 
    public function testUpdateStatusChamado()
    {

    }

    /**
     * Deleta um StatusChamado
     *
     */ 
    public function testDeleteStatusChamado()
    {

    }
}
