<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjectiveProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objective_products', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria, autonumerico');
            $table->unsignedBigInteger('objective_id')->comment('Código Objetivo');
            $table->unsignedBigInteger('product_id')->nullable()->comment('Código producto dominio');
            $table->longText('product_other')->nullable()->comment('Otro producto');
            $table->float('goal_1')->nullable()->comment('Meta 1');
            $table->float('goal_1_balance')->nullable()->comment('Meta 1');
            $table->float('goal_2')->nullable()->comment('Meta 2');
            $table->float('goal_2_balance')->nullable()->comment('Meta 2');
            $table->float('goal_3')->nullable()->comment('Meta 3');
            $table->float('goal_3_balance')->nullable()->comment('Meta 3');
            $table->float('goal_4')->nullable()->comment('Meta 4');
            $table->float('goal_4_balance')->nullable()->comment('Meta 4');
            $table->float('total_goal')->comment('Meta total');
            $table->integer('unit_goal')->comment('Tipo unidad dominio');
            $table->smallInteger('weighing')->comment('Ponderación');
            $table->unsignedBigInteger('indicator_national_id')->nullable()->comment('Código indicador nacional, dominio');
            $table->unsignedBigInteger('indicator_ods_id')->comment('Código indicador ODS, dominio');
            $table->unsignedBigInteger('national_policy_id')->comment('Código indicador Politica Nacional, dominio');
            $table->timestamps();

            $table->foreign('objective_id')->references('id')->on('objectives');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('objective_products');
    }
}

