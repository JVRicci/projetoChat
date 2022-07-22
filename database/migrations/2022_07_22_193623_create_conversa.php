<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conversa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idUser1')->references('id')->on('users');
            $table->foreignId('idUser2')->references('id')->on('users');
            $table->integer('QuemEnviou');
            $table->string('mensagem');
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
        Schema::dropIfExists('conversa');
    }
};
