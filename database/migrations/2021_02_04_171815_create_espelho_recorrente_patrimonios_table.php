<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEspelhoRecorrentePatrimoniosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('espelho_recorrente_patrimonios', function (Blueprint $table) {
            $table->id();
            $table->date('data_entrega');
            $table->foreignId('patrimonio_id')->nullable()->constrained('patrimonios');
            $table->foreignId('espelho_recorrente_id')->nullable()->constrained('espelho_recorrentes');
            $table->foreignId('pedido_id')->nullable()->constrained('pedidos');
            $table->foreignId('item_pedido_id')->nullable()->constrained('item_pedidos');
            $table->foreignId('item_definido_id')->nullable()->constrained('item_definidos');

            $table->softDeletes();
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
        Schema::dropIfExists('espelho_recorrente_patrimonios');
    }
}
