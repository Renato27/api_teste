<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratoItemDefinidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrato_item_definidos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contrato_id')->nullable();
            $table->foreignId('item_definido_id')->nullable();

            $table->foreign('contrato_id')->references('id')->on('contratos');
            $table->foreign('item_definido_id')->references('id')->on('item_definidos');

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
        Schema::dropIfExists('contrato_item_definidos');
    }
}
