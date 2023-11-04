<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFundraisingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fundraisings', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria, autonumerico');
            $table->date('date')->comment('Fecha');
            $table->float('value')->comment('Valor');
            $table->integer('implementation_id')->unsigned()->comment('Código implementación');
            $table->foreign('implementation_id')->references('id')->on('implementations');
            $table->integer('financial_plans_id')->unsigned()->comment('Código Plan financiero');
            $table->foreign('financial_plans_id')->references('id')->on('financial_plans');
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
        Schema::dropIfExists('fundraisings');
    }
}
