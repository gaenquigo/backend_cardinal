<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PlanFinancieroCorpoguajira2022 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 193,
            'source_id' => 3891,
            'value' => 5110813000,
            'functioning_percentage' => 24.9019389263978,
            'debt_service_percentage' => 0,
            'fund_percentage' => 12.1502195443269,
            'investment_percentage' => 62.9483215292753,
            'functioning' => 1272667000,
            'debt_service' => 0,
            'fund' => 620975000,
            'investment' => 3217171000,
            'year' => 3,
            ]);
            $idPlanAniotres = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 193,
            'source_id' => 3892,
            'value' => 241537869,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 100,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 241537869,
            'year' => 3,
            ]);
            $idPlanAniotres = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 193,
            'source_id' => 3893,
            'value' => 871092000,
            'functioning_percentage' => 1.60717811666276,
            'debt_service_percentage' => 0,
            'fund_percentage' => 9.18387495235865,
            'investment_percentage' => 89.2089469309786,
            'functioning' => 14000000,
            'debt_service' => 0,
            'fund' => 80000000,
            'investment' => 777092000,
            'year' => 3,
            ]);
            $idPlanAniotres = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 193,
            'source_id' => 3894,
            'value' => 6584938000,
            'functioning_percentage' => 50,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 50,
            'functioning' => 3292469000,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 3292469000,
            'year' => 3,
            ]);
            $idPlanAniotres = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 193,
            'source_id' => 3895,
            'value' => 400000000,
            'functioning_percentage' => 7.5,
            'debt_service_percentage' => 0,
            'fund_percentage' => 10,
            'investment_percentage' => 82.5,
            'functioning' => 30000000,
            'debt_service' => 0,
            'fund' => 40000000,
            'investment' => 330000000,
            'year' => 3,
            ]);
            $idPlanAniotres = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 193,
            'source_id' => 3896,
            'value' => 3476872569,
            'functioning_percentage' => 1.43807398769236,
            'debt_service_percentage' => 0,
            'fund_percentage' => 7.85576677256704,
            'investment_percentage' => 90.7061592400282,
            'functioning' => 50000000,
            'debt_service' => 0,
            'fund' => 273135000,
            'investment' => 3153737569.01,
            'year' => 3,
            ]);
            $idPlanAniotres = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 193,
            'source_id' => 3898,
            'value' => 4430606342,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 100,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 4430606342,
            'year' => 3,
            ]);
            $idPlanAniotres = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 193,
            'source_id' => 3900,
            'value' => 36422598925,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 100,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 36422598925,
            'year' => 3,
            ]);
            $idPlanAniotres = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 193,
            'source_id' => 3891,
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
            $idPlanAniouno = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 193,
            'source_id' => 3892,
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
            $idPlanAniouno = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 193,
            'source_id' => 3893,
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
            $idPlanAniouno = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 193,
            'source_id' => 3894,
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
            $idPlanAniouno = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 193,
            'source_id' => 3895,
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
            $idPlanAniouno = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 193,
            'source_id' => 3896,
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
            $idPlanAniouno = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 193,
            'source_id' => 3898,
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
            $idPlanAniouno = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 193,
            'source_id' => 3900,
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
            $idPlanAniouno = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 193,
            'source_id' => 3891,
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
            $idPlanAniodos = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 193,
            'source_id' => 3892,
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
            $idPlanAniodos = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 193,
            'source_id' => 3893,
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
            $idPlanAniodos = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 193,
            'source_id' => 3894,
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
            $idPlanAniodos = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 193,
            'source_id' => 3895,
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
            $idPlanAniodos = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 193,
            'source_id' => 3896,
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
            $idPlanAniodos = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 193,
            'source_id' => 3898,
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
            $idPlanAniodos = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 193,
            'source_id' => 3900,
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
            $idPlanAniodos = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 193,
            'source_id' => 3891,
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
            $idPlanAniocuatro = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 193,
            'source_id' => 3892,
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
            $idPlanAniocuatro = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 193,
            'source_id' => 3893,
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
            $idPlanAniocuatro = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 193,
            'source_id' => 3894,
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
            $idPlanAniocuatro = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 193,
            'source_id' => 3895,
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
            $idPlanAniocuatro = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 193,
            'source_id' => 3896,
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
            $idPlanAniocuatro = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 193,
            'source_id' => 3898,
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
            $idPlanAniocuatro = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 193,
            'source_id' => 3900,
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
            $idPlanAniocuatro = DB::getPdo()->lastInsertId();
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
