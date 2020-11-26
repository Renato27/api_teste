<?php

namespace Tests\Feature\Repositories;

use App\Models\PagamentoMetodo\PagamentoMetodo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\PagamentoMetodoRepository;
use App\Repositories\PagamentoMetodoRepositoryImplementation;

class PagamentoMetodoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var PagamentoMetodoRepository
     */
    protected PagamentoMetodoRepository $implementacao;

    public function __construct()
    {
        $this->implementacao = new PagamentoMetodoRepositoryImplementation(new PagamentoMetodo());
        parent::__construct();
    }

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(PagamentoMetodoRepository::class);
    }

    /**
     * Retorna PagamentoMetodo baseado no ID.
     *
     */
    public function testGetPagamentoMetodo()
    {
        $pagamentoMetodo = \App\Models\PagamentoMetodo\PagamentoMetodo::factory()->create();

        $retorno = $this->implementacao->getPagamentoMetodo($pagamentoMetodo->id);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Retorna uma coleção de PagamentoMetodo baseado em uma associação.
     * (Inativo no momento, não necessário a implementação do teste)
     */
    // public function testGetPagamentoMetodos()
    // {

    // }

    /**
     * Cria um novo PagamentoMetodo
     *
     */
    public function testCreatePagamentoMetodo()
    {
        $pagamentoMetodo = \App\Models\PagamentoMetodo\PagamentoMetodo::factory()->make();
        $detalhes = [
            'nome'              => $pagamentoMetodo->nome,
            'detalhes'          => $pagamentoMetodo->detalhes
        ];

        $retorno = $this->implementacao->createPagamentoMetodo($detalhes);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Atualiza um PagamentoMetodo
     *
     */
    public function testUpdatePagamentoMetodo()
    {
        $pagamentoMetodo = \App\Models\PagamentoMetodo\PagamentoMetodo::factory()->create();
        $detalhes = [
            'nome'              => $pagamentoMetodo->nome,
            'detalhes'          => $pagamentoMetodo->detalhes
        ];

        $retorno = $this->implementacao->updatePagamentoMetodo($pagamentoMetodo->id, $detalhes);

        $this->assertEquals($pagamentoMetodo->id, $retorno->id);
    }

    /**
     * Deleta um PagamentoMetodo
     *
     */
    public function testDeletePagamentoMetodo()
    {
        $pagamentoMetodo = \App\Models\PagamentoMetodo\PagamentoMetodo::factory()->create();

        $retorno = $this->implementacao->deletePagamentoMetodo($pagamentoMetodo->id);

        $this->assertDeleted($pagamentoMetodo, [$retorno]);

    }
}
