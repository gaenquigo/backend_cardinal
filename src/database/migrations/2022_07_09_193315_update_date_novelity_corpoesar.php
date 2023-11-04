<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateDateNovelityCorpoesar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('novelty_pais')
        ->where([['id', '=', 6]])
        ->update(['date' => '2021-07-26']);

        DB::table('novelty_pais')
        ->where([['id', '=', 7]])
        ->update(['date' => '2021-12-10']);
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
