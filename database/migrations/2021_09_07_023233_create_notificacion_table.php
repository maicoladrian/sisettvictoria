<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notificacion', function (Blueprint $table) {
            $table->increments('id_notificacion');
            $table->dateTime('fecha_hora_envio');

            $table->integer('notificacion_id_tecnica_coaching')->unsigned();
            $table->integer('notificacion_id_acta_perfil')->unsigned();
            $table->timestamps();

            $table->foreign('notificacion_id_tecnica_coaching')->references('id_tecnica_coaching')->on('tecnica_coaching');
            $table->foreign('notificacion_id_acta_perfil')->references('id_acta_perfil')->on('acta_perfil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notificacion');
    }
}
