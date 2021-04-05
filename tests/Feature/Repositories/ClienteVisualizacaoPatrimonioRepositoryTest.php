<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Repositories\Contracts\ClienteVisualizacaoPatrimonioRepository;

class ClienteVisualizacaoPatrimonioRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ClienteVisualizacaoPatrimonioRepository
     */
    protected ClienteVisualizacaoPatrimonioRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(ClienteVisualizacaoPatrimonioRepository::class);
    }

    /**
     * Retorna ClienteVisualizacaoPatrimonio baseado no ID.
     */
    public function testGetClienteVisualizacaoPatrimonio()
    {
    }

    /**
     * Retorna uma coleção de ClienteVisualizacaoPatrimonio baseado em uma associação.
     */
    public function testGetClienteVisualizacaoPatrimonios()
    {
    }

    /**
     * Cria um novo ClienteVisualizacaoPatrimonio.
     */
    public function testCreateClienteVisualizacaoPatrimonio()
    {
    }

    /**
     * Atualiza um ClienteVisualizacaoPatrimonio.
     */
    public function testUpdateClienteVisualizacaoPatrimonio()
    {
    }

    /**
     * Deleta um ClienteVisualizacaoPatrimonio.
     */
    public function testDeleteClienteVisualizacaoPatrimonio()
    {
    }
}
