<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoveltyPAISTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('novelty_pais', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria, autonumerico');
            $table->date('date')->comment('fecha novedad');
            $table->string('file')->comment('archivo adjunto');
            $table->string('agreement_number')->comment('numero acuerdo');
            $table->string('agreement')->comment('acuerdo');
            $table->unsignedBigInteger('pai_id')->nullable()->comment('Código PAI');
            $table->foreign('pai_id')->references('id')->on('pais');
            $table->unsignedBigInteger('group_id')->comment('CAR PAI');
            $table->foreign('group_id')->references('id')->on('groups');
            $table->boolean('complete')->default(false)->comment('Terminado');
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
        Schema::dropIfExists('novelty_pais');
    }
}
