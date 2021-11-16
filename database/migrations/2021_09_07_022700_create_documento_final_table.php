<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentoFinalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documento_final', function (Blueprint $table) {
            $table->increments('id_docuemtno_final');
            $table->date('fecha_defensa');
            $table->time('hora_defensa');
            $table->float('calificacion', 6, 2);
            $table->string('escala', 40);
            $table->string('observaciones', 150);

            $table->integer('documento_final_tribunal_1')->unsigned();
            $table->integer('documento_final_tribunal_2')->unsigned();
            $table->integer('documento_final_tribunal_fps')->unsigned();
            $table->integer('documento_final_id_acta_perfil')->unsigned();

            $table->timestamps();

            $table->foreign('documento_final_tribunal_1')->references('id_docente')->on('docente');
            $table->foreign('documento_final_tribunal_2')->references('id_docente')->on('docente');
            $table->foreign('documento_final_tribunal_fps')->references('id_docente')->on('docente');
            $table->foreign('documento_final_id_acta_perfil')->references('id_acta_perfil')->on('acta_perfil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documento_final');
    }
}
