<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\NotaEspelhoEstadoRepository;

class NotaEspelhoEstadoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var NotaEspelhoEstadoRepository
     */
    protected NotaEspelhoEstadoRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(NotaEspelhoEstadoRepository::class);
    }

    /**
     * Retorna NotaEspelhoEstado baseado no ID.
     *
     */
    public function testGetNotaEspelhoEstado()
    {

    }

    /**
     * Retorna uma coleção de NotaEspelhoEstado baseado em uma associação.
     *
     */
    public function testGetNotaEspelhoEstados()
    {

    }

    /**
     * Cria um novo NotaEspelhoEstado
     *
     */    
    public function testCreateNotaEspelhoEstado()
    {

    }

    /**
     * Atualiza um NotaEspelhoEstado
     *
     */ 
    public function testUpdateNotaEspelhoEstado()
    {

    }

    /**
     * Deleta um NotaEspelhoEstado
     *
     */ 
    public function testDeleteNotaEspelhoEstado()
    {

    }
}
