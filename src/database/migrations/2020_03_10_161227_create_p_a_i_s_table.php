<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreatePAISTable
 */
class CreatePAISTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pais', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria, autonumerico');
            $table->string('name')->comment('Nombre PAI');
            $table->date('start_date')->comment('Fecha inicial PAI');
            $table->date('end_date')->comment('Fecha fin PAI');
            $table->string('director_name')->comment('Nombre director CAR');
            $table->boolean('approved')->default(false)->comment('Aprobación PAI');
            $table->unsignedBigInteger('group_id')->comment('CAR PAI');
            $table->foreign('group_id')->references('id')->on('groups');
            $table->timestamps();

            $table->unique(['name', 'group_id'], 'name_group_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pais');
    }
}
