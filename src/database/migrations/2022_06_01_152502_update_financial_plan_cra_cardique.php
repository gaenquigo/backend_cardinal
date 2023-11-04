<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateFinancialPlanCraCardique extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //actualización de plan financiero cra
        DB::table('financial_plans')
        ->where([['id', '=', 3855]])
        ->update(['fund_percentage' => 0,
                  'fund' => 0,
                  'fund_balance' => 0,
                  'investment_percentage' => 10,
                  'investment' => 2352761.2,
                  'investment_balance' => 2352761.2]);
        //Tasa retributiva (vigencia actual)
        DB::table('financial_plans')
        ->where([['id', '=', 3798]])
        ->update(['investment_balance' => 6295939992]);
        //Tasa por el uso del agua (vigencia actual)
        DB::table('financial_plans')
        ->where([['id', '=', 3810]])
        ->update(['investment_balance' => 645202124.1]);
        //se adiciona en cardique el plan financiero para el año 2
        //de la fuente Sobretasa ambiental - Peajes (vigencia actual)
        DB::table('financial_plans')->insert([
        'p_a_i_id' => 116,
        'source_id' => 410,
        'value' => 0,
        'investment_percentage' => 0,
        'investment' => 0,
        'investment_balance' => 0,
        'functioning_percentage' => 0,
        'functioning' => 0,
        'functioning_balance' => 0,
        'debt_service_percentage' => 0,
        'debt_service' => 0,
        'debt_service_balance' => 0,
        'fund_percentage' => 0,
        'fund' => 0,
        'fund_balance' => 0,
        'year' => 2,
        'created_at' => '2022-05-23 15:33:10',
        'updated_at' => '2022-05-23 15:33:10',
        'financial_plan_code' => null
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
