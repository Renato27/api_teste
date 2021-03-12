<?php

namespace App\Console\Commands\Automatizacoes;

use App\Services\NotaEspelho\GerarAutomaticoMedicaoNotaEspelho\Contracts\GerarAutomaticoMedicaoNotaEspelhoService;
use Illuminate\Console\Command;

class GerarEspelhosComMedicao extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sgl:gerar_espelho_com_medicao';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Undocumented variable
     *
     * @var GerarAutomaticoMedicaoNotaEspelhoService
     */
    protected GerarAutomaticoMedicaoNotaEspelhoService $gerarEspelhoComMedicao;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->gerarEspelhoComMedicao = app(GerarAutomaticoMedicaoNotaEspelhoService::class);

        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->gerarEspelhoComMedicao->handle();

        return 0;
    }
}
