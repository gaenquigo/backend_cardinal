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
 * Class HistoricPAI_CORALINA_Seeder
 */
class HistoricPAI_CORALINA_Seeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $pai=PAI::create([
      'name' => 'Plan de Acción 2016-2019. Un Archipiélago Posible.',
      'start_date' => '2016-01-01',
      'end_date' => '2019-12-31',
      'director_name' => 'Durcey Stephens Lever',
      'group_id' => 11,
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
          'car_program' => 'PROGRAMA A1 Calidad Ambiental y Ecosistémica en la Reserva de Biosfera Seaflower',
          'weighing' => 25,
          ]);
          $idprogram1 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA B1:Producción y Consumo Sostenible en la Reserva de Biosfera Seaflower',
          'weighing' => 25,
          ]);
          $idprogram2 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA C1: Gestión de la Información y el Conocimiento Ambiental de la Reserva de Biosfera Seaflower',
          'weighing' => 25,
          ]);
          $idprogram3 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA C2: Gobernabilidad y Gobernanza en la Reserva de Biosfera Seaflower',
          'weighing' => 25,
          ]);
          $idprogram4 = DB::getPdo()->lastInsertId();
          
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => 'MACROPROYECTO: 1. Sostenibilidad de la Biodiversidad y de los Servicios Eco-sistémicos en la Reserva de Biosfera Seaflower',
            'weighing' => 25,
            ]);
            $idproject1 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => 'MACROPROYECTO 2. Gestión Integral del Recurso Hídrico en la Reserva de Biosfera Seaflower',
            'weighing' => 25,
            ]);
            $idproject2 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => 'MACROPROYECTO 3. Calidad Ambiental en la Reserva de Biosfera Seaflower',
            'weighing' => 25,
            ]);
            $idproject3 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => 'MACROPROYECTO 4. Áreas Protegidas en la Reserva de Biosfera Seaflower',
            'weighing' => 25,
            ]);
            $idproject4 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => 'MACROPROYECTO 5. Barrios y Sectores Adaptados al Cambio Climático',
            'weighing' => 33,
            ]);
            $idproject5 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => 'MACROPROYECTO 6. Alternativas Sostenibles de Vida ',
            'weighing' => 33,
            ]);
            $idproject6 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => 'MACROPROYECTO 7. Buenas Prácticas de Producción y Consumo Sostenible en la Reserva de Biosfera Seaflower',
            'weighing' => 34,
            ]);
            $idproject7 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram3,
            'project' => 'MACROPROYECTO 8. Observatorio para el Desarrollo Sostenible de la Reserva de Biosfera Seaflower',
            'weighing' => 100,
            ]);
            $idproject8 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram4,
            'project' => 'MACROPROYECTO 9. Fortalecimiento Institucional del Administrador de la Reserva de Biosfera Seaflower, CORALINA',
            'weighing' => 50,
            ]);
            $idproject9 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram4,
            'project' => 'MACROPROYECTO 10. Participación Social, Educación y Civilidad Ambiental de la Reserva de Biosfera Seaflower',
            'weighing' => 50,
            ]);
            $idproject10 = DB::getPdo()->lastInsertId();
            
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
              
              
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => null,
                'product_other' => 'PRODUCTO 1',
                'goal_1' => 0,
                'goal_2' => 1,
                'goal_3' => 2,
                'goal_4' => 2,
                'goal_1_balance' => 0,
                'goal_2_balance' => 1,
                'goal_3_balance' => 2,
                'goal_4_balance' => 2,
                'total_goal' => 5,
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 16,
                ]);
                $idobjectiveproduct1 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => null,
                'product_other' => 'PRODUCTO 2',
                'goal_1' => 0.9,
                'goal_2' => 0.9,
                'goal_3' => 0.95,
                'goal_4' => 1,
                'goal_1_balance' => 0.9,
                'goal_2_balance' => 0.9,
                'goal_3_balance' => 0.95,
                'goal_4_balance' => 1,
                'total_goal' => 3.75,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 16,
                ]);
                $idobjectiveproduct2 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => null,
                'product_other' => 'PRODUCTO 3',
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
                'weighing' => 16,
                ]);
                $idobjectiveproduct3 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => null,
                'product_other' => 'PRODUCTO 4',
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
                'weighing' => 17,
                ]);
                $idobjectiveproduct4 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => null,
                'product_other' => 'PRODUCTO 5',
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
                'weighing' => 17,
                ]);
                $idobjectiveproduct5 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => null,
                'product_other' => 'PRODUCTO 6',
                'goal_1' => 0,
                'goal_2' => 0.05,
                'goal_3' => 0.03,
                'goal_4' => 0.03,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0.05,
                'goal_3_balance' => 0.03,
                'goal_4_balance' => 0.03,
                'total_goal' => 0.11,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 17,
                ]);
                $idobjectiveproduct6 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => null,
                'product_other' => 'PRODUCTO 7',
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
                $idobjectiveproduct7 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => null,
                'product_other' => 'PRODUCTO 1',
                'goal_1' => 0,
                'goal_2' => 0.8,
                'goal_3' => 0.8,
                'goal_4' => 0.9,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0.8,
                'goal_3_balance' => 0.8,
                'goal_4_balance' => 0.9,
                'total_goal' => 2.5,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct8 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => null,
                'product_other' => 'PRODUCTO 2',
                'goal_1' => 0.4,
                'goal_2' => 0.58,
                'goal_3' => 0.75,
                'goal_4' => 1,
                'goal_1_balance' => 0.4,
                'goal_2_balance' => 0.58,
                'goal_3_balance' => 0.75,
                'goal_4_balance' => 1,
                'total_goal' => 2.73,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct9 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => null,
                'product_other' => 'PRODUCTO 3',
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
                'weighing' => 14,
                ]);
                $idobjectiveproduct10 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => null,
                'product_other' => 'PRODUCTO 4',
                'goal_1' => 17.2,
                'goal_2' => 26.2,
                'goal_3' => 35.2,
                'goal_4' => 44.2,
                'goal_1_balance' => 17.2,
                'goal_2_balance' => 26.2,
                'goal_3_balance' => 35.2,
                'goal_4_balance' => 44.2,
                'total_goal' => 122.8,
                'unit_goal' => 47,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct11 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => null,
                'product_other' => 'PRODUCTO 5',
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
                $idobjectiveproduct12 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => null,
                'product_other' => 'PRODUCTO 6',
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
                'weighing' => 14,
                ]);
                $idobjectiveproduct13 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => null,
                'product_other' => 'PRODUCTO 7',
                'goal_1' => 2,
                'goal_2' => 2,
                'goal_3' => 3,
                'goal_4' => 3,
                'goal_1_balance' => 2,
                'goal_2_balance' => 2,
                'goal_3_balance' => 3,
                'goal_4_balance' => 3,
                'total_goal' => 10,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct14 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => null,
                'product_other' => 'PRODUCTO 8',
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
                $idobjectiveproduct15 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => null,
                'product_other' => 'PRODUCTO 1',
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
                'weighing' => 8,
                ]);
                $idobjectiveproduct16 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => null,
                'product_other' => 'PRODUCTO 2',
                'goal_1' => 0,
                'goal_2' => 0.06,
                'goal_3' => 0.07,
                'goal_4' => 0.08,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0.06,
                'goal_3_balance' => 0.07,
                'goal_4_balance' => 0.08,
                'total_goal' => 0.21,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct17 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => null,
                'product_other' => 'PRODUCTO 3',
                'goal_1' => 0.54,
                'goal_2' => 0.58,
                'goal_3' => 0.61,
                'goal_4' => 0.65,
                'goal_1_balance' => 0.54,
                'goal_2_balance' => 0.58,
                'goal_3_balance' => 0.61,
                'goal_4_balance' => 0.65,
                'total_goal' => 2.38,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct18 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => null,
                'product_other' => 'PRODUCTO 4',
                'goal_1' => 0.85,
                'goal_2' => 0.9,
                'goal_3' => 0.9,
                'goal_4' => 0.95,
                'goal_1_balance' => 0.85,
                'goal_2_balance' => 0.9,
                'goal_3_balance' => 0.9,
                'goal_4_balance' => 0.95,
                'total_goal' => 3.6,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct19 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => null,
                'product_other' => 'PRODUCTO 5',
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
                'weighing' => 8,
                ]);
                $idobjectiveproduct20 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => null,
                'product_other' => 'PRODUCTO 6',
                'goal_1' => 2,
                'goal_2' => 2,
                'goal_3' => 2,
                'goal_4' => 2,
                'goal_1_balance' => 2,
                'goal_2_balance' => 2,
                'goal_3_balance' => 2,
                'goal_4_balance' => 2,
                'total_goal' => 8,
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct21 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => null,
                'product_other' => 'PRODUCTO 7',
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
                'weighing' => 8,
                ]);
                $idobjectiveproduct22 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => null,
                'product_other' => 'PRODUCTO 8',
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
                'weighing' => 8,
                ]);
                $idobjectiveproduct23 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => null,
                'product_other' => 'PRODUCTO 9',
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
                'weighing' => 8,
                ]);
                $idobjectiveproduct24 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => null,
                'product_other' => 'PRODUCTO 10',
                'goal_1' => 0,
                'goal_2' => 0.33,
                'goal_3' => 0.66,
                'goal_4' => 1,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0.33,
                'goal_3_balance' => 0.66,
                'goal_4_balance' => 1,
                'total_goal' => 1.99,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct25 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => null,
                'product_other' => 'PRODUCTO 11',
                'goal_1' => 0,
                'goal_2' => 0.55,
                'goal_3' => 0.55,
                'goal_4' => 0.6,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0.55,
                'goal_3_balance' => 0.55,
                'goal_4_balance' => 0.6,
                'total_goal' => 1.7,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 9,
                ]);
                $idobjectiveproduct26 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => null,
                'product_other' => 'PRODUCTO 12',
                'goal_1' => 0.05,
                'goal_2' => 0.08,
                'goal_3' => 0.12,
                'goal_4' => 0.15,
                'goal_1_balance' => 0.05,
                'goal_2_balance' => 0.08,
                'goal_3_balance' => 0.12,
                'goal_4_balance' => 0.15,
                'total_goal' => 0.4,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 9,
                ]);
                $idobjectiveproduct27 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => null,
                'product_other' => 'PRODUCTO 13',
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
                'objective_id' => $idobjective4,
                'product_id' => null,
                'product_other' => 'PRODUCTO 1',
                'goal_1' => 0,
                'goal_2' => 1,
                'goal_3' => 2,
                'goal_4' => 2,
                'goal_1_balance' => 0,
                'goal_2_balance' => 1,
                'goal_3_balance' => 2,
                'goal_4_balance' => 2,
                'total_goal' => 5,
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 12,
                ]);
                $idobjectiveproduct29 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective4,
                'product_id' => null,
                'product_other' => 'PRODUCTO 2',
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
                'weighing' => 13,
                ]);
                $idobjectiveproduct30 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective4,
                'product_id' => null,
                'product_other' => 'PRODUCTO 3',
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
                'weighing' => 12,
                ]);
                $idobjectiveproduct31 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective4,
                'product_id' => null,
                'product_other' => 'PRODUCTO 4',
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
                'weighing' => 13,
                ]);
                $idobjectiveproduct32 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective4,
                'product_id' => null,
                'product_other' => 'PRODUCTO 5',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 2,
                'goal_4' => 2,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 2,
                'goal_4_balance' => 2,
                'total_goal' => 6,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 12,
                ]);
                $idobjectiveproduct33 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective4,
                'product_id' => null,
                'product_other' => 'PRODUCTO 6',
                'goal_1' => 1,
                'goal_2' => 2,
                'goal_3' => 3,
                'goal_4' => 3,
                'goal_1_balance' => 1,
                'goal_2_balance' => 2,
                'goal_3_balance' => 3,
                'goal_4_balance' => 3,
                'total_goal' => 9,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 13,
                ]);
                $idobjectiveproduct34 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective4,
                'product_id' => null,
                'product_other' => 'PRODUCTO 7',
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
                'weighing' => 12,
                ]);
                $idobjectiveproduct35 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective4,
                'product_id' => null,
                'product_other' => 'PRODUCTO 8',
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
                $idobjectiveproduct36 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective4,
                'product_id' => null,
                'product_other' => 'PRODUCTO 9',
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
                $idobjectiveproduct37 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
                'product_other' => 'PRODUCTO 1',
                'goal_1' => 0,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 0,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 3,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct38 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
                'product_other' => 'PRODUCTO 2',
                'goal_1' => 0,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 0,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 3,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct39 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
                'product_other' => 'PRODUCTO 3',
                'goal_1' => 0,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 0,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 3,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct40 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
                'product_other' => 'PRODUCTO 4',
                'goal_1' => 0,
                'goal_2' => 1,
                'goal_3' => 2,
                'goal_4' => 2,
                'goal_1_balance' => 0,
                'goal_2_balance' => 1,
                'goal_3_balance' => 2,
                'goal_4_balance' => 2,
                'total_goal' => 5,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct41 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
                'product_other' => 'PRODUCTO 5',
                'goal_1' => 0,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 2,
                'goal_1_balance' => 0,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 2,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct42 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
                'product_other' => 'PRODUCTO 6',
                'goal_1' => 0,
                'goal_2' => 0.06,
                'goal_3' => 0.1,
                'goal_4' => 0.15,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0.06,
                'goal_3_balance' => 0.1,
                'goal_4_balance' => 0.15,
                'total_goal' => 0.31,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct43 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
                'product_other' => 'PRODUCTO 7',
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
                $idobjectiveproduct44 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
                'product_other' => 'PRODUCTO 8',
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
                $idobjectiveproduct45 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective6,
                'product_id' => null,
                'product_other' => 'PRODUCTO 1',
                'goal_1' => 1,
                'goal_2' => 2,
                'goal_3' => 3,
                'goal_4' => 2,
                'goal_1_balance' => 1,
                'goal_2_balance' => 2,
                'goal_3_balance' => 3,
                'goal_4_balance' => 2,
                'total_goal' => 8,
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
                'product_other' => 'PRODUCTO 2',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 2,
                'goal_4' => 3,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 2,
                'goal_4_balance' => 3,
                'total_goal' => 7,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct47 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective6,
                'product_id' => null,
                'product_other' => 'PRODUCTO 3',
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
                'weighing' => 14,
                ]);
                $idobjectiveproduct48 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective6,
                'product_id' => null,
                'product_other' => 'PRODUCTO 4',
                'goal_1' => 1,
                'goal_2' => 2,
                'goal_3' => 2,
                'goal_4' => 2,
                'goal_1_balance' => 1,
                'goal_2_balance' => 2,
                'goal_3_balance' => 2,
                'goal_4_balance' => 2,
                'total_goal' => 7,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct49 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective6,
                'product_id' => null,
                'product_other' => 'PRODUCTO 5',
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
                'weighing' => 14,
                ]);
                $idobjectiveproduct50 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective6,
                'product_id' => null,
                'product_other' => 'PRODUCTO 6',
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
                $idobjectiveproduct51 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective6,
                'product_id' => null,
                'product_other' => 'PRODUCTO 7',
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
                'weighing' => 14,
                ]);
                $idobjectiveproduct52 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective6,
                'product_id' => null,
                'product_other' => 'PRODUCTO 8',
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
                $idobjectiveproduct53 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
                'product_id' => null,
                'product_other' => 'PRODUCTO 1',
                'goal_1' => 1,
                'goal_2' => 2,
                'goal_3' => 3,
                'goal_4' => 4,
                'goal_1_balance' => 1,
                'goal_2_balance' => 2,
                'goal_3_balance' => 3,
                'goal_4_balance' => 4,
                'total_goal' => 10,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct54 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
                'product_id' => null,
                'product_other' => 'PRODUCTO 2',
                'goal_1' => 5,
                'goal_2' => 10,
                'goal_3' => 15,
                'goal_4' => 20,
                'goal_1_balance' => 5,
                'goal_2_balance' => 10,
                'goal_3_balance' => 15,
                'goal_4_balance' => 20,
                'total_goal' => 50,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct55 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
                'product_id' => null,
                'product_other' => 'PRODUCTO 3',
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
                'weighing' => 11,
                ]);
                $idobjectiveproduct56 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
                'product_id' => null,
                'product_other' => 'PRODUCTO 4',
                'goal_1' => 1,
                'goal_2' => 2,
                'goal_3' => 2,
                'goal_4' => 2,
                'goal_1_balance' => 1,
                'goal_2_balance' => 2,
                'goal_3_balance' => 2,
                'goal_4_balance' => 2,
                'total_goal' => 7,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct57 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
                'product_id' => null,
                'product_other' => 'PRODUCTO 5',
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
                $idobjectiveproduct58 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
                'product_id' => null,
                'product_other' => 'PRODUCTO 6',
                'goal_1' => 0.75,
                'goal_2' => 0.8,
                'goal_3' => 0.85,
                'goal_4' => 0.87,
                'goal_1_balance' => 0.75,
                'goal_2_balance' => 0.8,
                'goal_3_balance' => 0.85,
                'goal_4_balance' => 0.87,
                'total_goal' => 3.27,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct59 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
                'product_id' => null,
                'product_other' => 'PRODUCTO 7',
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
                'weighing' => 11,
                ]);
                $idobjectiveproduct60 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
                'product_id' => null,
                'product_other' => 'PRODUCTO 8',
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
                'weighing' => 11,
                ]);
                $idobjectiveproduct61 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
                'product_id' => null,
                'product_other' => 'PRODUCTO 9',
                'goal_1' => 2,
                'goal_2' => 2,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 2,
                'goal_2_balance' => 2,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 6,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct62 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
                'product_id' => null,
                'product_other' => 'PRODUCTO 10',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 0,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 0,
                'goal_4_balance' => 1,
                'total_goal' => 3,
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct63 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
                'product_id' => null,
                'product_other' => 'PRODUCTO 1',
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
                $idobjectiveproduct64 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
                'product_id' => null,
                'product_other' => 'PRODUCTO 2',
                'goal_1' => 0,
                'goal_2' => 0.35,
                'goal_3' => 0.35,
                'goal_4' => 1,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0.35,
                'goal_3_balance' => 0.35,
                'goal_4_balance' => 1,
                'total_goal' => 1.7,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 9,
                ]);
                $idobjectiveproduct65 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
                'product_id' => null,
                'product_other' => 'PRODUCTO 3',
                'goal_1' => 0.2,
                'goal_2' => 0.3,
                'goal_3' => 0.4,
                'goal_4' => 0.5,
                'goal_1_balance' => 0.2,
                'goal_2_balance' => 0.3,
                'goal_3_balance' => 0.4,
                'goal_4_balance' => 0.5,
                'total_goal' => 1.4,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 9,
                ]);
                $idobjectiveproduct66 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
                'product_id' => null,
                'product_other' => 'PRODUCTO 4',
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
                $idobjectiveproduct67 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
                'product_id' => null,
                'product_other' => 'PRODUCTO 5',
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
                'weighing' => 9,
                ]);
                $idobjectiveproduct68 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
                'product_id' => null,
                'product_other' => 'PRODUCTO 6',
                'goal_1' => 0.8,
                'goal_2' => 0.8,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 0.8,
                'goal_2_balance' => 0.8,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 3.6,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 9,
                ]);
                $idobjectiveproduct69 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
                'product_id' => null,
                'product_other' => 'PRODUCTO 7',
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
                'weighing' => 9,
                ]);
                $idobjectiveproduct70 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
                'product_id' => null,
                'product_other' => 'PRODUCTO 8',
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
                $idobjectiveproduct71 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
                'product_id' => null,
                'product_other' => 'PRODUCTO 9',
                'goal_1' => 1,
                'goal_2' => 2,
                'goal_3' => 2,
                'goal_4' => 2,
                'goal_1_balance' => 1,
                'goal_2_balance' => 2,
                'goal_3_balance' => 2,
                'goal_4_balance' => 2,
                'total_goal' => 7,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 9,
                ]);
                $idobjectiveproduct72 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
                'product_id' => null,
                'product_other' => 'PRODUCTO 10',
                'goal_1' => 8,
                'goal_2' => 8,
                'goal_3' => 8,
                'goal_4' => 8,
                'goal_1_balance' => 8,
                'goal_2_balance' => 8,
                'goal_3_balance' => 8,
                'goal_4_balance' => 8,
                'total_goal' => 32,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 9,
                ]);
                $idobjectiveproduct73 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
                'product_id' => null,
                'product_other' => 'PRODUCTO 11',
                'goal_1' => 0,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 0,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 3,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 9,
                ]);
                $idobjectiveproduct74 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
                'product_id' => null,
                'product_other' => 'PRODUCTO 12',
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
                $idobjectiveproduct75 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'PRODUCTO 1',
                'goal_1' => 0.15,
                'goal_2' => 0.35,
                'goal_3' => 0.65,
                'goal_4' => 1,
                'goal_1_balance' => 0.15,
                'goal_2_balance' => 0.35,
                'goal_3_balance' => 0.65,
                'goal_4_balance' => 1,
                'total_goal' => 2.15,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct76 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'PRODUCTO 2',
                'goal_1' => 0,
                'goal_2' => 0.15,
                'goal_3' => 0.25,
                'goal_4' => 0.3,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0.15,
                'goal_3_balance' => 0.25,
                'goal_4_balance' => 0.3,
                'total_goal' => 0.7,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct77 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'PRODUCTO 3',
                'goal_1' => 0.1,
                'goal_2' => 0.2,
                'goal_3' => 0.5,
                'goal_4' => 0.7,
                'goal_1_balance' => 0.1,
                'goal_2_balance' => 0.2,
                'goal_3_balance' => 0.5,
                'goal_4_balance' => 0.7,
                'total_goal' => 1.5,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct78 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'PRODUCTO 4',
                'goal_1' => 0,
                'goal_2' => 1,
                'goal_3' => 2,
                'goal_4' => 1,
                'goal_1_balance' => 0,
                'goal_2_balance' => 1,
                'goal_3_balance' => 2,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct79 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'PRODUCTO 5',
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
                $idobjectiveproduct80 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'PRODUCTO 6',
                'goal_1' => 0.1,
                'goal_2' => 0.3,
                'goal_3' => 0.5,
                'goal_4' => 0.8,
                'goal_1_balance' => 0.1,
                'goal_2_balance' => 0.3,
                'goal_3_balance' => 0.5,
                'goal_4_balance' => 0.8,
                'total_goal' => 1.7,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct81 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'PRODUCTO 7',
                'goal_1' => 0.7,
                'goal_2' => 0.9,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 0.7,
                'goal_2_balance' => 0.9,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 3.6,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct82 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'PRODUCTO 8',
                'goal_1' => 8586,
                'goal_2' => 18132,
                'goal_3' => 21448,
                'goal_4' => 22092,
                'goal_1_balance' => 8586,
                'goal_2_balance' => 18132,
                'goal_3_balance' => 21448,
                'goal_4_balance' => 22092,
                'total_goal' => 70258,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct83 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'PRODUCTO 9',
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
                'weighing' => 8,
                ]);
                $idobjectiveproduct84 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'PRODUCTO 10',
                'goal_1' => 0,
                'goal_2' => 0.55,
                'goal_3' => 0.6,
                'goal_4' => 0.65,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0.55,
                'goal_3_balance' => 0.6,
                'goal_4_balance' => 0.65,
                'total_goal' => 1.8,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct85 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'PRODUCTO 11',
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
                'weighing' => 9,
                ]);
                $idobjectiveproduct86 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'PRODUCTO 12',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 0.75,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 0.75,
                'goal_4_balance' => 1,
                'total_goal' => 3.75,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 9,
                ]);
                $idobjectiveproduct87 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'PRODUCTO 13',
                'goal_1' => 0.01,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 0.01,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 3.01,
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 2,
                ]);
                $idobjectiveproduct88 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective10,
                'product_id' => null,
                'product_other' => 'PRODUCTO 1',
                'goal_1' => 0.2,
                'goal_2' => 0.4,
                'goal_3' => 0.6,
                'goal_4' => 0.8,
                'goal_1_balance' => 0.2,
                'goal_2_balance' => 0.4,
                'goal_3_balance' => 0.6,
                'goal_4_balance' => 0.8,
                'total_goal' => 2,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct89 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective10,
                'product_id' => null,
                'product_other' => 'PRODUCTO 2',
                'goal_1' => 0,
                'goal_2' => 0.1,
                'goal_3' => 0.15,
                'goal_4' => 0.15,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0.1,
                'goal_3_balance' => 0.15,
                'goal_4_balance' => 0.15,
                'total_goal' => 0.4,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct90 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective10,
                'product_id' => null,
                'product_other' => 'PRODUCTO 3',
                'goal_1' => 0.05,
                'goal_2' => 0.2,
                'goal_3' => 0.4,
                'goal_4' => 0.4,
                'goal_1_balance' => 0.05,
                'goal_2_balance' => 0.2,
                'goal_3_balance' => 0.4,
                'goal_4_balance' => 0.4,
                'total_goal' => 1.05,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct91 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective10,
                'product_id' => null,
                'product_other' => 'PRODUCTO 4',
                'goal_1' => 0.05,
                'goal_2' => 0.3,
                'goal_3' => 0.3,
                'goal_4' => 0.35,
                'goal_1_balance' => 0.05,
                'goal_2_balance' => 0.3,
                'goal_3_balance' => 0.3,
                'goal_4_balance' => 0.35,
                'total_goal' => 1,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct92 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective10,
                'product_id' => null,
                'product_other' => 'PRODUCTO 5',
                'goal_1' => 0.05,
                'goal_2' => 0.3,
                'goal_3' => 0.3,
                'goal_4' => 0.3,
                'goal_1_balance' => 0.05,
                'goal_2_balance' => 0.3,
                'goal_3_balance' => 0.3,
                'goal_4_balance' => 0.3,
                'total_goal' => 0.95,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct93 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective10,
                'product_id' => null,
                'product_other' => 'PRODUCTO 6',
                'goal_1' => 0,
                'goal_2' => 1,
                'goal_3' => 2,
                'goal_4' => 2,
                'goal_1_balance' => 0,
                'goal_2_balance' => 1,
                'goal_3_balance' => 2,
                'goal_4_balance' => 2,
                'total_goal' => 5,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct94 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective10,
                'product_id' => null,
                'product_other' => 'PRODUCTO 7',
                'goal_1' => 0.2,
                'goal_2' => 0.2,
                'goal_3' => 0.3,
                'goal_4' => 0.3,
                'goal_1_balance' => 0.2,
                'goal_2_balance' => 0.2,
                'goal_3_balance' => 0.3,
                'goal_4_balance' => 0.3,
                'total_goal' => 1,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct95 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective10,
                'product_id' => null,
                'product_other' => 'PRODUCTO 8',
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
                $idobjectiveproduct96 = DB::getPdo()->lastInsertId();
                
                                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct1,
                  'name' => 'Mantenida diversidad biológica de especies indicadoras.',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 2,
                  'goal_4' => 2,
                  'goal' => 5,
                  'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity1 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct2,
                  'name' => 'Porcentaje de especies amenazadas con medidas de conservación y manejo en ejecución',
                  'goal_1' => 0.9,
                  'goal_2' => 0.9,
                  'goal_3' => 0.95,
                  'goal_4' => 1,
                  'goal' => 3.75,
                  'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity2 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct3,
                  'name' => 'Porcentaje de especies invasoras con medidas de prevención, control y manejo en ejecución',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity3 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct4,
                  'name' => 'Estrategias de conservación de especies endémicas',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 3,
                  'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity4 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct5,
                  'name' => 'Porcentaje de áreas de ecosistemas en restauración, rehabilitación y reforestación',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity5 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct6,
                  'name' => 'Tasa promedio anual de deforestación',
                  'goal_1' => 0,
                  'goal_2' => 0.05,
                  'goal_3' => 0.03,
                  'goal_4' => 0.03,
                  'goal' => 0.11,
                  'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity6 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct7,
                  'name' => 'Asignación presupuestal del proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity7 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct8,
                  'name' => 'Porcentaje de cumplimiento de PUEAA',
                  'goal_1' => 0,
                  'goal_2' => 0.8,
                  'goal_3' => 0.8,
                  'goal_4' => 0.9,
                  'goal' => 2.5,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity8 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct9,
                  'name' => 'Porcentaje de avance en la formulación y/o ajuste de los Planes de Ordenación y Manejo de Cuencas (POMCAS), Planes de Manejo de Acuiferos (PMA) y Planes de Manejo de Microcuencas (PMM)',
                  'goal_1' => 0.4,
                  'goal_2' => 0.58,
                  'goal_3' => 0.75,
                  'goal_4' => 1,
                  'goal' => 2.73,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity9 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct10,
                  'name' => ' Porcentaje de Planes de Ordenación y Manejo de Cuencas (POMCAS), Planes de Manejo de Acuiferos (PMA) y Planes de Manejo de Microcuencas (PMM) en ejecución',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity10 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct11,
                  'name' => 'Conservación de ecosistemas clave',
                  'goal_1' => 17.2,
                  'goal_2' => 26.2,
                  'goal_3' => 35.2,
                  'goal_4' => 44.2,
                  'goal' => 122.8,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity11 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct12,
                  'name' => 'actualizado inventario de usuarios del recurso hidrico',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 1,
                  'goal' => 1,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity12 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct13,
                  'name' => ' Implementación de programas de uso eficiente y ahorro del agua',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity13 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct14,
                  'name' => 'Implementación de proyectos para proteger la oferta ambiental del acuiferos ',
                  'goal_1' => 2,
                  'goal_2' => 2,
                  'goal_3' => 3,
                  'goal_4' => 3,
                  'goal' => 10,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity14 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct15,
                  'name' => 'Asignación presupuestal del proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 2,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity15 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct16,
                  'name' => 'Estrategias tendientes a prevenir, reducir y/o mitigar la contaminación marina ',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 3,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity16 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct17,
                  'name' => 'Incrementar el volumen de residuos sólidos aprovechados',
                  'goal_1' => 0,
                  'goal_2' => 0.06,
                  'goal_3' => 0.07,
                  'goal_4' => 0.08,
                  'goal' => 0.21,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity17 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct18,
                  'name' => ' Ejecución de acciones en gestión ambiental urbana',
                  'goal_1' => 0.54,
                  'goal_2' => 0.58,
                  'goal_3' => 0.61,
                  'goal_4' => 0.65,
                  'goal' => 2.38,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity18 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct19,
                  'name' => 'Total de recursos recaudados con referencia al Total de recursos facturado por concepto de Tasa Retributiva en la vigencia',
                  'goal_1' => 0.85,
                  'goal_2' => 0.9,
                  'goal_3' => 0.9,
                  'goal_4' => 0.95,
                  'goal' => 3.6,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity19 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct20,
                  'name' => 'Porcentaje de autorizaciones ambientales con seguimiento',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity20 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct21,
                  'name' => ' Municipios con acceso a sitios de disposición final de residuos sólidos técnicamente adecuados y autorizados por la CAR (rellenos sanitarios, celdas transitorias) con referencia al total de municipios de la jurisdicción.',
                  'goal_1' => 2,
                  'goal_2' => 2,
                  'goal_3' => 2,
                  'goal_4' => 2,
                  'goal' => 8,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity21 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct22,
                  'name' => 'Porcentaje de Planes de Gestión Integral de Residuos Sólidos (PGIRS) con seguimiento a metas de aprovechamiento',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity22 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct23,
                  'name' => 'Seguimiento a generadores de residuos o desechos peligrosos en la jurisdicción',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity23 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct24,
                  'name' => 'Porcentaje de Planes de Saneamiento y Manejo de Vertimientos (PSMV) con seguimiento.',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity24 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct25,
                  'name' => 'Revisado y actualizado el marco normativo ambiental local',
                  'goal_1' => 0,
                  'goal_2' => 0.33,
                  'goal_3' => 0.66,
                  'goal_4' => 1,
                  'goal' => 1.99,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity25 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct26,
                  'name' => 'Porcentaje de suelos degradados en recuperación o rehabilitación.',
                  'goal_1' => 0,
                  'goal_2' => 0.55,
                  'goal_3' => 0.55,
                  'goal_4' => 0.6,
                  'goal' => 1.7,
                  'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity26 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct27,
                  'name' => ' Reducir el consumo de energia, agua y generación de residuos sólidos en la Corporación',
                  'goal_1' => 0.05,
                  'goal_2' => 0.08,
                  'goal_3' => 0.12,
                  'goal_4' => 0.15,
                  'goal' => 0.4,
                  'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity27 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct28,
                  'name' => 'Asignación presupuestal del proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 2,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity28 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct29,
                  'name' => 'Modelos de turismo sostenible implementados en áreas protegidas',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 2,
                  'goal_4' => 2,
                  'goal' => 5,
                  'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity29 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct30,
                  'name' => 'propuesta de protección y conservación del patrimonio natural y cultural en areas protegidas y/o borde litoral',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 1,
                  'goal' => 1,
                  'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity30 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct31,
                  'name' => 'Proyecto piloto de producción más limpia en áreas protegidas',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 3,
                  'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity31 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct32,
                  'name' => 'Porcentaje de áreas protegidas con planes de manejo en ejecución',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity32 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct33,
                  'name' => 'Implementados proyectos de energia alternativa en parques regionales marino-costeros',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 2,
                  'goal_4' => 2,
                  'goal' => 6,
                  'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity33 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct34,
                  'name' => 'Participación en redes nacionales y/o internacionales sobre gestion de areas protegidas marino costeras',
                  'goal_1' => 1,
                  'goal_2' => 2,
                  'goal_3' => 3,
                  'goal_4' => 3,
                  'goal' => 9,
                  'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity34 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct35,
                  'name' => 'porcentaje de la superficie de areas protegidas regionales declaradas homologadas o recategorizadas, inscritas en el runap',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 1,
                  'goal' => 1,
                  'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity35 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct36,
                  'name' => 'Fortalecido el instrumento de sostenibilidad financiera de las áreas protegidas marino costeras',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity36 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct37,
                  'name' => 'Asignación presupuestal del proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity37 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct38,
                  'name' => 'Porcentaje de entes territoriales asesorados en la incorporación, planificación y ejecución de acciones relacionadas con cambio climático en el marco de los instrumentos de planificación territorial.',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 3,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity38 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct39,
                  'name' => 'Implementación de acciones en manejo integrado de zonas costeras.',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 3,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity39 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct40,
                  'name' => 'Porcentaje de municipios asesorados o asistidos en la inclusión del componente ambiental en los procesos de planificación y ordenamiento territorial, con énfasis en la incorporación de las determinantes ambientales para la revisión y ajuste de los POT.',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 3,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity40 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct41,
                  'name' => 'Número de medidas de adaptación al cc y ENM.',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 2,
                  'goal_4' => 2,
                  'goal' => 5,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity41 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct42,
                  'name' => 'Número de planes de  mitigación por riesgos elaborados por fenómenos naturales, con base en metodología modificada de la UNGRD, de los barrios o sector priorizados.',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 2,
                  'goal' => 4,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity42 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct43,
                  'name' => 'Gremio de hotelero con capacidad de adaptarse al cambio climático.',
                  'goal_1' => 0,
                  'goal_2' => 0.06,
                  'goal_3' => 0.1,
                  'goal_4' => 0.15,
                  'goal' => 0.31,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity43 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct44,
                  'name' => 'diagnostico de la infraestructura existente sobre el borde litoral incluyendo lineamientos para incorporar criterios de sostenibilidad ambiental y adaptación al cc',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 1,
                  'goal' => 1,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity44 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct45,
                  'name' => 'Asignación presupuestal del proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 2,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity45 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct46,
                  'name' => 'Numero de empresas, grupos asociativos y comunidades organizadas, dedicadas a mercados verdes',
                  'goal_1' => 1,
                  'goal_2' => 2,
                  'goal_3' => 3,
                  'goal_4' => 2,
                  'goal' => 8,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity46 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct47,
                  'name' => 'Acompañamiento de iniciativas de Negocios Verdes  en turismo Sostenible, Ecoturismo, agroindustria relacionadas con servicios marino-costeros y aprovechamiento de productos agricolas  focalizados  a comunidades raizales',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 2,
                  'goal_4' => 3,
                  'goal' => 7,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity47 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct48,
                  'name' => 'Proyectos de ecoemprendimiento en alternativa Sostenible de vida Co-fianciados o acompañados en su proceso de cofinanciación a fondos y fuentes de financiación',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 3,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity48 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct49,
                  'name' => 'Proyectos de alternativas de vida sostenible dirigidos a mujeres que dependan del sitema marino-costero  en proceso de implementación',
                  'goal_1' => 1,
                  'goal_2' => 2,
                  'goal_3' => 2,
                  'goal_4' => 2,
                  'goal' => 7,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity49 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct50,
                  'name' => 'Programa de ecoemprendimiento dirigido a los tour operadores de servicios turísticos marino costeros ',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 3,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity50 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct51,
                  'name' => 'Proyecto piloto de maricultura tendiente a asegurar la sostenibilidad de los sistemas de producción de alimentos y aplicar prácticas resilientes que contribuyan al mantenimiento de los ecosistemas.',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity51 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct52,
                  'name' => 'Pagos por servicios ambientales (PSA)',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity52 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct53,
                  'name' => 'Asignación presupuestal del proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 2,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity53 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct54,
                  'name' => 'Acuerdos  de Buenas Prácticas ambientales celebrados e  implementados, dirigidos a la gestión sostenible y el uso eficiente de los ecosistemas estrategicos. ',
                  'goal_1' => 1,
                  'goal_2' => 2,
                  'goal_3' => 3,
                  'goal_4' => 4,
                  'goal' => 10,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity54 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct55,
                  'name' => 'Procesos de Certificación en normas sectoriales ambientales o de desarrollo sostenible ',
                  'goal_1' => 5,
                  'goal_2' => 10,
                  'goal_3' => 15,
                  'goal_4' => 20,
                  'goal' => 50,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity55 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct56,
                  'name' => 'Porcentaje de sectores con acompañamiento para la reconversión hacia sistemas sostenibles de producción',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity56 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct57,
                  'name' => 'Programas implementados para fomentar el consumo Responsanble ',
                  'goal_1' => 1,
                  'goal_2' => 2,
                  'goal_3' => 2,
                  'goal_4' => 2,
                  'goal' => 7,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity57 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct58,
                  'name' => 'Estrategia Integral de Postconsmo implementada en el Departamento articulada con entidades locales, nacionales e internacionales, que articule campañas,  acciones y procesos de control y regulación de los residuos en el territorio.',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity58 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct59,
                  'name' => 'Implementación del programa regional de negocios verdes por la autoridad ambiental',
                  'goal_1' => 0.75,
                  'goal_2' => 0.8,
                  'goal_3' => 0.85,
                  'goal_4' => 0.87,
                  'goal' => 3.27,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity59 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct60,
                  'name' => 'Brindado a los productores  de mercados verdes del Departamento un eventos  de promoción  regular de productos y servicios ambientales a nivel nacional y/o local -BIOCARIBE',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 1,
                  'goal' => 2,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity60 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct61,
                  'name' => 'Registrar ante la autoridad nacional competente un marca que identifique los productos y servicios ambientales de la Reserva de Biosfera Seaflower',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 3,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity61 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct62,
                  'name' => 'Adoptadas y en proceso de implementación cinco (5) guías y/o reglamentaciones de buenas practicas ambientales en el ámbito marino costero (Tour Rayas, Cayo Bolívar, reglamentación playas, personal militar en cayos,  y reglamentación turismo old point)',
                  'goal_1' => 2,
                  'goal_2' => 2,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 6,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity62 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct63,
                  'name' => 'Asignación presupuestal del proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity63 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct64,
                  'name' => 'proyectos pilotos en ctei co-financiados',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 1,
                  'goal' => 1,
                  'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity64 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct65,
                  'name' => 'Formulación e implementación de la estrategia de fortalecimiento del banco de imágenes.',
                  'goal_1' => 0,
                  'goal_2' => 0.35,
                  'goal_3' => 0.35,
                  'goal_4' => 1,
                  'goal' => 1.7,
                  'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity65 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct66,
                  'name' => 'Incremento de visitas a la página web del Observatorio de Seaflower',
                  'goal_1' => 0.2,
                  'goal_2' => 0.3,
                  'goal_3' => 0.4,
                  'goal_4' => 0.5,
                  'goal' => 1.4,
                  'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity66 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct67,
                  'name' => 'Aprovechamiento de tic para la administración de los recursos naturales.',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 3,
                  'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity67 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct68,
                  'name' => 'Monitoreos de ecosistemas estratégicos que generen indicadores de utilidad para la toma de decisiones (corales, pastos marinos, manglares y playas)',
                  'goal_1' => 4,
                  'goal_2' => 4,
                  'goal_3' => 4,
                  'goal_4' => 4,
                  'goal' => 16,
                  'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity68 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct69,
                  'name' => 'Porcentaje de redes y estaciones de monitoreo en operación ',
                  'goal_1' => 0.8,
                  'goal_2' => 0.8,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 3.6,
                  'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity69 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct70,
                  'name' => 'Fomento a la Investigación para el Desarrollo Sostenible en Seaflower',
                  'goal_1' => 2,
                  'goal_2' => 2,
                  'goal_3' => 2,
                  'goal_4' => 2,
                  'goal' => 8,
                  'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity70 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct71,
                  'name' => 'Expediciones Seaflower',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity71 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct72,
                  'name' => 'Divulgación de conocimiento técnico-científico',
                  'goal_1' => 1,
                  'goal_2' => 2,
                  'goal_3' => 2,
                  'goal_4' => 2,
                  'goal' => 7,
                  'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity72 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct73,
                  'name' => 'Divulgación y transferencia de conocimiento',
                  'goal_1' => 8,
                  'goal_2' => 8,
                  'goal_3' => 8,
                  'goal_4' => 8,
                  'goal' => 32,
                  'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity73 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct74,
                  'name' => 'Porcentaje de actualización y reporte de la información en el siac',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 3,
                  'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity74 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct75,
                  'name' => 'Asignación presupuestal del proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity75 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct76,
                  'name' => 'Programa de Cooperación y Relaciones Nacionales e Internacionales diseñada e implementada',
                  'goal_1' => 0.15,
                  'goal_2' => 0.35,
                  'goal_3' => 0.65,
                  'goal_4' => 1,
                  'goal' => 2.15,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity76 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct77,
                  'name' => 'Fortalecimiento del banco de programas y proyectos ambientales y con componentes ambientales (BPPAA).',
                  'goal_1' => 0,
                  'goal_2' => 0.15,
                  'goal_3' => 0.25,
                  'goal_4' => 0.3,
                  'goal' => 0.7,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity77 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct78,
                  'name' => 'Implementación del Sistema de Gestión Ambiental (SGA)',
                  'goal_1' => 0.1,
                  'goal_2' => 0.2,
                  'goal_3' => 0.5,
                  'goal_4' => 0.7,
                  'goal' => 1.5,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity78 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct79,
                  'name' => 'Experiencias demostrativas en gestión ambiental institucional',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 2,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity79 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct80,
                  'name' => 'TIC para el Gobierno Abierto: Esquema de atención al ciudadano por diferentes canales',
                  'goal_1' => 5,
                  'goal_2' => 5,
                  'goal_3' => 5,
                  'goal_4' => 5,
                  'goal' => 20,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity80 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct81,
                  'name' => 'TIC para la Gestión: Automatización de procesos',
                  'goal_1' => 0.1,
                  'goal_2' => 0.3,
                  'goal_3' => 0.5,
                  'goal_4' => 0.8,
                  'goal' => 1.7,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity81 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct82,
                  'name' => 'Seguridad y Privacidad de la Información',
                  'goal_1' => 0.7,
                  'goal_2' => 0.9,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 3.6,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity82 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct83,
                  'name' => 'Gestión Financiera de ingresos',
                  'goal_1' => 8586,
                  'goal_2' => 18132,
                  'goal_3' => 21448,
                  'goal_4' => 22092,
                  'goal' => 70258,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity83 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct84,
                  'name' => 'Tiempo promedio de trámite para la resolución de autorizaciones ambientales otorgadas por la Corporación',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity84 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct85,
                  'name' => 'Porcentaje de procesos sancionatorios resueltos',
                  'goal_1' => 0,
                  'goal_2' => 0.55,
                  'goal_3' => 0.6,
                  'goal_4' => 0.65,
                  'goal' => 1.8,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity85 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct86,
                  'name' => 'Porcentaje de avance en la formulñación POMIUAC caribe Insular',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 1,
                  'goal' => 1,
                  'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity86 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct87,
                  'name' => 'Plan Anticorrupción y de  Atención al Ciudadano',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 0.75,
                  'goal_4' => 1,
                  'goal' => 3.75,
                  'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity87 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct88,
                  'name' => 'Asignación presupuestal del proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 2,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity88 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective10,
                  'product_id' =>$idobjectiveproduct89,
                  'name' => 'Conocimiento ambiental de la población  estudiantil de primaria y secundaria                                                         ',
                  'goal_1' => 0.2,
                  'goal_2' => 0.4,
                  'goal_3' => 0.6,
                  'goal_4' => 0.8,
                  'goal' => 2,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity89 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective10,
                  'product_id' =>$idobjectiveproduct90,
                  'name' => 'Capacitación de prestadores de servicios turísticos en civilidad ambiental ',
                  'goal_1' => 0,
                  'goal_2' => 0.1,
                  'goal_3' => 0.15,
                  'goal_4' => 0.15,
                  'goal' => 0.4,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity90 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective10,
                  'product_id' =>$idobjectiveproduct91,
                  'name' => 'Apropiación del conocimiento ambiental en turistas y visitantes',
                  'goal_1' => 0.05,
                  'goal_2' => 0.2,
                  'goal_3' => 0.4,
                  'goal_4' => 0.4,
                  'goal' => 1.05,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity91 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective10,
                  'product_id' =>$idobjectiveproduct92,
                  'name' => 'Campaña Educativa sobre Valores Ambientales Cívicos ',
                  'goal_1' => 0.05,
                  'goal_2' => 0.3,
                  'goal_3' => 0.3,
                  'goal_4' => 0.35,
                  'goal' => 1,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity92 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective10,
                  'product_id' =>$idobjectiveproduct93,
                  'name' => 'Encuentros Trimestrales con la Comunidad Raizal',
                  'goal_1' => 0.05,
                  'goal_2' => 0.3,
                  'goal_3' => 0.3,
                  'goal_4' => 0.3,
                  'goal' => 0.95,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity93 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective10,
                  'product_id' =>$idobjectiveproduct94,
                  'name' => 'Fortalecimiento de Grupos Juveniles Team Seaflower',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 2,
                  'goal_4' => 2,
                  'goal' => 5,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity94 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective10,
                  'product_id' =>$idobjectiveproduct95,
                  'name' => 'Ejecución de acciones en Educación Ambiental',
                  'goal_1' => 0.2,
                  'goal_2' => 0.2,
                  'goal_3' => 0.3,
                  'goal_4' => 0.3,
                  'goal' => 1,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity95 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective10,
                  'product_id' =>$idobjectiveproduct96,
                  'name' => 'Asignación presupuestal del proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 2,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity96 = DB::getPdo()->lastInsertId();


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity2,
          'year' =>1,
          'value' => 0.85,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia1 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity3,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia2 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity5,
          'year' =>1,
          'value' => 0.9,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia3 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity7,
          'year' =>1,
          'value' => 0.01,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia5 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity9,
          'year' =>1,
          'value' => 0.4,
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
          'value' => 14,
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
          'activity_id' => $idactivity18,
          'year' =>1,
          'value' => 0.54,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia12 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity20,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia13 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity21,
          'year' =>1,
          'value' => 2,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia14 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity23,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia15 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity24,
          'year' =>1,
          'value' => 0.75,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia16 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity27,
          'year' =>1,
          'value' => 0.02,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia17 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity28,
          'year' =>1,
          'value' => 0.01,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia18 = DB::getPdo()->lastInsertId(); 



         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity32,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia19 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity34,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia20 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity36,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia21 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity37,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia22 = DB::getPdo()->lastInsertId(); 







         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity45,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia23 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity46,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia24 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity47,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia25 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity49,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia26 = DB::getPdo()->lastInsertId(); 



         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity53,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia27 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity54,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia28 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity55,
          'year' =>1,
          'value' => 5,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia29 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity56,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia30 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity57,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia31 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity58,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia32 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity59,
          'year' =>1,
          'value' => 0.7,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia33 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity62,
          'year' =>1,
          'value' => 2,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia34 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity63,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia35 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity66,
          'year' =>1,
          'value' => 17.79,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia36 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity68,
          'year' =>1,
          'value' => 4,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia37 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity69,
          'year' =>1,
          'value' => 0.8,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia38 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity70,
          'year' =>1,
          'value' => 2,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia39 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity71,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia40 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity72,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia41 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity73,
          'year' =>1,
          'value' => 8,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia42 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity75,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia43 = DB::getPdo()->lastInsertId(); 




         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity80,
          'year' =>1,
          'value' => 5,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia44 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity82,
          'year' =>1,
          'value' => 0.7,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia45 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity83,
          'year' =>1,
          'value' => 5248,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia46 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity84,
          'year' =>1,
          'value' => 0.6,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia47 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity87,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia48 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity88,
          'year' =>1,
          'value' => 0.01,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia49 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity89,
          'year' =>1,
          'value' => 0.2,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia50 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity91,
          'year' =>1,
          'value' => 0.05,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia51 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity92,
          'year' =>1,
          'value' => 0.05,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia52 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity93,
          'year' =>1,
          'value' => 0.03,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia53 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity95,
          'year' =>1,
          'value' => 0.2,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia54 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity96,
          'year' =>1,
          'value' => 0.01,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia55 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity2,
          'year' =>2,
          'value' => 0.83,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia56 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity3,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia57 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity5,
          'year' =>2,
          'value' => 0.6,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia59 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity6,
          'year' =>2,
          'value' => 0.03,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia60 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity7,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia61 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity8,
          'year' =>2,
          'value' => 0.8,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia62 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity9,
          'year' =>2,
          'value' => 0.55,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia63 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity10,
          'year' =>2,
          'value' => 0.8,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia64 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity13,
          'year' =>2,
          'value' => 0.8,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia67 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity15,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia69 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity17,
          'year' =>2,
          'value' => 0.06,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia71 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity18,
          'year' =>2,
          'value' => 0.42,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia72 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity19,
          'year' =>2,
          'value' => 0.9,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia73 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity20,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia74 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity21,
          'year' =>2,
          'value' => 2,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia75 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity22,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia76 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity23,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia77 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity24,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia78 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity25,
          'year' =>2,
          'value' => 0.33,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia79 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity26,
          'year' =>2,
          'value' => 0.2,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia80 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity27,
          'year' =>2,
          'value' => 0.03,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia81 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity28,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia82 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity29,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia83 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity31,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia85 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity32,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia86 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity34,
          'year' =>2,
          'value' => 2,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia88 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity36,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia90 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity37,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia91 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity38,
          'year' =>2,
          'value' => 0.5,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia92 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity39,
          'year' =>2,
          'value' => 0.95,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia93 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity40,
          'year' =>2,
          'value' => 0.5,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia94 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity42,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia96 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity43,
          'year' =>2,
          'value' => 0.04,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia97 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity45,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia99 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity46,
          'year' =>2,
          'value' => 2,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia100 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity47,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia101 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity48,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia102 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity49,
          'year' =>2,
          'value' => 2,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia103 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity50,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia104 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity51,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia105 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity52,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia106 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity53,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia107 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity54,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia108 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity55,
          'year' =>2,
          'value' => 10,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia109 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity56,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia110 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity57,
          'year' =>2,
          'value' => 2,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia111 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity58,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia112 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity59,
          'year' =>2,
          'value' => 0.8,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia113 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity60,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia114 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity62,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia116 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity63,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia117 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity65,
          'year' =>2,
          'value' => 0.35,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia119 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity66,
          'year' =>2,
          'value' => 0.3,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia120 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity68,
          'year' =>2,
          'value' => 3,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia122 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity69,
          'year' =>2,
          'value' => 0.8,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia123 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity70,
          'year' =>2,
          'value' => 2,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia124 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity71,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia125 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity72,
          'year' =>2,
          'value' => 2,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia126 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity73,
          'year' =>2,
          'value' => 8,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia127 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity74,
          'year' =>2,
          'value' => 0.8,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia128 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity75,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia129 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity76,
          'year' =>2,
          'value' => 0.35,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia130 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity77,
          'year' =>2,
          'value' => 0.15,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia131 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity79,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia133 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity80,
          'year' =>2,
          'value' => 5,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia134 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity81,
          'year' =>2,
          'value' => 0.3,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia135 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity82,
          'year' =>2,
          'value' => 0.9,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia136 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity83,
          'year' =>2,
          'value' => 17067,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia137 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity84,
          'year' =>2,
          'value' => 0.14,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia138 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity85,
          'year' =>2,
          'value' => 0.07,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia139 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity87,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia141 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity88,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia142 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity89,
          'year' =>2,
          'value' => 0.4,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia143 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity90,
          'year' =>2,
          'value' => 0.1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia144 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity91,
          'year' =>2,
          'value' => 0.18,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia145 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity92,
          'year' =>2,
          'value' => 0.2,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia146 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity93,
          'year' =>2,
          'value' => 0.225,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia147 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity94,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia148 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity95,
          'year' =>2,
          'value' => 0.2,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia149 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity96,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia150 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity1,
          'year' =>3,
          'value' => 2,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia151 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity2,
          'year' =>3,
          'value' => 0.95,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia152 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity3,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia153 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity4,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia154 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity5,
          'year' =>3,
          'value' => 0.95,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia155 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity6,
          'year' =>3,
          'value' => 0.01,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia156 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity7,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia157 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity8,
          'year' =>3,
          'value' => 0.63,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia158 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity9,
          'year' =>3,
          'value' => 0.68,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia159 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity10,
          'year' =>3,
          'value' => 0.8,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia160 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity13,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia163 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity14,
          'year' =>3,
          'value' => 3,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia164 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity15,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia165 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity16,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia166 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity17,
          'year' =>3,
          'value' => 0.07,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia167 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity18,
          'year' =>3,
          'value' => 0.42,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia168 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity20,
          'year' =>3,
          'value' => 0.13,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia170 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity21,
          'year' =>3,
          'value' => 2,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia171 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity22,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia172 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity23,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia173 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity24,
          'year' =>3,
          'value' => 0.5,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia174 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity25,
          'year' =>3,
          'value' => 0.05,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia175 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity26,
          'year' =>3,
          'value' => 0.23,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia176 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity27,
          'year' =>3,
          'value' => 0.11,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia177 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity28,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia178 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity29,
          'year' =>3,
          'value' => 2,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia179 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity31,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia181 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity32,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia182 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity33,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia183 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity34,
          'year' =>3,
          'value' => 3,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia184 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity36,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia186 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity37,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia187 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity38,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia188 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity39,
          'year' =>3,
          'value' => 0.88,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia189 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity40,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia190 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity41,
          'year' =>3,
          'value' => 2,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia191 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity42,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia192 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity43,
          'year' =>3,
          'value' => 0.1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia193 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity45,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia195 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity46,
          'year' =>3,
          'value' => 3,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia196 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity47,
          'year' =>3,
          'value' => 2,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia197 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity48,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia198 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity49,
          'year' =>3,
          'value' => 2,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia199 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity50,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia200 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity51,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia201 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity53,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia203 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity54,
          'year' =>3,
          'value' => 3,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia204 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity55,
          'year' =>3,
          'value' => 15,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia205 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity56,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia206 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity57,
          'year' =>3,
          'value' => 2,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia207 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity58,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia208 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity59,
          'year' =>3,
          'value' => 0.85,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia209 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity62,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia212 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity65,
          'year' =>3,
          'value' => 0.35,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia215 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity66,
          'year' =>3,
          'value' => 0.4,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia216 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity68,
          'year' =>3,
          'value' => 4,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia218 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity69,
          'year' =>3,
          'value' => 0.75,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia219 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity70,
          'year' =>3,
          'value' => 2,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia220 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity71,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia221 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity72,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia222 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity73,
          'year' =>3,
          'value' => 8,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia223 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity74,
          'year' =>3,
          'value' => 0.8,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia224 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity75,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia225 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity76,
          'year' =>3,
          'value' => 0.44,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia226 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity77,
          'year' =>3,
          'value' => 0.33,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia227 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity78,
          'year' =>3,
          'value' => 0.55,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia228 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity79,
          'year' =>3,
          'value' => 2,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia229 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity80,
          'year' =>3,
          'value' => 4,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia230 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity81,
          'year' =>3,
          'value' => 0.43,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia231 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity82,
          'year' =>3,
          'value' => 0.71,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia232 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity83,
          'year' =>3,
          'value' => 12706,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia233 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity85,
          'year' =>3,
          'value' => 0.08,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia235 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity87,
          'year' =>3,
          'value' => 0.45,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia237 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity88,
          'year' =>3,
          'value' => 0.75,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia238 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity89,
          'year' =>3,
          'value' => 0.7,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia239 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity90,
          'year' =>3,
          'value' => 0.2,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia240 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity91,
          'year' =>3,
          'value' => 0.3,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia241 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity92,
          'year' =>3,
          'value' => 0.3,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia242 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity93,
          'year' =>3,
          'value' => 0.3,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia243 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity94,
          'year' =>3,
          'value' => 2,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia244 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity95,
          'year' =>3,
          'value' => 0.4,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia245 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity96,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia246 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity1,
          'year' =>4,
          'value' => 2,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia247 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity2,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia248 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity3,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia249 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity4,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia250 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity5,
          'year' =>4,
          'value' => 0.972,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia251 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity6,
          'year' =>4,
          'value' => 0.01,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia252 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity7,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia253 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity8,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia254 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity9,
          'year' =>4,
          'value' => 0.73,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia255 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity10,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia256 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity11,
          'year' =>4,
          'value' => 28,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia257 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity12,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia258 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity13,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia259 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity14,
          'year' =>4,
          'value' => 3,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia260 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity15,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia261 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity16,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia262 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity17,
          'year' =>4,
          'value' => 0.05,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia263 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity18,
          'year' =>4,
          'value' => 0.35,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia264 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity19,
          'year' =>4,
          'value' => 0.95,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia265 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity20,
          'year' =>4,
          'value' => 0.35,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia266 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity21,
          'year' =>4,
          'value' => 100,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia267 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity22,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia268 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity23,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia269 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity24,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia270 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity25,
          'year' =>4,
          'value' => 0.55,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia271 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity26,
          'year' =>4,
          'value' => 0.45,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia272 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity27,
          'year' =>4,
          'value' => 0.12,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia273 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity28,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia274 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity29,
          'year' =>4,
          'value' => 2,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia275 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity31,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia277 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity32,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia278 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity33,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia279 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity34,
          'year' =>4,
          'value' => 3,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia280 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity36,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia282 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity37,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia283 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity38,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia284 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity39,
          'year' =>4,
          'value' => 0.82,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia285 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity40,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia286 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity41,
          'year' =>4,
          'value' => 2,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia287 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity42,
          'year' =>4,
          'value' => 8,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia288 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity43,
          'year' =>4,
          'value' => 0.15,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia289 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity44,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia290 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity45,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia291 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity46,
          'year' =>4,
          'value' => 8,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia292 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity47,
          'year' =>4,
          'value' => 3,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia293 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity48,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia294 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity49,
          'year' =>4,
          'value' => 2,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia295 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity50,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia296 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity51,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia297 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity53,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia299 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity54,
          'year' =>4,
          'value' => 4,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia300 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity55,
          'year' =>4,
          'value' => 20,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia301 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity56,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia302 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity57,
          'year' =>4,
          'value' => 2,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia303 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity58,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia304 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity59,
          'year' =>4,
          'value' => 0.87,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia305 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity61,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia307 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity63,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia309 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity64,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia310 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity65,
          'year' =>4,
          'value' => 0.97,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia311 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity66,
          'year' =>4,
          'value' => 0.5,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia312 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity67,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia313 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity68,
          'year' =>4,
          'value' => 4,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia314 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity69,
          'year' =>4,
          'value' => 0.8,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia315 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity70,
          'year' =>4,
          'value' => 2,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia316 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity71,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia317 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity72,
          'year' =>4,
          'value' => 2,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia318 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity73,
          'year' =>4,
          'value' => 8,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia319 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity74,
          'year' =>4,
          'value' => 0.75,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia320 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity75,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia321 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity76,
          'year' =>4,
          'value' => 0.89,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia322 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity77,
          'year' =>4,
          'value' => 0.3,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia323 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity79,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia325 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity80,
          'year' =>4,
          'value' => 5,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia326 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity81,
          'year' =>4,
          'value' => 0.45,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia327 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity82,
          'year' =>4,
          'value' => 0.79,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia328 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity83,
          'year' =>4,
          'value' => 32660,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia329 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity84,
          'year' =>4,
          'value' => 0.89,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia330 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity85,
          'year' =>4,
          'value' => 0.27,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia331 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity86,
          'year' =>4,
          'value' => 0.61,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia332 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity87,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia333 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity88,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia334 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity89,
          'year' =>4,
          'value' => 0.8,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia335 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity90,
          'year' =>4,
          'value' => 0.15,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia336 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity91,
          'year' =>4,
          'value' => 0.4,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia337 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity92,
          'year' =>4,
          'value' => 0.35,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia338 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity93,
          'year' =>4,
          'value' => 0.35,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia339 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity94,
          'year' =>4,
          'value' => 2,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia340 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity95,
          'year' =>4,
          'value' => 0.3,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia341 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity96,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia342 = DB::getPdo()->lastInsertId(); 
          
    DB::table('financing_sources')->insert([
    'father_id' => 14,
    'code' => '1.1.1.1.1.1.2.1',
    'name' => 'Participación del porcentaje ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
    'description' => 'Participación del porcentaje ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
    'type_id' => 22,
    'final_level' => true,
    'group_id' => 11,
    ]);
    $idFuente1 = DB::getPdo()->lastInsertId();
    

    DB::table('financing_sources')->insert([
            'father_id' => 11,
            'code' => '1.1.1.1.1.1.1.1',
            'name' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
            'description' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 11,
            ]);
            $idFuente2 = DB::getPdo()->lastInsertId();
            
          DB::table('financing_sources')->insert([
            'father_id' => 90,
            'code' => '1.1.2.4.2.3',
            'name' => 'Venta de bienes y servicios',
            'description' => 'Venta de bienes y servicios',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 11,
            ]);
            $idFuente3 = DB::getPdo()->lastInsertId();
            
          DB::table('financing_sources')->insert([
            'father_id' => 27,
            'code' => '1.1.2.1.1.1.1.1',
            'name' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia actual)',
            'description' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia actual)',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 11,
            ]);
            $idFuente4 = DB::getPdo()->lastInsertId();
            
          DB::table('financing_sources')->insert([
            'father_id' => 208,
            'code' => '1.2.5.1.3',
            'name' => 'Otros Convenios',
            'description' => 'Otros Convenios',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 11,
            ]);
            $idFuente5 = DB::getPdo()->lastInsertId();
    
    DB::table('financing_sources')->insert([
      'father_id' => 1,
      'code' => '1.3',
      'name' => 'Otros',
      'description' => 'Otros',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 11,
      ]);
      $idFuente6 = DB::getPdo()->lastInsertId();
    
          DB::table('financing_sources')->insert([
            'father_id' => 42,
            'code' => '1.1.2.2.1.1.1.1',
            'name' => 'Tasa retributiva (vigencia actual)',
            'description' => 'Tasa retributiva (vigencia actual)',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 11,
            ]);
            $idFuente7 = DB::getPdo()->lastInsertId();
            
          DB::table('financing_sources')->insert([
            'father_id' => 54,
            'code' => '1.1.2.2.1.1.5.1',
            'name' => 'Otras tasas (vigencia actual)',
            'description' => 'Otras tasas (vigencia actual)',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 11,
            ]);
            $idFuente8 = DB::getPdo()->lastInsertId();
            
          DB::table('financing_sources')->insert([
            'father_id' => 45,
            'code' => '1.1.2.2.1.1.2.1',
            'name' => 'Tasa por el uso del agua (vigencia actual)',
            'description' => 'Tasa por el uso del agua (vigencia actual)',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 11,
            ]);
            $idFuente9 = DB::getPdo()->lastInsertId();
            
          DB::table('financing_sources')->insert([
            'father_id' => 84,
            'code' => '1.1.2.3.1.1.1',
            'name' => 'Multas ambientales (vigencia actual)',
            'description' => 'Multas ambientales (vigencia actual)',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 11,
            ]);
            $idFuente10 = DB::getPdo()->lastInsertId();
            
          DB::table('financing_sources')->insert([
            'father_id' => 79,
            'code' => '1.1.2.2.2.8.1',
            'name' => 'Otros servicios (vigencia actual)',
            'description' => 'Otros servicios (vigencia actual)',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 11,
            ]);
            $idFuente11 = DB::getPdo()->lastInsertId();
                      
          DB::table('financing_sources')->insert([
            'father_id' => 241,
            'code' => '1.2.6.3.5',
            'name' => 'Recuperación de cartera Otras tasas',
            'description' => 'Recuperación de cartera Otras tasas',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 11,
            ]);
            $idFuente12 = DB::getPdo()->lastInsertId();
            
          DB::table('financing_sources')->insert([
            'father_id' => 250,
            'code' => '1.2.7.4',
            'name' => 'Otros recursos del balance',
            'description' => 'Otros recursos del balance',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 11,
            ]);
            $idFuente13 = DB::getPdo()->lastInsertId();
            
          DB::table('financing_sources')->insert([
            'father_id' => 119,
            'code' => '1.1.2.5.1.1.1.4',
            'name' => 'Aportes de la Nación Funcionamiento',
            'description' => 'Aportes de la Nación Funcionamiento',
            'type_id' => 23,
            'final_level' => true,
            'group_id' => 11,
            ]);
            $idFuente14 = DB::getPdo()->lastInsertId();
            
          DB::table('financing_sources')->insert([
            'father_id' => 118,
            'code' => '1.1.2.5.1.1.2',
            'name' => 'Aportes de la Nación para Inversión',
            'description' => 'Aportes de la Nación para Inversión',
            'type_id' => 23,
            'final_level' => true,
            'group_id' => 11,
            ]);
            $idFuente15 = DB::getPdo()->lastInsertId();

            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente2,
              'value' => 1177747500,
              'functioning_percentage' => 0,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 100,
              'functioning' => 0,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 1177747500,
              'year' => 1,
              ]);
              $idPlan1 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente3,
              'value' => 120000000,
              'functioning_percentage' => 0,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 100,
              'functioning' => 0,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 120000000,
              'year' => 1,
              ]);
              $idPlan2 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente4,
              'value' => 612357057,
              'functioning_percentage' => 30,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 70,
              'functioning' => 183707117.1,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 428649939.9,
              'year' => 1,
              ]);
              $idPlan3 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente5,
              'value' => 1554417176,
              'functioning_percentage' => 0,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 100,
              'functioning' => 0,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 1554417176,
              'year' => 1,
              ]);
              $idPlan4 = DB::getPdo()->lastInsertId();
              
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente7,
              'value' => 100000000,
              'functioning_percentage' => 0,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 100,
              'functioning' => 0,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 100000000,
              'year' => 1,
              ]);
              $idPlan5 = DB::getPdo()->lastInsertId();

              DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente9,
              'value' => 6500000,
              'functioning_percentage' => 48.95,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 51.05,
              'functioning' => 3181750,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 3318250,
              'year' => 1,
              ]);
              $idPlan6 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente10,
              'value' => 90000000,
              'functioning_percentage' => 100,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 0,
              'functioning' => 90000000,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 0,
              'year' => 1,
              ]);
              $idPlan7 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente11,
              'value' => 1352255961,
              'functioning_percentage' => 52,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 48,
              'functioning' => 703173099.72,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 649082861.28,
              'year' => 1,
              ]);
              $idPlan8 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente12,
              'value' => 289560748,
              'functioning_percentage' => 100,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 0,
              'functioning' => 289560748,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 0,
              'year' => 1,
              ]);
              $idPlan9 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente13,
              'value' => 16883100,
              'functioning_percentage' => 100,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 0,
              'functioning' => 16883100,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 0,
              'year' => 1,
              ]);
              $idPlan10 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente14,
              'value' => 2467818448,
              'functioning_percentage' => 100,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 0,
              'functioning' => 2467818448,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 0,
              'year' => 1,
              ]);
              $idPlan11 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente15,
              'value' => 2975777471,
              'functioning_percentage' => 0,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 100,
              'functioning' => 0,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 2975777471,
              'year' => 1,
              ]);
              $idPlan12 = DB::getPdo()->lastInsertId();

              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente2,
                'value' => 1244150000,
                'functioning_percentage' => 0,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 100,
                'functioning' => 0,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 1244150000,
                'year' => 2,
                ]);
                $idPlan13 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente3,
                'value' => 124800000,
                'functioning_percentage' => 0,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 100,
                'functioning' => 0,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 124800000,
                'year' => 2,
                ]);
                $idPlan14 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente4,
                'value' => 500000000,
                'functioning_percentage' => 30,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 70,
                'functioning' => 150000000,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 350000000,
                'year' => 2,
                ]);
                $idPlan15 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente5,
                'value' => 8118469634,
                'functioning_percentage' => 5,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 95,
                'functioning' => 405923481.7,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 7712546152.3,
                'year' => 2,
                ]);
                $idPlan16 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente7,
                'value' => 105000000,
                'functioning_percentage' => 100,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 0,
                'functioning' => 105000000,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 0,
                'year' => 2,
                ]);
                $idPlan17 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente9,
                'value' => 6500000,
                'functioning_percentage' => 55,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 45,
                'functioning' => 3575000,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 2925000,
                'year' => 2,
                ]);
                $idPlan18 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente11,
                'value' => 1260000000,
                'functioning_percentage' => 100,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 0,
                'functioning' => 1260000000,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 0,
                'year' => 2,
                ]);
                $idPlan19 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente12,
                'value' => 93841823,
                'functioning_percentage' => 51,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 49,
                'functioning' => 47859329.73,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 45982493.27,
                'year' => 2,
                ]);
                $idPlan20 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente14,
                'value' => 2576458043,
                'functioning_percentage' => 100,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 0,
                'functioning' => 2576458043,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 0,
                'year' => 2,
                ]);
                $idPlan21 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente15,
                'value' => 3487096000,
                'functioning_percentage' => 0,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 100,
                'functioning' => 0,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 3487096000,
                'year' => 2,
                ]);
                $idPlan22 = DB::getPdo()->lastInsertId();

                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente1,
                  'value' => 1209150000,
                  'functioning_percentage' => 0,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 100,
                  'functioning' => 0,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 1209150000,
                  'year' => 3,
                  ]);
                  $idPlan23 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente3,
                  'value' => 300000000,
                  'functioning_percentage' => 0,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 100,
                  'functioning' => 0,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 300000000,
                  'year' => 3,
                  ]);
                  $idPlan24 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente4,
                  'value' => 490000000,
                  'functioning_percentage' => 30,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 70,
                  'functioning' => 147000000,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 343000000,
                  'year' => 3,
                  ]);
                  $idPlan25 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente5,
                  'value' => 1765530955,
                  'functioning_percentage' => 0,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 100,
                  'functioning' => 0,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 1765530955,
                  'year' => 3,
                  ]);
                  $idPlan26 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente6,
                  'value' => 448699958,
                  'functioning_percentage' => 0,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 100,
                  'functioning' => 0,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 448699958,
                  'year' => 3,
                  ]);
                  $idPlan27 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente7,
                  'value' => 110000000,
                  'functioning_percentage' => 0,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 100,
                  'functioning' => 0,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 110000000,
                  'year' => 3,
                  ]);
                  $idPlan28 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente9,
                  'value' => 12000000,
                  'functioning_percentage' => 40,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 60,
                  'functioning' => 4800000,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 7200000,
                  'year' => 3,
                  ]);
                  $idPlan29 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente11,
                  'value' => 1300000000,
                  'functioning_percentage' => 0,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 100,
                  'functioning' => 0,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 1300000000,
                  'year' => 3,
                  ]);
                  $idPlan30 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente12,
                  'value' => 100000000,
                  'functioning_percentage' => 100,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 0,
                  'functioning' => 100000000,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 0,
                  'year' => 3,
                  ]);
                  $idPlan31 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente13,
                  'value' => 1912642227,
                  'functioning_percentage' => 94,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 6,
                  'functioning' => 1797883693.38,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 114758533.62,
                  'year' => 3,
                  ]);
                  $idPlan32 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente14,
                  'value' => 2701081916,
                  'functioning_percentage' => 100,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 0,
                  'functioning' => 2701081916,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 0,
                  'year' => 3,
                  ]);
                  $idPlan33 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente15,
                  'value' => 2806471634,
                  'functioning_percentage' => 0,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 100,
                  'functioning' => 0,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 2806471634,
                  'year' => 3,
                  ]);
                  $idPlan34 = DB::getPdo()->lastInsertId();
                  
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente1,
                    'value' => 1274100000,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 100,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 1274100000,
                    'year' => 4,
                    ]);
                    $idPlan35 = DB::getPdo()->lastInsertId();
                    
           
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente3,
                    'value' => 300000000,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 100,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 300000000,
                    'year' => 4,
                    ]);
                    $idPlan36 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente4,
                    'value' => 550000000,
                    'functioning_percentage' => 30,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 70,
                    'functioning' => 165000000,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 385000000,
                    'year' => 4,
                    ]);
                    $idPlan37 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente5,
                    'value' => 2973671675,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 100,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 2973671675,
                    'year' => 4,
                    ]);
                    $idPlan38 = DB::getPdo()->lastInsertId();
                    
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente7,
                    'value' => 110000000,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 100,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 110000000,
                    'year' => 4,
                    ]);
                    $idPlan39 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente9,
                    'value' => 31895715,
                    'functioning_percentage' => 58.882,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 41.118,
                    'functioning' => 18780834.9063,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 13114880.0937,
                    'year' => 4,
                    ]);
                    $idPlan40 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente10,
                    'value' => 318101804,
                    'functioning_percentage' => 100,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 0,
                    'functioning' => 318101804,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 0,
                    'year' => 4,
                    ]);
                    $idPlan41 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente11,
                    'value' => 1821358552,
                    'functioning_percentage' => 0,                      'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 100,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 1821358552,
                    'year' => 4,
                    ]);
                    $idPlan42 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente12,
                    'value' => 1404000008,
                    'functioning_percentage' => 94,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 6,
                    'functioning' => 1319760007.52,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 84240000.48,
                    'year' => 4,
                    ]);
                    $idPlan43 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente13,
                    'value' => 421336193,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 100,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 421336193,
                    'year' => 4,
                    ]);
                    $idPlan44 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente14,
                    'value' => 2792001085,
                    'functioning_percentage' => 100,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 0,
                    'functioning' => 2792001085,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 0,
                    'year' => 4,
                    ]);
                    $idPlan45 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente15,
                    'value' => 2298988779,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 100,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 2298988779,
                    'year' => 4,
                    ]);
                    $idPlan46 = DB::getPdo()->lastInsertId();

                    DB::table('implementations')->insert([
                      'p_a_i_s_id'=>$idpai1,
                      ]);
                      $idImplementation1 = DB::getPdo()->lastInsertId();

                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 1362280530,
                      'financial_plans_id' => $idPlan1,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo1 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 129504785,
                      'financial_plans_id' => $idPlan2,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo2 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 454429401,
                      'financial_plans_id' => $idPlan3,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo3 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 1487132837,
                      'financial_plans_id' => $idPlan4,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo4 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 0,
                      'financial_plans_id' => $idPlan5,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo5 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 7062865,
                      'financial_plans_id' => $idPlan6,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo6 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 0,
                      'financial_plans_id' => $idPlan7,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo7 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 1253402470,
                      'financial_plans_id' => $idPlan8,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo8 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 441963100,
                      'financial_plans_id' => $idPlan9,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo9 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 16883100,
                      'financial_plans_id' => $idPlan10,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo10 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 2338610849,
                      'financial_plans_id' => $idPlan11,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo11 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 1039269464,
                      'financial_plans_id' => $idPlan12,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo12 = DB::getPdo()->lastInsertId();
                      
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 1233719435,
                        'financial_plans_id' => $idPlan13,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo13 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 390866051,
                        'financial_plans_id' => $idPlan14,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo14 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 411449398,
                        'financial_plans_id' => $idPlan15,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo15 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 919307044,
                        'financial_plans_id' => $idPlan16,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo16 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 0,
                        'financial_plans_id' => $idPlan17,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo17 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 2712886,
                        'financial_plans_id' => $idPlan18,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo18 = DB::getPdo()->lastInsertId();
                        
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 1499135857,
                        'financial_plans_id' => $idPlan19,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo19 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 791029737,
                        'financial_plans_id' => $idPlan20,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo20 = DB::getPdo()->lastInsertId();

                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 2391620982,
                        'financial_plans_id' => $idPlan21,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo21 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 1862455689,
                        'financial_plans_id' => $idPlan22,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo22 = DB::getPdo()->lastInsertId();
                        
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 1285704937,
                          'financial_plans_id' => $idPlan23,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo23 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 306014222,
                          'financial_plans_id' => $idPlan24,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo24 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 454623878,
                          'financial_plans_id' => $idPlan25,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo25 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 1764621367,
                          'financial_plans_id' => $idPlan26,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo26 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 0,
                          'financial_plans_id' => $idPlan27,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo27 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 0,
                          'financial_plans_id' => $idPlan28,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo28 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 0,
                          'financial_plans_id' => $idPlan29,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo29 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 1625394329,
                          'financial_plans_id' => $idPlan30,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo30 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 26963952,
                          'financial_plans_id' => $idPlan31,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo31 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 1576915923,
                          'financial_plans_id' => $idPlan32,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo32 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 2454441692,
                          'financial_plans_id' => $idPlan33,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo33 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 1659854936,
                          'financial_plans_id' => $idPlan34,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo34 = DB::getPdo()->lastInsertId();
                          
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 1420164634,
                            'financial_plans_id' => $idPlan35,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo35 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 361730147,
                            'financial_plans_id' => $idPlan36,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo36 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 497319238,
                            'financial_plans_id' => $idPlan37,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo37 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 1320899665,
                            'financial_plans_id' => $idPlan38,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo38 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 0,
                            'financial_plans_id' => $idPlan39,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo39 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 0,
                            'financial_plans_id' => $idPlan40,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo40 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 0,
                            'financial_plans_id' => $idPlan41,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo41 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 2988501161,
                            'financial_plans_id' => $idPlan42,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo42 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 1857813848,
                            'financial_plans_id' => $idPlan43,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo43 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 421336193,
                            'financial_plans_id' => $idPlan44,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo44 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 2681379555,
                            'financial_plans_id' => $idPlan45,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo45 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 1810399558,
                            'financial_plans_id' => $idPlan46,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo46 = DB::getPdo()->lastInsertId();                                           

             DB::table('cost_sources')->insert([
              'father_id' => 2,
              'code' => '2.1.1',
              'name' => 'GASTOS DE PERSONAL',
              'description' => 'GASTOS DE PERSONAL',
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'group_id' => 11,
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
              'group_id' => 11,
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
              'group_id' => 11,
              ]);
              $idFuenteGasto3 = DB::getPdo()->lastInsertId();
              
               
             DB::table('cost_sources')->insert([
              'father_id' => 19,
              'code' => '2.1.3.3.1',
              'name' => 'Comisiones y otros gastos',
              'description' => 'Comisiones y otros gastos',
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'group_id' => 11,
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
              'group_id' => 11,
              ]);
              $idFuenteGasto9 = DB::getPdo()->lastInsertId();
              
               
             DB::table('cost_sources')->insert([
              'father_id' => 29,
              'code' => '2.1.4.3.1',
              'name' => 'Cuota de fiscalización y auditaje',
              'description' => 'Cuota de fiscalización y auditaje',
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'group_id' => 11,
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
              'group_id' => 11,
              ]);
              $idFuenteGasto5 = DB::getPdo()->lastInsertId();
              
               
             DB::table('cost_sources')->insert([
              'father_id' => 13,
              'code' => '2.1.3.1.2.1',
              'name' => 'Aportes a ASOCARS',
              'description' => 'Aportes a ASOCARS',
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'group_id' => 11,
              ]);
              $idFuenteGasto7 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 941195143,
              'value_comitted' => 711480789,
              'value_paid' => 676547960,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto1,
              'p_a_i_id' => $idpai1,
              'group_id' => 11,
              ]);
              $idGasto1 = DB::getPdo()->lastInsertId();

             DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 287168466,
              'value_comitted' => 226507704,
              'value_paid' => 182395522,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto3,
              'p_a_i_id' => $idpai1,
              'group_id' => 11,
              ]);
              $idGasto2 = DB::getPdo()->lastInsertId();
              
             DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 6500000,
              'value_comitted' => 0,
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
              'group_id' => 11,
              ]);
              $idGasto3 = DB::getPdo()->lastInsertId();

             DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 32699191,
              'value_comitted' => 28820536,
              'value_paid' => 27637699,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto8,
              'p_a_i_id' => $idpai1,
              'group_id' => 11,
              ]);
              $idGasto4 = DB::getPdo()->lastInsertId();
              
             DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 18943038,
              'value_comitted' => 0,
              'value_paid' => 0,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto9,
              'p_a_i_id' => $idpai1,
              'group_id' => 11,
              ]);
              $idGasto5 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 2017273480,
              'value_comitted' => 2007683342,
              'value_paid' => 1991223273,
              'own' => FALSE,
              'nation' => TRUE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto1,
              'p_a_i_id' => $idpai1,
              'group_id' => 11,
              ]);
              $idGasto7 = DB::getPdo()->lastInsertId();
              
               

             DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 28880000,
              'value_comitted' => 23864830,
              'value_paid' => 21719530,
              'own' => FALSE,
              'nation' => TRUE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto2,
              'p_a_i_id' => $idpai1,
              'group_id' => 11,
              ]);
              $idGasto8 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 400995968,
              'value_comitted' => 343404240,
              'value_paid' => 331808237,
              'own' => FALSE,
              'nation' => TRUE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto3,
              'p_a_i_id' => $idpai1,
              'group_id' => 11,
              ]);
              $idGasto9 = DB::getPdo()->lastInsertId();

             DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 10107000,
              'value_comitted' => 5062500,
              'value_paid' => 5062500,
              'own' => FALSE,
              'nation' => TRUE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto5,
              'p_a_i_id' => $idpai1,
              'group_id' => 11,
              ]);
              $idGasto10 = DB::getPdo()->lastInsertId();

             DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 10562000,
              'value_comitted' => 9361539,
              'value_paid' => 9361539,
              'own' => FALSE,
              'nation' => TRUE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto6,
              'p_a_i_id' => $idpai1,
              'group_id' => 11,
              ]);
              $idGasto11 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 2,
              'value_bugeted' => 1269086207,
              'value_comitted' => 857095645,
              'value_paid' => 751534902,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto1,
              'p_a_i_id' => $idpai1,
              'group_id' => 11,
              ]);
              $idGasto12 = DB::getPdo()->lastInsertId();
              
               

             DB::table('financial_costs')->insert([
              'year' => 2,
              'value_bugeted' => 108898277,
              'value_comitted' => 96762240,
              'value_paid' => 50006280,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto2,
              'p_a_i_id' => $idpai1,
              'group_id' => 11,
              ]);
              $idGasto13 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 2,
              'value_bugeted' => 572506360,
              'value_comitted' => 497434812,
              'value_paid' => 412236062,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto3,
              'p_a_i_id' => $idpai1,
              'group_id' => 11,
              ]);
              $idGasto14 = DB::getPdo()->lastInsertId();

             DB::table('financial_costs')->insert([
              'year' => 2,
              'value_bugeted' => 4700000,
              'value_comitted' => 4574364,
              'value_paid' => 4574364,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto6,
              'p_a_i_id' => $idpai1,
              'group_id' => 11,
              ]);
              $idGasto15 = DB::getPdo()->lastInsertId();

             DB::table('financial_costs')->insert([
              'year' => 2,
              'value_bugeted' => 17273306,
              'value_comitted' => 17119080,
              'value_paid' => 17119080,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto8,
              'p_a_i_id' => $idpai1,
              'group_id' => 11,
              ]);
              $idGasto16 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 2,
              'value_bugeted' => 2179288205,
              'value_comitted' => 2153190366,
              'value_paid' => 2092507657,
              'own' => FALSE,
              'nation' => TRUE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto1,
              'p_a_i_id' => $idpai1,
              'group_id' => 11,
              ]);
              $idGasto17 = DB::getPdo()->lastInsertId();
              
               

             DB::table('financial_costs')->insert([
              'year' => 2,
              'value_bugeted' => 45980000,
              'value_comitted' => 43959760,
              'value_paid' => 14880000,
              'own' => FALSE,
              'nation' => TRUE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto2,
              'p_a_i_id' => $idpai1,
              'group_id' => 11,
              ]);
              $idGasto18 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 2,
              'value_bugeted' => 330520838,
              'value_comitted' => 308600896,
              'value_paid' => 266911929,
              'own' => FALSE,
              'nation' => TRUE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto3,
              'p_a_i_id' => $idpai1,
              'group_id' => 11,
              ]);
              $idGasto19 = DB::getPdo()->lastInsertId();
              
               

             DB::table('financial_costs')->insert([
              'year' => 2,
              'value_bugeted' => 10107000,
              'value_comitted' => 6759396,
              'value_paid' => 6759396,
              'own' => FALSE,
              'nation' => TRUE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto5,
              'p_a_i_id' => $idpai1,
              'group_id' => 11,
              ]);
              $idGasto20 = DB::getPdo()->lastInsertId();

             DB::table('financial_costs')->insert([
              'year' => 2,
              'value_bugeted' => 10562000,
              'value_comitted' => 10562000,
              'value_paid' => 10562000,
              'own' => FALSE,
              'nation' => TRUE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto6,
              'p_a_i_id' => $idpai1,
              'group_id' => 11,
              ]);
              $idGasto21 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 3,
              'value_bugeted' => 1043863042,
              'value_comitted' => 858191037,
              'value_paid' => 773685936,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto1,
              'p_a_i_id' => $idpai1,
              'group_id' => 11,
              ]);
              $idGasto22 = DB::getPdo()->lastInsertId();

             DB::table('financial_costs')->insert([
              'year' => 3,
              'value_bugeted' => 496101195,
              'value_comitted' => 480969739,
              'value_paid' => 221734976,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto2,
              'p_a_i_id' => $idpai1,
              'group_id' => 11,
              ]);
              $idGasto23 = DB::getPdo()->lastInsertId();
               
             DB::table('financial_costs')->insert([
              'year' => 3,
              'value_bugeted' => 600000,
              'value_comitted' => 525000,
              'value_paid' => 525000,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto5,
              'p_a_i_id' => $idpai1,
              'group_id' => 11,
              ]);
              $idGasto24 = DB::getPdo()->lastInsertId();

             DB::table('financial_costs')->insert([
              'year' => 3,
              'value_bugeted' => 6000000,
              'value_comitted' => 0,
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
              'group_id' => 11,
              ]);
              $idGasto25 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 3,
              'value_bugeted' => 20420000,
              'value_comitted' => 19754340,
              'value_paid' => 19754340,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto7,
              'p_a_i_id' => $idpai1,
              'group_id' => 11,
              ]);
              $idGasto26 = DB::getPdo()->lastInsertId();

            DB::table('financial_costs')->insert([
              'year' => 3,
              'value_bugeted' => 34000000,
              'value_comitted' => 33238045,
              'value_paid' => 29526953,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto9,
              'p_a_i_id' => $idpai1,
              'group_id' => 11,
              ]);
              $idGasto27 = DB::getPdo()->lastInsertId();
                 
             DB::table('financial_costs')->insert([
              'year' => 3,
              'value_bugeted' => 2287782818,
              'value_comitted' => 2163871105,
              'value_paid' => 2155595233,
              'own' => FALSE,
              'nation' => TRUE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto1,
              'p_a_i_id' => $idpai1,
              'group_id' => 11,
              ]);
              $idGasto28 = DB::getPdo()->lastInsertId();

             DB::table('financial_costs')->insert([
              'year' => 3,
              'value_bugeted' => 381489723,
              'value_comitted' => 360408315,
              'value_paid' => 277348310,
              'own' => FALSE,
              'nation' => TRUE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto2,
              'p_a_i_id' => $idpai1,
              'group_id' => 11,
              ]);
              $idGasto29 = DB::getPdo()->lastInsertId();
               
             DB::table('financial_costs')->insert([
              'year' => 3,
              'value_bugeted' => 20930376,
              'value_comitted' => 11434472,
              'value_paid' => 11434472,
              'own' => FALSE,
              'nation' => TRUE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto5,
              'p_a_i_id' => $idpai1,
              'group_id' => 11,
              ]);
              $idGasto30 = DB::getPdo()->lastInsertId();
              
             DB::table('financial_costs')->insert([
              'year' => 3,
              'value_bugeted' => 10879000,
              'value_comitted' => 10063677,
              'value_paid' => 10063677,
              'own' => FALSE,
              'nation' => TRUE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto6,
              'p_a_i_id' => $idpai1,
              'group_id' => 11,
              ]);
              $idGasto31 = DB::getPdo()->lastInsertId();
               
             DB::table('financial_costs')->insert([
              'year' => 4,
              'value_bugeted' => 742533027,
              'value_comitted' => 452085229,
              'value_paid' => 438085229,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto1,
              'p_a_i_id' => $idpai1,
              'group_id' => 11,
              ]);
              $idGasto32 = DB::getPdo()->lastInsertId();
              
             DB::table('financial_costs')->insert([
              'year' => 4,
              'value_bugeted' => 1047547318,
              'value_comitted' => 911338066,
              'value_paid' => 620572188,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto2,
              'p_a_i_id' => $idpai1,
              'group_id' => 11,
              ]);
              $idGasto33 = DB::getPdo()->lastInsertId();
              
             DB::table('financial_costs')->insert([
              'year' => 4,
              'value_bugeted' => 11000000,
              'value_comitted' => 3244830,
              'value_paid' => 3244830,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto6,
              'p_a_i_id' => $idpai1,
              'group_id' => 11,
              ]);
              $idGasto34 = DB::getPdo()->lastInsertId();
               
             DB::table('financial_costs')->insert([
              'year' => 4,
              'value_bugeted' => 20562293,
              'value_comitted' => 20562293,
              'value_paid' => 20562293,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto7,
              'p_a_i_id' => $idpai1,
              'group_id' => 11,
              ]);
              $idGasto35 = DB::getPdo()->lastInsertId();
                 
             DB::table('financial_costs')->insert([
              'year' => 4,
              'value_bugeted' => 2340820293,
              'value_comitted' => 2338101668,
              'value_paid' => 2336963592,
              'own' => FALSE,
              'nation' => TRUE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto1,
              'p_a_i_id' => $idpai1,
              'group_id' => 11,
              ]);
              $idGasto36 = DB::getPdo()->lastInsertId();

             DB::table('financial_costs')->insert([
              'year' => 4,
              'value_bugeted' => 429253122,
              'value_comitted' => 377054415,
              'value_paid' => 326518193,
              'own' => FALSE,
              'nation' => TRUE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto2,
              'p_a_i_id' => $idpai1,
              'group_id' => 11,
              ]);
              $idGasto37 = DB::getPdo()->lastInsertId();
               
             DB::table('financial_costs')->insert([
              'year' => 4,
              'value_bugeted' => 10722300,
              'value_comitted' => 6692400,
              'value_paid' => 6692400,
              'own' => FALSE,
              'nation' => TRUE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto5,
              'p_a_i_id' => $idpai1,
              'group_id' => 11,
              ]);
              $idGasto38 = DB::getPdo()->lastInsertId();
              
             DB::table('financial_costs')->insert([
              'year' => 4,
              'value_bugeted' => 11205370,
              'value_comitted' => 11205370,
              'value_paid' => 11205370,
              'own' => FALSE,
              'nation' => TRUE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto6,
              'p_a_i_id' => $idpai1,
              'group_id' => 11,
              ]);
              $idGasto39 = DB::getPdo()->lastInsertId();
              
                          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity7,
            'source_id' =>$idPlan1,
            'value' => 1177747500,
            'goal' => 0,
            'evidence_balance' => 1177747500,
            'age' => 1,
            ]);
            $idactivitySource1 = DB::getPdo()->lastInsertId();
            
            
              DB::table('activity_sources')->insert([
            'activity_id' => $idactivity7,
            'source_id' =>$idPlan2,
            'value' => 120000000,
            'goal' => 0,
            'evidence_balance' => 120000000,
            'age' => 1,
            ]);
            $idactivitySource2 = DB::getPdo()->lastInsertId();
            
            
              DB::table('activity_sources')->insert([
            'activity_id' => $idactivity7,
            'source_id' =>$idPlan3,
            'value' => 428649939.9,
            'goal' => 0,
            'evidence_balance' => 428649939.9,
            'age' => 1,
            ]);
            $idactivitySource3 = DB::getPdo()->lastInsertId();
            
            
              DB::table('activity_sources')->insert([
            'activity_id' => $idactivity7,
            'source_id' =>$idPlan4,
            'value' => 1554417176,
            'goal' => 0,
            'evidence_balance' => 1554417176,
            'age' => 1,
            ]);
            $idactivitySource4 = DB::getPdo()->lastInsertId();
            
            
              DB::table('activity_sources')->insert([
            'activity_id' => $idactivity7,
            'source_id' =>$idPlan5,
            'value' => 100000000,
            'goal' => 0,
            'evidence_balance' => 100000000,
            'age' => 1,
            ]);
            $idactivitySource5 = DB::getPdo()->lastInsertId();
            
            
              DB::table('activity_sources')->insert([
            'activity_id' => $idactivity7,
            'source_id' =>$idPlan6,
            'value' => 3318250,
            'goal' => 0,
            'evidence_balance' => 3318250,
            'age' => 1,
            ]);
            $idactivitySource6 = DB::getPdo()->lastInsertId();
            
            
              DB::table('activity_sources')->insert([
            'activity_id' => $idactivity7,
            'source_id' =>$idPlan8,
            'value' => 649082861.28,
            'goal' => 0,
            'evidence_balance' => 649082861.28,
            'age' => 1,
            ]);
            $idactivitySource7 = DB::getPdo()->lastInsertId();
            
            
              DB::table('activity_sources')->insert([
            'activity_id' => $idactivity7,
            'source_id' =>$idPlan12,
            'value' => 2975777471,
            'goal' => 0,
            'evidence_balance' => 2975777471,
            'age' => 1,
            ]);
            $idactivitySource8 = DB::getPdo()->lastInsertId();
            
            
            
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia5,
              'activity_source_id' =>$idactivitySource1,
              'value' => 1177747500,
              ]);
              $idevidenceFinancial1 = DB::getPdo()->lastInsertId();
              

              
              DB::table('evidence_financial')->insert([
                'evidence_id' => $idevidencia5,
                'activity_source_id' =>$idactivitySource2,
                'value' => 24306294,
                ]);
                $idevidenceFinancial2 = DB::getPdo()->lastInsertId();
                
                
                

              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity7,
                'source_id' =>$idPlan16,
                'value' => 2700000000,
                'goal' => 0,
                'evidence_balance' => 2700000000,
                'age' => 2,
                ]);
                $idactivitySource9 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity15,
                'source_id' =>$idPlan16,
                'value' => 1786000000,
                'goal' => 0,
                'evidence_balance' => 1786000000,
                'age' => 2,
                ]);
                $idactivitySource10 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity28,
                'source_id' =>$idPlan16,
                'value' => 1985000000,
                'goal' => 0,
                'evidence_balance' => 1985000000,
                'age' => 2,
                ]);
                $idactivitySource11 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity37,
                'source_id' =>$idPlan16,
                'value' => 1241546152.3,
                'goal' => 0,
                'evidence_balance' => 1241546152.3,
                'age' => 2,
                ]);
                $idactivitySource12 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity45,
                'source_id' =>$idPlan22,
                'value' => 800000000,
                'goal' => 0,
                'evidence_balance' => 800000000,
                'age' => 2,
                ]);
                $idactivitySource13 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity53,
                'source_id' =>$idPlan22,
                'value' => 1365605125,
                'goal' => 0,
                'evidence_balance' => 1365605125,
                'age' => 2,
                ]);
                $idactivitySource14 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity63,
                'source_id' =>$idPlan22,
                'value' => 1218037027.3,
                'goal' => 0,
                'evidence_balance' => 1218037027.3,
                'age' => 2,
                ]);
                $idactivitySource15 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity75,
                'source_id' =>$idPlan13,
                'value' => 1162187027.3,
                'goal' => 0,
                'evidence_balance' => 1162187027.3,
                'age' => 2,
                ]);
                $idactivitySource16 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity88,
                'source_id' =>$idPlan14,
                'value' => 83281027.3000002,
                'goal' => 0,
                'evidence_balance' => 83281027.3000002,
                'age' => 2,
                ]);
                $idactivitySource17 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity37,
                  'source_id' =>$idPlan22,
                  'value' => 103453847.7,
                  'goal' => 0,
                  'evidence_balance' => 103453847.7,
                  'age' => 2,
                  ]);
                  $idactivitySource18 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity63,
                  'source_id' =>$idPlan13,
                  'value' => 81962972.6999998,
                  'goal' => 0,
                  'evidence_balance' => 81962972.6999998,
                  'age' => 2,
                  ]);
                  $idactivitySource19 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity75,
                  'source_id' =>$idPlan15,
                  'value' => 350000000,
                  'goal' => 0,
                  'evidence_balance' => 350000000,
                  'age' => 2,
                  ]);
                  $idactivitySource20 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity88,
                  'source_id' =>$idPlan20,
                  'value' => 45982493.27,
                  'goal' => 0,
                  'evidence_balance' => 45982493.27,
                  'age' => 2,
                  ]);
                  $idactivitySource21 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity75,
                    'source_id' =>$idPlan14,
                    'value' => 41518972.6999998,
                    'goal' => 0,
                    'evidence_balance' => 0,
                    'age' => 2,
                    ]);
                    $idactivitySource22 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity88,
                    'source_id' =>$idPlan18,
                    'value' => 2925000,
                    'goal' => 0,
                    'evidence_balance' => 0,
                    'age' => 2,
                    ]);
                    $idactivitySource23 = DB::getPdo()->lastInsertId();
                    
                    
                    
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia61,
                      'activity_source_id' =>$idactivitySource9,
                      'value' => 5433449038,
                      ]);
                      $idevidenceFinancial9 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia69,
                      'activity_source_id' =>$idactivitySource10,
                      'value' => 1287046562,
                      ]);
                      $idevidenceFinancial10 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia82,
                      'activity_source_id' =>$idactivitySource11,
                      'value' => 72297295,
                      ]);
                      $idevidenceFinancial11 = DB::getPdo()->lastInsertId();
                      

                    
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia91,
                        'activity_source_id' =>$idactivitySource12,
                        'value' => 98694150,
                        ]);
                        $idevidenceFinancial12 = DB::getPdo()->lastInsertId();
                        

                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia99,
                      'activity_source_id' =>$idactivitySource13,
                      'value' => 492022368,
                      ]);
                      $idevidenceFinancial13 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia107,
                      'activity_source_id' =>$idactivitySource14,
                      'value' => 35000000,
                      ]);
                      $idevidenceFinancial14 = DB::getPdo()->lastInsertId();
                      

                    
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia117,
                        'activity_source_id' =>$idactivitySource15,
                        'value' => 176843415,
                        ]);
                        $idevidenceFinancial15 = DB::getPdo()->lastInsertId();
                        

                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia129,
                          'activity_source_id' =>$idactivitySource16,
                          'value' => 194200125,
                          ]);
                          $idevidenceFinancial16 = DB::getPdo()->lastInsertId();

                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia142,
                      'activity_source_id' =>$idactivitySource17,
                      'value' => 83281027.3000002,
                      ]);
                      $idevidenceFinancial17 = DB::getPdo()->lastInsertId();
                      


                        
                        
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia142,
                        'activity_source_id' =>$idactivitySource21,
                        'value' => 45982493.27,
                        ]);
                        $idevidenceFinancial21 = DB::getPdo()->lastInsertId();
                        

                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia142,
                          'activity_source_id' =>$idactivitySource23,
                          'value' => 849416742.43,
                          ]);
                          $idevidenceFinancial23 = DB::getPdo()->lastInsertId();
                          
                          
                          
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity7,
                            'source_id' =>$idPlan34,
                            'value' => 2700000000,
                            'goal' => 0,
                            'evidence_balance' => 2700000000,
                            'age' => 3,
                            ]);
                            $idactivitySource24 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity15,
                            'source_id' =>$idPlan34,
                            'value' => 106471634,
                            'goal' => 0,
                            'evidence_balance' => 106471634,
                            'age' => 3,
                            ]);
                            $idactivitySource25 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity28,
                            'source_id' =>$idPlan26,
                            'value' => 86002589,
                            'goal' => 0,
                            'evidence_balance' => 86002589,
                            'age' => 3,
                            ]);
                            $idactivitySource26 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity37,
                            'source_id' =>$idPlan23,
                            'value' => 610152589,
                            'goal' => 0,
                            'evidence_balance' => 610152589,
                            'age' => 3,
                            ]);
                            $idactivitySource27 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity45,
                            'source_id' =>$idPlan25,
                            'value' => 56852547,
                            'goal' => 0,
                            'evidence_balance' => 56852547,
                            'age' => 3,
                            ]);
                            $idactivitySource28 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity15,
                              'source_id' =>$idPlan26,
                              'value' => 1679528366,
                              'goal' => 0,
                              'evidence_balance' => 1679528366,
                              'age' => 3,
                              ]);
                              $idactivitySource29 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity28,
                              'source_id' =>$idPlan30,
                              'value' => 1300000000,
                              'goal' => 0,
                              'evidence_balance' => 1300000000,
                              'age' => 3,
                              ]);
                              $idactivitySource30 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity37,
                              'source_id' =>$idPlan27,
                              'value' => 448699958,
                              'goal' => 0,
                              'evidence_balance' => 448699958,
                              'age' => 3,
                              ]);
                              $idactivitySource31 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity45,
                              'source_id' =>$idPlan24,
                              'value' => 300000000,
                              'goal' => 0,
                              'evidence_balance' => 300000000,
                              'age' => 3,
                              ]);
                              $idactivitySource32 = DB::getPdo()->lastInsertId();
                              
                              
                              
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity28,
                                'source_id' =>$idPlan23,
                                'value' => 598997411,
                                'goal' => 0,
                                'evidence_balance' => 598997411,
                                'age' => 3,
                                ]);
                                $idactivitySource33 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity37,
                                'source_id' =>$idPlan25,
                                'value' => 286147453,
                                'goal' => 0,
                                'evidence_balance' => 286147453,
                                'age' => 3,
                                ]);
                                $idactivitySource34 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity45,
                                'source_id' =>$idPlan28,
                                'value' => 110000000,
                                'goal' => 0,
                                'evidence_balance' => 110000000,
                                'age' => 3,
                                ]);
                                $idactivitySource35 = DB::getPdo()->lastInsertId();
                                
                                
                                
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity45,
                                  'source_id' =>$idPlan32,
                                  'value' => 114758533.62,
                                  'goal' => 0,
                                  'evidence_balance' => 114758533.62,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource36 = DB::getPdo()->lastInsertId();
                                  
                                  
                                    DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity45,
                                  'source_id' =>$idPlan29,
                                  'value' => 7200000,
                                  'goal' => 0,
                                  'evidence_balance' => 7200000,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource37 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia157,
                                    'activity_source_id' =>$idactivitySource24,
                                    'value' => 2027851674,
                                    ]);
                                    $idevidenceFinancial24 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia165,
                                    'activity_source_id' =>$idactivitySource25,
                                    'value' => 106471634,
                                    ]);
                                    $idevidenceFinancial25 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia178,
                                    'activity_source_id' =>$idactivitySource26,
                                    'value' => 86002589,
                                    ]);
                                    $idevidenceFinancial26 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia187,
                                    'activity_source_id' =>$idactivitySource27,
                                    'value' => 610152589,
                                    ]);
                                    $idevidenceFinancial27 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia195,
                                    'activity_source_id' =>$idactivitySource28,
                                    'value' => 56852547,
                                    ]);
                                    $idevidenceFinancial28 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia165,
                                      'activity_source_id' =>$idactivitySource29,
                                      'value' => 930798692,
                                      ]);
                                      $idevidenceFinancial29 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia178,
                                        'activity_source_id' =>$idactivitySource30,
                                        'value' => 88836982,
                                        ]);
                                        $idevidenceFinancial30 = DB::getPdo()->lastInsertId();
                                        

                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia187,
                                      'activity_source_id' =>$idactivitySource31,
                                      'value' => 610152589,
                                      ]);
                                      $idevidenceFinancial31 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia195,
                                      'activity_source_id' =>$idactivitySource32,
                                      'value' => 300000000,
                                      ]);
                                      $idevidenceFinancial32 = DB::getPdo()->lastInsertId();
                                      

                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia187,
                                        'activity_source_id' =>$idactivitySource34,
                                        'value' => 181243923,
                                        ]);
                                        $idevidenceFinancial34 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia195,
                                        'activity_source_id' =>$idactivitySource35,
                                        'value' => 110000000,
                                        ]);
                                        $idevidenceFinancial35 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia195,
                                          'activity_source_id' =>$idactivitySource36,
                                          'value' => 114758533.62,
                                          ]);
                                          $idevidenceFinancial36 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia195,
                                          'activity_source_id' =>$idactivitySource37,
                                          'value' => 302219920.38,
                                          ]);
                                          $idevidenceFinancial37 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                          DB::table('activity_sources')->insert([
                                            'activity_id' => $idactivity7,
                                            'source_id' =>$idPlan38,
                                            'value' => 2830000000,
                                            'goal' => 0,
                                            'evidence_balance' => 2830000000,
                                            'age' => 4,
                                            ]);
                                            $idactivitySource38 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('activity_sources')->insert([
                                            'activity_id' => $idactivity15,
                                            'source_id' =>$idPlan38,
                                            'value' => 143671675,
                                            'goal' => 0,
                                            'evidence_balance' => 143671675,
                                            'age' => 4,
                                            ]);
                                            $idactivitySource39 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('activity_sources')->insert([
                                            'activity_id' => $idactivity28,
                                            'source_id' =>$idPlan46,
                                            'value' => 482660454,
                                            'goal' => 0,
                                            'evidence_balance' => 482660454,
                                            'age' => 4,
                                            ]);
                                            $idactivitySource40 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('activity_sources')->insert([
                                            'activity_id' => $idactivity37,
                                            'source_id' =>$idPlan35,
                                            'value' => 1228119006,
                                            'goal' => 0,
                                            'evidence_balance' => 1228119006,
                                            'age' => 4,
                                            ]);
                                            $idactivitySource41 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('activity_sources')->insert([
                                            'activity_id' => $idactivity45,
                                            'source_id' =>$idPlan37,
                                            'value' => 93119006,
                                            'goal' => 0,
                                            'evidence_balance' => 93119006,
                                            'age' => 4,
                                            ]);
                                            $idactivitySource42 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                            DB::table('activity_sources')->insert([
                                              'activity_id' => $idactivity15,
                                              'source_id' =>$idPlan46,
                                              'value' => 1816328325,
                                              'goal' => 0,
                                              'evidence_balance' => 1816328325,
                                              'age' => 4,
                                              ]);
                                              $idactivitySource43 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('activity_sources')->insert([
                                              'activity_id' => $idactivity28,
                                              'source_id' =>$idPlan42,
                                              'value' => 1821358552,
                                              'goal' => 0,
                                              'evidence_balance' => 1821358552,
                                              'age' => 4,
                                              ]);
                                              $idactivitySource44 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('activity_sources')->insert([
                                              'activity_id' => $idactivity37,
                                              'source_id' =>$idPlan37,
                                              'value' => 291880994,
                                              'goal' => 0,
                                              'evidence_balance' => 291880994,
                                              'age' => 4,
                                              ]);
                                              $idactivitySource45 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('activity_sources')->insert([
                                              'activity_id' => $idactivity45,
                                              'source_id' =>$idPlan44,
                                              'value' => 421336193,
                                              'goal' => 0,
                                              'evidence_balance' => 421336193,
                                              'age' => 4,
                                              ]);
                                              $idactivitySource46 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                              DB::table('activity_sources')->insert([
                                                'activity_id' => $idactivity28,
                                                'source_id' =>$idPlan35,
                                                'value' => 45980994,
                                                'goal' => 0,
                                                'evidence_balance' => 45980994,
                                                'age' => 4,
                                                ]);
                                                $idactivitySource47 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                
                                              DB::table('activity_sources')->insert([
                                                'activity_id' => $idactivity45,
                                                'source_id' =>$idPlan36,
                                                'value' => 300000000,
                                                'goal' => 0,
                                                'evidence_balance' => 300000000,
                                                'age' => 4,
                                                ]);
                                                $idactivitySource48 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity45,
                                                  'source_id' =>$idPlan39,
                                                  'value' => 110000000,
                                                  'goal' => 0,
                                                  'evidence_balance' => 110000000,
                                                  'age' => 4,
                                                  ]);
                                                  $idactivitySource49 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                    DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity45,
                                                  'source_id' =>$idPlan43,
                                                  'value' => 84240000.48,
                                                  'goal' => 0,
                                                  'evidence_balance' => 84240000.48,
                                                  'age' => 4,
                                                  ]);
                                                  $idactivitySource50 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                    DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity45,
                                                  'source_id' =>$idPlan40,
                                                  'value' => 13114880.0937,
                                                  'goal' => 0,
                                                  'evidence_balance' => 13114880.0937,
                                                  'age' => 4,
                                                  ]);
                                                  $idactivitySource51 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                  DB::table('evidence_financial')->insert([
                                                    'evidence_id' => $idevidencia253,
                                                    'activity_source_id' =>$idactivitySource38,
                                                    'value' => 1965445375,
                                                    ]);
                                                    $idevidenceFinancial38 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('evidence_financial')->insert([
                                                    'evidence_id' => $idevidencia261,
                                                    'activity_source_id' =>$idactivitySource39,
                                                    'value' => 143671675,
                                                    ]);
                                                    $idevidenceFinancial39 = DB::getPdo()->lastInsertId();
                                                    
                                                    DB::table('evidence_financial')->insert([
                                                      'evidence_id' => $idevidencia274,
                                                      'activity_source_id' =>$idactivitySource40,
                                                      'value' => 335281525,
                                                      ]);
                                                      $idevidenceFinancial40 = DB::getPdo()->lastInsertId();
                                                      

                                                  DB::table('evidence_financial')->insert([
                                                    'evidence_id' => $idevidencia283,
                                                    'activity_source_id' =>$idactivitySource41,
                                                    'value' => 1228119006,
                                                    ]);
                                                    $idevidenceFinancial41 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    DB::table('evidence_financial')->insert([
                                                      'evidence_id' => $idevidencia291,
                                                      'activity_source_id' =>$idactivitySource42,
                                                      'value' => 49924922,
                                                      ]);
                                                      $idevidenceFinancial42 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    
                                                    
                                                    DB::table('evidence_financial')->insert([
                                                      'evidence_id' => $idevidencia261,
                                                      'activity_source_id' =>$idactivitySource43,
                                                      'value' => 1485036244,
                                                      ]);
                                                      $idevidenceFinancial43 = DB::getPdo()->lastInsertId();
                                                      

                                                      
                                                      
                                                    DB::table('evidence_financial')->insert([
                                                      'evidence_id' => $idevidencia283,
                                                      'activity_source_id' =>$idactivitySource45,
                                                      'value' => 507200013,
                                                      ]);
                                                      $idevidenceFinancial45 = DB::getPdo()->lastInsertId();
                                                      

   }
}      