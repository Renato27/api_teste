<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\TipoLicencaRepository;

class TipoLicencaRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var TipoLicencaRepository
     */
    protected TipoLicencaRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(TipoLicencaRepository::class);
    }

    /**
     * Retorna TipoLicenca baseado no ID.
     *
     */
    public function testGetTipoLicenca()
    {

    }

    /**
     * Retorna uma coleção de TipoLicenca baseado em uma associação.
     *
     */
    public function testGetTipoLicencas()
    {

    }

    /**
     * Cria um novo TipoLicenca
     *
     */    
    public function testCreateTipoLicenca()
    {

    }

    /**
     * Atualiza um TipoLicenca
     *
     */ 
    public function testUpdateTipoLicenca()
    {

    }

    /**
     * Deleta um TipoLicenca
     *
     */ 
    public function testDeleteTipoLicenca()
    {

    }
}
