<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password');
            $table->foreignId('tipo_usuario_id')->nullable();
            $table->foreignId('funcionario_id')->nullable();
            $table->foreignId('contato_id')->nullable();
            $table->rememberToken();

            $table->foreign('tipo_usuario_id')->references('id')->on('tipo_usuarios');
            $table->foreign('funcionario_id')->references('id')->on('funcionarios');
            $table->foreign('contato_id')->references('id')->on('contatos');

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
        Schema::dropIfExists('usuarios');
    }
}
