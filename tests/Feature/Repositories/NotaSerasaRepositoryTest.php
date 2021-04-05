<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\NotaSerasaRepository;

class NotaSerasaRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var NotaSerasaRepository
     */
    protected NotaSerasaRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(NotaSerasaRepository::class);
    }

    /**
     * Retorna NotaSerasa baseado no ID.
     *
     */
    public function testGetNotaSerasa()
    {

    }

    /**
     * Retorna uma coleção de NotaSerasa baseado em uma associação.
     *
     */
    public function testGetNotaSerasas()
    {

    }

    /**
     * Cria um novo NotaSerasa
     *
     */    
    public function testCreateNotaSerasa()
    {

    }

    /**
     * Atualiza um NotaSerasa
     *
     */ 
    public function testUpdateNotaSerasa()
    {

    }

    /**
     * Deleta um NotaSerasa
     *
     */ 
    public function testDeleteNotaSerasa()
    {

    }
}
