<?php

namespace Database\Seeders;

use App\Models\Entrega\Entrega;
use App\Models\Expedicao\Expedicao;
use App\Models\ExpedicaoTipo\ExpedicaoTipo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExpedicaoTipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ExpedicaoTipo::create([
            'nome' => 'Entrega'
        ]);
        ExpedicaoTipo::create([
            'nome' => 'Retirada'
        ]);

        $expedicoes = DB::connection('mysql2')->table('expedicoes')->get();

        foreach($expedicoes as $expedicao){
            $venda = DB::connection('mysql2')->table('vendas')->whereIdvendas($expedicao->vendas_idvendas)->first();

            $expedicao1 = Expedicao::create([
                'id'    => $expedicao->idexpedicoes,
                'pedido_id' => isset($venda->idvendas) ? $expedicao->vendas_idvendas : null,
                'expedicao_estado_id' => null,
                'expedicao_tipo_id' => $expedicao->tipoexpedicao_idtipoexpedicao,
                'usuario_id' => $expedicao->usuarios_idusuarios,
                'chamado_id' => $expedicao->chamados_idchamados,
                'created_at' => $expedicao->created
            ]);

            if(!is_null($expedicao1->pedido_id) && $expedicao1->pedido->status_pedido_id == 4){
                    $expedicao1->expedicao_estado_id = 7;
                    $expedicao1->save();
            }else{
                    $expedicao1->expedicao_estado_id = $expedicao->estadoexpedicao_idestadoexpedicao;
                    $expedicao1->save();
            }

            $entrega = Entrega::where('chamado_id', $expedicao1->chamado_id)->first();

            if(isset($entrega->id)){
                $entrega->expedicao_id = $expedicao1->id;
                $entrega->save();
            }
        }
    }
}
