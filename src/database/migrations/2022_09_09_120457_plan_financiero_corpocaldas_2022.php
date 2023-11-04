<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PlanFinancieroCorpocaldas2022 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*ANIO 3*/
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3978,
	'value' => 32836000000,
	'functioning_percentage' => 19.2203678889024,
	'debt_service_percentage' => 17.1184066268729,
	'fund_percentage' => 0,
	'investment_percentage' => 63.6612254842246,
	'functioning' => 6311200000,
	'debt_service' => 5621000000,
	'fund' => 0,
	'investment' => 20903800000,
	'year' => 3,
	]);
	$idPlanAniotres1 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3979,
	'value' => 7348100000,
	'functioning_percentage' => 0,
	'debt_service_percentage' => 0,
	'fund_percentage' => 9.4316898245805,
	'investment_percentage' => 90.5683101754195,
	'functioning' => 0,
	'debt_service' => 0,
	'fund' => 693050000,
	'investment' => 6655050000,
	'year' => 3,
	]);
	$idPlanAniotres2 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3980,
	'value' => 200000000,
	'functioning_percentage' => 0,
	'debt_service_percentage' => 0,
	'fund_percentage' => 10,
	'investment_percentage' => 90,
	'functioning' => 0,
	'debt_service' => 0,
	'fund' => 20000000,
	'investment' => 180000000,
	'year' => 3,
	]);
	$idPlanAniotres3 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3981,
	'value' => 700000000,
	'functioning_percentage' => 40,
	'debt_service_percentage' => 0,
	'fund_percentage' => 10,
	'investment_percentage' => 50,
	'functioning' => 280000000,
	'debt_service' => 0,
	'fund' => 70000000,
	'investment' => 350000000,
	'year' => 3,
	]);
	$idPlanAniotres4 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 663,
	'value' => 487000000,
	'functioning_percentage' => 0,
	'debt_service_percentage' => 0,
	'fund_percentage' => 0,
	'investment_percentage' => 100,
	'functioning' => 0,
	'debt_service' => 0,
	'fund' => 0,
	'investment' => 487000000,
	'year' => 3,
	]);
	$idPlanAniotres5 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3982,
	'value' => 5859000000,
	'functioning_percentage' => 10,
	'debt_service_percentage' => 0,
	'fund_percentage' => 20,
	'investment_percentage' => 70,
	'functioning' => 585900000,
	'debt_service' => 0,
	'fund' => 1171800000,
	'investment' => 4101300000,
	'year' => 3,
	]);
	$idPlanAniotres6 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3983,
	'value' => 4204227839,
	'functioning_percentage' => 0,
	'debt_service_percentage' => 0,
	'fund_percentage' => 0,
	'investment_percentage' => 100,
	'functioning' => 0,
	'debt_service' => 0,
	'fund' => 0,
	'investment' => 4204227839,
	'year' => 3,
	]);
	$idPlanAniotres7 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3984,
	'value' => 3500185924,
	'functioning_percentage' => 15.3616913693982,
	'debt_service_percentage' => 0,
	'fund_percentage' => 0,
	'investment_percentage' => 84.6383086306018,
	'functioning' => 537687759,
	'debt_service' => 0,
	'fund' => 0,
	'investment' => 2962498165,
	'year' => 3,
	]);
	$idPlanAniotres8 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3985,
	'value' => 951178343,
	'functioning_percentage' => 0,
	'debt_service_percentage' => 0,
	'fund_percentage' => 0,
	'investment_percentage' => 100,
	'functioning' => 0,
	'debt_service' => 0,
	'fund' => 0,
	'investment' => 951178343,
	'year' => 3,
	]);
	$idPlanAniotres9 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3986,
	'value' => 228466864,
	'functioning_percentage' => 0,
	'debt_service_percentage' => 0,
	'fund_percentage' => 0,
	'investment_percentage' => 100,
	'functioning' => 0,
	'debt_service' => 0,
	'fund' => 0,
	'investment' => 228466864,
	'year' => 3,
	]);
	$idPlanAniotres10 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3987,
	'value' => 407804479,
	'functioning_percentage' => 0,
	'debt_service_percentage' => 0,
	'fund_percentage' => 0,
	'investment_percentage' => 100,
	'functioning' => 0,
	'debt_service' => 0,
	'fund' => 0,
	'investment' => 407804479,
	'year' => 3,
	]);
	$idPlanAniotres11 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3988,
	'value' => 126582940,
	'functioning_percentage' => 0,
	'debt_service_percentage' => 0,
	'fund_percentage' => 0,
	'investment_percentage' => 100,
	'functioning' => 0,
	'debt_service' => 0,
	'fund' => 0,
	'investment' => 126582940,
	'year' => 3,
	]);
	$idPlanAniotres12 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3989,
	'value' => 76422342,
	'functioning_percentage' => 0,
	'debt_service_percentage' => 0,
	'fund_percentage' => 0,
	'investment_percentage' => 100,
	'functioning' => 0,
	'debt_service' => 0,
	'fund' => 0,
	'investment' => 76422342,
	'year' => 3,
	]);
	$idPlanAniotres13 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3990,
	'value' => 110731455,
	'functioning_percentage' => 0,
	'debt_service_percentage' => 0,
	'fund_percentage' => 0,
	'investment_percentage' => 100,
	'functioning' => 0,
	'debt_service' => 0,
	'fund' => 0,
	'investment' => 110731455,
	'year' => 3,
	]);
	$idPlanAniotres14 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3991,
	'value' => 2425608540,
	'functioning_percentage' => 0,
	'debt_service_percentage' => 0,
	'fund_percentage' => 0,
	'investment_percentage' => 100,
	'functioning' => 0,
	'debt_service' => 0,
	'fund' => 0,
	'investment' => 2425608540,
	'year' => 3,
	]);
	$idPlanAniotres15 = DB::getPdo()->lastInsertId();
