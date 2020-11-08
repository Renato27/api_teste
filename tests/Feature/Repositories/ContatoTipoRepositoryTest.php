<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\ContatoTipoRepository;

class ContatoTipoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ContatoTipoRepository
     */
    protected ContatoTipoRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(ContatoTipoRepository::class);
    }

    /**
     * Retorna ContatoTipo baseado no ID.
     *
     */
    public function testGetContatoTipo()
    {

    }

    /**
     * Retorna uma coleção de ContatoTipo baseado em uma associação.
     *
     */
    public function testGetContatoTipos()
    {

    }

    /**
     * Cria um novo ContatoTipo
     *
     */    
    public function testCreateContatoTipo()
    {

    }

    /**
     * Atualiza um ContatoTipo
     *
     */ 
    public function testUpdateContatoTipo()
    {

    }

    /**
     * Deleta um ContatoTipo
     *
     */ 
    public function testDeleteContatoTipo()
    {

    }
}
