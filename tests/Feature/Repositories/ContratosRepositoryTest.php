<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Models\Contratos\Contrato;
use App\Repositories\Contracts\ContratosRepository;
use App\Repositories\ContratosRepositoryImplementation;

class ContratosRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ContratosRepository
     */
    protected ContratosRepository $implementacao;

    public function __construct()
    {
        $this->implementacao = new ContratosRepositoryImplementation(new Contrato());
        parent::__construct();
    }

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(ContratosRepository::class);
    }

    /**
     * Retorna Contratos baseado no ID.
     */
    public function testGetContratos()
    {
        $contrato = \App\Models\Contratos\Contrato::factory()->create();

        $retorno = $this->implementacao->getContrato($contrato->id);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Retorna uma coleção de Contratos baseado em uma associação.
     *  (Não necessário de implementacao de teste).
     */
    // public function testGetContratoss()
    // {
    // }

    /**
     * Cria um novo Contratos.
     */
    public function testCreateContratos()
    {
        $contrato = \App\Models\Contratos\Contrato::factory()->make();
        $detalhes = [
            'nome' => $contrato->nome,
            'inicio' => $contrato->inicio,
            'fim' => $contrato->fim,
            'detalhes' => $contrato->detalhes,
            'detalhes_nota' => $contrato->detalhes_nota,
            'dia_emissao_nota' => $contrato->dia_emissao_nota,
            'dia_vencimento_nota' => $contrato->dia_vencimento_nota,
            'dia_periodo_inicio_nota' => $contrato->dia_periodo_inicio_nota,
            'dia_periodo_fim_nota' => $contrato->dia_periodo_fim_nota,
            'responsavel' => $contrato->responsavel,
        ];

        $retorno = $this->implementacao->createContrato($detalhes);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Atualiza um Contratos.
     */
    public function testUpdateContratos()
    {
        $contrato = \App\Models\Contratos\Contrato::factory()->create();
        $detalhes = [
            'nome' => $contrato->nome,
            'inicio' => $contrato->inicio,
            'fim' => $contrato->fim,
            'detalhes' => $contrato->detalhes,
            'detalhes_nota' => $contrato->detalhes_nota,
            'dia_emissao_nota' => $contrato->dia_emissao_nota,
            'dia_vencimento_nota' => $contrato->dia_vencimento_nota,
            'dia_periodo_inicio_nota' => $contrato->dia_periodo_inicio_nota,
            'dia_periodo_fim_nota' => $contrato->dia_periodo_fim_nota,
            'responsavel' => $contrato->responsavel,
        ];

        $retorno = $this->implementacao->updateContrato($contrato->id, $detalhes);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Deleta um Contratos.
     */
    public function testDeleteContratos()
    {
        $contrato = \App\Models\Contratos\Contrato::factory()->create();

        $retorno = $this->implementacao->deleteContrato($contrato->id);

        $this->assertDeleted($contrato, [$retorno]);
    }
}
