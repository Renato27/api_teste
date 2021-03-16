<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Automatizacoes\Servicos;

use App\Services\Automatizacoes\Servicos\Abstracts\CriarServicoServiceAbstract;

class CriarServicoService extends CriarServicoServiceAbstract
{
    /**
     * Processa a criação de um serviço.
     *
     * @param string $repositorio
     * @return bool
     */
    public function handle(string $referencia_service, string $acao_service, string $service_name, string $modelRepository)
    {
        try {
            $this->modelRepository = $modelRepository;
            $this->referencia_service = $referencia_service;
            $this->acao_service = $acao_service;
            $this->service_name = $service_name;

            $this->verificarSeArquivoExiste($this->paths['caminho_service'].'/'.$this->referencia_service.'/'.$this->acao_service.'/Contracts'.'/'.$this->service_name);
            $this->verificarSeArquivoExiste($this->paths['caminho_service'].'/'.$this->referencia_service.'/'.$this->acao_service.'/Abstracts'.'/'.$this->service_name.'Abstract');
            $this->verificarSeArquivoExiste($this->paths['caminho_service'].'/'.$this->referencia_service.'/'.$this->acao_service.'/Base'.'/'.$this->service_name.'Base');
            $this->verificarSeArquivoExiste($this->paths['caminho_service'].'/'.$this->referencia_service.'/'.$this->acao_service.'/'.$this->service_name);

            $this->criarPasta($this->paths['caminho_service'], $this->referencia_service, $this->acao_service);
            $this->criarInterface();
            $this->criarAbstract();
            $this->criarBase();
            $this->criarClient();
            $this->criarProvider();
            //$this->registerProvider();
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}
