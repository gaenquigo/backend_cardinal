<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndicadorGeodataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicador_geodata', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria, autonumerico');
            $table->unsignedBigInteger('variable_id')->unsigned()->nullable()->comment('Código variable');
            $table->foreign('variable_id')->references('id')->on('variables');
            $table->unsignedBigInteger('master_geodata_id')->unsigned()->nullable()->comment('Código master geodata');
            $table->foreign('master_geodata_id')->references('id')->on('master_geodata');
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
        Schema::dropIfExists('indicador_geodata');
    }
}
