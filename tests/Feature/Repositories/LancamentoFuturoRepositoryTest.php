<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\LancamentoFuturoRepository;

class LancamentoFuturoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var LancamentoFuturoRepository
     */
    protected LancamentoFuturoRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(LancamentoFuturoRepository::class);
    }

    /**
     * Retorna LancamentoFuturo baseado no ID.
     *
     */
    public function testGetLancamentoFuturo()
    {

    }

    /**
     * Retorna uma coleção de LancamentoFuturo baseado em uma associação.
     *
     */
    public function testGetLancamentoFuturos()
    {

    }

    /**
     * Cria um novo LancamentoFuturo
     *
     */    
    public function testCreateLancamentoFuturo()
    {

    }

    /**
     * Atualiza um LancamentoFuturo
     *
     */ 
    public function testUpdateLancamentoFuturo()
    {

    }

    /**
     * Deleta um LancamentoFuturo
     *
     */ 
    public function testDeleteLancamentoFuturo()
    {

    }
}
