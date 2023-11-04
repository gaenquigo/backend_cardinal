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
 * Class HistoricPAI_CARSUCRE_Seeder
 */
class HistoricPAI_CARSUCRE_Seeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $pai=PAI::create([
      'name' => 'Plan de acción Institucional 2016-2019. CARSUCRE, preservamos por naturaleza.',
      'start_date' => '2016-01-01',
      'end_date' => '2019-12-31',
      'director_name' => 'JOHNNY AVENDAÑO ESTRADA',
      'group_id' => 6,
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
          'car_program' => 'PROGRAMA No 1. MANEJO INTEGRAL DEL AGUA',
          'weighing' => 17,
          ]);
          $idprogram1 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA No 2. CONSERVACIÓN, USO Y RESTAURACIÓN DE ECOSISTEMAS',
          'weighing' => 17,
          ]);
          $idprogram2 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'Programa 3. NEGOCIOS VERDES, PROCESOS PRODUCTIVOS, COMPETITIVOS Y SOSTENIBLES',
          'weighing' => 17,
          ]);
          $idprogram3 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'Programa 4. PLANIFICACIÓN Y ADMINISTRACIÓN EFICIENTE DEL MEDIO AMBIENTE',
          'weighing' => 17,
          ]);
          $idprogram4 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'Programa 5. PLANIFICACIÓN, CONOCIMIENTO DEL RIESGO Y ADAPTACIÓN AL CAMBIO CLIMÁTICO',
          'weighing' => 16,
          ]);
          $idprogram5 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'Programa 6. PLANIFICACIÓN Y ORDENAMIENTO AMBIENTAL DEL TERRITORIO',
          'weighing' => 16,
          ]);
          $idprogram6 = DB::getPdo()->lastInsertId();
          
          
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => 'PROYECTO 1.1. Proteccion Integral de Aguas Subterraneas ',
            'weighing' => 20,
            ]);
            $idproject1 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => 'Proyecto No 1.2. Restauracion de Bosques en la Zonas de Recarga',
            'weighing' => 20,
            ]);
            $idproject2 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => 'Proyecto No 1.3. Administracion, Planificacion y Monitoreo del Recurso Hidrico',
            'weighing' => 20,
            ]);
            $idproject3 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => 'Proyecto 1.4. Descontaminacion Ambiental de Fuentes Hidricas',
            'weighing' => 20,
            ]);
            $idproject4 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => 'Proyecto 1.5. Recuperación de áreas deforestadas de la cuenca hidrográfica del arroyo Mancomojan en el municipio de Ovejas, Sucre',
            'weighing' => 20,
            ]);
            $idproject5 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => 'Proyecto 2.1. Estudio y Recuperación de Áreas Degradadas',
            'weighing' => 10,
            ]);
            $idproject6 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => 'Proyecto No 2.2. Fortalecimiento del Centro de Atencion y Valorizacion Mantecaña',
            'weighing' => 10,
            ]);
            $idproject7 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => 'Proyecto 2.3. Consolidación del Sistema de Áreas Protegidas ',
            'weighing' => 10,
            ]);
            $idproject8 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => 'Proyecto 2.4. Manejo de la Fauna Silvestre',
            'weighing' => 10,
            ]);
            $idproject9 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => 'Proyecto 2.5. Recuperación de Areas Desforestadas de la Cuenca Hidrografica del Arroyo Mancomojanan en el Municipio de Ovejas-Sucre',
            'weighing' => 10,
            ]);
            $idproject10 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => 'Convenio especifico DHS 8000001551 entre Ecopetrol y Carsucre',
            'weighing' => 10,
            ]);
            $idproject11 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => 'Convenio de cooperacion suscrito entre el Invemar y Carsucre',
            'weighing' => 10,
            ]);
            $idproject12 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => 'Convenio Marco de cooperación Corpomojana, Corpomag y Corpouraba',
            'weighing' => 10,
            ]);
            $idproject13 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => 'Convenio Marco de cooperación Numero 006/2005 SIRAP CARIBE',
            'weighing' => 10,
            ]);
            $idproject14 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => 'Convenio FAO-GEF 2017',
            'weighing' => 10,
            ]);
            $idproject15 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram3,
            'project' => 'Proyecto 3.1. Apoyo e implementación del programa Regional de Negocios Verdes',
            'weighing' => 100,
            ]);
            $idproject16 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram4,
            'project' => 'Proyecto 4.1. Análisis, estructuración y Fortalecimiento Institucional de la Corporación ',
            'weighing' => 20,
            ]);
            $idproject17 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram4,
            'project' => 'Proyecto 4.2. Implementación del Sistema de Información Ambiental',
            'weighing' => 20,
            ]);
            $idproject18 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram4,
            'project' => 'Proyecto 4.3. Implementación de Nuevas Tecnologías Para el Establecimiento y Desarrollo de La Comunidad Virtual Ambiental de la Corporación',
            'weighing' => 20,
            ]);
            $idproject19 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram4,
            'project' => 'Proyecto 4.4. Administración, Control y Vigilancia de los Recursos Naturales Renovables ',
            'weighing' => 20,
            ]);
            $idproject20 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram4,
            'project' => 'Proyecto 4.5. Educación Ambiental, Participación y Comunicación',
            'weighing' => 20,
            ]);
            $idproject21 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram5,
            'project' => 'Proyecto 5.1. Apoyo para la prevención del Riesgo de Desastres y Adaptación al Cambio Climatico',
            'weighing' => 50,
            ]);
            $idproject22 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram5,
            'project' => 'Proyecto 5.2. Apoyo e Implementación Técnica de Producción Limpia ',
            'weighing' => 50,
            ]);
            $idproject23 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram6,
            'project' => 'Proyecto 6.1. Formulación Plan de Manejo y Ordenación Cuencas Hidrográficas',
            'weighing' => 17,
            ]);
            $idproject24 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram6,
            'project' => 'Proyecto 6.2. Formulación Plan de Manejo y Ordenación Cuencas Hidrográficas',
            'weighing' => 17,
            ]);
            $idproject25 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram6,
            'project' => 'Proyecto 6.3. Manejo Integrado de la Unidad Ambiental Costera Estuarina Rio Sinú Golfo de Morrosquillo',
            'weighing' => 17,
            ]);
            $idproject26 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram6,
            'project' => 'Convenio Interadministrativo No 560 de 2017 para fortalecer fases del POMIUAC Morrosquillo',
            'weighing' => 17,
            ]);
            $idproject27 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram6,
            'project' => 'Proyecto 6.4. Prevención de Riesgo al Secamiento Salinización y perdida del Ecosistema Manglarico en la Jurisdicción de Carsucre',
            'weighing' => 16,
            ]);
            $idproject28 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram6,
            'project' => 'Proyecto 6.5.1. Identificacion y acotamiento de las rondas hidricas de los Arroyos Grandes, Pechilin, y Palenquillo en la Jurisdiccion de la Corporacion Autonoma Regional de Sucre - CARSUCRE',
            'weighing' => 16,
            ]);
            $idproject29 = DB::getPdo()->lastInsertId();
            
            
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
              'weighing' => 101,
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
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject18,
              'objective' => 'Objetivo',
              'weighing' => 100,
              ]);
              $idobjective18 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject19,
              'objective' => 'Objetivo',
              'weighing' => 100,
              ]);
              $idobjective19 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject20,
              'objective' => 'Objetivo',
              'weighing' => 100,
              ]);
              $idobjective20 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject21,
              'objective' => 'Objetivo',
              'weighing' => 100,
              ]);
              $idobjective21 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject22,
              'objective' => 'Objetivo',
              'weighing' => 100,
              ]);
              $idobjective22 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject23,
              'objective' => 'Objetivo',
              'weighing' => 100,
              ]);
              $idobjective23 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject24,
              'objective' => 'Objetivo',
              'weighing' => 100,
              ]);
              $idobjective24 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject25,
              'objective' => 'Objetivo',
              'weighing' => 100,
              ]);
              $idobjective25 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject26,
              'objective' => 'Objetivo',
              'weighing' => 100,
              ]);
              $idobjective26 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject27,
              'objective' => 'Objetivo',
              'weighing' => 100,
              ]);
              $idobjective27 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject28,
              'objective' => 'Objetivo',
              'weighing' => 100,
              ]);
              $idobjective28 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject29,
              'objective' => 'Objetivo',
              'weighing' => 100,
              ]);
              $idobjective29 = DB::getPdo()->lastInsertId();
              
              
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 0,
                'goal_2' => 3,
                'goal_3' => 2,
                'goal_4' => 3,
                'goal_1_balance' => 0,
                'goal_2_balance' => 3,
                'goal_3_balance' => 2,
                'goal_4_balance' => 3,
                'total_goal' => 8,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct1 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => null,
                'product_other' => 'Producto No 1.1.2. Plan de Manejo Acuífero Morroa y Morrosquillo en Ejecución',
                'goal_1' => 3,
                'goal_2' => 3,
                'goal_3' => 3,
                'goal_4' => 0,
                'goal_1_balance' => 3,
                'goal_2_balance' => 3,
                'goal_3_balance' => 3,
                'goal_4_balance' => 0,
                'total_goal' => 9,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct2 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 150,
                'goal_2' => 190,
                'goal_3' => 340,
                'goal_4' => 30,
                'goal_1_balance' => 150,
                'goal_2_balance' => 190,
                'goal_3_balance' => 340,
                'goal_4_balance' => 30,
                'total_goal' => 710,
                'unit_goal' => 47,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct3 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 569,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 569,
                'total_goal' => 569,
                'unit_goal' => 47,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct4 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 260,
                'goal_2' => 260,
                'goal_3' => 260,
                'goal_4' => 260,
                'goal_1_balance' => 260,
                'goal_2_balance' => 260,
                'goal_3_balance' => 260,
                'goal_4_balance' => 260,
                'total_goal' => 1040,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct5 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => null,
                'product_other' => 'Producto No 1.3.2. Plan de Manejo Acuífero Morroa y Morrosquillo en Ejecución',
                'goal_1' => 0,
                'goal_2' => 3,
                'goal_3' => 3,
                'goal_4' => 3,
                'goal_1_balance' => 0,
                'goal_2_balance' => 3,
                'goal_3_balance' => 3,
                'goal_4_balance' => 3,
                'total_goal' => 9,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct6 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 0,
                'goal_2' => 0.15,
                'goal_3' => 0.45,
                'goal_4' => 0.3,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0.15,
                'goal_3_balance' => 0.45,
                'goal_4_balance' => 0.3,
                'total_goal' => 0.9,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct7 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 0.85,
                'goal_2' => 1,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 0.85,
                'goal_2_balance' => 1,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 1.85,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct8 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 60,
                'goal_2' => 60,
                'goal_3' => 60,
                'goal_4' => 60,
                'goal_1_balance' => 60,
                'goal_2_balance' => 60,
                'goal_3_balance' => 60,
                'goal_4_balance' => 60,
                'total_goal' => 240,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct9 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => null,
                'product_other' => 'Producto 5',
                'goal_1' => 2,
                'goal_2' => 6,
                'goal_3' => 10,
                'goal_4' => 16,
                'goal_1_balance' => 2,
                'goal_2_balance' => 6,
                'goal_3_balance' => 10,
                'goal_4_balance' => 16,
                'total_goal' => 34,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 15,
                ]);
                $idobjectiveproduct10 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => null,
                'product_other' => 'Producto 6',
                'goal_1' => 15,
                'goal_2' => 15,
                'goal_3' => 15,
                'goal_4' => 19,
                'goal_1_balance' => 15,
                'goal_2_balance' => 15,
                'goal_3_balance' => 15,
                'goal_4_balance' => 19,
                'total_goal' => 64,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 15,
                ]);
                $idobjectiveproduct11 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective4,
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
                $idobjectiveproduct12 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 229,
                'goal_4' => 0,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 229,
                'goal_4_balance' => 0,
                'total_goal' => 229,
                'unit_goal' => 47,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct13 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective6,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 50,
                'goal_2' => 47.3,
                'goal_3' => 300,
                'goal_4' => 0,
                'goal_1_balance' => 50,
                'goal_2_balance' => 47.3,
                'goal_3_balance' => 300,
                'goal_4_balance' => 0,
                'total_goal' => 397.3,
                'unit_goal' => 47,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct14 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective6,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 47.3,
                'goal_4' => 347.3,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 47.3,
                'goal_4_balance' => 347.3,
                'total_goal' => 394.6,
                'unit_goal' => 47,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct15 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 2,
                'goal_2' => 1,
                'goal_3' => 3,
                'goal_4' => 2,
                'goal_1_balance' => 2,
                'goal_2_balance' => 1,
                'goal_3_balance' => 3,
                'goal_4_balance' => 2,
                'total_goal' => 8,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 33,
                ]);
                $idobjectiveproduct16 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 500000,
                'goal_2' => 300000,
                'goal_3' => 300000,
                'goal_4' => 300000,
                'goal_1_balance' => 500000,
                'goal_2_balance' => 300000,
                'goal_3_balance' => 300000,
                'goal_4_balance' => 300000,
                'total_goal' => 1400000,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 33,
                ]);
                $idobjectiveproduct17 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
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
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 34,
                ]);
                $idobjectiveproduct18 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 0.8,
                'goal_4' => 3286,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0.8,
                'goal_4_balance' => 3286,
                'total_goal' => 3286.8,
                'unit_goal' => 47,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct19 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
                'product_id' => null,
                'product_other' => 'Producto 2',
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
                'weighing' => 50,
                ]);
                $idobjectiveproduct20 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 3,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 0,
                'goal_1_balance' => 3,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 0,
                'total_goal' => 5,
                'unit_goal' => 43,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 33,
                ]);
                $idobjectiveproduct21 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 0,
                'goal_2' => 2,
                'goal_3' => 0,
                'goal_4' => 2,
                'goal_1_balance' => 0,
                'goal_2_balance' => 2,
                'goal_3_balance' => 0,
                'goal_4_balance' => 2,
                'total_goal' => 4,
                'unit_goal' => 43,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 33,
                ]);
                $idobjectiveproduct22 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 2,
                'goal_2' => 2,
                'goal_3' => 3,
                'goal_4' => 2,
                'goal_1_balance' => 2,
                'goal_2_balance' => 2,
                'goal_3_balance' => 3,
                'goal_4_balance' => 2,
                'total_goal' => 9,
                'unit_goal' => 43,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 34,
                ]);
                $idobjectiveproduct23 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective10,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 1,
                'goal_2' => 0,
                'goal_3' => 2,
                'goal_4' => 0,
                'goal_1_balance' => 1,
                'goal_2_balance' => 0,
                'goal_3_balance' => 2,
                'goal_4_balance' => 0,
                'total_goal' => 3,
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct24 = DB::getPdo()->lastInsertId();
                
                
                
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
                'weighing' => 100,
                ]);
                $idobjectiveproduct25 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
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
                'weighing' => 100,
                ]);
                $idobjectiveproduct26 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective13,
                'product_id' => null,
                'product_other' => 'Producto 1',
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
                'weighing' => 100,
                ]);
                $idobjectiveproduct27 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct28 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective15,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct29 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective16,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 0.6,
                'goal_2' => 1,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 0.6,
                'goal_2_balance' => 1,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 1.6,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 33,
                ]);
                $idobjectiveproduct30 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective16,
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
                'weighing' => 33,
                ]);
                $idobjectiveproduct31 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective16,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 35,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 35,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 35,
                'unit_goal' => 47,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 34,
                ]);
                $idobjectiveproduct32 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective17,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 0,
                'goal_2' => 3,
                'goal_3' => 3,
                'goal_4' => 1,
                'goal_1_balance' => 0,
                'goal_2_balance' => 3,
                'goal_3_balance' => 3,
                'goal_4_balance' => 1,
                'total_goal' => 7,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 12,
                ]);
                $idobjectiveproduct33 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective17,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 19,
                'goal_2' => 19,
                'goal_3' => 19,
                'goal_4' => 19,
                'goal_1_balance' => 19,
                'goal_2_balance' => 19,
                'goal_3_balance' => 19,
                'goal_4_balance' => 19,
                'total_goal' => 76,
                'unit_goal' => 57,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 13,
                ]);
                $idobjectiveproduct34 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective17,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 4,
                'goal_4' => 0,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 4,
                'goal_4_balance' => 0,
                'total_goal' => 6,
                'unit_goal' => 57,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 12,
                ]);
                $idobjectiveproduct35 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective17,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 3,
                'goal_2' => 4,
                'goal_3' => 4,
                'goal_4' => 4,
                'goal_1_balance' => 3,
                'goal_2_balance' => 4,
                'goal_3_balance' => 4,
                'goal_4_balance' => 4,
                'total_goal' => 15,
                'unit_goal' => 69,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 13,
                ]);
                $idobjectiveproduct36 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective17,
                'product_id' => null,
                'product_other' => 'Producto 5',
                'goal_1' => 19,
                'goal_2' => 22,
                'goal_3' => 25,
                'goal_4' => 28,
                'goal_1_balance' => 19,
                'goal_2_balance' => 22,
                'goal_3_balance' => 25,
                'goal_4_balance' => 28,
                'total_goal' => 94,
                'unit_goal' => 75,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 12,
                ]);
                $idobjectiveproduct37 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective17,
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
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 13,
                ]);
                $idobjectiveproduct38 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective17,
                'product_id' => null,
                'product_other' => 'Producto 7',
                'goal_1' => 800,
                'goal_2' => 2300,
                'goal_3' => 950,
                'goal_4' => 1000,
                'goal_1_balance' => 800,
                'goal_2_balance' => 2300,
                'goal_3_balance' => 950,
                'goal_4_balance' => 1000,
                'total_goal' => 5050,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 12,
                ]);
                $idobjectiveproduct39 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective17,
                'product_id' => null,
                'product_other' => 'Producto 8',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 2,
                'unit_goal' => 57,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 13,
                ]);
                $idobjectiveproduct40 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective18,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 3,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 3,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 3,
                'unit_goal' => 80,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 33,
                ]);
                $idobjectiveproduct41 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective18,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 2,
                'goal_2' => 4,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 2,
                'goal_2_balance' => 4,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 6,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 33,
                ]);
                $idobjectiveproduct42 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective18,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 42,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 42,
                'goal_1_balance' => 42,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 42,
                'total_goal' => 84,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 34,
                ]);
                $idobjectiveproduct43 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective19,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 0.3,
                'goal_2' => 0.7,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 0.3,
                'goal_2_balance' => 0.7,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 1,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 33,
                ]);
                $idobjectiveproduct44 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective19,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 110,
                'goal_2' => 0,
                'goal_3' => 130,
                'goal_4' => 0,
                'goal_1_balance' => 110,
                'goal_2_balance' => 0,
                'goal_3_balance' => 130,
                'goal_4_balance' => 0,
                'total_goal' => 240,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 33,
                ]);
                $idobjectiveproduct45 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective19,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 2,
                'goal_2' => 4,
                'goal_3' => 0,
                'goal_4' => 2,
                'goal_1_balance' => 2,
                'goal_2_balance' => 4,
                'goal_3_balance' => 0,
                'goal_4_balance' => 2,
                'total_goal' => 8,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 34,
                ]);
                $idobjectiveproduct46 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective20,
                'product_id' => null,
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
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct47 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective20,
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
                'unit_goal' => 43,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct48 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective20,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 240,
                'goal_2' => 240,
                'goal_3' => 245,
                'goal_4' => 245,
                'goal_1_balance' => 240,
                'goal_2_balance' => 240,
                'goal_3_balance' => 245,
                'goal_4_balance' => 245,
                'total_goal' => 970,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct49 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective20,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 51,
                'goal_2' => 63,
                'goal_3' => 60,
                'goal_4' => 70,
                'goal_1_balance' => 51,
                'goal_2_balance' => 63,
                'goal_3_balance' => 60,
                'goal_4_balance' => 70,
                'total_goal' => 244,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct50 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective20,
                'product_id' => null,
                'product_other' => 'Producto 5',
                'goal_1' => 36,
                'goal_2' => 120,
                'goal_3' => 120,
                'goal_4' => 120,
                'goal_1_balance' => 36,
                'goal_2_balance' => 120,
                'goal_3_balance' => 120,
                'goal_4_balance' => 120,
                'total_goal' => 396,
                'unit_goal' => 77,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct51 = DB::getPdo()->lastInsertId();
                
                
                
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
                'weighing' => 11,
                ]);
                $idobjectiveproduct52 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective20,
                'product_id' => null,
                'product_other' => 'Producto 7',
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
                'weighing' => 11,
                ]);
                $idobjectiveproduct53 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective20,
                'product_id' => null,
                'product_other' => 'Producto 8',
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
                'weighing' => 11,
                ]);
                $idobjectiveproduct54 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective20,
                'product_id' => null,
                'product_other' => 'Producto 9',
                'goal_1' => 204,
                'goal_2' => 330,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 204,
                'goal_2_balance' => 330,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 534,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 12,
                ]);
                $idobjectiveproduct55 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective21,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 3,
                'goal_2' => 3,
                'goal_3' => 6,
                'goal_4' => 6,
                'goal_1_balance' => 3,
                'goal_2_balance' => 3,
                'goal_3_balance' => 6,
                'goal_4_balance' => 6,
                'total_goal' => 18,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 20,
                ]);
                $idobjectiveproduct56 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective21,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 6,
                'goal_2' => 6,
                'goal_3' => 12,
                'goal_4' => 12,
                'goal_1_balance' => 6,
                'goal_2_balance' => 6,
                'goal_3_balance' => 12,
                'goal_4_balance' => 12,
                'total_goal' => 36,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 20,
                ]);
                $idobjectiveproduct57 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective21,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 0,
                'goal_2' => 3,
                'goal_3' => 6,
                'goal_4' => 6,
                'goal_1_balance' => 0,
                'goal_2_balance' => 3,
                'goal_3_balance' => 6,
                'goal_4_balance' => 6,
                'total_goal' => 15,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 20,
                ]);
                $idobjectiveproduct58 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective21,
                'product_id' => null,
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
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 20,
                ]);
                $idobjectiveproduct59 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective21,
                'product_id' => null,
                'product_other' => 'Producto 5',
                'goal_1' => 5,
                'goal_2' => 5,
                'goal_3' => 5,
                'goal_4' => 15,
                'goal_1_balance' => 5,
                'goal_2_balance' => 5,
                'goal_3_balance' => 5,
                'goal_4_balance' => 15,
                'total_goal' => 30,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 20,
                ]);
                $idobjectiveproduct60 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective22,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 1,
                'goal_2' => 0,
                'goal_3' => 4,
                'goal_4' => 4,
                'goal_1_balance' => 1,
                'goal_2_balance' => 0,
                'goal_3_balance' => 4,
                'goal_4_balance' => 4,
                'total_goal' => 9,
                'unit_goal' => 57,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 33,
                ]);
                $idobjectiveproduct61 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective22,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 5,
                'goal_2' => 0,
                'goal_3' => 5,
                'goal_4' => 5,
                'goal_1_balance' => 5,
                'goal_2_balance' => 0,
                'goal_3_balance' => 5,
                'goal_4_balance' => 5,
                'total_goal' => 15,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 33,
                ]);
                $idobjectiveproduct62 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective22,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 2,
                'goal_2' => 3,
                'goal_3' => 0,
                'goal_4' => 3,
                'goal_1_balance' => 2,
                'goal_2_balance' => 3,
                'goal_3_balance' => 0,
                'goal_4_balance' => 3,
                'total_goal' => 8,
                'unit_goal' => 32,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 34,
                ]);
                $idobjectiveproduct63 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective23,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 5,
                'goal_2' => 3,
                'goal_3' => 3,
                'goal_4' => 3,
                'goal_1_balance' => 5,
                'goal_2_balance' => 3,
                'goal_3_balance' => 3,
                'goal_4_balance' => 3,
                'total_goal' => 14,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct64 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective24,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 0.2,
                'goal_2' => 0.3,
                'goal_3' => 0.4,
                'goal_4' => 0.1,
                'goal_1_balance' => 0.2,
                'goal_2_balance' => 0.3,
                'goal_3_balance' => 0.4,
                'goal_4_balance' => 0.1,
                'total_goal' => 1,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 25,
                ]);
                $idobjectiveproduct65 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective24,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 0.2,
                'goal_2' => 0.3,
                'goal_3' => 0.3,
                'goal_4' => 0,
                'goal_1_balance' => 0.2,
                'goal_2_balance' => 0.3,
                'goal_3_balance' => 0.3,
                'goal_4_balance' => 0,
                'total_goal' => 0.8,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 25,
                ]);
                $idobjectiveproduct66 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective24,
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
                'weighing' => 25,
                ]);
                $idobjectiveproduct67 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective24,
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
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 25,
                ]);
                $idobjectiveproduct68 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective25,
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
                'weighing' => 100,
                ]);
                $idobjectiveproduct69 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective26,
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
                'unit_goal' => 69,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 25,
                ]);
                $idobjectiveproduct70 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective26,
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
                'weighing' => 25,
                ]);
                $idobjectiveproduct71 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective26,
                'product_id' => null,
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
                'unit_goal' => 32,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 25,
                ]);
                $idobjectiveproduct72 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective26,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 100,
                'goal_2' => 100,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 100,
                'goal_2_balance' => 100,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 200,
                'unit_goal' => 48,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 25,
                ]);
                $idobjectiveproduct73 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective27,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct74 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective28,
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
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct75 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective29,
                'product_id' => null,
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
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct76 = DB::getPdo()->lastInsertId();
                
                
                
              
                
              
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct1,
                  'name' => 'Actividad 1.1.1 Obras de Recarga Artificial Ejecutadas en el Acuífero de Morroa',
                  'goal_1' => 0,
                  'goal_2' => 3,
                  'goal_3' => 3,
                  'goal_4' => 3,
                  'goal' => 9,
                  'weighing' => 50, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity1 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct2,
                  'name' => 'Actividad',
                  'goal_1' => 3,
                  'goal_2' => 3,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 6,
                  'weighing' => 50, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity2 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct3,
                  'name' => 'Actividad    1.2.1.    Restauración de Zonas Boscosas',
                  'goal_1' => 150,
                  'goal_2' => 190,
                  'goal_3' => 30,
                  'goal_4' => 30,
                  'goal' => 400,
                  'weighing' => 50, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity3 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct4,
                  'name' => 'Actividad    1.2.1.    Restauración de Zonas Boscosas (en mantenimiento)',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 569,
                  'goal_4' => 569,
                  'goal' => 1138,
                  'weighing' => 50, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity4 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct5,
                  'name' => 'Actividad No 1.3.1. Redes de Control de los Cuerpos de Agua Superficiales',
                  'goal_1' => 260,
                  'goal_2' => 260,
                  'goal_3' => 260,
                  'goal_4' => 260,
                  'goal' => 1040,
                  'weighing' => 14, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity5 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct6,
                  'name' => 'Actividad',
                  'goal_1' => 0,
                  'goal_2' => 3,
                  'goal_3' => 3,
                  'goal_4' => 3,
                  'goal' => 9,
                  'weighing' => 14, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity6 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct7,
                  'name' => 'Actividad No 1.3.2. Plan de Manejo Acuífero Betulia en Formulación',
                  'goal_1' => 0,
                  'goal_2' => 0.15,
                  'goal_3' => 0.3,
                  'goal_4' => 0.3,
                  'goal' => 0.75,
                  'weighing' => 14, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity7 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct8,
                  'name' => 'Actividad No 1.3.3. Plan de Manejo Acuífero Toluviejo Formulado y Adoptado',
                  'goal_1' => 0.85,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1.85,
                  'weighing' => 14, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity8 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct9,
                  'name' => 'Actividad No 1.3.4. Registros Actualizados en el Sistema de Información del Recurso Hídrico (SIRH)',
                  'goal_1' => 60,
                  'goal_2' => 60,
                  'goal_3' => 60,
                  'goal_4' => 60,
                  'goal' => 240,
                  'weighing' => 14, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity9 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct10,
                  'name' => 'Actividad No 1.3.5. Programa de Uso Eficiente y Ahorro del Agua (PUEAA) con Seguimiento.',
                  'goal_1' => 2,
                  'goal_2' => 6,
                  'goal_3' => 16,
                  'goal_4' => 16,
                  'goal' => 40,
                  'weighing' => 15, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity10 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct11,
                  'name' => 'Actividad No 1.3.6. Planes de Saneamiento y Manejo de Vertimientos con Seguimiento.',
                  'goal_1' => 15,
                  'goal_2' => 15,
                  'goal_3' => 19,
                  'goal_4' => 19,
                  'goal' => 68,
                  'weighing' => 15, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity11 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct12,
                  'name' => 'Actividad No 1.4.1. Obras Municipales de descontaminación de fuentes hídricas apoyadas',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 2,
                  'weighing' => 100, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity12 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct13,
                  'name' => 'Actividad    1.5.1.    Restauración de Zonas Boscosas en áreas de especial importancia',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 0,
                  'weighing' => 100, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity13 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct14,
                  'name' => 'Actividad No 2.1.1 Áreas Degradadas en Recuperación o en Rehabilitación',
                  'goal_1' => 50,
                  'goal_2' => 47.3,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 97.3,
                  'weighing' => 50, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity14 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct15,
                  'name' => 'Actividad No 2.1.1 Áreas Degradadas en Recuperación o en Rehabilitación.  Hectáreas en Mantenimiento',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 347.3,
                  'goal_4' => 347.3,
                  'goal' => 694.6,
                  'weighing' => 50, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity15 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct16,
                  'name' => 'Actividad   2.2.1.  Zonas Verdes Recuperadas Paisajísticamente.',
                  'goal_1' => 2,
                  'goal_2' => 1,
                  'goal_3' => 2,
                  'goal_4' => 2,
                  'goal' => 7,
                  'weighing' => 33, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity16 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct17,
                  'name' => 'Actividad   2.2.2.  Plántulas de Especies Forestales, Frutales y Ornamentales Producidas.',
                  'goal_1' => 500000,
                  'goal_2' => 300000,
                  'goal_3' => 300000,
                  'goal_4' => 300000,
                  'goal' => 1400000,
                  'weighing' => 33, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity17 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct18,
                  'name' => 'Actividad   2.2.3. Estrategias de transformación institucional y social implementadas',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 2,
                  'weighing' => 34, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity18 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct19,
                  'name' => 'Actividad  2.3.1.  Áreas Protegidas Declaradas e Inscritas en el RUNAP.',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 3286,
                  'goal_4' => 3286,
                  'goal' => 6572,
                  'weighing' => 50, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity19 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct20,
                  'name' => 'Actividad 2.3.2. Áreas Protegidas con Planes de Manejo en ejecución',
                  'goal_1' => 1,
                  'goal_2' => 2,
                  'goal_3' => 4,
                  'goal_4' => 4,
                  'goal' => 11,
                  'weighing' => 50, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity20 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct21,
                  'name' => 'Actividad  2.4.1.  Especies Amenazadas con Medidas de Manejo Formuladas.',
                  'goal_1' => 3,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 4,
                  'weighing' => 33, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity21 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct22,
                  'name' => 'Actividad 2.4.2. Especies Amenazadas con Medidas de Manejo en Ejecución.',
                  'goal_1' => 0,
                  'goal_2' => 2,
                  'goal_3' => 2,
                  'goal_4' => 2,
                  'goal' => 6,
                  'weighing' => 33, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity22 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct23,
                  'name' => 'Actividad 2.4.3. Especies Invasoras con Medidas de Manejo en Ejecución.',
                  'goal_1' => 2,
                  'goal_2' => 2,
                  'goal_3' => 2,
                  'goal_4' => 2,
                  'goal' => 8,
                  'weighing' => 34, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity23 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective10,
                  'product_id' =>$idobjectiveproduct24,
                  'name' => 'Recuperación de Areas Desforestadas de la Cuenca Hidrografica del Arroyo Mancomojanan en el Municipio de Ovejas-Sucre',
                  'goal_1' => 1,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 100, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity24 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective11,
                  'product_id' =>$idobjectiveproduct25,
                  'name' => 'Actividad',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 100, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity25 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct26,
                  'name' => 'Actividad',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 100, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity26 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' =>$idobjectiveproduct27,
                  'name' => 'Actividad',
                  'goal_1' => 0.8,
                  'goal_2' => 0.8,
                  'goal_3' => 0.8,
                  'goal_4' => 0.8,
                  'goal' => 3.2,
                  'weighing' => 100, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity27 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct28,
                  'name' => 'Actividad',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 3,
                  'weighing' => 100, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity28 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective15,
                  'product_id' =>$idobjectiveproduct29,
                  'name' => 'Actividad',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 3,
                  'weighing' => 100, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity29 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective16,
                  'product_id' =>$idobjectiveproduct30,
                  'name' => 'Actividad  3.1.1 Plan Regional de Negocios Verdes Formulado',
                  'goal_1' => 0.6,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1.6,
                  'weighing' => 33, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity30 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective16,
                  'product_id' =>$idobjectiveproduct31,
                  'name' => 'Actividad No 3.1.2. Implementación del Plan Regional de Negocios Verdes',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 3,
                  'weighing' => 33, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity31 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective16,
                  'product_id' =>$idobjectiveproduct32,
                  'name' => 'Actividad No 3.1.3. Áreas de Especies Promisorias Recuperadas',
                  'goal_1' => 35,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 35,
                  'weighing' => 34, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity32 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective17,
                  'product_id' =>$idobjectiveproduct33,
                  'name' => 'Actividad 4.1.1. Fortalecimiento de Instrumentos Económicos',
                  'goal_1' => 0,
                  'goal_2' => 3,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 5,
                  'weighing' => 12, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity33 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective17,
                  'product_id' =>$idobjectiveproduct34,
                  'name' => 'Actividad      4.1.2.     POT Municipales con Seguimiento y Evaluación',
                  'goal_1' => 19,
                  'goal_2' => 19,
                  'goal_3' => 19,
                  'goal_4' => 19,
                  'goal' => 76,
                  'weighing' => 13, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity34 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective17,
                  'product_id' =>$idobjectiveproduct35,
                  'name' => 'Actividad    4.1.3.   Municipios Asesorados por la Corporación para la revisión y ajuste de los POT incorporando temática ambientales y temática de riesgos',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 2,
                  'weighing' => 12, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity35 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective17,
                  'product_id' =>$idobjectiveproduct36,
                  'name' => 'Actividad    4.1.4.   Planes y Sistemas Corporativos Elaborados, Actualizados y/o en Implementación.',
                  'goal_1' => 3,
                  'goal_2' => 4,
                  'goal_3' => 4,
                  'goal_4' => 4,
                  'goal' => 15,
                  'weighing' => 13, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity36 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective17,
                  'product_id' =>$idobjectiveproduct37,
                  'name' => 'Actividad    4.1.5. Fortalecimiento Banco de Proyectos.',
                  'goal_1' => 19,
                  'goal_2' => 22,
                  'goal_3' => 28,
                  'goal_4' => 28,
                  'goal' => 97,
                  'weighing' => 12, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity37 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective17,
                  'product_id' =>$idobjectiveproduct38,
                  'name' => 'Actividad    4.1.6. Estrategias de mejoramiento de sede administrativa y parque automotor.',
                  'goal_1' => 1,
                  'goal_2' => 2,
                  'goal_3' => 2,
                  'goal_4' => 2,
                  'goal' => 7,
                  'weighing' => 13, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity38 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective17,
                  'product_id' =>$idobjectiveproduct39,
                  'name' => 'Actividad   4.1.7.  Proceso de descongestión jurídico ambiental operando',
                  'goal_1' => 800,
                  'goal_2' => 2300,
                  'goal_3' => 1000,
                  'goal_4' => 1000,
                  'goal' => 5100,
                  'weighing' => 12, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity39 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective17,
                  'product_id' =>$idobjectiveproduct40,
                  'name' => 'Actividad 4.1.8. Base de Formación Catastral Actualizada',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 2,
                  'weighing' => 13, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity40 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective18,
                  'product_id' =>$idobjectiveproduct41,
                  'name' => 'Actividad.4.2.1.  Sistema de Información Ambiental en Implementación (Vital, SIG y SIPGA CAR',
                  'goal_1' => 3,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 3,
                  'weighing' => 33, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity41 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective18,
                  'product_id' =>$idobjectiveproduct42,
                  'name' => 'Actividad     4.2.2. Información cartográfica actualizada con dinámica temporal de los recursos naturales',
                  'goal_1' => 2,
                  'goal_2' => 4,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 6,
                  'weighing' => 33, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity42 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective18,
                  'product_id' =>$idobjectiveproduct43,
                  'name' => 'Actividad 4.2.3. Funcionarios Capacitados en SIG',
                  'goal_1' => 42,
                  'goal_2' => 0,
                  'goal_3' => 42,
                  'goal_4' => 42,
                  'goal' => 126,
                  'weighing' => 34, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity43 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective19,
                  'product_id' =>$idobjectiveproduct44,
                  'name' => 'Actividad 4.3.1. Componentes de la Política de Gobierno en Línea en Implementación',
                  'goal_1' => 0.3,
                  'goal_2' => 0.7,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 33, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity44 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective19,
                  'product_id' =>$idobjectiveproduct45,
                  'name' => 'Actividad 4.3.2. Licenciamiento de equipos y servidores',
                  'goal_1' => 110,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 110,
                  'weighing' => 33, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity45 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective19,
                  'product_id' =>$idobjectiveproduct46,
                  'name' => 'Actividad   4.3.3.   Red local, Bases de Datos, Equipos y Servicios Web Corporativos Optimizados',
                  'goal_1' => 2,
                  'goal_2' => 4,
                  'goal_3' => 2,
                  'goal_4' => 2,
                  'goal' => 10,
                  'weighing' => 34, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity46 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective20,
                  'product_id' =>$idobjectiveproduct47,
                  'name' => 'Actividad     4.4.1.     Redes de Control y Vigilancia del Tráfico Ilegal de Fauna y Flora Operando',
                  'goal_1' => 10,
                  'goal_2' => 10,
                  'goal_3' => 10,
                  'goal_4' => 10,
                  'goal' => 40,
                  'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity47 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective20,
                  'product_id' =>$idobjectiveproduct48,
                  'name' => 'Actividad 4.4.2. Especies decomisadas valoradas y recuperadas',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 3,
                  'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity48 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective20,
                  'product_id' =>$idobjectiveproduct49,
                  'name' => 'Actividad     4.4.3. Licencias, autorizaciones y permisos ambientales con Evaluación y Seguimiento',
                  'goal_1' => 240,
                  'goal_2' => 240,
                  'goal_3' => 245,
                  'goal_4' => 245,
                  'goal' => 970,
                  'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity49 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective20,
                  'product_id' =>$idobjectiveproduct50,
                  'name' => 'Actividad  4.4.4.    Procesos de formalización de minería informal o cierre de sitios de minería ilegal, ejecutados',
                  'goal_1' => 51,
                  'goal_2' => 63,
                  'goal_3' => 70,
                  'goal_4' => 70,
                  'goal' => 254,
                  'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity50 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective20,
                  'product_id' =>$idobjectiveproduct51,
                  'name' => 'Actividad     4.4.5. Redes de Monitoreo de la Calidad del Aire en las Zonas Urbanas de los Principales Centros Poblados Operando',
                  'goal_1' => 36,
                  'goal_2' => 120,
                  'goal_3' => 120,
                  'goal_4' => 120,
                  'goal' => 396,
                  'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity51 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective20,
                  'product_id' =>$idobjectiveproduct52,
                  'name' => 'Actividad  4.4.6. Planes de Gestión Integral de Residuos Sólidos con Seguimiento',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity52 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective20,
                  'product_id' =>$idobjectiveproduct53,
                  'name' => 'Actividad   4.4.7. Plan de Gestión Integral de Residuos Peligrosos Formulado',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 2,
                  'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity53 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective20,
                  'product_id' =>$idobjectiveproduct54,
                  'name' => 'Actividad     4.4.8. Plan de Gestión Integral de Residuos Peligrosos en Implementación y Seguimiento',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 2,
                  'weighing' => 11, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity54 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective20,
                  'product_id' =>$idobjectiveproduct55,
                  'name' => 'Actividad 4.4.9. Empresas generadoras de RESPEL con registro, validación y seguimiento ambiental',
                  'goal_1' => 204,
                  'goal_2' => 330,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 534,
                  'weighing' => 12, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity55 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective21,
                  'product_id' =>$idobjectiveproduct56,
                  'name' => 'Actividad  4.5.1.  Alianzas Interinstitucionales e Intersectoriales Implementadas y/o Fortalecidas',
                  'goal_1' => 3,
                  'goal_2' => 3,
                  'goal_3' => 6,
                  'goal_4' => 6,
                  'goal' => 18,
                  'weighing' => 20, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity56 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective21,
                  'product_id' =>$idobjectiveproduct57,
                  'name' => 'Actividad  4.5.2.  Procesos de Formación y Educación Ambiental Implementados y/o Fortalecidos (PRAE, PRAU, CIDEAS,PROCEDAS y JOVENES DE AMBIENTE)',
                  'goal_1' => 6,
                  'goal_2' => 6,
                  'goal_3' => 12,
                  'goal_4' => 12,
                  'goal' => 36,
                  'weighing' => 20, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity57 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective21,
                  'product_id' =>$idobjectiveproduct58,
                  'name' => 'Actividad  4.5.3.  Estrategias e incentivos implementados para el reconocimiento de experiencias significativas en educación ambiental',
                  'goal_1' => 0,
                  'goal_2' => 3,
                  'goal_3' => 6,
                  'goal_4' => 6,
                  'goal' => 15,
                  'weighing' => 20, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity58 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective21,
                  'product_id' =>$idobjectiveproduct59,
                  'name' => 'Actividad  4.5.4.  Estrategias de Cooperación y Regionalización Implementadas',
                  'goal_1' => 1,
                  'goal_2' => 2,
                  'goal_3' => 2,
                  'goal_4' => 2,
                  'goal' => 7,
                  'weighing' => 20, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity59 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective21,
                  'product_id' =>$idobjectiveproduct60,
                  'name' => 'Actividad  4.5.5.  Estrategias de Comunicación, Información y Participación Implementadas',
                  'goal_1' => 5,
                  'goal_2' => 5,
                  'goal_3' => 15,
                  'goal_4' => 15,
                  'goal' => 40,
                  'weighing' => 20, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity60 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective22,
                  'product_id' =>$idobjectiveproduct61,
                  'name' => 'Actividad  5.1.1. Entes Territoriales Apoyados en la Elaboración del Plan de Gestión del Riesgo, Para su Inserción en el POT.',
                  'goal_1' => 1,
                  'goal_2' => 0,
                  'goal_3' => 4,
                  'goal_4' => 4,
                  'goal' => 9,
                  'weighing' => 33, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity61 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective22,
                  'product_id' =>$idobjectiveproduct62,
                  'name' => 'Actividad  5.1.2. Actores Sensibilizados para la Reversión al Uso Adecuado del Suelo de Conformidad con la Oferta Ambiental',
                  'goal_1' => 5,
                  'goal_2' => 0,
                  'goal_3' => 5,
                  'goal_4' => 5,
                  'goal' => 15,
                  'weighing' => 33, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity62 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective22,
                  'product_id' =>$idobjectiveproduct63,
                  'name' => 'Actividad  5.1.3. Acciones implementadas para la adaptación al cambio climático',
                  'goal_1' => 2,
                  'goal_2' => 3,
                  'goal_3' => 3,
                  'goal_4' => 3,
                  'goal' => 11,
                  'weighing' => 34, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity63 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective23,
                  'product_id' =>$idobjectiveproduct64,
                  'name' => 'Actividad 5.2.1. Técnicas de Producción Limpia Implementadas',
                  'goal_1' => 5,
                  'goal_2' => 3,
                  'goal_3' => 3,
                  'goal_4' => 3,
                  'goal' => 14,
                  'weighing' => 100, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity64 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective24,
                  'product_id' =>$idobjectiveproduct65,
                  'name' => 'Actividad No 6.1.1. Plan de Ordenación y Manejo de Cuencas (POMCAS) Directos Caribe Formulado con Inclusión de Riesgo',
                  'goal_1' => 0.2,
                  'goal_2' => 0.3,
                  'goal_3' => 0.1,
                  'goal_4' => 0.1,
                  'goal' => 0.7,
                  'weighing' => 25, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity65 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective24,
                  'product_id' =>$idobjectiveproduct66,
                  'name' => 'Actividad No 6.1.2. Planes de Manejo de Microcuencas (PMM) Pichilin Formulado',
                  'goal_1' => 0.2,
                  'goal_2' => 0.3,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 0.5,
                  'weighing' => 25, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity66 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective24,
                  'product_id' =>$idobjectiveproduct67,
                  'name' => 'Actividad No 6.1.3. Planes de Ordenación del recurso Hídrico (PORH) Formulados',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 2,
                  'weighing' => 25, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity67 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective24,
                  'product_id' =>$idobjectiveproduct68,
                  'name' => 'Actividad No 6.1.4. Cuerpos de Agua con Reglamentación de Corrientes',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 2,
                  'weighing' => 25, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity68 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective25,
                  'product_id' =>$idobjectiveproduct69,
                  'name' => 'Actividad No 6.2.1. Plan de Ordenación Forestal Adoptado y Socializado',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 100, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity69 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective26,
                  'product_id' =>$idobjectiveproduct70,
                  'name' => 'Actividad No 6.3.1. Plan de manejo UAC Formulado',
                  'goal_1' => 1,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 25, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity70 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective26,
                  'product_id' =>$idobjectiveproduct71,
                  'name' => 'Actividad No 6.3.2. Plan de manejo UAC en Implementación',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 25, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity71 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective26,
                  'product_id' =>$idobjectiveproduct72,
                  'name' => 'Actividad No 6.3.3. Acciones del Ejercicio como Autoridad Ambiental en la UAC',
                  'goal_1' => 3,
                  'goal_2' => 3,
                  'goal_3' => 3,
                  'goal_4' => 3,
                  'goal' => 12,
                  'weighing' => 25, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity72 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective26,
                  'product_id' =>$idobjectiveproduct73,
                  'name' => 'Actividad No 6.3.4. Humedales Costeros (Manglar) en Restauración',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 200,
                  'weighing' => 25, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity73 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective27,
                  'product_id' =>$idobjectiveproduct74,
                  'name' => 'Actividad',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 100, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity74 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective28,
                  'product_id' =>$idobjectiveproduct75,
                  'name' => 'Prevención de Riesgo al Secamiento Salinización y perdida del Ecosistema Manglarico en la Jurisdicción de Carsucre',
                  'goal_1' => 1,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 100, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity75 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective29,
                  'product_id' =>$idobjectiveproduct76,
                  'name' => 'Actividad',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 3,
                  'goal_4' => 3,
                  'goal' => 6,
                  'weighing' => 100, 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity76 = DB::getPdo()->lastInsertId();

                  DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity1,
          'year' =>1,
          'value' => 1,
          'description' => 'Dentro del proceso de construcción de obras de recargas se inició con la delimitaron de las áreas estratégicas del Municipio de Los Palmitos, para los pozos 44-IV-D-PP-48, 44-IV-D-PP-50 Y 44-IV-B-PP-03. Actualmente se sigue con el proceso de otros pozos del Municipio de Los Palmitos y se contrató la maquina de excavación Retro - tipo Pajarita, con  la cual se adelantarán los procesos de escariación en los cauces de los arrollo y terraceos en las colinas para aumentar la infiltración del agua y la recarga directa de los acuíferos.',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia500 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity2,
          'year' =>1,
          'value' => 1,
          'description' => 'En el programa de implementación de medidas en ejecución de planes de manejo de acuíferos, se han realizado 20 monitoreos a las redes de los acuíferos Morroa, Morrosquillo y Toluviejo y las obras de recarga artificial, noventa  (90) seguimientos a captaciones de agua subterránea ubicadas en los acuíferos Morroa, Morrosquillo y Betulia, 6 Talleres de educación Ambiental. Además se han ingresado al sistema de información (SIGAS), un total de 75 puntos de captaciones de agua.  ',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia1 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity3,
          'year' =>1,
          'value' => 38,
          'description' => 'La ejecución del proyecto se adjudicó mediante el Contrato No 204 de diciembre 15 de 2016 , con una duración de diez (10) meses. Actualmente el Contratista se encuentra en la Fase de Aprestamiento, se seleccionaron los predios y beneficiarios definitivos del proceso. Además se viene adelantando los trámites para la adquisición de herramientas e insumos y la fase de establecimiento se iniciará  a mediados del mes de abril con las primeras lluvias .
          
          Se realizaron 38 ha de compensaciones en los municipios de San Antonio de Palmito, Betulia, Morroa, Corozal, Sampués y los Palmitos.
          
          Además se realizó el mantenimiento de 318 ha en los municipios de Corozal, Sincé, Ovejas, Toluviejo, San Onofre, Sampués y Morroa, con recurso de la vigencia 2015.',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia2 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity5,
          'year' =>1,
          'value' => 180,
          'description' => 'Actualmente se cuenta con siete (7) redes de monitoreo en las siguientes microcuencas: Microcuencas Arroyo Grande de la Sabana, arroyo Canoas, Arroyo Pechilín, Arroyo Torobé, Arroyo San Antonio, Ciénaga la Caimanera y Zonas Marinas. Además de las estaciones que se encuentran en los sistemas de tratamientos de aguas residuales domestica de los Municipios sobre las cuales se realizaran monitoreos a través del laboratorio de calidad ambiental Morrosquillo de Carsucre.
          
          Los sistema de tratamientos monitoreados corresponde a los siguientes municipios: Coveñas, Palmito, Los Palmitos, Betulia, Colosó, Tolú, Toluviejo, Sincé, Galeras, San Onofre, San Pedro, el Roble y Buenavista, además de las estaciones de monitoreo de aguas Marinas y  Costeras que se coordinan con el INVEMAR(REDCAM) .
          
          Cabe aclarar que el laboratorio de calidad ambiental Morrosquillo de Carsucre fue acreditado por el IDEAM, mediante la Resolución 2130 del 22 de Septiembre de 2016, bajo la norma NTC ISO/IEC 17025 de 2005.',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia3 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity9,
          'year' =>1,
          'value' => 1,
          'description' => 'En el mes de diciembre se contrató una profesional para cargar la información en el Sistema de Información del Recurso Hídrico(SIRH)',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia501 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity11,
          'year' =>1,
          'value' => 14,
          'description' => 'Hasta la fecha se han realizado los PSMV de los siguientes Municipios: Sincelejo, Sincé; Morroa, Coveñas, Corozal, San Pedro, Sampues, Toluviejo, Ovejas, Galeras, Colosó, los Palmitos, Betulia y el Roble.',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia4 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity12,
          'year' =>1,
          'value' => 1,
          'description' => 'Los recursos aquí asignados corresponden a los recaudos proyectados de tasa retributiva para a la vigencia de 2016. De las vigencias anteriores se tiene un saldo en bancos con corte a 31 de Dic. de 2015 de $640.261.005, que sumado a la proyección del año 2016 se alcanzaría un total de $889.261.005.
          En reunión con el PDA y la Gobernación de Sucre se aprobó el portafolio de proyectos, para invertir en la descontaminación del arroyo Grande de Corozal.',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia502 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity14,
          'year' =>1,
          'value' => 50,
          'description' => 'Para el logro de esta meta se realizó convenio 0012 de 2016, para la recuperación de 5ha de zonas degradadas, en los municipios de Sincelejo, San Pedro, Buenavista, Sincé y Morroa, con una vigencia de 6 meses iniciando el 5 de diciembre de 2016 y finalizando el 3 de junio de 2017.',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia180 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity16,
          'year' =>1,
          'value' => 1,
          'description' => 'Se firmó convenio marco con el municipio de  Sincelejo para adelantar proyectos específicos  en torno a la recuperación de zonas verdes en la capital del departamento. Se avanzó en el
          Levantamiento topográfico, diagnostico civil  e inventario del arbolado urbano de los separadores Ocala, La Paz, Luis Carlos Galán y Humedal de las Garzas localizados en Sincelejo. Así mismo se realizó un evento en la plaza de majagual que contó con actividades como la recolección de residuos, corte de césped, poda de árboles, establecimiento de plántulas y limpieza general.',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia5 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity17,
          'year' =>1,
          'value' => 100000,
          'description' => ' Se  efectuó la adquisición de herramientas, materiales e insumos para la producción del material vegetal y se realizó una orden de prestación de servicio para la asistencia técnica del vivero y la producción de plántulas. Por condiciones de variabilidad climática adversas (fenómeno del niño) la producción de plántulas pendientes se efectuará en el primer trimestre del año 2017.',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia6 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity18,
          'year' =>1,
          'value' => 1,
          'description' => 'Se realizaron donaciones de arboles a instituciones educativas y a la comunidad en general para recuperación paisajística e incentivarlos en la protección del medio ambiente:
          Se realizaron los diseños para la instalación de la porqueriza con capacidad para 100 animales, con un sistema innovador para la alimentación, tratamiento de los residuos sólidos y uso eficiente del agua, el cual servirá como proyecto piloto de producción limpia y eficiente para ser replicados entre las comunidades. Se comprometieron los recursos para la construcción de la porqueriza antes mencionada.',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia7 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity19,
          'year' =>1,
          'value' => 1,
          'description' => 'Se contrató la consultoría por un plazo de 8 meses, para desarrollar la fase de preparación de 2.000 Ha de nuevas áreas protegidas en la jurisdicción de Carsucre, para las cuales se proyecta su declaración en el año 2019.  
          ',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia503 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity20,
          'year' =>1,
          'value' => 1,
          'description' => 'Actualmente las 4 Áreas Protegidas manejadas por la Corporación (Coraza, Caimanera, Guacamayas y Barayas), cuenta con documentos preliminares de planes de manejo y está pendiente su presentación y aprobación ante el Consejo Directivo. 
          Particularmente para la reserva forestal protectora de Coraza,  se está finalizando los ajustes al plan de manejo con el objeto de ser enviada al MADS para su aprobación.
          En el segundo semestre se iniciaron actividades contempladas en le plan de manejo Ciénega de la caimanera consistente en el desarrollo de actividades de recuperación de flujos hídricos.
          Se han restaurado 3.120 metros lineales de caños y canales en Convenio con Ecopetrol.',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia8 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity21,
          'year' =>1,
          'value' => 1,
          'description' => 'Proceso recibo de animales de fauna decomisada en ejecución. Se surtió un proceso de concurso de méritos que tuvo como resultado el contrato N° 0196 del de diciembre de 2016, con una vigencia de 10 meses, cuyo objeto el desarrollo de actividades de caracterización de trafico ilícito de la fauna silvestre. Ya fue solicitada la prorroga ante el FCA.',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia9 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity22,
          'year' =>1,
          'value' => 1,
          'description' => 'Proceso recibo de animales de fauna decomisada en ejecución. Se surtió un proceso de concurso de méritos que tuvo como resultado el contrato N° 0196 del de diciembre de 2016, con una vigencia de 10 meses, cuyo objeto el desarrollo de actividades de caracterización de trafico ilícito de la fauna silvestre. Ya fue solicitada la prorroga ante el FCA.',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia504 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity23,
          'year' =>1,
          'value' => 1,
          'description' => 'Proceso recibo de animales de fauna decomisada en ejecución. Se surtió un proceso de concurso de méritos que tuvo como resultado el contrato N° 0196 del de diciembre de 2016, con una vigencia de 10 meses, cuyo objeto el desarrollo de actividades de caracterización de trafico ilícito de la fauna silvestre. Ya fue solicitada la prorroga ante el FCA.',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia10 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity24,
          'year' =>1,
          'value' => 1,
          'description' => 'Proyecto de reforestación de 229 Ha en área de la cuenca hidrográfica del arroyo Mancomoján en el municipio de Ovejas, Sucre. Se adelantó contrato de interés público 0236 de 29 de diciembre de 2016, con una duración de 6 meses',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia11 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity25,
          'year' =>1,
          'value' => 1,
          'description' => 'Se finalizó la remoción de sedimentos y material vegetal según contrato No 0142 del 12 Agosto del 2016, se limpiaron los caños para facilitar la accesibilidad del personal encargado de la ejecución de las obras, ser realizó la batimetría para la confirmación de los volúmenes de material extraídos, se socializo y se adelantó programa de educación ambiental y se realizaron varios recorridos por los caños intervenidos en conjunto con los representantes de las diferentes organizaciones de la comunidad de la Boca de la Ciénaga, representantes de CARSUCRE, Ecopetrol, Contratistas e interventoras.',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia12 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity26,
          'year' =>1,
          'value' => 1,
          'description' => 'Se finalizó con el contrato N° 0087 de 2016, con fecha de inicio 19 de Mayo de 2016 y fecha de terminación del 9 de Agosto de 2016, cuyo objeto fue la instalación de un muelle para la salida de embarcaciones y acceso para facilitar el ingreso de turistas al DRMI Ciénaga de la Caimanera en municipio de Coveñas. El proyecto de la instalación del muelle a la fecha  se encuentra ejecutado en un 100% y entregado a la comunidad por medio del presidente de los pescadores y el presidente de los mangleros por medio de un acta de entrega. ',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia13 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity27,
          'year' =>1,
          'value' => 0.53,
          'description' => 'Estos recursos son destinados a la operatividad del SIRAP CARIBE. En la medida en que se requieran los recursos se da su ejecución financiera, que no depende exclusivamente de la Corporación. La administración de estos recursos obedece a que la Corporación actualmente ejerce la presidencia del SIRAP CARIBE',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia14 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity30,
          'year' =>1,
          'value' => 0.5,
          'description' => 'Se capacitaron dos funcionarios de CARSUCRE en negocios verdes, por parte del MADS y la GIZ,se prepararon los instrumentos para evaluar negocios verdes, se participo en la X feria de negocios verdes en la ciudad Montería, se socializaron los NV a los funcionarios de Carsucre, se realizo visita a Sanguare y Roca Madre para socializar los conceptos y criterios básicos de NV, también se realizaron reuniones con el proyecto de corozo de lata.
          
          Los funcionarios de la Corporación realizaron el curso virtual de negocios verdes ofrecido por el MADS, La Corporación entrega listado de 18 iniciativas de emprendimiento al SENA para el curso de negocios verdes.
          
          Se contrató la formulación del Plan Regional de Negocios Verdes mediante Convenio 006 de 28 de octubre de 2016, con una duración 4 meses. ',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia15 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity32,
          'year' =>1,
          'value' => 1,
          'description' => 'Se adelanto convenio 007 de 28 de octubre de 2016 con el municipio San Antonio de Palmito con el objeto de fortalecer un negocio verde para la obtención de productos provenientes de la caña flecha. Por un termino de 6 meses  y el establecimiento de las plantaciones iniciará en el primer trimestre del año 2017 teniendo en cuenta los factores climáticos.',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia505 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity33,
          'year' =>1,
          'value' => 1,
          'description' => 'Se contrató la actualización y migración de información contables y financiera, avaluó catastral, implementación de facturación y Nuevo Marco Normativo de Normas Internacionales NIIF',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia506 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity34,
          'year' =>1,
          'value' => 12,
          'description' => 'Para el seguimiento y evaluación de los POT se contrataron 3 profesionales con experiencia especifica en planeación territorial, que a la fecha han realizado seguimiento a la dimensión Ambiental, socialización,  diligenciamiento y actualización de una matriz estructurada para la inclusión de temática Ambiental en los EOT, PBOT y POT de 12 municipios (Chalán, San Onofre, Sincelejo, Coveñas, Toluviejo, Ovejas, Betulia, Coloso, Tolú, San Antonio de Palmito, Sincé, Galeras, Buenavista y Sincelejo).
          
          Se realizaron reuniones de evaluación de los compromisos acordados con catorce (14) municipios de la jurisdicción de Carsucre.',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia16 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity36,
          'year' =>1,
          'value' => 2,
          'description' => 'El documento PAI 2016-2019 fue aprobado mediante acuerdo 005 del 25 mayo de 2016. Durante su formulación se realizaron concertaciones con actores como ONG, indígenas, municipios, instituciones nacionales y departamentales, y así mismo se emplearon recursos para la solicitud, procesamiento y tabulación de la información requerida para el diagnostico y síntesis ambiental. 
          
          En el mes de diciembre se entregó el producto final del PGAR 2016-2027, junto con un portafolio de insumos y productos cartográficos para cada uno de los 19 municipios de la jurisdicción, así mismo se realizó su socialización con entes territoriales, instituciones, gremios y demás actores claves. ',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia17 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity37,
          'year' =>1,
          'value' => 21,
          'description' => 'Se contrató un profesional especializado en formulación y evaluación de proyectos el cual adelanta la actualización, sistematización y registro de los proyectos que adelanta la Corporación en el banco de proyectos de la Corporación.
          Se encuentran registrados 21 Proyectos corporativos en el banco de proyecto de la Corporación.',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia18 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity38,
          'year' =>1,
          'value' => 0.7,
          'description' => 'Se adquirió un (1) vehículo para brindar apoyo a funciones misionales. 
          
          El día 22 de Agosto se reiniciaron las labores de construcción  de la obra de mejoramiento de la sede administrativa, se   realizo el desmonte general(Aires acondicionados, lámparas, cielo raso y instalaciones eléctricas).
          Se termina la primera etapa del sistema estructural, concernientes a columnas y placa de entrepiso. Las instalaciones eléctricas e hidrosanitarias avanzaron en un 30%.',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia19 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity39,
          'year' =>1,
          'value' => 1507,
          'description' => 'En el proceso de revisión y depuración se estimó que de vigencias anteriores se encontraban represados cerca de 10 mil expedientes, de los cuales en esta vigencia se impulsaron 1.507.
          
          Particularmente, la cartera de evaluación, seguimiento y multas presenta 268 Usuarios morosos con procesos activos, la cartera asciende a 1.891.036.952, que corresponde a:
          Compensación: 70.184.200
          Evaluación y seguimiento: 305.064.566
          Incumplimiento: 97.665.450
          Multas: 1.295.299.738
          Varios: 122.822.998
          
          La cartera por estos conceptos desde el año 2012 a la fecha alcanza  un estimado de $1.102.457.644 que representa el 58% ',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia20 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity41,
          'year' =>1,
          'value' => 1,
          'description' => 'Se contrató los servicios de un ingeniero de sistemas con experiencia en programación , el cual desarrollo las siguientes actividades
          - Brindar apoyo a los sistemas de información que utiliza la Corporación (SIGAS, SIRH).
          - Llevar a cabo actividades de administración y optimización de la página web de la entidad. 
          - Asesorar la sala SIG en la adquisición de equipos y software de sistemas de información geográficos especializados.
          - Brindar soporte a nivel de software a los equipos de los funcionarios de la sala SIAT, en la solución de errores en los sistemas SIG. 
          
          Por otra parte se Adquirió un GPS submetrico de alta precisión y  GPS marca GPSMAP 64s, con el fin de optimizar los procesos y la recolección de información de la sala SIG.',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia21 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity42,
          'year' =>1,
          'value' => 2,
          'description' => 'Generación de shapefiles de los aprovechamientos forestales 2013-2016.
          Así mismo, como resultado de la formulación PGAR 2016-2027 se cuenta con una cartografía actualizada de la zonificación ambiental.
          Se han localizado las áreas a restaurar en el marco del proyecto proceso restauración de bosque en la zona de recargas de acuífero. 
          Se ha realizado levantamiento de los predios que han sido objeto de compensación, por las empresa de Electricaribe, Autopista de la Sabana, Ecopetrol, Promigas.
          Se ha venido brindando apoyo a las diferentes dependencias de la Corporación en la interpretación, generación y análisis de la información cartográfica(Minería, Aguas, flora, POT).',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia22 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity44,
          'year' =>1,
          'value' => 0.3,
          'description' => 'COMPONENTE DE INFORMACIÓN EN LÍNEA
          Publicación de información básica (27%)
          Acceso vía móvil (8%)
          
          COMPONENTE DE INFORMACION TRANSFORMACIÓN
          Lenguaje común de intercambio (5%)
          Publicación de los servicios en el catálogo (5%)
          
          DEMOCRACIA EN LÍNEA 
          Convocatoria (2%)',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia23 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity45,
          'year' =>1,
          'value' => 110,
          'description' => 'Se Adquirieron 110 licencias de antivirus, las cuales agregaran una capa de protección a las estaciones de trabajo de los funcionarios de la corporación, de esta forma los documentos. ',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia24 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity46,
          'year' =>1,
          'value' => 2,
          'description' => 'Se contrató los servicios de un profesional para la asistencia técnica y la optimización de los equipos de cómputo y la red local de la Corporación. A su vez se realizó la adquisición de equipos de cómputo como Impresoras, scanner, Portátiles, computadores de escritorios, Ups, Switch, accetpoint permitiendo así que los sistemas de información tuvieran un rendimiento significativo en cuanto a la realización de sus procesos y se alcanzara un grado mayor en la optimización de la infraestructura tecnológica de la entidad.    
          ',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia25 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity47,
          'year' =>1,
          'value' => 7,
          'description' => 'Para controlar el tráfico ilegal de especímenes de flora y fauna silvestre se realizaron 27 puestos de control en los siguientes municipios de la Jurisdicción de Carsucre: en el mes de febrero (Galeras, El Roble, Buenavista(2), Los Palmitos, Sampués, Toluviejo y Sincelejo), en el mes de marzo (Sincelejo, San Onofre y San Antonio de Palmito), abril (Sampués, San Onofre y Colosó) y en el mes de mayo (Galera, Sampués y San Onofre), en el mes de Julio (El Roble, Buenavista, San Onofre(3) y Coveñas), en el mes de Septiembre (San Onofre), y en le mes de Diciembre (San Onofre (3). 
          se realizó una campaña de sensibilización los días 22 y 23 de marzo, que tenía como objetivo evitar tráfico y consumo de especímenes de flora y fauna silvestre.
          La oficina de control y vigilancia dando cumplimiento a la atención de quejas y oficios  dio como resultado una atención de 263 quejas y  259 oficios interpuestos por ciudadanos.  se otorgaron 278 permisos de aprovechamiento forestal permitiendo una captación de recursos por cobro de tasa de aprovechamiento forestal correspondiente a 211.405.358 y cobro por seguimiento y evaluación por valor de  22.381.617 para un total de  233.786. 975
          
          Se atendieron 181 procesos sancionatorios que corresponden a los expedientes de infracciones. en total la oficina de control y vigilancia remitió a subdirección de gestión ambiental  981 procesos. 
          
          Adicionalmente se realizaron 31 decomisos   que corresponde a 64,110.835 m3 de madera,24 tablas y 39 Jornales que reposan en el vivero de Mata de Caña. Las especies decomisadas corresponden a : Roble, Palma Amarga,Camajon, Campano, Trébol, Caracolí, Ceiba Bonga, Guáimaro, Guacamayo, Santa Cruz y Mora. Los  Municipios donde se han realizado decomisos son  San Onofre, Sincelejo; Ovejas, Toluviejo, Coloso y Buenavista.
                  
          Se realizó incautación - recuperación, liberación y donación de la fauna, que se relaciona a continuación:                                                                
          250 Aves liberadas 
          513 reptiles liberados                                                                                                         
          111 mamíferos liberados.
          
          Se contrató un equipo conformado por un profesional y 15 Técnicos para atender los procesos de prevención seguimiento, control a los recursos naturales y el trafico ilegal de especies silvestres. Se adquirió un vehículo para el apoyo misional y se realizó proceso de divulgación y sensibilización a infractores.                                                                  
          Ver detalles en el Cap. 3 del Informe de Gestión.',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia26 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity49,
          'year' =>1,
          'value' => 153,
          'description' => 'Se han adelantado las siguientes actividades:
          - 25 visitas de seguimientos a proyectos licenciados
          - 71 Liquidaciones por costos de evaluación Y/o seguimiento
          - 56 Visitas de seguimiento de proyectos que no requieren de Licencia Ambiental pero si de otro permiso.',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia27 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity50,
          'year' =>1,
          'value' => 1,
          'description' => 'Se viene realizando acompañamiento a los entes territoriales de la jurisdicción para llevar a cabo los cierres de los sitios de minería ilegal, en coordinación con  la policía Nacional.
          Carsucre firmo un convenio en el año  2014 entre el ministerio de minas, municipio de toluviejo para la formalización minera. ',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia507 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity52,
          'year' =>1,
          'value' => 0.58,
          'description' => 'Se ha realizado visitas de seguimiento a la implementación de los planes de Gestión integral de Residuos sólidos a 11  municipios    (San Juan de Betulia, Coveñas, El Roble, Galeras, Los Palmitos, Ovejas , San Antonio de Palmito, San Pedro, San Onofre, Sampués y Sincelejo)',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia28 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity55,
          'year' =>1,
          'value' => 229,
          'description' => 'Se viene realizando seguimientos de 229 empresas generadoras de RESPEL:
          *88 usuarios cargaron la información satisfactoriamente y fueron transmitidos al IDEAM.
          
          *(20 Respel) usuarios cargaron la información pero no de manera correcta, solicitándole por oficio las correcciones.
          
          *7 usuarios no deben cargar información porque deben reportar en el RUA manufacturero.
          
          *(117 Respel) usuarios faltan por cargar información en el registro de generadores de residuos peligrosos a la fecha de este informe y se les solicito por oficio realizar el cargue.       
            ',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia29 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity56,
          'year' =>1,
          'value' => 2,
          'description' => 'ALIANZAS CARSUCRE - MUNICIPIO DE CHALAN/ CARSUCRE - MUNICIPIO DE COLOSO: Con el propósito de formular e implementar  dos Proyectos Ciudadanos de Educación Ambiental: PROCEDA como ejercicio de gobernanza ambiental, a través de la promoción de acciones de producción más limpia que contribuyan a disminuir la presión de ecosistemas sensibles, y a su vez propenda por el desarrollo  de  una cultura  sostenible con el ambiente.           
          
          ALIANZA CIDEA SUCRE - IDEAM(CECAR): El propósito es desarrollar el proyecto denominado  Caracterización de los elementos significativos de los Proyectos Ambientales Escolares - PRAE  en instituciones educativas del departamento de Sucre.',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia30 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity57,
          'year' =>1,
          'value' => 6,
          'description' => 'Se realizó el tercer encuentro Departamental de Jóvenes de Ambiente, Fase de cosecha fortalecimiento de la participación juvenil en la gestión ambiental, con la asistencia de 125 jóvenes aproximadamente, en este contexto se llevo acabo el encuentro regional, cuyo propósito consistió en contar con las voces y propuestas de los jóvenes en los distintos municipios para la puesta en marcha de las propuestas y acciones de los jóvenes con miras a esta gran meta que es la protección del ambiente en un escenario de paz. 
          
          Adicionalmente, se desarrollaron procesos de formación para el fortalecimiento de los CIDEAM, PRAE, PROCEDA Y PAC; en los municipios de Tolú, Ovejas, San Pedro, Betulia, San Antonio Palmito, Morroa y Since.  se realizaron Campañas pedagógica y prácticas de educación ambiental a comunidades con problemas en manejo de residuos y materia ambiental,  todo lo anterior en el marco del proceso de promoción y divulgación de las estrategias de la PNEA.',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia31 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity58,
          'year' =>1,
          'value' => 1,
          'description' => 'Realización de evento de participación para la educación de una cultura de paz y conservación del ambiente a través de la estrategia Siembra un árbol, Siembra paz con la participación de comunidades educativas, promotores ambientales, lideres comunitarios y apoyo interinstitucional en los municipios Sincelejo, Betulia, San Pedro y San Onofre. a través de procesos de educación ambiental en el marco de la paz y el posconflicto',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia508 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity59,
          'year' =>1,
          'value' => 1,
          'description' => 'CARSUCRE a través de Cidea Sucre lidero durante la vigencia 2016 La Alianza Región Caribe Colombiano para la Educación Ambiental la cual se convierte en un Pacto entre los Comités Interinstitucionales de Educación Ambiental-CIDEA de los departamentos que conforman la Región Caribe Colombiana, orientado a construir un sistema regional de educación ambiental, como plataforma que facilite la sostenibilidad de los procesos de institucionalización de la Política Nacional de Educación Ambiental aportando así elementos para avanzar en el camino hacia la descentralización y la autonomía que se promueve en la nación.',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia32 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity60,
          'year' =>1,
          'value' => 5,
          'description' => 'Dentro de las Estrategias de Comunicación, Información y Participación a Implementar, se contrató el profesional coordinador del proyecto Educación Ambiental, Participación y Comunicación, quien está encargado de desarrollar e implementar las estrategias, destacándose la participación en eventos institucionales y comunitarios, promoción en redes sociales, charlas a estudiantes, entre otros.',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia33 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity62,
          'year' =>1,
          'value' => 1,
          'description' => 'En el marco de la socialización del PGAR 2016-2027 se realizó mesa de trabajo abordando temas como oferta ambiental actualizada, conflicto de uso, riesgos generados, entre otros.',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia34 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity63,
          'year' =>1,
          'value' => 5,
          'description' => 'Se han realizado convenios para la adecuación de 2 reservorios y/o jaguayes (Betulia), Implementación de 55 estufas ecológicas (San Pedro) y 2 proceso de cosecha de agua en los municipios de coloso y Sincé. Así mismo se realizó convenio con el municipio de Corozal cuyo objeto es la adecuación y manejo de cause del Arroyo Grande para la mitigación de riesgo por inundaciones de origen natural y antrópico; específicamente se viene realizando remoción de 2,839 m3 de sedimentos en el Arroyo en mención.',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia35 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity64,
          'year' =>1,
          'value' => 1,
          'description' => 'Celebración de convenio con el municipio de Colosó para la formulación e implementación de un PROCEDA de producción limpia, dentro del cual se desarrollarían las 5 técnicas planteadas. ',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia36 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity65,
          'year' =>1,
          'value' => 0.2,
          'description' => 'Proceso de recolección, consolidación y revisión de la información existente en las diferentes dependencias de CARSUCRE.',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia37 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity66,
          'year' =>1,
          'value' => 0.01,
          'description' => 'Se realizó concurso de méritos resultando el contrato N° 0230 del 28 de diciembre de 2016, con una vigencia de 4 meses a partir del acta de inicio, el objeto es incluir en el PMM Pechilín la evaluación de amenazas, análisis de vulnerabilidad y definición de escenarios de riesgo.  En la actualidad la consultoría se encuentra en ejecución y estará finalizando en el mes de abril del año 2017. ',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia509 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity69,
          'year' =>1,
          'value' => 0,
          'description' => 'Se realizó concurso de méritos resultando el contrato N° 0233 del 28 de diciembre de 2016, con una vigencia de 4 meses a partir del acta de inicio, el objeto es la actualización al PGOF de la jurisdicción de CARSUCRE.  En la actualidad la consultoría se encuentra en ejecución y estará finalizando en el mes de abril del año 2017.',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia510 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity70,
          'year' =>1,
          'value' => 1,
          'description' => 'Se firmó el convenio  0008 de2016 con la Corporación Ecoversa, para aunar esfuerzos con CARSURE en la formulación del Plan de Ordenación y Manejo de la UAC Morrosquillo en Jurisdicción de Carsucre. Proceso de formulación finalizó, fue socializado y a fecha se encuentra en preparación para la realización de la consulta previa',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia38 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity71,
          'year' =>1,
          'value' => 1,
          'description' => 'Contratación de personal para realizar obras de seguimientos a ecosistemas marino costeros: Pastos marinos, Manglares y Playas.',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia511 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity72,
          'year' =>1,
          'value' => 2,
          'description' => 'Se realizó la contratación a mediado del mes de Junio de 3 profesional y 2 técnicos para realizar las labores de seguimiento como autoridad Ambiental.
          
          Se contrató una empresa para el suministro de combustible para las actividades que se desarrollan en zona Costera.',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia39 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity73,
          'year' =>1,
          'value' => 31,
          'description' => 'Con el proyecto de Remoción de sedimentos y material vegetal para la recuperación del flujo laminar en el DRMI Ciénaga de la Caimanera realizado en convenio con ECOPETROL se inicia el proceso de restauración de 31,2 hectáreas de manglar. El dato registrado obedece a una conversión de metros lineales a hectáreas (por cada 100 ml de caños o canales se inicia el proceso de restauración de 1 ha). 
          
          Adicionalmente, se vienen realizando visitas de seguimiento y evacuación de expedientes abiertos por infracciones en zonas de manglares realizadas. ',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia40 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity75,
          'year' =>1,
          'value' => 1,
          'description' => 'Proyecto de apertura de bocas y caños en San Onofre y Tolú, financiado con recursos FONAM. Se adelantó proceso licitatorio, resultando el contrato 0234 de 28 de diciembre de 2016, con una duración de 6 meses.',
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia41 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity1,
            'year' =>2,
            'value' => 1,
            'description' => 'Se adquirió maquina de excavación Retro (tipo Pajarita) con la cual se adelantarán los procesos de escoriación del suelo y de pequeñas excavaciones (tipo jagüeyes) que contribuyan a aumentar la recarga directa del acuífero de Morroa.
          
          Se firmó contrato No. 0188 de 15 de diciembre de 2017, con una duración de 6 meses, para la construcción de 3 obras de recarga artificial en el acuífero Morroa (1 pozo inyección, 1 laguna infiltración y 1 pozo de gran diámetro), la Construcción de 3 piezómetros y el mantenimiento a 6 piezómetros ya existentes.',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia512 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity2,
            'year' =>2,
            'value' => 1,
            'description' => 'Se adquirió maquina de excavación Retro (tipo Pajarita) con la cual se adelantarán los procesos de escoriación del suelo y de pequeñas excavaciones (tipo jagüeyes) que contribuyan a aumentar la recarga directa del acuífero de Morroa.
          
          Se firmó contrato No. 0188 de 15 de diciembre de 2017, con una duración de 6 meses, para la construcción de 3 obras de recarga artificial en el acuífero Morroa (1 pozo inyección, 1 laguna infiltración y 1 pozo de gran diámetro), la Construcción de 3 piezómetros y el mantenimiento a 6 piezómetros ya existentes.',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia513 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity3,
            'year' =>2,
            'value' => 1,
            'description' => 'El proyecto fue adjudicado a la Corporación ECOAMBIENTE (NIT 806.006.431-2) mediante Contrato de prestación de servicios No 173 de 12 de octubre de 2017, con una duración de 10 meses, para el establecimiento, aislamiento y mantenimiento de 190 Has de plantaciones forestales para la restauración de coberturas boscosas con especies nativas maderables en área de recarga de acuiferos en los Municipios de San Onofre, Colosó, Morroa y Toluviejo, articulado con tres (3) talleres de capacitación a comunidades beneficiarias. 
          
          Actualmente se encuentra en la Fase de Aprestamiento, que involucra la adquisición de herramientas e insumos y la contratación de la asistencia técnica del proyecto, visita de los predios donde se va a establecer la plantación forestal. Se espera iniciar la fase de establecimiento a mediados del mes de abril cuando se estabilicen las lluvias en la región.
          
          Durante la vuigencia 2017, se establecieron 85 Has de Bosques por compensaciones por cambio de uso del suelo, por parte de las empresas ARGOS, PROMIGAS, ECOPETROL, ELECTRICARIBE, DOBLE CALZADA, GUACARÍ, AIR PLANS, en los Municipios: TOLUVIEJO (10 Has), OVEJAS (10 Has), SAN ANTONIO DE PALMITO (20 Has), BETULIA (15 Has), LOS PALMITOS (1,5 Has), COROZAL (7 Has), SINCELEJO (4 HaS),  MORROA (10,5 Has) Y SAMPUES (7 Has). ',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia514 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity5,
            'year' =>2,
            'value' => 260,
            'description' => 'Actualmente se cuenta con siete (7) redes de monitoreo en las siguientes microcuencas: Microcuencas Arroyo Grande de la Sabana, arroyo Canoas, Arroyo Pechilín, Arroyo Torobé, Arroyo San Antonio, Ciénaga la Caimanera y Zonas Marinas. Además de las estaciones que se encuentran en los sistemas de tratamientos de aguas residuales domestica de los Municipios sobre las cuales se realizaron los 260 monitoreos (130 en época seca y 130 en época de lluvias) muestras que fueron analizadas a través del Laboratorio de Calidad Ambiental Morrosquillo de Carsucre.
          Los sistema de tratamientos monitoreados corresponde a los siguientes municipios: Coveñas, Palmito, Los Palmitos, Betulia, Coloso, Tolú, Toluviejo, Sincé, Galeras, San Onofre, San Pedro, el Roble y Buenavista, ',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia42 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity6,
            'year' =>2,
            'value' => 3,
            'description' => 'MONITOREOS: Se realizaron en total 37 monitoreos en el acuífero Morroa y Morrosquillo, nueve (9) monitoreos a las obra de recarga del acuífero Morroa (un pozo de inyección, dos trincheras de infiltración, un pozo de gran diámetro, una laguna de infiltración, un pozo de inyección. 
          
          MEDIDAS DE CONTROL Y DE RECARGA DE ACUIFEROS: En el Predio el Tesoro, donde funciona el Centro de Investigación del Recurso Hídrico, se están tomando datos diarios de niveles en los dos piezómetros ubicados en el Predio el Tesoro, se han realizado 18 ensayos de infiltración y se ha recolectado 16 muestras de agua lluvia para el análisis isotópico.
          
          SEGUIMIENTO A CONCESIONES Y POZOS ILEGALES:  También se han realizado  87 seguimientos a concesiones de aguas y  pozos ilegales en los acuíferos Morroa y Morrosquillo.  Se elaboraron  52 informes de evaluación de información, de recursos de reposición y de seguimiento, se elaboraron 10 conceptos de solicitud de permisos de perforación de pozos profundos y 28 solicitudes de concesiones de agua.',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia43 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity7,
            'year' =>2,
            'value' => 0.14,
            'description' => 'Se realizó la etapa de aprestamiento, con la recopilación y análisis de información secundaria , tanto en el área social como en la parte técnica (geoeléctrica, pruebas de bombeo), clasificación de actores claves, elaboración de mapas de actores y diseño de estrategias de comunicación.',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia44 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity8,
            'year' =>2,
            'value' => 0.9,
            'description' => 'Se inició la  elaboración del documento que contiene el PMA acuífero Toluviejo,  ya están listos todos los aspectos de la parte social, quedó faltando agregar los aspectos técnicos, para que posteriormente pueda ser acogido por resolución.',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia45 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity9,
            'year' =>2,
            'value' => 60,
            'description' => 'Se ingresaron, 33 concesiones nuevas, 33 predios nuevos  y 33 captaciones nuevas.',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia46 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity10,
            'year' =>2,
            'value' => 6,
            'description' => 'Se hizo evaluación y seguimiento a los PUEAA presentados por Subastar S.A., Jaime Coley Hernandez, Almidones de Sucre, Aguas de Buenavista, Centro Vacacional Coveñas, Hotel y Residencia el Carretero y Caisa',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia47 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity11,
            'year' =>2,
            'value' => 9,
            'description' => 'Se realizaron seguimiento a los PSMV de los siguientes Municipios: corozal, San Pedro, Ovejas, Coloso, Betulia ,Coveñas, Los Palmitos, Galeras y Sampues.',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia48 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity12,
            'year' =>2,
            'value' => 1,
            'description' => '
          Esta programado para realizar en la vigencia 2019.
          ',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia515 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity14,
            'year' =>2,
            'value' => 47.3,
            'description' => 'Se firmó el Contrato No 0194 de fecha 18 de Diciembre de 2017, con una duración de tres (3) meses contados a partir de la firma del acta de inicio; para la recuperación de 3,0 Has de áreas degradadas en los municipios de Sincelejo, Morroa y Buenavista con las siguientes obras de Bioingenierías: Construcción de 100 metros de zanjillas de infiltración, construcción manual de diques en posteria, construcción de muretes en sacos de fique rellenos con material de sitio abono orgánico y semillas de pastos y la instalación de estacas para disipación de energía y geoestabilización de pendientes con malla biodegradable. ',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia181 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity16,
            'year' =>2,
            'value' => 1,
            'description' => 'Se firmó contrato No 0196 de 22 de Diciembre de 2017, con una duración de tres (3) meses cuyo objeto es la recuperación paisajística de parques y zonas verdes en la jurisdicción de la Corporación.',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia516 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity17,
            'year' =>2,
            'value' => 282000,
            'description' => 'Se  efectuó la adquisición de herramientas, materiales e insumos para la producción del material vegetal y se realizó una orden de prestación de servicio para la asistencia técnica del vivero y la producción de plántulas. Se sembraron plantas de polvillo(cañahuate), cedro,roble,campano, igua, melina, caracolí entre otros y frutales en su mayoría mango. ',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia49 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity18,
            'year' =>2,
            'value' => 1,
            'description' => 'Se realizo Adición al contrato de obra # 0229 de 28 de Diciembre de 2016, para el fortalecimiento del CAV Matecaña, se realizo la demolición y reconstrucción de la bodega y un baño existente (Sala de reuniones y conferencia), los cuales presentaban grietas de consideración y una serie de adecuaciones en generales  (poste de energía, cunetas y adecuación de cocina existente), con el fin de mejorar las condiciones de estabilidad de las instalaciones. ',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia50 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity20,
            'year' =>2,
            'value' => 2,
            'description' => 'Se realizaron 9 operativos de control y vigilancia en las áreas protegidas marino costeras de ciénaga la Caimanera, igualmente se realizaron las siguientes actividades:
          * Decomiso por tala ilegal de 80 varas de mangle rojo, 
          * Registro fotográfico de fragata portuguesa (Physalia physalis), y aviso a la comunidad de los peligros inminentes que representaba esta colonia hidroide para niños y personas de avanzada edad, 
          * Reporte de pesca ilegal con arpón, boliche, palangre y trasmallo dentro del DRMI La Caimanera,
          * Reunión con líderes comunitarios para tratar temas relacionados con el DRMI La Caimanera,
          * Identificación de aves en campo con el fin de realizar la evaluación ambiental.
          
          Se realizaron 2  Visitas de reconocimiento de las parcelas de restauración  y Caracterización vegetal y análisis de la fauna asociada en la parcela de crecimiento ubicada en el PRN Manglares de Guacamayas.',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia51 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity21,
            'year' =>2,
            'value' => 1,
            'description' => 'Se firmó contrato No 0187 de 12 de diciembre de 2017, con una duración de seis (6) meses, para formular los Planes de manejo y protección de 3 especies de fauna  silvestre ( Reptiles, Mamíferos y Aves).',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia517 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity22,
            'year' =>2,
            'value' => 2,
            'description' => 'Se  ejecuto las siguiente medida de manejo: Operativos al trafico ilegal de fauna silvestres para dos especies  (  Aves y Reptiles ) ',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia52 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity23,
            'year' =>2,
            'value' => 1,
            'description' => 'Para la erradicacion y control de especies invasoras se realizó colecta y disposición final de 494 especimenes de Caracol Gigante Africano.',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia53 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity24,
            'year' =>2,
            'value' => 1,
            'description' => 'Se realizó aislamiento y establecimiento de 229 ha de plantación forestal en la cuenca del arroyo mancomojan con especies nativas de la zona y aquellas de mejor adaptación a las condiciones agroclimática, todas la HA establecidas tiene un sistema de cerco vivo 
          
          Se han realizado cinco seminarios técnicos en los Corregimientos de la Peña, Flor del monte, San Rafael, Canutal y Canutalito  del municipio de Ovejas - sucre. 
          
          Se han realizado cinco talleres de capacitación (un taller por corregimiento) dirigidos a las comunidades de los  corregimientos (la Peña, Flor del monte, San Rafael, Canutal y Canutalito) del área de influencia del proyecto, con la asistencia de la comunidad en general
          
          Se conformaron dos comités comunitarios, para la realización de dos jornadas de limpieza a lo largo del arroyo Mancomojan, Las limpiezas se realizaron en el corregimiento de La Peña y Flor del Monte.
          
          Se efectuó 5 ferias corregimentales, una en cada corregimiento (la Peña, Flor del monte, San Rafael, Canutal y Canutalito) con la participación de la comunidad en general.
          Así mismo, se realizaron obras de teatro con temáticas alusivas a la problemática y preservación del arroyo Mancomojan, presentación de grupos folclóricos y concursos de adivinanzas.
          
          Se realizaron diez expediciones formativas en los corregimientos de la Peña, Flor del monte, San Rafael, Canutal y Canutalito;  donde estuvo contemplado recorridos temáticos ambientales sobre el arroyo Mancomojan en  compañía del grupo técnico y la comunidad en general
          
          Se ha adelantado el componente social del proyecto en los aspectos de proceso de formación  mediante talleres, foros, seminarios, feria corregimental, expediciones formativas, y demás que coadyuve a la generación de conciencia del recurso hídrico del arroyo mancomojan. 
          
          Se realizo extensión del contrato por 4 meses debido a que hubo retraso en la temporada de lluvias, y el proceso de establecimiento no pudo culminar en el tiempo proyectado.
          
          ',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia518 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity25,
            'year' =>2,
            'value' => 1,
            'description' => 'META REALIZADA EN LA VIGENCIA 2016',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia54 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity26,
            'year' =>2,
            'value' => 1,
            'description' => 'META REALIZADA EN LA VIGENCIA 2016',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia55 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity27,
            'year' =>2,
            'value' => 0.53,
            'description' => 'META REALIZADA EN LA VIGENCIA 2016',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia56 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity28,
            'year' =>2,
            'value' => 0.81,
            'description' => '• Para el primer semestre del 2017, bajo la coordinación de Carsucre se realizó reunión del Consejo Directivo del SIRAP Caribe, en el mes de marzo.
          • Se exaltó a CARSUCRE con mención honorifica por los procesos de planificación, declaratoria y gestión de sistemas de áreas protegidas.
          • Se realizó lanzamiento de proyectos especiales: Campaña tu casa no es su casa-No a la caza, Revista BioCaribe, Proyecto Gef de Conectividades.
          • De igual manera se realizó la firma del convenio para la implementación del SAMP entre Parques Nacionales, el Presidente del SIRAP Caribe, el Director del Invemar, y el Designado por el SIRAP Pacifico en Instituto Sinchi. 
          • Lanzamiento de las Áreas Prioritarias para Compensaciones de Urabá como modela para toda la región. ',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia57 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity29,
            'year' =>2,
            'value' => 0.52,
            'description' => 'Ejecución de acciones para posicionar y difundir la estrategia CONEXIÓN BIOCARIBE y la estrategia de educación ambiental del SIRAP CARIBE, adaptada a diferentes niveles e implementada en instituciones educativas, con el fin de sensibilizar sobre la importancia de la biodiversidad y de las conectividades socioecosistemicas, el cual se desarrollara en el marco del proyecto GEF.',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia58 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity30,
            'year' =>2,
            'value' => 1,
            'description' => 'Este plan se realizo en la vigencia 2016.
          ',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia59 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity31,
            'year' =>2,
            'value' => 1,
            'description' => 'Carsucre cuenta con  una línea base, un  Plan de acción de negocios verdes formulado y con la  Implementación del Programa Regional de Negocios Verdes.
          Durante los días 26, 27 y 28 de octubre de 2017, se participó en Bioexpo Caribe 2017, en la ciudad de Barranquilla (Centro de Convenciones Puerta de Oro), Donde CARSUCRE patrocinó la participación de siete (7) negocios seleccionados según los Criterios de Negocios Verdes, así: ASOAPICOL, ASOMARTIN ,ASOPROYUS, BOLILECHE, CAMPO AVENTURA ROCA MADRE, FRUTOS DEL BOSQUE SECO y LOMBRIABONO presentando los productos regionales de negocios verdes del área de jurisdicción de la Corporación.
          Se capacitó el equipo técnico de Carsucre con la Visita de funcionarios del  Instituto Alexander Von Humboldt (IAvH) a finales de 2017 en desarrollo del  Convenio suscrito con el Ministerio de Ambiente y Desarrollo Sostenible (MADS).
          Se verificaron dos pilotos de negocios verdes: Bolileche (Sincé) y Lombriz Abonos La Granja (Corozal)  que están en proceso de fortalecimiento al igual que los otros cinco (5) negocios que hicieron parte de Bioexpo.
          Se realizó el primer acercamiento con el Servicio Nacional de Aprendizaje (SENA) Regional Sucre, con el fin de lograr la articulación en el marco de negocios verdes.
          La corporación en cumplimiento de las metas del país, promulgo la Resolución 2431 de 2017, por medio de la cual se crea la ventanilla de negocios verdes, cuyo objetivo es posicionar los negocios verdes como un nuevo renglón de la economía regional.',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia60 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity33,
            'year' =>2,
            'value' => 3,
            'description' => 'Se realizó la actualización y migración de información contable y financiera en el PCT.
          Actualización de sobretasa ambiental, TUA, tasa retributiva y carteras.
          Actualización del software de facturación e inventario(Almacén) y del Nuevo Marco Normativo de Normas Internacionales NIIF.',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia61 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity34,
            'year' =>2,
            'value' => 19,
            'description' => 'Se realizó el abordaje a los 19 Municipios de la jurisdicción de CARSUCRE en apoyo al seguimiento y evaluación de los temas referentes a la inclusión del componente ambiental en los POT, EOT y PBOT de cada municipio, resultado de estas se diligenciaron actas de reunión con contenido especifico y registro de lo socializado. ',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia62 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity35,
            'year' =>2,
            'value' => 1,
            'description' => 'Para finales del 2017 se inicio el proceso de asesorías con los distintos municipios, en donde el municipio de Toluviejo es tomado como referente de apoyo al seguimiento en su actualización, la cual esta contratada con una consultoría externa; a quienes se les  socializó la propuesta de zonificación Ambiental como insumo de las determinantes ambientales de la Corporación y se expone la problemáticas ambientales del municipio en cuanto a las temáticas de Incorporación de la Gestión del Riesgo en la revisión de POT.',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia63 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity36,
            'year' =>2,
            'value' => 3,
            'description' => 'Se firmó el contrato No 0198 de 22 de Diciembre de 2017, con una duración de Dos (2) meses, cuyo objeto es la elaboración e implementación del Sistema de Gestión de Seguridad y Salud en el trabajo (SGSST).
          Se realizó el Plan Operativo Anual de Inversiones de la Corporación (POAI 2017) que incluye el Plan de compras. 
          Se Actualizó el Plan de anticorrupción y Atención al ciudadano 2017.
          Para la Vigencia 2018 se realizará la actualización del Sistema de Gestión de Calidad. SGC',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia64 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity37,
            'year' =>2,
            'value' => 22,
            'description' => 'Durante la vigencia 2017, se registraron en el BPC de CARSUCRE 23 proyectos corporativos, de los cuales 18 contaron con viabilidad técnica y recursos para ser ejecutados, 4 de ellos cofinanciados por el FCA y 14 financiados con recursos propios de la Corporación. De los cinco (5) proyectos restantes, tres (3) fueron viabilizados y pasados a la vigencia 2018 para gestión de recursos ante FONAM y los otros dos (2) definitivamente no alcanzaron a terminar el proceso de viabilizarían.',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia65 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity38,
            'year' =>2,
            'value' => 1,
            'description' => 'Se firmó contrato 0201 de 28 de diciembre de 2017, con una duración de cuatro (4) meses, cuyo objeto es la de realizar los acabados y obras complementarias de la ampliación de oficinas en la parte superior del auditorio de la sede de la Corporación.',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia519 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity39,
            'year' =>2,
            'value' => 2185,
            'description' => 'La oficina de Secretaria General de la Corporación durante la vigencia 2017, aperturó o impulsó 3.643 Actos Administrativos, de los cuales fueron resueltos 2.185 para resolver expedientes Jurídico Ambientales,  destacándose los siguientes: 989 Archivados, 236 autorizaciones de aprovechamiento forestal (Arboles), 91 autorizaciones de podas de arboles y 71 Mandamientos de pago y 70 apertura y/o inicio de investigación, entre otros.
          ',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia66 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity42,
            'year' =>2,
            'value' => 3,
            'description' => 'Generación de información cartográfica (shapefiles) de las áreas restauradas en las zonas de recarga de acuíferos en la jurisdicción de “CARSUCRE”, con avance del 100% de los polígonos, Así mismo, actualización cartográfica de las zonas de compensación forestal en el área de jurisdicción de CARSUCRE, 2017 (90%)
           
          Actualización de la base de datos de la información asociada con los títulos mineros del área de acción de CARSUCRE. .
          
          Contratación de la consultoría CONTROL DE CONTAMINACIÓN LTDA, para la elaboración del mapa de ruido (municipio de Sincelejo) y la calidad del ambiente (aire). Contratación que se llevó a cabo el día 27/11/17 con fecha de finalización establecida para el 26/04/2018, en la  cual se espera tener el 100% de los productos cartográficos.
          
           Apoyo a las diferentes dependencia de la corporación en la interpretación, generación y análisis, verificación de  información cartográfica (Minería, flora, fauna), además de soporte técnico en el manejo de equipos GPS y Plotter (soporte Técnico).',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia520 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity44,
            'year' =>2,
            'value' => 0.7,
            'description' => 'Se llevaron actividades que aportan al desarrollo del componente de interacción en línea, en el criterio de Servicios de Interacción. En sus ítems que se mencionan a continuación:  Soporte en línea (6%) , Encuestas de opinión (3%), Espacio para contacto, peticiones, quejas, reclamos y denuncias (26%) y Sistema móvil de contacto, peticiones, quejas, reclamos y denuncias (11%). a su vez se desarrollaron actividades para desarrollar ítems como Lenguaje común de intercambio (5%), del criterio Cadenas de trámites. Criterios de Caracterización de usuarios (15%), y Usabilidad (5%).',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia67 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity46,
            'year' =>2,
            'value' => 4,
            'description' => 'Se contrató los servicios de 2 (dos) técnicos con la finalidad de dar asistencia y la optimización a los equipos de cómputo y la red local de la Corporación, se contrataron 2 (dos) profesionales en sistemas para dar la optimización y soporte a los sistemas de información de la corporación, como también a las políticas nacionales en el sector TIC. se realizó la adquisición de un servidor marca HP, la adquisición de una licencia proxy.',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia68 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity47,
            'year' =>2,
            'value' => 10,
            'description' => 'Para controlar el tráfico ilegal de especímenes de flora y fauna silvestre se realizaron 21 puestos de control en los siguientes municipios de la Jurisdicción de Carsucre: en el mes de marzo (Galeras, El Roble, Buenavista, Los Palmitos, Sampués, Toluviejo y Sincelejo), en el mes de abril (San Onofre (2), San Antonio de Palmito, Coveñas, San Onofre), en el mes de Octubre (Sampues, San Onofre, los Palmitos y Buenavista) en el mes de Noviembre (Sampues, San Antonio de Palmito y San Onofre) y en el mes de diciembre (Sampues y San Onofre).
          La oficina de control y vigilancia dando cumplimiento a la atención de quejas y oficios  dio como resultado una atención de 280 quejas y 380 oficios interpuestos por ciudadanos.  se otorgaron 532 expedientes de aprovechamiento forestal, permitiendo una captación de recursos por cobro de tasa de aprovechamiento forestal correspondiente a $789.707.508 y cobro por seguimiento y evaluación por valor de  $162.903.037 para un total de  $952.610.545
          
          Se atendieron 115 procesos sancionatorios que corresponden a los expedientes de infracciones. en total la oficina de control y vigilancia remitió a subdirección de gestión ambiental  1.307 procesos. 
          
          Adicionalmente se realizaron 1 decomiso   que corresponde a 0,825 m3 de madera de especie Ceiba Bonga',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia69 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity48,
            'year' =>2,
            'value' => 1,
            'description' => 'Se realizó  valoracion y atencion  de especimenes de fauna incautada o decomisada, la cual se relaciona a continuación:  461 Aves , 318 reptiles  y  72 mamíferos y especies marino costeras 5 artropodos.',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia70 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity49,
            'year' =>2,
            'value' => 220,
            'description' => 'Se realizaron 220 evaluaciones y seguimientos a lo instrumentos: Autorizaciones, Licencias y Permisos Ambientales.
          ',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia71 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity50,
            'year' =>2,
            'value' => 46,
            'description' => 'Para la vigencia 2017 se llevaron a cabo 46 procesos impulsados por extracción de minería ilegal.',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia72 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity52,
            'year' =>2,
            'value' => 0.89,
            'description' => 'Se  realizaron visitas de seguimiento a la implementación de los planes de Gestión integral de Residuos sólidos a 17  de los 19 municipios del área de jurisdicción. (pendientes por realizar San Antonio de Palmito y Galeras. 
          
          Además se realizó la evaluación de los planes de Gestión integral de Residuos solidos de los municipios de: San Antonio de Palmitos, Coveñas y Chalan).
          
          finalmente  se realizaron visitas de inspección ocular y técnica al componente de disposición final de residuos solidos en los 19 municipios de la Jurisdicción de Carsucre.',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia73 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity55,
            'year' =>2,
            'value' => 329,
            'description' => 'Se han realizado 329 inscripciones en el Registro de Generadores de Residuos o Desechos Peligrosos, en atención a la solicitud por parte de entidades generadoras de residuos o desechos peligrosos. Entidades dentro de las que encontramos: talleres de mecánica automotriz e instituciones prestadoras de servicios de salud.                                                                                                                                            
          
          Se ha realizado seguimiento de la información registrada en la plataforma inherente del SIUR, administrada por el IDEAM. Desarrollo de jornada de recolección de residuos de aparatos eléctricos y electrónicos computadores y periféricos con el apoyo del programa computadores para educar.
          
          Se ha realizado la segunda gran campaña de recolección de residuos posconsumo en la Jurisdicción de CARSUCRE
          
          Se han venido realizando Visitas de inspección a los entes generadores de residuos peligrosos como entidades prestadoras de servicios de salud, estaciones de servicio, talleres u otros en la jurisdicción de CARSUCRE.
          
          ',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia74 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity56,
            'year' =>2,
            'value' => 3,
            'description' => 'Se diseñó   un instrumento para recolección de información acerca de  los diferentes procesos y/o actividades de Educación Ambiental - EA, que se desarrollan en distintas instituciones con competencias y/o responsabilidad educativo - ambiental en la jurisdicción de CARSUCRE.  
          Se Aplico un instrumento a las siguientes instituciones: COMPAS, METROSABANAS, UNIVERSIDAD DE SUCRE, CECAR, CORPOMOJANA, AGUAS DE LA SABANA, ELECTRICARIBE, SURTIGAS, FUNDACION SEMANA, ECOPETROL, FUNDACION MONTES DE MARIA Y GRUPO ARGOS para análisis de establecer acercamientos o posibles alianzas institucionales.
          Se elaboró un perfil del documento para establecer acuerdo de voluntades, con la  el cual se encuentra en revisión jurídica de la empresa CONCESIONARIA VIAL MONTES DE MARIA Concesionaria vial Montes de María y se ha venido realizando seguimiento para que se concluya de manera satisfactoria esta alianza.  
          Se realizó una mesa de trabajo con empresas privadas(Grupo Argos, fundación Argos, Compas S.A. SED. Gobernación)  para socializar propuesta de articulación. Se presenta lo que sería la propuesta de articulación publico privada, para la educación ambiental y la Incorporación de las Empresas y Negocios, al Sistema Departamental de Educación Ambiental.Se establecieron los nodos municipales para la formalizacion de la red de jovenes de ambiente
          Se realizaron convenios con los municipios de Buenavista y Since para mejorar la gestion ambiental
          Se realizo convenio con USAID - Riquesa Natural para promover la conservacion y el desarrollo economico sostenible en el caribe colombiano',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia75 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity57,
            'year' =>2,
            'value' => 6,
            'description' => 'El Comité técnico interinstitucional de Educación Ambiental, Sucre(Resolución 4730 de 2015): Elaboró  la ruta de gestión política para construcción del proyecto de ordenza presentado a la asamblea departamental para la aprobación y adopción de la Política publica departamental de Educación Ambiental.
          Se brindo asistencia técnica a Cideas Municipales: Since, San Antonio de palmito, Galeras y Betulia.
          Se ha realizado un plan de gestión para la Construcción participativa de lineamiento que concluyo con la elaboración de un convenio de cooperación entre CECAR Y CARSUCRE, para la formulación e implementación de un Proyecto Ambiental Universitario “PRAU”.
          Se establecieron los nodos municipales para la formalizacion de la red de jovenes de ambiente
          Se realizo el encuentro y asamblea departamental de la red de jovenes de ambiente
          Se realizo seguimiento a los PROCEDAS establecidos en los municipios de Coloso y Chalan 
          
          ',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia76 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity58,
            'year' =>2,
            'value' => 2,
            'description' => 'Se aplicaron estrategias de incentivos no monetarios como:
          Se realizo la segunda Asamblea Departamental de Jóvenes de Ambiente en la cual fueron elegidos  cinco coordinadores de la red departamental como máximo ejercicio democrático que hay dentro de la organización jóvenes de ambiente  por un gran numero de asistentes a este evento, quienes deberán velar por la preservación de los recursos naturales de la región , asistieron 176 jóvenes con entrega de certificación ambiental como reconocimiento al  voluntariado de la red de jóvenes de ambiente.
          Entrega de certificación ambiental de reconocimiento a los PROCEDAS establecidos en los municipios de Coloso y Chalan ',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia77 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity59,
            'year' =>2,
            'value' => 1,
            'description' => 'Contrato No 2303932 FAO - CARSUCRE, en el marco del proyecto GEF de Conectividades, para la ejecucion de acciones para posicionar y difundir la estrategia CONEXIÓN BIOCARIBE y la estrategia de educacion ambientaldel SIRAP CARIBE, adaptada a diferentes niveles e implementada en instituciones educativas, con el fin de sensibilizar sobre la importancia de la biodiversidad y de las conectividades socioecosistemicas.',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia78 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity60,
            'year' =>2,
            'value' => 5,
            'description' => 'Radio (Divulgación atraves de ruedas de presas con distintos medios locales , regionales y nacionales para la  divulgación de actividades realizadas en el marco de la celebración de fechas ambientales)
          
          Televisión (Se han realizados entrevista por CARACOL Tv, y noticieros Locales, Regionales, Nacionales e internacionales  de tv . Audios para el noticiero Sucre Noticias de Radio Majagual, y entrevista en vivo desde Cartagena para Noticias Hoy de Radio Caracolí, Televista de Telecaribe, Sure Noticias Sincelejo, RCN Radio, programa cuarto poder del canal CNC.)
          
          Campañas (Campanas educativas en instituciones para entrega de boletines informativos de acuerdo a temáticas de interés institucional y comunitario)
          
          Redes Sociales (Se ha elaborado la Implementación de una estrategia de divulgación por medio de redes sociales: Facebook, Pagina Web ,Instagram y Twiter).
          
          Medios Escritos ( Se realizo revista o boletín informativo de las actividades de control y vigilancia del primer semestre del año, Se realizaron 2 publicaciones en revistas del periódico el meridiano sobre temáticas de Respe y de Manejo de especies exóticas (Caracol Gigante Africano), Impresión de las revistas informativas de la política departamental de educación ambiental )',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia79 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity63,
            'year' =>2,
            'value' => 3,
            'description' => 'Implementación de (55) estufas ecológicas eficientes, ambientalmente sostenibles y en funcionamiento, con su respectivo manual instructivo, en la vereda Santa Inés y Zonas Rurales aledañas al Municipio de Buenavista, Con el acompañamiento de la alcaldía municipal, se coordinó la entrega por cada familia de 64 árboles Para la siembra del huerto leñero se coordinaron todas las actividades inherentes a la mano de obra e insumos, se brindo capacitaciones a las 55 familias beneficiadas del proyecto para su eficiente utilización 
          
          Implementación de  40 estufas ecológicas en el Municipio de Buenavista en  las veredas de Santa Ines, el Salto y zonas rurales aledañas al casco urbano, se implemento un programa piloto para establecimiento de huertos endoenergéticos, con los cuales se busca motivar aún más a la población interesada en un área aproximada de 80.000 m2, y  una plantación total de 1.280 árboles establecidos, con el cual se busca motivar aún más a la población beneficiaria a ser más amigable con el medio ambiente y a establecer áreas de mayor dimensión para el establecimiento de huertos leñeros y por último se realizo Una (1) jornada masiva de capacitación de 8 horas de duración. 
          
          Dos sistemas de Cosechas de Aguas en el Municipio de Since, uno en la Institución Educativa Valencia, sede principal  y el otro en Velez, se sensibilizó a la comunidad de la Institución  Educativa de Valencia sedes Principal y Velez, Consejo Directivo, Cuerpo Docente  y padres de familia de los graves perjuicios que se pueden presentar  si no se le da el uso adecuado y eficiente al agua.',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia80 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity65,
            'year' =>2,
            'value' => 0.1,
            'description' => 'Este proyecto será ejecutado a través de la Consultoría  para Desarrollar las Fases de Aprestamiento y Diagnóstico de la Formulación del Plan de Ordenación y Manejo Ambiental con inclusión del riesgo de la Cuenca Hidrográfica Directos Caribe Golfo Morrosquillo, Sucre, el cual tiene una duración de 5 meses contados a partir del 6 de diciembre del 2017',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia81 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity66,
            'year' =>2,
            'value' => 0.3,
            'description' => 'Se generó el documento final del Plan de Manejo de ma microcuenca del arroyo Pechelín en la Jurisdicción de CARSUCRE, cumpliéndose la meta durante la vigencia 2016, la siguiente etapa es la adopción del documento a través de una Resolución de adopción del Plan de Manejo.',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia82 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity69,
            'year' =>2,
            'value' => 1,
            'description' => 'A través del Contrato de Prestación de Servicios Profesionales N°  0197 del 22 de diciembre de 2017 se realizará la Prestación de Servicios Profesionales y Apoyo a la Gestión Para la Socialización y Adopción del Plan General de Ordenación Forestal -PGOF- en la jurisdicción de CARSUCRE VIGENCIA 2017, con una duración de Cinco (5) meses contados a partir del 29 de diciembre del 2017.',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia83 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity71,
            'year' =>2,
            'value' => 1,
            'description' => 'Se elaboro diagnostico preliminar de los arrecife de corales en la jurisdicción de la corporación y se realizo una caracterización de los pastos marinos.
          Para ejecutar esta actividad se realizaron inmersiones(buceos) en la aguas marina del golfo de morrosquillos en los municipios de Tolú y San Onofre.
          Se logró firmar el Convenio 0560 del 31 de octubre de 2017 con la participación del MADS PNN y las corporaciones Cardique, Cvs y Carsucre cuyo objetivo fue aunar esfuerzos técnicos y financieros para consolidar las fases del Plan de Ordenación y manejo integrado de la unidad ambiental costera esturiana del rio Sinu y Golfo de Morrosquillo ',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia84 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity72,
            'year' =>2,
            'value' => 3,
            'description' => 'Se han realizado visotas de inspección tecnica y ocular para el levantamiento de redes tortugueras en el
          corregimiento de Berrugas, municipio de San Onofre, en el sector de Isla Boquerón
          para un total de 1800 m de redes.
          
          Se llevaron a cabo varias charlas con miembros de la comunidad de Sabanetica en San Onofre, para evitar la extracción de sedimentos para relleno de humedales.
          
          Se procedio a la liberación de once (11) tortugas icotea (Trachemys callirostris) las cuales nacieron en el patio de una casa en la vía Tolú - Coveñas por transporte accidental de los huevos en arena de rio para construcción. 
          
          Atención y monitoreo de la calidad de aguas marinas y sedimentos con Invemar, por el incidente de derrame de crudo en la TLU2 operada por Ocensa.
          
          Se han realizado visitas de seguimiento a las principales construcciones de cabañas, aterramientos y talas de Manglar en los municipios de Coveñas Tolú y San Onofre.
          
          Se contrató una empresa para el suministro de combustible para las actividades que se desarrollan en zona Costera. ',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia85 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity73,
            'year' =>2,
            'value' => 100,
            'description' => 'Se realizo mantenimiento a las parcelas de manglares',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia86 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity74,
            'year' =>2,
            'value' => 0.7,
            'description' => 'El proyecto convenio interadministrativo 0560 de 31 de Agosto de 2017 firmado entre el Ministerio de Ambiente y desarrollo Sostenible, Parques Nacionales Naturales PNN y las corporaciones: Cardique, CVS y Carsucre, cuyo objeto fue Aunar esfuerzos esfuerzos tecnicos y financieros para la consolidación de la fase de preparación o aprestamiento y frotalecer la formulación del plan de ordenacion y manejo integrado de la unidad Ambinetal Costera -UAC-, asi como establecer acciones en el territorio enmarcado en el departamento de Sucre para la gestión de Ecosistemas marinos- Costeros, acorde a los linemaientos de restauración definidos por el MADS. Para le vigencia 2017 se realizarón los siguientes avances:
          -Se realizó la entrag del documento que contiene los vacios de infromación basados en la revisión de los documentos generados en desarrollo de los convenio 032 de 2015 y el documento del POMIUAC que integra la actualización de la información producto del mismo convenio.
          -Se relaizó 1 taller de entrenamiento a los miembros del comité tecnico.
          - Se realizó 1 reunión y 2 talleres en el marco de al obtrención de los lineamientos de restauración ecologica de Manglares.
          - Se inicio la construcción del documento final que contiene los lineamientos de restauración ecologica de Manglares, el cual se piensa entregar finalizado para finales de Enero de 2018, cuando terminen los tallares faltantes.',
            'date_report' => '2017-12-31',
            'rezago' => false,
            ]);
            $idevidencia87 = DB::getPdo()->lastInsertId();

            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity1,
            'year' =>3,
            'value' => 1.8,
            'description' => 'Se firmó contrato No 0225 de 28 de Junio de 2018, con una duración de seis (6) meses, para adelantar la ampliación y mantenimiento de la red de monitoreo; el mantenimiento de obras piloto de recarga artificial y la construcción de bodega para maquinaria pesada en área de influencia del acuífero morroa.
            Las obras de recarga construidas fueron un pozo de inyección (está en el 90% de ejecución física); dos pozos de gran diámetro (70% de ejecución física); un desarenador o serpentín (100% de ejecución física) y una laguna de infiltración (90% de ejecución física)
            
            En cuanto a los piezómetros, se construyeron tres piezómetros: el priemro en la via al Bajo San Juan, municipìo de Morroa, para vigilar la calidad y los niveles del agua de las capas acuíferas inferiores del acuìfero Morroa;  el segundo en el predio Villa Vanessa, Sabanas de Cali, municipio de Morroa, para monitorear las obras de recarga artificial construidas en este predio; y el tercero en la Via La Peña Municipio de Ovejas, para vigilar la calidad y los niveles del agua del acuìfero Morroa en la zona norte del acuìfero.',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia88 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity2,
            'year' =>3,
            'value' => 3,
            'description' => 'Se firmó contrato No 0225 de 28 de Junio de 2018, con una duración de seis (6) meses, para adelantar la ampliación y mantenimiento de la red de monitoreo; el mantenimiento de obras piloto de recarga artificial y la construcción de bodega para maquinaria pesada en área de influencia del acuífero morroa.
            Las obras de recarga construidas fueron un pozo de inyección (está en el 90% de ejecución física); dos pozos de gran diámetro (70% de ejecución física); un desarenador o serpentín (100% de ejecución física) y una laguna de infiltración (90% de ejecución física)
            
            En cuanto a los piezómetros, se construyeron tres piezómetros: el priemro en la via al Bajo San Juan, municipìo de Morroa, para vigilar la calidad y los niveles del agua de las capas acuíferas inferiores del acuìfero Morroa;  el segundo en el predio Villa Vanessa, Sabanas de Cali, municipio de Morroa, para monitorear las obras de recarga artificial construidas en este predio; y el tercero en la Via La Peña Municipio de Ovejas, para vigilar la calidad y los niveles del agua del acuìfero Morroa en la zona norte del acuìfero.',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia89 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity3,
            'year' =>3,
            'value' => 335,
            'description' => 'Se realizó el mantenimiento de 335 hectáreas de plantaciones forestales para la restauración de coberturas boscosas establecidas en área de recarga de acuíferos en los Municipios de San Onofre, Chalan, Colosó, Morroa y Toluviejo. Se realizaron 4 talleres de sensibilización a comunidades rurales de los municipios de Colosó, Morroa, San Onofre y Toluviejo. Se realizó la entrega del material divulgativo (500 folletos) a lideres de las comunidades y beneficios directos del proyecto. (realizado através del contrato No 0119 de 02 de mayo de 2018, con una duración de 08 meses).',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia90 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity5,
            'year' =>3,
            'value' => 257,
            'description' => 'Monitoreos de aguas superficiales  en las estaciones localizadas en las siguiente microcuencas: Arroyo Grande de Corozal, arroyo Canoas, arroyo Pechilín, arroyo Mancomoján, arroyo Torobé y arroyo Villeros. Además de la represa Villeros y la laguna costera La Caimanera.
            
            Sistemas de tratamiento de Colosó, Galeras, Sincé, San Onofre, Los Palmitos, El Roble, San Pedro, Buenavista, Palmito, Toluviejo, Coveñas y Tolú.',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia91 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity6,
            'year' =>3,
            'value' => 2.5,
            'description' => 'Se viene cumpliendo con la ejecución de las siguientes medidas: monitoreo de los acuíferos, seguimiento y control de permisos de perforación de pozos, seguimiento a concesiones de aguas y a capitaciones ilegales ',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia92 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity7,
            'year' =>3,
            'value' => 0.43,
            'description' => 'Se culminó la etapa de aprestamiento para la formulación del plan de manejo acuífero de Betulia y se inició la etapa de diagnóstico el cual presenta un avance del 90%.',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia93 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity9,
            'year' =>3,
            'value' => 135,
            'description' => 'Se ingresaron 85 registros en el sistema de información del recurso hídrico, correspondientes a las 85 estaciones de las microcuencas monitoreadas.
            
            Se ingresaron 50 concesiones nuevas de aguas subterraneas, 50 predios nuevos  y 50 captaciones nuevas.',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia94 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity10,
            'year' =>3,
            'value' => 5,
            'description' => 'Se le hizo seguimiento a los PUEAA de las empresas EMPASAM ESP, AGUAS DEL GOLFO S.A. E.S.P., Cavalier Martinez & Cia, ADESA y Almidones de Sucre S.A.',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia95 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity11,
            'year' =>3,
            'value' => 12,
            'description' => 'Se realizó seguimiento a los PSMV de los  municipios de Sampués, Toluviejo, Morroa, Sincelejo, Colosó, El Roble, Los Palmitos, Corozal, San Juan de Betulia y San Pedro.
            A los municipios de Ovejas y Morroa se le practicaron visitas a vertimientos asociados a los PSMV.',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia96 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity13,
            'year' =>3,
            'value' => 229,
            'description' => 'Se realizó el mantenimiento de 229 hectáreas de plantaciones forestales establecidas con los sistemas de reforestación y Cercas vivas (229 has) en la cuenca del arroyo Mancomojan en el Municipio de Ovejas,  las cuales se encuentran distribuidas de la siguiente manera: Sector Corregimiento de La Peña (94 has), Corregimiento Flor del Monte (48,5 has),  Corregimiento san Rafael (60 has), Corregimiento Canutal (20 has), Corregimiento de Canutalito (6,5 has). Plantación forestal establecidas en la vigencia 2017 en la cuenca del arroyo mancomojan.
            
            Se desarrollaron 4 talleres de capacitación a comunidades beneficiarias, los cuales fueron ejecutados en las horas de la tarde, para que no interviniera en el horario laboral, en este ejercicio se tocaron temas relacionados a la Recuperación de las áreas deforestadas, Conservación de la biodiversidad y Servicios ecosistémicos, en este mismo se le otorgó un plegable donde se describe el objeto y las actividades desarrolladas durante el periodo de ejecución y los beneficios que trae a la comunidad y al medio ambiente este tipo de labores.  
            Temas: 
             Recuperación de las áreas deforestadas.
             Conservación de la biodiversidad.
             Servicios ecosistémicos.
            Se realizó el mantenimiento de las 229 ha de , 
            
            Igualmente se realizó la entrega, a cada uno de los beneficiarios, de las herramientas e insumos necesarios para el desarrollo de las actividades de mantenimiento de la plantación forestal establecida.',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia97 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity14,
            'year' =>3,
            'value' => 370,
            'description' => 'Se firmó el contrato No 0227 del 29 de Junio de 2018, con una duración de 06 meses, para la recuperación de 70 Has de suelos degradados con técnicas biomecánicas (50 Has) y técnicas de bioingeniería (20 Has) en los Municipios de Sincelejo, Morroa, Sincé, San Pedro y Buenavista, articulado con labores de educación ambiental a comunidades beneficiarias.
            
            A través de convenio Aso No. 002 del 27 de Julio de 2018 entre la Asociación de Egresados de Unisucre y Carsucre, se realizaron procesos de aislamiento para la recuperación de 266 Ha de áreas degradadas por medio de recuperación pasiva con cercado perimetral y cercas vivas en los municipios de Morroa, Sincelejo, Buenavista y San Pedro',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia98 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity16,
            'year' =>3,
            'value' => 3,
            'description' => 'La Corporación desarrolló las siguientes actividades para la recuperación de zonas verdes y paisajísticas: SIEMBRATON EN EL SENA. Recuperación de zonas verdes en el campus del Sena, con mas de 300 arboles frutales ( mango, chirimoya y guanábana) y maderables producidos en el CAV Matecaña.  Recuperación de zonas verdes en la Universidad de Sucre con plántulas frutales producidas en el CAV Matecaña. Recuperación paisajística para el embellecimiento de la parte exterior del Teatro Municipal de Sincelejo con plantas ornamentales ( Palmeras, Agaber, Tu y yo, Durantas).',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia99 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity17,
            'year' =>3,
            'value' => 300000,
            'description' => 'Se realizó la compra de insumos y herramientas para la producción de 300.000 plántulas de las especies maderables y frutales; y se contrató la asistencia técnica. ',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia100 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity18,
            'year' =>3,
            'value' => 1,
            'description' => 'Se realizó la ampliación de la unidad productiva porcícola con un área de gestión y lactancia para la implementación de técnicas de producción limpia. (Contrato No 0120 del 19 de Junio de 2018, con una duración de 03 meses).
            
            Se firmó contrato No 028 de 2018, con una duración de 03 meses, para realizar la interventoría técnica, administrativa y financiera al contrato No 0120 del 19 de Junio de 2018.
            
            Se contrató los servicios de 05 contratitas para el mantenimiento del vivero y demás actividades propias del CAFV.',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia101 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity19,
            'year' =>3,
            'value' => 0.64,
            'description' => 'Se firmó contrato de consultoría No 0224 del 26 de Junio de 2018, con una duración de 08 meses, para desarrollar las fases de aprestamiento y declaratoria de áreas protegidas en la jurisdicción de CARSUCRE.
            
            A 31 de diciembre de 2018, se finalizó la fase de aprestamiento (100%) y la fase de declaratoria presenta un avance del 75%, representadas con  la delimitación de un área tentativa de trabajo de 3.286 hectáreas en los municipios de Toluviejo, Colosó, Chalán y Ovejas; perteneciente principalmente, a ecosistemas de bosque seco tropical; determinación del componente bioficos del area a declarar. Hasta el momento, se han identificado como objetos de conservación algunas especies de fauna silvestre puntuales, como son: 1) Saguinus oedipus (mono tití) y Mesochlemys dahli (carranchina), ambas amenazadas en peligro crítico (CR) y endémicas de esta zona de la región Caribe. En cuanto al componente flora faltan por revisar a fondo y actualizar. Al igual que los objetivos de conservación, categorías de manejo y zonificación; puesto que falta procesar algunos apartes menores de información y la elaboración del documento síntesis para la declaratoria de la(s) área(s) protegida(s) de interés. Una vez finalizada la fase de declaratoria se procederá a la elaboración del Acto Administrativo que declara un área protegida, el  cual contiene por lo general:
             Antecedentes normativos y políticos.
             Resumen de la justificación de declaratoria.
             Objetivos de conservación del área.
             Delimitación con la respectiva descripción de limites y coordenadas, extensión en hectáreas y departamentos y municipios en los cuales tendrá jurisdicción.
             Categoría definida.
             Articulado de prohibiciones y régimen legal aplicable.
             Inclusión de los resultados del proceso de consulta previa, en caso de que éste se haya surtido.',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia102 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity21,
            'year' =>3,
            'value' => 1,
            'description' => 'Se elaboró el Plan de Manejo de las aves paseriformes presentes en la jurisdicción de CARSUCRE. Las aves paseriformes se conocen comúnmente como pájaros, y a veces aves canoras o pájaros cantores. (Se firmó otrosí al contrato No 0187 de 2017).',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia103 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity23,
            'year' =>3,
            'value' => 3,
            'description' => 'Se realizó la adecuación del sistema de tratamiento de aguas residuales del CAVF colosó.
            
            Dentro del marco de la campaña tu casa no es su casa) se establecieron puesto de control, en los diferentes municipios de la jurisdicción de CARSUCRE, tendientes al decomiso-incautación-recuperación-rescate y entregas voluntarias; con los siguiente resultados:
            
            Decomiso de 5.281 reptiles, de los cuales 517 fueron liberados, 138 incinerados y 4.626 individuos entregados, reubicados o liberados en los sitios: Represa Argos, San Onofre, CAICSA, Estación Primatologica, Los Palmitos, Mata De Caña , CORPOMOJANA, Pileta, Las Palmas, roca madre, Calle Nueva, Ovejas, Chalan, La Palmira y el francés.  y un subproducto 108 huevos de iguana y 15 libras de carne de hicotea. 
            
            Decomiso de 85 mamíferos de los cuales 55 fueron liberados, 8 incinerados y 22 fueron entregados, reubicados o liberados en los sitios: Estación Primatologica, Granja Perico, Fundación AIUNAU, Mata De Caña, Finca Santorini, Reserva Sanguare, Sampues, Ciénaga La Caimanera, La Palmira, Sincelejo (UNISUCRE), chichiman, calle nueva, CVS. Igualmente se realizó el decomiso del subproducto de 187 libras, utilizadas para el suministro de alimento para los especímenes que se encuentran en custodia de la corporación. 
            
            Decomiso de 249 aves de las cuales 189 fueron liberadas, 45 aves incineradas y 15 aves entregadas, reubicados o liberadas en los sitios: Estación Primatologica de Colosó, Sincelejo, Represa Argos, Carsucre, Mata De Caña , Granja Perico, CAICSA, Tolú, Chalan, Arroyo La Arena, La Ensenada, Piletas, Las Palmas, Roca Madre, Ciénaga La Caimanera, Villa Rosita y Calle Nueva.  y un subproducto de dos (2) huevos de avestruz.
            
            Igualmente se desarrollaron actividades de capacitacion interinstitucional y en instituciones educativas sobre el manejo adecuado de la fauna silvestre, para contribuir con la reducción del tráfico ilegal y la tenencia como mascota de la fauna silvestre. dirigida a estudiantes de 9° 10° 11° y docentes.',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia104 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity24,
            'year' =>3,
            'value' => 2,
            'description' => 'Caracol Gigante: Se realizaron capturas de 355 individuos en diferentes sectores de los municipios de Sincelejo (mayoritariamente) y Tolú. Se realizaron visitas de control a cinco (5) viveros en el municipio de Sincelejo y a dos (2) viveros en el munciipio de Corozal, en aras de prevenir la diseminación de esta especie invasora através de las plantas y abonos que estos comercializan, pero no se encontró evidencia de la presencia de esta especie.
            
            Pez León: Se llevó a cabo salida de campo, con el objeto de monitorear y capturar especímenes de peces león, actividad realizada en la zona de Bajo Pajarito, cerca la Isla Boquerón, sitio que presenta variedad de ecosistemas; entre los cuales se destacan pastos marinos y arrecifes coralinos.  llevada a cabo por dos equipos de buceo conformado por 3 buzos cada uno. Se realizó una sola inmersión de 45 minutos, a una profundidad de 15 metros y abarcando un transecto lineal de 100 metros y se capturaron 11 individuos con tallas que oscilan entre los 18,7 y 26,5 cm de longitud total (LT). Se llevaron a cabo 2 jornadas de sensibilización y difusión de información en los corregimientos de Berrugas y Rincón del mar, ambos jurisdicción de San Onofre. En estas jornadas se entregaron folletos que contenían información de interés sobre p. volitans y se aclaraban dudas que tenía la comunidad de pescadores y turistas a los que se abordó.',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia105 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity25,
            'year' =>3,
            'value' => 1,
            'description' => 'META REALIZADA EN LA VIGENCIA 2016',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia106 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity26,
            'year' =>3,
            'value' => 1,
            'description' => 'META REALIZADA EN LA VIGENCIA 2016',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia107 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity27,
            'year' =>3,
            'value' => 0.53,
            'description' => 'META REALIZADA EN LA VIGENCIA 2016',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia108 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity28,
            'year' =>3,
            'value' => 1,
            'description' => 'Implementación de la mesa Sirap Caribe',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia521 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity29,
            'year' =>3,
            'value' => 1,
            'description' => 'Implementación de la estrategia de comunicaciones del proyecto bioconexion caribe (GEF Conectividades)',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia522 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity31,
            'year' =>3,
            'value' => 1,
            'description' => 'Durante la vigencia 2018 se realizaron las siguientes actividades:
            
            1. Fortalecimiento  de cuatro (4)  negocios verdes con la implementación de igual número de planes de mejora, los negocios corresponden a: BOLILECHE, FRUTOS DEL BOSQUE SECO, LOMBRIABONOS LA GRANJA Y ASOAPICOL . El fortalecimiento consintió en la compra de materiales, equipo e insumos que se requiere para el cumplimiento de los criterios de sostenibilidad. 
            2.  El 11 de mayo de 2018 se realizó el Lanzamiento de la ventanilla física y virtual de Negocios Verdes (conformada mediante  Resolución 2431 del 29 de diciembre de 2017), la cual contó con la participación de empresarios, actores institucionales, medios de comunicación y público en general. El evento se realizó en las instalaciones de CARSUCRE y se  trasmitió en vivo mediante un circuito cerrado de televisión el cual obtuvo más de 1.700 visitas a nivel nacional.
            3. Se firmó Memorando de Entendimiento entre CARSUCRE y USAID.  
            4. Se practicaron visitas de campo para verificar  a 20 negocios verdes  en el marco del Programa Generación de Negocios Verdes (Convenio suscrito entre el MADS y la UE). 
            5. Se realizó, para el mes de noviembre 2018, la Primera Feria Regional de Negocios Verdes, la cual contó con la participación de 30 negocios verdes y 8 actores institucionales.
            6. Se realizó rueda de negocios con la participación de 20 empresarios del orden nacional e internacional dentro de la estrategia de fortalecimiento y promoción del programa regional de negocios verdes.
            7. Se desarrolló un espacio denominado café ambiental de la Feria de Negocios Verdes para realizar conversatorio de información actualizada sobre el crecimiento verde del país dirigido al público en general.
            8. Se desarrollaron 4 paneles sobre: Experiencias en la Implementación de los PRNV, Papel de la cooperación internacional en la conservación y uso sostenible de la biodiversidad, Cooperación de financiación y potencialidades de los negocios verdes, los cuales contaron con la partición de Directores de corporaciones, FINAGRO, FAO, USAID, Policía Nacional, Secretaria de Turismo Departamental, Cámara de Comercio, Universidades (UNISUCRE Y CECAR).',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia109 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity33,
            'year' =>3,
            'value' => 3,
            'description' => 'Se continuo con la alimentación y actualización de los Softwares de Tasa Retributiva, Tasa por Uso del Agua (TUA), PCT y Módulo de almacén de la Corporación.',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia110 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity34,
            'year' =>3,
            'value' => 19,
            'description' => 'Se brindo apoyo a los municipios de la jurisdicción de CARSUCRE con la puesta en marcha de un Plan de visitas para abordar las temáticas ambientales en los componentes asociados en materia de Ordenamiento Territorial / Medio Ambiente;  se abordaron los siguientes Municipios : Toluviejo, Tolú, San Onofre, Sincé, Corozal, Sampués, Chalán, Sincelejo y la Gobernación de Sucre, los cuales se encuentran llevando a cabo la actualización de sus POT. 
            Igualmente Se conminó a 17 de los 19 Municipios para la elaboración de su documento de Ordenamiento Territorial, exceptuándose Sincelejo y Toluviejo por encontrarse en proceso de concertación con la Corporación. ',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia111 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity35,
            'year' =>3,
            'value' => 4,
            'description' => 'Los Municipios que se encuentran siendo asesorados y apoyados activamente en la temática de riesgos por encontrase en la fase de revisión y ajuste de sus POT son los siguientes: Toluviejo, Corozal y Sampues y  el Departamento de Sucre con su Plan de Ordenamiento Departamental - POD. ',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia112 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity36,
            'year' =>3,
            'value' => 4,
            'description' => 'Se realizó el POAI 2018 de la Corporación, Se elaboro e implemento el Plan Institucional de Archivo, PINAR de Carsucre, se actualizó el Plan Anticorrupción de acuerdo a lo establecido por la norma,  Implementación del SGSST',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia113 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity37,
            'year' =>3,
            'value' => 23,
            'description' => 'Durante la vigencia 2018, se registraron en el Banco de proyectos de la Corporación (BPC) de CARSUCRE 23 proyectos corporativos con viabilidad técnica, de los cuales 5 son cofinanciados por el FCA y CARSUCRE,  14 tienen financiación con recursos propios de la Corporación. Los cuatro (4) proyectos restantes que solicitaron recursos del FONAM fueron viabilizados por el DNP pero no giraron los recursos, por lo que fueron devueltos a la Corporación.',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia114 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity38,
            'year' =>3,
            'value' => 2,
            'description' => 'Se termino la construcción de espacios interiores con sus respectivos acabados: 
            Sala de Audiovisuales
            Área de Jurídica
            Oficina de Secretaria General con baño interno
            Oficina de Control Interno
            Oficina de Licencias Ambientales, Oficina Ambiental
            Cuarto Eléctrico  y voz y datos. 
            Además, se realizó la instalación de cubierta y en la zona exterior se construyó escalera metálica para el acceso a la azotea. 
            
            
            Para el segundo semestre se adquirieron muebles y equipos para la dotación de las diferentes oficinas de la Corporación, entre ellos: 30 Computadores de escritorio, 1 Servidor, 2 Fotocopiadoras y Suministro e Instalacion de mobiliario de oficinas y auditorio para la nuevas instalaciones del segundo piso de la Corporacion Autonoma Regional de Sucre - CARSUCRE.',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia115 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity39,
            'year' =>3,
            'value' => 1131,
            'description' => 'La oficina de Secretaria General de la Corporación durante el primer semestre de 2018, aperturó o impulsó 1.719 Actos Administrativos, de los cuales 1.131 expedientes Jurídico Ambientales fueron resueltos,  destacándose entre ellos los siguientes: 658 expedientes Archivados, 136 autorizaciones de aprovechamiento forestal (Arboles), 152 resuelve investigación, 61 autorizaciones de podas de arboles y 37 decretar embargo, entre otros.
            ',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia116 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity44,
            'year' =>3,
            'value' => 1,
            'description' => 'Se contrató los servicios técnicos con la finalidad de dar asistencia Y optimización a los equipos de cómputo y la red local de la Corporación, se contrataron profesionales en sistemas para dar la optimización y soporte a los sistemas de información de la corporación, como también a las políticas nacionales en el sector TIC. ',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia523 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity45,
            'year' =>3,
            'value' => 170,
            'description' => 'Se contrató los servicios técnicos con la finalidad de dar asistencia y la optimización a los equipos de cómputo y la red local de la Corporación. 
            
            Se contrataron profesionales en sistemas para dar la optimización y soporte a los sistemas de información de la corporación, como también a las políticas nacionales en el sector TIC.
            
            Para el segundo semestre de 2018 se adquirieron 140 licencias  Antivirus y 30 licencias Office.',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia117 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity47,
            'year' =>3,
            'value' => 8,
            'description' => 'Para controlar el tráfico ilegal de especímenes de flora y fauna silvestre se realizaron 8 puestos de control en los siguientes municipios de la Jurisdicción de Carsucre: en el mes de febrero (San Onofre), en el mes de marzo (San Onofre), en el mes Abril (Sincelejo (4), en el mes de agosto (San Onofre y Sampués).
            
            La oficina de control y vigilancia dando cumplimiento a la atención de quejas y oficios  dio como resultado una atención de 150 quejas y 276 oficios interpuestos por ciudadanos.  Se realizaron seguimiento a 301 expedientes de aprovechamiento forestal, permitiendo una captación de recursos por cobro de tasa de aprovechamiento forestal correspondiente a $21.844.130 y cobro por seguimiento y evaluación por valor de  $103.866.031 para un total de  $125.710.161.
            
            En total la oficina de control y vigilancia remitió a subdirección de gestión ambiental  387 informes de visita con sus respectivos conceptos técnicos.
            
            Durante la vigencia 2018, se realizaron decomisos de 15 metros cúbicos de roble; 1,7 metros cúbicos de ceiba tolua, 4 jornales de palma amarga y 1.875 kilos de carbón vegetal.',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia118 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity48,
            'year' =>3,
            'value' => 1,
            'description' => 'Se realizó  valoración y atención  de especímenes de fauna incautada o decomisada, la cual se relaciona a continuación:  249 Aves , 5.281 reptiles ,  85 mamíferos, especies marino costeras 139 artrópodos 5 equinodermo, 126 moluscos y 2 peces .',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia119 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity49,
            'year' =>3,
            'value' => 263,
            'description' => 'Durante la vigencia 2018 se realizaron 163 evaluaciones y seguimientos a los instrumentos: Autorizaciones, Licencias, infracciones y Permisos Ambientales.',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia120 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity50,
            'year' =>3,
            'value' => 50,
            'description' => 'Durante la vigencia 2018, se impulsaron 50 procesos por extracción de material y explotación ilegal de canteras.',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia121 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity51,
            'year' =>3,
            'value' => 132,
            'description' => 'Para el monitoreo de los contaminantes de PM10 y PM2,5 se le hizo otrosí al contrato 0178 de 2017 con Control de Contaminación Ltda y además se contrató un profesional para realizar el seguimiento de las actividades que generan emisiones atmosféricas.',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia122 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity52,
            'year' =>3,
            'value' => 1,
            'description' => 'Se  realizaron visitas de seguimiento a la implementación de los planes de Gestión integral de Residuos Sólidos a los 19 municipios del área de jurisdicción.
            
            Se atendieron 10 expedientes por infracción sobre disposición inadecuada de residuos sólidos: Exp. 357 de 17 sep de 2015, Exp. 204 de 25 de julio de 2014, Exp. 169 de 2 de mayo de 2015, Exp. 238 de 17 de julio de 2015, Exp. 0252 de abril 05 de 2017.   Municipio de Buenavista, Exp. 334 de mayo 10 de 2017. Municipio de Sincé, Exp. 4185 de julio 09 de 2007.  Municipio de Sincelejo, Exp. 0103 de febrero 23 de 2017.  Municipio de Santiago de Tolú, Exp. 107 de 23 de abril de 2015.  Municipio de Sincelejo, y Exp. 399 de 27 de octubre de 1998.  Municipio de Sincé.
            
            Se atendieron 15 quejas sobre disposición inadecuada de residuos sólidos en los municipios de Buenavista, Sincelejo, San Onofre, Betulia, Since, Corozal, Coveñas y Morroa.
            
            Se practicaron visita a los municipios de Betulia, Morroa, Corozal y Toluviejo para realizar seguimiento a botaderos a cielo abierto, por solicitud de la Procuraduría Ambiental y Agraria y Juzgados administrativos de Sincelejo.
            
            Se evaluaron 2 Planes de Gestión Integral de Residuos Sólidos de los municipios de Corozal y San Pedro.',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia123 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity54,
            'year' =>3,
            'value' => 1,
            'description' => 'Se realizó la III Campaña de recolección de residuos posconsumo en la jurisdicción de Carsucre (Residuos de computadores y periféricos 3,4 Ton; Bombillas 320 Kg; Pilas y acumuladores 26 Kg; Baterías usadas plomo ácido 71 Unidades; envases de plaguicidas con empresas licenciadas 25 Bultos y Llantas usadas 330 Unidades).
            Se realizaron 92 visitas de inspección ocular y técnica a entidades generadoras de aceites lubricantes usados.
            Se realizaron 30 visitas de inspección ocular y técnica a entidades generadoras de residuos hospitalarios y similares
            Se realizó el seguimiento y evaluación de 15 planes de contingencia radicados ante la corporación autónoma regional de Sucre - CARSUCRE.
            Se realizaron visitas de control y vigilancia a derrames de hidrocarburos, derivados o sustancias nocivas.
            Se realizaron actividades de control y seguimiento ambiental, con el fin de verificar la información suministrada por los 385 generadores inscritos en la plataforma del Registro de Generadores de Residuos o Desechos Peligrosos. 
            Se realizaron actividades de control y seguimiento ambiental, con el fin de verificar la información suministrada por los 13 inscritos en la plataforma del Registro Único Ambiental para el Sector Manufacturero
            Se realizaron actividades de control y seguimiento ambiental, con el fin de verificar la información suministrada por los 47 inscritos en la plataforma del Inventario PCB.
            
            Se dictaron dos (2) Talleres sobre el correcto manejo de las sustancias agotadoras de la capa de ozono y el calentamiento global (participación de 170 tecnicos y tecnologos en refrigeración domestica y, propietarios de equipos refrigerantes);  Capacitación referente al registro de Generadores de Residuos o Desechos Peligrosos (asistieron 146 personas pertenecientes al sector salud, sector manufacturero, comercial e industrial); Capacitación sobre los Planes de Devolucion de Productos Posconsumo de Plaguicidas (contó con la participación de comercializadores de productos agropecuarios, coordinadores de los planes de devolución de posconsumo de plaguicidas y la secretaría de Salud Departamental); Capacitación referente a planes de contingencia (asistieron 26 personas, entre las cuales asistieron gestores de residuos o desechos peligros, el cuerpo de bomberos de Sincelejo, la defensa civil, la cruz roja seccional Sucre y entidades que transportan Hidrocarburos, derivados o sustancias nocivas); Capacitacion Sobre Registro Unico Ambiental para el Sector Manufacturero (asistieron 10 personas pertenecientes al sector manufacturero); Capacitación sobre el Inventario Nacional de Bifenilos Policlorados - PCB (asistieron 25 personas propietarios de equipos o desechos que contengan o estén contaminados con Bifenilos Policlorados – PCB); Capacitación referente a la Gestion adecuada de Aceites de Cocina Usados – ACU (asistieron 34 personas, entre las cuales se encontraban gestores y generadores de Aceite de Cocina Usados).',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia124 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity56,
            'year' =>3,
            'value' => 6,
            'description' => '1. En el marco del del primer congreso de Biodiversidad y servicios ecosistemicos; una mirada desde la gestiòn y la Educacion Ambiental 2018.se establecio dos alianzas interinstittucional con la Universidad de Sucre:
            a) con el laboratorio de suelos cuyo objeto fue adelantar acciones  conjuntas en torno a la preparacion, implementacion de un espacio Educativo Ambiental centrado al reconocimiento de los servicios ecosistemicos que presta el suelo, asi como la profundizacion del conocimiento de los conflictos que este presenta en el area de jurisdiccion de Carsucre. Como producto de esta alianza se obtiene un documento memoria que da cuenta de los analisis hechos por el delegado de dicha universidad y del trabajo desempeñado como moderador de ese espacio formativo.
            b) Con el programa de biologia, cuyo objeto fue la participacion de un grupo de estudiantes tesista en el proceso de organizacion, preparacion e implementacion academica y logistica en el Congreso Nacional 2018.
            
            2. Se formalizo un acuerdo interinstitucional con la Institucion Educativa San Antonio Club de Leones, con el proposito de garantizar la participacion de esta entidad en el proceso de construccion de relatorias y revision de documento de memoria del congreso de Biodiversidad y servicios ecosistemicos; una mirada desde la gestiòn y la Educacion Ambiental 2018. 
            
            3. Con el SENA se establecio un acuerdo para estimular los avances y resultados del procesos formativo de 20 aprendices del programa Tecnico Ambiental, por medio de su participacion durante el desarrollo de todos los ejes tematicos contenidos en el Congreso Nacional 2018, asi mismo esta entidad participo en la relatoria del mencionado envento y documento memoria. 
            
            4. Con la empresa privada ADESA S.A. se establecio un acuerdo que permitiera utilizar la informacion tecnica que posee como insumo formativo para el desarrollo del modulo tematico GESTION INTEGRAL DEL RECURSO HIDRICO. 
            
            5. Articulacion con CECAR para el uso de la informacion producto de investigacion como material formativo para el desarrollo del modulo tematico del recurso Hidrico.',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia125 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity57,
            'year' =>3,
            'value' => 12,
            'description' => '1.) CIDEA: Se realizo Reunión con la Procuraduría judicial ambiental y agraria para socializar avances y proyecciones en cuanto al CIDEA, se realizo asistencia técnica al Cidea del Municipio de Corozal y galeras.
            se preparó e implementó el Primer Encuentro de Delegados de CIDEA Municipales como Estrategia de Apropiación e Implementación de la Política Departamental de Educación Ambiental de Sucre al cual asistieron diez(10) municipios del departamento. 
            
             2). PRAE: Se Formalizaron 4 convenios con las Instituciones educativas: Altos del Rosario, San Isidro de Chocho, San Antonio-Club de Leones y Técnico Agropecuario La Gallera en el municipio de Sincelejo con el objeto de    Acompañamiento técnico para la cualificación del Proyecto Ambiental Escolar PRAE y Un (1) Convenio con la Institución Educativa Cristobal Colón del Municipio de Morroa.
            
            3). PRAU: Se formalizo un convenio con  Cecar  para la formulación e implementación de un Proyecto Ambiental universitario. Fruto de este convenio se piblicó el Capitulo de Libro:Tipo: Capítulo de libro: De percepciones, a representaciones sociales de agua; una oportunidad para la educación ambiental en CECAR Formación educativa en el contexto social y mediaciones del aprendizaje . En: Colombia  ISBN: 978-980-427-112-0  ed: Universidad Nacional Experimental Rafael Maria Baralt , v. , p.50 - 70  III ,2018. y se adelantó un ejercicio investigativo formativo con 117 personas, entre funcionarios, estudiantes y docentes de CECAR, en el cual se movilizó el concepto de ciclo hidrológico y social del agua con el propósito de generar actidudes de uso racional del mismo en el marco de la gestión integral que promueve Carsucre.                                                                                            
            
            4) EVENTOS DE CAPACITACION Y FORMACION 
            a. Se desarrollo agenda académica en conmemoración al día mundial de la Educación Ambiental.
            b. Acompañamiento a la I.E. Panamericano y al seminario en CECAR en el día mundial del agua.
            c. Se realizo taller pedagógico por el día Mundial de la Tierra apoyado en investigación realizada por el Instituto Alexander von Humboldt y el Instituto Smithsonian de Investigaciones Tropicales.
            d. Se realizó taller de situación ambiental de la biodiversidad por el Día Internacional de la Diversidad Biológica. 
            
            No. personas capacitadas: 747.     ',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia126 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity58,
            'year' =>3,
            'value' => 6,
            'description' => '1. La Corporación participó en la VI  feria internacional de medio ambiente FIMA en la ciudad de Bogotá a través de la instalación de un stand para socializar a todos sus visitantes de nivel regional y nacional todas sus experiencias significativas y lecciones aprendidas frente a los programas, proyectos y campañas de la corporación, con la participación de 5 jóvenes de ambiente y 2 profesionales especializados de la corporación.  se llevaron muestras de las empresas que están adscritas a la ventanilla promotora de negocios verdes de CARSUCRE. 
            
            2. La Corporación patrocino la participación de 5 jóvenes al encuentro nacional de jóvenes de ambiente celebrado en la ciudad de Bogotá.
            
             3. Con la Universidad de Cordoba traves de la facultad de Medicina Veterinaria  se estableciò un acuerdo en el marco del congreso Nacional 2018 para facilitar la particiapacion del grupo de investigacion GEDFAS quienes compartieron su experiencia de Educacion Ambiental para el cuidado y conservacion de la fauna silvestre.
            
            4. Con la Corporacion Autonoma Regional del Cesar se estableció un acuerdo para articular experiencias asociadas al trafico de fauna silvestre en jurisdiccion de Corpocesar 
            
            5 . Adicionalmente con la Asociaciòn de conservacionistas del Caiman de aguja en la bahia de Cistapa ASOCAIMAN, se establecio acuerdo para que nos compartieran la experiencia significativa acerca de la recuperaciòn de poblaciones de esta especie en el municipio de San Antero Cordoba.
            
            6. Con Parques Nacionales Naturales ( Corales del Rosario) se establecio una alianza de cooperaciòn que permitiera la participación de sus funcionarios en el proceso formativo que se desarrolló en el papel de bienes y servicios marino costero.
            ',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia127 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity59,
            'year' =>3,
            'value' => 2,
            'description' => '1. En alianza con la Fundación Botánica y Zoológica de Barranquilla, se desarrolló el Congreso Nacional de Biodiversidad y Sevicios Ecosistémicos, donde se brindaron espacios de educación ambiental enfocados a comprender el valor del uso de la fauna silvestre.
            
            2. Se firmó acuerdo de Cooperación con la Corporación para el Desarrollo Sostenible del Urabá -Corpouraba, con la intención de compartir conocimientos en un espaico de educación ambiental enfocado en la gestión integral del recurso hídirco subterráneo.',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia128 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity60,
            'year' =>3,
            'value' => 5,
            'description' => 'Como estrategias de Comunicación, Información y Participación Implementadas, por la Corporación durante la vigencia 2018, se desarrollaron las siguientes:
            Boletines de prensa: Se Realizaron Boletines de prensa dando a conocer las noticias, programas, campañas y eventos realizados por la Corporación.
            Facebook y Twitter: Se publicaron de manera periódica en la cuenta de Facebook y TWITTER de CARSUCRE, las actividades, noticias y toda la información generada, con el fin de mantener a la comunidad al tanto de la gestión de la administración.
            Instagram: Se presentaron en la cuenta @carsucre_ información actualizada con piezas, videos, notas, comunicados, transmisiones en vivo, historias e informes institucionales, se contó con 2.443 seguidores. 
            Página Web: Se presentó información permanente sobre el quehacer ambiental y los acontecimientos más relevantes ocurridos en la jurisdicción de CARSUCRE. 
            Redes Sociales de Otros Medios: 10 impactos en redes sociales de diarios impresos  con alcance de más de 23 mil seguidores (bonificación, videos en vivo de 50 seg).
            Ruedas de Prensa: Se realizaron ruedas de prensa para la promoción de las actividades más relevantes organizadas por las diferentes dependencias de la corporación.
            Entrevistas: Se realizaron entrevistas en medios de comunicación (radio y televisión) con actores institucionales.
            Grabación y emisión de las cuñas promocionales.
            Pautas radiales: Radio majagual, radio caracolí, radio chacurí, RCN radio y radio piragua.
            Medios impresos: Se realizó la publicación de circulares, comunicados de prensa,  y notas de acuerdo a los requerimientos de la institución y sus actividades, en medios de circulación departamental (Meridano de Sucre y Periódico el Propio).',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia129 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity61,
            'year' =>3,
            'value' => 1,
            'description' => 'Se firmó contrato No 0273 de 28 de diciembre de 2018, con una duración de 10 meses, para Apoyar la Gestión del Riesgo de Inundación, Remoción en Masa y Erosión en los Municipios de Coloso, Chalan, San Pedro y Buenavista.',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia524 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity62,
            'year' =>3,
            'value' => 5,
            'description' => 'Se realizaron  mesas de socialización y sensibilización de las determinantes ambientales (oferta ambiental) a entes territoriales (Municipios de Sincelejo, Sampués, Corozal, Colosó, Los Palmitos y Toluviejo); MADS; USAID-Riqueza natural; Agencia de Renovación del Territorio (ART), Unidad de Parques Naturales; IAVH.',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia130 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity64,
            'year' =>3,
            'value' => 3,
            'description' => 'Se firmo un otro si al convenio 005 del 2017, el día 20 de Abril de 2018 con una duración de tres (3) meses, para la implementación de escenarios demostrativos de la biotecnología de la la biofermentacion en control del impacto ambiental, manejo de aguas residuales y elaboración del compostaje.
            
            Se realizaron 6 talleres de capacitación a pequeños productores de cerdo, estudiantes universitarios y comunidad en general.',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia131 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity65,
            'year' =>3,
            'value' => 1,
            'description' => 'A 30 de Junio de 2018, finalizaron las actividades programadas en el proyecto 2017 (Aprestamiento y Diagnóstico). A 31 de diciembre de 2018, se firmó contrato No 0271 de 26 de diciembre de 2018 para desarrollar las fases de Prospectiva y Zonificación Ambiental del Plan de Ordenación y Manejo Ambiental de la Cuenca Hidrografica Directos Caribe Golfo de morrosquillo , Sucre.  Actividades programadas a entregar el 31 de julio de 2019. ',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia525 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity68,
            'year' =>3,
            'value' => 1,
            'description' => 'Se reprogramó su ejecución para la vigencia 2019. ',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia526 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity69,
            'year' =>3,
            'value' => 1,
            'description' => 'Esta meta fue terminada en el año 2017, según el Plan de Acción.',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia527 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity70,
            'year' =>3,
            'value' => 1,
            'description' => 'Se finalizó la formulación de la propuesta del Plan de Ordenamiento y Manejo Integrado de la UAC Morrosquillo (POMIUAC) y se aprobó por parte del Comité Técnico y la Comisión Conjumnta en mayo de 2018.',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia528 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity71,
            'year' =>3,
            'value' => 1,
            'description' => 'Hasta la fecha la propuesta del POMIUAC Morrosquillo no se ha implementado; sin embargo, se realizaron actividades de seguimiento y monitoreo de los ecoistemas de pastos marinos, corales y manglares. ',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia132 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity72,
            'year' =>3,
            'value' => 3,
            'description' => 'El personal contratado para desarrollar esta actividad, logró realizar visitas de control, y vigilancia, principalmente en temas relacionados con tala y ateramiento de manglares con fines constructivos.
            Se han realizado visitas de seguimiento a las principales construcciones de cabañas, aterramientos y talas de Manglar en los municipios de Coveñas Tolú y San Onofre.
            Se realizaron seguimieno a los nidos de tortugas que eclosionaron en el sector del Rincón del Mar, en cordinación con la comunidad y la fundación Tortugas del Mar
            Se partcipó en el imulcaro de tercer nivel de derrame de hidrocarburos
            Acividades de capacitación y asistencia a reuniones.
            Se inició la capaña para controlar la venta y compra de artículos de carey con la fundación Tortugas del Mar',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia133 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => $idactivity73,
            'year' =>3,
            'value' => 1,
            'description' => '',
            'date_report' => '2018-12-31',
            'rezago' => false,
            ]);
            $idevidencia529 = DB::getPdo()->lastInsertId();

            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity1,
              'year' =>4,
              'value' => 1,
              'description' => 'Durante la vigencia 2019 se tenia programada la escariación de suelos en zonas de recarga del acuifero morroa  con el objeto de mejorar la infiltración de las aguas lluvias y así contribuir con la recarga artificial del acuífero Morroa, pero por problemas de falla mecánica de la retroexcavadora (pajarita) no se pudieron realizar, quedando los recursos 2019, sin ejecutarse. ',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia530 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity3,
              'year' =>4,
              'value' => 30,
              'description' => '
            Se realizo el establecimiento y aislamiento de 30 hectáreas de plantaciones forestales para la restauración de coberturas boscosas con especies nativas maderables en el área de recarga de acuífero en el Municipio de San Onofre  con sus respectivos mantenimientos.
            
            Realizacion de 5 talleres de capacitacion a las comunidades del Municipio de San Onofre, enfocados en conservacion de la biodiversidad y servicios ecosistemicos.
            ',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia134 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity4,
              'year' =>4,
              'value' => 569,
              'description' => '
            Se realizo el mantenimiento de 569 Hectareas de plantaciones forestales para la restauración de coberturas boscosas e en los Municipios de San Onofre, Morroa, Toluviejo ,Colosó, Chalan y Ovejas. y asi mismo, se llevo a cabo la la divulgación del proyecto en los municipios de injerecias en el proyecto..
            Se realizaron  4 Talleres de capacitación a comunidades beneficiarias enfocados en conservacion de la biodiversidad y servicios ecosistemicos.
            ',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia135 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity5,
              'year' =>4,
              'value' => 232,
              'description' => '
            
            Se realizaron monitoreos de las siguientes microcuencas: Arroyo Grande de Corozal, arroyo Canoas, arroyo Pechilín, arroyo Mancomoján, arroyo Torobé y arroyo Villeros. Además de la represa Villeros y la laguna costera La Caimanera.
            Sistemas de tratamiento de Colosó, Galeras, Sincé, San Onofre, Los Palmitos, El Roble, San Pedro, Palmito, Coveñas, Betulia y Tolú.
            ',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia136 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity6,
              'year' =>4,
              'value' => 1.5,
              'description' => 'En la implementación del plan de manejo del acuífero Morroa, CARSUCRE ha venido cumpliendo con todos los compromisos de: seguimientos, construcciòn de obras de recarga artificial y redes de monitoreo.
            No obstante, por parte de los entes territoriales y las empresas prestadoras del servicio de acueducto, no han ejecutado las obras de recarga artificial, no han disminuido las perdidas, ni han puesto a funcionar los sistemas de aguas residuales y tiene algunos aprovechamientos ilegales, como es el caso de los Municipios de Sampues, Sincelejo, Morroa, Corozal, Betulia, Los Palmitos y Ovejas.  
            ',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia137 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity7,
              'year' =>4,
              'value' => 0.25,
              'description' => 'Se culminó la Fase de Diagnóstico, con los avances realizados en el componente técnico y social. 
            En el componente técnico se avanzó en la realización de la evaluación geológica e hidrogeológica del área del acuífero Betulia, recopilación de información existente relacionada con estudios geoeléctricos de la zona, diseños técnicos, columnas litológicas, pruebas de bombeo y análisis fisicoquímicos. Se hizo un balance hídrico inicial con información suministrada por el IDEAM, el cual será complementado con información de precipitación y análisis de oferta y demanda del acuífero; se han realizado análisis de la información recopilada a través de sistemas de información geográfica.  
            En el componente social se avanzó en la identificación de información de aspectos socioeconómicos a través de la dimensión espacial, económica, cultural y politicoadministrativa de los municipios que están en la zona de influencia del Acuífero Betulia. Consulta de información en bases de fuentes secundarias teniendo encuenta planes de desarrollo municipal, EOT y proyectos realizados en la zona. Se realizó la actualización de la línea base de actores y sectores claves. Se realizaron visitas de acercamiento a la comunidad y a instituciones, específicamente a los municipios de Buenavista, San Pedro, Sincé, Galeras y El Roble. Se realizaron talleres de socialización y diagnóstico donde se aplicaron instrumentos a través de procesos participativos en el municipio de San Pedro y en los corregimientos de San Luis de Sampués y Hato Nuevo de Corozal.
            
            ',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia138 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity9,
              'year' =>4,
              'value' => 172,
              'description' => 'Se cargaron al SIRH 122 registros en aguas superticial, correspondientes a las estaciones de monitoreos de las microcuencas monitoreadas y 7 permisos de vertimiento.
            
            En aguas subterraneas se han actualizado 50 registros. No obstante se han actualizado 11 registros del sistema de informacion para la gestion de Aguas Subterraneas - PPIAS',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia139 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity10,
              'year' =>4,
              'value' => 16,
              'description' => 'Se realizó el seguimiento a 16 programas de Uso Eficiente y Ahorro del Agua (PUEAA), como son : Acuapal S.A.E.S.P ; Aguas de la Sabana S.A.E.S.P.; Compas S.A. ; Centro Vacacional Coveñas - Comfasucre; Hotel y Residencia el Carretero; Friogan S.A ; Condominio Punta de Piedra S.A; Abil Antonio Garcia - Finca Villa Luz; Escuela de Carabineros Rafael Nuñez; Condominio Vacacional Casa Blanca; Promotora los Cauchos - Parque Comercial Guacari; Almidones de Sucre S.A.S.; Caisa S.A.S; Acuecar S.A.E.S.P.; Aguas de Coloso S.A.E.S.P; Aguas de Buenavista S.A.E.S.P
            ',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia140 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity11,
              'year' =>4,
              'value' => 14,
              'description' => 'Se realizo seguimiento a los PSMV de los siguientes municipios: Sampués, Toluviejo, Morroa, Sincelejo, Colosó, El Roble, Los Palmitos, Corozal, San Pedro, Buenavista, Ovejas, Chalán, Tolú y Sincé. ',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia141 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity14,
              'year' =>4,
              'value' => 1,
              'description' => 'Mantenimiento De 16,3 Ha de Áreas Degradadas En Proceso De Recuperación Con Técnicas Biomecánicas ubicadas en los Municipios de Since (8.3 Ha); San Pedro(6 Ha) Y Buenavista (2 ha) con a siembra de enraizamiento profundo pasto tipo Brachiaria.
            
            Igualmente, se realizó Mantenimiento y Aislamiento (50 Has) En Los Municipios De Sincelejo (6 Ha), Morroa (11,7 Ha), Sincé (12,9 Ha), San Pedro (9,4 Ha) Y Buenavista (10 Ha) representadas en cercas vivas con especies nativas de la region con refuerzos de alambres y postes madrina para aquellas cercas debilitadas.
            
            ',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia531 = DB::getPdo()->lastInsertId();

              DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity15,
              'year' =>4,
              'value' => 66.3,
              'description' => 'Mantenimiento De 16,3 Ha de Áreas Degradadas En Proceso De Recuperación Con Técnicas Biomecánicas ubicadas en los Municipios de Since (8.3 Ha); San Pedro(6 Ha) Y Buenavista (2 ha) con a siembra de enraizamiento profundo pasto tipo Brachiaria.
              
              Igualmente, se realizó Mantenimiento y Aislamiento (50 Has) En Los Municipios De Sincelejo (6 Ha), Morroa (11,7 Ha), Sincé (12,9 Ha), San Pedro (9,4 Ha) Y Buenavista (10 Ha) representadas en cercas vivas con especies nativas de la region con refuerzos de alambres y postes madrina para aquellas cercas debilitadas.
              
              ',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia142 = DB::getPdo()->lastInsertId();
              
            
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity17,
              'year' =>4,
              'value' => 345000,
              'description' => 'Se contrató los servicios de Tres (3) operarios y un (1) asistente para apoyar las actividades que se desarrollan dentro CAFV matecaña, en el primer semestre se produjeron 230.000 plantulas con las actividades de: recolección de semillas y llenado de bolsas para la producción de  plántulas, riego, mantenimiento de la infraestructura y demás actividades propias del CAVF.
            
            Igualmente para el segundo semestre se produjeron 115.000 plantulas de la siguiente manera: 100.000 mderables; 10.000 frutales y 5.000 ornamentales de varias especies.
            
            Para un total de 345.000 plantulas en la vigencia 2019.',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia143 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity19,
              'year' =>4,
              'value' => 3286,
              'description' => '
            Se encuentra en proceso de declaratoria unas 52.000 hectáreas de área marina protegida, ubicadas en el corregimiento de Chichiman (san Onofre), presentando los siguientes avances:
            
            Se culminó la fase 1 de preparación en un 100%, y se encuentra finalizando la fase 2 de aprestamiento, la cual culmina con la consulta previa. Para lo cual, la corporación viene realizando acompañamiento técnico a este proceso. A la fecha se encuentra en espera de certificación, por parte del Ministerio del Interior, sobre la presencia o no de grupos étnicos en el área a declararse. En caso afirmativo se deberá solicitar el inicio de la consulta previa. Luego se procederá  a desarrollar la fase 3 de declaratoria o ampliación del área protegida, y posteriormente se realizará su registro en el Registro Único Nacional de Áreas Protegias – RUNAP.
            
            Igualmente se encuentra en proceso de declaratoria unas 3.286 hectáreas de nuevas áreas protegidas, ubicadas al norte de la Reserva Forestal Protectora de los montes de maría y serranía de coraza, presentando los siguientes avances:
            
            Se culminó la fase 1 de preparación en un 100%, la fase 2 de aprestamiento en un 100% con certificación por parte del Ministerio del Interior sobre la no presencia de grupos étnicos en el área a declararse. A la fecha se encuentra en la fase 3 de declaratoria o ampliación del área protegida, en espera de concepto por parte del Instituto Alexander Bonn Humboldt,  posteriormente se procederá a realizar su registro en el Registro Único Nacional de Áreas Protegias – RUNAP.
            ',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia144 = DB::getPdo()->lastInsertId();
            

              DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity20,
              'year' =>4,
              'value' => 4,
              'description' => 'En las 4 Áreas Protegidas manejadas por la Corporación (Coraza, Caimanera, Guacamayas y Barayas), se viene adelantando operativos de control y vigilancia, para controlar el trafico ilegal de fauna y flora y la protección de los objetos de conservación, con los siguientes resultados:
              
              Se realizaron operativos de control y vigilancia en las áreas protegidas marino costeras de DRMI ciénaga la Caimanera y Parque Natural Regional Guacamaya, descritos a continuacion:
              * Visita de expediente por construcción en zona declarada parque natural regional de Guacamaya 
              * Acompañamiento a inspección ocular y técnica en el sector de Guacamayas (El Francés) por cambio de uso de suelo, desecación del suelo, aterramiento y tala de manglar. 
              *Visita de Expediente Por construcción de torre de comunicaciones de la empresa CLARO en zona declarada Parque Natural Regional de Guacamaya.
              * Control y vigilancia a causa de la presencia de un Caimán Aguja (Crocodylus acutus) en las ensenadas de Coveñas cerca al DMRI La Caimanera.  
              * Control y vigilancia por la presencia de un Caimán Aguja (Crocodylus acutus) en la desembocadura de la Ciénaga La Caimanera. 
              * Atención a queja por la presencia de el caimán aguja (Crocodylus acutus) en la segunda ensenada de Coveñas el cual fue capturado. 
              * Asistencia a Simulacro por Derrame de Hidrocarburos nivel 3 en la desembocadura de la Ciénaga La Caimanera. 
              
              De igual manera, para ejercer el control y vigilancia en las Areas Protegidas de Coraza y Baraya se establecieron llos siguientes puestos de control :
              * Municipio de San Onofre: Dos (2) puestos de control en la Vereda el Chicho y un (1) puesto de control en Palo Alto; en conjunto con la Infanteria Marina y el ICA.
              * Municipio de Sincelejo : Un (1) puesto de control en Cerrito de la Palma 
              ',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia145 = DB::getPdo()->lastInsertId();
              
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity22,
              'year' =>4,
              'value' => 2,
              'description' => 'Se han realizado las siguientes actividades: 
            
            Se realizó un plan de actividades de control con el objetivo de generar concientización ambiental de forma educativa para la preservación de especímenes de fauna silvestre en  12  municipios de la jurisdicción de CARSUCRE.esta actividad se realizó en compañía de la policía nacional y la infantería de marina.
            
            Decomiso de 477 reptiles, de los cuales 438 fueron liberados, 17 incinerados, 21 en custodia y 4 individuos entregados, reubicados o liberados en los sitios: represa argos, mata de caña, estación Primatologica, coloso, la corocera, san Onofre, Betulia, laguna flor, universidad de sucre y un subproducto 1.382 huevos de iguana,  4 und (colas) de babilla, 33 piezas de tortuga carey, 3 piezas de tortuga verde, 4 und de hicotea, 5 und de tortuga verde o negra, 4 caparazones de hicotea.
               
            Decomiso de 119 mamíferos, de los cuales 78 fueron liberados, 14 incinerados , 2 en custodia y 25 fueron entregados, reubicados o liberados en los sitios: mata de caña, represa argos, san Onofre, la corocera, estación Primatologica, calle larga, la arena, Sanguare, casa fiscal, boca de la ciénaga, galeras, Sincelejo. Igualmente se realizó el decomiso del subproducto de 8 libras  de ponche una (1) ardilla disecada y 6 libras de armadillo. 
            
            Decomiso de 183 aves, de las cuales 58 fueron liberadas, 14 aves incineradas y 111 aves entregadas, reubicados o liberadas en los sitios: estación Primatologica, la corocera, represa argos, las piedras, tolú, mata de caña, Sincelejo, la garita, galeras, universidad de sucre.
            
            Se contrató los servicios de apoyo logístico de la FUNDACION PARA EL DESARROLLO ECOLOGICO Y SOCIAL DE COLOMBIA – FUNDESCO para realizar campaña pedagógica en la comunidad aledaña a los parques los libertadores, sevilla, santander, ecológico de las margaritas, las iguanas, humedal las garzas, pioneros, pozo de majagual, venecia y ecológico de la selva, sobre la conservación y preservación de especies de fauna silvestre, en el municipio de Sincelejo – Sucre.',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia146 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity23,
              'year' =>4,
              'value' => 1,
              'description' => '
            Caracol Gigante: Se realizaron incineraciones de 75 individuos de Caracol Africano en diferentes sectores de los municipios de Sincelejo y Corozal  (mayoritariamente), de los cuales 71 se encontraban en estado vivo y solo 4 en estado muerto.',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia147 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity24,
              'year' =>4,
              'value' => 1,
              'description' => '',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia531 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity25,
              'year' =>4,
              'value' => 1,
              'description' => '',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia148 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity26,
              'year' =>4,
              'value' => 1,
              'description' => '',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia149 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity27,
              'year' =>4,
              'value' => 0.53,
              'description' => '',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia150 = DB::getPdo()->lastInsertId();

              DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity28,
              'year' =>4,
              'value' => 1,
              'description' => 'Se contrató los servicios profesionales de un Abogado, Dos ingenieros Agrícolas, Un Ingeniero Ambiental y un Biologo, para apoyar las labores de control y vigilancia realizadas en areas priorizadas para la conservación, susceptibles de declaratoria de área protegidas en la jurisdicción de CSB.
              
              Se contrato la secretaria tecnica y el director de cooperacion de Sirap Caribe.
              ',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia151 = DB::getPdo()->lastInsertId();
              
            
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity31,
              'year' =>4,
              'value' => 1,
              'description' => 'Se llevaron a cabo las siguientes actividades: 
            
            1. Visitas de verificación de criterios de sostenibilidad a negocios inscrito bajo la categoría de ideas.a 18 nuevos negocios en los municipios de: Sincelejo, Sincé, Sampués, Colosó, Chalán, San Onofre y Ovejas.
            2. Visitas de seguimiento a 24 negocios verdes consolidados de la Ventanilla Promotora de Negocios Verdes en los municipios de: Sincelejo, Sincé, Sampués, Colosó, San Onofre, Ovejas, Corozal, Morroa, los palmitos, Coveñas, Santiago de Tolú, San Antonio de Palmito, el Roble y Toluviejo.
            3.Producción audiovisual de 20 videoclip en el marco del fortalecimiento de la oferta de negocios verdes.
            4.Elaboración de cartilla digital de negocios verdes.
            5. Elaboración de 18 planes de mejora a los nuevos negocios verdes verificados
            6.Taller sistematización y Actualización del Plan Nacional de Negocios Verdes en el Marco del Plan Nacional de Colombia. Pacto por Colombia Pacto por la Equidad con el Ministerio de Ambiente y Desarrollo Sostenible y Programa Generación de Negocios Verdes (convenio U.E y MADS).
            7.- Participación de 10 empresas adscritas a la Ventanilla Promotora de Negocios Verdes de CARSUCRE en la VX Exposición Equina.
            8.Fortalecimiento a actores institucionales con la Trasferencia Nacional de la Guía de Emprendimientos Verdes e Inclusivos.
            9.- Actualización del Plan de Acción de la Ventanilla Promotora de Negocios Verdes
            10- en el marco de la estrategia 2019  Programa generacion de Negocios Verses en convenio con la Union Europea - EU  se realizaro asistencia de acompañamiento a 22 negocios verdes; 18 ideas de egocios verdes verificados con la estructuracion de los respectivos planes de mejora; financiación de participacion a 4 negocios verdes en la VIII version de Bioexpo Pacifico 2019.
            11- Asistencia al encuentro nacional de formacion especializada en Negocios Verdes.
            12-  10 empresarios beneficiados en la capacitacion del encuentro Regional de formacion de Negocios Verdes.
            13- Asistencia a la VIII version de Bioexpo desarrollada en la Ciudad Santiago de Cali, donde participaron 8 empresas de Negocios Verdes de la ventanilla promotora de CARSUCRE; participacion de Apiarios de la sabana en la rueda de negocio internacional; participacion de la empresa Abejas y Miel Limitada en la Rueda de Negocios Nacional
            
            ',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia152 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity32,
              'year' =>4,
              'value' => 1,
              'description' => 'Esta meta fue terminada en el año 2016, según el Plan de Acción.',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia533 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity33,
              'year' =>4,
              'value' => 1,
              'description' => 'Cargue de informacion a la plataforma CHIP y facturacion de carteras ( Tua , tasa retributiva y predial)',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia153 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity34,
              'year' =>4,
              'value' => 19,
              'description' => 'Durante la vigencia se han realizado mesas de evaluación a los ajustes de los POT de los Municipios de: Toluviejo, Santiago de Tolú y San Onofre. Acompañamiento a la revisión y ajustes de los POT de los diecinueve (19) Municipios de la Jurisdicción con la entrega de las Determinantes Ambientales y Estudios de Gestión de Riesgos.
            
            Para el municipio de Sincelejo, se evaluaron: Plan Parcial Bosques de Jacaranda, Plan Parcial Los Angeles, El Plan Parcial Rosedal, Modificación Excepcional de Normas Urbanisticas del POT de Sincelejo, Para la Modificación de normas de Suelo Suburbano para el desarrollo de la Zona Franca Internacional de Sincelejo - ZOFIS y el Plan Parcial de Renovación Urbana en un sector de la unidad de la planificación - UPR Comuna No. 1 La Selva Municipio de Sincelejo.
            
            Para el Departamento de Sucre, se evaluó: El Plan de Ordenamiento Departamental de Sucre - POD, hasta su etapa de Formulación y Muestra del Modelo de Ocupación - MOD.
            
            La Corporación Declaro Concertados los Asuntos Ambientales del EOT del Municipio de Toluviejo mediante Resolución No. 1258 de 4 Octubre del 2019, Para el Municipio de Sincelejo se Concertó el Plan Parcial Bosques de Jacaranda, , para el mismo Municipio, se concertó la Modificación Excepcional de Normas Urbanisticas Zona Franca Internacional de Sincelejo.',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia154 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity35,
              'year' =>4,
              'value' => 1,
              'description' => 'Esta meta fue cumplida en la vigencia 2018',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia534 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity36,
              'year' =>4,
              'value' => 4,
              'description' => 'Se elaboró el Plan Operativo Anual de Inversiones - POAI para la vigencia 2019
            Se elaboró el Plan Anticorrupcion y Atencion al Ciudadano para la Vigencia 2019
            Se implementó el Sistema de Gestion de Seguridad y Salud en el Trabajo - SG_SST con la elaboracion del Plan Anual de Trabajo Vigencia 2019 
            Seguimiento a la implementacion al Plan de Bienestar y Capacitaciones
            Cargue de informacion en la plataforma SIRECI',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia155 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity37,
              'year' =>4,
              'value' => 25,
              'description' => 'Se formularon y registraron en el Banco de proyectos de la Corporación (BPC) de CARSUCRE 24 proyectos corporativos con viabilidad técnica, de los cuales: 4 son cofinanciados por el FCA y CARSUCRE,  15 tienen financiación con recursos propios de la Corporación, Dos (2) proyecto que se encuentra gestionando recursos ante el FONAM (Manglares y Restauración Microcuencas Cambimba y Menbrillal) y 3 proyectos formulados para la vigencia 2020 ( dos cofinanciados con recursos fondo de compesacion y otro con recursos del Presupuesto General de la Nacion) y un proyecto para Fondo Colombia Sostenible.',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia156 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity38,
              'year' =>4,
              'value' => 2,
              'description' => 'Se realizó el mantenimiento al parque automotor y sede administrativa de la Corporación Autónoma Regional de Sucre - CARSUCRE.',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia157 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity39,
              'year' =>4,
              'value' => 2470,
              'description' => 'La oficina de Secretaria General de la Corporación durante la vigencia 2019, aperturó o impulsó  2.470 expedientes Jurídico Ambientales, los cuales fueron resueltos de la siguiente manera:
            1.156 Autos Impulsados, destacándose entre ellos los siguientes: 362 de remision de expediente y/o practica de visita; 150 para adminsiones varias ; 120 para solicitudes y/o requerimientos, entre otros.
            1.314 Resoluciones Impulsadas, destacandose entre ellos los siguientes: 418 de archivo, 202 resuelve investigacion, entre otros.
            
            
            ',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia158 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity40,
              'year' =>4,
              'value' => 1,
              'description' => 'Se firmó carta de intención con el municipio de Sincelejo, para realizar la actualización catastral municipal.',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia535 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity41,
              'year' =>4,
              'value' => 1,
              'description' => 'Meta alcanzada en la vigencia anterior según el Plan de Acción.',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia536 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity42,
              'year' =>4,
              'value' => 1,
              'description' => 'Esta meta fue alcanzada en el año 2017, según el Plan de Acción.',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia537 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity46,
              'year' =>4,
              'value' => 2,
              'description' => 'Se contrató los servicios de 01 (un) técnico con la finalidad de dar asistencia y la optimización a los equipos de cómputo y la red local de la Corporación.
            
            Se contrataron 2 (dos) profesionales en sistemas para dar la optimización y soporte a los sistemas de información de la corporación, como también a las políticas nacionales en el sector de las TIC',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia159 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity47,
              'year' =>4,
              'value' => 13,
              'description' => 'Para controlar el trafico de especimenes de flora y fauna silvestre se realizaron trece (13) puestos de control en los siguientes municipios de la Jurisdiccion de Carsucre: 
            
            Marzo ( San Onofre : 1 puesto de control en Conjunto la infanteria y 1 puesto de control en conjunto con el ICA); 
            Abril ( Sincelejo en el mercado publico y terminal de transporte); 
            Mayo (Sincelejo en el Cerrito de la Palma) ; 
            Junio ( Un puesto de control en San Onofre en Conjunto con la infanteria marina y el ICA  y un puesto de control en Sampues ).
            Julio ( Un puesto de Control en Sampues)
            Agosto ( Un puesto de Control en Sampues, uno en San Onofre y El Roble)
            Septiembre: ( Un puesto de control en Sampues y otro en San Onofre)
            Octubre: ( Un puesto de cntrol en Sincelejo)
            
            La oficina de control y vigilancia dando cumplimiento a la atención de quejas y oficios  dio como resultado una atención de 74 quejas y 211 oficios interpuestos por ciudadanos.  Se realizaron seguimiento a 26 expedientes de aprovechamiento forestal, permitiendo una captación de recursos por cobro de tasa de aprovechamiento forestal correspondiente a $68.356.405 y cobro por seguimiento y evaluación por valor de  $56.842.552 para un total de  $125.198.957
            En total la oficina de control y vigilancia remitió a subdirección de gestión ambiental  272 informes de visita con sus respectivos conceptos técnicos.
            
            
            ',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia160 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity48,
              'year' =>4,
              'value' => 1,
              'description' => 'Se viene realizando las actividades de valoración y atención  de especímenes de fauna incautada o decomisada, la cual se relaciona a continuación:  183 Aves , 480 reptiles ,  119 mamíferos, especies marino costeras :  18 equinodermos, 75 moluscos.',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia161 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity49,
              'year' =>4,
              'value' => 269,
              'description' => 'Durante el la vigencia 2019 se realizaron 269 evaluaciones y seguimientos a los instrumentos: Autorizaciones, Licencias, Infracciones y Permisos Ambientales.',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia162 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity50,
              'year' =>4,
              'value' => 51,
              'description' => 'Se realizaron 51 actividades ( expedientes, oficios, memorandos, quejas) relacionadas a casos de infraccion ya tipificados como actividades de mineria informal a pequeña escala y, a casos notificados por la misma autoridad minera o por personas naturales a esta Corporacion. Dentro de las cuales se destacan las siguientes actividades:
            - Visitas de inspección técnica adelantadas en función a las extracciones artesanales adelantadas sin título minero ni licencia ambiental en el Sector La Oscura, municipio de Toluviejo y el Arroyo El Cedro, corregimiento El Piñal jurisdicción del municipio de Los Palmitos.
            - Visitas de seguimiento ambiental adelantadas en los títulos mineros: FHK-112 y GC9-083, con licencia ambiental, donde se desarrollan extracciones artesanales ejercidas por terceros sin autorización del titular.
            ',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia163 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity52,
              'year' =>4,
              'value' => 0.32,
              'description' => 'Se realizaron visitas de seguimiento a la implementación de los Planes de Gestión Integral de Residuos Sólidos – (PGIRS), a los siguientes Municipios: Since, Galeras, San Pedro, Buenavista, Betulia y el Roble.',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia164 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity53,
              'year' =>4,
              'value' => 0.45,
              'description' => 'Se viene trabajando en la realización de la estructuración del plan de gestión integral de RESPEL, recopilación de información, diagnostico actual de la jurisdicción y cumplimiento de las actividades contempladas en el proyecto; es importante a aclarar que aunque el proyecto es vigencia 2019 este se empezó a ejecutar a partir del 30 de julio de 2019. ',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia165 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity54,
              'year' =>4,
              'value' => 1,
              'description' => 'Se realizaron 76 oficios de respuesta a los usuarios del Registro de Generadores y Desechos Peligrosos
            Se realizaron actividades de control y seguimiento ambiental, con el fin de verificar la informacion suministrada oir los usuarios inscritos en la plataforma del Registro de Generadores de Residuos o Desechos Peligrosos identificando un total por estado: Abierto ( 115 ) ; Cerrado ( 32 ) ; transmitido ( 124 ) ; No cargaron ( 146 )
            - Se realizaron 95 visitas de inspeccion ocular y tecnica a entidades generadoras de residuos peligrosos en atencion a los diferentes oficios y expedientes
            - Se realizaron 25 liquidaciones en atencion a los diferentes oficios y expedientes
            - Se realizaron 14 inscripciones de gestores de aceites de cocina usados y se dio respuesta a una solicitud de MinAmbiente
            - Se realizaron 3 evaluaciones y conceptos, y una visita por derrame de hidrocarburos atencion a los diferentes oficios y expedientes.
            - Se realizaron tres inscripciones en la plataforma Inventario Nacional de PCB, para tener un total de 34 usuarios inscritos con 5.815 equipos inventariados totales dentro de la jurisdiccion de CARSUCRE.
            - Se realizaron actividades de control y seguimiento ambiental, con el fin de verificar la informacion suministrada por los usuarios inscritos en la plataforma del Registro Unico Ambiental Manufacturero ( RUA), identificando un total de 13 establecimientos obteniendo por estado : Transmitidos (9) ; Cargados (9).
            - Se realizaron 11 capacitaciones a diversas entidades y comunidades.
            - Se contrató los servicios de apoyo logístico de la FUNDACION PARA EL DESARROLLO ECOLOGICO Y SOCIAL DE COLOMBIA – FUNDESCOL para llevar a cabo la campaña de recolección y manejo integral de residuos peligrosos, sensibilización a los generadores de Respel e implementación de planes posconsumo dentro del marco del proyecto Administración, Control y Vigilancia de los Recursos Naturales Renovables en Jurisdicción Carsucre”',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia166 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity56,
              'year' =>4,
              'value' => 6,
              'description' => 'Se establecieron las siguientes alianzas. 
            Alianza 1:  UNISUCRE/CARSUCRE: a) con el laboratorio de suelos cuyo objeto fue adelantar acciones  conjuntas en torno a la preparacion, implementacion de un espacio Educativo Ambiental centrado al reconocimiento de los servicios ecosistemicos que presta el suelo, asi como la profundizacion del conocimiento de los conflictos que este presenta en el area de jurisdiccion de Carsucre. Como producto de esta alianza se obtiene un documento memoria que da cuenta de los analisis hechos por el delegado de dicha universidad y del trabajo desempeñado como moderador de ese espacio formativo. 
            Alianza 2: UNISUCRE/CARSUCRE: Con el programa de biologia, cuyo objeto fue la participacion de un grupo de estudiantes tesista en el proceso de organizacion, preparacion e implementacion academica y logistica en el Congreso Nacional 2018.
            Alianza 3. Se formalizo un acuerdo interinstitucional con la Institucion Educativa San Antonio Club de Leones, con el proposito de garantizar la participacion de esta entidad en el proceso de construccion de relatorias y revision de documento de memoria del Congreso de Biodiversidad y servicios ecosistemicos; una mirada desde la gestiòn y la Educacion Ambiental 2018. 
            Alianza 4.Con el SENA se establecio un acuerdo para estimular los avances y resultados del procesos formativo de 20 aprendices del programa Tecnico Ambiental, por medio de su participacion durante el desarrollo de todos los ejes tematicos contenidos en el Congreso Nacional 2018, asi mismo esta entidad participo en la relatoria del mencionado envento y documento memoria.
            Alianza 5. Con la empresa privada ADESA S.A. se establecion un acuerdo que permitiera utilizar la informacion tecnica que posee como insumo formativo para el desarrollo del modulo tematico GESTION INTEGRAL DEL RECURSO HIDRICO. 
            Alianza 6. Articulacion con CECAR para el uso de la informacion producto de investigacion como material formativo para el desarrollo del modulo tematico del recurso Hidrico.',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia167 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity57,
              'year' =>4,
              'value' => 8,
              'description' => '
            
            Se han realizado los siguientes procesos de formación y Educación Ambiental. 
            1. Conformación de la Red de Proyectos Ambientales Escolares - PRAE. 
            2. Procesos con Universidades: 
            2.1. CECAR: a) Cine Foro : La Sed del Mundo. b) Green Day: Reconocimiento del micro bosque para la Valoración de Bienes y Servicios Ecosistémicos. c) Conversatorio: VIBSE como estrategia de Educación Ambiental.
            2.2. UNISUCRE:  a) Día mundial de las Abejas; Conferencia: Educación Ambiental vs Activismo Ambiental. b)  I Jornada Ambiental. Conferencia: Servicios Ecosistémicos y Sostenibilidad Ambiental.
            2.3. CORPOSUCRE: a) Panel en“El derecho al agua y una nueva ciudadanía protectora del recurso. b) Gestión para implementacion del proyecto Ambiental Universitario.  
            3. Realización de mesas de trabajo con empresas privadas(Grupo Argos, fundación Argos, Compas S.A. SED. Gobernación)  para socializar propuesta de articulación publico privada, para la educación ambiental y la Incorporación de las Empresas y Negocios, al Sistema Departamental de Educación Ambiental.                            
            4.  Se establecieron los nodos municipales para la formalización de la red de Jóvenes de Ambiente.
            5. Se realizaron convenios con los municipios de Buenavista y Since para mejorar la gestión ambiental
            6. Se realizo convenio con USAID - Riqueza Natural para promover la conservación y el desarrollo económico sostenible en el caribe colombiano.                                              7. CIDEA SUCRE: Actualización de redes oficiales del CIDEA Sucre para hacer visible todo los movimientos y gestiones de los miembros CIDEA.       
            8. Realizacion del encuentro departamental de Cideas Municipales. 
            
            
            
            ',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia168 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity58,
              'year' =>4,
              'value' => 5,
              'description' => '1. Selección de 5 Instituciones Educativas de Sincelejo y Morroa para la publicacion internacional de un proyecto de investigacion en el Libro Gestión del conocimiento: Perspectiva  Multidisciplinaria como reconocimiento a la formulación de los Proyectos Ambientales Escolares. Volumen 14. 2019.
            2. Reconocimiento al Programa de ciencias Naturales y Educacion Ambiental por desarrollo del proyecto  Valoracion de bienes y servicios ecosistemicos del micro bosque de la corporacion Universitaria del Caribe CECAR.                                              
            3. Publicacion internacional del estudio “Valoracion de bienes y servicios ecosistemicos del micro bosque de la    corporacion Universitaria del Caribe CECAR” en el libro Gestion del Conocimiento: Perspectiva multidisciplinaria Volumen 15. 2019.     
            4. CAMPAMENTO AMBIENTAL: Seleccion de Instituciones educativas que mostraron el mayor interes en tematicas de agua, recurso hidrico y Biodiversidad. 
            5. Entrega de material bibliografico a las institutuciones Educativas, de educaion superior, corporaciones autonomas y demas entidades invitadas al Congreso Naciones de Biodiversidad y servicios ecosistemicos.',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia169 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity59,
              'year' =>4,
              'value' => 2,
              'description' => '1. Gestión ante el comité de la Red One Health Colombia para el trabajo Regional y participación en el 2do. Simposio Internacional One Health Colombia OHCIS2019, que se realizo en la ciudad de Montería en el Centro de Convenciones de Córdoba, 2019. Con la participación de las líderes mundiales del concepto One Health y One Welfare(una Salud y un Bienestar), como también varios conferencistas nacionales e internacionales reconocidos por sus investigaciones en los campos de la salud y el bienestar humano animal y medio ambiental. 
                       
            2. Con la Fundacion Botanica y Zoologica de Barranquilla se inicia la fase de trabjo de campo para indagar sobre los avistamiento del Paujil de pico azul (C. alberti) en los Montes de María a través de un monitoreo con cámaras, con la idea de establecer un plan para su conservación en esta región. 
            
            El principal objetivo del proceso de indagación es desarrollar una evaluación de las percepciones y representaciones sociales sobre la presencia del Paujil de pico azul (Crax alberti) en los Montes de María. ',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia170 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity60,
              'year' =>4,
              'value' => 10,
              'description' => 'En la implementación y/o mantenimiento del Plan estratégico de Comunicación, Información y Participación, el objetivo es es lograr la organización eficiente y eficaz consecuente con los retos exigidos por la corporación y que beneficie al público interno y externo de la misma. Como son los siguientes:
            1. Manejo de Redes Sociales ( boletines de prensa, administracion de pagina de facebook, twitter, instagram y pagina web corporativa).
            2. Produccion de piezas publicitarias (Diseño y producción de imágenes y piezas publicitarias para redes sociales, Tv, impresos, prensa escrita y demas)
            3. Fotografias y actualizacion del Banco de Imagenes (Registro audiovisual en las diferentes actividades donde ha participado la corporación )
            4. Convocatoria Y Organización De Ruedas De Prensa. 
            5. Creacion del directorio de periodistas locales
            6. Medios Radiales (Pautas radiales en :Radio Majagual, Radio Caracolí,Radio Chacurí,RCN Radio,Radio Piragua)
            7. Medios Impresos (Publicación de articulos, circulares, comunicados de prensa, y notas de acuerdo a los requerimientos de la institución y sus actividades, en medios de circulación departamental)
            
            CAPACITACIONES:
            8. Capacitaciones a 303 jovenes en tematicas de cuidadados a Medio Ambiente, proyectos de Educacion Ambiental, Calidad y Vida, Uso Eficiente y Racional del Agua, Residuos Peligrosos y Legislacion Ambiental.
            9. Capacitaciones a 371 madres de familia, comunidades, funcionarios y demas, en tematicas de la importancia de los arboles, concientizacion, sensibilizacion y cuidados del medio ambiente, cambio climatico y residuos peligrosos.
            10. Encuentro pedagogico con 24  indigenas en la tematica de Cambio Climatico.
            ',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia171 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity61,
              'year' =>4,
              'value' => 4,
              'description' => 'Estudios Basicos de Riesgo, para Apoyar la Gestión del Riesgo de Inundación, Remoción en Masa y Erosión en los Municipios de Coloso, Chalan, San Pedro y Buenavista, se surtieron las etapas de Aprestamiento, Diagnostico y  Formulacion todas realizadas en un 100%.
            Se realizaron 8 talleres: 4 Comunitarios y 4 instItucionales
            Tres trabajos de Campo para identificar los eventos de  Inundaciones,  movimientos en masa y erosion, y se realizo el muestreo de suelo.
            Se realizaron los mapas de Amenaza por municipio, se llevo a cabo la validación de Informacion con las comunidades y se realizaron los respectivos ajustes dando por terminado el proyecto y realizando la socializacion final de resultados con los actores claves de cada municipio.
            ',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia172 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity62,
              'year' =>4,
              'value' => 5,
              'description' => 'Se viene socializando la zonificacion ambiental y las medidas adaptadas de cambio climatico en la reconversion de uso de suelo a silvopastoriles y agroforestal a los siguientes actores:
            
            Entes Territoriales: Toluviejo, Tolu, San Onofre y La Gobernacion
            Fedearroz
            Mesa de Cambio Climatico de Sucre
            PNUD
            FAO
            Fondo Accion
            MADS
            
            ',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia173 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity63,
              'year' =>4,
              'value' => 3,
              'description' => 'Actualmente la formulacion del Plan Regional de Adaptacion al Cambio Climático - PRACC  presenta avances en las siguientes etapas :
            
            Alistamiento en un 100% : • Recopilación de información secundaria – Base documental 
            • Definición del objetivo y alcance del plan
            • Priorización de actores.
            • Plan de trabajo
            Perfil Territorial : 45 % : • Caracterización integral del territorio.
            • Caracterización del clima y variabilidad climática del territorio.
            • Avance en el análisis los efectos del cambio climático 
            • Avance en la identificación de las condiciones del territorio (ecológicas, socioeconómica, cultural y política) que determinan una mayor vulnerabilidad y riesgo a verse afectado negativamente por el cambio climático.
            • Inventario de gases efecto invernadero por fuente en su territorio. 
            • Establecimiento de las principales fuentes de emisión de GEI que deban gestionarse.
            Análisis Estratégico – planteamiento de medidas un avance de 30% :  
            • Avance en la identificación de las medidas y acciones. 
            • Los objetivos y resultados esperados, el alcance y la justificación de las medidas propuestas
            Plan de Acción – priorización de medidas en 20%: Definición de criterios para la priorización de medidas 
            
            Convenio de Asociacion No. 001 de 2019 : Se instalor 55 estufas ecologicas como medida de mitigacion del cambio climatico en la zona rural del corregimiento Ceja del Mango del Municipio de Sampues articulada con jornadas de socializacion  educacion ambiental dirigidas a las familias campesinas beneficiarias del proyecto en el fortalecimiento el desarrollo de una cultura ambiental dirigida a la protección, uso y manejo sostenible de los recursos naturales y dar a conocer el uso eficiente de las estufas ecológicas.
            Convenio de Asociacion No. 002 de 2019 : Se instalo 40 estufas ecologicas como medida de mitigacion del cambio climatico en la zona rural de la Vereda San Francisco del Municipio de San Pedro articulada con jornadas de socializacion  educacion ambiental dirigidas a las familias campesinas beneficiarias del proyecto en el fortalecimiento el desarrollo de una cultura ambiental dirigida a la protección, uso y manejo sostenible de los recursos naturales y dar a conocer el uso eficiente de las estufas ecológicas.
            Igualmente como medidas de mitigación del cambio climático, en zonas indígenas de los Municipios de San Antonio de Palmito y Sampués:
            
            Se firmó convenio con la Fundación para la Economía y el Desarrollo Social – FEDES,  para La recuperación de los cuerpos de agua y aumento de la capacidad de almacenamiento a 11 jagüeyes en comunidades indígena de los Municipios de San Antonio de Palmitos (7) y Sampués (4).  Aumentando su capacidad de almacenamiento entre 15.000 y 17.000 metros cúbicos de aguas lluvias, distribuidos así:
            San Antonio de Palmito (entre 10.000 y 11.000 metros cúbicos)
            Y Sampués (entre 5.000 y 6.000 metros cúbicos).
            
            Convenio de Asociacion No. 003 de 2019: Recuperacion de los cuerpos de agua  y su capacidad de almacenamiento en comunidades indigenas para reducir los efectos del cambio climatico en zona rural del Municipio de San Antonio de Palmitos.',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia174 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity64,
              'year' =>4,
              'value' => 3,
              'description' => 'Convenio de Asociación No. 004 de 2019, en el marco del proyecto: Apoyo e Implementación de la Producción Limpia” con el desarrollo de las siguientes actividades:
            - Se implementó el escenarios demostrativo denominado “Implementacion de Escenario Demostrativo Para el Manejo de una Estacion de Trasferencia, Aplicando la Biotecnologia de la Biofermentacion”: Se realizó de manera diaria la limpieza y observación del escenario demostrativo, garantizando el funcionamiento óptimo de este y permitiendo demostrar cómo reducir los impactos generados por el aprovechamiento, transformación y uso de los residuos sólidos como fuente de alimentación de especies menores, además sirvió para que las personas visitantes apreciaran las actividades que se deben realizar para la preservación y cuidado del ambiente a través de este tipo de técnicas. 
            - Suministro de Animales : Se establecieron dos hatos distribuidos de la siguiente forma: cerdas reproductoras en un lote de 30 animales, dos cerdos reproductores ubicados el área de reproducción, y 21 ovinos en el corral para ovinos; todos estos se encuentran en las instalaciones del vivero Mata de Caña, y fueron agrupados de acuerdo a sus pesos y condiciones.
            - Alimentacion: El alimento ya transformado fue suministrado a los animales a través de  comederos garantizando la disponibilidad constante y adecuada de la raciones alimenticias de acuerdo a los requerimientos de cada animal, a sus condiciones y estado.
            - Capacitacion y Logistica: Se han realizado a la fecha un total de 10 capacitaciones de forma teórico - práctica; dirigida a productores estudiantes, empresarios y comunidad en general, en las que se les explicó a los asistentes como debe ser el manejo de los residuos y/o posibles contaminantes que se generan de manera constante en viviendas, empresas, e instituciones, etc.   Para dar a conocer su tratamiento, transformación y aprovechamiento, con el objetivo de reducir los impactos ambientales negativos ocasionados por su inadecuada disposición',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia175 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity65,
              'year' =>4,
              'value' => 0.05,
              'description' => 'Finalizadas las etapas de aprestamiento y diagnóstico en un 100%, durante la vigencia 2018.
            
            Durante la vigencia 2019, a través de Concurso de Merito, se firmó contrato No. 0115 de 29 de mayo de 2019, con una duración de siete (7) meses, para desarrollar la Fase de Formulación del Plan de Ordenación y Manejo Ambiental de la Cuenca Hidrográfica Directos Caribe - Golfo de Morrosquillo, Sucre.',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia176 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity71,
              'year' =>4,
              'value' => 1,
              'description' => 'Durante el primer semestre se realizaron las siguientes actividades:
            1.Monitoreo de los ecosistemas de arrecifes de corales
            2.Seguimiento a las area de manglar en restauracion en Rincon del Mar en coordinacion con la FAO.
            3. Seguimiento a los Arrecifes Artificiales del programa Diaspora en el Golfo de Morrosquillo.
            
            Durante el segundo semestre se realizaron las siguientes actividades:
            
            ARRECIFES CORALINOS
            - Marcaje, limpieza y medición de fragmentos de Acropora cervicornis en guarderías de coral, Rincón del Mar - San Onofre
            - muestreo en bajo coralino Bajo Pajarito, Bajo Palomo, Bajo Esperanza, Isla Cabruna 
            - monitoreo de especies invasora; morfometría, contenido estomacal y estado reproductivo de Pterois volitans en Bajo Pajarito.
            
            TORTUGAS MARINAS
            - Monitoreo comunitario de sitios de anidación de tortuga carey Eretmochelys imbricata en Rincón del Mar, San Onofre. Socialización del proyecto 
            - Taller para la fabricación de encierros de nidos 
            - Taller de medición y marcaje de tortugas marinas 
            - Exhumación nido de carey 
            - Limpieza de playas en áreas de anidación de tortuga carey 
            - Charla sobre conservación de tortugas marinas a estudiantes de la Institución Educativa de Rincón del Mar 
            - Sensibilización sobre tortugas marinas 
            - Charla sobre toma de información nacional estandarizada para el monitoreo y seguimiento de tortugas marinas en Colombia 
            - sensibilización de tortugas marinas 
            
            MANGLARES
            - Seguimiento plántulas de manglar arroyo Pechilin
            - acompañamiento a muestreo de calidad de aguas en el Manglar de las Garzas 
            ',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia177 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity72,
              'year' =>4,
              'value' => 3,
              'description' => 'Control y Vigilancia:
            *Control y vigilancia por Tala y aterramiento en zona de manglar en Rincon del Mar y via Tolu - Coveñas
            * Operativo de puestos de control de trafico de fauna silvestre y sus derivados en Cañito Municipio de San Onofre
            * Control y Vigilancia por Redes Tortugueras en el sector de Boquerón (Decomiso de una red de 180 m aproximadamente) en el Municipio de San Onofre.
            * Inspección técnica y ocular por tala de arboles sin permiso de la autoridad ambiental ocasionada por la obra de la restauración de la Av Primera de Santiago de Tolú. 
            
            Quejas:
            * Atención a queja por deposito de material de cantera triturado en zona de bajamar en Rincon del Mar
            * Visita de inspección ocular y técnica por queja a causa de mortandad de peces por causa desconocida en Santiago de Tolu.
            * Visita de inspección técnica y ocular a causa de la queja por tala de arboles en el sector de la playa de Rincón del Mar .
            * Atención a queja verbal de la comunidad por la presencia de un mapache en la Zona Hotelera de la Boca de la Ciénaga en el Municipio de Coveñas
            
            Expedientes:
            * Inspección ocular y técnica y elaboración de informe en el Municipio de Santiago de Tolu (Exp. 4543 del 24 de junio del 2008). 
            * Inspección ocular y técnica y elaboración de informe en el Municipio de Coveñas (Exp. 4193 del 10 de julio del 2007).
            * Visita del expediente 134 antigua Caracuchas via Tolu - Coveñas.
            
            Oficios:
            * Acompañamiento a procuraduría por concepto ambiental en zona de bajamar via Tolu - Coveñas
            * Reunión con funcionarios de la FAO para tratar temas ambientales relacionados con el aterramiento de las zonas de manglar en Rincón del Mar 
            * Asistencia al Primer comité de las playas del año 2019 realizado en el Centro Lúdico de Guayabal de Coveñas. Respuesta oficio # 3227 de 31 de mayo de 2019.
            
            Se contrato los servicios de FUNDACION LATINOAMERICANA PARA EL DESARROLLO ECONOMICO - FUNLADEC para la formulación y la implementación de programas de conservación necesarios para recuperar las poblaciones de tortuga carey durante época de anidación en las playas de rincón del mar mediante monitoreos de anidación, en el marco  del proyecto “Manejo Integrado de la Unidad Ambiental Costera Estuarina Río Sinú-Golfo de Morrosquillo en la Jurisdicción de Carsucre”',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia178 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
              'activity_id' => $idactivity76,
              'year' =>4,
              'value' => 1,
              'description' => 'Proyecto de adición a través de la Resolución 1341 del 5 de septiembre de 2019 del Ministerio de Ambiente y Desarrollo Sostenible. Mediante concurso de mérito se firmó contrató No 143 de 18 de diciembre de 2019 por ende no presenta avance físico',
              'date_report' => '2019-12-31',
              'rezago' => false,
              ]);
              $idevidencia179 = DB::getPdo()->lastInsertId();
           
           DB::table('financing_sources')->insert([
          'father_id' => 11,
          'code' => '1.1.1.1.1.1.1.1',
          'name' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
          'description' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 6,
          ]);
          $idFuente1 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 42,
          'code' => '1.1.2.2.1.1.1.1',
          'name' => 'Tasa retributiva (vigencia actual)',
          'description' => 'Tasa retributiva (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 6,
          ]);
          $idFuente32 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 45,
          'code' => '1.1.2.2.1.1.2.1',
          'name' => 'Tasa por el uso del agua (vigencia actual)',
          'description' => 'Tasa por el uso del agua (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 6,
          ]);
          $idFuente33 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 67,
          'code' => '1.1.2.2.2.4.1',
          'name' => 'Venta de productos forestales (vigencia actual)',
          'description' => 'Venta de productos forestales (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 6,
          ]);
          $idFuente2 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 70,
          'code' => '1.1.2.2.2.5.1',
          'name' => 'Venta de Servicios de Laboratorio e Información (vigencia actual)',
          'description' => 'Venta de Servicios de Laboratorio e Información (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 6,
          ]);
          $idFuente3 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 79,
          'code' => '1.1.2.2.2.8.1',
          'name' => 'Otros servicios (vigencia actual)',
          'description' => 'Otros servicios (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 6,
          ]);
          $idFuente21 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 27,
          'code' => '1.1.2.1.1.1.1.1',
          'name' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia actual)',
          'description' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 6,
          ]);
          $idFuente6 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 208,
          'code' => '1.2.5.1.3',
          'name' => 'Otros Convenios',
          'description' => 'Otros Convenios',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 6,
          ]);
          $idFuente8 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 42,
          'code' => '1.1.2.2.1.1.1.1',
          'name' => 'Tasa retributiva (vigencia actual)',
          'description' => 'Tasa retributiva (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 6,
          ]);
          $idFuente11 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 45,
          'code' => '1.1.2.2.1.1.2.1',
          'name' => 'Tasa por el uso del agua (vigencia actual)',
          'description' => 'Tasa por el uso del agua (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 6,
          ]);
          $idFuente14 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 48,
          'code' => '1.1.2.2.1.1.3.1',
          'name' => 'Tasa de aprovechamiento Forestal (vigencia actual)',
          'description' => 'Tasa de aprovechamiento Forestal (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 6,
          ]);
          $idFuente16 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 61,
          'code' => '1.1.2.2.2.2.1',
          'name' => 'Seguimiento a licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
          'description' => 'Seguimiento a licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 6,
          ]);
          $idFuente12 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 70,
          'code' => '1.1.2.2.2.5.1',
          'name' => 'Venta de Servicios de Laboratorio e Información (vigencia actual)',
          'description' => 'Venta de Servicios de Laboratorio e Información (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 6,
          ]);
          $idFuente13 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 64,
          'code' => '1.1.2.2.2.3.1',
          'name' => 'Salvoconductos (vigencia actual)',
          'description' => 'Salvoconductos (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 6,
          ]);
          $idFuente15 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 58,
          'code' => '1.1.2.2.2.1.1',
          'name' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
          'description' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 6,
          ]);
          $idFuente17 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 61,
          'code' => '1.1.2.2.2.2.1',
          'name' => 'Seguimiento a licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
          'description' => 'Seguimiento a licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 6,
          ]);
          $idFuente18 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 61,
          'code' => '1.1.2.2.2.2.1',
          'name' => 'Seguimiento a licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
          'description' => 'Seguimiento a licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 6,
          ]);
          $idFuente19 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 79,
          'code' => '1.1.2.2.2.8.1',
          'name' => 'Otros servicios (vigencia actual)',
          'description' => 'Otros servicios (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 6,
          ]);
          $idFuente20 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 1,
          'code' => '1.3',
          'name' => 'Otros (Imcumplimiento de contratos, consignación sin recibo)',
          'description' => 'Otros (Imcumplimiento de contratos, consignación sin recibo)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 6,
          ]);
          $idFuente22 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 84,
          'code' => '1.1.2.3.1.1.1',
          'name' => 'Multas ambientales (vigencia actual)',
          'description' => 'Multas ambientales (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 6,
          ]);
          $idFuente9 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 145,
          'code' => '1.2.2.6',
          'name' => 'Rendimientos financieros',
          'description' => 'Rendimientos financieros',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 6,
          ]);
          $idFuente23 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 145,
          'code' => '1.2.2.7',
          'name' => 'Excedentes financieros',
          'description' => 'Excedentes financieros',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 6,
          ]);
          $idFuente25 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 237,
          'code' => '1.2.6.7',
          'name' => 'Recuperación de Cartera Sobretasa del Predial',
          'description' => 'Recuperación de Cartera Sobretasa del Predial',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 6,
          ]);
          $idFuente27 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 241,
          'code' => '1.2.6.3.1',
          'name' => 'Recuperación de carteraTasa retributiva',
          'description' => 'Recuperación de carteraTasa retributiva',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 6,
          ]);
          $idFuente28 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 237,
          'code' => '1.2.6.8',
          'name' => 'Recuperación de Cartera Programa Aguas Subterráneas',
          'description' => 'Recuperación de Cartera Programa Aguas Subterráneas',
          'type_id' => 22,
          'final_level' => true ,
          'group_id' => 6,
          ]);
          $idFuente29 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 237,
          'code' => '1.2.6.4',
          'name' => 'Recuperación de cartera Multas, sanciones e intereses de mora',
          'description' => 'Recuperación de cartera Multas, sanciones e intereses de mora',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 6,
          ]);
          $idFuente30 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 250,
          'code' => '1.2.7.4',
          'name' => 'Otros recursos del balance',
          'description' => 'Otros recursos del balance',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 6,
          ]);
          $idFuente31 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 225,
          'code' => '1.2.5.12.4',
          'name' => 'Donaciones',
          'description' => 'Donaciones',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 6,
          ]);
          $idFuente35 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 119,
          'code' => '1.1.2.5.1.1.1.4',
          'name' => 'Aportes de la Nación Funcionamiento',
          'description' => 'Aportes de la Nación Funcionamiento',
          'type_id' => 23,
          'final_level' => true,
          'group_id' => 6,
          ]);
          $idFuente36 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 125,
          'code' => '1.1.2.5.1.2.1.4',
          'name' => 'Aportes del FCA para Gastos de personal',
          'description' => 'Aportes del FCA para Gastos de personal',
          'type_id' => 25,
          'final_level' => true,
          'group_id' => 6,
          ]);
          $idFuente37 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 117,
          'code' => '1.1.2.5.1.3',
          'name' => 'Aportes inversión Fondo Nacional Ambiental - FONAM',
          'description' => 'Aportes inversión Fondo Nacional Ambiental - FONAM',
          'type_id' => 23,
          'final_level' => true,
          'group_id' => 6,
          ]);
          $idFuente39 = DB::getPdo()->lastInsertId();
           DB::table('financing_sources')->insert([
          'father_id' => 107,
          'code' => '1.1.2.4.2.2.1',
          'name' => 'Alquiler de Maquinaria y Equipos (vigencia actual)',
          'description' => 'Alquiler de Maquinaria y Equipos (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 6,
          ]);
          $idFuente4 = DB::getPdo()->lastInsertId();
           
          DB::table('financing_sources')->insert([
            'father_id' => 124,
            'code' => '1.1.2.5.1.2.2',
            'name' => 'Aportes inversión Fondo de Compensación Ambiental -FCA',
            'description' => 'Aportes inversión Fondo de Compensación Ambiental -FCA',
            'type_id' => 25,
            'final_level' => true,
            'group_id' => 23,
            ]);
            $idFuente38 = DB::getPdo()->lastInsertId();
                     
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente1,
          'value' => 2956552060,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 2956552060,
          'year' => 1,
          ]);
          $idPlan1 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente2,
          'value' => 12000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 90,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 1200000,
          'investment' => 10800000,
          'year' => 1,
          ]);
          $idPlan2 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente3,
          'value' => 34000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 90,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 3400000,
          'investment' => 30600000,
          'year' => 1,
          ]);
          $idPlan3 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente6,
          'value' => 87262847,
          'functioning_percentage' => 10,
          'debt_service_percentage' => 0,
          'fund_percentage' => 20,
          'investment_percentage' => 70,
          'functioning' => 8726284.7,
          'debt_service' => 0,
          'fund' => 17452569.4,
          'investment' => 61083992.9,
          'year' => 1,
          ]);
          $idPlan4 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente8,
          'value' => 399986720,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 399986720,
          'year' => 1,
          ]);
          $idPlan5 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente9,
          'value' => 77114217,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 69402795.3,
          'debt_service' => 0,
          'fund' => 7711421.7,
          'investment' => 0,
          'year' => 1,
          ]);
          $idPlan6 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente11,
          'value' => 115000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 90,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 11500000,
          'investment' => 103500000,
          'year' => 1,
          ]);
          $idPlan7 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente12,
          'value' => 60000000,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 54000000,
          'debt_service' => 0,
          'fund' => 6000000,
          'investment' => 0,
          'year' => 1,
          ]);
          $idPlan8 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente13,
          'value' => 20000000,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 18000000,
          'debt_service' => 0,
          'fund' => 2000000,
          'investment' => 0,
          'year' => 1,
          ]);
          $idPlan9 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente14,
          'value' => 100000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 90,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 10000000,
          'investment' => 90000000,
          'year' => 1,
          ]);
          $idPlan10 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente15,
          'value' => 12000000,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 10800000,
          'debt_service' => 0,
          'fund' => 1200000,
          'investment' => 0,
          'year' => 1,
          ]);
          $idPlan11 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente16,
          'value' => 164235824,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 90,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 16423582.4,
          'investment' => 147812241.6,
          'year' => 1,
          ]);
          $idPlan12 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente17,
          'value' => 249357480,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 224421732,
          'debt_service' => 0,
          'fund' => 24935748,
          'investment' => 0,
          'year' => 1,
          ]);
          $idPlan13 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente18,
          'value' => 10000000,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 9000000,
          'debt_service' => 0,
          'fund' => 1000000,
          'investment' => 0,
          'year' => 1,
          ]);
          $idPlan14 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente19,
          'value' => 8000000,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 7200000,
          'debt_service' => 0,
          'fund' => 800000,
          'investment' => 0,
          'year' => 1,
          ]);
          $idPlan15 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente20,
          'value' => 0,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 1,
          ]);
          $idPlan16 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente22,
          'value' => 59639337,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 53675403.3,
          'debt_service' => 0,
          'fund' => 5963933.7,
          'investment' => 0,
          'year' => 1,
          ]);
          $idPlan17 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente23,
          'value' => 150000000,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 150000000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 1,
          ]);
          $idPlan18 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente27,
          'value' => 450344283,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 450344283,
          'year' => 1,
          ]);
          $idPlan19 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente28,
          'value' => 300000000,
          'functioning_percentage' => 10,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 90,
          'functioning' => 30000000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 270000000,
          'year' => 1,
          ]);
          $idPlan20 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente29,
          'value' => 126634468,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 126634468,
          'year' => 1,
          ]);
          $idPlan21 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente30,
          'value' => 236000000,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 10,
          'functioning' => 212400000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 23600000,
          'year' => 1,
          ]);
          $idPlan22 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente31,
          'value' => 1128010569,
          'functioning_percentage' => 37.4215,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0.7995,
          'investment_percentage' => 61.779,
          'functioning' => 422118475.078335,
          'debt_service' => 0,
          'fund' => 9018444.499155,
          'investment' => 696873649.42251,
          'year' => 1,
          ]);
          $idPlan23 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente35,
          'value' => 717,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 717,
          'year' => 1,
          ]);
          $idPlan24 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente36,
          'value' => 1993323349,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 1993323349,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 1,
          ]);
          $idPlan25 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente37,
          'value' => 956960706,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 956960706,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 1,
          ]);
          $idPlan26 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente38,
          'value' => 2412633833,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 2412633833,
          'year' => 1,
          ]);
          $idPlan27 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente39,
          'value' => 3694588334,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 3694588334,
          'year' => 1,
          ]);
          $idPlan28 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente1,
          'value' => 3295390356,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 3295390356,
          'year' => 2,
          ]);
          $idPlan29 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente2,
          'value' => 40000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 40000000,
          'year' => 2,
          ]);
          $idPlan30 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente3,
          'value' => 50000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 50000000,
          'year' => 2,
          ]);
          $idPlan31 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente4,
          'value' => 20000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 90,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 2000000,
          'investment' => 18000000,
          'year' => 2,
          ]);
          $idPlan32 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente6,
          'value' => 88837694,
          'functioning_percentage' => 10,
          'debt_service_percentage' => 0,
          'fund_percentage' => 20,
          'investment_percentage' => 70,
          'functioning' => 8883769.4,
          'debt_service' => 0,
          'fund' => 17767538.8,
          'investment' => 62186385.8,
          'year' => 2,
          ]);
          $idPlan33 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente8,
          'value' => 518189662,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 518189662,
          'year' => 2,
          ]);
          $idPlan34 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente9,
          'value' => 102043939,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 91839545.1,
          'debt_service' => 0,
          'fund' => 10204393.9,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan35 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente11,
          'value' => 118450000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 90,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 11845000,
          'investment' => 106605000,
          'year' => 2,
          ]);
          $idPlan36 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente12,
          'value' => 65000000,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 58500000,
          'debt_service' => 0,
          'fund' => 6500000,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan37 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente13,
          'value' => 21673231,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 19505907.9,
          'debt_service' => 0,
          'fund' => 2167323.1,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan38 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente14,
          'value' => 63000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 90,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 6300000,
          'investment' => 56700000,
          'year' => 2,
          ]);
          $idPlan39 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente15,
          'value' => 12600000,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 11340000,
          'debt_service' => 0,
          'fund' => 1260000,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan40 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente16,
          'value' => 78660774,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 90,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 7866077.4,
          'investment' => 70794696.6,
          'year' => 2,
          ]);
          $idPlan41 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente17,
          'value' => 393370647,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 354033582.3,
          'debt_service' => 0,
          'fund' => 39337064.7,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan42 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente18,
          'value' => 10500000,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 9450000,
          'debt_service' => 0,
          'fund' => 1050000,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan43 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente19,
          'value' => 0,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan44 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente20,
          'value' => 0,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan45 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente21,
          'value' => 11182546,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 11182546,
          'year' => 2,
          ]);
          $idPlan46 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente22,
          'value' => 62000000,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 55800000,
          'debt_service' => 0,
          'fund' => 6200000,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan47 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente23,
          'value' => 50000000,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 50000000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan48 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente27,
          'value' => 450000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 450000000,
          'year' => 2,
          ]);
          $idPlan49 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente28,
          'value' => 309000000,
          'functioning_percentage' => 10,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 90,
          'functioning' => 30900000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 278100000,
          'year' => 2,
          ]);
          $idPlan50 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente29,
          'value' => 120000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 120000000,
          'year' => 2,
          ]);
          $idPlan51 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente30,
          'value' => 200000000,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 10,
          'functioning' => 180000000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 20000000,
          'year' => 2,
          ]);
          $idPlan52 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente31,
          'value' => 854516785,
          'functioning_percentage' => 32.5428,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0.684,
          'investment_percentage' => 66.7732,
          'functioning' => 278083688.30898,
          'debt_service' => 0,
          'fund' => 5844894.8094,
          'investment' => 570588201.88162,
          'year' => 2,
          ]);
          $idPlan53 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente35,
          'value' => 500,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 500,
          'year' => 2,
          ]);
          $idPlan54 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente36,
          'value' => 2279284000,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 2279284000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan55 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente37,
          'value' => 303053585,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 303053585,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan56 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente38,
          'value' => 2268744906,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 2268744906,
          'year' => 2,
          ]);
          $idPlan57 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente1,
          'value' => 3460159874,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 3460159874,
          'year' => 3,
          ]);
          $idPlan58 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente2,
          'value' => 30211250,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 90,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 3021125,
          'investment' => 27190125,
          'year' => 3,
          ]);
          $idPlan59 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente3,
          'value' => 52500000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 90,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 5250000,
          'investment' => 47250000,
          'year' => 3,
          ]);
          $idPlan60 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente4,
          'value' => 26000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 90,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 2600000,
          'investment' => 23400000,
          'year' => 3,
          ]);
          $idPlan61 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente6,
          'value' => 93012473,
          'functioning_percentage' => 10,
          'debt_service_percentage' => 0,
          'fund_percentage' => 20,
          'investment_percentage' => 70,
          'functioning' => 9301247.3,
          'debt_service' => 0,
          'fund' => 18602494.6,
          'investment' => 65108731.1,
          'year' => 3,
          ]);
          $idPlan62 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente8,
          'value' => 189602261,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 189602261,
          'year' => 3,
          ]);
          $idPlan63 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente9,
          'value' => 93244322,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 83919889.8,
          'debt_service' => 0,
          'fund' => 9324432.2,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan64 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente11,
          'value' => 124372500,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 90,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 12437250,
          'investment' => 111935250,
          'year' => 3,
          ]);
          $idPlan65 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente12,
          'value' => 58979580,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 53081622,
          'debt_service' => 0,
          'fund' => 5897958,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan66 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente13,
          'value' => 21000000,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 18900000,
          'debt_service' => 0,
          'fund' => 2100000,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan67 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente14,
          'value' => 60498962,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 90,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 6049896.2,
          'investment' => 54449065.8,
          'year' => 3,
          ]);
          $idPlan68 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente15,
          'value' => 13230000,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 11907000,
          'debt_service' => 0,
          'fund' => 1323000,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan69 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente16,
          'value' => 82593813,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 90,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 8259381.3,
          'investment' => 74334431.7,
          'year' => 3,
          ]);
          $idPlan70 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente17,
          'value' => 270136529,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 243122876.1,
          'debt_service' => 0,
          'fund' => 27013652.9,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan71 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente18,
          'value' => 11025000,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 9922500,
          'debt_service' => 0,
          'fund' => 1102500,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan72 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente19,
          'value' => 0,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan73 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente20,
          'value' => 0,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan74 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente21,
          'value' => 8400000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 8400000,
          'year' => 3,
          ]);
          $idPlan75 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente22,
          'value' => 57621473,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 51859325.7,
          'debt_service' => 0,
          'fund' => 5762147.3,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan76 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente23,
          'value' => 50000000,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 50000000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan77 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente25,
          'value' => 50,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 50,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan78 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente27,
          'value' => 270311671,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 90,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 27031167.1,
          'investment' => 243280503.9,
          'year' => 3,
          ]);
          $idPlan79 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente28,
          'value' => 381768660,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 90,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 38176866,
          'investment' => 343591794,
          'year' => 3,
          ]);
          $idPlan80 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente29,
          'value' => 66216606,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 90,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 6621660.6,
          'investment' => 59594945.4,
          'year' => 3,
          ]);
          $idPlan81 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente30,
          'value' => 857091551,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 10,
          'functioning' => 771382395.9,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 85709155.1,
          'year' => 3,
          ]);
          $idPlan82 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente31,
          'value' => 1435664290,
          'functioning_percentage' => 10.8742,
          'debt_service_percentage' => 0,
          'fund_percentage' => 4.494,
          'investment_percentage' => 84.6318,
          'functioning' => 156117006.22318,
          'debt_service' => 0,
          'fund' => 64518753.1926,
          'investment' => 1215028530.58422,
          'year' => 3,
          ]);
          $idPlan83 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente35,
          'value' => 500,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 500,
          'year' => 3,
          ]);
          $idPlan84 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente36,
          'value' => 2258619000,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 2258619000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan85 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente37,
          'value' => 615402278,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 615402278,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan86 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente38,
          'value' => 2300581145,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 2300581145,
          'year' => 3,
          ]);
          $idPlan87 = DB::getPdo()->lastInsertId();
          
          DB::table('implementations')->insert([
            'p_a_i_s_id'=>$idpai1,
            ]);
            $idImplementation1 = DB::getPdo()->lastInsertId();

         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 3274913779,
          'financial_plans_id' => $idPlan1,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo1 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 1075000,
          'financial_plans_id' => $idPlan2,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo2 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 44734264,
          'financial_plans_id' => $idPlan3,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo3 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 96850246,
          'financial_plans_id' => $idPlan4,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo4 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 360031720,
          'financial_plans_id' => $idPlan5,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo5 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 101538963,
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
          'value' => 20957006,
          'financial_plans_id' => $idPlan8,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo8 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 20132736,
          'financial_plans_id' => $idPlan9,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo9 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 50678438,
          'financial_plans_id' => $idPlan10,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo10 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 12252165,
          'financial_plans_id' => $idPlan11,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo11 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 213730791,
          'financial_plans_id' => $idPlan12,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo12 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 173290401,
          'financial_plans_id' => $idPlan13,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo13 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 6757146,
          'financial_plans_id' => $idPlan14,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo14 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 10749110,
          'financial_plans_id' => $idPlan15,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo15 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 0,
          'financial_plans_id' => $idPlan16,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo16 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 52291806,
          'financial_plans_id' => $idPlan17,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo17 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 119112636,
          'financial_plans_id' => $idPlan18,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo18 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 894045750,
          'financial_plans_id' => $idPlan19,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo19 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 180786256,
          'financial_plans_id' => $idPlan20,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo20 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 92922907,
          'financial_plans_id' => $idPlan21,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo21 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 130017327,
          'financial_plans_id' => $idPlan22,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo22 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 1127410569,
          'financial_plans_id' => $idPlan23,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo23 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 0,
          'financial_plans_id' => $idPlan24,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo24 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 1785335106,
          'financial_plans_id' => $idPlan25,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo25 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 956910706,
          'financial_plans_id' => $idPlan26,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo26 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 0,
          'financial_plans_id' => $idPlan27,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo27 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 0,
          'financial_plans_id' => $idPlan28,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo28 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 3765951547,
          'financial_plans_id' => $idPlan29,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo29 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 0,
          'financial_plans_id' => $idPlan30,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo30 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 25675513,
          'financial_plans_id' => $idPlan31,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo31 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 649141,
          'financial_plans_id' => $idPlan32,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo32 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 100595287,
          'financial_plans_id' => $idPlan33,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo33 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 179810548,
          'financial_plans_id' => $idPlan34,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo34 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 137058473,
          'financial_plans_id' => $idPlan35,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo35 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 0,
          'financial_plans_id' => $idPlan36,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo36 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 280083,
          'financial_plans_id' => $idPlan37,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo37 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 23869846,
          'financial_plans_id' => $idPlan38,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo38 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 0,
          'financial_plans_id' => $idPlan39,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo39 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 12764955,
          'financial_plans_id' => $idPlan40,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo40 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 71553681,
          'financial_plans_id' => $idPlan41,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo41 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 513761253,
          'financial_plans_id' => $idPlan42,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo42 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 0,
          'financial_plans_id' => $idPlan43,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo43 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 0,
          'financial_plans_id' => $idPlan44,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo44 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 0,
          'financial_plans_id' => $idPlan45,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo45 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 14999828,
          'financial_plans_id' => $idPlan46,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo46 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 140569,
          'financial_plans_id' => $idPlan47,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo47 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 10066315,
          'financial_plans_id' => $idPlan48,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo48 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 970780697,
          'financial_plans_id' => $idPlan49,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo49 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 576545591,
          'financial_plans_id' => $idPlan50,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo50 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 31026826,
          'financial_plans_id' => $idPlan51,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo51 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 244364112,
          'financial_plans_id' => $idPlan52,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo52 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 853916785,
          'financial_plans_id' => $idPlan53,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo53 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 0,
          'financial_plans_id' => $idPlan54,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo54 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 2226744999,
          'financial_plans_id' => $idPlan55,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo55 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 303053585,
          'financial_plans_id' => $idPlan56,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo56 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 543833955,
          'financial_plans_id' => $idPlan57,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo57 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 3222992883,
          'financial_plans_id' => $idPlan58,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo58 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 0,
          'financial_plans_id' => $idPlan59,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo59 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 70726000,
          'financial_plans_id' => $idPlan60,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo60 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 0,
          'financial_plans_id' => $idPlan61,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo61 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 74743737,
          'financial_plans_id' => $idPlan62,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo62 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 189552261,
          'financial_plans_id' => $idPlan63,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo63 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 26853439,
          'financial_plans_id' => $idPlan64,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo64 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 522497439,
          'financial_plans_id' => $idPlan65,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo65 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 8706377,
          'financial_plans_id' => $idPlan66,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo66 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 16874823,
          'financial_plans_id' => $idPlan67,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo67 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 0,
          'financial_plans_id' => $idPlan68,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo68 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 5058100,
          'financial_plans_id' => $idPlan69,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo69 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 278889676,
          'financial_plans_id' => $idPlan70,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo70 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 405453740,
          'financial_plans_id' => $idPlan71,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo71 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 0,
          'financial_plans_id' => $idPlan72,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo72 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 0,
          'financial_plans_id' => $idPlan73,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo73 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 0,
          'financial_plans_id' => $idPlan74,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo74 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 13267876,
          'financial_plans_id' => $idPlan75,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo75 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 14489552,
          'financial_plans_id' => $idPlan76,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo76 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 19569817,
          'financial_plans_id' => $idPlan77,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo77 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 0,
          'financial_plans_id' => $idPlan78,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo78 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 1291782928,
          'financial_plans_id' => $idPlan79,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo79 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 60659181,
          'financial_plans_id' => $idPlan80,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo80 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 175043995,
          'financial_plans_id' => $idPlan81,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo81 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 122825485,
          'financial_plans_id' => $idPlan82,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo82 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 1435664290,
          'financial_plans_id' => $idPlan83,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo83 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 0,
          'financial_plans_id' => $idPlan84,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo84 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 2234195399,
          'financial_plans_id' => $idPlan85,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo85 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 615401849,
          'financial_plans_id' => $idPlan86,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo86 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 1933493522,
          'financial_plans_id' => $idPlan87,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo87 = DB::getPdo()->lastInsertId();
          
       DB::table('cost_sources')->insert([
        'father_id' => 2,
        'code' => '2.1.1',
        'name' => 'GASTOS DE PERSONAL',
        'description' => 'GASTOS DE PERSONAL',
        'functioning' => TRUE,
        'compensation' => FALSE,
        'debt_service' => FALSE,
        'group_id' => 6,
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
        'group_id' => 6,
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
        'group_id' => 6,
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
        'group_id' => 6,
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
        'group_id' => 6,
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
        'group_id' => 6,
        ]);
        $idFuenteGasto4 = DB::getPdo()->lastInsertId();
        
         
       DB::table('cost_sources')->insert([
        'father_id' => 2,
        'code' => '2.1.5',
        'name' => 'Viáticos Y Gastos de de Viajes',
        'description' => 'Viáticos Y Gastos de de Viajes',
        'functioning' => TRUE,
        'compensation' => FALSE,
        'debt_service' => FALSE,
        'group_id' => 6,
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
        'group_id' => 6,
        ]);
        $idFuenteGasto7 = DB::getPdo()->lastInsertId();
        
      DB::table('cost_sources')->insert([
        'father_id' => 2,
        'code' => '2.1.6',
        'name' => 'Compensación costos financieros',
        'description' => 'Compensación costos financieros',
        'functioning' => TRUE,
        'compensation' => FALSE,
        'debt_service' => FALSE,
        'group_id' => 6,
        ]);
        $idFuenteGasto9 = DB::getPdo()->lastInsertId();
        
         
       DB::table('financial_costs')->insert([
        'year' => 1,
        'value_bugeted' => 507600000,
        'value_comitted' => 497861188,
        'value_paid' => 495103400,
        'own' => TRUE,
        'nation' => FALSE,
        'royalties' => FALSE,
        'funds' => FALSE,
        'functioning' => TRUE,
        'compensation' => FALSE,
        'debt_service' => FALSE,
        'cost_sources_id' => $idFuenteGasto1,
        'p_a_i_id' => $idpai1,
        'group_id' => 6,
        ]);
        $idGasto1 = DB::getPdo()->lastInsertId();
        
         
       DB::table('financial_costs')->insert([
        'year' => 1,
        'value_bugeted' => 80313756,
        'value_comitted' => 80304507,
        'value_paid' => 80219507,
        'own' => TRUE,
        'nation' => FALSE,
        'royalties' => FALSE,
        'funds' => FALSE,
        'functioning' => TRUE,
        'compensation' => FALSE,
        'debt_service' => FALSE,
        'cost_sources_id' => $idFuenteGasto2,
        'p_a_i_id' => $idpai1,
        'group_id' => 6,
        ]);
        $idGasto2 = DB::getPdo()->lastInsertId();
        
         
       DB::table('financial_costs')->insert([
        'year' => 1,
        'value_bugeted' => 338448692,
        'value_comitted' => 338362140,
        'value_paid' => 322808316,
        'own' => TRUE,
        'nation' => FALSE,
        'royalties' => FALSE,
        'funds' => FALSE,
        'functioning' => TRUE,
        'compensation' => FALSE,
        'debt_service' => FALSE,
        'cost_sources_id' => $idFuenteGasto3,
        'p_a_i_id' => $idpai1,
        'group_id' => 6,
        ]);
        $idGasto3 = DB::getPdo()->lastInsertId();
        
         
       DB::table('financial_costs')->insert([
        'year' => 1,
        'value_bugeted' => 109503552,
        'value_comitted' => 109503548,
        'value_paid' => 108972178,
        'own' => TRUE,
        'nation' => FALSE,
        'royalties' => FALSE,
        'funds' => FALSE,
        'functioning' => TRUE,
        'compensation' => FALSE,
        'debt_service' => FALSE,
        'cost_sources_id' => $idFuenteGasto4,
        'p_a_i_id' => $idpai1,
        'group_id' => 6,
        ]);
        $idGasto4 = DB::getPdo()->lastInsertId();
        
         
       DB::table('financial_costs')->insert([
        'year' => 1,
        'value_bugeted' => 48000000,
        'value_comitted' => 47927288,
        'value_paid' => 47927288,
        'own' => TRUE,
        'nation' => FALSE,
        'royalties' => FALSE,
        'funds' => FALSE,
        'functioning' => TRUE,
        'compensation' => FALSE,
        'debt_service' => FALSE,
        'cost_sources_id' => $idFuenteGasto5,
        'p_a_i_id' => $idpai1,
        'group_id' => 6,
        ]);
        $idGasto5 = DB::getPdo()->lastInsertId();
        
         
       DB::table('financial_costs')->insert([
        'year' => 1,
        'value_bugeted' => 118604950,
        'value_comitted' => 118233900,
        'value_paid' => 118233900,
        'own' => TRUE,
        'nation' => FALSE,
        'royalties' => FALSE,
        'funds' => FALSE,
        'functioning' => FALSE,
        'compensation' => TRUE,
        'debt_service' => FALSE,
        'cost_sources_id' => $idFuenteGasto6,
        'p_a_i_id' => $idpai1,
        'group_id' => 6,
        ]);
        $idGasto6 = DB::getPdo()->lastInsertId();
        
         
       DB::table('financial_costs')->insert([
        'year' => 1,
        'value_bugeted' => 12887000,
        'value_comitted' => 12887000,
        'value_paid' => 12887000,
        'own' => TRUE,
        'nation' => FALSE,
        'royalties' => FALSE,
        'funds' => FALSE,
        'functioning' => TRUE,
        'compensation' => FALSE,
        'debt_service' => FALSE,
        'cost_sources_id' => $idFuenteGasto7,
        'p_a_i_id' => $idpai1,
        'group_id' => 6,
        ]);
        $idGasto7 = DB::getPdo()->lastInsertId();
        
         
       DB::table('financial_costs')->insert([
        'year' => 1,
        'value_bugeted' => 2203603302,
        'value_comitted' => 2007054914,
        'value_paid' => 1997544933,
        'own' => FALSE,
        'nation' => TRUE,
        'royalties' => FALSE,
        'funds' => FALSE,
        'functioning' => TRUE,
        'compensation' => FALSE,
        'debt_service' => FALSE,
        'cost_sources_id' => $idFuenteGasto1,
        'p_a_i_id' => $idpai1,
        'group_id' => 6,
        ]);
        $idGasto9 = DB::getPdo()->lastInsertId();
        
         
       DB::table('financial_costs')->insert([
        'year' => 1,
        'value_bugeted' => 61000000,
        'value_comitted' => 60994950,
        'value_paid' => 59277450,
        'own' => FALSE,
        'nation' => TRUE,
        'royalties' => FALSE,
        'funds' => FALSE,
        'functioning' => TRUE,
        'compensation' => FALSE,
        'debt_service' => FALSE,
        'cost_sources_id' => $idFuenteGasto2,
        'p_a_i_id' => $idpai1,
        'group_id' => 6,
        ]);
        $idGasto10 = DB::getPdo()->lastInsertId();
        
         
       DB::table('financial_costs')->insert([
        'year' => 1,
        'value_bugeted' => 111821080,
        'value_comitted' => 109113804,
        'value_paid' => 109113554,
        'own' => FALSE,
        'nation' => TRUE,
        'royalties' => FALSE,
        'funds' => FALSE,
        'functioning' => TRUE,
        'compensation' => FALSE,
        'debt_service' => FALSE,
        'cost_sources_id' => $idFuenteGasto3,
        'p_a_i_id' => $idpai1,
        'group_id' => 6,
        ]);
        $idGasto11 = DB::getPdo()->lastInsertId();
        
         
       DB::table('financial_costs')->insert([
        'year' => 1,
        'value_bugeted' => 29889380,
        'value_comitted' => 29889380,
        'value_paid' => 29889380,
        'own' => FALSE,
        'nation' => TRUE,
        'royalties' => FALSE,
        'funds' => FALSE,
        'functioning' => TRUE,
        'compensation' => FALSE,
        'debt_service' => FALSE,
        'cost_sources_id' => $idFuenteGasto5,
        'p_a_i_id' => $idpai1,
        'group_id' => 6,
        ]);
        $idGasto12 = DB::getPdo()->lastInsertId();
        
         
       DB::table('financial_costs')->insert([
        'year' => 2,
        'value_bugeted' => 527585392,
        'value_comitted' => 515121394,
        'value_paid' => 515203074,
        'own' => TRUE,
        'nation' => FALSE,
        'royalties' => FALSE,
        'funds' => FALSE,
        'functioning' => TRUE,
        'compensation' => FALSE,
        'debt_service' => FALSE,
        'cost_sources_id' => $idFuenteGasto1,
        'p_a_i_id' => $idpai1,
        'group_id' => 6,
        ]);
        $idGasto15 = DB::getPdo()->lastInsertId();
        
         
       DB::table('financial_costs')->insert([
        'year' => 2,
        'value_bugeted' => 94639577,
        'value_comitted' => 94637846,
        'value_paid' => 94310566,
        'own' => TRUE,
        'nation' => FALSE,
        'royalties' => FALSE,
        'funds' => FALSE,
        'functioning' => TRUE,
        'compensation' => FALSE,
        'debt_service' => FALSE,
        'cost_sources_id' => $idFuenteGasto2,
        'p_a_i_id' => $idpai1,
        'group_id' => 6,
        ]);
        $idGasto16 = DB::getPdo()->lastInsertId();
        
         
       DB::table('financial_costs')->insert([
        'year' => 2,
        'value_bugeted' => 317551471,
        'value_comitted' => 316925270,
        'value_paid' => 293053237,
        'own' => TRUE,
        'nation' => FALSE,
        'royalties' => FALSE,
        'funds' => FALSE,
        'functioning' => TRUE,
        'compensation' => FALSE,
        'debt_service' => FALSE,
        'cost_sources_id' => $idFuenteGasto3,
        'p_a_i_id' => $idpai1,
        'group_id' => 6,
        ]);
        $idGasto17 = DB::getPdo()->lastInsertId();
        
         
       DB::table('financial_costs')->insert([
        'year' => 2,
        'value_bugeted' => 60843197,
        'value_comitted' => 60843197,
        'value_paid' => 59730637,
        'own' => TRUE,
        'nation' => FALSE,
        'royalties' => FALSE,
        'funds' => FALSE,
        'functioning' => TRUE,
        'compensation' => FALSE,
        'debt_service' => FALSE,
        'cost_sources_id' => $idFuenteGasto4,
        'p_a_i_id' => $idpai1,
        'group_id' => 6,
        ]);
        $idGasto18 = DB::getPdo()->lastInsertId();
        
         
       DB::table('financial_costs')->insert([
        'year' => 2,
        'value_bugeted' => 45658851,
        'value_comitted' => 45658851,
        'value_paid' => 42177410,
        'own' => TRUE,
        'nation' => FALSE,
        'royalties' => FALSE,
        'funds' => FALSE,
        'functioning' => TRUE,
        'compensation' => FALSE,
        'debt_service' => FALSE,
        'cost_sources_id' => $idFuenteGasto5,
        'p_a_i_id' => $idpai1,
        'group_id' => 6,
        ]);
        $idGasto19 = DB::getPdo()->lastInsertId();
        
         
       DB::table('financial_costs')->insert([
        'year' => 2,
        'value_bugeted' => 118343256,
        'value_comitted' => 117561736,
        'value_paid' => 117561736,
        'own' => TRUE,
        'nation' => FALSE,
        'royalties' => FALSE,
        'funds' => FALSE,
        'functioning' => FALSE,
        'compensation' => TRUE,
        'debt_service' => FALSE,
        'cost_sources_id' => $idFuenteGasto6,
        'p_a_i_id' => $idpai1,
        'group_id' => 6,
        ]);
        $idGasto20 = DB::getPdo()->lastInsertId();
        
        DB::table('financial_costs')->insert([
        'year' => 2,
        'value_bugeted' => 20000000,
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
        'group_id' => 6,
        ]);
        $idGasto21 = DB::getPdo()->lastInsertId();


         
       DB::table('financial_costs')->insert([
        'year' => 2,
        'value_bugeted' => 13789080,
        'value_comitted' => 13789080,
        'value_paid' => 13789080,
        'own' => TRUE,
        'nation' => FALSE,
        'royalties' => FALSE,
        'funds' => FALSE,
        'functioning' => TRUE,
        'compensation' => FALSE,
        'debt_service' => FALSE,
        'cost_sources_id' => $idFuenteGasto7,
        'p_a_i_id' => $idpai1,
        'group_id' => 6,
        ]);
        $idGasto22 = DB::getPdo()->lastInsertId();
        
         DB::table('financial_costs')->insert([
        'year' => 2,
        'value_bugeted' => 68267664,
        'value_comitted' => 18936392,
        'value_paid' => 18936392,
        'own' => TRUE,
        'nation' => FALSE,
        'royalties' => FALSE,
        'funds' => FALSE,
        'functioning' => TRUE,
        'compensation' => FALSE,
        'debt_service' => FALSE,
        'cost_sources_id' => $idFuenteGasto8,
        'p_a_i_id' => $idpai1,
        'group_id' => 6,
        ]);
        $idGasto23 = DB::getPdo()->lastInsertId();
        
         

         
       DB::table('financial_costs')->insert([
        'year' => 2,
        'value_bugeted' => 2361831477,
        'value_comitted' => 2356958001,
        'value_paid' => 2354141126,
        'own' => FALSE,
        'nation' => TRUE,
        'royalties' => FALSE,
        'funds' => FALSE,
        'functioning' => TRUE,
        'compensation' => FALSE,
        'debt_service' => FALSE,
        'cost_sources_id' => $idFuenteGasto1,
        'p_a_i_id' => $idpai1,
        'group_id' => 6,
        ]);
        $idGasto24 = DB::getPdo()->lastInsertId();
        
        
         
       DB::table('financial_costs')->insert([
        'year' => 2,
        'value_bugeted' => 199967108,
        'value_comitted' => 199823131,
        'value_paid' => 175034291,
        'own' => FALSE,
        'nation' => TRUE,
        'royalties' => FALSE,
        'funds' => FALSE,
        'functioning' => TRUE,
        'compensation' => FALSE,
        'debt_service' => FALSE,
        'cost_sources_id' => $idFuenteGasto3,
        'p_a_i_id' => $idpai1,
        'group_id' => 6,
        ]);
        $idGasto25 = DB::getPdo()->lastInsertId();
        
       DB::table('financial_costs')->insert([
        'year' => 2,
        'value_bugeted' => 10000000,
        'value_comitted' => 10000000,
        'value_paid' => 10000000,
        'own' => FALSE,
        'nation' => TRUE,
        'royalties' => FALSE,
        'funds' => FALSE,
        'functioning' => TRUE,
        'compensation' => FALSE,
        'debt_service' => FALSE,
        'cost_sources_id' => $idFuenteGasto5,
        'p_a_i_id' => $idpai1,
        'group_id' => 6,
        ]);
        $idGasto26 = DB::getPdo()->lastInsertId();
        
       DB::table('financial_costs')->insert([
        'year' => 3,
        'value_bugeted' => 687406272,
        'value_comitted' => 528376148,
        'value_paid' => 520718180,
        'own' => TRUE,
        'nation' => FALSE,
        'royalties' => FALSE,
        'funds' => FALSE,
        'functioning' => TRUE,
        'compensation' => FALSE,
        'debt_service' => FALSE,
        'cost_sources_id' => $idFuenteGasto1,
        'p_a_i_id' => $idpai1,
        'group_id' => 6,
        ]);
        $idGasto28 = DB::getPdo()->lastInsertId();
        
         
       DB::table('financial_costs')->insert([
        'year' => 3,
        'value_bugeted' => 199253440,
        'value_comitted' => 185918172,
        'value_paid' => 138732490,
        'own' => TRUE,
        'nation' => FALSE,
        'royalties' => FALSE,
        'funds' => FALSE,
        'functioning' => TRUE,
        'compensation' => FALSE,
        'debt_service' => FALSE,
        'cost_sources_id' => $idFuenteGasto2,
        'p_a_i_id' => $idpai1,
        'group_id' => 6,
        ]);
        $idGasto29 = DB::getPdo()->lastInsertId();
        
         
       DB::table('financial_costs')->insert([
        'year' => 3,
        'value_bugeted' => 269214210,
        'value_comitted' => 235723245,
        'value_paid' => 208141505,
        'own' => TRUE,
        'nation' => FALSE,
        'royalties' => FALSE,
        'funds' => FALSE,
        'functioning' => TRUE,
        'compensation' => FALSE,
        'debt_service' => FALSE,
        'cost_sources_id' => $idFuenteGasto3,
        'p_a_i_id' => $idpai1,
        'group_id' => 6,
        ]);
        $idGasto30 = DB::getPdo()->lastInsertId();
        
         
       DB::table('financial_costs')->insert([
        'year' => 3,
        'value_bugeted' => 60000000,
        'value_comitted' => 42733074,
        'value_paid' => 42733074,
        'own' => TRUE,
        'nation' => FALSE,
        'royalties' => FALSE,
        'funds' => FALSE,
        'functioning' => TRUE,
        'compensation' => FALSE,
        'debt_service' => FALSE,
        'cost_sources_id' => $idFuenteGasto4,
        'p_a_i_id' => $idpai1,
        'group_id' => 6,
        ]);
        $idGasto31 = DB::getPdo()->lastInsertId();
        
         
       DB::table('financial_costs')->insert([
        'year' => 3,
        'value_bugeted' => 42885790,
        'value_comitted' => 42809934,
        'value_paid' => 42018361,
        'own' => TRUE,
        'nation' => FALSE,
        'royalties' => FALSE,
        'funds' => FALSE,
        'functioning' => TRUE,
        'compensation' => FALSE,
        'debt_service' => FALSE,
        'cost_sources_id' => $idFuenteGasto5,
        'p_a_i_id' => $idpai1,
        'group_id' => 6,
        ]);
        $idGasto32 = DB::getPdo()->lastInsertId();
        
         
       DB::table('financial_costs')->insert([
        'year' => 3,
        'value_bugeted' => 245091574,
        'value_comitted' => 180782300,
        'value_paid' => 165153600,
        'own' => TRUE,
        'nation' => FALSE,
        'royalties' => FALSE,
        'funds' => FALSE,
        'functioning' => FALSE,
        'compensation' => TRUE,
        'debt_service' => FALSE,
        'cost_sources_id' => $idFuenteGasto6,
        'p_a_i_id' => $idpai1,
        'group_id' => 6,
        ]);
        $idGasto33 = DB::getPdo()->lastInsertId();
        
         
       DB::table('financial_costs')->insert([
        'year' => 3,
        'value_bugeted' => 22754340,
        'value_comitted' => 22754340,
        'value_paid' => 22754340,
        'own' => TRUE,
        'nation' => FALSE,
        'royalties' => FALSE,
        'funds' => FALSE,
        'functioning' => TRUE,
        'compensation' => FALSE,
        'debt_service' => FALSE,
        'cost_sources_id' => $idFuenteGasto7,
        'p_a_i_id' => $idpai1,
        'group_id' => 6,
        ]);
        $idGasto34 = DB::getPdo()->lastInsertId();

       DB::table('financial_costs')->insert([
        'year' => 3,
        'value_bugeted' => 118000000,
        'value_comitted' => 16947529,
        'value_paid' => 16947529,
        'own' => TRUE,
        'nation' => FALSE,
        'royalties' => FALSE,
        'funds' => FALSE,
        'functioning' => TRUE,
        'compensation' => FALSE,
        'debt_service' => FALSE,
        'cost_sources_id' => $idFuenteGasto8,
        'p_a_i_id' => $idpai1,
        'group_id' => 6,
        ]);
        $idGasto36 = DB::getPdo()->lastInsertId();
        
         
        
         
       DB::table('financial_costs')->insert([
        'year' => 3,
        'value_bugeted' => 2481765237,
        'value_comitted' => 2430657373,
        'value_paid' => 2376717347,
        'own' => FALSE,
        'nation' => TRUE,
        'royalties' => FALSE,
        'funds' => FALSE,
        'functioning' => TRUE,
        'compensation' => FALSE,
        'debt_service' => FALSE,
        'cost_sources_id' => $idFuenteGasto1,
        'p_a_i_id' => $idpai1,
        'group_id' => 6,
        ]);
        $idGasto37 = DB::getPdo()->lastInsertId();
        
         
       DB::table('financial_costs')->insert([
        'year' => 3,
        'value_bugeted' => 29000000,
        'value_comitted' => 28999900,
        'value_paid' => 28799900,
        'own' => FALSE,
        'nation' => TRUE,
        'royalties' => FALSE,
        'funds' => FALSE,
        'functioning' => TRUE,
        'compensation' => FALSE,
        'debt_service' => FALSE,
        'cost_sources_id' => $idFuenteGasto2,
        'p_a_i_id' => $idpai1,
        'group_id' => 6,
        ]);
        $idGasto38 = DB::getPdo()->lastInsertId();
        
         
       DB::table('financial_costs')->insert([
        'year' => 3,
        'value_bugeted' => 179554763,
        'value_comitted' => 176004843,
        'value_paid' => 176004843,
        'own' => FALSE,
        'nation' => TRUE,
        'royalties' => FALSE,
        'funds' => FALSE,
        'functioning' => TRUE,
        'compensation' => FALSE,
        'debt_service' => FALSE,
        'cost_sources_id' => $idFuenteGasto3,
        'p_a_i_id' => $idpai1,
        'group_id' => 6,
        ]);
        $idGasto39 = DB::getPdo()->lastInsertId();
        
      DB::table('financial_costs')->insert([
        'year' => 3,
        'value_bugeted' => 10000000,
        'value_comitted' => 10000000,
        'value_paid' => 10000000,
        'own' => FALSE,
        'nation' => TRUE,
        'royalties' => FALSE,
        'funds' => FALSE,
        'functioning' => TRUE,
        'compensation' => FALSE,
        'debt_service' => FALSE,
        'cost_sources_id' => $idFuenteGasto5,
        'p_a_i_id' => $idpai1,
        'group_id' => 6,
        ]);
        $idGasto40 = DB::getPdo()->lastInsertId();

        DB::table('activity_sources')->insert([
          'activity_id' => $idactivity1,
          'source_id' =>$idPlan1,
          'value' => 500480000,
          'goal' => 0,
          'evidence_balance' => 500480000,
          'age' => 1,
          ]);
          $idactivitySource1 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity2,
          'source_id' =>$idPlan1,
          'value' => 453416253,
          'goal' => 0,
          'evidence_balance' => 453416253,
          'age' => 1,
          ]);
          $idactivitySource2 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity3,
          'source_id' =>$idPlan1,
          'value' => 804318460,
          'goal' => 0,
          'evidence_balance' => 804318460,
          'age' => 1,
          ]);
          $idactivitySource3 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity5,
          'source_id' =>$idPlan1,
          'value' => 505518933,
          'goal' => 0,
          'evidence_balance' => 505518933,
          'age' => 1,
          ]);
          $idactivitySource4 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity9,
          'source_id' =>$idPlan1,
          'value' => 24000000,
          'goal' => 0,
          'evidence_balance' => 24000000,
          'age' => 1,
          ]);
          $idactivitySource5 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity11,
          'source_id' =>$idPlan1,
          'value' => 75481067,
          'goal' => 0,
          'evidence_balance' => 75481067,
          'age' => 1,
          ]);
          $idactivitySource6 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity12,
          'source_id' =>$idPlan1,
          'value' => 249000000,
          'goal' => 0,
          'evidence_balance' => 249000000,
          'age' => 1,
          ]);
          $idactivitySource7 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity14,
          'source_id' =>$idPlan1,
          'value' => 80000000,
          'goal' => 0,
          'evidence_balance' => 80000000,
          'age' => 1,
          ]);
          $idactivitySource8 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity17,
          'source_id' =>$idPlan1,
          'value' => 60000000,
          'goal' => 0,
          'evidence_balance' => 60000000,
          'age' => 1,
          ]);
          $idactivitySource9 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity18,
          'source_id' =>$idPlan1,
          'value' => 204337347,
          'goal' => 0,
          'evidence_balance' => 204337347,
          'age' => 1,
          ]);
          $idactivitySource10 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity19,
          'source_id' =>$idPlan28,
          'value' => 244800000,
          'goal' => 0,
          'evidence_balance' => 244800000,
          'age' => 1,
          ]);
          $idactivitySource11 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity20,
          'source_id' =>$idPlan28,
          'value' => 222199996,
          'goal' => 0,
          'evidence_balance' => 222199996,
          'age' => 1,
          ]);
          $idactivitySource12 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity21,
          'source_id' =>$idPlan28,
          'value' => 227988040,
          'goal' => 0,
          'evidence_balance' => 227988040,
          'age' => 1,
          ]);
          $idactivitySource13 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity22,
          'source_id' =>$idPlan28,
          'value' => 227988040,
          'goal' => 0,
          'evidence_balance' => 227988040,
          'age' => 1,
          ]);
          $idactivitySource14 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity23,
          'source_id' =>$idPlan28,
          'value' => 227988040,
          'goal' => 0,
          'evidence_balance' => 227988040,
          'age' => 1,
          ]);
          $idactivitySource15 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity24,
          'source_id' =>$idPlan28,
          'value' => 2407961565,
          'goal' => 0,
          'evidence_balance' => 2407961565,
          'age' => 1,
          ]);
          $idactivitySource16 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity25,
          'source_id' =>$idPlan27,
          'value' => 299931720,
          'goal' => 0,
          'evidence_balance' => 299931720,
          'age' => 1,
          ]);
          $idactivitySource17 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity26,
          'source_id' =>$idPlan27,
          'value' => 42000000,
          'goal' => 0,
          'evidence_balance' => 42000000,
          'age' => 1,
          ]);
          $idactivitySource18 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity27,
          'source_id' =>$idPlan27,
          'value' => 58000000,
          'goal' => 0,
          'evidence_balance' => 58000000,
          'age' => 1,
          ]);
          $idactivitySource19 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity30,
          'source_id' =>$idPlan27,
          'value' => 90000000,
          'goal' => 0,
          'evidence_balance' => 90000000,
          'age' => 1,
          ]);
          $idactivitySource20 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity32,
          'source_id' =>$idPlan27,
          'value' => 135000000,
          'goal' => 0,
          'evidence_balance' => 135000000,
          'age' => 1,
          ]);
          $idactivitySource21 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity33,
          'source_id' =>$idPlan27,
          'value' => 101620000,
          'goal' => 0,
          'evidence_balance' => 101620000,
          'age' => 1,
          ]);
          $idactivitySource22 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity34,
          'source_id' =>$idPlan27,
          'value' => 65000000,
          'goal' => 0,
          'evidence_balance' => 65000000,
          'age' => 1,
          ]);
          $idactivitySource23 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity36,
          'source_id' =>$idPlan27,
          'value' => 45500000,
          'goal' => 0,
          'evidence_balance' => 45500000,
          'age' => 1,
          ]);
          $idactivitySource24 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity37,
          'source_id' =>$idPlan27,
          'value' => 32900000,
          'goal' => 0,
          'evidence_balance' => 32900000,
          'age' => 1,
          ]);
          $idactivitySource25 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity38,
          'source_id' =>$idPlan27,
          'value' => 252804791,
          'goal' => 0,
          'evidence_balance' => 252804791,
          'age' => 1,
          ]);
          $idactivitySource26 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity39,
          'source_id' =>$idPlan27,
          'value' => 129000000,
          'goal' => 0,
          'evidence_balance' => 129000000,
          'age' => 1,
          ]);
          $idactivitySource27 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity41,
          'source_id' =>$idPlan27,
          'value' => 55500000,
          'goal' => 0,
          'evidence_balance' => 55500000,
          'age' => 1,
          ]);
          $idactivitySource28 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity42,
          'source_id' =>$idPlan27,
          'value' => 14500000,
          'goal' => 0,
          'evidence_balance' => 14500000,
          'age' => 1,
          ]);
          $idactivitySource29 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity45,
          'source_id' =>$idPlan27,
          'value' => 22440000,
          'goal' => 0,
          'evidence_balance' => 22440000,
          'age' => 1,
          ]);
          $idactivitySource30 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity46,
          'source_id' =>$idPlan27,
          'value' => 195076000,
          'goal' => 0,
          'evidence_balance' => 195076000,
          'age' => 1,
          ]);
          $idactivitySource31 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity47,
          'source_id' =>$idPlan27,
          'value' => 381615531,
          'goal' => 0,
          'evidence_balance' => 381615531,
          'age' => 1,
          ]);
          $idactivitySource32 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity49,
          'source_id' =>$idPlan27,
          'value' => 375883756,
          'goal' => 0,
          'evidence_balance' => 375883756,
          'age' => 1,
          ]);
          $idactivitySource33 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity50,
          'source_id' =>$idPlan27,
          'value' => 27885778,
          'goal' => 0,
          'evidence_balance' => 27885778,
          'age' => 1,
          ]);
          $idactivitySource34 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity52,
          'source_id' =>$idPlan27,
          'value' => 1349488,
          'goal' => 0,
          'evidence_balance' => 1349488,
          'age' => 1,
          ]);
          $idactivitySource35 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity55,
          'source_id' =>$idPlan23,
          'value' => 58500000,
          'goal' => 0,
          'evidence_balance' => 58500000,
          'age' => 1,
          ]);
          $idactivitySource36 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity57,
          'source_id' =>$idPlan23,
          'value' => 190000000,
          'goal' => 0,
          'evidence_balance' => 190000000,
          'age' => 1,
          ]);
          $idactivitySource37 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity58,
          'source_id' =>$idPlan23,
          'value' => 14000000,
          'goal' => 0,
          'evidence_balance' => 14000000,
          'age' => 1,
          ]);
          $idactivitySource38 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity59,
          'source_id' =>$idPlan23,
          'value' => 24000000,
          'goal' => 0,
          'evidence_balance' => 24000000,
          'age' => 1,
          ]);
          $idactivitySource39 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity60,
          'source_id' =>$idPlan23,
          'value' => 22000000,
          'goal' => 0,
          'evidence_balance' => 22000000,
          'age' => 1,
          ]);
          $idactivitySource40 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity63,
          'source_id' =>$idPlan23,
          'value' => 324223137.42251,
          'goal' => 0,
          'evidence_balance' => 324223137.42251,
          'age' => 1,
          ]);
          $idactivitySource41 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity64,
          'source_id' =>$idPlan19,
          'value' => 100000000,
          'goal' => 0,
          'evidence_balance' => 100000000,
          'age' => 1,
          ]);
          $idactivitySource42 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity66,
          'source_id' =>$idPlan19,
          'value' => 61084000,
          'goal' => 0,
          'evidence_balance' => 61084000,
          'age' => 1,
          ]);
          $idactivitySource43 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity69,
          'source_id' =>$idPlan19,
          'value' => 70000000,
          'goal' => 0,
          'evidence_balance' => 70000000,
          'age' => 1,
          ]);
          $idactivitySource44 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity70,
          'source_id' =>$idPlan19,
          'value' => 20000000,
          'goal' => 0,
          'evidence_balance' => 20000000,
          'age' => 1,
          ]);
          $idactivitySource45 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity71,
          'source_id' =>$idPlan19,
          'value' => 88200000,
          'goal' => 0,
          'evidence_balance' => 88200000,
          'age' => 1,
          ]);
          $idactivitySource46 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity72,
          'source_id' =>$idPlan19,
          'value' => 27783420.42251,
          'goal' => 0,
          'evidence_balance' => 27783420.42251,
          'age' => 1,
          ]);
          $idactivitySource47 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
          'activity_id' => $idactivity75,
          'source_id' =>$idPlan5,
          'value' => 335970140.42251,
          'goal' => 0,
          'evidence_balance' => 335970140.42251,
          'age' => 1,
          ]);
          $idactivitySource48 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity18,
            'source_id' =>$idPlan28,
            'value' => 135662653,
            'goal' => 0,
            'evidence_balance' => 135662653,
            'age' => 1,
            ]);
            $idactivitySource49 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity24,
            'source_id' =>$idPlan27,
            'value' => 86626769,
            'goal' => 0,
            'evidence_balance' => 86626769,
            'age' => 1,
            ]);
            $idactivitySource50 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity52,
            'source_id' =>$idPlan23,
            'value' => 64150512,
            'goal' => 0,
            'evidence_balance' => 64150512,
            'age' => 1,
            ]);
            $idactivitySource51 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity63,
            'source_id' =>$idPlan19,
            'value' => 83276862.57749,
            'goal' => 0,
            'evidence_balance' => 83276862.57749,
            'age' => 1,
            ]);
            $idactivitySource52 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity72,
            'source_id' =>$idPlan5,
            'value' => 64016579.57749,
            'goal' => 0,
            'evidence_balance' => 64016579.57749,
            'age' => 1,
            ]);
            $idactivitySource53 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity75,
            'source_id' =>$idPlan20,
            'value' => 270000000,
            'goal' => 0,
            'evidence_balance' => 270000000,
            'age' => 1,
            ]);
            $idactivitySource54 = DB::getPdo()->lastInsertId();
            
            
            
            DB::table('activity_sources')->insert([
            'activity_id' => $idactivity75,
            'source_id' =>$idPlan21,
            'value' => 126634468,
            'goal' => 0,
            'evidence_balance' => 126634468,
            'age' => 1,
            ]);
            $idactivitySource55 = DB::getPdo()->lastInsertId();
            
            
              DB::table('activity_sources')->insert([
            'activity_id' => $idactivity75,
            'source_id' =>$idPlan12,
            'value' => 147812241.6,
            'goal' => 0,
            'evidence_balance' => 147812241.6,
            'age' => 1,
            ]);
            $idactivitySource56 = DB::getPdo()->lastInsertId();
            
            
              DB::table('activity_sources')->insert([
            'activity_id' => $idactivity75,
            'source_id' =>$idPlan7,
            'value' => 103500000,
            'goal' => 0,
            'evidence_balance' => 103500000,
            'age' => 1,
            ]);
            $idactivitySource57 = DB::getPdo()->lastInsertId();
            
            
              DB::table('activity_sources')->insert([
            'activity_id' => $idactivity75,
            'source_id' =>$idPlan2,
            'value' => 10800000,
            'goal' => 0,
            'evidence_balance' => 10800000,
            'age' => 1,
            ]);
            $idactivitySource58 = DB::getPdo()->lastInsertId();
            
            
              DB::table('activity_sources')->insert([
            'activity_id' => $idactivity75,
            'source_id' =>$idPlan3,
            'value' => 30600000,
            'goal' => 0,
            'evidence_balance' => 30600000,
            'age' => 1,
            ]);
            $idactivitySource59 = DB::getPdo()->lastInsertId();
            
            
              DB::table('activity_sources')->insert([
            'activity_id' => $idactivity75,
            'source_id' =>$idPlan4,
            'value' => 61083992.9,
            'goal' => 0,
            'evidence_balance' => 61083992.9,
            'age' => 1,
            ]);
            $idactivitySource60 = DB::getPdo()->lastInsertId();
            
            
              DB::table('activity_sources')->insert([
            'activity_id' => $idactivity75,
            'source_id' =>$idPlan10,
            'value' => 90000000,
            'goal' => 0,
            'evidence_balance' => 90000000,
            'age' => 1,
            ]);
            $idactivitySource61 = DB::getPdo()->lastInsertId();
            
            
              DB::table('activity_sources')->insert([
            'activity_id' => $idactivity75,
            'source_id' =>$idPlan23,
            'value' => 23600000,
            'goal' => 0,
            'evidence_balance' => 23600000,
            'age' => 1,
            ]);
            $idactivitySource62 = DB::getPdo()->lastInsertId();
            
            
            
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia500,
              'activity_source_id' =>$idactivitySource1,
              'value' => 500440980,
              ]);
              $idevidenceFinancial1 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia1,
              'activity_source_id' =>$idactivitySource2,
              'value' => 442739299,
              ]);
              $idevidenceFinancial2 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia2,
              'activity_source_id' =>$idactivitySource3,
              'value' => 804218460,
              ]);
              $idevidenceFinancial3 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia3,
              'activity_source_id' =>$idactivitySource4,
              'value' => 501279413,
              ]);
              $idevidenceFinancial4 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia501,
              'activity_source_id' =>$idactivitySource5,
              'value' => 23500000,
              ]);
              $idevidenceFinancial5 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia4,
              'activity_source_id' =>$idactivitySource6,
              'value' => 75481067,
              ]);
              $idevidenceFinancial6 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia502,
              'activity_source_id' =>$idactivitySource7,
              'value' => 0,
              ]);
              $idevidenceFinancial7 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia180,
              'activity_source_id' =>$idactivitySource8,
              'value' => 80000000,
              ]);
              $idevidenceFinancial8 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia6,
              'activity_source_id' =>$idactivitySource9,
              'value' => 60000000,
              ]);
              $idevidenceFinancial9 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia7,
              'activity_source_id' =>$idactivitySource10,
              'value' => 204337347,
              ]);
              $idevidenceFinancial10 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia503,
              'activity_source_id' =>$idactivitySource11,
              'value' => 244800000,
              ]);
              $idevidenceFinancial11 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia8,
              'activity_source_id' =>$idactivitySource12,
              'value' => 222060593,
              ]);
              $idevidenceFinancial12 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia9,
              'activity_source_id' =>$idactivitySource13,
              'value' => 223550752,
              ]);
              $idevidenceFinancial13 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia504,
              'activity_source_id' =>$idactivitySource14,
              'value' => 223550752,
              ]);
              $idevidenceFinancial14 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia10,
              'activity_source_id' =>$idactivitySource15,
              'value' => 223550752,
              ]);
              $idevidenceFinancial15 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia11,
              'activity_source_id' =>$idactivitySource16,
              'value' => 2407961565,
              ]);
              $idevidenceFinancial16 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia12,
              'activity_source_id' =>$idactivitySource17,
              'value' => 299100000,
              ]);
              $idevidenceFinancial17 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia13,
              'activity_source_id' =>$idactivitySource18,
              'value' => 41758012,
              ]);
              $idevidenceFinancial18 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia14,
              'activity_source_id' =>$idactivitySource19,
              'value' => 30943175,
              ]);
              $idevidenceFinancial19 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia15,
              'activity_source_id' =>$idactivitySource20,
              'value' => 90000000,
              ]);
              $idevidenceFinancial20 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia505,
              'activity_source_id' =>$idactivitySource21,
              'value' => 135000000,
              ]);
              $idevidenceFinancial21 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia506,
              'activity_source_id' =>$idactivitySource22,
              'value' => 101500000,
              ]);
              $idevidenceFinancial22 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia16,
              'activity_source_id' =>$idactivitySource23,
              'value' => 65000000,
              ]);
              $idevidenceFinancial23 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia17,
              'activity_source_id' =>$idactivitySource24,
              'value' => 45187911,
              ]);
              $idevidenceFinancial24 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia18,
              'activity_source_id' =>$idactivitySource25,
              'value' => 32900000,
              ]);
              $idevidenceFinancial25 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia19,
              'activity_source_id' =>$idactivitySource26,
              'value' => 251739791,
              ]);
              $idevidenceFinancial26 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia20,
              'activity_source_id' =>$idactivitySource27,
              'value' => 129000000,
              ]);
              $idevidenceFinancial27 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia21,
              'activity_source_id' =>$idactivitySource28,
              'value' => 55500000,
              ]);
              $idevidenceFinancial28 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia22,
              'activity_source_id' =>$idactivitySource29,
              'value' => 14500000,
              ]);
              $idevidenceFinancial29 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia24,
              'activity_source_id' =>$idactivitySource30,
              'value' => 22076800,
              ]);
              $idevidenceFinancial30 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia25,
              'activity_source_id' =>$idactivitySource31,
              'value' => 194679547,
              ]);
              $idevidenceFinancial31 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia26,
              'activity_source_id' =>$idactivitySource32,
              'value' => 381582715,
              ]);
              $idevidenceFinancial32 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia27,
              'activity_source_id' =>$idactivitySource33,
              'value' => 375883756,
              ]);
              $idevidenceFinancial33 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia507,
              'activity_source_id' =>$idactivitySource34,
              'value' => 27885750,
              ]);
              $idevidenceFinancial34 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia28,
              'activity_source_id' =>$idactivitySource35,
              'value' => 1349488,
              ]);
              $idevidenceFinancial35 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia29,
              'activity_source_id' =>$idactivitySource36,
              'value' => 58500000,
              ]);
              $idevidenceFinancial36 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia31,
              'activity_source_id' =>$idactivitySource37,
              'value' => 186432939,
              ]);
              $idevidenceFinancial37 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia508,
              'activity_source_id' =>$idactivitySource38,
              'value' => 14000000,
              ]);
              $idevidenceFinancial38 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia32,
              'activity_source_id' =>$idactivitySource39,
              'value' => 24000000,
              ]);
              $idevidenceFinancial39 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia33,
              'activity_source_id' =>$idactivitySource40,
              'value' => 22000000,
              ]);
              $idevidenceFinancial40 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia35,
              'activity_source_id' =>$idactivitySource41,
              'value' => 324223137.42251,
              ]);
              $idevidenceFinancial41 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia36,
              'activity_source_id' =>$idactivitySource42,
              'value' => 100000000,
              ]);
              $idevidenceFinancial42 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia509,
              'activity_source_id' =>$idactivitySource43,
              'value' => 59788958,
              ]);
              $idevidenceFinancial43 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia510,
              'activity_source_id' =>$idactivitySource44,
              'value' => 69999968,
              ]);
              $idevidenceFinancial44 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia38,
              'activity_source_id' =>$idactivitySource45,
              'value' => 20000000,
              ]);
              $idevidenceFinancial45 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia511,
              'activity_source_id' =>$idactivitySource46,
              'value' => 80200000,
              ]);
              $idevidenceFinancial46 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia39,
              'activity_source_id' =>$idactivitySource47,
              'value' => 27783420.42251,
              ]);
              $idevidenceFinancial47 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia41,
              'activity_source_id' =>$idactivitySource48,
              'value' => 335970140.42251,
              ]);
              $idevidenceFinancial48 = DB::getPdo()->lastInsertId();
              
              
              
              DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia7,
              'activity_source_id' =>$idactivitySource49,
              'value' => 129773011,
              ]);
              $idevidenceFinancial49 = DB::getPdo()->lastInsertId();
              
              
              
              DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia11,
              'activity_source_id' =>$idactivitySource50,
              'value' => 86626769,
              ]);
              $idevidenceFinancial50 = DB::getPdo()->lastInsertId();
              
              
              
              DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia28,
              'activity_source_id' =>$idactivitySource51,
              'value' => 64150512,
              ]);
              $idevidenceFinancial51 = DB::getPdo()->lastInsertId();
              
              
              
              DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia35,
              'activity_source_id' =>$idactivitySource52,
              'value' => 83276862.57749,
              ]);
              $idevidenceFinancial52 = DB::getPdo()->lastInsertId();
              
              
              
              DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia39,
              'activity_source_id' =>$idactivitySource53,
              'value' => 64016570.57749,
              ]);
              $idevidenceFinancial53 = DB::getPdo()->lastInsertId();
              
              
              
              DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia41,
              'activity_source_id' =>$idactivitySource54,
              'value' => 270000000,
              ]);
              $idevidenceFinancial54 = DB::getPdo()->lastInsertId();
              
              
              
              DB::table('evidence_financial')->insert([
                'evidence_id' => $idevidencia41,
                'activity_source_id' =>$idactivitySource55,
                'value' => 126634468,
                ]);
                $idevidenceFinancial55 = DB::getPdo()->lastInsertId();
                
                
                  DB::table('evidence_financial')->insert([
                'evidence_id' => $idevidencia41,
                'activity_source_id' =>$idactivitySource56,
                'value' => 147812241.6,
                ]);
                $idevidenceFinancial56 = DB::getPdo()->lastInsertId();
                
                
                  DB::table('evidence_financial')->insert([
                'evidence_id' => $idevidencia41,
                'activity_source_id' =>$idactivitySource57,
                'value' => 103500000,
                ]);
                $idevidenceFinancial57 = DB::getPdo()->lastInsertId();
                
                
                  DB::table('evidence_financial')->insert([
                'evidence_id' => $idevidencia41,
                'activity_source_id' =>$idactivitySource58,
                'value' => 10800000,
                ]);
                $idevidenceFinancial58 = DB::getPdo()->lastInsertId();
                
                
                  DB::table('evidence_financial')->insert([
                'evidence_id' => $idevidencia41,
                'activity_source_id' =>$idactivitySource59,
                'value' => 30600000,
                ]);
                $idevidenceFinancial59 = DB::getPdo()->lastInsertId();
                
                
                  DB::table('evidence_financial')->insert([
                'evidence_id' => $idevidencia41,
                'activity_source_id' =>$idactivitySource60,
                'value' => 61083992.9,
                ]);
                $idevidenceFinancial60 = DB::getPdo()->lastInsertId();
                
                
                  DB::table('evidence_financial')->insert([
                'evidence_id' => $idevidencia41,
                'activity_source_id' =>$idactivitySource61,
                'value' => 90000000,
                ]);
                $idevidenceFinancial61 = DB::getPdo()->lastInsertId();
                
                
                  DB::table('evidence_financial')->insert([
                'evidence_id' => $idevidencia41,
                'activity_source_id' =>$idactivitySource62,
                'value' => 23599157.0774899,
                ]);
                $idevidenceFinancial62 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('activity_sources')->insert([
                'activity_id' => $idactivity1,
                'source_id' =>$idPlan29,
                'value' => 636482102,
                'goal' => 0,
                'evidence_balance' => 636482102,
                'age' => 2,
                ]);
                $idactivitySource63 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('activity_sources')->insert([
                'activity_id' => $idactivity2,
                'source_id' =>$idPlan29,
                'value' => 162672924,
                'goal' => 0,
                'evidence_balance' => 162672924,
                'age' => 2,
                ]);
                $idactivitySource64 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('activity_sources')->insert([
                'activity_id' => $idactivity3,
                'source_id' =>$idPlan29,
                'value' => 1148656598,
                'goal' => 0,
                'evidence_balance' => 1148656598,
                'age' => 2,
                ]);
                $idactivitySource65 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('activity_sources')->insert([
                'activity_id' => $idactivity5,
                'source_id' =>$idPlan29,
                'value' => 202030732,
                'goal' => 0,
                'evidence_balance' => 202030732,
                'age' => 2,
                ]);
                $idactivitySource66 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('activity_sources')->insert([
                'activity_id' => $idactivity6,
                'source_id' =>$idPlan29,
                'value' => 257634210,
                'goal' => 0,
                'evidence_balance' => 257634210,
                'age' => 2,
                ]);
                $idactivitySource67 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('activity_sources')->insert([
                'activity_id' => $idactivity7,
                'source_id' =>$idPlan29,
                'value' => 30345000,
                'goal' => 0,
                'evidence_balance' => 30345000,
                'age' => 2,
                ]);
                $idactivitySource68 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('activity_sources')->insert([
                'activity_id' => $idactivity9,
                'source_id' =>$idPlan29,
                'value' => 9000000,
                'goal' => 0,
                'evidence_balance' => 9000000,
                'age' => 2,
                ]);
                $idactivitySource69 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('activity_sources')->insert([
                'activity_id' => $idactivity11,
                'source_id' =>$idPlan29,
                'value' => 35055000,
                'goal' => 0,
                'evidence_balance' => 35055000,
                'age' => 2,
                ]);
                $idactivitySource70 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('activity_sources')->insert([
                'activity_id' => $idactivity14,
                'source_id' =>$idPlan29,
                'value' => 40000000,
                'goal' => 0,
                'evidence_balance' => 40000000,
                'age' => 2,
                ]);
                $idactivitySource72 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('activity_sources')->insert([
                'activity_id' => $idactivity16,
                'source_id' =>$idPlan29,
                'value' => 50156926,
                'goal' => 0,
                'evidence_balance' => 50156926,
                'age' => 2,
                ]);
                $idactivitySource73 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('activity_sources')->insert([
                'activity_id' => $idactivity17,
                'source_id' =>$idPlan29,
                'value' => 47000000,
                'goal' => 0,
                'evidence_balance' => 47000000,
                'age' => 2,
                ]);
                $idactivitySource74 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('activity_sources')->insert([
                'activity_id' => $idactivity18,
                'source_id' =>$idPlan29,
                'value' => 112843074,
                'goal' => 0,
                'evidence_balance' => 112843074,
                'age' => 2,
                ]);
                $idactivitySource75 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('activity_sources')->insert([
                'activity_id' => $idactivity20,
                'source_id' =>$idPlan29,
                'value' => 250000000,
                'goal' => 0,
                'evidence_balance' => 250000000,
                'age' => 2,
                ]);
                $idactivitySource76 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('activity_sources')->insert([
                'activity_id' => $idactivity21,
                'source_id' =>$idPlan29,
                'value' => 57043790,
                'goal' => 0,
                'evidence_balance' => 57043790,
                'age' => 2,
                ]);
                $idactivitySource77 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('activity_sources')->insert([
                'activity_id' => $idactivity22,
                'source_id' =>$idPlan57,
                'value' => 73000000,
                'goal' => 0,
                'evidence_balance' => 73000000,
                'age' => 2,
                ]);
                $idactivitySource78 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('activity_sources')->insert([
                'activity_id' => $idactivity23,
                'source_id' =>$idPlan57,
                'value' => 135000000,
                'goal' => 0,
                'evidence_balance' => 135000000,
                'age' => 2,
                ]);
                $idactivitySource79 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('activity_sources')->insert([
                'activity_id' => $idactivity24,
                'source_id' =>$idPlan57,
                'value' => 2057788696,
                'goal' => 0,
                'evidence_balance' => 2057788696,
                'age' => 2,
                ]);
                $idactivitySource80 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('activity_sources')->insert([
                'activity_id' => $idactivity25,
                'source_id' =>$idPlan53,
                'value' => 133788563.88162,
                'goal' => 0,
                'evidence_balance' => 133788563.88162,
                'age' => 2,
                ]);
                $idactivitySource81 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('activity_sources')->insert([
                'activity_id' => $idactivity26,
                'source_id' =>$idPlan34,
                'value' => 42000000,
                'goal' => 0,
                'evidence_balance' => 42000000,
                'age' => 2,
                ]);
                $idactivitySource82 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('activity_sources')->insert([
                'activity_id' => $idactivity27,
                'source_id' =>$idPlan34,
                'value' => 58000000,
                'goal' => 0,
                'evidence_balance' => 58000000,
                'age' => 2,
                ]);
                $idactivitySource83 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('activity_sources')->insert([
                'activity_id' => $idactivity28,
                'source_id' =>$idPlan34,
                'value' => 184963037,
                'goal' => 0,
                'evidence_balance' => 184963037,
                'age' => 2,
                ]);
                $idactivitySource84 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('activity_sources')->insert([
                'activity_id' => $idactivity29,
                'source_id' =>$idPlan34,
                'value' => 67083468.88162,
                'goal' => 0,
                'evidence_balance' => 67083468.88162,
                'age' => 2,
                ]);
                $idactivitySource85 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('activity_sources')->insert([
                'activity_id' => $idactivity31,
                'source_id' =>$idPlan49,
                'value' => 130000000,
                'goal' => 0,
                'evidence_balance' => 130000000,
                'age' => 2,
                ]);
                $idactivitySource86 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('activity_sources')->insert([
                'activity_id' => $idactivity33,
                'source_id' =>$idPlan49,
                'value' => 75400000,
                'goal' => 0,
                'evidence_balance' => 75400000,
                'age' => 2,
                ]);
                $idactivitySource87 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('activity_sources')->insert([
                'activity_id' => $idactivity34,
                'source_id' =>$idPlan49,
                'value' => 46750000,
                'goal' => 0,
                'evidence_balance' => 46750000,
                'age' => 2,
                ]);
                $idactivitySource88 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('activity_sources')->insert([
                'activity_id' => $idactivity36,
                'source_id' =>$idPlan49,
                'value' => 40926000,
                'goal' => 0,
                'evidence_balance' => 40926000,
                'age' => 2,
                ]);
                $idactivitySource89 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('activity_sources')->insert([
                'activity_id' => $idactivity37,
                'source_id' =>$idPlan49,
                'value' => 16487806.88162,
                'goal' => 0,
                'evidence_balance' => 16487806.88162,
                'age' => 2,
                ]);
                $idactivitySource90 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('activity_sources')->insert([
                'activity_id' => $idactivity38,
                'source_id' =>$idPlan50,
                'value' => 229587806.88162,
                'goal' => 0,
                'evidence_balance' => 229587806.88162,
                'age' => 2,
                ]);
                $idactivitySource91 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('activity_sources')->insert([
                'activity_id' => $idactivity39,
                'source_id' =>$idPlan36,
                'value' => 100119058.88162,
                'goal' => 0,
                'evidence_balance' => 100119058.88162,
                'age' => 2,
                ]);
                $idactivitySource92 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('activity_sources')->insert([
                'activity_id' => $idactivity42,
                'source_id' =>$idPlan30,
                'value' => 17700141.28162,
                'goal' => 0,
                'evidence_balance' => 17700141.28162,
                'age' => 2,
                ]);
                $idactivitySource93 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity21,
                  'source_id' =>$idPlan57,
                  'value' => 2956210,
                  'goal' => 0,
                  'evidence_balance' => 2956210,
                  'age' => 2,
                  ]);
                  $idactivitySource94 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity24,
                  'source_id' =>$idPlan53,
                  'value' => 436799638,
                  'goal' => 0,
                  'evidence_balance' => 436799638,
                  'age' => 2,
                  ]);
                  $idactivitySource95 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity25,
                  'source_id' =>$idPlan34,
                  'value' => 166143156.11838,
                  'goal' => 0,
                  'evidence_balance' => 166143156.11838,
                  'age' => 2,
                  ]);
                  $idactivitySource96 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity29,
                  'source_id' =>$idPlan49,
                  'value' => 140436193.11838,
                  'goal' => 0,
                  'evidence_balance' => 140436193.11838,
                  'age' => 2,
                  ]);
                  $idactivitySource97 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity37,
                  'source_id' =>$idPlan50,
                  'value' => 48512193.11838,
                  'goal' => 0,
                  'evidence_balance' => 48512193.11838,
                  'age' => 2,
                  ]);
                  $idactivitySource98 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity38,
                  'source_id' =>$idPlan51,
                  'value' => 120000000,
                  'goal' => 0,
                  'evidence_balance' => 120000000,
                  'age' => 2,
                  ]);
                  $idactivitySource99 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity39,
                  'source_id' =>$idPlan41,
                  'value' => 70794696.6,
                  'goal' => 0,
                  'evidence_balance' => 70794696.6,
                  'age' => 2,
                  ]);
                  $idactivitySource100 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity42,
                  'source_id' =>$idPlan32,
                  'value' => 18000000,
                  'goal' => 0,
                  'evidence_balance' => 18000000,
                  'age' => 2,
                  ]);
                  $idactivitySource101 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity38,
                  'source_id' =>$idPlan36,
                  'value' => 6485941.11837995,
                  'goal' => 0,
                  'evidence_balance' => 6485941.11837995,
                  'age' => 2,
                  ]);
                  $idactivitySource102 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity39,
                  'source_id' =>$idPlan33,
                  'value' => 62186385.8,
                  'goal' => 0,
                  'evidence_balance' => 62186385.8,
                  'age' => 2,
                  ]);
                  $idactivitySource103 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity42,
                  'source_id' =>$idPlan46,
                  'value' => 11182546,
                  'goal' => 0,
                  'evidence_balance' => 11182546,
                  'age' => 2,
                  ]);
                  $idactivitySource104 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity39,
                    'source_id' =>$idPlan31,
                    'value' => 50000000,
                    'goal' => 0,
                    'evidence_balance' => 50000000,
                    'age' => 2,
                    ]);
                    $idactivitySource105 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity42,
                    'source_id' =>$idPlan52,
                    'value' => 20000000,
                    'goal' => 0,
                    'evidence_balance' => 20000000,
                    'age' => 2,
                    ]);
                    $idactivitySource106 = DB::getPdo()->lastInsertId();
                    
                    
                    
                    DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity39,
                    'source_id' =>$idPlan39,
                    'value' => 56700000,
                    'goal' => 0,
                    'evidence_balance' => 56700000,
                    'age' => 2,
                    ]);
                    $idactivitySource107 = DB::getPdo()->lastInsertId();
                    
                    
                    
                    DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity42,
                    'source_id' =>$idPlan54,
                    'value' => 500,
                    'goal' => 0,
                    'evidence_balance' => 500,
                    'age' => 2,
                    ]);
                    $idactivitySource108 = DB::getPdo()->lastInsertId();
                    
                    
                    
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity39,
                      'source_id' =>$idPlan30,
                      'value' => 22299858.71838,
                      'goal' => 0,
                      'evidence_balance' => 22299858.71838,
                      'age' => 2,
                      ]);
                      $idactivitySource109 = DB::getPdo()->lastInsertId();
                      
                      
                      
                      DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia512,
                      'activity_source_id' =>$idactivitySource63,
                      'value' => 617232102,
                      ]);
                      $idevidenceFinancial63 = DB::getPdo()->lastInsertId();
                      
                      
                      
                      DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia513,
                      'activity_source_id' =>$idactivitySource64,
                      'value' => 161589660,
                      ]);
                      $idevidenceFinancial64 = DB::getPdo()->lastInsertId();
                      
                      
                      
                      DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia514,
                      'activity_source_id' =>$idactivitySource65,
                      'value' => 1148656596,
                      ]);
                      $idevidenceFinancial65 = DB::getPdo()->lastInsertId();
                      
                      
                      
                      DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia42,
                      'activity_source_id' =>$idactivitySource66,
                      'value' => 200921452,
                      ]);
                      $idevidenceFinancial66 = DB::getPdo()->lastInsertId();
                      
                      
                      
                      DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia43,
                      'activity_source_id' =>$idactivitySource67,
                      'value' => 257634210,
                      ]);
                      $idevidenceFinancial67 = DB::getPdo()->lastInsertId();
                      
                      
                      
                      DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia44,
                      'activity_source_id' =>$idactivitySource68,
                      'value' => 30345000,
                      ]);
                      $idevidenceFinancial68 = DB::getPdo()->lastInsertId();
                      
                      
                      
                      DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia46,
                      'activity_source_id' =>$idactivitySource69,
                      'value' => 9000000,
                      ]);
                      $idevidenceFinancial69 = DB::getPdo()->lastInsertId();
                      
                      
                      
                      DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia48,
                      'activity_source_id' =>$idactivitySource70,
                      'value' => 35055000,
                      ]);
                      $idevidenceFinancial70 = DB::getPdo()->lastInsertId();
                      
                      
                      
                      DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia181,
                      'activity_source_id' =>$idactivitySource72,
                      'value' => 39700000,
                      ]);
                      $idevidenceFinancial72 = DB::getPdo()->lastInsertId();
                      
                      
                      
                      DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia516,
                      'activity_source_id' =>$idactivitySource73,
                      'value' => 50156926,
                      ]);
                      $idevidenceFinancial73 = DB::getPdo()->lastInsertId();
                      
                      
                      
                      DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia49,
                      'activity_source_id' =>$idactivitySource74,
                      'value' => 47000000,
                      ]);
                      $idevidenceFinancial74 = DB::getPdo()->lastInsertId();
                      
                      
                      
                      DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia50,
                      'activity_source_id' =>$idactivitySource75,
                      'value' => 112843073,
                      ]);
                      $idevidenceFinancial75 = DB::getPdo()->lastInsertId();
                      
                      
                      
                      DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia51,
                      'activity_source_id' =>$idactivitySource76,
                      'value' => 250000000,
                      ]);
                      $idevidenceFinancial76 = DB::getPdo()->lastInsertId();
                      
                      
                      
                      DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia517,
                      'activity_source_id' =>$idactivitySource77,
                      'value' => 57043790,
                      ]);
                      $idevidenceFinancial77 = DB::getPdo()->lastInsertId();
                      
                      
                      
                      DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia52,
                      'activity_source_id' =>$idactivitySource78,
                      'value' => 71150790,
                      ]);
                      $idevidenceFinancial78 = DB::getPdo()->lastInsertId();
                      
                      
                      
                      DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia53,
                      'activity_source_id' =>$idactivitySource79,
                      'value' => 135000000,
                      ]);
                      $idevidenceFinancial79 = DB::getPdo()->lastInsertId();
                      
                      
                      
                      DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia518,
                      'activity_source_id' =>$idactivitySource80,
                      'value' => 2057788696,
                      ]);
                      $idevidenceFinancial80 = DB::getPdo()->lastInsertId();
                      
                      
                      
                      DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia54,
                      'activity_source_id' =>$idactivitySource81,
                      'value' => 133788563.88162,
                      ]);
                      $idevidenceFinancial81 = DB::getPdo()->lastInsertId();
                      
                      
                      
                      DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia55,
                      'activity_source_id' =>$idactivitySource82,
                      'value' => 41758012,
                      ]);
                      $idevidenceFinancial82 = DB::getPdo()->lastInsertId();
                      
                      
                      
                      DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia56,
                      'activity_source_id' =>$idactivitySource83,
                      'value' => 30943175,
                      ]);
                      $idevidenceFinancial83 = DB::getPdo()->lastInsertId();
                      
                      
                      
                      DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia57,
                      'activity_source_id' =>$idactivitySource84,
                      'value' => 150550237,
                      ]);
                      $idevidenceFinancial84 = DB::getPdo()->lastInsertId();
                      
                      
                      
                      DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia58,
                      'activity_source_id' =>$idactivitySource85,
                      'value' => 67083468.88162,
                      ]);
                      $idevidenceFinancial85 = DB::getPdo()->lastInsertId();
                      
                      
                      
                      DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia60,
                      'activity_source_id' =>$idactivitySource86,
                      'value' => 129418161,
                      ]);
                      $idevidenceFinancial86 = DB::getPdo()->lastInsertId();
                      
                      
                      
                      DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia61,
                      'activity_source_id' =>$idactivitySource87,
                      'value' => 75200000,
                      ]);
                      $idevidenceFinancial87 = DB::getPdo()->lastInsertId();
                      
                      
                      
                      DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia62,
                      'activity_source_id' =>$idactivitySource88,
                      'value' => 46750000,
                      ]);
                      $idevidenceFinancial88 = DB::getPdo()->lastInsertId();
                      
                      
                      
                      DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia64,
                      'activity_source_id' =>$idactivitySource89,
                      'value' => 40926000,
                      ]);
                      $idevidenceFinancial89 = DB::getPdo()->lastInsertId();
                      
                      
                      
                      DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia65,
                      'activity_source_id' =>$idactivitySource90,
                      'value' => 16487806.88162,
                      ]);
                      $idevidenceFinancial90 = DB::getPdo()->lastInsertId();
                      
                      
                      
                      DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia519,
                      'activity_source_id' =>$idactivitySource91,
                      'value' => 229587806.88162,
                      ]);
                      $idevidenceFinancial91 = DB::getPdo()->lastInsertId();
                      
                      
                      
                      DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia66,
                      'activity_source_id' =>$idactivitySource92,
                      'value' => 100119058.88162,
                      ]);
                      $idevidenceFinancial92 = DB::getPdo()->lastInsertId();
                      
                      
                      
                      DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia520,
                      'activity_source_id' =>$idactivitySource93,
                      'value' => 17700141.28162,
                      ]);
                      $idevidenceFinancial93 = DB::getPdo()->lastInsertId();
                      
                      
                      
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia517,
                        'activity_source_id' =>$idactivitySource94,
                        'value' => 2956210,
                        ]);
                        $idevidenceFinancial94 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia518,
                        'activity_source_id' =>$idactivitySource95,
                        'value' => 436799638,
                        ]);
                        $idevidenceFinancial95 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia54,
                        'activity_source_id' =>$idactivitySource96,
                        'value' => 165311436.11838,
                        ]);
                        $idevidenceFinancial96 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia58,
                        'activity_source_id' =>$idactivitySource97,
                        'value' => 41630901.11838,
                        ]);
                        $idevidenceFinancial97 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia65,
                        'activity_source_id' =>$idactivitySource98,
                        'value' => 48512193.11838,
                        ]);
                        $idevidenceFinancial98 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia519,
                        'activity_source_id' =>$idactivitySource99,
                        'value' => 120000000,
                        ]);
                        $idevidenceFinancial99 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia66,
                        'activity_source_id' =>$idactivitySource100,
                        'value' => 70794696.6,
                        ]);
                        $idevidenceFinancial100 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia520,
                        'activity_source_id' =>$idactivitySource101,
                        'value' => 18000000,
                        ]);
                        $idevidenceFinancial101 = DB::getPdo()->lastInsertId();
                        
                        
                        
                        DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia519,
                        'activity_source_id' =>$idactivitySource102,
                        'value' => 6213297.11837995,
                        ]);
                        $idevidenceFinancial102 = DB::getPdo()->lastInsertId();
                        
                        
                        
                        DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia66,
                        'activity_source_id' =>$idactivitySource103,
                        'value' => 62186385.8,
                        ]);
                        $idevidenceFinancial103 = DB::getPdo()->lastInsertId();
                        
                        
                        
                        DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia520,
                        'activity_source_id' =>$idactivitySource104,
                        'value' => 11182546,
                        ]);
                        $idevidenceFinancial104 = DB::getPdo()->lastInsertId();
                        
                        
                        
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia66,
                          'activity_source_id' =>$idactivitySource105,
                          'value' => 50000000,
                          ]);
                          $idevidenceFinancial105 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia520,
                          'activity_source_id' =>$idactivitySource106,
                          'value' => 20000000,
                          ]);
                          $idevidenceFinancial106 = DB::getPdo()->lastInsertId();
                          
                          
                          
                          DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia66,
                          'activity_source_id' =>$idactivitySource107,
                          'value' => 56700000,
                          ]);
                          $idevidenceFinancial107 = DB::getPdo()->lastInsertId();
                          
                          
                          
                          DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia520,
                          'activity_source_id' =>$idactivitySource108,
                          'value' => 110817312.71838,
                          ]);
                          $idevidenceFinancial108 = DB::getPdo()->lastInsertId();
                          
                          
                          
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia66,
                            'activity_source_id' =>$idactivitySource109,
                            'value' => 22299858.71838,
                            ]);
                            $idevidenceFinancial109 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity1,
                            'source_id' =>$idPlan58,
                            'value' => 161807038,
                            'goal' => 0,
                            'evidence_balance' => 161807038,
                            'age' => 3,
                            ]);
                            $idactivitySource110 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity2,
                            'source_id' =>$idPlan58,
                            'value' => 343712507,
                            'goal' => 0,
                            'evidence_balance' => 343712507,
                            'age' => 3,
                            ]);
                            $idactivitySource111 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity3,
                            'source_id' =>$idPlan58,
                            'value' => 814007796,
                            'goal' => 0,
                            'evidence_balance' => 814007796,
                            'age' => 3,
                            ]);
                            $idactivitySource112 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity5,
                            'source_id' =>$idPlan58,
                            'value' => 274500000,
                            'goal' => 0,
                            'evidence_balance' => 274500000,
                            'age' => 3,
                            ]);
                            $idactivitySource113 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity6,
                            'source_id' =>$idPlan58,
                            'value' => 180950000,
                            'goal' => 0,
                            'evidence_balance' => 180950000,
                            'age' => 3,
                            ]);
                            $idactivitySource114 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity7,
                            'source_id' =>$idPlan58,
                            'value' => 93750000,
                            'goal' => 0,
                            'evidence_balance' => 93750000,
                            'age' => 3,
                            ]);
                            $idactivitySource115 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity9,
                            'source_id' =>$idPlan58,
                            'value' => 16500000,
                            'goal' => 0,
                            'evidence_balance' => 16500000,
                            'age' => 3,
                            ]);
                            $idactivitySource116 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity11,
                            'source_id' =>$idPlan58,
                            'value' => 69300000,
                            'goal' => 0,
                            'evidence_balance' => 69300000,
                            'age' => 3,
                            ]);
                            $idactivitySource117 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity13,
                            'source_id' =>$idPlan58,
                            'value' => 538421666,
                            'goal' => 0,
                            'evidence_balance' => 538421666,
                            'age' => 3,
                            ]);
                            $idactivitySource118 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity14,
                            'source_id' =>$idPlan58,
                            'value' => 650000000,
                            'goal' => 0,
                            'evidence_balance' => 650000000,
                            'age' => 3,
                            ]);
                            $idactivitySource119 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity16,
                            'source_id' =>$idPlan58,
                            'value' => 60500000,
                            'goal' => 0,
                            'evidence_balance' => 60500000,
                            'age' => 3,
                            ]);
                            $idactivitySource120 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity17,
                            'source_id' =>$idPlan58,
                            'value' => 60000000,
                            'goal' => 0,
                            'evidence_balance' => 60000000,
                            'age' => 3,
                            ]);
                            $idactivitySource121 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity18,
                            'source_id' =>$idPlan58,
                            'value' => 196710867,
                            'goal' => 0,
                            'evidence_balance' => 196710867,
                            'age' => 3,
                            ]);
                            $idactivitySource122 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity19,
                            'source_id' =>$idPlan87,
                            'value' => 454600000,
                            'goal' => 0,
                            'evidence_balance' => 454600000,
                            'age' => 3,
                            ]);
                            $idactivitySource123 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity21,
                            'source_id' =>$idPlan87,
                            'value' => 43200000,
                            'goal' => 0,
                            'evidence_balance' => 43200000,
                            'age' => 3,
                            ]);
                            $idactivitySource124 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity23,
                            'source_id' =>$idPlan87,
                            'value' => 274800000,
                            'goal' => 0,
                            'evidence_balance' => 274800000,
                            'age' => 3,
                            ]);
                            $idactivitySource125 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity24,
                            'source_id' =>$idPlan87,
                            'value' => 17000000,
                            'goal' => 0,
                            'evidence_balance' => 17000000,
                            'age' => 3,
                            ]);
                            $idactivitySource126 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity28,
                            'source_id' =>$idPlan87,
                            'value' => 90746969,
                            'goal' => 0,
                            'evidence_balance' => 90746969,
                            'age' => 3,
                            ]);
                            $idactivitySource127 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity29,
                            'source_id' =>$idPlan87,
                            'value' => 98805292,
                            'goal' => 0,
                            'evidence_balance' => 98805292,
                            'age' => 3,
                            ]);
                            $idactivitySource128 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity31,
                            'source_id' =>$idPlan87,
                            'value' => 132212000,
                            'goal' => 0,
                            'evidence_balance' => 132212000,
                            'age' => 3,
                            ]);
                            $idactivitySource129 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity33,
                            'source_id' =>$idPlan87,
                            'value' => 46400000,
                            'goal' => 0,
                            'evidence_balance' => 46400000,
                            'age' => 3,
                            ]);
                            $idactivitySource130 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity34,
                            'source_id' =>$idPlan87,
                            'value' => 72600000,
                            'goal' => 0,
                            'evidence_balance' => 72600000,
                            'age' => 3,
                            ]);
                            $idactivitySource131 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity36,
                            'source_id' =>$idPlan87,
                            'value' => 34000000,
                            'goal' => 0,
                            'evidence_balance' => 34000000,
                            'age' => 3,
                            ]);
                            $idactivitySource132 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity37,
                            'source_id' =>$idPlan87,
                            'value' => 66000000,
                            'goal' => 0,
                            'evidence_balance' => 66000000,
                            'age' => 3,
                            ]);
                            $idactivitySource133 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity38,
                            'source_id' =>$idPlan87,
                            'value' => 169326129,
                            'goal' => 0,
                            'evidence_balance' => 169326129,
                            'age' => 3,
                            ]);
                            $idactivitySource134 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity39,
                            'source_id' =>$idPlan87,
                            'value' => 300700000,
                            'goal' => 0,
                            'evidence_balance' => 300700000,
                            'age' => 3,
                            ]);
                            $idactivitySource135 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity44,
                            'source_id' =>$idPlan87,
                            'value' => 85800000,
                            'goal' => 0,
                            'evidence_balance' => 85800000,
                            'age' => 3,
                            ]);
                            $idactivitySource136 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity45,
                            'source_id' =>$idPlan87,
                            'value' => 188942468,
                            'goal' => 0,
                            'evidence_balance' => 188942468,
                            'age' => 3,
                            ]);
                            $idactivitySource137 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity47,
                            'source_id' =>$idPlan87,
                            'value' => 211185283,
                            'goal' => 0,
                            'evidence_balance' => 211185283,
                            'age' => 3,
                            ]);
                            $idactivitySource138 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity48,
                            'source_id' =>$idPlan83,
                            'value' => 51700000,
                            'goal' => 0,
                            'evidence_balance' => 51700000,
                            'age' => 3,
                            ]);
                            $idactivitySource139 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity49,
                            'source_id' =>$idPlan83,
                            'value' => 233400000,
                            'goal' => 0,
                            'evidence_balance' => 233400000,
                            'age' => 3,
                            ]);
                            $idactivitySource140 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity50,
                            'source_id' =>$idPlan83,
                            'value' => 77000000,
                            'goal' => 0,
                            'evidence_balance' => 77000000,
                            'age' => 3,
                            ]);
                            $idactivitySource141 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity51,
                            'source_id' =>$idPlan83,
                            'value' => 72058360,
                            'goal' => 0,
                            'evidence_balance' => 72058360,
                            'age' => 3,
                            ]);
                            $idactivitySource142 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity52,
                            'source_id' =>$idPlan83,
                            'value' => 77000000,
                            'goal' => 0,
                            'evidence_balance' => 77000000,
                            'age' => 3,
                            ]);
                            $idactivitySource143 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity54,
                            'source_id' =>$idPlan83,
                            'value' => 135461640,
                            'goal' => 0,
                            'evidence_balance' => 135461640,
                            'age' => 3,
                            ]);
                            $idactivitySource144 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity56,
                            'source_id' =>$idPlan83,
                            'value' => 4000000,
                            'goal' => 0,
                            'evidence_balance' => 4000000,
                            'age' => 3,
                            ]);
                            $idactivitySource145 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity57,
                            'source_id' =>$idPlan83,
                            'value' => 43200000,
                            'goal' => 0,
                            'evidence_balance' => 43200000,
                            'age' => 3,
                            ]);
                            $idactivitySource146 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity58,
                            'source_id' =>$idPlan83,
                            'value' => 66500000,
                            'goal' => 0,
                            'evidence_balance' => 66500000,
                            'age' => 3,
                            ]);
                            $idactivitySource147 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity59,
                            'source_id' =>$idPlan83,
                            'value' => 119860000,
                            'goal' => 0,
                            'evidence_balance' => 119860000,
                            'age' => 3,
                            ]);
                            $idactivitySource148 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity60,
                            'source_id' =>$idPlan83,
                            'value' => 20500000,
                            'goal' => 0,
                            'evidence_balance' => 20500000,
                            'age' => 3,
                            ]);
                            $idactivitySource149 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity61,
                            'source_id' =>$idPlan83,
                            'value' => 155633813.58422,
                            'goal' => 0,
                            'evidence_balance' => 155633813.58422,
                            'age' => 3,
                            ]);
                            $idactivitySource150 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity62,
                            'source_id' =>$idPlan80,
                            'value' => 27000000,
                            'goal' => 0,
                            'evidence_balance' => 27000000,
                            'age' => 3,
                            ]);
                            $idactivitySource151 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity64,
                            'source_id' =>$idPlan80,
                            'value' => 42771803.58422,
                            'goal' => 0,
                            'evidence_balance' => 42771803.58422,
                            'age' => 3,
                            ]);
                            $idactivitySource152 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity65,
                            'source_id' =>$idPlan79,
                            'value' => 130721307.48422,
                            'goal' => 0,
                            'evidence_balance' => 130721307.48422,
                            'age' => 3,
                            ]);
                            $idactivitySource153 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity71,
                            'source_id' =>$idPlan63,
                            'value' => 15323568.48422,
                            'goal' => 0,
                            'evidence_balance' => 15323568.48422,
                            'age' => 3,
                            ]);
                            $idactivitySource157 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity72,
                            'source_id' =>$idPlan62,
                            'value' => 29432299.58422,
                            'goal' => 0,
                            'evidence_balance' => 29432299.58422,
                            'age' => 3,
                            ]);
                            $idactivitySource158 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity73,
                            'source_id' =>$idPlan68,
                            'value' => 9318265.08422001,
                            'goal' => 0,
                            'evidence_balance' => 9318265.08422001,
                            'age' => 3,
                            ]);
                            $idactivitySource159 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity18,
                              'source_id' =>$idPlan87,
                              'value' => 14263004,
                              'goal' => 0,
                              'evidence_balance' => 14263004,
                              'age' => 3,
                              ]);
                              $idactivitySource160 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity47,
                              'source_id' =>$idPlan83,
                              'value' => 158714717,
                              'goal' => 0,
                              'evidence_balance' => 158714717,
                              'age' => 3,
                              ]);
                              $idactivitySource161 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity61,
                              'source_id' =>$idPlan80,
                              'value' => 273819990.41578,
                              'goal' => 0,
                              'evidence_balance' => 273819990.41578,
                              'age' => 3,
                              ]);
                              $idactivitySource162 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity64,
                              'source_id' =>$idPlan79,
                              'value' => 112559196.41578,
                              'goal' => 0,
                              'evidence_balance' => 112559196.41578,
                              'age' => 3,
                              ]);
                              $idactivitySource163 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity65,
                              'source_id' =>$idPlan63,
                              'value' => 99278692.51578,
                              'goal' => 0,
                              'evidence_balance' => 99278692.51578,
                              'age' => 3,
                              ]);
                              $idactivitySource164 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity71,
                              'source_id' =>$idPlan62,
                              'value' => 35676431.51578,
                              'goal' => 0,
                              'evidence_balance' => 35676431.51578,
                              'age' => 3,
                              ]);
                              $idactivitySource165 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity72,
                              'source_id' =>$idPlan70,
                              'value' => 74334431.7,
                              'goal' => 0,
                              'evidence_balance' => 74334431.7,
                              'age' => 3,
                              ]);
                              $idactivitySource166 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity73,
                              'source_id' =>$idPlan65,
                              'value' => 29181734.91578,
                              'goal' => 0,
                              'evidence_balance' => 29181734.91578,
                              'age' => 3,
                              ]);
                              $idactivitySource167 = DB::getPdo()->lastInsertId();
                              
                              
                              
                              DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity72,
                              'source_id' =>$idPlan68,
                              'value' => 45130800.71578,
                              'goal' => 0,
                              'evidence_balance' => 45130800.71578,
                              'age' => 3,
                              ]);
                              $idactivitySource168 = DB::getPdo()->lastInsertId();
                              
                              
                              
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia88,
                                'activity_source_id' =>$idactivitySource110,
                                'value' => 151746317,
                                ]);
                                $idevidenceFinancial110 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia89,
                                'activity_source_id' =>$idactivitySource111,
                                'value' => 343712507,
                                ]);
                                $idevidenceFinancial111 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia90,
                                'activity_source_id' =>$idactivitySource112,
                                'value' => 801007796,
                                ]);
                                $idevidenceFinancial112 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia91,
                                'activity_source_id' =>$idactivitySource113,
                                'value' => 207142064,
                                ]);
                                $idevidenceFinancial113 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia92,
                                'activity_source_id' =>$idactivitySource114,
                                'value' => 180950000,
                                ]);
                                $idevidenceFinancial114 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia93,
                                'activity_source_id' =>$idactivitySource115,
                                'value' => 66500000,
                                ]);
                                $idevidenceFinancial115 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia94,
                                'activity_source_id' =>$idactivitySource116,
                                'value' => 16500000,
                                ]);
                                $idevidenceFinancial116 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia96,
                                'activity_source_id' =>$idactivitySource117,
                                'value' => 69300000,
                                ]);
                                $idevidenceFinancial117 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia97,
                                'activity_source_id' =>$idactivitySource118,
                                'value' => 530500000,
                                ]);
                                $idevidenceFinancial118 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia98,
                                'activity_source_id' =>$idactivitySource119,
                                'value' => 649839056,
                                ]);
                                $idevidenceFinancial119 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia99,
                                'activity_source_id' =>$idactivitySource120,
                                'value' => 60500000,
                                ]);
                                $idevidenceFinancial120 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia100,
                                'activity_source_id' =>$idactivitySource121,
                                'value' => 58591333,
                                ]);
                                $idevidenceFinancial121 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia101,
                                'activity_source_id' =>$idactivitySource122,
                                'value' => 196710867,
                                ]);
                                $idevidenceFinancial122 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia102,
                                'activity_source_id' =>$idactivitySource123,
                                'value' => 437954760,
                                ]);
                                $idevidenceFinancial123 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia103,
                                'activity_source_id' =>$idactivitySource124,
                                'value' => 43200000,
                                ]);
                                $idevidenceFinancial124 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia104,
                                'activity_source_id' =>$idactivitySource125,
                                'value' => 87000000,
                                ]);
                                $idevidenceFinancial125 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia105,
                                'activity_source_id' =>$idactivitySource126,
                                'value' => 17000000,
                                ]);
                                $idevidenceFinancial126 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia521,
                                'activity_source_id' =>$idactivitySource127,
                                'value' => 83910522,
                                ]);
                                $idevidenceFinancial127 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia522,
                                'activity_source_id' =>$idactivitySource128,
                                'value' => 23501490,
                                ]);
                                $idevidenceFinancial128 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia109,
                                'activity_source_id' =>$idactivitySource129,
                                'value' => 128932000,
                                ]);
                                $idevidenceFinancial129 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia110,
                                'activity_source_id' =>$idactivitySource130,
                                'value' => 46400000,
                                ]);
                                $idevidenceFinancial130 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia111,
                                'activity_source_id' =>$idactivitySource131,
                                'value' => 72600000,
                                ]);
                                $idevidenceFinancial131 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia113,
                                'activity_source_id' =>$idactivitySource132,
                                'value' => 34000000,
                                ]);
                                $idevidenceFinancial132 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia114,
                                'activity_source_id' =>$idactivitySource133,
                                'value' => 66000000,
                                ]);
                                $idevidenceFinancial133 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia115,
                                'activity_source_id' =>$idactivitySource134,
                                'value' => 169232432,
                                ]);
                                $idevidenceFinancial134 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia116,
                                'activity_source_id' =>$idactivitySource135,
                                'value' => 300700000,
                                ]);
                                $idevidenceFinancial135 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia523,
                                'activity_source_id' =>$idactivitySource136,
                                'value' => 85800000,
                                ]);
                                $idevidenceFinancial136 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia117,
                                'activity_source_id' =>$idactivitySource137,
                                'value' => 188942468,
                                ]);
                                $idevidenceFinancial137 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia118,
                                'activity_source_id' =>$idactivitySource138,
                                'value' => 211185283,
                                ]);
                                $idevidenceFinancial138 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia119,
                                'activity_source_id' =>$idactivitySource139,
                                'value' => 51700000,
                                ]);
                                $idevidenceFinancial139 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia120,
                                'activity_source_id' =>$idactivitySource140,
                                'value' => 233400000,
                                ]);
                                $idevidenceFinancial140 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia121,
                                'activity_source_id' =>$idactivitySource141,
                                'value' => 77000000,
                                ]);
                                $idevidenceFinancial141 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia122,
                                'activity_source_id' =>$idactivitySource142,
                                'value' => 72058360,
                                ]);
                                $idevidenceFinancial142 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia123,
                                'activity_source_id' =>$idactivitySource143,
                                'value' => 77000000,
                                ]);
                                $idevidenceFinancial143 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia124,
                                'activity_source_id' =>$idactivitySource144,
                                'value' => 132342000,
                                ]);
                                $idevidenceFinancial144 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia125,
                                'activity_source_id' =>$idactivitySource145,
                                'value' => 4000000,
                                ]);
                                $idevidenceFinancial145 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia126,
                                'activity_source_id' =>$idactivitySource146,
                                'value' => 43195710,
                                ]);
                                $idevidenceFinancial146 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia127,
                                'activity_source_id' =>$idactivitySource147,
                                'value' => 66500000,
                                ]);
                                $idevidenceFinancial147 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia128,
                                'activity_source_id' =>$idactivitySource148,
                                'value' => 114114181,
                                ]);
                                $idevidenceFinancial148 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia129,
                                'activity_source_id' =>$idactivitySource149,
                                'value' => 20500000,
                                ]);
                                $idevidenceFinancial149 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia524,
                                'activity_source_id' =>$idactivitySource150,
                                'value' => 155633813.58422,
                                ]);
                                $idevidenceFinancial150 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia130,
                                'activity_source_id' =>$idactivitySource151,
                                'value' => 20850000,
                                ]);
                                $idevidenceFinancial151 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia131,
                                'activity_source_id' =>$idactivitySource152,
                                'value' => 42771803.58422,
                                ]);
                                $idevidenceFinancial152 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia525,
                                'activity_source_id' =>$idactivitySource153,
                                'value' => 130721307.48422,
                                ]);
                                $idevidenceFinancial153 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia132,
                                'activity_source_id' =>$idactivitySource157,
                                'value' => 15323568.48422,
                                ]);
                                $idevidenceFinancial157 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia133,
                                'activity_source_id' =>$idactivitySource158,
                                'value' => 29432299.58422,
                                ]);
                                $idevidenceFinancial158 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia529,
                                'activity_source_id' =>$idactivitySource159,
                                'value' => 9318265.08422001,
                                ]);
                                $idevidenceFinancial159 = DB::getPdo()->lastInsertId();
                                
                                
                                
                                DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia101,
                                'activity_source_id' =>$idactivitySource160,
                                'value' => 14263004,
                                ]);
                                $idevidenceFinancial160 = DB::getPdo()->lastInsertId();
                                
                                
                                
                                DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia118,
                                'activity_source_id' =>$idactivitySource161,
                                'value' => 158714717,
                                ]);
                                $idevidenceFinancial161 = DB::getPdo()->lastInsertId();
                                
                                
                                
                                DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia524,
                                'activity_source_id' =>$idactivitySource162,
                                'value' => 273819990.41578,
                                ]);
                                $idevidenceFinancial162 = DB::getPdo()->lastInsertId();
                                
                                
                                
                                DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia131,
                                'activity_source_id' =>$idactivitySource163,
                                'value' => 112559196.41578,
                                ]);
                                $idevidenceFinancial163 = DB::getPdo()->lastInsertId();
                                
                                
                                
                                DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia525,
                                'activity_source_id' =>$idactivitySource164,
                                'value' => 99228692.51578,
                                ]);
                                $idevidenceFinancial164 = DB::getPdo()->lastInsertId();
                                
                                
                                
                                DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia132,
                                'activity_source_id' =>$idactivitySource165,
                                'value' => 35667744.51578,
                                ]);
                                $idevidenceFinancial165 = DB::getPdo()->lastInsertId();
                                
                                
                                
                                DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia133,
                                'activity_source_id' =>$idactivitySource166,
                                'value' => 74334431.7,
                                ]);
                                $idevidenceFinancial166 = DB::getPdo()->lastInsertId();
                                
                                
                                
                                DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia529,
                                'activity_source_id' =>$idactivitySource167,
                                'value' => 29181734.91578,
                                ]);
                                $idevidenceFinancial167 = DB::getPdo()->lastInsertId();
                                
                                
                                
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia133,
                                  'activity_source_id' =>$idactivitySource168,
                                  'value' => 24654800.71578,
                                  ]);
                                  $idevidenceFinancial168 = DB::getPdo()->lastInsertId();
                                  
                                  
      }
}

