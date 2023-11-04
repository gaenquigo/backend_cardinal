<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria, autonumerico');
            $table->string('name')->comment('Nombre ciudad');
            $table->string('city_code')->comment('Código ciudad');
            $table->string('divipola',16)->comment('Código Divipola');
            $table->integer('state_id')->references('id')->on('states')->comment('Código Estado');
            $table->integer('country_id')->references('id')->on('countries')->comment('Código Pais');
            $table->integer('continent_id')->references('id')->on('continents')->comment('Código Continente');
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
        Schema::dropIfExists('cities');
    }
}
