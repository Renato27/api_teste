<?php

namespace Database\Seeders;

use App\Models\ClienteContrato\ClienteContrato;
use App\Models\ContratoItemDefinido\ContratoItemDefinido;
use App\Models\ContratoPedido\ContratoPedido;
use App\Models\ItemDefinido\ItemDefinido;
use App\Models\ItemPedido\ItemPedido;
use App\Models\Pedido\Pedido;
use App\Models\PedidoItem\PedidoItem;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vendas = DB::connection('mysql2')->table('vendas')->get();

        foreach ($vendas as $venda){
            $pedido = Pedido::create([
                'id'            => $venda->idvendas,
                'data_entrega'  => $venda->dataEntrega,
                'data_retirada' => null,
                'status_pedido_id' => $venda->estadovenda_idestadovenda,
                'contato_id'    => $venda->contatos_idcontatos,
                'endereco_id'   => $venda->enderecos_idenderecos,
                'created_at'    => $venda->created,
                'updated_at'    => $venda->updated
            ]);

            if($venda->dataRetirada != '0000-00-00'){
                $pedido->data_retirada = $venda->dataRetirada;
                $pedido->save();
            }

            if(!is_null($venda->contrato_id)){
                ContratoPedido::create([
                    'pedido_id'    => $venda->idvendas,
                    'contrato_id'  => $venda->contrato_id
                ]);
            }
        }

        $pedidosDefinidos = DB::connection('mysql2')->table('pedidos_definidos')->get();

        foreach($pedidosDefinidos as $pedidoDefinido){
            ItemDefinido::create([
                'id'            => $pedidoDefinido->id,
                'detalhes'      => $pedidoDefinido->detalhes,
                'valor'         => $pedidoDefinido->valor_item,
                'tipo_patrimonio_id' => $pedidoDefinido->tipo_id
            ]);

            if(!is_null($pedidoDefinido->contrato_id)){
                ContratoItemDefinido::create([
                    'contrato_id'       => $pedidoDefinido->contrato_id,
                    'item_definido_id'  => $pedidoDefinido->id
                ]);
            }
        }

        $pedidos = DB::connection('mysql2')->table('pedidos')->get();

        foreach($pedidos as $pedido){
            ItemPedido::create([
                'id'            => $pedido->idpedidos,
                'valor'         => $pedido->valorMensal,
                'quantidade'    => $pedido->quantidade,
                'informacoes'   => $pedido->informacoes,
                'modelo_id'     => $pedido->modelos_idmodelos,
                'item_definido_id' => $pedido->pedido_definido_id
            ]);

            PedidoItem::create([
                'pedido_id'         => $pedido->vendas_idvendas,
                'item_pedido_id'    => $pedido->idpedidos
            ]);


        }
    }
}
