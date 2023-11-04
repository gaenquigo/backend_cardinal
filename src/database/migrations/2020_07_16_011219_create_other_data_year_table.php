<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtherDataYearTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('other_data_year', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria, autonumerico');
            $table->integer('year')->comment('Año');
            $table->string('value',512)->nullable()->comment('Valor variable');
            $table->unsignedBigInteger('other_data_id')->comment('Código OtraData');
            $table->foreign('other_data_id')->references('id')->on('other_data');
            $table->unsignedBigInteger('activity_id')->comment('Código actividad');
            $table->foreign('activity_id')->references('id')->on('activities');
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
        Schema::dropIfExists('other_data_year');
    }
}
