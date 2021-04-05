<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Repositories\Contracts\ModeloRepository;

class ModeloRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ModeloRepository
     */
    protected ModeloRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(ModeloRepository::class);
    }

    /**
     * Retorna Modelo baseado no ID.
     */
    public function testGetModelo()
    {
    }

    /**
     * Retorna uma coleção de Modelo baseado em uma associação.
     */
    public function testGetModelos()
    {
    }

    /**
     * Cria um novo Modelo.
     */
    public function testCreateModelo()
    {
    }

    /**
     * Atualiza um Modelo.
     */
    public function testUpdateModelo()
    {
    }

    /**
     * Deleta um Modelo.
     */
    public function testDeleteModelo()
    {
    }
}
