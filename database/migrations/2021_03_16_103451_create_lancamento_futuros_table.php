<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLancamentoFuturosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lancamento_futuros', function (Blueprint $table) {
            $table->id();
            $table->integer('mes_cobranca')->nullable();
            $table->text('descricao')->nullable();
            $table->integer('quantidade')->nullable();
            $table->decimal('valor_unitario', 10,2)->nullable();
            $table->boolean('processado')->default(0);
            $table->foreignId('contrato_id')->nullable()->constrained('contratos');
            $table->foreignId('nota_id')->nullable()->constrained('notas');

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
        Schema::dropIfExists('lancamento_futuros');
    }
}
