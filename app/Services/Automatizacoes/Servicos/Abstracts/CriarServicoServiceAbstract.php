<?php

namespace App\Services\Automatizacoes\Servicos\Abstracts;

use App\Services\Automatizacoes\Servicos\Contracts\CriarServicoService;

abstract class CriarServicoServiceAbstract implements CriarServicoService
{
    /**
     * Nome do serviço.
     *
     * @var string
     */
    protected string $service_name;

    /**
     * Nome da pasta da ação do serviço.
     */
    protected string $acao_service;

    /**
     * Nome da pasta do serviço.
     */
    protected string $referencia_service;

    /**
     * Nome do repositório
     */
    protected string $repository;

    /**
     * Nome da model
     *
     * @var string
     */
    protected string $model;

    const CAMINHO_BASE = __DIR__ . "/../../../../../";

    /**
     * Caminhos dos arquivos.
     *
     * @var array
     */
    protected array $paths = [
        'modelo_interface'       => SELF::CAMINHO_BASE . 'resources/files/services/interface.txt',
        'modelo_implementation'  => SELF::CAMINHO_BASE . 'resources/files/services/implementation.txt',
        'modelo_base'            => SELF::CAMINHO_BASE . 'resources/files/services/base.txt',
        'modelo_client'          => SELF::CAMINHO_BASE . 'resources/files/services/client.txt',
        'modelo_test'            => SELF::CAMINHO_BASE . 'resources/files/services/test.txt',
        'modelo_provider'        => SELF::CAMINHO_BASE . 'resources/files/services/provider.txt',

        'caminho_contrato'       => SELF::CAMINHO_BASE . 'app/Services/',
        'caminho_implementacao'  => SELF::CAMINHO_BASE . 'app/Services/',
        'caminho_base'           => SELF::CAMINHO_BASE . 'app/Services/',
        'caminho_client'         => SELF::CAMINHO_BASE . 'app/Services/',
        'caminho_teste'          => SELF::CAMINHO_BASE . 'tests/Feature/Services/',
        'caminho_provider'       => SELF::CAMINHO_BASE . 'app/Providers/Services/',
    ];

    /**
     * Cria a interface.
     *
     * @return void
     */
    protected function criarInterface()
    {
        $interface = $this->abrirOuCriarArquivo($this->paths['caminho_contrato'], $this->referencia_service, $this->acao_service, $this->service_name, '.php');

        if(!$interface)
            throw new \Exception("Houve um erro ao criar a interface.");

        $conteudoInterface = $this->getConteudoArquivo($this->paths['modelo_interface']);

        if(fwrite($interface, $conteudoInterface)){
            print('A interface foi criada' . PHP_EOL);
            fclose($interface);
            return;
        };

        fclose($interface);

        dd('teste');

        throw new \Exception("Houve um erro ao associar a interface e o conteúdo.");
    }

    /**
     * Cria implementação.
     *
     * @return void
     */
    protected function criarAbstract()
    {
        $implementacao   = $this->abrirOuCriarArquivo($this->paths['caminho_implementacao'], $this->referencia_service, $this->acao_service, $this->service_name . 'Abstract', '.php');

        if(!$implementacao)
            throw new \Exception("Houve ao criar a implementação.");

        $conteudoImplementacao = $this->getConteudoArquivo($this->paths['modelo_implementation']);

        if(fwrite($implementacao, $conteudoImplementacao)){
            print('A implementação foi criada' . PHP_EOL);
            return;
        };

        fclose($implementacao);

        throw new \Exception("Houve um erro ao associar a implementação e o conteúdo.");
    }

    protected function criarBase()
    {
        $implementacao   = $this->abrirOuCriarArquivo($this->paths['caminho_base'], $this->referencia_service, $this->acao_service, $this->service_name . 'Base', '.php');

        if(!$implementacao)
            throw new \Exception("Houve ao criar a implementação.");

        $conteudoImplementacao = $this->getConteudoArquivo($this->paths['modelo_base']);

        if(fwrite($implementacao, $conteudoImplementacao)){
            print('A implementação foi criada' . PHP_EOL);
            return;
        };

        fclose($implementacao);

        throw new \Exception("Houve um erro ao associar a implementação e o conteúdo.");
    }

    protected function criarClient()
    {
        $implementacao   = $this->abrirOuCriarArquivo($this->paths['caminho_client'], $this->referencia_service, $this->acao_service, $this->service_name, '.php');

        if(!$implementacao)
            throw new \Exception("Houve ao criar a implementação.");

        $conteudoImplementacao = $this->getConteudoArquivo($this->paths['modelo_client']);

        if(fwrite($implementacao, $conteudoImplementacao)){
            print('A implementação foi criada' . PHP_EOL);
            return;
        };

        fclose($implementacao);

        throw new \Exception("Houve um erro ao associar a implementação e o conteúdo.");
    }

    /**
     * Cria o teste.
     *
     * @return void
     */
    protected function criarTeste()
    {
        $implementacao   = $this->abrirOuCriarArquivo($this->paths['caminho_teste'], $this->referencia_service, $this->acao_service, $this->service_name . 'Test', '.php');

        if(!$implementacao)
            throw new \Exception("Houve erro ao criar o teste.");

        $conteudoImplementacao = $this->getConteudoArquivo($this->paths['modelo_test']);

        if(fwrite($implementacao, $conteudoImplementacao)){
            print('O teste foi criado.'  . PHP_EOL);
            return;
        };

        fclose($implementacao);

        throw new \Exception("Houve um erro ao associar test e o conteúdo.");
    }

    /**
     * Abre ou cria um novo arquivo.
     *
     * @param string $caminho
     * @param string $nome
     * @param string $extensao
     * @return void
     */
    private function abrirOuCriarArquivo(string $caminho, string $referencia_service, string $acao_service, string $service_name,  string $extensao = '.php')
    {

        return fopen($caminho . $referencia_service . '/' . $acao_service . '/' . $service_name . $extensao, 'x');
    }

    /**
     * Retorna o conteúdo de um arquivo.
     *
     * @param string $caminho
     * @return string
     */
    private function getConteudoArquivo(string $caminho, bool $provider = false)
    {
        $conteudo = file_get_contents($caminho);

        if(!$conteudo)
            throw new \Exception("O conteúdo do arquivo " . $caminho . " não existe.");

        $string = str_replace('{repository}', $this->repository, $conteudo);
        $string = str_replace('{model}', $this->model, $string);


        return $string;
    }

    /**
     * Verificar se arquivo existe.
     *
     * @param string $caminhoArquivo
     * @return void
     */
    public function verificarSeArquivoExiste(string $caminhoArquivo, ?string $extensao = '.php')
    {

        $retorno = file_exists($caminhoArquivo . $extensao);

        if($retorno)
            throw new \Exception("O arquivo já existe: " . $caminhoArquivo . $extensao);
    }
}
