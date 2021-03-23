<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\ReajusteContratoRepository;

class ReajusteContratoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ReajusteContratoRepository
     */
    protected ReajusteContratoRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(ReajusteContratoRepository::class);
    }

    /**
     * Retorna ReajusteContrato baseado no ID.
     *
     */
    public function testGetReajusteContrato()
    {

    }

    /**
     * Retorna uma coleção de ReajusteContrato baseado em uma associação.
     *
     */
    public function testGetReajusteContratos()
    {

    }

    /**
     * Cria um novo ReajusteContrato
     *
     */    
    public function testCreateReajusteContrato()
    {

    }

    /**
     * Atualiza um ReajusteContrato
     *
     */ 
    public function testUpdateReajusteContrato()
    {

    }

    /**
     * Deleta um ReajusteContrato
     *
     */ 
    public function testDeleteReajusteContrato()
    {

    }
}
