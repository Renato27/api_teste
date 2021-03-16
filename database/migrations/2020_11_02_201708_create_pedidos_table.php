<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->date('data_entrega')->nullable();
            $table->date('data_retirada')->nullable();
            $table->foreignId('status_pedido_id')->nullable();
            $table->foreignId('contato_id')->nullable()->constrained('contatos');
            $table->foreignId('endereco_id')->nullable()->constrained('enderecos');

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
        Schema::dropIfExists('pedidos');
    }
}
