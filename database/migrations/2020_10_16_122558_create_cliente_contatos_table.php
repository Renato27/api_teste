<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteContatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_contatos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')->nullable();
            $table->foreignId('contato_id')->nullable();

            $table->foreign('cliente_id')->references('id')->on('clientes');
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
        Schema::dropIfExists('cliente_contatos');
    }
}
