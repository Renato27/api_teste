<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Repositories\Contracts\TransportadoraRepository;

class TransportadoraRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var TransportadoraRepository
     */
    protected TransportadoraRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(TransportadoraRepository::class);
    }

    /**
     * Retorna Transportadora baseado no ID.
     */
    public function testGetTransportadora()
    {
    }

    /**
     * Retorna uma coleção de Transportadora baseado em uma associação.
     */
    public function testGetTransportadoras()
    {
    }

    /**
     * Cria um novo Transportadora.
     */
    public function testCreateTransportadora()
    {
    }

    /**
     * Atualiza um Transportadora.
     */
    public function testUpdateTransportadora()
    {
    }

    /**
     * Deleta um Transportadora.
     */
    public function testDeleteTransportadora()
    {
    }
}
