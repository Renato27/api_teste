<?php 

namespace App\Services\Automatizacoes\Repositorios\Abstracts;

use App\Services\Automatizacoes\Repositorios\Contracts\CriarRepositorioService;

abstract class CriarRepositorioServiceAbstract implements CriarRepositorioService
{
    /**
     * Nome do repositório.
     *
     * @var string
     */
    protected string $repository;

    protected string $recurso;

    const CAMINHO_BASE = __DIR__ . "/../../../../../";

    /**
     * Caminhos dos arquivos.
     *
     * @var array
     */
    protected array $paths = [
        'modelo_interface'       => SELF::CAMINHO_BASE . 'resources/files/repository/interface.txt',
        'modelo_repository'      => SELF::CAMINHO_BASE . 'resources/files/repository/implementation.txt',
        'modelo_test'            => SELF::CAMINHO_BASE . 'resources/files/repository/test.txt',
        'modelo_provider'        => SELF::CAMINHO_BASE . 'resources/files/provider/implementation.txt',

        'caminho_contrato'       => SELF::CAMINHO_BASE . 'app/Repositories/Contracts/',
        'caminho_implementacao'  => SELF::CAMINHO_BASE . 'app/Repositories/',
        'caminho_teste'          => SELF::CAMINHO_BASE . 'tests/Feature/Repositories/',
        'caminho_provider'       => SELF::CAMINHO_BASE . 'app/Providers/Repositories/',
    ];

    /**
     * Cria a interface.
     *
     * @return void
     */
    protected function criarInterface()
    {
        $interface = $this->abrirOuCriarArquivo($this->paths['caminho_contrato'], $this->repository, '.php'); 

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
    protected function criarImplementacao()
    {
        $implementacao   = $this->abrirOuCriarArquivo($this->paths['caminho_implementacao'], $this->repository, 'Implementation.php');
        
        if(!$implementacao)
            throw new \Exception("Houve ao criar a implementação.");

        $conteudoImplementacao = $this->getConteudoArquivo($this->paths['modelo_repository']);

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
        $implementacao   = $this->abrirOuCriarArquivo($this->paths['caminho_teste'], $this->repository . 'Test', '.php');
        
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
    private function abrirOuCriarArquivo(string $caminho, string $nome, string $extensao = '.php')
    {
   
        return fopen($caminho . $nome . $extensao, 'x');
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

        $string = str_replace('{repository_name}', $this->repository, $conteudo);
        $string = str_replace('{recurso}', $this->recurso, $string);


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