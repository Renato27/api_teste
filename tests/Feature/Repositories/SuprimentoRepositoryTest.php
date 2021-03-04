<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\SuprimentoRepository;

class SuprimentoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var SuprimentoRepository
     */
    protected SuprimentoRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(SuprimentoRepository::class);
    }

    /**
     * Retorna Suprimento baseado no ID.
     *
     */
    public function testGetSuprimento()
    {

    }

    /**
     * Retorna uma coleção de Suprimento baseado em uma associação.
     *
     */
    public function testGetSuprimentos()
    {

    }

    /**
     * Cria um novo Suprimento
     *
     */    
    public function testCreateSuprimento()
    {

    }

    /**
     * Atualiza um Suprimento
     *
     */ 
    public function testUpdateSuprimento()
    {

    }

    /**
     * Deleta um Suprimento
     *
     */ 
    public function testDeleteSuprimento()
    {

    }
}
