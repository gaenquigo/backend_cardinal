<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddInternalStatusToPais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pais', function (Blueprint $table) {
            $table->smallInteger('internal_status')->nullable()->comment('Internal Status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pais', function (Blueprint $table) {
            $table->dropColumn('internal_status');
        });
    }
}
