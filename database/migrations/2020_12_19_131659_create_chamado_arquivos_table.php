<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChamadoArquivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chamado_arquivos', function (Blueprint $table) {
            $table->id();
            $table->string('arquivo')->nullable();
            $table->foreignId('chamado_id')->nullable();
            $table->foreignId('usuario_id')->nullable();

            $table->foreign('chamado_id')->references('id')->on('chamados');
            $table->foreign('usuario_id')->references('id')->on('usuarios');

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
        Schema::dropIfExists('chamado_arquivos');
    }
}
