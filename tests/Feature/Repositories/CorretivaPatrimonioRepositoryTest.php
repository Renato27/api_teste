<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Repositories\Contracts\CorretivaPatrimonioRepository;

class CorretivaPatrimonioRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var CorretivaPatrimonioRepository
     */
    protected CorretivaPatrimonioRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(CorretivaPatrimonioRepository::class);
    }

    /**
     * Retorna CorretivaPatrimonio baseado no ID.
     */
    public function testGetCorretivaPatrimonio()
    {
    }

    /**
     * Retorna uma coleção de CorretivaPatrimonio baseado em uma associação.
     */
    public function testGetCorretivaPatrimonios()
    {
    }

    /**
     * Cria um novo CorretivaPatrimonio.
     */
    public function testCreateCorretivaPatrimonio()
    {
    }

    /**
     * Atualiza um CorretivaPatrimonio.
     */
    public function testUpdateCorretivaPatrimonio()
    {
    }

    /**
     * Deleta um CorretivaPatrimonio.
     */
    public function testDeleteCorretivaPatrimonio()
    {
    }
}
