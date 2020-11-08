<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratoMedicaoTiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrato_medicao_tipos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contrato_id');
            $table->foreignId('medicao_tipo_id');

            $table->foreign('contrato_id')->references('id')->on('contratos');
            $table->foreign('medicao_tipo_id')->references('id')->on('medicao_tipos');
            
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
        Schema::dropIfExists('contrato_medicao_tipos');
    }
}
