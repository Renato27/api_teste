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
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    protected $espelho_recorrente_repository;

    protected $espelho_recorrente_patrimonio_repository;

    protected $nota_patrimonio_repository;

    protected $nota_espelho_repository;

    protected $nota_espelho_patrimonio_repository;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->espelho_recorrente_repository = app(EspelhoRecorrenteRepository::class);
        $this->espelho_recorrente_patrimonio_repository = app(EspelhoRecorrentePatrimonioRepository::class);
        $this->nota_patrimonio_repository = app(NotaPatrimonioRepository::class);
        $this->nota_espelho_repository = app(NotaEspelhoRepository::class);
        $this->nota_espelho_patrimonio_repository = app(NotaEspelhoPatrimonioRepository::class);

        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->createEspelho();

        return 0;
    }

    private function getEspelhos() : ?Collection
    {
        return $this->espelho_recorrente_repository->getEspelhoRecorrenteDia();
    }

    private function createEspelho()
    {
        if(is_null($this->getEspelhos())) return null;

        foreach($this->getEspelhos() as $espelho_do_dia){

            $dados = $this->getDadosEspelho($espelho_do_dia);
            $espelho = $this->nota_espelho_repository->createNotaEspelho($dados);
            $this->associarPatrimonioEspelho($espelho);
        }
    }

    private function associarPatrimonioEspelho(NotaEspelho $nota_espelho)
    {

    }

    private function getDadosEspelho(EspelhoRecorrente $espelho_recorrente) : array
    {

        $emissao = CarbonImmutable::parse(CarbonImmutable::today()->format('Y-m-'). $espelho_recorrente->dia_emissao)->format('Y-m-d');
        $vencimento = CarbonImmutable::parse(CarbonImmutable::today()->format('Y-m-'). $espelho_recorrente->dia_vencimento)->format('Y-m-d');
        $periodo_fim = $this->getUltimoDiaMes($emissao);

        return [
            'data_emissao'              => $emissao,
            'data_vencimento'           => $vencimento,
            'periodo_inicio'            => $emissao,
            'periodo_fim'               => $periodo_fim,
            'valor'                     => 0,
            'nota_espelho_estado_id'    => NotaEspelhoEstado::PENDENTE,
            'cliente_id'                => $espelho_recorrente->contrato->cliente->id,
            'contrato_id'               => $espelho_recorrente->contrato,
            'pedido_id'                 => null,
            'espelho_recorrente_id'     => $espelho_recorrente->id
        ];
    }

     /**
     * Retorna o último dia do mês.
     *
     * @param string $data
     * @return String
     */
    private function getUltimoDiaMes(string $data) : String
    {
        $inicio = CarbonImmutable::parse($data);

        if($inicio->format('d') == 1){

            return $inicio->endOfMonth()->format('Y-m-d');

        }else if(($inicio->format('d') == 29 || $inicio->format('d') == 30 || $inicio->format('d') == 31) && $inicio->addMonthNoOverflow()->format('m') == 2){

            return $inicio->addMonthNoOverflow()->endOfMonth()->format('Y-m-d');

        }

        return $inicio->addMonth()->subDay();
    }
}
