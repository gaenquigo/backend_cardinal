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
 * Class HistoricPAI_CORPOCHIVOR_Seeder
 */
class HistoricPAI_CORPOCHIVOR_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $pai=PAI::create([
        'name' => 'Plan de Acción Institucional 2016-2019 “Territorio agroambiental”',
        'start_date' => '2016-01-01',
        'end_date' => '2019-12-31',
        'director_name' => 'FABIO ANTONIO GUERRERO AMAYA',
        'group_id' => 20,
        'approved' => 1,
        ]);
        $idpai1 = DB::getPdo()->lastInsertId();


        DB::table('strategic_lines')->insert([
          'name' => 'Linea 1',
          'weighing' => 100,
          'p_a_i_id' => $idpai1,
          ]);
          $idline1 = DB::getPdo()->lastInsertId();
          

          DB::table('programs')->insert([
            'strategic_line_id' => $idline1,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 1.  FORTALECIMIENTO DEL SISTEMA REGIONAL AMBIENTAL PARA EL DESARROLLO SOSTENIBLE Y SOCIAL DE LA JURISDICCIÓN',
            'weighing' => 20,
            ]);
            $idprogram1 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline1,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 2. PROTECCIÓN Y CONSERVACIÓN DE LA BIODIVERSIDAD Y DE LOS ECOSISTEMAS DE LA JURISDICCIÓN',
            'weighing' => 20,
            ]);
            $idprogram2 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline1,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 3. GESTIÓN INTEGRAL DEL RECURSO HÍDRICO DE LA JURISDICCIÓN.',
            'weighing' => 20,
            ]);
            $idprogram3 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline1,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 4. PROCESOS PRODUCTIVOS SOSTENIBLES Y COMPETITIVOS PARA EL DESARROLLO SOCIAL Y ECONÓMICO DE LA JURISDICCIÓN.',
            'weighing' => 20,
            ]);
            $idprogram4 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline1,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 5. PREVENCIÓN, CONTROL Y MANEJO DEL RIESGO Y DEL DETERIORO AMBIENTAL.',
            'weighing' => 20,
            ]);
            $idprogram5 = DB::getPdo()->lastInsertId();
            
            
            DB::table('projects')->insert([
              'program_id' => $idprogram1,
              'project' => 'Proyecto No 101. EDUCACIÓN, CAPACITACIÓN Y FORTALECIMIENTO DE LA PARTICIPACIÓN CIUDADANA',
              'weighing' => 20,
              ]);
              $idproject1 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram1,
              'project' => 'Proyecto No 102 GESTIÓN DE LA INFORMACIÓN (USO Y DIVULGACIÓN)',
              'weighing' => 20,
              ]);
              $idproject2 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram1,
              'project' => 'Proyecto No 103. GESTIÓN INTEGRAL DEL TERRITORIO',
              'weighing' => 20,
              ]);
              $idproject3 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram1,
              'project' => 'Proyecto No 104. SEGUIMIENTO, CONTROL Y VIGILANCIA DE LOS RECURSOS',
              'weighing' => 20,
              ]);
              $idproject4 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram1,
              'project' => 'Proyecto No 105. FORTALECIMIENTO DE LA GESTIÓN AMBIENTAL INSTITUCIONAL Y TERRITORIAL.',
              'weighing' => 20,
              ]);
              $idproject5 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => 'Proyecto No 201. PROTECCIÓN, RECUPERACIÓN Y MANEJO DE LA BIODIVERSIDAD Y DE LOS ECOSISTEMAS ESTRATÉGICOS',
              'weighing' => 50,
              ]);
              $idproject6 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => 'Proyecto No 202. PROTECCIÓN, MANEJO SOSTENIBLE INCREMENTO DE LA OFERTA FORESTAL',
              'weighing' => 50,
              ]);
              $idproject7 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram3,
              'project' => 'Proyecto No 301. RECUPERACION DE FUENTES HIDRICAS',
              'weighing' => 33,
              ]);
              $idproject8 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram3,
              'project' => 'Proyecto No 302. USO SOSTENIBLE DEL RECURSO HIDRICO',
              'weighing' => 33,
              ]);
              $idproject9 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram3,
              'project' => 'Proyecto No 303. GESTIÓN INTEGRAL DEL RECURSO HÍDRICO',
              'weighing' => 34,
              ]);
              $idproject10 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram4,
              'project' => 'Proyecto No 401. GESTIÓN PARA EL DESARROLLO SOSTENIBLE EN LOS SECTORES PRODUCTIVOS DE LA JURISDICCIÓN',
              'weighing' => 50,
              ]);
              $idproject11 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram4,
              'project' => 'Proyecto No 402. GESTIÓN INTEGRAL DE RESIDUOS',
              'weighing' => 50,
              ]);
              $idproject12 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram5,
              'project' => 'Proyecto No 501. PREVENCIÓN Y MANEJO DEL RIESGO NATURAL Y ANTRÓPICO Y DEL DETERIORO AMBIENTAL',
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
					'product_id' => 1,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 16,
					]);
					$idobjectiveproduct1 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
					'product_id' => 2,
					'product_other' => 'Producto 2',
					'goal_1' => 1,
					'goal_2' => 2,
					'goal_3' => 2,
					'goal_4' => 2,
					'goal_1_balance' => 1,
					'goal_2_balance' => 2,
					'goal_3_balance' => 2,
					'goal_4_balance' => 2,
					'total_goal' => 7,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 16,
					]);
					$idobjectiveproduct2 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
					'product_id' => 3,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 16,
					]);
					$idobjectiveproduct3 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
					'product_id' => 4,
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
					'weighing' => 17,
					]);
					$idobjectiveproduct4 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
					'product_id' => 5,
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
					'weighing' => 17,
					]);
					$idobjectiveproduct5 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
					'product_id' => 6,
					'product_other' => 'Producto 6',
					'goal_1' => 4,
					'goal_2' => 4,
					'goal_3' => 4,
					'goal_4' => 4,
					'goal_1_balance' => 4,
					'goal_2_balance' => 4,
					'goal_3_balance' => 4,
					'goal_4_balance' => 4,
					'total_goal' => 16,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 17,
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
					'weighing' => 1,
					]);
					$idobjectiveproduct7 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective2,
					'product_id' => 8,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 20,
					]);
					$idobjectiveproduct8 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective2,
					'product_id' => 9,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 20,
					]);
					$idobjectiveproduct9 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective2,
					'product_id' => 10,
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
					'weighing' => 20,
					]);
					$idobjectiveproduct10 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective2,
					'product_id' => 11,
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
					'weighing' => 20,
					]);
					$idobjectiveproduct11 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective2,
					'product_id' => 12,
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
					'weighing' => 19,
					]);
					$idobjectiveproduct12 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective2,
					'product_id' => 13,
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
					$idobjectiveproduct13 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective3,
					'product_id' => 14,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 11,
					]);
					$idobjectiveproduct14 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective3,
					'product_id' => 15,
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
					'weighing' => 11,
					]);
					$idobjectiveproduct15 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective3,
					'product_id' => 16,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 11,
					]);
					$idobjectiveproduct16 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective3,
					'product_id' => 17,
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
					'weighing' => 11,
					]);
					$idobjectiveproduct17 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective3,
					'product_id' => 18,
					'product_other' => 'Producto 5',
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
					'weighing' => 11,
					]);
					$idobjectiveproduct18 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective3,
					'product_id' => 19,
					'product_other' => 'Producto 6',
					'goal_1' => 0,
					'goal_2' => 7,
					'goal_3' => 9,
					'goal_4' => 9,
					'goal_1_balance' => 0,
					'goal_2_balance' => 7,
					'goal_3_balance' => 9,
					'goal_4_balance' => 9,
					'total_goal' => 25,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 11,
					]);
					$idobjectiveproduct19 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective3,
					'product_id' => 20,
					'product_other' => 'Producto 7',
					'goal_1' => 7,
					'goal_2' => 3,
					'goal_3' => 7,
					'goal_4' => 8,
					'goal_1_balance' => 7,
					'goal_2_balance' => 3,
					'goal_3_balance' => 7,
					'goal_4_balance' => 8,
					'total_goal' => 25,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 11,
					]);
					$idobjectiveproduct20 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective3,
					'product_id' => 21,
					'product_other' => 'Producto 8',
					'goal_1' => 0,
					'goal_2' => 1,
					'goal_3' => 0,
					'goal_4' => 1,
					'goal_1_balance' => 0,
					'goal_2_balance' => 1,
					'goal_3_balance' => 0,
					'goal_4_balance' => 1,
					'total_goal' => 2,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 11,
					]);
					$idobjectiveproduct21 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective3,
					'product_id' => 22,
					'product_other' => 'Producto 9',
					'goal_1' => 100,
					'goal_2' => 0,
					'goal_3' => 1,
					'goal_4' => 2,
					'goal_1_balance' => 100,
					'goal_2_balance' => 0,
					'goal_3_balance' => 1,
					'goal_4_balance' => 2,
					'total_goal' => 103,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 11,
					]);
					$idobjectiveproduct22 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective3,
					'product_id' => 23,
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
					'weighing' => 1,
					]);
					$idobjectiveproduct23 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
					'product_id' => 24,
					'product_other' => 'Producto 1',
					'goal_1' => 85,
					'goal_2' => 85,
					'goal_3' => 85,
					'goal_4' => 85,
					'goal_1_balance' => 85,
					'goal_2_balance' => 85,
					'goal_3_balance' => 85,
					'goal_4_balance' => 85,
					'total_goal' => 340,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 20,
					]);
					$idobjectiveproduct24 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
					'product_id' => 25,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 20,
					]);
					$idobjectiveproduct25 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
					'product_id' => 26,
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
					'weighing' => 20,
					]);
					$idobjectiveproduct26 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
					'product_id' => 27,
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
					'weighing' => 20,
					]);
					$idobjectiveproduct27 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
					'product_id' => 28,
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
					'weighing' => 19,
					]);
					$idobjectiveproduct28 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
					'product_id' => 29,
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
					$idobjectiveproduct29 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
					'product_id' => 30,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 10,
					]);
					$idobjectiveproduct30 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
					'product_id' => 31,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 10,
					]);
					$idobjectiveproduct31 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
					'product_id' => 32,
					'product_other' => 'Producto 3',
					'goal_1' => 4,
					'goal_2' => 2,
					'goal_3' => 2,
					'goal_4' => 3,
					'goal_1_balance' => 4,
					'goal_2_balance' => 2,
					'goal_3_balance' => 2,
					'goal_4_balance' => 3,
					'total_goal' => 11,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 10,
					]);
					$idobjectiveproduct32 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
					'product_id' => 33,
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
					'weighing' => 10,
					]);
					$idobjectiveproduct33 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
					'product_id' => 34,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 10,
					]);
					$idobjectiveproduct34 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
					'product_id' => 35,
					'product_other' => 'Producto 6',
					'goal_1' => 20,
					'goal_2' => 15,
					'goal_3' => 15,
					'goal_4' => 15,
					'goal_1_balance' => 20,
					'goal_2_balance' => 15,
					'goal_3_balance' => 15,
					'goal_4_balance' => 15,
					'total_goal' => 65,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 10,
					]);
					$idobjectiveproduct35 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
					'product_id' => 36,
					'product_other' => 'Producto 7',
					'goal_1' => 5,
					'goal_2' => 5,
					'goal_3' => 5,
					'goal_4' => 5,
					'goal_1_balance' => 5,
					'goal_2_balance' => 5,
					'goal_3_balance' => 5,
					'goal_4_balance' => 5,
					'total_goal' => 20,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 10,
					]);
					$idobjectiveproduct36 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
					'product_id' => 37,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 10,
					]);
					$idobjectiveproduct37 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
					'product_id' => 38,
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
					'weighing' => 10,
					]);
					$idobjectiveproduct38 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
					'product_id' => 39,
					'product_other' => 'Producto 10',
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
					$idobjectiveproduct39 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
					'product_id' => 40,
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
					'weighing' => 1,
					]);
					$idobjectiveproduct40 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => 41,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 12,
					]);
					$idobjectiveproduct41 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => 42,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 12,
					]);
					$idobjectiveproduct42 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => 43,
					'product_other' => 'Producto 3',
					'goal_1' => 1,
					'goal_2' => 0,
					'goal_3' => 0,
					'goal_4' => 1,
					'goal_1_balance' => 1,
					'goal_2_balance' => 0,
					'goal_3_balance' => 0,
					'goal_4_balance' => 1,
					'total_goal' => 2,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 12,
					]);
					$idobjectiveproduct43 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => 44,
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
					$idobjectiveproduct44 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => 45,
					'product_other' => 'Producto 5',
					'goal_1' => 0,
					'goal_2' => 1,
					'goal_3' => 2,
					'goal_4' => 0,
					'goal_1_balance' => 0,
					'goal_2_balance' => 1,
					'goal_3_balance' => 2,
					'goal_4_balance' => 0,
					'total_goal' => 3,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 12,
					]);
					$idobjectiveproduct45 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => 46,
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
					'weighing' => 13,
					]);
					$idobjectiveproduct46 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => 47,
					'product_other' => 'Producto 7',
					'goal_1' => 30,
					'goal_2' => 100,
					'goal_3' => 100,
					'goal_4' => 100,
					'goal_1_balance' => 30,
					'goal_2_balance' => 100,
					'goal_3_balance' => 100,
					'goal_4_balance' => 100,
					'total_goal' => 330,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 13,
					]);
					$idobjectiveproduct47 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => 48,
					'product_other' => 'Producto 8',
					'goal_1' => 2,
					'goal_2' => 2,
					'goal_3' => 2,
					'goal_4' => 2,
					'goal_1_balance' => 2,
					'goal_2_balance' => 2,
					'goal_3_balance' => 2,
					'goal_4_balance' => 2,
					'total_goal' => 8,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 13,
					]);
					$idobjectiveproduct48 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => 49,
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
					$idobjectiveproduct49 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
					'product_id' => 50,
					'product_other' => 'Producto 1',
					'goal_1' => 156,
					'goal_2' => 156,
					'goal_3' => 236,
					'goal_4' => 156,
					'goal_1_balance' => 156,
					'goal_2_balance' => 156,
					'goal_3_balance' => 236,
					'goal_4_balance' => 156,
					'total_goal' => 704,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 20,
					]);
					$idobjectiveproduct50 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
					'product_id' => 51,
					'product_other' => 'Producto 2',
					'goal_1' => 20,
					'goal_2' => 20,
					'goal_3' => 919,
					'goal_4' => 20,
					'goal_1_balance' => 20,
					'goal_2_balance' => 20,
					'goal_3_balance' => 919,
					'goal_4_balance' => 20,
					'total_goal' => 979,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 20,
					]);
					$idobjectiveproduct51 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
					'product_id' => 52,
					'product_other' => 'Producto 3',
					'goal_1' => 150,
					'goal_2' => 210,
					'goal_3' => 259,
					'goal_4' => 210,
					'goal_1_balance' => 150,
					'goal_2_balance' => 210,
					'goal_3_balance' => 259,
					'goal_4_balance' => 210,
					'total_goal' => 829,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 20,
					]);
					$idobjectiveproduct52 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
					'product_id' => 53,
					'product_other' => 'Producto 4',
					'goal_1' => 3,
					'goal_2' => 3,
					'goal_3' => 3,
					'goal_4' => 3,
					'goal_1_balance' => 3,
					'goal_2_balance' => 3,
					'goal_3_balance' => 3,
					'goal_4_balance' => 3,
					'total_goal' => 12,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 20,
					]);
					$idobjectiveproduct53 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
					'product_id' => 54,
					'product_other' => 'Producto 5',
					'goal_1' => 7,
					'goal_2' => 7,
					'goal_3' => 7,
					'goal_4' => 7,
					'goal_1_balance' => 7,
					'goal_2_balance' => 7,
					'goal_3_balance' => 7,
					'goal_4_balance' => 7,
					'total_goal' => 28,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 19,
					]);
					$idobjectiveproduct54 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
					'product_id' => 55,
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
					$idobjectiveproduct55 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
					'product_id' => 56,
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
					'weighing' => 20,
					]);
					$idobjectiveproduct56 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
					'product_id' => 57,
					'product_other' => 'Producto 2',
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
					'weighing' => 20,
					]);
					$idobjectiveproduct57 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
					'product_id' => 58,
					'product_other' => 'Producto 3',
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
					'weighing' => 20,
					]);
					$idobjectiveproduct58 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
					'product_id' => 59,
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
					'weighing' => 20,
					]);
					$idobjectiveproduct59 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
					'product_id' => 60,
					'product_other' => 'Producto 5',
					'goal_1' => 5,
					'goal_2' => 0,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 5,
					'goal_2_balance' => 0,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 5,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 19,
					]);
					$idobjectiveproduct60 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
					'product_id' => 61,
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
					$idobjectiveproduct61 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective9,
					'product_id' => 62,
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
					'weighing' => 10,
					]);
					$idobjectiveproduct62 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective9,
					'product_id' => 63,
					'product_other' => 'Producto 2',
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
					'weighing' => 10,
					]);
					$idobjectiveproduct63 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective9,
					'product_id' => 64,
					'product_other' => 'Producto 3',
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
					'weighing' => 10,
					]);
					$idobjectiveproduct64 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective9,
					'product_id' => 65,
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
					'weighing' => 10,
					]);
					$idobjectiveproduct65 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective9,
					'product_id' => 66,
					'product_other' => 'Producto 5',
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
					'weighing' => 10,
					]);
					$idobjectiveproduct66 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective9,
					'product_id' => 67,
					'product_other' => 'Producto 6',
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
					'weighing' => 10,
					]);
					$idobjectiveproduct67 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective9,
					'product_id' => 68,
					'product_other' => 'Producto 7',
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
					'weighing' => 10,
					]);
					$idobjectiveproduct68 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective9,
					'product_id' => 69,
					'product_other' => 'Producto 8',
					'goal_1' => 35,
					'goal_2' => 0,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 35,
					'goal_2_balance' => 0,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 35,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 10,
					]);
					$idobjectiveproduct69 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective9,
					'product_id' => 70,
					'product_other' => 'Producto 9',
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
					'weighing' => 10,
					]);
					$idobjectiveproduct70 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective9,
					'product_id' => 71,
					'product_other' => 'Producto 10',
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
					'weighing' => 9,
					]);
					$idobjectiveproduct71 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective9,
					'product_id' => 72,
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
					'weighing' => 1,
					]);
					$idobjectiveproduct72 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
					'product_id' => 73,
					'product_other' => 'Producto 1',
					'goal_1' => 0,
					'goal_2' => 30,
					'goal_3' => 30,
					'goal_4' => 40,
					'goal_1_balance' => 0,
					'goal_2_balance' => 30,
					'goal_3_balance' => 30,
					'goal_4_balance' => 40,
					'total_goal' => 100,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 6,
					]);
					$idobjectiveproduct73 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
					'product_id' => 74,
					'product_other' => 'Producto 2',
					'goal_1' => 1,
					'goal_2' => 0,
					'goal_3' => 1,
					'goal_4' => 0,
					'goal_1_balance' => 1,
					'goal_2_balance' => 0,
					'goal_3_balance' => 1,
					'goal_4_balance' => 0,
					'total_goal' => 2,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 6,
					]);
					$idobjectiveproduct74 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
					'product_id' => 75,
					'product_other' => 'Producto 3',
					'goal_1' => 0,
					'goal_2' => 20,
					'goal_3' => 80,
					'goal_4' => 0,
					'goal_1_balance' => 0,
					'goal_2_balance' => 20,
					'goal_3_balance' => 80,
					'goal_4_balance' => 0,
					'total_goal' => 100,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 6,
					]);
					$idobjectiveproduct75 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
					'product_id' => 76,
					'product_other' => 'Producto 4',
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 5,
					'goal_4' => 95,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 5,
					'goal_4_balance' => 95,
					'total_goal' => 100,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 6,
					]);
					$idobjectiveproduct76 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
					'product_id' => 77,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 6,
					]);
					$idobjectiveproduct77 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
					'product_id' => 78,
					'product_other' => 'Producto 6',
					'goal_1' => 0,
					'goal_2' => 1,
					'goal_3' => 1,
					'goal_4' => 0,
					'goal_1_balance' => 0,
					'goal_2_balance' => 1,
					'goal_3_balance' => 1,
					'goal_4_balance' => 0,
					'total_goal' => 2,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 6,
					]);
					$idobjectiveproduct78 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
					'product_id' => 79,
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
					'weighing' => 7,
					]);
					$idobjectiveproduct79 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
					'product_id' => 80,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 7,
					]);
					$idobjectiveproduct80 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
					'product_id' => 81,
					'product_other' => 'Producto 9',
					'goal_1' => 0,
					'goal_2' => 15,
					'goal_3' => 55,
					'goal_4' => 30,
					'goal_1_balance' => 0,
					'goal_2_balance' => 15,
					'goal_3_balance' => 55,
					'goal_4_balance' => 30,
					'total_goal' => 100,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 7,
					]);
					$idobjectiveproduct81 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
					'product_id' => 82,
					'product_other' => 'Producto 10',
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
					'weighing' => 7,
					]);
					$idobjectiveproduct82 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
					'product_id' => 83,
					'product_other' => 'Producto 11',
					'goal_1' => 0,
					'goal_2' => 20,
					'goal_3' => 80,
					'goal_4' => 0,
					'goal_1_balance' => 0,
					'goal_2_balance' => 20,
					'goal_3_balance' => 80,
					'goal_4_balance' => 0,
					'total_goal' => 100,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 7,
					]);
					$idobjectiveproduct83 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
					'product_id' => 84,
					'product_other' => 'Producto 12',
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 0,
					'goal_4' => 100,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 0,
					'goal_4_balance' => 100,
					'total_goal' => 100,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 7,
					]);
					$idobjectiveproduct84 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
					'product_id' => 85,
					'product_other' => 'Producto 13',
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
					'weighing' => 7,
					]);
					$idobjectiveproduct85 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
					'product_id' => 86,
					'product_other' => 'Producto 14',
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
					'weighing' => 7,
					]);
					$idobjectiveproduct86 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
					'product_id' => 87,
					'product_other' => 'Producto 15',
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
					'weighing' => 7,
					]);
					$idobjectiveproduct87 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
					'product_id' => 88,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct88 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
					'product_id' => 89,
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
					'weighing' => 25,
					]);
					$idobjectiveproduct89 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
					'product_id' => 90,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct90 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
					'product_id' => 91,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct91 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
					'product_id' => 92,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 24,
					]);
					$idobjectiveproduct92 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
					'product_id' => 93,
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
					$idobjectiveproduct93 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective12,
					'product_id' => 94,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 12,
					]);
					$idobjectiveproduct94 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective12,
					'product_id' => 95,
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
					'weighing' => 12,
					]);
					$idobjectiveproduct95 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective12,
					'product_id' => 96,
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
					$idobjectiveproduct96 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective12,
					'product_id' => 97,
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
					$idobjectiveproduct97 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective12,
					'product_id' => 98,
					'product_other' => 'Producto 5',
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
					'weighing' => 12,
					]);
					$idobjectiveproduct98 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective12,
					'product_id' => 99,
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
					$idobjectiveproduct99 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective12,
					'product_id' => 100,
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
					'weighing' => 13,
					]);
					$idobjectiveproduct100 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective12,
					'product_id' => 101,
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
					$idobjectiveproduct101 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective12,
					'product_id' => 102,
					'product_other' => 'Producto 9',
					'goal_1' => 100,
					'goal_2' => 1,
					'goal_3' => 1,
					'goal_4' => 1,
					'goal_1_balance' => 100,
					'goal_2_balance' => 1,
					'goal_3_balance' => 1,
					'goal_4_balance' => 1,
					'total_goal' => 103,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct102 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective13,
					'product_id' => 103,
					'product_other' => 'Producto 1',
					'goal_1' => 2,
					'goal_2' => 2,
					'goal_3' => 2,
					'goal_4' => 2,
					'goal_1_balance' => 2,
					'goal_2_balance' => 2,
					'goal_3_balance' => 2,
					'goal_4_balance' => 2,
					'total_goal' => 8,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct103 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective13,
					'product_id' => 104,
					'product_other' => 'Producto 2',
					'goal_1' => 1,
					'goal_2' => 3,
					'goal_3' => 2,
					'goal_4' => 4,
					'goal_1_balance' => 1,
					'goal_2_balance' => 3,
					'goal_3_balance' => 2,
					'goal_4_balance' => 4,
					'total_goal' => 10,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct104 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective13,
					'product_id' => 105,
					'product_other' => 'Producto 3',
					'goal_1' => 1,
					'goal_2' => 3,
					'goal_3' => 3,
					'goal_4' => 3,
					'goal_1_balance' => 1,
					'goal_2_balance' => 3,
					'goal_3_balance' => 3,
					'goal_4_balance' => 3,
					'total_goal' => 10,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct105 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective13,
					'product_id' => 106,
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
					'weighing' => 24,
					]);
					$idobjectiveproduct106 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective13,
					'product_id' => 107,
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
					$idobjectiveproduct107 = DB::getPdo()->lastInsertId();
					
                  
                  
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct1,
                    'name' => '1. Formulación y ejecución de un plan anual bajo el esquema de Aprender haciendo, que recoja y estructure las campañas divulgativas y participativas de la Corporación en las líneas de acción estratégicas de la institución',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity1 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct2,
                    'name' => '2.1 Reconocimiento, compilación y divulgación del conocimiento tradicional y técnico, para el emprendimiento de buenas prácticas ambientales y de bajo impacto sobre los recursos naturales.
                   Prácticas compiladas y socializadas',
                    'goal_1' => 1,
                    'goal_2' => 2,
                    'goal_3' => 2,
                    'goal_4' => 2,
                    'goal' => 7,
                    'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity2 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct3,
                    'name' => '2.2. Reconocimiento, compilación y divulgación del conocimiento tradicional y técnico, para el emprendimiento de buenas prácticas ambientales y de bajo impacto sobre los recursos naturales. Seguimiento',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 3,
                    'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity3 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct4,
                    'name' => '3. Fortalecimiento de CIDEAS, PROCEDAS, PRAUS y PRAES en la jurisdicción',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity4 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct5,
                    'name' => '4 Ejecutar un plan de medios institucional',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity5 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct6,
                    'name' => '5. Implementar estrategias de comunicación y protocolo institucional',
                    'goal_1' => 4,
                    'goal_2' => 4,
                    'goal_3' => 4,
                    'goal_4' => 4,
                    'goal' => 16,
                    'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity6 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct7,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity7 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct8,
                    'name' => '1. Actualización del Plan Estratégico de las Tecnologías de Información -PETI-, acorde con los lineamientos de la Estrategia Gobierno en Line',
                    'goal_1' => 1,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 1,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity8 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct9,
                    'name' => '2. Ejecución y seguimiento anual a los planes y acciones operativas del PETI',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity9 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct10,
                    'name' => '3. Actualización el SIAT',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity10 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct11,
                    'name' => '4. Promoción del acceso y uso del sistema de Información Ambiental Territorial (SIAT)',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity11 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct12,
                    'name' => '5. Consolidación de la información generada por los subsistemas del SIAC aplicables a la jurisdicción',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 19,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity12 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct13,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity13 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct14,
                    'name' => '1. Formulación y/o ajuste de Planes de Ordenación y Manejo de Cuencas Hidrográficas y/o Planes de manejo ambiental de microcuencas',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity14 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct15,
                    'name' => '2. Seguimiento a la ejecución de Planes de Ordenación y Manejo de Cuencas Hidrográficas y Planes de manejo ambiental de microcuencas adoptados',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity15 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct16,
                    'name' => '3. Asesoría para la incorporación de determinantes y asuntos ambientales a los municipios que inicien proceso de revisión, modificación y/o ajuste de los Planes Básicos y Esquemas de Ordenamiento Territorial.',
                    'goal_1' => 25,
                    'goal_2' => 25,
                    'goal_3' => 25,
                    'goal_4' => 25,
                    'goal' => 100,
                    'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity16 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct17,
                    'name' => '4. Concertación de los asuntos ambientales de los Planes Básicos y Esquemas de Ordenamiento Territorial con los municipios que inicien proceso de revisión, modificación y/o ajuste',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity17 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct18,
                    'name' => '5. Seguimiento a las determinantes y a los asuntos ambientales de los PBOT y EOT concertados con los municipios',
                    'goal_1' => 25,
                    'goal_2' => 25,
                    'goal_3' => 25,
                    'goal_4' => 25,
                    'goal' => 100,
                    'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity18 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct19,
                    'name' => '6. Generación de conocimiento de riesgo de desastres.
                   Estudios de Análisis y evaluación de riesgo',
                    'goal_1' => 0,
                    'goal_2' => 7,
                    'goal_3' => 9,
                    'goal_4' => 9,
                    'goal' => 25,
                    'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity19 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct20,
                    'name' => '6. Generación de conocimiento de riesgo de desastres. 
                  Estudios de Análisis y evaluación de riesgo. Escenarios de riesgo monitoreados',
                    'goal_1' => 7,
                    'goal_2' => 3,
                    'goal_3' => 7,
                    'goal_4' => 8,
                    'goal' => 25,
                    'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity20 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct21,
                    'name' => '7. Generación de conocimiento para la adaptación y/o mitigación al cambio climático',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 0,
                    'goal_4' => 1,
                    'goal' => 2,
                    'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity21 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct22,
                    'name' => '8. Delimitación de rondas o tramos de rondas priorizadas como insumo a los planes de ordenamiento Territorial',
                    'goal_1' => 100,
                    'goal_2' => 0,
                    'goal_3' => 1,
                    'goal_4' => 2,
                    'goal' => 103,
                    'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity22 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct23,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity23 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct24,
                    'name' => '1. Atender efectivamente las quejas, allegadas a la entidad por presunta infracción ambiental.',
                    'goal_1' => 85,
                    'goal_2' => 85,
                    'goal_3' => 85,
                    'goal_4' => 85,
                    'goal' => 340,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity24 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct25,
                    'name' => '2. Tramitar las solicitudes de permisos, licencias y autorizaciones realizadas ante la entidad.',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity25 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct26,
                    'name' => '3. Formular e implementar un plan para el seguimiento a licencias ambientales, permisos y /o autorización otorgadas por la entidad.',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity26 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct27,
                    'name' => '4. Ejecutar un plan anual interinstitucional de operativos de control (minería, flora, fauna y emisiones atmosféricas) y acompañamiento a la política de formalización minera.',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity27 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct28,
                    'name' => '5. Atender efectivamente los procesos sancionatorios que surjan de procesos de seguimiento a autorizaciones y/o por quejas ambientales',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 19,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity28 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct29,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity29 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct30,
                    'name' => '1. Fortalecimiento de la capacidad operativa de la Corporación con servicios administrativos, físicos, técnicos y jurídicos para mejorar la capacidad de gestión institucional.',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity30 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct31,
                    'name' => '2. Fortalecimiento de la institución con equipos de oficina, bienes y enseres, software, hardware, redes eléctricas, voz, datos, sistemas de comunicación interna y externa, apoyo logístico y mantenimiento para las diferentes dependencias de la Corporación.',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 2,
                    'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity31 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct32,
                    'name' => '3. Estructuración, Formulación, edición implementación y publicación de documentos Corporativos.',
                    'goal_1' => 4,
                    'goal_2' => 2,
                    'goal_3' => 2,
                    'goal_4' => 3,
                    'goal' => 11,
                    'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity32 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct33,
                    'name' => '4. Mantenimiento y complemento al sistema de Gestión Integral. Seguimiento al Sistema',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity33 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct34,
                    'name' => '4. Mantenimiento y complemento al sistema de Gestión Integral. Implementación de normas complementarias',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 1,
                    'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity34 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct35,
                    'name' => '5. Formular y presentar proyectos para la consecución de recursos financieros para mejorar la gestión Corporativa.
                   Proyectos formulados y presentados a las fuentes de financiación.',
                    'goal_1' => 20,
                    'goal_2' => 15,
                    'goal_3' => 15,
                    'goal_4' => 15,
                    'goal' => 65,
                    'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity35 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct36,
                    'name' => '5. Formular y presentar proyectos para la consecución de recursos financieros para mejorar la gestión Corporativa. 
                  Incremento de recursos.',
                    'goal_1' => 5,
                    'goal_2' => 5,
                    'goal_3' => 5,
                    'goal_4' => 5,
                    'goal' => 20,
                    'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity36 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct37,
                    'name' => '6. Apoyar el proceso de actualización de la base catastral de los municipios de la jurisdicción de CORPOCHIVOR',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity37 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct38,
                    'name' => '7. Diseñar e implementar un plan de asesoría y capacitación para el fortalecimiento de la gestión ambiental interinstitucional',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity38 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct39,
                    'name' => '8. Evaluación y viabilidades de proyectos presentados por los entes territoriales, comunidades organizadas y la Corporación solicitando expedición de concepto técnico ambiental.',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity39 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct40,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity40 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct41,
                    'name' => '1. Priorizar y declarar áreas estratégicas regionales',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity41 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct42,
                    'name' => '2. Identificar área estratégicas potenciales municipales de protección',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity42 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct43,
                    'name' => '3. Realizar estudios para la delimitación de páramos',
                    'goal_1' => 1,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 1,
                    'goal' => 2,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity43 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct44,
                    'name' => '4. Atender solicitudes con el fin de facilitar y apoyar la adquisición de áreas de importancia estratégica en cumplimiento al artículo 111',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity44 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct45,
                    'name' => '5. Adoptar Planes de manejo de áreas protegidas',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 2,
                    'goal_4' => 0,
                    'goal' => 3,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity45 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct46,
                    'name' => '6. Implementar acciones de Planes de Manejo en áreas protegidas',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity46 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct47,
                    'name' => '7. Implementar acciones de Atención, Valoración y Rehabilitación de fauna silvestre',
                    'goal_1' => 30,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 330,
                    'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity47 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct48,
                    'name' => '8. Implementar estrategias que permitan el manejo, conocimiento y uso de Especies Amenazadas, invasoras y en Conflicto con el hombre',
                    'goal_1' => 2,
                    'goal_2' => 2,
                    'goal_3' => 2,
                    'goal_4' => 2,
                    'goal' => 8,
                    'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity48 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct49,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity49 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct50,
                    'name' => '1. Áreas reforestadas y restauradas para la protección de áreas priorizadas. Hectáreas reforestadas',
                    'goal_1' => 156,
                    'goal_2' => 156,
                    'goal_3' => 236,
                    'goal_4' => 156,
                    'goal' => 704,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity50 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct51,
                    'name' => '1. Áreas reforestadas y restauradas para la protección de áreas priorizadas. Hectáreas restauradas',
                    'goal_1' => 20,
                    'goal_2' => 20,
                    'goal_3' => 919,
                    'goal_4' => 20,
                    'goal' => 979,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity51 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct52,
                    'name' => '2. Mantenimiento de áreas reforestadas y restauradas priorizadas',
                    'goal_1' => 150,
                    'goal_2' => 210,
                    'goal_3' => 259,
                    'goal_4' => 210,
                    'goal' => 829,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity52 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct53,
                    'name' => '3. Desarrollo de Líneas de Acción y evaluación y seguimiento a los Criterios e Indicadores (C&I) del Plan de Ordenación Forestal.Estrategias desarrolladas',
                    'goal_1' => 3,
                    'goal_2' => 3,
                    'goal_3' => 3,
                    'goal_4' => 3,
                    'goal' => 12,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity53 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct54,
                    'name' => '3. Desarrollo de Líneas de Acción y evaluación y seguimiento a los Criterios e Indicadores (C&I) del Plan de Ordenación Forestal. Seguimiento al Cumplimiento de C&I',
                    'goal_1' => 7,
                    'goal_2' => 7,
                    'goal_3' => 7,
                    'goal_4' => 7,
                    'goal' => 28,
                    'weighing' => 19,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity54 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct55,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity55 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct56,
                    'name' => '1.1. Surtir el trámite para el otorgamiento de permisos y registro de vertimiento, previo cumplimiento de requisitos tecnicos y legales.',
                    'goal_1' => 100,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 100,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity56 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct57,
                    'name' => '1.2. Asesorar y tramitar las solicitudes radicadas para la evaluación  e implementación de los Planes de Saneamiento y Manejo de Vertimiento (PSMV) de las empresas o unidades prestadoras del servicio del Alcantarillado en la jurisdicción, previo cumplimiento de los requisitos técnicos y legales.',
                    'goal_1' => 100,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 100,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity57 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct58,
                    'name' => '1.3. Ingreso de usuarios con permisos y resgistro de vertimientos que cumplan con la totalidad de requisitos técnicos y legales al Sistema de Información del Recurso Hídrico desarrollado por el IDEAM (Decreto 303 de 2012)',
                    'goal_1' => 100,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 100,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity58 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct59,
                    'name' => '2.1. Implementar el programa de Tasas Retributivas a traves de la liquidación del año inmediatamente anterior dando cumplimiento a la normatividad vigente.Porcentaje de usuarios liquidados',
                    'goal_1' => 100,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 100,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity59 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct60,
                    'name' => '2.1. Implementar el programa de Tasas Retributivas a traves de la liquidación del año inmediatamente anterior dando cumplimiento a la normatividad vigente. Porcentaje de cumplimiento de meta de carga contaminante',
                    'goal_1' => 5,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 5,
                    'weighing' => 19,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity60 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct61,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity61 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct62,
                    'name' => '1.1.Surtir el trámite  requerido para el otorgamiento de  concesiones de agua superficiales y subterraneas, previo  cumplimiento requisitos técnicos y legales. ',
                    'goal_1' => 100,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 100,
                    'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity62 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct63,
                    'name' => '1.2. Surtir eltramite requerido para el otorgamiento del respectivo permiso, previo cumplimiento de requisitos tecnicos y legales.',
                    'goal_1' => 100,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 100,
                    'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity63 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct64,
                    'name' => '1.4. Incorporación de información de concesiones de aguas superficial y subterránea en el Sistema de Información del Recurso Hídrico desarrollado por el IDEAM. (Decreto 303 de 2012).',
                    'goal_1' => 100,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 100,
                    'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity64 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct65,
                    'name' => '1.5. Asesorar y tramitar las solicitudes radicadas para la evaluación de los programas del Uso Eficiente  y Ahorro del Agua (PUEAA), como mecanismo de uso adecuado y eficiente del recurso hídrico, incorporando el riesgo por desabastecimiento y la implementación de tecnologías de ahorradoras de agua',
                    'goal_1' => 100,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 100,
                    'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity65 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct66,
                    'name' => '2.1. Implementar el programa de tasas por utilización de agua a traves de la liquidación del año inmediatamente anterior.  porcentaje (%) de usuarios liquidados',
                    'goal_1' => 100,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 100,
                    'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity66 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct67,
                    'name' => '3.1. Optimizar y operar el Laboratorio de Calidad Ambiental (Aguas y Suelos).Porcentaje de solicitudes de analisis de agua atendidas.',
                    'goal_1' => 100,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 100,
                    'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity67 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct68,
                    'name' => '3.1. Optimizar y operar el Laboratorio de Calidad Ambiental (Aguas y Suelos) Porcentaje de solictudes de analisis de suelos atendidas',
                    'goal_1' => 100,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 100,
                    'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity68 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct69,
                    'name' => '3.3. Optimizar, mantener y operar la Red de Monitoreo Hídrico. Número de estaciones hídricas operando, de calidad y cantidad.',
                    'goal_1' => 35,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 35,
                    'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity69 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct70,
                    'name' => '4.1. Asesorar técnicamente y tramitar las solictudes radicadas para la construccion de reservorios.   ',
                    'goal_1' => 100,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 100,
                    'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity70 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct71,
                    'name' => '4.2. Apoyar las solicitudes redicadas para la conformación y fortalecimiento de las asociaciones de juntas Administradoras de Acueducto.',
                    'goal_1' => 100,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 100,
                    'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity71 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct72,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity72 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct73,
                    'name' => '1. Implementar Planes de Manejo Ambiental de Acuíferos en áreas priorizadas.',
                    'goal_1' => 0,
                    'goal_2' => 30,
                    'goal_3' => 30,
                    'goal_4' => 40,
                    'goal' => 100,
                    'weighing' => 6,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity73 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct74,
                    'name' => '2. Formular Planes de manejo ambiental de acuíferos según subcuencas priorizadas',
                    'goal_1' => 1,
                    'goal_2' => 0,
                    'goal_3' => 1,
                    'goal_4' => 0,
                    'goal' => 2,
                    'weighing' => 6,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity74 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct75,
                    'name' => '3 Elaborar Evaluación Regional del Agua - ERA- según subcuencas priorizadas',
                    'goal_1' => 0,
                    'goal_2' => 20,
                    'goal_3' => 80,
                    'goal_4' => 0,
                    'goal' => 100,
                    'weighing' => 6,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity75 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct76,
                    'name' => 'Elaborar Evaluación Regional del Agua - ERA en la jurisdicción. - 4 cuencas hidrográficas con ERA',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 5,
                    'goal_4' => 95,
                    'goal' => 100,
                    'weighing' => 6,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity76 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct77,
                    'name' => '4. Formular e implementar Proyectos de Pago Servicios Ambientales asociados al recurso hídrico. Proyectos formulados',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 1,
                    'weighing' => 6,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity77 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct78,
                    'name' => '4. Formular e implementar Proyectos de Pago Servicios Ambientales asociados al recurso hídrico. Proyectos Implementados',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 0,
                    'goal' => 2,
                    'weighing' => 6,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity78 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct79,
                    'name' => '5. Apoyar, evaluar y efectuar seguimiento a los instrumentos de medición del uso adecuado del agua.',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity79 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct80,
                    'name' => '6. Consolidar y realizar el cargue de la información relacionada con la Gestión Integral del Recurso Hídrico en el SIRH',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity80 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct81,
                    'name' => '7. Actualizar estudios y/o reglamentar microcuencas priorizadas.',
                    'goal_1' => 0,
                    'goal_2' => 15,
                    'goal_3' => 55,
                    'goal_4' => 30,
                    'goal' => 100,
                    'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity81 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct82,
                    'name' => '8. Verificar y monitorear el desarrollo de los instrumentos definidos para el cumplimiento de los Objetivos de Calidad para los principales afluentes.',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity82 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct83,
                    'name' => '9.Formular e implementar el Plan de Ordenación del Recurso Hídrico para las subcuencas priorizadas',
                    'goal_1' => 0,
                    'goal_2' => 20,
                    'goal_3' => 80,
                    'goal_4' => 0,
                    'goal' => 100,
                    'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity83 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct84,
                    'name' => '9.Formular e implementar el Plan de Ordenación del Recurso Hídrico para las subcuencas priorizadas- Implementación',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 100,
                    'goal' => 100,
                    'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity84 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct85,
                    'name' => '10. Apoyo técnico y/o financiero en la elaboración de estudios y/o construcción, optimización y puesta en marcha de proyectos de descontaminación hídrica.',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity85 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct86,
                    'name' => '11. Operar, mantener y optimizar el Laboratorio Ambiental',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity86 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct87,
                    'name' => '12. Operar, mantener y optimizar las redes y estaciones de calidad de agua y suelos e hidroclimáticas',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity87 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct88,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity88 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct89,
                    'name' => '1. Implementar medidas de manejo integrado del suelo a través de sistemas agroalimentarios',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity89 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct90,
                    'name' => '2. Promover el aprovechamiento sostenible de los recursos naturales en sectores productivos no agrícolas',
                    'goal_1' => 2,
                    'goal_2' => 2,
                    'goal_3' => 2,
                    'goal_4' => 2,
                    'goal' => 8,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity90 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct91,
                    'name' => '3. Desarrollar una estrategia para la promoción de los productos sostenibles.',
                    'goal_1' => 25,
                    'goal_2' => 25,
                    'goal_3' => 25,
                    'goal_4' => 25,
                    'goal' => 100,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity91 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct92,
                    'name' => '4. Implementar y mantener un mecanismo de reconocimiento ambiental.',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 2,
                    'goal_4' => 1,
                    'goal' => 5,
                    'weighing' => 24,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity92 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct93,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity93 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective12,
                    'product_id' =>$idobjectiveproduct94,
                    'name' => '1. Apoyo en la optimización o construcción de sistemas de Aprovechamiento, transformación y/o disposición de residuos sólidos.',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity94 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective12,
                    'product_id' =>$idobjectiveproduct95,
                    'name' => '2. Acompañar y asesorar a los municipios en la implementación, formulación y/o actualización de los PGIRS municipales y comparendo ambiental.',
                    'goal_1' => 25,
                    'goal_2' => 25,
                    'goal_3' => 25,
                    'goal_4' => 25,
                    'goal' => 100,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity95 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective12,
                    'product_id' =>$idobjectiveproduct96,
                    'name' => '3. Formular proyectos y/o investigaciones encaminadas a fomentar el Manejo Integral de Residuos sólidos.',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity96 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective12,
                    'product_id' =>$idobjectiveproduct97,
                    'name' => '4. Apoyo a los sectores productivos de los municipios de la jurisdicción en el desarrollo de acciones encaminadas al reciclaje, aprovechamiento, recuperación, transformación y valoración de residuos sólidos.',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity97 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective12,
                    'product_id' =>$idobjectiveproduct98,
                    'name' => '5. Brindar acompañamiento en la gestión de residuos Posconsumo, a los sectores productivos existentes en los municipios.',
                    'goal_1' => 25,
                    'goal_2' => 25,
                    'goal_3' => 25,
                    'goal_4' => 25,
                    'goal' => 100,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity98 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective12,
                    'product_id' =>$idobjectiveproduct99,
                    'name' => '6. Apoyar la gestión integral de residuos sólidos en el área rural de la Jurisdicción.',
                    'goal_1' => 25,
                    'goal_2' => 25,
                    'goal_3' => 25,
                    'goal_4' => 25,
                    'goal' => 100,
                    'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity99 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective12,
                    'product_id' =>$idobjectiveproduct100,
                    'name' => '7. Mantener actualizado el Plan de Gestión Integral de Residuos Peligrosos en la Jurisdicción de Corpochivor. (OPERATCIONSIUR, Registro RESPEL, RUA, Inventario PCB´S).',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity100 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective12,
                    'product_id' =>$idobjectiveproduct101,
                    'name' => '8. Asesorar y/o apoyar a sectores generadores de residuos peligrosos en estrategias que fomenten la gestión integral de los mismos.',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity101 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective12,
                    'product_id' =>$idobjectiveproduct102,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 100,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 103,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity102 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct103,
                    'name' => '1. Implementación de estrategias para el fortalecimiento de las entidades territoriales en atención del riesgo.',
                    'goal_1' => 2,
                    'goal_2' => 2,
                    'goal_3' => 2,
                    'goal_4' => 2,
                    'goal' => 8,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity103 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct104,
                    'name' => '2. Apoyar a los municipios en la construcción de obras de reducción y mitigación del riesgo.',
                    'goal_1' => 1,
                    'goal_2' => 3,
                    'goal_3' => 2,
                    'goal_4' => 4,
                    'goal' => 10,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity104 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct105,
                    'name' => '3. Realizar campañas de limpieza de cauces que generan riesgo para la población por acumulación de material vegetal y residuos sólidos.',
                    'goal_1' => 1,
                    'goal_2' => 3,
                    'goal_3' => 3,
                    'goal_4' => 3,
                    'goal' => 10,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity105 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct106,
                    'name' => '4. Valorar zonas ambientalmente afectadas y determinar medidas a ejecutar en zonas de riesgo',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 24,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity106 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct107,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity107 = DB::getPdo()->lastInsertId();

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity1,
						'year' =>1,
						'value' => 87,
						'description' => 'De las 11 actividades se realizaron:
					1. Socializacion pagina web en instituciones .
					2.  Formulacion proyecto microcuenca. 
					3. Una campaña de voluntariado y vistas de los jóvenes de ambiente al CAVR
					4.Realización de 5 jornadas de la campaña   Apadrina un Árbol - Sembrando vida”
					5.Socialización y capacitación en uso y manejo adecuado del recurso hídrico en las 20 instituciones educativas 
					6.Apoyo a 4 proyectos escolares de instituciones educativas con modalidades técnicas agropecuarias 
					7. concurso transformando residuos, construyendo sonrisas con la participación de 25 instituciones educativas
					8.Capacitación  a  10 municipios e instituciones educativas frente a la gestión del riesgo: Garagoa, La Capilla, Chinavita, Pachavita, Somondoco, Tibaná, Jenesano, Ramiriquí, Umbita, San Luis de Gaceno, Sutatenza y Santa Maria. 
					9. Realziación de 4 concurso ludico ambientales: Cuento Copla y Poesía; Olimpiadas del Conocimiento Ambiental, Música Campesina Ambiental y Ecológica, concurso transformando residuos, construyendo sonrisas',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia1 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity2,
						'year' =>1,
						'value' => 0.86,
						'description' => 'Se realizó reconocimiento, documentación, compilación y divulgación del conocimiento tradicional, la gastronomía y la cultura que gira alrededor del cultivo de maíz a tgravés de
					 IV Festival del maíz y XVII del sorbo y la arepa en el municipio de Ramiriquí. 
					 I Primer festival del retorno cultural y gastronómico de Garagoa 
					 Feria Internacional de Medio Ambiente VII encuentro nacional de Jóvenes de Ambiente. 
					 Vacaciones recreativas en los municipios de   Macanal, Pachavita y Garagoa',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia2 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>1,
						'value' => 100,
						'description' => 'Se apoyaron 12 CIDEAS, 10 PROCEDAS, 1 PRAU, 15 PRAES',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia4 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity5,
						'year' =>1,
						'value' => 83,
						'description' => 'Se formuló, y se ejucutó  Se dio ejecución al Plan de Medios mediante contrato 288/16 ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia5 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity6,
						'year' =>1,
						'value' => 4,
						'description' => 'Se implementaron 4 estrategias: Comunicación Interna, Comunicación Externa, Comunicación Digital, y Estrategia de Eventos y Protocolo .  ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia6 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity7,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia7 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity8,
						'year' =>1,
						'value' => 0.45,
						'description' => 'En virtud de la consultoría con contrato No 290-16 con fecha de inicio 21 de noviembre de 2016 se han adelantado los siguientes documentos que sirven de insumo para estructurar y definir el PETI. 
					-  Análisis de Brecha
					- Diagnostico Actual & minuta
					- Metodología Valoración y clasificación de activos
					- Reporte Hacking Ético
					- Reporte Ingeniería Social 
					- Identificación, valoración y evaluación de riesgos SI
					- Metodología gestión de riesgo 
					- Políticas de seguridad 
					- PETI (Documento en construcción)
					- Documento TIC para la gestión 
					Lo anterior se puede consultar en la ruta:
					\\192.168.254.5\300.61 Sistemas de Informacion\300.61.03 Copias de seguridad\Proyecto_TIC\Documentacion_cto290-16',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia8 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity9,
						'year' =>1,
						'value' => 91.67,
						'description' => 'Se desarrollarón los siguientes componetes de la estrategia Gobierno en Linea (Decreto 2573/14) 
					-TIC para servicios 
					-TIC para gobierto abierto
					-TIC para la gestión
					-Seguridad y privacidad de la información',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia9 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>1,
						'value' => 90.63,
						'description' => '18 Coberturas generadas, actualizadas, estructuradas e integradas en el Sistema de Información Ambiental Territorial
					16 metadatos estructurados y publicados en el SWAMI.
					Convenio elaboración de la cartografía básica vectorial y ortofotomosaico para el Departamento de Boyacá a escala 1:10.000',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia10 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity11,
						'year' =>1,
						'value' => 99.5,
						'description' => 'Transferencia SiatWeb a Coralina: instalación, configuración, estructuración de 11 coberturas y publicación en la plataforma  SIAT Web Coralina (http://190.24.10.115/coralina/
					Transferencia de datos geográficos a 24 municipios y capacitación en herramientas SIG (QGis, GvSIG) a 30 funcionarios.
					33 técnicos y profesionales capacitados en la plataforma SIMMA del Servicio Geológico Colombiano, SIAT y GPS 
					',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia11 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity12,
						'year' =>1,
						'value' => 80,
						'description' => 'Se recopila información reportada por los responsables de cargar la información en los subsistemas SIRH, SNIF, RESPEL Y RUA. Queda pendiente la validación de datos y aplicación de la fórmula segun ficcha metodológica de la resolucion 667 de 2016 ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia12 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity13,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia13 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity14,
						'year' =>1,
						'value' => 98,
						'description' => 'PLAN DE ORDENACIÓN Y MANEJO CUENCA RÍO GARAGOA
					- Ejecución y aprobación de actividades y productos de la fase de aprestamiento
					- Ejecución de actividades fase de diagnóstico. Entrega de productos para revisión por parte del consultor
					- Conformación de consejo de cuenca 
					PLAN DE ORDENACIÓN Y MANEJO CUENCA RÍO GUAVIO
					- Ejecución y aprobación de actividades y productos de la fase de aprestamiento
					- Inicio de ejecución de actividades fase de diagnóstico. 
					- Convocatoria para la conformación de consejo de cuenca 
					',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia14 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity15,
						'year' =>1,
						'value' => 1,
						'description' => 'Se realizó seguimiento fisico y financiero',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia15 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity16,
						'year' =>1,
						'value' => 25,
						'description' => 'La asesoria se brindó a los 25 municipios, sin embargo solo se adelantaron trabajos con  11 municipios que iniciaron proceso',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia16 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity17,
						'year' =>1,
						'value' => 100,
						'description' => 'El 8 de agosto de 2016, mediante radicado 2016ER4737 el municipio de Tibaná radicó proyecto de revisión y ajuste. Una vez verificado el contenido en cuanto a la incoporración de Determinantes Ambientales y Gestión de Riesgo de Desastres, se concluyó que no cumplía. Comunicación 2016EE6937

					El 6 de diciembre de 2016, mediante radicado 2016ER7440 el municipio de Ramiriquí radicó proyecto de revisión y ajuste. Una vez verificado el contenido en cuanto a la incoporración de Determinantes Ambientales y Gestión de Riesgo de Desastres, se concluyó que no cumplía. Comunicación 2016EE9694',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia17 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity18,
						'year' =>1,
						'value' => 13,
						'description' => 'Se adelantó seguimiento a las Determinantes Ambientales y Asuntos Ambientales de los Planes de Ordenamiento Territorial concertados con los municipios de Chinavita, Pachavita, Tenza, Ramiriquí, Jenesano, Tibaná, Boyacá, Úmbita, Viracachá, Nuevo Colón, Ciénega, Turmequé y Ventaquemada',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia18 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity20,
						'year' =>1,
						'value' => 7,
						'description' => 'Se realizó monitoreo a los 7 deslizamientos priorizados, tomando lestura de 8 piezómetros y coordenada de 12 mojones (GPS )',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia20 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity22,
						'year' =>1,
						'value' => 100,
						'description' => 'Se identificó y acontó ronda hídrica de 2 km del río Boyacá (Teatinos)
					Se realizó análisis predial, socioeconómico y de conflicto de uso del suelo, y se formularon medidas de manejo para el acotamiento de la ronda hídrica del río Jenesano.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia22 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity23,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia23 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity24,
						'year' =>1,
						'value' => 85,
						'description' => 'La dependencia a traves del grupo de PQRS, dio tramite a las 781 de las 776 allegadas. Igualmente se Incorporación de la información al VITAL 377 de los expedientes',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia24 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>1,
						'value' => 100,
						'description' => 'Se tramitaron 120 concesiones de agua, 11 ocupaciones de cauce, 13 aprovechamientos forestales, 3 licencias ambientales, 4 concesiones de agua subterranea, 10 permisos de vertimiento, 91 trámites de viabilidad de reservorios, 142 expedientes de Af, LA, CA, PV al VITAL',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia25 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity26,
						'year' =>1,
						'value' => 99,
						'description' => 'Se diseño un plan para el seguimiento a licencias ambientales, permisos y /o autorización otorgadas por la entidad',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia26 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity27,
						'year' =>1,
						'value' => 0.93,
						'description' => 'Dentro del plan anual se ejecutaron conjuntamente con la policia, fiscalia, entes territoriales, ejercitos operativos asi: 30 de trafico ilegal de faunay flora, productos y subproductos. 6  contra la minería ilegal. 4  de control de emisiones atmosféricas de fuentes móviles. y 25 Capacitación a entidades de control y a la comunidad en temas relacionados con el control  y vigilancia de los recursos naturales. ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia27 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity28,
						'year' =>1,
						'value' => 100,
						'description' => 'Se decidieron 20 procesos sancionatorios',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia28 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity29,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia29 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity30,
						'year' =>1,
						'value' => 85,
						'description' => 'Se fortalecieron: Secretaria General, Subdirección Administrativa y Financiera, Subdirección de Planeación, Oficina de Control Interno. Contratacion para asesorar y capacitar a los funcionarios de la S.A.F en la fase de preparación obligatoria para la Implementación de normas internacionales de contabilidad para el sector público (NICSP) - IPSAS.
					Apoyo a la adecuación de las áreas de trabajo de secretaria general  y Subdirección administrativa y financiera',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia30 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity31,
						'year' =>1,
						'value' => 1,
						'description' => 'Alquiler de equipos de sistemas para la comisión de auditoria de la CGR, apoyo a la adquisición del antivirus corporativo. Apoyo a la adquisición de equipos de computo y drone, redes eléctricas, voz y datos.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia31 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity32,
						'year' =>1,
						'value' => 3,
						'description' => 'Documento Plan de Acción cuatrienal 2016-2019. Documento Informe de Gestión 2015. Documento Informe de Gestión primer semestre 2016.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia32 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>1,
						'value' => 100,
						'description' => 'Se realizó la Auditoria de segundo seguimiento al sistema de gestión de la calidad bajo normas ISO 9001:2008 Y ntcgp 1000:2009',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia33 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity35,
						'year' =>1,
						'value' => 20,
						'description' => '20 proyectos formulados y presentados ante las fuentes de cofinanciación, 4 proyectos aprobados por FCA, uno para la vigencia 2016 por $609.869.731, 3 para la vigencia 2017 por $1.989.735.090. 3 proyetos aprobados por el DNP para vigencia 2016 por $1.210.665.926.  ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia35 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity36,
						'year' =>1,
						'value' => 24.5,
						'description' => 'Se esperaba incrementar en $488.232.793 y se alcanzo la cantidad de $1.868.857.942',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia36 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity37,
						'year' =>1,
						'value' => 100,
						'description' => 'Aunque exisitieron algunas manifestaciones de parte de los administradores territoriales para actualizar las bases catastrales de los municipios de Ciénega, Jenesano y Guateque, oficialmente no llegaron requerimientos, adicionalmente, en el caso de Jenesano el IGAC no conto en su momento con la cartograafía necesaría, para el caso de Guateque, el IGAC aun no ha podido realizar el sobrevuelo para tomar las últimas imágenes',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia37 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>1,
						'value' => 1,
						'description' => 'Se formuló el plan de capacitaciones pero no se recibieron solicitud de capacitación de parte de los entes territoriales.
					Se recibio solicitud de los municipios de Guayatá y Tenza via correo electrónico y se brindó la asesoría correspondiente',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia38 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity39,
						'year' =>1,
						'value' => 100,
						'description' => '66 Proyectos registrados y revisados, 1 Aval Tecnico Ambiental, 23 conceptos de viabilidad expedido',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia39 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity40,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia40 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity41,
						'year' =>1,
						'value' => 50,
						'description' => 'De los 6 pasos para la declaratoria Corpochivor realizó tres, de ahí en adelante depende del pronunciamiento del IAvH,la corporación radicó Los días 14 y 19 de julio de 2016   ante el Instituto Humboldt   documento sintesis para concepto previo para declaratoria de Mamapacha y Bijagual y San Cayetano, sin que al termino de la vigencia se haya tenido respuesta. ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia41 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>1,
						'value' => 100,
						'description' => 'Se realizaron 24 vistas a los municipios de Macanal, Almeida, Tibaná, La Capilla, Pachavita, Ramiriquí, Chinavita, Boyacá, Turmequé y Guayatá de acuerdo a las solicitudes realizadas por los entes territoriales para adquisición de predios en zonas de interés hídrico y se emitieron los respectivos conceptos técnicos de viabilidad, correspondiente a 650,27 hectáreas.. ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia42 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity43,
						'year' =>1,
						'value' => 2,
						'description' => 'Se radicó ante el MADS los estudios técnicos sociales y ambientales de Mamapacha y Bijagual, así como ajustes de Rabanal el día 16 de agosto de 2016 (Realizadas en comisión conjunta de páramo de rabanal).',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia43 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>1,
						'value' => 70,
						'description' => 'Se atendió el 100% de las solicitudes recibidas para visita y emisión de concepto técnico, sin embargo a ocfinanciación de áreas estratégicas no fue posible, ya que sólo el muncipio de santa maría solicitó cofinanciación a finales de diciembre y no contaba con avaluo del predio.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia44 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>1,
						'value' => 100,
						'description' => 'Se dio cumplimiento a acciones programadas en los planes de manejo de las áreas protegidas DRMI, Cristales y Castillejo o Guacheneque,  DRMI Cuchilla Negra y DRMI Rabanal',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia46 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity47,
						'year' =>1,
						'value' => 30,
						'description' => 'Se dispusieron 46 animales de  54 que ingresaron al CAVR',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia47 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity48,
						'year' =>1,
						'value' => 2,
						'description' => 'Se realizó el monitoreo al nido del Águila real de montaña (Spizaetus isidori) y adicionalmente se realiza seguimiento a la población de esta especie en las veredas Choma, Macanalito, Castañal, Rodeo, Colombia del municipio de Campohermoso.
					Se formuló PROGRAMA REGIONAL PARA LA CONSERVACION Y MANEJO DEL OSO ANDINO (Tremarctos ornatus) EN LA CORDILLERA ORIENTAL, producto de convenio con las corporaciones Guavio, Cundinamarca, Boyacá, Chivor, Orinoquía, La Macarena y Parques Nacionales de Colombia,.
					Se atendieron 10 solicitudes por conflicto de fauna silvestre en los municipios de Jenesano, Ramiriquí, Sutatenza, Campohermoso, Macanal, Pachavita y Úmbita, por afectaciones a aves silvestres, cultivos de maíz, feijoa y aves domésticas (piscos y gallinas).
					Se realizaron 3 talleres sobre conflicto entre fauna silvestre – hombre y métodos de mitigación y manejo, en los municipios de La Capilla y Úmbita.   ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia48 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia49 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity50,
						'year' =>1,
						'value' => 172.5,
						'description' => 'Se establecieron 134.25 has tipo protector, 2.5 Has agriforestales y 35.8 has en el programa apadrina un arbol',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia50 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity51,
						'year' =>1,
						'value' => 20,
						'description' => '• El establecimiento de 5 hectáreas en procesos de enriquecimiento forestal y la instalación de1.500 ml. de cercas de protección (aislamiento) en los predios de interés ambiental denominados   San Joaquín y El Porvenir  , del municipio de Tibaná, en cooperación con la Administración municipal y la Empresa de Energía de Boyacá (EBSA).
					• El establecimiento de 200 ml. de cercas de protección (aislamiento) en predio de interés hídrico denominado   Los Pinos  , ubicado en la vereda San francisco en el municipio de Chivor.
					• En el marco del Convenio Específico DHS No. 5219701 (No 013-14), suscrito ECOPETROL se realizó el establecimiento de 15 hectáreas de huertos dendroenergéticos y la instalación de 17.250 ml. de cercos de protección.
					',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia51 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity52,
						'year' =>1,
						'value' => 77.49,
						'description' => 'En el desarrollo de las actividades de mantenimiento de plantaciones forestales establecidas durante las vigencias 2014 y 2015, se realizó actividades de inventario forestal evaluándose 93 hectáreas y realizándose actividades de mantenimiento a 77,49 hectáreas, entregándose 20.148 árboles para actividades de resiembra, 19.049,5 kilos de abono orgánico y 147 kilos de correctivo',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia52 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity53,
						'year' =>1,
						'value' => 3,
						'description' => 'Se realizo el estudio para la implementación del Esquema de Retribución por Servicios Ambientales (ERSA), para la gestión de los bosques y conservación de las fuentes hídricas en la jurisdicción de Corpochivor  , la cual agrupa: 1) la estrategia de Pago por Servicios Ambiental (PSA); 2) la Estrategia BANCO2 que se desarrolla mediante Convenio No. 045-15 suscrito con CORNARE y MASBOSQUES y 3) la Estrategia REDD+ CORPOCHIVOR.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia53 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity54,
						'year' =>1,
						'value' => 7,
						'description' => 'Se desarrollaron actividades sobre  7 criterios:
					•Criterio 1: Establecimiento de las condiciones necesarias para la ordenación forestal sostenible: Implementación proyecto FCA Gobernanza Forestal.
					•Criterio 2: Seguridad de los recursos forestales: Programa de monitoreo de bosques y áreas de aptitud forestal y Sistema de Difusión de datos GEONET Cast. 
					•Criterio 3: Estado y salud actual del ecosistema forestal: Análisis de la dinámica de la Deforestación en la jurisdicción de Corpochivor 1990–2014.
					•Criterio 4: Producción forestal sostenible: Investigación y publicación: Productos Forestales no Maderables de CORPOCHIVOR,   Una mirada a los regalos del bosque  .
					•Criterio 5: Conservación de la diversidad biológica en los ecosistemas forestales: Análisis florístico y estructural de la red de 16 parcelas forestal permanentes.
					•Criterio 6: Suelos y recursos hídricos: Esquema de Retribución por Servicios Ambientales (ERSA)          
					•Criterio 7: Aspectos sociales, culturales y económicos: Esquema de Retribución por Servicios Ambientales (ERSA)       

					',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia54 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia55 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity56,
						'year' =>1,
						'value' => 100,
						'description' => 'Se realizaron 7 visitas técnicas para atender solicitudes de permisos de vertimiento en 6 municipios de la jurisdicción.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia56 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>1,
						'value' => 100,
						'description' => 'Se brindo asesoría técnica a los prestadores de alcantarillado sobre actualización de PSMVs',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia57 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity58,
						'year' =>1,
						'value' => 100,
						'description' => 'Se realizo el cargue de un permiso de vertimiento al SIRH',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia58 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>1,
						'value' => 100,
						'description' => 'Se liquidaron 143 usuarios sujetos al cobro de la tasa retributiva',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia59 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity60,
						'year' =>1,
						'value' => 5,
						'description' => 'Se evaluo el cumplimiento de la meta quinquenallograndose una reducción de un 5%',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia60 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity61,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia61 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity62,
						'year' =>1,
						'value' => 100,
						'description' => 'Se realizaron 169 visitas técnicas para atender solicitudes de concesiones de agua superficial en los 25 municipios de la jurisdicción.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia62 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity63,
						'year' =>1,
						'value' => 100,
						'description' => 'Se realizaron 6 visitas técnicas para atender solicitudes de ocupaciones de cauce en los municipios de Guateque, Sutatenza, Guayatá, Macanal, Santa María y San Luis de Gaceno, dentro del Proyecto Vial Transversal Sisga – Secreto – Agua Clara.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia63 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity64,
						'year' =>1,
						'value' => 100,
						'description' => 'Cargue y validación de 46 permisos de concesión de aguas al Sistema de Información del Recurso Hídrico – SIRH y 651 parámetros de calidad analizados en los 35 puntos de la Red Hídrica Institucional.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia64 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity65,
						'year' =>1,
						'value' => 100,
						'description' => 'En proceso de evaluación 4 Programas de Uso Eficiente y Ahorro del Agua',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia65 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity66,
						'year' =>1,
						'value' => 100,
						'description' => 'Se liquidaron 1628 usuarios sujetos al cobro de la tasa por uso',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia66 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity67,
						'year' =>1,
						'value' => 100,
						'description' => '  Análisis de 80 muestras de agua cruda, potable y residual.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia67 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity68,
						'year' =>1,
						'value' => 100,
						'description' => '  Análisis de 32 muestras de suelo.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia68 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity69,
						'year' =>1,
						'value' => 100,
						'description' => 'Se analizaron 35 muestras correspondientes a los puntos de la red hídrica de monitoreo',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia69 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity70,
						'year' =>1,
						'value' => 100,
						'description' => 'Se atendieron 63 solicitudes de viabilidad de RESERVORIOS en 11 municipios de la jurisdicción.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia70 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity71,
						'year' =>1,
						'value' => 100,
						'description' => 'Asistencia y participación a 23 Talleres dirigidos a los usuarios de Juntas de Acueducto con el fin de brindar acompañamiento y asesoría sobre el uso eficiente y ahorro del agua.
					Se adelantó el inventario de Acueductos existentes dentro del DRMI de Cristales, Castillejo y Guachaneque, logrando encontrar usuarios del recurso hídrico ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia71 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia72 = DB::getPdo()->lastInsertId(); 






					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity79,
						'year' =>1,
						'value' => 100,
						'description' => 'Se finalizó satisfactoriamente el establecimiento de los módulos de consumo de agua.
					Se efectuo evaluación y seguimiento al 100% de las solicitudes radicadas, respecto a PUEAA municipales, veredales e individuales.
					Se atendieron 57 peticiones, quejas, reclamos y sugerencias presentadas por los usuarios de la jurisdicción respecto al cobro de la Tasa por Utilización de Agua  ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia79 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity80,
						'year' =>1,
						'value' => 100,
						'description' => 'Cargue mensual de concesiones de agua superficiales y subterráneas, permisos de vertimientos, planes de saneamiento y manejo de vertimientos, programas de uso eficiente y ahorro del agua y las campañas de la red hídrica al nodo regional del Sistema de Información del Recurso Hídrico – SIRH, además de realizar 34 visitas de inspección ocular con el fin de levantar la información requerida o corroborar los datos existentes en el aplicativo',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia80 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity82,
						'year' =>1,
						'value' => 100,
						'description' => 'Se atendieron 69 peticiones, quejas, reclamos y solicitudes presentadas por los usuarios de la jurisdicción respecto al cobro de la Tasa Retributiva.
					Se elaboro estudio técnico que establece las condiciones actuales de los objetivos de calidad, las variables, tramos y limites permisibles que deben sufrir modificación.
					Se efectuo evaluación y seguimiento al 100% de las solicitudes radicadas, respecto a PSMV municipales.
					',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia82 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity85,
						'year' =>1,
						'value' => 100,
						'description' => 'Se brindo la asesoría técnica a usuarios frente a la construcción de unidades sépticas para el tratamiento de aguas residuales en el municipio de Ramiriquí.
					Se suscribio convenio con el Municipio de Chinavita por un valor total de $131.862.066 de los cuales el municipio aporto un $54.063.447 y la Corporación un valor de $77.798.619, para la construcción de obras que maximicen el funcionamiento de la PTAR.
					',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia85 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity86,
						'year' =>1,
						'value' => 100,
						'description' => 'Se mantuvo la acreditación del Laboratorio y de 30 variables ante el IDEAM, presentando las respectivas pruebas de evaluación y desempeño.
					Se mantuvo la certificación de PICCAP ante el Instituto Nacional de Salud.
					Se recibió certificación de participación al laboratorio de Suelos de CORPOCHIVOR al CALS 2016.
					Se mantuvieron las variables implementadas y acreditadas ante el IDEAM.
					Se analizaron 273 muestras de agua solicitadas a traves del Laboratorio.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia86 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity87,
						'year' =>1,
						'value' => 100,
						'description' => 'Se operaron las cuatro (4) estaciones climaticas, además recibieron mantenimiento en la infraestructura fisica,
					Se operaron cuatro (4) estaciones climaticas, además recibieron mantenimiento en la infraestructura fisica, por un valor de$14,701,478
					Se culminaron las 4 redes hídricas de monitoreo, las muestras fueron analizadas por el Laboratorio para el respectivo calculo del ICA.
					Se realizo convocatoria, capacitación y análisis a 17 municipios de los 25, análizando 23 fuentes hídricas abastecedoras de acueducto urbanos, lo cual construibute al calculo del ICAB. ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia87 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity88,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia88 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity89,
						'year' =>1,
						'value' => 1,
						'description' => 'Asesoría y acompañamiento ambiental en las cadenas de café, cacao, frutales y ganadería ecológica, 
					Implementación BPA con FRUTIMARLE (Jenesano y Tibaná); manejo orgánico en abonos y pesticidas (40 usuarios)
					Implementación de cercas vivas y barreras rompevientos en ganadería ecológica y café
					Establecimiento de lombricultivos PROAGROCHIVOR para 16 asociados.
					Apoyo y asesoría ambiental a la Asociación de Uchuveros de Ramiriquí ASPROAGRO para aprovechamiento del recurso hídrico mediante la cosecha de agua y posterior riego por goteo.   
					Asesoría y acompañamiento ambiental en sistemas agroforestales de café y frutales (ASOLECHEROS Viracachá, FRUTIMARLE Jenesano, ASOFRUTUR- Turmequé)
					Apoyo a sistema frutipastoril en el municipio de Viracachá - ASOLECHEROS (6 parcelas piloto)
					Implementación de SSP con ASOGASUT (7 USUARIOS) Y Úmbita, Chinavita, Guateque, Campohermoso (5 solicitudes particulares).',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia89 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity90,
						'year' =>1,
						'value' => 2,
						'description' => ' 1) Asesoría y acompañamiento a 8 organizaciones de artesanos en temas de buenas prácticas de aprovechamiento,apoyo en la elaboración de línea de producto de diseño. Apoyó en la participación de las ferias FIMA, EXPOBOYACÁ, EXPOARTESANÍAS. 
					Adecuación de senderos interpretativos, formación individual en guianza turística y sensibilización de la comunidad. Suscripción de 5 convenios interadministrativos con municipios para la adecuación de senderos y un convenio con la  UPTC para la formación de guías turísticos especializados.
					1  contrato de asociación  para la  identificación y caracterización de 5 senderos, sensibilización y socialización del proyecto y sus resultados. 
					',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia90 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity91,
						'year' =>1,
						'value' => 25,
						'description' => 'Se identificaron dos productos: Café porque es un producto representatico en 14 municipios aunque no se cultiva en grandes extensiones presenta características especiales debido a sus condiciones  agroecológicas.
					Artesanías: por tradición se ha venido desarrollando ancestralmente ésta práctica y representa un rasgo de identidad del territorio.
					Se realizó acercamiento con la Oficina de Negocios Verdes del MADS para el apoyo en la implementación del Plan Nacional de Negocios Verdes. Así mismo, se realizó 6 socializaciones con comunidades y organizaciones productoras de la Estrategias de Negocios Verdes, se realizó dos reuniones con delegados de la oficina de negocios verdes, se formuló, y se gestionó un proyecto para la implementación del plan regional de negocios verdes el cual se encuentra viabilizado por el FCA.
					Participación en cuatro eventos feriales (FIMA - EXPOESPECIALES - EXPOBOYACA - EXPOARTESANIAS)
					',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia91 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity92,
						'year' =>1,
						'value' => 1,
						'description' => 'Elaboración del docuemento propuesta de conformación de la red de empresas sostenibles.
					Artesanías: Identificación de los impactos ambientales en las fases del proceso de los ocho (8) municipios, con el mejoramiento de las actividades de produccion desarrolladas por cada artesano o por cada organizaciòn. 
					Elaboración  de formatos encuesta y Realización de ecobalances a 9 organizaciones potenciales en negocios verdes, en donde se contemplaban aspectos ambientales, económicos y sociales.
					Se realizaron consultas sobre la incorporación de sellos y avales de confianza, se determinó la estrategia para el reconocmiento a usuariospara al implementación y fortalecimiento de modelos de desarrollo sostenible. 
					Se desarrollaron tres giras internas a la organización CANNOR en donde participaron representantes de 14 organizaciones de café para conocer la experiencia de esta Corporación. Apoyo a productores de café en la participaciòn de giras de intercambio de experiencias exitosas en producción, asociatividad y comercialización en el municipio de Planadas (Tolima) y Viotá (Cundinamarca). 
					 ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia92 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity93,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia93 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity94,
						'year' =>1,
						'value' => 100,
						'description' => 'Se brinda Apoyo y asesoría a los municipios de Santa María, Ramiriquí, Garagoa, Campohermoso, Turmequé, Úmbita y Chinavita en los procesos de optimización o construcción de sistemas de aprovechamiento, transformación y/o disposición de residuos sólidos ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia94 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity95,
						'year' =>1,
						'value' => 25,
						'description' => '185 Socializaciones Comparendo Ambiental  - Separación en la Fuente
					25 Acompañamientos PGIRS Municipales',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia95 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity96,
						'year' =>1,
						'value' => 1,
						'description' => 'Planteamiento de una alternativa, como proyecto piloto encaminado al manejo adecuado de residuos comunes en el área rural de los municipios de Guateque y Garagoa.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia96 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity97,
						'year' =>1,
						'value' => 1,
						'description' => 'Se priorizó el sector Hospitalario con el programa Hospital Sostenible; sin embargo se brinda acompañamiento a todos los sectores productivos;  se apoya el sector institucional con el programa   Instituciones Educativas Amigables con el Ambiente  . FCA, contratan en el plan de medios 12 puntos ecologicos',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia97 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity98,
						'year' =>1,
						'value' => 25,
						'description' => 'Se brinda acompañamiento a los sectores productivos y empresas gestoras en acciones encaminadas a la gestión adecuada de residuos especiales sujetos de planes de gestión de devolución de productos Posconsumo y Manejo seguro de Plaguicidas, jornadas de recolección de recipientes y empaques vacíos de plaguicidas en zona rural, arrojando un estimado de 24  toneladas de residuos recolectados y gestionados adecuadamente.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia98 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity99,
						'year' =>1,
						'value' => 25,
						'description' => 'Se realizaron acciones en los 25 municipios, se han identificado 27 puntos criticos de disposición de residuos sólidos en zona rural.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia99 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity100,
						'year' =>1,
						'value' => 1,
						'description' => 'No se identificaron nuevos generadores, Las bases de datos se mantienen actualizadas,  la Actalización del PGIRESPEL se ha establecido diagnostico por sector.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia100 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity101,
						'year' =>1,
						'value' => 1,
						'description' => 'Se apoyó al sector Hospitalario  a través del Programa Hospital Sostenible mediante convenio interadministrativo 006-2016 suscrito con Corpoboyacá y la Corporación Ecoeficiencia',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia101 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity102,
						'year' =>1,
						'value' => 100,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia102 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity103,
						'year' =>1,
						'value' => 2,
						'description' => 'Se realizaron setenta y nueve (79) acompañamientos a los consejos municipales de Gestión del Riesgo de Desastres.
					Con el apoyo de la Oficina de Asistencia para catástrofes del Gobierno de los EE.UU para América Latina y el Caribe OFDA/LAC y con la finalidad de fortalecer los centros de reacción inmediata Bomberos y Defensa Civil de los Municipios de la jurisdicción, se realizó curso de Bomberos Forestales para prevenir y controlar los incendios durante la temporada de verano',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia103 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity104,
						'year' =>1,
						'value' => 1,
						'description' => '
					Se apoyó al municipio de Somondoco con la suscripción de Convenio Interadministrativo N° 008 de 2016 es cuyo objeto es: AUNAR ESFUERZOS PARA COFINANCIAR OBRAS DE MITIGACIÓN DEL RIESGO EN LA VEREDA CABRERAS DEL MUNICIPIO DE SOMONDOCO, SECTOR AFECTADO POR PROCESOS DE INESTABILIDAD PRODUCTO DE LAS ALTAS PRECIPITACIONES Y ACCIONES EROSIVAS DEL RIO SUNUBA. Valor Total: $ 100.237.111 para la construcción de obras de reducción y mitigación del riesgo
					',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia104 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity105,
						'year' =>1,
						'value' => 1,
						'description' => 'Para Disminuir los riesgos por desbordamientos, se realizó 
					Campaña de limpieza en la Quebrada la Rosa en Jenesano. 
					48 Participantes.  
					Recolección de 1 Tn. de residuos.
					',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia105 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity106,
						'year' =>1,
						'value' => 100,
						'description' => 'Se atendió el 100% de las solicitudes realizadas por los habitantes de la jurisdicción para la evaluación de afectaciones generadas por fenómenos naturales y antrópicos mediante salidas de campo, emitiéndose ciento ocho  (108) conceptos técnicos con recomendaciones de manejo. De las cuales se realizó la valoración de Doce (12) afectaciones y emisión de concepto técnico por incendios Forestales ocurridos en los municipios de Chivor, Guayatá, Tenza, Turmequé y Nuevo Colón. Donde se observó que las causas principales de su origen son desconocidas.

					',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia106 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity107,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia107 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity1,
						'year' =>2,
						'value' => 94,
						'description' => 'Formulación y ejecución de un Plan Anual De Educación Ambiental: -en coordinación con con 7 proyectos se realizaron actividades lúdicas ambientales, talleres y sensibilizaciones.
					- celebración de las fechas ambientales
					-Se consolidaron los clubes Corpochivatos, 76 clubes activos
					-desarrollo del  11° Encuentro Chivatos Corpochivatos 2017
					-Realizacón de campañas  “Los Chivatos se la juegan por el ambiente”,    Campaña Abraza tu Tierra  ,   SensibilizArte” por el Ambiente (dáctilopintura), 
					-Desarrollo de los concursos lúdico ambientales, como 14° Concurso de Cuento, Copla y Poesía Ecológica y Ambiental; V Olimpiadas del Conocimiento Ambiental, así como las Preguntas para todas las categorías; 14° Encuentro de Música  Campesina, Ambiental y Ecológica;',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia108 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity2,
						'year' =>2,
						'value' => 2,
						'description' => 'Participación y apoyo a la    Promoción el maíz  con enfoque en educación ambiental,  seguridad alimentaria y la identidad agroambiental en la jurisdicción de CORPOCHIVOR.  , en el municipio de Ramiriquí. 
					Realiza del Bazar Ambiental Rescate de Semillas Ancestrales, con la I.E. Valle de Tenza  municipio de Guateque
					Se participó con un stand en el Festival del Retorno, Cultural, Comercial, Turístico y Gastronómico 
					Se realizó día del Boyacensismo 
					Actividades enmarcadas en el Rescate de tradiciones ancestrales, indagación y compilación en torno a las prácticas del Café, en los municipios de Guayatá, Somondoco, Macanal y Sutatenza. Y en torno a los frutales, en los municipios de Jenesano, Úmbita, Tibaná, Nuevo Colón y Turmequé.   
					',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia109 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>2,
						'value' => 1,
						'description' => 'Seguimiento del año 2016 de la práctica del maíz',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia110 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>2,
						'value' => 97,
						'description' => 'Apoyo a: 25 CIDEA.  50  PRAEs. 21  PROCEDAS. 17 proyectos de grado. 2. PRAU

					',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia111 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity5,
						'year' =>2,
						'value' => 100,
						'description' => 'Se formuló y se ejecutó el Plan de Medios Institucional, el cual cuenta con la articulación de todos los proyectos institucionales en el compromiso de visibilizar las actividades misionales y el acercamiento con las comunidades a través de los diferentes medios e instancias de comunicación, así mismo se contrató la ejecución de este plan de medios',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia112 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity6,
						'year' =>2,
						'value' => 4,
						'description' => 'Formuladas y en ejecución las estrategias  Comunicación Interna, Comunicación Externa, Comunicación Digital, Comunicación Comunitaria y Estrategia de Eventos y Protocolo; obetniendo resultados como: • Elaboración y difusión de 126 Comunicados de Prensa, logrando obtener un total de 418 publicaciones en medios locales, regionales y nacionales, gestionadas por Free Press, sin generar costo alguno a la Corporación.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia113 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity7,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia114 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity9,
						'year' =>2,
						'value' => 99.67,
						'description' => '• 100% ejecución  proyecto   Aprovechamiento de las tecnologías de información y comunicaciones e implementación de la Estrategia Gobierno en Línea en la gestión pública ambiental de la Jurisdicción de la Corporación Autónoma Regional de Chivor - Corpochivor-Fase I”.
					• 100% Definido el Modelo de Seguridad y Privacidad de la Información (MSPI) de Corpochivor 
					• 110 Funcionarios Sensibilizados en temas de seguridad de la información
					• 27 funcionarios certificados en curso de fundamentos de tecnologías de información, seguridad de la información y norma ISO 27001  
					• Estrategia Gobierno en Línea (GEL): TIC para Gobierno Abierto 97%;  TIC para Servicios 94,50%; TIC para la Gestión 82%, Seguridad y Privacidad de la Información 80%
					• Sistema de Información Administrativo y Financiero – SIAF (SAE, SAI, PERNO, LIMAY, OPGET, PREDIS, FACTURACION, PERNO) con soporte especializado y módulos actualizados según marcos normativos
					• Renovación de licenciamiento soporte Oracle (base de datos)
					• Desarrollo del aplicativo   corpochivor   para dispositivos móviles con sistema operativo Android',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia116 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>2,
						'value' => 100,
						'description' => '• Participación a diez (10) comités técnicos en virtud del convenio con la Gobernación de Boyacá, CARS e IGAC denominado: Investigación aplicada a la modelación del territorio a partir del análisis geomorfológico del departamento de Boyacá 
					• Integración de treinta y siente (37) planchas escala 1:25000 (cobertura vegetal, relieve, superficies de agua) en el SIAT PC
					• Se identificaron y definieron la estructura de los objetos geográficos ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia117 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity11,
						'year' =>2,
						'value' => 100,
						'description' => '100% de implementación, migración de (45) shapes y actualización del Siatweb 3.0 http://192.168.254.84/i3geo/ (local)  http://34.215.95.68/i3geo (web).
					25 funcionarios de Corpochivor capacitados en temas de Sistemas de Información Geográfico SIG.
					Taller SIAT a 10 municipios de 25 convocados con la participación de 14 funcionarios.
					Orientación y entrega de información geográfica gestionada (cartografía base 1:25.000) por la corporación y capacitación sobre el uso y manejo de herramientas SIG tanto en plataforma de escritorio como en línea (Siat Web 3.0 – geo portal IGAC) a las 25 administraciones municipales (convenios interadministrativos SIAT) con la participación de 57 profesionales. 
					Asistencia técnica y capacitación a usuarios internos de Coralina en el manejo y uso del SIAT WEB Seaflower en virtud al convenio interadministrativo de transferencia tecnológica. ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia118 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity12,
						'year' =>2,
						'value' => 100,
						'description' => 'Se consolidó la información generada por los subsistemas del SIAC aplicables a la jurisdicción.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia119 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity13,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia120 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity14,
						'year' =>2,
						'value' => 97,
						'description' => 'PLAN DE ORDENACIÓN Y MANEJO CUENCA RÍO GARAGOA
					- 92% de productos aprobados por la Comisión Conjunta. Ejecución y aprobación de actividades y productos de las fases de diagnóstico y prospectiva y zonificación. 
					- Inicio de ejecución de actividades fase de formulación. 
					PLAN DE ORDENACIÓN Y MANEJO CUENCA RÍO GUAVIO
					- Conformación de consejo de cuenca
					- Ejecución de las actividades de las fases de diagnóstico e inicio con las de prospectiva y zonificación. 



					',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia121 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity15,
						'year' =>2,
						'value' => 1,
						'description' => 'SEGUIMIENTO A LA EJECUCIÓN DEL POMCA RÍO GARAGOA 
					- Ejecución financiera 114% (proyectos CORPOCHIVOR)
					- Inversión en 19 proyectos distribuidos en 5 programas
					',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia122 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity16,
						'year' =>2,
						'value' => 25,
						'description' => 'ASESORÍA EN REVISIÓN Y AJUSTE PLANES DE ORDENAMIENTO TERRITORIAL
					- Taller de Ordenamiento Territorial realizado en conjunto con el MADS y Gobernación de Boyacá
					- Reuniones de asesoría y/o revisión previa de documentos a los municipios de Ventaquemada, Tibaná, Jenesano, Ramiriquí, Ciénega, Tenza, Almeida, Santa María y Campohermoso
					',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia123 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity17,
						'year' =>2,
						'value' => 100,
						'description' => '* Se han atendido el 100% de los requerimientos de los municipios. 
					* Se concertó Asuntos Ambientales del PBOT con el municipio de Ramiriquí',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia124 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity18,
						'year' =>2,
						'value' => 25,
						'description' => '* Se realizó seguimiento a los asusntos ambientales concertados con los 25 municipios de la jurisdicción.  
					',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia125 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity19,
						'year' =>2,
						'value' => 7,
						'description' => ' Contratación de consultoría para la  elaboración de estudios de riesgos en la zona urbana del municipio de La Capilla',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia126 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity20,
						'year' =>2,
						'value' => 3,
						'description' => '
					- 7 escenarios de riesgo por fenómenos de remoción en masa
					- 3 escenarios de riesgo por inundación
					',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia127 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>2,
						'value' => 1,
						'description' => ' Formulación de guía para la incorporación del cambio climático en los POT´s, e implementación en 2 municipios piloto: Ciénega y Santa María.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia128 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity23,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia130 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity24,
						'year' =>2,
						'value' => 85,
						'description' => 'Se recibió un total de 2179, de los cuales 435 corresponden a Petición de Infracciones Ambientales y 1744 a Peticiones (de Consulta, Información, documentos, solicitud de permisos ambientales); cumpliendo el 100% del 85% de la Meta establecida en el POA',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia131 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>2,
						'value' => 100,
						'description' => 'Se atendieron las siguientes solicitudes: Concesión de Aguas Superficial 94, Ocupación de cauce 7, aprovechamiento forestal 14, concesiones de agua subterranea 1, licencia Ambienta 2, permiso de vertimiento 21, viabilidad de reservorio 13.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia132 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity26,
						'year' =>2,
						'value' => 100,
						'description' => 'Se  dio cumplimiento al  plan de seguimiento programado',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia133 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity27,
						'year' =>2,
						'value' => 1,
						'description' => '30 operativos del control de Flora y Fauna
					7 operativos contra mineria ilegal
					4 Operativos de control de emisiones atmosféricas de fuentes móviles.
					 25 capacitaciones a las entidades de control y a la comunidad en temas relacionados con el control  y vigilancia de los recursos naturales, cumpliendo con la meta propuesta',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia134 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity28,
						'year' =>2,
						'value' => 100,
						'description' => 'Se profirieron 12 resoluciones de sanción dentro de procesos sancionatorios, superando la meta propuesta',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia135 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity29,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia136 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity30,
						'year' =>2,
						'value' => 100,
						'description' => 'Se fortaleció las áreas de secretaria general con recursos para contratación de abogado procesos judiciales, apoyo técnico atención al usuario, correspondencia; la S.A.F. se apoyo para contratación de Asesor externo, grupo de contratación, cobro coactivo, Seguridad y salud en el trabajo, técnico apoyo presupuesto, Cobro coactivo, en S.P.O.A.T, Apoyo Técnico mantenimiento equipos; notificadores; Apoyo al Banco de Proyectos, coordinador proyecto 105 y Banco de Proyectos; Oficina de Control Interno con 2 profesionales, y un Apoyo jurídico Pasante. 
					Se apoyó la adecuación de los puestos de trabajo de la Secretaría General, Subdirección de Gestión Ambiental y la Subdirección Administrativa y Financiera, adecuación del cuarto lógico con la instalación de aire acondicionado, mantenimiento de la planta eléctrica y las Ups.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia137 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity31,
						'year' =>2,
						'value' => 1,
						'description' => 'Se fortaleció al 100% las solicitudes realizadas por las diferentes dependencias con bienes, enseres, redes de voz, datos y antivirus',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia138 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity32,
						'year' =>2,
						'value' => 2,
						'description' => 'Se estructuró y público el informe de gestión de la vigencia 2016, e informe de gestión  primer semestre de 2017. ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia139 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>2,
						'value' => 100,
						'description' => 'Se realizó el proceso de capacitación y formación del equipo de auditores internos en la norma ISO 9001:2015',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia140 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity34,
						'year' =>2,
						'value' => 1,
						'description' => 'Se realizó el proceso de migración del Sistema Integrado de Gestión de la Norma ISO 9001:2008 a la ISO 9001:2015',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia141 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity35,
						'year' =>2,
						'value' => 14,
						'description' => 'Se estructuraron y formularon 14 proyectos distribuidos así: 3  proyectos presentados al FCA para acceder a  los recursos de inversión de la vigencia 2017, 1 proyecto al FCA para acceder a los recursos de funcionamiento de la vigencia 2017, 5 proyectos presentados al FCA para acceder a los recursos de inversión de la vigencia 2018, 2 proyectos presentados para acceder a los recursos del FONAM y 1 para acceder a los recursos del PGN, 1 proyecto presentado a una convocatoria de Google Colombia y 1 para buscar la forma de acceder a los recursos Euro clima.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia142 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity36,
						'year' =>2,
						'value' => 18.9,
						'description' => 'Con los proyectos aprobados para la vigencia 2017, se logró incrementar los recursos de la corporación en la suma de $2.266.612.273, lo que corresponde a un incremento del 18.94%.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia143 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity37,
						'year' =>2,
						'value' => 100,
						'description' => '5. Se apoyó el proceso de actualización catastral del municipio de Jenesano, para lo cual se suscribió el convenio interadministrativo No. 400428 (002-17) entre el municipio de Jenesano, el IGAC y CORPOCHIVOR, con una cofinanciación de parte de la corporación de $60.000.000',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia144 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>2,
						'value' => 1,
						'description' => 'Se estructuró y formulo el plan capacitación para el fortalecimiento de la gestión ambiental interinstitucional.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia145 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity39,
						'year' =>2,
						'value' => 100,
						'description' => 'Se registraron 48 proyectos en la base de datos del Banco de proyectos de la institución, los cuales fueron revisados y evaluados obteniendo los siguientes resultado: 5 proyectos fueron presentados al FCA para acceder a los recursos de inversión de la vigencia 2018, de los cuales aprobaron 3, se presentaron 3 proyectos al PGN los cuales no fueron aprobados, 1 proyecto presentado al FONAM el cual no fue aprobado, con base en los conceptos técnicos, se expidieron 17 certificados de viabilidad, 2 Avales Técnico Ambiental, proyectos devueltos a los proponentes 8 para que realizaran los correspondientes ajustes, 12 proyectos se encuentran en evaluación en las áreas técnicas correspondientes.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia146 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity40,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia147 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity41,
						'year' =>2,
						'value' => 100,
						'description' => 'Se dio inicio a la fase de preparación de la ruta de declaratoria de la Cuchilla de Mesa Alta, la cual se ubica en los municipios de Nuevo Colón y Tibaná y el Varal cuchilla entre los Municipios de Macanal y Garagoa.  Igualmente, se avanzó en los estudios bióticos y sociales',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia148 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>2,
						'value' => 95,
						'description' => 'Documento tecnico   áreas de importancia estrategica de la jurisdicicon de corpochivor   con su respectiva cartografia',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia149 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>2,
						'value' => 100,
						'description' => 'Se atendieron 35 solicitudes para evaluar viabilidad para adquisición de áreas estratégicas en los municipios de Sutatenza, Boyacá, Macanal, Ramiriquí, Almeida, Santa María, Viracachá y Ventaquemada.
					Se suscribió convenio interadministrativo con el municipio de Almeida para la compra de predio de interés hidrico',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia151 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity45,
						'year' =>2,
						'value' => 0.8,
						'description' => 'Se actualizó actividades, programas, metas y presupuesto del plan de manejo del DRMI Páramo de Rabanal
					Se Gestionó recursos financieros con la Gobernación de Boyacá y la Vinculación al Proyecto GEF Sinap Andes del Norte, para desarrollar los planes de manejo de los DRMI Mamapacha-Bijagua y San Cayetano
					Se inició con la implementación de una estrategia de sensibilización ambiental para la población urbana y rural sobre la importancia de los servicios ecosistémicos del páramo de cristales, castillejo o guachaneque y cuchillas negra y guanaque para el entorno regional.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia152 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>2,
						'value' => 100,
						'description' => '
					Se adelantó y consolidó avance de implementación del PMA del DRMI Cristales, Castillejo o Guachaneque en los municipios de Pachavita, Úmbita, Turmequé y La Capilla
					Se Implementa proyecto PARAMOS: BIODIVERSIDAD Y RECURSOS HIDRICOS EN LOS ANDES DEL NORTE- Nodo Rabanal 
					se ha desarrollado la implementación del plan de manejo del área protegida de Cristales Castillejo o Guachaneque 
					Para el DRMI Cuchillas Negra y Guanaque se desarrollaron actividades como: la identificación de especies de fauna doméstica y silvestre que generan conflictos con el hombre, mediante la ejecución de talleres comunitarios y la socialización en los 4 municipios sobre la importancia del DRMI',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia153 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity47,
						'year' =>2,
						'value' => 100,
						'description' => 'Se realizó dieciocho (18) visitas, más de 800 visitantes ingresaron al CAVR.
					Se atendieron 102 individuos de fauna silvestre, desde el año 2012 es el número más alto de animales al CAVR (ver tabla 1), de estos se liberaron y rehabilitaron setenta (70), que también corresponde a récord de liberación en la historia del CAVR; se sobrepasó el porcentaje de liberación en un 69% debido a mejores técnicas de prevención en bioseguridad que evitan las muertes tempranas en el centro',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia154 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity48,
						'year' =>2,
						'value' => 2,
						'description' => 'Se atendieron 6 solicitudes por conflicto de fauna silvestre en los municipios de Umbita, Garagoa y Jenesano por reporte de zorros, serpientes y abejas
					Con apoyo del Instituto Nacional de Salud, se realizó capacitación al personal de la Corporación, policía ambiental y funcionarios del hospital Regional del Valle de Tenza, sobre la identificación y manejo de ofidios; y talleres con comunidad rural de los municipios de Macanal  y Umbita acerca de Programa de conservación de ofidios, Serpientes de la región Andina, Discernimiento de las serpientes venenosas, además de Prevención y manejo prehospitalario del accidente OFÍDICO.
					Reunión conjunta entre CORPOCHIVOR, ICA, Procuraduría #32 Agraria, Departamental y Secretaria de Salud con alcaldías de Santa María y San Lis de Gaceno a pobladores rurales y urbanos sobre Caracol Africano, disposición final, recolección y sensibilización. 
					4 Capacitaciones sobre Caracol Africano a estudiantes del colegio de santa maría y a docentes rurales y urbanos de las diferentes instituciones y 4 jornadas de recolección de caracol africano.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia155 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia156 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity50,
						'year' =>2,
						'value' => 210,
						'description' => '• Se realizó producción de material vegetal de 321.650 plántulas. 
					• Establecimiento de 168 hectáreas en sistemas forestales de tipo protector y 13 hectáreas en sistemas agroforestales; y 32 Ha Mediante el Programa Institucional Apadrina un Árbol
					• Realización de 60 Talleres y Conversatorios de   BOSQUES Y GOBERNANZA FORESTAL   para socialización de las actividades del Proyecto 202 e implementación del Esquema de Retribución por Servicios 
					Ambientales (ERSA) y Mecanismo REDD 
					• Se editó nuevo diseño del documento PGOF (Libro completo y resumen), con ISBN 978-958-5434-88-2 publicado en el Portal Forestal
					• A través de la Oficina  de Comunicaciones se generaron las siguientes ediciones de material divulgativo: 2 videos de BANCO2; 3 Vallas Pubicitarias de viveros y 1 valla Publicitaria deforestación',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia157 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity51,
						'year' =>2,
						'value' => 1311.6,
						'description' => 'Se intervinieron 4.6 hectáreas en sistemas activos de restauración ecológica en áreas priorizadas de interés hídrico y forestal a traves del programa UMA y 18 hectareas mediante el  Convenio Interadministrativo No. 2017-006 (No. 005-17).
					Se realizó Instalación 14.434 cercas de protección en áreas priorizadas de interés hídrico y forestal, correspondientes a inducir procesos de restauración en 1.289 hectáreas.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia158 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity52,
						'year' =>2,
						'value' => 219.49,
						'description' => 'Se realizó actividades de inventario forestal evaluándose 604 hectáreas y realizándose actividades de mantenimiento a 292 hectáreas: 15.6 hectareas plantaciones 2012,  28.5 hectareas plantaciones 2013,   35,2 hectareas plantaciones 2014,  82.7 hectareas plantaciones 2015 y  130,2  hectareas plantaciones 2016.  ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia159 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity53,
						'year' =>2,
						'value' => 3,
						'description' => '• Diseño e implementación del Esquema de Retribución por Servicios Ambientales (ERSA) y Mecanismo REDD
					• A través del PORTAL FORESTAL dispuesto en la web de CORPOCHIVOR, se registraron 478 solicitudes de las cuales se priorizaron y atendieron 425 mediante el desarrollo de sistemas forestales.
					• Se formularon y se vienen desarrollando 2 proyectos avalados por el Fondo de Compensación Ambiental para la implementación de actividades de restauración ecológica y la implementación del esquema ERSA y 1 Proyecto de restauración ecológica a través de Convenio No. 005-17 suscrito con Corpoboyacá, gestionándose recursos por el valor de $1.690.126.256',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia160 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity54,
						'year' =>2,
						'value' => 7,
						'description' => 'En el proceso de implementación y seguimiento multitemporal de las directrices, estrategias y lineamientos del PGOF, se recopilo información y realizó evaluación de los 7 criterios y 26 indicadores del PGOF',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia161 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia162 = DB::getPdo()->lastInsertId(); 





					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity61,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia168 = DB::getPdo()->lastInsertId(); 










					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia179 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity73,
						'year' =>2,
						'value' => 30,
						'description' => 'Se  ejecutaron  las 14 actividades program de implementación establecidos en el Plan de Manejo Ambiental de Acuiferos PMAA Subcuenca Teatinos: 
					1. Programas de educación sobre prácticas agrícolas adecuadas.
					2. Diseñar, revisar y hacer seguimiento a construcción de nuevos pozos sépticos en las áreas rurales
					3. Formular, ejecutar y hacer seguimiento a programa de manejo de agroquímicos y disposición final de residuos a nivel rural.
					4. Seguimiento a la adquisición de predios en zonas de recarga hídrica. 
					5. Realizar jornadas de reforestación en zonas de avanzada erosión. 
					6. Recuperación y siembra de cobertura vegetal en áreas especiales de recarga de acuíferos.  
					7. Revisión del estado de los pozos construidos y sellamiento de lo que se reporten en mal estado, para impedir la infiltración o interconexión hidráulica con los acuíferos.
					8. Programa de sensibilización: charlas y talleres con las comunidades para generar una participación ciudadana en la protección del recurso hídrico.              
					9. Adelantar la sensibilización de los pobladores del sector rural sobre las necesidades de conservar las zonas de páramo, controlando la expansión de la frontera agrícola.
					10. Implementación de prácticas de residuos sólidos en forma individual o en proyectos comunales.
					11. Capacitación en mejores prácticas ganaderas para evitar sobrepastoreo y otras prácticas que traen como consecuencia la erosión  y degradación de los suelos.
					12. Programa de ahorro y cuidado del agua: Involucrar activamente a los centros educativos en la construcción e implementación de una cultura de cuidado del agua a nivel regional, desde una visión motivadora y práctica.
					13. Formular, diseñar, hacer seguimiento a sistemas individuales comunitarios de tratamientos de aguas residuales
					14. Evaluar la declaratoria de la cuenca del río Garagoa como área protegida de carácter regional.

					Actualización del POMCA del Río Garagoa.
					',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia180 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity75,
						'year' =>2,
						'value' => 20,
						'description' => 'Se contrató la Consultoria para  la “FORMULACIÓN DEL PLAN DE ORDENAMIENTO DEL RECURSO HIDRICO – PORH Y EVALUACIÓN REGIONAL DEL AGUA – ERA PARA LAS SUBCUENCAS DE TEATINOS, JUYASIA Y TIBANA” , con la Empresa JAM INGENIERIA Y MEDIO AMBIENTE ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia182 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity77,
						'year' =>2,
						'value' => 1,
						'description' => 'Construcción de cajas de control de caudal en municipios de la jurisdicción de CORPOCHIVOR, como pago de servicio ambiental',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia184 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity78,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia185 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity79,
						'year' =>2,
						'value' => 100,
						'description' => 'Se atendieron (39) solicitudes de evaluación por primera vez, ajustes y/o correcciones, evidencias de seguimiento de Programas de Uso Eficiente y Ahorro del Agua – PUEAA
					evaluación de evidencias y seguimiento de 45 PUEAA
					Liquidación de la Tasa por Utilización del Agua para el periodo 13 comprendido entre el 01 de Enero de 2016 al 31 de Diciembre de 2016 a 1871 usuarios por un valor de $177.066.920',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia186 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity80,
						'year' =>2,
						'value' => 100,
						'description' => ' Cargue  de concesiones de agua superficiales y subterráneas, permisos de vertimientos, directorio de actores, seguimiento a programas de uso eficiente y ahorro del agua y las campañas de la red hídrica al NODO regional del Sistema de Información del Recurso Hídrico – SIRH, así:  C.A: 105  VIG. 2017,  302 exp. vig. anteriores; 45 puntos de vertimientos; 8 PUEAA aprobados; 133 Fuentes Hídricas creadas; - 62 Fuentes Hídricas actualizadas o modificadas; - 4 redes hídricas de monitoreo; - 2.729 resultados de párametros
					',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia187 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity81,
						'year' =>2,
						'value' => 15,
						'description' => 'Suscripción  contrato de consultoria 303-17  cuyo objeto es:   ELABORACIÓN DE ESTUDIOS TÉCNICOS PARA LA REGLAMENTACIÓN DE LAS MICROCUENCAS DE LA QUEBRADA MANZANOS, QUEBRADA LA QUIÑA, QUEBRADA LAS MOYITAS Y QUEBRADA SUAITOQUE” ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia188 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity82,
						'year' =>2,
						'value' => 100,
						'description' => 'Liquidación de la Tasa Retributiva para el periodo 21 comprendido entre el 01 de Enero de 2016 al 31 de Diciembre de 2016 a 149 usuarios por un valor facturado de $496.267.326; y atención a 49 peticiones, quejas, reclamos y solicitudes presentadas por los usuarios .
					Se evaluó el PSMV Municipal de Somondoco,
					Se efectuaron 43 visitas de seguimiento a PSMV presentados y aprobados por los prestadores del servicio de alcantarillado',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia189 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity83,
						'year' =>2,
						'value' => 20,
						'description' => 'Se contrató la“FORMULACIÓN DEL PLAN DE ORDENAMIENTO DEL RECURSO HIDRICO – PORH Y EVALUACIÓN REGIONAL DEL AGUA – ERA PARA LAS SUBCUENCAS DE TEATINOS, JUYASIA Y TIBANA”.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia190 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity85,
						'year' =>2,
						'value' => 100,
						'description' => 'Suscripción Convenio Interadministrativo 007-17 cuyo objeto es: “Aunar esfuerzos técnicos y financieros para cofinanciar la construcción de catorce (14) sistemas sépticos más filtro anaerobio de flujo ascendente como tratamiento de agua residual doméstica en el sector rural municipio de Boyacá – Boyacá”, 
					se evaluó el proyecto denominado “Construcción de 30 sistemas sépticos en el área rural del municipio de Úmbita- Boyacá”
					Atención de 5 asesorias técnicas frente a la viabilidad de construcción de unidades sépticas como sistema de tratamiento para viviendas unifamiliares y bifamiliares en el sector rural de diferentes municipios.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia192 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity86,
						'year' =>2,
						'value' => 99,
						'description' => 'Se mantuvo la acreditación del Laboratorio ante el IDEAM, y la visita de seguimiento de cierre de acciones correctivas en el mes de noviembre de 2017, realizadas por el IDEAM.
					  Participación en Prueba de Evaluación de desempeño con IDEAM, con el fin de mantener la acreditación matriz agua en 26 parámetros e Inscripción a las Pruebas de Evaluación de Desempeño 2017
					  Participación del laboratorio en las pruebas PICCAP 2016 con el INS, contando actualmente con certificación para análisis de agua para consumo humano e inscripción a las pruebas PICCAP 2017.
					  Se atendió la visita de auditoria de la Secretaria Departamental de Salud en el componente agua para consumo humano
					  Se atendieron 89  muestras de suelo por parte del Laboratorio de Calidad Ambiental
					  Inscripción y participación del Laboratorio Ambiental al programa CALS 2017 ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia193 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity87,
						'year' =>2,
						'value' => 100,
						'description' => 'Se recibieron 54 Registros de retroalimentación de los usuarios
					Se contrató el mantenimiento preventivo, correctivo y de optimización a los equipos de las estaciones climáticas (Ciénega, Turmequé, Garagoa y San Luis de Gaceno) e Hidrologica (Jenesano), bajo contrato No 287-17.
					 - Operación de la red de Hídrica de Monitoreo de calidad y cantidad del agua en los 35 puntos mediante 4 campañas programadas en los regímenes hídricos de Transición verano- Invierno, invierno, Transición invierno – verano y verano
					  Se emitieron los informes mensuales de condiciones hidrometeorológicas y de alertas para el área de Corpochivor con base a la información del IDEAM y los datos reportados por las estaciones de la jurisdicción, 
					  Estructuración de la red de monitoreo de suelo componente ambiental para 22 puntos asociados a red hídrica.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia194 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity88,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia195 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity89,
						'year' =>2,
						'value' => 1,
						'description' => '. Cadena Productiva Frutales: Proyecto uso eficiente y ahorro del agua (ASPROAGRO-Ramiriquí); Proyecto implementación de un sistema frutipastoril (ASOLECHEROS – Viracachá). Proyecto desarrollo integral de frutales (ASOFRUTUR -Turmequé); Proyecto implementación de BPAs (FRUTIMARLE - Tibaná y Jenesano) 
					. Cadena Productiva Café.
					. Cadena Productiva Cacao
					. Cadena Productiva Ganadería más limpia.   ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia196 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity90,
						'year' =>2,
						'value' => 2,
						'description' => 'Cadena Productiva Ecoturismo.
					Cadena Productiva Artesanías
					Asesoría y acompañamiento a 8 organizaciones de artesanos en temas de buenas prácticas de aprovechamiento,apoyo en la elaboración de línea de producto de diseño
					Apoyó en la participación de las ferias FIMA, EXPOBOYACÁ, EXPOARTESANÍAS, BIOEXPO
					Acompañamiento técnico y ambiental para el fortalecimiento de las artesanías como negocios verdes
					Ejecución del proyecto del   Forlecimiento de actividades ecoturisticas sostenibles en áreas de protecciòn ambiental de la juridicción de CORPOCHIVOR',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia197 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity91,
						'year' =>2,
						'value' => 25,
						'description' => 'Se identifican y se priorizan dos productos para promocionar: Café y Artesanias
					 Se realizó acercamiento con la Oficina de Negocios Verdes del MADS para el apoyo en la implementación del Plan Nacional de Negocios Verdes
					Se apoyó la participación de las comunidades de base en las siguientes ferias de Negocios Verdes: Cafés de Colombia en Bogotá; Feria EXPORTESANO, BIOEXPO, EXPOARTESANIAS, Expoambiente',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia198 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity92,
						'year' =>2,
						'value' => 1,
						'description' => 'Se elaboró documento de convocatoria ECO EMPRESAS para la identificación de empresas sostenibles en la juridicción. 
					Se realizó: la caracterización, diagnóstico  y planes de mejoramiento de la capacidad organizacional a 19 organizaciones de la jurisdicción de Corpochivor;
					Aplicación de criterios de verificación de negocios verdes; 
					Taller de Barismo y Tostión de Café, en articulación  con el SENA',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia199 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity93,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia200 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity94,
						'year' =>2,
						'value' => 100,
						'description' => 'Se priorizan para el año 2017 los sistemas existentes  y en construcción (Campohermoso,  Chinavita, Ciénega, Garagoa, Guateque, Jenesano, Ramiriquí, Santa María, Somondoco, Sutatenza, Tenza, Turmequé, Guayatá y Úmbita.)',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia201 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity95,
						'year' =>2,
						'value' => 25,
						'description' => '162 Acompañamientos y seguimiento a PGIRS municipales; y 63 Acompañamientos en implementación comparendo ambiental ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia202 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity96,
						'year' =>2,
						'value' => 1,
						'description' => 'Se presenta el proyecto denominado:  “Fortalecer los procesos en sistemas existentes de aprovechamiento de residuos orgánicos de la jurisdicción de Corpochivor’’',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia203 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity97,
						'year' =>2,
						'value' => 1,
						'description' => 'Se apoya I.E. con el proyecto del FCA,  
					Con el lema “Menos Bolsa Más Ambiente” se realizó la campaña de sensibilización con entrega de más de 2000 bolsas ecológicas a los usuarios del servicio público, con el fin de disminuir el uso de la misma',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia204 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity98,
						'year' =>2,
						'value' => 25,
						'description' => ' La Asociación Nacional de Empresarios – ANDI en coordinación CORPOCHIVOR, realizaron la Cuarta Jornada de Recolección de Residuos Posconsumo 2017 recolectando aproximadamente 38743 kilogramos de residuos representados en: Computadores y periféricos, llantas usadas, envases de plaguicidas domésticos, baterías plomo-acido, medicamentos vencidos, pilas y bombillas.
					Con el acompañamiento a los sectores productivos y empresas gestoras en acciones encaminadas a la implementación de los planes de gestión de devolución de productos Posconsumo y Manejo seguro de Plaguicidas, se logró que las empresas gestoras recolectaron 23902 Kg de empaques vacíos de plaguicidas',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia205 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity99,
						'year' =>2,
						'value' => 25,
						'description' => 'Se brinda acompañamiento al sector rural en todos los municipios, a través de sensibilizaciones y talleres teórico-práctico sobre el manejo, aprovechamiento, transformación y disposición final de residuos sólidos comunes, especiales y peligrosos (Plaguicidas), con un total de 289 actuaciones en 183 veredas y más de 2800 usuarios sensibilizados en esta temática.
					',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia206 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity100,
						'year' =>2,
						'value' => 1,
						'description' => 'Validación y transmisión al IDEAM, de la información reportada en el Registro de Generadores de Residuos y/o Desechos Peligrosos, para un total de 52782 kg de residuos. 
					Se realiza actualización del PGIRESPEL de la jurisdicción, teniendo en cuenta los usuarios inscritos en los distintos aplicativos del IDEAM, reportando en la Base de Datos de Generadores (417 Generadores), igualmente se realizaron seguimientos trimestrales a las metas definidas en el Plan de Acción PGIRESPEL',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia207 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity101,
						'year' =>2,
						'value' => 1,
						'description' => 'Se realizaron 79 asesorías y actuaciones sobre los establecimientos generadores de residuos peligrosos de la jurisdicción. 
					Se realiza actualización del documento y seguimiento al Plan de Acción 2017-2019  del Plan Institucional de Gestión Ambiental de la Corporación - PIGA, el cual se adopta mediante la Resolución 46/2017
					',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia208 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity102,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia209 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity103,
						'year' =>2,
						'value' => 2,
						'description' => '89  acompañamientos  a los  CMGRD en los Veinticinco (25) municipios de la jurisdicción; y un (1) acompañamiento a Comité Regional de Gestión del Riesgo de Desastres en el Municipio de Sabanalarga
					Capacitación sobre la Reducción y Manejo de los Riesgos de Desastres, a estudiantes de la Institución Educativa Diego Torres del municipio de Turmequé e Institución Educativa Gustavo Romero Hernández de Tibaná, ESE del municipio de Pachavita; CMGRD de 22 municipios de la jurisdicción; y Administración municipal del municipio de Tenza y entidades de socorro de los municipios de Jenesano, Turmequé, Ventaquemada ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia210 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity104,
						'year' =>2,
						'value' => 3,
						'description' => 'Ejecución  de convenios interadministrativos  con los municipios de Santa Maria y Chivor; suscripción de convenios con Macanal, Campohermoso y Umbita; para el manejo y control de inestabilidad, socavación e inundación, ;  y suscripción de convenios con ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia211 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity105,
						'year' =>2,
						'value' => 3,
						'description' => 'Se realizaron Campañas de Limpieza de cauces que generan riesgo para la población por acumulación de material vegetal y residuos sólidos”,  en los municipios de Sutatenza, Garagoa y Guateque.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia212 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity106,
						'year' =>2,
						'value' => 100,
						'description' => 'Se atendió el 100% de las solicitudes realizadas por los habitantes de la jurisdicción para la evaluación de afectaciones generadas por fenómenos naturales y antrópicos mediante ciento veinticinco  (125) visitas de campo y  conceptos técnicos con recomendaciones de manejo.
					Atención de 179 solicitudes allegadas.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia213 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity107,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia214 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity1,
						'year' =>3,
						'value' => 100,
						'description' => 'Ejecución del 100% del Plan Anual de Educación Ambiental: 
					Conformación del Grupo Interdisciplinario para el fortalecimiento de la educación comunitaria en la jurisdicción, compuesto por un integrante de cada proyecto institucional. 
					Realización de 48 Talleres con comunidades principalmente del sector rural, sensibilizando a 1.204 usuarios de la Corporación
					Conmemoración de 83 fechas ambientales establecidas en el Calendario Ambiental
					Creación de la estrategia de Notichivatos
					Realización de la Primera Asamblea de Jóvenes de Ambiente en el suroriente de Boyacá
					Lanzamiento Portal WEB Institucional de Educación Ambiental
					Realización de la Primera Semana de la Educación Ambiental
					Convenio con la Universidad Nacional de Colombia para traer a Boyacá el Programa de “Pequeños Científicos”',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia215 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity2,
						'year' =>3,
						'value' => 2,
						'description' => 'Talleres Creativos de composición musical y apoyo a grupos de música Carranguera presentes en la jurisdicción, beneficiando a 40 integrantes de 10 agrupaciones 
					Talleres de relevo generacional de la música carranguera, orientado a 50 niños
					Elaboración de 10 crónicas ambientales rescatando las diferentes prácticas ambientales ancestrales realizadas en el suroriente de Boyacá',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia216 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>3,
						'value' => 1,
						'description' => 'Convenio Interadministrativo de cofinanciación con el municipio de Ramiriquí, para aunar esfuerzos técnicos, administrativos y financieros para la promoción del maíz y sus productos relacionados, mediante la divulgación de saberes y tradiciones agroambientales',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia217 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>3,
						'value' => 100,
						'description' => 'En PRAES: 25 Municipios asesorados. 48 Instituciones Públicas asesorada. 152 asesorias en PRAES. 43 Documentos. Planes de Acción 42.
					En CIDEAS: 24 CIDEAS asesorados, 23 CIDEAS con Decreto, 20 CIDEAS con Plan de Acción
					PROCEDAS: Consolidación y apoyo a tres (3) PROCEDAS 
					 PRAUS: Asesoría a tres (3) Proyectos Ambientales Universitarios ',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia218 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity5,
						'year' =>3,
						'value' => 100,
						'description' => '• 5.700 emisiones de mensajes institucionales a través de 15 emisoras comunitarias del suroriente de Boyacá.
					• 165 emisiones del programa radial Corpochivor en Acción a través de 15 emisoras comunitarias del suroriente de Boyacá. 
					• Emisión de un mensaje institucional en televisión nacional y regional, pública y privada, mediante código cívico. 
					• 420 notas de Free Press gestionadas antes los diferentes medios de comunicaciones, locales, regionales y nacionales. ',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia219 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity6,
						'year' =>3,
						'value' => 4,
						'description' => 'Formulación de cuatro (4) estrategias de comunicación como lo fueron: Estrategia de Comunicación Externa, Estrategia de comunciación Interna, Estratgia de comunicación Digital y Estrategia de Eventos y Protocolocon resultados visibles como: 
					• 142 COMUNICADOS DE PRENSA 
					• 10 CRÓNICAS AMBIENTALES 
					• 1 ENCUESTA DE PERCEPCIÓN 
					• 130 VIDEOS REALIZADOS 
					• 106 PIEZAS RADIALES REALIZADAS 
					• 4.926 PUBLICACIONES EN REDES SOCIALES 
					• 43 BOLETINES INTERNOS 
					• 4.461.503 EL ALCANCE EN REDES SOCIALES 
					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia220 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity7,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia221 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity9,
						'year' =>3,
						'value' => 97,
						'description' => 'En la Implementación y Seguimiento de Estrategia Gobierno en Linea (GEL) se avanzó 81%
					Soporte especializado para el desarrollo de nuevas funcionalidades al módulo de facturación y presupuesto
					Implementación, puesta en funcionamiento y publicación de la mesa de ayuda 
					Optimización del servicio de Internet, aumentando la velocidad de navegación.
					Desarrollo de módulo de resultados y presentación de pruebas con integración a la Intranet corporativa para la primera jornada de Inducción 2018
					100% usuarios creados y vinculados al directorio activo.
					Se atendieron 401 solicitudes de soporte técnico (hardware y software)
					Se atendieron 386 solicitudes de soporte operativo en aplicaciones internas y externas.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia223 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>3,
						'value' => 100,
						'description' => 'Integración de ocho (8) capas; construcciones, curvas de nivel, predial, Distribución PL25K, estaciones hidrológicas, ecosistemas estratégicos, áreas de interés especial, concesiones de agua, de fuentes externas en el Siat Web y Actualización de nueve (9) capas temáticas misionales; infracciones ambientales, licencias ambientales, ocupación de cauces, aprovechamiento forestales, Concesiones, Registro Fauna, Residuos Solidos, POMCA Rio Garagoa, Geomorfología. 
					100% de interpretación en pantalla de capa temática CLC 2017 (para revisión y validación)
					Levantamiento y procesamiento de 8181,55 hectáreas con vehículo aéreo no tripulado (Drone)',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia224 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity11,
						'year' =>3,
						'value' => 100,
						'description' => 'Convenios interadministrativos con los 25 administraciones vigentes
					Asistencia técnica presencial a la Corporación Coralina en la actualización de versión Siat Web
					Inclusión de guías temáticas en el Siat Web. ',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia225 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity12,
						'year' =>3,
						'value' => 100,
						'description' => 'Consolidación de la información generada por los subsistemas del SIAC aplicables a la jurisdicción, generando los siguientes resultados: SIRH: 100%, SNIF 30%, RESPEL: 100%, RUA 100% ',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia226 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity13,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia227 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity14,
						'year' =>3,
						'value' => 97,
						'description' => 'POMCA rio Garagoa aprobado por los directores de las Corporaciones autónomas Regionales de Chivor, Cundinamarca y Boyacá, con la Resolución Conjunta N. 817, 3808 y 4279 respectivamente.
					Ejecución acumulada del proceso de formulación del POMCA  del rio Guavio 90% ',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia228 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity15,
						'year' =>3,
						'value' => 1,
						'description' => 'Seguimiento a la inversión realizada en el ajuste del POMCA del río Garagoa.
					 Reporte de seguimiento a la ejecución del POMCA río Garagoa en los indicadores mínimos del MADS
					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia229 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity16,
						'year' =>3,
						'value' => 80,
						'description' => 'Se han asesorado a 15 municipios de los cuales 8 han iniciado revisión y ajuste de su POT, 2 están elaborando estudios de riesgos, y a 5 se les ha suministrado información
					Suscripción contrato de consultoría 182-18
					Adquisición de Workstation y GPS
					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia230 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity17,
						'year' =>3,
						'value' => 100,
						'description' => 'Inicio de concertación de asuntos ambientales con los municipios de Almeida y Ventaquemada. ',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia231 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity18,
						'year' =>3,
						'value' => 25,
						'description' => ' Se realizó seguimiento a los asuntos ambientales concertados a los 25 municipios de la jurisdicción de CORPOCHIVOR',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia232 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity19,
						'year' =>3,
						'value' => 7.38,
						'description' => 'Finalización de elaboración de estudios básicos de riesgo en la zona urbana del municipio de La Capilla
					Suscripción Convenio 017-18 con la Universidad Pedagógica y Tecnológica de Colombia UPTC para la realización de los estudios básicos en la zona urbana del municipio de San Luis de Gaceno. 
					 
					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia233 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity20,
						'year' =>3,
						'value' => 5.39,
						'description' => 'Continuación monitoreo de escenarios de riesgo priorizados en los municipios de Garagoa, Tenza, Santa María, La Capilla, Sutatenza, Guateque y San Luis de Gaceno
					Inicio de monitoreo de escenarios de riesgo priorizados en los municipios de Chinavita, Turmequé, Nuevo Colón, Úmbita, Cienega, Ramiriquí y Jenesano
					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia234 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity22,
						'year' =>3,
						'value' => 1,
						'description' => 'Priorización de cuerpos de agua para la identificación y acotamiento de rondas hídricas, de acuerdo a guía Metodológica adoptada por el MADS, mediante Resolución 957 de 2018, adoptada por la Corporación mediante Resolución N. 938 del 28 de diciembre de 2018.

					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia236 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity23,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia237 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity24,
						'year' =>3,
						'value' => 85,
						'description' => 'Se recibió un total de 2.723 PQRS, de las cuales 525 corresponden a Petición de Infracciones Ambientales y 2198 a Peticiones, reclamos y solicitudes (de Consulta, Información, documentos, permisos ambientales); tramitando 2.491 que corresponde al cumplimiento del 100% del 85% de la Meta establecida en el POA durante el 2018.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia238 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>3,
						'value' => 100,
						'description' => 'El grupo de permisos y trámites ambientales  dio tramite al 100%, con una totalidad de 203 solicitudes atendidas debidamente. Licencias Ambientales 2, Concesiones de Agua superficial 90. Concesiones de Agua subterraanea 1, Ocupación de Cauce 23. Permiso de vertimiento 15, viabilidad de reservorios 49, Aprochamientos Forestal 22, Emisiones Atmósfericas 1.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia239 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity26,
						'year' =>3,
						'value' => 100,
						'description' => 'Durante la vigencia 2018, de un promedio de expedientes activos de 3.971 se realizaron un total de 1485 visitas técnicas, correspondientes a la atención de permisos y/o autorizaciones ambientales,  acompañamientos tecnicos y atención a infracciones ambientales, de las cuales 525 coresponden a seguimiento a licencias, permisos y autorizaciones otorgados
					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia240 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity27,
						'year' =>3,
						'value' => 1,
						'description' => 'Se cuenta con el Plan y se ejecutó de la siguiente manera:
					Se realización 30 operativos de control de Flora y Fauna,  4 operativos relacionados con mineria ilegal y  6 operativos de control de emisiones atmosféricas de fuentes móviles en los siguientes lugares:  Ramiriquí – Puente Camacho; vía Garagoa – Chinavita; Ventaquemada- Tierra Negra,  San Luis de Gaceno, Guateque – Bogotá, Garagoa – La Frontera;  logrando imponer 10 comparendos
					26 capacitaciones sobre control y vigilancia de los Recursos Naturales.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia241 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity28,
						'year' =>3,
						'value' => 100,
						'description' => 'Se profirieron 20 Resoluciones de carácter ambiental sancionatorio.
					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia242 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity29,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia243 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity30,
						'year' =>3,
						'value' => 100,
						'description' => 'Se fortaleció la Secretaria General con un abogado para la representación juridica de la entidad, el área de correspondencia con 3 bachilleres y una técnica, Atención al Usuario con una tecnologa; Subdirección Administrativa con 5 profesionales para el área de contratación, una abogada para cobro coactivo, un asesor juridico, una ingeniera industrial para Seguridad y Salud en el Trabajo, una técnica para apoyo a presupuesto; la OCI con un profesional, una técnica y una judicante, Subplaneación con un economista, una ingeniera ambiental para el Banco de proyectos y coordinación proyecto 105, y un Ing. mecánico.
					Se organizó la realización de la Audiencia Pública de Rendición de Cuentas correspondiente a la vigencia 2017',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia244 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity32,
						'year' =>3,
						'value' => 2,
						'description' => '
					Se consolidó y se estructuró Informe de gestión vigencia 2017, informe de gestión primer semestre 2018, los cuales fueron aprobados por el Consejo Directivo, y radicados en el MADS',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia246 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>3,
						'value' => 100,
						'description' => 'Se mantuvo activo el Sistema Integrado de Gestión, se realizó la revisión, ajustes, actualizaciones en procedimientos, formatos e instructivos. se realizó la Auditoria Interna del Sistema.   ',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia247 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity35,
						'year' =>3,
						'value' => 21,
						'description' => 'En año 2018 se formularon y se presentaron a Entes cofinanciadores 21 proyectos así: 
					• Se presentaron 5 proyectos ante el FCA, de estos, el Comité Directivo le asignó recursos a 3 proyectos.
					•  Se presentó un (1) proyecto ante el FONAM.
					• Se presentaron 15 proyectos a entidades como: AES Chivor (4 proyectos), Transportadora de Gas Internacional TGI (4 proyectos), Oleoducto Central OCENSA (5 proyectos) y Corporación Autónoma Regional de Cundinamarca CAR (2 proyectos). De estos quedaron en proceso de viabilización 5 proyectos.
					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia249 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity36,
						'year' =>3,
						'value' => 5,
						'description' => 'Se formularon proyectos por la suma de $15.868.761.348 de los cuales las diferentes fuentes de cofinanciación aprobaron la suma de $4.520.939.231 correspondiente a un 28.49%, lo que indica que la gestión fue satisfactoria',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia250 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>3,
						'value' => 1,
						'description' => 'Existe un Plan diseñado y su implentación depende de solicitudes allegadas. De las cuales se brindó asesoria de asistencia en la formulación de proyectos  en forma personalizada, vía telefónica, correo electrónico',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia252 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity39,
						'year' =>3,
						'value' => 100,
						'description' => '1. Aval Técnico Ambiental: se recibieron y evaluaron 3 proyectos a los cuales se les expidió Aval. Estos corresponden a los proyectos que radicaron los entes territoriales solicitando este tipo de concepto como requisito para presentarlo a otras fuentes de cofinanciación diferentes a la Corporación.
					2. Certificación de viabilidad: se expidieron 36 Certificados de Viabilidad. Este certificado se expide a los proyectos radicado al Banco de Proyectos y que solicitan recursos a la Corporación.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia253 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity40,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia254 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity41,
						'year' =>3,
						'value' => 100,
						'description' => 'Durante la vigencia 2018 se priorizó como áreas estratégicas para Declaratoria la Cuchilla El Varal, y Cuchilla Mesa Alta, siguiendo la ruta declaratoria establecida por el MADS en la Resolución 1125 del 2015 del MADS, la cual establece tres fases asi: 1. Preparación, 2. Aprestamiento, 3. Declaratoria ( Estas fases vinculadas en 7 actividades)
					•Cuchilla El Varal. (De las 7 actividades se programó y desarrolló 5 actividades). Fase UNO:  Preparación. Actividad 1. Valoración de la iniciativa.                       Actividad 2. Revisión de la información. Actividad 3. Consultas a Entidades
					Fase DOS: Aprestamiento. Actividad 4. Socializaciones.  Actividad 5. Documento Síntesis (Biofísico y social): Se realizó el documento síntesis compilando la información obtenida del componente biofísico y socioeconómico, definiendo la categoría del Distrito Regional de Manejo Integrado, obteniendo concepto favorable por parte del Instituto Alexander Von Humboldt.
					• Mesa Alta. (De las 7 actividades se programó y desarrolló tres actividades).  FASE UNO: Preparación; .  Actividad 1. Valoración de la iniciativa.  Actividad 2.Revisión de la información Actividad 3.Consultas a Entidades: Se revisó la información allegada en el 2017 por las entidades gubernamentales y no gubernamentales y se enviaron solicitudes de información necesaria a las entidades que no habían respondido.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia255 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>3,
						'value' => 100,
						'description' => 'Se realizó documento técnico y delimitación cartográfica para los 25 municipios de la jurisdicción de Corpochivor, donde se identifica las áreas de importancia estratégica exigidas por el decreto 1076 de 2015 (base del Decreto 953 de 2013) y decretos 1007 de 2018 (REAA), para ser adquiridas o se implementen esquemas de pago por servicios ambientales',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia256 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>3,
						'value' => 100,
						'description' => 'Se atendió sesenta y nueve (69) solicitudes, de ejecución de visitas y elaboración de conceptos técnicos adquisición de áreas de importancia estratégica. 
					Se resolvió catorce (14) solicitudes de árboles en riesgo, donde se realizó las visitas técnicas y se emitieron los respectivos informes en los municipios de Santa María, Garagoa, Macanal y Sutatenza
					Se suscribió convenio interadministrativo de cofinanciación No. 025 -2018 con el Municipio de Ramiriquí, para cofinanciar la compra de predios de Interes Hidrico y Biologico.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia258 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity45,
						'year' =>3,
						'value' => 1.5,
						'description' => 'Elaboración de planes de manejo para áreas declaradas San Cayetano y Mamapacha-Bijagual. Para el DRMI Mamapacha – Bijagual: Se realizaron seis (6) mesas de trabajo con alcaldías, concejos municipales y personerías; 34 talleres con la comunidad en la que se socializaron los límites, la zonificación. Se analizó la información obtenida con la comunidad para priorizar los proyectos a formularse del componente estratégico.
					Del DRMI San Cayetano: Se realizaron cuatro (4) mesas de trabajo con alcaldías, concejos municipales y personerías, con el fin de socializar el proceso de formulación del PMA del área protegida; once (11) talleres con la comunidad en la que se socializaron los límites, la zonificación y se determinaron las problemáticas y soluciones presentes en el DRMI. Se analizó la información obtenida con la comunidad para definir el componente estratégico. ',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia259 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>3,
						'value' => 80,
						'description' => '• Implementación de acciones de acuerdo a plan de manejo del DRMI Cristales y Castillejo o Guacheneque para el año cuatro (4). Se actualizó matriz de seguimiento: completando un 51% de avance total al cuarto año.
					• Implementación de acciones de acuerdo a planes de manejo del DRMI Cuchillas negra y Guanaque para el año tres (3). Se actualizó matriz de seguimiento: completando un 50% al tercer año
					• Implementación de acciones de acuerdo a plan de manejo del DRMI páramo de rabanal para el año uno (1). Se actualizó matriz de seguimiento: completando un 32% al primer año
					En marco del Proyecto Paramos: Biodiversidad Y Recursos Hídricos En Los Andes Del Norte – Nodo Rabanal. Pago Por Servicios Ambientales  y Reconversión Productiva: .Se cuenta con 74 cartas de intención para iniciar procesos de reconversión productiva. .Se cuenta con 17 cartas de intención y planes de ordenación predial participativo, con usuarios del municipio de Ventaquemada .
					Generación de Espacios de Confianza con Entes Territoriales de las Áreas de Influencia Directa del Páramo de Rabanal: Generación de Espacios de Confianza con Entes Territoriales de las Áreas de Influencia Directa del Páramo de Rabanal. • Se realizaron 5 socializaciones del proyecto Páramos, biodiversidad y recursos hídricos de los Andes del Norte – Nodo Rabanal, con funcionarios de las administraciones de los municipios de Samacá, Ventaquemada, Lenguazaque y Guachetá: - Se tiene el 100% del procesamiento de coberturas de bosques, páramo y bosque altoandino de la imagen satelital 2009 Landsat 7 tomada del banco nacional de imágenes satelitales del Instituto Geográfico Agustín Codazzi. Se realizaron dos campañas de monitoreo.
					- Implementar Acciones de Restauración: Se elaboraron dos documento de planes de restauración ecológica pasiva y activa en predios ubicados en el Páramo de Rabanal.
					- Fortalecimiento de la Comisión Conjunta del Páramo de Rabanal: se generaron cuatro espacios de articulación interinstitucional cuyo punto central fue la comisión conjunta ampliada, en la que participaron activamente representantes de las alcaldías de Tunja y Samacá, Gobernación de Boyacá, RAPE, CAR, Corpoboyacá e Instituto Humboldt
					   ',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia260 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity47,
						'year' =>3,
						'value' => 100,
						'description' => 'Realizar la disposición adecuada de los diferentes ejemplares de fauna que ingresan al CAVR
					1. El Centro de Rehabilitación ha albergado a 13 ejemplares que permanecían en el CAVR desde vigencias anteriores y 55 ejemplares que ingresaron en la vigencia 2018 donde fueron atendidos desdelos componentes clínicos, biológicos y zootecnia.
					2. Se realizó la  liberación de 41 animales, en los municipios de Macanal, Garagoa, Pachavita, San Luis de Gaceno , Guayata, Cienega y Tibana.
					3. Reubicación de 1 Talla X  y 1 serpiente rabo de aji al Instituto Nacional de Salud para desarrollar suero antiofidico.
					 4. Acompañamiento en la creación del documento de política pública sobre la fauna silvestre del departamento de Boyacá.
					5. Recepción y acompañamiento por las instalaciones de CAVR a 328 personas de la Universidad ECCI, universidad de la Amazonia, SENA, Gobernación de Boyacá, ONG primavera, CAR y de empresas de energías renovables.
					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia261 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity48,
						'year' =>3,
						'value' => 2,
						'description' => 'Especies en Peligro
					En marco del monitoreo regional de oso andino entre CAR, CORPOGUAVIO, CORPOORINOQUIA, CORPOBOYACA, CAM, PARQUES NACIONALES NATURALES DE COLOMBIA y CORPOCHIVOR, se realizaron Treinta y ocho (38) Sub cuadrantes en el tema de monitoreo de oso Andino
					Para la Águila crestada (Spizaetus Isidori), se realizó tres monitoreos con un total de tres individuos reportados, al igual, se realizaron socializaciones y programas radiales dirigidos a poblaciones rurales  sobre la importancia de Spizaetus Isidori. Se realizó 2 campañas educativas que buscó informar y sensibilizar a la comunidad en general por medio de las redes sociales, acerca del Águila Crestada (Spizaetus isidori), mitos y verdades acerca de la fauna silvestre
					Conflictos de la Fauna Silvestre con el Hombre: Se atendieron 48 solicitudes por conflicto de fauna silvestre. Se realizó capacitación al personal de la Corporación, policía ambiental y funcionarios del hospital Regional del Valle de Tenza, sobre la identificación y manejo de ofidios
					Especies Invasoras: en el marco del convenio Conservación y manejo sostenible Laguna Agua Blanca”, se está desarrollando la caracterización de agua y biodiversidad con el fin de manejar técnicas sostenibles para el control de la tifa (planta invasora de la laguna).
					Riqueza Biótica. Se realizó el análisis de riqueza de fauna silvestre dentro la jurisdicción de Corpochivor; haciendo la revisión taxonómica, distribución y tipo de ecosistema de cada una de las especies',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia262 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia263 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity50,
						'year' =>3,
						'value' => 231.5,
						'description' => 'En desarrollo de las actividades de establecimiento de sistemas forestales se establecieron: 1) Programa Usuarios Menores Asociados: 149.2 Ha. en sistemas forestales de tipo protector; 2) Programa Apadrina Un Árbol  17,8 hectáreas; 3)  Convenio de Asociación No. 027-17 suscrito con el Fondo para la Acción Ambiental y la Niñez-FONDO ACCIÓN, para implementar el   Esquema de Retribución por Servicios Ambientales-ERSA   y Mecanismo REDD+:  17,1 hectáreas; 4)  AES Chivor 2.6 hectáreas en sistemas de huertos leñeros;  5)  la EBSA 2.2 Ha. en sistemas de huertos leñeros. Proyectos Rehabilitación de áreas Forestales 42.6 Ha ',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia264 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity51,
						'year' =>3,
						'value' => 919,
						'description' => 'Se realizó la intervención de áreas de interés hídrico y forestal a traves de los siguientes proyectos: 1) FCA Rehabilitación Convenio No. 012-17 UDFJC, 60 Ha. 2) Convenio 006-17 suscrito con Corpoboyacá:   415 Ha; 3) Proyecto FCAContrato Obra Publica No. 285-17: 447 Ha. 4) Esquema ERSA y Mecanismo REDD+ : 24 Ha.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia265 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity52,
						'year' =>3,
						'value' => 259,
						'description' => 'En el desarrollo de las actividades de mantenimiento de sistemas forestales establecidos durante las vigencias 2016,  2017 y 2018  se realizó: 1) Programa Usuarios Menores: 241,78; 2) Convenio 006-17: 5.5 hectáreas establecidas en cerca viva;  3) Convenio de Asociación No. 027-17:   7,87  Ha. establecidas en diferentes sistemas forestales (reforestación, huertos leñeros, bancos mixtos de forraje y cervas vivas; 4) Mediante AES Chivor se realizo un primer mantenimiento y resiembra a 2.57 Ha. establecidas en sistemas de huertos leñeros; y 5) Mediante la EBSA se realizo un primer mantenimiento y resiembra a 2.22 hectáreas establecidas en sistemas de huertos leñeros',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia266 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity53,
						'year' =>3,
						'value' => 3,
						'description' => ' Ejecución de las siguientes estrategias  1) Un esquema de Pago por Servicios Ambientales (PSA) desarrollado en áreas de interés hídrico y forestal del páramo de Rabanal y Bijagual; 2) un Proyecto  REDD+  en áreas priorizadas de 13 municipios registro ante los estándares VCS y CCBS con un área de proyecto de 937 hectáreas y un potencial a 2018 de 6.372 Unidades de Carbono verificadas (VCUs) Expost negociables; y 3) Tercera estrategia a través de BANCO2 que por parte del Grupo Éxito, se realizó la retribución al Usuario Salvador Puentes de la vereda Arrayanes del municipio de San Luis de Gaceno.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia267 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity54,
						'year' =>3,
						'value' => 7,
						'description' => 'En el proceso de implementación y seguimiento multitemporal de las directrices, estrategias y lineamientos del PGOF, se recopilo información y realizó evaluación de los 7 criterios y 26 indicadores del PGOF según información disponible del periodo 2014-2017, generándose el documento denominado:   Evaluación línea base de Criterios e Indicadores Plan General de Ordenación Forestal Corpochivor',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia268 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia269 = DB::getPdo()->lastInsertId(); 





					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity61,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia275 = DB::getPdo()->lastInsertId(); 










					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia286 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity73,
						'year' =>3,
						'value' => 30,
						'description' => 'Durante la vigencia 2018, se adelantaron las 14 actividades  programadas para la ejecución de programas, proyectos y actividades establecidos en el PMAA Subcuenca Teatinos.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia287 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity74,
						'year' =>3,
						'value' => 1,
						'description' => 'Formulación del Plan de Manejo Ambiental de Acuíferos para los municipios de Sutatenza, Somondoco, Tenza, La Capilla y Guateque de acuerdo a los lineamientos de la Guía Técnica del MADS, obteniendo como resultado las unidades hidrogeológicas, zonas de recarga y componente programático para la protección del acuífero en un periodo de diez años.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia288 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity75,
						'year' =>3,
						'value' => 80,
						'description' => 'Elaboración de la Evaluación Regional del Agua para las subcuencas Teatinos, Garagoa, Juyasía y Tibaná, a través de la cual se logró conocer la oferta, demanda, calidad y riesgos asociados al recurso hídrico',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia289 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity76,
						'year' =>3,
						'value' => 5,
						'description' => 'Se suscribió Convenio de Asociación con Stiftelsen The Stockholm Environment Institute, con el objeto de formular las ERA en las cuatro cuencas hidrográficas ',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia290 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity78,
						'year' =>3,
						'value' => 1,
						'description' => 'En el marco de la Retribución por Servicio Ambiental, se realizó sensibilización a los usuarios que fueron beneficiados con los Tanques Zamorano, sobre el buen uso de los mismos, uso eficiente y ahorro del agua y legalización del recurso hídrico (CA). Además se realizaron visitas técnicas logrando identificar 81 Viviendas en el páramo cristales castillejo en el municipio de Turmequé - veredas Guanzaque, Siguineque y Joyagua - de las cuales solo 9 cuentan con sistema de tratamiento de aguas residuales (pozo séptico). ',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia292 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity79,
						'year' =>3,
						'value' => 100,
						'description' => 'Durante la vigencia 2018 se realizó la evaluación de 56 PUEAA.
					Liquidación a 1.754 usuarios por concepto de la tasa por utilización de agua del periodo 14 comprendido entre el 1 de enero de 2017 al 31 de diciembre de 2017
					Se atendieron 65 peticiones allegadas por los usuarios sobre el cobro de la tasa por utilización de agua',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia293 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity80,
						'year' =>3,
						'value' => 100,
						'description' => 'Se realizó el cargue y/o actualización de la información de 176  permisos ambientales al aplicativo NODO Regional SIRH; además del cargue al aplicativo de la información de 144 formularios unico nacional de inventario de aguas subterráneas FUNIAS.
					Se cargó al aplicativo NODO Regional SIRH dieciocho (18) Programas de Uso Eficiente y Ahorro del Agua PUEAA
					Se realizó el cargue de las cuatro campañas de red hídrica de 35 puntos de monitoreo de la red actual y el cargue de la tercera campaña del FCA - PORH de sesenta (60) puntos.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia294 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity81,
						'year' =>3,
						'value' => 55,
						'description' => 'Se profirió la Resolución 923 de fecha 28-12-2018 por medio de la cual se reglamenta el uso del recurso hídrico de las microcuencas de las quebradas La Quiña, Suaitoque, Manzanos y Moyitas en los municipios de Garagoa, Guateque, Tenza, La Capilla, Pachavita y Sutatenza.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia295 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity82,
						'year' =>3,
						'value' => 100,
						'description' => 'Liquidación de la tasa retributiva para el periodo 22 comprendido entre el 1 de enero de 2017 al 31 de diciembre de 2017 a 151 usuarios generadores de vertimientos directos e indirectos a fuentes hídricas superficiales
					Se atendieron 24 solicitudes allegadas por usuarios sobre el cobro realizado por concepto de Tasa Retributiva
					Se atendieron nueve (9) solicitudes relacionadas con los Planes de Saneamiento y Manejo de Vertimientos – PSMV, aprobándose este instrumento para los municipios de Guateque y Somondoco.
					42 mesas de seguimiento a los prestadores de alcantarillado con el fin de conocer el grado de ejecución y cumplimiento de PSMV aprobados.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia296 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity83,
						'year' =>3,
						'value' => 80,
						'description' => 'Se formuló la Plan de Ordenamiento del Recurso Hídrico para las subcuencas Teatinos, Juyasía y Tibaná, el cual contiene las fases de aprestamiento, diagnóstico y formulación.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia297 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity85,
						'year' =>3,
						'value' => 100,
						'description' => 'Durante la vigencia 2018 se atendieron 11 visitas técnicas de viabilidad para construcción de sistemas sépticos como tratamiento de agua residual doméstica en viviendas rurales.
					Suscripción de dos (2) Convenios Interadministrativos para la construcción de sistemas de tratamiento de aguas residual doméstica en el sector rural de los municipios de Chivor y Boyacá
					Se atendieron cinco (5) solicitudes de visitas técnica relacionadas con el estado y/o viabilidad de construcción de la PTAR.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia299 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity86,
						'year' =>3,
						'value' => 90,
						'description' => 'Acreditación del Laboratorio de Calidad por un término de 4 años más, ante el IDEAM.
					Se mantiene  certificiaciones Matriz agua, según autorización proferida por el Ministerio de Protección Social
					Se Mantene Certificación y participación CALS matriz suelo
					Se mantiene el 80% de las variables acreditadas - matriz agua
					Mantener e implementar variables analiticas  matriz agua y suelo:  se ha mantenido 95 parámetros en matriz agua , 30 en matriz suelo componente ambiental y 23 en matriz suelo componente agronómico para un total de 148 parámetros implementados y mantenidos .
					Atender solicitudes de análisis matriz agua y suelo - usuarios internos y externos, se han atendido 524 solicitudes',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia300 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity87,
						'year' =>3,
						'value' => 74,
						'description' => 'Se han mantenido la operación y seguimiento a las 4 estaciones meteorológicas y la estación hidrológica existentes.
					Adquisición de 2 equipos de medición móvil de caudal por inducción magnética para flujos en cauces descubiertos con implementos para aforo y seguridad
					Se optimizó la estación hidrologica de teatinos y las 4 estaciones meteorologicas existentes en Ciénega, Turmequé, Garagoa y San Luis de Gaceno
					Se desarrollaron 4 jornadas de monitoreo de calidad hídrica en 37 puntos y/o estaciones de monitoreo correspondientes a RED HIDRICA – PORH - FCA, representativos para evaluar la calidad del recurso en cada tramo y las causas de contaminación
					Se realizaron visitas de campo y gestion de predios, en las alcaldias municipales de TIBANA, JENESANO, VENTAQUEMADA, TURMEQUE, NUEVO COLON, CHIVOR , MACANAL Y SANTA MARIA, en aras de definir o establecer posibles predios para la localizacion y construccion de estaciones hidrologicas y metereologicas.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia301 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity88,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia302 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity89,
						'year' =>3,
						'value' => 1,
						'description' => 'En la Implementación de medidas de manejo integrado del suelo a través de sistemas agroalimentarios, se desarrollaron: -13 talleres en Abonos orgánicos donde se  elaboración de abonos tipo bocashi a partir de residuos.  -26 talleres en la elaboración de  Caldos trofobióticos.    Control Biológico de la Broca: Desarrollo y finalización  de una campaña con  el uso de beauveria bassiana. Rotación adecuada de praderas:  Implementación de 36 cercas eléctricas. Implementación de Abonos Verdes. Manejos de aguas mieles y aguas residuales del fique.
					Apoyo a las cadenas de cacao,  frutales, café, Silvopastoriles.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia303 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity90,
						'year' =>3,
						'value' => 2,
						'description' => '
					Preparación del grupo de artesanos en temas como diseño de nuevos productos, promoción e impulso de productos, consolidación de contactos comerciales en diferentes ferias como: expo-artesano en Medellín; expo-artesanías en Bogotá; FIMA entre otras. 
					Educación ambiental a través de la promoción del uso de la artesanía como ramo en la semana santa, como estrategia de protección de la palma de cera con la adquisición de 5.000 ramos artesanales en calceta de plátano, fortaleciendo de esta forma el quehacer del artesano 
					Mediante convenios de asociación con QUICAGUA en Somondoco y Corporación Arte y Cultura en Sutatenza, se realizaron acciones de fortalecimiento productivo y asociativo. 
					Acompañamiento a 6 iniciativas ecoturísticas de comunidades y alcaldías municipales para su orientación al Desarrollo Sostenible. ',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia304 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity91,
						'year' =>3,
						'value' => 25,
						'description' => 'Se desarrollaron actividades en:
					1. VENTANILLA DE NEGOCIOS VERDES
					2. APOYO A INICIATIVAS AMBIENTALES
					3. AGROINDUSTRIALIZACIÓN
					4. PROMOCIÓN DE NEGOCIOS VERDES',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia305 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity92,
						'year' =>3,
						'value' => 2,
						'description' => '
					Verificación de criterios de negocios verdes, donde se validaron 22 organizaciones del territorio
					Se generó sello del aval de confianza de la Ventanilla de Negocios Verdes de CORPOCHIVOR, el cual busca dar un respaldo a bienes y servicios sostenibles; el posicionamiento del bien o servicio e incentivar el consumo de bienes y servicios verdes
					Realización Seminario internacional “DESARROLLO LOCAL Y NEGOCIOS VERDES, UNA APUESTA A LA COMPETITIVIDAD TERRITORIAL  
					Realización Diplomado “Marketing e innovación de negocios verdes
					Realización Foro Internacional de Experiencias Exitosas en la Conformación de Redes de Bienes y Servicios Sostenibles
					Realización de gira de experiencias exitosas con 13 apicultores del suroriente boyacense
					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia306 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity93,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia307 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity94,
						'year' =>3,
						'value' => 100,
						'description' => 'Se brindó apoyo y asesoría a los municipios de la jurisdicción en los procesos de optimización o construcción de sistemas de aprovechamiento, transformación y/o disposición final de residuos sólidos; se priorizaron para el año 2018 los sistemas existentes  y en construcción (Campohermoso,  Úmbita, Chinavita, Garagoa, Ramiriquí, Santa María, Somondoco, Sutatenza, Turmequé, Guayatá).',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia308 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity95,
						'year' =>3,
						'value' => 25,
						'description' => 'Se brindó acompañamiento y asesoría en los 25 municipios de la juridiscción',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia309 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity96,
						'year' =>3,
						'value' => 1,
						'description' => 'Se formularon 3 proyectos',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia310 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity97,
						'year' =>3,
						'value' => 1,
						'description' => 'Se brinda acompañamiento constante al sector agroveterinario como prioritario.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia311 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity98,
						'year' =>3,
						'value' => 25,
						'description' => '
					Se brindó acompañamiento a los sectores productivos en la gestión adecuada de residuos especiales sujetos de planes de gestión de devolución de productos posconsumo, en los 25 municipios',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia312 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity99,
						'year' =>3,
						'value' => 25,
						'description' => 'A través de talleres teórico-prácticos se apoyó el sector rural en 242 veredas en los 25 municipios',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia313 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity100,
						'year' =>3,
						'value' => 1,
						'description' => 'Sábanas de información del número de generadores inscritos en el aplicativo del SIUR
					Documento PGIRESPEL actualizado y Plan de acción con el seguimiento realizado Trimestralmente.(530 Generadores)
					Información soporte en aplicativos del IDEAM .
					Requerimientos (comunicaciones proyecto 402).',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia314 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity101,
						'year' =>3,
						'value' => 1,
						'description' => 'Se priorizó el sector institucional, donde se socializa la guía metodológica para manejo de RESPEL en instituciones educativas, al igual hospitalario e industrial, se brinda asesoría a través de los concursos:    Transformando Residuos - Construyendo Sonrisas    y “A reducir la huella por la salud del planeta  .',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia315 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity102,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia316 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity103,
						'year' =>3,
						'value' => 2,
						'description' => 'Se realizaron ochenta y siete (87) acompañamientos a los CMGRD en los veinticinco (25) municipios de la jurisdicción
					Capacitación relacionada con la Reducción y Manejo del Riesgo de Desastres, Manejo de Aguas de Escorrentía, Buenas Prácticas Agrícolas y Uso Adecuado del Recurso Hídrico, donde se contó con la asistencia de trescientos ochenta y siete (387) participantes',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia317 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity104,
						'year' =>3,
						'value' => 2,
						'description' => 'Se ejecutaron convenios interadministrativos con los municipios de Campohermoso y Umbita, para la contrucción de obras para la mitigación del riesgo.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia318 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity105,
						'year' =>3,
						'value' => 3,
						'description' => 'Se realizaron campañas de Limpieza de cauces que generan riesgo por inundaciones y avenidas torrenciales en  la población por acumulación de material vegetal y residuos sólidos,  en los municipios de la Capilla, Macanal y Garagoa.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia319 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity106,
						'year' =>3,
						'value' => 100,
						'description' => 'Se atendió el 100% de las solicitudes realizadas por los habitantes de la jurisdicción para la evaluación de afectaciones generadas por fenómenos naturales y antrópicos mediante ciento tres (103) visitas de campo y  conceptos técnicos con recomendaciones de manejo en los municipios de Almeida, Boyacá, Campohermoso, Chinavita, Chivor, Ciénega, Garagoa, Guateque, Guayatá, Jenesano, La Capilla, Macanal, Nuevo Colón, Pachavita, Ramiriquí, San Luis de Gaceno, Santa María, Somondoco, Sutatenza, Tenza, Tibaná, Turmequé, Úmbita, Viracachá y Ventaquemada. Además de atender toda comunicación y asesoría solicitada, ',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia320 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity107,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia321 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity1,
						'year' =>4,
						'value' => 100,
						'description' => '♠ Plan de Educacion Ambiental formulado, aprobado y Ejecutado en un 100%
					♠ Conmemoración de 83 fechas ambientales
					♠ 116 Talleres de sensibilización con comunidades.
					♠ Diseño e impresión de  módulos de formación STEM para ser entregados en las Instituciones Educativas
					♠ Foro nacional de educación ambiental denominado “EDUCACION AMBIENTAL COMO HERRAMIENTA DE DESARROLLO SOSTENIBLE”
					♠ 10 murales ambientales en instituciones educativas y áreas públicas de los municipios de Garagoa, turmequé, Campohermoso, Guateque, corredor vial el sisga el secreto
					♠ Se realizó el 12°Encuentro de Chivatos en el marco de la Segunda Semana de la Educación Ambiental en el municipio de Garagoa, el cual conto con la participación de 3.500 personas.  
					♠ Se realizó el concurso ECOARTISTAS el cual conto con la participación de 273 estudiantes que presentaron 131 obras artísticas.
					♠ Se implementó la estrategia de Notichivatos',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia322 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity2,
						'year' =>4,
						'value' => 5,
						'description' => '♠ 5 Videos Institucionales (Ecoturismo, Artesanias y empredimiento)
					♠ Gestión ante la ANTV que recopila el reconocimiento de las prácticas agrícolas apoyadas por la Corporación.
					♠ Un video general de la ventanilla de negocios verdes
					♠ 15 fascículos evidenciando las diferentes prácticas agrícolas y ambientales vinculadas a la ventanilla de negocios verdes de la Corporación
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia323 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>4,
						'value' => 1,
						'description' => '♠ 40 talleres de música campesina y 30 presentaciones musicales',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia324 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>4,
						'value' => 100,
						'description' => '♠ 200 Acompañamietos a PRAES.
					♠ Foro nacional de Educación Ambiental
					♠ Foro Regional de Educación Ambiental realizado con el CIDEABOY
					♠ Cinco (5) PROCEDAS formulados en los municipios de Nuevo Colón, Chivor, Jenesano Somondoco y Ventaquemada  
					♠ 25 CIDEAS asesorados a través de 72 acompañamientos
					♠ Capacitación a los alcaldes electos en materia de normatividad relacionada con el cumplimiento y ejecución de la Política Nacional de Educación Ambiental',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia325 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity5,
						'year' =>4,
						'value' => 100,
						'description' => '♠ Plan de Medios Ejecutado
					♠ Emisión de 400 programas radiales en 15 emisoras comunitarias de la jurisdicción
					♠ Emisión de 2000 cuñas radiales en 15 emisoras comunitarias de la jurisdicción
					♠ Dos videos gestionados y publicados en canales nacionales públicos y privados  
					♠ Producción de 1.000 cuadernos-programadores y 1.000 calendarios ambientales
					♠ Publicación de 420 notas en los diferentes medios de comunicación nacionales, regionales y locales sobre la gestión realizada por la Corporación ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia326 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity6,
						'year' =>4,
						'value' => 4,
						'description' => '♠ 112 comunicados de prensa. ♠ 327 notas de prensa en medios de comunicación
					♠ Se gestionaron dos (2) videos institucionales ante las ANTV
					♠ Participamos en 14 programas radiales realizados por la secretaría de ambiente de la Gobernación de Boyacá
					♠ Se Difundió semanalmente un boletín interno 
					♠ Se han realizado 4.112 publicaciones en redes sociales
					♠ El impacto en las redes sociales es de 3.291.177 personas ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia327 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity7,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia328 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity9,
						'year' =>4,
						'value' => 100,
						'description' => ' ♠ 77,1% de avance en la implementación de la política gobierno digital 
					♠ Renovación de soporte de Oracle
					♠ Soporte especializado para el desarrollo de nuevas funcionalidades al sistema de información Administrativo y Financiero (módulo TCAFM)
					♠ Implementación módulos TCAFM,  estadisticas del Siat Web, Módulo de estadisticas del Siat Web, 
					♠ 10% de avance en la actualización del portal forestal
					♠ Actualización de seis (6) bases de datos en el Registro Nacional de Bases de datos (RNBD)
					♠ Implementación de la plataforma Geonetwork para el registro de información de metadatos
					♠ 380 solicitudes de soporte operativo resueltas en aplicaciones internas y externas, y 327 solicitudes de soporte tecnico a hardware y software
					♠ 1 capacitacion en el uso de herramientas para captura de información geografica y 2 capacitaciones en la herramienta tecnologica Siat Web.
					♠ 100% Migración del portal y subportales web.
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia330 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>4,
						'value' => 100,
						'description' => '♠ Nueve (9) capas temáticas validadas e integradas en las bases geográficas disponibles. POF, DRMI (El Varal, San Cayetano) CA, OC, Vertimientos, AF y CLC
					♠ Ocho  (8) capas de información geográfica actualizadas en el Siat Web: Obras de prevención, Residuos Sólidos, POF, DRMI, estructura ecologica principal, densidad maxima de ocupación del suelo, umbrales máximo  de suburbanización.
					♠ 373 Vistos buenos (verificación coordenadas)
					♠ 118  vuelos realizados con Drone Ebee y Phantom 4(apoyo a proyectos 103, 202, 501, 303 y subdirección administrativa y financiera) para un total de 3156 Hectáreas.
					♠ Migración de la versión del SWAMI transferido por el IGAC a la plataforma Geonetwork
					♠ Diecineve (19) metadatos actualizados en la plataforma Geonetwork
					♠ Cinco (5) capas temáticas actualizadas (Obras, Catalogo e Inventario SIMA, muestreo de suelos, conflicto fauna)',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia331 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity11,
						'year' =>4,
						'value' => 100,
						'description' => '♠ Publicación en el visor geografico de la Información Geografica correspondiente a: POF, DRMI (El Varal, San Cayetano), CA, OC, Vertimientos, AF y CLC.
					♠ A solicitud de la instituciones educativas JIDEM, Escobal y la Candelaria se realizaron dos capacitaciones en los municipios de Ramiriqui y la Capilla en el manejo y uso del Siat Web.
					♠ Socialización  en captura de datos con tecnologia GNSS e implantación de dos puntos geodesicos (mojones) con el apoyo del IGAC
					♠ Entrega de Información Geográfica misional con sus respectivas Autorizaciones de Uso a los municipios de Viracachá, Ciénega, Tenza y Santa María
					♠ Convenios interadministrativos vigentes con las 25 administraciones municipales de la jurisdicción',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia332 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity12,
						'year' =>4,
						'value' => 100,
						'description' => '♠ Consolidación del 100% de la información generada por los subsistemas del SIAC aplicables a la jurisdicción arrojando los siguientes resultados:
					N SUBSISTEMA                                                                              SIRH              SNIF
					A No. De registros reportados en el año (RRS)  ---                                 313                351
					B No. De registros esperados reportados en el año (RES)---                     46                356
					C % de actualización y reporte por subsistema (C= B/A) (PARS)            680%              99%
					   
					N SUBSISTEMA                                                                              RESPEL         RUA
					A No. de registros validados al año (RVS)                                               42              2
					B No. De registros totales a ser validados por la Corporación (RTVS)          42              2
					C % de información validada por la Corporación (PARSIV) (C = B/A)          100%         100%
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia333 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity13,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia334 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity14,
						'year' =>4,
						'value' => 100,
						'description' => '♠ Adopción POMCA RÍO GUAVIO resolución 729 de octubre de 2019.
					♠ Capactiación de fortalecimiento enfocado en sus funciones y participación en la fase de ejecución del POMCA RÍO GARAGOA. Sensibilización y  fotalecimiento en componente cambio climático. ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia335 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity15,
						'year' =>4,
						'value' => 1,
						'description' => '♠ Se realizaron 10  socializaciones en las cuales se dieron a conocer las líneas estratégicasde POMCA RIO GARAGOA, dirigida a contratistas y funcionarios de Corpochivor. 
					♠ Reunión para socialización y se aprobó matriz  en formato excel  de seguimiento  POMCA RIO GARAGOA',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia336 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity16,
						'year' =>4,
						'value' => 25,
						'description' => '
					♠ 47 Reuniones de asesoría y 42 conceptos y/o respuesta a oficios.
					♠ Socialización a los 25 municipios de la jurisdicción sobre actualización de Determinantes ambientales  
					♠ 345 Licencias revisadas en el año 2019, de los municipios de Almeida, Boyacá, Chinavita, Ciénega, Garagoa, Guateque, Nuevo Colón, Pachavita, San Luis de Gaceno, Santa María, Somondoco, Sutatenza, Tibaná y Turmequé.
					♠ Se implementó la estrategia de sensibiliación mediante comunicados de prensa, tips en formato: #sabias que, publicación en pagina web de la Resolución determinantes ambientales suelo rural y resolución POMCA RÍO GUAVIO, cuña radial). ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia337 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity17,
						'year' =>4,
						'value' => 100,
						'description' => '♠ Concertación de asuntos ambientales con los municipios de Macanal y Almeida, ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia338 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity18,
						'year' =>4,
						'value' => 25,
						'description' => '♠ Seguimiento a los 25 Municipios',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia339 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>4,
						'value' => 1,
						'description' => '♠ Se elaboró documento que genere conocimiento para la adaptacion y/o mitigacion al cambio climático.
					♠ Asesoría a los 25 municipios para la incorporación del Componente Cambio Climático dentro del ajuste y actualización de los EOT y/o PBOT.
					♠ Se realizaron 13 talleres de sensibilización a entidades territoriales, consejo de cuenca, instituciones educativas,  funcionarios de Corpochivor y alcaldes electos de la jurisdicción. ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia342 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity23,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia344 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity24,
						'year' =>4,
						'value' => 85,
						'description' => '♠ De  2042 PQRS recibidas Se han  atendido 1874  PQRS, que corresponde al 85%
					♠ Se cargaron 570 Infracciones Ambientales cargadas a VITAL
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia345 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>4,
						'value' => 100,
						'description' => '♠ Trámite a: 155 Concesiones de Aguas. 16 Permisos de Vertimientos. 64 Aprovechamientos Forestales. 28 Ocupaciones de Cauce.  3 Prospección y Exploración de Aguas Subterráneas. 6 Residuos de Construcción y Demolición. 31 Reservorios. 4 Licencias Ambientales',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia346 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity26,
						'year' =>4,
						'value' => 100,
						'description' => '♠ Seguimiento a: 154 Concesiones de Agua. 24 Ocupaciones de Cauce. 11 Permiso de Vertimientos. 38 Aprovechamientos Forestales. 70 Licencias Ambientales. 119 Infracciones Ambientales.
					6 Planta de Tratamiento de Aguas Residuales. 2 Planta de Beneficio Animal.  21 Tenedores de Fauna. 100 Generadores de Residuos Peligrosos. 22 viabilidades de reservorio. 22 libros de operaciones
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia347 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity27,
						'year' =>4,
						'value' => 1,
						'description' => '♠ 30 operativos para el control del trafico ilegal de fauna y flora. 
					♠ 4 Operativos contra minería ilegal. 
					♠ 7 Operativos a control de emisiones atmosfericas a Fuentes Móviles
					♠ 32 capacitaciones, a entidades de control y a la comunidad, en temas relacionados con el control y vigilancia de los recursos naturales',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia348 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity28,
						'year' =>4,
						'value' => 100,
						'description' => '♠ 29 Resoluciones se carácter Ambiental Sancionatorio, y 1 de Cesación  ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia349 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity29,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia350 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity30,
						'year' =>4,
						'value' => 92,
						'description' => '♠ Se fortaleció con personal las áreas de Secretaria General, Subdirección Administrativa y Financiera, Control Interno, y Subdirección de Planeación y Ordenamiento Ambiental del Territorio
					♠ Se organizó la realización de la Audiencia Pública de Rendición de Cuentas correspondiente a la vigencia 2018 y PAI 2016-2019',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia351 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity32,
						'year' =>4,
						'value' => 4,
						'description' => '♠ Se consolidó y se estructuró Informe de Gestión de la Corporación vigencia 2018, 
					♠ Informe deGestión primer semestre de 2019.
					♠ Informe de gestión correspondiente al segundo semestre de 2019
					♠ Documento PGAR 2020-2031 en proceso de evaluación del Consejo Directivo',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia353 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>4,
						'value' => 100,
						'description' => '♠ El Sistema Integrado de Gestión se mantiene activo
					♠ Actividades del Modelo Integrado de Planeación y Gestión- MIPG
					♠ Capacitación de Auditores Internos
					♠ Se realizó Auditoría Interna de Gestión ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia354 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity35,
						'year' =>4,
						'value' => 14,
						'description' => ' ♠ 14 Proyectos presentados a: 7 a Fondo de Compensación Ambiental- F.C.A, 1 al FONAM,  1 Agencia Nacional de Hidrocarburos- ANHC, y  5 Concesión Transversal del Sisga ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia356 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity36,
						'year' =>4,
						'value' => 5,
						'description' => '♠ Recursos incorporados en el presupuesto de la vigencia 2019. 
					♠ Convenio Ministerio de Minas. 
					♠ Resolución 1477 del 24 septiembre de 2019, por $363.085.086
					♠ Resolución 1527 del 3 de octubre de 2019 por $832,170,000',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia357 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>4,
						'value' => 0.65,
						'description' => '♠ Plan Elaborado y ejecutado
					Corresponde a asesorias brindadas a municipios y comunidades organizadas; en identificación y formulación de proyectos, según fuentes, metodologías y términos de referencia. Convocatorias de Negocios Verdes, convenios con bomberos y municipios ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia359 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity39,
						'year' =>4,
						'value' => 100,
						'description' => '♠ 63 Proyectos radicados en la base de datos del Banco de proyectos, 40 proyectos viabilizados. Los demás no cumplieron requisitos y otros se presentaron a otras fuentes',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia360 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity40,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia361 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity41,
						'year' =>4,
						'value' => 100,
						'description' => '♠ Se declaró como área protegida el DRMI Cuchilla El Varal, aprobado por Consejo Directivo mediante acuerdo No. 03 de 2019 y se realizó la respectiva inscripción en el RUNAP
					♠ En el marco de la alianza estratégica con WWF Colombia, se desarrollaron las fases de preparación y aprestamiento dentro del proceso de declaratoria
					♠ Se declaró la Cuchilla Mesa Alta como área protegida bajo la figura de Distrito Regional de Manejo Integrado – DRMI',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia362 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>4,
						'value' => 100,
						'description' => '♠ En virtud de lo reglamentado en el Decreto 1007 de 2018, no es necesario expedir acto administrativo para áreas priorizadas.
					♠ Se elaboró una metodología para identificar y priorizar las áreas de importancia estratégica para ser adquiridas o implementar esquemas de pago por servicios ambientales, en pro de la conservación de los recursos hídricos que surten los acueductos municipales de los 25 municipios de la jurisdicción de Corpochivor; con esta información se ajustó la capa geográfica de los diferentes instrumentos de planificación territorial.',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia363 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity43,
						'year' =>4,
						'value' => 1,
						'description' => '♠ En materia de la implementación de la zonificación y régimen de uso de los páramos, se realizó la zonificación ambiental del páramo de Rabanal -Rio Bogotá
					♠ Se realizó la zonificación ambiental del páramo de Chingaza, sumado al Análisis Social de dependencia, arraigo y vulnerabilidad en los municipios de Chivor, Guayatá y Almeida; esto comprendió en la realización de encuestas en 46 predios vinculados directamente al páramo. 
					♠ Se avanzó para el páramo de Guachaneque en la vereda de Tasvita (municipio de Úmbita) con 43 predios.
					♠ Se dio inicio a aplicación de encuestas a los propietarios de predios en páramo Guachaneque, para la caracterización de actores sociales en zona de páramo.',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia364 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>4,
						'value' => 100,
						'description' => '♠ Se atendieron veintiocho (28) solicitudes para evaluar las características ambientales y determinar viabilidad para la adquisición de treinta y tres (33) predios por parte de diecisiete (17) entes territoriales.
					♠ Se celebraron cuatro (4) convenios interadministrativos para la adquisición de siete (7) predios (41,06 hectáreas) en los municipios de San Luis de Gaceno, Viracachá, La Capilla y Almeida, con una inversión de $152.030.796  por parte de la Corporación.',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia365 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>4,
						'value' => 84,
						'description' => '♠ Se avanzó en un 75% en la implementación del plan de manejo del DRMI Páramo Cristales, Castillejo o Guachaneque
					♠ Avance del 83% en la implementación del PMA del DRMI Cuchillas Negra y Guanaque, en su segundo año.   
					♠ Avance del 85% de ejecución en implementación de plan de manejo del Páramo de Rabanal,
					♠ Avance del 90% en ejecución del PMA - DRMI San Cayetano
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia367 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity47,
						'year' =>4,
						'value' => 100,
						'description' => '♠ Ingreso de 75 ejemplares de fauna silvestre al CAVR. Dichos ejemplares fueron atendidos, valorados e iniciado el proceso de rehabilitación. 
					♠ Se realizó la liberación de 32 ejemplares en ecosistemas estratégicos de la jurisdicción.',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia368 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity48,
						'year' =>4,
						'value' => 2,
						'description' => '♠ Se participó en elaboración de Cartilla sobre   Monitoreo de Uso y Ocupación de Oso Andino  
					♠ Se apoyó el desarrollo y ejecución del convenio 022-18 suscito con la Universidad Pedagógica y Tecnológica de Colombia - UPTC, acerca de los servicios ecosistémicos que prestan las aves al ser humano
					♠ Se atendieron 18 visitas por conflicto con fauna silvestre, para las cuales se emitieron los respectivos conceptos técnicos y estrategias de mitigación de los ataques presentados.',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia369 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia370 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity50,
						'year' =>4,
						'value' => 224.35,
						'description' => '♠ Establecimiento de 224,35 Ha a trávés de Programa Usuarios Menores Asociados,  Sistema Forestal Agroforestal, programa Apadrina un  árbol, y Estrategias ERSA.
					♠ Producción de 296,213 plántulas.
					♠ 105 Talleres para socialización y difusión de los proyectos y actividades del proyecto
					♠ Asistencia técnica para el fomento de sistemas forestales realizandose visitas técnicas de 875 usuarios establecidos',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia371 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity51,
						'year' =>4,
						'value' => 30,
						'description' => '♠ Se priorizó la restauración ecológica con fines de recuperación en 40 predios para la intervención efectiva de más de 166 hectáreas, para lo cual en la presente vigencia se avanzó con la intervención de 129 hectáreas totales y 30 hectáreas efectivas para propiciar recuperación ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia372 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity52,
						'year' =>4,
						'value' => 175.76,
						'description' => '♠ Mantenimiento a 175,76 Ha de plantaciones  de sistemas forestales establecidas',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia373 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity53,
						'year' =>4,
						'value' => 3,
						'description' => '♠ A través del Esquema ERSA, se generó información del mecanismo REDD para el monitoreo de las coberturas boscosas para la lucha contra la deforestación y degradación Forestal; 
					♠ En el marco del Convenio Interadministrativo No. 031-18 suscrito con el municipio de Garagoa, se desarrollaron acciones en materia de mitigación de cambio climático y reducción de la deforestación por uso de leña, mediante el diseño, adecuación, instalación y puesta en funcionamiento de 8 sistemas energéticos que adoptan combustibles limpios y eficientes 
					♠ En el marco del Convenio de Asociación No. 038-18 suscrito con la Fundación Yarumo para la implementación del Esquema ERSA, en desarrollo de la actividad “Validar las condiciones de conservación de las coberturas protectoras”, se generó la modelación para la priorización de áreas de importancia estratégica 
					♠ En el marco del Proyecto FCA: “Implementación de acciones en el marco de la gobernanza forestal en la jurisdicción de Corpochivor, Boyacá”, se realizó el procesamiento de un set de imágenes PlanetScope 2019, mediante la herramienta Object analyst del software PCI Geomatic,  actualizandose la capa de bosque-no bosque 2019.',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia374 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity54,
						'year' =>4,
						'value' => 7,
						'description' => '♠ Esta actividad que conlleva la evaluación de los 7 Criterios y 14 Indicadores del Plan de Ordenación Forestal (POF) adoptado mediante Acuerdo No. 05 del 27 de marzo de 2019, para lo cual se se generó el documento “Evaluación línea base de criterios e indicadores plan de ordenación forestal Corpochivor”, que recopila la información del primer año de evaluación del POF relevante para orientar el proceso de ordenación forestal de la jurisdicción.',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia375 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia376 = DB::getPdo()->lastInsertId(); 





					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity61,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia382 = DB::getPdo()->lastInsertId(); 










					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia393 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity73,
						'year' =>4,
						'value' => 40,
						'description' => '♠ Se cumplió con el 100% de las 14 actividades programadas:
					1. Seguimiento construcción de nuevos pozo sépticos.
					2. Aprovechamiento de aguas lluvias.
					3. Uso de abonos verdes.
					4. Buenas prácticas agrícolas.
					5. Conservación áreas protección.
					6. Unificación - legalización usuarios.
					7. Zonificación DRMI
					8. Predios de conservación.
					9. Mejores prácticas ganaderas.
					10. Prácticas de residuos sólidos.
					11. Educación ambiental prácticas agrícolas.
					12. Educación - ahorro y cuidado del agua.
					13. Realizar jornadas de reforestación en zonas de avanzada erosión.
					14. Recuperación y siembra de cobertura vegetal en áreas especiales.',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia394 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity76,
						'year' =>4,
						'value' => 86,
						'description' => '♠ Se encuentra en ejecución el Convenio de Asociación No 003-19, cuyo objeto es la Construcción de la Evaluación Regional del Agua en las 4 cuencas hidrográficas.
					♠ 4 Talleres de entrenamiento para cargue de información de oferta, demanda y calidad hídrica, 
					♠ Construcción de modelos y análisis de información, y un (1) taller para calibrar los modelos de cuenca construidos
					♠ A corte de 31/12/2019, el Convenio se encuentra en la etapa final, con una ejecución de 90%.
					♠ El 10% restante se ejecutará en el mes de enero de 2020.
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia397 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity79,
						'year' =>4,
						'value' => 100,
						'description' => '♠ 83 PUEAA evaluados, por primera vez 42, y 39 con ajustes. 
					♠ Seguimiento a 29 Programa de Uso Eficiente y Ahorro del Agua y 3 mesas de trabajo con prestadores de servicios públicos de acueducto urbano
					♠ 37 solicitudes radicadas y atendidas respecto a la liquidación de Tasa por Utilización de Agua.
					♠ Liquidación a 1.789 usuarios, 870 facturados y 919 No cobrados por valores inferiores a $13.257
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia400 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity80,
						'year' =>4,
						'value' => 75,
						'description' => '♠ Consolidación, revisión y validación de 106 permisos ambientales en las plantillas del SIRH
					♠ 292 permisos consolidados satisfactoriamente en las plantillas, y de estos 47 cargados al SIRH.
					♠ Consolidación, revisión y validación de 13 programas de uso eficiente y ahorro del agua en las plantillas del SIRH
					♠ 25 PUEAAs consolidados satisfactoriamente en las plantillas, y de estos 5 cargados al SIRH.
					♠ Consolidación, revisión y validación de 9 seguimientos a programas de uso eficiente y ahorro del agua en las plantillas del SIRH
					♠ 26 seguimiento a PUEAAs consolidados satisfactoriamente en las plantillas, y de estos 1 cargado al SIRH.',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia401 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity81,
						'year' =>4,
						'value' => 27,
						'description' => '♠ Se realizó taller de Resolución de conflictos, con los usuarios interesados en el proceso de reglamentación, en las escuelas Foraquira y Paeces Bajo del municipio de Jenesano.
					♠ Se reviso el cuadro de distribución de caudales para la correspondiente publicación de acuerdo a los lineamientos establecidos en el decreto 1076 de 2015.
					♠ Se realizó la publicación del primer aviso que informa que el cuadro de distribución de caudales
					♠ Se encuentra en ejecución el Contrato de consultoría No 201-19, cuyo objeto es la Reglamentación de 2 microcuencas en el municipio de Jenesano. A corte de 31/12/2019, el contraro se encuentra en la etapa final, con una ejecución de 90%. El 10% restante se ejecutará en el mes de enero de 2020.',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia402 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity82,
						'year' =>4,
						'value' => 99,
						'description' => '♠ Liquidación a 110 usuarios, 98 facturados y 12 No cobrados por valores inferiores a $27.000
					♠ Cincuenta y seis (56) solicitudes radicadas y atendidas respecto a la liquidación de la Tasa Retributiva.
					♠ Se expidió la Resolución 731 de fecha 07-10-2019, por medio de la cual se da inicio al proceso de consulta.
					♠ Se encuentra en ejecución el Contrato de consultoría No 212-19, cuyo objeto es el establecimiento de las metas de carga contaminante y actualización de los objetivos de calidad. Avance 95%
					♠ Se emitieron 21 actos administrativos de segumiento a los PSMV municipales para la vigencia 2019.
					♠ Primer taller de socialización para el establecimiento de metas individuales, para el calculo de la meta global de reducción para los parametros DBO5 y SST, quinquenio 2020-2024.
					♠ Socialización proceso de consulta al Consejo Directivo de la Corporación.
					♠ El día 30 de octubre de 2019, se socializa proceso de consulta al Consejo Directivo de la Corporación.
					♠ Dos (2) PSMV evaluados - municipios de Jenesano y Sutatenza 
					♠ Sobre seguimentos a PSMV: 21  mesas de trabajo y seguimiento con prestadores de servicios públicos de alcantarillado.',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia403 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity84,
						'year' =>4,
						'value' => 100,
						'description' => '♠ En la Implementaación del PORH año 1, se han adelantado las siguientes acciones de descontaminación:
					   -Construcción de sistemas sépticos municipio de Boyacá.
					   -Optimización de PTAR Jenesano.
					   -Reglamentación de microcuencas Caraconal-Murcielagos y Firagucia.',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia405 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity85,
						'year' =>4,
						'value' => 100,
						'description' => '♠ Dieciseis (16) solicitudes radicadas y atendidas para la construcción de sistemas de tratamiento de agua reasidual doméstica en vivienda rural dispersa.
					♠ Seguimiento a Convenio con objeto de construcción de interceptores en el municipio de Guateque.
					♠ Seguimiento a Convenio con objeto de optimización de PTAR  en el municipio de Jenesano.
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia406 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity86,
						'year' =>4,
						'value' => 97,
						'description' => '♠ Acreditación del Laboratorio mediante Resolución No 0252 de 11 de marzo de 2019, por un término de cuatro años 2019-2023.
					♠ Se recibe informe general  de participación del  laboratorio  de publicación de los resultados ingresados por los participantes en la plataform para su revisión en el programa PICCAP
					♠ Se reciben muestras de suelo para análisis y  participación en el programa CALS  de la sociaedad colombiana de la ciencia del suelo
					♠ Se mantiene certificación programa CALS 2019
					♠ Se realizó  un curso en norma NTC ISO/IEC 17025 de 2017
					♠ 148 variables disponibles para matriz agua y suelo.
					♠ Se inicia con el proceso   de  mantenimiento según cronograma el día 2 de Diciembre de 2019 y  calibración el día 9 de Diciembre de 2019
					♠ Una(1) solicitud de ánalisis de suelo, 38  muestras de Suelo con un total de 440 análisis fisicoquímico y 10 solicitudes  de análisis matriz agua, para un total de 90 muestras de agua de tipo cruda y  potable  con un total de 1138 análisis entre fisicoquímico y microbiológico.',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia407 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity87,
						'year' =>4,
						'value' => 100,
						'description' => '♠ Operación y funcionamiento de los sensores y del registro de las variables meteorológicas y de condiciones del suelo en las 4 estaciones climatológicas 
					♠ Operación y funcionamiento de los sensores y del registro de las variables de nivel, velocidad, caudal y precipitacion de la estacion Hidrológica Teatinos desde el aplicativo en tiempo real de Corpochivor.
					♠ Se analizaron las muestra y se generó el reporte de resultados de la segunda campaña de red hídrica en 35 puntos de monitoreo.
					♠ Se realiza tercera  campaña de red hídrica en 21 puntos de monitoreo, realizando aforo de caudal y toma de muestra para análisis físico-químico y microbiológicos. Se programa para culminar la totalidad de puntos ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia408 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity88,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia409 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity89,
						'year' =>4,
						'value' => 1,
						'description' => '♠ Acompañamiento a los  subsectores de Frutas, Café, Cacao, Tubérculos, Apicultura y Sistemas silvopastoriles.
					♠ Verificación de plantación de árboles frutales entregados y georreferenciación a 5 parcelas pilotos vinculadas a procesos de producción para el desarrollo de modelos sostenibles en el municipio de Guayatá.
					♠ Se instalaron 190 colmenas en 19 nucleos.  ♠ Se capacito a 100 personas en apicultura
					♠ Se realizo el montaje de 87 sistemas silvopastoriles',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia410 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity90,
						'year' =>4,
						'value' => 2,
						'description' => '♠ Realización de 39 Talleres
					♠ En artesanias: Extracción  sostenible de eneas; Acompañamiento ambiental en: biofábrica transformación calceta de plátano; reutilización de tintes y manejo de residuos;  cestería, en textiles   talleres.  
					♠ Turismo: Concertación en Mesa  y Consejo Departamental de Turismo y en 6 consejos provinciales y municipales de turismo; asesoría en 12 proyectos de turismo de naturaleza; se realizaron proyectos de tres senderos eco– turísticos.  Participación en el XXXV encuentro de autoridades regionales de turismo.
					♠Asesoria para reconocimiento de áreas de interés ecoturistico, y diseño de la ruta pedagógica y ecolóligca programa colegios amigos del turismo.',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia411 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity91,
						'year' =>4,
						'value' => 25,
						'description' => '♠ Acciones dirigidas al fortalecimiento de una iniciativa ambiental  para la disminución de la contaminación en los procesos de produccción de tubérculos andinos.
					♠ implementación de un proyecto de Sagú para la agroindustrialización del almidón.  
					♠ Siembra de árboles nativos para proteecion y recuperacion de suelos,  en el municipio de Guayatá 
					♠ Realización de segunda convocatoria para negocios verdes con el objetivo de impulsar y apoyar procesos agroindustriales
					♠ Seguimiento a los 20 convenios de asociacion vinculados a la ventanilla de negocios verdes.
					♠ Participación en las feria de BIOEXPO Cali y en   Boyacá en Corferias  
					♠ Se firmaron 20 convenios para incentivar el uso de tecnologias limpias
					♠ Realización de 39 Talleres (Proyectos. coaching, tecnologías limpias, etc.)',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia412 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity92,
						'year' =>4,
						'value' => 0.98,
						'description' => '♠ Construcción del Plan Estratégico de Red de negocios verdes
					♠ En la Mesa sectorial del café se realizó el plan de acción sectorial y se determinó como puntos principales trabajar la calidad del café.
					♠ Se realizaron solicitudes  a empresas consultoras para la radicación de la marca aval de confianza ante la Superintendencia de Industria y Comercio. Así mismo, se hizo entrega de los avances del proceso Marca Café    Valletenzano   al GAL VALLETENZANO  como aliado del proceso para continuar con los procesos de registro de marca ante la Superintendencia de Industria y Comercio.
					♠ Se realizó la gira de intercambios exitosos al eje cafetero con emprendedores de negocios verdes
					♠ Se realizaron dos encuentros de la red de empresas verdes
					♠ (51) emprendimientos  de la jurisdicción de Corpochivor acreditados como negocio verde
					♠ Gira de intercambios exitosos al eje cafetero con 20 emprendedores de negocios verdes.',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia413 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity93,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia414 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity94,
						'year' =>4,
						'value' => 100,
						'description' => '♠ Se apoyó los sistemas existentes  y en Construcción (Campohermoso,  Úmbita, Chinavita, Garagoa, Santa María, Somondoco, Sutatenza, Turmequé, Guayatá y Pachavita)',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia415 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity95,
						'year' =>4,
						'value' => 25,
						'description' => '♠ En PGIRS municipales y en Comparendo Ambiental, se brindó acompañamiento a los 25 municipios.',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia416 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity96,
						'year' =>4,
						'value' => 1,
						'description' => '♠ Se elaboró proyecto encaminado al aprovechamiento de residuos sólidos en un sector productivo',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia417 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity97,
						'year' =>4,
						'value' => 1,
						'description' => '♠ Se brinda acompañamiento constante al sector agroveterinario como prioritario. 
					♠ Se apoya también al sector institucional, hospitalario',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia418 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity98,
						'year' =>4,
						'value' => 25,
						'description' => '♠ Acompañamiento en los 25 municipios con acciones en  manejo adecuado de residuos posconsumo',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia419 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity99,
						'year' =>4,
						'value' => 25,
						'description' => '♠ Se acompañó en los 25 municipios con acciones en aprovechamiento de residuos y con acciones en  el área rural respecto al manejo adecuado de residuos.',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia420 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity100,
						'year' =>4,
						'value' => 1,
						'description' => '♠ Se mantiene actualizada la base de datos acorde con el diagnóstico de establecimientos generadores de RESPEL que se viene desarrollando
					♠ Sábanas de información del número de generadores inscritos en el aplicativo del SIUR',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia421 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity101,
						'year' =>4,
						'value' => 1,
						'description' => '♠ Se priorizó el sector agroveterinario, sensibilizando sobre manejo de plaguicidas.',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia422 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity102,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia423 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity103,
						'year' =>4,
						'value' => 2,
						'description' => '♠ Ciento veinticuatro (124) acompañamientos a los CMGRD en los veinticinco municipios.
					♠ Capacitación en procesos de Gestión del riesgo a 15 Municipios (Ramiriqui, Guayata, Somondoco, Viracacha, Boyaca, Turmeque, Nuevo Colón, Jenesano, Tibana, Umbita, Chivor, La Capilla, Tenza; Guateque y Sutatenza)
					♠ Capacitación en prevención, manejo y control del Riesgo de desastres a los cuerpos de bomberos de los municipios de Campohermoso, Santa María, Sutatenza, Guateque, Garagoa, Ramiriqui, Nuevo Colon, Ciénega, Jenesano y Ventaquemada.',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia424 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity104,
						'year' =>4,
						'value' => 4,
						'description' => '
					♠ Suscripción de Tres Convenios InteradministrativosNo 030, 032 y 035 de 2019, para la continuación de canalización de la Quebrada Siaguiza en el Municipio de Chinavita, para la continuación de obras para la mitigación del riesgo de inestabilidad asociado a la erosión y socavación generada por el cauce de la Quebrada La Barrosa en el Municipio de Umbita, y para la construcción de obras para la mitigación del riesgo de inestabilidad de taludes y represamientos de cauce en el Municipio de Garagoa, Respectivamente.
					♠Seguimiento a los convenios Interadministrativos No 023 y 027 de 2018, para la construcción de obras civiles para la mitigación del riesgo y estabilización de taludes en la Vereda Volcán del Municipio de Tenza y en la vereda Rique del Municipio de Boyacá
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia425 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity105,
						'year' =>4,
						'value' => 3,
						'description' => '♠ Se realizó Campañas de Limpieza de cauces que generan riesgo por inundaciones y avenidas torrenciales por acumulación de material vegetal y residuos sólidos,  en los municipios de la Capilla, Macanal y Garagoa.

					GARAGOA-  20 FEBRERO 2019 / Q. Manzanos
					SUTATENZA - 21 FEBRERO 2019 / Q. Sutatenza - sector Tenzusuca.  
					TIBANA - 22 FEBRERO 2018 / Q. Los Perros.
					SANTA MARIA - 27 FEBRERO 2018 / Caño cangrejo. 

					Con estas campañas se logró la recolección de 35 toneladas de material vegetal que obstruían el flujo normal de estas fuentes hídricas y se disminuyó el riesgo ante inundaciones y avenidas torrenciales en beneficio de 6093 habitantes de los municipios priorizados.
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia426 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity106,
						'year' =>4,
						'value' => 100,
						'description' => '♠ Se atendieron 324 solicitudes recibidas que corresponden al 100%, para la evaluación de afectaciones generada por fenómenos naturales y antrópicos 
					♠ Ciento cinco (105) visitas de campo y conceptos técnicos con recomendaciones de manejo en los municipios de Boyacá, Chivor, Ciénega,  Garagoa, Guateque, Guayatá, Jenesano, La Capilla, Macanal, Nuevo Colon,pachavita, Ramiriquí, San Luis de Gaceno, Santa María, Somondoco, Sutatenza, Tibaná,Turmeque, Úmbita, Ventaquemada y Viracachá, 
					♠ Respuesta a doscientas diecinueve (219) peticiones divididas en Asesorias, Acompañamiento, Capacitación o Asistencia Técnica en Prevención y Manejo en Gestión del Riesgo',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia427 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity107,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia428 = DB::getPdo()->lastInsertId(); 

					 DB::table('financing_sources')->insert([
						'father_id' => 11,
						'code' => '1.1.1.1.1.1.1.1',
						'name' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
						'description' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 20,
						]);
						$idFuente1 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 90,
						'code' => '1.1.2.4.2.3',
						'name' => 'Venta de bienes y servicios',
						'description' => 'Venta de bienes y servicios',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 20,
						]);
						$idFuente2 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 27,
						'code' => '1.1.2.1.1.1.1.1',
						'name' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia actual)',
						'description' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 20,
						]);
						$idFuente3 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 208,
						'code' => '1.2.5.1.3',
						'name' => 'Otros Convenios',
						'description' => 'Otros Convenios',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 20,
						]);
						$idFuente4 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 42,
						'code' => '1.1.2.2.1.1.1.1',
						'name' => 'Tasa retributiva (vigencia actual)',
						'description' => 'Tasa retributiva (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 20,
						]);
						$idFuente5 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 45,
						'code' => '1.1.2.2.1.1.2.1',
						'name' => 'Tasa por el uso del agua (vigencia actual)',
						'description' => 'Tasa por el uso del agua (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 20,
						]);
						$idFuente6 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 48,
						'code' => '1.1.2.2.1.1.3.1',
						'name' => 'Tasa de aprovechamiento Forestal (vigencia actual)',
						'description' => 'Tasa de aprovechamiento Forestal (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 20,
						]);
						$idFuente7 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 84,
						'code' => '1.1.2.3.1.1.1',
						'name' => 'Multas ambientales (vigencia actual)',
						'description' => 'Multas ambientales (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 20,
						]);
						$idFuente8 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 79,
						'code' => '1.1.2.2.2.8.1',
						'name' => 'Otros servicios (vigencia actual)',
						'description' => 'Otros servicios (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 20,
						]);
						$idFuente9 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 145,
						'code' => '1.2.2.6',
						'name' => 'Rendimientos financieros',
						'description' => 'Rendimientos financieros',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 20,
						]);
						$idFuente10 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 145,
						'code' => '1.2.2.7',
						'name' => 'Excedentes financieros',
						'description' => 'Excedentes financieros',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 20,
						]);
						$idFuente11 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 241,
						'code' => '1.2.6.3.5',
						'name' => 'Recuperación de cartera Otras tasas',
						'description' => 'Recuperación de cartera Otras tasas',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 20,
						]);
						$idFuente12 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 119,
						'code' => '1.1.2.5.1.1.1.4',
						'name' => 'Aportes de la Nación Funcionamiento',
						'description' => 'Aportes de la Nación Funcionamiento',
						'type_id' => 23,
						'final_level' => true,
						'group_id' => 20,
						]);
						$idFuente13 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 125,
						'code' => '1.1.2.5.1.2.1.4',
						'name' => 'Aportes del FCA para Gastos de personal',
						'description' => 'Aportes del FCA para Gastos de personal',
						'type_id' => 24,
						'final_level' => true,
						'group_id' => 20,
						]);
						$idFuente14 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 124,
						'code' => '1.1.2.5.1.2.2',
						'name' => 'Aportes inversión Fondo de Compensación Ambiental -FCA',
						'description' => 'Aportes inversión Fondo de Compensación Ambiental -FCA',
						'type_id' => 24,
						'final_level' => true,
						'group_id' => 20,
						]);
						$idFuente15 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente1,
						'value' => 1610548149,
						'functioning_percentage' => 20,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 80,
						'functioning' => 322109629.8,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1288438519.2,
						'year' => 1,
						]);
						$idPlan1 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente2,
						'value' => 60000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 60000000,
						'year' => 1,
						]);
						$idPlan2 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente3,
						'value' => 6260087000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 6260087000,
						'year' => 1,
						]);
						$idPlan3 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente4,
						'value' => 50000000,
						'functioning_percentage' => 30,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 60,
						'functioning' => 15000000,
						'debt_service' => 0,
						'fund' => 5000000,
						'investment' => 30000000,
						'year' => 1,
						]);
						$idPlan4 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente5,
						'value' => 243000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 243000000,
						'year' => 1,
						]);
						$idPlan5 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente6,
						'value' => 71400000,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 64260000,
						'debt_service' => 0,
						'fund' => 7140000,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan6 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente8,
						'value' => 10000000,
						'functioning_percentage' => 82.823,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0.685,
						'investment_percentage' => 16.492,
						'functioning' => 8282300,
						'debt_service' => 0,
						'fund' => 68500,
						'investment' => 1649200,
						'year' => 1,
						]);
						$idPlan7 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente9,
						'value' => 850000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 850000,
						'year' => 1,
						]);
						$idPlan8 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente10,
						'value' => 58360000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 58360000,
						'year' => 1,
						]);
						$idPlan9 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente11,
						'value' => 907243151,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 816518835.9,
						'debt_service' => 0,
						'fund' => 90724315.1,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan10 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente12,
						'value' => 31200000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 3120000,
						'investment' => 28080000,
						'year' => 1,
						]);
						$idPlan11 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente13,
						'value' => 1831418603,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 1831418603,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan12 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente14,
						'value' => 609869731,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 609869731,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan13 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente15,
						'value' => 1210665926,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 100,
						'investment_percentage' => 0,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 1210665926,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan14 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente1,
						'value' => 1838501000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 6,
						'investment_percentage' => 94,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 110310060,
						'investment' => 1728190940,
						'year' => 2,
						]);
						$idPlan15 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente2,
						'value' => 100000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 10000000,
						'investment' => 90000000,
						'year' => 2,
						]);
						$idPlan16 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente3,
						'value' => 6245603600,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 20,
						'investment_percentage' => 80,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 1249120720,
						'investment' => 4996482880,
						'year' => 2,
						]);
						$idPlan17 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente4,
						'value' => 709542947,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 709542947,
						'year' => 2,
						]);
						$idPlan18 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente5,
						'value' => 292821000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 29282100,
						'investment' => 263538900,
						'year' => 2,
						]);
						$idPlan19 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente6,
						'value' => 77082000,
						'functioning_percentage' => 10,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 90,
						'functioning' => 7708200,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 69373800,
						'year' => 2,
						]);
						$idPlan20 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente8,
						'value' => 20000000,
						'functioning_percentage' => 16.176,
						'debt_service_percentage' => 0,
						'fund_percentage' => 50.01,
						'investment_percentage' => 33.814,
						'functioning' => 3235200,
						'debt_service' => 0,
						'fund' => 10002000,
						'investment' => 6762800,
						'year' => 2,
						]);
						$idPlan21 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente9,
						'value' => 6022000,
						'functioning_percentage' => 95,
						'debt_service_percentage' => 0,
						'fund_percentage' => 5,
						'investment_percentage' => 0,
						'functioning' => 5720900,
						'debt_service' => 0,
						'fund' => 301100,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan22 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente10,
						'value' => 113376000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 113376000,
						'year' => 2,
						]);
						$idPlan23 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente11,
						'value' => 1630636049,
						'functioning_percentage' => 80,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 20,
						'functioning' => 1304508839.2,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 326127209.8,
						'year' => 2,
						]);
						$idPlan24 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente12,
						'value' => 33600000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 33600000,
						'year' => 2,
						]);
						$idPlan25 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente13,
						'value' => 1953056000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 1953056000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan26 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente14,
						'value' => 277237412,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 277237412,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan27 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente15,
						'value' => 1989374861,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1989374861,
						'year' => 2,
						]);
						$idPlan28 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente1,
						'value' => 2001545767,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 5,
						'investment_percentage' => 95,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 100077288.35,
						'investment' => 1901468478.65,
						'year' => 3,
						]);
						$idPlan29 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente2,
						'value' => 155452500,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 15545250,
						'investment' => 139907250,
						'year' => 3,
						]);
						$idPlan30 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente3,
						'value' => 7908338457,
						'functioning_percentage' => 10,
						'debt_service_percentage' => 0,
						'fund_percentage' => 20,
						'investment_percentage' => 70,
						'functioning' => 790833845.7,
						'debt_service' => 0,
						'fund' => 1581667691.4,
						'investment' => 5535836919.9,
						'year' => 3,
						]);
						$idPlan31 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente4,
						'value' => 572594022,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 57259402.2,
						'investment' => 515334619.8,
						'year' => 3,
						]);
						$idPlan32 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente5,
						'value' => 204290000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 5,
						'investment_percentage' => 95,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 10214500,
						'investment' => 194075500,
						'year' => 3,
						]);
						$idPlan33 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente6,
						'value' => 105457000,
						'functioning_percentage' => 10,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 90,
						'functioning' => 10545700,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 94911300,
						'year' => 3,
						]);
						$idPlan34 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente8,
						'value' => 20000000,
						'functioning_percentage' => 2.25,
						'debt_service_percentage' => 0,
						'fund_percentage' => 19.525,
						'investment_percentage' => 78.225,
						'functioning' => 450000,
						'debt_service' => 0,
						'fund' => 3905000,
						'investment' => 15645000,
						'year' => 3,
						]);
						$idPlan35 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente9,
						'value' => 5522000,
						'functioning_percentage' => 55,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 45,
						'functioning' => 3037100,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 2484900,
						'year' => 3,
						]);
						$idPlan36 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente10,
						'value' => 119612000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 119612000,
						'year' => 3,
						]);
						$idPlan37 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente11,
						'value' => 932480761,
						'functioning_percentage' => 80,
						'debt_service_percentage' => 0,
						'fund_percentage' => 5,
						'investment_percentage' => 15,
						'functioning' => 745984608.8,
						'debt_service' => 0,
						'fund' => 46624038.05,
						'investment' => 139872114.15,
						'year' => 3,
						]);
						$idPlan38 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente12,
						'value' => 234500000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 234500000,
						'year' => 3,
						]);
						$idPlan39 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente13,
						'value' => 1999555000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 1999555000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan40 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente14,
						'value' => 337687699,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 337687699,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan41 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente15,
						'value' => 2048844071,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 2048844071,
						'year' => 3,
						]);
						$idPlan42 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente1,
						'value' => 1976205204,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 5,
						'investment_percentage' => 95,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 98810260.2,
						'investment' => 1877394943.8,
						'year' => 4,
						]);
						$idPlan43 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente2,
						'value' => 110000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 11000000,
						'investment' => 99000000,
						'year' => 4,
						]);
						$idPlan44 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente3,
						'value' => 9319000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 20,
						'investment_percentage' => 80,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 1863800000,
						'investment' => 7455200000,
						'year' => 4,
						]);
						$idPlan45 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente4,
						'value' => 667252517,
						'functioning_percentage' => 5,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 95,
						'functioning' => 33362625.85,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 633889891.15,
						'year' => 4,
						]);
						$idPlan46 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente5,
						'value' => 231119945,
						'functioning_percentage' => 4,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 96,
						'functioning' => 9244797.8,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 221875147.2,
						'year' => 4,
						]);
						$idPlan47 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente6,
						'value' => 112393409,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 112393409,
						'year' => 4,
						]);
						$idPlan48 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente7,
						'value' => 50000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 50000000,
						'year' => 4,
						]);
						$idPlan49 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente8,
						'value' => 7700000,
						'functioning_percentage' => 22.66,
						'debt_service_percentage' => 0,
						'fund_percentage' => 29.38,
						'investment_percentage' => 47.96,
						'functioning' => 1744820,
						'debt_service' => 0,
						'fund' => 2262260,
						'investment' => 3692920,
						'year' => 4,
						]);
						$idPlan50 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente9,
						'value' => 180000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 180000,
						'year' => 4,
						]);
						$idPlan51 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente10,
						'value' => 73000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 73000000,
						'year' => 4,
						]);
						$idPlan52 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente11,
						'value' => 3715863077,
						'functioning_percentage' => 60,
						'debt_service_percentage' => 0,
						'fund_percentage' => 5,
						'investment_percentage' => 35,
						'functioning' => 2229517846.2,
						'debt_service' => 0,
						'fund' => 185793153.85,
						'investment' => 1300552076.95,
						'year' => 4,
						]);
						$idPlan53 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente12,
						'value' => 304161601,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 304161601,
						'year' => 4,
						]);
						$idPlan54 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente13,
						'value' => 2061518000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 2061518000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan55 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente14,
						'value' => 363085086,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 363085086,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan56 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente15,
						'value' => 2966577461,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 2966577461,
						'year' => 4,
						]);
						$idPlan57 = DB::getPdo()->lastInsertId();
						 
					DB::table('implementations')->insert([
						'p_a_i_s_id'=>$idpai1,
						]);
						$idImplementation1 = DB::getPdo()->lastInsertId();
	 
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 1621959131,
						'financial_plans_id' => $idPlan1,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo1 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 282545219,
						'financial_plans_id' => $idPlan2,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo2 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 6597658017,
						'financial_plans_id' => $idPlan3,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo3 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 30000000,
						'financial_plans_id' => $idPlan4,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo4 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 236202945,
						'financial_plans_id' => $idPlan5,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo5 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 105004625,
						'financial_plans_id' => $idPlan6,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo6 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 34098931,
						'financial_plans_id' => $idPlan7,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo7 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 716042,
						'financial_plans_id' => $idPlan8,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo8 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 100158656,
						'financial_plans_id' => $idPlan9,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo9 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 907243151,
						'financial_plans_id' => $idPlan10,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo10 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 25175129,
						'financial_plans_id' => $idPlan11,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo11 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 1771398815,
						'financial_plans_id' => $idPlan12,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo12 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 448339988,
						'financial_plans_id' => $idPlan13,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo13 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 632939659,
						'financial_plans_id' => $idPlan14,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo14 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 1849609315,
						'financial_plans_id' => $idPlan15,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo15 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 175533954,
						'financial_plans_id' => $idPlan16,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo16 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 6106147942,
						'financial_plans_id' => $idPlan17,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo17 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 509227361,
						'financial_plans_id' => $idPlan18,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo18 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 178178855,
						'financial_plans_id' => $idPlan19,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo19 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 117582338,
						'financial_plans_id' => $idPlan20,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo20 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 19326602,
						'financial_plans_id' => $idPlan21,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo21 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 405511,
						'financial_plans_id' => $idPlan22,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo22 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 177917270,
						'financial_plans_id' => $idPlan23,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo23 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 1630636049,
						'financial_plans_id' => $idPlan24,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo24 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 132587359,
						'financial_plans_id' => $idPlan25,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo25 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 1891611847,
						'financial_plans_id' => $idPlan26,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo26 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 6743077,
						'financial_plans_id' => $idPlan27,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo27 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 1447646179,
						'financial_plans_id' => $idPlan28,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo28 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 1834306968,
						'financial_plans_id' => $idPlan29,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo29 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 118304215,
						'financial_plans_id' => $idPlan30,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo30 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 9652635367,
						'financial_plans_id' => $idPlan31,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo31 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 189135262,
						'financial_plans_id' => $idPlan32,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo32 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 232920227,
						'financial_plans_id' => $idPlan33,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo33 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 112618674,
						'financial_plans_id' => $idPlan34,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo34 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 6754252,
						'financial_plans_id' => $idPlan35,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo35 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 151900,
						'financial_plans_id' => $idPlan36,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo36 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 91660825,
						'financial_plans_id' => $idPlan37,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo37 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 932480761,
						'financial_plans_id' => $idPlan38,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo38 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 318208906,
						'financial_plans_id' => $idPlan39,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo39 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 1973690390,
						'financial_plans_id' => $idPlan40,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo40 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 60697241,
						'financial_plans_id' => $idPlan41,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo41 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 886839464,
						'financial_plans_id' => $idPlan42,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo42 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 2069692716,
						'financial_plans_id' => $idPlan43,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo43 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 256717736,
						'financial_plans_id' => $idPlan44,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo44 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 9282442949,
						'financial_plans_id' => $idPlan45,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo45 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 705112747,
						'financial_plans_id' => $idPlan46,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo46 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 248046667,
						'financial_plans_id' => $idPlan47,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo47 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 117238964,
						'financial_plans_id' => $idPlan48,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo48 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 0,
						'financial_plans_id' => $idPlan49,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo49 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 30181186,
						'financial_plans_id' => $idPlan50,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo50 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 458917,
						'financial_plans_id' => $idPlan51,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo51 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 97193530,
						'financial_plans_id' => $idPlan52,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo52 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 3715863077,
						'financial_plans_id' => $idPlan53,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo53 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 611865296,
						'financial_plans_id' => $idPlan54,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo54 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 2022690326,
						'financial_plans_id' => $idPlan55,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo55 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 85321772,
						'financial_plans_id' => $idPlan56,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo56 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 1567965623,
						'financial_plans_id' => $idPlan57,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo57 = DB::getPdo()->lastInsertId();
						 
                    
				 DB::table('cost_sources')->insert([
					'father_id' => 2,
					'code' => '2.1.1',
					'name' => 'GASTOS DE PERSONAL',
					'description' => 'GASTOS DE PERSONAL',
					'functioning' => TRUE,
					'compensation' => FALSE,
					'debt_service' => FALSE,
					'group_id' => 20,
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
					'group_id' => 20,
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
					'group_id' => 20,
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
					'group_id' => 20,
					]);
					$idFuenteGasto4 = DB::getPdo()->lastInsertId();
					
					 
				 DB::table('cost_sources')->insert([
					'father_id' => 16,
					'code' => '2.1.3.2.1.1',
					'name' => 'Mesadas pensionales (de pensiones)',
					'description' => 'Mesadas pensionales (de pensiones)',
					'functioning' => TRUE,
					'compensation' => FALSE,
					'debt_service' => FALSE,
					'group_id' => 20,
					]);
					$idFuenteGasto5 = DB::getPdo()->lastInsertId();
					
					 
				 DB::table('cost_sources')->insert([
					'father_id' => 16,
					'code' => '2.1.3.2.1.2',
					'name' => 'Bonos pensionales (de pensiones)',
					'description' => 'Bonos pensionales (de pensiones)',
					'functioning' => TRUE,
					'compensation' => FALSE,
					'debt_service' => FALSE,
					'group_id' => 20,
					]);
					$idFuenteGasto6 = DB::getPdo()->lastInsertId();
					
					 
				 DB::table('cost_sources')->insert([
					'father_id' => 19,
					'code' => '2.1.3.3.2',
					'name' => 'Conciliaciones',
					'description' => 'Conciliaciones',
					'functioning' => TRUE,
					'compensation' => FALSE,
					'debt_service' => FALSE,
					'group_id' => 20,
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
					'group_id' => 20,
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
					'group_id' => 20,
					]);
					$idFuenteGasto9 = DB::getPdo()->lastInsertId();
					
				DB::table('cost_sources')->insert([
					'father_id' => 2,
					'code' => '2.1.5',
					'name' => 'Destinatarios  de otras transferencias',
					'description' => 'Destinatarios  de otras transferencias',
					'functioning' => TRUE,
					'compensation' => FALSE,
					'debt_service' => FALSE,
					'group_id' => 20,
					]);
					$idFuenteGasto10 = DB::getPdo()->lastInsertId();
					
				DB::table('cost_sources')->insert([
					'father_id' => 2,
					'code' => '2.1.6',
					'name' => 'A ESQUEMAS ASOCIATIVOS',
					'description' => 'A ESQUEMAS ASOCIATIVOS',
					'functioning' => TRUE,
					'compensation' => FALSE,
					'debt_service' => FALSE,
					'group_id' => 20,
					]);
					$idFuenteGasto11 = DB::getPdo()->lastInsertId();

					 DB::table('financial_costs')->insert([
						'year' => 1,
						'value_bugeted' => 147463332,
						'value_comitted' => 143217357,
						'value_paid' => 132688660,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto1,
						'p_a_i_id' => $idpai1,
						'group_id' => 20,
						]);
						$idGasto1 = DB::getPdo()->lastInsertId();

					 DB::table('financial_costs')->insert([
						'year' => 1,
						'value_bugeted' => 734785761,
						'value_comitted' => 684350939,
						'value_paid' => 605898879,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto3,
						'p_a_i_id' => $idpai1,
						'group_id' => 20,
						]);
						$idGasto3 = DB::getPdo()->lastInsertId();

					 DB::table('financial_costs')->insert([
						'year' => 1,
						'value_bugeted' => 23580018,
						'value_comitted' => 23580018,
						'value_paid' => 23580018,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto9,
						'p_a_i_id' => $idpai1,
						'group_id' => 20,
						]);
						$idGasto4 = DB::getPdo()->lastInsertId();

					 DB::table('financial_costs')->insert([
						'year' => 1,
						'value_bugeted' => 393634,
						'value_comitted' => 393633,
						'value_paid' => 393633,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto8,
						'p_a_i_id' => $idpai1,
						'group_id' => 20,
						]);
						$idGasto5 = DB::getPdo()->lastInsertId();
						
						 
					 DB::table('financial_costs')->insert([
						'year' => 1,
						'value_bugeted' => 1316718730,
						'value_comitted' => 1315405826,
						'value_paid' => 1309468140,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => FALSE,
						'compensation' => TRUE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto4,
						'p_a_i_id' => $idpai1,
						'group_id' => 20,
						]);
						$idGasto6 = DB::getPdo()->lastInsertId();
						
						 
					 DB::table('financial_costs')->insert([
						'year' => 1,
						'value_bugeted' => 13341713,
						'value_comitted' => 13341282,
						'value_paid' => 13341282,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto10,
						'p_a_i_id' => $idpai1,
						'group_id' => 20,
						]);
						$idGasto7 = DB::getPdo()->lastInsertId();

					 DB::table('financial_costs')->insert([
						'year' => 1,
						'value_bugeted' => 306606366,
						'value_comitted' => 306606365,
						'value_paid' => 228323980,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto7,
						'p_a_i_id' => $idpai1,
						'group_id' => 20,
						]);
						$idGasto9 = DB::getPdo()->lastInsertId();


					 DB::table('financial_costs')->insert([
						'year' => 1,
						'value_bugeted' => 1765565257,
						'value_comitted' => 1731724575,
						'value_paid' => 1721817438,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto1,
						'p_a_i_id' => $idpai1,
						'group_id' => 20,
						]);
						$idGasto8 = DB::getPdo()->lastInsertId();
						

					 DB::table('financial_costs')->insert([
						'year' => 1,
						'value_bugeted' => 345679347,
						'value_comitted' => 307391977,
						'value_paid' => 167877635,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto3,
						'p_a_i_id' => $idpai1,
						'group_id' => 20,
						]);
						$idGasto10 = DB::getPdo()->lastInsertId();
						
					 DB::table('financial_costs')->insert([
						'year' => 1,
						'value_bugeted' => 13577893,
						'value_comitted' => 13577893,
						'value_paid' => 13577893,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto8,
						'p_a_i_id' => $idpai1,
						'group_id' => 20,
						]);
						$idGasto11 = DB::getPdo()->lastInsertId();
						
					 DB::table('financial_costs')->insert([
						'year' => 1,
						'value_bugeted' => 316465837,
						'value_comitted' => 316465837,
						'value_paid' => 316465837,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto7,
						'p_a_i_id' => $idpai1,
						'group_id' => 20,
						]);
						$idGasto12 = DB::getPdo()->lastInsertId();
						
						 
					 DB::table('financial_costs')->insert([
						'year' => 2,
						'value_bugeted' => 250552341,
						'value_comitted' => 191948285,
						'value_paid' => 176204751,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto1,
						'p_a_i_id' => $idpai1,
						'group_id' => 20,
						]);
						$idGasto13 = DB::getPdo()->lastInsertId();


					 DB::table('financial_costs')->insert([
						'year' => 2,
						'value_bugeted' => 952450842,
						'value_comitted' => 867794851,
						'value_paid' => 818719980,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto3,
						'p_a_i_id' => $idpai1,
						'group_id' => 20,
						]);
						$idGasto15 = DB::getPdo()->lastInsertId();
						
					 DB::table('financial_costs')->insert([
						'year' => 2,
						'value_bugeted' => 25037808,
						'value_comitted' => 25036848,
						'value_paid' => 25036848,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto9,
						'p_a_i_id' => $idpai1,
						'group_id' => 20,
						]);
						$idGasto16 = DB::getPdo()->lastInsertId();

					 DB::table('financial_costs')->insert([
						'year' => 2,
						'value_bugeted' => 3715937,
						'value_comitted' => 3715937,
						'value_paid' => 3715937,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto8,
						'p_a_i_id' => $idpai1,
						'group_id' => 20,
						]);
						$idGasto17 = DB::getPdo()->lastInsertId();
						
						 
					 DB::table('financial_costs')->insert([
						'year' => 2,
						'value_bugeted' => 1409015848,
						'value_comitted' => 1401758018,
						'value_paid' => 1351302519,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => FALSE,
						'compensation' => TRUE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto4,
						'p_a_i_id' => $idpai1,
						'group_id' => 20,
						]);
						$idGasto18 = DB::getPdo()->lastInsertId();
						
						 
					 DB::table('financial_costs')->insert([
						'year' => 2,
						'value_bugeted' => 47855070,
						'value_comitted' => 47647898,
						'value_paid' => 47647898,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto10,
						'p_a_i_id' => $idpai1,
						'group_id' => 20,
						]);
						$idGasto19 = DB::getPdo()->lastInsertId();

					 DB::table('financial_costs')->insert([
						'year' => 2,
						'value_bugeted' => 41561046,
						'value_comitted' => 41561046,
						'value_paid' => 41561046,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto7,
						'p_a_i_id' => $idpai1,
						'group_id' => 20,
						]);
						$idGasto20 = DB::getPdo()->lastInsertId();
						
						 
					 DB::table('financial_costs')->insert([
						'year' => 2,
						'value_bugeted' => 1884949932,
						'value_comitted' => 1863114721,
						'value_paid' => 1816630836,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto1,
						'p_a_i_id' => $idpai1,
						'group_id' => 20,
						]);
						$idGasto21 = DB::getPdo()->lastInsertId();

					 DB::table('financial_costs')->insert([
						'year' => 2,
						'value_bugeted' => 331765480,
						'value_comitted' => 272381628,
						'value_paid' => 67210884,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto3,
						'p_a_i_id' => $idpai1,
						'group_id' => 20,
						]);
						$idGasto22 = DB::getPdo()->lastInsertId();
						
					 DB::table('financial_costs')->insert([
						'year' => 2,
						'value_bugeted' => 13578000,
						'value_comitted' => 13578000,
						'value_paid' => 13578000,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto8,
						'p_a_i_id' => $idpai1,
						'group_id' => 20,
						]);
						$idGasto23 = DB::getPdo()->lastInsertId();
						
						 
					 DB::table('financial_costs')->insert([
						'year' => 3,
						'value_bugeted' => 312823262,
						'value_comitted' => 248567072,
						'value_paid' => 248567072,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto1,
						'p_a_i_id' => $idpai1,
						'group_id' => 20,
						]);
						$idGasto24 = DB::getPdo()->lastInsertId();

					 DB::table('financial_costs')->insert([
						'year' => 3,
						'value_bugeted' => 1140519580,
						'value_comitted' => 1085769527,
						'value_paid' => 781807528,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto3,
						'p_a_i_id' => $idpai1,
						'group_id' => 20,
						]);
						$idGasto26 = DB::getPdo()->lastInsertId();
						
					 DB::table('financial_costs')->insert([
						'year' => 3,
						'value_bugeted' => 25859773,
						'value_comitted' => 25696778,
						'value_paid' => 25696778,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto9,
						'p_a_i_id' => $idpai1,
						'group_id' => 20,
						]);
						$idGasto27 = DB::getPdo()->lastInsertId();

					 DB::table('financial_costs')->insert([
						'year' => 3,
						'value_bugeted' => 10415000,
						'value_comitted' => 10410017,
						'value_paid' => 10410017,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto8,
						'p_a_i_id' => $idpai1,
						'group_id' => 20,
						]);
						$idGasto28 = DB::getPdo()->lastInsertId();
						
						 
					 DB::table('financial_costs')->insert([
						'year' => 3,
						'value_bugeted' => 1815292918,
						'value_comitted' => 1809766556,
						'value_paid' => 1809323452,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => FALSE,
						'compensation' => TRUE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto4,
						'p_a_i_id' => $idpai1,
						'group_id' => 20,
						]);
						$idGasto29 = DB::getPdo()->lastInsertId();
						
						 
					 DB::table('financial_costs')->insert([
						'year' => 3,
						'value_bugeted' => 50200000,
						'value_comitted' => 50145077,
						'value_paid' => 50145077,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto10,
						'p_a_i_id' => $idpai1,
						'group_id' => 20,
						]);
						$idGasto30 = DB::getPdo()->lastInsertId();
						

					 DB::table('financial_costs')->insert([
						'year' => 3,
						'value_bugeted' => 11032916,
						'value_comitted' => 0,
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
						'group_id' => 20,
						]);
						$idGasto31 = DB::getPdo()->lastInsertId();
						
						 
					 DB::table('financial_costs')->insert([
						'year' => 3,
						'value_bugeted' => 1977923011,
						'value_comitted' => 1956440439,
						'value_paid' => 1950440439,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto1,
						'p_a_i_id' => $idpai1,
						'group_id' => 20,
						]);
						$idGasto32 = DB::getPdo()->lastInsertId();

					 DB::table('financial_costs')->insert([
						'year' => 3,
						'value_bugeted' => 345334688,
						'value_comitted' => 335788571,
						'value_paid' => 69962192,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto3,
						'p_a_i_id' => $idpai1,
						'group_id' => 20,
						]);
						$idGasto34 = DB::getPdo()->lastInsertId();
						
					 DB::table('financial_costs')->insert([
						'year' => 3,
						'value_bugeted' => 13985000,
						'value_comitted' => 13985000,
						'value_paid' => 13985000,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto8,
						'p_a_i_id' => $idpai1,
						'group_id' => 20,
						]);
						$idGasto35 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_costs')->insert([
						'year' => 4,
						'value_bugeted' => 339794290,
						'value_comitted' => 255712643,
						'value_paid' => 255712643,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto1,
						'p_a_i_id' => $idpai1,
						'group_id' => 20,
						]);
						$idGasto36 = DB::getPdo()->lastInsertId();
						
					 DB::table('financial_costs')->insert([
						'year' => 4,
						'value_bugeted' => 137631132,
						'value_comitted' => 114852072,
						'value_paid' => 95018966,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto2,
						'p_a_i_id' => $idpai1,
						'group_id' => 20,
						]);
						$idGasto37 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_costs')->insert([
						'year' => 4,
						'value_bugeted' => 1059077407,
						'value_comitted' => 982267002,
						'value_paid' => 883875102,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto3,
						'p_a_i_id' => $idpai1,
						'group_id' => 20,
						]);
						$idGasto38 = DB::getPdo()->lastInsertId();

					 DB::table('financial_costs')->insert([
						'year' => 4,
						'value_bugeted' => 28962946,
						'value_comitted' => 26467649,
						'value_paid' => 26467649,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto9,
						'p_a_i_id' => $idpai1,
						'group_id' => 20,
						]);
						$idGasto39 = DB::getPdo()->lastInsertId();

					 DB::table('financial_costs')->insert([
						'year' => 4,
						'value_bugeted' => 13595000,
						'value_comitted' => 4614786,
						'value_paid' => 4614786,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto8,
						'p_a_i_id' => $idpai1,
						'group_id' => 20,
						]);
						$idGasto40 = DB::getPdo()->lastInsertId();
						
						 
					 DB::table('financial_costs')->insert([
						'year' => 4,
						'value_bugeted' => 2161665022,
						'value_comitted' => 2156649180,
						'value_paid' => 2156649180,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => FALSE,
						'compensation' => TRUE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto4,
						'p_a_i_id' => $idpai1,
						'group_id' => 20,
						]);
						$idGasto41 = DB::getPdo()->lastInsertId();
						
						 
					 DB::table('financial_costs')->insert([
						'year' => 4,
						'value_bugeted' => 642809114,
						'value_comitted' => 0,
						'value_paid' => 0,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto10,
						'p_a_i_id' => $idpai1,
						'group_id' => 20,
						]);
						$idGasto42 = DB::getPdo()->lastInsertId();
						
						 
					 DB::table('financial_costs')->insert([
						'year' => 4,
						'value_bugeted' => 21000000,
						'value_comitted' => 20904961,
						'value_paid' => 20904961,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto11,
						'p_a_i_id' => $idpai1,
						'group_id' => 20,
						]);
						$idGasto43 = DB::getPdo()->lastInsertId();

					 DB::table('financial_costs')->insert([
						'year' => 4,
						'value_bugeted' => 31000000,
						'value_comitted' => 27558660,
						'value_paid' => 27558660,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto7,
						'p_a_i_id' => $idpai1,
						'group_id' => 20,
						]);
						$idGasto44 = DB::getPdo()->lastInsertId();
						
						 
					 DB::table('financial_costs')->insert([
						'year' => 4,
						'value_bugeted' => 1972504543,
						'value_comitted' => 1956056210,
						'value_paid' => 1956056210,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto1,
						'p_a_i_id' => $idpai1,
						'group_id' => 20,
						]);
						$idGasto45 = DB::getPdo()->lastInsertId();
						
					 DB::table('financial_costs')->insert([
						'year' => 4,
						'value_bugeted' => 277335525,
						'value_comitted' => 272267001,
						'value_paid' => 47620659,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto2,
						'p_a_i_id' => $idpai1,
						'group_id' => 20,
						]);
						$idGasto46 = DB::getPdo()->lastInsertId();
						
						 
					 DB::table('financial_costs')->insert([
						'year' => 4,
						'value_bugeted' => 160358018,
						'value_comitted' => 131458355,
						'value_paid' => 89930229,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto3,
						'p_a_i_id' => $idpai1,
						'group_id' => 20,
						]);
						$idGasto47 = DB::getPdo()->lastInsertId();

					 DB::table('financial_costs')->insert([
						'year' => 4,
						'value_bugeted' => 14405000,
						'value_comitted' => 14405000,
						'value_paid' => 14405000,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto8,
						'p_a_i_id' => $idpai1,
						'group_id' => 20,
						]);
						$idGasto48 = DB::getPdo()->lastInsertId();
						
						DB::table('activity_sources')->insert([
							'activity_id' => $idactivity7,
							'source_id' =>$idPlan3,
							'value' => 541949000,
							'goal' => 0,
							'evidence_balance' => 541949000,
							'age' => 1,
							]);
							$idactivitySource1 = DB::getPdo()->lastInsertId();
							
							
							
						DB::table('activity_sources')->insert([
							'activity_id' => $idactivity13,
							'source_id' =>$idPlan3,
							'value' => 510926241,
							'goal' => 0,
							'evidence_balance' => 510926241,
							'age' => 1,
							]);
							$idactivitySource2 = DB::getPdo()->lastInsertId();
							
							
							
						DB::table('activity_sources')->insert([
							'activity_id' => $idactivity23,
							'source_id' =>$idPlan3,
							'value' => 481733000,
							'goal' => 0,
							'evidence_balance' => 481733000,
							'age' => 1,
							]);
							$idactivitySource3 = DB::getPdo()->lastInsertId();
							
							
							
						DB::table('activity_sources')->insert([
							'activity_id' => $idactivity29,
							'source_id' =>$idPlan3,
							'value' => 785412000,
							'goal' => 0,
							'evidence_balance' => 785412000,
							'age' => 1,
							]);
							$idactivitySource4 = DB::getPdo()->lastInsertId();
							
							
							
						DB::table('activity_sources')->insert([
							'activity_id' => $idactivity40,
							'source_id' =>$idPlan3,
							'value' => 837052626,
							'goal' => 0,
							'evidence_balance' => 837052626,
							'age' => 1,
							]);
							$idactivitySource5 = DB::getPdo()->lastInsertId();
							
							
							
						DB::table('activity_sources')->insert([
							'activity_id' => $idactivity49,
							'source_id' =>$idPlan3,
							'value' => 596409000,
							'goal' => 0,
							'evidence_balance' => 596409000,
							'age' => 1,
							]);
							$idactivitySource6 = DB::getPdo()->lastInsertId();
							
							
							
						DB::table('activity_sources')->insert([
							'activity_id' => $idactivity55,
							'source_id' =>$idPlan3,
							'value' => 546733000,
							'goal' => 0,
							'evidence_balance' => 546733000,
							'age' => 1,
							]);
							$idactivitySource7 = DB::getPdo()->lastInsertId();
							
							
							
						DB::table('activity_sources')->insert([
							'activity_id' => $idactivity61,
							'source_id' =>$idPlan3,
							'value' => 119262818,
							'goal' => 0,
							'evidence_balance' => 119262818,
							'age' => 1,
							]);
							$idactivitySource8 = DB::getPdo()->lastInsertId();
							
							
							
						DB::table('activity_sources')->insert([
							'activity_id' => $idactivity72,
							'source_id' =>$idPlan3,
							'value' => 107534661,
							'goal' => 0,
							'evidence_balance' => 107534661,
							'age' => 1,
							]);
							$idactivitySource9 = DB::getPdo()->lastInsertId();
							
							
							
						DB::table('activity_sources')->insert([
							'activity_id' => $idactivity88,
							'source_id' =>$idPlan3,
							'value' => 536192000,
							'goal' => 0,
							'evidence_balance' => 536192000,
							'age' => 1,
							]);
							$idactivitySource10 = DB::getPdo()->lastInsertId();
							
							
							
						DB::table('activity_sources')->insert([
							'activity_id' => $idactivity93,
							'source_id' =>$idPlan3,
							'value' => 1196882654,
							'goal' => 0,
							'evidence_balance' => 1196882654,
							'age' => 1,
							]);
							$idactivitySource11 = DB::getPdo()->lastInsertId();
							
							
							
						DB::table('activity_sources')->insert([
							'activity_id' => $idactivity102,
							'source_id' =>$idPlan5,
							'value' => 112299654,
							'goal' => 0,
							'evidence_balance' => 112299654,
							'age' => 1,
							]);
							$idactivitySource12 = DB::getPdo()->lastInsertId();
							
							
							
						DB::table('activity_sources')->insert([
							'activity_id' => $idactivity107,
							'source_id' =>$idPlan1,
							'value' => 471928847.2,
							'goal' => 0,
							'evidence_balance' => 471928847.2,
							'age' => 1,
							]);
							$idactivitySource13 = DB::getPdo()->lastInsertId();
							
							
							
							DB::table('activity_sources')->insert([
								'activity_id' => $idactivity93,
								'source_id' =>$idPlan5,
								'value' => 130700346,
								'goal' => 0,
								'evidence_balance' => 130700346,
								'age' => 1,
								]);
								$idactivitySource14 = DB::getPdo()->lastInsertId();
								
								
								
							DB::table('activity_sources')->insert([
								'activity_id' => $idactivity102,
								'source_id' =>$idPlan1,
								'value' => 816509672,
								'goal' => 0,
								'evidence_balance' => 816509672,
								'age' => 1,
								]);
								$idactivitySource15 = DB::getPdo()->lastInsertId();
								
								
								
							DB::table('activity_sources')->insert([
								'activity_id' => $idactivity107,
								'source_id' =>$idPlan2,
								'value' => 60000000,
								'goal' => 0,
								'evidence_balance' => 60000000,
								'age' => 1,
								]);
								$idactivitySource16 = DB::getPdo()->lastInsertId();
								
								
								
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity107,
									'source_id' =>$idPlan4,
									'value' => 30000000,
									'goal' => 0,
									'evidence_balance' => 30000000,
									'age' => 1,
									]);
									$idactivitySource17 = DB::getPdo()->lastInsertId();
									
									
									
									DB::table('activity_sources')->insert([
										'activity_id' => $idactivity107,
										'source_id' =>$idPlan7,
										'value' => 1649200,
										'goal' => 0,
										'evidence_balance' => 1649200,
										'age' => 1,
										]);
										$idactivitySource18 = DB::getPdo()->lastInsertId();
										
										
											DB::table('activity_sources')->insert([
										'activity_id' => $idactivity107,
										'source_id' =>$idPlan8,
										'value' => 850000,
										'goal' => 0,
										'evidence_balance' => 850000,
										'age' => 1,
										]);
										$idactivitySource19 = DB::getPdo()->lastInsertId();
										
										
											DB::table('activity_sources')->insert([
										'activity_id' => $idactivity107,
										'source_id' =>$idPlan9,
										'value' => 58360000,
										'goal' => 0,
										'evidence_balance' => 58360000,
										'age' => 1,
										]);
										$idactivitySource20 = DB::getPdo()->lastInsertId();
										
										
											DB::table('activity_sources')->insert([
										'activity_id' => $idactivity107,
										'source_id' =>$idPlan11,
										'value' => 28080000,
										'goal' => 0,
										'evidence_balance' => 28080000,
										'age' => 1,
										]);
										$idactivitySource21 = DB::getPdo()->lastInsertId();
										
										
										
										DB::table('evidence_financial')->insert([
											'evidence_id' => $idevidencia7,
											'activity_source_id' =>$idactivitySource1,
											'value' => 533390971,
											]);
											$idevidenceFinancial1 = DB::getPdo()->lastInsertId();
											
											
											
										DB::table('evidence_financial')->insert([
											'evidence_id' => $idevidencia13,
											'activity_source_id' =>$idactivitySource2,
											'value' => 502560555,
											]);
											$idevidenceFinancial2 = DB::getPdo()->lastInsertId();
											
											
											
										DB::table('evidence_financial')->insert([
											'evidence_id' => $idevidencia23,
											'activity_source_id' =>$idactivitySource3,
											'value' => 331387279,
											]);
											$idevidenceFinancial3 = DB::getPdo()->lastInsertId();
											
											
											
										DB::table('evidence_financial')->insert([
											'evidence_id' => $idevidencia29,
											'activity_source_id' =>$idactivitySource4,
											'value' => 769499835,
											]);
											$idevidenceFinancial4 = DB::getPdo()->lastInsertId();
											
											
											
										DB::table('evidence_financial')->insert([
											'evidence_id' => $idevidencia40,
											'activity_source_id' =>$idactivitySource5,
											'value' => 830799572,
											]);
											$idevidenceFinancial5 = DB::getPdo()->lastInsertId();
											
											
											
										DB::table('evidence_financial')->insert([
											'evidence_id' => $idevidencia49,
											'activity_source_id' =>$idactivitySource6,
											'value' => 536261586,
											]);
											$idevidenceFinancial6 = DB::getPdo()->lastInsertId();
											
											
											
										DB::table('evidence_financial')->insert([
											'evidence_id' => $idevidencia55,
											'activity_source_id' =>$idactivitySource7,
											'value' => 516912272,
											]);
											$idevidenceFinancial7 = DB::getPdo()->lastInsertId();
											
											
											
										DB::table('evidence_financial')->insert([
											'evidence_id' => $idevidencia61,
											'activity_source_id' =>$idactivitySource8,
											'value' => 118258818,
											]);
											$idevidenceFinancial8 = DB::getPdo()->lastInsertId();
											
											
											
										DB::table('evidence_financial')->insert([
											'evidence_id' => $idevidencia72,
											'activity_source_id' =>$idactivitySource9,
											'value' => 106530661,
											]);
											$idevidenceFinancial9 = DB::getPdo()->lastInsertId();
											
											
											
										DB::table('evidence_financial')->insert([
											'evidence_id' => $idevidencia88,
											'activity_source_id' =>$idactivitySource10,
											'value' => 517827470,
											]);
											$idevidenceFinancial10 = DB::getPdo()->lastInsertId();
											
											
											
										DB::table('evidence_financial')->insert([
											'evidence_id' => $idevidencia93,
											'activity_source_id' =>$idactivitySource11,
											'value' => 1179502981,
											]);
											$idevidenceFinancial11 = DB::getPdo()->lastInsertId();
											
											
											
										DB::table('evidence_financial')->insert([
											'evidence_id' => $idevidencia102,
											'activity_source_id' =>$idactivitySource12,
											'value' => 112299654,
											]);
											$idevidenceFinancial12 = DB::getPdo()->lastInsertId();
											
											
											
										DB::table('evidence_financial')->insert([
											'evidence_id' => $idevidencia107,
											'activity_source_id' =>$idactivitySource13,
											'value' => 471928847.2,
											]);
											$idevidenceFinancial13 = DB::getPdo()->lastInsertId();
											
											
											

												
											DB::table('evidence_financial')->insert([
												'evidence_id' => $idevidencia102,
												'activity_source_id' =>$idactivitySource15,
												'value' => 816044246,
												]);
												$idevidenceFinancial15 = DB::getPdo()->lastInsertId();
												
												
												
											DB::table('evidence_financial')->insert([
												'evidence_id' => $idevidencia107,
												'activity_source_id' =>$idactivitySource16,
												'value' => 60000000,
												]);
												$idevidenceFinancial16 = DB::getPdo()->lastInsertId();
												
												
												
												DB::table('evidence_financial')->insert([
													'evidence_id' => $idevidencia107,
													'activity_source_id' =>$idactivitySource17,
													'value' => 30000000,
													]);
													$idevidenceFinancial17 = DB::getPdo()->lastInsertId();
													
													
														DB::table('evidence_financial')->insert([
													'evidence_id' => $idevidencia107,
													'activity_source_id' =>$idactivitySource18,
													'value' => 1649200,
													]);
													$idevidenceFinancial18 = DB::getPdo()->lastInsertId();
													
													
														DB::table('evidence_financial')->insert([
													'evidence_id' => $idevidencia107,
													'activity_source_id' =>$idactivitySource19,
													'value' => 850000,
													]);
													$idevidenceFinancial19 = DB::getPdo()->lastInsertId();
													
													
														DB::table('evidence_financial')->insert([
													'evidence_id' => $idevidencia107,
													'activity_source_id' =>$idactivitySource20,
													'value' => 58360000,
													]);
													$idevidenceFinancial20 = DB::getPdo()->lastInsertId();
													
													
													DB::table('evidence_financial')->insert([
													'evidence_id' => $idevidencia107,
													'activity_source_id' =>$idactivitySource21,
													'value' => 23002091.8,
													]);
													$idevidenceFinancial21 = DB::getPdo()->lastInsertId();
													
													
													
													DB::table('activity_sources')->insert([
														'activity_id' => $idactivity7,
														'source_id' =>$idPlan28,
														'value' => 571558079,
														'goal' => 0,
														'evidence_balance' => 571558079,
														'age' => 2,
														]);
														$idactivitySource22 = DB::getPdo()->lastInsertId();
														
														
														
													DB::table('activity_sources')->insert([
														'activity_id' => $idactivity13,
														'source_id' =>$idPlan28,
														'value' => 314025813,
														'goal' => 0,
														'evidence_balance' => 314025813,
														'age' => 2,
														]);
														$idactivitySource23 = DB::getPdo()->lastInsertId();
														
														
														
													DB::table('activity_sources')->insert([
														'activity_id' => $idactivity23,
														'source_id' =>$idPlan28,
														'value' => 423051626,
														'goal' => 0,
														'evidence_balance' => 423051626,
														'age' => 2,
														]);
														$idactivitySource24 = DB::getPdo()->lastInsertId();
														
														
														
													DB::table('activity_sources')->insert([
														'activity_id' => $idactivity29,
														'source_id' =>$idPlan28,
														'value' => 680739343,
														'goal' => 0,
														'evidence_balance' => 680739343,
														'age' => 2,
														]);
														$idactivitySource25 = DB::getPdo()->lastInsertId();
														
														
														
													DB::table('activity_sources')->insert([
														'activity_id' => $idactivity40,
														'source_id' =>$idPlan15,
														'value' => 883619762,
														'goal' => 0,
														'evidence_balance' => 883619762,
														'age' => 2,
														]);
														$idactivitySource26 = DB::getPdo()->lastInsertId();
														
														
														
													DB::table('activity_sources')->insert([
														'activity_id' => $idactivity49,
														'source_id' =>$idPlan15,
														'value' => 603810113,
														'goal' => 0,
														'evidence_balance' => 603810113,
														'age' => 2,
														]);
														$idactivitySource27 = DB::getPdo()->lastInsertId();
														
														
														
													DB::table('activity_sources')->insert([
														'activity_id' => $idactivity55,
														'source_id' =>$idPlan18,
														'value' => 159802510,
														'goal' => 0,
														'evidence_balance' => 159802510,
														'age' => 2,
														]);
														$idactivitySource28 = DB::getPdo()->lastInsertId();
														
														
														
													DB::table('activity_sources')->insert([
														'activity_id' => $idactivity88,
														'source_id' =>$idPlan17,
														'value' => 969117107,
														'goal' => 0,
														'evidence_balance' => 969117107,
														'age' => 2,
														]);
														$idactivitySource29 = DB::getPdo()->lastInsertId();
														
														
														
													DB::table('activity_sources')->insert([
														'activity_id' => $idactivity93,
														'source_id' =>$idPlan17,
														'value' => 1298093718,
														'goal' => 0,
														'evidence_balance' => 1298093718,
														'age' => 2,
														]);
														$idactivitySource30 = DB::getPdo()->lastInsertId();
														
														
														
													DB::table('activity_sources')->insert([
														'activity_id' => $idactivity102,
														'source_id' =>$idPlan17,
														'value' => 631558078,
														'goal' => 0,
														'evidence_balance' => 631558078,
														'age' => 2,
														]);
														$idactivitySource31 = DB::getPdo()->lastInsertId();
														
														
														
													DB::table('activity_sources')->insert([
														'activity_id' => $idactivity107,
														'source_id' =>$idPlan17,
														'value' => 19338604,
														'goal' => 0,
														'evidence_balance' => 19338604,
														'age' => 2,
														]);
														$idactivitySource32 = DB::getPdo()->lastInsertId();
														
														
														
														DB::table('activity_sources')->insert([
															'activity_id' => $idactivity29,
															'source_id' =>$idPlan15,
															'value' => 240761065,
															'goal' => 0,
															'evidence_balance' => 240761065,
															'age' => 2,
															]);
															$idactivitySource33 = DB::getPdo()->lastInsertId();
															
															
															
														DB::table('activity_sources')->insert([
															'activity_id' => $idactivity49,
															'source_id' =>$idPlan18,
															'value' => 549740437,
															'goal' => 0,
															'evidence_balance' => 549740437,
															'age' => 2,
															]);
															$idactivitySource34 = DB::getPdo()->lastInsertId();
															
															
															
														DB::table('activity_sources')->insert([
															'activity_id' => $idactivity55,
															'source_id' =>$idPlan17,
															'value' => 2078375373,
															'goal' => 0,
															'evidence_balance' => 2078375373,
															'age' => 2,
															]);
															$idactivitySource35 = DB::getPdo()->lastInsertId();
															
															
															
														DB::table('activity_sources')->insert([
															'activity_id' => $idactivity107,
															'source_id' =>$idPlan16,
															'value' => 90000000,
															'goal' => 0,
															'evidence_balance' => 90000000,
															'age' => 2,
															]);
															$idactivitySource36 = DB::getPdo()->lastInsertId();
															
															
															
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity107,
																'source_id' =>$idPlan19,
																'value' => 263538900,
																'goal' => 0,
																'evidence_balance' => 263538900,
																'age' => 2,
																]);
																$idactivitySource37 = DB::getPdo()->lastInsertId();
																
																
																	DB::table('activity_sources')->insert([
																'activity_id' => $idactivity107,
																'source_id' =>$idPlan20,
																'value' => 69373800,
																'goal' => 0,
																'evidence_balance' => 69373800,
																'age' => 2,
																]);
																$idactivitySource38 = DB::getPdo()->lastInsertId();
																
																
																	DB::table('activity_sources')->insert([
																'activity_id' => $idactivity107,
																'source_id' =>$idPlan21,
																'value' => 6762800,
																'goal' => 0,
																'evidence_balance' => 6762800,
																'age' => 2,
																]);
																$idactivitySource39 = DB::getPdo()->lastInsertId();
																
																
																DB::table('activity_sources')->insert([
																'activity_id' => $idactivity107,
																'source_id' =>$idPlan23,
																'value' => 113376000,
																'goal' => 0,
																'evidence_balance' => 113376000,
																'age' => 2,
																]);
																$idactivitySource40 = DB::getPdo()->lastInsertId();
																
																
																DB::table('activity_sources')->insert([
																'activity_id' => $idactivity107,
																'source_id' =>$idPlan24,
																'value' => 212915937,
																'goal' => 0,
																'evidence_balance' => 212915937,
																'age' => 2,
																]);
																$idactivitySource41 = DB::getPdo()->lastInsertId();

																DB::table('evidence_financial')->insert([
																	'evidence_id' => $idevidencia114,
																	'activity_source_id' =>$idactivitySource22,
																	'value' => 540337305,
																	]);
																	$idevidenceFinancial22 = DB::getPdo()->lastInsertId();
																	
																	
																	
																DB::table('evidence_financial')->insert([
																	'evidence_id' => $idevidencia120,
																	'activity_source_id' =>$idactivitySource23,
																	'value' => 304322314,
																	]);
																	$idevidenceFinancial23 = DB::getPdo()->lastInsertId();
																	
																	
																	
																DB::table('evidence_financial')->insert([
																	'evidence_id' => $idevidencia130,
																	'activity_source_id' =>$idactivitySource24,
																	'value' => 415164650,
																	]);
																	$idevidenceFinancial24 = DB::getPdo()->lastInsertId();
																	
																	
																	
																DB::table('evidence_financial')->insert([
																	'evidence_id' => $idevidencia136,
																	'activity_source_id' =>$idactivitySource25,
																	'value' => 680739343,
																	]);
																	$idevidenceFinancial25 = DB::getPdo()->lastInsertId();
																	
																	
																	
																DB::table('evidence_financial')->insert([
																	'evidence_id' => $idevidencia147,
																	'activity_source_id' =>$idactivitySource26,
																	'value' => 854007896,
																	]);
																	$idevidenceFinancial26 = DB::getPdo()->lastInsertId();
																	
																	
																	
																DB::table('evidence_financial')->insert([
																	'evidence_id' => $idevidencia156,
																	'activity_source_id' =>$idactivitySource27,
																	'value' => 603810113,
																	]);
																	$idevidenceFinancial27 = DB::getPdo()->lastInsertId();
																	
																	
																	
																DB::table('evidence_financial')->insert([
																	'evidence_id' => $idevidencia162,
																	'activity_source_id' =>$idactivitySource28,
																	'value' => 159802510,
																	]);
																	$idevidenceFinancial28 = DB::getPdo()->lastInsertId();
																	
																	
																	
																DB::table('evidence_financial')->insert([
																	'evidence_id' => $idevidencia195,
																	'activity_source_id' =>$idactivitySource29,
																	'value' => 913216203,
																	]);
																	$idevidenceFinancial29 = DB::getPdo()->lastInsertId();
																	
																	
																	
																DB::table('evidence_financial')->insert([
																	'evidence_id' => $idevidencia200,
																	'activity_source_id' =>$idactivitySource30,
																	'value' => 1178745784,
																	]);
																	$idevidenceFinancial30 = DB::getPdo()->lastInsertId();
																	
																	
																	
																DB::table('evidence_financial')->insert([
																	'evidence_id' => $idevidencia209,
																	'activity_source_id' =>$idactivitySource31,
																	'value' => 631442844,
																	]);
																	$idevidenceFinancial31 = DB::getPdo()->lastInsertId();
																	
																	
																	
																DB::table('evidence_financial')->insert([
																	'evidence_id' => $idevidencia214,
																	'activity_source_id' =>$idactivitySource32,
																	'value' => 19338604,
																	]);
																	$idevidenceFinancial32 = DB::getPdo()->lastInsertId();
																	
																	
																	
																
																
																
																
																DB::table('evidence_financial')->insert([
																	'evidence_id' => $idevidencia136,
																	'activity_source_id' =>$idactivitySource33,
																	'value' => 204766272,
																	]);
																	$idevidenceFinancial33 = DB::getPdo()->lastInsertId();
																	
																	
																	
																DB::table('evidence_financial')->insert([
																	'evidence_id' => $idevidencia156,
																	'activity_source_id' =>$idactivitySource34,
																	'value' => 215982358,
																	]);
																	$idevidenceFinancial34 = DB::getPdo()->lastInsertId();
																	
																	
																	
																DB::table('evidence_financial')->insert([
																	'evidence_id' => $idevidencia162,
																	'activity_source_id' =>$idactivitySource35,
																	'value' => 2048657513,
																	]);
																	$idevidenceFinancial35 = DB::getPdo()->lastInsertId();
																	
																	
																	
																DB::table('evidence_financial')->insert([
																	'evidence_id' => $idevidencia214,
																	'activity_source_id' =>$idactivitySource36,
																	'value' => 90000000,
																	]);
																	$idevidenceFinancial36 = DB::getPdo()->lastInsertId();
																	
																	
																	

																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia214,
																		'activity_source_id' =>$idactivitySource37,
																		'value' => 263538900,
																		]);
																		$idevidenceFinancial37 = DB::getPdo()->lastInsertId();
																		
																		
																			DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia214,
																		'activity_source_id' =>$idactivitySource38,
																		'value' => 69373800,
																		]);
																		$idevidenceFinancial38 = DB::getPdo()->lastInsertId();
																		
																		
																			DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia214,
																		'activity_source_id' =>$idactivitySource39,
																		'value' => 6762800,
																		]);
																		$idevidenceFinancial39 = DB::getPdo()->lastInsertId();
																		
																		
																			DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia214,
																		'activity_source_id' =>$idactivitySource40,
																		'value' => 113376000,
																		]);
																		$idevidenceFinancial40 = DB::getPdo()->lastInsertId();
																		
																		
																			DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia214,
																		'activity_source_id' =>$idactivitySource41,
																		'value' => 148114089,
																		]);
																		$idevidenceFinancial41 = DB::getPdo()->lastInsertId();
																		
																		
																		
																		DB::table('activity_sources')->insert([
																			'activity_id' => $idactivity7,
																			'source_id' =>$idPlan29,
																			'value' => 613738680,
																			'goal' => 0,
																			'evidence_balance' => 613738680,
																			'age' => 3,
																			]);
																			$idactivitySource42 = DB::getPdo()->lastInsertId();
																			
																			
																			
																		DB::table('activity_sources')->insert([
																			'activity_id' => $idactivity13,
																			'source_id' =>$idPlan29,
																			'value' => 269439413,
																			'goal' => 0,
																			'evidence_balance' => 269439413,
																			'age' => 3,
																			]);
																			$idactivitySource43 = DB::getPdo()->lastInsertId();
																			
																			
																			
																		DB::table('activity_sources')->insert([
																			'activity_id' => $idactivity23,
																			'source_id' =>$idPlan29,
																			'value' => 763624531,
																			'goal' => 0,
																			'evidence_balance' => 763624531,
																			'age' => 3,
																			]);
																			$idactivitySource44 = DB::getPdo()->lastInsertId();
																			
																			
																			
																		DB::table('activity_sources')->insert([
																			'activity_id' => $idactivity29,
																			'source_id' =>$idPlan29,
																			'value' => 254665854.65,
																			'goal' => 0,
																			'evidence_balance' => 254665854.65,
																			'age' => 3,
																			]);
																			$idactivitySource45 = DB::getPdo()->lastInsertId();
																			
																			
																			
																		DB::table('activity_sources')->insert([
																			'activity_id' => $idactivity40,
																			'source_id' =>$idPlan31,
																			'value' => 918654621,
																			'goal' => 0,
																			'evidence_balance' => 918654621,
																			'age' => 3,
																			]);
																			$idactivitySource46 = DB::getPdo()->lastInsertId();
																			
																			
																			
																		DB::table('activity_sources')->insert([
																			'activity_id' => $idactivity49,
																			'source_id' =>$idPlan31,
																			'value' => 1483378626,
																			'goal' => 0,
																			'evidence_balance' => 1483378626,
																			'age' => 3,
																			]);
																			$idactivitySource47 = DB::getPdo()->lastInsertId();
																			
																			
																			
																		DB::table('activity_sources')->insert([
																			'activity_id' => $idactivity55,
																			'source_id' =>$idPlan31,
																			'value' => 627933431,
																			'goal' => 0,
																			'evidence_balance' => 627933431,
																			'age' => 3,
																			]);
																			$idactivitySource48 = DB::getPdo()->lastInsertId();
																			
																			
																			
																		DB::table('activity_sources')->insert([
																			'activity_id' => $idactivity88,
																			'source_id' =>$idPlan31,
																			'value' => 1739248683.55,
																			'goal' => 0,
																			'evidence_balance' => 1739248683.55,
																			'age' => 3,
																			]);
																			$idactivitySource49 = DB::getPdo()->lastInsertId();
																			
																			
																			
																		DB::table('activity_sources')->insert([
																			'activity_id' => $idactivity93,
																			'source_id' =>$idPlan42,
																			'value' => 1491356754,
																			'goal' => 0,
																			'evidence_balance' => 1491356754,
																			'age' => 3,
																			]);
																			$idactivitySource50 = DB::getPdo()->lastInsertId();
																			
																			
																			
																		DB::table('activity_sources')->insert([
																			'activity_id' => $idactivity102,
																			'source_id' =>$idPlan42,
																			'value' => 96797320.5499997,
																			'goal' => 0,
																			'evidence_balance' => 96797320.5499997,
																			'age' => 3,
																			]);
																			$idactivitySource51 = DB::getPdo()->lastInsertId();
																			
																			
																			
																		DB::table('activity_sources')->insert([
																			'activity_id' => $idactivity107,
																			'source_id' =>$idPlan42,
																			'value' => 863458388,
																			'goal' => 0,
																			'evidence_balance' => 863458388,
																			'age' => 3,
																			]);
																			$idactivitySource52 = DB::getPdo()->lastInsertId();
																			
																			
																			
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity29,
																				'source_id' =>$idPlan31,
																				'value' => 766621558.35,
																				'goal' => 0,
																				'evidence_balance' => 766621558.35,
																				'age' => 3,
																				]);
																				$idactivitySource53 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity88,
																				'source_id' =>$idPlan42,
																				'value' => 460689996.45,
																				'goal' => 0,
																				'evidence_balance' => 460689996.45,
																				'age' => 3,
																				]);
																				$idactivitySource54 = DB::getPdo()->lastInsertId();
																				
																				
																				
																				DB::table('evidence_financial')->insert([
																					'evidence_id' => $idevidencia221,
																					'activity_source_id' =>$idactivitySource42,
																					'value' => 547481680,
																					]);
																					$idevidenceFinancial42 = DB::getPdo()->lastInsertId();
																					
																					
																					
																				DB::table('evidence_financial')->insert([
																					'evidence_id' => $idevidencia227,
																					'activity_source_id' =>$idactivitySource43,
																					'value' => 265154947,
																					]);
																					$idevidenceFinancial43 = DB::getPdo()->lastInsertId();
																					
																					
																					
																				DB::table('evidence_financial')->insert([
																					'evidence_id' => $idevidencia237,
																					'activity_source_id' =>$idactivitySource44,
																					'value' => 618136613,
																					]);
																					$idevidenceFinancial44 = DB::getPdo()->lastInsertId();
																					
																					
																					
																				DB::table('evidence_financial')->insert([
																					'evidence_id' => $idevidencia243,
																					'activity_source_id' =>$idactivitySource45,
																					'value' => 254665854.65,
																					]);
																					$idevidenceFinancial45 = DB::getPdo()->lastInsertId();
																					
																					
																					
																				DB::table('evidence_financial')->insert([
																					'evidence_id' => $idevidencia254,
																					'activity_source_id' =>$idactivitySource46,
																					'value' => 790998439,
																					]);
																					$idevidenceFinancial46 = DB::getPdo()->lastInsertId();
																					
																					
																					
																				DB::table('evidence_financial')->insert([
																					'evidence_id' => $idevidencia263,
																					'activity_source_id' =>$idactivitySource47,
																					'value' => 677287414,
																					]);
																					$idevidenceFinancial47 = DB::getPdo()->lastInsertId();
																					
																					
																					
																				DB::table('evidence_financial')->insert([
																					'evidence_id' => $idevidencia269,
																					'activity_source_id' =>$idactivitySource48,
																					'value' => 625625492,
																					]);
																					$idevidenceFinancial48 = DB::getPdo()->lastInsertId();
																					
																					
																					
																				DB::table('evidence_financial')->insert([
																					'evidence_id' => $idevidencia302,
																					'activity_source_id' =>$idactivitySource49,
																					'value' => 1462349773,
																					]);
																					$idevidenceFinancial49 = DB::getPdo()->lastInsertId();
																					
																					
																					
																				DB::table('evidence_financial')->insert([
																					'evidence_id' => $idevidencia307,
																					'activity_source_id' =>$idactivitySource50,
																					'value' => 1391168325,
																					]);
																					$idevidenceFinancial50 = DB::getPdo()->lastInsertId();
																					
																					
																					
																				DB::table('evidence_financial')->insert([
																					'evidence_id' => $idevidencia316,
																					'activity_source_id' =>$idactivitySource51,
																					'value' => 643738526,
																					]);
																					$idevidenceFinancial51 = DB::getPdo()->lastInsertId();
																					
																					
																					
																				DB::table('evidence_financial')->insert([
																					'evidence_id' => $idevidencia321,
																					'activity_source_id' =>$idactivitySource52,
																					'value' => 863456102,
																					]);
																					$idevidenceFinancial52 = DB::getPdo()->lastInsertId();
																					
																					
																					
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia243,
																						'activity_source_id' =>$idactivitySource53,
																						'value' => 692637028.35,
																						]);
																						$idevidenceFinancial53 = DB::getPdo()->lastInsertId();
																						
																						
																						
																						DB::table('activity_sources')->insert([
																							'activity_id' => $idactivity7,
																							'source_id' =>$idPlan43,
																							'value' => 698721577,
																							'goal' => 0,
																							'evidence_balance' => 698721577,
																							'age' => 4,
																							]);
																							$idactivitySource55 = DB::getPdo()->lastInsertId();
																							
																							
																							
																						DB::table('activity_sources')->insert([
																							'activity_id' => $idactivity13,
																							'source_id' =>$idPlan43,
																							'value' => 352835000,
																							'goal' => 0,
																							'evidence_balance' => 352835000,
																							'age' => 4,
																							]);
																							$idactivitySource56 = DB::getPdo()->lastInsertId();
																							
																							
																							
																						DB::table('activity_sources')->insert([
																							'activity_id' => $idactivity23,
																							'source_id' =>$idPlan43,
																							'value' => 701041477,
																							'goal' => 0,
																							'evidence_balance' => 701041477,
																							'age' => 4,
																							]);
																							$idactivitySource57 = DB::getPdo()->lastInsertId();
																							
																							
																							
																						DB::table('activity_sources')->insert([
																							'activity_id' => $idactivity29,
																							'source_id' =>$idPlan43,
																							'value' => 124796889.8,
																							'goal' => 0,
																							'evidence_balance' => 124796889.8,
																							'age' => 4,
																							]);
																							$idactivitySource58 = DB::getPdo()->lastInsertId();
																							
																							
																							
																						DB::table('activity_sources')->insert([
																							'activity_id' => $idactivity40,
																							'source_id' =>$idPlan45,
																							'value' => 1342988161,
																							'goal' => 0,
																							'evidence_balance' => 1342988161,
																							'age' => 4,
																							]);
																							$idactivitySource59 = DB::getPdo()->lastInsertId();
																							
																							
																							
																						DB::table('activity_sources')->insert([
																							'activity_id' => $idactivity49,
																							'source_id' =>$idPlan45,
																							'value' => 1895309182,
																							'goal' => 0,
																							'evidence_balance' => 1895309182,
																							'age' => 4,
																							]);
																							$idactivitySource60 = DB::getPdo()->lastInsertId();
																							
																							
																							
																						DB::table('activity_sources')->insert([
																							'activity_id' => $idactivity55,
																							'source_id' =>$idPlan45,
																							'value' => 2786463885,
																							'goal' => 0,
																							'evidence_balance' => 2786463885,
																							'age' => 4,
																							]);
																							$idactivitySource61 = DB::getPdo()->lastInsertId();
																							
																							
																							
																						DB::table('activity_sources')->insert([
																							'activity_id' => $idactivity88,
																							'source_id' =>$idPlan45,
																							'value' => 306788494.8,
																							'goal' => 0,
																							'evidence_balance' => 306788494.8,
																							'age' => 4,
																							]);
																							$idactivitySource62 = DB::getPdo()->lastInsertId();
																							
																							
																							
																						DB::table('activity_sources')->insert([
																							'activity_id' => $idactivity93,
																							'source_id' =>$idPlan57,
																							'value' => 1471663067.8,
																							'goal' => 0,
																							'evidence_balance' => 1471663067.8,
																							'age' => 4,
																							]);
																							$idactivitySource63 = DB::getPdo()->lastInsertId();
																							
																							
																							
																						DB::table('activity_sources')->insert([
																							'activity_id' => $idactivity102,
																							'source_id' =>$idPlan53,
																							'value' => 676553814,
																							'goal' => 0,
																							'evidence_balance' => 676553814,
																							'age' => 4,
																							]);
																							$idactivitySource64 = DB::getPdo()->lastInsertId();
																							
																							
																							
																						DB::table('activity_sources')->insert([
																							'activity_id' => $idactivity107,
																							'source_id' =>$idPlan53,
																							'value' => 112049192.75,
																							'goal' => 0,
																							'evidence_balance' => 112049192.75,
																							'age' => 4,
																							]);
																							$idactivitySource65 = DB::getPdo()->lastInsertId();
																							
																							
																							
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity29,
																								'source_id' =>$idPlan45,
																								'value' => 1123650277.2,
																								'goal' => 0,
																								'evidence_balance' => 1123650277.2,
																								'age' => 4,
																								]);
																								$idactivitySource66 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity88,
																								'source_id' =>$idPlan57,
																								'value' => 1494914393.2,
																								'goal' => 0,
																								'evidence_balance' => 1494914393.2,
																								'age' => 4,
																								]);
																								$idactivitySource67 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity93,
																								'source_id' =>$idPlan53,
																								'value' => 511949070.2,
																								'goal' => 0,
																								'evidence_balance' => 511949070.2,
																								'age' => 4,
																								]);
																								$idactivitySource68 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity107,
																								'source_id' =>$idPlan46,
																								'value' => 633889891.15,
																								'goal' => 0,
																								'evidence_balance' => 633889891.15,
																								'age' => 4,
																								]);
																								$idactivitySource69 = DB::getPdo()->lastInsertId();
																								
																								
																								
																								DB::table('activity_sources')->insert([
																									'activity_id' => $idactivity107,
																									'source_id' =>$idPlan47,
																									'value' => 221875147.2,
																									'goal' => 0,
																									'evidence_balance' => 221875147.2,
																									'age' => 4,
																									]);
																									$idactivitySource70 = DB::getPdo()->lastInsertId();
																									
																									
																										DB::table('activity_sources')->insert([
																									'activity_id' => $idactivity107,
																									'source_id' =>$idPlan54,
																									'value' => 304161601,
																									'goal' => 0,
																									'evidence_balance' => 304161601,
																									'age' => 4,
																									]);
																									$idactivitySource71 = DB::getPdo()->lastInsertId();
																									
																									
																										DB::table('activity_sources')->insert([
																									'activity_id' => $idactivity107,
																									'source_id' =>$idPlan48,
																									'value' => 112393409,
																									'goal' => 0,
																									'evidence_balance' => 112393409,
																									'age' => 4,
																									]);
																									$idactivitySource72 = DB::getPdo()->lastInsertId();
																									
																									
																										DB::table('activity_sources')->insert([
																									'activity_id' => $idactivity107,
																									'source_id' =>$idPlan44,
																									'value' => 99000000,
																									'goal' => 0,
																									'evidence_balance' => 99000000,
																									'age' => 4,
																									]);
																									$idactivitySource73 = DB::getPdo()->lastInsertId();
																									
																									
																										DB::table('activity_sources')->insert([
																									'activity_id' => $idactivity107,
																									'source_id' =>$idPlan52,
																									'value' => 73000000,
																									'goal' => 0,
																									'evidence_balance' => 73000000,
																									'age' => 4,
																									]);
																									$idactivitySource74 = DB::getPdo()->lastInsertId();
																									
																									
																										DB::table('activity_sources')->insert([
																									'activity_id' => $idactivity107,
																									'source_id' =>$idPlan49,
																									'value' => 28945925.8999999,
																									'goal' => 0,
																									'evidence_balance' => 28945925.8999999,
																									'age' => 4,
																									]);
																									$idactivitySource75 = DB::getPdo()->lastInsertId();
																									
																									
																									
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia328,
																										'activity_source_id' =>$idactivitySource55,
																										'value' => 693551475,
																										]);
																										$idevidenceFinancial55 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia334,
																										'activity_source_id' =>$idactivitySource56,
																										'value' => 351294036,
																										]);
																										$idevidenceFinancial56 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia344,
																										'activity_source_id' =>$idactivitySource57,
																										'value' => 697407104,
																										]);
																										$idevidenceFinancial57 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia350,
																										'activity_source_id' =>$idactivitySource58,
																										'value' => 124796889.8,
																										]);
																										$idevidenceFinancial58 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia361,
																										'activity_source_id' =>$idactivitySource59,
																										'value' => 1297104228,
																										]);
																										$idevidenceFinancial59 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia370,
																										'activity_source_id' =>$idactivitySource60,
																										'value' => 1713177783,
																										]);
																										$idevidenceFinancial60 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia376,
																										'activity_source_id' =>$idactivitySource61,
																										'value' => 1848117673,
																										]);
																										$idevidenceFinancial61 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia409,
																										'activity_source_id' =>$idactivitySource62,
																										'value' => 306788494.8,
																										]);
																										$idevidenceFinancial62 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia414,
																										'activity_source_id' =>$idactivitySource63,
																										'value' => 1471663067.8,
																										]);
																										$idevidenceFinancial63 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia423,
																										'activity_source_id' =>$idactivitySource64,
																										'value' => 646153344,
																										]);
																										$idevidenceFinancial64 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia428,
																										'activity_source_id' =>$idactivitySource65,
																										'value' => 112049192.75,
																										]);
																										$idevidenceFinancial65 = DB::getPdo()->lastInsertId();
																										
																										
																										
																										DB::table('evidence_financial')->insert([
																											'evidence_id' => $idevidencia350,
																											'activity_source_id' =>$idactivitySource66,
																											'value' => 1088230613.2,
																											]);
																											$idevidenceFinancial66 = DB::getPdo()->lastInsertId();
																											
																											
																											
																										DB::table('evidence_financial')->insert([
																											'evidence_id' => $idevidencia409,
																											'activity_source_id' =>$idactivitySource67,
																											'value' => 1493710499.2,
																											]);
																											$idevidenceFinancial67 = DB::getPdo()->lastInsertId();
																											
																											
																											
																										DB::table('evidence_financial')->insert([
																											'evidence_id' => $idevidencia414,
																											'activity_source_id' =>$idactivitySource68,
																											'value' => 498669325.2,
																											]);
																											$idevidenceFinancial68 = DB::getPdo()->lastInsertId();
																											
																											
																											
																										DB::table('evidence_financial')->insert([
																											'evidence_id' => $idevidencia428,
																											'activity_source_id' =>$idactivitySource69,
																											'value' => 633889891.15,
																											]);
																											$idevidenceFinancial69 = DB::getPdo()->lastInsertId();
																											
																											
																											
																											DB::table('evidence_financial')->insert([
																												'evidence_id' => $idevidencia428,
																												'activity_source_id' =>$idactivitySource70,
																												'value' => 221875147.2,
																												]);
																												$idevidenceFinancial70 = DB::getPdo()->lastInsertId();
																												
																												
																													DB::table('evidence_financial')->insert([
																												'evidence_id' => $idevidencia428,
																												'activity_source_id' =>$idactivitySource71,
																												'value' => 304161601,
																												]);
																												$idevidenceFinancial71 = DB::getPdo()->lastInsertId();
																												
																												
																													DB::table('evidence_financial')->insert([
																												'evidence_id' => $idevidencia428,
																												'activity_source_id' =>$idactivitySource72,
																												'value' => 112393409,
																												]);
																												$idevidenceFinancial72 = DB::getPdo()->lastInsertId();
																												
																												
																													DB::table('evidence_financial')->insert([
																												'evidence_id' => $idevidencia428,
																												'activity_source_id' =>$idactivitySource73,
																												'value' => 99000000,
																												]);
																												$idevidenceFinancial73 = DB::getPdo()->lastInsertId();
																												
																												
																													DB::table('evidence_financial')->insert([
																												'evidence_id' => $idevidencia428,
																												'activity_source_id' =>$idactivitySource74,
																												'value' => 73000000,
																												]);
																												$idevidenceFinancial74 = DB::getPdo()->lastInsertId();
																												
																												
																													DB::table('evidence_financial')->insert([
																												'evidence_id' => $idevidencia428,
																												'activity_source_id' =>$idactivitySource75,
																												'value' => 24195912.8999999,
																												]);
																												$idevidenceFinancial75 = DB::getPdo()->lastInsertId();
																												
																												
                    }
}