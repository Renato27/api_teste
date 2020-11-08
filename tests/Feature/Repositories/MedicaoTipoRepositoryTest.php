<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\MedicaoTipoRepository;

class MedicaoTipoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var MedicaoTipoRepository
     */
    protected MedicaoTipoRepository $repository;

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

    }

    /**
     * Retorna uma coleção de MedicaoTipo baseado em uma associação.
     *
     */
    public function testGetMedicaoTipos()
    {

    }

    /**
     * Cria um novo MedicaoTipo
     *
     */    
    public function testCreateMedicaoTipo()
    {

    }

    /**
     * Atualiza um MedicaoTipo
     *
     */ 
    public function testUpdateMedicaoTipo()
    {

    }

    /**
     * Deleta um MedicaoTipo
     *
     */ 
    public function testDeleteMedicaoTipo()
    {

    }
}
