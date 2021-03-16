<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Repositories\Contracts\PreventivaPatrimonioRepository;

class PreventivaPatrimonioRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var PreventivaPatrimonioRepository
     */
    protected PreventivaPatrimonioRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(PreventivaPatrimonioRepository::class);
    }

    /**
     * Retorna PreventivaPatrimonio baseado no ID.
     */
    public function testGetPreventivaPatrimonio()
    {
    }

    /**
     * Retorna uma coleção de PreventivaPatrimonio baseado em uma associação.
     */
    public function testGetPreventivaPatrimonios()
    {
    }

    /**
     * Cria um novo PreventivaPatrimonio.
     */
    public function testCreatePreventivaPatrimonio()
    {
    }

    /**
     * Atualiza um PreventivaPatrimonio.
     */
    public function testUpdatePreventivaPatrimonio()
    {
    }

    /**
     * Deleta um PreventivaPatrimonio.
     */
    public function testDeletePreventivaPatrimonio()
    {
    }
}
