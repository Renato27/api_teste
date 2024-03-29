<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Repositories\Contracts\TipoPatrimonioRepository;

class TipoPatrimonioRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var TipoPatrimonioRepository
     */
    protected TipoPatrimonioRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(TipoPatrimonioRepository::class);
    }

    /**
     * Retorna TipoPatrimonio baseado no ID.
     */
    public function testGetTipoPatrimonio()
    {
    }

    /**
     * Retorna uma coleção de TipoPatrimonio baseado em uma associação.
     */
    public function testGetTipoPatrimonios()
    {
    }

    /**
     * Cria um novo TipoPatrimonio.
     */
    public function testCreateTipoPatrimonio()
    {
    }

    /**
     * Atualiza um TipoPatrimonio.
     */
    public function testUpdateTipoPatrimonio()
    {
    }

    /**
     * Deleta um TipoPatrimonio.
     */
    public function testDeleteTipoPatrimonio()
    {
    }
}
