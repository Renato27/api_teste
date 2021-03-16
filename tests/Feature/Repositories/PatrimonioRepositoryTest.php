<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Repositories\Contracts\PatrimonioRepository;

class PatrimonioRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var PatrimonioRepository
     */
    protected PatrimonioRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(PatrimonioRepository::class);
    }

    /**
     * Retorna Patrimonio baseado no ID.
     */
    public function testGetPatrimonio()
    {
    }

    /**
     * Retorna uma coleção de Patrimonio baseado em uma associação.
     */
    public function testGetPatrimonios()
    {
    }

    /**
     * Cria um novo Patrimonio.
     */
    public function testCreatePatrimonio()
    {
    }

    /**
     * Atualiza um Patrimonio.
     */
    public function testUpdatePatrimonio()
    {
    }

    /**
     * Deleta um Patrimonio.
     */
    public function testDeletePatrimonio()
    {
    }
}
