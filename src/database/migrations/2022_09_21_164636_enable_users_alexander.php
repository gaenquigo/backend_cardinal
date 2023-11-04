<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EnableUsersAlexander extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
        update cardinal.users
        set active = 1
        where id in(
        select u.id from cardinal.users u
        where u.group_id in(21,27,12,14,18,31,4,24)
        and u.email not like '%@test.com');
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
