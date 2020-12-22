<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->string('numero_orcamento')->nullable();
            $table->string('produto')->nullable();
            $table->string('nota_fiscal')->nullable();
            $table->string('forma_pagamento')->nullable();
            $table->string('serie')->nullable();
            $table->string('observacao')->nullable();
            $table->bigInteger('quantidade')->nullable();
            $table->decimal('valor_unitario', 10, 2)->nullable();
            $table->decimal('valor_total', 10, 2)->nullable();
            $table->date('data_compra')->nullable();
            $table->date('prazo_entrega')->nullable();
            $table->date('data_entrega')->nullable();
            $table->date('data_termino_garantia')->nullable();
            $table->date('data_vencimento_fatura')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compras');
    }
}
