<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixAvancesFinancierosCorpamag2022 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('evidence_financial')->insert([
            'evidence_id' => 19502,
            'activity_source_id' =>16399,
            'value' => 300000000,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idevidenceFinancialF1 = DB::getPdo()->lastInsertId();
        DB::table('evidence_financial')->insert([
            'evidence_id' => 19503,
            'activity_source_id' =>16400,
            'value' => 5413481,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idevidenceFinancialF2 = DB::getPdo()->lastInsertId();
        DB::table('evidence_financial')->insert([
            'evidence_id' => 19506,
            'activity_source_id' =>16403,
            'value' => 100000000,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idevidenceFinancialF5 = DB::getPdo()->lastInsertId();
        DB::table('evidence_financial')->insert([
            'evidence_id' => 19522,
            'activity_source_id' =>16418,
            'value' => 100000000,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idevidenceFinancialF22 = DB::getPdo()->lastInsertId();
        DB::table('evidence_financial')->insert([
            'evidence_id' => 19527,
            'activity_source_id' =>16422,
            'value' => 20000000,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idevidenceFinancialF24 = DB::getPdo()->lastInsertId();
        DB::table('evidence_financial')->insert([
            'evidence_id' => 19540,
            'activity_source_id' =>16434,
            'value' => 397906820,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idevidenceFinancialF36 = DB::getPdo()->lastInsertId();
        DB::table('evidence_financial')->insert([
            'evidence_id' => 19549,
            'activity_source_id' =>16443,
            'value' => 280000000,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idevidenceFinancialF46 = DB::getPdo()->lastInsertId();
        DB::table('evidence_financial')->insert([
            'evidence_id' => 19554,
            'activity_source_id' =>16447,
            'value' => 1000000000,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idevidenceFinancialF49 = DB::getPdo()->lastInsertId();
        DB::table('evidence_financial')->insert([
            'evidence_id' => 19572,
            'activity_source_id' =>16463,
            'value' => 200000000,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idevidenceFinancialF63 = DB::getPdo()->lastInsertId();
        DB::table('evidence_financial')->insert([
            'evidence_id' => 19573,
            'activity_source_id' =>16464,
            'value' => 100000000,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idevidenceFinancialF66 = DB::getPdo()->lastInsertId();
        DB::table('evidence_financial')->insert([
            'evidence_id' => 19502,
            'activity_source_id' =>16399,
            'value' => 300000000,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idevidenceFinancialF1 = DB::getPdo()->lastInsertId();
        DB::table('evidence_financial')->insert([
            'evidence_id' => 19506,
            'activity_source_id' =>16403,
            'value' => 100000000,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idevidenceFinancialF5 = DB::getPdo()->lastInsertId();
        DB::table('evidence_financial')->insert([
            'evidence_id' => 19522,
            'activity_source_id' =>16418,
            'value' => 100000000,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idevidenceFinancialF22 = DB::getPdo()->lastInsertId();
        DB::table('evidence_financial')->insert([
            'evidence_id' => 19540,
            'activity_source_id' =>16434,
            'value' => 397906820,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idevidenceFinancialF36 = DB::getPdo()->lastInsertId();
        DB::table('evidence_financial')->insert([
            'evidence_id' => 19549,
            'activity_source_id' =>16443,
            'value' => 280000000,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idevidenceFinancialF46 = DB::getPdo()->lastInsertId();
        DB::table('payments')->insert([
            'evidence_id' => 19502,
            'payment' =>true,
            'value' => 103600000,
            'payment_date' => '2022-07-22',
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idPaymentF1 = DB::getPdo()->lastInsertId();
        DB::table('payments')->insert([
            'evidence_id' => 19506,
            'payment' =>true,
            'value' => 41200000,
            'payment_date' => '2022-07-22',
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idPaymentF5 = DB::getPdo()->lastInsertId();
        DB::table('payments')->insert([
            'evidence_id' => 19522,
            'payment' =>true,
            'value' => 46028107,
            'payment_date' => '2022-07-22',
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idPaymentF22 = DB::getPdo()->lastInsertId();
        DB::table('payments')->insert([
            'evidence_id' => 19540,
            'payment' =>true,
            'value' => 344517164,
            'payment_date' => '2022-07-22',
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idPaymentF36 = DB::getPdo()->lastInsertId();
        DB::table('payments')->insert([
            'evidence_id' => 19549,
            'payment' =>true,
            'value' => 140000000,
            'payment_date' => '2022-07-22',
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idPaymentF46 = DB::getPdo()->lastInsertId();
        
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
