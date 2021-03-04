<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemDefinidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_definidos', function (Blueprint $table) {
            $table->id();
            $table->string('detalhes')->nullable();
            $table->decimal('valor', 10, 2)->nullable();
            $table->foreignId('tipo_patrimonio_id')->nullable();

            $table->foreign('tipo_patrimonio_id')->references('id')->on('tipo_patrimonios');

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
        Schema::dropIfExists('item_definidos');
    }
}
