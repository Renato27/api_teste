<?php

namespace App\Services\Automatizacoes\Servicos\Abstracts;

use App\Services\Automatizacoes\Servicos\Contracts\CriarServicoService;

define('BASE_PATH', dirname(__FILE__) . "/../../../../../");

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
     * Nome da model
     *
     * @var string
     */
    protected string $modelRepository;

    /**
     * Caminhos dos arquivos.
     *
     * @var array
     */
    protected array $paths = [
        'modelo_interface'       => BASE_PATH . 'resources/files/services/interface.txt',
        'modelo_implementation'  => BASE_PATH . 'resources/files/services/implementation.txt',
        'modelo_base'            => BASE_PATH . 'resources/files/services/base.txt',
        'modelo_client'          => BASE_PATH . 'resources/files/services/client.txt',
        'modelo_test'            => BASE_PATH . 'resources/files/services/test.txt',
        'modelo_provider'        => BASE_PATH . 'resources/files/services/provider.txt',

        'caminho_service'        => BASE_PATH . 'app/Services/',
        'caminho_teste'          => BASE_PATH . 'tests/Feature/Services/',
        //'caminho_provider'       => BASE_PATH . 'app/Providers/Services/',
        //'caminho_provider_register'       => BASE_PATH . 'config/app.php',
    ];


    /**
     * Cria a interface.
     *
     * @return void
     */
    protected function criarInterface()
    {
        $interface = $this->abrirOuCriarArquivo($this->paths['caminho_service'], $this->referencia_service, $this->acao_service . '/Contracts', $this->service_name, '.php');

        if(!$interface)
            throw new \Exception("Houve um erro ao criar a interface.");

        $conteudoInterface = $this->getConteudoArquivo($this->paths['modelo_interface']);

        if(fwrite($interface, $conteudoInterface)){
            print('A interface foi criada' . PHP_EOL);
            fclose($interface);
            return;
        };

        fclose($interface);

        throw new \Exception("Houve um erro ao associar a interface e o conteúdo.");
    }

    /**
     * Cria implementação.
     *
     * @return void
     */
    protected function criarAbstract()
    {
        $implementacao = $this->abrirOuCriarArquivo($this->paths['caminho_service'], $this->referencia_service, $this->acao_service . '/Abstracts', $this->service_name . 'Abstract', '.php');

        if(!$implementacao)
            throw new \Exception("Houve ao criar a implementação.");

        $conteudoImplementacao = $this->getConteudoArquivo($this->paths['modelo_implementation']);

        if(fwrite($implementacao, $conteudoImplementacao)){
            print('A abstração foi criada' . PHP_EOL);
            return;
        };

        fclose($implementacao);

        throw new \Exception("Houve um erro ao associar a implementação e o conteúdo.");
    }

    protected function criarBase()
    {

        $implementacao = $this->abrirOuCriarArquivo($this->paths['caminho_service'], $this->referencia_service, $this->acao_service . '/Base', $this->service_name . 'Base', '.php');

        if(!$implementacao)
            throw new \Exception("Houve ao criar a implementação.");

        $conteudoImplementacao = $this->getConteudoArquivo($this->paths['modelo_base']);

        if(fwrite($implementacao, $conteudoImplementacao)){
            print('A base foi criada' . PHP_EOL);
            return;
        };

        fclose($implementacao);

        throw new \Exception("Houve um erro ao associar a implementação e o conteúdo.");
    }

    protected function criarClient()
    {

        $implementacao = $this->abrirOuCriarArquivo($this->paths['caminho_service'], $this->referencia_service, $this->acao_service, $this->service_name, '.php');

        if(!$implementacao)
            throw new \Exception("Houve ao criar a implementação.");

        $conteudoImplementacao = $this->getConteudoArquivo($this->paths['modelo_client']);

        if(fwrite($implementacao, $conteudoImplementacao)){
            print('O client foi criado' . PHP_EOL);
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

    protected function criarProvider()
    {

        $comando = "@php artisan make:provider " . 'Services/' . $this->referencia_service . '/' . $this->service_name . 'Provider';
        echo shell_exec($comando);

        // $implementacao   = $this->abrirOuCriarArquivo($this->paths['caminho_provider'], $this->referencia_service, $this->acao_service, $this->service_name . 'Provider', '.php');

        // if(!$implementacao)
        //     throw new \Exception("Houve erro ao criar o teste.");

        // $conteudoImplementacao = $this->getConteudoArquivo($this->paths['modelo_provider']);

        // if(fwrite($implementacao, $conteudoImplementacao)){
        //     print('O provider foi criado.'  . PHP_EOL);
        //     return;
        // };

        // fclose($implementacao);

        // throw new \Exception("Houve um erro ao associar test e o conteúdo.");
    }

    protected function registerProvider()
    {
        $appProvider = fopen($this->paths['caminho_provider_register'], 'r+');

        if($appProvider){

            while(!feof($appProvider)){

                $buffer = fgets($appProvider);
                if(strpos($buffer, "novos") !== false){
                    nl2br($buffer . "\n" . fwrite($appProvider, "App\Providers\Services" . "\\" . $this->referencia_service . "\\" .$this->service_name . "Provider::class, \n"));
                }

            }

            fclose($appProvider);
        }


        return false;
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
        return fopen($caminho . '/' . $referencia_service . '/' . $acao_service . '/' . $service_name . $extensao, 'x');
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

        $string = str_replace('{referencia_service}', $this->referencia_service, $conteudo);
        $string = str_replace('{acao_service}', $this->acao_service, $string);
        $string = str_replace('{service_name}', $this->service_name, $string);
        $string = str_replace('{modelRepository}', $this->modelRepository, $string);

        return $string;
    }

    public function criarPasta(string $caminho, string $referencia_service, string $acao_service)
    {
        mkdir($caminho . $referencia_service . '/' . $acao_service . '/Contracts', 0755, true);
        mkdir($caminho . $referencia_service . '/' . $acao_service . '/Abstracts', 0755, true);
        mkdir($caminho . $referencia_service . '/' . $acao_service . '/Base', 0755, true);
        mkdir($this->paths['caminho_provider'] . $referencia_service . '/' . $acao_service, 0755, true);
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
