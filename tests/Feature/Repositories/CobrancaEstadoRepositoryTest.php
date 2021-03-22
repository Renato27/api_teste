<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\CobrancaEstadoRepository;

class CobrancaEstadoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var CobrancaEstadoRepository
     */
    protected CobrancaEstadoRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(CobrancaEstadoRepository::class);
    }

    /**
     * Retorna CobrancaEstado baseado no ID.
     *
     */
    public function testGetCobrancaEstado()
    {

    }

    /**
     * Retorna uma coleção de CobrancaEstado baseado em uma associação.
     *
     */
    public function testGetCobrancaEstados()
    {

    }

    /**
     * Cria um novo CobrancaEstado
     *
     */    
    public function testCreateCobrancaEstado()
    {

    }

    /**
     * Atualiza um CobrancaEstado
     *
     */ 
    public function testUpdateCobrancaEstado()
    {

    }

    /**
     * Deleta um CobrancaEstado
     *
     */ 
    public function testDeleteCobrancaEstado()
    {

    }
}
