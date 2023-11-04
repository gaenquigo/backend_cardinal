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
 * Class HistoricPAI_CRQ_Seeder
 */
class HistoricPAI_CRQ_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $pai=PAI::create([
        'name' => 'PLAN DE ACCIÓN INSTITUCIONAL 2016 - 2019 ""Quindío verde, plan ambiental para la paz""',
        'start_date' => '2016-01-01',
        'end_date' => '2019-12-31',
        'director_name' => 'JOHN JAMES FERNANDEZ LOPEZ',
        'group_id' => 31,
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
            'car_program' => 'PROGRAMA No 1. Gestión Integral del Recurso Hídrico',
            'weighing' => 25,
            ]);
            $idprogram1 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline1,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA No 2 Gestión integral de la Biodiversidad y sus Servicios Ecosistémicos',
            'weighing' => 25,
            ]);
            $idprogram2 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline1,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA No 3 Gestión Ambiental Urbana, Productiva y del Riesgo de Desastres ',
            'weighing' => 25,
            ]);
            $idprogram3 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline1,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA No 4 Fortalecimiento del Sistema Nacional Ambiental en el Departamento del Quindío',
            'weighing' => 25,
            ]);
            $idprogram4 = DB::getPdo()->lastInsertId();
            
            DB::table('projects')->insert([
              'program_id' => $idprogram1,
              'project' => 'Proyecto No 1.1. Planificación para la gestión integral del recurso hídrico ',
              'weighing' => 20,
              ]);
              $idproject1 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram1,
              'project' => 'Proyecto No 1.2. Cultura del Agua
            ',
              'weighing' => 20,
              ]);
              $idproject2 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram1,
              'project' => 'Proyecto No 1.3 Monitoreo de la calidad del Agua y de los vertimientos',
              'weighing' => 20,
              ]);
              $idproject3 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram1,
              'project' => 'Proyecto No  1.4 Inversión en obras de descontaminación de aguas residuales.',
              'weighing' => 20,
              ]);
              $idproject4 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram1,
              'project' => 'Proyecto No. 1.5 Autoridad Ambiental en la Gestión Integral del Recurso Hídrico',
              'weighing' => 20,
              ]);
              $idproject5 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => 'Proyecto No 2.1. Fortalecimiento de la gestión ambiental y social en áreas de conservación y ecosistemas estratégicos del departamento del Quindío',
              'weighing' => 25,
              ]);
              $idproject6 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => 'Proyecto No 2.2 Restauración Ecológica para la recuperación de ecosistemas, ambientalmente estratégicos. ',
              'weighing' => 25,
              ]);
              $idproject7 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => 'Proyecto No. 2.3 Desarrollo de acciones de protección, conservación y regulación de los recursos flora y fauna',
              'weighing' => 25,
              ]);
              $idproject8 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => 'Proyecto No. 2.4. Fomento del recurso bambú-guadua',
              'weighing' => 25,
              ]);
              $idproject9 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram3,
              'project' => 'Proyecto No. 3.1. Gestión integral de residuos sólidos y peligrosos ',
              'weighing' => 14,
              ]);
              $idproject10 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram3,
              'project' => 'Ptoyecto 3.2 Monitoreo del recurso Aire.',
              'weighing' => 14,
              ]);
              $idproject11 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram3,
              'project' => 'Proyecto No. 3.3. Regulación y Control del recurso Aire. ',
              'weighing' => 14,
              ]);
              $idproject12 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram3,
              'project' => 'Proyecto No. 3.4 Gestión para el uso y manejo sostenible de los suelos del departamento del Quindío.',
              'weighing' => 14,
              ]);
              $idproject13 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram3,
              'project' => 'Proyecto No. 3.5. Promoción y posicionamiento de los negocios verdes en el departamento del Quindío',
              'weighing' => 14,
              ]);
              $idproject14 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram3,
              'project' => 'Proyecto No. 3.6. Gestión Ambiental con los Sectores Productivos',
              'weighing' => 15,
              ]);
              $idproject15 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram3,
              'project' => 'Proyecto No. 3.7. Gestión del Riesgo de Desastres para fenómenos hidrometeorológicos en el departamento del Quindío',
              'weighing' => 15,
              ]);
              $idproject16 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram4,
              'project' => 'Proyecto No 4.1. Acciones para la mitigación y adaptación a la variabilidad y cambio climático. ',
              'weighing' => 12,
              ]);
              $idproject17 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram4,
              'project' => 'Proyecto No. 4.2 Fortalecimiento de la tarea conjunta y coordinada entre el Estado, la comunidad, las organizaciones no gubernamentales y el sector privado.',
              'weighing' => 12,
              ]);
              $idproject18 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram4,
              'project' => 'Proyecto No. 4.3. Planificación Institucional. ',
              'weighing' => 12,
              ]);
              $idproject19 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram4,
              'project' => 'Proyecto No. 4.4. Planificación Regional y Ordenamiento Ambiental del Territorio ',
              'weighing' => 12,
              ]);
              $idproject20 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram4,
              'project' => 'Proyecto No 4.5 Mejoramiento continuo del proceso de servicio al cliente',
              'weighing' => 13,
              ]);
              $idproject21 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram4,
              'project' => 'Proyecto No. 4.6.Fortalecimiento Institucional',
              'weighing' => 13,
              ]);
              $idproject22 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram4,
              'project' => 'Proyecto No. 4.7. Fortalecimiento Financiero',
              'weighing' => 13,
              ]);
              $idproject23 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram4,
              'project' => 'Proyecto No 4.8. Fortalecimiento Jurídico y Sancionatorio Ambiental ',
              'weighing' => 13,
              ]);
              $idproject24 = DB::getPdo()->lastInsertId();
              
              
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
                
                
                
              DB::table('objectives')->insert([
                'project_id' => $idproject15,
                'objective' => 'Objetivo 15',
                'weighing' => 100,
                ]);
                $idobjective15 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objectives')->insert([
                'project_id' => $idproject16,
                'objective' => 'Objetivo 16',
                'weighing' => 100,
                ]);
                $idobjective16 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objectives')->insert([
                'project_id' => $idproject17,
                'objective' => 'Objetivo 17',
                'weighing' => 100,
                ]);
                $idobjective17 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objectives')->insert([
                'project_id' => $idproject18,
                'objective' => 'Objetivo 18',
                'weighing' => 100,
                ]);
                $idobjective18 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objectives')->insert([
                'project_id' => $idproject19,
                'objective' => 'Objetivo 19',
                'weighing' => 100,
                ]);
                $idobjective19 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objectives')->insert([
                'project_id' => $idproject20,
                'objective' => 'Objetivo 20',
                'weighing' => 100,
                ]);
                $idobjective20 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objectives')->insert([
                'project_id' => $idproject21,
                'objective' => 'Objetivo 21',
                'weighing' => 100,
                ]);
                $idobjective21 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objectives')->insert([
                'project_id' => $idproject22,
                'objective' => 'Objetivo 22',
                'weighing' => 100,
                ]);
                $idobjective22 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objectives')->insert([
                'project_id' => $idproject23,
                'objective' => 'Objetivo 23',
                'weighing' => 100,
                ]);
                $idobjective23 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objectives')->insert([
                'project_id' => $idproject24,
                'objective' => 'Objetivo 24',
                'weighing' => 100,
                ]);
                $idobjective24 = DB::getPdo()->lastInsertId();
                
                
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 0,
					'goal_2' => 30,
					'goal_3' => 20,
					'goal_4' => 50,
					'goal_1_balance' => 0,
					'goal_2_balance' => 30,
					'goal_3_balance' => 20,
					'goal_4_balance' => 50,
					'total_goal' => 100,
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 16,
					]);
					$idobjectiveproduct1 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 10,
					'goal_2' => 90,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 10,
					'goal_2_balance' => 90,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 100,
					'unit_goal' => 42,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 16,
					]);
					$idobjectiveproduct2 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 1,
					'goal_4' => 1,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 1,
					'goal_4_balance' => 1,
					'total_goal' => 2,
					'unit_goal' => 42,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 16,
					]);
					$idobjectiveproduct3 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
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
					'unit_goal' => 69,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 17,
					]);
					$idobjectiveproduct4 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
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
					'unit_goal' => 76,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 17,
					]);
					$idobjectiveproduct5 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
					'product_id' => null,
					'product_other' => 'Producto 6',
					'goal_1' => 0,
					'goal_2' => 10,
					'goal_3' => 90,
					'goal_4' => 0,
					'goal_1_balance' => 0,
					'goal_2_balance' => 10,
					'goal_3_balance' => 90,
					'goal_4_balance' => 0,
					'total_goal' => 100,
					'unit_goal' => 42,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 17,
					]);
					$idobjectiveproduct6 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
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
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 1,
					]);
					$idobjectiveproduct7 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective2,
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
					'unit_goal' => 69,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 99,
					]);
					$idobjectiveproduct8 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective2,
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
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 1,
					]);
					$idobjectiveproduct9 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 58,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 50,
					]);
					$idobjectiveproduct10 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 76,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 49,
					]);
					$idobjectiveproduct11 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective3,
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
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 1,
					]);
					$idobjectiveproduct12 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
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
					'weighing' => 99,
					]);
					$idobjectiveproduct13 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 1,
					]);
					$idobjectiveproduct14 = DB::getPdo()->lastInsertId();
					
					
					
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
					'weighing' => 14,
					]);
					$idobjectiveproduct15 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
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
					'weighing' => 14,
					]);
					$idobjectiveproduct16 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
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
					'weighing' => 14,
					]);
					$idobjectiveproduct17 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
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
					'weighing' => 14,
					]);
					$idobjectiveproduct18 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
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
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 14,
					]);
					$idobjectiveproduct19 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
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
					'unit_goal' => 73,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 14,
					]);
					$idobjectiveproduct20 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 58,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 15,
					]);
					$idobjectiveproduct21 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
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
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 1,
					]);
					$idobjectiveproduct22 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
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
					$idobjectiveproduct23 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
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
					'unit_goal' => 69,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 12,
					]);
					$idobjectiveproduct24 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 2,
					'goal_2' => 2,
					'goal_3' => 4,
					'goal_4' => 4,
					'goal_1_balance' => 2,
					'goal_2_balance' => 2,
					'goal_3_balance' => 4,
					'goal_4_balance' => 4,
					'total_goal' => 12,
					'unit_goal' => 69,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 12,
					]);
					$idobjectiveproduct25 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => null,
					'product_other' => 'Producto 4',
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 1,
					'goal_4' => 1,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 1,
					'goal_4_balance' => 1,
					'total_goal' => 2,
					'unit_goal' => 69,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 12,
					]);
					$idobjectiveproduct26 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => null,
					'product_other' => 'Producto 5',
					'goal_1' => 12,
					'goal_2' => 12,
					'goal_3' => 12,
					'goal_4' => 12,
					'goal_1_balance' => 12,
					'goal_2_balance' => 12,
					'goal_3_balance' => 12,
					'goal_4_balance' => 12,
					'total_goal' => 48,
					'unit_goal' => 69,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 12,
					]);
					$idobjectiveproduct27 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => null,
					'product_other' => 'Producto 6',
					'goal_1' => 0,
					'goal_2' => 2,
					'goal_3' => 2,
					'goal_4' => 2,
					'goal_1_balance' => 0,
					'goal_2_balance' => 2,
					'goal_3_balance' => 2,
					'goal_4_balance' => 2,
					'total_goal' => 6,
					'unit_goal' => 69,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 13,
					]);
					$idobjectiveproduct28 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => null,
					'product_other' => 'Producto 7',
					'goal_1' => 13,
					'goal_2' => 13,
					'goal_3' => 13,
					'goal_4' => 13,
					'goal_1_balance' => 13,
					'goal_2_balance' => 13,
					'goal_3_balance' => 13,
					'goal_4_balance' => 13,
					'total_goal' => 52,
					'unit_goal' => 58,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 13,
					]);
					$idobjectiveproduct29 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
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
					'unit_goal' => 42,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 13,
					]);
					$idobjectiveproduct30 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 1,
					]);
					$idobjectiveproduct31 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
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
					'unit_goal' => 45,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 33,
					]);
					$idobjectiveproduct32 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 60,
					'goal_2' => 150,
					'goal_3' => 250,
					'goal_4' => 100,
					'goal_1_balance' => 60,
					'goal_2_balance' => 150,
					'goal_3_balance' => 250,
					'goal_4_balance' => 100,
					'total_goal' => 560,
					'unit_goal' => 47,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 33,
					]);
					$idobjectiveproduct33 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
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
					'weighing' => 33,
					]);
					$idobjectiveproduct34 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 1,
					]);
					$idobjectiveproduct35 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 5,
					'goal_2' => 5,
					'goal_3' => 5,
					'goal_4' => 5,
					'goal_1_balance' => 5,
					'goal_2_balance' => 5,
					'goal_3_balance' => 5,
					'goal_4_balance' => 5,
					'total_goal' => 20,
					'unit_goal' => 69,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 11,
					]);
					$idobjectiveproduct36 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 0,
					'goal_2' => 1,
					'goal_3' => 1,
					'goal_4' => 1,
					'goal_1_balance' => 0,
					'goal_2_balance' => 1,
					'goal_3_balance' => 1,
					'goal_4_balance' => 1,
					'total_goal' => 3,
					'unit_goal' => 45,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 11,
					]);
					$idobjectiveproduct37 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
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
					$idobjectiveproduct38 = DB::getPdo()->lastInsertId();
					
					
					
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
					'weighing' => 11,
					]);
					$idobjectiveproduct39 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 11,
					]);
					$idobjectiveproduct40 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
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
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 11,
					]);
					$idobjectiveproduct41 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
					'product_id' => null,
					'product_other' => 'Producto 7',
					'goal_1' => 1,
					'goal_2' => 2,
					'goal_3' => 2,
					'goal_4' => 2,
					'goal_1_balance' => 1,
					'goal_2_balance' => 2,
					'goal_3_balance' => 2,
					'goal_4_balance' => 2,
					'total_goal' => 7,
					'unit_goal' => 69,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 11,
					]);
					$idobjectiveproduct42 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
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
					'weighing' => 11,
					]);
					$idobjectiveproduct43 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
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
					'weighing' => 11,
					]);
					$idobjectiveproduct44 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 1,
					]);
					$idobjectiveproduct45 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective9,
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
					'weighing' => 99,
					]);
					$idobjectiveproduct46 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 1,
					]);
					$idobjectiveproduct47 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 13,
					'goal_2' => 13,
					'goal_3' => 13,
					'goal_4' => 13,
					'goal_1_balance' => 13,
					'goal_2_balance' => 13,
					'goal_3_balance' => 13,
					'goal_4_balance' => 13,
					'total_goal' => 52,
					'unit_goal' => 58,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 50,
					]);
					$idobjectiveproduct48 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 12,
					'goal_2' => 12,
					'goal_3' => 12,
					'goal_4' => 12,
					'goal_1_balance' => 12,
					'goal_2_balance' => 12,
					'goal_3_balance' => 12,
					'goal_4_balance' => 12,
					'total_goal' => 48,
					'unit_goal' => 58,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 49,
					]);
					$idobjectiveproduct49 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
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
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 1,
					]);
					$idobjectiveproduct50 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
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
					'unit_goal' => 42,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 16,
					]);
					$idobjectiveproduct51 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
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
					'unit_goal' => 42,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 16,
					]);
					$idobjectiveproduct52 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 76,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 16,
					]);
					$idobjectiveproduct53 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
					'product_id' => null,
					'product_other' => 'Producto 4',
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 2,
					'goal_4' => 0,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 2,
					'goal_4_balance' => 0,
					'total_goal' => 2,
					'unit_goal' => 53,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 17,
					]);
					$idobjectiveproduct54 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 42,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 17,
					]);
					$idobjectiveproduct55 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
					'product_id' => null,
					'product_other' => 'Producto 6',
					'goal_1' => 0,
					'goal_2' => 1,
					'goal_3' => 0,
					'goal_4' => 1,
					'goal_1_balance' => 0,
					'goal_2_balance' => 1,
					'goal_3_balance' => 0,
					'goal_4_balance' => 1,
					'total_goal' => 2,
					'unit_goal' => 58,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 17,
					]);
					$idobjectiveproduct56 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 1,
					]);
					$idobjectiveproduct57 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective12,
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
					'weighing' => 99,
					]);
					$idobjectiveproduct58 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 1,
					]);
					$idobjectiveproduct59 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective13,
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
					'unit_goal' => 73,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 33,
					]);
					$idobjectiveproduct60 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective13,
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
					'unit_goal' => 75,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 33,
					]);
					$idobjectiveproduct61 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 73,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 33,
					]);
					$idobjectiveproduct62 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 1,
					]);
					$idobjectiveproduct63 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 69,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 50,
					]);
					$idobjectiveproduct64 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective14,
					'product_id' => null,
					'product_other' => 'Producto 2',
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
					'weighing' => 49,
					]);
					$idobjectiveproduct65 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective14,
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
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 1,
					]);
					$idobjectiveproduct66 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective15,
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
					'weighing' => 33,
					]);
					$idobjectiveproduct67 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective15,
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
					'weighing' => 33,
					]);
					$idobjectiveproduct68 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective15,
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
					'unit_goal' => 75,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 33,
					]);
					$idobjectiveproduct69 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective15,
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
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 1,
					]);
					$idobjectiveproduct70 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective16,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 11,
					'goal_2' => 11,
					'goal_3' => 11,
					'goal_4' => 11,
					'goal_1_balance' => 11,
					'goal_2_balance' => 11,
					'goal_3_balance' => 11,
					'goal_4_balance' => 11,
					'total_goal' => 44,
					'unit_goal' => 58,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 50,
					]);
					$idobjectiveproduct71 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective16,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 13,
					'goal_2' => 13,
					'goal_3' => 13,
					'goal_4' => 13,
					'goal_1_balance' => 13,
					'goal_2_balance' => 13,
					'goal_3_balance' => 13,
					'goal_4_balance' => 13,
					'total_goal' => 52,
					'unit_goal' => 58,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 49,
					]);
					$idobjectiveproduct72 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective16,
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
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 1,
					]);
					$idobjectiveproduct73 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective17,
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
					'unit_goal' => 73,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 20,
					]);
					$idobjectiveproduct74 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective17,
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
					'weighing' => 20,
					]);
					$idobjectiveproduct75 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective17,
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
					'unit_goal' => 69,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 20,
					]);
					$idobjectiveproduct76 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective17,
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
					'unit_goal' => 73,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 20,
					]);
					$idobjectiveproduct77 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective17,
					'product_id' => null,
					'product_other' => 'Producto 5',
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
					'weighing' => 19,
					]);
					$idobjectiveproduct78 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective17,
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
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 1,
					]);
					$idobjectiveproduct79 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective18,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 3,
					'goal_2' => 5,
					'goal_3' => 5,
					'goal_4' => 5,
					'goal_1_balance' => 3,
					'goal_2_balance' => 5,
					'goal_3_balance' => 5,
					'goal_4_balance' => 5,
					'total_goal' => 18,
					'unit_goal' => 73,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 12,
					]);
					$idobjectiveproduct80 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective18,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 3,
					'goal_2' => 5,
					'goal_3' => 5,
					'goal_4' => 5,
					'goal_1_balance' => 3,
					'goal_2_balance' => 5,
					'goal_3_balance' => 5,
					'goal_4_balance' => 5,
					'total_goal' => 18,
					'unit_goal' => 73,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 12,
					]);
					$idobjectiveproduct81 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective18,
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
					'unit_goal' => 37,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 12,
					]);
					$idobjectiveproduct82 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective18,
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
					'unit_goal' => 75,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 12,
					]);
					$idobjectiveproduct83 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective18,
					'product_id' => null,
					'product_other' => 'Producto 5',
					'goal_1' => 13,
					'goal_2' => 13,
					'goal_3' => 13,
					'goal_4' => 13,
					'goal_1_balance' => 13,
					'goal_2_balance' => 13,
					'goal_3_balance' => 13,
					'goal_4_balance' => 13,
					'total_goal' => 52,
					'unit_goal' => 58,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 12,
					]);
					$idobjectiveproduct84 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective18,
					'product_id' => null,
					'product_other' => 'Producto 6',
					'goal_1' => 12,
					'goal_2' => 12,
					'goal_3' => 12,
					'goal_4' => 12,
					'goal_1_balance' => 12,
					'goal_2_balance' => 12,
					'goal_3_balance' => 12,
					'goal_4_balance' => 12,
					'total_goal' => 48,
					'unit_goal' => 69,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 13,
					]);
					$idobjectiveproduct85 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective18,
					'product_id' => null,
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
					'unit_goal' => 58,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 13,
					]);
					$idobjectiveproduct86 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective18,
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
					'unit_goal' => 69,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 13,
					]);
					$idobjectiveproduct87 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective18,
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
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 1,
					]);
					$idobjectiveproduct88 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective19,
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
					'unit_goal' => 69,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 33,
					]);
					$idobjectiveproduct89 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective19,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 0,
					'goal_2' => 20,
					'goal_3' => 80,
					'goal_4' => 0,
					'goal_1_balance' => 0,
					'goal_2_balance' => 20,
					'goal_3_balance' => 80,
					'goal_4_balance' => 0,
					'total_goal' => 100,
					'unit_goal' => 73,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 33,
					]);
					$idobjectiveproduct90 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective19,
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
					'unit_goal' => 42,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 33,
					]);
					$idobjectiveproduct91 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective19,
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
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 1,
					]);
					$idobjectiveproduct92 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective20,
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
					'unit_goal' => 69,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 20,
					]);
					$idobjectiveproduct93 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective20,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 12,
					'goal_2' => 12,
					'goal_3' => 12,
					'goal_4' => 12,
					'goal_1_balance' => 12,
					'goal_2_balance' => 12,
					'goal_3_balance' => 12,
					'goal_4_balance' => 12,
					'total_goal' => 48,
					'unit_goal' => 58,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 20,
					]);
					$idobjectiveproduct94 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective20,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 0,
					'goal_4' => 1,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 0,
					'goal_4_balance' => 1,
					'total_goal' => 1,
					'unit_goal' => 69,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 20,
					]);
					$idobjectiveproduct95 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective20,
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
					'unit_goal' => 58,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 20,
					]);
					$idobjectiveproduct96 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective20,
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
					'unit_goal' => 80,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 19,
					]);
					$idobjectiveproduct97 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective20,
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
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 1,
					]);
					$idobjectiveproduct98 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective21,
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
					'weighing' => 33,
					]);
					$idobjectiveproduct99 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective21,
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
					'weighing' => 33,
					]);
					$idobjectiveproduct100 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective21,
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
					'weighing' => 33,
					]);
					$idobjectiveproduct101 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective21,
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
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 1,
					]);
					$idobjectiveproduct102 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective22,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 12,
					'goal_2' => 12,
					'goal_3' => 12,
					'goal_4' => 12,
					'goal_1_balance' => 12,
					'goal_2_balance' => 12,
					'goal_3_balance' => 12,
					'goal_4_balance' => 12,
					'total_goal' => 48,
					'unit_goal' => 58,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 20,
					]);
					$idobjectiveproduct103 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective22,
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
					'unit_goal' => 69,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 20,
					]);
					$idobjectiveproduct104 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective22,
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
					'weighing' => 20,
					]);
					$idobjectiveproduct105 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective22,
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
					'unit_goal' => 73,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 20,
					]);
					$idobjectiveproduct106 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective22,
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
					'unit_goal' => 73,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 19,
					]);
					$idobjectiveproduct107 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective22,
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
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 1,
					]);
					$idobjectiveproduct108 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective23,
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
					'weighing' => 33,
					]);
					$idobjectiveproduct109 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective23,
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
					'unit_goal' => 58,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 33,
					]);
					$idobjectiveproduct110 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective23,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 12,
					'goal_2' => 12,
					'goal_3' => 12,
					'goal_4' => 12,
					'goal_1_balance' => 12,
					'goal_2_balance' => 12,
					'goal_3_balance' => 12,
					'goal_4_balance' => 12,
					'total_goal' => 48,
					'unit_goal' => 58,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 33,
					]);
					$idobjectiveproduct111 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective23,
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
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 1,
					]);
					$idobjectiveproduct112 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective24,
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
					'weighing' => 50,
					]);
					$idobjectiveproduct113 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective24,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 80,
					'goal_2' => 80,
					'goal_3' => 80,
					'goal_4' => 80,
					'goal_1_balance' => 80,
					'goal_2_balance' => 80,
					'goal_3_balance' => 80,
					'goal_4_balance' => 80,
					'total_goal' => 320,
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 49,
					]);
					$idobjectiveproduct114 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective24,
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
					'unit_goal' => 71,
					'indicator_national_id' => 799,
					'indicator_ods_id' => 890,
					'national_policy_id' => 875,
					'weighing' => 1,
					]);
					$idobjectiveproduct115 = DB::getPdo()->lastInsertId();
					
                  
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct1,
                    'name' => 'Meta 1.1.1. Formular las medidas de manejo ambiental del acuífero del Abanico Quindío – Risaralda.',
                    'goal_1' => 0,
                    'goal_2' => 30,
                    'goal_3' => 20,
                    'goal_4' => 50,
                    'goal' => 100,
                    'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity1 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct2,
                    'name' => 'Meta 1.1.2. Elaborar un documento de la  Evaluación Regional del Agua para el Departamento del Quindío ',
                    'goal_1' => 10,
                    'goal_2' => 90,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 100,
                    'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity2 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct3,
                    'name' => 'Meta 1.1.3. Formular el Plan de Ordenamiento del Recurso Hídrico del río Roble',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 2,
                    'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity3 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct4,
                    'name' => 'Meta 1.1.4. Ejecutar el Plan de Ordenamiento del Recurso Hídrico del río Quindío',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity4 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct5,
                    'name' => 'Meta 1.1.5. Operar la red hidrometeorológica
                  institucional',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity5 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct6,
                    'name' => 'Meta 1.1.6. Determinar objetivos de calidad de las fuentes hídricas en el Departamento del Quindío
                  ',
                    'goal_1' => 0,
                    'goal_2' => 10,
                    'goal_3' => 90,
                    'goal_4' => 0,
                    'goal' => 100,
                    'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity6 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct7,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity7 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct8,
                    'name' => 'Meta 1.2.1 . Ejecutar la estrategia de educación ambiental CUIDAGUA ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity8 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct9,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity9 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct10,
                    'name' => 'Meta 1.3.1  Mantener y mejorar la Acreditación de laboratorio de aguas',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity10 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct11,
                    'name' => 'Meta 1.3.2 Operar la red de monitoreo y calidad del agua y vertimientos.',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity11 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct12,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity12 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct13,
                    'name' => 'Meta No 1.4.1 Financiar obras de descontaminación priorizadas ',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity13 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct14,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity14 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct15,
                    'name' => 'Meta 1.5.1  Evaluar las solicitudes de prospección y exploración de aguas subterráneas, concesiones de aguas superficiales y subterráneas, permisos de ocupación de cauce y programas de uso eficiente y ahorro del agua. ',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity15 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct16,
                    'name' => 'Meta 1.5.2. Implementar el programa anual de control y seguimiento a usuarios del recurso hídrico relacionados con prospección y exploración de aguas subterráneas, concesiones de aguas superficiales y subterráneas, permisos de ocupación de cauce y programas de uso eficiente y ahorro del agua.',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity16 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct17,
                    'name' => 'Meta 1.5.3  Diseñar e implementar el programa de legalización de usuarios del Recurso Hídrico.',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity17 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct18,
                    'name' => 'Meta 1.5.4 Ejecutar el procedimiento técnico de tasa por utilización del agua',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity18 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct19,
                    'name' => 'Meta 1.5.5. Evaluar las solicitudes de permisos de vertimiento.',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity19 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct20,
                    'name' => 'Meta 1.5.6 Implementar el Programa Anual de control y seguimiento a vertimientos.',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity20 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct21,
                    'name' => 'Meta 1.5.7 Ejecutar el procedimiento técnico de tasa retributiva',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 15,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity21 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct22,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity22 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct23,
                    'name' => 'Meta.2.1.1. Ejecutar las acciones que le corresponden a la entidad en la ejecución de los planes operativos del SIRAP EC – SIDAP y SIMAPS. ',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity23 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct24,
                    'name' => 'Meta 2.1.2 Formular y adoptar Plan de Manejo del  Área Protegida del DRMI – Pijao. ',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 1,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity24 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct25,
                    'name' => 'Mta 2.1.3 Ejecutar los planes de manejo de las Áreas Protegidas del DRMI – Salento DRMI  Y DCS-BB.',
                    'goal_1' => 2,
                    'goal_2' => 2,
                    'goal_3' => 4,
                    'goal_4' => 4,
                    'goal' => 12,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity25 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct26,
                    'name' => 'Meta 2.1.4 Formular y ejecutar los planes de manejos de los complejos de páramos del departamento del Quindío, una vez delimitados por el Ministerio.   ',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 2,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity26 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct27,
                    'name' => 'Meta 2.1.5 Ejecutar los planes de manejo de las Áreas de Conservación y Manejo de la Entidad. ',
                    'goal_1' => 12,
                    'goal_2' => 12,
                    'goal_3' => 12,
                    'goal_4' => 12,
                    'goal' => 48,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity27 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct28,
                    'name' => 'Meta 2.1.6 Formular y Ejecutar los Planes de Manejo de los complejos de Humedales. ',
                    'goal_1' => 0,
                    'goal_2' => 2,
                    'goal_3' => 2,
                    'goal_4' => 2,
                    'goal' => 6,
                    'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity28 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct29,
                    'name' => 'Meta 2.1.7 Realizar seguimiento y asesoría técnica  a las Entidades Territoriales en cumplimiento del título 9, capítulo 8 del Decreto 1076 de 2015 (artículo 111 ley 99 de 1993) ',
                    'goal_1' => 13,
                    'goal_2' => 13,
                    'goal_3' => 13,
                    'goal_4' => 13,
                    'goal' => 52,
                    'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity29 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct30,
                    'name' => 'Meta 2.1.8 Ajustar la Delimitación y Priorización de las Áreas de Importancia Estratégica para la Conservación de Recursos hídricos para el Municipio de Génova y un sector del Municipio de Salento ',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 1,
                    'goal' => 1,
                    'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity30 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct31,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity31 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct32,
                    'name' => 'Meta 2.2.1  Definir y aplicar el método del cálculo para cuantificar la tasa de Deforestación en el Quindío.  ',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 3,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity32 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct33,
                    'name' => 'Meta 2.2.2 Implementar el proceso de restauración ecológica  (Rehabilitación, recuperación y restauración), urbano y rural en el Departamento del Quindío (Páramos, humedales, franjas forestales protectoras, conectividad biológica,  mitigación al cambio climático, regulación hídrica y en sistemas productivos).',
                    'goal_1' => 60,
                    'goal_2' => 150,
                    'goal_3' => 250,
                    'goal_4' => 100,
                    'goal' => 560,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity33 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct34,
                    'name' => 'Meta 2.2.3 Suministrar material vegetal para la conservación, de acuerdo al inventario existente en el vivero.',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity34 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct35,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity35 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct36,
                    'name' => 'Meta 2.3.1. Actualizar y Ejecutar los Planes de manejo de especies focales de Fauna y Flora ',
                    'goal_1' => 5,
                    'goal_2' => 5,
                    'goal_3' => 5,
                    'goal_4' => 5,
                    'goal' => 20,
                    'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity36 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct37,
                    'name' => 'Meta 2.3.2. Formular investigaciones en conjunto con organismos del Sistema Nacional Ambiental SINA sobre biodiversidad y servicios Ecosistémicos articuladas.',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 3,
                    'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity37 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct38,
                    'name' => 'Meta 2.3.3. Ejecutar el programa de Control y seguimiento al tráfico ilegal de fauna de acuerdo a la Estrategia Nacional de fauna. (CIFFIQ –zona andes)',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity38 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct39,
                    'name' => 'Mea 2.3.4. Manejar y rehabilitar la fauna silvestre incautada aplicando los protocolos establecidos.',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity39 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct40,
                    'name' => 'Meta 2.3.5. Regular el aprovechamiento forestal y productos no maderables del bosque en la jurisdicción. ',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity40 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct41,
                    'name' => 'Meta 2.3.6. Implementar la estrategia de prevención, control y vigilancia forestal para el Departamento',
                    'goal_1' => 25,
                    'goal_2' => 25,
                    'goal_3' => 25,
                    'goal_4' => 25,
                    'goal' => 100,
                    'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity41 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct42,
                    'name' => 'Meta 2.3.7. Formular y ejecutar plan de manejo de especies exóticas, invasoras y especies conflicto en el departamento del Quindío.',
                    'goal_1' => 1,
                    'goal_2' => 2,
                    'goal_3' => 2,
                    'goal_4' => 2,
                    'goal' => 7,
                    'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity42 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct43,
                    'name' => 'Meta 2.3.8. Regular y controlar los permisos de investigación científica en diversidad biológica.',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity43 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct44,
                    'name' => 'Meta 2.3.9. Formular y ejecutar la metodología en la creación de núcleos forestales para el recurso  guadua en el Departamento del Quindío.',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity44 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct45,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity45 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct46,
                    'name' => 'Meta 2.4.1. Fortalecer el Centro Nacional para el Estudio del Bambú y la Guadua ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity46 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct47,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity47 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct48,
                    'name' => 'Meta 3.1.1. Realizar acompañamiento y seguimiento a los entes territoriales en el aprovechamiento y la gestión de residuos sólidos ',
                    'goal_1' => 13,
                    'goal_2' => 13,
                    'goal_3' => 13,
                    'goal_4' => 13,
                    'goal' => 52,
                    'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity48 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct49,
                    'name' => 'Meta 3.1.2. Regular, controlar y monitorear a los gestores y generadores de residuos.',
                    'goal_1' => 12,
                    'goal_2' => 12,
                    'goal_3' => 12,
                    'goal_4' => 12,
                    'goal' => 48,
                    'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity49 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct50,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity50 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct51,
                    'name' => 'Meta 3.2.1. Realizar una línea base en el recurso aire para los municipios priorizados en el departamento del Quindío.',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 3,
                    'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity51 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct52,
                    'name' => 'Meta 3.2.2. Diseñar un sistema de vigilancia de calidad del aire',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 1,
                    'goal' => 1,
                    'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity52 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct53,
                    'name' => 'Meta 3.2.3. Operar la red de monitoreo de calidad del aire del municipio de Armenia',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity53 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct54,
                    'name' => 'Meta 3.2.4. Actualizar los mapas de ruido ambiental para el municipio de Armenia',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 2,
                    'goal_4' => 0,
                    'goal' => 2,
                    'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity54 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct55,
                    'name' => 'Meta 3.2.5. Realizar seguimiento a los planes de descontaminación por ruido',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity55 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct56,
                    'name' => 'Meta 3.2.6. Ejecutar la estrategia educación ambiental en los temas de emisiones atmosféricas y ruido',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 0,
                    'goal_4' => 1,
                    'goal' => 2,
                    'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity56 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct57,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity57 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective12,
                    'product_id' =>$idobjectiveproduct58,
                    'name' => 'Meta 3.3.1.       Realizar regulación y control a los generadores de emisiones atmosféricas  ',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity58 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective12,
                    'product_id' =>$idobjectiveproduct59,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity59 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct60,
                    'name' => 'Meta 3.4.1. Diseñar y ejecutar un programa de difusión y capacitación para la conservación del recurso suelo.  ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity60 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct61,
                    'name' => 'Meta 3.4.2. Implementar un proyecto de  reconversión ambiental y buenas prácticas ambientales de  sistemas productivos agrícolas y/o ganaderos en conflicto  por uso y/o manejo.',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity61 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct62,
                    'name' => 'Meta 3.4.3. Diseñar y ejecutar el programa de control y seguimiento a las actividades agropecuarias para la conservación y recuperación de suelos.',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity62 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct63,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity63 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective14,
                    'product_id' =>$idobjectiveproduct64,
                    'name' => 'Meta 3.5.1. Formular y ejecutar el plan de acción de negocios verdes  ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity64 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective14,
                    'product_id' =>$idobjectiveproduct65,
                    'name' => 'Mta 3.5.2. Crear y operar la ventanilla de Negocios Verdes de la Corporación',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 3,
                    'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity65 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective14,
                    'product_id' =>$idobjectiveproduct66,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity66 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective15,
                    'product_id' =>$idobjectiveproduct67,
                    'name' => 'Meta 3.6.1. Suscribir agendas ambientales con diferentes subsectores productivos ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity67 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective15,
                    'product_id' =>$idobjectiveproduct68,
                    'name' => 'Meta 3.6.2. Realizar Control y seguimiento ambiental a las autorizaciones otorgadas a los sectores productivos',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity68 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective15,
                    'product_id' =>$idobjectiveproduct69,
                    'name' => 'Meta 3.6.3. Promover procesos de sinergias socioambientales con la cosmovisión indígena. ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity69 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective15,
                    'product_id' =>$idobjectiveproduct70,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity70 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective16,
                    'product_id' =>$idobjectiveproduct71,
                    'name' => 'Meta 3.7.1. Acompañar a entidades territoriales en la elaboración de un estudio de amenaza por movimientos en masa, inundación y avenidas torrenciales. ',
                    'goal_1' => 11,
                    'goal_2' => 11,
                    'goal_3' => 11,
                    'goal_4' => 11,
                    'goal' => 44,
                    'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity71 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective16,
                    'product_id' =>$idobjectiveproduct72,
                    'name' => 'Meta 3.7.2. Asesorar en el componente ambiental a las entidades territoriales en los planes locales de Gestión del riesgo.',
                    'goal_1' => 13,
                    'goal_2' => 13,
                    'goal_3' => 13,
                    'goal_4' => 13,
                    'goal' => 52,
                    'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity72 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective16,
                    'product_id' =>$idobjectiveproduct73,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity73 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective17,
                    'product_id' =>$idobjectiveproduct74,
                    'name' => 'Meta 4.1.1. Formular y ejecutar el Programa de fortalecimiento Institucional en cambio climático en las diferentes líneas temáticas ambientales',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 3,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity74 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective17,
                    'product_id' =>$idobjectiveproduct75,
                    'name' => 'Meta 4.1.2. Participar en el Nodo Regional Eje Cafetero de Cambio Climático ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity75 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective17,
                    'product_id' =>$idobjectiveproduct76,
                    'name' => 'Meta 4.1.3. Acompañar en la formulación e implementación del Plan Departamental de Cambio Climático – PICC. ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity76 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective17,
                    'product_id' =>$idobjectiveproduct77,
                    'name' => 'Meta 4.1.4. Ejecutar la estrategia de educación e investigación asociado a cambio climático',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity77 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective17,
                    'product_id' =>$idobjectiveproduct78,
                    'name' => 'Meta 4.1.5. Formular una estrategia nacional de reducción de emisiones debidas a la deforestación y degradación forestal, REDD+ de acuerdo a los lineamientos definidos por el Ministerio de ambiente y desarrollo sostenible. ',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 1,
                    'goal_4' => 0,
                    'goal' => 1,
                    'weighing' => 19,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity78 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective17,
                    'product_id' =>$idobjectiveproduct79,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity79 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective18,
                    'product_id' =>$idobjectiveproduct80,
                    'name' => 'Meta 4.2.1.  Fortalecer  proyectos encaminados a la protección, conservación y uso sostenible de los recursos naturales, presentados por iniciativa de los Entes Territoriales. ',
                    'goal_1' => 3,
                    'goal_2' => 5,
                    'goal_3' => 5,
                    'goal_4' => 5,
                    'goal' => 18,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity80 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective18,
                    'product_id' =>$idobjectiveproduct81,
                    'name' => 'Meta 4.2.2. Fortalecer la participación ciudadana para fomentar la protección, conservación y uso sostenible de los recursos naturales.',
                    'goal_1' => 3,
                    'goal_2' => 5,
                    'goal_3' => 5,
                    'goal_4' => 5,
                    'goal' => 18,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity81 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective18,
                    'product_id' =>$idobjectiveproduct82,
                    'name' => 'Meta 4.2.3. Promover la participación social, a través de la educación y cultura ambiental.',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity82 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective18,
                    'product_id' =>$idobjectiveproduct83,
                    'name' => 'Meta 4.2.4. Formular y ejecutar el programa de Promotorìa ambiental y jóvenes de ambiente.',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity83 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective18,
                    'product_id' =>$idobjectiveproduct84,
                    'name' => 'Meta 4.2.5. Apoyar en la conformación, coordinación y dinamización de los Comités Interinstitucionales de Educación Ambiental departamental - CIDEA y municipales – COMEDA ',
                    'goal_1' => 13,
                    'goal_2' => 13,
                    'goal_3' => 13,
                    'goal_4' => 13,
                    'goal' => 52,
                    'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity84 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective18,
                    'product_id' =>$idobjectiveproduct85,
                    'name' => 'Meta 4.2.6. Asistir técnica y financieramente a los Proyectos Ciudadanos y Comunitarios de Educación Ambiental – PROCEDA y  Proyectos Escolares de Educación Ambiental - PRAE del departamento y a la REDEPRAE del Quindío. ',
                    'goal_1' => 12,
                    'goal_2' => 12,
                    'goal_3' => 12,
                    'goal_4' => 12,
                    'goal' => 48,
                    'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity85 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective18,
                    'product_id' =>$idobjectiveproduct86,
                    'name' => 'Meta 4.2.7. Planificar la estrategia de   la educación ambiental a nivel de la CRQ y en la ejecución de las estrategias educativas ambientales: Agua, Gestión del riesgo, Cambio climático, Biodiversidad, Aire y ruido, Paisaje Cultural Cafetero.',
                    'goal_1' => 5,
                    'goal_2' => 5,
                    'goal_3' => 5,
                    'goal_4' => 5,
                    'goal' => 20,
                    'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity86 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective18,
                    'product_id' =>$idobjectiveproduct87,
                    'name' => 'eta 4.2.8. Reformular y ejecutar  el Plan Estratégico de Comunicaciones de la entidad.',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity87 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective18,
                    'product_id' =>$idobjectiveproduct88,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity88 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective19,
                    'product_id' =>$idobjectiveproduct89,
                    'name' => 'Meta 4.3.1. Fortalecer el Banco de Programas y Proyectos Ambientales – BPPA CRQ. ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity89 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective19,
                    'product_id' =>$idobjectiveproduct90,
                    'name' => 'Meta 4.3.2. Formular el documento del Estado de los Recursos Naturales en el departamento del Quindío',
                    'goal_1' => 0,
                    'goal_2' => 20,
                    'goal_3' => 80,
                    'goal_4' => 0,
                    'goal' => 100,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity90 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective19,
                    'product_id' =>$idobjectiveproduct91,
                    'name' => 'Meta 4.3.3. Formular el Plan Estratégico Institucional de la CRQ',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 1,
                    'goal_4' => 0,
                    'goal' => 1,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity91 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective19,
                    'product_id' =>$idobjectiveproduct92,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity92 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective20,
                    'product_id' =>$idobjectiveproduct93,
                    'name' => 'Meta 4.4.1.  Ajustar y ejecutar el Plan de Ordenación y Manejo de la Cuenca Hidrográfica – POMCA del río La Vieja.',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity93 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective20,
                    'product_id' =>$idobjectiveproduct94,
                    'name' => 'Meta 4.4.2. Acompañar  técnicamente la elaboración o ajustes de POT y realizar seguimiento en los asuntos ambientales.',
                    'goal_1' => 12,
                    'goal_2' => 12,
                    'goal_3' => 12,
                    'goal_4' => 12,
                    'goal' => 48,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity94 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective20,
                    'product_id' =>$idobjectiveproduct95,
                    'name' => 'Meta 4.4.3. Formular y adoptar el Plan de Gestión Ambiental Regional 2019 – 2030.',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 1,
                    'goal' => 1,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity95 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective20,
                    'product_id' =>$idobjectiveproduct96,
                    'name' => 'eta 4.4.4. Participar en los espacios de planificación y desarrollo regional.',
                    'goal_1' => 4,
                    'goal_2' => 4,
                    'goal_3' => 4,
                    'goal_4' => 4,
                    'goal' => 16,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity96 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective20,
                    'product_id' =>$idobjectiveproduct97,
                    'name' => 'Meta 4.4.5. Fortalecer la información para la planificación ambiental.',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 19,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity97 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective20,
                    'product_id' =>$idobjectiveproduct98,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity98 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective21,
                    'product_id' =>$idobjectiveproduct99,
                    'name' => 'Meta 4.5.1. Incrementar la eficacia de los procesos de servicio al cliente, desde los permisos, licencias, autorizaciones y respuestas a requerimientos.  ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity99 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective21,
                    'product_id' =>$idobjectiveproduct100,
                    'name' => 'Meta 4.5.2. Diseñar y ejecutar una estrategia de mejoramiento de la imagen institucional.',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity100 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective21,
                    'product_id' =>$idobjectiveproduct101,
                    'name' => 'Meta 4.5.3. Formular e implementar una  estrategia institucional para la gestión documental de la entidad. ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity101 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective21,
                    'product_id' =>$idobjectiveproduct102,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity102 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective22,
                    'product_id' =>$idobjectiveproduct103,
                    'name' => 'Meta 4.6.1. Ajustar y aplicar  los Estándares del Sistema Integrado de Gestión de calidad. ',
                    'goal_1' => 12,
                    'goal_2' => 12,
                    'goal_3' => 12,
                    'goal_4' => 12,
                    'goal' => 48,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity103 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective22,
                    'product_id' =>$idobjectiveproduct104,
                    'name' => 'Meta 4.6.2. Ajustar y ejecutar el Plan de Desarrollo Administrativo.',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity104 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective22,
                    'product_id' =>$idobjectiveproduct105,
                    'name' => 'Meta 4.6.3. Fortalecer la aplicación de  la Política de Gobierno en Línea.',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity105 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective22,
                    'product_id' =>$idobjectiveproduct106,
                    'name' => 'Meta 4.6.4. Mejorar y mantener la infraestructura tecnológica de la entidad. ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity106 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective22,
                    'product_id' =>$idobjectiveproduct107,
                    'name' => 'Meta 4.6.5. Diseñar y Ejecutar un programa anual para  la adecuación de la infraestructura  física de la entidad.',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 19,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity107 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective22,
                    'product_id' =>$idobjectiveproduct108,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity108 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective23,
                    'product_id' =>$idobjectiveproduct109,
                    'name' => 'Meta 4.7.1. Diseñar y ejecutar la  estrategia de gestión de ingresos. ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity109 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective23,
                    'product_id' =>$idobjectiveproduct110,
                    'name' => 'Meta 4.7.2. Fortalecer los procedimientos financieros de Tasa Retributiva y Tasa por utilización de agua. ',
                    'goal_1' => 2,
                    'goal_2' => 2,
                    'goal_3' => 2,
                    'goal_4' => 2,
                    'goal' => 8,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity110 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective23,
                    'product_id' =>$idobjectiveproduct111,
                    'name' => 'Meta 4.7.3. Fortalecer el Fondo de Compensación Ambiental.',
                    'goal_1' => 12,
                    'goal_2' => 12,
                    'goal_3' => 12,
                    'goal_4' => 12,
                    'goal' => 48,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity111 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective23,
                    'product_id' =>$idobjectiveproduct112,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity112 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective24,
                    'product_id' =>$idobjectiveproduct113,
                    'name' => 'Meta 4.8.1. Asesorar y prestar apoyo  jurídico a los diferentes procesos misionales de la entidad.',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity113 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective24,
                    'product_id' =>$idobjectiveproduct114,
                    'name' => 'Meta 4.8.2. Ejercer la autoridad ambiental, desde el proceso sancionatorio ambiental, ',
                    'goal_1' => 80,
                    'goal_2' => 80,
                    'goal_3' => 80,
                    'goal_4' => 80,
                    'goal' => 320,
                    'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity114 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective24,
                    'product_id' =>$idobjectiveproduct115,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity115 = DB::getPdo()->lastInsertId();


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity2,
						'year' =>1,
						'value' => 10,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia2 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia4 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity5,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia5 = DB::getPdo()->lastInsertId(); 

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
						'value' => 0.9,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia8 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity9,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia9 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia10 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity11,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia11 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity12,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia12 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity13,
						'year' =>1,
						'value' => 10,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia13 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity14,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia14 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity15,
						'year' =>1,
						'value' => 100,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia15 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity16,
						'year' =>1,
						'value' => 100,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia16 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity17,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia17 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity18,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia18 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity19,
						'year' =>1,
						'value' => 100,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia19 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity20,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia20 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia21 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity22,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia22 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity23,
						'year' =>1,
						'value' => 100,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia23 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>1,
						'value' => 2,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia25 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity27,
						'year' =>1,
						'value' => 12,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia27 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity29,
						'year' =>1,
						'value' => 13,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia29 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity31,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia31 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>1,
						'value' => 60,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia33 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity34,
						'year' =>1,
						'value' => 100,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia34 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity35,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia35 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity36,
						'year' =>1,
						'value' => 5,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia36 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia38 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity39,
						'year' =>1,
						'value' => 100,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia39 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity40,
						'year' =>1,
						'value' => 100,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia40 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity41,
						'year' =>1,
						'value' => 25,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia41 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia42 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity43,
						'year' =>1,
						'value' => 100,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia43 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>1,
						'value' => 100,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia44 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity45,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia45 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia46 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity47,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia47 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity48,
						'year' =>1,
						'value' => 13,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia48 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>1,
						'value' => 12,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia49 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity50,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia50 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity53,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia53 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia55 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia57 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity58,
						'year' =>1,
						'value' => 100,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia58 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia59 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity60,
						'year' =>1,
						'value' => 1,
						'description' => '',
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
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia62 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity63,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia63 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity64,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia64 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity66,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia66 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity67,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia67 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity68,
						'year' =>1,
						'value' => 100,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia68 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity69,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia69 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity70,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia70 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity71,
						'year' =>1,
						'value' => 11,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia71 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>1,
						'value' => 13,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia72 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity73,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia73 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity75,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia75 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity76,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia76 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity77,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia77 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity79,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia79 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity80,
						'year' =>1,
						'value' => 3,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia80 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity81,
						'year' =>1,
						'value' => 3,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia81 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity82,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia82 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity83,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia83 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity84,
						'year' =>1,
						'value' => 13,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia84 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity85,
						'year' =>1,
						'value' => 12,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia85 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity86,
						'year' =>1,
						'value' => 5,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia86 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity87,
						'year' =>1,
						'value' => 1,
						'description' => '',
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
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia89 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity92,
						'year' =>1,
						'value' => 1,
						'description' => '',
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
						'value' => 12,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia94 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity96,
						'year' =>1,
						'value' => 4,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia96 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity97,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia97 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity98,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia98 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity99,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia99 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity100,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia100 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity101,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia101 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity102,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia102 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity103,
						'year' =>1,
						'value' => 12,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia103 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity104,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia104 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity105,
						'year' =>1,
						'value' => 100,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia105 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity106,
						'year' =>1,
						'value' => 1,
						'description' => '',
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
						'activity_id' => $idactivity108,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia108 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity109,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia109 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity110,
						'year' =>1,
						'value' => 2,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia110 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity111,
						'year' =>1,
						'value' => 12,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia111 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity112,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia112 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity113,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia113 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity114,
						'year' =>1,
						'value' => 80,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia114 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity115,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia115 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity1,
						'year' =>2,
						'value' => 30,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia116 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity2,
						'year' =>2,
						'value' => 90,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia117 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia119 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity5,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia120 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity6,
						'year' =>2,
						'value' => 10,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia121 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity7,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia122 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity8,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia123 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity9,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia124 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia125 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity11,
						'year' =>2,
						'value' => 0.986,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia126 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity12,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia127 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity13,
						'year' =>2,
						'value' => 50,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia128 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity14,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia129 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity15,
						'year' =>2,
						'value' => 100,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia130 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity16,
						'year' =>2,
						'value' => 100,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia131 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity17,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia132 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity18,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia133 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity19,
						'year' =>2,
						'value' => 100,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia134 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity20,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia135 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia136 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity22,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia137 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity23,
						'year' =>2,
						'value' => 100,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia138 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity24,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia139 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>2,
						'value' => 2,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia140 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity27,
						'year' =>2,
						'value' => 12,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia142 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity28,
						'year' =>2,
						'value' => 2,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia143 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity29,
						'year' =>2,
						'value' => 13,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia144 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity31,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia146 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity32,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia147 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>2,
						'value' => 148.5,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia148 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity34,
						'year' =>2,
						'value' => 100,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia149 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity35,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia150 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity36,
						'year' =>2,
						'value' => 5,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia151 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity37,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia152 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia153 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity39,
						'year' =>2,
						'value' => 100,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia154 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity40,
						'year' =>2,
						'value' => 100,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia155 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity41,
						'year' =>2,
						'value' => 25,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia156 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>2,
						'value' => 2,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia157 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity43,
						'year' =>2,
						'value' => 100,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia158 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>2,
						'value' => 100,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia159 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity45,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia160 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia161 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity47,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia162 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity48,
						'year' =>2,
						'value' => 13,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia163 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>2,
						'value' => 12,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia164 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity50,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia165 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity51,
						'year' =>2,
						'value' => 0.4,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia166 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity53,
						'year' =>2,
						'value' => 0.4,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia168 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>2,
						'value' => 0.4,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia170 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity56,
						'year' =>2,
						'value' => 0.4,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia171 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia172 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity58,
						'year' =>2,
						'value' => 95,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia173 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia174 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity60,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia175 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity61,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia176 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity62,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia177 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity63,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia178 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity64,
						'year' =>2,
						'value' => 0.8,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia179 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity65,
						'year' =>2,
						'value' => 0.8,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia180 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity66,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia181 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity67,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia182 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity68,
						'year' =>2,
						'value' => 100,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia183 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity69,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia184 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity70,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia185 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity71,
						'year' =>2,
						'value' => 11,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia186 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>2,
						'value' => 13,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia187 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity73,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia188 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity74,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia189 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity75,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia190 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity76,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia191 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity77,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia192 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity79,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia194 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity80,
						'year' =>2,
						'value' => 5,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia195 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity81,
						'year' =>2,
						'value' => 5,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia196 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity82,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia197 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity83,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia198 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity84,
						'year' =>2,
						'value' => 13,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia199 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity85,
						'year' =>2,
						'value' => 12,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia200 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity86,
						'year' =>2,
						'value' => 5,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia201 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity87,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia202 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity88,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia203 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity89,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia204 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity90,
						'year' =>2,
						'value' => 20,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia205 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity92,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia207 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity93,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia208 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity94,
						'year' =>2,
						'value' => 12,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia209 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity96,
						'year' =>2,
						'value' => 4,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia211 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity97,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia212 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity98,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia213 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity99,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia214 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity100,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia215 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity101,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia216 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity102,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia217 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity103,
						'year' =>2,
						'value' => 12,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia218 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity104,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia219 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity105,
						'year' =>2,
						'value' => 100,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia220 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity106,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia221 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity107,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia222 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity108,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia223 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity109,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia224 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity110,
						'year' =>2,
						'value' => 2,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia225 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity111,
						'year' =>2,
						'value' => 12,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia226 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity112,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia227 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity113,
						'year' =>2,
						'value' => 0.9,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia228 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity114,
						'year' =>2,
						'value' => 80,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia229 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity115,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia230 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity1,
						'year' =>3,
						'value' => 16,
						'description' => 'El sistema de acuíferos que se encuentra en el departamento del Quindío, es compartido con los departamentos del Valle del Cauca y Risaralda, y se encuentra contemplado en el Plan de Ordenación y Manejo de la cuenca hidrográfica del río La Vieja. Teniendo en cuenta lo anterior la formulación de las medidas de manejo ambiental del sistema de acuífero localizado en el abanico Quindío-Risaralda debe ser realizada por las tres autoridades ambientales CRQ, CARDER Y CVC.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia231 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia233 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia234 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity5,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia235 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity6,
						'year' =>3,
						'value' => 45,
						'description' => 'El sistema de acuíferos que se encuentra en el departamento del Quindío, es compartido con los departamentos del Valle del Cauca y Risaralda, y se encuentra contemplado en el Plan de Ordenación y Manejo de la cuenca hidrográfica del río La Vieja. Teniendo en cuenta lo anterior la formulación de las medidas de manejo ambiental del sistema de acuífero localizado en el abanico Quindío-Risaralda debe ser realizada por las tres autoridades ambientales CRQ, CARDER Y CVC.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia236 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity7,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia237 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity8,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia238 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity9,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia239 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia240 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity11,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia241 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity12,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia242 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity13,
						'year' =>3,
						'value' => 10,
						'description' => 'No se habia podido ejecuturar, toda vez que no se encontraban aprobados los PSMV de los Municipios del Departamento, sin embaro teniendo en cuenta los resultados de las mesas de trabajo realizadas entre la CRQ y el PDA, se suscribió acta de concertación No 2 del 27 de noviembre de 2018 de las obras e inversiónes, a fin de realizar ajustes a los proyectos de acuerdo con la fuente de financiación e incorporar proyectos que se recibirán próximamente de la etapa de consultoría y que acogerán la priorización de proyectos establecidos en el Plan Ambiental del Programa Agua y Saneamiento para la Prosperidad – Plan Departamental para el manejo empresarial de los servicios de agua y saneamiento PAP-PDA Quindío, como son los relacionados con los municipios de Salento, Finlandia y Circasia.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia243 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity14,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia244 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity15,
						'year' =>3,
						'value' => 100,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia245 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity16,
						'year' =>3,
						'value' => 100,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia246 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity17,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia247 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity18,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia248 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity19,
						'year' =>3,
						'value' => 100,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia249 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity20,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia250 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia251 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity22,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia252 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity23,
						'year' =>3,
						'value' => 100,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia253 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>3,
						'value' => 4,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia255 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity26,
						'year' =>3,
						'value' => 1,
						'description' => 'Teniendo en cuenta que la Ley de Paramos (Ley 1930 de 27 de Julio de 2018) estableció en el parágrafo 2 del articulo 6  respecto a lo Planes de manejo ambiental de los páramos, que estos deberán elaborar, adoptar e implementar los Planes de Manejo Ambiental de los páramos que se encuentran bajo su jurisdicción de conformidad con los lineamientos del Ministerio de Ambiente y Desarrollo Sostenible, los cuales tiene un término de un año contado a partir de la expedición de la presente ley para su expedición. Razón por la cual no se ha podido realizar la formulación de los Planes',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia256 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity27,
						'year' =>3,
						'value' => 12,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia257 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity28,
						'year' =>3,
						'value' => 1,
						'description' => 'La entidad formuló el proyecto denominado “EJECUCIÓN DE ACCIONES DE PLANIFICACIÓN, MANEJO Y RESTAURACIÓN EN ÁREAS AMBIENTALMENTE ESTRATÉGICAS”, por un valor de $400.000.000. El tenia Dos (2) Componentes: I. Formular el Plan de Manejo Ambiental del Páramo Chili – Barragán, delimitado por el Ministerio de Ambiente y Desarrollo Sostenible y II. Adelantar acciones de conservación de ecosistemas de humedales para asegurar su sostenibilidad, sin emabrgo este no pudo llevarse a cambo toda vez que el componente 1 depende de la entrega de los lineamientos por parte del MADS ',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia258 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity29,
						'year' =>3,
						'value' => 13,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia259 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity31,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia261 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity32,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia262 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>3,
						'value' => 250,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia263 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity34,
						'year' =>3,
						'value' => 100,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia264 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity35,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia265 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity36,
						'year' =>3,
						'value' => 5,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia266 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity37,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia267 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia268 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity39,
						'year' =>3,
						'value' => 100,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia269 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity40,
						'year' =>3,
						'value' => 100,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia270 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity41,
						'year' =>3,
						'value' => 25,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia271 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>3,
						'value' => 2,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia272 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity43,
						'year' =>3,
						'value' => 100,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia273 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>3,
						'value' => 100,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia274 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity45,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia275 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia276 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity47,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia277 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity48,
						'year' =>3,
						'value' => 13,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia278 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>3,
						'value' => 12,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia279 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity50,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia280 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity51,
						'year' =>3,
						'value' => 1,
						'description' => 'Para el cumplimiento de esta metas la Corporación Autónoma Regional del Quindío, realizó un estudio para la realización del inventario de fuentes móviles y Realización de un inventario de fuentes fijas. En el proceso se revisaron las propuestas de la universidad del javeriana de Cali, universidad pontificia de Medellín y de la universidad del Quindío; como resultado de lo anterior se propuso realizar un convenio con la primera de ellas, pero desafortunadamente de conformidad con los lineamientos establecidos por Colombia Compra Eficiente, este tipo de contratación debe realizarse a través de la plataforma SECOP II, haciendo imposible que se contratara durante la vigencia 2018.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia281 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity53,
						'year' =>3,
						'value' => 1,
						'description' => 'Sin embargo, pese a lo anterior, el cumplimiento pleno de la meta se vio afectado, toda vez que una de las dos estaciones totales de monitoreo con que cuenta la Corporación y en donde se realizan operaciones de monitoreo, correspondiente a la ubicada Terminal de Transportes de Armenia sufrió un afectaciones y daños a causa de un accidente ocasionado por uno de los buses, lo que ocasiono que no pudiese operar todo el año y por consiguiente limitando la operatividad plena de la red de monitoreo.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia283 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity54,
						'year' =>3,
						'value' => 2,
						'description' => 'Para el cumplimiento de esta metas la Corporación Autónoma Regional del Quindío, realizó un estudio para la realización del inventario de fuentes móviles y Realización de un inventario de fuentes fijas. En el proceso se revisaron las propuestas de la universidad del javeriana de Cali, universidad pontificia de Medellín y de la universidad del Quindío; como resultado de lo anterior se propuso realizar un convenio con la primera de ellas, pero desafortunadamente de conformidad con los lineamientos establecidos por Colombia Compra Eficiente, este tipo de contratación debe realizarse a través de la plataforma SECOP II, haciendo imposible que se contratara durante la vigencia 2018.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia284 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>3,
						'value' => 1,
						'description' => 'Para el cumplimiento de esta metas la Corporación Autónoma Regional del Quindío, realizó un estudio para la realización del inventario de fuentes móviles y Realización de un inventario de fuentes fijas. En el proceso se revisaron las propuestas de la universidad del javeriana de Cali, universidad pontificia de Medellín y de la universidad del Quindío; como resultado de lo anterior se propuso realizar un convenio con la primera de ellas, pero desafortunadamente de conformidad con los lineamientos establecidos por Colombia Compra Eficiente, este tipo de contratación debe realizarse a través de la plataforma SECOP II, haciendo imposible que se contratara durante la vigencia 2018.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia285 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia287 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity58,
						'year' =>3,
						'value' => 100,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia288 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia289 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity60,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia290 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity61,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia291 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity62,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia292 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity63,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia293 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity64,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia294 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity65,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia295 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity66,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia296 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity67,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia297 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity68,
						'year' =>3,
						'value' => 100,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia298 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity69,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia299 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity70,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia300 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity71,
						'year' =>3,
						'value' => 11,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia301 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>3,
						'value' => 13,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia302 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity73,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia303 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity74,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia304 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity75,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia305 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity76,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia306 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity77,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia307 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity78,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia308 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity79,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia309 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity80,
						'year' =>3,
						'value' => 5,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia310 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity81,
						'year' =>3,
						'value' => 5,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia311 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity82,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia312 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity83,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia313 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity84,
						'year' =>3,
						'value' => 13,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia314 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity85,
						'year' =>3,
						'value' => 12,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia315 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity86,
						'year' =>3,
						'value' => 5,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia316 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity87,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia317 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity88,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia318 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity89,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia319 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity90,
						'year' =>3,
						'value' => 80,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia320 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity91,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia321 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity92,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia322 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity93,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia323 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity94,
						'year' =>3,
						'value' => 12,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia324 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity96,
						'year' =>3,
						'value' => 4,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia326 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity97,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia327 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity98,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia328 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity99,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia329 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity100,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia330 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity101,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia331 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity102,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia332 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity103,
						'year' =>3,
						'value' => 12,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia333 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity104,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia334 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity105,
						'year' =>3,
						'value' => 100,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia335 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity106,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia336 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity107,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia337 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity108,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia338 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity109,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia339 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity110,
						'year' =>3,
						'value' => 2,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia340 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity111,
						'year' =>3,
						'value' => 12,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia341 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity112,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia342 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity113,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia343 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity114,
						'year' =>3,
						'value' => 80,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia344 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity115,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia345 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity1,
						'year' =>4,
						'value' => 50,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia346 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia348 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>4,
						'value' => 0.95,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia349 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity5,
						'year' =>4,
						'value' => 0.98,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia350 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity7,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia352 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity8,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia353 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity9,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia354 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia355 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity11,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia356 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity12,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia357 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity14,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia359 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity15,
						'year' =>4,
						'value' => 100,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia360 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity16,
						'year' =>4,
						'value' => 100,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia361 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity17,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia362 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity18,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia363 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity19,
						'year' =>4,
						'value' => 100,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia364 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity20,
						'year' =>4,
						'value' => 0.94,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia365 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia366 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity22,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia367 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity23,
						'year' =>4,
						'value' => 100,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia368 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>4,
						'value' => 2.8,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia370 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity26,
						'year' =>4,
						'value' => 0.88,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia371 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity27,
						'year' =>4,
						'value' => 12,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia372 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity28,
						'year' =>4,
						'value' => 1.5,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia373 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity29,
						'year' =>4,
						'value' => 13,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia374 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity30,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia375 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity31,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia376 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity32,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia377 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>4,
						'value' => 100,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia378 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity34,
						'year' =>4,
						'value' => 100,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia379 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity35,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia380 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity36,
						'year' =>4,
						'value' => 5,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia381 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity37,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia382 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia383 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity39,
						'year' =>4,
						'value' => 100,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia384 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity40,
						'year' =>4,
						'value' => 100,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia385 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity41,
						'year' =>4,
						'value' => 23.28,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia386 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>4,
						'value' => 2,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia387 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity43,
						'year' =>4,
						'value' => 100,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia388 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>4,
						'value' => 100,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia389 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity45,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia390 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia391 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity47,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia392 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity48,
						'year' =>4,
						'value' => 13,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia393 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>4,
						'value' => 12,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia394 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity50,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia395 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity51,
						'year' =>4,
						'value' => 0.8,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia396 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity52,
						'year' =>4,
						'value' => 0.8,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia397 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity53,
						'year' =>4,
						'value' => 0.7,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia398 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia400 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity56,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia401 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia402 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity58,
						'year' =>4,
						'value' => 100,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia403 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia404 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity60,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia405 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity61,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia406 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity62,
						'year' =>4,
						'value' => 0.9,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia407 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity63,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia408 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity64,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia409 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity65,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia410 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity66,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia411 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity67,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia412 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity68,
						'year' =>4,
						'value' => 100,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia413 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity69,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia414 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity70,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia415 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity71,
						'year' =>4,
						'value' => 11,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia416 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>4,
						'value' => 13,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia417 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity73,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia418 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity74,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia419 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity75,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia420 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity76,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia421 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity77,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia422 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity79,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia424 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity80,
						'year' =>4,
						'value' => 5,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia425 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity81,
						'year' =>4,
						'value' => 5,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia426 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity82,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia427 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity83,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia428 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity84,
						'year' =>4,
						'value' => 13,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia429 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity85,
						'year' =>4,
						'value' => 12,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia430 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity86,
						'year' =>4,
						'value' => 5,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia431 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity87,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia432 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity88,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia433 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity89,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia434 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity92,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia437 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity93,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia438 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity94,
						'year' =>4,
						'value' => 12,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia439 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity95,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia440 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity96,
						'year' =>4,
						'value' => 4,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia441 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity97,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia442 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity98,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia443 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity99,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia444 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity100,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia445 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity101,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia446 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity102,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia447 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity103,
						'year' =>4,
						'value' => 12,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia448 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity104,
						'year' =>4,
						'value' => 0.95,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia449 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity105,
						'year' =>4,
						'value' => 85,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia450 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity106,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia451 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity107,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia452 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity108,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia453 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity109,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia454 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity110,
						'year' =>4,
						'value' => 2,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia455 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity111,
						'year' =>4,
						'value' => 12,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia456 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity112,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia457 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity113,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia458 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity114,
						'year' =>4,
						'value' => 80,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia459 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity115,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia460 = DB::getPdo()->lastInsertId(); 
					
					DB::table('financing_sources')->insert([
						'father_id' => 11,
						'code' => '1.1.1.1.1.1.1.1',
						'name' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
						'description' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 31,
						]);
						$idFuente1 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 14,
						'code' => '1.1.1.1.1.1.2.1',
						'name' => 'Participación del porcentaje ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
						'description' => 'Participación del porcentaje ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 31,
						]);
						$idFuente3 = DB::getPdo()->lastInsertId();
						

					 DB::table('financing_sources')->insert([
						'father_id' => 90,
						'code' => '1.1.2.4.2.3',
						'name' => 'Venta de bienes y servicios',
						'description' => 'Venta de bienes y servicios',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 31,
						]);
						$idFuente4 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 58,
						'code' => '1.1.2.2.2.1.1',
						'name' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
						'description' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 31,
						]);
						$idFuente5 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 208,
						'code' => '1.2.5.1.3',
						'name' => 'Otros Convenios',
						'description' => 'Otros Convenios',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 31,
						]);
						$idFuente6 = DB::getPdo()->lastInsertId();
					
					DB::table('financing_sources')->insert([
						'father_id' => 1,
						'code' => '1.3',
						'name' => 'Otros Aportes de Otras Entidades',
						'description' => 'Otros Aportes de Otras Entidades',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 31,
						]);
						$idFuente7 = DB::getPdo()->lastInsertId();
						
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 42,
						'code' => '1.1.2.2.1.1.1.1',
						'name' => 'Tasa retributiva (vigencia actual)',
						'description' => 'Tasa retributiva (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 31,
						]);
						$idFuente9 = DB::getPdo()->lastInsertId();

					DB::table('financing_sources')->insert([
						'father_id' => 54,
						'code' => '1.1.2.2.1.1.5.1',
						'name' => 'Otras tasas (vigencia actual)',
						'description' => 'Otras tasas (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 31,
						]);
						$idFuente10 = DB::getPdo()->lastInsertId();
						
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 45,
						'code' => '1.1.2.2.1.1.2.1',
						'name' => 'Tasa por el uso del agua (vigencia actual)',
						'description' => 'Tasa por el uso del agua (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 31,
						]);
						$idFuente11 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 48,
						'code' => '1.1.2.2.1.1.3.1',
						'name' => 'Tasa de aprovechamiento Forestal (vigencia actual)',
						'description' => 'Tasa de aprovechamiento Forestal (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 31,
						]);
						$idFuente12 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 54,
						'code' => '1.1.2.2.1.1.5.1',
						'name' => 'Otras tasas (vigencia actual)',
						'description' => 'Otras tasas (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 31,
						]);
						$idFuente13 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 84,
						'code' => '1.1.2.3.1.1.1',
						'name' => 'Multas ambientales (vigencia actual)',
						'description' => 'Multas ambientales (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 31,
						]);
						$idFuente14 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 79,
						'code' => '1.1.2.2.2.8.1',
						'name' => 'Otros servicios (vigencia actual)',
						'description' => 'Otros servicios (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 31,
						]);
						$idFuente15 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 182,
						'code' => '1.2.3.4',
						'name' => 'Autorizado',
						'description' => 'Autorizado',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 31,
						]);
						$idFuente16 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 145,
						'code' => '1.2.2.6',
						'name' => 'Rendimientos financieros',
						'description' => 'Rendimientos financieros',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 31,
						]);
						$idFuente17 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 145,
						'code' => '1.2.2.7',
						'name' => 'Excedentes financieros',
						'description' => 'Excedentes financieros',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 31,
						]);
						$idFuente18 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 279,
						'code' => '1.2.7.3.3.5',
						'name' => 'Cancelación de reservas Otras tasas',
						'description' => 'Cancelación de reservas Otras tasas',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 31,
						]);
						$idFuente19 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 241,
						'code' => '1.2.6.3.5',
						'name' => 'Recuperación de cartera Otras tasas',
						'description' => 'Recuperación de cartera Otras tasas',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 31,
						]);
						$idFuente20 = DB::getPdo()->lastInsertId();
						 
					DB::table('financing_sources')->insert([
						'father_id' => 1,
						'code' => '1.4',
						'name' => 'Reintegro de recursos no apropiados',
						'description' => 'Reintegro de recursos no apropiados',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 31,
						]);
						$idFuente21 = DB::getPdo()->lastInsertId();

					 DB::table('financing_sources')->insert([
						'father_id' => 119,
						'code' => '1.1.2.5.1.1.1.4',
						'name' => 'Aportes de la Nación Funcionamiento',
						'description' => 'Aportes de la Nación Funcionamiento',
						'type_id' => 23,
						'final_level' => true,
						'group_id' => 31,
						]);
						$idFuente22 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 118,
						'code' => '1.1.2.5.1.1.2',
						'name' => 'Aportes de la Nación para Inversión',
						'description' => 'Aportes de la Nación para Inversión',
						'type_id' => 23,
						'final_level' => true,
						'group_id' => 31,
						]);
						$idFuente23 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente1,
						'value' => 8712008876,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 8712008876,
						'year' => 1,
						]);
						$idPlan1 = DB::getPdo()->lastInsertId();
						 
					 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente4,
						'value' => 2048800,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 2048800,
						'year' => 1,
						]);
            $idPlan4 = DB::getPdo()->lastInsertId();
            
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente7,
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
              $idPlan53 = DB::getPdo()->lastInsertId();
              
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente13,
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
                $idPlan59 = DB::getPdo()->lastInsertId();
                
              
            
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente5,
						'value' => 308089009,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 10,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 277280108.1,
						'debt_service' => 30808900.9,
						'fund' => 0,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan5 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente6,
						'value' => 925025000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 925025000,
						'year' => 1,
						]);
						$idPlan6 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente7,
						'value' => 4138285105,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 4138285105,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan7 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente9,
						'value' => 1700000000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 1700000000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan9 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente11,
						'value' => 230178311,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 10,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 207160479.9,
						'debt_service' => 23017831.1,
						'fund' => 0,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan11 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente12,
						'value' => 5911264.08,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 5911264.08,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan12 = DB::getPdo()->lastInsertId();
						 
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente14,
						'value' => 100000000,
						'functioning_percentage' => 33.1905,
						'debt_service_percentage' => 15.1732,
						'fund_percentage' => 0,
						'investment_percentage' => 51.6363,
						'functioning' => 33190500,
						'debt_service' => 15173200,
						'fund' => 0,
						'investment' => 51636300,
						'year' => 1,
						]);
						$idPlan14 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente15,
						'value' => 20000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 20000000,
						'year' => 1,
						]);
						$idPlan15 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente16,
						'value' => 2064483055,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 2064483055,
						'year' => 1,
						]);
						$idPlan16 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente17,
						'value' => 158000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 158000000,
						'year' => 1,
						]);
						$idPlan17 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente18,
						'value' => 2989148355.16,
						'functioning_percentage' => 15,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 85,
						'functioning' => 448372253.274,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 2540776101.886,
						'year' => 1,
						]);
						$idPlan18 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente19,
						'value' => 21641336,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 21641336,
						'year' => 1,
						]);
						$idPlan19 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente20,
						'value' => 5273913448.92,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 5273913448.92,
						'year' => 1,
						]);
						$idPlan20 = DB::getPdo()->lastInsertId();
						 
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente22,
						'value' => 4337651110,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 4337651110,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan22 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente23,
						'value' => 4545554678,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 4545554678,
						'year' => 1,
						]);
						$idPlan23 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente1,
						'value' => 11376678567.59,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 11376678567.59,
						'year' => 2,
						]);
						$idPlan24 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente5,
						'value' => 589445345.23,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 10,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 530500810.707,
						'debt_service' => 58944534.523,
						'fund' => 0,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan28 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente6,
						'value' => 288009644,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 10,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 259208679.6,
						'debt_service' => 28800964.4,
						'fund' => 0,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan29 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente7,
						'value' => 651798598,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 10,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 586618738.2,
						'debt_service' => 65179859.8,
						'fund' => 0,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan30 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente9,
						'value' => 778320346.89,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 10,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 700488312.201,
						'debt_service' => 77832034.689,
						'fund' => 0,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan32 = DB::getPdo()->lastInsertId();
						 
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente11,
						'value' => 230274788.59,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 10,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 207247309.731,
						'debt_service' => 23027478.859,
						'fund' => 0,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan34 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente12,
						'value' => 16028800.29,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 10,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 14425920.261,
						'debt_service' => 1602880.029,
						'fund' => 0,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan35 = DB::getPdo()->lastInsertId();
						 
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente14,
						'value' => 31237583.01,
						'functioning_percentage' => 30.766,
						'debt_service_percentage' => 47.988,
						'fund_percentage' => 0,
						'investment_percentage' => 21.246,
						'functioning' => 9610554.7888566,
						'debt_service' => 14990291.3348388,
						'fund' => 0,
						'investment' => 6636736.8863046,
						'year' => 2,
						]);
						$idPlan37 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente15,
						'value' => 121137213.06,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 100,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 0,
						'debt_service' => 121137213.06,
						'fund' => 0,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan38 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente16,
						'value' => 1492144456.26,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 1492144456.26,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan39 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente17,
						'value' => 316848109.44,
						'functioning_percentage' => 20,
						'debt_service_percentage' => 10,
						'fund_percentage' => 0,
						'investment_percentage' => 70,
						'functioning' => 63369621.888,
						'debt_service' => 31684810.944,
						'fund' => 0,
						'investment' => 221793676.608,
						'year' => 2,
						]);
						$idPlan40 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente18,
						'value' => 9605248955,
						'functioning_percentage' => 20,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 80,
						'functioning' => 1921049791,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 7684199164,
						'year' => 2,
						]);
						$idPlan41 = DB::getPdo()->lastInsertId();
						 
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente20,
						'value' => 2820157535,
						'functioning_percentage' => 45,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 55,
						'functioning' => 1269070890.75,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1551086644.25,
						'year' => 2,
						]);
						$idPlan43 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente22,
						'value' => 4396273000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 4396273000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan45 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente1,
						'value' => 9375611755,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 9375611755,
						'year' => 3,
						]);
						$idPlan47 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente5,
						'value' => 454878567,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 10,
						'fund_percentage' => 0,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 45487856.7,
						'fund' => 0,
						'investment' => 409390710.3,
						'year' => 3,
						]);
						$idPlan51 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente6,
						'value' => 105001398,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 10,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 94501258.2,
						'debt_service' => 10500139.8,
						'fund' => 0,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan52 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente9,
						'value' => 1941143402,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 10,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 1747029061.8,
						'debt_service' => 194114340.2,
						'fund' => 0,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan55 = DB::getPdo()->lastInsertId();
						 
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente11,
						'value' => 132835891,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 10,
						'fund_percentage' => 0,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 13283589.1,
						'fund' => 0,
						'investment' => 119552301.9,
						'year' => 3,
						]);
						$idPlan57 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente12,
						'value' => 15200000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 10,
						'fund_percentage' => 0,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 1520000,
						'fund' => 0,
						'investment' => 13680000,
						'year' => 3,
						]);
						$idPlan58 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente14,
						'value' => 461000000,
						'functioning_percentage' => 28.565,
						'debt_service_percentage' => 24.138,
						'fund_percentage' => 0,
						'investment_percentage' => 47.297,
						'functioning' => 131684650,
						'debt_service' => 111276180,
						'fund' => 0,
						'investment' => 218039170,
						'year' => 3,
						]);
						$idPlan60 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente15,
						'value' => 20000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 20000000,
						'year' => 3,
						]);
						$idPlan61 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente17,
						'value' => 172500000,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 10,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 155250000,
						'debt_service' => 17250000,
						'fund' => 0,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan63 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente18,
						'value' => 11074344131.71,
						'functioning_percentage' => 15,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 85,
						'functioning' => 1661151619.7565,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 9413192511.9535,
						'year' => 3,
						]);
						$idPlan64 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente20,
						'value' => 3631847450,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 3631847450,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan66 = DB::getPdo()->lastInsertId();
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente22,
						'value' => 4643483000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 4643483000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan68 = DB::getPdo()->lastInsertId();

						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente3,
						'value' => 11440074230,
						'functioning_percentage' => 10,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 90,
						'functioning' => 1144007423,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 10296066807,
						'year' => 4,
						]);
						$idPlan72 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente9,
						'value' => 2359000000,
						'functioning_percentage' => 80,
						'debt_service_percentage' => 20,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 1887200000,
						'debt_service' => 471800000,
						'fund' => 0,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan78 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente10,
						'value' => 2000000,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 10,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 1800000,
						'debt_service' => 200000,
						'fund' => 0,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan79 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente11,
						'value' => 290000000,
						'functioning_percentage' => 80,
						'debt_service_percentage' => 20,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 232000000,
						'debt_service' => 58000000,
						'fund' => 0,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan80 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente12,
						'value' => 8000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 10,
						'fund_percentage' => 0,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 800000,
						'fund' => 0,
						'investment' => 7200000,
						'year' => 4,
						]);
						$idPlan81 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente17,
						'value' => 679777903.79,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 10,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 611800113.411,
						'debt_service' => 67977790.379,
						'fund' => 0,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan86 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente18,
						'value' => 11462367966,
						'functioning_percentage' => 30,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 70,
						'functioning' => 3438710389.8,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 8023657576.2,
						'year' => 4,
						]);
						$idPlan87 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente21,
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
						$idPlan90 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente22,
						'value' => 4823752587,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 4823752587,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan91 = DB::getPdo()->lastInsertId();
						
						DB::table('financial_plans')->insert([
							'p_a_i_id' => $idpai1,
							'source_id' => $idFuente14,
							'value' => 588222096.21,
							'functioning_percentage' => 1.5735,
							'debt_service_percentage' => 26.101,
							'fund_percentage' => 0,
							'investment_percentage' => 72.3255,
							'functioning' => 9255674.68386435,
							'debt_service' => 153531849.331772,
							'fund' => 0,
							'investment' => 425434572.194364,
							'year' => 4,
							]);
							$idPlan93 = DB::getPdo()->lastInsertId();

						
					  DB::table('implementations')->insert([
						'p_a_i_s_id'=>$idpai1,
						]);
						$idImplementation1 = DB::getPdo()->lastInsertId();
						
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 8711435772.43,
						'financial_plans_id' => $idPlan1,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo1 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 2048800,
						'financial_plans_id' => $idPlan4,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo4 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 438636860.9,
						'financial_plans_id' => $idPlan5,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo5 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 422205000,
						'financial_plans_id' => $idPlan6,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo6 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 3467934403,
						'financial_plans_id' => $idPlan7,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo7 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 1841625971.26,
						'financial_plans_id' => $idPlan9,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo9 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 172236660.04,
						'financial_plans_id' => $idPlan11,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo11 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 5911264.08,
						'financial_plans_id' => $idPlan12,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo12 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 226569280.68,
						'financial_plans_id' => $idPlan14,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo14 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 46109008,
						'financial_plans_id' => $idPlan15,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo15 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 2109586673,
						'financial_plans_id' => $idPlan16,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo16 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 221537130.83,
						'financial_plans_id' => $idPlan17,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo17 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 2989148355.16,
						'financial_plans_id' => $idPlan18,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo18 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 21641336,
						'financial_plans_id' => $idPlan19,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo19 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 6507418891.64,
						'financial_plans_id' => $idPlan20,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo20 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 4062906666.21,
						'financial_plans_id' => $idPlan22,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo22 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 11376678567.59,
						'financial_plans_id' => $idPlan24,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo24 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 589445345.23,
						'financial_plans_id' => $idPlan28,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo28 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 494240544,
						'financial_plans_id' => $idPlan29,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo29 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 578149881.82,
						'financial_plans_id' => $idPlan30,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo30 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 778320346.89,
						'financial_plans_id' => $idPlan32,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo32 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 230274788.59,
						'financial_plans_id' => $idPlan34,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo34 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 16028800.29,
						'financial_plans_id' => $idPlan35,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo35 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 31237583.01,
						'financial_plans_id' => $idPlan37,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo37 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 121137213.06,
						'financial_plans_id' => $idPlan38,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo38 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 1485270073,
						'financial_plans_id' => $idPlan39,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo39 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 316848109.44,
						'financial_plans_id' => $idPlan40,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo40 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 9605248955,
						'financial_plans_id' => $idPlan41,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo41 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 2820157535,
						'financial_plans_id' => $idPlan43,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo43 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 4317428946.85,
						'financial_plans_id' => $idPlan45,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo45 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 10884788053.91,
						'financial_plans_id' => $idPlan47,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo47 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 453776399.18,
						'financial_plans_id' => $idPlan51,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo51 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 28909100,
						'financial_plans_id' => $idPlan52,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo52 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 1318574,
						'financial_plans_id' => $idPlan53,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo53 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 904919084.12,
						'financial_plans_id' => $idPlan55,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo55 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 192503257.51,
						'financial_plans_id' => $idPlan57,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo57 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 7335892.42,
						'financial_plans_id' => $idPlan58,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo58 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 1129336,
						'financial_plans_id' => $idPlan59,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo59 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 538380.28,
						'financial_plans_id' => $idPlan60,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo60 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 192257524.53,
						'financial_plans_id' => $idPlan61,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo61 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 244783575.75,
						'financial_plans_id' => $idPlan63,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo63 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 11074344131.71,
						'financial_plans_id' => $idPlan64,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo64 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 2742513844.19,
						'financial_plans_id' => $idPlan66,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo66 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 4583913182.99,
						'financial_plans_id' => $idPlan68,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo68 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 16168468747.89,
						'financial_plans_id' => $idPlan72,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo72 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 2200329268.52,
						'financial_plans_id' => $idPlan78,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo78 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 286382470.69,
						'financial_plans_id' => $idPlan80,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo80 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 7685376.46,
						'financial_plans_id' => $idPlan81,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo81 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 646379728.18,
						'financial_plans_id' => $idPlan86,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo86 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 11462367966,
						'financial_plans_id' => $idPlan87,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo87 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 142795187.27,
						'financial_plans_id' => $idPlan90,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo90 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 4769466859.27,
						'financial_plans_id' => $idPlan91,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo91 = DB::getPdo()->lastInsertId();
						
							DB::table('fundraisings')->insert([
							'date' => '2019-12-31',
							'value' => 271617613.06,
							'financial_plans_id' => $idPlan93,
							'implementation_id' => $idImplementation1,
							]);
							$idRecaudo93 = DB::getPdo()->lastInsertId();


						DB::table('cost_sources')->insert([
							'father_id' => 2,
							'code' => '2.1.1',
							'name' => 'GASTOS DE PERSONAL',
							'description' => 'GASTOS DE PERSONAL',
							'functioning' => TRUE,
							'compensation' => FALSE,
							'debt_service' => FALSE,
							'group_id' => 31,
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
							'group_id' => 31,
							]);
							$idFuenteGasto2 = DB::getPdo()->lastInsertId();
							
						DB::table('cost_sources')->insert([
						'father_id' => 2,
						'code' => '2.1.5',
						'name' => 'Mantenimiento',
						'description' => 'Mantenimiento',
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'group_id' => 31,
						]);
						$idFuenteGasto3 = DB::getPdo()->lastInsertId();
						
						DB::table('cost_sources')->insert([
							'father_id' => 16,
							'code' => '2.1.3.2.1.1',
							'name' => 'Mesadas pensionales (de pensiones)',
							'description' => 'Mesadas pensionales (de pensiones)',
							'functioning' => TRUE,
							'compensation' => FALSE,
							'debt_service' => FALSE,
							'group_id' => 31,
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
							'group_id' => 31,
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
							'group_id' => 31,
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
							'group_id' => 31,
							]);
							$idFuenteGasto4 = DB::getPdo()->lastInsertId();
							
							
						DB::table('cost_sources')->insert([
							'father_id' => 36,
							'code' => '2.2.1.1',
							'name' => 'Servicios de la deuda pública externa',
							'description' => 'Servicios de la deuda pública externa',
							'functioning' => FALSE,
							'compensation' => FALSE,
							'debt_service' => TRUE,
							'group_id' => 31,
							]);
							$idFuenteGasto8 = DB::getPdo()->lastInsertId();
							
							
							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 3704513366.55,
								'value_comitted' => 3586392070,
								'value_paid' => 3586392070,
								'own' => TRUE,
								'nation' => FALSE,
								'royalties' => FALSE,
								'funds' => FALSE,
								'functioning' => TRUE,
								'compensation' => FALSE,
								'debt_service' => FALSE,
								'cost_sources_id' => $idFuenteGasto1,
								'p_a_i_id' => $idpai1,
								'group_id' => 31,
								]);
								$idGasto1 = DB::getPdo()->lastInsertId();
								
								
							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 2789477153.09,
								'value_comitted' => 2526926973.09,
								'value_paid' => 2505674034.09,
								'own' => TRUE,
								'nation' => FALSE,
								'royalties' => FALSE,
								'funds' => FALSE,
								'functioning' => TRUE,
								'compensation' => FALSE,
								'debt_service' => FALSE,
								'cost_sources_id' => $idFuenteGasto2,
								'p_a_i_id' => $idpai1,
								'group_id' => 31,
								]);
								$idGasto2 = DB::getPdo()->lastInsertId();
								
								
							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 258518139.36,
								'value_comitted' => 258518139.36,
								'value_paid' => 258518139.36,
								'own' => TRUE,
								'nation' => FALSE,
								'royalties' => FALSE,
								'funds' => FALSE,
								'functioning' => TRUE,
								'compensation' => FALSE,
								'debt_service' => FALSE,
								'cost_sources_id' => $idFuenteGasto4,
								'p_a_i_id' => $idpai1,
								'group_id' => 31,
								]);
								$idGasto3 = DB::getPdo()->lastInsertId();
								
								
							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 19691104,
								'value_comitted' => 19691104,
								'value_paid' => 19691104,
								'own' => TRUE,
								'nation' => FALSE,
								'royalties' => FALSE,
								'funds' => FALSE,
								'functioning' => TRUE,
								'compensation' => FALSE,
								'debt_service' => FALSE,
								'cost_sources_id' => $idFuenteGasto5,
								'p_a_i_id' => $idpai1,
								'group_id' => 31,
								]);
								$idGasto4 = DB::getPdo()->lastInsertId();
								
								
							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 8859445,
								'value_comitted' => 8680373,
								'value_paid' => 8680373,
								'own' => TRUE,
								'nation' => FALSE,
								'royalties' => FALSE,
								'funds' => FALSE,
								'functioning' => TRUE,
								'compensation' => FALSE,
								'debt_service' => FALSE,
								'cost_sources_id' => $idFuenteGasto6,
								'p_a_i_id' => $idpai1,
								'group_id' => 31,
								]);
								$idGasto5 = DB::getPdo()->lastInsertId();
								
								
							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 11660711,
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
								'group_id' => 31,
								]);
								$idGasto6 = DB::getPdo()->lastInsertId();
								
								
							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 69000000,
								'value_comitted' => 60184366,
								'value_paid' => 60184366,
								'own' => TRUE,
								'nation' => FALSE,
								'royalties' => FALSE,
								'funds' => FALSE,
								'functioning' => FALSE,
								'compensation' => FALSE,
								'debt_service' => TRUE,
								'cost_sources_id' => $idFuenteGasto8,
								'p_a_i_id' => $idpai1,
								'group_id' => 31,
								]);
								$idGasto7 = DB::getPdo()->lastInsertId();
								
								
								DB::table('financial_costs')->insert([
									'year' => 1,
									'value_bugeted' => 3682737000,
									'value_comitted' => 3661641039,
									'value_paid' => 3661641039,
									'own' => FALSE,
									'nation' => TRUE,
									'royalties' => FALSE,
									'funds' => FALSE,
									'functioning' => TRUE,
									'compensation' => FALSE,
									'debt_service' => FALSE,
									'cost_sources_id' => $idFuenteGasto1,
									'p_a_i_id' => $idpai1,
									'group_id' => 31,
									]);
									$idGasto8 = DB::getPdo()->lastInsertId();
									
									
								DB::table('financial_costs')->insert([
									'year' => 1,
									'value_bugeted' => 251097110,
									'value_comitted' => 153995704.61,
									'value_paid' => 153995704.61,
									'own' => FALSE,
									'nation' => TRUE,
									'royalties' => FALSE,
									'funds' => FALSE,
									'functioning' => TRUE,
									'compensation' => FALSE,
									'debt_service' => FALSE,
									'cost_sources_id' => $idFuenteGasto2,
									'p_a_i_id' => $idpai1,
									'group_id' => 31,
									]);
									$idGasto9 = DB::getPdo()->lastInsertId();
									
								DB::table('financial_costs')->insert([
									'year' => 1,
									'value_bugeted' => 2657000,
									'value_comitted' => 0,
									'value_paid' => 0,
									'own' => FALSE,
									'nation' => TRUE,
									'royalties' => FALSE,
									'funds' => FALSE,
									'functioning' => TRUE,
									'compensation' => FALSE,
									'debt_service' => FALSE,
									'cost_sources_id' => $idFuenteGasto4,
									'p_a_i_id' => $idpai1,
									'group_id' => 31,
									]);
									$idGasto10 = DB::getPdo()->lastInsertId();
									
									
								DB::table('financial_costs')->insert([
									'year' => 1,
									'value_bugeted' => 10341000,
									'value_comitted' => 10341000,
									'value_paid' => 10341000,
									'own' => FALSE,
									'nation' => TRUE,
									'royalties' => FALSE,
									'funds' => FALSE,
									'functioning' => TRUE,
									'compensation' => FALSE,
									'debt_service' => FALSE,
									'cost_sources_id' => $idFuenteGasto5,
									'p_a_i_id' => $idpai1,
									'group_id' => 31,
									]);
									$idGasto11 = DB::getPdo()->lastInsertId();
									
									
								DB::table('financial_costs')->insert([
									'year' => 1,
									'value_bugeted' => 390819000,
									'value_comitted' => 235549858,
									'value_paid' => 233720521.68,
									'own' => FALSE,
									'nation' => TRUE,
									'royalties' => FALSE,
									'funds' => FALSE,
									'functioning' => TRUE,
									'compensation' => FALSE,
									'debt_service' => FALSE,
									'cost_sources_id' => $idFuenteGasto6,
									'p_a_i_id' => $idpai1,
									'group_id' => 31,
									]);
									$idGasto12 = DB::getPdo()->lastInsertId();
									
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 3800279787.2,
										'value_comitted' => 3406216845.55,
										'value_paid' => 3406216845.55,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto1,
										'p_a_i_id' => $idpai1,
										'group_id' => 31,
										]);
										$idGasto13 = DB::getPdo()->lastInsertId();
										
										
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 2932028500.8,
										'value_comitted' => 2679747566.03,
										'value_paid' => 2675330761.03,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto2,
										'p_a_i_id' => $idpai1,
										'group_id' => 31,
										]);
										$idGasto14 = DB::getPdo()->lastInsertId();
										
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 254316915,
										'value_comitted' => 254262567,
										'value_paid' => 254262567,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto4,
										'p_a_i_id' => $idpai1,
										'group_id' => 31,
										]);
										$idGasto15 = DB::getPdo()->lastInsertId();
										
										
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 20775510,
										'value_comitted' => 20775510,
										'value_paid' => 20775510,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto5,
										'p_a_i_id' => $idpai1,
										'group_id' => 31,
										]);
										$idGasto16 = DB::getPdo()->lastInsertId();
										
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 23671243,
										'value_comitted' => 1378908,
										'value_paid' => 1378908,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto7,
										'p_a_i_id' => $idpai1,
										'group_id' => 31,
										]);
										$idGasto17 = DB::getPdo()->lastInsertId();
										
										
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 423200000,
										'value_comitted' => 337616978,
										'value_paid' => 337616978,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => FALSE,
										'compensation' => FALSE,
										'debt_service' => TRUE,
										'cost_sources_id' => $idFuenteGasto8,
										'p_a_i_id' => $idpai1,
										'group_id' => 31,
										]);
										$idGasto18 = DB::getPdo()->lastInsertId();
										
										
										DB::table('financial_costs')->insert([
											'year' => 2,
											'value_bugeted' => 3888717000,
											'value_comitted' => 3881976638,
											'value_paid' => 3881976638,
											'own' => FALSE,
											'nation' => TRUE,
											'royalties' => FALSE,
											'funds' => FALSE,
											'functioning' => TRUE,
											'compensation' => FALSE,
											'debt_service' => FALSE,
											'cost_sources_id' => $idFuenteGasto1,
											'p_a_i_id' => $idpai1,
											'group_id' => 31,
											]);
											$idGasto19 = DB::getPdo()->lastInsertId();
											
											
										DB::table('financial_costs')->insert([
											'year' => 2,
											'value_bugeted' => 238542000,
											'value_comitted' => 184990509.39,
											'value_paid' => 184990509.39,
											'own' => FALSE,
											'nation' => TRUE,
											'royalties' => FALSE,
											'funds' => FALSE,
											'functioning' => TRUE,
											'compensation' => FALSE,
											'debt_service' => FALSE,
											'cost_sources_id' => $idFuenteGasto2,
											'p_a_i_id' => $idpai1,
											'group_id' => 31,
											]);
											$idGasto20 = DB::getPdo()->lastInsertId();
											
										DB::table('financial_costs')->insert([
											'year' => 2,
											'value_bugeted' => 2657000,
											'value_comitted' => 2657000,
											'value_paid' => 2657000,
											'own' => FALSE,
											'nation' => TRUE,
											'royalties' => FALSE,
											'funds' => FALSE,
											'functioning' => TRUE,
											'compensation' => FALSE,
											'debt_service' => FALSE,
											'cost_sources_id' => $idFuenteGasto4,
											'p_a_i_id' => $idpai1,
											'group_id' => 31,
											]);
											$idGasto21 = DB::getPdo()->lastInsertId();
											
											
										DB::table('financial_costs')->insert([
											'year' => 2,
											'value_bugeted' => 10341000,
											'value_comitted' => 10341000,
											'value_paid' => 10341000,
											'own' => FALSE,
											'nation' => TRUE,
											'royalties' => FALSE,
											'funds' => FALSE,
											'functioning' => TRUE,
											'compensation' => FALSE,
											'debt_service' => FALSE,
											'cost_sources_id' => $idFuenteGasto5,
											'p_a_i_id' => $idpai1,
											'group_id' => 31,
											]);
											$idGasto22 = DB::getPdo()->lastInsertId();
											
											
										DB::table('financial_costs')->insert([
											'year' => 2,
											'value_bugeted' => 256016000,
											'value_comitted' => 250334093,
											'value_paid' => 245848503.27,
											'own' => FALSE,
											'nation' => TRUE,
											'royalties' => FALSE,
											'funds' => FALSE,
											'functioning' => TRUE,
											'compensation' => FALSE,
											'debt_service' => FALSE,
											'cost_sources_id' => $idFuenteGasto6,
											'p_a_i_id' => $idpai1,
											'group_id' => 31,
											]);
											$idGasto23 = DB::getPdo()->lastInsertId();
											
											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 4146700777,
												'value_comitted' => 3478847766.25,
												'value_paid' => 3478847766.26,
												'own' => TRUE,
												'nation' => FALSE,
												'royalties' => FALSE,
												'funds' => FALSE,
												'functioning' => TRUE,
												'compensation' => FALSE,
												'debt_service' => FALSE,
												'cost_sources_id' => $idFuenteGasto1,
												'p_a_i_id' => $idpai1,
												'group_id' => 31,
												]);
												$idGasto24 = DB::getPdo()->lastInsertId();
												
												
											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 2941186736,
												'value_comitted' => 2636614572.85,
												'value_paid' => 2597513160.85,
												'own' => TRUE,
												'nation' => FALSE,
												'royalties' => FALSE,
												'funds' => FALSE,
												'functioning' => TRUE,
												'compensation' => FALSE,
												'debt_service' => FALSE,
												'cost_sources_id' => $idFuenteGasto2,
												'p_a_i_id' => $idpai1,
												'group_id' => 31,
												]);
												$idGasto25 = DB::getPdo()->lastInsertId();
												
												
											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 794908288,
												'value_comitted' => 730759620,
												'value_paid' => 730759620,
												'own' => TRUE,
												'nation' => FALSE,
												'royalties' => FALSE,
												'funds' => FALSE,
												'functioning' => TRUE,
												'compensation' => FALSE,
												'debt_service' => FALSE,
												'cost_sources_id' => $idFuenteGasto3,
												'p_a_i_id' => $idpai1,
												'group_id' => 31,
												]);
												$idGasto26 = DB::getPdo()->lastInsertId();
												
												
											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 135700400,
												'value_comitted' => 135700400,
												'value_paid' => 135700400,
												'own' => TRUE,
												'nation' => FALSE,
												'royalties' => FALSE,
												'funds' => FALSE,
												'functioning' => TRUE,
												'compensation' => FALSE,
												'debt_service' => FALSE,
												'cost_sources_id' => $idFuenteGasto4,
												'p_a_i_id' => $idpai1,
												'group_id' => 31,
												]);
												$idGasto27 = DB::getPdo()->lastInsertId();
												
												
											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 26139000,
												'value_comitted' => 26138783,
												'value_paid' => 26138783,
												'own' => TRUE,
												'nation' => FALSE,
												'royalties' => FALSE,
												'funds' => FALSE,
												'functioning' => TRUE,
												'compensation' => FALSE,
												'debt_service' => FALSE,
												'cost_sources_id' => $idFuenteGasto5,
												'p_a_i_id' => $idpai1,
												'group_id' => 31,
												]);
												$idGasto28 = DB::getPdo()->lastInsertId();
												
												
											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 22432542,
												'value_comitted' => 2492690.33000001,
												'value_paid' => 2465529.16000003,
												'own' => TRUE,
												'nation' => FALSE,
												'royalties' => FALSE,
												'funds' => FALSE,
												'functioning' => TRUE,
												'compensation' => FALSE,
												'debt_service' => FALSE,
												'cost_sources_id' => $idFuenteGasto6,
												'p_a_i_id' => $idpai1,
												'group_id' => 31,
												]);
												$idGasto29 = DB::getPdo()->lastInsertId();
												
												
											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 124568382,
												'value_comitted' => 87224301.93,
												'value_paid' => 87224301.93,
												'own' => TRUE,
												'nation' => FALSE,
												'royalties' => FALSE,
												'funds' => FALSE,
												'functioning' => TRUE,
												'compensation' => FALSE,
												'debt_service' => FALSE,
												'cost_sources_id' => $idFuenteGasto7,
												'p_a_i_id' => $idpai1,
												'group_id' => 31,
												]);
												$idGasto30 = DB::getPdo()->lastInsertId();
												
												
											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 393432394,
												'value_comitted' => 384382865,
												'value_paid' => 384382865,
												'own' => TRUE,
												'nation' => FALSE,
												'royalties' => FALSE,
												'funds' => FALSE,
												'functioning' => FALSE,
												'compensation' => FALSE,
												'debt_service' => TRUE,
												'cost_sources_id' => $idFuenteGasto8,
												'p_a_i_id' => $idpai1,
												'group_id' => 31,
												]);
												$idGasto31 = DB::getPdo()->lastInsertId();
												
												
												DB::table('financial_costs')->insert([
													'year' => 3,
													'value_bugeted' => 4125040000,
													'value_comitted' => 4111707525,
													'value_paid' => 4111707525,
													'own' => FALSE,
													'nation' => TRUE,
													'royalties' => FALSE,
													'funds' => FALSE,
													'functioning' => TRUE,
													'compensation' => FALSE,
													'debt_service' => FALSE,
													'cost_sources_id' => $idFuenteGasto1,
													'p_a_i_id' => $idpai1,
													'group_id' => 31,
													]);
													$idGasto32 = DB::getPdo()->lastInsertId();
													
													
												DB::table('financial_costs')->insert([
													'year' => 3,
													'value_bugeted' => 238542000,
													'value_comitted' => 196419878.42,
													'value_paid' => 196419878.42,
													'own' => FALSE,
													'nation' => TRUE,
													'royalties' => FALSE,
													'funds' => FALSE,
													'functioning' => TRUE,
													'compensation' => FALSE,
													'debt_service' => FALSE,
													'cost_sources_id' => $idFuenteGasto2,
													'p_a_i_id' => $idpai1,
													'group_id' => 31,
													]);
													$idGasto33 = DB::getPdo()->lastInsertId();
													
													
												DB::table('financial_costs')->insert([
													'year' => 3,
													'value_bugeted' => 26000000,
													'value_comitted' => 0,
													'value_paid' => 0,
													'own' => FALSE,
													'nation' => TRUE,
													'royalties' => FALSE,
													'funds' => FALSE,
													'functioning' => TRUE,
													'compensation' => FALSE,
													'debt_service' => FALSE,
													'cost_sources_id' => $idFuenteGasto3,
													'p_a_i_id' => $idpai1,
													'group_id' => 31,
													]);
													$idGasto34 = DB::getPdo()->lastInsertId();
													
													
												DB::table('financial_costs')->insert([
													'year' => 3,
													'value_bugeted' => 2737000,
													'value_comitted' => 2737000,
													'value_paid' => 2737000,
													'own' => FALSE,
													'nation' => TRUE,
													'royalties' => FALSE,
													'funds' => FALSE,
													'functioning' => TRUE,
													'compensation' => FALSE,
													'debt_service' => FALSE,
													'cost_sources_id' => $idFuenteGasto4,
													'p_a_i_id' => $idpai1,
													'group_id' => 31,
													]);
													$idGasto35 = DB::getPdo()->lastInsertId();
													
													
												DB::table('financial_costs')->insert([
													'year' => 3,
													'value_bugeted' => 10651000,
													'value_comitted' => 10651000,
													'value_paid' => 10651000,
													'own' => FALSE,
													'nation' => TRUE,
													'royalties' => FALSE,
													'funds' => FALSE,
													'functioning' => TRUE,
													'compensation' => FALSE,
													'debt_service' => FALSE,
													'cost_sources_id' => $idFuenteGasto5,
													'p_a_i_id' => $idpai1,
													'group_id' => 31,
													]);
													$idGasto36 = DB::getPdo()->lastInsertId();
													
													
												DB::table('financial_costs')->insert([
													'year' => 3,
													'value_bugeted' => 266513000,
													'value_comitted' => 259313630.57,
													'value_paid' => 257912189.14,
													'own' => FALSE,
													'nation' => TRUE,
													'royalties' => FALSE,
													'funds' => FALSE,
													'functioning' => TRUE,
													'compensation' => FALSE,
													'debt_service' => FALSE,
													'cost_sources_id' => $idFuenteGasto6,
													'p_a_i_id' => $idpai1,
													'group_id' => 31,
													]);
													$idGasto37 = DB::getPdo()->lastInsertId();
													
													DB::table('financial_costs')->insert([
														'year' => 4,
														'value_bugeted' => 3125896368,
														'value_comitted' => 2772088705,
														'value_paid' => 2772088705,
														'own' => TRUE,
														'nation' => FALSE,
														'royalties' => FALSE,
														'funds' => FALSE,
														'functioning' => TRUE,
														'compensation' => FALSE,
														'debt_service' => FALSE,
														'cost_sources_id' => $idFuenteGasto1,
														'p_a_i_id' => $idpai1,
														'group_id' => 31,
														]);
														$idGasto38 = DB::getPdo()->lastInsertId();
														
														
													DB::table('financial_costs')->insert([
														'year' => 4,
														'value_bugeted' => 4220325418.84,
														'value_comitted' => 3986094258.63,
														'value_paid' => 3849376943.63,
														'own' => TRUE,
														'nation' => FALSE,
														'royalties' => FALSE,
														'funds' => FALSE,
														'functioning' => TRUE,
														'compensation' => FALSE,
														'debt_service' => FALSE,
														'cost_sources_id' => $idFuenteGasto2,
														'p_a_i_id' => $idpai1,
														'group_id' => 31,
														]);
														$idGasto39 = DB::getPdo()->lastInsertId();
														
													DB::table('financial_costs')->insert([
														'year' => 4,
														'value_bugeted' => 146288775,
														'value_comitted' => 146264375,
														'value_paid' => 3,
														'own' => TRUE,
														'nation' => FALSE,
														'royalties' => FALSE,
														'funds' => FALSE,
														'functioning' => TRUE,
														'compensation' => FALSE,
														'debt_service' => FALSE,
														'cost_sources_id' => $idFuenteGasto4,
														'p_a_i_id' => $idpai1,
														'group_id' => 31,
														]);
														$idGasto40 = DB::getPdo()->lastInsertId();
														
														
													DB::table('financial_costs')->insert([
														'year' => 4,
														'value_bugeted' => 17508133,
														'value_comitted' => 17508133,
														'value_paid' => 17508133,
														'own' => TRUE,
														'nation' => FALSE,
														'royalties' => FALSE,
														'funds' => FALSE,
														'functioning' => TRUE,
														'compensation' => FALSE,
														'debt_service' => FALSE,
														'cost_sources_id' => $idFuenteGasto5,
														'p_a_i_id' => $idpai1,
														'group_id' => 31,
														]);
														$idGasto41 = DB::getPdo()->lastInsertId();
														
														
													DB::table('financial_costs')->insert([
														'year' => 4,
														'value_bugeted' => 16696534,
														'value_comitted' => 16687165.16,
														'value_paid' => 16649689.16,
														'own' => TRUE,
														'nation' => FALSE,
														'royalties' => FALSE,
														'funds' => FALSE,
														'functioning' => TRUE,
														'compensation' => FALSE,
														'debt_service' => FALSE,
														'cost_sources_id' => $idFuenteGasto6,
														'p_a_i_id' => $idpai1,
														'group_id' => 31,
														]);
														$idGasto42 = DB::getPdo()->lastInsertId();
														
														
													DB::table('financial_costs')->insert([
														'year' => 4,
														'value_bugeted' => 143968382,
														'value_comitted' => 143925000,
														'value_paid' => 143925000,
														'own' => TRUE,
														'nation' => FALSE,
														'royalties' => FALSE,
														'funds' => FALSE,
														'functioning' => TRUE,
														'compensation' => FALSE,
														'debt_service' => FALSE,
														'cost_sources_id' => $idFuenteGasto7,
														'p_a_i_id' => $idpai1,
														'group_id' => 31,
														]);
														$idGasto43 = DB::getPdo()->lastInsertId();
														
														
													DB::table('financial_costs')->insert([
														'year' => 4,
														'value_bugeted' => 809091000,
														'value_comitted' => 801057115,
														'value_paid' => 801057115,
														'own' => TRUE,
														'nation' => FALSE,
														'royalties' => FALSE,
														'funds' => FALSE,
														'functioning' => FALSE,
														'compensation' => FALSE,
														'debt_service' => TRUE,
														'cost_sources_id' => $idFuenteGasto8,
														'p_a_i_id' => $idpai1,
														'group_id' => 31,
														]);
														$idGasto44 = DB::getPdo()->lastInsertId();
														
														
														DB::table('financial_costs')->insert([
															'year' => 4,
															'value_bugeted' => 4296912320,
															'value_comitted' => 4296037251,
															'value_paid' => 4296037251,
															'own' => FALSE,
															'nation' => TRUE,
															'royalties' => FALSE,
															'funds' => FALSE,
															'functioning' => TRUE,
															'compensation' => FALSE,
															'debt_service' => FALSE,
															'cost_sources_id' => $idFuenteGasto1,
															'p_a_i_id' => $idpai1,
															'group_id' => 31,
															]);
															$idGasto45 = DB::getPdo()->lastInsertId();
															
															
														DB::table('financial_costs')->insert([
															'year' => 4,
															'value_bugeted' => 238542000,
															'value_comitted' => 202246547.84,
															'value_paid' => 202246547.84,
															'own' => FALSE,
															'nation' => TRUE,
															'royalties' => FALSE,
															'funds' => FALSE,
															'functioning' => TRUE,
															'compensation' => FALSE,
															'debt_service' => FALSE,
															'cost_sources_id' => $idFuenteGasto2,
															'p_a_i_id' => $idpai1,
															'group_id' => 31,
															]);
															$idGasto46 = DB::getPdo()->lastInsertId();
															
														DB::table('financial_costs')->insert([
															'year' => 4,
															'value_bugeted' => 2819110,
															'value_comitted' => 2819110,
															'value_paid' => 2819110,
															'own' => FALSE,
															'nation' => TRUE,
															'royalties' => FALSE,
															'funds' => FALSE,
															'functioning' => TRUE,
															'compensation' => FALSE,
															'debt_service' => FALSE,
															'cost_sources_id' => $idFuenteGasto4,
															'p_a_i_id' => $idpai1,
															'group_id' => 31,
															]);
															$idGasto47 = DB::getPdo()->lastInsertId();
															
															
														DB::table('financial_costs')->insert([
															'year' => 4,
															'value_bugeted' => 10970767,
															'value_comitted' => 10970767,
															'value_paid' => 10970767,
															'own' => FALSE,
															'nation' => TRUE,
															'royalties' => FALSE,
															'funds' => FALSE,
															'functioning' => TRUE,
															'compensation' => FALSE,
															'debt_service' => FALSE,
															'cost_sources_id' => $idFuenteGasto5,
															'p_a_i_id' => $idpai1,
															'group_id' => 31,
															]);
															$idGasto48 = DB::getPdo()->lastInsertId();
															
															
														DB::table('financial_costs')->insert([
															'year' => 4,
															'value_bugeted' => 274508390,
															'value_comitted' => 255991745,
															'value_paid' => 255991745,
															'own' => FALSE,
															'nation' => TRUE,
															'royalties' => FALSE,
															'funds' => FALSE,
															'functioning' => TRUE,
															'compensation' => FALSE,
															'debt_service' => FALSE,
															'cost_sources_id' => $idFuenteGasto6,
															'p_a_i_id' => $idpai1,
															'group_id' => 31,
															]);
															$idGasto49 = DB::getPdo()->lastInsertId();
 
 
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity7,
																'source_id' =>$idPlan1,
																'value' => 2162377712.27,
																'goal' => 0,
																'evidence_balance' => 2162377712.27,
																'age' => 1,
																]);
																$idactivitySource1 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity9,
																'source_id' =>$idPlan23,
																'value' => 7500000,
																'goal' => 0,
																'evidence_balance' => 7500000,
																'age' => 1,
																]);
																$idactivitySource2 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity12,
																'source_id' =>$idPlan23,
																'value' => 204136173,
																'goal' => 0,
																'evidence_balance' => 204136173,
																'age' => 1,
																]);
																$idactivitySource3 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity22,
																'source_id' =>$idPlan23,
																'value' => 626383504,
																'goal' => 0,
																'evidence_balance' => 626383504,
																'age' => 1,
																]);
																$idactivitySource4 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity31,
																'source_id' =>$idPlan1,
																'value' => 2750828008,
																'goal' => 0,
																'evidence_balance' => 2750828008,
																'age' => 1,
																]);
																$idactivitySource5 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity35,
																'source_id' =>$idPlan1,
																'value' => 3798803155.73,
																'goal' => 0,
																'evidence_balance' => 3798803155.73,
																'age' => 1,
																]);
																$idactivitySource6 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity45,
																'source_id' =>$idPlan20,
																'value' => 1184965133,
																'goal' => 0,
																'evidence_balance' => 1184965133,
																'age' => 1,
																]);
																$idactivitySource7 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity47,
																'source_id' =>$idPlan23,
																'value' => 59249720,
																'goal' => 0,
																'evidence_balance' => 59249720,
																'age' => 1,
																]);
																$idactivitySource8 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity50,
																'source_id' =>$idPlan6,
																'value' => 145342655.535999,
																'goal' => 0,
																'evidence_balance' => 145342655.535999,
																'age' => 1,
																]);
																$idactivitySource9 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity57,
																'source_id' =>$idPlan23,
																'value' => 57075000,
																'goal' => 0,
																'evidence_balance' => 57075000,
																'age' => 1,
																]);
																$idactivitySource10 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity59,
																'source_id' =>$idPlan23,
																'value' => 36279720,
																'goal' => 0,
																'evidence_balance' => 36279720,
																'age' => 1,
																]);
																$idactivitySource11 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity63,
																'source_id' =>$idPlan20,
																'value' => 1847141722.65,
																'goal' => 0,
																'evidence_balance' => 1847141722.65,
																'age' => 1,
																]);
																$idactivitySource12 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity66,
																'source_id' =>$idPlan23,
																'value' => 73107000,
																'goal' => 0,
																'evidence_balance' => 73107000,
																'age' => 1,
																]);
																$idactivitySource13 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity70,
																'source_id' =>$idPlan23,
																'value' => 615678633,
																'goal' => 0,
																'evidence_balance' => 615678633,
																'age' => 1,
																]);
																$idactivitySource14 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity73,
																'source_id' =>$idPlan23,
																'value' => 409787000,
																'goal' => 0,
																'evidence_balance' => 409787000,
																'age' => 1,
																]);
																$idactivitySource15 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity79,
																'source_id' =>$idPlan23,
																'value' => 295615221,
																'goal' => 0,
																'evidence_balance' => 295615221,
																'age' => 1,
																]);
																$idactivitySource16 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity88,
																'source_id' =>$idPlan18,
																'value' => 1225949222.536,
																'goal' => 0,
																'evidence_balance' => 1225949222.536,
																'age' => 1,
																]);
																$idactivitySource17 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity92,
																'source_id' =>$idPlan23,
																'value' => 99613887,
																'goal' => 0,
																'evidence_balance' => 99613887,
																'age' => 1,
																]);
																$idactivitySource18 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity98,
																'source_id' =>$idPlan16,
																'value' => 159403878.535999,
																'goal' => 0,
																'evidence_balance' => 159403878.535999,
																'age' => 1,
																]);
																$idactivitySource19 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity102,
																'source_id' =>$idPlan6,
																'value' => 287879520,
																'goal' => 0,
																'evidence_balance' => 287879520,
																'age' => 1,
																]);
																$idactivitySource20 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity108,
																'source_id' =>$idPlan6,
																'value' => 483523369,
																'goal' => 0,
																'evidence_balance' => 483523369,
																'age' => 1,
																]);
																$idactivitySource21 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity112,
																'source_id' =>$idPlan16,
																'value' => 894719732,
																'goal' => 0,
																'evidence_balance' => 894719732,
																'age' => 1,
																]);
																$idactivitySource22 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity115,
																'source_id' =>$idPlan23,
																'value' => 223316666,
																'goal' => 0,
																'evidence_balance' => 223316666,
																'age' => 1,
																]);
																$idactivitySource23 = DB::getPdo()->lastInsertId();
																
																
																
																DB::table('activity_sources')->insert([
																	'activity_id' => $idactivity35,
																	'source_id' =>$idPlan20,
																	'value' => 2241806593.27,
																	'goal' => 0,
																	'evidence_balance' => 2241806593.27,
																	'age' => 1,
																	]);
																	$idactivitySource24 = DB::getPdo()->lastInsertId();
																	
																	
																	
																DB::table('activity_sources')->insert([
																	'activity_id' => $idactivity50,
																	'source_id' =>$idPlan23,
																	'value' => 206973122.464001,
																	'goal' => 0,
																	'evidence_balance' => 206973122.464001,
																	'age' => 1,
																	]);
																	$idactivitySource25 = DB::getPdo()->lastInsertId();
																	
																	
																	
																DB::table('activity_sources')->insert([
																	'activity_id' => $idactivity63,
																	'source_id' =>$idPlan18,
																	'value' => 1314826879.35,
																	'goal' => 0,
																	'evidence_balance' => 1314826879.35,
																	'age' => 1,
																	]);
																	$idactivitySource26 = DB::getPdo()->lastInsertId();
																	
																	
																	
																DB::table('activity_sources')->insert([
																	'activity_id' => $idactivity88,
																	'source_id' =>$idPlan16,
																	'value' => 1010359444.464,
																	'goal' => 0,
																	'evidence_balance' => 1010359444.464,
																	'age' => 1,
																	]);
																	$idactivitySource27 = DB::getPdo()->lastInsertId();
																	
																	
																	
																DB::table('activity_sources')->insert([
																	'activity_id' => $idactivity98,
																	'source_id' =>$idPlan6,
																	'value' => 8279455.4640007,
																	'goal' => 0,
																	'evidence_balance' => 8279455.4640007,
																	'age' => 1,
																	]);
																	$idactivitySource28 = DB::getPdo()->lastInsertId();
																	
																	
																	
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia7,
																		'activity_source_id' =>$idactivitySource1,
																		'value' => 626124837,
																		]);
																		$idevidenceFinancial1 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia9,
																		'activity_source_id' =>$idactivitySource2,
																		'value' => 7500000,
																		]);
																		$idevidenceFinancial2 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia12,
																		'activity_source_id' =>$idactivitySource3,
																		'value' => 157053386,
																		]);
																		$idevidenceFinancial3 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia22,
																		'activity_source_id' =>$idactivitySource4,
																		'value' => 581922665,
																		]);
																		$idevidenceFinancial4 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia31,
																		'activity_source_id' =>$idactivitySource5,
																		'value' => 753501134,
																		]);
																		$idevidenceFinancial5 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia35,
																		'activity_source_id' =>$idactivitySource6,
																		'value' => 3798803155.73,
																		]);
																		$idevidenceFinancial6 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia45,
																		'activity_source_id' =>$idactivitySource7,
																		'value' => 1102653094,
																		]);
																		$idevidenceFinancial7 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia47,
																		'activity_source_id' =>$idactivitySource8,
																		'value' => 41566666,
																		]);
																		$idevidenceFinancial8 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia50,
																		'activity_source_id' =>$idactivitySource9,
																		'value' => 145342655.535999,
																		]);
																		$idevidenceFinancial9 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia57,
																		'activity_source_id' =>$idactivitySource10,
																		'value' => 11812346,
																		]);
																		$idevidenceFinancial10 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia59,
																		'activity_source_id' =>$idactivitySource11,
																		'value' => 34656388,
																		]);
																		$idevidenceFinancial11 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia63,
																		'activity_source_id' =>$idactivitySource12,
																		'value' => 1847141722.65,
																		]);
																		$idevidenceFinancial12 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia66,
																		'activity_source_id' =>$idactivitySource13,
																		'value' => 60375667,
																		]);
																		$idevidenceFinancial13 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia70,
																		'activity_source_id' =>$idactivitySource14,
																		'value' => 556909298,
																		]);
																		$idevidenceFinancial14 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia73,
																		'activity_source_id' =>$idactivitySource15,
																		'value' => 409787000,
																		]);
																		$idevidenceFinancial15 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia79,
																		'activity_source_id' =>$idactivitySource16,
																		'value' => 270585555,
																		]);
																		$idevidenceFinancial16 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia88,
																		'activity_source_id' =>$idactivitySource17,
																		'value' => 1225949222.536,
																		]);
																		$idevidenceFinancial17 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia92,
																		'activity_source_id' =>$idactivitySource18,
																		'value' => 99613887,
																		]);
																		$idevidenceFinancial18 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia98,
																		'activity_source_id' =>$idactivitySource19,
																		'value' => 159403878.535999,
																		]);
																		$idevidenceFinancial19 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia102,
																		'activity_source_id' =>$idactivitySource20,
																		'value' => 275079520,
																		]);
																		$idevidenceFinancial20 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia108,
																		'activity_source_id' =>$idactivitySource21,
																		'value' => 371166701,
																		]);
																		$idevidenceFinancial21 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia112,
																		'activity_source_id' =>$idactivitySource22,
																		'value' => 894719235,
																		]);
																		$idevidenceFinancial22 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia115,
																		'activity_source_id' =>$idactivitySource23,
																		'value' => 218916666,
																		]);
																		$idevidenceFinancial23 = DB::getPdo()->lastInsertId();
																		
																		
																		
																		DB::table('evidence_financial')->insert([
																			'evidence_id' => $idevidencia35,
																			'activity_source_id' =>$idactivitySource24,
																			'value' => 1254749634.27,
																			]);
																			$idevidenceFinancial24 = DB::getPdo()->lastInsertId();
																			
																			
																			
																		DB::table('evidence_financial')->insert([
																			'evidence_id' => $idevidencia50,
																			'activity_source_id' =>$idactivitySource25,
																			'value' => 196199454.464001,
																			]);
																			$idevidenceFinancial25 = DB::getPdo()->lastInsertId();
																			
																			
																			
																		DB::table('evidence_financial')->insert([
																			'evidence_id' => $idevidencia63,
																			'activity_source_id' =>$idactivitySource26,
																			'value' => 1234216383.35,
																			]);
																			$idevidenceFinancial26 = DB::getPdo()->lastInsertId();
																			
																			
																			
																		DB::table('evidence_financial')->insert([
																			'evidence_id' => $idevidencia88,
																			'activity_source_id' =>$idactivitySource27,
																			'value' => 1001807777.464,
																			]);
																			$idevidenceFinancial27 = DB::getPdo()->lastInsertId();
																			
																			
																			
																		DB::table('evidence_financial')->insert([
																			'evidence_id' => $idevidencia98,
																			'activity_source_id' =>$idactivitySource28,
																			'value' => 8278906.4640007,
																			]);
																			$idevidenceFinancial28 = DB::getPdo()->lastInsertId();
																			
																			
																			
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity7,
																				'source_id' =>$idPlan24,
																				'value' => 2199338558.74,
																				'goal' => 0,
																				'evidence_balance' => 2199338558.74,
																				'age' => 2,
																				]);
																				$idactivitySource29 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity9,
																				'source_id' =>$idPlan41,
																				'value' => 18092827,
																				'goal' => 0,
																				'evidence_balance' => 18092827,
																				'age' => 2,
																				]);
																				$idactivitySource30 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity12,
																				'source_id' =>$idPlan41,
																				'value' => 547030997.62,
																				'goal' => 0,
																				'evidence_balance' => 547030997.62,
																				'age' => 2,
																				]);
																				$idactivitySource31 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity22,
																				'source_id' =>$idPlan41,
																				'value' => 767684394.89,
																				'goal' => 0,
																				'evidence_balance' => 767684394.89,
																				'age' => 2,
																				]);
																				$idactivitySource33 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity31,
																				'source_id' =>$idPlan41,
																				'value' => 623129322,
																				'goal' => 0,
																				'evidence_balance' => 623129322,
																				'age' => 2,
																				]);
																				$idactivitySource34 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity35,
																				'source_id' =>$idPlan41,
																				'value' => 1100988371.53,
																				'goal' => 0,
																				'evidence_balance' => 1100988371.53,
																				'age' => 2,
																				]);
																				$idactivitySource35 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity45,
																				'source_id' =>$idPlan41,
																				'value' => 802723124,
																				'goal' => 0,
																				'evidence_balance' => 802723124,
																				'age' => 2,
																				]);
																				$idactivitySource36 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity47,
																				'source_id' =>$idPlan41,
																				'value' => 49362960,
																				'goal' => 0,
																				'evidence_balance' => 49362960,
																				'age' => 2,
																				]);
																				$idactivitySource37 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity50,
																				'source_id' =>$idPlan41,
																				'value' => 255285585,
																				'goal' => 0,
																				'evidence_balance' => 255285585,
																				'age' => 2,
																				]);
																				$idactivitySource38 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity57,
																				'source_id' =>$idPlan41,
																				'value' => 96822338.94,
																				'goal' => 0,
																				'evidence_balance' => 96822338.94,
																				'age' => 2,
																				]);
																				$idactivitySource39 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity59,
																				'source_id' =>$idPlan41,
																				'value' => 19999925,
																				'goal' => 0,
																				'evidence_balance' => 19999925,
																				'age' => 2,
																				]);
																				$idactivitySource40 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity63,
																				'source_id' =>$idPlan41,
																				'value' => 185048964,
																				'goal' => 0,
																				'evidence_balance' => 185048964,
																				'age' => 2,
																				]);
																				$idactivitySource41 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity66,
																				'source_id' =>$idPlan41,
																				'value' => 52128272,
																				'goal' => 0,
																				'evidence_balance' => 52128272,
																				'age' => 2,
																				]);
																				$idactivitySource42 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity70,
																				'source_id' =>$idPlan41,
																				'value' => 93656981,
																				'goal' => 0,
																				'evidence_balance' => 93656981,
																				'age' => 2,
																				]);
																				$idactivitySource43 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity73,
																				'source_id' =>$idPlan41,
																				'value' => 257132148,
																				'goal' => 0,
																				'evidence_balance' => 257132148,
																				'age' => 2,
																				]);
																				$idactivitySource44 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity79,
																				'source_id' =>$idPlan41,
																				'value' => 514674285,
																				'goal' => 0,
																				'evidence_balance' => 514674285,
																				'age' => 2,
																				]);
																				$idactivitySource45 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity88,
																				'source_id' =>$idPlan24,
																				'value' => 658785911.27,
																				'goal' => 0,
																				'evidence_balance' => 658785911.27,
																				'age' => 2,
																				]);
																				$idactivitySource46 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity92,
																				'source_id' =>$idPlan41,
																				'value' => 61050000,
																				'goal' => 0,
																				'evidence_balance' => 61050000,
																				'age' => 2,
																				]);
																				$idactivitySource47 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity98,
																				'source_id' =>$idPlan41,
																				'value' => 186650000,
																				'goal' => 0,
																				'evidence_balance' => 186650000,
																				'age' => 2,
																				]);
																				$idactivitySource48 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity102,
																				'source_id' =>$idPlan41,
																				'value' => 296385509,
																				'goal' => 0,
																				'evidence_balance' => 296385509,
																				'age' => 2,
																				]);
																				$idactivitySource49 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity108,
																				'source_id' =>$idPlan41,
																				'value' => 684016626,
																				'goal' => 0,
																				'evidence_balance' => 684016626,
																				'age' => 2,
																				]);
																				$idactivitySource50 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity112,
																				'source_id' =>$idPlan24,
																				'value' => 2450202927.99,
																				'goal' => 0,
																				'evidence_balance' => 2450202927.99,
																				'age' => 2,
																				]);
																				$idactivitySource51 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity115,
																				'source_id' =>$idPlan41,
																				'value' => 221406981,
																				'goal' => 0,
																				'evidence_balance' => 221406981,
																				'age' => 2,
																				]);
																				$idactivitySource52 = DB::getPdo()->lastInsertId();
																				
																				
																				
																				DB::table('activity_sources')->insert([
																					'activity_id' => $idactivity88,
																					'source_id' =>$idPlan41,
																					'value' => 857279745,
																					'goal' => 0,
																					'evidence_balance' => 857279745,
																					'age' => 2,
																					]);
																					$idactivitySource53 = DB::getPdo()->lastInsertId();
																					
																					
																					
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia122,
																						'activity_source_id' =>$idactivitySource29,
																						'value' => 1765895215.86,
																						]);
																						$idevidenceFinancial29 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia124,
																						'activity_source_id' =>$idactivitySource30,
																						'value' => 7500000,
																						]);
																						$idevidenceFinancial30 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia127,
																						'activity_source_id' =>$idactivitySource31,
																						'value' => 291186465.68,
																						]);
																						$idevidenceFinancial31 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia137,
																						'activity_source_id' =>$idactivitySource33,
																						'value' => 709712353.77,
																						]);
																						$idevidenceFinancial33 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia146,
																						'activity_source_id' =>$idactivitySource34,
																						'value' => 605634998,
																						]);
																						$idevidenceFinancial34 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia150,
																						'activity_source_id' =>$idactivitySource35,
																						'value' => 324616667,
																						]);
																						$idevidenceFinancial35 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia160,
																						'activity_source_id' =>$idactivitySource36,
																						'value' => 660418186.23,
																						]);
																						$idevidenceFinancial36 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia162,
																						'activity_source_id' =>$idactivitySource37,
																						'value' => 48516666.66,
																						]);
																						$idevidenceFinancial37 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia165,
																						'activity_source_id' =>$idactivitySource38,
																						'value' => 210240999,
																						]);
																						$idevidenceFinancial38 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia172,
																						'activity_source_id' =>$idactivitySource39,
																						'value' => 69917332.78,
																						]);
																						$idevidenceFinancial39 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia174,
																						'activity_source_id' =>$idactivitySource40,
																						'value' => 12788888.22,
																						]);
																						$idevidenceFinancial40 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia178,
																						'activity_source_id' =>$idactivitySource41,
																						'value' => 184565206.7,
																						]);
																						$idevidenceFinancial41 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia181,
																						'activity_source_id' =>$idactivitySource42,
																						'value' => 36950000,
																						]);
																						$idevidenceFinancial42 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia185,
																						'activity_source_id' =>$idactivitySource43,
																						'value' => 63302857,
																						]);
																						$idevidenceFinancial43 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia188,
																						'activity_source_id' =>$idactivitySource44,
																						'value' => 239466640,
																						]);
																						$idevidenceFinancial44 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia194,
																						'activity_source_id' =>$idactivitySource45,
																						'value' => 474824285,
																						]);
																						$idevidenceFinancial45 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia203,
																						'activity_source_id' =>$idactivitySource46,
																						'value' => 658785911.27,
																						]);
																						$idevidenceFinancial46 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia207,
																						'activity_source_id' =>$idactivitySource47,
																						'value' => 60933333,
																						]);
																						$idevidenceFinancial47 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia213,
																						'activity_source_id' =>$idactivitySource48,
																						'value' => 132900000,
																						]);
																						$idevidenceFinancial48 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia217,
																						'activity_source_id' =>$idactivitySource49,
																						'value' => 278372407,
																						]);
																						$idevidenceFinancial49 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia223,
																						'activity_source_id' =>$idactivitySource50,
																						'value' => 469689622.69,
																						]);
																						$idevidenceFinancial50 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia227,
																						'activity_source_id' =>$idactivitySource51,
																						'value' => 406585894,
																						]);
																						$idevidenceFinancial51 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia230,
																						'activity_source_id' =>$idactivitySource52,
																						'value' => 215200000,
																						]);
																						$idevidenceFinancial52 = DB::getPdo()->lastInsertId();
																						
																						
																						
																						DB::table('evidence_financial')->insert([
																							'evidence_id' => $idevidencia203,
																							'activity_source_id' =>$idactivitySource53,
																							'value' => 158259211.73,
																							]);
																							$idevidenceFinancial53 = DB::getPdo()->lastInsertId();
																							
																							
																							
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity7,
																								'source_id' =>$idPlan64,
																								'value' => 2486275966.69,
																								'goal' => 0,
																								'evidence_balance' => 2486275966.69,
																								'age' => 3,
																								]);
																								$idactivitySource54 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity9,
																								'source_id' =>$idPlan57,
																								'value' => 25000000,
																								'goal' => 0,
																								'evidence_balance' => 25000000,
																								'age' => 3,
																								]);
																								$idactivitySource55 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity12,
																								'source_id' =>$idPlan47,
																								'value' => 784303267.05,
																								'goal' => 0,
																								'evidence_balance' => 784303267.05,
																								'age' => 3,
																								]);
																								$idactivitySource56 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity22,
																								'source_id' =>$idPlan64,
																								'value' => 318187139.853499,
																								'goal' => 0,
																								'evidence_balance' => 318187139.853499,
																								'age' => 3,
																								]);
																								$idactivitySource58 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity31,
																								'source_id' =>$idPlan47,
																								'value' => 940300000,
																								'goal' => 0,
																								'evidence_balance' => 940300000,
																								'age' => 3,
																								]);
																								$idactivitySource59 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity35,
																								'source_id' =>$idPlan47,
																								'value' => 1271140623.2,
																								'goal' => 0,
																								'evidence_balance' => 1271140623.2,
																								'age' => 3,
																								]);
																								$idactivitySource60 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity45,
																								'source_id' =>$idPlan47,
																								'value' => 672600000,
																								'goal' => 0,
																								'evidence_balance' => 672600000,
																								'age' => 3,
																								]);
																								$idactivitySource61 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity47,
																								'source_id' =>$idPlan51,
																								'value' => 47208512.5434988,
																								'goal' => 0,
																								'evidence_balance' => 47208512.5434988,
																								'age' => 3,
																								]);
																								$idactivitySource62 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity50,
																								'source_id' =>$idPlan47,
																								'value' => 253002878,
																								'goal' => 0,
																								'evidence_balance' => 253002878,
																								'age' => 3,
																								]);
																								$idactivitySource63 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity57,
																								'source_id' =>$idPlan47,
																								'value' => 50358974.2434988,
																								'goal' => 0,
																								'evidence_balance' => 50358974.2434988,
																								'age' => 3,
																								]);
																								$idactivitySource64 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity59,
																								'source_id' =>$idPlan60,
																								'value' => 32236208.5434988,
																								'goal' => 0,
																								'evidence_balance' => 32236208.5434988,
																								'age' => 3,
																								]);
																								$idactivitySource65 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity63,
																								'source_id' =>$idPlan51,
																								'value' => 140321074,
																								'goal' => 0,
																								'evidence_balance' => 140321074,
																								'age' => 3,
																								]);
																								$idactivitySource66 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity66,
																								'source_id' =>$idPlan60,
																								'value' => 94700000,
																								'goal' => 0,
																								'evidence_balance' => 94700000,
																								'age' => 3,
																								]);
																								$idactivitySource67 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity70,
																								'source_id' =>$idPlan47,
																								'value' => 152418511,
																								'goal' => 0,
																								'evidence_balance' => 152418511,
																								'age' => 3,
																								]);
																								$idactivitySource68 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity73,
																								'source_id' =>$idPlan47,
																								'value' => 232200068,
																								'goal' => 0,
																								'evidence_balance' => 232200068,
																								'age' => 3,
																								]);
																								$idactivitySource69 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity79,
																								'source_id' =>$idPlan47,
																								'value' => 711405776,
																								'goal' => 0,
																								'evidence_balance' => 711405776,
																								'age' => 3,
																								]);
																								$idactivitySource70 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity88,
																								'source_id' =>$idPlan47,
																								'value' => 875581867,
																								'goal' => 0,
																								'evidence_balance' => 875581867,
																								'age' => 3,
																								]);
																								$idactivitySource71 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity92,
																								'source_id' =>$idPlan51,
																								'value' => 119775662,
																								'goal' => 0,
																								'evidence_balance' => 119775662,
																								'age' => 3,
																								]);
																								$idactivitySource72 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity98,
																								'source_id' =>$idPlan47,
																								'value' => 265459248,
																								'goal' => 0,
																								'evidence_balance' => 265459248,
																								'age' => 3,
																								]);
																								$idactivitySource73 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity102,
																								'source_id' =>$idPlan47,
																								'value' => 248550592,
																								'goal' => 0,
																								'evidence_balance' => 248550592,
																								'age' => 3,
																								]);
																								$idactivitySource74 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity108,
																								'source_id' =>$idPlan47,
																								'value' => 419063861,
																								'goal' => 0,
																								'evidence_balance' => 419063861,
																								'age' => 3,
																								]);
																								$idactivitySource75 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity112,
																								'source_id' =>$idPlan47,
																								'value' => 810778028.44,
																								'goal' => 0,
																								'evidence_balance' => 810778028.44,
																								'age' => 3,
																								]);
																								$idactivitySource76 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity115,
																								'source_id' =>$idPlan47,
																								'value' => 504901000,
																								'goal' => 0,
																								'evidence_balance' => 504901000,
																								'age' => 3,
																								]);
																								$idactivitySource77 = DB::getPdo()->lastInsertId();
																								
																								
																								
																								DB::table('activity_sources')->insert([
																									'activity_id' => $idactivity22,
																									'source_id' =>$idPlan47,
																									'value' => 1183547061.0665,
																									'goal' => 0,
																									'evidence_balance' => 1183547061.0665,
																									'age' => 3,
																									]);
																									$idactivitySource78 = DB::getPdo()->lastInsertId();
																									
																									
																									
																								DB::table('activity_sources')->insert([
																									'activity_id' => $idactivity47,
																									'source_id' =>$idPlan60,
																									'value' => 91102961.4565012,
																									'goal' => 0,
																									'evidence_balance' => 91102961.4565012,
																									'age' => 3,
																									]);
																									$idactivitySource79 = DB::getPdo()->lastInsertId();
																									
																									
																									
																								DB::table('activity_sources')->insert([
																									'activity_id' => $idactivity57,
																									'source_id' =>$idPlan51,
																									'value' => 102085461.756501,
																									'goal' => 0,
																									'evidence_balance' => 102085461.756501,
																									'age' => 3,
																									]);
																									$idactivitySource80 = DB::getPdo()->lastInsertId();
																									
																									
																									
																								DB::table('activity_sources')->insert([
																									'activity_id' => $idactivity59,
																									'source_id' =>$idPlan57,
																									'value' => 23230453.4565012,
																									'goal' => 0,
																									'evidence_balance' => 23230453.4565012,
																									'age' => 3,
																									]);
																									$idactivitySource81 = DB::getPdo()->lastInsertId();
																									
																									
																									
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia237,
																										'activity_source_id' =>$idactivitySource54,
																										'value' => 895089346.44,
																										]);
																										$idevidenceFinancial54 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia239,
																										'activity_source_id' =>$idactivitySource55,
																										'value' => 18750000,
																										]);
																										$idevidenceFinancial55 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia242,
																										'activity_source_id' =>$idactivitySource56,
																										'value' => 359519624,
																										]);
																										$idevidenceFinancial56 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia252,
																										'activity_source_id' =>$idactivitySource58,
																										'value' => 318187139.853499,
																										]);
																										$idevidenceFinancial58 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia261,
																										'activity_source_id' =>$idactivitySource59,
																										'value' => 675114907.58,
																										]);
																										$idevidenceFinancial59 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia265,
																										'activity_source_id' =>$idactivitySource60,
																										'value' => 871217180,
																										]);
																										$idevidenceFinancial60 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia275,
																										'activity_source_id' =>$idactivitySource61,
																										'value' => 627896963.66,
																										]);
																										$idevidenceFinancial61 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia277,
																										'activity_source_id' =>$idactivitySource62,
																										'value' => 47208512.5434988,
																										]);
																										$idevidenceFinancial62 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia280,
																										'activity_source_id' =>$idactivitySource63,
																										'value' => 240433333,
																										]);
																										$idevidenceFinancial63 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia287,
																										'activity_source_id' =>$idactivitySource64,
																										'value' => 20463500,
																										]);
																										$idevidenceFinancial64 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia289,
																										'activity_source_id' =>$idactivitySource65,
																										'value' => 32236208.5434988,
																										]);
																										$idevidenceFinancial65 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia293,
																										'activity_source_id' =>$idactivitySource66,
																										'value' => 133028457,
																										]);
																										$idevidenceFinancial66 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia296,
																										'activity_source_id' =>$idactivitySource67,
																										'value' => 93037750,
																										]);
																										$idevidenceFinancial67 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia300,
																										'activity_source_id' =>$idactivitySource68,
																										'value' => 139099854.56,
																										]);
																										$idevidenceFinancial68 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia303,
																										'activity_source_id' =>$idactivitySource69,
																										'value' => 215116665,
																										]);
																										$idevidenceFinancial69 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia309,
																										'activity_source_id' =>$idactivitySource70,
																										'value' => 710404999,
																										]);
																										$idevidenceFinancial70 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia318,
																										'activity_source_id' =>$idactivitySource71,
																										'value' => 829614443,
																										]);
																										$idevidenceFinancial71 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia322,
																										'activity_source_id' =>$idactivitySource72,
																										'value' => 108253333,
																										]);
																										$idevidenceFinancial72 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia328,
																										'activity_source_id' =>$idactivitySource73,
																										'value' => 256412076.98,
																										]);
																										$idevidenceFinancial73 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia332,
																										'activity_source_id' =>$idactivitySource74,
																										'value' => 245389000,
																										]);
																										$idevidenceFinancial74 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia338,
																										'activity_source_id' =>$idactivitySource75,
																										'value' => 263191395.06,
																										]);
																										$idevidenceFinancial75 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia342,
																										'activity_source_id' =>$idactivitySource76,
																										'value' => 392083461,
																										]);
																										$idevidenceFinancial76 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia345,
																										'activity_source_id' =>$idactivitySource77,
																										'value' => 497127664,
																										]);
																										$idevidenceFinancial77 = DB::getPdo()->lastInsertId();
																										
																										
																										
																										DB::table('evidence_financial')->insert([
																											'evidence_id' => $idevidencia252,
																											'activity_source_id' =>$idactivitySource78,
																											'value' => 468616193.146501,
																											]);
																											$idevidenceFinancial78 = DB::getPdo()->lastInsertId();
																											
																											
																											
																										DB::table('evidence_financial')->insert([
																											'evidence_id' => $idevidencia277,
																											'activity_source_id' =>$idactivitySource79,
																											'value' => 86780371.4565012,
																											]);
																											$idevidenceFinancial79 = DB::getPdo()->lastInsertId();
																											
																											
																											
																										
																										DB::table('evidence_financial')->insert([
																											'evidence_id' => $idevidencia289,
																											'activity_source_id' =>$idactivitySource81,
																											'value' => 4933791.45650119,
																											]);
																											$idevidenceFinancial81 = DB::getPdo()->lastInsertId();
																											
																											
																											
                                                                                                            DB::table('activity_sources')->insert([
                                                                                                                'activity_id' => $idactivity7,
                                                                                                                'source_id' =>$idPlan72,
                                                                                                                'value' => 2692670365.6,
                                                                                                                'goal' => 0,
                                                                                                                'evidence_balance' => 2692670365.6,
                                                                                                                'age' => 4,
                                                                                                                ]);
                                                                                                                $idactivitySource82 = DB::getPdo()->lastInsertId();
                                                                                                                
                                                                                                                
                                                                                                                
                                                                                                            DB::table('activity_sources')->insert([
                                                                                                                'activity_id' => $idactivity12,
                                                                                                                'source_id' =>$idPlan87,
                                                                                                                'value' => 845711484.56,
                                                                                                                'goal' => 0,
                                                                                                                'evidence_balance' => 845711484.56,
                                                                                                                'age' => 4,
                                                                                                                ]);
                                                                                                                $idactivitySource83 = DB::getPdo()->lastInsertId();
                                                                                                                
                                                                                                                
                                                                                                                
                                                                                                            DB::table('activity_sources')->insert([
                                                                                                                'activity_id' => $idactivity22,
                                                                                                                'source_id' =>$idPlan72,
                                                                                                                'value' => 756993080.36,
                                                                                                                'goal' => 0,
                                                                                                                'evidence_balance' => 756993080.36,
                                                                                                                'age' => 4,
                                                                                                                ]);
                                                                                                                $idactivitySource85 = DB::getPdo()->lastInsertId();
                                                                                                                
                                                                                                                
                                                                                                                
                                                                                                            DB::table('activity_sources')->insert([
                                                                                                                'activity_id' => $idactivity31,
                                                                                                                'source_id' =>$idPlan87,
                                                                                                                'value' => 520104932,
                                                                                                                'goal' => 0,
                                                                                                                'evidence_balance' => 520104932,
                                                                                                                'age' => 4,
                                                                                                                ]);
                                                                                                                $idactivitySource86 = DB::getPdo()->lastInsertId();
                                                                                                                
                                                                                                                
                                                                                                                
                                                                                                            DB::table('activity_sources')->insert([
                                                                                                                'activity_id' => $idactivity35,
                                                                                                                'source_id' =>$idPlan87,
                                                                                                                'value' => 698781200,
                                                                                                                'goal' => 0,
                                                                                                                'evidence_balance' => 698781200,
                                                                                                                'age' => 4,
                                                                                                                ]);
                                                                                                                $idactivitySource87 = DB::getPdo()->lastInsertId();
                                                                                                                
                                                                                                                
                                                                                                                
                                                                                                            DB::table('activity_sources')->insert([
                                                                                                                'activity_id' => $idactivity45,
                                                                                                                'source_id' =>$idPlan87,
                                                                                                                'value' => 671725177,
                                                                                                                'goal' => 0,
                                                                                                                'evidence_balance' => 671725177,
                                                                                                                'age' => 4,
                                                                                                                ]);
                                                                                                                $idactivitySource88 = DB::getPdo()->lastInsertId();
                                                                                                                
                                                                                                                
                                                                                                                
                                                                                                            DB::table('activity_sources')->insert([
                                                                                                                'activity_id' => $idactivity47,
                                                                                                                'source_id' =>$idPlan93,
                                                                                                                'value' => 142868663,
                                                                                                                'goal' => 0,
                                                                                                                'evidence_balance' => 142868663,
                                                                                                                'age' => 4,
                                                                                                                ]);
                                                                                                                $idactivitySource89 = DB::getPdo()->lastInsertId();
                                                                                                                
                                                                                                                
                                                                                                                
                                                                                                            DB::table('activity_sources')->insert([
                                                                                                                'activity_id' => $idactivity50,
                                                                                                                'source_id' =>$idPlan87,
                                                                                                                'value' => 266868663,
                                                                                                                'goal' => 0,
                                                                                                                'evidence_balance' => 266868663,
                                                                                                                'age' => 4,
                                                                                                                ]);
                                                                                                                $idactivitySource90 = DB::getPdo()->lastInsertId();
                                                                                                                
                                                                                                                
                                                                                                                
                                                                                                            DB::table('activity_sources')->insert([
                                                                                                                'activity_id' => $idactivity57,
                                                                                                                'source_id' =>$idPlan87,
                                                                                                                'value' => 194000000,
                                                                                                                'goal' => 0,
                                                                                                                'evidence_balance' => 194000000,
                                                                                                                'age' => 4,
                                                                                                                ]);
                                                                                                                $idactivitySource91 = DB::getPdo()->lastInsertId();
                                                                                                                
                                                                                                                
                                                                                                                
                                                                                                            DB::table('activity_sources')->insert([
                                                                                                                'activity_id' => $idactivity59,
                                                                                                                'source_id' =>$idPlan93,
                                                                                                                'value' => 21158057.3943644,
                                                                                                                'goal' => 0,
                                                                                                                'evidence_balance' => 21158057.3943644,
                                                                                                                'age' => 4,
                                                                                                                ]);
                                                                                                                $idactivitySource92 = DB::getPdo()->lastInsertId();
                                                                                                                
                                                                                                                
                                                                                                                
                                                                                                            DB::table('activity_sources')->insert([
                                                                                                                'activity_id' => $idactivity63,
                                                                                                                'source_id' =>$idPlan93,
                                                                                                                'value' => 55611092,
                                                                                                                'goal' => 0,
                                                                                                                'evidence_balance' => 55611092,
                                                                                                                'age' => 4,
                                                                                                                ]);
                                                                                                                $idactivitySource93 = DB::getPdo()->lastInsertId();
                                                                                                                
                                                                                                                
                                                                                                                
                                                                                                            DB::table('activity_sources')->insert([
                                                                                                                'activity_id' => $idactivity66,
                                                                                                                'source_id' =>$idPlan93,
                                                                                                                'value' => 74153521,
                                                                                                                'goal' => 0,
                                                                                                                'evidence_balance' => 74153521,
                                                                                                                'age' => 4,
                                                                                                                ]);
                                                                                                                $idactivitySource94 = DB::getPdo()->lastInsertId();
                                                                                                                
                                                                                                                
                                                                                                                
                                                                                                            DB::table('activity_sources')->insert([
                                                                                                                'activity_id' => $idactivity70,
                                                                                                                'source_id' =>$idPlan87,
                                                                                                                'value' => 177649472,
                                                                                                                'goal' => 0,
                                                                                                                'evidence_balance' => 177649472,
                                                                                                                'age' => 4,
                                                                                                                ]);
                                                                                                                $idactivitySource95 = DB::getPdo()->lastInsertId();
                                                                                                                
                                                                                                                
                                                                                                                
                                                                                                            DB::table('activity_sources')->insert([
                                                                                                                'activity_id' => $idactivity73,
                                                                                                                'source_id' =>$idPlan87,
                                                                                                                'value' => 256620687,
                                                                                                                'goal' => 0,
                                                                                                                'evidence_balance' => 256620687,
                                                                                                                'age' => 4,
                                                                                                                ]);
                                                                                                                $idactivitySource96 = DB::getPdo()->lastInsertId();
                                                                                                                
                                                                                                                
                                                                                                                
                                                                                                            DB::table('activity_sources')->insert([
                                                                                                                'activity_id' => $idactivity79,
                                                                                                                'source_id' =>$idPlan87,
                                                                                                                'value' => 325950712,
                                                                                                                'goal' => 0,
                                                                                                                'evidence_balance' => 325950712,
                                                                                                                'age' => 4,
                                                                                                                ]);
                                                                                                                $idactivitySource97 = DB::getPdo()->lastInsertId();
                                                                                                                
                                                                                                                
                                                                                                                
                                                                                                            DB::table('activity_sources')->insert([
                                                                                                                'activity_id' => $idactivity88,
                                                                                                                'source_id' =>$idPlan87,
                                                                                                                'value' => 1068034773,
                                                                                                                'goal' => 0,
                                                                                                                'evidence_balance' => 1068034773,
                                                                                                                'age' => 4,
                                                                                                                ]);
                                                                                                                $idactivitySource98 = DB::getPdo()->lastInsertId();
                                                                                                                
                                                                                                                
                                                                                                                
                                                                                                            DB::table('activity_sources')->insert([
                                                                                                                'activity_id' => $idactivity92,
                                                                                                                'source_id' =>$idPlan87,
                                                                                                                'value' => 170875712,
                                                                                                                'goal' => 0,
                                                                                                                'evidence_balance' => 170875712,
                                                                                                                'age' => 4,
                                                                                                                ]);
                                                                                                                $idactivitySource99 = DB::getPdo()->lastInsertId();
                                                                                                                
                                                                                                                
                                                                                                                
                                                                                                            DB::table('activity_sources')->insert([
                                                                                                                'activity_id' => $idactivity98,
                                                                                                                'source_id' =>$idPlan87,
                                                                                                                'value' => 35454565.2000008,
                                                                                                                'goal' => 0,
                                                                                                                'evidence_balance' => 35454565.2000008,
                                                                                                                'age' => 4,
                                                                                                                ]);
                                                                                                                $idactivitySource100 = DB::getPdo()->lastInsertId();
                                                                                                                
                                                                                                                
                                                                                                                
                                                                                                            DB::table('activity_sources')->insert([
                                                                                                                'activity_id' => $idactivity102,
                                                                                                                'source_id' =>$idPlan87,
                                                                                                                'value' => 282335828,
                                                                                                                'goal' => 0,
                                                                                                                'evidence_balance' => 282335828,
                                                                                                                'age' => 4,
                                                                                                                ]);
                                                                                                                $idactivitySource101 = DB::getPdo()->lastInsertId();
                                                                                                                
                                                                                                                
                                                                                                                
                                                                                                            DB::table('activity_sources')->insert([
                                                                                                                'activity_id' => $idactivity108,
                                                                                                                'source_id' =>$idPlan87,
                                                                                                                'value' => 399042711,
                                                                                                                'goal' => 0,
                                                                                                                'evidence_balance' => 399042711,
                                                                                                                'age' => 4,
                                                                                                                ]);
                                                                                                                $idactivitySource102 = DB::getPdo()->lastInsertId();
                                                                                                                
                                                                                                                
                                                                                                                
                                                                                                            DB::table('activity_sources')->insert([
                                                                                                                'activity_id' => $idactivity112,
                                                                                                                'source_id' =>$idPlan87,
                                                                                                                'value' => 655886493,
                                                                                                                'goal' => 0,
                                                                                                                'evidence_balance' => 655886493,
                                                                                                                'age' => 4,
                                                                                                                ]);
                                                                                                                $idactivitySource103 = DB::getPdo()->lastInsertId();
                                                                                                                
                                                                                                                
                                                                                                                
                                                                                                            DB::table('activity_sources')->insert([
                                                                                                                'activity_id' => $idactivity115,
                                                                                                                'source_id' =>$idPlan87,
                                                                                                                'value' => 518919632,
                                                                                                                'goal' => 0,
                                                                                                                'evidence_balance' => 518919632,
                                                                                                                'age' => 4,
                                                                                                                ]);
                                                                                                                $idactivitySource104 = DB::getPdo()->lastInsertId();
                                                                                                                
                                                                                                                
                                                                                                                
                                                                                                                DB::table('activity_sources')->insert([
                                                                                                                    'activity_id' => $idactivity22,
                                                                                                                    'source_id' =>$idPlan87,
                                                                                                                    'value' => 935695534.44,
                                                                                                                    'goal' => 0,
                                                                                                                    'evidence_balance' => 935695534.44,
                                                                                                                    'age' => 4,
                                                                                                                    ]);
																													$idactivitySource105 = DB::getPdo()->lastInsertId();

                                                                                                                    
                                                                                                                    
                                                                                                                DB::table('activity_sources')->insert([
                                                                                                                    'activity_id' => $idactivity59,
                                                                                                                    'source_id' =>$idPlan90,
                                                                                                                    'value' => 30841942.6056356,
                                                                                                                    'goal' => 0,
                                                                                                                    'evidence_balance' => 30841942.6056356,
                                                                                                                    'age' => 4,
                                                                                                                    ]);
																													$idactivitySource106 = DB::getPdo()->lastInsertId();
																													

                                                                                                                    
                                                                                                                DB::table('activity_sources')->insert([
                                                                                                                    'activity_id' => $idactivity98,
                                                                                                                    'source_id' =>$idPlan93,
                                                                                                                    'value' => 131643238.799999,
                                                                                                                    'goal' => 0,
                                                                                                                    'evidence_balance' => 131643238.799999,
                                                                                                                    'age' => 4,
                                                                                                                    ]);
																													$idactivitySource107 = DB::getPdo()->lastInsertId();
																													

                                                                                                                    
                                                                                                                    DB::table('evidence_financial')->insert([
                                                                                                                        'evidence_id' => $idevidencia352,
                                                                                                                        'activity_source_id' =>$idactivitySource82,
                                                                                                                        'value' => 1352718101,
                                                                                                                        ]);
                                                                                                                        $idevidenceFinancial82 = DB::getPdo()->lastInsertId();
                                                                                                                        
                                                                                                                        
                                                                                                                        
                                                                                                                    DB::table('evidence_financial')->insert([
                                                                                                                        'evidence_id' => $idevidencia357,
                                                                                                                        'activity_source_id' =>$idactivitySource83,
                                                                                                                        'value' => 502352217.78,
                                                                                                                        ]);
                                                                                                                        $idevidenceFinancial83 = DB::getPdo()->lastInsertId();
                                                                                                                        
                                                                                                                        
                                                                                                                        
                                                                                                                    DB::table('evidence_financial')->insert([
                                                                                                                        'evidence_id' => $idevidencia367,
                                                                                                                        'activity_source_id' =>$idactivitySource85,
                                                                                                                        'value' => 756993080.36,
                                                                                                                        ]);
                                                                                                                        $idevidenceFinancial85 = DB::getPdo()->lastInsertId();
                                                                                                                        
                                                                                                                        
                                                                                                                        
                                                                                                                    DB::table('evidence_financial')->insert([
                                                                                                                        'evidence_id' => $idevidencia376,
                                                                                                                        'activity_source_id' =>$idactivitySource86,
                                                                                                                        'value' => 473288659,
                                                                                                                        ]);
                                                                                                                        $idevidenceFinancial86 = DB::getPdo()->lastInsertId();
                                                                                                                        
                                                                                                                        
                                                                                                                        
                                                                                                                    DB::table('evidence_financial')->insert([
                                                                                                                        'evidence_id' => $idevidencia380,
                                                                                                                        'activity_source_id' =>$idactivitySource87,
                                                                                                                        'value' => 496850000,
                                                                                                                        ]);
                                                                                                                        $idevidenceFinancial87 = DB::getPdo()->lastInsertId();
                                                                                                                        
                                                                                                                        
                                                                                                                        
                                                                                                                    DB::table('evidence_financial')->insert([
                                                                                                                        'evidence_id' => $idevidencia390,
                                                                                                                        'activity_source_id' =>$idactivitySource88,
                                                                                                                        'value' => 641926426,
                                                                                                                        ]);
                                                                                                                        $idevidenceFinancial88 = DB::getPdo()->lastInsertId();
                                                                                                                        
                                                                                                                        
                                                                                                                        
                                                                                                                    DB::table('evidence_financial')->insert([
                                                                                                                        'evidence_id' => $idevidencia392,
                                                                                                                        'activity_source_id' =>$idactivitySource89,
                                                                                                                        'value' => 119416653,
                                                                                                                        ]);
                                                                                                                        $idevidenceFinancial89 = DB::getPdo()->lastInsertId();
                                                                                                                        
                                                                                                                        
                                                                                                                        
                                                                                                                    DB::table('evidence_financial')->insert([
                                                                                                                        'evidence_id' => $idevidencia395,
                                                                                                                        'activity_source_id' =>$idactivitySource90,
                                                                                                                        'value' => 262671515,
                                                                                                                        ]);
                                                                                                                        $idevidenceFinancial90 = DB::getPdo()->lastInsertId();
                                                                                                                        
                                                                                                                        
                                                                                                                        
                                                                                                                    DB::table('evidence_financial')->insert([
                                                                                                                        'evidence_id' => $idevidencia402,
                                                                                                                        'activity_source_id' =>$idactivitySource91,
                                                                                                                        'value' => 144552534,
                                                                                                                        ]);
                                                                                                                        $idevidenceFinancial91 = DB::getPdo()->lastInsertId();
                                                                                                                        
                                                                                                                        
                                                                                                                        
                                                                                                                    DB::table('evidence_financial')->insert([
                                                                                                                        'evidence_id' => $idevidencia404,
                                                                                                                        'activity_source_id' =>$idactivitySource92,
                                                                                                                        'value' => 21158057.3943644,
                                                                                                                        ]);
                                                                                                                        $idevidenceFinancial92 = DB::getPdo()->lastInsertId();
                                                                                                                        
                                                                                                                        
                                                                                                                        
                                                                                                                    DB::table('evidence_financial')->insert([
                                                                                                                        'evidence_id' => $idevidencia408,
                                                                                                                        'activity_source_id' =>$idactivitySource93,
                                                                                                                        'value' => 34666666,
                                                                                                                        ]);
                                                                                                                        $idevidenceFinancial93 = DB::getPdo()->lastInsertId();
                                                                                                                        
                                                                                                                        
                                                                                                                        
                                                                                                                    DB::table('evidence_financial')->insert([
                                                                                                                        'evidence_id' => $idevidencia411,
                                                                                                                        'activity_source_id' =>$idactivitySource94,
                                                                                                                        'value' => 71385540,
                                                                                                                        ]);
                                                                                                                        $idevidenceFinancial94 = DB::getPdo()->lastInsertId();
                                                                                                                        
                                                                                                                        
                                                                                                                        
                                                                                                                    DB::table('evidence_financial')->insert([
                                                                                                                        'evidence_id' => $idevidencia415,
                                                                                                                        'activity_source_id' =>$idactivitySource95,
                                                                                                                        'value' => 171403366,
                                                                                                                        ]);
                                                                                                                        $idevidenceFinancial95 = DB::getPdo()->lastInsertId();
                                                                                                                        
                                                                                                                        
                                                                                                                        
                                                                                                                    DB::table('evidence_financial')->insert([
                                                                                                                        'evidence_id' => $idevidencia418,
                                                                                                                        'activity_source_id' =>$idactivitySource96,
                                                                                                                        'value' => 163733333,
                                                                                                                        ]);
                                                                                                                        $idevidenceFinancial96 = DB::getPdo()->lastInsertId();
                                                                                                                        
                                                                                                                        
                                                                                                                        
                                                                                                                    DB::table('evidence_financial')->insert([
                                                                                                                        'evidence_id' => $idevidencia424,
                                                                                                                        'activity_source_id' =>$idactivitySource97,
                                                                                                                        'value' => 314201500,
                                                                                                                        ]);
                                                                                                                        $idevidenceFinancial97 = DB::getPdo()->lastInsertId();
                                                                                                                        
                                                                                                                        
                                                                                                                        
                                                                                                                    DB::table('evidence_financial')->insert([
                                                                                                                        'evidence_id' => $idevidencia433,
                                                                                                                        'activity_source_id' =>$idactivitySource98,
                                                                                                                        'value' => 1019566666,
                                                                                                                        ]);
                                                                                                                        $idevidenceFinancial98 = DB::getPdo()->lastInsertId();
                                                                                                                        
                                                                                                                        
                                                                                                                        
                                                                                                                    DB::table('evidence_financial')->insert([
                                                                                                                        'evidence_id' => $idevidencia437,
                                                                                                                        'activity_source_id' =>$idactivitySource99,
                                                                                                                        'value' => 162925000,
                                                                                                                        ]);
                                                                                                                        $idevidenceFinancial99 = DB::getPdo()->lastInsertId();
                                                                                                                        
                                                                                                                        
                                                                                                                        
                                                                                                                    DB::table('evidence_financial')->insert([
                                                                                                                        'evidence_id' => $idevidencia443,
                                                                                                                        'activity_source_id' =>$idactivitySource100,
                                                                                                                        'value' => 35454565.2000008,
                                                                                                                        ]);
                                                                                                                        $idevidenceFinancial100 = DB::getPdo()->lastInsertId();
                                                                                                                        
                                                                                                                        
                                                                                                                        
                                                                                                                    DB::table('evidence_financial')->insert([
                                                                                                                        'evidence_id' => $idevidencia447,
                                                                                                                        'activity_source_id' =>$idactivitySource101,
                                                                                                                        'value' => 273253665,
                                                                                                                        ]);
                                                                                                                        $idevidenceFinancial101 = DB::getPdo()->lastInsertId();
                                                                                                                        
                                                                                                                        
                                                                                                                        
                                                                                                                    DB::table('evidence_financial')->insert([
                                                                                                                        'evidence_id' => $idevidencia453,
                                                                                                                        'activity_source_id' =>$idactivitySource102,
                                                                                                                        'value' => 388907817.44,
                                                                                                                        ]);
                                                                                                                        $idevidenceFinancial102 = DB::getPdo()->lastInsertId();
                                                                                                                        
                                                                                                                        
                                                                                                                        
                                                                                                                    DB::table('evidence_financial')->insert([
                                                                                                                        'evidence_id' => $idevidencia457,
                                                                                                                        'activity_source_id' =>$idactivitySource103,
                                                                                                                        'value' => 473551389,
                                                                                                                        ]);
                                                                                                                        $idevidenceFinancial103 = DB::getPdo()->lastInsertId();
                                                                                                                        
                                                                                                                        
                                                                                                                        
                                                                                                                    DB::table('evidence_financial')->insert([
                                                                                                                        'evidence_id' => $idevidencia460,
                                                                                                                        'activity_source_id' =>$idactivitySource104,
                                                                                                                        'value' => 507266581,
                                                                                                                        ]);
                                                                                                                        $idevidenceFinancial104 = DB::getPdo()->lastInsertId();
                                                                                                                        
                                                                                                                        
                                                                                                                        
                                                                                                                        DB::table('evidence_financial')->insert([
                                                                                                                            'evidence_id' => $idevidencia367,
                                                                                                                            'activity_source_id' =>$idactivitySource105,
                                                                                                                            'value' => 198284546.64,
                                                                                                                            ]);
                                                                                                                            $idevidenceFinancial105 = DB::getPdo()->lastInsertId();
                                                                                                                            
                                                                                                                            
                                                                                                                            
                                                                                                                        DB::table('evidence_financial')->insert([
                                                                                                                            'evidence_id' => $idevidencia404,
                                                                                                                            'activity_source_id' =>$idactivitySource106,
                                                                                                                            'value' => 23749006.6056356,
                                                                                                                            ]);
                                                                                                                            $idevidenceFinancial106 = DB::getPdo()->lastInsertId();
                                                                                                                            
                                                                                                                            
                                                                                                                            
                                                                                                                        DB::table('evidence_financial')->insert([
                                                                                                                            'evidence_id' => $idevidencia443,
                                                                                                                            'activity_source_id' =>$idactivitySource107,
                                                                                                                            'value' => 118895434.799999,
                                                                                                                            ]);
																													        $idevidenceFinancial107 = DB::getPdo()->lastInsertId();
																															
																																														

 }
}