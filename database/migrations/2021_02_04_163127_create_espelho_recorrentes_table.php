<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->date('dia_emissao');
            $table->date('dia_vencimento');
            $table->foreignId('contrato_id')->nullable()->constrained('contratos');
            $table->foreignId('nota_id')->nullable()->constrained('notas');
            $table->foreignId('anterior_nota_id');

            $table->foreign('anterior_nota_id')->references('id')->on('notas');
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
        Schema::dropIfExists('espelho_recorrentes');
    }
}
