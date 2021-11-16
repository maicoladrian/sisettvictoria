<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tema', function (Blueprint $table) {
            $table->increments('id_tema');
            $table->string('titulo_tema', 600);
            $table->integer('tema_id_estado_tema')->unsigned();
            $table->integer('tema_id_modalidad')->unsigned();
            $table->timestamps();

            $table->foreign('tema_id_estado_tema')->references('id_estado_tema')->on('estado_tema');
            $table->foreign('tema_id_modalidad')->references('id_modalidad')->on('modalidad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tema');
    }
}
