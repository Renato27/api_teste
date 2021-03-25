<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstoquePrateleirasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estoque_prateleiras', function (Blueprint $table) {
            $table->id();
            $table->string('prateleira')->nullable();
            $table->foreignId('estoque_estante_id')->nullable()->constrained('estoque_estantes');
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
        Schema::dropIfExists('estoque_prateleiras');
    }
}
