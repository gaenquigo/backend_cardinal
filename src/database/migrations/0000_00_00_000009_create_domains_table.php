<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domains', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria, autonumerico');
            $table->string('domain', '255')->nullable()->comment('Nombre Dominio');
            $table->unsignedBigInteger('father_id')->nullable()->comment('Llave foranea, Dominio');
            $table->foreign('father_id')
            ->references('id')
            ->on('domains');
            $table->string('name', '512')->comment('Nombre del Dominio');
            $table->string('description','512')->nullable()->comment('Descripción del Dominio');
            $table->boolean('state')->default(true)->comment('Estado Dominio');
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
        Schema::dropIfExists('domains');
    }
}
