<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\AuditoriaPatrimonioRepository;

class AuditoriaPatrimonioRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var AuditoriaPatrimonioRepository
     */
    protected AuditoriaPatrimonioRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(AuditoriaPatrimonioRepository::class);
    }

    /**
     * Retorna AuditoriaPatrimonio baseado no ID.
     *
     */
    public function testGetAuditoriaPatrimonio()
    {

    }

    /**
     * Retorna uma coleção de AuditoriaPatrimonio baseado em uma associação.
     *
     */
    public function testGetAuditoriaPatrimonios()
    {

    }

    /**
     * Cria um novo AuditoriaPatrimonio
     *
     */    
    public function testCreateAuditoriaPatrimonio()
    {

    }

    /**
     * Atualiza um AuditoriaPatrimonio
     *
     */ 
    public function testUpdateAuditoriaPatrimonio()
    {

    }

    /**
     * Deleta um AuditoriaPatrimonio
     *
     */ 
    public function testDeleteAuditoriaPatrimonio()
    {

    }
}
