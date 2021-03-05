<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAberturaContadorPatrimoniosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abertura_contador_patrimonios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('abertura_contador_id')->nullable();
            $table->foreignId('patrimonio_id')->nullable()->constrained('patrimonios');

            $table->foreign('abertura_contador_id')->references('id')->on('abertura_contadors');

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
        Schema::dropIfExists('abertura_contador_patrimonios');
    }
}
