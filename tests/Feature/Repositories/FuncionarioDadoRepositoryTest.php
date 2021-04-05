<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Models\FuncionarioDado\FuncionarioDado;
use App\Repositories\Contracts\FuncionarioDadoRepository;
use App\Repositories\FuncionarioDadoRepositoryImplementation;

class FuncionarioDadoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var FuncionarioDadoRepository
     */
    protected FuncionarioDadoRepository $implementacao;

    public function __construct()
    {
        $this->implementacao = new FuncionarioDadoRepositoryImplementation(new FuncionarioDado());
        parent::__construct();
    }

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(FuncionarioDadoRepository::class);
    }

    /**
     * Retorna FuncionarioDado baseado no ID.
     */
    public function testGetFuncionarioDado()
    {
        $funcionario = \App\Models\Funcionario\Funcionario::factory()->create();
        $dadoFuncionario = \App\Models\DadoFuncionario\DadoFuncionario::factory()->create();
        $associacao = \App\Models\FuncionarioDado\FuncionarioDado::factory()->create();

        $associacao->funcionario_id = $funcionario->id;
        $associacao->dado_funcionario_id = $dadoFuncionario->id;
        $associacao->save();

        $retorno = $this->implementacao->getFuncionarioDado($funcionario->id);

        $this->assertEquals($associacao->id, $retorno->id);
    }

    /**
     * Retorna uma coleção de FuncionarioDado baseado em uma associação.
     *  (Não necessita de implementação de teste.).
     */
    // public function testGetFuncionarioDados()
    // {
    // }

    /**
     * Cria um novo FuncionarioDado.
     */
    public function testCreateFuncionarioDado()
    {
        $funcionario = \App\Models\Funcionario\Funcionario::factory()->create();
        $dadoFuncionario = \App\Models\DadoFuncionario\DadoFuncionario::factory()->create();
        $detalhes = [
            'funcionario_id' => $funcionario->id,
            'dado_funcionario_id' => $dadoFuncionario->id,
        ];

        $retorno = $this->implementacao->createFuncionarioDado($detalhes);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Atualiza um FuncionarioDado.
     */
    public function testUpdateFuncionarioDado()
    {
        $associacao = \App\Models\FuncionarioDado\FuncionarioDado::factory()->create();
        $funcionario = \App\Models\Funcionario\Funcionario::factory()->create();
        $dadoFuncionario = \App\Models\DadoFuncionario\DadoFuncionario::factory()->create();
        $detalhes = [
            'funcionario_id' => $funcionario->id,
            'dado_funcionario_id' => $dadoFuncionario->id,
        ];

        $retorno = $this->implementacao->updateFuncionarioDado($associacao->id, $detalhes);

        $associacao->funcionario_id = $funcionario->id;
        $associacao->dado_funcionario_id = $dadoFuncionario->id;
        $associacao->save();

        $this->assertEquals($associacao->id, $retorno->id);
    }

    /**
     * Deleta um FuncionarioDado.
     */
    public function testDeleteFuncionarioDado()
    {
        $funcionarioDado = \App\Models\FuncionarioDado\FuncionarioDado::factory()->create();

        $retorno = $this->implementacao->deleteFuncionarioDado($funcionarioDado->id);

        $this->assertDeleted($funcionarioDado, [$retorno]);
    }
}
