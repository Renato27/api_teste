<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicencaPatrimoniosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licenca_patrimonios', function (Blueprint $table) {
            $table->id();
            $table->string('host_name')->nullable();
            $table->foreignId('licenca_id')->nullable();
            $table->foreignId('patrimonio_id')->nullable();
            $table->boolean('retirar_licenca')->default(0);

            $table->foreign('licenca_id')->references('id')->on('licencas');
            $table->foreign('patrimonio_id')->references('id')->on('patrimonios');

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
        Schema::dropIfExists('licenca_patrimonios');
    }
}
