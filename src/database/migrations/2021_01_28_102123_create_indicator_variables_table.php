<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndicatorVariablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicator_variables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('type_id')->comment('Tipo de variable (Domain)');
            $table->foreign('type_id')->references('id')->on('domains');
            $table->smallInteger('type_variable_id')->comment('Código tipo variable (numerador / denominador)');
            $table->unsignedBigInteger('indicator_id')->comment('Código indicador');            
            $table->foreign('indicator_id')->references('id')->on('indicators');
            $table->unsignedBigInteger('indicator_variable_id')->nullable()->comment('Código indicador');
            $table->foreign('indicator_variable_id')->references('id')->on('indicators');            
            $table->unsignedBigInteger('variable_id')->comment('Código variable');
            $table->foreign('variable_id')->references('id')->on('variables');
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
        Schema::dropIfExists('indicator_variables');
    }
}
