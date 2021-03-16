<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Repositories\Contracts\FornecedorCompraRepository;

class FornecedorCompraRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var FornecedorCompraRepository
     */
    protected FornecedorCompraRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(FornecedorCompraRepository::class);
    }

    /**
     * Retorna FornecedorCompra baseado no ID.
     */
    public function testGetFornecedorCompra()
    {
    }

    /**
     * Retorna uma coleção de FornecedorCompra baseado em uma associação.
     */
    public function testGetFornecedorCompras()
    {
    }

    /**
     * Cria um novo FornecedorCompra.
     */
    public function testCreateFornecedorCompra()
    {
    }

    /**
     * Atualiza um FornecedorCompra.
     */
    public function testUpdateFornecedorCompra()
    {
    }

    /**
     * Deleta um FornecedorCompra.
     */
    public function testDeleteFornecedorCompra()
    {
    }
}
