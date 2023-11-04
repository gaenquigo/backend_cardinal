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
 * Class HistoricPAI_CDMB_Seeder
 */
class HistoricPAI_CDMB_Seeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $pai=PAI::create([
      'name' => 'PLAN DE ACCIÓN “UNIDOS POR EL AMBIENTE”',
      'start_date' => '2016-01-01',
      'end_date' => '2019-12-31',
      'director_name' => 'MARTÍN CAMILO CARVAJAL CÁMARO',
      'group_id' => 9,
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
      'car_program' => 'PROGRAMA 1. RECURSO HÍDRICO',
      'weighing' => 12,
      ]);
      $idprogram1 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('programs')->insert([
      'strategic_line_id' => $idline1,
      'national_program_id' => 799,
      'car_program' => 'PROGRAMA 2  GESTIÓN DEL RIESGO y CAMBIO CLIMÁTICO',
      'weighing' => 15,
      ]);
      $idprogram2 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('programs')->insert([
      'strategic_line_id' => $idline1,
      'national_program_id' => 799,
      'car_program' => 'PROGRAMA 3. ECOSISTEMA ESTRATÉGICO DE BOSQUES',
      'weighing' => 16,
      ]);
      $idprogram3 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('programs')->insert([
      'strategic_line_id' => $idline1,
      'national_program_id' => 799,
      'car_program' => 'PROGRAMA 4. BIODIVERSIDAD Y SERVICIOS ECOSISTÉMICOS',
      'weighing' => 12,
      ]);
      $idprogram4 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('programs')->insert([
      'strategic_line_id' => $idline1,
      'national_program_id' => 799,
      'car_program' => 'PROGRAMA 5 OPTIMIZACIÓN DE LA GESTIÓN INSTITUCIONAL',
      'weighing' => 35,
      ]);
      $idprogram5 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('programs')->insert([
      'strategic_line_id' => $idline1,
      'national_program_id' => 799,
      'car_program' => 'PROGRAMA 6 EDUCACIÓN AMBIENTAL Y COMUNICACIÓN ESTRATÉGICA',
      'weighing' => 10,
      ]);
      $idprogram6 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('projects')->insert([
      'program_id' => $idprogram1,
      'project' => 'PROYECTO 1. MEJORAMIENTO DE LA GESTIÓN DE LA OFERTA, DEMANDA Y CALIDAD DEL RECURSO HÍDRICO',
      'weighing' => 58,
      ]);
      $idproject1 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('projects')->insert([
      'program_id' => $idprogram1,
      'project' => 'PROYECTO 2. ORDENAMIENTO AMBIENTAL DEL TERRITORIO PARA LA ADAPTACIÓN Y MITIGACIÓN AL CAMBIO CLIMÁTIC',
      'weighing' => 42,
      ]);
      $idproject2 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('projects')->insert([
      'program_id' => $idprogram2,
      'project' => 'PROYECTO 3. REDUCCIÓN DEL RIESGO DE DESASTRES Y ADAPTACIÓN AL CAMBIO CLIMÁTICO EN EL ÁREA DE JURISDICCIÓN DE LA CDMB',
      'weighing' => 90,
      ]);
      $idproject3 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('projects')->insert([
      'program_id' => $idprogram2,
      'project' => 'PROYECTO 4. FORTALECIMIENTO DE LA GESTIÓN DEL CAMBIO CLIMÁTICO EN EL DEPARTAMENTO DE SANTANDER CON ÉNFASIS EN EL ÁREA DE JURISDICCIÓN DE LA CDMB',
      'weighing' => 10,
      ]);
      $idproject4 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('projects')->insert([
      'program_id' => $idprogram3,
      'project' => 'PROYECTO 5. PRESERVACIÓN, RESTAURACIÓN Y USO SOSTENIBLE  DE LAS COBERTURAS VEGETALES EN EL ÁREA DE JURISDICCIÓN DE LA CDMB',
      'weighing' => 100,
      ]);
      $idproject5 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('projects')->insert([
      'program_id' => $idprogram4,
      'project' => 'PROYECTO 6. GENERACIÓN DE CONOCIMIENTO DE LA BIODIVERSIDAD EN EL  JARDÍN BOTÁNICO ELOY VALENZUELA Y EN EL CENTRO DE ATENCIÓN Y VALORACIÓN - CENTRO DE EDUCACIÓN AMBIENTAL Y DE RESCATE DE FAUNA SILVESTRE (CAV-CEARFS)',
      'weighing' => 36,
      ]);
      $idproject6 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('projects')->insert([
      'program_id' => $idprogram4,
      'project' => 'PROYECTO 7. ARTICULACIÓN INSTITUCIONAL CON EL SECTOR PRODUCTIVO DE LA JURISDICCIÓN DE LA CDMB PARA LA IMPLEMENTACIÓN DE LOS PROGRAMAS DE NEGOCIOS VERDES REGIONALES',
      'weighing' => 28,
      ]);
      $idproject7 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('projects')->insert([
      'program_id' => $idprogram4,
      'project' => 'PROYECTO 8. CONSERVACIÓN DE LA BIODIVERSIDAD Y RECURSOS HÍDRICOS EN LOS ANDES DEL NORTE, PÁRAMO SANTURBÁN - BERLÍN',
      'weighing' => 36,
      ]);
      $idproject8 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('projects')->insert([
      'program_id' => $idprogram5,
      'project' => 'PROYECTO 9. FORTALECIMIENTO DE LA GENERACIÓN DEL CONOCIMIENTO E INVESTIGACIÓN AMBIENTAL APLICADA EN LOS PROCESOS INSTITUCIONALES DE LA CDMB Y EN LA GESTIÓN AMBIENTAL REGIONAL',
      'weighing' => 24,
      ]);
      $idproject9 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('projects')->insert([
      'program_id' => $idprogram5,
      'project' => 'PROYECTO 10. MEJORAMIENTO DE LAS ÁREAS ESTRATÉGICAS Y BIENES INMUEBLES DE LA CORPORACIÓN AUTÓNOMA REGIONAL PARA LA DEFENSA DE LA MESETA DE BUCARAMANGA',
      'weighing' => 24,
      ]);
      $idproject10 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('projects')->insert([
      'program_id' => $idprogram5,
      'project' => 'PROYECTO 11. GESTIÓN DE LAS TECNOLOGÍAS DE LA INFORMACIÓN CON LAS ESTRATEGIAS INSTITUCIONALES Y SECTORIALES',
      'weighing' => 10,
      ]);
      $idproject11 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('projects')->insert([
      'program_id' => $idprogram5,
      'project' => 'PROYECTO 12. ACTUALIZACIÓN Y MEJORA DE LA GESTIÓN INSTITUCIONAL DE LA CDMB',
      'weighing' => 12,
      ]);
      $idproject12 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('projects')->insert([
      'program_id' => $idprogram5,
      'project' => 'PROYECTO 13. EVALUACIÓN Y CONTROL A LA DEMANDA DE LOS RECURSOS NATURALES EN LA JURISDICCIÓN DE LA CDMB',
      'weighing' => 30,
      ]);
      $idproject13 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('projects')->insert([
      'program_id' => $idprogram6,
      'project' => 'PROYECTO 14. IMPLEMENTAR ACCIONES ESTRATÉGICAS DE EDUCACIÓN AMBIENTAL Y COMUNICACIÓN PARA EL FORTALECIMIENTO DE LA PARTICIPACIÓN Y GESTIÓN AMBIENTAL, EN EL ÁREA DE JURISDICCIÓN DE LA CDMB',
      'weighing' => 74,
      ]);
      $idproject14 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('projects')->insert([
      'program_id' => $idprogram6,
      'project' => 'PROYECTO 15. IMPLEMENTACIÓN DE TECNOLOGÍAS DE PRODUCCIÓN MÁS LIMPIA, CONSIDERANDO LA METODOLOGÍA INSTITUCIONAL- OCAMS- EN EL SECTOR PRODUCTIVO Y DE SERVICIOS DE LA JURISDICCIÓN',
      'weighing' => 26,
      ]);
      $idproject15 = DB::getPdo()->lastInsertId();
      
      
      
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
      
      
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective1,
        'product_id' => 799,
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
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 10,
        ]);
        $idobjectiveproduct1 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective1,
        'product_id' => 799,
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
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 10,
        ]);
        $idobjectiveproduct2 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective1,
        'product_id' => 799,
        'product_other' => 'Producto 3',
        'goal_1' => 100,
        'goal_2' => 200,
        'goal_3' => 250,
        'goal_4' => 300,
        'goal_1_balance' => 100,
        'goal_2_balance' => 200,
        'goal_3_balance' => 250,
        'goal_4_balance' => 300,
        'total_goal' => 850,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 10,
        ]);
        $idobjectiveproduct3 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective1,
        'product_id' => 799,
        'product_other' => 'Producto 4',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 0.8,
        'goal_4' => 1,
        'goal_1_balance' => 1,
        'goal_2_balance' => 1,
        'goal_3_balance' => 0.8,
        'goal_4_balance' => 1,
        'total_goal' => 3.8,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 10,
        ]);
        $idobjectiveproduct4 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective1,
        'product_id' => 799,
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
        'unit_goal' => 84,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 10,
        ]);
        $idobjectiveproduct5 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective1,
        'product_id' => 799,
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
        'weighing' => 10,
        ]);
        $idobjectiveproduct6 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective1,
        'product_id' => 799,
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
        'unit_goal' => 84,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 10,
        ]);
        $idobjectiveproduct7 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective1,
        'product_id' => 799,
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
        'weighing' => 10,
        ]);
        $idobjectiveproduct8 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective1,
        'product_id' => 799,
        'product_other' => 'Producto 9',
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
        'weighing' => 10,
        ]);
        $idobjectiveproduct9 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective1,
        'product_id' => 799,
        'product_other' => 'Producto 10',
        'goal_1' => 0.25,
        'goal_2' => 0.5,
        'goal_3' => 0.73,
        'goal_4' => 1,
        'goal_1_balance' => 0.25,
        'goal_2_balance' => 0.5,
        'goal_3_balance' => 0.73,
        'goal_4_balance' => 1,
        'total_goal' => 2.48,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 9,
        ]);
        $idobjectiveproduct10 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective1,
        'product_id' => 799,
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
        $idobjectiveproduct11 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective2,
        'product_id' => 799,
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
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 8,
        ]);
        $idobjectiveproduct12 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective2,
        'product_id' => 799,
        'product_other' => 'Producto 2',
        'goal_1' => 0,
        'goal_2' => 25,
        'goal_3' => 0.5,
        'goal_4' => 0,
        'goal_1_balance' => 0,
        'goal_2_balance' => 25,
        'goal_3_balance' => 0.5,
        'goal_4_balance' => 0,
        'total_goal' => 25.5,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 8,
        ]);
        $idobjectiveproduct13 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective2,
        'product_id' => 799,
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
        'weighing' => 8,
        ]);
        $idobjectiveproduct14 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective2,
        'product_id' => 799,
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
        'unit_goal' => 50,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 8,
        ]);
        $idobjectiveproduct15 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective2,
        'product_id' => 799,
        'product_other' => 'Producto 5',
        'goal_1' => 2500,
        'goal_2' => 4200,
        'goal_3' => 3921,
        'goal_4' => 11633,
        'goal_1_balance' => 2500,
        'goal_2_balance' => 4200,
        'goal_3_balance' => 3921,
        'goal_4_balance' => 11633,
        'total_goal' => 22254,
        'unit_goal' => 47,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 8,
        ]);
        $idobjectiveproduct16 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective2,
        'product_id' => 799,
        'product_other' => 'Producto 6',
        'goal_1' => 0,
        'goal_2' => 2805,
        'goal_3' => 0,
        'goal_4' => 11700,
        'goal_1_balance' => 0,
        'goal_2_balance' => 2805,
        'goal_3_balance' => 0,
        'goal_4_balance' => 11700,
        'total_goal' => 14505,
        'unit_goal' => 47,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 8,
        ]);
        $idobjectiveproduct17 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective2,
        'product_id' => 799,
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
        'unit_goal' => 47,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 8,
        ]);
        $idobjectiveproduct18 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective2,
        'product_id' => 799,
        'product_other' => 'Producto 8',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 486360,
        'goal_1_balance' => 0,
        'goal_2_balance' => 0,
        'goal_3_balance' => 0,
        'goal_4_balance' => 486360,
        'total_goal' => 486360,
        'unit_goal' => 47,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 8,
        ]);
        $idobjectiveproduct19 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective2,
        'product_id' => 799,
        'product_other' => 'Producto 9',
        'goal_1' => 13,
        'goal_2' => 13,
        'goal_3' => 13,
        'goal_4' => 13,
        'goal_1_balance' => 13,
        'goal_2_balance' => 13,
        'goal_3_balance' => 13,
        'goal_4_balance' => 13,
        'total_goal' => 52,
        'unit_goal' => 84,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 7,
        ]);
        $idobjectiveproduct20 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective2,
        'product_id' => 799,
        'product_other' => 'Producto 10',
        'goal_1' => 50745,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 0,
        'goal_1_balance' => 50745,
        'goal_2_balance' => 0,
        'goal_3_balance' => 0,
        'goal_4_balance' => 0,
        'total_goal' => 50745,
        'unit_goal' => 47,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 7,
        ]);
        $idobjectiveproduct21 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective2,
        'product_id' => 799,
        'product_other' => 'Producto 11',
        'goal_1' => 273450,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 0,
        'goal_1_balance' => 273450,
        'goal_2_balance' => 0,
        'goal_3_balance' => 0,
        'goal_4_balance' => 0,
        'total_goal' => 273450,
        'unit_goal' => 47,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 7,
        ]);
        $idobjectiveproduct22 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective2,
        'product_id' => 799,
        'product_other' => 'Producto 12',
        'goal_1' => 0,
        'goal_2' => 5,
        'goal_3' => 5,
        'goal_4' => 5,
        'goal_1_balance' => 0,
        'goal_2_balance' => 5,
        'goal_3_balance' => 5,
        'goal_4_balance' => 5,
        'total_goal' => 15,
        'unit_goal' => 84,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 7,
        ]);
        $idobjectiveproduct23 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective2,
        'product_id' => 799,
        'product_other' => 'Producto 13',
        'goal_1' => 0,
        'goal_2' => 6,
        'goal_3' => 6,
        'goal_4' => 6,
        'goal_1_balance' => 0,
        'goal_2_balance' => 6,
        'goal_3_balance' => 6,
        'goal_4_balance' => 6,
        'total_goal' => 18,
        'unit_goal' => 84,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 7,
        ]);
        $idobjectiveproduct24 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective2,
        'product_id' => 799,
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
        $idobjectiveproduct25 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective3,
        'product_id' => 799,
        'product_other' => 'Producto 1',
        'goal_1' => 0,
        'goal_2' => 1,
        'goal_3' => 0,
        'goal_4' => 1,
        'goal_1_balance' => 0,
        'goal_2_balance' => 1,
        'goal_3_balance' => 0,
        'goal_4_balance' => 1,
        'total_goal' => 2,
        'unit_goal' => 84,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 11,
        ]);
        $idobjectiveproduct26 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective3,
        'product_id' => 799,
        'product_other' => 'Producto 2',
        'goal_1' => 13,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 0,
        'goal_1_balance' => 13,
        'goal_2_balance' => 0,
        'goal_3_balance' => 0,
        'goal_4_balance' => 0,
        'total_goal' => 13,
        'unit_goal' => 84,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 11,
        ]);
        $idobjectiveproduct27 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective3,
        'product_id' => 799,
        'product_other' => 'Producto 3',
        'goal_1' => 2,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 0,
        'goal_1_balance' => 2,
        'goal_2_balance' => 0,
        'goal_3_balance' => 0,
        'goal_4_balance' => 0,
        'total_goal' => 2,
        'unit_goal' => 84,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 11,
        ]);
        $idobjectiveproduct28 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective3,
        'product_id' => 799,
        'product_other' => 'Producto 4',
        'goal_1' => 14,
        'goal_2' => 14,
        'goal_3' => 14,
        'goal_4' => 14,
        'goal_1_balance' => 14,
        'goal_2_balance' => 14,
        'goal_3_balance' => 14,
        'goal_4_balance' => 14,
        'total_goal' => 56,
        'unit_goal' => 84,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 11,
        ]);
        $idobjectiveproduct29 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective3,
        'product_id' => 799,
        'product_other' => 'Producto 5',
        'goal_1' => 3,
        'goal_2' => 5,
        'goal_3' => 5,
        'goal_4' => 5,
        'goal_1_balance' => 3,
        'goal_2_balance' => 5,
        'goal_3_balance' => 5,
        'goal_4_balance' => 5,
        'total_goal' => 18,
        'unit_goal' => 84,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 11,
        ]);
        $idobjectiveproduct30 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective3,
        'product_id' => 799,
        'product_other' => 'Producto 6',
        'goal_1' => 30000,
        'goal_2' => 30000,
        'goal_3' => 30000,
        'goal_4' => 30000,
        'goal_1_balance' => 30000,
        'goal_2_balance' => 30000,
        'goal_3_balance' => 30000,
        'goal_4_balance' => 30000,
        'total_goal' => 120000,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 11,
        ]);
        $idobjectiveproduct31 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective3,
        'product_id' => 799,
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
        'unit_goal' => 84,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 11,
        ]);
        $idobjectiveproduct32 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective3,
        'product_id' => 799,
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
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 11,
        ]);
        $idobjectiveproduct33 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective3,
        'product_id' => 799,
        'product_other' => 'Producto 9',
        'goal_1' => 0,
        'goal_2' => 50,
        'goal_3' => 50,
        'goal_4' => 50,
        'goal_1_balance' => 0,
        'goal_2_balance' => 50,
        'goal_3_balance' => 50,
        'goal_4_balance' => 50,
        'total_goal' => 150,
        'unit_goal' => 84,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 11,
        ]);
        $idobjectiveproduct34 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective3,
        'product_id' => 799,
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
        $idobjectiveproduct35 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective4,
        'product_id' => 799,
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
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 15,
        ]);
        $idobjectiveproduct36 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective4,
        'product_id' => 799,
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
        'weighing' => 14,
        ]);
        $idobjectiveproduct37 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective4,
        'product_id' => 799,
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
        'weighing' => 14,
        ]);
        $idobjectiveproduct38 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective4,
        'product_id' => 799,
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
        $idobjectiveproduct39 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective4,
        'product_id' => 799,
        'product_other' => 'Producto 5',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 3,
        'goal_4' => 4,
        'goal_1_balance' => 0,
        'goal_2_balance' => 0,
        'goal_3_balance' => 3,
        'goal_4_balance' => 4,
        'total_goal' => 7,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 14,
        ]);
        $idobjectiveproduct40 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective4,
        'product_id' => 799,
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
        'weighing' => 14,
        ]);
        $idobjectiveproduct41 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective4,
        'product_id' => 799,
        'product_other' => 'Producto 7',
        'goal_1' => 0,
        'goal_2' => 13,
        'goal_3' => 13,
        'goal_4' => 13,
        'goal_1_balance' => 0,
        'goal_2_balance' => 13,
        'goal_3_balance' => 13,
        'goal_4_balance' => 13,
        'total_goal' => 39,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 14,
        ]);
        $idobjectiveproduct42 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective4,
        'product_id' => 799,
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
        'weighing' => 1,
        ]);
        $idobjectiveproduct43 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective5,
        'product_id' => 799,
        'product_other' => 'Producto 1',
        'goal_1' => 4000,
        'goal_2' => 4000,
        'goal_3' => 3500,
        'goal_4' => 3500,
        'goal_1_balance' => 4000,
        'goal_2_balance' => 4000,
        'goal_3_balance' => 3500,
        'goal_4_balance' => 3500,
        'total_goal' => 15000,
        'unit_goal' => 47,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 9,
        ]);
        $idobjectiveproduct44 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective5,
        'product_id' => 799,
        'product_other' => 'Producto 2',
        'goal_1' => 45,
        'goal_2' => 45,
        'goal_3' => 15,
        'goal_4' => 100,
        'goal_1_balance' => 45,
        'goal_2_balance' => 45,
        'goal_3_balance' => 15,
        'goal_4_balance' => 100,
        'total_goal' => 205,
        'unit_goal' => 47,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 9,
        ]);
        $idobjectiveproduct45 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective5,
        'product_id' => 799,
        'product_other' => 'Producto 3',
        'goal_1' => 700000,
        'goal_2' => 800000,
        'goal_3' => 700000,
        'goal_4' => 200000,
        'goal_1_balance' => 700000,
        'goal_2_balance' => 800000,
        'goal_3_balance' => 700000,
        'goal_4_balance' => 200000,
        'total_goal' => 2400000,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 9,
        ]);
        $idobjectiveproduct46 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective5,
        'product_id' => 799,
        'product_other' => 'Producto 4',
        'goal_1' => 30,
        'goal_2' => 30,
        'goal_3' => 20,
        'goal_4' => 30,
        'goal_1_balance' => 30,
        'goal_2_balance' => 30,
        'goal_3_balance' => 20,
        'goal_4_balance' => 30,
        'total_goal' => 110,
        'unit_goal' => 47,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 8,
        ]);
        $idobjectiveproduct47 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective5,
        'product_id' => 799,
        'product_other' => 'Producto 5',
        'goal_1' => 75,
        'goal_2' => 20,
        'goal_3' => 15,
        'goal_4' => 40,
        'goal_1_balance' => 75,
        'goal_2_balance' => 20,
        'goal_3_balance' => 15,
        'goal_4_balance' => 40,
        'total_goal' => 150,
        'unit_goal' => 47,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 8,
        ]);
        $idobjectiveproduct48 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective5,
        'product_id' => 799,
        'product_other' => 'Producto 6',
        'goal_1' => 40,
        'goal_2' => 45,
        'goal_3' => 25,
        'goal_4' => 0,
        'goal_1_balance' => 40,
        'goal_2_balance' => 45,
        'goal_3_balance' => 25,
        'goal_4_balance' => 0,
        'total_goal' => 110,
        'unit_goal' => 47,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 8,
        ]);
        $idobjectiveproduct49 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective5,
        'product_id' => 799,
        'product_other' => 'Producto 7',
        'goal_1' => 80,
        'goal_2' => 75,
        'goal_3' => 30,
        'goal_4' => 50,
        'goal_1_balance' => 80,
        'goal_2_balance' => 75,
        'goal_3_balance' => 30,
        'goal_4_balance' => 50,
        'total_goal' => 235,
        'unit_goal' => 47,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 8,
        ]);
        $idobjectiveproduct50 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective5,
        'product_id' => 799,
        'product_other' => 'Producto 8',
        'goal_1' => 20,
        'goal_2' => 10,
        'goal_3' => 5,
        'goal_4' => 10,
        'goal_1_balance' => 20,
        'goal_2_balance' => 10,
        'goal_3_balance' => 5,
        'goal_4_balance' => 10,
        'total_goal' => 45,
        'unit_goal' => 47,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 8,
        ]);
        $idobjectiveproduct51 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective5,
        'product_id' => 799,
        'product_other' => 'Producto 9',
        'goal_1' => 26,
        'goal_2' => 20,
        'goal_3' => 10,
        'goal_4' => 15,
        'goal_1_balance' => 26,
        'goal_2_balance' => 20,
        'goal_3_balance' => 10,
        'goal_4_balance' => 15,
        'total_goal' => 71,
        'unit_goal' => 47,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 8,
        ]);
        $idobjectiveproduct52 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective5,
        'product_id' => 799,
        'product_other' => 'Producto 10',
        'goal_1' => 10,
        'goal_2' => 10,
        'goal_3' => 8,
        'goal_4' => 10,
        'goal_1_balance' => 10,
        'goal_2_balance' => 10,
        'goal_3_balance' => 8,
        'goal_4_balance' => 10,
        'total_goal' => 38,
        'unit_goal' => 47,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 8,
        ]);
        $idobjectiveproduct53 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective5,
        'product_id' => 799,
        'product_other' => 'Producto 11',
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
        'weighing' => 8,
        ]);
        $idobjectiveproduct54 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective5,
        'product_id' => 799,
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
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 8,
        ]);
        $idobjectiveproduct55 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective5,
        'product_id' => 799,
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
        'unit_goal' => 84,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 1,
        ]);
        $idobjectiveproduct56 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective6,
        'product_id' => 799,
        'product_other' => 'Producto 1',
        'goal_1' => 220,
        'goal_2' => 220,
        'goal_3' => 220,
        'goal_4' => 220,
        'goal_1_balance' => 220,
        'goal_2_balance' => 220,
        'goal_3_balance' => 220,
        'goal_4_balance' => 220,
        'total_goal' => 880,
        'unit_goal' => 47,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 17,
        ]);
        $idobjectiveproduct57 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective6,
        'product_id' => 799,
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
        'unit_goal' => 47,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 17,
        ]);
        $idobjectiveproduct58 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective6,
        'product_id' => 799,
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
        'unit_goal' => 47,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 17,
        ]);
        $idobjectiveproduct59 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective6,
        'product_id' => 799,
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
        'unit_goal' => 47,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 16,
        ]);
        $idobjectiveproduct60 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective6,
        'product_id' => 799,
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
        'unit_goal' => 47,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 16,
        ]);
        $idobjectiveproduct61 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective6,
        'product_id' => 799,
        'product_other' => 'Producto 6',
        'goal_1' => 1000,
        'goal_2' => 100,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal_1_balance' => 1000,
        'goal_2_balance' => 100,
        'goal_3_balance' => 1,
        'goal_4_balance' => 1,
        'total_goal' => 1102,
        'unit_goal' => 47,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 16,
        ]);
        $idobjectiveproduct62 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective6,
        'product_id' => 799,
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
        'weighing' => 1,
        ]);
        $idobjectiveproduct63 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective7,
        'product_id' => 799,
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
        'unit_goal' => 84,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 15,
        ]);
        $idobjectiveproduct64 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective7,
        'product_id' => 799,
        'product_other' => 'Producto 2',
        'goal_1' => 0,
        'goal_2' => 100,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal_1_balance' => 0,
        'goal_2_balance' => 100,
        'goal_3_balance' => 1,
        'goal_4_balance' => 1,
        'total_goal' => 102,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 14,
        ]);
        $idobjectiveproduct65 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective7,
        'product_id' => 799,
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
        'unit_goal' => 84,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 14,
        ]);
        $idobjectiveproduct66 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective7,
        'product_id' => 799,
        'product_other' => 'Producto 4',
        'goal_1' => 0,
        'goal_2' => 2,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal_1_balance' => 0,
        'goal_2_balance' => 2,
        'goal_3_balance' => 1,
        'goal_4_balance' => 1,
        'total_goal' => 4,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 14,
        ]);
        $idobjectiveproduct67 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective7,
        'product_id' => 799,
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
        'unit_goal' => 84,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 14,
        ]);
        $idobjectiveproduct68 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective7,
        'product_id' => 799,
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
        'weighing' => 14,
        ]);
        $idobjectiveproduct69 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective7,
        'product_id' => 799,
        'product_other' => 'Producto 7',
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
        'weighing' => 14,
        ]);
        $idobjectiveproduct70 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective7,
        'product_id' => 799,
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
        'weighing' => 1,
        ]);
        $idobjectiveproduct71 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective8,
        'product_id' => 799,
        'product_other' => 'Producto 1',
        'goal_1' => 50,
        'goal_2' => 0.5,
        'goal_3' => 0,
        'goal_4' => 0,
        'goal_1_balance' => 50,
        'goal_2_balance' => 0.5,
        'goal_3_balance' => 0,
        'goal_4_balance' => 0,
        'total_goal' => 50.5,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 6,
        ]);
        $idobjectiveproduct72 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective8,
        'product_id' => 799,
        'product_other' => 'Producto 2',
        'goal_1' => 15,
        'goal_2' => 34,
        'goal_3' => 0,
        'goal_4' => 0,
        'goal_1_balance' => 15,
        'goal_2_balance' => 34,
        'goal_3_balance' => 0,
        'goal_4_balance' => 0,
        'total_goal' => 49,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 6,
        ]);
        $idobjectiveproduct73 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective8,
        'product_id' => 799,
        'product_other' => 'Producto 3',
        'goal_1' => 25,
        'goal_2' => 25,
        'goal_3' => 50,
        'goal_4' => 0,
        'goal_1_balance' => 25,
        'goal_2_balance' => 25,
        'goal_3_balance' => 50,
        'goal_4_balance' => 0,
        'total_goal' => 100,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 6,
        ]);
        $idobjectiveproduct74 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective8,
        'product_id' => 799,
        'product_other' => 'Producto 4',
        'goal_1' => 0,
        'goal_2' => 10000,
        'goal_3' => 40000,
        'goal_4' => 0,
        'goal_1_balance' => 0,
        'goal_2_balance' => 10000,
        'goal_3_balance' => 40000,
        'goal_4_balance' => 0,
        'total_goal' => 50000,
        'unit_goal' => 54,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 6,
        ]);
        $idobjectiveproduct75 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective8,
        'product_id' => 799,
        'product_other' => 'Producto 5',
        'goal_1' => 0.5,
        'goal_2' => 0.5,
        'goal_3' => 0,
        'goal_4' => 0,
        'goal_1_balance' => 0.5,
        'goal_2_balance' => 0.5,
        'goal_3_balance' => 0,
        'goal_4_balance' => 0,
        'total_goal' => 1,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 6,
        ]);
        $idobjectiveproduct76 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective8,
        'product_id' => 799,
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
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 6,
        ]);
        $idobjectiveproduct77 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective8,
        'product_id' => 799,
        'product_other' => 'Producto 7',
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
        'weighing' => 6,
        ]);
        $idobjectiveproduct78 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective8,
        'product_id' => 799,
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
        'weighing' => 6,
        ]);
        $idobjectiveproduct79 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective8,
        'product_id' => 799,
        'product_other' => 'Producto 9',
        'goal_1' => 0,
        'goal_2' => 0.4,
        'goal_3' => 0.2,
        'goal_4' => 0,
        'goal_1_balance' => 0,
        'goal_2_balance' => 0.4,
        'goal_3_balance' => 0.2,
        'goal_4_balance' => 0,
        'total_goal' => 0.6,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 6,
        ]);
        $idobjectiveproduct80 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective8,
        'product_id' => 799,
        'product_other' => 'Producto 10',
        'goal_1' => 0.4,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 0,
        'goal_1_balance' => 0.4,
        'goal_2_balance' => 0,
        'goal_3_balance' => 0,
        'goal_4_balance' => 0,
        'total_goal' => 0.4,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 6,
        ]);
        $idobjectiveproduct81 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective8,
        'product_id' => 799,
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
        'unit_goal' => 42,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 6,
        ]);
        $idobjectiveproduct82 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective8,
        'product_id' => 799,
        'product_other' => 'Producto 12',
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
        'weighing' => 6,
        ]);
        $idobjectiveproduct83 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective8,
        'product_id' => 799,
        'product_other' => 'Producto 13',
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
        'weighing' => 6,
        ]);
        $idobjectiveproduct84 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective8,
        'product_id' => 799,
        'product_other' => 'Producto 14',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 0,
        'goal_4' => 1,
        'goal_1_balance' => 1,
        'goal_2_balance' => 1,
        'goal_3_balance' => 0,
        'goal_4_balance' => 1,
        'total_goal' => 3,
        'unit_goal' => 42,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 6,
        ]);
        $idobjectiveproduct85 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective8,
        'product_id' => 799,
        'product_other' => 'Producto 15',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 3230,
        'goal_1_balance' => 0,
        'goal_2_balance' => 0,
        'goal_3_balance' => 0,
        'goal_4_balance' => 3230,
        'total_goal' => 3230,
        'unit_goal' => 54,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 5,
        ]);
        $idobjectiveproduct86 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective8,
        'product_id' => 799,
        'product_other' => 'Producto 16',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 5000,
        'goal_1_balance' => 0,
        'goal_2_balance' => 0,
        'goal_3_balance' => 0,
        'goal_4_balance' => 5000,
        'total_goal' => 5000,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 5,
        ]);
        $idobjectiveproduct87 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective8,
        'product_id' => 799,
        'product_other' => 'Producto 17',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 120,
        'goal_1_balance' => 0,
        'goal_2_balance' => 0,
        'goal_3_balance' => 0,
        'goal_4_balance' => 120,
        'total_goal' => 120,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 5,
        ]);
        $idobjectiveproduct88 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective8,
        'product_id' => 799,
        'product_other' => 'Producto 18',
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
        $idobjectiveproduct89 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective9,
        'product_id' => 799,
        'product_other' => 'Producto 1',
        'goal_1' => 0.25,
        'goal_2' => 0.5,
        'goal_3' => 0.75,
        'goal_4' => 1,
        'goal_1_balance' => 0.25,
        'goal_2_balance' => 0.5,
        'goal_3_balance' => 0.75,
        'goal_4_balance' => 1,
        'total_goal' => 2.5,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 8,
        ]);
        $idobjectiveproduct90 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective9,
        'product_id' => 799,
        'product_other' => 'Producto 2',
        'goal_1' => 0.25,
        'goal_2' => 2,
        'goal_3' => 0,
        'goal_4' => 0,
        'goal_1_balance' => 0.25,
        'goal_2_balance' => 2,
        'goal_3_balance' => 0,
        'goal_4_balance' => 0,
        'total_goal' => 2.25,
        'unit_goal' => 84,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 8,
        ]);
        $idobjectiveproduct91 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective9,
        'product_id' => 799,
        'product_other' => 'Producto 3',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 2,
        'goal_4' => 2,
        'goal_1_balance' => 0,
        'goal_2_balance' => 0,
        'goal_3_balance' => 2,
        'goal_4_balance' => 2,
        'total_goal' => 4,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 8,
        ]);
        $idobjectiveproduct92 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective9,
        'product_id' => 799,
        'product_other' => 'Producto 4',
        'goal_1' => 1,
        'goal_2' => 2,
        'goal_3' => 2,
        'goal_4' => 2,
        'goal_1_balance' => 1,
        'goal_2_balance' => 2,
        'goal_3_balance' => 2,
        'goal_4_balance' => 2,
        'total_goal' => 7,
        'unit_goal' => 84,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 8,
        ]);
        $idobjectiveproduct93 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective9,
        'product_id' => 799,
        'product_other' => 'Producto 5',
        'goal_1' => 1,
        'goal_2' => 2,
        'goal_3' => 2,
        'goal_4' => 2,
        'goal_1_balance' => 1,
        'goal_2_balance' => 2,
        'goal_3_balance' => 2,
        'goal_4_balance' => 2,
        'total_goal' => 7,
        'unit_goal' => 84,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 8,
        ]);
        $idobjectiveproduct94 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective9,
        'product_id' => 799,
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
        'weighing' => 8,
        ]);
        $idobjectiveproduct95 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective9,
        'product_id' => 799,
        'product_other' => 'Producto 7',
        'goal_1' => 9,
        'goal_2' => 9,
        'goal_3' => 9,
        'goal_4' => 9,
        'goal_1_balance' => 9,
        'goal_2_balance' => 9,
        'goal_3_balance' => 9,
        'goal_4_balance' => 9,
        'total_goal' => 36,
        'unit_goal' => 84,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 8,
        ]);
        $idobjectiveproduct96 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective9,
        'product_id' => 799,
        'product_other' => 'Producto 8',
        'goal_1' => 0,
        'goal_2' => 0.4,
        'goal_3' => 0.8,
        'goal_4' => 1,
        'goal_1_balance' => 0,
        'goal_2_balance' => 0.4,
        'goal_3_balance' => 0.8,
        'goal_4_balance' => 1,
        'total_goal' => 2.2,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 8,
        ]);
        $idobjectiveproduct97 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective9,
        'product_id' => 799,
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
        'unit_goal' => 84,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 7,
        ]);
        $idobjectiveproduct98 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective9,
        'product_id' => 799,
        'product_other' => 'Producto 10',
        'goal_1' => 0.1,
        'goal_2' => 4,
        'goal_3' => 4,
        'goal_4' => 4,
        'goal_1_balance' => 0.1,
        'goal_2_balance' => 4,
        'goal_3_balance' => 4,
        'goal_4_balance' => 4,
        'total_goal' => 12.1,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 7,
        ]);
        $idobjectiveproduct99 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective9,
        'product_id' => 799,
        'product_other' => 'Producto 11',
        'goal_1' => 0.7,
        'goal_2' => 0.8,
        'goal_3' => 0.85,
        'goal_4' => 0.9,
        'goal_1_balance' => 0.7,
        'goal_2_balance' => 0.8,
        'goal_3_balance' => 0.85,
        'goal_4_balance' => 0.9,
        'total_goal' => 3.25,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 7,
        ]);
        $idobjectiveproduct100 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective9,
        'product_id' => 799,
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
        'weighing' => 7,
        ]);
        $idobjectiveproduct101 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective9,
        'product_id' => 799,
        'product_other' => 'Producto 13',
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
        $idobjectiveproduct102 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective9,
        'product_id' => 799,
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
        $idobjectiveproduct103 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective10,
        'product_id' => 799,
        'product_other' => 'Producto 1',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 0,
        'goal_4' => 0,
        'goal_1_balance' => 1,
        'goal_2_balance' => 1,
        'goal_3_balance' => 0,
        'goal_4_balance' => 0,
        'total_goal' => 2,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 15,
        ]);
        $idobjectiveproduct104 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective10,
        'product_id' => 799,
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
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 14,
        ]);
        $idobjectiveproduct105 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective10,
        'product_id' => 799,
        'product_other' => 'Producto 3',
        'goal_1' => 80,
        'goal_2' => 50,
        'goal_3' => 30,
        'goal_4' => 30,
        'goal_1_balance' => 80,
        'goal_2_balance' => 50,
        'goal_3_balance' => 30,
        'goal_4_balance' => 30,
        'total_goal' => 190,
        'unit_goal' => 47,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 14,
        ]);
        $idobjectiveproduct106 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective10,
        'product_id' => 799,
        'product_other' => 'Producto 4',
        'goal_1' => 961,
        'goal_2' => 963,
        'goal_3' => 965,
        'goal_4' => 967,
        'goal_1_balance' => 961,
        'goal_2_balance' => 963,
        'goal_3_balance' => 965,
        'goal_4_balance' => 967,
        'total_goal' => 3856,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 14,
        ]);
        $idobjectiveproduct107 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective10,
        'product_id' => 799,
        'product_other' => 'Producto 5',
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
        'weighing' => 14,
        ]);
        $idobjectiveproduct108 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective10,
        'product_id' => 799,
        'product_other' => 'Producto 6',
        'goal_1' => 961,
        'goal_2' => 963,
        'goal_3' => 965,
        'goal_4' => 967,
        'goal_1_balance' => 961,
        'goal_2_balance' => 963,
        'goal_3_balance' => 965,
        'goal_4_balance' => 967,
        'total_goal' => 3856,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 14,
        ]);
        $idobjectiveproduct109 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective10,
        'product_id' => 799,
        'product_other' => 'Producto 7',
        'goal_1' => 3000,
        'goal_2' => 4000,
        'goal_3' => 600,
        'goal_4' => 500,
        'goal_1_balance' => 3000,
        'goal_2_balance' => 4000,
        'goal_3_balance' => 600,
        'goal_4_balance' => 500,
        'total_goal' => 8100,
        'unit_goal' => 54,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 14,
        ]);
        $idobjectiveproduct110 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective10,
        'product_id' => 799,
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
        'weighing' => 1,
        ]);
        $idobjectiveproduct111 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective11,
        'product_id' => 799,
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
        'weighing' => 11,
        ]);
        $idobjectiveproduct112 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective11,
        'product_id' => 799,
        'product_other' => 'Producto 2',
        'goal_1' => 0.2,
        'goal_2' => 0.4,
        'goal_3' => 0.7,
        'goal_4' => 0.9,
        'goal_1_balance' => 0.2,
        'goal_2_balance' => 0.4,
        'goal_3_balance' => 0.7,
        'goal_4_balance' => 0.9,
        'total_goal' => 2.2,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 11,
        ]);
        $idobjectiveproduct113 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective11,
        'product_id' => 799,
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
        'unit_goal' => 84,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 11,
        ]);
        $idobjectiveproduct114 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective11,
        'product_id' => 799,
        'product_other' => 'Producto 4',
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
        'weighing' => 11,
        ]);
        $idobjectiveproduct115 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective11,
        'product_id' => 799,
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
        $idobjectiveproduct116 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective11,
        'product_id' => 799,
        'product_other' => 'Producto 6',
        'goal_1' => 0.2,
        'goal_2' => 0.45,
        'goal_3' => 0.7,
        'goal_4' => 1,
        'goal_1_balance' => 0.2,
        'goal_2_balance' => 0.45,
        'goal_3_balance' => 0.7,
        'goal_4_balance' => 1,
        'total_goal' => 2.35,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 11,
        ]);
        $idobjectiveproduct117 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective11,
        'product_id' => 799,
        'product_other' => 'Producto 7',
        'goal_1' => 0.5,
        'goal_2' => 0.6,
        'goal_3' => 0.6,
        'goal_4' => 1,
        'goal_1_balance' => 0.5,
        'goal_2_balance' => 0.6,
        'goal_3_balance' => 0.6,
        'goal_4_balance' => 1,
        'total_goal' => 2.7,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 11,
        ]);
        $idobjectiveproduct118 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective11,
        'product_id' => 799,
        'product_other' => 'Producto 8',
        'goal_1' => 2,
        'goal_2' => 180000,
        'goal_3' => 0,
        'goal_4' => 0,
        'goal_1_balance' => 2,
        'goal_2_balance' => 180000,
        'goal_3_balance' => 0,
        'goal_4_balance' => 0,
        'total_goal' => 180002,
        'unit_goal' => 84,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 11,
        ]);
        $idobjectiveproduct119 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective11,
        'product_id' => 799,
        'product_other' => 'Producto 9',
        'goal_1' => 60000,
        'goal_2' => 0,
        'goal_3' => 180000,
        'goal_4' => 180000,
        'goal_1_balance' => 60000,
        'goal_2_balance' => 0,
        'goal_3_balance' => 180000,
        'goal_4_balance' => 180000,
        'total_goal' => 420000,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 11,
        ]);
        $idobjectiveproduct120 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective11,
        'product_id' => 799,
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
        $idobjectiveproduct121 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective12,
        'product_id' => 799,
        'product_other' => 'Producto 1',
        'goal_1' => 4,
        'goal_2' => 4,
        'goal_3' => 0,
        'goal_4' => 6,
        'goal_1_balance' => 4,
        'goal_2_balance' => 4,
        'goal_3_balance' => 0,
        'goal_4_balance' => 6,
        'total_goal' => 14,
        'unit_goal' => 84,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 11,
        ]);
        $idobjectiveproduct122 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective12,
        'product_id' => 799,
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
        'unit_goal' => 84,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 11,
        ]);
        $idobjectiveproduct123 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective12,
        'product_id' => 799,
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
        'weighing' => 11,
        ]);
        $idobjectiveproduct124 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective12,
        'product_id' => 799,
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
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 11,
        ]);
        $idobjectiveproduct125 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective12,
        'product_id' => 799,
        'product_other' => 'Producto 5',
        'goal_1' => 0.15,
        'goal_2' => 1,
        'goal_3' => 0,
        'goal_4' => 0,
        'goal_1_balance' => 0.15,
        'goal_2_balance' => 1,
        'goal_3_balance' => 0,
        'goal_4_balance' => 0,
        'total_goal' => 1.15,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 11,
        ]);
        $idobjectiveproduct126 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective12,
        'product_id' => 799,
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
        $idobjectiveproduct127 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective12,
        'product_id' => 799,
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
        $idobjectiveproduct128 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective12,
        'product_id' => 799,
        'product_other' => 'Producto 8',
        'goal_1' => 1,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 0,
        'goal_1_balance' => 1,
        'goal_2_balance' => 0,
        'goal_3_balance' => 0,
        'goal_4_balance' => 0,
        'total_goal' => 1,
        'unit_goal' => 84,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 11,
        ]);
        $idobjectiveproduct129 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective12,
        'product_id' => 799,
        'product_other' => 'Producto 9',
        'goal_1' => 0,
        'goal_2' => 1,
        'goal_3' => 4,
        'goal_4' => 5,
        'goal_1_balance' => 0,
        'goal_2_balance' => 1,
        'goal_3_balance' => 4,
        'goal_4_balance' => 5,
        'total_goal' => 10,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 11,
        ]);
        $idobjectiveproduct130 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective12,
        'product_id' => 799,
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
        $idobjectiveproduct131 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective13,
        'product_id' => 799,
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
        'weighing' => 17,
        ]);
        $idobjectiveproduct132 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective13,
        'product_id' => 799,
        'product_other' => 'Producto 2',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 0.8,
        'goal_4' => 0.6,
        'goal_1_balance' => 1,
        'goal_2_balance' => 1,
        'goal_3_balance' => 0.8,
        'goal_4_balance' => 0.6,
        'total_goal' => 3.4,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 17,
        ]);
        $idobjectiveproduct133 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective13,
        'product_id' => 799,
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
        'weighing' => 17,
        ]);
        $idobjectiveproduct134 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective13,
        'product_id' => 799,
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
        'weighing' => 17,
        ]);
        $idobjectiveproduct135 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective13,
        'product_id' => 799,
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
        'weighing' => 16,
        ]);
        $idobjectiveproduct136 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective13,
        'product_id' => 799,
        'product_other' => 'Producto 6',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 0.9,
        'goal_4' => 1,
        'goal_1_balance' => 1,
        'goal_2_balance' => 1,
        'goal_3_balance' => 0.9,
        'goal_4_balance' => 1,
        'total_goal' => 3.9,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 16,
        ]);
        $idobjectiveproduct137 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective13,
        'product_id' => 799,
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
        'weighing' => 1,
        ]);
        $idobjectiveproduct138 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective14,
        'product_id' => 799,
        'product_other' => 'Producto 1',
        'goal_1' => 14,
        'goal_2' => 14,
        'goal_3' => 14,
        'goal_4' => 14,
        'goal_1_balance' => 14,
        'goal_2_balance' => 14,
        'goal_3_balance' => 14,
        'goal_4_balance' => 14,
        'total_goal' => 56,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 6,
        ]);
        $idobjectiveproduct139 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective14,
        'product_id' => 799,
        'product_other' => 'Producto 2',
        'goal_1' => 230,
        'goal_2' => 330,
        'goal_3' => 250,
        'goal_4' => 330,
        'goal_1_balance' => 230,
        'goal_2_balance' => 330,
        'goal_3_balance' => 250,
        'goal_4_balance' => 330,
        'total_goal' => 1140,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 6,
        ]);
        $idobjectiveproduct140 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective14,
        'product_id' => 799,
        'product_other' => 'Producto 3',
        'goal_1' => 20,
        'goal_2' => 20,
        'goal_3' => 20,
        'goal_4' => 22,
        'goal_1_balance' => 20,
        'goal_2_balance' => 20,
        'goal_3_balance' => 20,
        'goal_4_balance' => 22,
        'total_goal' => 82,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 6,
        ]);
        $idobjectiveproduct141 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective14,
        'product_id' => 799,
        'product_other' => 'Producto 4',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 14,
        'goal_4' => 14,
        'goal_1_balance' => 0,
        'goal_2_balance' => 0,
        'goal_3_balance' => 14,
        'goal_4_balance' => 14,
        'total_goal' => 28,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 6,
        ]);
        $idobjectiveproduct142 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective14,
        'product_id' => 799,
        'product_other' => 'Producto 5',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 4000,
        'goal_4' => 4000,
        'goal_1_balance' => 0,
        'goal_2_balance' => 0,
        'goal_3_balance' => 4000,
        'goal_4_balance' => 4000,
        'total_goal' => 8000,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 6,
        ]);
        $idobjectiveproduct143 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective14,
        'product_id' => 799,
        'product_other' => 'Producto 6',
        'goal_1' => 14,
        'goal_2' => 14,
        'goal_3' => 0,
        'goal_4' => 0,
        'goal_1_balance' => 14,
        'goal_2_balance' => 14,
        'goal_3_balance' => 0,
        'goal_4_balance' => 0,
        'total_goal' => 28,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 6,
        ]);
        $idobjectiveproduct144 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective14,
        'product_id' => 799,
        'product_other' => 'Producto 7',
        'goal_1' => 1000,
        'goal_2' => 4000,
        'goal_3' => 0,
        'goal_4' => 0,
        'goal_1_balance' => 1000,
        'goal_2_balance' => 4000,
        'goal_3_balance' => 0,
        'goal_4_balance' => 0,
        'total_goal' => 5000,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 6,
        ]);
        $idobjectiveproduct145 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective14,
        'product_id' => 799,
        'product_other' => 'Producto 8',
        'goal_1' => 17,
        'goal_2' => 17,
        'goal_3' => 17,
        'goal_4' => 17,
        'goal_1_balance' => 17,
        'goal_2_balance' => 17,
        'goal_3_balance' => 17,
        'goal_4_balance' => 17,
        'total_goal' => 68,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 6,
        ]);
        $idobjectiveproduct146 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective14,
        'product_id' => 799,
        'product_other' => 'Producto 9',
        'goal_1' => 400,
        'goal_2' => 400,
        'goal_3' => 400,
        'goal_4' => 400,
        'goal_1_balance' => 400,
        'goal_2_balance' => 400,
        'goal_3_balance' => 400,
        'goal_4_balance' => 400,
        'total_goal' => 1600,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 6,
        ]);
        $idobjectiveproduct147 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective14,
        'product_id' => 799,
        'product_other' => 'Producto 10',
        'goal_1' => 20,
        'goal_2' => 30,
        'goal_3' => 30,
        'goal_4' => 30,
        'goal_1_balance' => 20,
        'goal_2_balance' => 30,
        'goal_3_balance' => 30,
        'goal_4_balance' => 30,
        'total_goal' => 110,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 6,
        ]);
        $idobjectiveproduct148 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective14,
        'product_id' => 799,
        'product_other' => 'Producto 11',
        'goal_1' => 10,
        'goal_2' => 10,
        'goal_3' => 10,
        'goal_4' => 10,
        'goal_1_balance' => 10,
        'goal_2_balance' => 10,
        'goal_3_balance' => 10,
        'goal_4_balance' => 10,
        'total_goal' => 40,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 6,
        ]);
        $idobjectiveproduct149 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective14,
        'product_id' => 799,
        'product_other' => 'Producto 12',
        'goal_1' => 1,
        'goal_2' => 14,
        'goal_3' => 14,
        'goal_4' => 14,
        'goal_1_balance' => 1,
        'goal_2_balance' => 14,
        'goal_3_balance' => 14,
        'goal_4_balance' => 14,
        'total_goal' => 43,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 6,
        ]);
        $idobjectiveproduct150 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective14,
        'product_id' => 799,
        'product_other' => 'Producto 13',
        'goal_1' => 5100,
        'goal_2' => 5500,
        'goal_3' => 5000,
        'goal_4' => 5500,
        'goal_1_balance' => 5100,
        'goal_2_balance' => 5500,
        'goal_3_balance' => 5000,
        'goal_4_balance' => 5500,
        'total_goal' => 21100,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 6,
        ]);
        $idobjectiveproduct151 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective14,
        'product_id' => 799,
        'product_other' => 'Producto 14',
        'goal_1' => 500,
        'goal_2' => 700,
        'goal_3' => 0,
        'goal_4' => 0,
        'goal_1_balance' => 500,
        'goal_2_balance' => 700,
        'goal_3_balance' => 0,
        'goal_4_balance' => 0,
        'total_goal' => 1200,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 6,
        ]);
        $idobjectiveproduct152 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective14,
        'product_id' => 799,
        'product_other' => 'Producto 15',
        'goal_1' => 200,
        'goal_2' => 5000,
        'goal_3' => 0,
        'goal_4' => 0,
        'goal_1_balance' => 200,
        'goal_2_balance' => 5000,
        'goal_3_balance' => 0,
        'goal_4_balance' => 0,
        'total_goal' => 5200,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 5,
        ]);
        $idobjectiveproduct153 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective14,
        'product_id' => 799,
        'product_other' => 'Producto 16',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 600,
        'goal_4' => 600,
        'goal_1_balance' => 0,
        'goal_2_balance' => 0,
        'goal_3_balance' => 600,
        'goal_4_balance' => 600,
        'total_goal' => 1200,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 5,
        ]);
        $idobjectiveproduct154 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective14,
        'product_id' => 799,
        'product_other' => 'Producto 17',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 5000,
        'goal_4' => 5000,
        'goal_1_balance' => 0,
        'goal_2_balance' => 0,
        'goal_3_balance' => 5000,
        'goal_4_balance' => 5000,
        'total_goal' => 10000,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 5,
        ]);
        $idobjectiveproduct155 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective14,
        'product_id' => 799,
        'product_other' => 'Producto 18',
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
        $idobjectiveproduct156 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective15,
        'product_id' => 799,
        'product_other' => 'Producto 1',
        'goal_1' => 10,
        'goal_2' => 5,
        'goal_3' => 5,
        'goal_4' => 5,
        'goal_1_balance' => 10,
        'goal_2_balance' => 5,
        'goal_3_balance' => 5,
        'goal_4_balance' => 5,
        'total_goal' => 25,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 17,
        ]);
        $idobjectiveproduct157 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective15,
        'product_id' => 799,
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
        'weighing' => 17,
        ]);
        $idobjectiveproduct158 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective15,
        'product_id' => 799,
        'product_other' => 'Producto 3',
        'goal_1' => 60,
        'goal_2' => 70,
        'goal_3' => 75,
        'goal_4' => 80,
        'goal_1_balance' => 60,
        'goal_2_balance' => 70,
        'goal_3_balance' => 75,
        'goal_4_balance' => 80,
        'total_goal' => 285,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 17,
        ]);
        $idobjectiveproduct159 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective15,
        'product_id' => 799,
        'product_other' => 'Producto 4',
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
        'weighing' => 16,
        ]);
        $idobjectiveproduct160 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective15,
        'product_id' => 799,
        'product_other' => 'Producto 5',
        'goal_1' => 10,
        'goal_2' => 10,
        'goal_3' => 10,
        'goal_4' => 10,
        'goal_1_balance' => 10,
        'goal_2_balance' => 10,
        'goal_3_balance' => 10,
        'goal_4_balance' => 10,
        'total_goal' => 40,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 16,
        ]);
        $idobjectiveproduct161 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective15,
        'product_id' => 799,
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
        'weighing' => 16,
        ]);
        $idobjectiveproduct162 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective15,
        'product_id' => 799,
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
        'weighing' => 1,
        ]);
        $idobjectiveproduct163 = DB::getPdo()->lastInsertId();
        
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective1,
      'product_id' =>$idobjectiveproduct1,
      'name' => 'Solicitudes de concesiones de agua atendidas durante la vigencia, conforme al decreto 1076 de 2015',
      'goal_1' => 0,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 3,
      'weighing' => 10, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity1 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective1,
      'product_id' =>$idobjectiveproduct2,
      'name' => 'Concesiones resueltas dentro de los tiempos establecidos por la ley',
      'goal_1' => 100,
      'goal_2' => 0,
      'goal_3' => 0,
      'goal_4' => 0,
      'goal' => 100,
      'weighing' => 10, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity2 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective1,
      'product_id' =>$idobjectiveproduct3,
      'name' => 'Concesiones de aguas superficiales y subterráneas con uso industrial priorizadas con seguimiento',
      'goal_1' => 100,
      'goal_2' => 200,
      'goal_3' => 250,
      'goal_4' => 300,
      'goal' => 850,
      'weighing' => 10, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity3 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective1,
      'product_id' =>$idobjectiveproduct4,
      'name' => 'Porcentaje de quejas y contravenciones ambientales al recurso hídrico atendidas ',
      'goal_1' => 1,
      'goal_2' => 1,
      'goal_3' => 0.8,
      'goal_4' => 1,
      'goal' => 3.8,
      'weighing' => 10, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity4 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective1,
      'product_id' =>$idobjectiveproduct5,
      'name' => 'Informe de avance del proceso de validación de la reglamentación de Corriente Quebrada La Angula sector  Medio y Alto',
      'goal_1' => 0,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 3,
      'weighing' => 10, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity5 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective1,
      'product_id' =>$idobjectiveproduct6,
      'name' => 'PUEAA con seguimiento',
      'goal_1' => 1,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 4,
      'weighing' => 10, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity6 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective1,
      'product_id' =>$idobjectiveproduct7,
      'name' => 'Informe del Estado de la Demanda del Recurso Hídrico en corrientes priorizadas ',
      'goal_1' => 0,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 3,
      'weighing' => 10, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity7 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective1,
      'product_id' =>$idobjectiveproduct8,
      'name' => 'Permisos de vertimiento y PSMV evaluados y con seguimiento, atendidos dentro de los tiempos establecidos por la ley',
      'goal_1' => 1,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 4,
      'weighing' => 10, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity8 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective1,
      'product_id' =>$idobjectiveproduct9,
      'name' => 'Porcentaje de Planes de Saneamiento y Manejo de Vertimientos (PSMV) atendidos y con seguimiento',
      'goal_1' => 0,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 3,
      'weighing' => 10, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity9 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective1,
      'product_id' =>$idobjectiveproduct10,
      'name' => 'Actualización y reporte de la información en el SIAC *',
      'goal_1' => 0.25,
      'goal_2' => 0.5,
      'goal_3' => 0.73,
      'goal_4' => 1,
      'goal' => 2.48,
      'weighing' => 9, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity10 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective1,
      'product_id' =>$idobjectiveproduct11,
      'name' => 'Asignación de recursos al proyecto',
      'goal_1' => 1,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 4,
      'weighing' => 1, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity11 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective2,
      'product_id' =>$idobjectiveproduct12,
      'name' => 'Planes de Ordenación y Manejo de cuencas hidrográficas Alto Lebrija, Cáchira Sur, Lebrija Medio y Sogamoso  formulados y/o actualizados',
      'goal_1' => 0,
      'goal_2' => 0,
      'goal_3' => 1,
      'goal_4' => 2,
      'goal' => 3,
      'weighing' => 8, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity12 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective2,
      'product_id' =>$idobjectiveproduct13,
      'name' => 'Adopción de PORH para corriente río Frío',
      'goal_1' => 0,
      'goal_2' => 25,
      'goal_3' => 0.5,
      'goal_4' => 0,
      'goal' => 25.5,
      'weighing' => 8, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity13 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective2,
      'product_id' =>$idobjectiveproduct14,
      'name' => 'Hectáreas con Planes de Ordenación y Manejo de cuencas hidrográficas Alto Lebrija, Cáchira Sur, Lebrija Medio y Sogamoso',
      'goal_1' => 0,
      'goal_2' => 0,
      'goal_3' => 0,
      'goal_4' => 0,
      'goal' => 0,
      'weighing' => 8, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity14 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective2,
      'product_id' =>$idobjectiveproduct15,
      'name' => 'Corrientes con ordenamiento del recurso hídrico ',
      'goal_1' => 0,
      'goal_2' => 0,
      'goal_3' => 0,
      'goal_4' => 0,
      'goal' => 0,
      'weighing' => 8, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity15 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective2,
      'product_id' =>$idobjectiveproduct16,
      'name' => 'Área estudiada con soporte para la declaratoria de áreas protegidas ',
      'goal_1' => 2500,
      'goal_2' => 4200,
      'goal_3' => 3921,
      'goal_4' => 11633,
      'goal' => 22254,
      'weighing' => 8, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity16 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective2,
      'product_id' =>$idobjectiveproduct17,
      'name' => 'Hectáreas en áreas protegidas con planes de manejo ',
      'goal_1' => 0,
      'goal_2' => 2805,
      'goal_3' => 0,
      'goal_4' => 11700,
      'goal' => 14505,
      'weighing' => 8, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity17 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective2,
      'product_id' =>$idobjectiveproduct18,
      'name' => 'Hectáreas de ecosistemas de páramo con zonificación y determinación del régimen de uso formulados ',
      'goal_1' => 0,
      'goal_2' => 0,
      'goal_3' => 0,
      'goal_4' => 0,
      'goal' => 0,
      'weighing' => 8, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity18 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective2,
      'product_id' =>$idobjectiveproduct19,
      'name' => 'Áreas con Planes de Ordenación y Manejo Forestal PGOMF actualizadas',
      'goal_1' => 0,
      'goal_2' => 0,
      'goal_3' => 0,
      'goal_4' => 486360,
      'goal' => 486360,
      'weighing' => 8, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity19 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective2,
      'product_id' =>$idobjectiveproduct20,
      'name' => 'Municipios asistidos en la concertación, revisión, evaluación y seguimiento de los instrumentos de ordenamiento y planificación territorial de segunda generación',
      'goal_1' => 13,
      'goal_2' => 13,
      'goal_3' => 13,
      'goal_4' => 13,
      'goal' => 52,
      'weighing' => 7, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity20 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective2,
      'product_id' =>$idobjectiveproduct21,
      'name' => 'Áreas protegidas con seguimiento y evaluación ',
      'goal_1' => 50745,
      'goal_2' => 0,
      'goal_3' => 0,
      'goal_4' => 0,
      'goal' => 50745,
      'weighing' => 7, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity21 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective2,
      'product_id' =>$idobjectiveproduct22,
      'name' => 'Hectáreas de cuencas hidrográficas ordenadas con seguimiento y evaluación *',
      'goal_1' => 273450,
      'goal_2' => 0,
      'goal_3' => 0,
      'goal_4' => 0,
      'goal' => 273450,
      'weighing' => 7, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity22 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective2,
      'product_id' =>$idobjectiveproduct23,
      'name' => 'Planes de manejo de áreas protegidas con seguimiento',
      'goal_1' => 0,
      'goal_2' => 5,
      'goal_3' => 5,
      'goal_4' => 5,
      'goal' => 15,
      'weighing' => 7, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity23 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective2,
      'product_id' =>$idobjectiveproduct24,
      'name' => 'POMCAS con seguimiento',
      'goal_1' => 0,
      'goal_2' => 6,
      'goal_3' => 6,
      'goal_4' => 6,
      'goal' => 18,
      'weighing' => 7, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity24 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective2,
      'product_id' =>$idobjectiveproduct25,
      'name' => 'Asignación de recursos al proyecto',
      'goal_1' => 1,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 4,
      'weighing' => 1, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity25 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective3,
      'product_id' =>$idobjectiveproduct26,
      'name' => 'Estudios de vulnerabilidad, amenaza y riesgo del área de jusridicción de la CDMB.',
      'goal_1' => 0,
      'goal_2' => 1,
      'goal_3' => 0,
      'goal_4' => 1,
      'goal' => 2,
      'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity26 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective3,
      'product_id' =>$idobjectiveproduct27,
      'name' => 'Entes territoriales asesorados en la formulación implementación y/o actualización de los planes municipales de gestión del riesgo de desastres *',
      'goal_1' => 13,
      'goal_2' => 0,
      'goal_3' => 0,
      'goal_4' => 0,
      'goal' => 13,
      'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity27 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective3,
      'product_id' =>$idobjectiveproduct28,
      'name' => 'Instituciones de socorro, capacitadas y/o apoyadas. ',
      'goal_1' => 2,
      'goal_2' => 0,
      'goal_3' => 0,
      'goal_4' => 0,
      'goal' => 2,
      'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity28 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective3,
      'product_id' =>$idobjectiveproduct29,
      'name' => 'CMGRD y  CDGRD asesorados y apoyados',
      'goal_1' => 14,
      'goal_2' => 14,
      'goal_3' => 14,
      'goal_4' => 14,
      'goal' => 56,
      'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity29 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective3,
      'product_id' =>$idobjectiveproduct30,
      'name' => 'Estudios y Diseños realizados por año.',
      'goal_1' => 3,
      'goal_2' => 5,
      'goal_3' => 5,
      'goal_4' => 5,
      'goal' => 18,
      'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity30 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective3,
      'product_id' =>$idobjectiveproduct31,
      'name' => 'Población beneficiada con medidas de adaptación y mitigación al riesgo de desastres',
      'goal_1' => 30000,
      'goal_2' => 30000,
      'goal_3' => 30000,
      'goal_4' => 30000,
      'goal' => 120000,
      'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity31 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective3,
      'product_id' =>$idobjectiveproduct32,
      'name' => 'Alianzas Estratégicas establecidas',
      'goal_1' => 1,
      'goal_2' => 2,
      'goal_3' => 2,
      'goal_4' => 2,
      'goal' => 7,
      'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity32 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective3,
      'product_id' =>$idobjectiveproduct33,
      'name' => 'Acompañamiento en la caracterización de eventos dañinos naturales o antrópicos a toda escala',
      'goal_1' => 0,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 3,
      'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity33 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective3,
      'product_id' =>$idobjectiveproduct34,
      'name' => 'Capacitación realizada a las comunidades del área de jurisdicción en gestión del riesgo',
      'goal_1' => 0,
      'goal_2' => 50,
      'goal_3' => 50,
      'goal_4' => 50,
      'goal' => 150,
      'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity34 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective3,
      'product_id' =>$idobjectiveproduct35,
      'name' => 'Asignación de recursos al proyecto',
      'goal_1' => 1,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 4,
      'weighing' => 1, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity35 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective4,
      'product_id' =>$idobjectiveproduct36,
      'name' => 'Plan Integral Departamental de Cambio Climático: formulado y aprobado con apoyo técnico de la CDMB',
      'goal_1' => 1,
      'goal_2' => 0,
      'goal_3' => 0,
      'goal_4' => 0,
      'goal' => 1,
      'weighing' => 15, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity36 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective4,
      'product_id' =>$idobjectiveproduct37,
      'name' => 'Plan Integral Departamental de cambio climático en Implementación y seguimiento, en el área de jurisdicción.',
      'goal_1' => 0,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 3,
      'weighing' => 14, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity37 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective4,
      'product_id' =>$idobjectiveproduct38,
      'name' => 'Nodo Regional Norandino de Cambio Climático apoyado y funcionando ',
      'goal_1' => 1,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 4,
      'weighing' => 14, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity38 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective4,
      'product_id' =>$idobjectiveproduct39,
      'name' => 'Política Nacional de cambio  climático apoyada en su  implementación,',
      'goal_1' => 1,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 4,
      'weighing' => 14, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity39 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective4,
      'product_id' =>$idobjectiveproduct40,
      'name' => 'Actores regionales asesorados técnicamente en medidas de cambio climático',
      'goal_1' => 0,
      'goal_2' => 0,
      'goal_3' => 3,
      'goal_4' => 4,
      'goal' => 7,
      'weighing' => 14, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity40 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective4,
      'product_id' =>$idobjectiveproduct41,
      'name' => 'Sectores económicos, sociales, gremiales y público  recibiendo direccionamiento técnico para la incorporación de medidas de adaptación y mitigación en sus planes de acción',
      'goal_1' => 0,
      'goal_2' => 0,
      'goal_3' => 0,
      'goal_4' => 0,
      'goal' => 0,
      'weighing' => 14, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity41 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective4,
      'product_id' =>$idobjectiveproduct42,
      'name' => 'Municipios del área de jurisdicción de la CDMB asesorados para la inclusión,  diseño, planificación y ejecución de acciones relacionadas con cambio climático.',
      'goal_1' => 0,
      'goal_2' => 13,
      'goal_3' => 13,
      'goal_4' => 13,
      'goal' => 39,
      'weighing' => 14, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity42 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective4,
      'product_id' =>$idobjectiveproduct43,
      'name' => 'Asignación de recursos al proyecto',
      'goal_1' => 1,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 4,
      'weighing' => 1, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity43 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective5,
      'product_id' =>$idobjectiveproduct44,
      'name' => 'Bosque nativo con reconocimiento de incentivo a la conservación *',
      'goal_1' => 4000,
      'goal_2' => 4000,
      'goal_3' => 3500,
      'goal_4' => 3500,
      'goal' => 15000,
      'weighing' => 9, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity44 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective5,
      'product_id' =>$idobjectiveproduct45,
      'name' => 'Hectáreas con tratamiento y manejo ambiental en ecosistemas estratégicos de predios institucionales',
      'goal_1' => 45,
      'goal_2' => 45,
      'goal_3' => 15,
      'goal_4' => 100,
      'goal' => 205,
      'weighing' => 9, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity45 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective5,
      'product_id' =>$idobjectiveproduct46,
      'name' => 'Material Vegetal producido para los diferentes proyectos  de la CDMB.',
      'goal_1' => 700000,
      'goal_2' => 800000,
      'goal_3' => 700000,
      'goal_4' => 200000,
      'goal' => 2400000,
      'weighing' => 9, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity46 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective5,
      'product_id' =>$idobjectiveproduct47,
      'name' => 'Áreas con suelos degradados en recuperación y rehabilitación ',
      'goal_1' => 30,
      'goal_2' => 30,
      'goal_3' => 20,
      'goal_4' => 30,
      'goal' => 110,
      'weighing' => 8, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity47 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective5,
      'product_id' =>$idobjectiveproduct48,
      'name' => 'Área establecida de Bosque protector productor ',
      'goal_1' => 75,
      'goal_2' => 20,
      'goal_3' => 15,
      'goal_4' => 40,
      'goal' => 150,
      'weighing' => 8, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity48 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective5,
      'product_id' =>$idobjectiveproduct49,
      'name' => 'Hectáreas establecidas con sistemas Agroforestales',
      'goal_1' => 40,
      'goal_2' => 45,
      'goal_3' => 25,
      'goal_4' => 0,
      'goal' => 110,
      'weighing' => 8, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity49 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective5,
      'product_id' =>$idobjectiveproduct50,
      'name' => 'Hectáreas establecidas  con coberturas para protección de cañadas y aislamiento de nacimientos',
      'goal_1' => 80,
      'goal_2' => 75,
      'goal_3' => 30,
      'goal_4' => 50,
      'goal' => 235,
      'weighing' => 8, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity50 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective5,
      'product_id' =>$idobjectiveproduct51,
      'name' => 'Hectáreas restauradas con especies amenazadas',
      'goal_1' => 20,
      'goal_2' => 10,
      'goal_3' => 5,
      'goal_4' => 10,
      'goal' => 45,
      'weighing' => 8, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity51 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective5,
      'product_id' =>$idobjectiveproduct52,
      'name' => 'Hectáreas establecidas de cercas vivas ',
      'goal_1' => 26,
      'goal_2' => 20,
      'goal_3' => 10,
      'goal_4' => 15,
      'goal' => 71,
      'weighing' => 8, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity52 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective5,
      'product_id' =>$idobjectiveproduct53,
      'name' => 'Hectáreas reconvertidas mediante la implementación de procesos de producción y manejo sostenible en ecosistemas estratégicos, y otras áreas de especial importancia ambiental. (pago por servicios ambientales)',
      'goal_1' => 10,
      'goal_2' => 10,
      'goal_3' => 8,
      'goal_4' => 10,
      'goal' => 38,
      'weighing' => 8, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity53 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective5,
      'product_id' =>$idobjectiveproduct54,
      'name' => 'Sectores productivos con acompañamiento para la reconversión hacia sistemas sostenibles de producción ',
      'goal_1' => 0,
      'goal_2' => 1,
      'goal_3' => 0,
      'goal_4' => 1,
      'goal' => 2,
      'weighing' => 8, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity54 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective5,
      'product_id' =>$idobjectiveproduct55,
      'name' => 'Requerimientos atendidos relacionados con el uso y aprovechamiento de los RNR por parte de la comunidad.',
      'goal_1' => 1,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 4,
      'weighing' => 8, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity55 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective5,
      'product_id' =>$idobjectiveproduct56,
      'name' => 'Asignación de recursos al proyecto',
      'goal_1' => 1,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 4,
      'weighing' => 1, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity56 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective6,
      'product_id' =>$idobjectiveproduct57,
      'name' => 'Nuevos registros en las Colecciones de Herbario CDMB, y de plantas vivas del JBEV ',
      'goal_1' => 220,
      'goal_2' => 220,
      'goal_3' => 220,
      'goal_4' => 220,
      'goal' => 880,
      'weighing' => 17, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity57 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective6,
      'product_id' =>$idobjectiveproduct58,
      'name' => 'Planes de manejo formulados y en ejecución para especies de flora y fauna  silvestre en peligro de extinción con distribución en el área de jurisdicción de la CDMB',
      'goal_1' => 2,
      'goal_2' => 2,
      'goal_3' => 2,
      'goal_4' => 2,
      'goal' => 8,
      'weighing' => 17, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity58 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective6,
      'product_id' =>$idobjectiveproduct59,
      'name' => 'Planes de manejo formulados para especies de flora y fauna en categoría de invasoras priorizadas teniendo en cuenta el grado de afectación causado. ',
      'goal_1' => 0,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 3,
      'weighing' => 17, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity59 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective6,
      'product_id' =>$idobjectiveproduct60,
      'name' => 'Protocolos de propagación de especies vegetales nativas (maderables y no maderables)',
      'goal_1' => 1,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 4,
      'weighing' => 16, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity60 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective6,
      'product_id' =>$idobjectiveproduct61,
      'name' => 'Estudios  y protocolos relacionados con la biología y fisiología de la fauna silvestre alojada en el CAV, que propenda por su cuidado y bienestar,   con especial énfasis en especies catalogadas en peligro de extinción.',
      'goal_1' => 0,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 3,
      'weighing' => 16, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity61 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective6,
      'product_id' =>$idobjectiveproduct62,
      'name' => 'Ejemplares de fauna silvestre atendidos en el CAV-CEARFS y con disposición final, de acuerdo a la normatividad ambiental vigente.',
      'goal_1' => 1000,
      'goal_2' => 100,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 1102,
      'weighing' => 16, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity62 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective6,
      'product_id' =>$idobjectiveproduct63,
      'name' => 'Asignación de recursos al proyecto',
      'goal_1' => 1,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 4,
      'weighing' => 1, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity63 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective7,
      'product_id' =>$idobjectiveproduct64,
      'name' => 'Ventanilla de Negocios Verdes instalada y funcionando al interior de la CDMB *',
      'goal_1' => 1,
      'goal_2' => 0,
      'goal_3' => 0,
      'goal_4' => 0,
      'goal' => 1,
      'weighing' => 15, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity64 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective7,
      'product_id' =>$idobjectiveproduct65,
      'name' => 'Solicitudes de aval de negocios verdes atendidos',
      'goal_1' => 0,
      'goal_2' => 100,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 102,
      'weighing' => 14, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity65 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective7,
      'product_id' =>$idobjectiveproduct66,
      'name' => 'Agendas con compilación del conocimiento y los avances tecnológicos',
      'goal_1' => 0,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 3,
      'weighing' => 14, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity66 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective7,
      'product_id' =>$idobjectiveproduct67,
      'name' => 'Cadenas de valor promocionadas mediante la constitución de  redes  de productores  y prestadores de servicios  regionales  de negocios verdes * ',
      'goal_1' => 0,
      'goal_2' => 2,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 4,
      'weighing' => 14, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity67 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective7,
      'product_id' =>$idobjectiveproduct68,
      'name' => 'Guía metodológica que permita avalar un negocio como verde sostenible.',
      'goal_1' => 1,
      'goal_2' => 0,
      'goal_3' => 0,
      'goal_4' => 0,
      'goal' => 1,
      'weighing' => 14, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity68 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective7,
      'product_id' =>$idobjectiveproduct69,
      'name' => 'Convocatorias  regionales  realizadas  con Entidades Cooperantes ',
      'goal_1' => 1,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 4,
      'weighing' => 14, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity69 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective7,
      'product_id' =>$idobjectiveproduct70,
      'name' => 'Alianzas productivas apoyadas técnicamente ',
      'goal_1' => 3,
      'goal_2' => 3,
      'goal_3' => 3,
      'goal_4' => 3,
      'goal' => 12,
      'weighing' => 14, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity70 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective7,
      'product_id' =>$idobjectiveproduct71,
      'name' => 'Asignación de recursos al proyecto',
      'goal_1' => 1,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 4,
      'weighing' => 1, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity71 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective8,
      'product_id' =>$idobjectiveproduct72,
      'name' => 'Plataforma consolidada para la articulación, gestión del páramo entre autoridades ambientales y actores claves (Comisión Conjunta - SIRAP). *',
      'goal_1' => 50,
      'goal_2' => 0.5,
      'goal_3' => 0,
      'goal_4' => 0,
      'goal' => 50.5,
      'weighing' => 6, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity72 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective8,
      'product_id' =>$idobjectiveproduct73,
      'name' => 'Gestión territorial fortalecida por la red de pobladores y actores claves asociados al Complejo Santurbán-Berlín a través de eventos',
      'goal_1' => 15,
      'goal_2' => 34,
      'goal_3' => 0,
      'goal_4' => 0,
      'goal' => 49,
      'weighing' => 6, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity73 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective8,
      'product_id' =>$idobjectiveproduct74,
      'name' => 'Procesos de reconversión productiva implementados, en predios (parcelas), aislamientos con  uso sostenible del  páramo y restauración de áreas priorizadas  en el complejo de páramos Santurbán- Berlín',
      'goal_1' => 25,
      'goal_2' => 25,
      'goal_3' => 50,
      'goal_4' => 0,
      'goal' => 100,
      'weighing' => 6, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity74 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective8,
      'product_id' =>$idobjectiveproduct75,
      'name' => 'Aislamientos Implementados como estrategia de restauración pasiva en áreas de alta importancia ambiental seleccionadas en paramo Santurbán-Berlín. ',
      'goal_1' => 0,
      'goal_2' => 10000,
      'goal_3' => 40000,
      'goal_4' => 0,
      'goal' => 50000,
      'weighing' => 6, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity75 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective8,
      'product_id' =>$idobjectiveproduct76,
      'name' => 'Estrategia Diseñada para el fortalecimiento asociativo, basada en las necesidades de las organizaciones de productores locales. *',
      'goal_1' => 0.5,
      'goal_2' => 0.5,
      'goal_3' => 0,
      'goal_4' => 0,
      'goal' => 1,
      'weighing' => 6, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity76 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective8,
      'product_id' =>$idobjectiveproduct77,
      'name' => 'Organizaciones de productores locales fortalecidas con la aplicación de una estrategia de mejoramiento asociativo.',
      'goal_1' => 0,
      'goal_2' => 1,
      'goal_3' => 0,
      'goal_4' => 0,
      'goal' => 1,
      'weighing' => 6, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity77 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective8,
      'product_id' =>$idobjectiveproduct78,
      'name' => 'Estrategia implementada de negocios verdes sostenible priorizado para el territorio en razón al diagnóstico de oportunidades del nodo *',
      'goal_1' => 0.4,
      'goal_2' => 0.6,
      'goal_3' => 0,
      'goal_4' => 0,
      'goal' => 1,
      'weighing' => 6, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity78 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective8,
      'product_id' =>$idobjectiveproduct79,
      'name' => 'Mecanismo financiero diseñado para canalizar instrumentos e incentivos a la conservación del complejo de páramo Santurbán que incluya: actores clave, tipo de incentivos, fuentes de financiación, plan de trabajo y estrategia de sostenibilidad',
      'goal_1' => 0,
      'goal_2' => 0,
      'goal_3' => 0,
      'goal_4' => 1,
      'goal' => 1,
      'weighing' => 6, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity79 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective8,
      'product_id' =>$idobjectiveproduct80,
      'name' => 'Monitoreo del comportamiento de la vegetación en parcelas priorizadas con aislamiento de fuentes hídricas realizado.',
      'goal_1' => 0,
      'goal_2' => 0.4,
      'goal_3' => 0.2,
      'goal_4' => 0,
      'goal' => 0.6,
      'weighing' => 6, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity80 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective8,
      'product_id' =>$idobjectiveproduct81,
      'name' => 'Observatorio de páramo diseñado para generar las alianzas necesarias y la estrategia de sostenibilidad, con la academia entre otras organizaciones y actores cooperantes',
      'goal_1' => 0.4,
      'goal_2' => 0,
      'goal_3' => 0,
      'goal_4' => 0,
      'goal' => 0.4,
      'weighing' => 6, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity81 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective8,
      'product_id' =>$idobjectiveproduct82,
      'name' => 'Política pública fortalecida para generar espacios de trabajo con entes territoriales entre otros actores y su relación con el páramo',
      'goal_1' => 0,
      'goal_2' => 0,
      'goal_3' => 0,
      'goal_4' => 0,
      'goal' => 0,
      'weighing' => 6, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity82 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective8,
      'product_id' =>$idobjectiveproduct83,
      'name' => 'Política pública formulada',
      'goal_1' => 0,
      'goal_2' => 0,
      'goal_3' => 1,
      'goal_4' => 0,
      'goal' => 1,
      'weighing' => 6, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity83 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective8,
      'product_id' =>$idobjectiveproduct84,
      'name' => 'Estrategia de comunicación formulada para sensibilizar a las comunidades frente al páramo y empoderarlas de su conservación *',
      'goal_1' => 0.4,
      'goal_2' => 0.6,
      'goal_3' => 0,
      'goal_4' => 0,
      'goal' => 1,
      'weighing' => 6, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity84 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective8,
      'product_id' =>$idobjectiveproduct85,
      'name' => 'Seguimiento y control de las actividades de Reconversión productivas, saneamiento ambiental, Restauración y monitoreo de Páramo.',
      'goal_1' => 1,
      'goal_2' => 1,
      'goal_3' => 0,
      'goal_4' => 1,
      'goal' => 3,
      'weighing' => 6, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity85 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective8,
      'product_id' =>$idobjectiveproduct86,
      'name' => 'Áreas adecuadas de vivero para propagación de especies nativas de paramo',
      'goal_1' => 0,
      'goal_2' => 0,
      'goal_3' => 0,
      'goal_4' => 3230,
      'goal' => 3230,
      'weighing' => 5, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity86 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective8,
      'product_id' =>$idobjectiveproduct87,
      'name' => 'Material vegetal de especies nativas de páramo producido',
      'goal_1' => 0,
      'goal_2' => 0,
      'goal_3' => 0,
      'goal_4' => 5000,
      'goal' => 5000,
      'weighing' => 5, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity87 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective8,
      'product_id' =>$idobjectiveproduct88,
      'name' => 'Fincas con estrategia de ordenamiento predial implementada',
      'goal_1' => 0,
      'goal_2' => 0,
      'goal_3' => 0,
      'goal_4' => 120,
      'goal' => 120,
      'weighing' => 5, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity88 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective8,
      'product_id' =>$idobjectiveproduct89,
      'name' => 'Asignación de recursos al proyecto',
      'goal_1' => 1,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 4,
      'weighing' => 1, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity89 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective9,
      'product_id' =>$idobjectiveproduct90,
      'name' => 'Formular e implementar la política de generación del conocimiento e investigación ambiental de la CDMB *',
      'goal_1' => 0.25,
      'goal_2' => 0.5,
      'goal_3' => 0.75,
      'goal_4' => 1,
      'goal' => 2.5,
      'weighing' => 8, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity90 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective9,
      'product_id' =>$idobjectiveproduct91,
      'name' => 'Crear el banco de estudios e investigaciones de la CDMB *',
      'goal_1' => 0.25,
      'goal_2' => 2,
      'goal_3' => 0,
      'goal_4' => 0,
      'goal' => 2.25,
      'weighing' => 8, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity91 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective9,
      'product_id' =>$idobjectiveproduct92,
      'name' => 'Estudios e investigaciones de la CDMB priorizados en el Plan de Investigación ambiental 2012-2023, realizados',
      'goal_1' => 0,
      'goal_2' => 0,
      'goal_3' => 2,
      'goal_4' => 2,
      'goal' => 4,
      'weighing' => 8, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity92 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective9,
      'product_id' =>$idobjectiveproduct93,
      'name' => 'Estudios de investigación e información ambiental, publicados en la página web de la CDMB',
      'goal_1' => 1,
      'goal_2' => 2,
      'goal_3' => 2,
      'goal_4' => 2,
      'goal' => 7,
      'weighing' => 8, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity93 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective9,
      'product_id' =>$idobjectiveproduct94,
      'name' => 'Eventos ambientales ejecutados sobre los resultados de los estudios e investigaciones ambientales de la región',
      'goal_1' => 1,
      'goal_2' => 2,
      'goal_3' => 2,
      'goal_4' => 2,
      'goal' => 7,
      'weighing' => 8, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity94 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective9,
      'product_id' =>$idobjectiveproduct95,
      'name' => 'Sistema de información ambiental con administración, operación y socializado *',
      'goal_1' => 1,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 4,
      'weighing' => 8, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity95 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective9,
      'product_id' =>$idobjectiveproduct96,
      'name' => 'Reportes sobre el estado de la calidad de los recursos naturales',
      'goal_1' => 9,
      'goal_2' => 9,
      'goal_3' => 9,
      'goal_4' => 9,
      'goal' => 36,
      'weighing' => 8, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity96 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective9,
      'product_id' =>$idobjectiveproduct97,
      'name' => 'Diseño del observatorio ambiental regional y de un sistema de alertas tempranas *',
      'goal_1' => 0,
      'goal_2' => 0.4,
      'goal_3' => 0.8,
      'goal_4' => 1,
      'goal' => 2.2,
      'weighing' => 8, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity97 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective9,
      'product_id' =>$idobjectiveproduct98,
      'name' => 'Convenios interinstitucionales para la ejecución de estudios e investigaciones ambientales priorizadas',
      'goal_1' => 1,
      'goal_2' => 2,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 5,
      'weighing' => 7, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity98 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective9,
      'product_id' =>$idobjectiveproduct99,
      'name' => 'Modernización y actualización de las Redes de monitoreo *',
      'goal_1' => 0.1,
      'goal_2' => 4,
      'goal_3' => 4,
      'goal_4' => 4,
      'goal' => 12.1,
      'weighing' => 7, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity99 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective9,
      'product_id' =>$idobjectiveproduct100,
      'name' => 'Parámetros aprobados en pruebas de desempeños del IDEAM *',
      'goal_1' => 0.7,
      'goal_2' => 0.8,
      'goal_3' => 0.85,
      'goal_4' => 0.9,
      'goal' => 3.25,
      'weighing' => 7, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity100 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective9,
      'product_id' =>$idobjectiveproduct101,
      'name' => 'Pruebas de Desempeño con el IDEAM',
      'goal_1' => 1,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 4,
      'weighing' => 7, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity101 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective9,
      'product_id' =>$idobjectiveproduct102,
      'name' => 'Pruebas del INS (Programa Interlaboratorio de control de calidad de aguas potables ¨PICCAP)',
      'goal_1' => 0,
      'goal_2' => 0,
      'goal_3' => 0,
      'goal_4' => 0,
      'goal' => 0,
      'weighing' => 7, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity102 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective9,
      'product_id' =>$idobjectiveproduct103,
      'name' => 'Asignación de recursos al proyecto',
      'goal_1' => 1,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 4,
      'weighing' => 1, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity103 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective10,
      'product_id' =>$idobjectiveproduct104,
      'name' => 'Predios en áreas de importancia ambiental y gestión del riesgo en el área metropolitana de Bucaramanga, adquiridos. ',
      'goal_1' => 1,
      'goal_2' => 1,
      'goal_3' => 0,
      'goal_4' => 0,
      'goal' => 2,
      'weighing' => 15, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity104 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective10,
      'product_id' =>$idobjectiveproduct105,
      'name' => 'Mejoras en predios propiedad de la CDMB.  adquiridas',
      'goal_1' => 1,
      'goal_2' => 1,
      'goal_3' => 0,
      'goal_4' => 0,
      'goal' => 2,
      'weighing' => 14, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity105 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective10,
      'product_id' =>$idobjectiveproduct106,
      'name' => 'Áreas para la preservación de Cuencas Hidrográficas, adquiridas',
      'goal_1' => 80,
      'goal_2' => 50,
      'goal_3' => 30,
      'goal_4' => 30,
      'goal' => 190,
      'weighing' => 14, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity106 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective10,
      'product_id' =>$idobjectiveproduct107,
      'name' => 'Predios propiedad de la CDMB con coberturas vegetales mantenidos *',
      'goal_1' => 961,
      'goal_2' => 963,
      'goal_3' => 965,
      'goal_4' => 967,
      'goal' => 3856,
      'weighing' => 14, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity107 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective10,
      'product_id' =>$idobjectiveproduct108,
      'name' => 'Predios de la CDMB con planta física existente, con mantenimiento y adecuación *',
      'goal_1' => 20,
      'goal_2' => 20,
      'goal_3' => 20,
      'goal_4' => 20,
      'goal' => 80,
      'weighing' => 14, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity108 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective10,
      'product_id' =>$idobjectiveproduct109,
      'name' => 'Predios propiedad de la CDMB controlados y vigilados*',
      'goal_1' => 961,
      'goal_2' => 963,
      'goal_3' => 965,
      'goal_4' => 967,
      'goal' => 3856,
      'weighing' => 14, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity109 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective10,
      'product_id' =>$idobjectiveproduct110,
      'name' => 'Cerca de cerramiento en predios institucionales ',
      'goal_1' => 3000,
      'goal_2' => 4000,
      'goal_3' => 600,
      'goal_4' => 500,
      'goal' => 8100,
      'weighing' => 14, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity110 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective10,
      'product_id' =>$idobjectiveproduct111,
      'name' => 'Asignación de recursos al proyecto',
      'goal_1' => 1,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 4,
      'weighing' => 1, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity111 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective11,
      'product_id' =>$idobjectiveproduct112,
      'name' => 'Documento entendimiento estratégico actualizado',
      'goal_1' => 1,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 4,
      'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity112 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective11,
      'product_id' =>$idobjectiveproduct113,
      'name' => 'Porcentaje de procesos institucionales optimizados con soluciones de TI *',
      'goal_1' => 0.2,
      'goal_2' => 0.4,
      'goal_3' => 0.7,
      'goal_4' => 0.9,
      'goal' => 2.2,
      'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity113 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective11,
      'product_id' =>$idobjectiveproduct114,
      'name' => 'Módulos del Sistema de Información Corporativo optimizados',
      'goal_1' => 0,
      'goal_2' => 0,
      'goal_3' => 0,
      'goal_4' => 0,
      'goal' => 0,
      'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity114 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective11,
      'product_id' =>$idobjectiveproduct115,
      'name' => 'Actualización y optimización de capacidades de servicios tecnológicos *',
      'goal_1' => 0.2,
      'goal_2' => 0.4,
      'goal_3' => 0.6,
      'goal_4' => 0.8,
      'goal' => 2,
      'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity115 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective11,
      'product_id' =>$idobjectiveproduct116,
      'name' => 'Plan de continuidad de servicios de TI en ejecución y actualizado',
      'goal_1' => 1,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 4,
      'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity116 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective11,
      'product_id' =>$idobjectiveproduct117,
      'name' => 'Sistema de Gestión de Seguridad desarrollado de acuerdo a la necesidad de la entidad *',
      'goal_1' => 0.2,
      'goal_2' => 0.45,
      'goal_3' => 0.7,
      'goal_4' => 1,
      'goal' => 2.35,
      'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity117 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective11,
      'product_id' =>$idobjectiveproduct118,
      'name' => 'Cumplimiento de actividades estrategia de Gobierno en Línea *',
      'goal_1' => 0.5,
      'goal_2' => 0.6,
      'goal_3' => 0.6,
      'goal_4' => 1,
      'goal' => 2.7,
      'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity118 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective11,
      'product_id' =>$idobjectiveproduct119,
      'name' => 'Actualización del Programa de Gestión Documental PGD  y elaboración del Plan Institucional de Archivos de la Entidad (PINAR)',
      'goal_1' => 2,
      'goal_2' => 180000,
      'goal_3' => 0,
      'goal_4' => 0,
      'goal' => 180002,
      'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity119 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective11,
      'product_id' =>$idobjectiveproduct120,
      'name' => 'Digitalizar documentos series documentales de la CDMB',
      'goal_1' => 60000,
      'goal_2' => 0,
      'goal_3' => 180000,
      'goal_4' => 180000,
      'goal' => 420000,
      'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity120 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective11,
      'product_id' =>$idobjectiveproduct121,
      'name' => 'Asignación de recursos al proyecto',
      'goal_1' => 1,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 4,
      'weighing' => 1, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity121 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective12,
      'product_id' =>$idobjectiveproduct122,
      'name' => 'Renovar y mantener las certificaciones de los Sistemas de Gestión implementados',
      'goal_1' => 4,
      'goal_2' => 4,
      'goal_3' => 0,
      'goal_4' => 6,
      'goal' => 14,
      'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity122 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective12,
      'product_id' =>$idobjectiveproduct123,
      'name' => 'Realizar Informe de Responsabilidad Social Empresarial',
      'goal_1' => 0,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 3,
      'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity123 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective12,
      'product_id' =>$idobjectiveproduct124,
      'name' => 'Plan Anticorrupción y de Atención al ciudadano, elaborado, divulgado y ejecutado.',
      'goal_1' => 1,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 4,
      'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity124 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective12,
      'product_id' =>$idobjectiveproduct125,
      'name' => 'Plan Anticorrupción y de Atención al ciudadano ejecutado',
      'goal_1' => 0,
      'goal_2' => 0,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 2,
      'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity125 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective12,
      'product_id' =>$idobjectiveproduct126,
      'name' => 'Plan de Gestión Ambiental Regional 2016-2031 reformulado *',
      'goal_1' => 0.15,
      'goal_2' => 1,
      'goal_3' => 0,
      'goal_4' => 0,
      'goal' => 1.15,
      'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity126 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective12,
      'product_id' =>$idobjectiveproduct127,
      'name' => 'Proyectos Plan de Acción 2016-2019 y demás proyectos surgidos  de necesidades de la gestión institucional, viabilizados y registrados en el Banco de Proyectos.',
      'goal_1' => 1,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 4,
      'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity127 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective12,
      'product_id' =>$idobjectiveproduct128,
      'name' => 'Política de Género CDMB formulada y difundida.',
      'goal_1' => 1,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 4,
      'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity128 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective12,
      'product_id' =>$idobjectiveproduct129,
      'name' => 'Diagnóstico participativo con enfoque de género en el área de jurisdicción CDMB, elaborado.',
      'goal_1' => 1,
      'goal_2' => 0,
      'goal_3' => 0,
      'goal_4' => 0,
      'goal' => 1,
      'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity129 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective12,
      'product_id' =>$idobjectiveproduct130,
      'name' => 'Iniciativas ambientales de mujeres de los sectores urbano y rural del área de jurisdicción CDMB, apoyadas.',
      'goal_1' => 0,
      'goal_2' => 1,
      'goal_3' => 4,
      'goal_4' => 5,
      'goal' => 10,
      'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity130 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective12,
      'product_id' =>$idobjectiveproduct131,
      'name' => 'Asignación de recursos al proyecto',
      'goal_1' => 1,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 4,
      'weighing' => 1, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity131 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective13,
      'product_id' =>$idobjectiveproduct132,
      'name' => 'Permisos de aprovechamiento forestales resueltas dentro de los tiempos establecidos por la ley',
      'goal_1' => 1,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 4,
      'weighing' => 17, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity132 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective13,
      'product_id' =>$idobjectiveproduct133,
      'name' => 'Porcentaje de quejas y contravenciones ambientales atendidas con respecto a los recursos flora, fauna y biodiversidad',
      'goal_1' => 1,
      'goal_2' => 1,
      'goal_3' => 0.8,
      'goal_4' => 0.6,
      'goal' => 3.4,
      'weighing' => 17, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity133 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective13,
      'product_id' =>$idobjectiveproduct134,
      'name' => 'Porcentaje de individuos de fauna silvestre atendidos con relación a los entregados y/o decomisados',
      'goal_1' => 1,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 4,
      'weighing' => 17, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity134 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective13,
      'product_id' =>$idobjectiveproduct135,
      'name' => 'Autorizaciones ambientales con seguimiento a establecimientos generadoras de emisiones atmosféricas, Ruido y quejas por afectación al recurso aire',
      'goal_1' => 1,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 4,
      'weighing' => 17, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity135 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective13,
      'product_id' =>$idobjectiveproduct136,
      'name' => 'Evaluación y seguimiento a Planes de Gestión Integral de Residuos Sólidos, Hospitalarios, Peligrosos e industriales.',
      'goal_1' => 1,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 4,
      'weighing' => 16, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity136 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective13,
      'product_id' =>$idobjectiveproduct137,
      'name' => 'Autorizaciones ambientales con seguimiento a proyectos de minería, infraestructura y energía realizados',
      'goal_1' => 1,
      'goal_2' => 1,
      'goal_3' => 0.9,
      'goal_4' => 1,
      'goal' => 3.9,
      'weighing' => 16, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity137 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective13,
      'product_id' =>$idobjectiveproduct138,
      'name' => 'Asignación de recursos al proyecto',
      'goal_1' => 1,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 4,
      'weighing' => 1, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity138 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective14,
      'product_id' =>$idobjectiveproduct139,
      'name' => 'Comités Técnicos Interinstitucionales de Educación Ambiental del Orden Departamental y Municipal - CIDEA-, orientados y operando.',
      'goal_1' => 14,
      'goal_2' => 14,
      'goal_3' => 14,
      'goal_4' => 14,
      'goal' => 56,
      'weighing' => 6, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity139 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective14,
      'product_id' =>$idobjectiveproduct140,
      'name' => 'Actores del Sector Educativo Formal participando en las estrategias propuestas desde la Política Nacional de Educación Ambiental.',
      'goal_1' => 230,
      'goal_2' => 330,
      'goal_3' => 250,
      'goal_4' => 330,
      'goal' => 1140,
      'weighing' => 6, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity140 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective14,
      'product_id' =>$idobjectiveproduct141,
      'name' => 'Asesoría a PRAE “significativos” en su formulación y ejecución, considerando el contexto de Subcuenca, la Propuesta PPA y Eje Cambio Climático.',
      'goal_1' => 20,
      'goal_2' => 20,
      'goal_3' => 20,
      'goal_4' => 22,
      'goal' => 82,
      'weighing' => 6, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity141 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective14,
      'product_id' =>$idobjectiveproduct142,
      'name' => 'Entes territoriales apoyados en acciones educativo-ambientales para el fortalecimiento de la gestión ambiental',
      'goal_1' => 0,
      'goal_2' => 0,
      'goal_3' => 14,
      'goal_4' => 14,
      'goal' => 28,
      'weighing' => 6, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity142 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective14,
      'product_id' =>$idobjectiveproduct143,
      'name' => 'Población capacitada en temáticas de Cambio Climático y Líneas Estratégicas del PAI 2016-2019, considerando a su vez el enfoque de género',
      'goal_1' => 0,
      'goal_2' => 0,
      'goal_3' => 4000,
      'goal_4' => 4000,
      'goal' => 8000,
      'weighing' => 6, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity143 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective14,
      'product_id' =>$idobjectiveproduct144,
      'name' => 'Acciones educativo-ambientales articuladas con Entes Territoriales para el fortalecimiento de la gestión ambiental.',
      'goal_1' => 14,
      'goal_2' => 14,
      'goal_3' => 0,
      'goal_4' => 0,
      'goal' => 28,
      'weighing' => 6, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity144 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective14,
      'product_id' =>$idobjectiveproduct145,
      'name' => 'Actores institucionales y sociales  capacitados en temáticas de Cambio Climático y Líneas Estratégicas del Plan de Acción 2016-2019, considerando a su vez el enfoque de género.',
      'goal_1' => 1000,
      'goal_2' => 4000,
      'goal_3' => 0,
      'goal_4' => 0,
      'goal' => 5000,
      'weighing' => 6, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity145 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective14,
      'product_id' =>$idobjectiveproduct146,
      'name' => 'PROCEDAS orientados en su formulación, implementación y articulados con los PRAE (Enfoque Contexto Subcuenca y Eje Cambio Climático) *',
      'goal_1' => 17,
      'goal_2' => 17,
      'goal_3' => 17,
      'goal_4' => 17,
      'goal' => 68,
      'weighing' => 6, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity146 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective14,
      'product_id' =>$idobjectiveproduct147,
      'name' => 'Jóvenes vinculados y  participando en el  programa  del MADS “Red  Nacional de Jóvenes de Ambiente”',
      'goal_1' => 400,
      'goal_2' => 400,
      'goal_3' => 400,
      'goal_4' => 400,
      'goal' => 1600,
      'weighing' => 6, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity147 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective14,
      'product_id' =>$idobjectiveproduct148,
      'name' => 'Eventos Interinstitucionales de impacto socio-ambiental (Jornadas y Campañas Ambientales “Unidos por el Ambiente”)  ejecutados.',
      'goal_1' => 20,
      'goal_2' => 30,
      'goal_3' => 30,
      'goal_4' => 30,
      'goal' => 110,
      'weighing' => 6, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity148 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective14,
      'product_id' =>$idobjectiveproduct149,
      'name' => 'Alianzas  territoriales que desarrollan la Política Nacional de Educación Ambiental a través de procesos que fortalezcan la gobernanza en la gestión ambiental.',
      'goal_1' => 10,
      'goal_2' => 10,
      'goal_3' => 10,
      'goal_4' => 10,
      'goal' => 40,
      'weighing' => 6, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity149 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective14,
      'product_id' =>$idobjectiveproduct150,
      'name' => 'Mecanismos de Participación Democrática (Audiencias Públicas y Diálogos Sociales) desarrollados.',
      'goal_1' => 1,
      'goal_2' => 14,
      'goal_3' => 14,
      'goal_4' => 14,
      'goal' => 43,
      'weighing' => 6, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity150 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective14,
      'product_id' =>$idobjectiveproduct151,
      'name' => 'Diseño y aplicación de las piezas publicitarias',
      'goal_1' => 5100,
      'goal_2' => 5500,
      'goal_3' => 5000,
      'goal_4' => 5500,
      'goal' => 21100,
      'weighing' => 6, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity151 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective14,
      'product_id' =>$idobjectiveproduct152,
      'name' => 'Implementación de medios de comunicación utilizados de manera eficiente en la difusión de la gestión ambiental',
      'goal_1' => 500,
      'goal_2' => 700,
      'goal_3' => 0,
      'goal_4' => 0,
      'goal' => 1200,
      'weighing' => 6, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity152 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective14,
      'product_id' =>$idobjectiveproduct153,
      'name' => 'Elaborar herramientas metodológicas para generar de manera eficiente y oportuna la información ambiental.',
      'goal_1' => 200,
      'goal_2' => 5000,
      'goal_3' => 0,
      'goal_4' => 0,
      'goal' => 5200,
      'weighing' => 5, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity153 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective14,
      'product_id' =>$idobjectiveproduct154,
      'name' => 'Piezas informativas divulgadas a través de los diferentes medios de comunicación ',
      'goal_1' => 0,
      'goal_2' => 0,
      'goal_3' => 600,
      'goal_4' => 600,
      'goal' => 1200,
      'weighing' => 5, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity154 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective14,
      'product_id' =>$idobjectiveproduct155,
      'name' => 'Contenidos digitales difundidos en redes sociales  ',
      'goal_1' => 0,
      'goal_2' => 0,
      'goal_3' => 5000,
      'goal_4' => 5000,
      'goal' => 10000,
      'weighing' => 5, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity155 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective14,
      'product_id' =>$idobjectiveproduct156,
      'name' => 'Asignación de recursos al proyecto',
      'goal_1' => 1,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 4,
      'weighing' => 1, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity156 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective15,
      'product_id' =>$idobjectiveproduct157,
      'name' => 'Organizaciones productivas y de servicios vinculadas y participando   de tecnologías de producción más limpia (P+L) considerando la metodología Institucional  ¨OCAMS¨. *',
      'goal_1' => 10,
      'goal_2' => 5,
      'goal_3' => 5,
      'goal_4' => 5,
      'goal' => 25,
      'weighing' => 17, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity157 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective15,
      'product_id' =>$idobjectiveproduct158,
      'name' => 'CDMB  participando en el Comité Interinstitucional Regional para la P+L liderado por la ANDI *',
      'goal_1' => 1,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 4,
      'weighing' => 17, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity158 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective15,
      'product_id' =>$idobjectiveproduct159,
      'name' => 'Organizaciones Productivas y de Servicios con seguimiento, que continúan ejecutando estrategias  de P+L en el marco de la metodología Institucional  OCAMS *',
      'goal_1' => 60,
      'goal_2' => 70,
      'goal_3' => 75,
      'goal_4' => 80,
      'goal' => 285,
      'weighing' => 17, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity159 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective15,
      'product_id' =>$idobjectiveproduct160,
      'name' => 'Cumplimiento de compromisos  adquiridos en los convenios de producción más limpia*',
      'goal_1' => 0.8,
      'goal_2' => 0.8,
      'goal_3' => 0.8,
      'goal_4' => 0.8,
      'goal' => 3.2,
      'weighing' => 16, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity160 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective15,
      'product_id' =>$idobjectiveproduct161,
      'name' => 'Sectores productivos y de servicios vinculados a la estrategia Responsabilidad Social Ambiental en el marco del Proyecto Educación Ambiental CDMB.',
      'goal_1' => 10,
      'goal_2' => 10,
      'goal_3' => 10,
      'goal_4' => 10,
      'goal' => 40,
      'weighing' => 16, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity161 = DB::getPdo()->lastInsertId();
      
      
      
    DB::table('activities')->insert([
      'objective_id' => $idobjective15,
      'product_id' =>$idobjectiveproduct162,
      'name' => 'Organizaciones productivas y de servicios con Reconocimiento Anual por su Desempeño y Gestión Ambiental.',
      'goal_1' => 1,
      'goal_2' => 1,
      'goal_3' => 1,
      'goal_4' => 1,
      'goal' => 4,
      'weighing' => 16, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity162 = DB::getPdo()->lastInsertId();
  
  
  DB::table('activities')->insert([
  'objective_id' => $idobjective15,
  'product_id' =>$idobjectiveproduct163,
  'name' => 'Asignación de recursos al proyecto',
  'goal_1' => 1,
  'goal_2' => 1,
  'goal_3' => 1,
  'goal_4' => 1,
  'goal' => 4,
  'weighing' => 1, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null, ]);$idactivity163 = DB::getPdo()->lastInsertId();



         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity2,
          'year' =>1,
          'value' => 100,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia2 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity3,
          'year' =>1,
          'value' => 100,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia3 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity4,
          'year' =>1,
          'value' => 100,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia4 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity6,
          'year' =>1,
          'value' => 100,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia6 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity8,
          'year' =>1,
          'value' => 100,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia8 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity10,
          'year' =>1,
          'value' => 30,
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
          'activity_id' => $idactivity16,
          'year' =>1,
          'value' => 2500,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia16 = DB::getPdo()->lastInsertId(); 



         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity20,
          'year' =>1,
          'value' => 13,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia20 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity21,
          'year' =>1,
          'value' => 50745,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia21 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity22,
          'year' =>1,
          'value' => 273450,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia22 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity25,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia25 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity27,
          'year' =>1,
          'value' => 13,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia27 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity28,
          'year' =>1,
          'value' => 2,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia28 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity29,
          'year' =>1,
          'value' => 14,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia29 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity30,
          'year' =>1,
          'value' => 3,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia30 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity31,
          'year' =>1,
          'value' => 30000,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia31 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity32,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia32 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity35,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia35 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity36,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia36 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity38,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia38 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity39,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia39 = DB::getPdo()->lastInsertId(); 



         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity43,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia43 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity44,
          'year' =>1,
          'value' => 4000,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia44 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity45,
          'year' =>1,
          'value' => 45,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia45 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity46,
          'year' =>1,
          'value' => 700000,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia46 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity47,
          'year' =>1,
          'value' => 30,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia47 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity48,
          'year' =>1,
          'value' => 75,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia48 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity49,
          'year' =>1,
          'value' => 40,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia49 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity50,
          'year' =>1,
          'value' => 80,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia50 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity51,
          'year' =>1,
          'value' => 20,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia51 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity52,
          'year' =>1,
          'value' => 26,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia52 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity53,
          'year' =>1,
          'value' => 10,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia53 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity55,
          'year' =>1,
          'value' => 100,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia55 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity56,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia56 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity57,
          'year' =>1,
          'value' => 220,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia57 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity58,
          'year' =>1,
          'value' => 2,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia58 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity60,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia60 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity62,
          'year' =>1,
          'value' => 850,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia62 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity63,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia63 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity64,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia64 = DB::getPdo()->lastInsertId(); 



         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity68,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia68 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity69,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia69 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity70,
          'year' =>1,
          'value' => 3,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia70 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity71,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia71 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity72,
          'year' =>1,
          'value' => 0.5,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia72 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity73,
          'year' =>1,
          'value' => 15,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia73 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity74,
          'year' =>1,
          'value' => 25,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia74 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity76,
          'year' =>1,
          'value' => 0.5,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia76 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity78,
          'year' =>1,
          'value' => 0.4,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia78 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity81,
          'year' =>1,
          'value' => 0.4,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia81 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity84,
          'year' =>1,
          'value' => 0.4,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia84 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity85,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia85 = DB::getPdo()->lastInsertId(); 



         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity89,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia89 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity90,
          'year' =>1,
          'value' => 0.25,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia90 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity91,
          'year' =>1,
          'value' => 0.25,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia91 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity93,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia93 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity94,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia94 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity95,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia95 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity96,
          'year' =>1,
          'value' => 9,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia96 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity98,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia98 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity99,
          'year' =>1,
          'value' => 0.1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia99 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity100,
          'year' =>1,
          'value' => 0.7,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia100 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity101,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia101 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity103,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia103 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity104,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia104 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity105,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia105 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity106,
          'year' =>1,
          'value' => 40,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia106 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity107,
          'year' =>1,
          'value' => 961,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia107 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity108,
          'year' =>1,
          'value' => 20,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia108 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity109,
          'year' =>1,
          'value' => 961,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia109 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity110,
          'year' =>1,
          'value' => 3000,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia110 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity111,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia111 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity112,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia112 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity113,
          'year' =>1,
          'value' => 0.2,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia113 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity115,
          'year' =>1,
          'value' => 0.16,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia115 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity116,
          'year' =>1,
          'value' => 0.8,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia116 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity117,
          'year' =>1,
          'value' => 0.2,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia117 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity118,
          'year' =>1,
          'value' => 0.5,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia118 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity119,
          'year' =>1,
          'value' => 2,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia119 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity120,
          'year' =>1,
          'value' => 61550,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia120 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity121,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia121 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity122,
          'year' =>1,
          'value' => 4,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia122 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity124,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia124 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity126,
          'year' =>1,
          'value' => 0.15,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia126 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity127,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia127 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity128,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia128 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity129,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia129 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity131,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia131 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity132,
          'year' =>1,
          'value' => 100,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia132 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity133,
          'year' =>1,
          'value' => 100,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia133 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity134,
          'year' =>1,
          'value' => 100,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia134 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity135,
          'year' =>1,
          'value' => 100,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia135 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity136,
          'year' =>1,
          'value' => 100,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia136 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity137,
          'year' =>1,
          'value' => 100,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia137 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity138,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia138 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity139,
          'year' =>1,
          'value' => 14,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia139 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity140,
          'year' =>1,
          'value' => 231,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia140 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity141,
          'year' =>1,
          'value' => 20,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia141 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity144,
          'year' =>1,
          'value' => 14,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia144 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity145,
          'year' =>1,
          'value' => 4738,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia145 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity146,
          'year' =>1,
          'value' => 17,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia146 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity147,
          'year' =>1,
          'value' => 400,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia147 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity148,
          'year' =>1,
          'value' => 20,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia148 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity149,
          'year' =>1,
          'value' => 10,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia149 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity150,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia150 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity151,
          'year' =>1,
          'value' => 6505,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia151 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity152,
          'year' =>1,
          'value' => 500,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia152 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity153,
          'year' =>1,
          'value' => 1231,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia153 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity156,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia156 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity157,
          'year' =>1,
          'value' => 14,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia157 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity158,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia158 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity159,
          'year' =>1,
          'value' => 60,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia159 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity160,
          'year' =>1,
          'value' => 0.8,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia160 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity161,
          'year' =>1,
          'value' => 10,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia161 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity162,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia162 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity163,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia163 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity1,
          'year' =>2,
          'value' => 100,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia164 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity3,
          'year' =>2,
          'value' => 242,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia166 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity4,
          'year' =>2,
          'value' => 100,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia167 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity5,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia168 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity6,
          'year' =>2,
          'value' => 100,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia169 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity7,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia170 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity8,
          'year' =>2,
          'value' => 100,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia171 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity9,
          'year' =>2,
          'value' => 100,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia172 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity10,
          'year' =>2,
          'value' => 50,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia173 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity11,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia174 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity13,
          'year' =>2,
          'value' => 25,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia176 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity16,
          'year' =>2,
          'value' => 4200,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia179 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity17,
          'year' =>2,
          'value' => 2805,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia180 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity20,
          'year' =>2,
          'value' => 13,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia183 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity23,
          'year' =>2,
          'value' => 5,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia186 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity24,
          'year' =>2,
          'value' => 6,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia187 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity25,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia188 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity26,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia189 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity29,
          'year' =>2,
          'value' => 14,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia192 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity30,
          'year' =>2,
          'value' => 5,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia193 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity31,
          'year' =>2,
          'value' => 34937,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia194 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity32,
          'year' =>2,
          'value' => 2,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia195 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity33,
          'year' =>2,
          'value' => 100,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia196 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity34,
          'year' =>2,
          'value' => 50,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia197 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity35,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia198 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity37,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia200 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity38,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia201 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity39,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia202 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity42,
          'year' =>2,
          'value' => 13,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia205 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity43,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia206 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity44,
          'year' =>2,
          'value' => 4000,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia207 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity45,
          'year' =>2,
          'value' => 45,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia208 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity46,
          'year' =>2,
          'value' => 800000,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia209 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity47,
          'year' =>2,
          'value' => 30,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia210 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity48,
          'year' =>2,
          'value' => 20,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia211 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity49,
          'year' =>2,
          'value' => 45,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia212 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity50,
          'year' =>2,
          'value' => 75,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia213 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity51,
          'year' =>2,
          'value' => 10,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia214 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity52,
          'year' =>2,
          'value' => 20,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia215 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity53,
          'year' =>2,
          'value' => 10,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia216 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity54,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia217 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity55,
          'year' =>2,
          'value' => 100,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia218 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity56,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia219 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity57,
          'year' =>2,
          'value' => 220,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia220 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity58,
          'year' =>2,
          'value' => 2,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia221 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity59,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia222 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity60,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia223 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity61,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia224 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity62,
          'year' =>2,
          'value' => 100,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia225 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity63,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia226 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity65,
          'year' =>2,
          'value' => 100,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia228 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity66,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia229 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity67,
          'year' =>2,
          'value' => 2,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia230 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity69,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia232 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity70,
          'year' =>2,
          'value' => 3,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia233 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity71,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia234 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity72,
          'year' =>2,
          'value' => 0.5,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia235 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity73,
          'year' =>2,
          'value' => 34,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia236 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity74,
          'year' =>2,
          'value' => 25,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia237 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity75,
          'year' =>2,
          'value' => 10000,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia238 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity76,
          'year' =>2,
          'value' => 0.5,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia239 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity77,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia240 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity78,
          'year' =>2,
          'value' => 0.6,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia241 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity80,
          'year' =>2,
          'value' => 0.4,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia243 = DB::getPdo()->lastInsertId(); 



         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity84,
          'year' =>2,
          'value' => 0.6,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia247 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity85,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia248 = DB::getPdo()->lastInsertId(); 



         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity89,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia252 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity90,
          'year' =>2,
          'value' => 0.5,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia253 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity91,
          'year' =>2,
          'value' => 2,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia254 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity93,
          'year' =>2,
          'value' => 2,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia256 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity94,
          'year' =>2,
          'value' => 2,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia257 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity95,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia258 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity96,
          'year' =>2,
          'value' => 12,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia259 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity97,
          'year' =>2,
          'value' => 0.4,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia260 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity98,
          'year' =>2,
          'value' => 4,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia261 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity99,
          'year' =>2,
          'value' => 4,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia262 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity100,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia263 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity101,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia264 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity103,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia266 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity104,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia267 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity105,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia268 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity106,
          'year' =>2,
          'value' => 60,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia269 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity107,
          'year' =>2,
          'value' => 963,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia270 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity108,
          'year' =>2,
          'value' => 20,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia271 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity109,
          'year' =>2,
          'value' => 963,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia272 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity110,
          'year' =>2,
          'value' => 4000,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia273 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity111,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia274 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity112,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia275 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity113,
          'year' =>2,
          'value' => 0.63,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia276 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity115,
          'year' =>2,
          'value' => 60.5,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia278 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity116,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia279 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity117,
          'year' =>2,
          'value' => 0.45,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia280 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity118,
          'year' =>2,
          'value' => 61.7,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia281 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity119,
          'year' =>2,
          'value' => 179149,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia282 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity121,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia284 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity122,
          'year' =>2,
          'value' => 4,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia285 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity123,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia286 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity124,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia287 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity126,
          'year' =>2,
          'value' => 0.96,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia289 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity127,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia290 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity128,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia291 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity130,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia293 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity131,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia294 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity132,
          'year' =>2,
          'value' => 100,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia295 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity133,
          'year' =>2,
          'value' => 99,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia296 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity134,
          'year' =>2,
          'value' => 100,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia297 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity135,
          'year' =>2,
          'value' => 100,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia298 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity136,
          'year' =>2,
          'value' => 100,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia299 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity137,
          'year' =>2,
          'value' => 100,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia300 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity138,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia301 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity139,
          'year' =>2,
          'value' => 14,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia302 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity140,
          'year' =>2,
          'value' => 330,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia303 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity141,
          'year' =>2,
          'value' => 30,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia304 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity144,
          'year' =>2,
          'value' => 14,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia307 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity145,
          'year' =>2,
          'value' => 13059,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia308 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity146,
          'year' =>2,
          'value' => 17,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia309 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity147,
          'year' =>2,
          'value' => 410,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia310 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity148,
          'year' =>2,
          'value' => 112,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia311 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity149,
          'year' =>2,
          'value' => 10,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia312 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity150,
          'year' =>2,
          'value' => 17,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia313 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity151,
          'year' =>2,
          'value' => 47482,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia314 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity152,
          'year' =>2,
          'value' => 700,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia315 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity153,
          'year' =>2,
          'value' => 6097,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia316 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity156,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia319 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity157,
          'year' =>2,
          'value' => 8,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia320 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity158,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia321 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity159,
          'year' =>2,
          'value' => 70,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia322 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity160,
          'year' =>2,
          'value' => 0.8,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia323 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity161,
          'year' =>2,
          'value' => 12,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia324 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity162,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia325 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity163,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia326 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity1,
          'year' =>3,
          'value' => 0.92,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia327 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity3,
          'year' =>3,
          'value' => 301,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia329 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity4,
          'year' =>3,
          'value' => 96.3,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia330 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity5,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia331 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity6,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia332 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity7,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia333 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity8,
          'year' =>3,
          'value' => 0.97,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia334 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity9,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia335 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity10,
          'year' =>3,
          'value' => 0.73,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia336 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity11,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia337 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity12,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia338 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity13,
          'year' =>3,
          'value' => 0.5,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia339 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity16,
          'year' =>3,
          'value' => 3921,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia342 = DB::getPdo()->lastInsertId(); 



         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity20,
          'year' =>3,
          'value' => 13,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia346 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity23,
          'year' =>3,
          'value' => 5,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia349 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity24,
          'year' =>3,
          'value' => 6,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia350 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity25,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia351 = DB::getPdo()->lastInsertId(); 



         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity29,
          'year' =>3,
          'value' => 14,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia355 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity30,
          'year' =>3,
          'value' => 5,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia356 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity31,
          'year' =>3,
          'value' => 30000,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia357 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity32,
          'year' =>3,
          'value' => 2,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia358 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity33,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia359 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity34,
          'year' =>3,
          'value' => 62,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia360 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity35,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia361 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity37,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia363 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity38,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia364 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity39,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia365 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity40,
          'year' =>3,
          'value' => 3,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia366 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity42,
          'year' =>3,
          'value' => 13,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia368 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity43,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia369 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity44,
          'year' =>3,
          'value' => 4063,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia370 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity45,
          'year' =>3,
          'value' => 15,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia371 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity46,
          'year' =>3,
          'value' => 713469,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia372 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity47,
          'year' =>3,
          'value' => 20.5,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia373 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity48,
          'year' =>3,
          'value' => 15.3,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia374 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity49,
          'year' =>3,
          'value' => 25.4,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia375 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity50,
          'year' =>3,
          'value' => 33,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia376 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity51,
          'year' =>3,
          'value' => 5.1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia377 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity52,
          'year' =>3,
          'value' => 12.9,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia378 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity53,
          'year' =>3,
          'value' => 8,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia379 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity55,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia381 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity56,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia382 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity57,
          'year' =>3,
          'value' => 220,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia383 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity58,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia384 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity59,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia385 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity60,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia386 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity61,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia387 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity62,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia388 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity63,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia389 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity65,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia391 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity66,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia392 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity67,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia393 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity69,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia395 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity70,
          'year' =>3,
          'value' => 3,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia396 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity71,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia397 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity74,
          'year' =>3,
          'value' => 52,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia400 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity75,
          'year' =>3,
          'value' => 40289,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia401 = DB::getPdo()->lastInsertId(); 




         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity80,
          'year' =>3,
          'value' => 0.2,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia406 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity83,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia409 = DB::getPdo()->lastInsertId(); 





         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity89,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia415 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity90,
          'year' =>3,
          'value' => 0.75,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia416 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity92,
          'year' =>3,
          'value' => 8,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia418 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity93,
          'year' =>3,
          'value' => 4,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia419 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity94,
          'year' =>3,
          'value' => 2,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia420 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity95,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia421 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity96,
          'year' =>3,
          'value' => 12,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia422 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity97,
          'year' =>3,
          'value' => 0.8,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia423 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity98,
          'year' =>3,
          'value' => 3,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia424 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity99,
          'year' =>3,
          'value' => 4,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia425 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity100,
          'year' =>3,
          'value' => 0.98,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia426 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity101,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia427 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity103,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia429 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity106,
          'year' =>3,
          'value' => 50,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia432 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity107,
          'year' =>3,
          'value' => 965,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia433 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity108,
          'year' =>3,
          'value' => 20,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia434 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity109,
          'year' =>3,
          'value' => 965,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia435 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity110,
          'year' =>3,
          'value' => 1800,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia436 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity111,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia437 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity112,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia438 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity113,
          'year' =>3,
          'value' => 71.2,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia439 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity115,
          'year' =>3,
          'value' => 0.6,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia441 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity116,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia442 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity117,
          'year' =>3,
          'value' => 0.7,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia443 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity118,
          'year' =>3,
          'value' => 0.6,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia444 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity120,
          'year' =>3,
          'value' => 179265,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia446 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity121,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia447 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity123,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia449 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity124,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia450 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity125,
          'year' =>3,
          'value' => 82.2,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia451 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity127,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia453 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity128,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia454 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity130,
          'year' =>3,
          'value' => 4,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia456 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity131,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia457 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity132,
          'year' =>3,
          'value' => 0.99,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia458 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity133,
          'year' =>3,
          'value' => 96.3,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia459 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity134,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia460 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity135,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia461 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity136,
          'year' =>3,
          'value' => 97.2,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia462 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity137,
          'year' =>3,
          'value' => 0.7,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia463 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity138,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia464 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity139,
          'year' =>3,
          'value' => 14,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia465 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity140,
          'year' =>3,
          'value' => 289,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia466 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity141,
          'year' =>3,
          'value' => 20,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia467 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity142,
          'year' =>3,
          'value' => 14,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia468 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity143,
          'year' =>3,
          'value' => 14828,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia469 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity146,
          'year' =>3,
          'value' => 17,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia472 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity147,
          'year' =>3,
          'value' => 400,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia473 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity148,
          'year' =>3,
          'value' => 77,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia474 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity149,
          'year' =>3,
          'value' => 11,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia475 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity150,
          'year' =>3,
          'value' => 14,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia476 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity151,
          'year' =>3,
          'value' => 10368,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia477 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity154,
          'year' =>3,
          'value' => 3105,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia480 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity155,
          'year' =>3,
          'value' => 5639,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia481 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity156,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia482 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity157,
          'year' =>3,
          'value' => 5,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia483 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity158,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia484 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity159,
          'year' =>3,
          'value' => 75,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia485 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity160,
          'year' =>3,
          'value' => 0.8,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia486 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity161,
          'year' =>3,
          'value' => 50,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia487 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity162,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia488 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity163,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia489 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity1,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia490 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity3,
          'year' =>4,
          'value' => 318,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia492 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity4,
          'year' =>4,
          'value' => 0.93,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia493 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity6,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia495 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity7,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia496 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity8,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia497 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity9,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia498 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity10,
          'year' =>4,
          'value' => 0.9,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia499 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity11,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia500 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity12,
          'year' =>4,
          'value' => 2,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia501 = DB::getPdo()->lastInsertId(); 



         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity16,
          'year' =>4,
          'value' => 11633,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia505 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity17,
          'year' =>4,
          'value' => 11700,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia506 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity19,
          'year' =>4,
          'value' => 486360,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia508 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity20,
          'year' =>4,
          'value' => 13,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia509 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity23,
          'year' =>4,
          'value' => 5,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia512 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity24,
          'year' =>4,
          'value' => 6,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia513 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity25,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia514 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity26,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia515 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity29,
          'year' =>4,
          'value' => 14,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia518 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity30,
          'year' =>4,
          'value' => 5,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia519 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity31,
          'year' =>4,
          'value' => 31409,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia520 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity32,
          'year' =>4,
          'value' => 2,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia521 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity33,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia522 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity34,
          'year' =>4,
          'value' => 50,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia523 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity35,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia524 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity37,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia526 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity38,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia527 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity39,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia528 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity40,
          'year' =>4,
          'value' => 4,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia529 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity42,
          'year' =>4,
          'value' => 13,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia531 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity43,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia532 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity45,
          'year' =>4,
          'value' => 100,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia534 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity46,
          'year' =>4,
          'value' => 207983,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia535 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity47,
          'year' =>4,
          'value' => 32.15,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia536 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity48,
          'year' =>4,
          'value' => 40,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia537 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity50,
          'year' =>4,
          'value' => 50,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia539 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity51,
          'year' =>4,
          'value' => 10,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia540 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity52,
          'year' =>4,
          'value' => 15.5,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia541 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity53,
          'year' =>4,
          'value' => 10,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia542 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity54,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia543 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity55,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia544 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity56,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia545 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity57,
          'year' =>4,
          'value' => 220,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia546 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity58,
          'year' =>4,
          'value' => 2,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia547 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity59,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia548 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity60,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia549 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity61,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia550 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity62,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia551 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity63,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia552 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity65,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia554 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity66,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia555 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity67,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia556 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity69,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia558 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity70,
          'year' =>4,
          'value' => 3,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia559 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity71,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia560 = DB::getPdo()->lastInsertId(); 







         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity79,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia568 = DB::getPdo()->lastInsertId(); 





         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity85,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia574 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity86,
          'year' =>4,
          'value' => 3230,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia575 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity87,
          'year' =>4,
          'value' => 5000,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia576 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity88,
          'year' =>4,
          'value' => 120,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia577 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity89,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia578 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity90,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia579 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity92,
          'year' =>4,
          'value' => 4,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia581 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity93,
          'year' =>4,
          'value' => 7,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia582 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity94,
          'year' =>4,
          'value' => 2,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia583 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity95,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia584 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity96,
          'year' =>4,
          'value' => 13,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia585 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity97,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia586 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity98,
          'year' =>4,
          'value' => 2,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia587 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity99,
          'year' =>4,
          'value' => 4,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia588 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity100,
          'year' =>4,
          'value' => 0.9,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia589 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity101,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia590 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity103,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia592 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity106,
          'year' =>4,
          'value' => 30,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia595 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity107,
          'year' =>4,
          'value' => 967,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia596 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity108,
          'year' =>4,
          'value' => 20,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia597 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity109,
          'year' =>4,
          'value' => 967,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia598 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity110,
          'year' =>4,
          'value' => 3000,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia599 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity111,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia600 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity112,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia601 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity113,
          'year' =>4,
          'value' => 0.9,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia602 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity115,
          'year' =>4,
          'value' => 0.8,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia604 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity116,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia605 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity117,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia606 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity118,
          'year' =>4,
          'value' => 0.9,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia607 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity120,
          'year' =>4,
          'value' => 182093,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia609 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity121,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia610 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity122,
          'year' =>4,
          'value' => 6,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia611 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity123,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia612 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity124,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia613 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity125,
          'year' =>4,
          'value' => 93.1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia614 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity127,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia616 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity128,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia617 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity130,
          'year' =>4,
          'value' => 5,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia619 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity131,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia620 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity132,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia621 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity133,
          'year' =>4,
          'value' => 0.96,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia622 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity134,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia623 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity135,
          'year' =>4,
          'value' => 0.9,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia624 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity136,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia625 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity137,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia626 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity138,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia627 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity139,
          'year' =>4,
          'value' => 14,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia628 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity140,
          'year' =>4,
          'value' => 330,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia629 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity141,
          'year' =>4,
          'value' => 22,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia630 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity142,
          'year' =>4,
          'value' => 14,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia631 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity143,
          'year' =>4,
          'value' => 5480,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia632 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity146,
          'year' =>4,
          'value' => 17,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia635 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity147,
          'year' =>4,
          'value' => 400,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia636 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity148,
          'year' =>4,
          'value' => 122,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia637 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity149,
          'year' =>4,
          'value' => 10,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia638 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity150,
          'year' =>4,
          'value' => 14,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia639 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity151,
          'year' =>4,
          'value' => 39509,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia640 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity154,
          'year' =>4,
          'value' => 3093,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia643 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity155,
          'year' =>4,
          'value' => 5109,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia644 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity156,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia645 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity157,
          'year' =>4,
          'value' => 5,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia646 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity158,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia647 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity159,
          'year' =>4,
          'value' => 80,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia648 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity160,
          'year' =>4,
          'value' => 0.8,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia649 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity161,
          'year' =>4,
          'value' => 20,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia650 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity162,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia651 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity163,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia652 = DB::getPdo()->lastInsertId(); 
          
          DB::table('financing_sources')->insert([
            'father_id' => 11,
            'code' => '1.1.1.1.1.1.1.1',
            'name' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
            'description' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 9,
            ]);
            $idFuente1 = DB::getPdo()->lastInsertId();
            
          DB::table('financing_sources')->insert([
            'father_id' => 90,
            'code' => '1.1.2.4.2.3',
            'name' => 'Venta de bienes y servicios',
            'description' => 'Venta de bienes y servicios',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 9,
            ]);
            $idFuente2 = DB::getPdo()->lastInsertId();
            
          DB::table('financing_sources')->insert([
            'father_id' => 58,
            'code' => '1.1.2.2.2.1.1',
            'name' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
            'description' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 9,
            ]);
            $idFuente3 = DB::getPdo()->lastInsertId();
            
          DB::table('financing_sources')->insert([
            'father_id' => 79,
            'code' => '1.1.2.2.2.8.1',
            'name' => 'Otros servicios (vigencia actual)',
            'description' => 'Otros servicios (vigencia actual)',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 9,
            ]);
            $idFuente4 = DB::getPdo()->lastInsertId();
            
          DB::table('financing_sources')->insert([
            'father_id' => 27,
            'code' => '1.1.2.1.1.1.1.1',
            'name' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia actual)',
            'description' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia actual)',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 9,
            ]);
            $idFuente5 = DB::getPdo()->lastInsertId();
            
          DB::table('financing_sources')->insert([
            'father_id' => 208,
            'code' => '1.2.5.1.3',
            'name' => 'Otros Convenios',
            'description' => 'Otros Convenios',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 9,
            ]);
            $idFuente6 = DB::getPdo()->lastInsertId();
            
          DB::table('financing_sources')->insert([
            'father_id' => 42,
            'code' => '1.1.2.2.1.1.1.1',
            'name' => 'Tasa retributiva (vigencia actual)',
            'description' => 'Tasa retributiva (vigencia actual)',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 9,
            ]);
            $idFuente7 = DB::getPdo()->lastInsertId();
            
          DB::table('financing_sources')->insert([
            'father_id' => 45,
            'code' => '1.1.2.2.1.1.2.1',
            'name' => 'Tasa por el uso del agua (vigencia actual)',
            'description' => 'Tasa por el uso del agua (vigencia actual)',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 9,
            ]);
            $idFuente8 = DB::getPdo()->lastInsertId();
            
          DB::table('financing_sources')->insert([
            'father_id' => 84,
            'code' => '1.1.2.3.1.1.1',
            'name' => 'Multas ambientales (vigencia actual)',
            'description' => 'Multas ambientales (vigencia actual)',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 9,
            ]);
            $idFuente9 = DB::getPdo()->lastInsertId();
            
          DB::table('financing_sources')->insert([
            'father_id' => 79,
            'code' => '1.1.2.2.2.8.1',
            'name' => 'Otros servicios (vigencia actual)',
            'description' => 'Otros servicios (vigencia actual)',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 9,
            ]);
            $idFuente10 = DB::getPdo()->lastInsertId();
            
          DB::table('financing_sources')->insert([
            'father_id' => 188,
            'code' => '1.2.4.3',
            'name' => 'Recursos de crédito de proveedores',
            'description' => 'Recursos de crédito de proveedores',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 9,
            ]);
            $idFuente11 = DB::getPdo()->lastInsertId();
            
          DB::table('financing_sources')->insert([
            'father_id' => 145,
            'code' => '1.2.2.6',
            'name' => 'Rendimientos financieros',
            'description' => 'Rendimientos financieros',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 9,
            ]);
            $idFuente12 = DB::getPdo()->lastInsertId();
            
          DB::table('financing_sources')->insert([
            'father_id' => 90,
            'code' => '1.1.2.4.2.4',
            'name' => 'Venta de bienes y servicios',
            'description' => 'Venta de bienes y servicios',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 9,
            ]);
            $idFuente13 = DB::getPdo()->lastInsertId();
            
          DB::table('financing_sources')->insert([
            'father_id' => 145,
            'code' => '1.2.2.7',
            'name' => 'Excedentes financieros',
            'description' => 'Excedentes financieros',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 9,
            ]);
            $idFuente14 = DB::getPdo()->lastInsertId();
            
          DB::table('financing_sources')->insert([
            'father_id' => 279,
            'code' => '1.2.7.3.3.5',
            'name' => 'Cancelación de reservas Otras tasas',
            'description' => 'Cancelación de reservas Otras tasas',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 9,
            ]);
            $idFuente15 = DB::getPdo()->lastInsertId();
            
          DB::table('financing_sources')->insert([
            'father_id' => 241,
            'code' => '1.2.6.3.5',
            'name' => 'Recuperación de cartera Otras tasas',
            'description' => 'Recuperación de cartera Otras tasas',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 9,
            ]);
            $idFuente16 = DB::getPdo()->lastInsertId();
            
          DB::table('financing_sources')->insert([
            'father_id' => 250,
            'code' => '1.2.7.4',
            'name' => 'Otros recursos del balance',
            'description' => 'Otros recursos del balance',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 9,
            ]);
            $idFuente17 = DB::getPdo()->lastInsertId();
            
          DB::table('financing_sources')->insert([
            'father_id' => 119,
            'code' => '1.1.2.5.1.1.1.4',
            'name' => 'Aportes de la Nación Funcionamiento',
            'description' => 'Aportes de la Nación Funcionamiento',
            'type_id' => 23,
            'final_level' => true,
            'group_id' => 9,
            ]);
            $idFuente18 = DB::getPdo()->lastInsertId();
            
          DB::table('financing_sources')->insert([
            'father_id' => 118,
            'code' => '1.1.2.5.1.1.2',
            'name' => 'Aportes de la Nación para Inversión',
            'description' => 'Aportes de la Nación para Inversión',
            'type_id' => 23,
            'final_level' => true,
            'group_id' => 9,
            ]);
            $idFuente19 = DB::getPdo()->lastInsertId();
            
       DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente1,
      'value' => 22893579875,
      'functioning_percentage' => 0,
      'debt_service_percentage' => 0,
      'fund_percentage' => 0,
      'investment_percentage' => 100,
      'functioning' => 0,
      'debt_service' => 0,
      'fund' => 0,
      'investment' => 22893579875,
      'year' => 1,
      ]);
      $idPlan1 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente2,
      'value' => 226548172,
      'functioning_percentage' => 0,
      'debt_service_percentage' => 0,
      'fund_percentage' => 10,
      'investment_percentage' => 90,
      'functioning' => 0,
      'debt_service' => 0,
      'fund' => 22654817.2,
      'investment' => 203893354.8,
      'year' => 1,
      ]);
      $idPlan2 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente3,
      'value' => 626855234,
      'functioning_percentage' => 100,
      'debt_service_percentage' => 0,
      'fund_percentage' => 0,
      'investment_percentage' => 0,
      'functioning' => 626855234,
      'debt_service' => 0,
      'fund' => 0,
      'investment' => 0,
      'year' => 1,
      ]);
      $idPlan3 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente4,
      'value' => 1020709,
      'functioning_percentage' => 0,
      'debt_service_percentage' => 0,
      'fund_percentage' => 0,
      'investment_percentage' => 100,
      'functioning' => 0,
      'debt_service' => 0,
      'fund' => 0,
      'investment' => 1020709,
      'year' => 1,
      ]);
      $idPlan4 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente5,
      'value' => 303975000,
      'functioning_percentage' => 10,
      'debt_service_percentage' => 0,
      'fund_percentage' => 20,
      'investment_percentage' => 70,
      'functioning' => 30397500,
      'debt_service' => 0,
      'fund' => 60795000,
      'investment' => 212782500,
      'year' => 1,
      ]);
      $idPlan5 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente6,
      'value' => 1590000658.64,
      'functioning_percentage' => 0,
      'debt_service_percentage' => 0,
      'fund_percentage' => 0,
      'investment_percentage' => 100,
      'functioning' => 0,
      'debt_service' => 0,
      'fund' => 0,
      'investment' => 1590000658.64,
      'year' => 1,
      ]);
      $idPlan6 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente7,
      'value' => 2064881000,
      'functioning_percentage' => 0,
      'debt_service_percentage' => 0,
      'fund_percentage' => 10,
      'investment_percentage' => 90,
      'functioning' => 0,
      'debt_service' => 0,
      'fund' => 206488100,
      'investment' => 1858392900,
      'year' => 1,
      ]);
      $idPlan7 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente8,
      'value' => 409260000,
      'functioning_percentage' => 0,
      'debt_service_percentage' => 0,
      'fund_percentage' => 10,
      'investment_percentage' => 90,
      'functioning' => 0,
      'debt_service' => 0,
      'fund' => 40926000,
      'investment' => 368334000,
      'year' => 1,
      ]);
      $idPlan8 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente9,
      'value' => 192329763,
      'functioning_percentage' => 0,
      'debt_service_percentage' => 100,
      'fund_percentage' => 0,
      'investment_percentage' => 0,
      'functioning' => 0,
      'debt_service' => 192329763,
      'fund' => 0,
      'investment' => 0,
      'year' => 1,
      ]);
      $idPlan9 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente10,
      'value' => 8066864507,
      'functioning_percentage' => 100,
      'debt_service_percentage' => 0,
      'fund_percentage' => 0,
      'investment_percentage' => 0,
      'functioning' => 8066864507,
      'debt_service' => 0,
      'fund' => 0,
      'investment' => 0,
      'year' => 1,
      ]);
      $idPlan10 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente12,
      'value' => 777730260,
      'functioning_percentage' => 100,
      'debt_service_percentage' => 0,
      'fund_percentage' => 0,
      'investment_percentage' => 0,
      'functioning' => 777730260,
      'debt_service' => 0,
      'fund' => 0,
      'investment' => 0,
      'year' => 1,
      ]);
      $idPlan11 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente13,
      'value' => 1899649890,
      'functioning_percentage' => 100,
      'debt_service_percentage' => 0,
      'fund_percentage' => 0,
      'investment_percentage' => 0,
      'functioning' => 1899649890,
      'debt_service' => 0,
      'fund' => 0,
      'investment' => 0,
      'year' => 1,
      ]);
      $idPlan12 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente14,
      'value' => 10319372000,
      'functioning_percentage' => 10,
      'debt_service_percentage' => 6,
      'fund_percentage' => 9,
      'investment_percentage' => 75,
      'functioning' => 1031937200,
      'debt_service' => 619162320,
      'fund' => 928743480,
      'investment' => 7739529000,
      'year' => 1,
      ]);
      $idPlan13 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente16,
      'value' => 477397077,
      'functioning_percentage' => 32.55079,
      'debt_service_percentage' => 9.70793,
      'fund_percentage' => 14.0842,
      'investment_percentage' => 43.65708,
      'functioning' => 155396520.000408,
      'debt_service' => 46345374.0572061,
      'fund' => 67237559.118834,
      'investment' => 208417623.823552,
      'year' => 1,
      ]);
      $idPlan14 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente18,
      'value' => 990000000,
      'functioning_percentage' => 100,
      'debt_service_percentage' => 0,
      'fund_percentage' => 0,
      'investment_percentage' => 0,
      'functioning' => 990000000,
      'debt_service' => 0,
      'fund' => 0,
      'investment' => 0,
      'year' => 1,
      ]);
      $idPlan15 = DB::getPdo()->lastInsertId();

     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente1,
      'value' => 8483339466,
      'functioning_percentage' => 0,
      'debt_service_percentage' => 0,
      'fund_percentage' => 0,
      'investment_percentage' => 100,
      'functioning' => 0,
      'debt_service' => 0,
      'fund' => 0,
      'investment' => 8483339466,
      'year' => 2,
      ]);
      $idPlan16 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente2,
      'value' => 967000,
      'functioning_percentage' => 0,
      'debt_service_percentage' => 0,
      'fund_percentage' => 10,
      'investment_percentage' => 90,
      'functioning' => 0,
      'debt_service' => 0,
      'fund' => 96700,
      'investment' => 870300,
      'year' => 2,
      ]);
      $idPlan17 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente3,
      'value' => 726017000,
      'functioning_percentage' => 0,
      'debt_service_percentage' => 0,
      'fund_percentage' => 0,
      'investment_percentage' => 100,
      'functioning' => 0,
      'debt_service' => 0,
      'fund' => 0,
      'investment' => 726017000,
      'year' => 2,
      ]);
      $idPlan18 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente4,
      'value' => 218700000,
      'functioning_percentage' => 0,
      'debt_service_percentage' => 0,
      'fund_percentage' => 0,
      'investment_percentage' => 100,
      'functioning' => 0,
      'debt_service' => 0,
      'fund' => 0,
      'investment' => 218700000,
      'year' => 2,
      ]);
      $idPlan19 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente5,
      'value' => 257694000,
      'functioning_percentage' => 10,
      'debt_service_percentage' => 0,
      'fund_percentage' => 20,
      'investment_percentage' => 70,
      'functioning' => 25769400,
      'debt_service' => 0,
      'fund' => 51538800,
      'investment' => 180385800,
      'year' => 2,
      ]);
      $idPlan20 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente6,
      'value' => 19733175819,
      'functioning_percentage' => 0,
      'debt_service_percentage' => 0,
      'fund_percentage' => 0,
      'investment_percentage' => 100,
      'functioning' => 0,
      'debt_service' => 0,
      'fund' => 0,
      'investment' => 19733175819,
      'year' => 2,
      ]);
      $idPlan21 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente7,
      'value' => 1992735000,
      'functioning_percentage' => 0,
      'debt_service_percentage' => 0,
      'fund_percentage' => 10,
      'investment_percentage' => 90,
      'functioning' => 0,
      'debt_service' => 0,
      'fund' => 199273500,
      'investment' => 1793461500,
      'year' => 2,
      ]);
      $idPlan22 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente8,
      'value' => 670689000,
      'functioning_percentage' => 0,
      'debt_service_percentage' => 0,
      'fund_percentage' => 10,
      'investment_percentage' => 90,
      'functioning' => 0,
      'debt_service' => 0,
      'fund' => 67068900,
      'investment' => 603620100,
      'year' => 2,
      ]);
      $idPlan23 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente9,
      'value' => 198993000,
      'functioning_percentage' => 0,
      'debt_service_percentage' => 100,
      'fund_percentage' => 0,
      'investment_percentage' => 0,
      'functioning' => 0,
      'debt_service' => 198993000,
      'fund' => 0,
      'investment' => 0,
      'year' => 2,
      ]);
      $idPlan24 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente10,
      'value' => 4733020166,
      'functioning_percentage' => 100,
      'debt_service_percentage' => 0,
      'fund_percentage' => 0,
      'investment_percentage' => 0,
      'functioning' => 4733020166,
      'debt_service' => 0,
      'fund' => 0,
      'investment' => 0,
      'year' => 2,
      ]);
      $idPlan25 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente12,
      'value' => 637978792,
      'functioning_percentage' => 80,
      'debt_service_percentage' => 0,
      'fund_percentage' => 0,
      'investment_percentage' => 20,
      'functioning' => 510383033.6,
      'debt_service' => 0,
      'fund' => 0,
      'investment' => 127595758.4,
      'year' => 2,
      ]);
      $idPlan26 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente13,
      'value' => 5100000000,
      'functioning_percentage' => 100,
      'debt_service_percentage' => 0,
      'fund_percentage' => 0,
      'investment_percentage' => 0,
      'functioning' => 5100000000,
      'debt_service' => 0,
      'fund' => 0,
      'investment' => 0,
      'year' => 2,
      ]);
      $idPlan27 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente14,
      'value' => 11603897000,
      'functioning_percentage' => 0,
      'debt_service_percentage' => 10,
      'fund_percentage' => 6.8,
      'investment_percentage' => 83.2,
      'functioning' => 0,
      'debt_service' => 1160389700,
      'fund' => 789064996,
      'investment' => 9654442304,
      'year' => 2,
      ]);
      $idPlan28 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente15,
      'value' => 286904199,
      'functioning_percentage' => 0,
      'debt_service_percentage' => 0,
      'fund_percentage' => 0,
      'investment_percentage' => 100,
      'functioning' => 0,
      'debt_service' => 0,
      'fund' => 0,
      'investment' => 286904199,
      'year' => 2,
      ]);
      $idPlan29 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente16,
      'value' => 63886000,
      'functioning_percentage' => 4.708,
      'debt_service_percentage' => 13.3665,
      'fund_percentage' => 26.3985,
      'investment_percentage' => 55.527,
      'functioning' => 3007752.88,
      'debt_service' => 8539322.19,
      'fund' => 16864945.71,
      'investment' => 35473979.22,
      'year' => 2,
      ]);
      $idPlan30 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente17,
      'value' => 7345472357,
      'functioning_percentage' => 0,
      'debt_service_percentage' => 0,
      'fund_percentage' => 0,
      'investment_percentage' => 100,
      'functioning' => 0,
      'debt_service' => 0,
      'fund' => 0,
      'investment' => 7345472357,
      'year' => 2,
      ]);
      $idPlan31 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente18,
      'value' => 1054350000,
      'functioning_percentage' => 100,
      'debt_service_percentage' => 0,
      'fund_percentage' => 0,
      'investment_percentage' => 0,
      'functioning' => 1054350000,
      'debt_service' => 0,
      'fund' => 0,
      'investment' => 0,
      'year' => 2,
      ]);
      $idPlan32 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente1,
      'value' => 8889137000,
      'functioning_percentage' => 0,
      'debt_service_percentage' => 0,
      'fund_percentage' => 0,
      'investment_percentage' => 100,
      'functioning' => 0,
      'debt_service' => 0,
      'fund' => 0,
      'investment' => 8889137000,
      'year' => 3,
      ]);
      $idPlan33 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente2,
      'value' => 293928994.51,
      'functioning_percentage' => 0,
      'debt_service_percentage' => 0,
      'fund_percentage' => 10,
      'investment_percentage' => 90,
      'functioning' => 0,
      'debt_service' => 0,
      'fund' => 29392899.451,
      'investment' => 264536095.059,
      'year' => 3,
      ]);
      $idPlan34 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente3,
      'value' => 742029759.49,
      'functioning_percentage' => 0,
      'debt_service_percentage' => 0,
      'fund_percentage' => 0,
      'investment_percentage' => 100,
      'functioning' => 0,
      'debt_service' => 0,
      'fund' => 0,
      'investment' => 742029759.49,
      'year' => 3,
      ]);
      $idPlan35 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente4,
      'value' => 927246,
      'functioning_percentage' => 0,
      'debt_service_percentage' => 0,
      'fund_percentage' => 0,
      'investment_percentage' => 100,
      'functioning' => 0,
      'debt_service' => 0,
      'fund' => 0,
      'investment' => 927246,
      'year' => 3,
      ]);
      $idPlan36 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente5,
      'value' => 404540000,
      'functioning_percentage' => 10,
      'debt_service_percentage' => 0,
      'fund_percentage' => 20,
      'investment_percentage' => 70,
      'functioning' => 40454000,
      'debt_service' => 0,
      'fund' => 80908000,
      'investment' => 283178000,
      'year' => 3,
      ]);
      $idPlan37 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente6,
      'value' => 8159993701.04,
      'functioning_percentage' => 0,
      'debt_service_percentage' => 0,
      'fund_percentage' => 0,
      'investment_percentage' => 100,
      'functioning' => 0,
      'debt_service' => 0,
      'fund' => 0,
      'investment' => 8159993701.04,
      'year' => 3,
      ]);
      $idPlan38 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente7,
      'value' => 2098604000,
      'functioning_percentage' => 0,
      'debt_service_percentage' => 0,
      'fund_percentage' => 10,
      'investment_percentage' => 90,
      'functioning' => 0,
      'debt_service' => 0,
      'fund' => 209860400,
      'investment' => 1888743600,
      'year' => 3,
      ]);
      $idPlan39 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente8,
      'value' => 683219000,
      'functioning_percentage' => 0,
      'debt_service_percentage' => 0,
      'fund_percentage' => 10,
      'investment_percentage' => 90,
      'functioning' => 0,
      'debt_service' => 0,
      'fund' => 68321900,
      'investment' => 614897100,
      'year' => 3,
      ]);
      $idPlan40 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente9,
      'value' => 448390000,
      'functioning_percentage' => 0,
      'debt_service_percentage' => 100,
      'fund_percentage' => 0,
      'investment_percentage' => 0,
      'functioning' => 0,
      'debt_service' => 448390000,
      'fund' => 0,
      'investment' => 0,
      'year' => 3,
      ]);
      $idPlan41 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente10,
      'value' => 4993613000,
      'functioning_percentage' => 100,
      'debt_service_percentage' => 0,
      'fund_percentage' => 0,
      'investment_percentage' => 0,
      'functioning' => 4993613000,
      'debt_service' => 0,
      'fund' => 0,
      'investment' => 0,
      'year' => 3,
      ]);
      $idPlan42 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente11,
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
      $idPlan43 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente12,
      'value' => 1076740000,
      'functioning_percentage' => 80,
      'debt_service_percentage' => 0,
      'fund_percentage' => 0,
      'investment_percentage' => 20,
      'functioning' => 861392000,
      'debt_service' => 0,
      'fund' => 0,
      'investment' => 215348000,
      'year' => 3,
      ]);
      $idPlan44 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente13,
      'value' => 3650000000,
      'functioning_percentage' => 100,
      'debt_service_percentage' => 0,
      'fund_percentage' => 0,
      'investment_percentage' => 0,
      'functioning' => 3650000000,
      'debt_service' => 0,
      'fund' => 0,
      'investment' => 0,
      'year' => 3,
      ]);
      $idPlan45 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente14,
      'value' => 6867446000,
      'functioning_percentage' => 0,
      'debt_service_percentage' => 10.8,
      'fund_percentage' => 10.5,
      'investment_percentage' => 78.7,
      'functioning' => 0,
      'debt_service' => 741684168,
      'fund' => 721081830,
      'investment' => 5404680002,
      'year' => 3,
      ]);
      $idPlan46 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente16,
      'value' => 50459000,
      'functioning_percentage' => 15.4445,
      'debt_service_percentage' => 17.941,
      'fund_percentage' => 11.0875,
      'investment_percentage' => 55.527,
      'functioning' => 7793140.255,
      'debt_service' => 9052849.19,
      'fund' => 5594641.625,
      'investment' => 28018368.93,
      'year' => 3,
      ]);
      $idPlan47 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente17,
      'value' => 7345472000,
      'functioning_percentage' => 26.7123,
      'debt_service_percentage' => 0,
      'fund_percentage' => 0,
      'investment_percentage' => 73.2877,
      'functioning' => 1962144517.056,
      'debt_service' => 0,
      'fund' => 0,
      'investment' => 5383327482.944,
      'year' => 3,
      ]);
      $idPlan48 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente18,
      'value' => 1107825000,
      'functioning_percentage' => 100,
      'debt_service_percentage' => 0,
      'fund_percentage' => 0,
      'investment_percentage' => 0,
      'functioning' => 1107825000,
      'debt_service' => 0,
      'fund' => 0,
      'investment' => 0,
      'year' => 3,
      ]);
      $idPlan49 = DB::getPdo()->lastInsertId();
       
     DB::table('financial_plans')->insert([
      'p_a_i_id' => $idpai1,
      'source_id' => $idFuente19,
      'value' => 19148867669,
      'functioning_percentage' => 0,
      'debt_service_percentage' => 0,
      'fund_percentage' => 0,
      'investment_percentage' => 100,
      'functioning' => 0,
      'debt_service' => 0,
      'fund' => 0,
      'investment' => 19148867669,
      'year' => 3,
      ]);
      $idPlan50 = DB::getPdo()->lastInsertId();

      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente1,
        'value' => 38211925854.81,
        'functioning_percentage' => 20,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 80,
        'functioning' => 7642385170.962,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 30569540683.848,
        'year' => 4,
        ]);
        $idPlan51 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente2,
        'value' => 149762623,
        'functioning_percentage' => 90,
        'debt_service_percentage' => 0,
        'fund_percentage' => 10,
        'investment_percentage' => 0,
        'functioning' => 134786360.7,
        'debt_service' => 0,
        'fund' => 14976262.3,
        'investment' => 0,
        'year' => 4,
        ]);
        $idPlan52 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente3,
        'value' => 731458976,
        'functioning_percentage' => 90,
        'debt_service_percentage' => 0,
        'fund_percentage' => 10,
        'investment_percentage' => 0,
        'functioning' => 658313078.4,
        'debt_service' => 0,
        'fund' => 73145897.6,
        'investment' => 0,
        'year' => 4,
        ]);
        $idPlan53 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente4,
        'value' => 1033881,
        'functioning_percentage' => 90,
        'debt_service_percentage' => 0,
        'fund_percentage' => 10,
        'investment_percentage' => 0,
        'functioning' => 930492.9,
        'debt_service' => 0,
        'fund' => 103388.1,
        'investment' => 0,
        'year' => 4,
        ]);
        $idPlan54 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente5,
        'value' => 467496124,
        'functioning_percentage' => 10,
        'debt_service_percentage' => 0,
        'fund_percentage' => 20,
        'investment_percentage' => 70,
        'functioning' => 46749612.4,
        'debt_service' => 0,
        'fund' => 93499224.8,
        'investment' => 327247286.8,
        'year' => 4,
        ]);
        $idPlan55 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente6,
        'value' => 1435150885,
        'functioning_percentage' => 0,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 100,
        'functioning' => 0,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 1435150885,
        'year' => 4,
        ]);
        $idPlan56 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente7,
        'value' => 2409586125,
        'functioning_percentage' => 16.99192,
        'debt_service_percentage' => 0,
        'fund_percentage' => 10,
        'investment_percentage' => 73.00808,
        'functioning' => 409434946.6911,
        'debt_service' => 0,
        'fund' => 240958612.5,
        'investment' => 1759192565.8089,
        'year' => 4,
        ]);
        $idPlan57 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente8,
        'value' => 851848951,
        'functioning_percentage' => 90,
        'debt_service_percentage' => 0,
        'fund_percentage' => 10,
        'investment_percentage' => 0,
        'functioning' => 766664055.9,
        'debt_service' => 0,
        'fund' => 85184895.1,
        'investment' => 0,
        'year' => 4,
        ]);
        $idPlan58 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente9,
        'value' => 113165602,
        'functioning_percentage' => 10,
        'debt_service_percentage' => 90,
        'fund_percentage' => 0,
        'investment_percentage' => 0,
        'functioning' => 11316560.2,
        'debt_service' => 101849041.8,
        'fund' => 0,
        'investment' => 0,
        'year' => 4,
        ]);
        $idPlan59 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente10,
        'value' => 4440337378,
        'functioning_percentage' => 60,
        'debt_service_percentage' => 40,
        'fund_percentage' => 0,
        'investment_percentage' => 0,
        'functioning' => 2664202426.8,
        'debt_service' => 1776134951.2,
        'fund' => 0,
        'investment' => 0,
        'year' => 4,
        ]);
        $idPlan60 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente12,
        'value' => 776058252,
        'functioning_percentage' => 0,
        'debt_service_percentage' => 100,
        'fund_percentage' => 0,
        'investment_percentage' => 0,
        'functioning' => 0,
        'debt_service' => 776058252,
        'fund' => 0,
        'investment' => 0,
        'year' => 4,
        ]);
        $idPlan61 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente13,
        'value' => 2500000000,
        'functioning_percentage' => 11.69886,
        'debt_service_percentage' => 76.30114,
        'fund_percentage' => 12,
        'investment_percentage' => 0,
        'functioning' => 292471500,
        'debt_service' => 1907528500,
        'fund' => 300000000,
        'investment' => 0,
        'year' => 4,
        ]);
        $idPlan62 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente14,
        'value' => 2303746689.19,
        'functioning_percentage' => 0,
        'debt_service_percentage' => 87.56835,
        'fund_percentage' => 12.43165,
        'investment_percentage' => 0,
        'functioning' => 0,
        'debt_service' => 2017352963.90331,
        'fund' => 286393725.286689,
        'investment' => 0,
        'year' => 4,
        ]);
        $idPlan63 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente16,
        'value' => 25387992,
        'functioning_percentage' => 0,
        'debt_service_percentage' => 88.9125,
        'fund_percentage' => 11.0875,
        'investment_percentage' => 0,
        'functioning' => 0,
        'debt_service' => 22573098.387,
        'fund' => 2814893.613,
        'investment' => 0,
        'year' => 4,
        ]);
        $idPlan64 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente17,
        'value' => 0,
        'functioning_percentage' => 100,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 0,
        'functioning' => 0,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 0,
        'year' => 4,
        ]);
        $idPlan65 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente18,
        'value' => 1091700225,
        'functioning_percentage' => 100,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 0,
        'functioning' => 1091700225,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 0,
        'year' => 4,
        ]);
        $idPlan66 = DB::getPdo()->lastInsertId();
        

          DB::table('implementations')->insert([
          'p_a_i_s_id'=>$idpai1,
          ]);
          $idImplementation1 = DB::getPdo()->lastInsertId();
      
       DB::table('fundraisings')->insert([
        'date' => '2016-12-31',
        'value' => 21273655514,
        'financial_plans_id' => $idPlan1,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo1 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2016-12-31',
        'value' => 181771940.06,
        'financial_plans_id' => $idPlan2,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo2 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2016-12-31',
        'value' => 863586845.06,
        'financial_plans_id' => $idPlan3,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo3 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2016-12-31',
        'value' => 766500,
        'financial_plans_id' => $idPlan4,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo4 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2016-12-31',
        'value' => 258046551,
        'financial_plans_id' => $idPlan5,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo5 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2016-12-31',
        'value' => 790990972,
        'financial_plans_id' => $idPlan6,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo6 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2016-12-31',
        'value' => 2142673423.5,
        'financial_plans_id' => $idPlan7,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo7 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2016-12-31',
        'value' => 653983632,
        'financial_plans_id' => $idPlan8,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo8 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2016-12-31',
        'value' => 257937489.13,
        'financial_plans_id' => $idPlan9,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo9 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2016-12-31',
        'value' => 8297098569.18,
        'financial_plans_id' => $idPlan10,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo10 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2016-12-31',
        'value' => 1808766145.39,
        'financial_plans_id' => $idPlan11,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo11 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2016-12-31',
        'value' => 1899649890,
        'financial_plans_id' => $idPlan12,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo12 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2016-12-31',
        'value' => 10319372000,
        'financial_plans_id' => $idPlan13,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo13 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2016-12-31',
        'value' => 502381155.54,
        'financial_plans_id' => $idPlan14,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo14 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2016-12-31',
        'value' => 956542184,
        'financial_plans_id' => $idPlan15,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo15 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2017-12-31',
        'value' => 10349835542,
        'financial_plans_id' => $idPlan16,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo16 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2017-12-31',
        'value' => 651500,
        'financial_plans_id' => $idPlan17,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo17 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2017-12-31',
        'value' => 1319745579,
        'financial_plans_id' => $idPlan18,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo18 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2017-12-31',
        'value' => 142749522,
        'financial_plans_id' => $idPlan19,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo19 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2017-12-31',
        'value' => 446803916,
        'financial_plans_id' => $idPlan20,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo20 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2017-12-31',
        'value' => 18734138015,
        'financial_plans_id' => $idPlan21,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo21 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2017-12-31',
        'value' => 2246548473,
        'financial_plans_id' => $idPlan22,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo22 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2017-12-31',
        'value' => 757358647,
        'financial_plans_id' => $idPlan23,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo23 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2017-12-31',
        'value' => 472125615,
        'financial_plans_id' => $idPlan24,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo24 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2017-12-31',
        'value' => 4818444360,
        'financial_plans_id' => $idPlan25,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo25 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2017-12-31',
        'value' => 3046284415,
        'financial_plans_id' => $idPlan26,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo26 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2017-12-31',
        'value' => 7988000,
        'financial_plans_id' => $idPlan27,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo27 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2017-12-31',
        'value' => 11603897000,
        'financial_plans_id' => $idPlan28,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo28 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2017-12-31',
        'value' => 286904199,
        'financial_plans_id' => $idPlan29,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo29 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2017-12-31',
        'value' => 61601151,
        'financial_plans_id' => $idPlan30,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo30 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2017-12-31',
        'value' => 7388180482,
        'financial_plans_id' => $idPlan31,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo31 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2017-12-31',
        'value' => 1054350000,
        'financial_plans_id' => $idPlan32,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo32 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2018-12-31',
        'value' => 11566895366.81,
        'financial_plans_id' => $idPlan33,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo33 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2018-12-31',
        'value' => 144238908,
        'financial_plans_id' => $idPlan34,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo34 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2018-12-31',
        'value' => 742029759.49,
        'financial_plans_id' => $idPlan35,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo35 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2018-12-31',
        'value' => 927246,
        'financial_plans_id' => $idPlan36,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo36 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2018-12-31',
        'value' => 494536448,
        'financial_plans_id' => $idPlan37,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo37 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2018-12-31',
        'value' => 1176911265.91,
        'financial_plans_id' => $idPlan38,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo38 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2018-12-31',
        'value' => 2179033528,
        'financial_plans_id' => $idPlan39,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo39 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2018-12-31',
        'value' => 839361798,
        'financial_plans_id' => $idPlan40,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo40 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2018-12-31',
        'value' => 110817118,
        'financial_plans_id' => $idPlan41,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo41 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2018-12-31',
        'value' => 4540359929.04,
        'financial_plans_id' => $idPlan42,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo42 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2018-12-31',
        'value' => 3200000000,
        'financial_plans_id' => $idPlan43,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo43 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2018-12-31',
        'value' => 693363348.65,
        'financial_plans_id' => $idPlan44,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo44 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2018-12-31',
        'value' => 661650000,
        'financial_plans_id' => $idPlan45,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo45 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2018-12-31',
        'value' => 6867446000,
        'financial_plans_id' => $idPlan46,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo46 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2018-12-31',
        'value' => 30312444.66,
        'financial_plans_id' => $idPlan47,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo47 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2018-12-31',
        'value' => 7345472000,
        'financial_plans_id' => $idPlan48,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo48 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2018-12-31',
        'value' => 1107825000,
        'financial_plans_id' => $idPlan49,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo49 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2018-12-31',
        'value' => 19139795109.15,
        'financial_plans_id' => $idPlan50,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo50 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2019-12-31',
        'value' => 32152694077,
        'financial_plans_id' => $idPlan51,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo51 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2019-12-31',
        'value' => 114888853,
        'financial_plans_id' => $idPlan52,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo52 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2019-12-31',
        'value' => 634820797,
        'financial_plans_id' => $idPlan53,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo53 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2019-12-31',
        'value' => 1171450,
        'financial_plans_id' => $idPlan54,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo54 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2019-12-31',
        'value' => 555403425,
        'financial_plans_id' => $idPlan55,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo55 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2019-12-31',
        'value' => 1160500795,
        'financial_plans_id' => $idPlan56,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo56 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2019-12-31',
        'value' => 2389885916,
        'financial_plans_id' => $idPlan57,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo57 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2019-12-31',
        'value' => 949998530,
        'financial_plans_id' => $idPlan58,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo58 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2019-12-31',
        'value' => 310437020,
        'financial_plans_id' => $idPlan59,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo59 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2019-12-31',
        'value' => 4662895811,
        'financial_plans_id' => $idPlan60,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo60 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2019-12-31',
        'value' => 712131937,
        'financial_plans_id' => $idPlan61,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo61 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2019-12-31',
        'value' => 5009933496,
        'financial_plans_id' => $idPlan62,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo62 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2019-12-31',
        'value' => 2303746689.19,
        'financial_plans_id' => $idPlan63,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo63 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2019-12-31',
        'value' => 112295309,
        'financial_plans_id' => $idPlan64,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo64 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2019-12-31',
        'value' => 244239547,
        'financial_plans_id' => $idPlan65,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo65 = DB::getPdo()->lastInsertId();
         
       DB::table('fundraisings')->insert([
        'date' => '2019-12-31',
        'value' => 1157700225,
        'financial_plans_id' => $idPlan66,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo66 = DB::getPdo()->lastInsertId();
         

       
                            DB::table('cost_sources')->insert([
                              'father_id' => 2,
                              'code' => '2.1.1',
                              'name' => 'GASTOS DE PERSONAL',
                              'description' => 'GASTOS DE PERSONAL',
                              'functioning' => TRUE,
                              'compensation' => FALSE,
                              'debt_service' => FALSE,
                              'group_id' => 9,
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
                              'group_id' => 9,
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
                              'group_id' => 9,
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
                              'group_id' => 9,
                              ]);
                              $idFuenteGasto6 = DB::getPdo()->lastInsertId();
                              
                              
                            DB::table('cost_sources')->insert([
                              'father_id' => 16,
                              'code' => '2.1.3.2.1.1',
                              'name' => 'Mesadas pensionales (de pensiones)',
                              'description' => 'Mesadas pensionales (de pensiones)',
                              'functioning' => TRUE,
                              'compensation' => FALSE,
                              'debt_service' => FALSE,
                              'group_id' => 9,
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
                              'group_id' => 9,
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
                              'group_id' => 9,
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
                              'group_id' => 9,
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
                              'group_id' => 9,
                              ]);
                              $idFuenteGasto9 = DB::getPdo()->lastInsertId();
                              
                              
                              DB::table('financial_costs')->insert([
                                'year' => 1,
                                'value_bugeted' => 4766017134,
                                'value_comitted' => 4194913715,
                                'own' => TRUE,
                                'nation' => FALSE,
                                'royalties' => FALSE,
                                'funds' => FALSE,
                                'functioning' => TRUE,
                                'compensation' => FALSE,
                                'debt_service' => FALSE,
                                'cost_sources_id' => $idFuenteGasto1,
                                'p_a_i_id' => $idpai1,
                                'group_id' => 9,
                                ]);
                                $idGasto1 = DB::getPdo()->lastInsertId();
                                
                                
                              DB::table('financial_costs')->insert([
                                'year' => 1,
                                'value_bugeted' => 1520850776,
                                'value_comitted' => 938398009,
                                'own' => TRUE,
                                'nation' => FALSE,
                                'royalties' => FALSE,
                                'funds' => FALSE,
                                'functioning' => TRUE,
                                'compensation' => FALSE,
                                'debt_service' => FALSE,
                                'cost_sources_id' => $idFuenteGasto2,
                                'p_a_i_id' => $idpai1,
                                'group_id' => 9,
                                ]);
                                $idGasto2 = DB::getPdo()->lastInsertId();
                                
                                
                              DB::table('financial_costs')->insert([
                                'year' => 1,
                                'value_bugeted' => 3523527901,
                                'value_comitted' => 2755045728,
                                'own' => TRUE,
                                'nation' => FALSE,
                                'royalties' => FALSE,
                                'funds' => FALSE,
                                'functioning' => TRUE,
                                'compensation' => FALSE,
                                'debt_service' => FALSE,
                                'cost_sources_id' => $idFuenteGasto3,
                                'p_a_i_id' => $idpai1,
                                'group_id' => 9,
                                ]);
                                $idGasto3 = DB::getPdo()->lastInsertId();
                                
                                
                              DB::table('financial_costs')->insert([
                                'year' => 1,
                                'value_bugeted' => 811009565,
                                'value_comitted' => 360180267.22,
                                'own' => TRUE,
                                'nation' => FALSE,
                                'royalties' => FALSE,
                                'funds' => FALSE,
                                'functioning' => TRUE,
                                'compensation' => FALSE,
                                'debt_service' => FALSE,
                                'cost_sources_id' => $idFuenteGasto4,
                                'p_a_i_id' => $idpai1,
                                'group_id' => 9,
                                ]);
                                $idGasto4 = DB::getPdo()->lastInsertId();
                                
                                
                              DB::table('financial_costs')->insert([
                                'year' => 1,
                                'value_bugeted' => 91138000,
                                'value_comitted' => 47922360,
                                'own' => TRUE,
                                'nation' => FALSE,
                                'royalties' => FALSE,
                                'funds' => FALSE,
                                'functioning' => TRUE,
                                'compensation' => FALSE,
                                'debt_service' => FALSE,
                                'cost_sources_id' => $idFuenteGasto5,
                                'p_a_i_id' => $idpai1,
                                'group_id' => 9,
                                ]);
                                $idGasto5 = DB::getPdo()->lastInsertId();
                                
                                
                              DB::table('financial_costs')->insert([
                                'year' => 1,
                                'value_bugeted' => 1326844975,
                                'value_comitted' => 1298977529,
                                'own' => TRUE,
                                'nation' => FALSE,
                                'royalties' => FALSE,
                                'funds' => FALSE,
                                'functioning' => FALSE,
                                'compensation' => TRUE,
                                'debt_service' => FALSE,
                                'cost_sources_id' => $idFuenteGasto6,
                                'p_a_i_id' => $idpai1,
                                'group_id' => 9,
                                ]);
                                $idGasto6 = DB::getPdo()->lastInsertId();
                                
                                
                              DB::table('financial_costs')->insert([
                                'year' => 1,
                                'value_bugeted' => 105454000,
                                'value_comitted' => 95786370,
                                'own' => TRUE,
                                'nation' => FALSE,
                                'royalties' => FALSE,
                                'funds' => FALSE,
                                'functioning' => TRUE,
                                'compensation' => FALSE,
                                'debt_service' => FALSE,
                                'cost_sources_id' => $idFuenteGasto7,
                                'p_a_i_id' => $idpai1,
                                'group_id' => 9,
                                ]);
                                $idGasto7 = DB::getPdo()->lastInsertId();
                                
                                
                              DB::table('financial_costs')->insert([
                                'year' => 1,
                                'value_bugeted' => 1271219300,
                                'value_comitted' => 58718244.46,
                                'own' => TRUE,
                                'nation' => FALSE,
                                'royalties' => FALSE,
                                'funds' => FALSE,
                                'functioning' => TRUE,
                                'compensation' => FALSE,
                                'debt_service' => FALSE,
                                'cost_sources_id' => $idFuenteGasto8,
                                'p_a_i_id' => $idpai1,
                                'group_id' => 9,
                                ]);
                                $idGasto8 = DB::getPdo()->lastInsertId();
                                
                                
                              DB::table('financial_costs')->insert([
                                'year' => 1,
                                'value_bugeted' => 857837460,
                                'value_comitted' => 803627444,
                                'own' => TRUE,
                                'nation' => FALSE,
                                'royalties' => FALSE,
                                'funds' => FALSE,
                                'functioning' => FALSE,
                                'compensation' => FALSE,
                                'debt_service' => TRUE,
                                'cost_sources_id' => $idFuenteGasto9,
                                'p_a_i_id' => $idpai1,
                                'group_id' => 9,
                                ]);
                                $idGasto9 = DB::getPdo()->lastInsertId();
                                
                                
                                DB::table('financial_costs')->insert([
                                  'year' => 1,
                                  'value_bugeted' => 990000000,
                                  'value_comitted' => 956542184,
                                  'own' => FALSE,
                                  'nation' => TRUE,
                                  'royalties' => FALSE,
                                  'funds' => FALSE,
                                  'functioning' => TRUE,
                                  'compensation' => FALSE,
                                  'debt_service' => FALSE,
                                  'cost_sources_id' => $idFuenteGasto1,
                                  'p_a_i_id' => $idpai1,
                                  'group_id' => 9,
                                  ]);
                                  $idGasto10 = DB::getPdo()->lastInsertId();
                                  
                                  DB::table('financial_costs')->insert([
                                    'year' => 2,
                                    'value_bugeted' => 4736671173,
                                    'value_comitted' => 4341378603,
                                    'own' => TRUE,
                                    'nation' => FALSE,
                                    'royalties' => FALSE,
                                    'funds' => FALSE,
                                    'functioning' => TRUE,
                                    'compensation' => FALSE,
                                    'debt_service' => FALSE,
                                    'cost_sources_id' => $idFuenteGasto1,
                                    'p_a_i_id' => $idpai1,
                                    'group_id' => 9,
                                    ]);
                                    $idGasto11 = DB::getPdo()->lastInsertId();
                                    
                                    
                                  DB::table('financial_costs')->insert([
                                    'year' => 2,
                                    'value_bugeted' => 854070742,
                                    'value_comitted' => 654884429,
                                    'own' => TRUE,
                                    'nation' => FALSE,
                                    'royalties' => FALSE,
                                    'funds' => FALSE,
                                    'functioning' => TRUE,
                                    'compensation' => FALSE,
                                    'debt_service' => FALSE,
                                    'cost_sources_id' => $idFuenteGasto2,
                                    'p_a_i_id' => $idpai1,
                                    'group_id' => 9,
                                    ]);
                                    $idGasto12 = DB::getPdo()->lastInsertId();
                                    
                                    
                                  DB::table('financial_costs')->insert([
                                    'year' => 2,
                                    'value_bugeted' => 3291749448,
                                    'value_comitted' => 2995026678,
                                    'own' => TRUE,
                                    'nation' => FALSE,
                                    'royalties' => FALSE,
                                    'funds' => FALSE,
                                    'functioning' => TRUE,
                                    'compensation' => FALSE,
                                    'debt_service' => FALSE,
                                    'cost_sources_id' => $idFuenteGasto3,
                                    'p_a_i_id' => $idpai1,
                                    'group_id' => 9,
                                    ]);
                                    $idGasto13 = DB::getPdo()->lastInsertId();
                                    
                                    
                                  DB::table('financial_costs')->insert([
                                    'year' => 2,
                                    'value_bugeted' => 407267754,
                                    'value_comitted' => 165416576,
                                    'own' => TRUE,
                                    'nation' => FALSE,
                                    'royalties' => FALSE,
                                    'funds' => FALSE,
                                    'functioning' => TRUE,
                                    'compensation' => FALSE,
                                    'debt_service' => FALSE,
                                    'cost_sources_id' => $idFuenteGasto4,
                                    'p_a_i_id' => $idpai1,
                                    'group_id' => 9,
                                    ]);
                                    $idGasto14 = DB::getPdo()->lastInsertId();
                                    
                                    
                                  DB::table('financial_costs')->insert([
                                    'year' => 2,
                                    'value_bugeted' => 91138000,
                                    'value_comitted' => 53393883,
                                    'own' => TRUE,
                                    'nation' => FALSE,
                                    'royalties' => FALSE,
                                    'funds' => FALSE,
                                    'functioning' => TRUE,
                                    'compensation' => FALSE,
                                    'debt_service' => FALSE,
                                    'cost_sources_id' => $idFuenteGasto5,
                                    'p_a_i_id' => $idpai1,
                                    'group_id' => 9,
                                    ]);
                                    $idGasto15 = DB::getPdo()->lastInsertId();
                                    
                                    
                                  DB::table('financial_costs')->insert([
                                    'year' => 2,
                                    'value_bugeted' => 1123907838,
                                    'value_comitted' => 1080555029,
                                    'own' => TRUE,
                                    'nation' => FALSE,
                                    'royalties' => FALSE,
                                    'funds' => FALSE,
                                    'functioning' => FALSE,
                                    'compensation' => TRUE,
                                    'debt_service' => FALSE,
                                    'cost_sources_id' => $idFuenteGasto6,
                                    'p_a_i_id' => $idpai1,
                                    'group_id' => 9,
                                    ]);
                                    $idGasto16 = DB::getPdo()->lastInsertId();
                                    
                                    
                                  DB::table('financial_costs')->insert([
                                    'year' => 2,
                                    'value_bugeted' => 111479000,
                                    'value_comitted' => 99992175,
                                    'own' => TRUE,
                                    'nation' => FALSE,
                                    'royalties' => FALSE,
                                    'funds' => FALSE,
                                    'functioning' => TRUE,
                                    'compensation' => FALSE,
                                    'debt_service' => FALSE,
                                    'cost_sources_id' => $idFuenteGasto7,
                                    'p_a_i_id' => $idpai1,
                                    'group_id' => 9,
                                    ]);
                                    $idGasto17 = DB::getPdo()->lastInsertId();
                                    
                                    
                                  DB::table('financial_costs')->insert([
                                    'year' => 2,
                                    'value_bugeted' => 862884252,
                                    'value_comitted' => 383130012,
                                    'own' => TRUE,
                                    'nation' => FALSE,
                                    'royalties' => FALSE,
                                    'funds' => FALSE,
                                    'functioning' => TRUE,
                                    'compensation' => FALSE,
                                    'debt_service' => FALSE,
                                    'cost_sources_id' => $idFuenteGasto8,
                                    'p_a_i_id' => $idpai1,
                                    'group_id' => 9,
                                    ]);
                                    $idGasto18 = DB::getPdo()->lastInsertId();
                                    
                                    
                                  DB::table('financial_costs')->insert([
                                    'year' => 2,
                                    'value_bugeted' => 1367922000,
                                    'value_comitted' => 1367922000,
                                    'own' => TRUE,
                                    'nation' => FALSE,
                                    'royalties' => FALSE,
                                    'funds' => FALSE,
                                    'functioning' => FALSE,
                                    'compensation' => FALSE,
                                    'debt_service' => TRUE,
                                    'cost_sources_id' => $idFuenteGasto9,
                                    'p_a_i_id' => $idpai1,
                                    'group_id' => 9,
                                    ]);
                                    $idGasto19 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    DB::table('financial_costs')->insert([
                                      'year' => 2,
                                      'value_bugeted' => 4736671173,
                                      'value_comitted' => 4341378603,
                                      'own' => FALSE,
                                      'nation' => TRUE,
                                      'royalties' => FALSE,
                                      'funds' => FALSE,
                                      'functioning' => TRUE,
                                      'compensation' => FALSE,
                                      'debt_service' => FALSE,
                                      'cost_sources_id' => $idFuenteGasto1,
                                      'p_a_i_id' => $idpai1,
                                      'group_id' => 9,
                                      ]);
                                      $idGasto20 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      DB::table('financial_costs')->insert([
                                        'year' => 3,
                                        'value_bugeted' => 5800602663,
                                        'value_comitted' => 5471020901,
                                        'own' => TRUE,
                                        'nation' => FALSE,
                                        'royalties' => FALSE,
                                        'funds' => FALSE,
                                        'functioning' => TRUE,
                                        'compensation' => FALSE,
                                        'debt_service' => FALSE,
                                        'cost_sources_id' => $idFuenteGasto1,
                                        'p_a_i_id' => $idpai1,
                                        'group_id' => 9,
                                        ]);
                                        $idGasto21 = DB::getPdo()->lastInsertId();
                                        
                                        
                                      DB::table('financial_costs')->insert([
                                        'year' => 3,
                                        'value_bugeted' => 366667332,
                                        'value_comitted' => 284458766,
                                        'own' => TRUE,
                                        'nation' => FALSE,
                                        'royalties' => FALSE,
                                        'funds' => FALSE,
                                        'functioning' => TRUE,
                                        'compensation' => FALSE,
                                        'debt_service' => FALSE,
                                        'cost_sources_id' => $idFuenteGasto2,
                                        'p_a_i_id' => $idpai1,
                                        'group_id' => 9,
                                        ]);
                                        $idGasto22 = DB::getPdo()->lastInsertId();
                                        
                                        
                                      DB::table('financial_costs')->insert([
                                        'year' => 3,
                                        'value_bugeted' => 3988828153,
                                        'value_comitted' => 3633911125.17,
                                        'own' => TRUE,
                                        'nation' => FALSE,
                                        'royalties' => FALSE,
                                        'funds' => FALSE,
                                        'functioning' => TRUE,
                                        'compensation' => FALSE,
                                        'debt_service' => FALSE,
                                        'cost_sources_id' => $idFuenteGasto3,
                                        'p_a_i_id' => $idpai1,
                                        'group_id' => 9,
                                        ]);
                                        $idGasto23 = DB::getPdo()->lastInsertId();
                                        
                                        
                                      DB::table('financial_costs')->insert([
                                        'year' => 3,
                                        'value_bugeted' => 155039100,
                                        'value_comitted' => 140507659.2,
                                        'own' => TRUE,
                                        'nation' => FALSE,
                                        'royalties' => FALSE,
                                        'funds' => FALSE,
                                        'functioning' => TRUE,
                                        'compensation' => FALSE,
                                        'debt_service' => FALSE,
                                        'cost_sources_id' => $idFuenteGasto4,
                                        'p_a_i_id' => $idpai1,
                                        'group_id' => 9,
                                        ]);
                                        $idGasto24 = DB::getPdo()->lastInsertId();
                                        
                                        
                                      DB::table('financial_costs')->insert([
                                        'year' => 3,
                                        'value_bugeted' => 67221492,
                                        'value_comitted' => 67221492,
                                        'own' => TRUE,
                                        'nation' => FALSE,
                                        'royalties' => FALSE,
                                        'funds' => FALSE,
                                        'functioning' => TRUE,
                                        'compensation' => FALSE,
                                        'debt_service' => FALSE,
                                        'cost_sources_id' => $idFuenteGasto5,
                                        'p_a_i_id' => $idpai1,
                                        'group_id' => 9,
                                        ]);
                                        $idGasto25 = DB::getPdo()->lastInsertId();
                                        
                                        
                                      DB::table('financial_costs')->insert([
                                        'year' => 3,
                                        'value_bugeted' => 1115159689,
                                        'value_comitted' => 944398624,
                                        'own' => TRUE,
                                        'nation' => FALSE,
                                        'royalties' => FALSE,
                                        'funds' => FALSE,
                                        'functioning' => FALSE,
                                        'compensation' => TRUE,
                                        'debt_service' => FALSE,
                                        'cost_sources_id' => $idFuenteGasto6,
                                        'p_a_i_id' => $idpai1,
                                        'group_id' => 9,
                                        ]);
                                        $idGasto26 = DB::getPdo()->lastInsertId();
                                        
                                        
                                      DB::table('financial_costs')->insert([
                                        'year' => 3,
                                        'value_bugeted' => 106756258,
                                        'value_comitted' => 106620458,
                                        'own' => TRUE,
                                        'nation' => FALSE,
                                        'royalties' => FALSE,
                                        'funds' => FALSE,
                                        'functioning' => TRUE,
                                        'compensation' => FALSE,
                                        'debt_service' => FALSE,
                                        'cost_sources_id' => $idFuenteGasto7,
                                        'p_a_i_id' => $idpai1,
                                        'group_id' => 9,
                                        ]);
                                        $idGasto27 = DB::getPdo()->lastInsertId();
                                        
                                        
                                      DB::table('financial_costs')->insert([
                                        'year' => 3,
                                        'value_bugeted' => 1010526951,
                                        'value_comitted' => 931579559,
                                        'own' => TRUE,
                                        'nation' => FALSE,
                                        'royalties' => FALSE,
                                        'funds' => FALSE,
                                        'functioning' => TRUE,
                                        'compensation' => FALSE,
                                        'debt_service' => FALSE,
                                        'cost_sources_id' => $idFuenteGasto8,
                                        'p_a_i_id' => $idpai1,
                                        'group_id' => 9,
                                        ]);
                                        $idGasto28 = DB::getPdo()->lastInsertId();
                                        
                                        
                                      DB::table('financial_costs')->insert([
                                        'year' => 3,
                                        'value_bugeted' => 1199127000,
                                        'value_comitted' => 1180616399,
                                        'own' => TRUE,
                                        'nation' => FALSE,
                                        'royalties' => FALSE,
                                        'funds' => FALSE,
                                        'functioning' => FALSE,
                                        'compensation' => FALSE,
                                        'debt_service' => TRUE,
                                        'cost_sources_id' => $idFuenteGasto9,
                                        'p_a_i_id' => $idpai1,
                                        'group_id' => 9,
                                        ]);
                                        $idGasto29 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        DB::table('financial_costs')->insert([
                                          'year' => 3,
                                          'value_bugeted' => 1107825000,
                                          'value_comitted' => 1107825000,
                                          'own' => FALSE,
                                          'nation' => TRUE,
                                          'royalties' => FALSE,
                                          'funds' => FALSE,
                                          'functioning' => TRUE,
                                          'compensation' => FALSE,
                                          'debt_service' => FALSE,
                                          'cost_sources_id' => $idFuenteGasto1,
                                          'p_a_i_id' => $idpai1,
                                          'group_id' => 9,
                                          ]);
                                          $idGasto30 = DB::getPdo()->lastInsertId();
                                          
                                          DB::table('financial_costs')->insert([
                                            'year' => 4,
                                            'value_bugeted' => 7277352406,
                                            'value_comitted' => 7069011695,
                                            'value_paid' => 7017169859,
                                            'own' => TRUE,
                                            'nation' => FALSE,
                                            'royalties' => FALSE,
                                            'funds' => FALSE,
                                            'functioning' => TRUE,
                                            'compensation' => FALSE,
                                            'debt_service' => FALSE,
                                            'cost_sources_id' => $idFuenteGasto1,
                                            'p_a_i_id' => $idpai1,
                                            'group_id' => 9,
                                            ]);
                                            $idGasto31 = DB::getPdo()->lastInsertId();
                                            
                                            
                                          DB::table('financial_costs')->insert([
                                            'year' => 4,
                                            'value_bugeted' => 3039186460,
                                            'value_comitted' => 2841565460,
                                            'value_paid' => 2329695925,
                                            'own' => TRUE,
                                            'nation' => FALSE,
                                            'royalties' => FALSE,
                                            'funds' => FALSE,
                                            'functioning' => TRUE,
                                            'compensation' => FALSE,
                                            'debt_service' => FALSE,
                                            'cost_sources_id' => $idFuenteGasto2,
                                            'p_a_i_id' => $idpai1,
                                            'group_id' => 9,
                                            ]);
                                            $idGasto32 = DB::getPdo()->lastInsertId();
                                            
                                            
                                          DB::table('financial_costs')->insert([
                                            'year' => 4,
                                            'value_bugeted' => 1516277279,
                                            'value_comitted' => 1399310156,
                                            'value_paid' => 1399310156,
                                            'own' => TRUE,
                                            'nation' => FALSE,
                                            'royalties' => FALSE,
                                            'funds' => FALSE,
                                            'functioning' => TRUE,
                                            'compensation' => FALSE,
                                            'debt_service' => FALSE,
                                            'cost_sources_id' => $idFuenteGasto3,
                                            'p_a_i_id' => $idpai1,
                                            'group_id' => 9,
                                            ]);
                                            $idGasto33 = DB::getPdo()->lastInsertId();
                                            
                                            
                                          DB::table('financial_costs')->insert([
                                            'year' => 4,
                                            'value_bugeted' => 243724704,
                                            'value_comitted' => 158481960,
                                            'value_paid' => 156170179,
                                            'own' => TRUE,
                                            'nation' => FALSE,
                                            'royalties' => FALSE,
                                            'funds' => FALSE,
                                            'functioning' => TRUE,
                                            'compensation' => FALSE,
                                            'debt_service' => FALSE,
                                            'cost_sources_id' => $idFuenteGasto4,
                                            'p_a_i_id' => $idpai1,
                                            'group_id' => 9,
                                            ]);
                                            $idGasto34 = DB::getPdo()->lastInsertId();
                                            
                                            
                                          DB::table('financial_costs')->insert([
                                            'year' => 4,
                                            'value_bugeted' => 62895700,
                                            'value_comitted' => 62895700,
                                            'value_paid' => 62895700,
                                            'own' => TRUE,
                                            'nation' => FALSE,
                                            'royalties' => FALSE,
                                            'funds' => FALSE,
                                            'functioning' => TRUE,
                                            'compensation' => FALSE,
                                            'debt_service' => FALSE,
                                            'cost_sources_id' => $idFuenteGasto5,
                                            'p_a_i_id' => $idpai1,
                                            'group_id' => 9,
                                            ]);
                                            $idGasto35 = DB::getPdo()->lastInsertId();
                                            
                                            
                                          DB::table('financial_costs')->insert([
                                            'year' => 4,
                                            'value_bugeted' => 1097076558,
                                            'value_comitted' => 1052106672,
                                            'value_paid' => 1052106672,
                                            'own' => TRUE,
                                            'nation' => FALSE,
                                            'royalties' => FALSE,
                                            'funds' => FALSE,
                                            'functioning' => FALSE,
                                            'compensation' => TRUE,
                                            'debt_service' => FALSE,
                                            'cost_sources_id' => $idFuenteGasto6,
                                            'p_a_i_id' => $idpai1,
                                            'group_id' => 9,
                                            ]);
                                            $idGasto36 = DB::getPdo()->lastInsertId();
                                            
                                            
                                          DB::table('financial_costs')->insert([
                                            'year' => 4,
                                            'value_bugeted' => 105501460,
                                            'value_comitted' => 104701835,
                                            'value_paid' => 104130535,
                                            'own' => TRUE,
                                            'nation' => FALSE,
                                            'royalties' => FALSE,
                                            'funds' => FALSE,
                                            'functioning' => TRUE,
                                            'compensation' => FALSE,
                                            'debt_service' => FALSE,
                                            'cost_sources_id' => $idFuenteGasto7,
                                            'p_a_i_id' => $idpai1,
                                            'group_id' => 9,
                                            ]);
                                            $idGasto37 = DB::getPdo()->lastInsertId();
                                            
                                            
                                          DB::table('financial_costs')->insert([
                                            'year' => 4,
                                            'value_bugeted' => 295754228,
                                            'value_comitted' => 202373144,
                                            'value_paid' => 188711544,
                                            'own' => TRUE,
                                            'nation' => FALSE,
                                            'royalties' => FALSE,
                                            'funds' => FALSE,
                                            'functioning' => TRUE,
                                            'compensation' => FALSE,
                                            'debt_service' => FALSE,
                                            'cost_sources_id' => $idFuenteGasto8,
                                            'p_a_i_id' => $idpai1,
                                            'group_id' => 9,
                                            ]);
                                            $idGasto38 = DB::getPdo()->lastInsertId();
                                            
                                            
                                          DB::table('financial_costs')->insert([
                                            'year' => 4,
                                            'value_bugeted' => 6601496830,
                                            'value_comitted' => 6549775434,
                                            'value_paid' => 6549775434,
                                            'own' => TRUE,
                                            'nation' => FALSE,
                                            'royalties' => FALSE,
                                            'funds' => FALSE,
                                            'functioning' => FALSE,
                                            'compensation' => FALSE,
                                            'debt_service' => TRUE,
                                            'cost_sources_id' => $idFuenteGasto9,
                                            'p_a_i_id' => $idpai1,
                                            'group_id' => 9,
                                            ]);
                                            $idGasto39 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            DB::table('financial_costs')->insert([
                                              'year' => 4,
                                              'value_bugeted' => 1157700225,
                                              'value_comitted' => 1157700225,
                                              'value_paid' => 1157700225,
                                              'own' => FALSE,
                                              'nation' => TRUE,
                                              'royalties' => FALSE,
                                              'funds' => FALSE,
                                              'functioning' => TRUE,
                                              'compensation' => FALSE,
                                              'debt_service' => FALSE,
                                              'cost_sources_id' => $idFuenteGasto1,
                                              'p_a_i_id' => $idpai1,
                                              'group_id' => 9,
                                              ]);
                                              $idGasto40 = DB::getPdo()->lastInsertId();

          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity11,
            'source_id' =>$idPlan1,
            'value' => 3240859942.64,
            'goal' => 0,
            'evidence_balance' => 3240859942.64,
            'age' => 1,
            ]);
            $idactivitySource1 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity25,
            'source_id' =>$idPlan1,
            'value' => 532217911,
            'goal' => 0,
            'evidence_balance' => 532217911,
            'age' => 1,
            ]);
            $idactivitySource2 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity35,
            'source_id' =>$idPlan1,
            'value' => 10872612844,
            'goal' => 0,
            'evidence_balance' => 10872612844,
            'age' => 1,
            ]);
            $idactivitySource3 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity43,
            'source_id' =>$idPlan1,
            'value' => 64346668,
            'goal' => 0,
            'evidence_balance' => 64346668,
            'age' => 1,
            ]);
            $idactivitySource4 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity56,
            'source_id' =>$idPlan1,
            'value' => 5627822732,
            'goal' => 0,
            'evidence_balance' => 5627822732,
            'age' => 1,
            ]);
            $idactivitySource5 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity63,
            'source_id' =>$idPlan1,
            'value' => 494609488,
            'goal' => 0,
            'evidence_balance' => 494609488,
            'age' => 1,
            ]);
            $idactivitySource6 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity71,
            'source_id' =>$idPlan1,
            'value' => 231264033,
            'goal' => 0,
            'evidence_balance' => 231264033,
            'age' => 1,
            ]);
            $idactivitySource7 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity89,
            'source_id' =>$idPlan1,
            'value' => 400050059,
            'goal' => 0,
            'evidence_balance' => 400050059,
            'age' => 1,
            ]);
            $idactivitySource8 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity103,
            'source_id' =>$idPlan1,
            'value' => 1429796197.36,
            'goal' => 0,
            'evidence_balance' => 1429796197.36,
            'age' => 1,
            ]);
            $idactivitySource9 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity111,
            'source_id' =>$idPlan6,
            'value' => 1346005570,
            'goal' => 0,
            'evidence_balance' => 1346005570,
            'age' => 1,
            ]);
            $idactivitySource10 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity121,
            'source_id' =>$idPlan13,
            'value' => 488868499,
            'goal' => 0,
            'evidence_balance' => 488868499,
            'age' => 1,
            ]);
            $idactivitySource11 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity131,
            'source_id' =>$idPlan13,
            'value' => 544685100,
            'goal' => 0,
            'evidence_balance' => 544685100,
            'age' => 1,
            ]);
            $idactivitySource12 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity138,
            'source_id' =>$idPlan13,
            'value' => 2413232241,
            'goal' => 0,
            'evidence_balance' => 2413232241,
            'age' => 1,
            ]);
            $idactivitySource13 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity140,
            'source_id' =>$idPlan7,
            'value' => 910710983.000001,
            'goal' => 0,
            'evidence_balance' => 910710983.000001,
            'age' => 1,
            ]);
            $idactivitySource14 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity141,
            'source_id' =>$idPlan14,
            'value' => 139111569.623553,
            'goal' => 0,
            'evidence_balance' => 139111569.623553,
            'age' => 1,
            ]);
            $idactivitySource15 = DB::getPdo()->lastInsertId();
            
            
            
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity103,
              'source_id' =>$idPlan6,
              'value' => 243995088.639999,
              'goal' => 0,
              'evidence_balance' => 243995088.639999,
              'age' => 1,
              ]);
              $idactivitySource16 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity111,
              'source_id' =>$idPlan13,
              'value' => 4292743160,
              'goal' => 0,
              'evidence_balance' => 4292743160,
              'age' => 1,
              ]);
              $idactivitySource17 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity138,
              'source_id' =>$idPlan7,
              'value' => 947681916.999999,
              'goal' => 0,
              'evidence_balance' => 947681916.999999,
              'age' => 1,
              ]);
              $idactivitySource18 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity140,
              'source_id' =>$idPlan2,
              'value' => 203893354.8,
              'goal' => 0,
              'evidence_balance' => 203893354.8,
              'age' => 1,
              ]);
              $idactivitySource19 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity141,
              'source_id' =>$idPlan4,
              'value' => 1020709,
              'goal' => 0,
              'evidence_balance' => 1020709,
              'age' => 1,
              ]);
              $idactivitySource20 = DB::getPdo()->lastInsertId();
              
              
              
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity140,
                'source_id' =>$idPlan5,
                'value' => 212782500,
                'goal' => 0,
                'evidence_balance' => 212782500,
                'age' => 1,
                ]);
                $idactivitySource21 = DB::getPdo()->lastInsertId();
                
                
                  DB::table('activity_sources')->insert([
                'activity_id' => $idactivity140,
                'source_id' =>$idPlan8,
                'value' => 368334000,
                'goal' => 0,
                'evidence_balance' => 368334000,
                'age' => 1,
                ]);
                $idactivitySource22 = DB::getPdo()->lastInsertId();
                
                
                  DB::table('activity_sources')->insert([
                'activity_id' => $idactivity140,
                'source_id' =>$idPlan14,
                'value' => 69306054.1999991,
                'goal' => 0,
                'evidence_balance' => 69306054.1999991,
                'age' => 1,
                ]);
                $idactivitySource23 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia11,
                  'activity_source_id' =>$idactivitySource1,
                  'value' => 2346667317,
                  ]);
                  $idevidenceFinancial1 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia25,
                  'activity_source_id' =>$idactivitySource2,
                  'value' => 397817656,
                  ]);
                  $idevidenceFinancial2 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia35,
                  'activity_source_id' =>$idactivitySource3,
                  'value' => 10594777902,
                  ]);
                  $idevidenceFinancial3 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia43,
                  'activity_source_id' =>$idactivitySource4,
                  'value' => 23521471,
                  ]);
                  $idevidenceFinancial4 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia56,
                  'activity_source_id' =>$idactivitySource5,
                  'value' => 4320186630,
                  ]);
                  $idevidenceFinancial5 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia63,
                  'activity_source_id' =>$idactivitySource6,
                  'value' => 354993436,
                  ]);
                  $idevidenceFinancial6 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia71,
                  'activity_source_id' =>$idactivitySource7,
                  'value' => 152981281,
                  ]);
                  $idevidenceFinancial7 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia89,
                  'activity_source_id' =>$idactivitySource8,
                  'value' => 122094550,
                  ]);
                  $idevidenceFinancial8 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia103,
                  'activity_source_id' =>$idactivitySource9,
                  'value' => 1429796197.36,
                  ]);
                  $idevidenceFinancial9 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia111,
                  'activity_source_id' =>$idactivitySource10,
                  'value' => 1346005570,
                  ]);
                  $idevidenceFinancial10 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia121,
                  'activity_source_id' =>$idactivitySource11,
                  'value' => 124742897,
                  ]);
                  $idevidenceFinancial11 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia131,
                  'activity_source_id' =>$idactivitySource12,
                  'value' => 435199854,
                  ]);
                  $idevidenceFinancial12 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia138,
                  'activity_source_id' =>$idactivitySource13,
                  'value' => 2413232241,
                  ]);
                  $idevidenceFinancial13 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia140,
                  'activity_source_id' =>$idactivitySource14,
                  'value' => 910710983.000001,
                  ]);
                  $idevidenceFinancial14 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia141,
                  'activity_source_id' =>$idactivitySource15,
                  'value' => 97482035,
                  ]);
                  $idevidenceFinancial15 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia103,
                    'activity_source_id' =>$idactivitySource16,
                    'value' => 10156105.6399994,
                    ]);
                    $idevidenceFinancial16 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia111,
                    'activity_source_id' =>$idactivitySource17,
                    'value' => 2694889000,
                    ]);
                    $idevidenceFinancial17 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia138,
                    'activity_source_id' =>$idactivitySource18,
                    'value' => 445592924.999999,
                    ]);
                    $idevidenceFinancial18 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia140,
                    'activity_source_id' =>$idactivitySource19,
                    'value' => 203893354.8,
                    ]);
                    $idevidenceFinancial19 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia140,
                      'activity_source_id' =>$idactivitySource21,
                      'value' => 212782500,
                      ]);
                      $idevidenceFinancial21 = DB::getPdo()->lastInsertId();
                      
                      
                        DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia140,
                      'activity_source_id' =>$idactivitySource22,
                      'value' => 320640027.199999,
                      ]);
                      $idevidenceFinancial22 = DB::getPdo()->lastInsertId();
                      
                      
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity11,
                        'source_id' =>$idPlan21,
                        'value' => 2564558054,
                        'goal' => 0,
                        'evidence_balance' => 2564558054,
                        'age' => 2,
                        ]);
                        $idactivitySource24 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity25,
                        'source_id' =>$idPlan21,
                        'value' => 592529737,
                        'goal' => 0,
                        'evidence_balance' => 592529737,
                        'age' => 2,
                        ]);
                        $idactivitySource25 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity35,
                        'source_id' =>$idPlan21,
                        'value' => 9716172809,
                        'goal' => 0,
                        'evidence_balance' => 9716172809,
                        'age' => 2,
                        ]);
                        $idactivitySource26 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity43,
                        'source_id' =>$idPlan21,
                        'value' => 115638000,
                        'goal' => 0,
                        'evidence_balance' => 115638000,
                        'age' => 2,
                        ]);
                        $idactivitySource27 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity55,
                        'source_id' =>$idPlan21,
                        'value' => 6744277219,
                        'goal' => 0,
                        'evidence_balance' => 6744277219,
                        'age' => 2,
                        ]);
                        $idactivitySource28 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity63,
                        'source_id' =>$idPlan28,
                        'value' => 609449100,
                        'goal' => 0,
                        'evidence_balance' => 609449100,
                        'age' => 2,
                        ]);
                        $idactivitySource29 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity71,
                        'source_id' =>$idPlan28,
                        'value' => 420869031,
                        'goal' => 0,
                        'evidence_balance' => 420869031,
                        'age' => 2,
                        ]);
                        $idactivitySource30 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity89,
                        'source_id' =>$idPlan28,
                        'value' => 1571380177,
                        'goal' => 0,
                        'evidence_balance' => 1571380177,
                        'age' => 2,
                        ]);
                        $idactivitySource31 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity103,
                        'source_id' =>$idPlan28,
                        'value' => 2683817352,
                        'goal' => 0,
                        'evidence_balance' => 2683817352,
                        'age' => 2,
                        ]);
                        $idactivitySource32 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity111,
                        'source_id' =>$idPlan31,
                        'value' => 6817628598,
                        'goal' => 0,
                        'evidence_balance' => 6817628598,
                        'age' => 2,
                        ]);
                        $idactivitySource33 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity121,
                        'source_id' =>$idPlan16,
                        'value' => 478703559,
                        'goal' => 0,
                        'evidence_balance' => 478703559,
                        'age' => 2,
                        ]);
                        $idactivitySource34 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity131,
                        'source_id' =>$idPlan16,
                        'value' => 1028005495,
                        'goal' => 0,
                        'evidence_balance' => 1028005495,
                        'age' => 2,
                        ]);
                        $idactivitySource35 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity138,
                        'source_id' =>$idPlan16,
                        'value' => 3102441472,
                        'goal' => 0,
                        'evidence_balance' => 3102441472,
                        'age' => 2,
                        ]);
                        $idactivitySource36 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity156,
                        'source_id' =>$idPlan16,
                        'value' => 106590490,
                        'goal' => 0,
                        'evidence_balance' => 106590490,
                        'age' => 2,
                        ]);
                        $idactivitySource37 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity163,
                        'source_id' =>$idPlan19,
                        'value' => 209097953,
                        'goal' => 0,
                        'evidence_balance' => 209097953,
                        'age' => 2,
                        ]);
                        $idactivitySource38 = DB::getPdo()->lastInsertId();
                        
                        
                        
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity55,
                          'source_id' =>$idPlan28,
                          'value' => 4368926644,
                          'goal' => 0,
                          'evidence_balance' => 4368926644,
                          'age' => 2,
                          ]);
                          $idactivitySource39 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity103,
                          'source_id' =>$idPlan31,
                          'value' => 527843759,
                          'goal' => 0,
                          'evidence_balance' => 527843759,
                          'age' => 2,
                          ]);
                          $idactivitySource40 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity111,
                          'source_id' =>$idPlan16,
                          'value' => 3767598450,
                          'goal' => 0,
                          'evidence_balance' => 3767598450,
                          'age' => 2,
                          ]);
                          $idactivitySource41 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity156,
                          'source_id' =>$idPlan22,
                          'value' => 1793461500,
                          'goal' => 0,
                          'evidence_balance' => 1793461500,
                          'age' => 2,
                          ]);
                          $idactivitySource42 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity163,
                          'source_id' =>$idPlan20,
                          'value' => 180385800,
                          'goal' => 0,
                          'evidence_balance' => 180385800,
                          'age' => 2,
                          ]);
                          $idactivitySource43 = DB::getPdo()->lastInsertId();
                          
                          
                          
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity156,
                            'source_id' =>$idPlan18,
                            'value' => 726017000,
                            'goal' => 0,
                            'evidence_balance' => 726017000,
                            'age' => 2,
                            ]);
                            $idactivitySource44 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity163,
                            'source_id' =>$idPlan26,
                            'value' => 127595758.4,
                            'goal' => 0,
                            'evidence_balance' => 127595758.4,
                            'age' => 2,
                            ]);
                            $idactivitySource45 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity156,
                              'source_id' =>$idPlan23,
                              'value' => 603620100,
                              'goal' => 0,
                              'evidence_balance' => 603620100,
                              'age' => 2,
                              ]);
                              $idactivitySource46 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity163,
                              'source_id' =>$idPlan30,
                              'value' => 35473979.22,
                              'goal' => 0,
                              'evidence_balance' => 35473979.22,
                              'age' => 2,
                              ]);
                              $idactivitySource47 = DB::getPdo()->lastInsertId();
                              
                              
                              
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity156,
                                'source_id' =>$idPlan29,
                                'value' => 286904199,
                                'goal' => 0,
                                'evidence_balance' => 286904199,
                                'age' => 2,
                                ]);
                                $idactivitySource48 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity163,
                                'source_id' =>$idPlan17,
                                'value' => 870300,
                                'goal' => 0,
                                'evidence_balance' => 870300,
                                'age' => 2,
                                ]);
                                $idactivitySource49 = DB::getPdo()->lastInsertId();
                                
                                
                                
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity156,
                                  'source_id' =>$idPlan19,
                                  'value' => 9602047,
                                  'goal' => 0,
                                  'evidence_balance' => 9602047,
                                  'age' => 2,
                                  ]);
                                  $idactivitySource50 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia174,
                                    'activity_source_id' =>$idactivitySource24,
                                    'value' => 2008135501,
                                    ]);
                                    $idevidenceFinancial24 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia188,
                                    'activity_source_id' =>$idactivitySource25,
                                    'value' => 558023272,
                                    ]);
                                    $idevidenceFinancial25 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia198,
                                    'activity_source_id' =>$idactivitySource26,
                                    'value' => 9310554449,
                                    ]);
                                    $idevidenceFinancial26 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia206,
                                    'activity_source_id' =>$idactivitySource27,
                                    'value' => 47837963,
                                    ]);
                                    $idevidenceFinancial27 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia218,
                                    'activity_source_id' =>$idactivitySource28,
                                    'value' => 4635772713,
                                    ]);
                                    $idevidenceFinancial28 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia226,
                                    'activity_source_id' =>$idactivitySource29,
                                    'value' => 576621674,
                                    ]);
                                    $idevidenceFinancial29 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia234,
                                    'activity_source_id' =>$idactivitySource30,
                                    'value' => 398985940,
                                    ]);
                                    $idevidenceFinancial30 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia252,
                                    'activity_source_id' =>$idactivitySource31,
                                    'value' => 1178610257,
                                    ]);
                                    $idevidenceFinancial31 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia266,
                                    'activity_source_id' =>$idactivitySource32,
                                    'value' => 2683817352,
                                    ]);
                                    $idevidenceFinancial32 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia274,
                                    'activity_source_id' =>$idactivitySource33,
                                    'value' => 6817628598,
                                    ]);
                                    $idevidenceFinancial33 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia284,
                                    'activity_source_id' =>$idactivitySource34,
                                    'value' => 346318803,
                                    ]);
                                    $idevidenceFinancial34 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia294,
                                    'activity_source_id' =>$idactivitySource35,
                                    'value' => 1001672381,
                                    ]);
                                    $idevidenceFinancial35 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia301,
                                    'activity_source_id' =>$idactivitySource36,
                                    'value' => 2852343924,
                                    ]);
                                    $idevidenceFinancial36 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia319,
                                    'activity_source_id' =>$idactivitySource37,
                                    'value' => 106590490,
                                    ]);
                                    $idevidenceFinancial37 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia326,
                                    'activity_source_id' =>$idactivitySource38,
                                    'value' => 209097953,
                                    ]);
                                    $idevidenceFinancial38 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia266,
                                      'activity_source_id' =>$idactivitySource40,
                                      'value' => 190967618,
                                      ]);
                                      $idevidenceFinancial40 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia274,
                                      'activity_source_id' =>$idactivitySource41,
                                      'value' => 3368499286,
                                      ]);
                                      $idevidenceFinancial41 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia319,
                                      'activity_source_id' =>$idactivitySource42,
                                      'value' => 1793461500,
                                      ]);
                                      $idevidenceFinancial42 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia326,
                                      'activity_source_id' =>$idactivitySource43,
                                      'value' => 180385800,
                                      ]);
                                      $idevidenceFinancial43 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia319,
                                        'activity_source_id' =>$idactivitySource44,
                                        'value' => 556332134,
                                        ]);
                                        $idevidenceFinancial44 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia326,
                                        'activity_source_id' =>$idactivitySource45,
                                        'value' => 127595758.4,
                                        ]);
                                        $idevidenceFinancial45 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia326,
                                          'activity_source_id' =>$idactivitySource47,
                                          'value' => 25714247.6,
                                          ]);
                                          $idevidenceFinancial47 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                          DB::table('activity_sources')->insert([
                                            'activity_id' => $idactivity11,
                                            'source_id' =>$idPlan50,
                                            'value' => 4412141040.64,
                                            'goal' => 0,
                                            'evidence_balance' => 4412141040.64,
                                            'age' => 3,
                                            ]);
                                            $idactivitySource51 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('activity_sources')->insert([
                                            'activity_id' => $idactivity25,
                                            'source_id' =>$idPlan50,
                                            'value' => 683978700,
                                            'goal' => 0,
                                            'evidence_balance' => 683978700,
                                            'age' => 3,
                                            ]);
                                            $idactivitySource52 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('activity_sources')->insert([
                                            'activity_id' => $idactivity35,
                                            'source_id' =>$idPlan50,
                                            'value' => 14052747928.36,
                                            'goal' => 0,
                                            'evidence_balance' => 14052747928.36,
                                            'age' => 3,
                                            ]);
                                            $idactivitySource53 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('activity_sources')->insert([
                                            'activity_id' => $idactivity43,
                                            'source_id' =>$idPlan33,
                                            'value' => 112756000,
                                            'goal' => 0,
                                            'evidence_balance' => 112756000,
                                            'age' => 3,
                                            ]);
                                            $idactivitySource54 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('activity_sources')->insert([
                                            'activity_id' => $idactivity56,
                                            'source_id' =>$idPlan33,
                                            'value' => 283223115.060001,
                                            'goal' => 0,
                                            'evidence_balance' => 283223115.060001,
                                            'age' => 3,
                                            ]);
                                            $idactivitySource55 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('activity_sources')->insert([
                                            'activity_id' => $idactivity63,
                                            'source_id' =>$idPlan46,
                                            'value' => 651892336,
                                            'goal' => 0,
                                            'evidence_balance' => 651892336,
                                            'age' => 3,
                                            ]);
                                            $idactivitySource56 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('activity_sources')->insert([
                                            'activity_id' => $idactivity71,
                                            'source_id' =>$idPlan46,
                                            'value' => 486533000,
                                            'goal' => 0,
                                            'evidence_balance' => 486533000,
                                            'age' => 3,
                                            ]);
                                            $idactivitySource57 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('activity_sources')->insert([
                                            'activity_id' => $idactivity89,
                                            'source_id' =>$idPlan46,
                                            'value' => 819132653.07,
                                            'goal' => 0,
                                            'evidence_balance' => 819132653.07,
                                            'age' => 3,
                                            ]);
                                            $idactivitySource58 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('activity_sources')->insert([
                                            'activity_id' => $idactivity103,
                                            'source_id' =>$idPlan46,
                                            'value' => 1738224167,
                                            'goal' => 0,
                                            'evidence_balance' => 1738224167,
                                            'age' => 3,
                                            ]);
                                            $idactivitySource59 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('activity_sources')->insert([
                                            'activity_id' => $idactivity111,
                                            'source_id' =>$idPlan46,
                                            'value' => 1178558921.63,
                                            'goal' => 0,
                                            'evidence_balance' => 1178558921.63,
                                            'age' => 3,
                                            ]);
                                            $idactivitySource60 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('activity_sources')->insert([
                                            'activity_id' => $idactivity121,
                                            'source_id' =>$idPlan48,
                                            'value' => 311921230,
                                            'goal' => 0,
                                            'evidence_balance' => 311921230,
                                            'age' => 3,
                                            ]);
                                            $idactivitySource61 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('activity_sources')->insert([
                                            'activity_id' => $idactivity131,
                                            'source_id' =>$idPlan48,
                                            'value' => 648278660,
                                            'goal' => 0,
                                            'evidence_balance' => 648278660,
                                            'age' => 3,
                                            ]);
                                            $idactivitySource62 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('activity_sources')->insert([
                                            'activity_id' => $idactivity138,
                                            'source_id' =>$idPlan48,
                                            'value' => 2473642549.574,
                                            'goal' => 0,
                                            'evidence_balance' => 2473642549.574,
                                            'age' => 3,
                                            ]);
                                            $idactivitySource63 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('activity_sources')->insert([
                                            'activity_id' => $idactivity156,
                                            'source_id' =>$idPlan39,
                                            'value' => 1419215002.944,
                                            'goal' => 0,
                                            'evidence_balance' => 1419215002.944,
                                            'age' => 3,
                                            ]);
                                            $idactivitySource64 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('activity_sources')->insert([
                                            'activity_id' => $idactivity163,
                                            'source_id' =>$idPlan34,
                                            'value' => 263058958.493002,
                                            'goal' => 0,
                                            'evidence_balance' => 263058958.493002,
                                            'age' => 3,
                                            ]);
                                            $idactivitySource65 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                            DB::table('activity_sources')->insert([
                                              'activity_id' => $idactivity35,
                                              'source_id' =>$idPlan33,
                                              'value' => 8493157884.94,
                                              'goal' => 0,
                                              'evidence_balance' => 8493157884.94,
                                              'age' => 3,
                                              ]);
                                              $idactivitySource66 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('activity_sources')->insert([
                                              'activity_id' => $idactivity56,
                                              'source_id' =>$idPlan38,
                                              'value' => 8159993701.04,
                                              'goal' => 0,
                                              'evidence_balance' => 8159993701.04,
                                              'age' => 3,
                                              ]);
                                              $idactivitySource67 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('activity_sources')->insert([
                                              'activity_id' => $idactivity111,
                                              'source_id' =>$idPlan48,
                                              'value' => 1949485043.37,
                                              'goal' => 0,
                                              'evidence_balance' => 1949485043.37,
                                              'age' => 3,
                                              ]);
                                              $idactivitySource68 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('activity_sources')->insert([
                                              'activity_id' => $idactivity138,
                                              'source_id' =>$idPlan39,
                                              'value' => 469528597.055998,
                                              'goal' => 0,
                                              'evidence_balance' => 469528597.055998,
                                              'age' => 3,
                                              ]);
                                              $idactivitySource69 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('activity_sources')->insert([
                                              'activity_id' => $idactivity156,
                                              'source_id' =>$idPlan35,
                                              'value' => 742029759.49,
                                              'goal' => 0,
                                              'evidence_balance' => 742029759.49,
                                              'age' => 3,
                                              ]);
                                              $idactivitySource70 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('activity_sources')->insert([
                                              'activity_id' => $idactivity163,
                                              'source_id' =>$idPlan44,
                                              'value' => 215348000,
                                              'goal' => 0,
                                              'evidence_balance' => 215348000,
                                              'age' => 3,
                                              ]);
                                              $idactivitySource71 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                              DB::table('activity_sources')->insert([
                                                'activity_id' => $idactivity56,
                                                'source_id' =>$idPlan46,
                                                'value' => 530338924.299998,
                                                'goal' => 0,
                                                'evidence_balance' => 530338924.299998,
                                                'age' => 3,
                                                ]);
                                                $idactivitySource72 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                
                                              DB::table('activity_sources')->insert([
                                                'activity_id' => $idactivity156,
                                                'source_id' =>$idPlan40,
                                                'value' => 614897100,
                                                'goal' => 0,
                                                'evidence_balance' => 614897100,
                                                'age' => 3,
                                                ]);
                                                $idactivitySource73 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                
                                              DB::table('activity_sources')->insert([
                                                'activity_id' => $idactivity163,
                                                'source_id' =>$idPlan47,
                                                'value' => 28018368.93,
                                                'goal' => 0,
                                                'evidence_balance' => 28018368.93,
                                                'age' => 3,
                                                ]);
                                                $idactivitySource74 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity156,
                                                  'source_id' =>$idPlan37,
                                                  'value' => 283178000,
                                                  'goal' => 0,
                                                  'evidence_balance' => 283178000,
                                                  'age' => 3,
                                                  ]);
                                                  $idactivitySource75 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity163,
                                                  'source_id' =>$idPlan36,
                                                  'value' => 927246,
                                                  'goal' => 0,
                                                  'evidence_balance' => 927246,
                                                  'age' => 3,
                                                  ]);
                                                  $idactivitySource76 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity156,
                                                    'source_id' =>$idPlan34,
                                                    'value' => 1477136.56599808,
                                                    'goal' => 0,
                                                    'evidence_balance' => 1477136.56599808,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource77 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                    DB::table('evidence_financial')->insert([
                                                      'evidence_id' => $idevidencia337,
                                                      'activity_source_id' =>$idactivitySource51,
                                                      'value' => 3635605971,
                                                      ]);
                                                      $idevidenceFinancial51 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('evidence_financial')->insert([
                                                      'evidence_id' => $idevidencia351,
                                                      'activity_source_id' =>$idactivitySource52,
                                                      'value' => 647211602,
                                                      ]);
                                                      $idevidenceFinancial52 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('evidence_financial')->insert([
                                                      'evidence_id' => $idevidencia361,
                                                      'activity_source_id' =>$idactivitySource53,
                                                      'value' => 14052747928.36,
                                                      ]);
                                                      $idevidenceFinancial53 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('evidence_financial')->insert([
                                                      'evidence_id' => $idevidencia369,
                                                      'activity_source_id' =>$idactivitySource54,
                                                      'value' => 106506084,
                                                      ]);
                                                      $idevidenceFinancial54 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('evidence_financial')->insert([
                                                      'evidence_id' => $idevidencia382,
                                                      'activity_source_id' =>$idactivitySource55,
                                                      'value' => 283223115.060001,
                                                      ]);
                                                      $idevidenceFinancial55 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('evidence_financial')->insert([
                                                      'evidence_id' => $idevidencia389,
                                                      'activity_source_id' =>$idactivitySource56,
                                                      'value' => 631233453,
                                                      ]);
                                                      $idevidenceFinancial56 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('evidence_financial')->insert([
                                                      'evidence_id' => $idevidencia397,
                                                      'activity_source_id' =>$idactivitySource57,
                                                      'value' => 466086709,
                                                      ]);
                                                      $idevidenceFinancial57 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('evidence_financial')->insert([
                                                      'evidence_id' => $idevidencia415,
                                                      'activity_source_id' =>$idactivitySource58,
                                                      'value' => 599583970,
                                                      ]);
                                                      $idevidenceFinancial58 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('evidence_financial')->insert([
                                                      'evidence_id' => $idevidencia429,
                                                      'activity_source_id' =>$idactivitySource59,
                                                      'value' => 1477296891,
                                                      ]);
                                                      $idevidenceFinancial59 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('evidence_financial')->insert([
                                                      'evidence_id' => $idevidencia437,
                                                      'activity_source_id' =>$idactivitySource60,
                                                      'value' => 1178558921.63,
                                                      ]);
                                                      $idevidenceFinancial60 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('evidence_financial')->insert([
                                                      'evidence_id' => $idevidencia447,
                                                      'activity_source_id' =>$idactivitySource61,
                                                      'value' => 304460044,
                                                      ]);
                                                      $idevidenceFinancial61 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('evidence_financial')->insert([
                                                      'evidence_id' => $idevidencia457,
                                                      'activity_source_id' =>$idactivitySource62,
                                                      'value' => 634001638,
                                                      ]);
                                                      $idevidenceFinancial62 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('evidence_financial')->insert([
                                                      'evidence_id' => $idevidencia464,
                                                      'activity_source_id' =>$idactivitySource63,
                                                      'value' => 2473642549.574,
                                                      ]);
                                                      $idevidenceFinancial63 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('evidence_financial')->insert([
                                                      'evidence_id' => $idevidencia482,
                                                      'activity_source_id' =>$idactivitySource64,
                                                      'value' => 1419215002.944,
                                                      ]);
                                                      $idevidenceFinancial64 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('evidence_financial')->insert([
                                                      'evidence_id' => $idevidencia489,
                                                      'activity_source_id' =>$idactivitySource65,
                                                      'value' => 263058958.493002,
                                                      ]);
                                                      $idevidenceFinancial65 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia361,
                                                        'activity_source_id' =>$idactivitySource66,
                                                        'value' => 8453795847.84,
                                                        ]);
                                                        $idevidenceFinancial66 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia382,
                                                        'activity_source_id' =>$idactivitySource67,
                                                        'value' => 8159993701.04,
                                                        ]);
                                                        $idevidenceFinancial67 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia437,
                                                        'activity_source_id' =>$idactivitySource68,
                                                        'value' => 1330334677.39,
                                                        ]);
                                                        $idevidenceFinancial68 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia464,
                                                        'activity_source_id' =>$idactivitySource69,
                                                        'value' => 287171504.825998,
                                                        ]);
                                                        $idevidenceFinancial69 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia482,
                                                        'activity_source_id' =>$idactivitySource70,
                                                        'value' => 742029759.49,
                                                        ]);
                                                        $idevidenceFinancial70 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia489,
                                                        'activity_source_id' =>$idactivitySource71,
                                                        'value' => 215348000,
                                                        ]);
                                                        $idevidenceFinancial71 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                        DB::table('evidence_financial')->insert([
                                                          'evidence_id' => $idevidencia382,
                                                          'activity_source_id' =>$idactivitySource72,
                                                          'value' => 482783788.899999,
                                                          ]);
                                                          $idevidenceFinancial72 = DB::getPdo()->lastInsertId();
                                                          
                                                          
                                                          
                                                        DB::table('evidence_financial')->insert([
                                                          'evidence_id' => $idevidencia482,
                                                          'activity_source_id' =>$idactivitySource73,
                                                          'value' => 614897100,
                                                          ]);
                                                          $idevidenceFinancial73 = DB::getPdo()->lastInsertId();
                                                          
                                                          
                                                          
                                                        DB::table('evidence_financial')->insert([
                                                          'evidence_id' => $idevidencia489,
                                                          'activity_source_id' =>$idactivitySource74,
                                                          'value' => 19336930.5069981,
                                                          ]);
                                                          $idevidenceFinancial74 = DB::getPdo()->lastInsertId();
                                                          
                                                          
                                                          
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia482,
                                                            'activity_source_id' =>$idactivitySource75,
                                                            'value' => 189048570.565998,
                                                            ]);
                                                            $idevidenceFinancial75 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                            DB::table('activity_sources')->insert([
                                                              'activity_id' => $idactivity11,
                                                              'source_id' =>$idPlan51,
                                                              'value' => 2664301213,
                                                              'goal' => 0,
                                                              'evidence_balance' => 2664301213,
                                                              'age' => 4,
                                                              ]);
                                                              $idactivitySource78 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('activity_sources')->insert([
                                                              'activity_id' => $idactivity25,
                                                              'source_id' =>$idPlan51,
                                                              'value' => 898057244,
                                                              'goal' => 0,
                                                              'evidence_balance' => 898057244,
                                                              'age' => 4,
                                                              ]);
                                                              $idactivitySource79 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('activity_sources')->insert([
                                                              'activity_id' => $idactivity35,
                                                              'source_id' =>$idPlan51,
                                                              'value' => 12324731558,
                                                              'goal' => 0,
                                                              'evidence_balance' => 12324731558,
                                                              'age' => 4,
                                                              ]);
                                                              $idactivitySource80 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('activity_sources')->insert([
                                                              'activity_id' => $idactivity43,
                                                              'source_id' =>$idPlan51,
                                                              'value' => 166426721,
                                                              'goal' => 0,
                                                              'evidence_balance' => 166426721,
                                                              'age' => 4,
                                                              ]);
                                                              $idactivitySource81 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('activity_sources')->insert([
                                                              'activity_id' => $idactivity56,
                                                              'source_id' =>$idPlan51,
                                                              'value' => 2507873403,
                                                              'goal' => 0,
                                                              'evidence_balance' => 2507873403,
                                                              'age' => 4,
                                                              ]);
                                                              $idactivitySource82 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('activity_sources')->insert([
                                                              'activity_id' => $idactivity63,
                                                              'source_id' =>$idPlan51,
                                                              'value' => 836384318,
                                                              'goal' => 0,
                                                              'evidence_balance' => 836384318,
                                                              'age' => 4,
                                                              ]);
                                                              $idactivitySource83 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('activity_sources')->insert([
                                                              'activity_id' => $idactivity71,
                                                              'source_id' =>$idPlan51,
                                                              'value' => 495289408,
                                                              'goal' => 0,
                                                              'evidence_balance' => 495289408,
                                                              'age' => 4,
                                                              ]);
                                                              $idactivitySource84 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('activity_sources')->insert([
                                                              'activity_id' => $idactivity89,
                                                              'source_id' =>$idPlan51,
                                                              'value' => 993505417,
                                                              'goal' => 0,
                                                              'evidence_balance' => 993505417,
                                                              'age' => 4,
                                                              ]);
                                                              $idactivitySource85 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('activity_sources')->insert([
                                                              'activity_id' => $idactivity103,
                                                              'source_id' =>$idPlan51,
                                                              'value' => 2184600196,
                                                              'goal' => 0,
                                                              'evidence_balance' => 2184600196,
                                                              'age' => 4,
                                                              ]);
                                                              $idactivitySource86 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('activity_sources')->insert([
                                                              'activity_id' => $idactivity111,
                                                              'source_id' =>$idPlan51,
                                                              'value' => 4026085840,
                                                              'goal' => 0,
                                                              'evidence_balance' => 4026085840,
                                                              'age' => 4,
                                                              ]);
                                                              $idactivitySource87 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('activity_sources')->insert([
                                                              'activity_id' => $idactivity121,
                                                              'source_id' =>$idPlan51,
                                                              'value' => 577595795,
                                                              'goal' => 0,
                                                              'evidence_balance' => 577595795,
                                                              'age' => 4,
                                                              ]);
                                                              $idactivitySource88 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('activity_sources')->insert([
                                                              'activity_id' => $idactivity131,
                                                              'source_id' =>$idPlan51,
                                                              'value' => 500694467,
                                                              'goal' => 0,
                                                              'evidence_balance' => 500694467,
                                                              'age' => 4,
                                                              ]);
                                                              $idactivitySource89 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('activity_sources')->insert([
                                                              'activity_id' => $idactivity138,
                                                              'source_id' =>$idPlan51,
                                                              'value' => 2393995103.848,
                                                              'goal' => 0,
                                                              'evidence_balance' => 2393995103.848,
                                                              'age' => 4,
                                                              ]);
                                                              $idactivitySource90 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('activity_sources')->insert([
                                                              'activity_id' => $idactivity156,
                                                              'source_id' =>$idPlan57,
                                                              'value' => 1561133200.6569,
                                                              'goal' => 0,
                                                              'evidence_balance' => 1561133200.6569,
                                                              'age' => 4,
                                                              ]);
                                                              $idactivitySource91 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('activity_sources')->insert([
                                                              'activity_id' => $idactivity163,
                                                              'source_id' =>$idPlan55,
                                                              'value' => 289025785.456899,
                                                              'goal' => 0,
                                                              'evidence_balance' => 289025785.456899,
                                                              'age' => 4,
                                                              ]);
                                                              $idactivitySource92 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                              DB::table('activity_sources')->insert([
                                                                'activity_id' => $idactivity138,
                                                                'source_id' =>$idPlan57,
                                                                'value' => 198059365.152,
                                                                'goal' => 0,
                                                                'evidence_balance' => 198059365.152,
                                                                'age' => 4,
                                                                ]);
                                                                $idactivitySource93 = DB::getPdo()->lastInsertId();
                                                                
                                                                
                                                                
                                                              DB::table('activity_sources')->insert([
                                                                'activity_id' => $idactivity156,
                                                                'source_id' =>$idPlan56,
                                                                'value' => 1435150885,
                                                                'goal' => 0,
                                                                'evidence_balance' => 1435150885,
                                                                'age' => 4,
                                                                ]);
                                                                $idactivitySource94 = DB::getPdo()->lastInsertId();
                                                                
                                                                
                                                                
                                                                DB::table('evidence_financial')->insert([
                                                                  'evidence_id' => $idevidencia500,
                                                                  'activity_source_id' =>$idactivitySource78,
                                                                  'value' => 2048219884,
                                                                  ]);
                                                                  $idevidenceFinancial78 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                DB::table('evidence_financial')->insert([
                                                                  'evidence_id' => $idevidencia514,
                                                                  'activity_source_id' =>$idactivitySource79,
                                                                  'value' => 864123441,
                                                                  ]);
                                                                  $idevidenceFinancial79 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                DB::table('evidence_financial')->insert([
                                                                  'evidence_id' => $idevidencia524,
                                                                  'activity_source_id' =>$idactivitySource80,
                                                                  'value' => 10600076770,
                                                                  ]);
                                                                  $idevidenceFinancial80 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                DB::table('evidence_financial')->insert([
                                                                  'evidence_id' => $idevidencia532,
                                                                  'activity_source_id' =>$idactivitySource81,
                                                                  'value' => 165564041,
                                                                  ]);
                                                                  $idevidenceFinancial81 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                DB::table('evidence_financial')->insert([
                                                                  'evidence_id' => $idevidencia545,
                                                                  'activity_source_id' =>$idactivitySource82,
                                                                  'value' => 1745705761,
                                                                  ]);
                                                                  $idevidenceFinancial82 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                DB::table('evidence_financial')->insert([
                                                                  'evidence_id' => $idevidencia552,
                                                                  'activity_source_id' =>$idactivitySource83,
                                                                  'value' => 827789682,
                                                                  ]);
                                                                  $idevidenceFinancial83 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                DB::table('evidence_financial')->insert([
                                                                  'evidence_id' => $idevidencia560,
                                                                  'activity_source_id' =>$idactivitySource84,
                                                                  'value' => 468374373,
                                                                  ]);
                                                                  $idevidenceFinancial84 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                DB::table('evidence_financial')->insert([
                                                                  'evidence_id' => $idevidencia578,
                                                                  'activity_source_id' =>$idactivitySource85,
                                                                  'value' => 954310285,
                                                                  ]);
                                                                  $idevidenceFinancial85 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                DB::table('evidence_financial')->insert([
                                                                  'evidence_id' => $idevidencia592,
                                                                  'activity_source_id' =>$idactivitySource86,
                                                                  'value' => 2007405712,
                                                                  ]);
                                                                  $idevidenceFinancial86 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                DB::table('evidence_financial')->insert([
                                                                  'evidence_id' => $idevidencia600,
                                                                  'activity_source_id' =>$idactivitySource87,
                                                                  'value' => 3354651786,
                                                                  ]);
                                                                  $idevidenceFinancial87 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                DB::table('evidence_financial')->insert([
                                                                  'evidence_id' => $idevidencia610,
                                                                  'activity_source_id' =>$idactivitySource88,
                                                                  'value' => 289396360,
                                                                  ]);
                                                                  $idevidenceFinancial88 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                DB::table('evidence_financial')->insert([
                                                                  'evidence_id' => $idevidencia620,
                                                                  'activity_source_id' =>$idactivitySource89,
                                                                  'value' => 460386925,
                                                                  ]);
                                                                  $idevidenceFinancial89 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                DB::table('evidence_financial')->insert([
                                                                  'evidence_id' => $idevidencia627,
                                                                  'activity_source_id' =>$idactivitySource90,
                                                                  'value' => 2393995103.848,
                                                                  ]);
                                                                  $idevidenceFinancial90 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                DB::table('evidence_financial')->insert([
                                                                  'evidence_id' => $idevidencia645,
                                                                  'activity_source_id' =>$idactivitySource91,
                                                                  'value' => 1561133200.6569,
                                                                  ]);
                                                                  $idevidenceFinancial91 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                DB::table('evidence_financial')->insert([
                                                                  'evidence_id' => $idevidencia652,
                                                                  'activity_source_id' =>$idactivitySource92,
                                                                  'value' => 283684578,
                                                                  ]);
                                                                  $idevidenceFinancial92 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                  DB::table('evidence_financial')->insert([
                                                                    'evidence_id' => $idevidencia627,
                                                                    'activity_source_id' =>$idactivitySource93,
                                                                    'value' => 52484465.1520004,
                                                                    ]);
                                                                    $idevidenceFinancial93 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('evidence_financial')->insert([
                                                                    'evidence_id' => $idevidencia645,
                                                                    'activity_source_id' =>$idactivitySource94,
                                                                    'value' => 1357632714.3431,
                                                                    ]);
                                                                    $idevidenceFinancial94 = DB::getPdo()->lastInsertId();
             } 
}
