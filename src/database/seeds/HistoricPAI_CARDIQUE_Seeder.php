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
 * Class HistoricPAI_CARDIQUE_Seeder
 */
class HistoricPAI_CARDIQUE_Seeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $pai=PAI::create([
      'name' => 'PLAN DE ACCIÓN INSTITUCIONAL - PAI DE CARDIQUE 2016 – 2019 “Ambiente para Mejorar los Servicios Ecosistémicos”',
      'start_date' => '2016-01-01',
      'end_date' => '2019-12-31',
      'director_name' => 'OLAFF PUELLO CASTILLO',
      'group_id' => 5,
      'approved' => 1,
      ]);
      $idpai1 = DB::getPdo()->lastInsertId();
    

      DB::table('strategic_lines')->insert([
        'name' => 'Línea estratégica',
        'weighing' => 100,
        'p_a_i_id' => $idpai1,
        ]);
        $idline1 = DB::getPdo()->lastInsertId();
        
      
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => '01. ADMINISTRACIÓN Y MANEJO DEL RECURSO HÍDRICO',
          'weighing' => 16,
          ]);
          $idprogram1 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => '02. ADMINISTRACIÓN Y MANEJO DE LA BIODIVERSIDAD',
          'weighing' => 16,
          ]);
          $idprogram2 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => '0.3. GESTIÓN AMBIENTAL PARA EL DESARROLLO DE LOS ENTES TERRITORIALES',
          'weighing' => 17,
          ]);
          $idprogram3 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => '0.4. ORDENAMIENTO AMBIENTAL Y TERRITORIAL',
          'weighing' => 17,
          ]);
          $idprogram4 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => '0.5. FORTALECIMIENTO INSTITUCIONAL',
          'weighing' => 17,
          ]);
          $idprogram5 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => '0.6. EDUCACION AMBIENTAL  Y PARTICIPACIÓN SOCIAL',
          'weighing' => 17,
          ]);
          $idprogram6 = DB::getPdo()->lastInsertId();
          
          
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => '01. AGUAS SUPERFICIALES CONTINENTALES.',
            'weighing' => 25,
            ]);
            $idproject1 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => '0.2 RECUPERACIÓN Y CONSERVACIÓN DEL PARQUE NATURAL DISTRITAL CIÉNAGA DE LA VIRGEN',
            'weighing' => 25,
            ]);
            $idproject2 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => '03. AGUAS SUBTERRÁNEAS',
            'weighing' => 25,
            ]);
            $idproject3 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => '04. AGUAS MARINO  - COSTERA',
            'weighing' => 25,
            ]);
            $idproject4 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => '01.  USO Y MANEJO DE BOSQUES',
            'weighing' => 50,
            ]);
            $idproject5 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => '02. USO Y MANEJO DE FAUNA SILVESTRE.',
            'weighing' => 50,
            ]);
            $idproject6 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram3,
            'project' => '01. MANEJO DE RESIDUOS URBANOS',
            'weighing' => 50,
            ]);
            $idproject7 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram3,
            'project' => '02. IMPLEMENTACIÓN DE PROCESOS PRODUCTIVOS LIMPIOS Y MERCADOS VERDES',
            'weighing' => 50,
            ]);
            $idproject8 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram4,
            'project' => '01. PLANEACION Y GESTION INTEGRAL DEL RIESGO',
            'weighing' => 100,
            ]);
            $idproject9 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram5,
            'project' => '01. LABORATORIO DE CALIDAD AMBIENTAL',
            'weighing' => 33,
            ]);
            $idproject10 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram5,
            'project' => '02. ARTICULACIÓN DEL SINA.',
            'weighing' => 33,
            ]);
            $idproject11 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram5,
            'project' => '03. DESARROLLO CORPORATIVO',
            'weighing' => 34,
            ]);
            $idproject12 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram6,
            'project' => '01. GESTIÓN A PROYECTOS AMBIENTALES.',
            'weighing' => 50,
            ]);
            $idproject13 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram6,
            'project' => '02. CONSTRUCCIÓN DE UNA CULTURA AMBIENTAL DESDE LAS ESCUELAS Y LA CUMINIDAD EN GENERAL Y SU ENTORNO.',
            'weighing' => 50,
            ]);
            $idproject14 = DB::getPdo()->lastInsertId();
            
            
            DB::table('objectives')->insert([
              'project_id' => $idproject1,
              'objective' => 'Objetivo',
              'weighing' => 100,
              ]);
              $idobjective1 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject2,
              'objective' => 'Objetivo',
              'weighing' => 100,
              ]);
              $idobjective2 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject3,
              'objective' => 'Objetivo',
              'weighing' => 100,
              ]);
              $idobjective3 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject4,
              'objective' => 'Objetivo',
              'weighing' => 100,
              ]);
              $idobjective4 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject5,
              'objective' => 'Objetivo',
              'weighing' => 100,
              ]);
              $idobjective5 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject6,
              'objective' => 'Objetivo',
              'weighing' => 100,
              ]);
              $idobjective6 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject7,
              'objective' => 'Objetivo',
              'weighing' => 100,
              ]);
              $idobjective7 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject8,
              'objective' => 'Objetivo',
              'weighing' => 100,
              ]);
              $idobjective8 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject9,
              'objective' => 'Objetivo',
              'weighing' => 100,
              ]);
              $idobjective9 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject10,
              'objective' => 'Objetivo',
              'weighing' => 100,
              ]);
              $idobjective10 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject11,
              'objective' => 'Objetivo',
              'weighing' => 100,
              ]);
              $idobjective11 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject12,
              'objective' => 'Objetivo',
              'weighing' => 100,
              ]);
              $idobjective12 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject13,
              'objective' => 'Objetivo',
              'weighing' => 100,
              ]);
              $idobjective13 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject14,
              'objective' => 'Objetivo',
              'weighing' => 100,
              ]);
              $idobjective14 = DB::getPdo()->lastInsertId();
              
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 116,
                'goal_2' => 114,
                'goal_3' => 2,
                'goal_4' => 52,
                'goal_1_balance' => 116,
                'goal_2_balance' => 114,
                'goal_3_balance' => 2,
                'goal_4_balance' => 52,
                'total_goal' => 284,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct1 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 106,
                'goal_2' => 36,
                'goal_3' => 0,
                'goal_4' => 14,
                'goal_1_balance' => 106,
                'goal_2_balance' => 36,
                'goal_3_balance' => 0,
                'goal_4_balance' => 14,
                'total_goal' => 156,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct2 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 0,
                'goal_4' => 2,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 0,
                'goal_4_balance' => 2,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct3 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 25,
                'goal_2' => 25,
                'goal_3' => 0,
                'goal_4' => 50,
                'goal_1_balance' => 25,
                'goal_2_balance' => 25,
                'goal_3_balance' => 0,
                'goal_4_balance' => 50,
                'total_goal' => 100,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct4 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => null,
                'product_other' => 'Producto 5',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 4873,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 4873,
                'total_goal' => 4873,
                'unit_goal' => 56,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct5 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => null,
                'product_other' => 'Producto 6',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 1,
                'goal_4' => 0,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 1,
                'goal_4_balance' => 0,
                'total_goal' => 1,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct6 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => null,
                'product_other' => 'Producto 7',
                'goal_1' => 1,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 1,
                'total_goal' => 2,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct7 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => null,
                'product_other' => 'Producto 8',
                'goal_1' => 660,
                'goal_2' => 519,
                'goal_3' => 600,
                'goal_4' => 700,
                'goal_1_balance' => 660,
                'goal_2_balance' => 519,
                'goal_3_balance' => 600,
                'goal_4_balance' => 700,
                'total_goal' => 2479,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct8 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => null,
                'product_other' => 'Producto 9',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 2,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct9 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => null,
                'product_other' => 'Producto 10',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct10 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 6,
                'goal_2' => 7,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 6,
                'goal_2_balance' => 7,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 13,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 25,
                ]);
                $idobjectiveproduct11 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 8,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 8,
                'total_goal' => 8,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 25,
                ]);
                $idobjectiveproduct12 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 0,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 0,
                'goal_4_balance' => 1,
                'total_goal' => 3,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 25,
                ]);
                $idobjectiveproduct13 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 2,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 1,
                'goal_1_balance' => 2,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 1,
                'total_goal' => 3,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 24,
                ]);
                $idobjectiveproduct14 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => null,
                'product_other' => 'Producto 5',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct15 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 4,
                'goal_4' => 0,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 4,
                'goal_4_balance' => 0,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 25,
                ]);
                $idobjectiveproduct16 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 1,
                'goal_2' => 0,
                'goal_3' => 4,
                'goal_4' => 0,
                'goal_1_balance' => 1,
                'goal_2_balance' => 0,
                'goal_3_balance' => 4,
                'goal_4_balance' => 0,
                'total_goal' => 5,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 25,
                ]);
                $idobjectiveproduct17 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 1,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 1,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 1,
                'unit_goal' => 57,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 25,
                ]);
                $idobjectiveproduct18 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 57,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 24,
                ]);
                $idobjectiveproduct19 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => null,
                'product_other' => 'Producto 5',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct20 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective4,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 1,
                'goal_4' => 2,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 1,
                'goal_4_balance' => 2,
                'total_goal' => 3,
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct21 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective4,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct22 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective4,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 1,
                'goal_4' => 0,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 1,
                'goal_4_balance' => 0,
                'total_goal' => 1,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct23 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective4,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 1,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 1,
                'total_goal' => 1,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct24 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective4,
                'product_id' => null,
                'product_other' => 'Producto 5',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 2,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 2,
                'total_goal' => 5,
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct25 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective4,
                'product_id' => null,
                'product_other' => 'Producto 6',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct26 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective4,
                'product_id' => null,
                'product_other' => 'Producto 7',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 1,
                'goal_4' => 0,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 1,
                'goal_4_balance' => 0,
                'total_goal' => 1,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct27 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective4,
                'product_id' => null,
                'product_other' => 'Producto 8',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 2,
                ]);
                $idobjectiveproduct28 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 220,
                'goal_2' => 100,
                'goal_3' => 120,
                'goal_4' => 185.5,
                'goal_1_balance' => 220,
                'goal_2_balance' => 100,
                'goal_3_balance' => 120,
                'goal_4_balance' => 185.5,
                'total_goal' => 625.5,
                'unit_goal' => 47,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 6,
                ]);
                $idobjectiveproduct29 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 10000,
                'goal_2' => 10000,
                'goal_3' => 0,
                'goal_4' => 30000,
                'goal_1_balance' => 10000,
                'goal_2_balance' => 10000,
                'goal_3_balance' => 0,
                'goal_4_balance' => 30000,
                'total_goal' => 50000,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 6,
                ]);
                $idobjectiveproduct30 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 240,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 240,
                'total_goal' => 240,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 6,
                ]);
                $idobjectiveproduct31 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 300,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 300,
                'total_goal' => 300,
                'unit_goal' => 47,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 6,
                ]);
                $idobjectiveproduct32 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
                'product_other' => 'Producto 5',
                'goal_1' => 40,
                'goal_2' => 40,
                'goal_3' => 40,
                'goal_4' => 40,
                'goal_1_balance' => 40,
                'goal_2_balance' => 40,
                'goal_3_balance' => 40,
                'goal_4_balance' => 40,
                'total_goal' => 160,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 6,
                ]);
                $idobjectiveproduct33 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
                'product_other' => 'Producto 6',
                'goal_1' => 10,
                'goal_2' => 10,
                'goal_3' => 10,
                'goal_4' => 10,
                'goal_1_balance' => 10,
                'goal_2_balance' => 10,
                'goal_3_balance' => 10,
                'goal_4_balance' => 10,
                'total_goal' => 40,
                'unit_goal' => 47,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 6,
                ]);
                $idobjectiveproduct34 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
                'product_other' => 'Producto 7',
                'goal_1' => 100,
                'goal_2' => 100,
                'goal_3' => 100,
                'goal_4' => 100,
                'goal_1_balance' => 100,
                'goal_2_balance' => 100,
                'goal_3_balance' => 100,
                'goal_4_balance' => 100,
                'total_goal' => 400,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 7,
                ]);
                $idobjectiveproduct35 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
                'product_other' => 'Producto 8',
                'goal_1' => 0,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 0,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 3,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 7,
                ]);
                $idobjectiveproduct36 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
                'product_other' => 'Producto 9',
                'goal_1' => 0,
                'goal_2' => 25,
                'goal_3' => 25,
                'goal_4' => 25,
                'goal_1_balance' => 0,
                'goal_2_balance' => 25,
                'goal_3_balance' => 25,
                'goal_4_balance' => 25,
                'total_goal' => 75,
                'unit_goal' => 47,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 7,
                ]);
                $idobjectiveproduct37 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
                'product_other' => 'Producto 10',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 0,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 7,
                ]);
                $idobjectiveproduct38 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
                'product_other' => 'Producto 11',
                'goal_1' => 100,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 100,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 100,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 7,
                ]);
                $idobjectiveproduct39 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
                'product_other' => 'Producto 12',
                'goal_1' => 0,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 0,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 3,
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 7,
                ]);
                $idobjectiveproduct40 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
                'product_other' => 'Producto 13',
                'goal_1' => 0,
                'goal_2' => 1,
                'goal_3' => 0,
                'goal_4' => 2,
                'goal_1_balance' => 0,
                'goal_2_balance' => 1,
                'goal_3_balance' => 0,
                'goal_4_balance' => 2,
                'total_goal' => 3,
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 7,
                ]);
                $idobjectiveproduct41 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
                'product_other' => 'Producto 14',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 2,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 2,
                'total_goal' => 2,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 7,
                ]);
                $idobjectiveproduct42 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
                'product_other' => 'Producto 15',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 1,
                'goal_4' => 2,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 1,
                'goal_4_balance' => 2,
                'total_goal' => 3,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 7,
                ]);
                $idobjectiveproduct43 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
                'product_other' => 'Producto 16',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct44 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective6,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 0,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 0,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 3,
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 9,
                ]);
                $idobjectiveproduct45 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective6,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 9,
                ]);
                $idobjectiveproduct46 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective6,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 25,
                'goal_2' => 25,
                'goal_3' => 25,
                'goal_4' => 25,
                'goal_1_balance' => 25,
                'goal_2_balance' => 25,
                'goal_3_balance' => 25,
                'goal_4_balance' => 25,
                'total_goal' => 100,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 9,
                ]);
                $idobjectiveproduct47 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective6,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 100,
                'goal_2' => 100,
                'goal_3' => 100,
                'goal_4' => 100,
                'goal_1_balance' => 100,
                'goal_2_balance' => 100,
                'goal_3_balance' => 100,
                'goal_4_balance' => 100,
                'total_goal' => 400,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 9,
                ]);
                $idobjectiveproduct48 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective6,
                'product_id' => null,
                'product_other' => 'Producto 5',
                'goal_1' => 1,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 1,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 1,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 9,
                ]);
                $idobjectiveproduct49 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective6,
                'product_id' => null,
                'product_other' => 'Producto 6',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 1,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 1,
                'total_goal' => 1,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 9,
                ]);
                $idobjectiveproduct50 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective6,
                'product_id' => null,
                'product_other' => 'Producto 7',
                'goal_1' => 0,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 0,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 3,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 9,
                ]);
                $idobjectiveproduct51 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective6,
                'product_id' => null,
                'product_other' => 'Producto 8',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 9,
                ]);
                $idobjectiveproduct52 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective6,
                'product_id' => null,
                'product_other' => 'Producto 9',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 9,
                ]);
                $idobjectiveproduct53 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective6,
                'product_id' => null,
                'product_other' => 'Producto 10',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 9,
                ]);
                $idobjectiveproduct54 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective6,
                'product_id' => null,
                'product_other' => 'Producto 11',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 9,
                ]);
                $idobjectiveproduct55 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective6,
                'product_id' => null,
                'product_other' => 'Producto 12',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct56 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 21,
                'goal_2' => 21,
                'goal_3' => 21,
                'goal_4' => 21,
                'goal_1_balance' => 21,
                'goal_2_balance' => 21,
                'goal_3_balance' => 21,
                'goal_4_balance' => 21,
                'total_goal' => 84,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 12,
                ]);
                $idobjectiveproduct57 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 1,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 1,
                'total_goal' => 1,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 12,
                ]);
                $idobjectiveproduct58 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 0,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 0,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 3,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 12,
                ]);
                $idobjectiveproduct59 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 12,
                ]);
                $idobjectiveproduct60 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
                'product_id' => null,
                'product_other' => 'Producto 5',
                'goal_1' => 5,
                'goal_2' => 6,
                'goal_3' => 6,
                'goal_4' => 4,
                'goal_1_balance' => 5,
                'goal_2_balance' => 6,
                'goal_3_balance' => 6,
                'goal_4_balance' => 4,
                'total_goal' => 21,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 12,
                ]);
                $idobjectiveproduct61 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
                'product_id' => null,
                'product_other' => 'Producto 6',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 13,
                ]);
                $idobjectiveproduct62 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
                'product_id' => null,
                'product_other' => 'Producto 7',
                'goal_1' => 100,
                'goal_2' => 100,
                'goal_3' => 100,
                'goal_4' => 100,
                'goal_1_balance' => 100,
                'goal_2_balance' => 100,
                'goal_3_balance' => 100,
                'goal_4_balance' => 100,
                'total_goal' => 400,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 13,
                ]);
                $idobjectiveproduct63 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
                'product_id' => null,
                'product_other' => 'Producto 8',
                'goal_1' => 100,
                'goal_2' => 100,
                'goal_3' => 100,
                'goal_4' => 100,
                'goal_1_balance' => 100,
                'goal_2_balance' => 100,
                'goal_3_balance' => 100,
                'goal_4_balance' => 100,
                'total_goal' => 400,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 13,
                ]);
                $idobjectiveproduct64 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
                'product_id' => null,
                'product_other' => 'Producto 9',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct65 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 7,
                'goal_2' => 7,
                'goal_3' => 7,
                'goal_4' => 7,
                'goal_1_balance' => 7,
                'goal_2_balance' => 7,
                'goal_3_balance' => 7,
                'goal_4_balance' => 7,
                'total_goal' => 28,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 7,
                ]);
                $idobjectiveproduct66 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 4,
                'goal_2' => 4,
                'goal_3' => 4,
                'goal_4' => 1,
                'goal_1_balance' => 4,
                'goal_2_balance' => 4,
                'goal_3_balance' => 4,
                'goal_4_balance' => 1,
                'total_goal' => 13,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 7,
                ]);
                $idobjectiveproduct67 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 4,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 4,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 7,
                ]);
                $idobjectiveproduct68 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 0,
                'goal_2' => 100,
                'goal_3' => 100,
                'goal_4' => 100,
                'goal_1_balance' => 0,
                'goal_2_balance' => 100,
                'goal_3_balance' => 100,
                'goal_4_balance' => 100,
                'total_goal' => 300,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 7,
                ]);
                $idobjectiveproduct69 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
                'product_id' => null,
                'product_other' => 'Producto 5',
                'goal_1' => 0,
                'goal_2' => 33.33,
                'goal_3' => 33.33,
                'goal_4' => 33.33,
                'goal_1_balance' => 0,
                'goal_2_balance' => 33.33,
                'goal_3_balance' => 33.33,
                'goal_4_balance' => 33.33,
                'total_goal' => 99.99,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 7,
                ]);
                $idobjectiveproduct70 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
                'product_id' => null,
                'product_other' => 'Producto 6',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct71 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
                'product_id' => null,
                'product_other' => 'Producto 7',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct72 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
                'product_id' => null,
                'product_other' => 'Producto 8',
                'goal_1' => 21,
                'goal_2' => 21,
                'goal_3' => 21,
                'goal_4' => 21,
                'goal_1_balance' => 21,
                'goal_2_balance' => 21,
                'goal_3_balance' => 21,
                'goal_4_balance' => 21,
                'total_goal' => 84,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct73 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
                'product_id' => null,
                'product_other' => 'Producto 9',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct74 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
                'product_id' => null,
                'product_other' => 'Producto 10',
                'goal_1' => 50,
                'goal_2' => 50,
                'goal_3' => 50,
                'goal_4' => 50,
                'goal_1_balance' => 50,
                'goal_2_balance' => 50,
                'goal_3_balance' => 50,
                'goal_4_balance' => 50,
                'total_goal' => 200,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct75 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
                'product_id' => null,
                'product_other' => 'Producto 11',
                'goal_1' => 0,
                'goal_2' => 100,
                'goal_3' => 100,
                'goal_4' => 100,
                'goal_1_balance' => 0,
                'goal_2_balance' => 100,
                'goal_3_balance' => 100,
                'goal_4_balance' => 100,
                'total_goal' => 300,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct76 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
                'product_id' => null,
                'product_other' => 'Producto 12',
                'goal_1' => 0,
                'goal_2' => 10,
                'goal_3' => 0,
                'goal_4' => 20,
                'goal_1_balance' => 0,
                'goal_2_balance' => 10,
                'goal_3_balance' => 0,
                'goal_4_balance' => 20,
                'total_goal' => 30,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct77 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
                'product_id' => null,
                'product_other' => 'Producto 13',
                'goal_1' => 1,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 1,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 1,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct78 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
                'product_id' => null,
                'product_other' => 'Producto 14',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct79 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 6,
                'goal_2' => 5,
                'goal_3' => 5,
                'goal_4' => 5,
                'goal_1_balance' => 6,
                'goal_2_balance' => 5,
                'goal_3_balance' => 5,
                'goal_4_balance' => 5,
                'total_goal' => 21,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 5,
                ]);
                $idobjectiveproduct80 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 100,
                'goal_2' => 100,
                'goal_3' => 100,
                'goal_4' => 100,
                'goal_1_balance' => 100,
                'goal_2_balance' => 100,
                'goal_3_balance' => 100,
                'goal_4_balance' => 100,
                'total_goal' => 400,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 5,
                ]);
                $idobjectiveproduct81 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 100,
                'goal_2' => 100,
                'goal_3' => 100,
                'goal_4' => 100,
                'goal_1_balance' => 100,
                'goal_2_balance' => 100,
                'goal_3_balance' => 100,
                'goal_4_balance' => 100,
                'total_goal' => 400,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 5,
                ]);
                $idobjectiveproduct82 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 0,
                'goal_2' => 100,
                'goal_3' => 100,
                'goal_4' => 1,
                'goal_1_balance' => 0,
                'goal_2_balance' => 100,
                'goal_3_balance' => 100,
                'goal_4_balance' => 1,
                'total_goal' => 201,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 5,
                ]);
                $idobjectiveproduct83 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'Producto 5',
                'goal_1' => 0,
                'goal_2' => 100,
                'goal_3' => 100,
                'goal_4' => 0,
                'goal_1_balance' => 0,
                'goal_2_balance' => 100,
                'goal_3_balance' => 100,
                'goal_4_balance' => 0,
                'total_goal' => 200,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 5,
                ]);
                $idobjectiveproduct84 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'Producto 6',
                'goal_1' => 0,
                'goal_2' => 1,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 0,
                'goal_2_balance' => 1,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 1,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 5,
                ]);
                $idobjectiveproduct85 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'Producto 7',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 100,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 100,
                'total_goal' => 100,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 5,
                ]);
                $idobjectiveproduct86 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'Producto 8',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 1,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 1,
                'total_goal' => 1,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 5,
                ]);
                $idobjectiveproduct87 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'Producto 9',
                'goal_1' => 100,
                'goal_2' => 100,
                'goal_3' => 100,
                'goal_4' => 100,
                'goal_1_balance' => 100,
                'goal_2_balance' => 100,
                'goal_3_balance' => 100,
                'goal_4_balance' => 100,
                'total_goal' => 400,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 5,
                ]);
                $idobjectiveproduct88 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'Producto 10',
                'goal_1' => 6,
                'goal_2' => 6,
                'goal_3' => 5,
                'goal_4' => 0,
                'goal_1_balance' => 6,
                'goal_2_balance' => 6,
                'goal_3_balance' => 5,
                'goal_4_balance' => 0,
                'total_goal' => 17,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 5,
                ]);
                $idobjectiveproduct89 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'Producto 11',
                'goal_1' => 50,
                'goal_2' => 50,
                'goal_3' => 50,
                'goal_4' => 100,
                'goal_1_balance' => 50,
                'goal_2_balance' => 50,
                'goal_3_balance' => 50,
                'goal_4_balance' => 100,
                'total_goal' => 250,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 5,
                ]);
                $idobjectiveproduct90 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'Producto 12',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 5,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 5,
                'total_goal' => 8,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 5,
                ]);
                $idobjectiveproduct91 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'Producto 13',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 50,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 50,
                'total_goal' => 50,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 5,
                ]);
                $idobjectiveproduct92 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'Producto 14',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 1,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 1,
                'total_goal' => 1,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 5,
                ]);
                $idobjectiveproduct93 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'Producto 15',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 1,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 1,
                'total_goal' => 1,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 5,
                ]);
                $idobjectiveproduct94 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'Producto 16',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 0,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 5,
                ]);
                $idobjectiveproduct95 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'Producto 17',
                'goal_1' => 0,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 0,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 3,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 5,
                ]);
                $idobjectiveproduct96 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'Producto 18',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 1,
                'goal_4' => 0,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 1,
                'goal_4_balance' => 0,
                'total_goal' => 1,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 5,
                ]);
                $idobjectiveproduct97 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'Producto 19',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 5,
                ]);
                $idobjectiveproduct98 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'Producto 20',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 0,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 0,
                'goal_4_balance' => 1,
                'total_goal' => 3,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 4,
                ]);
                $idobjectiveproduct99 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'Producto 21',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct100 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective10,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct101 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective10,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct102 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective10,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 0,
                'goal_2' => 25,
                'goal_3' => 0,
                'goal_4' => 5,
                'goal_1_balance' => 0,
                'goal_2_balance' => 25,
                'goal_3_balance' => 0,
                'goal_4_balance' => 5,
                'total_goal' => 30,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct103 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective10,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 30,
                'goal_4' => 0,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 30,
                'goal_4_balance' => 0,
                'total_goal' => 30,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct104 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective10,
                'product_id' => null,
                'product_other' => 'Producto 5',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct105 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective10,
                'product_id' => null,
                'product_other' => 'Producto 6',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct106 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective10,
                'product_id' => null,
                'product_other' => 'Producto 7',
                'goal_1' => 0,
                'goal_2' => 1,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 0,
                'goal_2_balance' => 1,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 1,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct107 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective10,
                'product_id' => null,
                'product_other' => 'Producto 8',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 0,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct108 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective10,
                'product_id' => null,
                'product_other' => 'Producto 9',
                'goal_1' => 1,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 1,
                'total_goal' => 2,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct109 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective10,
                'product_id' => null,
                'product_other' => 'Producto 10',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct110 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective11,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 100,
                'goal_2' => 100,
                'goal_3' => 100,
                'goal_4' => 100,
                'goal_1_balance' => 100,
                'goal_2_balance' => 100,
                'goal_3_balance' => 100,
                'goal_4_balance' => 100,
                'total_goal' => 400,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 33,
                ]);
                $idobjectiveproduct111 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective11,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 100,
                'goal_2' => 100,
                'goal_3' => 100,
                'goal_4' => 100,
                'goal_1_balance' => 100,
                'goal_2_balance' => 100,
                'goal_3_balance' => 100,
                'goal_4_balance' => 100,
                'total_goal' => 400,
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 33,
                ]);
                $idobjectiveproduct112 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective11,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 100,
                'goal_2' => 100,
                'goal_3' => 100,
                'goal_4' => 100,
                'goal_1_balance' => 100,
                'goal_2_balance' => 100,
                'goal_3_balance' => 100,
                'goal_4_balance' => 100,
                'total_goal' => 400,
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 33,
                ]);
                $idobjectiveproduct113 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective11,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct114 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 3,
                ]);
                $idobjectiveproduct115 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 4,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 4,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 7,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 3,
                ]);
                $idobjectiveproduct116 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 3,
                ]);
                $idobjectiveproduct117 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 3,
                ]);
                $idobjectiveproduct118 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
                'product_id' => null,
                'product_other' => 'Producto 5',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 3,
                ]);
                $idobjectiveproduct119 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
                'product_id' => null,
                'product_other' => 'Producto 6',
                'goal_1' => 21,
                'goal_2' => 21,
                'goal_3' => 21,
                'goal_4' => 21,
                'goal_1_balance' => 21,
                'goal_2_balance' => 21,
                'goal_3_balance' => 21,
                'goal_4_balance' => 21,
                'total_goal' => 84,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 3,
                ]);
                $idobjectiveproduct120 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
                'product_id' => null,
                'product_other' => 'Producto 7',
                'goal_1' => 4,
                'goal_2' => 4,
                'goal_3' => 4,
                'goal_4' => 4,
                'goal_1_balance' => 4,
                'goal_2_balance' => 4,
                'goal_3_balance' => 4,
                'goal_4_balance' => 4,
                'total_goal' => 16,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 3,
                ]);
                $idobjectiveproduct121 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
                'product_id' => null,
                'product_other' => 'Producto 8',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 3,
                ]);
                $idobjectiveproduct122 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
                'product_id' => null,
                'product_other' => 'Producto 9',
                'goal_1' => 1,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 1,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 1,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 3,
                ]);
                $idobjectiveproduct123 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
                'product_id' => null,
                'product_other' => 'Producto 10',
                'goal_1' => 1,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 1,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 1,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 3,
                ]);
                $idobjectiveproduct124 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
                'product_id' => null,
                'product_other' => 'Producto 11',
                'goal_1' => 1,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 1,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 1,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 3,
                ]);
                $idobjectiveproduct125 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
                'product_id' => null,
                'product_other' => 'Producto 12',
                'goal_1' => 1,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 1,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 1,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 3,
                ]);
                $idobjectiveproduct126 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
                'product_id' => null,
                'product_other' => 'Producto 13',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 3,
                ]);
                $idobjectiveproduct127 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
                'product_id' => null,
                'product_other' => 'Producto 14',
                'goal_1' => 0,
                'goal_2' => 1,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 0,
                'goal_2_balance' => 1,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 1,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 3,
                ]);
                $idobjectiveproduct128 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
                'product_id' => null,
                'product_other' => 'Producto 15',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 1,
                'goal_4' => 0,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 1,
                'goal_4_balance' => 0,
                'total_goal' => 1,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 3,
                ]);
                $idobjectiveproduct129 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
                'product_id' => null,
                'product_other' => 'Producto 16',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 1,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 1,
                'total_goal' => 1,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 3,
                ]);
                $idobjectiveproduct130 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
                'product_id' => null,
                'product_other' => 'Producto 17',
                'goal_1' => 100,
                'goal_2' => 100,
                'goal_3' => 100,
                'goal_4' => 100,
                'goal_1_balance' => 100,
                'goal_2_balance' => 100,
                'goal_3_balance' => 100,
                'goal_4_balance' => 100,
                'total_goal' => 400,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 3,
                ]);
                $idobjectiveproduct131 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
                'product_id' => null,
                'product_other' => 'Producto 18',
                'goal_1' => 1,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 1,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 1,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 4,
                ]);
                $idobjectiveproduct132 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
                'product_id' => null,
                'product_other' => 'Producto 19',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 1,
                'goal_4' => 0,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 1,
                'goal_4_balance' => 0,
                'total_goal' => 1,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 4,
                ]);
                $idobjectiveproduct133 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
                'product_id' => null,
                'product_other' => 'Producto 20',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 4,
                ]);
                $idobjectiveproduct134 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
                'product_id' => null,
                'product_other' => 'Producto 21',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 4,
                ]);
                $idobjectiveproduct135 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
                'product_id' => null,
                'product_other' => 'Producto 22',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 4,
                ]);
                $idobjectiveproduct136 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
                'product_id' => null,
                'product_other' => 'Producto 23',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 4,
                ]);
                $idobjectiveproduct137 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
                'product_id' => null,
                'product_other' => 'Producto 24',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 4,
                ]);
                $idobjectiveproduct138 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
                'product_id' => null,
                'product_other' => 'Producto 25',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 4,
                ]);
                $idobjectiveproduct139 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
                'product_id' => null,
                'product_other' => 'Producto 26',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 4,
                ]);
                $idobjectiveproduct140 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
                'product_id' => null,
                'product_other' => 'Producto 27',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 4,
                ]);
                $idobjectiveproduct141 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
                'product_id' => null,
                'product_other' => 'Producto 28',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 1,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 1,
                'total_goal' => 1,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 4,
                ]);
                $idobjectiveproduct142 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
                'product_id' => null,
                'product_other' => 'Producto 29',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 1,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 1,
                'total_goal' => 1,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 4,
                ]);
                $idobjectiveproduct143 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
                'product_id' => null,
                'product_other' => 'Producto 30',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct144 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective13,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 5,
                'goal_2' => 6,
                'goal_3' => 6,
                'goal_4' => 5,
                'goal_1_balance' => 5,
                'goal_2_balance' => 6,
                'goal_3_balance' => 6,
                'goal_4_balance' => 5,
                'total_goal' => 22,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 7,
                ]);
                $idobjectiveproduct145 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective13,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 16,
                'goal_2' => 12,
                'goal_3' => 12,
                'goal_4' => 12,
                'goal_1_balance' => 16,
                'goal_2_balance' => 12,
                'goal_3_balance' => 12,
                'goal_4_balance' => 12,
                'total_goal' => 52,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 7,
                ]);
                $idobjectiveproduct146 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective13,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 7,
                ]);
                $idobjectiveproduct147 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective13,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 7,
                ]);
                $idobjectiveproduct148 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective13,
                'product_id' => null,
                'product_other' => 'Producto 5',
                'goal_1' => 4,
                'goal_2' => 4,
                'goal_3' => 4,
                'goal_4' => 4,
                'goal_1_balance' => 4,
                'goal_2_balance' => 4,
                'goal_3_balance' => 4,
                'goal_4_balance' => 4,
                'total_goal' => 16,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 7,
                ]);
                $idobjectiveproduct149 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective13,
                'product_id' => null,
                'product_other' => 'Producto 6',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct150 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective13,
                'product_id' => null,
                'product_other' => 'Producto 7',
                'goal_1' => 10,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 10,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 13,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct151 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective13,
                'product_id' => null,
                'product_other' => 'Producto 8',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct152 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective13,
                'product_id' => null,
                'product_other' => 'Producto 9',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct153 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective13,
                'product_id' => null,
                'product_other' => 'Producto 10',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct154 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective13,
                'product_id' => null,
                'product_other' => 'Producto 11',
                'goal_1' => 5,
                'goal_2' => 5,
                'goal_3' => 5,
                'goal_4' => 5,
                'goal_1_balance' => 5,
                'goal_2_balance' => 5,
                'goal_3_balance' => 5,
                'goal_4_balance' => 5,
                'total_goal' => 20,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct155 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective13,
                'product_id' => null,
                'product_other' => 'Producto 12',
                'goal_1' => 5,
                'goal_2' => 5,
                'goal_3' => 5,
                'goal_4' => 5,
                'goal_1_balance' => 5,
                'goal_2_balance' => 5,
                'goal_3_balance' => 5,
                'goal_4_balance' => 5,
                'total_goal' => 20,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct156 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective13,
                'product_id' => null,
                'product_other' => 'Producto 13',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct157 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective13,
                'product_id' => null,
                'product_other' => 'Producto 14',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct158 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 10,
                ]);
                $idobjectiveproduct159 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 5,
                'goal_2' => 5,
                'goal_3' => 5,
                'goal_4' => 6,
                'goal_1_balance' => 5,
                'goal_2_balance' => 5,
                'goal_3_balance' => 5,
                'goal_4_balance' => 6,
                'total_goal' => 21,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 10,
                ]);
                $idobjectiveproduct160 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 21,
                'goal_2' => 21,
                'goal_3' => 21,
                'goal_4' => 21,
                'goal_1_balance' => 21,
                'goal_2_balance' => 21,
                'goal_3_balance' => 21,
                'goal_4_balance' => 21,
                'total_goal' => 84,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 10,
                ]);
                $idobjectiveproduct161 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 10,
                ]);
                $idobjectiveproduct162 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => null,
                'product_other' => 'Producto 5',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 10,
                ]);
                $idobjectiveproduct163 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => null,
                'product_other' => 'Producto 6',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 10,
                ]);
                $idobjectiveproduct164 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => null,
                'product_other' => 'Producto 7',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 10,
                ]);
                $idobjectiveproduct165 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => null,
                'product_other' => 'Producto 8',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 10,
                ]);
                $idobjectiveproduct166 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => null,
                'product_other' => 'Producto 9',
                'goal_1' => 20,
                'goal_2' => 20,
                'goal_3' => 20,
                'goal_4' => 20,
                'goal_1_balance' => 20,
                'goal_2_balance' => 20,
                'goal_3_balance' => 20,
                'goal_4_balance' => 20,
                'total_goal' => 80,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 10,
                ]);
                $idobjectiveproduct167 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => null,
                'product_other' => 'Producto 10',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 10,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 10,
                'total_goal' => 10,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 9,
                ]);
                $idobjectiveproduct168 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => null,
                'product_other' => 'Producto 11',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct169 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct1,
                  'name' => 'Realización de trabajos manuales y/o mecánicos para limpieza, mantenimiento y restauración hidrodinámica de ciénagas, canales pluviales y cauces de arroyo de la jurisdicción  (ley 99 de 1993, Art. 31, numeral 19)',
                  'goal_1' => 116,
                  'goal_2' => 114,
                  'goal_3' => 2,
                  'goal_4' => 52,
                  'goal' => 284,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity1 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct2,
                  'name' => 'Realización de trabajos manuales y/o mecánicos para limpieza, mantenimiento y restauración hidrodinámica de reservorios de la jurisdicción  (ley 99 de 1993, Art. 31, numeral 19)',
                  'goal_1' => 106,
                  'goal_2' => 36,
                  'goal_3' => 0,
                  'goal_4' => 14,
                  'goal' => 156,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity2 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct3,
                  'name' => 'Reestablecimiento de interconexión de cienagas de la jurisdicción de Cardique.  Interconexión realizado. ',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 2,
                  'goal' => 4,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity3 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct4,
                  'name' => 'Reestablecimiento de interconexión de cienagas de la jurisdicción de Cardique.  Porcentaje de áreas de ecosistemas en restauración, rehabilitación y reforestación. IMG- MADS Art 6 C6 Res 0677/27/04/16  ',
                  'goal_1' => 25,
                  'goal_2' => 25,
                  'goal_3' => 0,
                  'goal_4' => 50,
                  'goal' => 100,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity4 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct5,
                  'name' => 'Realización de trabajos manuales y/o mecánicos para limpieza, mantenimiento y restauración hidrodinámica de la ciénaga de Las Quintas  (ley 99 de 1993, Art. 31, numeral 19)',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 4873,
                  'goal' => 4873,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity5 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct6,
                  'name' => 'Estudios y diseñós topograficos e interventorias de trabajos manuales y/o mecánicos de limpieza, mantenimiento y restauración hidrodinámica de reservorios, ciénagas, canales pluviales y cauces de arroyo de la jurisdicción',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 1,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity6 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct7,
                  'name' => 'Creación e implementación del Fondo de agua',
                  'goal_1' => 1,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 1,
                  'goal' => 2,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity7 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct8,
                  'name' => 'Toma de muestras y/o análisis para seguimiento y monitoreo a estaciones y/o cuerpos de agua de la jurisdicción (continentales, subterráneos y marinos)',
                  'goal_1' => 660,
                  'goal_2' => 519,
                  'goal_3' => 600,
                  'goal_4' => 700,
                  'goal' => 2479,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity8 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct9,
                  'name' => 'Apoyo BASIC II Caracterización de la Bahia de Cartagena  ',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 2,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity9 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct10,
                  'name' => 'Asignación de recursos al proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity10 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct11,
                  'name' => 'Ejecución de obras para al mejoramiento hidráulico y el saneamiento ambiental de los arroyos y canales que vierten hacia la Ciénaga de la Virgen; Los arroyos y canales a intervenir serán los siguientes: Arroyo Ternera, Arroyo Limón, Arroyo La Tabla, Arroyo Tabacal, Arroyo Mesa, Arroyo Hormiga, Arroyo Matagente, Arroyo Calicanto, Arroyo Isla De León, Canal Playa Blanca, Canal Simón Bolívar, Canal Barcelona, Canal San Pablo, Canal Maria Auxiliadora, Canal Maravilla, Canal Magdalena, Canal Once De Nov, Canal Las Flores, , Canal Ricaurte, Canal Chapundúm, Canal Fredonia, Canal Amador y Cortez, Canal Líbano, Canal Salín Bechara, San Martín, Pedro Salazar, La Esperanza, San Francisco, Puerto de Pescadores, Cordialidad, Canal Calicanto, Calicanto Nuevo, San Pedro, Canal Urdaneta, Ciudad Sevilla, Canal Sector Guarapero, Chiquinquirá, Calicanto Viejo, Villa Rosita, Jorge Eliécer Gaitán, Bolívar, La Villa, Foco Rojo, Líbano - Acapulco, Tabú, Gaviotas 1, Bomba Del Tigre, Chepa Sección 1, Chepa Sección 11, Arroyo Chiamaría, Arroyo Flor Del Campo y Descole Canales Ciénaga de la Virgen. Ley 981 de 2005, el literal b) del artículo 21 de la Ley 105 de 1993, modificado parcialmente por la Ley 787 de 2002, Resolución N° 003286 de 2005 del Ministerio de Transorte, Resolución N° 1710 del 15 de noviembre de 2005 del MADS;  acuerdo 009 de 2006 Consejo Directivo de Cardique, ejecución PMA y proyectos del POMCA Ciénaga de la Virgen (Resolución de Cardique No. 0768 de fecha 20 de septiembre de 2005)',
                  'goal_1' => 6,
                  'goal_2' => 7,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 13,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity11 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct12,
                  'name' => 'Mejoramiento hidráulico, mantenimento y saneamiento ambiental de los arroyos y canales que vierten hacia la Ciénaga de la Virgen.',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 8,
                  'goal' => 8,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity12 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct13,
                  'name' => 'Interventorías de proyectos, obras o actividades',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 1,
                  'goal' => 3,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity13 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct14,
                  'name' => 'Apoyo a proyectos socio productivos',
                  'goal_1' => 2,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 1,
                  'goal' => 3,
                  'weighing' => 24,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity14 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct15,
                  'name' => 'Asignación de recursos al proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity15 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct16,
                  'name' => 'Identificación, vulnerabilidad y reglamentación hidrogeológica de los acuíferos de los municipios de Mahates, Calamar, Arjona  y San Jacinto para conocer el potencial y administrar sosteniblemente el recurso.',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 4,
                  'goal_4' => 0,
                  'goal' => 4,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity16 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct17,
                  'name' => 'Reglamentación de los acuiferos de Tubaco y Córdoba',
                  'goal_1' => 1,
                  'goal_2' => 0,
                  'goal_3' => 4,
                  'goal_4' => 0,
                  'goal' => 5,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity17 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct18,
                  'name' => 'Análisis de la vulnerabilidad de los acuiferos del municipio de Córdoba y del corregimiento de Palenque (Mahates).',
                  'goal_1' => 1,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity18 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct19,
                  'name' => 'Localización geográfica (inventario de puntos de agua) y determinación para manejo y uso de los pozos subterráneos del municipio de El Carmen de Bolívar en diez de corregimientos priorizados (2016), municipio de Zambrano y sus corregimientos (2017), municipio de Córdoba Tetón (2018) y Soplaviento (2019)',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 24,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity19 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct20,
                  'name' => 'Asignación de recursos al proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity20 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct21,
                  'name' => 'Formulación del Plan de Ordenamiento y Manejo Integrado de la Unidad Ambiental Costera - POMIUAC-RIO MAGDALENA.(Decreto 1120-2013) Fases: 1. Preparación o Aprestamiento (Ecoversa). 2. Caracterización y Diagnostico. 3. Prospectiva y Zonificación Ambiental (Invemar). 4. 2017 Formulación y Adopción. 5. 2018 Implementación o Ejecución. 6. 2019 Seguimiento y Evaluación.',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 1,
                  'goal_4' => 2,
                  'goal' => 3,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity21 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct22,
                  'name' => 'Alimentación base de datos Zona Insular (2016), Levantamiento de la línea base de los humedales insulares (2017), Estructura de seguimiento insular para el ejercicio de autoridad ambiental (2018), evaluación y seguimiento (2019)  en cumplimiento y seguimiento de obligaciones de la sentencia del Consejo de Estado y Tribunal Administrativo de Cundinamarca',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity22 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct23,
                  'name' => 'Adopción del Plan de Manejo y del Modelo de Desarrollo Sostenible del Área Marina Protegida ',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 1,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity23 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct24,
                  'name' => 'Fomento al aprovechamiento y valorización de residuos sólidos',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 1,
                  'goal' => 1,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity24 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct25,
                  'name' => 'Formulación del Plan de Ordenamiento y Manejo Integrado de la Unidad Ambiental Costera - POMIUAC-ESTUARINA DEL RIO SINU Y EL GOLFO DE MORROSQUILLO.(Decreto 1120-2013) Fases: 1. Preparación o Aprestamiento (Ecoversa). 2.A. Area Marina Protegida (vía sentencia: Segunda Instancia del Consejo de Estado; Primera Instancia Tribunal Administrativo de Cundinamarca).                                                                                                          2.B. POMIUAC. Caracterización  y Diagnostico. 3. Prospectiva y Zonificación Ambiental. 4. Formulación y Adopción (*) Consulta Previa. 5. Implementación o Ejecución. 6. Seguimiento y Evaluación.',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 2,
                  'goal' => 5,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity25 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct26,
                  'name' => 'Aportar información a los entes territoriales información sobre riesgo natuarles con énfasis en  fenómenos marino costero ( erosión, geotenia, diapirismo y ascenso del nivel del mar) para su incorporación en los Planes de Ordenamiento Territorial(POT).',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity26 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct27,
                  'name' => 'Formulación del Plan de Manejo de la Ciénaga de las Quintas (Sentencia de 2010). ',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 1,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity27 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct28,
                  'name' => 'Asignación de recursos al proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 2,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity28 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct29,
                  'name' => 'Restauración de coberturas de manglar en areas priorizadas con vocación para establecer este tipo de cobertura.',
                  'goal_1' => 220,
                  'goal_2' => 100,
                  'goal_3' => 120,
                  'goal_4' => 185.5,
                  'goal' => 625.5,
                  'weighing' => 6,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity29 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct30,
                  'name' => 'Apoyo en el establecimiento de viveros regionales comunitarios',
                  'goal_1' => 10000,
                  'goal_2' => 10000,
                  'goal_3' => 0,
                  'goal_4' => 30000,
                  'goal' => 50000,
                  'weighing' => 6,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity30 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct31,
                  'name' => 'Diseño, construcciòn e implementación de estufas ecológicas que ayuden a disminuir la presión forestal y sean ejemplo de adaptación al cambio climático',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 240,
                  'goal' => 240,
                  'weighing' => 6,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity31 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct32,
                  'name' => 'Realizar proyectos pilotos en actividades Agrosilvopastoril en parcelas que impacten positivamete en la foresta frente al cambio limatico',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 300,
                  'goal' => 300,
                  'weighing' => 6,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity32 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct33,
                  'name' => 'Realización de seguimiento a los Permisos de aprovechamiento Forestal (PAF). Seguimiento realizado',
                  'goal_1' => 40,
                  'goal_2' => 40,
                  'goal_3' => 40,
                  'goal_4' => 40,
                  'goal' => 160,
                  'weighing' => 6,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity33 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct34,
                  'name' => 'Realización de seguimiento a los Permisos de aprovechamiento Forestal (PAF). Número de hectáreas con PAF con seguimiento',
                  'goal_1' => 10,
                  'goal_2' => 10,
                  'goal_3' => 10,
                  'goal_4' => 10,
                  'goal' => 40,
                  'weighing' => 6,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity34 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct35,
                  'name' => 'Implementación y seguimiento del “pacto intersectorial por la madera legal en Colombia” en la jurisdicción ',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity35 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct36,
                  'name' => 'Diagnóstico y caracterización de áreas de reserva para fortalecer el Sistema Local de Áreas Protegidas (SILAP), Sistema Departamental de Áreas Protegidas (SIDAP), Sistema Regional de Áreas Protegidas (SIRAP) - CARIBE -  Sistema Nacional de Áreas Protegidas(SINAP). Diagnóstico y caracterización realizada.',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 3,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity36 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct37,
                  'name' => 'Diagnóstico y caracterización de áreas de reserva para fortalecer el Sistema Local de Áreas Protegidas (SILAP), Sistema Departamental de Áreas Protegidas (SIDAP), Sistema Regional de Áreas Protegidas (SIRAP) - CARIBE -  Sistema Nacional de Áreas Protegidas(SINAP). Areas susceptibles de protección, restauración y/o conservación. ',
                  'goal_1' => 0,
                  'goal_2' => 25,
                  'goal_3' => 25,
                  'goal_4' => 25,
                  'goal' => 75,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity37 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct38,
                  'name' => 'Definición de la figura de protección y su declaratoria de 321,75 hectáreas  como área protegida de Perico y Laguna Municipio de San Juan Nepomuceno. Porcentaje de áreas protegidas con planes de manejo en ejecuciónIMG - MADS',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 0,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity38 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct39,
                  'name' => 'Definición de la figura de protección y su declaratoria de 321,75 hectáreas  como área protegida de Perico y Laguna Municipio de San Juan Nepomuceno. Porcentaje de la superficie de áreas protegidas regionales declaradas, homologadas o recategorizadas, inscritas en el RUNAP ',
                  'goal_1' => 100,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 100,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity39 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct40,
                  'name' => 'Formulación del Plan de Ordenación Forestal de la jurisdicción. Fase I: Inventario (2016) y Diagnostico (2017). Fase II Zonificación y formulación del plan de manejo (2018). ',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 3,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity40 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct41,
                  'name' => 'Revisión y ajuste de la zonificación de manglares según directrices estipulados por el MADS.',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 2,
                  'goal' => 3,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity41 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct42,
                  'name' => 'Formulación del Plan de Manejo Ambiental de las áreas de manglar  zonificadas.',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 2,
                  'goal' => 2,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity42 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct43,
                  'name' => 'Proyecto Ban CO2 -  PNUD  fases: Formulación, Implementación y Seguimiento',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 1,
                  'goal_4' => 2,
                  'goal' => 3,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity43 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct44,
                  'name' => 'Asignación de recursos al proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity44 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct45,
                  'name' => 'Actualización e implementación del plan de conservación del  Manatí. Etapa I: Actaualización etapa II: Implementación, monitoreo y seguimiento del Plan de Manejo.',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 3,
                  'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity45 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct46,
                  'name' => 'Recuperación de hábitat para la conservación del Manatí en los ecosistema de la jurisdicción ',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity46 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct47,
                  'name' => 'Elaboración o ajuste e implementación del Plan de manejo, uso y conservación de cuatro: especies Caiman aguja (2016), Hicotea (2017), Boa (2018) e Iguana (2019).',
                  'goal_1' => 25,
                  'goal_2' => 25,
                  'goal_3' => 25,
                  'goal_4' => 25,
                  'goal' => 100,
                  'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity47 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct48,
                  'name' => 'Campañas de prevención, control y manejo de especies invasoras (Pez León y Caracol Gigante).',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity48 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct49,
                  'name' => 'Zonificación e inventario de especies de fauna vulnerables al tráfico ilegal.',
                  'goal_1' => 1,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity49 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct50,
                  'name' => 'Aunar esfuerzos para contar con un Centro de Atención y Valoración de la Fauna Silvestre (CAVFS)',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 1,
                  'goal' => 1,
                  'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity50 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct51,
                  'name' => 'Valoración económica de los bienes y servicios ambientales (Atractivos turísticos de la jurisdicción (Oceanario  - 2017), (Aviario Nacional - 2018) y  (Artesanías de San Jacinto - 2019)',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 3,
                  'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity51 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct52,
                  'name' => 'Fortalecimiento de las alianzas (Acuerdos Voluntario ) para la valoración y manejo de la fauna silvestre Post decomiso (Vivarium del Caribe, Fuerzas Armadas- BAFIM Malagana,  Fundación Omacha, Aviario Nacional de Colombia, Ceiner y Jardín Botánico Guillermo Piñerez).',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity52 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct53,
                  'name' => 'Campaña de prevención, control y manejo a especies susceptibles de trafico ilegal.',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity53 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct54,
                  'name' => 'Identificación y zonificación de especies faunísticas silvestres amenazadas del bosque seco tropical en la jurisdicción (Anfibios - 2016, Reptiles 2017, Aves 2018 y Mamiferos 2019)',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity54 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct55,
                  'name' => 'Restauración y repoblamiento con especies ícticas nativas',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity55 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct56,
                  'name' => 'Asignación de recursos al proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity56 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct57,
                  'name' => 'Asesoría a entes territoriales en la normatividad ambiental aplicable a la gestión integral de residuos sólidos, implementación de los PGIRS y adopción e implementación del comparendo ambiental. (Ley 1259 de 2008 y Decretos único 1076 y 1077 de 2015). ',
                  'goal_1' => 21,
                  'goal_2' => 21,
                  'goal_3' => 21,
                  'goal_4' => 21,
                  'goal' => 84,
                  'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity57 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct58,
                  'name' => 'Fortalecimiento al aprovechamiento y valoarización  de residuos solidos',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 1,
                  'goal' => 1,
                  'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity58 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct59,
                  'name' => 'Formulación e implementación de proyectos de fomento de la investigación, desarrollo y aplicación de alternativas de tratamiento, aprovechamiento y disposición final de residuos sólidos. (Política GIRS de 1997).',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 3,
                  'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity59 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct60,
                  'name' => 'Elaboración y divulgación de material didáctico para la realización de campañas de sensibilización y capacitación a organizaciones comunitarias sobre GIRS. (Políticas y Decretos reglamentarios)',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity60 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct61,
                  'name' => 'Campañas de sensibilización y Fomento del aprovechamiento de los residuos sólidos en los municipios de la jurisdicción. (Foro regional, celebración día del de reciclaje, capacitaciones, jornadas de limpieza).',
                  'goal_1' => 5,
                  'goal_2' => 6,
                  'goal_3' => 6,
                  'goal_4' => 4,
                  'goal' => 21,
                  'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity61 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct62,
                  'name' => 'Fomento de alternativas de aprovechamiento y disposición final de residuos a nivel regional.',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity62 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct63,
                  'name' => 'Seguimiento a las metas de aprovechamiento establecidas en los PGIRS de los municipios de la jurisdicción',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity63 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct64,
                  'name' => 'Seguimiento a los Planes de Saneamiento y Manejo de Vertimientos - PSMV- del distrito de Cartagena y los 20 municpios de la juriicción. ',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity64 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct65,
                  'name' => 'Asignación de recursos al proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity65 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct66,
                  'name' => 'Realización mediciones de ruido ambiental en sectores o fuentes generadoras permanentes de contaminación sonora en los Municipios de Arjona, El Carmen de Bolívar, Turbaco, Turbana, Santa Rosa, San Juan Nepomuceno y Distrito de Cartagena en los Corregimientos de Tierra Bomba, La Boquilla, Pasacaballos y Bayunca. (Resolución 627 de 2006).',
                  'goal_1' => 7,
                  'goal_2' => 7,
                  'goal_3' => 7,
                  'goal_4' => 7,
                  'goal' => 28,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity66 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct67,
                  'name' => 'Realización de operativos de control y seguimiento en la jurisdicción de Cardique a las emisiones por fuentes móviles con empresas que cuenten con equipos y personal idóneo y capacitado técnicamente. La empresa debe estar certificada por el IDEAM. ',
                  'goal_1' => 4,
                  'goal_2' => 4,
                  'goal_3' => 4,
                  'goal_4' => 1,
                  'goal' => 13,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity67 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct68,
                  'name' => 'Realización  de mediciones de calidad de aire del contaminante PM10 (partículas menores de 10 micras) en los municipios de Arjona, El Carmen de Bolívar, Turbaco y distrito de Cartagena - corregimiento de Pasacaballos. (Resolución 610 de 2007).',
                  'goal_1' => 4,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 4,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity68 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct69,
                  'name' => 'Instalación de una red de calidad de aire en el sitio priorizado de la campaña de 2016 (Resolución 610 de 2007).',
                  'goal_1' => 0,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 300,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity69 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct70,
                  'name' => 'Convenio de producción más limpia y seguimiento con tres sectores (estaciones de servicio, empresas del sector prestación de servicios de salud, lavaderos de autos).',
                  'goal_1' => 0,
                  'goal_2' => 33.33,
                  'goal_3' => 33.33,
                  'goal_4' => 33.33,
                  'goal' => 99.99,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity70 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct71,
                  'name' => 'Implementación del programa de la interiorización de las políticas de consumo y producción sostenible y la Gestión de la Biodiversidad y sus servicios ecosistémicos en las empresas enmarcadas con programas y proyectos de Negocios verdes o biocomercio en el distrito de Cartagena y  municipios de la jurisdicción. ',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity71 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct72,
                  'name' => 'Apoyo a la gestion para la creación e implementación de la Ventanilla de Negocios Verdes de la Corporación para el fomento de una producción más limpia.',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity72 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct73,
                  'name' => 'Promoción del uso de equipos de refrigeración que no utilicen sustancias agotadoras de ozono - SAO (Reducción de emisiones de gases de efecto invernadero y huella de carbono PND)',
                  'goal_1' => 21,
                  'goal_2' => 21,
                  'goal_3' => 21,
                  'goal_4' => 21,
                  'goal' => 84,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity73 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct74,
                  'name' => 'Realización de ferias y eventos que promocionen los productos y servicios en el marco de los negocios verdes',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity74 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct75,
                  'name' => 'Capacitación y sensibilización sobre  residuos peligrosos – Respel y verificación del registro de generador.',
                  'goal_1' => 50,
                  'goal_2' => 50,
                  'goal_3' => 50,
                  'goal_4' => 50,
                  'goal' => 200,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity75 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct76,
                  'name' => 'Capacitación y sensibilización sobre  residuos de aparatos eléctricos y electrónicos  (RAEE) y gestión de llantas usadas.',
                  'goal_1' => 0,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 300,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity76 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct77,
                  'name' => 'Definición y determinación de los indicadores de calidad ambiental urbana ICAU de los municipios de la jurisdicción.',
                  'goal_1' => 0,
                  'goal_2' => 10,
                  'goal_3' => 0,
                  'goal_4' => 20,
                  'goal' => 30,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity77 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct78,
                  'name' => 'Desarrollo de un manual para el manejo de especies de la biodiversidad en el marco de los mercados verdes y sus procesos productivos',
                  'goal_1' => 1,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity78 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct79,
                  'name' => 'Asignación de recursos al proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity79 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct80,
                  'name' => 'Realización de asesoría, asistencia técnica, seguimiento y  talleres de capacitación para funcionarios municipales, concejos municipales, consejos territoriales de planeación, consejos de gestión del riesgo y desastre, gremios, sociedad civil sobre revisión, modificación y ajuste de los POT.',
                  'goal_1' => 6,
                  'goal_2' => 5,
                  'goal_3' => 5,
                  'goal_4' => 5,
                  'goal' => 21,
                  'weighing' => 5,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity80 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct81,
                  'name' => 'Realización de asesoría, asistencia tecnica y talleres para  la incorporación de la gestión del riesgo en los planes de ordenamiento territorial de la jurisdiccion.',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 5,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity81 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct82,
                  'name' => 'Asesoría y asistencia técnica en la promoción  e implementación de políticas referentes a la planeación, el ordenamiento territorial y ambiental dentro del territorio (Leyes 99 de 1993, 388 de 1997, 1523 de 2012 y  1753 de 2015, decretos únicos 1076  y 1077 de  2015 y reglamentarias en esta materia) ',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 5,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity82 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct83,
                  'name' => 'Apoyo a la Formulación de los POMCAS: “Directos al Caribe Sur - Ciénaga de la Virgen” y “Directos al Bajo Magdalena entre Plato y Calamar (Margen Izquierda - M.I.)”.',
                  'goal_1' => 0,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 1,
                  'goal' => 201,
                  'weighing' => 5,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity83 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct84,
                  'name' => 'Apoyo la Formulación de los POMCAS: “La Mojana - Río Cauca (Liderado por Carsucre)” y el “Ajuste del POMCA Canal del Dique (Liderada por CRA).',
                  'goal_1' => 0,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 0,
                  'goal' => 200,
                  'weighing' => 5,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity84 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct85,
                  'name' => 'Ordenamiento del recursos hídrico priorizados (dec 3930 de 2010, primera fase)',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 5,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity85 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct86,
                  'name' => 'Elaboración del POMCA arroyos que vierten al caribe norte',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 100,
                  'goal' => 100,
                  'weighing' => 5,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity86 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct87,
                  'name' => 'Implementación de acciones ambientales priorizadas en los POMCAS: “La Mojana - Río Cauca (Liderado por Carsucre)” y el “Ajuste del POMCA Canal del Dique (Liderada por CRA), “Directos al Caribe Sur - Ciénaga de la Virgen” y “Directos al Bajo Magdalena entre Plato y Calamar (Margen Izquierda - M.I.)”..',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 1,
                  'goal' => 1,
                  'weighing' => 5,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity87 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct88,
                  'name' => 'Desarrollo de un programa de uso eficiente del recurso hídrico y adaptación al cambio climático.',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 5,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity88 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct89,
                  'name' => 'Acompañamiento, asesoría e implementación de actividades para  la consolidacion de  estrategias que propendan por la mejora de la capacidad de respuesta de los entes territoriales ante  eventos climaticos extremos.',
                  'goal_1' => 6,
                  'goal_2' => 6,
                  'goal_3' => 5,
                  'goal_4' => 0,
                  'goal' => 17,
                  'weighing' => 5,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity89 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct90,
                  'name' => 'Apoyo a la implementación de 4 medidas de adaptación al cambio climático en el Municipio de Santa Catalina de Alejandría, Bolívar, conjuntamente con el Programa Medio Ambiente Colombia PROMAC.',
                  'goal_1' => 50,
                  'goal_2' => 50,
                  'goal_3' => 50,
                  'goal_4' => 100,
                  'goal' => 250,
                  'weighing' => 5,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity90 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct91,
                  'name' => 'Desarrollo de un programa de capacitación, prevención, control, mitigación y atención a incendios forestales, ataques de abeja e incidentes con hidrocarburos, material y sustancias peligrosas en el área jurisdicción de Cardique, aunando esfuerzos con el cuerpo de bomberos.',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 5,
                  'goal' => 8,
                  'weighing' => 5,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity91 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct92,
                  'name' => 'Actualización del Plan de Manejo Ambiental de la Ciénaga de la Virgen',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 50,
                  'goal' => 50,
                  'weighing' => 5,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity92 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct93,
                  'name' => 'Actualización del Plan de Manejo Ambiental de la Ciénaga del Totumo',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 1,
                  'goal' => 1,
                  'weighing' => 5,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity93 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct94,
                  'name' => 'Zonificación de la amenaza por remoción en masa escala 1:2500, conforme a los productos entregados del convenio tripartita 005 -2014.(Sergecol)',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 1,
                  'goal' => 1,
                  'weighing' => 5,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity94 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct95,
                  'name' => 'Zonificación geotecnica focalizadas para la cabeceras municipales de Turbana, El Carmen de Bolivar, San Jacinto y Santa Rosa.',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 0,
                  'weighing' => 5,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity95 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct96,
                  'name' => 'Sistemas alertas tempranas. Sistema implementado',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 3,
                  'weighing' => 5,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity96 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct97,
                  'name' => 'Sistemas alertas tempranas.Seguimiento del Sistema',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 1,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 5,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity97 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct98,
                  'name' => 'Delimitación de Rondas Hídricas, ley 1450 PND. ',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 5,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity98 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct99,
                  'name' => 'Evaluación Regional del Agua. ',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 1,
                  'goal' => 3,
                  'weighing' => 4,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity99 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct100,
                  'name' => 'Asignación de recursos al proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity100 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective10,
                  'product_id' =>$idobjectiveproduct101,
                  'name' => 'Adquisición de insumos y materiales para funcionamiento del laboratorio.',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity101 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective10,
                  'product_id' =>$idobjectiveproduct102,
                  'name' => 'Realización de mantenimiento preventivo, correctivo y calibracion de equipos',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity102 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective10,
                  'product_id' =>$idobjectiveproduct103,
                  'name' => 'Acreditación del laboratorio ante el IDEAM en la norma ISO 17025:2005',
                  'goal_1' => 0,
                  'goal_2' => 25,
                  'goal_3' => 0,
                  'goal_4' => 5,
                  'goal' => 30,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity103 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective10,
                  'product_id' =>$idobjectiveproduct104,
                  'name' => 'Seguimiento a la acreditación del laboratorio ante el IDEAM en la norma ISO 17025:2005',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 30,
                  'goal_4' => 0,
                  'goal' => 30,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity104 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective10,
                  'product_id' =>$idobjectiveproduct105,
                  'name' => 'Participación en pruebas interlaboratorios para evaluar capacidad técnica.',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity105 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective10,
                  'product_id' =>$idobjectiveproduct106,
                  'name' => 'Reposición y modernización de equipos de calidad del laboratorio',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity106 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective10,
                  'product_id' =>$idobjectiveproduct107,
                  'name' => 'Actualización del portafolio de servicios del laboratorio',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity107 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective10,
                  'product_id' =>$idobjectiveproduct108,
                  'name' => 'Sistema de recirculación del aire en el área de microbilogia',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 0,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity108 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective10,
                  'product_id' =>$idobjectiveproduct109,
                  'name' => 'Actualización, implementación y puesta en marcha del software del laboratorio',
                  'goal_1' => 1,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 1,
                  'goal' => 2,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity109 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective10,
                  'product_id' =>$idobjectiveproduct110,
                  'name' => 'Asignación de recursos al proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity110 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective11,
                  'product_id' =>$idobjectiveproduct111,
                  'name' => 'Fortalecimiento del SINA,  a través de la realización de convenios con otras CAR´s de la región, el EPA, con el Distrito, los municipios de la jurisdicción, otros entes a nivel departamental, Regional y Nacional como el MADS, la academia, Invemar, gremios, ONGs y Asocars.',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity111 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective11,
                  'product_id' =>$idobjectiveproduct112,
                  'name' => 'Apoyo a Asocars en las acciones para el mejoramiento de la cooperación horizontal',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity112 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective11,
                  'product_id' =>$idobjectiveproduct113,
                  'name' => 'Aportes a ASOCAR’s, conforme a sus estatutos y establecer convenios en virtud de lo establecido en el literal c del articulo 27 de la ley 99 de 1993. ',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity113 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective11,
                  'product_id' =>$idobjectiveproduct114,
                  'name' => 'Asignación de recursos al proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity114 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct115,
                  'name' => 'Adecuaciones generales de la sede, puestos de trabajo y ampliaciones locativas.',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 3,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity115 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct116,
                  'name' => 'Reposición y ampliación del parque automotor',
                  'goal_1' => 4,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 7,
                  'weighing' => 3,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity116 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct117,
                  'name' => 'Mantenimiento y seguimiento al Sistema Integrado de Gestión - SIGES (Sistema de Calidad – MECI – S-SST) para su mejoramiento continuo.',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 3,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity117 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct118,
                  'name' => 'Rediseño y actaulización de la pagina web institucional acorde a las necesidades y estipulaciones legislativas de transparencia y atención al ciudadano.',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 3,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity118 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct119,
                  'name' => 'Elaboración e implementación de un plan estratégico de comunicaciones internas y externas (Diseño, edición y divulgación de Videos institucionales, Folletos y / o flyers. Material de apoyo por temáticas. Campaña interna de comunicación participación y sentido de pertenencias)',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 3,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity119 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct120,
                  'name' => 'Asesoría para comunicación externa en medios escritos, radiales, televisivos   e internet para el fortalecimiento institucional.',
                  'goal_1' => 21,
                  'goal_2' => 21,
                  'goal_3' => 21,
                  'goal_4' => 21,
                  'goal' => 84,
                  'weighing' => 3,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity120 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct121,
                  'name' => 'Diseño, edición y divulgación revista institucional y documentos técnicos',
                  'goal_1' => 4,
                  'goal_2' => 4,
                  'goal_3' => 4,
                  'goal_4' => 4,
                  'goal' => 16,
                  'weighing' => 3,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity121 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct122,
                  'name' => 'Implementación y seguimiento del Plan Institucional de Tecnología e Información – PETI',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 3,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity122 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct123,
                  'name' => 'Entrenamiento en la generación y manejo de información para las áreas temáticas del sistema de información geográfica. ',
                  'goal_1' => 1,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 3,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity123 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct124,
                  'name' => 'Estructuración cartográfica en formato SIG de la cartografía base y temática existente en los archivos digitales de la Corporación.',
                  'goal_1' => 1,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 3,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity124 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct125,
                  'name' => 'Adquisicion de Equipos para el area de SIG, con el fin  actualizar e imprimir la Cartografia y Documentacion que se Genera en esta  Dependencia ( Compra de Plotter)',
                  'goal_1' => 1,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 3,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity125 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct126,
                  'name' => 'Actualización y soporte de licencias de Arc Gis del SIG - Cardique',
                  'goal_1' => 1,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 3,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity126 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct127,
                  'name' => 'Actualización del plan de gestión documental',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 3,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity127 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct128,
                  'name' => 'Elaboración del plan de manejo ambiental de las centrales térmicas y su área de influencia',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 3,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity128 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct129,
                  'name' => 'Elaboración  y aprobación del Plan de Gestión Ambiental de Cardique  2016 - 2035',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 1,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 3,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity129 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct130,
                  'name' => 'Apoyo a la actualización Catastral Municipal en convenio con el IGAC',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 1,
                  'goal' => 1,
                  'weighing' => 3,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity130 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct131,
                  'name' => 'Capacitación sobre tasas retributivas, incentivos para los generadores de vertimientos y seguimiento a la implementación del Decreto 2667 de 2012, decreto 3930 de 2010 y la resolución 0631 de 2015',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 3,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity131 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct132,
                  'name' => 'Elaboración, capacitación y divulgación de un manual que contenga los protocolos de procedimiento de control y vigilancia',
                  'goal_1' => 1,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 4,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity132 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct133,
                  'name' => 'Elaboración del manual de impacto ambiental para obras y/o proyectos realizados por CARDIQUE.',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 1,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 4,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity133 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct134,
                  'name' => 'Elaboración, desarrollo y seguimiento del Plan Institucional de Capacitación anual para los funcionarios de la Corporación',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 4,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity134 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct135,
                  'name' => 'Actualización y/o seguimiento de la Medición Clima Organización de la Corporacion.',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 4,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity135 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct136,
                  'name' => 'Implementación y/o actualizacion  del Sistema de Gestion de Seguridad y Salud en el Trabajo',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 4,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity136 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct137,
                  'name' => 'Elaboración del Plan de Bienestar, Incentivo y Estimulos de la Corporacion.',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 4,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity137 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct138,
                  'name' => 'Elaboración del Plan de Vacantes de la Corporacion',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 4,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity138 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct139,
                  'name' => ' Elaboración y /o seguimiento del proyeco psicosocial corporativo',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 4,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity139 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct140,
                  'name' => 'Establecemiento de las Politicas de la Gestión del Talento Humano de la Corporacion',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 4,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity140 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct141,
                  'name' => 'Realimentación y seguimiento a la implementación del plan estadístico 2016',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 4,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity141 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct142,
                  'name' => 'Diseño e implementación de la Norma ISO 14001: 2015.Diseño realizado',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 1,
                  'goal' => 1,
                  'weighing' => 4,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity142 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct143,
                  'name' => 'Diseño e implementación de la Norma ISO 14001: 2015. Implementación realizada',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 1,
                  'goal' => 1,
                  'weighing' => 4,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity143 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct144,
                  'name' => 'Asignación de recursos al proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity144 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' =>$idobjectiveproduct145,
                  'name' => 'Asesoría y seguimiento de los Planes de Educación Ambiental  Municipal y acompañamiento a los Comités Técnicos Interinstitucionales  de Educación Ambiental Municipal. ',
                  'goal_1' => 5,
                  'goal_2' => 6,
                  'goal_3' => 6,
                  'goal_4' => 5,
                  'goal' => 22,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity145 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' =>$idobjectiveproduct146,
                  'name' => 'Asesoría y acompañamiento para el fortalecimiento organizativo de consejos comunitarios de comunidades negras, incorporando el componente ambiental.',
                  'goal_1' => 16,
                  'goal_2' => 12,
                  'goal_3' => 12,
                  'goal_4' => 12,
                  'goal' => 52,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity146 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' =>$idobjectiveproduct147,
                  'name' => 'Incorporación de la Educación Ambiental en procesos de conservación de especies en estado de amenaza  (Ejemplo: Manatí, Titi, Árbol de Banco, Bosque seco)',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity147 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' =>$idobjectiveproduct148,
                  'name' => 'Fortalecimiento Red Jóvenes de Ambiente y dinamizadores juveniles en la gestión ambiental. Programa de Fortalecimiento de capacidades para la gestión ambiental de niños y jóvenes',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity148 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' =>$idobjectiveproduct149,
                  'name' => 'Promoción y celebración de eventos y conmemoración de fechas del calendario ambiental.',
                  'goal_1' => 4,
                  'goal_2' => 4,
                  'goal_3' => 4,
                  'goal_4' => 4,
                  'goal' => 16,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity149 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' =>$idobjectiveproduct150,
                  'name' => 'Desarrollo de la estrategia de Aulas de Educación Ambiental para el funcionamiento de aulas ambientales en los municipios de la jurisdicción',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity150 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' =>$idobjectiveproduct151,
                  'name' => 'Asesoria y apoyo de un programa de educación ambaiental para la conservación del recurso forestal ',
                  'goal_1' => 10,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 13,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity151 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' =>$idobjectiveproduct152,
                  'name' => 'Educación Ambiental para facilitar el diálogo intercultural para la solución de conflictos socio ambientales',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity152 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' =>$idobjectiveproduct153,
                  'name' => 'Incorporación de la Educación Ambiental en escenarios de postconflicto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity153 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' =>$idobjectiveproduct154,
                  'name' => 'Incorporación del componente de educación ambiental en proyectos ciudadanos de educacaión ambiental -PROCEDA (comunitarios y empresariales)',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity154 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' =>$idobjectiveproduct155,
                  'name' => 'Asesoría y acompañamiento para la creación y fortalecimiento de organizaciones comunitarias para la gestión ambiental  (residuos sólidos, pescadores, negocios verdes, ecoturismo, JAC)',
                  'goal_1' => 5,
                  'goal_2' => 5,
                  'goal_3' => 5,
                  'goal_4' => 5,
                  'goal' => 20,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity155 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' =>$idobjectiveproduct156,
                  'name' => 'Incorporación del componente de comunicación comunitaria en la gestión ambiental local',
                  'goal_1' => 5,
                  'goal_2' => 5,
                  'goal_3' => 5,
                  'goal_4' => 5,
                  'goal' => 20,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity156 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' =>$idobjectiveproduct157,
                  'name' => 'Diseño de materiales de educación eficaces para información, educación y comunicación',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity157 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' =>$idobjectiveproduct158,
                  'name' => 'Asignación de recursos al proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity158 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct159,
                  'name' => 'Desarrollo de un (1) programa anual de Educación ambiental para la conservación del recurso agua - Promoción de los Clubes Defensores del Agua. Programa desarrollado',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity159 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct160,
                  'name' => 'Desarrollo de un (1) programa anual de Educación ambiental para la conservación del recurso agua - Promoción de los Clubes Defensores del Agua. Municipios beneficiados',
                  'goal_1' => 5,
                  'goal_2' => 5,
                  'goal_3' => 5,
                  'goal_4' => 6,
                  'goal' => 21,
                  'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity160 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct161,
                  'name' => 'Acompañamiento la implementación de Proyectos Ambientales Escolares –PRAE en el territorio.',
                  'goal_1' => 21,
                  'goal_2' => 21,
                  'goal_3' => 21,
                  'goal_4' => 21,
                  'goal' => 84,
                  'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity161 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct162,
                  'name' => 'Desarrollar anualmente cursos de Gestión Ambiental Participativa',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity162 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct163,
                  'name' => 'Desarrollo de un Programa de Educación Ambiental en escenarios de postconflicto ',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity163 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct164,
                  'name' => 'Diseño, Formulación, Ejecución y Seguimiento de un (1) programa de Educación ambiental en la zona insular de la jurisdicción.',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity164 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct165,
                  'name' => 'Incorporación de los componentes de investigación, ciencia y tecnología en las instituciones educativas, mediante la implementación del proyecto Ondas Ambientales en convenio con Colciencias',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity165 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct166,
                  'name' => 'Herramientas de comunicación, divulgación y educación para la toma de decisiones y la promoción de cultura compatible con el clima - PND',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity166 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct167,
                  'name' => 'Promoción del Servicio Social Ambiental en las instituciones educativas de la jurisdicción',
                  'goal_1' => 20,
                  'goal_2' => 20,
                  'goal_3' => 20,
                  'goal_4' => 20,
                  'goal' => 80,
                  'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity167 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct168,
                  'name' => 'Educación ambiental sobre impactos ambientales en el área de influencia de las centrales térmicas',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 10,
                  'goal' => 10,
                  'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity168 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct169,
                  'name' => 'Asignación de recursos al proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity169 = DB::getPdo()->lastInsertId();

                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity1,
                    'year' =>1,
                    'value' => 116,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia1 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity2,
                    'year' =>1,
                    'value' => 106,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia2 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity3,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia3 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity4,
                    'year' =>1,
                    'value' => 25,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia4 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity7,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia5 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity8,
                    'year' =>1,
                    'value' => 660,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia6 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity10,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia7 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity11,
                    'year' =>1,
                    'value' => 6,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia8 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity13,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia9 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity14,
                    'year' =>1,
                    'value' => 2,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia10 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity15,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia11 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity17,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia12 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity19,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia13 = DB::getPdo()->lastInsertId();

                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity56,
                      'year' =>1,
                      'value' => 1,
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia600 = DB::getPdo()->lastInsertId();

                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity20,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia14 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity22,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia15 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity25,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia16 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity26,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia17 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity28,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia18 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity29,
                    'year' =>1,
                    'value' => 220,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia19 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity30,
                    'year' =>1,
                    'value' => 10000,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia20 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity33,
                    'year' =>1,
                    'value' => 40,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia21 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity34,
                    'year' =>1,
                    'value' => 10,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia22 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity35,
                    'year' =>1,
                    'value' => 100,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia23 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity39,
                    'year' =>1,
                    'value' => 100,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia24 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity44,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia25 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity46,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia26 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity47,
                    'year' =>1,
                    'value' => 25,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia27 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity48,
                    'year' =>1,
                    'value' => 100,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia28 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity49,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia29 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity52,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia30 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity53,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia31 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity54,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia32 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity57,
                    'year' =>1,
                    'value' => 21,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia33 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity60,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia34 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity61,
                    'year' =>1,
                    'value' => 5,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia35 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity62,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia36 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity63,
                    'year' =>1,
                    'value' => 100,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia37 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity64,
                    'year' =>1,
                    'value' => 100,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia38 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity65,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia39 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity68,
                    'year' =>1,
                    'value' => 2,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia40 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity71,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia41 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity72,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia42 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity73,
                    'year' =>1,
                    'value' => 21,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia43 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity74,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia44 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity75,
                    'year' =>1,
                    'value' => 50,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia45 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity78,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia46 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity79,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia47 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity80,
                    'year' =>1,
                    'value' => 6,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia48 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity81,
                    'year' =>1,
                    'value' => 100,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia49 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity82,
                    'year' =>1,
                    'value' => 100,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia50 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity88,
                    'year' =>1,
                    'value' => 100,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia51 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity89,
                    'year' =>1,
                    'value' => 6,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia52 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity90,
                    'year' =>1,
                    'value' => 50,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia53 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  
                  
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity98,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia54 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity100,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia55 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity101,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia56 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity102,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia57 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity105,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia58 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity106,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia59 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity109,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia60 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity110,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia61 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity111,
                    'year' =>1,
                    'value' => 100,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia62 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity112,
                    'year' =>1,
                    'value' => 100,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia63 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity113,
                    'year' =>1,
                    'value' => 100,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia64 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity114,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia65 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity115,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia66 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity116,
                    'year' =>1,
                    'value' => 4,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia67 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity117,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia68 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity118,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia69 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity119,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia70 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity120,
                    'year' =>1,
                    'value' => 21,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia71 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity121,
                    'year' =>1,
                    'value' => 4,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia72 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity122,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia73 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity123,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia74 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity124,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia75 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity125,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia76 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity126,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia77 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity127,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia78 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity131,
                    'year' =>1,
                    'value' => 100,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia79 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity132,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia80 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity134,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia81 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity135,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia82 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity136,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia83 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity137,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia84 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity138,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia85 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity139,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia86 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity140,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia87 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity141,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia88 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity144,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia89 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity146,
                    'year' =>1,
                    'value' => 16,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia90 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity147,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia91 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity148,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia92 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity149,
                    'year' =>1,
                    'value' => 4,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia93 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity150,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia94 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity151,
                    'year' =>1,
                    'value' => 10,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia95 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity152,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia96 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity153,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia97 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity154,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia98 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity155,
                    'year' =>1,
                    'value' => 5,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia99 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity156,
                    'year' =>1,
                    'value' => 5,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia100 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity157,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia101 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity158,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia102 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity159,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia103 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity160,
                    'year' =>1,
                    'value' => 5,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia104 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity161,
                    'year' =>1,
                    'value' => 21,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia105 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity162,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia106 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity163,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia107 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity164,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia108 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity165,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia109 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity166,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia110 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity167,
                    'year' =>1,
                    'value' => 20,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia111 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity169,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia112 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity1,
                    'year' =>2,
                    'value' => '114',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia113 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity2,
                    'year' =>2,
                    'value' => '36',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia114 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity3,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia115 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity4,
                    'year' =>2,
                    'value' => '25',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia116 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity8,
                    'year' =>2,
                    'value' => '519',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia117 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity10,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia118 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity11,
                    'year' =>2,
                    'value' => '7',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia119 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity13,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia120 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity15,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia121 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity19,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia122 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity20,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia123 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity22,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia124 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity25,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia125 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity26,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia126 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity28,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia127 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity29,
                    'year' =>2,
                    'value' => '100',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia128 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity30,
                    'year' =>2,
                    'value' => '15000',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia129 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity33,
                    'year' =>2,
                    'value' => '40',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia130 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity34,
                    'year' =>2,
                    'value' => '10',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia131 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity35,
                    'year' =>2,
                    'value' => '100',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia132 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity36,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia133 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity37,
                    'year' =>2,
                    'value' => '25',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia134 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity40,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia135 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity41,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia136 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity44,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia137 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity45,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia138 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity46,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia139 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity47,
                    'year' =>2,
                    'value' => '25',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia140 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity48,
                    'year' =>2,
                    'value' => '100',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia141 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity51,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia142 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity53,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia143 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity54,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia144 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity55,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia145 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity56,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia146 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity57,
                    'year' =>2,
                    'value' => '21',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia147 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity59,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia148 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity60,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia149 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity61,
                    'year' =>2,
                    'value' => '6',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia150 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity62,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia151 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity63,
                    'year' =>2,
                    'value' => '100',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia152 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity64,
                    'year' =>2,
                    'value' => '100',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia153 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity65,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia154 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity68,
                    'year' =>2,
                    'value' => '4',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia155 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity71,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia156 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity72,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia157 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity73,
                    'year' =>2,
                    'value' => '21',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia158 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity74,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia159 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity75,
                    'year' =>2,
                    'value' => '50',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia160 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity76,
                    'year' =>2,
                    'value' => '100',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia161 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity79,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia162 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity80,
                    'year' =>2,
                    'value' => '5',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia163 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity81,
                    'year' =>2,
                    'value' => '100',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia164 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity82,
                    'year' =>2,
                    'value' => '100',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia165 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity83,
                    'year' =>2,
                    'value' => '100',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia166 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity84,
                    'year' =>2,
                    'value' => '100',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia167 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity88,
                    'year' =>2,
                    'value' => '100',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia168 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity89,
                    'year' =>2,
                    'value' => '6',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia169 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity90,
                    'year' =>2,
                    'value' => '50',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia170 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity91,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia171 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity96,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia172 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity98,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia173 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity100,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia174 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity101,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia175 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity102,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia176 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity103,
                    'year' =>2,
                    'value' => '25',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia177 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity105,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia178 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity106,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia179 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity107,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia180 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity110,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia181 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity111,
                    'year' =>2,
                    'value' => '100',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia182 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity112,
                    'year' =>2,
                    'value' => '100',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia183 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity113,
                    'year' =>2,
                    'value' => '100',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia184 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity114,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia185 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity115,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia186 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity117,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia187 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity118,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia188 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity119,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia189 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity120,
                    'year' =>2,
                    'value' => '21',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia190 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity121,
                    'year' =>2,
                    'value' => '4',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia191 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity122,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia192 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity127,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia193 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity128,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia194 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity131,
                    'year' =>2,
                    'value' => '100',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia195 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity134,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia196 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity135,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia197 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity136,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia198 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity137,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia199 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity138,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia200 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity139,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia201 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity140,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia202 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity141,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia203 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity144,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia204 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity145,
                    'year' =>2,
                    'value' => '6',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia205 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity146,
                    'year' =>2,
                    'value' => '12',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia206 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity147,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia207 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity148,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia208 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity149,
                    'year' =>2,
                    'value' => '4',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia209 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity150,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia210 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity151,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia211 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity152,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia212 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity153,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia213 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity154,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia214 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity155,
                    'year' =>2,
                    'value' => '5',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia215 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity156,
                    'year' =>2,
                    'value' => '5',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia216 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity157,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia217 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity158,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia218 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity159,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia219 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity160,
                    'year' =>2,
                    'value' => '5',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia220 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity161,
                    'year' =>2,
                    'value' => '21',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia221 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity162,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia222 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity163,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia223 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity164,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia224 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity165,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia225 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity166,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia226 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity167,
                    'year' =>2,
                    'value' => '20',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia227 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity168,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia228 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity169,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia229 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity1,
                    'year' =>3,
                    'value' => '2',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia230 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity6,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia231 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity8,
                    'year' =>3,
                    'value' => '599',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia232 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity9,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia233 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity10,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia234 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity15,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia235 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity16,
                    'year' =>3,
                    'value' => '4',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia236 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity17,
                    'year' =>3,
                    'value' => '4',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia237 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity19,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia238 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity20,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia239 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity21,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia240 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity22,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia241 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity23,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia242 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity25,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia243 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity26,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia244 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity27,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia245 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity28,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia246 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity29,
                    'year' =>3,
                    'value' => '120',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia247 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity33,
                    'year' =>3,
                    'value' => '40',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia248 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity34,
                    'year' =>3,
                    'value' => '10',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia249 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity35,
                    'year' =>3,
                    'value' => '100',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia250 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity36,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia251 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity37,
                    'year' =>3,
                    'value' => '25',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia252 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity40,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia253 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity43,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia254 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity44,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia255 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity45,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia256 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity46,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia257 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity47,
                    'year' =>3,
                    'value' => '12',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia258 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity48,
                    'year' =>3,
                    'value' => '100',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia259 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity51,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia260 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity52,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia261 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity53,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia262 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity55,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia263 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity56,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia264 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity57,
                    'year' =>3,
                    'value' => '21',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia265 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity59,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia266 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity60,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia267 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity61,
                    'year' =>3,
                    'value' => '6',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia268 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity62,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia269 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity63,
                    'year' =>3,
                    'value' => '100',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia270 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity64,
                    'year' =>3,
                    'value' => '100',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia271 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity65,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia272 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity66,
                    'year' =>3,
                    'value' => '7',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia273 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity67,
                    'year' =>3,
                    'value' => '4',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia274 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity69,
                    'year' =>3,
                    'value' => '100',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia275 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity70,
                    'year' =>3,
                    'value' => '33.33',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia276 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity71,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia277 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity72,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia278 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity73,
                    'year' =>3,
                    'value' => '21',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia279 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity74,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia280 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity75,
                    'year' =>3,
                    'value' => '50',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia281 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity76,
                    'year' =>3,
                    'value' => '100',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia282 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity79,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia283 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity80,
                    'year' =>3,
                    'value' => '5',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia284 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity81,
                    'year' =>3,
                    'value' => '100',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia285 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity82,
                    'year' =>3,
                    'value' => '100',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia286 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity83,
                    'year' =>3,
                    'value' => '100',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia287 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity84,
                    'year' =>3,
                    'value' => '100',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia288 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity88,
                    'year' =>3,
                    'value' => '100',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia289 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity89,
                    'year' =>3,
                    'value' => '5',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia290 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity90,
                    'year' =>3,
                    'value' => '50',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia291 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity91,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia292 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity96,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia293 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity97,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia294 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity98,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia295 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity100,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia296 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity101,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia297 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity102,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia298 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity104,
                    'year' =>3,
                    'value' => '27',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia299 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity105,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia300 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity106,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia301 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity110,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia302 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity111,
                    'year' =>3,
                    'value' => '100',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia303 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity112,
                    'year' =>3,
                    'value' => '100',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia304 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity113,
                    'year' =>3,
                    'value' => '100',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia305 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity114,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia306 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity115,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia307 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity116,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia308 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity117,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia309 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity118,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia310 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity119,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia311 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity120,
                    'year' =>3,
                    'value' => '21',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia312 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity121,
                    'year' =>3,
                    'value' => '4',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia313 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity122,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia314 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity127,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia315 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity129,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia316 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity131,
                    'year' =>3,
                    'value' => '100',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia317 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity133,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia318 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity134,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia319 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity135,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia320 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity136,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia321 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity137,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia322 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity138,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia323 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity139,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia324 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity140,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia325 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity141,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia326 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity144,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia327 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity145,
                    'year' =>3,
                    'value' => '6',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia328 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity146,
                    'year' =>3,
                    'value' => '12',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia329 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity147,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia330 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity148,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia331 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity149,
                    'year' =>3,
                    'value' => '4',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia332 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity150,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia333 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity151,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia334 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity152,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia335 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity153,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia336 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity154,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia337 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity155,
                    'year' =>3,
                    'value' => '5',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia338 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity156,
                    'year' =>3,
                    'value' => '5',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia339 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity157,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia340 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity158,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia341 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity159,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia342 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity160,
                    'year' =>3,
                    'value' => '5',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia343 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity161,
                    'year' =>3,
                    'value' => '21',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia344 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity162,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia345 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity163,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia346 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity164,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia347 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity165,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia348 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity166,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia349 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity167,
                    'year' =>3,
                    'value' => '20',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia350 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity168,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia351 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity169,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia352 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity1,
                    'year' =>4,
                    'value' => '32',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia353 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity2,
                    'year' =>4,
                    'value' => '9',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia354 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity3,
                    'year' =>4,
                    'value' => '2',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia355 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity4,
                    'year' =>4,
                    'value' => '50',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia356 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity5,
                    'year' =>4,
                    'value' => '5200',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia357 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity8,
                    'year' =>4,
                    'value' => '1022',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia358 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity9,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia359 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity10,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia360 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity12,
                    'year' =>4,
                    'value' => '8',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia361 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity13,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia362 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity14,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia363 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity15,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia364 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity19,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia365 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity20,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia366 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity21,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia367 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity22,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia368 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity24,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia369 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity25,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia370 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity26,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia371 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity28,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia372 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity29,
                    'year' =>4,
                    'value' => '49.5',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia373 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity30,
                    'year' =>4,
                    'value' => '30000',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia374 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity31,
                    'year' =>4,
                    'value' => '400',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia375 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity32,
                    'year' =>4,
                    'value' => '270',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia376 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity33,
                    'year' =>4,
                    'value' => '40',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia377 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity34,
                    'year' =>4,
                    'value' => '10',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia378 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity35,
                    'year' =>4,
                    'value' => '100',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia379 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity36,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia380 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity37,
                    'year' =>4,
                    'value' => '25',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia381 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity40,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia382 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity44,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia383 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity45,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia384 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity46,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia385 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity48,
                    'year' =>4,
                    'value' => '100',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia386 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity52,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia387 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity53,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia388 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity54,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia389 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity55,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia390 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity56,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia391 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity57,
                    'year' =>4,
                    'value' => '21',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia392 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity58,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia393 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity59,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia394 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity60,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia395 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity61,
                    'year' =>4,
                    'value' => '4',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia396 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity62,
                    'year' =>4,
                    'value' => '4',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia397 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity63,
                    'year' =>4,
                    'value' => '100',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia398 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity64,
                    'year' =>4,
                    'value' => '100',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia399 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity65,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia400 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity66,
                    'year' =>4,
                    'value' => '7',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia401 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity67,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia402 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity69,
                    'year' =>4,
                    'value' => '100',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia403 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity70,
                    'year' =>4,
                    'value' => '33.33',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia404 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity71,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia405 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity72,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia406 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity74,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia407 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity75,
                    'year' =>4,
                    'value' => '50',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia408 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity76,
                    'year' =>4,
                    'value' => '100',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia409 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity79,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia410 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity80,
                    'year' =>4,
                    'value' => '5',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia411 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity81,
                    'year' =>4,
                    'value' => '100',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia412 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity82,
                    'year' =>4,
                    'value' => '100',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia413 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity83,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia414 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity86,
                    'year' =>4,
                    'value' => '100',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia415 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity90,
                    'year' =>4,
                    'value' => '100',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia416 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity91,
                    'year' =>4,
                    'value' => '5',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia417 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity92,
                    'year' =>4,
                    'value' => '50',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia418 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity93,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia419 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity94,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia420 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity96,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia421 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity98,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia422 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity99,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia423 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity100,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia424 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity101,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia425 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity102,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia426 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity103,
                    'year' =>4,
                    'value' => '5',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia427 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity105,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia428 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity106,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia429 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity109,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia430 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity110,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia431 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity111,
                    'year' =>4,
                    'value' => '100',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia432 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity112,
                    'year' =>4,
                    'value' => '100',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia433 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity113,
                    'year' =>4,
                    'value' => '100',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia434 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity114,
                    'year' =>4,
                    'value' => '3',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia435 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity115,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia436 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity116,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia437 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity117,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia438 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity118,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia439 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity119,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia440 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity120,
                    'year' =>4,
                    'value' => '21',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia441 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity121,
                    'year' =>4,
                    'value' => '4',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia442 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity122,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia443 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity127,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia444 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity130,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia445 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity131,
                    'year' =>4,
                    'value' => '100',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia446 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity134,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia447 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity135,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia448 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity136,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia449 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity137,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia450 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity138,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia451 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity139,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia452 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity140,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia453 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity141,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia454 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity142,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia455 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity143,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia456 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity144,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia457 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity145,
                    'year' =>4,
                    'value' => '5',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia458 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity146,
                    'year' =>4,
                    'value' => '12',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia459 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity147,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia460 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity148,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia461 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity149,
                    'year' =>4,
                    'value' => '4',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia462 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity150,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia463 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity151,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia464 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity152,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia465 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity153,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia466 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity154,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia467 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity155,
                    'year' =>4,
                    'value' => '5',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia468 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity156,
                    'year' =>4,
                    'value' => '5',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia469 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity157,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia470 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity158,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia471 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity159,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia472 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity160,
                    'year' =>4,
                    'value' => '6',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia473 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity161,
                    'year' =>4,
                    'value' => '21',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia474 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity162,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia475 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity163,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia476 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity164,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia477 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity165,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia478 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity166,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia479 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity167,
                    'year' =>4,
                    'value' => '20',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia480 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity168,
                    'year' =>4,
                    'value' => '10',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia481 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity169,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia482 = DB::getPdo()->lastInsertId();
                  
        DB::table('financing_sources')->insert([
          'father_id' => 2,
          'code' => '1.1.3',
          'name' => 'Cuota de Repoblacion y Reposicion de Babillas',
          'description' => 'Cuota de Repoblacion y Reposicion de Babillas',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 5,
          ]);
          $idFuente11 = DB::getPdo()->lastInsertId();


         DB::table('financing_sources')->insert([
          'father_id' => 11,
          'code' => '1.1.1.1.1.1.1.1',
          'name' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
          'description' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 5,
          ]);
          $idFuente2 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 11,
          'code' => '1.1.1.1.1.1.1.1',
          'name' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
          'description' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 5,
          ]);
          $idFuente1 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 5,
          'code' => '1.1.1.1.1.1',
          'name' => 'Sobretasa ambiental - Peajes (vigencia actual)',
          'description' => 'Sobretasa ambiental - Peajes (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 5,
          ]);
          $idFuente3 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 30,
          'code' => '1.1.2.1.1.1.2.1',
          'name' => 'Contribución sector eléctrico - Termoeléctrica (vigencia actual)',
          'description' => 'Contribución sector eléctrico - Termoeléctrica (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 5,
          ]);
          $idFuente4 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 42,
          'code' => '1.1.2.2.1.1.1.1',
          'name' => 'Tasa retributiva (vigencia actual)',
          'description' => 'Tasa retributiva (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 5,
          ]);
          $idFuente5 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 45,
          'code' => '1.1.2.2.1.1.2.1',
          'name' => 'Tasa por el uso del agua (vigencia actual)',
          'description' => 'Tasa por el uso del agua (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 5,
          ]);
          $idFuente6 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 64,
          'code' => '1.1.2.2.2.3.1',
          'name' => 'Salvoconductos (vigencia actual)',
          'description' => 'Salvoconductos (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 5,
          ]);
          $idFuente7 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 70,
          'code' => '1.1.2.2.2.5.1',
          'name' => 'Venta de Servicios de Laboratorio e Información (vigencia actual)',
          'description' => 'Venta de Servicios de Laboratorio e Información (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 5,
          ]);
          $idFuente9 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 58,
          'code' => '1.1.2.2.2.1.1',
          'name' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
          'description' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 5,
          ]);
          $idFuente10 = DB::getPdo()->lastInsertId();
           
           
         DB::table('financing_sources')->insert([
          'father_id' => 79,
          'code' => '1.1.2.2.2.8.1',
          'name' => 'Otros servicios (vigencia actual)',
          'description' => 'Otros servicios (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 5,
          ]);
          $idFuente12 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 137,
          'code' => '1.2..1.1',
          'name' => 'Operaciones Comerciales',
          'description' => 'Operaciones Comerciales',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 5,
          ]);
          $idFuente13 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 27,
          'code' => '1.1.2.1.1.1.1.1',
          'name' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia actual)',
          'description' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 5,
          ]);
          $idFuente14 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 84,
          'code' => '1.1.2.3.1.1.1',
          'name' => 'Multas ambientales (vigencia actual)',
          'description' => 'Multas ambientales (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 5,
          ]);
          $idFuente8 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 145,
          'code' => '1.2.2.6',
          'name' => 'Rendimientos financieros',
          'description' => 'Rendimientos financieros',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 5,
          ]);
          $idFuente15 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 241,
          'code' => '1.2.6.3.5',
          'name' => 'Recuperación de cartera Otras tasas',
          'description' => 'Recuperación de cartera Otras tasas',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 5,
          ]);
          $idFuente16 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 250,
          'code' => '1.2.7.4',
          'name' => 'Otros recursos del balance',
          'description' => 'Otros recursos del balance',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 5,
          ]);
          $idFuente17 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 119,
          'code' => '1.1.2.5.1.1.1.4',
          'name' => 'Aportes de la Nación Funcionamiento',
          'description' => 'Aportes de la Nación Funcionamiento',
          'type_id' => 23,
          'final_level' => true,
          'group_id' => 5,
          ]);
          $idFuente18 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 125,
          'code' => '1.1.2.5.1.2.1.4',
          'name' => 'Aportes del FCA para Gastos de personal',
          'description' => 'Aportes del FCA para Gastos de personal',
          'type_id' => 24,
          'final_level' => true,
          'group_id' => 5,
          ]);
          $idFuente19 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente1,
          'value' => 39000000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 39000000000,
          'year' => 1,
          ]);
          $idPlan1 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente2,
          'value' => 511000000,
          'functioning_percentage' => 50.5223,
          'debt_service_percentage' => 0,
          'fund_percentage' => 2.1335,
          'investment_percentage' => 47.3442,
          'functioning' => 258168953,
          'debt_service' => 0,
          'fund' => 10902185,
          'investment' => 241928862,
          'year' => 1,
          ]);
          $idPlan2 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente3,
          'value' => 650000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 650000000,
          'year' => 1,
          ]);
          $idPlan3 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente4,
          'value' => 1000000000,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 900000000,
          'debt_service' => 0,
          'fund' => 100000000,
          'investment' => 0,
          'year' => 1,
          ]);
          $idPlan4 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente5,
          'value' => 1400000000,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 1260000000,
          'debt_service' => 0,
          'fund' => 140000000,
          'investment' => 0,
          'year' => 1,
          ]);
          $idPlan5 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente6,
          'value' => 250000000,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 225000000,
          'debt_service' => 0,
          'fund' => 25000000,
          'investment' => 0,
          'year' => 1,
          ]);
          $idPlan6 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente7,
          'value' => 5000000,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 4500000,
          'debt_service' => 0,
          'fund' => 500000,
          'investment' => 0,
          'year' => 1,
          ]);
          $idPlan7 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente8,
          'value' => 1000000,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 900000,
          'debt_service' => 0,
          'fund' => 100000,
          'investment' => 0,
          'year' => 1,
          ]);
          $idPlan8 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente9,
          'value' => 230000000,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 230000000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 1,
          ]);
          $idPlan9 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente10,
          'value' => 360000000,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 360000000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 1,
          ]);
          $idPlan10 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente11,
          'value' => 1000000,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 1000000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 1,
          ]);
          $idPlan11 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente12,
          'value' => 240000000,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 240000000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 1,
          ]);
          $idPlan12 = DB::getPdo()->lastInsertId();
          
         DB::table('financial_plans')->insert([
            'p_a_i_id' => $idpai1,
            'source_id' => $idFuente14,
            'value' => 0,
            'functioning_percentage' => 10,
            'debt_service_percentage' => 0,
            'fund_percentage' => 20,
            'investment_percentage' => 70,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 0,
            'year' => 1,
            ]);
            $idPlan13 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente15,
          'value' => 320000000,
          'functioning_percentage' => 80,
          'debt_service_percentage' => 0,
          'fund_percentage' => 20,
          'investment_percentage' => 0,
          'functioning' => 256000000,
          'debt_service' => 0,
          'fund' => 64000000,
          'investment' => 0,
          'year' => 1,
          ]);
          $idPlan14 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente16,
          'value' => 3500000000,
          'functioning_percentage' => 87,
          'debt_service_percentage' => 0,
          'fund_percentage' => 13,
          'investment_percentage' => 0,
          'functioning' => 3045000000,
          'debt_service' => 0,
          'fund' => 455000000,
          'investment' => 0,
          'year' => 1,
          ]);
          $idPlan15 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente17,
          'value' => 4415348971.16,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 3973814074.044,
          'debt_service' => 0,
          'fund' => 441534897.116,
          'investment' => 0,
          'year' => 1,
          ]);
          $idPlan16 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente18,
          'value' => 1999233915,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 1999233915,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 1,
          ]);
          $idPlan17 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente19,
          'value' => 15865000,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 15865000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 1,
          ]);
          $idPlan18 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente1,
          'value' => 40286760000,
          'functioning_percentage' => 9,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 91,
          'functioning' => 3625808400,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 36660951600,
          'year' => 2,
          ]);
          $idPlan19 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente2,
          'value' => 566000000,
          'functioning_percentage' => 51.0234,
          'debt_service_percentage' => 0,
          'fund_percentage' => 12.8516,
          'investment_percentage' => 36.125,
          'functioning' => 288792444,
          'debt_service' => 0,
          'fund' => 72740056,
          'investment' => 204467500,
          'year' => 2,
          ]);
          $idPlan20 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente3,
          'value' => 1180000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 1180000000,
          'year' => 2,
          ]);
          $idPlan21 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente4,
          'value' => 1801000000,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 1620900000,
          'debt_service' => 0,
          'fund' => 180100000,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan22 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente5,
          'value' => 1631000000,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 1467900000,
          'debt_service' => 0,
          'fund' => 163100000,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan23 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente6,
          'value' => 275000000,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 247500000,
          'debt_service' => 0,
          'fund' => 27500000,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan24 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente7,
          'value' => 7135000,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 6421500,
          'debt_service' => 0,
          'fund' => 713500,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan25 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente8,
          'value' => 1000000,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 900000,
          'debt_service' => 0,
          'fund' => 100000,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan26 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente9,
          'value' => 260000000,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 234000000,
          'debt_service' => 0,
          'fund' => 26000000,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan27 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente10,
          'value' => 364000000,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 327600000,
          'debt_service' => 0,
          'fund' => 36400000,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan28 = DB::getPdo()->lastInsertId();
           
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente12,
          'value' => 180000000,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 162000000,
          'debt_service' => 0,
          'fund' => 18000000,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan30 = DB::getPdo()->lastInsertId();
           
        DB::table('financial_plans')->insert([
            'p_a_i_id' => $idpai1,
            'source_id' => $idFuente14,
            'value' => 0,
            'functioning_percentage' => 10,
            'debt_service_percentage' => 0,
            'fund_percentage' => 20,
            'investment_percentage' => 70,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 0,
            'year' => 2,
            ]);
            $idPlan31 = DB::getPdo()->lastInsertId();
          
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente15,
          'value' => 624000000,
          'functioning_percentage' => 80,
          'debt_service_percentage' => 0,
          'fund_percentage' => 20,
          'investment_percentage' => 0,
          'functioning' => 499200000,
          'debt_service' => 0,
          'fund' => 124800000,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan32 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente16,
          'value' => 3672000000,
          'functioning_percentage' => 87,
          'debt_service_percentage' => 0,
          'fund_percentage' => 13,
          'investment_percentage' => 0,
          'functioning' => 3194640000,
          'debt_service' => 0,
          'fund' => 477360000,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan33 = DB::getPdo()->lastInsertId();
           
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente18,
          'value' => 2039146000,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 2039146000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan35 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente19,
          'value' => 15865000,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 15865000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan36 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente1,
          'value' => 40300000000,
          'functioning_percentage' => 7,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 93,
          'functioning' => 2821000000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 37479000000,
          'year' => 3,
          ]);
          $idPlan37 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente2,
          'value' => 700000000,
          'functioning_percentage' => 22.6355,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 77.3645,
          'functioning' => 158448500,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 541551500,
          'year' => 3,
          ]);
          $idPlan38 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente3,
          'value' => 1200000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 1200000000,
          'year' => 3,
          ]);
          $idPlan39 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente4,
          'value' => 1250000000,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 1125000000,
          'debt_service' => 0,
          'fund' => 125000000,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan40 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente5,
          'value' => 1100000000,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 990000000,
          'debt_service' => 0,
          'fund' => 110000000,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan41 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente6,
          'value' => 400000000,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 360000000,
          'debt_service' => 0,
          'fund' => 40000000,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan42 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente7,
          'value' => 2000000,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 1800000,
          'debt_service' => 0,
          'fund' => 200000,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan43 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente8,
          'value' => 1000000,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 900000,
          'debt_service' => 0,
          'fund' => 100000,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan44 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente9,
          'value' => 200000000,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 180000000,
          'debt_service' => 0,
          'fund' => 20000000,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan45 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente10,
          'value' => 360000000,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 324000000,
          'debt_service' => 0,
          'fund' => 36000000,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan46 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente11,
          'value' => 0,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan47 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente12,
          'value' => 100000000,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 90000000,
          'debt_service' => 0,
          'fund' => 10000000,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan48 = DB::getPdo()->lastInsertId();
           

         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente14,
          'value' => 0,
          'functioning_percentage' => 10,
          'debt_service_percentage' => 0,
          'fund_percentage' => 20,
          'investment_percentage' => 70,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan49 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente15,
          'value' => 600000000,
          'functioning_percentage' => 80,
          'debt_service_percentage' => 0,
          'fund_percentage' => 20,
          'investment_percentage' => 0,
          'functioning' => 480000000,
          'debt_service' => 0,
          'fund' => 120000000,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan50 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente16,
          'value' => 3900000000,
          'functioning_percentage' => 89.6159,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10.3841,
          'investment_percentage' => 0,
          'functioning' => 3495020100,
          'debt_service' => 0,
          'fund' => 404979900,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan51 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente17,
          'value' => 2854966143.36,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 2569469529.024,
          'debt_service' => 0,
          'fund' => 285496614.336,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan52 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente18,
          'value' => 2210651000,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 2210651000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan53 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente19,
          'value' => 16341000,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 16341000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan54 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente1,
          'value' => 40752000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 40752000000,
          'year' => 4,
          ]);
          $idPlan55 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente2,
          'value' => 1200000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 1200000000,
          'year' => 4,
          ]);
          $idPlan56 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente3,
          'value' => 1255000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 1255000000,
          'year' => 4,
          ]);
          $idPlan57 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente4,
          'value' => 1848000000,
          'functioning_percentage' => 75,
          'debt_service_percentage' => 0,
          'fund_percentage' => 25,
          'investment_percentage' => 0,
          'functioning' => 1386000000,
          'debt_service' => 0,
          'fund' => 462000000,
          'investment' => 0,
          'year' => 4,
          ]);
          $idPlan58 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente5,
          'value' => 1020000000,
          'functioning_percentage' => 75,
          'debt_service_percentage' => 0,
          'fund_percentage' => 25,
          'investment_percentage' => 0,
          'functioning' => 765000000,
          'debt_service' => 0,
          'fund' => 255000000,
          'investment' => 0,
          'year' => 4,
          ]);
          $idPlan59 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente6,
          'value' => 320000000,
          'functioning_percentage' => 80,
          'debt_service_percentage' => 0,
          'fund_percentage' => 20,
          'investment_percentage' => 0,
          'functioning' => 256000000,
          'debt_service' => 0,
          'fund' => 64000000,
          'investment' => 0,
          'year' => 4,
          ]);
          $idPlan60 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente7,
          'value' => 5000000,
          'functioning_percentage' => 80,
          'debt_service_percentage' => 0,
          'fund_percentage' => 20,
          'investment_percentage' => 0,
          'functioning' => 4000000,
          'debt_service' => 0,
          'fund' => 1000000,
          'investment' => 0,
          'year' => 4,
          ]);
          $idPlan61 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente8,
          'value' => 2000000,
          'functioning_percentage' => 80,
          'debt_service_percentage' => 0,
          'fund_percentage' => 20,
          'investment_percentage' => 0,
          'functioning' => 1600000,
          'debt_service' => 0,
          'fund' => 400000,
          'investment' => 0,
          'year' => 4,
          ]);
          $idPlan62 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente9,
          'value' => 200000000,
          'functioning_percentage' => 53.5976,
          'debt_service_percentage' => 0,
          'fund_percentage' => 15.0184,
          'investment_percentage' => 31.384,
          'functioning' => 107195200,
          'debt_service' => 0,
          'fund' => 30036800,
          'investment' => 62768000,
          'year' => 4,
          ]);
          $idPlan63 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente10,
          'value' => 350000000,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 315000000,
          'debt_service' => 0,
          'fund' => 35000000,
          'investment' => 0,
          'year' => 4,
          ]);
          $idPlan64 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente11,
          'value' => 1000000,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 1000000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 4,
          ]);
          $idPlan65 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente12,
          'value' => 200000000,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 180000000,
          'debt_service' => 0,
          'fund' => 20000000,
          'investment' => 0,
          'year' => 4,
          ]);
          $idPlan66 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente13,
          'value' => 1000000,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 1000000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 4,
          ]);
          $idPlan67 = DB::getPdo()->lastInsertId();
           

         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente15,
          'value' => 820000000,
          'functioning_percentage' => 60,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 30,
          'functioning' => 492000000,
          'debt_service' => 0,
          'fund' => 82000000,
          'investment' => 246000000,
          'year' => 4,
          ]);
          $idPlan68 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente16,
          'value' => 4705633027,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 4235069724.3,
          'debt_service' => 0,
          'fund' => 470563302.7,
          'investment' => 0,
          'year' => 4,
          ]);
          $idPlan69 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente17,
          'value' => 47264540157,
          'functioning_percentage' => 19,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 81,
          'functioning' => 8980262629.83,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 38284277527.17,
          'year' => 4,
          ]);
          $idPlan70 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente18,
          'value' => 2306400000,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 2306400000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 4,
          ]);
          $idPlan71 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente19,
          'value' => 16800000,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 16800000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 4,
          ]);
          $idPlan72 = DB::getPdo()->lastInsertId();
          
          

           
        DB::table('implementations')->insert([
                      'p_a_i_s_id'=>$idpai1,
                      ]);
                      $IdImplementation1 = DB::getPdo()->lastInsertId();

         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 36091031017,
          'financial_plans_id' => $idPlan1,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo1 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 757352233.63,
          'financial_plans_id' => $idPlan2,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo2 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 1263756650,
          'financial_plans_id' => $idPlan3,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo3 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 2498191511,
          'financial_plans_id' => $idPlan4,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo4 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 649886469,
          'financial_plans_id' => $idPlan5,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo5 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 327615949,
          'financial_plans_id' => $idPlan6,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo6 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 7593939,
          'financial_plans_id' => $idPlan7,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo7 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 229074012,
          'financial_plans_id' => $idPlan9,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo9 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 421196438,
          'financial_plans_id' => $idPlan10,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo10 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 722633458.23,
          'financial_plans_id' => $idPlan12,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo12 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 1687620040,
          'financial_plans_id' => $idPlan13,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo13 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 928900175.33,
          'financial_plans_id' => $idPlan14,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo14 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 4764619612,
          'financial_plans_id' => $idPlan15,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo15 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 4415348971.16,
          'financial_plans_id' => $idPlan16,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo16 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 1999233914.5,
          'financial_plans_id' => $idPlan17,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo17 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 41486820145,
          'financial_plans_id' => $idPlan19,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo19 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 1237118051.62,
          'financial_plans_id' => $idPlan20,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo20 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 1413156500,
          'financial_plans_id' => $idPlan21,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo21 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 2020087284,
          'financial_plans_id' => $idPlan22,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo22 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 1102663858,
          'financial_plans_id' => $idPlan23,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo23 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 383022472,
          'financial_plans_id' => $idPlan24,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo24 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 8283020.94,
          'financial_plans_id' => $idPlan25,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo25 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 134564738,
          'financial_plans_id' => $idPlan26,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo26 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 202896195,
          'financial_plans_id' => $idPlan27,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo27 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 417102980,
          'financial_plans_id' => $idPlan28,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo28 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 116853815,
          'financial_plans_id' => $idPlan30,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo30 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 1687620040,
          'financial_plans_id' => $idPlan31,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo31 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 423998265.98,
          'financial_plans_id' => $idPlan32,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo32 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 2725806060,
          'financial_plans_id' => $idPlan33,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo33 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 1836710857.17,
          'financial_plans_id' => $idPlan35,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo35 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 40845879112,
          'financial_plans_id' => $idPlan37,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo37 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 1412317991,
          'financial_plans_id' => $idPlan38,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo38 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 1493364950,
          'financial_plans_id' => $idPlan39,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo39 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 2891844619,
          'financial_plans_id' => $idPlan40,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo40 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 1102942414,
          'financial_plans_id' => $idPlan41,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo41 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 334105312,
          'financial_plans_id' => $idPlan42,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo42 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 5079406,
          'financial_plans_id' => $idPlan43,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo43 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 267062281,
          'financial_plans_id' => $idPlan45,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo45 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 374674893,
          'financial_plans_id' => $idPlan46,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo46 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 92490903,
          'financial_plans_id' => $idPlan48,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo48 = DB::getPdo()->lastInsertId();
           


         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 1162595390,
          'financial_plans_id' => $idPlan50,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo50 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 1815563456,
          'financial_plans_id' => $idPlan51,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo51 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 2854966143,
          'financial_plans_id' => $idPlan52,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo52 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 2199477538,
          'financial_plans_id' => $idPlan53,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo53 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 44545506421,
          'financial_plans_id' => $idPlan55,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo55 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 1321395724,
          'financial_plans_id' => $idPlan56,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo56 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 1731843000,
          'financial_plans_id' => $idPlan57,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo57 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 3205844828,
          'financial_plans_id' => $idPlan58,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo58 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 701150634,
          'financial_plans_id' => $idPlan59,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo59 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 399125657,
          'financial_plans_id' => $idPlan60,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo60 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 2806600,
          'financial_plans_id' => $idPlan61,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo61 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 287626768,
          'financial_plans_id' => $idPlan63,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo63 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 372262704,
          'financial_plans_id' => $idPlan64,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo64 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 68879895,
          'financial_plans_id' => $idPlan66,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo66 = DB::getPdo()->lastInsertId();
           


         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 2471669808,
          'financial_plans_id' => $idPlan68,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo68 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 33263469228,
          'financial_plans_id' => $idPlan69,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo69 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 47264540157,
          'financial_plans_id' => $idPlan70,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo70 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 2157341614,
          'financial_plans_id' => $idPlan71,
          'implementation_id' => $IdImplementation1,
          ]);
          $idRecaudo71 = DB::getPdo()->lastInsertId();
          
         DB::table('cost_sources')->insert([
          'father_id' => 2,
          'code' => '2.1.1',
          'name' => 'GASTOS DE PERSONAL',
          'description' => 'GASTOS DE PERSONAL',
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'group_id' => 5,
          ]);
          $idFuenteGasto1 = DB::getPdo()->lastInsertId();
          
           
         DB::table('cost_sources')->insert([
          'father_id' => 4,
          'code' => '2.1.2.1',
          'name' => 'Adquisiciones diferentes de activos',
          'description' => 'Adquisiciones diferentes de activos',
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'group_id' => 5,
          ]);
          $idFuenteGasto2 = DB::getPdo()->lastInsertId();
          
           
         DB::table('cost_sources')->insert([
          'father_id' => 10,
          'code' => '2.1.3.1.1.1.1',
          'name' => 'Fondo de Compensación Ambiental - TSE (20%)',
          'description' => 'Fondo de Compensación Ambiental - TSE (20%)',
          'functioning' => FALSE,
          'compensation' => TRUE,
          'debt_service' => FALSE,
          'group_id' => 5,
          ]);
          $idFuenteGasto3 = DB::getPdo()->lastInsertId();
          
           
         DB::table('cost_sources')->insert([
          'father_id' => 19,
          'code' => '2.1.3.3.2',
          'name' => 'Conciliaciones',
          'description' => 'Conciliaciones',
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'group_id' => 5,
          ]);
          $idFuenteGasto5 = DB::getPdo()->lastInsertId();
          
           
         DB::table('cost_sources')->insert([
          'father_id' => 29,
          'code' => '2.1.4.3.1',
          'name' => 'Cuota de fiscalización y auditaje',
          'description' => 'Cuota de fiscalización y auditaje',
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'group_id' => 5,
          ]);
          $idFuenteGasto6 = DB::getPdo()->lastInsertId();
          
           
         DB::table('cost_sources')->insert([
          'father_id' => 31,
          'code' => '2.1.4.4.1',
          'name' => 'Multas',
          'description' => 'Multas',
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'group_id' => 5,
          ]);
          $idFuenteGasto7 = DB::getPdo()->lastInsertId();
          
           
         DB::table('cost_sources')->insert([
          'father_id' => 2,
          'code' => '2.1.5',
          'name' => 'Aportes a Entidades',
          'description' => 'Aportes a Entidades',
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'group_id' => 5,
          ]);
          $idFuenteGasto4 = DB::getPdo()->lastInsertId();
          
           
         DB::table('financial_costs')->insert([
          'year' => 1,
          'value_bugeted' => 7609928227,
          'value_comitted' => 6963291441.99,
          'value_paid' => 0,
          'own' => TRUE,
          'nation' => FALSE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto1,
          'p_a_i_id' => $idpai1,
          'group_id' => 5,
          ]);
          $idGasto1 = DB::getPdo()->lastInsertId();
          
           


         DB::table('financial_costs')->insert([
          'year' => 1,
          'value_bugeted' => 70962335.15,
          'value_comitted' => 69213287.14,
          'value_paid' => 0,
          'own' => TRUE,
          'nation' => FALSE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto7,
          'p_a_i_id' => $idpai1,
          'group_id' => 5,
          ]);
          $idGasto2 = DB::getPdo()->lastInsertId();
          
           
         DB::table('financial_costs')->insert([
          'year' => 1,
          'value_bugeted' => 2319887486.85,
          'value_comitted' => 2198257330.35,
          'value_paid' => 0,
          'own' => TRUE,
          'nation' => FALSE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto2,
          'p_a_i_id' => $idpai1,
          'group_id' => 5,
          ]);
          $idGasto3 = DB::getPdo()->lastInsertId();
          
           


         DB::table('financial_costs')->insert([
          'year' => 1,
          'value_bugeted' => 53605000,
          'value_comitted' => 53584638.61,
          'value_paid' => 0,
          'own' => TRUE,
          'nation' => FALSE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto6,
          'p_a_i_id' => $idpai1,
          'group_id' => 5,
          ]);
          $idGasto5 = DB::getPdo()->lastInsertId();
          
           
         DB::table('financial_costs')->insert([
          'year' => 1,
          'value_bugeted' => 1237037178,
          'value_comitted' => 1061752027.66,
          'value_paid' => 0,
          'own' => TRUE,
          'nation' => FALSE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => FALSE,
          'compensation' => TRUE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto3,
          'p_a_i_id' => $idpai1,
          'group_id' => 5,
          ]);
          $idGasto6 = DB::getPdo()->lastInsertId();

         DB::table('financial_costs')->insert([
          'year' => 1,
          'value_bugeted' => 700000000,
          'value_comitted' => 36400247.9,
          'value_paid' => 0,
          'own' => TRUE,
          'nation' => FALSE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto5,
          'p_a_i_id' => $idpai1,
          'group_id' => 5,
          ]);
          $idGasto7 = DB::getPdo()->lastInsertId();
          
         DB::table('financial_costs')->insert([
          'year' => 1,
          'value_bugeted' => 1947611375,
          'value_comitted' => 1947611375,
          'value_paid' => 0,
          'own' => FALSE,
          'nation' => TRUE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto1,
          'p_a_i_id' => $idpai1,
          'group_id' => 5,
          ]);
          $idGasto8 = DB::getPdo()->lastInsertId();

         DB::table('financial_costs')->insert([
          'year' => 1,
          'value_bugeted' => 1394000,
          'value_comitted' => 1394000,
          'value_paid' => 0,
          'own' => FALSE,
          'nation' => TRUE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto7,
          'p_a_i_id' => $idpai1,
          'group_id' => 5,
          ]);
          $idGasto9 = DB::getPdo()->lastInsertId();
          
           
         DB::table('financial_costs')->insert([
          'year' => 1,
          'value_bugeted' => 50228540,
          'value_comitted' => 50228540,
          'value_paid' => 0,
          'own' => FALSE,
          'nation' => TRUE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto2,
          'p_a_i_id' => $idpai1,
          'group_id' => 5,
          ]);
          $idGasto10 = DB::getPdo()->lastInsertId();

         DB::table('financial_costs')->insert([
          'year' => 1,
          'value_bugeted' => 15865000,
          'value_comitted' => 15865000,
          'value_paid' => 0,
          'own' => FALSE,
          'nation' => TRUE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto6,
          'p_a_i_id' => $idpai1,
          'group_id' => 5,
          ]);
          $idGasto12 = DB::getPdo()->lastInsertId();
          
         DB::table('financial_costs')->insert([
          'year' => 2,
          'value_bugeted' => 8182642555,
          'value_comitted' => 7571487703.4,
          'value_paid' => 0,
          'own' => TRUE,
          'nation' => FALSE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto1,
          'p_a_i_id' => $idpai1,
          'group_id' => 5,
          ]);
          $idGasto13 = DB::getPdo()->lastInsertId();

         DB::table('financial_costs')->insert([
          'year' => 2,
          'value_bugeted' => 79447946.5,
          'value_comitted' => 68402541.07,
          'value_paid' => 0,
          'own' => TRUE,
          'nation' => FALSE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto7,
          'p_a_i_id' => $idpai1,
          'group_id' => 5,
          ]);
          $idGasto14 = DB::getPdo()->lastInsertId();
          
           
         DB::table('financial_costs')->insert([
          'year' => 2,
          'value_bugeted' => 3252545305.5,
          'value_comitted' => 2414093685.65,
          'value_paid' => 0,
          'own' => TRUE,
          'nation' => FALSE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto2,
          'p_a_i_id' => $idpai1,
          'group_id' => 5,
          ]);
          $idGasto15 = DB::getPdo()->lastInsertId();

         DB::table('financial_costs')->insert([
          'year' => 2,
          'value_bugeted' => 61025618,
          'value_comitted' => 60781828.68,
          'value_paid' => 0,
          'own' => TRUE,
          'nation' => FALSE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto6,
          'p_a_i_id' => $idpai1,
          'group_id' => 5,
          ]);
          $idGasto17 = DB::getPdo()->lastInsertId();
          
           
         DB::table('financial_costs')->insert([
          'year' => 2,
          'value_bugeted' => 1126813999,
          'value_comitted' => 822675232.49,
          'value_paid' => 0,
          'own' => TRUE,
          'nation' => FALSE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => FALSE,
          'compensation' => TRUE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto3,
          'p_a_i_id' => $idpai1,
          'group_id' => 5,
          ]);
          $idGasto18 = DB::getPdo()->lastInsertId();

         DB::table('financial_costs')->insert([
          'year' => 2,
          'value_bugeted' => 100000000,
          'value_comitted' => 0,
          'value_paid' => 0,
          'own' => TRUE,
          'nation' => FALSE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto5,
          'p_a_i_id' => $idpai1,
          'group_id' => 5,
          ]);
          $idGasto20 = DB::getPdo()->lastInsertId();
          
         DB::table('financial_costs')->insert([
          'year' => 2,
          'value_bugeted' => 1990034000,
          'value_comitted' => 1987598857.17,
          'value_paid' => 0,
          'own' => FALSE,
          'nation' => TRUE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto1,
          'p_a_i_id' => $idpai1,
          'group_id' => 5,
          ]);
          $idGasto21 = DB::getPdo()->lastInsertId();

         DB::table('financial_costs')->insert([
          'year' => 2,
          'value_bugeted' => 1394000,
          'value_comitted' => 1394000,
          'value_paid' => 0,
          'own' => FALSE,
          'nation' => TRUE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto7,
          'p_a_i_id' => $idpai1,
          'group_id' => 5,
          ]);
          $idGasto22 = DB::getPdo()->lastInsertId();
          
           
         DB::table('financial_costs')->insert([
          'year' => 2,
          'value_bugeted' => 47718000,
          'value_comitted' => 47718000,
          'value_paid' => 0,
          'own' => FALSE,
          'nation' => TRUE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto2,
          'p_a_i_id' => $idpai1,
          'group_id' => 5,
          ]);
          $idGasto23 = DB::getPdo()->lastInsertId();

         DB::table('financial_costs')->insert([
          'year' => 2,
          'value_bugeted' => 15865000,
          'value_comitted' => 15865000,
          'value_paid' => 0,
          'own' => FALSE,
          'nation' => TRUE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto6,
          'p_a_i_id' => $idpai1,
          'group_id' => 5,
          ]);
          $idGasto25 = DB::getPdo()->lastInsertId();
          
           
         DB::table('financial_costs')->insert([
          'year' => 3,
          'value_bugeted' => 9157688901,
          'value_comitted' => 8166420095.49,
          'value_paid' => 7869508358.47,
          'own' => TRUE,
          'nation' => FALSE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto1,
          'p_a_i_id' => $idpai1,
          'group_id' => 5,
          ]);
          $idGasto26 = DB::getPdo()->lastInsertId();

         DB::table('financial_costs')->insert([
          'year' => 3,
          'value_bugeted' => 82425864.36,
          'value_comitted' => 70155870.45,
          'value_paid' => 70155870.45,
          'own' => TRUE,
          'nation' => FALSE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto7,
          'p_a_i_id' => $idpai1,
          'group_id' => 5,
          ]);
          $idGasto27 = DB::getPdo()->lastInsertId();
          
           
         DB::table('financial_costs')->insert([
          'year' => 3,
          'value_bugeted' => 3226982705.42,
          'value_comitted' => 2462412071.34,
          'value_paid' => 2122894075.84,
          'own' => TRUE,
          'nation' => FALSE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto2,
          'p_a_i_id' => $idpai1,
          'group_id' => 5,
          ]);
          $idGasto28 = DB::getPdo()->lastInsertId();

         DB::table('financial_costs')->insert([
          'year' => 3,
          'value_bugeted' => 81597411.26,
          'value_comitted' => 81560189.99,
          'value_paid' => 81560189.99,
          'own' => TRUE,
          'nation' => FALSE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto6,
          'p_a_i_id' => $idpai1,
          'group_id' => 5,
          ]);
          $idGasto30 = DB::getPdo()->lastInsertId();
          
           
         DB::table('financial_costs')->insert([
          'year' => 3,
          'value_bugeted' => 1151776000,
          'value_comitted' => 941387984.64,
          'value_paid' => 941387984.64,
          'own' => TRUE,
          'nation' => FALSE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => FALSE,
          'compensation' => TRUE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto3,
          'p_a_i_id' => $idpai1,
          'group_id' => 5,
          ]);
          $idGasto31 = DB::getPdo()->lastInsertId();

         DB::table('financial_costs')->insert([
          'year' => 3,
          'value_bugeted' => 12200000,
          'value_comitted' => 12134791.77,
          'value_paid' => 12134791.77,
          'own' => TRUE,
          'nation' => FALSE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto5,
          'p_a_i_id' => $idpai1,
          'group_id' => 5,
          ]);
          $idGasto32 = DB::getPdo()->lastInsertId();
          
           
         DB::table('financial_costs')->insert([
          'year' => 3,
          'value_bugeted' => 34744000,
          'value_comitted' => 34742967.19,
          'value_paid' => 34742967.19,
          'own' => TRUE,
          'nation' => FALSE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto4,
          'p_a_i_id' => $idpai1,
          'group_id' => 5,
          ]);
          $idGasto33 = DB::getPdo()->lastInsertId();
          
         DB::table('financial_costs')->insert([
          'year' => 3,
          'value_bugeted' => 2161497000,
          'value_comitted' => 2161497000,
          'value_paid' => 2161497000,
          'own' => FALSE,
          'nation' => TRUE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto1,
          'p_a_i_id' => $idpai1,
          'group_id' => 5,
          ]);
          $idGasto34 = DB::getPdo()->lastInsertId();

         DB::table('financial_costs')->insert([
          'year' => 3,
          'value_bugeted' => 1436000,
          'value_comitted' => 1436000,
          'value_paid' => 1436000,
          'own' => FALSE,
          'nation' => TRUE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto7,
          'p_a_i_id' => $idpai1,
          'group_id' => 5,
          ]);
          $idGasto35 = DB::getPdo()->lastInsertId();
          
           
         DB::table('financial_costs')->insert([
          'year' => 3,
          'value_bugeted' => 47718000,
          'value_comitted' => 47718000,
          'value_paid' => 47718000,
          'own' => FALSE,
          'nation' => TRUE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto2,
          'p_a_i_id' => $idpai1,
          'group_id' => 5,
          ]);
          $idGasto36 = DB::getPdo()->lastInsertId();

         DB::table('financial_costs')->insert([
          'year' => 3,
          'value_bugeted' => 16341000,
          'value_comitted' => 16341000,
          'value_paid' => 16341000,
          'own' => FALSE,
          'nation' => TRUE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto6,
          'p_a_i_id' => $idpai1,
          'group_id' => 5,
          ]);
          $idGasto37 = DB::getPdo()->lastInsertId();
          
           
            DB::table('financial_costs')->insert([
          'year' => 4,
          'value_bugeted' => 11594363188,
          'value_comitted' => 10498779898,
          'value_paid' => 10225646822,
          'own' => TRUE,
          'nation' => FALSE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto1,
          'p_a_i_id' => $idpai1,
          'group_id' => 5,
          ]);
          $idGasto38 = DB::getPdo()->lastInsertId();

         DB::table('financial_costs')->insert([
          'year' => 4,
          'value_bugeted' => 88500000,
          'value_comitted' => 72913491,
          'value_paid' => 72913491,
          'own' => TRUE,
          'nation' => FALSE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto7,
          'p_a_i_id' => $idpai1,
          'group_id' => 5,
          ]);
          $idGasto39 = DB::getPdo()->lastInsertId();
          
           
         DB::table('financial_costs')->insert([
          'year' => 4,
          'value_bugeted' => 4911602436,
          'value_comitted' => 3517084082,
          'value_paid' => 2719884626,
          'own' => TRUE,
          'nation' => FALSE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto2,
          'p_a_i_id' => $idpai1,
          'group_id' => 5,
          ]);
          $idGasto40 = DB::getPdo()->lastInsertId();

         DB::table('financial_costs')->insert([
          'year' => 4,
          'value_bugeted' => 83497411,
          'value_comitted' => 76906902,
          'value_paid' => 76906902,
          'own' => TRUE,
          'nation' => FALSE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto6,
          'p_a_i_id' => $idpai1,
          'group_id' => 5,
          ]);
          $idGasto41 = DB::getPdo()->lastInsertId();
          
           
         DB::table('financial_costs')->insert([
          'year' => 4,
          'value_bugeted' => 1420000000,
          'value_comitted' => 1354992316,
          'value_paid' => 1273719806,
          'own' => TRUE,
          'nation' => FALSE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => FALSE,
          'compensation' => TRUE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto3,
          'p_a_i_id' => $idpai1,
          'group_id' => 5,
          ]);
          $idGasto42 = DB::getPdo()->lastInsertId();

         DB::table('financial_costs')->insert([
          'year' => 4,
          'value_bugeted' => 10000000,
          'value_comitted' => 0,
          'value_paid' => 0,
          'own' => TRUE,
          'nation' => FALSE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto5,
          'p_a_i_id' => $idpai1,
          'group_id' => 5,
          ]);
          $idGasto43 = DB::getPdo()->lastInsertId();
          
           
         DB::table('financial_costs')->insert([
          'year' => 4,
          'value_bugeted' => 36165000,
          'value_comitted' => 36163955,
          'value_paid' => 36163954,
          'own' => TRUE,
          'nation' => FALSE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto4,
          'p_a_i_id' => $idpai1,
          'group_id' => 5,
          ]);
          $idGasto44 = DB::getPdo()->lastInsertId();
          
           DB::table('financial_costs')->insert([
          'year' => 4,
          'value_bugeted' => 2257200000,
          'value_comitted' => 2242131395,
          'value_paid' => 2242131395,
          'own' => FALSE,
          'nation' => TRUE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto1,
          'p_a_i_id' => $idpai1,
          'group_id' => 5,
          ]);
          $idGasto45 = DB::getPdo()->lastInsertId();

         DB::table('financial_costs')->insert([
          'year' => 4,
          'value_bugeted' => 1500000,
          'value_comitted' => 1500000,
          'value_paid' => 1500000,
          'own' => FALSE,
          'nation' => TRUE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto7,
          'p_a_i_id' => $idpai1,
          'group_id' => 5,
          ]);
          $idGasto46 = DB::getPdo()->lastInsertId();
          
           
         DB::table('financial_costs')->insert([
          'year' => 4,
          'value_bugeted' => 47700000,
          'value_comitted' => 0,
          'value_paid' => 0,
          'own' => FALSE,
          'nation' => TRUE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto2,
          'p_a_i_id' => $idpai1,
          'group_id' => 5,
          ]);
          $idGasto47 = DB::getPdo()->lastInsertId();

         DB::table('financial_costs')->insert([
          'year' => 4,
          'value_bugeted' => 16800000,
          'value_comitted' => 16800000,
          'value_paid' => 16800000,
          'own' => FALSE,
          'nation' => TRUE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto6,
          'p_a_i_id' => $idpai1,
          'group_id' => 5,
          ]);
          $idGasto48 = DB::getPdo()->lastInsertId();
           
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity10,
                      'source_id' =>$idPlan1,
                      'value' => 29212784181.94,
                      'goal' => 0,
                      'evidence_balance' => 0,
                      'age' => 1,
                      ]);
                      $idactivitySource1 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity15,
                      'source_id' =>$idPlan1,
                      'value' => 1878000000,
                      'goal' => 0,
                      'evidence_balance' => 0,
                      'age' => 1,
                      ]);
                      $idactivitySource2 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity20,
                      'source_id' =>$idPlan1,
                      'value' => 129455921.21,
                      'goal' => 0,
                      'evidence_balance' => 0,
                      'age' => 1,
                      ]);
                      $idactivitySource3 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity28,
                      'source_id' =>$idPlan1,
                      'value' => 313893735.68,
                      'goal' => 0,
                      'evidence_balance' => 0,
                      'age' => 1,
                      ]);
                      $idactivitySource4 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity44,
                      'source_id' =>$idPlan1,
                      'value' => 1967952551.98,
                      'goal' => 0,
                      'evidence_balance' => 0,
                      'age' => 1,
                      ]);
                      $idactivitySource5 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity56,
                      'source_id' =>$idPlan1,
                      'value' => 873335882.79,
                      'goal' => 0,
                      'evidence_balance' => 0,
                      'age' => 1,
                      ]);
                      $idactivitySource6 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity65,
                      'source_id' =>$idPlan1,
                      'value' => 499074059.86,
                      'goal' => 0,
                      'evidence_balance' => 0,
                      'age' => 1,
                      ]);
                      $idactivitySource7 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity79,
                      'source_id' =>$idPlan1,
                      'value' => 494452950.11,
                      'goal' => 0,
                      'evidence_balance' => 0,
                      'age' => 1,
                      ]);
                      $idactivitySource8 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity100,
                      'source_id' =>$idPlan1,
                      'value' => 892731684.01,
                      'goal' => 0,
                      'evidence_balance' => 0,
                      'age' => 1,
                      ]);
                      $idactivitySource9 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity110,
                      'source_id' =>$idPlan1,
                      'value' => 573628926.87,
                      'goal' => 0,
                      'evidence_balance' => 0,
                      'age' => 1,
                      ]);
                      $idactivitySource10 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity114,
                      'source_id' =>$idPlan1,
                      'value' => 29336646.07,
                      'goal' => 0,
                      'evidence_balance' => 0,
                      'age' => 1,
                      ]);
                      $idactivitySource11 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity144,
                      'source_id' =>$idPlan1,
                      'value' => 1618205495,
                      'goal' => 0,
                      'evidence_balance' => 0,
                      'age' => 1,
                      ]);
                      $idactivitySource12 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity158,
                      'source_id' =>$idPlan1,
                      'value' => 515270816.42,
                      'goal' => 0,
                      'evidence_balance' => 0,
                      'age' => 1,
                      ]);
                      $idactivitySource13 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity169,
                      'source_id' =>$idPlan1,
                      'value' => 1877148.05999756,
                      'goal' => 0,
                      'evidence_balance' => 0,
                      'age' => 1,
                      ]);
                      $idactivitySource14 = DB::getPdo()->lastInsertId();
                      
                      
                      
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity169,
                        'source_id' =>$idPlan3,
                        'value' => 650000000,
                        'goal' => 0,
                        'evidence_balance' => 0,
                        'age' => 1,
                        ]);
                        $idactivitySource15 = DB::getPdo()->lastInsertId();
                        
                        
                        
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity169,
                          'source_id' =>$idPlan2,
                          'value' => 241928862,
                          'goal' => 0,
                          'evidence_balance' => 0,
                          'age' => 1,
                          ]);
                          $idactivitySource16 = DB::getPdo()->lastInsertId();
                          
                          
                          
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia7,
                            'activity_source_id' =>$idactivitySource1,
                            'value' => 29212481145.15,
                            ]);
                            $idevidenceFinancial1 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia11,
                            'activity_source_id' =>$idactivitySource2,
                            'value' => 1876216931.88,
                            ]);
                            $idevidenceFinancial2 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia14,
                            'activity_source_id' =>$idactivitySource3,
                            'value' => 129455559.2,
                            ]);
                            $idevidenceFinancial3 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia18,
                            'activity_source_id' =>$idactivitySource4,
                            'value' => 313892447.52,
                            ]);
                            $idevidenceFinancial4 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia25,
                            'activity_source_id' =>$idactivitySource5,
                            'value' => 1967584199.01,
                            ]);
                            $idevidenceFinancial5 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia600,
                            'activity_source_id' =>$idactivitySource6,
                            'value' => 873332893.9,
                            ]);
                            $idevidenceFinancial6 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia39,
                            'activity_source_id' =>$idactivitySource7,
                            'value' => 499072121.13,
                            ]);
                            $idevidenceFinancial7 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia47,
                            'activity_source_id' =>$idactivitySource8,
                            'value' => 494032059.22,
                            ]);
                            $idevidenceFinancial8 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia55,
                            'activity_source_id' =>$idactivitySource9,
                            'value' => 892365775.12,
                            ]);
                            $idevidenceFinancial9 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia61,
                            'activity_source_id' =>$idactivitySource10,
                            'value' => 570049696.59,
                            ]);
                            $idevidenceFinancial10 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia65,
                            'activity_source_id' =>$idactivitySource11,
                            'value' => 29336646.06,
                            ]);
                            $idevidenceFinancial11 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia89,
                            'activity_source_id' =>$idactivitySource12,
                            'value' => 1612794165.73,
                            ]);
                            $idevidenceFinancial12 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia102,
                            'activity_source_id' =>$idactivitySource13,
                            'value' => 515264571.9,
                            ]);
                            $idevidenceFinancial13 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia112,
                            'activity_source_id' =>$idactivitySource14,
                            'value' => 1877148.05999756,
                            ]);
                            $idevidenceFinancial14 = DB::getPdo()->lastInsertId();
                            
                            
                                                                
                                  
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity20,
                              'source_id' =>$idPlan19,
                              'value' => 400000000,
                              'goal' => 0,
                              'evidence_balance' => 0,
                              'age' => 2,
                              ]);
                              $idactivitySource19 = DB::getPdo()->lastInsertId(); 
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia112,
                              'activity_source_id' =>$idactivitySource15,
                              'value' => 650000000,
                              ]);
                              $idevidenceFinancial15 = DB::getPdo()->lastInsertId();
                              
                              
                              
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia16,
                                'activity_source_id' =>$idactivitySource19,
                                'value' => 240616038.670002,
                                ]);
                                $idevidenceFinancial16 = DB::getPdo()->lastInsertId();
                                
                                
                                
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity10,
                                  'source_id' =>$idPlan19,
                                  'value' => 25311419576,
                                  'goal' => 0,
                                  'evidence_balance' => 0,
                                  'age' => 2,
                                  ]);
                                  $idactivitySource17 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity15,
                                  'source_id' =>$idPlan19,
                                  'value' => 1884000000,
                                  'goal' => 0,
                                  'evidence_balance' => 0,
                                  'age' => 2,
                                  ]);
                                  $idactivitySource18 = DB::getPdo()->lastInsertId();
                                  

                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity28,
                                  'source_id' =>$idPlan19,
                                  'value' => 450000000,
                                  'goal' => 0,
                                  'evidence_balance' => 0,
                                  'age' => 2,
                                  ]);
                                  $idactivitySource20 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity44,
                                  'source_id' =>$idPlan19,
                                  'value' => 2300000000,
                                  'goal' => 0,
                                  'evidence_balance' => 0,
                                  'age' => 2,
                                  ]);
                                  $idactivitySource21 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity56,
                                  'source_id' =>$idPlan19,
                                  'value' => 1200000000,
                                  'goal' => 0,
                                  'evidence_balance' => 0,
                                  'age' => 2,
                                  ]);
                                  $idactivitySource22 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity65,
                                  'source_id' =>$idPlan19,
                                  'value' => 650000000,
                                  'goal' => 0,
                                  'evidence_balance' => 0,
                                  'age' => 2,
                                  ]);
                                  $idactivitySource23 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity79,
                                  'source_id' =>$idPlan19,
                                  'value' => 650000000,
                                  'goal' => 0,
                                  'evidence_balance' => 0,
                                  'age' => 2,
                                  ]);
                                  $idactivitySource24 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity100,
                                  'source_id' =>$idPlan19,
                                  'value' => 1300000000,
                                  'goal' => 0,
                                  'evidence_balance' => 0,
                                  'age' => 2,
                                  ]);
                                  $idactivitySource25 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity110,
                                  'source_id' =>$idPlan19,
                                  'value' => 700000000,
                                  'goal' => 0,
                                  'evidence_balance' => 0,
                                  'age' => 2,
                                  ]);
                                  $idactivitySource26 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity114,
                                  'source_id' =>$idPlan19,
                                  'value' => 50000000,
                                  'goal' => 0,
                                  'evidence_balance' => 0,
                                  'age' => 2,
                                  ]);
                                  $idactivitySource27 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity144,
                                  'source_id' =>$idPlan19,
                                  'value' => 1650000000,
                                  'goal' => 0,
                                  'evidence_balance' => 0,
                                  'age' => 2,
                                  ]);
                                  $idactivitySource28 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity158,
                                  'source_id' =>$idPlan19,
                                  'value' => 600000000,
                                  'goal' => 0,
                                  'evidence_balance' => 0,
                                  'age' => 2,
                                  ]);
                                  $idactivitySource29 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity169,
                                  'source_id' =>$idPlan19,
                                  'value' => 333580424,
                                  'goal' => 0,
                                  'evidence_balance' => 0,
                                  'age' => 2,
                                  ]);
                                  $idactivitySource30 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity169,
                                    'source_id' =>$idPlan21,
                                    'value' => 566419576,
                                    'goal' => 0,
                                    'evidence_balance' => 0,
                                    'age' => 2,
                                    ]);
                                    $idactivitySource31 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia118,
                                      'activity_source_id' =>$idactivitySource17,
                                      'value' => 19993302258.44,
                                      ]);
                                      $idevidenceFinancial17 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia121,
                                      'activity_source_id' =>$idactivitySource18,
                                      'value' => 1853000067.76,
                                      ]);
                                      $idevidenceFinancial18 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia123,
                                      'activity_source_id' =>$idactivitySource19,
                                      'value' => 141861023.36,
                                      ]);
                                      $idevidenceFinancial19 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia127,
                                      'activity_source_id' =>$idactivitySource20,
                                      'value' => 45189960,
                                      ]);
                                      $idevidenceFinancial20 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia137,
                                      'activity_source_id' =>$idactivitySource21,
                                      'value' => 1387331900.73,
                                      ]);
                                      $idevidenceFinancial21 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia146,
                                      'activity_source_id' =>$idactivitySource22,
                                      'value' => 1199258263.36,
                                      ]);
                                      $idevidenceFinancial22 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia154,
                                      'activity_source_id' =>$idactivitySource23,
                                      'value' => 364779546.97,
                                      ]);
                                      $idevidenceFinancial23 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia162,
                                      'activity_source_id' =>$idactivitySource24,
                                      'value' => 558958669.97,
                                      ]);
                                      $idevidenceFinancial24 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia174,
                                      'activity_source_id' =>$idactivitySource25,
                                      'value' => 1257630976.97,
                                      ]);
                                      $idevidenceFinancial25 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia181,
                                      'activity_source_id' =>$idactivitySource26,
                                      'value' => 575070034.65,
                                      ]);
                                      $idevidenceFinancial26 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia185,
                                      'activity_source_id' =>$idactivitySource27,
                                      'value' => 34130824.38,
                                      ]);
                                      $idevidenceFinancial27 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia204,
                                      'activity_source_id' =>$idactivitySource28,
                                      'value' => 1231074961.97,
                                      ]);
                                      $idevidenceFinancial28 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia218,
                                      'activity_source_id' =>$idactivitySource29,
                                      'value' => 598093516.68,
                                      ]);
                                      $idevidenceFinancial29 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia229,
                                      'activity_source_id' =>$idactivitySource30,
                                      'value' => 333580424,
                                      ]);
                                      $idevidenceFinancial30 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia229,
                                        'activity_source_id' =>$idactivitySource31,
                                        'value' => 465131914.83,
                                        ]);
                                        $idevidenceFinancial31 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity10,
                                          'source_id' =>$idPlan37,
                                          'value' => 26197534328.94,
                                          'goal' => 0,
                                          'evidence_balance' => 0,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource32 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity20,
                                          'source_id' =>$idPlan37,
                                          'value' => 400000000,
                                          'goal' => 0,
                                          'evidence_balance' => 0,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource34 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity28,
                                          'source_id' =>$idPlan37,
                                          'value' => 500000000,
                                          'goal' => 0,
                                          'evidence_balance' => 0,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource35 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity44,
                                          'source_id' =>$idPlan37,
                                          'value' => 2100000000,
                                          'goal' => 0,
                                          'evidence_balance' => 0,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource36 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity56,
                                          'source_id' =>$idPlan37,
                                          'value' => 1300000000,
                                          'goal' => 0,
                                          'evidence_balance' => 0,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource37 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity65,
                                          'source_id' =>$idPlan37,
                                          'value' => 700000000,
                                          'goal' => 0,
                                          'evidence_balance' => 0,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource38 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity79,
                                          'source_id' =>$idPlan37,
                                          'value' => 700000000,
                                          'goal' => 0,
                                          'evidence_balance' => 0,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource39 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity100,
                                          'source_id' =>$idPlan37,
                                          'value' => 1500000000,
                                          'goal' => 0,
                                          'evidence_balance' => 0,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource40 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity110,
                                          'source_id' =>$idPlan37,
                                          'value' => 700000000,
                                          'goal' => 0,
                                          'evidence_balance' => 0,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource41 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity144,
                                          'source_id' =>$idPlan37,
                                          'value' => 1408448739.06,
                                          'goal' => 0,
                                          'evidence_balance' => 0,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource43 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity158,
                                          'source_id' =>$idPlan39,
                                          'value' => 700000000,
                                          'goal' => 0,
                                          'evidence_balance' => 0,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource44 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity169,
                                          'source_id' =>$idPlan39,
                                          'value' => 408448739.059998,
                                          'goal' => 0,
                                          'evidence_balance' => 0,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource45 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                          DB::table('activity_sources')->insert([
                                            'activity_id' => $idactivity144,
                                            'source_id' =>$idPlan39,
                                            'value' => 91551260.9400024,
                                            'goal' => 0,
                                            'evidence_balance' => 0,
                                            'age' => 3,
                                            ]);
                                            $idactivitySource46 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('activity_sources')->insert([
                                            'activity_id' => $idactivity169,
                                            'source_id' =>$idPlan38,
                                            'value' => 541551500,
                                            'goal' => 0,
                                            'evidence_balance' => 0,
                                            'age' => 3,
                                            ]);
                                            $idactivitySource47 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia234,
                                              'activity_source_id' =>$idactivitySource32,
                                              'value' => 1670346438.1,
                                              ]);
                                              $idevidenceFinancial32 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia239,
                                              'activity_source_id' =>$idactivitySource34,
                                              'value' => 180784737.92,
                                              ]);
                                              $idevidenceFinancial34 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia246,
                                              'activity_source_id' =>$idactivitySource35,
                                              'value' => 306709791.34,
                                              ]);
                                              $idevidenceFinancial35 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia255,
                                              'activity_source_id' =>$idactivitySource36,
                                              'value' => 25100000,
                                              ]);
                                              $idevidenceFinancial36 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia264,
                                              'activity_source_id' =>$idactivitySource37,
                                              'value' => 591008137.09,
                                              ]);
                                              $idevidenceFinancial37 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia272,
                                              'activity_source_id' =>$idactivitySource38,
                                              'value' => 84499978.3,
                                              ]);
                                              $idevidenceFinancial38 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia283,
                                              'activity_source_id' =>$idactivitySource39,
                                              'value' => 408178178.86,
                                              ]);
                                              $idevidenceFinancial39 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia296,
                                              'activity_source_id' =>$idactivitySource40,
                                              'value' => 649584687.8,
                                              ]);
                                              $idevidenceFinancial40 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia302,
                                              'activity_source_id' =>$idactivitySource41,
                                              'value' => 540423176.34,
                                              ]);
                                              $idevidenceFinancial41 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia327,
                                              'activity_source_id' =>$idactivitySource43,
                                              'value' => 1408448739.06,
                                              ]);
                                              $idevidenceFinancial43 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia341,
                                              'activity_source_id' =>$idactivitySource44,
                                              'value' => 659066596.31,
                                              ]);
                                              $idevidenceFinancial44 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia352,
                                              'activity_source_id' =>$idactivitySource45,
                                              'value' => 408448739.059998,
                                              ]);
                                              $idevidenceFinancial45 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                              DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia327,
                                                'activity_source_id' =>$idactivitySource46,
                                                'value' => 70844303.6700025,
                                                ]);
                                                $idevidenceFinancial46 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                
                                              DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia352,
                                                'activity_source_id' =>$idactivitySource47,
                                                'value' => 540105090.590002,
                                                ]);
                                                $idevidenceFinancial47 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity10,
                                                  'source_id' =>$idPlan55,
                                                  'value' => 40752000000,
                                                  'goal' => 0,
                                                  'evidence_balance' => 0,
                                                  'age' => 4,
                                                  ]);
                                                  $idactivitySource48 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity15,
                                                  'source_id' =>$idPlan70,
                                                  'value' => 5400000000,
                                                  'goal' => 0,
                                                  'evidence_balance' => 0,
                                                  'age' => 4,
                                                  ]);
                                                  $idactivitySource49 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity28,
                                                  'source_id' =>$idPlan70,
                                                  'value' => 900000000,
                                                  'goal' => 0,
                                                  'evidence_balance' => 0,
                                                  'age' => 4,
                                                  ]);
                                                  $idactivitySource50 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity44,
                                                  'source_id' =>$idPlan70,
                                                  'value' => 8190000000,
                                                  'goal' => 0,
                                                  'evidence_balance' => 0,
                                                  'age' => 4,
                                                  ]);
                                                  $idactivitySource51 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity56,
                                                  'source_id' =>$idPlan70,
                                                  'value' => 1400000000,
                                                  'goal' => 0,
                                                  'evidence_balance' => 0,
                                                  'age' => 4,
                                                  ]);
                                                  $idactivitySource52 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity65,
                                                  'source_id' =>$idPlan70,
                                                  'value' => 1605000000,
                                                  'goal' => 0,
                                                  'evidence_balance' => 0,
                                                  'age' => 4,
                                                  ]);
                                                  $idactivitySource53 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity79,
                                                  'source_id' =>$idPlan70,
                                                  'value' => 900000000,
                                                  'goal' => 0,
                                                  'evidence_balance' => 0,
                                                  'age' => 4,
                                                  ]);
                                                  $idactivitySource54 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity100,
                                                  'source_id' =>$idPlan70,
                                                  'value' => 7150000000,
                                                  'goal' => 0,
                                                  'evidence_balance' => 0,
                                                  'age' => 4,
                                                  ]);
                                                  $idactivitySource55 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity110,
                                                  'source_id' =>$idPlan70,
                                                  'value' => 700000000,
                                                  'goal' => 0,
                                                  'evidence_balance' => 0,
                                                  'age' => 4,
                                                  ]);
                                                  $idactivitySource56 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity144,
                                                  'source_id' =>$idPlan70,
                                                  'value' => 4685000000,
                                                  'goal' => 0,
                                                  'evidence_balance' => 0,
                                                  'age' => 4,
                                                  ]);
                                                  $idactivitySource58 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity158,
                                                  'source_id' =>$idPlan70,
                                                  'value' => 589794433.179993,
                                                  'goal' => 0,
                                                  'evidence_balance' => 0,
                                                  'age' => 4,
                                                  ]);
                                                  $idactivitySource59 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity169,
                                                  'source_id' =>$idPlan57,
                                                  'value' => 644794433.179993,
                                                  'goal' => 0,
                                                  'evidence_balance' => 0,
                                                  'age' => 4,
                                                  ]);
                                                  $idactivitySource60 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity10,
                                                    'source_id' =>$idPlan70,
                                                    'value' => 6764437945,
                                                    'goal' => 0,
                                                    'evidence_balance' => 0,
                                                    'age' => 4,
                                                    ]);
                                                    $idactivitySource61 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity158,
                                                    'source_id' =>$idPlan57,
                                                    'value' => 610205566.820007,
                                                    'goal' => 0,
                                                    'evidence_balance' => 0,
                                                    'age' => 4,
                                                    ]);
                                                    $idactivitySource62 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity169,
                                                    'source_id' =>$idPlan56,
                                                    'value' => 1200000000,
                                                    'goal' => 0,
                                                    'evidence_balance' => 0,
                                                    'age' => 4,
                                                    ]);
                                                    $idactivitySource63 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                    DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity169,
                                                      'source_id' =>$idPlan68,
                                                      'value' => 115205566.820007,
                                                      'goal' => 0,
                                                      'evidence_balance' => 0,
                                                      'age' => 4,
                                                      ]);
                                                      $idactivitySource64 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia360,
                                                        'activity_source_id' =>$idactivitySource48,
                                                        'value' => 40752000000,
                                                        ]);
                                                        $idevidenceFinancial48 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia364,
                                                        'activity_source_id' =>$idactivitySource49,
                                                        'value' => 1679816168.7,
                                                        ]);
                                                        $idevidenceFinancial49 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia372,
                                                        'activity_source_id' =>$idactivitySource50,
                                                        'value' => 802709546,
                                                        ]);
                                                        $idevidenceFinancial50 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia383,
                                                        'activity_source_id' =>$idactivitySource51,
                                                        'value' => 7894869349.91,
                                                        ]);
                                                        $idevidenceFinancial51 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia391,
                                                        'activity_source_id' =>$idactivitySource52,
                                                        'value' => 1068299153.9,
                                                        ]);
                                                        $idevidenceFinancial52 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia400,
                                                        'activity_source_id' =>$idactivitySource53,
                                                        'value' => 1600289433.09,
                                                        ]);
                                                        $idevidenceFinancial53 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia410,
                                                        'activity_source_id' =>$idactivitySource54,
                                                        'value' => 640429841.3,
                                                        ]);
                                                        $idevidenceFinancial54 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia424,
                                                        'activity_source_id' =>$idactivitySource55,
                                                        'value' => 6907233888.09,
                                                        ]);
                                                        $idevidenceFinancial55 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia431,
                                                        'activity_source_id' =>$idactivitySource56,
                                                        'value' => 619668882.32,
                                                        ]);
                                                        $idevidenceFinancial56 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia457,
                                                        'activity_source_id' =>$idactivitySource58,
                                                        'value' => 4658302496.66,
                                                        ]);
                                                        $idevidenceFinancial58 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia471,
                                                        'activity_source_id' =>$idactivitySource59,
                                                        'value' => 589794433.179993,
                                                        ]);
                                                        $idevidenceFinancial59 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia482,
                                                        'activity_source_id' =>$idactivitySource60,
                                                        'value' => 644794433.179993,
                                                        ]);
                                                        $idevidenceFinancial60 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                        DB::table('evidence_financial')->insert([
                                                          'evidence_id' => $idevidencia360,
                                                          'activity_source_id' =>$idactivitySource61,
                                                          'value' => 6568212903.23,
                                                          ]);
                                                          $idevidenceFinancial61 = DB::getPdo()->lastInsertId();
                                                          
                                                          
                                                          
                                                        DB::table('evidence_financial')->insert([
                                                          'evidence_id' => $idevidencia471,
                                                          'activity_source_id' =>$idactivitySource62,
                                                          'value' => 597056738.520007,
                                                          ]);
                                                          $idevidenceFinancial62 = DB::getPdo()->lastInsertId();
                                                          
                                                          
                                                          
                                                        DB::table('evidence_financial')->insert([
                                                          'evidence_id' => $idevidencia482,
                                                          'activity_source_id' =>$idactivitySource63,
                                                          'value' => 1200000000,
                                                          ]);
                                                          $idevidenceFinancial63 = DB::getPdo()->lastInsertId();
                                                          
                                                          
                                                          
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia64,
                                                            'activity_source_id' =>$idactivitySource64,
                                                            'value' => 38753750.8200073,
                                                            ]);
                                                            $idevidenceFinancial64 = DB::getPdo()->lastInsertId();
           
  }
}
