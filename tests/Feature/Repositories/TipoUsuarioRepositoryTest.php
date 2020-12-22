<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\TipoUsuarioRepository;

class TipoUsuarioRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var TipoUsuarioRepository
     */
    protected TipoUsuarioRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(TipoUsuarioRepository::class);
    }

    /**
     * Retorna TipoUsuario baseado no ID.
     *
     */
    public function testGetTipoUsuario()
    {

    }

    /**
     * Retorna uma coleção de TipoUsuario baseado em uma associação.
     *
     */
    public function testGetTipoUsuarios()
    {

    }

    /**
     * Cria um novo TipoUsuario
     *
     */    
    public function testCreateTipoUsuario()
    {

    }

    /**
     * Atualiza um TipoUsuario
     *
     */ 
    public function testUpdateTipoUsuario()
    {

    }

    /**
     * Deleta um TipoUsuario
     *
     */ 
    public function testDeleteTipoUsuario()
    {

    }
}
