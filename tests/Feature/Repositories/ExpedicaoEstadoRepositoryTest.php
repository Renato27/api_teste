<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Repositories\Contracts\ExpedicaoEstadoRepository;

class ExpedicaoEstadoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ExpedicaoEstadoRepository
     */
    protected ExpedicaoEstadoRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(ExpedicaoEstadoRepository::class);
    }

    /**
     * Retorna ExpedicaoEstado baseado no ID.
     */
    public function testGetExpedicaoEstado()
    {
    }

    /**
     * Retorna uma coleção de ExpedicaoEstado baseado em uma associação.
     */
    public function testGetExpedicaoEstados()
    {
    }

    /**
     * Cria um novo ExpedicaoEstado.
     */
    public function testCreateExpedicaoEstado()
    {
    }

    /**
     * Atualiza um ExpedicaoEstado.
     */
    public function testUpdateExpedicaoEstado()
    {
    }

    /**
     * Deleta um ExpedicaoEstado.
     */
    public function testDeleteExpedicaoEstado()
    {
    }
}
