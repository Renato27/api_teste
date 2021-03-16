<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_enderecos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')->nullable();
            $table->foreignId('endereco_id')->nullable();

            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('endereco_id')->references('id')->on('enderecos');

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
        Schema::dropIfExists('cliente_enderecos');
    }
}
