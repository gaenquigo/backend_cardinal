<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStrategicLineCodeToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('strategic_lines', function (Blueprint $table) {
            $table->string('strategic_line_code', 500)->nullable()->comment('Código Linea Estrategica');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('strategic_lines', function (Blueprint $table) {
            $table->dropColumn('strategic_line_code');
        });
    }
}
