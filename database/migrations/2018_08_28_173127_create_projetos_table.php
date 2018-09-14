<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projeto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->integer('curso_id')->references('id')->on('curso')->onDelete('SET NULL');
            $table->integer('usuario_id')->references('id')->on('users')->onDelete('SET NULL');
            $table->integer('box')->default(0);
            $table->integer('sala')->default(0);
            $table->string('turma');
            $table->string('integrantes');
            $table->string('orientadores');
            $table->string('email');
            $table->string('arquivo');
            $table->timestamp('data_hora');
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
        Schema::dropIfExists('projeto');
    }
}
