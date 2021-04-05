<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Models\ContratoTipo\ContratoTipo;
use App\Repositories\Contracts\ContratoTipoRepository;
use App\Repositories\ContratoTipoRepositoryImplementation;

class ContratoTipoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ContratoTipoRepository
     */
    protected ContratoTipoRepository $implementacao;

    public function __construct()
    {
        $this->implementacao = new ContratoTipoRepositoryImplementation(new ContratoTipo());
        parent::__construct();
    }

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(ContratoTipoRepository::class);
    }

    /**
     * Retorna ContratoTipo baseado no ID.
     *  (inativo, não necessário a iplementação de teste).
     */
    // public function testGetContratoTipo()
    // {
    //     $contratoTipo = \App\Models\ContratoTipo\ContratoTipo::factory()->create();

    //     $retorno = $this->implementacao->getContratoTipo($contratoTipo->id);

    //     $this->assertIsInt($retorno->id);
    // }

    /**
     * Retorna uma coleção de ContratoTipo baseado em uma associação.
     *  (inativo, não necessário a iplementação de teste).
     */
    // public function testGetContratoTipos()
    // {
    // }

    /**
     * Cria um novo ContratoTipo.
     */
    public function testCreateContratoTipo()
    {
        $contratoTipo = \App\Models\ContratoTipo\ContratoTipo::factory()->make();

        $detalhes = [
            'nome' => $contratoTipo->nome,
        ];

        $retorno = $this->implementacao->createContratoTipo($detalhes);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Atualiza um ContratoTipo.
     */
    public function testUpdateContratoTipo()
    {
        $contratoTipo = \App\Models\ContratoTipo\ContratoTipo::factory()->create();

        $detalhes = [
            'nome' => $contratoTipo->nome,
        ];

        $retorno = $this->implementacao->updateContratoTipo($contratoTipo->id, $detalhes);

        $this->assertEquals($contratoTipo->id, $retorno->id);
    }

    /**
     * Deleta um ContratoTipo.
     */
    public function testDeleteContratoTipo()
    {
        $contratoTipo = \App\Models\ContratoTipo\ContratoTipo::factory()->create();

        $retorno = $this->implementacao->deleteContratoTipo($contratoTipo->id);

        $this->assertTrue($retorno);
    }
}
