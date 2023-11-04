<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Add2AvancesFinancierosCam extends Migration
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
            'evidence_id' => 22263,
            'activity_source_id' =>6770,
            'value' => 50613527,
            'created_at' => '2022-07-22',
            'updated_at' => '2022-07-22'
            ]);
        /*OBLIGACIONES Y PAGOS */
        DB::table('payments')->insert([
            'evidence_id' => 22263,
            'payment' =>true,
            'value' => 41211552,
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
