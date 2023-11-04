<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AupdateNovelityCrcCorpoboyaca extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        #corpoboyacá
        DB::table('novelty_pais')
        ->where([['id', '=', 8]])
        ->update(['date' => '2021-12-22']);
        #crc
        DB::table('novelty_pais')
        ->where([['id', '=', 9]])
        ->update(['date' => '2021-12-20']);
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
