<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotaPatrimoniosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nota_patrimonios', function (Blueprint $table) {
            $table->id();
            $table->date('periodo_inicio');
            $table->date('periodo_fim');
            $table->decimal('valor', 10, 2);
            $table->foreignId('patrimonio_id')->constrained('patrimonios');
            $table->foreignId('nota_id')->constrained('notas');
            $table->foreignId('contrato_id')->constrained('contratos');
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
        Schema::dropIfExists('nota_patrimonios');
    }
}
