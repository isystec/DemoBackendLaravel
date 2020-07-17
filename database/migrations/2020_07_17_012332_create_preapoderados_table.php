<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreapoderadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preapoderados', function (Blueprint $table) {
            $table->increments('preapod_id');
            $table->integer('preapod_tipodocumento');
            $table->string('preapod_identificacion',20)->unique();
            $table->string('preapod_ape',70);
            $table->string('preapod_nom',70);
            $table->unsignedBigInteger('preapod_nacion_id')->index();
            $table->integer('preapod_sexo');
            $table->date('preapod_fnac');
            $table->integer('preapod_est');
            $table->string('preapod_email',70)->nullable();
            $table->string('preapod_tel',11)->nullable();

            $table->foreign('preapod_nacion_id')->references('pais_id')->on('paises')
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
        Schema::dropIfExists('preapoderados');
    }
}
