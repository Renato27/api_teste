<?php

namespace App\Console\Commands\Automatizacoes;

use App\Services\Automatizacoes\Repositorios\CriarRepositorioService;
use Illuminate\Console\Command;

class MakeRepositoryCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:sgl_repository {repository_name} {recurso} {--model=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cria um repositório baseado no Eloquent; 
                                Criar repositório = TesteRepository;
                                Criar métodos do repositório = Teste; 
                                Criar Model = --model=Teste';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $repositoryName    = $this->argument('repository_name');
        $recurso           = $this->argument('recurso');
        $model             = $this->option('model');
        
        $repositoryCommand = new CriarRepositorioService();
        $repositoryCommand->handle($repositoryName, $recurso, $model);
    }
}
