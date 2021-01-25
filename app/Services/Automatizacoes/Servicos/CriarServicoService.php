<?php

namespace App\Services\Automatizacoes\Servicos;

use App\Services\Automatizacoes\Servicos\Abstracts\CriarServicoServiceAbstract;

class CriarServicoService extends CriarServicoServiceAbstract
{
     /**
     * Processa a criação de um serviço.
     *
     * @param string $repositorio
     * @return boolean
     */
    public function handle(string $referencia_service, string $acao_service, string $service_name, array $model, array $repository)
    {
        try{

            foreach($model as $m){

                $this->model = $m;

            }

            foreach($repository as $r){

                $this->repository  = $r;
            }

            $this->referencia_service   = $referencia_service;
            $this->acao_service         = $acao_service;
            $this->service_name         = $service_name;

            // $this->verificarSeArquivoExiste(self::CAMINHO_BASE . 'app/Repositories/Contracts/' . $repositorio);
            // $this->verificarSeArquivoExiste(self::CAMINHO_BASE . 'app/Repositories/' . $repositorio . 'Implementation');
            // $this->verificarSeArquivoExiste(self::CAMINHO_BASE . 'tests/Feature/Repositories/' . $repositorio . 'Test');


            $this->criarInterface();
            $this->criarAbstract();
            $this->criarBase();
            $this->criarClient();
            $this->criarTeste();

        }catch(\Exception $e){
            print($e->getMessage());
        }
    }
}
