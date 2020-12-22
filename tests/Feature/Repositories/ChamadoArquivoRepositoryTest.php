<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\ChamadoArquivoRepository;

class ChamadoArquivoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ChamadoArquivoRepository
     */
    protected ChamadoArquivoRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(ChamadoArquivoRepository::class);
    }

    /**
     * Retorna ChamadoArquivo baseado no ID.
     *
     */
    public function testGetChamadoArquivo()
    {

    }

    /**
     * Retorna uma coleção de ChamadoArquivo baseado em uma associação.
     *
     */
    public function testGetChamadoArquivos()
    {

    }

    /**
     * Cria um novo ChamadoArquivo
     *
     */    
    public function testCreateChamadoArquivo()
    {

    }

    /**
     * Atualiza um ChamadoArquivo
     *
     */ 
    public function testUpdateChamadoArquivo()
    {

    }

    /**
     * Deleta um ChamadoArquivo
     *
     */ 
    public function testDeleteChamadoArquivo()
    {

    }
}
