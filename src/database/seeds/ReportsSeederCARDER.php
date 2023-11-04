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
 * Class ReportsSeederCARDER
 */
class ReportsSeederCARDER extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $pai=PAI::create([
        'name' => 'PAI PRUEBAS REPORTES',
        'start_date' => '2019-01-01',
        'end_date' => '2022-12-31',
        'director_name' => 'DIRECTOR',
        'group_id' => 4,
        'approved' => 1,
        ]);
        $idpai1 = DB::getPdo()->lastInsertId();
      

        DB::table('strategic_lines')->insert([
          'name' => 'Línea estratégica',
          'weighing' => 60,
          'p_a_i_id' => $idpai1,
          ]);
          $idline1 = DB::getPdo()->lastInsertId();
          
         DB::table('strategic_lines')->insert([
          'name' => 'Linea 2',
          'weighing' => 40,
          'p_a_i_id' => $idpai1,
          ]);
          $idline2 = DB::getPdo()->lastInsertId();
          
          DB::table('programs')->insert([
            'strategic_line_id' => $idline1,
            'national_program_id' => 798,
            'car_program' => 'PROGRAMA 1 FORTALECIMIENTO DE LA EDUCACION AMBIENTAL Y CULTURA CIUDADANA',
            'weighing' => 70,
            ]);
            $idprogram1 = DB::getPdo()->lastInsertId();
            
            
           DB::table('programs')->insert([
            'strategic_line_id' => $idline1,
            'national_program_id' => 90,
            'car_program' => 'PROGRAMA 2  ESTRATÉGIAS PARA LA CONSERVACION DE LA BIODIVERSIDAD',
            'weighing' => 30,
            ]);
            $idprogram2 = DB::getPdo()->lastInsertId();
            
            
           DB::table('programs')->insert([
            'strategic_line_id' => $idline2,
            'national_program_id' => 168,
            'car_program' => 'PROGRAMA 3  PLANIFICACIÓN AMBIENTAL DEL TERRITORIO PARA LA ADAPTACION AL CAMBIO CLIMÁTICO',
            'weighing' => 100,
            ]);
            $idprogram3 = DB::getPdo()->lastInsertId();
            
            
            DB::table('projects')->insert([
              'program_id' => $idprogram1,
              'project' => 'Proyecto No. 1.1:  Formación Educativo Ambiental',
              'weighing' => 100,
              ]);
              $idproject1 = DB::getPdo()->lastInsertId();
              
            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => 'Proyecto No. 1.2: Promoción de la Educacion Ambiental',
              'weighing' => 100,
              ]);
              $idproject2 = DB::getPdo()->lastInsertId();
              
            DB::table('projects')->insert([
              'program_id' => $idprogram3,
              'project' => 'Proyecto No. 2.1:  Declaración, Socialización, Implementación y Manejo de Áreas Protegidas',
              'weighing' => 50,
              ]);
              $idproject3 = DB::getPdo()->lastInsertId();
              
            DB::table('projects')->insert([
              'program_id' => $idprogram3,
              'project' => 'Proyecto No.2.2:  Restauración de Ecosistemas',
              'weighing' => 50,
              ]);
              $idproject4 = DB::getPdo()->lastInsertId();
              
              
              DB::table('objectives')->insert([
                'project_id' => $idproject1,
                'objective' => 'Objetivo 1',
                'weighing' => 100,
                ]);
                $idobjective1 = DB::getPdo()->lastInsertId();
                
              DB::table('objectives')->insert([
                'project_id' => $idproject2,
                'objective' => 'Objetivo 2',
                'weighing' => 70,
                ]);
                $idobjective2 = DB::getPdo()->lastInsertId();
                
              DB::table('objectives')->insert([
                'project_id' => $idproject2,
                'objective' => 'Objetivo 3',
                'weighing' => 30,
                ]);
                $idobjective3 = DB::getPdo()->lastInsertId();
                
              DB::table('objectives')->insert([
                'project_id' => $idproject3,
                'objective' => 'Objetivo 4',
                'weighing' => 100,
                ]);
                $idobjective4 = DB::getPdo()->lastInsertId();
                
              DB::table('objectives')->insert([
                'project_id' => $idproject4,
                'objective' => 'Objetivo 5',
                'weighing' => 100,
                ]);
                $idobjective5 = DB::getPdo()->lastInsertId();
                

                DB::table('objective_products')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' => null,
                  'product_other' => 'Producto 1',
                  'goal_1' => 1,
                  'goal_2' => 2,
                  'goal_3' => 2,
                  'goal_4' => 2,
                  'total_goal' => 7,
                  'unit_goal' => 71,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 80,
                  ]);
                  $idobjectiveproduct1 = DB::getPdo()->lastInsertId();
                  
                DB::table('objective_products')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' => null,
                  'product_other' => 'Producto 2',
                  'goal_1' => 5,
                  'goal_2' => 5,
                  'goal_3' => 5,
                  'goal_4' => 5,
                  'total_goal' => 20,
                  'unit_goal' => 71,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 20,
                  ]);
                  $idobjectiveproduct2 = DB::getPdo()->lastInsertId();
                  
                DB::table('objective_products')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' => null,
                  'product_other' => 'Producto 3',
                  'goal_1' => 5,
                  'goal_2' => 5,
                  'goal_3' => 5,
                  'goal_4' => 5,
                  'total_goal' => 20,
                  'unit_goal' => 71,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 100,
                  ]);
                  $idobjectiveproduct3 = DB::getPdo()->lastInsertId();
                  
                DB::table('objective_products')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' => null,
                  'product_other' => 'Producto 4',
                  'goal_1' => 18,
                  'goal_2' => 5,
                  'goal_3' => 5,
                  'goal_4' => 3,
                  'total_goal' => 31,
                  'unit_goal' => 71,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 100,
                  ]);
                  $idobjectiveproduct4 = DB::getPdo()->lastInsertId();
                  
                DB::table('objective_products')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' => null,
                  'product_other' => 'Producto 5',
                  'goal_1' => 50,
                  'goal_2' => 50,
                  'goal_3' => 50,
                  'goal_4' => 50,
                  'total_goal' => 200,
                  'unit_goal' => 71,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 100,
                  ]);
                  $idobjectiveproduct5 = DB::getPdo()->lastInsertId();
                  
                DB::table('objective_products')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' => null,
                  'product_other' => 'Producto 6',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'total_goal' => 4,
                  'unit_goal' => 84,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 100,
                  ]);
                  $idobjectiveproduct6 = DB::getPdo()->lastInsertId();
                  

                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct1,
                    'name' => 'ACT 1.1.1. Asesoría a seis (6) municipios y la Gobernación del Magdalena en la conformación de los Comités Interinstitucionales de Educación Ambiental CIDEA',
                    'goal_1' => 3,
                    'goal_2' => 2,
                    'goal_3' => 2,
                    'goal_4' => 2,
                    'goal' => 850000000,
                    'weighing' => 100,
                    ]);
                    $idactivity1 = DB::getPdo()->lastInsertId();
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct2,
                    'name' => 'ACT 1.1.2. Apoyo a la implementación de veinte (20) PROCEDA, en el marco de los CIDEA conformados',
                    'goal_1' => 5,
                    'goal_2' => 5,
                    'goal_3' => 5,
                    'goal_4' => 5,
                    'goal' => 30000000,
                    'weighing' => 100,
                    ]);
                    $idactivity2 = DB::getPdo()->lastInsertId();
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct3,
                    'name' => 'ACT 1.1.3. Apoyo a la  implementación de de veinte (20) PRAES, en el marco de los CIDEA conformados',
                    'goal_1' => 5,
                    'goal_2' => 5,
                    'goal_3' => 5,
                    'goal_4' => 5,
                    'goal' => 38500000,
                    'weighing' => 35,
                    ]);
                    $idactivity3 = DB::getPdo()->lastInsertId();
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct3,
                    'name' => 'ACT 1.1.4. Asesorar a los entes territoriales para formulación de los Planes municipales de educación ambiental',
                    'goal_1' => 18,
                    'goal_2' => 5,
                    'goal_3' => 5,
                    'goal_4' => 3,
                    'goal' => 3849056179,
                    'weighing' => 65,
                    ]);
                    $idactivity4 = DB::getPdo()->lastInsertId();
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct4,
                    'name' => 'ACT 1.1.5. Vincular doscientos (200) nuevos Promotores Ambientales y fortalecer los existentes',
                    'goal_1' => 50,
                    'goal_2' => 50,
                    'goal_3' => 50,
                    'goal_4' => 50,
                    'goal' => 18589023194.87,
                    'weighing' => 45,
                    ]);
                    $idactivity5 = DB::getPdo()->lastInsertId();
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct4,
                    'name' => 'ACT 1.1.6. Asignacion presupuestal',
                    'goal_1' => 5,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 442500000,
                    'weighing' => 55,
                    ]);
                    $idactivity6 = DB::getPdo()->lastInsertId();
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct5,
                    'name' => 'ACT. 1.2.1. Desarrollo de cuatro (4) campañas educativas enfocadas a la conservación de los recursos naturales',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 65048953,
                    'weighing' => 33,
                    ]);
                    $idactivity7 = DB::getPdo()->lastInsertId();
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct5,
                    'name' => 'ACT 1.2.2. Fomentar siete (7) estrategias para promover los intercambios culturales mediante el diálogo de saberes',
                    'goal_1' => 1,
                    'goal_2' => 2,
                    'goal_3' => 2,
                    'goal_4' => 2,
                    'goal' => 636719016,
                    'weighing' => 67,
                    ]);
                    $idactivity8 = DB::getPdo()->lastInsertId();
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct6,
                    'name' => 'ACT 1.2.3. Asignacion presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 30000000,
                    'weighing' => 100,
                    ]);
                    $idactivity9 = DB::getPdo()->lastInsertId();
                    
                    
                  DB::table('financing_sources')->insert([
                    'father_id'=>8,
                    'code'=>'1.1.1.1.2.1',
                    'name'=> 'Participación de intereses de mora sobre la sobretasa ambiental-peajes (vigencia actual)',
                    'description'=>'Participación de intereses de mora sobre la sobretasa ambiental-peajes (vigencia actual)',
                    'type_id'=>22,
                    'final_level'=>true,
                    'group_id'=>4
                    ]);
                    $idFuente1 = DB::getPdo()->lastInsertId();

                    DB::table('financing_sources')->insert([
                      'father_id'=>119,
                      'code'=>'1.1.2.5.1.2.5.1',
                      'name'=> 'Aportes Nación para Funcionamiento',
                      'description'=>'Aportes Nación para Funcionamiento',                                                                     
                      'type_id'=>23,
                      'final_level'=>true,
                      'group_id'=>4
                      ]);
                      $idFuente2 = DB::getPdo()->lastInsertId();
  
                      DB::table('financing_sources')->insert([
                        'father_id'=>131,
                        'code'=>'1.1.2.5.1.2.6.6.1',
                        'name'=> 'Aportes del SPGR para Funcionamiento',                   
                        'description'=>'Aportes del SPGR para Funcionamiento',                      
                        'type_id'=>24,
                        'final_level'=>true,
                        'group_id'=>4
                        ]);
                        $idFuente3 = DB::getPdo()->lastInsertId();

                        DB::table('financial_plans')->insert([
                          'p_a_i_id'=>$idpai1,
                          'source_id'=>$idFuente1,
                          'value'=>2000000000,
                          'investment_percentage'=>50,
                          'investment'=>1000000000,
                          'functioning_percentage'=>30,
                          'functioning'=>200000000,
                          'debt_service_percentage'=>10,
                          'debt_service'=>200000000,
                          'fund_percentage'=>10,
                          'fund'=>200000000,
                          'year'=>1,                   
                          ]);
                          $idPlan1 = DB::getPdo()->lastInsertId();

                          DB::table('financial_plans')->insert([
                          'p_a_i_id'=>$idpai1,
                          'source_id'=>$idFuente2,
                          'value'=>2500000000,
                          'investment_percentage'=>80,
                          'investment'=>2000000000,
                          'functioning_percentage'=>10,
                          'functioning'=>250000000,
                          'debt_service_percentage'=>10,
                          'debt_service'=>250000000,
                          'fund_percentage'=>0,
                          'fund'=>0,
                          'year'=>1,                   
                          ]);
                          $idPlan2 = DB::getPdo()->lastInsertId();  

                          DB::table('financial_plans')->insert([
                          'p_a_i_id'=>$idpai1,
                          'source_id'=>$idFuente3,
                          'value'=>1084844000,
                          'investment_percentage'=>60,
                          'investment'=>650906400,
                          'functioning_percentage'=>0,
                          'functioning'=>0,
                          'debt_service_percentage'=>20,
                          'debt_service'=>216968800,
                          'fund_percentage'=>20,
                          'fund'=>216968800,
                          'year'=>1,                   
                          ]);
                          $idPlan3 = DB::getPdo()->lastInsertId();  

                          DB::table('financial_plans')->insert([
                            'p_a_i_id'=>$idpai1,
                            'source_id'=>$idFuente1,
                            'value'=>2000000000,
                            'investment_percentage'=>60,
                            'investment'=>600000000,
                            'functioning_percentage'=>10,
                            'functioning'=>100000000,
                            'debt_service_percentage'=>30,
                            'debt_service'=>300000000,
                            'fund_percentage'=>0,
                            'fund'=>0,
                            'year'=>2,                   
                            ]);
                            $idPlan4 = DB::getPdo()->lastInsertId();
  
                            DB::table('financial_plans')->insert([
                            'p_a_i_id'=>$idpai1,
                            'source_id'=>$idFuente2,
                            'value'=>1000000000,
                            'investment_percentage'=>60,
                            'investment'=>600000000,
                            'functioning_percentage'=>10,
                            'functioning'=>100000000,
                            'debt_service_percentage'=>20,
                            'debt_service'=>200000000,
                            'fund_percentage'=>10,
                            'fund'=>100000000,
                            'year'=>2,                   
                            ]);
                            $idPlan5 = DB::getPdo()->lastInsertId();  
  
                            DB::table('financial_plans')->insert([
                            'p_a_i_id'=>$idpai1,
                            'source_id'=>$idFuente3,
                            'value'=>2331368100,
                            'investment_percentage'=>70,
                            'investment'=>1631957670,
                            'functioning_percentage'=>10,
                            'functioning'=>233136810,
                            'debt_service_percentage'=>10,
                            'debt_service'=>233136810,
                            'fund_percentage'=>10,
                            'fund'=>233136810,
                            'year'=>2,                   
                            ]);
                            $idPlan6 = DB::getPdo()->lastInsertId();  
 
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity1,'source_id' => $idPlan1,'age' => 1,
                              'value' => 273938855,
                              'goal' => 1,
                              
                              ]);
                              $idActsourc1 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity2,'source_id' => $idPlan1,'age' => 1,
                              'value' => 197000000,
                              'goal' => 1,
                              
                              ]);
                              $idActsourc2 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity3,'source_id' => $idPlan1,'age' => 1,
                              'value' => 240000000,
                              'goal' => 1,
                              
                              ]);
                              $idActsourc3 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity4,'source_id' => $idPlan1,'age' => 1,
                              'value' => 289061145,
                              'goal' => 1,
                              
                              ]);
                              $idActsourc4 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity5,'source_id' => $idPlan2,'age' => 1,
                              'value' => 639954955,
                              'goal' => 2,
                              
                              ]);
                              $idActsourc5 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity6,'source_id' => $idPlan2,'age' => 1,
                              'value' => 193120000,
                              'goal' => 2,
                              
                              ]);
                              $idActsourc6 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity7,'source_id' => $idPlan2,'age' => 1,
                              'value' => 153370064,
                              'goal' => 2,
                              
                              ]);
                              $idActsourc7 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity8,'source_id' => $idPlan2,'age' => 1,
                              'value' => 688708490,
                              'goal' => 2,
                              
                              ]);
                              $idActsourc8 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity9,'source_id' => $idPlan2,'age' => 1,
                              'value' => 109157041,
                              'goal' => 2,
                              
                              ]);
                              $idActsourc9 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity4,'source_id' => $idPlan2,'age' => 1,
                              'value' => 215689450,
                              'goal' => 1,
                              
                              ]);
                              $idActsourc10 = DB::getPdo()->lastInsertId();
                              
                            
                            
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity9,'source_id' => $idPlan3,'age' => 1,
                              'value' => 650906400,
                              'goal' => 2,
                              
                              ]);
                              $idActsourc11 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity1,'source_id' => $idPlan6,'age' => 2,
                              'value' => 530000000,
                              'goal' => 530000000,
                              
                              ]);
                              $idActsourc12 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity2,'source_id' => $idPlan4,'age' => 2,
                              'value' => 240000000,
                              'goal' => 240000000,
                              
                              ]);
                              $idActsourc13 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity3,'source_id' => $idPlan4,'age' => 2,
                              'value' => 170000000,
                              'goal' => 495000000,
                              
                              ]);
                              $idActsourc14 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity4,'source_id' => $idPlan4,'age' => 2,
                              'value' => 111845670,
                              'goal' => 111845670,
                              
                              ]);
                              $idActsourc15 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity5,'source_id' => $idPlan4,'age' => 2,
                              'value' => 78154330,
                              'goal' => 100000000,
                              
                              ]);
                              $idActsourc16 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity6,'source_id' => $idPlan5,'age' => 2,
                              'value' => 205907730,
                              'goal' => 377865400,
                              
                              ]);
                              $idActsourc17 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity7,'source_id' => $idPlan6,'age' => 2,
                              'value' => 605000000,
                              'goal' => 605000000,
                              
                              ]);
                              $idActsourc18 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity8,'source_id' => $idPlan5,'age' => 2,
                              'value' => 309338000,
                              'goal' => 309338000,
                              
                              ]);
                              $idActsourc19 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity9,'source_id' => $idPlan5,'age' => 2,
                              'value' => 62908600,
                              'goal' => 62908600,
                              
                              ]);
                              $idActsourc20 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity3,'source_id' => $idPlan6,'age' => 2,
                              'value' => 325000000,
                              'goal' => 495000000,
                              
                              ]);
                              $idActsourc21 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity5,'source_id' => $idPlan5,'age' => 2,
                              'value' => 21845670,
                              'goal' => 100000000,
                              
                              ]);
                              $idActsourc22 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity6,'source_id' => $idPlan6,'age' => 2,
                              'value' => 171957670,
                              'goal' => 377865400,
                              
                              ]);
                              $idActsourc23 = DB::getPdo()->lastInsertId();
                              
                                
                            DB::table('evidence_advance')->insert([
                              'year' => 1,
                              'value' => 1,
                              'date_report' => '2019-09-30',
                              'rezago' => false,
                              'activity_id' => $idactivity1,
                              ]);
                              $idevidencia1 = DB::getPdo()->lastInsertId();
                              
                              
                            DB::table('evidence_advance')->insert([
                              'year' => 1,
                              'value' => 11,
                              'date_report' => '2019-09-30',
                              'rezago' => false,
                              'activity_id' => $idactivity3,
                              ]);
                              $idevidencia2 = DB::getPdo()->lastInsertId();
                              
                              
                            DB::table('evidence_advance')->insert([
                              'year' => 1,
                              'value' => 40,
                              'date_report' => '2019-09-30',
                              'rezago' => false,
                              'activity_id' => $idactivity5,
                              ]);
                              $idevidencia3 = DB::getPdo()->lastInsertId();
                              
                            DB::table('evidence_advance')->insert([
                              'year' => 1,
                              'value' => 1,
                              'date_report' => '2019-09-30',
                              'rezago' => false,
                              'activity_id' => $idactivity7,
                              ]);
                              $idevidencia4 = DB::getPdo()->lastInsertId();
                              
                            DB::table('evidence_advance')->insert([
                              'year' => 1,
                              'value' => 1,
                              'date_report' => '2019-09-30',
                              'rezago' => false,
                              'activity_id' => $idactivity9,
                              ]);
                              $idevidencia5 = DB::getPdo()->lastInsertId();
                              
                            DB::table('evidence_advance')->insert([
                              'year' => 2,
                              'value' => 3,
                              'date_report' => '2020-09-30',
                              'rezago' => false,
                              'activity_id' => $idactivity1,
                              ]);
                              $idevidencia6 = DB::getPdo()->lastInsertId();
                              
                            DB::table('evidence_advance')->insert([
                              'year' => 2,
                              'value' => 5,
                              'date_report' => '2020-09-30',
                              'rezago' => false,
                              'activity_id' => $idactivity2,
                              ]);
                              $idevidencia7 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_advance')->insert([
                              'year' => 2,
                              'value' => 5,
                              'date_report' => '2020-09-30',
                              'rezago' => false,
                              'activity_id' => $idactivity3,
                              ]);
                              $idevidencia8 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_advance')->insert([
                              'year' => 2,
                              'value' => 6,
                              'date_report' => '2020-09-30',
                              'rezago' => false,
                              'activity_id' => $idactivity4,
                              ]);
                              $idevidencia9 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_advance')->insert([
                              'year' => 2,
                              'value' => 50,
                              'date_report' => '2020-09-30',
                              'rezago' => false,
                              'activity_id' => $idactivity5,
                              ]);
                              $idevidencia10 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_advance')->insert([
                              'year' => 2,
                              'value' => 1,
                              'date_report' => '2020-09-30',
                              'rezago' => false,
                              'activity_id' => $idactivity6,
                              ]);
                              $idevidencia11 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_advance')->insert([
                              'year' => 2,
                              'value' => 1,
                              'date_report' => '2020-09-30',
                              'rezago' => false,
                              'activity_id' => $idactivity7,
                              ]);
                              $idevidencia12 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_advance')->insert([
                              'year' => 2,
                              'value' => 3,
                              'date_report' => '2020-09-30',
                              'rezago' => false,
                              'activity_id' => $idactivity8,
                              ]);
                              $idevidencia13 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_advance')->insert([
                              'year' => 2,
                              'value' => 1,
                              'date_report' => '2020-09-30',
                              'rezago' => false,
                              'activity_id' => $idactivity9,
                              ]);
                              $idevidencia14 = DB::getPdo()->lastInsertId();
                              
                              DB::table('evidence_advance')->insert([
                                'year' => 1,
                                'value' => 2,
                                'date_report' => '2020-09-20',
                                'rezago' => true,
                                'activity_id' => $idactivity1,
                                ]);
                                $idevidencia15 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_advance')->insert([
                                'year' => 1,
                                'value' => 2,
                                'date_report' => '2020-09-20',
                                'rezago' => true,
                                'activity_id' => $idactivity2,
                                ]);
                                $idevidencia16 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              
                              DB::table('evidence_advance')->insert([
                                'year' => 1,
                                'value' => 3,
                                'date_report' => '2020-09-20',
                                'rezago' => true,
                                'activity_id' => $idactivity4,
                                ]);
                                $idevidencia17 = DB::getPdo()->lastInsertId();
                              
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia1,
                                  'activity_source_id' => $idActsourc1,
                                  'value' => 257554402,
                                  ]);
                                  $idEvidFinanc1 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia2,
                                  'activity_source_id' => $idActsourc3,
                                  'value' => 50000000,
                                  ]);
                                  $idEvidFinanc2 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia3,
                                  'activity_source_id' => $idActsourc5,
                                  'value' => 188110000,
                                  ]);
                                  $idEvidFinanc3 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia4,
                                  'activity_source_id' => $idActsourc7,
                                  'value' => 50832200,
                                  ]);
                                  $idEvidFinanc4 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia5,
                                  'activity_source_id' => $idActsourc9,
                                  'value' => 80000000,
                                  ]);
                                  $idEvidFinanc5 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia5,
                                  'activity_source_id' => $idActsourc6,
                                  'value' => 39748634,
                                  ]);
                                  $idEvidFinanc11 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia6,
                                  'activity_source_id' => $idActsourc12,
                                  'value' => 510206950,
                                  ]);
                                  $idEvidFinanc7 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia7,
                                  'activity_source_id' => $idActsourc13,
                                  'value' => 239906664,
                                  ]);
                                  $idEvidFinanc8 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia8,
                                  'activity_source_id' => $idActsourc14,
                                  'value' => 150000000,
                                  ]);
                                  $idEvidFinanc9 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia9,
                                  'activity_source_id' => $idActsourc15,
                                  'value' => 60452626,
                                  ]);
                                  $idEvidFinanc10 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia10,
                                  'activity_source_id' => $idActsourc16,
                                  'value' => 60000000,
                                  ]);
                                  $idEvidFinanc11 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia11,
                                  'activity_source_id' => $idActsourc17,
                                  'value' => 37765805,
                                  ]);
                                  $idEvidFinanc12 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia12,
                                  'activity_source_id' => $idActsourc18,
                                  'value' => 381440137,
                                  ]);
                                  $idEvidFinanc13 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia13,
                                  'activity_source_id' => $idActsourc19,
                                  'value' => 140000000,
                                  ]);
                                  $idEvidFinanc14 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia14,
                                  'activity_source_id' => $idActsourc20,
                                  'value' => 47796600,
                                  ]);
                                  $idEvidFinanc15 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia8,
                                  'activity_source_id' => $idActsourc21,
                                  'value' => 315900199,
                                  ]);
                                  $idEvidFinanc16 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                
                                
                                
                                
                                
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia14,
                                  'activity_source_id' => $idActsourc23,
                                  'value' => 14353400,
                                  ]);
                                  $idEvidFinanc17 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia15,
                                  'activity_source_id' => $idActsourc1,
                                  'value' => 16384453,
                                  ]);
                                  $idEvidFinanc18 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia16,
                                  'activity_source_id' => $idActsourc2,
                                  'value' => 91560000,
                                  ]);
                                  $idEvidFinanc19 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia17,
                                  'activity_source_id' => $idActsourc4,
                                  'value' => 188110000,
                                  ]);
                                  $idEvidFinanc20 = DB::getPdo()->lastInsertId();
                                  
                                  
                                DB::table('implementations')->insert([
                                  'p_a_i_s_id'=>$idpai1,
                                  ]);
                                  $idImplementation1 = DB::getPdo()->lastInsertId();

                                DB::table('fundraisings')->insert([
                                  'date'=>'2019-10-30',
                                  'value'=>1200000000,
                                  'financial_plans_id'=>$idPlan1,
                                  'implementation_id'=>$idImplementation1,
                                  ]);
                                  $idRecaudo1 = DB::getPdo()->lastInsertId();
 
                                DB::table('fundraisings')->insert([
                                  'date'=>'2019-10-30',
                                  'value'=>3500000000,
                                  'financial_plans_id'=>$idPlan2,
                                  'implementation_id'=>$idImplementation1,
                                  ]);
                                  $idRecaudo2 = DB::getPdo()->lastInsertId();
  
                                  DB::table('fundraisings')->insert([
                                    'date'=>'2019-10-30',
                                    'value'=>1084844000,
                                    'financial_plans_id'=>$idPlan3,
                                    'implementation_id'=>$idImplementation1,
                                    ]);
                                    $idRecaudo3 = DB::getPdo()->lastInsertId();
   
                                  DB::table('fundraisings')->insert([
                                    'date'=>'2020-09-30',
                                    'value'=>3000000000,
                                    'financial_plans_id'=>$idPlan4,
                                    'implementation_id'=>$idImplementation1,
                                    ]);
                                    $idRecaudo4 = DB::getPdo()->lastInsertId();
    
                                    DB::table('fundraisings')->insert([
                                      'date'=>'2020-09-30',
                                      'value'=>1000000000,
                                      'financial_plans_id'=>$idPlan5,
                                      'implementation_id'=>$idImplementation1,
                                      ]);
                                      $idRecaudo5 = DB::getPdo()->lastInsertId();
     
                                    DB::table('fundraisings')->insert([
                                      'date'=>'2020-09-30',
                                      'value'=>2000000000,
                                      'financial_plans_id'=>$idPlan6,
                                      'implementation_id'=>$idImplementation1,
                                      ]);
                                      $idRecaudo6 = DB::getPdo()->lastInsertId();
                    }
}