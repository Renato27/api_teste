<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->date('data_emissao');
            $table->date('data_vencimento');
            $table->date('data_pagamento')->nullable();
            $table->date('periodo_inicio')->nullable();
            $table->date('periodo_fim')->nullable();
            $table->string('descricao');
            $table->decimal('valor', 10, 2);
            $table->boolean('antecipacao')->default(0);
            $table->boolean('tem_boleto')->default(0);
            $table->foreignId('nota_estado_id')->nullable()->constrained('nota_estados');
            $table->foreignId('cliente_id')->nullable()->constrained('clientes');
            $table->foreignId('contrato_id')->nullable()->constrained('contratos');

            $table->softDeletes();
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
        Schema::dropIfExists('notas');
    }
}
