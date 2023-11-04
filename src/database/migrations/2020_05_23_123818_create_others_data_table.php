<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOthersDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('other_data', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria, autonumerico');
            $table->string('variable_name')->comment('Nombre variable');
            $table->unsignedBigInteger('type')->comment('Código tipo Numero/Caracter, dominio');
            $table->foreign('type')->references('id')->on('domains');
            $table->string('value')->nullable()->comment('Valor');
            $table->unsignedBigInteger('indicator_id')->nullable()->comment('Código indicador');
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
        Schema::dropIfExists('others_data');
    }
}
