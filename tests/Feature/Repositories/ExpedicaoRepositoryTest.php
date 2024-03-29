<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Repositories\Contracts\ExpedicaoRepository;

class ExpedicaoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ExpedicaoRepository
     */
    protected ExpedicaoRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(ExpedicaoRepository::class);
    }

    /**
     * Retorna Expedicao baseado no ID.
     */
    public function testGetExpedicao()
    {
    }

    /**
     * Retorna uma coleção de Expedicao baseado em uma associação.
     */
    public function testGetExpedicaos()
    {
    }

    /**
     * Cria um novo Expedicao.
     */
    public function testCreateExpedicao()
    {
    }

    /**
     * Atualiza um Expedicao.
     */
    public function testUpdateExpedicao()
    {
    }

    /**
     * Deleta um Expedicao.
     */
    public function testDeleteExpedicao()
    {
    }
}
