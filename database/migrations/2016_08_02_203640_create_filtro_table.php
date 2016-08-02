<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiltroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filtro', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('espacio_id');
            $table->integer('estilo_id');
            $table->integer('color_id');
            $table->string('plano');
            $table->string('referente');
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
        Schema::drop('filtro');
    }
}
