<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDadoFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dado_funcionarios', function (Blueprint $table) {
            $table->id();
            $table->string('telefone')->nullable();
            $table->string('rg')->nullable();
            $table->string('cpf')->nullable();
            $table->string('titulo_eleitor')->nullable();
            $table->string('secao_titulo_eleitor')->nullable();
            $table->string('ctps')->nullable();
            $table->string('email')->unique()->nullable();
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
        Schema::dropIfExists('dado_funcionarios');
    }
}
