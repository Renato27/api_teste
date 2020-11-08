<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\ContratoMedicoTipoRepository;

class ContratoMedicoTipoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ContratoMedicoTipoRepository
     */
    protected ContratoMedicoTipoRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(ContratoMedicoTipoRepository::class);
    }

    /**
     * Retorna ContratoMedicaoTipo baseado no ID.
     *
     */
    public function testGetContratoMedicaoTipo()
    {

    }

    /**
     * Retorna uma coleção de ContratoMedicaoTipo baseado em uma associação.
     *
     */
    public function testGetContratoMedicaoTipos()
    {

    }

    /**
     * Cria um novo ContratoMedicaoTipo
     *
     */    
    public function testCreateContratoMedicaoTipo()
    {

    }

    /**
     * Atualiza um ContratoMedicaoTipo
     *
     */ 
    public function testUpdateContratoMedicaoTipo()
    {

    }

    /**
     * Deleta um ContratoMedicaoTipo
     *
     */ 
    public function testDeleteContratoMedicaoTipo()
    {

    }
}
