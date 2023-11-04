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
 * Class HistoricPAI_CORPOMOJANA_Seeder
 */
class HistoricPAI_CORPOMOJANA_Seeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $pai=PAI::create([
      'name' => 'PLAN DE ACCIÓN INSTITUCIONAL 2016 - 2019 MAGDALENA AMBIENTAL, COMPROMISO DE TODOS ',
      'start_date' => '2016-01-01',
      'end_date' => '2019-12-31',
      'director_name' => 'LILIANA M. QUIROZ AGUAS',
      'group_id' => 23,
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
          'car_program' => 'PROGRAMA 1 BIODIVERSIDAD SOSTENIBLE',
          'weighing' => 25,
          ]);
          $idprogram1 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA 2 GESTION INTEGRAL DEL RECURSO HIDRICO',
          'weighing' => 25,
          ]);
          $idprogram2 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA 3 PLANIFICACIÓN PARA LA ADAPTACIÓN AL CAMBIO CLIMÁTICO Y GESTIÓN DEL RIESGO',
          'weighing' => 25,
          ]);
          $idprogram3 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA 4 FORTALECIMIENTO PARA LA GESTIÓN AMBIENTAL',
          'weighing' => 25,
          ]);
          $idprogram4 = DB::getPdo()->lastInsertId();



          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => 'Proyecto No 1.1.: MANTENIMIENTO DE PLANTACIONES FORESTALES PROTECTORAS EN MICROCUENCAS DE LA REGIÓN DE LA MOJANA, JURISDICCION DE CORPOMOJANA - Vigencia 2019',
            'weighing' => 14,
            ]);
            $idproject1 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => 'Proyecto No 1.2.: RESTAURACION DE AREAS DEGRADADAS EN LAS MICROCUENCAS DE LOS CAÑOS MOJANA, RABON Y ARROYO VIJAGUAL Y RESTAURACION DE COBERTURAS BOSCOSAS 2018 ',
            'weighing' => 14,
            ]);
            $idproject2 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => 'Proyecto No 1.3. IMPLEMENTACION DE ESTRATEGIAS PARA LA RECUPERACION Y USOS SOSTENIBLE DE LOS RECURSOS NATURALES RENOVABLES, JURISDICCION DE CORPOMOJANA',
            'weighing' => 14,
            ]);
            $idproject3 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => 'Proyecto No 1.4. Adecuación y dotación para la investigación en fauna CROCODYLIA en la jurisdicción de CORPOMOJANA.',
            'weighing' => 14,
            ]);
            $idproject4 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => 'Proyecto No 1.5.Reforestación protectora para la restauración de la cuenca baja del rio San Jorge, jurisdicción de CORPOMOJANA departamento de Sucre. ',
            'weighing' => 14,
            ]);
            $idproject5 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => 'Proyecto No 1.6. Acompañamiento al proceso de declaratoria de áreas naturales protegidas identificadas, caracterizadas y priorizadas en los municipios de la jurisdicción de CORPOMOJANA.',
            'weighing' => 15,
            ]);
            $idproject6 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => 'Proyecto No 1.7. RESTAURACION DE AREAS DEGRADADAS DE LAS PRINCIPALES MICROCUENCAS DE LOS MUNICIPIOS DE SAN BENITO, LA UNION Y SAN MARCOS VIGENCIA 2018- ',
            'weighing' => 15,
            ]);
            $idproject7 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => 'Proyecto No 2.1.Formulación e implementación del Plan de Ordenación y Manejo de   la cuenca baja Río San Jorge, jurisdicción de Corpomojana.',
            'weighing' => 16,
            ]);
            $idproject8 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => 'Proyecto No 2.2.Análisis de los niveles de mercurio en agua, sedimentos y tejidos vivos (peces y buchón) en los humedales de La jurisdicción de Corpomojana.',
            'weighing' => 16,
            ]);
            $idproject9 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => 'Proyecto No 2.3 :Acompañamiento a los Entes Territoriales en la Implementación de los PGIRS, Comparendo Ambiental y PSMV en la jurisdicción de CORPOMOJANA',
            'weighing' => 17,
            ]);
            $idproject10 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => 'Proyecto No 2.4. Apoyo a la descontaminación de fuentes hídricas – Fondo de Descontaminación',
            'weighing' => 17,
            ]);
            $idproject11 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => 'Proyecto No 2.5. Acompañamiento institucional al proceso de  formulación y seguimiento a la implementación de los POT’s en los municipios de jurisdicción de CORPOMOJANA.',
            'weighing' => 17,
            ]);
            $idproject12 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => 'Proyecto No 2.6. RECUPERACIÓN Y CONSERVACIÓN DE LA OFERTA ICTIOLÓGICA EN LOS HUMEDALES DELOS MUNICIPIOS DE SAN BENITO ABAD Y CAIMITO, DEPARTAMENTO DE SUCRE.
          ',
            'weighing' => 17,
            ]);
            $idproject13 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram3,
            'project' => 'Proyecto 3.1. DESARROLLO DE ACCIONES QUE PERMITAN LA REDUCCIÓN DE GEI COMO MEDIDA DE MITIGACIÓN AL CAMBIO CLIMÁTICO EN LAS ZONAS RURALES DE LA JURISDICCIÓN DE CORPOMOJANA SUCRE.',
            'weighing' => 100,
            ]);
            $idproject14 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram4,
            'project' => 'Proyecto 4.1. Educación ambiental y participación social para la gestión ambiental y del riesgo en los municipios de jurisdicción de Corpomojana.',
            'weighing' => 12,
            ]);
            $idproject15 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram4,
            'project' => 'Proyecto 4.2. Acompañamiento institucional a los entes territoriales en la implementación del Comparendo Ambiental.',
            'weighing' => 12,
            ]);
            $idproject16 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram4,
            'project' => 'Proyecto 4.3. Acompañamiento a procesos de Ordenamiento del Recurso Hídrico POMCA en la jurisdicción de CORPOMOJANA',
            'weighing' => 12,
            ]);
            $idproject17 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram4,
            'project' => 'Proyecto 4.4.Formulación del Plan de Gestión Ambiental Regional - PGAR',
            'weighing' => 12,
            ]);
            $idproject18 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram4,
            'project' => 'Proyecto 4.5. Acompañamiento a procesos de Ordenamiento del Recurso Hídrico POMCA en la jurisdicción de CORPOMOJANA',
            'weighing' => 13,
            ]);
            $idproject19 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram4,
            'project' => 'Proyecto 4.6. Seguimiento - Calidad MECI.',
            'weighing' => 13,
            ]);
            $idproject20 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram4,
            'project' => 'Proyecto 4.7. Análisis, estructuración y fortalecimiento institucional ASOCARS- Fortalecimiento a la Administración.',
            'weighing' => 13,
            ]);
            $idproject21 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram4,
            'project' => 'Proyecto 4.8. Fortalecimiento del ejercicio de autoridad ambiental.',
            'weighing' => 13,
            ]);
            $idproject22 = DB::getPdo()->lastInsertId();
            
            

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
              
                         
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 422,
                'goal_2' => 422,
                'goal_3' => 520,
                'goal_4' => 1312,
                'goal_1_balance' => 422,
                'goal_2_balance' => 422,
                'goal_3_balance' => 520,
                'goal_4_balance' => 1312,
                'total_goal' => 2676,
                'unit_goal' => 47,
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
                'goal_1' => 422,
                'goal_2' => 422,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 422,
                'goal_2_balance' => 422,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 844,
                'unit_goal' => 47,
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
                'goal_1' => 422,
                'goal_2' => 422,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 422,
                'goal_2_balance' => 422,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 844,
                'unit_goal' => 47,
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
                'goal_1' => 6,
                'goal_2' => 6,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 6,
                'goal_2_balance' => 6,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 12,
                'unit_goal' => 82,
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
                'goal_1' => 300,
                'goal_2' => 300,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 300,
                'goal_2_balance' => 300,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 600,
                'unit_goal' => 47,
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
                'goal_1' => 1900,
                'goal_2' => 1900,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 1900,
                'goal_2_balance' => 1900,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 3800,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 17,
                ]);
                $idobjectiveproduct6 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
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
                'weighing' => 1,
                ]);
                $idobjectiveproduct7 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 10,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 10,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 10,
                'unit_goal' => 40,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 12,
                ]);
                $idobjectiveproduct8 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 150,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 150,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 150,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 12,
                ]);
                $idobjectiveproduct9 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 10,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 10,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 10,
                'unit_goal' => 40,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 12,
                ]);
                $idobjectiveproduct10 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 10,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 10,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 10,
                'unit_goal' => 40,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 12,
                ]);
                $idobjectiveproduct11 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => null,
                'product_other' => 'Producto 5',
                'goal_1' => 1000000,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 1000000,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 1000000,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 12,
                ]);
                $idobjectiveproduct12 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => null,
                'product_other' => 'Producto 6',
                'goal_1' => 100000,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 100000,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 100000,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 13,
                ]);
                $idobjectiveproduct13 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => null,
                'product_other' => 'Producto 7',
                'goal_1' => 10,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 10,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 10,
                'unit_goal' => 40,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 13,
                ]);
                $idobjectiveproduct14 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => null,
                'product_other' => 'Producto 8',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 430,
                'goal_4' => 430,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 430,
                'goal_4_balance' => 430,
                'total_goal' => 860,
                'unit_goal' => 47,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 13,
                ]);
                $idobjectiveproduct15 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
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
                $idobjectiveproduct16 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 12,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 12,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 12,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct17 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 560,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 560,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 560,
                'unit_goal' => 55,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct18 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 124461,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 124461,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 124461,
                'unit_goal' => 47,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct19 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 0,
                'goal_2' => 150,
                'goal_3' => 150,
                'goal_4' => 150,
                'goal_1_balance' => 0,
                'goal_2_balance' => 150,
                'goal_3_balance' => 150,
                'goal_4_balance' => 150,
                'total_goal' => 450,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct20 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => null,
                'product_other' => 'Producto 5',
                'goal_1' => 0,
                'goal_2' => 10,
                'goal_3' => 10,
                'goal_4' => 10,
                'goal_1_balance' => 0,
                'goal_2_balance' => 10,
                'goal_3_balance' => 10,
                'goal_4_balance' => 10,
                'total_goal' => 30,
                'unit_goal' => 40,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct21 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => null,
                'product_other' => 'Producto 6',
                'goal_1' => 0,
                'goal_2' => 10,
                'goal_3' => 10,
                'goal_4' => 10,
                'goal_1_balance' => 0,
                'goal_2_balance' => 10,
                'goal_3_balance' => 10,
                'goal_4_balance' => 10,
                'total_goal' => 30,
                'unit_goal' => 40,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct22 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => null,
                'product_other' => 'Producto 7',
                'goal_1' => 0,
                'goal_2' => 10,
                'goal_3' => 10,
                'goal_4' => 10,
                'goal_1_balance' => 0,
                'goal_2_balance' => 10,
                'goal_3_balance' => 10,
                'goal_4_balance' => 10,
                'total_goal' => 30,
                'unit_goal' => 34,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct23 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => null,
                'product_other' => 'Producto 8',
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
                'weighing' => 8,
                ]);
                $idobjectiveproduct24 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => null,
                'product_other' => 'Producto 9',
                'goal_1' => 0,
                'goal_2' => 87.5,
                'goal_3' => 87.5,
                'goal_4' => 215,
                'goal_1_balance' => 0,
                'goal_2_balance' => 87.5,
                'goal_3_balance' => 87.5,
                'goal_4_balance' => 215,
                'total_goal' => 390,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct25 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => null,
                'product_other' => 'Producto 10',
                'goal_1' => 0,
                'goal_2' => 20,
                'goal_3' => 1,
                'goal_4' => 20,
                'goal_1_balance' => 0,
                'goal_2_balance' => 20,
                'goal_3_balance' => 1,
                'goal_4_balance' => 20,
                'total_goal' => 41,
                'unit_goal' => 82,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 9,
                ]);
                $idobjectiveproduct26 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => null,
                'product_other' => 'Producto 11',
                'goal_1' => 0,
                'goal_2' => 100000,
                'goal_3' => 100000,
                'goal_4' => 100000,
                'goal_1_balance' => 0,
                'goal_2_balance' => 100000,
                'goal_3_balance' => 100000,
                'goal_4_balance' => 100000,
                'total_goal' => 300000,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 9,
                ]);
                $idobjectiveproduct27 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => null,
                'product_other' => 'Producto 12',
                'goal_1' => 0,
                'goal_2' => 10,
                'goal_3' => 10,
                'goal_4' => 10,
                'goal_1_balance' => 0,
                'goal_2_balance' => 10,
                'goal_3_balance' => 10,
                'goal_4_balance' => 10,
                'total_goal' => 30,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 9,
                ]);
                $idobjectiveproduct28 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
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
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct29 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective4,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 170,
                'goal_2' => 36,
                'goal_3' => 112,
                'goal_4' => 0,
                'goal_1_balance' => 170,
                'goal_2_balance' => 36,
                'goal_3_balance' => 112,
                'goal_4_balance' => 0,
                'total_goal' => 318,
                'unit_goal' => 47,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 33,
                ]);
                $idobjectiveproduct30 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective4,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 170,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 170,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 170,
                'unit_goal' => 47,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 33,
                ]);
                $idobjectiveproduct31 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective4,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 0,
                'goal_2' => 1,
                'goal_3' => 0.25,
                'goal_4' => 0.25,
                'goal_1_balance' => 0,
                'goal_2_balance' => 1,
                'goal_3_balance' => 0.25,
                'goal_4_balance' => 0.25,
                'total_goal' => 1.5,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 33,
                ]);
                $idobjectiveproduct32 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct33 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 8,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 8,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 8,
                'unit_goal' => 86,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct34 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 137,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 137,
                'total_goal' => 137,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 49,
                ]);
                $idobjectiveproduct35 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct36 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective6,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 1,
                'goal_2' => 8,
                'goal_3' => 8,
                'goal_4' => 8,
                'goal_1_balance' => 1,
                'goal_2_balance' => 8,
                'goal_3_balance' => 8,
                'goal_4_balance' => 8,
                'total_goal' => 25,
                'unit_goal' => 86,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 99,
                ]);
                $idobjectiveproduct37 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct38 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 1434,
                'goal_4' => 1434,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 1434,
                'goal_4_balance' => 1434,
                'total_goal' => 2868,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 99,
                ]);
                $idobjectiveproduct39 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
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
                'weighing' => 1,
                ]);
                $idobjectiveproduct40 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 0.2,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 0.2,
                'goal_4_balance' => 1,
                'total_goal' => 3.2,
                'unit_goal' => 34,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 99,
                ]);
                $idobjectiveproduct41 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
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
                'weighing' => 1,
                ]);
                $idobjectiveproduct42 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 10,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 10,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 10,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct43 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 720,
                'goal_2' => 720,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 720,
                'goal_2_balance' => 720,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 1440,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct44 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 720,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 720,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 720,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct45 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 10,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 10,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 10,
                'unit_goal' => 40,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct46 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'Producto 5',
                'goal_1' => 10,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 10,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 10,
                'unit_goal' => 40,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct47 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'Producto 6',
                'goal_1' => 200,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 200,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 200,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct48 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'Producto 7',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 720,
                'goal_4' => 720,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 720,
                'goal_4_balance' => 720,
                'total_goal' => 1440,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 15,
                ]);
                $idobjectiveproduct49 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
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
                'weighing' => 1,
                ]);
                $idobjectiveproduct50 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective10,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 7,
                'goal_2' => 7,
                'goal_3' => 1,
                'goal_4' => 7,
                'goal_1_balance' => 7,
                'goal_2_balance' => 7,
                'goal_3_balance' => 1,
                'goal_4_balance' => 7,
                'total_goal' => 22,
                'unit_goal' => 82,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 99,
                ]);
                $idobjectiveproduct51 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct52 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective11,
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
                'unit_goal' => 75,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct53 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective11,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 2,
                'unit_goal' => 75,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 49,
                ]);
                $idobjectiveproduct54 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct55 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 4,
                'goal_2' => 7,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 4,
                'goal_2_balance' => 7,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 11,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct56 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 7,
                'goal_4' => 7,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 7,
                'goal_4_balance' => 7,
                'total_goal' => 14,
                'unit_goal' => 86,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 49,
                ]);
                $idobjectiveproduct57 = DB::getPdo()->lastInsertId();
                
                
                
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
                $idobjectiveproduct58 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective13,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 0,
                'goal_2' => 5000000,
                'goal_3' => 5000000,
                'goal_4' => 5000000,
                'goal_1_balance' => 0,
                'goal_2_balance' => 5000000,
                'goal_3_balance' => 5000000,
                'goal_4_balance' => 5000000,
                'total_goal' => 15000000,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 16,
                ]);
                $idobjectiveproduct59 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective13,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 0,
                'goal_2' => 60,
                'goal_3' => 60,
                'goal_4' => 60,
                'goal_1_balance' => 0,
                'goal_2_balance' => 60,
                'goal_3_balance' => 60,
                'goal_4_balance' => 60,
                'total_goal' => 180,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 16,
                ]);
                $idobjectiveproduct60 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective13,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 0,
                'goal_2' => 120,
                'goal_3' => 120,
                'goal_4' => 120,
                'goal_1_balance' => 0,
                'goal_2_balance' => 120,
                'goal_3_balance' => 120,
                'goal_4_balance' => 120,
                'total_goal' => 360,
                'unit_goal' => 50,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 17,
                ]);
                $idobjectiveproduct61 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective13,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 0,
                'goal_2' => 75,
                'goal_3' => 75,
                'goal_4' => 75,
                'goal_1_balance' => 0,
                'goal_2_balance' => 75,
                'goal_3_balance' => 75,
                'goal_4_balance' => 75,
                'total_goal' => 225,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 17,
                ]);
                $idobjectiveproduct62 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective13,
                'product_id' => null,
                'product_other' => 'Producto 5',
                'goal_1' => 0,
                'goal_2' => 20,
                'goal_3' => 20,
                'goal_4' => 20,
                'goal_1_balance' => 0,
                'goal_2_balance' => 20,
                'goal_3_balance' => 20,
                'goal_4_balance' => 20,
                'total_goal' => 60,
                'unit_goal' => 82,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 17,
                ]);
                $idobjectiveproduct63 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 17,
                ]);
                $idobjectiveproduct64 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 21,
                'goal_2' => 1,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 21,
                'goal_2_balance' => 1,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 22,
                'unit_goal' => 47,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 16,
                ]);
                $idobjectiveproduct65 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 21,
                'goal_2' => 250,
                'goal_3' => 250,
                'goal_4' => 250,
                'goal_1_balance' => 21,
                'goal_2_balance' => 250,
                'goal_3_balance' => 250,
                'goal_4_balance' => 250,
                'total_goal' => 771,
                'unit_goal' => 47,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 16,
                ]);
                $idobjectiveproduct66 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 5.5,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 5.5,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 5.5,
                'unit_goal' => 50,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 16,
                ]);
                $idobjectiveproduct67 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 3,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 3,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 3,
                'unit_goal' => 82,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 17,
                ]);
                $idobjectiveproduct68 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => null,
                'product_other' => 'Producto 5',
                'goal_1' => 332,
                'goal_2' => 3500,
                'goal_3' => 3500,
                'goal_4' => 3500,
                'goal_1_balance' => 332,
                'goal_2_balance' => 3500,
                'goal_3_balance' => 3500,
                'goal_4_balance' => 3500,
                'total_goal' => 10832,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 17,
                ]);
                $idobjectiveproduct69 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => null,
                'product_other' => 'Producto 6',
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
                'weighing' => 17,
                ]);
                $idobjectiveproduct70 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct71 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective15,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct72 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective15,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 49,
                ]);
                $idobjectiveproduct73 = DB::getPdo()->lastInsertId();
                
                
                
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
                $idobjectiveproduct74 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective16,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 3,
                'goal_4' => 3,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 3,
                'goal_4_balance' => 3,
                'total_goal' => 6,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 99,
                ]);
                $idobjectiveproduct75 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective16,
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
                'weighing' => 1,
                ]);
                $idobjectiveproduct76 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective16,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 3,
                'goal_2' => 3,
                'goal_3' => 7,
                'goal_4' => 7,
                'goal_1_balance' => 3,
                'goal_2_balance' => 3,
                'goal_3_balance' => 7,
                'goal_4_balance' => 7,
                'total_goal' => 20,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 99,
                ]);
                $idobjectiveproduct77 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective17,
                'product_id' => null,
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
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct78 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective17,
                'product_id' => null,
                'product_other' => 'Producto 1',
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
                'weighing' => 50,
                ]);
                $idobjectiveproduct79 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective17,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 7,
                'goal_2' => 7,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 7,
                'goal_2_balance' => 7,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 14,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 49,
                ]);
                $idobjectiveproduct80 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct81 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective18,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 30,
                'goal_2' => 1,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 30,
                'goal_2_balance' => 1,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 31,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 99,
                ]);
                $idobjectiveproduct82 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective18,
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
                'weighing' => 1,
                ]);
                $idobjectiveproduct83 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective19,
                'product_id' => null,
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
                'weighing' => 99,
                ]);
                $idobjectiveproduct84 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective19,
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
                'weighing' => 1,
                ]);
                $idobjectiveproduct85 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective20,
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
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 99,
                ]);
                $idobjectiveproduct86 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective20,
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
                'weighing' => 1,
                ]);
                $idobjectiveproduct87 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective21,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 1,
                'goal_2' => 0,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 0,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 3,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 99,
                ]);
                $idobjectiveproduct88 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct89 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective19,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 99,
                ]);
                $idobjectiveproduct90 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective19,
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
                'weighing' => 1,
                ]);
                $idobjectiveproduct91 = DB::getPdo()->lastInsertId();

                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct1,
                  'name' => ' Actividad No 1.1.1 Aprestamiento del proyecto, Mantenimiento año 2.',
                  'goal_1' => 422,
                  'goal_2' => 422,
                  'goal_3' => 520,
                  'goal_4' => 1312,
                  'goal' => 2676,
                  'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity1 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct2,
                  'name' => ' Actividad No 1.1.2 Mantenimiento año 2.',
                  'goal_1' => 422,
                  'goal_2' => 422,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 844,
                  'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity2 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct3,
                  'name' => '    Actividad No 1.1.3. Monitoreo y seguimiento. Mantenimiento año 2.',
                  'goal_1' => 422,
                  'goal_2' => 422,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 844,
                  'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity3 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct4,
                  'name' => ' Actividad No 1.1.4 Realizar talleres, Mantenimiento año 3.',
                  'goal_1' => 6,
                  'goal_2' => 6,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 12,
                  'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity4 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct5,
                  'name' => ' Actividad No 1.1.5 Mantenimiento año 3.',
                  'goal_1' => 300,
                  'goal_2' => 300,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 600,
                  'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity5 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct6,
                  'name' => '    Actividad No 1.1.6. Divulgación, capacitación y seguimiento. Mantenimiento año 3.',
                  'goal_1' => 1900,
                  'goal_2' => 1900,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 3800,
                  'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity6 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct7,
                  'name' => 'Asignacion presupuestal',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity7 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct8,
                  'name' => '   Actividad No 1.2.1. Fortalecer las áreas jurídica y técnica de Corpomojana para la atención y manejo de procesos relacionados con la prevención y control al tráfico ilegal de especies silvestres.',
                  'goal_1' => 10,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 10,
                  'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity8 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct9,
                  'name' => '    Actividad No 1.2.1.2. Establecer operativos de control al tráfico ilegal de especies de fauna y flora.',
                  'goal_1' => 150,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 150,
                  'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity9 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct10,
                  'name' => ' Actividad No 1.2.1.3. Asistir y mantener la fauna decomisada en recuperación en la Estación San Marcos.',
                  'goal_1' => 10,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 10,
                  'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity10 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct11,
                  'name' => ' Actividad No 1.2.2.1. Analizar y evaluar la información estadística producida por la actividad pesquera de 10 especies comerciales en 10 ',
                  'goal_1' => 10,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 10,
                  'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity11 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct12,
                  'name' => ' Actividad No 1.2.2.2 Recuperar el Recurso ictiológico con repoblamientos piscícolas en cuerpos de aguas naturales.',
                  'goal_1' => 1000000,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1000000,
                  'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity12 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct13,
                  'name' => ' Actividad No 1.2.3.1. Producir plántulas de especies maderables, frutales y ornamentales en el vivero permanente de la Estación San Marcos.',
                  'goal_1' => 100000,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 100000,
                  'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity13 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct14,
                  'name' => ' Actividad No 1.2.3.2. Realizar la asistencia técnica a la producción de plántulas en el vivero de la Estación San Marcos',
                  'goal_1' => 10,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 10,
                  'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity14 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct15,
                  'name' => 'Restauracion de areas',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 430,
                  'goal_4' => 430,
                  'goal' => 860,
                  'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity15 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct16,
                  'name' => 'Asignacion presupuestal',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity16 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct17,
                  'name' => 'Actividad No 1.3.1. Gastos de Operación del Proyecto',
                  'goal_1' => 12,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 12,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity17 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct18,
                  'name' => 'Actividad 1.3.2.1. Mantenimiento de encierros y de caimanes',
                  'goal_1' => 560,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 560,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity18 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct19,
                  'name' => 'Actividad 1.3.2.2.- Mantenimiento de edificaciones',
                  'goal_1' => 124461,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 124461,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity19 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct20,
                  'name' => ' Actividad No 1.3.1.Apoyar en la estrategia de control al  tráfico ilegal de especies silvestres.',
                  'goal_1' => 0,
                  'goal_2' => 150,
                  'goal_3' => 150,
                  'goal_4' => 150,
                  'goal' => 450,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity20 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct21,
                  'name' => 'Actividad No 1.3.2. Disminuir el trafico ilegal de especies silvestre ',
                  'goal_1' => 0,
                  'goal_2' => 10,
                  'goal_3' => 10,
                  'goal_4' => 10,
                  'goal' => 30,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity21 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct22,
                  'name' => ' Actividad No 1.3.3. Recuperacion de la fauna decomisada para su liberacion en el medio natural',
                  'goal_1' => 0,
                  'goal_2' => 10,
                  'goal_3' => 10,
                  'goal_4' => 10,
                  'goal' => 30,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity22 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct23,
                  'name' => ' Actividad No 1.3.4. Analizar y evaluar la infromacion estadistica porducida por la actividad pesquera por 10 especies comerciales en 10 sitios de la region Mojana  ',
                  'goal_1' => 0,
                  'goal_2' => 10,
                  'goal_3' => 10,
                  'goal_4' => 10,
                  'goal' => 30,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity23 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct24,
                  'name' => ' Actividad No 1.3.5. Realizar el procesamiento de la información obtenida en los sitios de muestreos para generar estadísticas de la producción pesquera en la Mojana. ',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity24 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct25,
                  'name' => ' Actividad No 1.3.5. Recuperar el cauce de ciénagas y caños con grupos de pescadores articuladas con procesos educativos en conservación de humedales',
                  'goal_1' => 0,
                  'goal_2' => 87.5,
                  'goal_3' => 87.5,
                  'goal_4' => 215,
                  'goal' => 390,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity25 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct26,
                  'name' => ' Actividad No 1.3.6. Realizar talleres de capacitación relacionado con el manejo y uso sostenible Los Humedales.',
                  'goal_1' => 0,
                  'goal_2' => 20,
                  'goal_3' => 1,
                  'goal_4' => 20,
                  'goal' => 41,
                  'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity26 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct27,
                  'name' => ' Actividad No 1.3.7.Producir plántulas de especies maderables, frutales y ornamentales en viveros para recuperación de áreas afectadas ',
                  'goal_1' => 0,
                  'goal_2' => 100000,
                  'goal_3' => 100000,
                  'goal_4' => 100000,
                  'goal' => 300000,
                  'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity27 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct28,
                  'name' => ' Actividad No 1.3.8. Realizar la asistencia técnica a la producción de plántulas en viveros de la estación crocodylia de Corpomojan',
                  'goal_1' => 0,
                  'goal_2' => 10,
                  'goal_3' => 10,
                  'goal_4' => 10,
                  'goal' => 30,
                  'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity28 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct29,
                  'name' => 'Asignacion presupuestal',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity29 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct30,
                  'name' => ' Actividad No 1.4.1 Realizar el Mantenimiento (Año 3) a plantaciones establecidas',
                  'goal_1' => 170,
                  'goal_2' => 36,
                  'goal_3' => 112,
                  'goal_4' => 0,
                  'goal' => 318,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity30 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct31,
                  'name' => 'Actividad N° 1.4.2. Capacitacion en la conservación del recurso forestal.',
                  'goal_1' => 170,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 170,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity31 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct32,
                  'name' => 'Actividad No 1.4.1. Implementacion de medidas de conservacion de la especie crocodylus acutus en la granja de investigacion ',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 0.25,
                  'goal_4' => 0.25,
                  'goal' => 1.5,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity32 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct33,
                  'name' => 'Asignacion presupuestal',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity33 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct34,
                  'name' => '    Actividad No 1.5.1. Gastos de operatividad',
                  'goal_1' => 8,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 8,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity34 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct35,
                  'name' => 'Establecimiento de Plantaciones ',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 137,
                  'goal' => 137,
                  'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity35 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct36,
                  'name' => 'Asignacion presupuestal',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity36 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct37,
                  'name' => 'Actividad No 1.6.1. Gastos de operatividad',
                  'goal_1' => 1,
                  'goal_2' => 8,
                  'goal_3' => 8,
                  'goal_4' => 8,
                  'goal' => 25,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity37 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct38,
                  'name' => 'Asignacion presupuestal',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity38 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct39,
                  'name' => 'Actividad No 1.7.1',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 1434,
                  'goal_4' => 1434,
                  'goal' => 2868,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity39 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct40,
                  'name' => 'Asignacion presupuestal',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity40 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct41,
                  'name' => ' Actividad No 2.1.1. Formulación del  Plan de  ordenación del área de la cuenca baja del río San Jorge en la jurisdicción de Corpomojana.',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 0.2,
                  'goal_4' => 1,
                  'goal' => 3.2,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity41 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct42,
                  'name' => 'Asignacion presupuestal',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity42 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct43,
                  'name' => ' Actividad No 2.2.1.1.  DEFINIR Y SELECCIONAR SITIOS PARA LA TOMA DE MUESTRAS',
                  'goal_1' => 10,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 10,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity43 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct44,
                  'name' => ' Actividad No 2.1.1.2 TOMAR LAS MUESTRAS EN SITIOS SELECCIONADOS EN COLUMNA DE AGUA, SEDIMENTO, HUMANOS, PECES, MACRÓFITAS ACUÁTICAS Y ARROZ EN ÉPOCAS DE AGUAS',
                  'goal_1' => 720,
                  'goal_2' => 720,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1440,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity44 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct45,
                  'name' => ' Actividad No 2.1.1.3 REALIZAR EL PROCESAMIENTO Y ANÁLISIS DE MUESTRAS EN LABORATORIO.',
                  'goal_1' => 720,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 720,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity45 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct46,
                  'name' => ' Actividad No 2.2.1. ACOPIAR, ANÁLIZAR Y SISTEMATIZAR LA INFORMACIÓN OBTENIDA EN LA RED DE MONITOREO DE LA DINÁMICA DEL MERCURIO.',
                  'goal_1' => 10,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 10,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity46 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct47,
                  'name' => ' Actividad No 2.2.2.2.  ACTUALIZAR LA BASE DE DATOS CON LOS RESULTADOS DE ANÁLISIS DE MUESTRAS EN LABORATORIO EN EL PERÍODO DE EJECUCIÓN DEL PROYECTO.',
                  'goal_1' => 10,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 10,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity47 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct48,
                  'name' => ' Actividad No 2.2.2.3. PUBLICAR LOS RESULTADOS DEL ESTUDIO.',
                  'goal_1' => 200,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 200,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity48 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct49,
                  'name' => 'Analisis y toma de muestras. ',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 720,
                  'goal_4' => 720,
                  'goal' => 1440,
                  'weighing' => 15,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity49 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct50,
                  'name' => 'Asignacion presupuestal',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity50 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective10,
                  'product_id' =>$idobjectiveproduct51,
                  'name' => 'Actividad 2.3.1.1.  Talleres municipales para la formulacion y seguimiento a la implementación de los PGIRS y PSMV ',
                  'goal_1' => 7,
                  'goal_2' => 7,
                  'goal_3' => 1,
                  'goal_4' => 7,
                  'goal' => 22,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity51 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective10,
                  'product_id' =>$idobjectiveproduct52,
                  'name' => 'Asignacion presupuestal',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity52 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective11,
                  'product_id' =>$idobjectiveproduct53,
                  'name' => 'Actividad 2.4.1.Proyectos apoyados para la implementación de acción en descontaminación hídrica.',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity53 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective11,
                  'product_id' =>$idobjectiveproduct54,
                  'name' => 'Forumulacion del PORH Cuenca Baja Rio San Jorge. ',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 2,
                  'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity54 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective11,
                  'product_id' =>$idobjectiveproduct55,
                  'name' => 'Asignacion presupuestal',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity55 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct56,
                  'name' => 'Actividad 2.5.1 Talleres municipales para la formulacion y seguimiento a la implementación de los POTS',
                  'goal_1' => 4,
                  'goal_2' => 7,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 11,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity56 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct57,
                  'name' => 'Realizar las visitas de seguimiento y acompañamiento ',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 7,
                  'goal_4' => 7,
                  'goal' => 14,
                  'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity57 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct58,
                  'name' => 'Asignacion presupuestal',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity58 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' =>$idobjectiveproduct59,
                  'name' => '2.6.1. Repoblamiento de cuerpos de agua con especies nativas ',
                  'goal_1' => 0,
                  'goal_2' => 5000000,
                  'goal_3' => 5000000,
                  'goal_4' => 5000000,
                  'goal' => 15000000,
                  'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity59 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' =>$idobjectiveproduct60,
                  'name' => '2.6.2. Construccion de estanques',
                  'goal_1' => 0,
                  'goal_2' => 60,
                  'goal_3' => 60,
                  'goal_4' => 60,
                  'goal' => 180,
                  'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity60 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' =>$idobjectiveproduct61,
                  'name' => '2.6.3. Limpieza y destaponamiento de macrofitas ',
                  'goal_1' => 0,
                  'goal_2' => 120,
                  'goal_3' => 120,
                  'goal_4' => 120,
                  'goal' => 360,
                  'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity61 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' =>$idobjectiveproduct62,
                  'name' => '2.6.4. Monitoreas y productividad de agua ',
                  'goal_1' => 0,
                  'goal_2' => 75,
                  'goal_3' => 75,
                  'goal_4' => 75,
                  'goal' => 225,
                  'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity62 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' =>$idobjectiveproduct63,
                  'name' => '2.6.5. Capacitacion a pescadores ',
                  'goal_1' => 0,
                  'goal_2' => 20,
                  'goal_3' => 20,
                  'goal_4' => 20,
                  'goal' => 60,
                  'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity63 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' =>$idobjectiveproduct64,
                  'name' => 'Asignacion presupuestal',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity64 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct65,
                  'name' => 'Actividad No. 3.1.1.1. REALIZAR APRESTAMIENTO DEL PROYECTO ( componente Forestal)',
                  'goal_1' => 21,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 22,
                  'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity65 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct66,
                  'name' => 'Actividad No. 3.1.1.2. ESTABLECER LAS PLANTACIONES',
                  'goal_1' => 21,
                  'goal_2' => 250,
                  'goal_3' => 250,
                  'goal_4' => 250,
                  'goal' => 771,
                  'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity66 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct67,
                  'name' => 'Actividad No. 3.1.1.3. AISLAR LAS PLANTACIONES FORESTALES',
                  'goal_1' => 5.5,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 5.5,
                  'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity67 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct68,
                  'name' => 'Actividad No. 3.1.1.4. DESARROLLAR LA DIVULGACION, CAPACITACION Y SEGUIMIENTO A LAS PLANTACIONES.',
                  'goal_1' => 3,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 3,
                  'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity68 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct69,
                  'name' => ' Actividad No. 3.1.2.1.  CONSTRUIR Y PROVEER DE  ESTUFAS ECOLOGICAS A FAMILIAS RURALES DEL AREA DE JURISDICCION DE CORPOMOJANA.',
                  'goal_1' => 332,
                  'goal_2' => 3500,
                  'goal_3' => 3500,
                  'goal_4' => 3500,
                  'goal' => 10832,
                  'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity69 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct70,
                  'name' => 'Actividad No. 3.1.2.2.REALIZAR LA ASISTENCIA TECNICA Y EL SEGUIMIENTO A LA CONSTRUCCION E INSTALACION DE LAS ESTUFAS EN LAS COMUNIDADES.',
                  'goal_1' => 1,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity70 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct71,
                  'name' => 'Asignacion presupuestal',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity71 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective15,
                  'product_id' =>$idobjectiveproduct72,
                  'name' => 'ACT 3.4.2. Caracterización de corales y pastos marinos en el Departamento del Magdalena ',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 0,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity72 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective15,
                  'product_id' =>$idobjectiveproduct73,
                  'name' => 'ACT 3.4.3. Identificacion e Implementacion de estrategias de restauracion de ecosistemas marino-costeros',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 0,
                  'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity73 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective15,
                  'product_id' =>$idobjectiveproduct74,
                  'name' => 'ACT 3.4.4. Asignacion presupuestal',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity74 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective16,
                  'product_id' =>$idobjectiveproduct75,
                  'name' => 'Actividad 4.1.1 Implementación de estrategias de educación ambiental para mitigar los efectos de la variabilidad climática en los municipios de la jurisdicción.',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 3,
                  'goal_4' => 3,
                  'goal' => 6,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity75 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective16,
                  'product_id' =>$idobjectiveproduct76,
                  'name' => 'Asignacion presupuestal',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity76 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective16,
                  'product_id' =>$idobjectiveproduct77,
                  'name' => 'Actividad 4.2.1. Asistencia a los municipios en la implementación y seguimiento del Comparendo  Ambiental.',
                  'goal_1' => 3,
                  'goal_2' => 3,
                  'goal_3' => 7,
                  'goal_4' => 7,
                  'goal' => 20,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity77 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective17,
                  'product_id' =>$idobjectiveproduct78,
                  'name' => 'Asignacion presupuestal',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 1,
                  'goal' => 3,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity78 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective17,
                  'product_id' =>$idobjectiveproduct79,
                  'name' => 'Actividad No.4.3.1.  Actividad de acompañamiento para la ordenación de cuencas.',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 2,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity79 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective17,
                  'product_id' =>$idobjectiveproduct80,
                  'name' => 'Actividad 4.3.1. Asistencia a los municipios en la implementación y seguimiento del Comparendo  Ambiental.',
                  'goal_1' => 7,
                  'goal_2' => 7,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 14,
                  'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity80 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective17,
                  'product_id' =>$idobjectiveproduct81,
                  'name' => 'Asignacion presupuestal',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity81 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective18,
                  'product_id' =>$idobjectiveproduct82,
                  'name' => 'Actividad No. 4.4.1. Edición y publicación del documento final PGAR',
                  'goal_1' => 30,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 31,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity82 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective18,
                  'product_id' =>$idobjectiveproduct83,
                  'name' => 'Asignacion presupuestal',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity83 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective19,
                  'product_id' =>$idobjectiveproduct84,
                  'name' => 'Actividad No.4.5.1.  Actividad de acompañamiento para la ordenación de cuencas.',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 2,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity84 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective19,
                  'product_id' =>$idobjectiveproduct85,
                  'name' => 'Asignacion presupuestal',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity85 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective20,
                  'product_id' =>$idobjectiveproduct86,
                  'name' => 'Actividad No. 4.6.1. Materiales e Insumos',
                  'goal_1' => 1,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity86 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective20,
                  'product_id' =>$idobjectiveproduct87,
                  'name' => 'Asignacion presupuestal',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity87 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective21,
                  'product_id' =>$idobjectiveproduct88,
                  'name' => 'Actividades 4.7.1. Acciones de fortalecimiento institucional',
                  'goal_1' => 1,
                  'goal_2' => 0,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 3,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity88 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective21,
                  'product_id' =>$idobjectiveproduct89,
                  'name' => 'Asignacion presupuestal',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity89 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective19,
                  'product_id' =>$idobjectiveproduct90,
                  'name' => 'Actividad No. 4.8.1.Fortalecimiento del ejercicio de autoridad ambiental.',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 0,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity90 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective19,
                  'product_id' =>$idobjectiveproduct91,
                  'name' => 'Asignacion presupuestal',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity91 = DB::getPdo()->lastInsertId();
                  
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity1,
          'year' =>1,
          'value' => 7,
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia1 = DB::getPdo()->lastInsertId(); 





         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity7,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia7 = DB::getPdo()->lastInsertId(); 








         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity16,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia16 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity17,
          'year' =>1,
          'value' => 12,
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia17 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity18,
          'year' =>1,
          'value' => 560,
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia18 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity19,
          'year' =>1,
          'value' => 124461,
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia19 = DB::getPdo()->lastInsertId(); 









         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity29,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia29 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity30,
          'year' =>1,
          'value' => 136,
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia30 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity31,
          'year' =>1,
          'value' => 170,
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia31 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity33,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia33 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity34,
          'year' =>1,
          'value' => 8,
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia34 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity36,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia36 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity38,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia38 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity40,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia40 = DB::getPdo()->lastInsertId(); 
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
          'activity_id' => $idactivity50,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia50 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity51,
          'year' =>1,
          'value' => 7,
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia51 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity52,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia52 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity55,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia55 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity56,
          'year' =>1,
          'value' => 4,
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia56 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity58,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia58 = DB::getPdo()->lastInsertId(); 





         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity64,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia64 = DB::getPdo()->lastInsertId(); 






         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity71,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia71 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity74,
          'year' =>1,
          'value' => 1,
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
          'value' => 3,
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia77 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity78,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia78 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity80,
          'year' =>1,
          'value' => 7,
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
          'value' => 30,
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
          'activity_id' => $idactivity91,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia91 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity1,
          'year' =>2,
          'value' => 422,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia92 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity2,
          'year' =>2,
          'value' => 422,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia93 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity3,
          'year' =>2,
          'value' => 422,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia94 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity4,
          'year' =>2,
          'value' => 6,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia95 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity5,
          'year' =>2,
          'value' => 300,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia96 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity6,
          'year' =>2,
          'value' => 1900,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia97 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity7,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia98 = DB::getPdo()->lastInsertId(); 








         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity16,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia107 = DB::getPdo()->lastInsertId(); 



         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity20,
          'year' =>2,
          'value' => 35,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia111 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity21,
          'year' =>2,
          'value' => 2,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia112 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity22,
          'year' =>2,
          'value' => 2,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia113 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity23,
          'year' =>2,
          'value' => 2,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia114 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity24,
          'year' =>2,
          'value' => 0.2,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia115 = DB::getPdo()->lastInsertId(); 




         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity29,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia120 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity30,
          'year' =>2,
          'value' => 36,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia121 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity32,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia123 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity33,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia124 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity36,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia127 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity37,
          'year' =>2,
          'value' => 8,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia128 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity38,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia129 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity40,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia131 = DB::getPdo()->lastInsertId(); 



         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity44,
          'year' =>2,
          'value' => 720,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia135 = DB::getPdo()->lastInsertId(); 





         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity50,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia141 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity51,
          'year' =>2,
          'value' => 7,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia142 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity52,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia143 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity55,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia146 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity56,
          'year' =>2,
          'value' => 7,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia147 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity58,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia149 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity59,
          'year' =>2,
          'value' => 1567000,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia150 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity62,
          'year' =>2,
          'value' => 25,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia153 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity63,
          'year' =>2,
          'value' => 10,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia154 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity64,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia155 = DB::getPdo()->lastInsertId(); 






         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity71,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia162 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity74,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia165 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity76,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia167 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity77,
          'year' =>2,
          'value' => 3,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia168 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity78,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia169 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity80,
          'year' =>2,
          'value' => 7,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia171 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity81,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia172 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity82,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia173 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity83,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia174 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity84,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia175 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity85,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia176 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity87,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia178 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity89,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia180 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity91,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia182 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity1,
          'year' =>3,
          'value' => 216,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia183 = DB::getPdo()->lastInsertId(); 





         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity7,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia189 = DB::getPdo()->lastInsertId(); 







         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity15,
          'year' =>3,
          'value' => 395,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia197 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity16,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia198 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity17,
          'year' =>3,
          'value' => 6260371,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia199 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity18,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia200 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity19,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia201 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity20,
          'year' =>3,
          'value' => 6,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia202 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity21,
          'year' =>3,
          'value' => 2,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia203 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity22,
          'year' =>3,
          'value' => 2,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia204 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity23,
          'year' =>3,
          'value' => 2,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia205 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity25,
          'year' =>3,
          'value' => 87.5,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia207 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity27,
          'year' =>3,
          'value' => 200000,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia209 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity28,
          'year' =>3,
          'value' => 2,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia210 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity29,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia211 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity30,
          'year' =>3,
          'value' => 112,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia212 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity32,
          'year' =>3,
          'value' => 0.25,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia214 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity33,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia215 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity36,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia218 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity37,
          'year' =>3,
          'value' => 8,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia219 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity38,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia220 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity40,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia222 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity41,
          'year' =>3,
          'value' => 0.2,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia223 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity42,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia224 = DB::getPdo()->lastInsertId(); 






         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity49,
          'year' =>3,
          'value' => 720,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia231 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity50,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia232 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity52,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia234 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity54,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia236 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity55,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia237 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity57,
          'year' =>3,
          'value' => 7,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia239 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity58,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia240 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity59,
          'year' =>3,
          'value' => 5000000,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia241 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity60,
          'year' =>3,
          'value' => 60,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia242 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity61,
          'year' =>3,
          'value' => 120,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia243 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity62,
          'year' =>3,
          'value' => 75,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia244 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity63,
          'year' =>3,
          'value' => 20,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia245 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity64,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia246 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity66,
          'year' =>3,
          'value' => 250,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia248 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity69,
          'year' =>3,
          'value' => 3500,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia251 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity71,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia253 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity74,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia256 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity75,
          'year' =>3,
          'value' => 3,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia257 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity76,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia258 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity77,
          'year' =>3,
          'value' => 7,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia259 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity79,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia261 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity81,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia263 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity83,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia265 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity85,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia267 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity87,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia269 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity88,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia270 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity89,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia271 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity91,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia273 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity1,
          'year' =>4,
          'value' => 1312,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia274 = DB::getPdo()->lastInsertId(); 





         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity7,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia280 = DB::getPdo()->lastInsertId(); 







         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity15,
          'year' =>4,
          'value' => 430,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia288 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity16,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia289 = DB::getPdo()->lastInsertId(); 



         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity20,
          'year' =>4,
          'value' => 192,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia293 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity21,
          'year' =>4,
          'value' => 9,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia294 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity22,
          'year' =>4,
          'value' => 9,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia295 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity23,
          'year' =>4,
          'value' => 3,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia296 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity25,
          'year' =>4,
          'value' => 215,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia298 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity26,
          'year' =>4,
          'value' => 20,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia299 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity27,
          'year' =>4,
          'value' => 100000,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia300 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity28,
          'year' =>4,
          'value' => 10,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia301 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity29,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia302 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity32,
          'year' =>4,
          'value' => 0.25,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia305 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity33,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia306 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity35,
          'year' =>4,
          'value' => 137,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia308 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity36,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia309 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity37,
          'year' =>4,
          'value' => 8,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia310 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity38,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia311 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity39,
          'year' =>4,
          'value' => 1434,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia312 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity40,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia313 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity41,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia314 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity42,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia315 = DB::getPdo()->lastInsertId(); 






         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity49,
          'year' =>4,
          'value' => 720,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia322 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity50,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia323 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity51,
          'year' =>4,
          'value' => 7,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia324 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity52,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia325 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity54,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia327 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity55,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia328 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity57,
          'year' =>4,
          'value' => 7,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia330 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity58,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia331 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity59,
          'year' =>4,
          'value' => 5000000,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia332 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity60,
          'year' =>4,
          'value' => 60,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia333 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity61,
          'year' =>4,
          'value' => 120,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia334 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity62,
          'year' =>4,
          'value' => 75,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia335 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity63,
          'year' =>4,
          'value' => 20,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia336 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity64,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia337 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity66,
          'year' =>4,
          'value' => 250,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia339 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity67,
          'year' =>4,
          'value' => 0.2,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia340 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity68,
          'year' =>4,
          'value' => 0.2,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia341 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity69,
          'year' =>4,
          'value' => 3500,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia342 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity71,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia344 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity74,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia347 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity75,
          'year' =>4,
          'value' => 3,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia348 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity76,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia349 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity77,
          'year' =>4,
          'value' => 7,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia350 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity78,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia351 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity79,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia352 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity81,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia354 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity83,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia356 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity85,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia358 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity87,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia360 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity88,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia361 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity89,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia362 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity91,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia364 = DB::getPdo()->lastInsertId(); 

         DB::table('financing_sources')->insert([
          'father_id' => 11,
          'code' => '1.1.1.1.1.1.1.1',
          'name' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
          'description' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 23,
          ]);
          $idFuente1 = DB::getPdo()->lastInsertId();

        DB::table('financing_sources')->insert([
          'father_id' => 57,
          'code' => '1.1.2.2.2.3',
          'name' => 'Concesiones de Aguas',
          'description' => 'Concesiones de Aguas',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 23,
          ]);
          $idFuente2 = DB::getPdo()->lastInsertId();
        
        DB::table('financing_sources')->insert([
          'father_id' => 57,
          'code' => '1.1.2.2.2.4',
          'name' => 'Evaluacion Planes de Contingencias',
          'description' => 'Evaluacion Planes de Contingencias',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 23,
          ]);
          $idFuente3 = DB::getPdo()->lastInsertId();
        
        DB::table('financing_sources')->insert([
          'father_id' => 57,
          'code' => '1.1.2.2.2.5',
          'name' => 'Evaluacion solicitud licencia ambiental',
          'description' => 'Evaluacion solicitud licencia ambiental',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 23,
          ]);
          $idFuente4 = DB::getPdo()->lastInsertId();

         DB::table('financing_sources')->insert([
          'father_id' => 64,
          'code' => '1.1.2.2.2.3.1',
          'name' => 'Salvoconductos (vigencia actual)',
          'description' => 'Salvoconductos (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 23,
          ]);
          $idFuente8 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 90,
          'code' => '1.1.2.4.2.3',
          'name' => 'Venta de bienes y servicios',
          'description' => 'Venta de bienes y servicios',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 23,
          ]);
          $idFuente13 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 58,
          'code' => '1.1.2.2.2.1.1',
          'name' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
          'description' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 23,
          ]);
          $idFuente14 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 79,
          'code' => '1.1.2.2.2.8.1',
          'name' => 'Otros servicios (vigencia actual)',
          'description' => 'Otros servicios (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 23,
          ]);
          $idFuente15 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 58,
          'code' => '1.1.2.2.2.1.1',
          'name' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
          'description' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 23,
          ]);
          $idFuente5 = DB::getPdo()->lastInsertId();
        
        DB::table('financing_sources')->insert([
          'father_id' => 79,
          'code' => '1.1.2.2.2.8.7',
          'name' => 'Residuos solidos',
          'description' => 'Residuos solidos',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 23,
          ]);
          $idFuente6 = DB::getPdo()->lastInsertId();
        
        DB::table('financing_sources')->insert([
          'father_id' => 79,
          'code' => '1.1.2.2.2.8.3',
          'name' => 'Visitas de seguimiento a licencias ',
          'description' => 'Visitas de seguimiento a licencias ',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 23,
          ]);
          $idFuente7 = DB::getPdo()->lastInsertId();
        
        DB::table('financing_sources')->insert([
          'father_id' => 79,
          'code' => '1.1.2.2.2.8.4',
          'name' => 'Visitas de aprovechamiento forestal',
          'description' => 'Visitas de aprovechamiento forestal',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 23,
          ]);
          $idFuente9 = DB::getPdo()->lastInsertId();
          
        DB::table('financing_sources')->insert([
          'father_id' => 79,
          'code' => '1.1.2.2.2.8.5',
          'name' => 'Visitas de movilizacion y removilizacion',
          'description' => 'Visitas de movilizacion y removilizacion',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 23,
          ]);
          $idFuente10 = DB::getPdo()->lastInsertId();
        
        DB::table('financing_sources')->insert([
          'father_id' => 79,
          'code' => '1.1.2.2.2.8.6',
          'name' => 'Otros ingreso distintos a los anteriores (repoblabiento de especies)',
          'description' => 'Otros ingreso distintos a los anteriores (repoblabiento de especies)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 23,
          ]);
          $idFuente11 = DB::getPdo()->lastInsertId();
        
        DB::table('financing_sources')->insert([
          'father_id' => 48,
          'code' => '1.1.2.2.1.1.3.1',
          'name' => 'Tasa de aprovechamiento Forestal (vigencia actual)',
          'description' => 'Tasa de aprovechamiento Forestal (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 23,
          ]);
          $idFuente12 = DB::getPdo()->lastInsertId();
        
        DB::table('financing_sources')->insert([
          'father_id' => 1,
          'code' => '1.3',
          'name' => 'Otros Aportes de Otras Entidades',
          'description' => 'Otros Aportes de Otras Entidades',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 23,
          ]);
          $idFuente17 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 42,
          'code' => '1.1.2.2.1.1.1.1',
          'name' => 'Tasa retributiva (vigencia actual)',
          'description' => 'Tasa retributiva (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 23,
          ]);
          $idFuente18 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 45,
          'code' => '1.1.2.2.1.1.2.1',
          'name' => 'Tasa por el uso del agua (vigencia actual)',
          'description' => 'Tasa por el uso del agua (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 23,
          ]);
          $idFuente19 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 84,
          'code' => '1.1.2.3.1.1.1',
          'name' => 'Multas ambientales (vigencia actual)',
          'description' => 'Multas ambientales (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 23,
          ]);
          $idFuente20 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 79,
          'code' => '1.1.2.2.2.8.1',
          'name' => 'Otros servicios (vigencia actual)',
          'description' => 'Otros servicios (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 23,
          ]);
          $idFuente21 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 145,
          'code' => '1.2.2.6',
          'name' => 'Rendimientos financieros',
          'description' => 'Rendimientos financieros',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 23,
          ]);
          $idFuente22 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 145,
          'code' => '1.2.2.7',
          'name' => 'Excedentes financieros',
          'description' => 'Excedentes financieros',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 23,
          ]);
          $idFuente26 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 241,
          'code' => '1.2.6.3.5',
          'name' => 'Recuperación de cartera Otras tasas',
          'description' => 'Recuperación de cartera Otras tasas',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 23,
          ]);
          $idFuente27 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 250,
          'code' => '1.2.7.4',
          'name' => 'Otros recursos del balance',
          'description' => 'Otros recursos del balance',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 23,
          ]);
          $idFuente28 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 119,
          'code' => '1.1.2.5.1.1.1.4',
          'name' => 'Aportes de la Nación Funcionamiento',
          'description' => 'Aportes de la Nación Funcionamiento',
          'type_id' => 23,
          'final_level' => true,
          'group_id' => 23,
          ]);
          $idFuente37 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 118,
          'code' => '1.1.2.5.1.1.2',
          'name' => 'Aportes de la Nación para Inversión',
          'description' => 'Aportes de la Nación para Inversión',
          'type_id' => 23,
          'final_level' => true,
          'group_id' => 23,
          ]);
          $idFuente38 = DB::getPdo()->lastInsertId();
                   
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente1,
        'value' => 223227275,
        'functioning_percentage' => 100,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 0,
        'functioning' => 223227275,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 0,
        'year' => 1,
        ]);
        $idPlan1 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente13,
        'value' => 6001500,
        'functioning_percentage' => 0,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 100,
        'functioning' => 0,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 6001500,
        'year' => 1,
        ]);
        $idPlan2 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente14,
        'value' => 122474295,
        'functioning_percentage' => 0,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 100,
        'functioning' => 0,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 122474295,
        'year' => 1,
        ]);
        $idPlan3 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente15,
        'value' => 55639369,
        'functioning_percentage' => 85,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 15,
        'functioning' => 47293463.65,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 8345905.35,
        'year' => 1,
        ]);
        $idPlan4 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente17,
        'value' => 24521669,
        'functioning_percentage' => 0,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 100,
        'functioning' => 0,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 24521669,
        'year' => 1,
        ]);
        $idPlan5 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente18,
        'value' => 7494778,
        'functioning_percentage' => 0,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 100,
        'functioning' => 0,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 7494778,
        'year' => 1,
        ]);
        $idPlan6 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente19,
        'value' => 3280000,
        'functioning_percentage' => 0,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 100,
        'functioning' => 0,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 3280000,
        'year' => 1,
        ]);
        $idPlan7 = DB::getPdo()->lastInsertId();
        
        DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente21,
          'value' => 39519286,
          'functioning_percentage' => 4.666,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 95.334,
          'functioning' => 1843969.88476,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 37675316.11524,
          'year' => 1,
          ]);
          $idPlan8 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente26,
        'value' => 38234653,
        'functioning_percentage' => 0,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 100,
        'functioning' => 0,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 38234653,
        'year' => 1,
        ]);
        $idPlan9 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente27,
        'value' => 195255530,
        'functioning_percentage' => 0,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 100,
        'functioning' => 0,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 195255530,
        'year' => 1,
        ]);
        $idPlan10 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente28,
        'value' => 793037932,
        'functioning_percentage' => 0,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 100,
        'functioning' => 0,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 793037932,
        'year' => 1,
        ]);
        $idPlan11 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente37,
        'value' => 2739285643,
        'functioning_percentage' => 100,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 0,
        'functioning' => 2739285643,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 0,
        'year' => 1,
        ]);
        $idPlan12 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente38,
        'value' => 3013061795,
        'functioning_percentage' => 0,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 100,
        'functioning' => 0,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 3013061795,
        'year' => 1,
        ]);
        $idPlan13 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente1,
        'value' => 289473339,
        'functioning_percentage' => 85,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 15,
        'functioning' => 246052338.15,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 43421000.85,
        'year' => 2,
        ]);
        $idPlan14 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente2,
        'value' => 150461567,
        'functioning_percentage' => 0,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 100,
        'functioning' => 0,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 150461567,
        'year' => 2,
        ]);
        $idPlan15 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente3,
        'value' => 5773525,
        'functioning_percentage' => 0,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 100,
        'functioning' => 0,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 5773525,
        'year' => 2,
        ]);
        $idPlan16 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente4,
        'value' => 11197140,
        'functioning_percentage' => 0,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 100,
        'functioning' => 0,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 11197140,
        'year' => 2,
        ]);
        $idPlan17 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente5,
        'value' => 82345162,
        'functioning_percentage' => 0,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 100,
        'functioning' => 0,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 82345162,
        'year' => 2,
        ]);
        $idPlan18 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente6,
        'value' => 1049732,
        'functioning_percentage' => 0,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 100,
        'functioning' => 0,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 1049732,
        'year' => 2,
        ]);
        $idPlan19 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente7,
        'value' => 0,
        'functioning_percentage' => 0,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 0,
        'functioning' => 0,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 0,
        'year' => 2,
        ]);
        $idPlan72 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente8,
        'value' => 6648653,
        'functioning_percentage' => 0,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 100,
        'functioning' => 0,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 6648653,
        'year' => 2,
        ]);
        $idPlan20 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente9,
        'value' => 2971009,
        'functioning_percentage' => 0,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 100,
        'functioning' => 0,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 2971009,
        'year' => 2,
        ]);
        $idPlan21 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente10,
        'value' => 17500029,
        'functioning_percentage' => 0,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 100,
        'functioning' => 0,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 17500029,
        'year' => 2,
        ]);
        $idPlan22 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente11,
        'value' => 16245543,
        'functioning_percentage' => 0,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 100,
        'functioning' => 0,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 16245543,
        'year' => 2,
        ]);
        $idPlan23 = DB::getPdo()->lastInsertId();
        
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
        'year' => 2,
        ]);
        $idPlan73 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente18,
        'value' => 61440110,
        'functioning_percentage' => 0,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 100,
        'functioning' => 0,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 61440110,
        'year' => 2,
        ]);
        $idPlan24 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente19,
        'value' => 8076391,
        'functioning_percentage' => 10,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 90,
        'functioning' => 807639.1,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 7268751.9,
        'year' => 2,
        ]);
        $idPlan25 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente20,
        'value' => 3000000,
        'functioning_percentage' => 0,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 100,
        'functioning' => 0,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 3000000,
        'year' => 2,
        ]);
        $idPlan26 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente21,
        'value' => 360000,
        'functioning_percentage' => 75,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 25,
        'functioning' => 270000,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 90000,
        'year' => 2,
        ]);
        $idPlan27 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente26,
        'value' => 24439344,
        'functioning_percentage' => 30,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 70,
        'functioning' => 7331803.2,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 17107540.8,
        'year' => 2,
        ]);
        $idPlan28 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente27,
        'value' => 206552486,
        'functioning_percentage' => 0,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 100,
        'functioning' => 0,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 206552486,
        'year' => 2,
        ]);
        $idPlan29 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente28,
        'value' => 1001239545,
        'functioning_percentage' => 0,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 100,
        'functioning' => 0,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 1001239545,
        'year' => 2,
        ]);
        $idPlan30 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente37,
        'value' => 2621626893,
        'functioning_percentage' => 100,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 0,
        'functioning' => 2621626893,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 0,
        'year' => 2,
        ]);
        $idPlan31 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente38,
        'value' => 13667306426,
        'functioning_percentage' => 0,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 100,
        'functioning' => 0,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 13667306426,
        'year' => 2,
        ]);
        $idPlan32 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente1,
        'value' => 386831208,
        'functioning_percentage' => 75,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 25,
        'functioning' => 290123406,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 96707802,
        'year' => 4,
        ]);
        $idPlan61 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente14,
        'value' => 308569145,
        'functioning_percentage' => 0,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 100,
        'functioning' => 0,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 308569145,
        'year' => 4,
        ]);
        $idPlan62 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente18,
        'value' => 53567313,
        'functioning_percentage' => 0,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 100,
        'functioning' => 0,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 53567313,
        'year' => 4,
        ]);
        $idPlan63 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente19,
        'value' => 4155000,
        'functioning_percentage' => 0,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 100,
        'functioning' => 0,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 4155000,
        'year' => 4,
        ]);
        $idPlan64 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente20,
        'value' => 45843950,
        'functioning_percentage' => 6.881,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 93.119,
        'functioning' => 3154522.1995,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 42689427.8005,
        'year' => 4,
        ]);
        $idPlan65 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente21,
        'value' => 2077000,
        'functioning_percentage' => 0,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 100,
        'functioning' => 0,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 2077000,
        'year' => 4,
        ]);
        $idPlan66 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente22,
        'value' => 10487000,
        'functioning_percentage' => 100,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 0,
        'functioning' => 10487000,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 0,
        'year' => 4,
        ]);
        $idPlan67 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente27,
        'value' => 215309081,
        'functioning_percentage' => 45,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 55,
        'functioning' => 96889086.45,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 118419994.55,
        'year' => 4,
        ]);
        $idPlan68 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente37,
        'value' => 3040683631,
        'functioning_percentage' => 100,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 0,
        'functioning' => 3040683631,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 0,
        'year' => 4,
        ]);
        $idPlan69 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente38,
        'value' => 5171891640,
        'functioning_percentage' => 0,
        'debt_service_percentage' => 0,
        'fund_percentage' => 0,
        'investment_percentage' => 100,
        'functioning' => 0,
        'debt_service' => 0,
        'fund' => 0,
        'investment' => 5171891640,
        'year' => 4,
        ]);
        $idPlan70 = DB::getPdo()->lastInsertId();
        
          DB::table('implementations')->insert([
          'p_a_i_s_id'=>$idpai1,
          ]);
          $idImplementation1 = DB::getPdo()->lastInsertId();

      DB::table('fundraisings')->insert([
        'date' => '2016-12-31',
        'value' => 295589614,
        'financial_plans_id' => $idPlan1,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo1 = DB::getPdo()->lastInsertId();
        
      DB::table('fundraisings')->insert([
        'date' => '2016-12-31',
        'value' => 3132500,
        'financial_plans_id' => $idPlan2,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo2 = DB::getPdo()->lastInsertId();
        
      DB::table('fundraisings')->insert([
        'date' => '2016-12-31',
        'value' => 130833133,
        'financial_plans_id' => $idPlan3,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo3 = DB::getPdo()->lastInsertId();
        
      DB::table('fundraisings')->insert([
        'date' => '2016-12-31',
        'value' => 54742540,
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
        'value' => 18905344,
        'financial_plans_id' => $idPlan6,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo6 = DB::getPdo()->lastInsertId();
        
      DB::table('fundraisings')->insert([
        'date' => '2016-12-31',
        'value' => 7531654,
        'financial_plans_id' => $idPlan7,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo7 = DB::getPdo()->lastInsertId();
        
      DB::table('fundraisings')->insert([
        'date' => '2016-12-31',
        'value' => 55335829,
        'financial_plans_id' => $idPlan8,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo8 = DB::getPdo()->lastInsertId();
        
      DB::table('fundraisings')->insert([
        'date' => '2016-12-31',
        'value' => 44292673,
        'financial_plans_id' => $idPlan9,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo9 = DB::getPdo()->lastInsertId();
        
      DB::table('fundraisings')->insert([
        'date' => '2016-12-31',
        'value' => 286782804,
        'financial_plans_id' => $idPlan10,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo10 = DB::getPdo()->lastInsertId();
        
      DB::table('fundraisings')->insert([
        'date' => '2016-12-31',
        'value' => 793037932,
        'financial_plans_id' => $idPlan11,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo11 = DB::getPdo()->lastInsertId();
        
      DB::table('fundraisings')->insert([
        'date' => '2016-12-31',
        'value' => 2460977511,
        'financial_plans_id' => $idPlan12,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo12 = DB::getPdo()->lastInsertId();
        
      DB::table('fundraisings')->insert([
        'date' => '2016-12-31',
        'value' => 123070385,
        'financial_plans_id' => $idPlan13,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo13 = DB::getPdo()->lastInsertId();
        
      DB::table('fundraisings')->insert([
        'date' => '2017-12-31',
        'value' => 310034193,
        'financial_plans_id' => $idPlan14,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo14 = DB::getPdo()->lastInsertId();
        
      DB::table('fundraisings')->insert([
        'date' => '2017-12-31',
        'value' => 118138975,
        'financial_plans_id' => $idPlan15,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo15 = DB::getPdo()->lastInsertId();
        
      DB::table('fundraisings')->insert([
        'date' => '2017-12-31',
        'value' => 7602758,
        'financial_plans_id' => $idPlan16,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo16 = DB::getPdo()->lastInsertId();
        
      DB::table('fundraisings')->insert([
        'date' => '2017-12-31',
        'value' => 6167316,
        'financial_plans_id' => $idPlan17,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo17 = DB::getPdo()->lastInsertId();
        
      DB::table('fundraisings')->insert([
        'date' => '2017-12-31',
        'value' => 267674980,
        'financial_plans_id' => $idPlan18,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo18 = DB::getPdo()->lastInsertId();
        
      DB::table('fundraisings')->insert([
        'date' => '2017-12-31',
        'value' => 7174322,
        'financial_plans_id' => $idPlan19,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo19 = DB::getPdo()->lastInsertId();
        
      DB::table('fundraisings')->insert([
        'date' => '2017-12-31',
        'value' => 9490460,
        'financial_plans_id' => $idPlan72,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo72 = DB::getPdo()->lastInsertId();
        
      DB::table('fundraisings')->insert([
        'date' => '2017-12-31',
        'value' => 8177984,
        'financial_plans_id' => $idPlan20,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo20 = DB::getPdo()->lastInsertId();
        
      DB::table('fundraisings')->insert([
        'date' => '2017-12-31',
        'value' => 3954731,
        'financial_plans_id' => $idPlan21,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo21 = DB::getPdo()->lastInsertId();
        
      DB::table('fundraisings')->insert([
        'date' => '2017-12-31',
        'value' => 1960534,
        'financial_plans_id' => $idPlan22,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo22 = DB::getPdo()->lastInsertId();
        
      DB::table('fundraisings')->insert([
        'date' => '2017-12-31',
        'value' => 17514121,
        'financial_plans_id' => $idPlan23,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo23 = DB::getPdo()->lastInsertId();
        
      DB::table('fundraisings')->insert([
        'date' => '2017-12-31',
        'value' => 11595551,
        'financial_plans_id' => $idPlan73,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo73 = DB::getPdo()->lastInsertId();
        
      DB::table('fundraisings')->insert([
        'date' => '2017-12-31',
        'value' => 65000044,
        'financial_plans_id' => $idPlan24,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo24 = DB::getPdo()->lastInsertId();
        
      DB::table('fundraisings')->insert([
        'date' => '2017-12-31',
        'value' => 4607391,
        'financial_plans_id' => $idPlan25,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo25 = DB::getPdo()->lastInsertId();
        
      DB::table('fundraisings')->insert([
        'date' => '2017-12-31',
        'value' => 0,
        'financial_plans_id' => $idPlan26,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo26 = DB::getPdo()->lastInsertId();
        
      DB::table('fundraisings')->insert([
        'date' => '2017-12-31',
        'value' => 175000,
        'financial_plans_id' => $idPlan27,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo27 = DB::getPdo()->lastInsertId();
        
      DB::table('fundraisings')->insert([
        'date' => '2017-12-31',
        'value' => 31876205,
        'financial_plans_id' => $idPlan28,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo28 = DB::getPdo()->lastInsertId();
        
      DB::table('fundraisings')->insert([
        'date' => '2017-12-31',
        'value' => 182302103,
        'financial_plans_id' => $idPlan29,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo29 = DB::getPdo()->lastInsertId();
        
      DB::table('fundraisings')->insert([
        'date' => '2017-12-31',
        'value' => 1001239545,
        'financial_plans_id' => $idPlan30,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo30 = DB::getPdo()->lastInsertId();
        
      DB::table('fundraisings')->insert([
        'date' => '2017-12-31',
        'value' => 2410336431,
        'financial_plans_id' => $idPlan31,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo31 = DB::getPdo()->lastInsertId();
        
      DB::table('fundraisings')->insert([
        'date' => '2017-12-31',
        'value' => 1844496059,
        'financial_plans_id' => $idPlan32,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo32 = DB::getPdo()->lastInsertId();
        
      DB::table('fundraisings')->insert([
        'date' => '2019-12-31',
        'value' => 246109640,
        'financial_plans_id' => $idPlan61,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo61 = DB::getPdo()->lastInsertId();
        
      DB::table('fundraisings')->insert([
        'date' => '2019-12-31',
        'value' => 297914434,
        'financial_plans_id' => $idPlan62,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo62 = DB::getPdo()->lastInsertId();
        
      DB::table('fundraisings')->insert([
        'date' => '2019-12-31',
        'value' => 2193188,
        'financial_plans_id' => $idPlan63,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo63 = DB::getPdo()->lastInsertId();
        
      DB::table('fundraisings')->insert([
        'date' => '2019-12-31',
        'value' => 0,
        'financial_plans_id' => $idPlan64,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo64 = DB::getPdo()->lastInsertId();
        
      DB::table('fundraisings')->insert([
        'date' => '2019-12-31',
        'value' => 35447147,
        'financial_plans_id' => $idPlan65,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo65 = DB::getPdo()->lastInsertId();
        
      DB::table('fundraisings')->insert([
        'date' => '2019-12-31',
        'value' => 0,
        'financial_plans_id' => $idPlan66,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo66 = DB::getPdo()->lastInsertId();
        
      DB::table('fundraisings')->insert([
        'date' => '2019-12-31',
        'value' => 11403137,
        'financial_plans_id' => $idPlan67,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo67 = DB::getPdo()->lastInsertId();
        
      DB::table('fundraisings')->insert([
        'date' => '2019-12-31',
        'value' => 114957198,
        'financial_plans_id' => $idPlan68,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo68 = DB::getPdo()->lastInsertId();
        
      DB::table('fundraisings')->insert([
        'date' => '2019-12-31',
        'value' => 2646872855,
        'financial_plans_id' => $idPlan69,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo69 = DB::getPdo()->lastInsertId();
        
      DB::table('fundraisings')->insert([
        'date' => '2019-12-31',
        'value' => 3401039668,
        'financial_plans_id' => $idPlan70,
        'implementation_id' => $idImplementation1,
        ]);
        $idRecaudo70 = DB::getPdo()->lastInsertId();
           
          DB::table('cost_sources')->insert([
              'father_id' => 2,
              'code' => '2.1.1',
              'name' => 'GASTOS DE PERSONAL',
              'description' => 'GASTOS DE PERSONAL',
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'group_id' => 23,
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
              'group_id' => 23,
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
              'group_id' => 23,
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
              'group_id' => 23,
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
              'group_id' => 23,
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
              'group_id' => 23,
              ]);
              $idFuenteGasto4 = DB::getPdo()->lastInsertId();
              
      DB::table('cost_sources')->insert([
      'father_id' => 19,
      'code' => '2.1.3.3.1',
      'name' => 'Comisiones y otros gastos',
      'description' => 'Comisiones y otros gastos',
      'functioning' => TRUE,
      'compensation' => FALSE,
      'debt_service' => FALSE,
      'group_id' => 23,
      ]);
      $idFuenteGasto8 = DB::getPdo()->lastInsertId();
      
      
      
              DB::table('financial_costs')->insert([
                  'year' => 1,
                  'value_bugeted' => 107199631,
                  'value_comitted' => 60433160,
                  'own' => TRUE,
                  'nation' => FALSE,
                  'royalties' => FALSE,
                  'funds' => FALSE,
                  'functioning' => TRUE,
                  'compensation' => FALSE,
                  'debt_service' => FALSE,
                  'cost_sources_id' => $idFuenteGasto1,
                  'p_a_i_id' => $idpai1,
                  'group_id' => 23,
                  ]);
                  $idGasto1 = DB::getPdo()->lastInsertId();
                  
                  
              DB::table('financial_costs')->insert([
                  'year' => 1,
                  'value_bugeted' => 16447198,
                  'value_comitted' => 16435529,
                  'own' => TRUE,
                  'nation' => FALSE,
                  'royalties' => FALSE,
                  'funds' => FALSE,
                  'functioning' => TRUE,
                  'compensation' => FALSE,
                  'debt_service' => FALSE,
                  'cost_sources_id' => $idFuenteGasto2,
                  'p_a_i_id' => $idpai1,
                  'group_id' => 23,
                  ]);
                  $idGasto2 = DB::getPdo()->lastInsertId();
                  
                  
              DB::table('financial_costs')->insert([
                  'year' => 1,
                  'value_bugeted' => 70174454,
                  'value_comitted' => 62253965,
                  'own' => TRUE,
                  'nation' => FALSE,
                  'royalties' => FALSE,
                  'funds' => FALSE,
                  'functioning' => TRUE,
                  'compensation' => FALSE,
                  'debt_service' => FALSE,
                  'cost_sources_id' => $idFuenteGasto3,
                  'p_a_i_id' => $idpai1,
                  'group_id' => 23,
                  ]);
                  $idGasto3 = DB::getPdo()->lastInsertId();
                  
                  
              DB::table('financial_costs')->insert([
                  'year' => 1,
                  'value_bugeted' => 28000000,
                  'value_comitted' => 13483907,
                  'own' => TRUE,
                  'nation' => FALSE,
                  'royalties' => FALSE,
                  'funds' => FALSE,
                  'functioning' => TRUE,
                  'compensation' => FALSE,
                  'debt_service' => FALSE,
                  'cost_sources_id' => $idFuenteGasto4,
                  'p_a_i_id' => $idpai1,
                  'group_id' => 23,
                  ]);
                  $idGasto4 = DB::getPdo()->lastInsertId();
                  
                  
              DB::table('financial_costs')->insert([
                  'year' => 1,
                  'value_bugeted' => 1500000,
                  'value_comitted' => 0,
                  'own' => TRUE,
                  'nation' => FALSE,
                  'royalties' => FALSE,
                  'funds' => FALSE,
                  'functioning' => TRUE,
                  'compensation' => FALSE,
                  'debt_service' => FALSE,
                  'cost_sources_id' => $idFuenteGasto5,
                  'p_a_i_id' => $idpai1,
                  'group_id' => 23,
                  ]);
                  $idGasto5 = DB::getPdo()->lastInsertId();
                  
                  
              DB::table('financial_costs')->insert([
                  'year' => 1,
                  'value_bugeted' => 24521669,
                  'value_comitted' => 698170,
                  'own' => TRUE,
                  'nation' => FALSE,
                  'royalties' => FALSE,
                  'funds' => FALSE,
                  'functioning' => TRUE,
                  'compensation' => FALSE,
                  'debt_service' => FALSE,
                  'cost_sources_id' => $idFuenteGasto6,
                  'p_a_i_id' => $idpai1,
                  'group_id' => 23,
                  ]);
                  $idGasto6 = DB::getPdo()->lastInsertId();
                  
                  DB::table('financial_costs')->insert([
                      'year' => 1,
                      'value_bugeted' => 2073581857,
                      'value_comitted' => 2064349154,
                      'own' => FALSE,
                      'nation' => TRUE,
                      'royalties' => FALSE,
                      'funds' => FALSE,
                      'functioning' => TRUE,
                      'compensation' => FALSE,
                      'debt_service' => FALSE,
                      'cost_sources_id' => $idFuenteGasto1,
                      'p_a_i_id' => $idpai1,
                      'group_id' => 23,
                      ]);
                      $idGasto7 = DB::getPdo()->lastInsertId();
                      
                      
                  DB::table('financial_costs')->insert([
                      'year' => 1,
                      'value_bugeted' => 96562041,
                      'value_comitted' => 96561921,
                      'own' => FALSE,
                      'nation' => TRUE,
                      'royalties' => FALSE,
                      'funds' => FALSE,
                      'functioning' => TRUE,
                      'compensation' => FALSE,
                      'debt_service' => FALSE,
                      'cost_sources_id' => $idFuenteGasto2,
                      'p_a_i_id' => $idpai1,
                      'group_id' => 23,
                      ]);
                      $idGasto8 = DB::getPdo()->lastInsertId();
                      
                      
                  DB::table('financial_costs')->insert([
                      'year' => 1,
                      'value_bugeted' => 275349992,
                      'value_comitted' => 263686935,
                      'own' => FALSE,
                      'nation' => TRUE,
                      'royalties' => FALSE,
                      'funds' => FALSE,
                      'functioning' => TRUE,
                      'compensation' => FALSE,
                      'debt_service' => FALSE,
                      'cost_sources_id' => $idFuenteGasto3,
                      'p_a_i_id' => $idpai1,
                      'group_id' => 23,
                      ]);
                      $idGasto9 = DB::getPdo()->lastInsertId();
                      
                      
                  DB::table('financial_costs')->insert([
                      'year' => 1,
                      'value_bugeted' => 31705753,
                      'value_comitted' => 23558650,
                      'own' => FALSE,
                      'nation' => TRUE,
                      'royalties' => FALSE,
                      'funds' => FALSE,
                      'functioning' => TRUE,
                      'compensation' => FALSE,
                      'debt_service' => FALSE,
                      'cost_sources_id' => $idFuenteGasto4,
                      'p_a_i_id' => $idpai1,
                      'group_id' => 23,
                      ]);
                      $idGasto10 = DB::getPdo()->lastInsertId();

                      
                  DB::table('financial_costs')->insert([
                      'year' => 1,
                      'value_bugeted' => 10086000,
                      'value_comitted' => 3217745,
                      'own' => FALSE,
                      'nation' => TRUE,
                      'royalties' => FALSE,
                      'funds' => FALSE,
                      'functioning' => TRUE,
                      'compensation' => FALSE,
                      'debt_service' => FALSE,
                      'cost_sources_id' => $idFuenteGasto5,
                      'p_a_i_id' => $idpai1,
                      'group_id' => 23,
                      ]);
                      $idGasto11 = DB::getPdo()->lastInsertId();
                      
                      
                  DB::table('financial_costs')->insert([
                      'year' => 1,
                      'value_bugeted' => 126000000,
                      'value_comitted' => 126000000,
                      'own' => FALSE,
                      'nation' => TRUE,
                      'royalties' => FALSE,
                      'funds' => FALSE,
                      'functioning' => TRUE,
                      'compensation' => FALSE,
                      'debt_service' => FALSE,
                      'cost_sources_id' => $idFuenteGasto6,
                      'p_a_i_id' => $idpai1,
                      'group_id' => 23,
                      ]);
                      $idGasto12 = DB::getPdo()->lastInsertId();
                      
                      DB::table('financial_costs')->insert([
                          'year' => 2,
                          'value_bugeted' => 131871815,
                          'value_comitted' => 88600505,
                          'own' => TRUE,
                          'nation' => FALSE,
                          'royalties' => FALSE,
                          'funds' => FALSE,
                          'functioning' => TRUE,
                          'compensation' => FALSE,
                          'debt_service' => FALSE,
                          'cost_sources_id' => $idFuenteGasto1,
                          'p_a_i_id' => $idpai1,
                          'group_id' => 23,
                          ]);
                          $idGasto13 = DB::getPdo()->lastInsertId();
                          
                          
                      DB::table('financial_costs')->insert([
                          'year' => 2,
                          'value_bugeted' => 13046719,
                          'value_comitted' => 12841719,
                          'own' => TRUE,
                          'nation' => FALSE,
                          'royalties' => FALSE,
                          'funds' => FALSE,
                          'functioning' => TRUE,
                          'compensation' => FALSE,
                          'debt_service' => FALSE,
                          'cost_sources_id' => $idFuenteGasto2,
                          'p_a_i_id' => $idpai1,
                          'group_id' => 23,
                          ]);
                          $idGasto14 = DB::getPdo()->lastInsertId();
                          
                          
                      DB::table('financial_costs')->insert([
                          'year' => 2,
                          'value_bugeted' => 80299783,
                          'value_comitted' => 80119378,
                          'own' => TRUE,
                          'nation' => FALSE,
                          'royalties' => FALSE,
                          'funds' => FALSE,
                          'functioning' => TRUE,
                          'compensation' => FALSE,
                          'debt_service' => FALSE,
                          'cost_sources_id' => $idFuenteGasto3,
                          'p_a_i_id' => $idpai1,
                          'group_id' => 23,
                          ]);
                          $idGasto15 = DB::getPdo()->lastInsertId();
                          
                          
                      DB::table('financial_costs')->insert([
                          'year' => 2,
                          'value_bugeted' => 27743600,
                          'value_comitted' => 24446426,
                          'own' => TRUE,
                          'nation' => FALSE,
                          'royalties' => FALSE,
                          'funds' => FALSE,
                          'functioning' => TRUE,
                          'compensation' => FALSE,
                          'debt_service' => FALSE,
                          'cost_sources_id' => $idFuenteGasto4,
                          'p_a_i_id' => $idpai1,
                          'group_id' => 23,
                          ]);
                          $idGasto16 = DB::getPdo()->lastInsertId();
                          
                      DB::table('financial_costs')->insert([
                          'year' => 2,
                          'value_bugeted' => 1500000,
                          'value_comitted' => 0,
                          'own' => TRUE,
                          'nation' => FALSE,
                          'royalties' => FALSE,
                          'funds' => FALSE,
                          'functioning' => TRUE,
                          'compensation' => FALSE,
                          'debt_service' => FALSE,
                          'cost_sources_id' => $idFuenteGasto5,
                          'p_a_i_id' => $idpai1,
                          'group_id' => 23,
                          ]);
                          $idGasto17 = DB::getPdo()->lastInsertId();
                          
                          
                          DB::table('financial_costs')->insert([
                              'year' => 2,
                              'value_bugeted' => 2213532509,
                              'value_comitted' => 2210603610,
                              'own' => FALSE,
                              'nation' => TRUE,
                              'royalties' => FALSE,
                              'funds' => FALSE,
                              'functioning' => TRUE,
                              'compensation' => FALSE,
                              'debt_service' => FALSE,
                              'cost_sources_id' => $idFuenteGasto1,
                              'p_a_i_id' => $idpai1,
                              'group_id' => 23,
                              ]);
                              $idGasto18 = DB::getPdo()->lastInsertId();
                              
                              
                          DB::table('financial_costs')->insert([
                              'year' => 2,
                              'value_bugeted' => 82030056,
                              'value_comitted' => 81129976,
                              'own' => FALSE,
                              'nation' => TRUE,
                              'royalties' => FALSE,
                              'funds' => FALSE,
                              'functioning' => TRUE,
                              'compensation' => FALSE,
                              'debt_service' => FALSE,
                              'cost_sources_id' => $idFuenteGasto2,
                              'p_a_i_id' => $idpai1,
                              'group_id' => 23,
                              ]);
                              $idGasto19 = DB::getPdo()->lastInsertId();
                              
                              
                          DB::table('financial_costs')->insert([
                              'year' => 2,
                              'value_bugeted' => 287948008,
                              'value_comitted' => 284670606,
                              'own' => FALSE,
                              'nation' => TRUE,
                              'royalties' => FALSE,
                              'funds' => FALSE,
                              'functioning' => TRUE,
                              'compensation' => FALSE,
                              'debt_service' => FALSE,
                              'cost_sources_id' => $idFuenteGasto3,
                              'p_a_i_id' => $idpai1,
                              'group_id' => 23,
                              ]);
                              $idGasto20 = DB::getPdo()->lastInsertId();
                              
                              
                          DB::table('financial_costs')->insert([
                              'year' => 2,
                              'value_bugeted' => 28030320,
                              'value_comitted' => 17841120,
                              'own' => FALSE,
                              'nation' => TRUE,
                              'royalties' => FALSE,
                              'funds' => FALSE,
                              'functioning' => TRUE,
                              'compensation' => FALSE,
                              'debt_service' => FALSE,
                              'cost_sources_id' => $idFuenteGasto4,
                              'p_a_i_id' => $idpai1,
                              'group_id' => 23,
                              ]);
                              $idGasto21 = DB::getPdo()->lastInsertId();
                              
                          DB::table('financial_costs')->insert([
                              'year' => 2,
                              'value_bugeted' => 10086000,
                              'value_comitted' => 3716081,
                              'own' => FALSE,
                              'nation' => TRUE,
                              'royalties' => FALSE,
                              'funds' => FALSE,
                              'functioning' => TRUE,
                              'compensation' => FALSE,
                              'debt_service' => FALSE,
                              'cost_sources_id' => $idFuenteGasto5,
                              'p_a_i_id' => $idpai1,
                              'group_id' => 23,
                              ]);
                              $idGasto22 = DB::getPdo()->lastInsertId();
                              
                              
                              DB::table('financial_costs')->insert([
                                  'year' => 4,
                                  'value_bugeted' => 57332452,
                                  'value_comitted' => 27068911,
                                  'value_paid' => 27068615,
                                  'own' => TRUE,
                                  'nation' => FALSE,
                                  'royalties' => FALSE,
                                  'funds' => FALSE,
                                  'functioning' => TRUE,
                                  'compensation' => FALSE,
                                  'debt_service' => FALSE,
                                  'cost_sources_id' => $idFuenteGasto1,
                                  'p_a_i_id' => $idpai1,
                                  'group_id' => 23,
                                  ]);
                                  $idGasto32 = DB::getPdo()->lastInsertId();
                                  
                                  
                              DB::table('financial_costs')->insert([
                                  'year' => 4,
                                  'value_bugeted' => 7079236,
                                  'value_comitted' => 5400000,
                                  'value_paid' => 5400000,
                                  'own' => TRUE,
                                  'nation' => FALSE,
                                  'royalties' => FALSE,
                                  'funds' => FALSE,
                                  'functioning' => TRUE,
                                  'compensation' => FALSE,
                                  'debt_service' => FALSE,
                                  'cost_sources_id' => $idFuenteGasto2,
                                  'p_a_i_id' => $idpai1,
                                  'group_id' => 23,
                                  ]);
                                  $idGasto33 = DB::getPdo()->lastInsertId();
                                  
                                  
                              DB::table('financial_costs')->insert([
                                  'year' => 4,
                                  'value_bugeted' => 305282167,
                                  'value_comitted' => 292083128,
                                  'value_paid' => 275312515,
                                  'own' => TRUE,
                                  'nation' => FALSE,
                                  'royalties' => FALSE,
                                  'funds' => FALSE,
                                  'functioning' => TRUE,
                                  'compensation' => FALSE,
                                  'debt_service' => FALSE,
                                  'cost_sources_id' => $idFuenteGasto3,
                                  'p_a_i_id' => $idpai1,
                                  'group_id' => 23,
                                  ]);
                                  $idGasto34 = DB::getPdo()->lastInsertId();
                                  
                              DB::table('financial_costs')->insert([
                                  'year' => 4,
                                  'value_bugeted' => 500000,
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
                                  'group_id' => 23,
                                  ]);
                                  $idGasto35 = DB::getPdo()->lastInsertId();
                                  
                                  
                              DB::table('financial_costs')->insert([
                                  'year' => 4,
                                  'value_bugeted' => 28818292,
                                  'value_comitted' => 27440553,
                                  'value_paid' => 25757353,
                                  'own' => TRUE,
                                  'nation' => FALSE,
                                  'royalties' => FALSE,
                                  'funds' => FALSE,
                                  'functioning' => TRUE,
                                  'compensation' => FALSE,
                                  'debt_service' => FALSE,
                                  'cost_sources_id' => $idFuenteGasto4,
                                  'p_a_i_id' => $idpai1,
                                  'group_id' => 23,
                                  ]);
                                  $idGasto36 = DB::getPdo()->lastInsertId();
                                  
                                  
                              DB::table('financial_costs')->insert([
                                  'year' => 4,
                                  'value_bugeted' => 1642000,
                                  'value_comitted' => 0,
                                  'value_paid' => 0,
                                  'own' => TRUE,
                                  'nation' => FALSE,
                                  'royalties' => FALSE,
                                  'funds' => FALSE,
                                  'functioning' => TRUE,
                                  'compensation' => FALSE,
                                  'debt_service' => FALSE,
                                  'cost_sources_id' => $idFuenteGasto8,
                                  'p_a_i_id' => $idpai1,
                                  'group_id' => 23,
                                  ]);
                                  $idGasto37 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  DB::table('financial_costs')->insert([
                                      'year' => 4,
                                      'value_bugeted' => 2328925208,
                                      'value_comitted' => 2319197330,
                                      'value_paid' => 2313671970,
                                      'own' => FALSE,
                                      'nation' => TRUE,
                                      'royalties' => FALSE,
                                      'funds' => FALSE,
                                      'functioning' => TRUE,
                                      'compensation' => FALSE,
                                      'debt_service' => FALSE,
                                      'cost_sources_id' => $idFuenteGasto1,
                                      'p_a_i_id' => $idpai1,
                                      'group_id' => 23,
                                      ]);
                                      $idGasto38 = DB::getPdo()->lastInsertId();
                                      
                                      
                                  DB::table('financial_costs')->insert([
                                      'year' => 4,
                                      'value_bugeted' => 6575400,
                                      'value_comitted' => 6575400,
                                      'value_paid' => 6575400,
                                      'own' => FALSE,
                                      'nation' => TRUE,
                                      'royalties' => FALSE,
                                      'funds' => FALSE,
                                      'functioning' => TRUE,
                                      'compensation' => FALSE,
                                      'debt_service' => FALSE,
                                      'cost_sources_id' => $idFuenteGasto2,
                                      'p_a_i_id' => $idpai1,
                                      'group_id' => 23,
                                      ]);
                                      $idGasto39 = DB::getPdo()->lastInsertId();
                                      
                                      
                                  DB::table('financial_costs')->insert([
                                      'year' => 4,
                                      'value_bugeted' => 471482997,
                                      'value_comitted' => 467247652,
                                      'value_paid' => 315321649,
                                      'own' => FALSE,
                                      'nation' => TRUE,
                                      'royalties' => FALSE,
                                      'funds' => FALSE,
                                      'functioning' => TRUE,
                                      'compensation' => FALSE,
                                      'debt_service' => FALSE,
                                      'cost_sources_id' => $idFuenteGasto3,
                                      'p_a_i_id' => $idpai1,
                                      'group_id' => 23,
                                      ]);
                                      $idGasto40 = DB::getPdo()->lastInsertId();
                                      
                                  DB::table('financial_costs')->insert([
                                      'year' => 4,
                                      'value_bugeted' => 210286576,
                                      'value_comitted' => 210286576,
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
                                      'group_id' => 23,
                                      ]);
                                      $idGasto41 = DB::getPdo()->lastInsertId();
                                      
                                      
                                  DB::table('financial_costs')->insert([
                                      'year' => 4,
                                      'value_bugeted' => 12713450,
                                      'value_comitted' => 12713450,
                                      'value_paid' => 12713450,
                                      'own' => FALSE,
                                      'nation' => TRUE,
                                      'royalties' => FALSE,
                                      'funds' => FALSE,
                                      'functioning' => TRUE,
                                      'compensation' => FALSE,
                                      'debt_service' => FALSE,
                                      'cost_sources_id' => $idFuenteGasto4,
                                      'p_a_i_id' => $idpai1,
                                      'group_id' => 23,
                                      ]);
                                      $idGasto42 = DB::getPdo()->lastInsertId();
                                      
                                      
                                  DB::table('financial_costs')->insert([
                                      'year' => 4,
                                      'value_bugeted' => 10700000,
                                      'value_comitted' => 9078200,
                                      'value_paid' => 9078200,
                                      'own' => FALSE,
                                      'nation' => TRUE,
                                      'royalties' => FALSE,
                                      'funds' => FALSE,
                                      'functioning' => TRUE,
                                      'compensation' => FALSE,
                                      'debt_service' => FALSE,
                                      'cost_sources_id' => $idFuenteGasto8,
                                      'p_a_i_id' => $idpai1,
                                      'group_id' => 23,
                                      ]);
                                      $idGasto43 = DB::getPdo()->lastInsertId();

                                      DB::table('activity_sources')->insert([
                                        'activity_id' => $idactivity7,
                                        'source_id' =>$idPlan13,
                                        'value' => 1152282888,
                                        'goal' => 0,
                                        'evidence_balance' => 1152282888,
                                        'age' => 1,
                                        ]);
                                        $idactivitySource1 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('activity_sources')->insert([
                                        'activity_id' => $idactivity16,
                                        'source_id' =>$idPlan13,
                                        'value' => 669640000,
                                        'goal' => 0,
                                        'evidence_balance' => 669640000,
                                        'age' => 1,
                                        ]);
                                        $idactivitySource2 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('activity_sources')->insert([
                                        'activity_id' => $idactivity29,
                                        'source_id' =>$idPlan13,
                                        'value' => 75710965,
                                        'goal' => 0,
                                        'evidence_balance' => 75710965,
                                        'age' => 1,
                                        ]);
                                        $idactivitySource3 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('activity_sources')->insert([
                                        'activity_id' => $idactivity33,
                                        'source_id' =>$idPlan13,
                                        'value' => 213000000,
                                        'goal' => 0,
                                        'evidence_balance' => 213000000,
                                        'age' => 1,
                                        ]);
                                        $idactivitySource4 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('activity_sources')->insert([
                                        'activity_id' => $idactivity36,
                                        'source_id' =>$idPlan13,
                                        'value' => 10000000,
                                        'goal' => 0,
                                        'evidence_balance' => 10000000,
                                        'age' => 1,
                                        ]);
                                        $idactivitySource5 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('activity_sources')->insert([
                                        'activity_id' => $idactivity50,
                                        'source_id' =>$idPlan13,
                                        'value' => 261282000,
                                        'goal' => 0,
                                        'evidence_balance' => 261282000,
                                        'age' => 1,
                                        ]);
                                        $idactivitySource6 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('activity_sources')->insert([
                                        'activity_id' => $idactivity52,
                                        'source_id' =>$idPlan13,
                                        'value' => 10000000,
                                        'goal' => 0,
                                        'evidence_balance' => 10000000,
                                        'age' => 1,
                                        ]);
                                        $idactivitySource7 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('activity_sources')->insert([
                                        'activity_id' => $idactivity58,
                                        'source_id' =>$idPlan11,
                                        'value' => 10000000,
                                        'goal' => 0,
                                        'evidence_balance' => 10000000,
                                        'age' => 1,
                                        ]);
                                        $idactivitySource9 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('activity_sources')->insert([
                                        'activity_id' => $idactivity71,
                                        'source_id' =>$idPlan11,
                                        'value' => 458566671,
                                        'goal' => 0,
                                        'evidence_balance' => 458566671,
                                        'age' => 1,
                                        ]);
                                        $idactivitySource10 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('activity_sources')->insert([
                                        'activity_id' => $idactivity78,
                                        'source_id' =>$idPlan3,
                                        'value' => 6000000,
                                        'goal' => 0,
                                        'evidence_balance' => 6000000,
                                        'age' => 1,
                                        ]);
                                        $idactivitySource11 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('activity_sources')->insert([
                                        'activity_id' => $idactivity81,
                                        'source_id' =>$idPlan3,
                                        'value' => 5500000,
                                        'goal' => 0,
                                        'evidence_balance' => 5500000,
                                        'age' => 1,
                                        ]);
                                        $idactivitySource12 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('activity_sources')->insert([
                                        'activity_id' => $idactivity83,
                                        'source_id' =>$idPlan3,
                                        'value' => 10000000,
                                        'goal' => 0,
                                        'evidence_balance' => 10000000,
                                        'age' => 1,
                                        ]);
                                        $idactivitySource13 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('activity_sources')->insert([
                                        'activity_id' => $idactivity85,
                                        'source_id' =>$idPlan3,
                                        'value' => 10000000,
                                        'goal' => 0,
                                        'evidence_balance' => 10000000,
                                        'age' => 1,
                                        ]);
                                        $idactivitySource14 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('activity_sources')->insert([
                                        'activity_id' => $idactivity87,
                                        'source_id' =>$idPlan3,
                                        'value' => 5500000,
                                        'goal' => 0,
                                        'evidence_balance' => 5500000,
                                        'age' => 1,
                                        ]);
                                        $idactivitySource15 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('activity_sources')->insert([
                                        'activity_id' => $idactivity89,
                                        'source_id' =>$idPlan3,
                                        'value' => 12887000,
                                        'goal' => 0,
                                        'evidence_balance' => 12887000,
                                        'age' => 1,
                                        ]);
                                        $idactivitySource16 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity71,
                                          'source_id' =>$idPlan10,
                                          'value' => 195255530,
                                          'goal' => 0,
                                          'evidence_balance' => 195255530,
                                          'age' => 1,
                                          ]);
                                          $idactivitySource18 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity71,
                                          'source_id' =>$idPlan3,
                                          'value' => 63034706,
                                          'goal' => 0,
                                          'evidence_balance' => 63034706,
                                          'age' => 1,
                                          ]);
                                          $idactivitySource19 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia7,
                                            'activity_source_id' =>$idactivitySource1,
                                            'value' => 1152148500,
                                            ]);
                                            $idevidenceFinancial1 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia16,
                                            'activity_source_id' =>$idactivitySource2,
                                            'value' => 277040000,
                                            ]);
                                            $idevidenceFinancial2 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia29,
                                            'activity_source_id' =>$idactivitySource3,
                                            'value' => 75710965,
                                            ]);
                                            $idevidenceFinancial3 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia33,
                                            'activity_source_id' =>$idactivitySource4,
                                            'value' => 192962888,
                                            ]);
                                            $idevidenceFinancial4 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia36,
                                            'activity_source_id' =>$idactivitySource5,
                                            'value' => 10000000,
                                            ]);
                                            $idevidenceFinancial5 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia50,
                                            'activity_source_id' =>$idactivitySource6,
                                            'value' => 261282000,
                                            ]);
                                            $idevidenceFinancial6 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia52,
                                            'activity_source_id' =>$idactivitySource7,
                                            'value' => 10000000,
                                            ]);
                                            $idevidenceFinancial7 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia58,
                                            'activity_source_id' =>$idactivitySource9,
                                            'value' => 10000000,
                                            ]);
                                            $idevidenceFinancial9 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia71,
                                            'activity_source_id' =>$idactivitySource10,
                                            'value' => 458566671,
                                            ]);
                                            $idevidenceFinancial10 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia78,
                                            'activity_source_id' =>$idactivitySource11,
                                            'value' => 2000000,
                                            ]);
                                            $idevidenceFinancial11 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia81,
                                            'activity_source_id' =>$idactivitySource12,
                                            'value' => 5500000,
                                            ]);
                                            $idevidenceFinancial12 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia83,
                                            'activity_source_id' =>$idactivitySource13,
                                            'value' => 10000000,
                                            ]);
                                            $idevidenceFinancial13 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia85,
                                            'activity_source_id' =>$idactivitySource14,
                                            'value' => 10000000,
                                            ]);
                                            $idevidenceFinancial14 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia87,
                                            'activity_source_id' =>$idactivitySource15,
                                            'value' => 5500000,
                                            ]);
                                            $idevidenceFinancial15 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia89,
                                            'activity_source_id' =>$idactivitySource16,
                                            'value' => 12887000,
                                            ]);
                                            $idevidenceFinancial16 = DB::getPdo()->lastInsertId();
                                            
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia71,
                                              'activity_source_id' =>$idactivitySource18,
                                              'value' => 195255530,
                                              ]);
                                              $idevidenceFinancial18 = DB::getPdo()->lastInsertId();
                                              
                                              
                                                DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia71,
                                              'activity_source_id' =>$idactivitySource19,
                                              'value' => 63034706,
                                              ]);
                                              $idevidenceFinancial19 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                              DB::table('activity_sources')->insert([
                                                'activity_id' => $idactivity16,
                                                'source_id' =>$idPlan29,
                                                'value' => 55509143,
                                                'goal' => 0,
                                                'evidence_balance' => 55509143,
                                                'age' => 2,
                                                ]);
                                                $idactivitySource21 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                
                                              DB::table('activity_sources')->insert([
                                                'activity_id' => $idactivity29,
                                                'source_id' =>$idPlan32,
                                                'value' => 642880000,
                                                'goal' => 0,
                                                'evidence_balance' => 642880000,
                                                'age' => 2,
                                                ]);
                                                $idactivitySource22 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                
                                              DB::table('activity_sources')->insert([
                                                'activity_id' => $idactivity33,
                                                'source_id' =>$idPlan32,
                                                'value' => 334466532,
                                                'goal' => 0,
                                                'evidence_balance' => 334466532,
                                                'age' => 2,
                                                ]);
                                                $idactivitySource23 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                
                                              DB::table('activity_sources')->insert([
                                                'activity_id' => $idactivity38,
                                                'source_id' =>$idPlan32,
                                                'value' => 11600000,
                                                'goal' => 0,
                                                'evidence_balance' => 11600000,
                                                'age' => 2,
                                                ]);
                                                $idactivitySource24 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                
                                              DB::table('activity_sources')->insert([
                                                'activity_id' => $idactivity50,
                                                'source_id' =>$idPlan32,
                                                'value' => 261282000,
                                                'goal' => 0,
                                                'evidence_balance' => 261282000,
                                                'age' => 2,
                                                ]);
                                                $idactivitySource25 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                
                                              DB::table('activity_sources')->insert([
                                                'activity_id' => $idactivity55,
                                                'source_id' =>$idPlan32,
                                                'value' => 1206239309,
                                                'goal' => 0,
                                                'evidence_balance' => 1206239309,
                                                'age' => 2,
                                                ]);
                                                $idactivitySource26 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                
                                              DB::table('activity_sources')->insert([
                                                'activity_id' => $idactivity64,
                                                'source_id' =>$idPlan32,
                                                'value' => 3088921600,
                                                'goal' => 0,
                                                'evidence_balance' => 3088921600,
                                                'age' => 2,
                                                ]);
                                                $idactivitySource27 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                
                                              DB::table('activity_sources')->insert([
                                                'activity_id' => $idactivity71,
                                                'source_id' =>$idPlan32,
                                                'value' => 5696131359,
                                                'goal' => 0,
                                                'evidence_balance' => 5696131359,
                                                'age' => 2,
                                                ]);
                                                $idactivitySource28 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity16,
                                                  'source_id' =>$idPlan32,
                                                  'value' => 2425785626,
                                                  'goal' => 0,
                                                  'evidence_balance' => 2425785626,
                                                  'age' => 2,
                                                  ]);
                                                  $idactivitySource30 = DB::getPdo()->lastInsertId();

                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity71,
                                                  'source_id' =>$idPlan15,
                                                  'value' => 150461567,
                                                  'goal' => 0,
                                                  'evidence_balance' => 150461567,
                                                  'age' => 2,
                                                  ]);
                                                  $idactivitySource31 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                                                                                                              
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity71,
                                                    'source_id' =>$idPlan18,
                                                    'value' => 82345162,
                                                    'goal' => 0,
                                                    'evidence_balance' => 82345162,
                                                    'age' => 2,
                                                    ]);
                                                    $idactivitySource32 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                      DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity71,
                                                    'source_id' =>$idPlan24,
                                                    'value' => 61440110,
                                                    'goal' => 0,
                                                    'evidence_balance' => 61440110,
                                                    'age' => 2,
                                                    ]);
                                                    $idactivitySource33 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                      DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity71,
                                                    'source_id' =>$idPlan22,
                                                    'value' => 17500029,
                                                    'goal' => 0,
                                                    'evidence_balance' => 17500029,
                                                    'age' => 2,
                                                    ]);
                                                    $idactivitySource34 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                      DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity71,
                                                    'source_id' =>$idPlan23,
                                                    'value' => 16245543,
                                                    'goal' => 0,
                                                    'evidence_balance' => 16245543,
                                                    'age' => 2,
                                                    ]);
                                                    $idactivitySource35 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                      DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity71,
                                                    'source_id' =>$idPlan14,
                                                    'value' => 43421000.85,
                                                    'goal' => 0,
                                                    'evidence_balance' => 43421000.85,
                                                    'age' => 2,
                                                    ]);
                                                    $idactivitySource36 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                      DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity71,
                                                    'source_id' =>$idPlan17,
                                                    'value' => 11197140,
                                                    'goal' => 0,
                                                    'evidence_balance' => 11197140,
                                                    'age' => 2,
                                                    ]);
                                                    $idactivitySource36 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                      DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity71,
                                                    'source_id' =>$idPlan28,
                                                    'value' => 17107540.8,
                                                    'goal' => 0,
                                                    'evidence_balance' => 17107540.8,
                                                    'age' => 2,
                                                    ]);
                                                    $idactivitySource38 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                      DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity71,
                                                    'source_id' =>$idPlan16,
                                                    'value' => 5773525,
                                                    'goal' => 0,
                                                    'evidence_balance' => 5773525,
                                                    'age' => 2,
                                                    ]);
                                                    $idactivitySource39 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                      DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity71,
                                                    'source_id' =>$idPlan25,
                                                    'value' => 7268751.9,
                                                    'goal' => 0,
                                                    'evidence_balance' => 7268751.9,
                                                    'age' => 2,
                                                    ]);
                                                    $idactivitySource40 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                      DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity71,
                                                    'source_id' =>$idPlan20,
                                                    'value' => 6648653,
                                                    'goal' => 0,
                                                    'evidence_balance' => 6648653,
                                                    'age' => 2,
                                                    ]);
                                                    $idactivitySource41 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                      DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity71,
                                                    'source_id' =>$idPlan21,
                                                    'value' => 2971009,
                                                    'goal' => 0,
                                                    'evidence_balance' => 2971009,
                                                    'age' => 2,
                                                    ]);
                                                    $idactivitySource42 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                      DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity71,
                                                    'source_id' =>$idPlan19,
                                                    'value' => 1049732,
                                                    'goal' => 0,
                                                    'evidence_balance' => 1049732,
                                                    'age' => 2,
                                                    ]);
                                                    $idactivitySource43 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                      DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity71,
                                                    'source_id' =>$idPlan26,
                                                    'value' => 3000000,
                                                    'goal' => 0,
                                                    'evidence_balance' => 3000000,
                                                    'age' => 2,
                                                    ]);
                                                    $idactivitySource44 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                      DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity71,
                                                    'source_id' =>$idPlan27,
                                                    'value' => 90000,
                                                    'goal' => 0,
                                                    'evidence_balance' => 90000,
                                                    'age' => 2,
                                                    ]);
                                                    $idactivitySource45 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                    DB::table('evidence_financial')->insert([
                                                      'evidence_id' => $idevidencia107,
                                                      'activity_source_id' =>$idactivitySource21,
                                                      'value' => 55509143,
                                                      ]);
                                                      $idevidenceFinancial21 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('evidence_financial')->insert([
                                                      'evidence_id' => $idevidencia120,
                                                      'activity_source_id' =>$idactivitySource22,
                                                      'value' => 642880000,
                                                      ]);
                                                      $idevidenceFinancial22 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('evidence_financial')->insert([
                                                      'evidence_id' => $idevidencia124,
                                                      'activity_source_id' =>$idactivitySource23,
                                                      'value' => 334466532,
                                                      ]);
                                                      $idevidenceFinancial23 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('evidence_financial')->insert([
                                                      'evidence_id' => $idevidencia129,
                                                      'activity_source_id' =>$idactivitySource24,
                                                      'value' => 11600000,
                                                      ]);
                                                      $idevidenceFinancial24 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('evidence_financial')->insert([
                                                      'evidence_id' => $idevidencia141,
                                                      'activity_source_id' =>$idactivitySource25,
                                                      'value' => 261282000,
                                                      ]);
                                                      $idevidenceFinancial25 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('evidence_financial')->insert([
                                                      'evidence_id' => $idevidencia146,
                                                      'activity_source_id' =>$idactivitySource26,
                                                      'value' => 1206239309,
                                                      ]);
                                                      $idevidenceFinancial26 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('evidence_financial')->insert([
                                                      'evidence_id' => $idevidencia155,
                                                      'activity_source_id' =>$idactivitySource27,
                                                      'value' => 3088921601,
                                                      ]);
                                                      $idevidenceFinancial27 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('evidence_financial')->insert([
                                                      'evidence_id' => $idevidencia162,
                                                      'activity_source_id' =>$idactivitySource28,
                                                      'value' => 5696131359,
                                                      ]);
                                                      $idevidenceFinancial28 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia107,
                                                        'activity_source_id' =>$idactivitySource30,
                                                        'value' => 2425785626,
                                                        ]);
                                                        $idevidenceFinancial30 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                        DB::table('evidence_financial')->insert([
                                                          'evidence_id' => $idevidencia162,
                                                          'activity_source_id' =>$idactivitySource31,
                                                          'value' => 150461567,
                                                          ]);
                                                          $idevidenceFinancial31 = DB::getPdo()->lastInsertId();
                                                          
                                                          
                                                            DB::table('evidence_financial')->insert([
                                                          'evidence_id' => $idevidencia162,
                                                          'activity_source_id' =>$idactivitySource32,
                                                          'value' => 82345162,
                                                          ]);
                                                          $idevidenceFinancial32 = DB::getPdo()->lastInsertId();
                                                          
                                                          
                                                            DB::table('evidence_financial')->insert([
                                                          'evidence_id' => $idevidencia162,
                                                          'activity_source_id' =>$idactivitySource33,
                                                          'value' => 61440110,
                                                          ]);
                                                          $idevidenceFinancial33 = DB::getPdo()->lastInsertId();
                                                          
                                                          
                                                            DB::table('evidence_financial')->insert([
                                                          'evidence_id' => $idevidencia162,
                                                          'activity_source_id' =>$idactivitySource34,
                                                          'value' => 17500029,
                                                          ]);
                                                          $idevidenceFinancial34 = DB::getPdo()->lastInsertId();
                                                          
                                                          
                                                            DB::table('evidence_financial')->insert([
                                                          'evidence_id' => $idevidencia162,
                                                          'activity_source_id' =>$idactivitySource35,
                                                          'value' => 16245543,
                                                          ]);
                                                          $idevidenceFinancial35 = DB::getPdo()->lastInsertId();
                                                          
                                                          
                                                            DB::table('evidence_financial')->insert([
                                                          'evidence_id' => $idevidencia162,
                                                          'activity_source_id' =>$idactivitySource36,
                                                          'value' => 43421000.85,
                                                          ]);
                                                          $idevidenceFinancial36 = DB::getPdo()->lastInsertId();
                                                          
                                                          
                                                            DB::table('evidence_financial')->insert([
                                                          'evidence_id' => $idevidencia162,
                                                          'activity_source_id' =>$idactivitySource36,
                                                          'value' => 11197140,
                                                          ]);
                                                          $idevidenceFinancial37 = DB::getPdo()->lastInsertId();
                                                          
                                                          
                                                            DB::table('evidence_financial')->insert([
                                                          'evidence_id' => $idevidencia162,
                                                          'activity_source_id' =>$idactivitySource38,
                                                          'value' => 17107540.8,
                                                          ]);
                                                          $idevidenceFinancial38 = DB::getPdo()->lastInsertId();
                                                          
                                                          
                                                            DB::table('evidence_financial')->insert([
                                                          'evidence_id' => $idevidencia162,
                                                          'activity_source_id' =>$idactivitySource39,
                                                          'value' => 5773525,
                                                          ]);
                                                          $idevidenceFinancial39 = DB::getPdo()->lastInsertId();
                                                          
                                                          
                                                            DB::table('evidence_financial')->insert([
                                                          'evidence_id' => $idevidencia162,
                                                          'activity_source_id' =>$idactivitySource40,
                                                          'value' => 7268751.9,
                                                          ]);
                                                          $idevidenceFinancial40 = DB::getPdo()->lastInsertId();
                                                          
                                                          
                                                            DB::table('evidence_financial')->insert([
                                                          'evidence_id' => $idevidencia162,
                                                          'activity_source_id' =>$idactivitySource41,
                                                          'value' => 6648653,
                                                          ]);
                                                          $idevidenceFinancial41 = DB::getPdo()->lastInsertId();
                                                          
                                                          
                                                            DB::table('evidence_financial')->insert([
                                                          'evidence_id' => $idevidencia162,
                                                          'activity_source_id' =>$idactivitySource42,
                                                          'value' => 2971009,
                                                          ]);
                                                          $idevidenceFinancial42 = DB::getPdo()->lastInsertId();
                                                          
                                                          
                                                            DB::table('evidence_financial')->insert([
                                                          'evidence_id' => $idevidencia162,
                                                          'activity_source_id' =>$idactivitySource43,
                                                          'value' => 1049732,
                                                          ]);
                                                          $idevidenceFinancial43 = DB::getPdo()->lastInsertId();
                                                          
                                                          
                                                            DB::table('evidence_financial')->insert([
                                                          'evidence_id' => $idevidencia162,
                                                          'activity_source_id' =>$idactivitySource44,
                                                          'value' => 3000000,
                                                          ]);
                                                          $idevidenceFinancial44 = DB::getPdo()->lastInsertId();
                                                          
                                                          
                                                            DB::table('evidence_financial')->insert([
                                                          'evidence_id' => $idevidencia162,
                                                          'activity_source_id' =>$idactivitySource45,
                                                          'value' => 1125731078.45,
                                                          ]);
                                                          $idevidenceFinancial45 = DB::getPdo()->lastInsertId();
                                                          
                                                                      DB::table('activity_sources')->insert([
                                                                        'activity_id' => $idactivity7,
                                                                        'source_id' =>$idPlan70,
                                                                        'value' => 2074461640,
                                                                        'goal' => 0,
                                                                        'evidence_balance' => 2074461640,
                                                                        'age' => 4,
                                                                        ]);
                                                                        $idactivitySource59 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('activity_sources')->insert([
                                                                        'activity_id' => $idactivity16,
                                                                        'source_id' =>$idPlan70,
                                                                        'value' => 1460716460,
                                                                        'goal' => 0,
                                                                        'evidence_balance' => 1460716460,
                                                                        'age' => 4,
                                                                        ]);
                                                                        $idactivitySource60 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('activity_sources')->insert([
                                                                        'activity_id' => $idactivity29,
                                                                        'source_id' =>$idPlan70,
                                                                        'value' => 982530000,
                                                                        'goal' => 0,
                                                                        'evidence_balance' => 982530000,
                                                                        'age' => 4,
                                                                        ]);
                                                                        $idactivitySource61 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('activity_sources')->insert([
                                                                        'activity_id' => $idactivity33,
                                                                        'source_id' =>$idPlan70,
                                                                        'value' => 105470000,
                                                                        'goal' => 0,
                                                                        'evidence_balance' => 105470000,
                                                                        'age' => 4,
                                                                        ]);
                                                                        $idactivitySource62 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('activity_sources')->insert([
                                                                        'activity_id' => $idactivity38,
                                                                        'source_id' =>$idPlan70,
                                                                        'value' => 10288000,
                                                                        'goal' => 0,
                                                                        'evidence_balance' => 10288000,
                                                                        'age' => 4,
                                                                        ]);
                                                                        $idactivitySource63 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('activity_sources')->insert([
                                                                        'activity_id' => $idactivity40,
                                                                        'source_id' =>$idPlan70,
                                                                        'value' => 538425540,
                                                                        'goal' => 0,
                                                                        'evidence_balance' => 538425540,
                                                                        'age' => 4,
                                                                        ]);
                                                                        $idactivitySource64 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                        DB::table('activity_sources')->insert([
                                                                          'activity_id' => $idactivity40,
                                                                          'source_id' =>$idPlan61,
                                                                          'value' => 96707802,
                                                                          'goal' => 0,
                                                                          'evidence_balance' => 96707802,
                                                                          'age' => 4,
                                                                          ]);
                                                                          $idactivitySource65 = DB::getPdo()->lastInsertId();
                                                                          
                                                                          
                                                                            DB::table('activity_sources')->insert([
                                                                          'activity_id' => $idactivity40,
                                                                          'source_id' =>$idPlan62,
                                                                          'value' => 308569145,
                                                                          'goal' => 0,
                                                                          'evidence_balance' => 308569145,
                                                                          'age' => 4,
                                                                          ]);
                                                                          $idactivitySource66 = DB::getPdo()->lastInsertId();
                                                                          
                                                                          
                                                                            DB::table('activity_sources')->insert([
                                                                          'activity_id' => $idactivity40,
                                                                          'source_id' =>$idPlan63,
                                                                          'value' => 53567313,
                                                                          'goal' => 0,
                                                                          'evidence_balance' => 53567313,
                                                                          'age' => 4,
                                                                          ]);
                                                                          $idactivitySource67 = DB::getPdo()->lastInsertId();
                                                                          
                                                                          
                                                                            DB::table('activity_sources')->insert([
                                                                          'activity_id' => $idactivity40,
                                                                          'source_id' =>$idPlan64,
                                                                          'value' => 4155000,
                                                                          'goal' => 0,
                                                                          'evidence_balance' => 4155000,
                                                                          'age' => 4,
                                                                          ]);
                                                                          $idactivitySource68 = DB::getPdo()->lastInsertId();
                                                                          
                                                                          
                                                                            DB::table('activity_sources')->insert([
                                                                          'activity_id' => $idactivity40,
                                                                          'source_id' =>$idPlan65,
                                                                          'value' => 42689427.8005,
                                                                          'goal' => 0,
                                                                          'evidence_balance' => 42689427.8005,
                                                                          'age' => 4,
                                                                          ]);
                                                                          $idactivitySource69 = DB::getPdo()->lastInsertId();
                                                                          
                                                                          
                                                                            DB::table('activity_sources')->insert([
                                                                          'activity_id' => $idactivity40,
                                                                          'source_id' =>$idPlan66,
                                                                          'value' => 2077000,
                                                                          'goal' => 0,
                                                                          'evidence_balance' => 2077000,
                                                                          'age' => 4,
                                                                          ]);
                                                                          $idactivitySource70 = DB::getPdo()->lastInsertId();
                                                                          
                                                                          
                                                                            DB::table('activity_sources')->insert([
                                                                          'activity_id' => $idactivity40,
                                                                          'source_id' =>$idPlan68,
                                                                          'value' => 118419994.55,
                                                                          'goal' => 0,
                                                                          'evidence_balance' => 118419994.55,
                                                                          'age' => 4,
                                                                          ]);
                                                                          $idactivitySource71 = DB::getPdo()->lastInsertId();
                                                                          
                                                                          
                                                                          
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia280,
                                                                            'activity_source_id' =>$idactivitySource59,
                                                                            'value' => 2074461640,
                                                                            ]);
                                                                            $idevidenceFinancial59 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia289,
                                                                            'activity_source_id' =>$idactivitySource60,
                                                                            'value' => 1460716460,
                                                                            ]);
                                                                            $idevidenceFinancial60 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia302,
                                                                            'activity_source_id' =>$idactivitySource61,
                                                                            'value' => 982530000,
                                                                            ]);
                                                                            $idevidenceFinancial61 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia306,
                                                                            'activity_source_id' =>$idactivitySource62,
                                                                            'value' => 105470000,
                                                                            ]);
                                                                            $idevidenceFinancial62 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia311,
                                                                            'activity_source_id' =>$idactivitySource63,
                                                                            'value' => 10288000,
                                                                            ]);
                                                                            $idevidenceFinancial63 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia313,
                                                                            'activity_source_id' =>$idactivitySource64,
                                                                            'value' => 538425540,
                                                                            ]);
                                                                            $idevidenceFinancial64 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                            DB::table('evidence_financial')->insert([
                                                                              'evidence_id' => $idevidencia313,
                                                                              'activity_source_id' =>$idactivitySource65,
                                                                              'value' => 96707802,
                                                                              ]);
                                                                              $idevidenceFinancial65 = DB::getPdo()->lastInsertId();
                                                                              
                                                                              
                                                                                DB::table('evidence_financial')->insert([
                                                                              'evidence_id' => $idevidencia313,
                                                                              'activity_source_id' =>$idactivitySource66,
                                                                              'value' => 308569145,
                                                                              ]);
                                                                              $idevidenceFinancial66 = DB::getPdo()->lastInsertId();
                                                                              
                                                                              
                                                                                DB::table('evidence_financial')->insert([
                                                                              'evidence_id' => $idevidencia313,
                                                                              'activity_source_id' =>$idactivitySource67,
                                                                              'value' => 53567313,
                                                                              ]);
                                                                              $idevidenceFinancial67 = DB::getPdo()->lastInsertId();
                                                                              
                                                                              
                                                                                DB::table('evidence_financial')->insert([
                                                                              'evidence_id' => $idevidencia313,
                                                                              'activity_source_id' =>$idactivitySource68,
                                                                              'value' => 4155000,
                                                                              ]);
                                                                              $idevidenceFinancial68 = DB::getPdo()->lastInsertId();
                                                                              
                                                                              
                                                                                DB::table('evidence_financial')->insert([
                                                                              'evidence_id' => $idevidencia313,
                                                                              'activity_source_id' =>$idactivitySource69,
                                                                              'value' => 42689427.8005,
                                                                              ]);
                                                                              $idevidenceFinancial69 = DB::getPdo()->lastInsertId();
                                                                              
                                                                              
                                                                                DB::table('evidence_financial')->insert([
                                                                              'evidence_id' => $idevidencia313,
                                                                              'activity_source_id' =>$idactivitySource70,
                                                                              'value' => 2077000,
                                                                              ]);
                                                                              $idevidenceFinancial70 = DB::getPdo()->lastInsertId();
                                                                              
                                                                              
                                                                                DB::table('evidence_financial')->insert([
                                                                              'evidence_id' => $idevidencia313,
                                                                              'activity_source_id' =>$idactivitySource71,
                                                                              'value' => 10883720988.1995,
                                                                              ]);
                                                                              $idevidenceFinancial71 = DB::getPdo()->lastInsertId();
                                                                              
                                                                              
                  }
}