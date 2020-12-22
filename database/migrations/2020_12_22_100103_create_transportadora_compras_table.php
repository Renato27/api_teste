<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportadoraComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transportadora_compras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transportadora_id');
            $table->foreignId('compra_id');

            $table->foreign('transportadora_id')->references('id')->on('transportadoras');
            $table->foreign('compra_id')->references('id')->on('compras');

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
        Schema::dropIfExists('transportadora_compras');
    }
}
