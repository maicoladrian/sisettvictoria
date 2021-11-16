<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformacionPersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informacion_personal', function (Blueprint $table) {
            $table->increments('id_informacion_personal');
            $table->string('ap_paterno', 20);
            $table->string('ap_materno', 20);
            $table->string('nombres', 40);
            $table->string('celular', 15);
            $table->string('correo', 50);
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
        Schema::dropIfExists('informacion_personal');
    }
}
