<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id_usuario');
            $table->string('usuario', 40);
            $table->string('password');
            $table->integer('usuario_id_informacion_personal')->unsigned();
            $table->integer('usuario_id_rol')->unsigned();
            $table->timestamps();

            $table->foreign('usuario_id_informacion_personal')->references('id_informacion_personal')->on('informacion_personal');
            $table->foreign('usuario_id_rol')->references('id_rol')->on('rol');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
