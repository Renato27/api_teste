<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuprimentoPatrimoniosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suprimento_patrimonios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('suprimento_id')->nullable()->constrained('suprimentos');
            $table->foreignId('patrimonio_id')->nullable()->constrained('patrimonios');

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
        Schema::dropIfExists('suprimento_patrimonios');
    }
}
