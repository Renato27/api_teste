<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\TipoContatoRepository;

class TipoContatoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var TipoContatoRepository
     */
    protected TipoContatoRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(TipoContatoRepository::class);
    }

    /**
     * Retorna TipoContato baseado no ID.
     *
     */
    public function testGetTipoContato()
    {

    }

    /**
     * Retorna uma coleção de TipoContato baseado em uma associação.
     *
     */
    public function testGetTipoContatos()
    {

    }

    /**
     * Cria um novo TipoContato
     *
     */    
    public function testCreateTipoContato()
    {

    }

    /**
     * Atualiza um TipoContato
     *
     */ 
    public function testUpdateTipoContato()
    {

    }

    /**
     * Deleta um TipoContato
     *
     */ 
    public function testDeleteTipoContato()
    {

    }
}
