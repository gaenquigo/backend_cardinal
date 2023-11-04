<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancingSourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financing_sources', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria, autonumerico');            
            $table->integer('father_id')->nullable()->comment('Llave foranea, fuentes de financiación Padre->Hijo');
            $table->foreign('father_id')->references('id')->on('financing_sources');
            $table->string('code')->comment('Código cuenta');
            $table->string('name')->comment('Nombre cuenta');
            $table->string('description','2048')->nullable()->comment('Descripción cuenta');
            $table->integer('type_id')->nullable()->comment('Código tipo Dominio');
            $table->foreign('type_id')->references('id')->on('domains');
            $table->boolean('final_level')->nullable()->default(false)->comment('Ultimo nivel');
            $table->boolean('corporation')->nullable()->default(false)->comment('Corporacion');
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
        Schema::dropIfExists('financing_sources');
    }
}
