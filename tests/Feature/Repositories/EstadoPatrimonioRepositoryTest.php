<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Repositories\Contracts\EstadoPatrimonioRepository;

class EstadoPatrimonioRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var EstadoPatrimonioRepository
     */
    protected EstadoPatrimonioRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(EstadoPatrimonioRepository::class);
    }

    /**
     * Retorna EstadoPatrimonio baseado no ID.
     */
    public function testGetEstadoPatrimonio()
    {
    }

    /**
     * Retorna uma coleção de EstadoPatrimonio baseado em uma associação.
     */
    public function testGetEstadoPatrimonios()
    {
    }

    /**
     * Cria um novo EstadoPatrimonio.
     */
    public function testCreateEstadoPatrimonio()
    {
    }

    /**
     * Atualiza um EstadoPatrimonio.
     */
    public function testUpdateEstadoPatrimonio()
    {
    }

    /**
     * Deleta um EstadoPatrimonio.
     */
    public function testDeleteEstadoPatrimonio()
    {
    }
}
