<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAberturaContadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abertura_contadors', function (Blueprint $table) {
            $table->id();
            $table->integer('dia_abertura')->nullable();
            $table->foreignId('contato_id')->nullable()->constrained('contatos');
            $table->foreignId('endereco_id')->nullable()->constrained('enderecos');

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
        Schema::dropIfExists('abertura_contadors');
    }
}
