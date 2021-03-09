<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChamadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chamados', function (Blueprint $table) {
            $table->id();
            $table->date('data_acao')->nullable();
            $table->text('mensagem')->nullable();
            $table->foreignId('cliente_id')->nullable()->constrained('clientes');
            $table->foreignId('status_chamado_id')->nullable();
            $table->foreignId('tipo_chamado_id')->nullable();
            $table->foreignId('usuario_id')->nullable();
            $table->foreignId('pedido_id')->nullable();
            $table->foreignId('contato_id')->nullable();
            $table->foreignId('endereco_id')->nullable();

            $table->foreign('status_chamado_id')->references('id')->on('status_chamados');
            $table->foreign('tipo_chamado_id')->references('id')->on('tipo_chamados');
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('pedido_id')->references('id')->on('pedidos');
            $table->foreign('contato_id')->references('id')->on('contatos');
            $table->foreign('endereco_id')->references('id')->on('enderecos');

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
        Schema::dropIfExists('chamados');
    }
}
