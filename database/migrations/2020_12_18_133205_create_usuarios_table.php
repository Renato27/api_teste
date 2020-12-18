<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('senha');
            $table->foreignId('tipo_usuario_id')->nullable();
            $table->foreignId('funcionario_id')->nullable();
            $table->foreignId('contato_id')->nullable();
            $table->foreignId('cliente_visualizacao_patrimonio_id')->nullable();

            $table->foreign('tipo_usuario_id')->references('id')->on('tipo_usuarios');
            $table->foreign('funcionario_id')->references('id')->on('funcionarios');
            $table->foreign('contato_id')->references('id')->on('contatos');
            $table->foreign('cliente_visualizacao_patrimonio_id')->references('id')->on('cliente_visualizacao_patrimonios');

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
