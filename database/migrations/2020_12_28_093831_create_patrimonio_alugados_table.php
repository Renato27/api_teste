<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatrimonioAlugadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patrimonio_alugados', function (Blueprint $table) {
            $table->id();
            $table->date('data_entrega')->nullable();
            $table->decimal('valor', 10, 2)->nullable();
            $table->foreignId('patrimonio_id')->constrained('patrimonios');
            $table->foreignId('pedido_id')->constrained('pedidos');
            $table->foreignId('cliente_id')->constrained('clientes');
            $table->foreignId('contrato_id')->constrained('contratos');
            $table->foreignId('item_pedido_id')->constrained('item_pedidos');
            $table->foreignId('item_definido_id')->constrained('item_definidos');
            $table->foreignId('chamado_id')->constrained('chamados');
            $table->foreignId('endereco_id')->constrained('enderecos');

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
        Schema::dropIfExists('patrimonio_alugados');
    }
}
