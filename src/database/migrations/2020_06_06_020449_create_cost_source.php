<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostSource extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cost_sources', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria, autonumerico');
            $table->integer('father_id')->nullable()->comment('Código padre fuentes gastos');
            $table->foreign('father_id')->references('id')->on('cost_sources');
            $table->string('code')->comment('Código cuenta');
            $table->string('name')->comment('Nombre cuenta');
            $table->string('description')->nullable()->comment('Descripción cuenta');
            $table->boolean('functioning')->default(false)->comment('Funcionamiento');
            $table->boolean('compensation')->default(false)->comment('Compensación');
            $table->boolean('debt_service')->default(false)->comment('Servicio a la deuda');
            $table->boolean('final_level')->nullable()->default(false)->comment('Ultimo nivel'); 
            $table->integer('parent_id')->nullable()->comment('Cuenta Padre');
            $table->foreign('parent_id')->references('id')->on('financing_sources');
            $table->integer('group_id')->nullable()->comment('Car modifica');
            $table->foreign('group_id')->references('id')->on('groups');  
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
        Schema::dropIfExists('cost_sources');
    }
}
