<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Repositories\Contracts\RetiradaPatrimonioRepository;

class RetiradaPatrimonioRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var RetiradaPatrimonioRepository
     */
    protected RetiradaPatrimonioRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(RetiradaPatrimonioRepository::class);
    }

    /**
     * Retorna RetiradaPatrimonio baseado no ID.
     */
    public function testGetRetiradaPatrimonio()
    {
    }

    /**
     * Retorna uma coleção de RetiradaPatrimonio baseado em uma associação.
     */
    public function testGetRetiradaPatrimonios()
    {
    }

    /**
     * Cria um novo RetiradaPatrimonio.
     */
    public function testCreateRetiradaPatrimonio()
    {
    }

    /**
     * Atualiza um RetiradaPatrimonio.
     */
    public function testUpdateRetiradaPatrimonio()
    {
    }

    /**
     * Deleta um RetiradaPatrimonio.
     */
    public function testDeleteRetiradaPatrimonio()
    {
    }
}
