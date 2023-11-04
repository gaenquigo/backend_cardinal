<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjectiveProductsHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objective_products_history', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria, autonumerico');
            $table->longText('history')->comment('JSON con la información previamente almacenada del producto del objetivo');
            $table->unsignedBigInteger('objective_history_id')->comment('Código Objetivo');
            $table->unsignedBigInteger('parent_id')->comment('Identificador del producto padre');
            $table->timestamps();

            $table->foreign('objective_history_id')->references('id')->on('objectives_history');
            $table->foreign('parent_id')->references('id')->on('objective_products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('objective_products_history');
    }
}

