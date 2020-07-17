<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrealumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prealumnos', function (Blueprint $table) {
            $table->increments('prealum_id');
            $table->integer('prealum_tipo_documento');
            $table->string('prealum_identificacion',8)->unique();
            $table->string('prealum_ape',70);
            $table->string('prealum_nom',70);
            $table->unsignedBigInteger('prealumn_nacionalidad_id')->index();
            $table->integer('prealum_sexo');
            $table->date('prealum_fnac');
            $table->integer('prealum_gradopostula');
            $table->integer('prealum_est')->default(1);

            $table->foreign('prealumn_nacionalidad_id')->references('pais_id')
                ->on('paises')
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
        Schema::dropIfExists('prealumnos');
    }
}
