<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Repositories\Contracts\ContratoItemDefinidoRepository;

class ContratoItemDefinidoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ContratoItemDefinidoRepository
     */
    protected ContratoItemDefinidoRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(ContratoItemDefinidoRepository::class);
    }

    /**
     * Retorna ContratoItemDefinido baseado no ID.
     */
    public function testGetContratoItemDefinido()
    {
    }

    /**
     * Retorna uma coleção de ContratoItemDefinido baseado em uma associação.
     */
    public function testGetContratoItemDefinidos()
    {
    }

    /**
     * Cria um novo ContratoItemDefinido.
     */
    public function testCreateContratoItemDefinido()
    {
    }

    /**
     * Atualiza um ContratoItemDefinido.
     */
    public function testUpdateContratoItemDefinido()
    {
    }

    /**
     * Deleta um ContratoItemDefinido.
     */
    public function testDeleteContratoItemDefinido()
    {
    }
}
