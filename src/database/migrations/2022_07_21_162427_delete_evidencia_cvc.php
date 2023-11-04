<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteEvidenciaCvc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('indicator_activities')
        ->where([['evidence_id', '=', 15484]])
        ->delete();
        DB::table('evidence_financial')
        ->where([['evidence_id', '=', 15484]])
        ->delete();
        DB::table('activity_sources_history')
        ->where([['id', '=', 154]])
        ->delete();
        DB::table('activity_sources')
        ->where([['id', '=', 6720]])
        ->delete();
        DB::table('evidence_advance')
        ->where([['id', '=', 15484]])
        ->delete();
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
