<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\PatrimonioAlugado\PatrimonioAlugado;

class PatrimonioAlugadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alugueis = DB::connection('mysql2')->table('patrimonio_alugados')->get();

        foreach($alugueis as $aluguel){

            $item = DB::connection('mysql2')->table('pedidos_definidos')->find($aluguel->pedido_item_id);

            PatrimonioAlugado::create([
                'data_entrega'  => $aluguel->data_entrega,
                'valor' => $aluguel->preco,
                'patrimonio_id' => $aluguel->patrimonio_id,
                'pedido_id'     => $aluguel->venda_id,
                'cliente_id'    => $aluguel->cliente_id,
                'contrato_id'   => !is_null($aluguel->pedido_item_id) ? $item->contrato_id : null,
                'item_pedido_id'    => $aluguel->pedido_id,
                'item_definido_id'  => $aluguel->pedido_item_id,
                'chamado_id'    => $aluguel->chamado_id,
                'endereco_id'   => $aluguel->endereco_id
            ]);
        }
    }
}
