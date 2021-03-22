<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCobrancasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cobrancas', function (Blueprint $table) {
            $table->id();
            $table->text('descricao')->nullable();
            $table->foreignId('usuario_id')->nullable()->constrained('usuarios');
            $table->foreignId('cliente_id')->nullable()->constrained('clientes');
            $table->foreignId('cobranca_estado_id')->nullable()->constrained('cobranca_estados');

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
        Schema::dropIfExists('cobrancas');
    }
}
