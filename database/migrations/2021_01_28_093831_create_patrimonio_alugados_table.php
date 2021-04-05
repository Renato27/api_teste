<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->boolean('cobrado')->default(0);
            $table->foreignId('patrimonio_id')->nullable()->constrained('patrimonios');
            $table->foreignId('pedido_id')->nullable()->constrained('pedidos');
            $table->foreignId('cliente_id')->nullable()->constrained('clientes');
            $table->foreignId('contrato_id')->nullable()->constrained('contratos');
            $table->foreignId('item_pedido_id')->nullable()->constrained('item_pedidos');
            $table->foreignId('item_definido_id')->nullable()->constrained('item_definidos');
            $table->foreignId('chamado_id')->nullable()->constrained('chamados');
            $table->foreignId('endereco_id')->nullable()->constrained('enderecos');

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
