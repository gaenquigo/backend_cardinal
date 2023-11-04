<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixFinanceSource extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('financing_sources')->where([['code', '=', '1.2.7.4']])->update(['final_level' => FALSE]);
        DB::table('financing_sources')->where([['code', '=', '1.3']])->update(['final_level' => FALSE]);
        DB::table('financing_sources')->where([['code', '=', '1.2.2.7']])->update(['final_level' => FALSE]);
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
