<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Repositories\Contracts\EntregaPatrimonioRepository;

class EntregaPatrimonioRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var EntregaPatrimonioRepository
     */
    protected EntregaPatrimonioRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(EntregaPatrimonioRepository::class);
    }

    /**
     * Retorna EntregaPatrimonio baseado no ID.
     */
    public function testGetEntregaPatrimonio()
    {
    }

    /**
     * Retorna uma coleção de EntregaPatrimonio baseado em uma associação.
     */
    public function testGetEntregaPatrimonios()
    {
    }

    /**
     * Cria um novo EntregaPatrimonio.
     */
    public function testCreateEntregaPatrimonio()
    {
    }

    /**
     * Atualiza um EntregaPatrimonio.
     */
    public function testUpdateEntregaPatrimonio()
    {
    }

    /**
     * Deleta um EntregaPatrimonio.
     */
    public function testDeleteEntregaPatrimonio()
    {
    }
}
