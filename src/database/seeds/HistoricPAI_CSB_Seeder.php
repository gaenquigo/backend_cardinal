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
 * Class HistoricPAI_CSB_Seeder
 */
class HistoricPAI_CSB_Seeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $pai=PAI::create([
      'name' => 'Plan de Acción Institucional 2016-2019 “Ambiente para la Paz”',
      'start_date' => '2016-01-01',
      'end_date' => '2019-12-31',
      'director_name' => 'ENRIQUE NUÑEZ DÍAZ',
      'group_id' => 32,
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
          'car_program' => 'PROGRAMA I. EDUCACIÓN PARA LA PROTECCION AMBIENTAL  Y  LA  CONVIVENCIA',
          'weighing' => 12,
          ]);
          $idprogram1 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA II         FORTALECIMIENTO INSTITUCIONAL ',
          'weighing' => 12,
          ]);
          $idprogram2 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA III. APLICACIÓN DE LA ORDENACIÓN AMBIENTALPROGRAMA III. APLICACIÓN DE LA ORDENACIÓN AMBIENTAL',
          'weighing' => 12,
          ]);
          $idprogram3 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA IV.          GESTIÓN DEL RIESGO DE DESASTRES Y ADAPTACIÓN AL CAMBIO CLIMÁTICO PARA TERRITORIOS SEGUROS, UNA CONTRIBUCIÓN AL DESARROLLO SOSTENIBLE',
          'weighing' => 12,
          ]);
          $idprogram4 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA V  SISTEMA REGIONAL DE ÁREAS PROTEGIDAS',
          'weighing' => 13,
          ]);
          $idprogram5 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA VI  INFRAESTRUCTURA AMBIENTAL - CALIDAD DE VIDA',
          'weighing' => 13,
          ]);
          $idprogram6 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA VII DESARROLLO SOCIAL Y PRODUCTIVO SOSTENIBLE',
          'weighing' => 13,
          ]);
          $idprogram7 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA VIII RECUPERACIÓN Y MANEJO DE ECOSISTEMAS ESTRATÉGICOS',
          'weighing' => 13,
          ]);
          $idprogram8 = DB::getPdo()->lastInsertId();
          
          
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => 'PROYECTO 1.  CAPACITACIÓN Y EDUCACIÓN AMBIENTAL',
            'weighing' => 100,
            ]);
            $idproject1 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => 'PROYECTO 2.  ADMINISTRACIÓN Y CONTROL DE LOS RECURSOS NATURALES RENOVABLES',
            'weighing' => 50,
            ]);
            $idproject2 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => 'PROYECTO 3.  IMPLANTACIÓN, ESTRUCTURACIÓN Y FORTALECIMIENTO INSTITUCIONAL',
            'weighing' => 50,
            ]);
            $idproject3 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram3,
            'project' => 'PROYECTO 4.  ELABORACIÓN DEL PLAN DE ORDENACIÓN Y MANEJO DE LA CUENCA HIDROGRÁFICA DIRECTOS BAJO MAGDALENA ENTRE EL BANCO Y EL PLATO (MD) - (2907), EN EL MARCO DEL PROYECTO INCORPORACIÓN DEL COMPONENTE DE GESTIÓN DEL RIESGO COMO DETERMINANTE AMBIENTAL DEL ORDENAMIENTO TERRITORIAL EN LOS PROCESOS DE FORMULACIÓN Y/O ACTUALIZACIÓN DE PLANES DE ORDENACIÓN Y MANEJO DE CUENCAS HIDROGRÁFICAS AFECTADAS POR EL FENÓMENO DE LA NIÑA 2010-2011                                                       ',
            'weighing' => 25,
            ]);
            $idproject4 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram3,
            'project' => 'PROYECTO 9: FORMULACIÓN DE UN MODELO DE ORDENAMIENTO AMBIENTAL EN LA JURISDICCIÓN DE LA CSB, DEPARTAMENTO DE BOLÍVAR',
            'weighing' => 25,
            ]);
            $idproject5 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram3,
            'project' => 'PROYECTO 15. FORMULACIÓN DEL PLAN DE ORDENACIÓN FORESTAL EN LA JURISDICCIÓN DE LA CORPORACIÓN AUTÓNOMA REGIONAL DEL SUR DE BOLÍVAR - CSB, BOLÍVAR',
            'weighing' => 25,
            ]);
            $idproject6 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram3,
            'project' => 'APOYO AL CONSEJO DE CUENCAS',
            'weighing' => 25,
            ]);
            $idproject7 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram4,
            'project' => 'PROYECTO 5. IMPLEMENTACION DE LA GESTION DEL RIESGO ECOSISTÉMICO PARA LA PREVENCION Y REDUCCION DE DESASTRES EN LA JURISDICCION DE LA CSB',
            'weighing' => 100,
            ]);
            $idproject8 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram5,
            'project' => 'PROYECTO 6.  IMPLEMENTACIÓN DE LA DECLARATORIA DE AREA PROTEGIDA REGIONAL EN LA JURISDICCIÓN DE LA CSB',
            'weighing' => 100,
            ]);
            $idproject9 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram6,
            'project' => 'PROYECTO 7.  SANEAMIENTO BÁSICO EN LOS MUNICIPIOS DEL SUR DE BOLÍVAR',
            'weighing' => 100,
            ]);
            $idproject10 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram7,
            'project' => 'PROYECTO 8.  IMPLEMENTACIÓN Y FORTALECIMIENTO DEL PROGRAMA REGIONAL DE NEGOCIOS VERDES PARA LA REGIÓN CARIBE, EN JURISDICCIÓN DE LA CSB',
            'weighing' => 50,
            ]);
            $idproject11 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram7,
            'project' => 'PROYECTO 16.  FORTALECIMIENTO DE LA OFERTA INSTITUCIONAL PARA APOYAR LA SOSTENIBILIDAD DE LOS NEGOCIOS VERDES EN LA JURISDICCIÓN DE LA CORPORACIÓN AUTÓNOMA REGIONAL DEL SUR DE BOLÍVAR, DEPARTAMENTO DE BOLÍVAR',
            'weighing' => 50,
            ]);
            $idproject12 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram8,
            'project' => 'PROYECTO 10.  RECUPERACIÓN DE ÁREAS AFECTADAS POR LA PÉRDIDA DE LA CBERTURA BOSCOSA EN MUNICIPIOS DE LA JURISDICCIÓN DE LA CSB (MOMPOX Y HATILLO DE LOBA)',
            'weighing' => 20,
            ]);
            $idproject13 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram8,
            'project' => 'PROYECTO 11.  REHABILITACIÓN ECOLÓGICA Y PARTICIPATIVA DE ÁREAS DE APTITUD FORESTAL EN EL MUNICIPIO DE ALTOS DEL ROSARIO DEPARTAMENTO DE BOLÍVAR',
            'weighing' => 20,
            ]);
            $idproject14 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram8,
            'project' => 'PROYECTO 12.  RESTAURACIÓN DE ÁREAS AFECTADAS POR LA PÉRDIDA DE COBERTURA BOSCOSA EN EL MUNICIPIO DE TIQUISIO, DEPARTAMENTO DE BOLÍVAR - (FONAM)',
            'weighing' => 20,
            ]);
            $idproject15 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram8,
            'project' => 'PROYECTO 13.  ESTUDIO PARA DELIMITAR EL COMPLEJO CENAGOSO DEPRESIÓN MOMPOSINA RÍO CAUCA, EN LOS MUNICIPIOS DE ACHÍ, ALTOS DEL ROSARIO, BARRANCO DE LOBA, MONTECRISTO, PINILLOS, SAN JACINTO DEL CAUCA, SAN MARTÍN DE LOBA Y TIQUISIO; BOLÍVAR - (FCA)',
            'weighing' => 20,
            ]);
            $idproject16 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram8,
            'project' => 'PROYECTO 14.  RESTAURACIÓN DE ÁREAS DE IMPORTANCIA ECOSISTÉMICA DEGRADADAS, EN EL MUNICIPIO DE MONTECRISTO, DEPARTAMENTO DE BOLÍVAR',
            'weighing' => 20,
            ]);
            $idproject17 = DB::getPdo()->lastInsertId();
            
            
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
              
              
              
              
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' => null,
                  'product_other' => 'Producto 1',
                  'goal_1' => 6,
                  'goal_2' => 6,
                  'goal_3' => 6,
                  'goal_4' => 6,
                  'goal_1_balance' => 6,
                  'goal_2_balance' => 6,
                  'goal_3_balance' => 6,
                  'goal_4_balance' => 6,
                  'total_goal' => 24,
                  'unit_goal' => 58,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 25,
                  ]);
                  $idobjectiveproduct1 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective1,
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
                  $idobjectiveproduct2 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective1,
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
                  'unit_goal' => 82,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 25,
                  ]);
                  $idobjectiveproduct3 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' => null,
                  'product_other' => 'Producto 4',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal_1_balance' => 0,
                  'goal_2_balance' => 0,
                  'goal_3_balance' => 0,
                  'goal_4_balance' => 0,
                  'total_goal' => 0,
                  'unit_goal' => 68,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 25,
                  ]);
                  $idobjectiveproduct4 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' => null,
                  'product_other' => 'Producto 1',
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
                  'weighing' => 20,
                  ]);
                  $idobjectiveproduct5 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' => null,
                  'product_other' => 'Producto 2',
                  'goal_1' => 50,
                  'goal_2' => 50,
                  'goal_3' => 50,
                  'goal_4' => 50,
                  'goal_1_balance' => 50,
                  'goal_2_balance' => 50,
                  'goal_3_balance' => 50,
                  'goal_4_balance' => 50,
                  'total_goal' => 200,
                  'unit_goal' => 71,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 20,
                  ]);
                  $idobjectiveproduct6 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' => null,
                  'product_other' => 'Producto 3',
                  'goal_1' => 70,
                  'goal_2' => 70,
                  'goal_3' => 70,
                  'goal_4' => 70,
                  'goal_1_balance' => 70,
                  'goal_2_balance' => 70,
                  'goal_3_balance' => 70,
                  'goal_4_balance' => 70,
                  'total_goal' => 280,
                  'unit_goal' => 71,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 20,
                  ]);
                  $idobjectiveproduct7 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective2,
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
                  'weighing' => 20,
                  ]);
                  $idobjectiveproduct8 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective2,
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
                  'weighing' => 20,
                  ]);
                  $idobjectiveproduct9 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' => null,
                  'product_other' => 'Producto 1',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 0,
                  'goal_1_balance' => 1,
                  'goal_2_balance' => 1,
                  'goal_3_balance' => 1,
                  'goal_4_balance' => 0,
                  'total_goal' => 3,
                  'unit_goal' => 58,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 25,
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
                  'unit_goal' => 58,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 25,
                  ]);
                  $idobjectiveproduct11 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' => null,
                  'product_other' => 'Producto 3',
                  'goal_1' => 0.1,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 1,
                  'goal_1_balance' => 0.1,
                  'goal_2_balance' => 0,
                  'goal_3_balance' => 0,
                  'goal_4_balance' => 1,
                  'total_goal' => 1.1,
                  'unit_goal' => 58,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 25,
                  ]);
                  $idobjectiveproduct12 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' => null,
                  'product_other' => 'Producto 4',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 4,
                  'goal_1_balance' => 0,
                  'goal_2_balance' => 0,
                  'goal_3_balance' => 0,
                  'goal_4_balance' => 4,
                  'total_goal' => 4,
                  'unit_goal' => 80,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 25,
                  ]);
                  $idobjectiveproduct13 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective4,
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
                  'unit_goal' => 71,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 25,
                  ]);
                  $idobjectiveproduct14 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' => null,
                  'product_other' => 'Producto 2',
                  'goal_1' => 50,
                  'goal_2' => 50,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal_1_balance' => 50,
                  'goal_2_balance' => 50,
                  'goal_3_balance' => 0,
                  'goal_4_balance' => 0,
                  'total_goal' => 100,
                  'unit_goal' => 71,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 25,
                  ]);
                  $idobjectiveproduct15 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' => null,
                  'product_other' => 'Producto 3',
                  'goal_1' => 0,
                  'goal_2' => 100,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal_1_balance' => 0,
                  'goal_2_balance' => 100,
                  'goal_3_balance' => 0,
                  'goal_4_balance' => 0,
                  'total_goal' => 100,
                  'unit_goal' => 71,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 25,
                  ]);
                  $idobjectiveproduct16 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' => null,
                  'product_other' => 'Producto 4',
                  'goal_1' => 0,
                  'goal_2' => 100,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal_1_balance' => 0,
                  'goal_2_balance' => 100,
                  'goal_3_balance' => 0,
                  'goal_4_balance' => 0,
                  'total_goal' => 100,
                  'unit_goal' => 71,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 25,
                  ]);
                  $idobjectiveproduct17 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective5,
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
                  'unit_goal' => 42,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 25,
                  ]);
                  $idobjectiveproduct18 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective5,
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
                  'unit_goal' => 42,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 25,
                  ]);
                  $idobjectiveproduct19 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' => null,
                  'product_other' => 'Producto 3',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal_1_balance' => 0,
                  'goal_2_balance' => 1,
                  'goal_3_balance' => 0,
                  'goal_4_balance' => 0,
                  'total_goal' => 1,
                  'unit_goal' => 42,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 25,
                  ]);
                  $idobjectiveproduct20 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' => null,
                  'product_other' => 'Producto 4',
                  'goal_1' => 0,
                  'goal_2' => 4,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal_1_balance' => 0,
                  'goal_2_balance' => 4,
                  'goal_3_balance' => 0,
                  'goal_4_balance' => 0,
                  'total_goal' => 4,
                  'unit_goal' => 58,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 25,
                  ]);
                  $idobjectiveproduct21 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' => null,
                  'product_other' => 'Producto 1',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 6,
                  'goal_1_balance' => 0,
                  'goal_2_balance' => 0,
                  'goal_3_balance' => 0,
                  'goal_4_balance' => 6,
                  'total_goal' => 6,
                  'unit_goal' => 58,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 25,
                  ]);
                  $idobjectiveproduct22 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' => null,
                  'product_other' => 'Producto 2',
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
                  'weighing' => 25,
                  ]);
                  $idobjectiveproduct23 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective6,
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
                  'unit_goal' => 58,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 25,
                  ]);
                  $idobjectiveproduct24 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective6,
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
                  'weighing' => 25,
                  ]);
                  $idobjectiveproduct25 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' => null,
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
                  'unit_goal' => 58,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 100,
                  ]);
                  $idobjectiveproduct26 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective8,
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
                  'unit_goal' => 82,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 33,
                  ]);
                  $idobjectiveproduct27 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective8,
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
                  'unit_goal' => 82,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 33,
                  ]);
                  $idobjectiveproduct28 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' => null,
                  'product_other' => 'Producto 3',
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
                  'weighing' => 34,
                  ]);
                  $idobjectiveproduct29 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' => null,
                  'product_other' => 'Producto 1',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 116100,
                  'goal_4' => 116100,
                  'goal_1_balance' => 0,
                  'goal_2_balance' => 0,
                  'goal_3_balance' => 116100,
                  'goal_4_balance' => 116100,
                  'total_goal' => 232200,
                  'unit_goal' => 47,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 33,
                  ]);
                  $idobjectiveproduct30 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' => null,
                  'product_other' => 'Producto 2',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal_1_balance' => 0,
                  'goal_2_balance' => 0,
                  'goal_3_balance' => 0,
                  'goal_4_balance' => 0,
                  'total_goal' => 0,
                  'unit_goal' => 47,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 33,
                  ]);
                  $idobjectiveproduct31 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' => null,
                  'product_other' => 'Producto 3',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal_1_balance' => 0,
                  'goal_2_balance' => 0,
                  'goal_3_balance' => 0,
                  'goal_4_balance' => 0,
                  'total_goal' => 0,
                  'unit_goal' => 47,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 34,
                  ]);
                  $idobjectiveproduct32 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective10,
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
                  $idobjectiveproduct33 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective10,
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
                  $idobjectiveproduct34 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective10,
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
                  'weighing' => 34,
                  ]);
                  $idobjectiveproduct35 = DB::getPdo()->lastInsertId();
                  
                  
                  
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
                  'unit_goal' => 58,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 25,
                  ]);
                  $idobjectiveproduct36 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective11,
                  'product_id' => null,
                  'product_other' => 'Producto 2',
                  'goal_1' => 0,
                  'goal_2' => 20,
                  'goal_3' => 40,
                  'goal_4' => 0,
                  'goal_1_balance' => 0,
                  'goal_2_balance' => 20,
                  'goal_3_balance' => 40,
                  'goal_4_balance' => 0,
                  'total_goal' => 60,
                  'unit_goal' => 58,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 25,
                  ]);
                  $idobjectiveproduct37 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective11,
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
                  'unit_goal' => 58,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 25,
                  ]);
                  $idobjectiveproduct38 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective11,
                  'product_id' => null,
                  'product_other' => 'Producto 4',
                  'goal_1' => 2,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal_1_balance' => 2,
                  'goal_2_balance' => 0,
                  'goal_3_balance' => 0,
                  'goal_4_balance' => 0,
                  'total_goal' => 2,
                  'unit_goal' => 58,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 25,
                  ]);
                  $idobjectiveproduct39 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' => null,
                  'product_other' => 'Producto 1',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 17,
                  'goal_1_balance' => 0,
                  'goal_2_balance' => 0,
                  'goal_3_balance' => 0,
                  'goal_4_balance' => 17,
                  'total_goal' => 17,
                  'unit_goal' => 58,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 50,
                  ]);
                  $idobjectiveproduct40 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective12,
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
                  'weighing' => 50,
                  ]);
                  $idobjectiveproduct41 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' => null,
                  'product_other' => 'Producto 1',
                  'goal_1' => 0,
                  'goal_2' => 233,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal_1_balance' => 0,
                  'goal_2_balance' => 233,
                  'goal_3_balance' => 0,
                  'goal_4_balance' => 0,
                  'total_goal' => 233,
                  'unit_goal' => 58,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 20,
                  ]);
                  $idobjectiveproduct42 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' => null,
                  'product_other' => 'Producto 2',
                  'goal_1' => 0,
                  'goal_2' => 233,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal_1_balance' => 0,
                  'goal_2_balance' => 233,
                  'goal_3_balance' => 0,
                  'goal_4_balance' => 0,
                  'total_goal' => 233,
                  'unit_goal' => 47,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 20,
                  ]);
                  $idobjectiveproduct43 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' => null,
                  'product_other' => 'Producto 3',
                  'goal_1' => 0,
                  'goal_2' => 42,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal_1_balance' => 0,
                  'goal_2_balance' => 42,
                  'goal_3_balance' => 0,
                  'goal_4_balance' => 0,
                  'total_goal' => 42,
                  'unit_goal' => 47,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 20,
                  ]);
                  $idobjectiveproduct44 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' => null,
                  'product_other' => 'Producto 4',
                  'goal_1' => 0,
                  'goal_2' => 233,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal_1_balance' => 0,
                  'goal_2_balance' => 233,
                  'goal_3_balance' => 0,
                  'goal_4_balance' => 0,
                  'total_goal' => 233,
                  'unit_goal' => 47,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 20,
                  ]);
                  $idobjectiveproduct45 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' => null,
                  'product_other' => 'Producto 5',
                  'goal_1' => 0,
                  'goal_2' => 5,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal_1_balance' => 0,
                  'goal_2_balance' => 5,
                  'goal_3_balance' => 0,
                  'goal_4_balance' => 0,
                  'total_goal' => 5,
                  'unit_goal' => 58,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 20,
                  ]);
                  $idobjectiveproduct46 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective14,
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
                  'unit_goal' => 58,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 16,
                  ]);
                  $idobjectiveproduct47 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' => null,
                  'product_other' => 'Producto 2',
                  'goal_1' => 0,
                  'goal_2' => 446,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal_1_balance' => 0,
                  'goal_2_balance' => 446,
                  'goal_3_balance' => 0,
                  'goal_4_balance' => 0,
                  'total_goal' => 446,
                  'unit_goal' => 47,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 16,
                  ]);
                  $idobjectiveproduct48 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' => null,
                  'product_other' => 'Producto 3',
                  'goal_1' => 0,
                  'goal_2' => 446,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal_1_balance' => 0,
                  'goal_2_balance' => 446,
                  'goal_3_balance' => 0,
                  'goal_4_balance' => 0,
                  'total_goal' => 446,
                  'unit_goal' => 47,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 17,
                  ]);
                  $idobjectiveproduct49 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' => null,
                  'product_other' => 'Producto 4',
                  'goal_1' => 0,
                  'goal_2' => 446,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal_1_balance' => 0,
                  'goal_2_balance' => 446,
                  'goal_3_balance' => 0,
                  'goal_4_balance' => 0,
                  'total_goal' => 446,
                  'unit_goal' => 47,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 17,
                  ]);
                  $idobjectiveproduct50 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' => null,
                  'product_other' => 'Producto 5',
                  'goal_1' => 0,
                  'goal_2' => 1000,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal_1_balance' => 0,
                  'goal_2_balance' => 1000,
                  'goal_3_balance' => 0,
                  'goal_4_balance' => 0,
                  'total_goal' => 1000,
                  'unit_goal' => 58,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 17,
                  ]);
                  $idobjectiveproduct51 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' => null,
                  'product_other' => 'Producto 6',
                  'goal_1' => 0,
                  'goal_2' => 5,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal_1_balance' => 0,
                  'goal_2_balance' => 5,
                  'goal_3_balance' => 0,
                  'goal_4_balance' => 0,
                  'total_goal' => 5,
                  'unit_goal' => 58,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 17,
                  ]);
                  $idobjectiveproduct52 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective15,
                  'product_id' => null,
                  'product_other' => 'Producto 1',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 40,
                  'goal_4' => 0,
                  'goal_1_balance' => 0,
                  'goal_2_balance' => 0,
                  'goal_3_balance' => 40,
                  'goal_4_balance' => 0,
                  'total_goal' => 40,
                  'unit_goal' => 58,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 16,
                  ]);
                  $idobjectiveproduct53 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective15,
                  'product_id' => null,
                  'product_other' => 'Producto 2',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 128,
                  'goal_4' => 0,
                  'goal_1_balance' => 0,
                  'goal_2_balance' => 0,
                  'goal_3_balance' => 128,
                  'goal_4_balance' => 0,
                  'total_goal' => 128,
                  'unit_goal' => 47,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 16,
                  ]);
                  $idobjectiveproduct54 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective15,
                  'product_id' => null,
                  'product_other' => 'Producto 3',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 128,
                  'goal_4' => 0,
                  'goal_1_balance' => 0,
                  'goal_2_balance' => 0,
                  'goal_3_balance' => 128,
                  'goal_4_balance' => 0,
                  'total_goal' => 128,
                  'unit_goal' => 47,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 17,
                  ]);
                  $idobjectiveproduct55 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective15,
                  'product_id' => null,
                  'product_other' => 'Producto 4',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 128,
                  'goal_4' => 0,
                  'goal_1_balance' => 0,
                  'goal_2_balance' => 0,
                  'goal_3_balance' => 128,
                  'goal_4_balance' => 0,
                  'total_goal' => 128,
                  'unit_goal' => 47,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 17,
                  ]);
                  $idobjectiveproduct56 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective15,
                  'product_id' => null,
                  'product_other' => 'Producto 5',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 640,
                  'goal_4' => 0,
                  'goal_1_balance' => 0,
                  'goal_2_balance' => 0,
                  'goal_3_balance' => 640,
                  'goal_4_balance' => 0,
                  'total_goal' => 640,
                  'unit_goal' => 58,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 17,
                  ]);
                  $idobjectiveproduct57 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective15,
                  'product_id' => null,
                  'product_other' => 'Producto 6',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 5,
                  'goal_4' => 0,
                  'goal_1_balance' => 0,
                  'goal_2_balance' => 0,
                  'goal_3_balance' => 5,
                  'goal_4_balance' => 0,
                  'total_goal' => 5,
                  'unit_goal' => 58,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 17,
                  ]);
                  $idobjectiveproduct58 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective16,
                  'product_id' => null,
                  'product_other' => 'Producto 1',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 5,
                  'goal_4' => 4.54,
                  'goal_1_balance' => 0,
                  'goal_2_balance' => 0,
                  'goal_3_balance' => 5,
                  'goal_4_balance' => 4.54,
                  'total_goal' => 9.54,
                  'unit_goal' => 58,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 50,
                  ]);
                  $idobjectiveproduct59 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective16,
                  'product_id' => null,
                  'product_other' => 'Producto 2',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 7,
                  'goal_4' => 6.8,
                  'goal_1_balance' => 0,
                  'goal_2_balance' => 0,
                  'goal_3_balance' => 7,
                  'goal_4_balance' => 6.8,
                  'total_goal' => 13.8,
                  'unit_goal' => 58,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 50,
                  ]);
                  $idobjectiveproduct60 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective17,
                  'product_id' => null,
                  'product_other' => 'Producto 1',
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
                  'weighing' => 14,
                  ]);
                  $idobjectiveproduct61 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective17,
                  'product_id' => null,
                  'product_other' => 'Producto 2',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal_1_balance' => 0,
                  'goal_2_balance' => 0,
                  'goal_3_balance' => 0,
                  'goal_4_balance' => 0,
                  'total_goal' => 0,
                  'unit_goal' => 47,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 14,
                  ]);
                  $idobjectiveproduct62 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective17,
                  'product_id' => null,
                  'product_other' => 'Producto 3',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal_1_balance' => 0,
                  'goal_2_balance' => 0,
                  'goal_3_balance' => 0,
                  'goal_4_balance' => 0,
                  'total_goal' => 0,
                  'unit_goal' => 47,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 14,
                  ]);
                  $idobjectiveproduct63 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective17,
                  'product_id' => null,
                  'product_other' => 'Producto 4',
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
                  'weighing' => 14,
                  ]);
                  $idobjectiveproduct64 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective17,
                  'product_id' => null,
                  'product_other' => 'Producto 5',
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
                  'weighing' => 14,
                  ]);
                  $idobjectiveproduct65 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective17,
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
                  'unit_goal' => 58,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 15,
                  ]);
                  $idobjectiveproduct66 = DB::getPdo()->lastInsertId();
                  
                  
                  
              DB::table('objective_products')->insert([
                  'objective_id' => $idobjective17,
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
                  'unit_goal' => 58,
                  'indicator_national_id' => 799,
                  'indicator_ods_id' => 890,
                  'national_policy_id' => 875,
                  'weighing' => 15,
                  ]);
                  $idobjectiveproduct67 = DB::getPdo()->lastInsertId();
                  
                
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct1,
                  'name' => '1.Promover la estrategia de proyectos ambientales escolares (PRAES), en el marco de la educación formal, en la jurisdicción de la CSB',
                  'goal_1' => 6,
                  'goal_2' => 6,
                  'goal_3' => 6,
                  'goal_4' => 6,
                  'goal' => 24,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity1 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct2,
                  'name' => '1. Promover la estrategia de proyectos ciudadanos y comunitarios de educación ambiental (PROCEDAS), en el marco de la educación no formal, en la jurisdicción de la CSB.',
                  'goal_1' => 2,
                  'goal_2' => 2,
                  'goal_3' => 2,
                  'goal_4' => 2,
                  'goal' => 8,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity2 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct3,
                  'name' => '1. Capacitar en temáticas ambientales requeridas por las comunidades asentadas en la jurisdicción, en el marco de la educación informal.',
                  'goal_1' => 2,
                  'goal_2' => 2,
                  'goal_3' => 2,
                  'goal_4' => 2,
                  'goal' => 8,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity3 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct4,
                  'name' => '1. Realizar una alianza nacional y territorial para el desarrollo de la Política Nacional de Educación Ambiental.',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 0,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity4 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct5,
                  'name' => '2. Realizar la evaluación ambiental a solicitudes de licencias, permisos, concesiones, autorizaciones y otros, en los 25 municipios de la jurisdicción de la CSB.',
                  'goal_1' => 90,
                  'goal_2' => 90,
                  'goal_3' => 90,
                  'goal_4' => 90,
                  'goal' => 360,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity5 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct6,
                  'name' => '2. Efectuar el control y seguimiento ambiental a licencias, permisos y autorizaciones, en los 25 municipios de la jurisdicción de la CSB.',
                  'goal_1' => 50,
                  'goal_2' => 50,
                  'goal_3' => 50,
                  'goal_4' => 50,
                  'goal' => 200,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity6 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct7,
                  'name' => '2. Atender y resolver las quejas, reclamos, multas y daños; que surjan entre los usuarios por el uso de los recursos naturales renovables',
                  'goal_1' => 70,
                  'goal_2' => 70,
                  'goal_3' => 70,
                  'goal_4' => 70,
                  'goal' => 280,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity7 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct8,
                  'name' => '2. Adelantar investigaciones administrativas requeridas por la infracción a la normativa ambiental.',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity8 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct9,
                  'name' => '2. Realizar el control de la movilización, procesamiento y comercialización de los recursos naturales renovables (retenes), en los 25 municipios de la jurisdicción de la CSB.',
                  'goal_1' => 40,
                  'goal_2' => 40,
                  'goal_3' => 40,
                  'goal_4' => 40,
                  'goal' => 160,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity9 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct10,
                  'name' => '3. Actualizar software contable',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 0,
                  'goal' => 3,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity10 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct11,
                  'name' => '3. Implementar Gobierno en Línea',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity11 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct12,
                  'name' => '3. Iniciar la implementación del SIG',
                  'goal_1' => 0.1,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 1,
                  'goal' => 1.1,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity12 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct13,
                  'name' => '3. Implementar los Sistemas de Información del IDEAM: SIUR, SNIF y SISAIRE (componente ruido)',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 4,
                  'goal' => 4,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity13 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct14,
                  'name' => '4. Fase de aprestamiento',
                  'goal_1' => 100,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 100,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity14 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct15,
                  'name' => '4. Fase de diagnóstico',
                  'goal_1' => 50,
                  'goal_2' => 50,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 100,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity15 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct16,
                  'name' => '4. Fase de prospectiva y zonificación ambiental',
                  'goal_1' => 0,
                  'goal_2' => 100,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 100,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity16 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct17,
                  'name' => '4. Fase de formulación',
                  'goal_1' => 0,
                  'goal_2' => 100,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 100,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity17 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct18,
                  'name' => '9. Actualizar la linea base de información y cartografía existente',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity18 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct19,
                  'name' => '9. Actualizar el diagnóstico ambiental de la jurisdicción de la CSB',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity19 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct20,
                  'name' => '9. Formular un modelo de ordenamiento ambiental y la zonificación ambiental de la jurisdicción de la CSB',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity20 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct21,
                  'name' => '9. Realizar eventos de capacitación sobre el alcance, competencias y funciones en la planificación ambiental, en el marco de la planificación territorial y sectorial',
                  'goal_1' => 0,
                  'goal_2' => 4,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 4,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity21 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct22,
                  'name' => '15. Documento diagnóstico para la gestión de la información y el conocimiento ambiental',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 6,
                  'goal' => 6,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity22 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct23,
                  'name' => '15. Documentos de investigación para la gestión de la información y el conocimiento ambiental.',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 2,
                  'goal' => 2,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity23 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct24,
                  'name' => '15. Inventario de fauna',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 1,
                  'goal' => 1,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity24 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct25,
                  'name' => '15. Inventario forestal',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 1,
                  'goal' => 1,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity25 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct26,
                  'name' => '0. Acción de apoyo al Consejo de Cuencas con dotación de equipos y transporte',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 1,
                  'goal' => 1,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity26 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct27,
                  'name' => '5. Apoyar el conocimiento del riesgo en la jurisdicción de la CSB: Talleres, con la temática de funciones y competencias en la gestión integral del riesgo de desastres, orientación para la adecuada inclusión de la gestión del riesgo en los POT y adaptación al cambio climático.',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 3,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity27 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct28,
                  'name' => '5. Avance en el conocimiento en la adaptación al cambio climático',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 1,
                  'goal' => 1,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity28 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct29,
                  'name' => '5. Apoyar la reducción del riesgo en la jurisdicción: Inclusión de la gestión del riesgo de desastres a partir de las Determinantes Ambientales en los municipios que inicien el proceso de actualización, revisión y/o ajuste del POT',
                  'goal_1' => 0,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 300,
                  'weighing' => 34,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity29 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct30,
                  'name' => '6. Implementar la Fase I de la ruta de declaratoria de áreas protegidas: Preparación',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 116100,
                  'goal_4' => 116100,
                  'goal' => 232200,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity30 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct31,
                  'name' => '6. Implementar la Fase II de la ruta de declaratoria de áreas protegidas: Aprestamiento',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 0,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity31 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct32,
                  'name' => '6. Implementar la Fase III de la ruta de declaratoria de áreas protegidas: Declaratoria',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 0,
                  'weighing' => 34,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity32 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective10,
                  'product_id' =>$idobjectiveproduct33,
                  'name' => '7. Apoyar la implementación del uso eficiente del recurso agua en la prestación del servicio de agua potable, por parte de los municipios de la jurisdicción de la CSB',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity33 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective10,
                  'product_id' =>$idobjectiveproduct34,
                  'name' => '7. Apoyar la implementación del adecuado vertimiento de aguas residuales domésticas en la prestación del servicio de alcantarillado, por parte de los municipios de la jurisdicción de la CSB.',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity34 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective10,
                  'product_id' =>$idobjectiveproduct35,
                  'name' => '7. Apoyar la implementación de la gestión integral de residuos sólidos en los municipios de la jurisdicción de la CSB.',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 34,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity35 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective11,
                  'product_id' =>$idobjectiveproduct36,
                  'name' => '8. Apoyar el fortalecimiento de las capacidades de la CSB para implementar el  PRNV, región Caribe',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 3,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity36 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective11,
                  'product_id' =>$idobjectiveproduct37,
                  'name' => '8. Promover el desarrollo de alternativas de producción y generación de ingresos sostenibles en la jurisdicción',
                  'goal_1' => 0,
                  'goal_2' => 20,
                  'goal_3' => 40,
                  'goal_4' => 0,
                  'goal' => 60,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity37 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective11,
                  'product_id' =>$idobjectiveproduct38,
                  'name' => '8. Promover el desarrollo de estrategias de promoción y comercialización de negocios verdes',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 0,
                  'goal' => 2,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity38 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective11,
                  'product_id' =>$idobjectiveproduct39,
                  'name' => '8. Apoyar el proceso de comercialización de los proyectos que promuevan los negocios verdes',
                  'goal_1' => 2,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 2,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity39 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct40,
                  'name' => '16. Fortalecer la capacidad instalada y operativa institucional en el fomento de los Negocios Verdes',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 17,
                  'goal' => 17,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity40 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct41,
                  'name' => '16. Impulsar la visibilidad de los negocios verdes, en la jurisdicción de la CSB',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 1,
                  'goal' => 1,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity41 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' =>$idobjectiveproduct42,
                  'name' => '10. Prestar asistencia técnica en labores de rehabilitación ecológica participativa',
                  'goal_1' => 0,
                  'goal_2' => 233,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 233,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity42 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' =>$idobjectiveproduct43,
                  'name' => '10. Establecer plantaciones o modelos de rehabilitación',
                  'goal_1' => 0,
                  'goal_2' => 233,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 233,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity43 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' =>$idobjectiveproduct44,
                  'name' => '10. Realizar el aislamiento de plantaciones',
                  'goal_1' => 0,
                  'goal_2' => 42,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 42,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity44 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' =>$idobjectiveproduct45,
                  'name' => '10. Realizar el seguimiento y monitoreo',
                  'goal_1' => 0,
                  'goal_2' => 233,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 233,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity45 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' =>$idobjectiveproduct46,
                  'name' => '10. Realizar talleres de socialización, difusión y concertación',
                  'goal_1' => 0,
                  'goal_2' => 5,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 5,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity46 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct47,
                  'name' => '11. Realizar un diagnóstico participativo, priorización y selección de áreas para rehabilitación',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity47 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct48,
                  'name' => '11. Realizar el establecimiento de plantaciones o modelos de rehabilitación ',
                  'goal_1' => 0,
                  'goal_2' => 446,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 446,
                  'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity48 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct49,
                  'name' => '11. Realizar el aislamiento de plantaciones',
                  'goal_1' => 0,
                  'goal_2' => 446,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 446,
                  'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity49 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct50,
                  'name' => '11. Efectuar el seguimiento y monitoreo',
                  'goal_1' => 0,
                  'goal_2' => 446,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 446,
                  'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity50 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct51,
                  'name' => '11. Generar elementos de difusión',
                  'goal_1' => 0,
                  'goal_2' => 1000,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1000,
                  'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity51 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct52,
                  'name' => '11. Realizar eventos de divulgación, socialización, participación, concertación y promoción comunitaria',
                  'goal_1' => 0,
                  'goal_2' => 5,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 5,
                  'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity52 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective15,
                  'product_id' =>$idobjectiveproduct53,
                  'name' => '12. Prestar asistencia técnica en labores de rehabilitación ecológica participativa',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 40,
                  'goal_4' => 0,
                  'goal' => 40,
                  'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity53 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective15,
                  'product_id' =>$idobjectiveproduct54,
                  'name' => '12. Establecer plantaciones o modelos de rehabilitación',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 128,
                  'goal_4' => 0,
                  'goal' => 128,
                  'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity54 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective15,
                  'product_id' =>$idobjectiveproduct55,
                  'name' => '12. Realizar el aislamiento de plantaciones',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 128,
                  'goal_4' => 0,
                  'goal' => 128,
                  'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity55 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective15,
                  'product_id' =>$idobjectiveproduct56,
                  'name' => '12. Realizar el seguimiento y monitoreo',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 128,
                  'goal_4' => 0,
                  'goal' => 128,
                  'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity56 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective15,
                  'product_id' =>$idobjectiveproduct57,
                  'name' => '12. Diseñar talleres de participación sobre conservación y manejo de socioecosistemas',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 640,
                  'goal_4' => 0,
                  'goal' => 640,
                  'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity57 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective15,
                  'product_id' =>$idobjectiveproduct58,
                  'name' => '12. Realizar talleres socialización, difusión y concertación',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 5,
                  'goal_4' => 0,
                  'goal' => 5,
                  'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity58 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective16,
                  'product_id' =>$idobjectiveproduct59,
                  'name' => '13. Realizar el análisis integral de criterios biogeofísicos que permitan establecer la conectividad espacial, funcional y temporal del complejo cenagoso Depresión Momposina - Río Cauca',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 5,
                  'goal_4' => 4.54,
                  'goal' => 9.54,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity59 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective16,
                  'product_id' =>$idobjectiveproduct60,
                  'name' => '13. Realizar el análisis integral de criterios socioculturales que permitan definir lineamientos de uso, manejo y aprovechamiento sostenible de los servicios ecosistémicos que provee el complejo cenagoso Depresión Momposina - Río Cauca',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 7,
                  'goal_4' => 6.8,
                  'goal' => 13.8,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity60 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective17,
                  'product_id' =>$idobjectiveproduct61,
                  'name' => '14. Realizar asistencia y diagnóstico participativo, priorización y selección de áreas para restauración',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 0,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity61 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective17,
                  'product_id' =>$idobjectiveproduct62,
                  'name' => '14. Establecer material vegetal',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 0,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity62 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective17,
                  'product_id' =>$idobjectiveproduct63,
                  'name' => '14. Establecer aislamiento para la protección de material vegetal',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 0,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity63 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective17,
                  'product_id' =>$idobjectiveproduct64,
                  'name' => '14. Implementar el programa de monitoreo, seguimiento y evaluación al proceso de restauración',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 0,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity64 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective17,
                  'product_id' =>$idobjectiveproduct65,
                  'name' => '14. Efectuar el seguimiento técnico, administrativo y financiero al proyecto',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 0,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity65 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective17,
                  'product_id' =>$idobjectiveproduct66,
                  'name' => '14. Generar elementos de difusión y participación sobre ducación ambiental',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 0,
                  'weighing' => 15,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity66 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective17,
                  'product_id' =>$idobjectiveproduct67,
                  'name' => '14. Desarrollar eventos de sensibilización',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 0,
                  'weighing' => 15,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity67 = DB::getPdo()->lastInsertId();

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity1,
          'year' =>1,
          'value' => 17,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia1 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity2,
          'year' =>1,
          'value' => 2,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia2 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity3,
          'year' =>1,
          'value' => 2,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia3 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity5,
          'year' =>1,
          'value' => 55,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia5 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity6,
          'year' =>1,
          'value' => 28,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia6 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity7,
          'year' =>1,
          'value' => 24,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia7 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity8,
          'year' =>1,
          'value' => 12,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia8 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity9,
          'year' =>1,
          'value' => 18,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia9 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity10,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia10 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity11,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia11 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity12,
          'year' =>1,
          'value' => 0.1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia12 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity14,
          'year' =>1,
          'value' => 100,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia14 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity15,
          'year' =>1,
          'value' => 100,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia15 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity16,
          'year' =>1,
          'value' => 100,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia16 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity17,
          'year' =>1,
          'value' => 100,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia17 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity18,
          'year' =>1,
          'value' => 100,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia18 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity19,
          'year' =>1,
          'value' => 100,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia19 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity20,
          'year' =>1,
          'value' => 100,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia20 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity21,
          'year' =>1,
          'value' => 100,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia21 = DB::getPdo()->lastInsertId(); 








         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity30,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia30 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity33,
          'year' =>1,
          'value' => 100,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia33 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity34,
          'year' =>1,
          'value' => 100,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia34 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity35,
          'year' =>1,
          'value' => 100,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia35 = DB::getPdo()->lastInsertId(); 



         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity39,
          'year' =>1,
          'value' => 2,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia39 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity1,
          'year' =>2,
          'value' => 18,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia40 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity2,
          'year' =>2,
          'value' => 3,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia41 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity3,
          'year' =>2,
          'value' => 2,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia42 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity5,
          'year' =>2,
          'value' => 85.59,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia44 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity6,
          'year' =>2,
          'value' => 61.02,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia45 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity7,
          'year' =>2,
          'value' => 42.28,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia46 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity8,
          'year' =>2,
          'value' => 28.57,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia47 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity9,
          'year' =>2,
          'value' => 34,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia48 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity10,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia49 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity11,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia50 = DB::getPdo()->lastInsertId(); 






         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity18,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia57 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity19,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia58 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity20,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia59 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity21,
          'year' =>2,
          'value' => 4,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia60 = DB::getPdo()->lastInsertId(); 





         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity27,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia66 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity29,
          'year' =>2,
          'value' => 100,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia68 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity30,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia69 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity33,
          'year' =>2,
          'value' => 100,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia72 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity34,
          'year' =>2,
          'value' => 100,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia73 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity35,
          'year' =>2,
          'value' => 100,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia74 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity36,
          'year' =>2,
          'value' => 0.5,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia75 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity37,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia76 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity38,
          'year' =>2,
          'value' => 0.14,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia77 = DB::getPdo()->lastInsertId(); 



         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity42,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia81 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity43,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia82 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity44,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia83 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity45,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia84 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity46,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia85 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity47,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia86 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity48,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia87 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity49,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia88 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity50,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia89 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity52,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia91 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity1,
          'year' =>3,
          'value' => 17,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia92 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity2,
          'year' =>3,
          'value' => 2,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia93 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity3,
          'year' =>3,
          'value' => 7,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia94 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity5,
          'year' =>3,
          'value' => 85,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia96 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity6,
          'year' =>3,
          'value' => 53.45,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia97 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity7,
          'year' =>3,
          'value' => 100,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia98 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity8,
          'year' =>3,
          'value' => 35,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia99 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity9,
          'year' =>3,
          'value' => 43,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia100 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity10,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia101 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity11,
          'year' =>3,
          'value' => 0.7,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia102 = DB::getPdo()->lastInsertId(); 















         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity27,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia118 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity29,
          'year' =>3,
          'value' => 100,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia120 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity30,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia121 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity33,
          'year' =>3,
          'value' => 100,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia124 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity34,
          'year' =>3,
          'value' => 100,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia125 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity35,
          'year' =>3,
          'value' => 100,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia126 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity36,
          'year' =>3,
          'value' => 0.73,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia127 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity37,
          'year' =>3,
          'value' => 17.32,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia128 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity38,
          'year' =>3,
          'value' => 0.6,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia129 = DB::getPdo()->lastInsertId(); 



         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity42,
          'year' =>3,
          'value' => 40,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia133 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity43,
          'year' =>3,
          'value' => 233,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia134 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity44,
          'year' =>3,
          'value' => 233,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia135 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity45,
          'year' =>3,
          'value' => 233,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia136 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity46,
          'year' =>3,
          'value' => 5,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia137 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity47,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia138 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity48,
          'year' =>3,
          'value' => 446,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia139 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity49,
          'year' =>3,
          'value' => 446,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia140 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity50,
          'year' =>3,
          'value' => 446,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia141 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity52,
          'year' =>3,
          'value' => 5,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia143 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity53,
          'year' =>3,
          'value' => 40,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia144 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity54,
          'year' =>3,
          'value' => 128,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia145 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity55,
          'year' =>3,
          'value' => 128,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia146 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity56,
          'year' =>3,
          'value' => 128,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia147 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity57,
          'year' =>3,
          'value' => 700,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia148 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity58,
          'year' =>3,
          'value' => 5,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia149 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity59,
          'year' =>3,
          'value' => 0.46,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia150 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity60,
          'year' =>3,
          'value' => 0.2,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia151 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity1,
          'year' =>4,
          'value' => 2,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia152 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity2,
          'year' =>4,
          'value' => 2,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia153 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity3,
          'year' =>4,
          'value' => 10,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia154 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity5,
          'year' =>4,
          'value' => 88,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia156 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity6,
          'year' =>4,
          'value' => 75,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia157 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity7,
          'year' =>4,
          'value' => 73,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia158 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity8,
          'year' =>4,
          'value' => 100,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia159 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity9,
          'year' =>4,
          'value' => 69,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia160 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity11,
          'year' =>4,
          'value' => 0.7,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia162 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity12,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia163 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity13,
          'year' =>4,
          'value' => 2,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia164 = DB::getPdo()->lastInsertId(); 








         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity22,
          'year' =>4,
          'value' => 2.76,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia173 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity23,
          'year' =>4,
          'value' => 0.26,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia174 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity24,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia175 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity25,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia176 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity26,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia177 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity27,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia178 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity28,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia179 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity29,
          'year' =>4,
          'value' => 100,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia180 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity30,
          'year' =>4,
          'value' => 116100,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia181 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity33,
          'year' =>4,
          'value' => 100,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia184 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity34,
          'year' =>4,
          'value' => 100,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia185 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity35,
          'year' =>4,
          'value' => 100,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia186 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity36,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia187 = DB::getPdo()->lastInsertId(); 



         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity40,
          'year' =>4,
          'value' => 17,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia191 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity41,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia192 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity59,
          'year' =>4,
          'value' => 4.54,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia210 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity60,
          'year' =>4,
          'value' => 6.8,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia211 = DB::getPdo()->lastInsertId(); 
          
          DB::table('financing_sources')->insert([
            'father_id' => 11,
            'code' => '1.1.1.1.1.1.1.1',
            'name' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
            'description' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 32,
            ]);
            $idFuente1 = DB::getPdo()->lastInsertId();
            
          DB::table('financing_sources')->insert([
            'father_id' => 58,
            'code' => '1.1.2.2.2.1.1',
            'name' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
            'description' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 32,
            ]);
            $idFuente2 = DB::getPdo()->lastInsertId();
            
          DB::table('financing_sources')->insert([
            'father_id' => 27,
            'code' => '1.1.2.1.1.1.1.1',
            'name' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia actual)',
            'description' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia actual)',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 32,
            ]);
            $idFuente3 = DB::getPdo()->lastInsertId();
            
          DB::table('financing_sources')->insert([
            'father_id' => 208,
            'code' => '1.2.5.1.3',
            'name' => 'Otros Convenios',
            'description' => 'Otros Convenios',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 32,
            ]);
            $idFuente4 = DB::getPdo()->lastInsertId();
             
     DB::table('financing_sources')->insert([
      'father_id' => 3,
      'code' => '1.1.1.2',
      'name' => 'Otros Aportes de Otras Entidades',
      'description' => 'Otros Aportes de Otras Entidades',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 32,
      ]);
      $idFuente5 = DB::getPdo()->lastInsertId();
    
          DB::table('financing_sources')->insert([
            'father_id' => 42,
            'code' => '1.1.2.2.1.1.1.1',
            'name' => 'Tasa retributiva (vigencia actual)',
            'description' => 'Tasa retributiva (vigencia actual)',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 32,
            ]);
            $idFuente6 = DB::getPdo()->lastInsertId();
            
          DB::table('financing_sources')->insert([
            'father_id' => 45,
            'code' => '1.1.2.2.1.1.2.1',
            'name' => 'Tasa por el uso del agua (vigencia actual)',
            'description' => 'Tasa por el uso del agua (vigencia actual)',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 32,
            ]);
            $idFuente7 = DB::getPdo()->lastInsertId();
            
          DB::table('financing_sources')->insert([
            'father_id' => 48,
            'code' => '1.1.2.2.1.1.3.1',
            'name' => 'Tasa de aprovechamiento Forestal (vigencia actual)',
            'description' => 'Tasa de aprovechamiento Forestal (vigencia actual)',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 32,
            ]);
            $idFuente8 = DB::getPdo()->lastInsertId();
            
          DB::table('financing_sources')->insert([
            'father_id' => 84,
            'code' => '1.1.2.3.1.1.1',
            'name' => 'Multas ambientales (vigencia actual)',
            'description' => 'Multas ambientales (vigencia actual)',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 32,
            ]);
            $idFuente9 = DB::getPdo()->lastInsertId();
            
          DB::table('financing_sources')->insert([
            'father_id' => 79,
            'code' => '1.1.2.2.2.8.1',
            'name' => 'Otros servicios (vigencia actual)',
            'description' => 'Otros servicios (vigencia actual)',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 32,
            ]);
            $idFuente10 = DB::getPdo()->lastInsertId();
            
          DB::table('financing_sources')->insert([
            'father_id' => 145,
            'code' => '1.2.2.6',
            'name' => 'Rendimientos financieros',
            'description' => 'Rendimientos financieros',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 32,
            ]);
            $idFuente11 = DB::getPdo()->lastInsertId();
            
          DB::table('financing_sources')->insert([
            'father_id' => 145,
            'code' => '1.2.2.7',
            'name' => 'Excedentes financieros',
            'description' => 'Excedentes financieros',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 32,
            ]);
            $idFuente12 = DB::getPdo()->lastInsertId();
            
          DB::table('financing_sources')->insert([
            'father_id' => 241,
            'code' => '1.2.6.3.5',
            'name' => 'Recuperación de cartera Otras tasas',
            'description' => 'Recuperación de cartera Otras tasas',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 32,
            ]);
            $idFuente13 = DB::getPdo()->lastInsertId();
            
          DB::table('financing_sources')->insert([
            'father_id' => 119,
            'code' => '1.1.2.5.1.1.1.4',
            'name' => 'Aportes de la Nación Funcionamiento',
            'description' => 'Aportes de la Nación Funcionamiento',
            'type_id' => 23,
            'final_level' => true,
            'group_id' => 32,
            ]);
            $idFuente14 = DB::getPdo()->lastInsertId();
            
          DB::table('financing_sources')->insert([
            'father_id' => 118,
            'code' => '1.1.2.5.1.1.2',
            'name' => 'Aportes de la Nación para Inversión',
            'description' => 'Aportes de la Nación para Inversión',
            'type_id' => 23,
            'final_level' => true,
            'group_id' => 32,
            ]);
            $idFuente15 = DB::getPdo()->lastInsertId();
      
       DB::table('financing_sources')->insert([
      'father_id' => 125,
      'code' => '1.1.2.5.1.2.1.1',
      'name' => 'Aportes del FCA para Gastos de personal',
      'description' => 'Aportes del FCA para Gastos de personal',
      'type_id' => 25,
      'final_level' => true,
      'group_id' => 32,
      ]);
      $idFuente16 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 124,
      'code' => '1.1.2.5.1.2.2',
      'name' => 'Aportes inversión Fondo de Compensación Ambiental -FCA',
      'description' => 'Aportes inversión Fondo de Compensación Ambiental -FCA',
      'type_id' => 25,
      'final_level' => true,
      'group_id' => 32,
      ]);
      $idFuente17 = DB::getPdo()->lastInsertId();
       

            
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente1,
              'value' => 395824000,
              'functioning_percentage' => 40,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 60,
              'functioning' => 158329600,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 237494400,
              'year' => 1,
              ]);
              $idPlan1 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente2,
              'value' => 346224154,
              'functioning_percentage' => 90,
              'debt_service_percentage' => 0,
              'fund_percentage' => 10,
              'investment_percentage' => 0,
              'functioning' => 311601738.6,
              'debt_service' => 0,
              'fund' => 34622415.4,
              'investment' => 0,
              'year' => 1,
              ]);
              $idPlan2 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente6,
              'value' => 64897735,
              'functioning_percentage' => 100,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 0,
              'functioning' => 64897735,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 0,
              'year' => 1,
              ]);
              $idPlan6 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente7,
              'value' => 25823026,
              'functioning_percentage' => 90,
              'debt_service_percentage' => 0,
              'fund_percentage' => 10,
              'investment_percentage' => 0,
              'functioning' => 23240723.4,
              'debt_service' => 0,
              'fund' => 2582302.6,
              'investment' => 0,
              'year' => 1,
              ]);
              $idPlan7 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente8,
              'value' => 0,
              'functioning_percentage' => 0,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 0,
              'functioning' => 0,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 0,
              'year' => 1,
              ]);
              $idPlan8 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente9,
              'value' => 69133250,
              'functioning_percentage' => 7.463,
              'debt_service_percentage' => 0,
              'fund_percentage' => 2.123,
              'investment_percentage' => 90.414,
              'functioning' => 5159414.4475,
              'debt_service' => 0,
              'fund' => 1467698.8975,
              'investment' => 62506136.655,
              'year' => 1,
              ]);
              $idPlan9 = DB::getPdo()->lastInsertId();
              
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente13,
              'value' => 179097835,
              'functioning_percentage' => 90,
              'debt_service_percentage' => 0,
              'fund_percentage' => 10,
              'investment_percentage' => 0,
              'functioning' => 161188051.5,
              'debt_service' => 0,
              'fund' => 17909783.5,
              'investment' => 0,
              'year' => 1,
              ]);
              $idPlan13 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente14,
              'value' => 2867090295,
              'functioning_percentage' => 100,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 0,
              'functioning' => 2867090295,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 0,
              'year' => 1,
              ]);
              $idPlan14 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente15,
              'value' => 1890131565,
              'functioning_percentage' => 0,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 100,
              'functioning' => 0,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 1890131565,
              'year' => 1,
              ]);
              $idPlan15 = DB::getPdo()->lastInsertId();
              
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente1,
                'value' => 616916495,
                'functioning_percentage' => 30,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 70,
                'functioning' => 185074948.5,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 431841546.5,
                'year' => 2,
                ]);
                $idPlan16 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente2,
                'value' => 387590136,
                'functioning_percentage' => 90,
                'debt_service_percentage' => 0,
                'fund_percentage' => 10,
                'investment_percentage' => 0,
                'functioning' => 348831122.4,
                'debt_service' => 0,
                'fund' => 38759013.6,
                'investment' => 0,
                'year' => 2,
                ]);
                $idPlan17 = DB::getPdo()->lastInsertId();
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente6,
                'value' => 53954449,
                'functioning_percentage' => 90,
                'debt_service_percentage' => 0,
                'fund_percentage' => 10,
                'investment_percentage' => 0,
                'functioning' => 48559004.1,
                'debt_service' => 0,
                'fund' => 5395444.9,
                'investment' => 0,
                'year' => 2,
                ]);
                $idPlan21 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente7,
                'value' => 40000000,
                'functioning_percentage' => 90,
                'debt_service_percentage' => 0,
                'fund_percentage' => 10,
                'investment_percentage' => 0,
                'functioning' => 36000000,
                'debt_service' => 0,
                'fund' => 4000000,
                'investment' => 0,
                'year' => 2,
                ]);
                $idPlan22 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente8,
                'value' => 100000000,
                'functioning_percentage' => 90,
                'debt_service_percentage' => 0,
                'fund_percentage' => 10,
                'investment_percentage' => 0,
                'functioning' => 90000000,
                'debt_service' => 0,
                'fund' => 10000000,
                'investment' => 0,
                'year' => 2,
                ]);
                $idPlan23 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente9,
                'value' => 50000000,
                'functioning_percentage' => 64.804,
                'debt_service_percentage' => 0,
                'fund_percentage' => 7.544,
                'investment_percentage' => 27.652,
                'functioning' => 32402000,
                'debt_service' => 0,
                'fund' => 3772000,
                'investment' => 13826000,
                'year' => 2,
                ]);
                $idPlan24 = DB::getPdo()->lastInsertId();
                
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente11,
                'value' => 500000,
                'functioning_percentage' => 0,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 100,
                'functioning' => 0,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 500000,
                'year' => 2,
                ]);
                $idPlan26 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente13,
                'value' => 385673152,
                'functioning_percentage' => 100,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 0,
                'functioning' => 385673152,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 0,
                'year' => 2,
                ]);
                $idPlan28 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente14,
                'value' => 2779864171,
                'functioning_percentage' => 100,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 0,
                'functioning' => 2779864171,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 0,
                'year' => 2,
                ]);
                $idPlan29 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente15,
                'value' => 5742931119,
                'functioning_percentage' => 0,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 100,
                'functioning' => 0,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 5742931119,
                'year' => 2,
                ]);
                $idPlan30 = DB::getPdo()->lastInsertId();
                
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente1,
                  'value' => 650000000,
                  'functioning_percentage' => 100,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 0,
                  'functioning' => 650000000,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 0,
                  'year' => 3,
                  ]);
                  $idPlan31 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente2,
                  'value' => 350000000,
                  'functioning_percentage' => 0,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 10,
                  'investment_percentage' => 90,
                  'functioning' => 0,
                  'debt_service' => 0,
                  'fund' => 35000000,
                  'investment' => 315000000,
                  'year' => 3,
                  ]);
                  $idPlan32 = DB::getPdo()->lastInsertId();

                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente6,
                  'value' => 55000000,
                  'functioning_percentage' => 90,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 10,
                  'investment_percentage' => 0,
                  'functioning' => 49500000,
                  'debt_service' => 0,
                  'fund' => 5500000,
                  'investment' => 0,
                  'year' => 3,
                  ]);
                  $idPlan36 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente7,
                  'value' => 40000000,
                  'functioning_percentage' => 90,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 10,
                  'investment_percentage' => 0,
                  'functioning' => 36000000,
                  'debt_service' => 0,
                  'fund' => 4000000,
                  'investment' => 0,
                  'year' => 3,
                  ]);
                  $idPlan37 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente8,
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
                  $idPlan38 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente9,
                  'value' => 50000000,
                  'functioning_percentage' => 1.096,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 2,
                  'investment_percentage' => 96.904,
                  'functioning' => 548000,
                  'debt_service' => 0,
                  'fund' => 1000000,
                  'investment' => 48452000,
                  'year' => 3,
                  ]);
                  $idPlan39 = DB::getPdo()->lastInsertId();
                  
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente11,
                  'value' => 500000,
                  'functioning_percentage' => 0,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 100,
                  'functioning' => 0,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 500000,
                  'year' => 3,
                  ]);
                  $idPlan41 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente12,
                  'value' => 51041737,
                  'functioning_percentage' => 100,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 0,
                  'functioning' => 51041737,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 0,
                  'year' => 3,
                  ]);
                  $idPlan42 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente13,
                  'value' => 119910010,
                  'functioning_percentage' => 100,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 0,
                  'functioning' => 119910010,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 0,
                  'year' => 3,
                  ]);
                  $idPlan43 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente14,
                  'value' => 2406230000,
                  'functioning_percentage' => 100,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 0,
                  'functioning' => 2406230000,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 0,
                  'year' => 3,
                  ]);
                  $idPlan44 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente15,
                  'value' => 900000000,
                  'functioning_percentage' => 0,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 100,
                  'functioning' => 0,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 900000000,
                  'year' => 3,
                  ]);
                  $idPlan45 = DB::getPdo()->lastInsertId();
                  
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente1,
                    'value' => 655000000,
                    'functioning_percentage' => 100,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 0,
                    'functioning' => 655000000,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 0,
                    'year' => 4,
                    ]);
                    $idPlan46 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente2,
                    'value' => 380000000,
                    'functioning_percentage' => 20,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 10,
                    'investment_percentage' => 70,
                    'functioning' => 76000000,
                    'debt_service' => 0,
                    'fund' => 38000000,
                    'investment' => 266000000,
                    'year' => 4,
                    ]);
                    $idPlan47 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente6,
                    'value' => 130000000,
                    'functioning_percentage' => 100,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 0,
                    'functioning' => 130000000,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 0,
                    'year' => 4,
                    ]);
                    $idPlan51 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente7,
                    'value' => 165000000,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 100,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 165000000,
                    'year' => 4,
                    ]);
                    $idPlan52 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente8,
                    'value' => 18000000,
                    'functioning_percentage' => 30,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 10,
                    'investment_percentage' => 60,
                    'functioning' => 5400000,
                    'debt_service' => 0,
                    'fund' => 1800000,
                    'investment' => 10800000,
                    'year' => 4,
                    ]);
                    $idPlan53 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente9,
                    'value' => 600000,
                    'functioning_percentage' => 15.6,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 51.1,
                    'investment_percentage' => 33.3,
                    'functioning' => 93600,
                    'debt_service' => 0,
                    'fund' => 306600,
                    'investment' => 199800,
                    'year' => 4,
                    ]);
                    $idPlan54 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente11,
                    'value' => 50000,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 100,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 50000,
                    'year' => 4,
                    ]);
                    $idPlan56 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente12,
                    'value' => 0,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 0,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 0,
                    'year' => 4,
                    ]);
                    $idPlan57 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente13,
                    'value' => 329500000,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 10,
                    'investment_percentage' => 90,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 32950000,
                    'investment' => 296550000,
                    'year' => 4,
                    ]);
                    $idPlan58 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente14,
                    'value' => 2483848000,
                    'functioning_percentage' => 100,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 0,
                    'functioning' => 2483848000,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 0,
                    'year' => 4,
                    ]);
                    $idPlan59 = DB::getPdo()->lastInsertId();
          
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente15,
                    'value' => 1620690286,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 100,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 1620690286,
                    'year' => 4,
                    ]);
                    $idPlan60 = DB::getPdo()->lastInsertId();
                 
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente16,
          'value' => 514769414,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 514769414,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan64 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente17,
          'value' => 3077335776,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 3077335776,
          'year' => 3,
          ]);
          $idPlan61 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente16,
          'value' => 603530497,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 603530497,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 4,
          ]);
          $idPlan62 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente17,
          'value' => 1641267958,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 1641267958,
          'year' => 4,
          ]);
          $idPlan63 = DB::getPdo()->lastInsertId();
           
         
         DB::table('implementations')->insert([
                      'p_a_i_s_id'=>$idpai1,
                      ]);
                      $idImplementation1 = DB::getPdo()->lastInsertId();
          
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 468254175,
                      'financial_plans_id' => $idPlan1,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo1 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 346224154,
                      'financial_plans_id' => $idPlan2,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo2 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 64897735,
                      'financial_plans_id' => $idPlan6,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo6 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 44560046,
                      'financial_plans_id' => $idPlan7,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo7 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 0,
                      'financial_plans_id' => $idPlan8,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo8 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 56000000,
                      'financial_plans_id' => $idPlan9,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo9 = DB::getPdo()->lastInsertId();

                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 179097835,
                      'financial_plans_id' => $idPlan13,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo13 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 1985665966,
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
                        'date' => '2017-12-31',
                        'value' => 636484865,
                        'financial_plans_id' => $idPlan16,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo16 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 458936751,
                        'financial_plans_id' => $idPlan17,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo17 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 53954449,
                        'financial_plans_id' => $idPlan21,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo21 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 27198334,
                        'financial_plans_id' => $idPlan22,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo22 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 80286084,
                        'financial_plans_id' => $idPlan23,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo23 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 0,
                        'financial_plans_id' => $idPlan24,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo24 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 428621788,
                        'financial_plans_id' => $idPlan28,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo28 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 2259373364,
                        'financial_plans_id' => $idPlan29,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo29 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 1085287800,
                        'financial_plans_id' => $idPlan30,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo30 = DB::getPdo()->lastInsertId();
                        
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 500549644,
                          'financial_plans_id' => $idPlan31,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo31 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 379315171,
                          'financial_plans_id' => $idPlan32,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo32 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 12604624,
                          'financial_plans_id' => $idPlan36,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo36 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 2758250,
                          'financial_plans_id' => $idPlan37,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo37 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 13649531,
                          'financial_plans_id' => $idPlan38,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo38 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 0,
                          'financial_plans_id' => $idPlan39,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo39 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 51041737,
                          'financial_plans_id' => $idPlan42,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo42 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 87309961,
                          'financial_plans_id' => $idPlan43,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo43 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 2391960006,
                          'financial_plans_id' => $idPlan44,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo44 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 639000000,
                          'financial_plans_id' => $idPlan45,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo45 = DB::getPdo()->lastInsertId();
                          
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 749120863,
                            'financial_plans_id' => $idPlan46,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo46 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 372236586,
                            'financial_plans_id' => $idPlan47,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo47 = DB::getPdo()->lastInsertId();
                                                          
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 125462556,
                            'financial_plans_id' => $idPlan51,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo51 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 180635918,
                            'financial_plans_id' => $idPlan52,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo52 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 0,
                            'financial_plans_id' => $idPlan53,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo53 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 1170000,
                            'financial_plans_id' => $idPlan54,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo54 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 0,
                            'financial_plans_id' => $idPlan56,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo56 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 0,
                            'financial_plans_id' => $idPlan57,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo57 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 331251190.98,
                            'financial_plans_id' => $idPlan58,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo58 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 2476538070,
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
              'date' => '2018-12-31',
              'value' => 357271801,
              'financial_plans_id' => $idPlan64,
              'implementation_id' => $idImplementation1,
              ]);
              $idRecaudo64 = DB::getPdo()->lastInsertId();
               
             DB::table('fundraisings')->insert([
              'date' => '2018-12-31',
              'value' => 2160405072,
              'financial_plans_id' => $idPlan61,
              'implementation_id' => $idImplementation1,
              ]);
              $idRecaudo61 = DB::getPdo()->lastInsertId();
               
             DB::table('fundraisings')->insert([
              'date' => '2019-12-31',
              'value' => 368055992,
              'financial_plans_id' => $idPlan62,
              'implementation_id' => $idImplementation1,
              ]);
              $idRecaudo62 = DB::getPdo()->lastInsertId();
               
             DB::table('fundraisings')->insert([
              'date' => '2019-12-31',
              'value' => 1854481705,
              'financial_plans_id' => $idPlan63,
              'implementation_id' => $idImplementation1,
              ]);
              $idRecaudo63 = DB::getPdo()->lastInsertId();
               

                            
              DB::table('cost_sources')->insert([
              'father_id' => 2,
              'code' => '2.1.1',
              'name' => 'GASTOS DE PERSONAL',
              'description' => 'GASTOS DE PERSONAL',
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'group_id' => 32,
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
              'group_id' => 32,
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
              'group_id' => 32,
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
              'group_id' => 32,
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
              'group_id' => 32,
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
              'group_id' => 32,
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
              'group_id' => 32,
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
              'group_id' => 32,
              ]);
              $idFuenteGasto4 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 150000000,
              'value_comitted' => 142135070,
              'value_paid' => 109879379,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto1,
              'p_a_i_id' => $idpai1,
              'group_id' => 32,
              ]);
              $idGasto1 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 402520402,
              'value_comitted' => 346131081,
              'value_paid' => 286161755,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto2,
              'p_a_i_id' => $idpai1,
              'group_id' => 32,
              ]);
              $idGasto2 = DB::getPdo()->lastInsertId();
              
               

             DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 12297056,
              'value_comitted' => 9183467,
              'value_paid' => 9183467,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto4,
              'p_a_i_id' => $idpai1,
              'group_id' => 32,
              ]);
              $idGasto3 = DB::getPdo()->lastInsertId();
              
               

             DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 57182542,
              'value_comitted' => 52420636,
              'value_paid' => 34924014,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => FALSE,
              'compensation' => TRUE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto6,
              'p_a_i_id' => $idpai1,
              'group_id' => 32,
              ]);
              $idGasto4 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 2099877618,
              'value_comitted' => 2097243085,
              'value_paid' => 1904259496,
              'own' => FALSE,
              'nation' => TRUE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto1,
              'p_a_i_id' => $idpai1,
              'group_id' => 32,
              ]);
              $idGasto5 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 324280981,
              'value_comitted' => 323873301,
              'value_paid' => 313306418,
              'own' => FALSE,
              'nation' => TRUE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto2,
              'p_a_i_id' => $idpai1,
              'group_id' => 32,
              ]);
              $idGasto6 = DB::getPdo()->lastInsertId();
              
               


             DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 6303000,
              'value_comitted' => 6075644,
              'value_paid' => 6075644,
              'own' => FALSE,
              'nation' => TRUE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto5,
              'p_a_i_id' => $idpai1,
              'group_id' => 32,
              ]);
              $idGasto7 = DB::getPdo()->lastInsertId();
              
               


             DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 436628696,
              'value_comitted' => 436628696,
              'value_paid' => 436628696,
              'own' => FALSE,
              'nation' => TRUE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto8,
              'p_a_i_id' => $idpai1,
              'group_id' => 32,
              ]);
              $idGasto8 = DB::getPdo()->lastInsertId();
              
               
               DB::table('financial_costs')->insert([
              'year' => 2,
              'value_bugeted' => 192251667,
              'value_comitted' => 183186606,
              'value_paid' => 183186606,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto1,
              'p_a_i_id' => $idpai1,
              'group_id' => 32,
              ]);
              $idGasto9 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 2,
              'value_bugeted' => 385633912,
              'value_comitted' => 358014254,
              'value_paid' => 310935651,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto2,
              'p_a_i_id' => $idpai1,
              'group_id' => 32,
              ]);
              $idGasto10 = DB::getPdo()->lastInsertId();
              
               

             DB::table('financial_costs')->insert([
              'year' => 2,
              'value_bugeted' => 15000000,
              'value_comitted' => 6322383,
              'value_paid' => 6322383,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto4,
              'p_a_i_id' => $idpai1,
              'group_id' => 32,
              ]);
              $idGasto11 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 2,
              'value_bugeted' => 1000000,
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
              'group_id' => 32,
              ]);
              $idGasto12 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 2,
              'value_bugeted' => 62200000,
              'value_comitted' => 61418114,
              'value_paid' => 40525584,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => FALSE,
              'compensation' => TRUE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto6,
              'p_a_i_id' => $idpai1,
              'group_id' => 32,
              ]);
              $idGasto13 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 2,
              'value_bugeted' => 35114421,
              'value_comitted' => 35114421,
              'value_paid' => 35114421,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto7,
              'p_a_i_id' => $idpai1,
              'group_id' => 32,
              ]);
              $idGasto14 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 2,
              'value_bugeted' => 215000000,
              'value_comitted' => 215000000,
              'value_paid' => 50065279,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto8,
              'p_a_i_id' => $idpai1,
              'group_id' => 32,
              ]);
              $idGasto15 = DB::getPdo()->lastInsertId();
              
               DB::table('financial_costs')->insert([
              'year' => 2,
              'value_bugeted' => 2299959171,
              'value_comitted' => 2154239241,
              'value_paid' => 2080629319,
              'own' => FALSE,
              'nation' => TRUE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto1,
              'p_a_i_id' => $idpai1,
              'group_id' => 32,
              ]);
              $idGasto16 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 2,
              'value_bugeted' => 473602000,
              'value_comitted' => 391212601,
              'value_paid' => 184502883,
              'own' => FALSE,
              'nation' => TRUE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto2,
              'p_a_i_id' => $idpai1,
              'group_id' => 32,
              ]);
              $idGasto17 = DB::getPdo()->lastInsertId();
              
               


             DB::table('financial_costs')->insert([
              'year' => 2,
              'value_bugeted' => 6303000,
              'value_comitted' => 4882717,
              'value_paid' => 4882717,
              'own' => FALSE,
              'nation' => TRUE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto5,
              'p_a_i_id' => $idpai1,
              'group_id' => 32,
              ]);
              $idGasto18 = DB::getPdo()->lastInsertId();
               

             DB::table('financial_costs')->insert([
              'year' => 2,
              'value_bugeted' => 0,
              'value_comitted' => 0,
              'value_paid' => 0,
              'own' => FALSE,
              'nation' => TRUE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto8,
              'p_a_i_id' => $idpai1,
              'group_id' => 32,
              ]);
              $idGasto19 = DB::getPdo()->lastInsertId();
              
             DB::table('financial_costs')->insert([
              'year' => 3,
              'value_bugeted' => 288986876,
              'value_comitted' => 288986876,
              'value_paid' => 228883150,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto1,
              'p_a_i_id' => $idpai1,
              'group_id' => 32,
              ]);
              $idGasto20 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 3,
              'value_bugeted' => 392013124,
              'value_comitted' => 288482886,
              'value_paid' => 262272193,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto2,
              'p_a_i_id' => $idpai1,
              'group_id' => 32,
              ]);
              $idGasto21 = DB::getPdo()->lastInsertId();
              
               

             DB::table('financial_costs')->insert([
              'year' => 3,
              'value_bugeted' => 9000000,
              'value_comitted' => 4616850,
              'value_paid' => 4616850,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto4,
              'p_a_i_id' => $idpai1,
              'group_id' => 32,
              ]);
              $idGasto22 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 3,
              'value_bugeted' => 2517434,
              'value_comitted' => 2517434,
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
              'group_id' => 32,
              ]);
              $idGasto23 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 3,
              'value_bugeted' => 45720000,
              'value_comitted' => 38365968,
              'value_paid' => 29480062,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => FALSE,
              'compensation' => TRUE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto6,
              'p_a_i_id' => $idpai1,
              'group_id' => 32,
              ]);
              $idGasto24 = DB::getPdo()->lastInsertId();
              
               

             DB::table('financial_costs')->insert([
              'year' => 3,
              'value_bugeted' => 98482566,
              'value_comitted' => 75372138,
              'value_paid' => 75372138,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto8,
              'p_a_i_id' => $idpai1,
              'group_id' => 32,
              ]);
              $idGasto25 = DB::getPdo()->lastInsertId();
              
             DB::table('financial_costs')->insert([
              'year' => 3,
              'value_bugeted' => 2417027092,
              'value_comitted' => 2415407718,
              'value_paid' => 2414872486,
              'own' => FALSE,
              'nation' => TRUE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto1,
              'p_a_i_id' => $idpai1,
              'group_id' => 32,
              ]);
              $idGasto26 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 3,
              'value_bugeted' => 492972322,
              'value_comitted' => 487543886,
              'value_paid' => 334357321,
              'own' => FALSE,
              'nation' => TRUE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto2,
              'p_a_i_id' => $idpai1,
              'group_id' => 32,
              ]);
              $idGasto27 = DB::getPdo()->lastInsertId();
              
               


             DB::table('financial_costs')->insert([
              'year' => 3,
              'value_bugeted' => 11000000,
              'value_comitted' => 11000000,
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
              'group_id' => 32,
              ]);
              $idGasto28 = DB::getPdo()->lastInsertId();
              
             DB::table('financial_costs')->insert([
              'year' => 4,
              'value_bugeted' => 4000000,
              'value_comitted' => 4000000,
              'value_paid' => 4000000,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto2,
              'p_a_i_id' => $idpai1,
              'group_id' => 32,
              ]);
              $idGasto29 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 4,
              'value_bugeted' => 739826152,
              'value_comitted' => 738202331,
              'value_paid' => 726173743,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto3,
              'p_a_i_id' => $idpai1,
              'group_id' => 32,
              ]);
              $idGasto30 = DB::getPdo()->lastInsertId();
              
               

             DB::table('financial_costs')->insert([
              'year' => 4,
              'value_bugeted' => 1000000,
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
              'group_id' => 32,
              ]);
              $idGasto31 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 4,
              'value_bugeted' => 74056555,
              'value_comitted' => 74056555,
              'value_paid' => 74056555,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => FALSE,
              'compensation' => TRUE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto6,
              'p_a_i_id' => $idpai1,
              'group_id' => 32,
              ]);
              $idGasto32 = DB::getPdo()->lastInsertId();
              
               
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
              'group_id' => 32,
              ]);
              $idGasto33 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 4,
              'value_bugeted' => 101705000,
              'value_comitted' => 101704999.91,
              'value_paid' => 101704999.91,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto8,
              'p_a_i_id' => $idpai1,
              'group_id' => 32,
              ]);
              $idGasto34 = DB::getPdo()->lastInsertId();
              
             DB::table('financial_costs')->insert([
              'year' => 4,
              'value_bugeted' => 14687000,
              'value_comitted' => 14687000,
              'value_paid' => 14687000,
              'own' => FALSE,
              'nation' => TRUE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto5,
              'p_a_i_id' => $idpai1,
              'group_id' => 32,
              ]);
              $idGasto38 = DB::getPdo()->lastInsertId();
              
             DB::table('financial_costs')->insert([
              'year' => 4,
              'value_bugeted' => 53925864,
              'value_comitted' => 0,
              'value_paid' => 0,
              'own' => FALSE,
              'nation' => TRUE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto8,
              'p_a_i_id' => $idpai1,
              'group_id' => 32,
              ]);
              $idGasto39 = DB::getPdo()->lastInsertId();
              
                              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity1,
                'source_id' =>$idPlan1,
                'value' => 11000000,
                'goal' => 0,
                'evidence_balance' => 11000000,
                'age' => 1,
                ]);
                $idactivitySource1 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity2,
                'source_id' =>$idPlan9,
                'value' => 6002795,
                'goal' => 0,
                'evidence_balance' => 6002795,
                'age' => 1,
                ]);
                $idactivitySource2 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity3,
                'source_id' =>$idPlan1,
                'value' => 16000000,
                'goal' => 0,
                'evidence_balance' => 16000000,
                'age' => 1,
                ]);
                $idactivitySource3 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity5,
                'source_id' =>$idPlan1,
                'value' => 70000000,
                'goal' => 0,
                'evidence_balance' => 70000000,
                'age' => 1,
                ]);
                $idactivitySource4 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity6,
                'source_id' =>$idPlan1,
                'value' => 68200000,
                'goal' => 0,
                'evidence_balance' => 68200000,
                'age' => 1,
                ]);
                $idactivitySource5 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity7,
                'source_id' =>$idPlan1,
                'value' => 1329990,
                'goal' => 0,
                'evidence_balance' => 1329990,
                'age' => 1,
                ]);
                $idactivitySource6 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity9,
                'source_id' =>$idPlan1,
                'value' => 34600000,
                'goal' => 0,
                'evidence_balance' => 34600000,
                'age' => 1,
                ]);
                $idactivitySource7 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity10,
                'source_id' =>$idPlan9,
                'value' => 7200000,
                'goal' => 0,
                'evidence_balance' => 7200000,
                'age' => 1,
                ]);
                $idactivitySource8 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity11,
                'source_id' =>$idPlan1,
                'value' => 37600000,
                'goal' => 0,
                'evidence_balance' => 37600000,
                'age' => 1,
                ]);
                $idactivitySource9 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity12,
                'source_id' =>$idPlan9,
                'value' => 4703139,
                'goal' => 0,
                'evidence_balance' => 4703139,
                'age' => 1,
                ]);
                $idactivitySource10 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity30,
                'source_id' =>$idPlan9,
                'value' => 9788751,
                'goal' => 0,
                'evidence_balance' => 9788751,
                'age' => 1,
                ]);
                $idactivitySource15 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity33,
                'source_id' =>$idPlan1,
                'value' => 94400,
                'goal' => 0,
                'evidence_balance' => 94400,
                'age' => 1,
                ]);
                $idactivitySource16 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity34,
                'source_id' =>$idPlan9,
                'value' => 10000000,
                'goal' => 0,
                'evidence_balance' => 10000000,
                'age' => 1,
                ]);
                $idactivitySource17 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity35,
                'source_id' =>$idPlan9,
                'value' => 8255560,
                'goal' => 0,
                'evidence_balance' => 8255560,
                'age' => 1,
                ]);
                $idactivitySource18 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity39,
                'source_id' =>$idPlan9,
                'value' => 5319765,
                'goal' => 0,
                'evidence_balance' => 5319765,
                'age' => 1,
                ]);
                $idactivitySource19 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity33,
                  'source_id' =>$idPlan9,
                  'value' => 9905600,
                  'goal' => 0,
                  'evidence_balance' => 9905600,
                  'age' => 1,
                  ]);
                  $idactivitySource20 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia1,
                    'activity_source_id' =>$idactivitySource1,
                    'value' => 10972364,
                    ]);
                    $idevidenceFinancial1 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia2,
                    'activity_source_id' =>$idactivitySource2,
                    'value' => 1200000,
                    ]);
                    $idevidenceFinancial2 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia3,
                    'activity_source_id' =>$idactivitySource3,
                    'value' => 15890431,
                    ]);
                    $idevidenceFinancial3 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia5,
                    'activity_source_id' =>$idactivitySource4,
                    'value' => 69944234,
                    ]);
                    $idevidenceFinancial4 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia6,
                    'activity_source_id' =>$idactivitySource5,
                    'value' => 68166882,
                    ]);
                    $idevidenceFinancial5 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia7,
                    'activity_source_id' =>$idactivitySource6,
                    'value' => 4958647,
                    ]);
                    $idevidenceFinancial6 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia9,
                    'activity_source_id' =>$idactivitySource7,
                    'value' => 34521769,
                    ]);
                    $idevidenceFinancial7 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia10,
                    'activity_source_id' =>$idactivitySource8,
                    'value' => 7200000,
                    ]);
                    $idevidenceFinancial8 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia11,
                    'activity_source_id' =>$idactivitySource9,
                    'value' => 37572616,
                    ]);
                    $idevidenceFinancial9 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia12,
                    'activity_source_id' =>$idactivitySource10,
                    'value' => 11680523,
                    ]);
                    $idevidenceFinancial10 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia30,
                    'activity_source_id' =>$idactivitySource15,
                    'value' => 4998926,
                    ]);
                    $idevidenceFinancial15 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia33,
                    'activity_source_id' =>$idactivitySource16,
                    'value' => 94400,
                    ]);
                    $idevidenceFinancial16 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia34,
                    'activity_source_id' =>$idactivitySource17,
                    'value' => 11410610,
                    ]);
                    $idevidenceFinancial17 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia35,
                    'activity_source_id' =>$idactivitySource18,
                    'value' => 2916666,
                    ]);
                    $idevidenceFinancial18 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia39,
                    'activity_source_id' =>$idactivitySource19,
                    'value' => 3016027,
                    ]);
                    $idevidenceFinancial19 = DB::getPdo()->lastInsertId();
                    
                    
                    
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia33,
                      'activity_source_id' =>$idactivitySource20,
                      'value' => 18298877,
                      ]);
                      $idevidenceFinancial20 = DB::getPdo()->lastInsertId();
                      
                      
                      
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity1,
                        'source_id' =>$idPlan38,
                        'value' => 11000000,
                        'goal' => 0,
                        'evidence_balance' => 11000000,
                        'age' => 3,
                        ]);
                        $idactivitySource21 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity2,
                        'source_id' =>$idPlan39,
                        'value' => 6002795,
                        'goal' => 0,
                        'evidence_balance' => 6002795,
                        'age' => 3,
                        ]);
                        $idactivitySource22 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity3,
                        'source_id' =>$idPlan38,
                        'value' => 16000000,
                        'goal' => 0,
                        'evidence_balance' => 16000000,
                        'age' => 3,
                        ]);
                        $idactivitySource23 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity5,
                        'source_id' =>$idPlan32,
                        'value' => 106013913,
                        'goal' => 0,
                        'evidence_balance' => 106013913,
                        'age' => 3,
                        ]);
                        $idactivitySource24 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity6,
                        'source_id' =>$idPlan32,
                        'value' => 106013912,
                        'goal' => 0,
                        'evidence_balance' => 106013912,
                        'age' => 3,
                        ]);
                        $idactivitySource25 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity7,
                        'source_id' =>$idPlan38,
                        'value' => 20000000,
                        'goal' => 0,
                        'evidence_balance' => 20000000,
                        'age' => 3,
                        ]);
                        $idactivitySource26 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity8,
                        'source_id' =>$idPlan38,
                        'value' => 20763516,
                        'goal' => 0,
                        'evidence_balance' => 20763516,
                        'age' => 3,
                        ]);
                        $idactivitySource27 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity9,
                        'source_id' =>$idPlan32,
                        'value' => 46469036,
                        'goal' => 0,
                        'evidence_balance' => 46469036,
                        'age' => 3,
                        ]);
                        $idactivitySource28 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity11,
                        'source_id' =>$idPlan32,
                        'value' => 56503139,
                        'goal' => 0,
                        'evidence_balance' => 56503139,
                        'age' => 3,
                        ]);
                        $idactivitySource30 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity27,
                        'source_id' =>$idPlan38,
                        'value' => 10000000,
                        'goal' => 0,
                        'evidence_balance' => 10000000,
                        'age' => 3,
                        ]);
                        $idactivitySource31 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity30,
                        'source_id' =>$idPlan38,
                        'value' => 15000000,
                        'goal' => 0,
                        'evidence_balance' => 15000000,
                        'age' => 3,
                        ]);
                        $idactivitySource33 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity33,
                        'source_id' =>$idPlan38,
                        'value' => 4691608,
                        'goal' => 0,
                        'evidence_balance' => 4691608,
                        'age' => 3,
                        ]);
                        $idactivitySource34 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity34,
                        'source_id' =>$idPlan39,
                        'value' => 10000000,
                        'goal' => 0,
                        'evidence_balance' => 10000000,
                        'age' => 3,
                        ]);
                        $idactivitySource35 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity35,
                        'source_id' =>$idPlan39,
                        'value' => 8255560,
                        'goal' => 0,
                        'evidence_balance' => 8255560,
                        'age' => 3,
                        ]);
                        $idactivitySource36 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity36,
                        'source_id' =>$idPlan61,
                        'value' => 741515000,
                        'goal' => 0,
                        'evidence_balance' => 741515000,
                        'age' => 3,
                        ]);
                        $idactivitySource37 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity37,
                        'source_id' =>$idPlan61,
                        'value' => 662818000,
                        'goal' => 0,
                        'evidence_balance' => 662818000,
                        'age' => 3,
                        ]);
                        $idactivitySource38 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity38,
                        'source_id' =>$idPlan45,
                        'value' => 370308258,
                        'goal' => 0,
                        'evidence_balance' => 370308258,
                        'age' => 3,
                        ]);
                        $idactivitySource39 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity53,
                        'source_id' =>$idPlan45,
                        'value' => 107378656,
                        'goal' => 0,
                        'evidence_balance' => 107378656,
                        'age' => 3,
                        ]);
                        $idactivitySource40 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity54,
                        'source_id' =>$idPlan61,
                        'value' => 590618883,
                        'goal' => 0,
                        'evidence_balance' => 590618883,
                        'age' => 3,
                        ]);
                        $idactivitySource41 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity55,
                        'source_id' =>$idPlan45,
                        'value' => 188637461,
                        'goal' => 0,
                        'evidence_balance' => 188637461,
                        'age' => 3,
                        ]);
                        $idactivitySource42 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity56,
                        'source_id' =>$idPlan39,
                        'value' => 5200000,
                        'goal' => 0,
                        'evidence_balance' => 5200000,
                        'age' => 3,
                        ]);
                        $idactivitySource43 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity57,
                        'source_id' =>$idPlan39,
                        'value' => 3216961,
                        'goal' => 0,
                        'evidence_balance' => 3216961,
                        'age' => 3,
                        ]);
                        $idactivitySource44 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity58,
                        'source_id' =>$idPlan39,
                        'value' => 2468292,
                        'goal' => 0,
                        'evidence_balance' => 2468292,
                        'age' => 3,
                        ]);
                        $idactivitySource45 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity59,
                        'source_id' =>$idPlan61,
                        'value' => 232384228,
                        'goal' => 0,
                        'evidence_balance' => 232384228,
                        'age' => 3,
                        ]);
                        $idactivitySource46 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity60,
                        'source_id' =>$idPlan61,
                        'value' => 849999665,
                        'goal' => 0,
                        'evidence_balance' => 849999665,
                        'age' => 3,
                        ]);
                        $idactivitySource47 = DB::getPdo()->lastInsertId();
                        
                        
                        
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity9,
                          'source_id' =>$idPlan38,
                          'value' => 2544876,
                          'goal' => 0,
                          'evidence_balance' => 2544876,
                          'age' => 3,
                          ]);
                          $idactivitySource48 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity33,
                          'source_id' =>$idPlan39,
                          'value' => 5308392,
                          'goal' => 0,
                          'evidence_balance' => 5308392,
                          'age' => 3,
                          ]);
                          $idactivitySource49 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity58,
                          'source_id' =>$idPlan62,
                          'value' => 1031708,
                          'goal' => 0,
                          'evidence_balance' => 1031708,
                          'age' => 3,
                          ]);
                          $idactivitySource50 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity59,
                          'source_id' =>$idPlan45,
                          'value' => 233675625,
                          'goal' => 0,
                          'evidence_balance' => 233675625,
                          'age' => 3,
                          ]);
                          $idactivitySource51 = DB::getPdo()->lastInsertId();
                          
                          
                          
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia92,
                            'activity_source_id' =>$idactivitySource21,
                            'value' => 10873017,
                            ]);
                            $idevidenceFinancial21 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia93,
                            'activity_source_id' =>$idactivitySource22,
                            'value' => 5985435,
                            ]);
                            $idevidenceFinancial22 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia94,
                            'activity_source_id' =>$idactivitySource23,
                            'value' => 15869709,
                            ]);
                            $idevidenceFinancial23 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia96,
                            'activity_source_id' =>$idactivitySource24,
                            'value' => 104537098,
                            ]);
                            $idevidenceFinancial24 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia97,
                            'activity_source_id' =>$idactivitySource25,
                            'value' => 105236018,
                            ]);
                            $idevidenceFinancial25 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia98,
                            'activity_source_id' =>$idactivitySource26,
                            'value' => 18866721,
                            ]);
                            $idevidenceFinancial26 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia99,
                            'activity_source_id' =>$idactivitySource27,
                            'value' => 20608928,
                            ]);
                            $idevidenceFinancial27 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia100,
                            'activity_source_id' =>$idactivitySource28,
                            'value' => 43290681,
                            ]);
                            $idevidenceFinancial28 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia102,
                            'activity_source_id' =>$idactivitySource30,
                            'value' => 44890629,
                            ]);
                            $idevidenceFinancial30 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia118,
                            'activity_source_id' =>$idactivitySource31,
                            'value' => 3479291,
                            ]);
                            $idevidenceFinancial31 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia121,
                            'activity_source_id' =>$idactivitySource33,
                            'value' => 14779928,
                            ]);
                            $idevidenceFinancial33 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia124,
                            'activity_source_id' =>$idactivitySource34,
                            'value' => 4691608,
                            ]);
                            $idevidenceFinancial34 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia125,
                            'activity_source_id' =>$idactivitySource35,
                            'value' => 9997108,
                            ]);
                            $idevidenceFinancial35 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia126,
                            'activity_source_id' =>$idactivitySource36,
                            'value' => 8216966,
                            ]);
                            $idevidenceFinancial36 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia127,
                            'activity_source_id' =>$idactivitySource37,
                            'value' => 740150000,
                            ]);
                            $idevidenceFinancial37 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia128,
                            'activity_source_id' =>$idactivitySource38,
                            'value' => 662643796,
                            ]);
                            $idevidenceFinancial38 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia129,
                            'activity_source_id' =>$idactivitySource39,
                            'value' => 368108258,
                            ]);
                            $idevidenceFinancial39 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia144,
                            'activity_source_id' =>$idactivitySource40,
                            'value' => 108826695,
                            ]);
                            $idevidenceFinancial40 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia145,
                            'activity_source_id' =>$idactivitySource41,
                            'value' => 590618883,
                            ]);
                            $idevidenceFinancial41 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia146,
                            'activity_source_id' =>$idactivitySource42,
                            'value' => 188637461,
                            ]);
                            $idevidenceFinancial42 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia147,
                            'activity_source_id' =>$idactivitySource43,
                            'value' => 5200000,
                            ]);
                            $idevidenceFinancial43 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia148,
                            'activity_source_id' =>$idactivitySource44,
                            'value' => 3216937,
                            ]);
                            $idevidenceFinancial44 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia149,
                            'activity_source_id' =>$idactivitySource45,
                            'value' => 2468292,
                            ]);
                            $idevidenceFinancial45 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia150,
                            'activity_source_id' =>$idactivitySource46,
                            'value' => 232384228,
                            ]);
                            $idevidenceFinancial46 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia151,
                            'activity_source_id' =>$idactivitySource47,
                            'value' => 909996931,
                            ]);
                            $idevidenceFinancial47 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia124,
                              'activity_source_id' =>$idactivitySource49,
                              'value' => 5308392,
                              ]);
                              $idevidenceFinancial49 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia149,
                              'activity_source_id' =>$idactivitySource50,
                              'value' => 1031708,
                              ]);
                              $idevidenceFinancial50 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia150,
                              'activity_source_id' =>$idactivitySource51,
                              'value' => 173445120,
                              ]);
                              $idevidenceFinancial51 = DB::getPdo()->lastInsertId();
                              
                              
                              
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity1,
                                'source_id' =>$idPlan47,
                                'value' => 11000000,
                                'goal' => 0,
                                'evidence_balance' => 11000000,
                                'age' => 4,
                                ]);
                                $idactivitySource52 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity2,
                                'source_id' =>$idPlan52,
                                'value' => 6002795,
                                'goal' => 0,
                                'evidence_balance' => 6002795,
                                'age' => 4,
                                ]);
                                $idactivitySource53 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity3,
                                'source_id' =>$idPlan47,
                                'value' => 15068253,
                                'goal' => 0,
                                'evidence_balance' => 15068253,
                                'age' => 4,
                                ]);
                                $idactivitySource54 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity5,
                                'source_id' =>$idPlan58,
                                'value' => 105013913,
                                'goal' => 0,
                                'evidence_balance' => 105013913,
                                'age' => 4,
                                ]);
                                $idactivitySource55 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity6,
                                'source_id' =>$idPlan58,
                                'value' => 68171087,
                                'goal' => 0,
                                'evidence_balance' => 68171087,
                                'age' => 4,
                                ]);
                                $idactivitySource56 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity7,
                                'source_id' =>$idPlan47,
                                'value' => 60000000,
                                'goal' => 0,
                                'evidence_balance' => 60000000,
                                'age' => 4,
                                ]);
                                $idactivitySource57 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity8,
                                'source_id' =>$idPlan47,
                                'value' => 20763516,
                                'goal' => 0,
                                'evidence_balance' => 20763516,
                                'age' => 4,
                                ]);
                                $idactivitySource58 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity9,
                                'source_id' =>$idPlan47,
                                'value' => 42013912,
                                'goal' => 0,
                                'evidence_balance' => 42013912,
                                'age' => 4,
                                ]);
                                $idactivitySource59 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity11,
                                'source_id' =>$idPlan47,
                                'value' => 30000000,
                                'goal' => 0,
                                'evidence_balance' => 30000000,
                                'age' => 4,
                                ]);
                                $idactivitySource60 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity13,
                                'source_id' =>$idPlan47,
                                'value' => 10000000,
                                'goal' => 0,
                                'evidence_balance' => 10000000,
                                'age' => 4,
                                ]);
                                $idactivitySource62 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity22,
                                'source_id' =>$idPlan63,
                                'value' => 872165368,
                                'goal' => 0,
                                'evidence_balance' => 872165368,
                                'age' => 4,
                                ]);
                                $idactivitySource63 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity23,
                                'source_id' =>$idPlan60,
                                'value' => 672604722,
                                'goal' => 0,
                                'evidence_balance' => 672604722,
                                'age' => 4,
                                ]);
                                $idactivitySource64 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity24,
                                'source_id' =>$idPlan60,
                                'value' => 637965986,
                                'goal' => 0,
                                'evidence_balance' => 637965986,
                                'age' => 4,
                                ]);
                                $idactivitySource65 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity25,
                                'source_id' =>$idPlan63,
                                'value' => 769102590,
                                'goal' => 0,
                                'evidence_balance' => 769102590,
                                'age' => 4,
                                ]);
                                $idactivitySource66 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity26,
                                'source_id' =>$idPlan47,
                                'value' => 15000000,
                                'goal' => 0,
                                'evidence_balance' => 15000000,
                                'age' => 4,
                                ]);
                                $idactivitySource67 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity27,
                                'source_id' =>$idPlan47,
                                'value' => 55934,
                                'goal' => 0,
                                'evidence_balance' => 55934,
                                'age' => 4,
                                ]);
                                $idactivitySource68 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity28,
                                'source_id' =>$idPlan52,
                                'value' => 10000000,
                                'goal' => 0,
                                'evidence_balance' => 10000000,
                                'age' => 4,
                                ]);
                                $idactivitySource69 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity29,
                                'source_id' =>$idPlan52,
                                'value' => 10000000,
                                'goal' => 0,
                                'evidence_balance' => 10000000,
                                'age' => 4,
                                ]);
                                $idactivitySource70 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity30,
                                'source_id' =>$idPlan52,
                                'value' => 5000000,
                                'goal' => 0,
                                'evidence_balance' => 5000000,
                                'age' => 4,
                                ]);
                                $idactivitySource71 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity33,
                                'source_id' =>$idPlan52,
                                'value' => 10000000,
                                'goal' => 0,
                                'evidence_balance' => 10000000,
                                'age' => 4,
                                ]);
                                $idactivitySource72 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity34,
                                'source_id' =>$idPlan52,
                                'value' => 10000000,
                                'goal' => 0,
                                'evidence_balance' => 10000000,
                                'age' => 4,
                                ]);
                                $idactivitySource73 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity35,
                                'source_id' =>$idPlan47,
                                'value' => 8255560,
                                'goal' => 0,
                                'evidence_balance' => 8255560,
                                'age' => 4,
                                ]);
                                $idactivitySource74 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity36,
                                'source_id' =>$idPlan58,
                                'value' => 123365000,
                                'goal' => 0,
                                'evidence_balance' => 123365000,
                                'age' => 4,
                                ]);
                                $idactivitySource75 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity40,
                                'source_id' =>$idPlan60,
                                'value' => 102000000,
                                'goal' => 0,
                                'evidence_balance' => 102000000,
                                'age' => 4,
                                ]);
                                $idactivitySource76 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity41,
                                'source_id' =>$idPlan60,
                                'value' => 124272026,
                                'goal' => 0,
                                'evidence_balance' => 124272026,
                                'age' => 4,
                                ]);
                                $idactivitySource77 = DB::getPdo()->lastInsertId();
                                
                                
                                
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity6,
                                  'source_id' =>$idPlan47,
                                  'value' => 53842825,
                                  'goal' => 0,
                                  'evidence_balance' => 53842825,
                                  'age' => 4,
                                  ]);
                                  $idactivitySource78 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity25,
                                  'source_id' =>$idPlan60,
                                  'value' => 83847552,
                                  'goal' => 0,
                                  'evidence_balance' => 83847552,
                                  'age' => 4,
                                  ]);
                                  $idactivitySource79 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity27,
                                  'source_id' =>$idPlan52,
                                  'value' => 11944066,
                                  'goal' => 0,
                                  'evidence_balance' => 11944066,
                                  'age' => 4,
                                  ]);
                                  $idactivitySource80 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia152,
                                    'activity_source_id' =>$idactivitySource52,
                                    'value' => 5953498,
                                    ]);
                                    $idevidenceFinancial52 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia153,
                                    'activity_source_id' =>$idactivitySource53,
                                    'value' => 1000278,
                                    ]);
                                    $idevidenceFinancial53 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia154,
                                    'activity_source_id' =>$idactivitySource54,
                                    'value' => 10282340,
                                    ]);
                                    $idevidenceFinancial54 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia156,
                                    'activity_source_id' =>$idactivitySource55,
                                    'value' => 70151547,
                                    ]);
                                    $idevidenceFinancial55 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia157,
                                    'activity_source_id' =>$idactivitySource56,
                                    'value' => 68171087,
                                    ]);
                                    $idevidenceFinancial56 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia158,
                                    'activity_source_id' =>$idactivitySource57,
                                    'value' => 61608511,
                                    ]);
                                    $idevidenceFinancial57 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia159,
                                    'activity_source_id' =>$idactivitySource58,
                                    'value' => 18834821,
                                    ]);
                                    $idevidenceFinancial58 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia160,
                                    'activity_source_id' =>$idactivitySource59,
                                    'value' => 59958724,
                                    ]);
                                    $idevidenceFinancial59 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia162,
                                    'activity_source_id' =>$idactivitySource60,
                                    'value' => 24977401,
                                    ]);
                                    $idevidenceFinancial60 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia164,
                                    'activity_source_id' =>$idactivitySource62,
                                    'value' => 1733280,
                                    ]);
                                    $idevidenceFinancial62 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia173,
                                    'activity_source_id' =>$idactivitySource63,
                                    'value' => 672509292,
                                    ]);
                                    $idevidenceFinancial63 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia174,
                                    'activity_source_id' =>$idactivitySource64,
                                    'value' => 872165368,
                                    ]);
                                    $idevidenceFinancial64 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia175,
                                    'activity_source_id' =>$idactivitySource65,
                                    'value' => 637793778,
                                    ]);
                                    $idevidenceFinancial65 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia176,
                                    'activity_source_id' =>$idactivitySource66,
                                    'value' => 769102590,
                                    ]);
                                    $idevidenceFinancial66 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia177,
                                    'activity_source_id' =>$idactivitySource67,
                                    'value' => 3340257,
                                    ]);
                                    $idevidenceFinancial67 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia178,
                                    'activity_source_id' =>$idactivitySource68,
                                    'value' => 55934,
                                    ]);
                                    $idevidenceFinancial68 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia179,
                                    'activity_source_id' =>$idactivitySource69,
                                    'value' => 616640,
                                    ]);
                                    $idevidenceFinancial69 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia180,
                                    'activity_source_id' =>$idactivitySource70,
                                    'value' => 5172941,
                                    ]);
                                    $idevidenceFinancial70 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia181,
                                    'activity_source_id' =>$idactivitySource71,
                                    'value' => 1244670,
                                    ]);
                                    $idevidenceFinancial71 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia184,
                                    'activity_source_id' =>$idactivitySource72,
                                    'value' => 2798000,
                                    ]);
                                    $idevidenceFinancial72 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia185,
                                    'activity_source_id' =>$idactivitySource73,
                                    'value' => 2500000,
                                    ]);
                                    $idevidenceFinancial73 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia186,
                                    'activity_source_id' =>$idactivitySource74,
                                    'value' => 1621166,
                                    ]);
                                    $idevidenceFinancial74 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia187,
                                    'activity_source_id' =>$idactivitySource75,
                                    'value' => 116649001,
                                    ]);
                                    $idevidenceFinancial75 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia191,
                                    'activity_source_id' =>$idactivitySource76,
                                    'value' => 102000000,
                                    ]);
                                    $idevidenceFinancial76 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia192,
                                    'activity_source_id' =>$idactivitySource77,
                                    'value' => 124272026,
                                    ]);
                                    $idevidenceFinancial77 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia157,
                                      'activity_source_id' =>$idactivitySource78,
                                      'value' => 68813494.46,
                                      ]);
                                      $idevidenceFinancial78 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia176,
                                      'activity_source_id' =>$idactivitySource79,
                                      'value' => 83847552,
                                      ]);
                                      $idevidenceFinancial79 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia178,
                                      'activity_source_id' =>$idactivitySource80,
                                      'value' => 3790582,
                                      ]);
                                      $idevidenceFinancial80 = DB::getPdo()->lastInsertId();
                                      

  }
}