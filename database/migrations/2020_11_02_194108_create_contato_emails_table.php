<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContatoEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contato_emails', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique()->nullable();
            $table->boolean('principal')->default(0);
            $table->foreignId('contato_id')->nullable();

            $table->foreign('contato_id')->references('id')->on('contatos');

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
        Schema::dropIfExists('contato_emails');
    }
}
