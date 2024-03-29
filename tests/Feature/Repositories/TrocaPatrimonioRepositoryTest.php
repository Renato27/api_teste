<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Repositories\Contracts\TrocaPatrimonioRepository;

class TrocaPatrimonioRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var TrocaPatrimonioRepository
     */
    protected TrocaPatrimonioRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(TrocaPatrimonioRepository::class);
    }

    /**
     * Retorna TrocaPatrimonio baseado no ID.
     */
    public function testGetTrocaPatrimonio()
    {
    }

    /**
     * Retorna uma coleção de TrocaPatrimonio baseado em uma associação.
     */
    public function testGetTrocaPatrimonios()
    {
    }

    /**
     * Cria um novo TrocaPatrimonio.
     */
    public function testCreateTrocaPatrimonio()
    {
    }

    /**
     * Atualiza um TrocaPatrimonio.
     */
    public function testUpdateTrocaPatrimonio()
    {
    }

    /**
     * Deleta um TrocaPatrimonio.
     */
    public function testDeleteTrocaPatrimonio()
    {
    }
}
