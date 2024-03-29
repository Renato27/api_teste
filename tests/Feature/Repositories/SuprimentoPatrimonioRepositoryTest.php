<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Repositories\Contracts\SuprimentoPatrimonioRepository;

class SuprimentoPatrimonioRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var SuprimentoPatrimonioRepository
     */
    protected SuprimentoPatrimonioRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(SuprimentoPatrimonioRepository::class);
    }

    /**
     * Retorna SuprimentoPatrimonio baseado no ID.
     */
    public function testGetSuprimentoPatrimonio()
    {
    }

    /**
     * Retorna uma coleção de SuprimentoPatrimonio baseado em uma associação.
     */
    public function testGetSuprimentoPatrimonios()
    {
    }

    /**
     * Cria um novo SuprimentoPatrimonio.
     */
    public function testCreateSuprimentoPatrimonio()
    {
    }

    /**
     * Atualiza um SuprimentoPatrimonio.
     */
    public function testUpdateSuprimentoPatrimonio()
    {
    }

    /**
     * Deleta um SuprimentoPatrimonio.
     */
    public function testDeleteSuprimentoPatrimonio()
    {
    }
}
