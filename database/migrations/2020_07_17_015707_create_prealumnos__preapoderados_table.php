<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrealumnosPreapoderadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prealumnos__preapoderados', function (Blueprint $table) {
            $table->increments('prealumn_preapod_id');
            $table->unsignedInteger('prealumn_preapod_prealum_id')->index();
            $table->unsignedInteger('prealumn_preapod_preapod_id')->index();

            $table->foreign('prealumn_preapod_preapod_id')->references('preapod_id')
                ->on('preapoderados')
                ->onDelete('cascade');
            $table->foreign('prealumn_preapod_prealum_id')->references('prealum_id')
                ->on('prealumnos')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prealumnos__preapoderados');
    }
}
