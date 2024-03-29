<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Repositories\Contracts\UsuarioRepository;

class UsuarioRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var UsuarioRepository
     */
    protected UsuarioRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(UsuarioRepository::class);
    }

    /**
     * Retorna Usuario baseado no ID.
     */
    public function testGetUsuario()
    {
    }

    /**
     * Retorna uma coleção de Usuario baseado em uma associação.
     */
    public function testGetUsuarios()
    {
    }

    /**
     * Cria um novo Usuario.
     */
    public function testCreateUsuario()
    {
    }

    /**
     * Atualiza um Usuario.
     */
    public function testUpdateUsuario()
    {
    }

    /**
     * Deleta um Usuario.
     */
    public function testDeleteUsuario()
    {
    }
}
