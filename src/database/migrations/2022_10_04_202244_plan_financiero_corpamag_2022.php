<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PlanFinancieroCorpamag2022 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 3801,
            'value' => 24696886022,
            'functioning_percentage' => 64.6413252212401,
            'debt_service_percentage' => 10.8632642901218,
            'fund_percentage' => 0,
            'investment_percentage' => 24.4954104886382,
            'functioning' => 15964394413,
            'debt_service' => 2682888000,
            'fund' => 0,
            'investment' => 6049603609,
            'year' => 3,
            ]);
            $idPlanAniotres1 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 3802,
            'value' => 1963813332,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 100,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 1963813332,
            'year' => 3,
            ]);
            $idPlanAniotres2 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 3804,
            'value' => 22897665,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 100,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 22897665,
            'year' => 3,
            ]);
            $idPlanAniotres3 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 3806,
            'value' => 902589355,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 0,
            'fund_percentage' => 20,
            'investment_percentage' => 80,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 180517871,
            'investment' => 722071484,
            'year' => 3,
            ]);
            $idPlanAniotres4 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 3807,
            'value' => 1740075678,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 100,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 1740075678,
            'year' => 3,
            ]);
            $idPlanAniotres5 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 599,
            'value' => 860592928,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 0,
            'fund_percentage' => 10.0000000232398,
            'investment_percentage' => 89.9999999767602,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 86059293,
            'investment' => 774533635,
            'year' => 3,
            ]);
            $idPlanAniotres6 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 1002,
            'value' => 12598400,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 0,
            'fund_percentage' => 10,
            'investment_percentage' => 90,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 1259840,
            'investment' => 11338560,
            'year' => 3,
            ]);
            $idPlanAniotres7 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 1003,
            'value' => 40009730,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 0,
            'fund_percentage' => 10,
            'investment_percentage' => 90,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 4000973,
            'investment' => 36008757,
            'year' => 3,
            ]);
            $idPlanAniotres8 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 602,
            'value' => 633007536,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 0,
            'fund_percentage' => 10.0000000631904,
            'investment_percentage' => 89.9999999368096,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 63300754,
            'investment' => 569706782,
            'year' => 3,
            ]);
            $idPlanAniotres9 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 3808,
            'value' => 4397451032,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 0,
            'fund_percentage' => 4.82327945113091,
            'investment_percentage' => 95.1767205488691,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 212101352,
            'investment' => 4185349680,
            'year' => 3,
            ]);
            $idPlanAniotres10 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 601,
            'value' => 2891493633,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 0,
            'fund_percentage' => 10.0000000242089,
            'investment_percentage' => 89.9999999757911,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 289149364,
            'investment' => 2602344269,
            'year' => 3,
            ]);
            $idPlanAniotres11 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 3809,
            'value' => 3188842192,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 0,
            'fund_percentage' => 8.4364475506162,
            'investment_percentage' => 91.5635524493838,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 269024999,
            'investment' => 2919817193,
            'year' => 3,
            ]);
            $idPlanAniotres12 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 603,
            'value' => 20550969,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 0,
            'fund_percentage' => 10.0000004865951,
            'investment_percentage' => 89.9999995134049,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 2055097,
            'investment' => 18495872,
            'year' => 3,
            ]);
            $idPlanAniotres13 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 3810,
            'value' => 13902435,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 100,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 13902435,
            'year' => 3,
            ]);
            $idPlanAniotres14 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4021,
            'value' => 13913780326,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 100,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 13913780326,
            'year' => 3,
            ]);
            $idPlanAniotres15 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 3811,
            'value' => 1500000,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 0,
            'fund_percentage' => 10,
            'investment_percentage' => 90,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 150000,
            'investment' => 1350000,
            'year' => 3,
            ]);
            $idPlanAniotres16 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4030,
            'value' => 47346000,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 100,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 47346000,
            'year' => 3,
            ]);
            $idPlanAniotres17 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4031,
            'value' => 27995885,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 0,
            'fund_percentage' => 10.0000017859768,
            'investment_percentage' => 89.9999982140232,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 2799589,
            'investment' => 25196296,
            'year' => 3,
            ]);
            $idPlanAniotres18 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4032,
            'value' => 9750000,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 0,
            'fund_percentage' => 10,
            'investment_percentage' => 90,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 975000,
            'investment' => 8775000,
            'year' => 3,
            ]);
            $idPlanAniotres19 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4033,
            'value' => 806257,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 0,
            'fund_percentage' => 10.0000372089793,
            'investment_percentage' => 89.9999627910207,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 80626,
            'investment' => 725631,
            'year' => 3,
            ]);
            $idPlanAniotres20 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4026,
            'value' => 621763391,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 100,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 621763391,
            'year' => 3,
            ]);
            $idPlanAniotres21 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4027,
            'value' => 90000000,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 100,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 90000000,
            'year' => 3,
            ]);
            $idPlanAniotres22 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 3815,
            'value' => 5283100588,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 100,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 5283100588,
            'year' => 3,
            ]);
            $idPlanAniotres23 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4034,
            'value' => 32157524,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 100,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 32157524,
            'year' => 3,
            ]);
            $idPlanAniotres24 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4035,
            'value' => 844468,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 0,
            'fund_percentage' => 10.0000236835499,
            'investment_percentage' => 89.9999763164501,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 84447,
            'investment' => 760021,
            'year' => 3,
            ]);
            $idPlanAniotres25 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4036,
            'value' => 7169687,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 0,
            'fund_percentage' => 10.0000041842831,
            'investment_percentage' => 89.9999958157169,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 716969,
            'investment' => 6452718,
            'year' => 3,
            ]);
            $idPlanAniotres26 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4037,
            'value' => 30006,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 0,
            'fund_percentage' => 10.00133306672,
            'investment_percentage' => 89.99866693328,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 3001,
            'investment' => 27005,
            'year' => 3,
            ]);
            $idPlanAniotres27 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4038,
            'value' => 54219081,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 100,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 54219081,
            'year' => 3,
            ]);
            $idPlanAniotres28 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4039,
            'value' => 44606000000,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 100,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 44606000000,
            'year' => 3,
            ]);
            $idPlanAniotres29 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 3823,
            'value' => 595498071,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 100,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 595498071,
            'year' => 3,
            ]);
            $idPlanAniotres30 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4042,
            'value' => 4806900000,
            'functioning_percentage' => 100,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 0,
            'functioning' => 4806900000,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 0,
            'year' => 3,
            ]);
            $idPlanAniotres31 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4043,
            'value' => 65600000,
            'functioning_percentage' => 100,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 0,
            'functioning' => 65600000,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 0,
            'year' => 3,
            ]);
            $idPlanAniotres32 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4044,
            'value' => 18800000,
            'functioning_percentage' => 100,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 0,
            'functioning' => 18800000,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 0,
            'year' => 3,
            ]);
            $idPlanAniotres33 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4046,
            'value' => 7271340,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 100,
            'fund_percentage' => 0,
            'investment_percentage' => 0,
            'functioning' => 0,
            'debt_service' => 7271340,
            'fund' => 0,
            'investment' => 0,
            'year' => 3,
            ]);
            $idPlanAniotres34 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4048,
            'value' => 79057608517,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 100,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 79057608517,
            'year' => 3,
            ]);
            $idPlanAniotres35 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 3801,
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
            'p_a_i_id' => 105,
            'source_id' => 3802,
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
            'p_a_i_id' => 105,
            'source_id' => 3804,
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
            'p_a_i_id' => 105,
            'source_id' => 3806,
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
            'p_a_i_id' => 105,
            'source_id' => 3807,
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
            'p_a_i_id' => 105,
            'source_id' => 599,
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
            'p_a_i_id' => 105,
            'source_id' => 1002,
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
            'p_a_i_id' => 105,
            'source_id' => 1003,
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
            'p_a_i_id' => 105,
            'source_id' => 602,
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
            'p_a_i_id' => 105,
            'source_id' => 3808,
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
            'p_a_i_id' => 105,
            'source_id' => 601,
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
            'p_a_i_id' => 105,
            'source_id' => 3809,
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
            'p_a_i_id' => 105,
            'source_id' => 603,
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
            'p_a_i_id' => 105,
            'source_id' => 3810,
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
            'p_a_i_id' => 105,
            'source_id' => 4021,
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
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 3811,
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
            $idPlanAniouno16 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4030,
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
            $idPlanAniouno17 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4031,
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
            $idPlanAniouno18 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4032,
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
            $idPlanAniouno19 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4033,
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
            $idPlanAniouno20 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4026,
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
            $idPlanAniouno21 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4027,
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
            $idPlanAniouno22 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 3815,
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
            $idPlanAniouno23 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4034,
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
            $idPlanAniouno24 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4035,
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
            $idPlanAniouno25 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4036,
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
            $idPlanAniouno26 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4037,
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
            $idPlanAniouno27 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4038,
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
            $idPlanAniouno28 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4039,
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
            $idPlanAniouno29 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 3823,
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
            $idPlanAniouno30 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4042,
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
            $idPlanAniouno31 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4043,
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
            $idPlanAniouno32 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4044,
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
            $idPlanAniouno33 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4046,
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
            $idPlanAniouno34 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4048,
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
            $idPlanAniouno35 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 3801,
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
            'p_a_i_id' => 105,
            'source_id' => 3802,
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
            'p_a_i_id' => 105,
            'source_id' => 3804,
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
            'p_a_i_id' => 105,
            'source_id' => 3806,
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
            'p_a_i_id' => 105,
            'source_id' => 3807,
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
            'p_a_i_id' => 105,
            'source_id' => 599,
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
            'p_a_i_id' => 105,
            'source_id' => 1002,
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
            'p_a_i_id' => 105,
            'source_id' => 1003,
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
            'p_a_i_id' => 105,
            'source_id' => 602,
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
            'p_a_i_id' => 105,
            'source_id' => 3808,
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
            'p_a_i_id' => 105,
            'source_id' => 601,
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
            'p_a_i_id' => 105,
            'source_id' => 3809,
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
            'p_a_i_id' => 105,
            'source_id' => 603,
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
            'p_a_i_id' => 105,
            'source_id' => 3810,
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
            'p_a_i_id' => 105,
            'source_id' => 4021,
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
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 3811,
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
            $idPlanAniodos16 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4030,
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
            $idPlanAniodos17 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4031,
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
            $idPlanAniodos18 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4032,
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
            $idPlanAniodos19 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4033,
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
            $idPlanAniodos20 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4026,
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
            $idPlanAniodos21 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4027,
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
            $idPlanAniodos22 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 3815,
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
            $idPlanAniodos23 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4034,
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
            $idPlanAniodos24 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4035,
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
            $idPlanAniodos25 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4036,
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
            $idPlanAniodos26 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4037,
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
            $idPlanAniodos27 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4038,
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
            $idPlanAniodos28 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4039,
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
            $idPlanAniodos29 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 3823,
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
            $idPlanAniodos30 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4042,
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
            $idPlanAniodos31 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4043,
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
            $idPlanAniodos32 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4044,
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
            $idPlanAniodos33 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4046,
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
            $idPlanAniodos34 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4048,
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
            $idPlanAniodos35 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 3801,
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
            'p_a_i_id' => 105,
            'source_id' => 3802,
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
            'p_a_i_id' => 105,
            'source_id' => 3804,
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
            'p_a_i_id' => 105,
            'source_id' => 3806,
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
            'p_a_i_id' => 105,
            'source_id' => 3807,
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
            'p_a_i_id' => 105,
            'source_id' => 599,
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
            'p_a_i_id' => 105,
            'source_id' => 1002,
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
            'p_a_i_id' => 105,
            'source_id' => 1003,
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
            'p_a_i_id' => 105,
            'source_id' => 602,
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
            'p_a_i_id' => 105,
            'source_id' => 3808,
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
            'p_a_i_id' => 105,
            'source_id' => 601,
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
            'p_a_i_id' => 105,
            'source_id' => 3809,
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
            'p_a_i_id' => 105,
            'source_id' => 603,
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
            'p_a_i_id' => 105,
            'source_id' => 3810,
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
            'p_a_i_id' => 105,
            'source_id' => 4021,
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
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 3811,
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
            $idPlanAniocuatro16 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4030,
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
            $idPlanAniocuatro17 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4031,
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
            $idPlanAniocuatro18 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4032,
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
            $idPlanAniocuatro19 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4033,
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
            $idPlanAniocuatro20 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4026,
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
            $idPlanAniocuatro21 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4027,
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
            $idPlanAniocuatro22 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 3815,
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
            $idPlanAniocuatro23 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4034,
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
            $idPlanAniocuatro24 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4035,
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
            $idPlanAniocuatro25 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4036,
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
            $idPlanAniocuatro26 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4037,
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
            $idPlanAniocuatro27 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4038,
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
            $idPlanAniocuatro28 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4039,
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
            $idPlanAniocuatro29 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 3823,
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
            $idPlanAniocuatro30 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4042,
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
            $idPlanAniocuatro31 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4043,
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
            $idPlanAniocuatro32 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4044,
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
            $idPlanAniocuatro33 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4046,
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
            $idPlanAniocuatro34 = DB::getPdo()->lastInsertId();
            
        DB::table('financial_plans')->insert([
            'p_a_i_id' => 105,
            'source_id' => 4048,
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
            $idPlanAniocuatro35 = DB::getPdo()->lastInsertId();
            
        
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
