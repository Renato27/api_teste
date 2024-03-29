<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Repositories\Contracts\ItemDefinidoRepository;

class ItemDefinidoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ItemDefinidoRepository
     */
    protected ItemDefinidoRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(ItemDefinidoRepository::class);
    }

    /**
     * Retorna ItemDefinido baseado no ID.
     */
    public function testGetItemDefinido()
    {
    }

    /**
     * Retorna uma coleção de ItemDefinido baseado em uma associação.
     */
    public function testGetItemDefinidos()
    {
    }

    /**
     * Cria um novo ItemDefinido.
     */
    public function testCreateItemDefinido()
    {
    }

    /**
     * Atualiza um ItemDefinido.
     */
    public function testUpdateItemDefinido()
    {
    }

    /**
     * Deleta um ItemDefinido.
     */
    public function testDeleteItemDefinido()
    {
    }
}
