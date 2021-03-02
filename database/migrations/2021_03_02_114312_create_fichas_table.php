<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichas', function (Blueprint $table) {
            $table->id();
            $table->text('detalhes')->nullable();
            $table->foreignId('funcionario_id')->nullable()->constrained('funcionarios');
            $table->foreignId('patrimonio_id')->nullable()->constrained('patrimonios');
            $table->foreignId('chamado_id')->nullable()->constrained('chamados');

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
        Schema::dropIfExists('fichas');
    }
}
