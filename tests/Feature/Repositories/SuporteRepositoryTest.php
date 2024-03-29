<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Repositories\Contracts\SuporteRepository;

class SuporteRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var SuporteRepository
     */
    protected SuporteRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(SuporteRepository::class);
    }

    /**
     * Retorna Suporte baseado no ID.
     */
    public function testGetSuporte()
    {
    }

    /**
     * Retorna uma coleção de Suporte baseado em uma associação.
     */
    public function testGetSuportes()
    {
    }

    /**
     * Cria um novo Suporte.
     */
    public function testCreateSuporte()
    {
    }

    /**
     * Atualiza um Suporte.
     */
    public function testUpdateSuporte()
    {
    }

    /**
     * Deleta um Suporte.
     */
    public function testDeleteSuporte()
    {
    }
}
