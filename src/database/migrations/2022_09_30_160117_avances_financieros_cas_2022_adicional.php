<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AvancesFinancierosCas2022Adicional extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('evidence_financial')->insert([
            'evidence_id' => 22085,
            'activity_source_id' =>11269,
            'value' => 198839882,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idevidenceFinancialF46 = DB::getPdo()->lastInsertId();
        DB::table('evidence_financial')->insert([
            'evidence_id' => 22086,
            'activity_source_id' =>11293,
            'value' => 1033108628,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idevidenceFinancialF2 = DB::getPdo()->lastInsertId();
        DB::table('evidence_financial')->insert([
            'evidence_id' => 22087,
            'activity_source_id' =>11321,
            'value' => 371390999,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idevidenceFinancialF = DB::getPdo()->lastInsertId();
        DB::table('evidence_financial')->insert([
            'evidence_id' => 22087,
            'activity_source_id' =>11320,
            'value' => 118371618,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idevidenceFinancialF8 = DB::getPdo()->lastInsertId();
        DB::table('evidence_financial')->insert([
            'evidence_id' => 22088,
            'activity_source_id' =>11346,
            'value' => 593503404,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idevidenceFinancialF101 = DB::getPdo()->lastInsertId();
        DB::table('evidence_financial')->insert([
            'evidence_id' => 22089,
            'activity_source_id' =>11357,
            'value' => 420991325,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idevidenceFinancialF22 = DB::getPdo()->lastInsertId();
        DB::table('evidence_financial')->insert([
            'evidence_id' => 22090,
            'activity_source_id' =>11363,
            'value' => 51247494,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idevidenceFinancialF6 = DB::getPdo()->lastInsertId();
        DB::table('evidence_financial')->insert([
            'evidence_id' => 22091,
            'activity_source_id' =>11366,
            'value' => 330114380,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idevidenceFinancialF23 = DB::getPdo()->lastInsertId();
        DB::table('evidence_financial')->insert([
            'evidence_id' => 22092,
            'activity_source_id' =>11377,
            'value' => 464317711,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idevidenceFinancialF24 = DB::getPdo()->lastInsertId();
        DB::table('evidence_financial')->insert([
            'evidence_id' => 22093,
            'activity_source_id' =>11384,
            'value' => 3044490867,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idevidenceFinancialF42 = DB::getPdo()->lastInsertId();
        DB::table('payments')->insert([
            'evidence_id' => 22085,
            'payment' =>false,
            'value' => 2435343,
            'payment_date' => '2022-07-22',
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idPaymentOF46 = DB::getPdo()->lastInsertId();
        DB::table('payments')->insert([
            'evidence_id' => 22086,
            'payment' =>false,
            'value' => 3081770,
            'payment_date' => '2022-07-22',
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idPaymentOF2 = DB::getPdo()->lastInsertId();
        DB::table('payments')->insert([
            'evidence_id' => 22087,
            'payment' =>false,
            'value' => 3582351,
            'payment_date' => '2022-07-22',
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idPaymentOF = DB::getPdo()->lastInsertId();
        
        
        DB::table('payments')->insert([
            'evidence_id' => 22089,
            'payment' =>false,
            'value' => 1650000,
            'payment_date' => '2022-07-22',
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idPaymentOF22 = DB::getPdo()->lastInsertId();
        
        
        DB::table('payments')->insert([
            'evidence_id' => 22092,
            'payment' =>false,
            'value' => 6276619,
            'payment_date' => '2022-07-22',
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idPaymentOF24 = DB::getPdo()->lastInsertId();
        DB::table('payments')->insert([
            'evidence_id' => 22093,
            'payment' =>false,
            'value' => 17196626,
            'payment_date' => '2022-07-22',
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idPaymentOF42 = DB::getPdo()->lastInsertId();
        DB::table('payments')->insert([
            'evidence_id' => 22085,
            'payment' =>true,
            'value' => 163546380,
            'payment_date' => '2022-07-22',
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idPaymentF46 = DB::getPdo()->lastInsertId();
        DB::table('payments')->insert([
            'evidence_id' => 22086,
            'payment' =>true,
            'value' => 948489112,
            'payment_date' => '2022-07-22',
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idPaymentF2 = DB::getPdo()->lastInsertId();
        DB::table('payments')->insert([
            'evidence_id' => 22087,
            'payment' =>true,
            'value' => 307614863,
            'payment_date' => '2022-07-22',
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idPaymentF = DB::getPdo()->lastInsertId();
        DB::table('payments')->insert([
            'evidence_id' => 22087,
            'payment' =>true,
            'value' => 96048247,
            'payment_date' => '2022-07-22',
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idPaymentF8 = DB::getPdo()->lastInsertId();
        DB::table('payments')->insert([
            'evidence_id' => 22088,
            'payment' =>true,
            'value' => 466937845,
            'payment_date' => '2022-07-22',
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idPaymentF101 = DB::getPdo()->lastInsertId();
        DB::table('payments')->insert([
            'evidence_id' => 22089,
            'payment' =>true,
            'value' => 337842530,
            'payment_date' => '2022-07-22',
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idPaymentF22 = DB::getPdo()->lastInsertId();
        DB::table('payments')->insert([
            'evidence_id' => 22090,
            'payment' =>true,
            'value' => 48017874,
            'payment_date' => '2022-07-22',
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idPaymentF6 = DB::getPdo()->lastInsertId();
        DB::table('payments')->insert([
            'evidence_id' => 22091,
            'payment' =>true,
            'value' => 278202928,
            'payment_date' => '2022-07-22',
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idPaymentF23 = DB::getPdo()->lastInsertId();
        DB::table('payments')->insert([
            'evidence_id' => 22092,
            'payment' =>true,
            'value' => 414826431,
            'payment_date' => '2022-07-22',
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idPaymentF24 = DB::getPdo()->lastInsertId();
        DB::table('payments')->insert([
            'evidence_id' => 22093,
            'payment' =>true,
            'value' => 1885536343,
            'payment_date' => '2022-07-22',
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idPaymentF42 = DB::getPdo()->lastInsertId();
        
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
