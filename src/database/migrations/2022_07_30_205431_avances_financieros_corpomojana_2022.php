<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AvancesFinancierosCorpomojana2022 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('evidence_financial')->insert([
            'evidence_id' => 18048,
            'activity_source_id' =>7416,
            'value' => 1789603837,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idevidenceFinancialF1 = DB::getPdo()->lastInsertId();
        DB::table('evidence_financial')->insert([
            'evidence_id' => 18051,
            'activity_source_id' =>7419,
            'value' => 2052036230,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idevidenceFinancialF3 = DB::getPdo()->lastInsertId();
        DB::table('evidence_financial')->insert([
            'evidence_id' => 18052,
            'activity_source_id' =>7420,
            'value' => 25820000,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idevidenceFinancialF4 = DB::getPdo()->lastInsertId();
        DB::table('evidence_financial')->insert([
            'evidence_id' => 18055,
            'activity_source_id' =>7423,
            'value' => 410520500,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idevidenceFinancialF7 = DB::getPdo()->lastInsertId();
        DB::table('evidence_financial')->insert([
            'evidence_id' => 18044,
            'activity_source_id' =>7443,
            'value' => 74909549,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idevidenceFinancialF16 = DB::getPdo()->lastInsertId();
        DB::table('evidence_financial')->insert([
            'evidence_id' => 18065,
            'activity_source_id' =>7437,
            'value' => 44481400.3,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idevidenceFinancialF23 = DB::getPdo()->lastInsertId();
        DB::table('evidence_financial')->insert([
            'evidence_id' => 18065,
            'activity_source_id' =>7438,
            'value' => 20062151.7,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idevidenceFinancialF24 = DB::getPdo()->lastInsertId();
        DB::table('evidence_financial')->insert([
            'evidence_id' => 18071,
            'activity_source_id' =>7439,
            'value' => 10000000,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idevidenceFinancialF25 = DB::getPdo()->lastInsertId();
        DB::table('evidence_financial')->insert([
            'evidence_id' => 18074,
            'activity_source_id' =>7440,
            'value' => 103205292.91,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idevidenceFinancialF26 = DB::getPdo()->lastInsertId();
        DB::table('evidence_financial')->insert([
            'evidence_id' => 18074,
            'activity_source_id' =>7441,
            'value' => 36450587.09,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idevidenceFinancialF27 = DB::getPdo()->lastInsertId();
        DB::table('payments')->insert([
            'evidence_id' => 18074,
            'payment' =>false,
            'value' => 15692514,
            'payment_date' => '2022-07-22',
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idPaymentOF26 = DB::getPdo()->lastInsertId();
        DB::table('payments')->insert([
                'evidence_id' => 18051,
                'payment' =>true,
                'value' => 654357957,
                'payment_date' => '2022-07-22',
                'created_at' => '2022-07-22',
                'updated_at' => '2022-07-22'
                ]);
            $idPaymentF3 = DB::getPdo()->lastInsertId();
        DB::table('payments')->insert([
            'evidence_id' => 18044,
            'payment' =>true,
            'value' => 37682074,
            'payment_date' => '2022-07-22',
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idPaymentF16 = DB::getPdo()->lastInsertId();
        DB::table('payments')->insert([
            'evidence_id' => 18065,
            'payment' =>true,
            'value' => 4481400.3,
            'payment_date' => '2022-07-22',
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idPaymentF23 = DB::getPdo()->lastInsertId();
        DB::table('payments')->insert([
            'evidence_id' => 18065,
            'payment' =>true,
            'value' => 18597034.7,
            'payment_date' => '2022-07-22',
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idPaymentF24 = DB::getPdo()->lastInsertId();
        DB::table('payments')->insert([
            'evidence_id' => 18071,
            'payment' =>true,
            'value' => 9158040,
            'payment_date' => '2022-07-22',
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idPaymentF25 = DB::getPdo()->lastInsertId();
        DB::table('payments')->insert([
            'evidence_id' => 18074,
            'payment' =>true,
            'value' => 76145018.91,
            'payment_date' => '2022-07-22',
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idPaymentF26 = DB::getPdo()->lastInsertId();
        DB::table('payments')->insert([
            'evidence_id' => 18074,
            'payment' =>true,
            'value' => 36450587.09,
            'payment_date' => '2022-07-22',
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idPaymentF27 = DB::getPdo()->lastInsertId();
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
