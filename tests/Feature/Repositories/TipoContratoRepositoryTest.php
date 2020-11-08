<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\TipoContratoRepository;

class TipoContratoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var TipoContratoRepository
     */
    protected TipoContratoRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(TipoContratoRepository::class);
    }

    /**
     * Retorna TipoContrato baseado no ID.
     *
     */
    public function testGetTipoContrato()
    {

    }

    /**
     * Retorna uma coleção de TipoContrato baseado em uma associação.
     *
     */
    public function testGetTipoContratos()
    {

    }

    /**
     * Cria um novo TipoContrato
     *
     */    
    public function testCreateTipoContrato()
    {

    }

    /**
     * Atualiza um TipoContrato
     *
     */ 
    public function testUpdateTipoContrato()
    {

    }

    /**
     * Deleta um TipoContrato
     *
     */ 
    public function testDeleteTipoContrato()
    {

    }
}
