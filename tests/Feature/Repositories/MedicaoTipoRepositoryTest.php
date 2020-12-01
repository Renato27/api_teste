<?php

namespace Tests\Feature\Repositories;

use App\Models\MedicaoTipo\MedicaoTipo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\MedicaoTipoRepository;
use App\Repositories\MedicaoTipoRepositoryImplementation;

class MedicaoTipoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var MedicaoTipoRepository
     */
    protected MedicaoTipoRepository $implementacao;

    public function __construct()
    {
        $this->implementacao = new MedicaoTipoRepositoryImplementation(new MedicaoTipo());
        parent::__construct();
    }

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(MedicaoTipoRepository::class);
    }

    /**
     * Retorna MedicaoTipo baseado no ID.
     *
     */
    public function testGetMedicaoTipo()
    {
        $medicaoTipo = \App\Models\MedicaoTipo\MedicaoTipo::factory()->create();

        $retorno = $this->implementacao->getMedicaoTipo($medicaoTipo->id);

        $this->assertIsInt($medicaoTipo->id);
    }

    /**
     * Retorna uma coleção de MedicaoTipo baseado em uma associação.
     *  (Inativo, não necessário a implementação do teste até o atual momento)
     */
    // public function testGetMedicaoTipos()
    // {

    // }

    /**
     * Cria um novo MedicaoTipo
     *
     */
    public function testCreateMedicaoTipo()
    {
        $medicaoTipo = \App\Models\MedicaoTipo\MedicaoTipo::factory()->make();
        $detalhes = [
            'nome'          => $medicaoTipo->nome
        ];

        $retorno = $this->implementacao->createMedicaoTipo($detalhes);

        $this->assertEquals($medicaoTipo->id ,$retorno->Id);
    }

    /**
     * Atualiza um MedicaoTipo
     *
     */
    public function testUpdateMedicaoTipo()
    {
        $medicaoTipo = \App\Models\MedicaoTipo\MedicaoTipo::factory()->create();
        $detalhes = [
            'nome'          => $medicaoTipo->nome
        ];

        $retorno = $this->implementacao->updateMedicaoTipo($medicaoTipo->id, $detalhes);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Deleta um MedicaoTipo
     *
     */
    public function testDeleteMedicaoTipo()
    {
        $medicaoTipo = \App\Models\MedicaoTipo\MedicaoTipo::factory()->create();

        $retorno = $this->implementacao->deleteMedicaoTipo($medicaoTipo->id);

        $this->assertDeleted($medicaoTipo, [$retorno]);

    }
}
