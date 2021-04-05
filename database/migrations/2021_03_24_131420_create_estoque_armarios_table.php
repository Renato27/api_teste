<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstoqueArmariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estoque_armarios', function (Blueprint $table) {
            $table->id();
            $table->string('armario_fileira')->nullable();
            $table->foreignId('estoque_sala_id')->nullable()->constrained('estoque_salas');
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
        Schema::dropIfExists('estoque_armarios');
    }
}
