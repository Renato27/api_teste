<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Repositories\Contracts\FabricanteRepository;

class FabricanteRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var FabricanteRepository
     */
    protected FabricanteRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(FabricanteRepository::class);
    }

    /**
     * Retorna Fabricante baseado no ID.
     */
    public function testGetFabricante()
    {
    }

    /**
     * Retorna uma coleção de Fabricante baseado em uma associação.
     */
    public function testGetFabricantes()
    {
    }

    /**
     * Cria um novo Fabricante.
     */
    public function testCreateFabricante()
    {
    }

    /**
     * Atualiza um Fabricante.
     */
    public function testUpdateFabricante()
    {
    }

    /**
     * Deleta um Fabricante.
     */
    public function testDeleteFabricante()
    {
    }
}
