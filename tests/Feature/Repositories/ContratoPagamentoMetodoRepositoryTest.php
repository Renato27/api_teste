<?php

namespace Tests\Feature\Repositories;

use App\Models\ContratoPagamentoMetodo\ContratoPagamentoMetodo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\ContratoPagamentoMetodoRepository;
use App\Repositories\ContratoPagamentoMetodoRepositoryImplementation;

class ContratoPagamentoMetodoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ContratoPagamentoMetodoRepository
     */
    protected ContratoPagamentoMetodoRepository $implementacao;

    public function __construct()
    {
        $this->implementacao = new ContratoPagamentoMetodoRepositoryImplementation(new ContratoPagamentoMetodo());
        parent::__construct();
    }

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(ContratoPagamentoMetodoRepository::class);
    }

    /**
     * Retorna ContratoPagamentoMetodo baseado no ID.
     *
     */
    public function testGetContratoPagamentoMetodo()
    {
        $contrato = \App\Models\Contratos\Contrato::factory()->create();
        $pagamentoMetodo = \App\Models\PagamentoMetodo\PagamentoMetodo::factory()->create();
        $associacao = \App\Models\ContratoPagamentoMetodo\ContratoPagamentoMetodo::factory()->create();

        $associacao->contrato_id = $contrato->id;
        $associacao->pagamento_metodo_id = $pagamentoMetodo->id;
        $associacao->save();

        $retorno = $this->implementacao->getContratoPagamentoMetodo($contrato->id);

        $this->assertEquals($associacao->id, $retorno->id);
    }

    /**
     * Retorna uma coleção de ContratoPagamentoMetodo baseado em uma associação.
     *
     */
    public function testGetContratoPagamentoMetodos()
    {
        $contrato1 = \App\Models\Contratos\Contrato::factory()->create();
        $contrato2 = \App\Models\Contratos\Contrato::factory()->create();
        $pagamentoMetodo = \App\Models\PagamentoMetodo\PagamentoMetodo::factory()->create();
        $associacao1 = \App\Models\ContratoPagamentoMetodo\ContratoPagamentoMetodo::factory()->create();
        $associacao2 = \App\Models\ContratoPagamentoMetodo\ContratoPagamentoMetodo::factory()->create();

        $associacao1->contrato_id = $contrato1->id;
        $associacao1->pagamento_metodo_id = $pagamentoMetodo->id;
        $associacao1->save();

        $associacao2->contrato_id = $contrato2->id;
        $associacao2->pagamento_metodo_id = $pagamentoMetodo->id;
        $associacao2->save();

        $retorno = $this->implementacao->getPagamentoMetodoContratos($pagamentoMetodo->id);

        $this->assertCount(2, $retorno);
    }

    /**
     * Cria um novo ContratoPagamentoMetodo
     *
     */
    public function testCreateContratoPagamentoMetodo()
    {
        $contratoPagamentoMetodo = \App\Models\ContratoPagamentoMetodo\ContratoPagamentoMetodo::factory()->make();
        $pagamentoMetodo = \App\Models\PagamentoMetodo\PagamentoMetodo::factory()->create();
        $contrato = \App\Models\Contratos\Contrato::factory()->create();
        $detalhes = [
            'contrato_id'          => $contrato->id,
            'pagamento_metodo_id'  => $pagamentoMetodo->id
        ];

        $retorno = $this->implementacao->createContratoPagamentoMetodo($detalhes);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Atualiza um ContratoPagamentoMetodo
     *
     */
    public function testUpdateContratoPagamentoMetodo()
    {
        $contratoPagamentoMetodo = \App\Models\ContratoPagamentoMetodo\ContratoPagamentoMetodo::factory()->create();
        $pagamentoMetodo = \App\Models\PagamentoMetodo\PagamentoMetodo::factory()->create();
        $contrato = \App\Models\Contratos\Contrato::factory()->create();
        $detalhes = [
            'contrato_id'          => $contrato->id,
            'pagamento_metodo_id'  => $pagamentoMetodo->id
        ];

        $retorno = $this->implementacao->updateContratoPagamentoMetodo($contratoPagamentoMetodo->id, $detalhes);

        $this->assertIsInt($contratoPagamentoMetodo->id, $retorno->id);
    }

    /**
     * Deleta um ContratoPagamentoMetodo
     *
     */
    public function testDeleteContratoPagamentoMetodo()
    {
        $contratoPagamentoMetodo = \App\Models\ContratoPagamentoMetodo\ContratoPagamentoMetodo::factory()->create();

        $retorno = $this->implementacao->deleteContratoPagamentoMetodo($contratoPagamentoMetodo->id);

        $this->assertDeleted($contratoPagamentoMetodo, [$retorno]);
    }
}
