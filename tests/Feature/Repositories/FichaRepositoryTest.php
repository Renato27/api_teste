<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\FichaRepository;

class FichaRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var FichaRepository
     */
    protected FichaRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(FichaRepository::class);
    }

    /**
     * Retorna Ficha baseado no ID.
     *
     */
    public function testGetFicha()
    {

    }

    /**
     * Retorna uma coleção de Ficha baseado em uma associação.
     *
     */
    public function testGetFichas()
    {

    }

    /**
     * Cria um novo Ficha
     *
     */    
    public function testCreateFicha()
    {

    }

    /**
     * Atualiza um Ficha
     *
     */ 
    public function testUpdateFicha()
    {

    }

    /**
     * Deleta um Ficha
     *
     */ 
    public function testDeleteFicha()
    {

    }
}
