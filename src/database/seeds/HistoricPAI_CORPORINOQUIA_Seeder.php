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
 * Class HistoricPAI_CORPORINOQUIA_Seeder
 */
class HistoricPAI_CORPORINOQUIA_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $pai=PAI::create([
        'name' => 'Plan de Acción Institucional 2016-2019 “POR UNA REGIÓN VIVA”',
        'start_date' => '2016-01-01',
        'end_date' => '2019-12-31',
        'director_name' => 'Martha Jhoven Plazas Roa',
        'group_id' => 26,
        'approved' => 1,
        ]);
        $idpai1 = DB::getPdo()->lastInsertId();
        

        DB::table('strategic_lines')->insert([
          'name' => 'Línea 1. Yo cambio por el cambio climatico',
          'weighing' => 23,
          'p_a_i_id' => $idpai1,
          ]);
          $idline1 = DB::getPdo()->lastInsertId();
          
          
        DB::table('strategic_lines')->insert([
          'name' => 'Línea 2. Conocer para conservar nuestra  biodiversidad',
          'weighing' => 16,
          'p_a_i_id' => $idpai1,
          ]);
          $idline2 = DB::getPdo()->lastInsertId();
          
          
        DB::table('strategic_lines')->insert([
          'name' => 'Línea 3. El agua cuenta, cuenta contigo',
          'weighing' => 16,
          'p_a_i_id' => $idpai1,
          ]);
          $idline3 = DB::getPdo()->lastInsertId();
          
          
        DB::table('strategic_lines')->insert([
          'name' => 'Línea 4. Cultura ambiental, cultura del cambio',
          'weighing' => 23,
          'p_a_i_id' => $idpai1,
          ]);
          $idline4 = DB::getPdo()->lastInsertId();
          
          
        DB::table('strategic_lines')->insert([
          'name' => 'Línea 5. Gestión en equipo autoridad y comunidad',
          'weighing' => 22,
          'p_a_i_id' => $idpai1,
          ]);
          $idline5 = DB::getPdo()->lastInsertId();
          
          

          DB::table('programs')->insert([
            'strategic_line_id' => $idline1,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 1.1. PLANEANDO Y PROTEGIENDO EL AGUA',
            'weighing' => 39,
            ]);
            $idprogram1 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline1,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 1.2. ORDENAMIENTO INTEGRAL, ESTRATEGIA PARA EL CAMBIO',
            'weighing' => 32,
            ]);
            $idprogram2 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline1,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 1.3. HACIENDO SOSTENIBLE LA BIODIVERSIDAD',
            'weighing' => 29,
            ]);
            $idprogram3 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline2,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 2.1. IMPLEMENTACIÓN DE ESTRATEGIAS DE CONSERVACIÓN PARA DISMINUIR LOS IMPACTOS SOBRE LA BIODIVERSIDAD.',
            'weighing' => 100,
            ]);
            $idprogram4 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline3,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 3.1. AGUA DISPONIBLE, FUTURO SOSTENIBLE',
            'weighing' => 100,
            ]);
            $idprogram5 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline4,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 4.1. FORMANDO UNA CULTURA AMBIENTAL',
            'weighing' => 100,
            ]);
            $idprogram6 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline5,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 5.1. OPTIMIZACION  DE LA GESTIÓN AMBIENTAL',
            'weighing' => 25,
            ]);
            $idprogram7 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline5,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 5.2. GESTIÓN AMBIENTAL, ACCIÓN SOSTENIBLE AUTORIDAD Y COMUNIDAD',
            'weighing' => 75,
            ]);
            $idprogram8 = DB::getPdo()->lastInsertId();
            
            
            DB::table('projects')->insert([
              'program_id' => $idprogram1,
              'project' => 'PROYECTO 1.1.1. FORMULACION DE INSTRUMENTOS DE PLANIFICACIÓN PARA LA REGULACIÓN DEL RECURSO HÍDRICO',
              'weighing' => 100,
              ]);
              $idproject1 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => 'PROYECTO 1.2.1. CONSOLIDACIÓN DEL ORDENAMIENTO AMBIENTAL DEL TERRITORIO PARA UN DESARROLLO REGIONAL SOSTENIBLE ',
              'weighing' => 32,
              ]);
              $idproject2 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => 'PROYECTO 1.2.2.  APLICACIÓN DE MEDIDAS DE ADAPTACIÓN Y MITIGACIÓN DEL CAMBIO CLIMÁTICO ACTUANDO CON EL CAMBIO CLIMÁTICO',
              'weighing' => 35,
              ]);
              $idproject3 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => 'PROYECTO 1.2.3.  IMPLEMENTACIÓN DE PROCESOS DE GESTIÓN INTEGRAL DEL RIESGO',
              'weighing' => 33,
              ]);
              $idproject4 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram3,
              'project' => 'PROYECTO 1.3.1. CONSOLIDACIÓN DE   ÁREAS PROTEGIDAS Y  ECOSISTEMAS ESTRATÉGICOS EN JURISDICCIÓN DE CORPORINOQUIA',
              'weighing' => 100,
              ]);
              $idproject5 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram4,
              'project' => 'PROYECTO 2.1.1. CONSOLIDACIÓN DE LAS ESTRATEGIAS DE CONSERVACIÓN PARA DISMINUIR LOS IMPACTOS SOBRE LA BIODIVERSIDAD',
              'weighing' => 100,
              ]);
              $idproject6 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram5,
              'project' => 'PROYECTO 3.1.1. DESARROLLO DE LA EVALUACIÓN REGIONAL DEL RECURSO HÍDRICO  ',
              'weighing' => 48,
              ]);
              $idproject7 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram5,
              'project' => 'PROYECTO 3.1.2. FORTALECIMIENTO DE LOS  INSTRUMENTOS ECONÓMICOS Y DE  REGULACIÓN DEL APROVECHAMIENTO DEL RECURSO HÍDRICO',
              'weighing' => 52,
              ]);
              $idproject8 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram6,
              'project' => 'PROYECTO 4.1.1. CONSOLIDACION DE LAS ESTRATEGIAS AMBIENTALES DE LAS COMUNIDADES  INDIGENAS ',
              'weighing' => 20,
              ]);
              $idproject9 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram6,
              'project' => 'PROYECTO 4.1.2. CONSOLIDACION DE LA EDUCACIÓN  Y COMUNICACIÓN AMBIENTAL CON GOBERNANZA Y GOBERNABILIDAD AMBIENTAL',
              'weighing' => 80,
              ]);
              $idproject10 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram7,
              'project' => 'PROYECTO 5.1.1. MEJORAMIENTO INSTITUCIONAL PARA LA EFICIENCIA ADMINISTRATIVA',
              'weighing' => 60,
              ]);
              $idproject11 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram7,
              'project' => 'PROYECTO 5.1.2. FORTALECIMIENTO DE LA CAPACIDAD TECNOLÓGICA DE CORPORINOQUIA',
              'weighing' => 40,
              ]);
              $idproject12 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram6,
              'project' => 'PROYECTO 5.1.2. FORTALECIMIENTO DE LA CAPACIDAD TECNOLÓGICA DE CORPORINOQUIA',
              'weighing' => 100,
              ]);
              $idproject13 = DB::getPdo()->lastInsertId();
              
              
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
				
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 0,
					'goal_2' => 1,
					'goal_3' => 2,
					'goal_4' => 0,
					'goal_1_balance' => 0,
					'goal_2_balance' => 1,
					'goal_3_balance' => 2,
					'goal_4_balance' => 0,
					'total_goal' => 3,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 14,
					]);
					$idobjectiveproduct1 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 25,
					'goal_2' => 25,
					'goal_3' => 25,
					'goal_4' => 25,
					'goal_1_balance' => 25,
					'goal_2_balance' => 25,
					'goal_3_balance' => 25,
					'goal_4_balance' => 25,
					'total_goal' => 100,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 14,
					]);
					$idobjectiveproduct2 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
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
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 14,
					]);
					$idobjectiveproduct3 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
					'product_id' => null,
					'product_other' => 'Producto 4',
					'goal_1' => 1,
					'goal_2' => 3,
					'goal_3' => 6,
					'goal_4' => 3,
					'goal_1_balance' => 1,
					'goal_2_balance' => 3,
					'goal_3_balance' => 6,
					'goal_4_balance' => 3,
					'total_goal' => 13,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 14,
					]);
					$idobjectiveproduct4 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
					'product_id' => null,
					'product_other' => 'Producto 5',
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
					'weighing' => 14,
					]);
					$idobjectiveproduct5 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
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
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 14,
					]);
					$idobjectiveproduct6 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
					'product_id' => null,
					'product_other' => 'Producto 7',
					'goal_1' => 45,
					'goal_2' => 20,
					'goal_3' => 35,
					'goal_4' => 0,
					'goal_1_balance' => 45,
					'goal_2_balance' => 20,
					'goal_3_balance' => 35,
					'goal_4_balance' => 0,
					'total_goal' => 100,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 15,
					]);
					$idobjectiveproduct7 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct8 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective2,
					'product_id' => null,
					'product_other' => 'Producto 1',
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
					'weighing' => 20,
					]);
					$idobjectiveproduct9 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective2,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 20,
					'goal_2' => 9,
					'goal_3' => 9,
					'goal_4' => 7,
					'goal_1_balance' => 20,
					'goal_2_balance' => 9,
					'goal_3_balance' => 9,
					'goal_4_balance' => 7,
					'total_goal' => 45,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 20,
					]);
					$idobjectiveproduct10 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective2,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 2,
					'goal_2' => 7,
					'goal_3' => 7,
					'goal_4' => 7,
					'goal_1_balance' => 2,
					'goal_2_balance' => 7,
					'goal_3_balance' => 7,
					'goal_4_balance' => 7,
					'total_goal' => 23,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 20,
					]);
					$idobjectiveproduct11 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective2,
					'product_id' => null,
					'product_other' => 'Producto 4',
					'goal_1' => 0,
					'goal_2' => 2,
					'goal_3' => 0,
					'goal_4' => 1,
					'goal_1_balance' => 0,
					'goal_2_balance' => 2,
					'goal_3_balance' => 0,
					'goal_4_balance' => 1,
					'total_goal' => 3,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 20,
					]);
					$idobjectiveproduct12 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective2,
					'product_id' => null,
					'product_other' => 'Producto 5',
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 2,
					'goal_4' => 1,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 2,
					'goal_4_balance' => 1,
					'total_goal' => 3,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 19,
					]);
					$idobjectiveproduct13 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective2,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct14 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective3,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 1,
					'goal_2' => 0,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 1,
					'goal_2_balance' => 0,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 1,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 20,
					]);
					$idobjectiveproduct15 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective3,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 2,
					'goal_4' => 1,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 2,
					'goal_4_balance' => 1,
					'total_goal' => 3,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 20,
					]);
					$idobjectiveproduct16 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective3,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 1,
					'goal_2' => 2,
					'goal_3' => 4,
					'goal_4' => 4,
					'goal_1_balance' => 1,
					'goal_2_balance' => 2,
					'goal_3_balance' => 4,
					'goal_4_balance' => 4,
					'total_goal' => 11,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 20,
					]);
					$idobjectiveproduct17 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective3,
					'product_id' => null,
					'product_other' => 'Producto 4',
					'goal_1' => 1,
					'goal_2' => 1,
					'goal_3' => 2,
					'goal_4' => 1,
					'goal_1_balance' => 1,
					'goal_2_balance' => 1,
					'goal_3_balance' => 2,
					'goal_4_balance' => 1,
					'total_goal' => 5,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 20,
					]);
					$idobjectiveproduct18 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective3,
					'product_id' => null,
					'product_other' => 'Producto 5',
					'goal_1' => 0,
					'goal_2' => 1,
					'goal_3' => 0,
					'goal_4' => 1,
					'goal_1_balance' => 0,
					'goal_2_balance' => 1,
					'goal_3_balance' => 0,
					'goal_4_balance' => 1,
					'total_goal' => 2,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 19,
					]);
					$idobjectiveproduct19 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective3,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct20 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 26,
					'goal_2' => 9,
					'goal_3' => 10,
					'goal_4' => 10,
					'goal_1_balance' => 26,
					'goal_2_balance' => 9,
					'goal_3_balance' => 10,
					'goal_4_balance' => 10,
					'total_goal' => 55,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct21 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 16,
					'goal_2' => 60,
					'goal_3' => 40,
					'goal_4' => 40,
					'goal_1_balance' => 16,
					'goal_2_balance' => 60,
					'goal_3_balance' => 40,
					'goal_4_balance' => 40,
					'total_goal' => 156,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct22 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 0,
					'goal_2' => 1,
					'goal_3' => 2,
					'goal_4' => 2,
					'goal_1_balance' => 0,
					'goal_2_balance' => 1,
					'goal_3_balance' => 2,
					'goal_4_balance' => 2,
					'total_goal' => 5,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct23 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
					'product_id' => null,
					'product_other' => 'Producto 4',
					'goal_1' => 0,
					'goal_2' => 1,
					'goal_3' => 3,
					'goal_4' => 0,
					'goal_1_balance' => 0,
					'goal_2_balance' => 1,
					'goal_3_balance' => 3,
					'goal_4_balance' => 0,
					'total_goal' => 4,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 24,
					]);
					$idobjectiveproduct24 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct25 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 2000,
					'goal_2' => 4000,
					'goal_3' => 320000,
					'goal_4' => 0,
					'goal_1_balance' => 2000,
					'goal_2_balance' => 4000,
					'goal_3_balance' => 320000,
					'goal_4_balance' => 0,
					'total_goal' => 326000,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 16,
					]);
					$idobjectiveproduct26 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 30,
					'goal_4' => 0,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 30,
					'goal_4_balance' => 0,
					'total_goal' => 30,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 16,
					]);
					$idobjectiveproduct27 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 0,
					'goal_2' => 1,
					'goal_3' => 1,
					'goal_4' => 0,
					'goal_1_balance' => 0,
					'goal_2_balance' => 1,
					'goal_3_balance' => 1,
					'goal_4_balance' => 0,
					'total_goal' => 2,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 16,
					]);
					$idobjectiveproduct28 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
					'product_id' => null,
					'product_other' => 'Producto 4',
					'goal_1' => 0,
					'goal_2' => 10000,
					'goal_3' => 10000,
					'goal_4' => 10000,
					'goal_1_balance' => 0,
					'goal_2_balance' => 10000,
					'goal_3_balance' => 10000,
					'goal_4_balance' => 10000,
					'total_goal' => 30000,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 17,
					]);
					$idobjectiveproduct29 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
					'product_id' => null,
					'product_other' => 'Producto 5',
					'goal_1' => 1,
					'goal_2' => 2,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 1,
					'goal_2_balance' => 2,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 3,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 17,
					]);
					$idobjectiveproduct30 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
					'product_id' => null,
					'product_other' => 'Producto 6',
					'goal_1' => 1,
					'goal_2' => 1,
					'goal_3' => 8,
					'goal_4' => 2,
					'goal_1_balance' => 1,
					'goal_2_balance' => 1,
					'goal_3_balance' => 8,
					'goal_4_balance' => 2,
					'total_goal' => 12,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 17,
					]);
					$idobjectiveproduct31 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct32 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 1,
					'goal_4' => 0,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 1,
					'goal_4_balance' => 0,
					'total_goal' => 1,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 12,
					]);
					$idobjectiveproduct33 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 1,
					'goal_2' => 1,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 1,
					'goal_2_balance' => 1,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 2,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 12,
					]);
					$idobjectiveproduct34 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 10,
					'goal_2' => 2,
					'goal_3' => 4,
					'goal_4' => 2,
					'goal_1_balance' => 10,
					'goal_2_balance' => 2,
					'goal_3_balance' => 4,
					'goal_4_balance' => 2,
					'total_goal' => 18,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 12,
					]);
					$idobjectiveproduct35 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => null,
					'product_other' => 'Producto 4',
					'goal_1' => 0,
					'goal_2' => 2,
					'goal_3' => 2,
					'goal_4' => 0,
					'goal_1_balance' => 0,
					'goal_2_balance' => 2,
					'goal_3_balance' => 2,
					'goal_4_balance' => 0,
					'total_goal' => 4,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 12,
					]);
					$idobjectiveproduct36 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => null,
					'product_other' => 'Producto 5',
					'goal_1' => 5,
					'goal_2' => 2,
					'goal_3' => 4,
					'goal_4' => 1,
					'goal_1_balance' => 5,
					'goal_2_balance' => 2,
					'goal_3_balance' => 4,
					'goal_4_balance' => 1,
					'total_goal' => 12,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 12,
					]);
					$idobjectiveproduct37 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => null,
					'product_other' => 'Producto 6',
					'goal_1' => 0,
					'goal_2' => 3,
					'goal_3' => 1,
					'goal_4' => 0,
					'goal_1_balance' => 0,
					'goal_2_balance' => 3,
					'goal_3_balance' => 1,
					'goal_4_balance' => 0,
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
					'product_id' => null,
					'product_other' => 'Producto 7',
					'goal_1' => 95,
					'goal_2' => 95,
					'goal_3' => 95,
					'goal_4' => 95,
					'goal_1_balance' => 95,
					'goal_2_balance' => 95,
					'goal_3_balance' => 95,
					'goal_4_balance' => 95,
					'total_goal' => 380,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 13,
					]);
					$idobjectiveproduct39 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => null,
					'product_other' => 'Producto 8',
					'goal_1' => 70,
					'goal_2' => 70,
					'goal_3' => 70,
					'goal_4' => 70,
					'goal_1_balance' => 70,
					'goal_2_balance' => 70,
					'goal_3_balance' => 70,
					'goal_4_balance' => 70,
					'total_goal' => 280,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 13,
					]);
					$idobjectiveproduct40 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct41 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 2,
					'goal_2' => 0,
					'goal_3' => 2,
					'goal_4' => 2,
					'goal_1_balance' => 2,
					'goal_2_balance' => 0,
					'goal_3_balance' => 2,
					'goal_4_balance' => 2,
					'total_goal' => 6,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 16,
					]);
					$idobjectiveproduct42 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
					'product_id' => null,
					'product_other' => 'Producto 2',
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
					'weighing' => 16,
					]);
					$idobjectiveproduct43 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 40,
					'goal_2' => 60,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 40,
					'goal_2_balance' => 60,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 100,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 16,
					]);
					$idobjectiveproduct44 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
					'product_id' => null,
					'product_other' => 'Producto 4',
					'goal_1' => 65,
					'goal_2' => 20,
					'goal_3' => 15,
					'goal_4' => 0,
					'goal_1_balance' => 65,
					'goal_2_balance' => 20,
					'goal_3_balance' => 15,
					'goal_4_balance' => 0,
					'total_goal' => 100,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 17,
					]);
					$idobjectiveproduct45 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
					'product_id' => null,
					'product_other' => 'Producto 5',
					'goal_1' => 10,
					'goal_2' => 20,
					'goal_3' => 20,
					'goal_4' => 10,
					'goal_1_balance' => 10,
					'goal_2_balance' => 20,
					'goal_3_balance' => 20,
					'goal_4_balance' => 10,
					'total_goal' => 60,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 17,
					]);
					$idobjectiveproduct46 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
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
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 17,
					]);
					$idobjectiveproduct47 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct48 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 0,
					'goal_2' => 1,
					'goal_3' => 3,
					'goal_4' => 0,
					'goal_1_balance' => 0,
					'goal_2_balance' => 1,
					'goal_3_balance' => 3,
					'goal_4_balance' => 0,
					'total_goal' => 4,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 12,
					]);
					$idobjectiveproduct49 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 0,
					'goal_2' => 1,
					'goal_3' => 3,
					'goal_4' => 0,
					'goal_1_balance' => 0,
					'goal_2_balance' => 1,
					'goal_3_balance' => 3,
					'goal_4_balance' => 0,
					'total_goal' => 4,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 12,
					]);
					$idobjectiveproduct50 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 2,
					'goal_2' => 12,
					'goal_3' => 6,
					'goal_4' => 0,
					'goal_1_balance' => 2,
					'goal_2_balance' => 12,
					'goal_3_balance' => 6,
					'goal_4_balance' => 0,
					'total_goal' => 20,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 12,
					]);
					$idobjectiveproduct51 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
					'product_id' => null,
					'product_other' => 'Producto 4',
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
					'weighing' => 12,
					]);
					$idobjectiveproduct52 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
					'product_id' => null,
					'product_other' => 'Producto 5',
					'goal_1' => 100,
					'goal_2' => 100,
					'goal_3' => 100,
					'goal_4' => 100,
					'goal_1_balance' => 100,
					'goal_2_balance' => 100,
					'goal_3_balance' => 100,
					'goal_4_balance' => 100,
					'total_goal' => 400,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 12,
					]);
					$idobjectiveproduct53 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
					'product_id' => null,
					'product_other' => 'Producto 6',
					'goal_1' => 0,
					'goal_2' => 9,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 0,
					'goal_2_balance' => 9,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 9,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 13,
					]);
					$idobjectiveproduct54 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
					'product_id' => null,
					'product_other' => 'Producto 7',
					'goal_1' => 1,
					'goal_2' => 1,
					'goal_3' => 3,
					'goal_4' => 2,
					'goal_1_balance' => 1,
					'goal_2_balance' => 1,
					'goal_3_balance' => 3,
					'goal_4_balance' => 2,
					'total_goal' => 7,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 13,
					]);
					$idobjectiveproduct55 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
					'product_id' => null,
					'product_other' => 'Producto 8',
					'goal_1' => 0,
					'goal_2' => 100,
					'goal_3' => 100,
					'goal_4' => 100,
					'goal_1_balance' => 0,
					'goal_2_balance' => 100,
					'goal_3_balance' => 100,
					'goal_4_balance' => 100,
					'total_goal' => 300,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 13,
					]);
					$idobjectiveproduct56 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct57 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective9,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 0,
					'goal_2' => 1,
					'goal_3' => 1,
					'goal_4' => 0,
					'goal_1_balance' => 0,
					'goal_2_balance' => 1,
					'goal_3_balance' => 1,
					'goal_4_balance' => 0,
					'total_goal' => 2,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct58 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective9,
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
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct59 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective9,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 1,
					'goal_2' => 1,
					'goal_3' => 1,
					'goal_4' => 2,
					'goal_1_balance' => 1,
					'goal_2_balance' => 1,
					'goal_3_balance' => 1,
					'goal_4_balance' => 2,
					'total_goal' => 5,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct60 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective9,
					'product_id' => null,
					'product_other' => 'Producto 4',
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
					'weighing' => 24,
					]);
					$idobjectiveproduct61 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective9,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct62 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 10,
					'goal_2' => 20,
					'goal_3' => 20,
					'goal_4' => 20,
					'goal_1_balance' => 10,
					'goal_2_balance' => 20,
					'goal_3_balance' => 20,
					'goal_4_balance' => 20,
					'total_goal' => 70,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 14,
					]);
					$idobjectiveproduct63 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 0,
					'goal_2' => 3,
					'goal_3' => 2,
					'goal_4' => 0,
					'goal_1_balance' => 0,
					'goal_2_balance' => 3,
					'goal_3_balance' => 2,
					'goal_4_balance' => 0,
					'total_goal' => 5,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 14,
					]);
					$idobjectiveproduct64 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 3,
					'goal_2' => 3,
					'goal_3' => 2,
					'goal_4' => 2,
					'goal_1_balance' => 3,
					'goal_2_balance' => 3,
					'goal_3_balance' => 2,
					'goal_4_balance' => 2,
					'total_goal' => 10,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 14,
					]);
					$idobjectiveproduct65 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
					'product_id' => null,
					'product_other' => 'Producto 4',
					'goal_1' => 4,
					'goal_2' => 4,
					'goal_3' => 4,
					'goal_4' => 4,
					'goal_1_balance' => 4,
					'goal_2_balance' => 4,
					'goal_3_balance' => 4,
					'goal_4_balance' => 4,
					'total_goal' => 16,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 14,
					]);
					$idobjectiveproduct66 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
					'product_id' => null,
					'product_other' => 'Producto 5',
					'goal_1' => 5,
					'goal_2' => 5,
					'goal_3' => 5,
					'goal_4' => 5,
					'goal_1_balance' => 5,
					'goal_2_balance' => 5,
					'goal_3_balance' => 5,
					'goal_4_balance' => 5,
					'total_goal' => 20,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 14,
					]);
					$idobjectiveproduct67 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
					'product_id' => null,
					'product_other' => 'Producto 6',
					'goal_1' => 20,
					'goal_2' => 20,
					'goal_3' => 10,
					'goal_4' => 0,
					'goal_1_balance' => 20,
					'goal_2_balance' => 20,
					'goal_3_balance' => 10,
					'goal_4_balance' => 0,
					'total_goal' => 50,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 14,
					]);
					$idobjectiveproduct68 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
					'product_id' => null,
					'product_other' => 'Producto 7',
					'goal_1' => 25,
					'goal_2' => 25,
					'goal_3' => 25,
					'goal_4' => 25,
					'goal_1_balance' => 25,
					'goal_2_balance' => 25,
					'goal_3_balance' => 25,
					'goal_4_balance' => 25,
					'total_goal' => 100,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 15,
					]);
					$idobjectiveproduct69 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct70 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
					'product_id' => null,
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
					'weighing' => 12,
					]);
					$idobjectiveproduct71 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 1,
					'goal_4' => 0,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 1,
					'goal_4_balance' => 0,
					'total_goal' => 1,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 12,
					]);
					$idobjectiveproduct72 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 30,
					'goal_2' => 0,
					'goal_3' => 20,
					'goal_4' => 50,
					'goal_1_balance' => 30,
					'goal_2_balance' => 0,
					'goal_3_balance' => 20,
					'goal_4_balance' => 50,
					'total_goal' => 100,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 12,
					]);
					$idobjectiveproduct73 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 12,
					]);
					$idobjectiveproduct74 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
					'product_id' => null,
					'product_other' => 'Producto 5',
					'goal_1' => 100,
					'goal_2' => 100,
					'goal_3' => 100,
					'goal_4' => 100,
					'goal_1_balance' => 100,
					'goal_2_balance' => 100,
					'goal_3_balance' => 100,
					'goal_4_balance' => 100,
					'total_goal' => 400,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 12,
					]);
					$idobjectiveproduct75 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
					'product_id' => null,
					'product_other' => 'Producto 6',
					'goal_1' => 25,
					'goal_2' => 25,
					'goal_3' => 25,
					'goal_4' => 25,
					'goal_1_balance' => 25,
					'goal_2_balance' => 25,
					'goal_3_balance' => 25,
					'goal_4_balance' => 25,
					'total_goal' => 100,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 13,
					]);
					$idobjectiveproduct76 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
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
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 13,
					]);
					$idobjectiveproduct77 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
					'product_id' => null,
					'product_other' => 'Producto 8',
					'goal_1' => 80,
					'goal_2' => 80,
					'goal_3' => 80,
					'goal_4' => 80,
					'goal_1_balance' => 80,
					'goal_2_balance' => 80,
					'goal_3_balance' => 80,
					'goal_4_balance' => 80,
					'total_goal' => 320,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 13,
					]);
					$idobjectiveproduct78 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct79 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective12,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 100,
					'goal_2' => 0,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 100,
					'goal_2_balance' => 0,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 100,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct80 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective12,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 2,
					'goal_4' => 0,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 2,
					'goal_4_balance' => 0,
					'total_goal' => 2,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct81 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective12,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct82 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective12,
					'product_id' => null,
					'product_other' => 'Producto 4',
					'goal_1' => 100,
					'goal_2' => 0,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 100,
					'goal_2_balance' => 0,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 100,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 24,
					]);
					$idobjectiveproduct83 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct84 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective13,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 60,
					'goal_2' => 60,
					'goal_3' => 60,
					'goal_4' => 60,
					'goal_1_balance' => 60,
					'goal_2_balance' => 60,
					'goal_3_balance' => 60,
					'goal_4_balance' => 60,
					'total_goal' => 240,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 9,
					]);
					$idobjectiveproduct85 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective13,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 60,
					'goal_2' => 60,
					'goal_3' => 60,
					'goal_4' => 60,
					'goal_1_balance' => 60,
					'goal_2_balance' => 60,
					'goal_3_balance' => 60,
					'goal_4_balance' => 60,
					'total_goal' => 240,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 9,
					]);
					$idobjectiveproduct86 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective13,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 30,
					'goal_2' => 35,
					'goal_3' => 35,
					'goal_4' => 35,
					'goal_1_balance' => 30,
					'goal_2_balance' => 35,
					'goal_3_balance' => 35,
					'goal_4_balance' => 35,
					'total_goal' => 135,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 9,
					]);
					$idobjectiveproduct87 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective13,
					'product_id' => null,
					'product_other' => 'Producto 4',
					'goal_1' => 95,
					'goal_2' => 95,
					'goal_3' => 95,
					'goal_4' => 95,
					'goal_1_balance' => 95,
					'goal_2_balance' => 95,
					'goal_3_balance' => 95,
					'goal_4_balance' => 95,
					'total_goal' => 380,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 9,
					]);
					$idobjectiveproduct88 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective13,
					'product_id' => null,
					'product_other' => 'Producto 5',
					'goal_1' => 100,
					'goal_2' => 100,
					'goal_3' => 100,
					'goal_4' => 100,
					'goal_1_balance' => 100,
					'goal_2_balance' => 100,
					'goal_3_balance' => 100,
					'goal_4_balance' => 100,
					'total_goal' => 400,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 9,
					]);
					$idobjectiveproduct89 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective13,
					'product_id' => null,
					'product_other' => 'Producto 6',
					'goal_1' => 100,
					'goal_2' => 100,
					'goal_3' => 100,
					'goal_4' => 100,
					'goal_1_balance' => 100,
					'goal_2_balance' => 100,
					'goal_3_balance' => 100,
					'goal_4_balance' => 100,
					'total_goal' => 400,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 9,
					]);
					$idobjectiveproduct90 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective13,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 9,
					]);
					$idobjectiveproduct91 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective13,
					'product_id' => null,
					'product_other' => 'Producto 8',
					'goal_1' => 80,
					'goal_2' => 80,
					'goal_3' => 80,
					'goal_4' => 80,
					'goal_1_balance' => 80,
					'goal_2_balance' => 80,
					'goal_3_balance' => 80,
					'goal_4_balance' => 80,
					'total_goal' => 320,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 9,
					]);
					$idobjectiveproduct92 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 9,
					]);
					$idobjectiveproduct93 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective13,
					'product_id' => null,
					'product_other' => 'Producto 10',
					'goal_1' => 1,
					'goal_2' => 0,
					'goal_3' => 1,
					'goal_4' => 1,
					'goal_1_balance' => 1,
					'goal_2_balance' => 0,
					'goal_3_balance' => 1,
					'goal_4_balance' => 1,
					'total_goal' => 3,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 9,
					]);
					$idobjectiveproduct94 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective13,
					'product_id' => null,
					'product_other' => 'Producto 11',
					'goal_1' => 100,
					'goal_2' => 100,
					'goal_3' => 100,
					'goal_4' => 100,
					'goal_1_balance' => 100,
					'goal_2_balance' => 100,
					'goal_3_balance' => 100,
					'goal_4_balance' => 100,
					'total_goal' => 400,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 9,
					]);
					$idobjectiveproduct95 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective13,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct96 = DB::getPdo()->lastInsertId();
                  
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct1,
                    'name' => '1.1.1.1.a. Formular  Planes de Ordenación y Manejo de Cuencas Hidrográficas (POMCH) de las cuencas priorizadas. : Cuencas Priorizadas con Planes de Ordenación y manejo de cuencas hidrográficas formulados.',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 2,
                    'goal_4' => 0,
                    'goal' => 3,
                    'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity1 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct2,
                    'name' => '1.1.1.1.b. Formular  Planes de Ordenación y Manejo de Cuencas Hidrográficas (POMCH) de las cuencas priorizadas. :  Porcentaje de Alistamiento y seguimiento a los POMCH formulados',
                    'goal_1' => 25,
                    'goal_2' => 25,
                    'goal_3' => 25,
                    'goal_4' => 25,
                    'goal' => 100,
                    'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity2 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct3,
                    'name' => '1.1.1.2. Implementar acciones de los Planes de Ordenamiento y Manejo de Cuencas Hidrográficas (POMCH)',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity3 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct4,
                    'name' => '1.1.1.3. Delimitación  de las microcuencas abastecedoras de acueductos urbanos.',
                    'goal_1' => 1,
                    'goal_2' => 3,
                    'goal_3' => 6,
                    'goal_4' => 3,
                    'goal' => 13,
                    'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity4 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct5,
                    'name' => '1.1.1.4. Formulación de Planes de Manejo Ambiental de Acuíferos. ',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 2,
                    'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity5 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct6,
                    'name' => '1.1.1.5. Acuíferos en el territorio caracterizados.',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 1,
                    'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity6 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct7,
                    'name' => '1.1.1.6. Proyecto piloto para la cosecha del agua.',
                    'goal_1' => 45,
                    'goal_2' => 20,
                    'goal_3' => 35,
                    'goal_4' => 0,
                    'goal' => 100,
                    'weighing' => 15,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity7 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct8,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity8 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct9,
                    'name' => '1.2.1.1. Actualizar las determinantes ambientales y su zonificación ambiental a una escala más detallada, para el ordenamiento regional, departamental y local del territorio.',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 1,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity9 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct10,
                    'name' => '1.2.1.2. Fortalecer mediante asistencia técnica las capacidades humanas de los entes territoriales para la adecuada formulación e implementación del ordenamiento territorial ambiental.',
                    'goal_1' => 20,
                    'goal_2' => 9,
                    'goal_3' => 9,
                    'goal_4' => 7,
                    'goal' => 45,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity10 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct11,
                    'name' => '1.2.1.3. Verificar la implementación de los compromisos ambientales concertados con los POT.',
                    'goal_1' => 2,
                    'goal_2' => 7,
                    'goal_3' => 7,
                    'goal_4' => 7,
                    'goal' => 23,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity11 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct12,
                    'name' => '1.2.1.4. Estudios pilotos de ordenamiento mineroambiental en fuentes hídricas de la jurisdicción de Corporinoquia.',
                    'goal_1' => 0,
                    'goal_2' => 2,
                    'goal_3' => 0,
                    'goal_4' => 1,
                    'goal' => 3,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity12 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct13,
                    'name' => '1.2.1.5. Implementación de acciones derivadas de los estudios pilotos de ordenamiento mineroambiental.',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 2,
                    'goal_4' => 1,
                    'goal' => 3,
                    'weighing' => 19,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity13 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct14,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity14 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct15,
                    'name' => '1.2.2.1. Formulación del Plan Integral Regional Cambio Climático Orinoquia en el marco del NORECCO.',
                    'goal_1' => 1,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 1,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity15 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct16,
                    'name' => '1.2.2.2. Gestión para la implementación del Plan Integral Regional de Cambio Climático para la Orinoquia “Orinoquia, juntos frente al cambio climático” ',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 2,
                    'goal_4' => 1,
                    'goal' => 3,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity16 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct17,
                    'name' => '1.2.2.3.  Participar en las acciones que se establezcan en los Nodos Regionales de Cambio Climático con influencia de los municipios de Boyacá y Cundinamarca.',
                    'goal_1' => 1,
                    'goal_2' => 2,
                    'goal_3' => 4,
                    'goal_4' => 4,
                    'goal' => 11,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity17 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct18,
                    'name' => '1.2.2.4.   Implementación de herramientas de comunicación, divulgación y educación, para la toma de decisiones frente al cambio climático.',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 2,
                    'goal_4' => 1,
                    'goal' => 5,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity18 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct19,
                    'name' => '1.2.2.5 Monitoreo del aire en los cascos urbanos de los municipios de Arauca y Yopal.',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 0,
                    'goal_4' => 1,
                    'goal' => 2,
                    'weighing' => 19,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity19 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct20,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity20 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct21,
                    'name' => '1.2.3.1. Asesorar a los municipios de la jurisdicción para la formulación y actualización de sus PMGR y la ERE, o en la elaboración de estudios básicos o detallados de GR.',
                    'goal_1' => 26,
                    'goal_2' => 9,
                    'goal_3' => 10,
                    'goal_4' => 10,
                    'goal' => 55,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity21 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct22,
                    'name' => '1.2.3.2.  Identificación y monitoreo de puntos críticos por efecto de ocurrencia de fenómenos naturales. ',
                    'goal_1' => 16,
                    'goal_2' => 60,
                    'goal_3' => 40,
                    'goal_4' => 40,
                    'goal' => 156,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity22 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct23,
                    'name' => '1.2.3.3. Implementación de medidas de conocimiento y reducción del riesgo.',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 2,
                    'goal_4' => 2,
                    'goal' => 5,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity23 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct24,
                    'name' => '1.2.3.4. Promover proyectos de restauración ecológica de áreas ambientalmente estratégicas afectadas en su cobertura vegetal. ',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 3,
                    'goal_4' => 0,
                    'goal' => 4,
                    'weighing' => 24,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity24 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct25,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity25 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct26,
                    'name' => '1.3.1.1. Declarar áreas protegidas con alguna categoría  de manejo en la Jurisdicción.',
                    'goal_1' => 2000,
                    'goal_2' => 4000,
                    'goal_3' => 320000,
                    'goal_4' => 0,
                    'goal' => 326000,
                    'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity26 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct27,
                    'name' => '1.3.1.2 Conformación de la Red de Reservas Naturales de la Sociedad Civil  de la jurisdicción.',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 30,
                    'goal_4' => 0,
                    'goal' => 30,
                    'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity27 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct28,
                    'name' => '1.3.1.3. Establecer  Corredores Ecológicos  de conectividad de las áreas protegidas.',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 0,
                    'goal' => 2,
                    'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity28 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct29,
                    'name' => '1.3.1.4.  Caracterizar ecosistemas estratégicos como proveedores de servicios ecosistémicos',
                    'goal_1' => 0,
                    'goal_2' => 10000,
                    'goal_3' => 10000,
                    'goal_4' => 10000,
                    'goal' => 30000,
                    'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity29 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct30,
                    'name' => '1.3.1.5. Realizar el Estudio de propuesta  de delimitación de los complejos  de páramos a escala 1.25000 en la jurisdicción de la Corporación. ',
                    'goal_1' => 1,
                    'goal_2' => 2,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 3,
                    'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity30 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct31,
                    'name' => '1.3.1.6.  Implementar el  Plan Regional de Negocios Verdes  como generador de estrategias (REDD, REDD+, DML, BANCO2) de impactos positivos y buenas prácticas ambientales para la conservación de los ecosistemas estratégicos.',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 8,
                    'goal_4' => 2,
                    'goal' => 12,
                    'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity31 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct32,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity32 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct33,
                    'name' => '2.1.1.1. Ajustar por Departamento la formulación del plan de Ordenación Forestal de la Jurisdicción de Corporinoquia.',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 1,
                    'goal_4' => 0,
                    'goal' => 1,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity33 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct34,
                    'name' => '2.1.1.2.  Formular los Planes de Manejo de las Areas Protegidas declaradas o de ecosistemas estrategicos de la Corporación.',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 2,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity34 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct35,
                    'name' => '2.1.1.3.  Implementar  acciones contenidas en planes de Manejo de las areas protegidas declaradas en la Jurisdiccion.',
                    'goal_1' => 10,
                    'goal_2' => 2,
                    'goal_3' => 4,
                    'goal_4' => 2,
                    'goal' => 18,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity35 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct36,
                    'name' => '2.1.1.4.  Realizar estudios básicos de caracterización de poblaciones de especies focales y/o especies amenazadas.',
                    'goal_1' => 0,
                    'goal_2' => 2,
                    'goal_3' => 2,
                    'goal_4' => 0,
                    'goal' => 4,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity36 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct37,
                    'name' => '2.1.1.5.  Implementar acciones de los  planes de conservación de fauna y flora amenazada.',
                    'goal_1' => 5,
                    'goal_2' => 2,
                    'goal_3' => 4,
                    'goal_4' => 1,
                    'goal' => 12,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity37 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct38,
                    'name' => '2.1.1.6.  Formular   Planes conservación de fauna y flora amenazada.',
                    'goal_1' => 0,
                    'goal_2' => 3,
                    'goal_3' => 1,
                    'goal_4' => 0,
                    'goal' => 4,
                    'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity38 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct39,
                    'name' => '2.1.1.7.a. Implementar estrategias de proteccion, manejo,y disposiscion de la flora y fauna silvestre decomisada en Jurisdiccion de Corporinoquia : Decomisos de  fauna definitivos.',
                    'goal_1' => 95,
                    'goal_2' => 95,
                    'goal_3' => 95,
                    'goal_4' => 95,
                    'goal' => 380,
                    'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity39 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct40,
                    'name' => '2.1.1.7.b. Implementar estrategias de proteccion, manejo,y disposiscion de la flora y fauna silvestre decomisada en Jurisdiccion de Corporinoquia. : Decomisos de flora  definitivos.',
                    'goal_1' => 70,
                    'goal_2' => 70,
                    'goal_3' => 70,
                    'goal_4' => 70,
                    'goal' => 280,
                    'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity40 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct41,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity41 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct42,
                    'name' => '3.1.1.1.a.  Determinación de la  oferta y demanda hídrica de fuentes superficiales en la jurisdicción. : Fuentes hídricas con oferta y demanda determinada.',
                    'goal_1' => 2,
                    'goal_2' => 0,
                    'goal_3' => 2,
                    'goal_4' => 2,
                    'goal' => 6,
                    'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity42 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct43,
                    'name' => '3.1.1.1.b.  Determinación de la  oferta y demanda hídrica de fuentes superficiales en la jurisdicción. : Acto administrativo con estudio técnico de los módulos de consumo para la proyección de demanda del recurso hídrico adoptado.',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 1,
                    'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity43 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct44,
                    'name' => '3.1.1.2.  Diseño de la red de monitoreo para la jurisdicción de Corporinoquia por Departamento.',
                    'goal_1' => 40,
                    'goal_2' => 60,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 100,
                    'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity44 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct45,
                    'name' => '3.1.1.3.  Adquisición e implementación de nuevas tecnologias para la modelación de la gestión integral del recurso hídrico.',
                    'goal_1' => 65,
                    'goal_2' => 20,
                    'goal_3' => 15,
                    'goal_4' => 0,
                    'goal' => 100,
                    'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity45 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct46,
                    'name' => '3.1.1.4.  Cargue de  información  al  Sistema de Información de Recurso Hídrico - SIRH.',
                    'goal_1' => 10,
                    'goal_2' => 20,
                    'goal_3' => 20,
                    'goal_4' => 10,
                    'goal' => 60,
                    'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity46 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct47,
                    'name' => '3.1.1.5. Diseño de la Ruta Crítica de  Evaluación Regional del Agua.',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 1,
                    'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity47 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct48,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity48 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct49,
                    'name' => '3.1.2.1.a.  Formulación de los Planes de Ordenación y Reglamentación del Recurso Hídrico en el área de la jurisdicción. : Corrientes  del recurso hídrico en el área de la jurisdicción reglamentados.',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 3,
                    'goal_4' => 0,
                    'goal' => 4,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity49 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct50,
                    'name' => '3.1.2.1.b.  Formulación de los Planes de Ordenación y Reglamentación del Recurso Hídrico en el área de la jurisdicción. : PORH del recurso hídrico formulados.',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 3,
                    'goal_4' => 0,
                    'goal' => 4,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity50 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct51,
                    'name' => '3.1.2.2.a  Formulación y actualización de los objetivos de calidad y determinación de metas de carga contaminante de las fuentes hídricas receptoras de vertimientos  en la jurisdicción de Corporinoquia: Fuentes Hídricas con objetivos de calidad formulados.',
                    'goal_1' => 2,
                    'goal_2' => 12,
                    'goal_3' => 6,
                    'goal_4' => 0,
                    'goal' => 20,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity51 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct52,
                    'name' => '3.1.2.2.b  Formulación y actualización de los objetivos de calidad y determinación de metas de carga contaminante de las fuentes hídricas receptoras de vertimientos  en la jurisdicción de Corporinoquia: Fuentes Hídricas con metas de carga contaminante definidas.',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 3,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity52 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct53,
                    'name' => '3.1.2.3. Actualización del  cobro de tasas por uso.',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity53 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct54,
                    'name' => '3.1.2.4.a Realizar acciones encaminadas a mejorar  la calidad del recurso hídrico.: Fuentes hídricas en el componente de calidad monitoreadas.',
                    'goal_1' => 0,
                    'goal_2' => 9,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 9,
                    'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity54 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct55,
                    'name' => '3.1.2.4.b. Realizar acciones encaminadas a mejorar  la calidad del recurso hídrico: Acciones de protección de la calidad del recurso hídrico Implementadas.',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 3,
                    'goal_4' => 2,
                    'goal' => 7,
                    'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity55 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct56,
                    'name' => '3.1.2.4.c. Realizar acciones encaminadas a mejorar  la calidad del recurso hídrico: Monitoreos realizados de calidad del recurso hídrico. ',
                    'goal_1' => 0,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 300,
                    'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity56 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct57,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity57 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct58,
                    'name' => '4.1.1.1.  Formulación de agendas ambientales Indígenas   definido  en las comunidades indígenas.',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 0,
                    'goal' => 2,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity58 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct59,
                    'name' => '4.1.1.2. Acompañamiento en la formulación y gestion de proyectos de comunidades indígenas  de la jurisdicción.',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity59 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct60,
                    'name' => '4.1.1.3.  Implementar estrategias ambientales para las comunidades indígenas.',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 2,
                    'goal' => 5,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity60 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct61,
                    'name' => '4.1.1.4.  Estructurar la estrategia de Educación Ambiental propia de los pueblos indigenas.',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 1,
                    'weighing' => 24,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity61 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct62,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity62 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct63,
                    'name' => '4.1.2.1.a. Orientación  y acompañamiento en la incorporación e  implementación de la Política Pública de Educación Ambiental (entes territoriales, entidades, empresas y pueblos indígenas), agenda de trabajo interinstitucional e intersectorial.: Acompañamiento a los actores realizado.',
                    'goal_1' => 10,
                    'goal_2' => 20,
                    'goal_3' => 20,
                    'goal_4' => 20,
                    'goal' => 70,
                    'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity63 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct64,
                    'name' => '4.1.2.1.b. Orientación  y acompañamiento en la incorporación e  implementación de la Política Pública de Educación Ambiental (entes territoriales, entidades, empresas y pueblos indígenas), agenda de trabajo interinstitucional e intersectorial.: Alianzas interinstitucionales en el desarrollo de estrategias de Política Pública de Educación Ambiental de la Jurisdicción desarrolladas.',
                    'goal_1' => 0,
                    'goal_2' => 3,
                    'goal_3' => 2,
                    'goal_4' => 0,
                    'goal' => 5,
                    'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity64 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct65,
                    'name' => '4.1.2.1.c. Orientación  y acompañamiento en la incorporación e  implementación de la Política Pública de Educación Ambiental (entes territoriales, entidades, empresas y pueblos indígenas), agenda de trabajo interinstitucional e intersectorial.: Acciones de estrategias de Educación Ambiental formal, no formal e informal implementados.',
                    'goal_1' => 3,
                    'goal_2' => 3,
                    'goal_3' => 2,
                    'goal_4' => 2,
                    'goal' => 10,
                    'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity65 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct66,
                    'name' => '4.1.2.1.d. Orientación  y acompañamiento en la incorporación e  implementación de la Política Pública de Educación Ambiental (entes territoriales, entidades, empresas y pueblos indígenas), agenda de trabajo interinstitucional e intersectorial.: Estrategias de Educación Ambiental formal, no formal e informal con seguimiento.',
                    'goal_1' => 4,
                    'goal_2' => 4,
                    'goal_3' => 4,
                    'goal_4' => 4,
                    'goal' => 16,
                    'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity66 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct67,
                    'name' => '4.1.2.2. Desarrollo de estrategias de la Política Pública de Educación Ambiental por parte de la Corporación.',
                    'goal_1' => 5,
                    'goal_2' => 5,
                    'goal_3' => 5,
                    'goal_4' => 5,
                    'goal' => 20,
                    'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity67 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct68,
                    'name' => '4.1.2.3. Implementación de la plataforma virtual educativa y  de comunicación  Red - Cidea Orinoquia.',
                    'goal_1' => 20,
                    'goal_2' => 20,
                    'goal_3' => 10,
                    'goal_4' => 0,
                    'goal' => 50,
                    'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity68 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct69,
                    'name' => '4.1.2.4. Generación y divulgación de piezas educativas y de comunicación  masiva, material  educativo ambiental y material de señalización ambiental.',
                    'goal_1' => 25,
                    'goal_2' => 25,
                    'goal_3' => 25,
                    'goal_4' => 25,
                    'goal' => 100,
                    'weighing' => 15,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity69 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct70,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity70 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct71,
                    'name' => '5.1.1.1.a.  Identificar acciones de fortalecimiento administrativo: Estudio de Clima Laboral Organizacional formulado.',
                    'goal_1' => 1,
                    'goal_2' => 0,
                    'goal_3' => 1,
                    'goal_4' => 0,
                    'goal' => 2,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity71 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct72,
                    'name' => '5.1.1.1.b. Identificar acciones de fortalecimiento administrativo: Estudio de Análisis de Puestos de Trabajo formulado',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 1,
                    'goal_4' => 0,
                    'goal' => 1,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity72 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct73,
                    'name' => '5.1.1.2.  Ampliar la planta física de la sede principal.',
                    'goal_1' => 30,
                    'goal_2' => 0,
                    'goal_3' => 20,
                    'goal_4' => 50,
                    'goal' => 100,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity73 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct74,
                    'name' => '5.1.1.3. Mejorar  la capacidad operativa  de las sedes de la Corporación.',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity74 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct75,
                    'name' => '5.1.1.4. Implementar acciones integrales de gestión financiera para el cumplimiento de la misión institucional.',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity75 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct76,
                    'name' => '5.1.1.5. Divulgar la gestión ambiental corporativa a través del plan de comunicaciones institucional.',
                    'goal_1' => 25,
                    'goal_2' => 25,
                    'goal_3' => 25,
                    'goal_4' => 25,
                    'goal' => 100,
                    'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity76 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct77,
                    'name' => '5.1.1.6.  Fortalecimiento del sistema de gestión integral.',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity77 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct78,
                    'name' => '5.1.1.7. Optimizar la capacidad  institucional de la entidad.',
                    'goal_1' => 80,
                    'goal_2' => 80,
                    'goal_3' => 80,
                    'goal_4' => 80,
                    'goal' => 320,
                    'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity78 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct79,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity79 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective12,
                    'product_id' =>$idobjectiveproduct80,
                    'name' => '5.1.2.1. Analisis y diseño de software de los procesos Misionales Y De Apoyo De La Corporación.',
                    'goal_1' => 100,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 100,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity80 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective12,
                    'product_id' =>$idobjectiveproduct81,
                    'name' => '5.1.2.2 Desarrollo de software de los procesos priorizados del sistema de gestion de calidad.',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 2,
                    'goal_4' => 0,
                    'goal' => 2,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity81 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective12,
                    'product_id' =>$idobjectiveproduct82,
                    'name' => '5.1.2.3. Garatizar la operatividad de infraestructura tecnológica ',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity82 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective12,
                    'product_id' =>$idobjectiveproduct83,
                    'name' => '5.1.2.4 Implementacion de la estrategia  de gobierno en linea en la Corporacion',
                    'goal_1' => 100,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 100,
                    'weighing' => 24,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity83 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective12,
                    'product_id' =>$idobjectiveproduct84,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity84 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct85,
                    'name' => '5.2.1.1.a. Realizar la evaluación de las solicitudes para otorgar licencias, permisos, concesiones y autorizaciones ambientales. : Trámites atendidos en el tiempo estipulado por la norma',
                    'goal_1' => 60,
                    'goal_2' => 60,
                    'goal_3' => 60,
                    'goal_4' => 60,
                    'goal' => 240,
                    'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity85 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct86,
                    'name' => '5.2.1.1.b. Realizar la evaluación de las solicitudes para otorgar licencias, permisos, concesiones y autorizaciones ambientales. : Tramites atendidos',
                    'goal_1' => 60,
                    'goal_2' => 60,
                    'goal_3' => 60,
                    'goal_4' => 60,
                    'goal' => 240,
                    'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity86 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct87,
                    'name' => '5.2.1.2. Realizar el seguimiento y control a las obligaciones contenidas en los actos administrativos que otorguen licencias, permisos, concesiones y autorizaciones ambientales.',
                    'goal_1' => 30,
                    'goal_2' => 35,
                    'goal_3' => 35,
                    'goal_4' => 35,
                    'goal' => 135,
                    'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity87 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct88,
                    'name' => '5.2.1.3. Realizar la atención de contravenciones ambientales por el inadecuado uso de recursos naturales',
                    'goal_1' => 95,
                    'goal_2' => 95,
                    'goal_3' => 95,
                    'goal_4' => 95,
                    'goal' => 380,
                    'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity88 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct89,
                    'name' => '5.2.1.4.  Realizar control y seguimiento a los municipios con Instrumentos de planificación aprobados - PSMV',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity89 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct90,
                    'name' => '5.2.1.5. Realizar control y seguimiento a los municipios con Instrumentos de planificación adoptados - PGIRS',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity90 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct91,
                    'name' => '5.2.1.6. Realizar control y seguimiento a los municipios con Instrumentos de planificación aprobados - PUEAA',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity91 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct92,
                    'name' => '5.2.1.7. Adelantar en todas sus etapas el proceso sancionatorio ambiental y actividades dentro de los procesos de licencias, permisos, concesiones y autorizaciones ambientales',
                    'goal_1' => 80,
                    'goal_2' => 80,
                    'goal_3' => 80,
                    'goal_4' => 80,
                    'goal' => 320,
                    'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity92 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct93,
                    'name' => '5.2.1.8.a. Garantizar la acreditación del laboratorio ambiental de Corporinoquia. : Auditorias  interna de al sistema de calidad en el laboratorio.',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity93 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct94,
                    'name' => '5.2.1.8.b. Garantizar la acreditación del laboratorio ambiental de Corporinoquia.: Auditorias de certificacion  de calidad en el laboratorio.',
                    'goal_1' => 1,
                    'goal_2' => 0,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 3,
                    'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity94 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct95,
                    'name' => '5.2.1.9.  Análisis de muestras en el laboratorio.',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity95 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct96,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity96 = DB::getPdo()->lastInsertId();


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity2,
						'year' =>1,
						'value' => 25,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia2 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>1,
						'value' => 0.2,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia3 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia4 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity7,
						'year' =>1,
						'value' => 30,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia7 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity8,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia8 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>1,
						'value' => 20,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia10 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity11,
						'year' =>1,
						'value' => 2,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia11 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity14,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia14 = DB::getPdo()->lastInsertId(); 


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
						'activity_id' => $idactivity20,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia20 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>1,
						'value' => 26,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia21 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity22,
						'year' =>1,
						'value' => 16,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia22 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia25 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity26,
						'year' =>1,
						'value' => 1048,
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
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia31 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity32,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia32 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity34,
						'year' =>1,
						'value' => 0.2,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia34 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity35,
						'year' =>1,
						'value' => 10,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia35 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity37,
						'year' =>1,
						'value' => 10,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia37 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity39,
						'year' =>1,
						'value' => 5,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia39 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity41,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia41 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia42 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>1,
						'value' => 40,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia44 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity45,
						'year' =>1,
						'value' => 59,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia45 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>1,
						'value' => 10,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia46 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity48,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia48 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity51,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia51 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity53,
						'year' =>1,
						'value' => 100,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia53 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity56,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia56 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia57 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia59 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity60,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia60 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity62,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia62 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity63,
						'year' =>1,
						'value' => 10,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia63 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity65,
						'year' =>1,
						'value' => 3,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia65 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity66,
						'year' =>1,
						'value' => 4,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia66 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity67,
						'year' =>1,
						'value' => 5,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia67 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity68,
						'year' =>1,
						'value' => 16,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia68 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity69,
						'year' =>1,
						'value' => 25,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia69 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity70,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia70 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity71,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia71 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity74,
						'year' =>1,
						'value' => 100,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia74 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity76,
						'year' =>1,
						'value' => 34,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia76 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity77,
						'year' =>1,
						'value' => 25,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia77 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity78,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia78 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity79,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia79 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity80,
						'year' =>1,
						'value' => 15,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia80 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity82,
						'year' =>1,
						'value' => 100,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia82 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity83,
						'year' =>1,
						'value' => 100,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia83 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity84,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia84 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity85,
						'year' =>1,
						'value' => 55,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia85 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity86,
						'year' =>1,
						'value' => 59,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia86 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity87,
						'year' =>1,
						'value' => 30,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia87 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity88,
						'year' =>1,
						'value' => 87,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia88 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity89,
						'year' =>1,
						'value' => 100,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia89 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity90,
						'year' =>1,
						'value' => 100,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia90 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity91,
						'year' =>1,
						'value' => 100,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia91 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity92,
						'year' =>1,
						'value' => 76,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia92 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity93,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia93 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity94,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia94 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity95,
						'year' =>1,
						'value' => 100,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia95 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity96,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia96 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity1,
						'year' =>2,
						'value' => 0.25,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia97 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity2,
						'year' =>2,
						'value' => 25,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia98 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>2,
						'value' => 0.7,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia99 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>2,
						'value' => 3,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia100 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity6,
						'year' =>2,
						'value' => 0.9,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia102 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity7,
						'year' =>2,
						'value' => 20,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia103 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity8,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia104 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity9,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia105 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>2,
						'value' => 9,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia106 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity11,
						'year' =>2,
						'value' => 7,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia107 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity12,
						'year' =>2,
						'value' => 0.8,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia108 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity14,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia110 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity17,
						'year' =>2,
						'value' => 2,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia113 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity18,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia114 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity19,
						'year' =>2,
						'value' => 0.9,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia115 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity20,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia116 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>2,
						'value' => 9,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia117 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity22,
						'year' =>2,
						'value' => 60,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia118 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity23,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia119 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity24,
						'year' =>2,
						'value' => 0.8,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia120 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia121 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity26,
						'year' =>2,
						'value' => 4000,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia122 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity28,
						'year' =>2,
						'value' => 0.9,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia124 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity29,
						'year' =>2,
						'value' => 9000,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia125 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity30,
						'year' =>2,
						'value' => 2,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia126 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity31,
						'year' =>2,
						'value' => 0.9,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia127 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity32,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia128 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity34,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia130 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity35,
						'year' =>2,
						'value' => 180,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia131 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity36,
						'year' =>2,
						'value' => 0.6,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia132 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity37,
						'year' =>2,
						'value' => 180,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia133 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>2,
						'value' => 0.6,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia134 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity39,
						'year' =>2,
						'value' => 180,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia135 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity40,
						'year' =>2,
						'value' => 2.7,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia136 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity41,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia137 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity43,
						'year' =>2,
						'value' => 0.8,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia139 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>2,
						'value' => 60,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia140 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity45,
						'year' =>2,
						'value' => 20,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia141 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>2,
						'value' => 20,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia142 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity47,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia143 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity48,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia144 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>2,
						'value' => 0.8,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia145 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity50,
						'year' =>2,
						'value' => 0.8,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia146 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity51,
						'year' =>2,
						'value' => 9.6,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia147 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity52,
						'year' =>2,
						'value' => 0.47,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia148 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity53,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia149 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity54,
						'year' =>2,
						'value' => 9,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia150 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia151 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity56,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia152 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia153 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity58,
						'year' =>2,
						'value' => 0.8,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia154 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>2,
						'value' => 0.9,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia155 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity60,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia156 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity61,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia157 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity62,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia158 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity63,
						'year' =>2,
						'value' => 20,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia159 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity64,
						'year' =>2,
						'value' => 3,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia160 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity65,
						'year' =>2,
						'value' => 3,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia161 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity66,
						'year' =>2,
						'value' => 4,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia162 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity67,
						'year' =>2,
						'value' => 5,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia163 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity68,
						'year' =>2,
						'value' => 20,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia164 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity69,
						'year' =>2,
						'value' => 25,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia165 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity70,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia166 = DB::getPdo()->lastInsertId(); 



					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity74,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia170 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity75,
						'year' =>2,
						'value' => 0.556,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia171 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity76,
						'year' =>2,
						'value' => 25,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia172 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity77,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia173 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity78,
						'year' =>2,
						'value' => 80,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia174 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity79,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia175 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity82,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia178 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity84,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia180 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity85,
						'year' =>2,
						'value' => 60,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia181 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity86,
						'year' =>2,
						'value' => 60,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia182 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity87,
						'year' =>2,
						'value' => 35,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia183 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity88,
						'year' =>2,
						'value' => 95,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia184 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity89,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia185 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity90,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia186 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity91,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia187 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity92,
						'year' =>2,
						'value' => 67.76,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia188 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity93,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia189 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity95,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia191 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity96,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia192 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity1,
						'year' =>3,
						'value' => 0.66,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia193 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity2,
						'year' =>3,
						'value' => 0.25,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia194 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia195 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>3,
						'value' => 6,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia196 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity5,
						'year' =>3,
						'value' => 0.9,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia197 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity7,
						'year' =>3,
						'value' => 0.35,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia199 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity8,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia200 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>3,
						'value' => 9,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia202 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity11,
						'year' =>3,
						'value' => 7,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia203 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity13,
						'year' =>3,
						'value' => 2,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia205 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity14,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia206 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity16,
						'year' =>3,
						'value' => 2,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia208 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity17,
						'year' =>3,
						'value' => 4,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia209 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity18,
						'year' =>3,
						'value' => 2,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia210 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity20,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia212 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>3,
						'value' => 10,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia213 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity22,
						'year' =>3,
						'value' => 40,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia214 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity23,
						'year' =>3,
						'value' => 2,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia215 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity24,
						'year' =>3,
						'value' => 2,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia216 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia217 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity26,
						'year' =>3,
						'value' => 320000,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia218 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity27,
						'year' =>3,
						'value' => 30,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia219 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity28,
						'year' =>3,
						'value' => 0.3,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia220 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity29,
						'year' =>3,
						'value' => 10000,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia221 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity31,
						'year' =>3,
						'value' => 5.6,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia223 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity32,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia224 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>3,
						'value' => 0.1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia225 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity35,
						'year' =>3,
						'value' => 4,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia227 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity36,
						'year' =>3,
						'value' => 1.6,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia228 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity37,
						'year' =>3,
						'value' => 4,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia229 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>3,
						'value' => 0.8,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia230 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity39,
						'year' =>3,
						'value' => 0.95,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia231 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity40,
						'year' =>3,
						'value' => 0.7,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia232 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity41,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia233 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>3,
						'value' => 1.6,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia234 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity45,
						'year' =>3,
						'value' => 0.15,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia237 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>3,
						'value' => 0.2,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia238 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity48,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia240 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>3,
						'value' => 1.2,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia241 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity50,
						'year' =>3,
						'value' => 1.2,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia242 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity51,
						'year' =>3,
						'value' => 4.8,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia243 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity52,
						'year' =>3,
						'value' => 0.5,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia244 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity53,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia245 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>3,
						'value' => 1.85,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia247 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity56,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia248 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia249 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity58,
						'year' =>3,
						'value' => 0.6,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia250 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia251 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity60,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia252 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity62,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia254 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity63,
						'year' =>3,
						'value' => 20,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia255 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity64,
						'year' =>3,
						'value' => 2,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia256 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity65,
						'year' =>3,
						'value' => 2,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia257 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity66,
						'year' =>3,
						'value' => 4,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia258 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity67,
						'year' =>3,
						'value' => 5,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia259 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity68,
						'year' =>3,
						'value' => 0.1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia260 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity69,
						'year' =>3,
						'value' => 0.25,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia261 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity70,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia262 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity71,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia263 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia264 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity74,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia266 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity75,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia267 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity76,
						'year' =>3,
						'value' => 0.25,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia268 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity77,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia269 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity78,
						'year' =>3,
						'value' => 0.8,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia270 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity79,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia271 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity81,
						'year' =>3,
						'value' => 2,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia273 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity82,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia274 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity84,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia276 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity85,
						'year' =>3,
						'value' => 0.6,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia277 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity86,
						'year' =>3,
						'value' => 0.6,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia278 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity87,
						'year' =>3,
						'value' => 0.35,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia279 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity88,
						'year' =>3,
						'value' => 0.95,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia280 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity89,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia281 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity90,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia282 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity91,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia283 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity92,
						'year' =>3,
						'value' => 0.78,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia284 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity93,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia285 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity94,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia286 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity95,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia287 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity96,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia288 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity2,
						'year' =>4,
						'value' => 25,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia290 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia291 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>4,
						'value' => 3,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia292 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity5,
						'year' =>4,
						'value' => 0.3,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia293 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity8,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia296 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>4,
						'value' => 7,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia298 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity11,
						'year' =>4,
						'value' => 7,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia299 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity14,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia302 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity16,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia304 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity17,
						'year' =>4,
						'value' => 4,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia305 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity18,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia306 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity19,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia307 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity20,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia308 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>4,
						'value' => 10,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia309 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity22,
						'year' =>4,
						'value' => 40,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia310 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity23,
						'year' =>4,
						'value' => 1.8,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia311 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia313 = DB::getPdo()->lastInsertId(); 



					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity29,
						'year' =>4,
						'value' => 10000,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia317 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity31,
						'year' =>4,
						'value' => 2,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia319 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity32,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia320 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity35,
						'year' =>4,
						'value' => 2,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia323 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity37,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia325 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity39,
						'year' =>4,
						'value' => 95,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia327 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity40,
						'year' =>4,
						'value' => 70,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia328 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity41,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia329 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>4,
						'value' => 2,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia330 = DB::getPdo()->lastInsertId(); 



					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>4,
						'value' => 10,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia334 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity48,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia336 = DB::getPdo()->lastInsertId(); 



					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity52,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia340 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity53,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia341 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>4,
						'value' => 2,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia343 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity56,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia344 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia345 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>4,
						'value' => 1000,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia347 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity60,
						'year' =>4,
						'value' => 2,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia348 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity62,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia350 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity63,
						'year' =>4,
						'value' => 20,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia351 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity65,
						'year' =>4,
						'value' => 2,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia353 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity66,
						'year' =>4,
						'value' => 4,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia354 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity67,
						'year' =>4,
						'value' => 5,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia355 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity69,
						'year' =>4,
						'value' => 25,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia357 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity70,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia358 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity73,
						'year' =>4,
						'value' => 50,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia361 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity74,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia362 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity76,
						'year' =>4,
						'value' => 25,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia364 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity78,
						'year' =>4,
						'value' => 80,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia366 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity79,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia367 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity82,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia370 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity84,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia372 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity85,
						'year' =>4,
						'value' => 60,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia373 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity86,
						'year' =>4,
						'value' => 60,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia374 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity87,
						'year' =>4,
						'value' => 32.52,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia375 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity88,
						'year' =>4,
						'value' => 95,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia376 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity89,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia377 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity90,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia378 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity91,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia379 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity92,
						'year' =>4,
						'value' => 80,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia380 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity93,
						'year' =>4,
						'value' => 1.8,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia381 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity94,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia382 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity95,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia383 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity96,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia384 = DB::getPdo()->lastInsertId(); 

					 DB::table('financing_sources')->insert([
						'father_id' => 11,
						'code' => '1.1.1.1.1.1.1.1',
						'name' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
						'description' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 26,
						]);
						$idFuente2 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 90,
						'code' => '1.1.2.4.2.3',
						'name' => 'Venta de bienes y servicios',
						'description' => 'Venta de bienes y servicios',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 26,
						]);
						$idFuente3 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 58,
						'code' => '1.1.2.2.2.1.1',
						'name' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
						'description' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 26,
						]);
						$idFuente4 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 27,
						'code' => '1.1.2.1.1.1.1.1',
						'name' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia actual)',
						'description' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 26,
						]);
						$idFuente5 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 208,
						'code' => '1.2.5.1.3',
						'name' => 'Otros Convenios',
						'description' => 'Otros Convenios',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 26,
						]);
						$idFuente6 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 42,
						'code' => '1.1.2.2.1.1.1.1',
						'name' => 'Tasa retributiva (vigencia actual)',
						'description' => 'Tasa retributiva (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 26,
						]);
						$idFuente7 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 45,
						'code' => '1.1.2.2.1.1.2.1',
						'name' => 'Tasa por el uso del agua (vigencia actual)',
						'description' => 'Tasa por el uso del agua (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 26,
						]);
						$idFuente8 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 84,
						'code' => '1.1.2.3.1.1.1',
						'name' => 'Multas ambientales (vigencia actual)',
						'description' => 'Multas ambientales (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 26,
						]);
						$idFuente9 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 79,
						'code' => '1.1.2.2.2.8.1',
						'name' => 'Otros servicios (vigencia actual)',
						'description' => 'Otros servicios (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 26,
						]);
						$idFuente10 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 145,
						'code' => '1.2.2.6',
						'name' => 'Rendimientos financieros',
						'description' => 'Rendimientos financieros',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 26,
						]);
						$idFuente11 = DB::getPdo()->lastInsertId();
						 
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 279,
						'code' => '1.2.7.3.3.5',
						'name' => 'Cancelación de reservas Otras tasas',
						'description' => 'Cancelación de reservas Otras tasas',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 26,
						]);
						$idFuente12 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 241,
						'code' => '1.2.6.3.5',
						'name' => 'Recuperación de cartera Otras tasas',
						'description' => 'Recuperación de cartera Otras tasas',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 26,
						]);
						$idFuente13 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 250,
						'code' => '1.2.7.4',
						'name' => 'Otros recursos del balance',
						'description' => 'Otros recursos del balance',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 26,
						]);
						$idFuente14 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 225,
						'code' => '1.2.5.12.4',
						'name' => 'Donaciones',
						'description' => 'Donaciones',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 26,
						]);
						$idFuente15 = DB::getPdo()->lastInsertId();

					DB::table('financing_sources')->insert([
						'father_id' => 14,
						'code' => '1.1.1.1.1.1.2.1',
						'name' => 'Participación del porcentaje ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
						'description' => 'Participación del porcentaje ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 26,
						]);
						$idFuente1 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 90,
						'code' => '1.2.1.2',
						'name' => 'Venta de Activos',
						'description' => 'Venta de Activos',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 26,
						]);
						$idFuente16 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 119,
						'code' => '1.1.2.5.1.1.1.4',
						'name' => 'Aportes de la Nación Funcionamiento',
						'description' => 'Aportes de la Nación Funcionamiento',
						'type_id' => 23,
						'final_level' => true,
						'group_id' => 26,
						]);
						$idFuente17 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 118,
						'code' => '1.1.2.5.1.1.2',
						'name' => 'Aportes de la Nación para Inversión',
						'description' => 'Aportes de la Nación para Inversión',
						'type_id' => 23,
						'final_level' => true,
						'group_id' => 26,
						]);
						$idFuente18 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente1,
						'value' => 2017900293,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 2017900293,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan1 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente2,
						'value' => 4800952213,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 4320856991.7,
						'debt_service' => 0,
						'fund' => 480095221.3,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan2 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente3,
						'value' => 1176651318,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 1058986186.2,
						'debt_service' => 0,
						'fund' => 117665131.8,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan3 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente4,
						'value' => 2095607442,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 209560744.2,
						'investment' => 1886046697.8,
						'year' => 1,
						]);
						$idPlan4 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente5,
						'value' => 2580090738,
						'functioning_percentage' => 10,
						'debt_service_percentage' => 0,
						'fund_percentage' => 20,
						'investment_percentage' => 70,
						'functioning' => 258009073.8,
						'debt_service' => 0,
						'fund' => 516018147.6,
						'investment' => 1806063516.6,
						'year' => 1,
						]);
						$idPlan5 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente6,
						'value' => 1339159366,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 133915936.6,
						'investment' => 1205243429.4,
						'year' => 1,
						]);
						$idPlan6 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente7,
						'value' => 626607615,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 563946853.5,
						'debt_service' => 0,
						'fund' => 62660761.5,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan7 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente8,
						'value' => 880747036,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 880747036,
						'year' => 1,
						]);
						$idPlan8 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente9,
						'value' => 245979126,
						'functioning_percentage' => 2.8203,
						'debt_service_percentage' => 0,
						'fund_percentage' => 2.521,
						'investment_percentage' => 94.6587,
						'functioning' => 6937349.290578,
						'debt_service' => 0,
						'fund' => 6201133.76646,
						'investment' => 232840642.942962,
						'year' => 1,
						]);
						$idPlan9 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente10,
						'value' => 80111934,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 8011193.4,
						'investment' => 72100740.6,
						'year' => 1,
						]);
						$idPlan10 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente11,
						'value' => 304735967,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 304735967,
						'year' => 1,
						]);
						$idPlan11 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente12,
						'value' => 1000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1000,
						'year' => 1,
						]);
						$idPlan12 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente13,
						'value' => 2978337646,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 2978337646,
						'year' => 1,
						]);
						$idPlan13 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente14,
						'value' => 8149434780.53,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 8149434780.53,
						'year' => 1,
						]);
						$idPlan14 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente15,
						'value' => 1000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1000,
						'year' => 1,
						]);
						$idPlan15 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente17,
						'value' => 1783436420,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 1783436420,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan16 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente1,
						'value' => 2167597994,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 2167597994,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan17 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente2,
						'value' => 4946436323,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 4946436323,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan18 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente3,
						'value' => 1311950858,
						'functioning_percentage' => 70,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 20,
						'functioning' => 918365600.6,
						'debt_service' => 0,
						'fund' => 131195085.8,
						'investment' => 262390171.6,
						'year' => 2,
						]);
						$idPlan19 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente4,
						'value' => 2355475665,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 2355475665,
						'year' => 2,
						]);
						$idPlan20 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente5,
						'value' => 2692344458,
						'functioning_percentage' => 20,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 80,
						'functioning' => 538468891.6,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 2153875566.4,
						'year' => 2,
						]);
						$idPlan21 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente6,
						'value' => 5616383452,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 5616383452,
						'year' => 2,
						]);
						$idPlan22 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente7,
						'value' => 644870164,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 64487016.4,
						'investment' => 580383147.6,
						'year' => 2,
						]);
						$idPlan23 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente8,
						'value' => 823411600,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 82341160,
						'investment' => 741070440,
						'year' => 2,
						]);
						$idPlan24 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente9,
						'value' => 70119477,
						'functioning_percentage' => 5.463,
						'debt_service_percentage' => 0,
						'fund_percentage' => 67.269,
						'investment_percentage' => 27.268,
						'functioning' => 3830627.02851,
						'debt_service' => 0,
						'fund' => 47168670.98313,
						'investment' => 19120178.98836,
						'year' => 2,
						]);
						$idPlan25 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente10,
						'value' => 43826277,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 4382627.7,
						'investment' => 39443649.3,
						'year' => 2,
						]);
						$idPlan26 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente11,
						'value' => 347000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 347000000,
						'year' => 2,
						]);
						$idPlan27 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente13,
						'value' => 1723873815,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1723873815,
						'year' => 2,
						]);
						$idPlan28 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente14,
						'value' => 12243418868,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 1224341886.8,
						'investment' => 11019076981.2,
						'year' => 2,
						]);
						$idPlan29 = DB::getPdo()->lastInsertId();
						 


					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente17,
						'value' => 1902394093,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 1902394093,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan30 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente18,
						'value' => 2946829890,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 2946829890,
						'year' => 2,
						]);
						$idPlan31 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente1,
						'value' => 2284808155,
						'functioning_percentage' => 70,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 20,
						'functioning' => 1599365708.5,
						'debt_service' => 0,
						'fund' => 228480815.5,
						'investment' => 456961631,
						'year' => 3,
						]);
						$idPlan32 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente2,
						'value' => 4857561770,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 4857561770,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan33 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente3,
						'value' => 1351309384,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 135130938.4,
						'investment' => 1216178445.6,
						'year' => 3,
						]);
						$idPlan34 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente4,
						'value' => 2586139935,
						'functioning_percentage' => 80,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 10,
						'functioning' => 2068911948,
						'debt_service' => 0,
						'fund' => 258613993.5,
						'investment' => 258613993.5,
						'year' => 3,
						]);
						$idPlan35 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente5,
						'value' => 2892091836,
						'functioning_percentage' => 10,
						'debt_service_percentage' => 0,
						'fund_percentage' => 20,
						'investment_percentage' => 70,
						'functioning' => 289209183.6,
						'debt_service' => 0,
						'fund' => 578418367.2,
						'investment' => 2024464285.2,
						'year' => 3,
						]);
						$idPlan36 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente6,
						'value' => 11167898498,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 11167898498,
						'year' => 3,
						]);
						$idPlan37 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente7,
						'value' => 735499090,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 735499090,
						'year' => 3,
						]);
						$idPlan38 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente8,
						'value' => 2000000000,
						'functioning_percentage' => 5,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 85,
						'functioning' => 100000000,
						'debt_service' => 0,
						'fund' => 200000000,
						'investment' => 1700000000,
						'year' => 3,
						]);
						$idPlan39 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente9,
						'value' => 155000000,
						'functioning_percentage' => 13.723,
						'debt_service_percentage' => 0,
						'fund_percentage' => 14.1309,
						'investment_percentage' => 72.1461,
						'functioning' => 21270650,
						'debt_service' => 0,
						'fund' => 21902895,
						'investment' => 111826455,
						'year' => 3,
						]);
						$idPlan40 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente10,
						'value' => 56240000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 56240000,
						'year' => 3,
						]);
						$idPlan41 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente11,
						'value' => 260000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 260000000,
						'year' => 3,
						]);
						$idPlan42 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente13,
						'value' => 2503504277,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 250350427.7,
						'investment' => 2253153849.3,
						'year' => 3,
						]);
						$idPlan43 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente14,
						'value' => 11105889278.2,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 11105889278.2,
						'year' => 3,
						]);
						$idPlan44 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente15,
						'value' => 1000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1000,
						'year' => 3,
						]);
						$idPlan45 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente16,
						'value' => 1000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1000,
						'year' => 3,
						]);
						$idPlan46 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente17,
						'value' => 1998402942,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 1998402942,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan47 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente18,
						'value' => 1736301020,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1736301020,
						'year' => 3,
						]);
						$idPlan48 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente1,
						'value' => 2726191309,
						'functioning_percentage' => 80,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 10,
						'functioning' => 2180953047.2,
						'debt_service' => 0,
						'fund' => 272619130.9,
						'investment' => 272619130.9,
						'year' => 4,
						]);
						$idPlan49 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente2,
						'value' => 4902774195,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 4412496775.5,
						'debt_service' => 0,
						'fund' => 490277419.5,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan50 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente3,
						'value' => 1391848676,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1391848676,
						'year' => 4,
						]);
						$idPlan51 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente4,
						'value' => 2586139935,
						'functioning_percentage' => 80,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 10,
						'functioning' => 2068911948,
						'debt_service' => 0,
						'fund' => 258613993.5,
						'investment' => 258613993.5,
						'year' => 4,
						]);
						$idPlan52 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente5,
						'value' => 3181096342,
						'functioning_percentage' => 10,
						'debt_service_percentage' => 0,
						'fund_percentage' => 20,
						'investment_percentage' => 70,
						'functioning' => 318109634.2,
						'debt_service' => 0,
						'fund' => 636219268.4,
						'investment' => 2226767439.4,
						'year' => 4,
						]);
						$idPlan53 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente6,
						'value' => 7324786190,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 7324786190,
						'year' => 4,
						]);
						$idPlan54 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente7,
						'value' => 702116000,
						'functioning_percentage' => 30,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 60,
						'functioning' => 210634800,
						'debt_service' => 0,
						'fund' => 70211600,
						'investment' => 421269600,
						'year' => 4,
						]);
						$idPlan55 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente8,
						'value' => 1578000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1578000000,
						'year' => 4,
						]);
						$idPlan56 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente9,
						'value' => 180000000,
						'functioning_percentage' => 10.001,
						'debt_service_percentage' => 0,
						'fund_percentage' => 11.32,
						'investment_percentage' => 78.679,
						'functioning' => 18001800,
						'debt_service' => 0,
						'fund' => 20376000,
						'investment' => 141622200,
						'year' => 4,
						]);
						$idPlan57 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente10,
						'value' => 73952118,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 73952118,
						'year' => 4,
						]);
						$idPlan58 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente11,
						'value' => 275000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 27500000,
						'investment' => 247500000,
						'year' => 4,
						]);
						$idPlan59 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente12,
						'value' => 1000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1000,
						'year' => 4,
						]);
						$idPlan60 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente13,
						'value' => 2629391658,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 2629391658,
						'year' => 4,
						]);
						$idPlan61 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente14,
						'value' => 16484456078,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 16484456078,
						'year' => 4,
						]);
						$idPlan62 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente15,
						'value' => 1000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1000,
						'year' => 4,
						]);
						$idPlan63 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente17,
						'value' => 2075633000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 2075633000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan64 = DB::getPdo()->lastInsertId();
						 
					  DB::table('implementations')->insert([
						'p_a_i_s_id'=>$idpai1,
						]);
						$idImplementation1 = DB::getPdo()->lastInsertId();

					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 2043336211.55,
						'financial_plans_id' => $idPlan1,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo1 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 4836250569,
						'financial_plans_id' => $idPlan2,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo2 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 1535319064,
						'financial_plans_id' => $idPlan3,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo3 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 8199421147,
						'financial_plans_id' => $idPlan4,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo4 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 2971102807,
						'financial_plans_id' => $idPlan5,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo5 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 1176630250.9,
						'financial_plans_id' => $idPlan6,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo6 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 653656459,
						'financial_plans_id' => $idPlan7,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo7 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 874916428,
						'financial_plans_id' => $idPlan8,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo8 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 487953226,
						'financial_plans_id' => $idPlan9,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo9 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 56199426,
						'financial_plans_id' => $idPlan10,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo10 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 732083597.81,
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
						'value' => 2072373088,
						'financial_plans_id' => $idPlan13,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo13 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 8144754780.53,
						'financial_plans_id' => $idPlan14,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo14 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 0,
						'financial_plans_id' => $idPlan15,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo15 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 1783436419.96,
						'financial_plans_id' => $idPlan16,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo16 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 2339346545,
						'financial_plans_id' => $idPlan17,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo17 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 5046124844,
						'financial_plans_id' => $idPlan18,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo18 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 1834089904,
						'financial_plans_id' => $idPlan19,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo19 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 3920218057,
						'financial_plans_id' => $idPlan20,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo20 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 3367345310,
						'financial_plans_id' => $idPlan21,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo21 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 8868859886,
						'financial_plans_id' => $idPlan22,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo22 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 790774964,
						'financial_plans_id' => $idPlan23,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo23 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 1010235672,
						'financial_plans_id' => $idPlan24,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo24 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 211235323,
						'financial_plans_id' => $idPlan25,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo25 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 193697900,
						'financial_plans_id' => $idPlan26,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo26 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 766959341,
						'financial_plans_id' => $idPlan27,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo27 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 3183301753,
						'financial_plans_id' => $idPlan28,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo28 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 12132666302,
						'financial_plans_id' => $idPlan29,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo29 = DB::getPdo()->lastInsertId();
						 


					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 1894097870,
						'financial_plans_id' => $idPlan30,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo30 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 253949627,
						'financial_plans_id' => $idPlan31,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo31 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 2583266809.55,
						'financial_plans_id' => $idPlan32,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo32 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 4987027055.3,
						'financial_plans_id' => $idPlan33,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo33 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 1270549309,
						'financial_plans_id' => $idPlan34,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo34 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 2759758064,
						'financial_plans_id' => $idPlan35,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo35 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 4985406978,
						'financial_plans_id' => $idPlan36,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo36 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 14279644543,
						'financial_plans_id' => $idPlan37,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo37 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 885734073,
						'financial_plans_id' => $idPlan38,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo38 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 1399900467,
						'financial_plans_id' => $idPlan39,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo39 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 503998269,
						'financial_plans_id' => $idPlan40,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo40 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 112615079,
						'financial_plans_id' => $idPlan41,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo41 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 531496275.76,
						'financial_plans_id' => $idPlan42,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo42 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 2191366302,
						'financial_plans_id' => $idPlan43,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo43 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 10926596808.2,
						'financial_plans_id' => $idPlan44,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo44 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 0,
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
						'value' => 1992008366,
						'financial_plans_id' => $idPlan47,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo47 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 868882306,
						'financial_plans_id' => $idPlan48,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo48 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 3255349846,
						'financial_plans_id' => $idPlan49,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo49 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 5333105103.8,
						'financial_plans_id' => $idPlan50,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo50 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 1869331217.23,
						'financial_plans_id' => $idPlan51,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo51 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 3831572713.79,
						'financial_plans_id' => $idPlan52,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo52 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 6561229859,
						'financial_plans_id' => $idPlan53,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo53 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 6823940463,
						'financial_plans_id' => $idPlan54,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo54 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 850553096.92,
						'financial_plans_id' => $idPlan55,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo55 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 1496705479.92,
						'financial_plans_id' => $idPlan56,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo56 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 910421409.44,
						'financial_plans_id' => $idPlan57,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo57 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 578072773.23,
						'financial_plans_id' => $idPlan58,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo58 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 550136687.47,
						'financial_plans_id' => $idPlan59,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo59 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 0,
						'financial_plans_id' => $idPlan60,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo60 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 3548317222.84,
						'financial_plans_id' => $idPlan61,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo61 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 16542431597,
						'financial_plans_id' => $idPlan62,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo62 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 0,
						'financial_plans_id' => $idPlan63,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo63 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 2073984957.5,
						'financial_plans_id' => $idPlan64,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo64 = DB::getPdo()->lastInsertId();
						 
                    DB::table('cost_sources')->insert([
                      'father_id' => 2,
                      'code' => '2.1.1',
                      'name' => 'GASTOS DE PERSONAL',
                      'description' => 'GASTOS DE PERSONAL',
                      'functioning' => TRUE,
                      'compensation' => FALSE,
                      'debt_service' => FALSE,
                      'group_id' => 26,
                      ]);
                      $idFuenteGasto1 = DB::getPdo()->lastInsertId();
                      
                      
                    DB::table('cost_sources')->insert([
                      'father_id' => 4,
                      'code' => '2.1.2.1',
                      'name' => 'Adquisición de activos no financieros',
                      'description' => 'Adquisición de activos no financieros',
                      'functioning' => TRUE,
                      'compensation' => FALSE,
                      'debt_service' => FALSE,
                      'group_id' => 26,
                      ]);
                      $idFuenteGasto2 = DB::getPdo()->lastInsertId();
                      
                      
                    DB::table('cost_sources')->insert([
                      'father_id' => 4,
                      'code' => '2.1.2.1',
                      'name' => 'Adquisiciones diferentes de activos',
                      'description' => 'Adquisiciones diferentes de activos',
                      'functioning' => TRUE,
                      'compensation' => FALSE,
                      'debt_service' => FALSE,
                      'group_id' => 26,
                      ]);
                      $idFuenteGasto3 = DB::getPdo()->lastInsertId();
                      
                      
                    DB::table('cost_sources')->insert([
                      'father_id' => 10,
                      'code' => '2.1.3.1.1.1.1',
                      'name' => 'Fondo de Compensación Ambiental - TSE (20%)',
                      'description' => 'Fondo de Compensación Ambiental - TSE (20%)',
                      'functioning' => FALSE,
                      'compensation' => TRUE,
                      'debt_service' => FALSE,
                      'group_id' => 26,
                      ]);
                      $idFuenteGasto6 = DB::getPdo()->lastInsertId();
                      
                      
                    DB::table('cost_sources')->insert([
                      'father_id' => 19,
                      'code' => '2.1.3.3.1',
                      'name' => 'Comisiones y otros gastos',
                      'description' => 'Comisiones y otros gastos',
                      'functioning' => TRUE,
                      'compensation' => FALSE,
                      'debt_service' => FALSE,
                      'group_id' => 26,
                      ]);
                      $idFuenteGasto8 = DB::getPdo()->lastInsertId();
                      
                      
                    DB::table('cost_sources')->insert([
                      'father_id' => 19,
                      'code' => '2.1.3.3.2',
                      'name' => 'Conciliaciones',
                      'description' => 'Conciliaciones',
                      'functioning' => TRUE,
                      'compensation' => FALSE,
                      'debt_service' => FALSE,
                      'group_id' => 26,
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
                      'group_id' => 26,
                      ]);
                      $idFuenteGasto5 = DB::getPdo()->lastInsertId();
                      
                      
                    DB::table('cost_sources')->insert([
                      'father_id' => 31,
                      'code' => '2.1.4.4.1',
                      'name' => 'Multas',
                      'description' => 'Multas',
                      'functioning' => TRUE,
                      'compensation' => FALSE,
                      'debt_service' => FALSE,
                      'group_id' => 26,
                      ]);
                      $idFuenteGasto4 = DB::getPdo()->lastInsertId();
                      
                      
                      DB::table('financial_costs')->insert([
                        'year' => 1,
                        'value_bugeted' => 5462146043,
                        'value_comitted' => 4909151316,
                        'value_paid' => 4766368285,
                        'own' => TRUE,
                        'nation' => FALSE,
                        'royalties' => FALSE,
                        'funds' => FALSE,
                        'functioning' => TRUE,
                        'compensation' => FALSE,
                        'debt_service' => FALSE,
                        'cost_sources_id' => $idFuenteGasto1,
                        'p_a_i_id' => $idpai1,
                        'group_id' => 26,
                        ]);
                        $idGasto1 = DB::getPdo()->lastInsertId();
                        
                        
                      DB::table('financial_costs')->insert([
                        'year' => 1,
                        'value_bugeted' => 683098180,
                        'value_comitted' => 525574202,
                        'value_paid' => 264140831,
                        'own' => TRUE,
                        'nation' => FALSE,
                        'royalties' => FALSE,
                        'funds' => FALSE,
                        'functioning' => TRUE,
                        'compensation' => FALSE,
                        'debt_service' => FALSE,
                        'cost_sources_id' => $idFuenteGasto2,
                        'p_a_i_id' => $idpai1,
                        'group_id' => 26,
                        ]);
                        $idGasto2 = DB::getPdo()->lastInsertId();
                        
                        
                      DB::table('financial_costs')->insert([
                        'year' => 1,
                        'value_bugeted' => 1769631499,
                        'value_comitted' => 1495565268.7,
                        'value_paid' => 1289914220.7,
                        'own' => TRUE,
                        'nation' => FALSE,
                        'royalties' => FALSE,
                        'funds' => FALSE,
                        'functioning' => TRUE,
                        'compensation' => FALSE,
                        'debt_service' => FALSE,
                        'cost_sources_id' => $idFuenteGasto3,
                        'p_a_i_id' => $idpai1,
                        'group_id' => 26,
                        ]);
                        $idGasto3 = DB::getPdo()->lastInsertId();
                        
                        
                      DB::table('financial_costs')->insert([
                        'year' => 1,
                        'value_bugeted' => 132915652,
                        'value_comitted' => 119158569.8,
                        'value_paid' => 119158569.8,
                        'own' => TRUE,
                        'nation' => FALSE,
                        'royalties' => FALSE,
                        'funds' => FALSE,
                        'functioning' => TRUE,
                        'compensation' => FALSE,
                        'debt_service' => FALSE,
                        'cost_sources_id' => $idFuenteGasto4,
                        'p_a_i_id' => $idpai1,
                        'group_id' => 26,
                        ]);
                        $idGasto4 = DB::getPdo()->lastInsertId();
                        
                        
                      DB::table('financial_costs')->insert([
                        'year' => 1,
                        'value_bugeted' => 43845459,
                        'value_comitted' => 27744064,
                        'value_paid' => 27744064,
                        'own' => TRUE,
                        'nation' => FALSE,
                        'royalties' => FALSE,
                        'funds' => FALSE,
                        'functioning' => TRUE,
                        'compensation' => FALSE,
                        'debt_service' => FALSE,
                        'cost_sources_id' => $idFuenteGasto5,
                        'p_a_i_id' => $idpai1,
                        'group_id' => 26,
                        ]);
                        $idGasto5 = DB::getPdo()->lastInsertId();
                        
                        
                      DB::table('financial_costs')->insert([
                        'year' => 1,
                        'value_bugeted' => 1534128455,
                        'value_comitted' => 1505550280,
                        'value_paid' => 1505550280,
                        'own' => TRUE,
                        'nation' => FALSE,
                        'royalties' => FALSE,
                        'funds' => FALSE,
                        'functioning' => FALSE,
                        'compensation' => TRUE,
                        'debt_service' => FALSE,
                        'cost_sources_id' => $idFuenteGasto6,
                        'p_a_i_id' => $idpai1,
                        'group_id' => 26,
                        ]);
                        $idGasto6 = DB::getPdo()->lastInsertId();
                        
                        
                      DB::table('financial_costs')->insert([
                        'year' => 1,
                        'value_bugeted' => 115000000,
                        'value_comitted' => 76236301,
                        'value_paid' => 76236301,
                        'own' => TRUE,
                        'nation' => FALSE,
                        'royalties' => FALSE,
                        'funds' => FALSE,
                        'functioning' => TRUE,
                        'compensation' => FALSE,
                        'debt_service' => FALSE,
                        'cost_sources_id' => $idFuenteGasto7,
                        'p_a_i_id' => $idpai1,
                        'group_id' => 26,
                        ]);
                        $idGasto7 = DB::getPdo()->lastInsertId();
                        
                        
                      DB::table('financial_costs')->insert([
                        'year' => 1,
                        'value_bugeted' => 20000000,
                        'value_comitted' => 17500820,
                        'value_paid' => 17500820,
                        'own' => TRUE,
                        'nation' => FALSE,
                        'royalties' => FALSE,
                        'funds' => FALSE,
                        'functioning' => TRUE,
                        'compensation' => FALSE,
                        'debt_service' => FALSE,
                        'cost_sources_id' => $idFuenteGasto8,
                        'p_a_i_id' => $idpai1,
                        'group_id' => 26,
                        ]);
                        $idGasto8 = DB::getPdo()->lastInsertId();
                        
                        
                        DB::table('financial_costs')->insert([
                          'year' => 1,
                          'value_bugeted' => 1710625000,
                          'value_comitted' => 1710625000,
                          'value_paid' => 1710625000,
                          'own' => FALSE,
                          'nation' => TRUE,
                          'royalties' => FALSE,
                          'funds' => FALSE,
                          'functioning' => TRUE,
                          'compensation' => FALSE,
                          'debt_service' => FALSE,
                          'cost_sources_id' => $idFuenteGasto1,
                          'p_a_i_id' => $idpai1,
                          'group_id' => 26,
                          ]);
                          $idGasto9 = DB::getPdo()->lastInsertId();
                          
                          
                        DB::table('financial_costs')->insert([
                          'year' => 1,
                          'value_bugeted' => 28386284,
                          'value_comitted' => 28386284,
                          'value_paid' => 28386284,
                          'own' => FALSE,
                          'nation' => TRUE,
                          'royalties' => FALSE,
                          'funds' => FALSE,
                          'functioning' => TRUE,
                          'compensation' => FALSE,
                          'debt_service' => FALSE,
                          'cost_sources_id' => $idFuenteGasto2,
                          'p_a_i_id' => $idpai1,
                          'group_id' => 26,
                          ]);
                          $idGasto10 = DB::getPdo()->lastInsertId();
                          
                          
                        DB::table('financial_costs')->insert([
                          'year' => 1,
                          'value_bugeted' => 38924136,
                          'value_comitted' => 38924135.96,
                          'value_paid' => 38924135.96,
                          'own' => FALSE,
                          'nation' => TRUE,
                          'royalties' => FALSE,
                          'funds' => FALSE,
                          'functioning' => TRUE,
                          'compensation' => FALSE,
                          'debt_service' => FALSE,
                          'cost_sources_id' => $idFuenteGasto3,
                          'p_a_i_id' => $idpai1,
                          'group_id' => 26,
                          ]);
                          $idGasto11 = DB::getPdo()->lastInsertId();
                          
                          
                        
                        DB::table('financial_costs')->insert([
                          'year' => 1,
                          'value_bugeted' => 5501000,
                          'value_comitted' => 5501000,
                          'value_paid' => 5501000,
                          'own' => FALSE,
                          'nation' => TRUE,
                          'royalties' => FALSE,
                          'funds' => FALSE,
                          'functioning' => TRUE,
                          'compensation' => FALSE,
                          'debt_service' => FALSE,
                          'cost_sources_id' => $idFuenteGasto5,
                          'p_a_i_id' => $idpai1,
                          'group_id' => 26,
                          ]);
                          $idGasto12 = DB::getPdo()->lastInsertId();
                          
                          
                       
                        
                         
                          DB::table('financial_costs')->insert([
                            'year' => 3,
                            'value_bugeted' => 5880961134,
                            'value_comitted' => 5775321463,
                            'value_paid' => 5462551088,
                            'own' => TRUE,
                            'nation' => FALSE,
                            'royalties' => FALSE,
                            'funds' => FALSE,
                            'functioning' => TRUE,
                            'compensation' => FALSE,
                            'debt_service' => FALSE,
                            'cost_sources_id' => $idFuenteGasto1,
                            'p_a_i_id' => $idpai1,
                            'group_id' => 26,
                            ]);
                            $idGasto13 = DB::getPdo()->lastInsertId();
                            
                            
                          DB::table('financial_costs')->insert([
                            'year' => 3,
                            'value_bugeted' => 780395397,
                            'value_comitted' => 628612860,
                            'value_paid' => 454411538,
                            'own' => TRUE,
                            'nation' => FALSE,
                            'royalties' => FALSE,
                            'funds' => FALSE,
                            'functioning' => TRUE,
                            'compensation' => FALSE,
                            'debt_service' => FALSE,
                            'cost_sources_id' => $idFuenteGasto2,
                            'p_a_i_id' => $idpai1,
                            'group_id' => 26,
                            ]);
                            $idGasto14 = DB::getPdo()->lastInsertId();
                            
                            
                          DB::table('financial_costs')->insert([
                            'year' => 3,
                            'value_bugeted' => 2001098861,
                            'value_comitted' => 1886880469,
                            'value_paid' => 1457047643,
                            'own' => TRUE,
                            'nation' => FALSE,
                            'royalties' => FALSE,
                            'funds' => FALSE,
                            'functioning' => TRUE,
                            'compensation' => FALSE,
                            'debt_service' => FALSE,
                            'cost_sources_id' => $idFuenteGasto3,
                            'p_a_i_id' => $idpai1,
                            'group_id' => 26,
                            ]);
                            $idGasto15 = DB::getPdo()->lastInsertId();
                            
                            
                          DB::table('financial_costs')->insert([
                            'year' => 3,
                            'value_bugeted' => 175000000,
                            'value_comitted' => 156455703,
                            'value_paid' => 156455703,
                            'own' => TRUE,
                            'nation' => FALSE,
                            'royalties' => FALSE,
                            'funds' => FALSE,
                            'functioning' => TRUE,
                            'compensation' => FALSE,
                            'debt_service' => FALSE,
                            'cost_sources_id' => $idFuenteGasto4,
                            'p_a_i_id' => $idpai1,
                            'group_id' => 26,
                            ]);
                            $idGasto16 = DB::getPdo()->lastInsertId();
                            
                            
                          DB::table('financial_costs')->insert([
                            'year' => 3,
                            'value_bugeted' => 70103029,
                            'value_comitted' => 70103029,
                            'value_paid' => 70103029,
                            'own' => TRUE,
                            'nation' => FALSE,
                            'royalties' => FALSE,
                            'funds' => FALSE,
                            'functioning' => TRUE,
                            'compensation' => FALSE,
                            'debt_service' => FALSE,
                            'cost_sources_id' => $idFuenteGasto5,
                            'p_a_i_id' => $idpai1,
                            'group_id' => 26,
                            ]);
                            $idGasto17 = DB::getPdo()->lastInsertId();
                            
                            
                          DB::table('financial_costs')->insert([
                            'year' => 3,
                            'value_bugeted' => 1672897159,
                            'value_comitted' => 1608004807,
                            'value_paid' => 1608004807,
                            'own' => TRUE,
                            'nation' => FALSE,
                            'royalties' => FALSE,
                            'funds' => FALSE,
                            'functioning' => FALSE,
                            'compensation' => TRUE,
                            'debt_service' => FALSE,
                            'cost_sources_id' => $idFuenteGasto6,
                            'p_a_i_id' => $idpai1,
                            'group_id' => 26,
                            ]);
                            $idGasto18 = DB::getPdo()->lastInsertId();
                            
                            
                         
                         
                            DB::table('financial_costs')->insert([
                              'year' => 3,
                              'value_bugeted' => 1919040280,
                              'value_comitted' => 1919040280,
                              'value_paid' => 1919040280,
                              'own' => FALSE,
                              'nation' => TRUE,
                              'royalties' => FALSE,
                              'funds' => FALSE,
                              'functioning' => TRUE,
                              'compensation' => FALSE,
                              'debt_service' => FALSE,
                              'cost_sources_id' => $idFuenteGasto1,
                              'p_a_i_id' => $idpai1,
                              'group_id' => 26,
                              ]);
                              $idGasto19 = DB::getPdo()->lastInsertId();
                              
                              
                            DB::table('financial_costs')->insert([
                              'year' => 3,
                              'value_bugeted' => 9751662,
                              'value_comitted' => 9751586,
                              'value_paid' => 9751586,
                              'own' => FALSE,
                              'nation' => TRUE,
                              'royalties' => FALSE,
                              'funds' => FALSE,
                              'functioning' => TRUE,
                              'compensation' => FALSE,
                              'debt_service' => FALSE,
                              'cost_sources_id' => $idFuenteGasto2,
                              'p_a_i_id' => $idpai1,
                              'group_id' => 26,
                              ]);
                              $idGasto20 = DB::getPdo()->lastInsertId();
                              
                              
                            DB::table('financial_costs')->insert([
                              'year' => 3,
                              'value_bugeted' => 63945000,
                              'value_comitted' => 63945000,
                              'value_paid' => 57550500,
                              'own' => FALSE,
                              'nation' => TRUE,
                              'royalties' => FALSE,
                              'funds' => FALSE,
                              'functioning' => TRUE,
                              'compensation' => FALSE,
                              'debt_service' => FALSE,
                              'cost_sources_id' => $idFuenteGasto3,
                              'p_a_i_id' => $idpai1,
                              'group_id' => 26,
                              ]);
                              $idGasto21 = DB::getPdo()->lastInsertId();
                              
                              
                            
                            DB::table('financial_costs')->insert([
                              'year' => 3,
                              'value_bugeted' => 5666000,
                              'value_comitted' => 5666000,
                              'value_paid' => 5666000,
                              'own' => FALSE,
                              'nation' => TRUE,
                              'royalties' => FALSE,
                              'funds' => FALSE,
                              'functioning' => TRUE,
                              'compensation' => FALSE,
                              'debt_service' => FALSE,
                              'cost_sources_id' => $idFuenteGasto5,
                              'p_a_i_id' => $idpai1,
                              'group_id' => 26,
                              ]);
                              $idGasto22 = DB::getPdo()->lastInsertId();
                              
                              
                            
                            
                           
                              DB::table('financial_costs')->insert([
                                'year' => 4,
                                'value_bugeted' => 6033445956,
                                'value_comitted' => 5992948545.5,
                                'value_paid' => 5632951819,
                                'own' => TRUE,
                                'nation' => FALSE,
                                'royalties' => FALSE,
                                'funds' => FALSE,
                                'functioning' => TRUE,
                                'compensation' => FALSE,
                                'debt_service' => FALSE,
                                'cost_sources_id' => $idFuenteGasto1,
                                'p_a_i_id' => $idpai1,
                                'group_id' => 26,
                                ]);
                                $idGasto23 = DB::getPdo()->lastInsertId();
                                
                                
                              DB::table('financial_costs')->insert([
                                'year' => 4,
                                'value_bugeted' => 637438043,
                                'value_comitted' => 620146088,
                                'value_paid' => 541966956,
                                'own' => TRUE,
                                'nation' => FALSE,
                                'royalties' => FALSE,
                                'funds' => FALSE,
                                'functioning' => TRUE,
                                'compensation' => FALSE,
                                'debt_service' => FALSE,
                                'cost_sources_id' => $idFuenteGasto2,
                                'p_a_i_id' => $idpai1,
                                'group_id' => 26,
                                ]);
                                $idGasto24 = DB::getPdo()->lastInsertId();
                                
                                
                              DB::table('financial_costs')->insert([
                                'year' => 4,
                                'value_bugeted' => 2285287863,
                                'value_comitted' => 2173265953.5,
                                'value_paid' => 1900967486.5,
                                'own' => TRUE,
                                'nation' => FALSE,
                                'royalties' => FALSE,
                                'funds' => FALSE,
                                'functioning' => TRUE,
                                'compensation' => FALSE,
                                'debt_service' => FALSE,
                                'cost_sources_id' => $idFuenteGasto3,
                                'p_a_i_id' => $idpai1,
                                'group_id' => 26,
                                ]);
                                $idGasto25 = DB::getPdo()->lastInsertId();
                                
                                
                              DB::table('financial_costs')->insert([
                                'year' => 4,
                                'value_bugeted' => 198000000,
                                'value_comitted' => 178113847.92,
                                'value_paid' => 178113847.92,
                                'own' => TRUE,
                                'nation' => FALSE,
                                'royalties' => FALSE,
                                'funds' => FALSE,
                                'functioning' => TRUE,
                                'compensation' => FALSE,
                                'debt_service' => FALSE,
                                'cost_sources_id' => $idFuenteGasto4,
                                'p_a_i_id' => $idpai1,
                                'group_id' => 26,
                                ]);
                                $idGasto26 = DB::getPdo()->lastInsertId();
                                
                                
                              DB::table('financial_costs')->insert([
                                'year' => 4,
                                'value_bugeted' => 29164000,
                                'value_comitted' => 29079600,
                                'value_paid' => 29079600,
                                'own' => TRUE,
                                'nation' => FALSE,
                                'royalties' => FALSE,
                                'funds' => FALSE,
                                'functioning' => TRUE,
                                'compensation' => FALSE,
                                'debt_service' => FALSE,
                                'cost_sources_id' => $idFuenteGasto5,
                                'p_a_i_id' => $idpai1,
                                'group_id' => 26,
                                ]);
                                $idGasto27 = DB::getPdo()->lastInsertId();
                                
                                
                              DB::table('financial_costs')->insert([
                                'year' => 4,
                                'value_bugeted' => 1775817008,
                                'value_comitted' => 1731744646,
                                'value_paid' => 1731744646,
                                'own' => TRUE,
                                'nation' => FALSE,
                                'royalties' => FALSE,
                                'funds' => FALSE,
                                'functioning' => FALSE,
                                'compensation' => TRUE,
                                'debt_service' => FALSE,
                                'cost_sources_id' => $idFuenteGasto6,
                                'p_a_i_id' => $idpai1,
                                'group_id' => 26,
                                ]);
                                $idGasto28 = DB::getPdo()->lastInsertId();
                                
                                
                             
                                DB::table('financial_costs')->insert([
                                  'year' => 4,
                                  'value_bugeted' => 2005852000,
                                  'value_comitted' => 2004203958,
                                  'value_paid' => 2004203958,
                                  'own' => FALSE,
                                  'nation' => TRUE,
                                  'royalties' => FALSE,
                                  'funds' => FALSE,
                                  'functioning' => TRUE,
                                  'compensation' => FALSE,
                                  'debt_service' => FALSE,
                                  'cost_sources_id' => $idFuenteGasto1,
                                  'p_a_i_id' => $idpai1,
                                  'group_id' => 26,
                                  ]);
                                  $idGasto29 = DB::getPdo()->lastInsertId();
                                  
                                  
                               
                                DB::table('financial_costs')->insert([
                                  'year' => 4,
                                  'value_bugeted' => 63945000,
                                  'value_comitted' => 63944999.5,
                                  'value_paid' => 63944999.5,
                                  'own' => FALSE,
                                  'nation' => TRUE,
                                  'royalties' => FALSE,
                                  'funds' => FALSE,
                                  'functioning' => TRUE,
                                  'compensation' => FALSE,
                                  'debt_service' => FALSE,
                                  'cost_sources_id' => $idFuenteGasto3,
                                  'p_a_i_id' => $idpai1,
                                  'group_id' => 26,
                                  ]);
                                  $idGasto30 = DB::getPdo()->lastInsertId();
                                  
                                  
                                
                                DB::table('financial_costs')->insert([
                                  'year' => 4,
                                  'value_bugeted' => 5836000,
                                  'value_comitted' => 5836000,
                                  'value_paid' => 5836000,
                                  'own' => FALSE,
                                  'nation' => TRUE,
                                  'royalties' => FALSE,
                                  'funds' => FALSE,
                                  'functioning' => TRUE,
                                  'compensation' => FALSE,
                                  'debt_service' => FALSE,
                                  'cost_sources_id' => $idFuenteGasto5,
                                  'p_a_i_id' => $idpai1,
                                  'group_id' => 26,
                                  ]);
                                  $idGasto31 = DB::getPdo()->lastInsertId();

                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity8,
                                    'source_id' =>$idPlan13,
                                    'value' => 1385400662.6,
                                    'goal' => 0,
                                    'evidence_balance' => 1385400662.6,
                                    'age' => 1,
                                    ]);
                                    $idactivitySource1 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity14,
                                    'source_id' =>$idPlan13,
                                    'value' => 41925933,
                                    'goal' => 0,
                                    'evidence_balance' => 41925933,
                                    'age' => 1,
                                    ]);
                                    $idactivitySource2 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity20,
                                    'source_id' =>$idPlan13,
                                    'value' => 277548313,
                                    'goal' => 0,
                                    'evidence_balance' => 277548313,
                                    'age' => 1,
                                    ]);
                                    $idactivitySource3 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity25,
                                    'source_id' =>$idPlan13,
                                    'value' => 956917359,
                                    'goal' => 0,
                                    'evidence_balance' => 956917359,
                                    'age' => 1,
                                    ]);
                                    $idactivitySource4 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity32,
                                    'source_id' =>$idPlan13,
                                    'value' => 316545378.4,
                                    'goal' => 0,
                                    'evidence_balance' => 316545378.4,
                                    'age' => 1,
                                    ]);
                                    $idactivitySource5 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity41,
                                    'source_id' =>$idPlan5,
                                    'value' => 968295713,
                                    'goal' => 0,
                                    'evidence_balance' => 968295713,
                                    'age' => 1,
                                    ]);
                                    $idactivitySource6 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity48,
                                    'source_id' =>$idPlan5,
                                    'value' => 35041859.4000001,
                                    'goal' => 0,
                                    'evidence_balance' => 35041859.4000001,
                                    'age' => 1,
                                    ]);
                                    $idactivitySource7 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity57,
                                    'source_id' =>$idPlan14,
                                    'value' => 1754265575.57,
                                    'goal' => 0,
                                    'evidence_balance' => 1754265575.57,
                                    'age' => 1,
                                    ]);
                                    $idactivitySource9 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity62,
                                    'source_id' =>$idPlan14,
                                    'value' => 64296680,
                                    'goal' => 0,
                                    'evidence_balance' => 64296680,
                                    'age' => 1,
                                    ]);
                                    $idactivitySource10 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity70,
                                    'source_id' =>$idPlan14,
                                    'value' => 853283060,
                                    'goal' => 0,
                                    'evidence_balance' => 853283060,
                                    'age' => 1,
                                    ]);
                                    $idactivitySource11 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity79,
                                    'source_id' =>$idPlan14,
                                    'value' => 1152295468,
                                    'goal' => 0,
                                    'evidence_balance' => 1152295468,
                                    'age' => 1,
                                    ]);
                                    $idactivitySource12 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity84,
                                    'source_id' =>$idPlan14,
                                    'value' => 324872192,
                                    'goal' => 0,
                                    'evidence_balance' => 324872192,
                                    'age' => 1,
                                    ]);
                                    $idactivitySource13 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity96,
                                    'source_id' =>$idPlan14,
                                    'value' => 725590948.809999,
                                    'goal' => 0,
                                    'evidence_balance' => 725590948.809999,
                                    'age' => 1,
                                    ]);
                                    $idactivitySource14 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity32,
                                      'source_id' =>$idPlan5,
                                      'value' => 1806063516.6,
                                      'goal' => 0,
                                      'evidence_balance' => 1806063516.6,
                                      'age' => 1,
                                      ]);
                                      $idactivitySource15 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity48,
                                      'source_id' =>$idPlan14,
                                      'value' => 3274830856.15,
                                      'goal' => 0,
                                      'evidence_balance' => 3274830856.15,
                                      'age' => 1,
                                      ]);
                                      $idactivitySource16 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity96,
                                      'source_id' =>$idPlan4,
                                      'value' => 1886046697.8,
                                      'goal' => 0,
                                      'evidence_balance' => 1886046697.8,
                                      'age' => 1,
                                      ]);
                                      $idactivitySource17 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                      DB::table('activity_sources')->insert([
                                        'activity_id' => $idactivity32,
                                        'source_id' =>$idPlan6,
                                        'value' => 201905857,
                                        'goal' => 0,
                                        'evidence_balance' => 201905857,
                                        'age' => 1,
                                        ]);
                                        $idactivitySource18 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('activity_sources')->insert([
                                        'activity_id' => $idactivity96,
                                        'source_id' =>$idPlan8,
                                        'value' => 880747036,
                                        'goal' => 0,
                                        'evidence_balance' => 880747036,
                                        'age' => 1,
                                        ]);
                                        $idactivitySource19 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity96,
                                          'source_id' =>$idPlan9,
                                          'value' => 232840642.942962,
                                          'goal' => 0,
                                          'evidence_balance' => 232840642.942962,
                                          'age' => 1,
                                          ]);
                                          $idactivitySource20 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          	DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity96,
                                          'source_id' =>$idPlan10,
                                          'value' => 72100740.6,
                                          'goal' => 0,
                                          'evidence_balance' => 72100740.6,
                                          'age' => 1,
                                          ]);
                                          $idactivitySource21 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          	DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity96,
                                          'source_id' =>$idPlan11,
                                          'value' => 304735967,
                                          'goal' => 0,
                                          'evidence_balance' => 304735967,
                                          'age' => 1,
                                          ]);
                                          $idactivitySource22 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          	DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity96,
                                          'source_id' =>$idPlan12,
                                          'value' => 1000,
                                          'goal' => 0,
                                          'evidence_balance' => 1000,
                                          'age' => 1,
                                          ]);
                                          $idactivitySource23 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia8,
                                            'activity_source_id' =>$idactivitySource1,
                                            'value' => 944868826,
                                            ]);
                                            $idevidenceFinancial1 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia14,
                                            'activity_source_id' =>$idactivitySource2,
                                            'value' => 41896367,
                                            ]);
                                            $idevidenceFinancial2 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia20,
                                            'activity_source_id' =>$idactivitySource3,
                                            'value' => 126483140,
                                            ]);
                                            $idevidenceFinancial3 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia25,
                                            'activity_source_id' =>$idactivitySource4,
                                            'value' => 542716541,
                                            ]);
                                            $idevidenceFinancial4 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia32,
                                            'activity_source_id' =>$idactivitySource5,
                                            'value' => 316545378.4,
                                            ]);
                                            $idevidenceFinancial5 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia41,
                                            'activity_source_id' =>$idactivitySource6,
                                            'value' => 546731468,
                                            ]);
                                            $idevidenceFinancial6 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia48,
                                            'activity_source_id' =>$idactivitySource7,
                                            'value' => 35041859.4000001,
                                            ]);
                                            $idevidenceFinancial7 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia57,
                                            'activity_source_id' =>$idactivitySource9,
                                            'value' => 1365273486,
                                            ]);
                                            $idevidenceFinancial9 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia62,
                                            'activity_source_id' =>$idactivitySource10,
                                            'value' => 6916980,
                                            ]);
                                            $idevidenceFinancial10 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia70,
                                            'activity_source_id' =>$idactivitySource11,
                                            'value' => 594683929,
                                            ]);
                                            $idevidenceFinancial11 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia79,
                                            'activity_source_id' =>$idactivitySource12,
                                            'value' => 872536748,
                                            ]);
                                            $idevidenceFinancial12 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia84,
                                            'activity_source_id' =>$idactivitySource13,
                                            'value' => 263530079,
                                            ]);
                                            $idevidenceFinancial13 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia96,
                                            'activity_source_id' =>$idactivitySource14,
                                            'value' => 725590948.809999,
                                            ]);
                                            $idevidenceFinancial14 = DB::getPdo()->lastInsertId();
                                            

                                            
                                              DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia32,
                                                'activity_source_id' =>$idactivitySource15,
                                                'value' => 1248795008.6,
                                                ]);
                                                $idevidenceFinancial15 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia48,
                                              'activity_source_id' =>$idactivitySource16,
                                              'value' => 1998709080.22,
                                              ]);
                                              $idevidenceFinancial16 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia96,
                                              'activity_source_id' =>$idactivitySource17,
                                              'value' => 1886046697.8,
                                              ]);
                                              $idevidenceFinancial17 = DB::getPdo()->lastInsertId();

                                                
                                              DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia96,
                                                'activity_source_id' =>$idactivitySource19,
                                                'value' => 880747036,
                                                ]);
                                                $idevidenceFinancial19 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                
                                                DB::table('evidence_financial')->insert([
                                                  'evidence_id' => $idevidencia96,
                                                  'activity_source_id' =>$idactivitySource20,
                                                  'value' => 232840642.942962,
                                                  ]);
                                                  $idevidenceFinancial20 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  	DB::table('evidence_financial')->insert([
                                                  'evidence_id' => $idevidencia96,
                                                  'activity_source_id' =>$idactivitySource21,
                                                  'value' => 72100740.6,
                                                  ]);
                                                  $idevidenceFinancial21 = DB::getPdo()->lastInsertId();
                                                  


                                                  DB::table('evidence_financial')->insert([
                                                    'evidence_id' => $idevidencia96,
                                                    'activity_source_id' =>$idactivitySource22,
                                                    'value' => 88840159.8470383,
                                                    ]);
                                                    $idevidenceFinancial22 = DB::getPdo()->lastInsertId();

                                                  

                                                  
                                                  
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity8,
                                                    'source_id' =>$idPlan31,
                                                    'value' => 2946829890,
                                                    'goal' => 0,
                                                    'evidence_balance' => 2946829890,
                                                    'age' => 2,
                                                    ]);
                                                    $idactivitySource24 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity14,
                                                    'source_id' =>$idPlan20,
                                                    'value' => 322205167,
                                                    'goal' => 0,
                                                    'evidence_balance' => 322205167,
                                                    'age' => 2,
                                                    ]);
                                                    $idactivitySource25 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity20,
                                                    'source_id' =>$idPlan20,
                                                    'value' => 337532402,
                                                    'goal' => 0,
                                                    'evidence_balance' => 337532402,
                                                    'age' => 2,
                                                    ]);
                                                    $idactivitySource26 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity25,
                                                    'source_id' =>$idPlan20,
                                                    'value' => 993714036,
                                                    'goal' => 0,
                                                    'evidence_balance' => 993714036,
                                                    'age' => 2,
                                                    ]);
                                                    $idactivitySource27 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity32,
                                                    'source_id' =>$idPlan29,
                                                    'value' => 2272711634,
                                                    'goal' => 0,
                                                    'evidence_balance' => 2272711634,
                                                    'age' => 2,
                                                    ]);
                                                    $idactivitySource28 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity41,
                                                    'source_id' =>$idPlan29,
                                                    'value' => 2542462294,
                                                    'goal' => 0,
                                                    'evidence_balance' => 2542462294,
                                                    'age' => 2,
                                                    ]);
                                                    $idactivitySource29 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity48,
                                                    'source_id' =>$idPlan29,
                                                    'value' => 299132037.200001,
                                                    'goal' => 0,
                                                    'evidence_balance' => 299132037.200001,
                                                    'age' => 2,
                                                    ]);
                                                    $idactivitySource30 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity57,
                                                    'source_id' =>$idPlan21,
                                                    'value' => 1160694744.6,
                                                    'goal' => 0,
                                                    'evidence_balance' => 1160694744.6,
                                                    'age' => 2,
                                                    ]);
                                                    $idactivitySource31 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity62,
                                                    'source_id' =>$idPlan28,
                                                    'value' => 240739716,
                                                    'goal' => 0,
                                                    'evidence_balance' => 240739716,
                                                    'age' => 2,
                                                    ]);
                                                    $idactivitySource32 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity70,
                                                    'source_id' =>$idPlan28,
                                                    'value' => 301610800.600001,
                                                    'goal' => 0,
                                                    'evidence_balance' => 301610800.600001,
                                                    'age' => 2,
                                                    ]);
                                                    $idactivitySource33 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity79,
                                                    'source_id' =>$idPlan24,
                                                    'value' => 172601300.600001,
                                                    'goal' => 0,
                                                    'evidence_balance' => 172601300.600001,
                                                    'age' => 2,
                                                    ]);
                                                    $idactivitySource34 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity84,
                                                    'source_id' =>$idPlan22,
                                                    'value' => 393780856,
                                                    'goal' => 0,
                                                    'evidence_balance' => 393780856,
                                                    'age' => 2,
                                                    ]);
                                                    $idactivitySource35 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity96,
                                                    'source_id' =>$idPlan22,
                                                    'value' => 3866508868.6,
                                                    'goal' => 0,
                                                    'evidence_balance' => 3866508868.6,
                                                    'age' => 2,
                                                    ]);
                                                    $idactivitySource36 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  
                                                    
                                                    
                                                    DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity8,
                                                      'source_id' =>$idPlan31,
                                                      'value' => 2946829890,
                                                      'goal' => 0,
                                                      'evidence_balance' => 2946829890,
                                                      'age' => 2,
                                                      ]);
                                                      $idactivitySource24 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity25,
                                                      'source_id' =>$idPlan20,
                                                      'value' => 993714036,
                                                      'goal' => 0,
                                                      'evidence_balance' => 993714036,
                                                      'age' => 2,
                                                      ]);
                                                      $idactivitySource27 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity48,
                                                      'source_id' =>$idPlan29,
                                                      'value' => 299132037.200001,
                                                      'goal' => 0,
                                                      'evidence_balance' => 299132037.200001,
                                                      'age' => 2,
                                                      ]);
                                                      $idactivitySource30 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity57,
                                                      'source_id' =>$idPlan21,
                                                      'value' => 1160694744.6,
                                                      'goal' => 0,
                                                      'evidence_balance' => 1160694744.6,
                                                      'age' => 2,
                                                      ]);
                                                      $idactivitySource31 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity70,
                                                      'source_id' =>$idPlan28,
                                                      'value' => 301610800.600001,
                                                      'goal' => 0,
                                                      'evidence_balance' => 301610800.600001,
                                                      'age' => 2,
                                                      ]);
                                                      $idactivitySource33 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity79,
                                                      'source_id' =>$idPlan24,
                                                      'value' => 172601300.600001,
                                                      'goal' => 0,
                                                      'evidence_balance' => 172601300.600001,
                                                      'age' => 2,
                                                      ]);
                                                      $idactivitySource34 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity96,
                                                      'source_id' =>$idPlan22,
                                                      'value' => 3866508868.6,
                                                      'goal' => 0,
                                                      'evidence_balance' => 3866508868.6,
                                                      'age' => 2,
                                                      ]);
                                                      $idactivitySource36 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                      DB::table('activity_sources')->insert([
                                                        'activity_id' => $idactivity8,
                                                        'source_id' =>$idPlan20,
                                                        'value' => 702024060,
                                                        'goal' => 0,
                                                        'evidence_balance' => 702024060,
                                                        'age' => 2,
                                                        ]);
                                                        $idactivitySource37 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('activity_sources')->insert([
                                                        'activity_id' => $idactivity25,
                                                        'source_id' =>$idPlan29,
                                                        'value' => 5904771016,
                                                        'goal' => 0,
                                                        'evidence_balance' => 5904771016,
                                                        'age' => 2,
                                                        ]);
                                                        $idactivitySource38 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('activity_sources')->insert([
                                                        'activity_id' => $idactivity48,
                                                        'source_id' =>$idPlan21,
                                                        'value' => 993180821.799999,
                                                        'goal' => 0,
                                                        'evidence_balance' => 993180821.799999,
                                                        'age' => 2,
                                                        ]);
                                                        $idactivitySource39 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('activity_sources')->insert([
                                                        'activity_id' => $idactivity57,
                                                        'source_id' =>$idPlan28,
                                                        'value' => 1181523298.4,
                                                        'goal' => 0,
                                                        'evidence_balance' => 1181523298.4,
                                                        'age' => 2,
                                                        ]);
                                                        $idactivitySource40 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('activity_sources')->insert([
                                                        'activity_id' => $idactivity70,
                                                        'source_id' =>$idPlan24,
                                                        'value' => 568469139.399999,
                                                        'goal' => 0,
                                                        'evidence_balance' => 568469139.399999,
                                                        'age' => 2,
                                                        ]);
                                                        $idactivitySource41 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('activity_sources')->insert([
                                                        'activity_id' => $idactivity79,
                                                        'source_id' =>$idPlan22,
                                                        'value' => 1356093727.4,
                                                        'goal' => 0,
                                                        'evidence_balance' => 1356093727.4,
                                                        'age' => 2,
                                                        ]);
                                                        $idactivitySource42 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('activity_sources')->insert([
                                                        'activity_id' => $idactivity96,
                                                        'source_id' =>$idPlan19,
                                                        'value' => 262390171.6,
                                                        'goal' => 0,
                                                        'evidence_balance' => 262390171.6,
                                                        'age' => 2,
                                                        ]);
                                                        $idactivitySource43 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                        DB::table('activity_sources')->insert([
                                                          'activity_id' => $idactivity96,
                                                          'source_id' =>$idPlan23,
                                                          'value' => 580383147.6,
                                                          'goal' => 0,
                                                          'evidence_balance' => 580383147.6,
                                                          'age' => 2,
                                                          ]);
                                                          $idactivitySource44 = DB::getPdo()->lastInsertId();
                                                          
                                                          
                                                          	DB::table('activity_sources')->insert([
                                                          'activity_id' => $idactivity96,
                                                          'source_id' =>$idPlan25,
                                                          'value' => 19120178.98836,
                                                          'goal' => 0,
                                                          'evidence_balance' => 19120178.98836,
                                                          'age' => 2,
                                                          ]);
                                                          $idactivitySource45 = DB::getPdo()->lastInsertId();
                                                          
                                                          
                                                          	DB::table('activity_sources')->insert([
                                                          'activity_id' => $idactivity96,
                                                          'source_id' =>$idPlan26,
                                                          'value' => 39443649.3,
                                                          'goal' => 0,
                                                          'evidence_balance' => 39443649.3,
                                                          'age' => 2,
                                                          ]);
                                                          $idactivitySource46 = DB::getPdo()->lastInsertId();
                                                          
                                                          
                                                          	DB::table('activity_sources')->insert([
                                                          'activity_id' => $idactivity96,
                                                          'source_id' =>$idPlan27,
                                                          'value' => 347000000,
                                                          'goal' => 0,
                                                          'evidence_balance' => 347000000,
                                                          'age' => 2,
                                                          ]);
                                                          $idactivitySource47 = DB::getPdo()->lastInsertId();
                                                          
                                                          
                                                          
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia104,
                                                            'activity_source_id' =>$idactivitySource24,
                                                            'value' => 2946829890,
                                                            ]);
                                                            $idevidenceFinancial24 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia110,
                                                            'activity_source_id' =>$idactivitySource25,
                                                            'value' => 322098127,
                                                            ]);
                                                            $idevidenceFinancial25 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia116,
                                                            'activity_source_id' =>$idactivitySource26,
                                                            'value' => 320566089,
                                                            ]);
                                                            $idevidenceFinancial26 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia121,
                                                            'activity_source_id' =>$idactivitySource27,
                                                            'value' => 993714036,
                                                            ]);
                                                            $idevidenceFinancial27 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia128,
                                                            'activity_source_id' =>$idactivitySource28,
                                                            'value' => 1860635345,
                                                            ]);
                                                            $idevidenceFinancial28 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia137,
                                                            'activity_source_id' =>$idactivitySource29,
                                                            'value' => 2226932526,
                                                            ]);
                                                            $idevidenceFinancial29 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia144,
                                                            'activity_source_id' =>$idactivitySource30,
                                                            'value' => 299132037.200001,
                                                            ]);
                                                            $idevidenceFinancial30 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia153,
                                                            'activity_source_id' =>$idactivitySource31,
                                                            'value' => 1160694744.6,
                                                            ]);
                                                            $idevidenceFinancial31 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia158,
                                                            'activity_source_id' =>$idactivitySource32,
                                                            'value' => 184692763,
                                                            ]);
                                                            $idevidenceFinancial32 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia166,
                                                            'activity_source_id' =>$idactivitySource33,
                                                            'value' => 301610800.600001,
                                                            ]);
                                                            $idevidenceFinancial33 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia175,
                                                            'activity_source_id' =>$idactivitySource34,
                                                            'value' => 172601300.600001,
                                                            ]);
                                                            $idevidenceFinancial34 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia180,
                                                            'activity_source_id' =>$idactivitySource35,
                                                            'value' => 391434693,
                                                            ]);
                                                            $idevidenceFinancial35 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia192,
                                                            'activity_source_id' =>$idactivitySource36,
                                                            'value' => 3866508868.6,
                                                            ]);
                                                            $idevidenceFinancial36 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                            DB::table('evidence_financial')->insert([
                                                              'evidence_id' => $idevidencia104,
                                                              'activity_source_id' =>$idactivitySource37,
                                                              'value' => 587010240,
                                                              ]);
                                                              $idevidenceFinancial37 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('evidence_financial')->insert([
                                                              'evidence_id' => $idevidencia121,
                                                              'activity_source_id' =>$idactivitySource38,
                                                              'value' => 5885846067,
                                                              ]);
                                                              $idevidenceFinancial38 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('evidence_financial')->insert([
                                                              'evidence_id' => $idevidencia144,
                                                              'activity_source_id' =>$idactivitySource39,
                                                              'value' => 955727385.799999,
                                                              ]);
                                                              $idevidenceFinancial39 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('evidence_financial')->insert([
                                                              'evidence_id' => $idevidencia153,
                                                              'activity_source_id' =>$idactivitySource40,
                                                              'value' => 890938776.399999,
                                                              ]);
                                                              $idevidenceFinancial40 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('evidence_financial')->insert([
                                                              'evidence_id' => $idevidencia166,
                                                              'activity_source_id' =>$idactivitySource41,
                                                              'value' => 399954432.399999,
                                                              ]);
                                                              $idevidenceFinancial41 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('evidence_financial')->insert([
                                                              'evidence_id' => $idevidencia175,
                                                              'activity_source_id' =>$idactivitySource42,
                                                              'value' => 1329753332.4,
                                                              ]);
                                                              $idevidenceFinancial42 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('evidence_financial')->insert([
                                                              'evidence_id' => $idevidencia192,
                                                              'activity_source_id' =>$idactivitySource43,
                                                              'value' => 262390171.6,
                                                              ]);
                                                              $idevidenceFinancial43 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                              DB::table('evidence_financial')->insert([
                                                                'evidence_id' => $idevidencia192,
                                                                'activity_source_id' =>$idactivitySource44,
                                                                'value' => 580383147.6,
                                                                ]);
                                                                $idevidenceFinancial44 = DB::getPdo()->lastInsertId();
                                                                
                                                                
                                                                	DB::table('evidence_financial')->insert([
                                                                'evidence_id' => $idevidencia192,
                                                                'activity_source_id' =>$idactivitySource45,
                                                                'value' => 19120178.98836,
                                                                ]);
                                                                $idevidenceFinancial45 = DB::getPdo()->lastInsertId();
                                                                
                                                                
                                                                	DB::table('evidence_financial')->insert([
                                                                'evidence_id' => $idevidencia192,
                                                                'activity_source_id' =>$idactivitySource46,
                                                                'value' => 39443649.3,
                                                                ]);
                                                                $idevidenceFinancial46 = DB::getPdo()->lastInsertId();
                                                                
                                                                
                                                                	DB::table('evidence_financial')->insert([
                                                                'evidence_id' => $idevidencia192,
                                                                'activity_source_id' =>$idactivitySource47,
                                                                'value' => 238074343.911638,
                                                                ]);
                                                                $idevidenceFinancial47 = DB::getPdo()->lastInsertId();
                                                                
                                                                
                                                                
                                                                DB::table('activity_sources')->insert([
                                                                  'activity_id' => $idactivity8,
                                                                  'source_id' =>$idPlan33,
                                                                  'value' => 4857561770,
                                                                  'goal' => 0,
                                                                  'evidence_balance' => 4857561770,
                                                                  'age' => 3,
                                                                  ]);
                                                                  $idactivitySource48 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                DB::table('activity_sources')->insert([
                                                                  'activity_id' => $idactivity14,
                                                                  'source_id' =>$idPlan35,
                                                                  'value' => 1123422092,
                                                                  'goal' => 0,
                                                                  'evidence_balance' => 1123422092,
                                                                  'age' => 3,
                                                                  ]);
                                                                  $idactivitySource49 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                DB::table('activity_sources')->insert([
                                                                  'activity_id' => $idactivity20,
                                                                  'source_id' =>$idPlan35,
                                                                  'value' => 26751506,
                                                                  'goal' => 0,
                                                                  'evidence_balance' => 26751506,
                                                                  'age' => 3,
                                                                  ]);
                                                                  $idactivitySource50 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                DB::table('activity_sources')->insert([
                                                                  'activity_id' => $idactivity25,
                                                                  'source_id' =>$idPlan47,
                                                                  'value' => 646964531,
                                                                  'goal' => 0,
                                                                  'evidence_balance' => 646964531,
                                                                  'age' => 3,
                                                                  ]);
                                                                  $idactivitySource51 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity8,
                                                                    'source_id' =>$idPlan35,
                                                                    'value' => 918738350,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 918738350,
                                                                    'age' => 3,
                                                                    ]);
                                                                    $idactivitySource52 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity20,
                                                                    'source_id' =>$idPlan47,
                                                                    'value' => 1351438411,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 1351438411,
                                                                    'age' => 3,
                                                                    ]);
                                                                    $idactivitySource53 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity25,
                                                                    'source_id' =>$idPlan32,
                                                                    'value' => 1599365708.5,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 1599365708.5,
                                                                    'age' => 3,
                                                                    ]);
                                                                    $idactivitySource54 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity25,
                                                                      'source_id' =>$idPlan36,
                                                                      'value' => 289209183.6,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 289209183.6,
                                                                      'age' => 3,
                                                                      ]);
                                                                      $idactivitySource55 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      	DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity25,
                                                                      'source_id' =>$idPlan39,
                                                                      'value' => 100000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 100000000,
                                                                      'age' => 3,
                                                                      ]);
                                                                      $idactivitySource56 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      	DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity25,
                                                                      'source_id' =>$idPlan40,
                                                                      'value' => 21270650,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 21270650,
                                                                      'age' => 3,
                                                                      ]);
                                                                      $idactivitySource57 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia200,
                                                                        'activity_source_id' =>$idactivitySource48,
                                                                        'value' => 4857561770,
                                                                        ]);
                                                                        $idevidenceFinancial48 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia206,
                                                                        'activity_source_id' =>$idactivitySource49,
                                                                        'value' => 489470714,
                                                                        ]);
                                                                        $idevidenceFinancial49 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia212,
                                                                        'activity_source_id' =>$idactivitySource50,
                                                                        'value' => 26751506,
                                                                        ]);
                                                                        $idevidenceFinancial50 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia217,
                                                                        'activity_source_id' =>$idactivitySource51,
                                                                        'value' => 646964531,
                                                                        ]);
                                                                        $idevidenceFinancial51 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                        DB::table('evidence_financial')->insert([
                                                                          'evidence_id' => $idevidencia200,
                                                                          'activity_source_id' =>$idactivitySource52,
                                                                          'value' => 750610727,
                                                                          ]);
                                                                          $idevidenceFinancial52 = DB::getPdo()->lastInsertId();
                                                                          
                                                                          
                                                                          
                                                                        DB::table('evidence_financial')->insert([
                                                                          'evidence_id' => $idevidencia212,
                                                                          'activity_source_id' =>$idactivitySource53,
                                                                          'value' => 468485571,
                                                                          ]);
                                                                          $idevidenceFinancial53 = DB::getPdo()->lastInsertId();
                                                                          
                                                                          
                                                                          
                                                                        DB::table('evidence_financial')->insert([
                                                                          'evidence_id' => $idevidencia217,
                                                                          'activity_source_id' =>$idactivitySource54,
                                                                          'value' => 1599365708.5,
                                                                          ]);
                                                                          $idevidenceFinancial54 = DB::getPdo()->lastInsertId();
                                                                          
                                                                          
                                                                          
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia217,
                                                                            'activity_source_id' =>$idactivitySource55,
                                                                            'value' => 289209183.6,
                                                                            ]);
                                                                            $idevidenceFinancial55 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            	DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia217,
                                                                            'activity_source_id' =>$idactivitySource56,
                                                                            'value' => 100000000,
                                                                            ]);
                                                                            $idevidenceFinancial56 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            	DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia217,
                                                                            'activity_source_id' =>$idactivitySource57,
                                                                            'value' => 2465601405.9,
                                                                            ]);
                                                                            $idevidenceFinancial57 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                            DB::table('activity_sources')->insert([
                                                                              'activity_id' => $idactivity8,
                                                                              'source_id' =>$idPlan62,
                                                                              'value' => 8076493709,
                                                                              'goal' => 0,
                                                                              'evidence_balance' => 8076493709,
                                                                              'age' => 4,
                                                                              ]);
                                                                              $idactivitySource58 = DB::getPdo()->lastInsertId();
                                                                              
                                                                              
                                                                              
                                                                            DB::table('activity_sources')->insert([
                                                                              'activity_id' => $idactivity14,
                                                                              'source_id' =>$idPlan62,
                                                                              'value' => 1227393768,
                                                                              'goal' => 0,
                                                                              'evidence_balance' => 1227393768,
                                                                              'age' => 4,
                                                                              ]);
                                                                              $idactivitySource59 = DB::getPdo()->lastInsertId();
                                                                              
                                                                              
                                                                              
                                                                            DB::table('activity_sources')->insert([
                                                                              'activity_id' => $idactivity20,
                                                                              'source_id' =>$idPlan62,
                                                                              'value' => 2422268616,
                                                                              'goal' => 0,
                                                                              'evidence_balance' => 2422268616,
                                                                              'age' => 4,
                                                                              ]);
                                                                              $idactivitySource60 = DB::getPdo()->lastInsertId();
                                                                              
                                                                              
                                                                              
                                                                            DB::table('activity_sources')->insert([
                                                                              'activity_id' => $idactivity25,
                                                                              'source_id' =>$idPlan62,
                                                                              'value' => 3261989345,
                                                                              'goal' => 0,
                                                                              'evidence_balance' => 3261989345,
                                                                              'age' => 4,
                                                                              ]);
                                                                              $idactivitySource61 = DB::getPdo()->lastInsertId();
                                                                              
                                                                              
                                                                              
                                                                            DB::table('activity_sources')->insert([
                                                                              'activity_id' => $idactivity32,
                                                                              'source_id' =>$idPlan62,
                                                                              'value' => 1496310640,
                                                                              'goal' => 0,
                                                                              'evidence_balance' => 1496310640,
                                                                              'age' => 4,
                                                                              ]);
                                                                              $idactivitySource62 = DB::getPdo()->lastInsertId();
                                                                              
                                                                              
                                                                              
                                                                            DB::table('activity_sources')->insert([
                                                                              'activity_id' => $idactivity41,
                                                                              'source_id' =>$idPlan54,
                                                                              'value' => 1641318209,
                                                                              'goal' => 0,
                                                                              'evidence_balance' => 1641318209,
                                                                              'age' => 4,
                                                                              ]);
                                                                              $idactivitySource63 = DB::getPdo()->lastInsertId();
                                                                              
                                                                              
                                                                              
                                                                            DB::table('activity_sources')->insert([
                                                                              'activity_id' => $idactivity48,
                                                                              'source_id' =>$idPlan54,
                                                                              'value' => 550165168,
                                                                              'goal' => 0,
                                                                              'evidence_balance' => 550165168,
                                                                              'age' => 4,
                                                                              ]);
                                                                              $idactivitySource64 = DB::getPdo()->lastInsertId();
                                                                              
                                                                              
                                                                              
                                                                            DB::table('activity_sources')->insert([
                                                                              'activity_id' => $idactivity57,
                                                                              'source_id' =>$idPlan61,
                                                                              'value' => 1498934173,
                                                                              'goal' => 0,
                                                                              'evidence_balance' => 1498934173,
                                                                              'age' => 4,
                                                                              ]);
                                                                              $idactivitySource65 = DB::getPdo()->lastInsertId();
                                                                              
                                                                              
                                                                              
                                                                            DB::table('activity_sources')->insert([
                                                                              'activity_id' => $idactivity62,
                                                                              'source_id' =>$idPlan61,
                                                                              'value' => 10737024,
                                                                              'goal' => 0,
                                                                              'evidence_balance' => 10737024,
                                                                              'age' => 4,
                                                                              ]);
                                                                              $idactivitySource66 = DB::getPdo()->lastInsertId();
                                                                              
                                                                              
                                                                              
                                                                            DB::table('activity_sources')->insert([
                                                                              'activity_id' => $idactivity70,
                                                                              'source_id' =>$idPlan61,
                                                                              'value' => 211303649,
                                                                              'goal' => 0,
                                                                              'evidence_balance' => 211303649,
                                                                              'age' => 4,
                                                                              ]);
                                                                              $idactivitySource67 = DB::getPdo()->lastInsertId();
                                                                              
                                                                              
                                                                              
                                                                            DB::table('activity_sources')->insert([
                                                                              'activity_id' => $idactivity79,
                                                                              'source_id' =>$idPlan53,
                                                                              'value' => 908519665.4,
                                                                              'goal' => 0,
                                                                              'evidence_balance' => 908519665.4,
                                                                              'age' => 4,
                                                                              ]);
                                                                              $idactivitySource68 = DB::getPdo()->lastInsertId();
                                                                              
                                                                              
                                                                              
                                                                            DB::table('activity_sources')->insert([
                                                                              'activity_id' => $idactivity84,
                                                                              'source_id' =>$idPlan56,
                                                                              'value' => 157527766,
                                                                              'goal' => 0,
                                                                              'evidence_balance' => 157527766,
                                                                              'age' => 4,
                                                                              ]);
                                                                              $idactivitySource69 = DB::getPdo()->lastInsertId();
                                                                              
                                                                              
                                                                              
                                                                            DB::table('activity_sources')->insert([
                                                                              'activity_id' => $idactivity96,
                                                                              'source_id' =>$idPlan56,
                                                                              'value' => 1230292807.4,
                                                                              'goal' => 0,
                                                                              'evidence_balance' => 1230292807.4,
                                                                              'age' => 4,
                                                                              ]);
                                                                              $idactivitySource70 = DB::getPdo()->lastInsertId();
                                                                              
                                                                              
                                                                              
                                                                              DB::table('activity_sources')->insert([
                                                                                'activity_id' => $idactivity32,
                                                                                'source_id' =>$idPlan54,
                                                                                'value' => 5133302813,
                                                                                'goal' => 0,
                                                                                'evidence_balance' => 5133302813,
                                                                                'age' => 4,
                                                                                ]);
                                                                                $idactivitySource71 = DB::getPdo()->lastInsertId();
                                                                                
                                                                                
                                                                                
                                                                              DB::table('activity_sources')->insert([
                                                                                'activity_id' => $idactivity48,
                                                                                'source_id' =>$idPlan61,
                                                                                'value' => 908416812,
                                                                                'goal' => 0,
                                                                                'evidence_balance' => 908416812,
                                                                                'age' => 4,
                                                                                ]);
                                                                                $idactivitySource72 = DB::getPdo()->lastInsertId();
                                                                                
                                                                                
                                                                                
                                                                              DB::table('activity_sources')->insert([
                                                                                'activity_id' => $idactivity70,
                                                                                'source_id' =>$idPlan53,
                                                                                'value' => 1318247774,
                                                                                'goal' => 0,
                                                                                'evidence_balance' => 1318247774,
                                                                                'age' => 4,
                                                                                ]);
                                                                                $idactivitySource73 = DB::getPdo()->lastInsertId();
                                                                                
                                                                                
                                                                                
                                                                              DB::table('activity_sources')->insert([
                                                                                'activity_id' => $idactivity79,
                                                                                'source_id' =>$idPlan56,
                                                                                'value' => 190179426.6,
                                                                                'goal' => 0,
                                                                                'evidence_balance' => 190179426.6,
                                                                                'age' => 4,
                                                                                ]);
                                                                                $idactivitySource74 = DB::getPdo()->lastInsertId();
                                                                                
                                                                                
                                                                                
                                                                              DB::table('activity_sources')->insert([
                                                                                'activity_id' => $idactivity96,
                                                                                'source_id' =>$idPlan49,
                                                                                'value' => 272619130.9,
                                                                                'goal' => 0,
                                                                                'evidence_balance' => 272619130.9,
                                                                                'age' => 4,
                                                                                ]);
                                                                                $idactivitySource75 = DB::getPdo()->lastInsertId();
                                                                                
                                                                                
                                                                                
                                                                                DB::table('activity_sources')->insert([
                                                                                  'activity_id' => $idactivity96,
                                                                                  'source_id' =>$idPlan51,
                                                                                  'value' => 1391848676,
                                                                                  'goal' => 0,
                                                                                  'evidence_balance' => 1391848676,
                                                                                  'age' => 4,
                                                                                  ]);
                                                                                  $idactivitySource76 = DB::getPdo()->lastInsertId();
                                                                                  
                                                                                  
                                                                                  	DB::table('activity_sources')->insert([
                                                                                  'activity_id' => $idactivity96,
                                                                                  'source_id' =>$idPlan52,
                                                                                  'value' => 258613993.5,
                                                                                  'goal' => 0,
                                                                                  'evidence_balance' => 258613993.5,
                                                                                  'age' => 4,
                                                                                  ]);
                                                                                  $idactivitySource77 = DB::getPdo()->lastInsertId();
                                                                                  
                                                                                  
                                                                                  	DB::table('activity_sources')->insert([
                                                                                  'activity_id' => $idactivity96,
                                                                                  'source_id' =>$idPlan55,
                                                                                  'value' => 421269600,
                                                                                  'goal' => 0,
                                                                                  'evidence_balance' => 421269600,
                                                                                  'age' => 4,
                                                                                  ]);
                                                                                  $idactivitySource78 = DB::getPdo()->lastInsertId();
                                                                                  
                                                                                  
                                                                                  	DB::table('activity_sources')->insert([
                                                                                  'activity_id' => $idactivity96,
                                                                                  'source_id' =>$idPlan57,
                                                                                  'value' => 141622200,
                                                                                  'goal' => 0,
                                                                                  'evidence_balance' => 141622200,
                                                                                  'age' => 4,
                                                                                  ]);
                                                                                  $idactivitySource79 = DB::getPdo()->lastInsertId();
                                                                                  
                                                                                  
                                                                                  	DB::table('activity_sources')->insert([
                                                                                  'activity_id' => $idactivity96,
                                                                                  'source_id' =>$idPlan58,
                                                                                  'value' => 73952118,
                                                                                  'goal' => 0,
                                                                                  'evidence_balance' => 73952118,
                                                                                  'age' => 4,
                                                                                  ]);
                                                                                  $idactivitySource80 = DB::getPdo()->lastInsertId();
                                                                                  
                                                                                  
                                                                                  	DB::table('activity_sources')->insert([
                                                                                  'activity_id' => $idactivity96,
                                                                                  'source_id' =>$idPlan59,
                                                                                  'value' => 247500000,
                                                                                  'goal' => 0,
                                                                                  'evidence_balance' => 247500000,
                                                                                  'age' => 4,
                                                                                  ]);
                                                                                  $idactivitySource81 = DB::getPdo()->lastInsertId();
                                                                                  
                                                                                  
                                                                                  	DB::table('activity_sources')->insert([
                                                                                  'activity_id' => $idactivity96,
                                                                                  'source_id' =>$idPlan60,
                                                                                  'value' => 1000,
                                                                                  'goal' => 0,
                                                                                  'evidence_balance' => 1000,
                                                                                  'age' => 4,
                                                                                  ]);
                                                                                  $idactivitySource82 = DB::getPdo()->lastInsertId();
                                                                                  
                                                                                  
                                                                                  	DB::table('activity_sources')->insert([
                                                                                  'activity_id' => $idactivity96,
                                                                                  'source_id' =>$idPlan63,
                                                                                  'value' => 1000,
                                                                                  'goal' => 0,
                                                                                  'evidence_balance' => 1000,
                                                                                  'age' => 4,
                                                                                  ]);
                                                                                  $idactivitySource83 = DB::getPdo()->lastInsertId();
                                                                                  
                                                                                  
                                                                                  
                                                                                  DB::table('evidence_financial')->insert([
                                                                                    'evidence_id' => $idevidencia296,
                                                                                    'activity_source_id' =>$idactivitySource58,
                                                                                    'value' => 6386130175,
                                                                                    ]);
                                                                                    $idevidenceFinancial58 = DB::getPdo()->lastInsertId();
                                                                                    
                                                                                    
                                                                                    
                                                                                  DB::table('evidence_financial')->insert([
                                                                                    'evidence_id' => $idevidencia302,
                                                                                    'activity_source_id' =>$idactivitySource59,
                                                                                    'value' => 968838507,
                                                                                    ]);
                                                                                    $idevidenceFinancial59 = DB::getPdo()->lastInsertId();
                                                                                    
                                                                                    
                                                                                    
                                                                                  DB::table('evidence_financial')->insert([
                                                                                    'evidence_id' => $idevidencia308,
                                                                                    'activity_source_id' =>$idactivitySource60,
                                                                                    'value' => 2323202103,
                                                                                    ]);
                                                                                    $idevidenceFinancial60 = DB::getPdo()->lastInsertId();
                                                                                    
                                                                                    
                                                                                    
                                                                                  DB::table('evidence_financial')->insert([
                                                                                    'evidence_id' => $idevidencia313,
                                                                                    'activity_source_id' =>$idactivitySource61,
                                                                                    'value' => 2857489847,
                                                                                    ]);
                                                                                    $idevidenceFinancial61 = DB::getPdo()->lastInsertId();
                                                                                    
                                                                                    
                                                                                    
                                                                                  DB::table('evidence_financial')->insert([
                                                                                    'evidence_id' => $idevidencia320,
                                                                                    'activity_source_id' =>$idactivitySource62,
                                                                                    'value' => 1496310640,
                                                                                    ]);
                                                                                    $idevidenceFinancial62 = DB::getPdo()->lastInsertId();
                                                                                    
                                                                                    
                                                                                    
                                                                                  DB::table('evidence_financial')->insert([
                                                                                    'evidence_id' => $idevidencia329,
                                                                                    'activity_source_id' =>$idactivitySource63,
                                                                                    'value' => 1464578257,
                                                                                    ]);
                                                                                    $idevidenceFinancial63 = DB::getPdo()->lastInsertId();
                                                                                    
                                                                                    
                                                                                    
                                                                                  DB::table('evidence_financial')->insert([
                                                                                    'evidence_id' => $idevidencia336,
                                                                                    'activity_source_id' =>$idactivitySource64,
                                                                                    'value' => 550165168,
                                                                                    ]);
                                                                                    $idevidenceFinancial64 = DB::getPdo()->lastInsertId();
                                                                                    
                                                                                    
                                                                                    
                                                                                  DB::table('evidence_financial')->insert([
                                                                                    'evidence_id' => $idevidencia345,
                                                                                    'activity_source_id' =>$idactivitySource65,
                                                                                    'value' => 1485632855,
                                                                                    ]);
                                                                                    $idevidenceFinancial65 = DB::getPdo()->lastInsertId();
                                                                                    
                                                                                    
                                                                                    
                                                                                  DB::table('evidence_financial')->insert([
                                                                                    'evidence_id' => $idevidencia350,
                                                                                    'activity_source_id' =>$idactivitySource66,
                                                                                    'value' => 10729024,
                                                                                    ]);
                                                                                    $idevidenceFinancial66 = DB::getPdo()->lastInsertId();
                                                                                    
                                                                                    
                                                                                    
                                                                                  DB::table('evidence_financial')->insert([
                                                                                    'evidence_id' => $idevidencia358,
                                                                                    'activity_source_id' =>$idactivitySource67,
                                                                                    'value' => 211303649,
                                                                                    ]);
                                                                                    $idevidenceFinancial67 = DB::getPdo()->lastInsertId();
                                                                                    
                                                                                    
                                                                                    
                                                                                  DB::table('evidence_financial')->insert([
                                                                                    'evidence_id' => $idevidencia367,
                                                                                    'activity_source_id' =>$idactivitySource68,
                                                                                    'value' => 908519665.4,
                                                                                    ]);
                                                                                    $idevidenceFinancial68 = DB::getPdo()->lastInsertId();
                                                                                    
                                                                                    
                                                                                    
                                                                                  DB::table('evidence_financial')->insert([
                                                                                    'evidence_id' => $idevidencia372,
                                                                                    'activity_source_id' =>$idactivitySource69,
                                                                                    'value' => 156329866,
                                                                                    ]);
                                                                                    $idevidenceFinancial69 = DB::getPdo()->lastInsertId();
                                                                                    
                                                                                    
                                                                                    
                                                                                  DB::table('evidence_financial')->insert([
                                                                                    'evidence_id' => $idevidencia384,
                                                                                    'activity_source_id' =>$idactivitySource70,
                                                                                    'value' => 1230292807.4,
                                                                                    ]);
                                                                                    $idevidenceFinancial70 = DB::getPdo()->lastInsertId();
                                                                                    
                                                                                    
                                                                                    
                                                                                    DB::table('evidence_financial')->insert([
                                                                                      'evidence_id' => $idevidencia320,
                                                                                      'activity_source_id' =>$idactivitySource71,
                                                                                      'value' => 4776322159,
                                                                                      ]);
                                                                                      $idevidenceFinancial71 = DB::getPdo()->lastInsertId();
                                                                                      
                                                                                      
                                                                                      
                                                                                    DB::table('evidence_financial')->insert([
                                                                                      'evidence_id' => $idevidencia336,
                                                                                      'activity_source_id' =>$idactivitySource72,
                                                                                      'value' => 772468302,
                                                                                      ]);
                                                                                      $idevidenceFinancial72 = DB::getPdo()->lastInsertId();
                                                                                      
                                                                                      
                                                                                      
                                                                                    DB::table('evidence_financial')->insert([
                                                                                      'evidence_id' => $idevidencia358,
                                                                                      'activity_source_id' =>$idactivitySource73,
                                                                                      'value' => 909059729,
                                                                                      ]);
                                                                                      $idevidenceFinancial73 = DB::getPdo()->lastInsertId();
                                                                                      
                                                                                      
                                                                                      
                                                                                    DB::table('evidence_financial')->insert([
                                                                                      'evidence_id' => $idevidencia367,
                                                                                      'activity_source_id' =>$idactivitySource74,
                                                                                      'value' => 178105245.6,
                                                                                      ]);
                                                                                      $idevidenceFinancial74 = DB::getPdo()->lastInsertId();
                                                                                      
                                                                                      
                                                                                      
                                                                                    DB::table('evidence_financial')->insert([
                                                                                      'evidence_id' => $idevidencia384,
                                                                                      'activity_source_id' =>$idactivitySource75,
                                                                                      'value' => 272619130.9,
                                                                                      ]);
                                                                                      $idevidenceFinancial75 = DB::getPdo()->lastInsertId();
                                                                                      
                                                                                      
                                                                                      
                                                                                      DB::table('evidence_financial')->insert([
                                                                                        'evidence_id' => $idevidencia384,
                                                                                        'activity_source_id' =>$idactivitySource76,
                                                                                        'value' => 1391848676,
                                                                                        ]);
                                                                                        $idevidenceFinancial76 = DB::getPdo()->lastInsertId();
                                                                                        
                                                                                        
                                                                                        	DB::table('evidence_financial')->insert([
                                                                                        'evidence_id' => $idevidencia384,
                                                                                        'activity_source_id' =>$idactivitySource77,
                                                                                        'value' => 258613993.5,
                                                                                        ]);
                                                                                        $idevidenceFinancial77 = DB::getPdo()->lastInsertId();
                                                                                        
                                                                                        
                                                                                        	DB::table('evidence_financial')->insert([
                                                                                        'evidence_id' => $idevidencia384,
                                                                                        'activity_source_id' =>$idactivitySource78,
                                                                                        'value' => 421269600,
                                                                                        ]);
                                                                                        $idevidenceFinancial78 = DB::getPdo()->lastInsertId();
                                                                                        
                                                                                        
                                                                                        	DB::table('evidence_financial')->insert([
                                                                                        'evidence_id' => $idevidencia384,
                                                                                        'activity_source_id' =>$idactivitySource79,
                                                                                        'value' => 141622200,
                                                                                        ]);
                                                                                        $idevidenceFinancial79 = DB::getPdo()->lastInsertId();
                                                                                        
                                                                                        
                                                                                        	DB::table('evidence_financial')->insert([
                                                                                        'evidence_id' => $idevidencia384,
                                                                                        'activity_source_id' =>$idactivitySource80,
                                                                                        'value' => 73952118,
                                                                                        ]);
                                                                                        $idevidenceFinancial80 = DB::getPdo()->lastInsertId();
                                                                                        
 

                                                                                       DB::table('evidence_financial')->insert([
                                                                                          'evidence_id' => $idevidencia384,
                                                                                          'activity_source_id' =>$idactivitySource81,
                                                                                          'value' => 177931699.2,
                                                                                          ]);
                                                                                          $idevidenceFinancial81 = DB::getPdo()->lastInsertId();
                                                                                          

    }
  }
