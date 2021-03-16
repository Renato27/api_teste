<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Repositories\Contracts\AberturaContadorPatrimonioRepository;

class AberturaContadorPatrimonioRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var AberturaContadorPatrimonioRepository
     */
    protected AberturaContadorPatrimonioRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(AberturaContadorPatrimonioRepository::class);
    }

    /**
     * Retorna AberturaContadorPatrimonio baseado no ID.
     */
    public function testGetAberturaContadorPatrimonio()
    {
    }

    /**
     * Retorna uma coleção de AberturaContadorPatrimonio baseado em uma associação.
     */
    public function testGetAberturaContadorPatrimonios()
    {
    }

    /**
     * Cria um novo AberturaContadorPatrimonio.
     */
    public function testCreateAberturaContadorPatrimonio()
    {
    }

    /**
     * Atualiza um AberturaContadorPatrimonio.
     */
    public function testUpdateAberturaContadorPatrimonio()
    {
    }

    /**
     * Deleta um AberturaContadorPatrimonio.
     */
    public function testDeleteAberturaContadorPatrimonio()
    {
    }
}
