<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFornecedorEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedor_enderecos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fornecedor_id');
            $table->foreignId('endereco_fornecedor_id');

            $table->foreign('fornecedor_id')->references('id')->on('fornecedores');
            $table->foreign('endereco_fornecedor_id')->references('id')->on('endereco_fornecedores');

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
        Schema::dropIfExists('fornecedor_enderecos');
    }
}
