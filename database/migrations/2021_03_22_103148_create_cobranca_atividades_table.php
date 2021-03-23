<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCobrancaAtividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cobranca_atividades', function (Blueprint $table) {
            $table->id();
            $table->date('data_contato')->nullable();
            $table->string('responsavel')->nullable();
            $table->text('detalhes')->nullable();
            $table->foreignId('cobranca_id')->nullable()->constrained('cobrancas');
            $table->foreignId('usuario_id')->nullable()->constrained('usuarios');

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
        Schema::dropIfExists('cobranca_atividades');
    }
}
