<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\NotaEspelhoPatrimonioRepository;

class NotaEspelhoPatrimonioRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var NotaEspelhoPatrimonioRepository
     */
    protected NotaEspelhoPatrimonioRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(NotaEspelhoPatrimonioRepository::class);
    }

    /**
     * Retorna NotaEspelhoPatrimonio baseado no ID.
     *
     */
    public function testGetNotaEspelhoPatrimonio()
    {

    }

    /**
     * Retorna uma coleção de NotaEspelhoPatrimonio baseado em uma associação.
     *
     */
    public function testGetNotaEspelhoPatrimonios()
    {

    }

    /**
     * Cria um novo NotaEspelhoPatrimonio
     *
     */    
    public function testCreateNotaEspelhoPatrimonio()
    {

    }

    /**
     * Atualiza um NotaEspelhoPatrimonio
     *
     */ 
    public function testUpdateNotaEspelhoPatrimonio()
    {

    }

    /**
     * Deleta um NotaEspelhoPatrimonio
     *
     */ 
    public function testDeleteNotaEspelhoPatrimonio()
    {

    }
}
