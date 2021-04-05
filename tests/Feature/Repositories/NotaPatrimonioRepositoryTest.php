<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Repositories\Contracts\NotaPatrimonioRepository;

class NotaPatrimonioRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var NotaPatrimonioRepository
     */
    protected NotaPatrimonioRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(NotaPatrimonioRepository::class);
    }

    /**
     * Retorna NotaPatrimonio baseado no ID.
     */
    public function testGetNotaPatrimonio()
    {
    }

    /**
     * Retorna uma coleção de NotaPatrimonio baseado em uma associação.
     */
    public function testGetNotaPatrimonios()
    {
    }

    /**
     * Cria um novo NotaPatrimonio.
     */
    public function testCreateNotaPatrimonio()
    {
    }

    /**
     * Atualiza um NotaPatrimonio.
     */
    public function testUpdateNotaPatrimonio()
    {
    }

    /**
     * Deleta um NotaPatrimonio.
     */
    public function testDeleteNotaPatrimonio()
    {
    }
}
