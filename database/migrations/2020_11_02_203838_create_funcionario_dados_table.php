<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionarioDadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionario_dados', function (Blueprint $table) {
            $table->id();
            $table->foreignId('funcionario_id');
            $table->foreignId('dado_funcionario_id');

            $table->foreign('funcionario_id')->references('id')->on('funcionarios');
            $table->foreign('dado_funcionario_id')->references('id')->on('dado_funcionarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funcionario_dados');
    }
}
