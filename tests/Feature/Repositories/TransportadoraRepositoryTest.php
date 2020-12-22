<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\TransportadoraRepository;

class TransportadoraRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var TransportadoraRepository
     */
    protected TransportadoraRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(TransportadoraRepository::class);
    }

    /**
     * Retorna Transportadora baseado no ID.
     *
     */
    public function testGetTransportadora()
    {

    }

    /**
     * Retorna uma coleção de Transportadora baseado em uma associação.
     *
     */
    public function testGetTransportadoras()
    {

    }

    /**
     * Cria um novo Transportadora
     *
     */    
    public function testCreateTransportadora()
    {

    }

    /**
     * Atualiza um Transportadora
     *
     */ 
    public function testUpdateTransportadora()
    {

    }

    /**
     * Deleta um Transportadora
     *
     */ 
    public function testDeleteTransportadora()
    {

    }
}
