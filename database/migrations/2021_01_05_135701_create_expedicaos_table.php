<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpedicaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expedicaos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pedido_id')->constrained('pedidos');
            $table->foreignId('expedicao_estado_id')->constrained('expedicao_estados');
            $table->foreignId('expedicao_tipo_id')->constrained('expedicao_tipos');
            $table->foreignId('usuario_id')->constrained('usuarios');
            $table->foreignId('chamado_id')->nullable()->constrained('chamados');

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
        Schema::dropIfExists('expedicaos');
    }
}
