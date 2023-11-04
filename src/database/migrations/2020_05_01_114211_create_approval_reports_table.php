<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprovalReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approval_reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('pai_id')->nullable()->comment('Código PAI');
            $table->foreign('pai_id')->references('id')->on('pais');
            $table->string('file')->comment('archivo adjunto');
            $table->date('date')->comment('fecha aprobacion');
            $table->string('agreement')->comment('acuerdo');
            $table->unsignedBigInteger('group_id')->comment('CAR PAI');
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
        Schema::dropIfExists('approval_reports');
    }
}
