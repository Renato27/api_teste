<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Repositories\Contracts\EspelhoRecorrentePatrimonioRepository;

class EspelhoRecorrentePatrimonioRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var EspelhoRecorrentePatrimonioRepository
     */
    protected EspelhoRecorrentePatrimonioRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(EspelhoRecorrentePatrimonioRepository::class);
    }

    /**
     * Retorna EspelhoRecorrentePatrimonio baseado no ID.
     */
    public function testGetEspelhoRecorrentePatrimonio()
    {
    }

    /**
     * Retorna uma coleção de EspelhoRecorrentePatrimonio baseado em uma associação.
     */
    public function testGetEspelhoRecorrentePatrimonios()
    {
    }

    /**
     * Cria um novo EspelhoRecorrentePatrimonio.
     */
    public function testCreateEspelhoRecorrentePatrimonio()
    {
    }

    /**
     * Atualiza um EspelhoRecorrentePatrimonio.
     */
    public function testUpdateEspelhoRecorrentePatrimonio()
    {
    }

    /**
     * Deleta um EspelhoRecorrentePatrimonio.
     */
    public function testDeleteEspelhoRecorrentePatrimonio()
    {
    }
}
