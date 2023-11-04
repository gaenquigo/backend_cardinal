<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixActivitySourcesCra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
        --update actividad 11671
        update cardinal.activity_sources
        set value = evidence_balance
        where id = 11730;
        --
        update cardinal.activity_sources
        set value = evidence_balance
        where id = 11731;
        --
        update cardinal.activity_sources
        set value = evidence_balance
        where id = 11733;
        --
        update cardinal.activity_sources
        set value = evidence_balance
        where id = 11734;
        --update actividad 11731
        update cardinal.activity_sources
        set value = evidence_balance
        where id = 11784;
        --update actividad 11736
        update cardinal.activity_sources
        set value = evidence_balance
        where id = 11789;
        --update actividad 11752
        update cardinal.activity_sources
        set value = evidence_balance
        where id = 11802;
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
