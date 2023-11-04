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
 * Class HistoricPAI_CORPOCESAR_Seeder
 */
class HistoricPAI_CORPOCESAR_Seeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $pai=PAI::create([
      'name' => 'Plan de Acción Institucional 2016-2019 “Agua para el desarrollo sostenible”',
      'start_date' => '2016-01-01',
      'end_date' => '2019-12-31',
      'director_name' => 'Kaleb Villalobos Brochel',
      'group_id' => 19,
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
          'car_program' => 'PROGRAMA 1. GESTIÓN PARA EL DESARROLLO AMBIENTAL SOSTENIBLE A TRAVES DE LA RECUPERACIÓN Y CONSERVACIÓN DE LAS ECORREGIONES ESTRATÉGICAS.  ',
          'weighing' => 9,
          ]);
          $idprogram1 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA 2. RESILIENCIA Y ADAPTACIÓN ANTE EL CAMBIO CLIMÁTICO',
          'weighing' => 9,
          ]);
          $idprogram2 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA 3. CONSERVACIÓN Y RECUPERACIÓN DEL SUELO PARA EL DESARROLLO SOSTENIBLE',
          'weighing' => 9,
          ]);
          $idprogram3 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA 4. CONSERVACIÓN DE LA BIODIVERSIDAD PARA EL DESARROLLO SOSTENIBLE',
          'weighing' => 9,
          ]);
          $idprogram4 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA 5. GESTIÓN AMBIENTAL URBANO REGIONAL PARA EL DESARROLLO SOSTENIBLE DE CIUDADES',
          'weighing' => 9,
          ]);
          $idprogram5 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA 6. FORTALECIMIENTO DEL PROCESO DE TRÁMITES Y AUTORIZACIONES AMBIENTALES PARA EL DESARROLLO SOSTENIBLE',
          'weighing' => 9,
          ]);
          $idprogram6 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA 7.PLANIFICACIÓN DEL ORDENAMIENTO AMBIENTAL TERRITORIAL Y GESTIÓN DEL RIESGO PARA EL DESARROLLO SOSTENIBLE',
          'weighing' => 9,
          ]);
          $idprogram7 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA 8. GESTIÓN DEL CONOCIMIENTO E INFORMACIÓN AMBIENTAL PARA EL DESARROLLO SOSTENIBLE',
          'weighing' => 9,
          ]);
          $idprogram8 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA 9. EDUCACIÓN AMBIENTAL PARA EL DESARROLLO SOSTENIBLE',
          'weighing' => 9,
          ]);
          $idprogram9 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA 10. GESTIÓN AMBIENTAL CON  VISIÓN ANCESTRAL  INDÍGENA PARA EL DESARROLLO SOSTENIBLE ',
          'weighing' => 9,
          ]);
          $idprogram10 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA 11. DESARROLLO INSTITUCIONAL INTEGRAL',
          'weighing' => 10,
          ]);
          $idprogram11 = DB::getPdo()->lastInsertId();
          
          
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => 'Proyecto 1.1 Formulación y/o ajuste de POMCAS, implementación, evaluación y seguimiento de las cuencas priorizadas en el área de jurisdicción de Corpocesar.',
            'weighing' => 14,
            ]);
            $idproject1 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => 'Proyecto 1.2 Formulación e implementación de planes de manejo de microcuencas en el dpto. del Cesar.',
            'weighing' => 14,
            ]);
            $idproject2 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => 'Proyecto 1.3 Formulación e implementación de planes de manejo ambiental de acuíferos en el dpto. del Cesar.',
            'weighing' => 14,
            ]);
            $idproject3 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => 'Proyecto 1.4 Gestión e Implementación del PORH del río Cesar.',
            'weighing' => 14,
            ]);
            $idproject4 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => 'Proyecto 1.5 Control, seguimiento a los PSMVS y PUEAA aprobados por la Corporación e implementación de acciones para el uso eficiente y descontaminación del recurso hídrico en el dpto del Cesar.',
            'weighing' => 14,
            ]);
            $idproject5 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => 'Proyecto 1.6 Gestión para la formulación e implementación de los planes de ordenamiento del recurso hídrico en el departamento del Cesar.',
            'weighing' => 15,
            ]);
            $idproject6 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => 'Proyecto1.7 Control y seguimiento al programa de la tasa retributiva en la jurisdicción de Corpocesar.',
            'weighing' => 15,
            ]);
            $idproject7 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => 'Proyecto 2.1 Promoción y apoyo para la implementación de la política Nacional de Cambio Climático y gestión para la implementación de medidas de mitigación y adaptación en el Cesar.',
            'weighing' => 50,
            ]);
            $idproject8 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => 'Proyecto 2.2 Estudios de investigación y conocimiento para implementar acciones de mitigación apropiadas para la adaptación al cambio climático del sistema hídrico en el Cesar.',
            'weighing' => 50,
            ]);
            $idproject9 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram3,
            'project' => 'Proyecto 3.1 Identificación, Formulación e implementación de medidas integrales para la conservación y recuperación del recurso suelo.',
            'weighing' => 100,
            ]);
            $idproject10 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram4,
            'project' => 'Proyecto 4.1 Adopción, Gestión e Implementación del POF del Cesar.',
            'weighing' => 25,
            ]);
            $idproject11 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram4,
            'project' => 'Proyecto 4.2 Declaración de áreas protegidas y/o implementación de otras estrategias de conservación de la biodiversidad y formulación e implementación de planes de manejo de áreas protegidas en el dpto. del Cesar.
          ',
            'weighing' => 25,
            ]);
            $idproject12 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram4,
            'project' => 'Proyecto 4.3 Formulación e implementación de acciones prioritarias para el manejo de ecosistemas estratégicos en el dpto. del Cesar (páramos, bosque seco, humedales, otros) para su restauración, rehabilitación y preservación.',
            'weighing' => 25,
            ]);
            $idproject13 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram4,
            'project' => 'Proyecto 4.4 Fortalecimiento, gestión e implementación de medidas para el manejo de la fauna en el dpto del Cesar',
            'weighing' => 25,
            ]);
            $idproject14 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram5,
            'project' => 'Proyecto 5.1 Ajuste, diseño, gestión e implementación de la Política de Gestión Ambiental Urbano regional en el dpto. del Cesar ',
            'weighing' => 50,
            ]);
            $idproject15 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram5,
            'project' => 'Proyecto 5.2 Gestión para la promoción y/o construcción de infraestructuras ecológicas urbanas ',
            'weighing' => 50,
            ]);
            $idproject16 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram6,
            'project' => 'Proyecto 6.1 Optimización integral de los procesos operativos de trámites ambientales otorgados por la Corporación ',
            'weighing' => 33,
            ]);
            $idproject17 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram6,
            'project' => 'Proyecto 6.2 Implementación de un sistema de atención de quejas, contravenciones y sanciones ambientales.',
            'weighing' => 33,
            ]);
            $idproject18 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram6,
            'project' => 'Proyecto 6.3 Fortalecimiento interinstitucional sostenible del ejercicio de la autoridad ambiental regional  (seguimiento, control y vigilancia).',
            'weighing' => 34,
            ]);
            $idproject19 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram7,
            'project' => 'Proyecto 7.1 Evaluación y ajuste de determinantes para el OT e implementación de un sistema de asesoría, seguimiento, evaluación y control a la incorporación efectiva de la determinantes y la gestión del riesgo en los POT´s del dpto del Cesar.',
            'weighing' => 50,
            ]);
            $idproject20 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram7,
            'project' => 'Proyecto 7.2 Estudios de conocimiento del riesgo ambiental en el territorio y gestión para la reducción y apoyo al manejo de desastres en el dpto. del Cesar.',
            'weighing' => 50,
            ]);
            $idproject21 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram8,
            'project' => 'Proyecto 8.1 Revisión y/o ajuste e implementación de la red hidrometeorológica en la jurisdicción de Corpocesar.',
            'weighing' => 25,
            ]);
            $idproject22 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram8,
            'project' => 'Proyecto 8.2 Diseño, implementación y operación de las redes de monitoreo de los recursos naturales en el área de jurisdicción de la Corporación.',
            'weighing' => 25,
            ]);
            $idproject23 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram8,
            'project' => 'Proyecto 8.3 Implementación del Sistema de información para la Gestión Ambiental – SIPGA (SIAC-SIG).',
            'weighing' => 25,
            ]);
            $idproject24 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram8,
            'project' => 'Proyecto 8.4 Ajuste, actualización y adopción del PGAR/PLANEAR',
            'weighing' => 25,
            ]);
            $idproject25 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram9,
            'project' => 'Proyecto 9.1 Fortalecimiento y optimización del programa transversal de Educación Ambiental de la Corporación, armonizado a la Política Nacional de Educación Ambiental de Colombia',
            'weighing' => 100,
            ]);
            $idproject26 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram10,
            'project' => 'Proyecto 10.1  Implementación de estrategias para el manejo ambiental en territorios indígenas de la Sierra Nevada de Santa Marta y Serranía de Perijá,   incorporando la cosmovisión de los pueblos indígenas  y  el enfoque diferencial.',
            'weighing' => 50,
            ]);
            $idproject27 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram10,
            'project' => 'Proyecto 10.2 Implementación de estrategias para el manejo ambiental en comunidades afrodescendientes,  otras minorias etnicas, y/o poblaciones victimas del conflicto armado.',
            'weighing' => 50,
            ]);
            $idproject28 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram11,
            'project' => 'Proyecto 11.1 Diseño e implementación de políticas efectivas para la gestión de ingresos y sostenibilidad financiera de las competencias misionales de la Corporación.',
            'weighing' => 25,
            ]);
            $idproject29 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram11,
            'project' => 'Proyecto 11.2 Organización integral de la institucionalidad.',
            'weighing' => 25,
            ]);
            $idproject30 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram11,
            'project' => 'Proyecto 11.3 Fortalecimiento intrainstitucional de la estructura organizacional regional de la Corporación ',
            'weighing' => 25,
            ]);
            $idproject31 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram11,
            'project' => 'Proyecto 11.4 Fortalecimiento e implementación de las TIC´s.',
            'weighing' => 25,
            ]);
            $idproject32 = DB::getPdo()->lastInsertId();
      
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
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject26,
              'objective' => 'Objetivo 26',
              'weighing' => 100,
              ]);
              $idobjective26 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject27,
              'objective' => 'Objetivo 27',
              'weighing' => 100,
              ]);
              $idobjective27 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject28,
              'objective' => 'Objetivo 28',
              'weighing' => 100,
              ]);
              $idobjective28 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject29,
              'objective' => 'Objetivo 29',
              'weighing' => 100,
              ]);
              $idobjective29 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject30,
              'objective' => 'Objetivo 30',
              'weighing' => 100,
              ]);
              $idobjective30 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject31,
              'objective' => 'Objetivo 31',
              'weighing' => 100,
              ]);
              $idobjective31 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject32,
              'objective' => 'Objetivo 32',
              'weighing' => 100,
              ]);
              $idobjective32 = DB::getPdo()->lastInsertId();

      
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => null,
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
                'weighing' => 20,
                ]);
                $idobjectiveproduct1 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 0,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 2,
                'goal_1_balance' => 0,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 2,
                'total_goal' => 4,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 20,
                ]);
                $idobjectiveproduct2 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 0,
                'goal_2' => 2,
                'goal_3' => 6,
                'goal_4' => 6,
                'goal_1_balance' => 0,
                'goal_2_balance' => 2,
                'goal_3_balance' => 6,
                'goal_4_balance' => 6,
                'total_goal' => 14,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 20,
                ]);
                $idobjectiveproduct3 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 0,
                'goal_2' => 2,
                'goal_3' => 2,
                'goal_4' => 2,
                'goal_1_balance' => 0,
                'goal_2_balance' => 2,
                'goal_3_balance' => 2,
                'goal_4_balance' => 2,
                'total_goal' => 6,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 20,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 19,
                ]);
                $idobjectiveproduct5 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 1,
                ]);
                $idobjectiveproduct6 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct7 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => null,
                'product_other' => 'Producto 2',
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
                'weighing' => 33,
                ]);
                $idobjectiveproduct8 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct9 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 1,
                ]);
                $idobjectiveproduct10 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct11 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct12 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct13 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 1,
                ]);
                $idobjectiveproduct14 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 99,
                ]);
                $idobjectiveproduct15 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 1,
                ]);
                $idobjectiveproduct16 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 20,
                ]);
                $idobjectiveproduct17 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 20,
                ]);
                $idobjectiveproduct18 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 2,
                'goal_2' => 5,
                'goal_3' => 10,
                'goal_4' => 10,
                'goal_1_balance' => 2,
                'goal_2_balance' => 5,
                'goal_3_balance' => 10,
                'goal_4_balance' => 10,
                'total_goal' => 27,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 20,
                ]);
                $idobjectiveproduct19 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 20,
                ]);
                $idobjectiveproduct20 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 19,
                ]);
                $idobjectiveproduct21 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 1,
                ]);
                $idobjectiveproduct22 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective6,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 50,
                ]);
                $idobjectiveproduct23 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective6,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 100,
                'goal_4' => 100,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 100,
                'goal_4_balance' => 100,
                'total_goal' => 200,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 49,
                ]);
                $idobjectiveproduct24 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective6,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 1,
                ]);
                $idobjectiveproduct25 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
                'product_id' => null,
                'product_other' => 'Producto 1',
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
                'weighing' => 25,
                ]);
                $idobjectiveproduct26 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 1,
                'goal_4' => 0,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 1,
                'goal_4_balance' => 0,
                'total_goal' => 1,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 25,
                ]);
                $idobjectiveproduct27 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
                'product_id' => null,
                'product_other' => 'Producto 3',
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
                'weighing' => 25,
                ]);
                $idobjectiveproduct28 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 24,
                ]);
                $idobjectiveproduct29 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 1,
                ]);
                $idobjectiveproduct30 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 20,
                ]);
                $idobjectiveproduct31 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 1,
                'goal_2' => 100,
                'goal_3' => 100,
                'goal_4' => 100,
                'goal_1_balance' => 1,
                'goal_2_balance' => 100,
                'goal_3_balance' => 100,
                'goal_4_balance' => 100,
                'total_goal' => 301,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 20,
                ]);
                $idobjectiveproduct32 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 20,
                ]);
                $idobjectiveproduct33 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
                'product_id' => null,
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
                $idobjectiveproduct34 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 19,
                ]);
                $idobjectiveproduct35 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
                'product_id' => null,
                'product_other' => 'Producto 6',
                'goal_1' => 1,
                'goal_2' => 100,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 100,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 103,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 1,
                ]);
                $idobjectiveproduct36 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 0.5,
                'goal_2' => 1.5,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 0.5,
                'goal_2_balance' => 1.5,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 2,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 50,
                ]);
                $idobjectiveproduct37 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 0,
                'goal_2' => 100,
                'goal_3' => 100,
                'goal_4' => 100,
                'goal_1_balance' => 0,
                'goal_2_balance' => 100,
                'goal_3_balance' => 100,
                'goal_4_balance' => 100,
                'total_goal' => 300,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 49,
                ]);
                $idobjectiveproduct38 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 1,
                ]);
                $idobjectiveproduct39 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective10,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 0,
                'goal_2' => 10,
                'goal_3' => 90,
                'goal_4' => 0,
                'goal_1_balance' => 0,
                'goal_2_balance' => 10,
                'goal_3_balance' => 90,
                'goal_4_balance' => 0,
                'total_goal' => 100,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct40 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct41 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct42 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective10,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 20,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 20,
                'total_goal' => 23,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 1,
                ]);
                $idobjectiveproduct43 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective11,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 50,
                ]);
                $idobjectiveproduct44 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective11,
                'product_id' => null,
                'product_other' => 'Producto 2',
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
                'weighing' => 49,
                ]);
                $idobjectiveproduct45 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 1,
                ]);
                $idobjectiveproduct46 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct47 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct48 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct49 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 1,
                ]);
                $idobjectiveproduct50 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective13,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct51 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective13,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct52 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective13,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct53 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 1,
                ]);
                $idobjectiveproduct54 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 1,
                'goal_2' => 100,
                'goal_3' => 100,
                'goal_4' => 100,
                'goal_1_balance' => 1,
                'goal_2_balance' => 100,
                'goal_3_balance' => 100,
                'goal_4_balance' => 100,
                'total_goal' => 301,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct55 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 0,
                'goal_2' => 1,
                'goal_3' => 3,
                'goal_4' => 3,
                'goal_1_balance' => 0,
                'goal_2_balance' => 1,
                'goal_3_balance' => 3,
                'goal_4_balance' => 3,
                'total_goal' => 7,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct56 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct57 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 1,
                ]);
                $idobjectiveproduct58 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective15,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 12,
                ]);
                $idobjectiveproduct59 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective15,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 20,
                'goal_2' => 0,
                'goal_3' => 40,
                'goal_4' => 10,
                'goal_1_balance' => 20,
                'goal_2_balance' => 0,
                'goal_3_balance' => 40,
                'goal_4_balance' => 10,
                'total_goal' => 70,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 11,
                ]);
                $idobjectiveproduct60 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective15,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 100,
                'goal_2' => 0,
                'goal_3' => 100,
                'goal_4' => 100,
                'goal_1_balance' => 100,
                'goal_2_balance' => 0,
                'goal_3_balance' => 100,
                'goal_4_balance' => 100,
                'total_goal' => 300,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 11,
                ]);
                $idobjectiveproduct61 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective15,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 0,
                'goal_2' => 1,
                'goal_3' => 5,
                'goal_4' => 15,
                'goal_1_balance' => 0,
                'goal_2_balance' => 1,
                'goal_3_balance' => 5,
                'goal_4_balance' => 15,
                'total_goal' => 21,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 11,
                ]);
                $idobjectiveproduct62 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective15,
                'product_id' => null,
                'product_other' => 'Producto 5',
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
                'weighing' => 11,
                ]);
                $idobjectiveproduct63 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective15,
                'product_id' => null,
                'product_other' => 'Producto 6',
                'goal_1' => 2,
                'goal_2' => 0,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 2,
                'goal_2_balance' => 0,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 11,
                ]);
                $idobjectiveproduct64 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective15,
                'product_id' => null,
                'product_other' => 'Producto 7',
                'goal_1' => 100,
                'goal_2' => 0,
                'goal_3' => 100,
                'goal_4' => 0,
                'goal_1_balance' => 100,
                'goal_2_balance' => 0,
                'goal_3_balance' => 100,
                'goal_4_balance' => 0,
                'total_goal' => 200,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 11,
                ]);
                $idobjectiveproduct65 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective15,
                'product_id' => null,
                'product_other' => 'Producto 8',
                'goal_1' => 100,
                'goal_2' => 1,
                'goal_3' => 100,
                'goal_4' => 100,
                'goal_1_balance' => 100,
                'goal_2_balance' => 1,
                'goal_3_balance' => 100,
                'goal_4_balance' => 100,
                'total_goal' => 301,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 11,
                ]);
                $idobjectiveproduct66 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective15,
                'product_id' => null,
                'product_other' => 'Producto 9',
                'goal_1' => 0,
                'goal_2' => 2,
                'goal_3' => 100,
                'goal_4' => 100,
                'goal_1_balance' => 0,
                'goal_2_balance' => 2,
                'goal_3_balance' => 100,
                'goal_4_balance' => 100,
                'total_goal' => 202,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 11,
                ]);
                $idobjectiveproduct67 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective15,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 1,
                ]);
                $idobjectiveproduct68 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective16,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 100,
                'goal_2' => 2,
                'goal_3' => 100,
                'goal_4' => 100,
                'goal_1_balance' => 100,
                'goal_2_balance' => 2,
                'goal_3_balance' => 100,
                'goal_4_balance' => 100,
                'total_goal' => 302,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct69 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective16,
                'product_id' => null,
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
                'weighing' => 33,
                ]);
                $idobjectiveproduct70 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective16,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 0,
                'goal_2' => 25,
                'goal_3' => 100,
                'goal_4' => 100,
                'goal_1_balance' => 0,
                'goal_2_balance' => 25,
                'goal_3_balance' => 100,
                'goal_4_balance' => 100,
                'total_goal' => 225,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct71 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective16,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 1,
                'goal_2' => 9,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 9,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 12,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 1,
                ]);
                $idobjectiveproduct72 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective17,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 100,
                'goal_2' => 1,
                'goal_3' => 100,
                'goal_4' => 100,
                'goal_1_balance' => 100,
                'goal_2_balance' => 1,
                'goal_3_balance' => 100,
                'goal_4_balance' => 100,
                'total_goal' => 301,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct73 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective17,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 5,
                'goal_2' => 1,
                'goal_3' => 10,
                'goal_4' => 20,
                'goal_1_balance' => 5,
                'goal_2_balance' => 1,
                'goal_3_balance' => 10,
                'goal_4_balance' => 20,
                'total_goal' => 36,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct74 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective17,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 80,
                'goal_2' => 1,
                'goal_3' => 100,
                'goal_4' => 100,
                'goal_1_balance' => 80,
                'goal_2_balance' => 1,
                'goal_3_balance' => 100,
                'goal_4_balance' => 100,
                'total_goal' => 281,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct75 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 1,
                ]);
                $idobjectiveproduct76 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective18,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 50,
                ]);
                $idobjectiveproduct77 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective18,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 50,
                'goal_2' => 29,
                'goal_3' => 100,
                'goal_4' => 100,
                'goal_1_balance' => 50,
                'goal_2_balance' => 29,
                'goal_3_balance' => 100,
                'goal_4_balance' => 100,
                'total_goal' => 279,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 49,
                ]);
                $idobjectiveproduct78 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 1,
                ]);
                $idobjectiveproduct79 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective19,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 100,
                'goal_2' => 2,
                'goal_3' => 80,
                'goal_4' => 100,
                'goal_1_balance' => 100,
                'goal_2_balance' => 2,
                'goal_3_balance' => 80,
                'goal_4_balance' => 100,
                'total_goal' => 282,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct80 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective19,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 100,
                'goal_2' => 0,
                'goal_3' => 80,
                'goal_4' => 100,
                'goal_1_balance' => 100,
                'goal_2_balance' => 0,
                'goal_3_balance' => 80,
                'goal_4_balance' => 100,
                'total_goal' => 280,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct81 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective19,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 100,
                'goal_2' => 0,
                'goal_3' => 80,
                'goal_4' => 100,
                'goal_1_balance' => 100,
                'goal_2_balance' => 0,
                'goal_3_balance' => 80,
                'goal_4_balance' => 100,
                'total_goal' => 280,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct82 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 1,
                ]);
                $idobjectiveproduct83 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective20,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct84 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective20,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 100,
                'goal_2' => 20,
                'goal_3' => 100,
                'goal_4' => 0,
                'goal_1_balance' => 100,
                'goal_2_balance' => 20,
                'goal_3_balance' => 100,
                'goal_4_balance' => 0,
                'total_goal' => 220,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct85 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective20,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 0,
                'goal_2' => 1,
                'goal_3' => 25,
                'goal_4' => 25,
                'goal_1_balance' => 0,
                'goal_2_balance' => 1,
                'goal_3_balance' => 25,
                'goal_4_balance' => 25,
                'total_goal' => 51,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct86 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective20,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 1,
                'goal_2' => 100,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 100,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 103,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 1,
                ]);
                $idobjectiveproduct87 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective21,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 50,
                ]);
                $idobjectiveproduct88 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective21,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 49,
                ]);
                $idobjectiveproduct89 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 1,
                ]);
                $idobjectiveproduct90 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective22,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 50,
                ]);
                $idobjectiveproduct91 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective22,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 100,
                'goal_4' => 100,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 100,
                'goal_4_balance' => 100,
                'total_goal' => 200,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 49,
                ]);
                $idobjectiveproduct92 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective22,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 26,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 26,
                'total_goal' => 29,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 1,
                ]);
                $idobjectiveproduct93 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective23,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct94 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective23,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 1,
                'goal_4' => 0,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 1,
                'goal_4_balance' => 0,
                'total_goal' => 1,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct95 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective23,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct96 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 1,
                ]);
                $idobjectiveproduct97 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective24,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 100,
                'goal_4' => 100,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 100,
                'goal_4_balance' => 100,
                'total_goal' => 200,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 99,
                ]);
                $idobjectiveproduct98 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective24,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 1,
                ]);
                $idobjectiveproduct99 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective25,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 0,
                'goal_2' => 100,
                'goal_3' => 100,
                'goal_4' => 0,
                'goal_1_balance' => 0,
                'goal_2_balance' => 100,
                'goal_3_balance' => 100,
                'goal_4_balance' => 0,
                'total_goal' => 200,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 99,
                ]);
                $idobjectiveproduct100 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective25,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 1,
                ]);
                $idobjectiveproduct101 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective26,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 20,
                ]);
                $idobjectiveproduct102 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective26,
                'product_id' => null,
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
                'weighing' => 20,
                ]);
                $idobjectiveproduct103 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective26,
                'product_id' => null,
                'product_other' => 'Producto 3',
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
                'weighing' => 20,
                ]);
                $idobjectiveproduct104 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective26,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 6,
                'goal_2' => 6,
                'goal_3' => 6,
                'goal_4' => 8,
                'goal_1_balance' => 6,
                'goal_2_balance' => 6,
                'goal_3_balance' => 6,
                'goal_4_balance' => 8,
                'total_goal' => 26,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 20,
                ]);
                $idobjectiveproduct105 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective26,
                'product_id' => null,
                'product_other' => 'Producto 5',
                'goal_1' => 6,
                'goal_2' => 6,
                'goal_3' => 6,
                'goal_4' => 8,
                'goal_1_balance' => 6,
                'goal_2_balance' => 6,
                'goal_3_balance' => 6,
                'goal_4_balance' => 8,
                'total_goal' => 26,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 19,
                ]);
                $idobjectiveproduct106 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective26,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 1,
                ]);
                $idobjectiveproduct107 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective27,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 2,
                'goal_2' => 1,
                'goal_3' => 0,
                'goal_4' => 2,
                'goal_1_balance' => 2,
                'goal_2_balance' => 1,
                'goal_3_balance' => 0,
                'goal_4_balance' => 2,
                'total_goal' => 5,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 10,
                ]);
                $idobjectiveproduct108 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective27,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 0,
                'goal_2' => 2,
                'goal_3' => 2,
                'goal_4' => 2,
                'goal_1_balance' => 0,
                'goal_2_balance' => 2,
                'goal_3_balance' => 2,
                'goal_4_balance' => 2,
                'total_goal' => 6,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 10,
                ]);
                $idobjectiveproduct109 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective27,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 0,
                'goal_2' => 2,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 0,
                'goal_2_balance' => 2,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 10,
                ]);
                $idobjectiveproduct110 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective27,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 0,
                'goal_2' => 2,
                'goal_3' => 2,
                'goal_4' => 2,
                'goal_1_balance' => 0,
                'goal_2_balance' => 2,
                'goal_3_balance' => 2,
                'goal_4_balance' => 2,
                'total_goal' => 6,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 10,
                ]);
                $idobjectiveproduct111 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective27,
                'product_id' => null,
                'product_other' => 'Producto 5',
                'goal_1' => 0,
                'goal_2' => 500,
                'goal_3' => 0,
                'goal_4' => 966,
                'goal_1_balance' => 0,
                'goal_2_balance' => 500,
                'goal_3_balance' => 0,
                'goal_4_balance' => 966,
                'total_goal' => 1466,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 10,
                ]);
                $idobjectiveproduct112 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective27,
                'product_id' => null,
                'product_other' => 'Producto 6',
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
                'weighing' => 10,
                ]);
                $idobjectiveproduct113 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective27,
                'product_id' => null,
                'product_other' => 'Producto 7',
                'goal_1' => 0,
                'goal_2' => 5,
                'goal_3' => 5,
                'goal_4' => 5,
                'goal_1_balance' => 0,
                'goal_2_balance' => 5,
                'goal_3_balance' => 5,
                'goal_4_balance' => 5,
                'total_goal' => 15,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 10,
                ]);
                $idobjectiveproduct114 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective27,
                'product_id' => null,
                'product_other' => 'Producto 8',
                'goal_1' => 0,
                'goal_2' => 50,
                'goal_3' => 50,
                'goal_4' => 50,
                'goal_1_balance' => 0,
                'goal_2_balance' => 50,
                'goal_3_balance' => 50,
                'goal_4_balance' => 50,
                'total_goal' => 150,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 10,
                ]);
                $idobjectiveproduct115 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective27,
                'product_id' => null,
                'product_other' => 'Producto 9',
                'goal_1' => 0,
                'goal_2' => 2,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 0,
                'goal_2_balance' => 2,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 4,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 10,
                ]);
                $idobjectiveproduct116 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective27,
                'product_id' => null,
                'product_other' => 'Producto 10',
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
                'weighing' => 9,
                ]);
                $idobjectiveproduct117 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective27,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 1,
                ]);
                $idobjectiveproduct118 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective28,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct119 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective28,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct120 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective28,
                'product_id' => null,
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
                'weighing' => 33,
                ]);
                $idobjectiveproduct121 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective28,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 100,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 100,
                'total_goal' => 103,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 1,
                ]);
                $idobjectiveproduct122 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective29,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 60,
                'goal_2' => 65,
                'goal_3' => 70,
                'goal_4' => 70,
                'goal_1_balance' => 60,
                'goal_2_balance' => 65,
                'goal_3_balance' => 70,
                'goal_4_balance' => 70,
                'total_goal' => 265,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 15,
                ]);
                $idobjectiveproduct124 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective29,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 80,
                'goal_2' => 90,
                'goal_3' => 95,
                'goal_4' => 95,
                'goal_1_balance' => 80,
                'goal_2_balance' => 90,
                'goal_3_balance' => 95,
                'goal_4_balance' => 95,
                'total_goal' => 360,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 14,
                ]);
                $idobjectiveproduct125 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective29,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 14,
                ]);
                $idobjectiveproduct126 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective29,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 40,
                'goal_2' => 45,
                'goal_3' => 50,
                'goal_4' => 60,
                'goal_1_balance' => 40,
                'goal_2_balance' => 45,
                'goal_3_balance' => 50,
                'goal_4_balance' => 60,
                'total_goal' => 195,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 14,
                ]);
                $idobjectiveproduct127 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective29,
                'product_id' => null,
                'product_other' => 'Producto 5',
                'goal_1' => 0,
                'goal_2' => 20,
                'goal_3' => 40,
                'goal_4' => 60,
                'goal_1_balance' => 0,
                'goal_2_balance' => 20,
                'goal_3_balance' => 40,
                'goal_4_balance' => 60,
                'total_goal' => 120,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 14,
                ]);
                $idobjectiveproduct128 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective29,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 14,
                ]);
                $idobjectiveproduct129 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective29,
                'product_id' => null,
                'product_other' => 'Producto 7',
                'goal_1' => 30,
                'goal_2' => 60,
                'goal_3' => 70,
                'goal_4' => 80,
                'goal_1_balance' => 30,
                'goal_2_balance' => 60,
                'goal_3_balance' => 70,
                'goal_4_balance' => 80,
                'total_goal' => 240,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 14,
                ]);
                $idobjectiveproduct130 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective29,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 1,
                ]);
                $idobjectiveproduct131 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective30,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 17,
                ]);
                $idobjectiveproduct132 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective30,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 17,
                ]);
                $idobjectiveproduct133 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective30,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 17,
                ]);
                $idobjectiveproduct134 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective30,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 0,
                'goal_2' => 100,
                'goal_3' => 100,
                'goal_4' => 100,
                'goal_1_balance' => 0,
                'goal_2_balance' => 100,
                'goal_3_balance' => 100,
                'goal_4_balance' => 100,
                'total_goal' => 300,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 16,
                ]);
                $idobjectiveproduct135 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective30,
                'product_id' => null,
                'product_other' => 'Producto 5',
                'goal_1' => 1,
                'goal_2' => 2,
                'goal_3' => 3,
                'goal_4' => 4,
                'goal_1_balance' => 1,
                'goal_2_balance' => 2,
                'goal_3_balance' => 3,
                'goal_4_balance' => 4,
                'total_goal' => 10,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 16,
                ]);
                $idobjectiveproduct136 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective30,
                'product_id' => null,
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
                'weighing' => 16,
                ]);
                $idobjectiveproduct137 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective30,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 1,
                ]);
                $idobjectiveproduct138 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective31,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 17,
                ]);
                $idobjectiveproduct139 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective31,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 17,
                ]);
                $idobjectiveproduct140 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective31,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 17,
                ]);
                $idobjectiveproduct141 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective31,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 16,
                ]);
                $idobjectiveproduct142 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective31,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 16,
                ]);
                $idobjectiveproduct143 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective31,
                'product_id' => null,
                'product_other' => 'Producto 6',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 1,
                'goal_4' => 0,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 1,
                'goal_4_balance' => 0,
                'total_goal' => 1,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 16,
                ]);
                $idobjectiveproduct144 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective31,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 1,
                ]);
                $idobjectiveproduct145 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective32,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 70,
                'goal_2' => 80,
                'goal_3' => 90,
                'goal_4' => 100,
                'goal_1_balance' => 70,
                'goal_2_balance' => 80,
                'goal_3_balance' => 90,
                'goal_4_balance' => 100,
                'total_goal' => 340,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 17,
                ]);
                $idobjectiveproduct146 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective32,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 50,
                'goal_2' => 80,
                'goal_3' => 100,
                'goal_4' => 100,
                'goal_1_balance' => 50,
                'goal_2_balance' => 80,
                'goal_3_balance' => 100,
                'goal_4_balance' => 100,
                'total_goal' => 330,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 17,
                ]);
                $idobjectiveproduct147 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective32,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 17,
                ]);
                $idobjectiveproduct148 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective32,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 0,
                'goal_2' => 100,
                'goal_3' => 100,
                'goal_4' => 100,
                'goal_1_balance' => 0,
                'goal_2_balance' => 100,
                'goal_3_balance' => 100,
                'goal_4_balance' => 100,
                'total_goal' => 300,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 16,
                ]);
                $idobjectiveproduct149 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective32,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 16,
                ]);
                $idobjectiveproduct150 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective32,
                'product_id' => null,
                'product_other' => 'Producto 6',
                'goal_1' => 0,
                'goal_2' => 100,
                'goal_3' => 100,
                'goal_4' => 100,
                'goal_1_balance' => 0,
                'goal_2_balance' => 100,
                'goal_3_balance' => 100,
                'goal_4_balance' => 100,
                'total_goal' => 300,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 16,
                ]);
                $idobjectiveproduct151 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective32,
                'product_id' => null,
                'product_other' => 'Producto 7',
                'goal_1' => 1,
                'goal_2' => 2,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 2,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 5,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 1,
                ]);
                $idobjectiveproduct151 = DB::getPdo()->lastInsertId();
                
        
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct1,
                  'name' => '1.1.1 Gestión de recursos y ejecución de fases de formulación de nuevos POMCAS de las cuencas priorizadas en la jurisdicción de Corpocesar (previo ajuste de la Res 0696 del 2012, según Decreto 1640 de 2012)',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 4,
                  'goal' => 4,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity1 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct2,
                  'name' => '1.1.2 Gestión de recursos y ejecución de fases de ajuste de POMCAS formulados en la jurisdicción de Corpocesar (Magiriaimo)',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 2,
                  'goal' => 4,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity2 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct3,
                  'name' => '1.1.3 Gestión e Implementación de acciones de POMCA´s adoptados',
                  'goal_1' => 0,
                  'goal_2' => 2,
                  'goal_3' => 6,
                  'goal_4' => 6,
                  'goal' => 14,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity3 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct4,
                  'name' => '1.1.4 Implementación de acciones prioritarias en cuencas priorizadas y/o en ordenación.',
                  'goal_1' => 0,
                  'goal_2' => 2,
                  'goal_3' => 2,
                  'goal_4' => 2,
                  'goal' => 6,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity4 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct5,
                  'name' => '1.1.5 Apoyo logístico para seguimiento a procesos de formulación e implementación de POMCAS',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 19,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity5 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct6,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity6 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct7,
                  'name' => '1.2.1 Priorización de microcuencas',
                  'goal_1' => 1,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity7 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct8,
                  'name' => '1.2.2 Formulación de planes de manejo de las microcuencas priorizadas en la jurisdicción de Corpocesar.',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 1,
                  'goal' => 2,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity8 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct9,
                  'name' => '1.2.3 Implementación de acciones de planes de manejo de microcuencas  formulados.',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 2,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity9 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct10,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity10 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct11,
                  'name' => '1.3.1 Priorización de acuiferos',
                  'goal_1' => 1,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity11 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct12,
                  'name' => '1.3.2 Formulación y adopción de plan de manejo ambiental departamental de acuiferos ',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity12 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct13,
                  'name' => '1.3.3 Implementación de acciones de plan de manejo ambiental departamental de acuiferos  formulados y/o ejecución de acciones prioritarias de gestión de acuiferos.',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity13 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct14,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity14 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct15,
                  'name' => '1.4.1 Adopción y gestión para la Implementación de acciones del PORH del río Cesar',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity15 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct16,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity16 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct17,
                  'name' => '1.5.1 Control y seguimiento a los PSMVS',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity17 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct18,
                  'name' => '1.5.2 Control y seguimiento a los PUEAA',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity18 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct19,
                  'name' => '1.5.3 Control y seguimiento a concesiones y usuarios del recurso hídrico ',
                  'goal_1' => 2,
                  'goal_2' => 5,
                  'goal_3' => 10,
                  'goal_4' => 10,
                  'goal' => 27,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity19 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct20,
                  'name' => '1.5.4 Actualización y registro de usuarios en el SIRH ',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity20 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct21,
                  'name' => '1.5.5 Apoyo a la implementación de los PSMV´s para disminuir la contaminación hídrica (medidas estructurales y no estructurales',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 19,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity21 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct22,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity22 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct23,
                  'name' => '1.6.1 Priorización de corrientes objeto de PORH',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity23 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct24,
                  'name' => '1.6.2 Formulación en implementación de acciones de PORH de corrientes priorizadas',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 200,
                  'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity24 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct25,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity25 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct26,
                  'name' => '1.7.1 Actualización de las metas de cargas contaminantes',
                  'goal_1' => 1,
                  'goal_2' => 0,
                  'goal_3' => 1,
                  'goal_4' => 0,
                  'goal' => 2,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity26 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct27,
                  'name' => '1.7.2 Formulación de los objetivos de calidad de las corrientes superficiales del dpto del Cesar',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 1,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity27 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct28,
                  'name' => '1.7.3 Seguimiento a los usuarios de tasa retributiva',
                  'goal_1' => 10,
                  'goal_2' => 10,
                  'goal_3' => 10,
                  'goal_4' => 10,
                  'goal' => 40,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity28 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct29,
                  'name' => '1.7.4 Control a los vertimientos de aguas residuales domésticas y no domésticas que vierten de manera directa e indirecta a las fuentes hídricas.',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 24,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity29 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct30,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity30 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct31,
                  'name' => '2.1.1 Promoción y apoyo a los Nodos Regionales de Cambio Climático',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity31 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct32,
                  'name' => '2.1.2 Promoción de acciones con actores regionales para la formulación e implementación del Plan Departamental de Cambio Climático – PICC',
                  'goal_1' => 1,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 301,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity32 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct33,
                  'name' => '2.1.3 Gestión y fortalecimiento del uso de la información de Cambio Climático para la priorización de medidas a implementar para reducir los riesgos actuales y futuros (escenarios de cambio climático IDEAM)',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity33 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct34,
                  'name' => '2.1.4 Asistencia técnica, asesoría, acompañamiento y seguimiento a los 25 ET en la  incorporación del cambio climático en el proceso de revisión, ajuste y/o formulación de los procesos de OT y OAT (POT´s, POMCAS)',
                  'goal_1' => 100,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 100,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity34 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct35,
                  'name' => '2.1.5 Conformación de la división de Cambio Climático ',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 19,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity35 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct36,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity36 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct37,
                  'name' => '2.2.1 Desarrollo de estudios de investigación y conocimiento para implementar acciones de mitigación apropiadas para la adaptación al cambio climático.',
                  'goal_1' => 0.5,
                  'goal_2' => 1.5,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 2,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity37 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct38,
                  'name' => '2.2.2 Implementación de acciones de mitigación para la adaptación al cambio climático.',
                  'goal_1' => 0,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 300,
                  'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity38 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct39,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity39 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective10,
                  'product_id' =>$idobjectiveproduct40,
                  'name' => '3.1.1 Estudio para la revisión y actualización del Plan de Acción Regional de lucha contra la desertificación y la sequía en el dpto del Cesar.',
                  'goal_1' => 0,
                  'goal_2' => 10,
                  'goal_3' => 90,
                  'goal_4' => 0,
                  'goal' => 100,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity40 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective10,
                  'product_id' =>$idobjectiveproduct41,
                  'name' => '3.1.2 Ejecución de acciones prioritarias para mitigar los efectos de la desertificación y la sequía estructurales, no estructurales (estrategia de reforestación, restauración, agricultura y ganadería sostenible, estufas ecológicas, monitoreo, otras)',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity41 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective10,
                  'product_id' =>$idobjectiveproduct42,
                  'name' => '3.1.3 Ejecución de acciones estratégicas para el desarrollo de la plitica de RESPEL y  gestión para el manejo de areas degradadas por contaminantes (RESPEL, RAEE´s, COP´s, hidrocarburos, otros)',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity42 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective10,
                  'product_id' =>$idobjectiveproduct43,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity43 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective11,
                  'product_id' =>$idobjectiveproduct44,
                  'name' => '4.1.1 Adopción del POF',
                  'goal_1' => 1,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity44 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective11,
                  'product_id' =>$idobjectiveproduct45,
                  'name' => '4.1.2 Gestión e implementación de medidas del POF',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 1,
                  'goal' => 2,
                  'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity45 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective11,
                  'product_id' =>$idobjectiveproduct46,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity46 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct47,
                  'name' => '4.2.1 Desarrollo de estudios y procesos para la declaratoria de áreas protegidas y/o otras estrategias de la conservación de la biodiversidad.',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity47 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct48,
                  'name' => '4.2.2 Gestión para la formulación e implementación de planes de manejo de áreas protegidas y otras estrategias de conservación.',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity48 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct49,
                  'name' => '4.2.3 Gestión, apoyo y articulación interinstitucional en el desarrollo de los sistemas de áreas protegidas (SINAP, SIRAP, SIDAP, SILAP)',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity49 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct50,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity50 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' =>$idobjectiveproduct51,
                  'name' => '4.3.1 Gestión para la formulación, adopción e implementación de planes de manejo e implementación de acciones prioritarias en los páramos del departamento del Cesar.',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity51 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' =>$idobjectiveproduct52,
                  'name' => '4.3.2 Gestión  e implementación de acciones prioritarias en bosque seco y bosque muy seco tropical.',
                  'goal_1' => 2,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 5,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity52 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' =>$idobjectiveproduct53,
                  'name' => '4.3.3 Gestión para la formulación, adopción e implementación de planes de manejo e implementación de acciones prioritarias en los humedales del departamento del Cesar.',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity53 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' =>$idobjectiveproduct54,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity54 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct55,
                  'name' => '4.4.1 Optimización del proceso operativo del CAVRF',
                  'goal_1' => 1,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 301,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity55 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct56,
                  'name' => '4.4.2 Implementación de acciones de los planes de manejo de la fauna amenazada.',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 3,
                  'goal_4' => 3,
                  'goal' => 7,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity56 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct57,
                  'name' => '4.4.3 Identificación, Formulación e implementación del plan de manejo de especies invasoras',
                  'goal_1' => 0,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 300,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity57 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct58,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity58 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective15,
                  'product_id' =>$idobjectiveproduct59,
                  'name' => '5.1.1 Gestión y/o formulación de lineamientos políticos para promover el desarrollo urbano sostenible',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity59 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective15,
                  'product_id' =>$idobjectiveproduct60,
                  'name' => '5.1.2 Promoción, seguimiento y consolidación de la línea base ambiental urbana (ICAU)',
                  'goal_1' => 20,
                  'goal_2' => 0,
                  'goal_3' => 40,
                  'goal_4' => 10,
                  'goal' => 70,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity60 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective15,
                  'product_id' =>$idobjectiveproduct61,
                  'name' => '5.1.3 Seguimiento y apoyo a la implementación del componente de aprovechamiento de RS en los PGIRS',
                  'goal_1' => 100,
                  'goal_2' => 0,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 300,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity61 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective15,
                  'product_id' =>$idobjectiveproduct62,
                  'name' => '5.1.4 Apoyo a la Identificación, prevención y mitigación de amenazas y vulnerabilidades a través de la gestión integral del riesgo en las áreas urbanas.',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 5,
                  'goal_4' => 15,
                  'goal' => 21,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity62 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective15,
                  'product_id' =>$idobjectiveproduct63,
                  'name' => '5.1.5 Diseño e  Implementación de la politica regional de  Producción y consumo responsable y sostenible.',
                  'goal_1' => 1,
                  'goal_2' => 0,
                  'goal_3' => 1,
                  'goal_4' => 0,
                  'goal' => 2,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity63 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective15,
                  'product_id' =>$idobjectiveproduct64,
                  'name' => '5.1.6 Implementación del programa regional de negocios verdes (formulación del PA para la ejecución del PRNV, conformación ventanilla de negocios verdes y promoción y acompañamiento de 2 pilotos de negocios verdes)',
                  'goal_1' => 2,
                  'goal_2' => 0,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity64 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective15,
                  'product_id' =>$idobjectiveproduct65,
                  'name' => '5.1.7 Promoción y apoyo al mejoramiento y optimización del sistema de arborización urbana enfocado al servicio ecosistémico (microclima, paisaje urbano, gestión de GEI y espacio público)',
                  'goal_1' => 100,
                  'goal_2' => 0,
                  'goal_3' => 100,
                  'goal_4' => 0,
                  'goal' => 200,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity65 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective15,
                  'product_id' =>$idobjectiveproduct66,
                  'name' => '5.1.8  Armonización de la información de los mapas de ruido con la gestión del observatorio ambiental del Cesar e implementación de medidas de manejo del ruido.',
                  'goal_1' => 100,
                  'goal_2' => 1,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 301,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity66 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective15,
                  'product_id' =>$idobjectiveproduct67,
                  'name' => '5.1.9 Optimización y operación para el control efectivo de fuentes móviles, enfocado a la gestión de GEI´s en el marco de la política de cambio climático y al mejoramiento de la calidad del aire en centros poblados urbanos',
                  'goal_1' => 0,
                  'goal_2' => 2,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 202,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity67 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective15,
                  'product_id' =>$idobjectiveproduct68,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity68 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective16,
                  'product_id' =>$idobjectiveproduct69,
                  'name' => '5.2.1 Apoyo a la gestión para la construcción del ecoparque río Guatapurí',
                  'goal_1' => 100,
                  'goal_2' => 2,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 302,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity69 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective16,
                  'product_id' =>$idobjectiveproduct70,
                  'name' => '5.2.2 Apoyo y gestión para la construcción un parque ecológico ',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 0,
                  'goal' => 3,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity70 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective16,
                  'product_id' =>$idobjectiveproduct71,
                  'name' => '5.2.3 Gestión para la implementación del proyecto piloto demostrativo bioclimático (indicadores de URE)',
                  'goal_1' => 0,
                  'goal_2' => 25,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 225,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity71 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective16,
                  'product_id' =>$idobjectiveproduct72,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity72 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective17,
                  'product_id' =>$idobjectiveproduct73,
                  'name' => '6.1.1 Implementación del sistema VITAL-SILAM, SUIT para la optimización de los trámites ambientales.',
                  'goal_1' => 100,
                  'goal_2' => 1,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 301,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity73 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective17,
                  'product_id' =>$idobjectiveproduct74,
                  'name' => '6.1.2 Gestión para el fortalecimiento integral del proceso de trámites (licencias, permisos, autorizaciones, concesiones) a través del autocontrol en las diversas etapas del procedimiento y reestructuración organizacional de la entidad.',
                  'goal_1' => 5,
                  'goal_2' => 1,
                  'goal_3' => 10,
                  'goal_4' => 20,
                  'goal' => 36,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity74 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective17,
                  'product_id' =>$idobjectiveproduct75,
                  'name' => '6.1.2 Optimización integral del trámite de autorización para el aprovechamiento de árboles aislados y en centros urbanos.',
                  'goal_1' => 80,
                  'goal_2' => 1,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 281,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity75 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective17,
                  'product_id' =>$idobjectiveproduct76,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity76 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective18,
                  'product_id' =>$idobjectiveproduct77,
                  'name' => '6.2.1 Armonización del sistema de atención para las quejas y sanciones ambientales con el VITAL.',
                  'goal_1' => 1,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity77 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective18,
                  'product_id' =>$idobjectiveproduct78,
                  'name' => '6.2.2 Optimización del sistema de atención al ciudadano (PQR´s, ventanilla única)',
                  'goal_1' => 50,
                  'goal_2' => 29,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 279,
                  'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity78 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective18,
                  'product_id' =>$idobjectiveproduct79,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity79 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective19,
                  'product_id' =>$idobjectiveproduct80,
                  'name' => '6.3.1 Implementación de una estrategia de seguimiento documental a los compromisos adquiridos mediante informes impuestos en el acto administrativo ',
                  'goal_1' => 100,
                  'goal_2' => 2,
                  'goal_3' => 80,
                  'goal_4' => 100,
                  'goal' => 282,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity80 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective19,
                  'product_id' =>$idobjectiveproduct81,
                  'name' => '6.3.2 Verificación en campo por alertas identificadas en los informes',
                  'goal_1' => 100,
                  'goal_2' => 0,
                  'goal_3' => 80,
                  'goal_4' => 100,
                  'goal' => 280,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity81 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective19,
                  'product_id' =>$idobjectiveproduct82,
                  'name' => '6.3.2 Verificación en campo a los permisos, autorizaciones o licencias que no han cumplido con la presentación de informes',
                  'goal_1' => 100,
                  'goal_2' => 0,
                  'goal_3' => 80,
                  'goal_4' => 100,
                  'goal' => 280,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity82 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective19,
                  'product_id' =>$idobjectiveproduct83,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity83 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective20,
                  'product_id' =>$idobjectiveproduct84,
                  'name' => '7.1.1 Evaluación, ajuste y adopción y socialización de las determinantes ambientales para el OT',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity84 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective20,
                  'product_id' =>$idobjectiveproduct85,
                  'name' => '7.1.2 Asesoría y asistencia a los municipios en la incorporación de los determinantes ambientales para la revisión y ajuste de los POT',
                  'goal_1' => 100,
                  'goal_2' => 20,
                  'goal_3' => 100,
                  'goal_4' => 0,
                  'goal' => 220,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity85 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective20,
                  'product_id' =>$idobjectiveproduct86,
                  'name' => '7.1.3 Seguimiento a los municipios en el cumplimiento de los asuntos ambientales concertados de los POT adoptados',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 25,
                  'goal_4' => 25,
                  'goal' => 51,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity86 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective20,
                  'product_id' =>$idobjectiveproduct87,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity87 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective21,
                  'product_id' =>$idobjectiveproduct88,
                  'name' => '7.2.1 Revisión y actualización de estudios básicos de conocimiento de amenazas y riesgos y armonización con los riesgos climáticos.',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 3,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity88 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective21,
                  'product_id' =>$idobjectiveproduct89,
                  'name' => '7.2.2 Apoyo y gestión para la implementación de medidas de reducción del riesgo (incendios, avalanchas, inundaciones)',
                  'goal_1' => 2,
                  'goal_2' => 2,
                  'goal_3' => 2,
                  'goal_4' => 2,
                  'goal' => 8,
                  'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity89 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective21,
                  'product_id' =>$idobjectiveproduct90,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity90 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective22,
                  'product_id' =>$idobjectiveproduct91,
                  'name' => '8.1.1 Revisión del diseño',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity91 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective22,
                  'product_id' =>$idobjectiveproduct92,
                  'name' => '8.1.2 Gestión e implementación de la red hidrometeorológica',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 200,
                  'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity92 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective22,
                  'product_id' =>$idobjectiveproduct93,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity93 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective23,
                  'product_id' =>$idobjectiveproduct94,
                  'name' => '8.2.1 Diseño e implementación de la red de monitoreo de aguas superficiales y/o implementación de acciones prioritarias.',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity94 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective23,
                  'product_id' =>$idobjectiveproduct95,
                  'name' => '8.2.2 Estructuración e implementación del laboratorio de análisis de calidad de aguas (infraestructura, dotación, operación)',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 1,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity95 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective23,
                  'product_id' =>$idobjectiveproduct96,
                  'name' => '8.2.1 Operación, análisis de información y divulgación de alertas tempranas de calidad de aire en el departamento del Cesar.',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity96 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective23,
                  'product_id' =>$idobjectiveproduct97,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity97 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective24,
                  'product_id' =>$idobjectiveproduct98,
                  'name' => '8.3.1 Gestión para el ajuste e implementación del sistema de información ambiental',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 200,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity98 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective24,
                  'product_id' =>$idobjectiveproduct99,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity99 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective25,
                  'product_id' =>$idobjectiveproduct100,
                  'name' => '8.4.1 Revisión, ajuste metodológico, reformulación y adopción del PGAR/PLANEAR',
                  'goal_1' => 0,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 0,
                  'goal' => 200,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity100 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective25,
                  'product_id' =>$idobjectiveproduct101,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity101 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective26,
                  'product_id' =>$idobjectiveproduct102,
                  'name' => '9.1.1 Promoción de la incorporación de la dimensión ambiental en la educación formal (contenidos curriculares en PRAES) y apoyo a la implementación de PRAUS, con enfoque en cambio climático.',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity102 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective26,
                  'product_id' =>$idobjectiveproduct103,
                  'name' => '9.1.2 Promoción del desarrollo de la dimensión ambiental en la educación no formal (PROCEDAS, empresas, investigación en tecnologías limpias)',
                  'goal_1' => 15,
                  'goal_2' => 15,
                  'goal_3' => 15,
                  'goal_4' => 15,
                  'goal' => 60,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity103 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective26,
                  'product_id' =>$idobjectiveproduct104,
                  'name' => '9.1.3 Apoyo al fortalecimiento de la Etnoeducación, género y la participación ciudadana de los grupos étnicos y comunidades afro  (wiwas, kankuamos, arhuacos, chimilas, koguis, proyectos de género con afrodescendientes)',
                  'goal_1' => 4,
                  'goal_2' => 4,
                  'goal_3' => 4,
                  'goal_4' => 4,
                  'goal' => 16,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity104 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective26,
                  'product_id' =>$idobjectiveproduct105,
                  'name' => '9.1.4 Coordinación interinstitucional e intersectorial (Comités municipales y departamental de educación ambiental - CIDEA´s), en torno al cambio climático.',
                  'goal_1' => 6,
                  'goal_2' => 6,
                  'goal_3' => 6,
                  'goal_4' => 8,
                  'goal' => 26,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity105 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective26,
                  'product_id' =>$idobjectiveproduct106,
                  'name' => '9.1. 5 Apoyo al diseño, implementación y promoción de planes y acciones de educación ambiental, con enfoque en cambio climático.',
                  'goal_1' => 6,
                  'goal_2' => 6,
                  'goal_3' => 6,
                  'goal_4' => 8,
                  'goal' => 26,
                  'weighing' => 19,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity106 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective26,
                  'product_id' =>$idobjectiveproduct107,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity107 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective27,
                  'product_id' =>$idobjectiveproduct108,
                  'name' => '10.1.1 Apoyo a la conformación del banco de proyectos ambientales para la gestión de recursos orientados a su implementación en el marco de los planes de salvaguarda socializados y/o protocolizados con la entidad ',
                  'goal_1' => 2,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 2,
                  'goal' => 5,
                  'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity108 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective27,
                  'product_id' =>$idobjectiveproduct109,
                  'name' => '10.1.2 Apoyo a la gestión de recursos para la implementación de actividades ambientales priorizadas  del banco de proyecto, en el marco de la implementación de los planes de salvaguarda.',
                  'goal_1' => 0,
                  'goal_2' => 2,
                  'goal_3' => 2,
                  'goal_4' => 2,
                  'goal' => 6,
                  'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity109 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective27,
                  'product_id' =>$idobjectiveproduct110,
                  'name' => '10.1.3 Construcción de sistemas de abastecimiento de agua a comunidades indígenas',
                  'goal_1' => 0,
                  'goal_2' => 2,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity110 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective27,
                  'product_id' =>$idobjectiveproduct111,
                  'name' => '10.1.4 Construcción de sistemas de saneamiento básico (baterias sanitarias)  de carácter comunitario en asentamientos indígenas',
                  'goal_1' => 0,
                  'goal_2' => 2,
                  'goal_3' => 2,
                  'goal_4' => 2,
                  'goal' => 6,
                  'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity111 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective27,
                  'product_id' =>$idobjectiveproduct112,
                  'name' => '10.1.5 Apoyo a la  Adquisición  de áreas de interés ambiental y cultural  para la conservación de la biodiversidad y la cultura indígena,  en el marco de la implementación y/u operación de los  pueblos indígenas culturales del cordón ambiental y tradicional de la Sierra Nevada de Santa Marta y del programa  Guardabosques Corazón del Mundo',
                  'goal_1' => 0,
                  'goal_2' => 500,
                  'goal_3' => 0,
                  'goal_4' => 966,
                  'goal' => 1466,
                  'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity112 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective27,
                  'product_id' =>$idobjectiveproduct113,
                  'name' => '10.1.6 Gestión para la  declaración de áreas protegidas o implementación de otras estrategias de conservación de la biodiversidad    dentro del territorio demarcado por la línea negra y por fuera de los resguardos indígenas de la Sierra Nevada de Santa Marta, teniendo en cuenta la cosmovisión de los pueblos indígenas de la SNAM. ',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 3,
                  'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity113 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective27,
                  'product_id' =>$idobjectiveproduct114,
                  'name' => '10.1.7 Implementación de proyectos  agroforestales como alternativa de sostenibilidad ambiental  para el óptimo aprovechamiento y/o uso del suelo, y que favorezcan las condiciones alimentarias de subsitencia de las comunidades indígenas  ',
                  'goal_1' => 0,
                  'goal_2' => 5,
                  'goal_3' => 5,
                  'goal_4' => 5,
                  'goal' => 15,
                  'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity114 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective27,
                  'product_id' =>$idobjectiveproduct115,
                  'name' => '10.1.8 Aislamiento de áreas de interes ambiental y cultural, para  inducir su recuperación natural y/o protejerlas de las acciones de deterioro antrópicas.  ',
                  'goal_1' => 0,
                  'goal_2' => 50,
                  'goal_3' => 50,
                  'goal_4' => 50,
                  'goal' => 150,
                  'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity115 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective27,
                  'product_id' =>$idobjectiveproduct116,
                  'name' => '10.1.9 Implementación de proyectos  para el manejo integral de los resíduos sólidos en asentamientos indigenas.',
                  'goal_1' => 0,
                  'goal_2' => 2,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity116 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective27,
                  'product_id' =>$idobjectiveproduct117,
                  'name' => '10.1.10 Apoyo para la determinación de línea base socioambiental  en asentamientos indígenas para el ordenamiento territorial ambiental con visión ancestral indígena.',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 1,
                  'goal' => 2,
                  'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity117 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective27,
                  'product_id' =>$idobjectiveproduct118,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity118 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective28,
                  'product_id' =>$idobjectiveproduct119,
                  'name' => '10.2.1 Estudio de amenaza y riesgo por inundaciones en los ríos Badillo y Cesar (Tramo puente La Victoria (Río Badillo) a la desembocadura del río Seco (Rio Cesar), para determinar la implementación de acciones de mitigación del riesgo a las poblaciones de Guacoche y Guacochito.',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity119 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective28,
                  'product_id' =>$idobjectiveproduct120,
                  'name' => '10.2.2 Recuperación de ecosistemas de interés ambiental y cultural para la conservación de las tradiciones de la población afrocolombiana en el departamento del Cesar',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity120 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective28,
                  'product_id' =>$idobjectiveproduct121,
                  'name' => '10.2.3 Implementación de proyectos  agroforestales como alternativa de sostenibilidad ambiental  para el óptimo aprovechamiento y/o uso del suelo, y que favorezcan las condiciones alimentarias de subsitencia de las comunidades afrocolombianas  ',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 3,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity121 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective28,
                  'product_id' =>$idobjectiveproduct122,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity122 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective29,
                  'product_id' =>$idobjectiveproduct124,
                  'name' => '11.1.1 Implementación de una estrategia efectiva en el Recaudo de las rentas propias de la entidad',
                  'goal_1' => 60,
                  'goal_2' => 65,
                  'goal_3' => 70,
                  'goal_4' => 70,
                  'goal' => 265,
                  'weighing' => 15,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity124 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective29,
                  'product_id' =>$idobjectiveproduct125,
                  'name' => '11.1.2 Ejecución eficiente de los recursos  ',
                  'goal_1' => 80,
                  'goal_2' => 90,
                  'goal_3' => 95,
                  'goal_4' => 95,
                  'goal' => 360,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity125 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective29,
                  'product_id' =>$idobjectiveproduct126,
                  'name' => '11.1.3. Protección de los activos y bienes corporativos',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity126 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective29,
                  'product_id' =>$idobjectiveproduct127,
                  'name' => '11.1.4. Fortalecimiento de procesos de gestión de cobro persuasivo, coactivo y de saneamiento contable',
                  'goal_1' => 40,
                  'goal_2' => 45,
                  'goal_3' => 50,
                  'goal_4' => 60,
                  'goal' => 195,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity127 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective29,
                  'product_id' =>$idobjectiveproduct128,
                  'name' => '11.1.5. Implementación de la estrategia de Compras públicas sostenibles',
                  'goal_1' => 0,
                  'goal_2' => 20,
                  'goal_3' => 40,
                  'goal_4' => 60,
                  'goal' => 120,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity128 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective29,
                  'product_id' =>$idobjectiveproduct129,
                  'name' => '11.1.6. Fortalecimiento de acciones que promuevan el uso de recursos destinados al fondo de compensación ambiental',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity129 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective29,
                  'product_id' =>$idobjectiveproduct130,
                  'name' => '11.1.7 Fortalecimiento del Banco de Programas y Proyectos de la entidad como soporte a la gestión de la entidad',
                  'goal_1' => 30,
                  'goal_2' => 60,
                  'goal_3' => 70,
                  'goal_4' => 80,
                  'goal' => 240,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity130 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective29,
                  'product_id' =>$idobjectiveproduct131,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity131 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective30,
                  'product_id' =>$idobjectiveproduct132,
                  'name' => '11.2.1 Implementación del SIGC para la certificación de la entidad',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity132 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective30,
                  'product_id' =>$idobjectiveproduct133,
                  'name' => '11.2.2 Fortalecimiento del modelo integrado de planeación y gestión de la entidad.',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity133 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective30,
                  'product_id' =>$idobjectiveproduct134,
                  'name' => '11.2.3 Implementación NIIF',
                  'goal_1' => 0,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 300,
                  'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity134 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective30,
                  'product_id' =>$idobjectiveproduct135,
                  'name' => '11.2.4 Optimización de la gestión archivística y documental',
                  'goal_1' => 0,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 300,
                  'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity135 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective30,
                  'product_id' =>$idobjectiveproduct136,
                  'name' => '11.2.5 Ejecución de fases del PIGA (Plan Institucional de Gestión Ambiental)',
                  'goal_1' => 1,
                  'goal_2' => 2,
                  'goal_3' => 3,
                  'goal_4' => 4,
                  'goal' => 10,
                  'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity136 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective30,
                  'product_id' =>$idobjectiveproduct137,
                  'name' => '11.2.6 Dotación de equipos receptores del Sistema de posicionamiento global - GPS, molinetes, sonómetros, cámaras fotográficas, otras dotaciones institucionales (según especificaciones técnicas)',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 0,
                  'goal' => 2,
                  'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity137 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective30,
                  'product_id' =>$idobjectiveproduct138,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity138 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective31,
                  'product_id' =>$idobjectiveproduct139,
                  'name' => '11.3.1. Actualización estructura organizacional de la entidad',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity139 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective31,
                  'product_id' =>$idobjectiveproduct140,
                  'name' => '11.3.2 Implementación del programa de bienestar social e incentivos',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity140 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective31,
                  'product_id' =>$idobjectiveproduct141,
                  'name' => '11.3.3 Implementación del programa de formación y capacitación',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity141 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective31,
                  'product_id' =>$idobjectiveproduct142,
                  'name' => '11.3.4 Dotación con equipamiento de las cuatro sedes seccionales de la entidad',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity142 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective31,
                  'product_id' =>$idobjectiveproduct143,
                  'name' => '11.3.5 Implementación de un programa de fortalecimiento institucional de la sede principal de Corpocesar',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity143 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective31,
                  'product_id' =>$idobjectiveproduct144,
                  'name' => '11.3.6 Ajuste e implementación del manual de
                contratación de la entidad (dinamica SECOP,
                Normativa y Hallazgo administrativo CRG)',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 1,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity144 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective31,
                  'product_id' =>$idobjectiveproduct145,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity145 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective32,
                  'product_id' =>$idobjectiveproduct146,
                  'name' => '11.4.1 Gestión para el cumplimiento del proceso de transparencia y acceso a la información (Ley 1712 de 2014)',
                  'goal_1' => 70,
                  'goal_2' => 80,
                  'goal_3' => 90,
                  'goal_4' => 100,
                  'goal' => 340,
                  'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity146 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective32,
                  'product_id' =>$idobjectiveproduct147,
                  'name' => '11.4.2 Soporte interno en tecnología ',
                  'goal_1' => 50,
                  'goal_2' => 80,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 330,
                  'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity147 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective32,
                  'product_id' =>$idobjectiveproduct148,
                  'name' => '11.4.3 Gestión para la adquisición e implementación de hardware y software de seguridad informática. ',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity148 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective32,
                  'product_id' =>$idobjectiveproduct149,
                  'name' => '11.4.4. Adquisición y operación de un software integral de presupuesto, contabilidad, nómina, almacen',
                  'goal_1' => 0,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 300,
                  'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity149 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective32,
                  'product_id' =>$idobjectiveproduct150,
                  'name' => '11.4.5 Adquisición de equipos y elementos tecnológicos (software, hardware, licencias)',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity150 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective32,
                  'product_id' =>$idobjectiveproduct151,
                  'name' => '11.4.6. Formación de los funcionarios de la entidad en el uso de las TIC´S',
                  'goal_1' => 0,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 300,
                  'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity151 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective32,
                  'product_id' =>$idobjectiveproduct151,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity151 = DB::getPdo()->lastInsertId();
                  




         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity5,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia5 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity6,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia6 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity7,
          'year' =>1,
          'value' => 1,
          'description' => 'Se realizó el proceso de priorización de las microcuencas objeto de formulación de PM, a través de la Resolución No 1255 del 8 de noviembre de 2016.',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia7 = DB::getPdo()->lastInsertId(); 


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
          'description' => 'Se realizó la priorización de los acuiferos objeto de planes de manejo, a través de la Resolución No 1346 del 28 de noviembre de 2016.',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia11 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity13,
          'year' =>1,
          'value' => 100,
          'description' => 'Se realizó el monitoreo de 18 pozos profundos en los municipios de La Paz, Agustín Codazzi, Becerril, La Jagua de Ibirico, Chiriguaná, El Paso, Astrea, Chimichagua, Valledupar, El Copey, Pelaya y Aguachica.No registra meta para el periodo evaluado.',
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
          'description' => 'El proceso de adopción se adelantó a través de la Resolución 1296 del 16 de noviembre de 2016. No registra meta para el periodo evaluado.',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia15 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity16,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia16 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity17,
          'year' =>1,
          'value' => 96,
          'description' => 'Se ha realizado seguimiento a la implementación de los PSMV´s (24/25)',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia17 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity18,
          'year' =>1,
          'value' => 100,
          'description' => 'Seguimiento a los PUEAA de las ESP EMPOJAGUA,  EMSERPUPA,  EMSOPEL, EMPOSANAL, EMPOAGUACHICA, EMCAR, EMPOGAMARRA, UNIDAD DE SERVICIOS ASTREA, ACUACHIM   EMPOBOSCONIA, EMPAZ, ESPUMA, EMPOSANDIEGO, EMBECERRIL, ACPES DE SAN MARTIN, UNIDAD DE SERVICIOS DE GONZALEZ, EMCODAZZI y EMDUPAR (19/19)',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia18 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity19,
          'year' =>1,
          'value' => 22.2,
          'description' => 'Se ha realizado el seguimiento documental y en campo a 296 usuarios de concesiones hídricas. Está en proceso de implementación una estrategia viable para el cumplimiento total.',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia19 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity20,
          'year' =>1,
          'value' => 100,
          'description' => 'Todos los nuevos usuarios de concesiones fueron registrados en el SIRH.',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia20 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity21,
          'year' =>1,
          'value' => 100,
          'description' => 'Se apoyó al municipio de Manaure para la optimización del STAR de este municipio. Además se suscribió el Convenio No 19-7-0022-2016 con EMDUPAR para la  implementación de alternativas biotecnológicas en la PTAR El Salguero de Valledupar. De manera paralela al seguimiento de los PSMV´s se trabaja en el acompañamiento y apoyo a las ESP para mejorar la gestión en la implementación de los PSMV´s. (educación ambiental, direccionamiento de política de reuso, política de PML)',
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
          'activity_id' => $idactivity25,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia25 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity26,
          'year' =>1,
          'value' => 0.98,
          'description' => 'Se adelantó el proceso de actualización de metas. Se realizó el proceso de socialización con los usuarios, los cuales presentaron propuestas de metas. Se encuentran publicadas las cuasimetas. ',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia26 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity28,
          'year' =>1,
          'value' => 10,
          'description' => 'Se hizo seguimiento a los siguientes usuarios: Oleoflores, Carbones de la Jagua, Enfriadora La Vallenata, -indupalma, Palmas del Cesar, STAR Corregimiento Puerto Carreño, Frigorifico de Aguachica, Palmeras de la Costa, STAR Corregimiento Zapatosa.',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia28 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity29,
          'year' =>1,
          'value' => 100,
          'description' => 'Se suscribió el contrato No 19-6-0182-0-2016, para realizar la evaluación de la calidad de aguas residuales domésticas y no domésticas que descargan en fuentes receptoras superficiales en el departamento del Cesar. ',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia29 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity30,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia30 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity31,
          'year' =>1,
          'value' => 1,
          'description' => 'Corpocesar, hace parte del Nodo Caribe y como tal participó en el primer seminario regional de gestión integral del recurso hídrico y cambio climático para fortalecer la participación en el nodo caribe.',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia31 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity32,
          'year' =>1,
          'value' => 100,
          'description' => 'Se apoyó al departamento del Cesar en el proceso de formulación del Plan Integral de Cambio Climático en coordinación con el consultor cotratado por el MADS.',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia32 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity34,
          'year' =>1,
          'value' => 100,
          'description' => 'Se realizó asesoría y acompañamiento a los 25 municipios del dpto del Cesar.',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia34 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity36,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia36 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity37,
          'year' =>1,
          'value' => 0.4,
          'description' => 'Se avanza en la ejecución del proyecto: Diseño e implementación de estrategias para la adaptación climática y restauración hídrica de 2 zonas piloto en la SNSM y SP para la recuperación de la capacidad de regulación hídrica. Así mismo, se contrató el estudio de riesgo de la cuenca media y baja del río Ariguaní, el cual es finaciado además con recursos del SGR. Adicional a lo anterior, se ejecuta el estudio para evaluación de la sustentabilidad ambiental y ecológica y su aporte a la construcción de los escenarios de reforma rural integral, de la Ciénaga de Santa Isabel, municipio de Curumaní. ',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia37 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity39,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia39 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity41,
          'year' =>1,
          'value' => 1,
          'description' => 'Se ejecutó el proyecto: implementación de estrategias para disminuir el deterioro de los bosques naturales, en zona rural de los municipios de Valledupar, La Paz, Pueblo Bello, El Copey, Chiriguaná, Curumaní, Pailitas, Pelaya, Aguachica y González a través del Convenio No 2016-030031. Se suscribió contrato para la implementación de acciones del plan de acción de lucha contra la desertificación y la sequía (19-6-0244-0-2016). Se desarrolló contrato para la rehabilitación de los distritos de adecuación de tierras en los municipios de Becerril, Codazzi, Chimichagua y La Jagua de Ibirico. Además, se suscribió el contrato No 19-6-244-2016,  para Ejecutar acciones  para la implementación  del Plan de Acción  Regional de Lucha  contra la desertificación y la sequía, en el municipio de Valledupar.',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia41 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity42,
          'year' =>1,
          'value' => 100,
          'description' => 'Se realizaron campañas educativas en cuanto a recolección y disposición final de residuos de aparatos eléctricos y electrónicos “RAEEs”, pilas y/o acumuladores. Se recolectaron un total de 3.890 kilogramos (3,8 Ton) de material  RAEEs.                                                                            
                     
        Se realizaron tres talleres en los municipios de Valledupar y Chimichagua para la socialización y capacitación sobre experiencias de la Corporación en la Implementación de la Política de Gestión Integral de RESPEL en el departamento del Cesar, y la responsabilidad social, ambiental y empresarial frente a los residuos de aparatos eléctricos y electrónicos (RAEE) – Puntos Verdes Lito caso de éxito para América Latina y el Caribe. Se adelantaron acercamientos con las Alcaldías de los municipios de El Copey, Becerril y Pueblo Bello para identificar diferentes sitios que pudieron ser afectados por la inadecuada disposición de plaguicidas. Por otra parte, se realizó apoyo a funcionarios de la  Pontificia Universidad Javeriana en el desarrollo de proyecto científico para la biorremediación de suelos contaminados con Toxafeno en el municipio de El Copey - Cesar. 
        Así mismo, se han realizado diligencias de atención a contingencias de derrames de hidrocarburos, derivados y sustancias nocivas en los municipios de Curumani, El Paso, Bosconia, Valledupar. En el municipio de Chimichagua se realizó identificación de sitios afectados por la disposición inadecuada de Residuos de Aparatos Eléctricos y Electrónicos RAEE´s generados por reparadores Aparatos Eléctricos y Electrónicos AEE´s. Por último se implementó una estrategia para la protección del recurso suelo, en 18 colegios agropecuarios del departamento del Cesar.',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia42 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity43,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia43 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity44,
          'year' =>1,
          'value' => 1,
          'description' => 'Se adoptó el POF a través de la Resolución No 1235 del 8 de noviembre de 2016',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia44 = DB::getPdo()->lastInsertId(); 

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
          'value' => 100,
          'description' => 'Se desarrolló y materializó el proceso de declaratoria de 25.093 Hectareas como Area Protegida en la zona de paramos del Perija Cesar, denominada PARQUE NATURAL REGIONAL PERIJA. mediante Acuerdo 021 de diciembre 16 de 20916 “por el cual se reserva, delimita, alindera y declara el parque natural regional serranía del Perijá y se dictan normas para su administración y manejo sostenible”',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia47 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity48,
          'year' =>1,
          'value' => 100,
          'description' => 'Se terminaron los diseños arquitectónicos y presupuestación de obras de edificación de dos (2) proyectos del programa de administración del PMA del parque natural regional   Los Besotes  , a través del Contrato No 19-6-0153-2016. Se desarrolló el Convenio No 19-7-0036-2016 para ejecutar acciones dirigidas al mantenimiento y protección del PNR Besotes. ',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia48 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity49,
          'year' =>1,
          'value' => 1,
          'description' => 'Mediante el convenio especial de cooperación No 19-7-0015-0-2016, cuyo objeto es: Aunar esfuerzos científicos, económicos, financieros y técnicos para la realización de acciones orientadas al fortalecimiento y consolidación del sistema de áreas protegidas en el departamento del Cesar, se han venido desarrollando actividades y acciones para los procesos de conformacion del Sistema Deparatmental de areas Protegidas SEDAP Cesar y la conformacion como piloto el Sistema Local de Areas Protegidas en el municipio de Agustín Codazzi SILAP Codazzi.',
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
          'activity_id' => $idactivity51,
          'year' =>1,
          'value' => 100,
          'description' => 'Se ejecutó el Convenio No 19-7-0020-2016 para la implementación del plan de manejo en la zona de páramo, subpáramo y de alta montaña, de la Serranía del Perijá, consistentes en el aislamiento de áreas especiales para la restauración natural y el desarrollo de un proceso de promoción, socialización, divulgación y capacitación  comunitaria para la aprobación de dicho PM.',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia51 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity52,
          'year' =>1,
          'value' => 2,
          'description' => 'Se apoyó el Proyecto    Sso  Sostenible y Conservacion de la Biodiversidad en Ecosistemas Secos para Garantizar el flujo de Servicios Ecosistemicos y Mitigar procesos de Deforestación y Desertificacion  , proyecto GEF ejecutado por el PNUD. Este proyecto se ejcuta en la Cuenca del Rio Garupal - Diluvio, municipio de Valledupar.  Con apoyo del MADS se suscribió el Convenio No 19-7-0038-0-2016 para ejecutar el proyecto cuyo objeto es: implementación de acciones para prevenir la desertificación en los ecosistemas secos de los municipios de Astrea, Bosconia, El Copey y El Paso',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia52 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity53,
          'year' =>1,
          'value' => 225,
          'description' => 'Se proyectó el Acuerdo para adoptar los Planes de manejo de los humedales del Sur del Cesar (Sahaya, Costilla, Musanda, Morales, Baquero, Juncal) y de Mata de Palma y La Pachita.',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia53 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity54,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia54 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity55,
          'year' =>1,
          'value' => 1,
          'description' => 'Se suscribió el Convenio No 19-7-0005-2016 con la Fundación para la investigación y el manejo de los recursos hidrobiológicos de la región Caribe Colombiana, con el fin de aunar esfuerzos para la etapa de aprestamiento de la estrategia de control y conservación de la fauna y la flora silvestre del departamento del Cesar a traves del centro de atención y valoración de fauna y flora silvestre de Corpocesar.',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia55 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity58,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia58 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity60,
          'year' =>1,
          'value' => 20,
          'description' => 'Se evaluó la causalidad de la línea base de 2016. En el segundo semestre se consolidaron nuevos resultados y las medidas a tomar en el marco de la Política de Gestión Ambiental Urbana.',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia60 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity61,
          'year' =>1,
          'value' => 142,
          'description' => 'La Corporación desarrolla la actividad de revisión de los PGIRS y hace mayor enfasis en la actividad de aprovechamiento, donde evalua dentro de los programas, proyectos y actividades si esta estrategia es contemplada por el municipio como proyecto factible. Faltó adelantar el seguimiento a cuatro municipios (González, Río de Oro, El Copey y Curumaní), por falta de apoyo logístico de parte de las entidades municipales. No obstante,  el año 2016 fue de transición, puesto que había plazo de entregar atualizado el PGIRS hasta el 20 de diciembre de 2016, en concordancia con el decreto 1077 de 2015.',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia61 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity63,
          'year' =>1,
          'value' => 8,
          'description' => 'Como implementación a la política regional de  Producción y consumo responsable y sostenible, se desarrollaron las siguientes acciones: Apoyo a la producción de miel de abeja orgánica, aprovechamiento y transformación de residuos en abono orgánico, producción de flores heliconias (mercados verdes), divulgación de la política PYCS, sensibilización, capacitación política, participación en FIMA, campañas RESPEL',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia63 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity64,
          'year' =>1,
          'value' => 2,
          'description' => 'Se realizó un taller de socialización donde participaron entidades públicas y privadas con el apoyo del MADS y la Corporación Fondo Biocomercio. Se llevaron a cabo las mesas de trabajo sobre proyectos productivos sostenibles con organizaciones privadas PROCOLOMBIA, SEYNEKUM y DOÑA PANELA, y del orden publico Secretaria de Agricultura Departamental y CORPOCESAR.
        Con el objeto de conformar la Ventanilla de Negocios Verdes del Cesar, se realizaron cinco diligencias técnicas de verificación de proyectos productivos tendientes Negocios Verdes en los municipios de Valledupar, Pueblo Bello y El Paso – Cesar, consistentes en la producción de abono orgánico, miel orgánica, café orgánico, panela orgánica y derivados de neumáticos para producción de nuevos productos. ',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia64 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity65,
          'year' =>1,
          'value' => 100,
          'description' => 'Se desarrolló Convenio de asociación con la Gobernación del Cesar, el municipio de Valledupar y la Corporación CIDMAG, para aunar esfuerzos para implementación de la estrategia de educación ambiental mediante el manejo y establecimiento de árboles urbanos.',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia65 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity66,
          'year' =>1,
          'value' => 100,
          'description' => 'Se cuenta con los mapas de ruido de los municipios de Valledupar, Aguachica y Bosconia, los cuales fueron socializados con las ET. Además en los constantes monitoreos trimestrales que se han venido realizando en el municipio de Bosconia, La Jagua de Ibirico y corregimientos de La Aurora, Boquerón y La Loma, se han socializado los resultados de estas mediciones. Y se generaron informes para cada zona urbana monitoreada.',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia66 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity68,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia68 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity69,
          'year' =>1,
          'value' => 100,
          'description' => 'Se avanza en la gestión para el cofinancimiento y/o modelo de gestión para la construcción. ',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia69 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity70,
          'year' =>1,
          'value' => 1,
          'description' => 'Se suscribió el Convenio No 19-7-0033-2016 con el municipio de La Paz, para realizar el estudio y diseño de un parque ecológico sobre area de influencia del rio Mocho en el municipio de La Paz.',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia70 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity72,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia72 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity73,
          'year' =>1,
          'value' => 100,
          'description' => 'Se formuló proyecto para la implementación del sistema VITAL en la entidad. Se realizó capacitación del SUIT, todos los trámites están registrados en la plataforma SUIT. Se ejecutó proceso contractual  para la adquisición de los equipos, sólo hace falta la implementación del sistema.',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia73 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity74,
          'year' =>1,
          'value' => 5,
          'description' => 'Los trámites fueron registrados en la plataforma SUIT y se estandarizaron todos los procedimientos a llevar a cabo para la solicitud de un trámite ambiental. En el periodo 2017, se fortalecerá el proceso de trámites, a través de mecanismos que permitan la racionalización de los mismos.',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia74 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity75,
          'year' =>1,
          'value' => 56,
          'description' => 'De un total de 216 solicitudes se atendieron en los tiempos establecidos 121.',
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
          'description' => 'Se formuló proyecto para la implementación del sistema VITAL en la entidad. Se realizó capacitación del SUIT, todos los trámites están registrados en la plataforma SUIT. Se ejecutó proceso contractual  para la adquisición de los equipos, sólo hace falta la implementación del sistema.',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia77 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity78,
          'year' =>1,
          'value' => 50,
          'description' => 'Se ha avanzado en el proceso de aplicación de encuesta online, implementación de correo institucional para atención al ciudadano, publicación de portafolio de servicios, derechos de los ciudadanos formulación del procedimiento de PQR´s, habilitación de línea 018000.',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia78 = DB::getPdo()->lastInsertId(); 
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
          'value' => 100,
          'description' => 'Se implementa estrategia para el seguimiento efectivo de los permisos, autorizaciones, licencias ambientales otorgadas por la Corporación. Se priorizaron 100 expedientes para realizar el seguimiento documental , de los cuales se ejecutaron 126 equivalentes al 100%.De acuerdo a las 126 revisiones documentales se programaron un 80% de las visitas relacionadas con la revision documental.  Así mismo, se priorizaron 200 usuarios para realizar seguimiento en campo, llevando a cabo durante el periodo 2016, 347 visitas técnicas de seguimiento, cumpliendo con el 100% de lo programado.',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia80 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity81,
          'year' =>1,
          'value' => 80,
          'description' => 'Se implementa estrategia para el seguimiento efectivo de los permisos, autorizaciones, licencias ambientales otorgadas por la Corporación. Se priorizaron 100 expedientes para realizar el seguimiento documental , de los cuales se ejecutaron 126 equivalentes al 100%.De acuerdo a las 126 revisiones documentales se programaron un 80% de las visitas relacionadas con la revision documental.  Así mismo, se priorizaron 200 usuarios para realizar seguimiento en campo, llevando a cabo durante el periodo 2016, 347 visitas técnicas de seguimiento, cumpliendo con el 100% de lo programado.',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia81 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity82,
          'year' =>1,
          'value' => 90,
          'description' => 'Se implementa estrategia para el seguimiento efectivo de los permisos, autorizaciones, licencias ambientales otorgadas por la Corporación. Se priorizaron 100 expedientes para realizar el seguimiento documental , de los cuales se ejecutaron 126 equivalentes al 100%.De acuerdo a las 126 revisiones documentales se programaron un 80% de las visitas relacionadas con la revision documental.  Así mismo, se priorizaron 200 usuarios para realizar seguimiento en campo, llevando a cabo durante el periodo 2016, 347 visitas técnicas de seguimiento, cumpliendo con el 100% de lo programado.',
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
          'activity_id' => $idactivity85,
          'year' =>1,
          'value' => 100,
          'description' => 'Se realizaron jornadas de trabajo para brindar asesoría y acompañamiento a los 25 municipios del dpto del Cesar.',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia85 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity87,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia87 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity89,
          'year' =>1,
          'value' => 2,
          'description' => 'Apoyo a los cuerpos de bomberos de los municipios de Valledupar, Bosconia, La Paz, Codazzi, El Copey, Aguachica y Valledupar para la prevención y control de incendios forestales a través de los contratos No 19-6-0136-2016, 19-6-0137-2016, 19-6-0111-2016 y 19-7-003-0-2016, 19-7-0012-0-2016. Así mismo, se terminaron las obras de canalización de la quebrada La Loma en el municipio de González (Convenio No 19-7-0008-2015). Y se ejecutan obras para el control de erosión e inundación en el río Badillo.',
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
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia94 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity96,
          'year' =>1,
          'value' => 206.7,
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
          'activity_id' => $idactivity99,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia99 = DB::getPdo()->lastInsertId(); 

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
          'value' => 100,
          'description' => 'Reuniones de trabajo con PRAES de Valledupar; Talleres PRAES significativos y asociados.',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia102 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity103,
          'year' =>1,
          'value' => 11,
          'description' => 'JAC del Barrio Populandia, JAC Barrio El Cerrito( Comité Ecologico) recicladores La Jagua, El Copey, Aguachica, Curumani, San Diego; Valledupar; Gremio ganadero; Mujeres Afro descendientes zona norte y zona sur occidente.',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia103 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity104,
          'year' =>1,
          'value' => 5,
          'description' => 'Se trabaja el proyecto de etnoeducación con las comunidades indigenas Arhuacos, Chimilas, Kankuamos y Wiwas y mujeres afro descendientes Valledupar zona norte y sur occidente.',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia104 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity105,
          'year' =>1,
          'value' => 21,
          'description' => 'CIDEA del departamento del Cesar,  Valledupar, La Paz, Codazzi, Aguachica, Pueblo Bello, Bosconia y El Copey.',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia105 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity106,
          'year' =>1,
          'value' => 1,
          'description' => 'Se formula el perfil ambiental del departamento del Cesar, el cual ha sido socializado y está en revision y actualización para su impresión, publicación y socialización con los actores en la Asamblea departamental. Ademáas se está trabajando con los entes territoriales para el plan de acción en cada municipio.',
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
          'value' => 2,
          'description' => 'Se desarrolla Convenio No 19-7-0011-2016 con el fin de apoyar la conformación del banco de proyectos ambientales para la gestión de recursos orientados a la  implementación del plan salvaguarda étnico del pueblo Kankuamo. Así mismo, se ejecutó Convenio No 19-7-019-0-2016, con el Cabildo Gobernador Arhuaco, para adquirir 500 hectáreas de terreno como estrategia para la conservación de la biodiversidad en las cuencas medias de los ríos Azúcarbuena y el Diluvio, en el municipio de Valledupar, departamento del Cesar, en el marco del programa guardabosques corazón del mundo. ',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia108 = DB::getPdo()->lastInsertId(); 









         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity118,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia118 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity120,
          'year' =>1,
          'value' => 0.2,
          'description' => 'Se suscribio el contrato No 19-6-0228-0-2016, del 21 de octubre de 2016, para el aislamiento de la Laguna de Guacoche en el corregimiento de Guacoche, mediante el tendido de 1300 metros lineales de cercado sobre el perímetro de dicho humedal menor. Sin embargo, la recuperación del ecosistema está en proceso, mientras se definen algunos inconvenientes presentados durante la ejecución.',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia120 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity122,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia122 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity124,
          'year' =>1,
          'value' => 84.6,
          'description' => 'Por concepto de tasa de uso de agua se recaudó un 167% ($334.838.437) con respecto a lo presupuestado ($200,000,000). Por concepto de tasa retributiva se recaudó un 39,9% ($399.588.871) con respecto a lo proyectado ($2.117.717.731,1), por concepto de tasa de aprovechamiento forestal se recaudó un 98% ($1.179.776.024,67) con respecto a lo proyectado ($1.200.000.000,00).',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia123 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity125,
          'year' =>1,
          'value' => 74.92,
          'description' => 'La ejecución de ingresos a la fecha es de un 74,92%, es decir, se recaudaron $19.998.983.587,92 con respecto a lo programado para el periodo 2016 de $27.079.124.479,24.',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia124 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity126,
          'year' =>1,
          'value' => 100,
          'description' => 'Todos los activos y bienes de la entidad se encuentran asegurados',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia125 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity127,
          'year' =>1,
          'value' => 62.66,
          'description' => 'La gestión del cobro persuasivo tuvo un avance del 80% al igual que el saneamiento contable (se expidieron las Res 1677 y 1678 del 30 de dic de 2016, por medio de la cual se realizó la depuración de algunos saldos contables de Corpocesar). Con respecto a la gestión del cobro coactivo, se recaudó efectivamente el 28%.',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia126 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity129,
          'year' =>1,
          'value' => 100,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia128 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity130,
          'year' =>1,
          'value' => 30,
          'description' => 'Se formularon, viabilizaron los proyectos del PAI 2016-2019. Y se gestionó la ejecución de proyectos con otras fuentes (PGN).',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia129 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity131,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia130 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity132,
          'year' =>1,
          'value' => 50,
          'description' => 'Se realizó el ajuste e implementación del sistema de gestión de calidad (sistema integrado de gestión) para su adecuación al cumplimiento de los requisitos establecidos en las normas NTCGP 1000:2009 e ISO 90001:2008 y su alistamiento para presentación ante el ente certificador.',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia131 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity133,
          'year' =>1,
          'value' => 100,
          'description' => 'Se cuenta con un equipo de profesionales que apoyan la implementación del modelo integrado de planeación y gestión de la entidad.',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia132 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity136,
          'year' =>1,
          'value' => 1,
          'description' => 'Se realizó socialización de la actualización del PIGA, concientizando a funcionarios, contratistas y público en general, con la estrategia ambiental CORPOCESAR + VERDE. Instalación de afiches  reproduciendo los diferentes tics de la estrategia, a través de los medios audiovisuales de la Corporación para difundir el PIGA. Inspección y Monitoreo diario antes de terminar la jornada de trabajo a los equipos sanitarios, eléctricos y electrónicos.  Toma de registros diarios de consumo en los contadores de Agua y Energía. Instalación de dispositivos de ahorro de agua en los sanitarios.',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia135 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity138,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia137 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity140,
          'year' =>1,
          'value' => 100,
          'description' => 'Se desarrollaron actividades del día de la mujer, participación en el desfile de piloneras, actividades recreativas y de esparcimiento a los funcionarios de la entidad.',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia139 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity141,
          'year' =>1,
          'value' => 100,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia140 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity142,
          'year' =>1,
          'value' => 1,
          'description' => 'Se dotaron las 4 seccionales de Corpocesar con equipos y elementos de oficina, para su buen funcionamiento. ',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia141 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity145,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia144 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity146,
          'year' =>1,
          'value' => 90,
          'description' => 'Publicación en página web de Corpocesar de toda la información de conformidad a lo establecido en la Ley 1712 de 2014 (estructura orgánica, funciones y deberes, la ubicación de sus sedes y áreas, divisiones o departamentos, y sus horas de atención al público, entre otras)',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia145 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity147,
          'year' =>1,
          'value' => 5,
          'description' => 'Se formularon estudios previos para su contratación.',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia146 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity148,
          'year' =>1,
          'value' => 50,
          'description' => 'Para la implementación del hardware y software de seguridad informática, se implementó el back-up de la información institucional, además la implementación de un sistema proxy para la administración de la red y seguridad del contenido.',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia147 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity150,
          'year' =>1,
          'value' => 1,
          'description' => 'Se adquirieron 25 PCs, impresoras, licencias del software de cada equipo. Adquisición de once (11) licencias office 2016 permanentes y siete (7) licencias windows 10 (Contrato No 19-6-130-2016)',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia149 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity151,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia151 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity2,
          'year' =>2,
          'value' => 0.2,
          'description' => 'Se encuentra en ejecución el ajuste al POMCA de la cuenca Magiriaimo, la cual se encuentra en la fase de aprestamiento, se inició la recolección de información secundaria, se realizó consulta ante el ministerio del Interior para certificar la presencia o no de comunidades etnicas, se aprobó plan de trabajo y formalizó acta de inicio del contrato No 19-6-0214-0-2017 con vigencia futura según Acuerdo No 012 de 2017. Además, se expidió la Resolución 0081 del 01 de febrero de 2018, por medio de la cual se declara en ordenación la cuenca del río Magiriaimo. ',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia153 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity3,
          'year' =>2,
          'value' => 2,
          'description' => 'Se inició proceso de articulación con las empresas mineras, para la priorización de implementación acciones de los POMCAs Calenturitas y Bajo Cesar-Ciénaga de Zapatosa en el marco del programa de compensación con dichas empresas. Además, a través del programa de compensación, se realizó el repoblamiento de la especie bocachico en las cienagas Mata de Palma y La Pachita, acompañado de un proceso de seguimiento, monitoreo y educación ambiental.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia154 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity4,
          'year' =>2,
          'value' => 2,
          'description' => 'Se inició proceso de articulación con las empresas mineras, para la priorización de implementación acciones de los POMCAs Calenturitas y Bajo Cesar-Ciénaga de Zapatosa en el marco del programa de compensación con dichas empresas. Además, a través del programa de compensación, se realizó el repoblamiento de la especie bocachico en las cienagas Mata de Palma y La Pachita, acompañado de un proceso de seguimiento, monitoreo y educación ambiental.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia155 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity5,
          'year' =>2,
          'value' => 6,
          'description' => 'Se apoya el proceso de formulación de los POMCAS de cuencas Compartidas como: POMCA río Algodonal (Corponor y Corpocesar), río Lebrija Medio (CDMB, CAR, Corponor y Corpocesar), cuenca río Bajo Magdalena entre El Banco y Plato (CSB, Corpamag y Corpocesar), río Bajo Cesar - Ciénaga de Zapatosa, Calenturitas y río Guatapurí.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia156 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity6,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia157 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity8,
          'year' =>2,
          'value' => 0.2,
          'description' => 'Se encuentra en proceso la formulación del PMA de la microcuenca Cuaré en jurisdicción del municipio de La Gloria (Contrato No 19-6-0193-0-2017 con vigencia futura según Acuerdo No 012 de 2017), según orden de priorización definido. Fase de aprestamiento en ejecución.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia159 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity10,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia161 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity11,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia162 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity12,
          'year' =>2,
          'value' => 0.4,
          'description' => 'Se suscribió el convenio 19-0-0007-2017 del 21 de julio de 2017, con la Universidad Tecnológica de Pereira, para la Formulación del PMA de Acuíferos Priorizados en jurisdicción de CORPOCESAR. Se ha avanzado en la actividad de priorización de acuíferos y la Fase de Aprestamiento y se avanza en la fase de Diagnóstico. El acuífero priorizado es es el denominado Cesar, que cubre el centro y norte del departamento del Cesar',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia163 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity13,
          'year' =>2,
          'value' => 3,
          'description' => 'Se desarrollaron tres (3) jornadas de monitoreo de niveles y calidad de aguas subterráneas, dando cobertura a un máximo de 42 pozos profundos (42 en la primera, 19 en la segunda, 24 en tercera) , distribuídos en 13 municipios (La Paz, Agustín Codazzi, Becerril, La Jagua de Ibirico, Chiriguaná, El Paso, Astrea, Chimichagua, Pelaya, Aguachica, El Copey, Valledupar, San Martín). ',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia164 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity14,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia165 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity15,
          'year' =>2,
          'value' => 100,
          'description' => 'La Corporación suscribió el convenio interadministrativo No. 19-6-0256-0-2016, con la empresa  EMDUPAR S.A. E.S.P, por valor de $2.644.825.820 , para ejecutar el proyecto: Mejoramiento de la capacidad de autodepuración del río Cesar, en el marco de implementación del Plan de Ordenamiento del Recurso Hídrico, en el departamento del Cesar. La corporacion ha venido participando en reuniones de Comité Técnico del proyecto . A la fecha, el proyecto se encuentra en la fase revision para la respectiva liquidación. Se presenta RENDER',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia166 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity16,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia167 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity17,
          'year' =>2,
          'value' => 100,
          'description' => 'Se realizó el seguimiento a  los 25 PSMVS objeto de seguimiento. La Corporación cumplió con el control y seguimiento a los PSMV, en torno a la practica de dos visitas anuales en concordancia a lo establecido en la resolución 1433 de 2004.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia168 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity18,
          'year' =>2,
          'value' => 100,
          'description' => 'Se realizaron visitas de control y seguimiento a los PUEAA de  EMPOBOSCONIA, EMPOGLORIA, ACUACHIM, UNIDAD DE SP TAMALAMEQUE, UNIDAD DE SP ASTREA, EMPASO; PALMERAS LA COSTA, EL COPEY, UNIDAD DE SERVICIOS PUBLICOS DE GONZALEZ, EMPOSANAL, APCES SAN MARTIN, E.S.P. DE AGUACHICA, EMPAZ, EMPOSANDIEGO, ESPUMA,EMCODAZZI, LA JAGUA DE IBIRICO, EMBECERRIL EMDUPAR, DRUMMOND, PRODECO MINA CALENTURITAS, COLOMBIA NATURAL RESOURCES CNR, PRODECO CARBONES DE LA JAGUA Y NORCARBON.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia169 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity19,
          'year' =>2,
          'value' => 37,
          'description' => 'La coordinacion cuenta con 746 expedientes donde reposan los diferentes actos administrativos relacionados con el recurso hidrico, en la vigencia 2017 se realizaron 284 actividades de seguimiento ambiental .',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia170 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity20,
          'year' =>2,
          'value' => 66.7,
          'description' => 'Todos los nuevos usuarios se encuentran registrados en el SIRH',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia171 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity21,
          'year' =>2,
          'value' => 100,
          'description' => 'En el marco de convenio No 19-7-0022-0-2016 suscrito con EMDUPAR S.A, se apoyó la implementacion de alternativas biotecnologicas a través del cual se desarrollaron las siguientes actividades: Monitoreo del caudal, Caracterización fisicoquimica de las aguas residuales, Monitoreo de olores ofensivos.                       ',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia172 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity22,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia173 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity23,
          'year' =>2,
          'value' => 1,
          'description' => 'A través de Acta del 25 de septiembre de 2018 se realizó la priorización de las corrientes objeto de formulación de PORH, siendo priorizado para el 2018 el río Chiriaimo.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia174 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity25,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia176 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity28,
          'year' =>2,
          'value' => 10,
          'description' => 'Se han adelantado visitas de seguimiento a los usuarios de tasa retributiva, del sector palmicultor y empresas de servicios públicos.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia179 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity29,
          'year' =>2,
          'value' => 100,
          'description' => 'La Corporación suscribió el contrato No. 19-6-0168-0-2017 con la UNIÓN TEMPORAL MUESTREO & CALIDAD, cuyo objeto es Evaluación de la calidad de aguas residuales domésticas y no domesticas que descargan en fuentes receptoras superficiales en el departamento del cesar a través de un laboratorio acreditado ante el IDEAM y elaboración de mapa de identificación en cartografía digital de cada uno de los puntos caracterizados. El contrato se encuentra en la etapa de revisión de los productos entregados, para su respectiva liquidación.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia180 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity30,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia181 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity31,
          'year' =>2,
          'value' => 1,
          'description' => 'Se ha estructurado el Acuerdo de gestión del GIT para la gestiòn del riesgo de desastres, cambio climàtico y gestiòn ambiental urbana, el cual contempla la gestìon para el apoyo al nodo regional caribe de CC. A través de la promoción del Plan Integral de Gestión del Cambio Climático Territorial Cesar.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia182 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity32,
          'year' =>2,
          'value' => 100,
          'description' => 'Se gestionó proyecto ante el FONAM, denominado: implementación de acciones de mitigación del cambio climático en el departamento del Cesar, el cual  se encuentra en ejecución y contempla acciones como construcción de estufas ecológicas, establecimiento de huertos leñeros y capacitación de comunidades en cambio climático.  Así mismo, la Corporación participó en 2 eventos (III Foro Institucional frente al cambio climático y en el encuentro Area Metropolitana Solar. Además se implementó la estrategia sembrando oxígeno como medida de mitigación del cambio climático en el municipio de Valledupar. (Registro Fotográfico)',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia183 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity33,
          'year' =>2,
          'value' => 1,
          'description' => 'Se ha estructurado el Acuerdo de Gestión del Grupo Interno de Trabajo para la gestiòn del riesgo de desastres, cambio climàtico y gestiòn ambiental urbana, el cual contempla las acciones para la actualización de software, hardware del SIG de la Corporación y adquisición de un drone, como herramienta de soporte para el monitoreo de las alertas o eventos asociados al cambio climático. ',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia184 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity35,
          'year' =>2,
          'value' => 1,
          'description' => 'A través de la Resolución No 0565 de 2017 se creò el grupo interno de trabajo para la gestiòn del riesgo de desastres, cambio climàtico y gestiòn ambiental urbana',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia186 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity36,
          'year' =>2,
          'value' => 100,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia187 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity37,
          'year' =>2,
          'value' => 1.5,
          'description' => 'Se  ejecutó el proyecto: Diseño e implementación de estrategias para la adaptación climática y restauración hídrica de 2 zonas piloto en la SNSM y SP para la recuperación de la capacidad de regulación hídrica. Y se avanza en la formulación de un Estudio de investigaciòn en cambio climático de conformidad a los lineamientos de la PNCC.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia188 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity38,
          'year' =>2,
          'value' => 100,
          'description' => 'Se ejecutó proyecto para la construcción de obras de mitigación en el río Badillo. Y se avanza en la construcción de obras de mitigación en los municipios de Aguachica (Qda Buturama), San Martín (Torcoroma) y Río de Oro (Rio De Oro) a través del Contrato No 19-6-0170-0-2017. Se realiza acompañamiento permanente a los Consejos municipales de gestión del riesgo de los municipios de Bosconia, El Paso, Codazzi, San Alberto, Gamarra y Valledupar, y al Consejo Deptal de gestión del riesgo. De manera conjunta con el PNUD, el municipio de Valledupar se crearon brigadas forestales para mitigar los incendios forestales en el corregimiento de Caracolí (veredas La Pradera, Buenos Aires, Mata de Caña), con estas medidas se redujeron los eventos de incendios pasando de 26 en el 2016 a sólo 4 eventos en el I semestre de 2017. Además se han liderado medidas no estructurales tales como la elaboración de plan de acción en prevención y preparación en el componente de educación ambiental y sistema de alertas tempranas en el río Guatapurí, acequia Las Mercedes y puntos vulnerables en esta corriente. Así mismo, se desarrolla un plan de acción de prevención y mitigación de eventos de deslizamientos e incendios forestales en el cerro Donarua, corregimiento Guatapurí, resguardo Kankuamo.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia189 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity39,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia190 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity40,
          'year' =>2,
          'value' => 10,
          'description' => 'Se desarrolla el contrato No 19-6-0221-0-2017 para adelantar la actualización del PAR de lucha contra la desertificación y la sequía en el departamento del Cesar.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia191 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity41,
          'year' =>2,
          'value' => 1,
          'description' => 'Se suscribió Convenio de Asociación No 19-7-0038-0-2016 con el objeto de: AUNAR ESFUERZOS TÉCNICOS, ADMINISTRATIVOS Y FINANCIEROS PARA LA EJECUTAR EL PROYECTO CUYO OBJETO ES: IMPLEMENTACIÓN DE ACCIONES PARA PREVENIR LA DESERTIFICACIÓN EN LOS ECOSISTEMAS SECOS DE LOS MUNICIPIOS DE ASTREA, BOSCONIA, EL COPEY Y EL PASO, DEPARTAMENTO DEL CESAR. Se realizó la instalación de 400 estufas ecológicas, se reforestaron  70 hectáreas protectora-productora, aislamiento de 100 km de áreas de bosque ripario (ronda de cauces) y se desarrolló un piloto con la tecnología de prevención de deforestación Groasis-Waterboxx. (Desiertos verdes): 3.000 sistemas de riego de liberación lenta.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia192 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity42,
          'year' =>2,
          'value' => 100,
          'description' => 'Se realizaron campañas educativas en cuanto a recolección y disposición final de residuos de aparatos eléctricos y electrónicos “RAEEs”, pilas y/o acumuladores, bombillas, instalación de puntos verdes Lito en la UPC.
        ',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia193 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity43,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia194 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity45,
          'year' =>2,
          'value' => 1,
          'description' => 'Se adelanta proceso para la Implementación del POF a través de la incorporación en las determinantes ambientales articulado a los acuerdos de Paz (punto 1 y 4) Res 0095 del 6 de febrero de 2018.Se adelantaron operativos de control para disminuir el tráfico ilegal de madera, en el marco del pacto intersectorial por la madera legal',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia196 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity46,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia197 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity47,
          'year' =>2,
          'value' => 96.6,
          'description' => 'Se esta apoyando a CORPOICA para la  formulación de estudios para la declaratoria como area protegida el Centro de Investigación Motilonia en jursidicción del municipio de Agustin Codazzi. Y se suscribió Convenio No 198 de 2017 - Vig Futura según Acuerdo No 019 de 2017 con Corpamag para la elaboración de los estudios básicos para la declaratoria como area protegida de la Cienaga de Zapatosa.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia198 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity48,
          'year' =>2,
          'value' => 100,
          'description' => 'Se tiene la propuesta del Plan de Manejo del Parque Natural Regional  Perija, en jurisdicción de los municipios de Manaure, La Paz y Agustin Codazzi, declarado  mediante Acuerdo No 016 del 16 de diciembre de 2016,  se desarrolló contrato No 19-6-0218-0-2017 para la formulación de dicho PMA.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia199 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity49,
          'year' =>2,
          'value' => 1,
          'description' => 'A través del Acuerdo del Consejo Directivo No 013 del 23 de junio de 2017 se creó el SIDAP del departamento del Cesar.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia200 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity50,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia201 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity51,
          'year' =>2,
          'value' => 100,
          'description' => 'Formación de guardianas de paz y ambiente en área de influencia del PNR Serranía de Perijá jurisdicción del municipio de La Paz (Convenio No 19-7-0003-0-2017).  Y se realizó el aislamiento de humedales.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia202 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity52,
          'year' =>2,
          'value' => 1,
          'description' => 'En el marco el proyecto USO SOSTENIBLE Y CONSERVACIÓN DE LA BIODIVERSIDAD EN ECOSISTEMAS SECOS PARA GARANTIZAR EL FLUJO DE SUS SERVICIOS ECOSISTÉMICOS Y MITIGAR PROCESOS DE DEFORESTACIÓN Y DESERTIFICACIÓN que  desarrolla  el PNUD , en la cuenca del Garupal - Diluvio, veredas Tierras Nuevas, Praderas de Camperucho, Buenos Aires, Mata de Caña y campo Alegre, municipios de Valledupar y El Copey. En el marco del citado proyecto la Corporación identifico  algunas necesidades de las comunidades y suscribio Contrato para la realización de Acciones de  promoción, socialización, organización y capacitación comunitaria para la apropiación y gestión del plan de Acción Regional de Lucha Contra la Desertificación y la Sequía, y Suministro y construcción de estufas ecológicas eficientes.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia203 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity53,
          'year' =>2,
          'value' => 147.8,
          'description' => 'Se formularon estudios previos para la formulación del PM de la Ciénaga de San Marcos y se suscribió el Contrato No 19-6-0193-0-2017 y vigencia futura según Acuerdo No 022 de 2017 para su ejecución.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia204 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity54,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia205 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity55,
          'year' =>2,
          'value' => 100,
          'description' => 'Se gestionó con el sector privado (empresas mineras), la articulación de estrategias o alianzas que garanticen la operación del CAVFS en el periodo.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia206 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity56,
          'year' =>2,
          'value' => 3,
          'description' => 'En el marco del proceso de operación del CAVFS, se desarrollan acciones para la conservación del oso andino, cóndor y felinos en el departamento del Cesar. 

         ',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia207 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity57,
          'year' =>2,
          'value' => 1,
          'description' => 'Se adelanta estudio de la especie invasora caracol africano, además se han desarrollado capacitaciones a las comunidades para un adecuado manejo y control ante la presencia de la especie en sus hogares.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia208 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity58,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia209 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity59,
          'year' =>2,
          'value' => 1,
          'description' => 'Se definieron lineamientos para la incorporación del CC en el ordenamiento territorial municipal mediante directriz para definir perfil climático municipal y definir acciones de ordenamiento con base al mismo (Resolución 0095 del 6 de febrero de 2017',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia210 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity60,
          'year' =>2,
          'value' => 3,
          'description' => 'Se adelantó gestión con los municipios de Valledupar, Aguachica, Codazzi y Bosconia, para actualizar la linea base ambiental urbana, conforme a los lineamientos definidos por el MADS.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia211 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity61,
          'year' =>2,
          'value' => 98,
          'description' => 'Se adelantaron visitas de control y seguimiento al Plan de Gestion Integral de Residuos Solidos -PGIRS, de 24 de los 25 municipios del Cesar (excepto el municipio de Pelaya que por dificultades en la programación de la visita no fue posible realizar)',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia212 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity62,
          'year' =>2,
          'value' => 4,
          'description' => 'Convenio No 19-7-0018-0-2017 con el municipio de Aguachica para el mejoramiento del Parque ecológico Potosí de dicho municipio; Convenio No 19-6-0247-0-2016 con el municipio de Manaure para la caracterización del riesgo e impacto del cambio climático en el OT en la zona urbana de este municipio;Convenio No 19-7-0013-0-2016 con el municipio de Valledupar, la Gobernación del Cesar y la Fundación CIDMAG para el manejo y establecimiento de árboles urbanos en el municipio de Valledupar . Apoyo SIVA en la identificación de amenazas y vulnerabilidades en el proceso de construcción de la tercera fase del canal de Panamá',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia213 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity63,
          'year' =>2,
          'value' => 100,
          'description' => 'Se implementaron tecnologias de P+L  a través de la instalación de paneles solares en instituciones educativas de la comunidad indígena wiwa, apoyo a proyectos apicolas, implementación de la estrategia sembrando oxígeno en el municipio de Valledupar.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia214 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity65,
          'year' =>2,
          'value' => 100,
          'description' => 'En el marco de Convenio suscrito con la Gobernación del Cesar y municipio de Valledupar (No 19-7-0013-0-2016), se desarrolló proyecto para el mejoramiento de la arborización urbana en el municipio de Valledupar.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia216 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity66,
          'year' =>2,
          'value' => 200,
          'description' => 'Campañas didacticas efectuadas en las zonas pobladas de La Loma, La Jagua de Ibirico, Bosconia y Valledupar; mediante mimos y entrega de folletos informativos, las cuales contenian tips sobre la prevención del impacto sonoro y los resultados de monitoreo.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia217 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity68,
          'year' =>2,
          'value' => 100,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia219 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity69,
          'year' =>2,
          'value' => 100,
          'description' => 'Se gestionó con FONADE y la Gobernación del Cesar, la posibilidad de alianzas público privadas para la construcción del ecoparque Guatapurí.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia220 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity70,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia221 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity71,
          'year' =>2,
          'value' => 100,
          'description' => 'Se suscribió Convenio No 19-7-0018-0-201 con el municipio de Aguachica para el apoyo a la construcción y mejoramiento del parque ecologico Potosi, en este municipio.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia222 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity72,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia223 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity73,
          'year' =>2,
          'value' => 100,
          'description' => 'Se formuló proyecto para la implementación del sistema VITAL en la entidad. Se realizó capacitación del SUIT, todos los trámites están registrados en la plataforma SUIT. Se avanza en la implementación del sistema, iniciando con el proceso de digitalización.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia224 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity74,
          'year' =>2,
          'value' => 10,
          'description' => 'Los trámites fueron registrados en la plataforma SUIT y se estandarizaron todos los procedimientos a llevar a cabo para la solicitud de un trámite ambiental. Con la conformación de los grupos internos de trabajo para la gestión jurídica ambiental, de saneamiento ambiental y control de vertimientos, de PML, RESPEL y COP, se fortalecerá el proceso de trámites, a través de mecanismos que permitan la racionalización de los mismos.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia225 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity75,
          'year' =>2,
          'value' => 60,
          'description' => 'Se resolvieron el 60% de las solicitudes radicadas en la Coordinación de Recursos Naturales y áreas protegidas.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia226 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity76,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia227 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity79,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia230 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity80,
          'year' =>2,
          'value' => 85,
          'description' => 'Considerando que el Grupo Interno de Trabajo fue creado a partir del mes de agosto del año 2017 fueron priorizados 40 expedientes objeto de revision documental, de los cuales se realizaron 35 opteniendose un porcentaje de cumplimiento del 87,5 %',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia231 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity81,
          'year' =>2,
          'value' => 100,
          'description' => 'Teniendo en cuenta que el  Grupo Interno de Trabajo fue creado a partir del mes de agosto del año 2017 fueron realizadas 343 actividades de seguimiento con el fin de atender alertas identificadas en los expedientes.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia232 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity82,
          'year' =>2,
          'value' => 98,
          'description' => 'Teniendo en cuenta los indicadores minimos de gestion establecidos por el Ministerio de Amiente y Desarrollo Sostenile se priorizaron los proyectos objeto de este indicador, fueron identificados 350 expedientes de los cuales se realizaron actividades de seguimiento en 343 de los mismos, obteniendose un porcentaje de cumplimiento del 98%',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia233 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity83,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia234 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity84,
          'year' =>2,
          'value' => 1,
          'description' => 'Se actualizaron las determinantes a través de la Res 0095 del 6 de febrero de 2017',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia235 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity86,
          'year' =>2,
          'value' => 23,
          'description' => 'Se programó y convocó a los 25 municipios del Cesar y se realizó el seguimiento a los 23 municipios, excepto el municipio de Pailitas y Curumaní, los cuales por inconvenientes de programación de las secretarías de planeación de dichos municipios, no fue posible realizar.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia237 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity87,
          'year' =>2,
          'value' => 78,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia238 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity88,
          'year' =>2,
          'value' => 1,
          'description' => 'Se  ejecutó el estudio de escenarios de riesgo y propuestas de manejo en la cuenca media y baja del río Ariguaní (Contrato No 19-6-0252-0-2016). Además se ejecutó proyecto para mitigar procesos de inundación en la Cienaga de San Marcos a través del dragado del cuerpo de agua y construcción de un dique de 220 ml (Contrato No 19-6-0253-0-2016). Y se realiza acompañamiento permanente a los Consejos municipales de gestión del riesgo de los municipios de Bosconia, El Paso, Codazzi, San Alberto, Gamarra y Valledupar, y al Consejo Deptal de gestión del riesgo. De manera conjunta con el PNUD, el municipio de Valledupar se crearon brigadas forestales para mitigar los incendios forestales en el corregimiento de Caracolí (veredas La Pradera, Buenos Aires, Mata de Caña), con estas medidas se redujeron los eventos de incendios pasando de 26 en el 2016 a sólo 4 eventos en el I semestre de 2017. ',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia239 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity89,
          'year' =>2,
          'value' => 2,
          'description' => 'Se  ejecutó el estudio de escenarios de riesgo y propuestas de manejo en la cuenca media y baja del río Ariguaní (Contrato No 19-6-0252-0-2016). Además se ejecutó proyecto para mitigar procesos de inundación en la Cienaga de San Marcos a través del dragado del cuerpo de agua y construcción de un dique de 220 ml (Contrato No 19-6-0253-0-2016). Y se realiza acompañamiento permanente a los Consejos municipales de gestión del riesgo de los municipios de Bosconia, El Paso, Codazzi, San Alberto, Gamarra y Valledupar, y al Consejo Deptal de gestión del riesgo. De manera conjunta con el PNUD, el municipio de Valledupar se crearon brigadas forestales para mitigar los incendios forestales en el corregimiento de Caracolí (veredas La Pradera, Buenos Aires, Mata de Caña), con estas medidas se redujeron los eventos de incendios pasando de 26 en el 2016 a sólo 4 eventos en el I semestre de 2017. ',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia240 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity90,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia241 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity91,
          'year' =>2,
          'value' => 0.2,
          'description' => 'De manera conjunta con USAID y la UTP se realizó el diseño de la red hidrometeorológica y de alertas tempranas del río Guatapurí y se formuló proyecto y aprobó en el OCAD Corpocesar para la revisión del diseño de la red hidrometeorológica del dpto del Cesar propuesta por el IDEAM. Así mismo, se formuló otro perfil  en el que se contempla la revisión del diseño de la red hidrometeorológica y la construcción de la red correspondiente a la cuenca del río Guatapurí, esto último con base en el estudio desarrollado por la Universidad Tecnológica de Pereira para USAID para la cuenca en mención, durante el año 2016.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia242 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity93,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia244 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity94,
          'year' =>2,
          'value' => 75,
          'description' => 'Se desarrollaron tres jornadas (1 jornada de mayo a junio, 2 jornada en julio, 3 jornada de agosto a septiembre)  en las cuales se han aforado los caudales de un máximo de 41 corrientes de aguas superficiales (38 en la 1 jornada, 41 en la 2 jornada, 32 en la 3 jornada) abastecedoras de acueductos urbanos, corregimentales y veredales,  continuando con la construcción de la línea base ambiental en materia de comportamiento de caudales que se producen como respuesta al régimen climático del departamento del Cesar. ',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia245 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity96,
          'year' =>2,
          'value' => 210,
          'description' => 'Se relacionan los 12 informes mensuales de Enero a Dic 2017, 2 informe trimestral, 1 informe semestral y 1 informa anual. (Total 16 Informes). Adicionalmente la misma cantidad de informes son los generados para la red de monitoreo que se localiza en la ciudad de Valledupar (16 informes), mas 1 informe Especial del   dia sin carro  .',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia247 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity97,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia248 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity99,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia250 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity100,
          'year' =>2,
          'value' => 5,
          'description' => 'Se elaboraron los estudios previos y se celebró Convenio No 19-7-0015-0-2017 con la Universidad Popular del Cesar para la revisión, ajuste metodológico y reformulación del PGAR/PLANEAR para su adopción y socialización en el área de jurisdicción de la Corporación Autónoma Regional del Cesar. No obstante, el Convenio fue liquidado por incumplimiento de la Universidad. Se incorporarán los recursos al presupuesto 2018 y se procederá a su contratación por concurso público de méritos.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia251 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity101,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia252 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity102,
          'year' =>2,
          'value' => 100,
          'description' => 'A través del FORO   LOS PRAE COMO UNA ALTERNATIVA DE DESARROLLO SOSTENIBLE DE LA REGION realizado en el municipio de Aguachica y del desarrollo de cuatro Talleres Hacia la cualificación de los Proyectos Ambientales Escolares PRAES significativos y asociados departamento del Cesar, se promueve la incorporación de la dimensión ambiental en los proyectos ambientales escolares.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia253 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity103,
          'year' =>2,
          'value' => 62,
          'description' => 'Talleres Asociaciones Mixta Occidente III; Mixto Sector Norte; Fundaciones Nueva Era Ecologica; Menores del Futuro; Madres cominitarias 20 de julio; Asociación Riveras del Río II,  IDRED; Centro de Desarrollo Infantil el Rosal (CDI)  y Asociación  de Hogares Comintarios las Trinitarias del   Municipio de Valledupar);    San Diego, CDI Asocref, Asociación Niños Felices San Diego, CDI Horas Felices y CDI San Diego Media  Luna, Los Tupes.;  LA PAZ: Barrio 6 de Enero; CDI San Jose de Oriente.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia254 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity104,
          'year' =>2,
          'value' => 2,
          'description' => 'CDI, Barrios Corregimiento de Atánquez; Mujeres Afro descendientes Badillo y Los Venados (VALLEDUPAR).',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia255 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity105,
          'year' =>2,
          'value' => 25,
          'description' => 'Dos talleres  en las sedes CORPOCESAR en Valledupar y Aguachica. Reuniones de trabajo funcionarios Alcaldia Municipal de: La Paz, Manaure, San Diego, Pelaya, Aguachica, Rio de Oro, Gonzalez, San Alberto, San Martin, Gamarra,  La Gloria, Tamalameque, Pailitas, Curumani, Chimichagua, Chiriguana, El Paso, Astrea, Bosconia, El Copey, Pueblo Bello, La Jagua de Ibirico, Becerril, Codazzi; Valledupar.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia256 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity106,
          'year' =>2,
          'value' => 25,
          'description' => 'Dos talleres Valledupar y Aguachica. Reuniones de trabajo funcionarios Alcaldia Municipal de: La Paz, Manaure, San Diego, Pelaya, Aguachica, Rio de Oro, Gonzalez, San Alberto, San Martin, Gamarra,  La Gloria, Tamalameque, Pailitas, Curumani, Chimichagua, Chiriguana, El Paso, Astrea, Bosconia, El Copey, Pueblo Bello, La Jagua de Ibirico, Becerril, Codazzi; Valledupar.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia257 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity107,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia258 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity109,
          'year' =>2,
          'value' => 1,
          'description' => 'Se presentó proyecto ante el FONAM para la ejecución de la fase II del programa Guardabosques Corazón del Mundo. Solo se contó con los proyectos formulados por el pueblo Kankuamo en el mes de septiembre de 2017, por lo que esta gestión no pudo iniciarse en esta vigencia. ',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia260 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity110,
          'year' =>2,
          'value' => 1,
          'description' => 'Se suscribió el contrato No 19-6-0187-0-2017, del 1° de noviembre de 2017, con la Unión Temporal Desarrollo Indígena, en el cual se incluyó la construcción de un sistema de abastecimiento de agua para la comunidad indígena Arhuaca de Birwa, en el corregimiento de Azucarbuena, municipio de Valledupar. A 13 de enero de 2018,  esta actividad ya presentaba un avance de aproximadamente un 60%, por lo que a diciembre 31 se estima en un 50%.     ',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia261 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity111,
          'year' =>2,
          'value' => 0.4,
          'description' => 'Se suscribió el contrato No 19-6-0187-0-2017, del 1° de noviembre de 2017, con la Unión Temporal Desarrollo Indígena, en el cual se incluyó la construcción de una batería sanitaria, un lavaplatos y un lavadero comunitario para la comunidad indígena Arhuaca de Birwa, en el corregimiento de Azucarbuena, municipio de Valledupar. A 13 de enero de 2018,  esta actividad ya presentaba un avance de aproximadamente un 30%, por lo que a diciembre 31 se estima en un 20%.     ',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia262 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity112,
          'year' =>2,
          'value' => 510,
          'description' => 'Esta actividad se desarrolló en el marco de ejecución del convenio No 19-7-019-0-2016, del 13 de septiembre de 2016, que se liquidó este año, y a través del cual se adquirieron a través del resguardo Arhuaco aproximadamente 510 hectáreas de tierra en cinco predios en las cuencas de los ríos Diluvio y Azucarbuena, municipio de Valledupar. ',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia263 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity113,
          'year' =>2,
          'value' => 1,
          'description' => 'Dentro del proyecto Uso Sostenible y Conservación de la biodiversiad en zonas secas para garantizar el flujo de servicios ecosistémicos y mitigar los impectos de la deforestación y desertificación, que desarrolla el PNUD en el marco del proyecto GEF del MADS, en el cual CORPOCESAR participa como socio estratégico, se ha desarrollado la caracterización biofisica y socioeconómica , análisis de los atributos ecológicos y delimitación del área y se tiene una propuesta de declaratoria de un Distrito de Conservación de Suelos, la cual  fué revisada por CORPOCESAR y PNUD, y se encuentra en ajuste por parte de   PATRIMONIO NATURAL    que el consultor del proyecto, para ser entregado un docuemento final al PNUD, y este a CORPOCESAR para que esta desarrolle la ruta de declaratoria; la declaratoria comprendería  un área aproximada de 7500 hectáreas en la cuenca Garupal-Diluviopara definir categoria). ',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia264 = DB::getPdo()->lastInsertId(); 




         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity118,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia269 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity119,
          'year' =>2,
          'value' => 0.1,
          'description' => 'Aunque esta actividad no tenia meta para el 2016, pero si para el 2017, se avanzó en la concertación con las comunidades de Guacoche y Guacochito y se logró realizar los trabajos de campo necesarios que permitieron formular los estudios previos para la contratación de la consultoria, estudios que se entregaron a la Subdirección General del Área Administrativa y Financiera para su revisión y demás fines de su competencia, con el objeto que el estudio de amenaza puediera ser contratado a inicios del año 2017, teniendo en cuenta que los recursos disponibles se trasladaron a vigencia futura para asegurar su inversión durante el presente año.  ',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia270 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity120,
          'year' =>2,
          'value' => 0.1,
          'description' => 'Se suscribió el contrato No 19-6-0194-0-2017, del 20 de noviembre de 2017, con la Unión Temporal ABIGAIL , para la implementación de 2000 metros de cercado para aislar tres áreas de interés ambiental y cultural para la comunidad afrocolombiana de Guacochito. ',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia271 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity121,
          'year' =>2,
          'value' => 0.1,
          'description' => 'Se suscribió el contrato No 19-6-0194-0-2017, del 20 de noviembre de 2017, con la Unión Temporal ABIGAIL , en el cual se incluyó el establecimiento de tres (3) hectáreas de unidades agroforestales a nivel de parcelas en la comunidad afrocolombiana de Guacochito. ',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia272 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity122,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia273 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity124,
          'year' =>2,
          'value' => 84.4,
          'description' => 'Por concepto de tasa de uso de agua se recaudo un % ($269.831.061) con respecto a lo facturado ($350.000.000,00). Por concepto de tasa retributiva se  recaudo un 91,8% ($688.343.702) con respecto a lo facturado ($750.000.000)',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia274 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity125,
          'year' =>2,
          'value' => 100,
          'description' => 'La ejecución de ingresos va en un 100%, es decir, se recaudaron 24.218.806.647,97 con respecto a lo programado para el periodo 2017 de $22.196.073614,19.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia275 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity126,
          'year' =>2,
          'value' => 100,
          'description' => 'Todos los activos y bienes de la entidad se encuentran asegurados con suramericana ',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia276 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity127,
          'year' =>2,
          'value' => 100,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia277 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity128,
          'year' =>2,
          'value' => 5,
          'description' => 'Se asistió la capacitación convocada por el MADS para definir la estrategia de implementación de las compras públicas sostenibles en la entidad.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia278 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity129,
          'year' =>2,
          'value' => 100,
          'description' => 'Se han realizado los aportes al Fondo de Compensación Ambiental conforme a lo establecido en la Ley.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia279 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity130,
          'year' =>2,
          'value' => 100,
          'description' => 'La Corporación realiza gestiones ante los diferentes fondos para la cofinanciación de proyectos de interés regional ',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia280 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity131,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia281 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity132,
          'year' =>2,
          'value' => 95,
          'description' => 'Se continúa desarrollando las actividades para asegurar el manetnimiento y mejora del SIGC, en el marco de la gestión de los procesos estratégicos: planeación estratégica y gestión y mejora del SIGC.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia282 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity133,
          'year' =>2,
          'value' => 100,
          'description' => 'Se cuenta con los servicios profesionales de personal idóneo en la oficina de control interno y la Subdirección de Planeación.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia283 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity134,
          'year' =>2,
          'value' => 100,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia284 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity135,
          'year' =>2,
          'value' => 70,
          'description' => 'Se contrató la actualización de las TRD (Contrato No 19-6-0202-0-2017), el contratista solicitó el nuevo Manual de Funciones y otros documenttos: el proceso avanza satisfactoriamente, de acuerdo a lo programado.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia285 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity136,
          'year' =>2,
          'value' => 82,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia286 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity137,
          'year' =>2,
          'value' => 1,
          'description' => 'Se realizó la adquisición de un drone, para apoyo a la SGA y SGP en el  levantamiento de información de aerofotografía y video de alta calidad en el campo de telecomunicaciones y apoyo técnico a las distintas funciones que desempeña la Corporación o eventos de carácter público que contribuyen en gran medida en los procesos de diagnóstico de los distintos proyectos y programas corporativos.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia287 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity138,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia288 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity139,
          'year' =>2,
          'value' => 1,
          'description' => 'A través de la Resolución 0275 del 2 de mayo de 2017, se efectúan unas incorporaciones a la nueva planta de personal y la Resolución  0565 de 2017, por medio de la cual se crean grupos internos de trajo - GIT - al interior de la Corporación.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia289 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity140,
          'year' =>2,
          'value' => 86,
          'description' => 'Se apoyaron actividades deportivas, recreativas para los funcionarios y sus familiares, establecidas en el programa de bienestar social y estímulos.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia290 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity141,
          'year' =>2,
          'value' => 90,
          'description' => 'El Programa de capacitación fue desarrollado en un 90%',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia291 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity142,
          'year' =>2,
          'value' => 4,
          'description' => 'Mantenimiento de los equipos e instalaciones de las 4 seccionales.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia292 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity143,
          'year' =>2,
          'value' => 1,
          'description' => 'Mantenimiento de las instalaciones, equipos, adecuación de oficinas.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia293 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity145,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia295 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity146,
          'year' =>2,
          'value' => 100,
          'description' => 'Publicación de procesos de contratación: 250, informes, rendición de cuentas, Resoluciones:396, Autos:247, escaneos: 3250',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia296 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity147,
          'year' =>2,
          'value' => 100,
          'description' => 'Se adquirieron 37 licencias G SUITE BUSSINES de Google',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia297 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity149,
          'year' =>2,
          'value' => 100,
          'description' => 'Se esta realizando la implementacion',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia299 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity150,
          'year' =>2,
          'value' => 1,
          'description' => 'Se adquirieron 3 impresoras, una de ellas la Impresora Termina requerida por Ventanilla Unica.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia300 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity151,
          'year' =>2,
          'value' => 150,
          'description' => 'Se realizaron 4 capacitaciones:
        SUIT - Racionalizacion de Tramites.
        Datos Abiertos
        SIGEP - Hoja de Vida de la Funsion Publica.
        Ventanila Unica de Tramites Ambientales en Linea - VITAL',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia301 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity151,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia302 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity1,
          'year' =>3,
          'value' => 4,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia303 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity2,
          'year' =>3,
          'value' => 2,
          'description' => 'Se encuentra en ejecución el ajuste al POMCA de la cuenca del río Magiriaimo, del cual se terminó la fase de aprestamiento (100%) y se avanza la fase de diagnóstico (90%), se inició la recolección de información secundaria, se realizó consulta ante el ministerio del Interior para certificar la presencia o no de comunidades etnicas, se aprobó plan de trabajo y formalizó acta de inicio del contrato No 19-6-0214-0-2017 con vigencia futura según Acuerdo No 012 de 2017. Además, se expidió la Resolución 0081 del 01 de febrero de 2018, por medio de la cual se declara en ordenación la cuenca del río Magiriaimo. ',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia304 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity3,
          'year' =>3,
          'value' => 6,
          'description' => 'Acompañamiento a proyecto del MADS de adaptación al cambio climático en Zapatosa y ejecución del proyecto de mejoramiento ambiental del complejo cenagoso de Zapatosa a través de acciones de repoblamiento, reforestación, seguimiento y monitoreo, educación ambiental.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia305 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity4,
          'year' =>3,
          'value' => 2,
          'description' => 'Acompañamiento a proyecto del MADS de adaptación al cambio climático en Zapatosa y ejecución del proyecto de mejoramiento ambiental del complejo cenagoso de Zapatosa a través de acciones de repoblamiento, reforestación, seguimiento y monitoreo, educación ambiental.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia306 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity5,
          'year' =>3,
          'value' => 1,
          'description' => '2 contratistas de apoyo para el GIT POMCAS-POT para acompañamiento proceso de formulación de POMCA Guatapuri y Magiriaimo.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia307 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity6,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia308 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity8,
          'year' =>3,
          'value' => 2,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia310 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity9,
          'year' =>3,
          'value' => 1,
          'description' => 'Se adelantaron talleres de Educación Ambiental (Ejecución del Programa Educacion Ambiental del PMA microcuenca Cuaré) con las comunidades del corregimiento de Ayacucho, municipio de La Gloria (PMA Cuaré), en buenas prácticas para la protección y conservación del recurso pesquero, proyectos productivos, PRAES y PROCEDAS.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia311 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity10,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia312 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity13,
          'year' =>3,
          'value' => 100,
          'description' => 'Se desarrollaron 3 jornadas de monitoreo de niveles y calidad de agua subterránea, abarcando la zona de los Valles del río Cesar y del río Magdalena, desde el Municipio de Valledupar, hasta el municipio de San Alberto. Así, se hizo presencia en la ubicación de 60 puntos de manifestacion de agua subterranea, discriminados en: 53  Pozos Profundos, 7 Aljibes y 1 Manantial, midiendo el nivel estático (o dinámico si fuese el caso) y la calidad físicoquímica básica del agua subterránea (pH, conductividad eléctrica y temperatura), Así como el estado general del punto de captación. Lo anterior se ha llevado a cabo mediante la ejecucion de tres jornadas de monitoreo en los meses de Julio, Octubre-Noviembre de 2018.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia315 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity14,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia316 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity15,
          'year' =>3,
          'value' => 80,
          'description' => 'Se ejecutó el proyecto piloto de construcción de la planta de aireación por parte de EMDUPAR a través del convenio No. 19-6-0256-0-2016 dentro del marco del convenio suscrito entre el EMDUPAR y CORPOCESAR. Seguimiento a los resultados del proyecto',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia317 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity16,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia318 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity17,
          'year' =>3,
          'value' => 100,
          'description' => 'Se realizó el seguimiento a  los 25 PSMVS objeto de seguimiento. La Corporación cumplió con el control y seguimiento a los PSMV, en torno a la practica de dos visitas anuales en concordancia a lo establecido en la resolución 1433 de 2004.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia319 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity18,
          'year' =>3,
          'value' => 100,
          'description' => 'Se realizaron visitas de control y seguimiento a los PUEAA de Rio de Oro, Gonzalez, Chimichagua, Tamalameque, Pailitas, Gamarra, Chiriguana, Curumani, San Martin, La Gloria, San Diego, Manaure, La Paz, Valledupar, Codazzi, La Jagua, Becerril, El Paso, Astrea, San Alberto, Barrio San Miguel (rio de oro).',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia320 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity19,
          'year' =>3,
          'value' => 49,
          'description' => 'La coordinacion cuenta con 752 expedientes donde reposan los diferentes actos administrativos relacionados con el recurso hidrico, en la vigencia 2018 se realizaron 418 actividades de seguimiento ambiental .',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia321 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity20,
          'year' =>3,
          'value' => 90.5,
          'description' => 'Todos los nuevos usuarios se encuentran registrados en el SIRH (23 nuevos usuarios de concesiones hídricas han sido registrados en el SIRH)',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia322 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity21,
          'year' =>3,
          'value' => 55,
          'description' => 'Con la suscripción del Convenio No. 19-7-0014-0-2017 con el municipio de Pueblo Bello, cuyo objeto es  IMPLEMENTACION DE LOS PSMV´S PARA DISMINUIR LA CONTAMINACION HIDRICA (MEDIDAS ESTRUCTURALES Y NO ESTRUCTURALES) A TRAVES DE LA ADECUACION Y PUESTA EN MARCHA DE LA PLANTA DE TRATAMIENTO DE AGUAS RESIDUALES DEL MUNICIPIO DE PUEBLO BELLO-CESAR. Se encuentra en ejecución.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia323 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity22,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia324 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity24,
          'year' =>3,
          'value' => 100,
          'description' => 'Se gestionó proyecto ante el OCAD de Corpocesar para la formulación del PORH del río Chiriaimo, el cual se encuentra en ejecución.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia326 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity25,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia327 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity26,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia328 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity27,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia329 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity28,
          'year' =>3,
          'value' => 12,
          'description' => 'Se ha adelantado seguimiento a: Matadero Codazzi, Embecerril ESP, Empojagua, Empaso ESP - La Loma, Matadero Arjona, Minas CDJ, PRODECO, CNR - La Francia',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia330 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity29,
          'year' =>3,
          'value' => 100,
          'description' => 'En concordancia al cronograma de visitas, se ha  ejecutado a satisfacción esta meta.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia331 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity30,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia332 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity31,
          'year' =>3,
          'value' => 1,
          'description' => 'Se participó en las mesas de trabajo adelantadas por el nodo caribe de CC ',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia333 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity32,
          'year' =>3,
          'value' => 100,
          'description' => 'Se ejecutó proyecto ante el FONAM, denominado: Implementación de acciones de mitigación del cambio climático en el departamento del Cesar, y contempla acciones como construcción de estufas ecológicas, establecimiento de huertos leñeros y capacitación de comunidades en cambio climático. Así mismo, a través del GIT para la gestión del riesgo de desastres, cambio climático y gestión ambiental urbana, se trabajan acciones en materia de gestión del riesgo y cambio climático en el departamento del Cesar.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia334 = DB::getPdo()->lastInsertId(); 



         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity36,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia338 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity38,
          'year' =>3,
          'value' => 100,
          'description' => 'Se ejecutó proyecto para la construcción de obras de mitigación en el río Chiriaimo. Y se avanza en la construcción de obras de mitigación en los municipios de Aguachica (Qda Buturama) y Río de Oro (Rio De Oro) a través del Contrato No 19-6-0170-0-2017. Se realiza acompañamiento permanente a los Consejos municipales de gestión del riesgo de los 25 municipios del Cesar y al Consejo Dptal de gestión del riesgo.  ',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia340 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity39,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia341 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity41,
          'year' =>3,
          'value' => 0.98,
          'description' => 'A través del contrato No 19-6-0215-0-2017 del 22 diciembre de 2017, cuyo objeto es:  “Implementación de acciones de mitigación para promover un desarrollo y ordenamiento resiliente al clima y bajo en carbono en el marco de la política nacional de cambio climático en zonas rurales del departamento del Cesar”.”, el cual contempla como objetivo especifico Establecer un programa de 3.290 estufas ecoeficientes estufas eficientes y 411,25 has de bosques dendroenergéticos a través de parcelas agroforestales/huertos leñeros, lo cual le apunta a acciones para  mitigar los efectos de  la desertificación y la sequia en lo  municipios de Valledupar, La Paz, Pueblo Bello, Agustín Codazzi, Chimichagua, Curumaní, El Paso, Aguachica y San Alberto. departamento del Cesar. El cual se encuentra en fase final.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia343 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity42,
          'year' =>3,
          'value' => 100,
          'description' => 'En cumplimiento de las políticas de gestión integral de residuos y/o desechos peligrosos y de residuos de aparatos eléctricos y electrónicos, se han desarrollado hasta la fecha 5 campañas de promoción, prevención, reducción, valoración y disposición final de RAEEs, pilas, luminarias y toners, el Dia 7 de noviembre se llevo a cabo una campaña de socializacion con la Institucion Educativa Manuel German Cuello en la cual, se realizo la instalacion de un contenedor para la recoleccion de RAEES por la comunidad estudiantil de dicha institucion. Por otra parte el Apoyo y  Realizacion  de la primera jornada retorna valledupar, Entrega tus residuos postconsumo desarrollada el 9 de noviembre del 2018 en el parque los algarrobillos de la Ciudad de Valledupar.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia344 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity43,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia345 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity45,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia347 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity46,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia348 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity47,
          'year' =>3,
          'value' => 261.9,
          'description' => 'Se ha avanzado en el desarrollo del Convenio No 198 de 2017 con Corpamag cuyo objeto es:  Aunar esfuerzos técnicos, administrativos y económicos para la realización de actividades concernientes al proceso de declaración del Complejo de Humedal de Zapatosa bajo una figura de protección, de acuerdo a lo establecido en Resolución 1125 de 2015 del Ministerio de Ambiente y Desarrollo Sostenible.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia349 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity48,
          'year' =>3,
          'value' => 63.8,
          'description' => 'Se suscribió el contrato de consultoria No 19-6-00218-0-2017 del   28 de Diciembre de 2017 con la empresa UT BIODAZ, cuyo objeto es: REVISIÓN, AJUSTE, FORMULACIÓN Y APROBACIÓN  DEL PLAN DE MANEJO DEL PARQUE NATURAL REGIONAL PERIJÁ,  A TRAVÉS DE LA PARTICIPACIÓN ACTIVA DE LAS COMUNIDADES CAMPESINAS  E INDÍGENAS ASENTADAS EN EL ÁREA PROTEGIDA Y SU ZONA AMORTIGUADORA, Y DE LOS ACTORES INSTITUCIONALES QUE EJERCEN PRESENCIA Y GESTION EN ESTAS ÁREAS, EN JURISDICCIÓN DE LOS MUNICIPIOS DE MANAURE, LA PAZ Y AGUSTÍN CODAZZI. EL CONVENIO SE ENCUENTRA PRORROGADO HASTA ABRIL DEL 2019',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia350 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity49,
          'year' =>3,
          'value' => 1,
          'description' => 'Se suscribió el Acuerdo 031 de 2017 para apoyar  la mesa  regional del SIRAP Caribe y sehan adelantado toda la gestion para el giro de los recursos',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia351 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity50,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia352 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity51,
          'year' =>3,
          'value' => 98.5,
          'description' => 'Una de la principal acciones que ha realizado la Corporacion  fue el acompañamiento  brindado al MADS a traves de la realizacion de los estudios  para determinar el Entorno Regional  para la delimitación del complejo de paramos del Perija, lo cual se materializa con la Resolución 151 de enero de  2018 expedida por dicho ministerio.  En la actualidad Atraves del contrato No 19-7-0020-0-2017 10 DE NOVIEMBRE DE 2017, suscrito con ASOCIACION DE MUNICIPIOS DE LA SUBREGION CENAGA GRANDE DE SANTA MARTA ASOCIENAGA se adelantan entre otras las siguientes acciones, 1. realizar el aislamiento para la conservación. 2 registrar y actualizar información con un software GIS 3. Implementar modelos productivos sostenibles 4. Sistema productivo apícola. 5. implementar HIMP (restauración activa) a través de la reintroducción de material vegetal al azar o por núcleos (30 hectáreas). 6. implementar un programa de monitoreo y seguimiento al proceso de restauración. 7. desarrollar espacios de educación ambiental en temas relacionados con restauración, prevención de incendios, liderazgo, organizaciones sociales, prácticas productivas sostenibles, aspectos de legislación ambiental.que incluye   la zona  de alta .Montaña, subparamos  y paramos en el municipio de La Paz, Serranía del Perijá, : 
        ',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia353 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity52,
          'year' =>3,
          'value' => 1,
          'description' => 'Una de la principal acciones que ha realizado la Corporacion  fue el acompañamiento  brindado al MADS a traves de la realizacion de los estudios  para determinar el Entorno Regional  para la delimitación del complejo de paramos del Perija, lo cual se materializa con la Resolución 151 de enero de  2018 expedida por dicho ministerio.  En la actualidad Atraves del contrato No 19-7-0020-0-2017 10 DE NOVIEMBRE DE 2017, suscrito con ASOCIACION DE MUNICIPIOS DE LA SUBREGION CENAGA GRANDE DE SANTA MARTA ASOCIENAGA se adelantan entre otras las siguientes acciones, 1. realizar el aislamiento para la conservación. 2 registrar y actualizar información con un software GIS 3. Implementar modelos productivos sostenibles 4. Sistema productivo apícola. 5. implementar HIMP (restauración activa) a través de la reintroducción de material vegetal al azar o por núcleos (30 hectáreas). 6. implementar un programa de monitoreo y seguimiento al proceso de restauración. 7. desarrollar espacios de educación ambiental en temas relacionados con restauración, prevención de incendios, liderazgo, organizaciones sociales, prácticas productivas sostenibles, aspectos de legislación ambiental.que incluye   la zona  de alta .Montaña, subparamos  y paramos en el municipio de La Paz, Serranía del Perijá, : 
        ',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia354 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity53,
          'year' =>3,
          'value' => 100,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia355 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity54,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia356 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity55,
          'year' =>3,
          'value' => 100,
          'description' => 'Se gestionó con el sector privado (empresas mineras), la articulación de estrategias o alianzas que garanticen la operación del CAVFS en el periodo.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia357 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity56,
          'year' =>3,
          'value' => 3,
          'description' => 'En el marco del proceso de operación del CAVFS, se desarrollan acciones para la conservación del oso andino, cóndor y felinos en el departamento del Cesar. 

         ',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia358 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity57,
          'year' =>3,
          'value' => 100,
          'description' => 'Se adelanta estudio de la especie invasora caracol africano, además se han desarrollado capacitaciones a las comunidades para un adecuado manejo y control ante la presencia de la especie en sus hogares.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia359 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity58,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia360 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity60,
          'year' =>3,
          'value' => 75,
          'description' => 'Se adelantaron visitas de control y seguimiento al Plan de Gestion Integral de Residuos Solidos -PGIRS, a los 25 municipios del Cesar',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia362 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity61,
          'year' =>3,
          'value' => 100,
          'description' => 'Formulación del estudio de riesgo del municipio de Gamarra y Chiriguaná, Ariguaní, Bajo Cesar (estudio detallado de riesgo en el marco del proceso de formulación del POMCA Bajo Cesar-Ciénaga de Zapatosa), Zonificación de la amenaza por desbordamiento de los ríos Cesar y Badillo, arroyito de Guacoche y la Laguna de Guacoche en el sector comprendido entre el puente La Victoria (río Badillo) y la desembocadura en el río Cesar del río Seco.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia363 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity62,
          'year' =>3,
          'value' => 5,
          'description' => 'La línea estratégica implementada de la política regional de  producción y consumo responsable y sostenible, corresponde a la de emprendimiento de negocios verdes, a través de la cual se ha realizado la promoción de productos o servicios con calidades ambientales y/o aprovechamiento sostenible de la biodiversidad) y el fortalecimiento de los ya existentes, con acompañamiento de la Oficina de Negocios Verdes del MADS y la Unión Europea. Entre otras acciones se encuentran la participación estratégica en la Feria Internacional de Medio Ambiente, donde se logró apoyar a productores de miel de abeja orgánica, abonos orgánicos, mochilas y manillas de lana de ovejo como artesanías de indígenas arhuacos, kits de siembra para huertos ecológicos y artesanías del aprovechamiento de totumo del departamento del Cesar, permitiendo obtener un intercambio comercial de negocios, contribuyendo a la transformación productiva y a la generación de empleo, así como al desarrollo de sectores con alto potencial.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia364 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity63,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia365 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity66,
          'year' =>3,
          'value' => 300,
          'description' => 'Campañas didácticas efectuadas en las zonas pobladas de La Loma, La Jagua de Ibirico, Bosconia y Valledupar; mediante mimos y entrega de folletos informativos, las cuales contenian tips sobre la prevención del impacto sonoro y los resultados de monitoreo.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia368 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity68,
          'year' =>3,
          'value' => 100,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia370 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity69,
          'year' =>3,
          'value' => 100,
          'description' => 'Se gestionó el proyecto para la construcción del ecoparque río Guatapurí ante la Gobernación del Cesar.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia371 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity71,
          'year' =>3,
          'value' => 100,
          'description' => 'Desde el mes de septiembre de 2018, el edificio bioclimático se encuentra en operación.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia373 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity72,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia374 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity73,
          'year' =>3,
          'value' => 100,
          'description' => 'Se realizó capacitación del SUIT, todos los trámites están registrados en la plataforma SUIT. Se avanza en la implementación del sistema, iniciando con el proceso de digitalización.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia375 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity74,
          'year' =>3,
          'value' => 20,
          'description' => 'Los trámites fueron registrados en la plataforma SUIT y se estandarizaron todos los procedimientos a llevar a cabo para la solicitud de un trámite ambiental. Con la conformación de los grupos internos de trabajo para la gestión jurídica ambiental, de saneamiento ambiental y control de vertimientos, de PML, RESPEL y COP, se fortalecerá el proceso de trámites, a través de mecanismos que permitan la racionalización de los mismos.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia376 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity75,
          'year' =>3,
          'value' => 100,
          'description' => 'Se  han realizado los trámites  para atender  las solicitudes de usuarios  para la poda, erradicación y/o aprovechamiento de  arboles aislados en centros  urbanos y predios públicos o privados, en ese sentido se han  expedido autos de visitas y resoluciones  para la autorización o permisos para realizar dichas actividades.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia377 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity76,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia378 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity78,
          'year' =>3,
          'value' => 80,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia380 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity79,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia381 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity80,
          'year' =>3,
          'value' => 60,
          'description' => 'La meta propuesta para el año 2018 es de 200 informes de revisión documental, a corte 31 de diciembre del 2018 se cumplio con la meta establecida 365. Adicional a la meta establecida se han realizado 165 informes de revisión documental.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia382 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity81,
          'year' =>3,
          'value' => 100,
          'description' => 'La meta propuesta para el año 2018 es de 300 visitas de inspección técnica de seguimiento ambiental en campo, a corte 31 de diciembre del 2018 se cumplio con la meta establecida 321. Adicionalmente a la meta establecida se han realizado 21 visitas ',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia383 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity82,
          'year' =>3,
          'value' => 100,
          'description' => 'La meta propuesta para el año 2018 es de 300 visitas de inspeccion tecnica de seguimiento ambiental en campo, a corte 31 de diciembre del 2018 se cumplió con la meta establecida 305. Adicionalmente a la meta establecida se han realizado 5 visitas ',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia384 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity83,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia385 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity86,
          'year' =>3,
          'value' => 25,
          'description' => 'Continuamente se brinda asesoría y asistencia técnica a los municipios a través del GIT para la gestión de POMCAS y Ordenamiento Territorial. Además, en el marco del proceso de formulación del PGAR, se realizó seguimiento a los asuntos ambientales de los POT.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia388 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity87,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia389 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity88,
          'year' =>3,
          'value' => 1,
          'description' => 'Se  ejecuta el estudio de riesgo en el municipio de Gamarra y Chiriguaná.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia390 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity89,
          'year' =>3,
          'value' => 2,
          'description' => 'Se suscribieron Convenios con los cuerpos de bomberos de Aguachica, El Paso, Bosconia, El Copey, San Alberto, Codazzi, Pailitas, La Paz y Curumaní. Se realizaron cartillas para la divulgación de medidas de prevencion de incendios forestales, se crearon las vigías rurales como mecanismo de alertas tempranas para combatir los incendios forestales en los municipios de Becerril, La Jagua de Ibirico, El Paso, Chiriguaná, El Copey, Bosconia, Aguachica. Se conformaron brigadas forestales en el corregimiento de La Mesa, río La Mula (Chiriguaná), vereda Nueva Orleans municipio de El Copey. Se formuló el plan de acción sobre prevención de incendios forestales tomando como referencia a 10 municipios del Cesar con algunos items como la creación de un grupo de investigación para hacer las diligencias respectivas en caso de presentarse un evento de incendios forestales de gran magnitud.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia391 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity90,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia392 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity92,
          'year' =>3,
          'value' => 10,
          'description' => 'Se gestionó proyecto ante el OCAD de Corpocesar para la revisión y optimización del diseño de la red hidroclimatológica del Cesar, el cual se encuentra en ejecución a través del Contrato No 19-6-0201-0-2018.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia394 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity93,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia395 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity94,
          'year' =>3,
          'value' => 200,
          'description' => 'Se desarrollaron cuatro campañas de monitoreo de corrientes de aguas superficiales,(con el fin de establecer el estado y si es posible la cantidad del recurso hidrico y de los cuerpos de agua) en las corrientes denominadas Manaure, Badillo, Azucarbuena, Garupal, Seco, Maracas, Socomba, Sororia, Tucuy, San Pedro, Guatapurí, Ariguaní, Los Clavos, Chiriaimo, Magiriaimo, Casacara, Pereira, Mariangola y ariguianicito con el objetivo de establecer el estado que presentaban los mismos. ',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia396 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity96,
          'year' =>3,
          'value' => 206.6,
          'description' => 'Corresponde a los 12 boletines informativos generados de manera mensual, los cuales contienen los datos de calidad del aire para cada uno de los centros poblados ubicados en la zona minera del Cesar y la ciudad de Valledupar. Además se diseñó y divulgó una cartilla informativa del año 2018, se realizaron mesas de trabajos con todos los actores del departamento del Cesar; donde se representan los resultados de calidad del aire de la zona minera del Cesar y los avances en la gestión de Corpocesar para mejorar las condiciones ambientales (aire y agua) de la zona centro del Cesar y Valledupar.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia398 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity97,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia399 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity98,
          'year' =>3,
          'value' => 180,
          'description' => 'En marco de formulación del PGAR, se fortaleció el SIG de la entidad a través de la adquisición de un equipo especializado para la operación del software arcgis.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia400 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity99,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia401 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity101,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia403 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity102,
          'year' =>3,
          'value' => 85,
          'description' => 'Se realizaron los apoyos a los 40 PRAES (PRAES nuevos y antiguos)',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia404 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity103,
          'year' =>3,
          'value' => 15,
          'description' => 'Se realizaron las capacitaciones, talleres y temas de información a las asociaciones y gremios.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia405 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity104,
          'year' =>3,
          'value' => 4,
          'description' => 'Se realizó trabajo con afro e indígenas: (1 comunidad indigena y las comunidades Afro del municipio del cesar y corregimientos de valledupar)',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia406 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity105,
          'year' =>3,
          'value' => 12,
          'description' => 'Se realizó reunión con el CIDEA de Valledupar, La Paz, San Diego, Aguachica, Rio De Oro, Gonzales, San Alberto.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia407 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity106,
          'year' =>3,
          'value' => 6,
          'description' => 'Asesorado el Plan de Educación ambiental del municipio de Valledupar, La Paz, San Diego y Aguachica, Rio De Oro, Gonzales, San Alberto.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia408 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity107,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia409 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity109,
          'year' =>3,
          'value' => 2,
          'description' => 'Se radicaron en el FONAM  el 8 de febrero de 2018, los proyectos denominados :    Consolidación de áreas para la recuperación y/o conservación de la biodiversidad y la cultura en el resguardo indígena Kankuamo   y    Recuperación de suelos y fuentes hídricas, como estrategia para el restablecimiento de la base natural del río Chiskuindja en el municipio de Valledupar  , formulados a través del convenio No 19-7-011-02015  suscrito con la autoridad del  pueblo Kankuamo. De estos dos proyectos se recibio requerimiento de información complementaria por parte del MADS, la cual   está en proceso de gestionarse por parte de la Subdirección Gral. del Área de Planeación.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia411 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity110,
          'year' =>3,
          'value' => 1,
          'description' => 'Se suscribio  el contrato No 19-6-0232-0-2018 el 28 de octubre debido a que el proceso de contratación de la interventoría se cayó dos veces y solo pudo ser  adjudicado el 29 de octubre(contrato No 19-6-0244-0-2018); en estos momentos el contrato no  se ha iniciado debido a que se está en el proceso de aclarar formalmente algunos errores involuntarios; en este contrato se incluye la construcción de un sistema de abastecimiento de agua para la comunidad indígena Arhuaca de Kuanima, en el municipio de Pueblo Bello.  Además, se adjudicó el contrato No 19-6-0223-0-2018 del 22 de octubre con recursos de vigencia futura por valor de $896,543,739, en el que se incluyen la construccción de dos nuevos sistemas de abastecimiento (Seykurin y Minas de Iracal) y el mejoramiento de dos sistemas (Nabusimake-sector Pinchi y Jimain); este contrato inició oficialmente el 19 de noviembre de 2018. De la meta del año 2017, que eran 2 sistemas, se contrató solo uno y el mismo se terminó en el 2018.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia412 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity111,
          'year' =>3,
          'value' => 2,
          'description' => 'Se suscribio  el contrato No 19-6-0232-0-2018 el 28 de octubre debido a que el proceso de contratación de la interventoría se cayó dos veces y solo pudo ser  adjudicado el 29 de octubre(contrato No 19-6-0244-0-2018); en estos momentos el contrato no  se ha iniciado debido a que se está en el proceso de aclarar formalmente algunos errores involuntarios; en este contrato se incluye la construcción de un sistema de abastecimiento de agua para la comunidad indígena Arhuaca de Kuanima, en el municipio de Pueblo Bello.  Además, se adjudicó el contrato No 19-6-0223-0-2018 del 22 de octubre con recursos de vigencia futura por valor de $896,543,739, en el que se incluyen la construccción de dos nuevos sistemas de abastecimiento (Seykurin y Minas de Iracal) y el mejoramiento de dos sistemas (Nabusimake-sector Pinchi y Jimain); este contrato inició oficialmente el 19 de noviembre de 2018. De la meta del año 2017, que eran 2 sistemas, se contrató solo uno y el mismo se terminó en el 2018.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia413 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity112,
          'year' =>3,
          'value' => 52,
          'description' => 'Para el año 2018 se dispuso de la suma de $100.000.000 para suscribir convenio con autoridad Arhuaca y así poder coadyuvar a la gestión de recursos del MADS en el marco de la implementación del programa Guardabosques Corazón del Mundo para la Sierra Nevada de Santa Marta; sin embargo,  el MADS no priorizó este proyecto y por lo tanto no dispuso los recursos; ante esta situación se definió aplazar la meta para el periodo 2019.  ',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia414 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity113,
          'year' =>3,
          'value' => 1,
          'description' => 'Dentro del proyecto Uso Sostenible y Conservación de la biodiversiad en zonas secas para garantizar el flujo de servicios ecosistémicos y mitigar los impactos de la deforestación y desertificación, que desarrolla el PNUD en el marco del proyecto GET del MADS, en el cual CORPOCESAR participa como socio estratégico, se ha desarrollado la caracterización biofisica y socioeconómica , análisis de los atributos ecológicos y delimitación del área y se tiene una propuesta de declaratoria de un Distrito de Conservación de Suelos, la cual  fué revisada por CORPOCESAR y PNUD, y se ajustó por parte de   PATRIMONIO NATURAL    que es el consultor del proyecto, se solicitó concepto al Ministerio de Minas y Energía sobre su traslape con titulos mineros o solicitudes de concesiones mineras, encontrando que el área presenta traslapes con  4 titulos minero (LK9-10451, 0305-20, HI1-08001X y 0179-20)  que abarcan aproximadamente el 10%, de la extensión del área protegida proyectada.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia415 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity114,
          'year' =>3,
          'value' => 12.5,
          'description' => 'Se realizó el proceso de selección a mediados de julio pasado y solo se suscribio contrato No 19-6-0232-0-2018 el 28 de octubre debido a que el proceso de contratación de la interventoría se cayó dos veces y solo pudo ser  adjudicado el 29 de octubre(contrato No 19-6-0244-0-2018); en estos momentos el contrato no  se ha iniciado debido a que se está en el proceso de aclarar formalmente algunos errores involuntarios; en este contrato se incluye la implementación de 5 hectáreas de unidades agroforestales  en la comunidad indígena Arhuaca de Kuanima, en el municipio de Pueblo Bello.  Además, se adjudicó el contrato No 19-6-0223-0-2018 del 22 de octubre con recursos de vigencia futura por valor de $896,543,739, en el que se incluye la implementación de 25 hectáreas de unidades agroforestales en varias comunidades del pueblo Arhuaco en el municipio de Pueblo Bello; este contrato inició oficialmente el 19 de noviembre de 2018. De la meta del año 2017, que eran 5 has, la misma se terminó  de ejecutar en el 2018.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia416 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity115,
          'year' =>3,
          'value' => 50,
          'description' => 'Se realizó el proceso de selección a mediados de julio pasado y solo suscribio contrato No 19-6-0232-0-2018 el 28 de octubre debido a que el proceso de contratación de la interventoría se cayó dos veces y solo pudo ser  adjudicado el 29 de octubre(contrato No 19-6-0244-0-2018); en estos momentos el contrato no  se ha iniciado debido a que se está en el proceso de aclarar formalmente algunos errores involuntarios; en este contrato se incluye la construcción de 4.000 metros de cercado para aislar áreas de interés ambiental y cultural en las comunidades indígenas Arhuacas de Kuanima y Jimain, en el municipio de Pueblo Bello.  Además, se adjudicó el contrato No 19-6-0223-0-2018 del 22 de octubre con recursos de vigencia futura por valor de $896,543,739, en el que se incluyen la construccción de 2.000 metros de cercado para aislar áreas de interés ambiental en el asentamiento indígena Arhuaco de Seykurin; este contrato inició oficialmente el 19 de noviembre de 2018. De la meta del año 2017, que eran 5 has, la misma se terminó  de ejecutar en el 2018.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia417 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity116,
          'year' =>3,
          'value' => 1,
          'description' => 'Se realizó el proceso de selección a mediados de julio pasado y solo suscribio contrato No 19-6-0232-0-2018 el 28 de octubre debido a que el proceso de contratación de la interventoría se cayó dos veces y solo pudo ser  adjudicado el 29 de octubre(contrato No 19-6-0244-0-2018); en estos momentos el contrato no  se ha iniciado debido a que se está en el proceso de aclarar formalmente algunos errores involuntarios; en este contrato se incluye la implementación de un proyecto para el manejo integral de los resíduos sólidos en la comunidad indígena Arhuaca de Seykun, en el municipio de Valledupar.  Además, se adjudicó el contrato No 19-6-0223-0-2018 del 22 de octubre con recursos de vigencia futura por valor de $896,543,739, en el que se incluyen la implementación de tres proyectos para el manejo integral de los residuos sólidos en las comunidades de Seykurin, Dunaba y Gunkeyruwun en el municipio de Pueblo Bello; este contrato inició oficialmente el 19 de noviembre de 2018. ',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia418 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity118,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia420 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity120,
          'year' =>3,
          'value' => 3,
          'description' => 'Aunque existía una meta para el año 2018, los recursos dispuestos para el  proyecto no fueron suficientes para abordar dicha meta.  Se concluyó al ejecución de la meta  del año 2017, en el marco del contrato No 19-6-0194-0-2017, del 20 de noviembre de 2017, con la Unión Temporal ABIGAIL , para lo cual se implementaron 1,540 metros de cercado para aislar tres (3) áreas de interés ambiental y cultural para la comunidad afrocolombiana de Guacochito.  ',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia422 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity121,
          'year' =>3,
          'value' => 3,
          'description' => 'En julio 30 se suscribio el contrato No 19-6-0197-0-2018, por valor de $39,933,406, para la ejecución de un proyecto para el establecimiento de 2,5 has. de unidades agroforestales en la población de Guacochito, contrato que inició el 19 de agosto y concluye el 19 de enero próximo y que se encuentra finalizando. De otra parte, se concluyó la ejecución de la meta del año 2017, en el marco del  contrato No 19-6-0194-0-2017, del 20 de noviembre de 2017, con la Unión Temporal ABIGAIL, en el cual se implementaron tres (3) hectáreas de unidades agroforestales a nivel de parcelas en la comunidad afrocolombiana de Guacochito. ',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia423 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity122,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia424 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity124,
          'year' =>3,
          'value' => 87.7,
          'description' => 'Se obtiene de la ejecución de ingresos de las rentas propias de la entidad, la cual alcanzó una ejecuión del 98.7%',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia425 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity125,
          'year' =>3,
          'value' => 90.3,
          'description' => 'se obtiene del promedio de lo ejecutado en funcionamiento e inversión (informe de ejecu ión de gastos de la entidad)',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia426 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity126,
          'year' =>3,
          'value' => 100,
          'description' => 'Los bienes de la entidad se encuentran cubiertos contra eventuales contingencias con la aseguradora SURA S.A. contrato 156 del 31 de agosto de 2017, el cual fue adicionado en tiempo y valor para contar con la cobertura durante toda la vigencia del 2018',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia427 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity127,
          'year' =>3,
          'value' => 60,
          'description' => 'Se contrató para tales fines,  profesionales de apoyo (abogados) tanto en el area financiera y en la oficina juridica para el cobro persuasivo y coactivo respectivamente',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia428 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity129,
          'year' =>3,
          'value' => 75,
          'description' => 'Se han realizado los aportes al Fondo de Compensación Ambiental conforme a lo establecido en la Ley. Se transfirieron al fondo de compensacion ambiental, la totalidad de los recursos programados, acorde a la ejecución del gasto',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia430 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity130,
          'year' =>3,
          'value' => 100,
          'description' => 'La Corporación realiza gestiones ante los diferentes fondos para la cofinanciación de proyectos de interés regional ',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia431 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity131,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia432 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity132,
          'year' =>3,
          'value' => 100,
          'description' => 'Se continúa desarrollando las actividades para asegurar el mantenimiento y mejora del SIGC, en el marco de la gestión de los procesos estratégicos: planeación estratégica y gestión y mejora del SIGC.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia433 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity133,
          'year' =>3,
          'value' => 100,
          'description' => 'Se cuenta con los servicios profesionales de personal idóneo en la oficina de control interno y la Subdirección de Planeación.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia434 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity134,
          'year' =>3,
          'value' => 100,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia435 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity135,
          'year' =>3,
          'value' => 100,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia436 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity136,
          'year' =>3,
          'value' => 2,
          'description' => 'Con la operación del edificio bioclimático se inició el proceso de implementación del PIGA (uso racional de energías, uso racional del agua)',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia437 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity138,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia439 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity140,
          'year' =>3,
          'value' => 80,
          'description' => 'Se apoyaron actividades deportivas, recreativas para los funcionarios y sus familiares, establecidas en el programa de bienestar social y estímulos (Contratos 161/2018 examenes clinicos, 162/2018, suministro brigada de emergencias, falta contratación integración fin de año)',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia441 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity141,
          'year' =>3,
          'value' => 80,
          'description' => 'Contrato No 216/2018 en ejecución, plazo 2 meses, capacitación a funcionarios, se envió a coordinador financiero y tesorera a cierre presupuestal en Bogotá, pendiente capacitación cierre contable. Apoyo en capacitación a funcionarios',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia442 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity142,
          'year' =>3,
          'value' => 1,
          'description' => 'Traslado a otras seccionales de mobiliario y aires acondicionados. Celebración de contrato 240/2018, adecuaciones Curumaní. ',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia443 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity145,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia446 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity146,
          'year' =>3,
          'value' => 90,
          'description' => 'Publicaciones Totales: 2987
        SECOP: 2805
        Página Web: 182
        ',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia447 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity147,
          'year' =>3,
          'value' => 100,
          'description' => 'Orden de compra 31996 de 2018, 42 licencias de G SUITE BUSSINES de Google, proveedro Eforces.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia448 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity148,
          'year' =>3,
          'value' => 100,
          'description' => 'Contrato 19-6-0195-0-2018 Objeto   Compra, instalación y puesta en marcha del sistema de seguridad de control perimetral firewall UTM, 150 licencias de antivirus para pc y 4 para servidores  . Proceso en SECOP https://www.contratos.gov.co/consultas/detalleProceso.do?numConstancia=18-9-445974  ',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia449 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity149,
          'year' =>3,
          'value' => 100,
          'description' => 'Software en operación, se ha tenido dificultad con la implementacion, y las capacitaciones a funcionarios de Corpocesar.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia450 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity150,
          'year' =>3,
          'value' => 1,
          'description' => 'Se realizó la compra de 3 Video Proyectores, 10 Impresoras, 13 Computadores ',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia451 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity151,
          'year' =>3,
          'value' => 300,
          'description' => 'Se ejecutó el contrato No 19-6-0134-0-2018 para la prestación de servicios para la organización, administración y ejecución del plan de medios televisivos, radiales, escritos web con el propósito de difundir los diferentes programas plasmados dentro del plan de acción, así como las distintas actuaciones de la Corporación Autónoma Regional del Cesar 2018. Además se cuenta con la prestación de',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia452 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity151,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia453 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity2,
          'year' =>4,
          'value' => 1.9,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia455 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity3,
          'year' =>4,
          'value' => 6,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia456 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity4,
          'year' =>4,
          'value' => 2,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia457 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity5,
          'year' =>4,
          'value' => 2,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia458 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity6,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia459 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity9,
          'year' =>4,
          'value' => 1,
          'description' => 'Se realiza implementación de Acciones de Manejo Sostenible del Suelo, de los Ecosistemas Secos en la Microcuenca de la Quebrada Cuaré en el Municipio de la Gloria – Cesar, a través del contrato No 19-6-0143-0-2019 en el marco del acuerdo de voluntades con la empresa CENIT.
        A través de las compensaciones con ECOPETROL Se realizó adquisición de predios para la conservación de áreas de importancia estratégica en el municipio de La Gloria. 
        ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia462 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity10,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia463 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity13,
          'year' =>4,
          'value' => 200,
          'description' => 'Se ejecutó del 17 al 23 de junio de 2019 una comisión de inventario de puntos de manifestación de aguas subterráneas en jurisdicción de los municipios de san Martín y San Alberto, en el valle del Magdalena Medio. Se proyecta levantar información sobre 100 puntos aproximadamente, respectom de la tenencia de los puntos (pozos, aljibes, manantiales), así como de las pricnipales características de los puntos inventariados. La zona cubierta pertenece al Sistema Acuífero Simití, y se enmarca dentro de la zona en quie se ejecuta el proyecto MEGIA por parte de Ecopetrol, Colciencias y la Universidad Nacional de Colombia, contando con la participación del Servicio Geológico Colombiano y otras Corporaciones Autónomas Regionales.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia466 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity14,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia467 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity15,
          'year' =>4,
          'value' => 100,
          'description' => '
        La Corporación finalmente definió adelantar acciones para la implementacion y puesta en marcha de laboratorio ambiental de aguas para analisis de las aguas residuales de las fuentes hidricas siendo la mas importante el rio cesar, por sus condiciones ambientales criticas que son afectadas por la laguna el salguero de la ciudad de valledupar; con los recursos se aunaron esfuerzos para la adquisición de equipos  de laboratorio para el análisis fisicoquimicos.
        ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia468 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity16,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia469 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity17,
          'year' =>4,
          'value' => 100,
          'description' => 'La Corporación cumplió con la visita semestral de control y seguimiento a los PSMV al 100% de los PSMV, para la verificación de la calidad del vertimiento. ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia470 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity18,
          'year' =>4,
          'value' => 100,
          'description' => 'Actualmente en la coordinación para la gestión del seguimiento al aprovechamiento del recurso hídrico  reposan 24 programas de uso eficiente y ahorro del agua(PUEAA), durante el periodo evaluado se realizaron diligencias de control y seguimiento a los Programas de Uso Eficiente y Ahorro del Agua de ESP y USPD: EMPAZ, EMDUPAR, ESPUMA, EMPOSANDIEGO, EMPOBOSCONIA, CHIIRIGUANA, ACUACUR, EMPASO, ASTREA, EMCODAZZI, EMPOGLORIA, EMSOPEL, AAA LA JAGUA DE IBIRICO, EMBECERRIL, PALMERAS DE LA COSTA, TAMALAMEQUE, CNR, DRUMMOND, NORCARBON, PRODECO CALENTURITAS, PRODECO LA JAGUA DE IBIRICO, EMSERPUPA, ACUACHIM, EMPUGAM, AGUACHICA, EMCAR RIO DE ORO, ACOSMI RIO DE ORO, ACPES SAN MARTIN.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia471 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity19,
          'year' =>4,
          'value' => 555851063829787,
          'description' => 'La coordinación cuenta con 1232 usuarios activos donde reposan los diferentes actos administrativos relacionados con el recurso hidrico, se realizaron 606  actividades de seguimiento ambiental.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia472 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity20,
          'year' =>4,
          'value' => 86.77,
          'description' => 'En la coordinacion se registran 562 expedientes de concesiones de aguas superficiales , subterraneas y corrientes reglamentadas de los cuales se encuentran registrados 457, con lo cual supera la meta registrada con un 81%.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia473 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity21,
          'year' =>4,
          'value' => 100,
          'description' => 'Se realizó socialización del Acuerdo No. 002 de fecha 22 de marzo de 2019, por medio del cual se define la meta global, metas individuales de cargas contaminantes para los parametros DBO5 y SST en los cuerpos de aguas o tramos de los mismos en la jurisdicción de CORPOCESAR, para el periodo 2019-2023. La socialización se realizó en la Ciudad de Valledupar y El Paso y las sedes de las seccionales de La Jagua de Ibirico, Curumaní, Aguachica. En la socialización se hizo énfasis en el cumplimiento de las actividades del PSMV, así como la actualización del plan, para no afectarse con el factor regional del cobro de la tasa retributiva.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia474 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity22,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia475 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity23,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia476 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity24,
          'year' =>4,
          'value' => 100,
          'description' => 'Se han realizado acciones ambientales  para la generación de una cultura del agua y manejo residuos solidos, actividades de reforestación, jornadas de limpieza de puntos criticos y dotación de Puntos Ecologicos y Compost en los centros poblados de los municipios de Becerril, El Paso, Chiriguana, La Loma de Calenturitas  y La Jagua de Ibirico, áreas de influencia de los rios Calenturitas-Maracas-Tucuy y Sororia.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia477 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity25,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia478 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity26,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia479 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity27,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia480 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity28,
          'year' =>4,
          'value' => 10,
          'description' => 'Se han adelantado visitas de seguimiento a los usuarios de tasa retributiva, como se relacionan a continuación:
        1. Corregimiento de Poponte.
        2. Unidad de Servicios Publicos de Chiriguana.
        3. Corregimiento de San Roque.
        4. Corregimiento de Rincón Hondo
        5. Municipio de El Copey
        6. Mina Drummond
        7. Ecopetrol
        8. Palmera de La Costa
        9. Lagunas de la cabecera del municipio San Martin
        10. Corregimiento Santa Isabel
        11. Palmera de Alamosa
        12. Palmagro
        Con la visita se verificó si son usuarios de tasas retributivas. Se envió a la Oficina jurídica, para que adelante lo pertinente, por estar virtiendo aguas residuales sin el cumplimiento de la normatividad ambiental. ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia481 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity29,
          'year' =>4,
          'value' => 100,
          'description' => 'Visita de control y seguimiento a 100% usuarios que vierten a las fuentes hidricas.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia482 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity30,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia483 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity31,
          'year' =>4,
          'value' => 1,
          'description' => 'Se participó en las mesas de trabajo adelantadas por el nodo caribe de CC ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia484 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity32,
          'year' =>4,
          'value' => 100,
          'description' => 'A través del GIT para la gestión del riesgo de desastres, cambio climático y gestión ambiental urbana, se trabajan acciones en materia de gestión del riesgo y cambio climático en el departamento del Cesar. Además se gestionó proyecto y se encuentra en ejecución el proyecto denominado: Implementación de medidas de adaptación al cambio climático en el edificio bioclimático y el CAVFFS, sedes de Corpocesar.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia485 = DB::getPdo()->lastInsertId(); 



         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity36,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia489 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity38,
          'year' =>4,
          'value' => 100,
          'description' => 'Se adelantaron obras de mitigación del riesgo por inundación en el río Ariguaní, así como medidas no estructurales de sensibilización y educación ambiental.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia491 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity39,
          'year' =>4,
          'value' => 0.65,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia492 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity40,
          'year' =>4,
          'value' => 80,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia493 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity41,
          'year' =>4,
          'value' => 1,
          'description' => 'Se suscribio el contrato de obras numero 19-6-0235-0-2018 del 29 de octubre del 2018, con el consorcio ambiental La Galilea cuyo objeto es: implementacion de acciones de manejo sostenible en la zonas secas de los corregimientos de Minguillo y Varas Blanca, municipio de la Paz en el departamento del Cesar, del cual se tiene una ejecucion aproiximada del 98%',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia494 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity42,
          'year' =>4,
          'value' => 100,
          'description' => 'En la implementación de la política de RESPEL se han logrado identificar 10 sitios degradados por contaminación focalizados por el vertimiento de sustancias nocivas en el transporte por carreteras por eventos de contingencias en el departamento del Cesar. Los sitios de encuentran distribuidos de la forma siguiente: 1. Asfalto, municipio de El Paso, 2.  Aceite de palma, municipio de El Paso. 3.  Hidróxido de sodio, municipio de Aguachica, 4. Hidrocarburo, municipio de Tamalameque, 5. Hidrocarburo, municipio de La Gloria, 6. Hidrocarburo, municipio de Pelaya, 7. Hidrocarburo, municipio de San Martin, 8. Diesel, municipio de Becerril, 9. Hidrocarburo, municipio de Curumaní. 10. Asfalto, municipio de Bosconia.  A los cuales la Corporación ha realizado una intervención del 40% en acciones de requerimientos  y seguimiento a través de Vital y en campo cubriendo la cobertura.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia495 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity43,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia496 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity46,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia499 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity47,
          'year' =>4,
          'value' => 85,
          'description' => 'Se gestionó con el sector privado (actualmente existe convenio con la empresa Drummond, Prodeco y Enel), la articulación de estrategias o alianzas que garanticen la operación del CAVFS en el periodo.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia500 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity48,
          'year' =>4,
          'value' => 60,
          'description' => 'En el marco del proceso de operación del CAVFS, se desarrollan acciones para la conservación del oso andino, cóndor y felinos en el departamento del Cesar. Se realizó el III Congreso Internacional del Cóndor Andino en el municipio de Valledupar',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia501 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity49,
          'year' =>4,
          'value' => 1,
          'description' => 'Se han realizado campañas de manejo para el tratamiento de la especie caracol africano',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia502 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity50,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia503 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity51,
          'year' =>4,
          'value' => 45,
          'description' => 'Mediante el contrato 218 del 2017 suscrito con BIODAZ UT, se realizó  la formulacion del plan de manejo del parque natural perija area protegida declarada por la corporacion mediante el acuerdo 021 del 2016. mediante dicho proceso se encuentran incluidas 23208 hectareas del complejo de paramos del perija delimitado por el ministerio de ambiente, mediante la resolucion 151 del 2018, lo cul indica que del area total delimitada 28000 hectareas el 83% quedan incluidas con el plan de manejo.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia504 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity52,
          'year' =>4,
          'value' => 0.7,
          'description' => 'Se suscribió el Acuerdo de voluntades para la creación y consolidación de la estrategia complementaria de conservación del bosque seco tropical en las cuencas Garupal - Diluvio, entre las comunidades de las veredas Mata De Caña, Buenos Aires y Praderas De Camperucho del corregimiento de Caracolí y la vereda Brisas Del Diluvio Y Tierras Nuevas, en el corregimiento de Villa Germania, en el municipio de Valledupar, departamento de Cesar y La Corporación Autónoma Regional Del Cesar (Corpocesar), denominada: “Estrategia Complementaria de Conservación ECC del Bosque Seco Tropical en las Cuencas Garupal - Diluvio”, que aporte a la conservación del bosque seco tropical, al manejo sostenible de la diversidad biológica, el mantenimiento de los beneficios que ofrecen los ecosistemas secos, y la implementación de una gobernanza compartida, con intereses de mejorar las condiciones de vida de los pobladores locales.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia505 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity53,
          'year' =>4,
          'value' => 75,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia506 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity54,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia507 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity55,
          'year' =>4,
          'value' => 100,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia508 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity56,
          'year' =>4,
          'value' => 3,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia509 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity57,
          'year' =>4,
          'value' => 100,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia510 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity58,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia511 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity60,
          'year' =>4,
          'value' => 75,
          'description' => 'En el marco del proceso de operación del CAVFS, se desarrollan acciones para la conservación del oso andino, cóndor y felinos en el departamento del Cesar. Se realizó el III Congreso Internacional del Cóndor Andino en el municipio de Valledupar',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia513 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity61,
          'year' =>4,
          'value' => 60,
          'description' => 'Se han realizado campañas de manejo para el tratamiento de la especie caracol africano',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia514 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity62,
          'year' =>4,
          'value' => 5,
          'description' => 'Se adelantó gestión con los municipios de Valledupar, Aguachica, Codazzi y Bosconia, para actualizar la linea base ambiental urbana, conforme a los lineamientos definidos por el MADS, de los cuales se ha levantado información de los municipios de Aguachica, Bosconia y Valledupar. El municipio de Codazzi no ha reportado información a la Corporación.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia515 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity63,
          'year' =>4,
          'value' => 100,
          'description' => 'Se han adelantado visitas de control y seguimiento al Plan de Gestion Integral de Residuos Solidos -PGIRS a  los 25 municipios de la jurisidicción de Corpocesar, los cuales reposan en el expediente.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia516 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity64,
          'year' =>4,
          'value' => 1,
          'description' => 'Fueron caracterizados los municipios Gamarra, Chiriguaná, San Alberto, El Paso (estudio de riesgo por inundación), en la cuenca Bajo Cesar (estudio detallado de riesgo en el marco del proceso de formulación del POMCA Bajo Cesar-Ciénaga de Zapatosa), Zonificación de la amenaza por desbordamiento de los ríos Cesar y Badillo, arroyito de Guacoche y la Laguna de Guacoche en el sector comprendido entre el puente La Victoria (río Badillo) y la desembocadura en el río Cesar del río Seco.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia517 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity65,
          'year' =>4,
          'value' => 100,
          'description' => 'La línea estratégica implementada de la política regional de  producción y consumo responsable y sostenible, corresponde a la de emprendimiento de negocios verdes, a través de la cual se ha realizado la promoción de productos o servicios con calidades ambientales y/o aprovechamiento sostenible de la biodiversidad) y el fortalecimiento de los ya existentes, con acompañamiento de la Oficina de Negocios Verdes del MADS y la Unión Europea. ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia518 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity66,
          'year' =>4,
          'value' => 300,
          'description' => 'Campañas didácticas efectuadas en las zonas pobladas de La Loma, La Jagua de Ibirico, Bosconia y Valledupar; mediante mimos y entrega de folletos informativos, las cuales contenian tips sobre la prevención del impacto sonoro y los resultados de monitoreo.  Elaboradas en los meses de Marzo y Junio',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia519 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity68,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia521 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity69,
          'year' =>4,
          'value' => 100,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia522 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity70,
          'year' =>4,
          'value' => 1,
          'description' => 'Se ha gestionado el proyecto para la construcción del ecoparque río Guatapurí ante diferentes fuentes de financiación como el FONAM, Gobernación del Cesar, Organismos Internacionales.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia523 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity71,
          'year' =>4,
          'value' => 100,
          'description' => 'Desde el mes de septiembre de 2018, el edificio bioclimático se encuentra en operación y durante la vigencia 2019, se han desarrollado algunas adecuaciones para mejorar el acceso al edificio.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia524 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity72,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia525 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity74,
          'year' =>4,
          'value' => 1,
          'description' => 'A la fecha se han expedido los siguientes actos administrativos 338 autos de inicio de tramites para atender solicitudes de aprovechamiento forestal de arboles aislados y aprovechamiento forestal domestico, y 192 resoluciones de otrogamiento de permisos para el aprovechamiento forestal de arboles aislados y aprovechamiento forestal domestico. estos actos administrativos se han expedido por la coordinacion de recursos naturales en el area de su jurisdiccion.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia527 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity75,
          'year' =>4,
          'value' => 10,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia528 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity76,
          'year' =>4,
          'value' => 100,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia529 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity78,
          'year' =>4,
          'value' => 100,
          'description' => 'Se han logrado avances en el Sistema de atención al ciudadano. En ventanilla única se  avanza en la dotación de elementos.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia531 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity79,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia532 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity80,
          'year' =>4,
          'value' => 100,
          'description' => 'Se dio prioridad a las visitas de campo, para establecer el estado de cumplimiento de los proyectos. ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia533 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity81,
          'year' =>4,
          'value' => 100,
          'description' => 'la meta propuesta para la vigencia 2019 es la realizacion de 250 diligencias de inspecion tenica de control y seguimiento ambiental. ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia534 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity82,
          'year' =>4,
          'value' => 100,
          'description' => 'la meta propuesta para la vigencia 2019 es la realizacion de 250 diligencias de inspecion tenica de control y seguimiento ambiental. ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia535 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity83,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia536 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity85,
          'year' =>4,
          'value' => 100,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia538 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity86,
          'year' =>4,
          'value' => 25,
          'description' => 'Continuamente se brinda asesoría y asistencia técnica a los municipios a través del GIT para la gestión de POMCAS y Ordenamiento Territorial. ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia539 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity87,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia540 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity88,
          'year' =>4,
          'value' => 0.8,
          'description' => 'Se realizo un estudio de riesgo en San Alberto, Gamarra y Chiriguana.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia541 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity89,
          'year' =>4,
          'value' => 2,
          'description' => 'Se suscribieron Convenios con los cuerpos de bomberos de Aguachica, El Paso, Bosconia, El Copey, San Alberto, Codazzi, Pailitas, La Paz y Curumaní. Se realizaron cartillas para la divulgación de medidas de prevencion de incendios forestales, se crearon las vigías rurales como mecanismo de alertas tempranas para combatir los incendios forestales en los municipios de Becerril, La Jagua de Ibirico, El Paso, Chiriguaná, El Copey, Bosconia, Aguachica. Se conformaron brigadas forestales en el corregimiento de La Mesa, río La Mula (Chiriguaná), vereda Nueva Orleans municipio de El Copey. Se formuló el plan de acción sobre prevención de incendios forestales tomando como referencia a 10 municipios del Cesar con algunos items como la creación de un grupo de investigación para hacer las diligencias respectivas en caso de presentarse un evento de incendios forestales de gran magnitud.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia542 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity90,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia543 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity92,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia545 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity93,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia546 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity94,
          'year' =>4,
          'value' => 125,
          'description' => 'Se desarrollaron cinco jornadas de monitoreo de corrientes superficiales (marzo, abril, junio - 2 - y septiembre de 2019), desde el punto de vista de la cantidad (caudal líquido) como del estado del lecho de las mismas, con énfasis en un tramo de aproximadamente 2 km de longitud con centro en las bocatomas de acueductos urbanos o corregimentales. Las corrientes monitoreadas fueron Similoa, Hobito, Badillo, Manaure, Azucarbuena, Seco, Magiriaimo, Los Clavos, Tocaimo, Chiriaimo, Socomba, Maracas, San Pedro, Sororia, Casacará, Tucuy, Sicarare, La Mula, Fernambuco, Singararé, El carmen, Ariguanicito, Ariguaní, Garupal, Mariangola, Floresta, San Alberto, Aguas Claras, Torocoroma, Sánchez y Buturama. Los caudales estimados por el método de velocidad superficial y lámina de agua oscilan entre 30,12 l/s (río Seco, 27 septiembre de 2019) y 5933 l/seg (Casacará, 7 de junio de 2019)',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia547 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity95,
          'year' =>4,
          'value' => 0.4,
          'description' => 'No registra meta para el periodo evaluado.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia548 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity96,
          'year' =>4,
          'value' => 206.6,
          'description' => 'Se relacionan los 12 informes mensuales de Enero a Junio 2019, 2 informe trimestral, 1 informe semestral y 1 informe anual  (Total 16 Informes), para la zona minera del Cesar.

        Adicionalmente la misma cantidad de informes son los generados para la red de monitoreo que se localiza en la ciudad de Valledupar (16 informes).',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia549 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity97,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia550 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity98,
          'year' =>4,
          'value' => 100,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia551 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity99,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia552 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity100,
          'year' =>4,
          'value' => 90,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia553 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity101,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia554 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity102,
          'year' =>4,
          'value' => 100,
          'description' => 'Reuniones de trabajo con  E.S.P. para apoyo a la incorporación del componente CULTURA DEL AGUA en los planes de contenidos curriculares en LA PAZ, SAN DIEGO, MANAURE, AGUSTIN CODAZZI, PUEBLO BELLO Y VALLEDUPAR. MESAS CIDEA PRAE EN RIO DE ORO, SAN MARTIN, CHIMICHAGUA, PAILITAS, AGUACHICA, GAMARRA CON EMPRESAS DE SERVICIOS PUBLICOS DOMICILIARIOS.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia555 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity103,
          'year' =>4,
          'value' => 15,
          'description' => '3 Proyectos colectivos Pueblo Bello, elaboración Gallinaza (Simunurwa, Sabanitas y Montesgrandes: 17 campesinos); CDI-ICBF; Mujeres Afrodescendientes Badiillo; Lavaderos; Talleres de transformacion de residuos solidos en los  Municipios de: La Paz, San Diego, Manaure  Astrea, Becerril, El Paso y La Jagua de Ibirico; JAC Populandia; JAC area de influencia Aeropuerto',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia556 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity104,
          'year' =>4,
          'value' => 4,
          'description' => 'Visitas de motivación Instituciones Educativas y Centro Educativos etnias indigenas y afrodescendientes Pueblo Bello, Guatapuri, Los Venados y Badillo para apoyo a los proyectos etno educativos ambientales. Entrega de compostadera y punto ecologico IE Promocion Social Guatapuri (Valledupar).',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia557 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity105,
          'year' =>4,
          'value' => 6,
          'description' => 'Reuniones de trabajo  con las Alcaldias Municipales de La Paz, San Diego, Manaure y Valledupar para dinamizar CIDEAM a través de jornadas ambientales.Dos (2) Mesas de trabajo CIDEAM LA PAZ, SAN DIEGO, MANAURE y  PUEBLO BELLO, y una (1) en AGUSTIN CODAZZI. CIDEAM RIO DE ORO, SAN MARTIN, CHIMICHAGUA, PAILITAS, AGUACHICA, GAMARRA.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia558 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity106,
          'year' =>4,
          'value' => 6,
          'description' => 'Apoyo cumplimiento Planes de Accion Interinstitucionales Valledupar, La Paz, San Diego, Pueblo Bello y Manaure a través de jornadas ambientales (mejoramiento entornos criticos)',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia559 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity107,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia560 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity109,
          'year' =>4,
          'value' => 2,
          'description' => 'Se radicaron en el FONAM  el 8 de febrero de 2018, los proyectos denominados :    Consolidación de áreas para la recuperación y/o conservación de la biodiversidad y la cultura en el resguardo indígena Kankuamo   y    Recuperación de suelos y fuentes hídricas, como estrategia para el restablecimiento de la base natural del río Chiskuindja en el municipio de Valledupar  , formulados a través del convenio No 19-7-011-02015  suscrito con la autoridad del  pueblo Kankuamo. De estos dos proyectos se recibio requerimiento de información complementaria por parte del MADS, la cual fue gestionadapor la  Subdirección Gral. del Área de Planeación.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia562 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity110,
          'year' =>4,
          'value' => 1,
          'description' => 'Se está ejecutando el contrato de obra  No 19-6-0232-0-2018 del 28 de octubre, que tiene fecha de iniciación  el 13 de febrero de 2019, en estos momentos el contrato se encuentra en ejecución despues de ser prorrogado y vence el 12 de dicembre de 2019, presenta una ejecución aproximada del 90%.                                                                                                                                                                                                                      Este contrato incluye la construcción de un sistema de abastecimiento de agua para la comunidad indígena Arhuaca de Kwanim, en el municipio de Pueblo Bello.  Además, se adjudicó el contrato No 19-6-0223-0-2018 del 22 de octubre con recursos de vigencia futura por valor de $896,543,739, en el que se incluye la construccción de dos nuevos sistemas de abastecimiento (Seykurin y Minas de Iracal) y el mejoramiento de dos sistemas (Nabusimake-sector Pinchi y Jimain); este contrato inició oficialmente el 19 de noviembre de 2018, y presenta una ejecución aproximada del 95% que permite la operación de los cuatros sistemas de abastecimiento. Se proyecta construir un sistema en el asentamiento indígena Arhuaco de Gunchucua en el municipio de Pueblo Bello, para lo cual se remitieron los estudios previos al Subdirector de Gestión Ambiental para que fueran ajustados por un profesional de la ingeniería civil para que se procediera a su contratación, situación que no se ha dado a la fecha. La Meta del Plan de Acción es de 4 sistemas construidos, lo cual  se cumplió al estar construidos el de Birwa, Nabusimake, Seykurin, Iracal-Jimain, y por terminar el de Cuanime.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia563 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity111,
          'year' =>4,
          'value' => 1,
          'description' => 'Se está ejecutando el contrato de obra No 19-6-0232-0-2018 del 28 de octubre, que fecha de inicio del 13 de febrero de 2019, en estos momentos el contrato aún se encuentra en ejecución despues de ser prorrogado y vence el 12 de diciembre, presenta una ejecución aproximada del 90%.                                                                                                                                                                                                                   Este contrato incluye la construcción de un sistema de saneamiento (bateria sanitaria comunitaria) para la comunidad indígena Arhuaca de Kwanime, en el municipio de Pueblo Bello.                                                  Además, se ejecutó el contrato No 19-6-0223-0-2018 del 22 de octubre con recursos de vigencia futura por valor de $896,543,739, en el que se incluyeron y  construyeron cuatro  sistemas de saneamiento básico  (Seykurin (2), Jimain y Nabusimake).',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia564 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity113,
          'year' =>4,
          'value' => 1,
          'description' => 'Dentro del proyecto Uso Sostenible y Conservación de la biodiversiad en zonas secas para garantizar el flujo de servicios ecosistémicos y mitigar los impactos de la deforestación y desertificación, que desarrolla el PNUD en el marco del proyecto GET del MADS, en el cual CORPOCESAR participa como socio estratégico, se ha desarrollado la caracterización biofisica y socioeconómica , análisis de los atributos ecológicos y delimitación del área y se tiene una propuesta de declaratoria de un Distrito de Conservación de Suelos, la cual  fué revisada por CORPOCESAR  (a través del funcionario Wilson Marquez)   y el PNUD, y se ajustó por parte de   PATRIMONIO NATURAL    que es el consultor del proyecto, se solicitó concepto al Ministerio de Minas y Energía sobre su traslape con titulos mineros o solicitudes de concesiones mineras, encontrando que el área presenta traslapes con  4 titulos minero (LK9-10451, 0305-20, HI1-08001X y 0179-20)  que abarcan aproximadamente el 10%, de la extensión del área protegida proyectada, 5 solicitudes que abarcan aproximadamente un 60% de la misma y una solicitud de legalización de minería de hecho Ley 1382, situación que obliga ahora a un proceso de concertación con el Ministerio de MInas y Energía para determinar técnicamente que área podría ser dedicada a la conservación; además,  para avanzar en la declaratoria se requiere adelantar proceso de consulta previa por ubicarse el área dentro del territorio ancestral definido por la Línea Negra en la Sierra Nevada de Santa Marta.  Bajo este contexto,  se debe determinar por parte de la Dirección General  adelantar la concertación con el Ministerio de MInas y Energia y luego desarrollar la ruta de declaratoria lo cual implicaría incorporar la consulta previa a la misma, proceso para el que no se cuenta con la disponibilidad de recursos suficientes para el año 2019',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia566 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity114,
          'year' =>4,
          'value' => 5,
          'description' => 'Se está ejecutando  el contrato No 19-6-0232-0-2018 del 28 de octubre, que tiene como fecha de iniciación el 13 de febrero de 2019, en estos momentos el contrato presenta una ejecución del 90%. Este contrato incluyó la construcciónde 4,000 metros de cercado para aislar áreas de interés ambiental y cultural en las comunidades indigenas Arhuacos  de Kwanime y Jimain, en el municipio de Pueblo Bello. Además, se ejecuta el contrato No 19-6-0223-0-2018 del 22 de octubre por valor de $896,543,739, en el que se incluyó la construcción de 2,000 metros de cercado para aisalar áreas de interes ambiental en un asentameinto indigena Arhuaco; este contrato presenta una ejecución aproximada del 90%.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia567 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity115,
          'year' =>4,
          'value' => 5,
          'description' => 'Se está ejecutando  el contrato No 19-6-0232-0-2018 del 28 de octubre, que tiene como fecha de iniciación el 13 de febrero de 2019, en estos momentos el contrato presenta una ejecución del 90%. Este contrato incluyó la construcciónde 4,000 metros de cercado para aislar áreas de interés ambiental y cultural en las comunidades indigenas Arhuacos  de Kwanime y Jimain, en el municipio de Pueblo Bello. Además, se ejecuta el contrato No 19-6-0223-0-2018 del 22 de octubre por valor de $896,543,739, en el que se incluyó la construcción de 2,000 metros de cercado para aisalar áreas de interes ambiental en un asentameinto indigena Arhuaco; este contrato presenta una ejecución aproximada del 90%.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia568 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity118,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia571 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity120,
          'year' =>4,
          'value' => 0.5,
          'description' => 'Para el año 2019, se proyecta retomar el aislamiento de la Laguan de Guacoche, para lo cual se prepararon los estudios previos que fueron entregados en el mes de abril pasado al Director General  sin que a la fecha se haya realizado la contratación. La meta para el cuatrenio es de 4 ecosistemas recuperados, de los cuales se aislaron 3 en Guacochito.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia573 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity121,
          'year' =>4,
          'value' => 0.5,
          'description' => 'Se ejecutó el contrato No 19-6-0197-0-2018, por valor de $39,933,406, para establecimiento de un proyecto para el establecimiento de 2,5 has. de unidades agroforestales en la población de Guacochito el se encuentra plenamente ejecutado.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia574 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity122,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia575 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity124,
          'year' =>4,
          'value' => 90,
          'description' => 'Con corte a 31 de octubre de2019: TR 18,22% y TUA 43,86%. La facturación de TR y TUA se repartió en septiembre de 2019.  ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia576 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity125,
          'year' =>4,
          'value' => 99,
          'description' => ' La ejecución de ingresos va en un 50,86% con corte a 30 de junio de 2019',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia577 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity126,
          'year' =>4,
          'value' => 100,
          'description' => 'Todos los activos y bienes de la entidad se encuentran asegurados con Suramericana, mediante Contrato No 19-6-0171-0-2019 y 19-6-0172-0-2019.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia578 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity127,
          'year' =>4,
          'value' => 50,
          'description' => 'Según lo proyectado, se ha recuperado la cartera superando el 100% de lo apropiado, de conformidad a la gestión de cobro persuasivo y coactivo que adelanta la Coordinación financiera y la Oficina Jurídica de la entidad.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia579 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity129,
          'year' =>4,
          'value' => 100,
          'description' => 'Se han realizado los giros al FCA de conformidad a lo solicitado. ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia581 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity130,
          'year' =>4,
          'value' => 100,
          'description' => 'La Corporación realiza gestiones ante los diferentes fondos para la cofinanciación de proyectos de interés regional ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia582 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity131,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia583 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity132,
          'year' =>4,
          'value' => 95,
          'description' => 'Se continúa desarrollando las actividades para asegurar el mantenimiento y mejora del SIGC, en el marco de la gestión de los procesos estratégicos: planeación estratégica y gestión y mejora del SIGC.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia584 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity133,
          'year' =>4,
          'value' => 100,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia585 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity134,
          'year' =>4,
          'value' => 100,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia586 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity135,
          'year' =>4,
          'value' => 100,
          'description' => 'Se cuenta con los servicios profesionales de personal idóneo en la oficina de control interno y la Subdirección de Planeación.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia587 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity136,
          'year' =>4,
          'value' => 2,
          'description' => 'Totalmente Implementado',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia588 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity137,
          'year' =>4,
          'value' => 1,
          'description' => 'No registra meta para el periodo evaluado',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia589 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity138,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia590 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity140,
          'year' =>4,
          'value' => 86,
          'description' => 'Se han desarrollado actividades culturales y recreativas para los empleados de la entidad como; Gimnasio, estímulos educativos, clima laboral, medicina preventiva y pagos de estímulos educativos en su primera fase.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia592 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity141,
          'year' =>4,
          'value' => 90,
          'description' => 'Se implementa el programa de capacitación y formación para los funcionarios de la entidad; formación en Talento Humano, Evaluación de Desempeño, Archivo, Seguridad y Salud en el trabajo y área financiera.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia593 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity142,
          'year' =>4,
          'value' => 1,
          'description' => 'Se ha cumplido con esta meta a través de dotación de elementos de oficina a las seccionales de Corpocesar.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia594 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity144,
          'year' =>4,
          'value' => 1,
          'description' => 'No registra meta para el periodo evaluado.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia596 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity145,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia597 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity146,
          'year' =>4,
          'value' => 90,
          'description' => 'Se dio cumplimiento a los requisitos minimos de publicación en la página web de Corpocesar, Colombia compra eficiente u otros',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia598 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity147,
          'year' =>4,
          'value' => 100,
          'description' => 'Orden de compra 31996 de 2018, 42 licencias de G SUITE BUSSINES de Google, proveedro Eforces.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia599 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity148,
          'year' =>4,
          'value' => 100,
          'description' => 'Contrato 19-6-0195-0-2018 Objeto   Compra, instalación y puesta en marcha del sistema de seguridad de control perimetral firewall UTM, 150 licencias de antivirus para pc y 4 para servidores  . Proceso en SECOP https://www.contratos.gov.co/consultas/detalleProceso.do?numConstancia=18-9-445974  ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia600 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity149,
          'year' =>4,
          'value' => 100,
          'description' => 'Software en operación, se ha tenido dificultad con la implementacion, y las capacitaciones a funcionarios de Corpocesar.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia601 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity150,
          'year' =>4,
          'value' => 1,
          'description' => 'Se realizó la compra de 3 Video Proyectores, 10 Impresoras, 13 Computadores ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia602 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity151,
          'year' =>4,
          'value' => 80,
          'description' => 'Plan de Medios implementado y funcionanado.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia603 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity151,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia604 = DB::getPdo()->lastInsertId(); 
                  
         DB::table('financing_sources')->insert([
          'father_id' => 11,
          'code' => '1.1.1.1.1.1.1.1',
          'name' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
          'description' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 19,
          ]);
          $idFuente1 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 58,
          'code' => '1.1.2.2.2.1.1',
          'name' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
          'description' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 19,
          ]);
          $idFuente2 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 27,
          'code' => '1.1.2.1.1.1.1.1',
          'name' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia actual)',
          'description' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 19,
          ]);
          $idFuente3 = DB::getPdo()->lastInsertId();
           
          DB::table('financing_sources')->insert([
            'father_id' => 208,
            'code' => '1.2.5.1.3',
            'name' => 'Otros convenios',
            'description' => 'Otros convenios',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 19,
            ]);
            $idFuente4 = DB::getPdo()->lastInsertId();
            
          DB::table('financing_sources')->insert([
            'father_id' => 208,
            'code' => '1.2.5.1.4',
            'name' => 'Otros Aportes de Otras Entidades',
            'description' => 'Otros Aportes de Otras Entidades',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 19,
            ]);
            $idFuente5 = DB::getPdo()->lastInsertId();					 
      
        DB::table('financing_sources')->insert([
          'father_id' => 42,
          'code' => '1.1.2.2.1.1.1.1',
          'name' => 'Tasa retributiva (vigencia actual)',
          'description' => 'Tasa retributiva (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 19,
          ]);
          $idFuente6 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 45,
          'code' => '1.1.2.2.1.1.2.1',
          'name' => 'Tasa por el uso del agua (vigencia actual)',
          'description' => 'Tasa por el uso del agua (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 19,
          ]);
          $idFuente7 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 48,
          'code' => '1.1.2.2.1.1.3.1',
          'name' => 'Tasa de aprovechamiento Forestal (vigencia actual)',
          'description' => 'Tasa de aprovechamiento Forestal (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 19,
          ]);
          $idFuente8 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 84,
          'code' => '1.1.2.3.1.1.1',
          'name' => 'Multas ambientales (vigencia actual)',
          'description' => 'Multas ambientales (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 19,
          ]);
        $idFuente9 = DB::getPdo()->lastInsertId();
        
        DB::table('financing_sources')->insert([
          'father_id' => 23,
          'code' => '1.1.2.6',
          'name' => 'Otros Ingresos (Fotocopias)',
          'description' => 'Otros Ingresos (Fotocopias)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 19,
          ]);
          $idFuente10 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 145,
          'code' => '1.2.2.6',
          'name' => 'Rendimientos financieros',
          'description' => 'Rendimientos financieros',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 19,
          ]);
          $idFuente11 = DB::getPdo()->lastInsertId();
           
        DB::table('financing_sources')->insert([
          'father_id' => 145,
          'code' => '1.2.2.7',
          'name' => 'Excedentes financieros',
          'description' => 'Excedentes financieros',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 19,
          ]);
          $idFuente12 = DB::getPdo()->lastInsertId();

        DB::table('financing_sources')->insert([
          'father_id' => 241,
          'code' => '1.2.6.3.5',
          'name' => 'Recuperación de cartera Otras tasas',
          'description' => 'Recuperación de cartera Otras tasas',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 19,
          ]);
          $idFuente13 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 119,
          'code' => '1.1.2.5.1.1.1.4',
          'name' => 'Aportes de la Nación Funcionamiento',
          'description' => 'Aportes de la Nación Funcionamiento',
          'type_id' => 23,
          'final_level' => true,
          'group_id' => 19,
          ]);
          $idFuente14 = DB::getPdo()->lastInsertId();
           
        DB::table('financing_sources')->insert([
          'father_id' => 117,
          'code' => '1.1.2.5.1.3',
          'name' => 'Aportes inversión Fondo Nacional Ambiental - FONAM',
          'description' => 'Aportes inversión Fondo Nacional Ambiental - FONAM',
          'type_id' => 23,
          'final_level' => true,
          'group_id' => 19,
          ]);
          $idFuente15 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente1,
          'value' => 12000000000,
          'functioning_percentage' => 10,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 90,
          'functioning' => 1200000000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 10800000000,
          'year' => 1,
          ]);
          $idPlan1 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente2,
          'value' => 400000000,
          'functioning_percentage' => 40,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 50,
          'functioning' => 160000000,
          'debt_service' => 0,
          'fund' => 40000000,
          'investment' => 200000000,
          'year' => 1,
          ]);
          $idPlan2 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente3,
          'value' => 700000000,
          'functioning_percentage' => 10,
          'debt_service_percentage' => 0,
          'fund_percentage' => 20,
          'investment_percentage' => 70,
          'functioning' => 70000000,
          'debt_service' => 0,
          'fund' => 140000000,
          'investment' => 490000000,
          'year' => 1,
          ]);
          $idPlan3 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente4,
          'value' => 1100000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 1100000000,
          'year' => 1,
          ]);
          $idPlan4 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente5,
          'value' => 2849111711.8,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 2849111711.8,
          'year' => 1,
          ]);
          $idPlan5 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente6,
          'value' => 1000000000,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 1000000000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 1,
          ]);
          $idPlan6 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente7,
          'value' => 200000000,
          'functioning_percentage' => 75,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 15,
          'functioning' => 150000000,
          'debt_service' => 0,
          'fund' => 20000000,
          'investment' => 30000000,
          'year' => 1,
          ]);
          $idPlan7 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente8,
          'value' => 1200000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 90,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 120000000,
          'investment' => 1080000000,
          'year' => 1,
          ]);
          $idPlan8 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente9,
          'value' => 50000000,
          'functioning_percentage' => 8.957,
          'debt_service_percentage' => 0,
          'fund_percentage' => 22.178,
          'investment_percentage' => 68.865,
          'functioning' => 4478500,
          'debt_service' => 0,
          'fund' => 11089000,
          'investment' => 34432500,
          'year' => 1,
          ]);
          $idPlan9 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente10,
          'value' => 20000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 90,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 2000000,
          'investment' => 18000000,
          'year' => 1,
          ]);
          $idPlan10 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente11,
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
          $idPlan11 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente12,
          'value' => 2169114371.86,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 90,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 216911437.186,
          'investment' => 1952202934.674,
          'year' => 1,
          ]);
          $idPlan12 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente13,
          'value' => 4800000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 4800000000,
          'year' => 1,
          ]);
          $idPlan13 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente14,
          'value' => 2357272785,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 2357272785,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 1,
          ]);
          $idPlan14 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente1,
          'value' => 12000000000,
          'functioning_percentage' => 10,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 90,
          'functioning' => 1200000000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 10800000000,
          'year' => 2,
          ]);
          $idPlan15 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente2,
          'value' => 410800000,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 369720000,
          'debt_service' => 0,
          'fund' => 41080000,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan16 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente3,
          'value' => 700000000,
          'functioning_percentage' => 10,
          'debt_service_percentage' => 0,
          'fund_percentage' => 20,
          'investment_percentage' => 70,
          'functioning' => 70000000,
          'debt_service' => 0,
          'fund' => 140000000,
          'investment' => 490000000,
          'year' => 2,
          ]);
          $idPlan17 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente4,
          'value' => 330128924.4,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 5,
          'investment_percentage' => 95,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 16506446.22,
          'investment' => 313622478.18,
          'year' => 2,
          ]);
          $idPlan18 = DB::getPdo()->lastInsertId();
           

         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente6,
          'value' => 750000000,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 675000000,
          'debt_service' => 0,
          'fund' => 75000000,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan19 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente7,
          'value' => 350000000,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 315000000,
          'debt_service' => 0,
          'fund' => 35000000,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan20 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente8,
          'value' => 1000000000,
          'functioning_percentage' => 50,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 40,
          'functioning' => 500000000,
          'debt_service' => 0,
          'fund' => 100000000,
          'investment' => 400000000,
          'year' => 2,
          ]);
          $idPlan21 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente9,
          'value' => 60000000,
          'functioning_percentage' => 3.73,
          'debt_service_percentage' => 0,
          'fund_percentage' => 18.166,
          'investment_percentage' => 78.104,
          'functioning' => 2238000,
          'debt_service' => 0,
          'fund' => 10899600,
          'investment' => 46862400,
          'year' => 2,
          ]);
          $idPlan22 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente10,
          'value' => 1460000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 90,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 146000000,
          'investment' => 1314000000,
          'year' => 2,
          ]);
          $idPlan23 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente11,
          'value' => 80000000,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 80000000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan24 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente12,
          'value' => 1425144689.79,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 90,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 142514468.979,
          'investment' => 1282630220.811,
          'year' => 2,
          ]);
          $idPlan26 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente13,
          'value' => 3600000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 3600000000,
          'year' => 2,
          ]);
          $idPlan27 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente14,
          'value' => 2469671000,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 2469671000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan28 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente15,
          'value' => 33739069710,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 33739069710,
          'year' => 2,
          ]);
          $idPlan29 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente1,
          'value' => 14000000000,
          'functioning_percentage' => 10,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 90,
          'functioning' => 1400000000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 12600000000,
          'year' => 3,
          ]);
          $idPlan30 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente2,
          'value' => 500000000,
          'functioning_percentage' => 85,
          'debt_service_percentage' => 0,
          'fund_percentage' => 15,
          'investment_percentage' => 0,
          'functioning' => 425000000,
          'debt_service' => 0,
          'fund' => 75000000,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan31 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente3,
          'value' => 800000000,
          'functioning_percentage' => 20,
          'debt_service_percentage' => 0,
          'fund_percentage' => 15,
          'investment_percentage' => 65,
          'functioning' => 160000000,
          'debt_service' => 0,
          'fund' => 120000000,
          'investment' => 520000000,
          'year' => 3,
          ]);
          $idPlan32 = DB::getPdo()->lastInsertId();
           


         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente6,
          'value' => 1000000000,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 900000000,
          'debt_service' => 0,
          'fund' => 100000000,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan33 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente7,
          'value' => 500000000,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 0,
          'functioning' => 450000000,
          'debt_service' => 0,
          'fund' => 50000000,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan34 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente8,
          'value' => 500000000,
          'functioning_percentage' => 55,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 35,
          'functioning' => 275000000,
          'debt_service' => 0,
          'fund' => 50000000,
          'investment' => 175000000,
          'year' => 3,
          ]);
          $idPlan35 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente9,
          'value' => 50000000,
          'functioning_percentage' => 18.655,
          'debt_service_percentage' => 0,
          'fund_percentage' => 25,
          'investment_percentage' => 56.345,
          'functioning' => 9327500,
          'debt_service' => 0,
          'fund' => 12500000,
          'investment' => 28172500,
          'year' => 3,
          ]);
          $idPlan36 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente10,
          'value' => 4175314677,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 4175314677,
          'year' => 3,
          ]);
          $idPlan37 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente11,
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
          $idPlan38 = DB::getPdo()->lastInsertId();
           

         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente13,
          'value' => 3000000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 3000000000,
          'year' => 3,
          ]);
          $idPlan40 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente14,
          'value' => 2656111000,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 2656111000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan41 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente15,
          'value' => 34873054403,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 34873054403,
          'year' => 3,
          ]);
          $idPlan42 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente1,
          'value' => 12000000000,
          'functioning_percentage' => 10,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 90,
          'functioning' => 1200000000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 10800000000,
          'year' => 4,
          ]);
          $idPlan43 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente2,
          'value' => 800000000,
          'functioning_percentage' => 85,
          'debt_service_percentage' => 0,
          'fund_percentage' => 15,
          'investment_percentage' => 0,
          'functioning' => 680000000,
          'debt_service' => 0,
          'fund' => 120000000,
          'investment' => 0,
          'year' => 4,
          ]);
          $idPlan44 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente3,
          'value' => 1000000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 15,
          'investment_percentage' => 85,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 150000000,
          'investment' => 850000000,
          'year' => 4,
          ]);
          $idPlan45 = DB::getPdo()->lastInsertId();
           


         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente6,
          'value' => 1000000000,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 1000000000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 4,
          ]);
          $idPlan46 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente7,
          'value' => 500000000,
          'functioning_percentage' => 90,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 10,
          'functioning' => 450000000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 50000000,
          'year' => 4,
          ]);
          $idPlan47 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente8,
          'value' => 1000000000,
          'functioning_percentage' => 45,
          'debt_service_percentage' => 0,
          'fund_percentage' => 10,
          'investment_percentage' => 45,
          'functioning' => 450000000,
          'debt_service' => 0,
          'fund' => 100000000,
          'investment' => 450000000,
          'year' => 4,
          ]);
          $idPlan48 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente9,
          'value' => 400000000,
          'functioning_percentage' => 12.5,
          'debt_service_percentage' => 0,
          'fund_percentage' => 18.5,
          'investment_percentage' => 69,
          'functioning' => 50000000,
          'debt_service' => 0,
          'fund' => 74000000,
          'investment' => 276000000,
          'year' => 4,
          ]);
          $idPlan49 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente10,
          'value' => 5664332747,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 5664332747,
          'year' => 4,
          ]);
          $idPlan50 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente11,
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
          $idPlan51 = DB::getPdo()->lastInsertId();
           

         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente13,
          'value' => 3000000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 3000000000,
          'year' => 4,
          ]);
          $idPlan52 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente14,
          'value' => 2775008557,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 2775008557,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 4,
          ]);
          $idPlan53 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente15,
          'value' => 4081035349.17,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 4081035349.17,
          'year' => 4,
          ]);
          $idPlan54 = DB::getPdo()->lastInsertId();
          
        DB::table('implementations')->insert([
          'p_a_i_s_id'=>$idpai1,
          ]);
          $idImplementation1 = DB::getPdo()->lastInsertId();


           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 9007683035,
          'financial_plans_id' => $idPlan1,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo1 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 644933867.31,
          'financial_plans_id' => $idPlan2,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo2 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 566823300,
          'financial_plans_id' => $idPlan3,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo3 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 1100000000,
          'financial_plans_id' => $idPlan4,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo4 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 2849111711.8,
          'financial_plans_id' => $idPlan5,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo5 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 399588871,
          'financial_plans_id' => $idPlan6,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo6 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 334838437,
          'financial_plans_id' => $idPlan7,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo7 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 1179776024.67,
          'financial_plans_id' => $idPlan8,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo8 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 0,
          'financial_plans_id' => $idPlan9,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo9 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 115100,
          'financial_plans_id' => $idPlan10,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo10 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 72242814.73,
          'financial_plans_id' => $idPlan11,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo11 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 2169114371.86,
          'financial_plans_id' => $idPlan12,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo12 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 1594756054.55,
          'financial_plans_id' => $idPlan13,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo13 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 2357272785,
          'financial_plans_id' => $idPlan14,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo14 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 11612522601,
          'financial_plans_id' => $idPlan15,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo15 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 624687399,
          'financial_plans_id' => $idPlan16,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo16 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 713646831,
          'financial_plans_id' => $idPlan17,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo17 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 330128924.4,
          'financial_plans_id' => $idPlan18,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo18 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 688343702,
          'financial_plans_id' => $idPlan19,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo19 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 269831061,
          'financial_plans_id' => $idPlan20,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo20 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 1550169464.56,
          'financial_plans_id' => $idPlan21,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo21 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 1261837,
          'financial_plans_id' => $idPlan22,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo22 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 1271066250.4,
          'financial_plans_id' => $idPlan23,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo23 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 11999327.21,
          'financial_plans_id' => $idPlan24,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo24 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 1425144689.79,
          'financial_plans_id' => $idPlan26,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo26 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 5720004560.61,
          'financial_plans_id' => $idPlan27,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo27 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 2463665000,
          'financial_plans_id' => $idPlan28,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo28 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 1509781239,
          'financial_plans_id' => $idPlan29,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo29 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 10797812802,
          'financial_plans_id' => $idPlan30,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo30 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 937277228,
          'financial_plans_id' => $idPlan31,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo31 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 788506798,
          'financial_plans_id' => $idPlan32,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo32 = DB::getPdo()->lastInsertId();
           


         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 530256418,
          'financial_plans_id' => $idPlan33,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo33 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 308529298,
          'financial_plans_id' => $idPlan34,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo34 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 1242758577,
          'financial_plans_id' => $idPlan35,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo35 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 525719044,
          'financial_plans_id' => $idPlan36,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo36 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 4094627523,
          'financial_plans_id' => $idPlan37,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo37 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 13662606.78,
          'financial_plans_id' => $idPlan38,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo38 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 2231852456,
          'financial_plans_id' => $idPlan40,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo40 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 2649197649.5,
          'financial_plans_id' => $idPlan41,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo41 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 4868970803.5,
          'financial_plans_id' => $idPlan42,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo42 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 12395965787,
          'financial_plans_id' => $idPlan43,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo43 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 535140037.01,
          'financial_plans_id' => $idPlan44,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo44 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 752861183,
          'financial_plans_id' => $idPlan45,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo45 = DB::getPdo()->lastInsertId();
           


         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 185826784,
          'financial_plans_id' => $idPlan46,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo46 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 234944393,
          'financial_plans_id' => $idPlan47,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo47 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 534089784.59,
          'financial_plans_id' => $idPlan48,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo48 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 286129064,
          'financial_plans_id' => $idPlan49,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo49 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 3642352244,
          'financial_plans_id' => $idPlan50,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo50 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 12321025.93,
          'financial_plans_id' => $idPlan51,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo51 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 3720119325,
          'financial_plans_id' => $idPlan52,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo52 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 2686511840.5,
          'financial_plans_id' => $idPlan53,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo53 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 0,
          'financial_plans_id' => $idPlan54,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo54 = DB::getPdo()->lastInsertId();
      