/*ANO 1*/
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3978,
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
	$idPlanAniouno1 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3979,
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
	$idPlanAniouno2 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3980,
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
	$idPlanAniouno3 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3981,
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
	$idPlanAniouno4 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 663,
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
	$idPlanAniouno5 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3982,
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
	$idPlanAniouno6 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3983,
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
	$idPlanAniouno7 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3984,
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
	$idPlanAniouno8 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3985,
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
	$idPlanAniouno9 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3986,
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
	$idPlanAniouno10 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3987,
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
	$idPlanAniouno11 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3988,
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
	$idPlanAniouno12 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3989,
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
	$idPlanAniouno13 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3990,
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
	$idPlanAniouno14 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3991,
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
	$idPlanAniouno15 = DB::getPdo()->lastInsertId();
/*ANO 2*/
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3978,
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
	$idPlanAniodos1 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3979,
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
	$idPlanAniodos2 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3980,
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
	$idPlanAniodos3 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3981,
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
	$idPlanAniodos4 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 663,
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
	$idPlanAniodos5 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3982,
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
	$idPlanAniodos6 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3983,
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
	$idPlanAniodos7 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3984,
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
	$idPlanAniodos8 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3985,
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
	$idPlanAniodos9 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3986,
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
	$idPlanAniodos10 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3987,
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
	$idPlanAniodos11 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3988,
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
	$idPlanAniodos12 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3989,
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
	$idPlanAniodos13 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3990,
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
	$idPlanAniodos14 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3991,
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
	$idPlanAniodos15 = DB::getPdo()->lastInsertId();
/*ANO 4*/
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3978,
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
	$idPlanAniocuatro1 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3979,
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
	$idPlanAniocuatro2 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3980,
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
	$idPlanAniocuatro3 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3981,
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
	$idPlanAniocuatro4 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 663,
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
	$idPlanAniocuatro5 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3982,
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
	$idPlanAniocuatro6 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3983,
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
	$idPlanAniocuatro7 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3984,
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
	$idPlanAniocuatro8 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3985,
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
	$idPlanAniocuatro9 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3986,
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
	$idPlanAniocuatro10 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3987,
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
	$idPlanAniocuatro11 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3988,
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
	$idPlanAniocuatro12 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3989,
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
	$idPlanAniocuatro13 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3990,
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
	$idPlanAniocuatro14 = DB::getPdo()->lastInsertId();
	
DB::table('financial_plans')->insert([
	'p_a_i_id' => 192,
	'source_id' => 3991,
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
	$idPlanAniocuatro15 = DB::getPdo()->lastInsertId();
	


	

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
