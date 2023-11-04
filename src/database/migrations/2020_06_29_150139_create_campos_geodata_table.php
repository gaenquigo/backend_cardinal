<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCamposGeodataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campos_geodata', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria, autonumerico');
            $table->string('campo')->nullable()->comment('Campo');
            $table->string('alias')->nullable()->comment('Alias');
            $table->unsignedBigInteger('capa_id')->unsigned()->comment('Código capa');
            $table->foreign('capa_id')->references('id')->on('master_geodata');
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
        Schema::dropIfExists('campos_geodata');
    }
}
