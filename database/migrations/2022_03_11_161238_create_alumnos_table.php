<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->string("Carnet")->primary();
            $table->bigInteger('alumnos_id')->unsigned();


            $table->string("FirstName");
            $table->string("SecondName");
            $table->string("LastName");
            $table->string("DateOfBirth");
            $table->string("Address");
            $table->string("Email");
            $table->string("Dpi");
            $table->string("Cel");
            /*Crearé el dato de foto, por si lo llegara a ocupar despues en el curso, pero quedará deshabilidado
            $table->string("Foto");*/
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
        Schema::dropIfExists('alumnos');
    }
}
