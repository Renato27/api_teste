<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Database\Seeders;

use App\Models\Compra\Compra;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $compras = DB::connection('mysql2')->table('compras')->get();

        foreach ($compras as $compra) {
            Compra::create([
                'numero_orcamento' => $compra->numeroOrcamento,
                'produto' => $compra->tipos_idtipos,
                'nota_fiscal' => $compra->notaFiscal,
                'forma_pagamento' => null,
                'serie' => null,
                'observacao' => null,
                'quantidade' => $compra->quantidade,
                'valor_unitario' => $compra->valorUnitario,
                'valor_total' => $compra->valorTotal,
                'data_compra' => $compra->dataCompra,
                'prazo_entrega' => null,
                'data_entrega' => $compra->dataEntrega,
                'data_termino_garantia' => $compra->dataTerminoGarantia,
                'data_vencimento_fatura' => null,
            ]);
        }
    }
}
