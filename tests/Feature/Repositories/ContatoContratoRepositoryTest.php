<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\ContatoContratoRepository;

class ContatoContratoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ContatoContratoRepository
     */
    protected ContatoContratoRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(ContatoContratoRepository::class);
    }

    /**
     * Retorna ContatoContrato baseado no ID.
     *
     */
    public function testGetContatoContrato()
    {

    }

    /**
     * Retorna uma coleção de ContatoContrato baseado em uma associação.
     *
     */
    public function testGetContatoContratos()
    {

    }

    /**
     * Cria um novo ContatoContrato
     *
     */    
    public function testCreateContatoContrato()
    {

    }

    /**
     * Atualiza um ContatoContrato
     *
     */ 
    public function testUpdateContatoContrato()
    {

    }

    /**
     * Deleta um ContatoContrato
     *
     */ 
    public function testDeleteContatoContrato()
    {

    }
}
