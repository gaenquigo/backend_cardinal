<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixCraFinancialPlan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('financial_plans')->insert([
            /// Se debe asegurar que los datos esten en la base de datos o restaurar el backup de la BD
            'p_a_i_id' => 70,
            'source_id' => 1720,
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
            'year' => 4,
            'created_at' => '2022-05-18 12:05:12',
            'updated_at' => '2022-05-18 12:05:12',
            'financial_plan_code' => null
        ]);
        DB::table('financial_plans')->insert([
            /// Se debe asegurar que los datos esten en la base de datos o restaurar el backup de la BD
            'p_a_i_id' => 70,
            'source_id' => 1722,
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
            'year' => 4,
            'created_at' => '2022-05-18 12:05:19',
            'updated_at' => '2022-05-18 12:05:19',
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
