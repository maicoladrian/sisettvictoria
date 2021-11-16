<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActaPerfilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acta_perfil', function (Blueprint $table) {
            $table->increments('id_acta_perfil');
            $table->date('fecha_defensa_acta_perfil');
            $table->time('hora_defensa_acta_perfil');
            $table->float('calificacion', 6, 2);
            $table->string('escala', 40);
            $table->string('observaciones', 150);

            $table->integer('acta_perfil_tribunal_1')->unsigned();
            $table->integer('acta_perfil_tribunal_2')->unsigned();
            $table->integer('acta_perfil_tribunal_fps')->unsigned();
            $table->integer('acta_perfil_tutor')->unsigned();
            $table->integer('acta_perfil_id_postulante')->unsigned();
            $table->integer('acta_perfil_id_tema')->unsigned();

            $table->timestamps();

            $table->foreign('acta_perfil_tribunal_1')->references('id_docente')->on('docente');
            $table->foreign('acta_perfil_tribunal_2')->references('id_docente')->on('docente');
            $table->foreign('acta_perfil_tribunal_fps')->references('id_docente')->on('docente');
            $table->foreign('acta_perfil_tutor')->references('id_docente')->on('docente');
            $table->foreign('acta_perfil_id_postulante')->references('id_postulante')->on('postulante');
            $table->foreign('acta_perfil_id_tema')->references('id_tema')->on('tema');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acta_perfil');
    }
}
