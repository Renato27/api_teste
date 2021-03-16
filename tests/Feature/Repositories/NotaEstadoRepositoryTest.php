<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Repositories\Contracts\NotaEstadoRepository;

class NotaEstadoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var NotaEstadoRepository
     */
    protected NotaEstadoRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(NotaEstadoRepository::class);
    }

    /**
     * Retorna NotaEstado baseado no ID.
     */
    public function testGetNotaEstado()
    {
    }

    /**
     * Retorna uma coleção de NotaEstado baseado em uma associação.
     */
    public function testGetNotaEstados()
    {
    }

    /**
     * Cria um novo NotaEstado.
     */
    public function testCreateNotaEstado()
    {
    }

    /**
     * Atualiza um NotaEstado.
     */
    public function testUpdateNotaEstado()
    {
    }

    /**
     * Deleta um NotaEstado.
     */
    public function testDeleteNotaEstado()
    {
    }
}
