<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\CorretivaRepository;

class CorretivaRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var CorretivaRepository
     */
    protected CorretivaRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(CorretivaRepository::class);
    }

    /**
     * Retorna Corretiva baseado no ID.
     *
     */
    public function testGetCorretiva()
    {

    }

    /**
     * Retorna uma coleção de Corretiva baseado em uma associação.
     *
     */
    public function testGetCorretivas()
    {

    }

    /**
     * Cria um novo Corretiva
     *
     */    
    public function testCreateCorretiva()
    {

    }

    /**
     * Atualiza um Corretiva
     *
     */ 
    public function testUpdateCorretiva()
    {

    }

    /**
     * Deleta um Corretiva
     *
     */ 
    public function testDeleteCorretiva()
    {

    }
}
