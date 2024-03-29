<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContatoTiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contato_tipos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contato_id')->nullable();
            $table->foreignId('tipo_contato_id')->nullable();

            $table->foreign('contato_id')->references('id')->on('contatos');
            $table->foreign('tipo_contato_id')->references('id')->on('tipo_contatos');

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
        Schema::dropIfExists('contato_tipos');
    }
}
