<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixAvanceFinancieroCorpocesar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('evidence_financial')->insert([
            'evidence_id' => 18490,
            'activity_source_id' =>7596,
            'value' => 49687762.5,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idevidenceFinancialF2 = DB::getPdo()->lastInsertId();
        DB::table('payments')->insert([
            'evidence_id' => 18490,
            'payment' =>true,
            'value' => 44392567.05,
            'payment_date' => '2022-07-22',
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
