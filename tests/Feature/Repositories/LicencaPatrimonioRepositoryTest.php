<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Repositories\Contracts\LicencaPatrimonioRepository;

class LicencaPatrimonioRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var LicencaPatrimonioRepository
     */
    protected LicencaPatrimonioRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(LicencaPatrimonioRepository::class);
    }

    /**
     * Retorna LicencaPatrimonio baseado no ID.
     */
    public function testGetLicencaPatrimonio()
    {
    }

    /**
     * Retorna uma coleção de LicencaPatrimonio baseado em uma associação.
     */
    public function testGetLicencaPatrimonios()
    {
    }

    /**
     * Cria um novo LicencaPatrimonio.
     */
    public function testCreateLicencaPatrimonio()
    {
    }

    /**
     * Atualiza um LicencaPatrimonio.
     */
    public function testUpdateLicencaPatrimonio()
    {
    }

    /**
     * Deleta um LicencaPatrimonio.
     */
    public function testDeleteLicencaPatrimonio()
    {
    }
}
