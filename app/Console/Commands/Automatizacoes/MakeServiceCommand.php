<?php

namespace App\Console\Commands\Automatizacoes;

use App\Services\Automatizacoes\Servicos\CriarServicoService;
use Illuminate\Console\Command;

class MakeServiceCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:sgl_service {referencia_service} {acao_service} {service_name} {[model]} {[repository]}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cria um serviço e sua implentação';

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
        $referencia = $this->argument('referencia_service');
        $acao       = $this->argument('acao_service');
        $service    = $this->argument('service_name');
        $model      = $this->argument(['model']);
        $repository = $this->argument(['repository']);

        $serviceCommand = new CriarServicoService();
        $serviceCommand->handle($referencia, $acao, $service, $model, $repository);


    }
}
