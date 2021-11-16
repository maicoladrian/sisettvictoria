<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdTecnicaCoachingToNotificacionTemporalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('notificacion_temporal', function (Blueprint $table) {
            //
            $table->integer('nt_id_tecnica_coaching')->unsigned();

            $table->foreign('nt_id_tecnica_coaching')->references('id_tecnica_coaching')->on('tecnica_coaching');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('notificacion_temporal', function (Blueprint $table) {
            //
        });
    }
}
