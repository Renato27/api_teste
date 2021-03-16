<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_pedidos', function (Blueprint $table) {
            $table->id();
            $table->decimal('valor', 10, 2)->nullable();
            $table->bigInteger('quantidade')->nullable();
            $table->text('informacoes')->nullable();
            $table->foreignId('modelo_id')->nullable()->constrained('modelos');
            $table->foreignId('item_definido_id')->nullable()->constrained('item_definidos');

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
        Schema::dropIfExists('item_pedidos');
    }
}
