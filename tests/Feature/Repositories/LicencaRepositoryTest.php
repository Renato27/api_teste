<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\LicencaRepository;

class LicencaRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var LicencaRepository
     */
    protected LicencaRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(LicencaRepository::class);
    }

    /**
     * Retorna Licenca baseado no ID.
     *
     */
    public function testGetLicenca()
    {

    }

    /**
     * Retorna uma coleção de Licenca baseado em uma associação.
     *
     */
    public function testGetLicencas()
    {

    }

    /**
     * Cria um novo Licenca
     *
     */    
    public function testCreateLicenca()
    {

    }

    /**
     * Atualiza um Licenca
     *
     */ 
    public function testUpdateLicenca()
    {

    }

    /**
     * Deleta um Licenca
     *
     */ 
    public function testDeleteLicenca()
    {

    }
}
