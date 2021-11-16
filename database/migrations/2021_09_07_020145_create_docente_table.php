<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docente', function (Blueprint $table) {
            $table->increments('id_docente');
            $table->integer('docente_id_tipo_docente')->unsigned();
            $table->integer('docente_id_usuario')->unsigned();
            $table->timestamps();

            $table->foreign('docente_id_tipo_docente')->references('id_tipo_docente')->on('tipo_docente');
            $table->foreign('docente_id_usuario')->references('id_usuario')->on('usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('docente');
    }
}
