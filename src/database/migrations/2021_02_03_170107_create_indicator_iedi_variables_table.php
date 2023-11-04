<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndicatorIediVariablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicator_iedi_variables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',512)->comment('Nombre variable iedi');
            $table->string('abbreviated_name')->nullable()->comment('Nombre abreviado indicador');
            $table->string('description',1000)->nullable()->comment('Descripcion variable iedi');
            $table->unsignedBigInteger('indicator_id')->comment('Código indicador');
            $table->foreign('indicator_id')->references('id')->on('indicators');
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
        Schema::dropIfExists('indicator_iedi_variables');
    }
}
