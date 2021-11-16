<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificacionTemporalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notificacion_temporal', function (Blueprint $table) {
            $table->increments('id_notificacion_temporal');
            $table->date('fecha_enviar');
            $table->boolean('estado')->default(0);

            $table->integer('nt_id_acta_perfil')->unsigned();
            $table->timestamps();

            $table->foreign('nt_id_acta_perfil')->references('id_acta_perfil')->on('acta_perfil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notificacion_temporal');
    }
}
