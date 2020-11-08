<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\ContatoEnderecosRepository;

class ContatoEnderecosRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ContatoEnderecosRepository
     */
    protected ContatoEnderecosRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(ContatoEnderecosRepository::class);
    }

    /**
     * Retorna ContatoEnderecos baseado no ID.
     *
     */
    public function testGetContatoEnderecos()
    {

    }

    /**
     * Retorna uma coleção de ContatoEnderecos baseado em uma associação.
     *
     */
    public function testGetContatoEnderecoss()
    {

    }

    /**
     * Cria um novo ContatoEnderecos
     *
     */    
    public function testCreateContatoEnderecos()
    {

    }

    /**
     * Atualiza um ContatoEnderecos
     *
     */ 
    public function testUpdateContatoEnderecos()
    {

    }

    /**
     * Deleta um ContatoEnderecos
     *
     */ 
    public function testDeleteContatoEnderecos()
    {

    }
}
