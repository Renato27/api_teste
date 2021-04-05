<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Repositories\Contracts\ChamadoRepository;

class ChamadoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ChamadoRepository
     */
    protected ChamadoRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(ChamadoRepository::class);
    }

    /**
     * Retorna Chamado baseado no ID.
     */
    public function testGetChamado()
    {
    }

    /**
     * Retorna uma coleção de Chamado baseado em uma associação.
     */
    public function testGetChamados()
    {
    }

    /**
     * Cria um novo Chamado.
     */
    public function testCreateChamado()
    {
    }

    /**
     * Atualiza um Chamado.
     */
    public function testUpdateChamado()
    {
    }

    /**
     * Deleta um Chamado.
     */
    public function testDeleteChamado()
    {
    }
}
