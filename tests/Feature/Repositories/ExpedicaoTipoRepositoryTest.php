<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\ExpedicaoTipoRepository;

class ExpedicaoTipoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ExpedicaoTipoRepository
     */
    protected ExpedicaoTipoRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(ExpedicaoTipoRepository::class);
    }

    /**
     * Retorna ExpedicaoTipo baseado no ID.
     *
     */
    public function testGetExpedicaoTipo()
    {

    }

    /**
     * Retorna uma coleção de ExpedicaoTipo baseado em uma associação.
     *
     */
    public function testGetExpedicaoTipos()
    {

    }

    /**
     * Cria um novo ExpedicaoTipo
     *
     */    
    public function testCreateExpedicaoTipo()
    {

    }

    /**
     * Atualiza um ExpedicaoTipo
     *
     */ 
    public function testUpdateExpedicaoTipo()
    {

    }

    /**
     * Deleta um ExpedicaoTipo
     *
     */ 
    public function testDeleteExpedicaoTipo()
    {

    }
}
