<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->nullable();
            $table->string('cargo')->nullable();
            $table->string('telefone')->nullable();
            $table->string('rg')->nullable();
            $table->string('cpf')->nullable();
            $table->string('titulo_eleitor')->nullable();
            $table->string('secao_titulo_eleitor')->nullable();
            $table->string('ctps')->nullable();
            $table->string('email')->nullable();

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
        Schema::dropIfExists('funcionarios');
    }
}
