<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Models\ContatoContrato\ContatoContrato;
use App\Repositories\Contracts\ContatoContratoRepository;
use App\Repositories\ContatoContratoRepositoryImplementation;

class ContatoContratoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ContatoContratoRepository
     */
    protected ContatoContratoRepository $implementacao;

    public function __construct()
    {
        $this->implementacao = new ContatoContratoRepositoryImplementation(new ContatoContrato());
        parent::__construct();
    }

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(ContatoContratoRepository::class);
    }

    /**
     * Retorna ContatoContrato baseado no ID.
     */
    public function testGetContatoContrato()
    {
        $associacao = \App\Models\ContatoContrato\ContatoContrato::factory()->create();
        $contato = \App\Models\Contato\Contato::factory()->create();
        $contrato = \App\Models\Contratos\Contrato::factory()->create();

        $associacao->contato_id = $contato->id;
        $associacao->contrato_id = $contrato->id;
        $associacao->save();

        $retorno = $this->implementacao->getContatoContrato($contrato->id);

        $this->assertEquals($associacao->contato_id, $retorno->id);
    }

    /**
     * Retorna uma coleção de ContatoContrato baseado em uma associação.
     */
    public function testGetContratosByContato()
    {
        $associacao1 = \App\Models\ContatoContrato\ContatoContrato::factory()->create();
        $associacao2 = \App\Models\ContatoContrato\ContatoContrato::factory()->create();
        $contato = \App\Models\Contato\Contato::factory()->create();
        $contrato1 = \App\Models\Contratos\Contrato::factory()->create();
        $contrato2 = \App\Models\Contratos\Contrato::factory()->create();

        $associacao1->contato_id = $contato->id;
        $associacao1->contrato_id = $contrato1->id;
        $associacao1->save();

        $associacao2->contato_id = $contato->id;
        $associacao2->contrato_id = $contrato2->id;
        $associacao2->save();

        $retorno = $this->implementacao->getContratosByContato($contato->id);

        $this->assertCount(2, $retorno);
    }

    /**
     * Cria um novo ContatoContrato.
     */
    public function testCreateContatoContrato()
    {
        $associacao = \App\Models\ContatoContrato\ContatoContrato::factory()->make();
        $contato = \App\Models\Contato\Contato::factory()->create();
        $contrato = \App\Models\Contratos\Contrato::factory()->create();
        $detalhes = [
            'contato_id' => $contato->id,
            'contrato_id' => $contrato->id,
        ];

        $retorno = $this->implementacao->createContatoContrato($detalhes);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Atualiza um ContatoContrato.
     */
    public function testUpdateContatoContrato()
    {
        $associacao = \App\Models\ContatoContrato\ContatoContrato::factory()->make();
        $contato = \App\Models\Contato\Contato::factory()->create();
        $contrato = \App\Models\Contratos\Contrato::factory()->create();
        $detalhes = [
            'contato_id' => $contato->id,
            'contrato_id' => $contrato->id,
        ];

        $associacao->contato_id = $contato->id;
        $associacao->contrato_id = $contrato->id;
        $associacao->save();

        $retorno = $this->implementacao->updateContatoContrato($associacao->id, $detalhes);

        $this->assertEquals($associacao->id, $retorno->id);
    }

    /**
     * Deleta um ContatoContrato.
     */
    public function testDeleteContatoContrato()
    {
        $associacao = \App\Models\ContatoContrato\ContatoContrato::factory()->create();

        $retorno = $this->implementacao->deleteContatoContrato($associacao->id);

        $this->assertDeleted($associacao, [$retorno]);
    }
}
