<?php

namespace Database\Seeders;

use App\Models\EspelhoRecorrente\EspelhoRecorrente;
use App\Models\EspelhoRecorrentePatrimonio\EspelhoRecorrentePatrimonio;
use App\Models\NotaEspelho\NotaEspelho;
use App\Models\NotaEspelhoEstado\NotaEspelhoEstado;
use App\Models\NotaEspelhoPatrimonio\NotaEspelhoPatrimonio;
use Carbon\CarbonImmutable;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotaEspelhoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $espelhoRecorrentes = DB::connection('mysql2')
            ->table('espelho_recorrentes')->get();

        foreach($espelhoRecorrentes as $espelhoRecorrente){
            EspelhoRecorrente::create(
                [
                'id'        => $espelhoRecorrente->id,
                'dia_emissao' => $espelhoRecorrente->dia_emissao,
                'dia_vencimento' => $espelhoRecorrente->dia_vencimento,
                'contrato_id'  => $espelhoRecorrente->contrato_id,
                'nota_id'  => $espelhoRecorrente->nota_id,
                'anterior_nota_id'  => $espelhoRecorrente->anterior_nota_id,
                'deleted_at'    => $espelhoRecorrente->cancelado == 1 ? CarbonImmutable::now() : null
                ]
            );

            $espelhoRecorrentesPatrimonios = DB::connection('mysql2')->select('select * from espelho_recorrente_patrimonios where espelho_recorrente_id = ?', [$espelhoRecorrente->id]);

            foreach ($espelhoRecorrentesPatrimonios as $espelhoRecorrentePatrimonio) {
                EspelhoRecorrentePatrimonio::create(
                    [
                    'data_entrega' => $espelhoRecorrentePatrimonio->data_entrega,
                    'patrimonio_id'  => $espelhoRecorrentePatrimonio->patrimonio_id,
                    'espelho_recorrente_id' => $espelhoRecorrentePatrimonio->espelho_recorrente_id,
                    'pedido_id' => $espelhoRecorrentePatrimonio->venda_id,
                    'item_pedido_id' => $espelhoRecorrentePatrimonio->pedido_id,
                    'item_definido_id'   => $espelhoRecorrentePatrimonio->pedido_item_id
                    ]
                );
            }
        }

        $notaEspelhos = DB::connection('mysql2')->table('nota_espelhos')->get();

        foreach($notaEspelhos as $notaEspelho){
            NotaEspelho::create([
                'id'    => $notaEspelho->id,
                'data_emissao' => $notaEspelho->data_emissao,
                'data_vencimento' => $notaEspelho->data_vencimento,
                'periodo_inicio' => $notaEspelho->periodo_inicio,
                'periodo_fim' => $notaEspelho->periodo_fim,
                'valor' => $notaEspelho->valor,
                'nota_espelho_estado_id' => $notaEspelho->nota_espelho_estado_id,
                'cliente_id' => $notaEspelho->cliente_id,
                'contrato_id'  => $notaEspelho->contrato_id,
                'pedido_id'  => $notaEspelho->venda_id,
                'espelho_recorrente_id'  => $notaEspelho->espelho_recorrente_id
            ]);
        }

        $notaEspelhoPatrimonios = DB::connection('mysql2')->table('nota_espelho_patrimonios')->get();

        foreach($notaEspelhoPatrimonios as $notaEspelhoPatrimonio){
            NotaEspelhoPatrimonio::create([
                'periodo_inicio' => $notaEspelhoPatrimonio->periodo_inicio,
                'periodo_fim'  => $notaEspelhoPatrimonio->periodo_fim,
                'valor' => $notaEspelhoPatrimonio->valor,
                'patrimonio_id'  => $notaEspelhoPatrimonio->patrimonio_id,
                'nota_espelho_id' => $notaEspelhoPatrimonio->nota_espelho_id,
                'contrato_id' => $notaEspelhoPatrimonio->contrato_id,
                'chamado_id'  => $notaEspelhoPatrimonio->chamado_id
            ]);
        }
    }
}
