<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoginteroperabilitypaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pais_interoperability_logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pai_code')->comment('Código PAI');
            $table->unsignedBigInteger('pai_id')->comment('Id PAI');
            $table->foreign('pai_id')->references('id')->on('pais');
            $table->unsignedBigInteger('user_id')->comment('Id User');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('pais_interoperability_logs');
    }
}
