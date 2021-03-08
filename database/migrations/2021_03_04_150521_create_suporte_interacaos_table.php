<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuporteInteracaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suporte_interacaos', function (Blueprint $table) {
            $table->id();
            $table->date('inicio')->nullable();
            $table->date('fim')->nullable();
            $table->text('detalhes')->nullable();
            $table->foreignId('suporte_id')->nullable()->constrained('suportes');
            $table->foreignId('usuario_id')->nullable()->constrained('usuarios');
            $table->foreignId('cliente_id')->nullable()->constrained('clientes');

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
        Schema::dropIfExists('suporte_interacaos');
    }
}
