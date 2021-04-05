<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->nullable();
            $table->date('inicio')->nullable();
            $table->date('fim')->nullable();
            $table->string('detalhes')->nullable();
            $table->string('detalhes_nota')->nullable();
            $table->bigInteger('dia_emissao_nota')->nullable();
            $table->bigInteger('dia_vencimento_nota')->nullable();
            $table->bigInteger('dia_periodo_inicio_nota')->nullable();
            $table->bigInteger('dia_periodo_fim_nota')->nullable();
            $table->decimal('desconto', 5,2)->default(0);
            $table->string('responsavel')->nullable();
            $table->string('tipo_inflacao')->nullable();
            $table->foreignId('medicao_tipo_id')->nullable();
            $table->foreignId('pagamento_metodo_id')->nullable();
            $table->foreignId('contrato_tipo_id')->nullable();

            $table->foreign('medicao_tipo_id')->references('id')->on('medicao_tipos');
            $table->foreign('pagamento_metodo_id')->references('id')->on('pagamento_metodos');
            $table->foreign('contrato_tipo_id')->references('id')->on('contrato_tipos');

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
        Schema::dropIfExists('contratos');
    }
}
