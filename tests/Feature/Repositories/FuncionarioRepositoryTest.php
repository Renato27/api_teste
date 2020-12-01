<?php

namespace Tests\Feature\Repositories;

use App\Models\Funcionario\Funcionario;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\FuncionarioRepository;
use App\Repositories\FuncionarioRepositoryImplementation;

class FuncionarioRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var FuncionarioRepository
     */
    protected FuncionarioRepository $implementacao;

    public function __construct()
    {
        $this->implementacao = new FuncionarioRepositoryImplementation(new Funcionario());
        parent::__construct();
    }

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(FuncionarioRepository::class);
    }

    /**
     * Retorna Funcionario baseado no ID.
     *
     */
    public function testGetFuncionario()
    {
        $funcionario = \App\Models\Funcionario\Funcionario::factory()->create();

        $retorno = $this->implementacao->getFuncionario($funcionario->id);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Retorna uma coleção de Funcionario baseado em uma associação.
     *  (Inativo, Não necessário no atual momento)
     */
    // public function testGetFuncionarios()
    // {
    // }

    /**
     * Cria um novo Funcionario
     *
     */
    public function testCreateFuncionario()
    {
        $funcionario = \App\Models\Funcionario\Funcionario::factory()->make();
        $detalhes = [
            'nome'          => $funcionario->nome,
            'cargo'         => $funcionario->cargo
        ];

        $retorno  = $this->implementacao->createFuncionario($detalhes);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Atualiza um Funcionario
     *
     */
    public function testUpdateFuncionario()
    {
        $funcionario = \App\Models\Funcionario\Funcionario::factory()->create();
        $detalhes = [
            'nome'          => $funcionario->nome,
            'cargo'         => $funcionario->cargo
        ];

        $retorno = $this->implementacao->updateFuncionario($funcionario->id, $detalhes);

        $this->assertEquals($funcionario->id, $retorno->id);
    }

    /**
     * Deleta um Funcionario
     *
     */
    public function testDeleteFuncionario()
    {
        $funcionario = \App\Models\Funcionario\Funcionario::factory()->create();

        $retorno = $this->implementacao->deleteFuncionario($funcionario->id);

        $this->assertDeleted($funcionario, [$retorno]);
    }
}
