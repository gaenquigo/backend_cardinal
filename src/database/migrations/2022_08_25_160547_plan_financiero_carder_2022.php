<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PlanFinancieroCarder2022 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 150,
            'source_id' => 3775,
            'value' => 38687014779,
            'functioning_percentage' => 27.9250061259941,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 72.0749938740059,
            'functioning' => 10803351247,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 27883663532,
            'year' => 3,
            ]);
            $idPlanAniotres = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 150,
            'source_id' => 3868,
            'value' => 9367994240,
            'functioning_percentage' => 16.5037219749614,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 83.4962780250386,
            'functioning' => 1546067724,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 7821926516,
            'year' => 3,
            ]);
            $idPlanAniotres = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 150,
            'source_id' => 3869,
            'value' => 15644000000,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 100,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 15644000000,
            'year' => 3,
            ]);
            $idPlanAniotres = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 150,
            'source_id' => 3870,
            'value' => 1977125568,
            'functioning_percentage' => 19.8381690747525,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 80.1618309252475,
            'functioning' => 392225513,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 1584900055,
            'year' => 3,
            ]);
            $idPlanAniotres = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 150,
            'source_id' => 3871,
            'value' => 1716266408,
            'functioning_percentage' => 9.97669360664897,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 90.023306393351,
            'functioning' => 171226641,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 1545039767,
            'year' => 3,
            ]);
            $idPlanAniotres = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 150,
            'source_id' => 3872,
            'value' => 360000000,
            'functioning_percentage' => 13.75,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 86.25,
            'functioning' => 49500000,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 310500000,
            'year' => 3,
            ]);
            $idPlanAniotres = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 150,
            'source_id' => 3873,
            'value' => 178675720,
            'functioning_percentage' => 0.637343451029608,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 99.3626565489704,
            'functioning' => 1138778,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 177536942,
            'year' => 3,
            ]);
            $idPlanAniotres = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 150,
            'source_id' => 3876,
            'value' => 56620000,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 100,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 56620000,
            'year' => 3,
            ]);
            $idPlanAniotres = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 150,
            'source_id' => 3775,
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
            'p_a_i_id' => 150,
            'source_id' => 3868,
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
            'p_a_i_id' => 150,
            'source_id' => 3869,
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
            'p_a_i_id' => 150,
            'source_id' => 3870,
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
            'p_a_i_id' => 150,
            'source_id' => 3871,
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
            'p_a_i_id' => 150,
            'source_id' => 3872,
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
            'p_a_i_id' => 150,
            'source_id' => 3873,
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
            'p_a_i_id' => 150,
            'source_id' => 3876,
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
            'p_a_i_id' => 150,
            'source_id' => 3775,
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
            'p_a_i_id' => 150,
            'source_id' => 3868,
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
            'p_a_i_id' => 150,
            'source_id' => 3869,
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
            'p_a_i_id' => 150,
            'source_id' => 3870,
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
            'p_a_i_id' => 150,
            'source_id' => 3871,
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
            'p_a_i_id' => 150,
            'source_id' => 3872,
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
            'p_a_i_id' => 150,
            'source_id' => 3873,
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
            'p_a_i_id' => 150,
            'source_id' => 3876,
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
            'p_a_i_id' => 150,
            'source_id' => 3775,
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
            'p_a_i_id' => 150,
            'source_id' => 3868,
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
            'p_a_i_id' => 150,
            'source_id' => 3869,
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
            'p_a_i_id' => 150,
            'source_id' => 3870,
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
            'p_a_i_id' => 150,
            'source_id' => 3871,
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
            'p_a_i_id' => 150,
            'source_id' => 3872,
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
            'p_a_i_id' => 150,
            'source_id' => 3873,
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
            'p_a_i_id' => 150,
            'source_id' => 3876,
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
