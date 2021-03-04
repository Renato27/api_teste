<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrocaPatrimoniosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('troca_patrimonios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('troca_id')->nullable()->constrained('trocas');
            $table->foreignId('patrimonio_entrega_id')->nullable();
            $table->foreignId('patrimonio_retirada_id')->nullable();
            $table->boolean('checked')->default(0);

            $table->foreign('patrimonio_entrega_id')->references('id')->on('patrimonios');
            $table->foreign('patrimonio_retirada_id')->references('id')->on('patrimonios');

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
        Schema::dropIfExists('troca_patrimonios');
    }
}