DB::table('cost_sources')->insert([
'father_id' => 2,
'code' => '2.1.1',
'name' => 'GASTOS DE PERSONAL',
'description' => 'GASTOS DE PERSONAL',
'functioning' => TRUE,
'compensation' => FALSE,
'debt_service' => FALSE,
'group_id' => 19,
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
'group_id' => 19,
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
'group_id' => 19,
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
'group_id' => 19,
]);
$idFuenteGasto4 = DB::getPdo()->lastInsertId();

 
DB::table('cost_sources')->insert([
'father_id' => 19,
'code' => '2.1.3.3.2',
'name' => 'Conciliaciones',
'description' => 'Conciliaciones',
'functioning' => TRUE,
'compensation' => FALSE,
'debt_service' => FALSE,
'group_id' => 19,
]);
$idFuenteGasto5 = DB::getPdo()->lastInsertId();

 
DB::table('cost_sources')->insert([
'father_id' => 29,
'code' => '2.1.4.3.1',
'name' => 'Cuota de fiscalización y auditaje',
'description' => 'Cuota de fiscalización y auditaje',
'functioning' => TRUE,
'compensation' => FALSE,
'debt_service' => FALSE,
'group_id' => 19,
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
'group_id' => 19,
]);
$idFuenteGasto7 = DB::getPdo()->lastInsertId();

 
DB::table('financial_costs')->insert([
'year' => 1,
'value_bugeted' => 1288478264,
'value_comitted' => 1143503460,
'value_paid' => 0,
'own' => TRUE,
'nation' => FALSE,
'royalties' => FALSE,
'funds' => FALSE,
'functioning' => TRUE,
'compensation' => FALSE,
'debt_service' => FALSE,
'cost_sources_id' => $idFuenteGasto1,
'p_a_i_id' => $idpai1,
'group_id' => 19,
]);
$idGasto1 = DB::getPdo()->lastInsertId();

 
DB::table('financial_costs')->insert([
'year' => 1,
'value_bugeted' => 100000000,
'value_comitted' => 80141500,
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
'group_id' => 19,
]);
$idGasto2 = DB::getPdo()->lastInsertId();

 
DB::table('financial_costs')->insert([
'year' => 1,
'value_bugeted' => 1087000000,
'value_comitted' => 1046609764.51,
'value_paid' => 0,
'own' => TRUE,
'nation' => FALSE,
'royalties' => FALSE,
'funds' => FALSE,
'functioning' => TRUE,
'compensation' => FALSE,
'debt_service' => FALSE,
'cost_sources_id' => $idFuenteGasto3,
'p_a_i_id' => $idpai1,
'group_id' => 19,
]);
$idGasto3 = DB::getPdo()->lastInsertId();

 
DB::table('financial_costs')->insert([
'year' => 1,
'value_bugeted' => 12000000,
'value_comitted' => 8938781,
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
'group_id' => 19,
]);
$idGasto4 = DB::getPdo()->lastInsertId();

 
DB::table('financial_costs')->insert([
'year' => 1,
'value_bugeted' => 27000000,
'value_comitted' => 26871236,
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
'group_id' => 19,
]);
$idGasto5 = DB::getPdo()->lastInsertId();

 
DB::table('financial_costs')->insert([
'year' => 1,
'value_bugeted' => 560000000,
'value_comitted' => 559011629.88,
'value_paid' => 0,
'own' => TRUE,
'nation' => FALSE,
'royalties' => FALSE,
'funds' => FALSE,
'functioning' => FALSE,
'compensation' => TRUE,
'debt_service' => FALSE,
'cost_sources_id' => $idFuenteGasto4,
'p_a_i_id' => $idpai1,
'group_id' => 19,
]);
$idGasto6 = DB::getPdo()->lastInsertId();

 
DB::table('financial_costs')->insert([
'year' => 1,
'value_bugeted' => 70000000,
'value_comitted' => 61005101,
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
'group_id' => 19,
]);
$idGasto7 = DB::getPdo()->lastInsertId();

 
DB::table('financial_costs')->insert([
'year' => 1,
'value_bugeted' => 2302752235,
'value_comitted' => 2302752235,
'value_paid' => 0,
'own' => FALSE,
'nation' => TRUE,
'royalties' => FALSE,
'funds' => FALSE,
'functioning' => TRUE,
'compensation' => FALSE,
'debt_service' => FALSE,
'cost_sources_id' => $idFuenteGasto1,
'p_a_i_id' => $idpai1,
'group_id' => 19,
]);
$idGasto8 = DB::getPdo()->lastInsertId();

 
DB::table('financial_costs')->insert([
'year' => 1,
'value_bugeted' => 48514550,
'value_comitted' => 48514550,
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
'group_id' => 19,
]);
$idGasto9 = DB::getPdo()->lastInsertId();

 
DB::table('financial_costs')->insert([
'year' => 1,
'value_bugeted' => 6006000,
'value_comitted' => 6006000,
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
'group_id' => 19,
]);
$idGasto10 = DB::getPdo()->lastInsertId();

 
DB::table('financial_costs')->insert([
'year' => 2,
'value_bugeted' => 1551958000,
'value_comitted' => 1519784977.5,
'value_paid' => 0,
'own' => TRUE,
'nation' => FALSE,
'royalties' => FALSE,
'funds' => FALSE,
'functioning' => TRUE,
'compensation' => FALSE,
'debt_service' => FALSE,
'cost_sources_id' => $idFuenteGasto1,
'p_a_i_id' => $idpai1,
'group_id' => 19,
]);
$idGasto11 = DB::getPdo()->lastInsertId();

 
DB::table('financial_costs')->insert([
'year' => 2,
'value_bugeted' => 43000000,
'value_comitted' => 30397306,
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
'group_id' => 19,
]);
$idGasto12 = DB::getPdo()->lastInsertId();

 
DB::table('financial_costs')->insert([
'year' => 2,
'value_bugeted' => 1488000000,
'value_comitted' => 1395065739.83,
'value_paid' => 0,
'own' => TRUE,
'nation' => FALSE,
'royalties' => FALSE,
'funds' => FALSE,
'functioning' => TRUE,
'compensation' => FALSE,
'debt_service' => FALSE,
'cost_sources_id' => $idFuenteGasto3,
'p_a_i_id' => $idpai1,
'group_id' => 19,
]);
$idGasto13 = DB::getPdo()->lastInsertId();

 
DB::table('financial_costs')->insert([
'year' => 2,
'value_bugeted' => 34000000,
'value_comitted' => 33970314,
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
'group_id' => 19,
]);
$idGasto14 = DB::getPdo()->lastInsertId();

 
DB::table('financial_costs')->insert([
'year' => 2,
'value_bugeted' => 27000000,
'value_comitted' => 26461271,
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
'group_id' => 19,
]);
$idGasto15 = DB::getPdo()->lastInsertId();

 
DB::table('financial_costs')->insert([
'year' => 2,
'value_bugeted' => 707000000,
'value_comitted' => 704093072.72,
'value_paid' => 0,
'own' => TRUE,
'nation' => FALSE,
'royalties' => FALSE,
'funds' => FALSE,
'functioning' => FALSE,
'compensation' => TRUE,
'debt_service' => FALSE,
'cost_sources_id' => $idFuenteGasto4,
'p_a_i_id' => $idpai1,
'group_id' => 19,
]);
$idGasto16 = DB::getPdo()->lastInsertId();

 
DB::table('financial_costs')->insert([
'year' => 2,
'value_bugeted' => 95000000,
'value_comitted' => 94989365,
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
'group_id' => 19,
]);
$idGasto17 = DB::getPdo()->lastInsertId();

 
DB::table('financial_costs')->insert([
'year' => 2,
'value_bugeted' => 2417576000,
'value_comitted' => 2417576000,
'value_paid' => 0,
'own' => FALSE,
'nation' => TRUE,
'royalties' => FALSE,
'funds' => FALSE,
'functioning' => TRUE,
'compensation' => FALSE,
'debt_service' => FALSE,
'cost_sources_id' => $idFuenteGasto1,
'p_a_i_id' => $idpai1,
'group_id' => 19,
]);
$idGasto18 = DB::getPdo()->lastInsertId();

 
DB::table('financial_costs')->insert([
'year' => 2,
'value_bugeted' => 46089000,
'value_comitted' => 46089000,
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
'group_id' => 19,
]);
$idGasto19 = DB::getPdo()->lastInsertId();

 
DB::table('financial_costs')->insert([
'year' => 2,
'value_bugeted' => 6006000,
'value_comitted' => 6006000,
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
'group_id' => 19,
]);
$idGasto20 = DB::getPdo()->lastInsertId();

 
DB::table('financial_costs')->insert([
'year' => 3,
'value_bugeted' => 2207346818.67,
'value_comitted' => 2165792940.67,
'value_paid' => 2122742839.62,
'own' => TRUE,
'nation' => FALSE,
'royalties' => FALSE,
'funds' => FALSE,
'functioning' => TRUE,
'compensation' => FALSE,
'debt_service' => FALSE,
'cost_sources_id' => $idFuenteGasto1,
'p_a_i_id' => $idpai1,
'group_id' => 19,
]);
$idGasto21 = DB::getPdo()->lastInsertId();

 
DB::table('financial_costs')->insert([
'year' => 3,
'value_bugeted' => 12389146.32,
'value_comitted' => 12389146.32,
'value_paid' => 12389146.32,
'own' => TRUE,
'nation' => FALSE,
'royalties' => FALSE,
'funds' => FALSE,
'functioning' => TRUE,
'compensation' => FALSE,
'debt_service' => FALSE,
'cost_sources_id' => $idFuenteGasto2,
'p_a_i_id' => $idpai1,
'group_id' => 19,
]);
$idGasto22 = DB::getPdo()->lastInsertId();

 
DB::table('financial_costs')->insert([
'year' => 3,
'value_bugeted' => 1427718727.5,
'value_comitted' => 1389880774.23,
'value_paid' => 1349956524.26,
'own' => TRUE,
'nation' => FALSE,
'royalties' => FALSE,
'funds' => FALSE,
'functioning' => TRUE,
'compensation' => FALSE,
'debt_service' => FALSE,
'cost_sources_id' => $idFuenteGasto3,
'p_a_i_id' => $idpai1,
'group_id' => 19,
]);
$idGasto23 = DB::getPdo()->lastInsertId();

 
DB::table('financial_costs')->insert([
'year' => 3,
'value_bugeted' => 8662420,
'value_comitted' => 8662420,
'value_paid' => 8662420,
'own' => TRUE,
'nation' => FALSE,
'royalties' => FALSE,
'funds' => FALSE,
'functioning' => TRUE,
'compensation' => FALSE,
'debt_service' => FALSE,
'cost_sources_id' => $idFuenteGasto7,
'p_a_i_id' => $idpai1,
'group_id' => 19,
]);
$idGasto24 = DB::getPdo()->lastInsertId();

 
DB::table('financial_costs')->insert([
'year' => 3,
'value_bugeted' => 40209577,
'value_comitted' => 40209577,
'value_paid' => 40209577,
'own' => TRUE,
'nation' => FALSE,
'royalties' => FALSE,
'funds' => FALSE,
'functioning' => TRUE,
'compensation' => FALSE,
'debt_service' => FALSE,
'cost_sources_id' => $idFuenteGasto6,
'p_a_i_id' => $idpai1,
'group_id' => 19,
]);
$idGasto25 = DB::getPdo()->lastInsertId();

 
DB::table('financial_costs')->insert([
'year' => 3,
'value_bugeted' => 407499310.51,
'value_comitted' => 407499310.51,
'value_paid' => 407499310.51,
'own' => TRUE,
'nation' => FALSE,
'royalties' => FALSE,
'funds' => FALSE,
'functioning' => FALSE,
'compensation' => TRUE,
'debt_service' => FALSE,
'cost_sources_id' => $idFuenteGasto4,
'p_a_i_id' => $idpai1,
'group_id' => 19,
]);
$idGasto26 = DB::getPdo()->lastInsertId();

 
DB::table('financial_costs')->insert([
'year' => 3,
'value_bugeted' => 2603836000,
'value_comitted' => 2603836000,
'value_paid' => 2603836000,
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
$idGasto27 = DB::getPdo()->lastInsertId();

 
DB::table('financial_costs')->insert([
'year' => 3,
'value_bugeted' => 46089000,
'value_comitted' => 39175650,
'value_paid' => 39175650,
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
$idGasto28 = DB::getPdo()->lastInsertId();

 
DB::table('financial_costs')->insert([
'year' => 3,
'value_bugeted' => 6186000,
'value_comitted' => 6186000,
'value_paid' => 6186000,
'own' => FALSE,
'nation' => TRUE,
'royalties' => FALSE,
'funds' => FALSE,
'functioning' => TRUE,
'compensation' => FALSE,
'debt_service' => FALSE,
'cost_sources_id' => $idFuenteGasto6,
'p_a_i_id' => $idpai1,
'group_id' => 2,
]);
$idGasto29 = DB::getPdo()->lastInsertId();

 
      
           
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity6,
            'source_id' =>$idPlan1,
            'value' => 565537623,
            'goal' => 0,
            'evidence_balance' => 565537623,
            'age' => 1,
            ]);
            $idactivitySource1 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity14,
            'source_id' =>$idPlan1,
            'value' => 30000000,
            'goal' => 0,
            'evidence_balance' => 30000000,
            'age' => 1,
            ]);
            $idactivitySource2 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity22,
            'source_id' =>$idPlan1,
            'value' => 2052456824.84,
            'goal' => 0,
            'evidence_balance' => 2052456824.84,
            'age' => 1,
            ]);
            $idactivitySource3 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity30,
            'source_id' =>$idPlan1,
            'value' => 416000000,
            'goal' => 0,
            'evidence_balance' => 416000000,
            'age' => 1,
            ]);
            $idactivitySource4 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity36,
            'source_id' =>$idPlan1,
            'value' => 46000000,
            'goal' => 0,
            'evidence_balance' => 46000000,
            'age' => 1,
            ]);
            $idactivitySource5 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity39,
            'source_id' =>$idPlan1,
            'value' => 300000000,
            'goal' => 0,
            'evidence_balance' => 300000000,
            'age' => 1,
            ]);
            $idactivitySource6 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity43,
            'source_id' =>$idPlan1,
            'value' => 3217240909,
            'goal' => 0,
            'evidence_balance' => 3217240909,
            'age' => 1,
            ]);
            $idactivitySource7 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity50,
            'source_id' =>$idPlan1,
            'value' => 453790160,
            'goal' => 0,
            'evidence_balance' => 453790160,
            'age' => 1,
            ]);
            $idactivitySource8 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity54,
            'source_id' =>$idPlan1,
            'value' => 523497467,
            'goal' => 0,
            'evidence_balance' => 523497467,
            'age' => 1,
            ]);
            $idactivitySource9 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity58,
            'source_id' =>$idPlan1,
            'value' => 1897398189.34,
            'goal' => 0,
            'evidence_balance' => 1897398189.34,
            'age' => 1,
            ]);
            $idactivitySource10 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity68,
            'source_id' =>$idPlan1,
            'value' => 654558967,
            'goal' => 0,
            'evidence_balance' => 654558967,
            'age' => 1,
            ]);
            $idactivitySource11 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity72,
            'source_id' =>$idPlan1,
            'value' => 158000000,
            'goal' => 0,
            'evidence_balance' => 158000000,
            'age' => 1,
            ]);
            $idactivitySource12 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity76,
            'source_id' =>$idPlan1,
            'value' => 68000000,
            'goal' => 0,
            'evidence_balance' => 68000000,
            'age' => 1,
            ]);
            $idactivitySource13 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity79,
            'source_id' =>$idPlan1,
            'value' => 40000000,
            'goal' => 0,
            'evidence_balance' => 40000000,
            'age' => 1,
            ]);
            $idactivitySource14 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity83,
            'source_id' =>$idPlan1,
            'value' => 377519859.82,
            'goal' => 0,
            'evidence_balance' => 377519859.82,
            'age' => 1,
            ]);
            $idactivitySource15 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity87,
            'source_id' =>$idPlan15,
            'value' => 78153082,
            'goal' => 0,
            'evidence_balance' => 78153082,
            'age' => 1,
            ]);
            $idactivitySource16 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity90,
            'source_id' =>$idPlan15,
            'value' => 2504177598,
            'goal' => 0,
            'evidence_balance' => 2504177598,
            'age' => 1,
            ]);
            $idactivitySource17 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity97,
            'source_id' =>$idPlan15,
            'value' => 1209601824,
            'goal' => 0,
            'evidence_balance' => 1209601824,
            'age' => 1,
            ]);
            $idactivitySource18 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity107,
            'source_id' =>$idPlan15,
            'value' => 627153432,
            'goal' => 0,
            'evidence_balance' => 627153432,
            'age' => 1,
            ]);
            $idactivitySource19 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity118,
            'source_id' =>$idPlan15,
            'value' => 357654186.5,
            'goal' => 0,
            'evidence_balance' => 357654186.5,
            'age' => 1,
            ]);
            $idactivitySource20 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity122,
            'source_id' =>$idPlan15,
            'value' => 230000000,
            'goal' => 0,
            'evidence_balance' => 230000000,
            'age' => 1,
            ]);
            $idactivitySource21 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity131,
            'source_id' =>$idPlan15,
            'value' => 230136758.34,
            'goal' => 0,
            'evidence_balance' => 230136758.34,
            'age' => 1,
            ]);
            $idactivitySource22 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity138,
            'source_id' =>$idPlan15,
            'value' => 362469564,
            'goal' => 0,
            'evidence_balance' => 362469564,
            'age' => 1,
            ]);
            $idactivitySource23 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity145,
            'source_id' =>$idPlan15,
            'value' => 1523911211.49,
            'goal' => 0,
            'evidence_balance' => 1523911211.49,
            'age' => 1,
            ]);
            $idactivitySource24 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity151,
            'source_id' =>$idPlan13,
            'value' => 375537957.49,
            'goal' => 0,
            'evidence_balance' => 375537957.49,
            'age' => 1,
            ]);
            $idactivitySource25 = DB::getPdo()->lastInsertId();
            
            
            
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity83,
              'source_id' =>$idPlan15,
              'value' => 1798946086.67,
              'goal' => 0,
              'evidence_balance' => 1798946086.67,
              'age' => 1,
              ]);
              $idactivitySource26 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity145,
              'source_id' =>$idPlan13,
              'value' => 4166285536.29,
              'goal' => 0,
              'evidence_balance' => 4166285536.29,
              'age' => 1,
              ]);
              $idactivitySource27 = DB::getPdo()->lastInsertId();
              
              
              
              DB::table('evidence_financial')->insert([
                'evidence_id' => $idevidencia6,
                'activity_source_id' =>$idactivitySource1,
                'value' => 387590908,
                ]);
                $idevidenceFinancial1 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('evidence_financial')->insert([
                'evidence_id' => $idevidencia14,
                'activity_source_id' =>$idactivitySource2,
                'value' => 6010045,
                ]);
                $idevidenceFinancial2 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('evidence_financial')->insert([
                'evidence_id' => $idevidencia22,
                'activity_source_id' =>$idactivitySource3,
                'value' => 2023128105,
                ]);
                $idevidenceFinancial3 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('evidence_financial')->insert([
                'evidence_id' => $idevidencia30,
                'activity_source_id' =>$idactivitySource4,
                'value' => 402845066.6,
                ]);
                $idevidenceFinancial4 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('evidence_financial')->insert([
                'evidence_id' => $idevidencia36,
                'activity_source_id' =>$idactivitySource5,
                'value' => 46000000,
                ]);
                $idevidenceFinancial5 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('evidence_financial')->insert([
                'evidence_id' => $idevidencia39,
                'activity_source_id' =>$idactivitySource6,
                'value' => 299454110,
                ]);
                $idevidenceFinancial6 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('evidence_financial')->insert([
                'evidence_id' => $idevidencia43,
                'activity_source_id' =>$idactivitySource7,
                'value' => 3156659096,
                ]);
                $idevidenceFinancial7 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('evidence_financial')->insert([
                'evidence_id' => $idevidencia50,
                'activity_source_id' =>$idactivitySource8,
                'value' => 452180544,
                ]);
                $idevidenceFinancial8 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('evidence_financial')->insert([
                'evidence_id' => $idevidencia54,
                'activity_source_id' =>$idactivitySource9,
                'value' => 432221855.67,
                ]);
                $idevidenceFinancial9 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('evidence_financial')->insert([
                'evidence_id' => $idevidencia58,
                'activity_source_id' =>$idactivitySource10,
                'value' => 1864726810.34,
                ]);
                $idevidenceFinancial10 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('evidence_financial')->insert([
                'evidence_id' => $idevidencia68,
                'activity_source_id' =>$idactivitySource11,
                'value' => 566341208,
                ]);
                $idevidenceFinancial11 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('evidence_financial')->insert([
                'evidence_id' => $idevidencia72,
                'activity_source_id' =>$idactivitySource12,
                'value' => 151540000,
                ]);
                $idevidenceFinancial12 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('evidence_financial')->insert([
                'evidence_id' => $idevidencia76,
                'activity_source_id' =>$idactivitySource13,
                'value' => 49875504,
                ]);
                $idevidenceFinancial13 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('evidence_financial')->insert([
                'evidence_id' => $idevidencia79,
                'activity_source_id' =>$idactivitySource14,
                'value' => 33369668,
                ]);
                $idevidenceFinancial14 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('evidence_financial')->insert([
                'evidence_id' => $idevidencia83,
                'activity_source_id' =>$idactivitySource15,
                'value' => 377519859.82,
                ]);
                $idevidenceFinancial15 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('evidence_financial')->insert([
                'evidence_id' => $idevidencia87,
                'activity_source_id' =>$idactivitySource16,
                'value' => 77907272,
                ]);
                $idevidenceFinancial16 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('evidence_financial')->insert([
                'evidence_id' => $idevidencia90,
                'activity_source_id' =>$idactivitySource17,
                'value' => 2460702952.2,
                ]);
                $idevidenceFinancial17 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('evidence_financial')->insert([
                'evidence_id' => $idevidencia97,
                'activity_source_id' =>$idactivitySource18,
                'value' => 1207304427,
                ]);
                $idevidenceFinancial18 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('evidence_financial')->insert([
                'evidence_id' => $idevidencia107,
                'activity_source_id' =>$idactivitySource19,
                'value' => 588765744,
                ]);
                $idevidenceFinancial19 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('evidence_financial')->insert([
                'evidence_id' => $idevidencia118,
                'activity_source_id' =>$idactivitySource20,
                'value' => 290035841,
                ]);
                $idevidenceFinancial20 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('evidence_financial')->insert([
                'evidence_id' => $idevidencia122,
                'activity_source_id' =>$idactivitySource21,
                'value' => 15053583.16,
                ]);
                $idevidenceFinancial21 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('evidence_financial')->insert([
                'evidence_id' => $idevidencia130,
                'activity_source_id' =>$idactivitySource22,
                'value' => 219435767,
                ]);
                $idevidenceFinancial22 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('evidence_financial')->insert([
                'evidence_id' => $idevidencia137,
                'activity_source_id' =>$idactivitySource23,
                'value' => 351804493.99,
                ]);
                $idevidenceFinancial23 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('evidence_financial')->insert([
                'evidence_id' => $idevidencia144,
                'activity_source_id' =>$idactivitySource24,
                'value' => 1523911211.49,
                ]);
                $idevidenceFinancial24 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('evidence_financial')->insert([
                'evidence_id' => $idevidencia151,
                'activity_source_id' =>$idactivitySource25,
                'value' => 356545046,
                ]);
                $idevidenceFinancial25 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia83,
                  'activity_source_id' =>$idactivitySource26,
                  'value' => 1619917883.34,
                  ]);
                  $idevidenceFinancial26 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia144,
                  'activity_source_id' =>$idactivitySource27,
                  'value' => 1081376028.31,
                  ]);
                  $idevidenceFinancial27 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity6,
                    'source_id' =>$idPlan15,
                    'value' => 547315000,
                    'goal' => 0,
                    'evidence_balance' => 547315000,
                    'age' => 2,
                    ]);
                    $idactivitySource28 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity10,
                    'source_id' =>$idPlan15,
                    'value' => 230000000,
                    'goal' => 0,
                    'evidence_balance' => 230000000,
                    'age' => 2,
                    ]);
                    $idactivitySource29 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity14,
                    'source_id' =>$idPlan15,
                    'value' => 350000000,
                    'goal' => 0,
                    'evidence_balance' => 350000000,
                    'age' => 2,
                    ]);
                    $idactivitySource30 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity22,
                    'source_id' =>$idPlan15,
                    'value' => 500000000,
                    'goal' => 0,
                    'evidence_balance' => 500000000,
                    'age' => 2,
                    ]);
                    $idactivitySource32 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity30,
                    'source_id' =>$idPlan15,
                    'value' => 280000000,
                    'goal' => 0,
                    'evidence_balance' => 280000000,
                    'age' => 2,
                    ]);
                    $idactivitySource33 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity36,
                    'source_id' =>$idPlan15,
                    'value' => 380000000,
                    'goal' => 0,
                    'evidence_balance' => 380000000,
                    'age' => 2,
                    ]);
                    $idactivitySource34 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity39,
                    'source_id' =>$idPlan15,
                    'value' => 980000000,
                    'goal' => 0,
                    'evidence_balance' => 980000000,
                    'age' => 2,
                    ]);
                    $idactivitySource35 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity43,
                    'source_id' =>$idPlan15,
                    'value' => 300000000,
                    'goal' => 0,
                    'evidence_balance' => 300000000,
                    'age' => 2,
                    ]);
                    $idactivitySource36 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity46,
                    'source_id' =>$idPlan15,
                    'value' => 30000000,
                    'goal' => 0,
                    'evidence_balance' => 30000000,
                    'age' => 2,
                    ]);
                    $idactivitySource37 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity50,
                    'source_id' =>$idPlan15,
                    'value' => 340000000,
                    'goal' => 0,
                    'evidence_balance' => 340000000,
                    'age' => 2,
                    ]);
                    $idactivitySource38 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity54,
                    'source_id' =>$idPlan15,
                    'value' => 1150000000,
                    'goal' => 0,
                    'evidence_balance' => 1150000000,
                    'age' => 2,
                    ]);
                    $idactivitySource39 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity58,
                    'source_id' =>$idPlan15,
                    'value' => 2500000000,
                    'goal' => 0,
                    'evidence_balance' => 2500000000,
                    'age' => 2,
                    ]);
                    $idactivitySource40 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity68,
                    'source_id' =>$idPlan15,
                    'value' => 320000000,
                    'goal' => 0,
                    'evidence_balance' => 320000000,
                    'age' => 2,
                    ]);
                    $idactivitySource41 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity72,
                    'source_id' =>$idPlan15,
                    'value' => 300000000,
                    'goal' => 0,
                    'evidence_balance' => 300000000,
                    'age' => 2,
                    ]);
                    $idactivitySource42 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity76,
                    'source_id' =>$idPlan15,
                    'value' => 155000000,
                    'goal' => 0,
                    'evidence_balance' => 155000000,
                    'age' => 2,
                    ]);
                    $idactivitySource43 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity83,
                    'source_id' =>$idPlan15,
                    'value' => 2427685000,
                    'goal' => 0,
                    'evidence_balance' => 2427685000,
                    'age' => 2,
                    ]);
                    $idactivitySource44 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity87,
                    'source_id' =>$idPlan29,
                    'value' => 165000000,
                    'goal' => 0,
                    'evidence_balance' => 165000000,
                    'age' => 2,
                    ]);
                    $idactivitySource45 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity90,
                    'source_id' =>$idPlan29,
                    'value' => 340000000,
                    'goal' => 0,
                    'evidence_balance' => 340000000,
                    'age' => 2,
                    ]);
                    $idactivitySource46 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity97,
                    'source_id' =>$idPlan29,
                    'value' => 2432813924.4,
                    'goal' => 0,
                    'evidence_balance' => 2432813924.4,
                    'age' => 2,
                    ]);
                    $idactivitySource47 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity107,
                    'source_id' =>$idPlan29,
                    'value' => 360000000,
                    'goal' => 0,
                    'evidence_balance' => 360000000,
                    'age' => 2,
                    ]);
                    $idactivitySource49 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity118,
                    'source_id' =>$idPlan29,
                    'value' => 923754094.3,
                    'goal' => 0,
                    'evidence_balance' => 923754094.3,
                    'age' => 2,
                    ]);
                    $idactivitySource50 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity122,
                    'source_id' =>$idPlan29,
                    'value' => 200000000,
                    'goal' => 0,
                    'evidence_balance' => 200000000,
                    'age' => 2,
                    ]);
                    $idactivitySource51 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity131,
                    'source_id' =>$idPlan29,
                    'value' => 80000000,
                    'goal' => 0,
                    'evidence_balance' => 80000000,
                    'age' => 2,
                    ]);
                    $idactivitySource52 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity138,
                    'source_id' =>$idPlan29,
                    'value' => 365000000,
                    'goal' => 0,
                    'evidence_balance' => 365000000,
                    'age' => 2,
                    ]);
                    $idactivitySource53 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity145,
                    'source_id' =>$idPlan29,
                    'value' => 185000000,
                    'goal' => 0,
                    'evidence_balance' => 185000000,
                    'age' => 2,
                    ]);
                    $idactivitySource54 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity151,
                    'source_id' =>$idPlan29,
                    'value' => 250000000,
                    'goal' => 0,
                    'evidence_balance' => 250000000,
                    'age' => 2,
                    ]);
                    $idactivitySource55 = DB::getPdo()->lastInsertId();
                    
                    
                    
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity83,
                      'source_id' =>$idPlan29,
                      'value' => 467157000,
                      'goal' => 0,
                      'evidence_balance' => 467157000,
                      'age' => 2,
                      ]);
                      $idactivitySource56 = DB::getPdo()->lastInsertId();
                      
                      
                      
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia157,
                        'activity_source_id' =>$idactivitySource28,
                        'value' => 536017428,
                        ]);
                        $idevidenceFinancial28 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia161,
                        'activity_source_id' =>$idactivitySource29,
                        'value' => 229081772,
                        ]);
                        $idevidenceFinancial29 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia165,
                        'activity_source_id' =>$idactivitySource30,
                        'value' => 330554710,
                        ]);
                        $idevidenceFinancial30 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia173,
                        'activity_source_id' =>$idactivitySource32,
                        'value' => 495488541,
                        ]);
                        $idevidenceFinancial32 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia181,
                        'activity_source_id' =>$idactivitySource33,
                        'value' => 251146288.24,
                        ]);
                        $idevidenceFinancial33 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia187,
                        'activity_source_id' =>$idactivitySource34,
                        'value' => 58458556,
                        ]);
                        $idevidenceFinancial34 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia190,
                        'activity_source_id' =>$idactivitySource35,
                        'value' => 961348579,
                        ]);
                        $idevidenceFinancial35 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia194,
                        'activity_source_id' =>$idactivitySource36,
                        'value' => 222259565,
                        ]);
                        $idevidenceFinancial36 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia197,
                        'activity_source_id' =>$idactivitySource37,
                        'value' => 10000000,
                        ]);
                        $idevidenceFinancial37 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia201,
                        'activity_source_id' =>$idactivitySource38,
                        'value' => 296116310,
                        ]);
                        $idevidenceFinancial38 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia205,
                        'activity_source_id' =>$idactivitySource39,
                        'value' => 1027868703,
                        ]);
                        $idevidenceFinancial39 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia209,
                        'activity_source_id' =>$idactivitySource40,
                        'value' => 2500000000,
                        ]);
                        $idevidenceFinancial40 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia219,
                        'activity_source_id' =>$idactivitySource41,
                        'value' => 253890782,
                        ]);
                        $idevidenceFinancial41 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia223,
                        'activity_source_id' =>$idactivitySource42,
                        'value' => 100000000,
                        ]);
                        $idevidenceFinancial42 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia227,
                        'activity_source_id' =>$idactivitySource43,
                        'value' => 108670106,
                        ]);
                        $idevidenceFinancial43 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia234,
                        'activity_source_id' =>$idactivitySource44,
                        'value' => 2427685000,
                        ]);
                        $idevidenceFinancial44 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia238,
                        'activity_source_id' =>$idactivitySource45,
                        'value' => 155466028,
                        ]);
                        $idevidenceFinancial45 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia241,
                        'activity_source_id' =>$idactivitySource46,
                        'value' => 209975610.77,
                        ]);
                        $idevidenceFinancial46 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia248,
                        'activity_source_id' =>$idactivitySource47,
                        'value' => 2335187355.5,
                        ]);
                        $idevidenceFinancial47 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia258,
                        'activity_source_id' =>$idactivitySource49,
                        'value' => 299307127,
                        ]);
                        $idevidenceFinancial49 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia269,
                        'activity_source_id' =>$idactivitySource50,
                        'value' => 712155020,
                        ]);
                        $idevidenceFinancial50 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia273,
                        'activity_source_id' =>$idactivitySource51,
                        'value' => 196870802,
                        ]);
                        $idevidenceFinancial51 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia281,
                        'activity_source_id' =>$idactivitySource52,
                        'value' => 77487848,
                        ]);
                        $idevidenceFinancial52 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia288,
                        'activity_source_id' =>$idactivitySource53,
                        'value' => 363448133,
                        ]);
                        $idevidenceFinancial53 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia295,
                        'activity_source_id' =>$idactivitySource54,
                        'value' => 184880927,
                        ]);
                        $idevidenceFinancial54 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia302,
                        'activity_source_id' =>$idactivitySource55,
                        'value' => 249998816.6,
                        ]);
                        $idevidenceFinancial55 = DB::getPdo()->lastInsertId();
                        
                        
                        
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia234,
                          'activity_source_id' =>$idactivitySource56,
                          'value' => 392782078.2,
                          ]);
                          $idevidenceFinancial56 = DB::getPdo()->lastInsertId();
                          
                          
                          
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity6,
                            'source_id' =>$idPlan30,
                            'value' => 1898085525,
                            'goal' => 0,
                            'evidence_balance' => 1898085525,
                            'age' => 3,
                            ]);
                            $idactivitySource57 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity10,
                            'source_id' =>$idPlan30,
                            'value' => 25000000,
                            'goal' => 0,
                            'evidence_balance' => 25000000,
                            'age' => 3,
                            ]);
                            $idactivitySource58 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity14,
                            'source_id' =>$idPlan30,
                            'value' => 75000000,
                            'goal' => 0,
                            'evidence_balance' => 75000000,
                            'age' => 3,
                            ]);
                            $idactivitySource59 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity16,
                            'source_id' =>$idPlan30,
                            'value' => 10000000,
                            'goal' => 0,
                            'evidence_balance' => 10000000,
                            'age' => 3,
                            ]);
                            $idactivitySource60 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity22,
                            'source_id' =>$idPlan30,
                            'value' => 360000000,
                            'goal' => 0,
                            'evidence_balance' => 360000000,
                            'age' => 3,
                            ]);
                            $idactivitySource61 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity25,
                            'source_id' =>$idPlan30,
                            'value' => 50000000,
                            'goal' => 0,
                            'evidence_balance' => 50000000,
                            'age' => 3,
                            ]);
                            $idactivitySource62 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity30,
                            'source_id' =>$idPlan30,
                            'value' => 362732545.47,
                            'goal' => 0,
                            'evidence_balance' => 362732545.47,
                            'age' => 3,
                            ]);
                            $idactivitySource63 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity36,
                            'source_id' =>$idPlan30,
                            'value' => 20000000,
                            'goal' => 0,
                            'evidence_balance' => 20000000,
                            'age' => 3,
                            ]);
                            $idactivitySource64 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity39,
                            'source_id' =>$idPlan30,
                            'value' => 115208700,
                            'goal' => 0,
                            'evidence_balance' => 115208700,
                            'age' => 3,
                            ]);
                            $idactivitySource65 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity43,
                            'source_id' =>$idPlan30,
                            'value' => 645000000,
                            'goal' => 0,
                            'evidence_balance' => 645000000,
                            'age' => 3,
                            ]);
                            $idactivitySource66 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity50,
                            'source_id' =>$idPlan30,
                            'value' => 877000000,
                            'goal' => 0,
                            'evidence_balance' => 877000000,
                            'age' => 3,
                            ]);
                            $idactivitySource67 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity54,
                            'source_id' =>$idPlan30,
                            'value' => 680000000,
                            'goal' => 0,
                            'evidence_balance' => 680000000,
                            'age' => 3,
                            ]);
                            $idactivitySource68 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity58,
                            'source_id' =>$idPlan30,
                            'value' => 4075314677,
                            'goal' => 0,
                            'evidence_balance' => 4075314677,
                            'age' => 3,
                            ]);
                            $idactivitySource69 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity68,
                            'source_id' =>$idPlan30,
                            'value' => 450802925,
                            'goal' => 0,
                            'evidence_balance' => 450802925,
                            'age' => 3,
                            ]);
                            $idactivitySource70 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity72,
                            'source_id' =>$idPlan30,
                            'value' => 779199328.2,
                            'goal' => 0,
                            'evidence_balance' => 779199328.2,
                            'age' => 3,
                            ]);
                            $idactivitySource71 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity76,
                            'source_id' =>$idPlan30,
                            'value' => 103741767,
                            'goal' => 0,
                            'evidence_balance' => 103741767,
                            'age' => 3,
                            ]);
                            $idactivitySource72 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity79,
                            'source_id' =>$idPlan30,
                            'value' => 57000000,
                            'goal' => 0,
                            'evidence_balance' => 57000000,
                            'age' => 3,
                            ]);
                            $idactivitySource73 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity83,
                            'source_id' =>$idPlan30,
                            'value' => 2015914532.33,
                            'goal' => 0,
                            'evidence_balance' => 2015914532.33,
                            'age' => 3,
                            ]);
                            $idactivitySource74 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity87,
                            'source_id' =>$idPlan42,
                            'value' => 110000000,
                            'goal' => 0,
                            'evidence_balance' => 110000000,
                            'age' => 3,
                            ]);
                            $idactivitySource75 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity90,
                            'source_id' =>$idPlan42,
                            'value' => 250000000,
                            'goal' => 0,
                            'evidence_balance' => 250000000,
                            'age' => 3,
                            ]);
                            $idactivitySource76 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity97,
                            'source_id' =>$idPlan42,
                            'value' => 2160000000,
                            'goal' => 0,
                            'evidence_balance' => 2160000000,
                            'age' => 3,
                            ]);
                            $idactivitySource78 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity99,
                            'source_id' =>$idPlan42,
                            'value' => 20000000,
                            'goal' => 0,
                            'evidence_balance' => 20000000,
                            'age' => 3,
                            ]);
                            $idactivitySource79 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity101,
                            'source_id' =>$idPlan42,
                            'value' => 10000000,
                            'goal' => 0,
                            'evidence_balance' => 10000000,
                            'age' => 3,
                            ]);
                            $idactivitySource80 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity107,
                            'source_id' =>$idPlan42,
                            'value' => 350000000,
                            'goal' => 0,
                            'evidence_balance' => 350000000,
                            'age' => 3,
                            ]);
                            $idactivitySource81 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity118,
                            'source_id' =>$idPlan42,
                            'value' => 630000000,
                            'goal' => 0,
                            'evidence_balance' => 630000000,
                            'age' => 3,
                            ]);
                            $idactivitySource82 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity122,
                            'source_id' =>$idPlan42,
                            'value' => 240000000,
                            'goal' => 0,
                            'evidence_balance' => 240000000,
                            'age' => 3,
                            ]);
                            $idactivitySource83 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity131,
                            'source_id' =>$idPlan42,
                            'value' => 210000000,
                            'goal' => 0,
                            'evidence_balance' => 210000000,
                            'age' => 3,
                            ]);
                            $idactivitySource84 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity138,
                            'source_id' =>$idPlan42,
                            'value' => 536000000,
                            'goal' => 0,
                            'evidence_balance' => 536000000,
                            'age' => 3,
                            ]);
                            $idactivitySource85 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity145,
                            'source_id' =>$idPlan42,
                            'value' => 403000000,
                            'goal' => 0,
                            'evidence_balance' => 403000000,
                            'age' => 3,
                            ]);
                            $idactivitySource86 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity151,
                            'source_id' =>$idPlan42,
                            'value' => 390258233,
                            'goal' => 0,
                            'evidence_balance' => 390258233,
                            'age' => 3,
                            ]);
                            $idactivitySource87 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity83,
                              'source_id' =>$idPlan42,
                              'value' => 1477641437.2,
                              'goal' => 0,
                              'evidence_balance' => 1477641437.2,
                              'age' => 3,
                              ]);
                              $idactivitySource88 = DB::getPdo()->lastInsertId();
                              
                              
                              
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia308,
                                'activity_source_id' =>$idactivitySource57,
                                'value' => 1871260093,
                                ]);
                                $idevidenceFinancial57 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia312,
                                'activity_source_id' =>$idactivitySource58,
                                'value' => 24916145,
                                ]);
                                $idevidenceFinancial58 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia316,
                                'activity_source_id' =>$idactivitySource59,
                                'value' => 42623777,
                                ]);
                                $idevidenceFinancial59 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia318,
                                'activity_source_id' =>$idactivitySource60,
                                'value' => 10000000,
                                ]);
                                $idevidenceFinancial60 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia324,
                                'activity_source_id' =>$idactivitySource61,
                                'value' => 359708091,
                                ]);
                                $idevidenceFinancial61 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia327,
                                'activity_source_id' =>$idactivitySource62,
                                'value' => 33881588,
                                ]);
                                $idevidenceFinancial62 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia332,
                                'activity_source_id' =>$idactivitySource63,
                                'value' => 353394645.47,
                                ]);
                                $idevidenceFinancial63 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia338,
                                'activity_source_id' =>$idactivitySource64,
                                'value' => 1293000,
                                ]);
                                $idevidenceFinancial64 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia341,
                                'activity_source_id' =>$idactivitySource65,
                                'value' => 1435500,
                                ]);
                                $idevidenceFinancial65 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia345,
                                'activity_source_id' =>$idactivitySource66,
                                'value' => 631401183,
                                ]);
                                $idevidenceFinancial66 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia352,
                                'activity_source_id' =>$idactivitySource67,
                                'value' => 843355280,
                                ]);
                                $idevidenceFinancial67 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia356,
                                'activity_source_id' =>$idactivitySource68,
                                'value' => 678579512,
                                ]);
                                $idevidenceFinancial68 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia360,
                                'activity_source_id' =>$idactivitySource69,
                                'value' => 4075020768,
                                ]);
                                $idevidenceFinancial69 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia370,
                                'activity_source_id' =>$idactivitySource70,
                                'value' => 352985682.59,
                                ]);
                                $idevidenceFinancial70 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia374,
                                'activity_source_id' =>$idactivitySource71,
                                'value' => 779118697,
                                ]);
                                $idevidenceFinancial71 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia378,
                                'activity_source_id' =>$idactivitySource72,
                                'value' => 95711282,
                                ]);
                                $idevidenceFinancial72 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia381,
                                'activity_source_id' =>$idactivitySource73,
                                'value' => 56108509,
                                ]);
                                $idevidenceFinancial73 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia385,
                                'activity_source_id' =>$idactivitySource74,
                                'value' => 2015914532.33,
                                ]);
                                $idevidenceFinancial74 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia389,
                                'activity_source_id' =>$idactivitySource75,
                                'value' => 107991000,
                                ]);
                                $idevidenceFinancial75 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia392,
                                'activity_source_id' =>$idactivitySource76,
                                'value' => 223433922,
                                ]);
                                $idevidenceFinancial76 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia399,
                                'activity_source_id' =>$idactivitySource78,
                                'value' => 2129342906.59,
                                ]);
                                $idevidenceFinancial78 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia401,
                                'activity_source_id' =>$idactivitySource79,
                                'value' => 14117969,
                                ]);
                                $idevidenceFinancial79 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia403,
                                'activity_source_id' =>$idactivitySource80,
                                'value' => 1359000,
                                ]);
                                $idevidenceFinancial80 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia409,
                                'activity_source_id' =>$idactivitySource81,
                                'value' => 349764800,
                                ]);
                                $idevidenceFinancial81 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia420,
                                'activity_source_id' =>$idactivitySource82,
                                'value' => 540654823,
                                ]);
                                $idevidenceFinancial82 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia424,
                                'activity_source_id' =>$idactivitySource83,
                                'value' => 239556983.23,
                                ]);
                                $idevidenceFinancial83 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia432,
                                'activity_source_id' =>$idactivitySource84,
                                'value' => 109074444,
                                ]);
                                $idevidenceFinancial84 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia439,
                                'activity_source_id' =>$idactivitySource85,
                                'value' => 438080595,
                                ]);
                                $idevidenceFinancial85 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia446,
                                'activity_source_id' =>$idactivitySource86,
                                'value' => 349745241.21,
                                ]);
                                $idevidenceFinancial86 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia453,
                                'activity_source_id' =>$idactivitySource87,
                                'value' => 345697959,
                                ]);
                                $idevidenceFinancial87 = DB::getPdo()->lastInsertId();
                                
                                
                                
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia385,
                                  'activity_source_id' =>$idactivitySource88,
                                  'value' => 1412146135.26,
                                  ]);
                                  $idevidenceFinancial88 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity6,
                                    'source_id' =>$idPlan43,
                                    'value' => 4202976864,
                                    'goal' => 0,
                                    'evidence_balance' => 4202976864,
                                    'age' => 4,
                                    ]);
                                    $idactivitySource89 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity10,
                                    'source_id' =>$idPlan43,
                                    'value' => 300000000,
                                    'goal' => 0,
                                    'evidence_balance' => 300000000,
                                    'age' => 4,
                                    ]);
                                    $idactivitySource90 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity14,
                                    'source_id' =>$idPlan43,
                                    'value' => 250000000,
                                    'goal' => 0,
                                    'evidence_balance' => 250000000,
                                    'age' => 4,
                                    ]);
                                    $idactivitySource91 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity16,
                                    'source_id' =>$idPlan43,
                                    'value' => 50000000,
                                    'goal' => 0,
                                    'evidence_balance' => 50000000,
                                    'age' => 4,
                                    ]);
                                    $idactivitySource92 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity22,
                                    'source_id' =>$idPlan43,
                                    'value' => 756000000,
                                    'goal' => 0,
                                    'evidence_balance' => 756000000,
                                    'age' => 4,
                                    ]);
                                    $idactivitySource93 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity25,
                                    'source_id' =>$idPlan43,
                                    'value' => 200000000,
                                    'goal' => 0,
                                    'evidence_balance' => 200000000,
                                    'age' => 4,
                                    ]);
                                    $idactivitySource94 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity30,
                                    'source_id' =>$idPlan43,
                                    'value' => 350000000,
                                    'goal' => 0,
                                    'evidence_balance' => 350000000,
                                    'age' => 4,
                                    ]);
                                    $idactivitySource95 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity36,
                                    'source_id' =>$idPlan43,
                                    'value' => 100000000,
                                    'goal' => 0,
                                    'evidence_balance' => 100000000,
                                    'age' => 4,
                                    ]);
                                    $idactivitySource96 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity39,
                                    'source_id' =>$idPlan43,
                                    'value' => 50000000,
                                    'goal' => 0,
                                    'evidence_balance' => 50000000,
                                    'age' => 4,
                                    ]);
                                    $idactivitySource97 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity43,
                                    'source_id' =>$idPlan43,
                                    'value' => 170000000,
                                    'goal' => 0,
                                    'evidence_balance' => 170000000,
                                    'age' => 4,
                                    ]);
                                    $idactivitySource98 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity46,
                                    'source_id' =>$idPlan43,
                                    'value' => 150000000,
                                    'goal' => 0,
                                    'evidence_balance' => 150000000,
                                    'age' => 4,
                                    ]);
                                    $idactivitySource99 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity50,
                                    'source_id' =>$idPlan43,
                                    'value' => 120000000,
                                    'goal' => 0,
                                    'evidence_balance' => 120000000,
                                    'age' => 4,
                                    ]);
                                    $idactivitySource100 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity54,
                                    'source_id' =>$idPlan43,
                                    'value' => 1519999999,
                                    'goal' => 0,
                                    'evidence_balance' => 1519999999,
                                    'age' => 4,
                                    ]);
                                    $idactivitySource101 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity58,
                                    'source_id' =>$idPlan43,
                                    'value' => 2581023137,
                                    'goal' => 0,
                                    'evidence_balance' => 2581023137,
                                    'age' => 4,
                                    ]);
                                    $idactivitySource102 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity68,
                                    'source_id' =>$idPlan50,
                                    'value' => 350000000,
                                    'goal' => 0,
                                    'evidence_balance' => 350000000,
                                    'age' => 4,
                                    ]);
                                    $idactivitySource103 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity72,
                                    'source_id' =>$idPlan50,
                                    'value' => 980000000,
                                    'goal' => 0,
                                    'evidence_balance' => 980000000,
                                    'age' => 4,
                                    ]);
                                    $idactivitySource104 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity76,
                                    'source_id' =>$idPlan50,
                                    'value' => 170000000,
                                    'goal' => 0,
                                    'evidence_balance' => 170000000,
                                    'age' => 4,
                                    ]);
                                    $idactivitySource105 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity79,
                                    'source_id' =>$idPlan50,
                                    'value' => 200000000,
                                    'goal' => 0,
                                    'evidence_balance' => 200000000,
                                    'age' => 4,
                                    ]);
                                    $idactivitySource106 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity83,
                                    'source_id' =>$idPlan50,
                                    'value' => 894818026.83,
                                    'goal' => 0,
                                    'evidence_balance' => 894818026.83,
                                    'age' => 4,
                                    ]);
                                    $idactivitySource107 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity87,
                                    'source_id' =>$idPlan54,
                                    'value' => 30000000,
                                    'goal' => 0,
                                    'evidence_balance' => 30000000,
                                    'age' => 4,
                                    ]);
                                    $idactivitySource108 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity90,
                                    'source_id' =>$idPlan54,
                                    'value' => 250000000,
                                    'goal' => 0,
                                    'evidence_balance' => 250000000,
                                    'age' => 4,
                                    ]);
                                    $idactivitySource109 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity93,
                                    'source_id' =>$idPlan54,
                                    'value' => 50000000,
                                    'goal' => 0,
                                    'evidence_balance' => 50000000,
                                    'age' => 4,
                                    ]);
                                    $idactivitySource110 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity97,
                                    'source_id' =>$idPlan54,
                                    'value' => 1595853376,
                                    'goal' => 0,
                                    'evidence_balance' => 1595853376,
                                    'age' => 4,
                                    ]);
                                    $idactivitySource111 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity99,
                                    'source_id' =>$idPlan52,
                                    'value' => 40000000,
                                    'goal' => 0,
                                    'evidence_balance' => 40000000,
                                    'age' => 4,
                                    ]);
                                    $idactivitySource112 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity107,
                                    'source_id' =>$idPlan52,
                                    'value' => 300000000,
                                    'goal' => 0,
                                    'evidence_balance' => 300000000,
                                    'age' => 4,
                                    ]);
                                    $idactivitySource113 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity118,
                                    'source_id' =>$idPlan52,
                                    'value' => 1250000000,
                                    'goal' => 0,
                                    'evidence_balance' => 1250000000,
                                    'age' => 4,
                                    ]);
                                    $idactivitySource114 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity122,
                                    'source_id' =>$idPlan52,
                                    'value' => 100000000,
                                    'goal' => 0,
                                    'evidence_balance' => 100000000,
                                    'age' => 4,
                                    ]);
                                    $idactivitySource115 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity131,
                                    'source_id' =>$idPlan52,
                                    'value' => 510000000,
                                    'goal' => 0,
                                    'evidence_balance' => 510000000,
                                    'age' => 4,
                                    ]);
                                    $idactivitySource116 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity138,
                                    'source_id' =>$idPlan52,
                                    'value' => 215853375.999998,
                                    'goal' => 0,
                                    'evidence_balance' => 215853375.999998,
                                    'age' => 4,
                                    ]);
                                    $idactivitySource117 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity145,
                                    'source_id' =>$idPlan45,
                                    'value' => 400000000,
                                    'goal' => 0,
                                    'evidence_balance' => 400000000,
                                    'age' => 4,
                                    ]);
                                    $idactivitySource118 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity151,
                                    'source_id' =>$idPlan45,
                                    'value' => 315853375.999998,
                                    'goal' => 0,
                                    'evidence_balance' => 315853375.999998,
                                    'age' => 4,
                                    ]);
                                    $idactivitySource119 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity58,
                                      'source_id' =>$idPlan50,
                                      'value' => 3069514720.17,
                                      'goal' => 0,
                                      'evidence_balance' => 3069514720.17,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource120 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity83,
                                      'source_id' =>$idPlan54,
                                      'value' => 2155181973.17,
                                      'goal' => 0,
                                      'evidence_balance' => 2155181973.17,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource121 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity97,
                                      'source_id' =>$idPlan52,
                                      'value' => 584146624.000002,
                                      'goal' => 0,
                                      'evidence_balance' => 584146624.000002,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource122 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity138,
                                      'source_id' =>$idPlan45,
                                      'value' => 134146624.000002,
                                      'goal' => 0,
                                      'evidence_balance' => 134146624.000002,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource123 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity151,
                                      'source_id' =>$idPlan48,
                                      'value' => 84146624.0000019,
                                      'goal' => 0,
                                      'evidence_balance' => 84146624.0000019,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource124 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia459,
                                        'activity_source_id' =>$idactivitySource89,
                                        'value' => 3642262970,
                                        ]);
                                        $idevidenceFinancial89 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia463,
                                        'activity_source_id' =>$idactivitySource90,
                                        'value' => 295641078,
                                        ]);
                                        $idevidenceFinancial90 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia467,
                                        'activity_source_id' =>$idactivitySource91,
                                        'value' => 72942955,
                                        ]);
                                        $idevidenceFinancial91 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia469,
                                        'activity_source_id' =>$idactivitySource92,
                                        'value' => 50000000,
                                        ]);
                                        $idevidenceFinancial92 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia475,
                                        'activity_source_id' =>$idactivitySource93,
                                        'value' => 753369016.16,
                                        ]);
                                        $idevidenceFinancial93 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia478,
                                        'activity_source_id' =>$idactivitySource94,
                                        'value' => 199989834,
                                        ]);
                                        $idevidenceFinancial94 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia483,
                                        'activity_source_id' =>$idactivitySource95,
                                        'value' => 315743426.24,
                                        ]);
                                        $idevidenceFinancial95 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia489,
                                        'activity_source_id' =>$idactivitySource96,
                                        'value' => 32367584,
                                        ]);
                                        $idevidenceFinancial96 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia492,
                                        'activity_source_id' =>$idactivitySource97,
                                        'value' => 1121949,
                                        ]);
                                        $idevidenceFinancial97 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia496,
                                        'activity_source_id' =>$idactivitySource98,
                                        'value' => 124033205,
                                        ]);
                                        $idevidenceFinancial98 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia499,
                                        'activity_source_id' =>$idactivitySource99,
                                        'value' => 142208944,
                                        ]);
                                        $idevidenceFinancial99 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia503,
                                        'activity_source_id' =>$idactivitySource100,
                                        'value' => 114898762,
                                        ]);
                                        $idevidenceFinancial100 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia507,
                                        'activity_source_id' =>$idactivitySource101,
                                        'value' => 1490721749,
                                        ]);
                                        $idevidenceFinancial101 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia511,
                                        'activity_source_id' =>$idactivitySource102,
                                        'value' => 2581023137,
                                        ]);
                                        $idevidenceFinancial102 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia521,
                                        'activity_source_id' =>$idactivitySource103,
                                        'value' => 343260000,
                                        ]);
                                        $idevidenceFinancial103 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia525,
                                        'activity_source_id' =>$idactivitySource104,
                                        'value' => 975639966.49,
                                        ]);
                                        $idevidenceFinancial104 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia529,
                                        'activity_source_id' =>$idactivitySource105,
                                        'value' => 169603933,
                                        ]);
                                        $idevidenceFinancial105 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia532,
                                        'activity_source_id' =>$idactivitySource106,
                                        'value' => 200000000,
                                        ]);
                                        $idevidenceFinancial106 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia536,
                                        'activity_source_id' =>$idactivitySource107,
                                        'value' => 894818026.83,
                                        ]);
                                        $idevidenceFinancial107 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia540,
                                        'activity_source_id' =>$idactivitySource108,
                                        'value' => 28772779,
                                        ]);
                                        $idevidenceFinancial108 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia543,
                                        'activity_source_id' =>$idactivitySource109,
                                        'value' => 239768179,
                                        ]);
                                        $idevidenceFinancial109 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia546,
                                        'activity_source_id' =>$idactivitySource110,
                                        'value' => 31022850,
                                        ]);
                                        $idevidenceFinancial110 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia550,
                                        'activity_source_id' =>$idactivitySource111,
                                        'value' => 1595853376,
                                        ]);
                                        $idevidenceFinancial111 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia552,
                                        'activity_source_id' =>$idactivitySource112,
                                        'value' => 24744892,
                                        ]);
                                        $idevidenceFinancial112 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia560,
                                        'activity_source_id' =>$idactivitySource113,
                                        'value' => 299585653,
                                        ]);
                                        $idevidenceFinancial113 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia571,
                                        'activity_source_id' =>$idactivitySource114,
                                        'value' => 938627951,
                                        ]);
                                        $idevidenceFinancial114 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia575,
                                        'activity_source_id' =>$idactivitySource115,
                                        'value' => 65487820,
                                        ]);
                                        $idevidenceFinancial115 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia583,
                                        'activity_source_id' =>$idactivitySource116,
                                        'value' => 234539277.61,
                                        ]);
                                        $idevidenceFinancial116 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia590,
                                        'activity_source_id' =>$idactivitySource117,
                                        'value' => 215853375.999998,
                                        ]);
                                        $idevidenceFinancial117 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia597,
                                        'activity_source_id' =>$idactivitySource118,
                                        'value' => 399988433,
                                        ]);
                                        $idevidenceFinancial118 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia604,
                                        'activity_source_id' =>$idactivitySource119,
                                        'value' => 315853375.999998,
                                        ]);
                                        $idevidenceFinancial119 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia511,
                                          'activity_source_id' =>$idactivitySource120,
                                          'value' => 3069514720.17,
                                          ]);
                                          $idevidenceFinancial120 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia536,
                                          'activity_source_id' =>$idactivitySource121,
                                          'value' => 2121932221.91,
                                          ]);
                                          $idevidenceFinancial121 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia550,
                                          'activity_source_id' =>$idactivitySource122,
                                          'value' => 582885742.000002,
                                          ]);
                                          $idevidenceFinancial122 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia590,
                                          'activity_source_id' =>$idactivitySource123,
                                          'value' => 133960641.000002,
                                          ]);
                                          $idevidenceFinancial123 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia604,
                                          'activity_source_id' =>$idactivitySource124,
                                          'value' => 81313908.0000019,
                                          ]);
                                          $idevidenceFinancial124 = DB::getPdo()->lastInsertId();

                  
                                    
                  }
}