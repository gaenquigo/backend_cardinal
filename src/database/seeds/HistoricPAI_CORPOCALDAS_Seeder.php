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
 * Class HistoricPAI_CORPOCALDAS_Seeder
 */
class HistoricPAI_CORPOCALDAS_Seeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $pai=PAI::create([
      'name' => 'Plan de Acción Institucional 2016-2019 “Trabajamos por un territorio habitable y sostenible”',
      'start_date' => '2016-01-01',
      'end_date' => '2019-12-31',
      'director_name' => 'Juan David Arango Gartner',
      'group_id' => 18,
      'approved' => 1,
      ]);
      $idpai1 = DB::getPdo()->lastInsertId();
      

      DB::table('strategic_lines')->insert([
        'name' => ' Linea ',
        'weighing' => 100,
        'p_a_i_id' => $idpai1,
        ]);
        $idline1 = DB::getPdo()->lastInsertId();
      

        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA I CONSERVACIÓN Y USO DE LA BIODIVERSIDAD',
          'weighing' => 12,
          ]);
          $idprogram1 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA II    GESTION AMBIENTAL SECTORIAL',
          'weighing' => 12,
          ]);
          $idprogram2 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA III   GESTIÓN PARA LA ADAPTACIÓN Y MITIGACIÓN AL CAMBIO CLIMÁTICO ',
          'weighing' => 12,
          ]);
          $idprogram3 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA IV  GESTIÓN INTEGRAL DEL PATRIMONIO HÍDRICO',
          'weighing' => 12,
          ]);
          $idprogram4 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA V: GESTIÓN DEL RIESGO ANTE LA PÉRDIDA DE SERVICIOS ECOSISTÉMICOS Y EL ESTABLECIMIENTO DE TERRITORIOS SEGUROS',
          'weighing' => 13,
          ]);
          $idprogram5 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA VI GESTIÓN AMBIENTAL DIFERENCIAL CON LAS COMUNIDADES INDÍGENAS Y AFRODESCENDIENTES DE CALDAS',
          'weighing' => 13,
          ]);
          $idprogram6 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA VII: CULTURA Y GOBERNANZA PARA LA GESTIÓN AMBIENTAL',
          'weighing' => 13,
          ]);
          $idprogram7 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA VIII: FORTALECIMIENTO INSTITUCIONAL ',
          'weighing' => 13,
          ]);
          $idprogram8 = DB::getPdo()->lastInsertId();

          DB::table('programs')->insert([
            'strategic_line_id' => $idline1,
            'national_program_id' => 791,
            'car_program' => 'PROGRAMA IX AGENDA DE GESTION INTEGRAL DEL RIESGO Y ADAPTACION A LA VARIABILIDAD CLIMATICA EN EL MUNICIPIO DE MANIZALES',
            'weighing' => 12,
            ]);
            $idprogram9 = DB::getPdo()->lastInsertId();
            

          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => 'PROYECTO 1:   PLANIFICACION DE LA BIODIVERSIDAD  Y SUS SERVICIOS ECOSISTEMICOS',
            'weighing' => 33,
            ]);
            $idproject1 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => 'PROYECTO 2: ACCIONES ESTRUCTURALES Y NO ESTRUCTURALES PARA LA CONSERVACION DE LA BIODIVERSIDAD  Y SUS SERVICIOS ECOSISTÉMICOS ',
            'weighing' => 33,
            ]);
            $idproject2 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => 'PROYECTO 3 USO SOSTENIBLE DE LA BIODIVERSIDAD',
            'weighing' => 34,
            ]);
            $idproject3 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => 'PROYECTO 4:   PREVENCION Y CONTROL DE LA CONTAMINACION DEL AIRE ',
            'weighing' => 33,
            ]);
            $idproject4 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => 'PROYECTO 5:  PRODUCCIÓN MÁS LIMPIA Y BUENAS PRÁCTICAS AMBIENTALES ',
            'weighing' => 33,
            ]);
            $idproject5 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => 'PROYECTO 6: ECODESARROLLO URBANO E INDUSTRIAL',
            'weighing' => 34,
            ]);
            $idproject6 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram3,
            'project' => 'PROYECTO 7: MONITOREO Y FORMULACION DE ACCIONES DIRECTAS DE ADAPTACION Y MITIGACION AL CAMBIO CLIMATICO',
            'weighing' => 50,
            ]);
            $idproject7 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram3,
            'project' => 'PROYECTO 8: CONOCIMIENTO DE LA VULNERABILIDAD DEL TERRITORIO FRENTE A LA  VARIABILIDAD Y EL CAMBIO CLIMATICO',
            'weighing' => 50,
            ]);
            $idproject8 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram4,
            'project' => 'PROYECTO 9: PREVENCIÓN Y CONTROL DE LA CONTAMINACIÓN HÍDRICA',
            'weighing' => 50,
            ]);
            $idproject9 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram4,
            'project' => 'PROYECTO 10: PLANIFICACIÓN Y ADMINISTRACIÓN DEL PATRIMONIO HÍDRICO ',
            'weighing' => 50,
            ]);
            $idproject10 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram5,
            'project' => 'PROYECTO 11: IMPLEMENTACION DE ACCIONES DIRECTAS PARA LA GESTION DEL RIESGO ',
            'weighing' => 50,
            ]);
            $idproject11 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram5,
            'project' => 'PROYECTO 12: ASISTENCIA TECNICA PARA LA GESTION DEL RIESGO',
            'weighing' => 50,
            ]);
            $idproject12 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram6,
            'project' => 'PROYECTO 13: ESCENARIOS PARA LA PLANIFICACIÓN Y LA GESTIÓN AMBIENTAL CONJUNTA CON LAS COMUNIDADES ETNICAS DEL DEPARTAMENTO',
            'weighing' => 50,
            ]);
            $idproject13 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram6,
            'project' => 'PROYECTO 14: ACCIONES PARA LA CONSERVACIÓN Y MANEJO DE LOS RECURSOS NATURALES EN LAS COMUNIDADES ÉTNICAS DE CALDAS ',
            'weighing' => 50,
            ]);
            $idproject14 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram7,
            'project' => 'PROYECTO 15: EDUCACIÓN PARA LA PROTECCIÓN, CONSERVACIÓN Y USO SOSTENIBLE DEL PATRIMONIO AMBIENTAL',
            'weighing' => 33,
            ]);
            $idproject15 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram7,
            'project' => 'PROYECTO 16:  PARTICIPACIÓN PARA LA GOBERNANZA AMBIENTAL',
            'weighing' => 33,
            ]);
            $idproject16 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram7,
            'project' => 'PROYECTO 17 COMUNICACIÓN PÚBLICA PARA LA GESTIÓN AMBIENTAL',
            'weighing' => 34,
            ]);
            $idproject17 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram8,
            'project' => 'PROYECTO 18:  CONOCIMIENTO PARA LA GESTIÓN AMBIENTAL',
            'weighing' => 20,
            ]);
            $idproject18 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram8,
            'project' => 'PROYECTO 19:  FORTALECIMIENTO DE LAS TIC  Y EL  SISTEMA DE INFORMACIÓN AMBIENTAL',
            'weighing' => 20,
            ]);
            $idproject19 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram8,
            'project' => 'PROYECTO 20:   MODERNIZACIÓN INSTITUCIONAL ',
            'weighing' => 20,
            ]);
            $idproject20 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram8,
            'project' => 'PROYECTO 21:  FORTALECIMIENTO DE LA GESTIÓN COMO AUTORIDAD AMBIENTAL ',
            'weighing' => 20,
            ]);
            $idproject21 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram8,
            'project' => 'PROYECTO 22:  INSTRUMENTOS DE PLANIFICACIÓN AMBIENTAL',
            'weighing' => 20,
            ]);
            $idproject22 = DB::getPdo()->lastInsertId();
            
            DB::table('projects')->insert([
              'program_id' => $idprogram9,
              'project' => 'PROYECTO 23 CONOCIMIENTO DEL RIESGO Y VARIABILIDAD CLIMATICA',
              'weighing' => 33,
              ]);
              $idproject23 = DB::getPdo()->lastInsertId();
              
            DB::table('projects')->insert([
              'program_id' => $idprogram9,
              'project' => 'PROYECTO 24 INCORPORACIÓN DEL RIESGO Y ADAPTACIÓN  A LA VARIABILIDAD CLIMÁTICA EN LA PLANIFICACIÓN TERRITORIAL',
              'weighing' => 33,
              ]);
              $idproject24 = DB::getPdo()->lastInsertId();
              
            DB::table('projects')->insert([
              'program_id' => $idprogram9,
              'project' => 'PROYECTO 25 REDUCCÍON DEL RIESGO Y ADAPTACIÓN A LA VARIABILIDAD CLIMÁTICA CON ACCIONES ESTRUCTURALES',
              'weighing' => 34,
              ]);
              $idproject25 = DB::getPdo()->lastInsertId();
            
            
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
                
              DB::table('objectives')->insert([
                'project_id' => $idproject25,
                'objective' => 'Objetivo 25',
                'weighing' => 100,
                ]);
                $idobjective25 = DB::getPdo()->lastInsertId();
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => 1,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 11,
                ]);
                $idobjectiveproduct1 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => 2,
                'product_other' => 'Producto 2',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 2,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 2,
                'total_goal' => 5,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 11,
                ]);
                $idobjectiveproduct2 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => 3,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 11,
                ]);
                $idobjectiveproduct3 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => 4,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 11,
                ]);
                $idobjectiveproduct4 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => 5,
                'product_other' => 'Producto 5',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 0,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 0,
                'total_goal' => 3,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 11,
                ]);
                $idobjectiveproduct5 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => 6,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 11,
                ]);
                $idobjectiveproduct6 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => 7,
                'product_other' => 'Producto 7',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 0,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 0,
                'total_goal' => 3,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 11,
                ]);
                $idobjectiveproduct7 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => 8,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 11,
                ]);
                $idobjectiveproduct8 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => 9,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 11,
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
                'weighing' => 1,
                ]);
                $idobjectiveproduct10 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => 11,
                'product_other' => 'Producto 1',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 4,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 4,
                'total_goal' => 4,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 7,
                ]);
                $idobjectiveproduct11 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => 12,
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
                'weighing' => 7,
                ]);
                $idobjectiveproduct12 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => 13,
                'product_other' => 'Producto 3',
                'goal_1' => 1500,
                'goal_2' => 2500,
                'goal_3' => 2500,
                'goal_4' => 1135,
                'goal_1_balance' => 1500,
                'goal_2_balance' => 2500,
                'goal_3_balance' => 2500,
                'goal_4_balance' => 1135,
                'total_goal' => 7635,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 7,
                ]);
                $idobjectiveproduct13 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => 14,
                'product_other' => 'Producto 4',
                'goal_1' => 40,
                'goal_2' => 287,
                'goal_3' => 287,
                'goal_4' => 25,
                'goal_1_balance' => 40,
                'goal_2_balance' => 287,
                'goal_3_balance' => 287,
                'goal_4_balance' => 25,
                'total_goal' => 639,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 6,
                ]);
                $idobjectiveproduct14 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => 15,
                'product_other' => 'Producto 5',
                'goal_1' => 2,
                'goal_2' => 2,
                'goal_3' => 2,
                'goal_4' => 3,
                'goal_1_balance' => 2,
                'goal_2_balance' => 2,
                'goal_3_balance' => 2,
                'goal_4_balance' => 3,
                'total_goal' => 9,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 6,
                ]);
                $idobjectiveproduct15 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => 16,
                'product_other' => 'Producto 6',
                'goal_1' => 5,
                'goal_2' => 5,
                'goal_3' => 5,
                'goal_4' => 25,
                'goal_1_balance' => 5,
                'goal_2_balance' => 5,
                'goal_3_balance' => 5,
                'goal_4_balance' => 25,
                'total_goal' => 40,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 6,
                ]);
                $idobjectiveproduct16 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => 17,
                'product_other' => 'Producto 7',
                'goal_1' => 6,
                'goal_2' => 9,
                'goal_3' => 9,
                'goal_4' => 6,
                'goal_1_balance' => 6,
                'goal_2_balance' => 9,
                'goal_3_balance' => 9,
                'goal_4_balance' => 6,
                'total_goal' => 30,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 6,
                ]);
                $idobjectiveproduct17 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => 18,
                'product_other' => 'Producto 8',
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
                'weighing' => 6,
                ]);
                $idobjectiveproduct18 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => 19,
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
                'weighing' => 6,
                ]);
                $idobjectiveproduct19 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => 20,
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
                'weighing' => 6,
                ]);
                $idobjectiveproduct20 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => 21,
                'product_other' => 'Producto 11',
                'goal_1' => 53,
                'goal_2' => 283,
                'goal_3' => 283,
                'goal_4' => 86,
                'goal_1_balance' => 53,
                'goal_2_balance' => 283,
                'goal_3_balance' => 283,
                'goal_4_balance' => 86,
                'total_goal' => 705,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 6,
                ]);
                $idobjectiveproduct21 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => 22,
                'product_other' => 'Producto 12',
                'goal_1' => 30,
                'goal_2' => 490,
                'goal_3' => 490,
                'goal_4' => 163,
                'goal_1_balance' => 30,
                'goal_2_balance' => 490,
                'goal_3_balance' => 490,
                'goal_4_balance' => 163,
                'total_goal' => 1173,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 6,
                ]);
                $idobjectiveproduct22 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => 23,
                'product_other' => 'Producto 13',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 0,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 0,
                'total_goal' => 3,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 6,
                ]);
                $idobjectiveproduct23 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => 24,
                'product_other' => 'Producto 14',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 2,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 2,
                'total_goal' => 5,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 6,
                ]);
                $idobjectiveproduct24 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => 25,
                'product_other' => 'Producto 15',
                'goal_1' => 100,
                'goal_2' => 100,
                'goal_3' => 100,
                'goal_4' => 0,
                'goal_1_balance' => 100,
                'goal_2_balance' => 100,
                'goal_3_balance' => 100,
                'goal_4_balance' => 0,
                'total_goal' => 300,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 6,
                ]);
                $idobjectiveproduct25 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => 26,
                'product_other' => 'Producto 16',
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
                'weighing' => 6,
                ]);
                $idobjectiveproduct26 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => 27,
                'product_other' => 'Producto 17',
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
                $idobjectiveproduct27 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => 28,
                'product_other' => 'Producto 1',
                'goal_1' => 5,
                'goal_2' => 13,
                'goal_3' => 13,
                'goal_4' => 5,
                'goal_1_balance' => 5,
                'goal_2_balance' => 13,
                'goal_3_balance' => 13,
                'goal_4_balance' => 5,
                'total_goal' => 36,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 25,
                ]);
                $idobjectiveproduct28 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => 29,
                'product_other' => 'Producto 2',
                'goal_1' => 1,
                'goal_2' => 2,
                'goal_3' => 2,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 2,
                'goal_3_balance' => 2,
                'goal_4_balance' => 1,
                'total_goal' => 6,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 25,
                ]);
                $idobjectiveproduct29 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => 30,
                'product_other' => 'Producto 3',
                'goal_1' => 2,
                'goal_2' => 2,
                'goal_3' => 2,
                'goal_4' => 4,
                'goal_1_balance' => 2,
                'goal_2_balance' => 2,
                'goal_3_balance' => 2,
                'goal_4_balance' => 4,
                'total_goal' => 10,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 25,
                ]);
                $idobjectiveproduct30 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => 31,
                'product_other' => 'Producto 4',
                'goal_1' => 5,
                'goal_2' => 5,
                'goal_3' => 5,
                'goal_4' => 55,
                'goal_1_balance' => 5,
                'goal_2_balance' => 5,
                'goal_3_balance' => 5,
                'goal_4_balance' => 55,
                'total_goal' => 70,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 24,
                ]);
                $idobjectiveproduct31 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => 32,
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
                $idobjectiveproduct32 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective4,
                'product_id' => 33,
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
                'weighing' => 50,
                ]);
                $idobjectiveproduct33 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective4,
                'product_id' => 34,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 49,
                ]);
                $idobjectiveproduct34 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective4,
                'product_id' => 35,
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
                'weighing' => 1,
                ]);
                $idobjectiveproduct35 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => 36,
                'product_other' => 'Producto 1',
                'goal_1' => 3,
                'goal_2' => 3,
                'goal_3' => 3,
                'goal_4' => 4,
                'goal_1_balance' => 3,
                'goal_2_balance' => 3,
                'goal_3_balance' => 3,
                'goal_4_balance' => 4,
                'total_goal' => 13,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct36 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => 37,
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
                'weighing' => 33,
                ]);
                $idobjectiveproduct37 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => 38,
                'product_other' => 'Producto 3',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 2,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 2,
                'total_goal' => 2,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct38 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => 39,
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
                'weighing' => 1,
                ]);
                $idobjectiveproduct39 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective6,
                'product_id' => 40,
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
                'weighing' => 50,
                ]);
                $idobjectiveproduct40 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective6,
                'product_id' => 41,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 49,
                ]);
                $idobjectiveproduct41 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective6,
                'product_id' => 42,
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
                'weighing' => 1,
                ]);
                $idobjectiveproduct42 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
                'product_id' => 43,
                'product_other' => 'Producto 1',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 14,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 14,
                'total_goal' => 17,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct43 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
                'product_id' => 44,
                'product_other' => 'Producto 2',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 5,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 5,
                'total_goal' => 8,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct44 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
                'product_id' => 45,
                'product_other' => 'Producto 3',
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
                'weighing' => 33,
                ]);
                $idobjectiveproduct45 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
                'product_id' => 46,
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
                'weighing' => 1,
                ]);
                $idobjectiveproduct46 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
                'product_id' => 47,
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
                'weighing' => 50,
                ]);
                $idobjectiveproduct47 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
                'product_id' => 48,
                'product_other' => 'Producto 2',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 0,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 0,
                'total_goal' => 3,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 49,
                ]);
                $idobjectiveproduct48 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
                'product_id' => 49,
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
                'weighing' => 1,
                ]);
                $idobjectiveproduct49 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => 50,
                'product_other' => 'Producto 1',
                'goal_1' => 194,
                'goal_2' => 194,
                'goal_3' => 194,
                'goal_4' => 244,
                'goal_1_balance' => 194,
                'goal_2_balance' => 194,
                'goal_3_balance' => 194,
                'goal_4_balance' => 244,
                'total_goal' => 826,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct50 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => 51,
                'product_other' => 'Producto 2',
                'goal_1' => 100,
                'goal_2' => 100,
                'goal_3' => 100,
                'goal_4' => 104,
                'goal_1_balance' => 100,
                'goal_2_balance' => 100,
                'goal_3_balance' => 100,
                'goal_4_balance' => 104,
                'total_goal' => 404,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct51 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => 52,
                'product_other' => 'Producto 3',
                'goal_1' => 691,
                'goal_2' => 691,
                'goal_3' => 691,
                'goal_4' => 590,
                'goal_1_balance' => 691,
                'goal_2_balance' => 691,
                'goal_3_balance' => 691,
                'goal_4_balance' => 590,
                'total_goal' => 2663,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct52 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => 53,
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
                'weighing' => 1,
                ]);
                $idobjectiveproduct53 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective10,
                'product_id' => 54,
                'product_other' => 'Producto 1',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 1000,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 1000,
                'total_goal' => 1000,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 20,
                ]);
                $idobjectiveproduct54 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective10,
                'product_id' => 55,
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
                'weighing' => 20,
                ]);
                $idobjectiveproduct55 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective10,
                'product_id' => 56,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 20,
                ]);
                $idobjectiveproduct56 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective10,
                'product_id' => 57,
                'product_other' => 'Producto 4',
                'goal_1' => 5,
                'goal_2' => 5,
                'goal_3' => 0,
                'goal_4' => 5,
                'goal_1_balance' => 5,
                'goal_2_balance' => 5,
                'goal_3_balance' => 0,
                'goal_4_balance' => 5,
                'total_goal' => 15,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 20,
                ]);
                $idobjectiveproduct57 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective10,
                'product_id' => 58,
                'product_other' => 'Producto 5',
                'goal_1' => 0,
                'goal_2' => 1,
                'goal_3' => 5,
                'goal_4' => 0,
                'goal_1_balance' => 0,
                'goal_2_balance' => 1,
                'goal_3_balance' => 5,
                'goal_4_balance' => 0,
                'total_goal' => 6,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 19,
                ]);
                $idobjectiveproduct58 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective10,
                'product_id' => 59,
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
                $idobjectiveproduct59 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective11,
                'product_id' => 60,
                'product_other' => 'Producto 1',
                'goal_1' => 19999,
                'goal_2' => 19999,
                'goal_3' => 19999,
                'goal_4' => 14355,
                'goal_1_balance' => 19999,
                'goal_2_balance' => 19999,
                'goal_3_balance' => 19999,
                'goal_4_balance' => 14355,
                'total_goal' => 74352,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 50,
                ]);
                $idobjectiveproduct60 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective11,
                'product_id' => 61,
                'product_other' => 'Producto 2',
                'goal_1' => 5,
                'goal_2' => 5,
                'goal_3' => 5,
                'goal_4' => 11,
                'goal_1_balance' => 5,
                'goal_2_balance' => 5,
                'goal_3_balance' => 5,
                'goal_4_balance' => 11,
                'total_goal' => 26,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 49,
                ]);
                $idobjectiveproduct61 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective11,
                'product_id' => 62,
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
                'weighing' => 1,
                ]);
                $idobjectiveproduct62 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
                'product_id' => 63,
                'product_other' => 'Producto 1',
                'goal_1' => 7,
                'goal_2' => 7,
                'goal_3' => 7,
                'goal_4' => 9,
                'goal_1_balance' => 7,
                'goal_2_balance' => 7,
                'goal_3_balance' => 7,
                'goal_4_balance' => 9,
                'total_goal' => 30,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 25,
                ]);
                $idobjectiveproduct63 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
                'product_id' => 64,
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
                'weighing' => 25,
                ]);
                $idobjectiveproduct64 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
                'product_id' => 65,
                'product_other' => 'Producto 3',
                'goal_1' => 6,
                'goal_2' => 6,
                'goal_3' => 6,
                'goal_4' => 0,
                'goal_1_balance' => 6,
                'goal_2_balance' => 6,
                'goal_3_balance' => 6,
                'goal_4_balance' => 0,
                'total_goal' => 18,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 25,
                ]);
                $idobjectiveproduct65 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
                'product_id' => 66,
                'product_other' => 'Producto 4',
                'goal_1' => 2,
                'goal_2' => 2,
                'goal_3' => 2,
                'goal_4' => 8,
                'goal_1_balance' => 2,
                'goal_2_balance' => 2,
                'goal_3_balance' => 2,
                'goal_4_balance' => 8,
                'total_goal' => 14,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 24,
                ]);
                $idobjectiveproduct66 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
                'product_id' => 67,
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
                $idobjectiveproduct67 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective13,
                'product_id' => 68,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct68 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective13,
                'product_id' => 69,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct69 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective13,
                'product_id' => 70,
                'product_other' => 'Producto 3',
                'goal_1' => 6,
                'goal_2' => 6,
                'goal_3' => 6,
                'goal_4' => 6,
                'goal_1_balance' => 6,
                'goal_2_balance' => 6,
                'goal_3_balance' => 6,
                'goal_4_balance' => 6,
                'total_goal' => 24,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct70 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective13,
                'product_id' => 71,
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
                'weighing' => 1,
                ]);
                $idobjectiveproduct71 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => 72,
                'product_other' => 'Producto 1',
                'goal_1' => 10,
                'goal_2' => 10,
                'goal_3' => 10,
                'goal_4' => 20,
                'goal_1_balance' => 10,
                'goal_2_balance' => 10,
                'goal_3_balance' => 10,
                'goal_4_balance' => 20,
                'total_goal' => 50,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 5,
                ]);
                $idobjectiveproduct72 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => 73,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 5,
                ]);
                $idobjectiveproduct73 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => 74,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 5,
                ]);
                $idobjectiveproduct74 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => 75,
                'product_other' => 'Producto 4',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 3,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 3,
                'total_goal' => 6,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 5,
                ]);
                $idobjectiveproduct75 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => 76,
                'product_other' => 'Producto 5',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 4,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 4,
                'total_goal' => 7,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 5,
                ]);
                $idobjectiveproduct76 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => 77,
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
                'weighing' => 5,
                ]);
                $idobjectiveproduct77 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => 78,
                'product_other' => 'Producto 7',
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
                'weighing' => 5,
                ]);
                $idobjectiveproduct78 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => 79,
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
                'weighing' => 5,
                ]);
                $idobjectiveproduct79 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => 80,
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
                'weighing' => 5,
                ]);
                $idobjectiveproduct80 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => 81,
                'product_other' => 'Producto 10',
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
                'weighing' => 6,
                ]);
                $idobjectiveproduct81 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => 82,
                'product_other' => 'Producto 11',
                'goal_1' => 2,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 2,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 2,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 6,
                ]);
                $idobjectiveproduct82 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => 83,
                'product_other' => 'Producto 12',
                'goal_1' => 300,
                'goal_2' => 300,
                'goal_3' => 300,
                'goal_4' => 400,
                'goal_1_balance' => 300,
                'goal_2_balance' => 300,
                'goal_3_balance' => 300,
                'goal_4_balance' => 400,
                'total_goal' => 1300,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 6,
                ]);
                $idobjectiveproduct83 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => 84,
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
                'weighing' => 6,
                ]);
                $idobjectiveproduct84 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => 85,
                'product_other' => 'Producto 14',
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
                'weighing' => 6,
                ]);
                $idobjectiveproduct85 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => 86,
                'product_other' => 'Producto 15',
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
                'weighing' => 6,
                ]);
                $idobjectiveproduct86 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => 87,
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
                'weighing' => 6,
                ]);
                $idobjectiveproduct87 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => 88,
                'product_other' => 'Producto 17',
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
                'weighing' => 6,
                ]);
                $idobjectiveproduct88 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => 89,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 6,
                ]);
                $idobjectiveproduct89 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => 90,
                'product_other' => 'Producto 19',
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
                $idobjectiveproduct90 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective15,
                'product_id' => 91,
                'product_other' => 'Producto 1',
                'goal_1' => 28,
                'goal_2' => 28,
                'goal_3' => 28,
                'goal_4' => 28,
                'goal_1_balance' => 28,
                'goal_2_balance' => 28,
                'goal_3_balance' => 28,
                'goal_4_balance' => 28,
                'total_goal' => 112,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 5,
                ]);
                $idobjectiveproduct91 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective15,
                'product_id' => 92,
                'product_other' => 'Producto 2',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 6,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 6,
                'total_goal' => 6,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 5,
                ]);
                $idobjectiveproduct92 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective15,
                'product_id' => 93,
                'product_other' => 'Producto 3',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 2,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 2,
                'total_goal' => 2,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 5,
                ]);
                $idobjectiveproduct93 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective15,
                'product_id' => 94,
                'product_other' => 'Producto 4',
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
                'weighing' => 6,
                ]);
                $idobjectiveproduct94 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective15,
                'product_id' => 95,
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
                'weighing' => 6,
                ]);
                $idobjectiveproduct95 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective15,
                'product_id' => 96,
                'product_other' => 'Producto 6',
                'goal_1' => 30,
                'goal_2' => 30,
                'goal_3' => 30,
                'goal_4' => 80,
                'goal_1_balance' => 30,
                'goal_2_balance' => 30,
                'goal_3_balance' => 30,
                'goal_4_balance' => 80,
                'total_goal' => 170,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 6,
                ]);
                $idobjectiveproduct96 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective15,
                'product_id' => 97,
                'product_other' => 'Producto 7',
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
                'weighing' => 6,
                ]);
                $idobjectiveproduct97 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective15,
                'product_id' => 98,
                'product_other' => 'Producto 8',
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
                'weighing' => 6,
                ]);
                $idobjectiveproduct98 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective15,
                'product_id' => 99,
                'product_other' => 'Producto 9',
                'goal_1' => 5,
                'goal_2' => 4,
                'goal_3' => 4,
                'goal_4' => 5,
                'goal_1_balance' => 5,
                'goal_2_balance' => 4,
                'goal_3_balance' => 4,
                'goal_4_balance' => 5,
                'total_goal' => 18,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 6,
                ]);
                $idobjectiveproduct99 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective15,
                'product_id' => 100,
                'product_other' => 'Producto 10',
                'goal_1' => 5,
                'goal_2' => 5,
                'goal_3' => 5,
                'goal_4' => 10,
                'goal_1_balance' => 5,
                'goal_2_balance' => 5,
                'goal_3_balance' => 5,
                'goal_4_balance' => 10,
                'total_goal' => 25,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 6,
                ]);
                $idobjectiveproduct100 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective15,
                'product_id' => 101,
                'product_other' => 'Producto 11',
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
                'weighing' => 6,
                ]);
                $idobjectiveproduct101 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective15,
                'product_id' => 102,
                'product_other' => 'Producto 12',
                'goal_1' => 6,
                'goal_2' => 6,
                'goal_3' => 6,
                'goal_4' => 6,
                'goal_1_balance' => 6,
                'goal_2_balance' => 6,
                'goal_3_balance' => 6,
                'goal_4_balance' => 6,
                'total_goal' => 24,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 6,
                ]);
                $idobjectiveproduct102 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective15,
                'product_id' => 103,
                'product_other' => 'Producto 13',
                'goal_1' => 10,
                'goal_2' => 10,
                'goal_3' => 10,
                'goal_4' => 100,
                'goal_1_balance' => 10,
                'goal_2_balance' => 10,
                'goal_3_balance' => 10,
                'goal_4_balance' => 100,
                'total_goal' => 130,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 6,
                ]);
                $idobjectiveproduct103 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective15,
                'product_id' => 104,
                'product_other' => 'Producto 14',
                'goal_1' => 100,
                'goal_2' => 100,
                'goal_3' => 100,
                'goal_4' => 0,
                'goal_1_balance' => 100,
                'goal_2_balance' => 100,
                'goal_3_balance' => 100,
                'goal_4_balance' => 0,
                'total_goal' => 300,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 6,
                ]);
                $idobjectiveproduct104 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective15,
                'product_id' => 105,
                'product_other' => 'Producto 15',
                'goal_1' => 2,
                'goal_2' => 2,
                'goal_3' => 2,
                'goal_4' => 6,
                'goal_1_balance' => 2,
                'goal_2_balance' => 2,
                'goal_3_balance' => 2,
                'goal_4_balance' => 6,
                'total_goal' => 12,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 6,
                ]);
                $idobjectiveproduct105 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective15,
                'product_id' => 106,
                'product_other' => 'Producto 16',
                'goal_1' => 25,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 25,
                'goal_1_balance' => 25,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 25,
                'total_goal' => 50,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 6,
                ]);
                $idobjectiveproduct106 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective15,
                'product_id' => 107,
                'product_other' => 'Producto 17',
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
                'weighing' => 6,
                ]);
                $idobjectiveproduct107 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective15,
                'product_id' => 108,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 1,
                ]);
                $idobjectiveproduct108 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective16,
                'product_id' => 109,
                'product_other' => 'Producto 1',
                'goal_1' => 4,
                'goal_2' => 4,
                'goal_3' => 4,
                'goal_4' => 8,
                'goal_1_balance' => 4,
                'goal_2_balance' => 4,
                'goal_3_balance' => 4,
                'goal_4_balance' => 8,
                'total_goal' => 20,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 12,
                ]);
                $idobjectiveproduct109 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective16,
                'product_id' => 110,
                'product_other' => 'Producto 2',
                'goal_1' => 4,
                'goal_2' => 4,
                'goal_3' => 4,
                'goal_4' => 8,
                'goal_1_balance' => 4,
                'goal_2_balance' => 4,
                'goal_3_balance' => 4,
                'goal_4_balance' => 8,
                'total_goal' => 20,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 12,
                ]);
                $idobjectiveproduct110 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective16,
                'product_id' => 111,
                'product_other' => 'Producto 3',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 7,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 7,
                'total_goal' => 7,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 12,
                ]);
                $idobjectiveproduct111 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective16,
                'product_id' => 112,
                'product_other' => 'Producto 4',
                'goal_1' => 2,
                'goal_2' => 2,
                'goal_3' => 2,
                'goal_4' => 4,
                'goal_1_balance' => 2,
                'goal_2_balance' => 2,
                'goal_3_balance' => 2,
                'goal_4_balance' => 4,
                'total_goal' => 10,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 12,
                ]);
                $idobjectiveproduct112 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective16,
                'product_id' => 113,
                'product_other' => 'Producto 5',
                'goal_1' => 2,
                'goal_2' => 2,
                'goal_3' => 2,
                'goal_4' => 3,
                'goal_1_balance' => 2,
                'goal_2_balance' => 2,
                'goal_3_balance' => 2,
                'goal_4_balance' => 3,
                'total_goal' => 9,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 12,
                ]);
                $idobjectiveproduct113 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective16,
                'product_id' => 114,
                'product_other' => 'Producto 6',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 2,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 2,
                'total_goal' => 5,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 13,
                ]);
                $idobjectiveproduct114 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective16,
                'product_id' => 115,
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
                $idobjectiveproduct115 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective16,
                'product_id' => 116,
                'product_other' => 'Producto 8',
                'goal_1' => 1,
                'goal_2' => 4,
                'goal_3' => 4,
                'goal_4' => 4,
                'goal_1_balance' => 1,
                'goal_2_balance' => 4,
                'goal_3_balance' => 4,
                'goal_4_balance' => 4,
                'total_goal' => 13,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 13,
                ]);
                $idobjectiveproduct116 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective16,
                'product_id' => 117,
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
                $idobjectiveproduct117 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective17,
                'product_id' => 118,
                'product_other' => 'Producto 1',
                'goal_1' => 10,
                'goal_2' => 10,
                'goal_3' => 10,
                'goal_4' => 10,
                'goal_1_balance' => 10,
                'goal_2_balance' => 10,
                'goal_3_balance' => 10,
                'goal_4_balance' => 10,
                'total_goal' => 40,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct118 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective17,
                'product_id' => 119,
                'product_other' => 'Producto 2',
                'goal_1' => 15,
                'goal_2' => 15,
                'goal_3' => 15,
                'goal_4' => 15,
                'goal_1_balance' => 15,
                'goal_2_balance' => 15,
                'goal_3_balance' => 15,
                'goal_4_balance' => 15,
                'total_goal' => 60,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct119 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective17,
                'product_id' => 120,
                'product_other' => 'Producto 3',
                'goal_1' => 12,
                'goal_2' => 12,
                'goal_3' => 12,
                'goal_4' => 18,
                'goal_1_balance' => 12,
                'goal_2_balance' => 12,
                'goal_3_balance' => 12,
                'goal_4_balance' => 18,
                'total_goal' => 54,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct120 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective17,
                'product_id' => 121,
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
                'weighing' => 1,
                ]);
                $idobjectiveproduct121 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective18,
                'product_id' => 122,
                'product_other' => 'Producto 1',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 40,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 40,
                'total_goal' => 43,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 20,
                ]);
                $idobjectiveproduct122 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective18,
                'product_id' => 123,
                'product_other' => 'Producto 2',
                'goal_1' => 1,
                'goal_2' => 4,
                'goal_3' => 4,
                'goal_4' => 3,
                'goal_1_balance' => 1,
                'goal_2_balance' => 4,
                'goal_3_balance' => 4,
                'goal_4_balance' => 3,
                'total_goal' => 12,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 20,
                ]);
                $idobjectiveproduct123 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective18,
                'product_id' => 124,
                'product_other' => 'Producto 3',
                'goal_1' => 20,
                'goal_2' => 20,
                'goal_3' => 20,
                'goal_4' => 7,
                'goal_1_balance' => 20,
                'goal_2_balance' => 20,
                'goal_3_balance' => 20,
                'goal_4_balance' => 7,
                'total_goal' => 67,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 20,
                ]);
                $idobjectiveproduct124 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective18,
                'product_id' => 125,
                'product_other' => 'Producto 4',
                'goal_1' => 1,
                'goal_2' => 3,
                'goal_3' => 3,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 3,
                'goal_3_balance' => 3,
                'goal_4_balance' => 1,
                'total_goal' => 8,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 20,
                ]);
                $idobjectiveproduct125 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective18,
                'product_id' => 126,
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
                $idobjectiveproduct126 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective19,
                'product_id' => 127,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 14,
                ]);
                $idobjectiveproduct127 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective19,
                'product_id' => 128,
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
                $idobjectiveproduct128 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective19,
                'product_id' => 129,
                'product_other' => 'Producto 3',
                'goal_1' => 6,
                'goal_2' => 6,
                'goal_3' => 6,
                'goal_4' => 6,
                'goal_1_balance' => 6,
                'goal_2_balance' => 6,
                'goal_3_balance' => 6,
                'goal_4_balance' => 6,
                'total_goal' => 24,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 14,
                ]);
                $idobjectiveproduct129 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective19,
                'product_id' => 130,
                'product_other' => 'Producto 4',
                'goal_1' => 5,
                'goal_2' => 5,
                'goal_3' => 5,
                'goal_4' => 3,
                'goal_1_balance' => 5,
                'goal_2_balance' => 5,
                'goal_3_balance' => 5,
                'goal_4_balance' => 3,
                'total_goal' => 18,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 14,
                ]);
                $idobjectiveproduct130 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective19,
                'product_id' => 131,
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
                'weighing' => 14,
                ]);
                $idobjectiveproduct131 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective19,
                'product_id' => 132,
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
                'weighing' => 15,
                ]);
                $idobjectiveproduct132 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective19,
                'product_id' => 133,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 15,
                ]);
                $idobjectiveproduct133 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective19,
                'product_id' => 134,
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
                $idobjectiveproduct134 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective20,
                'product_id' => 135,
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
                $idobjectiveproduct135 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective20,
                'product_id' => 136,
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
                'weighing' => 10,
                ]);
                $idobjectiveproduct136 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective20,
                'product_id' => 137,
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
                $idobjectiveproduct137 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective20,
                'product_id' => 138,
                'product_other' => 'Producto 4',
                'goal_1' => 10,
                'goal_2' => 10,
                'goal_3' => 10,
                'goal_4' => 60,
                'goal_1_balance' => 10,
                'goal_2_balance' => 10,
                'goal_3_balance' => 10,
                'goal_4_balance' => 60,
                'total_goal' => 90,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 10,
                ]);
                $idobjectiveproduct138 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective20,
                'product_id' => 139,
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
                'weighing' => 10,
                ]);
                $idobjectiveproduct139 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective20,
                'product_id' => 140,
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
                'weighing' => 10,
                ]);
                $idobjectiveproduct140 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective20,
                'product_id' => 141,
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
                'weighing' => 10,
                ]);
                $idobjectiveproduct141 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective20,
                'product_id' => 142,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 10,
                ]);
                $idobjectiveproduct142 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective20,
                'product_id' => 143,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 10,
                ]);
                $idobjectiveproduct143 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective20,
                'product_id' => 144,
                'product_other' => 'Producto 10',
                'goal_1' => 100,
                'goal_2' => 100,
                'goal_3' => 100,
                'goal_4' => 0,
                'goal_1_balance' => 100,
                'goal_2_balance' => 100,
                'goal_3_balance' => 100,
                'goal_4_balance' => 0,
                'total_goal' => 300,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 9,
                ]);
                $idobjectiveproduct144 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective20,
                'product_id' => 145,
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
                $idobjectiveproduct145 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective21,
                'product_id' => 146,
                'product_other' => 'Producto 1',
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
                'weighing' => 10,
                ]);
                $idobjectiveproduct146 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective21,
                'product_id' => 147,
                'product_other' => 'Producto 2',
                'goal_1' => 6,
                'goal_2' => 6,
                'goal_3' => 6,
                'goal_4' => 6,
                'goal_1_balance' => 6,
                'goal_2_balance' => 6,
                'goal_3_balance' => 6,
                'goal_4_balance' => 6,
                'total_goal' => 24,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 10,
                ]);
                $idobjectiveproduct147 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective21,
                'product_id' => 148,
                'product_other' => 'Producto 3',
                'goal_1' => 28,
                'goal_2' => 28,
                'goal_3' => 28,
                'goal_4' => 28,
                'goal_1_balance' => 28,
                'goal_2_balance' => 28,
                'goal_3_balance' => 28,
                'goal_4_balance' => 28,
                'total_goal' => 112,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 10,
                ]);
                $idobjectiveproduct148 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective21,
                'product_id' => 149,
                'product_other' => 'Producto 4',
                'goal_1' => 42,
                'goal_2' => 42,
                'goal_3' => 42,
                'goal_4' => 42,
                'goal_1_balance' => 42,
                'goal_2_balance' => 42,
                'goal_3_balance' => 42,
                'goal_4_balance' => 42,
                'total_goal' => 168,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 10,
                ]);
                $idobjectiveproduct149 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective21,
                'product_id' => 150,
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
                'weighing' => 10,
                ]);
                $idobjectiveproduct150 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective21,
                'product_id' => 151,
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
                'weighing' => 10,
                ]);
                $idobjectiveproduct151 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective21,
                'product_id' => 152,
                'product_other' => 'Producto 7',
                'goal_1' => 60,
                'goal_2' => 60,
                'goal_3' => 60,
                'goal_4' => 40,
                'goal_1_balance' => 60,
                'goal_2_balance' => 60,
                'goal_3_balance' => 60,
                'goal_4_balance' => 40,
                'total_goal' => 220,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 10,
                ]);
                $idobjectiveproduct152 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective21,
                'product_id' => 153,
                'product_other' => 'Producto 8',
                'goal_1' => 40,
                'goal_2' => 40,
                'goal_3' => 40,
                'goal_4' => 5,
                'goal_1_balance' => 40,
                'goal_2_balance' => 40,
                'goal_3_balance' => 40,
                'goal_4_balance' => 5,
                'total_goal' => 125,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 10,
                ]);
                $idobjectiveproduct153 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective21,
                'product_id' => 154,
                'product_other' => 'Producto 9',
                'goal_1' => 15,
                'goal_2' => 15,
                'goal_3' => 15,
                'goal_4' => 6,
                'goal_1_balance' => 15,
                'goal_2_balance' => 15,
                'goal_3_balance' => 15,
                'goal_4_balance' => 6,
                'total_goal' => 51,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 10,
                ]);
                $idobjectiveproduct154 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective21,
                'product_id' => 155,
                'product_other' => 'Producto 10',
                'goal_1' => 16,
                'goal_2' => 16,
                'goal_3' => 16,
                'goal_4' => 28,
                'goal_1_balance' => 16,
                'goal_2_balance' => 16,
                'goal_3_balance' => 16,
                'goal_4_balance' => 28,
                'total_goal' => 76,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 9,
                ]);
                $idobjectiveproduct155 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective21,
                'product_id' => 156,
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
                $idobjectiveproduct156 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective22,
                'product_id' => 157,
                'product_other' => 'Producto 1',
                'goal_1' => 30,
                'goal_2' => 30,
                'goal_3' => 30,
                'goal_4' => 30,
                'goal_1_balance' => 30,
                'goal_2_balance' => 30,
                'goal_3_balance' => 30,
                'goal_4_balance' => 30,
                'total_goal' => 120,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 20,
                ]);
                $idobjectiveproduct157 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective22,
                'product_id' => 158,
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
                $idobjectiveproduct158 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective22,
                'product_id' => 159,
                'product_other' => 'Producto 3',
                'goal_1' => 2,
                'goal_2' => 2,
                'goal_3' => 2,
                'goal_4' => 8,
                'goal_1_balance' => 2,
                'goal_2_balance' => 2,
                'goal_3_balance' => 2,
                'goal_4_balance' => 8,
                'total_goal' => 14,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 20,
                ]);
                $idobjectiveproduct159 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective22,
                'product_id' => 160,
                'product_other' => 'Producto 4',
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
                'weighing' => 20,
                ]);
                $idobjectiveproduct160 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective22,
                'product_id' => 161,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 19,
                ]);
                $idobjectiveproduct161 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective22,
                'product_id' => 162,
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
                $idobjectiveproduct162 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective23,
                'product_id' => 163,
                'product_other' => 'Producto 1',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 3,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 3,
                'total_goal' => 3,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct163 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective23,
                'product_id' => 164,
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
                'weighing' => 33,
                ]);
                $idobjectiveproduct164 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective23,
                'product_id' => 165,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct165 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective23,
                'product_id' => 166,
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
                'weighing' => 1,
                ]);
                $idobjectiveproduct166 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective24,
                'product_id' => 167,
                'product_other' => 'Producto 1',
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
                'weighing' => 50,
                ]);
                $idobjectiveproduct167 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective24,
                'product_id' => 168,
                'product_other' => 'Producto 2',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 3,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 3,
                'total_goal' => 3,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 49,
                ]);
                $idobjectiveproduct168 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective24,
                'product_id' => 169,
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
                'weighing' => 1,
                ]);
                $idobjectiveproduct169 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective25,
                'product_id' => 170,
                'product_other' => 'Producto 1',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 4400,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 4400,
                'total_goal' => 4400,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 25,
                ]);
                $idobjectiveproduct170 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective25,
                'product_id' => 171,
                'product_other' => 'Producto 2',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 2976,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 2976,
                'total_goal' => 2976,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 25,
                ]);
                $idobjectiveproduct171 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective25,
                'product_id' => 172,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 25,
                ]);
                $idobjectiveproduct172 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective25,
                'product_id' => 173,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 24,
                ]);
                $idobjectiveproduct173 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective25,
                'product_id' => 174,
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
                $idobjectiveproduct174 = DB::getPdo()->lastInsertId();
                
      DB::table('activities')->insert([
        'objective_id' => $idobjective1,
        'product_id' =>$idobjectiveproduct1,
        'name' => '3 áreas de Conservación Ambiental establecidas y reglamentadas',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 0,
        'goal' => 3,
        'weighing' => 11,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity1 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective1,
        'product_id' =>$idobjectiveproduct2,
        'name' => '5 Planes de Manejo de Areas Naturales Protegidas, Ecosistemas Estrategicos y Especies Focales, formulados.',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 2,
        'goal' => 5,
        'weighing' => 11,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity2 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective1,
        'product_id' =>$idobjectiveproduct3,
        'name' => '2 Unidades de Ordenacion Forestal, con plan de manejo formulado.',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 1,
        'goal' => 1,
        'weighing' => 11,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity3 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective1,
        'product_id' =>$idobjectiveproduct4,
        'name' => '2 Corredores biológicos, diseñados.',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 0,
        'goal' => 0,
        'weighing' => 11,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity4 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective1,
        'product_id' =>$idobjectiveproduct5,
        'name' => '2 Protocolos para manejo de especies invasoras, formulado.',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 0,
        'goal' => 3,
        'weighing' => 11,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity5 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective1,
        'product_id' =>$idobjectiveproduct6,
        'name' => '1 Protocolo para manejo de especies generadoras de conflicto, formulado.',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 0,
        'goal' => 0,
        'weighing' => 11,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity6 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective1,
        'product_id' =>$idobjectiveproduct7,
        'name' => 'Proceso de Declaratoria de Reservas de la Sociedad Civil, apoyado',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 0,
        'goal' => 3,
        'weighing' => 11,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity7 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective1,
        'product_id' =>$idobjectiveproduct8,
        'name' => '8 Planes de Manejo de ABACOS (microcuencas abastecedoras), elaborados.',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 1,
        'goal' => 1,
        'weighing' => 11,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity8 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective1,
        'product_id' =>$idobjectiveproduct9,
        'name' => '100% Proyecto sembrar agua formulado y estructurado.',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 0,
        'goal' => 0,
        'weighing' => 11,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity9 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective1,
        'product_id' =>$idobjectiveproduct10,
        'name' => 'Asignacion presupuestal ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 1,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity10 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective2,
        'product_id' =>$idobjectiveproduct11,
        'name' => '4 Especies invasoras con acciones de manejo.',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 4,
        'goal' => 4,
        'weighing' => 7,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity11 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective2,
        'product_id' =>$idobjectiveproduct12,
        'name' => '2 Corredores biologicos con acciones de conservacion',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 7,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity12 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective2,
        'product_id' =>$idobjectiveproduct13,
        'name' => '7.000 Hectáreas de áreas protegidas y ecosistemas estratégicos con acciones de restauración',
        'goal_1' => 1500,
        'goal_2' => 2500,
        'goal_3' => 2500,
        'goal_4' => 1135,
        'goal' => 7635,
        'weighing' => 7,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity13 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective2,
        'product_id' =>$idobjectiveproduct14,
        'name' => '437 Hectáreas recuperadas, en áreas de interés ambiental que no cuentan con Plan de Manejo',
        'goal_1' => 40,
        'goal_2' => 287,
        'goal_3' => 287,
        'goal_4' => 25,
        'goal' => 639,
        'weighing' => 6,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity14 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective2,
        'product_id' =>$idobjectiveproduct15,
        'name' => '3 Especies focales y generadoras de conflictos, con acciones de control y manejo ',
        'goal_1' => 2,
        'goal_2' => 2,
        'goal_3' => 2,
        'goal_4' => 3,
        'goal' => 9,
        'weighing' => 6,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity15 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective2,
        'product_id' =>$idobjectiveproduct16,
        'name' => '18 Microcuencas abastecedoras con acciones de restauración (aplica para ABACOS con Planes de Manejo formulados) ',
        'goal_1' => 5,
        'goal_2' => 5,
        'goal_3' => 5,
        'goal_4' => 25,
        'goal' => 40,
        'weighing' => 6,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity16 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective2,
        'product_id' =>$idobjectiveproduct17,
        'name' => '6 Viveros de producción de material vegetal de especies nativas y de interés ambiental, fortalecidos.',
        'goal_1' => 6,
        'goal_2' => 9,
        'goal_3' => 9,
        'goal_4' => 6,
        'goal' => 30,
        'weighing' => 6,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity17 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective2,
        'product_id' =>$idobjectiveproduct18,
        'name' => '3 CAV de fauna, operando',
        'goal_1' => 3,
        'goal_2' => 3,
        'goal_3' => 3,
        'goal_4' => 3,
        'goal' => 12,
        'weighing' => 6,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity18 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective2,
        'product_id' =>$idobjectiveproduct19,
        'name' => '1 CAV de flora, operando',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 6,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity19 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective2,
        'product_id' =>$idobjectiveproduct20,
        'name' => 'Proyecto forestal rio Magdalena (KFW), apoyado. ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 6,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity20 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective2,
        'product_id' =>$idobjectiveproduct21,
        'name' => 'Estufas ecoeficientes construidas y bosques leñeros sembrados',
        'goal_1' => 53,
        'goal_2' => 283,
        'goal_3' => 283,
        'goal_4' => 86,
        'goal' => 705,
        'weighing' => 6,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity21 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective2,
        'product_id' =>$idobjectiveproduct22,
        'name' => '660  asesorias  tecnicas sobre biodiversidad  y  servicios ecosistemicos ',
        'goal_1' => 30,
        'goal_2' => 490,
        'goal_3' => 490,
        'goal_4' => 163,
        'goal' => 1173,
        'weighing' => 6,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity22 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective2,
        'product_id' =>$idobjectiveproduct23,
        'name' => 'Estrategias tecnológicas implementadas para la conservación de suelos',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 0,
        'goal' => 3,
        'weighing' => 6,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity23 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective2,
        'product_id' =>$idobjectiveproduct24,
        'name' => 'Esquemas de Pago por Servicios Ambientales aplicados ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 2,
        'goal' => 5,
        'weighing' => 6,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity24 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective2,
        'product_id' =>$idobjectiveproduct25,
        'name' => ' 
      Seguimiento y monitoreo del proyecto DESARROLLO DE ACCIONES DE CONSERVACIÓN, USO Y MANEJO SOSTENIBLE DE LA BIODIVERSIDAD EN LAS CUENCAS DEL DEPARTAMENTO DE CALDAS',
        'goal_1' => 100,
        'goal_2' => 100,
        'goal_3' => 100,
        'goal_4' => 0,
        'goal' => 300,
        'weighing' => 6,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity25 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective2,
        'product_id' =>$idobjectiveproduct26,
        'name' => 'Corporación cuenca río Chinchiná- CORAGUA, apalancada.',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 1,
        'goal' => 1,
        'weighing' => 6,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity26 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective2,
        'product_id' =>$idobjectiveproduct27,
        'name' => 'Asignacion presupuestal ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 1,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity27 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective3,
        'product_id' =>$idobjectiveproduct28,
        'name' => '20 Predios con estrategias de manejo sostenible de guaduales.',
        'goal_1' => 5,
        'goal_2' => 13,
        'goal_3' => 13,
        'goal_4' => 5,
        'goal' => 36,
        'weighing' => 25,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity28 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective3,
        'product_id' =>$idobjectiveproduct29,
        'name' => '4 Sistemas agropecuarios con acciones de reconversión, implementadas.',
        'goal_1' => 1,
        'goal_2' => 2,
        'goal_3' => 2,
        'goal_4' => 1,
        'goal' => 6,
        'weighing' => 25,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity29 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective3,
        'product_id' =>$idobjectiveproduct30,
        'name' => '4 modelos de biocomercio y uso sostenible de la biodiversidad, implementados',
        'goal_1' => 2,
        'goal_2' => 2,
        'goal_3' => 2,
        'goal_4' => 4,
        'goal' => 10,
        'weighing' => 25,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity30 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective3,
        'product_id' =>$idobjectiveproduct31,
        'name' => '80 Actividades de extensión para el uso sostenible de la biodiversidad,  realizadas.',
        'goal_1' => 5,
        'goal_2' => 5,
        'goal_3' => 5,
        'goal_4' => 55,
        'goal' => 70,
        'weighing' => 24,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity31 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective3,
        'product_id' =>$idobjectiveproduct32,
        'name' => 'Asignacion presupuestal ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 1,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity32 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective4,
        'product_id' =>$idobjectiveproduct33,
        'name' => '8 Municipios con nivel de concentracion de contaminacion del aire entre marginal y moderado ',
        'goal_1' => 2,
        'goal_2' => 2,
        'goal_3' => 2,
        'goal_4' => 2,
        'goal' => 8,
        'weighing' => 50,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity33 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective4,
        'product_id' =>$idobjectiveproduct34,
        'name' => '2 Planes de descontaminacion de Ruido, formulados ',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 0,
        'goal' => 0,
        'weighing' => 49,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity34 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective4,
        'product_id' =>$idobjectiveproduct35,
        'name' => 'Asignacion presupuestal ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 1,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity35 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective5,
        'product_id' =>$idobjectiveproduct36,
        'name' => '3 Sectores productivos identificados y priorizados para la implementación de mecanismos de producción más limpia y buenas prácticas ambientales',
        'goal_1' => 3,
        'goal_2' => 3,
        'goal_3' => 3,
        'goal_4' => 4,
        'goal' => 13,
        'weighing' => 33,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity36 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective5,
        'product_id' =>$idobjectiveproduct37,
        'name' => '2 Alternativas generadas para el aprovechamiento de residuos y restauración de suelos degradados por las actividades productivas en el Departamento de Caldas',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 1,
        'goal' => 1,
        'weighing' => 33,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity37 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective5,
        'product_id' =>$idobjectiveproduct38,
        'name' => '4 Estrategias generadas para el aprovechamiento, tratamiento o manejo y disposición final de residuos, generadas',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 2,
        'goal' => 2,
        'weighing' => 33,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity38 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective5,
        'product_id' =>$idobjectiveproduct39,
        'name' => 'Asignacion presupuestal ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 1,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity39 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective6,
        'product_id' =>$idobjectiveproduct40,
        'name' => '2 Estrategias regionales apoyadas para la utilización de alternativas ecoeficientes ',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 1,
        'goal' => 1,
        'weighing' => 50,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity40 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective6,
        'product_id' =>$idobjectiveproduct41,
        'name' => '6 Planes postconsumo de residuos peligrosos y/o especiales, fomentados',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 2,
        'goal' => 2,
        'weighing' => 49,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity41 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective6,
        'product_id' =>$idobjectiveproduct42,
        'name' => 'Asignacion presupuestal ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 1,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity42 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective7,
        'product_id' =>$idobjectiveproduct43,
        'name' => '3 redes climáticas comunitarias (Grupos locales del Clima), consolidadas y monitoreadas',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 14,
        'goal' => 17,
        'weighing' => 33,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity43 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective7,
        'product_id' =>$idobjectiveproduct44,
        'name' => '3 experiencias piloto en adaptación y mitigación al cambio climático, implementadas y monitoreadas',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 5,
        'goal' => 8,
        'weighing' => 33,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity44 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective7,
        'product_id' =>$idobjectiveproduct45,
        'name' => ' 3 mecanismos de articulación al sistema nacional de cambio climático, implementados',
        'goal_1' => 3,
        'goal_2' => 3,
        'goal_3' => 3,
        'goal_4' => 3,
        'goal' => 12,
        'weighing' => 33,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity45 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective7,
        'product_id' =>$idobjectiveproduct46,
        'name' => 'Asignacion presupuestal ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 1,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity46 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective8,
        'product_id' =>$idobjectiveproduct47,
        'name' => '3 Lineamientos de cambio climático incorporados a los instrumentos de planificación territorial (POMCAS, POT,  SIDAP, planes de manejo de áreas protegidas y/o a la estructura ecológica principal)',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 50,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity47 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective8,
        'product_id' =>$idobjectiveproduct48,
        'name' => 'Modelos de simulación para la identificación de escenarios de cambio climático aplicados en tres cuencas del departamento, como instrumento de soporte en la toma de decisiones',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 0,
        'goal' => 3,
        'weighing' => 49,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity48 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective8,
        'product_id' =>$idobjectiveproduct49,
        'name' => 'Asignacion presupuestal ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 1,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity49 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective9,
        'product_id' =>$idobjectiveproduct50,
        'name' => '598 Obras de saneamiento basico construidas en la zona rural del departamento de Caldas',
        'goal_1' => 194,
        'goal_2' => 194,
        'goal_3' => 194,
        'goal_4' => 244,
        'goal' => 826,
        'weighing' => 33,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity50 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective9,
        'product_id' =>$idobjectiveproduct51,
        'name' => '900 Obras de saneamiento basico existentes, con seguimiento y mantenimiento',
        'goal_1' => 100,
        'goal_2' => 100,
        'goal_3' => 100,
        'goal_4' => 104,
        'goal' => 404,
        'weighing' => 33,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity51 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective9,
        'product_id' =>$idobjectiveproduct52,
        'name' => '1921 Metros lineales de obras construidas para la mitigación de problemas críticos de contaminación en áreas urbanas',
        'goal_1' => 691,
        'goal_2' => 691,
        'goal_3' => 691,
        'goal_4' => 590,
        'goal' => 2663,
        'weighing' => 33,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity52 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective9,
        'product_id' =>$idobjectiveproduct53,
        'name' => 'Asignacion presupuestal ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 1,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity53 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective10,
        'product_id' =>$idobjectiveproduct54,
        'name' => '2.000 Usuarios legalizados con procesos de reglamentación de corrientes hídricas en el departamento Caldas',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 1000,
        'goal' => 1000,
        'weighing' => 20,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity54 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective10,
        'product_id' =>$idobjectiveproduct55,
        'name' => ' Planes de ordenamiento del patrimonio hídrico, socializado y validado.',
        'goal_1' => 1,
        'goal_2' => 0,
        'goal_3' => 1,
        'goal_4' => 0,
        'goal' => 2,
        'weighing' => 20,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity55 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective10,
        'product_id' =>$idobjectiveproduct56,
        'name' => '2 Corrientes hídricas con reglamentación de vertimientos en el marco de los planes de ordenamiento',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 0,
        'goal' => 0,
        'weighing' => 20,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity56 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective10,
        'product_id' =>$idobjectiveproduct57,
        'name' => '20% de aplicación de los planes de manejo en acuíferos del departamento de Caldas, implementados',
        'goal_1' => 5,
        'goal_2' => 5,
        'goal_3' => 0,
        'goal_4' => 5,
        'goal' => 15,
        'weighing' => 20,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity57 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective10,
        'product_id' =>$idobjectiveproduct58,
        'name' => 'Planes de ordenamiento del recurso hídrico,socializado y validado. ',
        'goal_1' => 0,
        'goal_2' => 1,
        'goal_3' => 5,
        'goal_4' => 0,
        'goal' => 6,
        'weighing' => 19,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity58 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective10,
        'product_id' =>$idobjectiveproduct59,
        'name' => 'Asignacion presupuestal ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 1,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity59 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective11,
        'product_id' =>$idobjectiveproduct60,
        'name' => '26192 m2 de area intervenida con obras para prevencion y/o mitigacion del riesgo',
        'goal_1' => 19999,
        'goal_2' => 19999,
        'goal_3' => 19999,
        'goal_4' => 14355,
        'goal' => 74352,
        'weighing' => 50,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity60 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective11,
        'product_id' =>$idobjectiveproduct61,
        'name' => ' 11 municipios con programa de mantenimiento de obras de estabilidad ',
        'goal_1' => 5,
        'goal_2' => 5,
        'goal_3' => 5,
        'goal_4' => 11,
        'goal' => 26,
        'weighing' => 49,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity61 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective11,
        'product_id' =>$idobjectiveproduct62,
        'name' => 'Asignacion presupuestal ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 1,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity62 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective12,
        'product_id' =>$idobjectiveproduct63,
        'name' => '26  Entidades Territoriales acompañadas y asistidas técnicamente en procesos de Gestion del Riesgo de Desastres',
        'goal_1' => 7,
        'goal_2' => 7,
        'goal_3' => 7,
        'goal_4' => 9,
        'goal' => 30,
        'weighing' => 25,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity63 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective12,
        'product_id' =>$idobjectiveproduct64,
        'name' => '100 % de cumplimiento en la asesoria y acompañamiento a entidades y comunidad en general sobre procesos de Gestion del Riesgo de Desastres',
        'goal_1' => 100,
        'goal_2' => 100,
        'goal_3' => 100,
        'goal_4' => 100,
        'goal' => 400,
        'weighing' => 25,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity64 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective12,
        'product_id' =>$idobjectiveproduct65,
        'name' => 'Proyectos de la Agenda para la Gestión Integral del Riesgo de Manizales formulados',
        'goal_1' => 6,
        'goal_2' => 6,
        'goal_3' => 6,
        'goal_4' => 0,
        'goal' => 18,
        'weighing' => 25,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity65 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective12,
        'product_id' =>$idobjectiveproduct66,
        'name' => '14 cursos de Brigadistas Forestales (CBF), realizados',
        'goal_1' => 2,
        'goal_2' => 2,
        'goal_3' => 2,
        'goal_4' => 8,
        'goal' => 14,
        'weighing' => 24,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity66 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective12,
        'product_id' =>$idobjectiveproduct67,
        'name' => 'Asignacion presupuestal ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 1,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity67 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective13,
        'product_id' =>$idobjectiveproduct68,
        'name' => '26 Mesas ambientales con comunidades indígenas, fortalecidas y 6 mesas ambientales con comunidades afrodescendientes, creadas',
        'goal_1' => 5,
        'goal_2' => 5,
        'goal_3' => 5,
        'goal_4' => 5,
        'goal' => 20,
        'weighing' => 33,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity68 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective13,
        'product_id' =>$idobjectiveproduct69,
        'name' => '1 agenda conjunta formulada para la gestión ambiental en los territorios afrodescendientes',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 0,
        'goal' => 0,
        'weighing' => 33,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity69 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective13,
        'product_id' =>$idobjectiveproduct70,
        'name' => '24 Instituciones educativas acompañadas para el desarrollo de PRAE y PROCEDA en territorios de comunidades Afrodescendientes e Indígenas',
        'goal_1' => 6,
        'goal_2' => 6,
        'goal_3' => 6,
        'goal_4' => 6,
        'goal' => 24,
        'weighing' => 33,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity70 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective13,
        'product_id' =>$idobjectiveproduct71,
        'name' => 'Asignacion presupuestal ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 1,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity71 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective14,
        'product_id' =>$idobjectiveproduct72,
        'name' => '70 Obras de saneamiento básico, construidas',
        'goal_1' => 10,
        'goal_2' => 10,
        'goal_3' => 10,
        'goal_4' => 20,
        'goal' => 50,
        'weighing' => 5,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity72 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective14,
        'product_id' =>$idobjectiveproduct73,
        'name' => '200 Obras de saneamiento básico existentes, con seguimiento y mantenimiento ',
        'goal_1' => 50,
        'goal_2' => 50,
        'goal_3' => 50,
        'goal_4' => 50,
        'goal' => 200,
        'weighing' => 5,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity73 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective14,
        'product_id' =>$idobjectiveproduct74,
        'name' => '8 obras para el abastecimiento hídrico (reservorios y otros), construidas ',
        'goal_1' => 2,
        'goal_2' => 2,
        'goal_3' => 2,
        'goal_4' => 2,
        'goal' => 8,
        'weighing' => 5,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity74 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective14,
        'product_id' =>$idobjectiveproduct75,
        'name' => '8 obras de optimización del recursos hídrico (bocatomas), construidas y con mantenimiento',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 3,
        'goal' => 6,
        'weighing' => 5,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity75 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective14,
        'product_id' =>$idobjectiveproduct76,
        'name' => 'Acciones de manejo en 16 microcuencas abastecedoras  (ABACOS) implementadas ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 4,
        'goal' => 7,
        'weighing' => 5,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity76 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective14,
        'product_id' =>$idobjectiveproduct77,
        'name' => '4 Actividades desarrolladas para la conservación y recuperación de flora y fauna en los ecosistemas presentes en los territorios Etnicos  ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 5,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity77 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective14,
        'product_id' =>$idobjectiveproduct78,
        'name' => '9 Comunidades Etnicas acompañadas en procesos de sensibilización para separación en la fuente y gestión integral de residuos',
        'goal_1' => 2,
        'goal_2' => 2,
        'goal_3' => 2,
        'goal_4' => 2,
        'goal' => 8,
        'weighing' => 5,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity78 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective14,
        'product_id' =>$idobjectiveproduct79,
        'name' => ' 
      Grupo de guardabosques de comunidades indígenas, fortalecido',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 5,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity79 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective14,
        'product_id' =>$idobjectiveproduct80,
        'name' => '4 Talleres de sensibilización para el manejo adecuado de RESPEL desarrollados ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 5,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity80 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective14,
        'product_id' =>$idobjectiveproduct81,
        'name' => '8 Proyectos piloto para la reconversión y recuperación de prácticas ancestrales productivas realizados ',
        'goal_1' => 2,
        'goal_2' => 2,
        'goal_3' => 2,
        'goal_4' => 2,
        'goal' => 8,
        'weighing' => 6,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity81 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective14,
        'product_id' =>$idobjectiveproduct82,
        'name' => '2 Estudios elaborados para conocimiento del riesgo en zonas prioritarias ubicadas en territorios Etnicos',
        'goal_1' => 2,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 0,
        'goal' => 2,
        'weighing' => 6,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity82 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective14,
        'product_id' =>$idobjectiveproduct83,
        'name' => '1350 metros cuadrados de obras para reducción del riesgo implementados ',
        'goal_1' => 300,
        'goal_2' => 300,
        'goal_3' => 300,
        'goal_4' => 400,
        'goal' => 1300,
        'weighing' => 6,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity83 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective14,
        'product_id' =>$idobjectiveproduct84,
        'name' => '100%  de asesorías realizadas ante solicitudes de gestión del riesgo
      ',
        'goal_1' => 100,
        'goal_2' => 100,
        'goal_3' => 100,
        'goal_4' => 100,
        'goal' => 400,
        'weighing' => 6,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity84 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective14,
        'product_id' =>$idobjectiveproduct85,
        'name' => '2 Acciones de manejo de la biodiversidad y los ecosistemas, aplicadas.',
        'goal_1' => 2,
        'goal_2' => 2,
        'goal_3' => 2,
        'goal_4' => 2,
        'goal' => 8,
        'weighing' => 6,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity85 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective14,
        'product_id' =>$idobjectiveproduct86,
        'name' => '2 Proyectos de  aprovechamiento sostenible de la biodiversidad, implementados ',
        'goal_1' => 2,
        'goal_2' => 2,
        'goal_3' => 2,
        'goal_4' => 2,
        'goal' => 8,
        'weighing' => 6,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity86 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective14,
        'product_id' =>$idobjectiveproduct87,
        'name' => '4 Productos de la biodiversidad, incluidos en cadenas de valor',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 6,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity87 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective14,
        'product_id' =>$idobjectiveproduct88,
        'name' => '2 Herramientas de manejo de paisaje, implementadas. 

      ',
        'goal_1' => 2,
        'goal_2' => 2,
        'goal_3' => 2,
        'goal_4' => 2,
        'goal' => 8,
        'weighing' => 6,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity88 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective14,
        'product_id' =>$idobjectiveproduct89,
        'name' => '4 subsectores productivos y de servicios apoyados para mejorar la gestión ambiental, aplicando estrategias de producción más limpia',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 6,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity89 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective14,
        'product_id' =>$idobjectiveproduct90,
        'name' => 'Asignacion presupuestal ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 1,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity90 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective15,
        'product_id' =>$idobjectiveproduct91,
        'name' => '28 Comités Técnicos Interinstitucionales de educación ambiental -CIDEA- (Departamental y Municipales), acompañados ',
        'goal_1' => 28,
        'goal_2' => 28,
        'goal_3' => 28,
        'goal_4' => 28,
        'goal' => 112,
        'weighing' => 5,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity91 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective15,
        'product_id' =>$idobjectiveproduct92,
        'name' => '24 Proyectos Ambientales Escolares (PRAE) asesorados',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 6,
        'goal' => 6,
        'weighing' => 5,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity92 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective15,
        'product_id' =>$idobjectiveproduct93,
        'name' => '5 encuentros subregionales de PRAE, realizados',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 2,
        'goal' => 2,
        'weighing' => 5,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity93 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective15,
        'product_id' =>$idobjectiveproduct94,
        'name' => '20 Instituciones educativas apoyadas en el fortalecimiento y continuidad de la estrategia de investigación PROYECTO ONDAS.',
        'goal_1' => 5,
        'goal_2' => 5,
        'goal_3' => 5,
        'goal_4' => 5,
        'goal' => 20,
        'weighing' => 6,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity94 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective15,
        'product_id' =>$idobjectiveproduct95,
        'name' => '4 Sistemas comunitarios de alertas tempranas, diseñados',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 6,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity95 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective15,
        'product_id' =>$idobjectiveproduct96,
        'name' => '260 Actividades de sensibilización ambiental en organizaciones y comunidades, y miembros de CMGRD para la gestión del riesgo y la adaptación al cambio climatico,  desarrollados',
        'goal_1' => 30,
        'goal_2' => 30,
        'goal_3' => 30,
        'goal_4' => 80,
        'goal' => 170,
        'weighing' => 6,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity96 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective15,
        'product_id' =>$idobjectiveproduct97,
        'name' => '3 Mediaciones didacticas para educacion ambiental, producidas',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 1,
        'goal' => 1,
        'weighing' => 6,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity97 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective15,
        'product_id' =>$idobjectiveproduct98,
        'name' => '20 Grupos ambientales apoyados y acompañados',
        'goal_1' => 5,
        'goal_2' => 5,
        'goal_3' => 5,
        'goal_4' => 5,
        'goal' => 20,
        'weighing' => 6,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity98 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective15,
        'product_id' =>$idobjectiveproduct99,
        'name' => '19 Espacios lúdico, recreativos, culturales y académicos, que dinamicen la educación ambiental, apoyados',
        'goal_1' => 5,
        'goal_2' => 4,
        'goal_3' => 4,
        'goal_4' => 5,
        'goal' => 18,
        'weighing' => 6,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity99 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective15,
        'product_id' =>$idobjectiveproduct100,
        'name' => '35 Proyectos ciudadanos de educación ambiental -PROCEDA- en el departamento de Caldas  ejecutados.',
        'goal_1' => 5,
        'goal_2' => 5,
        'goal_3' => 5,
        'goal_4' => 10,
        'goal' => 25,
        'weighing' => 6,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity100 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective15,
        'product_id' =>$idobjectiveproduct101,
        'name' => '8 Proyectos de educación ambiental apoyados según iniciativa de las administraciones municipales',
        'goal_1' => 2,
        'goal_2' => 2,
        'goal_3' => 2,
        'goal_4' => 2,
        'goal' => 8,
        'weighing' => 6,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity101 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective15,
        'product_id' =>$idobjectiveproduct102,
        'name' => '24 Giras con actores sociales para reconocimiento y manejo de la biodiversidad en ecosistemas estrategicos ',
        'goal_1' => 6,
        'goal_2' => 6,
        'goal_3' => 6,
        'goal_4' => 6,
        'goal' => 24,
        'weighing' => 6,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity102 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective15,
        'product_id' =>$idobjectiveproduct103,
        'name' => '286 Talleres con comunidad  sobre biodiversidad ',
        'goal_1' => 10,
        'goal_2' => 10,
        'goal_3' => 10,
        'goal_4' => 100,
        'goal' => 130,
        'weighing' => 6,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity103 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective15,
        'product_id' =>$idobjectiveproduct104,
        'name' => '1 Estrategia didactica para el ahorro y uso eficiente del agua, diseñada',
        'goal_1' => 100,
        'goal_2' => 100,
        'goal_3' => 100,
        'goal_4' => 0,
        'goal' => 300,
        'weighing' => 6,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity104 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective15,
        'product_id' =>$idobjectiveproduct105,
        'name' => '20 Talleres de Educación para la Gobernanza de patrimonio Hidrico a lideres  comunitarios proximos  a zonas de acueductos rurales ',
        'goal_1' => 2,
        'goal_2' => 2,
        'goal_3' => 2,
        'goal_4' => 6,
        'goal' => 12,
        'weighing' => 6,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity105 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective15,
        'product_id' =>$idobjectiveproduct106,
        'name' => 'Una Estrategia generada de empoderamiento  de las comunidades y los sectores publicos  involucrados  que consideren  el seguimiento y mantenimiento a las areas naturales  y /o compensadas',
        'goal_1' => 25,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 25,
        'goal' => 50,
        'weighing' => 6,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity106 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective15,
        'product_id' =>$idobjectiveproduct107,
        'name' => 'Una estrategia de  educación  en Cambio Climatico   (art 6 ONU) generada',
        'goal_1' => 25,
        'goal_2' => 25,
        'goal_3' => 25,
        'goal_4' => 25,
        'goal' => 100,
        'weighing' => 6,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity107 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective15,
        'product_id' =>$idobjectiveproduct108,
        'name' => 'Asignacion presupuestal ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 1,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity108 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective16,
        'product_id' =>$idobjectiveproduct109,
        'name' => '28 Grupos ciudadanos  para gestión ambiental, fortalecidos',
        'goal_1' => 4,
        'goal_2' => 4,
        'goal_3' => 4,
        'goal_4' => 8,
        'goal' => 20,
        'weighing' => 12,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity109 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective16,
        'product_id' =>$idobjectiveproduct110,
        'name' => '8 Consejos de Cuenca conformados y apoyados en su gestión',
        'goal_1' => 4,
        'goal_2' => 4,
        'goal_3' => 4,
        'goal_4' => 8,
        'goal' => 20,
        'weighing' => 12,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity110 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective16,
        'product_id' =>$idobjectiveproduct111,
        'name' => '18 Eventos de control social para seguimiento a la ejecución del plan de acción 2016-2019, realizados',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 7,
        'goal' => 7,
        'weighing' => 12,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity111 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective16,
        'product_id' =>$idobjectiveproduct112,
        'name' => '8 Estrategias establecidas por la ley para la veeduría y control ciudadano, aplicadas',
        'goal_1' => 2,
        'goal_2' => 2,
        'goal_3' => 2,
        'goal_4' => 4,
        'goal' => 10,
        'weighing' => 12,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity112 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective16,
        'product_id' =>$idobjectiveproduct113,
        'name' => '11   Foros temáticos realizados para fortalecer los niveles de información para la participación para la gestión del patrimonio hídrico',
        'goal_1' => 2,
        'goal_2' => 2,
        'goal_3' => 2,
        'goal_4' => 3,
        'goal' => 9,
        'weighing' => 12,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity113 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective16,
        'product_id' =>$idobjectiveproduct114,
        'name' => '4  Talleres regionales realizados con el fin de generar escenarios para el manejo y transformación de conflictos asociados al agua',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 2,
        'goal' => 5,
        'weighing' => 13,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity114 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective16,
        'product_id' =>$idobjectiveproduct115,
        'name' => 'Estrategias de diálogo con diferentes grupos de interés sectorial y comunitario, desarrolladas.',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 13,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity115 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective16,
        'product_id' =>$idobjectiveproduct116,
        'name' => '4 Estrategias de gestión socioambiental multisectorial gestionadas (PLANES DE ACCIÓN INTEGRAL -PAI)',
        'goal_1' => 1,
        'goal_2' => 4,
        'goal_3' => 4,
        'goal_4' => 4,
        'goal' => 13,
        'weighing' => 13,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity116 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective16,
        'product_id' =>$idobjectiveproduct117,
        'name' => 'Asignacion presupuestal ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 1,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity117 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective17,
        'product_id' =>$idobjectiveproduct118,
        'name' => '40  Estrategias de comunicación formuladas y ejecutadas, para generar conciencia ambiental. ',
        'goal_1' => 10,
        'goal_2' => 10,
        'goal_3' => 10,
        'goal_4' => 10,
        'goal' => 40,
        'weighing' => 33,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity118 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective17,
        'product_id' =>$idobjectiveproduct119,
        'name' => '60 Estrategias de información y comunicación formuladas y ejecutadas,  para la apropiación del conocimiento técnico -científico y la transparencia. ',
        'goal_1' => 15,
        'goal_2' => 15,
        'goal_3' => 15,
        'goal_4' => 15,
        'goal' => 60,
        'weighing' => 33,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity119 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective17,
        'product_id' =>$idobjectiveproduct120,
        'name' => '48 Estrategias de comunicación interna y de fortalecimiento institucional, diseñadas y ejecutadas.',
        'goal_1' => 12,
        'goal_2' => 12,
        'goal_3' => 12,
        'goal_4' => 18,
        'goal' => 54,
        'weighing' => 33,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity120 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective17,
        'product_id' =>$idobjectiveproduct121,
        'name' => 'Asignacion presupuestal ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 1,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity121 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective18,
        'product_id' =>$idobjectiveproduct122,
        'name' => ' Estudios sobre la biodiversidad y los servicios ecosistemicos elaborados ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 40,
        'goal' => 43,
        'weighing' => 20,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity122 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective18,
        'product_id' =>$idobjectiveproduct123,
        'name' => '7  Redes de monitoreo ambiental, funcionando',
        'goal_1' => 1,
        'goal_2' => 4,
        'goal_3' => 4,
        'goal_4' => 3,
        'goal' => 12,
        'weighing' => 20,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity123 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective18,
        'product_id' =>$idobjectiveproduct124,
        'name' => '100 % de implementación de la fase IV de la estructuracion de la Linea Base Ambiental ',
        'goal_1' => 20,
        'goal_2' => 20,
        'goal_3' => 20,
        'goal_4' => 7,
        'goal' => 67,
        'weighing' => 20,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity124 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective18,
        'product_id' =>$idobjectiveproduct125,
        'name' => '4 Estudios en zonas identificadas de riesgo, terminados',
        'goal_1' => 1,
        'goal_2' => 3,
        'goal_3' => 3,
        'goal_4' => 1,
        'goal' => 8,
        'weighing' => 20,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity125 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective18,
        'product_id' =>$idobjectiveproduct126,
        'name' => 'Asignacion presupuestal ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 20,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity126 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective19,
        'product_id' =>$idobjectiveproduct127,
        'name' => 'Estrategia de Gobierno en Linea implementada',
        'goal_1' => 25,
        'goal_2' => 25,
        'goal_3' => 25,
        'goal_4' => 25,
        'goal' => 100,
        'weighing' => 14,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity127 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective19,
        'product_id' =>$idobjectiveproduct128,
        'name' => 'Plan de adquisición de Hardware y software ejecutado',
        'goal_1' => 25,
        'goal_2' => 25,
        'goal_3' => 25,
        'goal_4' => 25,
        'goal' => 100,
        'weighing' => 14,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity128 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective19,
        'product_id' =>$idobjectiveproduct129,
        'name' => 'Arquitectura de datos administrada y modernizada',
        'goal_1' => 6,
        'goal_2' => 6,
        'goal_3' => 6,
        'goal_4' => 6,
        'goal' => 24,
        'weighing' => 14,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity129 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective19,
        'product_id' =>$idobjectiveproduct130,
        'name' => 'Reingenieria aplicada sobre modulos existentes y Desarrollar e implementar nuevos modulos de apoyo a la gestion institucional',
        'goal_1' => 5,
        'goal_2' => 5,
        'goal_3' => 5,
        'goal_4' => 3,
        'goal' => 18,
        'weighing' => 14,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity130 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective19,
        'product_id' =>$idobjectiveproduct131,
        'name' => 'Alianzas con otras instituciones para la transferencia en materia de sistemas de informacion ambiental, establecidas',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 14,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity131 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective19,
        'product_id' =>$idobjectiveproduct132,
        'name' => '100% de la informacion de las tematicas ambientales recibida, analizada e incorporada en el Repositorio Central de Informacion',
        'goal_1' => 100,
        'goal_2' => 100,
        'goal_3' => 100,
        'goal_4' => 100,
        'goal' => 400,
        'weighing' => 15,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity132 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective19,
        'product_id' =>$idobjectiveproduct133,
        'name' => '4 Municipios apoyados en el proceso de actualización catastral',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 0,
        'goal' => 0,
        'weighing' => 15,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity133 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective19,
        'product_id' =>$idobjectiveproduct134,
        'name' => 'Asignacion presupuestal ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 1,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity134 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective20,
        'product_id' =>$idobjectiveproduct135,
        'name' => 'Sistema de Gestion Integrado -SGI, fortalecido',
        'goal_1' => 100,
        'goal_2' => 100,
        'goal_3' => 100,
        'goal_4' => 100,
        'goal' => 400,
        'weighing' => 10,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity135 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective20,
        'product_id' =>$idobjectiveproduct136,
        'name' => '100% de ejecucion del Plan de Gestion del Laboratorio Ambiental',
        'goal_1' => 100,
        'goal_2' => 100,
        'goal_3' => 100,
        'goal_4' => 100,
        'goal' => 400,
        'weighing' => 10,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity136 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective20,
        'product_id' =>$idobjectiveproduct137,
        'name' => '100% de implementacion de acciones para el fortalecimiento del laboratorio de suelos',
        'goal_1' => 100,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 0,
        'goal' => 100,
        'weighing' => 10,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity137 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective20,
        'product_id' =>$idobjectiveproduct138,
        'name' => '100% de ejecucion del programa de remodelación y adecuación de las instalaciones de la Corporación',
        'goal_1' => 10,
        'goal_2' => 10,
        'goal_3' => 10,
        'goal_4' => 60,
        'goal' => 90,
        'weighing' => 10,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity138 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective20,
        'product_id' =>$idobjectiveproduct139,
        'name' => '100% de ejecucion del Plan de Acción para fortalecer el grupo de investigacion de la Corporacion - GIRNMA',
        'goal_1' => 25,
        'goal_2' => 25,
        'goal_3' => 25,
        'goal_4' => 25,
        'goal' => 100,
        'weighing' => 10,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity139 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective20,
        'product_id' =>$idobjectiveproduct140,
        'name' => '100% de cumplimiento de las metas del Plan Institucional de Gestión Ambiental - PIGA',
        'goal_1' => 100,
        'goal_2' => 100,
        'goal_3' => 100,
        'goal_4' => 100,
        'goal' => 400,
        'weighing' => 10,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity140 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective20,
        'product_id' =>$idobjectiveproduct141,
        'name' => '100% de cumplimiento del plan de adquisiones del sistema de información bibliografico - SIB de la Entidad',
        'goal_1' => 100,
        'goal_2' => 100,
        'goal_3' => 100,
        'goal_4' => 100,
        'goal' => 400,
        'weighing' => 10,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity141 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective20,
        'product_id' =>$idobjectiveproduct142,
        'name' => 'Estudio de roles, perfiles y valoración salarial de la planta de cargos de Corpocaldas, realizado.',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 0,
        'goal' => 0,
        'weighing' => 10,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity142 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective20,
        'product_id' =>$idobjectiveproduct143,
        'name' => '20% de implementacion de acciones para el fortalecimiento del laboratorio de suelos',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 0,
        'goal' => 0,
        'weighing' => 10,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity143 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective20,
        'product_id' =>$idobjectiveproduct144,
        'name' => '100% Implementacion de las normas NIIF',
        'goal_1' => 100,
        'goal_2' => 100,
        'goal_3' => 100,
        'goal_4' => 0,
        'goal' => 300,
        'weighing' => 9,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity144 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective20,
        'product_id' =>$idobjectiveproduct145,
        'name' => 'Asignacion presupuestal ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 1,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity145 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective21,
        'product_id' =>$idobjectiveproduct146,
        'name' => ' 
      % del pasivo de permisos y trámites ambientales, resueltos',
        'goal_1' => 4,
        'goal_2' => 4,
        'goal_3' => 4,
        'goal_4' => 4,
        'goal' => 16,
        'weighing' => 10,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity146 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective21,
        'product_id' =>$idobjectiveproduct147,
        'name' => '60% del pasivo de permisos y trámites ambientales resueltos  (con personal de planta)',
        'goal_1' => 6,
        'goal_2' => 6,
        'goal_3' => 6,
        'goal_4' => 6,
        'goal' => 24,
        'weighing' => 10,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity147 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective21,
        'product_id' =>$idobjectiveproduct148,
        'name' => '28% de permisos y trámites ambientales, resueltos',
        'goal_1' => 28,
        'goal_2' => 28,
        'goal_3' => 28,
        'goal_4' => 28,
        'goal' => 112,
        'weighing' => 10,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity148 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective21,
        'product_id' =>$idobjectiveproduct149,
        'name' => '42% de permisos y trámites ambientales resueltos (con personal de planta)',
        'goal_1' => 42,
        'goal_2' => 42,
        'goal_3' => 42,
        'goal_4' => 42,
        'goal' => 168,
        'weighing' => 10,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity149 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective21,
        'product_id' =>$idobjectiveproduct150,
        'name' => '100% de ejecución del programa de seguimiento y control',
        'goal_1' => 100,
        'goal_2' => 100,
        'goal_3' => 100,
        'goal_4' => 100,
        'goal' => 400,
        'weighing' => 10,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity150 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective21,
        'product_id' =>$idobjectiveproduct151,
        'name' => '100% de valoración a las solicitudes de legalización o de formalización de minería tradicional rechazadas, para  imponer cuando aplique, las medidas de restauración, recuperación y rehabilitación ambiental de las áreas afectadas por actividades mineras',
        'goal_1' => 100,
        'goal_2' => 100,
        'goal_3' => 100,
        'goal_4' => 100,
        'goal' => 400,
        'weighing' => 10,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity151 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective21,
        'product_id' =>$idobjectiveproduct152,
        'name' => '60% de procesos sancionatorios con actuación',
        'goal_1' => 60,
        'goal_2' => 60,
        'goal_3' => 60,
        'goal_4' => 40,
        'goal' => 220,
        'weighing' => 10,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity152 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective21,
        'product_id' =>$idobjectiveproduct153,
        'name' => '40% de los procesos sancionatorio con actuación (con personal de planta)',
        'goal_1' => 40,
        'goal_2' => 40,
        'goal_3' => 40,
        'goal_4' => 5,
        'goal' => 125,
        'weighing' => 10,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity153 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective21,
        'product_id' =>$idobjectiveproduct154,
        'name' => '21 Operativos de control de fuentes móviles ejecutados',
        'goal_1' => 15,
        'goal_2' => 15,
        'goal_3' => 15,
        'goal_4' => 6,
        'goal' => 51,
        'weighing' => 10,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity154 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective21,
        'product_id' =>$idobjectiveproduct155,
        'name' => 'Estrategia de Prevencion Seguimiento y vigilancia de la Biodiversidad, aplicada',
        'goal_1' => 16,
        'goal_2' => 16,
        'goal_3' => 16,
        'goal_4' => 28,
        'goal' => 76,
        'weighing' => 9,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity155 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective21,
        'product_id' =>$idobjectiveproduct156,
        'name' => 'Asignacion presupuestal ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 1,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity156 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective22,
        'product_id' =>$idobjectiveproduct157,
        'name' => 'Fomentar asistencia tecnica para la adecuada incorporación de la planificación ambiental territorial  en los instrumentos de planificación territorial municipal,subregional  y departamental ',
        'goal_1' => 30,
        'goal_2' => 30,
        'goal_3' => 30,
        'goal_4' => 30,
        'goal' => 120,
        'weighing' => 20,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity157 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective22,
        'product_id' =>$idobjectiveproduct158,
        'name' => 'POMCAS Formulados',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 20,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity158 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective22,
        'product_id' =>$idobjectiveproduct159,
        'name' => 'Herramienta de seguimiento a la ejecución de 8 POMCAS,  implementada',
        'goal_1' => 2,
        'goal_2' => 2,
        'goal_3' => 2,
        'goal_4' => 8,
        'goal' => 14,
        'weighing' => 20,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity159 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective22,
        'product_id' =>$idobjectiveproduct160,
        'name' => '2 Procesos del Sistema nacional de areas protegidas, apoyados',
        'goal_1' => 2,
        'goal_2' => 2,
        'goal_3' => 2,
        'goal_4' => 2,
        'goal' => 8,
        'weighing' => 20,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity160 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective22,
        'product_id' =>$idobjectiveproduct161,
        'name' => 'Estructura Ecologica Principal EEP a escala semidetallada definida para 3 subregiones',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 1,
        'goal' => 1,
        'weighing' => 19,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity161 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective22,
        'product_id' =>$idobjectiveproduct162,
        'name' => 'Asignacion presupuestal ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 1,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity162 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective23,
        'product_id' =>$idobjectiveproduct163,
        'name' => '  

      # de Redes de monitoreo ambiental de Manizales, funcionando',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 3,
        'goal' => 3,
        'weighing' => 33,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity163 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective23,
        'product_id' =>$idobjectiveproduct164,
        'name' => 'Estudios en zonas identificadas en riesgo Manizales, terminados.',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 1,
        'goal' => 1,
        'weighing' => 33,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity164 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective23,
        'product_id' =>$idobjectiveproduct165,
        'name' => 'No. de campañas de educación y sensibilización, para la transferencia de tecnología en el tema de riesgo, en Manizales.',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 1,
        'goal' => 1,
        'weighing' => 33,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity165 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective23,
        'product_id' =>$idobjectiveproduct166,
        'name' => 'Asignacion presupuestal ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 1,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity166 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective24,
        'product_id' =>$idobjectiveproduct167,
        'name' => '100% Agenda de Gestión Integral del Riesgo y Adaptación a la Variabilidad Climática en el municipio de Manizales, formulada y estructurada.',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 100,
        'goal' => 100,
        'weighing' => 50,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity167 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective24,
        'product_id' =>$idobjectiveproduct168,
        'name' => 'Sectores atendidos con estudios y acciones de reducción del riesgo ambiental en el municipio de manizales',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 3,
        'goal' => 3,
        'weighing' => 49,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity168 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective24,
        'product_id' =>$idobjectiveproduct169,
        'name' => 'Asignacion presupuestal ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 1,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity169 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective25,
        'product_id' =>$idobjectiveproduct170,
        'name' => 'M2 de área intervenida con obras para prevención y/o mitigacion del riesgo, en área urbana',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 4400,
        'goal' => 4400,
        'weighing' => 25,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity170 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective25,
        'product_id' =>$idobjectiveproduct171,
        'name' => 'M2 de area intervenida con obras para prevención y/o mitigación del riesgo, en área rural',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 2976,
        'goal' => 2976,
        'weighing' => 25,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity171 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective25,
        'product_id' =>$idobjectiveproduct172,
        'name' => 'Espacio físico para la atención del 100% de casos de rescate, entregas voluntarias y decomisos de fauna silvestre en la ciudad de manizales.',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 0,
        'goal' => 0,
        'weighing' => 25,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity172 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective25,
        'product_id' =>$idobjectiveproduct173,
        'name' => 'Programa Guardianas de la Ladera en Manizales, implementado',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 1,
        'goal' => 1,
        'weighing' => 24,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity173 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective25,
        'product_id' =>$idobjectiveproduct174,
        'name' => 'Asignacion presupuestal ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 1,
         'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity174 = DB::getPdo()->lastInsertId();



                  
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity1,
          'year' =>1,
          'value' => 0.29,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia1 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity2,
          'year' =>1,
          'value' => 0.3,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia2 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity3,
          'year' =>1,
          'value' => 14,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia3 = DB::getPdo()->lastInsertId(); 






         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity10,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia10 = DB::getPdo()->lastInsertId(); 

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
          'value' => 414,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia13 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity14,
          'year' =>1,
          'value' => 11448,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia14 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity15,
          'year' =>1,
          'value' => 0.281,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia15 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity16,
          'year' =>1,
          'value' => 11665,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia16 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity17,
          'year' =>1,
          'value' => 10398,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia17 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity18,
          'year' =>1,
          'value' => 26181,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia18 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity19,
          'year' =>1,
          'value' => 0.8245,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia19 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity20,
          'year' =>1,
          'value' => 0.3,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia20 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity21,
          'year' =>1,
          'value' => 158894,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia21 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity22,
          'year' =>1,
          'value' => 10.56,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia22 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity23,
          'year' =>1,
          'value' => 0.3277,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia23 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity24,
          'year' =>1,
          'value' => 0.2878,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia24 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity25,
          'year' =>1,
          'value' => 30,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia25 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity27,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia27 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity29,
          'year' =>1,
          'value' => 0.2766,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia29 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity30,
          'year' =>1,
          'value' => 0.7772,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia30 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity31,
          'year' =>1,
          'value' => 1.5,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia31 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity32,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia32 = DB::getPdo()->lastInsertId(); 


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
          'value' => 21375,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia36 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity39,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia39 = DB::getPdo()->lastInsertId(); 


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
          'value' => 0.3,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia43 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity44,
          'year' =>1,
          'value' => 0.3,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia44 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity45,
          'year' =>1,
          'value' => 0.8985,
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
          'value' => 0.2974,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia47 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity48,
          'year' =>1,
          'value' => 0.3,
          'description' => '',
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
          'value' => 579866,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia50 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity51,
          'year' =>1,
          'value' => 29.79,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia51 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity52,
          'year' =>1,
          'value' => 2180796,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia52 = DB::getPdo()->lastInsertId(); 
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
          'value' => 0.3,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia55 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity57,
          'year' =>1,
          'value' => 1.5,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia57 = DB::getPdo()->lastInsertId(); 

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
          'value' => 67636618,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia60 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity61,
          'year' =>1,
          'value' => 1477,
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
          'activity_id' => $idactivity64,
          'year' =>1,
          'value' => 68.31,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia64 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity65,
          'year' =>1,
          'value' => 24246,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia65 = DB::getPdo()->lastInsertId(); 

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
          'value' => 1483,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia68 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity70,
          'year' =>1,
          'value' => 17868,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia70 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity71,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia71 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity72,
          'year' =>1,
          'value' => 3,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia72 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity73,
          'year' =>1,
          'value' => 15,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia73 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity74,
          'year' =>1,
          'value' => 0.6,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia74 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity75,
          'year' =>1,
          'value' => 0.3,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia75 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity76,
          'year' =>1,
          'value' => 0.2438,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia76 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity77,
          'year' =>1,
          'value' => 0.2971,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia77 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity78,
          'year' =>1,
          'value' => 0.0324,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia78 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity79,
          'year' =>1,
          'value' => 0.3,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia79 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity80,
          'year' =>1,
          'value' => 0.3,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia80 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity81,
          'year' =>1,
          'value' => 0.5982,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia81 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity82,
          'year' =>1,
          'value' => 0.5982,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia82 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity83,
          'year' =>1,
          'value' => 112.44,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia83 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity84,
          'year' =>1,
          'value' => 77.52,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia84 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity85,
          'year' =>1,
          'value' => 0.5998,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia85 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity86,
          'year' =>1,
          'value' => 0.5998,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia86 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity87,
          'year' =>1,
          'value' => 0.3,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia87 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity88,
          'year' =>1,
          'value' => 0.6,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia88 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity89,
          'year' =>1,
          'value' => 0.3,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia89 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity90,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia90 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity91,
          'year' =>1,
          'value' => 10472,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia91 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity94,
          'year' =>1,
          'value' => 5,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia94 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity96,
          'year' =>1,
          'value' => 5139,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia96 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity98,
          'year' =>1,
          'value' => 2275,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia98 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity99,
          'year' =>1,
          'value' => 3821,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia99 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity100,
          'year' =>1,
          'value' => 11365,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia100 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity101,
          'year' =>1,
          'value' => 0.4546,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia101 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity102,
          'year' =>1,
          'value' => 21492,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia102 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity103,
          'year' =>1,
          'value' => 6.5,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia103 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity104,
          'year' =>1,
          'value' => 28.95,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia104 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity105,
          'year' =>1,
          'value' => 0.6,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia105 = DB::getPdo()->lastInsertId(); 


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
          'value' => 11048,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia109 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity110,
          'year' =>1,
          'value' => 12852,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia110 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity112,
          'year' =>1,
          'value' => 0.5752,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia112 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity113,
          'year' =>1,
          'value' => 0.6,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia113 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity115,
          'year' =>1,
          'value' => 0.3966,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia115 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity116,
          'year' =>1,
          'value' => 0.4277,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia116 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity117,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia117 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity118,
          'year' =>1,
          'value' => 4224,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia118 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity119,
          'year' =>1,
          'value' => 90165,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia119 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity120,
          'year' =>1,
          'value' => 35976,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia120 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity121,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia121 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity122,
          'year' =>1,
          'value' => 0.3093,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia122 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity123,
          'year' =>1,
          'value' => 0.296,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia123 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity124,
          'year' =>1,
          'value' => 6,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia124 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity125,
          'year' =>1,
          'value' => 0.3298,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia125 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity126,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia126 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity127,
          'year' =>1,
          'value' => 12.75,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia127 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity128,
          'year' =>1,
          'value' => 191125,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia128 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity129,
          'year' =>1,
          'value' => 3114,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia129 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity130,
          'year' =>1,
          'value' => 2465,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia130 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity131,
          'year' =>1,
          'value' => 0.3,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia131 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity132,
          'year' =>1,
          'value' => 56.73,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia132 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity134,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia134 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity135,
          'year' =>1,
          'value' => 37.05,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia135 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity136,
          'year' =>1,
          'value' => 26.15,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia136 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity138,
          'year' =>1,
          'value' => 8472,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia138 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity139,
          'year' =>1,
          'value' => 42175,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia139 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity140,
          'year' =>1,
          'value' => 16.66,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia140 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity141,
          'year' =>1,
          'value' => 100,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia141 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity144,
          'year' =>1,
          'value' => 25,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia144 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity145,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia145 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity146,
          'year' =>1,
          'value' => 20248,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia146 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity148,
          'year' =>1,
          'value' => 16.45,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia148 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity150,
          'year' =>1,
          'value' => 32.1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia150 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity151,
          'year' =>1,
          'value' => 30,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia151 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity152,
          'year' =>1,
          'value' => 44838,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia152 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity154,
          'year' =>1,
          'value' => 4.5,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia154 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity155,
          'year' =>1,
          'value' => 120464,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia155 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity156,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia156 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity157,
          'year' =>1,
          'value' => 4674,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia157 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity158,
          'year' =>1,
          'value' => 0.3092,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia158 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity160,
          'year' =>1,
          'value' => 0.552,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia160 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity162,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia162 = DB::getPdo()->lastInsertId(); 



         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity166,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia166 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity169,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia169 = DB::getPdo()->lastInsertId(); 




         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity174,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia174 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity1,
          'year' =>2,
          'value' => 0.9708,
          'description' => 'La contratación necesaria para el desarrollo de las actividades de esta meta, solo se pudo realizar entre el tercer y el cuarto trimeste del año 2017. Las actividades se encuentran en ejecución y los recursos fueron apropiados en reserva.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia175 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity2,
          'year' =>2,
          'value' => 1,
          'description' => 'La contratación necesaria para el desarrollo de las actividades de esta meta, solo se pudo realizar entre el tercer y el cuarto trimeste del año 2017. Las actividades se encuentran en ejecución y los recursos fueron apropiados en reserva.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia176 = DB::getPdo()->lastInsertId(); 







         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity10,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia184 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity12,
          'year' =>2,
          'value' => 1,
          'description' => 'Esta Meta no fue programada para la vigencia 2017.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia186 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity13,
          'year' =>2,
          'value' => 2236,
          'description' => 'La contratación necesaria para el desarrollo de las actividades de esta meta, solo se pudo realizar entre el tercer y el cuarto trimeste del año 2017. Las actividades se encuentran en ejecución y los recursos fueron apropiados en reserva.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia187 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity14,
          'year' =>2,
          'value' => 2624328,
          'description' => 'La contratación necesaria para el desarrollo de las actividades de esta meta, solo se pudo realizar entre el tercer y el cuarto trimeste del año 2017. Las actividades se encuentran en ejecución y los recursos fueron apropiados en reserva.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia188 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity15,
          'year' =>2,
          'value' => 0.6552,
          'description' => 'La meta se planeó para 2 especies; se cumplió con tres especies de  fauna silvestre (Garzas,Pumas y Caracol Africano)',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia189 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity16,
          'year' =>2,
          'value' => 3889,
          'description' => 'La contratación necesaria para el desarrollo de las actividades de esta meta, solo se pudo realizar entre el tercer y el cuarto trimeste del año 2017. Las actividades se encuentran en ejecución y los recursos fueron apropiados en reserva.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia190 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity17,
          'year' =>2,
          'value' => 39492,
          'description' => 'Se fortaleció la producción de viveros en los municipios de Manizales, Villamaría, Manzanares, Pensilvania y Chinchiná',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia191 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity18,
          'year' =>2,
          'value' => 27507,
          'description' => 'Los tres CAVR que coordina la Corporación se encontraban operando al 100%',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia192 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity19,
          'year' =>2,
          'value' => 0.8295,
          'description' => 'El CAV de flora operó al 100%',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia193 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity20,
          'year' =>2,
          'value' => 1,
          'description' => 'Se apoyó el Proyecto Forestal Río Magdalena, se desarrollaron 145 visitas tecnicas en el componente de biodiversidad, entre otras.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia194 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity21,
          'year' =>2,
          'value' => 2828585,
          'description' => 'La contratación necesaria para el desarrollo de las actividades de esta meta, solo se pudo realizar entre el tercer y el cuarto trimeste del año 2017. Las actividades se encuentran en ejecución y los recursos fueron apropiados en reserva.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia195 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity22,
          'year' =>2,
          'value' => 440.02,
          'description' => 'La meta planeada fueron 30 asesorías, pero se lograron realizar 48 en el proceso contractual.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia196 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity23,
          'year' =>2,
          'value' => 0.9038,
          'description' => 'Esta Meta no fue programada para la vigencia 2017.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia197 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity24,
          'year' =>2,
          'value' => 0.9595,
          'description' => 'Se implementó un Esquema de  Pago por Servicios Ambientales, el cual esta en  ejecución, realizando la compensación del proyecto Banco2 a 73 familias a través de difrenetes convenios.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia198 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity25,
          'year' =>2,
          'value' => 99.99,
          'description' => 'La aprobación por parte del Consejo Directivo para participar en la constitución de la Corporación, se obtuvo por medio del acuerdo 30 del 07 de noviembre de 2017,  en e cual se autorizó a Corpocaldas
        a participar en la Constitución de la Corporación Cuenca río Chinchiná -y entregar como aportes de constitución de la misma, la suma de
        VEINTE MILLONES DE PESOS.  No obstante, por condiciones de trámites, la constitución jurídica se realizará durante el 2018 y posterior a ello se podrá hacer el desembolso del recurso indicado.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia199 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity27,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia201 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity29,
          'year' =>2,
          'value' => 18436,
          'description' => 'Se realizó el fomento y estabecimiento de sistemassostenibles agroforestales en Victoria, 12 beneficiarios y en Samaná 14',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia203 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity30,
          'year' =>2,
          'value' => 2,
          'description' => 'Se apoya 4 modelos de biocomercio, incluyendo el programa de Ventanilla verde paara actualizar la base de datos de los productores enmarcados en algunas de las categorías establecidas en los Negocios verdes',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia204 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity31,
          'year' =>2,
          'value' => 5,
          'description' => 'Esta Meta no fue programada para la vigencia 2017.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia205 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity32,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia206 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity35,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia209 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity36,
          'year' =>2,
          'value' => 26547,
          'description' => 'Se planearon 2 sectores productivos, no obstante se logro implementar mecanismos de producción más limpia en 4 sectores: Minero, construcción,metalmecánico, productos cárnicos y subproductos  lácteos.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia210 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity39,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia213 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity42,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia216 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity43,
          'year' =>2,
          'value' => 1,
          'description' => 'Se ejecutaron actividades para consolidar y monitorear 2 redes climáticas con los grupos locales del clima en 10 municipios del departamento de Caldas.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia217 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity44,
          'year' =>2,
          'value' => 1,
          'description' => 'Se realizó el monitoreo  a 2 experiencias piloto a medidas de adapatación al cambio climático: Caña Panelera (Manzanares), abejas meliponas(Victoria), Sistemas silvopastoriles (Viterbo y Manizales), café (Anserma).',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia218 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity45,
          'year' =>2,
          'value' => 3,
          'description' => 'Esta Meta no fue programada para la vigencia 2017.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia219 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity46,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia220 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity47,
          'year' =>2,
          'value' => 0.9947,
          'description' => 'La contratación necesaria para el desarrollo de las actividades de esta meta, solo se pudo realizar entre el tercer y el cuarto trimeste del año 2017. Las actividades se encuentran en ejecución y los recursos fueron apropiados en reserva.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia221 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity48,
          'year' =>2,
          'value' => 1,
          'description' => 'Esta Meta no fue programada para la vigencia 2017.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia222 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity49,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia223 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity50,
          'year' =>2,
          'value' => 1932822,
          'description' => 'Este avance corresponde a Obras de Saneamiento Basico  firmadoa através de Convenio interadministrativos con el comité de cafeteros , el cual se firmó en el segundo semestre de 2017.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia224 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity51,
          'year' =>2,
          'value' => 99.3,
          'description' => 'No se contó con disponibilidad presupuestal por subejecución de tasa retributiva.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia225 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity52,
          'year' =>2,
          'value' => 3159943,
          'description' => 'Este avance corresponde a Obras de Saneamiento Basico  firmadoa através de Convenio interadministrativos con el comité de cafeteros , el cual se firmó en el segundo semestre de 2017.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia226 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity53,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia227 = DB::getPdo()->lastInsertId(); 



         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity57,
          'year' =>2,
          'value' => 5,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia231 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity58,
          'year' =>2,
          'value' => 1,
          'description' => '*Mediante Acuerdo 10 de 2017, se realiza una modificación al presupuesto inicialmente apropiado para    Programa IV',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia232 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity59,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia233 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity60,
          'year' =>2,
          'value' => 169711514,
          'description' => 'Convenio con entes territoriales que iniciaron ejecución en el segundo semestre.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia234 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity61,
          'year' =>2,
          'value' => 40405,
          'description' => 'Se adelantó el programa de mantenimiento para obras de Áreas de Tratamiento Geotécnico- ATG',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia235 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity62,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia236 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity64,
          'year' =>2,
          'value' => 83.16,
          'description' => 'Se realizaron diferentes actividades para mitigar la amenaza y la vulnerabilidad en el departamento de Caldas, previniendo la ocurrencia de los incendios foestales, actividades soportadas en el Plan de Prevención Mitigación y Contingencias de Incendios Forestales',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia238 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity65,
          'year' =>2,
          'value' => 44616,
          'description' => 'Esta Meta no fue programada para la vigencia 2017.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia239 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity67,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia241 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity68,
          'year' =>2,
          'value' => 3987,
          'description' => 'Se apoyaron 4 mesas ambientales en los municipios de Supía, Anserma, Riosucio con comunidades indígenas.  El restante se encuentra en ejecución por tratarse de actividades que lograron contratarse sólo hasta el 2do semestre y se extienden hasta el 1er semestre de 2018; para lo cual se constituyo la respectiva reserva presupuestal.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia242 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity70,
          'year' =>2,
          'value' => 50532,
          'description' => 'Se vincularon 6  instituciones educativas para el desarrollo de los PRAE y PROCEDA; Instituciones educativas de la vereda Obispo- Supía y el corregimiento de Arauca- Palestina.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia244 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity71,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia245 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity72,
          'year' =>2,
          'value' => 10,
          'description' => 'La contratación necesaria para el desarrollo de las actividades de esta meta, solo se pudo realizar entre el tercer y el cuarto trimeste del año 2017. Las actividades se encuentran en ejecución y los recursos fueron apropiados en reserva.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia246 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity73,
          'year' =>2,
          'value' => 50,
          'description' => 'La contratación necesaria para el desarrollo de las actividades de esta meta, solo se pudo realizar entre el tercer y el cuarto trimeste del año 2017. Las actividades se encuentran en ejecución y los recursos fueron apropiados en reserva.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia247 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity74,
          'year' =>2,
          'value' => 12574,
          'description' => 'La contratación necesaria para el desarrollo de las actividades de esta meta, solo se pudo realizar entre el tercer y el cuarto trimeste del año 2017. Las actividades se encuentran en ejecución y los recursos fueron apropiados en reserva.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia248 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity75,
          'year' =>2,
          'value' => 0.6287,
          'description' => 'Subejecucion de la fuente de financiación.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia249 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity76,
          'year' =>2,
          'value' => 0.7964,
          'description' => 'La contratación necesaria para el desarrollo de las actividades de esta meta, solo se pudo realizar entre el tercer y el cuarto trimeste del año 2017. Las actividades se encuentran en ejecución y los recursos fueron apropiados en reserva.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia250 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity77,
          'year' =>2,
          'value' => 0.9896,
          'description' => 'La contratación necesaria para el desarrollo de las actividades de esta meta, solo se pudo realizar entre el tercer y el cuarto trimeste del año 2017. Las actividades se encuentran en ejecución y los recursos fueron apropiados en reserva.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia251 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity78,
          'year' =>2,
          'value' => 2,
          'description' => 'La contratación necesaria para el desarrollo de las actividades de esta meta, solo se pudo realizar entre el tercer y el cuarto trimeste del año 2017. Las actividades se encuentran en ejecución y los recursos fueron apropiados en reserva.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia252 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity79,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia253 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity80,
          'year' =>2,
          'value' => 1,
          'description' => 'Desarrollo de 9 capacitaciones, 5 en RESPEL y 4 en residuos de aprovechamiento de reciclaje(municipios de Riosucio, Supía, La dorada, Victoria y Marmato).',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia254 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity81,
          'year' =>2,
          'value' => 19932,
          'description' => 'La contratación necesaria para el desarrollo de las actividades de esta meta, solo se pudo realizar entre el tercer y el cuarto trimeste del año 2017. Las actividades se encuentran en ejecución y los recursos fueron apropiados en reserva.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia255 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity83,
          'year' =>2,
          'value' => 200.49,
          'description' => 'se logró ejecutar 80 mts cuadrados mas de lo previsto por el proceso contractual.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia257 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity84,
          'year' =>2,
          'value' => 77.52,
          'description' => 'La contratación necesaria para el desarrollo de las actividades de esta meta, solo se pudo realizar entre el tercer y el cuarto trimeste del año 2017. Las actividades se encuentran en ejecución y los recursos fueron apropiados en reserva.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia258 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity85,
          'year' =>2,
          'value' => 19692,
          'description' => 'La contratación necesaria para el desarrollo de las actividades de esta meta, solo se pudo realizar entre el tercer y el cuarto trimeste del año 2017. Las actividades se encuentran en ejecución y los recursos fueron apropiados en reserva.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia259 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity86,
          'year' =>2,
          'value' => 19692,
          'description' => 'La contratación necesaria para el desarrollo de las actividades de esta meta, solo se pudo realizar entre el tercer y el cuarto trimeste del año 2017. Las actividades se encuentran en ejecución y los recursos fueron apropiados en reserva.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia260 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity87,
          'year' =>2,
          'value' => 0.9993,
          'description' => 'La contratación necesaria para el desarrollo de las actividades de esta meta, solo se pudo realizar entre el tercer y el cuarto trimeste del año 2017. Las actividades se encuentran en ejecución y los recursos fueron apropiados en reserva.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia261 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity88,
          'year' =>2,
          'value' => 18648,
          'description' => 'La contratación necesaria para el desarrollo de las actividades de esta meta, solo se pudo realizar entre el tercer y el cuarto trimeste del año 2017. Las actividades se encuentran en ejecución y los recursos fueron apropiados en reserva.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia262 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity89,
          'year' =>2,
          'value' => 0.9869,
          'description' => 'La contratación necesaria para el desarrollo de las actividades de esta meta, solo se pudo realizar entre el tercer y el cuarto trimeste del año 2017. Las actividades se encuentran en ejecución y los recursos fueron apropiados en reserva.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia263 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity90,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia264 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity91,
          'year' =>2,
          'value' => 163044,
          'description' => 'Proceso de contratación desierto.  Se atendieron las actividades con la capacidad instalada de la corporación y la coparticipación de los entres territoriales.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia265 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity94,
          'year' =>2,
          'value' => 5,
          'description' => 'En el proceso de ejecución de la estrategia, se logró la vinculación de 10 instituciones educativas.
        ',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia268 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity96,
          'year' =>2,
          'value' => 17133,
          'description' => 'Se ejecuto el 72% de la meta planeada, donde se adelantaron las reuniones de consolidación del Comité Departamental para la Gestión del Riesgo de Desastres del Sector Educativo CMGRDSE .  Se realización 6 talleres subregionales con los docentes líderes de los proyectos ambientales y representantes administrativos de las instituciones educativas del departamento. Se realizaron  actividades de acompañamiento puntual a  5  I.E y  2 grupos comunitarios',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia270 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity98,
          'year' =>2,
          'value' => 4389,
          'description' => 'Se generaron espacios de socialización de la gestión de los comités de educación ambiental municipales en los diferentes escenarios locales y subregionales. Y a su vez se apoyaron y acompañaron varios grupos ambientales, para alcanzar el 80% de ejecucion de la meta propuesta',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia272 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity99,
          'year' =>2,
          'value' => 34708,
          'description' => 'se realizaron diferentes actividades que  permitieron  :  desarrollar espacios lúdicos, recreativos, culturales y académicos, para  dinamizar la educación ambiental, de esta forma se alcanzo un 86% de cumplimiento de la meta.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia273 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity100,
          'year' =>2,
          'value' => 3564,
          'description' => 'mediante la ejcucion de un proyecto PROCEDA se alcanzo el 50% de ejecucion de la meta, sin embargo, se realizaron 32 talleres en 8 veredas del municipios de Manizales , con el objetivo de promover una cultura de conservación y paz con niños y niñas del sector rural. ',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia274 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity101,
          'year' =>2,
          'value' => 14256,
          'description' => 'se  apoyo un proyecto de educación ambiental según iniciativa de las administracion municipal, a través de acciones de educación y participación comunitaria en el área urbana del Municipio de la Merced- Caldas ',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia275 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity102,
          'year' =>2,
          'value' => 6,
          'description' => 'Esta Meta no fue programada para la vigencia 2017.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia276 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity103,
          'year' =>2,
          'value' => 10,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia277 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity104,
          'year' =>2,
          'value' => 96.5,
          'description' => 'Esta Meta no fue programada para la vigencia 2017.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia278 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity105,
          'year' =>2,
          'value' => 2,
          'description' => 'La contratación necesaria para el desarrollo de las actividades de esta meta, solo se pudo realizar entre el tercer y el cuarto trimeste del año 2017. Las actividades se encuentran en ejecución y los recursos fueron apropiados en reserva.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia279 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity108,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia282 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity109,
          'year' =>2,
          'value' => 36824,
          'description' => 'Se fortalecieron 9 grupos ciudadanos de gestion ambiental, mediante logró el fortalecimiento y recuperación de los Consejos de Desarrollo sostenible de los municipios de la subregión Centro Sur de Caldas, Chinchiná, Palestina, Neira y Villamaría, entre otras entidades.
         ',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia283 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity110,
          'year' =>2,
          'value' => 38912,
          'description' => 'La contratación necesaria para el desarrollo de las actividades de esta meta, solo se pudo realizar entre el tercer y el cuarto trimeste del año 2017. Las actividades se encuentran en ejecución y los recursos fueron apropiados en reserva.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia284 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity112,
          'year' =>2,
          'value' => 19172,
          'description' => 'La contratación necesaria para el desarrollo de las actividades de esta meta, solo se pudo realizar entre el tercer y el cuarto trimeste del año 2017. Las actividades se encuentran en ejecución y los recursos fueron apropiados en reserva.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia286 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity113,
          'year' =>2,
          'value' => 2,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia287 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity115,
          'year' =>2,
          'value' => 0.46807,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia289 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity116,
          'year' =>2,
          'value' => 38328,
          'description' => 'se gestiono el 100% de las Estrategias de gestión socioambiental multisectorial PLANES DE ACCIÓN INTEGRAL -PAI. Mediante  alianzas por el agua y las 
        cuencas PACTOS y otras alianzas de gestión socio ambiental en caldas',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia290 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity117,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia291 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity118,
          'year' =>2,
          'value' => 8842,
          'description' => 'se alcanzo el 90 % de la meta esperada mediante la ejecucion de diferentes estrategias de comunicación formuladas, tales como  el XI Concurso de Fotografía Ambiental, la XII Semana Ambiental, 3 campañas institucionales ambientales, entre otras..',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia292 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity119,
          'year' =>2,
          'value' => 13383,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia293 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity120,
          'year' =>2,
          'value' => 56856,
          'description' => 'se alcanzo el cumplimiento de la meta, mediante la divulgacion de boletines de prensa, colectivos de comunicación, visibilidad corporativaen 52 espacios radiales, y la presentacion del plan de accion de Corpocaldas',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia294 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity121,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia295 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity122,
          'year' =>2,
          'value' => 0.9923,
          'description' => 'La contratación necesaria para el desarrollo de las actividades de esta meta, solo se pudo realizar entre el tercer y el cuarto trimeste del año 2017. Las actividades se encuentran en ejecución y los recursos fueron apropiados en reserva.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia296 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity123,
          'year' =>2,
          'value' => 3224,
          'description' => 'se cumplio con el objetivo de tener las redes de monitoreo ambiental funcionando para   68 estaciones en el río Chinchiná, 50 para la quebrada Manizales,  y 163 estaciones en diferentes fuentes hídricas receptoras de vertimientos en el departamento de Caldas',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia297 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity124,
          'year' =>2,
          'value' => 9.99,
          'description' => 'La contratación necesaria para el desarrollo de las actividades de esta meta, solo se pudo realizar entre el tercer y el cuarto trimeste del año 2017. Las actividades se encuentran en ejecución y los recursos fueron apropiados en reserva.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia298 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity125,
          'year' =>2,
          'value' => 21141,
          'description' => 'se realizo toda la contratacion para tener los estudios en zonas identificadas de riesgo, terminados, sin embargo aun no se tienen los productos de los mismos.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia299 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity126,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia300 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity127,
          'year' =>2,
          'value' => 23.25,
          'description' => 'Subejecucion de la fuente de financiación.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia301 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity128,
          'year' =>2,
          'value' => 216275,
          'description' => 'Subejecucion de la fuente de financiación.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia302 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity129,
          'year' =>2,
          'value' => 57312,
          'description' => 'Subejecucion de la fuente de financiación.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia303 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity130,
          'year' =>2,
          'value' => 5,
          'description' => 'La contratación necesaria para el desarrollo de las actividades de esta meta, solo se pudo realizar entre el tercer y el cuarto trimeste del año 2017. Las actividades se encuentran en ejecución y los recursos fueron apropiados en reserva.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia304 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity131,
          'year' =>2,
          'value' => 1,
          'description' => 'Subejecucion de la fuente de financiación.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia305 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity132,
          'year' =>2,
          'value' => 100,
          'description' => 'La contratación necesaria para el desarrollo de las actividades de esta meta, solo se pudo realizar entre el tercer y el cuarto trimeste del año 2017. Las actividades se encuentran en ejecución y los recursos fueron apropiados en reserva.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia306 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity134,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia308 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity135,
          'year' =>2,
          'value' => 39.48,
          'description' => 'Se alcanzo el objetivo de la meta, mediante la creación de los procedimientos, actualizacion de los instructivos de los equipos, creación de nuevos formatos y las cartas de control de las variables a acreditar, ademas se elaboraron los Planes de Acciones Correctivas y se registraron en el aplicativo Almera,  y ya fueron evaluados por parte de los auditores.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia309 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity136,
          'year' =>2,
          'value' => 78.62,
          'description' => 'Se alcanzo el 62% de la meta, actualmente se están implementando las acciones correctivas de las dos ultimas auditorias, con las auditorias se evalúo todas las actividades del laboratorio a nivel técnico, documental, organizacional y administrativo. Se amplían las variables acreditadas en las matrices agua y aire.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia310 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity138,
          'year' =>2,
          'value' => 9545,
          'description' => 'Subejecucion de la fuente de financiación.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia312 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity139,
          'year' =>2,
          'value' => 14055,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia313 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity140,
          'year' =>2,
          'value' => 43.03,
          'description' => 'La contratación necesaria para el desarrollo de las actividades de esta meta, solo se pudo realizar entre el tercer y el cuarto trimeste del año 2017. Las actividades se encuentran en ejecución y los recursos fueron apropiados en reserva.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia314 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity141,
          'year' =>2,
          'value' => 100,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia315 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity144,
          'year' =>2,
          'value' => 83.67,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia318 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity145,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia319 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity146,
          'year' =>2,
          'value' => 38864,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia320 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity147,
          'year' =>2,
          'value' => 6,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia321 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity148,
          'year' =>2,
          'value' => 270508,
          'description' => 'Se alcanzo la meta al 96%, puesto que se cumplio con 359 expedientes resueltos',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia322 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity149,
          'year' =>2,
          'value' => 42,
          'description' => 'Se alcanzon un cumplimiento del 73 % debido a que se resovieron 410 permisos y trámites ambientales ',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia323 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity150,
          'year' =>2,
          'value' => 99.21,
          'description' => 'Se atendieron 1438 solicitudes asociadas con el uso y aprovechamiento inadecuado y afectación de los recursos naturales y el medio ambiente, distribuidos temáticamente, Así mismo, con respecto al control de las explotaciones ilícitas de yacimientos mineros en el Departamento de Caldas, se efectuaron 12 acompañamientos a operativos organizados por autoridades como la Unidad de Delitos Contra el Medio Ambiente – SIJIN – Policía Nacional,  el CTI – Fiscalía General de la Nación y Ejercito Nacional
        ',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia324 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity151,
          'year' =>2,
          'value' => 100,
          'description' => 'se  valoraron todas las solicitudes de legalización o de formalización de minería tradicional rechazadas para alcanzar la meta en su totalidad.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia325 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity152,
          'year' =>2,
          'value' => 56844,
          'description' => 'La contratación necesaria para el desarrollo de las actividades de esta meta, solo se pudo realizar entre el tercer y el cuarto trimeste del año 2017. Las actividades se encuentran en ejecución y los recursos fueron apropiados en reserva.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia326 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity153,
          'year' =>2,
          'value' => 40,
          'description' => 'se cumplio la meta al 100% debido a las estrategias implementadas por parte de esta Corporación.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia327 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity154,
          'year' =>2,
          'value' => 9.75,
          'description' => 'Para la ejecucion de esta meta, se  modifico el presupuesto, por tal motivo el cumplimiento de la misma solo fue del 50%.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia328 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity155,
          'year' =>2,
          'value' => 12464,
          'description' => 'Se realizaron diferentes estrategias de prevencion, seguimiento comercializacion y en industrias de transformacion para cumplir con la meta planeada.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia329 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity156,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia330 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity157,
          'year' =>2,
          'value' => 15.57,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia331 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity158,
          'year' =>2,
          'value' => 0.7687,
          'description' => 'La contratación necesaria para el desarrollo de las actividades de esta meta, solo se pudo realizar entre el tercer y el cuarto trimeste del año 2017. Las actividades se encuentran en ejecución y los recursos fueron apropiados en reserva.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia332 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity160,
          'year' =>2,
          'value' => 1.84,
          'description' => 'la corporacion apoyo en el 2017 el Sidap Eje cafetero, y  Sidap Caldas , para alcanzar un cumplimento del 100% en la meta planeada.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia334 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity162,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia336 = DB::getPdo()->lastInsertId(); 



         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity166,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia340 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity169,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia343 = DB::getPdo()->lastInsertId(); 




         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity174,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia348 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity1,
          'year' =>3,
          'value' => 1,
          'description' => 'Durante la vigencia  2018 se terminan de ejecutar contratos de la vigencia 2017 y para 2018 se contrata en el último triemestre del año, por lo cual  el avance físico de las metas programadas durante este periodo es un poco bajo, ya que su avance se verá en el primer semestre de 2019.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia349 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity2,
          'year' =>3,
          'value' => 1,
          'description' => 'Durante la vigencia  2018 se terminan de ejecutar contratos de la vigencia 2017 y para 2018 se contrata en el último triemestre del año, por lo cual  el avance físico de las metas programadas durante este periodo es un poco bajo, ya que su avance se verá en el primer semestre de 2019.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia350 = DB::getPdo()->lastInsertId(); 







         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity10,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia358 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity12,
          'year' =>3,
          'value' => 1,
          'description' => 'Durante la vigencia  2018 se terminan de ejecutar contratos de la vigencia 2017 y para 2018 se contrata en el último triemestre del año, por lo cual  el avance físico de las metas programadas durante este periodo es un poco bajo, ya que su avance se verá en el primer semestre de 2019.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia360 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity13,
          'year' =>3,
          'value' => 2500,
          'description' => 'Durante la vigencia  2018 se terminan de ejecutar contratos de la vigencia 2017 y para 2018 se contrata en el último triemestre del año, por lo cual  el avance físico de las metas programadas durante este periodo es un poco bajo, ya que su avance se verá en el primer semestre de 2019.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia361 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity14,
          'year' =>3,
          'value' => 287,
          'description' => 'Durante la vigencia  2018 se terminan de ejecutar contratos de la vigencia 2017 y para 2018 se contrata en el último triemestre del año, por lo cual  el avance físico de las metas programadas durante este periodo es un poco bajo, ya que su avance se verá en el primer semestre de 2019.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia362 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity15,
          'year' =>3,
          'value' => 2,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia363 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity16,
          'year' =>3,
          'value' => 4,
          'description' => 'Durante la vigencia  2018 se terminan de ejecutar contratos de la vigencia 2017 y para 2018 se contrata en el último triemestre del año, por lo cual  el avance físico de las metas programadas durante este periodo es un poco bajo, ya que su avance se verá en el primer semestre de 2019.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia364 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity17,
          'year' =>3,
          'value' => 9,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia365 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity18,
          'year' =>3,
          'value' => 3,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia366 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity19,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia367 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity20,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia368 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity21,
          'year' =>3,
          'value' => 2828585,
          'description' => 'Para la vigencia de 2018 está Meta no está programada',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia369 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity22,
          'year' =>3,
          'value' => 490,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia370 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity23,
          'year' =>3,
          'value' => 0.9038,
          'description' => 'Para la vigencia de 2018 está Meta no está programada',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia371 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity24,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia372 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity25,
          'year' =>3,
          'value' => 100,
          'description' => 'Para la vigencia de 2018 está Meta no está programada.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia373 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity27,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia375 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity29,
          'year' =>3,
          'value' => 2,
          'description' => 'Durante la vigencia  2018 se terminan de ejecutar contratos de la vigencia 2017 y para 2018 se contrata en el último triemestre del año, por lo cual  el avance físico de las metas programadas durante este periodo es un poco bajo, ya que su avance se verá en el primer semestre de 2019.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia377 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity30,
          'year' =>3,
          'value' => 2,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia378 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity31,
          'year' =>3,
          'value' => 5,
          'description' => 'Para la vigencia de 2018 está Meta no esta programada',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia379 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity32,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia380 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity35,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia383 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity36,
          'year' =>3,
          'value' => 3,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia384 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity39,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia387 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity42,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia390 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity43,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia391 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity44,
          'year' =>3,
          'value' => 1,
          'description' => 'Para la vigencia de 2018 está Meta no esta programada',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia392 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity45,
          'year' =>3,
          'value' => 3,
          'description' => 'Para la vigencia de 2018 está Meta no esta programada',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia393 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity46,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia394 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity47,
          'year' =>3,
          'value' => 1,
          'description' => 'Durante la vigencia  2018 se terminan de ejecutar contratos de la vigencia 2017 y para 2018 se contrata en el último triemestre del año, por lo cual  el avance físico de las metas programadas durante este periodo es un poco bajo, ya que su avance se verá en el primer semestre de 2019.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia395 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity48,
          'year' =>3,
          'value' => 1,
          'description' => 'Para la vigencia de 2018 está Meta no esta programada',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia396 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity49,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia397 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity50,
          'year' =>3,
          'value' => 194,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia398 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity51,
          'year' =>3,
          'value' => 100,
          'description' => 'Durante la vigencia  2018 se terminan de ejecutar contratos de la vigencia 2017 y para 2018 se contrata en el último triemestre del año, por lo cual  el avance físico de las metas programadas durante este periodo es un poco bajo, ya que su avance se verá en el primer semestre de 2019.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia399 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity52,
          'year' =>3,
          'value' => 3159943,
          'description' => 'Durante la vigencia  2018 se terminan de ejecutar contratos de la vigencia 2017 y para 2018 se contrata en el último triemestre del año, por lo cual  el avance físico de las metas programadas durante este periodo es un poco bajo, ya que su avance se verá en el primer semestre de 2019.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia400 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity53,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia401 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity55,
          'year' =>3,
          'value' => 1,
          'description' => 'Para la vigencia 2018, esta meta no está programada.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia403 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity58,
          'year' =>3,
          'value' => 5,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia406 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity59,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia407 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity60,
          'year' =>3,
          'value' => 19999,
          'description' => 'Durante la vigencia  2018 se terminan de ejecutar contratos de la vigencia 2017 y para 2018 se contrata en el último triemestre del año, por lo cual  el avance físico de las metas programadas durante este periodo es un poco bajo, ya que su avance se verá en el primer semestre de 2019.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia408 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity61,
          'year' =>3,
          'value' => 5,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia409 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity62,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia410 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity63,
          'year' =>3,
          'value' => 7,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia411 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity64,
          'year' =>3,
          'value' => 100,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia412 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity65,
          'year' =>3,
          'value' => 6,
          'description' => 'Para la vigencia de 2018 está Meta no esta programada',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia413 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity67,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia415 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity68,
          'year' =>3,
          'value' => 5,
          'description' => 'Durante la vigencia  2018 se terminan de ejecutar contratos de la vigencia 2017 y para 2018 se contrata en el último triemestre del año, por lo cual  el avance físico de las metas programadas durante este periodo es un poco bajo, ya que su avance se verá en el primer semestre de 2019.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia416 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity70,
          'year' =>3,
          'value' => 6,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia418 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity71,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia419 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity74,
          'year' =>3,
          'value' => 10,
          'description' => 'Para la vigencia 2018 esta meta no está programada.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia422 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity75,
          'year' =>3,
          'value' => 50,
          'description' => 'Para la vigencia 2018 esta meta no está programada.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia423 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity76,
          'year' =>3,
          'value' => 2,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia424 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity77,
          'year' =>3,
          'value' => 1,
          'description' => 'Durante la vigencia  2018 se terminan de ejecutar contratos de la vigencia 2017 y para 2018 se contrata en el último triemestre del año, por lo cual  el avance físico de las metas programadas durante este periodo es un poco bajo, ya que su avance se verá en el primer semestre de 2019.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia425 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity78,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia426 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity79,
          'year' =>3,
          'value' => 1,
          'description' => 'Para la vigencia de 2018 está Meta no esta programada',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia427 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity80,
          'year' =>3,
          'value' => 2,
          'description' => 'Para la vigencia de 2018 está Meta no esta programada',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia428 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity81,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia429 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity82,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia430 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity83,
          'year' =>3,
          'value' => 19932,
          'description' => 'Para la vigencia de 2018 está Meta no esta programada',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia431 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity85,
          'year' =>3,
          'value' => 300,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia433 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity86,
          'year' =>3,
          'value' => 100,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia434 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity87,
          'year' =>3,
          'value' => 2,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia435 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity88,
          'year' =>3,
          'value' => 2,
          'description' => 'Para la vigencia de 2018 está Meta no esta programada',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia436 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity89,
          'year' =>3,
          'value' => 0.9993,
          'description' => 'Para la vigencia de 2018 está Meta no esta programada',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia437 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity90,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia438 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity91,
          'year' =>3,
          'value' => 28,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia439 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity94,
          'year' =>3,
          'value' => 5,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia442 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity96,
          'year' =>3,
          'value' => 30,
          'description' => 'Las actividades para alcanzar esta meta se realizaron sin recursos con personal de planta.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia444 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity98,
          'year' =>3,
          'value' => 5,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia446 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity99,
          'year' =>3,
          'value' => 4,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia447 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity100,
          'year' =>3,
          'value' => 5,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia448 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity101,
          'year' =>3,
          'value' => 2,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia449 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity102,
          'year' =>3,
          'value' => 6,
          'description' => 'Durante la vigencia  2018 se terminan de ejecutar contratos de la vigencia 2017 y para 2018 se contrata en el último triemestre del año, por lo cual  el avance físico de las metas programadas durante este periodo es un poco bajo, ya que su avance se verá en el primer semestre de 2019.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia450 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity103,
          'year' =>3,
          'value' => 10,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia451 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity104,
          'year' =>3,
          'value' => 100,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia452 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity105,
          'year' =>3,
          'value' => 2,
          'description' => 'Durante la vigencia  2018 se terminan de ejecutar contratos de la vigencia 2017 y para 2018 se contrata en el último triemestre del año, por lo cual  el avance físico de las metas programadas durante este periodo es un poco bajo, ya que su avance se verá en el primer semestre de 2019.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia453 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity108,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia456 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity109,
          'year' =>3,
          'value' => 4,
          'description' => 'Durante el primer semestre de 2018 se terminan de ejecutar contratos de la vigencia 2017 y debido a las restricciones en la contratación por la Ley de Garantías electorales (996 de 2005), que empezó a regir el 27 de enero y terminó   el 18 de junio, el avance físico de las metas programadas durante este periodo es bajo.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia457 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity110,
          'year' =>3,
          'value' => 4,
          'description' => 'Durante la vigencia  2018 se terminan de ejecutar contratos de la vigencia 2017 y para 2018 se contrata en el último triemestre del año, por lo cual  el avance físico de las metas programadas durante este periodo es un poco bajo, ya que su avance se verá en el primer semestre de 2019.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia458 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity112,
          'year' =>3,
          'value' => 2,
          'description' => 'Para la vigencia de 2018 está Meta no esta programada',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia460 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity113,
          'year' =>3,
          'value' => 2,
          'description' => 'Durante la vigencia  2018 se terminan de ejecutar contratos de la vigencia 2017 y para 2018 se contrata en el último triemestre del año, por lo cual  el avance físico de las metas programadas durante este periodo es un poco bajo, ya que su avance se verá en el primer semestre de 2019.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia461 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity114,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia462 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity115,
          'year' =>3,
          'value' => 1,
          'description' => 'Para la vigencia de 2018 está Meta no esta programada',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia463 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity116,
          'year' =>3,
          'value' => 4,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia464 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity117,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia465 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity118,
          'year' =>3,
          'value' => 10,
          'description' => 'Esta meta no pudo ejecutar el total de recursos apropiados porque tenia una fuente de destinación especifica.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia466 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity119,
          'year' =>3,
          'value' => 15,
          'description' => 'Esta meta no pudo ejecutar el total de recursos apropiados porque tenia una fuente de destinación especifica.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia467 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity120,
          'year' =>3,
          'value' => 12,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia468 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity121,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia469 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity122,
          'year' =>3,
          'value' => 1,
          'description' => 'Durante la vigencia  2018 se terminan de ejecutar contratos de la vigencia 2017 y para 2018 se contrata en el último triemestre del año, por lo cual  el avance físico de las metas programadas durante este periodo es un poco bajo, ya que su avance se verá en el primer semestre de 2019.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia470 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity123,
          'year' =>3,
          'value' => 4,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia471 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity124,
          'year' =>3,
          'value' => 20,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia472 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity125,
          'year' =>3,
          'value' => 3,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia473 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity126,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia474 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity127,
          'year' =>3,
          'value' => 25,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia475 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity128,
          'year' =>3,
          'value' => 25,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia476 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity129,
          'year' =>3,
          'value' => 6,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia477 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity130,
          'year' =>3,
          'value' => 5,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia478 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity131,
          'year' =>3,
          'value' => 1,
          'description' => 'Para la vigencia de 2018 está Meta no esta programada',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia479 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity132,
          'year' =>3,
          'value' => 100,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia480 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity134,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia482 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity135,
          'year' =>3,
          'value' => 100,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia483 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity136,
          'year' =>3,
          'value' => 100,
          'description' => 'Durante la vigencia  2018 se terminan de ejecutar contratos de la vigencia 2017 y para 2018 se contrata en el último triemestre del año, por lo cual  el avance físico de las metas programadas durante este periodo es un poco bajo, ya que su avance se verá en el primer semestre de 2019.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia484 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity138,
          'year' =>3,
          'value' => 10,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia486 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity139,
          'year' =>3,
          'value' => 25,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia487 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity140,
          'year' =>3,
          'value' => 100,
          'description' => 'Para lavigencia de 2018 está Meta no esta programada',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia488 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity141,
          'year' =>3,
          'value' => 100,
          'description' => 'En el 2018 esta meta no está programada.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia489 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity144,
          'year' =>3,
          'value' => 100,
          'description' => 'Para la vigencia de 2018 está Meta no esta programada',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia492 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity145,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia493 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity146,
          'year' =>3,
          'value' => 4,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia494 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity147,
          'year' =>3,
          'value' => 6,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia495 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity148,
          'year' =>3,
          'value' => 28,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia496 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity149,
          'year' =>3,
          'value' => 42,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia497 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity150,
          'year' =>3,
          'value' => 100,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia498 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity151,
          'year' =>3,
          'value' => 100,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia499 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity152,
          'year' =>3,
          'value' => 60,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia500 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity153,
          'year' =>3,
          'value' => 40,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia501 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity154,
          'year' =>3,
          'value' => 3,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia502 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity155,
          'year' =>3,
          'value' => 16,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia503 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity156,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia504 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity157,
          'year' =>3,
          'value' => 30,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia505 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity158,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia506 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity160,
          'year' =>3,
          'value' => 2,
          'description' => 'Para la vigencia 2018 está Meta no esta programada',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia508 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity162,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia510 = DB::getPdo()->lastInsertId(); 



         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity166,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia514 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity169,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia517 = DB::getPdo()->lastInsertId(); 




         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity174,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia522 = DB::getPdo()->lastInsertId(); 




         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity5,
          'year' =>4,
          'value' => 92,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia527 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity6,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia528 = DB::getPdo()->lastInsertId(); 



         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity10,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia532 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity11,
          'year' =>4,
          'value' => 4,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia533 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity12,
          'year' =>4,
          'value' => 1,
          'description' => 'A esta meta le fueron aprobadas Vigencias Futuras 2019 y 2020',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia534 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity13,
          'year' =>4,
          'value' => 1135,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia535 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity14,
          'year' =>4,
          'value' => 25,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia536 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity15,
          'year' =>4,
          'value' => 3,
          'description' => 'A esta meta le fueron aprobadas Vigencias Futuras 2019 y 2020',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia537 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity16,
          'year' =>4,
          'value' => 25,
          'description' => 'A esta meta le fueron aprobadas Vigencias Futuras 2019 y 2020',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia538 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity17,
          'year' =>4,
          'value' => 6,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia539 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity18,
          'year' =>4,
          'value' => 3,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia540 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity19,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia541 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity20,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia542 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity21,
          'year' =>4,
          'value' => 86,
          'description' => 'A esta meta le fueron aprobadas Vigencias Futuras 2019 y 2020',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia543 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity22,
          'year' =>4,
          'value' => 163,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia544 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity24,
          'year' =>4,
          'value' => 2,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia546 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity26,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia548 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity27,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia549 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity28,
          'year' =>4,
          'value' => 5,
          'description' => 'A esta meta le fueron aprobadas Vigencias Futuras 2019 y 2020',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia550 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity29,
          'year' =>4,
          'value' => 1,
          'description' => 'A esta meta le fueron aprobadas Vigencias Futuras 2019 y 2020',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia551 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity30,
          'year' =>4,
          'value' => 4,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia552 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity31,
          'year' =>4,
          'value' => 249975,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia553 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity32,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia554 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity33,
          'year' =>4,
          'value' => 2,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia555 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity35,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia557 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity36,
          'year' =>4,
          'value' => 3,
          'description' => 'A esta meta le fueron aprobadas Vigencias Futuras 2019 y 2020',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia558 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity37,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia559 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity38,
          'year' =>4,
          'value' => 2,
          'description' => 'A esta meta le fueron aprobadas Vigencias Futuras 2019 y 2020',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia560 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity39,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia561 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity41,
          'year' =>4,
          'value' => 2,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia563 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity42,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia564 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity43,
          'year' =>4,
          'value' => 14,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia565 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity44,
          'year' =>4,
          'value' => 5,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia566 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity45,
          'year' =>4,
          'value' => 3,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia567 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity46,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia568 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity47,
          'year' =>4,
          'value' => 1,
          'description' => 'A esta meta le fueron aprobadas Vigencias Futuras 2019 y 2020',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia569 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity49,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia571 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity50,
          'year' =>4,
          'value' => 196908,
          'description' => 'A esta meta le fueron aprobadas Vigencias Futuras 2019 y 2020',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia572 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity51,
          'year' =>4,
          'value' => 104,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia573 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity52,
          'year' =>4,
          'value' => 590,
          'description' => 'A esta meta le fueron aprobadas Vigencias Futuras 2019 y 2020',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia574 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity53,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia575 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity54,
          'year' =>4,
          'value' => 500,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia576 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity57,
          'year' =>4,
          'value' => 5,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia579 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity59,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia581 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity60,
          'year' =>4,
          'value' => 14355,
          'description' => 'A esta meta le fueron aprobadas Vigencias Futuras 2019 y 2020',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia582 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity61,
          'year' =>4,
          'value' => 11,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia583 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity62,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia584 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity63,
          'year' =>4,
          'value' => 9,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia585 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity64,
          'year' =>4,
          'value' => 100,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia586 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity66,
          'year' =>4,
          'value' => 8,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia588 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity67,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia589 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity68,
          'year' =>4,
          'value' => 5,
          'description' => 'Se ha avanzado en la formulación de la agenda que actualmente se encuentra en proceso de revisión y validación.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia590 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity70,
          'year' =>4,
          'value' => 6,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia592 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity71,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia593 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity72,
          'year' =>4,
          'value' => 14,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia594 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity73,
          'year' =>4,
          'value' => 50,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia595 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity74,
          'year' =>4,
          'value' => 2,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia596 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity75,
          'year' =>4,
          'value' => 3,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia597 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity76,
          'year' =>4,
          'value' => 4,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia598 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity77,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia599 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity78,
          'year' =>4,
          'value' => 2,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia600 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity79,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia601 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity80,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia602 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity83,
          'year' =>4,
          'value' => 200,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia605 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity84,
          'year' =>4,
          'value' => 100,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia606 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity85,
          'year' =>4,
          'value' => 2,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia607 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity87,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia609 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity89,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia611 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity90,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia612 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity91,
          'year' =>4,
          'value' => 28,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia613 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity92,
          'year' =>4,
          'value' => 6,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia614 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity93,
          'year' =>4,
          'value' => 2,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia615 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity94,
          'year' =>4,
          'value' => 5,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia616 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity95,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia617 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity96,
          'year' =>4,
          'value' => 80,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia618 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity97,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia619 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity98,
          'year' =>4,
          'value' => 5,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia620 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity99,
          'year' =>4,
          'value' => 5,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia621 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity100,
          'year' =>4,
          'value' => 8,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia622 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity101,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia623 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity102,
          'year' =>4,
          'value' => 4.2,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia624 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity103,
          'year' =>4,
          'value' => 100,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia625 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity105,
          'year' =>4,
          'value' => 6,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia627 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity106,
          'year' =>4,
          'value' => 25,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia628 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity107,
          'year' =>4,
          'value' => 25,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia629 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity108,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia630 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity109,
          'year' =>4,
          'value' => 8,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia631 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity110,
          'year' =>4,
          'value' => 8,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia632 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity111,
          'year' =>4,
          'value' => 7,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia633 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity112,
          'year' =>4,
          'value' => 4,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia634 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity113,
          'year' =>4,
          'value' => 3,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia635 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity114,
          'year' =>4,
          'value' => 2,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia636 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity115,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia637 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity116,
          'year' =>4,
          'value' => 4,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia638 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity117,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia639 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity118,
          'year' =>4,
          'value' => 10,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia640 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity119,
          'year' =>4,
          'value' => 15,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia641 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity120,
          'year' =>4,
          'value' => 18,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia642 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity121,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia643 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity122,
          'year' =>4,
          'value' => 40,
          'description' => 'A esta meta le fueron aprobadas Vigencias Futuras 2019 y 2020',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia644 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity123,
          'year' =>4,
          'value' => 2.25,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia645 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity124,
          'year' =>4,
          'value' => 7,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia646 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity125,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia647 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity126,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia648 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity127,
          'year' =>4,
          'value' => 25,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia649 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity128,
          'year' =>4,
          'value' => 25,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia650 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity129,
          'year' =>4,
          'value' => 6,
          'description' => 'A esta meta le fueron aprobadas Vigencias Futuras 2019 y 2020',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia651 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity130,
          'year' =>4,
          'value' => 3,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia652 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity131,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia653 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity132,
          'year' =>4,
          'value' => 100,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia654 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity134,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia656 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity135,
          'year' =>4,
          'value' => 100,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia657 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity136,
          'year' =>4,
          'value' => 100,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia658 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity138,
          'year' =>4,
          'value' => 60,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia660 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity139,
          'year' =>4,
          'value' => 25,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia661 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity140,
          'year' =>4,
          'value' => 100,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia662 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity141,
          'year' =>4,
          'value' => 100,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia663 = DB::getPdo()->lastInsertId(); 



         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity145,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia667 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity146,
          'year' =>4,
          'value' => 4,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia668 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity147,
          'year' =>4,
          'value' => 6,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia669 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity148,
          'year' =>4,
          'value' => 28,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia670 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity149,
          'year' =>4,
          'value' => 42,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia671 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity150,
          'year' =>4,
          'value' => 100,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia672 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity151,
          'year' =>4,
          'value' => 100,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia673 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity152,
          'year' =>4,
          'value' => 40,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia674 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity153,
          'year' =>4,
          'value' => 5,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia675 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity154,
          'year' =>4,
          'value' => 6,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia676 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity155,
          'year' =>4,
          'value' => 28,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia677 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity156,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia678 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity157,
          'year' =>4,
          'value' => 30,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia679 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity158,
          'year' =>4,
          'value' => 1,
          'description' => 'A esta meta le fueron aprobadas Vigencias Futuras 2019 ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia680 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity159,
          'year' =>4,
          'value' => 8,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia681 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity160,
          'year' =>4,
          'value' => 2,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia682 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity161,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia683 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity162,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia684 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity163,
          'year' =>4,
          'value' => 3,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia685 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity164,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia686 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity165,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia687 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity166,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia688 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity167,
          'year' =>4,
          'value' => 100,
          'description' => 'A esta meta le fueron aprobadas Vigencias Futuras 2019 y 2020',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia689 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity168,
          'year' =>4,
          'value' => 3,
          'description' => 'A esta meta le fueron aprobadas Vigencias Futuras 2019 y 2020',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia690 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity169,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia691 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity170,
          'year' =>4,
          'value' => 2860,
          'description' => 'A esta meta le fueron aprobadas Vigencias Futuras 2019 y 2020',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia692 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity171,
          'year' =>4,
          'value' => 854,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia693 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity173,
          'year' =>4,
          'value' => 1,
          'description' => 'A esta meta le fueron aprobadas Vigencias Futuras 2019 y 2020',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia695 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity174,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia696 = DB::getPdo()->lastInsertId(); 
                 
         DB::table('financing_sources')->insert([
          'father_id' => 11,
          'code' => '1.1.1.1.1.1.1.1',
          'name' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
          'description' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 18,
          ]);
          $idFuente2 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 58,
          'code' => '1.1.2.2.2.1.1',
          'name' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
          'description' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 18,
          ]);
          $idFuente3 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 79,
          'code' => '1.1.2.2.2.8.1',
          'name' => 'Otros servicios (vigencia actual)',
          'description' => 'Otros servicios (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 18,
          ]);
          $idFuente4 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 27,
          'code' => '1.1.2.1.1.1.1.1',
          'name' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia actual)',
          'description' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 18,
          ]);
          $idFuente5 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 208,
          'code' => '1.2.5.1.3',
          'name' => 'Otros Convenios',
          'description' => 'Otros Convenios',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 18,
          ]);
          $idFuente6 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 42,
          'code' => '1.1.2.2.1.1.1.1',
          'name' => 'Tasa retributiva (vigencia actual)',
          'description' => 'Tasa retributiva (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 18,
          ]);
          $idFuente8 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 45,
          'code' => '1.1.2.2.1.1.2.1',
          'name' => 'Tasa por el uso del agua (vigencia actual)',
          'description' => 'Tasa por el uso del agua (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 18,
          ]);
          $idFuente9 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 84,
          'code' => '1.1.2.3.1.1.1',
          'name' => 'Multas ambientales (vigencia actual)',
          'description' => 'Multas ambientales (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 18,
          ]);
          $idFuente11 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 79,
          'code' => '1.1.2.2.2.8.1',
          'name' => 'Otros servicios (vigencia actual)',
          'description' => 'Otros servicios (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 18,
          ]);
          $idFuente12 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 182,
          'code' => '1.2.3.4',
          'name' => 'Autorizado',
          'description' => 'Autorizado',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 18,
          ]);
          $idFuente13 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 188,
          'code' => '1.2.4.4',
          'name' => 'Recursos de crédito de proveedores',
          'description' => 'Recursos de crédito de proveedores',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 18,
          ]);
          $idFuente14 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 145,
          'code' => '1.2.2.6',
          'name' => 'Rendimientos financieros',
          'description' => 'Rendimientos financieros',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 18,
          ]);
          $idFuente15 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 145,
          'code' => '1.2.2.7',
          'name' => 'Excedentes financieros',
          'description' => 'Excedentes financieros',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 18,
          ]);
          $idFuente17 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 279,
          'code' => '1.2.7.3.3.5',
          'name' => 'Cancelación de reservas Otras tasas',
          'description' => 'Cancelación de reservas Otras tasas',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 18,
          ]);
          $idFuente18 = DB::getPdo()->lastInsertId();
        
        DB::table('financing_sources')->insert([
          'father_id' => 225,
          'code' => '1.2.5.12.4',
          'name' => 'Donaciones',
          'description' => 'Donaciones',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 18,
          ]);
          $idFuente19 = DB::getPdo()->lastInsertId();
        
        DB::table('financing_sources')->insert([
          'father_id' => 51,
          'code' => '1',
          'name' => 'Tasa compensatoria por caza de Fauna Silvestre (vigencia actual)',
          'description' => 'Tasa compensatoria por caza de Fauna Silvestre (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 18,
          ]);
          $idFuente10 = DB::getPdo()->lastInsertId();
          
           
         DB::table('financing_sources')->insert([
          'father_id' => 119,
          'code' => '1.1.2.5.1.1.1.4',
          'name' => 'Aportes de la Nación Funcionamiento',
          'description' => 'Aportes de la Nación Funcionamiento',
          'type_id' => 23,
          'final_level' => true,
          'group_id' => 18,
          ]);
          $idFuente20 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 118,
          'code' => '1.1.2.5.1.1.2',
          'name' => 'Aportes de la Nación para Inversión',
          'description' => 'Aportes de la Nación para Inversión',
          'type_id' => 23,
          'final_level' => true,
          'group_id' => 18,
          ]);
          $idFuente21 = DB::getPdo()->lastInsertId();
        
        DB::table('financing_sources')->insert([
          'father_id' => 1,
          'code' => '1.3',
          'name' => 'Otros Aportes de Otras Entidades',
          'description' => 'Otros Aportes de Otras Entidades',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 18,
          ]);
          $idFuente7 = DB::getPdo()->lastInsertId();

        DB::table('financing_sources')->insert([
          'father_id' => 14,
          'code' => '1.1.1.1.1.1.2.1',
          'name' => 'Participación del porcentaje ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
          'description' => 'Participación del porcentaje ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 18,
          ]);
          $idFuente1 = DB::getPdo()->lastInsertId();
          
        DB::table('financing_sources')->insert([
          'father_id' => 90,
          'code' => '02',
          'name' => 'Venta de Activos',
          'description' => 'Venta de Activos',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 18,
          ]);
          $idFuente16 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente1,
          'value' => 21573572345,
          'functioning_percentage' => 15,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 85,
          'functioning' => 3236035851.75,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 18337536493.25,
          'year' => 1,
          ]);
          $idPlan1 = DB::getPdo()->lastInsertId();
           

         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente3,
          'value' => 350000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 350000000,
          'year' => 1,
          ]);
          $idPlan2 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente4,
          'value' => 13000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 13000000,
          'year' => 1,
          ]);
          $idPlan3 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente5,
          'value' => 2519246212.4,
          'functioning_percentage' => 10,
          'debt_service_percentage' => 0,
          'fund_percentage' => 20,
          'investment_percentage' => 70,
          'functioning' => 251924621.24,
          'debt_service' => 0,
          'fund' => 503849242.48,
          'investment' => 1763472348.68,
          'year' => 1,
          ]);
          $idPlan4 = DB::getPdo()->lastInsertId();
           

         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente7,
          'value' => 2751890367,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 2751890367,
          'year' => 1,
          ]);
          $idPlan5 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente8,
          'value' => 3127121405,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 90,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 0,
          'debt_service' => 2814409264.5,
          'fund' => 312712140.5,
          'investment' => 0,
          'year' => 1,
          ]);
          $idPlan6 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente9,
          'value' => 188000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 90,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 18800000,
          'investment' => 169200000,
          'year' => 1,
          ]);
          $idPlan7 = DB::getPdo()->lastInsertId();
           

         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente11,
          'value' => 467412787.2,
          'functioning_percentage' => 32.8623,
          'debt_service_percentage' => 39.706,
          'fund_percentage' => 9.4473,
          'investment_percentage' => 17.9844,
          'functioning' => 153602592.368026,
          'debt_service' => 185590921.285632,
          'fund' => 44157888.2451456,
          'investment' => 84061385.3011968,
          'year' => 1,
          ]);
          $idPlan8 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente12,
          'value' => 52653544,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 90,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 5265354.4,
          'investment' => 47388189.6,
          'year' => 1,
          ]);
          $idPlan9 = DB::getPdo()->lastInsertId();
           


         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente15,
          'value' => 693634726.6,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 90,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 69363472.66,
          'investment' => 624271253.94,
          'year' => 1,
          ]);
          $idPlan10 = DB::getPdo()->lastInsertId();
           

         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente17,
          'value' => 6588095027,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 6588095027,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 1,
          ]);
          $idPlan11 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente18,
          'value' => 124149679,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 111734711.1,
          'debt_service' => 0,
          'fund' => 12414967.9,
          'investment' => 0,
          'year' => 1,
          ]);
          $idPlan12 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente19,
          'value' => 0,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 1,
          ]);
          $idPlan58 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente20,
          'value' => 3022518398,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 3022518398,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 1,
          ]);
          $idPlan13 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente21,
          'value' => 1496926848,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 1496926848,
          'year' => 1,
          ]);
          $idPlan14 = DB::getPdo()->lastInsertId();
           

         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente2,
          'value' => 27013930415,
          'functioning_percentage' => 25,
          'debt_service_percentage' => 5,
          'fund_percentage' => 0,
          'investment_percentage' => 70,
          'functioning' => 6753482603.75,
          'debt_service' => 1350696520.75,
          'fund' => 0,
          'investment' => 18909751290.5,
          'year' => 2,
          ]);
          $idPlan15 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente3,
          'value' => 423000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 423000000,
          'year' => 2,
          ]);
          $idPlan16 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente4,
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
          $idPlan17 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente5,
          'value' => 4282837907,
          'functioning_percentage' => 10,
          'debt_service_percentage' => 0,
          'fund_percentage' => 20,
          'investment_percentage' => 70,
          'functioning' => 428283790.7,
          'debt_service' => 0,
          'fund' => 856567581.4,
          'investment' => 2997986534.9,
          'year' => 2,
          ]);
          $idPlan18 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente6,
          'value' => 3705856402,
          'functioning_percentage' => 5,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 85,
          'functioning' => 185292820.1,
          'debt_service' => 0,
          'fund' => 370585640.2,
          'investment' => 3149977941.7,
          'year' => 2,
          ]);
          $idPlan19 = DB::getPdo()->lastInsertId();
           

         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente8,
          'value' => 3300000000,
          'functioning_percentage' => 5,
          'debt_service_percentage' => 75,
          'fund_percentage' => 9,
          'investment_percentage' => 11,
          'functioning' => 165000000,
          'debt_service' => 2475000000,
          'fund' => 297000000,
          'investment' => 363000000,
          'year' => 2,
          ]);
          $idPlan20 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente9,
          'value' => 248815754.77,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 248815754.77,
          'year' => 2,
          ]);
          $idPlan21 = DB::getPdo()->lastInsertId();
           

         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente11,
          'value' => 536292033,
          'functioning_percentage' => 16.3905,
          'debt_service_percentage' => 32.5017,
          'fund_percentage' => 5.8485,
          'investment_percentage' => 45.2593,
          'functioning' => 87900945.668865,
          'debt_service' => 174304027.689561,
          'fund' => 31365039.550005,
          'investment' => 242722020.091569,
          'year' => 2,
          ]);
          $idPlan22 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente12,
          'value' => 175327261.16,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 175327261.16,
          'year' => 2,
          ]);
          $idPlan23 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente13,
          'value' => 12350000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 12350000000,
          'year' => 2,
          ]);
          $idPlan24 = DB::getPdo()->lastInsertId();
           

         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente15,
          'value' => 1034301406.77,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 1034301406.77,
          'year' => 2,
          ]);
          $idPlan25 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente16,
          'value' => 174670824,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 174670824,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan26 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente17,
          'value' => 4511420088,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 4511420088,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan27 = DB::getPdo()->lastInsertId();
           


         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente20,
          'value' => 3229597000,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 3229597000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan28 = DB::getPdo()->lastInsertId();
           


         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente2,
          'value' => 28873359353,
          'functioning_percentage' => 25,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 65,
          'functioning' => 7218339838.25,
          'debt_service' => 0,
          'fund' => 2887335935.3,
          'investment' => 18767683579.45,
          'year' => 3,
          ]);
          $idPlan29 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente3,
          'value' => 378668089,
          'functioning_percentage' => 85,
          'debt_service_percentage' => 0,
          'fund_percentage' => 15,
          'investment_percentage' => 0,
          'functioning' => 321867875.65,
          'debt_service' => 0,
          'fund' => 56800213.35,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan30 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente4,
          'value' => 2000000,
          'functioning_percentage' => 85,
          'debt_service_percentage' => 0,
          'fund_percentage' => 15,
          'investment_percentage' => 0,
          'functioning' => 1700000,
          'debt_service' => 0,
          'fund' => 300000,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan31 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente5,
          'value' => 4841111080,
          'functioning_percentage' => 10,
          'debt_service_percentage' => 0,
          'fund_percentage' => 20,
          'investment_percentage' => 70,
          'functioning' => 484111108,
          'debt_service' => 0,
          'fund' => 968222216,
          'investment' => 3388777756,
          'year' => 3,
          ]);
          $idPlan32 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente6,
          'value' => 13571972107,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 3,
          'fund_percentage' => 10,
          'investment_percentage' => 87,
          'functioning' => 0,
          'debt_service' => 407159163.21,
          'fund' => 1357197210.7,
          'investment' => 11807615733.09,
          'year' => 3,
          ]);
          $idPlan33 = DB::getPdo()->lastInsertId();
           

         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente8,
          'value' => 1607934225,
          'functioning_percentage' => 10,
          'debt_service_percentage' => 60,
          'fund_percentage' => 20,
          'investment_percentage' => 10,
          'functioning' => 160793422.5,
          'debt_service' => 964760535,
          'fund' => 321586845,
          'investment' => 160793422.5,
          'year' => 3,
          ]);
          $idPlan34 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente9,
          'value' => 304543939,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 15,
          'investment_percentage' => 85,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 45681590.85,
          'investment' => 258862348.15,
          'year' => 3,
          ]);
          $idPlan35 = DB::getPdo()->lastInsertId();
           

         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente11,
          'value' => 561591282,
          'functioning_percentage' => 29.4434,
          'debt_service_percentage' => 33.157,
          'fund_percentage' => 3.1143,
          'investment_percentage' => 34.2853,
          'functioning' => 165351567.524388,
          'debt_service' => 186206821.37274,
          'fund' => 17489637.295326,
          'investment' => 192543255.807546,
          'year' => 3,
          ]);
          $idPlan36 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente12,
          'value' => 97002391,
          'functioning_percentage' => 85,
          'debt_service_percentage' => 0,
          'fund_percentage' => 15,
          'investment_percentage' => 0,
          'functioning' => 82452032.35,
          'debt_service' => 0,
          'fund' => 14550358.65,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan37 = DB::getPdo()->lastInsertId();
           

         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente14,
          'value' => 17650000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 90,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 1765000000,
          'investment' => 15885000000,
          'year' => 3,
          ]);
          $idPlan38 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente15,
          'value' => 1000000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 90,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 100000000,
          'investment' => 900000000,
          'year' => 3,
          ]);
          $idPlan39 = DB::getPdo()->lastInsertId();
           

         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente17,
          'value' => 5398905577,
          'functioning_percentage' => 85,
          'debt_service_percentage' => 0,
          'fund_percentage' => 15,
          'investment_percentage' => 0,
          'functioning' => 4589069740.45,
          'debt_service' => 0,
          'fund' => 809835836.55,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan40 = DB::getPdo()->lastInsertId();
           


         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente20,
          'value' => 3393078000,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 3393078000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan41 = DB::getPdo()->lastInsertId();
           

         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente1,
          'value' => 30987727035,
          'functioning_percentage' => 20,
          'debt_service_percentage' => 5,
          'fund_percentage' => 0,
          'investment_percentage' => 75,
          'functioning' => 6197545407,
          'debt_service' => 1549386351.75,
          'fund' => 0,
          'investment' => 23240795276.25,
          'year' => 4,
          ]);
          $idPlan42 = DB::getPdo()->lastInsertId();
           

         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente3,
          'value' => 400000000,
          'functioning_percentage' => 55,
          'debt_service_percentage' => 3,
          'fund_percentage' => 0,
          'investment_percentage' => 42,
          'functioning' => 220000000,
          'debt_service' => 12000000,
          'fund' => 0,
          'investment' => 168000000,
          'year' => 4,
          ]);
          $idPlan43 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente4,
          'value' => 17315462,
          'functioning_percentage' => 70,
          'debt_service_percentage' => 25,
          'fund_percentage' => 0,
          'investment_percentage' => 5,
          'functioning' => 12120823.4,
          'debt_service' => 4328865.5,
          'fund' => 0,
          'investment' => 865773.1,
          'year' => 4,
          ]);
          $idPlan44 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente5,
          'value' => 4922427781,
          'functioning_percentage' => 25,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 65,
          'functioning' => 1230606945.25,
          'debt_service' => 0,
          'fund' => 492242778.1,
          'investment' => 3199578057.65,
          'year' => 4,
          ]);
          $idPlan45 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente6,
          'value' => 2576997003,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 5,
          'investment_percentage' => 95,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 128849850.15,
          'investment' => 2448147152.85,
          'year' => 4,
          ]);
          $idPlan46 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente7,
          'value' => 1280000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 1280000000,
          'year' => 4,
          ]);
          $idPlan47 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente8,
          'value' => 6655843697,
          'functioning_percentage' => 25,
          'debt_service_percentage' => 65,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 1663960924.25,
          'debt_service' => 4326298403.05,
          'fund' => 665584369.7,
          'investment' => 0,
          'year' => 4,
          ]);
          $idPlan48 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente9,
          'value' => 961236803,
          'functioning_percentage' => 75,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 25,
          'functioning' => 720927602.25,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 240309200.75,
          'year' => 4,
          ]);
          $idPlan49 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente10,
          'value' => 4791697,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 4791697,
          'year' => 4,
          ]);
          $idPlan50 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente11,
          'value' => 130937234,
          'functioning_percentage' => 4.676,
          'debt_service_percentage' => 3.21,
          'fund_percentage' => 0.8445,
          'investment_percentage' => 91.2695,
          'functioning' => 6122625.06184,
          'debt_service' => 4203085.2114,
          'fund' => 1105764.94113,
          'investment' => 119505758.78563,
          'year' => 4,
          ]);
          $idPlan51 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente12,
          'value' => 461905664,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 461905664,
          'year' => 4,
          ]);
          $idPlan52 = DB::getPdo()->lastInsertId();
           


         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente15,
          'value' => 700000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 700000000,
          'year' => 4,
          ]);
          $idPlan53 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente16,
          'value' => 23906200,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 23906200,
          'year' => 4,
          ]);
          $idPlan54 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente17,
          'value' => 6708702318,
          'functioning_percentage' => 50,
          'debt_service_percentage' => 9,
          'fund_percentage' => 10,
          'investment_percentage' => 31,
          'functioning' => 3354351159,
          'debt_service' => 603783208.62,
          'fund' => 670870231.8,
          'investment' => 2079697718.58,
          'year' => 4,
          ]);
          $idPlan55 = DB::getPdo()->lastInsertId();
           

         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente19,
          'value' => 482667292,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 482667292,
          'year' => 4,
          ]);
          $idPlan56 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente20,
          'value' => 3545056000,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 3545056000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 4,
          ]);
          $idPlan57 = DB::getPdo()->lastInsertId();
          
          DB::table('implementations')->insert([
          'p_a_i_s_id'=>$idpai1,
          ]);
          $idImplementation1 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 2027908678.89,
          'financial_plans_id' => $idPlan1,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo1 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 393270329.1,
          'financial_plans_id' => $idPlan2,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo2 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 1822473,
          'financial_plans_id' => $idPlan3,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo3 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 2787126608,
          'financial_plans_id' => $idPlan4,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo4 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 2731890367,
          'financial_plans_id' => $idPlan5,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo5 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 3223827990,
          'financial_plans_id' => $idPlan6,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo6 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 175896482.27,
          'financial_plans_id' => $idPlan7,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo7 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 723222558,
          'financial_plans_id' => $idPlan8,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo8 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 61647347.33,
          'financial_plans_id' => $idPlan9,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo9 = DB::getPdo()->lastInsertId();
           


         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 1274712655.18,
          'financial_plans_id' => $idPlan10,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo10 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 6588095027,
          'financial_plans_id' => $idPlan11,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo11 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 124149679,
          'financial_plans_id' => $idPlan12,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo12 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 40000000,
          'financial_plans_id' => $idPlan58,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo58 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 3020240153,
          'financial_plans_id' => $idPlan13,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo13 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 0,
          'financial_plans_id' => $idPlan14,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo14 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 27222640982.36,
          'financial_plans_id' => $idPlan15,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo15 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 312988209.25,
          'financial_plans_id' => $idPlan16,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo16 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 1356400,
          'financial_plans_id' => $idPlan17,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo17 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 4899416832,
          'financial_plans_id' => $idPlan18,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo18 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 2405856402,
          'financial_plans_id' => $idPlan19,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo19 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 2244889894,
          'financial_plans_id' => $idPlan20,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo20 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 261650251.77,
          'financial_plans_id' => $idPlan21,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo21 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 1031906935.34,
          'financial_plans_id' => $idPlan22,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo22 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 179466277.16,
          'financial_plans_id' => $idPlan23,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo23 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 12350000000,
          'financial_plans_id' => $idPlan24,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo24 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 1484619976.57,
          'financial_plans_id' => $idPlan25,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo25 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 174670824,
          'financial_plans_id' => $idPlan26,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo26 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 4511420088,
          'financial_plans_id' => $idPlan27,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo27 = DB::getPdo()->lastInsertId();
           


         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 3226930000,
          'financial_plans_id' => $idPlan28,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo28 = DB::getPdo()->lastInsertId();
           


         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 29084070131.5,
          'financial_plans_id' => $idPlan29,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo29 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 471816155,
          'financial_plans_id' => $idPlan30,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo30 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 1262500,
          'financial_plans_id' => $idPlan31,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo31 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 5748952348,
          'financial_plans_id' => $idPlan32,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo32 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 5016559268,
          'financial_plans_id' => $idPlan33,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo33 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 2642240036,
          'financial_plans_id' => $idPlan34,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo34 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 345439386,
          'financial_plans_id' => $idPlan35,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo35 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 575304265,
          'financial_plans_id' => $idPlan36,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo36 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 121666954.16,
          'financial_plans_id' => $idPlan37,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo37 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 17650000000,
          'financial_plans_id' => $idPlan38,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo38 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 944863397.19,
          'financial_plans_id' => $idPlan39,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo39 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 5398905577,
          'financial_plans_id' => $idPlan40,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo40 = DB::getPdo()->lastInsertId();
           


         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 3393078000,
          'financial_plans_id' => $idPlan41,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo41 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 31475488474.33,
          'financial_plans_id' => $idPlan42,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo42 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 392702088,
          'financial_plans_id' => $idPlan43,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo43 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 18724762,
          'financial_plans_id' => $idPlan44,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo44 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 5655906481,
          'financial_plans_id' => $idPlan45,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo45 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 1956997003,
          'financial_plans_id' => $idPlan46,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo46 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 1280000000,
          'financial_plans_id' => $idPlan47,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo47 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 6685085816,
          'financial_plans_id' => $idPlan48,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo48 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 969059115,
          'financial_plans_id' => $idPlan49,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo49 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 4791697,
          'financial_plans_id' => $idPlan50,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo50 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 200144336,
          'financial_plans_id' => $idPlan51,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo51 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 473430163,
          'financial_plans_id' => $idPlan52,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo52 = DB::getPdo()->lastInsertId();
           


         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 802969849.11,
          'financial_plans_id' => $idPlan53,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo53 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 24181315,
          'financial_plans_id' => $idPlan54,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo54 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 6708702318,
          'financial_plans_id' => $idPlan55,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo55 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 482667292,
          'financial_plans_id' => $idPlan56,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo56 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 3545056000,
          'financial_plans_id' => $idPlan57,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo57 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 482667292,
          'financial_plans_id' => $idPlan56,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo56 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 3545056000,
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
        'group_id' => 18,
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
        'group_id' => 18,
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
        'group_id' => 18,
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
        'group_id' => 18,
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
        'group_id' => 18,
        ]);
        $idFuenteGasto7 = DB::getPdo()->lastInsertId();
        
        
      DB::table('cost_sources')->insert([
        'father_id' => 16,
        'code' => '2.1.3.2.1.2',
        'name' => 'Bonos pensionales (de pensiones)',
        'description' => 'Bonos pensionales (de pensiones)',
        'functioning' => TRUE,
        'compensation' => FALSE,
        'debt_service' => FALSE,
        'group_id' => 18,
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
        'group_id' => 18,
        ]);
        $idFuenteGasto4 = DB::getPdo()->lastInsertId();
        
        
      DB::table('cost_sources')->insert([
        'father_id' => 29,
        'code' => '2.1.4.3.1',
        'name' => 'Cuota de fiscalización y auditaje',
        'description' => 'Cuota de fiscalización y auditaje',
        'functioning' => TRUE,
        'compensation' => FALSE,
        'debt_service' => FALSE,
        'group_id' => 18,
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
        'group_id' => 18,
        ]);
        $idFuenteGasto9 = DB::getPdo()->lastInsertId();
        
        
      DB::table('cost_sources')->insert([
        'father_id' => 36,
        'code' => '2.2.1.1',
        'name' => 'Servicios de la deuda pública externa',
        'description' => 'Servicios de la deuda pública externa',
        'functioning' => FALSE,
        'compensation' => FALSE,
        'debt_service' => TRUE,
        'group_id' => 18,
        ]);
        $idFuenteGasto10 = DB::getPdo()->lastInsertId();
    
            DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 6782068397,
              'value_comitted' => 6423134941,
              'value_paid' => 6333177555,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto1,
              'p_a_i_id' => $idpai1,
              'group_id' => 18,
              ]);
              $idGasto1 = DB::getPdo()->lastInsertId();
              
              
            DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 308000000,
              'value_comitted' => 289058591,
              'value_paid' => 193945436,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto2,
              'p_a_i_id' => $idpai1,
              'group_id' => 18,
              ]);
              $idGasto2 = DB::getPdo()->lastInsertId();
              
              
            DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 2847430484,
              'value_comitted' => 2629814486,
              'value_paid' => 2185077283,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto3,
              'p_a_i_id' => $idpai1,
              'group_id' => 18,
              ]);
              $idGasto3 = DB::getPdo()->lastInsertId();
              
              
            DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 60000000,
              'value_comitted' => 41208083.12,
              'value_paid' => 40973914.12,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto4,
              'p_a_i_id' => $idpai1,
              'group_id' => 18,
              ]);
              $idGasto4 = DB::getPdo()->lastInsertId();
              
              
            DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 36894000,
              'value_comitted' => 34414860,
              'value_paid' => 34414860,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto5,
              'p_a_i_id' => $idpai1,
              'group_id' => 18,
              ]);
              $idGasto5 = DB::getPdo()->lastInsertId();
              
              
            DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 966563046,
              'value_comitted' => 958681923,
              'value_paid' => 900139739,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => FALSE,
              'compensation' => TRUE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto6,
              'p_a_i_id' => $idpai1,
              'group_id' => 18,
              ]);
              $idGasto6 = DB::getPdo()->lastInsertId();
              
              
            DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 20000000,
              'value_comitted' => 10052485,
              'value_paid' => 10052485,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto7,
              'p_a_i_id' => $idpai1,
              'group_id' => 18,
              ]);
              $idGasto7 = DB::getPdo()->lastInsertId();
              
              
            DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 62000000,
              'value_comitted' => 60943175,
              'value_paid' => 60943175,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto8,
              'p_a_i_id' => $idpai1,
              'group_id' => 18,
              ]);
              $idGasto8 = DB::getPdo()->lastInsertId();
              
              
            DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 193000000,
              'value_comitted' => 192740972.2,
              'value_paid' => 192740972.2,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto9,
              'p_a_i_id' => $idpai1,
              'group_id' => 18,
              ]);
              $idGasto9 = DB::getPdo()->lastInsertId();

              
            DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 3000000000,
              'value_comitted' => 2941899681,
              'value_paid' => 2866698436,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => FALSE,
              'compensation' => FALSE,
              'debt_service' => TRUE,
              'cost_sources_id' => $idFuenteGasto10,
              'p_a_i_id' => $idpai1,
              'group_id' => 18,
              ]);
              $idGasto10 = DB::getPdo()->lastInsertId();
              
              
              DB::table('financial_costs')->insert([
                'year' => 1,
                'value_bugeted' => 3014112398,
                'value_comitted' => 3014112398,
                'value_paid' => 3014112398,
                'own' => FALSE,
                'nation' => TRUE,
                'royalties' => FALSE,
                'funds' => FALSE,
                'functioning' => TRUE,
                'compensation' => FALSE,
                'debt_service' => FALSE,
                'cost_sources_id' => $idFuenteGasto1,
                'p_a_i_id' => $idpai1,
                'group_id' => 18,
                ]);
                $idGasto11 = DB::getPdo()->lastInsertId();

                
                
              DB::table('financial_costs')->insert([
                'year' => 1,
                'value_bugeted' => 8406000,
                'value_comitted' => 8406000,
                'value_paid' => 8406000,
                'own' => FALSE,
                'nation' => TRUE,
                'royalties' => FALSE,
                'funds' => FALSE,
                'functioning' => TRUE,
                'compensation' => FALSE,
                'debt_service' => FALSE,
                'cost_sources_id' => $idFuenteGasto5,
                'p_a_i_id' => $idpai1,
                'group_id' => 18,
                ]);
                $idGasto12 = DB::getPdo()->lastInsertId();

                DB::table('financial_costs')->insert([
                  'year' => 2,
                  'value_bugeted' => 7769372102,
                  'value_comitted' => 7408689290,
                  'value_paid' => 7333027310,
                  'own' => TRUE,
                  'nation' => FALSE,
                  'royalties' => FALSE,
                  'funds' => FALSE,
                  'functioning' => TRUE,
                  'compensation' => FALSE,
                  'debt_service' => FALSE,
                  'cost_sources_id' => $idFuenteGasto1,
                  'p_a_i_id' => $idpai1,
                  'group_id' => 18,
                  ]);
                  $idGasto13 = DB::getPdo()->lastInsertId();
                  
                  
                DB::table('financial_costs')->insert([
                  'year' => 2,
                  'value_bugeted' => 449619813,
                  'value_comitted' => 403303453,
                  'value_paid' => 343056944,
                  'own' => TRUE,
                  'nation' => FALSE,
                  'royalties' => FALSE,
                  'funds' => FALSE,
                  'functioning' => TRUE,
                  'compensation' => FALSE,
                  'debt_service' => FALSE,
                  'cost_sources_id' => $idFuenteGasto2,
                  'p_a_i_id' => $idpai1,
                  'group_id' => 18,
                  ]);
                  $idGasto14 = DB::getPdo()->lastInsertId();
                  
                  
                DB::table('financial_costs')->insert([
                  'year' => 2,
                  'value_bugeted' => 3188720371,
                  'value_comitted' => 2967650675.95,
                  'value_paid' => 2423879493.95,
                  'own' => TRUE,
                  'nation' => FALSE,
                  'royalties' => FALSE,
                  'funds' => FALSE,
                  'functioning' => TRUE,
                  'compensation' => FALSE,
                  'debt_service' => FALSE,
                  'cost_sources_id' => $idFuenteGasto3,
                  'p_a_i_id' => $idpai1,
                  'group_id' => 18,
                  ]);
                  $idGasto15 = DB::getPdo()->lastInsertId();
                  
                  
                DB::table('financial_costs')->insert([
                  'year' => 2,
                  'value_bugeted' => 50000000,
                  'value_comitted' => 46456235,
                  'value_paid' => 45541756,
                  'own' => TRUE,
                  'nation' => FALSE,
                  'royalties' => FALSE,
                  'funds' => FALSE,
                  'functioning' => TRUE,
                  'compensation' => FALSE,
                  'debt_service' => FALSE,
                  'cost_sources_id' => $idFuenteGasto4,
                  'p_a_i_id' => $idpai1,
                  'group_id' => 18,
                  ]);
                  $idGasto16 = DB::getPdo()->lastInsertId();
                  
                  
                DB::table('financial_costs')->insert([
                  'year' => 2,
                  'value_bugeted' => 47207611,
                  'value_comitted' => 47207611,
                  'value_paid' => 47207611,
                  'own' => TRUE,
                  'nation' => FALSE,
                  'royalties' => FALSE,
                  'funds' => FALSE,
                  'functioning' => TRUE,
                  'compensation' => FALSE,
                  'debt_service' => FALSE,
                  'cost_sources_id' => $idFuenteGasto5,
                  'p_a_i_id' => $idpai1,
                  'group_id' => 18,
                  ]);
                  $idGasto17 = DB::getPdo()->lastInsertId();
                  
                  
                DB::table('financial_costs')->insert([
                  'year' => 2,
                  'value_bugeted' => 1555518313,
                  'value_comitted' => 1423359533,
                  'value_paid' => 1194739826,
                  'own' => TRUE,
                  'nation' => FALSE,
                  'royalties' => FALSE,
                  'funds' => FALSE,
                  'functioning' => FALSE,
                  'compensation' => TRUE,
                  'debt_service' => FALSE,
                  'cost_sources_id' => $idFuenteGasto6,
                  'p_a_i_id' => $idpai1,
                  'group_id' => 18,
                  ]);
                  $idGasto18 = DB::getPdo()->lastInsertId();
                  
                  
                DB::table('financial_costs')->insert([
                  'year' => 2,
                  'value_bugeted' => 67000000,
                  'value_comitted' => 64447407,
                  'value_paid' => 64447407,
                  'own' => TRUE,
                  'nation' => FALSE,
                  'royalties' => FALSE,
                  'funds' => FALSE,
                  'functioning' => TRUE,
                  'compensation' => FALSE,
                  'debt_service' => FALSE,
                  'cost_sources_id' => $idFuenteGasto7,
                  'p_a_i_id' => $idpai1,
                  'group_id' => 18,
                  ]);
                  $idGasto19 = DB::getPdo()->lastInsertId();
                  

                  
                DB::table('financial_costs')->insert([
                  'year' => 2,
                  'value_bugeted' => 700000000,
                  'value_comitted' => 26680728,
                  'value_paid' => 26680728,
                  'own' => TRUE,
                  'nation' => FALSE,
                  'royalties' => FALSE,
                  'funds' => FALSE,
                  'functioning' => TRUE,
                  'compensation' => FALSE,
                  'debt_service' => FALSE,
                  'cost_sources_id' => $idFuenteGasto9,
                  'p_a_i_id' => $idpai1,
                  'group_id' => 18,
                  ]);
                  $idGasto20 = DB::getPdo()->lastInsertId();
                  

                  
                  
                DB::table('financial_costs')->insert([
                  'year' => 2,
                  'value_bugeted' => 4000000000,
                  'value_comitted' => 3949801468.2,
                  'value_paid' => 3741190895.2,
                  'own' => TRUE,
                  'nation' => FALSE,
                  'royalties' => FALSE,
                  'funds' => FALSE,
                  'functioning' => FALSE,
                  'compensation' => FALSE,
                  'debt_service' => TRUE,
                  'cost_sources_id' => $idFuenteGasto10,
                  'p_a_i_id' => $idpai1,
                  'group_id' => 18,
                  ]);
                  $idGasto21 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('financial_costs')->insert([
                    'year' => 2,
                    'value_bugeted' => 3220855000,
                    'value_comitted' => 3220855000,
                    'value_paid' => 3220855000,
                    'own' => FALSE,
                    'nation' => TRUE,
                    'royalties' => FALSE,
                    'funds' => FALSE,
                    'functioning' => TRUE,
                    'compensation' => FALSE,
                    'debt_service' => FALSE,
                    'cost_sources_id' => $idFuenteGasto1,
                    'p_a_i_id' => $idpai1,
                    'group_id' => 18,
                    ]);
                    $idGasto22 = DB::getPdo()->lastInsertId();

                  DB::table('financial_costs')->insert([
                    'year' => 2,
                    'value_bugeted' => 8742000,
                    'value_comitted' => 8742000,
                    'value_paid' => 8742000,
                    'own' => FALSE,
                    'nation' => TRUE,
                    'royalties' => FALSE,
                    'funds' => FALSE,
                    'functioning' => TRUE,
                    'compensation' => FALSE,
                    'debt_service' => FALSE,
                    'cost_sources_id' => $idFuenteGasto5,
                    'p_a_i_id' => $idpai1,
                    'group_id' => 18,
                    ]);
                    $idGasto23 = DB::getPdo()->lastInsertId();
                    
                 
                    
                    
                    DB::table('financial_costs')->insert([
                      'year' => 3,
                      'value_bugeted' => 7839454567,
                      'value_comitted' => 7590298551,
                      'value_paid' => 7520783804,
                      'own' => TRUE,
                      'nation' => FALSE,
                      'royalties' => FALSE,
                      'funds' => FALSE,
                      'functioning' => TRUE,
                      'compensation' => FALSE,
                      'debt_service' => FALSE,
                      'cost_sources_id' => $idFuenteGasto1,
                      'p_a_i_id' => $idpai1,
                      'group_id' => 18,
                      ]);
                      $idGasto24 = DB::getPdo()->lastInsertId();
                      
                      
                    DB::table('financial_costs')->insert([
                      'year' => 3,
                      'value_bugeted' => 353500000,
                      'value_comitted' => 325368086,
                      'value_paid' => 201510434,
                      'own' => TRUE,
                      'nation' => FALSE,
                      'royalties' => FALSE,
                      'funds' => FALSE,
                      'functioning' => TRUE,
                      'compensation' => FALSE,
                      'debt_service' => FALSE,
                      'cost_sources_id' => $idFuenteGasto2,
                      'p_a_i_id' => $idpai1,
                      'group_id' => 18,
                      ]);
                      $idGasto25 = DB::getPdo()->lastInsertId();
                      
                      
                    DB::table('financial_costs')->insert([
                      'year' => 3,
                      'value_bugeted' => 3618147239,
                      'value_comitted' => 3416096498,
                      'value_paid' => 3029500168,
                      'own' => TRUE,
                      'nation' => FALSE,
                      'royalties' => FALSE,
                      'funds' => FALSE,
                      'functioning' => TRUE,
                      'compensation' => FALSE,
                      'debt_service' => FALSE,
                      'cost_sources_id' => $idFuenteGasto3,
                      'p_a_i_id' => $idpai1,
                      'group_id' => 18,
                      ]);
                      $idGasto26 = DB::getPdo()->lastInsertId();
                      
                      
                    DB::table('financial_costs')->insert([
                      'year' => 3,
                      'value_bugeted' => 52000000,
                      'value_comitted' => 46803193,
                      'value_paid' => 45023929,
                      'own' => TRUE,
                      'nation' => FALSE,
                      'royalties' => FALSE,
                      'funds' => FALSE,
                      'functioning' => TRUE,
                      'compensation' => FALSE,
                      'debt_service' => FALSE,
                      'cost_sources_id' => $idFuenteGasto4,
                      'p_a_i_id' => $idpai1,
                      'group_id' => 18,
                      ]);
                      $idGasto27 = DB::getPdo()->lastInsertId();
                      
                      
                    DB::table('financial_costs')->insert([
                      'year' => 3,
                      'value_bugeted' => 91593095,
                      'value_comitted' => 91593095,
                      'value_paid' => 91593095,
                      'own' => TRUE,
                      'nation' => FALSE,
                      'royalties' => FALSE,
                      'funds' => FALSE,
                      'functioning' => TRUE,
                      'compensation' => FALSE,
                      'debt_service' => FALSE,
                      'cost_sources_id' => $idFuenteGasto5,
                      'p_a_i_id' => $idpai1,
                      'group_id' => 18,
                      ]);
                      $idGasto28 = DB::getPdo()->lastInsertId();
                      
                      
                    DB::table('financial_costs')->insert([
                      'year' => 3,
                      'value_bugeted' => 1558126453,
                      'value_comitted' => 1555254166,
                      'value_paid' => 1110438232,
                      'own' => TRUE,
                      'nation' => FALSE,
                      'royalties' => FALSE,
                      'funds' => FALSE,
                      'functioning' => FALSE,
                      'compensation' => TRUE,
                      'debt_service' => FALSE,
                      'cost_sources_id' => $idFuenteGasto6,
                      'p_a_i_id' => $idpai1,
                      'group_id' => 18,
                      ]);
                      $idGasto29 = DB::getPdo()->lastInsertId();
                      
                   
                      
                    DB::table('financial_costs')->insert([
                      'year' => 3,
                      'value_bugeted' => 69680000,
                      'value_comitted' => 67083228,
                      'value_paid' => 67083228,
                      'own' => TRUE,
                      'nation' => FALSE,
                      'royalties' => FALSE,
                      'funds' => FALSE,
                      'functioning' => TRUE,
                      'compensation' => FALSE,
                      'debt_service' => FALSE,
                      'cost_sources_id' => $idFuenteGasto8,
                      'p_a_i_id' => $idpai1,
                      'group_id' => 18,
                      ]);
                      $idGasto30 = DB::getPdo()->lastInsertId();
                      
                      
                    DB::table('financial_costs')->insert([
                      'year' => 3,
                      'value_bugeted' => 964310221,
                      'value_comitted' => 543762661.53,
                      'value_paid' => 543762661.53,
                      'own' => TRUE,
                      'nation' => FALSE,
                      'royalties' => FALSE,
                      'funds' => FALSE,
                      'functioning' => TRUE,
                      'compensation' => FALSE,
                      'debt_service' => FALSE,
                      'cost_sources_id' => $idFuenteGasto9,
                      'p_a_i_id' => $idpai1,
                      'group_id' => 18,
                      ]);
                      $idGasto31 = DB::getPdo()->lastInsertId();

                      
                    DB::table('financial_costs')->insert([
                      'year' => 3,
                      'value_bugeted' => 8344000000,
                      'value_comitted' => 8325575026.7,
                      'value_paid' => 7924242968.01,
                      'own' => TRUE,
                      'nation' => FALSE,
                      'royalties' => FALSE,
                      'funds' => FALSE,
                      'functioning' => FALSE,
                      'compensation' => FALSE,
                      'debt_service' => TRUE,
                      'cost_sources_id' => $idFuenteGasto10,
                      'p_a_i_id' => $idpai1,
                      'group_id' => 18,
                      ]);
                      $idGasto32 = DB::getPdo()->lastInsertId();
                      
                      
                      DB::table('financial_costs')->insert([
                        'year' => 3,
                        'value_bugeted' => 3384073000,
                        'value_comitted' => 3384073000,
                        'value_paid' => 3384073000,
                        'own' => FALSE,
                        'nation' => TRUE,
                        'royalties' => FALSE,
                        'funds' => FALSE,
                        'functioning' => TRUE,
                        'compensation' => FALSE,
                        'debt_service' => FALSE,
                        'cost_sources_id' => $idFuenteGasto1,
                        'p_a_i_id' => $idpai1,
                        'group_id' => 18,
                        ]);
                        $idGasto33 = DB::getPdo()->lastInsertId();
                        

                        
                        
                      DB::table('financial_costs')->insert([
                        'year' => 3,
                        'value_bugeted' => 9005000,
                        'value_comitted' => 9005000,
                        'value_paid' => 9005000,
                        'own' => FALSE,
                        'nation' => TRUE,
                        'royalties' => FALSE,
                        'funds' => FALSE,
                        'functioning' => TRUE,
                        'compensation' => FALSE,
                        'debt_service' => FALSE,
                        'cost_sources_id' => $idFuenteGasto5,
                        'p_a_i_id' => $idpai1,
                        'group_id' => 18,
                        ]);
                        $idGasto34 = DB::getPdo()->lastInsertId();
        
               
                        
                        DB::table('financial_costs')->insert([
                          'year' => 4,
                          'value_bugeted' => 8184515453,
                          'value_comitted' => 7858291910,
                          'value_paid' => 7857827780,
                          'own' => TRUE,
                          'nation' => FALSE,
                          'royalties' => FALSE,
                          'funds' => FALSE,
                          'functioning' => TRUE,
                          'compensation' => FALSE,
                          'debt_service' => FALSE,
                          'cost_sources_id' => $idFuenteGasto1,
                          'p_a_i_id' => $idpai1,
                          'group_id' => 18,
                          ]);
                          $idGasto35 = DB::getPdo()->lastInsertId();
                          
                          
                        DB::table('financial_costs')->insert([
                          'year' => 4,
                          'value_bugeted' => 540363559,
                          'value_comitted' => 359485916,
                          'value_paid' => 312614651,
                          'own' => TRUE,
                          'nation' => FALSE,
                          'royalties' => FALSE,
                          'funds' => FALSE,
                          'functioning' => TRUE,
                          'compensation' => FALSE,
                          'debt_service' => FALSE,
                          'cost_sources_id' => $idFuenteGasto2,
                          'p_a_i_id' => $idpai1,
                          'group_id' => 18,
                          ]);
                          $idGasto36 = DB::getPdo()->lastInsertId();
                          
                          
                        DB::table('financial_costs')->insert([
                          'year' => 4,
                          'value_bugeted' => 3882231560,
                          'value_comitted' => 3714536793,
                          'value_paid' => 3197529806,
                          'own' => TRUE,
                          'nation' => FALSE,
                          'royalties' => FALSE,
                          'funds' => FALSE,
                          'functioning' => TRUE,
                          'compensation' => FALSE,
                          'debt_service' => FALSE,
                          'cost_sources_id' => $idFuenteGasto3,
                          'p_a_i_id' => $idpai1,
                          'group_id' => 18,
                          ]);
                          $idGasto37 = DB::getPdo()->lastInsertId();
                          
                          
                        DB::table('financial_costs')->insert([
                          'year' => 4,
                          'value_bugeted' => 52000000,
                          'value_comitted' => 50085899,
                          'value_paid' => 49519552,
                          'own' => TRUE,
                          'nation' => FALSE,
                          'royalties' => FALSE,
                          'funds' => FALSE,
                          'functioning' => TRUE,
                          'compensation' => FALSE,
                          'debt_service' => FALSE,
                          'cost_sources_id' => $idFuenteGasto4,
                          'p_a_i_id' => $idpai1,
                          'group_id' => 18,
                          ]);
                          $idGasto38 = DB::getPdo()->lastInsertId();
                          
                          
                        DB::table('financial_costs')->insert([
                          'year' => 4,
                          'value_bugeted' => 70025000,
                          'value_comitted' => 70019362,
                          'value_paid' => 70019362,
                          'own' => TRUE,
                          'nation' => FALSE,
                          'royalties' => FALSE,
                          'funds' => FALSE,
                          'functioning' => TRUE,
                          'compensation' => FALSE,
                          'debt_service' => FALSE,
                          'cost_sources_id' => $idFuenteGasto5,
                          'p_a_i_id' => $idpai1,
                          'group_id' => 18,
                          ]);
                          $idGasto39 = DB::getPdo()->lastInsertId();
                          
                          
                        DB::table('financial_costs')->insert([
                          'year' => 4,
                          'value_bugeted' => 1958652795,
                          'value_comitted' => 1955899133,
                          'value_paid' => 1814312340,
                          'own' => TRUE,
                          'nation' => FALSE,
                          'royalties' => FALSE,
                          'funds' => FALSE,
                          'functioning' => FALSE,
                          'compensation' => TRUE,
                          'debt_service' => FALSE,
                          'cost_sources_id' => $idFuenteGasto6,
                          'p_a_i_id' => $idpai1,
                          'group_id' => 18,
                          ]);
                          $idGasto40 = DB::getPdo()->lastInsertId();
                          
                          
                        DB::table('financial_costs')->insert([
                          'year' => 4,
                          'value_bugeted' => 69300000,
                          'value_comitted' => 69216548,
                          'value_paid' => 69216548,
                          'own' => TRUE,
                          'nation' => FALSE,
                          'royalties' => FALSE,
                          'funds' => FALSE,
                          'functioning' => TRUE,
                          'compensation' => FALSE,
                          'debt_service' => FALSE,
                          'cost_sources_id' => $idFuenteGasto7,
                          'p_a_i_id' => $idpai1,
                          'group_id' => 18,
                          ]);
                          $idGasto41 = DB::getPdo()->lastInsertId();
                          
              
                          
                        DB::table('financial_costs')->insert([
                          'year' => 4,
                          'value_bugeted' => 255000000,
                          'value_comitted' => 19940265,
                          'value_paid' => 19940265,
                          'own' => TRUE,
                          'nation' => FALSE,
                          'royalties' => FALSE,
                          'funds' => FALSE,
                          'functioning' => TRUE,
                          'compensation' => FALSE,
                          'debt_service' => FALSE,
                          'cost_sources_id' => $idFuenteGasto9,
                          'p_a_i_id' => $idpai1,
                          'group_id' => 18,
                          ]);
                          $idGasto42 = DB::getPdo()->lastInsertId();
                          
                  
                          
                          
                          DB::table('financial_costs')->insert([
                            'year' => 4,
                            'value_bugeted' => 3499909000,
                            'value_comitted' => 3499909000,
                            'value_paid' => 3499909000,
                            'own' => FALSE,
                            'nation' => TRUE,
                            'royalties' => FALSE,
                            'funds' => FALSE,
                            'functioning' => TRUE,
                            'compensation' => FALSE,
                            'debt_service' => FALSE,
                            'cost_sources_id' => $idFuenteGasto1,
                            'p_a_i_id' => $idpai1,
                            'group_id' => 18,
                            ]);
                            $idGasto43 = DB::getPdo()->lastInsertId();
                            

                            
                          DB::table('financial_costs')->insert([
                            'year' => 4,
                            'value_bugeted' => 35872000,
                            'value_comitted' => 35872000,
                            'value_paid' => 35872000,
                            'own' => FALSE,
                            'nation' => TRUE,
                            'royalties' => FALSE,
                            'funds' => FALSE,
                            'functioning' => TRUE,
                            'compensation' => FALSE,
                            'debt_service' => FALSE,
                            'cost_sources_id' => $idFuenteGasto3,
                            'p_a_i_id' => $idpai1,
                            'group_id' => 18,
                            ]);
                            $idGasto44 = DB::getPdo()->lastInsertId();
                            
                        
                            
                          DB::table('financial_costs')->insert([
                            'year' => 4,
                            'value_bugeted' => 9275000,
                            'value_comitted' => 9275000,
                            'value_paid' => 9275000,
                            'own' => FALSE,
                            'nation' => TRUE,
                            'royalties' => FALSE,
                            'funds' => FALSE,
                            'functioning' => TRUE,
                            'compensation' => FALSE,
                            'debt_service' => FALSE,
                            'cost_sources_id' => $idFuenteGasto5,
                            'p_a_i_id' => $idpai1,
                            'group_id' => 18,
                            ]);
                            $idGasto45 = DB::getPdo()->lastInsertId();

                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity10,
                              'source_id' =>$idPlan1,
                              'value' => 196419400,
                              'goal' => 0,
                              'evidence_balance' => 196419400,
                              'age' => 1,
                              ]);
                              $idactivitySource1 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity27,
                              'source_id' =>$idPlan1,
                              'value' => 4652081064,
                              'goal' => 0,
                              'evidence_balance' => 4652081064,
                              'age' => 1,
                              ]);
                              $idactivitySource2 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity32,
                              'source_id' =>$idPlan1,
                              'value' => 346049751,
                              'goal' => 0,
                              'evidence_balance' => 346049751,
                              'age' => 1,
                              ]);
                              $idactivitySource3 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity39,
                              'source_id' =>$idPlan1,
                              'value' => 1651909538,
                              'goal' => 0,
                              'evidence_balance' => 1651909538,
                              'age' => 1,
                              ]);
                              $idactivitySource4 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity46,
                              'source_id' =>$idPlan1,
                              'value' => 100000000,
                              'goal' => 0,
                              'evidence_balance' => 100000000,
                              'age' => 1,
                              ]);
                              $idactivitySource5 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity49,
                              'source_id' =>$idPlan1,
                              'value' => 100000000,
                              'goal' => 0,
                              'evidence_balance' => 100000000,
                              'age' => 1,
                              ]);
                              $idactivitySource6 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity53,
                              'source_id' =>$idPlan1,
                              'value' => 3571948048,
                              'goal' => 0,
                              'evidence_balance' => 3571948048,
                              'age' => 1,
                              ]);
                              $idactivitySource7 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity59,
                              'source_id' =>$idPlan1,
                              'value' => 160000000,
                              'goal' => 0,
                              'evidence_balance' => 160000000,
                              'age' => 1,
                              ]);
                              $idactivitySource8 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity62,
                              'source_id' =>$idPlan1,
                              'value' => 6204614914,
                              'goal' => 0,
                              'evidence_balance' => 6204614914,
                              'age' => 1,
                              ]);
                              $idactivitySource9 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity67,
                              'source_id' =>$idPlan1,
                              'value' => 82800000,
                              'goal' => 0,
                              'evidence_balance' => 82800000,
                              'age' => 1,
                              ]);
                              $idactivitySource10 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity71,
                              'source_id' =>$idPlan1,
                              'value' => 30000000,
                              'goal' => 0,
                              'evidence_balance' => 30000000,
                              'age' => 1,
                              ]);
                              $idactivitySource11 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity90,
                              'source_id' =>$idPlan1,
                              'value' => 494000000,
                              'goal' => 0,
                              'evidence_balance' => 494000000,
                              'age' => 1,
                              ]);
                              $idactivitySource12 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity108,
                              'source_id' =>$idPlan1,
                              'value' => 364028000,
                              'goal' => 0,
                              'evidence_balance' => 364028000,
                              'age' => 1,
                              ]);
                              $idactivitySource13 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity117,
                              'source_id' =>$idPlan1,
                              'value' => 383685778.25,
                              'goal' => 0,
                              'evidence_balance' => 383685778.25,
                              'age' => 1,
                              ]);
                              $idactivitySource14 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity121,
                              'source_id' =>$idPlan5,
                              'value' => 375761624,
                              'goal' => 0,
                              'evidence_balance' => 375761624,
                              'age' => 1,
                              ]);
                              $idactivitySource15 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity126,
                              'source_id' =>$idPlan5,
                              'value' => 1589596141,
                              'goal' => 0,
                              'evidence_balance' => 1589596141,
                              'age' => 1,
                              ]);
                              $idactivitySource16 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity134,
                              'source_id' =>$idPlan5,
                              'value' => 335000000,
                              'goal' => 0,
                              'evidence_balance' => 335000000,
                              'age' => 1,
                              ]);
                              $idactivitySource17 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity145,
                              'source_id' =>$idPlan5,
                              'value' => 424456153.25,
                              'goal' => 0,
                              'evidence_balance' => 424456153.25,
                              'age' => 1,
                              ]);
                              $idactivitySource18 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity156,
                              'source_id' =>$idPlan4,
                              'value' => 983499046,
                              'goal' => 0,
                              'evidence_balance' => 983499046,
                              'age' => 1,
                              ]);
                              $idactivitySource19 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity162,
                              'source_id' =>$idPlan4,
                              'value' => 454853544,
                              'goal' => 0,
                              'evidence_balance' => 454853544,
                              'age' => 1,
                              ]);
                              $idactivitySource20 = DB::getPdo()->lastInsertId();
                              
                              
                              
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity117,
                                'source_id' =>$idPlan5,
                                'value' => 27076448.75,
                                'goal' => 0,
                                'evidence_balance' => 27076448.75,
                                'age' => 1,
                                ]);
                                $idactivitySource21 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity145,
                                'source_id' =>$idPlan4,
                                'value' => 89351188.75,
                                'goal' => 0,
                                'evidence_balance' => 89351188.75,
                                'age' => 1,
                                ]);
                                $idactivitySource22 = DB::getPdo()->lastInsertId();
                                
                                
                                
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia10,
                                  'activity_source_id' =>$idactivitySource1,
                                  'value' => 139083969,
                                  ]);
                                  $idevidenceFinancial1 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia27,
                                  'activity_source_id' =>$idactivitySource2,
                                  'value' => 4144918030,
                                  ]);
                                  $idevidenceFinancial2 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia32,
                                  'activity_source_id' =>$idactivitySource3,
                                  'value' => 240700488,
                                  ]);
                                  $idevidenceFinancial3 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia39,
                                  'activity_source_id' =>$idactivitySource4,
                                  'value' => 1486841609,
                                  ]);
                                  $idevidenceFinancial4 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia46,
                                  'activity_source_id' =>$idactivitySource5,
                                  'value' => 99999484,
                                  ]);
                                  $idevidenceFinancial5 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia49,
                                  'activity_source_id' =>$idactivitySource6,
                                  'value' => 99893019,
                                  ]);
                                  $idevidenceFinancial6 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia53,
                                  'activity_source_id' =>$idactivitySource7,
                                  'value' => 3568798106,
                                  ]);
                                  $idevidenceFinancial7 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia59,
                                  'activity_source_id' =>$idactivitySource8,
                                  'value' => 159999999,
                                  ]);
                                  $idevidenceFinancial8 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia62,
                                  'activity_source_id' =>$idactivitySource9,
                                  'value' => 6122787034,
                                  ]);
                                  $idevidenceFinancial9 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia67,
                                  'activity_source_id' =>$idactivitySource10,
                                  'value' => 58432720,
                                  ]);
                                  $idevidenceFinancial10 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia71,
                                  'activity_source_id' =>$idactivitySource11,
                                  'value' => 29701577,
                                  ]);
                                  $idevidenceFinancial11 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia90,
                                  'activity_source_id' =>$idactivitySource12,
                                  'value' => 407888143,
                                  ]);
                                  $idevidenceFinancial12 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia108,
                                  'activity_source_id' =>$idactivitySource13,
                                  'value' => 274369641,
                                  ]);
                                  $idevidenceFinancial13 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia117,
                                    'activity_source_id' =>$idactivitySource14,
                                    'value' => 364534773,
                                    ]);
                                    $idevidenceFinancial14 = DB::getPdo()->lastInsertId();
                             
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia121,
                                  'activity_source_id' =>$idactivitySource15,
                                  'value' => 288330164,
                                  ]);
                                  $idevidenceFinancial15 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia126,
                                  'activity_source_id' =>$idactivitySource16,
                                  'value' => 1448324409,
                                  ]);
                                  $idevidenceFinancial16 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia134,
                                  'activity_source_id' =>$idactivitySource17,
                                  'value' => 327012843,
                                  ]);
                                  $idevidenceFinancial17 = DB::getPdo()->lastInsertId();
                                  

                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia145,
                                    'activity_source_id' =>$idactivitySource18,
                                    'value' => 385151894,
                                    ]);
                                    $idevidenceFinancial18 = DB::getPdo()->lastInsertId();
                                    

                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia156,
                                  'activity_source_id' =>$idactivitySource19,
                                  'value' => 940535550,
                                  ]);
                                  $idevidenceFinancial19 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia162,
                                  'activity_source_id' =>$idactivitySource20,
                                  'value' => 340122536,
                                  ]);
                                  $idevidenceFinancial20 = DB::getPdo()->lastInsertId();
                                  

                                    
                                    
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity10,
                                      'source_id' =>$idPlan15,
                                      'value' => 196419400,
                                      'goal' => 0,
                                      'evidence_balance' => 196419400,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource23 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity27,
                                      'source_id' =>$idPlan15,
                                      'value' => 4652081064,
                                      'goal' => 0,
                                      'evidence_balance' => 4652081064,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource24 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity32,
                                      'source_id' =>$idPlan15,
                                      'value' => 346049751,
                                      'goal' => 0,
                                      'evidence_balance' => 346049751,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource25 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity39,
                                      'source_id' =>$idPlan15,
                                      'value' => 1651909538,
                                      'goal' => 0,
                                      'evidence_balance' => 1651909538,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource26 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity46,
                                      'source_id' =>$idPlan15,
                                      'value' => 100000000,
                                      'goal' => 0,
                                      'evidence_balance' => 100000000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource27 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity49,
                                      'source_id' =>$idPlan15,
                                      'value' => 100000000,
                                      'goal' => 0,
                                      'evidence_balance' => 100000000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource28 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity53,
                                      'source_id' =>$idPlan15,
                                      'value' => 3571948048,
                                      'goal' => 0,
                                      'evidence_balance' => 3571948048,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource29 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity59,
                                      'source_id' =>$idPlan16,
                                      'value' => 160000000,
                                      'goal' => 0,
                                      'evidence_balance' => 160000000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource30 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity62,
                                      'source_id' =>$idPlan15,
                                      'value' => 6204614914,
                                      'goal' => 0,
                                      'evidence_balance' => 6204614914,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource31 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity67,
                                      'source_id' =>$idPlan15,
                                      'value' => 82800000,
                                      'goal' => 0,
                                      'evidence_balance' => 82800000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource32 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity71,
                                      'source_id' =>$idPlan15,
                                      'value' => 30000000,
                                      'goal' => 0,
                                      'evidence_balance' => 30000000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource33 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity90,
                                      'source_id' =>$idPlan15,
                                      'value' => 494000000,
                                      'goal' => 0,
                                      'evidence_balance' => 494000000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource34 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity108,
                                      'source_id' =>$idPlan15,
                                      'value' => 364028000,
                                      'goal' => 0,
                                      'evidence_balance' => 364028000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource35 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity117,
                                      'source_id' =>$idPlan15,
                                      'value' => 410762227,
                                      'goal' => 0,
                                      'evidence_balance' => 410762227,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource36 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity121,
                                      'source_id' =>$idPlan15,
                                      'value' => 375761624,
                                      'goal' => 0,
                                      'evidence_balance' => 375761624,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource37 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity126,
                                      'source_id' =>$idPlan15,
                                      'value' => 169376724.5,
                                      'goal' => 0,
                                      'evidence_balance' => 169376724.5,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource38 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity134,
                                      'source_id' =>$idPlan24,
                                      'value' => 335000000,
                                      'goal' => 0,
                                      'evidence_balance' => 335000000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource39 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity145,
                                      'source_id' =>$idPlan24,
                                      'value' => 513807342,
                                      'goal' => 0,
                                      'evidence_balance' => 513807342,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource40 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity156,
                                      'source_id' =>$idPlan24,
                                      'value' => 983499046,
                                      'goal' => 0,
                                      'evidence_balance' => 983499046,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource41 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity162,
                                      'source_id' =>$idPlan24,
                                      'value' => 454853544,
                                      'goal' => 0,
                                      'evidence_balance' => 454853544,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource42 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                      DB::table('activity_sources')->insert([
                                        'activity_id' => $idactivity126,
                                        'source_id' =>$idPlan24,
                                        'value' => 1420219416.5,
                                        'goal' => 0,
                                        'evidence_balance' => 1420219416.5,
                                        'age' => 2,
                                        ]);
                                        $idactivitySource43 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia184,
                                          'activity_source_id' =>$idactivitySource23,
                                          'value' => 139083969,
                                          ]);
                                          $idevidenceFinancial23 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia201,
                                          'activity_source_id' =>$idactivitySource24,
                                          'value' => 4144918030,
                                          ]);
                                          $idevidenceFinancial24 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia206,
                                          'activity_source_id' =>$idactivitySource25,
                                          'value' => 240700488,
                                          ]);
                                          $idevidenceFinancial25 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia213,
                                          'activity_source_id' =>$idactivitySource26,
                                          'value' => 1486841609,
                                          ]);
                                          $idevidenceFinancial26 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia220,
                                          'activity_source_id' =>$idactivitySource27,
                                          'value' => 99999484,
                                          ]);
                                          $idevidenceFinancial27 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia223,
                                          'activity_source_id' =>$idactivitySource28,
                                          'value' => 99893019,
                                          ]);
                                          $idevidenceFinancial28 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia227,
                                          'activity_source_id' =>$idactivitySource29,
                                          'value' => 3568798106,
                                          ]);
                                          $idevidenceFinancial29 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia233,
                                          'activity_source_id' =>$idactivitySource30,
                                          'value' => 159999999,
                                          ]);
                                          $idevidenceFinancial30 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia236,
                                          'activity_source_id' =>$idactivitySource31,
                                          'value' => 6122787034,
                                          ]);
                                          $idevidenceFinancial31 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia241,
                                          'activity_source_id' =>$idactivitySource32,
                                          'value' => 58432720,
                                          ]);
                                          $idevidenceFinancial32 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia245,
                                          'activity_source_id' =>$idactivitySource33,
                                          'value' => 29701577,
                                          ]);
                                          $idevidenceFinancial33 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia264,
                                          'activity_source_id' =>$idactivitySource34,
                                          'value' => 407888143,
                                          ]);
                                          $idevidenceFinancial34 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia282,
                                          'activity_source_id' =>$idactivitySource35,
                                          'value' => 274369641,
                                          ]);
                                          $idevidenceFinancial35 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia291,
                                          'activity_source_id' =>$idactivitySource36,
                                          'value' => 364534773,
                                          ]);
                                          $idevidenceFinancial36 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia295,
                                          'activity_source_id' =>$idactivitySource37,
                                          'value' => 288330164,
                                          ]);
                                          $idevidenceFinancial37 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia300,
                                          'activity_source_id' =>$idactivitySource38,
                                          'value' => 169376724.5,
                                          ]);
                                          $idevidenceFinancial38 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia308,
                                          'activity_source_id' =>$idactivitySource39,
                                          'value' => 327012843,
                                          ]);
                                          $idevidenceFinancial39 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia319,
                                          'activity_source_id' =>$idactivitySource40,
                                          'value' => 385151894,
                                          ]);
                                          $idevidenceFinancial40 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia330,
                                          'activity_source_id' =>$idactivitySource41,
                                          'value' => 940535550,
                                          ]);
                                          $idevidenceFinancial41 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia336,
                                          'activity_source_id' =>$idactivitySource42,
                                          'value' => 340122536,
                                          ]);
                                          $idevidenceFinancial42 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia300,
                                            'activity_source_id' =>$idactivitySource43,
                                            'value' => 1278947684.5,
                                            ]);
                                            $idevidenceFinancial43 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                            DB::table('activity_sources')->insert([
                                              'activity_id' => $idactivity10,
                                              'source_id' =>$idPlan29,
                                              'value' => 196419400,
                                              'goal' => 0,
                                              'evidence_balance' => 196419400,
                                              'age' => 3,
                                              ]);
                                              $idactivitySource44 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('activity_sources')->insert([
                                              'activity_id' => $idactivity27,
                                              'source_id' =>$idPlan29,
                                              'value' => 4652081064,
                                              'goal' => 0,
                                              'evidence_balance' => 4652081064,
                                              'age' => 3,
                                              ]);
                                              $idactivitySource45 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('activity_sources')->insert([
                                              'activity_id' => $idactivity32,
                                              'source_id' =>$idPlan29,
                                              'value' => 346049751,
                                              'goal' => 0,
                                              'evidence_balance' => 346049751,
                                              'age' => 3,
                                              ]);
                                              $idactivitySource46 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('activity_sources')->insert([
                                              'activity_id' => $idactivity39,
                                              'source_id' =>$idPlan29,
                                              'value' => 1651909538,
                                              'goal' => 0,
                                              'evidence_balance' => 1651909538,
                                              'age' => 3,
                                              ]);
                                              $idactivitySource47 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('activity_sources')->insert([
                                              'activity_id' => $idactivity46,
                                              'source_id' =>$idPlan29,
                                              'value' => 100000000,
                                              'goal' => 0,
                                              'evidence_balance' => 100000000,
                                              'age' => 3,
                                              ]);
                                              $idactivitySource48 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('activity_sources')->insert([
                                              'activity_id' => $idactivity49,
                                              'source_id' =>$idPlan29,
                                              'value' => 100000000,
                                              'goal' => 0,
                                              'evidence_balance' => 100000000,
                                              'age' => 3,
                                              ]);
                                              $idactivitySource49 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('activity_sources')->insert([
                                              'activity_id' => $idactivity53,
                                              'source_id' =>$idPlan29,
                                              'value' => 3571948048,
                                              'goal' => 0,
                                              'evidence_balance' => 3571948048,
                                              'age' => 3,
                                              ]);
                                              $idactivitySource50 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('activity_sources')->insert([
                                              'activity_id' => $idactivity59,
                                              'source_id' =>$idPlan29,
                                              'value' => 160000000,
                                              'goal' => 0,
                                              'evidence_balance' => 160000000,
                                              'age' => 3,
                                              ]);
                                              $idactivitySource51 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('activity_sources')->insert([
                                              'activity_id' => $idactivity62,
                                              'source_id' =>$idPlan29,
                                              'value' => 6204614914,
                                              'goal' => 0,
                                              'evidence_balance' => 6204614914,
                                              'age' => 3,
                                              ]);
                                              $idactivitySource52 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('activity_sources')->insert([
                                              'activity_id' => $idactivity67,
                                              'source_id' =>$idPlan29,
                                              'value' => 82800000,
                                              'goal' => 0,
                                              'evidence_balance' => 82800000,
                                              'age' => 3,
                                              ]);
                                              $idactivitySource53 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('activity_sources')->insert([
                                              'activity_id' => $idactivity71,
                                              'source_id' =>$idPlan29,
                                              'value' => 30000000,
                                              'goal' => 0,
                                              'evidence_balance' => 30000000,
                                              'age' => 3,
                                              ]);
                                              $idactivitySource54 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('activity_sources')->insert([
                                              'activity_id' => $idactivity90,
                                              'source_id' =>$idPlan29,
                                              'value' => 494000000,
                                              'goal' => 0,
                                              'evidence_balance' => 494000000,
                                              'age' => 3,
                                              ]);
                                              $idactivitySource55 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('activity_sources')->insert([
                                              'activity_id' => $idactivity108,
                                              'source_id' =>$idPlan29,
                                              'value' => 364028000,
                                              'goal' => 0,
                                              'evidence_balance' => 364028000,
                                              'age' => 3,
                                              ]);
                                              $idactivitySource56 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('activity_sources')->insert([
                                              'activity_id' => $idactivity117,
                                              'source_id' =>$idPlan29,
                                              'value' => 410762227,
                                              'goal' => 0,
                                              'evidence_balance' => 410762227,
                                              'age' => 3,
                                              ]);
                                              $idactivitySource57 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('activity_sources')->insert([
                                              'activity_id' => $idactivity121,
                                              'source_id' =>$idPlan29,
                                              'value' => 375761624,
                                              'goal' => 0,
                                              'evidence_balance' => 375761624,
                                              'age' => 3,
                                              ]);
                                              $idactivitySource58 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('activity_sources')->insert([
                                              'activity_id' => $idactivity126,
                                              'source_id' =>$idPlan29,
                                              'value' => 27309013.4500008,
                                              'goal' => 0,
                                              'evidence_balance' => 27309013.4500008,
                                              'age' => 3,
                                              ]);
                                              $idactivitySource59 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('activity_sources')->insert([
                                              'activity_id' => $idactivity134,
                                              'source_id' =>$idPlan33,
                                              'value' => 335000000,
                                              'goal' => 0,
                                              'evidence_balance' => 335000000,
                                              'age' => 3,
                                              ]);
                                              $idactivitySource60 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('activity_sources')->insert([
                                              'activity_id' => $idactivity145,
                                              'source_id' =>$idPlan33,
                                              'value' => 513807342,
                                              'goal' => 0,
                                              'evidence_balance' => 513807342,
                                              'age' => 3,
                                              ]);
                                              $idactivitySource61 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('activity_sources')->insert([
                                              'activity_id' => $idactivity156,
                                              'source_id' =>$idPlan33,
                                              'value' => 983499046,
                                              'goal' => 0,
                                              'evidence_balance' => 983499046,
                                              'age' => 3,
                                              ]);
                                              $idactivitySource62 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('activity_sources')->insert([
                                              'activity_id' => $idactivity162,
                                              'source_id' =>$idPlan33,
                                              'value' => 454853544,
                                              'goal' => 0,
                                              'evidence_balance' => 454853544,
                                              'age' => 3,
                                              ]);
                                              $idactivitySource63 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                              DB::table('activity_sources')->insert([
                                                'activity_id' => $idactivity126,
                                                'source_id' =>$idPlan33,
                                                'value' => 1562287127.55,
                                                'goal' => 0,
                                                'evidence_balance' => 1562287127.55,
                                                'age' => 3,
                                                ]);
                                                $idactivitySource64 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                
                                                DB::table('evidence_financial')->insert([
                                                  'evidence_id' => $idevidencia358,
                                                  'activity_source_id' =>$idactivitySource44,
                                                  'value' => 139083969,
                                                  ]);
                                                  $idevidenceFinancial44 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('evidence_financial')->insert([
                                                  'evidence_id' => $idevidencia375,
                                                  'activity_source_id' =>$idactivitySource45,
                                                  'value' => 4144918030,
                                                  ]);
                                                  $idevidenceFinancial45 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('evidence_financial')->insert([
                                                  'evidence_id' => $idevidencia380,
                                                  'activity_source_id' =>$idactivitySource46,
                                                  'value' => 240700488,
                                                  ]);
                                                  $idevidenceFinancial46 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('evidence_financial')->insert([
                                                  'evidence_id' => $idevidencia387,
                                                  'activity_source_id' =>$idactivitySource47,
                                                  'value' => 1486841609,
                                                  ]);
                                                  $idevidenceFinancial47 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('evidence_financial')->insert([
                                                  'evidence_id' => $idevidencia394,
                                                  'activity_source_id' =>$idactivitySource48,
                                                  'value' => 99999484,
                                                  ]);
                                                  $idevidenceFinancial48 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('evidence_financial')->insert([
                                                  'evidence_id' => $idevidencia397,
                                                  'activity_source_id' =>$idactivitySource49,
                                                  'value' => 99893019,
                                                  ]);
                                                  $idevidenceFinancial49 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('evidence_financial')->insert([
                                                  'evidence_id' => $idevidencia401,
                                                  'activity_source_id' =>$idactivitySource50,
                                                  'value' => 3568798106,
                                                  ]);
                                                  $idevidenceFinancial50 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('evidence_financial')->insert([
                                                  'evidence_id' => $idevidencia407,
                                                  'activity_source_id' =>$idactivitySource51,
                                                  'value' => 159999999,
                                                  ]);
                                                  $idevidenceFinancial51 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('evidence_financial')->insert([
                                                  'evidence_id' => $idevidencia410,
                                                  'activity_source_id' =>$idactivitySource52,
                                                  'value' => 6122787034,
                                                  ]);
                                                  $idevidenceFinancial52 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('evidence_financial')->insert([
                                                  'evidence_id' => $idevidencia415,
                                                  'activity_source_id' =>$idactivitySource53,
                                                  'value' => 58432720,
                                                  ]);
                                                  $idevidenceFinancial53 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('evidence_financial')->insert([
                                                  'evidence_id' => $idevidencia419,
                                                  'activity_source_id' =>$idactivitySource54,
                                                  'value' => 29701577,
                                                  ]);
                                                  $idevidenceFinancial54 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('evidence_financial')->insert([
                                                  'evidence_id' => $idevidencia438,
                                                  'activity_source_id' =>$idactivitySource55,
                                                  'value' => 407888143,
                                                  ]);
                                                  $idevidenceFinancial55 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('evidence_financial')->insert([
                                                  'evidence_id' => $idevidencia456,
                                                  'activity_source_id' =>$idactivitySource56,
                                                  'value' => 274369641,
                                                  ]);
                                                  $idevidenceFinancial56 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('evidence_financial')->insert([
                                                  'evidence_id' => $idevidencia465,
                                                  'activity_source_id' =>$idactivitySource57,
                                                  'value' => 364534773,
                                                  ]);
                                                  $idevidenceFinancial57 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('evidence_financial')->insert([
                                                  'evidence_id' => $idevidencia469,
                                                  'activity_source_id' =>$idactivitySource58,
                                                  'value' => 288330164,
                                                  ]);
                                                  $idevidenceFinancial58 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('evidence_financial')->insert([
                                                  'evidence_id' => $idevidencia474,
                                                  'activity_source_id' =>$idactivitySource59,
                                                  'value' => 27309013.4500008,
                                                  ]);
                                                  $idevidenceFinancial59 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('evidence_financial')->insert([
                                                  'evidence_id' => $idevidencia482,
                                                  'activity_source_id' =>$idactivitySource60,
                                                  'value' => 327012843,
                                                  ]);
                                                  $idevidenceFinancial60 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('evidence_financial')->insert([
                                                  'evidence_id' => $idevidencia493,
                                                  'activity_source_id' =>$idactivitySource61,
                                                  'value' => 385151894,
                                                  ]);
                                                  $idevidenceFinancial61 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('evidence_financial')->insert([
                                                  'evidence_id' => $idevidencia504,
                                                  'activity_source_id' =>$idactivitySource62,
                                                  'value' => 940535550,
                                                  ]);
                                                  $idevidenceFinancial62 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('evidence_financial')->insert([
                                                  'evidence_id' => $idevidencia510,
                                                  'activity_source_id' =>$idactivitySource63,
                                                  'value' => 340122536,
                                                  ]);
                                                  $idevidenceFinancial63 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                  DB::table('evidence_financial')->insert([
                                                    'evidence_id' => $idevidencia474,
                                                    'activity_source_id' =>$idactivitySource64,
                                                    'value' => 1421015395.55,
                                                    ]);
                                                    $idevidenceFinancial64 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
                            
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity10,
                              'source_id' =>$idPlan42,
                              'value' => 268263870,
                              'goal' => 0,
                              'evidence_balance' => 268263870,
                              'age' => 4,
                              ]);
                              $idactivitySource65 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity27,
                              'source_id' =>$idPlan42,
                              'value' => 3689447778,
                              'goal' => 0,
                              'evidence_balance' => 3689447778,
                              'age' => 4,
                              ]);
                              $idactivitySource66 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity32,
                              'source_id' =>$idPlan42,
                              'value' => 448623436,
                              'goal' => 0,
                              'evidence_balance' => 448623436,
                              'age' => 4,
                              ]);
                              $idactivitySource67 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity39,
                              'source_id' =>$idPlan42,
                              'value' => 1156918651,
                              'goal' => 0,
                              'evidence_balance' => 1156918651,
                              'age' => 4,
                              ]);
                              $idactivitySource69 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity42,
                              'source_id' =>$idPlan42,
                              'value' => 45582314,
                              'goal' => 0,
                              'evidence_balance' => 45582314,
                              'age' => 4,
                              ]);
                              $idactivitySource70 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity46,
                              'source_id' =>$idPlan42,
                              'value' => 192114870,
                              'goal' => 0,
                              'evidence_balance' => 192114870,
                              'age' => 4,
                              ]);
                              $idactivitySource71 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity49,
                              'source_id' =>$idPlan42,
                              'value' => 144674398,
                              'goal' => 0,
                              'evidence_balance' => 144674398,
                              'age' => 4,
                              ]);
                              $idactivitySource72 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity53,
                              'source_id' =>$idPlan42,
                              'value' => 4380741977,
                              'goal' => 0,
                              'evidence_balance' => 4380741977,
                              'age' => 4,
                              ]);
                              $idactivitySource73 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity59,
                              'source_id' =>$idPlan42,
                              'value' => 360071080,
                              'goal' => 0,
                              'evidence_balance' => 360071080,
                              'age' => 4,
                              ]);
                              $idactivitySource74 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity62,
                              'source_id' =>$idPlan42,
                              'value' => 7831755946,
                              'goal' => 0,
                              'evidence_balance' => 7831755946,
                              'age' => 4,
                              ]);
                              $idactivitySource75 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity67,
                              'source_id' =>$idPlan42,
                              'value' => 84566370,
                              'goal' => 0,
                              'evidence_balance' => 84566370,
                              'age' => 4,
                              ]);
                              $idactivitySource76 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity71,
                              'source_id' =>$idPlan42,
                              'value' => 137617686,
                              'goal' => 0,
                              'evidence_balance' => 137617686,
                              'age' => 4,
                              ]);
                              $idactivitySource77 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity90,
                              'source_id' =>$idPlan42,
                              'value' => 1363919406,
                              'goal' => 0,
                              'evidence_balance' => 1363919406,
                              'age' => 4,
                              ]);
                              $idactivitySource78 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity108,
                              'source_id' =>$idPlan42,
                              'value' => 765628550,
                              'goal' => 0,
                              'evidence_balance' => 765628550,
                              'age' => 4,
                              ]);
                              $idactivitySource79 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity117,
                              'source_id' =>$idPlan42,
                              'value' => 1035007497,
                              'goal' => 0,
                              'evidence_balance' => 1035007497,
                              'age' => 4,
                              ]);
                              $idactivitySource80 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity121,
                              'source_id' =>$idPlan42,
                              'value' => 350000000,
                              'goal' => 0,
                              'evidence_balance' => 350000000,
                              'age' => 4,
                              ]);
                              $idactivitySource81 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity126,
                              'source_id' =>$idPlan42,
                              'value' => 875861447.25,
                              'goal' => 0,
                              'evidence_balance' => 875861447.25,
                              'age' => 4,
                              ]);
                              $idactivitySource82 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity134,
                              'source_id' =>$idPlan45,
                              'value' => 448000000,
                              'goal' => 0,
                              'evidence_balance' => 448000000,
                              'age' => 4,
                              ]);
                              $idactivitySource83 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity145,
                              'source_id' =>$idPlan45,
                              'value' => 503096349,
                              'goal' => 0,
                              'evidence_balance' => 503096349,
                              'age' => 4,
                              ]);
                              $idactivitySource84 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity156,
                              'source_id' =>$idPlan45,
                              'value' => 1647523344.9,
                              'goal' => 0,
                              'evidence_balance' => 1647523344.9,
                              'age' => 4,
                              ]);
                              $idactivitySource85 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity162,
                              'source_id' =>$idPlan46,
                              'value' => 607821887,
                              'goal' => 0,
                              'evidence_balance' => 607821887,
                              'age' => 4,
                              ]);
                              $idactivitySource86 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity166,
                              'source_id' =>$idPlan46,
                              'value' => 194305964,
                              'goal' => 0,
                              'evidence_balance' => 194305964,
                              'age' => 4,
                              ]);
                              $idactivitySource87 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity169,
                              'source_id' =>$idPlan46,
                              'value' => 678332512,
                              'goal' => 0,
                              'evidence_balance' => 678332512,
                              'age' => 4,
                              ]);
                              $idactivitySource88 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity174,
                              'source_id' =>$idPlan46,
                              'value' => 690714284.75,
                              'goal' => 0,
                              'evidence_balance' => 690714284.75,
                              'age' => 4,
                              ]);
                              $idactivitySource89 = DB::getPdo()->lastInsertId();
                              
                              
                              
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity126,
                                'source_id' =>$idPlan45,
                                'value' => 600958363.75,
                                'goal' => 0,
                                'evidence_balance' => 600958363.75,
                                'age' => 4,
                                ]);
                                $idactivitySource90 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity156,
                                'source_id' =>$idPlan46,
                                'value' => 276972505.1,
                                'goal' => 0,
                                'evidence_balance' => 276972505.1,
                                'age' => 4,
                                ]);
                                $idactivitySource91 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity174,
                                'source_id' =>$idPlan43,
                                'value' => 168000000,
                                'goal' => 0,
                                'evidence_balance' => 168000000,
                                'age' => 4,
                                ]);
                                $idactivitySource92 = DB::getPdo()->lastInsertId();
                                
                                
                                
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity174,
                                  'source_id' =>$idPlan44,
                                  'value' => 865773.1,
                                  'goal' => 0,
                                  'evidence_balance' => 865773.1,
                                  'age' => 4,
                                  ]);
                                  $idactivitySource93 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity174,
                                    'source_id' =>$idPlan47,
                                    'value' => 1280000000,
                                    'goal' => 0,
                                    'evidence_balance' => 1280000000,
                                    'age' => 4,
                                    ]);
                                    $idactivitySource94 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity174,
                                      'source_id' =>$idPlan49,
                                      'value' => 240309200.75,
                                      'goal' => 0,
                                      'evidence_balance' => 240309200.75,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource95 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                      DB::table('activity_sources')->insert([
                                        'activity_id' => $idactivity174,
                                        'source_id' =>$idPlan50,
                                        'value' => 4791697,
                                        'goal' => 0,
                                        'evidence_balance' => 4791697,
                                        'age' => 4,
                                        ]);
                                        $idactivitySource96 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity174,
                                          'source_id' =>$idPlan51,
                                          'value' => 119505758.78563,
                                          'goal' => 0,
                                          'evidence_balance' => 119505758.78563,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource97 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity174,
                                          'source_id' =>$idPlan52,
                                          'value' => 461905664,
                                          'goal' => 0,
                                          'evidence_balance' => 461905664,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource98 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity174,
                                          'source_id' =>$idPlan53,
                                          'value' => 700000000,
                                          'goal' => 0,
                                          'evidence_balance' => 700000000,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource99 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity174,
                                          'source_id' =>$idPlan54,
                                          'value' => 23906200,
                                          'goal' => 0,
                                          'evidence_balance' => 23906200,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource100 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity174,
                                          'source_id' =>$idPlan55,
                                          'value' => 2079697718.58,
                                          'goal' => 0,
                                          'evidence_balance' => 2079697718.58,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource101 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity174,
                                          'source_id' =>$idPlan56,
                                          'value' => 482667292,
                                          'goal' => 0,
                                          'evidence_balance' => 482667292,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource102 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia532,
                                            'activity_source_id' =>$idactivitySource65,
                                            'value' => 261345874,
                                            ]);
                                            $idevidenceFinancial65 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia549,
                                            'activity_source_id' =>$idactivitySource66,
                                            'value' => 2890026952,
                                            ]);
                                            $idevidenceFinancial66 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia554,
                                            'activity_source_id' =>$idactivitySource67,
                                            'value' => 444709691,
                                            ]);
                                            $idevidenceFinancial67 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia561,
                                            'activity_source_id' =>$idactivitySource69,
                                            'value' => 475859621,
                                            ]);
                                            $idevidenceFinancial69 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia564,
                                            'activity_source_id' =>$idactivitySource70,
                                            'value' => 22898449,
                                            ]);
                                            $idevidenceFinancial70 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia568,
                                            'activity_source_id' =>$idactivitySource71,
                                            'value' => 158749308,
                                            ]);
                                            $idevidenceFinancial71 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia571,
                                            'activity_source_id' =>$idactivitySource72,
                                            'value' => 144671678,
                                            ]);
                                            $idevidenceFinancial72 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia575,
                                            'activity_source_id' =>$idactivitySource73,
                                            'value' => 3790340439,
                                            ]);
                                            $idevidenceFinancial73 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia581,
                                            'activity_source_id' =>$idactivitySource74,
                                            'value' => 189057762,
                                            ]);
                                            $idevidenceFinancial74 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia584,
                                            'activity_source_id' =>$idactivitySource75,
                                            'value' => 7440125849,
                                            ]);
                                            $idevidenceFinancial75 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia589,
                                            'activity_source_id' =>$idactivitySource76,
                                            'value' => 83811685,
                                            ]);
                                            $idevidenceFinancial76 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia593,
                                            'activity_source_id' =>$idactivitySource77,
                                            'value' => 74999804,
                                            ]);
                                            $idevidenceFinancial77 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia612,
                                            'activity_source_id' =>$idactivitySource78,
                                            'value' => 1353985823,
                                            ]);
                                            $idevidenceFinancial78 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia630,
                                            'activity_source_id' =>$idactivitySource79,
                                            'value' => 635660459,
                                            ]);
                                            $idevidenceFinancial79 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia639,
                                            'activity_source_id' =>$idactivitySource80,
                                            'value' => 752618635,
                                            ]);
                                            $idevidenceFinancial80 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia643,
                                            'activity_source_id' =>$idactivitySource81,
                                            'value' => 345921792,
                                            ]);
                                            $idevidenceFinancial81 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia648,
                                            'activity_source_id' =>$idactivitySource82,
                                            'value' => 875861447.25,
                                            ]);
                                            $idevidenceFinancial82 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia656,
                                            'activity_source_id' =>$idactivitySource83,
                                            'value' => 373000000,
                                            ]);
                                            $idevidenceFinancial83 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia667,
                                            'activity_source_id' =>$idactivitySource84,
                                            'value' => 473206223,
                                            ]);
                                            $idevidenceFinancial84 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia678,
                                            'activity_source_id' =>$idactivitySource85,
                                            'value' => 1647523344.9,
                                            ]);
                                            $idevidenceFinancial85 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia684,
                                            'activity_source_id' =>$idactivitySource86,
                                            'value' => 579551728,
                                            ]);
                                            $idevidenceFinancial86 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia688,
                                            'activity_source_id' =>$idactivitySource87,
                                            'value' => 194251347,
                                            ]);
                                            $idevidenceFinancial87 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia691,
                                            'activity_source_id' =>$idactivitySource88,
                                            'value' => 512605694,
                                            ]);
                                            $idevidenceFinancial88 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia696,
                                            'activity_source_id' =>$idactivitySource89,
                                            'value' => 690714284.75,
                                            ]);
                                            $idevidenceFinancial89 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia648,
                                              'activity_source_id' =>$idactivitySource90,
                                              'value' => 406210176.75,
                                              ]);
                                              $idevidenceFinancial90 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia678,
                                              'activity_source_id' =>$idactivitySource91,
                                              'value' => 269710859.1,
                                              ]);
                                              $idevidenceFinancial91 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia696,
                                              'activity_source_id' =>$idactivitySource92,
                                              'value' => 168000000,
                                              ]);
                                              $idevidenceFinancial92 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                              DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia696,
                                                'activity_source_id' =>$idactivitySource93,
                                                'value' => 865773.1,
                                                ]);
                                                $idevidenceFinancial93 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                  DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia696,
                                                'activity_source_id' =>$idactivitySource94,
                                                'value' => 1280000000,
                                                ]);
                                                $idevidenceFinancial94 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                  DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia696,
                                                'activity_source_id' =>$idactivitySource95,
                                                'value' => 240309200.75,
                                                ]);
                                                $idevidenceFinancial95 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                  DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia696,
                                                'activity_source_id' =>$idactivitySource96,
                                                'value' => 4791697,
                                                ]);
                                                $idevidenceFinancial96 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                  DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia696,
                                                'activity_source_id' =>$idactivitySource97,
                                                'value' => 119505758.78563,
                                                ]);
                                                $idevidenceFinancial97 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                  DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia696,
                                                'activity_source_id' =>$idactivitySource98,
                                                'value' => 461905664,
                                                ]);
                                                $idevidenceFinancial98 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                  DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia696,
                                                'activity_source_id' =>$idactivitySource99,
                                                'value' => 700000000,
                                                ]);
                                                $idevidenceFinancial99 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                  DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia696,
                                                'activity_source_id' =>$idactivitySource100,
                                                'value' => 23906200,
                                                ]);
                                                $idevidenceFinancial100 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                  DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia696,
                                                'activity_source_id' =>$idactivitySource101,
                                                'value' => 2079697718.58,
                                                ]);
                                                $idevidenceFinancial101 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                  DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia696,
                                                'activity_source_id' =>$idactivitySource102,
                                                'value' => 464287445.03437,
                                                ]);
                                                $idevidenceFinancial102 = DB::getPdo()->lastInsertId();
                                                
                  }
}