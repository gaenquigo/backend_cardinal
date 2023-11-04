<?php

use Illuminate\Database\Seeder;
use App\Models\PAI;
use App\Models\StrategicLine;
use App\Models\Program;
use App\Models\Project;
use App\Models\Objective;
use App\Models\ObjectiveProduct;
use App\Models\Activity;
use App\Models\ActivitySource;
use App\Models\Financial_Plan;

/**
 * Class ReporteSeederCAM
 */
class ReporteSeederCAM extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $pai=PAI::create([
        'name' => 'PLAN DE ACCIÓN INSTITUCIONAL REPORTES',
        'start_date' => '2019-01-01',
        'end_date' => '2022-12-31',
        'director_name' => 'Carlos Alberto Cuéllar Medina',
        'group_id' => 2,
        'approved'=>1,
        ]);
        $idpai1 = DB::getPdo()->lastInsertId();
        
        DB::table('financing_sources')->insert([
          'father_id'=>11,
          'code'=>'1.1.1.1.1.1.1.1',
          'name'=> 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
          'description'=>'Participación de intereses de mora sobre la sobretasa ambiental-peajes (vigencia actual)',
          'type_id'=>22,
          'final_level'=>true,
          'group_id'=>2,
          ]);
          $idFuente1 = DB::getPdo()->lastInsertId();

        DB::table('financing_sources')->insert([
          'father_id'=>119,
          'code'=>'1.1.2.5.1.1.1.1',
          'name'=> 'Aportes de la Nación para Gastos de personal',
          'description'=>'Aportes de la Nación para Gastos de personal',
          'type_id'=>23,
          'final_level'=>true,
          'group_id'=>2,
          ]);
          $idFuente2 = DB::getPdo()->lastInsertId();

        DB::table('financing_sources')->insert([
          'father_id'=>1,
          'code'=>'1.3',
          'name'=> 'regalias',
          'description'=>'regalias',
          'type_id'=>24,
          'final_level'=>true,
          'group_id'=>2,
          ]);
          $idFuente3 = DB::getPdo()->lastInsertId();

        DB::table('financing_sources')->insert([
          'father_id'=>125,
          'code'=>'1.1.2.5.1.2.1.2',
          'name'=> 'Aportes del FCA para Adquisición de bienes y servicios',
          'description'=>'Aportes del FCA para Adquisición de bienes y servicios',
          'type_id'=>25,
          'final_level'=>true,
          'group_id'=>2,
          ]);
          $idFuente4 = DB::getPdo()->lastInsertId();

          DB::table('financial_plans')->insert([
            'p_a_i_id'=>$idpai1,
            'source_id'=>$idFuente1,
            'value'=>6000,
            'investment_percentage'=>70,
            'investment'=>4200,
            'functioning_percentage'=>10,
            'functioning'=>600,
            'debt_service_percentage'=>10,
            'debt_service'=>600,
            'fund_percentage'=>10,
            'fund'=>600,
            'year'=>1,                   
            ]);
            $idPlan1 = DB::getPdo()->lastInsertId();

           DB::table('financial_plans')->insert([
            'p_a_i_id'=>$idpai1,
            'source_id'=>$idFuente2,
            'value'=>16000,
            'investment_percentage'=>60,
            'investment'=>9600,
            'functioning_percentage'=>40,
            'functioning'=>6400,
            'debt_service_percentage'=>0,
            'debt_service'=>0,
            'fund_percentage'=>0,
            'fund'=>0,
            'year'=>1,                   
            ]);
            $idPlan2 = DB::getPdo()->lastInsertId();

          DB::table('financial_plans')->insert([
            'p_a_i_id'=>$idpai1,
            'source_id'=>$idFuente3,
            'value'=>196000,
            'investment_percentage'=>50,
            'investment'=>98000,
            'functioning_percentage'=>30,
            'functioning'=>58800,
            'debt_service_percentage'=>10,
            'debt_service'=>19600,
            'fund_percentage'=>10,
            'fund'=>19600,
            'year'=>1,                   
            ]);
            $idPlan3 = DB::getPdo()->lastInsertId();


          DB::table('financial_plans')->insert([
            'p_a_i_id'=>$idpai1,
            'source_id'=>$idFuente4,
            'value'=>120000,
            'investment_percentage'=>100,
            'investment'=>120000,
            'functioning_percentage'=>0,
            'functioning'=>0,
            'debt_service_percentage'=>0,
            'debt_service'=>0,
            'fund_percentage'=>0,
            'fund'=>0,
            'year'=>1,                   
            ]);
            $idPlan4 = DB::getPdo()->lastInsertId();

            DB::table('financial_plans')->insert([
            'p_a_i_id'=>$idpai1,
            'source_id'=>$idFuente1,
            'value'=>80000,
            'investment_percentage'=>60,
            'investment'=>48000,
            'functioning_percentage'=>10,
            'functioning'=>8000,
            'debt_service_percentage'=>20,
            'debt_service'=>16000,
            'fund_percentage'=>10,
            'fund'=>8000,
            'year'=>2,                   
            ]);
            $idPlan5 = DB::getPdo()->lastInsertId();

            DB::table('financial_plans')->insert([
              'p_a_i_id'=>$idpai1,
              'source_id'=>$idFuente2,
              'value'=>100000,
              'investment_percentage'=>50,
              'investment'=>50000,
              'functioning_percentage'=>15,
              'functioning'=>15000,
              'debt_service_percentage'=>30,
              'debt_service'=>30000,
              'fund_percentage'=>5,
              'fund'=>5000,
              'year'=>2,                   
              ]);
              $idPlan6 = DB::getPdo()->lastInsertId();

            DB::table('financial_plans')->insert([
              'p_a_i_id'=>$idpai1,
              'source_id'=>$idFuente3,
              'value'=>80000,
              'investment_percentage'=>70,
              'investment'=>56000,
              'functioning_percentage'=>10,
              'functioning'=>8000,
              'debt_service_percentage'=>15,
              'debt_service'=>12000,
              'fund_percentage'=>5,
              'fund'=>4000,
              'year'=>2,                   
              ]);
              $idPlan7 = DB::getPdo()->lastInsertId();

            DB::table('financial_plans')->insert([
              'p_a_i_id'=>$idpai1,
              'source_id'=>$idFuente4,
              'value'=>180000,
              'investment_percentage'=>90,
              'investment'=>162000,
              'functioning_percentage'=>10,
              'functioning'=>18000,
              'debt_service_percentage'=>0,
              'debt_service'=>0,
              'fund_percentage'=>0,
              'fund'=>0,
              'year'=>2,                   
              ]);
              $idPlan8 = DB::getPdo()->lastInsertId();


        DB::table('strategic_lines')->insert([
          'name' => 'Línea estratégica',
          'weighing' => 30,
          'p_a_i_id' => $idpai1,
          ]);
          $idline1 = DB::getPdo()->lastInsertId();
         

          DB::table('programs')->insert([
            'strategic_line_id' => $idline1,
            'national_program_id' => 90,
            'car_program' => 'PROGRAMA NACIONAL',
            'weighing' => 60,
            ]);
            $idprogram1 = DB::getPdo()->lastInsertId();
            
            DB::table('projects')->insert([
              'program_id' => $idprogram1,
              'project' => 'Proyecto',
              'weighing' => 100,
              ]);
              $idproject1 = DB::getPdo()->lastInsertId();

              DB::table('objectives')->insert([
                'project_id' => $idproject1,
                'objective' => 'Objetivo',
                'weighing' => 100,
                ]);
                $idobjective1 = DB::getPdo()->lastInsertId();

                DB::table('objective_products')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' => 799,
                  'product_other' => 'Producto 1',
                  'goal_1' => 60,
                  'goal_2' => 40,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'total_goal' => 100,
                  'unit_goal' => 71,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 70,
                  ]);
                  $idobjectiveproduct1 = DB::getPdo()->lastInsertId();

                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct1,
                    'name' => 'Actividad PORH',
                    'goal_1' => 20,
                    'goal_2' => 10,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 30,
                    'weighing' => 20,
                    ]);
                    $idactivity1 = DB::getPdo()->lastInsertId();

                    DB::table('indicator_activities')->insert([
                      'activities_id' => $idactivity1,
                      'indicator_id' => 1,
                      'denominator' => 19,
                      'variable_in' =>27,
                      'variable_id'=>1,
                      'year' => 1,
                      ]);
                      $idIndAct1 = DB::getPdo()->lastInsertId();

                    DB::table('indicator_activities')->insert([
                      'activities_id' => $idactivity1,
                      'indicator_id' => 1,
                      'denominator' => 9,
                      'variable_in' =>27,
                      'variable_id'=>1,
                      'year' => 2,
                      ]);
                      $idIndAct2 = DB::getPdo()->lastInsertId();

                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity1,
                      'source_id' => $idPlan4,
                      'age' => 1,
                      'value' => 10000,
                      'goal' => 0,
                      ]);
                      $idActsourc1 = DB::getPdo()->lastInsertId();

                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity1,
                      'source_id' => $idPlan5,
                      'age' => 2,
                      'value' => 7000,
                      'goal' => 0,
                      ]);
                      $idActsourc2 = DB::getPdo()->lastInsertId();

                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity1,
                      'source_id' => $idPlan7,
                      'age' => 2,
                      'value' => 5000,
                      'goal' => 0,
                      ]);
                      $idActsourc3 = DB::getPdo()->lastInsertId();


                    DB::table('activities')->insert([
                      'objective_id' => $idobjective1,
                      'product_id' =>$idobjectiveproduct1,
                      'name' => 'Actividad PSMV',
                      'goal_1' => 40,
                      'goal_2' => 30,
                      'goal_3' => 0,
                      'goal_4' => 0,
                      'goal' => 70,
                      'weighing' => 30,
                      ]);
                      $idactivity2 = DB::getPdo()->lastInsertId();

                      DB::table('indicator_activities')->insert([
                        'activities_id' => $idactivity2,
                        'indicator_id' => 2,
                        'denominator' => 39,
                        'variable_in' =>27,
                        'variable_id'=>2,
                        'year' => 1,
                        ]);
                        $idIndAct3 = DB::getPdo()->lastInsertId();
  
                      DB::table('indicator_activities')->insert([
                        'activities_id' => $idactivity2,
                        'indicator_id' => 2,
                        'denominator' => 29,
                        'variable_in' =>27,
                        'variable_id'=>2,
                        'year' => 2,
                        ]);
                        $idIndAct4 = DB::getPdo()->lastInsertId();
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity2,
                        'source_id' => $idPlan2,
                        'age' => 1,
                        'value' => 4800,
                        'goal' => 0,
                        ]);
                        $idActsourc4 = DB::getPdo()->lastInsertId();
  
                       DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity2,
                      'source_id' => $idPlan5,
                      'age' => 2,
                      'value' => 2400,
                      'goal' => 0,
                      ]);
                      $idActsourc5 = DB::getPdo()->lastInsertId();

                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity2,
                        'source_id' => $idPlan7,
                        'age' => 2,
                        'value' => 2500,
                        'goal' => 0,
                        ]);
                        $idActsourc6 = DB::getPdo()->lastInsertId();
  
                    DB::table('objective_products')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' => 799,
                    'product_other' => 'Producto 2',
                    'goal_1' => 30,
                    'goal_2' => 20,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'total_goal' => 100,
                    'unit_goal' => 71,
                    'indicator_national_id' => 799,
                    'indicator_ods_id' => 890,
                    'national_policy_id' => 875,
                    'weighing' => 30,
                    ]);
                    $idobjectiveproduct2 = DB::getPdo()->lastInsertId();
  
                    DB::table('activities')->insert([
                      'objective_id' => $idobjective1,
                      'product_id' =>$idobjectiveproduct2,
                      'name' => 'Actividad reglamentación',
                      'goal_1' => 10,
                      'goal_2' => 5,
                      'goal_3' => 0,
                      'goal_4' => 0,
                      'goal' => 15,
                      'weighing' => 40,
                      ]);
                      $idactivity3 = DB::getPdo()->lastInsertId();

                      DB::table('indicator_activities')->insert([
                        'activities_id' => $idactivity3,
                        'indicator_id' => 3,
                        'denominator' => 9,
                        'variable_in' =>27,
                        'variable_id'=>3,
                        'year' => 1,
                        ]);
                        $idIndAct5 = DB::getPdo()->lastInsertId();

                      DB::table('indicator_activities')->insert([
                        'activities_id' => $idactivity3,
                        'indicator_id' => 3,
                        'denominator' => 4,
                        'variable_in' =>27,
                        'variable_id'=>3,
                        'year' => 2,
                        ]);
                        $idIndAct6 = DB::getPdo()->lastInsertId();

                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity3,
                        'source_id' => $idPlan1,
                        'age' => 1,
                        'value' => 1000,
                        'goal' => 0,
                        ]);
                        $idActsourc7 = DB::getPdo()->lastInsertId();
  
                       DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity3,
                      'source_id' => $idPlan5,
                      'age' => 2,
                      'value' => 4000,
                      'goal' => 0,
                      ]);
                      $idActsourc8 = DB::getPdo()->lastInsertId();

                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity3,
                        'source_id' => $idPlan6,
                        'age' => 2,
                        'value' => 2600,
                        'goal' => 0,
                        ]);
                        $idActsourc9 = DB::getPdo()->lastInsertId();
  
                      DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity3,
                      'source_id' => $idPlan7,
                      'age' => 2,
                      'value' => 4000,
                      'goal' => 0,
                      ]);
                      $idActsourc10 = DB::getPdo()->lastInsertId();


                      DB::table('activities')->insert([
                        'objective_id' => $idobjective1,
                        'product_id' =>$idobjectiveproduct1,
                        'name' => 'Actividad páramos',
                        'goal_1' => 20,
                        'goal_2' => 15,
                        'goal_3' => 0,
                        'goal_4' => 0,
                        'goal' => 35,
                        'weighing' => 10,
                        ]);
                        $idactivity4 = DB::getPdo()->lastInsertId();

                        DB::table('indicator_activities')->insert([
                          'activities_id' => $idactivity4,
                          'indicator_id' => 7,
                          'denominator' => 19,
                          'variable_in' =>27,
                          'variable_id'=>8,
                          'year' => 1,
                          ]);
                          $idIndAct7 = DB::getPdo()->lastInsertId();

                        DB::table('indicator_activities')->insert([
                          'activities_id' => $idactivity4,
                          'indicator_id' => 7,
                          'denominator' => 14,
                          'variable_in' =>27,
                          'variable_id'=>8,
                          'year' => 2,
                          ]);
                          $idIndAct8 = DB::getPdo()->lastInsertId();
  
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity4,
                          'source_id' => $idPlan1,
                          'age' => 1,
                          'value' => 4000,
                          'goal' => 0,
                          ]);
                          $idActsourc11 = DB::getPdo()->lastInsertId();
  
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity4,
                          'source_id' => $idPlan8,
                          'age' => 2,
                          'value' => 19500,
                          'goal' => 0,
                          ]);
                          $idActsourc12 = DB::getPdo()->lastInsertId();

  
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity4,
                          'source_id' => $idPlan6,
                          'age' => 2,
                          'value' => 5800,
                          'goal' => 0,
                          ]);
                          $idActsourc13 = DB::getPdo()->lastInsertId();

                            
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity4,
                          'source_id' => $idPlan5,
                          'age' => 2,
                          'value' =>1000,
                          'goal' => 0,
                          ]);
                          $idActsourc14 = DB::getPdo()->lastInsertId();

                            
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity4,
                          'source_id' => $idPlan7,
                          'age' => 2,
                          'value' => 4700,
                          'goal' => 0,
                          ]);
                          $idActsourc15 = DB::getPdo()->lastInsertId();

          DB::table('programs')->insert([
            'strategic_line_id' => $idline1,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA OTRO',
            'weighing' => 40,
            ]);
            $idprogram2 = DB::getPdo()->lastInsertId();

            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => 'Proyecto 2',
              'weighing' => 100,
              ]);
              $idproject2 = DB::getPdo()->lastInsertId();
            
              DB::table('objectives')->insert([
                'project_id' => $idproject2,
                'objective' => 'Objetivo 2',
                'weighing' => 100,
                ]);
                $idobjective2 = DB::getPdo()->lastInsertId();
 
                DB::table('objective_products')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' => 799,
                  'product_other' => 'Producto 1',
                  'goal_1' => 50,
                  'goal_2' => 70,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'total_goal' => 120,
                  'unit_goal' => 71,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 60,
                  ]);
                  $idobjectiveproduct3 = DB::getPdo()->lastInsertId();

                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct3,
                    'name' => 'Actividad PGIRS',
                    'goal_1' => 20,
                    'goal_2' => 10,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 30,
                    'weighing' => 20,
                    ]);
                    $idactivity5 = DB::getPdo()->lastInsertId();

                    DB::table('indicator_activities')->insert([
                      'activities_id' => $idactivity5,
                      'indicator_id' => 8,
                      'denominator' => 19,
                      'variable_in' =>27,
                      'variable_id'=>9,
                      'year' => 1,
                      ]);
                      $idIndAct9 = DB::getPdo()->lastInsertId();

                      DB::table('indicator_activities')->insert([
                        'activities_id' => $idactivity5,
                        'indicator_id' => 8,
                        'denominator' => 9,
                        'variable_in' =>27,
                        'variable_id'=>9,
                        'year' => 1,
                        ]);
                        $idIndAct10 = DB::getPdo()->lastInsertId();

                      DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity5,
                      'source_id' => $idPlan4,
                      'age' => 1,
                      'value' => 50000,
                      'goal' => 0,
                      ]);
                      $idActsourc16 = DB::getPdo()->lastInsertId();

                        
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity5,
                      'source_id' => $idPlan5,
                      'age' => 2,
                      'value' => 3000,
                      'goal' => 0,
                      ]);
                      $idActsourc17 = DB::getPdo()->lastInsertId();

                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity5,
                      'source_id' => $idPlan8,
                      'age' => 2,
                      'value' => 30000,
                      'goal' => 0,
                      ]);
                      $idActsourc18 = DB::getPdo()->lastInsertId();

                DB::table('objective_products')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' => 799,
                  'product_other' => 'Producto 1',
                  'goal_1' => 40,
                  'goal_2' => 30,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'total_goal' => 70,
                  'unit_goal' => 71,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 60,
                  ]);
                  $idobjectiveproduct4 = DB::getPdo()->lastInsertId();

                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct4,
                    'name' => 'Actividad MPIOS',
                    'goal_1' => 10,
                    'goal_2' => 15,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 25,
                    'weighing' => 50,
                    ]);
                    $idactivity6 = DB::getPdo()->lastInsertId();

                    DB::table('indicator_activities')->insert([
                      'activities_id'=> $idactivity6,
                      'indicator_id' => 9,
                      'denominator' => 9,
                      'variable_in' =>27,
                      'variable_id'=>10,
                      'year' => 1,
                      ]);
                      $idIndAct11 = DB::getPdo()->lastInsertId();

                    DB::table('indicator_activities')->insert([
                      'activities_id' => $idactivity6,
                      'indicator_id' => 9,
                      'denominator' => 14,
                      'variable_in' =>27,
                      'variable_id'=>10,
                      'year' => 1,
                      ]);
                      $idIndAct12 = DB::getPdo()->lastInsertId();

                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity6,
                      'source_id' => $idPlan1,
                      'age' => 1,
                      'value' => 1100,
                      'goal' => 0,
                      ]);
                      $idActsourc19 = DB::getPdo()->lastInsertId();

                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity6,
                      'source_id' => $idPlan5,
                      'age' => 2,
                      'value' => 3000,
                      'goal' => 0,
                      ]);
                      $idActsourc20 = DB::getPdo()->lastInsertId();

                      DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity6,
                      'source_id' => $idPlan7,
                      'age' => 2,
                      'value' => 7800,
                      'goal' => 0,
                      ]);
                      $idActsourc21 = DB::getPdo()->lastInsertId();


                    DB::table('activities')->insert([
                      'objective_id' => $idobjective2,
                      'product_id' =>$idobjectiveproduct4,
                      'name' => 'Actividad PORH 2',
                      'goal_1' => 30,
                      'goal_2' => 35,
                      'goal_3' => 0,
                      'goal_4' => 0,
                      'goal' => 25,
                      'weighing' => 30,
                      ]);
                      $idactivity7 = DB::getPdo()->lastInsertId();

                      DB::table('indicator_activities')->insert([
                        'activities_id' => $idactivity7,
                        'indicator_id' => 1,
                        'denominator' => 29,
                        'variable_in' =>27,
                        'variable_id'=>1,
                        'year' => 1,
                        ]);
                        $idIndAct13 = DB::getPdo()->lastInsertId();

                      DB::table('indicator_activities')->insert([
                        'activities_id' => $idactivity7,
                        'indicator_id' => 1,
                        'denominator' => 34,
                        'variable_in' =>27,
                        'variable_id'=>1,
                        'year' => 1,
                        ]);
                        $idIndAct14 = DB::getPdo()->lastInsertId();

                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity7,
                        'source_id' => $idPlan3,
                        'age' => 1,
                        'value' => 9000,
                        'goal' => 0,
                        ]);
                        $idActsourc22 = DB::getPdo()->lastInsertId();
  
                       DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity7,
                        'source_id' => $idPlan8,
                        'age' => 2,
                        'value' => 31500,
                        'goal' => 0,
                        ]);
                        $idActsourc23 = DB::getPdo()->lastInsertId();
 
                       DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity7,
                        'source_id' => $idPlan5,
                        'age' => 2,
                        'value' => 3600,
                        'goal' => 0,
                        ]);
                        $idActsourc24 = DB::getPdo()->lastInsertId();
  
                       DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity7,
                        'source_id' => $idPlan6,
                        'age' => 2,
                        'value' => 16600,
                        'goal' => 0,
                        ]);
                        $idActsourc25 = DB::getPdo()->lastInsertId();
  
                       DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity7,
                        'source_id' => $idPlan7,
                        'age' => 2,
                        'value' => 4000,
                        'goal' => 0,
                        ]);
                        $idActsourc26 = DB::getPdo()->lastInsertId();
						
		
		DB::table('strategic_lines')->insert([
          'name' => 'Línea estratégica',
          'weighing' => 70,
          'p_a_i_id' => $idpai1,
          ]);
          $idline11 = DB::getPdo()->lastInsertId();
         

          DB::table('programs')->insert([
            'strategic_line_id' => $idline11,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 2',
            'weighing' => 90,
            ]);
            $idprogram11 = DB::getPdo()->lastInsertId();
            
            DB::table('projects')->insert([
              'program_id' => $idprogram11,
              'project' => 'Proyecto 2',
              'weighing' => 100,
              ]);
              $idproject11 = DB::getPdo()->lastInsertId();

              DB::table('objectives')->insert([
                'project_id' => $idproject11,
                'objective' => 'Objetivo',
                'weighing' => 100,
                ]);
                $idobjective11 = DB::getPdo()->lastInsertId();

                DB::table('objective_products')->insert([
                  'objective_id' => $idobjective11,
                  'product_id' => 799,
                  'product_other' => 'Producto 1',
                  'goal_1' => 60,
                  'goal_2' => 40,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'total_goal' => 100,
                  'unit_goal' => 71,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 60,
                  ]);
                  $idobjectiveproduct11 = DB::getPdo()->lastInsertId();

                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct11,
                    'name' => 'Actividad Suelos Recuperación',
                    'goal_1' => 30,
                    'goal_2' => 20,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 50,
                    'weighing' => 30,
                    ]);
                    $idactivity11 = DB::getPdo()->lastInsertId();

                    DB::table('indicator_activities')->insert([
                      'activities_id' => $idactivity11,
                      'indicator_id' => 6,
                      'denominator' => 31,
                      'variable_in' =>27,
                      'variable_id'=>6,
                      'year' => 1,
                      ]);
                      $idIndAct31 = DB::getPdo()->lastInsertId();

                    DB::table('indicator_activities')->insert([
                      'activities_id' => $idactivity11,
                      'indicator_id' => 6,
                      'denominator' => 9,
                      'variable_in' =>17,
                      'variable_id'=>6,
                      'year' => 2,
                      ]);
                      $idIndAct32 = DB::getPdo()->lastInsertId();

                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity11,
                      'source_id' => $idPlan4,
                      'age' => 1,
                      'value' => 10000,
                      'goal' => 0,
                      ]);
                      $idActsourc31 = DB::getPdo()->lastInsertId();

                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity11,
                      'source_id' => $idPlan5,
                      'age' => 2,
                      'value' => 7000,
                      'goal' => 0,
                      ]);
                      $idActsourc32 = DB::getPdo()->lastInsertId();

                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity11,
                      'source_id' => $idPlan7,
                      'age' => 2,
                      'value' => 5000,
                      'goal' => 0,
                      ]);
                      $idActsourc33 = DB::getPdo()->lastInsertId();


                    DB::table('activities')->insert([
                      'objective_id' => $idobjective11,
                      'product_id' =>$idobjectiveproduct11,
                      'name' => 'Actividad Áreas protegidas',
                      'goal_1' => 60,
                      'goal_2' => 20,
                      'goal_3' => 0,
                      'goal_4' => 0,
                      'goal' => 70,
                      'weighing' => 20,
                      ]);
                      $idactivity12 = DB::getPdo()->lastInsertId();

                      DB::table('indicator_activities')->insert([
                        'activities_id' => $idactivity12,
                        'indicator_id' => 15,
                        'denominator' => 25,
                        'variable_in' =>27,
                        'variable_id'=>30,
                        'year' => 1,
                        ]);
                        $idIndAct33 = DB::getPdo()->lastInsertId();
  
                      DB::table('indicator_activities')->insert([
                        'activities_id' => $idactivity12,
                        'indicator_id' => 15,
                        'denominator' => 41,
                        'variable_in' =>27,
                        'variable_id'=>30,
                        'year' => 2,
                        ]);
                        $idIndAct34 = DB::getPdo()->lastInsertId();
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity12,
                        'source_id' => $idPlan2,
                        'age' => 1,
                        'value' => 4800,
                        'goal' => 0,
                        ]);
                        $idActsourc34 = DB::getPdo()->lastInsertId();
  
                       DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity12,
                      'source_id' => $idPlan5,
                      'age' => 2,
                      'value' => 2400,
                      'goal' => 0,
                      ]);
                      $idActsourc35 = DB::getPdo()->lastInsertId();

                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity12,
                        'source_id' => $idPlan7,
                        'age' => 2,
                        'value' => 2500,
                        'goal' => 0,
                        ]);
                        $idActsourc36 = DB::getPdo()->lastInsertId();
  
                    DB::table('objective_products')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' => 799,
                    'product_other' => 'Producto 2',
                    'goal_1' => 30,
                    'goal_2' => 20,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'total_goal' => 100,
                    'unit_goal' => 71,
                    'indicator_national_id' => 799,
                    'indicator_ods_id' => 890,
                    'national_policy_id' => 875,
                    'weighing' => 40,
                    ]);
                    $idobjectiveproduct12 = DB::getPdo()->lastInsertId();
  
                    DB::table('activities')->insert([
                      'objective_id' => $idobjective11,
                      'product_id' =>$idobjectiveproduct12,
                      'name' => 'Actividad APOF',
                      'goal_1' => 10,
                      'goal_2' => 5,
                      'goal_3' => 0,
                      'goal_4' => 0,
                      'goal' => 15,
                      'weighing' => 40,
                      ]);
                      $idactivity13 = DB::getPdo()->lastInsertId();

                      DB::table('indicator_activities')->insert([
                        'activities_id' => $idactivity13,
                        'indicator_id' => 16,
                        'denominator' => 59,
                        'variable_in' =>27,
                        'variable_id'=>32,
                        'year' => 1,
                        ]);
                        $idIndAct35 = DB::getPdo()->lastInsertId();

                      DB::table('indicator_activities')->insert([
                        'activities_id' => $idactivity13,
                        'indicator_id' => 16,
                        'denominator' => 80,
                        'variable_in' =>27,
                        'variable_id'=>32,
                        'year' => 2,
                        ]);
                        $idIndAct36 = DB::getPdo()->lastInsertId();

                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity13,
                        'source_id' => $idPlan1,
                        'age' => 1,
                        'value' => 1000,
                        'goal' => 0,
                        ]);
                        $idActsourc37 = DB::getPdo()->lastInsertId();
  
                       DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity13,
                      'source_id' => $idPlan5,
                      'age' => 2,
                      'value' => 4000,
                      'goal' => 0,
                      ]);
                      $idActsourc38 = DB::getPdo()->lastInsertId();

                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity13,
                        'source_id' => $idPlan6,
                        'age' => 2,
                        'value' => 2600,
                        'goal' => 0,
                        ]);
                        $idActsourc39 = DB::getPdo()->lastInsertId();
  
                      DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity13,
                      'source_id' => $idPlan7,
                      'age' => 2,
                      'value' => 4000,
                      'goal' => 0,
                      ]);
                      $idActsourc40 = DB::getPdo()->lastInsertId();


                      DB::table('activities')->insert([
                        'objective_id' => $idobjective11,
                        'product_id' =>$idobjectiveproduct11,
                        'name' => 'Actividad APMEI',
                        'goal_1' => 10,
                        'goal_2' => 25,
                        'goal_3' => 0,
                        'goal_4' => 0,
                        'goal' => 35,
                        'weighing' => 10,
                        ]);
                        $idactivity14 = DB::getPdo()->lastInsertId();

                        DB::table('indicator_activities')->insert([
                          'activities_id' => $idactivity14,
                          'indicator_id' => 17,
                          'denominator' => 69,
                          'variable_in' =>27,
                          'variable_id'=>34,
                          'year' => 1,
                          ]);
                          $idIndAct37 = DB::getPdo()->lastInsertId();

                        DB::table('indicator_activities')->insert([
                          'activities_id' => $idactivity14,
                          'indicator_id' => 17,
                          'denominator' => 74,
                          'variable_in' =>27,
                          'variable_id'=>34,
                          'year' => 2,
                          ]);
                          $idIndAct38 = DB::getPdo()->lastInsertId();
  
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity14,
                          'source_id' => $idPlan1,
                          'age' => 1,
                          'value' => 4000,
                          'goal' => 0,
                          ]);
                          $idActsourc41 = DB::getPdo()->lastInsertId();
  
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity14,
                          'source_id' => $idPlan8,
                          'age' => 2,
                          'value' => 19500,
                          'goal' => 0,
                          ]);
                          $idActsourc42 = DB::getPdo()->lastInsertId();

  
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity14,
                          'source_id' => $idPlan6,
                          'age' => 2,
                          'value' => 5800,
                          'goal' => 0,
                          ]);
                          $idActsourc43 = DB::getPdo()->lastInsertId();

                            
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity14,
                          'source_id' => $idPlan5,
                          'age' => 2,
                          'value' =>1000,
                          'goal' => 0,
                          ]);
                          $idActsourc44 = DB::getPdo()->lastInsertId();

                            
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity14,
                          'source_id' => $idPlan7,
                          'age' => 2,
                          'value' => 4700,
                          'goal' => 0,
                          ]);
                          $idActsourc45 = DB::getPdo()->lastInsertId();

          DB::table('programs')->insert([
            'strategic_line_id' => $idline11,
            'national_program_id' => 288,
            'car_program' => 'PROGRAMA OTRO 2',
            'weighing' => 10,
            ]);
            $idprogram12 = DB::getPdo()->lastInsertId();

            DB::table('projects')->insert([
              'program_id' => $idprogram12,
              'project' => 'Proyecto 2',
              'weighing' => 100,
              ]);
              $idproject12 = DB::getPdo()->lastInsertId();
            
              DB::table('objectives')->insert([
                'project_id' => $idproject12,
                'objective' => 'Objetivo 2',
                'weighing' => 100,
                ]);
                $idobjective12 = DB::getPdo()->lastInsertId();
 
                DB::table('objective_products')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' => 799,
                  'product_other' => 'Producto 1',
                  'goal_1' => 50,
                  'goal_2' => 70,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'total_goal' => 120,
                  'unit_goal' => 71,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 60,
                  ]);
                  $idobjectiveproduct13 = DB::getPdo()->lastInsertId();

                  DB::table('activities')->insert([
                    'objective_id' => $idobjective12,
                    'product_id' =>$idobjectiveproduct13,
                    'name' => 'Actividad Especies ame',
                    'goal_1' => 40,
                    'goal_2' => 50,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 30,
                    'weighing' => 20,
                    ]);
                    $idactivity15 = DB::getPdo()->lastInsertId();

                    DB::table('indicator_activities')->insert([
                      'activities_id' => $idactivity15,
                      'indicator_id' => 18,
                      'denominator' => 92,
                      'variable_in' =>27,
                      'variable_id'=>36,
                      'year' => 1,
                      ]);
                      $idIndAct39 = DB::getPdo()->lastInsertId();

                      DB::table('indicator_activities')->insert([
                        'activities_id' => $idactivity15,
                        'indicator_id' => 18,
                        'denominator' => 14,
                        'variable_in' =>27,
                        'variable_id'=>36,
                        'year' => 1,
                        ]);
                        $idIndAct40 = DB::getPdo()->lastInsertId();

                      DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity15,
                      'source_id' => $idPlan4,
                      'age' => 1,
                      'value' => 50000,
                      'goal' => 0,
                      ]);
                      $idActsourc46 = DB::getPdo()->lastInsertId();

                        
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity15,
                      'source_id' => $idPlan5,
                      'age' => 2,
                      'value' => 3000,
                      'goal' => 0,
                      ]);
                      $idActsourc47 = DB::getPdo()->lastInsertId();

                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity15,
                      'source_id' => $idPlan8,
                      'age' => 2,
                      'value' => 30000,
                      'goal' => 0,
                      ]);
                      $idActsourc48 = DB::getPdo()->lastInsertId();

                DB::table('objective_products')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' => 799,
                  'product_other' => 'Producto 1',
                  'goal_1' => 40,
                  'goal_2' => 30,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'total_goal' => 70,
                  'unit_goal' => 71,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 60,
                  ]);
                  $idobjectiveproduct14 = DB::getPdo()->lastInsertId();

                  DB::table('activities')->insert([
                    'objective_id' => $idobjective12,
                    'product_id' =>$idobjectiveproduct14,
                    'name' => 'Actividad especies invasoras',
                    'goal_1' => 10,
                    'goal_2' => 15,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 25,
                    'weighing' => 50,
                    ]);
                    $idactivity16 = DB::getPdo()->lastInsertId();

                    DB::table('indicator_activities')->insert([
                      'activities_id'=> $idactivity16,
                      'indicator_id' => 19,
                      'denominator' => 62,
                      'variable_in' =>27,
                      'variable_id'=>40,
                      'year' => 1,
                      ]);
                      $idIndAct41 = DB::getPdo()->lastInsertId();

                    DB::table('indicator_activities')->insert([
                      'activities_id' => $idactivity16,
                      'indicator_id' => 19,
                      'denominator' => 34,
                      'variable_in' =>27,
                      'variable_id'=>40,
                      'year' => 2,
                      ]);
                      $idIndAct42 = DB::getPdo()->lastInsertId();

                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity6,
                      'source_id' => $idPlan1,
                      'age' => 1,
                      'value' => 1100,
                      'goal' => 0,
                      ]);
                      $idActsourc49 = DB::getPdo()->lastInsertId();

                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity6,
                      'source_id' => $idPlan5,
                      'age' => 2,
                      'value' => 3000,
                      'goal' => 0,
                      ]);
                      $idActsourc50 = DB::getPdo()->lastInsertId();

                      DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity16,
                      'source_id' => $idPlan7,
                      'age' => 2,
                      'value' => 7800,
                      'goal' => 0,
                      ]);
                      $idActsourc51 = DB::getPdo()->lastInsertId();


                    DB::table('activities')->insert([
                      'objective_id' => $idobjective12,
                      'product_id' =>$idobjectiveproduct14,
                      'name' => 'Actividad Ecosistemas',
                      'goal_1' => 40,
                      'goal_2' => 45,
                      'goal_3' => 0,
                      'goal_4' => 0,
                      'goal' => 25,
                      'weighing' => 30,
                      ]);
                      $idactivity17 = DB::getPdo()->lastInsertId();

                      DB::table('indicator_activities')->insert([
                        'activities_id' => $idactivity17,
                        'indicator_id' => 20,
                        'denominator' => 72,
                        'variable_in' =>27,
                        'variable_id'=>44,
                        'year' => 1,
                        ]);
                        $idIndAct43 = DB::getPdo()->lastInsertId();

                      DB::table('indicator_activities')->insert([
                        'activities_id' => $idactivity17,
                        'indicator_id' => 20,
                        'denominator' => 61,
                        'variable_in' =>27,
                        'variable_id'=>44,
                        'year' => 1,
                        ]);
                        $idIndAct44 = DB::getPdo()->lastInsertId();

                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity17,
                        'source_id' => $idPlan3,
                        'age' => 1,
                        'value' => 9000,
                        'goal' => 0,
                        ]);
                        $idActsourc52 = DB::getPdo()->lastInsertId();
  
                       DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity17,
                        'source_id' => $idPlan8,
                        'age' => 2,
                        'value' => 31500,
                        'goal' => 0,
                        ]);
                        $idActsourc53 = DB::getPdo()->lastInsertId();
 
                       DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity17,
                        'source_id' => $idPlan5,
                        'age' => 2,
                        'value' => 3600,
                        'goal' => 0,
                        ]);
                        $idActsourc44 = DB::getPdo()->lastInsertId();
  
                       DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity17,
                        'source_id' => $idPlan6,
                        'age' => 2,
                        'value' => 16600,
                        'goal' => 0,
                        ]);
                        $idActsourc45 = DB::getPdo()->lastInsertId();
  
                       DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity17,
                        'source_id' => $idPlan7,
                        'age' => 2,
                        'value' => 4000,
                        'goal' => 0,
                        ]);
                        $idActsourc46 = DB::getPdo()->lastInsertId();

                       
                       
                        DB::table('implementations')->insert([
                          'p_a_i_s_id'=>$idpai1,
                          ]);
                          $idImplementation1 = DB::getPdo()->lastInsertId();

                        DB::table('fundraisings')->insert([
                          'date'=>'2019-10-30',
                          'value'=>2000,
                          'financial_plans_id'=>$idPlan1,
                          'implementation_id'=>$idImplementation1,
                          ]);
                          $idRecaudo1 = DB::getPdo()->lastInsertId();

                        DB::table('fundraisings')->insert([
                          'date'=>'2019-10-30',
                          'value'=>8000,
                          'financial_plans_id'=>$idPlan2,
                          'implementation_id'=>$idImplementation1,
                          ]);
                          $idRecaudo2 = DB::getPdo()->lastInsertId();

                        DB::table('fundraisings')->insert([
                          'date'=>'2019-10-30',
                          'value'=>92000,
                          'financial_plans_id'=>$idPlan3,
                          'implementation_id'=>$idImplementation1,
                          ]);
                          $idRecaudo3 = DB::getPdo()->lastInsertId();

                        DB::table('fundraisings')->insert([
                          'date'=>'2019-10-30',
                          'value'=>70000,
                          'financial_plans_id'=>$idPlan4,
                          'implementation_id'=>$idImplementation1,
                          ]);
                          $idRecaudo4 = DB::getPdo()->lastInsertId();

                        DB::table('fundraisings')->insert([
                          'date'=>'2019-10-30',
                          'value'=>3500,
                          'financial_plans_id'=>$idPlan5,
                          'implementation_id'=>$idImplementation1,
                          ]);
                          $idRecaudo5 = DB::getPdo()->lastInsertId();

                        DB::table('fundraisings')->insert([
                          'date'=>'2019-10-30',
                          'value'=>20000,
                          'financial_plans_id'=>$idPlan6,
                          'implementation_id'=>$idImplementation1,
                          ]);
                          $idRecaudo6 = DB::getPdo()->lastInsertId();

                        DB::table('fundraisings')->insert([
                          'date'=>'2019-10-30',
                          'value'=>30000,
                          'financial_plans_id'=>$idPlan7,
                          'implementation_id'=>$idImplementation1,
                            ]);
                          $idRecaudo7 = DB::getPdo()->lastInsertId();

                        DB::table('fundraisings')->insert([
                          'date'=>'2019-10-30',
                          'value'=>100000,
                          'financial_plans_id'=>$idPlan8,
                          'implementation_id'=>$idImplementation1,
                          ]);
                          $idRecaudo8 = DB::getPdo()->lastInsertId();

                          DB::table('cost_sources')->insert([
                            'father_id'=>4,
                            'code'=>'2.1.2.1',
                            'name'=>'Adquisición de activos no financieros',
                            'description'=>'Adquisición de activos no financieros',
                            'functioning'=>true,
                            'compensation'=>false,
                            'debt_service'=>false,
                            'final_level'=>true,
                            'group_id'=>2,
                            ]);
                           $idFuenteGasto1 = DB::getPdo()->lastInsertId();

                          DB::table('cost_sources')->insert([
                            'father_id'=>13,
                            'code'=>'2.1.3.1.2.1',
                            'name'=>'Aportes a ASOCARS',
                            'description'=>'Aportes a ASOCARS',
                            'functioning'=>true,
                            'compensation'=>false,
                            'debt_service'=>false,
                            'final_level'=>true,
                            'group_id'=>2,
                            ]);
                           $idFuenteGasto2 = DB::getPdo()->lastInsertId();

                           DB::table('cost_sources')->insert([
                            'father_id'=>16,
                            'code'=>'2.1.3.2.1.1',
                            'name'=>'Mesadas pensionales (de pensiones)',
                            'description'=>'Mesadas pensionales (de pensiones)',
                            'functioning'=>true,
                            'compensation'=>false,
                            'debt_service'=>false,
                            'final_level'=>true,
                            'group_id'=>2,
                            ]);
                           $idFuenteGasto3 = DB::getPdo()->lastInsertId();

                           DB::table('cost_sources')->insert([
                            'father_id'=>16,
                            'code'=>'2.1.3.2.1.2',
                            'name'=>'Bonos pensionales (de pensiones)',
                            'description'=>'Bonos pensionales (de pensiones)',
                            'functioning'=>true,
                            'compensation'=>false,
                            'debt_service'=>false,
                            'final_level'=>true,
                            'group_id'=>2,
                            ]);
                           $idFuenteGasto4 = DB::getPdo()->lastInsertId();

                           DB::table('cost_sources')->insert([
                            'father_id'=>10,
                            'code'=>'2.1.3.1.1.1.1',
                            'name'=>'Fondo de Compensación Ambiental - TSE (20%)',
                            'description'=>'Fondo de Compensación Ambiental - TSE (20%)',
                            'functioning'=>false,
                            'compensation'=>true,
                            'debt_service'=>false,
                            'final_level'=>true,
                            'group_id'=>2,
                            ]);
                           $idFuenteGasto5 = DB::getPdo()->lastInsertId();

                           DB::table('cost_sources')->insert([
                            'father_id'=>36,
                            'code'=>'2.2.1.1',
                            'name'=>'Servicios de la deuda pública externa',
                            'description'=>'Servicios de la deuda pública externa',
                            'functioning'=>false,
                            'compensation'=>false,
                            'debt_service'=>true,
                            'final_level'=>true,
                            'group_id'=>2,
                            ]);
                           $idFuenteGasto6 = DB::getPdo()->lastInsertId();

                           DB::table('financial_costs')->insert([
                            'year'=>2,
                            'value_bugeted'=>1000,
                            'value_comitted'=>500,
                            'value_required'=>200,
                            'value_paid'=>100,
                            'own'=>true,
                            'nation'=>false,
                            'royalties'=>false,
                            'funds'=>false,
                            'functioning'=>true,
                            'compensation'=>false,
                            'debt_service'=>false,
                            'p_a_i_id'=>$idpai1,
                            'cost_sources_id'=>$idFuenteGasto1,
                            'group_id'=>2,
                            ]);
                           $idGasto1 = DB::getPdo()->lastInsertId();

                          DB::table('financial_costs')->insert([
                            'year'=>2,
                            'value_bugeted'=>300,
                            'value_comitted'=>200,
                            'value_required'=>100,
                            'value_paid'=>20,
                            'own'=>false,
                            'nation'=>true,
                            'royalties'=>false,
                            'funds'=>false,
                            'functioning'=>true,
                            'compensation'=>false,
                            'debt_service'=>false,
                            'p_a_i_id'=>$idpai1,
                            'cost_sources_id'=>$idFuenteGasto1,
                            'group_id'=>2,
                            ]);
                           $idGasto2 = DB::getPdo()->lastInsertId();

                          DB::table('financial_costs')->insert([
                            'year'=>2,
                            'value_bugeted'=>500,
                            'value_comitted'=>300,
                            'value_required'=>200,
                            'value_paid'=>100,
                            'own'=>false,
                            'nation'=>false,
                            'royalties'=>true,
                            'funds'=>false,
                            'functioning'=>true,
                            'compensation'=>false,
                            'debt_service'=>false,
                            'p_a_i_id'=>$idpai1,
                            'cost_sources_id'=>$idFuenteGasto1,
                            'group_id'=>2,
                            ]);
                           $idGasto3 = DB::getPdo()->lastInsertId();

                           DB::table('financial_costs')->insert([
                            'year'=>2,
                            'value_bugeted'=>100,
                            'value_comitted'=>50,
                            'value_required'=>20,
                            'value_paid'=>10,
                            'own'=>true,
                            'nation'=>false,
                            'royalties'=>false,
                            'funds'=>false,
                            'functioning'=>true,
                            'compensation'=>false,
                            'debt_service'=>false,
                            'p_a_i_id'=>$idpai1,
                            'cost_sources_id'=>$idFuenteGasto2,
                            'group_id'=>2,
                            ]);
                           $idGasto4 = DB::getPdo()->lastInsertId();
                           
                          DB::table('financial_costs')->insert([
                            'year'=>2,
                            'value_bugeted'=>1000,
                            'value_comitted'=>100,
                            'value_required'=>50,
                            'value_paid'=>20,
                            'own'=>false,
                            'nation'=>true,
                            'royalties'=>false,
                            'funds'=>false,
                            'functioning'=>true,
                            'compensation'=>false,
                            'debt_service'=>false,
                            'p_a_i_id'=>$idpai1,
                            'cost_sources_id'=>$idFuenteGasto2,
                            'group_id'=>2,
                            ]);
                           $idGasto5 = DB::getPdo()->lastInsertId();
                
                           DB::table('financial_costs')->insert([
                            'year'=>2,
                            'value_bugeted'=>200,
                            'value_comitted'=>100,
                            'value_required'=>50,
                            'value_paid'=>20,
                            'own'=>false,
                            'nation'=>false,
                            'royalties'=>true,
                            'funds'=>false,
                            'functioning'=>true,
                            'compensation'=>false,
                            'debt_service'=>false,
                            'p_a_i_id'=>$idpai1,
                            'cost_sources_id'=>$idFuenteGasto2,
                            'group_id'=>2,
                            ]);
                           $idGasto6 = DB::getPdo()->lastInsertId();

                           DB::table('financial_costs')->insert([
                            'year'=>2,
                            'value_bugeted'=>1000,
                            'value_comitted'=>700,
                            'value_required'=>600,
                            'value_paid'=>400,
                            'own'=>false,
                            'nation'=>false,
                            'royalties'=>false,
                            'funds'=>true,
                            'functioning'=>true,
                            'compensation'=>false,
                            'debt_service'=>false,
                            'p_a_i_id'=>$idpai1,
                            'cost_sources_id'=>$idFuenteGasto2,
                            'group_id'=>2,
                            ]);
                           $idGasto7 = DB::getPdo()->lastInsertId();

                           DB::table('financial_costs')->insert([
                            'year'=>2,
                            'value_bugeted'=>300,
                            'value_comitted'=>200,
                            'value_required'=>100,
                            'value_paid'=>50,
                            'own'=>true,
                            'nation'=>false,
                            'royalties'=>false,
                            'funds'=>false,
                            'functioning'=>true,
                            'compensation'=>false,
                            'debt_service'=>false,
                            'p_a_i_id'=>$idpai1,
                            'cost_sources_id'=>$idFuenteGasto3,
                            'group_id'=>2,
                            ]);
                           $idGasto8 = DB::getPdo()->lastInsertId();
                           
                           DB::table('financial_costs')->insert([
                            'year'=>2,
                            'value_bugeted'=>700,
                            'value_comitted'=>600,
                            'value_required'=>500,
                            'value_paid'=>400,
                            'own'=>false,
                            'nation'=>true,
                            'royalties'=>false,
                            'funds'=>false,
                            'functioning'=>true,
                            'compensation'=>false,
                            'debt_service'=>false,
                            'p_a_i_id'=>$idpai1,
                            'cost_sources_id'=>$idFuenteGasto3,
                            'group_id'=>2,
                            ]);
                           $idGasto9 = DB::getPdo()->lastInsertId();

                           DB::table('financial_costs')->insert([
                            'year'=>2,
                            'value_bugeted'=>300,
                            'value_comitted'=>150,
                            'value_required'=>100,
                            'value_paid'=>50,
                            'own'=>false,
                            'nation'=>false,
                            'royalties'=>true,
                            'funds'=>false,
                            'functioning'=>true,
                            'compensation'=>false,
                            'debt_service'=>false,
                            'p_a_i_id'=>$idpai1,
                            'cost_sources_id'=>$idFuenteGasto3,
                            'group_id'=>2,
                            ]);
                           $idGasto10 = DB::getPdo()->lastInsertId();

                           DB::table('financial_costs')->insert([
                            'year'=>2,
                            'value_bugeted'=>3000,
                            'value_comitted'=>2500,
                            'value_required'=>2000,
                            'value_paid'=>1500,
                            'own'=>false,
                            'nation'=>false,
                            'royalties'=>false,
                            'funds'=>true,
                            'functioning'=>true,
                            'compensation'=>false,
                            'debt_service'=>false,
                            'p_a_i_id'=>$idpai1,
                            'cost_sources_id'=>$idFuenteGasto3,
                            'group_id'=>2,
                            ]);
                           $idGasto11 = DB::getPdo()->lastInsertId();

                           DB::table('financial_costs')->insert([
                            'year'=>2,
                            'value_bugeted'=>2100,
                            'value_comitted'=>2000,
                            'value_required'=>1500,
                            'value_paid'=>1000,
                            'own'=>true,
                            'nation'=>false,
                            'royalties'=>false,
                            'funds'=>false,
                            'functioning'=>true,
                            'compensation'=>false,
                            'debt_service'=>false,
                            'p_a_i_id'=>$idpai1,
                            'cost_sources_id'=>$idFuenteGasto4,
                            'group_id'=>2,
                            ]);
                           $idGasto12 = DB::getPdo()->lastInsertId();
                           
                           DB::table('financial_costs')->insert([
                            'year'=>2,
                            'value_bugeted'=>1500,
                            'value_comitted'=>1000,
                            'value_required'=>500,
                            'value_paid'=>0,
                            'own'=>false,
                            'nation'=>false,
                            'royalties'=>true,
                            'funds'=>false,
                            'functioning'=>true,
                            'compensation'=>false,
                            'debt_service'=>false,
                            'p_a_i_id'=>$idpai1,
                            'cost_sources_id'=>$idFuenteGasto4,
                            'group_id'=>2,
                            ]);
                           $idGasto13 = DB::getPdo()->lastInsertId();

                           DB::table('financial_costs')->insert([
                            'year'=>2,
                            'value_bugeted'=>2000,
                            'value_comitted'=>1500,
                            'value_required'=>1000,
                            'value_paid'=>900,
                            'own'=>false,
                            'nation'=>false,
                            'royalties'=>false,
                            'funds'=>true,
                            'functioning'=>true,
                            'compensation'=>false,
                            'debt_service'=>false,
                            'p_a_i_id'=>$idpai1,
                            'cost_sources_id'=>$idFuenteGasto4,
                            'group_id'=>2,
                            ]);
                           $idGasto14 = DB::getPdo()->lastInsertId();

                           DB::table('financial_costs')->insert([
                            'year'=>2,
                            'value_bugeted'=>3500,
                            'value_comitted'=>2400,
                            'value_required'=>1600,
                            'value_paid'=>1200,
                            'own'=>true,
                            'nation'=>false,
                            'royalties'=>false,
                            'funds'=>false,
                            'functioning'=>false,
                            'compensation'=>true,
                            'debt_service'=>false,
                            'p_a_i_id'=>$idpai1,
                            'cost_sources_id'=>$idFuenteGasto5,
                            'group_id'=>2,
                            ]);
                           $idGasto15 = DB::getPdo()->lastInsertId();

                           DB::table('financial_costs')->insert([
                            'year'=>2,
                            'value_bugeted'=>2000,
                            'value_comitted'=>1600,
                            'value_required'=>1300,
                            'value_paid'=>1100,
                            'own'=>false,
                            'nation'=>true,
                            'royalties'=>false,
                            'funds'=>false,
                            'functioning'=>false,
                            'compensation'=>true,
                            'debt_service'=>false,
                            'p_a_i_id'=>$idpai1,
                            'cost_sources_id'=>$idFuenteGasto5,
                            'group_id'=>2,
                            ]);
                           $idGasto16 = DB::getPdo()->lastInsertId();
          
                           DB::table('financial_costs')->insert([
                            'year'=>2,
                            'value_bugeted'=>2000,
                            'value_comitted'=>1800,
                            'value_required'=>1600,
                            'value_paid'=>1400,
                            'own'=>false,
                            'nation'=>false,
                            'royalties'=>true,
                            'funds'=>false,
                            'functioning'=>false,
                            'compensation'=>true,
                            'debt_service'=>false,
                            'p_a_i_id'=>$idpai1,
                            'cost_sources_id'=>$idFuenteGasto5,
                            'group_id'=>2,
                            ]);
                           $idGasto17 = DB::getPdo()->lastInsertId();

                           DB::table('financial_costs')->insert([
                            'year'=>2,
                            'value_bugeted'=>7000,
                            'value_comitted'=>6000,
                            'value_required'=>5000,
                            'value_paid'=>4000,
                            'own'=>true,
                            'nation'=>false,
                            'royalties'=>false,
                            'funds'=>false,
                            'functioning'=>false,
                            'compensation'=>false,
                            'debt_service'=>true,
                            'p_a_i_id'=>$idpai1,
                            'cost_sources_id'=>$idFuenteGasto6,
                            'group_id'=>2,
                            ]);
                           $idGasto18 = DB::getPdo()->lastInsertId();

                           DB::table('financial_costs')->insert([
                            'year'=>2,
                            'value_bugeted'=>12500,
                            'value_comitted'=>12000,
                            'value_required'=>11500,
                            'value_paid'=>11000,
                            'own'=>false,
                            'nation'=>true,
                            'royalties'=>false,
                            'funds'=>false,
                            'functioning'=>false,
                            'compensation'=>false,
                            'debt_service'=>true,
                            'p_a_i_id'=>$idpai1,
                            'cost_sources_id'=>$idFuenteGasto6,
                            'group_id'=>2,
                            ]);
                           $idGasto19 = DB::getPdo()->lastInsertId();

                           DB::table('financial_costs')->insert([
                            'year'=>2,
                            'value_bugeted'=>3000,
                            'value_comitted'=>2900,
                            'value_required'=>2800,
                            'value_paid'=>2700,
                            'own'=>false,
                            'nation'=>false,
                            'royalties'=>true,
                            'funds'=>false,
                            'functioning'=>false,
                            'compensation'=>false,
                            'debt_service'=>true,
                            'p_a_i_id'=>$idpai1,
                            'cost_sources_id'=>$idFuenteGasto6,
                            'group_id'=>2,
                            ]);
                           $idGasto20 = DB::getPdo()->lastInsertId();

               
    }
}                           
