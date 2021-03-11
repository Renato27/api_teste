<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotaEspelhosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nota_espelhos', function (Blueprint $table) {
            $table->id();
            $table->date('data_emissao');
            $table->date('data_vencimento');
            $table->date('periodo_inicio');
            $table->date('periodo_fim');
            $table->decimal('valor', 10, 2);
            $table->foreignId('nota_espelho_estado_id')->nullable()->constrained('nota_espelho_estados');
            $table->foreignId('cliente_id')->nullable()->constrained('clientes');
            $table->foreignId('contrato_id')->nullable()->constrained('contratos');
            $table->foreignId('pedido_id')->nullable()->constrained('pedidos');
            $table->foreignId('espelho_recorrente_id')->nullable()->constrained('espelho_recorrentes');

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
        Schema::dropIfExists('nota_espelhos');
    }
}
