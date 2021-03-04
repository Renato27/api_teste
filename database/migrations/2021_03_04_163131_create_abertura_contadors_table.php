<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAberturaContadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abertura_contadors', function (Blueprint $table) {
            $table->id();
            $table->integer('dia_abertura')->nullable();
            $table->foreignId('patrimonio_id')->nullable()->constrained('patrimonios');
            $table->foreignId('contato_id')->nullable()->constrained('contatos');

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
        Schema::dropIfExists('abertura_contadors');
    }
}
