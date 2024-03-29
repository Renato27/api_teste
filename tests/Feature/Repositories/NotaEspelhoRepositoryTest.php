<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Repositories\Contracts\NotaEspelhoRepository;

class NotaEspelhoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var NotaEspelhoRepository
     */
    protected NotaEspelhoRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(NotaEspelhoRepository::class);
    }

    /**
     * Retorna NotaEspelho baseado no ID.
     */
    public function testGetNotaEspelho()
    {
    }

    /**
     * Retorna uma coleção de NotaEspelho baseado em uma associação.
     */
    public function testGetNotaEspelhos()
    {
    }

    /**
     * Cria um novo NotaEspelho.
     */
    public function testCreateNotaEspelho()
    {
    }

    /**
     * Atualiza um NotaEspelho.
     */
    public function testUpdateNotaEspelho()
    {
    }

    /**
     * Deleta um NotaEspelho.
     */
    public function testDeleteNotaEspelho()
    {
    }
}
