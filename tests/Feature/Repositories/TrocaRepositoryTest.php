<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Repositories\Contracts\TrocaRepository;

class TrocaRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var TrocaRepository
     */
    protected TrocaRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(TrocaRepository::class);
    }

    /**
     * Retorna Troca baseado no ID.
     */
    public function testGetTroca()
    {
    }

    /**
     * Retorna uma coleção de Troca baseado em uma associação.
     */
    public function testGetTrocas()
    {
    }

    /**
     * Cria um novo Troca.
     */
    public function testCreateTroca()
    {
    }

    /**
     * Atualiza um Troca.
     */
    public function testUpdateTroca()
    {
    }

    /**
     * Deleta um Troca.
     */
    public function testDeleteTroca()
    {
    }
}
