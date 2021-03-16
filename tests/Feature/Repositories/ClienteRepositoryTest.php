<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Models\Clientes\Cliente;
use App\Repositories\Contracts\ClienteRepository;
use App\Repositories\ClienteRepositoryImplementation;

class ClienteRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ClienteRepository
     */
    protected ClienteRepository $implementacao;

    public function __construct()
    {
        $this->implementacao = new ClienteRepositoryImplementation(new Cliente());
        parent::__construct();
    }

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(Cliente::class);
    }

    /**
     * Retorna cliente baseado no ID.
     */
    public function testGetcliente()
    {
        $cliente = \App\Models\Clientes\Cliente::factory()->create();

        $retorno = $this->implementacao->getcliente($cliente->id);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Retorna uma coleção de cliente baseado em uma associação.
     *  (Não necessita de teste no momento.).
     */
    // public function testGetclientes()
    // {
    // }

    /**
     * Cria um novo cliente.
     */
    public function testCreatecliente()
    {
        $cliente = \App\Models\Clientes\Cliente::factory()->make();
        $detalhes = [
            'razao_social' => $cliente->razao_social,
            'nome_fantasia' => $cliente->nome_fantasia,
            'cpf_cnpj' => $cliente->cpf_cnpj,
            'inscricao_estadual' => $cliente->inscricao_estadual,
            'inscricao_municipal' => $cliente->inscricao_municipal,
        ];

        $retorno = $this->implementacao->createcliente($detalhes);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Atualiza um cliente.
     */
    public function testUpdatecliente()
    {
        $cliente = \App\Models\Clientes\Cliente::factory()->make();
        $detalhes = [
            'razao_social' => $cliente->razao_social,
            'nome_fantasia' => $cliente->nome_fantasia,
            'cpf_cnpj' => $cliente->cpf_cnpj,
            'inscricao_estadual' => $cliente->inscricao_estadual,
            'inscricao_municipal' => $cliente->inscricao_municipal,
        ];

        $retorno = $this->implementacao->createcliente($detalhes);

        $cliente = \App\Models\Clientes\Cliente::factory()->create();

        $this->assertIsInt($retorno->id);
    }

    /**
     * Deleta um cliente.
     */
    public function testDeletecliente()
    {
        $cliente = \App\Models\Clientes\Cliente::factory()->create();

        $retorno = $this->implementacao->deletecliente($cliente->id);

        $this->assertTrue($retorno);
    }
}
