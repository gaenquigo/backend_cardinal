<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAvancesFinancierosCorpocesar extends Migration
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
            'evidence_id' => 18525,
            'activity_source_id' =>16398,
            'value' => 3004650,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
        /*OBLIGACIONES Y PAGOS */
        DB::table('payments')->insert([
            'evidence_id' => 18525,
            'payment' =>true,
            'value' => 312750,
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
