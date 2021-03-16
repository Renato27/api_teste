<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Repositories\Contracts\NotaRepository;

class NotaRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var NotaRepository
     */
    protected NotaRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(NotaRepository::class);
    }

    /**
     * Retorna Nota baseado no ID.
     */
    public function testGetNota()
    {
    }

    /**
     * Retorna uma coleção de Nota baseado em uma associação.
     */
    public function testGetNotas()
    {
    }

    /**
     * Cria um novo Nota.
     */
    public function testCreateNota()
    {
    }

    /**
     * Atualiza um Nota.
     */
    public function testUpdateNota()
    {
    }

    /**
     * Deleta um Nota.
     */
    public function testDeleteNota()
    {
    }
}
