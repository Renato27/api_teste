<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->foreignId('contato_id');
            $table->foreignId('tipo_id');

            $table->foreign('contato_id')->references('id')->on('contatos');
            $table->foreign('tipo_id')->references('id')->on('tipo_contatos');

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
        Schema::dropIfExists('contato_tipos');
    }
}
