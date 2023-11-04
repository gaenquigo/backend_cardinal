<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndicatorIediValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicator_iedi_values', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('value')->nullable()->comment('Valor total');
            $table->integer('year')->nullable()->comment('Año de la variable');
            $table->integer('p_a_i_id')->unsigned()->comment('Código PAI');
            $table->foreign('p_a_i_id')->references('id')->on('pais');
            $table->integer('id_iedi_variable')->unsigned()->comment('Código variable iedi');
            $table->foreign('id_iedi_variable')->references('id')->on('indicator_iedi_variables');            
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
        Schema::dropIfExists('indicator_iedi_values');
    }
}
