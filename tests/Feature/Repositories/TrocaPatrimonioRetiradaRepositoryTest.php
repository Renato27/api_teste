<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Repositories\Contracts\TrocaPatrimonioRetiradaRepository;

class TrocaPatrimonioRetiradaRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var TrocaPatrimonioRetiradaRepository
     */
    protected TrocaPatrimonioRetiradaRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(TrocaPatrimonioRetiradaRepository::class);
    }

    /**
     * Retorna TrocaPatrimonioRetirada baseado no ID.
     */
    public function testGetTrocaPatrimonioRetirada()
    {
    }

    /**
     * Retorna uma coleção de TrocaPatrimonioRetirada baseado em uma associação.
     */
    public function testGetTrocaPatrimonioRetiradas()
    {
    }

    /**
     * Cria um novo TrocaPatrimonioRetirada.
     */
    public function testCreateTrocaPatrimonioRetirada()
    {
    }

    /**
     * Atualiza um TrocaPatrimonioRetirada.
     */
    public function testUpdateTrocaPatrimonioRetirada()
    {
    }

    /**
     * Deleta um TrocaPatrimonioRetirada.
     */
    public function testDeleteTrocaPatrimonioRetirada()
    {
    }
}
