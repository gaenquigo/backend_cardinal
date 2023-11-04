<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria, autonumerico');
            $table->integer('continent_id')->references('id')->on('continents')->comment('Código, continente asociado');
            $table->string('name')->unique()->comment('Nombre Pais');
            $table->string('a2-iso')->unique()->comment('Sigla ISO Pais');
            $table->string('a3-un')->unique()->comment('Sigla Iinternacional Pais');
            $table->string('dialing')->comment('Indicativo Pais');
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
        Schema::dropIfExists('countries');
    }
}
