<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionarioEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionario_enderecos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('funcionario_id');
            $table->foreignId('endereco_funcionario_id');

            $table->foreign('funcionario_id')->references('id')->on('funcionarios');
            $table->foreign('endereco_funcionario_id')->references('id')->on('endereco_funcionarios');

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
        Schema::dropIfExists('funcionario_enderecos');
    }
}
