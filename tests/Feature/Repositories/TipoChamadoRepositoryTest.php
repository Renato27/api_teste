<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\TipoChamadoRepository;

class TipoChamadoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var TipoChamadoRepository
     */
    protected TipoChamadoRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(TipoChamadoRepository::class);
    }

    /**
     * Retorna TipoChamado baseado no ID.
     *
     */
    public function testGetTipoChamado()
    {

    }

    /**
     * Retorna uma coleção de TipoChamado baseado em uma associação.
     *
     */
    public function testGetTipoChamados()
    {

    }

    /**
     * Cria um novo TipoChamado
     *
     */    
    public function testCreateTipoChamado()
    {

    }

    /**
     * Atualiza um TipoChamado
     *
     */ 
    public function testUpdateTipoChamado()
    {

    }

    /**
     * Deleta um TipoChamado
     *
     */ 
    public function testDeleteTipoChamado()
    {

    }
}
