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
 * Class HistoricPAI_CAM_Seeder
 */
class HistoricPAI_CAM_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $pai=PAI::create([
        'name' => 'PLAN DE ACCIÓN INSTITUCIONAL 2016 - 2019 HUILA RESILIENTE, TERRITORIO NATURAL DE PAZ ',
        'start_date' => '2016-01-01',
        'end_date' => '2019-12-31',
        'director_name' => 'Carlos Alberto Cuéllar Medina',
        'group_id' => 2,
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
            'car_program' => 'PROGRAMA 1 Ordenamiento y administracion del recurso hídrico y las cuencas Hidrográficas',
            'weighing' => 16,
            ]);
            $idprogram1 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline1,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA No. 2  BIODIVERSIDAD: FUENTE DE VIDA',
            'weighing' => 16,
            ]);
            $idprogram2 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline1,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA No. 3  ADAPTACIÓN PARA EL CRECIMIENTO VERDE',
            'weighing' => 17,
            ]);
            $idprogram3 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline1,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA No. 4    CUIDA TU NATURALEZA ',
            'weighing' => 17,
            ]);
            $idprogram4 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline1,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 5:  HUILA TERRITORIO ORDENADO ',
            'weighing' => 17,
            ]);
            $idprogram5 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline1,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA No. 6  EDUCACIÓN CAMINO DE PAZ',
            'weighing' => 17,
            ]);
            $idprogram6 = DB::getPdo()->lastInsertId();
            
            
            DB::table('projects')->insert([
              'program_id' => $idprogram1,
              'project' => 'Proyecto No. 1.1  Ordenamiento y administracion del recurso hídrico y las cuencas Hidrográficas',
              'weighing' => 33,
              ]);
              $idproject1 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram1,
              'project' => 'Proyecto No. 1.2 RECUPERACION DE CUENCAS  HIDROGRAFICAS',
              'weighing' => 33,
              ]);
              $idproject2 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram1,
              'project' => 'Proyecto No. 1.3:   Descontaminación de Fuentes Hídricas',
              'weighing' => 34,
              ]);
              $idproject3 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => 'Proyecto No.2.1:   CONOCIMIENTO Y PLANIFICACIÓN DE ECOSISTEMAS ESTRATÉGICOS ',
              'weighing' => 50,
              ]);
              $idproject4 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => 'Proyecto No.2.2:   CONSERVACION Y RECUPERACION DE ECOSISTEMAS ESTRATEGICOS Y SU BIODIVERSIDAD',
              'weighing' => 50,
              ]);
              $idproject5 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram3,
              'project' => 'Proyecto No.3.1:    CRECIMIENTO VERDE DE SECTORES PRODUCTIVOS',
              'weighing' => 50,
              ]);
              $idproject6 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram3,
              'project' => 'Proyecto No.3.2: AREAS URBANAS SOSTENIBLES Y RESILIENTES   ',
              'weighing' => 50,
              ]);
              $idproject7 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram4,
              'project' => 'Proyecto No. 4.1:  CONTROL Y VIGILANCIA AMBIENTAL',
              'weighing' => 100,
              ]);
              $idproject8 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram5,
              'project' => 'Proyecto No. 5.1  Planificación Ambiental Territorial',
              'weighing' => 50,
              ]);
              $idproject9 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram5,
              'project' => 'Proyecto No. 5.2 Gestion de riesgo de desastres ',
              'weighing' => 50,
              ]);
              $idproject10 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram6,
              'project' => 'Proyecto No. 6.1:   CAM: MODELO DE GESTIÓN CORPORATIVA',
              'weighing' => 50,
              ]);
              $idproject11 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram6,
              'project' => 'Proyecto No. 6.2:   EDUCACIÓN AMBIENTAL: OPITA DE CORAZON',
              'weighing' => 50,
              ]);
              $idproject12 = DB::getPdo()->lastInsertId();
              
              
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
                
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 60,
					'goal_2' => 26,
					'goal_3' => 0,
					'goal_4' => 14,
					'goal_1_balance' => 60,
					'goal_2_balance' => 26,
					'goal_3_balance' => 0,
					'goal_4_balance' => 14,
					'total_goal' => 100,
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 8,
					]);
					$idobjectiveproduct1 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 3,
					'goal_2' => 5,
					'goal_3' => 0,
					'goal_4' => 1,
					'goal_1_balance' => 3,
					'goal_2_balance' => 5,
					'goal_3_balance' => 0,
					'goal_4_balance' => 1,
					'total_goal' => 9,
					'unit_goal' => 38,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 8,
					]);
					$idobjectiveproduct2 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 30,
					'goal_2' => 50,
					'goal_3' => 80,
					'goal_4' => 100,
					'goal_1_balance' => 30,
					'goal_2_balance' => 50,
					'goal_3_balance' => 80,
					'goal_4_balance' => 100,
					'total_goal' => 260,
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 8,
					]);
					$idobjectiveproduct3 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
					'product_id' => null,
					'product_other' => 'Producto 4',
					'goal_1' => 3,
					'goal_2' => 2,
					'goal_3' => 3,
					'goal_4' => 2,
					'goal_1_balance' => 3,
					'goal_2_balance' => 2,
					'goal_3_balance' => 3,
					'goal_4_balance' => 2,
					'total_goal' => 10,
					'unit_goal' => 84,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 8,
					]);
					$idobjectiveproduct4 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
					'product_id' => null,
					'product_other' => 'Producto 5',
					'goal_1' => 17,
					'goal_2' => 34,
					'goal_3' => 30,
					'goal_4' => 100,
					'goal_1_balance' => 17,
					'goal_2_balance' => 34,
					'goal_3_balance' => 30,
					'goal_4_balance' => 100,
					'total_goal' => 181,
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 8,
					]);
					$idobjectiveproduct5 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
					'product_id' => null,
					'product_other' => 'Producto 6',
					'goal_1' => 0.5,
					'goal_2' => 1,
					'goal_3' => 0.9,
					'goal_4' => 3,
					'goal_1_balance' => 0.5,
					'goal_2_balance' => 1,
					'goal_3_balance' => 0.9,
					'goal_4_balance' => 3,
					'total_goal' => 5.4,
					'unit_goal' => 84,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 8,
					]);
					$idobjectiveproduct6 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
					'product_id' => null,
					'product_other' => 'Producto 7',
					'goal_1' => 60,
					'goal_2' => 40,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 60,
					'goal_2_balance' => 40,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 100,
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 8,
					]);
					$idobjectiveproduct7 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
					'product_id' => null,
					'product_other' => 'Producto 8',
					'goal_1' => 0,
					'goal_2' => 6,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 0,
					'goal_2_balance' => 6,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 6,
					'unit_goal' => 44,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 8,
					]);
					$idobjectiveproduct8 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
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
					'unit_goal' => 34,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 9,
					]);
					$idobjectiveproduct9 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
					'product_id' => null,
					'product_other' => 'Producto 10',
					'goal_1' => 37,
					'goal_2' => 37,
					'goal_3' => 37,
					'goal_4' => 37,
					'goal_1_balance' => 37,
					'goal_2_balance' => 37,
					'goal_3_balance' => 37,
					'goal_4_balance' => 37,
					'total_goal' => 148,
					'unit_goal' => 57,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 9,
					]);
					$idobjectiveproduct10 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
					'product_id' => null,
					'product_other' => 'Producto 11',
					'goal_1' => 5,
					'goal_2' => 0,
					'goal_3' => 8,
					'goal_4' => 5,
					'goal_1_balance' => 5,
					'goal_2_balance' => 0,
					'goal_3_balance' => 8,
					'goal_4_balance' => 5,
					'total_goal' => 18,
					'unit_goal' => 84,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 9,
					]);
					$idobjectiveproduct11 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
					'product_id' => null,
					'product_other' => 'Producto 12',
					'goal_1' => 0,
					'goal_2' => 1,
					'goal_3' => 1,
					'goal_4' => 0,
					'goal_1_balance' => 0,
					'goal_2_balance' => 1,
					'goal_3_balance' => 1,
					'goal_4_balance' => 0,
					'total_goal' => 2,
					'unit_goal' => 45,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 9,
					]);
					$idobjectiveproduct12 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective2,
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
					'weighing' => 10,
					]);
					$idobjectiveproduct13 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective2,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 3,
					'goal_2' => 3,
					'goal_3' => 3,
					'goal_4' => 5,
					'goal_1_balance' => 3,
					'goal_2_balance' => 3,
					'goal_3_balance' => 3,
					'goal_4_balance' => 5,
					'total_goal' => 14,
					'unit_goal' => 69,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 10,
					]);
					$idobjectiveproduct14 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective2,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 0,
					'goal_2' => 50,
					'goal_3' => 25,
					'goal_4' => 25,
					'goal_1_balance' => 0,
					'goal_2_balance' => 50,
					'goal_3_balance' => 25,
					'goal_4_balance' => 25,
					'total_goal' => 100,
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 10,
					]);
					$idobjectiveproduct15 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective2,
					'product_id' => null,
					'product_other' => 'Producto 4',
					'goal_1' => 0,
					'goal_2' => 200,
					'goal_3' => 100,
					'goal_4' => 100,
					'goal_1_balance' => 0,
					'goal_2_balance' => 200,
					'goal_3_balance' => 100,
					'goal_4_balance' => 100,
					'total_goal' => 400,
					'unit_goal' => 47,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 10,
					]);
					$idobjectiveproduct16 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective2,
					'product_id' => null,
					'product_other' => 'Producto 5',
					'goal_1' => 0,
					'goal_2' => 50,
					'goal_3' => 30,
					'goal_4' => 20,
					'goal_1_balance' => 0,
					'goal_2_balance' => 50,
					'goal_3_balance' => 30,
					'goal_4_balance' => 20,
					'total_goal' => 100,
					'unit_goal' => 47,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 10,
					]);
					$idobjectiveproduct17 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective2,
					'product_id' => null,
					'product_other' => 'Producto 6',
					'goal_1' => 46,
					'goal_2' => 100,
					'goal_3' => 202,
					'goal_4' => 141,
					'goal_1_balance' => 46,
					'goal_2_balance' => 100,
					'goal_3_balance' => 202,
					'goal_4_balance' => 141,
					'total_goal' => 489,
					'unit_goal' => 47,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 10,
					]);
					$idobjectiveproduct18 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective2,
					'product_id' => null,
					'product_other' => 'Producto 7',
					'goal_1' => 2500,
					'goal_2' => 1463,
					'goal_3' => 500,
					'goal_4' => 500,
					'goal_1_balance' => 2500,
					'goal_2_balance' => 1463,
					'goal_3_balance' => 500,
					'goal_4_balance' => 500,
					'total_goal' => 4963,
					'unit_goal' => 47,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 10,
					]);
					$idobjectiveproduct19 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective2,
					'product_id' => null,
					'product_other' => 'Producto 8',
					'goal_1' => 863,
					'goal_2' => 3450,
					'goal_3' => 8260,
					'goal_4' => 1963,
					'goal_1_balance' => 863,
					'goal_2_balance' => 3450,
					'goal_3_balance' => 8260,
					'goal_4_balance' => 1963,
					'total_goal' => 14536,
					'unit_goal' => 47,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 10,
					]);
					$idobjectiveproduct20 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective2,
					'product_id' => null,
					'product_other' => 'Producto 9',
					'goal_1' => 250,
					'goal_2' => 300,
					'goal_3' => 350,
					'goal_4' => 200,
					'goal_1_balance' => 250,
					'goal_2_balance' => 300,
					'goal_3_balance' => 350,
					'goal_4_balance' => 200,
					'total_goal' => 1100,
					'unit_goal' => 47,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 10,
					]);
					$idobjectiveproduct21 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective2,
					'product_id' => null,
					'product_other' => 'Producto 10',
					'goal_1' => 10,
					'goal_2' => 30,
					'goal_3' => 30,
					'goal_4' => 30,
					'goal_1_balance' => 10,
					'goal_2_balance' => 30,
					'goal_3_balance' => 30,
					'goal_4_balance' => 30,
					'total_goal' => 100,
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 10,
					]);
					$idobjectiveproduct22 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective3,
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
					'unit_goal' => 84,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 50,
					]);
					$idobjectiveproduct23 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective3,
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
					'weighing' => 50,
					]);
					$idobjectiveproduct24 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 15,
					'goal_2' => 0,
					'goal_3' => 55,
					'goal_4' => 30,
					'goal_1_balance' => 15,
					'goal_2_balance' => 0,
					'goal_3_balance' => 55,
					'goal_4_balance' => 30,
					'total_goal' => 100,
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 9,
					]);
					$idobjectiveproduct25 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 32894,
					'goal_2' => 0,
					'goal_3' => 123839,
					'goal_4' => 70451,
					'goal_1_balance' => 32894,
					'goal_2_balance' => 0,
					'goal_3_balance' => 123839,
					'goal_4_balance' => 70451,
					'total_goal' => 227184,
					'unit_goal' => 47,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 9,
					]);
					$idobjectiveproduct26 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 0,
					'goal_2' => 20,
					'goal_3' => 30,
					'goal_4' => 50,
					'goal_1_balance' => 0,
					'goal_2_balance' => 20,
					'goal_3_balance' => 30,
					'goal_4_balance' => 50,
					'total_goal' => 100,
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 9,
					]);
					$idobjectiveproduct27 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
					'product_id' => null,
					'product_other' => 'Producto 4',
					'goal_1' => 30,
					'goal_2' => 30,
					'goal_3' => 30,
					'goal_4' => 30,
					'goal_1_balance' => 30,
					'goal_2_balance' => 30,
					'goal_3_balance' => 30,
					'goal_4_balance' => 30,
					'total_goal' => 120,
					'unit_goal' => 72,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 9,
					]);
					$idobjectiveproduct28 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
					'product_id' => null,
					'product_other' => 'Producto 5',
					'goal_1' => 3,
					'goal_2' => 3,
					'goal_3' => 3,
					'goal_4' => 3,
					'goal_1_balance' => 3,
					'goal_2_balance' => 3,
					'goal_3_balance' => 3,
					'goal_4_balance' => 3,
					'total_goal' => 12,
					'unit_goal' => 84,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 9,
					]);
					$idobjectiveproduct29 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
					'product_id' => null,
					'product_other' => 'Producto 6',
					'goal_1' => 1,
					'goal_2' => 2,
					'goal_3' => 2,
					'goal_4' => 2,
					'goal_1_balance' => 1,
					'goal_2_balance' => 2,
					'goal_3_balance' => 2,
					'goal_4_balance' => 2,
					'total_goal' => 7,
					'unit_goal' => 30,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 9,
					]);
					$idobjectiveproduct30 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
					'product_id' => null,
					'product_other' => 'Producto 7',
					'goal_1' => 0,
					'goal_2' => 33,
					'goal_3' => 66.6,
					'goal_4' => 0,
					'goal_1_balance' => 0,
					'goal_2_balance' => 33,
					'goal_3_balance' => 66.6,
					'goal_4_balance' => 0,
					'total_goal' => 99.6,
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 9,
					]);
					$idobjectiveproduct31 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
					'product_id' => null,
					'product_other' => 'Producto 8',
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 3,
					'goal_4' => 0,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 3,
					'goal_4_balance' => 0,
					'total_goal' => 3,
					'unit_goal' => 84,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 9,
					]);
					$idobjectiveproduct32 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
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
					'weighing' => 9,
					]);
					$idobjectiveproduct33 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
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
					'weighing' => 9,
					]);
					$idobjectiveproduct34 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
					'product_id' => null,
					'product_other' => 'Producto 11',
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 0,
					'unit_goal' => 84,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 10,
					]);
					$idobjectiveproduct35 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
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
					'weighing' => 12,
					]);
					$idobjectiveproduct36 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 35140,
					'goal_2' => 66787,
					'goal_3' => 99948,
					'goal_4' => 99948,
					'goal_1_balance' => 35140,
					'goal_2_balance' => 66787,
					'goal_3_balance' => 99948,
					'goal_4_balance' => 99948,
					'total_goal' => 301823,
					'unit_goal' => 47,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 13,
					]);
					$idobjectiveproduct37 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 186743,
					'goal_2' => 137106,
					'goal_3' => 155096,
					'goal_4' => 216462,
					'goal_1_balance' => 186743,
					'goal_2_balance' => 137106,
					'goal_3_balance' => 155096,
					'goal_4_balance' => 216462,
					'total_goal' => 695407,
					'unit_goal' => 47,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 12,
					]);
					$idobjectiveproduct38 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
					'product_id' => null,
					'product_other' => 'Producto 4',
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
					'weighing' => 13,
					]);
					$idobjectiveproduct39 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
					'product_id' => null,
					'product_other' => 'Producto 5',
					'goal_1' => 192,
					'goal_2' => 217,
					'goal_3' => 242,
					'goal_4' => 267,
					'goal_1_balance' => 192,
					'goal_2_balance' => 217,
					'goal_3_balance' => 242,
					'goal_4_balance' => 267,
					'total_goal' => 918,
					'unit_goal' => 47,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 12,
					]);
					$idobjectiveproduct40 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
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
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 13,
					]);
					$idobjectiveproduct41 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
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
					'unit_goal' => 84,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 12,
					]);
					$idobjectiveproduct42 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
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
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 13,
					]);
					$idobjectiveproduct43 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => null,
					'product_other' => 'Producto 1',
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
					'weighing' => 14,
					]);
					$idobjectiveproduct44 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 19,
					'goal_2' => 27,
					'goal_3' => 27,
					'goal_4' => 27,
					'goal_1_balance' => 19,
					'goal_2_balance' => 27,
					'goal_3_balance' => 27,
					'goal_4_balance' => 27,
					'total_goal' => 100,
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 14,
					]);
					$idobjectiveproduct45 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 2,
					'goal_2' => 3,
					'goal_3' => 3,
					'goal_4' => 3,
					'goal_1_balance' => 2,
					'goal_2_balance' => 3,
					'goal_3_balance' => 3,
					'goal_4_balance' => 3,
					'total_goal' => 11,
					'unit_goal' => 58,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 14,
					]);
					$idobjectiveproduct46 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
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
					'weighing' => 14,
					]);
					$idobjectiveproduct47 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => null,
					'product_other' => 'Producto 5',
					'goal_1' => 2,
					'goal_2' => 2,
					'goal_3' => 2,
					'goal_4' => 2,
					'goal_1_balance' => 2,
					'goal_2_balance' => 2,
					'goal_3_balance' => 2,
					'goal_4_balance' => 2,
					'total_goal' => 8,
					'unit_goal' => 78,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 14,
					]);
					$idobjectiveproduct48 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => null,
					'product_other' => 'Producto 6',
					'goal_1' => 1,
					'goal_2' => 2,
					'goal_3' => 1,
					'goal_4' => 2,
					'goal_1_balance' => 1,
					'goal_2_balance' => 2,
					'goal_3_balance' => 1,
					'goal_4_balance' => 2,
					'total_goal' => 6,
					'unit_goal' => 78,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 15,
					]);
					$idobjectiveproduct49 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => null,
					'product_other' => 'Producto 7',
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 0,
					'unit_goal' => 84,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 15,
					]);
					$idobjectiveproduct50 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 30,
					'goal_2' => 30,
					'goal_3' => 20,
					'goal_4' => 20,
					'goal_1_balance' => 30,
					'goal_2_balance' => 30,
					'goal_3_balance' => 20,
					'goal_4_balance' => 20,
					'total_goal' => 100,
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 25,
					]);
					$idobjectiveproduct51 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 2,
					'goal_2' => 2,
					'goal_3' => 2,
					'goal_4' => 2,
					'goal_1_balance' => 2,
					'goal_2_balance' => 2,
					'goal_3_balance' => 2,
					'goal_4_balance' => 2,
					'total_goal' => 8,
					'unit_goal' => 57,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 25,
					]);
					$idobjectiveproduct52 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 1,
					'goal_2' => 1,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 1,
					'goal_2_balance' => 1,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 2,
					'unit_goal' => 53,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 25,
					]);
					$idobjectiveproduct53 = DB::getPdo()->lastInsertId();
					
					
					 
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
					'unit_goal' => 57,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 25,
					]);
					$idobjectiveproduct54 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
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
					'weighing' => 6,
					]);
					$idobjectiveproduct55 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
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
					'weighing' => 7,
					]);
					$idobjectiveproduct56 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
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
					'weighing' => 6,
					]);
					$idobjectiveproduct57 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
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
					'weighing' => 7,
					]);
					$idobjectiveproduct58 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
					'product_id' => null,
					'product_other' => 'Producto 5',
					'goal_1' => 60,
					'goal_2' => 60,
					'goal_3' => 60,
					'goal_4' => 60,
					'goal_1_balance' => 60,
					'goal_2_balance' => 60,
					'goal_3_balance' => 60,
					'goal_4_balance' => 60,
					'total_goal' => 240,
					'unit_goal' => 40,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 6,
					]);
					$idobjectiveproduct59 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
					'product_id' => null,
					'product_other' => 'Producto 6',
					'goal_1' => 20,
					'goal_2' => 25,
					'goal_3' => 30,
					'goal_4' => 35,
					'goal_1_balance' => 20,
					'goal_2_balance' => 25,
					'goal_3_balance' => 30,
					'goal_4_balance' => 35,
					'total_goal' => 110,
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 7,
					]);
					$idobjectiveproduct60 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
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
					'weighing' => 6,
					]);
					$idobjectiveproduct61 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
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
					'unit_goal' => 76,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 7,
					]);
					$idobjectiveproduct62 = DB::getPdo()->lastInsertId();
					
					
					 
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
					'unit_goal' => 84,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 6,
					]);
					$idobjectiveproduct63 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
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
					'unit_goal' => 76,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 7,
					]);
					$idobjectiveproduct64 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
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
					'weighing' => 6,
					]);
					$idobjectiveproduct65 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
					'product_id' => null,
					'product_other' => 'Producto 12',
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
					$idobjectiveproduct66 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
					'product_id' => null,
					'product_other' => 'Producto 13',
					'goal_1' => 37,
					'goal_2' => 37,
					'goal_3' => 37,
					'goal_4' => 37,
					'goal_1_balance' => 37,
					'goal_2_balance' => 37,
					'goal_3_balance' => 37,
					'goal_4_balance' => 37,
					'total_goal' => 148,
					'unit_goal' => 57,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 6,
					]);
					$idobjectiveproduct67 = DB::getPdo()->lastInsertId();
					
					
					 
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
					'product_other' => 'Producto 15',
					'goal_1' => 90,
					'goal_2' => 90,
					'goal_3' => 90,
					'goal_4' => 90,
					'goal_1_balance' => 90,
					'goal_2_balance' => 90,
					'goal_3_balance' => 90,
					'goal_4_balance' => 90,
					'total_goal' => 360,
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 6,
					]);
					$idobjectiveproduct69 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
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
					'unit_goal' => 84,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 7,
					]);
					$idobjectiveproduct70 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective9,
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
					'weighing' => 16,
					]);
					$idobjectiveproduct71 = DB::getPdo()->lastInsertId();
					
					
					 
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
					'weighing' => 16,
					]);
					$idobjectiveproduct72 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective9,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 70,
					'goal_2' => 10,
					'goal_3' => 20,
					'goal_4' => 0,
					'goal_1_balance' => 70,
					'goal_2_balance' => 10,
					'goal_3_balance' => 20,
					'goal_4_balance' => 0,
					'total_goal' => 100,
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 17,
					]);
					$idobjectiveproduct73 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective9,
					'product_id' => null,
					'product_other' => 'Producto 4',
					'goal_1' => 5,
					'goal_2' => 8,
					'goal_3' => 8,
					'goal_4' => 5,
					'goal_1_balance' => 5,
					'goal_2_balance' => 8,
					'goal_3_balance' => 8,
					'goal_4_balance' => 5,
					'total_goal' => 26,
					'unit_goal' => 58,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 17,
					]);
					$idobjectiveproduct74 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective9,
					'product_id' => null,
					'product_other' => 'Producto 5',
					'goal_1' => 0,
					'goal_2' => 1,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 0,
					'goal_2_balance' => 1,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 1,
					'unit_goal' => 84,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 17,
					]);
					$idobjectiveproduct75 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective9,
					'product_id' => null,
					'product_other' => 'Producto 6',
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 0,
					'unit_goal' => 84,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 17,
					]);
					$idobjectiveproduct76 = DB::getPdo()->lastInsertId();
					
					
					 
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
					'unit_goal' => 45,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 25,
					]);
					$idobjectiveproduct77 = DB::getPdo()->lastInsertId();
					
					
					 
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
					'unit_goal' => 57,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 25,
					]);
					$idobjectiveproduct78 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 0,
					'goal_2' => 20,
					'goal_3' => 75,
					'goal_4' => 100,
					'goal_1_balance' => 0,
					'goal_2_balance' => 20,
					'goal_3_balance' => 75,
					'goal_4_balance' => 100,
					'total_goal' => 195,
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 25,
					]);
					$idobjectiveproduct79 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
					'product_id' => null,
					'product_other' => 'Producto 4',
					'goal_1' => 38,
					'goal_2' => 38,
					'goal_3' => 38,
					'goal_4' => 38,
					'goal_1_balance' => 38,
					'goal_2_balance' => 38,
					'goal_3_balance' => 38,
					'goal_4_balance' => 38,
					'total_goal' => 152,
					'unit_goal' => 84,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 25,
					]);
					$idobjectiveproduct80 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
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
					'unit_goal' => 80,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 11,
					]);
					$idobjectiveproduct81 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 25,
					'goal_2' => 50,
					'goal_3' => 75,
					'goal_4' => 100,
					'goal_1_balance' => 25,
					'goal_2_balance' => 50,
					'goal_3_balance' => 75,
					'goal_4_balance' => 100,
					'total_goal' => 250,
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 11,
					]);
					$idobjectiveproduct82 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
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
					'unit_goal' => 73,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 11,
					]);
					$idobjectiveproduct83 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
					'product_id' => null,
					'product_other' => 'Producto 4',
					'goal_1' => 1,
					'goal_2' => 0,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 1,
					'goal_2_balance' => 0,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 1,
					'unit_goal' => 45,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 11,
					]);
					$idobjectiveproduct84 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
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
					'weighing' => 11,
					]);
					$idobjectiveproduct85 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
					'product_id' => null,
					'product_other' => 'Producto 6',
					'goal_1' => 1,
					'goal_2' => 1,
					'goal_3' => 1,
					'goal_4' => 0,
					'goal_1_balance' => 1,
					'goal_2_balance' => 1,
					'goal_3_balance' => 1,
					'goal_4_balance' => 0,
					'total_goal' => 3,
					'unit_goal' => 79,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 11,
					]);
					$idobjectiveproduct86 = DB::getPdo()->lastInsertId();
					
					
					 
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
					'unit_goal' => 84,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 11,
					]);
					$idobjectiveproduct87 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
					'product_id' => null,
					'product_other' => 'Producto 8',
					'goal_1' => 1,
					'goal_2' => 1,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 1,
					'goal_2_balance' => 1,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 2,
					'unit_goal' => 57,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 11,
					]);
					$idobjectiveproduct88 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
					'product_id' => null,
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
					'unit_goal' => 84,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 12,
					]);
					$idobjectiveproduct89 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective12,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 25,
					'goal_2' => 50,
					'goal_3' => 75,
					'goal_4' => 100,
					'goal_1_balance' => 25,
					'goal_2_balance' => 50,
					'goal_3_balance' => 75,
					'goal_4_balance' => 100,
					'total_goal' => 250,
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 16,
					]);
					$idobjectiveproduct90 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective12,
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
					'weighing' => 16,
					]);
					$idobjectiveproduct91 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective12,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 1,
					'goal_2' => 1,
					'goal_3' => 1,
					'goal_4' => 0,
					'goal_1_balance' => 1,
					'goal_2_balance' => 1,
					'goal_3_balance' => 1,
					'goal_4_balance' => 0,
					'total_goal' => 3,
					'unit_goal' => 73,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 17,
					]);
					$idobjectiveproduct92 = DB::getPdo()->lastInsertId();
					
					
					 
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
					'unit_goal' => 84,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 17,
					]);
					$idobjectiveproduct93 = DB::getPdo()->lastInsertId();
					
					
					 
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
					'unit_goal' => 84,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 17,
					]);
					$idobjectiveproduct94 = DB::getPdo()->lastInsertId();
					
					
					 
				 DB::table('objective_products')->insert([
					'objective_id' => $idobjective12,
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
					'unit_goal' => 84,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 17,
					]);
					$idobjectiveproduct95 = DB::getPdo()->lastInsertId();
					
					
					 
                  
                  
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct1,
                    'name' => 'Porcentaje de cuerpos de agua con reglamentación del uso de las aguas',
                    'goal_1' => 60,
                    'goal_2' => 26,
                    'goal_3' => 0,
                    'goal_4' => 14,
                    'goal' => 100,
                    'weighing' => 8, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity1 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct2,
                    'name' => 'Número de cuerpos de agua con reglamentación del uso de las aguas',
                    'goal_1' => 3,
                    'goal_2' => 5,
                    'goal_3' => 0,
                    'goal_4' => 1,
                    'goal' => 9,
                    'weighing' => 8, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity2 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct3,
                    'name' => 'Cuerpos de agua con plan de ordenamiento del recurso hídrico (PORH) adoptados',
                    'goal_1' => 30,
                    'goal_2' => 50,
                    'goal_3' => 80,
                    'goal_4' => 100,
                    'goal' => 260,
                    'weighing' => 8, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity3 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct4,
                    'name' => 'Cuerpos de agua con plan de ordenamiento del recurso hídrico (PORH) adoptados',
                    'goal_1' => 3,
                    'goal_2' => 2,
                    'goal_3' => 3,
                    'goal_4' => 2,
                    'goal' => 10,
                    'weighing' => 8, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity4 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct5,
                    'name' => 'Porcentaje de avance en la formulación y/o ajustes de los  Planes de Ordenación y Manejo de Cuencas (POMCAS), Planes de Manejo de Acuíferos (PMA) y Planes de Manejo de Microcuencas (PMM) ',
                    'goal_1' => 17,
                    'goal_2' => 34,
                    'goal_3' => 30,
                    'goal_4' => 100,
                    'goal' => 181,
                    'weighing' => 8, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity5 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct6,
                    'name' => 'No. Planes de Ordenación y Manejo de Cuencas (POMCAS), Planes de Manejo de Acuíferos (PMA) y Planes de Manejo de Microcuencas (PMM) formulados o reformulados, con consulta previa si a ello hubiere lugar',
                    'goal_1' => 0.5,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 3,
                    'goal' => 5.5,
                    'weighing' => 8, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity6 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct7,
                    'name' => 'Porcentaje de redes y estaciones de monitoreo en operación',
                    'goal_1' => 60,
                    'goal_2' => 40,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 100,
                    'weighing' => 8, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity7 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct8,
                    'name' => 'Número de estaciones instaladas y en operación',
                    'goal_1' => 0,
                    'goal_2' => 6,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 6,
                    'weighing' => 8, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity8 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct9,
                    'name' => 'Campañas de monitoreo del recurso hídrico en el río Magdalena y sus principales afluentes',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 9, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity9 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct10,
                    'name' => 'Seguimiento, Monitoreo y Control al Recurso Hídrico (Cuencas Abastecedoras y Otras Cuencas Prioritarias)',
                    'goal_1' => 37,
                    'goal_2' => 37,
                    'goal_3' => 37,
                    'goal_4' => 37,
                    'goal' => 148,
                    'weighing' => 9, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity10 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct11,
                    'name' => 'Evaluación  Regional del Agua',
                    'goal_1' => 5,
                    'goal_2' => 0,
                    'goal_3' => 8,
                    'goal_4' => 5,
                    'goal' => 18,
                    'weighing' => 9, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity11 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct12,
                    'name' => 'Estudios Ambientales del Recuso Hídrico',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 0,
                    'goal' => 2,
                    'weighing' => 9, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity12 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct13,
                    'name' => 'Porcentaje de Planes de Ordenación y Manejo de Cuencas (POMCAS), Planes de Manejo de Acuíferos (PMA) y Planes de Manejo de Microcuencas (PMM) en ejecución',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 10, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity13 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct14,
                    'name' => 'No. Planes de Ordenación y Manejo de Cuencas (POMCAS), Planes de Manejo de Acuíferos (PMA) y Planes de Manejo de Microcuencas (PMM) en ejecución',
                    'goal_1' => 3,
                    'goal_2' => 3,
                    'goal_3' => 3,
                    'goal_4' => 5,
                    'goal' => 14,
                    'weighing' => 10,
					'geometry' => 4,
					'ocde_category_id' =>1173, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity14 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct15,
                    'name' => 'Porcentaje de suelos degradados en recuperación o rehabilitacón',
                    'goal_1' => 0,
                    'goal_2' => 50,
                    'goal_3' => 25,
                    'goal_4' => 25,
                    'goal' => 100,
                    'weighing' => 10, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity15 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct16,
                    'name' => 'Suelos degradados en recuperación o rehabilitacón',
                    'goal_1' => 0,
                    'goal_2' => 200,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 10, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity16 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct17,
                    'name' => 'Áreas reforestadas gestionadas para la protección de cuencas abastecedoras',
                    'goal_1' => 0,
                    'goal_2' => 50,
                    'goal_3' => 30,
                    'goal_4' => 20,
                    'goal' => 100,
                    'weighing' => 10, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity17 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct18,
                    'name' => 'Áreas reforestadas para la protección de cuencas abastecedoras en mantenimiento.',
                    'goal_1' => 46,
                    'goal_2' => 100,
                    'goal_3' => 202,
                    'goal_4' => 141,
                    'goal' => 489,
                    'weighing' => 10, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity18 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct19,
                    'name' => 'Áreas revegetalizadas naturalmente para la protección y restauración de cuencas abastecedoras. ',
                    'goal_1' => 2500,
                    'goal_2' => 1463,
                    'goal_3' => 500,
                    'goal_4' => 500,
                    'goal' => 4963,
                    'weighing' => 10, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity19 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct20,
                    'name' => 'Áreas revegetalizadas naturalmente para la protección de cuencas abastecedoras en mantenimiento.',
                    'goal_1' => 863,
                    'goal_2' => 3450,
                    'goal_3' => 8260,
                    'goal_4' => 1963,
                    'goal' => 14536,
                    'weighing' => 10, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity20 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct21,
                    'name' => 'Gestión compra de predios en áreas estratégicas para la producción hídrica y  cuencas hidrográficas abastecedoras',
                    'goal_1' => 250,
                    'goal_2' => 300,
                    'goal_3' => 350,
                    'goal_4' => 200,
                    'goal' => 1100,
                    'weighing' => 10, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity21 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct22,
                    'name' => 'Diseño y/o adopción de un esquema de pago por servicios ambientales ',
                    'goal_1' => 10,
                    'goal_2' => 30,
                    'goal_3' => 30,
                    'goal_4' => 30,
                    'goal' => 100,
                    'weighing' => 10, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity22 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct23,
                    'name' => 'Convenio cofinanciado y con seguimiento anual  para construcción de sistemas  que contribuyan a la descontaminación',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 50, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity23 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct24,
                    'name' => 'Seguimiento y monitoreo a la aplicación  de la tasa retributiva.',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 50, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity24 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct25,
                    'name' => 'Porcentaje de la superficie de áreas protegidas regionales declaradas, homologadas o recategorizadas, inscritas en el RUNAP.',
                    'goal_1' => 15,
                    'goal_2' => 0,
                    'goal_3' => 55,
                    'goal_4' => 30,
                    'goal' => 100,
                    'weighing' => 9, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity25 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct26,
                    'name' => 'Superficie de áreas protegidas regionales declaradas, homologadas o recategorizadas, inscritas en el RUNAP (incluye reservas temporales)',
                    'goal_1' => 32894,
                    'goal_2' => 0,
                    'goal_3' => 123839,
                    'goal_4' => 70451,
                    'goal' => 227184,
                    'weighing' => 9, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity26 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct27,
                    'name' => 'Estudio técnico y proceso  de socialización tendiente  a la declaratoria de areas protegidas.',
                    'goal_1' => 0,
                    'goal_2' => 20,
                    'goal_3' => 30,
                    'goal_4' => 50,
                    'goal' => 100,
                    'weighing' => 9, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity27 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct28,
                    'name' => 'No. predios apoyados para su caracterización y/o gestión como reserva natural de la sociedad civil',
                    'goal_1' => 30,
                    'goal_2' => 30,
                    'goal_3' => 30,
                    'goal_4' => 30,
                    'goal' => 120,
                    'weighing' => 9, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity28 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct29,
                    'name' => 'No. ecosistemas compartidos planificados y/o gestionados por la Corporación ',
                    'goal_1' => 3,
                    'goal_2' => 3,
                    'goal_3' => 3,
                    'goal_4' => 3,
                    'goal' => 12,
                    'weighing' => 9, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity29 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct30,
                    'name' => 'Investigación. Conocimiento y/o Manejo de Áreas de Importancia estratégica y de la Biodiversidad',
                    'goal_1' => 1,
                    'goal_2' => 2,
                    'goal_3' => 2,
                    'goal_4' => 2,
                    'goal' => 7,
                    'weighing' => 9, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity30 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct31,
                    'name' => 'Porcentaje de Páramos delimitados por el MADS, con zonificacion y régimen de usos adoptados por la CAM',
                    'goal_1' => 0,
                    'goal_2' => 33,
                    'goal_3' => 66.6,
                    'goal_4' => 0,
                    'goal' => 99.6,
                    'weighing' => 9, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity31 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct32,
                    'name' => 'No. páramos delimitados con zonificación y régimen de usos adoptados por la CAM',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 3,
                    'goal_4' => 0,
                    'goal' => 3,
                    'weighing' => 9, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity32 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct33,
                    'name' => 'Porcentaje de especies  invasoras con medidas de prevención, control y manejo en ejecución',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 9, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity33 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct34,
                    'name' => 'Especies  invasoras con medidas de prevención, control y manejo en ejecución',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 9, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity34 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct35,
                    'name' => 'Gastos de Gestión, Operación, Administración y Promoción del Proyecto',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 10, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity35 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct36,
                    'name' => 'Porcentaje de áreas protegidas con planes de manejo en ejecución',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 12, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity36 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct37,
                    'name' => 'Áreas protgidas registradas con planes de manejo en ejecución',
                    'goal_1' => 35140,
                    'goal_2' => 66787,
                    'goal_3' => 99948,
                    'goal_4' => 99948,
                    'goal' => 301823,
                    'weighing' => 13, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity37 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct38,
                    'name' => 'Áreas protegidas inscritas con planes de manejo en ejecución',
                    'goal_1' => 186743,
                    'goal_2' => 137106,
                    'goal_3' => 155096,
                    'goal_4' => 216462,
                    'goal' => 695407,
                    'weighing' => 12, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity38 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct39,
                    'name' => 'Procentaje de áreas de ecosistemas en restauración, rehabilitación y reforestación',
                    'goal_1' => 25,
                    'goal_2' => 25,
                    'goal_3' => 25,
                    'goal_4' => 25,
                    'goal' => 100,
                    'weighing' => 13, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity39 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct40,
                    'name' => 'Áreas de ecosistemas en restauración, rehabilitación y reforestación',
                    'goal_1' => 192,
                    'goal_2' => 217,
                    'goal_3' => 242,
                    'goal_4' => 267,
                    'goal' => 918,
                    'weighing' => 12, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity40 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct41,
                    'name' => 'Porcentaje de especies amenazadas con medidas de conservación y manejo en ejecución',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 13, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity41 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct42,
                    'name' => 'Especies amenazadas con medidas de manejo  en ejecución',
                    'goal_1' => 4,
                    'goal_2' => 4,
                    'goal_3' => 4,
                    'goal_4' => 4,
                    'goal' => 16,
                    'weighing' => 12, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity42 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct43,
                    'name' => 'Gastos de Gestión, Operación, Administración y Promoción del Proyecto',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 13, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity43 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct44,
                    'name' => 'Implementación del programa regional de negocios verdes por la autoridad ambiental',
                    'goal_1' => 25,
                    'goal_2' => 25,
                    'goal_3' => 25,
                    'goal_4' => 25,
                    'goal' => 100,
                    'weighing' => 14, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity44 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct45,
                    'name' => 'Porcentaje de sectores con acompañamiento para la reconversión hacia sistemas sostenibles de producción',
                    'goal_1' => 19,
                    'goal_2' => 27,
                    'goal_3' => 27,
                    'goal_4' => 27,
                    'goal' => 100,
                    'weighing' => 14, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity45 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct46,
                    'name' => 'Sectores con acompañamiento para la reconversión y/o apoyo  hacia sistemas de producción sostenibles.',
                    'goal_1' => 2,
                    'goal_2' => 3,
                    'goal_3' => 3,
                    'goal_4' => 3,
                    'goal' => 11,
                    'weighing' => 14, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity46 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct47,
                    'name' => 'Promoción e implementación del Pacto Intersectorial por la Madera legal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 14, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity47 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct48,
                    'name' => 'Implementación de programas de post consumo, para sectores',
                    'goal_1' => 2,
                    'goal_2' => 2,
                    'goal_3' => 2,
                    'goal_4' => 2,
                    'goal' => 8,
                    'weighing' => 14, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity48 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct49,
                    'name' => 'Identificación, promoción y aplicación de energías alternativas y/o utilización de sistemas ecoeficientes de combustión en sectores productivos y/o para uso doméstico',
                    'goal_1' => 1,
                    'goal_2' => 2,
                    'goal_3' => 1,
                    'goal_4' => 2,
                    'goal' => 6,
                    'weighing' => 15, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity49 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct50,
                    'name' => 'Gastos de Gestión, Operación, Administración y Promoción del Proyecto',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 15, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity50 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct51,
                    'name' => 'Ejecución de acciones en gestión ambiental urbana',
                    'goal_1' => 30,
                    'goal_2' => 30,
                    'goal_3' => 20,
                    'goal_4' => 20,
                    'goal' => 100,
                    'weighing' => 25, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity51 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct52,
                    'name' => 'Restauración de zonas urbanas (rondas hídricas, humedales) ',
                    'goal_1' => 2,
                    'goal_2' => 2,
                    'goal_3' => 2,
                    'goal_4' => 2,
                    'goal' => 8,
                    'weighing' => 25, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity52 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct53,
                    'name' => 'Actualización de mapas de ruido y planes de descontaminación',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 2,
                    'weighing' => 25, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity53 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct54,
                    'name' => 'Estrategias urbanas para adaptación y mitigación de  los efectos del cambio climático ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 25, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity54 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct55,
                    'name' => 'Porcentaje de Programas de Uso Eficiente y Ahorro del Agua (PUEAA) con seguimiento',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 6, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity55 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct56,
                    'name' => 'Porcentaje de Planes de Gestión Integral de Residuos Sólidos (PGIRS) con seguimiento a metas de aprovechamiento',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 6, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity56 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct57,
                    'name' => 'Porcentaje de Planes de Saneamiento y Manejo de Vertimientos –PSMV- con seguimiento',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 6, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity57 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct58,
                    'name' => 'Porcentaje de autorizaciones ambientales con seguimiento',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 6, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity58 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct59,
                    'name' => 'Tiempo promedio de trámite para la resolución de autorizaciones ambientales otorgadas por la Corporación.',
                    'goal_1' => 60,
                    'goal_2' => 60,
                    'goal_3' => 60,
                    'goal_4' => 60,
                    'goal' => 240,
                    'weighing' => 6, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity59 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct60,
                    'name' => 'Porcentaje de procesos sancionatorios resueltos',
                    'goal_1' => 20,
                    'goal_2' => 25,
                    'goal_3' => 30,
                    'goal_4' => 35,
                    'goal' => 110,
                    'weighing' => 6, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity60 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct61,
                    'name' => 'Asistencia técnica, seguimiento y control a generadores de residuos o desechos peligrosos – RESPEL ',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 6, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity61 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct62,
                    'name' => 'Estrategia de control a la extracción  ilegal de los recursos naturales.RED DE CONTROL AMBIENTAL RECAM',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 6, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity62 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct63,
                    'name' => 'Seguimiento, monitoreo y control  a fuentes móviles de emisiones atmosféricas',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 6, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity63 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct64,
                    'name' => 'Red de vigilancia y monitoreo de la calidad del aire',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 7, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity64 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct65,
                    'name' => 'Estrategia para la preservación, conservación, rehabilitación y/o reintroducción y control y seguimiento a la fauna silvestre.',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 6, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity65 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct66,
                    'name' => 'Porcentaje de empresas con obligatoriedad de contar con Departamento de Gestión Ambiental, con seguimiento ',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 7, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity66 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct67,
                    'name' => 'Seguimiento y control a la implementación y operación del comparendo ambiental ',
                    'goal_1' => 37,
                    'goal_2' => 37,
                    'goal_3' => 37,
                    'goal_4' => 37,
                    'goal' => 148,
                    'weighing' => 6, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity67 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct68,
                    'name' => 'Implementación de aplicativo para la administración y seguimiento en línea de trámites ambientales',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 7, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity68 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct69,
                    'name' => 'Porcentaje de actualización y reporte de la información en el SIAC',
                    'goal_1' => 90,
                    'goal_2' => 90,
                    'goal_3' => 90,
                    'goal_4' => 90,
                    'goal' => 360,
                    'weighing' => 6, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity69 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct70,
                    'name' => 'Gastos de Gestión, Operación, Administración y Promoción del Proyecto',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 7, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity70 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct71,
                    'name' => 'Porcentaje de municipios asesorados o asistidos en la inclusión del componente ambiental en los procesos de planificación y ordenamiento territorial, con énfasis en la incorporación de las determinantes ambientales para la revisión y ajuste de los POT',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 16, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity71 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct72,
                    'name' => 'Porcentaje de entes territoriales asesorados en la incorporación, planificación y ejecución de acciones relacionadas con cambio climático en el marco de los instrumentos de planificación territorial',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 16, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity72 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct73,
                    'name' => 'Porcentaje de avance en la Formulación de Plan de Ordenación Forestal. ',
                    'goal_1' => 70,
                    'goal_2' => 10,
                    'goal_3' => 20,
                    'goal_4' => 0,
                    'goal' => 100,
                    'weighing' => 17, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity73 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct74,
                    'name' => 'Apoyo a acciones de planificación ambiental y gestión del territorio en resguardos, cabildos  y comunidades indígenas',
                    'goal_1' => 5,
                    'goal_2' => 8,
                    'goal_3' => 8,
                    'goal_4' => 5,
                    'goal' => 26,
                    'weighing' => 17, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity74 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct75,
                    'name' => 'Diseño de aplicación interactiva que facilite la aprehensión y conocimiento de los POT por parte de la ciudadanía',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 1,
                    'weighing' => 17, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity75 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct76,
                    'name' => 'Gastos de Gestión, Operación, Administración y Promoción del Proyecto',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 17, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity76 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct77,
                    'name' => 'Estudios de AVR para la gestión de conocimiento del riesgo  en la vigencia del plan de acción',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 25, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity77 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct78,
                    'name' => 'Acotamiento y/o Actualización de Rondas Hídricas Urbanas  priorizadas por municipio',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 25, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity78 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct79,
                    'name' => '% de avance en la Implementación de  obras de reducción de riesgo por amenaza natural',
                    'goal_1' => 0,
                    'goal_2' => 20,
                    'goal_3' => 75,
                    'goal_4' => 100,
                    'goal' => 195,
                    'weighing' => 25, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity79 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct80,
                    'name' => 'Asesoría y asistencia técnica  a entes territoriales y/o consejos territoriales de desastres incluido el fortalecimiento a  la capacidad local en prevención y atención de incendios forestales',
                    'goal_1' => 38,
                    'goal_2' => 38,
                    'goal_3' => 38,
                    'goal_4' => 38,
                    'goal' => 152,
                    'weighing' => 25, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity80 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct81,
                    'name' => 'Sistema Integrado de Gestión  conforme y articulado al MECI',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity81 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct82,
                    'name' => 'Ejecución del Plan Estratégico Tecnológico 2016-2019',
                    'goal_1' => 25,
                    'goal_2' => 50,
                    'goal_3' => 75,
                    'goal_4' => 100,
                    'goal' => 250,
                    'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity82 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct83,
                    'name' => 'Implementacion del programa de gestión documental  ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity83 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct84,
                    'name' => 'Estudio de reestructuración organizacional',
                    'goal_1' => 1,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 1,
                    'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity84 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct85,
                    'name' => 'Diseño y/o construcción y/o adecuación de sede central y predios de su propiedad, como ejemplo de sostenibilidad ambiental y armonía con el ambiente',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity85 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct86,
                    'name' => 'Adquisición, y/o diseño y/o construcción y/o adecuación de sedes territoriales ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 0,
                    'goal' => 3,
                    'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity86 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct87,
                    'name' => 'Estrategia Imagen Corporativa',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity87 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct88,
                    'name' => 'Apoyo a municipios en la actualización catastral',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 2,
                    'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity88 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct89,
                    'name' => 'Gastos de Gestión, Operación, Administración y Promoción del Proyecto',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 12, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity89 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective12,
                    'product_id' =>$idobjectiveproduct90,
                    'name' => 'Ejecución de acciones en Educación Ambiental',
                    'goal_1' => 25,
                    'goal_2' => 50,
                    'goal_3' => 75,
                    'goal_4' => 100,
                    'goal' => 250,
                    'weighing' => 16, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity90 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective12,
                    'product_id' =>$idobjectiveproduct91,
                    'name' => 'Ejecución de la Política Nacional Ambiental en la región',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 16, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity91 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective12,
                    'product_id' =>$idobjectiveproduct92,
                    'name' => 'Diseño e implementación de Programa de Educación Ambiental',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 0,
                    'goal' => 3,
                    'weighing' => 17, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity92 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective12,
                    'product_id' =>$idobjectiveproduct93,
                    'name' => 'Construcción, dotación e implementación  de senderos interpretativos para la educación ambiental',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 17, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity93 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective12,
                    'product_id' =>$idobjectiveproduct94,
                    'name' => 'Estrategia de comunicación para sensibilizar cambios de actitud y toma de conciencia sobre el adecuado uso de los recursos naturales renovables',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 17, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity94 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective12,
                    'product_id' =>$idobjectiveproduct95,
                    'name' => 'Gastos de Gestión, Operación, Administración y Promoción del Proyecto',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 17, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity95 = DB::getPdo()->lastInsertId();
					
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity1,
						'year' =>1,
						'value' => 60,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia1 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity2,
						'year' =>1,
						'value' => 3,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia2 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>1,
						'value' => 30,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia3 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>1,
						'value' => 3,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia4 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity5,
						'year' =>1,
						'value' => 17,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia5 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity6,
						'year' =>1,
						'value' => 0.5,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia6 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity7,
						'year' =>1,
						'value' => 60,
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
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia9 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>1,
						'value' => 37,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia10 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity11,
						'year' =>1,
						'value' => 5,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia11 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity12,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia12 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity13,
						'year' =>1,
						'value' => 100,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia13 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity14,
						'year' =>1,
						'value' => 3,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia14 = DB::getPdo()->lastInsertId(); 

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
						'value' => 46,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia18 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity19,
						'year' =>1,
						'value' => 9463,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia19 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity20,
						'year' =>1,
						'value' => 873,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia20 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>1,
						'value' => 250,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia21 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity22,
						'year' =>1,
						'value' => 10,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia22 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity23,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia23 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity24,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia24 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>1,
						'value' => 15,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia25 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity26,
						'year' =>1,
						'value' => 33160,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia26 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity28,
						'year' =>1,
						'value' => 30,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia28 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity29,
						'year' =>1,
						'value' => 3,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia29 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity30,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia30 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>1,
						'value' => 100,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia33 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity34,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia34 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity35,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia35 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity36,
						'year' =>1,
						'value' => 100,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia36 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity37,
						'year' =>1,
						'value' => 35140,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia37 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>1,
						'value' => 186743,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia38 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity39,
						'year' =>1,
						'value' => 25,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia39 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity40,
						'year' =>1,
						'value' => 192,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia40 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity41,
						'year' =>1,
						'value' => 100,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia41 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>1,
						'value' => 4,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia42 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity43,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia43 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>1,
						'value' => 25,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia44 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity45,
						'year' =>1,
						'value' => 19,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia45 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>1,
						'value' => 2,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia46 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity47,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia47 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity48,
						'year' =>1,
						'value' => 2,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia48 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia49 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity50,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia50 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity51,
						'year' =>1,
						'value' => 30,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia51 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity52,
						'year' =>1,
						'value' => 2,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia52 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity53,
						'year' =>1,
						'value' => 0.8,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia53 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity54,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia54 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>1,
						'value' => 100,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia55 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity56,
						'year' =>1,
						'value' => 100,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia56 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>1,
						'value' => 100,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia57 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity58,
						'year' =>1,
						'value' => 100,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia58 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>1,
						'value' => 60,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia59 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity60,
						'year' =>1,
						'value' => 20,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia60 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity61,
						'year' =>1,
						'value' => 100,
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
						'value' => 1,
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
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia65 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity66,
						'year' =>1,
						'value' => 100,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia66 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity67,
						'year' =>1,
						'value' => 37,
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
						'value' => 90,
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
						'value' => 100,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia71 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>1,
						'value' => 100,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia72 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity73,
						'year' =>1,
						'value' => 70,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia73 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity74,
						'year' =>1,
						'value' => 5,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia74 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity76,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia76 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity77,
						'year' =>1,
						'value' => 1,
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
						'value' => 38,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia80 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity81,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia81 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity82,
						'year' =>1,
						'value' => 25,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia82 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity83,
						'year' =>1,
						'value' => 1,
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
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia85 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity86,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia86 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity87,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia87 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity88,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia88 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity89,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia89 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity90,
						'year' =>1,
						'value' => 25,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia90 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity91,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia91 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity92,
						'year' =>1,
						'value' => 1,
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
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia95 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity1,
						'year' =>2,
						'value' => 26,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia96 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity2,
						'year' =>2,
						'value' => 5,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia97 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>2,
						'value' => 50,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia98 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>2,
						'value' => 2,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia99 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity6,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia101 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity7,
						'year' =>2,
						'value' => 40,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia102 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity8,
						'year' =>2,
						'value' => 6,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia103 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity9,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia104 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>2,
						'value' => 37,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia105 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity12,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia107 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity13,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia108 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity14,
						'year' =>2,
						'value' => 3,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia109 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity15,
						'year' =>2,
						'value' => 50,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia110 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity16,
						'year' =>2,
						'value' => 200,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia111 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity17,
						'year' =>2,
						'value' => 37,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia112 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity18,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia113 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity19,
						'year' =>2,
						'value' => 3844,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia114 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity20,
						'year' =>2,
						'value' => 3450,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia115 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>2,
						'value' => 300,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia116 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity22,
						'year' =>2,
						'value' => 30,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia117 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity23,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia118 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity24,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia119 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity26,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia121 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity27,
						'year' =>2,
						'value' => 20,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia122 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity28,
						'year' =>2,
						'value' => 30,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia123 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity29,
						'year' =>2,
						'value' => 3,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia124 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity30,
						'year' =>2,
						'value' => 2,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia125 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity31,
						'year' =>2,
						'value' => 33,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia126 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity32,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia127 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia128 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity34,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia129 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity35,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia130 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity36,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia131 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity37,
						'year' =>2,
						'value' => 66787,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia132 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>2,
						'value' => 137106,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia133 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity39,
						'year' =>2,
						'value' => 24.7,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia134 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity40,
						'year' =>2,
						'value' => 214,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia135 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity41,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia136 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>2,
						'value' => 4,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia137 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity43,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia138 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>2,
						'value' => 25,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia139 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity45,
						'year' =>2,
						'value' => 27,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia140 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>2,
						'value' => 3,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia141 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity47,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia142 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity48,
						'year' =>2,
						'value' => 2,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia143 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>2,
						'value' => 2,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia144 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity50,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia145 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity51,
						'year' =>2,
						'value' => 30,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia146 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity52,
						'year' =>2,
						'value' => 2,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia147 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity53,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia148 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity54,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia149 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia150 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity56,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia151 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia152 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity58,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia153 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>2,
						'value' => 60,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia154 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity60,
						'year' =>2,
						'value' => 25,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia155 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity61,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia156 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity62,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia157 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity63,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia158 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity64,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia159 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity65,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia160 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity66,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia161 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity67,
						'year' =>2,
						'value' => 37,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia162 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity68,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia163 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity69,
						'year' =>2,
						'value' => 90,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia164 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity71,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia166 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia167 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity73,
						'year' =>2,
						'value' => 10,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia168 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity74,
						'year' =>2,
						'value' => 8,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia169 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity75,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia170 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity76,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia171 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity77,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia172 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity78,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia173 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity79,
						'year' =>2,
						'value' => 20,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia174 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity80,
						'year' =>2,
						'value' => 38,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia175 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity81,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia176 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity82,
						'year' =>2,
						'value' => 50,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia177 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity83,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia178 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity85,
						'year' =>2,
						'value' => 0.9,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia180 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity86,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia181 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity87,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia182 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity88,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia183 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity89,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia184 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity90,
						'year' =>2,
						'value' => 50,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia185 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity91,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia186 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity92,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia187 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity93,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia188 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity94,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia189 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity95,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia190 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity2,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia192 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>3,
						'value' => 80,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia193 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>3,
						'value' => 3,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia194 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity5,
						'year' =>3,
						'value' => 30,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia195 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity6,
						'year' =>3,
						'value' => 0.9,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia196 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity9,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia199 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>3,
						'value' => 37,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia200 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity11,
						'year' =>3,
						'value' => 8,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia201 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity12,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia202 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity13,
						'year' =>3,
						'value' => 100,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia203 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity14,
						'year' =>3,
						'value' => 3,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia204 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity15,
						'year' =>3,
						'value' => 25,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia205 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity16,
						'year' =>3,
						'value' => 100,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia206 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity17,
						'year' =>3,
						'value' => 60,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia207 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity18,
						'year' =>3,
						'value' => 202,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia208 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity19,
						'year' =>3,
						'value' => 500,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia209 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity20,
						'year' =>3,
						'value' => 8260,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia210 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>3,
						'value' => 577.08,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia211 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity22,
						'year' =>3,
						'value' => 30,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia212 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity23,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia213 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity24,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia214 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>3,
						'value' => 55,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia215 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity26,
						'year' =>3,
						'value' => 123839,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia216 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity27,
						'year' =>3,
						'value' => 30,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia217 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity28,
						'year' =>3,
						'value' => 30,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia218 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity29,
						'year' =>3,
						'value' => 3,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia219 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity30,
						'year' =>3,
						'value' => 1.3,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia220 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity31,
						'year' =>3,
						'value' => 66.6,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia221 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity32,
						'year' =>3,
						'value' => 3,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia222 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>3,
						'value' => 100,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia223 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity34,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia224 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity36,
						'year' =>3,
						'value' => 100,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia226 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity37,
						'year' =>3,
						'value' => 99948,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia227 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>3,
						'value' => 155096,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia228 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity39,
						'year' =>3,
						'value' => 25,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia229 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity40,
						'year' =>3,
						'value' => 242,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia230 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity41,
						'year' =>3,
						'value' => 100,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia231 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>3,
						'value' => 4,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia232 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity43,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia233 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>3,
						'value' => 25,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia234 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity45,
						'year' =>3,
						'value' => 27,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia235 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>3,
						'value' => 3,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia236 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity47,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia237 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity48,
						'year' =>3,
						'value' => 2,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia238 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia239 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity50,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia240 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity51,
						'year' =>3,
						'value' => 20,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia241 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity52,
						'year' =>3,
						'value' => 2,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia242 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity54,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia244 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>3,
						'value' => 100,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia245 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity56,
						'year' =>3,
						'value' => 100,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia246 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>3,
						'value' => 100,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia247 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity58,
						'year' =>3,
						'value' => 100,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia248 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>3,
						'value' => 60,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia249 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity60,
						'year' =>3,
						'value' => 30,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia250 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity61,
						'year' =>3,
						'value' => 100,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia251 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity62,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia252 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity63,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia253 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity64,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia254 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity65,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia255 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity66,
						'year' =>3,
						'value' => 100,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia256 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity67,
						'year' =>3,
						'value' => 37,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia257 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity68,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia258 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity69,
						'year' =>3,
						'value' => 90,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia259 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity70,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia260 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity71,
						'year' =>3,
						'value' => 100,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia261 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>3,
						'value' => 100,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia262 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity73,
						'year' =>3,
						'value' => 20,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia263 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity74,
						'year' =>3,
						'value' => 8,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia264 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity76,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia266 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity77,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia267 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity78,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia268 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity79,
						'year' =>3,
						'value' => 75,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia269 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity80,
						'year' =>3,
						'value' => 38,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia270 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity81,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia271 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity82,
						'year' =>3,
						'value' => 75,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia272 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity83,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia273 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity85,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia275 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity86,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia276 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity87,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia277 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity89,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia279 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity90,
						'year' =>3,
						'value' => 75,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia280 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity91,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia281 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity92,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia282 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity93,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia283 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity94,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia284 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity95,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia285 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity1,
						'year' =>4,
						'value' => 14,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia286 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity2,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia287 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia288 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>4,
						'value' => 2,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia289 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity5,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia290 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity6,
						'year' =>4,
						'value' => 3,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia291 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity9,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia294 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>4,
						'value' => 37,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia295 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity11,
						'year' =>4,
						'value' => 5,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia296 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity13,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia298 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity14,
						'year' =>4,
						'value' => 5,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia299 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity15,
						'year' =>4,
						'value' => 25,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia300 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity16,
						'year' =>4,
						'value' => 161.7,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia301 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity17,
						'year' =>4,
						'value' => 20,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia302 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity18,
						'year' =>4,
						'value' => 141,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia303 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity19,
						'year' =>4,
						'value' => 500,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia304 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity20,
						'year' =>4,
						'value' => 1963,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia305 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>4,
						'value' => 814,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia306 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity22,
						'year' =>4,
						'value' => 30,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia307 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity23,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia308 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity24,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia309 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>4,
						'value' => 21.86,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia310 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity26,
						'year' =>4,
						'value' => 50289,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia311 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity27,
						'year' =>4,
						'value' => 50,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia312 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity28,
						'year' =>4,
						'value' => 30,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia313 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity29,
						'year' =>4,
						'value' => 3,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia314 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity30,
						'year' =>4,
						'value' => 2,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia315 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia318 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity34,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia319 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity36,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia321 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity37,
						'year' =>4,
						'value' => 99948,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia322 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>4,
						'value' => 216462,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia323 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity39,
						'year' =>4,
						'value' => 25,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia324 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity40,
						'year' =>4,
						'value' => 267,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia325 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity41,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia326 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>4,
						'value' => 4,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia327 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity43,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia328 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>4,
						'value' => 25,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia329 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity45,
						'year' =>4,
						'value' => 27,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia330 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>4,
						'value' => 3,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia331 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity47,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia332 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity48,
						'year' =>4,
						'value' => 2,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia333 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>4,
						'value' => 2,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia334 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity50,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia335 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity51,
						'year' =>4,
						'value' => 20,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia336 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity52,
						'year' =>4,
						'value' => 2,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia337 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity54,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia339 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia340 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity56,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia341 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia342 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity58,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia343 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>4,
						'value' => 60,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia344 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity60,
						'year' =>4,
						'value' => 35,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia345 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity61,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia346 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity62,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia347 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity63,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia348 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity64,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia349 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity65,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia350 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity66,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia351 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity67,
						'year' =>4,
						'value' => 37,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia352 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity68,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia353 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity69,
						'year' =>4,
						'value' => 90,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia354 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity70,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia355 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity71,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia356 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia357 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity74,
						'year' =>4,
						'value' => 5,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia359 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity76,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia361 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity77,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia362 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity78,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia363 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity79,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia364 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity80,
						'year' =>4,
						'value' => 38,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia365 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity81,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia366 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity82,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia367 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity83,
						'year' =>4,
						'value' => 0.96,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia368 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity84,
						'year' =>4,
						'value' => 0,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia369 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity85,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia370 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity86,
						'year' =>4,
						'value' => 0,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia371 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity87,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia372 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity88,
						'year' =>4,
						'value' => 0,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia373 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity89,
						'year' =>4,
						'value' => 0,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia374 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity90,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia375 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity91,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia376 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity93,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia378 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity94,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia379 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity95,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia380 = DB::getPdo()->lastInsertId(); 

					
                    DB::table('financing_sources')->insert([
                      'father_id' => 11,
                      'code' => '1.1.1.1.1.1.1.1',
                      'name' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
                      'description' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
                      'type_id' => 22,
                      'final_level' => true,
                      'group_id' => 2,
                      ]);
                      $idFuente1 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financing_sources')->insert([
                      'father_id' => 58,
                      'code' => '1.1.2.2.2.1.1',
                      'name' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
                      'description' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
                      'type_id' => 22,
                      'final_level' => true,
                      'group_id' => 2,
                      ]);
                      $idFuente2 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financing_sources')->insert([
                      'father_id' => 27,
                      'code' => '1.1.2.1.1.1.1.1',
                      'name' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia actual)',
                      'description' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia actual)',
                      'type_id' => 22,
                      'final_level' => true,
                      'group_id' => 2,
                      ]);
                      $idFuente3 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financing_sources')->insert([
                      'father_id' => 208,
                      'code' => '1.2.5.1.3',
                      'name' => 'Otros Convenios',
                      'description' => 'Otros Convenios',
                      'type_id' => 22,
                      'final_level' => true,
                      'group_id' => 2,
                      ]);
                      $idFuente4 = DB::getPdo()->lastInsertId();
                       
                      DB::table('financing_sources')->insert([
                        'father_id' => 3,
                        'code' => '1.1.1.2',
                        'name' => 'Otros Aportes de Otras Entidades',
                        'description' => 'Otros Aportes de Otras Entidades',
                        'type_id' => 22,
                        'final_level' => true,
                        'group_id' => 2,
                        ]);
                        $idFuente5 = DB::getPdo()->lastInsertId();
              
                      DB::table('financing_sources')->insert([
                        'father_id' => 3,
                        'code' => '1.1.1.3',
                        'name' => 'Otros Ingresos',
                        'description' => 'Otros Ingresos',
                        'type_id' => 22,
                        'final_level' => true,
                        'group_id' => 2,
                        ]);
                        $idFuente10 = DB::getPdo()->lastInsertId();
                         
            
                     DB::table('financing_sources')->insert([
                      'father_id' => 42,
                      'code' => '1.1.2.2.1.1.1.1',
                      'name' => 'Tasa retributiva (vigencia actual)',
                      'description' => 'Tasa retributiva (vigencia actual)',
                      'type_id' => 22,
                      'final_level' => true,
                      'group_id' => 2,
                      ]);
                      $idFuente6 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financing_sources')->insert([
                      'father_id' => 45,
                      'code' => '1.1.2.2.1.1.2.1',
                      'name' => 'Tasa por el uso del agua (vigencia actual)',
                      'description' => 'Tasa por el uso del agua (vigencia actual)',
                      'type_id' => 22,
                      'final_level' => true,
                      'group_id' => 2,
                      ]);
                      $idFuente7 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financing_sources')->insert([
                      'father_id' => 48,
                      'code' => '1.1.2.2.1.1.3.1',
                      'name' => 'Tasa de aprovechamiento Forestal (vigencia actual)',
                      'description' => 'Tasa de aprovechamiento Forestal (vigencia actual)',
                      'type_id' => 22,
                      'final_level' => true,
                      'group_id' => 2,
                      ]);
                      $idFuente8 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financing_sources')->insert([
                      'father_id' => 84,
                      'code' => '1.1.2.3.1.1.1',
                      'name' => 'Multas ambientales (vigencia actual)',
                      'description' => 'Multas ambientales (vigencia actual)',
                      'type_id' => 22,
                      'final_level' => true,
                      'group_id' => 2,
                      ]);
                      $idFuente9 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financing_sources')->insert([
                      'father_id' => 145,
                      'code' => '1.2.2.6',
                      'name' => 'Rendimientos financieros',
                      'description' => 'Rendimientos financieros',
                      'type_id' => 22,
                      'final_level' => true,
                      'group_id' => 2,
                      ]);
                      $idFuente11 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financing_sources')->insert([
                      'father_id' => 145,
                      'code' => '1.2.2.7',
                      'name' => 'Excedentes financieros',
                      'description' => 'Excedentes financieros',
                      'type_id' => 22,
                      'final_level' => true,
                      'group_id' => 2,
                      ]);
                      $idFuente12 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financing_sources')->insert([
                      'father_id' => 279,
                      'code' => '1.2.7.3.3.5',
                      'name' => 'Cancelación de reservas Otras tasas',
                      'description' => 'Cancelación de reservas Otras tasas',
                      'type_id' => 22,
                      'final_level' => true,
                      'group_id' => 2,
                      ]);
                      $idFuente13 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financing_sources')->insert([
                      'father_id' => 241,
                      'code' => '1.2.6.3.5',
                      'name' => 'Recuperación de cartera Otras tasas',
                      'description' => 'Recuperación de cartera Otras tasas',
                      'type_id' => 22,
                      'final_level' => true,
                      'group_id' => 2,
                      ]);
                      $idFuente14 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financing_sources')->insert([
                      'father_id' => 119,
                      'code' => '1.1.2.5.1.1.1.4',
                      'name' => 'Aportes de la Nación Funcionamiento',
                      'description' => 'Aportes de la Nación Funcionamiento',
                      'type_id' => 23,
                      'final_level' => true,
                      'group_id' => 2,
                      ]);
                      $idFuente15 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financing_sources')->insert([
                      'father_id' => 118,
                      'code' => '1.1.2.5.1.1.2',
                      'name' => 'Aportes de la Nación para Inversión',
                      'description' => 'Aportes de la Nación para Inversión',
                      'type_id' => 23,
                      'final_level' => true,
                      'group_id' => 2,
                      ]);
                      $idFuente16 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente1,
                      'value' => 7966559232,
                      'functioning_percentage' => 0,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 0,
                      'investment_percentage' => 100,
                      'functioning' => 0,
                      'debt_service' => 0,
                      'fund' => 0,
                      'investment' => 7966559232,
                      'year' => 1,
                      ]);
                      $idPlan1 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente2,
                      'value' => 579744516,
                      'functioning_percentage' => 100,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 0,
                      'investment_percentage' => 0,
                      'functioning' => 579744516,
                      'debt_service' => 0,
                      'fund' => 0,
                      'investment' => 0,
                      'year' => 1,
                      ]);
                      $idPlan2 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente3,
                      'value' => 5328127328,
                      'functioning_percentage' => 5,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 10,
                      'investment_percentage' => 85,
                      'functioning' => 266406366.4,
                      'debt_service' => 0,
                      'fund' => 532812732.8,
                      'investment' => 4528908228.8,
                      'year' => 1,
                      ]);
                      $idPlan3 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente5,
                      'value' => 4477666940,
                      'functioning_percentage' => 0,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 0,
                      'investment_percentage' => 100,
                      'functioning' => 0,
                      'debt_service' => 0,
                      'fund' => 0,
                      'investment' => 4477666940,
                      'year' => 1,
                      ]);
                      $idPlan4 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente6,
                      'value' => 804494608,
                      'functioning_percentage' => 1.03,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 10.9635,
                      'investment_percentage' => 88.0065,
                      'functioning' => 8286294.4624,
                      'debt_service' => 0,
                      'fund' => 88200766.34808,
                      'investment' => 708007547.18952,
                      'year' => 1,
                      ]);
                      $idPlan5 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente7,
                      'value' => 1165272764,
                      'functioning_percentage' => 0,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 15,
                      'investment_percentage' => 85,
                      'functioning' => 0,
                      'debt_service' => 0,
                      'fund' => 174790914.6,
                      'investment' => 990481849.4,
                      'year' => 1,
                      ]);
                      $idPlan6 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente8,
                      'value' => 12390896,
                      'functioning_percentage' => 0,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 20,
                      'investment_percentage' => 80,
                      'functioning' => 0,
                      'debt_service' => 0,
                      'fund' => 2478179.2,
                      'investment' => 9912716.8,
                      'year' => 1,
                      ]);
                      $idPlan7 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente9,
                      'value' => 172058789,
                      'functioning_percentage' => 80,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 20,
                      'investment_percentage' => 0,
                      'functioning' => 137647031.2,
                      'debt_service' => 0,
                      'fund' => 34411757.8,
                      'investment' => 0,
                      'year' => 1,
                      ]);
                      $idPlan8 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente10,
                      'value' => 54400465,
                      'functioning_percentage' => 79,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 21,
                      'investment_percentage' => 0,
                      'functioning' => 42976367.35,
                      'debt_service' => 0,
                      'fund' => 11424097.65,
                      'investment' => 0,
                      'year' => 1,
                      ]);
                      $idPlan9 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente11,
                      'value' => 420196365,
                      'functioning_percentage' => 0,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 0,
                      'investment_percentage' => 100,
                      'functioning' => 0,
                      'debt_service' => 0,
                      'fund' => 0,
                      'investment' => 420196365,
                      'year' => 1,
                      ]);
                      $idPlan10 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente12,
                      'value' => 11224297484,
                      'functioning_percentage' => 0,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 10,
                      'investment_percentage' => 90,
                      'functioning' => 0,
                      'debt_service' => 0,
                      'fund' => 1122429748.4,
                      'investment' => 10101867735.6,
                      'year' => 1,
                      ]);
                      $idPlan11 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente14,
                      'value' => 2874467545,
                      'functioning_percentage' => 100,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 0,
                      'investment_percentage' => 0,
                      'functioning' => 2874467545,
                      'debt_service' => 0,
                      'fund' => 0,
                      'investment' => 0,
                      'year' => 1,
                      ]);
                      $idPlan12 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente15,
                      'value' => 1977719678,
                      'functioning_percentage' => 100,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 0,
                      'investment_percentage' => 0,
                      'functioning' => 1977719678,
                      'debt_service' => 0,
                      'fund' => 0,
                      'investment' => 0,
                      'year' => 1,
                      ]);
                      $idPlan13 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente16,
                      'value' => 2680000000,
                      'functioning_percentage' => 0,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 0,
                      'investment_percentage' => 100,
                      'functioning' => 0,
                      'debt_service' => 0,
                      'fund' => 0,
                      'investment' => 2680000000,
                      'year' => 1,
                      ]);
                      $idPlan14 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente1,
                      'value' => 8557612194,
                      'functioning_percentage' => 0,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 0,
                      'investment_percentage' => 100,
                      'functioning' => 0,
                      'debt_service' => 0,
                      'fund' => 0,
                      'investment' => 8557612194,
                      'year' => 2,
                      ]);
                      $idPlan15 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente2,
                      'value' => 849924856,
                      'functioning_percentage' => 100,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 0,
                      'investment_percentage' => 0,
                      'functioning' => 849924856,
                      'debt_service' => 0,
                      'fund' => 0,
                      'investment' => 0,
                      'year' => 2,
                      ]);
                      $idPlan16 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente3,
                      'value' => 6468644284,
                      'functioning_percentage' => 0,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 20,
                      'investment_percentage' => 80,
                      'functioning' => 0,
                      'debt_service' => 0,
                      'fund' => 1293728856.8,
                      'investment' => 5174915427.2,
                      'year' => 2,
                      ]);
                      $idPlan17 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente6,
                      'value' => 989495721,
                      'functioning_percentage' => 1,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 10,
                      'investment_percentage' => 89,
                      'functioning' => 9894957.21,
                      'debt_service' => 0,
                      'fund' => 98949572.1,
                      'investment' => 880651191.69,
                      'year' => 2,
                      ]);
                      $idPlan18 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente7,
                      'value' => 1038663894,
                      'functioning_percentage' => 0,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 10,
                      'investment_percentage' => 85,
                      'functioning' => 0,
                      'debt_service' => 0,
                      'fund' => 103866389.4,
                      'investment' => 882864309.9,
                      'year' => 2,
                      ]);
                      $idPlan19 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente8,
                      'value' => 507495478,
                      'functioning_percentage' => 0,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 10,
                      'investment_percentage' => 80,
                      'functioning' => 0,
                      'debt_service' => 0,
                      'fund' => 50749547.8,
                      'investment' => 405996382.4,
                      'year' => 2,
                      ]);
                      $idPlan20 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente9,
                      'value' => 338558803,
                      'functioning_percentage' => 76.109,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 20.767,
                      'investment_percentage' => 4,
                      'functioning' => 257673719.37527,
                      'debt_service' => 0,
                      'fund' => 70308506.61901,
                      'investment' => 13542352.12,
                      'year' => 2,
                      ]);
                      $idPlan21 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente10,
                      'value' => 62060657,
                      'functioning_percentage' => 0,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 35,
                      'investment_percentage' => 79,
                      'functioning' => 0,
                      'debt_service' => 0,
                      'fund' => 21721229.95,
                      'investment' => 49027919.03,
                      'year' => 2,
                      ]);
                      $idPlan22 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente11,
                      'value' => 566354371,
                      'functioning_percentage' => 0,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 0,
                      'investment_percentage' => 100,
                      'functioning' => 0,
                      'debt_service' => 0,
                      'fund' => 0,
                      'investment' => 566354371,
                      'year' => 2,
                      ]);
                      $idPlan23 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente12,
                      'value' => 7783475405,
                      'functioning_percentage' => 0,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 10,
                      'investment_percentage' => 90,
                      'functioning' => 0,
                      'debt_service' => 0,
                      'fund' => 778347540.5,
                      'investment' => 7005127864.5,
                      'year' => 2,
                      ]);
                      $idPlan24 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente14,
                      'value' => 3959496493,
                      'functioning_percentage' => 70,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 0,
                      'investment_percentage' => 30,
                      'functioning' => 2771647545.1,
                      'debt_service' => 0,
                      'fund' => 0,
                      'investment' => 1187848947.9,
                      'year' => 2,
                      ]);
                      $idPlan25 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente15,
                      'value' => 2074005000,
                      'functioning_percentage' => 100,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 0,
                      'investment_percentage' => 0,
                      'functioning' => 2074005000,
                      'debt_service' => 0,
                      'fund' => 0,
                      'investment' => 0,
                      'year' => 2,
                      ]);
                      $idPlan26 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente16,
                      'value' => 3051800000,
                      'functioning_percentage' => 0,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 0,
                      'investment_percentage' => 100,
                      'functioning' => 0,
                      'debt_service' => 0,
                      'fund' => 0,
                      'investment' => 3051800000,
                      'year' => 2,
                      ]);
                      $idPlan27 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente1,
                      'value' => 9133016496,
                      'functioning_percentage' => 0,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 0,
                      'investment_percentage' => 100,
                      'functioning' => 0,
                      'debt_service' => 0,
                      'fund' => 0,
                      'investment' => 9133016496,
                      'year' => 3,
                      ]);
                      $idPlan28 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente2,
                      'value' => 907653683,
                      'functioning_percentage' => 100,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 0,
                      'investment_percentage' => 0,
                      'functioning' => 907653683,
                      'debt_service' => 0,
                      'fund' => 0,
                      'investment' => 0,
                      'year' => 3,
                      ]);
                      $idPlan29 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente3,
                      'value' => 7195334584,
                      'functioning_percentage' => 0,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 20,
                      'investment_percentage' => 80,
                      'functioning' => 0,
                      'debt_service' => 0,
                      'fund' => 1439066916.8,
                      'investment' => 5756267667.2,
                      'year' => 3,
                      ]);
                      $idPlan30 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente5,
                      'value' => 0,
                      'functioning_percentage' => 0,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 0,
                      'investment_percentage' => 0,
                      'functioning' => 0,
                      'debt_service' => 0,
                      'fund' => 0,
                      'investment' => 0,
                      'year' => 3,
                      ]);
                      $idPlan31 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente6,
                      'value' => 1070506847,
                      'functioning_percentage' => 0,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 20,
                      'investment_percentage' => 80,
                      'functioning' => 0,
                      'debt_service' => 0,
                      'fund' => 214101369.4,
                      'investment' => 856405477.6,
                      'year' => 3,
                      ]);
                      $idPlan32 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente7,
                      'value' => 1324022079,
                      'functioning_percentage' => 0,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 20,
                      'investment_percentage' => 80,
                      'functioning' => 0,
                      'debt_service' => 0,
                      'fund' => 264804415.8,
                      'investment' => 1059217663.2,
                      'year' => 3,
                      ]);
                      $idPlan33 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente8,
                      'value' => 253747000,
                      'functioning_percentage' => 0,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 20,
                      'investment_percentage' => 80,
                      'functioning' => 0,
                      'debt_service' => 0,
                      'fund' => 50749400,
                      'investment' => 202997600,
                      'year' => 3,
                      ]);
                      $idPlan34 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente9,
                      'value' => 151754308,
                      'functioning_percentage' => 80,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 20,
                      'investment_percentage' => 0,
                      'functioning' => 121403446.4,
                      'debt_service' => 0,
                      'fund' => 30350861.6,
                      'investment' => 0,
                      'year' => 3,
                      ]);
                      $idPlan35 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente10,
                      'value' => 56702815,
                      'functioning_percentage' => 26.045,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 12.565,
                      'investment_percentage' => 61.39,
                      'functioning' => 14768248.16675,
                      'debt_service' => 0,
                      'fund' => 7124708.70475,
                      'investment' => 34809858.1285,
                      'year' => 3,
                      ]);
                      $idPlan36 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente11,
                      'value' => 720000000,
                      'functioning_percentage' => 0,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 0,
                      'investment_percentage' => 100,
                      'functioning' => 0,
                      'debt_service' => 0,
                      'fund' => 0,
                      'investment' => 720000000,
                      'year' => 3,
                      ]);
                      $idPlan37 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente12,
                      'value' => 5210149324,
                      'functioning_percentage' => 0,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 11,
                      'investment_percentage' => 89,
                      'functioning' => 0,
                      'debt_service' => 0,
                      'fund' => 573116425.64,
                      'investment' => 4637032898.36,
                      'year' => 3,
                      ]);
                      $idPlan38 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente13,
                      'value' => 4828952214,
                      'functioning_percentage' => 9,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 5,
                      'investment_percentage' => 86,
                      'functioning' => 434605699.26,
                      'debt_service' => 0,
                      'fund' => 241447610.7,
                      'investment' => 4152898904.04,
                      'year' => 3,
                      ]);
                      $idPlan39 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente14,
                      'value' => 4042566415,
                      'functioning_percentage' => 70,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 0,
                      'investment_percentage' => 30,
                      'functioning' => 2829796490.5,
                      'debt_service' => 0,
                      'fund' => 0,
                      'investment' => 1212769924.5,
                      'year' => 3,
                      ]);
                      $idPlan40 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente16,
                      'value' => 4574086189,
                      'functioning_percentage' => 0,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 0,
                      'investment_percentage' => 100,
                      'functioning' => 0,
                      'debt_service' => 0,
                      'fund' => 0,
                      'investment' => 4574086189,
                      'year' => 3,
                      ]);
                      $idPlan41 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente1,
                      'value' => 35001953059,
                      'functioning_percentage' => 0,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 0,
                      'investment_percentage' => 100,
                      'functioning' => 0,
                      'debt_service' => 0,
                      'fund' => 0,
                      'investment' => 35001953059,
                      'year' => 4,
                      ]);
                      $idPlan42 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente2,
                      'value' => 3330454209,
                      'functioning_percentage' => 100,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 0,
                      'investment_percentage' => 0,
                      'functioning' => 3330454209,
                      'debt_service' => 0,
                      'fund' => 0,
                      'investment' => 0,
                      'year' => 4,
                      ]);
                      $idPlan43 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente3,
                      'value' => 28476379711,
                      'functioning_percentage' => 0,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 20,
                      'investment_percentage' => 80,
                      'functioning' => 0,
                      'debt_service' => 0,
                      'fund' => 5695275942.2,
                      'investment' => 22781103768.8,
                      'year' => 4,
                      ]);
                      $idPlan44 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente4,
                      'value' => 5221167977,
                      'functioning_percentage' => 0,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 0,
                      'investment_percentage' => 100,
                      'functioning' => 0,
                      'debt_service' => 0,
                      'fund' => 0,
                      'investment' => 5221167977,
                      'year' => 4,
                      ]);
                      $idPlan45 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente6,
                      'value' => 3894785880,
                      'functioning_percentage' => 0,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 19,
                      'investment_percentage' => 81,
                      'functioning' => 0,
                      'debt_service' => 0,
                      'fund' => 740009317.2,
                      'investment' => 3154776562.8,
                      'year' => 4,
                      ]);
                      $idPlan46 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente7,
                      'value' => 5058673410,
                      'functioning_percentage' => 0,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 20,
                      'investment_percentage' => 80,
                      'functioning' => 0,
                      'debt_service' => 0,
                      'fund' => 1011734682,
                      'investment' => 4046938728,
                      'year' => 4,
                      ]);
                      $idPlan47 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente8,
                      'value' => 1056966174,
                      'functioning_percentage' => 0,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 10,
                      'investment_percentage' => 90,
                      'functioning' => 0,
                      'debt_service' => 0,
                      'fund' => 105696617.4,
                      'investment' => 951269556.6,
                      'year' => 4,
                      ]);
                      $idPlan48 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente9,
                      'value' => 814126208,
                      'functioning_percentage' => 80,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 20,
                      'investment_percentage' => 0,
                      'functioning' => 651300966.4,
                      'debt_service' => 0,
                      'fund' => 162825241.6,
                      'investment' => 0,
                      'year' => 4,
                      ]);
                      $idPlan49 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente10,
                      'value' => 229866752,
                      'functioning_percentage' => 23.066,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 10.81,
                      'investment_percentage' => 66.124,
                      'functioning' => 53021065.01632,
                      'debt_service' => 0,
                      'fund' => 24848595.8912,
                      'investment' => 151997091.09248,
                      'year' => 4,
                      ]);
                      $idPlan50 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente11,
                      'value' => 2006550736,
                      'functioning_percentage' => 0,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 0,
                      'investment_percentage' => 100,
                      'functioning' => 0,
                      'debt_service' => 0,
                      'fund' => 0,
                      'investment' => 2006550736,
                      'year' => 4,
                      ]);
                      $idPlan51 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente12,
                      'value' => 27385991153,
                      'functioning_percentage' => 0,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 10,
                      'investment_percentage' => 90,
                      'functioning' => 0,
                      'debt_service' => 0,
                      'fund' => 2738599115.3,
                      'investment' => 24647392037.7,
                      'year' => 4,
                      ]);
                      $idPlan52 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente13,
                      'value' => 5278832679,
                      'functioning_percentage' => 17,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 0,
                      'investment_percentage' => 83,
                      'functioning' => 897401555.43,
                      'debt_service' => 0,
                      'fund' => 0,
                      'investment' => 4381431123.57,
                      'year' => 4,
                      ]);
                      $idPlan53 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente14,
                      'value' => 16043320609,
                      'functioning_percentage' => 75,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 0,
                      'investment_percentage' => 25,
                      'functioning' => 12032490456.75,
                      'debt_service' => 0,
                      'fund' => 0,
                      'investment' => 4010830152.25,
                      'year' => 4,
                      ]);
                      $idPlan54 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente15,
                      'value' => 8372638678,
                      'functioning_percentage' => 100,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 0,
                      'investment_percentage' => 0,
                      'functioning' => 8372638678,
                      'debt_service' => 0,
                      'fund' => 0,
                      'investment' => 0,
                      'year' => 4,
                      ]);
                      $idPlan55 = DB::getPdo()->lastInsertId();
                       
                     DB::table('financial_plans')->insert([
                      'p_a_i_id' => $idpai1,
                      'source_id' => $idFuente16,
                      'value' => 10305886189,
                      'functioning_percentage' => 0,
                      'debt_service_percentage' => 0,
                      'fund_percentage' => 0,
                      'investment_percentage' => 100,
                      'functioning' => 0,
                      'debt_service' => 0,
                      'fund' => 0,
                      'investment' => 10305886189,
                      'year' => 4,
                      ]);
                      $idPlan56 = DB::getPdo()->lastInsertId();
                       
                      DB::table('implementations')->insert([
                        'p_a_i_s_id'=>$idpai1,
                        ]);
                        $idImplementation1 = DB::getPdo()->lastInsertId();
      

                     DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 8240561838,
                      'financial_plans_id' => $idPlan1,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo1 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 1104825798,
                      'financial_plans_id' => $idPlan2,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo2 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 5277101396,
                      'financial_plans_id' => $idPlan3,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo3 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 1160653520,
                      'financial_plans_id' => $idPlan4,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo4 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 1271442421,
                      'financial_plans_id' => $idPlan5,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo5 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 1574584642,
                      'financial_plans_id' => $idPlan6,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo6 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 1132110972,
                      'financial_plans_id' => $idPlan7,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo7 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 442902598,
                      'financial_plans_id' => $idPlan8,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo8 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 84880195,
                      'financial_plans_id' => $idPlan9,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo9 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 736340760,
                      'financial_plans_id' => $idPlan10,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo10 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 11224297484,
                      'financial_plans_id' => $idPlan11,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo11 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 3322150434,
                      'financial_plans_id' => $idPlan12,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo12 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 1656530322,
                      'financial_plans_id' => $idPlan13,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo13 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 1462239683,
                      'financial_plans_id' => $idPlan14,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo14 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2017-12-31',
                      'value' => 8767169298,
                      'financial_plans_id' => $idPlan15,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo15 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2017-12-31',
                      'value' => 1272410442,
                      'financial_plans_id' => $idPlan16,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo16 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2017-12-31',
                      'value' => 8087206690,
                      'financial_plans_id' => $idPlan17,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo17 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2017-12-31',
                      'value' => 1113770257,
                      'financial_plans_id' => $idPlan18,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo18 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2017-12-31',
                      'value' => 1159353697,
                      'financial_plans_id' => $idPlan19,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo19 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2017-12-31',
                      'value' => 493837816,
                      'financial_plans_id' => $idPlan20,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo20 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2017-12-31',
                      'value' => 259971783,
                      'financial_plans_id' => $idPlan21,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo21 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2017-12-31',
                      'value' => 84305212,
                      'financial_plans_id' => $idPlan22,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo22 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2017-12-31',
                      'value' => 1083489837,
                      'financial_plans_id' => $idPlan23,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo23 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2017-12-31',
                      'value' => 7783475405,
                      'financial_plans_id' => $idPlan24,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo24 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2017-12-31',
                      'value' => 4485283427,
                      'financial_plans_id' => $idPlan25,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo25 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2017-12-31',
                      'value' => 1994309235,
                      'financial_plans_id' => $idPlan26,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo26 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2017-12-31',
                      'value' => 2164754984,
                      'financial_plans_id' => $idPlan27,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo27 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2018-12-31',
                      'value' => 9048801721,
                      'financial_plans_id' => $idPlan28,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo28 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2018-12-31',
                      'value' => 1195494047,
                      'financial_plans_id' => $idPlan29,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo29 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2018-12-31',
                      'value' => 9853737859,
                      'financial_plans_id' => $idPlan30,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo30 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2018-12-31',
                      'value' => 0,
                      'financial_plans_id' => $idPlan31,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo31 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2018-12-31',
                      'value' => 1370111793,
                      'financial_plans_id' => $idPlan32,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo32 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2018-12-31',
                      'value' => 1434972675,
                      'financial_plans_id' => $idPlan33,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo33 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2018-12-31',
                      'value' => 401208601,
                      'financial_plans_id' => $idPlan34,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo34 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2018-12-31',
                      'value' => 36672147,
                      'financial_plans_id' => $idPlan35,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo35 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2018-12-31',
                      'value' => 189471393,
                      'financial_plans_id' => $idPlan36,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo36 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2018-12-31',
                      'value' => 645309163,
                      'financial_plans_id' => $idPlan37,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo37 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2018-12-31',
                      'value' => 5210149324,
                      'financial_plans_id' => $idPlan38,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo38 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2018-12-31',
                      'value' => 4828952214,
                      'financial_plans_id' => $idPlan39,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo39 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2018-12-31',
                      'value' => 5163959920,
                      'financial_plans_id' => $idPlan40,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo40 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2018-12-31',
                      'value' => 0,
                      'financial_plans_id' => $idPlan41,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo41 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2019-12-31',
                      'value' => 35839359951,
                      'financial_plans_id' => $idPlan42,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo42 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2019-12-31',
                      'value' => 4547660928,
                      'financial_plans_id' => $idPlan43,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo43 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2019-12-31',
                      'value' => 33204248675,
                      'financial_plans_id' => $idPlan44,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo44 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2019-12-31',
                      'value' => 1960090888,
                      'financial_plans_id' => $idPlan45,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo45 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2019-12-31',
                      'value' => 6641757392,
                      'financial_plans_id' => $idPlan46,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo46 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2019-12-31',
                      'value' => 5081326555,
                      'financial_plans_id' => $idPlan47,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo47 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2019-12-31',
                      'value' => 2322408053,
                      'financial_plans_id' => $idPlan48,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo48 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2019-12-31',
                      'value' => 795035835,
                      'financial_plans_id' => $idPlan49,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo49 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2019-12-31',
                      'value' => 554668324,
                      'financial_plans_id' => $idPlan50,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo50 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2019-12-31',
                      'value' => 3723724760,
                      'financial_plans_id' => $idPlan51,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo51 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2019-12-31',
                      'value' => 27385991153,
                      'financial_plans_id' => $idPlan52,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo52 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2019-12-31',
                      'value' => 5278832679,
                      'financial_plans_id' => $idPlan53,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo53 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2019-12-31',
                      'value' => 18937228891,
                      'financial_plans_id' => $idPlan54,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo54 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2019-12-31',
                      'value' => 8371728717,
                      'financial_plans_id' => $idPlan55,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo55 = DB::getPdo()->lastInsertId();
                       
                     DB::table('fundraisings')->insert([
                      'date' => '2019-12-31',
                      'value' => 9573742672,
                      'financial_plans_id' => $idPlan56,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo56 = DB::getPdo()->lastInsertId();
						
					DB::table('cost_sources')->insert([
						'father_id' => 2,
						'code' => '2.1.1',
						'name' => 'GASTOS DE PERSONAL',
						'description' => 'GASTOS DE PERSONAL',
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'group_id' => 2,
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
						'group_id' => 2,
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
						'group_id' => 2,
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
						'group_id' => 2,
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
						'group_id' => 2,
						]);
						$idFuenteGasto7 = DB::getPdo()->lastInsertId();
						
					DB::table('cost_sources')->insert([
						'father_id' => 19,
						'code' => '2.1.3.3.2',
						'name' => 'Conciliaciones',
						'description' => 'Conciliaciones',
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'group_id' => 2,
						]);
						$idFuenteGasto8 = DB::getPdo()->lastInsertId();
						
					DB::table('cost_sources')->insert([
						'father_id' => 29,
						'code' => '2.1.4.3.1',
						'name' => 'Cuota de fiscalización y auditaje',
						'description' => 'Cuota de fiscalización y auditaje',
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'group_id' => 2,
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
						'group_id' => 2,
						]);
						$idFuenteGasto4 = DB::getPdo()->lastInsertId();

					DB::table('financial_costs')->insert([
						'year' => 1,
						'value_bugeted' => 2334886895,
						'value_comitted' => 2194256120,
						'value_paid' => 1823097479.572,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto1,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto1 = DB::getPdo()->lastInsertId();

					DB::table('financial_costs')->insert([
						'year' => 1,
						'value_bugeted' => 378312500,
						'value_comitted' => 231490846,
						'value_paid' => 97345063.94,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto2,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto2 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_costs')->insert([
						'year' => 1,
						'value_bugeted' => 772339281,
						'value_comitted' => 747797131,
						'value_paid' => 660409867.008,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto3,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto3 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_costs')->insert([
						'year' => 1,
						'value_bugeted' => 58719750,
						'value_comitted' => 57152611,
						'value_paid' => 53451019.268,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto4,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto4 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_costs')->insert([
						'year' => 1,
						'value_bugeted' => 34269000,
						'value_comitted' => 34253734,
						'value_paid' => 34253734,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto5,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto5 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_costs')->insert([
						'year' => 1,
						'value_bugeted' => 1966548770,
						'value_comitted' => 1965893673,
						'value_paid' => 1658067929.324,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => FALSE,
						'compensation' => TRUE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto6,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto6 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_costs')->insert([
						'year' => 1,
						'value_bugeted' => 23000000,
						'value_comitted' => 22814692,
						'value_paid' => 22814692.188,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto7,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto7 = DB::getPdo()->lastInsertId();

					DB::table('financial_costs')->insert([
						'year' => 1,
						'value_bugeted' => 308000000,
						'value_comitted' => 291491289,
						'value_paid' => 291491289,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto8,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto8 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_costs')->insert([
						'year' => 1,
						'value_bugeted' => 1942275458,
						'value_comitted' => 1942129273,
						'value_paid' => 1942129273,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto1,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto9 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_costs')->insert([
						'year' => 1,
						'value_bugeted' => 23790220,
						'value_comitted' => 23790220,
						'value_paid' => 23790220,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto3,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto10 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_costs')->insert([
						'year' => 1,
						'value_bugeted' => 1423000,
						'value_comitted' => 1423000,
						'value_paid' => 1423000,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto4,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto11 = DB::getPdo()->lastInsertId();
						

					DB::table('financial_costs')->insert([
						'year' => 1,
						'value_bugeted' => 10231000,
						'value_comitted' => 0,
						'value_paid' => 0,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto5,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto12 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_costs')->insert([
						'year' => 2,
						'value_bugeted' => 2363497053,
						'value_comitted' => 2131038208,
						'value_paid' => 1880560206,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto1,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto13 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_costs')->insert([
						'year' => 2,
						'value_bugeted' => 333638910,
						'value_comitted' => 135831554,
						'value_paid' => 90140957,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto2,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto14 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_costs')->insert([
						'year' => 2,
						'value_bugeted' => 1066566191,
						'value_comitted' => 892498474,
						'value_paid' => 758127778,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto3,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto15 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_costs')->insert([
						'year' => 2,
						'value_bugeted' => 63719750,
						'value_comitted' => 45334244,
						'value_paid' => 45334244,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto4,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto16 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_costs')->insert([
						'year' => 2,
						'value_bugeted' => 31322800,
						'value_comitted' => 31290368,
						'value_paid' => 31290368,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto5,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto17 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_costs')->insert([
						'year' => 2,
						'value_bugeted' => 2417673280,
						'value_comitted' => 2366799742,
						'value_paid' => 2366799742,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => FALSE,
						'compensation' => TRUE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto6,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto18 = DB::getPdo()->lastInsertId();
						
						
					DB::table('financial_costs')->insert([
						'year' => 2,
						'value_bugeted' => 28396600,
						'value_comitted' => 28375250,
						'value_paid' => 28375250,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto7,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto19 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_costs')->insert([
						'year' => 2,
						'value_bugeted' => 2000000,
						'value_comitted' => 1747462,
						'value_paid' => 1747462,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto8,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto20 = DB::getPdo()->lastInsertId();
						
						
					DB::table('financial_costs')->insert([
						'year' => 2,
						'value_bugeted' => 2039750000,
						'value_comitted' => 2039001675,
						'value_paid' => 2039001675,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto1,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto21 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_costs')->insert([
						'year' => 2,
						'value_bugeted' => 22601000,
						'value_comitted' => 22320830,
						'value_paid' => 22320830,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto3,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto22 = DB::getPdo()->lastInsertId();
						
						
					DB::table('financial_costs')->insert([
						'year' => 2,
						'value_bugeted' => 1423000,
						'value_comitted' => 1423000,
						'value_paid' => 1423000,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto4,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto23 = DB::getPdo()->lastInsertId();

					DB::table('financial_costs')->insert([
						'year' => 2,
						'value_bugeted' => 10231000,
						'value_comitted' => 10231000,
						'value_paid' => 10231000,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto5,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto24 = DB::getPdo()->lastInsertId();

					DB::table('financial_costs')->insert([
						'year' => 3,
						'value_bugeted' => 2628388174,
						'value_comitted' => 2527888502,
						'value_paid' => 2338162693,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto1,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto25 = DB::getPdo()->lastInsertId();

					DB::table('financial_costs')->insert([
						'year' => 3,
						'value_bugeted' => 256485391,
						'value_comitted' => 253667423,
						'value_paid' => 202825379,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto2,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto26 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_costs')->insert([
						'year' => 3,
						'value_bugeted' => 1061590695,
						'value_comitted' => 1018332804,
						'value_paid' => 880647767,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto3,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto27 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_costs')->insert([
						'year' => 3,
						'value_bugeted' => 51534000,
						'value_comitted' => 50669595,
						'value_paid' => 50669595,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto4,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto28 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_costs')->insert([
						'year' => 3,
						'value_bugeted' => 39428850,
						'value_comitted' => 39321683,
						'value_paid' => 39321683,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto5,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto29 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_costs')->insert([
						'year' => 3,
						'value_bugeted' => 2820760237,
						'value_comitted' => 2820760237,
						'value_paid' => 2820760237,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => FALSE,
						'compensation' => TRUE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto6,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto30 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_costs')->insert([
						'year' => 3,
						'value_bugeted' => 30800000,
						'value_comitted' => 30779903,
						'value_paid' => 30779903,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto7,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto31 = DB::getPdo()->lastInsertId();

					DB::table('financial_costs')->insert([
						'year' => 3,
						'value_bugeted' => 240000000,
						'value_comitted' => 45563589,
						'value_paid' => 45563589,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto8,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto32 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_costs')->insert([
						'year' => 3,
						'value_bugeted' => 2101005000,
						'value_comitted' => 2101005000,
						'value_paid' => 2101005000,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto1,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto33 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_costs')->insert([
						'year' => 3,
						'value_bugeted' => 22601000,
						'value_comitted' => 22601000,
						'value_paid' => 22601000,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto3,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto34 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_costs')->insert([
						'year' => 3,
						'value_bugeted' => 1466000,
						'value_comitted' => 1466000,
						'value_paid' => 1466000,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto4,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto35 = DB::getPdo()->lastInsertId();

					DB::table('financial_costs')->insert([
						'year' => 3,
						'value_bugeted' => 10538000,
						'value_comitted' => 10538000,
						'value_paid' => 10538000,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto5,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto36 = DB::getPdo()->lastInsertId();

					DB::table('financial_costs')->insert([
						'year' => 4,
						'value_bugeted' => 2829040097,
						'value_comitted' => 2661022532,
						'value_paid' => 2543933251,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto1,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto37 = DB::getPdo()->lastInsertId();

					DB::table('financial_costs')->insert([
						'year' => 4,
						'value_bugeted' => 204175683,
						'value_comitted' => 193690690,
						'value_paid' => 183743132,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto2,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto38 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_costs')->insert([
						'year' => 4,
						'value_bugeted' => 1201512682,
						'value_comitted' => 1065736821,
						'value_paid' => 980997309,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto3,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto39 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_costs')->insert([
						'year' => 4,
						'value_bugeted' => 47830000,
						'value_comitted' => 47824139,
						'value_paid' => 47824139,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto4,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto40 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_costs')->insert([
						'year' => 4,
						'value_bugeted' => 48146000,
						'value_comitted' => 47429091,
						'value_paid' => 47429091,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto5,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto41 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_costs')->insert([
						'year' => 4,
						'value_bugeted' => 3274005970,
						'value_comitted' => 3274005970,
						'value_paid' => 3274005970,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => FALSE,
						'compensation' => TRUE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto6,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto42 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_costs')->insert([
						'year' => 4,
						'value_bugeted' => 517068478,
						'value_comitted' => 32038802,
						'value_paid' => 32038802,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto7,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto43 = DB::getPdo()->lastInsertId();

					DB::table('financial_costs')->insert([
						'year' => 4,
						'value_bugeted' => 10000000,
						'value_comitted' => 5135359,
						'value_paid' => 5135359,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto8,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto44 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_costs')->insert([
						'year' => 4,
						'value_bugeted' => 2150339000,
						'value_comitted' => 2150323549,
						'value_paid' => 2150323549,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto1,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto45 = DB::getPdo()->lastInsertId();
						

					DB::table('financial_costs')->insert([
						'year' => 4,
						'value_bugeted' => 22601000,
						'value_comitted' => 22601000,
						'value_paid' => 22601000,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto3,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto46 = DB::getPdo()->lastInsertId();
						
						
					DB::table('financial_costs')->insert([
						'year' => 4,
						'value_bugeted' => 1510000,
						'value_comitted' => 1510000,
						'value_paid' => 1510000,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto4,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto47 = DB::getPdo()->lastInsertId();

					DB::table('financial_costs')->insert([
						'year' => 4,
						'value_bugeted' => 10854000,
						'value_comitted' => 10854000,
						'value_paid' => 10854000,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto5,
						'p_a_i_id' => $idpai1,
						'group_id' => 2,
						]);
						$idGasto48 = DB::getPdo()->lastInsertId();

            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity2,
              'source_id' =>$idPlan1,
              'value' => 651901995,
              'goal' => 0,
              'evidence_balance' => 651901995,
              'age' => 1,
              ]);
              $idactivitySource1 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity4,
              'source_id' =>$idPlan1,
              'value' => 498289216,
              'goal' => 0,
              'evidence_balance' => 498289216,
              'age' => 1,
              ]);
              $idactivitySource2 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity6,
              'source_id' =>$idPlan1,
              'value' => 1660126213,
              'goal' => 0,
              'evidence_balance' => 1660126213,
              'age' => 1,
              ]);
              $idactivitySource3 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity8,
              'source_id' =>$idPlan1,
              'value' => 147411261,
              'goal' => 0,
              'evidence_balance' => 147411261,
              'age' => 1,
              ]);
              $idactivitySource4 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity9,
              'source_id' =>$idPlan1,
              'value' => 102678952,
              'goal' => 0,
              'evidence_balance' => 102678952,
              'age' => 1,
              ]);
              $idactivitySource5 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity10,
              'source_id' =>$idPlan1,
              'value' => 893357238,
              'goal' => 0,
              'evidence_balance' => 893357238,
              'age' => 1,
              ]);
              $idactivitySource6 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity11,
              'source_id' =>$idPlan1,
              'value' => 146899881,
              'goal' => 0,
              'evidence_balance' => 146899881,
              'age' => 1,
              ]);
              $idactivitySource7 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity12,
              'source_id' =>$idPlan1,
              'value' => 901268311,
              'goal' => 0,
              'evidence_balance' => 901268311,
              'age' => 1,
              ]);
              $idactivitySource8 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity14,
              'source_id' =>$idPlan1,
              'value' => 2716742169,
              'goal' => 0,
              'evidence_balance' => 2716742169,
              'age' => 1,
              ]);
              $idactivitySource10 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity16,
              'source_id' =>$idPlan1,
              'value' => 212364591,
              'goal' => 0,
              'evidence_balance' => 212364591,
              'age' => 1,
              ]);
              $idactivitySource12 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity17,
              'source_id' =>$idPlan1,
              'value' => 35519405,
              'goal' => 0,
              'evidence_balance' => 35519405,
              'age' => 1,
              ]);
              $idactivitySource13 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity18,
              'source_id' =>$idPlan3,
              'value' => 154147067,
              'goal' => 0,
              'evidence_balance' => 154147067,
              'age' => 1,
              ]);
              $idactivitySource14 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity19,
              'source_id' =>$idPlan3,
              'value' => 2886116492,
              'goal' => 0,
              'evidence_balance' => 2886116492,
              'age' => 1,
              ]);
              $idactivitySource15 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity20,
              'source_id' =>$idPlan3,
              'value' => 1106749713.8,
              'goal' => 0,
              'evidence_balance' => 1106749713.8,
              'age' => 1,
              ]);
              $idactivitySource16 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity21,
              'source_id' =>$idPlan4,
              'value' => 64256000,
              'goal' => 0,
              'evidence_balance' => 64256000,
              'age' => 1,
              ]);
              $idactivitySource17 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity23,
              'source_id' =>$idPlan4,
              'value' => 1569912321,
              'goal' => 0,
              'evidence_balance' => 1569912321,
              'age' => 1,
              ]);
              $idactivitySource19 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity24,
              'source_id' =>$idPlan4,
              'value' => 307321048,
              'goal' => 0,
              'evidence_balance' => 307321048,
              'age' => 1,
              ]);
              $idactivitySource20 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity26,
              'source_id' =>$idPlan4,
              'value' => 153110000,
              'goal' => 0,
              'evidence_balance' => 153110000,
              'age' => 1,
              ]);
              $idactivitySource22 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity28,
              'source_id' =>$idPlan4,
              'value' => 50638283,
              'goal' => 0,
              'evidence_balance' => 50638283,
              'age' => 1,
              ]);
              $idactivitySource24 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity29,
              'source_id' =>$idPlan4,
              'value' => 35140000,
              'goal' => 0,
              'evidence_balance' => 35140000,
              'age' => 1,
              ]);
              $idactivitySource25 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity30,
              'source_id' =>$idPlan4,
              'value' => 49196000,
              'goal' => 0,
              'evidence_balance' => 49196000,
              'age' => 1,
              ]);
              $idactivitySource26 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity35,
              'source_id' =>$idPlan4,
              'value' => 35810969,
              'goal' => 0,
              'evidence_balance' => 35810969,
              'age' => 1,
              ]);
              $idactivitySource31 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity37,
              'source_id' =>$idPlan4,
              'value' => 1418862043,
              'goal' => 0,
              'evidence_balance' => 1418862043,
              'age' => 1,
              ]);
              $idactivitySource33 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity40,
              'source_id' =>$idPlan4,
              'value' => 168042178,
              'goal' => 0,
              'evidence_balance' => 168042178,
              'age' => 1,
              ]);
              $idactivitySource36 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity42,
              'source_id' =>$idPlan4,
              'value' => 65978274,
              'goal' => 0,
              'evidence_balance' => 65978274,
              'age' => 1,
              ]);
              $idactivitySource38 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity43,
              'source_id' =>$idPlan4,
              'value' => 8901809,
              'goal' => 0,
              'evidence_balance' => 8901809,
              'age' => 1,
              ]);
              $idactivitySource39 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity44,
              'source_id' =>$idPlan4,
              'value' => 80922400,
              'goal' => 0,
              'evidence_balance' => 80922400,
              'age' => 1,
              ]);
              $idactivitySource40 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity46,
              'source_id' =>$idPlan4,
              'value' => 142274668.8,
              'goal' => 0,
              'evidence_balance' => 142274668.8,
              'age' => 1,
              ]);
              $idactivitySource42 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity47,
              'source_id' =>$idPlan11,
              'value' => 23493600,
              'goal' => 0,
              'evidence_balance' => 23493600,
              'age' => 1,
              ]);
              $idactivitySource43 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity49,
              'source_id' =>$idPlan11,
              'value' => 4676133681,
              'goal' => 0,
              'evidence_balance' => 4676133681,
              'age' => 1,
              ]);
              $idactivitySource45 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity50,
              'source_id' =>$idPlan11,
              'value' => 18517963,
              'goal' => 0,
              'evidence_balance' => 18517963,
              'age' => 1,
              ]);
              $idactivitySource46 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity53,
              'source_id' =>$idPlan11,
              'value' => 50200000,
              'goal' => 0,
              'evidence_balance' => 50200000,
              'age' => 1,
              ]);
              $idactivitySource49 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity54,
              'source_id' =>$idPlan11,
              'value' => 96594233,
              'goal' => 0,
              'evidence_balance' => 96594233,
              'age' => 1,
              ]);
              $idactivitySource50 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity56,
              'source_id' =>$idPlan11,
              'value' => 13432564,
              'goal' => 0,
              'evidence_balance' => 13432564,
              'age' => 1,
              ]);
              $idactivitySource52 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity58,
              'source_id' =>$idPlan11,
              'value' => 372108950,
              'goal' => 0,
              'evidence_balance' => 372108950,
              'age' => 1,
              ]);
              $idactivitySource54 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity61,
              'source_id' =>$idPlan11,
              'value' => 68322200,
              'goal' => 0,
              'evidence_balance' => 68322200,
              'age' => 1,
              ]);
              $idactivitySource57 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity62,
              'source_id' =>$idPlan11,
              'value' => 1012371660,
              'goal' => 0,
              'evidence_balance' => 1012371660,
              'age' => 1,
              ]);
              $idactivitySource58 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity63,
              'source_id' =>$idPlan11,
              'value' => 182828000,
              'goal' => 0,
              'evidence_balance' => 182828000,
              'age' => 1,
              ]);
              $idactivitySource59 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity64,
              'source_id' =>$idPlan11,
              'value' => 39256400,
              'goal' => 0,
              'evidence_balance' => 39256400,
              'age' => 1,
              ]);
              $idactivitySource60 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity65,
              'source_id' =>$idPlan11,
              'value' => 167667134,
              'goal' => 0,
              'evidence_balance' => 167667134,
              'age' => 1,
              ]);
              $idactivitySource61 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity68,
              'source_id' =>$idPlan11,
              'value' => 142467600,
              'goal' => 0,
              'evidence_balance' => 142467600,
              'age' => 1,
              ]);
              $idactivitySource64 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity70,
              'source_id' =>$idPlan11,
              'value' => 38268307,
              'goal' => 0,
              'evidence_balance' => 38268307,
              'age' => 1,
              ]);
              $idactivitySource66 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity72,
              'source_id' =>$idPlan11,
              'value' => 114548800,
              'goal' => 0,
              'evidence_balance' => 114548800,
              'age' => 1,
              ]);
              $idactivitySource68 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity73,
              'source_id' =>$idPlan11,
              'value' => 100000000,
              'goal' => 0,
              'evidence_balance' => 100000000,
              'age' => 1,
              ]);
              $idactivitySource69 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity74,
              'source_id' =>$idPlan11,
              'value' => 225358700,
              'goal' => 0,
              'evidence_balance' => 225358700,
              'age' => 1,
              ]);
              $idactivitySource70 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity76,
              'source_id' =>$idPlan11,
              'value' => 33128900,
              'goal' => 0,
              'evidence_balance' => 33128900,
              'age' => 1,
              ]);
              $idactivitySource72 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity77,
              'source_id' =>$idPlan11,
              'value' => 1213964137.4,
              'goal' => 0,
              'evidence_balance' => 1213964137.4,
              'age' => 1,
              ]);
              $idactivitySource73 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity79,
              'source_id' =>$idPlan14,
              'value' => 104000000,
              'goal' => 0,
              'evidence_balance' => 104000000,
              'age' => 1,
              ]);
              $idactivitySource75 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity80,
              'source_id' =>$idPlan14,
              'value' => 339355600,
              'goal' => 0,
              'evidence_balance' => 339355600,
              'age' => 1,
              ]);
              $idactivitySource76 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity81,
              'source_id' =>$idPlan14,
              'value' => 119232028,
              'goal' => 0,
              'evidence_balance' => 119232028,
              'age' => 1,
              ]);
              $idactivitySource77 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity82,
              'source_id' =>$idPlan14,
              'value' => 567360065,
              'goal' => 0,
              'evidence_balance' => 567360065,
              'age' => 1,
              ]);
              $idactivitySource78 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity85,
              'source_id' =>$idPlan14,
              'value' => 1357372044.4,
              'goal' => 0,
              'evidence_balance' => 1357372044.4,
              'age' => 1,
              ]);
              $idactivitySource81 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity87,
              'source_id' =>$idPlan5,
              'value' => 4584866,
              'goal' => 0,
              'evidence_balance' => 4584866,
              'age' => 1,
              ]);
              $idactivitySource83 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity88,
              'source_id' =>$idPlan5,
              'value' => 50200000,
              'goal' => 0,
              'evidence_balance' => 50200000,
              'age' => 1,
              ]);
              $idactivitySource84 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity89,
              'source_id' =>$idPlan5,
              'value' => 7462399,
              'goal' => 0,
              'evidence_balance' => 7462399,
              'age' => 1,
              ]);
              $idactivitySource85 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity91,
              'source_id' =>$idPlan5,
              'value' => 189408947.58952,
              'goal' => 0,
              'evidence_balance' => 189408947.58952,
              'age' => 1,
              ]);
              $idactivitySource87 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity92,
              'source_id' =>$idPlan6,
              'value' => 915269996.98952,
              'goal' => 0,
              'evidence_balance' => 915269996.98952,
              'age' => 1,
              ]);
              $idactivitySource88 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity94,
              'source_id' =>$idPlan10,
              'value' => 140000000,
              'goal' => 0,
              'evidence_balance' => 140000000,
              'age' => 1,
              ]);
              $idactivitySource90 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity95,
              'source_id' =>$idPlan10,
              'value' => 7087161.9895196,
              'goal' => 0,
              'evidence_balance' => 7087161.9895196,
              'age' => 1,
              ]);
              $idactivitySource91 = DB::getPdo()->lastInsertId();
              
              
              
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity17,
                'source_id' =>$idPlan3,
                'value' => 381894956,
                'goal' => 0,
                'evidence_balance' => 381894956,
                'age' => 1,
                ]);
                $idactivitySource92 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity20,
                'source_id' =>$idPlan4,
                'value' => 327300946.2,
                'goal' => 0,
                'evidence_balance' => 327300946.2,
                'age' => 1,
                ]);
                $idactivitySource93 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity46,
                'source_id' =>$idPlan11,
                'value' => 1513204906.2,
                'goal' => 0,
                'evidence_balance' => 1513204906.2,
                'age' => 1,
                ]);
                $idactivitySource94 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity77,
                'source_id' =>$idPlan14,
                'value' => 192680262.6,
                'goal' => 0,
                'evidence_balance' => 192680262.6,
                'age' => 1,
                ]);
                $idactivitySource95 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity85,
                'source_id' =>$idPlan5,
                'value' => 456351334.6,
                'goal' => 0,
                'evidence_balance' => 456351334.6,
                'age' => 1,
                ]);
                $idactivitySource96 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity91,
                'source_id' =>$idPlan6,
                'value' => 75211852.4104804,
                'goal' => 0,
                'evidence_balance' => 75211852.4104804,
                'age' => 1,
                ]);
                $idactivitySource97 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity92,
                'source_id' =>$idPlan10,
                'value' => 273109203.01048,
                'goal' => 0,
                'evidence_balance' => 273109203.01048,
                'age' => 1,
                ]);
                $idactivitySource98 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity95,
                'source_id' =>$idPlan7,
                'value' => 9912716.8,
                'goal' => 0,
                'evidence_balance' => 9912716.8,
                'age' => 1,
                ]);
                $idactivitySource99 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia2,
                  'activity_source_id' =>$idactivitySource1,
                  'value' => 585239009,
                  ]);
                  $idevidenceFinancial1 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia4,
                  'activity_source_id' =>$idactivitySource2,
                  'value' => 497990024,
                  ]);
                  $idevidenceFinancial2 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia6,
                  'activity_source_id' =>$idactivitySource3,
                  'value' => 1517228834,
                  ]);
                  $idevidenceFinancial3 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia8,
                  'activity_source_id' =>$idactivitySource4,
                  'value' => 147411261,
                  ]);
                  $idevidenceFinancial4 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia9,
                  'activity_source_id' =>$idactivitySource5,
                  'value' => 102678852,
                  ]);
                  $idevidenceFinancial5 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia10,
                  'activity_source_id' =>$idactivitySource6,
                  'value' => 871587445,
                  ]);
                  $idevidenceFinancial6 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia11,
                  'activity_source_id' =>$idactivitySource7,
                  'value' => 146899881,
                  ]);
                  $idevidenceFinancial7 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia12,
                  'activity_source_id' =>$idactivitySource8,
                  'value' => 901268310,
                  ]);
                  $idevidenceFinancial8 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia14,
                  'activity_source_id' =>$idactivitySource10,
                  'value' => 2714204176,
                  ]);
                  $idevidenceFinancial10 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia16,
                  'activity_source_id' =>$idactivitySource12,
                  'value' => 198668508,
                  ]);
                  $idevidenceFinancial12 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia17,
                  'activity_source_id' =>$idactivitySource13,
                  'value' => 35519405,
                  ]);
                  $idevidenceFinancial13 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia18,
                  'activity_source_id' =>$idactivitySource14,
                  'value' => 154146824,
                  ]);
                  $idevidenceFinancial14 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia19,
                  'activity_source_id' =>$idactivitySource15,
                  'value' => 2841461229,
                  ]);
                  $idevidenceFinancial15 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia20,
                  'activity_source_id' =>$idactivitySource16,
                  'value' => 1106749713.8,
                  ]);
                  $idevidenceFinancial16 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia21,
                  'activity_source_id' =>$idactivitySource17,
                  'value' => 64256000,
                  ]);
                  $idevidenceFinancial17 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia23,
                  'activity_source_id' =>$idactivitySource19,
                  'value' => 1569912321,
                  ]);
                  $idevidenceFinancial19 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia24,
                  'activity_source_id' =>$idactivitySource20,
                  'value' => 307320886,
                  ]);
                  $idevidenceFinancial20 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia26,
                  'activity_source_id' =>$idactivitySource22,
                  'value' => 134742824,
                  ]);
                  $idevidenceFinancial22 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia28,
                  'activity_source_id' =>$idactivitySource24,
                  'value' => 46680811,
                  ]);
                  $idevidenceFinancial24 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia29,
                  'activity_source_id' =>$idactivitySource25,
                  'value' => 35140000,
                  ]);
                  $idevidenceFinancial25 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia30,
                  'activity_source_id' =>$idactivitySource26,
                  'value' => 49194345,
                  ]);
                  $idevidenceFinancial26 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia35,
                  'activity_source_id' =>$idactivitySource31,
                  'value' => 35162410,
                  ]);
                  $idevidenceFinancial31 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia37,
                  'activity_source_id' =>$idactivitySource33,
                  'value' => 1413507357,
                  ]);
                  $idevidenceFinancial33 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia40,
                  'activity_source_id' =>$idactivitySource36,
                  'value' => 160448537,
                  ]);
                  $idevidenceFinancial36 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia42,
                  'activity_source_id' =>$idactivitySource38,
                  'value' => 64018744,
                  ]);
                  $idevidenceFinancial38 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia43,
                  'activity_source_id' =>$idactivitySource39,
                  'value' => 8531203,
                  ]);
                  $idevidenceFinancial39 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia44,
                  'activity_source_id' =>$idactivitySource40,
                  'value' => 80922400,
                  ]);
                  $idevidenceFinancial40 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia46,
                  'activity_source_id' =>$idactivitySource42,
                  'value' => 142274668.8,
                  ]);
                  $idevidenceFinancial42 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia47,
                  'activity_source_id' =>$idactivitySource43,
                  'value' => 23493600,
                  ]);
                  $idevidenceFinancial43 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia49,
                  'activity_source_id' =>$idactivitySource45,
                  'value' => 4668911244,
                  ]);
                  $idevidenceFinancial45 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia50,
                  'activity_source_id' =>$idactivitySource46,
                  'value' => 17487839,
                  ]);
                  $idevidenceFinancial46 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia53,
                  'activity_source_id' =>$idactivitySource49,
                  'value' => 50200000,
                  ]);
                  $idevidenceFinancial49 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia54,
                  'activity_source_id' =>$idactivitySource50,
                  'value' => 73406170,
                  ]);
                  $idevidenceFinancial50 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia56,
                  'activity_source_id' =>$idactivitySource52,
                  'value' => 13432564,
                  ]);
                  $idevidenceFinancial52 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia58,
                  'activity_source_id' =>$idactivitySource54,
                  'value' => 371160657,
                  ]);
                  $idevidenceFinancial54 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia61,
                  'activity_source_id' =>$idactivitySource57,
                  'value' => 68322200,
                  ]);
                  $idevidenceFinancial57 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia62,
                  'activity_source_id' =>$idactivitySource58,
                  'value' => 979258541,
                  ]);
                  $idevidenceFinancial58 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia63,
                  'activity_source_id' =>$idactivitySource59,
                  'value' => 182697542,
                  ]);
                  $idevidenceFinancial59 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia64,
                  'activity_source_id' =>$idactivitySource60,
                  'value' => 39256400,
                  ]);
                  $idevidenceFinancial60 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia65,
                  'activity_source_id' =>$idactivitySource61,
                  'value' => 165886540,
                  ]);
                  $idevidenceFinancial61 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia68,
                  'activity_source_id' =>$idactivitySource64,
                  'value' => 142467600,
                  ]);
                  $idevidenceFinancial64 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia70,
                  'activity_source_id' =>$idactivitySource66,
                  'value' => 38184219,
                  ]);
                  $idevidenceFinancial66 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia72,
                  'activity_source_id' =>$idactivitySource68,
                  'value' => 109118666,
                  ]);
                  $idevidenceFinancial68 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia73,
                  'activity_source_id' =>$idactivitySource69,
                  'value' => 70451225,
                  ]);
                  $idevidenceFinancial69 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia74,
                  'activity_source_id' =>$idactivitySource70,
                  'value' => 221356634,
                  ]);
                  $idevidenceFinancial70 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia76,
                  'activity_source_id' =>$idactivitySource72,
                  'value' => 25135732,
                  ]);
                  $idevidenceFinancial72 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia77,
                  'activity_source_id' =>$idactivitySource73,
                  'value' => 1213964137.4,
                  ]);
                  $idevidenceFinancial73 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia79,
                  'activity_source_id' =>$idactivitySource75,
                  'value' => 100400000,
                  ]);
                  $idevidenceFinancial75 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia80,
                  'activity_source_id' =>$idactivitySource76,
                  'value' => 335551973,
                  ]);
                  $idevidenceFinancial76 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia81,
                  'activity_source_id' =>$idactivitySource77,
                  'value' => 119232028,
                  ]);
                  $idevidenceFinancial77 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia82,
                  'activity_source_id' =>$idactivitySource78,
                  'value' => 567360065,
                  ]);
                  $idevidenceFinancial78 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia85,
                  'activity_source_id' =>$idactivitySource81,
                  'value' => 1357372044.4,
                  ]);
                  $idevidenceFinancial81 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia87,
                  'activity_source_id' =>$idactivitySource83,
                  'value' => 4584866,
                  ]);
                  $idevidenceFinancial83 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia88,
                  'activity_source_id' =>$idactivitySource84,
                  'value' => 50191686,
                  ]);
                  $idevidenceFinancial84 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia89,
                  'activity_source_id' =>$idactivitySource85,
                  'value' => 7462399,
                  ]);
                  $idevidenceFinancial85 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia91,
                  'activity_source_id' =>$idactivitySource87,
                  'value' => 189408947.58952,
                  ]);
                  $idevidenceFinancial87 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia92,
                  'activity_source_id' =>$idactivitySource88,
                  'value' => 915269996.98952,
                  ]);
                  $idevidenceFinancial88 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia94,
                  'activity_source_id' =>$idactivitySource90,
                  'value' => 132922987,
                  ]);
                  $idevidenceFinancial90 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia95,
                  'activity_source_id' =>$idactivitySource91,
                  'value' => 7087161.9895196,
                  ]);
                  $idevidenceFinancial91 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia17,
                    'activity_source_id' =>$idactivitySource92,
                    'value' => 366541719,
                    ]);
                    $idevidenceFinancial92 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia20,
                    'activity_source_id' =>$idactivitySource93,
                    'value' => 311245411.2,
                    ]);
                    $idevidenceFinancial93 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia46,
                    'activity_source_id' =>$idactivitySource94,
                    'value' => 1254779815.2,
                    ]);
                    $idevidenceFinancial94 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia77,
                    'activity_source_id' =>$idactivitySource95,
                    'value' => 191318146.6,
                    ]);
                    $idevidenceFinancial95 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia85,
                    'activity_source_id' =>$idactivitySource96,
                    'value' => 386938411.6,
                    ]);
                    $idevidenceFinancial96 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia91,
                    'activity_source_id' =>$idactivitySource97,
                    'value' => 70258422.4104804,
                    ]);
                    $idevidenceFinancial97 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia92,
                    'activity_source_id' =>$idactivitySource98,
                    'value' => 241375719.01048,
                    ]);
                    $idevidenceFinancial98 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia95,
                    'activity_source_id' =>$idactivitySource99,
                    'value' => 6473934.0104804,
                    ]);
                    $idevidenceFinancial99 = DB::getPdo()->lastInsertId();
                    
                    
                    
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity2,
                      'source_id' =>$idPlan15,
                      'value' => 100000000,
                      'goal' => 0,
                      'evidence_balance' => 100000000,
                      'age' => 2,
                      ]);
                      $idactivitySource100 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity4,
                      'source_id' =>$idPlan15,
                      'value' => 650000000,
                      'goal' => 0,
                      'evidence_balance' => 650000000,
                      'age' => 2,
                      ]);
                      $idactivitySource101 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity6,
                      'source_id' =>$idPlan15,
                      'value' => 661941284,
                      'goal' => 0,
                      'evidence_balance' => 661941284,
                      'age' => 2,
                      ]);
                      $idactivitySource102 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity8,
                      'source_id' =>$idPlan15,
                      'value' => 19993750,
                      'goal' => 0,
                      'evidence_balance' => 19993750,
                      'age' => 2,
                      ]);
                      $idactivitySource103 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity9,
                      'source_id' =>$idPlan15,
                      'value' => 260000000,
                      'goal' => 0,
                      'evidence_balance' => 260000000,
                      'age' => 2,
                      ]);
                      $idactivitySource104 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity10,
                      'source_id' =>$idPlan15,
                      'value' => 862756720,
                      'goal' => 0,
                      'evidence_balance' => 862756720,
                      'age' => 2,
                      ]);
                      $idactivitySource105 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity14,
                      'source_id' =>$idPlan15,
                      'value' => 3986763644,
                      'goal' => 0,
                      'evidence_balance' => 3986763644,
                      'age' => 2,
                      ]);
                      $idactivitySource106 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity16,
                      'source_id' =>$idPlan15,
                      'value' => 227193657,
                      'goal' => 0,
                      'evidence_balance' => 227193657,
                      'age' => 2,
                      ]);
                      $idactivitySource107 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity17,
                      'source_id' =>$idPlan15,
                      'value' => 223072583,
                      'goal' => 0,
                      'evidence_balance' => 223072583,
                      'age' => 2,
                      ]);
                      $idactivitySource108 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity18,
                      'source_id' =>$idPlan15,
                      'value' => 98088332,
                      'goal' => 0,
                      'evidence_balance' => 98088332,
                      'age' => 2,
                      ]);
                      $idactivitySource109 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity19,
                      'source_id' =>$idPlan15,
                      'value' => 1467802224,
                      'goal' => 0,
                      'evidence_balance' => 1467802224,
                      'age' => 2,
                      ]);
                      $idactivitySource110 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity20,
                      'source_id' =>$idPlan17,
                      'value' => 1504390865,
                      'goal' => 0,
                      'evidence_balance' => 1504390865,
                      'age' => 2,
                      ]);
                      $idactivitySource111 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity21,
                      'source_id' =>$idPlan17,
                      'value' => 339760000,
                      'goal' => 0,
                      'evidence_balance' => 339760000,
                      'age' => 2,
                      ]);
                      $idactivitySource112 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity23,
                      'source_id' =>$idPlan17,
                      'value' => 1646671503.2,
                      'goal' => 0,
                      'evidence_balance' => 1646671503.2,
                      'age' => 2,
                      ]);
                      $idactivitySource113 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity24,
                      'source_id' =>$idPlan27,
                      'value' => 130173883,
                      'goal' => 0,
                      'evidence_balance' => 130173883,
                      'age' => 2,
                      ]);
                      $idactivitySource114 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity26,
                      'source_id' =>$idPlan27,
                      'value' => 518460040,
                      'goal' => 0,
                      'evidence_balance' => 518460040,
                      'age' => 2,
                      ]);
                      $idactivitySource115 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity28,
                      'source_id' =>$idPlan27,
                      'value' => 47188000,
                      'goal' => 0,
                      'evidence_balance' => 47188000,
                      'age' => 2,
                      ]);
                      $idactivitySource116 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity29,
                      'source_id' =>$idPlan27,
                      'value' => 15060000,
                      'goal' => 0,
                      'evidence_balance' => 15060000,
                      'age' => 2,
                      ]);
                      $idactivitySource117 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity30,
                      'source_id' =>$idPlan27,
                      'value' => 139907860,
                      'goal' => 0,
                      'evidence_balance' => 139907860,
                      'age' => 2,
                      ]);
                      $idactivitySource118 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity32,
                      'source_id' =>$idPlan27,
                      'value' => 36144000,
                      'goal' => 0,
                      'evidence_balance' => 36144000,
                      'age' => 2,
                      ]);
                      $idactivitySource119 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity34,
                      'source_id' =>$idPlan27,
                      'value' => 4779040,
                      'goal' => 0,
                      'evidence_balance' => 4779040,
                      'age' => 2,
                      ]);
                      $idactivitySource120 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity35,
                      'source_id' =>$idPlan27,
                      'value' => 19461060,
                      'goal' => 0,
                      'evidence_balance' => 19461060,
                      'age' => 2,
                      ]);
                      $idactivitySource121 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity37,
                      'source_id' =>$idPlan27,
                      'value' => 115460000,
                      'goal' => 0,
                      'evidence_balance' => 115460000,
                      'age' => 2,
                      ]);
                      $idactivitySource122 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity38,
                      'source_id' =>$idPlan27,
                      'value' => 978406730,
                      'goal' => 0,
                      'evidence_balance' => 978406730,
                      'age' => 2,
                      ]);
                      $idactivitySource123 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity40,
                      'source_id' =>$idPlan27,
                      'value' => 232236751,
                      'goal' => 0,
                      'evidence_balance' => 232236751,
                      'age' => 2,
                      ]);
                      $idactivitySource124 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity42,
                      'source_id' =>$idPlan27,
                      'value' => 103719547,
                      'goal' => 0,
                      'evidence_balance' => 103719547,
                      'age' => 2,
                      ]);
                      $idactivitySource125 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity43,
                      'source_id' =>$idPlan27,
                      'value' => 28614000,
                      'goal' => 0,
                      'evidence_balance' => 28614000,
                      'age' => 2,
                      ]);
                      $idactivitySource126 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity44,
                      'source_id' =>$idPlan27,
                      'value' => 229560741,
                      'goal' => 0,
                      'evidence_balance' => 229560741,
                      'age' => 2,
                      ]);
                      $idactivitySource127 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity46,
                      'source_id' =>$idPlan27,
                      'value' => 375321954.2,
                      'goal' => 0,
                      'evidence_balance' => 375321954.2,
                      'age' => 2,
                      ]);
                      $idactivitySource128 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity47,
                      'source_id' =>$idPlan24,
                      'value' => 49818800,
                      'goal' => 0,
                      'evidence_balance' => 49818800,
                      'age' => 2,
                      ]);
                      $idactivitySource129 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity49,
                      'source_id' =>$idPlan24,
                      'value' => 1153441758,
                      'goal' => 0,
                      'evidence_balance' => 1153441758,
                      'age' => 2,
                      ]);
                      $idactivitySource131 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity50,
                      'source_id' =>$idPlan24,
                      'value' => 15920459,
                      'goal' => 0,
                      'evidence_balance' => 15920459,
                      'age' => 2,
                      ]);
                      $idactivitySource132 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity52,
                      'source_id' =>$idPlan24,
                      'value' => 150000000,
                      'goal' => 0,
                      'evidence_balance' => 150000000,
                      'age' => 2,
                      ]);
                      $idactivitySource133 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity53,
                      'source_id' =>$idPlan24,
                      'value' => 80000000,
                      'goal' => 0,
                      'evidence_balance' => 80000000,
                      'age' => 2,
                      ]);
                      $idactivitySource134 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity54,
                      'source_id' =>$idPlan24,
                      'value' => 614183700,
                      'goal' => 0,
                      'evidence_balance' => 614183700,
                      'age' => 2,
                      ]);
                      $idactivitySource135 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity58,
                      'source_id' =>$idPlan24,
                      'value' => 667926550,
                      'goal' => 0,
                      'evidence_balance' => 667926550,
                      'age' => 2,
                      ]);
                      $idactivitySource136 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity61,
                      'source_id' =>$idPlan24,
                      'value' => 75011225,
                      'goal' => 0,
                      'evidence_balance' => 75011225,
                      'age' => 2,
                      ]);
                      $idactivitySource137 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity62,
                      'source_id' =>$idPlan24,
                      'value' => 1236053295,
                      'goal' => 0,
                      'evidence_balance' => 1236053295,
                      'age' => 2,
                      ]);
                      $idactivitySource138 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity63,
                      'source_id' =>$idPlan24,
                      'value' => 11707025,
                      'goal' => 0,
                      'evidence_balance' => 11707025,
                      'age' => 2,
                      ]);
                      $idactivitySource139 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity64,
                      'source_id' =>$idPlan24,
                      'value' => 11707025,
                      'goal' => 0,
                      'evidence_balance' => 11707025,
                      'age' => 2,
                      ]);
                      $idactivitySource140 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity65,
                      'source_id' =>$idPlan24,
                      'value' => 250721334,
                      'goal' => 0,
                      'evidence_balance' => 250721334,
                      'age' => 2,
                      ]);
                      $idactivitySource141 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity66,
                      'source_id' =>$idPlan24,
                      'value' => 20481600,
                      'goal' => 0,
                      'evidence_balance' => 20481600,
                      'age' => 2,
                      ]);
                      $idactivitySource142 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity67,
                      'source_id' =>$idPlan24,
                      'value' => 20481600,
                      'goal' => 0,
                      'evidence_balance' => 20481600,
                      'age' => 2,
                      ]);
                      $idactivitySource143 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity68,
                      'source_id' =>$idPlan24,
                      'value' => 160209284,
                      'goal' => 0,
                      'evidence_balance' => 160209284,
                      'age' => 2,
                      ]);
                      $idactivitySource144 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity69,
                      'source_id' =>$idPlan24,
                      'value' => 33332800,
                      'goal' => 0,
                      'evidence_balance' => 33332800,
                      'age' => 2,
                      ]);
                      $idactivitySource145 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity71,
                      'source_id' =>$idPlan24,
                      'value' => 109100000,
                      'goal' => 0,
                      'evidence_balance' => 109100000,
                      'age' => 2,
                      ]);
                      $idactivitySource146 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity72,
                      'source_id' =>$idPlan24,
                      'value' => 43674000,
                      'goal' => 0,
                      'evidence_balance' => 43674000,
                      'age' => 2,
                      ]);
                      $idactivitySource147 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity73,
                      'source_id' =>$idPlan24,
                      'value' => 142504400,
                      'goal' => 0,
                      'evidence_balance' => 142504400,
                      'age' => 2,
                      ]);
                      $idactivitySource148 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity74,
                      'source_id' =>$idPlan24,
                      'value' => 331321600,
                      'goal' => 0,
                      'evidence_balance' => 331321600,
                      'age' => 2,
                      ]);
                      $idactivitySource149 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity75,
                      'source_id' =>$idPlan24,
                      'value' => 50000000,
                      'goal' => 0,
                      'evidence_balance' => 50000000,
                      'age' => 2,
                      ]);
                      $idactivitySource150 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity76,
                      'source_id' =>$idPlan24,
                      'value' => 43400000,
                      'goal' => 0,
                      'evidence_balance' => 43400000,
                      'age' => 2,
                      ]);
                      $idactivitySource151 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity77,
                      'source_id' =>$idPlan24,
                      'value' => 586031025,
                      'goal' => 0,
                      'evidence_balance' => 586031025,
                      'age' => 2,
                      ]);
                      $idactivitySource152 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity79,
                      'source_id' =>$idPlan24,
                      'value' => 903422338.7,
                      'goal' => 0,
                      'evidence_balance' => 903422338.7,
                      'age' => 2,
                      ]);
                      $idactivitySource153 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity80,
                      'source_id' =>$idPlan25,
                      'value' => 329638197,
                      'goal' => 0,
                      'evidence_balance' => 329638197,
                      'age' => 2,
                      ]);
                      $idactivitySource154 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity81,
                      'source_id' =>$idPlan25,
                      'value' => 106328258.56,
                      'goal' => 0,
                      'evidence_balance' => 106328258.56,
                      'age' => 2,
                      ]);
                      $idactivitySource155 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity82,
                      'source_id' =>$idPlan25,
                      'value' => 558123413,
                      'goal' => 0,
                      'evidence_balance' => 558123413,
                      'age' => 2,
                      ]);
                      $idactivitySource156 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity83,
                      'source_id' =>$idPlan25,
                      'value' => 48486083.04,
                      'goal' => 0,
                      'evidence_balance' => 48486083.04,
                      'age' => 2,
                      ]);
                      $idactivitySource157 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity85,
                      'source_id' =>$idPlan18,
                      'value' => 880651191.69,
                      'goal' => 0,
                      'evidence_balance' => 880651191.69,
                      'age' => 2,
                      ]);
                      $idactivitySource158 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity86,
                      'source_id' =>$idPlan19,
                      'value' => 64617211,
                      'goal' => 0,
                      'evidence_balance' => 64617211,
                      'age' => 2,
                      ]);
                      $idactivitySource159 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity87,
                      'source_id' =>$idPlan19,
                      'value' => 9590256.192,
                      'goal' => 0,
                      'evidence_balance' => 9590256.192,
                      'age' => 2,
                      ]);
                      $idactivitySource160 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity89,
                      'source_id' =>$idPlan19,
                      'value' => 8308186,
                      'goal' => 0,
                      'evidence_balance' => 8308186,
                      'age' => 2,
                      ]);
                      $idactivitySource161 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity91,
                      'source_id' =>$idPlan19,
                      'value' => 302686299,
                      'goal' => 0,
                      'evidence_balance' => 302686299,
                      'age' => 2,
                      ]);
                      $idactivitySource162 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity92,
                      'source_id' =>$idPlan19,
                      'value' => 43831860.68488,
                      'goal' => 0,
                      'evidence_balance' => 43831860.68488,
                      'age' => 2,
                      ]);
                      $idactivitySource163 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity93,
                      'source_id' =>$idPlan20,
                      'value' => 89828243.08488,
                      'goal' => 0,
                      'evidence_balance' => 89828243.08488,
                      'age' => 2,
                      ]);
                      $idactivitySource164 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity94,
                      'source_id' =>$idPlan23,
                      'value' => 337153014.08488,
                      'goal' => 0,
                      'evidence_balance' => 337153014.08488,
                      'age' => 2,
                      ]);
                      $idactivitySource165 = DB::getPdo()->lastInsertId();
                      
                      
                      
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity19,
                        'source_id' =>$idPlan17,
                        'value' => 1684093059,
                        'goal' => 0,
                        'evidence_balance' => 1684093059,
                        'age' => 2,
                        ]);
                        $idactivitySource166 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity23,
                        'source_id' =>$idPlan27,
                        'value' => 77306393.8000002,
                        'goal' => 0,
                        'evidence_balance' => 77306393.8000002,
                        'age' => 2,
                        ]);
                        $idactivitySource167 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity46,
                        'source_id' =>$idPlan24,
                        'value' => 234678045.8,
                        'goal' => 0,
                        'evidence_balance' => 234678045.8,
                        'age' => 2,
                        ]);
                        $idactivitySource168 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity79,
                        'source_id' =>$idPlan25,
                        'value' => 145272996.3,
                        'goal' => 0,
                        'evidence_balance' => 145272996.3,
                        'age' => 2,
                        ]);
                        $idactivitySource169 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity83,
                        'source_id' =>$idPlan22,
                        'value' => 72465796.96,
                        'goal' => 0,
                        'evidence_balance' => 72465796.96,
                        'age' => 2,
                        ]);
                        $idactivitySource170 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity85,
                        'source_id' =>$idPlan19,
                        'value' => 453830497.02312,
                        'goal' => 0,
                        'evidence_balance' => 453830497.02312,
                        'age' => 2,
                        ]);
                        $idactivitySource171 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity92,
                        'source_id' =>$idPlan20,
                        'value' => 316168139.31512,
                        'goal' => 0,
                        'evidence_balance' => 316168139.31512,
                        'age' => 2,
                        ]);
                        $idactivitySource172 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity93,
                        'source_id' =>$idPlan23,
                        'value' => 229201356.91512,
                        'goal' => 0,
                        'evidence_balance' => 229201356.91512,
                        'age' => 2,
                        ]);
                        $idactivitySource173 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity94,
                        'source_id' =>$idPlan21,
                        'value' => 13542352.12,
                        'goal' => 0,
                        'evidence_balance' => 13542352.12,
                        'age' => 2,
                        ]);
                        $idactivitySource174 = DB::getPdo()->lastInsertId();
                        
                        
                        
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity94,
                          'source_id' =>$idPlan22,
                          'value' => 49027919.03,
                          'goal' => 0,
                          'evidence_balance' => 49027919.03,
                          'age' => 2,
                          ]);
                          $idactivitySource175 = DB::getPdo()->lastInsertId();
                          
                          
                          
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia97,
                            'activity_source_id' =>$idactivitySource100,
                            'value' => 99993280,
                            ]);
                            $idevidenceFinancial100 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia99,
                            'activity_source_id' =>$idactivitySource101,
                            'value' => 649793920,
                            ]);
                            $idevidenceFinancial101 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia101,
                            'activity_source_id' =>$idactivitySource102,
                            'value' => 354924827,
                            ]);
                            $idevidenceFinancial102 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia103,
                            'activity_source_id' =>$idactivitySource103,
                            'value' => 19579456,
                            ]);
                            $idevidenceFinancial103 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia104,
                            'activity_source_id' =>$idactivitySource104,
                            'value' => 259998852,
                            ]);
                            $idevidenceFinancial104 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia105,
                            'activity_source_id' =>$idactivitySource105,
                            'value' => 802409238,
                            ]);
                            $idevidenceFinancial105 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia109,
                            'activity_source_id' =>$idactivitySource106,
                            'value' => 3941311330,
                            ]);
                            $idevidenceFinancial106 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia111,
                            'activity_source_id' =>$idactivitySource107,
                            'value' => 202879535,
                            ]);
                            $idevidenceFinancial107 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia112,
                            'activity_source_id' =>$idactivitySource108,
                            'value' => 191952110,
                            ]);
                            $idevidenceFinancial108 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia113,
                            'activity_source_id' =>$idactivitySource109,
                            'value' => 97955990,
                            ]);
                            $idevidenceFinancial109 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia114,
                            'activity_source_id' =>$idactivitySource110,
                            'value' => 1467802224,
                            ]);
                            $idevidenceFinancial110 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia115,
                            'activity_source_id' =>$idactivitySource111,
                            'value' => 1504381552,
                            ]);
                            $idevidenceFinancial111 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia116,
                            'activity_source_id' =>$idactivitySource112,
                            'value' => 339392160,
                            ]);
                            $idevidenceFinancial112 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia118,
                            'activity_source_id' =>$idactivitySource113,
                            'value' => 1646671503.2,
                            ]);
                            $idevidenceFinancial113 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia119,
                            'activity_source_id' =>$idactivitySource114,
                            'value' => 130154212,
                            ]);
                            $idevidenceFinancial114 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia121,
                            'activity_source_id' =>$idactivitySource115,
                            'value' => 512169451,
                            ]);
                            $idevidenceFinancial115 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia123,
                            'activity_source_id' =>$idactivitySource116,
                            'value' => 47188000,
                            ]);
                            $idevidenceFinancial116 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia124,
                            'activity_source_id' =>$idactivitySource117,
                            'value' => 15060000,
                            ]);
                            $idevidenceFinancial117 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia125,
                            'activity_source_id' =>$idactivitySource118,
                            'value' => 139893616,
                            ]);
                            $idevidenceFinancial118 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia127,
                            'activity_source_id' =>$idactivitySource119,
                            'value' => 36144000,
                            ]);
                            $idevidenceFinancial119 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia129,
                            'activity_source_id' =>$idactivitySource120,
                            'value' => 4779040,
                            ]);
                            $idevidenceFinancial120 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia130,
                            'activity_source_id' =>$idactivitySource121,
                            'value' => 19461060,
                            ]);
                            $idevidenceFinancial121 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia132,
                            'activity_source_id' =>$idactivitySource122,
                            'value' => 72466080,
                            ]);
                            $idevidenceFinancial122 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia133,
                            'activity_source_id' =>$idactivitySource123,
                            'value' => 915531581.32,
                            ]);
                            $idevidenceFinancial123 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia135,
                            'activity_source_id' =>$idactivitySource124,
                            'value' => 131044683,
                            ]);
                            $idevidenceFinancial124 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia137,
                            'activity_source_id' =>$idactivitySource125,
                            'value' => 80107349,
                            ]);
                            $idevidenceFinancial125 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia138,
                            'activity_source_id' =>$idactivitySource126,
                            'value' => 26804884,
                            ]);
                            $idevidenceFinancial126 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia139,
                            'activity_source_id' =>$idactivitySource127,
                            'value' => 227840867,
                            ]);
                            $idevidenceFinancial127 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia141,
                            'activity_source_id' =>$idactivitySource128,
                            'value' => 375321954.2,
                            ]);
                            $idevidenceFinancial128 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia142,
                            'activity_source_id' =>$idactivitySource129,
                            'value' => 47733310,
                            ]);
                            $idevidenceFinancial129 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia144,
                            'activity_source_id' =>$idactivitySource131,
                            'value' => 1148462321,
                            ]);
                            $idevidenceFinancial131 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia145,
                            'activity_source_id' =>$idactivitySource132,
                            'value' => 15919489,
                            ]);
                            $idevidenceFinancial132 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia147,
                            'activity_source_id' =>$idactivitySource133,
                            'value' => 122638600,
                            ]);
                            $idevidenceFinancial133 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia148,
                            'activity_source_id' =>$idactivitySource134,
                            'value' => 79696750,
                            ]);
                            $idevidenceFinancial134 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia149,
                            'activity_source_id' =>$idactivitySource135,
                            'value' => 611656187,
                            ]);
                            $idevidenceFinancial135 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia153,
                            'activity_source_id' =>$idactivitySource136,
                            'value' => 666987069,
                            ]);
                            $idevidenceFinancial136 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia156,
                            'activity_source_id' =>$idactivitySource137,
                            'value' => 75011224.5,
                            ]);
                            $idevidenceFinancial137 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia157,
                            'activity_source_id' =>$idactivitySource138,
                            'value' => 1229244033.152,
                            ]);
                            $idevidenceFinancial138 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia158,
                            'activity_source_id' =>$idactivitySource139,
                            'value' => 11707025,
                            ]);
                            $idevidenceFinancial139 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia159,
                            'activity_source_id' =>$idactivitySource140,
                            'value' => 11707025,
                            ]);
                            $idevidenceFinancial140 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia160,
                            'activity_source_id' =>$idactivitySource141,
                            'value' => 246627833.5,
                            ]);
                            $idevidenceFinancial141 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia161,
                            'activity_source_id' =>$idactivitySource142,
                            'value' => 20481600,
                            ]);
                            $idevidenceFinancial142 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia162,
                            'activity_source_id' =>$idactivitySource143,
                            'value' => 20481600,
                            ]);
                            $idevidenceFinancial143 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia163,
                            'activity_source_id' =>$idactivitySource144,
                            'value' => 147358285,
                            ]);
                            $idevidenceFinancial144 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia164,
                            'activity_source_id' =>$idactivitySource145,
                            'value' => 33332800,
                            ]);
                            $idevidenceFinancial145 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia166,
                            'activity_source_id' =>$idactivitySource146,
                            'value' => 109092381,
                            ]);
                            $idevidenceFinancial146 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia167,
                            'activity_source_id' =>$idactivitySource147,
                            'value' => 43674000,
                            ]);
                            $idevidenceFinancial147 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia168,
                            'activity_source_id' =>$idactivitySource148,
                            'value' => 141126114,
                            ]);
                            $idevidenceFinancial148 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia169,
                            'activity_source_id' =>$idactivitySource149,
                            'value' => 331320000,
                            ]);
                            $idevidenceFinancial149 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia170,
                            'activity_source_id' =>$idactivitySource150,
                            'value' => 50000000,
                            ]);
                            $idevidenceFinancial150 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia171,
                            'activity_source_id' =>$idactivitySource151,
                            'value' => 41897631,
                            ]);
                            $idevidenceFinancial151 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia172,
                            'activity_source_id' =>$idactivitySource152,
                            'value' => 586031024,
                            ]);
                            $idevidenceFinancial152 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia174,
                            'activity_source_id' =>$idactivitySource153,
                            'value' => 903422338.7,
                            ]);
                            $idevidenceFinancial153 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia175,
                            'activity_source_id' =>$idactivitySource154,
                            'value' => 328100781,
                            ]);
                            $idevidenceFinancial154 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia176,
                            'activity_source_id' =>$idactivitySource155,
                            'value' => 106328259,
                            ]);
                            $idevidenceFinancial155 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia177,
                            'activity_source_id' =>$idactivitySource156,
                            'value' => 528738428,
                            ]);
                            $idevidenceFinancial156 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia178,
                            'activity_source_id' =>$idactivitySource157,
                            'value' => 48486083.04,
                            ]);
                            $idevidenceFinancial157 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia180,
                            'activity_source_id' =>$idactivitySource158,
                            'value' => 880651191.69,
                            ]);
                            $idevidenceFinancial158 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia181,
                            'activity_source_id' =>$idactivitySource159,
                            'value' => 64617211,
                            ]);
                            $idevidenceFinancial159 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia182,
                            'activity_source_id' =>$idactivitySource160,
                            'value' => 9590256,
                            ]);
                            $idevidenceFinancial160 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia184,
                            'activity_source_id' =>$idactivitySource161,
                            'value' => 8303840,
                            ]);
                            $idevidenceFinancial161 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia186,
                            'activity_source_id' =>$idactivitySource162,
                            'value' => 300653194.76,
                            ]);
                            $idevidenceFinancial162 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia187,
                            'activity_source_id' =>$idactivitySource163,
                            'value' => 43831860.68488,
                            ]);
                            $idevidenceFinancial163 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia188,
                            'activity_source_id' =>$idactivitySource164,
                            'value' => 89828243.08488,
                            ]);
                            $idevidenceFinancial164 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia189,
                            'activity_source_id' =>$idactivitySource165,
                            'value' => 337153014.08488,
                            ]);
                            $idevidenceFinancial165 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia114,
                              'activity_source_id' =>$idactivitySource166,
                              'value' => 1102370357,
                              ]);
                              $idevidenceFinancial166 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia118,
                              'activity_source_id' =>$idactivitySource167,
                              'value' => 77306393.8000002,
                              ]);
                              $idevidenceFinancial167 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia141,
                              'activity_source_id' =>$idactivitySource168,
                              'value' => 194684101.8,
                              ]);
                              $idevidenceFinancial168 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia174,
                              'activity_source_id' =>$idactivitySource169,
                              'value' => 140489270.3,
                              ]);
                              $idevidenceFinancial169 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia178,
                              'activity_source_id' =>$idactivitySource170,
                              'value' => 71421632.96,
                              ]);
                              $idevidenceFinancial170 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia180,
                              'activity_source_id' =>$idactivitySource171,
                              'value' => 451729114.31,
                              ]);
                              $idevidenceFinancial171 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia187,
                              'activity_source_id' =>$idactivitySource172,
                              'value' => 260617924.31512,
                              ]);
                              $idevidenceFinancial172 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia188,
                              'activity_source_id' =>$idactivitySource173,
                              'value' => 217450750.27512,
                              ]);
                              $idevidenceFinancial173 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia189,
                              'activity_source_id' =>$idactivitySource174,
                              'value' => 13542352.12,
                              ]);
                              $idevidenceFinancial174 = DB::getPdo()->lastInsertId();
                              
                              
                              
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia189,
                                'activity_source_id' =>$idactivitySource175,
                                'value' => 38743709.79512,
                                ]);
                                $idevidenceFinancial175 = DB::getPdo()->lastInsertId();
                                
                                
                                
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity2,
                                  'source_id' =>$idPlan28,
                                  'value' => 150000000,
                                  'goal' => 0,
                                  'evidence_balance' => 150000000,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource176 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity4,
                                  'source_id' =>$idPlan28,
                                  'value' => 400000000,
                                  'goal' => 0,
                                  'evidence_balance' => 400000000,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource177 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity6,
                                  'source_id' =>$idPlan28,
                                  'value' => 2141282839.264,
                                  'goal' => 0,
                                  'evidence_balance' => 2141282839.264,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource178 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity9,
                                  'source_id' =>$idPlan28,
                                  'value' => 170000000,
                                  'goal' => 0,
                                  'evidence_balance' => 170000000,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource179 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity10,
                                  'source_id' =>$idPlan28,
                                  'value' => 783192000,
                                  'goal' => 0,
                                  'evidence_balance' => 783192000,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource180 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity11,
                                  'source_id' =>$idPlan28,
                                  'value' => 208000000,
                                  'goal' => 0,
                                  'evidence_balance' => 208000000,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource181 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity12,
                                  'source_id' =>$idPlan28,
                                  'value' => 42168000,
                                  'goal' => 0,
                                  'evidence_balance' => 42168000,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource182 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity14,
                                  'source_id' =>$idPlan28,
                                  'value' => 3793155426,
                                  'goal' => 0,
                                  'evidence_balance' => 3793155426,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource183 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity16,
                                  'source_id' =>$idPlan28,
                                  'value' => 140981019,
                                  'goal' => 0,
                                  'evidence_balance' => 140981019,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource184 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity17,
                                  'source_id' =>$idPlan28,
                                  'value' => 462255152,
                                  'goal' => 0,
                                  'evidence_balance' => 462255152,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource185 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity18,
                                  'source_id' =>$idPlan28,
                                  'value' => 94531981,
                                  'goal' => 0,
                                  'evidence_balance' => 94531981,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource186 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity19,
                                  'source_id' =>$idPlan28,
                                  'value' => 394785872,
                                  'goal' => 0,
                                  'evidence_balance' => 394785872,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource187 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity20,
                                  'source_id' =>$idPlan28,
                                  'value' => 352664206.736,
                                  'goal' => 0,
                                  'evidence_balance' => 352664206.736,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource188 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity21,
                                  'source_id' =>$idPlan28,
                                  'value' => 500910000,
                                  'goal' => 0,
                                  'evidence_balance' => 500910000,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource189 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity23,
                                  'source_id' =>$idPlan30,
                                  'value' => 1252898122.9878,
                                  'goal' => 0,
                                  'evidence_balance' => 1252898122.9878,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource190 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity24,
                                  'source_id' =>$idPlan30,
                                  'value' => 139113767.49878,
                                  'goal' => 0,
                                  'evidence_balance' => 139113767.49878,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource191 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity26,
                                  'source_id' =>$idPlan30,
                                  'value' => 719279932.1,
                                  'goal' => 0,
                                  'evidence_balance' => 719279932.1,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource192 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity27,
                                  'source_id' =>$idPlan30,
                                  'value' => 49279933,
                                  'goal' => 0,
                                  'evidence_balance' => 49279933,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource193 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity28,
                                  'source_id' =>$idPlan30,
                                  'value' => 90660378,
                                  'goal' => 0,
                                  'evidence_balance' => 90660378,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource194 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity29,
                                  'source_id' =>$idPlan30,
                                  'value' => 43881259,
                                  'goal' => 0,
                                  'evidence_balance' => 43881259,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource195 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity30,
                                  'source_id' =>$idPlan30,
                                  'value' => 605401985,
                                  'goal' => 0,
                                  'evidence_balance' => 605401985,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource196 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity34,
                                  'source_id' =>$idPlan30,
                                  'value' => 32635625,
                                  'goal' => 0,
                                  'evidence_balance' => 32635625,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource197 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity37,
                                  'source_id' =>$idPlan30,
                                  'value' => 165850760,
                                  'goal' => 0,
                                  'evidence_balance' => 165850760,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource198 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity38,
                                  'source_id' =>$idPlan30,
                                  'value' => 919158485,
                                  'goal' => 0,
                                  'evidence_balance' => 919158485,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource199 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity40,
                                  'source_id' =>$idPlan30,
                                  'value' => 39095216.3494196,
                                  'goal' => 0,
                                  'evidence_balance' => 39095216.3494196,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource200 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity42,
                                  'source_id' =>$idPlan41,
                                  'value' => 114735679,
                                  'goal' => 0,
                                  'evidence_balance' => 114735679,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource201 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity43,
                                  'source_id' =>$idPlan41,
                                  'value' => 79359088,
                                  'goal' => 0,
                                  'evidence_balance' => 79359088,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource202 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity44,
                                  'source_id' =>$idPlan41,
                                  'value' => 230538722,
                                  'goal' => 0,
                                  'evidence_balance' => 230538722,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource203 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity46,
                                  'source_id' =>$idPlan41,
                                  'value' => 207914483,
                                  'goal' => 0,
                                  'evidence_balance' => 207914483,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource204 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity47,
                                  'source_id' =>$idPlan41,
                                  'value' => 45564303,
                                  'goal' => 0,
                                  'evidence_balance' => 45564303,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource205 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity49,
                                  'source_id' =>$idPlan41,
                                  'value' => 3809876143.34942,
                                  'goal' => 0,
                                  'evidence_balance' => 3809876143.34942,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource206 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity50,
                                  'source_id' =>$idPlan39,
                                  'value' => 18916413,
                                  'goal' => 0,
                                  'evidence_balance' => 18916413,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource207 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity51,
                                  'source_id' =>$idPlan39,
                                  'value' => 53000000,
                                  'goal' => 0,
                                  'evidence_balance' => 53000000,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource208 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity52,
                                  'source_id' =>$idPlan39,
                                  'value' => 147000000,
                                  'goal' => 0,
                                  'evidence_balance' => 147000000,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource209 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity54,
                                  'source_id' =>$idPlan39,
                                  'value' => 300000000,
                                  'goal' => 0,
                                  'evidence_balance' => 300000000,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource210 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity58,
                                  'source_id' =>$idPlan39,
                                  'value' => 867125207,
                                  'goal' => 0,
                                  'evidence_balance' => 867125207,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource211 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity60,
                                  'source_id' =>$idPlan39,
                                  'value' => 321262248.028,
                                  'goal' => 0,
                                  'evidence_balance' => 321262248.028,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource212 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity61,
                                  'source_id' =>$idPlan39,
                                  'value' => 75000000,
                                  'goal' => 0,
                                  'evidence_balance' => 75000000,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource213 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity62,
                                  'source_id' =>$idPlan39,
                                  'value' => 921732843.028,
                                  'goal' => 0,
                                  'evidence_balance' => 921732843.028,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource214 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity63,
                                  'source_id' =>$idPlan39,
                                  'value' => 68644087.5,
                                  'goal' => 0,
                                  'evidence_balance' => 68644087.5,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource215 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity64,
                                  'source_id' =>$idPlan39,
                                  'value' => 13509797,
                                  'goal' => 0,
                                  'evidence_balance' => 13509797,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource216 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity65,
                                  'source_id' =>$idPlan39,
                                  'value' => 238800565,
                                  'goal' => 0,
                                  'evidence_balance' => 238800565,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource217 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity66,
                                  'source_id' =>$idPlan39,
                                  'value' => 8523960,
                                  'goal' => 0,
                                  'evidence_balance' => 8523960,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource218 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity67,
                                  'source_id' =>$idPlan39,
                                  'value' => 9036000,
                                  'goal' => 0,
                                  'evidence_balance' => 9036000,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource219 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity68,
                                  'source_id' =>$idPlan39,
                                  'value' => 136744800,
                                  'goal' => 0,
                                  'evidence_balance' => 136744800,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource220 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity69,
                                  'source_id' =>$idPlan39,
                                  'value' => 66464800,
                                  'goal' => 0,
                                  'evidence_balance' => 66464800,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource221 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity70,
                                  'source_id' =>$idPlan39,
                                  'value' => 97124596,
                                  'goal' => 0,
                                  'evidence_balance' => 97124596,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource222 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity71,
                                  'source_id' =>$idPlan39,
                                  'value' => 108000000,
                                  'goal' => 0,
                                  'evidence_balance' => 108000000,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource223 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity72,
                                  'source_id' =>$idPlan39,
                                  'value' => 49500000,
                                  'goal' => 0,
                                  'evidence_balance' => 49500000,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource224 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity74,
                                  'source_id' =>$idPlan39,
                                  'value' => 479285387.193419,
                                  'goal' => 0,
                                  'evidence_balance' => 479285387.193419,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource225 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity76,
                                  'source_id' =>$idPlan33,
                                  'value' => 39000000,
                                  'goal' => 0,
                                  'evidence_balance' => 39000000,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource226 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity77,
                                  'source_id' =>$idPlan33,
                                  'value' => 350000000,
                                  'goal' => 0,
                                  'evidence_balance' => 350000000,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource227 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity78,
                                  'source_id' =>$idPlan33,
                                  'value' => 260000000,
                                  'goal' => 0,
                                  'evidence_balance' => 260000000,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource228 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity80,
                                  'source_id' =>$idPlan33,
                                  'value' => 360999999.9,
                                  'goal' => 0,
                                  'evidence_balance' => 360999999.9,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource229 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity81,
                                  'source_id' =>$idPlan33,
                                  'value' => 23558156.4934195,
                                  'goal' => 0,
                                  'evidence_balance' => 23558156.4934195,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource230 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity82,
                                  'source_id' =>$idPlan32,
                                  'value' => 721076412.09342,
                                  'goal' => 0,
                                  'evidence_balance' => 721076412.09342,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource231 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity83,
                                  'source_id' =>$idPlan31,
                                  'value' => 66503568.0934196,
                                  'goal' => 0,
                                  'evidence_balance' => 66503568.0934196,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource232 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity85,
                                  'source_id' =>$idPlan34,
                                  'value' => 145361610.492,
                                  'goal' => 0,
                                  'evidence_balance' => 145361610.492,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource233 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity86,
                                  'source_id' =>$idPlan34,
                                  'value' => 45008293.2014195,
                                  'goal' => 0,
                                  'evidence_balance' => 45008293.2014195,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource234 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity87,
                                  'source_id' =>$idPlan40,
                                  'value' => 7506908,
                                  'goal' => 0,
                                  'evidence_balance' => 7506908,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource235 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity89,
                                  'source_id' =>$idPlan40,
                                  'value' => 3030341,
                                  'goal' => 0,
                                  'evidence_balance' => 3030341,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource236 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity91,
                                  'source_id' =>$idPlan40,
                                  'value' => 962906380,
                                  'goal' => 0,
                                  'evidence_balance' => 962906380,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource237 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity92,
                                  'source_id' =>$idPlan40,
                                  'value' => 189315830,
                                  'goal' => 0,
                                  'evidence_balance' => 189315830,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource238 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity93,
                                  'source_id' =>$idPlan40,
                                  'value' => 15282851.7014196,
                                  'goal' => 0,
                                  'evidence_balance' => 15282851.7014196,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource239 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity94,
                                  'source_id' =>$idPlan37,
                                  'value' => 165480148,
                                  'goal' => 0,
                                  'evidence_balance' => 165480148,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource240 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity95,
                                  'source_id' =>$idPlan37,
                                  'value' => 19715869.7014196,
                                  'goal' => 0,
                                  'evidence_balance' => 19715869.7014196,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource241 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity20,
                                    'source_id' =>$idPlan30,
                                    'value' => 1198102203.264,
                                    'goal' => 0,
                                    'evidence_balance' => 1198102203.264,
                                    'age' => 3,
                                    ]);
                                    $idactivitySource242 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity40,
                                    'source_id' =>$idPlan41,
                                    'value' => 86097770.6505804,
                                    'goal' => 0,
                                    'evidence_balance' => 86097770.6505804,
                                    'age' => 3,
                                    ]);
                                    $idactivitySource243 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity49,
                                    'source_id' =>$idPlan38,
                                    'value' => 4637032898.36,
                                    'goal' => 0,
                                    'evidence_balance' => 4637032898.36,
                                    'age' => 3,
                                    ]);
                                    $idactivitySource244 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity81,
                                    'source_id' =>$idPlan32,
                                    'value' => 135329065.50658,
                                    'goal' => 0,
                                    'evidence_balance' => 135329065.50658,
                                    'age' => 3,
                                    ]);
                                    $idactivitySource246 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity82,
                                    'source_id' =>$idPlan31,
                                    'value' => 374218719.90658,
                                    'goal' => 0,
                                    'evidence_balance' => 374218719.90658,
                                    'age' => 3,
                                    ]);
                                    $idactivitySource247 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity83,
                                    'source_id' =>$idPlan34,
                                    'value' => 12627696.3065805,
                                    'goal' => 0,
                                    'evidence_balance' => 12627696.3065805,
                                    'age' => 3,
                                    ]);
                                    $idactivitySource248 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity93,
                                    'source_id' =>$idPlan37,
                                    'value' => 534803982.29858,
                                    'goal' => 0,
                                    'evidence_balance' => 534803982.29858,
                                    'age' => 3,
                                    ]);
                                    $idactivitySource250 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity95,
                                    'source_id' =>$idPlan36,
                                    'value' => 34809858.1285,
                                    'goal' => 0,
                                    'evidence_balance' => 34809858.1285,
                                    'age' => 3,
                                    ]);
                                    $idactivitySource251 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia192,
                                      'activity_source_id' =>$idactivitySource176,
                                      'value' => 149400000,
                                      ]);
                                      $idevidenceFinancial176 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia194,
                                      'activity_source_id' =>$idactivitySource177,
                                      'value' => 399772771,
                                      ]);
                                      $idevidenceFinancial177 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia196,
                                      'activity_source_id' =>$idactivitySource178,
                                      'value' => 1998753504,
                                      ]);
                                      $idevidenceFinancial178 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia199,
                                      'activity_source_id' =>$idactivitySource179,
                                      'value' => 169977200,
                                      ]);
                                      $idevidenceFinancial179 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia200,
                                      'activity_source_id' =>$idactivitySource180,
                                      'value' => 734450533,
                                      ]);
                                      $idevidenceFinancial180 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia201,
                                      'activity_source_id' =>$idactivitySource181,
                                      'value' => 207667774,
                                      ]);
                                      $idevidenceFinancial181 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia202,
                                      'activity_source_id' =>$idactivitySource182,
                                      'value' => 42168000,
                                      ]);
                                      $idevidenceFinancial182 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia204,
                                      'activity_source_id' =>$idactivitySource183,
                                      'value' => 3759539284.36,
                                      ]);
                                      $idevidenceFinancial183 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia206,
                                      'activity_source_id' =>$idactivitySource184,
                                      'value' => 130131060,
                                      ]);
                                      $idevidenceFinancial184 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia207,
                                      'activity_source_id' =>$idactivitySource185,
                                      'value' => 462254846,
                                      ]);
                                      $idevidenceFinancial185 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia208,
                                      'activity_source_id' =>$idactivitySource186,
                                      'value' => 94531980.489,
                                      ]);
                                      $idevidenceFinancial186 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia209,
                                      'activity_source_id' =>$idactivitySource187,
                                      'value' => 367627868.348,
                                      ]);
                                      $idevidenceFinancial187 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia210,
                                      'activity_source_id' =>$idactivitySource188,
                                      'value' => 352664206.736,
                                      ]);
                                      $idevidenceFinancial188 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia211,
                                      'activity_source_id' =>$idactivitySource189,
                                      'value' => 459781759,
                                      ]);
                                      $idevidenceFinancial189 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia213,
                                      'activity_source_id' =>$idactivitySource190,
                                      'value' => 1252898123,
                                      ]);
                                      $idevidenceFinancial190 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia214,
                                      'activity_source_id' =>$idactivitySource191,
                                      'value' => 139108711,
                                      ]);
                                      $idevidenceFinancial191 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia216,
                                      'activity_source_id' =>$idactivitySource192,
                                      'value' => 719279932.1,
                                      ]);
                                      $idevidenceFinancial192 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia217,
                                      'activity_source_id' =>$idactivitySource193,
                                      'value' => 49279933.396,
                                      ]);
                                      $idevidenceFinancial193 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia218,
                                      'activity_source_id' =>$idactivitySource194,
                                      'value' => 87286962,
                                      ]);
                                      $idevidenceFinancial194 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia219,
                                      'activity_source_id' =>$idactivitySource195,
                                      'value' => 25100000,
                                      ]);
                                      $idevidenceFinancial195 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia220,
                                      'activity_source_id' =>$idactivitySource196,
                                      'value' => 605401985,
                                      ]);
                                      $idevidenceFinancial196 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia224,
                                      'activity_source_id' =>$idactivitySource197,
                                      'value' => 3860179,
                                      ]);
                                      $idevidenceFinancial197 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia227,
                                      'activity_source_id' =>$idactivitySource198,
                                      'value' => 164344760,
                                      ]);
                                      $idevidenceFinancial198 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia228,
                                      'activity_source_id' =>$idactivitySource199,
                                      'value' => 819112849,
                                      ]);
                                      $idevidenceFinancial199 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia230,
                                      'activity_source_id' =>$idactivitySource200,
                                      'value' => 39095216.3494196,
                                      ]);
                                      $idevidenceFinancial200 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia232,
                                      'activity_source_id' =>$idactivitySource201,
                                      'value' => 65884345.5,
                                      ]);
                                      $idevidenceFinancial201 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia233,
                                      'activity_source_id' =>$idactivitySource202,
                                      'value' => 79359088,
                                      ]);
                                      $idevidenceFinancial202 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia234,
                                      'activity_source_id' =>$idactivitySource203,
                                      'value' => 230114750,
                                      ]);
                                      $idevidenceFinancial203 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia236,
                                      'activity_source_id' =>$idactivitySource204,
                                      'value' => 177923158,
                                      ]);
                                      $idevidenceFinancial204 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia237,
                                      'activity_source_id' =>$idactivitySource205,
                                      'value' => 45235670,
                                      ]);
                                      $idevidenceFinancial205 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia239,
                                      'activity_source_id' =>$idactivitySource206,
                                      'value' => 3809876143.34942,
                                      ]);
                                      $idevidenceFinancial206 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia240,
                                      'activity_source_id' =>$idactivitySource207,
                                      'value' => 18916413,
                                      ]);
                                      $idevidenceFinancial207 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia241,
                                      'activity_source_id' =>$idactivitySource208,
                                      'value' => 52999999.508,
                                      ]);
                                      $idevidenceFinancial208 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia242,
                                      'activity_source_id' =>$idactivitySource209,
                                      'value' => 146999992.89,
                                      ]);
                                      $idevidenceFinancial209 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia244,
                                      'activity_source_id' =>$idactivitySource210,
                                      'value' => 299883306.49,
                                      ]);
                                      $idevidenceFinancial210 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia248,
                                      'activity_source_id' =>$idactivitySource211,
                                      'value' => 855404725,
                                      ]);
                                      $idevidenceFinancial211 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia250,
                                      'activity_source_id' =>$idactivitySource212,
                                      'value' => 297312045,
                                      ]);
                                      $idevidenceFinancial212 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia251,
                                      'activity_source_id' =>$idactivitySource213,
                                      'value' => 75000000,
                                      ]);
                                      $idevidenceFinancial213 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia252,
                                      'activity_source_id' =>$idactivitySource214,
                                      'value' => 921472367.596,
                                      ]);
                                      $idevidenceFinancial214 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia253,
                                      'activity_source_id' =>$idactivitySource215,
                                      'value' => 68644087,
                                      ]);
                                      $idevidenceFinancial215 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia254,
                                      'activity_source_id' =>$idactivitySource216,
                                      'value' => 13509797,
                                      ]);
                                      $idevidenceFinancial216 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia255,
                                      'activity_source_id' =>$idactivitySource217,
                                      'value' => 238800565,
                                      ]);
                                      $idevidenceFinancial217 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia256,
                                      'activity_source_id' =>$idactivitySource218,
                                      'value' => 8506000,
                                      ]);
                                      $idevidenceFinancial218 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia257,
                                      'activity_source_id' =>$idactivitySource219,
                                      'value' => 9036000,
                                      ]);
                                      $idevidenceFinancial219 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia258,
                                      'activity_source_id' =>$idactivitySource220,
                                      'value' => 136744800,
                                      ]);
                                      $idevidenceFinancial220 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia259,
                                      'activity_source_id' =>$idactivitySource221,
                                      'value' => 66448000,
                                      ]);
                                      $idevidenceFinancial221 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia260,
                                      'activity_source_id' =>$idactivitySource222,
                                      'value' => 85665653,
                                      ]);
                                      $idevidenceFinancial222 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia261,
                                      'activity_source_id' =>$idactivitySource223,
                                      'value' => 107930000,
                                      ]);
                                      $idevidenceFinancial223 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia262,
                                      'activity_source_id' =>$idactivitySource224,
                                      'value' => 49499208,
                                      ]);
                                      $idevidenceFinancial224 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia264,
                                      'activity_source_id' =>$idactivitySource225,
                                      'value' => 321229800,
                                      ]);
                                      $idevidenceFinancial225 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia266,
                                      'activity_source_id' =>$idactivitySource226,
                                      'value' => 27532522,
                                      ]);
                                      $idevidenceFinancial226 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia267,
                                      'activity_source_id' =>$idactivitySource227,
                                      'value' => 349927847,
                                      ]);
                                      $idevidenceFinancial227 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia268,
                                      'activity_source_id' =>$idactivitySource228,
                                      'value' => 260000000,
                                      ]);
                                      $idevidenceFinancial228 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia270,
                                      'activity_source_id' =>$idactivitySource229,
                                      'value' => 345600384.808,
                                      ]);
                                      $idevidenceFinancial229 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia271,
                                      'activity_source_id' =>$idactivitySource230,
                                      'value' => 23558156.4934195,
                                      ]);
                                      $idevidenceFinancial230 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia272,
                                      'activity_source_id' =>$idactivitySource231,
                                      'value' => 721076412.09342,
                                      ]);
                                      $idevidenceFinancial231 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia273,
                                      'activity_source_id' =>$idactivitySource232,
                                      'value' => 66503568.0934196,
                                      ]);
                                      $idevidenceFinancial232 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia275,
                                      'activity_source_id' =>$idactivitySource233,
                                      'value' => 145361590,
                                      ]);
                                      $idevidenceFinancial233 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia276,
                                      'activity_source_id' =>$idactivitySource234,
                                      'value' => 30054188,
                                      ]);
                                      $idevidenceFinancial234 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia277,
                                      'activity_source_id' =>$idactivitySource235,
                                      'value' => 7506908,
                                      ]);
                                      $idevidenceFinancial235 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia279,
                                      'activity_source_id' =>$idactivitySource236,
                                      'value' => 3030341,
                                      ]);
                                      $idevidenceFinancial236 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia281,
                                      'activity_source_id' =>$idactivitySource237,
                                      'value' => 932268448,
                                      ]);
                                      $idevidenceFinancial237 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia282,
                                      'activity_source_id' =>$idactivitySource238,
                                      'value' => 189315234,
                                      ]);
                                      $idevidenceFinancial238 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia283,
                                      'activity_source_id' =>$idactivitySource239,
                                      'value' => 15282851.7014196,
                                      ]);
                                      $idevidenceFinancial239 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia284,
                                      'activity_source_id' =>$idactivitySource240,
                                      'value' => 165480148,
                                      ]);
                                      $idevidenceFinancial240 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia285,
                                      'activity_source_id' =>$idactivitySource241,
                                      'value' => 19715869.7014196,
                                      ]);
                                      $idevidenceFinancial241 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia210,
                                        'activity_source_id' =>$idactivitySource242,
                                        'value' => 1192527246.264,
                                        ]);
                                        $idevidenceFinancial242 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia230,
                                        'activity_source_id' =>$idactivitySource243,
                                        'value' => 70874557.3065804,
                                        ]);
                                        $idevidenceFinancial243 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia239,
                                        'activity_source_id' =>$idactivitySource244,
                                        'value' => 3310989983.65058,
                                        ]);
                                        $idevidenceFinancial244 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia271,
                                        'activity_source_id' =>$idactivitySource246,
                                        'value' => 131084027.50658,
                                        ]);
                                        $idevidenceFinancial246 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia272,
                                        'activity_source_id' =>$idactivitySource247,
                                        'value' => 352662980.90658,
                                        ]);
                                        $idevidenceFinancial247 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia273,
                                        'activity_source_id' =>$idactivitySource248,
                                        'value' => 12206015.9065804,
                                        ]);
                                        $idevidenceFinancial248 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia283,
                                        'activity_source_id' =>$idactivitySource250,
                                        'value' => 532392922.29858,
                                        ]);
                                        $idevidenceFinancial250 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia285,
                                        'activity_source_id' =>$idactivitySource251,
                                        'value' => 34811787.2985804,
                                        ]);
                                        $idevidenceFinancial251 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity6,
                                          'source_id' =>$idPlan42,
                                          'value' => 231000000,
                                          'goal' => 0,
                                          'evidence_balance' => 231000000,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource253 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity9,
                                          'source_id' =>$idPlan42,
                                          'value' => 250100000,
                                          'goal' => 0,
                                          'evidence_balance' => 250100000,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource254 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity10,
                                          'source_id' =>$idPlan42,
                                          'value' => 1034551238,
                                          'goal' => 0,
                                          'evidence_balance' => 1034551238,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource255 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity11,
                                          'source_id' =>$idPlan42,
                                          'value' => 211682244,
                                          'goal' => 0,
                                          'evidence_balance' => 211682244,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource256 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity14,
                                          'source_id' =>$idPlan42,
                                          'value' => 4583646865,
                                          'goal' => 0,
                                          'evidence_balance' => 4583646865,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource257 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity16,
                                          'source_id' =>$idPlan42,
                                          'value' => 203177336,
                                          'goal' => 0,
                                          'evidence_balance' => 203177336,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource258 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity17,
                                          'source_id' =>$idPlan42,
                                          'value' => 161190277,
                                          'goal' => 0,
                                          'evidence_balance' => 161190277,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource259 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity18,
                                          'source_id' =>$idPlan42,
                                          'value' => 140162361.52,
                                          'goal' => 0,
                                          'evidence_balance' => 140162361.52,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource260 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity19,
                                          'source_id' =>$idPlan42,
                                          'value' => 993667911,
                                          'goal' => 0,
                                          'evidence_balance' => 993667911,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource261 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity20,
                                          'source_id' =>$idPlan42,
                                          'value' => 851740037,
                                          'goal' => 0,
                                          'evidence_balance' => 851740037,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource262 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity21,
                                          'source_id' =>$idPlan42,
                                          'value' => 516832747.604,
                                          'goal' => 0,
                                          'evidence_balance' => 516832747.604,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource263 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity23,
                                          'source_id' =>$idPlan42,
                                          'value' => 1018593817.1,
                                          'goal' => 0,
                                          'evidence_balance' => 1018593817.1,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource264 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity24,
                                          'source_id' =>$idPlan42,
                                          'value' => 115205104.4,
                                          'goal' => 0,
                                          'evidence_balance' => 115205104.4,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource265 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity28,
                                          'source_id' =>$idPlan42,
                                          'value' => 115182886,
                                          'goal' => 0,
                                          'evidence_balance' => 115182886,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource266 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity29,
                                          'source_id' =>$idPlan42,
                                          'value' => 40080000,
                                          'goal' => 0,
                                          'evidence_balance' => 40080000,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource267 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity30,
                                          'source_id' =>$idPlan42,
                                          'value' => 1476355832,
                                          'goal' => 0,
                                          'evidence_balance' => 1476355832,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource268 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity34,
                                          'source_id' =>$idPlan42,
                                          'value' => 40254210,
                                          'goal' => 0,
                                          'evidence_balance' => 40254210,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource269 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity37,
                                          'source_id' =>$idPlan42,
                                          'value' => 146880180.4,
                                          'goal' => 0,
                                          'evidence_balance' => 146880180.4,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource270 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity38,
                                          'source_id' =>$idPlan42,
                                          'value' => 2406123543.3,
                                          'goal' => 0,
                                          'evidence_balance' => 2406123543.3,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource271 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity40,
                                          'source_id' =>$idPlan42,
                                          'value' => 153492929,
                                          'goal' => 0,
                                          'evidence_balance' => 153492929,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource272 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity42,
                                          'source_id' =>$idPlan42,
                                          'value' => 131812080,
                                          'goal' => 0,
                                          'evidence_balance' => 131812080,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource273 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity43,
                                          'source_id' =>$idPlan42,
                                          'value' => 85901272,
                                          'goal' => 0,
                                          'evidence_balance' => 85901272,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource274 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity44,
                                          'source_id' =>$idPlan42,
                                          'value' => 349607558.6,
                                          'goal' => 0,
                                          'evidence_balance' => 349607558.6,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource275 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity46,
                                          'source_id' =>$idPlan42,
                                          'value' => 287247164,
                                          'goal' => 0,
                                          'evidence_balance' => 287247164,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource276 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity47,
                                          'source_id' =>$idPlan42,
                                          'value' => 43241900.488,
                                          'goal' => 0,
                                          'evidence_balance' => 43241900.488,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource277 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity49,
                                          'source_id' =>$idPlan42,
                                          'value' => 2104913572,
                                          'goal' => 0,
                                          'evidence_balance' => 2104913572,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource278 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity50,
                                          'source_id' =>$idPlan42,
                                          'value' => 57991564,
                                          'goal' => 0,
                                          'evidence_balance' => 57991564,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource279 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity52,
                                          'source_id' =>$idPlan42,
                                          'value' => 150000000,
                                          'goal' => 0,
                                          'evidence_balance' => 150000000,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource280 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity54,
                                          'source_id' =>$idPlan42,
                                          'value' => 400000000,
                                          'goal' => 0,
                                          'evidence_balance' => 400000000,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource281 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity58,
                                          'source_id' =>$idPlan42,
                                          'value' => 485190748.055706,
                                          'goal' => 0,
                                          'evidence_balance' => 485190748.055706,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource282 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity60,
                                          'source_id' =>$idPlan42,
                                          'value' => 147879388.451202,
                                          'goal' => 0,
                                          'evidence_balance' => 147879388.451202,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource283 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity61,
                                          'source_id' =>$idPlan42,
                                          'value' => 49447000.12,
                                          'goal' => 0,
                                          'evidence_balance' => 49447000.12,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource284 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity62,
                                          'source_id' =>$idPlan42,
                                          'value' => 610307386,
                                          'goal' => 0,
                                          'evidence_balance' => 610307386,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource285 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity63,
                                          'source_id' =>$idPlan42,
                                          'value' => 10432858.34,
                                          'goal' => 0,
                                          'evidence_balance' => 10432858.34,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource286 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity64,
                                          'source_id' =>$idPlan42,
                                          'value' => 16522687.44,
                                          'goal' => 0,
                                          'evidence_balance' => 16522687.44,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource287 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity65,
                                          'source_id' =>$idPlan42,
                                          'value' => 176979642,
                                          'goal' => 0,
                                          'evidence_balance' => 176979642,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource288 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity66,
                                          'source_id' =>$idPlan42,
                                          'value' => 7429600,
                                          'goal' => 0,
                                          'evidence_balance' => 7429600,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource289 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity67,
                                          'source_id' =>$idPlan42,
                                          'value' => 7429600,
                                          'goal' => 0,
                                          'evidence_balance' => 7429600,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource290 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity68,
                                          'source_id' =>$idPlan42,
                                          'value' => 154895170.15,
                                          'goal' => 0,
                                          'evidence_balance' => 154895170.15,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource291 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity69,
                                          'source_id' =>$idPlan42,
                                          'value' => 37148000,
                                          'goal' => 0,
                                          'evidence_balance' => 37148000,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource292 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity70,
                                          'source_id' =>$idPlan42,
                                          'value' => 65077269,
                                          'goal' => 0,
                                          'evidence_balance' => 65077269,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource293 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity71,
                                          'source_id' =>$idPlan42,
                                          'value' => 113500000,
                                          'goal' => 0,
                                          'evidence_balance' => 113500000,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource294 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity72,
                                          'source_id' =>$idPlan42,
                                          'value' => 37750000,
                                          'goal' => 0,
                                          'evidence_balance' => 37750000,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource295 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity74,
                                          'source_id' =>$idPlan42,
                                          'value' => 375000000,
                                          'goal' => 0,
                                          'evidence_balance' => 375000000,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource296 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity76,
                                          'source_id' =>$idPlan42,
                                          'value' => 30000000.1,
                                          'goal' => 0,
                                          'evidence_balance' => 30000000.1,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource297 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity78,
                                          'source_id' =>$idPlan42,
                                          'value' => 915507226.5,
                                          'goal' => 0,
                                          'evidence_balance' => 915507226.5,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource298 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity79,
                                          'source_id' =>$idPlan42,
                                          'value' => 3856950431.2452,
                                          'goal' => 0,
                                          'evidence_balance' => 3856950431.2452,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource299 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity80,
                                          'source_id' =>$idPlan42,
                                          'value' => 295000000,
                                          'goal' => 0,
                                          'evidence_balance' => 295000000,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource300 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity81,
                                          'source_id' =>$idPlan42,
                                          'value' => 168830125.2,
                                          'goal' => 0,
                                          'evidence_balance' => 168830125.2,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource301 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity82,
                                          'source_id' =>$idPlan42,
                                          'value' => 515805688,
                                          'goal' => 0,
                                          'evidence_balance' => 515805688,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource302 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity83,
                                          'source_id' =>$idPlan42,
                                          'value' => 72269356.3,
                                          'goal' => 0,
                                          'evidence_balance' => 72269356.3,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource303 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity85,
                                          'source_id' =>$idPlan42,
                                          'value' => 85217780,
                                          'goal' => 0,
                                          'evidence_balance' => 85217780,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource304 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity89,
                                          'source_id' =>$idPlan42,
                                          'value' => 4601854,
                                          'goal' => 0,
                                          'evidence_balance' => 4601854,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource305 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity91,
                                          'source_id' =>$idPlan42,
                                          'value' => 1117227105,
                                          'goal' => 0,
                                          'evidence_balance' => 1117227105,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource306 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity93,
                                          'source_id' =>$idPlan42,
                                          'value' => 210067174,
                                          'goal' => 0,
                                          'evidence_balance' => 210067174,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource307 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity94,
                                          'source_id' =>$idPlan42,
                                          'value' => 307547804,
                                          'goal' => 0,
                                          'evidence_balance' => 307547804,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource308 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity95,
                                          'source_id' =>$idPlan42,
                                          'value' => 40157917,
                                          'goal' => 0,
                                          'evidence_balance' => 40157917,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource309 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia291,
                                            'activity_source_id' =>$idactivitySource253,
                                            'value' => 230275301.108,
                                            ]);
                                            $idevidenceFinancial253 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia294,
                                            'activity_source_id' =>$idactivitySource254,
                                            'value' => 250088000,
                                            ]);
                                            $idevidenceFinancial254 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia295,
                                            'activity_source_id' =>$idactivitySource255,
                                            'value' => 1006554513.744,
                                            ]);
                                            $idevidenceFinancial255 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia296,
                                            'activity_source_id' =>$idactivitySource256,
                                            'value' => 211664844.744,
                                            ]);
                                            $idevidenceFinancial256 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia299,
                                            'activity_source_id' =>$idactivitySource257,
                                            'value' => 4545611006.184,
                                            ]);
                                            $idevidenceFinancial257 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia301,
                                            'activity_source_id' =>$idactivitySource258,
                                            'value' => 203167329.704,
                                            ]);
                                            $idevidenceFinancial258 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia302,
                                            'activity_source_id' =>$idactivitySource259,
                                            'value' => 161189884.364,
                                            ]);
                                            $idevidenceFinancial259 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia303,
                                            'activity_source_id' =>$idactivitySource260,
                                            'value' => 140160404.684,
                                            ]);
                                            $idevidenceFinancial260 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia304,
                                            'activity_source_id' =>$idactivitySource261,
                                            'value' => 988906638,
                                            ]);
                                            $idevidenceFinancial261 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia305,
                                            'activity_source_id' =>$idactivitySource262,
                                            'value' => 840950882.768,
                                            ]);
                                            $idevidenceFinancial262 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia306,
                                            'activity_source_id' =>$idactivitySource263,
                                            'value' => 516832746.816,
                                            ]);
                                            $idevidenceFinancial263 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia308,
                                            'activity_source_id' =>$idactivitySource264,
                                            'value' => 1018593817,
                                            ]);
                                            $idevidenceFinancial264 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia309,
                                            'activity_source_id' =>$idactivitySource265,
                                            'value' => 115158800,
                                            ]);
                                            $idevidenceFinancial265 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia313,
                                            'activity_source_id' =>$idactivitySource266,
                                            'value' => 114654332,
                                            ]);
                                            $idevidenceFinancial266 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia314,
                                            'activity_source_id' =>$idactivitySource267,
                                            'value' => 40080000,
                                            ]);
                                            $idevidenceFinancial267 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia315,
                                            'activity_source_id' =>$idactivitySource268,
                                            'value' => 1450446075.632,
                                            ]);
                                            $idevidenceFinancial268 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia319,
                                            'activity_source_id' =>$idactivitySource269,
                                            'value' => 6024000,
                                            ]);
                                            $idevidenceFinancial269 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia322,
                                            'activity_source_id' =>$idactivitySource270,
                                            'value' => 146880180,
                                            ]);
                                            $idevidenceFinancial270 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia323,
                                            'activity_source_id' =>$idactivitySource271,
                                            'value' => 2398861471.008,
                                            ]);
                                            $idevidenceFinancial271 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia325,
                                            'activity_source_id' =>$idactivitySource272,
                                            'value' => 123424801,
                                            ]);
                                            $idevidenceFinancial272 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia327,
                                            'activity_source_id' =>$idactivitySource273,
                                            'value' => 130465716,
                                            ]);
                                            $idevidenceFinancial273 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia328,
                                            'activity_source_id' =>$idactivitySource274,
                                            'value' => 85901272,
                                            ]);
                                            $idevidenceFinancial274 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia329,
                                            'activity_source_id' =>$idactivitySource275,
                                            'value' => 346589043,
                                            ]);
                                            $idevidenceFinancial275 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia331,
                                            'activity_source_id' =>$idactivitySource276,
                                            'value' => 269415046.448,
                                            ]);
                                            $idevidenceFinancial276 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia332,
                                            'activity_source_id' =>$idactivitySource277,
                                            'value' => 43241900,
                                            ]);
                                            $idevidenceFinancial277 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia334,
                                            'activity_source_id' =>$idactivitySource278,
                                            'value' => 2104002685.044,
                                            ]);
                                            $idevidenceFinancial278 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia335,
                                            'activity_source_id' =>$idactivitySource279,
                                            'value' => 57991564,
                                            ]);
                                            $idevidenceFinancial279 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia337,
                                            'activity_source_id' =>$idactivitySource280,
                                            'value' => 149999909.2,
                                            ]);
                                            $idevidenceFinancial280 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia339,
                                            'activity_source_id' =>$idactivitySource281,
                                            'value' => 395543698.8,
                                            ]);
                                            $idevidenceFinancial281 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia343,
                                            'activity_source_id' =>$idactivitySource282,
                                            'value' => 482582170.06,
                                            ]);
                                            $idevidenceFinancial282 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia345,
                                            'activity_source_id' =>$idactivitySource283,
                                            'value' => 141899063.304,
                                            ]);
                                            $idevidenceFinancial283 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia346,
                                            'activity_source_id' =>$idactivitySource284,
                                            'value' => 49436960,
                                            ]);
                                            $idevidenceFinancial284 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia347,
                                            'activity_source_id' =>$idactivitySource285,
                                            'value' => 610137270.248,
                                            ]);
                                            $idevidenceFinancial285 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia348,
                                            'activity_source_id' =>$idactivitySource286,
                                            'value' => 10432858,
                                            ]);
                                            $idevidenceFinancial286 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia349,
                                            'activity_source_id' =>$idactivitySource287,
                                            'value' => 16522687.3,
                                            ]);
                                            $idevidenceFinancial287 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia350,
                                            'activity_source_id' =>$idactivitySource288,
                                            'value' => 172859643,
                                            ]);
                                            $idevidenceFinancial288 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia351,
                                            'activity_source_id' =>$idactivitySource289,
                                            'value' => 7429600,
                                            ]);
                                            $idevidenceFinancial289 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia352,
                                            'activity_source_id' =>$idactivitySource290,
                                            'value' => 7429600,
                                            ]);
                                            $idevidenceFinancial290 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia353,
                                            'activity_source_id' =>$idactivitySource291,
                                            'value' => 154895112,
                                            ]);
                                            $idevidenceFinancial291 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia354,
                                            'activity_source_id' =>$idactivitySource292,
                                            'value' => 37148000,
                                            ]);
                                            $idevidenceFinancial292 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia355,
                                            'activity_source_id' =>$idactivitySource293,
                                            'value' => 65077268.948,
                                            ]);
                                            $idevidenceFinancial293 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia356,
                                            'activity_source_id' =>$idactivitySource294,
                                            'value' => 101472092,
                                            ]);
                                            $idevidenceFinancial294 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia357,
                                            'activity_source_id' =>$idactivitySource295,
                                            'value' => 23092000,
                                            ]);
                                            $idevidenceFinancial295 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia359,
                                            'activity_source_id' =>$idactivitySource296,
                                            'value' => 346756496,
                                            ]);
                                            $idevidenceFinancial296 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia361,
                                            'activity_source_id' =>$idactivitySource297,
                                            'value' => 27013903,
                                            ]);
                                            $idevidenceFinancial297 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia363,
                                            'activity_source_id' =>$idactivitySource298,
                                            'value' => 915495373,
                                            ]);
                                            $idevidenceFinancial298 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia364,
                                            'activity_source_id' =>$idactivitySource299,
                                            'value' => 3856950431,
                                            ]);
                                            $idevidenceFinancial299 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia365,
                                            'activity_source_id' =>$idactivitySource300,
                                            'value' => 294906773,
                                            ]);
                                            $idevidenceFinancial300 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia366,
                                            'activity_source_id' =>$idactivitySource301,
                                            'value' => 168830125,
                                            ]);
                                            $idevidenceFinancial301 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia367,
                                            'activity_source_id' =>$idactivitySource302,
                                            'value' => 510142753,
                                            ]);
                                            $idevidenceFinancial302 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia368,
                                            'activity_source_id' =>$idactivitySource303,
                                            'value' => 72264611,
                                            ]);
                                            $idevidenceFinancial303 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia370,
                                            'activity_source_id' =>$idactivitySource304,
                                            'value' => 84873326,
                                            ]);
                                            $idevidenceFinancial304 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia374,
                                            'activity_source_id' =>$idactivitySource305,
                                            'value' => 4601854,
                                            ]);
                                            $idevidenceFinancial305 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia376,
                                            'activity_source_id' =>$idactivitySource306,
                                            'value' => 918023782.5,
                                            ]);
                                            $idevidenceFinancial306 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia378,
                                            'activity_source_id' =>$idactivitySource307,
                                            'value' => 191466625,
                                            ]);
                                            $idevidenceFinancial307 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia379,
                                            'activity_source_id' =>$idactivitySource308,
                                            'value' => 303707434,
                                            ]);
                                            $idevidenceFinancial308 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia380,
                                            'activity_source_id' =>$idactivitySource309,
                                            'value' => 40157917,
                                            ]);
                                            $idevidenceFinancial309 = DB::getPdo()->lastInsertId();
                                            
    }
}