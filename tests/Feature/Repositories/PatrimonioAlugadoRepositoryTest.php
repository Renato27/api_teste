<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\PatrimonioAlugadoRepository;

class PatrimonioAlugadoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var PatrimonioAlugadoRepository
     */
    protected PatrimonioAlugadoRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(PatrimonioAlugadoRepository::class);
    }

    /**
     * Retorna PatrimonioAlugado baseado no ID.
     *
     */
    public function testGetPatrimonioAlugado()
    {

    }

    /**
     * Retorna uma coleção de PatrimonioAlugado baseado em uma associação.
     *
     */
    public function testGetPatrimonioAlugados()
    {

    }

    /**
     * Cria um novo PatrimonioAlugado
     *
     */    
    public function testCreatePatrimonioAlugado()
    {

    }

    /**
     * Atualiza um PatrimonioAlugado
     *
     */ 
    public function testUpdatePatrimonioAlugado()
    {

    }

    /**
     * Deleta um PatrimonioAlugado
     *
     */ 
    public function testDeletePatrimonioAlugado()
    {

    }
}
