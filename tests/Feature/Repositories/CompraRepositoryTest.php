<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\CompraRepository;

class CompraRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var CompraRepository
     */
    protected CompraRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(CompraRepository::class);
    }

    /**
     * Retorna Compra baseado no ID.
     *
     */
    public function testGetCompra()
    {

    }

    /**
     * Retorna uma coleção de Compra baseado em uma associação.
     *
     */
    public function testGetCompras()
    {

    }

    /**
     * Cria um novo Compra
     *
     */    
    public function testCreateCompra()
    {

    }

    /**
     * Atualiza um Compra
     *
     */ 
    public function testUpdateCompra()
    {

    }

    /**
     * Deleta um Compra
     *
     */ 
    public function testDeleteCompra()
    {

    }
}
