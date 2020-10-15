<?php 

namespace App\Services\Automatizacoes\Repositorios;

use App\Services\Automatizacoes\Repositorios\Abstracts\CriarRepositorioServiceAbstract;

final class CriarRepositorioService extends CriarRepositorioServiceAbstract
{
    /**
     * Processa a criação de um repositório.
     *
     * @param string $repositorio
     * @return boolean
     */
    public function handle(string $repositorio, string $recurso, ?string $caminho_model = null)
    {
        try{
            $this->repository     = $repositorio;
            $this->recurso        = $recurso;
    
            $this->verificarSeArquivoExiste(self::CAMINHO_BASE . 'app/Repositories/Contracts/' . $repositorio);
            $this->verificarSeArquivoExiste(self::CAMINHO_BASE . 'app/Repositories/' . $repositorio . 'Implementation');
            $this->verificarSeArquivoExiste(self::CAMINHO_BASE . 'tests/Feature/Repositories/' . $repositorio . 'Test');
    
            if(!is_null($caminho_model)){
                $this->verificarSeArquivoExiste(
                    self::CAMINHO_BASE . 'app/Models/' . $caminho_model . "/" . $recurso
                );
            }
            
            $this->criarInterface();
            $this->criarImplementacao();
            $this->criarTeste();
    
            if(!is_null($caminho_model)){
                $comando = "@php artisan make:model " . $caminho_model . "/" . $recurso . " -mf";
                echo shell_exec($comando);
            }

        }catch(\Exception $e){
            print($e->getMessage());
        }
    }
}