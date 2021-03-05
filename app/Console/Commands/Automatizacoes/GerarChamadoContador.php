<?php

namespace App\Console\Commands\Automatizacoes;

use App\Models\StatusChamado\StatusChamado;
use App\Models\TipoChamado\TipoChamado;
use App\Repositories\Contracts\AberturaContadorPatrimonioRepository;
use App\Repositories\Contracts\AberturaContadorRepository;
use App\Services\Chamado\GerarChamado\Contracts\GerarChamadoService;
use Carbon\Carbon;
use Illuminate\Console\Command;

class GerarChamadoContador extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sgl:gerar_chamado_contador';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Gera os chamados de contador do dia';

    protected $abertura_contador_repository;

    protected $abertura_contador_patrimonio_repository;

    protected $gerarChamadoService;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->abertura_contador_repository = app(AberturaContadorRepository::class);
        $this->abertura_contador_patrimonio_repository = app(AberturaContadorPatrimonioRepository::class);
        $this->gerarChamadoService = app(GerarChamadoService::class);

        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $aberturas_do_dia = $this->abertura_contador_repository->getAberturasContadorDoDia();

        foreach($aberturas_do_dia as $abertura){

            $patrimonios_abertura_do_dia = $this->abertura_contador_patrimonio_repository->getAberturaContadorPatrimonios($abertura->id);

            $dados = [
                'data_acao' => Carbon::today()->format('Y-m-d'),
                'status_chamado_id' => StatusChamado::ABERTO,
                'tipo_chamado_id'   => TipoChamado::CONTADOR,
                'contato_id'        => $abertura->contato_id,
                'endereco_id'       => $abertura->endereco_id
            ];

            $this->gerarChamadoService->setDados($dados);
            $this->gerarChamadoService->setPatrimonios($patrimonios_abertura_do_dia)->handle();
        }
    }
}
