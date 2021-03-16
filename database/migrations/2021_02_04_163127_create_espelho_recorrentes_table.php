<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEspelhoRecorrentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('espelho_recorrentes', function (Blueprint $table) {
            $table->id();
            $table->integer('dia_emissao');
            $table->integer('dia_vencimento');
            $table->foreignId('contrato_id')->nullable()->constrained('contratos');
            $table->foreignId('nota_id')->nullable()->constrained('notas');
            $table->foreignId('anterior_nota_id')->nullable();

            $table->foreign('anterior_nota_id')->references('id')->on('notas');
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
        Schema::dropIfExists('espelho_recorrentes');
    }
}
