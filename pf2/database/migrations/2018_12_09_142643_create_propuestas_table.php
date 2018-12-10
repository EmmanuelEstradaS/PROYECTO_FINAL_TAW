<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propuestas', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('id_freelancer');
            $table->string('nombre_freelancer');
            $table->bigInteger('id_proyecto');
            $table->string('nombre_proyecto');
            $table->bigInteger('id_empresa');
            $table->string('nombre_empresa');
            $table->longText('propuesta_freelancer');
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
        Schema::dropIfExists('propuestas');
    }
}
