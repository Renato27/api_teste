<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Repositories\Contracts\SuporteInteracaoRepository;

class SuporteInteracaoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var SuporteInteracaoRepository
     */
    protected SuporteInteracaoRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(SuporteInteracaoRepository::class);
    }

    /**
     * Retorna SuporteInteracao baseado no ID.
     */
    public function testGetSuporteInteracao()
    {
    }

    /**
     * Retorna uma coleção de SuporteInteracao baseado em uma associação.
     */
    public function testGetSuporteInteracaos()
    {
    }

    /**
     * Cria um novo SuporteInteracao.
     */
    public function testCreateSuporteInteracao()
    {
    }

    /**
     * Atualiza um SuporteInteracao.
     */
    public function testUpdateSuporteInteracao()
    {
    }

    /**
     * Deleta um SuporteInteracao.
     */
    public function testDeleteSuporteInteracao()
    {
    }
}
