<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\PreventivaRepository;

class PreventivaRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var PreventivaRepository
     */
    protected PreventivaRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(PreventivaRepository::class);
    }

    /**
     * Retorna Preventiva baseado no ID.
     *
     */
    public function testGetPreventiva()
    {

    }

    /**
     * Retorna uma coleção de Preventiva baseado em uma associação.
     *
     */
    public function testGetPreventivas()
    {

    }

    /**
     * Cria um novo Preventiva
     *
     */    
    public function testCreatePreventiva()
    {

    }

    /**
     * Atualiza um Preventiva
     *
     */ 
    public function testUpdatePreventiva()
    {

    }

    /**
     * Deleta um Preventiva
     *
     */ 
    public function testDeletePreventiva()
    {

    }
}
