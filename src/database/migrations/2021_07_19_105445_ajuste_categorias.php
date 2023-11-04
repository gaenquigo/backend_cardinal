<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjusteCategorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('indicator_activities')->where([['id', '=', '115'],])->update(['variable_id' => '45']);
        DB::table('activities')->where([['id', '=', '4627'],])->update(['variable_id' => '45']);
        DB::table('indicador_geodata')->where([['variable_id', '=', '44'],])->delete();
        DB::table('variables')->where([['id', '=', '44'],])->delete();
        
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
