<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContatoContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contato_contratos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contato_id');
            $table->foreignId('contrato_id');

            $table->foreign('contato_id')->references('id')->on('contatos');
            $table->foreign('contrato_id')->references('id')->on('contratos');
            
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
        Schema::dropIfExists('contato_contratos');
    }
}
