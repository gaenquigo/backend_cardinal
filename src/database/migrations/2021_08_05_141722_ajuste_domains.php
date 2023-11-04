<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjusteDomains extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('pais')->where([['id', '=', '251']])->update(['group_id' => '34']);
        DB::table('domains')->where([['name', '=', 'SEGUNDO_SEMESTRE']])->update(['description' => '01-07,31-12,28-02']);
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
