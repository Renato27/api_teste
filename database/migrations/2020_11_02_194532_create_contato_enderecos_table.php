<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContatoEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contato_enderecos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contato_id');
            $table->foreignId('endereco_id');

            $table->foreign('contato_id')->references('id')->on('contatos');
            $table->foreign('endereco_id')->references('id')->on('enderecos');
            
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
        Schema::dropIfExists('contato_enderecos');
    }
}
