<?php

namespace Tests\Feature\Repositories;

use App\Models\ContratoMedicaoTipo\ContratoMedicaoTipo;
use App\Repositories\Contracts\ContratoMedicaoTipoRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\ContratoMedicaoTipoRepositoryImplementation;

class ContratoMedicaoTipoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ContratoMedicaoTipoRepository
     */
    protected ContratoMedicaoTipoRepository $implementacao;

    public function __construct()
    {
        $this->implementacao = new ContratoMedicaoTipoRepositoryImplementation(new ContratoMedicaoTipo());
        parent::__construct();
    }

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(ContratoMedicaoTipoRepository::class);
    }

    /**
     * Retorna ContratoMedicaoTipo baseado no ID.
     *
     */
    public function testGetContratoMedicaoTipo()
    {
        $associacao = \App\Models\ContratoMedicaoTipo\ContratoMedicaoTipo::factory()->create();
        $contrato = \App\Models\Contratos\Contrato::factory()->create();
        $medicaoTipo = \App\Models\MedicaoTipo\MedicaoTipo::factory()->create();

        $associacao->contrato_id = $contrato->id;
        $associacao->medicao_tipo_id = $medicaoTipo->id;
        $associacao->save();

        $retorno = $this->implementacao->getContratoMedicaoTipo($contrato->id);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Retorna uma coleção de ContratoMedicaoTipo baseado em uma associação.
     *
     */
    public function testGetMedicaoTipoContratos()
    {
        $associacao1 = \App\Models\ContratoMedicaoTipo\ContratoMedicaoTipo::factory()->create();
        $associacao2 = \App\Models\ContratoMedicaoTipo\ContratoMedicaoTipo::factory()->create();
        $contrato1 = \App\Models\Contratos\Contrato::factory()->create();
        $contrato2 = \App\Models\Contratos\Contrato::factory()->create();
        $medicaoTipo = \App\Models\MedicaoTipo\MedicaoTipo::factory()->create();

        $associacao1->contrato_id = $contrato1->id;
        $associacao1->medicao_tipo_id = $medicaoTipo->id;
        $associacao1->save();

        $associacao2->contrato_id = $contrato2->id;
        $associacao2->medicao_tipo_id = $medicaoTipo->id;
        $associacao2->save();

        $retorno = $this->implementacao->getMedicaoTipoContratos($medicaoTipo->id);

        $this->assertCount(2, $retorno);

    }

    /**
     * Cria um novo ContratoMedicaoTipo
     *
     */
    public function testCreateContratoMedicaoTipo()
    {
        $associacao = \App\Models\ContratoMedicaoTipo\ContratoMedicaoTipo::factory()->make();
        $contrato = \App\Models\Contratos\Contrato::factory()->create();
        $medicaoTipo = \App\Models\MedicaoTipo\MedicaoTipo::factory()->create();
        $detalhes = [
            'contrato_id'           => $contrato->id,
            'medicao_tipo_id'       => $medicaoTipo->id
        ];

        $retorno = $this->implementacao->createContratoMedicaoTipo($detalhes);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Atualiza um ContratoMedicaoTipo
     *
     */
    public function testUpdateContratoMedicaoTipo()
    {
        $associacao = \App\Models\ContratoMedicaoTipo\ContratoMedicaoTipo::factory()->create();
        $contrato = \App\Models\Contratos\Contrato::factory()->create();
        $medicaoTipo = \App\Models\MedicaoTipo\MedicaoTipo::factory()->create();
        $detalhes = [
            'contrato_id'           => $contrato->id,
            'medicao_tipo_id'       => $medicaoTipo->id
        ];

        $retorno = $this->implementacao->updateContratoMedicaoTipo($associacao->id, $detalhes);

        $associacao->contrato_id = $contrato->id;
        $associacao->medicao_tipo_id = $medicaoTipo->id;
        $associacao->save();

        $this->assertEquals($associacao->id, $retorno->id);
    }

    /**
     * Deleta um ContratoMedicaoTipo
     *
     */
    public function testDeleteContratoMedicaoTipo()
    {
        $associacao = \App\Models\ContratoMedicaoTipo\ContratoMedicaoTipo::factory()->create();

        $retorno = $this->implementacao->deleteContratoMedicaoTipo($associacao->id);

        $this->assertDeleted($associacao, [$retorno]);
    }
}
