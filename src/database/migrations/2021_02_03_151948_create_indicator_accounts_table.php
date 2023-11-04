<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndicatorAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicator_accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->smallInteger('account_ppta_id')->nullable();
            $table->smallInteger('account_id')->nullable();
            $table->unsignedBigInteger('financing_source_id')->nullable()->comment('Código indicador');
            $table->foreign('financing_source_id')->references('id')->on('financing_sources');
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
        Schema::dropIfExists('indicator_accounts');
    }
}
