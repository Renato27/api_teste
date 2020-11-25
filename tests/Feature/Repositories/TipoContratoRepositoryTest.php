<?php

namespace Tests\Feature\Repositories;

use App\Models\TipoContrato\TipoContrato;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\TipoContratoRepository;
use App\Repositories\TipoContratoRepositoryImplementation;
use FactoryClass;
use Faker\Factory;

class TipoContratoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var TipoContratoRepository
     */
    protected TipoContratoRepository $implementacao;

    public function __construct()
    {
        $this->implementacao = new TipoContratoRepositoryImplementation(new TipoContrato());
        parent::__construct();
    }

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(TipoContratoRepository::class);
    }

    /**
     * Retorna TipoContrato baseado no ID.
     *
     */
    public function testGetTipoContrato()
    {
        $contrato = \App\Models\Contratos\Contrato::factory()->create();
        $contratoTipo1 = \App\Models\ContratoTipo\ContratoTipo::factory()->create();
        $contratoTipo2 = \App\Models\ContratoTipo\ContratoTipo::factory()->create();
        $associacao1 = \App\Models\TipoContrato\TipoContrato::factory()->create();
        $associacao2 = \App\Models\TipoContrato\TipoContrato::factory()->create();

        $associacao1->contrato_id = $contrato->id;
        $associacao1->contrato_tipo_id = $contratoTipo1->id;
        $associacao1->save();

        $associacao2->contrato_id = $contrato->id;
        $associacao2->contrato_tipo_id = $contratoTipo2->id;
        $associacao2->save();

        $retorno = $this->implementacao->getTipoContrato($contrato->id);

        $this->assertIsInt(2, $retorno);
    }

    /**
     * Retorna uma coleção de TipoContrato baseado em uma associação.
     *
     */
    public function testGetTipoContratos()
    {
        $contrato = \App\Models\Contratos\Contrato::factory()->create();
        $contratoTipo1 = \App\Models\ContratoTipo\ContratoTipo::factory()->create();
        $contratoTipo2 = \App\Models\ContratoTipo\ContratoTipo::factory()->create();
        $associacao1 = \App\Models\TipoContrato\TipoContrato::factory()->create();
        $associacao2 = \App\Models\TipoContrato\TipoContrato::factory()->create();

        $associacao1->contrato_id = $contrato->id;
        $associacao1->contrato_tipo_id = $contratoTipo1->id;
        $associacao1->save();

        $associacao2->contrato_id = $contrato->id;
        $associacao2->contrato_tipo_id = $contratoTipo2->id;
        $associacao2->save();

        $retorno = $this->implementacao->getTipoContratos($contrato->id);

        $this->assertIsInt(2, $retorno);
    }

    /**
     * Cria um novo TipoContrato
     *
     */
    public function testCreateTipoContrato()
    {
        $tipoContrato = \App\Models\TipoContrato\TipoContrato::factory()->make();
        $contrato = \App\Models\Contratos\Contrato::factory()->create();
        $contratoTipo = \App\Models\ContratoTipo\ContratoTipo::factory()->create();

        $detalhes = [
            'contrato_id'           => $contrato->id,
            'contrato_tipo_id'      => $contratoTipo->id
        ];

        $retorno = $this->implementacao->createTipoContrato($detalhes);

        $tipoContrato->contrato_id = $contrato->id;
        $tipoContrato->contrato_tipo_id = $contratoTipo->id;
        $tipoContrato->save();

        $this->assertEquals($tipoContrato->id-1, $retorno->id);
    }

    /**
     * Atualiza um TipoContrato
     *
     */
    public function testUpdateTipoContrato()
    {
        $tipoContrato = \App\Models\TipoContrato\TipoContrato::factory()->create();
        $contrato = \App\Models\Contratos\Contrato::factory()->create();
        $contratoTipo = \App\Models\ContratoTipo\ContratoTipo::factory()->create();

        $detalhes = [
            'contrato_id'           => $contrato->id,
            'contrato_tipo_id'      => $contratoTipo->id
        ];

        $retorno = $this->implementacao->updateTipoContrato($tipoContrato->id, $detalhes);

        $this->assertEquals($tipoContrato->id, $retorno->id);
    }

    /**
     * Deleta um TipoContrato
     *
     */
    public function testDeleteTipoContrato()
    {
        $tipoContrato = \App\Models\TipoContrato\TipoContrato::factory()->create();
        $contrato = \App\Models\Contratos\Contrato::factory()->create();
        $contratoTipo = \App\Models\ContratoTipo\ContratoTipo::factory()->create();


        $tipoContrato->contrato_id = $contrato->id;
        $tipoContrato->contrato_tipo_id = $contratoTipo->id;
        $tipoContrato->save();

        $retorno = $this->implementacao->deleteTipoContrato($tipoContrato->id);

        $this->assertTrue($retorno);
    }
}
