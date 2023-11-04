<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdicionAvancesFinancierosCorpomojana2022 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('evidence_financial')->insert([
            'evidence_id' => 18064,
            'activity_source_id' =>7435,
            'value' => 18374663.1,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idevidenceFinancialF20 = DB::getPdo()->lastInsertId();
        DB::table('evidence_financial')->insert([
            'evidence_id' => 18064,
            'activity_source_id' =>7432,
            'value' => 979331.1,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idevidenceFinancialF21 = DB::getPdo()->lastInsertId();
        /*OBLIGADO*/
        DB::table('payments')->insert([
            'evidence_id' => 18064,
            'payment' =>false,
            'value' => 546968.100000001,
            'payment_date' => '2022-07-22',
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idPaymentOF20 = DB::getPdo()->lastInsertId();
        DB::table('payments')->insert([
            'evidence_id' => 18064,
            'payment' =>false,
            'value' => 979331.1,
            'payment_date' => '2022-07-22',
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idPaymentOF21 = DB::getPdo()->lastInsertId();
        /*PAGADO*/
        DB::table('payments')->insert([
            'evidence_id' => 18064,
            'payment' =>true,
            'value' => 17827695,
            'payment_date' => '2022-07-22',
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
            $idPaymentF20 = DB::getPdo()->lastInsertId();
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
