<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatrimoniosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patrimonios', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('numero_patrimonio')->unique();
            $table->string('numero_serie')->nullable();
            $table->foreignId('modelo_id')->nullable();
            $table->foreignId('tipo_patrimonio_id')->nullable();
            $table->foreignId('compra_id')->nullable();
            $table->foreignId('fabricante_id')->nullable();
            $table->foreignId('fornecedor_id')->nullable();
            $table->foreignId('estado_patrimonio_id')->nullable();

            $table->foreign('modelo_id')->references('id')->on('modelos');
            $table->foreign('tipo_patrimonio_id')->references('id')->on('tipo_patrimonios');
            $table->foreign('compra_id')->references('id')->on('compras');
            $table->foreign('fabricante_id')->references('id')->on('fabricantes');
            $table->foreign('fornecedor_id')->references('id')->on('fornecedores');
            $table->foreign('estado_patrimonio_id')->references('id')->on('estado_patrimonios');

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
        Schema::dropIfExists('patrimonios');
    }
}
