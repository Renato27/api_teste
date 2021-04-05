<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuporteInteracaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suporte_interacaos', function (Blueprint $table) {
            $table->id();
            $table->dateTime('inicio')->nullable();
            $table->dateTime('fim')->nullable();
            $table->text('detalhes')->nullable();
            $table->foreignId('suporte_id')->nullable()->constrained('suportes');
            $table->foreignId('usuario_id')->nullable()->constrained('usuarios');
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
        Schema::dropIfExists('suporte_interacaos');
    }
}
