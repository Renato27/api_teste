<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntregaPatrimoniosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrega_patrimonios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('entrega_id')->nullable()->constrained('entregas');
            $table->foreignId('patrimonio_id')->nullable()->constrained('patrimonios');
            $table->foreignId('item_pedido_id')->nullable()->constrained('item_pedidos');
            $table->boolean('checked')->default(0);

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
        Schema::dropIfExists('entrega_patrimonios');
    }
}
