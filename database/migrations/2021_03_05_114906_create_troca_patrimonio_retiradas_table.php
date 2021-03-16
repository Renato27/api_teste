<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrocaPatrimonioRetiradasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('troca_patrimonio_retiradas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('troca_id')->nullable()->constrained('trocas');
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
        Schema::dropIfExists('troca_patrimonio_retiradas');
    }
}
