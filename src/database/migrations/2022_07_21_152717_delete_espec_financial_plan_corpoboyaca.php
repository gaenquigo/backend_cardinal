<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteEspecFinancialPlanCorpoboyaca extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('financial_plans')
        ->where([['id', '=', 5236]])
        ->update(['value' => 0,
                 'investment' => 0,
                 'investment_percentage' => 0,
                 'investment_balance' => 0]);
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
