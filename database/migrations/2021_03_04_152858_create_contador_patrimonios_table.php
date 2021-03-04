<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContadorPatrimoniosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contador_patrimonios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contador_id')->nullable()->constrained('contadors');
            $table->foreignId('patrimonio_id')->nullable()->constrained('patrimonios');
            $table->bigInteger('contador')->nullable();

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
        Schema::dropIfExists('contador_patrimonios');
    }
}
