<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Repositories\Contracts\EnderecoFornecedorRepository;

class EnderecoFornecedorRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var EnderecoFornecedorRepository
     */
    protected EnderecoFornecedorRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(EnderecoFornecedorRepository::class);
    }

    /**
     * Retorna EnderecoFornecedor baseado no ID.
     */
    public function testGetEnderecoFornecedor()
    {
    }

    /**
     * Retorna uma coleção de EnderecoFornecedor baseado em uma associação.
     */
    public function testGetEnderecoFornecedors()
    {
    }

    /**
     * Cria um novo EnderecoFornecedor.
     */
    public function testCreateEnderecoFornecedor()
    {
    }

    /**
     * Atualiza um EnderecoFornecedor.
     */
    public function testUpdateEnderecoFornecedor()
    {
    }

    /**
     * Deleta um EnderecoFornecedor.
     */
    public function testDeleteEnderecoFornecedor()
    {
    }
}
