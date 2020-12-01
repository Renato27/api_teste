<?php

namespace Tests\Feature\Repositories;

use App\Models\FuncionarioEndereco\FuncionarioEndereco;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\FuncionarioEnderecoRepository;
use App\Repositories\FuncionarioEnderecoRepositoryImplementation;

class FuncionarioEnderecoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var FuncionarioEnderecoRepository
     */
    protected FuncionarioEnderecoRepository $implementacao;

    public function __construct()
    {
        $this->implementacao = new FuncionarioEnderecoRepositoryImplementation(new FuncionarioEndereco());
        parent::__construct();
    }

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(FuncionarioEnderecoRepository::class);
    }

    /**
     * Retorna FuncionarioEndereco baseado no ID.
     *
     */
    public function testGetFuncionarioEndereco()
    {
        $funcionario = \App\Models\Funcionario\Funcionario::factory()->create();
        $enderecoFuncionario = \App\Models\EnderecoFuncionario\EnderecoFuncionario::factory()->create();
        $associacao = \App\Models\FuncionarioEndereco\FuncionarioEndereco::factory()->create();

        $associacao->funcionario_id = $funcionario->id;
        $associacao->endereco_funcionario_id = $enderecoFuncionario->id;
        $associacao->save();

        $retorno = $this->implementacao->getFuncionarioEndereco($funcionario->id);

        $this->assertEquals($associacao->id, $retorno->id);
    }

    /**
     * Retorna uma coleção de FuncionarioEndereco baseado em uma associação.
     *  (Inativa, não necessário realizar o teste)
     */
    // public function testGetFuncionarioEnderecos()
    // {

    // }

    /**
     * Cria um novo FuncionarioEndereco
     *
     */
    public function testCreateFuncionarioEndereco()
    {
        $associacao = \App\Models\FuncionarioEndereco\FuncionarioEndereco::factory()->make();
        $funcionario = \App\Models\Funcionario\Funcionario::factory()->create();
        $enderecoFuncionario = \App\Models\EnderecoFuncionario\EnderecoFuncionario::factory()->create();
        $detalhes = [
            'funcionario_id'            => $funcionario->id,
            'endereco_funcionario_id'   => $enderecoFuncionario->id
        ];

        $retorno = $this->implementacao->createFuncionarioEndereco($detalhes);

        $associacao->funcionario_id = $funcionario->id;
        $associacao->endereco_funcionario_id = $enderecoFuncionario->id;
        $associacao->save();

        $this->assertEquals($associacao->id-1, $retorno->id);
    }

    /**
     * Atualiza um FuncionarioEndereco
     *
     */
    public function testUpdateFuncionarioEndereco()
    {
        $associacao = \App\Models\FuncionarioEndereco\FuncionarioEndereco::factory()->make();
        $funcionario = \App\Models\Funcionario\Funcionario::factory()->create();
        $enderecoFuncionario = \App\Models\EnderecoFuncionario\EnderecoFuncionario::factory()->create();
        $detalhes = [
            'funcionario_id'            => $funcionario->id,
            'endereco_funcionario_id'   => $enderecoFuncionario->id
        ];

        $associacao = \App\Models\FuncionarioEndereco\FuncionarioEndereco::factory()->create();

        $retorno = $this->implementacao->updateFuncionarioEndereco($associacao->id, $detalhes);

        $associacao->funcionario_id = $funcionario->id;
        $associacao->endereco_funcionario_id = $enderecoFuncionario->id;
        $associacao->save();

        $this->assertEquals($associacao->id, $retorno->id);
    }

    /**
     * Deleta um FuncionarioEndereco
     *
     */
    public function testDeleteFuncionarioEndereco()
    {
        $funcionario = \App\Models\Funcionario\Funcionario::factory()->create();
        $enderecoFuncionario = \App\Models\EnderecoFuncionario\EnderecoFuncionario::factory()->create();
        $associacao = \App\Models\FuncionarioEndereco\FuncionarioEndereco::factory()->create();

        $associacao->funcionario_id = $funcionario->id;
        $associacao->endereco_funcionario_id = $enderecoFuncionario->id;
        $associacao->save();

        $retorno = $this->implementacao->deleteFuncionarioEndereco($associacao->id);

        $this->assertDeleted($associacao, [$retorno]);

    }
}
