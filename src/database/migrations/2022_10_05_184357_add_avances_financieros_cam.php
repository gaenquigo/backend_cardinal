<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAvancesFinancierosCam extends Migration
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
            'evidence_id' => 17693,
            'activity_source_id' =>6735,
            'value' => 42472397,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
        DB::table('evidence_financial')->insert([
            'evidence_id' => 17695,
            'activity_source_id' =>6772,
            'value' => 60018189,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
        DB::table('evidence_financial')->insert([
            'evidence_id' => 17329,
            'activity_source_id' =>6796,
            'value' => 504483346,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
        DB::table('evidence_financial')->insert([
            'evidence_id' => 17329,
            'activity_source_id' =>6793,
            'value' => 191542956,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
        DB::table('evidence_financial')->insert([
            'evidence_id' => 17329,
            'activity_source_id' =>6794,
            'value' => 103978258,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
        DB::table('evidence_financial')->insert([
            'evidence_id' => 17329,
            'activity_source_id' =>6797,
            'value' => 76965941,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
        /*OBLIGACIONES Y PAGOS */
        DB::table('payments')->insert([
            'evidence_id' => 17693,
            'payment' =>false,
            'value' => 42472397,
            'payment_date' => '2022-07-22',
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
        DB::table('payments')->insert([
            'evidence_id' => 17695,
            'payment' =>false,
            'value' => 1351,
            'payment_date' => '2022-07-22',
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
        DB::table('payments')->insert([
            'evidence_id' => 17695,
            'payment' =>true,
            'value' => 40303731,
            'payment_date' => '2022-07-22',
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
        DB::table('payments')->insert([
            'evidence_id' => 17329,
            'payment' =>false,
            'value' => 17422894,
            'payment_date' => '2022-07-22',
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
        DB::table('payments')->insert([
            'evidence_id' => 17329,
            'payment' =>true,
            'value' => 486650484,
            'payment_date' => '2022-07-22',
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
        DB::table('payments')->insert([
            'evidence_id' => 17329,
            'payment' =>true,
            'value' => 191542956,
            'payment_date' => '2022-07-22',
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
        DB::table('payments')->insert([
            'evidence_id' => 17329,
            'payment' =>true,
            'value' => 103978258,
            'payment_date' => '2022-07-22',
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
        DB::table('payments')->insert([
            'evidence_id' => 17329,
            'payment' =>true,
            'value' => 76965941,
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
