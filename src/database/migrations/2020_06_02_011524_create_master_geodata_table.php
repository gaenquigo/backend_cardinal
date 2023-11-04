<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterGeodataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_geodata', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria, autonumerico');
            $table->string('nombre_capa')->comment('Nombre capa');
            $table->string('url')->nullable()->comment('Url');
            $table->string('url_metadata')->nullable()->comment('Url metadata');
            $table->longText('descripcion')->nullable()->comment('Descripción');
            $table->unsignedBigInteger('categoria')->unsigned()->comment('Código categoria, dominio');
            $table->foreign('categoria')->references('id')->on('domains');
            $table->unsignedBigInteger('tipo')->unsigned()->comment('Código tipo, dominio');
            $table->foreign('tipo')->references('id')->on('domains');
            $table->string('capa_wms')->nullable()->comment('Capa WSM');
            $table->integer('posicion')->nullable()->comment('Posición');
            $table->unsignedBigInteger('propietario')->nullable()->comment('Propietario capa');
            $table->integer('frecuencia_actualizacion')->nullable()->comment('frecuencia actualización');
            $table->boolean('es_visible')->nullable()->comment('Capa es visible');
            $table->boolean('es_deprecada')->nullable()->comment('Capa es deprecada');
            $table->integer('anio')->nullable()->comment('Año de la Capa');
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
        Schema::dropIfExists('master_geodata');
    }
}
