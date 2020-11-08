<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\ContratoTipoRepository;

class ContratoTipoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ContratoTipoRepository
     */
    protected ContratoTipoRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(ContratoTipoRepository::class);
    }

    /**
     * Retorna ContratoTipo baseado no ID.
     *
     */
    public function testGetContratoTipo()
    {

    }

    /**
     * Retorna uma coleção de ContratoTipo baseado em uma associação.
     *
     */
    public function testGetContratoTipos()
    {

    }

    /**
     * Cria um novo ContratoTipo
     *
     */    
    public function testCreateContratoTipo()
    {

    }

    /**
     * Atualiza um ContratoTipo
     *
     */ 
    public function testUpdateContratoTipo()
    {

    }

    /**
     * Deleta um ContratoTipo
     *
     */ 
    public function testDeleteContratoTipo()
    {

    }
}
