<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\CobrancaAtividadeRepository;

class CobrancaAtividadeRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var CobrancaAtividadeRepository
     */
    protected CobrancaAtividadeRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(CobrancaAtividadeRepository::class);
    }

    /**
     * Retorna CobrancaAtividade baseado no ID.
     *
     */
    public function testGetCobrancaAtividade()
    {

    }

    /**
     * Retorna uma coleção de CobrancaAtividade baseado em uma associação.
     *
     */
    public function testGetCobrancaAtividades()
    {

    }

    /**
     * Cria um novo CobrancaAtividade
     *
     */    
    public function testCreateCobrancaAtividade()
    {

    }

    /**
     * Atualiza um CobrancaAtividade
     *
     */ 
    public function testUpdateCobrancaAtividade()
    {

    }

    /**
     * Deleta um CobrancaAtividade
     *
     */ 
    public function testDeleteCobrancaAtividade()
    {

    }
}
