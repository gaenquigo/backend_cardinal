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
 * Class HistoricPAI_CORPOGUAJIRA_Seeder
 */
class HistoricPAI_CORPOGUAJIRA_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $pai=PAI::create([
        'name' => 'Plan de Acción Institucional 2016-2019 “PROSPERIDAD, PAZ Y SOSTENIBILIDADz”',
        'start_date' => '2016-01-01',
        'end_date' => '2019-12-31',
        'director_name' => 'LUIS MANUEL MEDINA TORO',
        'group_id' => 21,
        'approved' => 1,
        ]);
        $idpai1 = DB::getPdo()->lastInsertId();
        
        DB::table('strategic_lines')->insert([
          'name' => 'Gestión integral de los recursos naturales y el ambiente para el desarrollo sostenible de La Guajira',
          'weighing' => 20,
          'p_a_i_id' => $idpai1,
          ]);
          $idline1 = DB::getPdo()->lastInsertId();
          
          
        DB::table('strategic_lines')->insert([
          'name' => 'Recuperar y Mantener los Ecosistemas Estratégicos',
          'weighing' => 20,
          'p_a_i_id' => $idpai1,
          ]);
          $idline2 = DB::getPdo()->lastInsertId();
          
          
        DB::table('strategic_lines')->insert([
          'name' => 'Planificación Ambiental para la Orientación de la Sociedad hacia la Eficiente Ocupación del Territorio',
          'weighing' => 20,
          'p_a_i_id' => $idpai1,
          ]);
          $idline3 = DB::getPdo()->lastInsertId();
          
          
        DB::table('strategic_lines')->insert([
          'name' => 'Participación para el desarrollo y divulgación de una cultura ambiental más amigable con nuestro entorno',
          'weighing' => 20,
          'p_a_i_id' => $idpai1,
          ]);
          $idline4 = DB::getPdo()->lastInsertId();
          
          
        DB::table('strategic_lines')->insert([
          'name' => 'Producción y democratización del conocimiento como apoyo a la gestión ambiental territorial',
          'weighing' => 20,
          'p_a_i_id' => $idpai1,
          ]);
          $idline5 = DB::getPdo()->lastInsertId();
          
          
          DB::table('programs')->insert([
            'strategic_line_id' => $idline3,
            'national_program_id' => 799,
            'car_program' => 'Programa No 1. Planificacion, Ordenamiento Ambiental y Territorial',
            'weighing' => 16,
            ]);
            $idprogram1 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline1,
            'national_program_id' => 799,
            'car_program' => 'Programa No 2. Gestión Integral del Recurso Hídrico',
            'weighing' => 16,
            ]);
            $idprogram2 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline2,
            'national_program_id' => 799,
            'car_program' => 'Programa No 3. Bosques, Biodiversidad y Servicios Ecosistemicos.',
            'weighing' => 17,
            ]);
            $idprogram3 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline1,
            'national_program_id' => 799,
            'car_program' => 'Programa No 4. Gestion Ambiental Sectorial y Urbana.',
            'weighing' => 17,
            ]);
            $idprogram4 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline4,
            'national_program_id' => 799,
            'car_program' => 'Programa No. 5. Educacion Ambiental',
            'weighing' => 17,
            ]);
            $idprogram5 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline1,
            'national_program_id' => 799,
            'car_program' => 'Programa No 6. Calidad Ambiental',
            'weighing' => 17,
            ]);
            $idprogram6 = DB::getPdo()->lastInsertId();
            
            
            DB::table('projects')->insert([
              'program_id' => $idprogram1,
              'project' => 'Proyecto No 1.1.Planificación, Ordenamiento e Información Ambiental Territorial (1)',
              'weighing' => 33,
              ]);
              $idproject1 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram1,
              'project' => 'Proyecto No 1.2. Gestión del Riesgo y adaptación al Cambio Climático (2)',
              'weighing' => 33,
              ]);
              $idproject2 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram1,
              'project' => 'Proyecto No 1.3. Gestión del conocimiento y Cooperación Internacional (3)',
              'weighing' => 34,
              ]);
              $idproject3 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => 'Proyecto 2.1. Administración de la oferta y demanda del recurso hídrico. (Superficiales y subterráneas) (4).',
              'weighing' => 50,
              ]);
              $idproject4 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => 'Proyecto 2.2.  Monitoreo de la calidad del recurso hídrico (5).',
              'weighing' => 50,
              ]);
              $idproject5 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram3,
              'project' => 'Proyecto No 3.1. Ecosistemas estratégicos continentales y marinos (6).',
              'weighing' => 33,
              ]);
              $idproject6 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => 'Proyecto No 3.2. Protección y conservación de la biodiversidad (7).',
              'weighing' => 33,
              ]);
              $idproject7 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram3,
              'project' => 'Proyecto No 3.3. Negocios verdes y sostenibles (8).',
              'weighing' => 34,
              ]);
              $idproject8 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram4,
              'project' => 'Proyecto No 4.1. Gestión Ambiental Urbana (9).',
              'weighing' => 50,
              ]);
              $idproject9 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram4,
              'project' => 'Proyecto No 4.2. Gestión Ambiental Sectorial (10)',
              'weighing' => 50,
              ]);
              $idproject10 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram5,
              'project' => 'Proyecto No 5.1. Cultura Ambiental (11)',
              'weighing' => 50,
              ]);
              $idproject11 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram5,
              'project' => 'Proyecto No. 5.2. Participación Comunitaria (12).',
              'weighing' => 50,
              ]);
              $idproject12 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram6,
              'project' => 'Proyecto No. 6.1.  (13). Evaluación, Seguimiento, Monitoreo y Control de la calidad de los recursos naturales y la biodiversidad.',
              'weighing' => 50,
              ]);
              $idproject13 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram6,
              'project' => 'Proyecto No 6.2. Calidad del Aire (14).',
              'weighing' => 50,
              ]);
              $idproject14 = DB::getPdo()->lastInsertId();
              
              
              DB::table('objectives')->insert([
                'project_id' => $idproject1,
                'objective' => 'Objetivo 1',
                'weighing' => 100,
                ]);
                $idobjective1 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objectives')->insert([
                'project_id' => $idproject2,
                'objective' => 'Objetivo 2',
                'weighing' => 100,
                ]);
                $idobjective2 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objectives')->insert([
                'project_id' => $idproject3,
                'objective' => 'Objetivo 3',
                'weighing' => 100,
                ]);
                $idobjective3 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objectives')->insert([
                'project_id' => $idproject4,
                'objective' => 'Objetivo 4',
                'weighing' => 100,
                ]);
                $idobjective4 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objectives')->insert([
                'project_id' => $idproject5,
                'objective' => 'Objetivo 5',
                'weighing' => 100,
                ]);
                $idobjective5 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objectives')->insert([
                'project_id' => $idproject6,
                'objective' => 'Objetivo 6',
                'weighing' => 100,
                ]);
                $idobjective6 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objectives')->insert([
                'project_id' => $idproject7,
                'objective' => 'Objetivo 7',
                'weighing' => 100,
                ]);
                $idobjective7 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objectives')->insert([
                'project_id' => $idproject8,
                'objective' => 'Objetivo 8',
                'weighing' => 100,
                ]);
                $idobjective8 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objectives')->insert([
                'project_id' => $idproject9,
                'objective' => 'Objetivo 9',
                'weighing' => 100,
                ]);
                $idobjective9 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objectives')->insert([
                'project_id' => $idproject10,
                'objective' => 'Objetivo 10',
                'weighing' => 100,
                ]);
                $idobjective10 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objectives')->insert([
                'project_id' => $idproject11,
                'objective' => 'Objetivo 11',
                'weighing' => 100,
                ]);
                $idobjective11 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objectives')->insert([
                'project_id' => $idproject12,
                'objective' => 'Objetivo 12',
                'weighing' => 100,
                ]);
                $idobjective12 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objectives')->insert([
                'project_id' => $idproject13,
                'objective' => 'Objetivo 13',
                'weighing' => 100,
                ]);
                $idobjective13 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objectives')->insert([
                'project_id' => $idproject14,
                'objective' => 'Objetivo 14',
                'weighing' => 100,
                ]);
                $idobjective14 = DB::getPdo()->lastInsertId();
                
                
                DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
					'product_id' => 1,
					'product_other' => 'Producto 1',
					'goal_1' => 0.125,
					'goal_2' => 0.375,
					'goal_3' => 0.33,
					'goal_4' => 0.16,
					'goal_1_balance' => 0.125,
					'goal_2_balance' => 0.375,
					'goal_3_balance' => 0.33,
					'goal_4_balance' => 0.16,
					'total_goal' => 0.99,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 10,
					]);
					$idobjectiveproduct1 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
					'product_id' => 2,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 10,
					]);
					$idobjectiveproduct2 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
					'product_id' => 3,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 10,
					]);
					$idobjectiveproduct3 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
					'product_id' => 4,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 10,
					]);
					$idobjectiveproduct4 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
					'product_id' => 5,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 10,
					]);
					$idobjectiveproduct5 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
					'product_id' => 6,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 10,
					]);
					$idobjectiveproduct6 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
					'product_id' => 7,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 10,
					]);
					$idobjectiveproduct7 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
					'product_id' => 8,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 10,
					]);
					$idobjectiveproduct8 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
					'product_id' => 9,
					'product_other' => 'Producto 9',
					'goal_1' => 0.1892,
					'goal_2' => 0.2703,
					'goal_3' => 0.2703,
					'goal_4' => 1,
					'goal_1_balance' => 0.1892,
					'goal_2_balance' => 0.2703,
					'goal_3_balance' => 0.2703,
					'goal_4_balance' => 1,
					'total_goal' => 1.7298,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 10,
					]);
					$idobjectiveproduct9 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
					'product_id' => 10,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 10,
					]);
					$idobjectiveproduct10 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective2,
					'product_id' => 11,
					'product_other' => 'Producto 1',
					'goal_1' => 0.5,
					'goal_2' => 1,
					'goal_3' => 1,
					'goal_4' => 1,
					'goal_1_balance' => 0.5,
					'goal_2_balance' => 1,
					'goal_3_balance' => 1,
					'goal_4_balance' => 1,
					'total_goal' => 3.5,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 16,
					]);
					$idobjectiveproduct11 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective2,
					'product_id' => 12,
					'product_other' => 'Producto 2',
					'goal_1' => 0.7,
					'goal_2' => 0.82,
					'goal_3' => 1,
					'goal_4' => 1,
					'goal_1_balance' => 0.7,
					'goal_2_balance' => 0.82,
					'goal_3_balance' => 1,
					'goal_4_balance' => 1,
					'total_goal' => 3.52,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 16,
					]);
					$idobjectiveproduct12 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective2,
					'product_id' => 13,
					'product_other' => 'Producto 3',
					'goal_1' => 0.2,
					'goal_2' => 0.3,
					'goal_3' => 0.3,
					'goal_4' => 0.2,
					'goal_1_balance' => 0.2,
					'goal_2_balance' => 0.3,
					'goal_3_balance' => 0.3,
					'goal_4_balance' => 0.2,
					'total_goal' => 1,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 17,
					]);
					$idobjectiveproduct13 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective2,
					'product_id' => 14,
					'product_other' => 'Producto 4',
					'goal_1' => 0,
					'goal_2' => 2,
					'goal_3' => 2,
					'goal_4' => 2,
					'goal_1_balance' => 0,
					'goal_2_balance' => 2,
					'goal_3_balance' => 2,
					'goal_4_balance' => 2,
					'total_goal' => 6,
					'unit_goal' => 24,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 17,
					]);
					$idobjectiveproduct14 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective2,
					'product_id' => 15,
					'product_other' => 'Producto 5',
					'goal_1' => 0.2,
					'goal_2' => 0.3,
					'goal_3' => 0.3,
					'goal_4' => 0.2,
					'goal_1_balance' => 0.2,
					'goal_2_balance' => 0.3,
					'goal_3_balance' => 0.3,
					'goal_4_balance' => 0.2,
					'total_goal' => 1,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 17,
					]);
					$idobjectiveproduct15 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective2,
					'product_id' => 16,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 17,
					]);
					$idobjectiveproduct16 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective3,
					'product_id' => 17,
					'product_other' => 'Producto 1',
					'goal_1' => 1,
					'goal_2' => 0,
					'goal_3' => 1,
					'goal_4' => 0,
					'goal_1_balance' => 1,
					'goal_2_balance' => 0,
					'goal_3_balance' => 1,
					'goal_4_balance' => 0,
					'total_goal' => 2,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 20,
					]);
					$idobjectiveproduct17 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective3,
					'product_id' => 18,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 20,
					]);
					$idobjectiveproduct18 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective3,
					'product_id' => 19,
					'product_other' => 'Producto 3',
					'goal_1' => 3,
					'goal_2' => 8,
					'goal_3' => 8,
					'goal_4' => 8,
					'goal_1_balance' => 3,
					'goal_2_balance' => 8,
					'goal_3_balance' => 8,
					'goal_4_balance' => 8,
					'total_goal' => 27,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 20,
					]);
					$idobjectiveproduct19 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective3,
					'product_id' => 20,
					'product_other' => 'Producto 4',
					'goal_1' => 25,
					'goal_2' => 0,
					'goal_3' => 25,
					'goal_4' => 0,
					'goal_1_balance' => 25,
					'goal_2_balance' => 0,
					'goal_3_balance' => 25,
					'goal_4_balance' => 0,
					'total_goal' => 50,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 20,
					]);
					$idobjectiveproduct20 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective3,
					'product_id' => 21,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 20,
					]);
					$idobjectiveproduct21 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
					'product_id' => 22,
					'product_other' => 'Producto 1',
					'goal_1' => 0,
					'goal_2' => 0.1666,
					'goal_3' => 0,
					'goal_4' => 0.33,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0.1666,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0.33,
					'total_goal' => 0.4966,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 11,
					]);
					$idobjectiveproduct22 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
					'product_id' => 23,
					'product_other' => 'Producto 2',
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 0,
					'goal_4' => 0.17,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0.17,
					'total_goal' => 0.17,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 11,
					]);
					$idobjectiveproduct23 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
					'product_id' => 24,
					'product_other' => 'Producto 3',
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 0,
					'goal_4' => 0.08,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0.08,
					'total_goal' => 0.08,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 11,
					]);
					$idobjectiveproduct24 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
					'product_id' => 25,
					'product_other' => 'Producto 4',
					'goal_1' => 0.37,
					'goal_2' => 0.8,
					'goal_3' => 0.85,
					'goal_4' => 0.9,
					'goal_1_balance' => 0.37,
					'goal_2_balance' => 0.8,
					'goal_3_balance' => 0.85,
					'goal_4_balance' => 0.9,
					'total_goal' => 2.92,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 11,
					]);
					$idobjectiveproduct25 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
					'product_id' => 26,
					'product_other' => 'Producto 5',
					'goal_1' => 4000,
					'goal_2' => 3000,
					'goal_3' => 3000,
					'goal_4' => 3000,
					'goal_1_balance' => 4000,
					'goal_2_balance' => 3000,
					'goal_3_balance' => 3000,
					'goal_4_balance' => 3000,
					'total_goal' => 13000,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 11,
					]);
					$idobjectiveproduct26 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
					'product_id' => 27,
					'product_other' => 'Producto 6',
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 0,
					'goal_4' => 4,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 0,
					'goal_4_balance' => 4,
					'total_goal' => 4,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 11,
					]);
					$idobjectiveproduct27 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
					'product_id' => 28,
					'product_other' => 'Producto 7',
					'goal_1' => 0,
					'goal_2' => 3,
					'goal_3' => 5,
					'goal_4' => 5,
					'goal_1_balance' => 0,
					'goal_2_balance' => 3,
					'goal_3_balance' => 5,
					'goal_4_balance' => 5,
					'total_goal' => 13,
					'unit_goal' => 42,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 11,
					]);
					$idobjectiveproduct28 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
					'product_id' => 29,
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
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 11,
					]);
					$idobjectiveproduct29 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
					'product_id' => 30,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 12,
					]);
					$idobjectiveproduct30 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
					'product_id' => 31,
					'product_other' => 'Producto 1',
					'goal_1' => 50,
					'goal_2' => 52,
					'goal_3' => 0,
					'goal_4' => 60,
					'goal_1_balance' => 50,
					'goal_2_balance' => 52,
					'goal_3_balance' => 0,
					'goal_4_balance' => 60,
					'total_goal' => 162,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 12,
					]);
					$idobjectiveproduct31 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
					'product_id' => 32,
					'product_other' => 'Producto 2',
					'goal_1' => 27,
					'goal_2' => 30,
					'goal_3' => 33,
					'goal_4' => 36,
					'goal_1_balance' => 27,
					'goal_2_balance' => 30,
					'goal_3_balance' => 33,
					'goal_4_balance' => 36,
					'total_goal' => 126,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 12,
					]);
					$idobjectiveproduct32 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
					'product_id' => 33,
					'product_other' => 'Producto 3',
					'goal_1' => 23,
					'goal_2' => 27,
					'goal_3' => 27,
					'goal_4' => 27,
					'goal_1_balance' => 23,
					'goal_2_balance' => 27,
					'goal_3_balance' => 27,
					'goal_4_balance' => 27,
					'total_goal' => 104,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 12,
					]);
					$idobjectiveproduct33 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
					'product_id' => 34,
					'product_other' => 'Producto 4',
					'goal_1' => 23,
					'goal_2' => 25,
					'goal_3' => 25,
					'goal_4' => 25,
					'goal_1_balance' => 23,
					'goal_2_balance' => 25,
					'goal_3_balance' => 25,
					'goal_4_balance' => 25,
					'total_goal' => 98,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 12,
					]);
					$idobjectiveproduct34 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
					'product_id' => 35,
					'product_other' => 'Producto 5',
					'goal_1' => 50,
					'goal_2' => 52,
					'goal_3' => 52,
					'goal_4' => 60,
					'goal_1_balance' => 50,
					'goal_2_balance' => 52,
					'goal_3_balance' => 52,
					'goal_4_balance' => 60,
					'total_goal' => 214,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 13,
					]);
					$idobjectiveproduct35 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
					'product_id' => 36,
					'product_other' => 'Producto 6',
					'goal_1' => 9,
					'goal_2' => 17,
					'goal_3' => 17,
					'goal_4' => 23,
					'goal_1_balance' => 9,
					'goal_2_balance' => 17,
					'goal_3_balance' => 17,
					'goal_4_balance' => 23,
					'total_goal' => 66,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 13,
					]);
					$idobjectiveproduct36 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
					'product_id' => 37,
					'product_other' => 'Producto 7',
					'goal_1' => 11,
					'goal_2' => 11,
					'goal_3' => 11,
					'goal_4' => 15,
					'goal_1_balance' => 11,
					'goal_2_balance' => 11,
					'goal_3_balance' => 11,
					'goal_4_balance' => 15,
					'total_goal' => 48,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 13,
					]);
					$idobjectiveproduct37 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
					'product_id' => 38,
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
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 13,
					]);
					$idobjectiveproduct38 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => 39,
					'product_other' => 'Producto 1',
					'goal_1' => 0.06,
					'goal_2' => 0.11,
					'goal_3' => 0.52,
					'goal_4' => 0.42,
					'goal_1_balance' => 0.06,
					'goal_2_balance' => 0.11,
					'goal_3_balance' => 0.52,
					'goal_4_balance' => 0.42,
					'total_goal' => 1.11,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 9,
					]);
					$idobjectiveproduct39 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => 40,
					'product_other' => 'Producto 2',
					'goal_1' => 0.33,
					'goal_2' => 0.33,
					'goal_3' => 0.41,
					'goal_4' => 0.41,
					'goal_1_balance' => 0.33,
					'goal_2_balance' => 0.33,
					'goal_3_balance' => 0.41,
					'goal_4_balance' => 0.41,
					'total_goal' => 1.48,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 9,
					]);
					$idobjectiveproduct40 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => 41,
					'product_other' => 'Producto 3',
					'goal_1' => 0,
					'goal_2' => 0.33,
					'goal_3' => 0.33,
					'goal_4' => 0.34,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0.33,
					'goal_3_balance' => 0.33,
					'goal_4_balance' => 0.34,
					'total_goal' => 1,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 9,
					]);
					$idobjectiveproduct41 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => 42,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 9,
					]);
					$idobjectiveproduct42 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => 43,
					'product_other' => 'Producto 5',
					'goal_1' => 0.25,
					'goal_2' => 0.25,
					'goal_3' => 0.25,
					'goal_4' => 0.25,
					'goal_1_balance' => 0.25,
					'goal_2_balance' => 0.25,
					'goal_3_balance' => 0.25,
					'goal_4_balance' => 0.25,
					'total_goal' => 1,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 9,
					]);
					$idobjectiveproduct43 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => 44,
					'product_other' => 'Producto 6',
					'goal_1' => 0.2,
					'goal_2' => 0,
					'goal_3' => 0,
					'goal_4' => 0.8,
					'goal_1_balance' => 0.2,
					'goal_2_balance' => 0,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0.8,
					'total_goal' => 1,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 9,
					]);
					$idobjectiveproduct44 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => 45,
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
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 9,
					]);
					$idobjectiveproduct45 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => 46,
					'product_other' => 'Producto 8',
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 1,
					'goal_4' => 1,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 1,
					'goal_4_balance' => 1,
					'total_goal' => 2,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 9,
					]);
					$idobjectiveproduct46 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => 47,
					'product_other' => 'Producto 9',
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 0,
					'unit_goal' => 42,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 9,
					]);
					$idobjectiveproduct47 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => 48,
					'product_other' => 'Producto 10',
					'goal_1' => 0,
					'goal_2' => 1,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 0,
					'goal_2_balance' => 1,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 1,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 9,
					]);
					$idobjectiveproduct48 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => 49,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 10,
					]);
					$idobjectiveproduct49 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
					'product_id' => 50,
					'product_other' => 'Producto 1',
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 0,
					'goal_4' => 1,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 0,
					'goal_4_balance' => 1,
					'total_goal' => 1,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 14,
					]);
					$idobjectiveproduct50 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
					'product_id' => 51,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 14,
					]);
					$idobjectiveproduct51 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
					'product_id' => 52,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 14,
					]);
					$idobjectiveproduct52 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
					'product_id' => 53,
					'product_other' => 'Producto 4',
					'goal_1' => 0,
					'goal_2' => 0.3,
					'goal_3' => 0.3,
					'goal_4' => 0.7,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0.3,
					'goal_3_balance' => 0.3,
					'goal_4_balance' => 0.7,
					'total_goal' => 1.3,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 14,
					]);
					$idobjectiveproduct53 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
					'product_id' => 54,
					'product_other' => 'Producto 5',
					'goal_1' => 0,
					'goal_2' => 1,
					'goal_3' => 1,
					'goal_4' => 1,
					'goal_1_balance' => 0,
					'goal_2_balance' => 1,
					'goal_3_balance' => 1,
					'goal_4_balance' => 1,
					'total_goal' => 3,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 14,
					]);
					$idobjectiveproduct54 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
					'product_id' => 55,
					'product_other' => 'Producto 6',
					'goal_1' => 0,
					'goal_2' => 1,
					'goal_3' => 1,
					'goal_4' => 1,
					'goal_1_balance' => 0,
					'goal_2_balance' => 1,
					'goal_3_balance' => 1,
					'goal_4_balance' => 1,
					'total_goal' => 3,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 15,
					]);
					$idobjectiveproduct55 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
					'product_id' => 56,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 15,
					]);
					$idobjectiveproduct56 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
					'product_id' => 57,
					'product_other' => 'Producto 1',
					'goal_1' => 0.2,
					'goal_2' => 0.25,
					'goal_3' => 0.25,
					'goal_4' => 0.3,
					'goal_1_balance' => 0.2,
					'goal_2_balance' => 0.25,
					'goal_3_balance' => 0.25,
					'goal_4_balance' => 0.3,
					'total_goal' => 1,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 50,
					]);
					$idobjectiveproduct57 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
					'product_id' => 58,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 50,
					]);
					$idobjectiveproduct58 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective9,
					'product_id' => 59,
					'product_other' => 'Producto 1',
					'goal_1' => 0.2,
					'goal_2' => 0.45,
					'goal_3' => 0.7,
					'goal_4' => 1,
					'goal_1_balance' => 0.2,
					'goal_2_balance' => 0.45,
					'goal_3_balance' => 0.7,
					'goal_4_balance' => 1,
					'total_goal' => 2.35,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 50,
					]);
					$idobjectiveproduct59 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective9,
					'product_id' => 60,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 50,
					]);
					$idobjectiveproduct60 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
					'product_id' => 61,
					'product_other' => 'Producto 1',
					'goal_1' => 0.25,
					'goal_2' => 0.25,
					'goal_3' => 0.25,
					'goal_4' => 0.25,
					'goal_1_balance' => 0.25,
					'goal_2_balance' => 0.25,
					'goal_3_balance' => 0.25,
					'goal_4_balance' => 0.25,
					'total_goal' => 1,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 50,
					]);
					$idobjectiveproduct61 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
					'product_id' => 62,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 50,
					]);
					$idobjectiveproduct62 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
					'product_id' => 63,
					'product_other' => 'Producto 1',
					'goal_1' => 0.2,
					'goal_2' => 0.45,
					'goal_3' => 0.7,
					'goal_4' => 1,
					'goal_1_balance' => 0.2,
					'goal_2_balance' => 0.45,
					'goal_3_balance' => 0.7,
					'goal_4_balance' => 1,
					'total_goal' => 2.35,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 50,
					]);
					$idobjectiveproduct63 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
					'product_id' => 64,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 50,
					]);
					$idobjectiveproduct64 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective12,
					'product_id' => 65,
					'product_other' => 'Producto 1',
					'goal_1' => 0.2,
					'goal_2' => 0.45,
					'goal_3' => 0.7,
					'goal_4' => 1,
					'goal_1_balance' => 0.2,
					'goal_2_balance' => 0.45,
					'goal_3_balance' => 0.7,
					'goal_4_balance' => 1,
					'total_goal' => 2.35,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 50,
					]);
					$idobjectiveproduct65 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective12,
					'product_id' => 66,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 50,
					]);
					$idobjectiveproduct66 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective13,
					'product_id' => 67,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 12,
					]);
					$idobjectiveproduct67 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective13,
					'product_id' => 68,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 12,
					]);
					$idobjectiveproduct68 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective13,
					'product_id' => 69,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 12,
					]);
					$idobjectiveproduct69 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective13,
					'product_id' => 70,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 12,
					]);
					$idobjectiveproduct70 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective13,
					'product_id' => 71,
					'product_other' => 'Producto 5',
					'goal_1' => 60,
					'goal_2' => 90,
					'goal_3' => 90,
					'goal_4' => 90,
					'goal_1_balance' => 60,
					'goal_2_balance' => 90,
					'goal_3_balance' => 90,
					'goal_4_balance' => 90,
					'total_goal' => 330,
					'unit_goal' => 32,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 13,
					]);
					$idobjectiveproduct71 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective13,
					'product_id' => 72,
					'product_other' => 'Producto 6',
					'goal_1' => 0.75,
					'goal_2' => 0.8,
					'goal_3' => 0.9,
					'goal_4' => 0.95,
					'goal_1_balance' => 0.75,
					'goal_2_balance' => 0.8,
					'goal_3_balance' => 0.9,
					'goal_4_balance' => 0.95,
					'total_goal' => 3.4,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 13,
					]);
					$idobjectiveproduct72 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective13,
					'product_id' => 73,
					'product_other' => 'Producto 7',
					'goal_1' => 200,
					'goal_2' => 200,
					'goal_3' => 200,
					'goal_4' => 200,
					'goal_1_balance' => 200,
					'goal_2_balance' => 200,
					'goal_3_balance' => 200,
					'goal_4_balance' => 200,
					'total_goal' => 800,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 13,
					]);
					$idobjectiveproduct73 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective13,
					'product_id' => 74,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 13,
					]);
					$idobjectiveproduct74 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective14,
					'product_id' => 75,
					'product_other' => 'Producto 1',
					'goal_1' => 35,
					'goal_2' => 50,
					'goal_3' => 0,
					'goal_4' => 5,
					'goal_1_balance' => 35,
					'goal_2_balance' => 50,
					'goal_3_balance' => 0,
					'goal_4_balance' => 5,
					'total_goal' => 90,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 16,
					]);
					$idobjectiveproduct75 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective14,
					'product_id' => 76,
					'product_other' => 'Producto 2',
					'goal_1' => 1,
					'goal_2' => 1,
					'goal_3' => 0,
					'goal_4' => 1,
					'goal_1_balance' => 1,
					'goal_2_balance' => 1,
					'goal_3_balance' => 0,
					'goal_4_balance' => 1,
					'total_goal' => 3,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 16,
					]);
					$idobjectiveproduct76 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective14,
					'product_id' => 77,
					'product_other' => 'Producto 3',
					'goal_1' => 50,
					'goal_2' => 50,
					'goal_3' => 0,
					'goal_4' => 50,
					'goal_1_balance' => 50,
					'goal_2_balance' => 50,
					'goal_3_balance' => 0,
					'goal_4_balance' => 50,
					'total_goal' => 150,
					'unit_goal' => 23,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 17,
					]);
					$idobjectiveproduct77 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective14,
					'product_id' => 78,
					'product_other' => 'Producto 4',
					'goal_1' => 100,
					'goal_2' => 100,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 100,
					'goal_2_balance' => 100,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 200,
					'unit_goal' => 23,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 17,
					]);
					$idobjectiveproduct78 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective14,
					'product_id' => 79,
					'product_other' => 'Producto 5',
					'goal_1' => 13,
					'goal_2' => 20,
					'goal_3' => 22,
					'goal_4' => 17,
					'goal_1_balance' => 13,
					'goal_2_balance' => 20,
					'goal_3_balance' => 22,
					'goal_4_balance' => 17,
					'total_goal' => 72,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 17,
					]);
					$idobjectiveproduct79 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective14,
					'product_id' => 80,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 17,
					]);
					$idobjectiveproduct80 = DB::getPdo()->lastInsertId();
					
					
					
				
                  
                  
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct1,
                    'name' => 'Porcentaje de avance en la formulación y/o ajuste de los Planes de Ordenación y Manejo de Cuencas (POMCAS) y Planes de Manejo de Microcuencas (PMM)',
                    'goal_1' => 0.125,
                    'goal_2' => 0.375,
                    'goal_3' => 0.33,
                    'goal_4' => 0.16,
                    'goal' => 0.99,
                    'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity1 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct2,
                    'name' => 'Porcentaje de páramos delimitados por el MADS, con zonificación y régimen de usos adoptados por la CAR',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 1,
                    'goal' => 1,
                    'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity2 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct3,
                    'name' => 'Porcentaje de Municipios asesorados o asistidos en la inclusión del componente ambiental en los procesos de panificación y ordenamiento territorial, con énfasis en la incorporación de las determinantes ambientales para la revisión y ajuste de los POT',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity3 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct4,
                    'name' => 'Porcentaje de Actualización y reporte de la información en el SIAC',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity4 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct5,
                    'name' => 'Porcentaje de Planes de Ordenación y Manejo de Cuencas (POMCAS), Planes de Manejo de Acuíferos (PMA) y Planes de Manejo de Microcuencas (PMM) en ejecución con seguimiento.',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity5 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct6,
                    'name' => 'Porcentaje de planes de Manejo Ambiental con seguimiento',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity6 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct7,
                    'name' => 'Porcentaje de municipios con seguimiento al cumplimiento de los asuntos ambientales concertados en los POT adoptados',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity7 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct8,
                    'name' => 'Porcentaje de mapas temáticos elaborados',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity8 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct9,
                    'name' => 'Porcentaje de delimitación y zonificación de humedales.',
                    'goal_1' => 0.1892,
                    'goal_2' => 0.2703,
                    'goal_3' => 0.2703,
                    'goal_4' => 1,
                    'goal' => 1.7298,
                    'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity9 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct10,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity10 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct11,
                    'name' => 'Porcentaje de entes territoriales asesorados en la incorporación, planificación y ejecución de acciones relacionadas con cambio climático en el marco de los instrumentos de planificación territorial',
                    'goal_1' => 0.5,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 3.5,
                    'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity11 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct12,
                    'name' => 'Porcentaje de Redes y estaciones de monitoreo en operación',
                    'goal_1' => 0.7,
                    'goal_2' => 0.82,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 3.52,
                    'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity12 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct13,
                    'name' => 'Porcentaje de ejecución de acciones en mitigación de GEI y/o adaptación al cambio climático.',
                    'goal_1' => 0.2,
                    'goal_2' => 0.3,
                    'goal_3' => 0.3,
                    'goal_4' => 0.2,
                    'goal' => 1,
                    'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity13 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct14,
                    'name' => 'Ejecución de acciones para el fortalecimiento del Nodo Regional de Cambio Climático Caribe e Insular',
                    'goal_1' => 0,
                    'goal_2' => 2,
                    'goal_3' => 2,
                    'goal_4' => 2,
                    'goal' => 6,
                    'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity14 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct15,
                    'name' => 'Porcentaje de ejecución de acciones en conocimiento y reducción del riesgo y manejo de desastres naturales',
                    'goal_1' => 0.2,
                    'goal_2' => 0.3,
                    'goal_3' => 0.3,
                    'goal_4' => 0.2,
                    'goal' => 1,
                    'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity15 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct16,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity16 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct17,
                    'name' => 'Numero de actualización del software de Banco de Programas y Proyectos',
                    'goal_1' => 1,
                    'goal_2' => 0,
                    'goal_3' => 1,
                    'goal_4' => 0,
                    'goal' => 2,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity17 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct18,
                    'name' => 'Porcentaje de proyectos con seguimiento y evaluación.',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity18 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct19,
                    'name' => 'Número de proyectos formulados y gestionados',
                    'goal_1' => 3,
                    'goal_2' => 8,
                    'goal_3' => 8,
                    'goal_4' => 8,
                    'goal' => 27,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity19 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct20,
                    'name' => 'Funcionarios públicos, representantes de comunidades, organizaciones y minorías étnicas capacitadas.',
                    'goal_1' => 25,
                    'goal_2' => 0,
                    'goal_3' => 25,
                    'goal_4' => 0,
                    'goal' => 50,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity20 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct21,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity21 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct22,
                    'name' => 'Porcentaje de cuerpos de agua con planes de ordenamiento del recurso hídrico (PORH) adoptados',
                    'goal_1' => 0,
                    'goal_2' => 0.1666,
                    'goal_3' => 0,
                    'goal_4' => 0.33,
                    'goal' => 0.4966,
                    'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity22 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct23,
                    'name' => 'Porcentaje de avance en la formulación y/o ajuste de Planes de Manejo de Acuíferos (PMA) ',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0.17,
                    'goal' => 0.17,
                    'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity23 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct24,
                    'name' => 'Porcentaje de Cuerpos de agua con reglamentación del uso de las aguas',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0.08,
                    'goal' => 0.08,
                    'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity24 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct25,
                    'name' => 'Porcentaje de Planes de Manejo de Acuíferos (PMA) en ejecucion',
                    'goal_1' => 0.37,
                    'goal_2' => 0.8,
                    'goal_3' => 0.85,
                    'goal_4' => 0.9,
                    'goal' => 2.92,
                    'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity25 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct26,
                    'name' => 'Número de población de comunidades indígenas y negras beneficiadas con obras de infraestructura para captación y/o almacenamiento de agua.',
                    'goal_1' => 4000,
                    'goal_2' => 3000,
                    'goal_3' => 3000,
                    'goal_4' => 3000,
                    'goal' => 13000,
                    'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity26 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct27,
                    'name' => 'Cuerpos de agua con revisión de reglamentación del uso de las aguas.',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 4,
                    'goal' => 4,
                    'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity27 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct28,
                    'name' => 'Líneas de cauce con obras de control de inundaciones, erosión, caudales, escorrentía, rectificación y manejo de cauces, regulación de cauces y demás obras para mitigar los  riesgos asociados a la oferta y disponibilidad de agua.',
                    'goal_1' => 0,
                    'goal_2' => 3,
                    'goal_3' => 5,
                    'goal_4' => 5,
                    'goal' => 13,
                    'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity28 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct29,
                    'name' => 'Número de estudio Regional del agua desarrollado.',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 1,
                    'goal' => 1,
                    'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity29 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct30,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity30 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct31,
                    'name' => 'Número de fuentes puntuales de vertimiento de aguas residuales (domésticas y de los sectores productivos) con cobro de la tasa retributiva.',
                    'goal_1' => 50,
                    'goal_2' => 52,
                    'goal_3' => 0,
                    'goal_4' => 60,
                    'goal' => 162,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity31 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct32,
                    'name' => 'Número de fuentes abastecedoras de acueductos de centros poblados con monitoreo de calidad del agua para generar indice de calidad.',
                    'goal_1' => 27,
                    'goal_2' => 30,
                    'goal_3' => 33,
                    'goal_4' => 36,
                    'goal' => 126,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity32 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct33,
                    'name' => 'Número de corrientes o tramos de las mismas con objetivos de calidad monitoreados ',
                    'goal_1' => 23,
                    'goal_2' => 27,
                    'goal_3' => 27,
                    'goal_4' => 27,
                    'goal' => 104,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity33 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct34,
                    'name' => 'Número de estaciones de muestreo de calidad de aguas marinas y costeras con monitoreo de la calidad del agua',
                    'goal_1' => 23,
                    'goal_2' => 25,
                    'goal_3' => 25,
                    'goal_4' => 25,
                    'goal' => 98,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity34 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct35,
                    'name' => 'Número de vertimientos puntuales al recurso hídrico con monitoreo en términos de DBO y SST',
                    'goal_1' => 50,
                    'goal_2' => 52,
                    'goal_3' => 52,
                    'goal_4' => 60,
                    'goal' => 214,
                    'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity35 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct36,
                    'name' => 'Número de pozos de agua subterránea de la red regional con monitoreo de calidad',
                    'goal_1' => 9,
                    'goal_2' => 17,
                    'goal_3' => 17,
                    'goal_4' => 23,
                    'goal' => 66,
                    'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity36 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct37,
                    'name' => 'Número de parámetros acreditados en el laboratorio Ambiental ante el IDEAM',
                    'goal_1' => 11,
                    'goal_2' => 11,
                    'goal_3' => 11,
                    'goal_4' => 15,
                    'goal' => 48,
                    'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity37 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct38,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity38 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct39,
                    'name' => 'Porcentaje de la Superficie de áreas protegidas regionales declaradas, homologadas o recategorizadas e inscritas en el RUNAP',
                    'goal_1' => 0.06,
                    'goal_2' => 0.11,
                    'goal_3' => 0.52,
                    'goal_4' => 0.42,
                    'goal' => 1.11,
                    'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity39 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct40,
                    'name' => 'Porcentaje de Planes de Ordenación y Manejo de Cuencas (POMCAS), Planes de Manejo de Acuiferos (PMA) y Planes de Manejo de Microcuencas (PMM) en ejecución',
                    'goal_1' => 0.33,
                    'goal_2' => 0.33,
                    'goal_3' => 0.41,
                    'goal_4' => 0.41,
                    'goal' => 1.48,
                    'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity40 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct41,
                    'name' => 'Porcentaje de suelos degradados en recuperación o rehabilitación',
                    'goal_1' => 0,
                    'goal_2' => 0.33,
                    'goal_3' => 0.33,
                    'goal_4' => 0.34,
                    'goal' => 1,
                    'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity41 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct42,
                    'name' => 'Porcentaje de Áreas protegidas con planes de manejo en ejecución',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity42 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct43,
                    'name' => 'Porcentaje de Áreas de ecosistemas en restauración, rehabilitación y reforestación de Ecosistemas.',
                    'goal_1' => 0.25,
                    'goal_2' => 0.25,
                    'goal_3' => 0.25,
                    'goal_4' => 0.25,
                    'goal' => 1,
                    'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity43 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct44,
                    'name' => 'Implementación de acciones en manejo integrado de zonas costeras',
                    'goal_1' => 0.2,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0.8,
                    'goal' => 1,
                    'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity44 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct45,
                    'name' => 'Diseño e implementación de estrategia de conservación de los suelos. ',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 3,
                    'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity45 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct46,
                    'name' => 'Planes de ordenamiento integrado de unidades ambientales costeras (POMIUAC) ajustados.',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 2,
                    'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity46 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct47,
                    'name' => 'Kilómetros lineales de costa intervenidos con medidas de mitigación contra la erosión costera',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity47 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct48,
                    'name' => 'Número de proyectos para mitigar efectos de la erosión costera formulados.',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 1,
                    'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity48 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct49,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity49 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct50,
                    'name' => 'Porcentaje de avance en la formulación del Plan General de Ordenación Forestal.',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 1,
                    'goal' => 1,
                    'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity50 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct51,
                    'name' => 'Porcentaje de Especies amenazadas con medidas de conservación y manejo en ejecución.',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity51 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct52,
                    'name' => 'Porcentaje de Especies invasoras con medidas de prevención, control y manejo en ejecución.',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity52 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct53,
                    'name' => 'Porcentaje de avance de ejecución del Plan General de Ordenación Forestal adoptado.',
                    'goal_1' => 0,
                    'goal_2' => 0.3,
                    'goal_3' => 0.3,
                    'goal_4' => 0.7,
                    'goal' => 1.3,
                    'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity53 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct54,
                    'name' => 'Número de investigaciones realizadas de especies promisorias (flora y fauna silvestre).',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 3,
                    'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity54 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct55,
                    'name' => 'Número de programas de uso y manejo sostenible de especies promisorias Implementados.',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 3,
                    'weighing' => 15,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity55 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct56,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 15,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity56 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct57,
                    'name' => 'Implementación del Programa Regional de Negocios Verdes por la autoridad ambiental',
                    'goal_1' => 0.2,
                    'goal_2' => 0.25,
                    'goal_3' => 0.25,
                    'goal_4' => 0.3,
                    'goal' => 1,
                    'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity57 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct58,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity58 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct59,
                    'name' => 'Ejecución de acciones en Gestión Ambiental Urbana',
                    'goal_1' => 0.2,
                    'goal_2' => 0.45,
                    'goal_3' => 0.7,
                    'goal_4' => 1,
                    'goal' => 2.35,
                    'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity59 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct60,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity60 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct61,
                    'name' => 'Porcentaje de sectores con acompañamiento para la reconversión hacia sistemas sostenibles de producción',
                    'goal_1' => 0.25,
                    'goal_2' => 0.25,
                    'goal_3' => 0.25,
                    'goal_4' => 0.25,
                    'goal' => 1,
                    'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity61 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct62,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity62 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct63,
                    'name' => 'Ejecución de Acciones en Educación Ambiental',
                    'goal_1' => 0.2,
                    'goal_2' => 0.45,
                    'goal_3' => 0.7,
                    'goal_4' => 1,
                    'goal' => 2.35,
                    'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity63 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct64,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity64 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective12,
                    'product_id' =>$idobjectiveproduct65,
                    'name' => 'Ejecución de Acciones en Educación Ambiental',
                    'goal_1' => 0.2,
                    'goal_2' => 0.45,
                    'goal_3' => 0.7,
                    'goal_4' => 1,
                    'goal' => 2.35,
                    'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity65 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective12,
                    'product_id' =>$idobjectiveproduct66,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity66 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct67,
                    'name' => 'Porcentaje de Planes de Saneamiento y Manejo de Vertimientos (PSMV) con seguimiento',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity67 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct68,
                    'name' => 'Porcentaje de Programas de Uso Eficiente y Ahorro del Agua (PUEAA) con seguimiento',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity68 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct69,
                    'name' => 'Porcentaje de Planes de Gestión Integral de Residuos Sólidos (PGIRS) con seguimiento a metas de aprovechamiento',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity69 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct70,
                    'name' => 'Porcentaje de Autorizaciones ambientales con seguimiento',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity70 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct71,
                    'name' => 'Tiempo Promedio de trámites para la resolución de autorizaciones ambientales otorgadas por la corporación',
                    'goal_1' => 60,
                    'goal_2' => 90,
                    'goal_3' => 90,
                    'goal_4' => 90,
                    'goal' => 330,
                    'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity71 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct72,
                    'name' => 'Porcentaje de procesos sancionatorios resueltos',
                    'goal_1' => 0.75,
                    'goal_2' => 0.8,
                    'goal_3' => 0.9,
                    'goal_4' => 0.95,
                    'goal' => 3.4,
                    'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity72 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct73,
                    'name' => 'Número de operativos de control al tráfico ilegal de flora y fauna realizados.',
                    'goal_1' => 200,
                    'goal_2' => 200,
                    'goal_3' => 200,
                    'goal_4' => 200,
                    'goal' => 800,
                    'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity73 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct74,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity74 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective14,
                    'product_id' =>$idobjectiveproduct75,
                    'name' => 'Numero de campañas que fortalecen el SVCA, mediante el control de emisiones de fuentes móviles realizados',
                    'goal_1' => 35,
                    'goal_2' => 50,
                    'goal_3' => 0,
                    'goal_4' => 5,
                    'goal' => 90,
                    'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity75 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective14,
                    'product_id' =>$idobjectiveproduct76,
                    'name' => 'Porcentaje de vehículos revisados por la autoridad ambiental ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 0,
                    'goal_4' => 1,
                    'goal' => 3,
                    'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity76 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective14,
                    'product_id' =>$idobjectiveproduct77,
                    'name' => 'Registro de la calidad del aire en centros poblados mayores de 100000 habitantes, y corredores industriales determinado en redes de monitoreo con equipos PM10',
                    'goal_1' => 50,
                    'goal_2' => 50,
                    'goal_3' => 0,
                    'goal_4' => 50,
                    'goal' => 150,
                    'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity77 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective14,
                    'product_id' =>$idobjectiveproduct78,
                    'name' => 'Registro de la calidad del aire en centros poblados mayores de 100000 habitantes, y corredores industriales determinado en redes de monitoreo con equipos PST ',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 200,
                    'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity78 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective14,
                    'product_id' =>$idobjectiveproduct79,
                    'name' => 'Número de estaciones  reportadas al  SISAIRE',
                    'goal_1' => 13,
                    'goal_2' => 20,
                    'goal_3' => 22,
                    'goal_4' => 17,
                    'goal' => 72,
                    'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity79 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective14,
                    'product_id' =>$idobjectiveproduct80,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity80 = DB::getPdo()->lastInsertId();

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity1,
						'year' =>1,
						'value' => 0.395,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia1 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia3 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>1,
						'value' => 0.53558171717863,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia4 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity5,
						'year' =>1,
						'value' => 0.5,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia5 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity6,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia6 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity7,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia7 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity8,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia8 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity9,
						'year' =>1,
						'value' => 0.1892,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia9 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia10 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity11,
						'year' =>1,
						'value' => 0.6875,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia11 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity12,
						'year' =>1,
						'value' => 0.15,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia12 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity13,
						'year' =>1,
						'value' => 0.2,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia13 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity15,
						'year' =>1,
						'value' => 0.2,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia15 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity16,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia16 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity17,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia17 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity18,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia18 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity19,
						'year' =>1,
						'value' => 6,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia19 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity20,
						'year' =>1,
						'value' => 45,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia20 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia21 = DB::getPdo()->lastInsertId(); 



					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>1,
						'value' => 0.185,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia25 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity26,
						'year' =>1,
						'value' => 4976,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia26 = DB::getPdo()->lastInsertId(); 



					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity30,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia30 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity31,
						'year' =>1,
						'value' => 34,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia31 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity32,
						'year' =>1,
						'value' => 28,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia32 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>1,
						'value' => 23,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia33 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity34,
						'year' =>1,
						'value' => 22,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia34 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity35,
						'year' =>1,
						'value' => 34,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia35 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity36,
						'year' =>1,
						'value' => 9,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia36 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity37,
						'year' =>1,
						'value' => 8,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia37 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia38 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity39,
						'year' =>1,
						'value' => 0.0620066666666667,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia39 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity40,
						'year' =>1,
						'value' => 0.33,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia40 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia42 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity43,
						'year' =>1,
						'value' => 0.25,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia43 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>1,
						'value' => 0.16,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia44 = DB::getPdo()->lastInsertId(); 




					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia49 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity51,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia51 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity52,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia52 = DB::getPdo()->lastInsertId(); 



					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity56,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia56 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>1,
						'value' => 0.18,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia57 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity58,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia58 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>1,
						'value' => 0.18,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia59 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity60,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia60 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity61,
						'year' =>1,
						'value' => 0.1728,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia61 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity62,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia62 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity63,
						'year' =>1,
						'value' => 0.25,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia63 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity64,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia64 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity65,
						'year' =>1,
						'value' => 0.19,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia65 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity66,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia66 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity67,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia67 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity68,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia68 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity69,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia69 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity70,
						'year' =>1,
						'value' => 0.966313725490196,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia70 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity71,
						'year' =>1,
						'value' => 123,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia71 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>1,
						'value' => 0.482758620689655,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia72 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity73,
						'year' =>1,
						'value' => 198,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia73 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity74,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia74 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity75,
						'year' =>1,
						'value' => 36,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia75 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity76,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia76 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity77,
						'year' =>1,
						'value' => 53.3,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia77 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity78,
						'year' =>1,
						'value' => 109.1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia78 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity79,
						'year' =>1,
						'value' => 13,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia79 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity80,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia80 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity1,
						'year' =>2,
						'value' => 0.309895833333333,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia81 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia83 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>2,
						'value' => 0.708061338508586,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia84 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity5,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia85 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity6,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia86 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity7,
						'year' =>2,
						'value' => 0.5,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia87 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity8,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia88 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity9,
						'year' =>2,
						'value' => 0.1892,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia89 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia90 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity11,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia91 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity12,
						'year' =>2,
						'value' => 0.65625,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia92 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity13,
						'year' =>2,
						'value' => 0.3,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia93 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity14,
						'year' =>2,
						'value' => 2,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia94 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity15,
						'year' =>2,
						'value' => 0.3,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia95 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity16,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia96 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity18,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia98 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity19,
						'year' =>2,
						'value' => 11,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia99 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia101 = DB::getPdo()->lastInsertId(); 



					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>2,
						'value' => 0.8,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia105 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity26,
						'year' =>2,
						'value' => 4460,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia106 = DB::getPdo()->lastInsertId(); 



					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity30,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia110 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity31,
						'year' =>2,
						'value' => 42,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia111 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity32,
						'year' =>2,
						'value' => 30,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia112 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>2,
						'value' => 27,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia113 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity34,
						'year' =>2,
						'value' => 25,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia114 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity35,
						'year' =>2,
						'value' => 40,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia115 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity36,
						'year' =>2,
						'value' => 17,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia116 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity37,
						'year' =>2,
						'value' => 11,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia117 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia118 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity40,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia120 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity41,
						'year' =>2,
						'value' => 0.33,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia121 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia122 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity43,
						'year' =>2,
						'value' => 17975,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia123 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity45,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia125 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity48,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia128 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia129 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity51,
						'year' =>2,
						'value' => 0.638888888888889,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia131 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity52,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia132 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity53,
						'year' =>2,
						'value' => 0.15,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia133 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity54,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia134 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia135 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity56,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia136 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>2,
						'value' => 0.25,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia137 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity58,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia138 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>2,
						'value' => 0.25,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia139 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity60,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia140 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity61,
						'year' =>2,
						'value' => 0.439875,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia141 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity62,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia142 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity63,
						'year' =>2,
						'value' => 0.25,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia143 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity64,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia144 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity65,
						'year' =>2,
						'value' => 0.4325,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia145 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity66,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia146 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity67,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia147 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity68,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia148 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity69,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia149 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity70,
						'year' =>2,
						'value' => 0.792010747872817,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia150 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity71,
						'year' =>2,
						'value' => 94403143812709,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia151 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>2,
						'value' => 0.10752688172043,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia152 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity73,
						'year' =>2,
						'value' => 191,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia153 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity74,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia154 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity75,
						'year' =>2,
						'value' => 48,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia155 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity76,
						'year' =>2,
						'value' => 0.984,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia156 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity77,
						'year' =>2,
						'value' => 39.5,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia157 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity78,
						'year' =>2,
						'value' => 75.4,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia158 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity79,
						'year' =>2,
						'value' => 13,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia159 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity80,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia160 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity1,
						'year' =>3,
						'value' => 0.33,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia161 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia163 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>3,
						'value' => 0.697290821298195,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia164 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity5,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia165 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity6,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia166 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity7,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia167 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity8,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia168 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity9,
						'year' =>3,
						'value' => 0.1892,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia169 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia170 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity11,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia171 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity12,
						'year' =>3,
						'value' => 0.913461538461538,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia172 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity13,
						'year' =>3,
						'value' => 0.3,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia173 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity14,
						'year' =>3,
						'value' => 2,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia174 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity15,
						'year' =>3,
						'value' => 0.3,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia175 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity16,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia176 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity17,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia177 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity18,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia178 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity19,
						'year' =>3,
						'value' => 8,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia179 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity20,
						'year' =>3,
						'value' => 39,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia180 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia181 = DB::getPdo()->lastInsertId(); 



					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>3,
						'value' => 0.85,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia185 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity26,
						'year' =>3,
						'value' => 3010,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia186 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity28,
						'year' =>3,
						'value' => 10.3,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia188 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity30,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia190 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity32,
						'year' =>3,
						'value' => 30,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia192 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>3,
						'value' => 26,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia193 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity34,
						'year' =>3,
						'value' => 25,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia194 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity35,
						'year' =>3,
						'value' => 25,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia195 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity36,
						'year' =>3,
						'value' => 14,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia196 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity37,
						'year' =>3,
						'value' => 11,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia197 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia198 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity39,
						'year' =>3,
						'value' => 0.52,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia199 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity40,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia200 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity41,
						'year' =>3,
						'value' => 1.28,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia201 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>3,
						'value' => 0.875,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia202 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity43,
						'year' =>3,
						'value' => 20925,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia203 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity45,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia205 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia206 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia209 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity51,
						'year' =>3,
						'value' => 0.777777777777778,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia211 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity52,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia212 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity53,
						'year' =>3,
						'value' => 0.2,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia213 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity54,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia214 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia215 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity56,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia216 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>3,
						'value' => 0.25,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia217 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity58,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia218 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>3,
						'value' => 0.697,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia219 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity60,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia220 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity61,
						'year' =>3,
						'value' => 0.25,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia221 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity62,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia222 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity63,
						'year' =>3,
						'value' => 0.58,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia223 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity64,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia224 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity65,
						'year' =>3,
						'value' => 0.58,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia225 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity66,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia226 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity67,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia227 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity68,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia228 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity69,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia229 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity70,
						'year' =>3,
						'value' => 0.607308323860048,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia230 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity71,
						'year' =>3,
						'value' => 843762162162162,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia231 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>3,
						'value' => 0.0754716981132075,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia232 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity73,
						'year' =>3,
						'value' => 187,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia233 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity74,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia234 = DB::getPdo()->lastInsertId(); 




					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity79,
						'year' =>3,
						'value' => 12,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia239 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity80,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia240 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity2,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia242 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia243 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>4,
						'value' => 0.63,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia244 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity5,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia245 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity6,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia246 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity7,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia247 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity8,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia248 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity9,
						'year' =>4,
						'value' => 0.8,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia249 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia250 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity11,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia251 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity12,
						'year' =>4,
						'value' => 0.66,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia252 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity13,
						'year' =>4,
						'value' => 0.2,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia253 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity14,
						'year' =>4,
						'value' => 2,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia254 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity15,
						'year' =>4,
						'value' => 0.2,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia255 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity16,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia256 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity18,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia258 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity19,
						'year' =>4,
						'value' => 16,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia259 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>4,
						'value' => 0.9,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia261 = DB::getPdo()->lastInsertId(); 



					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>4,
						'value' => 0.9,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia265 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity26,
						'year' =>4,
						'value' => 2168,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia266 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity28,
						'year' =>4,
						'value' => 5,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia268 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity30,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia270 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity31,
						'year' =>4,
						'value' => 60,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia271 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity32,
						'year' =>4,
						'value' => 36,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia272 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>4,
						'value' => 27,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia273 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity34,
						'year' =>4,
						'value' => 25,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia274 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity35,
						'year' =>4,
						'value' => 53,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia275 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity36,
						'year' =>4,
						'value' => 22,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia276 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity37,
						'year' =>4,
						'value' => 11,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia277 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia278 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity40,
						'year' =>4,
						'value' => 0.41,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia280 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity41,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia281 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>4,
						'value' => 0.78,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia282 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity43,
						'year' =>4,
						'value' => 0.06,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia283 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>4,
						'value' => 0.69,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia284 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity45,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia285 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia286 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia289 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity51,
						'year' =>4,
						'value' => 0.92,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia291 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity52,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia292 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity53,
						'year' =>4,
						'value' => 0.7,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia293 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity54,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia294 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia295 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity56,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia296 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>4,
						'value' => 0.3,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia297 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity58,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia298 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>4,
						'value' => 0.81,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia299 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity60,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia300 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity61,
						'year' =>4,
						'value' => 0.25,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia301 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity62,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia302 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity63,
						'year' =>4,
						'value' => 0.97,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia303 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity64,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia304 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity65,
						'year' =>4,
						'value' => 0.97,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia305 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity66,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia306 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity67,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia307 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity68,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia308 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity69,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia309 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity70,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia310 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity71,
						'year' =>4,
						'value' => 161,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia311 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>4,
						'value' => 0.11,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia312 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity73,
						'year' =>4,
						'value' => 204,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia313 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity74,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia314 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity77,
						'year' =>4,
						'value' => 34,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia317 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity79,
						'year' =>4,
						'value' => 9,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia319 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity80,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia320 = DB::getPdo()->lastInsertId(); 

					DB::table('financing_sources')->insert([
						'father_id' => 11,
						'code' => '1.1.1.1.1.1.1.1',
						'name' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
						'description' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 21,
						]);
						$idFuente1 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 58,
						'code' => '1.1.2.2.2.1.1',
						'name' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
						'description' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 21,
						]);
						$idFuente9 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 27,
						'code' => '1.1.2.1.1.1.1.1',
						'name' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia actual)',
						'description' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 21,
						]);
						$idFuente2 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 208,
						'code' => '',
						'name' => 'Otros Convenios',
						'description' => 'Otros Convenios',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 21,
						]);
						$idFuente3 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 42,
						'code' => '1.1.2.2.1.1.1.1',
						'name' => 'Tasa retributiva (vigencia actual)',
						'description' => 'Tasa retributiva (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 21,
						]);
						$idFuente4 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 54,
						'code' => '1.1.2.2.1.1.5.1',
						'name' => 'Otras tasas (vigencia actual)',
						'description' => 'Otras tasas (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 21,
						]);
						$idFuente5 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 45,
						'code' => '1.1.2.2.1.1.2.1',
						'name' => 'Tasa por el uso del agua (vigencia actual)',
						'description' => 'Tasa por el uso del agua (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 21,
						]);
						$idFuente6 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 45,
						'code' => '',
						'name' => 'Tasa por el uso del agua (vigencia anterior)',
						'description' => 'Tasa por el uso del agua (vigencia anterior)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 21,
						]);
						$idFuente7 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 1,
						'code' => '',
						'name' => 'Movilización Material Vegetal',
						'description' => 'Movilización Material Vegetal',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 21,
						]);
						$idFuente8 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 58,
						'code' => '',
						'name' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
						'description' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 21,
						]);
						$idFuente9 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 48,
						'code' => '1.1.2.2.1.1.3.1',
						'name' => 'Tasa de aprovechamiento Forestal (vigencia actual)',
						'description' => 'Tasa de aprovechamiento Forestal (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 21,
						]);
						$idFuente10 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 84,
						'code' => '',
						'name' => 'Multas ambientales (vigencia actual)',
						'description' => 'Multas ambientales (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 21,
						]);
						$idFuente11 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 84,
						'code' => '',
						'name' => 'Multas ambientales (vigencia anterior)',
						'description' => 'Multas ambientales (vigencia anterior)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 21,
						]);
						$idFuente12 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 61,
						'code' => '',
						'name' => 'Seguimiento a licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
						'description' => 'Seguimiento a licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 21,
						]);
						$idFuente13 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 1,
						'code' => '',
						'name' => 'Recuperacion Incapacidad y Licencia de Maternidad ',
						'description' => 'Recuperacion Incapacidad y Licencia de Maternidad ',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 21,
						]);
						$idFuente14 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 79,
						'code' => '1.1.2.2.2.8.1',
						'name' => 'Otros servicios (vigencia actual)',
						'description' => 'Otros servicios (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 21,
						]);
						$idFuente15 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 145,
						'code' => '1.2.2.6',
						'name' => 'Rendimientos financieros',
						'description' => 'Rendimientos financieros',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 21,
						]);
						$idFuente16 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 148,
						'code' => '',
						'name' => 'Rendimientos Financieros Sector Electrico',
						'description' => 'Rendimientos Financieros Sector Electrico',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 21,
						]);
						$idFuente17 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 152,
						'code' => '',
						'name' => 'Rendimientos financieros Tasa retributiva',
						'description' => 'Rendimientos financieros Tasa retributiva',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 21,
						]);
						$idFuente18 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 148,
						'code' => '',
						'name' => 'Rendimientos financiero Multas, sanciones e intereses de mora',
						'description' => 'Rendimientos financiero Multas, sanciones e intereses de mora',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 21,
						]);
						$idFuente19 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 148,
						'code' => '',
						'name' => 'Rendimientos Finanieros Carbon',
						'description' => 'Rendimientos Finanieros Carbon',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 21,
						]);
						$idFuente20 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 148,
						'code' => '',
						'name' => 'Rendimientos Financieros Sobretasa Ambiental',
						'description' => 'Rendimientos Financieros Sobretasa Ambiental',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 21,
						]);
						$idFuente21 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 152,
						'code' => '',
						'name' => 'Rendimientos financierosTasa por el uso del agua',
						'description' => 'Rendimientos financierosTasa por el uso del agua',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 21,
						]);
						$idFuente22 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 145,
						'code' => '1.2.2.7',
						'name' => 'Excedentes financieros',
						'description' => 'Excedentes financieros',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 21,
						]);
						$idFuente31 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 241,
						'code' => '',
						'name' => 'Recuperación de carteraTasa retributiva',
						'description' => 'Recuperación de carteraTasa retributiva',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 21,
						]);
						$idFuente33 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 237,
						'code' => '',
						'name' => 'Recuperación de cartera Multas, sanciones e intereses de mora',
						'description' => 'Recuperación de cartera Multas, sanciones e intereses de mora',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 21,
						]);
						$idFuente34 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 241,
						'code' => '',
						'name' => 'Recuperación de cartera Tasa por el uso del agua',
						'description' => 'Recuperación de cartera Tasa por el uso del agua',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 21,
						]);
						$idFuente35 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 119,
						'code' => '1.1.2.5.1.1.1.4',
						'name' => 'Aportes de la Nación Funcionamiento',
						'description' => 'Aportes de la Nación Funcionamiento',
						'type_id' => 23,
						'final_level' => true,
						'group_id' => 21,
						]);
						$idFuente36 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 125,
						'code' => '1.1.2.5.1.2.1.4',
						'name' => 'Aportes del FCA para Gastos de personal',
						'description' => 'Aportes del FCA para Gastos de personal',
						'type_id' => 24,
						'final_level' => true,
						'group_id' => 21,
						]);
						$idFuente37 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 124,
						'code' => '1.1.2.5.1.2.2',
						'name' => 'Aportes inversión Fondo de Compensación Ambiental -FCA',
						'description' => 'Aportes inversión Fondo de Compensación Ambiental -FCA',
						'type_id' => 24,
						'final_level' => true,
						'group_id' => 21,
						]);
						$idFuente38 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 117,
						'code' => '1.1.2.5.1.3',
						'name' => 'Aportes inversión Fondo Nacional Ambiental - FONAM',
						'description' => 'Aportes inversión Fondo Nacional Ambiental - FONAM',
						'type_id' => 24,
						'final_level' => true,
						'group_id' => 21,
						]);
						$idFuente39 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 131,
						'code' => '1.1.2.5.1.4.4',
						'name' => 'Regalías',
						'description' => 'Regalías',
						'type_id' => 25,
						'final_level' => true,
						'group_id' => 21,
						]);
						$idFuente40 = DB::getPdo()->lastInsertId();
						
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente1,
						'value' => 2816317273,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 281631727.3,
						'investment' => 2534685545.7,
						'year' => 1,
						]);
						$idPlan1 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente2,
						'value' => 2800000000,
						'functioning_percentage' => 20,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 70,
						'functioning' => 560000000,
						'debt_service' => 0,
						'fund' => 280000000,
						'investment' => 1960000000,
						'year' => 1,
						]);
						$idPlan2 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente3,
						'value' => 512460670,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 512460670,
						'year' => 1,
						]);
						$idPlan3 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente4,
						'value' => 260000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 26000000,
						'investment' => 234000000,
						'year' => 1,
						]);
						$idPlan4 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente6,
						'value' => 431313521,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 43131352.1,
						'investment' => 388182168.9,
						'year' => 1,
						]);
						$idPlan5 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente8,
						'value' => 500000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 50000,
						'investment' => 450000,
						'year' => 1,
						]);
						$idPlan6 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente9,
						'value' => 500000000,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 450000000,
						'debt_service' => 0,
						'fund' => 50000000,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan7 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente10,
						'value' => 500000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 50000000,
						'investment' => 450000000,
						'year' => 1,
						]);
						$idPlan8 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente11,
						'value' => 600000000,
						'functioning_percentage' => 32.2148,
						'debt_service_percentage' => 0,
						'fund_percentage' => 2.5649,
						'investment_percentage' => 65.2203,
						'functioning' => 193288800,
						'debt_service' => 0,
						'fund' => 15389400,
						'investment' => 391321800,
						'year' => 1,
						]);
						$idPlan9 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente13,
						'value' => 200000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 200000000,
						'year' => 1,
						]);
						$idPlan10 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente14,
						'value' => 26164683,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 2616468.3,
						'investment' => 23548214.7,
						'year' => 1,
						]);
						$idPlan11 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente15,
						'value' => 1000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 100000,
						'investment' => 900000,
						'year' => 1,
						]);
						$idPlan12 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente16,
						'value' => 73870914,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 73870914,
						'year' => 1,
						]);
						$idPlan13 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente31,
						'value' => 1849526072,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 1664573464.8,
						'debt_service' => 0,
						'fund' => 184952607.2,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan14 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente33,
						'value' => 650000000,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 585000000,
						'debt_service' => 0,
						'fund' => 65000000,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan15 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente34,
						'value' => 1200000000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 1200000000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan16 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente36,
						'value' => 3118869740,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 3118869740,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan17 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente37,
						'value' => 212067869,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 212067869,
						'year' => 1,
						]);
						$idPlan18 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente38,
						'value' => 1978124413,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1978124413,
						'year' => 1,
						]);
						$idPlan19 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente39,
						'value' => 18703973894,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 18703973894,
						'year' => 1,
						]);
						$idPlan20 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente40,
						'value' => 4254556656,
						'functioning_percentage' => 3,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 97,
						'functioning' => 127636699.68,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 4126919956.32,
						'year' => 1,
						]);
						$idPlan21 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente1,
						'value' => 3260000000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 3260000000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan22 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente2,
						'value' => 1900000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1900000000,
						'year' => 2,
						]);
						$idPlan23 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente3,
						'value' => 674550000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 674550000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan24 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente4,
						'value' => 450000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 450000000,
						'year' => 2,
						]);
						$idPlan25 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente6,
						'value' => 460000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 460000000,
						'year' => 2,
						]);
						$idPlan26 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente8,
						'value' => 2000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 2000000,
						'year' => 2,
						]);
						$idPlan27 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente9,
						'value' => 160000000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 160000000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan28 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente10,
						'value' => 550000000,
						'functioning_percentage' => 40,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 60,
						'functioning' => 220000000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 330000000,
						'year' => 2,
						]);
						$idPlan29 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente11,
						'value' => 480000000,
						'functioning_percentage' => 9.8442,
						'debt_service_percentage' => 0,
						'fund_percentage' => 6.2373,
						'investment_percentage' => 83.9185,
						'functioning' => 47252160,
						'debt_service' => 0,
						'fund' => 29939040,
						'investment' => 402808800,
						'year' => 2,
						]);
						$idPlan30 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente13,
						'value' => 260000000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 260000000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan31 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente14,
						'value' => 10000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 10000000,
						'year' => 2,
						]);
						$idPlan32 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente15,
						'value' => 1000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1000000,
						'year' => 2,
						]);
						$idPlan33 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente16,
						'value' => 52755000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 52755000,
						'year' => 2,
						]);
						$idPlan34 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente31,
						'value' => 2395977790,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 2395977790,
						'year' => 2,
						]);
						$idPlan35 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente33,
						'value' => 999000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 999000000,
						'year' => 2,
						]);
						$idPlan36 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente34,
						'value' => 1993100419,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1993100419,
						'year' => 2,
						]);
						$idPlan37 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente35,
						'value' => 1000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1000000,
						'year' => 2,
						]);
						$idPlan38 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente36,
						'value' => 3241557000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 3241557000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan39 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente37,
						'value' => 867719473,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 100,
						'investment_percentage' => 0,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 867719473,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan40 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente38,
						'value' => 2472433828,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 2472433828,
						'year' => 2,
						]);
						$idPlan41 = DB::getPdo()->lastInsertId();
						 


					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente1,
						'value' => 3800000000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 3800000000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan42 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente2,
						'value' => 2909226129,
						'functioning_percentage' => 10,
						'debt_service_percentage' => 0,
						'fund_percentage' => 20,
						'investment_percentage' => 70,
						'functioning' => 290922612.9,
						'debt_service' => 0,
						'fund' => 581845225.8,
						'investment' => 2036458290.3,
						'year' => 3,
						]);
						$idPlan43 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente3,
						'value' => 723765000,
						'functioning_percentage' => 70,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 20,
						'functioning' => 506635500,
						'debt_service' => 0,
						'fund' => 72376500,
						'investment' => 144753000,
						'year' => 3,
						]);
						$idPlan44 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente4,
						'value' => 450000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 45000000,
						'investment' => 405000000,
						'year' => 3,
						]);
						$idPlan45 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente5,
						'value' => 830000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 83000000,
						'investment' => 747000000,
						'year' => 3,
						]);
						$idPlan46 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente6,
						'value' => 384479342,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 38447934.2,
						'investment' => 346031407.8,
						'year' => 3,
						]);
						$idPlan47 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente7,
						'value' => 100000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 10000000,
						'investment' => 90000000,
						'year' => 3,
						]);
						$idPlan48 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente8,
						'value' => 2000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 200000,
						'investment' => 1800000,
						'year' => 3,
						]);
						$idPlan49 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente9,
						'value' => 520000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 52000000,
						'investment' => 468000000,
						'year' => 3,
						]);
						$idPlan50 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente10,
						'value' => 1400000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 140000000,
						'investment' => 1260000000,
						'year' => 3,
						]);
						$idPlan51 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente11,
						'value' => 320000000,
						'functioning_percentage' => 26.3913,
						'debt_service_percentage' => 0,
						'fund_percentage' => 38.556,
						'investment_percentage' => 35.0527,
						'functioning' => 84452160,
						'debt_service' => 0,
						'fund' => 123379200,
						'investment' => 112168640,
						'year' => 3,
						]);
						$idPlan52 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente12,
						'value' => 1100000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1100000000,
						'year' => 3,
						]);
						$idPlan53 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente13,
						'value' => 500000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 500000000,
						'year' => 3,
						]);
						$idPlan54 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente14,
						'value' => 30169715,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 30169715,
						'year' => 3,
						]);
						$idPlan55 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente15,
						'value' => 1400000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1400000,
						'year' => 3,
						]);
						$idPlan56 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente17,
						'value' => 3000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 3000000,
						'year' => 3,
						]);
						$idPlan57 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente18,
						'value' => 2000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 2000000,
						'year' => 3,
						]);
						$idPlan58 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente19,
						'value' => 1600000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1600000,
						'year' => 3,
						]);
						$idPlan59 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente20,
						'value' => 0,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan97 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente21,
						'value' => 3000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 3000000,
						'year' => 3,
						]);
						$idPlan60 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente22,
						'value' => 3000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 3000000,
						'year' => 3,
						]);
						$idPlan61 = DB::getPdo()->lastInsertId();


					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente36,
						'value' => 3160586243,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 3160586243,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan62 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente37,
						'value' => 705844372,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 705844372,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan63 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente38,
						'value' => 2321608279,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 2321608279,
						'year' => 3,
						]);
						$idPlan64 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente40,
						'value' => 216553279,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 216553279,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan65 = DB::getPdo()->lastInsertId();
						 
						 
                      DB::table('implementations')->insert([
                        'p_a_i_s_id'=>$idpai1,
                        ]);
                        $idImplementation1 = DB::getPdo()->lastInsertId();

					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 2925849367,
						'financial_plans_id' => $idPlan1,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo1 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 1750146296,
						'financial_plans_id' => $idPlan2,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo2 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 359746693.74,
						'financial_plans_id' => $idPlan3,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo3 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 327667760,
						'financial_plans_id' => $idPlan4,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo4 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 499257160,
						'financial_plans_id' => $idPlan5,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo5 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 3741492,
						'financial_plans_id' => $idPlan6,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo6 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 264832992.34,
						'financial_plans_id' => $idPlan7,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo7 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 90197593,
						'financial_plans_id' => $idPlan8,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo8 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 110086401,
						'financial_plans_id' => $idPlan9,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo9 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 40139730.92,
						'financial_plans_id' => $idPlan10,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo10 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 27579687,
						'financial_plans_id' => $idPlan11,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo11 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 0,
						'financial_plans_id' => $idPlan12,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo12 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 69950468.3,
						'financial_plans_id' => $idPlan13,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo13 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 1849526072,
						'financial_plans_id' => $idPlan14,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo14 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 281533926,
						'financial_plans_id' => $idPlan15,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo15 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 1118988800.75,
						'financial_plans_id' => $idPlan16,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo16 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 2998166470,
						'financial_plans_id' => $idPlan17,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo17 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 212067869,
						'financial_plans_id' => $idPlan18,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo18 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 625472471.5,
						'financial_plans_id' => $idPlan19,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo19 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 0,
						'financial_plans_id' => $idPlan20,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo20 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 6501682816.2,
						'financial_plans_id' => $idPlan21,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo21 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 3138877294,
						'financial_plans_id' => $idPlan22,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo22 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 1335489890,
						'financial_plans_id' => $idPlan23,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo23 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 287300000,
						'financial_plans_id' => $idPlan24,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo24 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 199497876.99,
						'financial_plans_id' => $idPlan25,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo25 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 382403626,
						'financial_plans_id' => $idPlan26,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo26 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 11457795.42,
						'financial_plans_id' => $idPlan27,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo27 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 321169230.02,
						'financial_plans_id' => $idPlan28,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo28 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 173256758.85,
						'financial_plans_id' => $idPlan29,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo29 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 3000000,
						'financial_plans_id' => $idPlan30,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo30 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 249844150.5,
						'financial_plans_id' => $idPlan31,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo31 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 19017135,
						'financial_plans_id' => $idPlan32,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo32 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 2882447,
						'financial_plans_id' => $idPlan33,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo33 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 118421619.81,
						'financial_plans_id' => $idPlan34,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo34 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 2383446169.5,
						'financial_plans_id' => $idPlan35,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo35 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 170565968.35,
						'financial_plans_id' => $idPlan36,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo36 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 2830753424,
						'financial_plans_id' => $idPlan37,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo37 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 25778228,
						'financial_plans_id' => $idPlan38,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo38 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 3844461298,
						'financial_plans_id' => $idPlan39,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo39 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 0,
						'financial_plans_id' => $idPlan40,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo40 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 2472433828,
						'financial_plans_id' => $idPlan41,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo41 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 3098977085,
						'financial_plans_id' => $idPlan42,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo42 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 2763378150,
						'financial_plans_id' => $idPlan43,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo43 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 505013565.9,
						'financial_plans_id' => $idPlan44,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo44 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 1026380098,
						'financial_plans_id' => $idPlan45,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo45 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 0,
						'financial_plans_id' => $idPlan46,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo46 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 487064549.2,
						'financial_plans_id' => $idPlan47,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo47 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 350000,
						'financial_plans_id' => $idPlan48,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo48 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 20570197.88,
						'financial_plans_id' => $idPlan49,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo49 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 806795667.67,
						'financial_plans_id' => $idPlan50,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo50 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 2263946802.24,
						'financial_plans_id' => $idPlan51,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo51 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 14907000,
						'financial_plans_id' => $idPlan52,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo52 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 212930821,
						'financial_plans_id' => $idPlan53,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo53 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 276048123,
						'financial_plans_id' => $idPlan54,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo54 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 36559692,
						'financial_plans_id' => $idPlan55,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo55 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 5825377,
						'financial_plans_id' => $idPlan56,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo56 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 3324603.2,
						'financial_plans_id' => $idPlan57,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo57 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 221618.87,
						'financial_plans_id' => $idPlan58,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo58 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 1110060.4,
						'financial_plans_id' => $idPlan59,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo59 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 1657599.09,
						'financial_plans_id' => $idPlan97,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo97 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 3555031,
						'financial_plans_id' => $idPlan60,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo60 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 961059.86,
						'financial_plans_id' => $idPlan61,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo61 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 3282100300,
						'financial_plans_id' => $idPlan62,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo62 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 379385929,
						'financial_plans_id' => $idPlan63,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo63 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 1597822920.43,
						'financial_plans_id' => $idPlan64,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo64 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 0,
						'financial_plans_id' => $idPlan65,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo65 = DB::getPdo()->lastInsertId();
						 
						DB::table('cost_sources')->insert([
							'father_id' => 2,
							'code' => '2.1.1',
							'name' => 'GASTOS DE PERSONAL',
							'description' => 'GASTOS DE PERSONAL',
							'functioning' => TRUE,
							'compensation' => FALSE,
							'debt_service' => FALSE,
							'group_id' => 21,
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
							'group_id' => 21,
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
							'group_id' => 21,
							]);
							$idFuenteGasto4 = DB::getPdo()->lastInsertId();
							
							
						DB::table('cost_sources')->insert([
							'father_id' => 19,
							'code' => '2.1.3.3.2',
							'name' => 'Conciliaciones',
							'description' => 'Conciliaciones',
							'functioning' => TRUE,
							'compensation' => FALSE,
							'debt_service' => FALSE,
							'group_id' => 21,
							]);
							$idFuenteGasto7 = DB::getPdo()->lastInsertId();
							
							
						DB::table('cost_sources')->insert([
							'father_id' => 29,
							'code' => '2.1.4.3.1',
							'name' => 'Cuota de fiscalización y auditaje',
							'description' => 'Cuota de fiscalización y auditaje',
							'functioning' => TRUE,
							'compensation' => FALSE,
							'debt_service' => FALSE,
							'group_id' => 21,
							]);
							$idFuenteGasto8 = DB::getPdo()->lastInsertId();
							
							
						DB::table('cost_sources')->insert([
							'father_id' => 31,
							'code' => '2.1.4.4.1',
							'name' => 'Multas',
							'description' => 'Multas',
							'functioning' => TRUE,
							'compensation' => FALSE,
							'debt_service' => FALSE,
							'group_id' => 21,
							]);
							$idFuenteGasto3 = DB::getPdo()->lastInsertId();
							
							
							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 1026296738,
								'value_comitted' => 999638089.26,
								'value_paid' => 884569433.26,
								'own' => TRUE,
								'nation' => FALSE,
								'royalties' => FALSE,
								'funds' => FALSE,
								'functioning' => TRUE,
								'compensation' => FALSE,
								'debt_service' => FALSE,
								'cost_sources_id' => $idFuenteGasto1,
								'p_a_i_id' => $idpai1,
								'group_id' => 21,
								]);
								$idGasto1 = DB::getPdo()->lastInsertId();
								
								
							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 3386306687,
								'value_comitted' => 3021768270.52,
								'value_paid' => 2346337896.52,
								'own' => TRUE,
								'nation' => FALSE,
								'royalties' => FALSE,
								'funds' => FALSE,
								'functioning' => TRUE,
								'compensation' => FALSE,
								'debt_service' => FALSE,
								'cost_sources_id' => $idFuenteGasto2,
								'p_a_i_id' => $idpai1,
								'group_id' => 21,
								]);
								$idGasto2 = DB::getPdo()->lastInsertId();
								

								
								
							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 998871434,
								'value_comitted' => 646449161,
								'value_paid' => 493810525,
								'own' => TRUE,
								'nation' => FALSE,
								'royalties' => FALSE,
								'funds' => FALSE,
								'functioning' => FALSE,
								'compensation' => TRUE,
								'debt_service' => FALSE,
								'cost_sources_id' => $idFuenteGasto4,
								'p_a_i_id' => $idpai1,
								'group_id' => 21,
								]);
								$idGasto3 = DB::getPdo()->lastInsertId();

								
							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 14218485,
								'value_comitted' => 14218485,
								'value_paid' => 14218485,
								'own' => TRUE,
								'nation' => FALSE,
								'royalties' => FALSE,
								'funds' => FALSE,
								'functioning' => TRUE,
								'compensation' => FALSE,
								'debt_service' => FALSE,
								'cost_sources_id' => $idFuenteGasto8,
								'p_a_i_id' => $idpai1,
								'group_id' => 21,
								]);
								$idGasto4 = DB::getPdo()->lastInsertId();
								
								
								DB::table('financial_costs')->insert([
									'year' => 1,
									'value_bugeted' => 2957581869,
									'value_comitted' => 2957581868.74,
									'value_paid' => 2904581868.74,
									'own' => FALSE,
									'nation' => TRUE,
									'royalties' => FALSE,
									'funds' => FALSE,
									'functioning' => TRUE,
									'compensation' => FALSE,
									'debt_service' => FALSE,
									'cost_sources_id' => $idFuenteGasto1,
									'p_a_i_id' => $idpai1,
									'group_id' => 21,
									]);
									$idGasto5 = DB::getPdo()->lastInsertId();
									
									
								DB::table('financial_costs')->insert([
									'year' => 1,
									'value_bugeted' => 314805740,
									'value_comitted' => 314805740,
									'value_paid' => 278258302,
									'own' => FALSE,
									'nation' => TRUE,
									'royalties' => FALSE,
									'funds' => FALSE,
									'functioning' => TRUE,
									'compensation' => FALSE,
									'debt_service' => FALSE,
									'cost_sources_id' => $idFuenteGasto2,
									'p_a_i_id' => $idpai1,
									'group_id' => 21,
									]);
									$idGasto6 = DB::getPdo()->lastInsertId();
									
									
								DB::table('financial_costs')->insert([
									'year' => 1,
									'value_bugeted' => 58550000,
									'value_comitted' => 27891303,
									'value_paid' => 19874638,
									'own' => FALSE,
									'nation' => TRUE,
									'royalties' => FALSE,
									'funds' => FALSE,
									'functioning' => TRUE,
									'compensation' => FALSE,
									'debt_service' => FALSE,
									'cost_sources_id' => $idFuenteGasto3,
									'p_a_i_id' => $idpai1,
									'group_id' => 21,
									]);
									$idGasto7 = DB::getPdo()->lastInsertId();

									
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 932013200,
										'value_comitted' => 927713656,
										'value_paid' => 838605928,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto1,
										'p_a_i_id' => $idpai1,
										'group_id' => 21,
										]);
										$idGasto8 = DB::getPdo()->lastInsertId();
										
										
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 2782178242,
										'value_comitted' => 2705462949,
										'value_paid' => 2129714627.5,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto2,
										'p_a_i_id' => $idpai1,
										'group_id' => 21,
										]);
										$idGasto9 = DB::getPdo()->lastInsertId();
										
										
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 3288000,
										'value_comitted' => 3285240,
										'value_paid' => 3285240,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto3,
										'p_a_i_id' => $idpai1,
										'group_id' => 21,
										]);
										$idGasto10 = DB::getPdo()->lastInsertId();
										
										
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 897658106,
										'value_comitted' => 650080588,
										'value_paid' => 650080588,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => FALSE,
										'compensation' => TRUE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto4,
										'p_a_i_id' => $idpai1,
										'group_id' => 21,
										]);
										$idGasto11 = DB::getPdo()->lastInsertId();

										
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 3093883,
										'value_comitted' => 3093883,
										'value_paid' => 3093883,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto7,
										'p_a_i_id' => $idpai1,
										'group_id' => 21,
										]);
										$idGasto12 = DB::getPdo()->lastInsertId();
										
										
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 16720245,
										'value_comitted' => 16720245,
										'value_paid' => 16720245,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto8,
										'p_a_i_id' => $idpai1,
										'group_id' => 21,
										]);
										$idGasto13 = DB::getPdo()->lastInsertId();
										
										
										DB::table('financial_costs')->insert([
											'year' => 2,
											'value_bugeted' => 3157218645,
											'value_comitted' => 3157218645,
											'value_paid' => 3141041045,
											'own' => FALSE,
											'nation' => TRUE,
											'royalties' => FALSE,
											'funds' => FALSE,
											'functioning' => TRUE,
											'compensation' => FALSE,
											'debt_service' => FALSE,
											'cost_sources_id' => $idFuenteGasto1,
											'p_a_i_id' => $idpai1,
											'group_id' => 21,
											]);
											$idGasto14 = DB::getPdo()->lastInsertId();
											
											
										DB::table('financial_costs')->insert([
											'year' => 2,
											'value_bugeted' => 392989281,
											'value_comitted' => 392989281,
											'value_paid' => 251337747,
											'own' => FALSE,
											'nation' => TRUE,
											'royalties' => FALSE,
											'funds' => FALSE,
											'functioning' => TRUE,
											'compensation' => FALSE,
											'debt_service' => FALSE,
											'cost_sources_id' => $idFuenteGasto2,
											'p_a_i_id' => $idpai1,
											'group_id' => 21,
											]);
											$idGasto15 = DB::getPdo()->lastInsertId();
											
											
										DB::table('financial_costs')->insert([
											'year' => 2,
											'value_bugeted' => 133967719,
											'value_comitted' => 97818363,
											'value_paid' => 83179399,
											'own' => FALSE,
											'nation' => TRUE,
											'royalties' => FALSE,
											'funds' => FALSE,
											'functioning' => TRUE,
											'compensation' => FALSE,
											'debt_service' => FALSE,
											'cost_sources_id' => $idFuenteGasto3,
											'p_a_i_id' => $idpai1,
											'group_id' => 21,
											]);
											$idGasto16 = DB::getPdo()->lastInsertId();

											
											
										DB::table('financial_costs')->insert([
											'year' => 2,
											'value_bugeted' => 425100828,
											'value_comitted' => 425100828,
											'value_paid' => 329393638.49,
											'own' => FALSE,
											'nation' => TRUE,
											'royalties' => FALSE,
											'funds' => FALSE,
											'functioning' => TRUE,
											'compensation' => FALSE,
											'debt_service' => FALSE,
											'cost_sources_id' => $idFuenteGasto7,
											'p_a_i_id' => $idpai1,
											'group_id' => 21,
											]);
											$idGasto17 = DB::getPdo()->lastInsertId();
											

											
											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 1516607699,
												'value_comitted' => 926978628,
												'value_paid' => 795595413,
												'own' => TRUE,
												'nation' => FALSE,
												'royalties' => FALSE,
												'funds' => FALSE,
												'functioning' => TRUE,
												'compensation' => FALSE,
												'debt_service' => FALSE,
												'cost_sources_id' => $idFuenteGasto1,
												'p_a_i_id' => $idpai1,
												'group_id' => 21,
												]);
												$idGasto18 = DB::getPdo()->lastInsertId();
												
												
											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 3115528331,
												'value_comitted' => 2761410413.86,
												'value_paid' => 2317395982.91,
												'own' => TRUE,
												'nation' => FALSE,
												'royalties' => FALSE,
												'funds' => FALSE,
												'functioning' => TRUE,
												'compensation' => FALSE,
												'debt_service' => FALSE,
												'cost_sources_id' => $idFuenteGasto2,
												'p_a_i_id' => $idpai1,
												'group_id' => 21,
												]);
												$idGasto19 = DB::getPdo()->lastInsertId();
												
												
											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 2106976,
												'value_comitted' => 2106976,
												'value_paid' => 2106976,
												'own' => TRUE,
												'nation' => FALSE,
												'royalties' => FALSE,
												'funds' => FALSE,
												'functioning' => TRUE,
												'compensation' => FALSE,
												'debt_service' => FALSE,
												'cost_sources_id' => $idFuenteGasto3,
												'p_a_i_id' => $idpai1,
												'group_id' => 21,
												]);
												$idGasto20 = DB::getPdo()->lastInsertId();
												
												
											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 1146249199,
												'value_comitted' => 942342246,
												'value_paid' => 942342246,
												'own' => TRUE,
												'nation' => FALSE,
												'royalties' => FALSE,
												'funds' => FALSE,
												'functioning' => FALSE,
												'compensation' => TRUE,
												'debt_service' => FALSE,
												'cost_sources_id' => $idFuenteGasto4,
												'p_a_i_id' => $idpai1,
												'group_id' => 21,
												]);
												$idGasto21 = DB::getPdo()->lastInsertId();


											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 28012579,
												'value_comitted' => 28012579,
												'value_paid' => 28012579,
												'own' => TRUE,
												'nation' => FALSE,
												'royalties' => FALSE,
												'funds' => FALSE,
												'functioning' => TRUE,
												'compensation' => FALSE,
												'debt_service' => FALSE,
												'cost_sources_id' => $idFuenteGasto8,
												'p_a_i_id' => $idpai1,
												'group_id' => 21,
												]);
												$idGasto22 = DB::getPdo()->lastInsertId();
												
												
												DB::table('financial_costs')->insert([
													'year' => 3,
													'value_bugeted' => 3317921074,
													'value_comitted' => 3317921074,
													'value_paid' => 3266699178,
													'own' => FALSE,
													'nation' => TRUE,
													'royalties' => FALSE,
													'funds' => FALSE,
													'functioning' => TRUE,
													'compensation' => FALSE,
													'debt_service' => FALSE,
													'cost_sources_id' => $idFuenteGasto1,
													'p_a_i_id' => $idpai1,
													'group_id' => 21,
													]);
													$idGasto23 = DB::getPdo()->lastInsertId();
													
													
												DB::table('financial_costs')->insert([
													'year' => 3,
													'value_bugeted' => 380334542,
													'value_comitted' => 380316000,
													'value_paid' => 241805111,
													'own' => FALSE,
													'nation' => TRUE,
													'royalties' => FALSE,
													'funds' => FALSE,
													'functioning' => TRUE,
													'compensation' => FALSE,
													'debt_service' => FALSE,
													'cost_sources_id' => $idFuenteGasto2,
													'p_a_i_id' => $idpai1,
													'group_id' => 21,
													]);
													$idGasto24 = DB::getPdo()->lastInsertId();
													
													
												DB::table('financial_costs')->insert([
													'year' => 3,
													'value_bugeted' => 168174999,
													'value_comitted' => 69033493,
													'value_paid' => 61256793,
													'own' => FALSE,
													'nation' => TRUE,
													'royalties' => FALSE,
													'funds' => FALSE,
													'functioning' => TRUE,
													'compensation' => FALSE,
													'debt_service' => FALSE,
													'cost_sources_id' => $idFuenteGasto3,
													'p_a_i_id' => $idpai1,
													'group_id' => 21,
													]);
													$idGasto25 = DB::getPdo()->lastInsertId();
													DB::table('activity_sources')->insert([
														'activity_id' => $idactivity10,
														'source_id' =>$idPlan20,
														'value' => 495449839,
														'goal' => 0,
														'evidence_balance' => 495449839,
														'age' => 1,
														]);
														$idactivitySource1 = DB::getPdo()->lastInsertId();
														
														
														
													DB::table('activity_sources')->insert([
														'activity_id' => $idactivity16,
														'source_id' =>$idPlan20,
														'value' => 13721462538,
														'goal' => 0,
														'evidence_balance' => 13721462538,
														'age' => 1,
														]);
														$idactivitySource2 = DB::getPdo()->lastInsertId();
														
														
														
													DB::table('activity_sources')->insert([
														'activity_id' => $idactivity21,
														'source_id' =>$idPlan20,
														'value' => 170833316,
														'goal' => 0,
														'evidence_balance' => 170833316,
														'age' => 1,
														]);
														$idactivitySource3 = DB::getPdo()->lastInsertId();
														
														
														
													DB::table('activity_sources')->insert([
														'activity_id' => $idactivity30,
														'source_id' =>$idPlan20,
														'value' => 2278258581,
														'goal' => 0,
														'evidence_balance' => 2278258581,
														'age' => 1,
														]);
														$idactivitySource4 = DB::getPdo()->lastInsertId();
														
														
														
													DB::table('activity_sources')->insert([
														'activity_id' => $idactivity38,
														'source_id' =>$idPlan20,
														'value' => 476210000,
														'goal' => 0,
														'evidence_balance' => 476210000,
														'age' => 1,
														]);
														$idactivitySource5 = DB::getPdo()->lastInsertId();
														
														
														
													DB::table('activity_sources')->insert([
														'activity_id' => $idactivity49,
														'source_id' =>$idPlan20,
														'value' => 1561759620,
														'goal' => 0,
														'evidence_balance' => 1561759620,
														'age' => 1,
														]);
														$idactivitySource6 = DB::getPdo()->lastInsertId();
														
														
														
													DB::table('activity_sources')->insert([
														'activity_id' => $idactivity56,
														'source_id' =>$idPlan19,
														'value' => 337618345.32,
														'goal' => 0,
														'evidence_balance' => 337618345.32,
														'age' => 1,
														]);
														$idactivitySource7 = DB::getPdo()->lastInsertId();
														
														
														
													DB::table('activity_sources')->insert([
														'activity_id' => $idactivity58,
														'source_id' =>$idPlan1,
														'value' => 874716907.02,
														'goal' => 0,
														'evidence_balance' => 874716907.02,
														'age' => 1,
														]);
														$idactivitySource8 = DB::getPdo()->lastInsertId();
														
														
														
													DB::table('activity_sources')->insert([
														'activity_id' => $idactivity60,
														'source_id' =>$idPlan2,
														'value' => 648859755.02,
														'goal' => 0,
														'evidence_balance' => 648859755.02,
														'age' => 1,
														]);
														$idactivitySource9 = DB::getPdo()->lastInsertId();
														
														
														
													DB::table('activity_sources')->insert([
														'activity_id' => $idactivity62,
														'source_id' =>$idPlan3,
														'value' => 399092733,
														'goal' => 0,
														'evidence_balance' => 399092733,
														'age' => 1,
														]);
														$idactivitySource10 = DB::getPdo()->lastInsertId();
														
														
														
													DB::table('activity_sources')->insert([
														'activity_id' => $idactivity64,
														'source_id' =>$idPlan3,
														'value' => 11028654.0199995,
														'goal' => 0,
														'evidence_balance' => 11028654.0199995,
														'age' => 1,
														]);
														$idactivitySource11 = DB::getPdo()->lastInsertId();
														
														
														
													DB::table('activity_sources')->insert([
														'activity_id' => $idactivity66,
														'source_id' =>$idPlan5,
														'value' => 208040058.919999,
														'goal' => 0,
														'evidence_balance' => 208040058.919999,
														'age' => 1,
														]);
														$idactivitySource12 = DB::getPdo()->lastInsertId();
														
														
														
													DB::table('activity_sources')->insert([
														'activity_id' => $idactivity74,
														'source_id' =>$idPlan8,
														'value' => 703410306,
														'goal' => 0,
														'evidence_balance' => 703410306,
														'age' => 1,
														]);
														$idactivitySource13 = DB::getPdo()->lastInsertId();
														
														
														
													DB::table('activity_sources')->insert([
														'activity_id' => $idactivity80,
														'source_id' =>$idPlan9,
														'value' => 311029692,
														'goal' => 0,
														'evidence_balance' => 311029692,
														'age' => 1,
														]);
														$idactivitySource14 = DB::getPdo()->lastInsertId();
														
														
														
														DB::table('activity_sources')->insert([
															'activity_id' => $idactivity49,
															'source_id' =>$idPlan21,
															'value' => 4126919956.32,
															'goal' => 0,
															'evidence_balance' => 4126919956.32,
															'age' => 1,
															]);
															$idactivitySource15 = DB::getPdo()->lastInsertId();
															
															
															
														DB::table('activity_sources')->insert([
															'activity_id' => $idactivity56,
															'source_id' =>$idPlan1,
															'value' => 1659968638.68,
															'goal' => 0,
															'evidence_balance' => 1659968638.68,
															'age' => 1,
															]);
															$idactivitySource16 = DB::getPdo()->lastInsertId();
															
															
															
														DB::table('activity_sources')->insert([
															'activity_id' => $idactivity58,
															'source_id' =>$idPlan2,
															'value' => 1311140244.98,
															'goal' => 0,
															'evidence_balance' => 1311140244.98,
															'age' => 1,
															]);
															$idactivitySource17 = DB::getPdo()->lastInsertId();
															
															
															
														DB::table('activity_sources')->insert([
															'activity_id' => $idactivity60,
															'source_id' =>$idPlan3,
															'value' => 102339282.98,
															'goal' => 0,
															'evidence_balance' => 102339282.98,
															'age' => 1,
															]);
															$idactivitySource18 = DB::getPdo()->lastInsertId();
															
															
															
														DB::table('activity_sources')->insert([
															'activity_id' => $idactivity64,
															'source_id' =>$idPlan4,
															'value' => 234000000,
															'goal' => 0,
															'evidence_balance' => 234000000,
															'age' => 1,
															]);
															$idactivitySource19 = DB::getPdo()->lastInsertId();
															
															
															
														DB::table('activity_sources')->insert([
															'activity_id' => $idactivity66,
															'source_id' =>$idPlan8,
															'value' => 45370247.0800005,
															'goal' => 0,
															'evidence_balance' => 45370247.0800005,
															'age' => 1,
															]);
															$idactivitySource20 = DB::getPdo()->lastInsertId();
															
															
															
														DB::table('activity_sources')->insert([
															'activity_id' => $idactivity74,
															'source_id' =>$idPlan9,
															'value' => 80292108,
															'goal' => 0,
															'evidence_balance' => 80292108,
															'age' => 1,
															]);
															$idactivitySource21 = DB::getPdo()->lastInsertId();
															
															
															
														DB::table('activity_sources')->insert([
															'activity_id' => $idactivity80,
															'source_id' =>$idPlan10,
															'value' => 200000000,
															'goal' => 0,
															'evidence_balance' => 200000000,
															'age' => 1,
															]);
															$idactivitySource22 = DB::getPdo()->lastInsertId();
															
															
															
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity49,
																'source_id' =>$idPlan19,
																'value' => 1640506067.68,
																'goal' => 0,
																'evidence_balance' => 1640506067.68,
																'age' => 1,
																]);
																$idactivitySource23 = DB::getPdo()->lastInsertId();
																
								
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity64,
																'source_id' =>$idPlan5,
																'value' => 180142109.98,
																'goal' => 0,
																'evidence_balance' => 180142109.98,
																'age' => 1,
																]);
																$idactivitySource24 = DB::getPdo()->lastInsertId();


																DB::table('activity_sources')->insert([
																	'activity_id' => $idactivity80,
																	'source_id' =>$idPlan11,
																	'value' => 12056528.9999999,
																	'goal' => 0,
																	'evidence_balance' => 12056528.9999999,
																	'age' => 1,
																	]);
																	$idactivitySource25 = DB::getPdo()->lastInsertId();
																	
																	
																
																
																DB::table('evidence_financial')->insert([
																	'evidence_id' => $idevidencia10,
																	'activity_source_id' =>$idactivitySource1,
																	'value' => 285026890,
																	]);
																	$idevidenceFinancial1 = DB::getPdo()->lastInsertId();
																	
																	
																	
																DB::table('evidence_financial')->insert([
																	'evidence_id' => $idevidencia16,
																	'activity_source_id' =>$idactivitySource2,
																	'value' => 12425622812,
																	]);
																	$idevidenceFinancial2 = DB::getPdo()->lastInsertId();
																	
																	
																	
																DB::table('evidence_financial')->insert([
																	'evidence_id' => $idevidencia21,
																	'activity_source_id' =>$idactivitySource3,
																	'value' => 164516142,
																	]);
																	$idevidenceFinancial3 = DB::getPdo()->lastInsertId();
																	
																	
																	
																DB::table('evidence_financial')->insert([
																	'evidence_id' => $idevidencia30,
																	'activity_source_id' =>$idactivitySource4,
																	'value' => 1051746420.5,
																	]);
																	$idevidenceFinancial4 = DB::getPdo()->lastInsertId();
																	
																	
																	
																DB::table('evidence_financial')->insert([
																	'evidence_id' => $idevidencia38,
																	'activity_source_id' =>$idactivitySource5,
																	'value' => 435906415,
																	]);
																	$idevidenceFinancial5 = DB::getPdo()->lastInsertId();
																	
																	
																	
																DB::table('evidence_financial')->insert([
																	'evidence_id' => $idevidencia49,
																	'activity_source_id' =>$idactivitySource6,
																	'value' => 1561759620,
																	]);
																	$idevidenceFinancial6 = DB::getPdo()->lastInsertId();
																	
																	
																	
																DB::table('evidence_financial')->insert([
																	'evidence_id' => $idevidencia56,
																	'activity_source_id' =>$idactivitySource7,
																	'value' => 337618345.32,
																	]);
																	$idevidenceFinancial7 = DB::getPdo()->lastInsertId();
																	
																	
																	
																DB::table('evidence_financial')->insert([
																	'evidence_id' => $idevidencia58,
																	'activity_source_id' =>$idactivitySource8,
																	'value' => 874716907.02,
																	]);
																	$idevidenceFinancial8 = DB::getPdo()->lastInsertId();
																	
																	
																	
																DB::table('evidence_financial')->insert([
																	'evidence_id' => $idevidencia60,
																	'activity_source_id' =>$idactivitySource9,
																	'value' => 648859755.02,
																	]);
																	$idevidenceFinancial9 = DB::getPdo()->lastInsertId();
																	
																	
																	
																DB::table('evidence_financial')->insert([
																	'evidence_id' => $idevidencia62,
																	'activity_source_id' =>$idactivitySource10,
																	'value' => 659191819,
																	]);
																	$idevidenceFinancial10 = DB::getPdo()->lastInsertId();
																	
																	
																	
																DB::table('evidence_financial')->insert([
																	'evidence_id' => $idevidencia64,
																	'activity_source_id' =>$idactivitySource11,
																	'value' => 11028654.0199995,
																	]);
																	$idevidenceFinancial11 = DB::getPdo()->lastInsertId();
																	
																	
																	
																DB::table('evidence_financial')->insert([
																	'evidence_id' => $idevidencia66,
																	'activity_source_id' =>$idactivitySource12,
																	'value' => 208040058.919999,
																	]);
																	$idevidenceFinancial12 = DB::getPdo()->lastInsertId();
																	
																	
																	
																DB::table('evidence_financial')->insert([
																	'evidence_id' => $idevidencia74,
																	'activity_source_id' =>$idactivitySource13,
																	'value' => 703410306,
																	]);
																	$idevidenceFinancial13 = DB::getPdo()->lastInsertId();
																	
																	
																	
																DB::table('evidence_financial')->insert([
																	'evidence_id' => $idevidencia80,
																	'activity_source_id' =>$idactivitySource14,
																	'value' => 311029692,
																	]);
																	$idevidenceFinancial14 = DB::getPdo()->lastInsertId();
																	
																	
																	
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia49,
																		'activity_source_id' =>$idactivitySource15,
																		'value' => 4126919956.32,
																		]);
																		$idevidenceFinancial15 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia56,
																		'activity_source_id' =>$idactivitySource16,
																		'value' => 57122058.6800003,
																		]);
																		$idevidenceFinancial16 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia58,
																		'activity_source_id' =>$idactivitySource17,
																		'value' => 1301336427.98,
																		]);
																		$idevidenceFinancial17 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia60,
																		'activity_source_id' =>$idactivitySource18,
																		'value' => 1527193579.98,
																		]);
																		$idevidenceFinancial18 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia64,
																		'activity_source_id' =>$idactivitySource19,
																		'value' => 234000000,
																		]);
																		$idevidenceFinancial19 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia66,
																		'activity_source_id' =>$idactivitySource20,
																		'value' => 170583330.080001,
																		]);
																		$idevidenceFinancial20 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia74,
																		'activity_source_id' =>$idactivitySource21,
																		'value' => 12347550,
																		]);
																		$idevidenceFinancial21 = DB::getPdo()->lastInsertId();
																		

																		DB::table('evidence_financial')->insert([
																			'evidence_id' => $idevidencia80,
																			'activity_source_id' =>$idactivitySource22,
																			'value' => 198755866.16,
																			]);
																			$idevidenceFinancial22 = DB::getPdo()->lastInsertId();

																		
																		DB::table('evidence_financial')->insert([
																			'evidence_id' => $idevidencia49,
																			'activity_source_id' =>$idactivitySource23,
																			'value' => 1137792332.68,
																			]);
																			$idevidenceFinancial23 = DB::getPdo()->lastInsertId();
																			
																			
																			
																		DB::table('evidence_financial')->insert([
																			'evidence_id' => $idevidencia64,
																			'activity_source_id' =>$idactivitySource24,
																			'value' => 69564847.9800005,
																			]);
																			$idevidenceFinancial24 = DB::getPdo()->lastInsertId();
																		
																		

																			
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity10,
																				'source_id' =>$idPlan41,
																				'value' => 309331486,
																				'goal' => 0,
																				'evidence_balance' => 309331486,
																				'age' => 2,
																				]);
																				$idactivitySource26 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity16,
																				'source_id' =>$idPlan41,
																				'value' => 157628995,
																				'goal' => 0,
																				'evidence_balance' => 157628995,
																				'age' => 2,
																				]);
																				$idactivitySource27 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity21,
																				'source_id' =>$idPlan41,
																				'value' => 161484366,
																				'goal' => 0,
																				'evidence_balance' => 161484366,
																				'age' => 2,
																				]);
																				$idactivitySource28 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity30,
																				'source_id' =>$idPlan41,
																				'value' => 1843988981,
																				'goal' => 0,
																				'evidence_balance' => 1843988981,
																				'age' => 2,
																				]);
																				$idactivitySource29 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity38,
																				'source_id' =>$idPlan35,
																				'value' => 653794079,
																				'goal' => 0,
																				'evidence_balance' => 653794079,
																				'age' => 2,
																				]);
																				$idactivitySource30 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity49,
																				'source_id' =>$idPlan35,
																				'value' => 1023709545,
																				'goal' => 0,
																				'evidence_balance' => 1023709545,
																				'age' => 2,
																				]);
																				$idactivitySource31 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity56,
																				'source_id' =>$idPlan37,
																				'value' => 714018181,
																				'goal' => 0,
																				'evidence_balance' => 714018181,
																				'age' => 2,
																				]);
																				$idactivitySource32 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity58,
																				'source_id' =>$idPlan37,
																				'value' => 50830493,
																				'goal' => 0,
																				'evidence_balance' => 50830493,
																				'age' => 2,
																				]);
																				$idactivitySource33 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity60,
																				'source_id' =>$idPlan37,
																				'value' => 668900323,
																				'goal' => 0,
																				'evidence_balance' => 668900323,
																				'age' => 2,
																				]);
																				$idactivitySource34 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity62,
																				'source_id' =>$idPlan36,
																				'value' => 686169172,
																				'goal' => 0,
																				'evidence_balance' => 686169172,
																				'age' => 2,
																				]);
																				$idactivitySource35 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity64,
																				'source_id' =>$idPlan36,
																				'value' => 136025071,
																				'goal' => 0,
																				'evidence_balance' => 136025071,
																				'age' => 2,
																				]);
																				$idactivitySource36 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity66,
																				'source_id' =>$idPlan25,
																				'value' => 143480535,
																				'goal' => 0,
																				'evidence_balance' => 143480535,
																				'age' => 2,
																				]);
																				$idactivitySource37 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity74,
																				'source_id' =>$idPlan26,
																				'value' => 387004123,
																				'goal' => 0,
																				'evidence_balance' => 387004123,
																				'age' => 2,
																				]);
																				$idactivitySource38 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity80,
																				'source_id' =>$idPlan29,
																				'value' => 253757148,
																				'goal' => 0,
																				'evidence_balance' => 253757148,
																				'age' => 2,
																				]);
																				$idactivitySource39 = DB::getPdo()->lastInsertId();
																				
																				
																				
																				DB::table('activity_sources')->insert([
																					'activity_id' => $idactivity30,
																					'source_id' =>$idPlan35,
																					'value' => 718474166,
																					'goal' => 0,
																					'evidence_balance' => 718474166,
																					'age' => 2,
																					]);
																					$idactivitySource40 = DB::getPdo()->lastInsertId();
																					
																					
																					
																				DB::table('activity_sources')->insert([
																					'activity_id' => $idactivity49,
																					'source_id' =>$idPlan23,
																					'value' => 1900000000,
																					'goal' => 0,
																					'evidence_balance' => 1900000000,
																					'age' => 2,
																					]);
																					$idactivitySource41 = DB::getPdo()->lastInsertId();


																					DB::table('activity_sources')->insert([
																						'activity_id' => $idactivity60,
																						'source_id' =>$idPlan36,
																						'value' => 176805757,
																						'goal' => 0,
																						'evidence_balance' => 176805757,
																						'age' => 2,
																						]);
																						$idactivitySource42 = DB::getPdo()->lastInsertId();
																						


																				DB::table('activity_sources')->insert([
																					'activity_id' => $idactivity64,
																					'source_id' =>$idPlan25,
																					'value' => 306519465,
																					'goal' => 0,
																					'evidence_balance' => 306519465,
																					'age' => 2,
																					]);
																					$idactivitySource43 = DB::getPdo()->lastInsertId();
																					
																					
																					
																				DB::table('activity_sources')->insert([
																					'activity_id' => $idactivity66,
																					'source_id' =>$idPlan26,
																					'value' => 72995877,
																					'goal' => 0,
																					'evidence_balance' => 72995877,
																					'age' => 2,
																					]);
																					$idactivitySource44 = DB::getPdo()->lastInsertId();
																					
																					
																					
																				DB::table('activity_sources')->insert([
																					'activity_id' => $idactivity74,
																					'source_id' =>$idPlan30,
																					'value' => 402808800,
																					'goal' => 0,
																					'evidence_balance' => 402808800,
																					'age' => 2,
																					]);
																					$idactivitySource45 = DB::getPdo()->lastInsertId();
																					
																					
																					
																				DB::table('activity_sources')->insert([
																					'activity_id' => $idactivity80,
																					'source_id' =>$idPlan34,
																					'value' => 52755000,
																					'goal' => 0,
																					'evidence_balance' => 52755000,
																					'age' => 2,
																					]);
																					$idactivitySource46 = DB::getPdo()->lastInsertId();
																					
																					
																					
																					DB::table('activity_sources')->insert([
																						'activity_id' => $idactivity49,
																						'source_id' =>$idPlan37,
																						'value' => 559351422,
																						'goal' => 0,
																						'evidence_balance' => 559351422,
																						'age' => 2,
																						]);
																						$idactivitySource47 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('activity_sources')->insert([
																						'activity_id' => $idactivity74,
																						'source_id' =>$idPlan29,
																						'value' => 76242852,
																						'goal' => 0,
																						'evidence_balance' => 76242852,
																						'age' => 2,
																						]);
																						$idactivitySource48 = DB::getPdo()->lastInsertId();




																				     DB::table('activity_sources')->insert([
																							'activity_id' => $idactivity80,
																							'source_id' =>$idPlan32,
																							'value' => 10000000,
																							'goal' => 0,
																							'evidence_balance' => 10000000,
																							'age' => 2,
																							]);
																							$idactivitySource49 = DB::getPdo()->lastInsertId();
																							
																							
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity80,
																								'source_id' =>$idPlan27,
																								'value' => 2000000,
																								'goal' => 0,
																								'evidence_balance' => 2000000,
																								'age' => 2,
																								]);
																								$idactivitySource50 = DB::getPdo()->lastInsertId();
																								
																								DB::table('activity_sources')->insert([
																									'activity_id' => $idactivity80,
																									'source_id' =>$idPlan33,
																									'value' => 1000000,
																									'goal' => 0,
																									'evidence_balance' => 1000000,
																									'age' => 2,
																									]);
																									$idactivitySource51 = DB::getPdo()->lastInsertId();

																									DB::table('activity_sources')->insert([
																										'activity_id' => $idactivity80,
																										'source_id' =>$idPlan38,
																										'value' => 1000000,
																										'goal' => 0,
																										'evidence_balance' => 1000000,
																										'age' => 2,
																										]);
																										$idactivitySource52 = DB::getPdo()->lastInsertId();
																										

																							DB::table('evidence_financial')->insert([
																								'evidence_id' => $idevidencia90,
																								'activity_source_id' =>$idactivitySource26,
																								'value' => 299947251,
																								]);
																								$idevidenceFinancial26 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('evidence_financial')->insert([
																								'evidence_id' => $idevidencia96,
																								'activity_source_id' =>$idactivitySource27,
																								'value' => 135928332,
																								]);
																								$idevidenceFinancial27 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('evidence_financial')->insert([
																								'evidence_id' => $idevidencia101,
																								'activity_source_id' =>$idactivitySource28,
																								'value' => 158945730,
																								]);
																								$idevidenceFinancial28 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('evidence_financial')->insert([
																								'evidence_id' => $idevidencia110,
																								'activity_source_id' =>$idactivitySource29,
																								'value' => 1843988981,
																								]);
																								$idevidenceFinancial29 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('evidence_financial')->insert([
																								'evidence_id' => $idevidencia118,
																								'activity_source_id' =>$idactivitySource30,
																								'value' => 605098896,
																								]);
																								$idevidenceFinancial30 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('evidence_financial')->insert([
																								'evidence_id' => $idevidencia129,
																								'activity_source_id' =>$idactivitySource31,
																								'value' => 1023709545,
																								]);
																								$idevidenceFinancial31 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('evidence_financial')->insert([
																								'evidence_id' => $idevidencia136,
																								'activity_source_id' =>$idactivitySource32,
																								'value' => 465174776,
																								]);
																								$idevidenceFinancial32 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('evidence_financial')->insert([
																								'evidence_id' => $idevidencia138,
																								'activity_source_id' =>$idactivitySource33,
																								'value' => 50629426,
																								]);
																								$idevidenceFinancial33 = DB::getPdo()->lastInsertId();

																						
																								DB::table('evidence_financial')->insert([
																									'evidence_id' => $idevidencia140,
																									'activity_source_id' =>$idactivitySource34,
																									'value' => 50629426,
																									]);
																									$idevidenceFinancial34 = DB::getPdo()->lastInsertId();
																									

																								
																							DB::table('evidence_financial')->insert([
																								'evidence_id' => $idevidencia142,
																								'activity_source_id' =>$idactivitySource35,
																								'value' => 819878638.5,
																								]);
																								$idevidenceFinancial35 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('evidence_financial')->insert([
																								'evidence_id' => $idevidencia144,
																								'activity_source_id' =>$idactivitySource36,
																								'value' => 136025071,
																								]);
																								$idevidenceFinancial36 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('evidence_financial')->insert([
																								'evidence_id' => $idevidencia146,
																								'activity_source_id' =>$idactivitySource37,
																								'value' => 143480535,
																								]);
																								$idevidenceFinancial37 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('evidence_financial')->insert([
																								'evidence_id' => $idevidencia154,
																								'activity_source_id' =>$idactivitySource38,
																								'value' => 387004123,
																								]);
																								$idevidenceFinancial38 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('evidence_financial')->insert([
																								'evidence_id' => $idevidencia160,
																								'activity_source_id' =>$idactivitySource39,
																								'value' => 253757148,
																								]);
																								$idevidenceFinancial39 = DB::getPdo()->lastInsertId();
																								
																								
																								
																								DB::table('evidence_financial')->insert([
																									'evidence_id' => $idevidencia110,
																									'activity_source_id' =>$idactivitySource40,
																									'value' => 267160173.5,
																									]);
																									$idevidenceFinancial40 = DB::getPdo()->lastInsertId();
																									
																									
																									
																								DB::table('evidence_financial')->insert([
																									'evidence_id' => $idevidencia129,
																									'activity_source_id' =>$idactivitySource41,
																									'value' => 1900000000,
																									]);
																									$idevidenceFinancial41 = DB::getPdo()->lastInsertId();

																									
																								DB::table('evidence_financial')->insert([
																									'evidence_id' => $idevidencia144,
																									'activity_source_id' =>$idactivitySource43,
																									'value' => 527418654,
																									]);
																									$idevidenceFinancial43 = DB::getPdo()->lastInsertId();
																									
																									
																									
																								DB::table('evidence_financial')->insert([
																									'evidence_id' => $idevidencia146,
																									'activity_source_id' =>$idactivitySource44,
																									'value' => 216613325,
																									]);
																									$idevidenceFinancial44 = DB::getPdo()->lastInsertId();
																									
																									
																									
																								DB::table('evidence_financial')->insert([
																									'evidence_id' => $idevidencia154,
																									'activity_source_id' =>$idactivitySource45,
																									'value' => 402808800,
																									]);
																									$idevidenceFinancial45 = DB::getPdo()->lastInsertId();
																									
																							
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia160,
																										'activity_source_id' =>$idactivitySource46,
																										'value' => 42195158,
																										]);
																										$idevidenceFinancial46 = DB::getPdo()->lastInsertId();
																										
																								
																									
																									
																									
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia129,
																										'activity_source_id' =>$idactivitySource47,
																										'value' => 276732546.58,
																										]);
																										$idevidenceFinancial47 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia154,
																										'activity_source_id' =>$idactivitySource48,
																										'value' => 76242852,
																										]);
																										$idevidenceFinancial48 = DB::getPdo()->lastInsertId();

																											DB::table('activity_sources')->insert([
																												'activity_id' => $idactivity10,
																												'source_id' =>$idPlan64,
																												'value' => 427762569,
																												'goal' => 0,
																												'evidence_balance' => 427762569,
																												'age' => 3,
																												]);
																												$idactivitySource53 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('activity_sources')->insert([
																												'activity_id' => $idactivity16,
																												'source_id' =>$idPlan64,
																												'value' => 164099217,
																												'goal' => 0,
																												'evidence_balance' => 164099217,
																												'age' => 3,
																												]);
																												$idactivitySource54 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('activity_sources')->insert([
																												'activity_id' => $idactivity21,
																												'source_id' =>$idPlan64,
																												'value' => 155635020,
																												'goal' => 0,
																												'evidence_balance' => 155635020,
																												'age' => 3,
																												]);
																												$idactivitySource55 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('activity_sources')->insert([
																												'activity_id' => $idactivity30,
																												'source_id' =>$idPlan64,
																												'value' => 1117342519,
																												'goal' => 0,
																												'evidence_balance' => 1117342519,
																												'age' => 3,
																												]);
																												$idactivitySource56 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('activity_sources')->insert([
																												'activity_id' => $idactivity38,
																												'source_id' =>$idPlan64,
																												'value' => 456768954,
																												'goal' => 0,
																												'evidence_balance' => 456768954,
																												'age' => 3,
																												]);
																												$idactivitySource57 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('activity_sources')->insert([
																												'activity_id' => $idactivity49,
																												'source_id' =>$idPlan43,
																												'value' => 1883131376.3,
																												'goal' => 0,
																												'evidence_balance' => 1883131376.3,
																												'age' => 3,
																												]);
																												$idactivitySource58 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('activity_sources')->insert([
																												'activity_id' => $idactivity56,
																												'source_id' =>$idPlan51,
																												'value' => 515405404,
																												'goal' => 0,
																												'evidence_balance' => 515405404,
																												'age' => 3,
																												]);
																												$idactivitySource59 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('activity_sources')->insert([
																												'activity_id' => $idactivity58,
																												'source_id' =>$idPlan51,
																												'value' => 1565321.29999995,
																												'goal' => 0,
																												'evidence_balance' => 1565321.29999995,
																												'age' => 3,
																												]);
																												$idactivitySource60 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('activity_sources')->insert([
																												'activity_id' => $idactivity60,
																												'source_id' =>$idPlan44,
																												'value' => 72913050.3,
																												'goal' => 0,
																												'evidence_balance' => 72913050.3,
																												'age' => 3,
																												]);
																												$idactivitySource61 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('activity_sources')->insert([
																												'activity_id' => $idactivity62,
																												'source_id' =>$idPlan45,
																												'value' => 188681394.3,
																												'goal' => 0,
																												'evidence_balance' => 188681394.3,
																												'age' => 3,
																												]);
																												$idactivitySource62 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('activity_sources')->insert([
																												'activity_id' => $idactivity64,
																												'source_id' =>$idPlan46,
																												'value' => 206673980.3,
																												'goal' => 0,
																												'evidence_balance' => 206673980.3,
																												'age' => 3,
																												]);
																												$idactivitySource63 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('activity_sources')->insert([
																												'activity_id' => $idactivity66,
																												'source_id' =>$idPlan47,
																												'value' => 155915411.1,
																												'goal' => 0,
																												'evidence_balance' => 155915411.1,
																												'age' => 3,
																												]);
																												$idactivitySource64 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('activity_sources')->insert([
																												'activity_id' => $idactivity74,
																												'source_id' =>$idPlan50,
																												'value' => 445394721.1,
																												'goal' => 0,
																												'evidence_balance' => 445394721.1,
																												'age' => 3,
																												]);
																												$idactivitySource65 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('activity_sources')->insert([
																												'activity_id' => $idactivity80,
																												'source_id' =>$idPlan54,
																												'value' => 157660786.1,
																												'goal' => 0,
																												'evidence_balance' => 157660786.1,
																												'age' => 3,
																												]);
																												$idactivitySource66 = DB::getPdo()->lastInsertId();
																												
																												
																												
																												DB::table('activity_sources')->insert([
																													'activity_id' => $idactivity38,
																													'source_id' =>$idPlan43,
																													'value' => 153326914,
																													'goal' => 0,
																													'evidence_balance' => 153326914,
																													'age' => 3,
																													]);
																													$idactivitySource67 = DB::getPdo()->lastInsertId();
																													
																													
																													
																												DB::table('activity_sources')->insert([
																													'activity_id' => $idactivity49,
																													'source_id' =>$idPlan51,
																													'value' => 743029274.7,
																													'goal' => 0,
																													'evidence_balance' => 743029274.7,
																													'age' => 3,
																													]);
																													$idactivitySource68 = DB::getPdo()->lastInsertId();
																													
																													
																													
																												DB::table('activity_sources')->insert([
																													'activity_id' => $idactivity58,
																													'source_id' =>$idPlan44,
																													'value' => 71839949.7,
																													'goal' => 0,
																													'evidence_balance' => 71839949.7,
																													'age' => 3,
																													]);
																													$idactivitySource69 = DB::getPdo()->lastInsertId();
																													
																													
																													
																												DB::table('activity_sources')->insert([
																													'activity_id' => $idactivity60,
																													'source_id' =>$idPlan45,
																													'value' => 216318605.7,
																													'goal' => 0,
																													'evidence_balance' => 216318605.7,
																													'age' => 3,
																													]);
																													$idactivitySource70 = DB::getPdo()->lastInsertId();
																													
																													
																													
																												DB::table('activity_sources')->insert([
																													'activity_id' => $idactivity62,
																													'source_id' =>$idPlan46,
																													'value' => 540326019.7,
																													'goal' => 0,
																													'evidence_balance' => 540326019.7,
																													'age' => 3,
																													]);
																													$idactivitySource71 = DB::getPdo()->lastInsertId();
																													
																													
																													
																												DB::table('activity_sources')->insert([
																													'activity_id' => $idactivity64,
																													'source_id' =>$idPlan47,
																													'value' => 190115996.7,
																													'goal' => 0,
																													'evidence_balance' => 190115996.7,
																													'age' => 3,
																													]);
																													$idactivitySource72 = DB::getPdo()->lastInsertId();

																													DB::table('activity_sources')->insert([
																														'activity_id' => $idactivity66,
																														'source_id' =>$idPlan50,
																														'value' => 22605278.9,
																														'goal' => 0,
																														'evidence_balance' => 22605278.9,
																														'age' => 3,
																														]);
																														$idactivitySource73 = DB::getPdo()->lastInsertId();

																												DB::table('activity_sources')->insert([
																													'activity_id' => $idactivity74,
																													'source_id' =>$idPlan48,
																													'value' => 90000000,
																													'goal' => 0,
																													'evidence_balance' => 90000000,
																													'age' => 3,
																													]);
																													$idactivitySource74 = DB::getPdo()->lastInsertId();
																													
																													
																													
																												DB::table('activity_sources')->insert([
																													'activity_id' => $idactivity80,
																													'source_id' =>$idPlan57,
																													'value' => 3000000,
																													'goal' => 0,
																													'evidence_balance' => 3000000,
																													'age' => 3,
																													]);
																													$idactivitySource75 = DB::getPdo()->lastInsertId();
																													
																													
																													
																													DB::table('activity_sources')->insert([
																														'activity_id' => $idactivity74,
																														'source_id' =>$idPlan49,
																														'value' => 1800000,
																														'goal' => 0,
																														'evidence_balance' => 1800000,
																														'age' => 3,
																														]);
																														$idactivitySource76 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('activity_sources')->insert([
																														'activity_id' => $idactivity80,
																														'source_id' =>$idPlan58,
																														'value' => 2000000,
																														'goal' => 0,
																														'evidence_balance' => 2000000,
																														'age' => 3,
																														]);
																														$idactivitySource77 = DB::getPdo()->lastInsertId();
																														
																														
																														
																														DB::table('activity_sources')->insert([
																															'activity_id' => $idactivity74,
																															'source_id' =>$idPlan53,
																															'value' => 1100000000,
																															'goal' => 0,
																															'evidence_balance' => 1100000000,
																															'age' => 3,
																															]);
																															$idactivitySource78 = DB::getPdo()->lastInsertId();
																															
																															
																															
																														DB::table('activity_sources')->insert([
																															'activity_id' => $idactivity80,
																															'source_id' =>$idPlan59,
																															'value' => 1600000,
																															'goal' => 0,
																															'evidence_balance' => 1600000,
																															'age' => 3,
																															]);
																															$idactivitySource79 = DB::getPdo()->lastInsertId();
																															
																															
																															
																															DB::table('activity_sources')->insert([
																																'activity_id' => $idactivity74,
																																'source_id' =>$idPlan54,
																																'value' => 342339213.9,
																																'goal' => 0,
																																'evidence_balance' => 342339213.9,
																																'age' => 3,
																																]);
																																$idactivitySource80 = DB::getPdo()->lastInsertId();
																																
																																
																																
																															DB::table('activity_sources')->insert([
																																'activity_id' => $idactivity80,
																																'source_id' =>$idPlan60,
																																'value' => 3000000,
																																'goal' => 0,
																																'evidence_balance' => 3000000,
																																'age' => 3,
																																]);
																																$idactivitySource81 = DB::getPdo()->lastInsertId();
																																
																																
																																
																																DB::table('activity_sources')->insert([
																																	'activity_id' => $idactivity80,
																																	'source_id' =>$idPlan61,
																																	'value' => 3000000,
																																	'goal' => 0,
																																	'evidence_balance' => 3000000,
																																	'age' => 3,
																																	]);
																																	$idactivitySource82 = DB::getPdo()->lastInsertId();
																																	
																																	
																																		DB::table('activity_sources')->insert([
																																	'activity_id' => $idactivity80,
																																	'source_id' =>$idPlan52,
																																	'value' => 112168640,
																																	'goal' => 0,
																																	'evidence_balance' => 112168640,
																																	'age' => 3,
																																	]);
																																	$idactivitySource83 = DB::getPdo()->lastInsertId();
																																	
																																	
																																	DB::table('activity_sources')->insert([
																																	'activity_id' => $idactivity80,
																																	'source_id' =>$idPlan55,
																																	'value' => 30169715,
																																	'goal' => 0,
																																	'evidence_balance' => 30169715,
																																	'age' => 3,
																																	]);
																																	$idactivitySource84 = DB::getPdo()->lastInsertId();

																																	DB::table('activity_sources')->insert([
																																		'activity_id' => $idactivity80,
																																		'source_id' =>$idPlan56,
																																		'value' => 1400000,
																																		'goal' => 0,
																																		'evidence_balance' => 1400000,
																																		'age' => 3,
																																		]);
																																		$idactivitySource85 = DB::getPdo()->lastInsertId();
																																		

																																	DB::table('evidence_financial')->insert([
																																		'evidence_id' => $idevidencia170,
																																		'activity_source_id' =>$idactivitySource53,
																																		'value' => 231865554,
																																		]);
																																		$idevidenceFinancial53 = DB::getPdo()->lastInsertId();
																																		
																																		
																																		
																																	DB::table('evidence_financial')->insert([
																																		'evidence_id' => $idevidencia176,
																																		'activity_source_id' =>$idactivitySource54,
																																		'value' => 159768396,
																																		]);
																																		$idevidenceFinancial54 = DB::getPdo()->lastInsertId();
																																		
																																		
																																		
																																	DB::table('evidence_financial')->insert([
																																		'evidence_id' => $idevidencia181,
																																		'activity_source_id' =>$idactivitySource55,
																																		'value' => 137170197,
																																		]);
																																		$idevidenceFinancial55 = DB::getPdo()->lastInsertId();
																																		
																																		
																																		
																																	DB::table('evidence_financial')->insert([
																																		'evidence_id' => $idevidencia190,
																																		'activity_source_id' =>$idactivitySource56,
																																		'value' => 968959431.65,
																																		]);
																																		$idevidenceFinancial56 = DB::getPdo()->lastInsertId();
																																		
																																		
																																		
																																	DB::table('evidence_financial')->insert([
																																		'evidence_id' => $idevidencia198,
																																		'activity_source_id' =>$idactivitySource57,
																																		'value' => 456768954,
																																		]);
																																		$idevidenceFinancial57 = DB::getPdo()->lastInsertId();
																																		
																																		
																																		
																																	DB::table('evidence_financial')->insert([
																																		'evidence_id' => $idevidencia209,
																																		'activity_source_id' =>$idactivitySource58,
																																		'value' => 1883131376.3,
																																		]);
																																		$idevidenceFinancial58 = DB::getPdo()->lastInsertId();
																																		
																																		
																																		
																																	DB::table('evidence_financial')->insert([
																																		'evidence_id' => $idevidencia216,
																																		'activity_source_id' =>$idactivitySource59,
																																		'value' => 505440832,
																																		]);
																																		$idevidenceFinancial59 = DB::getPdo()->lastInsertId();
																																		
																																		
																																		
																																	DB::table('evidence_financial')->insert([
																																		'evidence_id' => $idevidencia218,
																																		'activity_source_id' =>$idactivitySource60,
																																		'value' => 1565321.29999995,
																																		]);
																																		$idevidenceFinancial60 = DB::getPdo()->lastInsertId();
																																		
																																		
																																		
																																	DB::table('evidence_financial')->insert([
																																		'evidence_id' => $idevidencia220,
																																		'activity_source_id' =>$idactivitySource61,
																																		'value' => 72913050.3,
																																		]);
																																		$idevidenceFinancial61 = DB::getPdo()->lastInsertId();
																																		
																																		
																																		
																																	DB::table('evidence_financial')->insert([
																																		'evidence_id' => $idevidencia222,
																																		'activity_source_id' =>$idactivitySource62,
																																		'value' => 188681394.3,
																																		]);
																																		$idevidenceFinancial62 = DB::getPdo()->lastInsertId();
																																		
																																		
																																		
																																	DB::table('evidence_financial')->insert([
																																		'evidence_id' => $idevidencia224,
																																		'activity_source_id' =>$idactivitySource63,
																																		'value' => 206673980.3,
																																		]);
																																		$idevidenceFinancial63 = DB::getPdo()->lastInsertId();
																																		
																																		

																																	
																																		DB::table('evidence_financial')->insert([
																																			'evidence_id' => $idevidencia226,
																																			'activity_source_id' =>$idactivitySource64,
																																			'value' => 153643712,
																																			]);
																																			$idevidenceFinancial64 = DB::getPdo()->lastInsertId();
																																			
																																			
																																			
																																		
																																		
																																		
																																	DB::table('evidence_financial')->insert([
																																		'evidence_id' => $idevidencia234,
																																		'activity_source_id' =>$idactivitySource65,
																																		'value' => 445394721.1,
																																		]);
																																		$idevidenceFinancial65 = DB::getPdo()->lastInsertId();
																																		
																																		
																																		
																																	DB::table('evidence_financial')->insert([
																																		'evidence_id' => $idevidencia240,
																																		'activity_source_id' =>$idactivitySource66,
																																		'value' => 157660786.1,
																																		]);
																																		$idevidenceFinancial66 = DB::getPdo()->lastInsertId();
																																		
																																		
																																		
																																		DB::table('evidence_financial')->insert([
																																			'evidence_id' => $idevidencia198,
																																			'activity_source_id' =>$idactivitySource67,
																																			'value' => 124247583,
																																			]);
																																			$idevidenceFinancial67 = DB::getPdo()->lastInsertId();
																																			
																																			
																																			
																																		DB::table('evidence_financial')->insert([
																																			'evidence_id' => $idevidencia209,
																																			'activity_source_id' =>$idactivitySource68,
																																			'value' => 407655548.56,
																																			]);
																																			$idevidenceFinancial68 = DB::getPdo()->lastInsertId();
																																			
																																			
																																			
																																		DB::table('evidence_financial')->insert([
																																			'evidence_id' => $idevidencia218,
																																			'activity_source_id' =>$idactivitySource69,
																																			'value' => 67887119.7,
																																			]);
																																			$idevidenceFinancial69 = DB::getPdo()->lastInsertId();
																																			
																																			
																																			
																																		DB::table('evidence_financial')->insert([
																																			'evidence_id' => $idevidencia220,
																																			'activity_source_id' =>$idactivitySource70,
																																			'value' => 214974964.7,
																																			]);
																																			$idevidenceFinancial70 = DB::getPdo()->lastInsertId();
																																			
																																			
																																			
																																		DB::table('evidence_financial')->insert([
																																			'evidence_id' => $idevidencia222,
																																			'activity_source_id' =>$idactivitySource71,
																																			'value' => 529424819.7,
																																			]);
																																			$idevidenceFinancial71 = DB::getPdo()->lastInsertId();
																																			
																																			
																																			
																																		DB::table('evidence_financial')->insert([
																																			'evidence_id' => $idevidencia224,
																																			'activity_source_id' =>$idactivitySource72,
																																			'value' => 188576582.7,
																																			]);
																																			$idevidenceFinancial72 = DB::getPdo()->lastInsertId();
																																			
																																			
																																			
																																		DB::table('evidence_financial')->insert([
																																			'evidence_id' => $idevidencia234,
																																			'activity_source_id' =>$idactivitySource74,
																																			'value' => 1529584205.9,
																																			]);
																																			$idevidenceFinancial74 = DB::getPdo()->lastInsertId();
																																			
																																			
																																			
																																		DB::table('evidence_financial')->insert([
																																			'evidence_id' => $idevidencia240,
																																			'activity_source_id' =>$idactivitySource75,
																																			'value' => 130341402.9,
																																			]);
																																			$idevidenceFinancial75 = DB::getPdo()->lastInsertId();
																																			
																																			
																																			
																																			DB::table('evidence_financial')->insert([
																																				'evidence_id' => $idevidencia234,
																																				'activity_source_id' =>$idactivitySource76,
																																				'value' => 1800000,
																																				]);
																																				$idevidenceFinancial76 = DB::getPdo()->lastInsertId();
																																				
																																				
																																				
																																			DB::table('evidence_financial')->insert([
																																				'evidence_id' => $idevidencia240,
																																				'activity_source_id' =>$idactivitySource77,
																																				'value' => 2000000,
																																				]);
																																				$idevidenceFinancial77 = DB::getPdo()->lastInsertId();
																																				
																																				
																																				
																																				DB::table('evidence_financial')->insert([
																																					'evidence_id' => $idevidencia234,
																																					'activity_source_id' =>$idactivitySource78,
																																					'value' => 1100000000,
																																					]);
																																					$idevidenceFinancial78 = DB::getPdo()->lastInsertId();
																																					
																																					
																																					
																																				DB::table('evidence_financial')->insert([
																																					'evidence_id' => $idevidencia240,
																																					'activity_source_id' =>$idactivitySource79,
																																					'value' => 1600000,
																																					]);
																																					$idevidenceFinancial79 = DB::getPdo()->lastInsertId();
																																					
																																			    DB::table('evidence_financial')->insert([
																																							'evidence_id' => $idevidencia234,
																																							'activity_source_id' =>$idactivitySource80,
																																							'value' => 337784205.9,
																																							]);
																																							$idevidenceFinancial80 = DB::getPdo()->lastInsertId();
																																							
																																							
																																							
																																						
																																						
																																						
																																					DB::table('evidence_financial')->insert([
																																						'evidence_id' => $idevidencia240,
																																						'activity_source_id' =>$idactivitySource81,
																																						'value' => 3000000,
																																						]);
																																						$idevidenceFinancial81 = DB::getPdo()->lastInsertId();
																																						
																																						
																																						
																																						DB::table('evidence_financial')->insert([
																																							'evidence_id' => $idevidencia240,
																																							'activity_source_id' =>$idactivitySource82,
																																							'value' => 3000000,
																																							]);
																																							$idevidenceFinancial82 = DB::getPdo()->lastInsertId();
																																							
																																							
																																								DB::table('evidence_financial')->insert([
																																							'evidence_id' => $idevidencia240,
																																							'activity_source_id' =>$idactivitySource83,
																																							'value' => 112168640,
																																							]);
																																							$idevidenceFinancial83 = DB::getPdo()->lastInsertId();

																			                                                                                DB::table('evidence_financial')->insert([
																																								'evidence_id' => $idevidencia240,
																																								'activity_source_id' =>$idactivitySource84,
																																								'value' => 5572762.89999998,
																																								]);
																																								$idevidenceFinancial84 = DB::getPdo()->lastInsertId();
 }
}