<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndicatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicators', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria, autonumerico');
            $table->unsignedBigInteger('type')->unsigned()->comment('Código tipo, dominio');
            $table->foreign('type')->references('id')->on('domains');
            $table->unsignedBigInteger('calcule_type')->unsigned()->comment('código tipo calculo, dominio');
            $table->foreign('calcule_type')->references('id')->on('domains');
            $table->unsignedBigInteger('category_type')->nullable()->unsigned()->comment('código tipo categoría, dominio');
            $table->foreign('category_type')->references('id')->on('domains');
            $table->string('name',512)->comment('Nombre indicador');
            $table->string('abbreviated_name')->comment('Nombre abreviado indicador');
            $table->string('definition',1000)->comment('Definición indicador');
            $table->string('url')->nullable()->comment('URL indicador');
            $table->unsignedBigInteger('unit_id')->nullable()->unsigned()->comment('Código unidad, dominio');
            $table->foreign('unit_id')->references('id')->on('domains');
            $table->string('result_name',512)->nullable()->comment('Nombre resultado');
            $table->string('complementary_result',512)->nullable()->comment('Resultado complementario');
            $table->boolean('complementary_in')->nullable()->comment('Resultado complementario donde solicitarlo');
            $table->boolean('calcule_in')->nullable()->comment('Calculo donde realizarlo');
            $table->integer('parent_id')->nullable()->comment('Cuenta Padre');
            $table->foreign('parent_id')->references('id')->on('financing_sources');
            $table->integer('group_id')->nullable()->comment('Car modifica');
            $table->foreign('group_id')->references('id')->on('groups');
            $table->string('geom')->default(0)->comment('Geometria de la capa asociada a este indicador');
            $table->string('label')->default('')->comment('Etiqueta para informes de gestion');
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
        Schema::dropIfExists('indicators');
    }
}
