<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\ContatoRepository;

class ContatoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ContatoRepository
     */
    protected ContatoRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(ContatoRepository::class);
    }

    /**
     * Retorna Contato baseado no ID.
     *
     */
    public function testGetContato()
    {

    }

    /**
     * Retorna uma coleção de Contato baseado em uma associação.
     *
     */
    public function testGetContatos()
    {

    }

    /**
     * Cria um novo Contato
     *
     */    
    public function testCreateContato()
    {

    }

    /**
     * Atualiza um Contato
     *
     */ 
    public function testUpdateContato()
    {

    }

    /**
     * Deleta um Contato
     *
     */ 
    public function testDeleteContato()
    {

    }
}
