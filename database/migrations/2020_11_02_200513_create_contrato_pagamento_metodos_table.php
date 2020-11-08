<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratoPagamentoMetodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrato_pagamento_metodos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contrato_id');
            $table->foreignId('pagamento_metodo_id');

            $table->foreign('contrato_id')->references('id')->on('contratos');
            $table->foreign('pagamento_metodo_id')->references('id')->on('pagamento_metodos');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contrato_pagamento_metodos');
    }
}
