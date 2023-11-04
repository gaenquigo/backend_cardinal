<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFinancialPlanCarsucre extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 178,
            'source_id' => 4049,
            'value' => 0,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 0,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 0,
            'year' => 1,
            ]);
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 178,
            'source_id' => 4049,
            'value' => 0,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 0,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 0,
            'year' => 2,
            ]);
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 178,
            'source_id' => 4049,
            'value' => 209,
            'functioning_percentage' => 100,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 0,
            'functioning' => 209,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 0,
            'year' => 3,
            ]);
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 178,
            'source_id' => 4049,
            'value' => 0,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 0,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 0,
            'year' => 4,
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
