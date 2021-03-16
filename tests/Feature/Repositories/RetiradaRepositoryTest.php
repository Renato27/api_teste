<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Repositories\Contracts\RetiradaRepository;

class RetiradaRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var RetiradaRepository
     */
    protected RetiradaRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(RetiradaRepository::class);
    }

    /**
     * Retorna Retirada baseado no ID.
     */
    public function testGetRetirada()
    {
    }

    /**
     * Retorna uma coleção de Retirada baseado em uma associação.
     */
    public function testGetRetiradas()
    {
    }

    /**
     * Cria um novo Retirada.
     */
    public function testCreateRetirada()
    {
    }

    /**
     * Atualiza um Retirada.
     */
    public function testUpdateRetirada()
    {
    }

    /**
     * Deleta um Retirada.
     */
    public function testDeleteRetirada()
    {
    }
}
