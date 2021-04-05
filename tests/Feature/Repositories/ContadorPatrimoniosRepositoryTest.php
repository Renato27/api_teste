<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Repositories\Contracts\ContadorPatrimoniosRepository;

class ContadorPatrimoniosRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ContadorPatrimoniosRepository
     */
    protected ContadorPatrimoniosRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(ContadorPatrimoniosRepository::class);
    }

    /**
     * Retorna ContadorPatrimonios baseado no ID.
     */
    public function testGetContadorPatrimonios()
    {
    }

    /**
     * Retorna uma coleção de ContadorPatrimonios baseado em uma associação.
     */
    public function testGetContadorPatrimonioss()
    {
    }

    /**
     * Cria um novo ContadorPatrimonios.
     */
    public function testCreateContadorPatrimonios()
    {
    }

    /**
     * Atualiza um ContadorPatrimonios.
     */
    public function testUpdateContadorPatrimonios()
    {
    }

    /**
     * Deleta um ContadorPatrimonios.
     */
    public function testDeleteContadorPatrimonios()
    {
    }
}
