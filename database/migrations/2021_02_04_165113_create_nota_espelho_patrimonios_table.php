<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotaEspelhoPatrimoniosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nota_espelho_patrimonios', function (Blueprint $table) {
            $table->id();
            $table->date('periodo_inicio');
            $table->date('periodo_fim');
            $table->decimal('valor', 10, 2);
            $table->foreignId('patrimonio_id')->nullable()->constrained('patrimonios');
            $table->foreignId('nota_espelho_id')->nullable()->constrained('nota_espelhos');
            $table->foreignId('contrato_id')->nullable()->constrained('contratos');
            $table->foreignId('chamado_id')->nullable()->constrained('chamados');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nota_espelho_patrimonios');
    }
}
