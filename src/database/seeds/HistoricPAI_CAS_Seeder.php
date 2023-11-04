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
 * Class HistoricPAI_CAS_Seeder
 */
class HistoricPAI_CAS_Seeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $pai=PAI::create([
      'name' => 'PLAN DE ACCIÓN 2016-2019',
      'start_date' => '2016-01-01',
      'end_date' => '2019-12-31',
      'director_name' => 'Flor María Rangel Guerrero',
      'group_id' => 7,
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
          'car_program' => 'PROGRAMA No. 1 ORDENACIÓN Y PLANIFICACIÓN AMBIENTAL DEL TERRRITORIO',
          'weighing' => 16,
          ]);
          $idprogram1 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA No. 2 GESTIÓN INTEGRAL DEL RECURSO HÍDRICO',
          'weighing' => 16,
          ]);
          $idprogram2 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA No. 3 GESTIÓN INTEGRAL DE LA BIODIVERSIDAD Y SUS SERVICIOS ECOSISTEMICOS',
          'weighing' => 16,
          ]);
          $idprogram3 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA No. 4 CAMBIO CLIMATICO Y GESTIÓN DEL RIESGO',
          'weighing' => 17,
          ]);
          $idprogram4 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA No. 5 ADMINISTRACIÓN, CONTROL Y SEGUIMIENTO AMBIENTAL ',
          'weighing' => 17,
          ]);
          $idprogram5 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA No. 6 GOBERNABILIDAD INSTITUCIONAL',
          'weighing' => 17,
          ]);
          $idprogram6 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA GASTOS ',
          'weighing' => 1,
          ]);
          $idprogram7 = DB::getPdo()->lastInsertId();
          
          
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => 'PROYECTO 1.1 Asistencia Técnica para la actualización de determinantes ambientales con inclusión de la gestión del riesgo y Estructura Ecológica Urbana en los EOT, PBOT, POT.',
            'weighing' => 33,
            ]);
            $idproject1 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => 'PROYECTO 1.2 Ordenación y Manejo de Cuencas Hidrográficas-POMCH en la jurisdicción de la CAS',
            'weighing' => 33,
            ]);
            $idproject2 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => 'PROYECTO 1.3 Apoyo al plan de Vida de las comunidades indígenas y poblaciones vulnerables en la jurisdicción de la CAS.',
            'weighing' => 34,
            ]);
            $idproject3 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => 'PROYECTO No. 2.1. Protección, conservación y manejo integrado de cuencas hidrográficas en la jurisdicción de la CAS',
            'weighing' => 50,
            ]);
            $idproject4 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => 'PROYECTO No.2.2. Gestión de apoyo y control al manejo integral de residuos líquidos ',
            'weighing' => 50,
            ]);
            $idproject5 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram3,
            'project' => 'PROYECTO No. 3.1 Delimitación, ajuste o declaración de Áreas protegidas y ecosistemas estrategicos  y actualización o formulación de los planes de manejo en la jurisdicción de la CAS',
            'weighing' => 33,
            ]);
            $idproject6 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram3,
            'project' => 'PROYECTO 3.2 Protección y conservación de fauna y flora.',
            'weighing' => 33,
            ]);
            $idproject7 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram3,
            'project' => 'PROYECTO No. 3.3 Implementación de Proyectos para la producción y consumo sostenibles y biocomercio',
            'weighing' => 34,
            ]);
            $idproject8 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram4,
            'project' => 'PROYECTO No. 4.1 Planificación y fortalecimiento de la asistencia tecnica para la Gestión Integral del Riesgo de desastres  en los 74 municipios de la jurisdicción de la CAS.',
            'weighing' => 50,
            ]);
            $idproject9 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram4,
            'project' => 'PROYECTO N.4.2 Gestion y apoyo para la ejecución de obras de irrigación, avenamiento, defensa contra inundaciones, regulación de cauces y corrientes de agua y recuperación de tierras.',
            'weighing' => 50,
            ]);
            $idproject10 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram5,
            'project' => 'PROYECTO 5.1 Administracion, manejo, control y seguimiento de los recursos naturales  renovables.',
            'weighing' => 33,
            ]);
            $idproject11 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram5,
            'project' => 'PROYECTO 5.2 Programa de monitoreo de calidad de aire y  de recurso Hidrico, control de Ruido y control de emisiones  ',
            'weighing' => 33,
            ]);
            $idproject12 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram5,
            'project' => 'PROYECTO 5.3. Prevencion, Seguimiento, Control y Vigilancia  a la contaminacion ambiental de los recursos naturales y  al trafico ilegal de especies de fauna y flora en la jurisdiccion ',
            'weighing' => 34,
            ]);
            $idproject13 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram6,
            'project' => 'PROYECTO 6.1 Implementación de actividades del plan estratégico de Tecnologías de la Información-PETI y Fortalecimiento de los Sistemas  de información para la gestión Institucional',
            'weighing' => 33,
            ]);
            $idproject14 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram6,
            'project' => 'PROYECTO 6.2 Programa de Educación Ambiental y Participación Ciudadana',
            'weighing' => 33,
            ]);
            $idproject15 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram6,
            'project' => 'PROYECTO No. 6.3. Programa de fortalecimiento institucional ',
            'weighing' => 34,
            ]);
            $idproject16 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram7,
            'project' => 'PROYECTO GASTOS',
            'weighing' => 100,
            ]);
            $idproject17 = DB::getPdo()->lastInsertId();
            
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
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject15,
              'objective' => 'Objetivo',
              'weighing' => 100,
              ]);
              $idobjective15 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject16,
              'objective' => 'Objetivo',
              'weighing' => 100,
              ]);
              $idobjective16 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject17,
              'objective' => 'Objetivo',
              'weighing' => 100,
              ]);
              $idobjective17 = DB::getPdo()->lastInsertId();
              
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 10,
                'goal_2' => 38,
                'goal_3' => 40,
                'goal_4' => 24,
                'goal_1_balance' => 10,
                'goal_2_balance' => 38,
                'goal_3_balance' => 40,
                'goal_4_balance' => 24,
                'total_goal' => 112,
                'unit_goal' => 57,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct1 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 74,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 74,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 74,
                'unit_goal' => 57,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 49,
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
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct3 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 0.4,
                'goal_2' => 0.4,
                'goal_3' => 0.1,
                'goal_4' => 0.1,
                'goal_1_balance' => 0.4,
                'goal_2_balance' => 0.4,
                'goal_3_balance' => 0.1,
                'goal_4_balance' => 0.1,
                'total_goal' => 1,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 25,
                ]);
                $idobjectiveproduct4 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 75,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 25,
                ]);
                $idobjectiveproduct5 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 1,
                'goal_2' => 0,
                'goal_3' => 1,
                'goal_4' => 0,
                'goal_1_balance' => 1,
                'goal_2_balance' => 0,
                'goal_3_balance' => 1,
                'goal_4_balance' => 0,
                'total_goal' => 2,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 25,
                ]);
                $idobjectiveproduct6 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 1,
                'goal_2' => 0,
                'goal_3' => 1,
                'goal_4' => 0,
                'goal_1_balance' => 1,
                'goal_2_balance' => 0,
                'goal_3_balance' => 1,
                'goal_4_balance' => 0,
                'total_goal' => 2,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 24,
                ]);
                $idobjectiveproduct7 = DB::getPdo()->lastInsertId();
                
                
                
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
                $idobjectiveproduct8 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => null,
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
                'unit_goal' => 75,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct9 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective4,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 90,
                'goal_2' => 279,
                'goal_3' => 618,
                'goal_4' => 1069,
                'goal_1_balance' => 90,
                'goal_2_balance' => 279,
                'goal_3_balance' => 618,
                'goal_4_balance' => 1069,
                'total_goal' => 2056,
                'unit_goal' => 47,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 12,
                ]);
                $idobjectiveproduct10 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective4,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 3526.88,
                'goal_2' => 702,
                'goal_3' => 265.6,
                'goal_4' => 290,
                'goal_1_balance' => 3526.88,
                'goal_2_balance' => 702,
                'goal_3_balance' => 265.6,
                'goal_4_balance' => 290,
                'total_goal' => 4784.48,
                'unit_goal' => 47,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 12,
                ]);
                $idobjectiveproduct11 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective4,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 100,
                'goal_2' => 152,
                'goal_3' => 595,
                'goal_4' => 2349.9522,
                'goal_1_balance' => 100,
                'goal_2_balance' => 152,
                'goal_3_balance' => 595,
                'goal_4_balance' => 2349.9522,
                'total_goal' => 3196.9522,
                'unit_goal' => 47,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 12,
                ]);
                $idobjectiveproduct12 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective4,
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
                $idobjectiveproduct13 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective4,
                'product_id' => null,
                'product_other' => 'Producto 5',
                'goal_1' => 3,
                'goal_2' => 3,
                'goal_3' => 2,
                'goal_4' => 2,
                'goal_1_balance' => 3,
                'goal_2_balance' => 3,
                'goal_3_balance' => 2,
                'goal_4_balance' => 2,
                'total_goal' => 10,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 12,
                ]);
                $idobjectiveproduct14 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective4,
                'product_id' => null,
                'product_other' => 'Producto 6',
                'goal_1' => 48,
                'goal_2' => 48,
                'goal_3' => 68,
                'goal_4' => 90,
                'goal_1_balance' => 48,
                'goal_2_balance' => 48,
                'goal_3_balance' => 68,
                'goal_4_balance' => 90,
                'total_goal' => 254,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 13,
                ]);
                $idobjectiveproduct15 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective4,
                'product_id' => null,
                'product_other' => 'Producto 7',
                'goal_1' => 104.7,
                'goal_2' => 100,
                'goal_3' => 100,
                'goal_4' => 100,
                'goal_1_balance' => 104.7,
                'goal_2_balance' => 100,
                'goal_3_balance' => 100,
                'goal_4_balance' => 100,
                'total_goal' => 404.7,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 13,
                ]);
                $idobjectiveproduct16 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective4,
                'product_id' => null,
                'product_other' => 'Producto 8',
                'goal_1' => 2,
                'goal_2' => 20.18,
                'goal_3' => 50,
                'goal_4' => 0,
                'goal_1_balance' => 2,
                'goal_2_balance' => 20.18,
                'goal_3_balance' => 50,
                'goal_4_balance' => 0,
                'total_goal' => 72.18,
                'unit_goal' => 47,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 13,
                ]);
                $idobjectiveproduct17 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective4,
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
                $idobjectiveproduct18 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 2,
                'goal_2' => 6,
                'goal_3' => 3,
                'goal_4' => 3,
                'goal_1_balance' => 2,
                'goal_2_balance' => 6,
                'goal_3_balance' => 3,
                'goal_4_balance' => 3,
                'total_goal' => 14,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 25,
                ]);
                $idobjectiveproduct19 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 0.4,
                'goal_2' => 0.6,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 0.4,
                'goal_2_balance' => 0.6,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 1,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 25,
                ]);
                $idobjectiveproduct20 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 2,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 2,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 5,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 25,
                ]);
                $idobjectiveproduct21 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 20,
                'goal_2' => 20,
                'goal_3' => 20,
                'goal_4' => 29,
                'goal_1_balance' => 20,
                'goal_2_balance' => 20,
                'goal_3_balance' => 20,
                'goal_4_balance' => 29,
                'total_goal' => 89,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 24,
                ]);
                $idobjectiveproduct22 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
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
                $idobjectiveproduct23 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective6,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 2000,
                'goal_2' => 0,
                'goal_3' => 2000,
                'goal_4' => 0,
                'goal_1_balance' => 2000,
                'goal_2_balance' => 0,
                'goal_3_balance' => 2000,
                'goal_4_balance' => 0,
                'total_goal' => 4000,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 33,
                ]);
                $idobjectiveproduct24 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective6,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 1,
                'goal_4' => 100,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 1,
                'goal_4_balance' => 100,
                'total_goal' => 101,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 33,
                ]);
                $idobjectiveproduct25 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective6,
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
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 33,
                ]);
                $idobjectiveproduct26 = DB::getPdo()->lastInsertId();
                
                
                
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
                'weighing' => 1,
                ]);
                $idobjectiveproduct27 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 3,
                'goal_2' => 4,
                'goal_3' => 3,
                'goal_4' => 3,
                'goal_1_balance' => 3,
                'goal_2_balance' => 4,
                'goal_3_balance' => 3,
                'goal_4_balance' => 3,
                'total_goal' => 13,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 25,
                ]);
                $idobjectiveproduct28 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
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
                'weighing' => 25,
                ]);
                $idobjectiveproduct29 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
                'product_id' => null,
                'product_other' => 'Producto 3',
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
                'weighing' => 25,
                ]);
                $idobjectiveproduct30 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 0,
                'goal_2' => 520259,
                'goal_3' => 1040518,
                'goal_4' => 162295,
                'goal_1_balance' => 0,
                'goal_2_balance' => 520259,
                'goal_3_balance' => 1040518,
                'goal_4_balance' => 162295,
                'total_goal' => 1723072,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 24,
                ]);
                $idobjectiveproduct31 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
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
                $idobjectiveproduct32 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
                'product_id' => null,
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
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct33 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 2,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 2,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 5,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 49,
                ]);
                $idobjectiveproduct34 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct35 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 35,
                'goal_2' => 20,
                'goal_3' => 20,
                'goal_4' => 23,
                'goal_1_balance' => 35,
                'goal_2_balance' => 20,
                'goal_3_balance' => 20,
                'goal_4_balance' => 23,
                'total_goal' => 98,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 20,
                ]);
                $idobjectiveproduct36 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 20,
                ]);
                $idobjectiveproduct37 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
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
                'weighing' => 20,
                ]);
                $idobjectiveproduct38 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
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
                'weighing' => 20,
                ]);
                $idobjectiveproduct39 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 19,
                ]);
                $idobjectiveproduct40 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
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
                'weighing' => 1,
                ]);
                $idobjectiveproduct41 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective10,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 2,
                'goal_2' => 2,
                'goal_3' => 1,
                'goal_4' => 2,
                'goal_1_balance' => 2,
                'goal_2_balance' => 2,
                'goal_3_balance' => 1,
                'goal_4_balance' => 2,
                'total_goal' => 7,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct42 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct43 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective11,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 0.25,
                'goal_2' => 0.3,
                'goal_3' => 0.35,
                'goal_4' => 0.4,
                'goal_1_balance' => 0.25,
                'goal_2_balance' => 0.3,
                'goal_3_balance' => 0.35,
                'goal_4_balance' => 0.4,
                'total_goal' => 1.3,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct44 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective11,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 0.8,
                'goal_2' => 0.8,
                'goal_3' => 0.8,
                'goal_4' => 0.8,
                'goal_1_balance' => 0.8,
                'goal_2_balance' => 0.8,
                'goal_3_balance' => 0.8,
                'goal_4_balance' => 0.8,
                'total_goal' => 3.2,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct45 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct46 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct47 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective11,
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
                'weighing' => 11,
                ]);
                $idobjectiveproduct48 = DB::getPdo()->lastInsertId();
                
                
                
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
                'weighing' => 11,
                ]);
                $idobjectiveproduct49 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective11,
                'product_id' => null,
                'product_other' => 'Producto 8',
                'goal_1' => 94,
                'goal_2' => 40,
                'goal_3' => 40,
                'goal_4' => 40,
                'goal_1_balance' => 94,
                'goal_2_balance' => 40,
                'goal_3_balance' => 40,
                'goal_4_balance' => 40,
                'total_goal' => 214,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct50 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective11,
                'product_id' => null,
                'product_other' => 'Producto 9',
                'goal_1' => 1,
                'goal_2' => 2,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 2,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 5,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct51 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective11,
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
                $idobjectiveproduct52 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 21,
                'goal_2' => 20,
                'goal_3' => 39,
                'goal_4' => 43,
                'goal_1_balance' => 21,
                'goal_2_balance' => 20,
                'goal_3_balance' => 39,
                'goal_4_balance' => 43,
                'total_goal' => 123,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct53 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
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
                $idobjectiveproduct54 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct55 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective13,
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
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 25,
                ]);
                $idobjectiveproduct56 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective13,
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
                'weighing' => 25,
                ]);
                $idobjectiveproduct57 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective13,
                'product_id' => null,
                'product_other' => 'Producto 3',
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
                'weighing' => 25,
                ]);
                $idobjectiveproduct58 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective13,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 3,
                'goal_2' => 1,
                'goal_3' => 2,
                'goal_4' => 1,
                'goal_1_balance' => 3,
                'goal_2_balance' => 1,
                'goal_3_balance' => 2,
                'goal_4_balance' => 1,
                'total_goal' => 7,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 24,
                ]);
                $idobjectiveproduct59 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective13,
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
                $idobjectiveproduct60 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 3,
                'goal_2' => 5,
                'goal_3' => 4,
                'goal_4' => 4,
                'goal_1_balance' => 3,
                'goal_2_balance' => 5,
                'goal_3_balance' => 4,
                'goal_4_balance' => 4,
                'total_goal' => 16,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct61 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 0.8,
                'goal_2' => 0.8,
                'goal_3' => 0.8,
                'goal_4' => 0.8,
                'goal_1_balance' => 0.8,
                'goal_2_balance' => 0.8,
                'goal_3_balance' => 0.8,
                'goal_4_balance' => 0.8,
                'total_goal' => 3.2,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 49,
                ]);
                $idobjectiveproduct62 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct63 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective15,
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
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct64 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective15,
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
                'weighing' => 49,
                ]);
                $idobjectiveproduct65 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct66 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective16,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 1,
                'goal_2' => 3,
                'goal_3' => 5,
                'goal_4' => 3,
                'goal_1_balance' => 1,
                'goal_2_balance' => 3,
                'goal_3_balance' => 5,
                'goal_4_balance' => 3,
                'total_goal' => 12,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 33,
                ]);
                $idobjectiveproduct67 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective16,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 2,
                'goal_2' => 2,
                'goal_3' => 3,
                'goal_4' => 2,
                'goal_1_balance' => 2,
                'goal_2_balance' => 2,
                'goal_3_balance' => 3,
                'goal_4_balance' => 2,
                'total_goal' => 9,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 33,
                ]);
                $idobjectiveproduct68 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective16,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 5,
                'goal_2' => 3,
                'goal_3' => 2,
                'goal_4' => 2,
                'goal_1_balance' => 5,
                'goal_2_balance' => 3,
                'goal_3_balance' => 2,
                'goal_4_balance' => 2,
                'total_goal' => 12,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 33,
                ]);
                $idobjectiveproduct69 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective16,
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
                $idobjectiveproduct70 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective17,
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
                'weighing' => 20,
                ]);
                $idobjectiveproduct71 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 20,
                ]);
                $idobjectiveproduct72 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective17,
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
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 20,
                ]);
                $idobjectiveproduct73 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective17,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 1,
                'goal_4' => 0,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 1,
                'goal_4_balance' => 0,
                'total_goal' => 1,
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 20,
                ]);
                $idobjectiveproduct74 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective17,
                'product_id' => null,
                'product_other' => 'Producto 5',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 1,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 1,
                'total_goal' => 1,
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 20,
                ]);
                $idobjectiveproduct75 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct1,
                  'name' => 'Actividad 1.1.1. Brindar asistencia Técnica y  asesoria en la incorporacion de los  determinantes ambientales para la revision y ajuste de los EOT,PBOT y POT adoptados en los municipios de la jurisdicción de la CAS',
                  'goal_1' => 10,
                  'goal_2' => 38,
                  'goal_3' => 40,
                  'goal_4' => 24,
                  'goal' => 112,
                  'weighing' => 50, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity1 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct2,
                  'name' => 'Actividad 1.1.2. Brindar Asistencia Técnica y  asesoria para la incorporacion del Componente ambiental en los Planes de Desarrollo de los municipios de la jurisdicción de la CAS',
                  'goal_1' => 74,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 74,
                  'weighing' => 49, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity2 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct3,
                  'name' => 'Asignación de recursos al proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity3 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct4,
                  'name' => 'Actividad 1.2.1. Formular o actualizar  los Planes de Ordenación y manejo de cuencas (POMCAS), Planes de manejo de Acuiferos (PMA) y planes de manejo de Microcuencas (PMM)',
                  'goal_1' => 0.4,
                  'goal_2' => 0.4,
                  'goal_3' => 0.1,
                  'goal_4' => 0.1,
                  'goal' => 1,
                  'weighing' => 25, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity4 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct5,
                  'name' => 'Actividad 1.2.2. Ejecutar actividades de Los Planes de Ordenación y Manejo de Cuencas (POMCAS), Planes de manejo de Acuiferos (PMA) y Planes de manejo de Microcuencas (PMM)',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 25, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity5 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct6,
                  'name' => 'Actividad 1.2.3. Realizar la Reglamentación de corrientes hídricas priorizados con problemas en los usos y los goces.',
                  'goal_1' => 1,
                  'goal_2' => 0,
                  'goal_3' => 1,
                  'goal_4' => 0,
                  'goal' => 2,
                  'weighing' => 25, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity6 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct7,
                  'name' => 'Actividad 1.2.4. Formular y adoptar  Planes de Ordenamiento del recurso hídrico PORH.',
                  'goal_1' => 1,
                  'goal_2' => 0,
                  'goal_3' => 1,
                  'goal_4' => 0,
                  'goal' => 2,
                  'weighing' => 24, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity7 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct8,
                  'name' => 'Asignación de recursos al proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity8 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct9,
                  'name' => 'Actividad 1.3.1. Apoyar  actividades del plan de vida de las comunidades indígenas, poblaciones vulnerables e implementacion de medidas ambientales en los planes de reparacion colectiva en la jurisdicción de la CAS',
                  'goal_1' => 2,
                  'goal_2' => 2,
                  'goal_3' => 2,
                  'goal_4' => 2,
                  'goal' => 8,
                  'weighing' => 100, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity9 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct10,
                  'name' => 'Actividad 2.1.1. Realizar la Reforestacion, revegetalizacion natural, Restauracion o Rehabilitacion de areas para la proteccion de cuencas abastecedoras y ecosistemas estrategicos.',
                  'goal_1' => 90,
                  'goal_2' => 279,
                  'goal_3' => 618,
                  'goal_4' => 1069,
                  'goal' => 2056,
                  'weighing' => 12, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity10 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct11,
                  'name' => 'Actividad 2.1.2. Realizar el Mantenimiento en areas reforestadas, revegetalizadas naturalmente , Restauradas o rehabilitadas para la proteccion de cuencas abastecedoras y ecosistemas estrategicos',
                  'goal_1' => 3526.88,
                  'goal_2' => 702,
                  'goal_3' => 265.6,
                  'goal_4' => 290,
                  'goal' => 4784.48,
                  'weighing' => 12, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity11 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct12,
                  'name' => 'Actividad 2.1.3. Gestionar y apoyar  la adquisición de predios en zonas de importancia para el Abastecimiento hídrico.',
                  'goal_1' => 100,
                  'goal_2' => 152,
                  'goal_3' => 595,
                  'goal_4' => 2349.9522,
                  'goal' => 3196.9522,
                  'weighing' => 12, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity12 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct13,
                  'name' => 'Actividad 2.1.4. Realizar acciones en Gestión ambiental urbana.',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 12, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity13 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct14,
                  'name' => 'Actividad 2.1.5. Realizar acciones para la produccion de material vegetal y adquisición de insumos. ',
                  'goal_1' => 3,
                  'goal_2' => 3,
                  'goal_3' => 2,
                  'goal_4' => 2,
                  'goal' => 10,
                  'weighing' => 12, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity14 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct15,
                  'name' => 'Actividad 2.1.6.Gestionar, apoyar y coofinanciar  la protección, recuperación y aislamiento de nacimientos, afloramientos y Zonas de recarga hidrica. ',
                  'goal_1' => 48,
                  'goal_2' => 48,
                  'goal_3' => 68,
                  'goal_4' => 90,
                  'goal' => 254,
                  'weighing' => 13, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity15 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct16,
                  'name' => 'Actividad 2.1.7. Fortalecer y ampliar el mecanismo de pago por  servicios ambientales (BanCO2) y el desarrollo de nuevas estrategias de PSA.',
                  'goal_1' => 104.7,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 404.7,
                  'weighing' => 13, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity16 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct17,
                  'name' => 'Actividad 2.1.8. Realizar acciones para la recuperacion y rehabilitación de suelos degradados.  ',
                  'goal_1' => 2,
                  'goal_2' => 20.18,
                  'goal_3' => 50,
                  'goal_4' => 0,
                  'goal' => 72.18,
                  'weighing' => 13, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity17 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct18,
                  'name' => 'Asignación de recursos al proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity18 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct19,
                  'name' => 'Actividad 2.2.1. Apoyar y cofinanciar  estudios, diseños, construcción u optimización de Sistemas de tratamiento de aguas residuales domésticas y aguas residuales de los sectores productivos.',
                  'goal_1' => 2,
                  'goal_2' => 6,
                  'goal_3' => 3,
                  'goal_4' => 3,
                  'goal' => 14,
                  'weighing' => 25, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity19 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct20,
                  'name' => 'Actividad 2.2.2. Elaborar el estudio de metas de reducción de carga contaminante para actualizar el factor regional en dos Cuencas de la Jurisdicción.',
                  'goal_1' => 0.4,
                  'goal_2' => 0.6,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 25, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity20 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct21,
                  'name' => 'Actividad 2.2.3. Realizar acciones para el monitoreo, caracterizacion y verificación de vertimientos de aguas residuales.',
                  'goal_1' => 2,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 5,
                  'weighing' => 25, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity21 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct22,
                  'name' => 'Actividad 2.2.4. Realizar el acompañamiento y seguimiento a los procesos de monitoreo y caracterización de vertimientos de aguas residuales',
                  'goal_1' => 20,
                  'goal_2' => 20,
                  'goal_3' => 20,
                  'goal_4' => 29,
                  'goal' => 89,
                  'weighing' => 24, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity22 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct23,
                  'name' => 'Asignación de recursos al proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity23 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct24,
                  'name' => 'Actividad 3.1.1. Delimitar, ajustar, declarar o inscribir ecosistemas estrategicos o areas protegidas.  ',
                  'goal_1' => 2000,
                  'goal_2' => 0,
                  'goal_3' => 2000,
                  'goal_4' => 0,
                  'goal' => 4000,
                  'weighing' => 33, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity24 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct25,
                  'name' => 'Actividad 3.1.2. Delimitar, zonificar y  establecer los regimenes de uso de Paramos. ',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 1,
                  'goal_4' => 100,
                  'goal' => 101,
                  'weighing' => 33, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity25 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct26,
                  'name' => 'Actividad 3.1.3. Actualizar, formular planes de manejo o Implementar actividades de los planes de manejo de áreas protegidas. ',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 2,
                  'weighing' => 33, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity26 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct27,
                  'name' => 'Asignación de recursos al proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity27 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct28,
                  'name' => 'Actividad 3.2.1. Apoyar  y cofinanciar la Implementacion y ejecucion de medidas de manejo de especies amenazadas ',
                  'goal_1' => 3,
                  'goal_2' => 4,
                  'goal_3' => 3,
                  'goal_4' => 3,
                  'goal' => 13,
                  'weighing' => 25, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity28 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct29,
                  'name' => 'Actividad 3.2.2. Apoyar  y cofinanciar la Implementacion y ejecucion de medidas de manejo de especies invasoras.',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 3,
                  'weighing' => 25, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity29 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct30,
                  'name' => 'Actividad 3.2.3. Apoyar y sensibilizar  la proteccion y conservacion para la protección de especies de fauna y Flora.',
                  'goal_1' => 1,
                  'goal_2' => 2,
                  'goal_3' => 2,
                  'goal_4' => 2,
                  'goal' => 7,
                  'weighing' => 25, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity30 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct31,
                  'name' => 'Actividad 3.2.4. Actualizar o Implementar  Actividades del Plan de ordenación forestal.',
                  'goal_1' => 0,
                  'goal_2' => 520259,
                  'goal_3' => 1040518,
                  'goal_4' => 162295,
                  'goal' => 1723072,
                  'weighing' => 24, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity31 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct32,
                  'name' => 'Asignación de recursos al proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity32 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct33,
                  'name' => 'Actividad 3.3.1. Apoyar, cofinanciar y acompañar la reconversion hacia sistemas sostenibles de produccion.  ',
                  'goal_1' => 2,
                  'goal_2' => 2,
                  'goal_3' => 2,
                  'goal_4' => 2,
                  'goal' => 8,
                  'weighing' => 50, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity33 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct34,
                  'name' => 'Actividad 3.3.2. Gestiónar y apoyar la Implementacion de actividades del programa regional de negocios verdes.  ',
                  'goal_1' => 2,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 5,
                  'weighing' => 49, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity34 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct35,
                  'name' => 'Asignación de recursos al proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity35 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct36,
                  'name' => 'Actividad 4.1.1. Brindar asistencia tecnica a los  Municipios para la  gestion del riesgo en el marco de la Ley 1523 de 2012.',
                  'goal_1' => 35,
                  'goal_2' => 20,
                  'goal_3' => 20,
                  'goal_4' => 23,
                  'goal' => 98,
                  'weighing' => 20, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity36 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct37,
                  'name' => 'Actividad 4.1.2. Apoyar a los municipios en la elaboración de los estudios de amenaza, vulnerabilidad y riesgo para su inclusion en los procesos de Ordenamiento y Planificacion territorial. ',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 20, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity37 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct38,
                  'name' => 'Actividad: 4.1.3 Apoyo y asesoria a entes territoriales para la incorporacion, planificación y ejecución de acciones relacionadas con cambio Climatico en el marco de los instrumentos de planificacion territorial.',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 20, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity38 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct39,
                  'name' => 'Actividad 4.1.4. Apoyar, capacitar  y sensibilizar el fortalecimiento de la estrategia de corresponsabilidad social en el conocimiento, reducción del riesgo y manejo de desatres.',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 20, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity39 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct40,
                  'name' => 'Actividad 4.1.5 Apoyo para la ejecución de acciones en mitigación de gases de efecto invernadero o adaptación al cambio Climatico. ',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 19, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity40 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct41,
                  'name' => 'Asignación de recursos al proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity41 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective10,
                  'product_id' =>$idobjectiveproduct42,
                  'name' => 'Actividad 4.2.1 Diseñar y construir  obras de irrigación, avenamiento, defensa contra inundaciones, regulación de cauces, corrientes de agua, recuperación de tierras y obras o actividades de contingencia por desabastecimiento de agua.',
                  'goal_1' => 2,
                  'goal_2' => 2,
                  'goal_3' => 1,
                  'goal_4' => 2,
                  'goal' => 7,
                  'weighing' => 100, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity42 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective11,
                  'product_id' =>$idobjectiveproduct43,
                  'name' => 'Actividad 5.1.1. Tramitar autorizaciones ambientales solicitadas por los usuarios',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity43 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective11,
                  'product_id' =>$idobjectiveproduct44,
                  'name' => 'Actividad 5.1.2. Realizar el seguimiento a  las autorizaciones ambientales otorgadas por la Corporación.',
                  'goal_1' => 0.25,
                  'goal_2' => 0.3,
                  'goal_3' => 0.35,
                  'goal_4' => 0.4,
                  'goal' => 1.3,
                  'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity44 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective11,
                  'product_id' =>$idobjectiveproduct45,
                  'name' => 'Actividad 5.1.3. Atender las quejas y contravenciones ambientales.',
                  'goal_1' => 0.8,
                  'goal_2' => 0.8,
                  'goal_3' => 0.8,
                  'goal_4' => 0.8,
                  'goal' => 3.2,
                  'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity45 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective11,
                  'product_id' =>$idobjectiveproduct46,
                  'name' => 'Actividad 5.1.4. Realizar el Seguimiento al cumplimiento de los asuntos ambientales concertados en los EOT, PBOT, POT de los Municipios de la jurisdicción de la CAS.',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity46 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective11,
                  'product_id' =>$idobjectiveproduct47,
                  'name' => 'Actividad 5.1.5. Realizar el Seguimiento, control y apoyo de los planes de saneamiento y manejo de vertimientos (PSMV)',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity47 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective11,
                  'product_id' =>$idobjectiveproduct48,
                  'name' => 'Actividad 5.1.6. Realizar el Seguimiento, control y apoyo a los programas de uso eficiente y ahorro  del agua (PUEAA).',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity48 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective11,
                  'product_id' =>$idobjectiveproduct49,
                  'name' => 'Actividad 5.1.7. Realizar el Seguimiento, control y apoyo a los planes de gestión integral de residuos sólidos (PGIRS) ',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity49 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective11,
                  'product_id' =>$idobjectiveproduct50,
                  'name' => 'Actividad 5.1.8. Realizar el Seguimiento, control y registro a los generadores de residuos peligrosos. RESPEL.',
                  'goal_1' => 94,
                  'goal_2' => 40,
                  'goal_3' => 40,
                  'goal_4' => 40,
                  'goal' => 214,
                  'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity50 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective11,
                  'product_id' =>$idobjectiveproduct51,
                  'name' => 'Actividad 5.1.9. Realizar apoyo y sensibilización para la implementacion de alternativas de reducción, separación y de aprovechamiento de residuos.',
                  'goal_1' => 1,
                  'goal_2' => 2,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 5,
                  'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity51 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective11,
                  'product_id' =>$idobjectiveproduct52,
                  'name' => 'Asignación de recursos al proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity52 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct53,
                  'name' => 'Actividad 5.2.1 Realizar monitoreo y  seguimiento a emisiones e inmisiones atmosfericas y control de ruido.',
                  'goal_1' => 21,
                  'goal_2' => 20,
                  'goal_3' => 39,
                  'goal_4' => 43,
                  'goal' => 123,
                  'weighing' => 50, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity53 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct54,
                  'name' => 'Actividad 5.2.2 Realizar el apoyo para la operación de redes y estaciones de monitoreo.',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 3,
                  'weighing' => 49, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity54 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct55,
                  'name' => 'Asignación de recursos al proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity55 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' =>$idobjectiveproduct56,
                  'name' => 'Actividad 5.3.1.Conformar, fortalecer  equipar  la Unidad de Reacción Ambiental Inmediata.',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 3,
                  'weighing' => 25, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity56 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' =>$idobjectiveproduct57,
                  'name' => 'Actividad 5.3.2. Realizar Actividades para la Construccción, administracion, sostenimiento, dotacion y operación del centro de Atención, valoración y capacitación de fauna y flora silvestre.',
                  'goal_1' => 2,
                  'goal_2' => 2,
                  'goal_3' => 2,
                  'goal_4' => 2,
                  'goal' => 8,
                  'weighing' => 25, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity57 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' =>$idobjectiveproduct58,
                  'name' => 'Actividad 5.3.3. Fortalecer e Implementar  actividades para el control ambiental. ',
                  'goal_1' => 2,
                  'goal_2' => 2,
                  'goal_3' => 2,
                  'goal_4' => 2,
                  'goal' => 8,
                  'weighing' => 25, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity58 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' =>$idobjectiveproduct59,
                  'name' => 'Actividad 5.3.4.Apoyar  la  Implementacion de actividades del pacto intersectorial por la madera legal en Colombia (PIMLC)',
                  'goal_1' => 3,
                  'goal_2' => 1,
                  'goal_3' => 2,
                  'goal_4' => 1,
                  'goal' => 7,
                  'weighing' => 24, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity59 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' =>$idobjectiveproduct60,
                  'name' => 'Asignación de recursos al proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity60 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct61,
                  'name' => 'Actividad 6.1.1.  Implementar actividades del plan estratégico de Tecnologías de la Información-PETI.',
                  'goal_1' => 3,
                  'goal_2' => 5,
                  'goal_3' => 4,
                  'goal_4' => 4,
                  'goal' => 16,
                  'weighing' => 50, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity61 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct62,
                  'name' => 'Actividad 6.1.2. Realizar la actualización y reporte de la información en el SIAC',
                  'goal_1' => 0.8,
                  'goal_2' => 0.8,
                  'goal_3' => 0.8,
                  'goal_4' => 0.8,
                  'goal' => 3.2,
                  'weighing' => 49, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity62 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct63,
                  'name' => 'Asignación de recursos al proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity63 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective15,
                  'product_id' =>$idobjectiveproduct64,
                  'name' => 'Actividad 6.2.1.  Ejecutar proyectos de educación y sensibilización para promover procesos de protección, conservación y recuperación de los recursos naturales renovables en la jurisdicción de la CAS y en cumplimiento de las acciones definidas en el Plan nacional de educación ambiental.',
                  'goal_1' => 3,
                  'goal_2' => 5,
                  'goal_3' => 5,
                  'goal_4' => 5,
                  'goal' => 18,
                  'weighing' => 50, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity64 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective15,
                  'product_id' =>$idobjectiveproduct65,
                  'name' => 'Actividad 6.2.2. Comunicar y divulgar para promover la participacion ciudadana en la gestion ambiental y generar  sensibilización y cultura ambiental.',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 49, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity65 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective15,
                  'product_id' =>$idobjectiveproduct66,
                  'name' => 'Asignación de recursos al proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity66 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective16,
                  'product_id' =>$idobjectiveproduct67,
                  'name' => 'Actividad 6.3.1. Promover estrategias para el posicionamiento, reconocimiento e identidad como Autoridad Ambiental ',
                  'goal_1' => 1,
                  'goal_2' => 3,
                  'goal_3' => 5,
                  'goal_4' => 3,
                  'goal' => 12,
                  'weighing' => 33, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity67 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective16,
                  'product_id' =>$idobjectiveproduct68,
                  'name' => 'Actividad 6.3.2. Adquirir  mobiliario, adecuar y ejecutar  obras para el mejoramiento de las instalaciones de la CAS y fortalecimiento del parque automotor',
                  'goal_1' => 2,
                  'goal_2' => 2,
                  'goal_3' => 3,
                  'goal_4' => 2,
                  'goal' => 9,
                  'weighing' => 33, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity68 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective16,
                  'product_id' =>$idobjectiveproduct69,
                  'name' => 'Actividad 6.3.3. Fortalecer y mejorar  la capacidad  administrativa y operativa de la CAS',
                  'goal_1' => 5,
                  'goal_2' => 3,
                  'goal_3' => 2,
                  'goal_4' => 2,
                  'goal' => 12,
                  'weighing' => 33, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity69 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective16,
                  'product_id' =>$idobjectiveproduct70,
                  'name' => 'Asignación de recursos al proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity70 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective17,
                  'product_id' =>$idobjectiveproduct71,
                  'name' => 'GASTOS DE INVERSION OPERATIVOS ',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 20, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity71 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective17,
                  'product_id' =>$idobjectiveproduct72,
                  'name' => 'PASIVOS',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 20, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity72 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective17,
                  'product_id' =>$idobjectiveproduct73,
                  'name' => 'REGALIAS OCAD',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 2,
                  'weighing' => 20, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity73 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective17,
                  'product_id' =>$idobjectiveproduct74,
                  'name' => 'COSTOS INDIRECTOS DE INVERSION',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 1,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 20, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity74 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective17,
                  'product_id' =>$idobjectiveproduct75,
                  'name' => 'VIGENCIAS FUTURAS',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 1,
                  'goal' => 1,
                  'weighing' => 20, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity75 = DB::getPdo()->lastInsertId();

                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity1,
                    'year' =>1,
                    'value' => 10,
                    'description' => 'Asistencia técnica y asesoría para la incorporación de las determinantes ambientales y la gestión del riesgo de desastres en los EOT. Se hizo mesas de trabajo con los Municipios  de: Capitanejo, Aratoca, San Vicente de Chucurí, Zapatoca, Coromoro, Palmas del Socorro, San Gil, Oiba, San Andrés, Villanueva y se realizó concertación con Betulia y Zapatoca',
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia1 = DB::getPdo()->lastInsertId();

                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity1,
                      'year' =>1,
                      'value' => 10,
                      'description' => 'Asistencia técnica y asesoría para la incorporación de las determinantes ambientales y la gestión del riesgo de desastres en los EOT. Se hizo mesas de trabajo con los Municipios  de: Capitanejo, Aratoca, San Vicente de Chucurí, Zapatoca, Coromoro, Palmas del Socorro, San Gil, Oiba, San Andrés, Villanueva y se realizó concertación con Betulia y Zapatoca',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia1 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity2,
                      'year' =>1,
                      'value' => 74,
                      'description' => 'De acuerdo con lo dispuesto en el artículo 2.2.8.6.1.2 del Decreto Nacional 1076 de 2015, la Corporación procedió a revisar técnicamente los proyectos de Plan de Desarrollo 2016-2019, constatando su armonización con el Instrumento de Planificación Ambiental Regional, emitiendo el respectivo Concepto Técnico.
                    
                    Revisión de 74 Planes de Desarrollo Municipal y el Plan de Desarrollo Departamental. ',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia2 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity3,
                      'year' =>1,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia3 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity4,
                      'year' =>1,
                      'value' => 0.4,
                      'description' => 'En el Marco del Convenio 020 de 2014 celebrado con el Fondo Adaptación se aprobaron los documentos de la Fase de Aprestamiento de los POMCAS de los ríos Sogamoso, Opón y Afluentes directos del río Lebrija Medio.
                    
                    Se conformaron los consejos de cuencas de los POMCAS en proceso de formulación.
                    
                    La CAS junto con el Ministerio del Interior ha realizado las reuniones de consulta previa con las Organización de Base de las Comunidades Negras, Afrocolombianas y Palenqueras denominada CORPORACIÓN AFROCOLOMBIANA DE PUERTO WILCHES AFROWILCHES y a la Comunidad DACHI DRUA del Municipio de Puerto Parra y las Comunidades afrodecendientes el KICHARO y ASAKENCI.
                    
                    Inclusión de la evaluación del cambio climático y su incidencia en las cuencas hidrográficas en el proceso de formulación de los pomcas de los ríos Opón, Sogamoso y Afluentes directos al río Lebrija Medio, en desarrollo del convenio No. 020-14 Fondo de Adaptación - CAS.  
                    
                    Entrega de productos de la Fase de Diagnostico de los POMCAS del Río Carare Minero (Capacidad uso del suelo, hidrografía, morfometría, ecosistemas, análisis funcional, caracterización social, cultural, económico y político administrativo, clima geología y pendientes), Afluentes directos del Río Lebrija Medio (Uso de tierra, geología y plantillas), Río Opón (Uso de tierra, geomorfología y plantillas). Río Sogamoso (Uso de tierra y Plantillas)
                    
                    Celebración Convenio con CORPOBOYACA para la formulación del POMCA de los Afluentes directos al Magdalena Medio entre los rios Negro y Carare. ',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia4 = DB::getPdo()->lastInsertId();
                    
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity6,
                      'year' =>1,
                      'value' => 0.4,
                      'description' => 'Suscripción del Contrato No. 003-00794-2016 de fecha 7/12/2016, cuyo objeto es Actualización de los estudios Soporte para la reglamentación del uso de las aguas de la microcuenca de la quebrada la Honda en el municipio del Socorro, Santander',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia5 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity7,
                      'year' =>1,
                      'value' => 1,
                      'description' => 'Resolución No. 00001088 del 27/09/2016 por medio de la cual se adopta el Plan de Ordenamiento de la fuente hídrica superficial denominada Río Fonce en el departamento de Santander.
                    
                    Celebración del Contrato de consultoría No. 004-00810-2016 de fecha 30/12/2016, para la elaboración de los estudios soporte para la reglamentación de vertimientos de la quebrada Curití. ',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia6 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity8,
                      'year' =>1,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia7 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity9,
                      'year' =>1,
                      'value' => 2,
                      'description' => 'Se ejecutó el Convenio No. 005-00469-2016: “Campaña de educación ambiental, enfocada a la producción sostenible,  protección y conservación de los recursos naturales a las comunidades de  Agua Blanca, Tauretes y Tamara pertenecientes a la comunidad indígena U´wa en los municipios de Cerrito y Concepción jurisdicción de la CAS.',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia8 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity10,
                      'year' =>1,
                      'value' => 31.5,
                      'description' => 'Celebración del contrato No. 00806-2016 para: “Implementar Actividades de Recuperación Ecológica que permitan Recuperar Suelos y Servicios Ecosistémicos en Jurisdicción de los municipios de Barrancabermeja y Cimitarra, Departamento de Santander”, con su respectiva interventoría Externa. (80 Ha). 
                    
                    Etapa precontractual: Desarrollo de actividades de protección y recuperación de nacimientos de fuentes hídricas en el municipio de Landázuri, Santander, mediante actividades de reforestación. (10 Has).  (Proceso declarado desierto)',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia9 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity11,
                      'year' =>1,
                      'value' => 2844.46,
                      'description' => 'Proceso precontractual del proyecto: Realizar el mantenimiento de las plantaciones protectoras – productoras y protectoras establecidas por la CAS en el departamento de Santander” (681,42 has), con su respectiva interventoría Externa.
                    
                    Se ejecutó el Contrato de Obra No. 003-00491 -2016 Fase 3: Mantenimiento año 3 a las actividades de restauración asistida (activa) y espontánea (pasiva), establecidas en los municipios de Coromoro, Encino y Gámbita, en el marco del Convenio Interadministrativo No. 90-2012, suscrito entre el MADS y la CAS; (113,41 has de Restauración Asistida y 2732,05 de restauración Espontanea).
                    ',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia10 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity12,
                      'year' =>1,
                      'value' => 100,
                      'description' => 'La CAS aceptó como medida  de compensación ambiental a Ecopetrol, la adquisición del predio Bellavista, ubicado en el paraje La Legía del Corregimiento El Centro, municipio de Barrancabermeja (100 hectáreas). Mediante escritura 0166 de febrero 10 de 2016 de la Notaria primera de Barrancabermeja.',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia11 = DB::getPdo()->lastInsertId();
                    
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity14,
                      'year' =>1,
                      'value' => 3,
                      'description' => '
                    Se adquirieron 217.567 Plantulas para apoyar los procesos   de  reforestación, educación ambiental y participación ciudadana mediante  Contrato de Suministro No. 008-00383-16
                    
                    Se adquirieron insumos agropecuarios y productos biológicos  para la producción de material vegetal, como estrategia para la conservación y propagación de la diversidad biológica del departamento de Santander. (2010 postes plásticos reciclados e insumos para el desarrollo del vivero de la CAS - granja del Cucharo y para las zonas de la sede principal) Mediante convenio No. 008-00430-2016
                    
                    Se Fortaleció el vivero municipal de Chima con el suministro de insumos para la producción de 50.000 plántulas de especies nativas para promover la reforestación de la cuenca hidrográfica de la quebrada La Chimera. Convenio No. 005-00421-2016',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia12 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity15,
                      'year' =>1,
                      'value' => 48,
                      'description' => 'Se realizó capacitación a las familias de la comunidad veredal de 10 municipios de la provincia Guanentina sobre protección y sostenibilidad de nacimientos de  agua que surten acueductos rurales. Convenio No. 005-00389-2016 (48 Nacimientos conservados). (48 Talleres de capacitación)
                    
                    Se realizó la adquisición de insumos para realizar actividades de aislamiento para la protección y recuperación de nacimientos, afloramientos y zonas de recarga hídrica en municipios de la jurisdicción de la CAS. Mediante convenio No. 008-00430-2016',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia13 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity16,
                      'year' =>1,
                      'value' => 104.7,
                      'description' => 'En el marco del proyecto BanCO2, se realizó la caracterización, selección y vinculación de veintitrés (23) nuevas familias pertenecientes a  los municipios de Zapatoca y San Vicente las cuales conservaran y protegerán 104,7 hectáreas de bosque natural ubicado en sus predios; de ésta manera se alcanza un total de 575 ha de bosque natural protegido y se conforma un grupo de 87 familias asociadas al proyecto, a las cuales se les da acompañamiento con la ejecución de actividades de educación ambiental  en temas de cambio climático y su efecto sobre el ecosistema.
                    
                    Capacitaciones predio a predio con los beneficiarios del proyecto tratando temas de conservación de la biodiversidad, Igualmente se realizó un diagnóstico en cada finca donde se verificó la ubicación del proyecto productivo, la zona de habitación y el área del bosque, con el fin de verificar las posibilidades de inversión de los recursos aportados por los patrocinadores del proyecto. ',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia14 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity17,
                      'year' =>1,
                      'value' => 2,
                      'description' => 'Se realizó la recuperación de 2 Ha de suelos degradados  para la estabilización del deslizamiento en la ladera de la margen Derecha del rio Pueblo Viejo frente al Km 21,5 de la vía Coromoro – Pueblo Viejo. Contrato No. 003-00385-2016',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia15 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity18,
                      'year' =>1,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia16 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity19,
                      'year' =>1,
                      'value' => 1.4,
                      'description' => 'Convenio 005-00681-2016 ISAGEN - CAS,  para ejecutar el programa para la construcción de unidades sanitarias con sistemas de tratamiento de aguas residuales domésticas para los municipios de Betulia, San Vicente de Chucuri, Los Santos, Zapatoca, en áreas de jurisdicción de la CAS y la Central Hidroeléctrica Sogamoso  (61 unidades)
                       Se ejecutó el convenio No. 005-00427-2016 para realizar los Estudios y diseños del interceptor sanitario Rio Fonce margen izquierda y sector Bella Isla del municipio de San Gil.
                     Suscripción del convenio  interadministrativo No. 005-00804-2016 de fecha 22/12/2016 con el municipio de Málaga para la construcción de la PTAR para la Planta de Beneficio Animal.
                    ',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia17 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity20,
                      'year' =>1,
                      'value' => 0.1,
                      'description' => 'Etapa precontractual para Elaborar el estudio del cálculo y establecimiento de la  meta global de carga contaminante para el cálculo de la tarifa de la tasa retributiva (TTR). por vertimientos puntuales en los tramos de la cuenca de los ríos Magdalena y Fonce en jurisdicción de la Corporación Autónoma Regional de Santander – CAS. (Proceso declarado desierto)',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia18 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity21,
                      'year' =>1,
                      'value' => 2,
                      'description' => 'Ejecución del contrato No. 008-00425-2016  laboratorio debidamente acreditado para realizar los diferentes procesos de verificación de las autodeclaraciones de la tasa retributiva y procesos de seguimiento ambiental con análisis fisico-quimica-microbiologíca e hidrobiológica a fuentes hídricas y vertimientos de los diferentes usuarios (municipios-empresas) de la jurisdicción de la CAS (FONCEGAN (1 muestra), Ciénaga San Silvestre (6 muestras) y  Río Fonce (26 muestras))
                        Se realizó monitoreo a la quebrada El Zarzal del Municipio de Barrancabermeja (emergencia). Mediante Orden de prestación de servicios  (6 muestras)',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia19 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity22,
                      'year' =>1,
                      'value' => 20,
                      'description' => 'Ejecución de auditorias y acompañamientos a monitoreos y caracterización de vertimientos de aguas residuales domesticas a 12 municipios (San Benito, Aguada, Chima, Chipatá. Puente Nacional, Guapota, Hato, Oiba, Charalá, Guadalupe, El Palmar y Albania) y a 8 empresas en los municipios de Barbosa, Barrancabermeja (3), Sabana de Torres (2), Puerto Wilches y Betulia.',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia20 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity23,
                      'year' =>1,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia21 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity24,
                      'year' =>1,
                      'value' => 800,
                      'description' => 'En ejecución el Contrato de consultoria 004-00702-2016 con el objeto Desarrollar el componente tecnológico de procesamiento de imágenes satelitales, cartografía digital y sistemas de información geográfica - SIG en el estudio multitemporal de la cobertura de la tierra mediante metodología corine land cover para el Distrito Regional del Manejo Integrado DRMI de la Serranía de los Yariguies a escala 1:25.000, en el marco del acuerdo de cooperación AC 02 radicado cas 005-00831-2014.
                       Celebración del Contrato No. 004-00809--2016: Incorporar el criterio edafológico y el criterio para la toma de decisiones e implicaciones como fase 2, al estudio técnico de delimitación de la ciénaga Chucurí del municipio de Barrancabermeja, realizado en la fase I, aplicando la guía principios y criterios para la delimitación de humedales continentales. ',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia22 = DB::getPdo()->lastInsertId();
                    
                    
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity27,
                      'year' =>1,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia23 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity28,
                      'year' =>1,
                      'value' => 0.833333333333333,
                      'description' => 'Se ejecutó el Convenio No. 005-00385-2016. Evaluar el estado poblacional del cóndor andino (Vultur gryphus) en la jurisdicción de la CAS y aplicación de estrategias para su conservación.
                      En ejecución Convenio No. 005-00384-2016 Implementar acciones de manejo para la recuperación del corredor biológico del manatí del caribe (Trichechus manatus), en los Complejos Cenagosos de Paredes y corredor, en los municipios de Puerto Wilches y Sabana de Torres, departamento Santander.
                       Se ejecutó el Convenio de Asociación No. 005-004406-2016 para Implementar estrategias para la recuperación del corredor biológico de la nutria neotropical (Lontra longicaudis) en la cuenca del Río Suárez en jurisdicción de los municipios de Puente Nacional, Barbosa y Güepsa, departamento de Santander. 
                     Formulación del proyecto Caracterización y Evaluación de estado de Conservación de los bosques de robles en los municipios de Vélez, El Peñón, Bolívar y Puente Nacional, de la Provincia de Vélez, Santander. ',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia24 = DB::getPdo()->lastInsertId();
                    
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity30,
                      'year' =>1,
                      'value' => 0.6,
                      'description' => 'En ejecución el convenio 005-00772-2016 Promover procesos de protección y conservación de los recursos naturales renovables  a grupos base en el Páramo de Almorzadero en jurisdicción de la Corporación Autónoma Regional de Santander – CAS. ',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia25 = DB::getPdo()->lastInsertId();
                    
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity32,
                      'year' =>1,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia26 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity33,
                      'year' =>1,
                      'value' => 0.95,
                      'description' => '1. Ejecución del contrato de suministro No. 008-00717-2016 con el objeto Adquisición de mochilas de fique para promover la racionalización, reutilización y devolución de bolsas plásticas en la jurisdicción de la Corporación Autónoma Regional de Santander - CAS. (10.000 mochilas)
                        2. Se construyeron 105 estufas a través del contrato de obra No. 003-00530-2016 para la Construcción de estufas ecológicas para leña en los sectores rurales en los municipios de Betulia, San Vicente de Chucurí y Zapatoca del departamento de Santander. Contrato de Interventoría 004-00560-2016.',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia27 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity34,
                      'year' =>1,
                      'value' => 2,
                      'description' => 'Se realizó la Caracterización y el fortalecemiento de iniciativas de negocios verdes que conlleven al uso racional de los recursos naturales renovables dentro de la Jurisdicción de la Corporación Autónoma Regional de Santander – CAS. 
                    Se proyectó el borrador de la Resolución para la implementación de la ventanilla de negocios verdes en la CAS.
                    Participación en la primera vitrina internacional  y primer congreso Internacional de Negocios Verdes, Magdalena Medio 2016 (VINEV) para el fortalecimiento institucional y articulación para la gestión ambiental en la ciudad de Barrancabermeja ',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia28 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity35,
                      'year' =>1,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia29 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity36,
                      'year' =>1,
                      'value' => 35,
                      'description' => 'Apoyo a 8 municipios en Instrumentos de Planificación Municipal en la Gestión del Riesgo. (Puerto Wilches, Onzaga, Carcasí, Málaga, Encino y Zapatoca, Jordán y Coromoro)
                    Apoyo técnico a 35 municipios mediante la realización de visitas  para la atención de emergencias (Mogotes, Molagavita, Sucre, Simacota, Puerto Wilches, Santa Bárbara, Cimitarra, Cepita, Santa Helena del Opón, Sabana de Torres, Charalá,  Barrancabermeja, Málaga, San José de Miranda, Suaita, los Santos, Chipatá, Guavatá, Aguada, San Benito, Vélez, Coromoro, Encino, Pinchote, Capitanejo, Galán, San Gil, Paramo, Carmen de Chucurí, San Vicente de Chucuri, Palmar, Ocamonte, Oiba, Curití y Valle de San José).
                    Emisión de 99 conceptos técnicos por visitas realizadas y evaluación de planes de Gestión del riesgo y/o contingencia contra incendios forestales.
                    Apoyo a 7 municipios con el carrotanque para suministro de agua y control de incendios (Cabrera, Confines, Páramo, Pinchote, San Gil, Suaita, Vélez). Apoyo con maquinaria a los municipios de Confines y Palmar.
                    Emisión de Circular N°00001-2016, sobre Debilitamiento del periodo de influencia del fenómeno del niño; Circular N°00002-2016   de asunto “Medidas y Recomendaciones para prevenir Afectaciones por Posible Manifestación del Fenómeno La Niña.',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia30 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity37,
                      'year' =>1,
                      'value' => 0.7,
                      'description' => 'En ejecución convenio N° 005-376-2016 para la “Elaboración  de estudio básico de amenaza, vulnerabilidad y riesgo para el municipio de Santa Helena del Opón, departamento Santander”, ',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia31 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity38,
                      'year' =>1,
                      'value' => 1,
                      'description' => 'Apoyo y participación en los talleres y Socialización para la formulación del Plan Integral de Cambio Climático del Departamento de Santander - PICCDS.',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia32 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity39,
                      'year' =>1,
                      'value' => 1,
                      'description' => 'Se apoyó el fortalecimiento y creación de 27 brigadas comunitarias como estrategia de educación ambiental para la gestión integral del riesgo de desastres y adaptación al cambio climático, en la jurisdicción de la – CAS.  Aguada (2), Barbosa (2), Capitanejo (2), Macaravita (3), Oiba (2), Palmas del Socorro (3), Sabana de Torres (2), Suaita (2), San Benito (2), Málaga (2), Barrancabermeja (3), y Vélez(2)).convenio No. 005-00404-16',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia33 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity40,
                      'year' =>1,
                      'value' => 1,
                      'description' => 'Se realizaron actividades de sensibilización y capacitación sobre manejo de los recursos naturales en tres municipios productores de panela. (Gámbita, Suaita y Confines). Convenio N° 005-381-2016',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia34 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity41,
                      'year' =>1,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia35 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity42,
                      'year' =>1,
                      'value' => 0.8,
                      'description' => ' “Elaboración de los estudios, diseños y presupuestos para la construcción de obras de protección del cauce y recuperación de tierras en el Río Carare, sector del corregimiento Puerto Araujo, municipio de Cimitarra, Santander” , mediante el Contrato No. 004-00800-2016.
                    
                    Celebración Convenio No. 005-00808-2016  Construccion de obras de proteccion a las micro cuencas ubicadas en el sector la Laguna- el Barranco- la Lajita – el Guayabo, en las veredas Popoa-Casiquito, municipio de Guavatá, departamento de Santander.
                    
                    ',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia36 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity43,
                      'year' =>1,
                      'value' => 0.554618627826754,
                      'description' => 'De las 2609 autorizaciones ambientales solicitadas a 31 de diciembre se han resuelto 1447',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia37 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity44,
                      'year' =>1,
                      'value' => 0.220306748466258,
                      'description' => 'De las 4026 autorizaciones ambientales priorizadas correspondientes al 25% del total, a 31 de diciembre se ha realizado seguimiento a 3591',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia38 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity45,
                      'year' =>1,
                      'value' => 0.781566820276498,
                      'description' => 'De las 2.170 quejas y contravenciones ambientales recibidas  a la fecha se han atendido 1.696',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia39 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity46,
                      'year' =>1,
                      'value' => 1,
                      'description' => 'Mediante oficio radicado CAS No. 1053-16 se solicito a cada una de las autoridades de Planeación Municipal que hacen parte de la jurisdicción de la CAS, el cumplimiento de la Resolución 1432 de 2010, por la cual se expiden la determinantes ambientales.',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia40 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity47,
                      'year' =>1,
                      'value' => 1,
                      'description' => 'Seguimiento y control a los PSMV de los 74 municipios del área de jurisdicción de la CAS',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia41 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity48,
                      'year' =>1,
                      'value' => 1,
                      'description' => 'Seguimiento a los Programas de Uso Eficiente y Ahorro de Agua de los 74 municipios de la jurisdicción y 26 empresas.',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia42 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity49,
                      'year' =>1,
                      'value' => 1,
                      'description' => 'Requerimiento para presentación y/o complementación, actualización y adopción de PGIRS a 36 municipios.
                    Se realizó concepto técnico de multa a los PGIRS de La Paz y Socorro.
                    Se resolvieron los recursos de multa de los PGIRS de Chipatá y Mogotes.
                    Seguimiento a los 74 municipios de la jurisdicción mediante los cuales se les solicita que brinden información relacionada al aprovechamiento de los residuos sólidos generados (cantidad de residuos aprovechados, días y horarios de recolección, empresa que presta el servicio y disposición).  ',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia43 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity50,
                      'year' =>1,
                      'value' => 94,
                      'description' => 'Se realizó registro de 94 empresas generadoras de  RESPEL ante el IDEAM
                    
                    En ejecución Convenio No. 005-00795-2016 para ejecutar el proyecto Sensibilización y seguimiento en el manejo integral de residuos peligrosos a los generadores de los municipios de Barbosa, San Gil y Socorro - Santander.',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia44 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity51,
                      'year' =>1,
                      'value' => 1,
                      'description' => 'Se realizó la Implementación de Estrategias de Educación Ambiental para la ejecución de alternativas de reducción, separación y aprovechamiento de residuos, en el municipio Capitanejo – Santander. Contrato No. 005-559-2016',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia45 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity52,
                      'year' =>1,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia46 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity53,
                      'year' =>1,
                      'value' => 21,
                      'description' => 'Monitoreos de ruido a 21 establecimientos en los municipios de Zapatoca, Barichara, Barbosa, Capitanejo, Socorro, Guacamayo,  San Gil, Málaga, Cimitarra y Vélez ',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia47 = DB::getPdo()->lastInsertId();
                    
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity55,
                      'year' =>1,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia48 = DB::getPdo()->lastInsertId();
                    
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity57,
                      'year' =>1,
                      'value' => 0.95,
                      'description' => 'Ejecución del convenio No. 005-00226-2016 Ejecutar las actividades de sostenimiento y atención del Centro de Recuperación de Fauna Silvestre de la CAS, ubicado en el municipio de Socorro.
                    Se realizaron actividades de atención, sostenimiento y valoración de fauna silvestre en el Magdalena Medio, municipio de Sabana de Torres, Puerto Wilches, Cimitarra, Puerto Parra y Barrancabermeja convenio No. 005-00382-2016.
                    Convenio No. 005-00807-2016 para la ejecución de actividades de atención, sostenimiento y valoración de fauna silvestre en el Magdalena Medio - Santander.',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia49 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity58,
                      'year' =>1,
                      'value' => 0.75,
                      'description' => 'Se caracterizaron 16 Municipios y se realizó acompañamiento a 58 UPM a través del convenio No. 169-2016 de formalización minera, suscrito entre  Ministerio de Minas y Energía - CAS
                    Ejecución de actividades de apoyo de movilización, cargue y descargue, marcado e inmunizado de los productos decomisados en operativos de control al tráfico ilegal de flora y fauna silvestre en jurisdicción de la CAS, a través del contrato No. 004-00801-2016.',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia50 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity59,
                      'year' =>1,
                      'value' => 3,
                      'description' => 'Renovación del Pacto Intersectorial por la Madera Legal en Colombia, en el cual se establecieron las nuevas estrategias y compromisos para la Fase de Fortalecimiento del Pacto a nivel Nacional. 
                    Asistencia a la reunión ampliada de la Mesa de Bosques de Santander; en la cual se  concertó la ruta de empoderamiento de la Mesa Forestal de Santander y se inició la construcción del plan operativo.
                    Creación del comité interinstitucional de control de fauna y flora en el departamento de Santander',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia51 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity60,
                      'year' =>1,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia52 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity61,
                      'year' =>1,
                      'value' => 0.786666666666667,
                      'description' => 'En ejecución el Contrato de Prestación de Servicios No. 608-2016, con el objeto: Automatizar en el aplicativo CITA los módulos de planes de contingencia y  permiso de investigación científica en diversidad biológica, así como también brindar el soporte, capacitación y hacer las mejoras y ajustes a los procesos ya implementados.
                    En ejecución el Contrato No. 529 - 2016 Contratar el soporte , mantenimiento, capacitación y actualización  del aplicativo GD - SOFT de la CAS; así como también la migración del aplicativo a su versión web y la implementación de una aplicación móvil, complemento del software, para la consulta de información financiera de los usuarios.
                    Se Renovó la Licencia para el Firewall Fortinet FortiGate 200B, por un (1) año, con la instalación, capacitación, configuración y soporte.
                    Formulación del proyecto: Mejoramiento de la plataforma tecnológica de la Corporación Autónoma Regional de Santander –CAS- por medio de la adquisición de equipos tecnológicos y licencias de software.  Proceso en etapa de Recusación en Procuraduría. (Se declaro desierto)',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia53 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity62,
                      'year' =>1,
                      'value' => 0.8,
                      'description' => '• Se realizó la validación de registros de RESPEL - Registro de Generadores de Residuos o Desechos Peligrosos.
                    • Se realizó el registro de información de usuarios del recurso hídrico y fuentes hídricas en el SIRH – Sistema de Información de Recurso Hídrico.
                    * Registro de información de aprovechamientos forestales, movilizaciones forestales, decomisos forestales, Plantación protectora e incendios de cobertura vegetal en el Sistema Nacional de Información Forestal - SNIF.
                    En total se reportaron al SIAC 1.832 registros de un universo de 1.992.',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia54 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity63,
                      'year' =>1,
                      'value' => 0.01,
                      'description' => '',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia55 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity64,
                      'year' =>1,
                      'value' => 0.866666666666667,
                      'description' => 'Ejecución del Convenio 005-00377-16 Campaña (Programa) Educativa Para la Protección, Conservación, Ahorro y Uso Eficiente del Agua en el Colegio Nacional San José de Guanenta y Sedes, Municipio de San Gil Santander.
                    Creación de dos (2) Ecoclubs en los municipios Cimitarra y Barrancabermeja como estrategia de Educación Ambiental para la Gestión Integral del Riesgo de Desastres y Adaptación al Cambio Climático
                    Suscripción Convenio No. 005-00793-2016  para Conformar treinta y tres (33) grupos de promotores ambientales en las áreas de amortiguación de los ecosistemas estratégicos ubicados en la jurisdicción de la Corporación Autónoma Regional de Santander – CAS.
                    Realización de jornadas de capacitación para la conservación, restauración y preservación de los recursos naturales renovables y fortalecimiento de la imágen institucional en los municipios que hacen parte del área de influencia de la jurisdicción de la CAS. Contrato No. 004-00802-2016.',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia56 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity65,
                      'year' =>1,
                      'value' => 1,
                      'description' => 'Se ejecutó el Plan de Medios para los 74 municipios de las provincias Guanenta, Comunera, de Vélez, Mares, García Rovira y municipios que hacen parte de la Oficina Enlace Bucaramanga para  promover estrategias de comunicación y divulgación para la gobernabilidad institucional, la sensibilización ambiental y la gestión del riesgo. Contrato No. 004-00409-2016
                    Participación en la V Feria Internacional del Medio Ambiente y VII encuentro nacional de Jóvenes de Ambiente - CORFERIAS 2016, con el fin de fortalecer la imagen institucional de la CAS, así mismo compartir y conocer experiencias ambientales a nivel nacional e internacional.',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia57 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity66,
                      'year' =>1,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia58 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity67,
                      'year' =>1,
                      'value' => 1,
                      'description' => 'Se ejecutó el Plan de Medios para los 74 municipios de las provincias Guanenta, Comunera, de Vélez, Mares, García Rovira y municipios que hacen parte de la Oficina Enlace Bucaramanga para  promover estrategias de comunicación y divulgación para la gobernabilidad institucional, la sensibilización ambiental y la gestión del riesgo. Contrato No. 004-00409-2016
                    Participación en la V Feria Internacional del Medio Ambiente y VII encuentro nacional de Jóvenes de Ambiente - CORFERIAS 2016, con el fin de fortalecer la imagen institucional de la CAS, así mismo compartir y conocer experiencias ambientales a nivel nacional e internacional.',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia59 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity68,
                      'year' =>1,
                      'value' => 0.7,
                      'description' => '
                    1. Proceso precontractual para: Adecuación de las instalaciones de la sede principal de la CAS.
                    2. Se adquirieron siete (7) Motocicletas mediante el contrato Fortalecimiento del parque automotor de la CAS',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia60 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity69,
                      'year' =>1,
                      'value' => 4.4,
                      'description' => 'Se realizó la  actualización del Sistema de Gestión Integrado de la CAS mediante la ejecución del Contrato de prestación de servicio No. 00380 de 2016. 
                    Actualización del proceso de gestión documental de la CAS. (Limpieza y desinfección de 105 metros lineales de archivo).
                    Se hizo la transferencia de Recursos a la Comisión Nacional del Servicio Civil para financiar los costos que le corresponden a la CAS en desarrollo del proceso de selección por mérito para proveer los empleos vacantes de su planta de personal (Resolución No. CNSC - 20161000045365 del 13-12-2016) 
                    Proceso precontractual  Contratar los servicios para asesorar y asistir técnica y profesionalmente a la Subdirección Administrativa y Financiera de la Corporación Autónoma Regional de Santander CAS, en el periodo de preparación obligatoria dentro del proceso de convergencia hacía las normas internacionales contables del sector público – NICSP, enmarcado dentro del proyecto denominado: Implementación de las normas internacionales de contabilidad para el sector público NICSP en la subdirección Administrativa y Financiera de la Corporación Autónoma regional de Santander CAS. (Declarado desierto)
                    Ejecución de auditorias internas del Sistema de Gestión Integrado, durante el segundo semestre de 2016, a través de la cual se identificaron oportunidades de mejora en los diferentes procesos con miras a mejorar la prestación del servicio a los usuarios internos y externos y a reducir los hallazgos por parte de los organismos de control.',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia61 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity70,
                      'year' =>1,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia62 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity71,
                      'year' =>1,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia63 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity72,
                      'year' =>1,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia64 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity73,
                      'year' =>1,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia65 = DB::getPdo()->lastInsertId();
                    
                    
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity1,
                      'year' =>2,
                      'value' => 38,
                      'description' => 'Asistencia técnica a 38 municipios de la jurisdicción con el apoyo del Ministerio de Ambiente y Desarrollo Sostenible, en el marco del taller “ASISTENCIA TÉCNICA PARA LA INCORPORACION DE LA GESTIÓN DEL RIESGO Y LAS DETERMINANTES AMBIENTALES EN LOS POT”.  Este evento se desarrolló con el propósito de fortalecer las capacidades técnicas e institucionales de los municipios del área de jurisdicción de la CAS, teniendo en cuenta que en la toma decisiones territoriales deben incorporarse las consideraciones sobre desarrollo seguro y sostenible que promuevan medidas para la sostenibilidad ambiental del territorio, que se constituyan en condicionante para el uso y la ocupación del suelo. 
                    Contrato No. 004-00511-2017 para la Actualización de las determinantes ambientales para la elaboración, ajuste, revisión y/o modificación de los planes, básicos y esquemas de ordenamiento territorial de los municipios del área de la jurisdicción de la CAS',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia66 = DB::getPdo()->lastInsertId();
                    
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity3,
                      'year' =>2,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia67 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity4,
                      'year' =>2,
                      'value' => 0.4,
                      'description' => 'La consultoría de los POMCAS de los Ríos Opón, Río Sogamoso, Afluentes directos del rio Lebrija Medio, entrego los documentos finales a la Corporación e interventoría para revisión y evaluación. 
                    Interventoría realiza pronunciamiento aprobando los tres POMCAS.    
                    POMCA Rio medio bajo Suarez, la consultoría entrego a CORPOBOYACA e interventoría, los documentos finales para la revisión, se recibió en la CAS copia de esos documentos igualmente para revisión.  
                    POMCA Río Carare Minero la consultoría entrego a la CAS, CORPOBOYACA e interventoría, los documentos finales para la revisión, se está realizando dicha actividad 
                    En revisión documentos de Diagnostico del POMCA Rio Lebrija medio, la secretaria técnica es ejercida por CDMB, 
                    Aprobación de la fase de aprestamiento y en ejecución fase de diagnóstico de la POMCA de afluentes directos al río Magdalena entre el Río Negro, la cual tiene comisión conjunta con CORPOBOYACA quien ejerce la secretaria técnica ',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia68 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity5,
                      'year' =>2,
                      'value' => 0.8,
                      'description' => 'Convenio No. 005-00483-2017 para Implementación de sistemas de recolección y almacenamiento de aguas lluvias, en el municipio de los Santos, departamento de Santander.',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia69 = DB::getPdo()->lastInsertId();
                    
                    
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity8,
                      'year' =>2,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia70 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity9,
                      'year' =>2,
                      'value' => 1.6,
                      'description' => 'Suscripción del contrato No. 003-0019-2018 para: Implementación de acciones para la proteción y conservación de fuentes abastecedoras de agua para los centros educativos de la comunidad indígena UWA, sector Agua Blanca, jurisdicción de la CAS, municipio de Cerrito departamento de Santander.
                    En ejecución convenio No. 005-00478-2017  para el Desarrollo de actividades de rehabilitación y recuperación ecológica en áreas de influencia del parque natural serranía de las quinchas, reserva forestal cuchilla del minero y distrito de manejo integrado del rio minero en la zona de influencia de la asociación de trabajadores campesinos del carare – ATCC.',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia71 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity10,
                      'year' =>2,
                      'value' => 223,
                      'description' => 'En ejecución el contrato de Obra No. 003-00502-2017 Ejecución de las actividades previstas en el marco de los convenios interadministrativos CAS- departamento de Santander relacionadas con reforestación y aislamiento de predios públicos adquiridos para la conservación de las fuentes hídricas abastecedoras  de acueductos municipales y veredales de la jurisdicción de la CAS (279 hectáreas en los municipios de Curití, Suaita, Onzaga, Charalá, La Belleza, Chipata y Puerto Wilches).
                    En ejecución el contrato de obra No. 003-00519-2017 para: Demarcación y aislamiento de predios públicos adquiridos para la conservación y protección de fuentes hídricas abastecedoras del municipio de Cabrera',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia72 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity11,
                      'year' =>2,
                      'value' => 560,
                      'description' => 'Formulación del proyecto y requerimiento: Mantenimiento de plantaciones establecidas por la CAS, en la jurisdicción. (702,23 Ha) 
                    * Segundo mantenimiento de 195,3 hectáreas de plantaciones protectoras establecidas con el objeto de Conservar Fuentes Hídricas abastecedoras de Acueductos municipales y Veredales en el departamento de Santander.
                    *  Segundo mantenimiento de 33,31 has de plantaciones protectoras – productoras establecidas con el fin de recuperar áreas afectadas por el fenómeno de la niña 2010 – 2011.
                    * Tercer Mantenimiento de 463,62 hectáreas de Plantaciones protectoras – productoras (Caucho) y Plantaciones protectoras establecidas en el municipio de Barrancabermeja.
                    * Tercer Mantenimiento de 10 hectáreas de plantación protectora establecida en el municipio de Bajo Simacota.
                    ',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia73 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity12,
                      'year' =>2,
                      'value' => 152,
                      'description' => 'Predio denominado El Molino, ubicado en la vereda Alto Centro Resumidero del municipio de Bolívar, con un área de 14 hectáreas, el cual fue recibido como medida de compensación de Ecopetrol por concepto de inversión del 1%, Poliducto de Oriente.
                    Predios adjudicados a la CAS, mediante sentencia de 10 de noviembre de 2017 por el Juzgado Primero Civil de Circuito Especializado en Restitución de Tierras (radicado 2015-070) los cuales se citan a continuación:
                    1. Predio El Regalo, ubicado en la vereda Once del municipio de San Vicente de Chucurí. Area 26 ha 1600 m2.
                    2. Finca Las Naranjas, ubicada en la vereda Vizcaína, municipio de San Vicente de Chucurí. Area 65 ha 4005 m2.
                    3. Predio los Naranjos ubicado en la vereda Vizcaína, municipio de San Vicente de Chucurí. Area 46 ha 4800 m2.',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia74 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity13,
                      'year' =>2,
                      'value' => 0.8,
                      'description' => 'Suscripción del convenio No. 005-00376 - 2017 cuyo objeto es Desarrollo de actividades de gestión ambiental urbana en el municipio de Ocamonte Santander',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia75 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity14,
                      'year' =>2,
                      'value' => 2.2,
                      'description' => 'Ejecución del contrato de suministros No. 008-127-2017 para: Adquisición de material vegetal para promover procesos de protección y conservación de la palma de cera en la jurisdicción de la CAS, en el marco de la semana mayor.
                    
                    En ejecución del contrato de Suministros No. 008-00440-2017 para Adquirir  material vegetal como apoyo a los procesos   de  reforestación, educación ambiental y participación ciudadana, en la  jurisdicción de la Corporación Autónoma Regional de Santander - CAS.
                    
                    En etapa precontractual el proyecto Construcción de viveros estratégicos para la producción de material vegetal, suministro de insumos agrícolas y productos biológicos como estrategia para la conservación y propagación de la diversidad biológica en los municipios de Los Santos, Pinchote, Socorro y Málaga. ',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia76 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity15,
                      'year' =>2,
                      'value' => 38.5,
                      'description' => 'Suscripción del contrato No. 008-00513-201: Ejecución de actividades para la protección, recuperación y aislamiento de nacimientos, afloramientos y zonas de recarga hídrica de la comunidad veredal del dieciseis (16) municipios de la Provincia Comunera',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia77 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity16,
                      'year' =>2,
                      'value' => 100,
                      'description' => '
                    Teniendo en cuenta que en el convenio 005- 00353-2015 suscrito entre la CAS- ESSA para el proyecto BanCO2 se originaron nuevos cupos para la vinculación de familias; el equipo BanCO2 realizo el proceso de caracterización de familias potenciales sobre la zona del municipio del Hato y Simacota. Durante esta actividad se suscribieron acuerdos de conservación con seis (6) familias que custodiaran un total de 74.87 hectáreas de bosque natural.
                    
                    Igualmente se realizó una adición en tiempo y recursos al convenio en mención que permitirá el ingreso de 14 nuevas familias en el municipio de Puerto Wilches, de las cuales a la fecha se han firmado acuerdos con 5 familias que custodiarán 25,7 hectáreas mas, para un total de 100,57 hectáreas
                    ',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia78 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity17,
                      'year' =>2,
                      'value' => 16.2,
                      'description' => 'Suscripción del contrato de obra No. 003-00446-2017con el objeto Ejecución de obras previstas en el marco del convenio interadministrativo No. 005-0925-2013 Fondo Adaptación CAS, relacionadas con: reforestación del deslizamiento vereda Morario y deslizamiento sector urbano municipio de Ocamonte y protección de talud y reforestación vía Tinavita – Guanivita, municipio de Onzaga(recuperación de  20,18 hectáreas de suelos degradados).',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia79 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity18,
                      'year' =>2,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia80 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity19,
                      'year' =>2,
                      'value' => 4.8,
                      'description' => '1-Suscripción del Convenio No. 005-00425-2017 con el objeto Construcción de 50 sistemas sépticos en el área rural del municipio de Encino para descontaminación de la cuenca alta del Rio Fonce departamento de Santander 
                    
                    2-Suscripción del Convenio No. 005-00462-2017 con el objeto Construcción de unidades sanitarias con sistemas de tratamiento de aguas residuales domesticas en el municipio de Coromoro
                     
                    3-Construcción de sistemas de  tratamiento de aguas residuales domesticas en los municipios de Socorro, Chima, Los Santos y Cabrera.
                    
                    4- Suscripción del Convenio No. 005-00477-2017 con el objeto Construcción de sistemas de  tratamiento de aguas residuales domesticas en las veredas Manjarrez, aterrados y/o primavera del municipio de Cimitarra
                    
                    5- Suscripción del Convenio No. 005-00484-2017 con el objeto Construcción de sistemas de tratamiento de aguas residuales domesticas en el municipio de Palmas del Socorro.
                    
                    6- Suscripción del Convenio No. 005-00479-2017 con el objeto Construcción de planta de tratamiento de aguas residuales en el municipio de Curití, Santander.
                    ',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia81 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity20,
                      'year' =>2,
                      'value' => 0.48,
                      'description' => 'Suscripción del Contrato de consultoria No. 004-0514-2017 para: Elaborar el estudio para la definicion de las corrientes o tramos de corrientes para el cálculo y establecimiento de la  meta global de carga contaminante para el cálculo de la tarifa de la tasa retributiva (TTR) por vertimientos puntuales en ocho (8) cuencas en jurisdicción de la Corporación Autónoma Regional de Santander – CAS. ',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia82 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity21,
                      'year' =>2,
                      'value' => 1,
                      'description' => 'En ejecución contrato No. 00448-2017con el objeto: Contratar un laboratorio debidamente acreditado para realizar los diferentes procesos de verificacion de las autodeclaraciones de la tasa retributiva y procesos de seguimiento ambiental con analisis fisico-quimica-microbiologíca e hidrobiologica a fuentes hidricas y vertimientos de los diferentes usuarios (municipios-empresas) de la juridisccion de la CAS.
                    
                    Realización de monitoreos del Ro Fonce, Rediba y Barrancabermeja. ',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia83 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity22,
                      'year' =>2,
                      'value' => 20,
                      'description' => 'Acompañamientos a monitoreos y caracterización de vertimientos de aguas residuales a la represa ISAGEN - El Cedral, Campo Provincia para la gerencia de desarrollo y produccion mares de Ecopetrol, Hospital Regional Manuela Beltran, extractora San Fernando, acompañamiento para monitoreo para actualizacion del PSMV de Guavata, Barbosa, Curiti, Guadalupe, Pinchote, Santa Barbara y Encino, subestaciones Isa-Sogamoso, Isa-Comuneros, Isa-Cira Infantas, Isa-Primavera, hospital de Concepcion, Impala terminales de Colombia, acompañamiento a las PTAR de Puerto Wilches, Guacamayo, Chima y policia del Socorro.',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia84 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity23,
                      'year' =>2,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia85 = DB::getPdo()->lastInsertId();
                    
                    
                    
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity27,
                      'year' =>2,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia86 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity28,
                      'year' =>2,
                      'value' => 3,
                      'description' => '1. Suscripción del contrato de Prestación de servicios No. 00504-2017 con el objeto Establecer acciones que fomenten  la conservación de la Nutria Neotropical y su hábitat con el apoyo de los actores ribereños de la cuenta del río Suárez,  en los municipios de Puente Nacional, Barbosa y Güepsa, departamento de Santander. 
                    
                    2. Proyecto: Implementación de acciones para el manejo del conflicto felinos-humanos por la depredación de animales domésticos en los municipios de Puerto Wilches, Barrancabermeja, Vélez, Peñón, Sucre y la Belleza del departamento de Santander.
                    
                    3. Suscripción del Convenio No. 005-00306-2017 cuyo objeto es: “Estrategias para la conservación de una población de marimondas del magdalena (Ateles hybridus) jurisdicción de los municipios Puerto Parra y Cimitarra, departamento de Santander.
                    
                    4. Suscripción del contrato No. 004-00518-2017 para: Ejecución de acciones que fomenten la conservación y manejo del recurso forestal de roble con el apoyo de actores locales y regionales en los municipios de Puente Nacional, Vélez, Bolívar y el Peñón, departamento de Santander.
                    ',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia87 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity29,
                      'year' =>2,
                      'value' => 0.8,
                      'description' => 'Suscripción contrato de prestación de servicios No. 00512-2017 para: Implementación de medidas para el manejo, control y prevención del caracol gigante africano (achatina fulica) en los municipios de Socorro, Palmas del Socorro, Páramo, Charalá y San Vicente de Chucurí en jurisdicción del departamento de Santander',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia88 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity30,
                      'year' =>2,
                      'value' => 0.8,
                      'description' => 'Formulación de  los siguientes  proyectos:
                    
                    Análisis de la distribución, ocupación y uso del territorio (interacción negativa) por el oso andino (Tremactos ornatus) en áreas de conservación y uso en jurisdición de la Corporación Autónoma Regional de Santander - CAS y el Santuario de Fauna y Flora Guanentá Alto Río Fonce
                    
                    Fortalecer la propagación de material vegetal de páramo, con énfasis en frailejones, que fortalezca acciones de restauración para la conservación en la zona de páramo del Distrito Regional de Manejo Integrado - DRMI Guantiva la Rusia en los municipios de Encino y Charalá, departamento de Santander.',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia89 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity31,
                      'year' =>2,
                      'value' => 418000,
                      'description' => 'Firma del contrato de consultoria No. 004-00393-2017, cuyo objeto es: Actualización del Plan General de Ordenación Forestal en el área de jurisdicción de la CAS. ',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia90 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity32,
                      'year' =>2,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia91 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity33,
                      'year' =>2,
                      'value' => 0.8,
                      'description' => '
                    Formulación de proyectos y requerimientos:
                    
                    Implementacion de  ocho (8) despulpadoras en seco o módulos ecológicos de 600k con zaranda.
                    
                    Prestación de servicios para caracterización biótica en el páramo del Almorzadero entre los municipios de Cerrito vereda Corral Falso y municipio de San Andrés vereda Listara, para identificar el conflicto entre el hombre y la fauna silvestre con el fin de implementar estrategias para su reducción y mitigación a través de sistemas de producción.
                    
                    ',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia92 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity34,
                      'year' =>2,
                      'value' => 1,
                      'description' => 'Se contrató la logistica y desplazamiento para apoyar la participacion y  fortalecimiento a cinco (5) iniciativas de negocios verdes de la jurisdiccion de la Corporacion Autonoma Regional de Santander CAS en la feria Nacional de Negocios Verdes - Bioexpo caribe 2017. Contrato No. 00431-2017                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     ',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia93 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity35,
                      'year' =>2,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia94 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity36,
                      'year' =>2,
                      'value' => 20,
                      'description' => 'Apoyo a los municipios de Galán, Puerto Wilches, Vélez, Oiba, Ocamonte, Chipatá, Mogotes y San Vicente de Chucurí, en la evaluación de planes de contingencia de incendios forestales, plan de contingencia fenómeno del niño,  plan de contingencia primera temporada seca 2017.
                    
                    Apoyo a 4 municipios con  el carrotanque para suministro de agua potable (Palmas del Socorro, Suaita, Curití y Socorro) y apoyo a 3 municipios con maquinaria (Guacamayo, Málaga y Contratación).
                    
                    Emisión de las circulares No. 001-2017 y 002-2017 sobre medidas y acciones a implementar en la primera temporada seca y sobre directrices para enfrentar los efectos de la primera temporada seca 2017.
                    
                    Apoyo a 27 municipios en la atención de emergencias a través de visitas del grupo de atención del riesgo.',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia95 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity37,
                      'year' =>2,
                      'value' => 0.8,
                      'description' => 'Suscripción del convenio No. 005-00415-2017, para la elaboración del estudio de amenaza, vulnerabilidad y riesgo para el municipio de Ocamonte, departamento de Santander.',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia96 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity38,
                      'year' =>2,
                      'value' => 1,
                      'description' => '
                    El día 24 de abril de 2017, en las CAS, se realizó Conversatorio sobre el manejo integral de la gestión del riesgo de desastres y rondas hídricas en los 74 municipios de la jurisdicción de la CAS, con la participación del Procurador 24 Judicial  II Ambiental y Agrario, el Director de la Unidad Departamental de Gestión del Riesgo de Desastres, el Director General del IDEAM  y Alcaldes de los municipios de la jurisdicción.
                    
                    ',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia97 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity39,
                      'year' =>2,
                      'value' => 0.6,
                      'description' => 'En etapa precontractual proyecto para: conformación de  brigadas  comunitarias  para la gestión integral del riesgo de desastres y adaptación al cambio climático, como estrategia de fortalecimiento de la sociedad civil, en la jurisdicción de la Corporación Autónoma Regional de Santander - CAS.',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia98 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity40,
                      'year' =>2,
                      'value' => 0.8,
                      'description' => 'Suscripción de convenio No. 005-00471-2017 para la ejecución de acciones para la mitigación de gases de efecto invernadero, mediante la construcción de de estufas ecológicas para leña, en los sectores rurales del municipio de Aratoca del departamento de Santander.',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia99 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity41,
                      'year' =>2,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia100 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity42,
                      'year' =>2,
                      'value' => 1.4,
                      'description' => 'En ejecución el contrato de obra No. 003-00439-2017 con el objeto Ejecución de actividades para la regulación de cauces, corrientes  de agua y recuperación de tierras para la conservación del humedal San Silvestre, del municipio de Barrancabermeja - Santander.
                    
                    En etapa precontractual el proyecto: Elaboración de obras de protección de zonas inundables en el río Sogamoso, sector Candilejas, municipio de Barrancabermeja, Santander. Etapa 2',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia101 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity43,
                      'year' =>2,
                      'value' => 0.69,
                      'description' => 'De las 2.986 autorizaciones ambientales solicitadas por los usuarios se resolvieron 2.073',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia102 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity44,
                      'year' =>2,
                      'value' => 0.3,
                      'description' => 'De las 4.910 autorizaciones y permisos con seguimiento que corresponden al 30% del total de expedientes (16.368) se han realizado seguimiento a 6.219',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia103 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity45,
                      'year' =>2,
                      'value' => 0.8,
                      'description' => 'Se aperturaron 40 procesos sancionatorios que corresponde al universo, el 80% equivale a 32 procesos de los cuales a la fecha se han resuelto 32 procesos.',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia104 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity46,
                      'year' =>2,
                      'value' => 1,
                      'description' => 'Teniendo en cuenta la vigencia y revisión  de los EOT, PBOT y POT, se requirió a los 74 municipios de la jurisdicción para que adelanten la revisión de los mismos, de conformidad con lo dispuesto en la Ley 1551 de 2012',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia105 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity47,
                      'year' =>2,
                      'value' => 1,
                      'description' => 'Se realizó seguimiento a los 74  planes de saneamiento y manejo de vertimientos (PSMV)  de los municipios del área de jurisdicción de la CAS,  con el fin de que realicen su actualización y entrega de informes de cumplimiento.',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia106 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity48,
                      'year' =>2,
                      'value' => 1,
                      'description' => 'Se realizó seguimiento, control y apoyo a los 86 programas de uso eficiente y ahorro  del agua (PUEAA), con el fin de verificar el cumplimiento de los compromisos adquiridospor el usuario para el cuidado y preservación del recurso hídrico.  ',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia107 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity49,
                      'year' =>2,
                      'value' => 1,
                      'description' => 'Seguimiento a los 74  Planes de Gestión Integral de Residuos Sólidos - PGIRS, correspondientes a los municipios del área de jurisdicción de la CAS con el fin de verificar el cumplimiento de sus programas en el corto mediano y largo plazo.',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia108 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity50,
                      'year' =>2,
                      'value' => 40,
                      'description' => 'Requerimiento a 40 hospitales de la jurisdicción de la CAS, para que den cumplimiento al artículo 2.2.6.1.3.1, de Decreto 1076 de 2015, referente a las obligaciones de los generadores de residuos sólidos peligrosos - RESPEL',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia109 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity51,
                      'year' =>2,
                      'value' => 1.6,
                      'description' => 'En ejecución los siguientes Convenio:
                    
                    Convenio No. 005-00469-2017 para Realizar apoyo y sensibilización para la implementación de alternativas de reducción, separación y aprovechamiento de residuos sólidos en el municipio de Contratación, departamento de Santander.
                    
                    Convenio No. 005-00472-2017 para la Implementación de la segunda fase de un sistema de aprovechamiento de residuos solidos organicos del municipio de Oiba, departamento santander.',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia110 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity52,
                      'year' =>2,
                      'value' => 0.01,
                      'description' => '',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia111 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity53,
                      'year' =>2,
                      'value' => 20,
                      'description' => 'Se realizó monitoreo de ruido a 41 establecimientos en los municipio de Socorro, Pinchote, Charalá, Guepsa, Barbosa, Barrancabermeja,  Curití, Málaga, Barichara, Vélez, Páramo, Charalá, Concepción, Cerrito y San Gil.',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia112 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity54,
                      'year' =>2,
                      'value' => 0.8,
                      'description' => 'En ejecución el convenio No. 005-00461-2018 para Mantenimiento, optimización y puesta en operación de la red de monitoreo de la calidad de aire del municipio de Barrancabermeja- Departamento de Santander.',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia113 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity55,
                      'year' =>2,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia114 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity56,
                      'year' =>2,
                      'value' => 1,
                      'description' => 'Ejecución del proyecto: Fortalecimiento de la Unidad de Reacción Inmediata de la Corporación Autónoma Regional de Santander - CAS, mediante la adquisición de un vehículo como primera fase del proyecto',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia115 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity57,
                      'year' =>2,
                      'value' => 1.4,
                      'description' => 'Adicional al convenio interadministrativo de asociación  No. 005-0083-2016, cuyo objeto es “aunar esfuerzos entre la Corporación Autónoma Regional de Cundinamarca - CAR y la Corporación Autonoma Regional de Santander- CAS, para manejo adecuado de fauna silvestre, rehabilitada en proceso liberación”
                    
                    Proyecto y requerimiento: Restauración locativa, básica y temporal para la funcionalidad de la bodega 1, del centro de acopio de los productos decomisados, granja El Cucharo, municipio de Pinchote - Sanander. ',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia116 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity58,
                      'year' =>2,
                      'value' => 1.4,
                      'description' => 'En ejecución el convenio interadministrativo  GGC No. 220-2017 para implementar acciones de formalización en aspectos legales, técnicos, financieros, económicos, sociales y ambientales, así como para el acompañamiento a la gestión para la regulación minero ambiental, conforme a la normatividad vigente y en el marco de la política minera nacional, en el departamento de Santander, jurisdicción CAS.
                    
                    Realización del operativo nacional para el control de trafico legal de madera en el municipio de Velez, (22 de junio de  2017).
                    
                    Proceso precontractual para el proyecto: “Ejecutar actividades de apoyo logístico para la movilización cargue y descargue, de parte de los decomisos a efectuar en los operativos contra el tráfico ilegal de flora y fauna silvestre, en los municipios que sean priorizados por la Subdirección de Autoridad Ambiental de la CAS”                                                                                                           ',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia117 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity59,
                      'year' =>2,
                      'value' => 1,
                      'description' => 'En el tema de Gobernanza forestal se han realizado capacitaciones con los miembros técnicos del CIFFSAN en normatividad forestal y con los demás actores para determinar  lineamientos y fortalecer el control y la vigilancia en el departamento.
                    
                    Elaboración del Plan Operativo del CIFFSAN para presentarlo al nivel directivo.
                    
                    Capacitación enntemas relacionados con cubicación de madera y de árboles en pie, aplicativos y protocolos.
                    
                    Participación en el operaivo nacional implementando un puesto de control en compañía de la policia nacional y gobernanza forestal.
                    
                    Construcción y validadción de agenda de gobernanza forestal entre las CARS y MADS.
                    
                    Contrato No. 0438-2017 para: Contratar los servicios de apoyo logistico y raciones alimentarias para la realización de reunioneos y/o talleres de fortalecimiento de la gobernanza forestal en la jurisdicción de la CASen el cual se desarrollaron 5 talleres en los municipios de San Vicente, Cimitarra, San Gil, Velez y Barrancabermeja.',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia118 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity60,
                      'year' =>2,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia119 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity61,
                      'year' =>2,
                      'value' => 4.6,
                      'description' => 'Ejecución de los siguientes contratos:
                    
                    1.  contrato No. 007-0083-2017 para la renovación de una (1) Licencia para el Firewall Fortinet FortiGate 200D, por el término de dos (2) años, con la instalación, configuración y soporte.
                    
                    2.  Contrato No. 00212-2017 para Renovar el arrendamiento del servicio de Hosting para el alojamiento de la página web www.cas.gov.co para la Corporación Autónoma Regional de Santander – CAS por el periodo de un (1) año.
                    
                    3.  Contrato No. 007-00441-2017 con el objeto Mejoramiento de la plataforma tecnológica de la Corporación Autónoma Regional de Santander –CAS- por medio de la adquisición de equipos tecnológicos y licencias de mesa de ayuda, Microsoft office y antivirus.
                    
                    4.  Contrato de prestación de servicios No. 00486-2017  para Automatizar en el aplicativo CITA los módulos liquidación de tarifas de evaluación y seguimiento y liquidación de tasa por uso del agua, así como también brindar el soporte, capacitación y hacer las mejoras y ajustes a los procesos ya implementados.
                    
                    5.  Contrato de prestación de servicios No. 00491-2017 para Contratar la actualización, acompañamiento, mantenimiento, capacitación, asesoría e implementación de los módulos de cobro coactivo  y radicador de cuentas del aplicativo GD-Soft de la Corporación Autónoma Regional de Santander –CAS-, así como también la migración de las vigencias anteriores a su versión web.
                    
                    ',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia120 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity62,
                      'year' =>2,
                      'value' => 0.8,
                      'description' => 'De un universo de 695 registros de información ambiental se cargaron al SIAC 628 registros',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia121 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity63,
                      'year' =>2,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia122 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity64,
                      'year' =>2,
                      'value' => 5,
                      'description' => '
                    Seguimiento y acompañamiento a los Comité Interinstitucional de Educación Ambiental - CIDEA y Proyectos Educativos Escolares - PRAE de los municipios de San Gil, Páramo, Valle de San José, Curití, Pinchote, Socorro, Málaga, Vélez, Mogotes, Charalá, Coromoro, San Miguel, Carcasí, Macaravita, Enciso, Guaca, San Andres, Aguada, Aratoca, Capitanejo,Concepcion, Barrancabermeja, Onzaga y Cabrera.
                    
                    Celebración del día mundial de agua, mediante jornadas de limpieza en la cuenca y microcuencas del Río Fonce y afluentes de importancia para la comunidad. (Recolección de 6.160 Kl de residuos en 11 municipios). 
                    
                    En ejecución el convenio de asociación N° 005-00254-2017 celebrado entre la CAS y las Unidades Tecnológicas de Santander - UTS cuyo objeto es: “Fortalecer la educación ambiental formando lideres ambientales en los 74 municipio del área de jurisdicción de la Corporación Autónoma Regional de Santander-CAS”.
                    
                    Ejecución la VI Jornada de Recolección de Residuos Posconsumo, actividad organizada por la Asociación de Empresarios de Colombia ANDI y La CAS en las  provincias Comunera, Garcia Rovira, Mares, Vélez, y Guanentina.
                    
                    Ejecución de campañas de educación ambiental y participación ciudadana para la protección de los recursos naturales en los municipios de Peñón, Vélez, Gámbita, Páramo, Aratoca, Coromoro, Encino, San Andrés, Galán, Curití, Villanueva, entre otros 
                    
                    .
                    
                    
                    
                    
                    ',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia123 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity65,
                      'year' =>2,
                      'value' => 1,
                      'description' => 'Ejecución del Plan de medios para los 74 municipios de las provincias Guanentina, Comunera, Vélez, Mares, García Rovira y municipios que hacen parte de la oficina de enlace Bucaramanga, que promuevan estratégias de comunicación y divulgación para la gobernabilidad institucional, la sensibilización ambiental y la gestión del riesgo en la jurisdicción de la CAS',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia124 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity66,
                      'year' =>2,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia125 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity67,
                      'year' =>2,
                      'value' => 3,
                      'description' => 'Proyecto: Desarrollo de acciones  para el posicionamiento de la CAS como autoridad ambiental, mediante actividades de sensibilización para el cuidado de los recursos naturales renovables en la jurisdicción de la CAS
                    
                    Proyecto: Promover estrategias para el posicionamiento y reconocimiento como autoridad ambiental por medio de la participación en la Expedición Santander La Provincia nos Une, en jurisdicción de la CAS
                    
                    Proyecto: Fortalecer la actividades de conservación y buen uso de los recursos naturales, por medio del concurso el pesebre ecológico en la  jurisdicción de la CAS.',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia126 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity68,
                      'year' =>2,
                      'value' => 1.8,
                      'description' => 'Ejecución el contrato de compraventa No. 007-00489-2017 para la adquisición de mobiliario, material eléctrico y sonido centralizado para la sede principal y oficinas de apoyo de la CAS.
                    
                    En ejecución contrato de obra No. 003-00500-2017 para la Adecuación y mantenimiento de las instalaciones de la sede principal de la CAS, fase II.',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia127 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity69,
                      'year' =>2,
                      'value' => 3,
                      'description' => 'Ejecución contrato No. 0095-2017 con el objeto de Actualización del proceso de gestión documental de la CAS, fase II 
                    
                    Transferencia de Recursos a la Comisión Nacional del Servicio Civil para financiar los costos que le corresponden a la CAS en desarrollo del proceso de selección por mérito para proveer los empleos vacantes de su planta de personal (Resolución No. CNSC - 20161000045365 del 13-12-2016).
                    
                    Ejecución del proyecto:  “Actualizacion del proceso de gestion documental de la Corporacion Autonoma Regional de Santander - CAS fase III”.',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia128 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity70,
                      'year' =>2,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia129 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity71,
                      'year' =>2,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia130 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity72,
                      'year' =>2,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia131 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity73,
                      'year' =>2,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2017-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia132 = DB::getPdo()->lastInsertId();
                    
                    
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity1,
                      'year' =>3,
                      'value' => 40,
                      'description' => 'La Corporación con el apoyo del Ministerio de Ambiente y Desarrollo Sostenible, realizó el taller de “ASISTENCIA TÉCNICA PARA LA INCORPORACION DE LAS DETERMINANTES AMBIENTALES EN LOS POT”, con el fin de fortalecer las capacidades institucionales en la articulación de las determinantes ambientales en la planeación del desarrollo territorial y socializar la actualización de las mismas.   
                    
                    Con este taller, la Subdirección de Planeación y Ordenamiento Ambiental brindó asistencia técnica a 40 municipios de la jurisdicción.
                    ',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia133 = DB::getPdo()->lastInsertId();
                    
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity3,
                      'year' =>3,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia134 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity4,
                      'year' =>3,
                      'value' => 0.1,
                      'description' => 'La Corporación con el apoyo del Ministerio de Ambiente y Desarrollo Sostenible, realizó el taller de “ASISTENCIA TÉCNICA PARA LA INCORPORACION DE LAS DETERMINANTES AMBIENTALES EN LOS POT”, con el fin de fortalecer las capacidades institucionales en la articulación de las determinantes ambientales en la planeación del desarrollo territorial y socializar la actualización de las mismas.   
                    
                    Con este taller, la Subdirección de Planeación y Ordenamiento Ambiental brindó asistencia técnica a 40 municipios de la jurisdicción.
                    ',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia135 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity5,
                      'year' =>3,
                      'value' => 0.4,
                      'description' => 'En ejecución el proyecto para la Reglamentación de uso de la corriente hídrica La Borly y sus tributarios en el municipio de Cerrito - Santander',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia136 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity6,
                      'year' =>3,
                      'value' => 0.8,
                      'description' => 'Elaboración del proyecto y requerimiento  Formulación del Plan de Ordenamiento del Recurso Hídrico de la Quebrada La Gómez, municipio de Sabana de Torres, departamento de Santander',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia137 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity7,
                      'year' =>3,
                      'value' => 0.4,
                      'description' => 'Formulación del proyecto Formulación del Plan de Ordenamiento del Recurso Hídrico de la Quebrada La Gómez, municipio de Sabana de Torres, departamento de Santander',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia138 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity8,
                      'year' =>3,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia139 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity9,
                      'year' =>3,
                      'value' => 2,
                      'description' => 'En etapa de precontractual los siguientes proyectos:
                    
                    Apoyar actividades del plan de vida de las comunidades indígenas U´was, mediante el mejoramiento, adecuacion del sistema de abastecimiento artesanal de agua, sector Tauretes, jurisdicción de CAS, municipio de Cerrito, departamento de Santander.
                    
                    Suministro de tanques para el almacenamiento de agua en el corregimiento de La India-Landazuri para las viviendas de la comunidad de la Asociación de Trabajadores Campesinos del Carare  – A.T.C.C. en el área de la jurisdicción de la CAS',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia140 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity10,
                      'year' =>3,
                      'value' => 495,
                      'description' => 'En ejecución el convenio interadministrativo No. 2245 de 2017, suscrito entre el Departamento de Santander y la CAS y el contrato de obra, con el fin de restaurar 618,47 hectáreas en 12 predios públicos ubicados en los municipios de Santa Helena del Opón, La Paz, Landazuri, Valle de San José, Galán, Guadalupe, Ocamonte, El Carmen de Chucurí, Macaravita, Suaita y Molagavita.',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia141 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity11,
                      'year' =>3,
                      'value' => 240,
                      'description' => 'En ejecución el contrato de obra 003-00800-2018 para: Realizar tercer mantenimiento a las plantaciones protectoras -  productoras  y protectoras establecidas por la CAS, en el departamento de Santander. (265,61 Ha)
                    
                    Igualmente se suscribio contrto de interventoria No. 004-00817-2018.',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia142 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity12,
                      'year' =>3,
                      'value' => 595,
                      'description' => 'Adquisición de los siguientes predios:
                    
                    1.  Predio Charangas ubicado en la vereda Hoya Negra del municipio de Hato  (34.3825 Ha).
                    2.  Predio LLano Grande, ubicado en la vereda El Fical, municipio de Coromoro (200 Ha)
                    3.  Predio Arbol Solo, ubicado en la vereda Ture, municipio de Coromoro (270 Ha)
                    4.  Predio El Porvenir, ubicado en la vereda Avendaños, municipio de Encino (81,5 Ha)
                    5.  Predio Tequendama - Pekin, ubicado en la vereda El Boqueron del municipio de Galán (437 Ha).
                    6.  Predio Estrella - Envidias, ubicado en la vereda El Boqueron del municipio de Galán (255 Ha).
                    7.  Predio Piedra Azul, ubicado en la vereda Vega Grande del municipio de Mogotes (174,2 Ha).
                    8.  Predio Rancho de Paja, ubicado en la vereda Vega Grande del municipio de Mogotes (56,9 Ha).
                    9.  Predio El Jardín, ubicado en la vereda Vega Grande del municipio de Mogotes (134,2 Ha).
                    
                    Para un total de 1.643 Hectáreas 1.825 metros cuadrados. ',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia143 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity13,
                      'year' =>3,
                      'value' => 0.6,
                      'description' => 'Etapa precontractual el proyecto para el Desarrollo de actividades de gestión ambiental urbana en el municipio de Socorro - Santander',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia144 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity14,
                      'year' =>3,
                      'value' => 1.6,
                      'description' => 'Ejacutado el contrato de suministros No. 008-00440-2017, para la Adquisición de material vegetal como apoyo a los procesos de reforestación en áreas de interés ambiental en la jurisdicción de la CAS. 
                    
                    Ejecución contrato de suministros No. 008-00847-2018 para la adquisicion de material vegetal como apoyo a los procesos de reforestacin en areas de interes ambiental en la jurisdiccion de la cas
                     
                    En etapa precontractual el proyecto: Construcción de viveros estratégicos, para la producción de material vegetal, suministro de insumos agrícolas y productos biológicos como estrategia para la conservación y propagación de la diversidad biológica en el municipio de Santa Barbara – Santander”',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia145 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity15,
                      'year' =>3,
                      'value' => 68,
                      'description' => 'Ejecutado el contrato de obra No. 003-00855-2018   Ejecución de actividades para la protección, recuperación y aislamiento de nacimientos, afloramientos y zonas de recarga hídrica de la comunidad veredal de diecisiete (17) municipios de la provincia de Velez.. (Se realizó aislamiento a 68 nacimientos).',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia146 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity16,
                      'year' =>3,
                      'value' => 100,
                      'description' => '
                    El equipo técnico BanCO2 firma acuerdos de conservación voluntaria con diez (10) nuevas familias en el municipio de Puerto Wilches y una familia adicional en el municipio de Hato para logra la meta establecida en el año 2019; de ésta manera se ha logrado conservar durante el programa 779 hectáreas. 
                    
                    Participación de familias asociadas al proyecto en la 69ª Feria de Bucaramanga y Agropolis, donde realizaron un fogueo comercial con el propósito de abrir nuevos mercados y canales de comercialización y comunicación  con el consumidor final, con miras a mejorar sus ingresos y minimizar la dependencia de intermediarios.  
                    
                    ',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia147 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity17,
                      'year' =>3,
                      'value' => 40,
                      'description' => 'En ejecución el contrato No. 003-00852-2018  Realizar aislamiento y establecimiento de plantacion protectora con especies nativas con el fin de iniciar procesos de recuperacion de suelos en los predios Bellavista y El Molino de propiedad de la Corporacion Autonoma Regional de Santander.
                    ',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia148 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity18,
                      'year' =>3,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia149 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity19,
                      'year' =>3,
                      'value' => 2.1,
                      'description' => 'En ejecución Contrato de obra No. 003-00860-2018 para la construcción de 45 pozos sépticos con unidades sanitarias en áreas rurales de lo municipios de Bolívar, Hato y San José de Miranda.
                    
                    Suscripción del convenio No. 005-00807-2018 para la construcción de la PTAR del municipio de Jesús María, departamento de Santander.
                    
                    Construcción de sistemas de tratamiento de aguas residuales con unidades sanitarias en el municipio de Contratación.',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia150 = DB::getPdo()->lastInsertId();
                    
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity21,
                      'year' =>3,
                      'value' => 1,
                      'description' => 'Ejecución del contrato No. 00801-2018 cuyo objeto es: “Contratar un laboratorio acreditado en norma ISO17025 para realizar los diferentes procesos de seguimiento ambiental con análisis físico-químico-microbiológico e hidrobiológico en matriz aguas (fuentes hídricas y vertimientos de los diferentes usuarios municipios – empresas) de la jurisdicción de la CAS” ( Se realizó monitoreo en los municipios de La Belleza, San Miguel, Molagavita, Guavatá, Chipatá, El Carmen de Chucurí y Barrancabermeja).',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia151 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity22,
                      'year' =>3,
                      'value' => 20,
                      'description' => 'Acompañamiento al monitoreo de aguas residuales domésticas para actualización del PSMV a dos (2) Municipio (Cimitarra - Aratoca), acompañamiento a monitoreo de aguas residuales no Domésticas   (10) Empresas (EDS el Hato, Lavadero de vehículos ubicado en la transversal 49 lote 05 del Municipio de Barrancabermeja, Clínica San José Municipio Barrancabermeja, lavadero Súper Brio, EDS servicentro la 13, Makariza, Palmas Oleaginosas Bucarelia S.A, Coeducadores, Hospital Capitanejo, Palmeras San Fernando).  Acompañamiento a monitoreo de aguas residuales Domésticas a una (1) la Empresa (Isagen Campamento el Cedral) a  7 Municipios  (Curití, Hato, Charalá, Puente Nacional, Confines, Encino y Barrancabermeja). Igualmente se realizó acompañamiento a verificación de vertimientos de aguas residuales a 11 Municipios: Cerrito, Capitanejo, Landázuri, Guaca, Concepción, El Carmen de Chucurí, San Miguel, Molagavita, la Belleza, Guavatá y Chipatá. (Total 31 monitoreo)',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia152 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity23,
                      'year' =>3,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia153 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity24,
                      'year' =>3,
                      'value' => 400,
                      'description' => 'Gestión para suscribir convenio con WWF, CAS en el marco del convenio GEF - SIRAP, con el fin de adelar el estudio para determinar la ruta de declaratoria del Páramo de Almorzadero. ',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia154 = DB::getPdo()->lastInsertId();
                    
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity26,
                      'year' =>3,
                      'value' => 0.2,
                      'description' => 'Gestión para suscribir convenio con WWF, CAS en el marco del convenio GEF - SIRAP, con el fin de realizar la actualización y formulación de los Planes de Manejo de DRMI Guantiva La Rusia.',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia155 = DB::getPdo()->lastInsertId();
                    
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity28,
                      'year' =>3,
                      'value' => 3,
                      'description' => '1. Ejecución el contrato No. 004-00811-2018 para Implementar estrategias para la identificación y caracterización del manatí antillano (trichechus manatus manatus) y su hábitat con el apoyo de actores ribereños en las Ciénagas San Silvestre y El Llanito del municipio de Barrancabermeja.
                    
                    2.  Ejecución el contrato No. 004-00810-2018 para Determinar la presencia y el estado poblacional de la marimonda del magdalena (ateles hybridus) y mejorar su condición poblacional en jurisdicción de los municipios de Puerto Parra y Cimitarra.   
                    
                    3. Ejecución el contrato No. 004-00812-2018:Caracterización del estado actual de la ceiba barrigona (cavanillesia chicamochae) con el fin de establecer estrategias de conservación de la especie en los municipios de Cepitá y San Andrés, jurisdicción de la Corporación Autónoma Regional de Santander - CAS.   ',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia156 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity29,
                      'year' =>3,
                      'value' => 1,
                      'description' => '
                    Ejecución del contrato No. 0652-2018 cuyo objeto es Ejecutar estrategias para la prevención, manejo y control del caracol gigante africano (achatina fulica) con el apoyo de actores locales y regionales en los municipios de Sabana de Torres, Puerto Wilches, San Vicente de Chucurí, Barrancabermeja, Socorro, Palmas del Socorro, Páramo, Charalá y San Gi, l jurisdicción del departamento de Santander.
                    
                    ',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia157 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity30,
                      'year' =>3,
                      'value' => 1,
                      'description' => '
                    
                    1. Suscripción del Contrato de Consultoría No. 004-00962-18 para: Fomentar la conservación del bagre rayado (pseudoplatystoma magdaleniatum) como especie sombrilla del recurso ictiológico mediante la sensibilización a pescadores y comunidad ribereña de los complejos cenagosos de paredes en los municipios de Sabana de Torres, Puerto Wilches  y San Rafael de Chucurí municipios de Barrancabermeja y Puerto Parra.
                    
                    2. Formulación del proyecto:  Implementar acciones de sensibilizacion para el manejo del conflicto felinos humano por depredacion de animales domesticos en lo municipios de Puerto Wilches Sabana de Torres, Barrancabermeja y Puerto Parra del departamento de Santander.',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia158 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity31,
                      'year' =>3,
                      'value' => 1040518,
                      'description' => 'Los contratos de Consultoría para el desarrollo del proyecto de Actualización del Plan General de Ordenación Forestal en el Área de Jurisdicción de la CAS y de interventoría al mismo, se  ejecutaron en un 100%. Se adquirieron e interpretaron las imágenes satelitales, se validó la información, se actualizaron, realinderaron, recategorizaron y cuantificaron las áreas forestales protectoras y productoras y se produjo la cartografía a escala 1:25.000 y 1:50.000.
                    
                    Se identificaron y cuantificaron las coberturas vegetales, se determinaron las Unidades Administrativas de Ordenación Forestal –UAOF y Unidades de Manejo Forestal, se realizó la caracterización y cuantificación de la vegetación arbórea, la  fauna silvestre y se adelantaron talleres regionales y locales con las comunidades para identificar la problemática y de manera conjunta definir los lineamientos de manejo de los relictos de bosques de la jurisdicción. Se determinaron los usos actuales, potenciales y conflictos de uso de suelos, se definió la zonificación y con base en ello se definieron los lineamientos de manejo y se propusieron proyectos para garantizar el manejo forestal sostenible.',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia159 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity32,
                      'year' =>3,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia160 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity33,
                      'year' =>3,
                      'value' => 2,
                      'description' => '
                    Ejecutado el contrato de suministros No. 008-00856-2018: Adquisición  de módulos ecológicos de 600k como medida de manejo ambiental en beneficio de café. (Entrega de 20 módulos ecológicos). 
                    Ejecutado el proyecto para el apoyo técnico para mejoramiento de la producción y potenciar la competitividad de 39 productores de mora castilla en el municipio de Bolívar .- Santander, brindando capacitación en planes de manejo ambiental, manejo seguro de plaguicidas y de residuos sólidos, normatividad ambiental, entre otros.
                    
                    
                    ',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia161 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity34,
                      'year' =>3,
                      'value' => 1,
                      'description' => 'Ejecución de talleres realizados a representantes de 32 iniciativas de mercados verdes en 23 municipios del área de jurisdicción de la CAS, quienes fueron fortalecidas en procesos de implementación del modelo de negocio a través de capacitaciones en temas como: Buenas prácticas agrícolas, marketing, fortalecimiento comercial y empresarial, fuentes de financiación y sotenibilidad.',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia162 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity35,
                      'year' =>3,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia163 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity36,
                      'year' =>3,
                      'value' => 20,
                      'description' => 'Apoyo a 9 municipios en la atención de emergencias por deslizamientos y rehabilitación 
                    de vías con el apoyo de Retroexcavadora y volqueta en los Municipios de Palmas del Socorro, La Belleza, Albania, Socorro, Simacota, Hato, Guadalupe, Palmar y Confines.
                    Apoyo a 12 municipios para atención de emergencias con el camión cisterna para suministro de agua potable en los municipios de Contratación, San Gil, Curití, Aratoca, Socorro, Palmas del Socorro, Pinchote, Barichara, Villa Nueva, Gambita, San Benito y Simacota.
                    Se han realizado 34 visitas técnicas por parte del grupo de gestión del riesgo a los municipios de Málaga, Charalá, Coromoro, Florián, Landázuri, Vélez, San Gil , Mogotes, San José de Miranda, Enciso, San Vicente, La Belleza, Puente Nacional,  Cimitarra, Landázuri y Vélez.
                    Se asistió a 12 Reuniones ordinarias del Consejo Departamental de Gestion del riesgo de desastres.',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia164 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity37,
                      'year' =>3,
                      'value' => 1,
                      'description' => 'Ejecutado el Contrato de Consultoría No. 004-00653-2018 para:  Elaboración  de estudio de amenaza, vulnerabilidad y riesgo para el área total de la jurisdicción y escala detallada para el área urbana y suburbana en el Municipio de Enciso, Santander.',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia165 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity38,
                      'year' =>3,
                      'value' => 1,
                      'description' => 'Ejecución del taller de “ASISTENCIA TÉCNICA PARA LA INCORPORACION DE LAS DETERMINANTES AMBIENTALES EN LOS POT, dentro del cual se socializó las directrices para la incorporación de la gestión del riesgo de desastres y las medidas o acciones para la adaptación al cambio climático. 
                    ',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia166 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity39,
                      'year' =>3,
                      'value' => 0.9,
                      'description' => 'Ejecución del contrato de suministro No. 008-00640-2018,  para la Implementación de sistemas de alertas tempranas en el Municipio de San Vicente de Chucuri, Santander.',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia167 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity40,
                      'year' =>3,
                      'value' => 1,
                      'description' => 'Ejecución del contrato de obra No. 003-00790-2018 para la Construcción de estufas ecológicas para leña como acción para la mitigación de gases de efecto invernadero, en el sector rural del municipio de Simacota departamento de Santander. (28 estufas)',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia168 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity41,
                      'year' =>3,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia169 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity42,
                      'year' =>3,
                      'value' => 0.9,
                      'description' => 'Ejecución  Contrato No. 003-0504-2018  Elaboración de obras de protección de zonas inundables en el Río Sogamoso, sector Candilejas, municipio de Barrancabermeja, Santander, etapa 2.',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia170 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity43,
                      'year' =>3,
                      'value' => 0.64,
                      'description' => 'De las 4.042 autorizaciones ambientales solicitadas por los usuarios se han resuelto 2.603',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia171 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity44,
                      'year' =>3,
                      'value' => 1,
                      'description' => 'De las 6.502 autorizaciones y permisos objeto de seguimiento se han realizado seguimiento a la totalidad',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia172 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity45,
                      'year' =>3,
                      'value' => 0.28,
                      'description' => 'De los 549 procesos sancionatorios aperturados que corresponde al universo, el 80% equivale a 439 procesos de los cuales a la fecha se han resuelto 125 procesos.',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia173 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity46,
                      'year' =>3,
                      'value' => 1,
                      'description' => 'Se realizó revisión y análisis a los 74 expedientes correspondientes a los EOT, PBOT y POT de los municipios de la jurisdicción de la CAS, a los cuales se les remitió requerimiento solicitando información correspondiente al cumplimiento de los compromisos ambientales concertados.',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia174 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity47,
                      'year' =>3,
                      'value' => 1,
                      'description' => 'De los 74  planes de saneamiento y manejo de vertimientos (PSMV)  de los municipios del área de jurisdicción de la CAS, se ha realizado seguimiento a la totalidad, verificando que realicen su actualización y entrega de informes de cumplimiento.',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia175 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity48,
                      'year' =>3,
                      'value' => 1,
                      'description' => 'La Subdirección de Autoridad Ambiental tiene 114 expedientes de Programas de Uso Eficiente y Ahorro Agua (PUEAA), de los cuales se ha realizado seguimiento a la totalidad, archivando 23 expedientes, en actualización 27 expedientes y a 64 expedientes se les realizó acompañamiento ambiental.',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia176 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity49,
                      'year' =>3,
                      'value' => 1,
                      'description' => 'Se realizó seguimiento, control y apoyo  a los 74 expedientes de Planes de Gestión Integral de Residuos Sólidos - PGIRS.',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia177 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity50,
                      'year' =>3,
                      'value' => 40,
                      'description' => 'Se realizó la administración de las páginas de RESPEL, RUA Y PCB, en el marco del seguimiento a residuos peligros, así mismo se realizó visitas de inspección ocular a las empresas donde según los registros realizados en las plataformas reportaron inconsistencias.',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia178 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity51,
                      'year' =>3,
                      'value' => 0.6,
                      'description' => 'Etapa precontractual del proyecto  Desarrollo de estrategias de implementación de alternativas de reducción en el proceso de recolección de residuos sólidos orgánicos en el municipio de Charalá - Santander.',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia179 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity52,
                      'year' =>3,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia180 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity53,
                      'year' =>3,
                      'value' => 39,
                      'description' => 'Realización de 40 monitoreo de ruido en horario diurno y nocturno a establecimientos comerciales en los municipios de San Gil, Barichara, Socorro, Málaga, Barrancabermeja, Capitanejo y Puente Nacional.
                    
                    Igualmente se realizó acompañamiento a monitoreo isocinetico de calidad de aire a empresas que cuentan con permiso de emisiones atmosféricas (Extractora Central S.A. Unión Temporal Copower Equitec, Aeropuerto Yariguies - Aeropuerto del Oriente.',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia181 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity54,
                      'year' =>3,
                      'value' => 0.2,
                      'description' => 'Formulación del proyecto: Mantenimiento, optimización y puesta en operación de la unidad móvil de la red de monitoreo de calidad de aire del municipio de Barrancabermeja - Departamento de Santander.',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia182 = DB::getPdo()->lastInsertId();
                    
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity56,
                      'year' =>3,
                      'value' => 1,
                      'description' => 'Mediante Resolución GDL No. 00000576 de 7 de septiembre de 2018 se conformó la Unidad de Reacción Ambiental Inmediata - URAI para los operativos de control y vigilancia de flora y fauna dentro del marco de la Ley 99 de 1993.
                    
                    A partir de la conformación de la URAI, se crearon grupos de trabajo integrados por dos (2) técnicos de diferentes profesiones con el fin de dar cumplimiento al cronograma fijado, realizando operativos en la medida que se han presentado situaciones e imprevistos.
                    
                    El equipo cuenta con vehículo y conductor asignado.',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia183 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity57,
                      'year' =>3,
                      'value' => 2,
                      'description' => 'Ejecución de los siguientes proyectos:
                    
                    1. Adecuación del Centro de Atención de Fauna - CAF de la Corporacion Autónoma Redional de Santander - CAS, en el municipio del Socorro, para la atención óptima y oportuna de especímenes de fauna silvestre.
                    
                    2. Suministro de elementos de primera necesidad para la atención optima y oportuna de especímenes de fauna silvestre, ingresados al hogar de paso de la Corporación Autónoma Regional de Santander - CAS. ',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia184 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity58,
                      'year' =>3,
                      'value' => 2,
                      'description' => 'Ejecución del convenio GGC No. 400-2018 con el Ministerio de Minas y Energía  para brindar acompañamiento integral e implementar acciones de formalización minera en aspectos legales, técnicos, financieros, económicos, sociales y ambientales, así como para el acompañamiento a la gestión para la regulación minero ambiental, conforme a la normatividad vigente y en el marco de la política minera nacional en el departamento de Santander - CAS.
                    
                    Desarrollo de actividades de seguimiento y control de los establecimientos de transformación de productos forestales maderables en jurisdicción de la CAS, visitando el 81% de los centros identificados e identificando 17 que no se encontraban registrados.
                    
                    Igualmente se realizó operativos para el control al tráfico ilegal de maderas en la vía el Gualilo - Santa Helena del Opón, en el corregimiento de la India, municipio de Landazuri y en el sector Tienda Nueva via Barrancabermeja  - Bucaramanga.
                    ',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia185 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity59,
                      'year' =>3,
                      'value' => 2,
                      'description' => 'Ejecución del proyecto de apoyo a la mesa de bosques a través del contrato No. 00721-2018 para el diseño, diagramación, impresión y empaste de 200 ejemplares correspondientes al documento “Misión Bosques Santander”, Estrategia Subregional para Reducción de la Deforestación y Gestión de Bosques en el departamento de Santander.
                    
                    Ejecución del Contrato de Suministros No. 008-00880-2018 para contratar los servicios de apoyo logístico y raciones alimentarias para la realización de reuniones y/o talleres de fortalecimiento de la gobernanza forestal de la jurisdicción de la CAS',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia186 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity60,
                      'year' =>3,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia187 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity61,
                      'year' =>3,
                      'value' => 4,
                      'description' => 'Ejecución de los siguientes proyectos:
                    
                    1. Renovar el arrendamiento del servicio de hosting para el alojamiento de la página web www.cas.gov.co para la Corporación Autónoma Regional de Santander - CAS.
                    
                    2. Mejoramiento de la plataforma tecnológica de la Corporación Autónoma Regional de Santander –CAS- por medio de la adquisición de equipos tecnológicos.
                    
                    3. Análisis, desarrollo e implementación del aplicativo Centro de Información de Tramites Ambientales –CITA- en su versión 2 - módulos de permisos, concesiones, licencias y sancionatorio ambiental, así como brindar soporte de primer nivel y capacitación a los procesos ya implementados en el aplicativo CITA versión 1.
                    
                    4. Mantenimiento (actualización) de las licencias de software ArcGis desktop Basic uso simple y concurrente, así como las extensiones Spatial Analyst y 3D Analyst',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia188 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity62,
                      'year' =>3,
                      'value' => 1,
                      'description' => 'De un universo de 644 registros de información ambiental se cargaron al SIAC la totalidad de los mismos.',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia189 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity63,
                      'year' =>3,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia190 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity64,
                      'year' =>3,
                      'value' => 4.6,
                      'description' => '
                    Creación y formulación de los Planes de acción año 2018, de los CIDEA municipales en: Capitanejo, Enciso, San José de Miranda, Cimitarra, Puerto Parra, El Carmen de Chucuri, Florián , La belleza, Albania y Aguada, Gambita, Barbosa, Puente Nacional, San Benito, Guepsa, Aguada, La Paz, Vélez, Landazuri, Macaravita, San Miguel, Carcasi, Suaita, Guadalupe, Oiba y Confines, Valle de San José, Onzaga.
                    
                    Participación en la Octava (8) y novena (9)  jornadas de recolección de residuos pos-consumo impartido por la ANDI a toda la comunidad. Campaña de recolección de residuos eléctricos y electrónicos, medicamentos vencidos, insecticidas caseros, fungicidas y herbicidas agropecuarios, luminarias, pilas usadas y Rueda Verde
                    
                    Celebración del día mundial del árbol con actividades de reforestación en los municipios de San Gil, Curiti y Barichara.
                    
                    Realización de la jornada de siembra de árboles nativos (robles, loquetos, chicalas urapan ) para la recuperación de suelos degradados en el área de influencia del páramo Iguaque Merchán perteneciente al municipio de Puente Nacional. 
                    
                    La Red Jóvenes de Ambiente de la CAS ha construido un nuevo territorio amigable con el ambiente realizando la recuperación y restauración y embellecimiento de parques, senderos ecológicos y campañas de reforestación desde cada uno de sus municipios, de igual manera los jóvenes de varios municipios de la Jurisdicción de la CAS han formado ciencia participativa a traves de la replica con especies de flora y fauna encontrada en Santander a traves de Expedición BIO
                    
                    Formulación del proyecto Apoyo al desarrollo de procesos educativos ambientales locales y regionales para la adaptación y mitigación del cambio climático en municipios del área de jurisdicción de la CAS, Santander.
                    
                    ',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia191 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity65,
                      'year' =>3,
                      'value' => 1,
                      'description' => 'Ejecución del Plan de Medios para los 74 municipios de las provincias Guanentina, Comunera, de Vélez, Mares, García Rovira y municipios que hacen parte de la Oficina Enlace Bucaramanga donde se  promovió estrategias de comunicación y divulgación para la gobernabilidad institucional, la sensibilización ambiental y la gestión del riesgo en la jurisdicción de la CAS.',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia192 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity66,
                      'year' =>3,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia193 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity67,
                      'year' =>3,
                      'value' => 4.6,
                      'description' => '
                    1.  Posicionamiento de la autoridad ambiental en el área de su jurisdicción, mediante la entrega e instalación de elementos para la disposición y separación de residuos sólidos.
                    
                    2. Participación en la VI feria internacional del medio ambiente y IX encuentro nacional de jóvenes de ambiente - Corferias 2018, con el fin de fortalecer la imágen institucional de la Corporación Autónoma Regional de Santander - CAS.
                    
                    3.  Contratar la logística para el posicionamiento e imagen institucional de la Corporación Autónoma Regional de Santander – CAS en la Feria Internacional del Medio Ambiente - FIMA.
                    
                    4. Promover e impulsar la imagen institucional de la Corporación Autónoma Regional de Santander - CAS, a través de la participación en la 69a feria de Bucaramaga y Agropolis, organizado por la Gobernación de Santander y CENFER 2018
                    
                    5. Fortalecer las actividades de conservación y uso de los recursos naturales, por medio del concurso del pesebre ecológico en la jurisdicción de la CAS (contando con la participación de (34 pesebres inscritos)',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia194 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity68,
                      'year' =>3,
                      'value' => 2.62,
                      'description' => '
                    1. Adecuación y mantenimiento de la planta física de la Corporación Autónoma Regional de Santander - CAS.
                    1. Compra de mobiliario y adquisición de material eléctrico y ferretería para la sede principal y oficinas de apoyo regionales de la Corporación Autónoma Regional de Santander. 
                    2. Construcción de cubierta tipo domo, para acceso principal de la Corporación Autónoma Regional de Santander - CAS.',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia195 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity69,
                      'year' =>3,
                      'value' => 1.4,
                      'description' => 'Ejecutado  el contrato de prestación de servicio No. 00345 de 2018, cuyo objeto es: Prestación de servicios de apoyo a la gestión para la  actualización del proceso de gestión  documental de la CAS” fase IV.
                                          Elaboración proyecto y requerimiento: Adquisición de herramientas geomáticas para dar cumplimiento a las normas de protección ambiental, el manejo y control de los recursos naturales en la jurisdicción de la cas',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia196 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity70,
                      'year' =>3,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia197 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity71,
                      'year' =>3,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia198 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity72,
                      'year' =>3,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia199 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity74,
                      'year' =>3,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2018-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia200 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity1,
                      'year' =>4,
                      'value' => 24,
                      'description' => 'La Corporación a través de la Subdirección de Planeación y Ordenamiento Ambiental, en la vigencia 2019 ha brindado asistencia técnica y  asesoría en la incorporación de las determinantes ambientales para la revisión y ajuste de los EOT,PBOT y POT a veinticuatro (24) municipios, correspondiente a: Barrancabermeja, Concepción, Hato, Puente Nacional, Puerto Parra, Suaita, Contratación, Santa Helena del Opón, Los Santos, Capitanejo, Peñon, Betulia, Barbosa, San Miguel, Santa Barbara, Málaga, Barichara, Enciso, Betulia, Socorro, Páramo, Jesus María , Simaota, Mogotes, Cimitarra y Aratoca.
                     En el mes de Junio de 2019, Las acciones se fortalecieron y se complementaron en el taller desarrollado con la Gobernación de Santander, la cual se hizo extensiva para todos los municipios de la jurisdicción de la CAS.',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia201 = DB::getPdo()->lastInsertId();
                    
                    
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity4,
                      'year' =>4,
                      'value' => 0.096,
                      'description' => 'LOS  POMCAS APROBADOS SON LOS SIGUENTES:
                    
                    1.Afluentes Directos del Rio Lebrija Medio margen izquierdo fue adoptado mediante Resolución 490 del 25 de julio de 2018. 
                    
                    2.  Río Opón fue adoptado mediante Resolución 489  del 25 de julio de 2018 . 
                    
                    3.  Río Sogamoso fue aprobado con Resolución DGL No. 835 de 23 de octubre de 2018, y Resolución CDMB No. 1183 de 19 de noviembre de 2018.  
                    
                    4.  Río Carare-Minero Resolución Conjunta; CAS: No. 0186, CAR: 0598, CORPOBOYACA: No. 0537 de fecha 04 de Marzo de 2019. 
                    
                    5.  Rio Medio Bajo Suárez aprobado mediante resolución CAS: No. 1055 DEL 14/12/18, CAR 4238 18/12/18, CORPOBOYACA 4605 DEL 14/12/2018. 
                    
                    6.  Para la vigencia 2019 se dio inicio a la fase de Aprestamiento del POMCA Bajo Chicamocha, la cual ya se ejecutó en un 100%.
                    Los POMCAS que aún se encuentran en proceso de ejecución son los de:  Rio Lebrija Medio, Directos al rio Magdalena entre el Rio Negro y Carare, los cuales son liderados por la CDMB Y CORPOBOYACA respectivamente.',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia202 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity5,
                      'year' =>4,
                      'value' => 1,
                      'description' => 'Se ejecutó las actividades contenidas en el POMCA Rio Carare Minero, mediante el proyecto  CONSTRUCCIÓN DE SISTEMAS DE TRATAMIENTO DE AGUAS RESIDUALES DOMESTICAS PARA LA GESTIÓN ADECUADA FRENTE AL MANEJO Y DISPOSICIÓN FINAL DE LOS VERTIMIENTOS PRODUCTO DE LAS ACTIVIDADES SOCIOECONOMICAS EN EL MUNICIPIO DE EL PEÑON, SANTANDER. Se ecuentra ejecutado en un 100%.',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia203 = DB::getPdo()->lastInsertId();
                    
                    
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity8,
                      'year' =>4,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia204 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity9,
                      'year' =>4,
                      'value' => 2,
                      'description' => '1. Se ejecutó el proyecto denominado APOYAR ACTIVIDADES DEL PLAN DE VIDA DE LAS COMUNIDADES INDIGENAS UWAS, MEDIANTE EL MEJORAMIENTO, ADECUACIÓN DEL SISTEMA DE ABASTECIMIENTO ARTESANAL DE AGUA, SECTOR TAMARA, JURISDICCIÓN DE CAS, MUNICIPIO DE CONCEPCIÓN, DEPARTAMENTO DE SANTANDER. Se encuentra ejecutado en un 100%.
                    
                    2. Se ejecutó en un 100% el proyecto denominado “SUMINISTRO DE TANQUES PARA EL ALMACENAMIENTO DE AGUA EN EL CORREGIMIENTO DE LA INDIA-LANDAZURI PARA LAS VIVIENDAS DE LA COMUNIDAD DE LA ASOCIACIÓN DE TRABAJADORES CAMPESINOS DEL CARARE -A.T.C.C. EN EL ÁREA DE LA JURISDICCIÓN DE LA CAS”, Se entregaron 94 tanques para el almacenamiento de agua potable de 1 .000 L con flotadores accesorios y adhesivo, de la CAS de 40*40 a color a igual número de beneficiarios pertenecientes a la asociación de Trabajadores Campesinos del Carare — A.T.C.C. ',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia205 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity10,
                      'year' =>4,
                      'value' => 990,
                      'description' => '1.Se ejecutó el proyecto denominado: REALIZAR ACTIVIDADES DE AISLAMIENTO DE PREDIOS PÚBLICOS ADQUIRIDOS PARA CONSERVACIÓN DE FUENTES HÍDRICAS ABASTECEDORAS DE ACUEDUCTOS MUNICIPALES Y VEREDALES, EN EL DEPARTAMENTO DE SANTANDER.  Se desarrolló en un total de 10 predios para un total de 949 hectáreas, correspondiente a los municipios de Barrancabermeja, San Vicente de Chucurí, Valle de San José, Coromoro, Mogotes y Hato. A la fecha se encuentra un avance del 100% de la obra.
                    
                    2. Suscripción del Convenio 482-2019 entre La Gobernación de Santander y la Corporación para ejecutar: IMPLEMENTACIÓN DE UN MODELO SILVOPASTORIL QUE CONTRIBUIRA A LA RESTAURACION DE ECOSISTEMAS Y LA GENERACION DE SERVICIOS AMBIENTALES EN EL DEPARTAMENTO DE SANTANDER  (120 Has) en los municipios de Sabana de Torres, Puerto Wilches, San Vicente de Chucurí, Oiba, Socorro, Barrancabermeja, Cimitarra, El Carmen de Chucurí, Palmas del Socorro, Guapotá. La ejecución de las actividades se encuentran en un 85%.',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia206 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity11,
                      'year' =>4,
                      'value' => 290,
                      'description' => 'Se encuentra ejecutado el proyecto denominado REALIZAR ACTIVIDADES DE MANTENIMIENTO Y LABORES CULTURALES  A LAS PLANTACIONES ESTABLECIDAS POR LA CAS, EN EL DEPARTAMNETO DE SANTANDER  El Proyecto se ejecuta en los municipios de Cimitarra, Ocamonte, Onzaga, Landazuri, Curití, Encino y Barrancabermeja.  Ejecución de un 100%.',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia207 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity12,
                      'year' =>4,
                      'value' => 2349.95,
                      'description' => 'La meta de apoyar la adquisición de predios en zonas de importancia para el Abastecimiento hídrico En la vigencia 2019 se estipuló en 120 hectáreas, sin embargo, se realizó ajuste e incremento de meta, realizando la adquisición de los siguientes predios:
                    1. Adquisición del predio El Retiro ubicado en el paraje de Penjamo Corregimiento El Llanito del municipio de Barrancabermeja (90 Has 9.200 m2).
                    2. Predio rural denominado El Oso ubicado en la vereda La Putana del municipio de San Vicente de Chucurí  (63.4.000 Has). 
                    3.  Predio Villa de Los Gelves, ubicado en la vereda La Putana Corregimiento de Pozo Nutria, municipio de San Vicente de Chucurí (67 Has).
                    4.  Predio Acapulco, ubicado en la vereda La Putana Corregimiento de Pozo Nutria, municipio de San Vicente de Chucurí (121 Has 8255 m2).
                    5. Adquisición del predio SAN ISIDRO, ubicado en la vereda Pericos del municipio de Encino-Santander. (Área de 377 Has. 5.133 M2).
                    6. Adquisición del predio Villa Tatiana del municipio de Barrancabermeja (76,Has 8.490 m2).
                    7. Adquisición del predio San Pablo del municipio de Mogotes (1259 Has 6.816m2).El incremento de meta se debe a que se han ejecutado Convenios gestionados con la Gobernación de Santander y empresas como ISAGEN, con lo cual se ha adquirido un total de 2.189 Hectáreas 1.522 metros cuadros.
                    8. Adquisición del predio el Nevado del municipio de Galán, el cual tiene una extensión de 131 Has 9.658 m2
                    9. Aquisición del predio Santuario de Fátima del municipio de Encino con un área de 160, Has 8.000 m2.
                    
                    Total área adquirida vigencia 2019: 2.349 Has 9.522 m2.',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia208 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity13,
                      'year' =>4,
                      'value' => 1,
                      'description' => 'Se ejecutó el proyecto: Desarrollar actividades de gestión ambiental urbana en el municipio de Capitanejo-Santander. ',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia209 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity14,
                      'year' =>4,
                      'value' => 2,
                      'description' => '1. Se realizó la ejecución del proyecto: SUMINISTRO DE INSUMOS PARA LA PRODUCCION Y MANEJO DEL MATERIAL VEGETAL EN LOS VIVEROS UBICADOS EN EL MUNICIPIO DE SOCORRO Y PINCHOTE DE PROPIEDAD DE LA CORPORACION AUTONOMA REGIONAL DE SANTANDER – CAS COMO ESTRATEGIA PARA LA CONSERVACION Y PROPAGACION DE LA DIVERSIDAD BIOLOGICA. Proyecto ejecutado en un 100%.
                    
                    2. Se realizó la ejecución de “Acciones de recuperación de especies forestales nativas con algún grado de riesgo o amenaza, en el Distrito regional de manejo Integrado (DRMI) Serranía de los Yariguies, municipios de El Carmen de Chucurí y san Vicente de Chucurí. Ejecución del 100%.
                    ',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia210 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity15,
                      'year' =>4,
                      'value' => 90,
                      'description' => 'Ejecución del Proyecto:  SUMINISTRAR MATERIALES PARA PROTEGER, RECUPERAR, AISLAR NACIMIENTOS DE AGUA, AFLORAMIENTOS Y ZONAS DE RECARGA HÍDRICA DE LOS ACUEDUCTOS VEREDALES DE DIECIOCHO (18) MUNICIPIOS DE LA PROVINCIA DE GUANENTA, MEDIANTE CERCAS DE PROTECCIÓN. Se realizó el aislamiento y protección de 90 nacimientos. Se encuentra ejecutado en un 100%',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia211 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity16,
                      'year' =>4,
                      'value' => 74,
                      'description' => '1. En la vigencia del Plan de Acción se ha ejecutado actividades para atender el pago por servicios ambientales, Actualmente la CAS cuenta con el apoyo de las empresas ISAGEN y ESSA que a través de convenios patrocinan a ciento y siete (107) familias logrando conservar 779 Has durante el programa, en los municipios de San Vicente de Chucuri, Zapatoca y Betulia; en el área de influencia de la microcuenca La Ramera o El Ramo.  En los municipios de Encino, Coromoro, Charalá y Mogotes; en el corredor Guantiva la Rusia. En los Municipios de Hato y Simacota  en los nacimientos que abastecen la quebrada  Cinco Mil, la cual surte el acueducto del Socorro. En el Municipio de Puerto Wilches en el ecosistema de humedal. 
                    
                    2. Para el presente año se suscribió el convenio No. 005-00556-2019 con la Transportadora de Gas Internacional-TGI, cuyo objeto es: AUNAR ESFUERZOS ENTRE LA TRANSPORTADORA DE GAS INTERNACIONAL Y LA CORPORACION AUTONOMA REGIONAL DE SANTANDER CAS, PARA LA IMPLEMENTACIÓN DE UN MODELO DE PAGO POR SERVICIOS AMBIENTALES - PSA, BAJO LA ESTRATEGIA BANCO2 EN LOS MUNICIPIOS DE FLORIAN Y JESUS MARIA ZONAS DE INFLUENCIA DE LA CAS Y TGI, para atender aproximadamente veintitrés (23) familias campesinas al proyecto de pago por servicios ambientales bajo el esquema BanCO2, en los municipios de Florián y Jesús María; para la protección de mínimo cincuenta y cuatro (54) hectáreas de ecosistema estratégico.
                    
                    3.Se ha adelantado gestiones con diferentes empresas como Ecopetrol, Manzarovar, Palmicultores, Quinsagro S.C.A. , FENAVI, HMV e ISAGEN. Con esta última, se definieron acciones en los municipios de Zapatoca, Betulia, San Vicente de Chucurí, Hato y Simacota,realizando la caracterización de 47 familias  para conservar 95,21 hectáreas en zonas de importancia estratégica.',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia212 = DB::getPdo()->lastInsertId();
                    
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity18,
                      'year' =>4,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia214 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity19,
                      'year' =>4,
                      'value' => 2.075,
                      'description' => '1. Se suscribió el Convenio No. 005-00535-2019 con el objeto de AUNAR ESFUERZOS ENTRE EL MUNICIPIO DE LOS SANTOS Y LA CORPORACION AUTONOMA REGIONAL DE SANTANDER - CAS PARA LA CONSTRUCCION DE UNA PLANTA DE TRATAMIENTO DE AGUAS RESIDUALES PTAR EN EL MUNICIPIO DE LOS SANTOS DEPARTAMENTO DE SANTANDER, El proyecto se encuentra en proceso de ejecución con un avance del 60%.
                    
                    2. Se suscribió el Convenio No.  005-00550-2019 con el objeto de  AUNAR ESFUERZOS ENTRE LA CORPORACION AUTONOMA REGIONAL DE SANTANDER CAS Y EL MUNICIPIO DE CABRERA PARA LA CONSTRUCCION PLANTA DE TRATAMIENTO DE AGUAS RESIDUALES DEL CASCO URBANO DEL MUNICIPIO DE CABRERA SANTANDER. El proyecto se encuentra en proceso de ejecución con un avance del 60%.
                    
                    3. En proceso de ejecución del proyecto  CONSTRUCCIÓN DE SISTEMAS DE TRATAMIENTO DE AGUAS RESIDUALES DOMESTICAS PARA LA GESTIÓN ADECUADA FRENTE AL MANEJO Y DISPOSICIÓN FINAL DE LOS VERTIMIENTOS PRODUCTO DE LAS ACTIVIDADES SOCIOECONOMICAS EN LOS MUNICIPIOS DEL SOCORRO GUADALUPE, SANTANDER, y  CONSTRUCCIÓN DE UNIDADES SANITARIAS CON SISTEMAS DE TRATAMIENTO DE AGUAS RESIDUALES DOMESTICAS EN EL MUNICIPIO DE GUEPSA. Cuenta con un avance del 87,5%.',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia215 = DB::getPdo()->lastInsertId();
                    
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity21,
                      'year' =>4,
                      'value' => 1,
                      'description' => 'Se ejecutó el proyecto: CONTRATAR UN LABORATORIO ACREDITADO POR EL IDEAM PARA REALIZAR LOS DIFERENTES PROCESOS DE SEGUIMIENTO AMBIENTAL MEDIANTE CARACTERIZACIONES Y ANÁLISIS FISICO-QUIMICO-MICROBIOLOGÍCO E HIDROBIOLOGICO EN MATRIZ AGUA (FUENTES HIDRICAS Y VERTIMIENTOS DE LOS DIFERENTES USUARIOS MUNICIPIOS-EMPRESAS) DE LA JURIDISCCION DE LA CAS . Los monitoreos se han desarrollado en los municipios de Villanueva, Barichara, Puente Nacional, Suaita, Guepsa, Zapatoca, Los Santos, Landazuri, Barbosa y empresas como ECOPETROL, TERPEL. 
                    ',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia217 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity22,
                      'year' =>4,
                      'value' => 29,
                      'description' => 'Se realizó acompañamiento al monitoreo de aguas residuales domésticas a diecinueve (19) Municipios (Sabana de Torres, Puerto Parra, Cimitarra, Puerto Wilches, Simacota, Curití, Molagavita, Palmar,Villanueva, Barichara, Puente Nacional, Suaita, Guepsa, Zapatoca, pinchote, Los Santos, Oiba, El Hato y Encino), Acompañamiento al monitoreo de aguas residuales domésticas para actualización del PSMV a cuatro (04)municipios (Guavatá, Paramo, La Paz y Simacota), acompañamiento a monitoreo de aguas residuales no Domésticas a siete (07) Empresas (Establecimiento Delik Pollo, Aviexpo  S.A.S, Ecopetrol refineria; Ecopetrol punto de descarga Campo 23, Extractora Monterrey, EDS Combustibles UNIGAS, Multiingenios Makariza y trapiche San Gabriel), acompañamiento a monitoreo de aguas residuales Domésticas a dos (02) Empresas (Isagen Campamento el Cedral y Ecopetrol) . ',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia218 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity23,
                      'year' =>4,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia219 = DB::getPdo()->lastInsertId();
                    
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity25,
                      'year' =>4,
                      'value' => 20,
                      'description' => 'Se radicó en el MADS, el proyecto: Zonificación y regímenes del uso del suelo en el Páramo Iguaque-Merchan y construcción participativa de lineamientos para su gestión, en jurisdicción de la CAS Y CORPOBOYACÁ.',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia221 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity26,
                      'year' =>4,
                      'value' => 0.5,
                      'description' => 'Se realizó proceso de Suscripción del Convenio con ECOPETROL para la ejecución del proyecto  Aplicación de la Guía planes de manejo para áreas del SINAP para  desarrollar la propuesta de guía planes de manejo para áreas del SINAP al DRMI Humedal San Silvestre. A la fecha se encuentra en proceso de contratación.',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia222 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity27,
                      'year' =>4,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia223 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity28,
                      'year' =>4,
                      'value' => 3,
                      'description' => 'Para el cumplimiento de la meta de Número de especies amenazadas priorizadas con medidas de conservación y manejo, se trabaja en tres especies que se relacionan en los siguientes proyectos: 
                    
                    1. EJECUCIÓN DE OBRAS DE RESTAURACIÓN HIDRAULICA DE LA CIENGA DE PAREDES, MEDIANTE EL USO DE HERRAMIENTAS MANUALES PARA GARANTIZAR EL ADECUADO FUNCIONAMIENTO HIDRAULICO DEL SISTEMA COMO ESTRATEGIA DE CONSERVACIÓN DEL MANATÍ ANTILLANO (Trichechus manatus manatus) Y BAGRE RAYADO (Pseudoplatystoma magdaleniatum) EN LOS MUNICIPIOS DE SABANA DE TORRES Y PUERTO WILCHES. Proyecto con avance del 100% de ejecución.
                    
                    2. ESTABLECER ESTRATEGIAS PARA LA PROTECCIÓN Y CONSERVACIÓN DEL JAGUAR (Panthera onca) EN LOS MUNICIPIOS DE CIMITARRA Y PUERTO PARRA, JURISDICCIÓN DE LA CAS. Proyecto con avance del 100% de ejecución.',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia224 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity29,
                      'year' =>4,
                      'value' => 1,
                      'description' => 'Se ejecutaron las actividades del proyecto: IMPLEMENTACIÓN DE ESTRATEGIAS PARA LA PREVENCIÓN MANEJO Y CONTROL DE CARACOL GIGANTE AFRICANO ACHATINA FULICA, CON EL APOYO COMUNITARIO EN LOS MUNICIPIOS DE SAN VICENTE DE CHUCURI, BARRANCABERMEJA, SOCORRO, PARAMO, CHARALA, Y SAN GIL JURISDICCIÓN DEL DEPARTAMENTO DE SANTANDER, El proyecto se encuentra ejecutado en un 100%',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia225 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity30,
                      'year' =>4,
                      'value' => 2,
                      'description' => '1.  Se ejecutó el proyecto ESTABLECER ÁREAS PRIORITARIAS PARA LA CONSERVACIÓN DEL OSO ANDINO (TREMARCTOS ORNATUS) Y EL PUMA (PUMA CONCOLOR), A PARTIR DE MODELOS DE OCUPACIÓN, CONECTIVIDAD FUNCIONAL Y PROMOVER PROGRAMAS DE SENSIBILIZACIÓN DE LAS ESPECIES FOCALES EN EL CORREDOR DEL PÁRAMO GUANTIVA – LA RUSIA EN LOS MUNICIPIOS DE COROMORO, CHARALÁ, ENCINO, GÁMBITA Y ONZAGA - JURISDICCIÓN DE LA CAS bajo este proyecto se desarrollaron actividades, reuniones y talleres en los municipios de Coromoro, Gambita, Encino, Onzaga y Charalá, capacitando y dando a conocer a las comunidades la importancia de la protección de los corredores del Oso Andino, su ejecución es de un 100%.
                    2. se ejecutó el proyecto: “APOYAR MEDIANTE JORNADAS DE SENSIBILIZACIÓN LA PROTECCIÓN Y CONSERVACIÓN DE ESPECIES DE FAUNA Y FLORA EN LOS CENTROS EDUCATIVOS DE LOS MUNICIPIOS DE LA PROVINCIA COMUNERA, DEPARTAMENTO DE SANTANDER”. Las actividades y jornadas de sensibilización fueron desarrolladas en las instituciones educativas de 16 municipios de la provincia Comunera, cumpliendo una ejecución del 100%.',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia226 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity31,
                      'year' =>4,
                      'value' => 162295,
                      'description' => 'En el Plan de Acción 2016-2019 se proyectó desarrollar actividades de ordenación del Plan de Ordenación Forestal en un total de 2.601.219, una vez ejecutado el proyecto actualización del Plan General de Ordenación Forestal en el Área de Jurisdicción de la CAS, se logró establecer que como producto de la actualización del Plan; solo aplica a 1.723.072 de hectáreas, el resto de área equivalente a 878.147 Hectáreas corresponde a ecosistemas estratégicos y áreas protegidas, consideradas áreas de exclusión. 
                    Por lo anterior en el año 2019, la meta equivale al ordenamiento de 162.295 Hectáreas y se completará la meta total de ordenación forestal de 1.723.072 hectáreas, siendo acogida la modificación mediante Acuerdo del Consejo directivo de la CAS No. 388 del 19 de Diciembre de 2019',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia227 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity32,
                      'year' =>4,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia228 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity33,
                      'year' =>4,
                      'value' => 2,
                      'description' => '1. Se ejecutó el proyecto: IMPLEMENTACIÓN DE TECNOLOGÍAS ECOLÓGICAS PARA EL BENEFICIO DEL CAFÉ EN EL MUNICIPIO DEL SOCORRO,  se hizo entrega de 07 equipos compactos módulos belcosub para despulpar de café con CAPACI DAD DE 600 Kg/HR.  Proyecto ejecutado en un 100%.
                    
                    2. Se ejecutó el proyecto: PROMOVER EL MEJORAMIENTO Y LA OPTIMIZACIÓN DEL USO DE LOS RECURSOS NATURALES POR PARTE DEL SECTOR CACAOTERO MEDIANTE EL MEJORAMIENTO DEL SISTEMA DE PRODUCCIÓN SOSTENIBLE Y LA CAPACITACIÓN EN BUENAS PRÁCTICAS AMBIENTALES EN LOS MUNICIPIOS DE GUAPOTA Y CHIMA DEPARTAMENTO DE SANTANDER. Se desarrollaron actividades de capacitación en buenas prácticas de producción sostenible y manejo silvicultural a los productores de cacao en los municipios de Chima y Guapotá, el proyecto tiene un avance del 100%.
                    ',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia229 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity34,
                      'year' =>4,
                      'value' => 1,
                      'description' => 'Se ejecutó el proyecto:  LOGÍSTICA Y DESPLAZAMIENTO PARA APOYAR LA PARTICIPACIÓN Y FORTALECIMIENTO A OCHO (08) INICIATIVAS DE NEGOCIOS VERDES DE LA JURISDICCIÓN DE LA CORPORACIÓN AUTÓNOMA REGIONAL DE SANTANDER CAS, EN BIOEXPO, CALI 2019. Ejecución de un 100%.',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia230 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity35,
                      'year' =>4,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia231 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity36,
                      'year' =>4,
                      'value' => 23,
                      'description' => '1.Se han apoyado 10 municipios en la atención de emergencias por deslizamientos y rehabilitación de vías con el apoyo de Retroexcavadora y volqueta en los Municipios de: Guadalupe, Socorro, Simacota, Hato, Cabrera, Confines, Chima, Onzaga, Oiba y Güepsa.
                    
                    2.Apoyo a 6 municipios para atención de emergencias con el camión cisterna para suministro de agua potable: Curití, Aratoca, Socorro, Palmas del Socorro, Valle de San José y Oiba.
                    
                    3.Se han realizado 11 visitas técnicas por parte del grupo de gestión del riesgo a los Municipios de: Mogotes, Cimitarra, Betulia, Málaga, Barrancabermeja, Charalá, Simacota, Santa Bárbara, Ocamonte, Coromoro y Oiba.
                    
                    4.Se ha participado en 9 de las 12 Reuniones ordinarias del Consejo Departamental de Gestion del Riesgo de Desastres.
                    Se hace la acalración que en la jurisdicción de la CAS, se brindó asistencia técnica a los 74 Municipios para la  gestión del riesgo en el marco de la Ley 1523 de 2012. sin embargo en varios años se repitió la acción en 24 municipios. En la vigencia del 2019 se atendió un total de 23 municipios.',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia232 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity37,
                      'year' =>4,
                      'value' => 1,
                      'description' => 'Se ejecutó el Proyecto: Elaboración de estudio de amenaza, vulnerabilidad y riesgo para el área total de la jurisdicción y escala detallada para el área urbana y suburbana en el Municipio de Chima, Santander,  y presenta una ejecución del 100%.',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia233 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity38,
                      'year' =>4,
                      'value' => 1,
                      'description' => 'La meta se cumplió en el mes de marzo del año 2019, Se brindó asesoría técnica al municipio de Macaravita en la incorporación, planificación y ejecución de acciones relacionadas con cambio Climático y se brindó capacitación y de asesoría al Consejo Municipal de Gestión del Riesgo del Municipio, igualmente se dio a conocer la política Nacional de Cambio Climático.',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia234 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity39,
                      'year' =>4,
                      'value' => 1,
                      'description' => 'Se ejecutó Convenio con el municipio de Socorro para la ADQUISICIÓN DE EQUIPOS PARA EL APOYO EN EL CONTROL Y EXTINCIÓN DE INCENDIOS FORESTALES COMO FORTALECIMIENTO AL CONSEJO DE GESTIÓN DEL RIESGO DE DESASTRES EN EL MUNICIPIO DEL SOCORRO - JURISDICCIÓN DE LA CAS. Proyecto ejecutado en un 100%.',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia235 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity40,
                      'year' =>4,
                      'value' => 1,
                      'description' => 'Se realizó Proyecto: Construcción de estufas ecológicas para leña como acción para la mitigación de gases de efecto invernadero, en el sector rural del municipio de Confines y Guapotá departamento de Santander. Proyecto Ejecutado en un 100%',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia236 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity41,
                      'year' =>4,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia237 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity42,
                      'year' =>4,
                      'value' => 1.85,
                      'description' => '1.Se encuentra en proceso de ejecución del proyecto:  ELABORACION DE OBRAS DE PROTECCION DE ZONAS INUNDABLES EN EL RIO SOGAMOSO, SECTOR CANDILEJAS MUNICIPIO DE BARRANCABERMEJA SANTANDER ETAPA 3. Actualmente la ejecución de obra presenta un porcentaje de 85%
                    
                    2. Ejecución del proyecto Restauración de la conectividad hidráulica de áreas prioritarias de Caño Peruétano mediante remoción manual del material vegetal flotante en los municipios de Sabana de Torres y Puerto Wilches; y caño Macías en el municipio de Puerto Parra, departamento de Santander. Ejecución del 100%.',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia238 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity43,
                      'year' =>4,
                      'value' => 0.655569007263923,
                      'description' => 'De las 3.304 autorizaciones ambientales solicitadas por los usuarios se han resuelto 2.166 hasta el Cuarto trimestre del año 2019.',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia239 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity44,
                      'year' =>4,
                      'value' => 0.901943897637795,
                      'description' => 'De un total de 20.320 expedientes, son objeto de seguimiento el 40%, lo que corresponde a  8.128 de los cuales se les ha hecho seguimiento a 7.331.',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia240 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity45,
                      'year' =>4,
                      'value' => 0.132705479452055,
                      'description' => 'De los 292 procesos sancionatorios aperturados, la meta corresponde al universo del 80%, que equivale a 233,6 procesos de los cuales a la fecha se han resuelto 31 procesos.',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia243 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity46,
                      'year' =>4,
                      'value' => 1,
                      'description' => 'Se cuenta con 74 expedientes correspondientes a los EOT, PBOT y POT de los municipios de la jurisdicción de la CAS, de los cuales en el cuarto Trimestre se le realizó seguimiento a un total de 74 expedientes.',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia244 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity47,
                      'year' =>4,
                      'value' => 0.810810810810811,
                      'description' => 'De los 74  planes de saneamiento y manejo de vertimientos (PSMV)  de los municipios del área de jurisdicción de la CAS, se ha realizado seguimiento a 60 Expedientes.',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia245 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity48,
                      'year' =>4,
                      'value' => 0.835164835164835,
                      'description' => 'La Subdirección de Autoridad Ambiental tiene 91 expedientes de Programas de Uso Eficiente y Ahorro Agua (PUEAA), de los cuales se ha realizado seguimiento a setenta y seis (76).',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia246 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity49,
                      'year' =>4,
                      'value' => 1,
                      'description' => 'Se realizó seguimiento, control y apoyo en el cuarto Trimestre del año 2019 a  un total de setenta y cuatro (74) expedientes, de un universo de 74 Planes de Gestión Integral de Residuos Sólidos - PGIRS.',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia247 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity50,
                      'year' =>4,
                      'value' => 40,
                      'description' => 'Se realizó la administración de las páginas de RESPEL, RUA Y PCB, en el marco del seguimiento a residuos peligros a un total de 45 empresas.',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia248 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity51,
                      'year' =>4,
                      'value' => 0.9,
                      'description' => 'Se esta ejecutando el proyecto IMPLEMENTAR ESTRATEGIAS COMO ALTERNATIVA DE REDUCCIÓN, RECOLECCIÓN Y SEPARACIÓN DE LOS RESIDUOS SOLIDOS GENERADOS EN MUNICIPIOS DE LA JURISDICCIÓN DE LA CAS Actividades desarrolladas en comunidades e instituciones educativas de los municipios de las diferentes provincias de la jurisdicción de la CAS. El proyecto presenta una ejecución del 90%.',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia249 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity52,
                      'year' =>4,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia250 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity53,
                      'year' =>4,
                      'value' => 43,
                      'description' => 'Se ejecutó el proyecto  Calibración sonómetro modelo CEL-450, marca CASELLA S/N 348824 1.308.878 y su respectivo calibrador acústico, con la finalidad de contar con los elementos necesarios en buen estado para la realización de los monitoreos. Proyecto ejecutado en el 100%. Contando con los equipos calibrados para ejecutar actividades de monitoreo, las cuales se dieron inicio en el mes de julio de 2019 y al mes de Septiembre se cumplió la meta, realizando un total de 43 monitoreos  y  seguimiento a emisiones e inmisiones atmosféricas y control de ruido en los municipios de Málaga, Mogotes, Velez, Ocamonte, Capitanejo, Cimitarra, San Gil y Curití.',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia251 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity54,
                      'year' =>4,
                      'value' => 1,
                      'description' => '1.Se realizó la ejecución del proyecto: Diagnóstico mantenimiento y calibración de las unidades de monitoreo de calidad de aire que componen el comodato No. 319 suscrito el 24 de enero de 2014 entre el Ministerio de Ambiente y Desarrollo Sostenible y la CAS. determinando que el estado de funcionamiento la estación es parcial, actualmente se realizó el proceso de mantenimiento y optimización integral y puesta en marcha de las unidades de monitoreo de calidad de aire, realizado ajustes para la optimización. Proyecto ejecutado en un 100%.
                    
                    2. Se ejecutó el proyecto “Diagnóstico del estado de la calidad del aire mediante la realización de una campaña de monitoreo en la cabecera municipal de San Gil del departamento de Santander, contemplando el marco del día sin carro y sin moto 2019”',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia252 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity55,
                      'year' =>4,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia253 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity56,
                      'year' =>4,
                      'value' => 0.8,
                      'description' => 'Se encuentra en ejecución el proyecto:  Fortalecimiento de la Unidad de Reacción Ambiental Inmediata - (URAI)  de la Corporación Autónoma Regional de Santander(CAS) mediante el abastecimiento de equipos, instrumentos y elementos.',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia254 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity57,
                      'year' =>4,
                      'value' => 1.8,
                      'description' => 'Se realizó la ejecución de los siguientes proyectos:
                    
                    1. En proceso de ejecución del Proyecto: Suministro de alimentos, para la nutrición óptima y oportuna de especímenes de fauna silvestre, ingresados al hogar de paso de la Corporación Autónoma Regional de Santander - CAS.  
                    2. Se ejecutó el proyecto “Disposición de dieta alimenticia para la conservación de las poblaciones de Condor andino en el páramo del almorzadero. Proyecto ejecutado en un 100%.',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia255 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity58,
                      'year' =>4,
                      'value' => 2,
                      'description' => '1.Se ejecutó el proyecto: Realización de operativos para el control al tráfico ilegal de maderas en el corregimiento La India Municipio de Landazurí, en el mes de febrero. se realizaron reuniones con el Comité Interinstitucional de fauna y flora de Santander CIFFSAN. Se realizó actividades de control y seguimiento de los establecimientos de transformación de productos forestales maderables en los municipios de Barrancabermeja, Cimitarra, Landazurí, Socorro, San Gil, Curiti, Mogotes, Pinchote, Valle De San Jose, Charala, Suaita, Malaga, Barbosa, La Belleza, Velez. Se brindó apoyo en el bajo Simacota, San Andrés y Santa Bárbara en atención de reportes de ataques de felinos a la población equina y ovino-caprinos. Proyecto ejecutado en un 100%
                    
                    2. Ejecución del proyecto Organización e identificación de los productos forestales en custodia de la CAS que se encuentran ubicados en la bodega contratada por la entidad en el municipio de Vélez. Proyecto ejecutado en un 100%',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia256 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity59,
                      'year' =>4,
                      'value' => 1,
                      'description' => '1. Ejecución de talleres y capacitaciones en los municipios de San Vicente De Chucuri, San Gil, y fuerzas públicas (ejército y policía Nacional) con temas relacionados con vigilancia seguimiento y control, aprovechamientos forestales, viveros, y manejo de fauna y se reealización de mesas de trabajo con los miembros del comité interinstitucional de flora y fauna de Santander las cuales se realizaron en San Gil, San Vicente  y ciudad de Bucaramanga.',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia257 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity60,
                      'year' =>4,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia258 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity61,
                      'year' =>4,
                      'value' => 4,
                      'description' => 'Los proyectos correspondientes a la meta lo integran los siguientes:
                    
                    1. Se ejecutó el proyecto: Renovación de una (1) Licencia para el Firewall Fortinet FortiGate 200D, por el término de dos (2) años, con la instalación, configuración y soporte se encuentra terminado en un 100%
                    2. Se ejecutó el proyecto: Actualización, soporte técnico de primer y segundo nivel, mantenimiento, capacitación, ajustes a los módulos ya implementados de GD- Soft de la Corporación Autónoma Regional de Santander -CAS. se encuentra ejecutado en un 100%
                    3.  Se ejecutó el proyecto:  “Actualización del Plan Estratégico de tecnologías de la información, de acuerdo a la normatividad vigente “Guía estratégica versión II del 30 de abril del 2018”.Se encuentra ejecutado en un 100%
                    4. Se ejecutó el proyecto: Desarrollo e implementación de los módulos de carga de históricos y control y seguimiento en cita versión II, así como brindar soporte de primero y segundo nivel a los módulos ya implementados en cita versión I y cita versión II. Se encuentra ejecutado en un 100%.',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia259 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity62,
                      'year' =>4,
                      'value' => 0.8,
                      'description' => 'De un universo de 686 registros de información ambiental  se cargó el 100% al SIAC.  ',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia260 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity63,
                      'year' =>4,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia261 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity64,
                      'year' =>4,
                      'value' => 4.8,
                      'description' => '1. Se brindó Apoyo al Plan Nacional de Educación Ambiental en los 74 municipios de la Jurisdicción de la CAS, atendiendo la política pública del MADS, a la fecha han cumplido 74 municipios. Se participó en las reuniones del Comité organizador y responsable del plan decenal de educación ambiental, integrado por la CAS, Corporación para la defensa de la meseta de Bucaramanga CDMB, Secretaria de Educación Departamental, Universidad Industrial de Santander – UIS, Unidades Tecnológicas de Santander. Ejecución del 100%
                    2. Participación en la celebración del día mundial de los humedales realizada en el municipio de Barrancabermeja mediante la jornada de limpieza de las ciénagas San Silvestre y Miramar. avance del proyecto 100%
                    3. Suscripción del Convenio Interadministrativo con el Objeto de  Aunar esfuerzos entre la gobernación de Santander - Secretaria de Educación y la Corporación Autónoma Regional de Santander CAS para desarrollar del concurso del PRAE Nos Une - para la educación y sensibilización de los recursos naturales renovables a través de los PRAES en las instituciones educativas de la jurisdicción de la CAS, se realizó el proceso de socialización y capacitación a las instituciones educativas en cumplimiento de la fase1. Total de colegios capacitados: 75. Alumnos capacitados: 12.419 aproximadamente, Total docentes  capacitados: 458, y municipios vinculados: 58 municipios. Avance del proyecto: 80%
                    4.Logística y organización del ciclo paseó desde el municipio de San gil – hasta el municipio del Valle de San José, en el marco del día mundial del ambiente, la cual participaron la Policía Ambiental, Policía de Turismo, Acuasan, Ladrillera Versalles, actividad ejecutada en un 100%
                    5. Organización y entrega de 18.000 árboles para  municipios del área de influencia de la Corporación Autónoma regional de Santander en el marco de la campaña “EN SEMANA SANTA RECONCILIATE CON LA NATURALEZA” en la cual los contratistas y funcionarios realizaron la entrega del material vegetal en los siguientes municipios: Velez, Guepsa, Puente Nacional, Barbosa, Guavata, San gil, Onzaga, San Joaquin, Charala, Valle de San Jose, Cabrera, Encino, Villanueva, Palmar, Galan, Socorro, Simacota, Oiba, Chima, Cimitarra, Barrancabermeja, San Vicente, Málaga, San José de miranda, Concepción, Enciso, Aguada, Cepita y Zapatoca.',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia262 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity65,
                      'year' =>4,
                      'value' => 0.01,
                      'description' => 'Se ejecutó el proyecto: Plan de medios para los municipios de las provincias Mares, Guanentína, Comunera, Veleña, García Rovira y municipios que hacen parte de la Oficina Enlace Bucaramanga, que conlleve a promover estrategias de Comunicación y divulgación para la sensibilización ambiental en la jurisdicción de la CAS.  Cuenta con una ejecución del 100%',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia263 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity66,
                      'year' =>4,
                      'value' => 1,
                      'description' => 'Se ejecutó el proyecto: Plan de medios para los municipios de las provincias Mares, Guanentína, Comunera, Veleña, García Rovira y municipios que hacen parte de la Oficina Enlace Bucaramanga, que conlleve a promover estrategias de Comunicación y divulgación para la sensibilización ambiental en la jurisdicción de la CAS.  Cuenta con una ejecución del 100%',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia264 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity67,
                      'year' =>4,
                      'value' => 3,
                      'description' => '1. Se ejecutó el proyecto: “Adquirir material didáctico  para  el posicionamiento, reconocimiento e identidad como autoridad ambiental, realizando procesos de sensibilización y educación ambiental para el cuidado de los recursos naturales renovables dirigido a los 74 municipios del área de jurisdicción de la Corporación Autónoma Regional de Santander – CAS, apoyados por las coordinaciones regionales”. Proyecto ejecutado en un 100%.
                    2. Se realizó acciones del proyecto de Conmemoración del día Nacional del Reciclador al grupo de recuperadores del municipio de San Gil, celebración del día internacional libre de bolsas plásticas, actividades desarrolladas en el municipio de San Gil en coordinación con entidades de apoyo como la Policía Nacional, Acuasan y Colegio Guanentá.
                    3.Se realizó la ejecución del proyecto de Realizaer procesos de sensibilzación ambiental para el cuidado de los recursos naturales renovables, ejecutando las siguentes acciones:
                    -. Celebración del día mundial del agua mediante la realización de jornadas de limpieza del Rio Fonce y Quebrada Curiti, de igual forma se realizó actividades en los municipios de Peñon, Confines, Socorro, San Vicente de Chucurí, Barrancabermeja, Cimitarra, Guadalupe, Oiba, Guapotá, Hato y Málaga, entre otros. 
                    -. Realización de caminata ecológica y siembra de árboles con participación de los colegios Rafael León Amaya; José León Guerra y Florentino González y administración municipal de Coromoro.
                    -. Celebración de la fecha ambiental con un desfile de faroles por las calles del municipio de Simacota y una sensibilización en el cuidado de la calidad de aire, con participación de la administración Municipal, oficina de gestión del riesgo, secretaria de salud, planeación, policía y estudiantes del colegio Pedro Obando. 
                    -.Celebración del mundial del árbol en el mes de octubre en los municipios de Pinchote, San Gil, Socorro, San Vicente De Chucuri, Vélez con el apoyo de las regionales CAS, quienes se encargaron de la siembra de 200 árboles.
                    -. Se realiza el día mundial del ahorro de energía en el municipio de San Gil a través de sensibilización de 150 personas.',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia265 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity68,
                      'year' =>4,
                      'value' => 2,
                      'description' => '1.Se realizó la ejecución del proyecto: MANTENIMIENTO PREVENTIVO DE DUCTERIAS HIDROSANITARIA DE LOS AIRES ACONDICIONADOS Y LA DESINFECCION DE LAS BATERIAS DE BAÑOS DE LA SEDE PRINCIPAL DE LA CORPORACION AUTONOMA REGIONAL DE SANTANDER. Proyecto ejecutado en un 100%     
                                                        
                    2. Ejecución del proyecto ADECUACIÓN Y MEJORAMIENTO DEL ENTORNO CON SUMNISTRO DE PLANTAS ORNAMENTALES, MACETAS Y LA ADQUISICIÓN DE UNA FUENTE CASCADA EN AGUA VERTICAL DE MEDIDAS 2,40 DE ALTO POR 4,30 DE ANCHO, EN BASE DE ACERO INOXIDABLE, SUPERFICE EN VIDRIO TEMPLADO DE 8MM CON IMAGFEN EN ADHESIVO DE LA SEDE PRINCIPAL DE LA CORPORACIÓN AUTÓNOMA REGIONAL DE SANTANDER-CAS, Proyecto ejecutado en un 100%.',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia266 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity69,
                      'year' =>4,
                      'value' => 2,
                      'description' => '1. Ejecución del proyecto gestionado ante la AGENCIA NACIONAL DE HIDROCARBUROS-ANH, cuyo objeto es: Fortalecimiento institucional para el acompañamiento, gestión y seguimiento del desarrollo de proyectos de exploración y producción de hidrocarburos de la jurisdicción de la CAS. El proyecto tiene una ejecución del 100%.
                    
                    2. Ejecución del Convenio interadministrativo cuyo objeto es Aunar esfuerzos entre la Corporación Autónoma Regional de Santander-CAS y el Servicio Nacional de Aprendizaje- SENA para el apoyo y fortalecimiento de la gestión administrativa de la CAS, el proyecto tiene una avance del 100%',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia267 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity70,
                      'year' =>4,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia268 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity71,
                      'year' =>4,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia269 = DB::getPdo()->lastInsertId();
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity72,
                      'year' =>4,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia270 = DB::getPdo()->lastInsertId();
                    
                    
                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity75,
                      'year' =>4,
                      'value' => 1,
                      'description' => '',
                      'date_report' => '2019-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia271 = DB::getPdo()->lastInsertId();
          
                    DB::table('financing_sources')->insert([
          'father_id' => 11,
          'code' => '1.1.1.1.1.1.1.1',
          'name' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
          'description' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 7,
          ]);
          $idFuente1 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 90,
          'code' => '1.1.2.4.2.3',
          'name' => 'Venta de bienes y servicios',
          'description' => 'Venta de bienes y servicios',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 7,
          ]);
          $idFuente2 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 58,
          'code' => '1.1.2.2.2.1.1',
          'name' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
          'description' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 7,
          ]);
          $idFuente3 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 79,
          'code' => '1.1.2.2.2.8.1',
          'name' => 'Otros servicios (vigencia actual)',
          'description' => 'Otros servicios (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 7,
          ]);
          $idFuente4 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 27,
          'code' => '1.1.2.1.1.1.1.1',
          'name' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia actual)',
          'description' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 7,
          ]);
          $idFuente5 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 208,
          'code' => '1.2.5.1.3',
          'name' => 'Otros Convenios',
          'description' => 'Otros Convenios',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 7,
          ]);
          $idFuente6 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 42,
          'code' => '1.1.2.2.1.1.1.1',
          'name' => 'Tasa retributiva (vigencia actual)',
          'description' => 'Tasa retributiva (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 7,
          ]);
          $idFuente7 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 45,
          'code' => '1.1.2.2.1.1.2.1',
          'name' => 'Tasa por el uso del agua (vigencia actual)',
          'description' => 'Tasa por el uso del agua (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 7,
          ]);
          $idFuente10 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 48,
          'code' => '1.1.2.2.1.1.3.1',
          'name' => 'Tasa de aprovechamiento Forestal (vigencia actual)',
          'description' => 'Tasa de aprovechamiento Forestal (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 7,
          ]);
          $idFuente11 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 84,
          'code' => '1.1.2.3.1.1.1',
          'name' => 'Multas ambientales (vigencia actual)',
          'description' => 'Multas ambientales (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 7,
          ]);
          $idFuente12 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 79,
          'code' => '1.1.2.2.2.8.1',
          'name' => 'Otros servicios (vigencia actual)',
          'description' => 'Otros servicios (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 7,
          ]);
          $idFuente13 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 145,
          'code' => '1.2.2.6',
          'name' => 'Rendimientos financieros',
          'description' => 'Rendimientos financieros',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 7,
          ]);
          $idFuente14 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 145,
          'code' => '1.2.2.7',
          'name' => 'Excedentes financieros',
          'description' => 'Excedentes financieros',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 7,
          ]);
          $idFuente15 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 279,
          'code' => '1.2.7.3.3.5',
          'name' => 'Cancelación de reservas Otras tasas',
          'description' => 'Cancelación de reservas Otras tasas',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 7,
          ]);
          $idFuente16 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 241,
          'code' => '1.2.6.3.5',
          'name' => 'Recuperación de cartera Otras tasas',
          'description' => 'Recuperación de cartera Otras tasas',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 7,
          ]);
          $idFuente17 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 250,
          'code' => '1.2.7.4',
          'name' => 'Otros recursos del balance',
          'description' => 'Otros recursos del balance',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 7,
          ]);
          $idFuente18 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 119,
          'code' => '1.1.2.5.1.1.1.4',
          'name' => 'Aportes de la Nación Funcionamiento',
          'description' => 'Aportes de la Nación Funcionamiento',
          'type_id' => 23,
          'final_level' => true,
          'group_id' => 7,
          ]);
          $idFuente19 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 118,
          'code' => '1.1.2.5.1.1.2',
          'name' => 'Aportes de la Nación para Inversión',
          'description' => 'Aportes de la Nación para Inversión',
          'type_id' => 23,
          'final_level' => true,
          'group_id' => 7,
          ]);
          $idFuente20 = DB::getPdo()->lastInsertId();
          
          DB::table('financing_sources')->insert([
            'father_id' => 42,
            'code' => '1.1.2.2.1.1.5.3',
            'name' => 'Tasa por Evaluacion y seguimiento Ambiental',
            'description' => 'Tasa por Evaluacion y seguimiento Ambiental',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 7,
            ]);
            $idFuente8 = DB::getPdo()->lastInsertId();
            
          DB::table('financing_sources')->insert([
            'father_id' => 42,
            'code' => '1.1.2.2.1.1.5.4',
            'name' => 'Tasa por uso del Recurso Hidrico',
            'description' => 'Tasa por uso del Recurso Hidrico',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 7,
            ]);
            $idFuente9 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente1,
          'value' => 11654781904,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 11654781904,
          'year' => 1,
          ]);
          $idPlan1 = DB::getPdo()->lastInsertId();

          DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente5,
          'value' => 7200000000,
          'functioning_percentage' => 20,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 70,
          'functioning' => 1440000000,
          'debt_service' => 0,
          'fund' => 720000000,
          'investment' => 5040000000,
          'year' => 1,
          ]);
          $idPlan2 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente6,
          'value' => 2492865160,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 2492865160,
          'year' => 1,
          ]);
          $idPlan3 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente7,
          'value' => 985000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 90,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 98500000,
          'investment' => 886500000,
          'year' => 1,
          ]);
          $idPlan4 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente8,
          'value' => 2733094546.47,
          'functioning_percentage' => 5,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 85,
          'functioning' => 136654727.3235,
          'debt_service' => 0,
          'fund' => 273309454.647,
          'investment' => 2323130364.4995,
          'year' => 1,
          ]);
          $idPlan5 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente9,
          'value' => 238998189.43,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 90,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 23899818.943,
          'investment' => 215098370.487,
          'year' => 1,
          ]);
          $idPlan6 = DB::getPdo()->lastInsertId();
           

         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente11,
          'value' => 963469592,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 90,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 96346959.2,
          'investment' => 867122632.8,
          'year' => 1,
          ]);
          $idPlan7 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente12,
          'value' => 106765691,
          'functioning_percentage' => 0.156,
          'debt_service_percentage' => 84.246,
          'fund_percentage' => 7.696,
          'investment_percentage' => 7.902,
          'functioning' => 166554.47796,
          'debt_service' => 89945824.03986,
          'fund' => 8216687.57936,
          'investment' => 8436624.90282,
          'year' => 1,
          ]);
          $idPlan8 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente13,
          'value' => 786622270.08,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 90,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 78662227.008,
          'investment' => 707960043.072,
          'year' => 1,
          ]);
          $idPlan9 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente14,
          'value' => 635587188.96,
          'functioning_percentage' => 3,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 97,
          'functioning' => 19067615.6688,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 616519573.2912,
          'year' => 1,
          ]);
          $idPlan10 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente15,
          'value' => 1921279930.85,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 90,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 192127993.085,
          'investment' => 1729151937.765,
          'year' => 1,
          ]);
          $idPlan11 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente16,
          'value' => 1410824099.36,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 14,
          'investment_percentage' => 86,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 197515373.9104,
          'investment' => 1213308725.4496,
          'year' => 1,
          ]);
          $idPlan12 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente17,
          'value' => 1686516273.89,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 90,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 168651627.389,
          'investment' => 1517864646.501,
          'year' => 1,
          ]);
          $idPlan13 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente18,
          'value' => 5040272774.43,
          'functioning_percentage' => 24,
          'debt_service_percentage' => 20,
          'fund_percentage' => 10,
          'investment_percentage' => 46,
          'functioning' => 1209665465.8632,
          'debt_service' => 1008054554.886,
          'fund' => 504027277.443,
          'investment' => 2318525476.2378,
          'year' => 1,
          ]);
          $idPlan14 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente19,
          'value' => 1810813437,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 1810813437,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 1,
          ]);
          $idPlan15 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente1,
          'value' => 11791585157.43,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 11791585157.43,
          'year' => 2,
          ]);
          $idPlan16 = DB::getPdo()->lastInsertId();
           


         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente4,
          'value' => 75086000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 90,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 7508600,
          'investment' => 67577400,
          'year' => 2,
          ]);
          $idPlan17 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente5,
          'value' => 6200000000,
          'functioning_percentage' => 20,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 70,
          'functioning' => 1240000000,
          'debt_service' => 0,
          'fund' => 620000000,
          'investment' => 4340000000,
          'year' => 2,
          ]);
          $idPlan18 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente6,
          'value' => 6743984764.04,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 6743984764.04,
          'year' => 2,
          ]);
          $idPlan19 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente7,
          'value' => 1207980423.6,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 90,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 120798042.36,
          'investment' => 1087182381.24,
          'year' => 2,
          ]);
          $idPlan20 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente8,
          'value' => 2077000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 90,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 207700000,
          'investment' => 1869300000,
          'year' => 2,
          ]);
          $idPlan21 = DB::getPdo()->lastInsertId();
           

         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente10,
          'value' => 253192925.26,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 90,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 25319292.526,
          'investment' => 227873632.734,
          'year' => 2,
          ]);
          $idPlan22 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente11,
          'value' => 150000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 90,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 15000000,
          'investment' => 135000000,
          'year' => 2,
          ]);
          $idPlan23 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente12,
          'value' => 1190431502,
          'functioning_percentage' => 71,
          'debt_service_percentage' => 29,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 845206366.42,
          'debt_service' => 345225135.58,
          'fund' => 0,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan24 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente13,
          'value' => 81512282.9,
          'functioning_percentage' => 45.01,
          'debt_service_percentage' => 5.858,
          'fund_percentage' => 8.834,
          'investment_percentage' => 40.298,
          'functioning' => 36688678.53329,
          'debt_service' => 4774989.532282,
          'fund' => 7200795.071386,
          'investment' => 32847819.763042,
          'year' => 2,
          ]);
          $idPlan25 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente14,
          'value' => 797023876.35,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 797023876.35,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan26 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente15,
          'value' => 9322284645.09,
          'functioning_percentage' => 5,
          'debt_service_percentage' => 0,
          'fund_percentage' => 5,
          'investment_percentage' => 90,
          'functioning' => 466114232.2545,
          'debt_service' => 0,
          'fund' => 466114232.2545,
          'investment' => 8390056180.581,
          'year' => 2,
          ]);
          $idPlan27 = DB::getPdo()->lastInsertId();
           

         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente17,
          'value' => 2802057840.56,
          'functioning_percentage' => 21,
          'debt_service_percentage' => 0,
          'fund_percentage' => 4,
          'investment_percentage' => 75,
          'functioning' => 588432146.5176,
          'debt_service' => 0,
          'fund' => 112082313.6224,
          'investment' => 2101543380.42,
          'year' => 2,
          ]);
          $idPlan28 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente18,
          'value' => 7758961161.2,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 90,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 775896116.12,
          'investment' => 6983065045.08,
          'year' => 2,
          ]);
          $idPlan29 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente19,
          'value' => 2011929000,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 2011929000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan30 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente20,
          'value' => 1727289000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 1727289000,
          'year' => 2,
          ]);
          $idPlan31 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente1,
          'value' => 12676000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 12676000000,
          'year' => 3,
          ]);
          $idPlan32 = DB::getPdo()->lastInsertId();
           

         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente3,
          'value' => 2077000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 2077000000,
          'year' => 3,
          ]);
          $idPlan33 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente4,
          'value' => 32657918,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 32657918,
          'year' => 3,
          ]);
          $idPlan34 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente5,
          'value' => 5430000000,
          'functioning_percentage' => 27,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 73,
          'functioning' => 1466100000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 3963900000,
          'year' => 3,
          ]);
          $idPlan35 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente6,
          'value' => 5835355702,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 5835355702,
          'year' => 3,
          ]);
          $idPlan36 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente7,
          'value' => 989000000,
          'functioning_percentage' => 10,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 90,
          'functioning' => 98900000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 890100000,
          'year' => 3,
          ]);
          $idPlan37 = DB::getPdo()->lastInsertId();
           


         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente10,
          'value' => 240000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 240000000,
          'year' => 3,
          ]);
          $idPlan38 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente11,
          'value' => 30000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 30000000,
          'year' => 3,
          ]);
          $idPlan39 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente12,
          'value' => 45000000,
          'functioning_percentage' => 10,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 90,
          'functioning' => 4500000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 40500000,
          'year' => 3,
          ]);
          $idPlan40 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente13,
          'value' => 217177240,
          'functioning_percentage' => 10,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 90,
          'functioning' => 21717724,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 195459516,
          'year' => 3,
          ]);
          $idPlan41 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente14,
          'value' => 695270858,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 695270858,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan42 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente15,
          'value' => 28279224954,
          'functioning_percentage' => 10,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 90,
          'functioning' => 2827922495.4,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 25451302458.6,
          'year' => 3,
          ]);
          $idPlan43 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente16,
          'value' => 337387556,
          'functioning_percentage' => 98.378,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 1.622,
          'functioning' => 331915129.84168,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 5472426.15832,
          'year' => 3,
          ]);
          $idPlan44 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente17,
          'value' => 4792428677,
          'functioning_percentage' => 10,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 90,
          'functioning' => 479242867.7,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 4313185809.3,
          'year' => 3,
          ]);
          $idPlan45 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente18,
          'value' => 6925758010,
          'functioning_percentage' => 10,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 90,
          'functioning' => 692575801,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 6233182209,
          'year' => 3,
          ]);
          $idPlan46 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente19,
          'value' => 2109814000,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 2109814000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan47 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente20,
          'value' => 930000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 930000000,
          'year' => 3,
          ]);
          $idPlan48 = DB::getPdo()->lastInsertId();
          
          DB::table('financial_plans')->insert([
            'p_a_i_id' => $idpai1,
            'source_id' => $idFuente1,
            'value' => 14648528528,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 100,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 14648528528,
            'year' => 4,
            ]);
            $idPlan49 = DB::getPdo()->lastInsertId();
          
          DB::table('financial_plans')->insert([
            'p_a_i_id' => $idpai1,
            'source_id' => $idFuente2,
            'value' => 2204941233,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 100,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 2204941233,
            'year' => 4,
            ]);
            $idPlan64 = DB::getPdo()->lastInsertId();
          
          DB::table('financial_plans')->insert([
            'p_a_i_id' => $idpai1,
            'source_id' => $idFuente5,
            'value' => 6663084851,
            'functioning_percentage' => 50.85618,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 49.14382,
            'functioning' => 3388590425.37729,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 3274494425.62271,
            'year' => 4,
            ]);
            $idPlan50 = DB::getPdo()->lastInsertId();
            
          
          DB::table('financial_plans')->insert([
            'p_a_i_id' => $idpai1,
            'source_id' => $idFuente6,
            'value' => 12959088484,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 100,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 12959088484,
            'year' => 4,
            ]);
            $idPlan51 = DB::getPdo()->lastInsertId();
          
          DB::table('financial_plans')->insert([
            'p_a_i_id' => $idpai1,
            'source_id' => $idFuente7,
            'value' => 525872847,
            'functioning_percentage' => 10,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 90,
            'functioning' => 52587284.7,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 473285562.3,
            'year' => 4,
            ]);
            $idPlan52 = DB::getPdo()->lastInsertId();
          
          DB::table('financial_plans')->insert([
            'p_a_i_id' => $idpai1,
            'source_id' => $idFuente10,
            'value' => 453577568.77,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 100,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 453577568.77,
            'year' => 4,
            ]);
            $idPlan53 = DB::getPdo()->lastInsertId();
            
          DB::table('financial_plans')->insert([
            'p_a_i_id' => $idpai1,
            'source_id' => $idFuente11,
            'value' => 30000000,
            'functioning_percentage' => 0,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 100,
            'functioning' => 0,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 30000000,
            'year' => 4,
            ]);
            $idPlan54 = DB::getPdo()->lastInsertId();
            
          
          DB::table('financial_plans')->insert([
            'p_a_i_id' => $idpai1,
            'source_id' => $idFuente12,
            'value' => 302895673.67,
            'functioning_percentage' => 10,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 90,
            'functioning' => 30289567.367,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 272606106.303,
            'year' => 4,
            ]);
            $idPlan55 = DB::getPdo()->lastInsertId();
            
          DB::table('financial_plans')->insert([
            'p_a_i_id' => $idpai1,
            'source_id' => $idFuente13,
            'value' => 282871762.83,
            'functioning_percentage' => 10,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 90,
            'functioning' => 28287176.283,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 254584586.547,
            'year' => 4,
            ]);
            $idPlan56 = DB::getPdo()->lastInsertId();
          
          DB::table('financial_plans')->insert([
            'p_a_i_id' => $idpai1,
            'source_id' => $idFuente14,
            'value' => 601385957.91,
            'functioning_percentage' => 100,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 0,
            'functioning' => 601385957.91,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 0,
            'year' => 4,
            ]);
            $idPlan57 = DB::getPdo()->lastInsertId();
          
          DB::table('financial_plans')->insert([
            'p_a_i_id' => $idpai1,
            'source_id' => $idFuente15,
            'value' => 17907363256.57,
            'functioning_percentage' => 10,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 90,
            'functioning' => 1790736325.657,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 16116626930.913,
            'year' => 4,
            ]);
            $idPlan58 = DB::getPdo()->lastInsertId();
            
          DB::table('financial_plans')->insert([
            'p_a_i_id' => $idpai1,
            'source_id' => $idFuente16,
            'value' => 123737677.89,
            'functioning_percentage' => 100,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 0,
            'functioning' => 123737677.89,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 0,
            'year' => 4,
            ]);
            $idPlan59 = DB::getPdo()->lastInsertId();

            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente17,
              'value' => 2750729484.35,
              'functioning_percentage' => 10,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 90,
              'functioning' => 275072948.435,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 2475656535.915,
              'year' => 4,
              ]);
              $idPlan60 = DB::getPdo()->lastInsertId();
            
            DB::table('financial_plans')->insert([
            'p_a_i_id' => $idpai1,
            'source_id' => $idFuente18,
            'value' => 4820581834.5,
            'functioning_percentage' => 10,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 90,
            'functioning' => 482058183.45,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 4338523651.05,
            'year' => 4,
            ]);
            $idPlan61 = DB::getPdo()->lastInsertId();
          
          DB::table('financial_plans')->insert([
            'p_a_i_id' => $idpai1,
            'source_id' => $idFuente19,
            'value' => 2201592305,
            'functioning_percentage' => 100,
            'debt_service_percentage' => 0,
            'fund_percentage' => 0,
            'investment_percentage' => 0,
            'functioning' => 2201592305,
            'debt_service' => 0,
            'fund' => 0,
            'investment' => 0,
            'year' => 4,
            ]);
            $idPlan62 = DB::getPdo()->lastInsertId();

            DB::table('implementations')->insert([
              'p_a_i_s_id'=>$idpai1,
              ]);
              $idImplementation1 = DB::getPdo()->lastInsertId();

            DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 11886272439,
          'financial_plans_id' => $idPlan1,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo1 = DB::getPdo()->lastInsertId();

         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 7677716937.18,
          'financial_plans_id' => $idPlan2,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo2 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 1001157340,
          'financial_plans_id' => $idPlan3,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo3 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 1134630265,
          'financial_plans_id' => $idPlan4,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo4 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 3370370878,
          'financial_plans_id' => $idPlan5,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo5 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 281664058.38,
          'financial_plans_id' => $idPlan6,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo6 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 1053992218,
          'financial_plans_id' => $idPlan7,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo7 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 118727891,
          'financial_plans_id' => $idPlan8,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo8 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 693587794.9,
          'financial_plans_id' => $idPlan9,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo9 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 762047186.36,
          'financial_plans_id' => $idPlan10,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo10 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 1921279930.85,
          'financial_plans_id' => $idPlan11,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo11 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 1410824099.36,
          'financial_plans_id' => $idPlan12,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo12 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 1848124811.68,
          'financial_plans_id' => $idPlan13,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo13 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 3842203886.81,
          'financial_plans_id' => $idPlan14,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo14 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 1810813437,
          'financial_plans_id' => $idPlan15,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo15 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 13018970648.33,
          'financial_plans_id' => $idPlan16,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo16 = DB::getPdo()->lastInsertId();
           


         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 42753779.69,
          'financial_plans_id' => $idPlan17,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo17 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 6069939211,
          'financial_plans_id' => $idPlan18,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo18 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 3194465530.34,
          'financial_plans_id' => $idPlan19,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo19 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 1563845373.31,
          'financial_plans_id' => $idPlan20,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo20 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 2558477814.34,
          'financial_plans_id' => $idPlan21,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo21 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 394067345.82,
          'financial_plans_id' => $idPlan22,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo22 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 321305371,
          'financial_plans_id' => $idPlan23,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo23 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 1509747106,
          'financial_plans_id' => $idPlan24,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo24 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 226943118.35,
          'financial_plans_id' => $idPlan25,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo25 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 1036618639.58,
          'financial_plans_id' => $idPlan26,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo26 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 9322284645.09,
          'financial_plans_id' => $idPlan27,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo27 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 3152620791.8,
          'financial_plans_id' => $idPlan28,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo28 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 6709612857.54,
          'financial_plans_id' => $idPlan29,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo29 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 1963222708.4,
          'financial_plans_id' => $idPlan30,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo30 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 13157777608,
          'financial_plans_id' => $idPlan32,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo32 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 2418827715,
          'financial_plans_id' => $idPlan33,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo33 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 38942605,
          'financial_plans_id' => $idPlan34,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo34 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 7149312755,
          'financial_plans_id' => $idPlan35,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo35 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 4453575147,
          'financial_plans_id' => $idPlan36,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo36 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 1803671694,
          'financial_plans_id' => $idPlan37,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo37 = DB::getPdo()->lastInsertId();
           


         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 243660350,
          'financial_plans_id' => $idPlan38,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo38 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 42194207,
          'financial_plans_id' => $idPlan39,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo39 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 117672975,
          'financial_plans_id' => $idPlan40,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo40 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 401328216,
          'financial_plans_id' => $idPlan41,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo41 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 916209806,
          'financial_plans_id' => $idPlan42,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo42 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 28279224954,
          'financial_plans_id' => $idPlan43,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo43 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 337387556,
          'financial_plans_id' => $idPlan44,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo44 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 5763088377,
          'financial_plans_id' => $idPlan45,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo45 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 4034635446,
          'financial_plans_id' => $idPlan46,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo46 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 2091557569,
          'financial_plans_id' => $idPlan47,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo47 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 15174945399.73,
          'financial_plans_id' => $idPlan49,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo49 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 2182062995.78,
          'financial_plans_id' => $idPlan64,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo64 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 8173167445,
          'financial_plans_id' => $idPlan50,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo50 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 5546644239.08,
          'financial_plans_id' => $idPlan51,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo51 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 525872847,
          'financial_plans_id' => $idPlan52,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo52 = DB::getPdo()->lastInsertId();
           


         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 466984963.38,
          'financial_plans_id' => $idPlan53,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo53 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 525447.25,
          'financial_plans_id' => $idPlan54,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo54 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 441233883.46,
          'financial_plans_id' => $idPlan55,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo55 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 361435691.27,
          'financial_plans_id' => $idPlan56,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo56 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 665664651.62,
          'financial_plans_id' => $idPlan57,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo57 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 17907363256.57,
          'financial_plans_id' => $idPlan58,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo58 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 123737677.89,
          'financial_plans_id' => $idPlan59,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo59 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 2943186200.68,
          'financial_plans_id' => $idPlan60,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo60 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 2586940397.51,
          'financial_plans_id' => $idPlan61,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo61 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 2184383414.5,
          'financial_plans_id' => $idPlan62,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo62 = DB::getPdo()->lastInsertId();
          
          
         DB::table('cost_sources')->insert([
          'father_id' => 2,
          'code' => '2.1.1',
          'name' => 'GASTOS DE PERSONAL',
          'description' => 'GASTOS DE PERSONAL',
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'group_id' => 7,
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
          'group_id' => 7,
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
          'group_id' => 7,
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
          'group_id' => 7,
          ]);
          $idFuenteGasto4 = DB::getPdo()->lastInsertId();
          
        DB::table('cost_sources')->insert([
          'father_id' => 2,
          'code' => '2.1.5',
          'name' => 'OTRAS',
          'description' => 'OTRAS',
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'group_id' => 7,
          ]);
          $idFuenteGasto5 = DB::getPdo()->lastInsertId();

         DB::table('cost_sources')->insert([
          'father_id' => 19,
          'code' => '2.1.3.3.2',
          'name' => 'Conciliaciones',
          'description' => 'Conciliaciones',
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'group_id' => 7,
          ]);
          $idFuenteGasto6 = DB::getPdo()->lastInsertId();
          
           
         DB::table('cost_sources')->insert([
          'father_id' => 29,
          'code' => '2.1.4.3.1',
          'name' => 'Cuota de fiscalización y auditaje',
          'description' => 'Cuota de fiscalización y auditaje',
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'group_id' => 7,
          ]);
          $idFuenteGasto7 = DB::getPdo()->lastInsertId();
          
           
         DB::table('cost_sources')->insert([
          'father_id' => 31,
          'code' => '2.1.4.4.1',
          'name' => 'Multas',
          'description' => 'Multas',
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'group_id' => 7,
          ]);
          $idFuenteGasto8 = DB::getPdo()->lastInsertId();
          
           
         DB::table('cost_sources')->insert([
          'father_id' => 36,
          'code' => '2.2.1.1',
          'name' => 'Servicios de la deuda pública externa',
          'description' => 'Servicios de la deuda pública externa',
          'functioning' => FALSE,
          'compensation' => FALSE,
          'debt_service' => TRUE,
          'group_id' => 7,
          ]);
          $idFuenteGasto9 = DB::getPdo()->lastInsertId();
          
        DB::table('cost_sources')->insert([
          'father_id' => 19,
          'code' => '2.1.3.3.1',
          'name' => 'Comisiones y otros gastos',
          'description' => 'Comisiones y otros gastos',
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'group_id' => 7,
          ]);
          $idFuenteGasto10 = DB::getPdo()->lastInsertId();

         DB::table('financial_costs')->insert([
          'year' => 2,
          'value_bugeted' => 1916886000,
          'value_comitted' => 1124916370.14,
          'value_paid' => 1124916370.14,
          'own' => TRUE,
          'nation' => FALSE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto1,
          'p_a_i_id' => $idpai1,
          'group_id' => 7,
          ]);
          $idGasto1 = DB::getPdo()->lastInsertId();

         DB::table('financial_costs')->insert([
          'year' => 2,
          'value_bugeted' => 5000000,
          'value_comitted' => 0,
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
          'group_id' => 7,
          ]);
          $idGasto2 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_costs')->insert([
          'year' => 2,
          'value_bugeted' => 1784798785.46,
          'value_comitted' => 1375177721.29,
          'value_paid' => 1313305821.29,
          'own' => TRUE,
          'nation' => FALSE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto3,
          'p_a_i_id' => $idpai1,
          'group_id' => 7,
          ]);
          $idGasto3 = DB::getPdo()->lastInsertId();

         DB::table('financial_costs')->insert([
          'year' => 2,
          'value_bugeted' => 176991203.24,
          'value_comitted' => 167438046.14,
          'value_paid' => 167392446.14,
          'own' => TRUE,
          'nation' => FALSE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto8,
          'p_a_i_id' => $idpai1,
          'group_id' => 7,
          ]);
          $idGasto4 = DB::getPdo()->lastInsertId();

         DB::table('financial_costs')->insert([
          'year' => 2,
          'value_bugeted' => 23245209,
          'value_comitted' => 23245209,
          'value_paid' => 23245209,
          'own' => TRUE,
          'nation' => FALSE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto7,
          'p_a_i_id' => $idpai1,
          'group_id' => 7,
          ]);
          $idGasto5 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_costs')->insert([
          'year' => 2,
          'value_bugeted' => 2357619707.92,
          'value_comitted' => 2338964661.67,
          'value_paid' => 2338964661.67,
          'own' => TRUE,
          'nation' => FALSE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => FALSE,
          'compensation' => TRUE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto4,
          'p_a_i_id' => $idpai1,
          'group_id' => 7,
          ]);
          $idGasto6 = DB::getPdo()->lastInsertId();
          
           
         DB::table('financial_costs')->insert([
          'year' => 2,
          'value_bugeted' => 16789080,
          'value_comitted' => 16789080,
          'value_paid' => 16789080,
          'own' => TRUE,
          'nation' => FALSE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto10,
          'p_a_i_id' => $idpai1,
          'group_id' => 7,
          ]);
          $idGasto7 = DB::getPdo()->lastInsertId();

         DB::table('financial_costs')->insert([
          'year' => 2,
          'value_bugeted' => 49754791,
          'value_comitted' => 27546533,
          'value_paid' => 27546533,
          'own' => TRUE,
          'nation' => FALSE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto6,
          'p_a_i_id' => $idpai1,
          'group_id' => 7,
          ]);
          $idGasto8 = DB::getPdo()->lastInsertId();

         DB::table('financial_costs')->insert([
          'year' => 2,
          'value_bugeted' => 350000000,
          'value_comitted' => 277760164,
          'value_paid' => 277760164,
          'own' => TRUE,
          'nation' => FALSE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => FALSE,
          'compensation' => FALSE,
          'debt_service' => TRUE,
          'cost_sources_id' => $idFuenteGasto9,
          'p_a_i_id' => $idpai1,
          'group_id' => 7,
          ]);
          $idGasto9 = DB::getPdo()->lastInsertId();
          
           
         DB::table('financial_costs')->insert([
          'year' => 2,
          'value_bugeted' => 1913548000,
          'value_comitted' => 1913548000,
          'value_paid' => 1913548000,
          'own' => FALSE,
          'nation' => TRUE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto1,
          'p_a_i_id' => $idpai1,
          'group_id' => 7,
          ]);
          $idGasto10 = DB::getPdo()->lastInsertId();

         DB::table('financial_costs')->insert([
          'year' => 2,
          'value_bugeted' => 81981000,
          'value_comitted' => 81981000,
          'value_paid' => 81981000,
          'own' => FALSE,
          'nation' => TRUE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto3,
          'p_a_i_id' => $idpai1,
          'group_id' => 7,
          ]);
          $idGasto11 = DB::getPdo()->lastInsertId();

         DB::table('financial_costs')->insert([
          'year' => 2,
          'value_bugeted' => 4043000,
          'value_comitted' => 3498338.78,
          'value_paid' => 3498338.78,
          'own' => FALSE,
          'nation' => TRUE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto8,
          'p_a_i_id' => $idpai1,
          'group_id' => 7,
          ]);
          $idGasto12 = DB::getPdo()->lastInsertId();

         DB::table('financial_costs')->insert([
          'year' => 2,
          'value_bugeted' => 12357000,
          'value_comitted' => 12357000,
          'value_paid' => 12357000,
          'own' => FALSE,
          'nation' => TRUE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto7,
          'p_a_i_id' => $idpai1,
          'group_id' => 7,
          ]);
          $idGasto13 = DB::getPdo()->lastInsertId();
          
         DB::table('financial_costs')->insert([
          'year' => 3,
          'value_bugeted' => 1604305969.64,
          'value_comitted' => 1430241646.22,
          'value_paid' => 1430241646.22,
          'own' => TRUE,
          'nation' => FALSE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto1,
          'p_a_i_id' => $idpai1,
          'group_id' => 7,
          ]);
          $idGasto14 = DB::getPdo()->lastInsertId();

         DB::table('financial_costs')->insert([
          'year' => 3,
          'value_bugeted' => 213084375.05,
          'value_comitted' => 208779557.41,
          'value_paid' => 208779557.41,
          'own' => TRUE,
          'nation' => FALSE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto8,
          'p_a_i_id' => $idpai1,
          'group_id' => 7,
          ]);
          $idGasto15 = DB::getPdo()->lastInsertId();

         DB::table('financial_costs')->insert([
          'year' => 3,
          'value_bugeted' => 35009908,
          'value_comitted' => 35009908,
          'value_paid' => 35009908,
          'own' => TRUE,
          'nation' => FALSE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto7,
          'p_a_i_id' => $idpai1,
          'group_id' => 7,
          ]);
          $idGasto16 = DB::getPdo()->lastInsertId();

         DB::table('financial_costs')->insert([
          'year' => 3,
          'value_bugeted' => 801584,
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
          'group_id' => 7,
          ]);
          $idGasto17 = DB::getPdo()->lastInsertId();
          
           
         DB::table('financial_costs')->insert([
          'year' => 3,
          'value_bugeted' => 2010941000,
          'value_comitted' => 2010941000,
          'value_paid' => 2010941000,
          'own' => FALSE,
          'nation' => TRUE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto1,
          'p_a_i_id' => $idpai1,
          'group_id' => 7,
          ]);
          $idGasto18 = DB::getPdo()->lastInsertId();

         DB::table('financial_costs')->insert([
          'year' => 3,
          'value_bugeted' => 4164000,
          'value_comitted' => 4164000,
          'value_paid' => 4164000,
          'own' => FALSE,
          'nation' => TRUE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto8,
          'p_a_i_id' => $idpai1,
          'group_id' => 7,
          ]);
          $idGasto19 = DB::getPdo()->lastInsertId();
          
         DB::table('financial_costs')->insert([
          'year' => 3,
          'value_bugeted' => 12728000,
          'value_comitted' => 12728000,
          'value_paid' => 12728000,
          'own' => FALSE,
          'nation' => TRUE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto7,
          'p_a_i_id' => $idpai1,
          'group_id' => 7,
          ]);
          $idGasto20 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_costs')->insert([
          'year' => 4,
          'value_bugeted' => 1694327985.97,
          'value_comitted' => 1406958991,
          'value_paid' => 1398819724,
          'own' => TRUE,
          'nation' => FALSE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto1,
          'p_a_i_id' => $idpai1,
          'group_id' => 7,
          ]);
          $idGasto21 = DB::getPdo()->lastInsertId();

         DB::table('financial_costs')->insert([
          'year' => 4,
          'value_bugeted' => 1883787009.08,
          'value_comitted' => 1678881449.18,
          'value_paid' => 1599644813.28,
          'own' => TRUE,
          'nation' => FALSE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto3,
          'p_a_i_id' => $idpai1,
          'group_id' => 7,
          ]);
          $idGasto22 = DB::getPdo()->lastInsertId();
          
           
         DB::table('financial_costs')->insert([
          'year' => 4,
          'value_bugeted' => 200000000,
          'value_comitted' => 188998936.55,
          'value_paid' => 188998936.55,
          'own' => TRUE,
          'nation' => FALSE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto8,
          'p_a_i_id' => $idpai1,
          'group_id' => 7,
          ]);
          $idGasto23 = DB::getPdo()->lastInsertId();

         DB::table('financial_costs')->insert([
          'year' => 4,
          'value_bugeted' => 25211530,
          'value_comitted' => 23366660,
          'value_paid' => 23366660,
          'own' => TRUE,
          'nation' => FALSE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto7,
          'p_a_i_id' => $idpai1,
          'group_id' => 7,
          ]);
          $idGasto24 = DB::getPdo()->lastInsertId();

         DB::table('financial_costs')->insert([
          'year' => 4,
          'value_bugeted' => 2969419350.18,
          'value_comitted' => 2395779447.14,
          'value_paid' => 2395779447.14,
          'own' => TRUE,
          'nation' => FALSE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto5,
          'p_a_i_id' => $idpai1,
          'group_id' => 7,
          ]);
          $idGasto25 = DB::getPdo()->lastInsertId();
          
         DB::table('financial_costs')->insert([
          'year' => 4,
          'value_bugeted' => 2102200053,
          'value_comitted' => 2102200053,
          'value_paid' => 2102200053,
          'own' => FALSE,
          'nation' => TRUE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto1,
          'p_a_i_id' => $idpai1,
          'group_id' => 7,
          ]);
          $idGasto26 = DB::getPdo()->lastInsertId();

         DB::table('financial_costs')->insert([
          'year' => 4,
          'value_bugeted' => 81981000,
          'value_comitted' => 81981000,
          'value_paid' => 77881949.5,
          'own' => FALSE,
          'nation' => TRUE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto3,
          'p_a_i_id' => $idpai1,
          'group_id' => 7,
          ]);
          $idGasto27 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_costs')->insert([
          'year' => 4,
          'value_bugeted' => 4301412,
          'value_comitted' => 4301412,
          'value_paid' => 4301412,
          'own' => FALSE,
          'nation' => TRUE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto8,
          'p_a_i_id' => $idpai1,
          'group_id' => 7,
          ]);
          $idGasto28 = DB::getPdo()->lastInsertId();
          
         DB::table('financial_costs')->insert([
          'year' => 4,
          'value_bugeted' => 13109840,
          'value_comitted' => 13109840,
          'value_paid' => 13109840,
          'own' => FALSE,
          'nation' => TRUE,
          'royalties' => FALSE,
          'funds' => FALSE,
          'functioning' => TRUE,
          'compensation' => FALSE,
          'debt_service' => FALSE,
          'cost_sources_id' => $idFuenteGasto7,
          'p_a_i_id' => $idpai1,
          'group_id' => 7,
          ]);
          $idGasto29 = DB::getPdo()->lastInsertId();
          
                                  DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity3,
                        'source_id' =>$idPlan1,
                        'value' => 214520000,
                        'goal' => 0,
                        'evidence_balance' => 214520000,
                        'age' => 1,
                        ]);
                        $idactivitySource1 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity8,
                        'source_id' =>$idPlan1,
                        'value' => 1545907539.18,
                        'goal' => 0,
                        'evidence_balance' => 1545907539.18,
                        'age' => 1,
                        ]);
                        $idactivitySource2 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity9,
                        'source_id' =>$idPlan1,
                        'value' => 150000000,
                        'goal' => 0,
                        'evidence_balance' => 150000000,
                        'age' => 1,
                        ]);
                        $idactivitySource3 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity18,
                        'source_id' =>$idPlan1,
                        'value' => 7609328046.82,
                        'goal' => 0,
                        'evidence_balance' => 7609328046.82,
                        'age' => 1,
                        ]);
                        $idactivitySource4 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity23,
                        'source_id' =>$idPlan1,
                        'value' => 2135026318,
                        'goal' => 0,
                        'evidence_balance' => 2135026318,
                        'age' => 1,
                        ]);
                        $idactivitySource5 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity27,
                        'source_id' =>$idPlan2,
                        'value' => 1932965865.84,
                        'goal' => 0,
                        'evidence_balance' => 1932965865.84,
                        'age' => 1,
                        ]);
                        $idactivitySource6 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity32,
                        'source_id' =>$idPlan2,
                        'value' => 458000000,
                        'goal' => 0,
                        'evidence_balance' => 458000000,
                        'age' => 1,
                        ]);
                        $idactivitySource7 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity35,
                        'source_id' =>$idPlan2,
                        'value' => 133000000,
                        'goal' => 0,
                        'evidence_balance' => 133000000,
                        'age' => 1,
                        ]);
                        $idactivitySource8 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity41,
                        'source_id' =>$idPlan2,
                        'value' => 786000000,
                        'goal' => 0,
                        'evidence_balance' => 786000000,
                        'age' => 1,
                        ]);
                        $idactivitySource9 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity42,
                        'source_id' =>$idPlan2,
                        'value' => 1429401568.26,
                        'goal' => 0,
                        'evidence_balance' => 1429401568.26,
                        'age' => 1,
                        ]);
                        $idactivitySource10 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity52,
                        'source_id' =>$idPlan3,
                        'value' => 2172494054.26,
                        'goal' => 0,
                        'evidence_balance' => 2172494054.26,
                        'age' => 1,
                        ]);
                        $idactivitySource11 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity55,
                        'source_id' =>$idPlan5,
                        'value' => 90000000,
                        'goal' => 0,
                        'evidence_balance' => 90000000,
                        'age' => 1,
                        ]);
                        $idactivitySource12 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity60,
                        'source_id' =>$idPlan5,
                        'value' => 426521784.0095,
                        'goal' => 0,
                        'evidence_balance' => 426521784.0095,
                        'age' => 1,
                        ]);
                        $idactivitySource13 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity63,
                        'source_id' =>$idPlan14,
                        'value' => 470000000,
                        'goal' => 0,
                        'evidence_balance' => 470000000,
                        'age' => 1,
                        ]);
                        $idactivitySource14 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity66,
                        'source_id' =>$idPlan14,
                        'value' => 610001580.2473,
                        'goal' => 0,
                        'evidence_balance' => 610001580.2473,
                        'age' => 1,
                        ]);
                        $idactivitySource15 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity70,
                        'source_id' =>$idPlan13,
                        'value' => 1362866226.7483,
                        'goal' => 0,
                        'evidence_balance' => 1362866226.7483,
                        'age' => 1,
                        ]);
                        $idactivitySource16 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity71,
                        'source_id' =>$idPlan11,
                        'value' => 1725735661.6033,
                        'goal' => 0,
                        'evidence_balance' => 1725735661.6033,
                        'age' => 1,
                        ]);
                        $idactivitySource17 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity72,
                        'source_id' =>$idPlan4,
                        'value' => 479925823.0529,
                        'goal' => 0,
                        'evidence_balance' => 479925823.0529,
                        'age' => 1,
                        ]);
                        $idactivitySource18 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity73,
                        'source_id' =>$idPlan10,
                        'value' => 257840145,
                        'goal' => 0,
                        'evidence_balance' => 257840145,
                        'age' => 1,
                        ]);
                        $idactivitySource19 = DB::getPdo()->lastInsertId();
                        
                        
                        
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity23,
                          'source_id' =>$idPlan2,
                          'value' => 300632565.9,
                          'goal' => 0,
                          'evidence_balance' => 300632565.9,
                          'age' => 1,
                          ]);
                          $idactivitySource20 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity42,
                          'source_id' =>$idPlan3,
                          'value' => 320371105.74,
                          'goal' => 0,
                          'evidence_balance' => 320371105.74,
                          'age' => 1,
                          ]);
                          $idactivitySource21 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity52,
                          'source_id' =>$idPlan5,
                          'value' => 1806608580.49,
                          'goal' => 0,
                          'evidence_balance' => 1806608580.49,
                          'age' => 1,
                          ]);
                          $idactivitySource22 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity60,
                          'source_id' =>$idPlan14,
                          'value' => 1238523895.9905,
                          'goal' => 0,
                          'evidence_balance' => 1238523895.9905,
                          'age' => 1,
                          ]);
                          $idactivitySource23 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity66,
                          'source_id' =>$idPlan13,
                          'value' => 154998419.7527,
                          'goal' => 0,
                          'evidence_balance' => 154998419.7527,
                          'age' => 1,
                          ]);
                          $idactivitySource24 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity70,
                          'source_id' =>$idPlan11,
                          'value' => 3416276.16170025,
                          'goal' => 0,
                          'evidence_balance' => 3416276.16170025,
                          'age' => 1,
                          ]);
                          $idactivitySource25 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity71,
                          'source_id' =>$idPlan12,
                          'value' => 1213308725.4496,
                          'goal' => 0,
                          'evidence_balance' => 1213308725.4496,
                          'age' => 1,
                          ]);
                          $idactivitySource26 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity72,
                          'source_id' =>$idPlan7,
                          'value' => 867122632.8,
                          'goal' => 0,
                          'evidence_balance' => 867122632.8,
                          'age' => 1,
                          ]);
                          $idactivitySource27 = DB::getPdo()->lastInsertId();
                          
                          
                          
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity71,
                            'source_id' =>$idPlan4,
                            'value' => 406574176.9471,
                            'goal' => 0,
                            'evidence_balance' => 406574176.9471,
                            'age' => 1,
                            ]);
                            $idactivitySource28 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity72,
                            'source_id' =>$idPlan9,
                            'value' => 707960043.072,
                            'goal' => 0,
                            'evidence_balance' => 707960043.072,
                            'age' => 1,
                            ]);
                            $idactivitySource29 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity72,
                              'source_id' =>$idPlan10,
                              'value' => 164988689.6651,
                              'goal' => 0,
                              'evidence_balance' => 164988689.6651,
                              'age' => 1,
                              ]);
                              $idactivitySource30 = DB::getPdo()->lastInsertId();
                              
                              
                              
                                                                                                          

                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia3,
                              'activity_source_id' =>$idactivitySource1,
                              'value' => 121377748,
                              ]);
                              $idevidenceFinancial1 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia7,
                              'activity_source_id' =>$idactivitySource2,
                              'value' => 1356984771.88,
                              ]);
                              $idevidenceFinancial2 = DB::getPdo()->lastInsertId();

                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia8,
                              'activity_source_id' =>$idactivitySource3,
                              'value' => 150000000,
                              ]);
                              $idevidenceFinancial3 = DB::getPdo()->lastInsertId();

                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia16,
                              'activity_source_id' =>$idactivitySource4,
                              'value' => 2654682782.66,
                              ]);
                              $idevidenceFinancial4 = DB::getPdo()->lastInsertId();



                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia21,
                                'activity_source_id' =>$idactivitySource5,
                                'value' => 723067132,
                                ]);
                                $idevidenceFinancial5 = DB::getPdo()->lastInsertId();
                                


                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia23,
                              'activity_source_id' =>$idactivitySource6,
                              'value' => 1528211311,
                              ]);
                              $idevidenceFinancial6 = DB::getPdo()->lastInsertId();

                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia26,
                              'activity_source_id' =>$idactivitySource7,
                              'value' => 429164595,
                              ]);
                              $idevidenceFinancial7 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia29,
                              'activity_source_id' =>$idactivitySource8,
                              'value' => 64449596,
                              ]);
                              $idevidenceFinancial8 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia35,
                              'activity_source_id' =>$idactivitySource9,
                              'value' => 777493696.5,
                              ]);
                              $idevidenceFinancial9 = DB::getPdo()->lastInsertId();
                              

                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia36,
                                'activity_source_id' =>$idactivitySource10,
                                'value' => 469623456,
                                ]);
                                $idevidenceFinancial10 = DB::getPdo()->lastInsertId();


                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia46,
                              'activity_source_id' =>$idactivitySource11,
                              'value' => 2172494054.26,
                              ]);
                              $idevidenceFinancial11 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia48,
                              'activity_source_id' =>$idactivitySource12,
                              'value' => 89136068,
                              ]);
                              $idevidenceFinancial12 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia52,
                              'activity_source_id' =>$idactivitySource13,
                              'value' => 426521784.0095,
                              ]);
                              $idevidenceFinancial13 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia55,
                              'activity_source_id' =>$idactivitySource14,
                              'value' => 432439391,
                              ]);
                              $idevidenceFinancial14 = DB::getPdo()->lastInsertId();
                              


                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia58,
                                'activity_source_id' =>$idactivitySource15,
                                'value' => 359312766,
                                ]);
                                $idevidenceFinancial15 = DB::getPdo()->lastInsertId();


                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia62,
                                'activity_source_id' =>$idactivitySource16,
                                'value' => 1045605386.91,
                                ]);
                                $idevidenceFinancial16 = DB::getPdo()->lastInsertId();

                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia63,
                              'activity_source_id' =>$idactivitySource17,
                              'value' => 1725735661.6033,
                              ]);
                              $idevidenceFinancial17 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia64,
                              'activity_source_id' =>$idactivitySource18,
                              'value' => 479925823.0529,
                              ]);
                              $idevidenceFinancial18 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia65,
                              'activity_source_id' =>$idactivitySource19,
                              'value' => 164665305,
                              ]);
                              $idevidenceFinancial19 = DB::getPdo()->lastInsertId();


                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia46,
                                'activity_source_id' =>$idactivitySource22,
                                'value' => 1782241638.74,
                                ]);
                                $idevidenceFinancial22 = DB::getPdo()->lastInsertId();

                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia52,
                                'activity_source_id' =>$idactivitySource23,
                                'value' => 1152591325.6005,
                                ]);
                                $idevidenceFinancial23 = DB::getPdo()->lastInsertId();

                                
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia63,
                                  'activity_source_id' =>$idactivitySource26,
                                  'value' => 973716868.4467,
                                  ]);
                                  $idevidenceFinancial26 = DB::getPdo()->lastInsertId();
                                  

                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia64,
                                'activity_source_id' =>$idactivitySource27,
                                'value' => 867122632.8,
                                ]);
                                $idevidenceFinancial27 = DB::getPdo()->lastInsertId();


                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia64,
                                    'activity_source_id' =>$idactivitySource29,
                                    'value' => 247805874.5571,
                                    ]);
                                    $idevidenceFinancial29 = DB::getPdo()->lastInsertId();


                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity3,
                                      'source_id' =>$idPlan19,
                                      'value' => 162031200,
                                      'goal' => 0,
                                      'evidence_balance' => 162031200,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource31 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity8,
                                      'source_id' =>$idPlan19,
                                      'value' => 451574689,
                                      'goal' => 0,
                                      'evidence_balance' => 451574689,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource32 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity9,
                                      'source_id' =>$idPlan19,
                                      'value' => 206000000,
                                      'goal' => 0,
                                      'evidence_balance' => 206000000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource33 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity18,
                                      'source_id' =>$idPlan19,
                                      'value' => 5924378875.04,
                                      'goal' => 0,
                                      'evidence_balance' => 5924378875.04,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource34 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity23,
                                      'source_id' =>$idPlan16,
                                      'value' => 5214060614.12,
                                      'goal' => 0,
                                      'evidence_balance' => 5214060614.12,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource35 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity27,
                                      'source_id' =>$idPlan29,
                                      'value' => 202312983.71,
                                      'goal' => 0,
                                      'evidence_balance' => 202312983.71,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource36 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity32,
                                      'source_id' =>$idPlan29,
                                      'value' => 833832900,
                                      'goal' => 0,
                                      'evidence_balance' => 833832900,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource37 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity35,
                                      'source_id' =>$idPlan29,
                                      'value' => 238054000,
                                      'goal' => 0,
                                      'evidence_balance' => 238054000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource38 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity41,
                                      'source_id' =>$idPlan29,
                                      'value' => 314575896.24,
                                      'goal' => 0,
                                      'evidence_balance' => 314575896.24,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource39 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity42,
                                      'source_id' =>$idPlan27,
                                      'value' => 3439960139.73,
                                      'goal' => 0,
                                      'evidence_balance' => 3439960139.73,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource40 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity52,
                                      'source_id' =>$idPlan27,
                                      'value' => 4440321179.89,
                                      'goal' => 0,
                                      'evidence_balance' => 4440321179.89,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource41 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity55,
                                      'source_id' =>$idPlan27,
                                      'value' => 153802757.200998,
                                      'goal' => 0,
                                      'evidence_balance' => 153802757.200998,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource42 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity60,
                                      'source_id' =>$idPlan31,
                                      'value' => 1023340000,
                                      'goal' => 0,
                                      'evidence_balance' => 1023340000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource43 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity63,
                                      'source_id' =>$idPlan31,
                                      'value' => 412790799.840998,
                                      'goal' => 0,
                                      'evidence_balance' => 412790799.840998,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource44 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity66,
                                      'source_id' =>$idPlan28,
                                      'value' => 1144811498.56,
                                      'goal' => 0,
                                      'evidence_balance' => 1144811498.56,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource45 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity70,
                                      'source_id' =>$idPlan28,
                                      'value' => 421662681.700998,
                                      'goal' => 0,
                                      'evidence_balance' => 421662681.700998,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource46 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity71,
                                      'source_id' =>$idPlan20,
                                      'value' => 715793801.820998,
                                      'goal' => 0,
                                      'evidence_balance' => 715793801.820998,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource47 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity72,
                                      'source_id' =>$idPlan18,
                                      'value' => 649035319.95,
                                      'goal' => 0,
                                      'evidence_balance' => 649035319.95,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource48 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity73,
                                      'source_id' =>$idPlan18,
                                      'value' => 95091507,
                                      'goal' => 0,
                                      'evidence_balance' => 95091507,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource49 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                      DB::table('activity_sources')->insert([
                                        'activity_id' => $idactivity18,
                                        'source_id' =>$idPlan16,
                                        'value' => 6577524543.31,
                                        'goal' => 0,
                                        'evidence_balance' => 6577524543.31,
                                        'age' => 2,
                                        ]);
                                        $idactivitySource50 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('activity_sources')->insert([
                                        'activity_id' => $idactivity23,
                                        'source_id' =>$idPlan29,
                                        'value' => 5394289265.13,
                                        'goal' => 0,
                                        'evidence_balance' => 5394289265.13,
                                        'age' => 2,
                                        ]);
                                        $idactivitySource51 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('activity_sources')->insert([
                                        'activity_id' => $idactivity41,
                                        'source_id' =>$idPlan27,
                                        'value' => 355972103.76,
                                        'goal' => 0,
                                        'evidence_balance' => 355972103.76,
                                        'age' => 2,
                                        ]);
                                        $idactivitySource52 = DB::getPdo()->lastInsertId();
                                        
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity55,
                                          'source_id' =>$idPlan31,
                                          'value' => 291158200.159002,
                                          'goal' => 0,
                                          'evidence_balance' => 291158200.159002,
                                          'age' => 2,
                                          ]);
                                          $idactivitySource53 = DB::getPdo()->lastInsertId();
                                        
                                        
                                      DB::table('activity_sources')->insert([
                                        'activity_id' => $idactivity63,
                                        'source_id' =>$idPlan28,
                                        'value' => 535069200.159002,
                                        'goal' => 0,
                                        'evidence_balance' => 535069200.159002,
                                        'age' => 2,
                                        ]);
                                        $idactivitySource54 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('activity_sources')->insert([
                                        'activity_id' => $idactivity70,
                                        'source_id' =>$idPlan21,
                                        'value' => 1869300000,
                                        'goal' => 0,
                                        'evidence_balance' => 1869300000,
                                        'age' => 2,
                                        ]);
                                        $idactivitySource55 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('activity_sources')->insert([
                                        'activity_id' => $idactivity71,
                                        'source_id' =>$idPlan18,
                                        'value' => 2426974573.179,
                                        'goal' => 0,
                                        'evidence_balance' => 2426974573.179,
                                        'age' => 2,
                                        ]);
                                        $idactivitySource56 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity70,
                                          'source_id' =>$idPlan20,
                                          'value' => 371388579.419002,
                                          'goal' => 0,
                                          'evidence_balance' => 371388579.419002,
                                          'age' => 2,
                                          ]);
                                          $idactivitySource57 = DB::getPdo()->lastInsertId();

                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia67,
                                            'activity_source_id' =>$idactivitySource31,
                                            'value' => 45461042,
                                            ]);
                                            $idevidenceFinancial31 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia70,
                                            'activity_source_id' =>$idactivitySource32,
                                            'value' => 385921222,
                                            ]);
                                            $idevidenceFinancial32 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia71,
                                            'activity_source_id' =>$idactivitySource33,
                                            'value' => 17999942,
                                            ]);
                                            $idevidenceFinancial33 = DB::getPdo()->lastInsertId();


                                           DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia80,
                                              'activity_source_id' =>$idactivitySource34,
                                              'value' => 3216879654.2,
                                              ]);
                                              $idevidenceFinancial34 = DB::getPdo()->lastInsertId();
                                              
                                              DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia85,
                                                'activity_source_id' =>$idactivitySource35,
                                                'value' => 888063870,
                                                ]);
                                                $idevidenceFinancial35 = DB::getPdo()->lastInsertId();
                                                

                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia86,
                                            'activity_source_id' =>$idactivitySource36,
                                            'value' => 113825714.16,
                                            ]);
                                            $idevidenceFinancial36 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia91,
                                            'activity_source_id' =>$idactivitySource37,
                                            'value' => 186401775,
                                            ]);
                                            $idevidenceFinancial37 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia94,
                                            'activity_source_id' =>$idactivitySource38,
                                            'value' => 42466906,
                                            ]);
                                            $idevidenceFinancial38 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia100,
                                            'activity_source_id' =>$idactivitySource39,
                                            'value' => 314575896.24,
                                            ]);
                                            $idevidenceFinancial39 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia101,
                                            'activity_source_id' =>$idactivitySource40,
                                            'value' => 469087645.9,
                                            ]);
                                            $idevidenceFinancial40 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia111,
                                            'activity_source_id' =>$idactivitySource41,
                                            'value' => 3647626952.16,
                                            ]);
                                            $idevidenceFinancial41 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia114,
                                            'activity_source_id' =>$idactivitySource42,
                                            'value' => 153802757.200998,
                                            ]);
                                            $idevidenceFinancial42 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia119,
                                            'activity_source_id' =>$idactivitySource43,
                                            'value' => 685288157,
                                            ]);
                                            $idevidenceFinancial43 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia122,
                                            'activity_source_id' =>$idactivitySource44,
                                            'value' => 412790799.840998,
                                            ]);
                                            $idevidenceFinancial44 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia125,
                                            'activity_source_id' =>$idactivitySource45,
                                            'value' => 1063397024,
                                            ]);
                                            $idevidenceFinancial45 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia129,
                                            'activity_source_id' =>$idactivitySource46,
                                            'value' => 421662681.700998,
                                            ]);
                                            $idevidenceFinancial46 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia130,
                                            'activity_source_id' =>$idactivitySource47,
                                            'value' => 715793801.820998,
                                            ]);
                                            $idevidenceFinancial47 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia131,
                                            'activity_source_id' =>$idactivitySource48,
                                            'value' => 631189707.21,
                                            ]);
                                            $idevidenceFinancial48 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia132,
                                            'activity_source_id' =>$idactivitySource49,
                                            'value' => 1854999,
                                            ]);
                                            $idevidenceFinancial49 = DB::getPdo()->lastInsertId();



                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia100,
                                              'activity_source_id' =>$idactivitySource52,
                                              'value' => 114343998.76,
                                              ]);
                                              $idevidenceFinancial52 = DB::getPdo()->lastInsertId();

                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia114,
                                              'activity_source_id' =>$idactivitySource53,
                                              'value' => 45712541.7990017,
                                              ]);
                                              $idevidenceFinancial53 = DB::getPdo()->lastInsertId();

                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia122,
                                              'activity_source_id' =>$idactivitySource54,
                                              'value' => 173799026.709002,
                                              ]);
                                              $idevidenceFinancial54 = DB::getPdo()->lastInsertId();

                                            DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia129,
                                                'activity_source_id' =>$idactivitySource55,
                                                'value' => 1339537311.419,
                                                ]);
                                                $idevidenceFinancial55 = DB::getPdo()->lastInsertId();

                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia130,
                                              'activity_source_id' =>$idactivitySource56,
                                              'value' => 1773817081.039,
                                              ]);
                                              $idevidenceFinancial56 = DB::getPdo()->lastInsertId();



                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity3,
                                                  'source_id' =>$idPlan32,
                                                  'value' => 100000000,
                                                  'goal' => 0,
                                                  'evidence_balance' => 100000000,
                                                  'age' => 3,
                                                  ]);
                                                  $idactivitySource58 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity8,
                                                  'source_id' =>$idPlan32,
                                                  'value' => 1108911200,
                                                  'goal' => 0,
                                                  'evidence_balance' => 1108911200,
                                                  'age' => 3,
                                                  ]);
                                                  $idactivitySource59 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity9,
                                                  'source_id' =>$idPlan32,
                                                  'value' => 339600058,
                                                  'goal' => 0,
                                                  'evidence_balance' => 339600058,
                                                  'age' => 3,
                                                  ]);
                                                  $idactivitySource60 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity18,
                                                  'source_id' =>$idPlan32,
                                                  'value' => 11127488742,
                                                  'goal' => 0,
                                                  'evidence_balance' => 11127488742,
                                                  'age' => 3,
                                                  ]);
                                                  $idactivitySource61 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity23,
                                                  'source_id' =>$idPlan43,
                                                  'value' => 12446070084,
                                                  'goal' => 0,
                                                  'evidence_balance' => 12446070084,
                                                  'age' => 3,
                                                  ]);
                                                  $idactivitySource62 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity32,
                                                  'source_id' =>$idPlan43,
                                                  'value' => 1398275952,
                                                  'goal' => 0,
                                                  'evidence_balance' => 1398275952,
                                                  'age' => 3,
                                                  ]);
                                                  $idactivitySource64 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity35,
                                                  'source_id' =>$idPlan43,
                                                  'value' => 445904052,
                                                  'goal' => 0,
                                                  'evidence_balance' => 445904052,
                                                  'age' => 3,
                                                  ]);
                                                  $idactivitySource65 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity41,
                                                  'source_id' =>$idPlan43,
                                                  'value' => 1890142674,
                                                  'goal' => 0,
                                                  'evidence_balance' => 1890142674,
                                                  'age' => 3,
                                                  ]);
                                                  $idactivitySource66 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity42,
                                                  'source_id' =>$idPlan43,
                                                  'value' => 2967872663.6,
                                                  'goal' => 0,
                                                  'evidence_balance' => 2967872663.6,
                                                  'age' => 3,
                                                  ]);
                                                  $idactivitySource67 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity52,
                                                  'source_id' =>$idPlan33,
                                                  'value' => 361089416.599998,
                                                  'goal' => 0,
                                                  'evidence_balance' => 361089416.599998,
                                                  'age' => 3,
                                                  ]);
                                                  $idactivitySource68 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity60,
                                                  'source_id' =>$idPlan36,
                                                  'value' => 668107652,
                                                  'goal' => 0,
                                                  'evidence_balance' => 668107652,
                                                  'age' => 3,
                                                  ]);
                                                  $idactivitySource70 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity66,
                                                  'source_id' =>$idPlan36,
                                                  'value' => 80152131.5999985,
                                                  'goal' => 0,
                                                  'evidence_balance' => 80152131.5999985,
                                                  'age' => 3,
                                                  ]);
                                                  $idactivitySource71 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity70,
                                                  'source_id' =>$idPlan35,
                                                  'value' => 1956948650,
                                                  'goal' => 0,
                                                  'evidence_balance' => 1956948650,
                                                  'age' => 3,
                                                  ]);
                                                  $idactivitySource72 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity71,
                                                  'source_id' =>$idPlan35,
                                                  'value' => 1004087648.6,
                                                  'goal' => 0,
                                                  'evidence_balance' => 1004087648.6,
                                                  'age' => 3,
                                                  ]);
                                                  $idactivitySource73 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity72,
                                                  'source_id' =>$idPlan45,
                                                  'value' => 1367621482,
                                                  'goal' => 0,
                                                  'evidence_balance' => 1367621482,
                                                  'age' => 3,
                                                  ]);
                                                  $idactivitySource74 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity74,
                                                  'source_id' =>$idPlan45,
                                                  'value' => 670998728.899999,
                                                  'goal' => 0,
                                                  'evidence_balance' => 670998728.899999,
                                                  'age' => 3,
                                                  ]);
                                                  $idactivitySource75 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity18,
                                                    'source_id' =>$idPlan43,
                                                    'value' => 5731081033,
                                                    'goal' => 0,
                                                    'evidence_balance' => 5731081033,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource76 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity42,
                                                    'source_id' =>$idPlan33,
                                                    'value' => 1715910583.4,
                                                    'goal' => 0,
                                                    'evidence_balance' => 1715910583.4,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource77 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity52,
                                                    'source_id' =>$idPlan36,
                                                    'value' => 4127476321.4,
                                                    'goal' => 0,
                                                    'evidence_balance' => 4127476321.4,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource78 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity66,
                                                    'source_id' =>$idPlan35,
                                                    'value' => 1002863701.4,
                                                    'goal' => 0,
                                                    'evidence_balance' => 1002863701.4,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource79 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity71,
                                                    'source_id' =>$idPlan45,
                                                    'value' => 2274565598.4,
                                                    'goal' => 0,
                                                    'evidence_balance' => 2274565598.4,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource80 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity74,
                                                    'source_id' =>$idPlan46,
                                                    'value' => 6233182209,
                                                    'goal' => 0,
                                                    'evidence_balance' => 6233182209,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource81 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                    DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity74,
                                                      'source_id' =>$idPlan48,
                                                      'value' => 138126306.100001,
                                                      'goal' => 0,
                                                      'evidence_balance' => 138126306.100001,
                                                      'age' => 3,
                                                      ]);
                                                      $idactivitySource82 = DB::getPdo()->lastInsertId();

                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia134,
                                                        'activity_source_id' =>$idactivitySource58,
                                                        'value' => 100000000,
                                                        ]);
                                                        $idevidenceFinancial58 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia139,
                                                        'activity_source_id' =>$idactivitySource59,
                                                        'value' => 362871029,
                                                        ]);
                                                        $idevidenceFinancial59 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia140,
                                                        'activity_source_id' =>$idactivitySource60,
                                                        'value' => 296556404,
                                                        ]);
                                                        $idevidenceFinancial60 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia149,
                                                        'activity_source_id' =>$idactivitySource61,
                                                        'value' => 11127488742,
                                                        ]);
                                                        $idevidenceFinancial61 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia153,
                                                        'activity_source_id' =>$idactivitySource62,
                                                        'value' => 1883434146,
                                                        ]);
                                                        $idevidenceFinancial62 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia160,
                                                        'activity_source_id' =>$idactivitySource64,
                                                        'value' => 971237558,
                                                        ]);
                                                        $idevidenceFinancial64 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia163,
                                                        'activity_source_id' =>$idactivitySource65,
                                                        'value' => 286180000,
                                                        ]);
                                                        $idevidenceFinancial65 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia169,
                                                        'activity_source_id' =>$idactivitySource66,
                                                        'value' => 1824352667,
                                                        ]);
                                                        $idevidenceFinancial66 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia170,
                                                        'activity_source_id' =>$idactivitySource67,
                                                        'value' => 2967872663.6,
                                                        ]);
                                                        $idevidenceFinancial67 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia180,
                                                        'activity_source_id' =>$idactivitySource68,
                                                        'value' => 361089416.599998,
                                                        ]);
                                                        $idevidenceFinancial68 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia187,
                                                        'activity_source_id' =>$idactivitySource70,
                                                        'value' => 515834847,
                                                        ]);
                                                        $idevidenceFinancial70 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia193,
                                                        'activity_source_id' =>$idactivitySource71,
                                                        'value' => 80152131.5999985,
                                                        ]);
                                                        $idevidenceFinancial71 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia197,
                                                        'activity_source_id' =>$idactivitySource72,
                                                        'value' => 1567722773,
                                                        ]);
                                                        $idevidenceFinancial72 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia198,
                                                        'activity_source_id' =>$idactivitySource73,
                                                        'value' => 1004087648.6,
                                                        ]);
                                                        $idevidenceFinancial73 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia199,
                                                        'activity_source_id' =>$idactivitySource74,
                                                        'value' => 1302982281,
                                                        ]);
                                                        $idevidenceFinancial74 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia200,
                                                        'activity_source_id' =>$idactivitySource75,
                                                        'value' => 670998728.899999,
                                                        ]);
                                                        $idevidenceFinancial75 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        DB::table('evidence_financial')->insert([
                                                          'evidence_id' => $idevidencia149,
                                                          'activity_source_id' =>$idactivitySource76,
                                                          'value' => 1896242569,
                                                          ]);
                                                          $idevidenceFinancial76 = DB::getPdo()->lastInsertId();
                                                          
                                                          
                                                          
                                                        DB::table('evidence_financial')->insert([
                                                          'evidence_id' => $idevidencia170,
                                                          'activity_source_id' =>$idactivitySource77,
                                                          'value' => 740562721.400002,
                                                          ]);
                                                          $idevidenceFinancial77 = DB::getPdo()->lastInsertId();
                                                          
                                                          
                                                          
                                                        DB::table('evidence_financial')->insert([
                                                          'evidence_id' => $idevidencia180,
                                                          'activity_source_id' =>$idactivitySource78,
                                                          'value' => 3946389495.4,
                                                          ]);
                                                          $idevidenceFinancial78 = DB::getPdo()->lastInsertId();
                                                          
                                                          
                                                          
                                                        DB::table('evidence_financial')->insert([
                                                          'evidence_id' => $idevidencia193,
                                                          'activity_source_id' =>$idactivitySource79,
                                                          'value' => 113125396.400002,
                                                          ]);
                                                          $idevidenceFinancial79 = DB::getPdo()->lastInsertId();
                                                          
                                                          
                                                          
                                                        DB::table('evidence_financial')->insert([
                                                          'evidence_id' => $idevidencia198,
                                                          'activity_source_id' =>$idactivitySource80,
                                                          'value' => 2046348375.76,
                                                          ]);
                                                          $idevidenceFinancial80 = DB::getPdo()->lastInsertId();



                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia200,
                                                            'activity_source_id' =>$idactivitySource81,
                                                            'value' => 5825198638.1,
                                                            ]);
                                                            $idevidenceFinancial81 = DB::getPdo()->lastInsertId();

                                                            DB::table('activity_sources')->insert([
                                                              'activity_id' => $idactivity8,
                                                              'source_id' =>$idPlan54,
                                                              'value' => 230228455,
                                                              'goal' => 0,
                                                              'evidence_balance' => 230228455,
                                                              'age' => 4,
                                                              ]);
                                                              $idactivitySource83 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('activity_sources')->insert([
                                                              'activity_id' => $idactivity9,
                                                              'source_id' =>$idPlan54,
                                                              'value' => 181264000,
                                                              'goal' => 0,
                                                              'evidence_balance' => 181264000,
                                                              'age' => 4,
                                                              ]);
                                                              $idactivitySource84 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('activity_sources')->insert([
                                                              'activity_id' => $idactivity18,
                                                              'source_id' =>$idPlan54,
                                                              'value' => 14674614577.7,
                                                              'goal' => 0,
                                                              'evidence_balance' => 14674614577.7,
                                                              'age' => 4,
                                                              ]);
                                                              $idactivitySource85 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('activity_sources')->insert([
                                                              'activity_id' => $idactivity23,
                                                              'source_id' =>$idPlan54,
                                                              'value' => 8077776558.02,
                                                              'goal' => 0,
                                                              'evidence_balance' => 8077776558.02,
                                                              'age' => 4,
                                                              ]);
                                                              $idactivitySource86 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('activity_sources')->insert([
                                                              'activity_id' => $idactivity27,
                                                              'source_id' =>$idPlan54,
                                                              'value' => 2799828095,
                                                              'goal' => 0,
                                                              'evidence_balance' => 2799828095,
                                                              'age' => 4,
                                                              ]);
                                                              $idactivitySource87 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('activity_sources')->insert([
                                                              'activity_id' => $idactivity32,
                                                              'source_id' =>$idPlan54,
                                                              'value' => 240086525.499992,
                                                              'goal' => 0,
                                                              'evidence_balance' => 240086525.499992,
                                                              'age' => 4,
                                                              ]);
                                                              $idactivitySource88 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('activity_sources')->insert([
                                                              'activity_id' => $idactivity35,
                                                              'source_id' =>$idPlan49,
                                                              'value' => 140000000,
                                                              'goal' => 0,
                                                              'evidence_balance' => 140000000,
                                                              'age' => 4,
                                                              ]);
                                                              $idactivitySource89 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('activity_sources')->insert([
                                                              'activity_id' => $idactivity41,
                                                              'source_id' =>$idPlan49,
                                                              'value' => 642747411.66,
                                                              'goal' => 0,
                                                              'evidence_balance' => 642747411.66,
                                                              'age' => 4,
                                                              ]);
                                                              $idactivitySource90 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('activity_sources')->insert([
                                                              'activity_id' => $idactivity42,
                                                              'source_id' =>$idPlan49,
                                                              'value' => 7192651995.85,
                                                              'goal' => 0,
                                                              'evidence_balance' => 7192651995.85,
                                                              'age' => 4,
                                                              ]);
                                                              $idactivitySource91 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('activity_sources')->insert([
                                                              'activity_id' => $idactivity52,
                                                              'source_id' =>$idPlan49,
                                                              'value' => 4439215714.74,
                                                              'goal' => 0,
                                                              'evidence_balance' => 4439215714.74,
                                                              'age' => 4,
                                                              ]);
                                                              $idactivitySource92 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('activity_sources')->insert([
                                                              'activity_id' => $idactivity55,
                                                              'source_id' =>$idPlan49,
                                                              'value' => 110939735,
                                                              'goal' => 0,
                                                              'evidence_balance' => 110939735,
                                                              'age' => 4,
                                                              ]);
                                                              $idactivitySource93 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('activity_sources')->insert([
                                                              'activity_id' => $idactivity60,
                                                              'source_id' =>$idPlan49,
                                                              'value' => 427827680,
                                                              'goal' => 0,
                                                              'evidence_balance' => 427827680,
                                                              'age' => 4,
                                                              ]);
                                                              $idactivitySource94 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('activity_sources')->insert([
                                                              'activity_id' => $idactivity63,
                                                              'source_id' =>$idPlan49,
                                                              'value' => 314258767,
                                                              'goal' => 0,
                                                              'evidence_balance' => 314258767,
                                                              'age' => 4,
                                                              ]);
                                                              $idactivitySource95 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('activity_sources')->insert([
                                                              'activity_id' => $idactivity66,
                                                              'source_id' =>$idPlan49,
                                                              'value' => 581309637,
                                                              'goal' => 0,
                                                              'evidence_balance' => 581309637,
                                                              'age' => 4,
                                                              ]);
                                                              $idactivitySource96 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('activity_sources')->insert([
                                                              'activity_id' => $idactivity70,
                                                              'source_id' =>$idPlan49,
                                                              'value' => 427052264.119993,
                                                              'goal' => 0,
                                                              'evidence_balance' => 427052264.119993,
                                                              'age' => 4,
                                                              ]);
                                                              $idactivitySource97 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('activity_sources')->insert([
                                                              'activity_id' => $idactivity71,
                                                              'source_id' =>$idPlan51,
                                                              'value' => 3553576522,
                                                              'goal' => 0,
                                                              'evidence_balance' => 3553576522,
                                                              'age' => 4,
                                                              ]);
                                                              $idactivitySource98 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('activity_sources')->insert([
                                                              'activity_id' => $idactivity72,
                                                              'source_id' =>$idPlan51,
                                                              'value' => 67690076.9,
                                                              'goal' => 0,
                                                              'evidence_balance' => 67690076.9,
                                                              'age' => 4,
                                                              ]);
                                                              $idactivitySource99 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('activity_sources')->insert([
                                                              'activity_id' => $idactivity75,
                                                              'source_id' =>$idPlan51,
                                                              'value' => 7112136300.87,
                                                              'goal' => 0,
                                                              'evidence_balance' => 7112136300.87,
                                                              'age' => 4,
                                                              ]);
                                                              $idactivitySource100 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                              DB::table('activity_sources')->insert([
                                                                'activity_id' => $idactivity32,
                                                                'source_id' =>$idPlan49,
                                                                'value' => 372525322.630008,
                                                                'goal' => 0,
                                                                'evidence_balance' => 372525322.630008,
                                                                'age' => 4,
                                                                ]);
                                                                $idactivitySource101 = DB::getPdo()->lastInsertId();
                                                                
                                                                
                                                                
                                                              DB::table('activity_sources')->insert([
                                                                'activity_id' => $idactivity70,
                                                                'source_id' =>$idPlan51,
                                                                'value' => 65194555.7500068,
                                                                'goal' => 0,
                                                                'evidence_balance' => 65194555.7500068,
                                                                'age' => 4,
                                                                ]);
                                                                $idactivitySource102 = DB::getPdo()->lastInsertId();
                                                                

                                                                DB::table('evidence_financial')->insert([
                                                                  'evidence_id' => $idevidencia204,
                                                                  'activity_source_id' =>$idactivitySource83,
                                                                  'value' => 229036065.43,
                                                                  ]);
                                                                  $idevidenceFinancial83 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                DB::table('evidence_financial')->insert([
                                                                  'evidence_id' => $idevidencia205,
                                                                  'activity_source_id' =>$idactivitySource84,
                                                                  'value' => 180346996.52,
                                                                  ]);
                                                                  $idevidenceFinancial84 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                DB::table('evidence_financial')->insert([
                                                                  'evidence_id' => $idevidencia214,
                                                                  'activity_source_id' =>$idactivitySource85,
                                                                  'value' => 13975080332.82,
                                                                  ]);
                                                                  $idevidenceFinancial85 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                DB::table('evidence_financial')->insert([
                                                                  'evidence_id' => $idevidencia219,
                                                                  'activity_source_id' =>$idactivitySource86,
                                                                  'value' => 7869658287.65,
                                                                  ]);
                                                                  $idevidenceFinancial86 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                DB::table('evidence_financial')->insert([
                                                                  'evidence_id' => $idevidencia223,
                                                                  'activity_source_id' =>$idactivitySource87,
                                                                  'value' => 1119834484,
                                                                  ]);
                                                                  $idevidenceFinancial87 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                DB::table('evidence_financial')->insert([
                                                                  'evidence_id' => $idevidencia228,
                                                                  'activity_source_id' =>$idactivitySource88,
                                                                  'value' => 240086525.499992,
                                                                  ]);
                                                                  $idevidenceFinancial88 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                DB::table('evidence_financial')->insert([
                                                                  'evidence_id' => $idevidencia231,
                                                                  'activity_source_id' =>$idactivitySource89,
                                                                  'value' => 110295450,
                                                                  ]);
                                                                  $idevidenceFinancial89 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                DB::table('evidence_financial')->insert([
                                                                  'evidence_id' => $idevidencia237,
                                                                  'activity_source_id' =>$idactivitySource90,
                                                                  'value' => 684507990.43,
                                                                  ]);
                                                                  $idevidenceFinancial90 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                DB::table('evidence_financial')->insert([
                                                                  'evidence_id' => $idevidencia238,
                                                                  'activity_source_id' =>$idactivitySource91,
                                                                  'value' => 5524917824.09,
                                                                  ]);
                                                                  $idevidenceFinancial91 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                DB::table('evidence_financial')->insert([
                                                                  'evidence_id' => $idevidencia250,
                                                                  'activity_source_id' =>$idactivitySource92,
                                                                  'value' => 4234209232,
                                                                  ]);
                                                                  $idevidenceFinancial92 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                DB::table('evidence_financial')->insert([
                                                                  'evidence_id' => $idevidencia253,
                                                                  'activity_source_id' =>$idactivitySource93,
                                                                  'value' => 38001835,
                                                                  ]);
                                                                  $idevidenceFinancial93 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                DB::table('evidence_financial')->insert([
                                                                  'evidence_id' => $idevidencia258,
                                                                  'activity_source_id' =>$idactivitySource94,
                                                                  'value' => 30519942.67,
                                                                  ]);
                                                                  $idevidenceFinancial94 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                DB::table('evidence_financial')->insert([
                                                                  'evidence_id' => $idevidencia261,
                                                                  'activity_source_id' =>$idactivitySource95,
                                                                  'value' => 211954916.1,
                                                                  ]);
                                                                  $idevidenceFinancial95 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                DB::table('evidence_financial')->insert([
                                                                  'evidence_id' => $idevidencia264,
                                                                  'activity_source_id' =>$idactivitySource96,
                                                                  'value' => 580645336.5,
                                                                  ]);
                                                                  $idevidenceFinancial96 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                DB::table('evidence_financial')->insert([
                                                                  'evidence_id' => $idevidencia268,
                                                                  'activity_source_id' =>$idactivitySource97,
                                                                  'value' => 427052264.119993,
                                                                  ]);
                                                                  $idevidenceFinancial97 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                DB::table('evidence_financial')->insert([
                                                                  'evidence_id' => $idevidencia269,
                                                                  'activity_source_id' =>$idactivitySource98,
                                                                  'value' => 2954803768.81,
                                                                  ]);
                                                                  $idevidenceFinancial98 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                DB::table('evidence_financial')->insert([
                                                                  'evidence_id' => $idevidencia270,
                                                                  'activity_source_id' =>$idactivitySource99,
                                                                  'value' => 67690076.9,
                                                                  ]);
                                                                  $idevidenceFinancial99 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                DB::table('evidence_financial')->insert([
                                                                  'evidence_id' => $idevidencia271,
                                                                  'activity_source_id' =>$idactivitySource100,
                                                                  'value' => 6443804278.93,
                                                                  ]);
                                                                  $idevidenceFinancial100 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                  DB::table('evidence_financial')->insert([
                                                                    'evidence_id' => $idevidencia228,
                                                                    'activity_source_id' =>$idactivitySource101,
                                                                    'value' => 353409321.630008,
                                                                    ]);
                                                                    $idevidenceFinancial101 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('evidence_financial')->insert([
                                                                    'evidence_id' => $idevidencia268,
                                                                    'activity_source_id' =>$idactivitySource102,
                                                                    'value' => 50347893.3700068,
                                                                    ]);
                                                                    $idevidenceFinancial102 = DB::getPdo()->lastInsertId();
                                       

  }

}
