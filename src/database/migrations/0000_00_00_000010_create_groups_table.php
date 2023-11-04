<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria, autonumerico');
            $table->string('name')->unique()->comment('Nombre de la CAR');
            $table->integer('city_id')->comment('Código Dominio de la ciudad');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->integer('state_id')->comment('Código Dominio del departamento');
            $table->foreign('state_id')->references('id')->on('states');
            $table->string('acronym')->comment('Acronimo o Sigla de la CAR');
            $table->string('address')->comment('Dirección fisica de la CAR');
            $table->string('active')->default('1')->comment('CAR activa/no activa');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groups');
    }
}
