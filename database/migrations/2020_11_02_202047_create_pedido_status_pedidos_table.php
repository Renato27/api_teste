<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidoStatusPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_status_pedidos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pedido_id');
            $table->foreignId('status_pedido_id');

            $table->foreign('pedido_id')->references('id')->on('pedidos');
            $table->foreign('status_pedido_id')->references('id')->on('status_pedidos');

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
        Schema::dropIfExists('pedido_status_pedidos');
    }
}
