<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecursodocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recursodocumentos', function (Blueprint $table) {
            $table->bigIncrements('docum_id');
            $table->unsignedInteger('usuario')->index();
            $table->string('nombre_recurso',180);
            $table->timestamp('fechahora');
            $table->unsignedinteger('roles')->index();
            $table->integer('tipodocument');
            $table->integer('estado');

            $table->foreign('usuario')->references('prealum_id')
                ->on('prealumnos')
                ->onDelete('cascade');
            $table->foreign('roles')->references('id')
                ->on('roles')
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
        Schema::dropIfExists('recursodocumentos');
    }
}
