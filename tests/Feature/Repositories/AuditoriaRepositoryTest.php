<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\AuditoriaRepository;

class AuditoriaRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var AuditoriaRepository
     */
    protected AuditoriaRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(AuditoriaRepository::class);
    }

    /**
     * Retorna Auditoria baseado no ID.
     *
     */
    public function testGetAuditoria()
    {

    }

    /**
     * Retorna uma coleção de Auditoria baseado em uma associação.
     *
     */
    public function testGetAuditorias()
    {

    }

    /**
     * Cria um novo Auditoria
     *
     */    
    public function testCreateAuditoria()
    {

    }

    /**
     * Atualiza um Auditoria
     *
     */ 
    public function testUpdateAuditoria()
    {

    }

    /**
     * Deleta um Auditoria
     *
     */ 
    public function testDeleteAuditoria()
    {

    }
}
