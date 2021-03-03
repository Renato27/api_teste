<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRetiradaPatrimoniosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retirada_patrimonios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('retirada_id')->constrained('retiradas');
            $table->foreignId('patrimonio_id')->constrained('patrimonios');
            $table->boolean('checked')->default(0);

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
        Schema::dropIfExists('retirada_patrimonios');
    }
}
