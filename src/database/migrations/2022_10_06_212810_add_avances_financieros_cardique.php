<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAvancesFinancierosCardique extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*COMPROMISOS*/
        DB::table('evidence_financial')->insert([
            'evidence_id' => 20122,
            'activity_source_id' =>10636,
            'value' => 880301557.52,
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
