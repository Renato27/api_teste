<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\CobrancaNotaRepository;

class CobrancaNotaRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var CobrancaNotaRepository
     */
    protected CobrancaNotaRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(CobrancaNotaRepository::class);
    }

    /**
     * Retorna CobrancaNota baseado no ID.
     *
     */
    public function testGetCobrancaNota()
    {

    }

    /**
     * Retorna uma coleção de CobrancaNota baseado em uma associação.
     *
     */
    public function testGetCobrancaNotas()
    {

    }

    /**
     * Cria um novo CobrancaNota
     *
     */    
    public function testCreateCobrancaNota()
    {

    }

    /**
     * Atualiza um CobrancaNota
     *
     */ 
    public function testUpdateCobrancaNota()
    {

    }

    /**
     * Deleta um CobrancaNota
     *
     */ 
    public function testDeleteCobrancaNota()
    {

    }
}
