<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreatePAISHistoryTable
 */
class CreatePAISHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pais_history', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria, autonumerico');
            $table->longText('history')->comment('JSON con la información previamente almacenada del PAI');
            $table->integer('version')->default(1)->comment('Version PAI');
            $table->unsignedBigInteger('parent_id')->nullable()->comment('PAI');
            $table->timestamps();

            $table->foreign('parent_id')->references('id')->on('pais');
//            $table->unique(['parent_id', 'version']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pais_history');
    }
}
