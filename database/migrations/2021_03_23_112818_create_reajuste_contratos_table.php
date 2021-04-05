<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReajusteContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reajuste_contratos', function (Blueprint $table) {
            $table->id();
            $table->date('data_inicio')->nullable();
            $table->date('data_final')->nullable();
            $table->boolean('atualizado')->default(0);
            $table->decimal('indice', 12,8)->default(0);
            $table->foreignId('contrato_id')->nullable()->constrained('contratos');

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
        Schema::dropIfExists('reajuste_contratos');
    }
}
