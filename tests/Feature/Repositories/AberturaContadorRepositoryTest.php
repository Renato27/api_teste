<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Repositories\Contracts\AberturaContadorRepository;

class AberturaContadorRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var AberturaContadorRepository
     */
    protected AberturaContadorRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(AberturaContadorRepository::class);
    }

    /**
     * Retorna AberturaContador baseado no ID.
     */
    public function testGetAberturaContador()
    {
    }

    /**
     * Retorna uma coleção de AberturaContador baseado em uma associação.
     */
    public function testGetAberturaContadors()
    {
    }

    /**
     * Cria um novo AberturaContador.
     */
    public function testCreateAberturaContador()
    {
    }

    /**
     * Atualiza um AberturaContador.
     */
    public function testUpdateAberturaContador()
    {
    }

    /**
     * Deleta um AberturaContador.
     */
    public function testDeleteAberturaContador()
    {
    }
}
