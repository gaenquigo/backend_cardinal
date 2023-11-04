<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjusteFinancingSourceTransversal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
        update cardinal.financing_sources
        set code = '1.1.1.1.1'
        where id = 8;
        update cardinal.financing_sources
        set code = '1.1.1.1.1.1'
        where id = 9;
        ");
        
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
