<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phases', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria, autonumerico');
            $table->string('name')->comment('Nombre fase');
            $table->integer('percentage')->comment('Porcentaje');
            $table->integer('value')->nullable()->comment('Valor');
            $table->unsignedBigInteger('variable_id')->unsigned()->comment('Código variable');
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
        Schema::dropIfExists('phases');
    }
}
