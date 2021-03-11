<?php

namespace App\Console\Commands\Automatizacoes;

use App\Models\EspelhoRecorrente\EspelhoRecorrente;
use App\Models\NotaEspelho\NotaEspelho;
use App\Models\NotaEspelhoEstado\NotaEspelhoEstado;
use App\Repositories\Contracts\EspelhoRecorrentePatrimonioRepository;
use App\Repositories\Contracts\EspelhoRecorrenteRepository;
use App\Repositories\Contracts\NotaEspelhoPatrimonioRepository;
use App\Repositories\Contracts\NotaEspelhoRepository;
use App\Repositories\Contracts\NotaPatrimonioRepository;
use App\Services\NotaEspelho\GerarAutomaticoNotaEspelho\Contracts\GerarAutomaticoNotaEspelhoService;
use Carbon\CarbonImmutable;
use Illuminate\Console\Command;
use Illuminate\Support\Collection;

class GerarEspelhosSemMedicao extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sgl:gerar_espelho_sem_medicao';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Undocumented variable
     *
     * @var GerarAutomaticoNotaEspelhoService
     */
    protected GerarAutomaticoNotaEspelhoService $gerarEspelhoSemMedicao;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->gerarEspelhoSemMedicao = app(GerarAutomaticoNotaEspelhoService::class);

        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->gerarEspelhoSemMedicao->handle();

        return 0;
    }
}
