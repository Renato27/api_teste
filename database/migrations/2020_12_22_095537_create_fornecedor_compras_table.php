<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFornecedorComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedor_compras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fornecedor_id');
            $table->foreignId('compra_id');

            $table->foreign('fornecedor_id')->references('id')->on('fornecedores');
            $table->foreign('compra_id')->references('id')->on('compras');

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
        Schema::dropIfExists('fornecedor_compras');
    }
}
