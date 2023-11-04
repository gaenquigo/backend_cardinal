<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjustePAI extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('pais')->where([
            ['id', '=', '35'],
        ])->update(['group_id' => '23']);
        DB::table('pais')->where([
            ['id', '=', '48'],
        ])->update(['group_id' => '23']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
