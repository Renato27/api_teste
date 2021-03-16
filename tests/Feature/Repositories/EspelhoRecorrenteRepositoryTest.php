<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Repositories\Contracts\EspelhoRecorrenteRepository;

class EspelhoRecorrenteRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var EspelhoRecorrenteRepository
     */
    protected EspelhoRecorrenteRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(EspelhoRecorrenteRepository::class);
    }

    /**
     * Retorna EspelhoRecorrente baseado no ID.
     */
    public function testGetEspelhoRecorrente()
    {
    }

    /**
     * Retorna uma coleção de EspelhoRecorrente baseado em uma associação.
     */
    public function testGetEspelhoRecorrentes()
    {
    }

    /**
     * Cria um novo EspelhoRecorrente.
     */
    public function testCreateEspelhoRecorrente()
    {
    }

    /**
     * Atualiza um EspelhoRecorrente.
     */
    public function testUpdateEspelhoRecorrente()
    {
    }

    /**
     * Deleta um EspelhoRecorrente.
     */
    public function testDeleteEspelhoRecorrente()
    {
    }
}
