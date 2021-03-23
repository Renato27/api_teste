<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Repositories\Contracts\CobrancaRepository;

class CobrancaRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var CobrancaRepository
     */
    protected CobrancaRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(CobrancaRepository::class);
    }

    /**
     * Retorna Cobranca baseado no ID.
     */
    public function testGetCobranca()
    {
    }

    /**
     * Retorna uma coleção de Cobranca baseado em uma associação.
     */
    public function testGetCobrancas()
    {
    }

    /**
     * Cria um novo Cobranca.
     */
    public function testCreateCobranca()
    {
    }

    /**
     * Atualiza um Cobranca.
     */
    public function testUpdateCobranca()
    {
    }

    /**
     * Deleta um Cobranca.
     */
    public function testDeleteCobranca()
    {
    }
}
