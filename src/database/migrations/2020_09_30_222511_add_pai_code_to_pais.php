<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPaiCodeToPais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pais', function (Blueprint $table) {
            $table->string('pai_code', 500)->nullable()->comment('Código PAI');
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
            $table->dropColumn('pai_code');
        });
    }
}
