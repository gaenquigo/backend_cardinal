<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixDistribucionCorpocesar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('activity_sources')->insert([
            'activity_id' => 14269,
            'source_id' =>7596,
            'value' => 200000000,
            'evidence_balance' => 200000000,
            'goal' => 0,
            'age' => 3,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
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
